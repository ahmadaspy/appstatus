@extends('layouts.app')
@section('stylemanual')

    <style>
    .fill img {
        object-fit: cover;
        width: 50px;
        height: 500px;
    }
    </style>

@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block" id="resize">
                  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active fill">
                          <img src="{{ asset('assets/img/1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item fill">
                          <img src="{{ asset('assets/img/2.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item fill">
                          <img src="{{ asset('assets/img/3.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4">@yield('lognregisjudul')</h1>
                    </div>
                    @yield('form')
                    {{-- <hr>
                    <div class="text-center">
                      <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="/register">Create an Account!</a>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
@endsection
