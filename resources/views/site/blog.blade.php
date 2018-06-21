@extends('site.layouts._layout')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <article>
                        <div class="post-image">
                            <div class="post-heading">
                                <h3><a href="#">This is an example of standard post format</a></h3>
                            </div>
                            <img src="{{ asset('/site/img/dummies/blog/img1.jpg') }}" alt="" />
                        </div>
                        <p>
                            Qui ut ceteros comprehensam. Cu eos sale sanctus eligendi, id ius elitr saperet, ocurreret pertinacia pri an. No mei nibh consectetuer, semper laoreet perfecto ad qui, est rebum nulla argumentum ei. Fierent adipisci iracundia est ei, usu timeam persius ea. Usu ea justo malis, pri quando everti electram ei, ex homero omittam salutatus sed.
                        </p>
                        <div class="bottom-article">
                            <ul class="meta-post">
                                <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                                <li><i class="icon-comments"></i><a href="#">4 комментария</a></li>
                            </ul>
                            <a href="#" class="pull-right">Продолжить <i class="icon-angle-right"></i></a>
                        </div>
                    </article>
                    
                    <div id="pagination">
                        <span class="all">Страница 1 из 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    @include('site.layouts.blog_sidebar')
                </div>
            </div>
        </div>
    </section>  
    
@stop