<?php
/*------------------------------------------*/
/*------------------------------------------*/
/*--------------- SHORTCODES ---------------*/
/*------------------------------------------*/
/*------------------------------------------*/

/*------------- FORMULARIO OVERLAY -----------*/
function formulario_brochure_shortcode( $atts ) {

  $modales = get_field('modales', 'option');

  $output .= '<div class="overlay_form" id="brochure">';   

    // WRAP
    $output .= '<div class="overlay_wrap">';

      // CLOSE
      $output .= '<button type="button" class="close btn_close" data-dismiss="modal"> <span class="text">Close</span> <span aria-hidden="true">&times;</span></button>';

      $output .= '<div class="container-fluid">';
        $output .= '<div class="row">';
          $output .= '<div class="col text-center">';         

            // FORMULARIO
            $output .= '<div class="overlay_carrusel">';
              $output .= '<a>';
                $output .= '<div>';
                  $output .= '<img src="'.get_bloginfo( 'template_url' ).'/img/icono_eye.svg">';
                  $output .= '<span class="mt-3">PREVIEW</span>';
                $output .= '</div>';
              $output .= '</a>';

              $output .= '<div class="owl-carousel">';
                foreach ($modales['galeria_brochure'] as $image) {              
                  $output .= '<div class="item">';
                    $output .= '<img src="'.$image.'">';
                  $output .= '</div> ';                 
                }
              $output .= '</div>';
            $output .= '</div>';

            $output .= '<a class="btn_close btn_icon button_overlay mt-5" data-form="download_brochure">';
              $output .= '<img src="'.get_bloginfo( 'template_url' ).'/img/btn_brochure.svg">';
              $output .= '<span>'.__('Descargar brochure','haciendaleala').'</span>';
            $output .= '</a>';

          $output .= '</div>';
        $output .= '</div>';
      $output .= '</div>  ';
    $output .= '</div> ';   

  $output .= '</div>';
  return $output;
}
add_shortcode('formulario_brochure', 'formulario_brochure_shortcode');

/*------------- FORMULARIO OVERLAY -----------*/
function formulario_download_brochure_shortcode( $atts ) {
  $output .= '<div class="overlay_form" id="download_brochure">';   

    // WRAP
    $output .= '<div class="overlay_wrap">';

      // CLOSE
      $output .= '<button type="button" class="close btn_close" data-dismiss="modal"> <span class="text">Close</span> <span aria-hidden="true">&times;</span></button>';

      $output .= '<div class="container-fluid">';
        $output .= '<div class="row">';
          $output .= '<div class="col">';         

            // FORMULARIO
            $output .= '<div class="form_block form_brouchure">';
              $output .= '<div class="form_block_target form_submit text-left">';
                $output .= do_shortcode('[contact-form-7 id="221" title="Formulario brochure"]');
              $output .= '</div>';
              $output .= '<div class="form_block_target form_thanks my-5 text-center">';
                $output .= '<div class="fuente_36">'.__('Gracias', 'haciendaleala').'</div>';
                $output .= '<p>'.__('Gracias por interesarte en nuestras residencias', 'haciendaleala').'</p>';
                $output .= '<a href="#" class="btn_icon mt-5">';
                  $output .= '<img src="'.get_bloginfo( 'template_url' ).'/img/btn_brochure.svg">';
                  $output .= '<span>'.__('Descargar brochure','haciendaleala').'</span>';
                $output .= '</a>';
              $output .= '</div>  ';
            $output .= '</div>';

          $output .= '</div>';
        $output .= '</div>';
      $output .= '</div>  ';
    $output .= '</div> ';   

  $output .= '</div>';
  return $output;
}
add_shortcode('formulario_download_brochure', 'formulario_download_brochure_shortcode');

/*------------- FORMULARIO OVERLAY -----------*/
function formulario_player_shortcode( $atts ) {
  $output .= '<div class="overlay_form" id="player">';   

    // WRAP
    $output .= '<div class="overlay_wrap">';

      // CLOSE
      $output .= '<button type="button" class="close btn_close" data-dismiss="modal"> <span class="text">Close</span> <span aria-hidden="true">&times;</span></button>';

      $output .= '<div class="container-fluid">';
        $output .= '<div class="row">';
          $output .= '<div class="col">';         

            // FORMULARIO
            $output .= '<div class="form_block form_brouchure">';
              $output .= '<div class="form_block_target form_submit text-left">';
                $output .= do_shortcode('[contact-form-7 id="222" title="Formulario player"]');
              $output .= '</div>';
              $output .= '<div class="form_block_target form_thanks my-5 text-center">';
                $output .= '<a data-html="#video1" class="video_player btn_close btn_icon">';
                  $output .= '<img src="'.get_bloginfo( 'template_url' ).'/img/btn_play_fullvideo.svg">';
                  $output .= '<span>'.__('Ver video','haciendaleala').'</span>';
                $output .= '</a>';
              $output .= '</div>  ';
            $output .= '</div>';

          $output .= '</div>';
        $output .= '</div>';
      $output .= '</div>  ';
    $output .= '</div> ';   

  $output .= '</div>';
  return $output;
}
add_shortcode('formulario_player', 'formulario_player_shortcode');