<?php
/**
 * Created by PhpStorm.
 * User: yearzero
 * Date: 9/18/2016
 * Time: 11:03 AM
 */

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Theme One</title>
    <?php wp_head();?>
</head>
<?php if( is_front_page() ):
$awesome_classes = (array('the-class','my-class'));
else:
$awesome_classes = (array('no-class'));
endif;

?>

<body <?php body_class($awesome_classes/*added my own classes here through param of IF above*/); ?>><?php wp_nav_menu(array('theme_location'=>'primary')); ?>
