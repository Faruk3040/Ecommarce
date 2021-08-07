<!DOCTYPE html>
<html lang="en">

<head>
    @include('asset.css.css')
</head>

<body>

    @include('navigation.header')
    <!-- Feadtued Categories -->
    <div class="container-fluid">

        @yield('content')

    </div>
    <!-- Footer -->
    @include('navigation.footer')

    <!-- javascript -->

    @include('asset.js.js')

</body>

</html>
