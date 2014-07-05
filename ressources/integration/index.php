<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Dashboard</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />

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
            <a href="index.html" class="logo">
                <!-- Add the class icon to your logo image or logo icon to add the margining -->
               <img src="img/witchhat.png"/>
            </a>
        </header>
        <div class="wrapper">
            <?php include('sidebar.html'); ?>

            <!-- Main side column. Contains the navbar and content of the page -->
            <div class="main-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Le forum
                    </h1>
                    <ol class="breadcrumb">
                        <li><img src="img/icons/globe.png"/>La campagne</li>
                        <li class="active">Le forum</li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <table class="table table-responsive categorie-section">
                      <thead>
                        <tr>
                          <th colspan="4" class="cat-title">                        
                            <div class="pull-left">
                                <img src="img/icons/magicwand-bgless.png"/>
                            </div><h1>Ministère de la magie</h1>
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php for($i=1; $i <= 5; $i++) :?>
                            <tr class="start-entry">
                              <td rowspan="2" class="cat-icon"></td>
                              <td rowspan="2" class="cat-description"><h2><a href="#">La salle d'entrainement</a></h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p></td>
                              <th class="to-read">A lire (4)</th>
                              <th class="last-message">Dernier message</th>
                            </tr>
                            <tr>
                              <td class="to-read">
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    <span class="glyphicon glyphicon-share-alt  btn-xs"></span>
                                </a>
                                </td>
                              <td class="last-message"><a href="#">Esther Cromwell</a><br /> hier à 13h08</td>
                            </tr>
                    <?php endfor; ?>
                      </tbody>
                    </table>
                <table class="table table-responsive categorie-section">
                      <thead>
                        <tr>
                          <th colspan="4" class="cat-title">                        
                            <div class="pull-left">
                                <img src="img/icons/magicwand-bgless.png"/>
                            </div><h1>Près au Lard</h1>
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php for($i=1; $i <= 3; $i++) :?>
                            <tr class="start-entry">
                              <td rowspan="2" class="cat-icon"></td>
                              <td rowspan="2" class="cat-description"><h2><a href="#">La salle d'entrainement</a></h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p></td>
                              <th class="to-read">A lire (4)</th>
                              <th class="last-message">Dernier message</th>
                            </tr>
                            <tr>
                              <td class="to-read">
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    <span class="glyphicon glyphicon-share-alt  btn-xs"></span>
                                </a>
                                </td>
                              <td class="last-message"><a href="#">Esther Cromwell</a><br /> hier à 13h08</td>
                            </tr>
                    <?php endfor; ?>
                      </tbody>
                    </table>
                <table class="table table-responsive categorie-section">
                      <thead>
                        <tr>
                          <th colspan="4" class="cat-title">                        
                            <div class="pull-left">
                                <img src="img/icons/radio.png"/>
                            </div><h1>Discuter de la campagne</h1>
                            </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php for($i=1; $i <= 2; $i++) :?>
                            <tr class="start-entry">
                              <td rowspan="2" class="cat-icon"></td>
                              <td rowspan="2" class="cat-description"><h2><a href="#">La salle d'entrainement</a></h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p></td>
                              <th class="to-read">A lire (4)</th>
                              <th class="last-message">Dernier message</th>
                            </tr>
                            <tr>
                              <td class="to-read">
                                <a href="#">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    <span class="glyphicon glyphicon-share-alt  btn-xs"></span>
                                </a>
                                </td>
                              <td class="last-message"><a href="#">Esther Cromwell</a><br /> hier à 13h08</td>
                            </tr>
                    <?php endfor; ?>
                      </tbody>
                    </table>
                    </div>

                </section><!-- /.content -->
            </div>
            <?php include('userbar.html'); ?>
        </div><!-- ./wrapper -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <!-- <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="glyphicon glyphicon-user"></i>
                                <span>Jane Doe <i class="caret"></i></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <!--<li class="user-header bg-light-blue">
                                    <img src="img/avatar3.png" class="img-circle" alt="User Image" />
                                    <p>
                                        Jane Doe - Web Developer
                                        <small>Member since Nov. 2012</small>
                                    </p>
                                </li>
                                <!-- Menu Body -->
                                <!--<li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Sales</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
                                <!-- Menu Footer-->
                               <!-- <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
        <!-- add new calendar event modal -->


        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!--<script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <!-- Sparkline -->
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <script>
         $('.toggle-characters').click(function() {
            var $marginLefty = $(this).next();
            $marginLefty.animate({
              marginLeft: parseInt($marginLefty.css('marginLeft'),10) == 0 ?
                $marginLefty.outerWidth() :
                0
            });
            $(this).animate({
              marginLeft: parseInt($marginLefty.css('marginLeft'),10) == 0 ?
                $marginLefty.outerWidth() :
                0
            });
          });
         </script>

    </body>
</html>