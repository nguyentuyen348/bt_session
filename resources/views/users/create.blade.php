<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create customer</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <script>
        $(document).ready(function (){
            $('.input-group-prepend').click(function (){
                let typeVale= $('#password').attr('type');
                typeVale=(typeVale==='password') ? 'text' : 'password';
                $('#password').attr('type',typeVale);
                let classIconEye = (typeVale==='password') ? 'fas fa-eye-slash' : 'fas fa-eye';
                $('#icon-eye').removeClass();
                $('#icon-eye').addClass(classIconEye);


                let typeVale1= $('#password1').attr('type');
                typeVale1=(typeVale1==='password') ? 'text' : 'password';
                $('#password1').attr('type',typeVale1);
                let classIconEye1 = (typeVale1==='password') ? 'fas fa-eye-slash' : 'fas fa-eye';
                $('#icon-eye1').removeClass();
                $('#icon-eye1').addClass(classIconEye1);

            })
        })
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>

<div class="container">

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
            <h4 class="card-title mt-3 text-center">Create Account</h4>

            <form method="post" action="">
                @csrf
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i id="" class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="name" type="text">
                </div> <!-- form-group// -->
                @error('name')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-id-card"></i> </span>
                    </div>
                    <input  name="age" value="{{old('age')}}" class="form-control @error('age') is-invalid @enderror" placeholder="age" type="text">
                </div> <!-- form-group// -->
                @error('age')
                <p class="text-danger">{{$message}}</p>
                @enderror


                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input  name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Email" type="email">
                </div> <!-- form-group// -->
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror



                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i id="icon-eye" class="fas fa-eye-slash"></i> </span>
                    </div>
                    <input id="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i id="icon-eye1" class="fas fa-eye-slash"></i> </span>
                    </div>
                    <input id="password1" name="repeatPassword" value="" class="form-control @error('repeatPassword') is-invalid @enderror" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->
                @error('repeatPassword')
                <p class="text-danger">{{$message}}</p>
                @enderror

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
                </div>
                <p class="text-center">Have an account? <a href="">Sign in</a> </p>
            </form>
        </article>
    </div>

</div>
</body>
</html>
