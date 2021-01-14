<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script><!--jqurey-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script><!--jqurey-->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script><!--Font awsome-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"><!--bootstrap version4-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet"><!--bootstrap version3-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> <!--bootstrap version5-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> <!-- text animate-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> <!-- animation on scroll -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/2.2.1/mdb.min.css"rel="stylesheet"/> <!-- MDB-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script> <!--Background carousel-->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> <!--Background carousel-->

    <link rel=icon href=image/logo.png sizes="90x90" type="image/png"> <!--favicon-->

    <title>@yield("title","bone")</title>
</head>

    @include('layout.style_css')

<style>
@yield('style_css')
</style>

<body>
    @include('layout.navbar')
    @include('layout.background_carousel')
{{--    <form action="{{ url(request()->url()) }}" method="get">--}}
{{--        <div class="input-group text-center">--}}
{{--            <div class="form-outline">--}}
{{--                <input type="search" id="form1" class="form-control" />--}}
{{--                <label class="form-label" for="form1">Search</label>--}}
{{--            </div>--}}
{{--            <select class="form-control form-control-lg" name="country">--}}
{{--                <option value="">Country</option>--}}
{{--                <option value="Thailand">Thailand</option>--}}
{{--                <option value="Cambodia">Cambodia</option>--}}
{{--                <option value="Cannda">Cannda</option>--}}
{{--                <option value="America">America</option>--}}
{{--            </select>--}}
{{--            <select class="form-control form-control-lg" name="degree">--}}
{{--                <option value="">Scholarship</option>--}}
{{--                <option value="master">Master</option>--}}
{{--                <option value="bachelor">Bachelor</option>--}}
{{--                <option value="phd">Phd</option>--}}
{{--                <option value="highschool">Highschool</option>--}}
{{--            </select>--}}
{{--            <button type="sumbit" class="btn btn-primary">--}}
{{--                <i class="fas fa-search"></i>--}}
{{--            </button>--}}

{{--        </div>--}}
{{--    </form>--}}

    <div>
        @yield('allcontents');
    </div>
    <div>
        @yield('post1');
    </div>

    <div>
        @yield('post2');
    </div>

    <div>
        @yield('post3');
    </div>

    <div>
        @yield('post');
    </div>



    @include('layout.footer')
</body>
</html>
