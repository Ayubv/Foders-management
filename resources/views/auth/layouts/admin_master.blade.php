
@include('header')
    <body class="sb-nav-fixed">
        @include('navbar')
        {{-- navbar --}}

        <div id="layoutSidenav">
            @include('leftsidenav')
            {{-- leftsidenav --}}
            <div id="layoutSidenav_content">
                <main>
                   
                       @yield('content')


                    
                </main>


                
              @yield('footer')
            </div>
        </div>
       @include('script')
     

