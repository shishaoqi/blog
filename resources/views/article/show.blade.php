@extends('layouts.app')

@section('title', $article->title)

@section('content')
{{--    @component('particals.jumbotron')--}}
{{--        <h4>{{ $article->title }}</h4>--}}

{{--        <h6>{{ $article->subtitle }}</h6>--}}

{{--        <div class="header">--}}
{{--            <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}，--}}
{{--            @if(count($article->tags))--}}
{{--            <i class="fas fa-tags"></i>--}}
{{--                @foreach($article->tags as $tag)--}}
{{--                    <a href="{{ url('tag', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a>，--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--            <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}--}}
{{--        </div>--}}
{{--    @endcomponent--}}

    <style type="text/css">
        .container img {height: auto; max-width: 100%;}
        /*p{text-indent: 2em;}*//*首行缩进*/
    </style>

    <div id="outerdiv" style="position:fixed;top:0;left:0;background:rgba(0,0,0,0.7);z-index:999;width:100%;height:100%;display:none;">
        <div id="innerdiv" style="position:absolute;">
            <img id="bigimg" style="border:4px solid #95a5a6;" src="" />
        </div>
    </div>

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
                            <a href="{{ url('tag', ['tag' => $tag->tag]) }}" style="color:#000;">{{ $tag->tag }}</a>，
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
        $(function(){
            $("img").click(function(){
                var _this = $(this);//将当前的pimg元素作为_this传入函数
                imgShow("#outerdiv", "#innerdiv", "#bigimg", _this);
            });
        });

        function imgShow(outerdiv, innerdiv, bigimg, _this){
            var src = _this.attr("src");//获取当前点击的pimg元素中的src属性
            $(bigimg).attr("src", src);//设置#bigimg元素的src属性

            /!*获取当前点击图片的真实大小，并显示弹出层及大图*!/
            //$("<img/>").attr("src", src).load(function(){
            $("<img/>").attr("src", src).on('load', function(){
                var windowW = $(window).width();//获取当前窗口宽度
                var windowH = $(window).height();//获取当前窗口高度
                var realWidth = this.width;//获取图片真实宽度
                var realHeight = this.height;//获取图片真实高度
                var imgWidth, imgHeight;
                var scale = 0.8;//缩放尺寸，当图片真实宽度和高度大于窗口宽度和高度时进行缩放

                if(realHeight>windowH*scale) {//判断图片高度
                    imgHeight = windowH*scale;//如大于窗口高度，图片高度进行缩放
                    imgWidth = imgHeight/realHeight*realWidth;//等比例缩放宽度
                    if(imgWidth>windowW*scale) {//如宽度扔大于窗口宽度
                        imgWidth = windowW*scale;//再对宽度进行缩放
                    }
                } else if(realWidth>windowW*scale) {//如图片高度合适，判断图片宽度
                    imgWidth = windowW*scale;//如大于窗口宽度，图片宽度进行缩放
                    imgHeight = imgWidth/realWidth*realHeight;//等比例缩放高度
                } else {//如果图片真实高度和宽度都符合要求，高宽不变
                    imgWidth = realWidth;
                    imgHeight = realHeight;
                }
                $(bigimg).css("width",imgWidth);//以最终的宽度对图片缩放

                var w = (windowW-imgWidth)/2;//计算图片与窗口左边距
                var h = (windowH-imgHeight)/2;//计算图片与窗口上边距
                $(innerdiv).css({"top":h, "left":w});//设置#innerdiv的top和left属性
                $(outerdiv).fadeIn(280);//淡入显示#outerdiv及.pimg
            });

            $(outerdiv).click(function(){//再次点击淡出消失弹出层
                $(this).fadeOut(180);
            });
        }
    </script>
@endsection
