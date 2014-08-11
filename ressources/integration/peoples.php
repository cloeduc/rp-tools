<?php 
include('parts/header.php'); ?>
<?php include('parts/userbar.html'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<ol class="breadcrumb">
		<li><img src="img/icons/globe.png"/>La campagne</li>
		<li class="active" > <a href="#">Les personnages</a></li>
	</ol>
	<h1>
		Les personnages
	</h1>
  <div class="form-group">
    <div class="input-group">
      <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      <input class="form-control" id="search" type="text" placeholder="Recherche un personnage">
    </div>
  </div>
</section>
<?php $characters = 
array(
	array(	'id'=> 1,
			'display_name' => 'Naola Muspell',
			'player' => 1,
			'avatar' => 'nao-portrait.jpg',
		),
	array(	'id'=> 2,
			'display_name' => 'Mattéo Muspell',
			'player' => 2,
			'avatar' => 'matteo-portrait.jpg',
		),
	array(	'id'=> 3,
			'display_name' => 'Esther Mycroft',
			'player' => 1,
			'avatar' => 'esther-portrait.jpg',
		),
	array(	'id'=> 4,
			'display_name' => 'Xâvier Mycroft',
			'player' => 2,
			'avatar' => 'xav-portrait.jpg',
		),
	array(	'id'=> 5,
			'display_name' => 'Amalia Elfric',
			'player' => 2,
			'avatar' => 'alix-portrait.jpg',
		),
	array(	'id'=> 6,
			'display_name' => 'Usem Jejel',
			'player' => 1,
			'avatar' => 'usem-portrait.jpg',
		),
	array(	'id'=> 7,
			'display_name' => 'Mordret',
			'player' => 1,
			'avatar' => 'mordret-portrait.jpg',
		),
	array(	'id'=> 8,
			'display_name' => 'Douglass Ross',
			'player' => 1,
			'avatar' => 'ross-portrait.jpg',
		),
	array(	'id'=> 9,
			'display_name' => 'Vélane',
			'player' => 2,
			'avatar' => 'pierre-portrait.jpg',
		),
	array(	'id'=> 10,
			'display_name' => 'Faust',
			'player' => 1,
			'avatar' => 'faust-portrait.jpg',
		),
	array(	'id'=> 11,
			'display_name' => 'Charm',
			'player' => 1,
			'avatar' => 'charm-portrait.jpg',
		),
	array(	'id'=> 12,
			'display_name' => 'Lord',
			'player' => 1,
			'avatar' => 'lord-portrait.jpg',
		),
	);?>
<!-- Main content -->
<section class="content peoples">
	<div class="row">
	<?php foreach($characters as $character):?>
		<div class="col-lg-3 col-xs-8">
			<div class="user-panel" player="<?php echo  $character['player']?>" character="<?php echo  $character['id']?>">
				<a href="character.php?id=<?php echo  $character['id']?>">
					<div class="image">
						<img src="img/avatars/<?php echo  $character['avatar']?>" alt="<?php echo  $character['display_name']?>" class="img-rounded img-responsive"/>
					</div>
					<div class="info">
						<h2><?php echo  $character['display_name']?></h2>
					</div>
				</a>
			</div>
		</div><!-- ./col -->
	<?php endforeach; ?>
		</div>
	</div>
</section><!-- /.content -->

<?php $currenttpl = 'people'; include('parts/footer.php'); ?>
