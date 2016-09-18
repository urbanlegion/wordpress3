<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 9/18/2016
 * Time: 11:03 AM
 */
?>


<footer>
    <p>My footer</p>
    <?php wp_nav_menu(array('theme_location'=>'secondary'));
    ?>
</footer>

<?php wp_footer();?>