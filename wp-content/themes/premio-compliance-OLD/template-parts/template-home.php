<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section>
	<div class="container-fluid img-banner">		
		<div class="content-banner crono">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/compliance-brasil.png" alt="prêmio compliance brasil 2017" />
			<div class="hidden-md-down clock-builder-output p-t-70 m-l-20"></div>
			<div class="hidden-md-up clock-builder-small-output p-t-c p-b-c crono-mob"></div>
			<div class="text-center data-evento"><?php the_field('data_evento'); ?></div>
			<div class="text-center f-azul"><strong><?php the_field('local_horario'); ?></strong></div>
		</div>		
	</div>
</section>

<section>
	<div class="container-fluid p-t-50 p-b-50 p-t-c p-b-c img-bg" id="s1">
		<div class="container content-block">
			<?php while(have_posts()) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile ?>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid bg-azul-claro" id="s2">
		<div class="container no-p p-t-50 p-b-50 p-t-c p-b-c">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/participar.png" alt="participar prêmio compliance brasil 2017"></img>
			<h2><?php the_field('subtitulo_2'); ?></h2>
			<p><?php the_field('conteudo_2'); ?></p>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid bg-marinho" id="s3">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c categorias">
			<h2><?php the_field('subtitulo_3'); ?></h2>
			<?php the_field('conteudo_3'); ?>

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

			<div class="w-block">
				<h2><?php the_field('subtitulo_4'); ?></h2>
				<?php the_field('conteudo_4'); ?>
				<div class="row equal">
					<div class="col quadrinho m-b-c">
						<?php the_field('quadrinho_1'); ?>
					</div>
					<div class="col quadrinho">
						<?php the_field('quadrinho_1'); ?>
					</div>
				</div>				
			</div>
			<div class="p-t-50 p-t-c">
				<?php the_field('conteudo_5'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid bg-cinza" id="s4">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c">
			<h2><?php the_field('subtitulo_5'); ?></h2>
			<?php the_field('conteudo_6'); ?>
			<div class="w-block f-preta">
				<?php the_field('conteudo_7'); ?>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid img-bg-2" id="s5">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c v-center f-branca">
			<h2><?php the_field('subtitulo_6'); ?></h2>
			<?php the_field('conteudo_8'); ?>			
		</div>
	</div>
</section>

<section>
	<div class="container p-t-50 p-b-50 p-t-c p-b-c" id="s6">
		<h2><?php the_field('subtitulo_7'); ?></h2>
		<?php the_field('conteudo_9'); ?>			
	
		<div class="row equal">
			<div class="col quadrinho m-b-c">
				<?php the_field('quadrinho_3'); ?>
			</div>
			<div class="col quadrinho">
				<?php the_field('quadrinho_4'); ?>
			</div>
		</div>
		<div class="text-center p-t-50">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeShoes">CLIQUE AQUI E VEJA OS INDICADOS
		</button>
		</div>
		<!-- Button trigger modal -->
		
	</div>
</section>

<section>
	<div class="bg-marinho p-t-50 p-b-70 p-t-c p-b-c-50">
		<div class="container">
			<h2>Galeria</h2>
		</div>
		<div class="container">
			<div class="edicao1">1ª Edição</div><?php $images = get_field('galeria_1');
			if( $images ): 
				echo '<div id="slider" class="flexslider">';
					echo '<ul class="slides">';
						foreach( $images as $image ):
							echo '<li>';
								echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
							echo '</li>';
						endforeach;
					echo '</ul>';
				echo '</div>';
			endif; ?>
		</div>
		<div class="container">
			<div class="edicao2">2ª Edição</div><?php $images = get_field('galeria_2');
			if( $images ): 
				echo '<div id="slider" class="flexslider">';
					echo '<ul class="slides">';
						foreach( $images as $image ):
							echo '<li>';
								echo '<img src="'.$image['url'].'" alt="'.$image['alt'].'" />';
							echo '</li>';
						endforeach;
					echo '</ul>';
				echo '</div>';
			endif; ?>
		</div>
		
		<div class="container p-t-30">
			<h2>Assista o vídeo para saber mais</h2>
		</div>
		<div class="container bg-preto text-center p-t-c">
			<iframe width="560" height="325" src="https://www.youtube.com/embed/pVCazkkI5BU" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="container p-t-30 depoimentos">
			<h2>Depoimentos</h2>
			<?php if(get_field('depoimentos')): ?>
				<div class="flexslider-depoimento">
					<ul class="slides">
						<?php while(has_sub_field('depoimentos')): ?>
							<li><em><?php the_sub_field('relato'); ?></em>
								<strong><?php the_sub_field('relator'); ?></strong>
							</li>
						<?php endwhile; ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid bg-azul-claro" id="s7">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c">
			<div class="row equal text-center p-t-50">
				<div class="col">
					<h2>Realização</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-vg.png" alt="verde ghaia" />
				</div>
				<div class="col">					
					<h2>Apoio</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/abnt.png" alt="abnt" />
					<img class="m-l-50" src="<?php echo get_template_directory_uri(); ?>/assets/images/home/hsm.png" alt="hsm" />
				</div>
			</div>
		</div>
	</div>
</section>

<!-- The modal 
<div class="modal fade" id="largeShoes" tabindex="-1" role="dialog" aria-labelledby="modalLabelLarge" aria-hidden="true">
	<div class="modal-dialog modal-xs">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
					<h4 class="modal-title" id="modalLabelLarge">Indicados ao Prêmio Compliance Brasil 2017</h4>
				</div>

				<div class="modal-body hidden-md-down">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/Indicados-premio-compliance-2017.png" alt="Indicados ao Prêmio Compliance Brasil 2017"/>
				</div>
				<div class="modal-body hidden-md-up">
					<a href="<?php echo get_template_directory_uri(); ?>/assets/images/home/Indicados-premio-compliance-2017.png"><button type="button" class="btn btn-primary" target="_blank">CLIQUE PARA VISUALIZAR</button></a>
				</div>
			</div>
		</div>
	</div>
</div>-->

<?php get_footer(); ?>