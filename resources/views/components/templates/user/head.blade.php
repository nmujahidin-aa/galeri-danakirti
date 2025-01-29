<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>
    <link rel="stylesheet preload" as="style" href="{{URL::to('/')}}/assets/css/preload.min.css" />
    <link rel="stylesheet preload" as="style" href="{{URL::to('/')}}/assets/css/icomoon.css" />
    <link rel="stylesheet preload" as="style" href="{{URL::to('/')}}/assets/css/libs.min.css" />

    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/index.min.css" />

    @yield('styles')
</head>
