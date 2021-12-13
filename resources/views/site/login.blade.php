@extends('site.layout')
@section('content')
    <div class="container">
        <div class="login">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">

                    </div>
                    <form method="post" action="#">
                        <div class="mb-3">
                            <label>E-posta</label>
                            <input class="form-control" name="eposta">
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <button class="form-control btn btn-danger">Login</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

@endsection()
