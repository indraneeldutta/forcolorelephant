@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Candidates</div>

                <div class="panel-body">
                @if(count($posts) > 1)
                    <table class="table table-bordered table-striped table-hover">
                        <tr>
                            <th>S.no</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                    @foreach($posts as $k => $value)
                        <tr>
                            <td>{{$k+1}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->rating}} Star</td>
                            <td><a href="employershowcandidate/{{$value->id}}" role="button">Open Profile</a> 
                                {!!Form::open(['action' => ['PostsController@destroy', $value->id],'method' => 'Post', 'class' => 'pull-right', 'onsubmit' => 'return ConfirmDelete()'])!!}
                                    {!!Form::hidden('_method', 'DELETE')!!}
                                    {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                @else
                        <h1>No data found</h1>
                @endif    
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
function ConfirmDelete() {
    var x = confirm("Are you sure you want to delete?");
    if (x){
        return true;
    } else {
        return false;
    }        
}
</script>
@endsection
