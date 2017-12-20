<!DOCTYPE html>
<html>
    <head>
        <title>Laravel-Ecommerce @yield('title')</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap.min.css">

        {{-- Fontawesome cdn --}}
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    </head>

    <body>
    	<div class="navbar navbar-inverse raw">
    		<div class="navabar-inner">
    			<div class="container">
    				<a href="" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</a>
    				<a href="/" class="brand" style="margin-left: 20px;"> Awesome Bookstore </a>

    				<div class="navbar navbar-collapse">
    					<ul class="nav">
                            <li class="divider-vertical"></li>
                            <li><a href="/"><i class="icon-home icon-white"></i> Book List</a></li>
    					</ul>

                        <div class="pull-right">
                            <ul class="nav pull-right">
                                {{-- Check  --}}
                                @if( !Auth::check())
                                    <ul class="nav pull-right">
                                        <li class="divider-vertical"></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Sign In <strong class="caret"></strong></a>
                                            <div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
                                                <p>Please Login!</p>
                                                <form action="" method="POST" role="form">
                                                    <legend>Form title</legend>

                                                    <div class="form-group">
                                                        <label for="">label</label>
                                                        <input type="text" class="form-control" id="" placeholder="Input field">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                @else
                                    <li><a href="/cart"><i class="fa fa-shopping-cart"></i> Your Cart</a></li>
                                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"> Welcome, {{ Auth::user()->name }} <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="/user/orders"><i class="fa fa-envelope"></i> My Orders </a></li>
                                            <li class="divider"></li>
                                            <li><a href="/user/logout"><i class="fa fa-sign-out"> Logout </i></a></li>
                                        </ul>
                                    </li>

                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

    </body>

    @include('partials._defScripts')

    @yield('extra-scripts')

</html>