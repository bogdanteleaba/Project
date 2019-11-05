
@extends('layouts.app')

@section('content')

<!-- Header -->


<!-- First Message -->
<br>
    <div class="jumbotron my-4" style="background-image: url('/laravel/public/storage/cover_images/{{ 'bg.jpg' }}');background-position: center; background-repeat: no-repeat; background-size: cover;">
        <h2 class="display-3" style="color:white;  text-transform: uppercase; font-weight: bold;">Welcome to Sports Festival official web page</h2><hr>
        <p class="lead" style="font-size:19px; color:white;">
            Here you can find the competitions we are organizing. In the same time, you are welcome to navigate on our blog page for updates regarding organization and competitions.
        </p>
        <br>
        <a href="/laravel/public/posts" class="btn btn-primary btn-lg" style="background-color: #5B8D09; color:white; border: 1px solid #5B8D09;"> Updates</a>
    </div>
    <hr>
    <!-- Card1  -->
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                    <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'bike.jpg' }}">
                <div class="card-body" style="padding-top:15px; ">
                    <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Cycling</h4>
                    <p class="card-text" style="color:black;">Join the competition!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                        <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'run.jpg' }}">
                    <div class="card-body" style="padding-top:15px; ">
                        <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Running</h4>
                        <p class="card-text" style="color:black;">Join the competition!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                            <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'rugby.jpg' }}">
                        <div class="card-body" style="padding-top:15px; ">
                            <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;" >Rugby</h4>
                            <p class="card-text" style="color:black;">Join the competition!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                                <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'arch.jpg' }}">
                            <div class="card-body" style="padding-top:15px; ">
                                <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Archery</h4>
                                <p class="card-text" style="color:black;">Join the competition!</p>
                            </div>
                        </div>
                    </div>
    </div>
<br>
    <!-- Card2  -->
    <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                        <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'cliff.jpg' }}">
                    <div class="card-body" style="padding-top:15px; ">
                        <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Climbing</h4>
                        <p class="card-text" style="color:black;">Join the competition!</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                            <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'tennis.jpg' }}">
                        <div class="card-body" style="padding-top:15px; ">
                            <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Tennis</h4>
                            <p class="card-text" style="color:black;">Join the competition!</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                                <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'swimming.jpg' }}">
                            <div class="card-body" style="padding-top:15px; ">
                                <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Swimming</h4>
                                <p class="card-text" style="color:black;">Join the competition!</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100" style="box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.1), 0 2px 4px 0 rgba(0, 0, 0, 0.1); padding-bottom:20px;">
                                    <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'basketball.jpg' }}">
                                <div class="card-body" style="padding-top:15px; ">
                                    <h4 class="card-title" style="font-weight: bold; color:black; font-size:19px; text-transform: uppercase;">Basketball</h4>
                                    <p class="card-text" style="color:black;">Join the competition!</p>
                                </div>
                            </div>
                        </div>
        </div>
        
        <!-- Footer -->

<hr>
        <footer class="py-5 bg-dark">
            <div class="container" style=" padding:20px; color:black;">
                <a href="https://github.com/bogdanteleaba/Project"><p class="m-0 text-center text-white" style="text-decoration:underline; color:#5B8D09;">GITHUB REPO</p></a>
                <p class="m-0 text-center text-white">+45 12 34 56 78</p>
                <p class="m-0 text-center text-white">contactus@gmail.com</p>
                <p class="m-0 text-center text-white">1664 Corpening Drive, Southfield, Michigan</p>
            </div>
        </footer>
        <br>
@endsection