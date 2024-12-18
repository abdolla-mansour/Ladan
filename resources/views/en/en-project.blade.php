@extends('en.layout.app')

@section('content')
    <!-- about header  -->
    <!-- start header & nav  -->
    <header class="other-header" style="height: 50vh;">
        <!-- animated background -->
        <div id="bg"></div>
        <div class="overlay"></div>
        @include('en.layout.header')
        <!-- header text  -->
        <div class="header-text">
            <h1 class="text-light text-center mb-4 wow fadeIn" data-wow-delay=".2s" style="margin-top: 5vh;">Projects</h1>
            <p class="text-light text-center fs-4 h2 mb-lg-5 mb-3 wow fadeIn" data-wow-delay=".3s">Find out about all the projects we have completed and are offering.</p>
        </div>

    </header>
    <!-- end header & nav  -->
    <!-- start about sec  -->
    {{-- <section>
        <div class="container">
            <!-- about title  -->
            <div class="title d-flex gap-3 align-items-center wow fadeIn" data-wow-delay=".2s">
                <i class="fa-solid fa-angles-right text-main"></i>
                <h3 class=" text-dark fs-3">Learn about {{ $project->name_en }}</h3>
            </div>
            <div class="row align-items-center about">
                <img src="{{ asset('storage/' . $project->image) }}" class="col-12 col-lg-6 wow fadeInRight"
                    data-wow-delay=".3s" alt="">
                <div class="about-text col-12 col-lg-6 d-flex flex-column justify-content-between" style="min-height: 200px">
                    <p class="text-dark2 fs-5 wow fadeInUp" data-wow-delay=".3s">{{ $project->description_en }}</p>
                    <p>
                        @if ($project->web_link)
                            <a class="link" href="{{ $project->web_link }}"><i class="fa-solid fa-earth-americas"></i></a>
                        @endif
                        @if ($project->ios_link)
                            <a class="link" href="{{ $project->ios_link }}"><i class="fa-brands fa-apple"></i></a>
                        @endif
                        @if ($project->android_link)
                            <a class="link" href="{{ $project->android_link }}"><i class="fa-brands fa-google-play"></i></a>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- end about sec  --> --}}


    <!-- start products sec  -->
    <section id="products-details">
        <div class="container">
            <div class="row g-3 row-cols-1 row-cols-lg-2">
                <div class="col">
                    <h5 class="title">{{ $project->name_en }}</h5>
                    <p class="details">{{ $project->description_en }}</p>
                    {{-- <h6 class="">Execution Time:<span class="mx-2">3 Days</span></h6>
                    <h6 class="">Project Type:<span class="mx-2">Frontend Design and Coding</span></h6> --}}
                    <div class="links d-flex gap-3 align-items-center my-4 flex-wrap">
                        {{-- <a href="#"><i class="fa-brands fa-google-play fs-5"></i></a>
                        <a href="#"><i class="fa-brands fa-apple fs-5"></i></a>
                        <a href="#"><i class="fa-solid fa-globe fs-5"></i></a> --}}
                        @if ($project->web_link)
                            <a href="{{ $project->web_link }}"><i class="fa-solid fa-earth-americas fs-5"></i></a>
                        @endif
                        @if ($project->ios_link)
                            <a href="{{ $project->ios_link }}"><i class="fa-brands fa-apple fs-5"></i></a>
                        @endif
                        @if ($project->android_link)
                            <a href="{{ $project->android_link }}"><i class="fa-brands fa-google-play fs-5"></i></a>
                        @endif
                    </div>
                </div>
                <div class="col">
                    <a href="en-p"></a>
                    <img src="{{ asset('storage/' . $project->image) }}" class="w-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- end products sec  -->
@endsection
