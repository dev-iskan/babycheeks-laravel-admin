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
          <p><span class="title">Babycheeks.uz</span> - предлагает одежду, обувь, коляски, автокресла, игрушки и
            другие товары для детей.
            Он был основан в 2019 году, чтобы стать лучшим интернет-магазином детской моды в странах Северной
            Европы. Его основатели Маркус и Линн Тагессон обратили внимание на отсутствие достойного онлайн-магазина
            качественной детской моды на шведском рынке.</p>
          <p>
            Наша цель – предложить вам качественный сервис и удовлетворить вашу потребность в качественной, модной
            одежде, обуви и детских товарах. Высокие стандарты качества, безопасность, функциональность, чувство
            юмора и стиля – наши основные ценности.</p>
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
                <p>Подпишитесь на наш канал в Телеграме, чтобы мгновенно получать самую актуальную информацию от «Babycheeks».</p>
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
                <p>Подпишитесь на наш канал в Инстаграмм, чтобы мгновенно получать самую актуальную информацию от «Babycheeks».</p>
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
                <p>Подпишитесь на наш канал в Фейсбук, чтобы мгновенно получать самую актуальную информацию от «Babycheeks».</p>
              </div>
              <div class="facebook-card__link">
                <a class="subtitle is-4" href="#">@babycheeks_tashkent</a>
              </div>
            </div>
          </div>

      </div>
    </div>



  </div>
  <contact-us />
</div>
@endsection
