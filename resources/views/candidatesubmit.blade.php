@extends('layouts.app')
@section('content')
<div class="container">
{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
<h1>Please fill in below details</h1>
<div class="form-group">
  <label class="col-md-6 control-label" for="name">Name</label>  
  <div class="col-md-6">
  <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
  </div>
</div>
&nbsp;

<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="email">Email</label>  
  <div class="col-md-6">
  <input id="email" name="email" type="text" placeholder="Email" class="form-control input-md" required="">
    
  </div>
</div>
&nbsp;
<!-- Text input-->
<div class="form-group">
  <label class="col-md-6 control-label" for="webaddress">Web Address</label>  
  <div class="col-md-6">
  <input id="webaddress" name="webaddress" type="text" placeholder="Web Address" class="form-control input-md" required="">
  </div>
</div>
&nbsp;
<!-- Textarea -->
<div class="form-group">
  <label class="col-md-6 control-label" for="coverletter">Cover Letter</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="coverletter" name="coverletter" required=""></textarea>
  </div>
</div>
&nbsp;
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-6 control-label" for="attach">CV</label>
  <div class="col-md-6">
    <input id="attach" name="attach" class="input-file" type="file" required="">
  </div>
</div>
&nbsp;
<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-6 control-label" for="working">Do you like working?</label>
  <div class="col-md-6"> 
    <label class="radio-inline" for="working-0">
      <input type="radio" name="working" id="working-0" value="Yes" checked="checked">
      Yes
    </label> 
    <label class="radio-inline" for="working-1">
      <input type="radio" name="working" id="working-1" value="No">
      No
    </label>
  </div>
</div>
&nbsp;
<div class="form-group">
    <div class="col-md-6">
        <input type="submit" value="Submit">
    </div>
</div>
{!! Form::close() !!}
</div>
@endsection