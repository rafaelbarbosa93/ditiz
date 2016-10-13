@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products</div>

                <div class="panel-body">
                    {!! Form::open(array('route'=>'product.store')) !!}
                        <div class="form-group">
                            {!! Form::label('description','Description') !!}
                            {!! Form::text('description',null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('price','Price') !!}
                            {!! Form::text('price',null,['class'=>'form-control'])!!}
                        </div>
                        <div class="form-group">
                            {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary'])!!}
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
            @if($errors->has())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
@endsection
