@extends('main')

@section('title','|Edit Tag')
    
    @section('content')
        
      <div class="row">
        <div class="col-md-6">
            {{ Form::model($tag, ['route'=> ['tags.update', $tag->id], 'method'=>'PUT'])}}
                
        <h2>Change Tag</h2>
                    
        {{ Form::label('name','Name:',['class'=>'form-spacing-top'])}}
        {{ Form::text('name',null,["class"=>'form-control'])}}
        </div>
      </div>
            <div class="row">
            <div class="col-md-2">
        {{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block btn-h1-spacing btn-sm'])}}
            
        {{Form::close()}} 
        
        </div>
      </div>
      
    @endsection