@extends('base')

@section('content')

@section('title', 'Register')
<body>
    <div class="container col-md-4 offset-md-4 mt-5">
        <div class="card shadow-lg border border-light rounded mt-5">
            <div class="card-header bg-danger opacity-75">
                <h3 class='text-center mt-3 text-black'>Register</h3>
            </div>
            <div class="card-body bg-warning bg-opacity-50">
                <form action="{{ '/register' }}" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="name" name="name" id="name" placeholder="Name" class="form-control">
                        </div>
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                        </div>
                            @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                        </div>
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3">
                            <input type="password" name="password_confirmation" placeholder="Confirm Password" id="password_confirmation" class="form-control">
                        </div>
                        @error('password_confirmation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group mb-3 mt-1 col-sm-10 offset-sm-1">
                        <div class="input-group mb-3 justify-content-center">
                            <span>Male: <input type="radio" name="gender" id="male" placeholder="" value="male"></span>
                            <span style="margin-left: 5px">Female: <input type="radio" name="gender" id="female" placeholder="" value="female"></span>
                        </div>
                        @error('gender')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <a href="{{ '/' }}" style="color: blue">Already have an account.</a>
                        </div>
                        <button class="btn btn-primary px-5">Register</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</body>
@endsection

<style>
    #basic-addon1 {
    width: 40px;
    text-align: center;
    background-color: black;
}
body{
    background-image: url("images/bg.png");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100%;
}
</style>
