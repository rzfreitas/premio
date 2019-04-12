<?php /* Template Name: O Prêmio */ ?>

<?php get_header(); ?>

<section>
	<div class="nav-scroll">
		<a href="#target1" class="scroll_to">Categorias</a>
		<a href="#target2" class="scroll_to">Medotologia</a>
		<a href="#target3" class="scroll_to">Curadoria</a>
		<a href="#target4" class="scroll_to">Resultados</a>
	</div>
</section>

<section>
	<div class="p-relative p-t-100 p-b-100 p-t-c p-b-c">
		<img class="img-right-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-right-2.png" alt="prêmio compliance" />
		<div class="container">
			<div class="box-opac-round">
				<h1><?php the_title(); ?></h1>
				<?php while (have_posts()) : the_post(); ?>
				    <?php the_content(); ?>
				<?php endwhile; ?>
				<!--<div class="p-t-50">
					 <a href="" class="btn-vinho">SOLICITE A PARTICIPAÇÃO DA SUA EMPRESA</a>
				</div> -->
			</div>
		</div>
		<img class="img-left-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-left-2.png" alt="prêmio compliance" />
	</div>	
</section>

<!-- categorias -->
<section>
	<div class="container-fluid bg-marinho" id="target1">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c categorias">
			<h2><?php the_field('subtitulo_1'); ?></h2>
			<?php the_field('conteudo_2'); ?>

			<?php if( have_rows('categorias') ): ?>						
				<ul>
					<?php while( have_rows('categorias') ): the_row(); 				  
						// vars
						$image = get_sub_field('img_cat');				
						$content = get_sub_field('categoria');
						?>
						<li>
							<img src="<?php echo $image['url']; ?>" alt="Categorias prêmio compliance Brasil" />
							<h3> <?php echo $content ?></h3>
						</li>
					<?php endwhile; ?>
				</ul>			
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="p-relative p-t-100 p-b-100 p-t-c p-b-c" id="target2">
		<img class="img-right-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-right-3.png" alt="prêmio compliance" />
		<div class="container" id="s6">
			<div class="box-opac-round">
				<h2><?php the_field('subtitulo_3'); ?></h2>
				<?php the_field('conteudo_3'); ?>
			</div>	
		</div>
		<img class="img-left-3" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-left-3.png" alt="prêmio compliance" />
	</div>	
</section>

<!-- curadoria -->
<section>
<div class="bg-marinho">
	<div id="s5">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c f-branca" id="target3">
			<h2><?php the_field('subtitulo_4'); ?></h2>
			<?php the_field('conteudo_4'); ?>			
		</div>
	</div>
</div>
</section>

<section>
	<div class="p-relative p-t-100 p-b-100 p-t-c p-b-c" id="target4">
		<div class="container">
			<div class="box-opac-round">
				<h2><?php the_field('subtitulo_5'); ?></h2>
				<?php the_field('conteudo_5'); ?>
			
				<div class="row equal p-t-50">
					<div class="col quadrinho">
						<h2>1º lugar</h2>
						<?php the_field('quadrinho_1'); ?>
					</div>
					<div class="col quadrinho">
						<h2>2º e 3º lugar</h2>
						<?php the_field('quadrinho_2'); ?>
					</div>
				</div>
			</div>	
		</div>
		<img class="img-right-2" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-right-orange.png" alt="prêmio compliance" />
	</div>	
</section>

<?php get_footer(); ?>