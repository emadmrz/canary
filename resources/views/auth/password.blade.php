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
                {!! Form::open(['url'=>'password/email', 'method'=>'post', 'id'=>'password_form']) !!}
                <div class="fields">
                    <p>
                        برای بازیابی کلمه عبور خود، آدرس ایمیلی که با آن در سایت عضو شده اید را در بخش زیر وارد نمایید.
                    </p>
                    <div class="form-group">
                        {!! Form::label('email', 'آدرس ایمیل : ') !!}
                        {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>"Email Address..."]) !!}
                    </div>
                    {!! Form::submit('ارسال ایمیل برای تغییر کلمه عبور', ['class'=>'btn-login']) !!}
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