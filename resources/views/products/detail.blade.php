@extends('layout.master')
@section('title')
    {{$product[0]->name}}
@endsection
@section('content')
    {{--    {{dd($customer)}}--}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <div> <img src="{{$product[0]->img}}" alt=""> </div>
            <p class="card-text">{{$product[0]->name}}</p>
            <p class="card-text">{{$product[0]->gender}}</p>
            <p class="card-text">{{$product[0]->size}}</p>
            <p class="card-text">{{$product[0]->category}}</p>
            <p class="card-text">{{$product[0]->color}}</p>
            <p class="card-text">{{$product[0]->material}}</p>
            <p class="card-text">{{$product[0]->price}}</p>
            <p class="card-text">{{$product[0]->status}}</p>

        </div>
    </div>
@endsection
