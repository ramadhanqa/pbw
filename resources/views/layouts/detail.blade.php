<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('includes.style')

</head>
<body>

    @include('includes.navbar')

  @yield('content')

{{-- About --}}

    @include('includes.detail_about')



<!-- Footer -->

    @include('includes.footer')

    @include('includes.script')

</body>
</html>
