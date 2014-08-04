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
  <link rel="stylesheet" href="css/jquery-ui-bootstrap/jquery-ui-1.10.3.custom.css">

  <link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
  <link href="css/RoleplayTools.css" rel="stylesheet" type="text/css" />
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
          <div class="wrapper container-fluid">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side">
              <!-- sidebar: style can be found in sidebar.less -->
              <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                  <li class="treeview">
                    <a href="index.html">
                      <img src="img/icons/globe.png"/><span>La campagne</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="index.php"><img src="img/icons/quill.png"/> Forum</a></li>
                      <li><a href="peoples.php"><img src="img/icons/peoples.png"/> Personnages</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="#">
                      <img src="img/icons/tools.png"/>
                      <span>Mon compte</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="pages/UI/general.html"><img src="img/icons/profle.png"/>  Mon profil</a></li>
                      <li><a href="pages/UI/icons.html"><img src="img/icons/profil.png"/>  Mes personnages</a></li>
                    </ul>
                  </li>
                  <li class=" active treeview">
                    <a href="book.php">
                      <img src="img/icons/booklet.png"/> <span>Livre du joueur</span>
                    </a>
                    <ul class="treeview-menu">
                      <li><a href="book.php#context"><img src="img/icons/map.png"/> Le context</a></li>
                      <li><a href="book.php#rules"><img src="img/icons/pin.png"/> Les règles</a></li>
                      <li><a href="book.php#univers"><img src="img/icons/books.png"/> L'univers</a></li>
                      <li><a href="book.php#faq"><img src="img/icons/crossroads.png"/> FAQ</a></li>
                    </ul>
                  </li>
                  <li class="treeview">
                    <a href="index.html">
                      <img src="img/icons/scissors.png"/>  <span>Deconnexion</span>
                    </a>
                  </li>
                </ul>
              </section>
              <!-- /.sidebar -->
            </aside>
            <!-- Main side column. Contains the navbar and content of the page -->
            
            <div class="main-side">
              <div id="placenavigation">
                <nav id="book-navigation" class="navbar navbar-default" role="navigation">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="#">Le livre du joueur</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Le context</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#story">Le context historique</a></li>
                            <li class="divider"></li>
                            <li><a href="#place">Les lieux</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Les règles</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#gameplay">Déroulement du jeu</a></li>
                            <li class="divider"></li>
                            <li><a href="#character_creation">Création de personnage</a></li>
                            <li><a href="#common_skills">> Compétences communes</a></li>
                            <li><a href="#special_skills">> Compétences spéciales</a></li>
                            <li><a href="#awsome_skills">> Compétences exceptionnelles</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" data-toggle="dropdown" href="#">L'univers</a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#books">Bibliographie</a></li>
                            <li class="divider"></li>
                            <li><a href="#links">Liens utils</a></li>
                          </ul>
                        </li>
                        <li class="dropdown">
                          <a href="#faq" /> FAQ</a>
                        </li>
                      </ul>
                      <form class="navbar-form navbar-right" id="searchinpage" role="search">
                        <div id="findingSentence"></div>
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Search">

                        </div>
                          <div id="navigation-search" >
                            <span class="glyphicon glyphicon-chevron-left search-left search-disabled"></span>
                            <span id="currentsearch"> 1 </span> sur <span id="totalsearch"></span>
                            <span class="glyphicon glyphicon-chevron-right search-right"></span>
                          </div>
                        <button type="submit" class="btn btn-default">Rechercher</button>
                      </form>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
              </div>
              <!-- Content Header (Page header) -->
              <section class="content-header">

                <h1><img src="img/icons/booklet.png"/> Le livre du joueur</h1>
              </section>
              <!-- Main content -->
              <section class="content book">
                <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-11">
                    <section id="context" class="book-section">
                      <header class="chapter-header">
                        <h1><a name="context"></a><img src="img/icons/map.png"/> Le contexte</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                      </header>
                      <article>
                        <h1><a name="story"></a>Context historique</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                      </article>
                      <article>
                        <h1><a name="place"></a>Les lieux</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                      </article>
                    </section>

                    <section id="rules" class="book-section">
                      <header class="chapter-header">
                        <h1><a name="rules"></a><img src="img/icons/pin.png"/> Les Règles</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                      </header>
                      <section>
                        <header> 
                          <h1><a name="gameplay"></a>Déroulement du jeu</h1>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                        </header>
                        <article>
                          <header>
                            <h2> Dice Less & rôle play</h2>
                          </header>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        </article>
                        <article>
                          <header>
                           <h2>Quêtes et campagne</h2>
                         </header>
                         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                       </article>
                     </section>
                     <section>
                      <header>
                        <h1><a name="character_creation"></a>Création de personnage</h1>
                        <p>Tout sorcier, quelque soit son origine, est admis dans une école de sorcier, Poudlard, Drumstrang, Beaubatons, pour les plus connus. Et tout sorcier a ainsi acquis un certain nombre de savoir faire, à l’école, donc, au sein de la communauté magique, ou par des expériences personnelles. </p>
                        <p><strong>Points à répartir entre toutes les compétences :</strong> 450</p>
                      </header>
                      <section>
                        <header>
                          <h2> <a name="common_skills"></a>Compétences communes</h2>
                          <p>
                            Les compétences communes vous on été enseignées à l’école, lors de votre scolarité, et relèvent de l’expérience communes à tous les sorciers. Votre personnage a-t-il été particulièrement assidu en cours de potion ? Est-il issu d’une famille sorcière ? Ou d’une famillle moldue ? Est-il porté sur le sport ou sur les études ?
                          </p>
                        </header>
                        <article>
                          <h3>Règles de disposition</h3>
                          <ul>
                            <li>
                              Dépenser un point de compétence par niveau dans une compétence
                            </li>
                            <li>
                              Une compétence ne peut être montée que jusqu’à 60 hors dérogation spéciale accordée en fonction du background du personnage
                            </li>
                            <li>
                              A titre indicatif, un sorcier ayant un niveau correct (sortit d’étude et pratique ponctuelle de l’activité) tournera autour de 30 points pour la compétence.
                            </li>
                          </ul>
                        </article>
                        <section>
                          <header>
                            <h3>Les compétences disponibles :</h3>
                            <p>N'hesitez pas à proposer de nouvelles compétences ^^ </p>
                          </header>
                          <div class="row skills">
                            <div class="col-md-4">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Connaissance des Moldus </h1>
                                </header>
                                <p>
                                  Certains sorciers ne sont pas du tout en contact avec des Moldus, que ce soit pendant leur enfance ou durant l’école. D’autres, au contraire, sont nés de parents moldus, d’un côté ou des deux, ou ont véccu parmis eux. Et enfin, certains sorciers se prennent de passion pour ces gens qui vivent étrangement sans magie et qui s’en sortent tout aussi bien. </p>
                                  <h2>Repères</h2>
                                  <p>De là, vous pouvez établir le degré de connaissance de votre personnage concernant les moldus.</p>
                                  <p>Un personnage avec une connaissance de <strong>10</strong> sera capable de manier la monnaie moldu et connaitra quelques subtilités, comme leur manie de mettre des pantalon et non des robes.</p>
                                  <p> A 40, vous pourrez même avoir quelque notion de ce qu’est une télévision. A 60, vous pouvez même en changer les chaines!</p>
                                  <p>Enfin à 100, vous pouvez vraiment être considéré comme l’un des leurs.
                                  </p>
                                  <footer>
                                    <h2>Références :</h2>
                                    <ul>
                                      <li>
                                        <a href="http://fr.harrypotter.wikia.com/wiki/%C3%89tude_des_Moldus" target="_blank">Wiki Potter - Etudes des moldus</a>
                                      </li>
                                    </ul>
                                  </footer>
                                </article>
                              </div>
                              <div class="col-md-4">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Magie théorique</h1>
                                  </header>
                                  <p>La magie, ça s’apprends dans des livres. Et ensuite, ça s’essaye. De toute façon, il y a beaucoup de choses que l’on apprend que l’on utilise pas, comme les sortilèges impardonnables, par exemple. La magie théorique va symboliser l’amour de votre personnage pour les livres, la théorie pur, et tout ce qu’il ne peut pas forcément expérimenter ou mettre en pratique.</p> 
                                  <h2>Repères</h2>
                                  <p>A 10 points, vous lisez régulièrement des livres de la bibliothèque. A 60, vous vous arrangez toujours pour avoir accès à la réserve pour lire des choses très poussées. </p>
                                  <p>A 100, vous êtes un vrai rat de librairie. Le département recherche doit sans doute vous voir tous les jours!</p>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Botanique</h1>
                                  </header>
                                  <p>La botanique est plus ou moins apprise à Poudlard. Mais soyons honnête, ce n’est pas pour autant que vous êtes forcément un crack en la matière. </p>
                                  <p>Ou alors c’est justement ce qui a poussé la passion de votre personnage à se développer. Cette compétence vous permettra de ne pas tomber au coeur d’un filet du diable. </p>
                                  <h2>Repères</h2>
                                  <footer>
                                    <h2>Références :</h2>
                                    <ul>
                                      <li>
                                        <a href="http://fr.harrypotter.wikia.com/wiki/Botanique" target="_blank">Wiki Potter - Etudes des moldus</a>
                                      </li>
                                      <li>
                                        <a href="http://www.encyclopedie-hp.org/magic/herbology-class.php" target="_blank">Wiki Potter - Etudes des moldus</a>
                                      </li>
                                      <li>
                                        <a href="http://www.encyclopedie-hp.org/herbology/herbology-a.php" target="_blank">Wiki Potter - Etudes des moldus</a>
                                      </li>
                                    </ul>
                                  </footer>
                                </article>
                              </div>
                            </div>
                            <div class="row skills">
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Potion</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Divination</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Culture</h1>
                                  </header>
                                </article>
                              </div>
                            </div>
                            <div class="row skills">
                             <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Vol</h1>
                                </header>
                              </article>
                            </div>
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Connaissance des créatures magiques</h1>
                                </header>
                              </article>
                            </div>
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Oclumencie</h1>
                                </header>
                              </article>
                            </div>
                          </div>
                          <div class="row skills">
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Corps à corps</h1>
                                </header>
                              </article>
                            </div>
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Duel</h1>
                                </header>
                              </article>
                            </div>
                          </div>
                        </section>
                      </section>
                      <section>
                        <header>
                          <h2><a name="special_skills"></a>Compétences Spéciales</h2>
                          <p>
                            Les compétences spéciales sont des choses qu’on n’apprends pas au premier coin de rue. Techniques interdites, apprentissage complexe, technique de combat insolite (un sorcier, ça se bat avant tout avec sa baguette…), connaissance résultant d’expérience personnelles particulière…                           </p>
                          </header>
                          <article>
                            <h3>Règles de disposition</h3>
                            <ul>
                              <li>
                                Dépenser deux point de compétence par niveau dans une compétence (le point de compétence coûte deux fois plus cher que pour les compétences communes)
                              </li>
                              <li>
                                Une compétence ne peut être montée que jusqu’à 60 hors dérogation spéciale accordée en fonction du background du personnage (mais ça vous fait 120 points dépensées, donc vraiment, là, va falloir argumenter)
                              </li>
                              <li>
                                L’acquisition de ces compétences est soumise à validation sur justification du background de votre personnage
                              </li>
                              <li>
                                Peu de sorciers disposent d’une maitrise de ces compétences, aussi en avoir les bases fait de vous un élément intéressant, voir même indispensable.
                              </li>
                            </ul>
                          </article>
                          <section>
                            <header>
                              <h3>Les compétences disponibles :</h3>
                            </header>
                            <div class="row skills">
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Magie Noire</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Connaissances Inter-espèces</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Médecine</h1>
                                  </header>
                                </article>
                              </div>
                            </div>
                            <div class="row skills">
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Armes Blanches</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Arme à feu</h1>
                                  </header>
                                </article>
                              </div>
                              <div class="col-md-4 ">
                                <article>
                                  <header>
                                    <div class="image pull-left">
                                      <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                    </div>
                                    <h1>Légilimencie</h1>
                                  </header>
                                </article>
                              </div>
                            </div>
                          </section>
                        </section>
                        <section>
                          <header>
                            <h2><a name="awsome_skills"></a>Compétences rares</h2>
                            <p>
                              Les compétences rares sont… rares… Ouais, ouais… Elles ont été acquise dans des circonstances très exceptionnelles, ou bien elles ont été hérité et clairement, si on vous a recruté, c’est en grande partie à cause d’elles.
                            </p>
                          </header>
                          <article>
                            <h3>Règles de disposition</h3>
                            <ul>
                              <li>
                               Dépenser trois points de compétence par niveau dans une compétence (le point de compétence coûte trois fois plus cher que pour les compétences communes)
                             </li>
                             <li>
                               Une compétence ne peut être montée que jusqu’à 60 hors dérogation spéciale accordée en fonction du background du personnage (mais ça vous fait 180 points dépensées, donc vraiment, là, va falloir argumenter)
                             </li>
                             <li>
                              L’acquisition de ces compétences est soumise à validation sur justification du background de votre personnage. Et là aussi, va falloir argumenter sec :)
                            </li>
                          </ul>
                        </article>
                        <section>
                          <header>
                            <h3>Les compétences disponibles :</h3>
                          </header>
                          <div class="row skills">
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Magie ancienne</h1>
                                </header>
                              </article>
                            </div>
                            <div class="col-md-4 ">
                              <article>
                                <header>
                                  <div class="image pull-left">
                                    <img src="img/avatars/nao.jpg" class="img-circle img-responsive" />
                                  </div>
                                  <h1>Runes</h1>
                                </header>
                              </article>
                            </div>
                          </div>
                        </section>
                      </section>
                    </section>
                  </section>
                  <!-- UNIVERS -->
                  <section id="univers" class="book-section">
                    <header class="chapter-header">
                      <h1><a name="univers"></a><img src="img/icons/books.png"/> L'Univers</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                    </header>
                    <article>
                      <h1><a name="books"></a>La saga Harry Potter</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                    </article>
                    <article>
                      <h1><a name="links"></a>Les liens utils</h1>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                    </article>
                  </section>
                <section id="faq" class="book-section">
                  <header class="chapter-header">
                    <h1><a name="faq"></a><img src="img/icons/crossroads.png"/> FAQ</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur.</p>
                  </header>
                  <article>
                    <header><h1>Question ?</h1></header>
                    <p>Réponse ! </p>
                  </article>
                  <article>
                    <header><h1>Question ?</h1></header>
                    <p>Réponse ! </p>
                  </article>
                  <article>
                    <header><h1>Question ?</h1></header>
                    <p>Réponse ! </p>
                  </article>
                </section>
              </div>
            </div>
          </section><!-- /.content -->

          <?php $currenttpl = 'book';  include('parts/footer.php'); ?>
