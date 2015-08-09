@extends('vendor.laravel-user.layout')
@section('title', 'Login Page')
@section('content')
    <section>
        <div class="container">
            <h2>{{ Auth::user()->full_name }}</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3>About</h3>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus enim augue, placerat nec urna
                        vel, sagittis fringilla mi. Suspendisse lacinia a mi tincidunt lacinia. Nulla et euismod nibh,
                        quis condimentum magna. Suspendisse sagittis ligula elementum pretium interdum. Praesent eu odio
                        mollis ex vulputate bibendum eget non lorem. Donec sit amet nulla nunc. Integer luctus eleifend
                        sodales. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent pulvinar lacinia
                        sapien non aliquet. </p>
                </div>
                <div class="col-md-6">
                    <h3>Info</h3>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td>{{ Auth::user()->lastname }}</td>
                        </tr>
                        <tr>
                            <th>Username</th>
                            <td>{{ Auth::user()->username }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
@endsection

