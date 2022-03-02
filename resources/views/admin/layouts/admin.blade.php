<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shop điện thoại</title>
    @include('admin.includes.base-css')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    @include('admin.includes.base-header')
    @include('admin.includes.base-sidebar')
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
            @yield('content')
            </div>
        </section>
    </div>
    @include('admin.includes.base-footer')
</div>
@include('admin.includes.base-js')
</body>
</html>
