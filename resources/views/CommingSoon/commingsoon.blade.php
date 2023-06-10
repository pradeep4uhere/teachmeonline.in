
@extends('Layouts.commingSoon')
@section('title', 'Teach Me Online')
@section('content')
<!-- MODALS================ COMING SOON======== -->
<div class="container my-12">
<div class="row">
    <div class="col-lg-5 col-xl-6 mb-6 mb-lg-0">
        <img src="assets/img/illustrations/illustration-11.svg" alt="..." class="img-fluid">
    </div>
    <div class="col-lg-7 col-xl-6">
        <h1 class="display-6">We're coming soon.</h1>
        <p class="line-height-md mb-6">Our website is under construction. We'll be here soon with our new awesome site, subscribe to be notified.</p>

        <div class="countdown row text-center mx-md-n1 mx-lg-n5 mb-8" data-countdown="06/01/2022 12:00:00 PM">
            <div class="col-6 col-md-auto px-md-1 px-lg-5 mb-6 mb-md-0 countdown-days">
                <div class="mb-4 mx-auto border-w-md border rounded-circle h-90p w-90p d-flex align-items-center justify-content-center flex-column">
                    <div class="h2 text-blue mb-0"><span class="countdown-value">10</span></div>
                </div>
                <span class="h5 mb-0 countdown-label">DAYS</span>
            </div>

            <div class="col-6 col-md-auto px-md-1 px-lg-5 mb-6 mb-md-0 countdown-hours">
                <div class="mb-4 mx-auto border-w-md border rounded-circle h-90p w-90p d-flex align-items-center justify-content-center flex-column">
                    <div class="h2 text-blue mb-0"><span class="countdown-value">50</span></div>
                </div>
                <span class="h5 mb-0 countdown-label">HOURS</span>
            </div>

            <div class="col-6 col-md-auto px-md-1 px-lg-5 mb-6 mb-md-0 countdown-minutes">
                <div class="mb-4 mx-auto border-w-md border rounded-circle h-90p w-90p d-flex align-items-center justify-content-center flex-column">
                    <div class="h2 text-blue mb-0"><span class="countdown-value">20</span></div>
                </div>
                <span class="h5 mb-0 countdown-label">MINUTES</span>
            </div>

            <div class="col-6 col-md-auto px-md-1 px-lg-5 mb-6 mb-md-0 countdown-seconds">
                <div class="mb-4 mx-auto border-w-md border rounded-circle h-90p w-90p d-flex align-items-center justify-content-center flex-column">
                    <div class="h2 text-blue mb-0"><span class="countdown-value">40</span></div>
                </div>
                <span class="h5 mb-0 countdown-label">SECONDS</span>
            </div>
        </div>

        <form class="">
            <div class="input-group d-block d-md-flex bg-white p-1 rounded border">
                <input type="text" class="form-control w-100 w-md-auto form-control-sm rounded border-0 placeholder-1" placeholder="Enter your email" aria-label="Enter your email" aria-describedby="button-addon2">
                <div class="input-group-append ms-0">
                    <button class="btn btn-sm btn-primary w-100 w-md-auto btn-wide rounded border-0" type="button" id="button-addon2">Subscribe</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
@endsection


