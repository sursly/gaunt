<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package gaunt
 */
?>

  </div><!-- #content -->

  <footer id="footer" class="site-footer" role="contentinfo">
    <p class="site-description"><?php bloginfo( 'description' ); ?></p><p class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?></p>

      <small>Gaunt Theme <a href="https://www.madebytyler.com">Made by Tyler</a></small>

  </footer>
</div><!-- #page -->



<?php wp_footer(); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.viewport.mini.js"></script>
<script type="text/javascript">

$(function() {
    var previous = "";
    $(window).bind("scroll", function(event) {
        $("h1#entry-title:above-the-top").each(function() {
            $("h2#small-title").addClass("on");});

        $("h1#entry-title:in-viewport").each(function() {
            $("h2#small-title").removeClass("on");});
          });

        });



var lastScrollTop = 0;
$(window).scroll(function(event){
   var st = $(this).scrollTop();
   if (st > lastScrollTop){
        $("#navigation").addClass("downscrolled");
         $("#navigation").removeClass("upscrolled");
           $("#navigation").removeClass("thetop");


   } else {
        // upscroll code
      $("#navigation").removeClass("downscrolled");
        $("#navigation").addClass("upscrolled");

   }
   lastScrollTop = st;
});

$( "#navigation" ).hover(function() {
  $( this ).toggleClass("hover");
  });

$( "#mobilebutton" ).click(function() {
  $( this ).toggleClass("clicked");
  $( "#navigation" ).toggleClass("active");
});

$(window).scroll(function(){

if($(window).scrollTop() < 1) {
    $("#navigation").addClass("thetop");
    $("#navigation").removeClass("downscrolled");
  }
});

$(window).scroll(function(){
	    if ($(window).scrollTop() == $(document).height()-$(window).height()){
	        $("#navigation").addClass("thebottom");
	        $("#navigation").removeClass("downscrolled");

	    }  else {
	         $("#navigation").removeClass("thebottom");

	    }
	});

</script>

</body>
</html>
