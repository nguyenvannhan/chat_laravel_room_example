<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chat Room</title>

    <link href="{{ asset('css/app.css') }}">
</head>
<body>
    <div id="app">
        <h1>Chat Room</h1>
        <chat-message></chat-message>
        <chat-log></chat-log>
        <chat-composer></chat-composer>
    </div>

    <script src="{{ asset('js/app.js')}}"></script>
</body>
</html>
