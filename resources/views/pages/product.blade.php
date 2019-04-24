@extends('layouts.base')

@section('scripts')
<script src="{{ asset('js/bulma-extensions.js') }}" defer></script>
@endsection

@section('content')
<div class="page__product">
  <div class="container is-fluid">

    <div class="product__breadcrumb mh-2 text-center">
      <nav class="breadcrumb d-flex justify-center" aria-label="breadcrumbs">
        <ul>
          <li><a href="#">Main</a></li>
          <li><a href="#">Category Parent</a></li>
          <li><a href="#">Category Child</a></li>
          <li class="is-active"><a href="#" aria-current="page">Product</a></li>
        </ul>
      </nav>
    </div>


    <div class="product__full-info">

      <div class="columns">
        <div class="column is-half">
          <product-swiper></product-swiper>
        </div>

        <div class="column">
          <div class="description-part d-flex flex-column-nowrap">



            <br>
            <div class="description-part__cost mh-1">
              <p class="title is-3">Product name</p>
            </div>

            <div class="description-part__cost mh-1">
              <p class="subtitle is-3">56.000 sum</p>
            </div>

            <div class="description-part__in-shop mh-1">
              <span class="tag is-success">В Наличии</span>
            </div>

            <div class="description-part__cost mh-1">
              <p class="subtitle is-6">Пол:
                <span class="tag is-link is-medium"><i class="fas fa-male pr-1"></i>Мальчики</span>
                <span class="tag is-danger is-medium"><i class="fas fa-female pr-1"></i>Девочки</span>
                <span class="tag is-danger is-medium"><i class="fas fa-female pr-1"></i>Оба</span>
            </p>
            </div>

            <div class="description-part__cost mh-1">
              <p class="subtitle is-6">Возраст:
              <ul>
                <li>1 месяц</li>
              </ul>

              </p>

            </div>

            <order-modal></order-modal>

            <div class="description-part__product-description container-80 mh-1">
              <div>
                Одежда для мальчиков, <a href="#">Carter's</a>, от 1 до 3 месяцев
              </div>
              <div>
                Get the right gear for the cooler season with the durable Kure Kid Parka in Berry Purple, designed
                by the Swedish brand Didriksons, with more than 100 years of experience in designing outerwear.
              </div>
              <div>
                – 100% Waterproof.
                – Breathable: 5,000 g/m²/24h.
                – Windproof.
                – Padding: 120 g/m².
                – PFC-free water repellency.
                – Extendable size – arms can be lengthened up to one size.
                – Taped seams.
                – Removeable hood with faux fur.
                – Reflective detailing at the back and at the wrists.
                – Adjustable wrists with elasticated cuffs, featuring thumbholes.
              </div>
              <div>
                – Shell: 100% Polyamide.
                – Padding: 100% Polyester.
                – Lining: 100% Polyamide.
                – Machine washable 40 degrees.
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="parent__popular-product mh-2 ">
      <p class="title is-4 text-center">Похожие Продукты</p>
      <hr>
      <div class="columns is-multiline is-mobile">
        <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
          <a href="#">
            <div class="card no-box-shadow">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/640x480.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content pa-0">
                <div class="pa-1">
                  <p class="title is-6">Product name</p>
                  <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, iusto.
                  </p>
                </div>
                <p class="title is-6 text-center pa-1">56.000 sum</p>
              </div>
            </div>
          </a>
        </div>
        <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
          <a href="#">
            <div class="card no-box-shadow">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/640x480.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content pa-0">
                <div class="pa-1">
                  <p class="title is-6">Product name</p>
                  <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, iusto.
                  </p>
                </div>
                <p class="title is-6 text-center pa-1">56.000 sum</p>
              </div>
            </div>
          </a>
        </div>
        <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
          <a href="#">
            <div class="card no-box-shadow">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/640x480.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content pa-0">
                <div class="pa-1">
                  <p class="title is-6">Product name</p>
                  <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, iusto.
                  </p>
                </div>
                <p class="title is-6 text-center pa-1">56.000 sum</p>
              </div>
            </div>
          </a>
        </div>
        <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
          <a href="#">
            <div class="card no-box-shadow">
              <div class="card-image">
                <figure class="image is-4by3">
                  <img src="https://bulma.io/images/placeholders/640x480.png" alt="Placeholder image">
                </figure>
              </div>
              <div class="card-content pa-0">
                <div class="pa-1">
                  <p class="title is-6">Product name</p>
                  <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis, iusto.
                  </p>
                </div>
                <p class="title is-6 text-center pa-1">56.000 sum</p>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>
</div>
@endsection