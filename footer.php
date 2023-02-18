<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CodeCamp
 */

?>
<div id="footer">
    <?php 
        $blogname = get_bloginfo('name');
        echo '<p><b>'.$blogname.' &copy;</b></p>';
    ?>
</div>
</div> <!--closing site from index-->
<?php wp_footer(); ?>

</body>
</html>
