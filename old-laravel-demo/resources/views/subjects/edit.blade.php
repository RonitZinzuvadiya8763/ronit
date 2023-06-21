<!-- Extends template page -->
@extends('layout.app')

<!-- Specify content -->
@section('content')

<h3>Edit Subject</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif
     <!-- Alert message (end) -->

     <div class="actionbutton">

        <a class='btn btn-info float-right' href="{{route('subjects')}}">List</a>

     </div>

     <form action="{{route('subjects.update',[$subject->id])}}" method="post" >
{{csrf_field()}}

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="description">Name <span class="required">*</span></label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <input id="name" class="form-control col-md-12 col-xs-12" name="name" placeholder="Enter subject name" required="required" type="text" value="{{old('name',$subject->name)}}">

            @if ($errors->has('name'))
               <span class="errormsg">{{ $errors->first('name') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
         <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Description
</label>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name='description' id='description' class='form-control' placeholder="Enter description">{{old('description',$subject->description)}}</textarea>

            @if ($errors->has('description'))
               <span class="errormsg">{{ $errors->first('description') }}</span>
            @endif
         </div>
       </div>

       <div class="form-group">
          <div class="col-md-6">
            <input type="submit" name="submit" value='Submit' class='btn btn-success'>
          </div>
       </div>

     </form>

   </div>
</div>

@stop