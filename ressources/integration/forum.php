<?php 
include('parts/header.php'); ?>
<?php include('parts/userbar.html'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><img src="img/icons/globe.png"/>La campagne</li>
        <li > <a href="#">Le forum</a></li>
        <li><a href="#">Le ministère de la magie</a></li>
        <li class="active">La salle d'entrainement</li>
    </ol>
</section>

<!-- Main content -->
<section class="content forum">
    <header>
    <h1>
        La salle d'entrainement [cattitle]
    </h1>
    </header>
	<table class="table table-responsive categorie-section forum-section">
	      <thead id="cat-1">
	        <tr>
	          <th colspan="1" class="cat-title main-title">                      
	            <div class="pull-left">
	            </div><h1><a href="#">La salle d'entrainement</a></h1>
	          </th>
	          <th class="cat-title date-rp">Date rôleplay</th>
	          <th class="cat-title">Réponses</th>
	          <th class="cat-title">Dernier message</th>
	        </tr>
	      </thead>
	      <tbody>
	      <?php for($j=1; $j <= 9; $j++) :?>
	            <tr class="start-entry <?php if($j%3 == 0):?>new-message<?php endif; ?>">
		            <td class="cat-description">
		              	<h2>
		              		<a href="subject.php">Sujet <?php echo $j?></a>
		              	</h2>
		              	<p>[context du sujet]Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. 
		              	Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit.
		              	Donec et mollis dolor. </p>
		            </td>
		            <td>8 mars 1988</td>
		            <td class="nb-message" >6</td>
		            <td class="last-message"><a href="#">Esther Cromwell</a><br /> hier à 13h08 <a href="#"><span class="glyphicon glyphicon-share-alt  btn-xs"></span></a></td>
		        </tr>
	    <?php endfor; ?>
	    </tbody>
	</table>
<div class='box collapsed-box'>
    <div class='box-header'>
    	<div class=" box-tools">
		<span class="glyphicon glyphicon-share-alt"> </span> <h3 class='box-title' data-widget='collapse'>Nouveau sujet dans "La salle d'entrainement"</h3>
        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class='box-body pad'>
    <form role="form">
      <div class="form-group">
        <label for="subjectTitle">Titre du sujet : </label>
        <input type="text" class="form-control" id="subjectTitle" placeholder="Titre du sujet">
      </div>
        <!-- seulement si on se trouve dans un RP -->
      <div class="form-group">
        <label for="subjectDate">Date rôle play du RP</label>
        <input type="text" class="datepicker form-control" id="subjectDate" placeholder="Date rôle play du RP">
      </div>
      <div class="form-group">
        <label for="desctionSubject">Description du sujet</label> <br/>
        <textarea id="desctionSubject" class="form-control" rows="3" ></textarea>
      </div>
      <button type="submit" class="btn btn-default">Enregistrer</button>
    </form>
    </div>
</div>
<nav id="other-forums">
    <h1>Le ministère de la magie</h1>
    <ul>                          
         <li><a href="forum.php" data-toggle="tooltip" data-placement="top" title="3 sujets non lus"> <span class="glyphicon glyphicon-star"></span> Bureau des Aurors </a> </li>
         <li>Salle d'entrainement</li>
         <li><a href="forum.php">Justice ministérielle</a></li>
    </ul>
</nav>
</section><!-- /.content -->

<?php $currenttpl = 'forum'; include('parts/footer.php'); ?>
