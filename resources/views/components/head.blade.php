@props(['page_title', 'lp_domain', 'favicon', 'head_includes' => null])

<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, height=device-height, initial-scale=1.0, user-scalable=yes'>

    <title>{{$page_title}}</title>

    <!--CSS--->
    <link href='https://starbasecdn.com/upload/?dist=rsymOUxcXZqFdxkMYh' rel='stylesheet'>
    <link rel='icon' href='{{$favicon}}' sizes='500x500' type='image/png'>
    @vite(['resources/css/app.css', 'resources/css/lp_skin.css', 'resources/js/app.js'])

    <!--JAVASCRIPT FILES-->
    <script src='https://code.jquery.com/jquery-3.6.0.slim.min.js' integrity='sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=' crossorigin='anonymous'></script>


    @if(!empty($head_includes))
        @foreach ($head_includes as $url)
            {{ $url }}
        @endforeach
    @endif

</head>
