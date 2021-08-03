@extends('layout.master')
@section('title','list products')
@section('content')
    <div>
    <p><a class="btn btn-success btn-lg" href="{{route('products.create')}}">add product</a></p>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="">
        @foreach($products as $product)
                <div class="col-md-3 special-products-grid text-center">
                    <a class="brand-name" href=""><img src="{{asset('storage/'.$product->img)}}" alt=""
                                                                       style="width:120px;height: 100px;"></a>
                    <h4><a class="product-here" href="">{{$product->name}}  </a></h4>
                    <h4><a href="">{{$product->brand}}</a></h4>
                    <p><a class="product-btn" href="{{route('cart.addToCart',$product->id)}}"><span>{{$product->price}}</span><small>BUY NOW</small></a></p>
                    <p><a href="{{route('products.detail',$product->id)}}" class="product-btn"
                          style="background: #005cbf">Detail</a></p>
                    <p><a href="{{route('products.edit',$product)}}" class="product-btn"
                          style="background: #005cbf">Update</a></p>
                    <p><a href="{{ route('products.destroy', $product) }}" class="product-btn"
                          style="background:orangered"
                          onclick="return confirm('are you sure?')">Delete</a></p>
                </div>
           @endforeach
    </div>
    </div>

@endsection
