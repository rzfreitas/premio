<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section>
<div class="banner">
	<?php $img1 = get_field('imgs_fundo');
	if( ($img1) ): ?>
		<div style="background: url(<?php echo $img1['img_1']['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: calc(100vh - 100px); ">
		<div class="container v-center">
			<div class="">		
				<div class="content-banner box-logo">
					<?php $logo_p = get_field('logo_principal');
					if( !empty($logo_p) ): ?>
						<img src="<?php echo $logo_p['url']; ?>" alt="<?php echo $logo_p['alt']; ?>" />
					<?php endif; ?>					
				</div>
			</div>
		</div>	
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container p-t-50 p-b-50 p-t-c p-b-c crono text-center">
		<div class="data-evento p-t-30">
			Próxima Edição
		</div>
		<div class="hidden-md-down clock-builder-output p-t-50 m-l-20"></div>
		<div class="hidden-md-up clock-builder-small-output p-t-c p-b-c crono-mob"></div>
		<!-- <div class="text-center data-evento"><?php the_field('data_evento'); ?></div>
		<div class="text-center f-azul"><strong><?php the_field('local_horario'); ?></strong></div> -->
	</div>
</section>

<section>
<div class="banner">
	<?php $img2 = get_field('imgs_fundo');
	if( ($img2) ): ?>
		<div style="background: url(<?php echo $img2['img_2']['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: auto;">
		<div class="p-t-50 p-b-50 p-t-c p-b-c" id="s1">
			<div class="container vid">
				<h2 class="f-branca">Confira os melhores momentos do Prêmio:</h2><br>
				<iframe width="680" height="315" src="https://www.youtube.com/embed/N6SrPH6z7xY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container-fluid p-t-50 p-b-50 p-t-c p-b-c">
		<div class="container">
			<h2 class="text-center">GANHADORES DA III EDIÇÃO:</h2>	
			<div class="caption p-t-30">
				<div></div><div class="capt"><h2>Qualidade</h2></div><div></div>		
				<div></div><div class="capt"><h2>Saúde e Segurança</h2></div><div></div>				
				<div></div><div class="capt"><h2>Meio Ambiente</h2></div><div></div>
				<div></div><div class="capt"><h2>Responsabilidade Social</h2></div><div></div>
				<div></div><div class="capt"><h2>Segurança de Alimentos</h2></div><div></div>				
				<div></div><div class="capt"><h2>Energia</h2></div><div></div>				
				<div></div><div class="capt"><h2>Integrado</h2></div><div></div>				
				<div></div><div class="capt"><h2>Gestão de Fornecedores</h2></div><div></div>
			</div>
			<div class="slider">
				
				<?php if( have_rows('win_qualidade') ): ?>
					<?php while( have_rows('win_qualidade') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_qualidade');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_quali'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_ss') ): ?>
					<?php while( have_rows('win_ss') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_ss');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_ss'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_meioa') ): ?>
					<?php while( have_rows('win_meioa') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_meioa');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_ma'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_rs') ): ?>
					<?php while( have_rows('win_rs') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_rs');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_rs'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_sa') ): ?>
					<?php while( have_rows('win_sa') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_sa');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_sa'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_energ') ): ?>
					<?php while( have_rows('win_energ') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_energ');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_energ'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_int') ): ?>
					<?php while( have_rows('win_int') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_int');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_int'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

				<!-- -->

				<?php if( have_rows('win_gf') ): ?>
					<?php while( have_rows('win_gf') ): the_row();
						// vars
						$logo = get_sub_field('logo_win_gf');
						$rank = get_sub_field('ranking');
						$name = get_sub_field('name_win_gf'); ?>

						<div class="slick-item">
							<h3><?php echo $rank; ?></h3>
							<figure>
								<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt'] ?>" />
								<figcaption><?php echo $name; ?></figcaption>
							</figure>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid p-t-30 p-b-30 p-t-c p-b-c bg-gray text-center">
		<span class="revista">Baixe agora a revista do III Prêmio Compliance Brasil e tenha acesso aos cases das vencedoras desta edição</span><a class="btn-d btn-gray" href="https://www.verdeghaia.com.br/premio/Revista-Compliance-Brasil-2017.pdf" download>BAIXAR</a>
	</div>
</section>

<section>
<div class="f-branca">
	<?php $img3 = get_field('imgs_fundo');
	if( ($img3) ): ?>
		<div class="banner-overlay" style="background: url(<?php echo $img3['img_3']['url']; ?>) no-repeat center center fixed;    
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		height: auto;">
		<div class="p-t-50 p-b-50 p-t-c p-b-c" id="sInscricao">
			<div class="container">
				<?php while(have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile ?>
			</div>
		</div>
	<?php endif; ?>
</div>
</section>

<section>
	<div class="container p-t-50 p-b-50 p-t-c p-b-c">
		<h2>QUEM PODE PARTICIPAR</h2>
		<p>Todas as organizações que realizam o monitoramento de seu Desempenho Legal através da metodologia descrita nesse edital utilizando o SOGI – Software de Gestão Integrada. O IV Prêmio Compliance Brasil é realizado apenas no Brasil, não sendo concorrentes empresas de outras nacionalidades que utilizam o sistema.</p>
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

			<!-- <div class="w-block">
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
			</div> -->
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
<div class="bg-marinho">
	<div id="s5">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c f-branca">
			<h2><?php the_field('subtitulo_6'); ?></h2>
			<?php the_field('conteudo_8'); ?>			
		</div>
	</div>	
</div>
</section>

<section>
	<div class="container p-t-50 p-b-50 p-t-c p-b-c" id="s6">
		<h2><?php the_field('subtitulo_7'); ?></h2>
		<?php the_field('conteudo_9'); ?>			
	
		<div class="row equal">
			<div class="col quadrinho">
				<?php the_field('quadrinho_3'); ?>
			</div>
			<div class="col quadrinho">
				<?php the_field('quadrinho_4'); ?>
			</div>
		</div>
		<!-- <div class="text-center p-t-50 p-t-c">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#largeShoes">CLIQUE AQUI E VEJA OS INDICADOS
		</button>
		</div>
		Button trigger modal -->
		
	</div>
</section>

<section>
	<div class="bg-marinho p-t-70 p-b-70 p-t-c p-b-c">
		<div class="container">
			<h2>GALERIA DE FOTOS EDIÇÕES ANTERIORES</h2>
			<div class="row p-t-25">
				<div class="col-gallery col-12 col-md-4">
					<h3>3ª Edição</h3>
					<?php $images = get_field('galeria_3');
					if( $images ): ?>
					    <div class="photos">
				        	<?php foreach( $images as $image ): ?>
				            	<a data-fancybox="gallery3" href="<?php echo $image['url']; ?>">
				            		<img class="grow" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
				            	</a>
				        	<?php endforeach; ?>
					    </div>
					<?php endif; wp_reset_postdata(); ?>
					<i class="fa fa-camera" aria-hidden="true"></i>
				</div>

				<div class="col-gallery col-12 col-md-4">
					<h3>2ª Edição</h3>
					<?php $images = get_field('galeria_2');
					if( $images ): ?>
					    <div class="photos">
				        	<?php foreach( $images as $image ): ?>
				            	<a data-fancybox="gallery2" href="<?php echo $image['url']; ?>">
				            		<img class="grow" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
				            	</a>
				        	<?php endforeach; ?>
					    </div>					    
					<?php endif; wp_reset_postdata(); ?>
					<i class="fa fa-camera" aria-hidden="true"></i>
				</div>

				<div class="col-gallery col-12 col-md-4">
					<h3>1ª Edição</h3>
					<?php $images = get_field('galeria_1');
					if( $images ): ?>
					    <div class="photos">
				        	<?php foreach( $images as $image ): ?>
				            	<a data-fancybox="gallery1" href="<?php echo $image['url']; ?>">
				            		<img class="grow" src="<?php echo $image['sizes']['medium']; ?>" alt="<?php echo $image['alt']; ?>" />
				            	</a>
				        	<?php endforeach; ?>
					    </div>
					<?php endif; wp_reset_postdata(); ?>
					<i class="fa fa-camera" aria-hidden="true"></i>
				</div>				
			</div>		
		</div>
		
		<div class="container p-t-70 p-t-c">
			<h2>Assista o vídeo da II Edição do Prêmio</h2>
		</div>
		<div class="container text-center p-t-c">
			<iframe width="560" height="325" src="https://www.youtube.com/embed/pVCazkkI5BU" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>
</section>

<section>
	<div class="bg-gray">
		<div class="container p-t-50 p-b-50 depoimentos p-t-c p-b-c-">
			<h2>DEPOIMENTOS</h2>
			<?php if(get_field('depoimentos')): ?>
				<div class="depoimentos-slick">					
					<?php while(has_sub_field('depoimentos')): ?>
						<div class="depoimentos-item"><em><?php the_sub_field('relato'); ?></em>
							<strong><?php the_sub_field('relator'); ?></strong>
						</div>
					<?php endwhile; ?>
				</div>				
			<?php endif; ?>
		</div>
	</div>
</section>

<section>
	<div class="container-fluid" id="s7">
		<div class="container p-t-50 p-b-50 p-t-c p-b-c">
			<div class="row equal text-center">
				<div class="col">
					<h2>REALIZAÇÃO</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-vg.png" alt="verde ghaia" />
				</div>
				<div class="col">					
					<h2>APOIO</h2>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/abnt.png" alt="abnt" />					
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