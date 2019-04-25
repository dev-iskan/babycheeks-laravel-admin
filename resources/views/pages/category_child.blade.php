@extends('layouts.base')

@section('content')
<div class="category__child">
  <div class="container is-fluid">

    <div class="child__breadcrumb mh-2 text-center">
      <nav class="breadcrumb d-flex justify-center" aria-label="breadcrumbs">
        <p class="title is-3 text-center">{{request()->category->name}}</p>
      </nav>
    </div>

    <div class="child__product-body">
      <div class="columns">

        <div class="column is-one-fifth">

          <div id="anchorsReference" class="bd-anchors-reference"></div>
          <nav id="anchors" class="product-body__filter bd-anchors is-active">
            @include('pages.partials._filters')
          </nav>
        </div>
        <div class="column">
          <sort-dropdown :category="{{request()->category}}" :sortings="{{json_encode($sortings)}}"
            :query="{{json_encode(request()->query())}}"></sort-dropdown>
          <div class="product-body__product">
            @if ($products->count())
            <div class="columns is-multiline is-mobile">
              @foreach ($products as $product)
              @include('pages.partials.product_card', compact('product'))
              @endforeach
            </div>
            @else
            <div class="section__no-product">
              <p class="is-size-4 text-center">
                <i class="fas fa-exclamation-circle pr-1 page-color_pink"></i>
                На данный момент нет продуктов
                <i class="fas fa-exclamation-circle pl-1 page-color_blue"></i>
              </p>

            </div>
            @endif
          </div>

          {{$products->appends(request()->query())->links()}}
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
