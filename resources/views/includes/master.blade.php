<!DOCTYPE html>
<html lang="en">
@include('includes.header')

<body>
    @include('includes.navbar')
    <main>
        @yield('content')
    </main>
    @include('includes.footer')
</body>

</html>
