<?php

namespace App\Http\Controllers;

use App\Article;
use App\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return mixed
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }

    /**
     * Search the article by keyword.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $articles = Article::query()->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('published_at', 'desc')
            ->get();

        return view('search', compact('articles'));
    }

    /**
     * @param Request $request
     * @param $collection
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function collection(Request $request, $collectionId)
    {
        $collection = Collection::find($collectionId);
        if (!$collection) {
            abort(404);
        }

        $articles = Article::query()->where('collection_id', $collectionId)
            ->orderBy('published_at', 'desc')
            ->get();

        return view('collection.index', compact('collection', 'articles'));
    }
}
