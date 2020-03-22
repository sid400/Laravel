
<!DOCTYPE html>
<html lang="en">
    <head>
        @include('layouts.parts.head')
        <title>@section('title')"@show</title>
    </head>
    <body>
        <header>
            @include('layouts.parts.logo')
            @include('layouts.parts.navbar')
        </header>
            @yield('content')
        <footer>
            @include('layouts.parts.footer')
        </footer>
    </body>
</html>