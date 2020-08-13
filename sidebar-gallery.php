<aside class="sidebar--gallery">

  <?php
        $taxonomy_name = 'beforeaftercategory';
        $custom_terms = get_terms(array( 'taxonomy' => $taxonomy_name, 'parent' => 0, 'orderby' => 'term_order' )); 
        $i=0;                            
        echo '<div class="sidebar__widget">';
  if (!is_singular('bagallery')) {
      //echo '<div class="censor">Censor photos <label class="switch"><input class="toggle-blur" type="checkbox"><span class="slider round"></span></label></div>';
  }
  foreach ($custom_terms as $custom_term) {
      $termchildren = get_terms(array( 'taxonomy' => $taxonomy_name, 'parent' => $custom_term->term_id, 'orderby' => 'term_order' )); 
      echo '<div class="section__toggle closed">';
        echo '<h5 class="toggle">'.$custom_term->name.'<i class="fa fa-sort-down"></i></h5>';
        echo '<ul class="toggle__down">';
      foreach ( $termchildren as $child ) {
          $term = get_term_by('id', $child, $taxonomy_name);
          echo '<li><a href="' . get_term_link($child, $taxonomy_name) . '">'.$child->name.'</a></li>';
      }
        echo '</ul>';
      echo '</div>';
  }
        echo '</div>';
    ?>
</aside>