@php
    $path = explode('/knorr/', url()->current())[1];
    if(count(explode('/', $path)) > 1){
        $path = explode('/', $path)[0];
    }
@endphp
@if($path == 'recipe')
    <link rel="stylesheet" href="/knorr/styles/recipe2.css">
@endif
<link rel="stylesheet" href="/knorr/styles/libs/slick.css">
<link rel="stylesheet" href="/knorr/styles/libs/slick-theme.css">
<link rel="stylesheet" href="/knorr/styles/main.css">
<link rel="stylesheet" href="/knorr/styles/{{ $path }}.css">