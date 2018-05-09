@extends('site.layouts._layout')

@section('content')

    <section id="content">
        <div class="map">
            <iframe src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Kuningan,+Jakarta+Capital+Region,+Indonesia&amp;aq=3&amp;oq=kuningan+&amp;sll=37.0625,-95.677068&amp;sspn=37.410045,86.572266&amp;ie=UTF8&amp;hq=&amp;hnear=Kuningan&amp;t=m&amp;z=14&amp;ll=-6.238824,106.830177&amp;output=embed">
            </iframe>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4>Свяжитесь с нами</h4>
                    <form id="contactform" method="POST" class="validateform">
                        {{ csrf_field() }}
                        
                        <div id="sendmessage">
                            Ваше сообщение отправлено!
                        </div>
                        <div id="senderror">
                            При отправке сообщения произошла ошибка. Продублируйте его, пожалуйста, на почту администратора <span>{{ env('MAIL_ADMIN_EMAIL') }}</span>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 field">
                                <input type="text" name="name" placeholder="* Введите ваше имя" required />
                            </div>
                            <div class="col-lg-4 field">
                                <input type="email" name="email" placeholder="* Введите ваш email" required />
                            </div>
                            <div class="col-lg-4 field">
                                <input type="text" name="subject" placeholder="* Введите тему сообщения" required />
                            </div>
                            <div class="col-lg-12 margintop10 field">
                                <textarea rows="12" name="message" class="input-block-level" placeholder="* Ваше сообщение..." required></textarea>
                                <p>
                                    <button class="btn btn-theme margintop10 pull-left" type="submit">Отправить</button>
                                    <span class="pull-right margintop20">* Заполните, пожалуйста, все обязательные поля!</span>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
@stop