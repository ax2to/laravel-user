@extends('vendor.laravel-user.layout')
@section('title', 'Login Page')
@section('content')
    <section>
        <div class="container">
            <h2>{{ Auth::user()->full_name }}</h2>
        </div>
        <div class="container">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/user/update') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <label for="firstname" class="col-sm-2 control-label">First Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="First Email" id="name"
                               name="name" value="{{ old('firstname',Auth::user()->name) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">Last Name</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Last Name" id="lastname" name="lastname"
                               value="{{ old('lastname',Auth::user()->lastname) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Username" id="username" name="username"
                               value="{{ old('username',Auth::user()->username) }}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Email" id="email" name="email"
                               value="{{ old('email',Auth::user()->email) }}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

