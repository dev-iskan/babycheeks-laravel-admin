<div class="tile is-child box">
  <article class="tile is-child">
    <!-- Put any content you want -->
    <figure class="image is-4by3">
      @if($category->getFirstMedia('categories'))
      {{$category->getFirstMedia('categories')}}
      @else
      <img src="{{asset('img/default.png')}}" alt="logo">
      @endif
    </figure>
    <div class="d-flex flex-column-nowrap pa-1">
      <p class="is-size-3 has-text-weight-semibold">{{$category->name}}</p>
    </div>
  </article>
</div>
