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
    @include('Common.header')


    <!-- HERO
    ================================================== -->
    @include('Common.enquiry')


    <!-- FEATURED PRODUCT
    ================================================== -->
    @include('Courses.FeatureCourses')

    <!-- CATEGORIES
    ================================================== -->
    @include('Category.Trending')

    <!-- TESTIMONIAL
    ================================================== -->
    @include('Testimonials.Student')

    <!-- INSTRUCTORS
    ================================================== -->
    @include('Instructor.Topinstructor')

    <!-- ICON BLOCKS
    ================================================== -->
    @include('Common.NewFeatures')

    <!-- COUNTUP
    ================================================== -->
    @include('Common.Achivement')


    <!-- EVENTS
    ================================================== -->
    {{-- @include('Common.Event') --}}

    <!-- BLOG
    ================================================== -->
    {{-- @include('Blog.FeatureBlog') --}}

    <!-- PRICE TABLE
    ================================================== -->
    @include('Common.Pricess')

    <!-- CALL ACTION
    ================================================== -->
    @include('Common.BecomeInstructor')

    <!-- FOOTER
    ================================================== -->

    @include('Common.Footer')

@endsection


