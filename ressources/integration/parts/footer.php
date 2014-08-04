        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <!--<script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
        <!-- Sparkline -->
        

        <!-- AdminLTE App -->
        <script src="js/AdminLTE/app.js" type="text/javascript"></script>
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
        <?php include('script-'.$currenttpl.'.html');?>
    </body>
</html>