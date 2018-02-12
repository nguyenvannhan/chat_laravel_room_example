<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Chat Room</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">

        <h1>Chat Room</h1>
        <chat-log :messages="messages"></chat-log>
        <chat-composer @messagesent="addMessage"></chat-composer>
    </div>

    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
</body>
</html>
