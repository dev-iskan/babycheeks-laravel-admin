@extends('layouts.base')


@section('content')
<div class="album container text-is-center">
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child">
                            <!-- Put any content you want -->
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/640x480.png">
                            </figure>
                            <div class="d-flex flex-column-nowrap">
                                <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                <p class="is-size-6">With an image</p>
                            </div>
                        </article>
                        <article class="tile is-child">
                            <!-- Put any content you want -->
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/640x480.png">
                            </figure>
                            <div class="d-flex flex-column-nowrap">
                                <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                <p class="is-size-6">With an image</p>
                            </div>
                        </article>
                    </div>
                    <div class="tile is-parent">
                        <article class="tile is-child">
                            <!-- Put any content you want -->
                            <figure class="image is-3by5">
                                <img src="https://bulma.io/images/placeholders/480x800.png">
                            </figure>
                            <div class="d-flex flex-column-nowrap">
                                <p class="is-size-3 has-text-weight-semibold">Middle</p>
                                <p class="is-size-6">With an image</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child">
                        <!-- Put any content you want -->
                        <figure class="image is-16by9">
                            <img src="https://bulma.io/images/placeholders/640x360.png">
                        </figure>
                        <div class="d-flex flex-column-nowrap">
                            <p class="is-size-3 has-text-weight-semibold">Middle</p>
                            <p class="is-size-6">With an image</p>
                        </div>
                    </article>
                </div>
            </div>
            <div class="tile is-parent is-vertical">
                <article class="tile is-child">
                    <!-- Put any content you want -->
                    <figure class="image is-3by4">
                        <img src="https://bulma.io/images/placeholders/480x640.png">
                    </figure>
                    <div class="d-flex flex-column-nowrap">
                        <p class="is-size-3 has-text-weight-semibold">Middle</p>
                        <p class="is-size-6">With an image</p>
                    </div>
                </article>
                <article class="tile is-child">
                    <!-- Put any content you want -->
                    <figure class="image is-3by4">
                        <img src="https://bulma.io/images/placeholders/480x640.png">
                    </figure>
                    <div class="d-flex flex-column-nowrap">
                        <p class="is-size-3 has-text-weight-semibold">Middle</p>
                        <p class="is-size-6">With an image</p>
                    </div>
                </article>
            </div>
        </div>
    </div>

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
