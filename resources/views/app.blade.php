<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <div id="app">

        <div class="container mx-auto">
            <router-link to="/">Home</router-link>
            <router-link to="/posts/create">New Post</router-link>
            <router-view></router-view>
        </div>

    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
