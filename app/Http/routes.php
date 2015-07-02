<?php

use \App\Events\UserHasRegistered;
use \App\User;

get('/', function () {
    return view('register');
});

get('users', function () {
    return view('users');
});

get('api/users/get', function() {
    return App\User::all();
});

post('users/save', function() {
    $user = User::create(Request::all());

    event(new UserHasRegistered($user));

    return $user;
});