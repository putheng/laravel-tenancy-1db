<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Lixr</title>
        <link rel="stylesheet" href="{{ asset('css/app.css?v='. time()) }}">
        <link rel="shortcut icon" href="https://mobilityfinance.finflux.io/images/favicon.png">
    </head>

    <body class="default-skin">
        <div id="app">
            <application>
        </div>


    <script src="{{ asset('js/app.js?v='. time()) }}"></script>
    </body>
</html>
