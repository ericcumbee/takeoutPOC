
<!doctype html>
<html>
    <head>
        @include('layouts.main.header')
    </head>
    <body>
        <div class="container-fluid">
             @include('layouts.main.navigation')
             @yield('content')
        </div>

    </body>
</html>