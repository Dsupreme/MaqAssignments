<!DOCTYPE html>
<html>
	<head>

	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!--CSS Files-->
            <link rel="stylesheet" type="text/css" href="{{ asset('css/materialize.css') }}" />
            @yield('head_css')

        <!--JS Files-->
            <script type="text/javascript" src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
            <script type="text/javascript" src="{{asset('js/materialize.min.js') }}"></script>
            @yield('head_js')

            <!--[if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        	<![endif]-->
    </head>
    <body>
    @yield('logo')
        <nav>
            <div class="nav-wrapper nav-color">
                <a class="brand-logo logo" style="padding-left: 1.5em"></a>
                @yield('nav-content')
            </div>
        </nav>
        <div>
            @yield('content')
        </div>
        <script>
        $(document).ready(function() {
            $('#nav-mobile li a').click(function(){
                        $('html, body').animate({
                            scrollTop: $( $.attr(this, 'href') ).offset().top
                        }, 900);
                        return false;
                    });
        })

        </script>
    </body>
</html>