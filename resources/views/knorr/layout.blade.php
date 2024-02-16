<!DOCTYPE html>
<html>

<head>
    @include('knorr.include.head')
</head>

<body>
    <div class="scrollTop" id="scrollTop"><img src="/knorr/images/scrolltop.png" alt=""></div>
    @include('knorr.include.header')
    @yield('content')
    @include('knorr.include.js')
    @include('knorr.include.footer')
    @include('knorr.include.css')
</body>

</html>