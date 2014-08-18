        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="js/jquery-1.9.1.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/role-play-tools.js" type="text/javascript"></script>

        <!-- bootbox code -->
        <script src="js/plugins/bootbox/bootbox.min.js"></script>
        <script>
            $(".treeview.active").each(function(){
                $(this).children(".treeview-menu").show();
            });
            $(".treeview").click(function(){
                $(this).children(".treeview-menu").slideToggle();
            });
        </script>
        <script>
         $(".alert").alert();
            $('a[data-toggle=tooltip]').tooltip();
            $( ".datepicker" ).datepicker(
                {
                    changeMonth: true,
                    changeYear: true,
                    defaultDate:'01/01/1989'
                });
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