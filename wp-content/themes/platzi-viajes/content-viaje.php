<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
	do_action( 'storefront_single_post_top' );

	/**
	 * Functions hooked into storefront_single_post add_action
	 *
	 * @hooked storefront_post_header          - 10
	 * @hooked storefront_post_content         - 30
	 */
	do_action( 'storefront_single_post' );

    $campos_viaje = get_post_custom( $post_id );

    // var_dump($campos_viaje);
    ?>
    
    <div class="campos_viaje">
          <div class="campo_viaje">
              <div class="viaje_label">Destino: </div>
              <div class="viaje_valor">
                  <?php echo $campos_viaje['destino'][0]; ?>
              </div>
          </div>
          <div class="campo_viaje">
              <div class="viaje_label">Vacunas obligatorias: </div>
              <div class="viaje_valor">
                  <?php echo $campos_viaje['vacunas_obligatorias'][0]; ?>
              </div>
          </div>
          <div class="campo_viaje">
              <div class="viaje_label">Vacunas Recomendadas: </div>
              <div class="viaje_valor">
                  <?php echo $campos_viaje['vacunas_recomendadas'][0]; ?>
              </div>
          </div>
          <div class="campo_viaje">
              <div class="viaje_label">Peligrosidad: </div>
              <div class="viaje_valor">
                  <?php echo $campos_viaje['peligrosidad'][0]; ?>
              </div>
          </div>
          <div class="campo_viaje">
              <div class="viaje_label">Moneda Local: </div>
              <div class="viaje_valor">
                  <?php echo $campos_viaje['moneda_local'][0]; ?>
              </div>
          </div>
      </div>

    
    <?php 
          do_action( 'storefront_single_post_bottom' );
    ?>

</article><!-- #post-## -->