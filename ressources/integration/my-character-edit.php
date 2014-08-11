<?php 
include('parts/header.php'); $character= 	array(	'id'=> 1,
                                                  'display_name' => 'Naola Muspell',
                                                  'player' => 1,
                                                  'avatar' => 'nao-portrait.jpg',
                                                 );
?>
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
<section class="content character">
    <div id="character-presentation" class="row">
        <div class="col-md-4 " >
            <div class="user-panel">
                <div class="image">
                    <img src="img/avatars/nao-portrait.jpg" alt="User Image" class="img-responsive" />
                </div>
                <div class="info">
                    <div class="character-skills">
                        <img src="img/icons/heart.png" /> 
                        <div class="progress">
                            <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                    <div class="character-skills">
                        <img src="img/icons/bolt.png" />
                        <div class="progress">
                            <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form id="character-generals-informations" class="profil-informations">
                <h1><input type="text" id="first_name" value="Naola"><input type="text" id="last_name" value="Muspell"> <br/><small><input type="text" id="nickname" value="Nao"></small></h1>
                <ul>
                    <li><strong>Age : </strong> <input type="text" id="age" value="30"> ans</li>
                    <li><strong>Genre : </strong> <label class="radio-inline">
                        <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Femme
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Homme
                        </label></li>
                    <li id="input-job"><strong>Emploi : </strong> <input type="text" id="job" value="Ministère de la magie. Département de la coopération magique internationale"> </li>
                </ul>
                <button type="button" class="btn btn-default">Enregistrer</button>
                    </form>
                    </div>
                <div class="col-md-2"></div>
                </div>
            <section id="aptitudes" class="skills">
                <header>
                    <h1>Aptitudes</h1>
                </header>
                <div class="row title-row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 title">
                        <h2>Aptitudes physiques</h2>
                    </div>
                    <div class="col-md-3 title">
                        <h2>Aptitudes sociales </h2>
                    </div>
                    <div class="col-md-3 title">
                        <h2>Carractère</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Force : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                     <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-social">
                        <h1>Persuasion : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <label><input type="text" value="70" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-caractere">
                        <h1>Malice : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    <label><input type="text" value="45" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Rapidité : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                    <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-social">
                        <h1>Sociabilité : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <label><input type="text" value="60" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-caractere">
                        <h1>Calme : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%">
                                    <label><input type="text" value="50" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Précision : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <label><input type="text" value="70" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-social">
                        <h1>Manipulation : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                    <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-caractere">
                        <h1>Ingéniosité : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <label><input type="text" value="70" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Réflexes : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <label><input type="text" value="80" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-social">
                        <h1>Présence : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%"> 
                                    <label><input type="text" value="55" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill aptitude-caractere">
                        <h1>Conviction : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <label><input type="text" value="80" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Discretion : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"> 
                                    <label><input type="text" value="70" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 character-skill total-aptitude">Total : <span id="total-social"></span> / 200</div>
                    <div class="col-md-3 character-skill aptitude-caractere ">
                        <h1>Intelligence : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                    <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill aptitude-physique">
                        <h1>Puissance Magique : </h1>
                        <div class="skill-value ">
                            <div class="progress">
                                <div class="progress-bar progress-bar-info " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                                    <label><input type="text" value="100" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3 character-skill total-aptitude">Total : <span id="total-caractere"></span>/ 250</div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-3 character-skill total-aptitude">
                        Total : <span id="total-physique"></span>/ 250
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"></div>
                </div>
            </section>

            <section id="character-skills" class="skills">
                <header>
                    <h1>Compétences</h1>
                </header>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Connaissance des Moldus</h1>
                        <div class="skill-value ">
                            <img src="img/skills/phone.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
                                    <label><input type="text" value="55" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Magie Théorique</h1>
                        <div class="skill-value ">
                            <img src="img/skills/educative.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                    <label><input type="text" value="95" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Botanique</h1>
                        <div class="skill-value ">
                            <img src="img/skills/plant.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                    <label><input type="text" value="30" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Potion</h1>
                        <div class="skill-value ">
                            <img src="img/skills/potion.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                    <label><input type="text" value="10" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Divination</h1>
                        <div class="skill-value ">
                            <img src="img/skills/moon.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%"> 
                                    <label><input type="text" value="0" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Culture</h1>
                        <div class="skill-value ">
                            <img src="img/skills/glasses.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                                    <label><input type="text" value="100" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Vol</h1>
                        <div class="skill-value ">
                            <img src="img/skills/balais.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> 
                                    <label><input type="text" value="100" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Créatures magiques</h1>
                        <div class="skill-value ">
                            <img src="img/skills/dragon.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <label><input type="text" value="40" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Oclumencie</h1>
                        <div class="skill-value ">
                            <img src="img/skills/mind.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%">
                                          <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill common_skill aptitude-magics">
                        <h1>Corps à Corps</h1>
                        <div class="skill-value ">
                            <img src="img/skills/fight.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <label><input type="text" value="60" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Magie noire</h1>
                        <div class="skill-value ">
                            <img src="img/skills/etincelle.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <label><input type="text" value="60" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Intersepece</h1>
                        <div class="skill-value ">
                            <img src="img/skills/aquarius.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <label><input type="text" value="100" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Médecine</h1>
                        <div class="skill-value ">
                            <img src="img/skills/medecine.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                    <label><input type="text" value="10" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Armes Blanches</h1>
                        <div class="skill-value ">
                            <img src="img/skills/sword.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <label><input type="text" value="90" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Armes à feu</h1>
                        <div class="skill-value ">
                            <img src="img/skills/gun.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    <label><input type="text" value="90" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill special_skill aptitude-magics">
                        <h1>Legilimencie</h1>
                        <div class="skill-value ">
                            <img src="img/skills/mind2.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success " role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <label><input type="text" value="60" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 character-skill awsome_skill aptitude-magics">
                        <h1>Magie ancienne</h1>
                        <div class="skill-value ">
                            <img src="img/skills/oldmagic.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                    <label><input type="text" value="45" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 character-skill awsome_skill aptitude-magics">
                        <h1>Runes</h1>
                        <div class="skill-value ">
                            <img src="img/skills/runes.png" class="img-circle img-responsive"  />
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"> 
                                    <label><input type="text" value="75" class="progress-input"/> points</label>
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8  total-aptitude">
                        Total : <span id="total-magics"></span>/ 450
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h2>Physique</h2>
                    <form>
                        <textarea name="physique" id="physique" rows="15" cols="80">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        </textarea>
                        <button type="button" class="btn btn-default">Enregistrer</button>                   
                    </form>
                    <h2>Background</h2>
                    <form>
                        <textarea name="background" id="background" rows="15" cols="80">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        </textarea>
                        <button type="button" class="btn btn-default">Enregistrer</button>                   
                    </form>
                    <h2>Rumeurs, ragots et notes de service</h2>
                    <textarea name="public_story" id="public_story" rows="15" cols="80">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
                    </textarea>
                    <button type="button" class="btn btn-default">Enregistrer</button>                   
                    </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        </section><!-- /.content -->

    <?php $currenttpl = 'character-edit'; include('parts/footer.php'); ?>
