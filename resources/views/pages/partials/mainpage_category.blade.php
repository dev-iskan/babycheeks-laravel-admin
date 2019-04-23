<div class="tile is-child box">
    <article class="tile is-child">
        <!-- Put any content you want -->
        <figure class="image is-4by3">
          <img src="{{asset('img/default.png')}}" alt="logo">
          <!-- {{$category->getFirstMedia('categories')}} -->
        </figure>
        <div class="d-flex flex-column-nowrap">
          <p class="is-size-3 has-text-weight-semibold">{{$category->name}}</p>
          <div>
            {!! $category->description !!}
          </div>
        </div>
      </article>
</div>
