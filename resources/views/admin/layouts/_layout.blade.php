<!DOCTYPE html>
<html lang="en">

@include('admin.layouts.htmlhead')

<body class="fix-header fix-sidebar">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    
    <div id="main-wrapper">        
        @include('admin.layouts.header')        
        @include('admin.layouts.sidebar')
        
        <div class="page-wrapper">            
            @yield('breadcrumbs')            
            @yield('content')
            
            @include('admin.layouts.footer')
        </div>
    </div>
    
    @include('admin.layouts.scripts')

</body>
</html>