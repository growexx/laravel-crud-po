<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background-image: url({{ asset('background.jpg') }});background-size: cover;">
    <div class="wrapper d-flex align-items-stretch">
    @include('nav', ['activePage' => ''])
        <div class="container" style="padding: 5%;">
            <form method="post" action="{{route('product.update', ['product' => $product])}}">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            {{ csrf_field() }}
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" value="{{$product->name}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="qty" class="col-sm-2 col-form-label">Quantity: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="qty" placeholder="Enter Quantity" value="{{$product->qty}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price: </label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="price" placeholder="Enter Price"  value="{{$product->price}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Description: </label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="description" rows="3" placeholder="Enter Product Description">{{$product->description}}</textarea>
                    </div>
                </div>
                <div style="text-align: center;">
                    <input class="btn btn-primary" type="submit" value="Update" />
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