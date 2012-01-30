<?php
function get_menu() { ?>
    <!-- menu -->
        <div id="menu">
            <ul id="nav">
                <?php wp_list_pages('sort_column=menu_order&depth=1&title_li=');?>
            </ul>
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
    <!-- / menu -->
<?php
}
?>
