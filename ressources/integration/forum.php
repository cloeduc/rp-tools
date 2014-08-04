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
    <h1>
        La salle d'entrainement [cattitle]
    </h1>

</section>

<!-- Main content -->
<section class="content forum">
<button type="button" class="btn btn-default">Nouveau sujet dans la salle d'entrainement</button>
<ul id="accordion">
<?php for($i=1; $i <= 3; $i++) :?>
	<li>
	<table class="table table-responsive categorie-section forum-section">
	      <thead id="cat-<?php echo $i;?>">
	        <tr>
	          <th colspan="2" class="cat-title main-title">                      
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
	            <tr class="start-entry">
		            <td class="cat-icon"></td>
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
	</li>
<?php endfor; ?> 
</ul>
    <button type="button" class="btn btn-default">Nouveau sujet dans la salle d'entrainement</button>

</section><!-- /.content -->

<?php $currenttpl = 'forum'; include('parts/footer.php'); ?>
