
  <!DOCTYPE html>
  <html>
    <head>
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
        <link  rel="icon"   href="{{ URL::asset('img/laravel-logo.png') }}" type="image/png"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
        <div class="navbar-fixed">
			<nav class="grey darken-3" >
                <div class="nav-wrapper">
					<a href="." class="brand-logo">Something</a>
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="./usuarios"><i class="material-icons left">format_list_bulleted</i>  Usuarios</a></li>
                        <li><a href="./nuevo"><i class="material-icons left">add</i> Nuevo</a></li>
					</ul>
					
				</div>
			</nav>
		</div>
		<ul class="side-nav" id="mobile-demo">
				<li><a href="./">LARAVEL</a></li>
				<li class="divider"></li>
				<li><a href="./usuarios"><i class="material-icons">format_list_bulleted</i> Usuarios</a></li>
				<li><a href="./nuevo"><i class="material-icons">add</i> Nuevo</a></li>
			  </ul>

    <div class="container">
      @yield('content')
    </div>
    <style>
        a.brand-logo{
            padding-left:15px;
        }
		html{
			font-family: 'Roboto', sans-serif;
		}
    </style>

      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
	  <script>
		  $(document).ready(function(){
			$(".button-collapse").sideNav();
		  });	
	  </script>
    </body>
  </html>
        