@extends('layout.master')
@section('title','list products')
@section('content')
    <div>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="">
            <?php
            $products=\App\Models\Product::all();
            ?>
            @foreach($products as $product)
                <div class="col-md-3 special-products-grid text-center">
                    <a class="brand-name" href=""><img src="{{asset('storage/'.$product->img)}}" alt=""
                                                                       style="width:120px;height: 100px;"></a>
                    <h4><a class="product-here" href="">{{$product->name}}  </a></h4>
                    <h4><a href="">{{$product->brand}}</a></h4>
                    <p><a class="product-btn" href="{{route('cart.addToCart',$product->id)}}"><span>{{$product->price}}</span><small>BUY NOW</small></a></p>
                </div>
            @endforeach
        </div>
    </div>

@endsection
