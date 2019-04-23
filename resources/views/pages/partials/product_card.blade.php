<div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
  <a href="{{route('product', $product)}}">
    <div class="card no-box-shadow">
      <div class="card-image">
        <figure class="image is-4by3">
          {{$product->getFirstMedia('products')}}
        </figure>
      </div>
      <div class="card-content pa-0">
        <div class="pa-1">
        <p class="title is-6">{{$product->name}}</p>
        <p>Text</p>
        </div>
        <p class="title is-6 text-center pa-1">{{$product->formatted_price}}</p>
      </div>
    </div>
  </a>
</div>
