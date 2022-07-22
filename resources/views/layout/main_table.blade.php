@include('layout.head')
@include('layout.head_table')

<body>
    @include('layout.header')

    @include('layout.sidebar')
    <div class="mobile-menu-overlay"></div>

    @yield('content')

    <!-- js -->
    @include('layout.js_table')
</body>

</html>