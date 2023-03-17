<?php

namespace App\Http\Controllers;

use App\Article;
use App\Visitor;
use Response;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;


class ArticleController extends Controller
{
    /**
     * Display the articles resource.
     *
     * @return mixed
     */
    public function index()
    {
        // 记录访问用户：获取有用信息
        // 记录下 ip 作为合法连接的标识（后继连接 go websock 服务）统计活跃时长与退出时间

        $articles = Article::checkAuth()
            ->orderBy(config('blog.article.sortColumn'), config('blog.article.sort'))
            ->paginate(config('blog.article.number'));

        return view('article.index', compact('articles'));
    }

    /**
     * Display the article resource by article slug.
     *
     * @param Request $request
     * @param $slug
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Request $request, $slug)
    {
        $article = Article::checkAuth()->where('slug', $slug)->firstOrFail();

        $ip = $request->getClientIp();
        $isUser = auth()->check();
        // 记录来访者
        if (!$isUser) {
            if ($ip == '::1') {
                $ip = '127.0.0.1';
            }
            Visitor::log($article->id, $ip);
        }

        // 增加条件
        $key = $ip . '_' . $article->id;
        if (!$isUser && Cache::has($key)) {
            $article->increment('view_count');
            Cache::put($key, time(), 86400);
        }

        return view('article.show', compact('article'));
    }

    public function getDocsAsset($asset = 'index.html')
    {
        if (pathinfo( $asset, PATHINFO_EXTENSION ) == 'svg') {
            \Log::info($asset);
        }
        /*
          If the extension is javascript, css, svg or does NOT
          contain .html redirect to the page they requested and the
          index.html file within that directory.
        */
        if( !in_array(pathinfo( $asset, PATHINFO_EXTENSION ), ['js', 'css', 'svg', 'jpg', 'png', 'woff', 'woff2', 'ttf'])
            && strpos( $asset, '.html' ) == null ){
            return redirect( '/docs/'.$asset.'/index.html' );
        }

        /*
          Get the contents of the asset. This can be CSS, JS, images or HTML.
        */
        $contents = File::get(public_path() . '/docs/'.$asset );

        /*
          Build a response with the asset being requested.
        */
        $response = Response::make($contents);

        /*
          If the asset is CSS, ensure the Content-Type text/css header is passed
          along with the file.
        */
        switch( pathinfo($asset, PATHINFO_EXTENSION) ){
            case 'css':
                $response->header('Content-Type', 'text/css');
                break;
            case 'js':
                $response->header('Content-Type', 'application/javascript');
                break;
        }

        /*
          Return the response
        */
        return $response;
    }
}
