@extends('site.layout')
@section('content')

    <div class="container">
        <div class="recipe-create">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('recipes.store') }}">
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Prepare Time</label>
                                    <input name="prepare_time" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Cooking Time</label>
                                    <input name="cooking_time" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Serving</label>
                                    <input name="serving" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Category</label>
                                    <select class="form-control" name="category_id">
                                        <option selected>SELECT</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea rows="4" class="form-control" name="description"></textarea>
                                </div>

                                <button class="btn btn-primary form-control">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection()
