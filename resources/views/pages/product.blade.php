@extends('layouts.base')

@section('content')
<div class="page__product">
  <div class="container is-fluid">

    <div class="product__breadcrumb mh-2 text-center">
      <nav class="breadcrumb d-flex justify-center" aria-label="breadcrumbs">
      </nav>
    </div>


    <div class="product__full-info">

      <div class="columns">
        <div class="column is-half">
          <product-swiper :images="{{$images}}"></product-swiper>
        </div>

        <div class="column">
          <div class="description-part d-flex flex-column-nowrap">
            <br>
            <div class="description-part__cost mh-1">
              <p class="title is-3">{{$product->name}}</p>
            </div>

            <div class="description-part__cost">
              <p class="is-size-4">{{$product->brand->name}}</p>
            </div>

            <div class="description-part__cost mh-1">
              <p class="subtitle is-3">{{$product->formatted_price}}</p>
            </div>

            <div class="description-part__in-shop mh-1">
              <span class="tag is-success">В Наличии</span>
            </div>

            <div class="description-part__cost mh-1">
              <p class="subtitle is-6">Пол:
                @if($product->gender == 'u')
                <span class="tag is-primary is-medium"><i
                    class="fas fa-restroom pr-1"></i>{{$product->formatted_gender}}</span>
                @elseif($product->gender == 'm')
                <span class="tag is-link is-medium"><i
                    class="fas fa-male pr-1"></i>{{$product->formatted_gender}}</span>
                @else
                <span class="tag is-danger is-medium"><i
                    class="fas fa-female pr-1"></i>{{$product->formatted_gender}}</span>
                @endif
              </p>
            </div>

            @if($product->ages()->exists())
            <div class="description-part__cost mh-1">
              <p class="is-size-5">Возраст
                <ul class="mleft-3">
                  @foreach ($product->ages as $item)
                  <li>✓ {{$item->age}}</li>
                  @endforeach
                </ul>
              </p>
            </div>
            @endif
            <order-modal slug="{{$product->slug}}"  sitekey="{{config('captcha.site_key')}}"></order-modal>

            <div class="description-part__product-description container-80 mh-1">
              {!!$product->description!!}
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="parent__popular-product mh-2 ">
      <p class="title is-4 text-center">Похожие Продукты</p>
      <hr>
      <div class="columns is-multiline is-mobile">
        @foreach ($similar_products as $item)
        @include('pages.partials.product_card', ['product' => $item])
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
