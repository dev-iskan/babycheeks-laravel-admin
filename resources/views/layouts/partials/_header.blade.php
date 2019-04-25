<div class="main__header box">
  <div class="header__top">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
          data-target="navbar-menu-mobile">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
        <a class="navbar-item" href="{{route('main')}}">
          <img class="is-hidden-desktop" src="{{asset('img/mobile-logo.png')}}">
          <img class="is-hidden-touch" src="{{asset('img/babycheeks-logo.png')}}">
        </a>
        <search-dropdown mobile></search-dropdown>

      </div>

      <div id="navbar-menu-mobile" class="navbar-menu">
        <div class="navbar-start">
          @if($categories->count())
          @foreach ($categories as $category)
          @if ($category->children()->exists())
          <div class="navbar-item has-dropdown is-hoverable is-mega">
            <a class="navbar-link" href="{{route('category', $category->slug)}}">
              {{$category->name}}
            </a>
            <div id="navbar-menu-mobile" class="navbar-dropdown" data-style="width: 18rem;">
              <div class="container is-fluid">
                <div class="columns">
                  @foreach ($category->children->chunk(4) as $childrenGroup)
                  <div class="column">
                    @foreach ($childrenGroup as $children)
                    <a class="navbar-item" href="{{route('category', $children->slug)}}">
                      <div class="navbar-content">
                        <p>{{$children->name}}</p>
                      </div>
                    </a>
                    @endforeach
                  </div>
                  @endforeach
                </div>
              </div>

            </div>
          </div>


          @else
          <a class="navbar-item" href="{{route('category', $category->slug)}}">
            {{$category->name}}
          </a>
          @endif
          @endforeach
          @endif
        </div>
        <div class="navbar-end">
          <search-dropdown></search-dropdown>
        </div>
    </nav>
  </div>

</div>
