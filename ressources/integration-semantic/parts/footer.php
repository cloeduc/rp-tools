
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="javascript/semantic.min.js" type="text/javascript"></script>
<script src="javascript/application/app.js" type="text/javascript"></script>
<script src="javascript/jquery-ui.min.js" type="text/javascript"></script>
<script>
 $('.toggle-characters').click(function() {
    var $marginLefty = $(this).next();
    $marginLefty.animate({
      marginLeft: parseInt($marginLefty.css('marginLeft'),10) == 0 ?
        $marginLefty.outerWidth() :
        0
    });
    $(this).animate({
      marginLeft: parseInt($marginLefty.css('marginLeft'),10) == 0 ?
        $marginLefty.outerWidth() :
        0
    });
  });
</script>
        <?php if(file_exists('script-'.$currenttpl.'.html')) {
                include('script-'.$currenttpl.'.html');
}?>
    </body>
</html>