@extends('layouts.base')

@section('content')
<div class="category__parent">
  <div class="container">

    <div class="parent__breadcrumb mh-2 text-center">
      <nav class="breadcrumb d-flex justify-center" aria-label="breadcrumbs">
        <ul>
          <li><a href="#">Main</a></li>
          <li class="is-active"><a href="#" aria-current="page">Category</a></li>
        </ul>
      </nav>
    </div>

    <p class="title is-3 text-center">{{$category->name}}</p>
    <hr>
    <div class="parent__child-categories">
      <div class="columns">
        <div class="column is-half">
          <ul class="child-categories__list columns is-multiline is-mobile">
            @foreach ($category->children as $child)
              <li class="column is-half-mobile is-half-tablet is-half-desktop"><a href="{{route('category', $child)}}">{{$child->name}}</a></li>
            @endforeach
          </ul>
        </div>
        <div class="column">
          <div class="special-text">
            {!! $category->description !!}
          </div>
          <button class="expand-button">
            Читать Больше
          </button>

        </div>
      </div>
    </div>

    <div class="parent__popular-product mh-2 ">
      <p class="title is-4 text-center">Популярные Продукты</p>
      <hr>
      <div class="columns is-multiline is-mobile">
        @if ($products->count())
          @foreach ($products as $product)
            @includeIf('pages.partials.product_card', compact('product'))
          @endforeach
        @endif
      </div>
    </div>
  </div>
</div>
@endsection
