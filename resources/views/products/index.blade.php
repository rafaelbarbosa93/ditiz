@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Description</th>
                            <th>Price</th>
                        </tr>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->description }}</td>
                                    <td>edit | delete</td>
                                </tr>
                            @endforeach
                    </table>
                </div>
            </div>
            {{ link_to_route('product.create','Add new Product',null,['class'=>'btn btn-primary']) }}
        </div>
    </div>
</div>
@endsection
