@extends('site.layout')
@section('content')
    <div class="container">
        <div class="login">
            <div class="col-sm-12 col-md-12 col-lg-5">
                <div class="card shadow">
                    <div class="card-header bg-white text-center text-primary">
                        <h2>Login</h2>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('login.store') }}">
                            <div class="mb-3">
                                <label class="text-muted">E-posta</label>
                                <input class="form-control" name="eposta">
                            </div>
                            <div class="mb-4">
                                <label class="text-muted">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="form-control btn btn-primary">Login</button>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection()
