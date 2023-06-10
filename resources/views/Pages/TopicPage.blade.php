@extends('Layouts.default')
@section('title', 'Teach Me Online')
@section('content')
 <!-- MODALS
    ================================================== -->
    <!-- Modal Sidebar account -->
    @include('ModelBox.loginModelBox')

    <!-- Modal Sidebar cart -->
    @include('ModelBox.cartModelBox')

    <!-- NAVBAR
    ================================================== -->
    @include('Common.innerHeader')

       <!-- PAGE TITLE
    ================================================== -->
    <div class="container py-8 pt-lg-11 bg-grey">
        <div class="row">
            <div class="col-xl-8 mx-auto">
                <h1 class="text-capitalize">{{$title}}</h1>


                <div class="d-md-flex align-items-center">


                    <div class="mb-4 mb-md-0">
                        <a href="#" class="d-block"><h6 class="mb-0">Source: {{env('APP_NAME')}}</h6></a>
                        <span class="font-size-sm">April 06, 2020</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mb-8 sk-thumbnail img-ratio-7">
        <img src="assets/img/covers/cover-20.jpg" alt="..." class="img-fluid">
    </div>
    <div class="container">
        <div class="row mb-8 mb-md-12">
            <div class="col-xl-8 mx-auto">
                <h3 class="">Topic Description</h3>
                   @include($page)
            </div>
        </div>
    </div>
    <hr>
@include('Common.Footer')
@endsection


