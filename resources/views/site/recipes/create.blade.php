@extends('site.layout')
@section('content')


    <div class="recipe-create">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <form method="post" action="{{ route('recipes.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label>Name</label>
                                    <input name="name" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label>Prepare Time</label>
                                            <input name="prepare_time" class="form-control">
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-6">
                                            <label>Cooking Time</label>
                                            <input name="cooking_time" class="form-control">
                                        </div>
                                    </div>

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
                                <div class="mb-3">
                                    <label>Ingredient</label>
                                    <i class="fas fa-plus-circle addButton text-success"></i>
                                    <div id="ingredientList">
                                        <div class="ingredient-box mb-4">
                                            <input class="form-control me-2" name="ingredients[]">
                                            <i class="fas fa-minus-circle removeButton text-primary"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label>Image</label>
                                    <input type="file" name="image" class="form-control">
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
