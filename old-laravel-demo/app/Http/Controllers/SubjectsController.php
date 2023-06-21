<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use App\Subjects;

class SubjectsController extends Controller {

   public function index(){
      $subjects = \App\Models\Subjects::select('id','name','description')->get();
      return view('subjects.index')->with('subjects',$subjects);
   }

   public function create(){
      return view('subjects.create');
   }

   public function store(Request $request){
      $data = $request->except('_method','_token','submit');

      $validator = Validator::make($request->all(), [
         'name' => 'required|string|min:3',
         'description' => 'required|string|min:3',
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }

      if($record = \App\Models\Subjects::firstOrCreate($data)){
         Session::flash('message', 'Added Successfully!');
         Session::flash('alert-class', 'alert-success');
         return redirect()->route('subjects');
      }else{
         Session::flash('message', 'Data not saved!');
         Session::flash('alert-class', 'alert-danger');
      }

      return Back();
   }

   public function edit($id){
      $subject = \App\Models\Subjects::find($id);

      return view('subjects.edit')->with('subject',$subject);
   }

   public function update(Request $request,$id){
      $data = $request->except('_method','_token','submit');

      $validator = Validator::make($request->all(), [
         'name' => 'required|string|min:3',
         'description' => 'required|string|min:3',
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }
      $subject = \App\Models\Subjects::find($id);

      if($subject->update($data)){

         Session::flash('message', 'Update successfully!');
         Session::flash('alert-class', 'alert-success');
         return redirect()->route('subjects');
      }else{
         Session::flash('message', 'Data not updated!');
         Session::flash('alert-class', 'alert-danger');
      }

      return Back()->withInput();
   }

   // Delete
   public function destroy($id){
      \App\Models\Subjects::destroy($id);

      Session::flash('message', 'Delete successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('subjects');
   }
}