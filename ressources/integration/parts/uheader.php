<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>outil de role play</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link rel="stylesheet" href="css/jquery-ui-bootstrap/jquery-ui-1.10.3.theme.min.css">
        <link rel="stylesheet" href="css/jquery-ui-bootstrap/jquery-ui-1.10.3.custom.min.css">
        <link rel="stylesheet" href="css/jquery-ui-bootstrap/jquery-ui-1.10.3.ie.min.css">
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
        <link href="css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
        <link href="css/roleplay-tools.css" rel="stylesheet" type="text/css" />
        <link href="css/docs.min.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    </head>
    <body class="skin-black fixed">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
            <a href="#" class="logo">
                Le titre du site encore indéfini
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
            </a>
        </header>
        <div class="wrapper container-fluid">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class=" active treeview">
                            <a href="#">
                                <img src="img/icons/booklet.png"/> <span>Livre du joueur</span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="book.php#context"><img src="img/icons/map.png"/> Le context</a></li>
                                <li><a href="book.php#rules"><img src="img/icons/pin.png"/> Les règles</a></li>
                                <li><a href="book.php#univers"><img src="img/icons/books.png"/> L'univers</a></li>
                                <li><a href="book.php#faq"><img src="img/icons/crossroads.png"/> FAQ</a></li>
                            </ul>
                        </li>
                        <li class="treeview" id="connexion">
                            <a href="#">
                                <img src="img/icons/power.png"/> Se connecter
                            </a>
                            <form role="form" action="index.php">
                              <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                              </div>
                              <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-info">Connexion</button>
                                <span class="help-block"><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm"> Mot de passe oublié ?</a></span>
                            </form>
                        </li>
                        <li id="suscribe">
                            <a href="#" data-toggle="modal" data-target="#modal-inscription">
                                <img src="img/icons/racingflags.png" />  <span>Inscription</span>
                            </a>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>
            <!-- Main side column. Contains the navbar and content of the page -->

            <div class="main-side">