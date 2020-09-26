@extends('layouts.app')

@section('title', $article->title)

@section('content')
    @component('particals.jumbotron')
        <h4>{{ $article->title }}</h4>

        <h6>{{ $article->subtitle }}</h6>

        <div class="header">
            <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}，
            @if(count($article->tags))
            <i class="fas fa-tags"></i>
                @foreach($article->tags as $tag)
                    <a href="{{ url('tag', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a>，
                @endforeach
            @endif
            <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}
        </div>
    @endcomponent

    <div class="article container">
        @if(isset($article->page_image))
        <div class="row text-center">
            <div class="col-md-12">
                <img alt="{{ $article->slug }}" src="{{ $article->page_image }}"  style="borde-radius:50px;max-width:100%;">
            </div>
        </div>
        @endif
        <br>
        <div class="row">
            <div class="col-md-8" style="background-color:#ffffff;">

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
            </div>

            @include('widgets.rightMenu')
        </div>
    </div>

	<comment title="Comments"
	commentable-type="articles"
	commentable-id="{{ $article->id }}"
	@can('comment',$article)
	username="{{ Auth::user()->name }}"
	user-avatar="{{ Auth::user()->avatar }}"
	can-comment
	@endcan
	></comment>

@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();

        $('.article img').wrap(function(){return "<a href='"+$(this).attr("src")+"' data-lightbox='example-set'></a>"});
        $(".code_img_closed").unwrap();
        $(".code_img_opened").unwrap();
    </script>
@endsection
