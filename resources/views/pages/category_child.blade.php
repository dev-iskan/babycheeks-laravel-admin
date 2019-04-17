@extends('layouts.base')

@section('styles')
  hhhhh
@endsection

@section('scripts')
  hhhhh
@endsection

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

            <ul>
              <li class="title is-6">По Полу</li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="gender-category__male" type="checkbox"
                      name="gender-category__male">
                    <label for="gender-category__male">Мальчикам</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="gender-category__female" type="checkbox"
                      name="gender-category__female">
                    <label for="gender-category__female">Девочкам</label>
                  </div>
                </a></li>
            </ul>

            <ul class="mh-2">
              <li class="title is-6">По Цене</li>
              <li><input class="slider is-fullwidth" step="1" min="0" max="100" value="50" type="range">
                <span>От : </span> <output for="sliderWithValue"></output></li>

            </ul>

            <ul class="mh-2">
              <li class="title is-6">По Возрасту</li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="age-category__1-level" type="checkbox"
                      name="age-category__1-level">
                    <label for="age-category__1-level">1 месяц - 3 месяца</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="age-category__2-level" type="checkbox"
                      name="age-category__2-level">
                    <label for="age-category__2-level">4 месяц - 6 месяца</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="age-category__3-level" type="checkbox"
                      name="age-category__3-level">
                    <label for="age-category__3-level">6 месяц - 9 месяца</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="age-category__4-level" type="checkbox"
                      name="age-category__4-level">
                    <label for="age-category__4-level">9 месяц - 12 месяца</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="age-category__5-level" type="checkbox"
                      name="age-category__5-level">
                    <label for="age-category__5-level">1 год - 2 года</label>
                  </div>
                </a></li>
            </ul>


            <ul class="mh-2">
              <li class="title is-6">По Бренду</li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__1" type="checkbox"
                      name="brand-category__1">
                    <label for="brand-category__1">Carter's</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__2" type="checkbox"
                      name="brand-category__2">
                    <label for="brand-category__2">Wonder Nation</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__3" type="checkbox"
                      name="brand-category__3">
                    <label for="brand-category__3">Gerber</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__4" type="checkbox"
                      name="brand-category__4">
                    <label for="brand-category__4">Avent</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__5" type="checkbox"
                      name="brand-category__5">
                    <label for="brand-category__5">Tommee Tippee</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__6" type="checkbox"
                      name="brand-category__6">
                    <label for="brand-category__6">Disney</label>
                  </div>
                </a></li>
              <li><a href="#">
                  <div class="field">
                    <input class="is-checkradio is-info is-circle is-small" id="brand-category__7" type="checkbox"
                      name="brand-category__7">
                    <label for="brand-category__7">Garanimals</label>
                  </div>
                </a></li>
            </ul>

          </nav>
        </div>
        <div class="column">
          <div class="product-body__product-filter d-flex justify-space-between mh-2">
            <div class="select is-rounded">
              <select>
                <option>Rounded dropdown</option>
                <option>With options</option>
              </select>
            </div>
            <div class="product-filter__pagination">
              <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
                <a class="pagination-previous">Previous</a>
                <a class="pagination-next">Next page</a>
                <ul class="pagination-list">
                  <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">1</a></li>
                  <li><a class="pagination-link" aria-label="Goto page 2">2</a></li>
                  <li><span class="pagination-ellipsis">&hellip;</span></li>
                  <li><a class="pagination-link" aria-label="Goto page 45">10</a></li>
                </ul>
              </nav>
            </div>
          </div>
          <div class="product-body__product">
            <div class="columns is-multiline is-mobile">
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="column is-half-mobile is-half-tablet is-one-quarter-desktop ">
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
                        <p class="subtitle is-7">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis,
                          iusto.
                        </p>
                      </div>
                      <p class="title is-6 text-center pa-1">56.000 sum</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>

          </div>


          <div id="typo" class="product-filter__pagination mh-3">
            <nav class="pagination is-rounded" role="navigation" aria-label="pagination">
              <a class="pagination-previous">Previous</a>
              <a class="pagination-next">Next page</a>
              <ul class="pagination-list">
                <li><a class="pagination-link is-current" aria-label="Page 46" aria-current="page">1</a></li>
                <li><a class="pagination-link" aria-label="Goto page 2">2</a></li>
                <li><span class="pagination-ellipsis">&hellip;</span></li>
                <li><a class="pagination-link" aria-label="Goto page 45">10</a></li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </div>

  </div>
</div>
@endsection
