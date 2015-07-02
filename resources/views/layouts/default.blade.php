<!DOCTYPE html>
<html>
<head>
    <title>Pusher & Vue</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <meta id="csrf_token" name="csrf_token" content="{{ csrf_token() }}">
</head>
<body id="app">

<div class="container">
    <ul class="list-unstyled">
        <li><a href="/">Register</a></li>
        <li><a href="/users">All Users</a></li>
    </ul>

    @yield('content')
</div>

<script src="/assets/js/vendor/vue.js"></script>
<script src="/assets/js/vendor/vue-resource.js"></script>
<script src="//js.pusher.com/2.2/pusher.min.js"></script>
<script src="/assets/js/app.js"></script>

</body>
</html>
