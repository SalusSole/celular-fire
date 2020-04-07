<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Home | Celular Fire</title>
    
    <script src="index.js" defer></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#F0DB4F">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    
    <link rel="shortcut icon" type="image/png" href="./images/favicon.png">
    <link rel="apple-touch-icon" href="./images/favicon.png">
    <link rel="apple-touch-startup-image" href="./images/favicon.png">
    <link rel="manifest" href="./manifest.json">

    <link href="styles/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="styles/responsive.css" rel="stylesheet">
	<link href="styles/css.css" rel="stylesheet">
    
</head>

<body>
<header id="header">
<div class="header-middle"><!--header-middle-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo pull-left">
                    <a href="index.html"><img src="images/home/logo.png" alt="" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="shop-menu pull-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"><i class="fa fa-user"></i> Cuenta</a></li>
                        <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Carrito</a></li>
                        <li><a href="login.html"><i class="fa fa-lock"></i> Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
	
<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="mainmenu pull-left">
                    <ul class="nav navbar-nav collapse navbar-collapse">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="#">Productos</a></li>
                        <li><a href="#">Carrito</a></li>
                        <li><a href="#">LogIn</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="search_box pull-right">
                    <input type="text" placeholder="Search"/>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Categorías</h2>
                    <div class="panel-group category-products" id="accordian">        
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Displays</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Touch</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Flexores</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Baterias</a></h4>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a href="#">Chasis</a></h4>
                            </div>
                        </div>
                    </div>

                    <div class="brands_products">
                        <h2>Marcas</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Samsung</a></li>
                                <li><a href="#">Motorola</a></li>
                                <li><a href="#">Apple</a></li>
                                <li><a href="#">Huawei</a></li>
                                <li><a href="#">Xiaomi</a></li>
                                <li><a href="#">LG</a></li>
                                <li><a href="#">Lanix</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
				
            <div class="col-sm-9 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Lo Más Vendido</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/a.png" alt="" />
                                    <h2>$000.00</h2>
                                    <p>DISPLAY LG X230 K4 2017 CON TOUCH NEGRO</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/b.png" alt="" />
                                    <h2>$000.0</h2>
                                    <p>DISPLAY MOTOROLA XT925 RAZR HD CON TOUCH NEGRO</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/c.jpg" alt="" />
                                    <h2>$000.0</h2>
                                    <p>DISPLAY SONY XZ CON TOUCH NEGRO</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>	
            </div>
        </div>
    </div>
</section>
	
	<footer id="footer">
		
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Celular Fire</p>
					<p class="pull-right">Designed by Salus Sole</p>
				</div>
			</div>
		</div>
		
	</footer>
	

	<script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>