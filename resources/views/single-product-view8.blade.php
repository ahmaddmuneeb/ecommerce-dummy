@extends('layouts.master')

@section('title')
    Product/View
@endsection

@section('content')

<br>
<br>

<!-- Product -->
<div class="bg0 m-t-23 p-b-140">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                .
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                .
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div>
                    <h2 class="m-4 p4">
                        Camera HIKVISION 720P
                    </h2>
                    <img class="m-4 p-4 w-50" src="{{ asset('images/p8.jpg') }}" alt="erorr-loading-image">
                </div>
            </div>
            <div class="col-md-6">
                <h1>Camera HIKVISION 720P  </h1>
                <h3 class="mt-4">
                    <b>Rs 1650</b>
                </h3>
                <p class="mt-4">
                    <div>
                        <b>Description:</b>
                    </div>
                    Megapixel high-performance CMOS
                    Analog HD output, up to 720p resolution
                    True Day/Night
                    DNR, Smart IR
                    Up to 20m IR distance
                    IP66 weatherproof
                    3.6mm LENS
                    IP66 Metal Body

                    Price: As from Rs 750
                    1 Year warranty

                </p>
                {{-- <a href="/cart" class="btn btn-danger mt-4">
                    Add to Cart
                </a> --}}
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-md-2">
                <br>
            </div>
            <div class="col-md-8">
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto cum vero placeat cumque corrupti! Iure obcaecati itaque pariatur molestiae quos cumque! Repudiandae non tenetur sequi inventore sunt earum maiores autem?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia reiciendis autem, officiis ipsam voluptate est beatae fugiat consequatur magnam ipsum blanditiis minima recusandae modi sunt alias. Dolore harum distinctio amet
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente corporis repudiandae sequi non atque molestiae tempore harum, nostrum quos quia neque perspiciatis, nisi porro earum qui excepturi, quibusdam sunt consectetur?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam esse possimus, consectetur ut soluta minus velit voluptatem quidem eveniet fugiat maxime. Iusto quibusdam placeat libero sequi, aliquam error labore quisquam.
                </p>
            </div>
            <div class="col-md-2"></div>
        </div> --}}
    </div>
</div>
@endsection
