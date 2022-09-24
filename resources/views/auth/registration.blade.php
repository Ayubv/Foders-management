@extends('auth.layouts.app')

@section('content')
<main class="signup-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <h3 class="card-header text-center">Register User</h3>
                    <div class="card-body">

                        <form action="{{ route('register.custom') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="Name" id="name" class="form-control" name="name"
                                    required autofocus>
                                @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('role_type') }}</span>
                                @endif
                            </div>
                             <div class="form-group mb-3">
                                <input type="text" placeholder="role_type" id="role_type" class="form-control" name="role_type"
                                    required autofocus>
                                @if ($errors->has('role_type'))
                                <span class="text-danger">{{ $errors->first('role_type') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="mobile" id="mobile" class="form-control" name="mobile"
                                    required autofocus>
                                @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <input type="text" placeholder="Email" id="email_address" class="form-control"
                                    name="email" required autofocus>
                                @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="Password" id="password" class="form-control"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                         
                            <div class="form-group mb-3">
                                <input type="date" placeholder="tarik" id="tarik" class="form-control"
                                    name="tarik" required>
                                @if ($errors->has('tarik'))
                                <span class="text-danger">{{ $errors->first('tarik') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="division" id="division" class="form-control"
                                    name="division" required>
                                @if ($errors->has('division'))
                                <span class="text-danger">{{ $errors->first('division') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" placeholder="district" id="district" class="form-control"
                                    name="district" required>
                                @if ($errors->has('district'))
                                <span class="text-danger">{{ $errors->first('district') }}</span>
                                @endif
                            </div>

                              <div class="form-group mb-3">
                                <input type="text" placeholder="upazela" id="upazela" class="form-control"
                                    name="upazela" required>
                                @if ($errors->has('upazela'))
                                <span class="text-danger">{{ $errors->first('upazela') }}</span>
                                @endif
                            </div>
                          
                         
                        
                            <div class="form-group mb-3">
                                <input type="text" placeholder="area_point" id="area_point" class="form-control"
                                    name="area_point" required>
                                @if ($errors->has('area_point'))
                                <span class="text-danger">{{ $errors->first('area_point') }}</span>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Remember Me</label>
                                </div>
                            </div>

                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-success btn-block">Submit</button>
                                <a class="text-center d-block" href="{{url('/login')}}">Already Registered? <strong>Login Here</strong></a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection