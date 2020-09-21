@extends('layouts.admin.blank')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card-group">
                    <div class="card p-4">
                        <form method="post" action="/admin/login">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <h1>Login</h1>
                                <p class="text-muted">Sign In to your account</p>

                                @if (isset($error_message))
                                    <div class="input-group mb-3 list-group-item list-group-item-danger">
                                        <span>{{ $error_message }}</span>
                                    </div>
                                @endif

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-user"></i></span>
                                    </div>
                                    <input type="text" name="username" class="form-control" placeholder="Username">
                                    @if (isset($error) && isset($error['username']))
                                        <div class="input-group mb-3 list-group-item list-group-item-danger">
                                            @foreach($error['username'] as $err)
                                                <span>{{ $err }}</span>
                                            @endforeach
                                        </div>
                                    @endif
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="icon-lock"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Password">

                                    @if (isset($error) && isset($error['password']))
                                    <div class="input-group mb-3 list-group-item list-group-item-danger">
                                        @foreach($error['password'] as $err)
                                            <span>{{ $err }}</span>
                                        @endforeach
                                    </div>
                                    @endif
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-primary px-4">Login</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
