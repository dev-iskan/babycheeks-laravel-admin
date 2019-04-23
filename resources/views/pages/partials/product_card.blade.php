<div class="column is-half-mobile is-half-tablet is-one-quarter-desktop">
  <a href="{{route('product', $product)}}">
    <div class="card no-box-shadow">
      <div class="card-image">
        <figure class="image is-4by3">
          {{$product->getFirstMedia('products')}}
        </figure>
      </div>
      <div class="card-content pa-1">
        <p class="is-size-6">{{$product->name}}</p>
        <p class="is-size-7">Carter's</p>
        <p class="title is-6 text-right py-1">{{$product->formatted_price}}</p>
      </div>
    </div>
  </a>
</div>
