<?php 

include('parts/header.php'); ?>
<!-- Content Header (Page header) -->

<section class="content-header">

    <ol class="breadcrumb">
        <li><img src="img/icons/globe.png"/>La campagne</li>
        <li class="active">Le forum</li>
    </ol>
    <div class="row">
    <div class="col-md-10">
     <div class="alert alert-success " role="alert">
         Poney
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>
        </div>
        </div>
    <h1>
        Le forum
    </h1>

</section>

<!-- Main content -->
<section class="content">
<table class="table table-responsive categorie-section">
      <thead>
        <tr>
          <th colspan="2" class="cat-title">                        
            <div class="pull-left">
                <img src="img/icons/magicwand-bgless.png"/>
            </div><h1>Ministère de la magie</h1>
            </th>
            <th class="to-read cat-title">A lire (4)</th>
            <th class="last-message cat-title">Dernier message</th>
        </tr>
      </thead>
      <tbody>
      <?php for($i=1; $i <= 5; $i++) :?>
            <tr class="start-entry">
              <td class="cat-icon"></td>
              <td class="cat-description">
                <h2><a href="forum.php">La salle d'entrainement</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
              </td>
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

<?php include('parts/userbar.html'); ?>
<?php $currenttpl = 'index'; include('parts/footer.php'); ?>
