<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src=" https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <title>Product</title>
</head>

<body style="background-image: url('background.jpg');background-size: cover;">
    <div class="wrapper d-flex align-items-stretch">
    @include('nav', ['activePage' => 'index'])
    <br>
        <div class="col-10 mt-5" style="color: white;">
            <table id="product-table" class="table table-striped table-bordered" style="width:100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Description</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                <thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->qty}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->description}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('product.edit', ['product' => $product])}}"><i class="bi bi-pencil"></i>
                            Edit</a>
                        </td>
                        <td>
                            <form method="post" action="{{route('product.destroy', ['product' => $product])}}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-outline-danger">
                                    <i class="bi bi-trash"></i> Button
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{session('success')}}
                    </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $("#product-table").DataTable({
                dom: '<"dt-buttons"Bf><"clear">lirtp',
                paging: true,
                autoWidth: true,
                buttons: [
                    "colvis",
                    "copyHtml5",
                    "csvHtml5",
                    "excelHtml5",
                    "pdfHtml5",
                    "print"
                ]
            });
        });
    </script>
</body>
<style>
    div.dataTables_wrapper div.dataTables_length select{
        width: 100px;
    }
    .success {
        color: green;
    }

    #product-table{
        background-color: #f8f9fa;
    }
</style>

</html>