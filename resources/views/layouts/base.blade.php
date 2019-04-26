<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: http://ogp.me/ns#">

@include('layouts.partials._meta')

<body>
    <div id="app">
        @include('layouts.partials._header')

        <div class="main__body">
           @yield('content')
        </div>

        @include('layouts.partials._footer')
    </div>
</body>

</html>
