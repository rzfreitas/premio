<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<section>
	<div class="banner-home">
		<div class="container">
			<div class="box-logo">
				<?php $logo_p = get_field('logo_banner');
				if( !empty($logo_p) ): ?>
					<img src="<?php echo $logo_p['url']; ?>" alt="<?php echo $logo_p['alt']; ?>" />
				<?php endif; ?>					
			</div>

			<div class="text-center p-t-50">
				<h2 class="f-branca"><?php the_field('data_local_evento'); ?></h2>
			</div>

			<div class="p-t-50">
				<div id="countdown"></div>
			</div>			
		</div>
	</div>
</section>

<section>
	<div class="p-relative">
		<img class="img-left" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-left.png">
		<div class="p-relative container p-t-70 p-b-100 p-t-c p-b-c">			
			<div class="box-opac">
				<h1><?php the_field('subtitulo_1'); ?></h1>
				<div>
					<span class="f-cinza"><?php the_field('conteudo_1'); ?></span>
				</div>				
				<div class="p-t-30 text-center">
					<?php the_field('video_1'); ?>
				</div>
			</div>
		</div>
		<img class="img-right" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-right.png">
	</div>
</section>

<section>
	<div class="container p-b-100 p-t-c p-b-c">
		<h2>PROGRAMAÇÃO</h2>
		<div class="timeline p-t-50">
			<div class="timeline-event">O EVENTO</div>
			<div class="timeline-event">19 horas <br> <span class="f-purple">Welcome drink</span></div>
			<div class="timeline-event">20 horas <br> <span class="f-purple">Compliance Brasil Talks</span>
				<div class="row d-flex p-t-50">
					<div class="col">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<?php $image1 = get_field('img_talk_1');
									if( !empty($image1) ): ?>
										<img class="img-circle" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="m-l-25">
									Talk<br>
									<span class="f-purple"><?php the_field('talk_1'); ?></span>
								</div>
							</div>							
							<p><?php the_field('desc_talk_1'); ?></p>
						</div>
					</div>
					<div class="col">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<?php $image2 = get_field('img_talk_2');
									if( !empty($image2) ): ?>
										<img class="img-circle" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="m-l-25">
									Talk<br>
									<span class="f-purple"><?php the_field('talk_2'); ?></span>
								</div>
							</div>
							<p><?php the_field('desc_talk_2'); ?></p>
						</div>
					</div>
				</div>
				<div class="row d-flex p-t-50">
					<div class="col">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<?php $image3 = get_field('img_talk_3');
									if( !empty($image3) ): ?>
										<img class="img-circle" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
									<?php endif; ?>								
								</div>
								<div class="m-l-25">
									Talk<br>
									<span class="f-purple"><?php the_field('talk_3'); ?></span>
								</div>
							</div>
							<p><?php the_field('desc_talk_3'); ?></p>
						</div>
					</div>
					<div class="col">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<?php $image4 = get_field('img_talk_4');
									if( !empty($image4) ): ?>
										<img class="img-circle" src="<?php echo $image4['url']; ?>" alt="<?php echo $image4['alt']; ?>" />
									<?php endif; ?>								
								</div>
								<div class="m-l-25">
									Talk<br>
									<span class="f-purple"><?php the_field('talk_4'); ?></span>
								</div>
							</div>
							<p><?php the_field('desc_talk_4'); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="timeline-event">21 horas <br> <span class="f-purple">Premiação</span></div>
			<div class="timeline-event">21:30 horas <br> <span class="f-purple">Coquetel</span>
				<p class="p-t-30">Comandado pelo Buffet Rullus, melhor e mais premiado de Minas Gerais</p>
				<p>Música ao vivo para descontrair, em um ambiente propício para um bom networking, troca de ideias e novas experiências.  </p>
			</div>
			<div class="timeline-event">23:30 horas - <span class="f-purple">Encerramento</span></div>
		</div>
	</div>
</section>


<section>
	<div class="p-t-30 p-b-30 p-t-c p-b-c bg-gray">
		<div class="container">
			<div class="row align-c">
				<div class="col-12 col-md-9">
					<div class="d-flex align-c">
						<div class="m-r-25">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/frame.png" alt="prêmio compliance ao vivo" />
						</div>
						<div>
							<h3>TRANSMISSÃO AO VIVO DO EVENTO</h3>
							<h4>Acompanhe pelas redes sociais</h4>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-3 p-t-c">
					<ul class="list-socials">
						<a href="https://www.facebook.com/verdeghaia"><li><i class="fa fa-facebook"></i></li></a>
						<a href="https://www.instagram.com/verdeghaia"><li><i class="fa fa-instagram"></i></li></a>
						<!-- <li><i class="fa fa-twitter"></i></li>
						<li><i class="fa fa-youtube"></i></li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="bg-map">
		<div class="container p-t-100 p-b-100 p-t-c p-b-c">
			<div class="row align-c">
				<div class="col-12 col-md-3">
					<h2>LOCAL</h2>
					<h3>SICEPOT-MG</h3>
					<p>Sindicato da Indústria da Construção Pesada no Estado de MG</p>
					<p>Avenida Barão Homem de Melo, nº 3090 – Belo Horizonte</p>
				</div>
				<div class="col-12 col-md-9 text-right">
					<div class="box-map">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3750.0930403348602!2d-43.96617438515629!3d-19.962589086585425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa69be54352ff39%3A0xe963104455c0d9c2!2sSindicato+da+Ind%C3%BAstria+da+Constru%C3%A7%C3%A3o+Pesada+no+Estado+de+MG!5e0!3m2!1spt-BR!2sbr!4v1554820112689!5m2!1spt-BR!2sbr" width="600" height="450" frameborder="0" style="border: 2px solid #E5E5E5; box-sizing: border-box;" allowfullscreen></iframe>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/content' , 'patrocinadores'); ?>

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

<?php get_footer(); ?>