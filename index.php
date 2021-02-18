@extends('layouts.ckeditor')

form open action item controller@store method post enctype multipart
div class for group items controller placegolder <title> </title>
form lable tag token_get_allgf

@section('content')
<h1>Create Item</h1>
{!! Form::open(['action' =>'ItemsController@store','method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
<div class="form-group">
	{{Form::label('name','Name')}}
	{{Form::text('name','',['class'=>'form-control','placeholder'=>'Title'])}}
</div>
<div class="form-group">
	{{Form::label('tag','Tag')}}
	{{Form::text('tag','',['class'=>'form-control','placeholder'=>'Tag'])}}
</div>
<div class="form-group">
	{{Form::label('description','Description')}}
	{{Form::textarea('description','',['id' => 'article-ckeditor','class'=>'form-control','placeholder'=>'Description'])}}
</div>
<div class="form-group">
	{{Form::label('price','Price')}}
	{{Form::number('price','',['class'=>'form-control','placeholder'=>'Price'])}}
</div>
<div class="form-group">
	{{Form::label('quantity','Quantity')}}
	{{Form::number('quantity','',['class'=>'form-control','placeholder'=>'Quantity'])}}
</div>
<div class="form-group">
	{{Form::file('item_image')}}
</div>
<>div class form group
form class form group for : label price, price class from control
from :: number quantity class for control placegolder quantit
{{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@end