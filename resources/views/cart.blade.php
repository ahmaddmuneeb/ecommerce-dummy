@extends('layouts.master')

@section('title')
    Cart
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
            <div class="col-md-12 m-4 p-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th>id#</th>
                            <th>Name</th>
                            <th>Qty</th>
                            <th>Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Hikvision 1MP 720p Full HD Dome CCTV Network Camera Price</td>
                            <td>
                                <form action="#">
                                    <input type="number" name="qty" id="qty" value="1">
                                </form>
                            </td>
                            <td>200$</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-danger">X</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <hr>
                </div>
                <div class="col-md-2">
                    <a href="/checkout" class="btn btn-sm btn-danger">Proceed to Checkout</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
