<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('layout.style')
    <title>CRUD KTP-KK</title>
</head>
<body>
    @include('layout.partials.navbar')
    <div class="container mt-2">
        @include('layout.partials.alert')
        @yield('content')
    </div>
    @include('layout.script')
</body>

</html>
