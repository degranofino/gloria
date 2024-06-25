<?php
/*------------------------------------------*/
/*------------------------------------------*/
/*------------------ MODAL -----------------*/
/*------------------------------------------*/
/*------------------------------------------*/
// FUNCION MODAL FOOTER
function custom_bootstrap_modal_gallery(){
  $output .= '<div class="modal fade modal__gallery" id="modalGallery" tabindex="-1" role="dialog" aria-labelledby="customLabel" aria-hidden="true">';
    $output .= '<div class="modal-dialog">';
      $output .= '<div class="modal-content">';
        $output .= '<div class="modal-body">';
          $output .= '<button type="button" class="close" data-dismiss="modal"> <span class="text">Close</span> <span aria-hidden="true">&times;</span></button>';
          $output .= '<div class="modal_navigation"><div class="image-caption"></div></div>';
          $output .= '<div id="modalBody"></div>';
        $output .= '</div>';
      $output .= '</div>';
    $output .= '</div>';
  $output .= '</div>';
  echo $output;
}
add_action('wp_footer','custom_bootstrap_modal_gallery');

// SHORTCODE, BOTON Y FUNCION
function custom_modal_gallery_function( $atts ) {

  $attributes = shortcode_atts( array(
      'text' => "",
      'imagenes' => 0,
      'clase' => ''
  ), $atts );

  if($attributes["clase"] != ''):
    $icono = '<div class="button_modal_gallery__icon"></div>';
  else:
    $icono = '';
  endif;

  $output .= '<a class="'.$attributes["clase"].' button_modal_gallery" data-images="'.$attributes["imagenes"].'">';
    $output .= $attributes["text"];
    $output .= $icono;
  $output .= '</a>';

  return $output;

}
add_shortcode( 'modal_gallery', 'custom_modal_gallery_function' );

add_action('wp_ajax_nopriv_show_gallery', 'show_gallery');
add_action('wp_ajax_show_gallery', 'show_gallery');

function show_gallery(){
  check_ajax_referer( 'ibenic-bootstrap', 'security' );

  $img = $_GET['imagenes'];
  $array = explode(",", $img);

  $args = array(
    'include' => $array,
    'post_type' => 'attachment',
    'post_status' => 'any',
    'posts_per_page' => -1,
    'orderby' => 'post__in', 
  );

  $attachments = get_posts( $args );

  $output .= '<div class="owl-carousel modal_carrusel">';
    foreach ( $attachments as $foto ) {
      $thumb_url_carrusel = wp_get_attachment_image_src($foto->ID,'proyecto_full', true);
      $attachment_title = get_the_title($foto->ID);
      // if($n == 1) { $imagen_fake = $thumb_url_carrusel[0]; }
      $output .= '<div class="item">';
        $output .= '<img src="'.$thumb_url_carrusel[0].'" title="'.$attachment_title.'">';
      $output .= '</div>'; 
      // $n++; 
    }
  $output .= '</div>';

  wp_send_json(array( 'galeria' => $output ));
  wp_die();
}