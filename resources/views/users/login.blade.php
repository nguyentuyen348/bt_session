@extends('layout.header')
@section('title', 'LOGIN')
@section('content')
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ hide and show eye password ---------->
    <script>
        $(document).ready(function (){
            $('.input-group-prepend').click(function (){
                let typeVale= $('#password').attr('type');
                typeVale=(typeVale==='password') ? 'text' : 'password';
                $('#password').attr('type',typeVale);
                let classIconEye = (typeVale==='password') ? 'fas fa-eye-slash' : 'fas fa-eye';
                $('#icon-eye').removeClass();
                $('#icon-eye').addClass(classIconEye);
            })

        })
    </script>

</head>
<body>

<div class="container">

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">LOGIN</h4>

            <form method="post" action="{{route('users.come')}}">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                      <input name="email"  value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="email" type="email">
                </div> <!-- form-group// -->
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group input-group">
                    <div class="input-group-prepend" >
                        <span class="input-group-text"> <i id="icon-eye" class="fas fa-eye-slash"></i> </span>
                    </div>
                    <input name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="enter password" type="password">
                </div> <!-- form-group// -->
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> LOGIN  </button>
                </div>

            </form>
        </article>
    </div>

</div>
</body>
@endsection
