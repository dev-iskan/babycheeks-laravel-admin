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
          <img src="{{asset('img/babycheeks-logo.png')}}" width="112" height="28">
        </a>

        <div class="field d-flex align-center is-hidden-desktop px-1">
          <p class="control has-icons-left has-icons-right">
            <input class="input" type="email" placeholder="Search">
            <span class="icon is-small is-left">
              <i class="fas fa-search"></i>
            </span>
          </p>
        </div>


      </div>

      <div id="navbar-menu-mobile" class="navbar-menu">
        <div class="navbar-start">
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
        </div>

        <search-dropdown></search-dropdown>
    </nav>
  </div>

</div>
