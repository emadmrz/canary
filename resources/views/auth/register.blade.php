@extends('auth.layout')

@section('content')
    <div class="header-login">
        <div class="container">

        </div>
    </div>

    <div class="login-page">
        <div class="container">

            <div class="pull-right login-banner">

            </div>

            <div class="sign-in left-form">

                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                @include('flash::message')

                <h3 class="title">عضویت رایگان<a href="{{ url('auth/login') }}" class="pull-left forget-pass">ورود به حساب کاربری</a></h3>
                {!! Form::open(['url'=>'auth/register', 'method'=>'post', 'id'=>'register_form']) !!}
                    <div class="fields">
                        <div class="form-group">
                            {!! Form::label('email', 'آدرس ایمیل : ') !!}
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>"Email Address..."]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('first_name', 'نام و نام خانوادگی : ') !!}
                            <div class="center-block">
                                {!! Form::text('first_name', null, ['class'=>'form-control inline-half rtl', 'placeholder'=>"نام"]) !!}&ensp;
                                {!! Form::text('last_name', null, ['class'=>'form-control inline-half rtl', 'placeholder'=>"نام خانوادگی"]) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'کلمه عبور : ') !!}
                            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>"Password"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password_confirmation', 'تکرار کلمه عبور : ') !!}
                            {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>"password confirmation"]) !!}
                        </div>
                        {!! Form::submit('عضویت در سایت', ['class'=>'btn-login']) !!}
                    </div>
                {!! Form::close() !!}
                <p></p>
                <div class="join-login">
                    <a href="{{ url('auth/login') }}">ورود به حساب کاربری </a>
                    <a href="{{ url('about/agreements') }}" class="pull-left">ضوابط و قوانین سایت</a>
                </div>
            </div>

        </div>
    </div>
@endsection