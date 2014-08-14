<?php 
include('parts/header.php'); ?>
<?php include('parts/userbar.html'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <ol class="breadcrumb">
        <li><img src="img/icons/globe.png"/>La campagne</li>
        <li > <a href="index.php">Le forum</a></li>
        <li><a href="forum.php?section=1">Le ministère de la magie</a></li>
        <li ><a href="forum.php?section=1">La salle d'entrainement</a></li>
        <li class="active">Discussion autour d'un verre</li>
    </ol>
    <h1>
        Discussion autour d'un verre
    </h1>
    <p class="date-rp">Le 26 mars 1988</p>
    <p class="subtitle">Vivamus fermentum semper porta. Nunc diam velit, adipiscing ut tristique vitae, sagittis vel odio. Maecenas convallis ullamcorper ultricies. Curabitur ornare, ligula semper consectetur sagittis, nisi diam iaculis velit, id fringilla sem nunc vel mi.</p>
</section>

<!-- Main content -->
<section class="content subject">

<div class='box collapsed-box'>
    <div class='box-header'>
    	<div class=" box-tools">
		<span class="glyphicon glyphicon-share-alt"> </span> <h3 class='box-title' data-widget='collapse'>Laisser une réponse</h3>
        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class='box-body pad'>
        <form>
            <textarea name="editor1" id="editor1" rows="10" cols="80">
            </textarea>
            <button type="button" class="btn btn-default">Répondre</button>                   
        </form>
    </div>
</div>
<ul class="pagination right">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li class="active"><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
<?php for($i=1; $i <= 3; $i++) :?>
	<article class="post">
		<header><a name="p<?php echo $i ?>" Message posté le 16 juillet 2014 à 17h36 </header>
		<aside class="messageinfo user-panel">
            <div class="image">
                <img src="img/avatars/nao-portrait.jpg" alt="User Image" />
            </div>
  			<h2><a href="#">Naola Muspell</a></h2>
                <div class="character-skills">
                    <img src="img/icons/heart.png" /> 
                    <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <label><input type="text" value="70" class="progress-input"/> points</label>
                        <span class="sr-only"></span>
                      </div>
                    </div>
                </div>
                <div class="character-skills">
                    <img src="img/icons/bolt.png" />
                    <div class="progress">
                      <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <!-- Admin Only-->
                          <label><input type="text" value="70" class="progress-input"/> points</label>
                        <span class="sr-only"></span>
                        <!-- // -->
                      </div>
                    </div>
                </div>
		</aside>
		
		<section class="post-message">
			<p>- "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor."</p>
			<p>Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut gravida lorem. Ut turpis felis, pulvinar a semper sed, adipiscing id dolor. Pellentesque auctor nisi id magna consequat sagittis. Curabitur dapibus enim sit amet elit pharetra tincidunt feugiat nisl imperdiet. Ut convallis libero in urna ultrices accumsan. Donec sed odio eros. Donec viverra mi quis quam pulvinar at malesuada arcu rhoncus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In rutrum accumsan ultricies. Mauris vitae nisi at sem facilisis semper ac in est.</p>
		</section>
	</article>
<?php endfor; ?> 
<ul class="pagination right">
  <li><a href="#">&laquo;</a></li>
  <li><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li class="active"><a href="#">5</a></li>
  <li><a href="#">&raquo;</a></li>
</ul>
<div class="clear"></div>
<div class='box collapsed-box'>
    <div class='box-header'>
    	<div class=" box-tools">
		<span class="glyphicon glyphicon-share-alt"> </span> <h3 class='box-title' data-widget='collapse'>Laisser une réponse</h3>
        </div><!-- /. tools -->
    </div><!-- /.box-header -->
    <div class='box-body pad'>
        <form>
            <textarea name="editor2" id="editor2" rows="10" cols="80">
            </textarea>
            <button type="button" class="btn btn-default">Répondre</button>                   
        </form>
    </div>
</div>
</section><!-- /.content -->

<?php $currenttpl = 'subject'; include('parts/footer.php'); ?>
