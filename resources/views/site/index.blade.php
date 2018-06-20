@extends('site.layouts._layout')

@section('content')

<section id="featured">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="main-slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{ asset('site/img/slides/1.jpg') }}" alt="" />
                            <div class="flex-caption">
                                <h3>Modern Design</h3> 
                                <p>Duis fermentum auctor ligula ac malesuada. Mauris et metus odio, in pulvinar urna</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('site/img/slides/2.jpg') }}" alt="" />
                            <div class="flex-caption">
                                <h3>Fully Responsive</h3> 
                                <p>Sodales neque vitae justo sollicitudin aliquet sit amet diam curabitur sed fermentum.</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('site/img/slides/3.jpg') }}" alt="" />
                            <div class="flex-caption">
                                <h3>Clean & Fast</h3> 
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit donec mer lacinia.</p> 
                                <a href="#" class="btn btn-theme">Learn More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>	



</section>

<section class="callaction">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="big-cta">
                    <div class="cta-text">
                        <h2><span>Наши</span> преимущества</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="box">
                            <div class="box-gray aligncenter">
                                <h4>Адаптивная верстка</h4>
                                <div class="icon">
                                    <i class="fa fa-desktop fa-3x"></i>
                                </div>
                                <p>
                                    Сайт будет отлично смотреться на экранах различных устройств. Достаньте свой телефон и посмотрите наше портфолио =)
                                </p>

                            </div>
                            <div class="box-bottom">
                                <a href="{{ url('/portfolio') }}">Больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box">
                            <div class="box-gray aligncenter">
                                <h4>Современный дизайн</h4>
                                <div class="icon">
                                    <i class="fa fa-pagelines fa-3x"></i>
                                </div>
                                <p>
                                    Дизайн вашего сайта будет уникальным разработанным с нуля. Можете даже не искать похожий =) 
                                </p>

                            </div>
                            <div class="box-bottom">
                                <a href="{{ url('/portfolio') }}">Больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box">
                            <div class="box-gray aligncenter">
                                <h4>Администрирование</h4>
                                <div class="icon">
                                    <i class="fa fa-edit fa-3x"></i>
                                </div>
                                <p>
                                    Мы предлагаем вам сайт с административной панелью, чтобы вы могли сами вносить правки.
                                </p>

                            </div>
                            <div class="box-bottom">
                                <a href="{{ url('/portfolio') }}">Больше</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="box">
                            <div class="box-gray aligncenter">
                                <h4>Качество кода</h4>
                                <div class="icon">
                                    <i class="fa fa-code fa-3x"></i>
                                </div>
                                <p>
                                    Ваш сайт будет разработан профессионалами в области web-разработки с применением современных технологий.
                                </p>

                            </div>
                            <div class="box-bottom">
                                <a href="{{ url('/portfolio') }}">Больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="solidline">
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Последние работы</h4>
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <li class="col-lg-3 design" data-id="id-0" data-type="web">
                                <div class="item-thumbs">
                                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 1" href="{{ asset('/img/works/1.jpg') }}">
                                        <span class="overlay-img"></span>
                                        <span class="overlay-img-thumb font-icon-plus"></span>
                                    </a>
                                    
                                    <img src="{{ asset('site/img/works/1.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                                </div>
                            </li>
                            
                            <li class="item-thumbs col-lg-3 design" data-id="id-1" data-type="icon">
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 2" href="{{ asset('/img/works/2.jpg') }}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                
                                <img src="{{ asset('site/img/works/2.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            
                            <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 3" href="{{ asset('/img/works/3.jpg') }}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                
                                <img src="{{ asset('site/img/works/3.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                            
                            <li class="item-thumbs col-lg-3 photography" data-id="id-2" data-type="illustrator">
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Work 4" href="{{ asset('/img/works/4.jpg') }}">
                                    <span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                
                                <img src="{{ asset('site/img/works/4.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        </ul>
                    </section>
                </div>
            </div>
        </div>

    </div>
</section>

@stop