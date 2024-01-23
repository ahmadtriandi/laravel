@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5">

        <main class="form-registration w-100 m-auto">
          <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
            <form action="/register" method="post">
                @csrf  
          
              <div class="form-floating">
                <input type="name" class="form-control rounded-top @error('name') is-invalid                 
                @enderror" id="floatingInput" name="name" placeholder="name" value="{{ old('name') }}" required>
                <label for="floatingInput">Name</label>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('name')
                  <div>{{ $message }} </div>
              @enderror
                </div>                
              </div>
              <div class="form-floating">
                <input type="username" class="form-control @error('username') is-invalid
                  
                @enderror" id="floatingInput" name="username" placeholder="username" value="{{ old('username') }}" required>
                <label for="floatingInput">Username</label>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('username')
                  <div>{{ $message }} </div>
              @enderror
                </div>  
              </div>
              <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid
                  
                @enderror" id="floatingInput" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                <label for="floatingInput">Email address</label>
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('email')
                  <div>{{ $message }} </div>
              @enderror
                </div>  
              </div>
              <div class="form-floating">
                <input type="password" class="form-control @error('password') is-invalid
                  
                @enderror rounded-bottom" id="floatingPassword" name="password" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
                
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                  @error('password')
                  <div>{{ $message }} </div>
              @enderror
                </div>  
              </div>
          
              
              <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
             
            </form>

            <small class="d-block text-center mt-3">Already Registered? <a href="/login"> Sign in Now</a></small>
          </main>
    </div>
</div>
@endsection       