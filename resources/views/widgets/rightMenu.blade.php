<div class="col-md-4">
    <div class="col-md-12">
        <!-- Blog Search Well -->
        <div class="well" style="background-color:#ffffff;">
            <h5 style="color: #34495e;">博文搜索</h5>
            <form action="{{ url('search') }}" method="get">
                <div class="input-group">
                    <input type="text" name="q" class="form-control" placeholder="{{ lang('Search') }}" required>
                    <span class="input-group-btn">
                <button class="btn btn-default" type="submit">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
                </div>
            </form>
        </div>

        <div class="well" style="background-color:#ffffff;">
            <h5 style="color: #34495e;">热门浏览</h5>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-group list-group-flush">
                        @if($hotArticles)
                            @foreach($hotArticles as $k => $article)
                                <li class="list-group-item"><a href="{{ url($article->slug) }}">{{$article['title']}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>

        @if(isset($articles))
            <div class="well" style="background-color:#ffffff;">
                <h5 style="color: #34495e;">系列文章</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group list-group-flush">
                            @if($collections)
                                @foreach($collections as $k => $collection)
                                    <li class="list-group-item"><a href="{{ url('collection', $collection->id) }}">{{$collection['name']}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <div class="well" style="background-color:#ffffff;">
                <h5 style="color: #34495e;">最新文章</h5>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="list-group list-group-flush">
                            @if($lastArticles)
                                @foreach($lastArticles as $k => $article)
                                    <li class="list-group-item"><a href="{{ url($article->slug) }}">{{$article['title']}}</a></li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        @endif

        <!-- Blog Categories Well -->
        <div class="well" style="background-color:#ffffff;">
            <h5 style="color: #34495e;">分类目录</h5>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">
                        @if($categories)
                            @foreach($categories as $k => $category)
                                <li class="list-group-item"><a href="{{ url('category', $category->name) }}">{{$category['name']}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
            <!-- /.row -->
        </div>

        <div class="well" style="background-color:#ffffff;">
            <h5 style="color: #34495e;">标签</h5>
            <div class="row">
                <div class="col-lg-12">
                    <div id="demo" style="width: 250px; height: 450px;"></div>
                </div>
            </div>
            <!-- /.row -->
        </div>

    </div>
</div>
@section('scripts')
<script>
    $(function(){
        var words = [
            @if($tags)
            @foreach($tags as $k => $tag)
            {text: "{{$tag->tag}}", weight: Math.ceil(Math.random()*8), link:"{{ url('tag', ['tag' => $tag->tag]) }}"},
            @endforeach
            @endif
        ];

        $('#demo').jQCloud(words);
    })
</script>
@endsection