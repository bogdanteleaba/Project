
@extends('layouts.app')

@section('content')
<!-- First Message -->
<br>
    <div class="jumbotron my-4">
        <h2 class="display-3">Welcome to Sports Festival official web page</h2><hr>
        <p class="lead" style="font-size:19px;">
            Here you can find the competitions we are organizing. In the same time, you are welcome to navigate on our blog page for updates regarding organization and competitions.
        </p>
        <br>
        <a href="/laravel/public/posts" class="btn btn-primary btn-lg"> Updates</a>
    </div>
    <hr>
    <!-- Card1  -->
    <div class="row text-center">
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                    <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'bike.jpg' }}">
                <div class="card-body">
                    <h4 class="card-title" style="font-weight: bold">Cycling</h4>
                    <p class="card-text">Join the competition!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                        <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'run.jpg' }}">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold">Running</h4>
                        <p class="card-text">Join the competition!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                            <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'rugby.jpg' }}">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold">Rugby</h4>
                            <p class="card-text">Join the competition!</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                                <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'arch.jpg' }}">
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight: bold">Archery</h4>
                                <p class="card-text">Join the competition!</p>
                            </div>
                        </div>
                    </div>
    </div>
<br>
    <!-- Card2  -->
    <div class="row text-center">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                        <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'cliff.jpg' }}">
                    <div class="card-body">
                        <h4 class="card-title" style="font-weight: bold">Climbing</h4>
                        <p class="card-text">Join the competition!</p>
                    </div>
                </div>
            </div>
    
            <div class="col-lg-3 col-md-6 mb-4">
                    <div class="card h-100">
                            <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'tennis.jpg' }}">
                        <div class="card-body">
                            <h4 class="card-title" style="font-weight: bold">Tennis</h4>
                            <p class="card-text">Join the competition!</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card h-100">
                                <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'swimming.jpg' }}">
                            <div class="card-body">
                                <h4 class="card-title" style="font-weight: bold">Swimming</h4>
                                <p class="card-text">Join the competition!</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card h-100">
                                    <img style="width:100%;"src="/laravel/public/storage/cover_images/{{ 'basketball.jpg' }}">
                                <div class="card-body">
                                    <h4 class="card-title" style="font-weight: bold">Basketball</h4>
                                    <p class="card-text">Join the competition!</p>
                                </div>
                            </div>
                        </div>
        </div>
        
        <!-- Footer -->
<br><hr><br>
        <footer class="py-5 bg-dark" style="background-color:#222222;">
            <div class="container" style="background-color:#222222; padding:20px; color:white;">
                <p class="m-0 text-center text-white">+45 12 34 56 78</p>
                <p class="m-0 text-center text-white">contactus@gmail.com</p>
                <p class="m-0 text-center text-white">1664 Corpening Drive, Southfield, Michigan</p>
            </div>
        </footer>
        <br>
@endsection