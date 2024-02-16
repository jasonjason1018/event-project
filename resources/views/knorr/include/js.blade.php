@php
    $path = explode('/knorr/', url()->current())[1];
    if(count(explode('/', $path)) > 1){
        $path = explode('/', $path)[0];
    }
@endphp
<script src="/knorr/scripts/lib/slick.min.js"></script>
<script src="/knorr/scripts/{{ $path }}.js"></script>
<script src="/knorr/scripts/morefood.js"></script>