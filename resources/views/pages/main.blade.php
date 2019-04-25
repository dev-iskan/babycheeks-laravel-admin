@extends('layouts.base')


@section('content')
<div class="album container text-is-center pa-1">
  @if($categories->count())
  <div class="tile is-ancestor">
    <div class="tile is-4 is-vertical is-parent">
      @include('pages.partials.mainpage_category', ['category' => $categories[0]])
      @include('pages.partials.mainpage_category', ['category' => $categories[1]])
    </div>
    <div class="tile is-parent">
      @include('pages.partials.mainpage_category', ['category' => $categories[2]])
    </div>
  </div>
  <div class="tile is-ancestor">
    <div class="tile is-parent">
      @include('pages.partials.mainpage_category', ['category' => $categories[3]])
    </div>
    <div class="tile is-4 is-vertical is-parent">
      @include('pages.partials.mainpage_category', ['category' => $categories[4]])
      @include('pages.partials.mainpage_category', ['category' => $categories[5]])
    </div>
  </div>
  @endif
  {{-- Brand carousel --}}
  <div class="main__carousel mh-2">
    <div class="container">
      <p class="title is-4 text-center">Наши Бренды</p>
      <hr>
      <brand-swiper></brand-swiper>
    </div>
  </div>
  {{-- Brand carousel --}}
  @endsection
