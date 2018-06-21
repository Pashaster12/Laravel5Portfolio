@extends('site.layouts._layout')

@section('content')

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Цены на различные <strong>типы сайтов</strong></h4>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box-alt">
                        <div class="pricing-heading">
                            <h3>Сайт <strong>Визитка</strong></h3>
                        </div>
                        <div class="pricing-terms">
                            <h4>от &#36;400$</h4>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="icon-ok"></i> Адаптивная верстка</li>
                                <li><i class="icon-ok"></i> Современный дизайн</li>
                                <li><i class="icon-ok"></i> SEO оптимизация</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="{{ url('/contact') }}" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box-alt special">
                        <div class="pricing-heading">
                            <h3>Интернет <strong>Магазин</strong></h3>
                        </div>
                        <div class="pricing-terms">
                            <h4>от &#36;800$</h4>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="icon-ok"></i> Адаптивная верстка</li>
                                <li><i class="icon-ok"></i> Современный дизайн</li>
                                <li><i class="icon-ok"></i> SEO оптимизация</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="{{ url('/contact') }}" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Заказать</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box-alt">
                        <div class="pricing-heading">
                            <h3><strong>Лэндинг</strong></h3>
                        </div>
                        <div class="pricing-terms">
                            <h4>от &#36;200$</h4>
                        </div>
                        <div class="pricing-content">
                            <ul>
                                <li><i class="icon-ok"></i> Адаптивная верстка</li>
                                <li><i class="icon-ok"></i> Современный дизайн</li>
                                <li><i class="icon-ok"></i> SEO оптимизация</li>
                            </ul>
                        </div>
                        <div class="pricing-action">
                            <a href="{{ url('/contact') }}" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Заказать</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@stop