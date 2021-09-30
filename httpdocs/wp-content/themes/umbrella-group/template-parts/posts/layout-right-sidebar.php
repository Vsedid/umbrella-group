<?php 
	do_action('flatsome_before_blog');

?>

<?php if(!is_single() && flatsome_option('blog_featured') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="row row-large <?php if(flatsome_option('blog_layout_divider')) echo 'row-divided ';?>">
	
	<div class="large-8 col">
	<?php if(!is_single() && flatsome_option('blog_featured') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(flatsome_option('blog_style_archive') && (is_archive() || is_search())){

			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style_archive') );
		} else {
			get_template_part( 'template-parts/posts/archive', flatsome_option('blog_style') );
		}
	?>
	</div> <!-- .large-9 -->

	<div class="post-sidebar large-4 col ">
		<?php get_sidebar(); ?>



<?php if($_SERVER['REQUEST_URI']=='/blog/auditorskaya-proverka/'):?>
<div>
<h2>Наши сотрудники</h2>
<p >Над вашими проектами будут работать профессионалы:</p>
<div class="giga-sotr">
<div class="img-sotr">
<img src="/wp-content/uploads/sotr-1.jpg" alt="Ведущий аудитор Грошева А. В.">
</div>
<div class="p-sotr">
<p class="big indent-killing">Алина Владимировна Грошева</p>
<p class="indent-killing">ведущий аудитор</p></div>
</div>

<div class="giga-sotr">
<div class="img-sotr">
<img src="/wp-content/uploads/sotr-2.jpg" alt="Ведущий аудитор Музыкина Н. Н.">
</div>
<div class="p-sotr">
<p class="big indent-killing">Надежда Николаевна Музыкина</p>
<p class="indent-killing">ведущий аудитор</p>
</div>

</div>
</div>
<?php elseif($_SERVER['REQUEST_URI']=='/blog/auditorskaya-proverka-bukhgalterskoy-otchetnosti/'):?>
<div>
<h2>Наши сотрудники</h2>
<p >Над вашими проектами будут работать профессионалы:</p>
<div class="giga-sotr">
<div class="img-sotr">
<img src="/wp-content/uploads/sotr-1.jpg" alt="Ведущий аудитор Грошева А. В.">
</div>
<div class="p-sotr">
<p class="big indent-killing">Алина Владимировна Грошева</p>
<p class="indent-killing">ведущий аудитор</p></div>
</div>

<div class="giga-sotr">
<div class="img-sotr">
<img src="/wp-content/uploads/sotr-2.jpg" alt="Ведущий аудитор Музыкина Н. Н.">
</div>
<div class="p-sotr">
<p class="big indent-killing">Надежда Николаевна Музыкина</p>
<p class="indent-killing">ведущий аудитор</p>
</div>

</div>
</div>	
	<?php endif;?> 
	</div><!-- .post-sidebar -->

<?php get_similar_posts() ?>

</div><!-- .row -->

<?php 
	do_action('flatsome_after_blog');
?>
<?php

function get_similar_posts(){

?>
<div class="large-12 col">
    <p class="h2 for-h2 feedback-subheader">Читать еще</p>

    <p class="feedback-subheader-right">
        <a style="text-decoration: underline;" href="/about/cases/"> Посмотреть все</a></p>
    <?php
    if (!isset($include)) {$include='';}
    $args = array(
        'order'   => 'DESC',
        'orderby' => 'date',
        'exclude' => '',
        'include' => $include,
        'numberposts' => 2,
        'category' => '',
    );

    $pages = get_posts($args);
    umbrella_draw_tiles($pages, 'blogposts');
    ?>
</div>
<?php
}
?>
