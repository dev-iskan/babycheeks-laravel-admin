{{ Request::header('Content-Type : text/xml') }}
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>{{ route('main') }}</loc>
    <lastmod>{{ \Carbon\Carbon::now()->tz('GMT')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>

  <url>
    <loc>{{ route('about-us') }}</loc>
    <lastmod>{{ \Carbon\Carbon::now()->tz('GMT')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.8</priority>
  </url>

  @if($categories->count())
  @foreach ($categories as $category)
  <url>
    <loc>{{ route('category', $category) }}</loc>
    <lastmod>{{ $category->updated_at->tz('GMT')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.9</priority>
  </url>

  @endforeach
  @endif
  @if($products->count())
  @foreach ($products as $product)
  <url>
    <loc>{{ route('product', $product) }}</loc>
    <lastmod>{{ $product->updated_at->tz('GMT')->toAtomString() }}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>1</priority>
  </url>
  @endforeach
  @endif

</urlset>
