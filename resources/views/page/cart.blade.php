
@extends('layout.header')

@section('content')

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    @if(!$cart==null)
                    @foreach($cart as $product)
                    <tr>
                        <th scope="col">img </th>
                        <th scope="col">Product</th>
                        <th scope="col">brand</th>
                        <th scope="col" class="text-center">
                            Quantity</th>
                        <th scope="col" class="text-left">Price</th>
                        <th scope="col" class="text-center"> Total </th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td ><img src="{{'public/storage/'.$product['img'] }}" alt="" style="width:120px;height: 100px;"> </td>
                        <td class="text-center">{{$product['name']}}</td>
                        <td class="text">{{$product['brand']}}</td>
                        <td class="text-center">{{$product['quantity']}}</td>
                        <td class="text">{{$product['price']}}</td>
                        <td class="text-center"> {{$product['price']*$product['quantity']}} </td>
                        <td>  <button name="delete" class="btn btn-sm btn-danger">delete</button>{{--<a href="{{ route('cart.delete') }}" class="product-btn"
                                                                                        style="background:orangered"
                                                                                        onclick="return confirm('are you sure?')">Delete</a>--}}</td>
                    </tr>

                    </tbody>
                    @endforeach
                    @endif
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-block btn-light">Continue Shopping</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

