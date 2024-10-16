@extends('main')
@section('content')
   <div class="container">
    <div class="row">
        <div class=" m-auto">
            <form action="/register" method="POST">
                @csrf
                <div class="row mb-3">
                  <label for="inputName3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-4">
                    <input type="name" name="name" class="form-control" id="inputName3">
                  </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-4">
                      <input type="email" name="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>
            
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
   </div>
@endsection
