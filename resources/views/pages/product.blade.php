@extends('layouts.base')

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
              <p class="subtitle is-3">56.000 sum</p>
            </div>

            <div class="description-part__in-shop mh-1">
              <span class="tag is-success">В Наличии</span>
            </div>

            <div class="description-part__dropdown mh-1 d-flex align-center">
              <p class="subtitle is-6 ">Размер: </p>
              <div class="dropdown is-hoverable">
                <div class="dropdown-trigger">
                  <button class="button" aria-haspopup="true" aria-controls="dropdown-menu3">
                    <span>Hover me</span>
                    <span class="icon is-small">
                      <i class="fas fa-angle-down" aria-hidden="true"></i>
                    </span>
                  </button>
                </div>
                <div class="dropdown-menu" id="dropdown-menu3" role="menu">
                  <div class="dropdown-content">
                    <a href="#" class="dropdown-item">
                      Overview
                    </a>
                    <a href="#" class="dropdown-item">
                      Modifiers
                    </a>
                    <a href="#" class="dropdown-item">
                      Grid
                    </a>
                    <a href="#" class="dropdown-item">
                      Form
                    </a>
                    <a href="#" class="dropdown-item">
                      Elements
                    </a>
                    <a href="#" class="dropdown-item">
                      Components
                    </a>
                    <a href="#" class="dropdown-item">
                      Layout
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item">
                      More
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="description-part__modal mh-1">
              <button class="button is-large modal-button" data-target="modal-ter" aria-haspopup="true"><i
                  class="fas fa-store"></i>Заказать</button>

              <div id="modal-ter" class="modal">
                <div class="modal-background"></div>
                <div class="modal-card">
                  <header class="modal-card-head ">
                    <p class="modal-card-title">Заполните Форму</p>
                    <button class="delete" aria-label="close"></button>
                  </header>
                  <section class="modal-card-body">
                    <div class="field">
                      <div class="control">
                        <p class="mh-1">Ваше имя: </p>
                        <input class="input" type="text" placeholder="Normal input">
                        <p class="mh-1">Ваш номер: </p>
                        <input class="input" type="text" placeholder="Normal input">
                      </div>
                    </div>
                    <div class="d-flex flex-end"><a class="button is-danger text-center">Отправить</a></div>
                  </section>
                </div>
              </div>
            </div>

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
