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
                                <i class="fas fa-tag"></i> category
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
                                <i class="fas fa-tag"></i> category
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
        <div class="latest-recipes pb-5">
            <h3 class="py-3">The Latest Recipes</h3>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image1.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Almond Flour Pancakes
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image2.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Taiwanese Popcorn Chicken
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image5.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Homemade Oatmeal Chocolate Chip Cookie Crisp Cereal
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image6.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Spicy Serrano Pineapple Margarita.
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image1.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Almond Flour Pancakes
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image2.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Taiwanese Popcorn Chicken
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image5.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Homemade Oatmeal Chocolate Chip Cookie Crisp Cereal
                                </p>
                            </div>
                            <div class="time">
                                <span>June 8, 2021</span> - <span><i class="far fa-clock"></i> 75 min Cook</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-3">
                    <div class="recipes-item pt-3">
                        <img src="{{ asset('images/latest-image6.jpeg') }}">
                        <div class="image-text">
                            <div class="category my-4">
                                <i class="fas fa-tag"></i> category
                            </div>
                            <div class="title">
                                <p>
                                    Spicy Serrano Pineapple Margarita.
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

    <div class="random-recipes py-5">
        <div class="row g-0">
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="random-item random-hover">
                    <img class="img-fluid" src="{{ asset('images/hero-image1.jpeg') }}">
                    <div class="image-text text-center">
                        <div class="category mb-4">
                            <i class="fas fa-tag"></i> category
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
                <div class="random-item">
                    <div>
                        <div class="random-image">
                            <img class="img-fluid" src="{{ asset('images/latest-image6.jpeg') }}">
                            <div class="image-text text-center">
                                <div class="category mb-4">
                                    <i class="fas fa-tag"></i> category
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
                        <div class="random-image">
                            <img class="img-fluid" src="{{ asset('images/hero-image2.jpeg') }}">
                            <div class="image-text text-center">
                                <div class="category mb-4">
                                    <i class="fas fa-tag"></i> category
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

                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4">
                <div class="random-item random-hover">
                    <img class="img-fluid" src="{{ asset('images/image.jpeg') }}">
                    <div class="image-text text-center">
                        <div class="category mb-4">
                            <i class="fas fa-tag"></i> category
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
        </div>
    </div>


@endsection()
