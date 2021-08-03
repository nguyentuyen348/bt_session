<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit customer</title>
</head>
<body>
<div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        @csrf
        {{--  @method('PUT')--}}

        <div class="mb-3">
            <label for="username" class="form-label">username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $users->name }}">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">age</label>
            <input type="text" class="form-control" id="age" name="age" value="{{ $users->age }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $users->email }}">
        </div>

        <button type="submit" class="btn btn-success"> Update </button>

    </form>

</div>
</body>
</html>


