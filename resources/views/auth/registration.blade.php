@extends('dashboard')
@section('content')

<main class="signup-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">Register User</div>
                    <div class="card-body">
                        <form action="{{ route('registration.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" name="name" placeholder="name" class="form-control" id="">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="email" name="email" placeholder="email" class="form-control" id="">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" name="password" placeholder="password" class="form-control" id="">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
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