<!doctype html>
<html lang="en">
  <head>
    <title>App Crud</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{mix('/css/app.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{mix('/css/theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css')}}">

  </head>
  <body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item @if($lien=='post') active @endif">
                <a class="nav-link" href="{{ route('posts.index')}}">Posts</a>
                </li>
                <li class="nav-item @if($lien=='category') active @endif">
                    <a class="nav-link" href="{{ route('categories.index')}}">Categories</a>
                </li>
                <li class="nav-item @if($lien=='user') active @endif">
                    <a class="nav-link" href="{{route('users.index')}}">Utilisateurs</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">

            <div class="card mt-3" style="width: 100%">
                <div class="card-body">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="{{mix('/js/app.js')}}"></script>
    <script src="{{ asset('js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/toastr.min.js')}}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    @if(session('success'))
    <script>
      toastr.success('{{ session('success') }}')
    </script>
    @endif

    @if(session('info'))
    <script>
      toastr.info('{{ session('info') }}')
    </script>
    @endif

    @if(session('warning'))
    <script>
      toastr.error('{{ session('warning') }}')
    </script>
    @endif

    @if(session('danger'))
    <script>
      toastr.danger('{{ session('danger') }}')
    </script>
    @endif


  </body>
</html>
