<div class="main__header box">
  <div class="header__top">
    <nav class="navbar container" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="img/babycheeks-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
          data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">

        <div class="navbar-center">
          <div class="field">
            <p class="control has-icons-left has-icons-right">
              <input class="input is-rounded" type="email" placeholder="Search">
              <span class="icon is-small is-left">
                <i class="fas fa-search"></i>
              </span>
            </p>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <div class="header__menu">
    <nav class="navbar">

      <div id="navMenubd-example" class="navbar-menu">
        <div class="navbar-center">
          @foreach ($categories as $category)
          @if ($category->children()->exists())
          <div class="navbar-item has-dropdown is-hoverable is-mega">
            <div class="navbar-link">
              {{$category->name}}
            </div>
            <div id="blogDropdown" class="navbar-dropdown" data-style="width: 18rem;">
              <div class="container is-fluid">
                <div class="columns">
                  @foreach ($category->children->chunk(4) as $childrenGroup)
                  <div class="column">
                    @foreach ($childrenGroup as $children)
                    <a class="navbar-item" href="#">
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
          <a class="navbar-item">
            {{$category->name}}
          </a>
          @endif
          @endforeach

        </div>
      </div>
    </nav>
  </div>
</div>