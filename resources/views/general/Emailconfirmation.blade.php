@extends('general.layout')
@section('content')
    <h3 style="direction: rtl; font-family:Yekan; font-size: 20px; "><span>تایید آدرس ایمیل</span></h3>

    @if( !$user->confirmed )

        <p style="direction: rtl; font-family:Yekan; font-size: 14px; ">
    کاربر گرامی در حال حاضر آدرس ایمیل شما تایید نشده است. شما برای مدت محدودی می توانید با این شرایط در سایت فعالیت داشته باشد.
            ما پیشنهاد می کنیم تا تنها با چند کلیک آدرس ایمیل خود را فعال کنید. تنها کافی است به آدرس ایمیلی که با آن در سایت عضو شده اید مراجعه کرده
            و بر روی لینک فعال سازی آدرس ایمیل که از طرف ما برای شما ارسال شده است کلیک نمایید.
            در صورتی که که قصد دریافت مجدد ایمیل فعال سازی را دارید بر روی دکمع زیر کلیک نمایید.
        </p>
        {!! Form::open(['url'=>'auth/email', 'method'=>'post']) !!}
            {!! Form::submit('ارسال مجدد ایمیل فعال سازی', ['class'=>'btn btn-violet']) !!}
        {!! Form::close() !!}

    @else

        <p>
            کاربر گرامی با تشکر از شما ، آدرس ایمیل شما قبلاً تایید شده است و شما می توانید به فعالیت خود در سایت ادامه دهید.
            <div>
                <a href="{{ route('home.home') }}" class="btn btn-default">خانه</a>
                <a href="{{ route('profile.me') }}" class="btn btn-default">پروفایل</a>
            </div>
        </p>


    @endif

@endsection