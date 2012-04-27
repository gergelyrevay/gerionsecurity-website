<?php
function get_menu() { ?>
    <!-- menu -->
        <div id="menu">
            <ul id="nav">
                <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
            <li class="page_item">
                <a id="follow-me-menu" title="" href="/?feed=rss2">follow me</a>
            </li>
            </ul>
        <?php include (TEMPLATEPATH . '/searchform.php');?>
        </div>
    <!-- / menu -->
<?php
}

if(!function_exists('_log')){
  function _log( $message ) {
    if( WP_DEBUG === true ){
      if( is_array( $message ) || is_object( $message ) ){
        error_log( print_r( $message, true ) );
      } else {
        error_log( $message );
      }
    }
  }
}

?>
