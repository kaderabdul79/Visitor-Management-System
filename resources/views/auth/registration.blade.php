@extends('dashboard')
@section('content')

<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">Register User</div>
                    <div class="card-body">
                        <form action="" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="name" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="email" class="form-control" id="">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="password" class="form-control" id="">
                            </div>
                            <div class="d-grid gap-2">
                              <button type="submit" name="" id="" class="btn btn-dark">Sign Up</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection