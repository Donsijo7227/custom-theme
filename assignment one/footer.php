<header>
<div class="container">
<?php 
wp_nav_menu(
    array(
        'theme-location'=>'top-menu',
        //'menu'=> 'top bar',
        'menu_class'=>'top-bar'
    )
);
?>
</div>
</header>

<?php wp_footer();?>
</body>
</html>