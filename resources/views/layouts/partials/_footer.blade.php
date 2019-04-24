<div class="main__footer">
    <footer class="footer">
        <div class="container">
            <div class="columns container">
                <div class="column is-two-fifths">
                    <div>
                        <a href="{{route('main')}}">
                            <img src="{{asset('img/babycheeks-logo.png')}}" alt="footer-logo" width="40%">
                        </a>
                    </div>

                    <div class="d-flex flex-column-nowrap">
                        <p class="mh-2">Свяжитесь с нами по нашим социальным сетям</p>
                        <div class="social-media__icons">
                            <a href="#"><img src="{{asset('img/social_media/telegram.png')}}" alt="tg"></a>
                            <a href="#"><img src="{{asset('img/social_media/insta.png')}}" alt="inst"></a>
                            <a href="#"><img src="{{asset('img/social_media/facebook.png')}}" alt="facebook"></a>
                        </div>
                    </div>

                    <div class="mh-1">
                        <ul class="d-flex flex-column-nowrap list-style-none">
                            <li>Если есть вопросы звоните</li>
                            <li>+998 (90) 180 15 02</li>
                            <li>+998 (90) 180 15 02</li>
                            <li>Почта: <a href="#">babycheeks.tashkent@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="column is-one-fifth">
                    <ul class="d-flex flex-column-nowrap list-style-none">
                        <li><a href="{{route('about-us')}}">О нас</a></li>
                      @if ($categories->count())
                        @foreach ($categories as $category)
                          <li><a href="{{route('category', $category)}}">{{$category->name}}</a></li>
                        @endforeach
                      @endif
                    </ul>
                </div>

                <div class="column">
                    <div>
                        <p>Почему покупатели выбирают «BabyCheeks»</p>
                        <p class="is-size-6">Большой выбор одежды, обуви, игрушек и аксессуаров, доступные для
                            заказа в любое
                            время. Все товары имеются в наличии на наших складах и будут доставлены в любой
                            город Узбекистана.</p>
                    </div>
                    <div>
                        <p>Всегда для вас:</p>
                        <ul class="is-size-6">
                            <li>скидки до –50% каждый день;</li>
                            <li>бесплатная доставка по Ташкенту при оплате от 50 000 сум;</li>
                            <li>бесплатная примерка до 10 товаров в Ташкенте;</li>
                            <li>самая быстрая доставка по всей стране (6–48 часов);</li>
                            <li>более 2 000 брендов в каталоге;</li>
                            <li>оплата наличными или через платежные системы:</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
