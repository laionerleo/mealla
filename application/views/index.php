<!DOCTYPE html>
<html style="margin-top: 0 !important" lang="en-US"> <!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<!-- aqui viene el codigo de cabezera -->
<?php $this->load->View('theme/head'); ?>
<!-- aqui viene el codigo de cabezera -->

<body class="home blog wpb-js-composer js-comp-ver-4.12.1 vc_responsive">
<div class="animsition">
    <?php $this->load->View('inicio'); ?>

    <?php $this->load->View('theme/cabezera') ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
    jQuery("#slider-22308").bxSlider({captions: true});
    });
</script>  
<!--aqui esta la secion de quienes somos   -->
    <?php $this->load->View('quienessomos'); ?>

 <!------------ /QUIENES SOMOS/--------- -->

<section id="separator_1" class="separator parallax-window" style="background-image: url('<?php echo base_url(); ?>application/assets/files/2012/07/bg-3.jpg')">
    <p>A tremor in the Force. The last time I felt it was in the presence of my old master</p>
</section>

<!--MISION Y VISION-->
<?php $this->load->view('misionvision'); ?>
<!-- MISION Y VISION-->
<section id="separator_2" class="separator parallax-window" style="background-image: url('<?php echo base_url(); ?>application/assets/files/2012/07/bg-2.jpg')">
        <p>A tremor in the Force. The last time I felt it was in the presence of my old master</p>
</section>
<script type="text/javascript">
            jQuery(window).load(function() {
                jQuery("#work-container-9743").mixItUp({
                  controls: {
                    activeClass: "on"
                  }
                });

                jQuery("#work-container-9743 a.load-project").on("click", function(e) {
                    e.preventDefault();
                    var url = jQuery(this).attr("href");
                    jQuery.get(url, function(data) {
                        jQuery(".filterable-9743 .portfolio_details").show(600).html(data);
                        var scrollTarget = jQuery(".filterable-9743 .portfolio_details").offset().top;
                        jQuery("html,body").animate({scrollTop:scrollTarget-80}, 1000, "swing");
                    });
                });
            });
</script>

<!-- /// aqui debe estar el codigo de quieres importar  -->
<?php $this->load->view('quieresimportar') ?>
<!-- end bg -->
<section id="separator_3" class="separator parallax-window" style="background-image: url('<?php echo base_url(); ?>application/assets/files/2012/07/bg-1.jpg')">
                <p>A tremor in the Force. The last time I felt it was in the presence of my old master</p>
</section>
<!-- aqui viene servicios -->
<?php $this->load->view('servicios'); ?>
<!-- end bg -->

<section id="separator_4" class="separator parallax-window" style="background-image: url('<?php echo base_url(); ?>application/assets/files/2012/07/bg-4.jpg')">
<p>A tremor in the Force. The last time I felt it was in the presence of my old master</p>
</section>
<!-- aqui viene servicios -->
<?php $this->load->view('contacto'); ?>
<!-- end bg -->
 
</div>
<footer>
    <p>&copy; 2019 leonardo ayala cayo  <a title="WordPress Themes" href="https://www.facebook.com/leonardo.ayala.75">servicios</a></p>
</footer>
<?php $this->load->view('theme/js'); ?>    
    
 
</body>

<!-- Mirrored from teothemes.com/wp/scrn/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 03 Feb 2019 21:11:01 GMT -->
</html>