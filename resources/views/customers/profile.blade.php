@extends('layout.master')
@section('title')
    {{$customer[0]->username}}
@endsection
@section('content')
    {{--    {{dd($customer)}}--}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
           {{-- <div> <img src="{{$customer[0]->img}}" alt=""> </div>--}}
            <p class="card-text">{{$customer[0]->customer_id}}</p>
            <p class="card-text">{{$customer[0]->username}}</p>
            <p class="card-text">{{$customer[0]->email}}</p>
            <p class="card-text">{{$customer[0]->age}}</p>
        </div>
    </div>
@endsection
