<div class="col-md-4">
    <div class="col-md-12">
        <!-- Blog Search Well -->
        <div class="well" style="background-color:#ffffff;">
            <h4>博文搜索</h4>
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
            <h4>热门浏览</h4>
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
            <!-- /.row -->
        </div>

        <div class="well" style="background-color:#ffffff;">
            <h4>最新文章</h4>
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
            <!-- /.row -->
        </div>

        <!-- Blog Categories Well -->
        <div class="well" style="background-color:#ffffff;">
            <h4>类别</h4>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">

                    </ul>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <ul class="list-unstyled">

                    </ul>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

        <div class="well" style="background-color:#ffffff;">
            <h4>标签</h4>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-unstyled">

                    </ul>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                    <ul class="list-unstyled">

                    </ul>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>

    </div>
</div>