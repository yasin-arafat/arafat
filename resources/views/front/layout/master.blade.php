<!DOCTYPE html>
<html lang="en">
<head>
    @include('front.layout.top')
</head>
<body>

@include('front.layout.header')
<!-- END nav -->

 @yield('content')

@include('front.layout.footer')

<!-- loader -->
@include('front.layout.loader')

@include('front.layout.bottom')
</body>
</html>
