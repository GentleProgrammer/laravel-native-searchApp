@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
            <h2>Search for a user</h2>
         <form action="{{ route('search') }}" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search User"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>
<br>
<p></p>
 @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>User details</h2>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr>
                         <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>

                      
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>
    </div>
</div>
@endsection