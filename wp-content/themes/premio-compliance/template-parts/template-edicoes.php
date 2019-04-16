<?php /* Template Name: Edições */ ?>

<?php get_header(); ?>

<section>
	<div class="bg-vencedores" id="target1">
		<div class="container center p-t-100 p-b-100 p-t-c p-b-c">			
			<h1 class="text-right">Conheça os vencedores <br> das últimas edições</h1>
			<div class="box-sliders-round">
				<div class="caption">
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
			</div><!-- box-sliders-round -->
		</div>		
	</div>
</section>


<section>
	<div class="bg-marinho p-t-70 p-b-70 p-t-c p-b-c" id="target2">
		<div class="container">
			<h2 class="h-bordered"><i class="fa fa-camera" aria-hidden="true"></i> Galeria de fotos</h2>
			<div class="row p-t-50 p-l-15">
								
				<div class="col-12 col-md-4 col-gallery">					
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
					<h3>3ª Edição</h3>
				</div>
				
				<div class="col-12 col-md-4 col-gallery">					
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
					<h3>2ª Edição</h3>
				</div>
					
				<div class="col-12 col-md-4 col-gallery">					
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
					<h3>1ª Edição</h3>
				</div>
					
			</div>		
		</div>
		
		<div class="container p-t-70 p-t-c" id="target4">
			<h2 class="h-bordered"><i class="fa fa-play" aria-hidden="true"></i> Videos</h2>
		</div>
		<div class="container p-t-c">
			<div class="row p-t-50">
				<div class="col-12 col-md-6">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/pVCazkkI5BU" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="col-12 col-md-6 p-t-c">
					<iframe width="100%" height="100%" src="https://www.youtube.com/embed/N6SrPH6z7xY" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-depoimentos">
		<div class="container p-t-50 p-b-50 depoimentos p-t-c p-b-c">
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

<?php get_footer(); ?>