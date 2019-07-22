@extends('admin.layout.admin')
@section ('content')
    <h3>Add Product</h3>
    <div class="row ">
        <div class="col-md-12" style="align-content: center ;">
            {!! Form::open(['route' => 'admin.product.store','method'=>'post','files' => 'true']) !!}


            <div class="form-group  ">
                {{Form::label('description','Description')}}
                {{Form::text('description',null,array('class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('quantity','Quantity')}}
                {{Form::text('quantity',null,array('class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('price','Price')}}
                {{Form::text('price',null,array('class' => 'form-control'))}}
            </div>
            <div class="form-group">
                {{Form::label('category_id','Category')}}
                {{Form::select('category_id',[1=>'Fruits',2=>'Vegetables',3=>'Meat',4=>'Dairy',5=>'Artwork',6=>'Handicraft'],null,['class' => 'form-control','placeholder' =>'Select one'])}}
            </div>

            <div class="form-group">
                {{Form::image('image','Image')}}
                {{Form::file('image',array('class' => 'form-control'))}}
            </div>

            {!! Form::submit('Upload Items',array('class'=> 'btn btn-primary')) !!}
            {!! Form::close() !!}
        </div>
        </div>

    @endsection
