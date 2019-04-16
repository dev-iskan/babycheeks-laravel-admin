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
  <div class="aboutus__container mh-5">
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
      <div class="columns mh-5">
        <div class="column is-half px-5">
          <p class="title is-2">Следите за нами</p>
          <ul>
            <li><span class="title">Telegram:</span> <a class="subtitle is-4"
                href="https://t.me/publictestgroup">@babycheeks_uz</a></li>
            <li><span class="title">Instagram:</span> <a class="subtitle is-4"
                href="https://www.instagram.com/babycheeks_tashkent">@babycheeks_tashkent</a></li>
            <li><span class="title">Facebook:</span> <a class="subtitle is-4" href="#">@babycheeks_tashkent</a></li>
          </ul>
        </div>
        <div class="column d-flex align-center justify-center">
          <img src="img/babycheeks-logo.png" alt="" width="80%">
        </div>
      </div>
    </div>



  </div>
  <contact-us />
</div>
@endsection
