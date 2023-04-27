@section('login')
{{View:: make('title')}}


<body>
    <link href="bootstrap\sign-in\signin.css" rel="stylesheet" />
    <div class="container">
        @if(session()->has('user'))
        {{view::make('user')}}
     @else
        @yield('login')
     @endif
    </div>

</body>

{{View:: make('footer')}}
