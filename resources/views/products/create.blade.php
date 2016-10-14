@include('partials.header')

@include('partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Create</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
             {!! Form::open(array('route'=>'product.store')) !!}
              <div class="box-body">
                <div class="form-group">
                  {!! Form::label('code','Code') !!}
                  {!! Form::number('code',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('description','Description') !!}
                  {!! Form::text('description',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('price','Price') !!}
                  {!! Form::number('price',null,['class'=>'form-control','step'=>'any']) !!}
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                {!! Form::button('Create',['type'=>'submit','class'=>'btn btn-primary']) !!}
              </div>
              {!! Form::close() !!}
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
    @include('partials.footer')