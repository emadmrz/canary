<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>profile</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/initial.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
</head>
<body>
<header>
    @include('profile.partials.nav')
    @include('profile.partials.cover')
</header>
<main>
    <div class="container">
        <div class="row">

            <div class="col-md-4 item pull-right">
                <div class="timeline-block">
                    <div class="panel panel-default share clearfix-xs">
                        <div class="panel-heading panel-heading-gray title">
                            چه خبر ؟
                        </div>
                        <div class="panel-body">
                            <textarea name="status" class="form-control share-text" rows="3"
                                      placeholder="نگاره ای ثبت نمایید ..."></textarea>
                        </div>
                        <div class="panel-footer share-buttons">
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                            <a href="#"><i class="fa fa-photo"></i></a>
                            <a href="#"><i class="fa fa-video-camera"></i></a>
                            <button type="submit" class="btn btn-teal btn-xs pull-right display-none" href="#">ارسال
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 item pull-right">
                <div class="timeline-block">
                    <div class="panel panel-default share clearfix-xs">
                        <div class="panel-heading panel-heading-gray title">
                            چه خبر ؟
                        </div>
                        <div class="panel-body">
                            body
                        </div>
                        <div class="panel-footer">
                            footer
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</main>
<script src="{{ asset('js/jquery.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
@yield('script')
</body>
</html>