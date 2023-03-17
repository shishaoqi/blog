@extends('layouts.app')

@section('title', $article->title)

@section('content')
    <div class="article container">
        @if(isset($article->page_image))
        <div class="row text-center">
            <div class="col-md-12">
                <img alt="{{ $article->slug }}" src="{{ $article->page_image }}"  style="borde-radius:50px;max-width:100%;">
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col-md-8" style="background-color:#ffffff;">
                <p>
                <h2>{{ $article->title }}</h2>

                <div class="header">
                    <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}，
                    @if(count($article->tags))
                        <i class="fas fa-tags"></i>
                        @foreach($article->tags as $tag)
                            <a href="{{ url('tag', ['tag' => $tag->tag]) }}" style="color:#95a5a6;">{{ $tag->tag }}</a>，
                        @endforeach
                    @endif
                    <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}
                </div>
                </p>
                <hr>
                <parse content="{{ $article->content['raw'] }}"></parse>

                @if($article->is_original)
                @endif
                
                @if(config('blog.social_share.article_share'))
                <div class="footing">
                    <div class="social-share"
                        data-title="{{ $article->title }}"
                        data-description="{{ $article->title }}"
                        {{ config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : '' }}
                        {{ config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : '' }}
                        initialized></div>
                </div>
                @endif

                <comment title="Comments"
                         commentable-type="articles"
                         commentable-id="{{ $article->id }}"
                         @can('comment',$article)
                         username="{{ Auth::user()->name }}"
                         user-avatar="{{ Auth::user()->avatar }}"
                         can-comment
                        @endcan
                ></comment>
            </div>

            @include('widgets.rightMenu')
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function () {
            const imgEls = $(".article img");
            for (let el of Array.from(imgEls)) {
                $(el).wrap(
                    `<a href='${$(el).attr("src")}' class='zoom-image' data-action='zoom'></a>`
                );
            }

            $("a.zoom-image").fluidbox({
                // 缩放级别，默认 0.95
                viewportFill: 0.8,
                closeTrigger: [
                    {
                        selector: "window",
                        event: "scroll",
                    },
                ],
            });
        })
    </script>
@endsection
