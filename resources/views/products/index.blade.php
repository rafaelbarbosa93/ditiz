@include('partials.header')

@include('partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Products</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Code</th>
                  <th>Description</th>
                  <th>Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                <tr>
                  <td> {{ $product->code }}</td>
                  <td> {{ $product->description }} </td>
                  <td> {{ $product->price }} </td>
                  <td>
                  {!! Form::open(array('route'=>['product.destroy',$product->id],'method'=>'DELETE')) !!}
                    {{ link_to_route('product.edit','Edit',[$product->id],['class'=>'btn btn-primary']) }} 
                    {!! Form::button('Delete',['class'=>'btn btn-danger','type'=>'submit']) !!}
                  {!! Form::close() !!} 
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  @include('partials.footer')