@extends('site.layout')
@section('content')
    <div class="container">
        <div class="register">
            <div class="col-sm-12 col-md-12 col-lg-7">
                <div class="card shadow">
                    <div class="card-header bg-white">
                        <div class="card-header bg-white text-center text-primary">
                            <h2>Register</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="post" action="#">
                            <div class="mb-3">
                                <label class="text-muted">E-posta</label>
                                <input class="form-control" name="eposta">
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Password Again</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">Name</label>
                                <input class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="text-muted">User Name</label>
                                <input class="form-control" name="user_name">
                            </div>

                            <button class="form-control btn btn-primary">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
