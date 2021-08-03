@extends('layout.master')
@section('title')
    {{$user[0]->name}}
@endsection
@section('content')
    {{--    {{dd($customer)}}--}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
           {{-- <div> <img src="{{$customer[0]->img}}" alt=""> </div>--}}
            <p class="card-text">{{$user[0]->id}}</p>
            <p class="card-text">{{$user[0]->name}}</p>
            <p class="card-text">{{$user[0]->email}}</p>
            <p class="card-text">{{$user[0]->age}}</p>
        </div>
    </div>
@endsection
