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
        <li><img src="img/icons/globe.png"/>Mon compte</li>
        <li ><a href="peoples.php">Mon profil</a></li>
    </ol>
</section>
<!-- Main content -->
<section class="content profil">
    <form class="profil-informations">
        <div id="player-presentation" class="row row-fluid">
            <div class="col-md-3" >
                <div class="image">
                    <img src="img/avatars/nao-portrait.jpg" alt="User Image" class="img-responsive" />
                    <input type="file" id="exampleInputFile" value="img/avatars/nao-portrait.jpg" >
                </div>
            </div>
            <div class="col-md-9">
                <h1><input type="text" id="name" value="Cloé"> <input type="text" value="Duc"></h1>
                <ul>
                    <li><strong>Date de naissance</strong> <input type="text" id="name" value="07/06/1989"></li>
                    <li><strong>Genre : </strong> femme </li>
                    <li><strong>Téléphone : </strong> <input type="text" id="name" value="0643188442"></li>
                    <li><strong>Skype : </strong> <input type="text" id="name" value="cloeduc"> </li>
                    <li><strong>Mail : </strong> <input type="text" id="name" value="cloe.duc@gmail.com"></li>
                </ul>
                <textarea id="player-description">
                    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                </textarea>
                <button type="button" class="btn btn-default">Enregistrer</button>
            </div>
        </div>
    </form>

    
    </section><!-- /.content -->
    <section class="content peoples">
        <h2>Personnages joués : </h2>
        <div class="row row-fluid">
            <?php foreach($characters as $key => $character): ?>
            <div class="col-lg-2 col-xs-9">
                <div class="user-panel" player="<?php echo  $character['player']?>" character="<?php echo  $character['id']?>">
                    <button class="btn btn-sm btn-danger remove-character confirm"><span class="glyphicon glyphicon-minus"></span></button>
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
            <div class="col-lg-2 col-xs-9 add-character"> 
                Ajouter un personnage <br /> <br /> 
                <button class="btn btn-lg btn-success" id="addc"><span class="glyphicon glyphicon-plus"></span></button>
                <br /> <br /> 
                <!-- Select box avec les personnages n'ayant pas de joueur attaché (ou le joueur 0). Seuls les admin peuvent voir les boutons pour supprimer ou ajouter des personnages au joueur. -->
                <form id="add-character">
                    <select  class="form-control">
                        <?php foreach($characters as $key => $character): ?>
                            <option>
                                <?php echo  $character['display_name']?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <br />
                    <button class="btn" >Ajouter</button>
                </form>
            </div>
        </div>
        </div>
</section><!-- /.content -->


<?php $currenttpl = 'profil-edit'; include('parts/footer.php'); ?>
