<?php 
include('parts/header.php'); $character= 	array(	'id'=> 1,
                                                  'display_name' => 'Naola Muspell',
                                                  'player' => 1,
                                                  'avatar' => 'nao-portrait.jpg',
                                                 );
?>
<?php $characters = 
array(
	array(	'id'=> 1,
			'display_name' => 'Naola Muspell',
			'player' => 1,
			'avatar' => 'nao-portrait.jpg',
		),
	array(	'id'=> 3,
			'display_name' => 'Esther Mycroft',
			'player' => 1,
			'avatar' => 'esther-portrait.jpg',
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
<?php include('parts/userbar.html'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><img src="img/icons/globe.png"/>La campagne</li>
        <li ><a href="peoples.php">Les personnages</a></li>
        <li class="active" >Naola Muspell</li>
    </ol>
</section>
<!-- Main content -->
<section class="content profil">
     <div id="player-presentation" class="row row-fluid">
        <div class="col-md-3" >
            <div class="image">
                <img src="img/avatars/nao-portrait.jpg" alt="User Image" class="img-responsive" />
            </div>
        </div>
        <div class="col-md-9">
            <h1>Cloé Duc</h1>
            <ul>
                <li><strong>Age : </strong> 25 ans (07/06/1989)</li>
                <li><strong>Genre : </strong> femme </li>
                <li><strong>Téléphone : </strong> 0643188442</li>
                <li><strong>Skype : </strong> cloeduc</li>
                <li><strong>Mail : </strong> cloe.duc@gmail.com</li>
            </ul>
            <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
        </div>
    </div>
    </section>
    <section class="content peoples">
        <h2>Personnages joués : </h2>
        <div class="row">
            <?php foreach($characters as $key => $character): ?>
            <div class="col-lg-2 col-xs-8">
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
</section><!-- /.content -->>


<?php $currenttpl = 'character-edit'; include('parts/footer.php'); ?>
