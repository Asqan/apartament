<?php get_header();?>


<main>
     <div class="smallTitle">
	      <?php the_field('pierwszy_tytul',8); ?>
	</div>
	<div class="bigTitle description">
		<?php the_field('tytul_i_opis_podstrony',8); ?>
		
	</div>
	<div class="smallestText">
		<?php the_field('tekst_nad_strzalka',8); ?>
		<a href="#" class="scrollTobottom"></a>
    </div>
	
	</main>

<?php get_footer();?>