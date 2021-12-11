@extends('site.layout')
@section('content')
    <div class="container">
        <div class="hero py-5">
            <div class="row g-5">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="hero-item">
                        <img class="img-fluid" src="{{ asset('images/hero-image1.jpeg') }}">
                        <div class="image-text text-center">
                            <div class="category mb-4">
                                category
                            </div>
                            <div class="title text-center">
                                <p>
                                    Homemade Oatmeal Chocolate Chip <br> Cookie Crisp Cereal
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="hero-item">
                        <img class="img-fluid" src="{{ asset('images/hero-image2.jpeg') }}">
                        <div class="image-text text-center">
                            <div class="category mb-4">
                                category
                            </div>
                            <div class="title text-center">
                                <p>
                                    Sheet Pan Cheesy Poblano Corn Enchiladas.
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection()
