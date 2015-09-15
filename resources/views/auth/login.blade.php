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

            <div class="sign-in">

                @if($errors->any())
                    <ul class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                @include('flash::message')

                {!! Form::open(['url'=>'auth/login', 'method'=>'post', 'id'=>'login_form']) !!}
                    <div class="fields">
                        <div class="form-group">
                            {!! Form::label('email', 'آدرس ایمیل : ') !!}
                            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>"Email Address..."]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('password', 'کلمه عبور : ') !!}<a href="{{url('password/email')}}" class="pull-left forget-pass">فراموشی کلمه عبور</a>
                            {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}
                        </div>
                        <div class="checkbox checkbox-warning">
                            <input id="checkbox5" type="checkbox" checked="">
                            {!! Form::checkbox('remember', 1, false, ['id'=>'checkbox5']) !!}
                            {!! Form::label('checkbox5', 'من را به خاطر بسپار') !!}
                            </label>
                        </div>
                        {!! Form::submit('ورود به حساب کاربری', ['class'=>'btn-login']) !!}
                    </div>
                {!! Form::close() !!}
                <div class="join-login">
                    <a href="{{ url('auth/register') }}">عضویت رایگان </a>
                    <a href="{{ url('about/agreements') }}" class="pull-left">ضوابط و قوانین سایت</a>
                </div>
            </div>

        </div>
    </div>

@endsection