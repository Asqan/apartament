</section>
<footer>
<section class="footer__wrapper">
<div class="footer__social">
<?php wp_nav_menu(array('theme_location'=>'social-menu')); ?>
</div>
<div class="footer__menu"><?php wp_nav_menu(array('theme_location'=>'footer-menu')); ?></div>
<div class="footer__copyright"><p class="footer__copyright--content"><a href="http://example.com.">zdrojowa invest & zdrojowa hotels</a> &copy; 2017</p></div>

</section>
</footer>
<?php wp_footer() ?>
</body>
</html>