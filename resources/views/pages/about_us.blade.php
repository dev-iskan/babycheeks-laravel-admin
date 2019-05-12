@extends('layouts.base')

@section('content')
<div class="hero is-medium is-background-image is-bold">
  <div class="hero-body">
    <div class="container text-is-right">
      <h1 class="title">
        Узнайте о нас больше
      </h1>
      <h2 class="subtitle">
        Команда Babycheeks
      </h2>
    </div>
  </div>
</div>

<div>
  <div class="aboutus__container mh-5 section">
    <div class="container">
      <div class="columns">
        <div class="column is-half d-flex align-center justify-center">
          <img src="img/babycheeks-logo.png" alt="" width="80%">
        </div>
        <div class="column ">
          <p><span class="title">Babycheeks.uz</span> это прекрасная возможность создать красивый, модный и красочный гардероб для ваших детей. Babycheeks.uz - это одежда из натуральных материалов и различные принадлежности, без которых невозможно представить комфортную и счастливую жизнь малышей. Babycheeks.uz - это приемлимые цены и очень достойное качество изделий. Основателем бренда является молодая мама и по совместительству предприниматель Феруза Ризаева, которая на своём опыте определяет, что самое важное в одежде для детей. Идея открытия интернет-магазина пришла к ней как раз с рождением ребёнка. </p>
          <p>
          У каждой мамы есть свой взгляд на выбор одежды и всевозможных принадлежностей для малышей. Babycheeks.uz ставит своей целью удовлетворение различных взглядов и потребностей в выборе одежды, обуви, игрушек, косметических принадлежностей и различных аксессуаров для самых маленьких.</p>
          <p>Нашими основными ценностями являются стандарты высокого качества, безопасность, функциональность, чувство красоты, радости и стиля. Дарите детям радость вместе с Babycheeks.uz!</p>
        </div>
      </div>
      <div class="mh-5">
        <p class="title text-center is-2">Следите за нами</p>
        <div class="columns is-multiline mh-4">
          <div class="tg-card column is-one-third text-center">
            <div class="tg-card__image">
              <img src="img/social_media/telegram.png" alt="" width="15%">
            </div>
            <div class="tg-card__description mh-1">
              <p>Подпишитесь на наш канал в Телеграме, чтобы мгновенно получать самую актуальную информацию от
                «Babycheeks».</p>
            </div>
            <div class="tg-card__link">
              <a class="subtitle is-4" href="https://t.me/publictestgroup">@babycheeks_uz</a>
            </div>
          </div>
          <div class="insta-card column is-one-third text-center">
            <div class="insta-card__image">
              <img src="img/social_media/insta.png" alt="" width="15%">
            </div>
            <div class="insta-card__description mh-1">
              <p>Подпишитесь на наш канал в Инстаграмм, чтобы мгновенно получать самую актуальную информацию от
                «Babycheeks».</p>
            </div>
            <div class="insta-card__link">
              <a class="subtitle is-4" href="https://www.instagram.com/babycheeks_tashkent">@babycheeks_tashkent</a>
            </div>
          </div>
          <div class="facebook-card column is-one-third text-center">
            <div class="facebook-card__image">
              <img src="img/social_media/facebook.png" alt="" width="15%">
            </div>
            <div class="facebook-card__description mh-1">
              <p>Подпишитесь на наш канал в Фейсбук, чтобы мгновенно получать самую актуальную информацию от
                «Babycheeks».</p>
            </div>
            <div class="facebook-card__link">
              <a class="subtitle is-4" href="#">@babycheeks_tashkent</a>
            </div>
          </div>
        </div>

      </div>
    </div>



  </div>
  <contact-us sitekey="{{config('captcha.site_key')}}"/>
</div>
@endsection
