@extends('student.index')

@section('content')
<div class="container">
<div class="col-8 mx-auto shadow p-3">
    <h4 class="text-center fw-bold text-secondary">Contact Profile </h4>
    @if(Auth::user())
    <div class="shadow p-4 m-4">
        @foreach (  $personalDetails as $item)
        <strong>Title:</strong>  <div class="col-3 fs-5">{{$item->full_name}}</div>
        <strong>Email:</strong> <span>{{$item->email}}</span><br>
        <strong>Phone Number</strong> <span>{{$item->phonenumber}}</span><br>

        
            <button class="btn btn-success">View Contact</button>
      
        <button class="btn btn-warning">Edit Contact</button>
        <button class="btn btn-danger">Delete Contact</button>
        <hr>
        @endforeach
    </div>
    @else
    <div>You are not currntly signed in</div>
    <a href="/login">Login here</a>
    @endif
</div>
</div>
@endsection