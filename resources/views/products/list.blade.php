@extends('layout.master')
@section('title','list products')
@section('content')
<body>
<h3>list product</h3>
<a class="btn btn-success btn-lg" href="{{route('products.create')}}">add product</a>
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">id</th>
                <th scope="col">img</th>
                <th scope="col">name</th>
                <th scope="col">gender</th>
                <th scope="col">brand</th>
                <th scope="col">category</th>
                <th scope="col">price</th>
                <th scope="col">status</th>
                <th colspan="3" scope="col">action </th>
            </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{ $product->id }}</th>
                        <th scope="row">

                            @if($product->img)
                                <img src="{{ asset('storage/'.$product->img) }}" alt="" style="width: 150px; height: 150px">
                            @else
                                <img src="public/storage/imgs/default.jpg" alt="" style="width: 150px; height: 150px">
                            @endif
                        </th>
                        <th scope="row">{{$product->name}}</th>
                        <th scope="row">{{$product->gender}}</th>
                        <th scope="row">{{$product->brand}}</th>
                        <th scope="row">{{$product->category}}</th>
                        <th scope="row">{{$product->price}}</th>
                        <th scope="row">{{$product->status}}</th>

                        <td><a href="{{route('products.detail',$product->id)}}" class="btn btn-warning btn-lg">Detail</a></td>
                        <td><a href="{{route('products.edit',$product)}}" class="btn btn-warning btn-lg">Update</a></td>
                        <td><a href="{{ route('products.destroy', $product) }}" class="btn btn-danger btn-lg" onclick="return confirm('are you sure?')">Delete</a></td>

                    </tr>@endforeach
            </tbody>
        </table>
</body>
@endsection
