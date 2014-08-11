        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/role-play-tools.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
        <!-- bootbox code -->
        <script src="js/plugins/bootbox/bootbox.min.js"></script>

        <script>
         $(".alert").alert()
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
        <?php include('script-'.$currenttpl.'.html');?>
    </body>
</html>