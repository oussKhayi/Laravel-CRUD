@extends('layouts.header')
@section('title') CRUD-create @endsection

@section('body')    
  <main class="container d-flex justify-content-around my-5">
    <div class="col-8 p-5 shadow-sm mt-2 bg-light rounded"> 
      <h2 class="mb-4">Create a new user</h2>
      <form action="/post-user" method="post">
        @csrf
        <di class="mb-3 row">
          <label for="inputName" class="col-4 col-form-label">Full Name</label>
              <div class="col-8">
                  <input type="text" class="form-control" name="fullname" id="inputName" placeholder="John dow">
              </div>
          </di  v>
            <div class="mb-3 row">
              <label for="inputName" class="col-4 col-form-label">Email</label>
              <div class="col-8">
                <input type="email" class="form-control" name="email" id="inputName" placeholder="example@email.com">
              </div>
            </div>
            <div class="mb-3 row">
              <label for="inputName" class="col-4 col-form-label">Age</label>
              <div class="col-8">
                <input type="number" class="form-control" name="age" id="inputName" placeholder="23">
              </div>
          </div>
          
          <div class="mb-3 row">
            <div class="offset-sm-4 col-sm-8">
              <button type="submit" class="btn btn-primary form-control">Submit</button>
            </div>
          </div>
      </form>
  </div>
  </main>
@endsection
