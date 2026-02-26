<!DOCTYPE html>
<html>
<head>
    <title>Therapy Center Admin</title>
    <link href="{{asset('css/adminstyle.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet"
     href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body style="margin:0;">

@include('admin.layouts.sidebar')
@include('admin.layouts.navbar')

<div style="
    margin-left:240px;
    margin-top:60px;
    padding:25px;
    background:#f9f9fb;
    min-height:100vh;
">
    @yield('content')
</div>

{{-- ✅ VERY IMPORTANT --}}
@yield('scripts')

</body>
</html>
