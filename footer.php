<?php
/*
Template Name: footer
*/

?>
</div> <!-- end main content -->
<div class="footer-content">
  <div class="separator"><span></span></div>
  <div class="footer-reinsurance">
    <h2><?php if(ICL_LANGUAGE_CODE=='fr'): ?>
    <?php echo get_field( "titre_reassurance_", 221 );?>
    <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
    <?php echo get_field( "titre_reassurance_", 223 );?>
    <?php elseif(ICL_LANGUAGE_CODE=='ko'): ?>
    <?php echo get_field( "titre_reassurance_", 224 );?>
    <?php endif; ?></h2>
    <div class="reinsurance-container">
      <div class="reinsurance-item">
        <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
        <?php echo get_field( "reassurance-1", 221 );?>
        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        <?php echo get_field( "reassurance-1", 223 );?>
        <?php elseif(ICL_LANGUAGE_CODE=='ko'): ?>
        <?php echo get_field( "reassurance-1", 224 );?>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-icon-secure.svg" alt="">
      </div>
      <div class="reinsurance-item">
        <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
        <?php echo get_field( "reassurance_2_", 221 );?>
        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        <?php echo get_field( "reassurance_2_", 223 );?>
      <?php elseif(ICL_LANGUAGE_CODE=='ko'): ?>
        <?php echo get_field( "reassurance_2_", 224 );?>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-icon-fast.svg" alt="">
      </div>
      <div class="reinsurance-item">
        <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
        <?php echo get_field( "reassurance_3_", 221 );?>
        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        <?php echo get_field( "reassurance_3_", 223 );?>
      <?php elseif(ICL_LANGUAGE_CODE=='ko'): ?>
        <?php echo get_field( "reassurance_3_", 224 );?>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-icon-france.svg" alt="">
      </div>
      <div class="reinsurance-item">
        <?php if(ICL_LANGUAGE_CODE=='fr'): ?>
        <?php echo get_field( "reassurance_4_", 221 );?>
        <?php elseif(ICL_LANGUAGE_CODE=='en'): ?>
        <?php echo get_field( "reassurance_4_", 223 );?>
      <?php elseif(ICL_LANGUAGE_CODE=='ko'): ?>
        <?php echo get_field( "reassurance_4_", 224 );?>
        <?php endif; ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ldje-icon-quality.svg" alt="">
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="footer-container">
    <div class="col">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
    		<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
    </div>
    <div class="col">
      <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
    		<?php dynamic_sidebar( 'footer-2' ); ?>
			<?php endif; ?>
    </div>
    <div class="col">
      <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
    		<?php dynamic_sidebar( 'footer-1' ); ?>
			<?php endif; ?>
    </div>
  </div>
</footer>
<div class="copyright">
  <p>©2018 Tous droits réservés, design by <a href="#">Fresh Monkey</a></p>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/ldje-custom.js"></script>
</body>
</html>
