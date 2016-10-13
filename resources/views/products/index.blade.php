@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

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
                                    <td>{{ link_to_route('product.show',$product->description,[$product->id]) }}</td>
                                    <td>
                                    {!! Form::open(array('route'=>['product.destroy',$product->id],'method'=>'DELETE')) !!}
                                        {{ link_to_route('product.edit','Edit',[$product->id],['class'=>'btn btn-primary']) }} 
                                        | 
                                        {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}                                        
                                    {!! Form::close() !!}
                                    </td>
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
