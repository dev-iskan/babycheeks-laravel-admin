@extends('layouts.base')

@section('content')
<div class="not-found__container">
  <div class="columns">
    <div class="column d-flex">
      <div class="container-80 mg-auto-horizontal">
        <p class="is-size-1 title">Ошибка 404</p>
        <p class="is-size-5 subtitle">Извините, страница, которую вы ищете, не найдена.</p>
        <a class="button button-pink is-medium " href="{{route('main')}}">Перейти на главную</a>
      </div>
    </div>
    <div class="column">
      <img src="{{asset('img/babycheeks-logo.png')}}" alt="logo">
    </div>
  </div>
</div>
@endsection
