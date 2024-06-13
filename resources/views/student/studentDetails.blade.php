@extends('student.index')

@section('content')
<div class="container">
<div class="col-8 mx-auto shadow p-3">
    <div class="shadow p-4 m-4">
        <h4 class="text-center fw-bold text-secondary">Note app </h4>
        <form action="/noteshowing" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="First Name">
                <label for="floatingInput">First Name</label>
              </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Last Name">
                <label for="floatingInput">Last Name</label>
              </div>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Phone Number</label>
              </div>

              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
            <button type="submit" class="btn btn-success w-100">Submit</button>
        </form>
    </div>
</div>
</div>
@endsection