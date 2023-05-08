<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>@yield('pageTitle', 'DeskApp')</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    @include('layouts.partials.stylesheet')

    @stack('css')
</head>

<body>
    @include('layouts.partials.loader')
    @include('layouts.partials.header')
    @include('layouts.partials.right-sidebar')
    @include('layouts.partials.left-sidebar')

    <div class="main-container">

        @include('layouts.partials.page-header')

        @yield('content')
    </div>

    @include('layouts.partials.footer')

    @include('layouts.partials.scripts')

    @stack('js')
</body>

</html>
