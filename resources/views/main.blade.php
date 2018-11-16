<!doctype html>
<html lang="en">
    <head>
        @include('partials._head')
    </head>

    <body>
    <header>
        <div class="header">
            <div class="header-title"><p class="main-title">The Food Blog</p><br>
            <p class="sub-title">~ For the best recipes on the web! ~</p></div>
            
        </div>
    </header>
        @include('partials._nav')

        <div class="container">
            @include('partials._messages')
            @yield('content')            
        </div> 
        
        @include('partials._footer')
        @include('partials._javascript')
        @yield('scripts')
    </body>
    
</html>