@extends('layouts.app')

@section('content')
<style>
.noborder{
    border:none !important;
}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Candidates</div>

                <div class="panel-body">                                                            
                    {!! Form::open(['action' => ['PostsController@update', $candidate->id], 'method' => 'POST']) !!}
                    <h1>Please fill in below details</h1>
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="name">Name</label>  
                        <div class="col-md-6">
                            <input id="name" name="name" value="{{$candidate->name}}" type="text" placeholder="Name" style="border: none;" class="input-md" required="" readonly>
                        </div>
                    </div>
                    &nbsp;

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="email">Email</label>  
                        <div class="col-md-6">
                            <input id="email" name="email" value="{{$candidate->email}}" type="text" placeholder="Email"  style="border: none;" class="input-md" required="" readonly>                            
                        </div>
                    </div>
                    &nbsp;
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="webaddress">Web Address</label>  
                        <div class="col-md-6">
                            <input id="webaddress" value="{{$candidate->webaddress}}" name="webaddress" type="text" placeholder="Web Address"  style="border: none;" class="input-md" required="" readonly>
                        </div>
                    </div>
                    &nbsp;
                    <!-- Textarea -->
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="coverletter">Cover Letter</label>
                        <div class="col-md-6">                     
                            <textarea  style="border: none;" class="input-md" id="coverletter" name="coverletter" required="" readonly>{{$candidate->coverletter}}</textarea>
                        </div>
                    </div>
                    &nbsp; 
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="webaddress">Likes working?</label>  
                        <div class="col-md-6">
                            <input id="webaddress" value="{{$candidate->working}}" name="webaddress" type="text" placeholder="Web Address"  style="border: none;" class="input-md" required="" readonly>
                        </div>
                    </div>
                    &nbsp;
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="webaddress">Time submitted</label>  
                        <div class="col-md-6">
                            <input id="webaddress" value="{{$candidate->created_at}}" name="webaddress" type="text" placeholder="Web Address"  style="border: none;" class="input-md" required="" readonly>
                        </div>
                    </div>
                    &nbsp; 
                    <div class="form-group">
                        <label class="col-md-6 control-label" for="webaddress">Rating</label>  
                        <div class="col-md-6">
                            <select name="rating" class="form-control">
                                <option value="1">1 star</option>
                                <option value="2">2 star</option>
                                <option value="3">3 star</option>
                                <option value="4">4 star</option>
                                <option value="5">5 star</option>        
                            </select>                            
                        </div>
                    </div>
                    &nbsp;                  
                    <div class="form-group">
                        <div class="col-md-6">
                            <input type="submit" value="Submit">
                        </div>
                    </div>
                    {{Form::hidden('_method','PUT')}}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
