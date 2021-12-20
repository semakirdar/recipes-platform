@extends('site.layout')
@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-9">
                <div class="mb-3">
                    <div id="recipe-name"></div>
                    <div id="recipe-description"></div>
                </div>
                <table>
                    @foreach($recipes as $recipe)
                        <tr>
                            <td>{{ $recipe->id }}</td>
                            <td><button class="btn btn-danger btn-recipe ms-2" type="button" data-id="{{ $recipe->id }}">DETAIL</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
