<body>
    @include('partials.navbar')
    <section class="bg">
        <div class="container mt-5 pt-5">
            @yield('content')
        </div>

    </section>
    @include('partials.footer')
</body>