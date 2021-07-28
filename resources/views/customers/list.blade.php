@extends('layout.master')
@section('title',"list customers")
@section('content')
    <body>
    <h3>list customers</h3>
    <a class="btn btn-warning btn-lg" href="{{route('customers.create')}}">add product</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">customer_id</th>
            <th scope="col">username</th>
            <th scope="col">email</th>
            <th scope="col">age</th>
        </tr>
        </thead>

        <tbody>
        @foreach($customers as $customer)
            <tr>
                <th scope="row">{{$customer->customer_id}}</th>
                <th scope="row">{{$customer->username}}</th>
                <th scope="row">{{$customer->email}}</th>
                <th scope="row">{{$customer->age}}</th>
                <td><a href="{{ route('customers.profile',$customer->customer_id)}}" class="btn btn-warning btn-lg">Detail</a></td>
                <td><a href="{{ route('customers.edit',$customer)}}" class="btn btn-warning btn-lg">Update</a></td>
                <td><a href="{{ route('customers.destroy', $customer->customer_id) }}" class="btn btn-danger btn-lg" onclick="return confirm('are you sure?')">Delete</a></td>

            </tr>@endforeach
        </tbody>
    </table>
    </body>
@endsection
