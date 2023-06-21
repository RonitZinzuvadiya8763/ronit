<!-- Extends template page-->
@extends('layout.app')

<!-- Specify content -->
@section('content')

<h3>Subjects List</h3>

<div class="row">
   <div class="col-md-12 col-sm-12 col-xs-12">
      <!-- Alert message (start) -->
      @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
      <!-- Alert message (end) -->

      <div class='actionbutton'>

         <a class='btn btn-info float-right' href="{{route('subjects.create')}}">Add</a>

      </div>
      <table class="table" >
        <thead>
          <tr>
            <th width='40%'>Name</th>
            <th width='40%'>Description</th>
            <th width='20%'>Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($subjects as $subject)
           <tr>
              <td>{{ $subject->name }}</td>
              <td>{{ $subject->description }}</td>
              <td>
                 <!-- Edit -->
                 <a href="{{ route('subjects.edit',[$subject->id]) }}" class="btn btn-sm btn-info">Edit</a>
                 <!-- Delete -->
                 <a href="{{ route('subjects.delete',$subject->id) }}" class="btn btn-sm btn-danger">Delete</a>
              </td>
           </tr>
        @endforeach
        </tbody>
     </table>

   </div>
</div>
@stop