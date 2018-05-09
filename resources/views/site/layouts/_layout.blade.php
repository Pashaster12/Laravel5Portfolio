<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    
    @include('site.layouts.styles')

</head>
<body>
    
    <div id="wrapper">
        @include('site.layouts.header')
        
        @if(Request::path() != '/')
            @include('site.layouts.breadcrumbs')
        @endif
        
        @yield('content')

        @include('site.layouts.footer')
    </div>
    
    <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
    @include('site.layouts.scripts')
    
</body>
</html>