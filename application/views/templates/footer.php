<div class="container-fluid">
    <div class="row" style="background: #eee; padding-top: 30px;padding-bottom: 15px;">
        <div class="col-sm-6 col-md-4">
            <h6>Braja Market Indo</h6>
        </div>
        <div class="col-sm-6 col-md-4">
            <h6>Kontak</h6>
        </div>
        <div class="col-sm-6 col-md-4">
            <h6>social</h6>
        </div>
    </div>
</div>
</div>
<!-- end of main -->
</div>
<!-- end of wrapper -->
<footer class="footer" data-background-color="black">
    <div class="container">
        <nav>
            <ul>
                <li>
                    <a href="http://presentation.creative-tim.com">
                        About Us
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">
            &copy;
            <script>
                document.write(new Date().getFullYear())

            </script>, Braja Market Indo
        </div>
    </div>
</footer>


<!--   Core JS Files   -->
<script src="<?php echo base_url('assets');?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('assets');?>/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('assets');?>/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url('assets');?>/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('assets');?>/js/eleven.js" type="text/javascript"></script>
<script src="<?php echo base_url('assets');?>/js/bootstrap-treeview.js"></script>
<script src="<?php echo base_url('assets');?>/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
            $("html, body").animate({
                scrollTop: $('.section-download').offset().top
            }, 1000);
        }
    }

</script>
<script>
    /**
 *  BootTree Treeview plugin for Bootstrap.
 *
 *  Based on BootSnipp TreeView Example by Sean Wessell
 *  URL:    http://bootsnipp.com/snippets/featured/bootstrap-30-treeview
 *
 *  Revised code by Leo "LeoV117" Myers
 *
 */
$.fn.extend({
    treeview:   function() {
        return this.each(function() {
            // Initialize the top levels;
            var tree = $(this);
            
            tree.addClass('treeview-tree');
            tree.find('li').each(function() {
                var stick = $(this);
            });
            tree.find('li').has("ul").each(function () {
                var branch = $(this); //li with children ul
                
                branch.prepend("<i class='tree-indicator fa fa-angle-right'></i>");
                branch.addClass('tree-branch');
                $('.tree-branch').css("list-style","none");
                branch.on('click', function (e) {
                    if (this == e.target) {
                        var icon = $(this).children('i:first');
                        icon.toggleClass("fa-angle-down");
                        $(this).children().children().toggle();
                    }
                })
                branch.children().children().toggle();
                
                /**
                 *  The following snippet of code enables the treeview to
                 *  function when a button, indicator or anchor is clicked.
                 *
                 *  It also prevents the default function of an anchor and
                 *  a button from firing.
                 */
                branch.children('.tree-indicator, button, a').click(function(e) {
                    branch.click();
                    e.preventDefault();
                });
            });
        });
    }
});

/**
 *  The following snippet of code automatically converst
 *  any '.treeview' DOM elements into a treeview component.
 */
$(window).on('load', function () {
    $('.treeview').each(function () {
        var tree = $(this);
        tree.treeview();
    })
})
</script>
<script>
    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')

</script>
</body>
</html>
