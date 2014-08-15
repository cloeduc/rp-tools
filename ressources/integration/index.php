<?php 

include('parts/header.php'); ?>
<!-- Content Header (Page header) -->

<section class="content-header">

    <ol class="breadcrumb">
        <li><img src="img/icons/globe.png"/>La campagne</li>
        <li class="active">Le forum</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
     <div class="alert alert-success " role="alert">
         Poney
         <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
    </div>
    <h1>
        Le forum
    </h1>
    <?php for($e=1; $e <= 4; $e++) :?>
    <section class="categorie-section">
        <header class="cat-title">
            <div class="pull-left">
                <img src="img/icons/magicwand.png"/>
            </div><h1>Ministère de la magie</h1>

        </header>
      <?php for($i=1; $i <= 5; $i++) :?>
        <article class="start-entry <?php if($i%3 == 0):?>new-message<?php endif; ?>">
            <div class="cat-description">
                <h2><a href="forum.php">La salle d'entrainement</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
            </div>
            <aside class="last-messages">
                <a class="display-last-messages" <?php if($i%3 == 0):?>data-toggle="tooltip" data-placement="top" title="3 sujets non lus" <?php endif; ?> href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                 <?php for($j=1; $j <= 3; $j++) :?>
                <article class="message-list">
                    <a href="subject.php#p26">
                    <h2>Réparation en urgence</h2>
                    <p class="last-message-info">Dernier message par Esther Mycroft le 26 juin 1989</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
                    </a>
                </article>
                 <?php endfor; ?>
            </aside>
        </article>
    <?php endfor; ?>
    </section>
    <?php endfor; ?>
    <section class="categorie-section">
        <header class="cat-title">
            <div class="pull-left">
                                <img src="img/icons/radio.png"/>
            </div>
            <h1>Discuter de la campagne</h1>

        </header>
      <?php for($i=1; $i <= 5; $i++) :?>
        <article class="start-entry <?php if($i%3 == 0):?>new-message<?php endif; ?>">
            <div class="cat-description">
                <h2><a href="forum.php">La salle d'entrainement</a></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
            </div>
            <aside class="last-messages">
                <a class="display-last-messages" <?php if($i%3 == 0):?>data-toggle="tooltip" data-placement="top" title="3 sujets non lus" <?php endif; ?> href="#"><span class="glyphicon glyphicon-chevron-right"></span></a>
                 <?php for($j=1; $j <= 3; $j++) :?>
                <article class="message-list">
                    <a href="subject.php#p26">
                    <h2>Réparation en urgence</h2>
                    <p class="last-message-info">Dernier message par Esther Mycroft le 26 juin 1989</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. </p>
                    </a>
                </article>
                 <?php endfor; ?>
            </aside>
        </article>
    <?php endfor; ?>
    </section>
    </div>

</section><!-- /.content -->

<?php include('parts/userbar.html'); ?>
<?php $currenttpl = 'index'; 
include('parts/footer.php'); ?>
