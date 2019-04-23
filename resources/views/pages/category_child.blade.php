@extends('layouts.base')

@section('content')
<div class="category__child">
  <div class="container is-fluid">

    <div class="child__breadcrumb mh-2 text-center">
      <nav class="breadcrumb d-flex justify-center" aria-label="breadcrumbs">
        <ul>
          <li><a href="#">Main</a></li>
          <li><a href="#">Category Parent</a></li>
          <li class="is-active"><a href="#" aria-current="page">Category Child</a></li>
        </ul>
      </nav>
    </div>

    <div class="child__product-body">
      <div class="columns">

        <div class="column is-one-quarter">

          <div id="anchorsReference" class="bd-anchors-reference"></div>
          <nav id="anchors" class="product-body__filter bd-anchors is-active">
            @include('pages.partials._filters')
          </nav>
        </div>
        <div class="column">
          <sort-dropdown
            :category="{{request()->category}}"
            :sortings="{{json_encode($sortings)}}"
            :query="{{json_encode(request()->query())}}"
          ></sort-dropdown>
          <div class="product-body__product">
            @if ($products->count())
            <div class="columns is-multiline is-mobile">
                @foreach ($products as $product)
                  @include('pages.partials.product_card', compact('product'))
                @endforeach
            </div>
            @else
            Товары не найдены
            @endif
          </div>

          {{$products->appends(request()->query())->links()}}
        </div>
      </div>
    </div>

  </div>
</div>
@endsection
