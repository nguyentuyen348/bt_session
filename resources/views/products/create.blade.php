<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create product</title>
</head>
<body>
<div class="container">
    <form method="post" action="" enctype="multipart/form-data">
       {{-- @method('PATCH')--}}
        @csrf
        <h3>CREATE PRODUCT</h3>
        <div class="mb-3">
            <label for="img" class="form-label">img</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">name</label>
            <input type="text" required class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">gender</label>
            <input type="text" required class="form-control" id="gender" name="gender">
        </div>
        <div class="mb-3">
            <label for="size" class="form-label">size</label>
            <input type="text" required class="form-control" id="size" name="size">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">category</label>
            <input type="text" class="form-control" id="category" name="category">
        </div>
        <div class="mb-3">
            <label for="brand" class="form-label">brand</label>
            <input type="text" class="form-control" id="brand" name="brand">
        </div>
        <div class="mb-3">
            <label for="color" class="form-label">color</label>
            <input type="text" class="form-control" id="color" name="color">
        </div>
        <div class="mb-3">
            <label for="material" class="form-label">material</label>
            <input type="text" class="form-control" id="material" name="material">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">status</label>
            <input type="text" class="form-control" id="status" name="status">
        </div>

        <button type="submit" class="btn btn-primary">ADD</button>
    </form>

</div>
</body>
</html>
