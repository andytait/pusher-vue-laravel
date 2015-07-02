@extends('layouts.default')

@section('content')

    <h2>Register</h2>
    <hr>
    <form class="form-horizontal" v-on="submit: saveUser">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text"
                       class="form-control"
                       id="name"
                       placeholder="Name"
                       v-model="newUser.name"
                >
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email"
                       class="form-control"
                       id="email"
                       placeholder="Email"
                       v-model="newUser.email"
                >
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password"
                       class="form-control"
                       id="password"
                       placeholder="Password"
                       v-model="newUser.password"
                >
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Register</button>
            </div>
        </div>
    </form>

@endsection
