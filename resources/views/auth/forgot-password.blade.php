@extends('custom-layouts.master')
@section('title', 'Forgot Password')
@push('css')
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Forgot Password</h4>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">We will send a link to reset your password</p>
                        <form method="POST" action="{{ route('password.email') }}" class="needs-validation" novalidate="">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="email">Email</label>
                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Email Password Reset Link
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="mb-4 text-muted text-center">
                    Have Password? <a href="{{ route('login') }}">Login</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('modal')
@endsection

@push('js')
@endpush

