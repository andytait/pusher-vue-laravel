@extends('layouts.default')

@section('content')

    <h2>Recent Registrations</h2>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <tr v-repeat="user: userEvents">
            <td>@{{ user.id }}</td>
            <td>@{{ user.name }}</td>
            <td>@{{ user.email }}</td>
            <td>@{{ user.created_at }}</td>
        </tr>
        </tbody>
    </table>

@endsection
