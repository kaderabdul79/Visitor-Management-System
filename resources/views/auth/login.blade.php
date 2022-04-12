@extends('dashboard')
@section('content')

<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header text-center">Login User</div>
                    <div class="card-body">
                        <form action="{{ route('login.custom') }}" method="POST">
                            @csrf
                            
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
                              <button type="submit" name="" id="" class="btn btn-dark">Login</button>
                            </div>

                        </form>
                        <br />
                        <div class="text-center">
                            <a href="{{ route('register') }}">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection