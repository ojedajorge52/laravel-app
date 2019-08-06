
  <!DOCTYPE html>
  <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!--Import materialize.css-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link  rel="icon"   href="{{ URL::asset('img/laravel-logo.png') }}" type="image/png"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <nav class="blue grey darken-3">
                <div class="nav-wrapper">
                    <a href="." class="brand-logo">Laravel</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="./usuarios"><i class="material-icons left">format_list_bulleted</i>  Usuarios</a></li>
                        <li><a href="./nuevo"><i class="material-icons left">add</i> Nuevo</a></li>
                    </ul>
                </div>
            </nav>

    @yield('content')
    <style>
        a.brand-logo{
            padding-left:15px;
        }
    </style>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </body>
  </html>
        