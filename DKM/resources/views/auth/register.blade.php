{{-- @extends('layouts.app') --}}
<link rel="stylesheet" href="{{asset('Backend/css/register.css')}}">
<link rel="stylesheet" href="{{asset('Backend/font/font-awesome-4.7.0/css/font-awesome.css')}}">
{{-- <link rel="stylesheet" href="{{asset('Backend/css/material.min.css')}}"> --}}
{{-- @section('content') --}}
<style>
    .rlink {
        text-decoration: none;
        color: rgb(90, 90, 90);
    }

</style>
<div class="limiter">
    <div class="container-login">
        <div class="wrap-login">
            <form class="login-form validate-form" action="{{ route('register') }}" method="POST">
                @csrf
                <span class="login-form-title">
                    <a class="rlink" href="{{ route('register') }}">{{ __('Register Form') }}</a>
                </span>

                <div class="wrap-input validate-input" data-validate="Enter Your Name">
                    <input id="name" type="text" class="form-control input @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    <span class="focus-input" data-placeholder="Name"></span>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="wrap-input validate-input" data-validate="Valid email is: a@email.c">
                    <input id="email" type="email" class="form-control input @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    <span class="focus-input" data-placeholder="E-Mail Address"></span>
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="wrap-input validate-input" data-validate="Enter password">
                    <span class="btn-show-pass">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </span>
                    <input id="password" type="password"
                        class="form-control input @error('password') is-invalid @enderror" name="password" required
                        autocomplete="new-password">
                    <span class="focus-input" data-placeholder="Password"></span>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <button class="login-form-btn"> Register Now </button>
                    </div>
                </div>
                <div class="text-center">
                    @if (Route::has('password.request'))
                <a class="btn btn-link txt2" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}</a>
                @endif
                <br>
                    <span class="txt1">
                        Don't have an account?
                    </span>            
                    @if (Route::has('register'))
            <a class="nav-link txt2" href="{{ route('login') }}">{{ __('Login now') }}</a>
            @endif
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('Backend/jquery/jquery-3.2.1.min.js')}}"></script>
<script>
    /*==================================================================
    [ Focus input ]*/
    $('.input').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            } else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
        [ Validate ]*/

    var input = $('.validate-input .input');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validate(input) {
        if ($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if ($(input).val().trim().match(
                    /^([a-zA-Z0.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-z9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
                ) == null) {
                return false;
            }
        } else {
            if ($(input).val().trim() == '') {
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }





    /*==================================================================
        [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function () {
        if (showPass == 0) {
            $(this).next('input').attr('type', 'text');
            $(this).find('i').removeClass('zmdi-eye');
            $(this).find('i').addClass('zmdi-eye-off');
            showPass = 1;
        } else {
            $(this).next('input').attr('type', 'password');
            $(this).find('i').addClass('zmdi-eye');
            $(this).find('i').removeClass('zmdi-eye-off');
            showPass = 0;
        }
    });

</script>
{{-- @endsection --}}
