<filters
  :category="{{request()->category}}"
  :mappings="{{json_encode($mappings)}}"
  :query="{{json_encode(request()->query())}}"
/>
