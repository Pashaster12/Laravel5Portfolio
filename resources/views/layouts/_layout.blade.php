<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    
    @include('layouts.styles')

</head>
<body>
    
    <div id="wrapper">
        @include('layouts/header')
        
        @if(Request::path() != '/')
            @include('layouts/breadcrumbs')
        @endif
        
        @yield('content')

        @include('layouts/footer')
    </div>
    
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    @include('layouts/scripts')
    
</body>
</html>