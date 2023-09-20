<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
</head>
<body style="background-image: url({{ asset('background.jpg') }});background-size: cover;">
    <div class="wrapper d-flex align-items-stretch">
    @include('nav', ['activePage' => 'create'])
        <div class="container" style="padding: 5%;">

            <form method="post" action="{{route('product.store')}}">
            {{ csrf_field() }}
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="qty" class="col-sm-2 col-form-label">Quantity: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="qty" placeholder="Enter Quantity">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="price" placeholder="Enter Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter Product Description"></textarea>
                    </div>
                </div>
                <div style="text-align: center;">
                    <input class="btn btn-primary" type="submit" value="Save a New Product" />
                </div>
            </form>
            <div class="error">
                @if($errors->any())
                <ul>
                    <div class="alert alert-danger" role="alert">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                </ul>
                @endif
            </div>
        </div>
    </div>
</body>
<style>
    label {
        color: white;
    }
</style>
</html>