<!DOCTYPE html>
<html lang="en">
@include('UserSide.partials.header')

<body>
    <div class="container-scroller">
     

    <div id="layout-wrapper">
        <!-- Sidebar -->
        <div id="sidebar" class="sidebar">
            @include('UserSide.partials.sidebar')
        </div>

        <!-- Main Content -->
        <div id="content-wrapper" class="main-content">
            @yield('content')
        </div>
    </div>

    <!-- Include the required JS -->
    @include('UserSide.partials.scripts') 

 </div>
</body>

</html>
