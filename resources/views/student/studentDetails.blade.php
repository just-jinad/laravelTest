@extends('student.index')

@section('content')
<div class="container">
<div class="col-8 mx-auto shadow p-3">
    <div class="shadow p-4 m-4">
        <h4 class="text-center fw-bold text-secondary">Student Contact page </h4>
        <form action="/student" method="POST" >
            @csrf
            <div class="form-floating mb-3">
                <input name="firstName" type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">Full Name</label>
              </div>
           
            <div class="form-floating mb-3">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input name="phonenumber" type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone Number</label>
              </div>

              <div class="form-floating mb-3">
                <input name="address" type="text" class="form-control" id="floatingInput" placeholder="opp ajiga filling station">
                <label for="floatingInput">Address</label>
              </div>

              <div class="form-floating">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            <button type="submit" class="btn btn-success mt-3 w-100">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection