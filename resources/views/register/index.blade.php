@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

        <main class="form-registration w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form>
              
          
              <div class="form-floating">
                <input type="name" class="form-control rounded-top" id="floatingInput" name="name" placeholder="name">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating">
                <input type="username" class="form-control" id="floatingInput" name="username" placeholder="username">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control rounded-bottom" id="floatingPassword" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
          
              
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
             
            </form>

            <small class="d-block text-center mt-3">Already Registered? <a href="/login"> Sign in Now</a></small>
          </main>
    </div>
</div>
@endsection       