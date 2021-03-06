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
		<div class="p-relative container p-t-70 p-b-50 p-t-c p-b-c">			
			<div class="box-opac">
				<h1 class="text-center"><?php the_field('subtitulo_1'); ?></h1>
				<div>
					<span class="f-cinza"><?php the_field('conteudo_1'); ?></span>
				</div>				
				<div class="p-t-30 text-center">
					<?php the_field('video_1'); ?>
				</div>
				<div class="p-t-50 text-center">
					 <a href="https://normaiso.verdeghaia.com.br/arquivo-finalistas-iv-premio" class="btn-vinho">CONHEÇA OS FINALISTAS  DO IV PRÊMIO</a>
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
			<div class="timeline-event">18 horas <br> <span class="f-purple">Welcome drink</span></div>
			<div class="timeline-event">19 horas <br> <span class="f-purple">Abertura</span>
				<div class="row d-flex p-t-50">
					<div class="col-12 col-md-6">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/talks/vanessa-cochi.png" alt="vanessa cochi">
								</div>
								<div class="m-l-25">
									Mestre de cerimônia<br>
									<span class="f-purple">Vanessa Cochi</span>
								</div>
							</div>							
							<p>Jornalista, apresentadora e e mestre de cerimônias, Vanessa Cochi é uma profissional de excelência. É uma das mais requisitadas mestre de cerimônias em eventos corporativos de grandes empresas.</p>
						</div>
					</div>

					<div class="col-12 col-md-6">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/talks/tenor-dom.png" alt="tenor dom">
								</div>
								<div class="m-l-25">
									Participação especial<br>
									<span class="f-purple">Dom</span>
								</div>
							</div>							
							<p>Cantor vibrante e autêntico com uma voz que impressiona e emociona. Junto com o irmão, forma a dulpla Don & Juan.</p>
						</div>
					</div>
				</div>

			</div>

			<div class="timeline-event">19h25 horas <br> <span class="f-purple">Palestra Inovação Disruptiva</span>
				<div class="row p-t-50">
					<div class="col-12 col-md-6">
						<div class="box-talk">
							<div class="d-flex align-c">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/talks/Jose-Claudio-Securato.png" alt="José Claudio Securato">
								</div>
								<div class="m-l-25">
									Talk<br>
									<span class="f-purple">José Cláudio Securato</span>
								</div>
							</div>							
							<p>Sócio, presidente e professor da Saint Paul Escola de Negócios, Diretor da Faculdade de Tecnologia Saint Paul. Atua principalmente temas: economia brasileira, mercado financeiro e governança corporativa.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="timeline-event">20 horas <br> <span class="f-purple">Talk Gestão de riscos</span>
				<div class="row d-flex p-t-50">
					<div class="col-12 col-md-4">
						<div class="box-talk">
							<div class="text-center">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/talks/Daniela_pedroza.png" alt="Daniela pedroza">
								</div>
								<div class="m-l-25">
									<span class="f-purple">Daniela Pedroza</span>
								</div>
							</div>							
							<p>Diretora Técnica da Verde Ghaia. Auditora Líder ISO 14001, ISO 22000, OHSAS 18001, ISO 9001. Graduada em Engenharia Ambiental, com especialização em Negócios e Engenharia de Segurança do Trabalho.</p>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="box-talk">
							<div class="text-center">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/talks/Carlos-Pitanga.png" alt="Carlos Pitanga">
								</div>
								<div class="m-l-25">
									<span class="f-purple">Carlos Pitanga</span>
								</div>
							</div>							
							<p>COO Assurance, Americas na  BSI. Desenvolve organizações, fornecendo soluções de negócios. Atua nas áreas de , Governança, Risco e Compliance, Sistemas de Gestão e Serviços de Avaliação de Produtos</p>
						</div>
					</div>
				</div>
			</div>

			<div class="timeline-event">20:20 horas <br> <span class="f-purple">Compliance Brasil Talks</span>
				<div class="row p-t-50">
					<div class="col-12 col-md-4">
						<div class="box-talk">
							<div class="text-center">
								<div>
									<?php $image1 = get_field('img_talk_1');
									if( !empty($image1) ): ?>
										<img class="img-circle" src="<?php echo $image1['url']; ?>" alt="<?php echo $image1['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="m-l-25">
									<span class="f-purple"><?php the_field('talk_1'); ?></span>
								</div>
							</div>							
							<p><?php the_field('desc_talk_1'); ?></p>
						</div>
					</div>
					<div class="col-12 col-md-4">
						<div class="box-talk">
							<div class="text-center">
								<div>
									<?php $image2 = get_field('img_talk_2');
									if( !empty($image2) ): ?>
										<img class="img-circle" src="<?php echo $image2['url']; ?>" alt="<?php echo $image2['alt']; ?>" />
									<?php endif; ?>
								</div>
								<div class="m-l-25">
									<span class="f-purple"><?php the_field('talk_2'); ?></span>
								</div>
							</div>
							<p><?php the_field('desc_talk_2'); ?></p>
						</div>
					</div>
					<div class="col col-md-4">
						<div class="box-talk">
							<div class="text-center">
								<div>
									<?php $image3 = get_field('img_talk_3');
									if( !empty($image3) ): ?>
										<img class="img-circle" src="<?php echo $image3['url']; ?>" alt="<?php echo $image3['alt']; ?>" />
									<?php endif; ?>								
								</div>
								<div class="m-l-25">
									<span class="f-purple"><?php the_field('talk_3'); ?></span>
								</div>
							</div>
							<p><?php the_field('desc_talk_3'); ?></p>
						</div>
					</div>
				</div>				
					
				<!-- <div class="col">
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
				</div> -->
			</div>
			<div class="timeline-event">21 horas <br> <span class="f-purple">Premiação</span>
				<div class="p-t-30 p-b-30">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/premiacao.png" alt="prêmio compliance brasil 2019">
				</div>				
			</div>
			<div class="timeline-event">21:30 horas <br> <span class="f-purple">Coquetel</span>
				<p class="p-t-30">Comandado pelo Buffet Rullus, melhor e mais premiado de Minas Gerais</p>
				<p>Música ao vivo para descontrair, em um ambiente propício para um bom networking, troca de ideias e novas experiências.</p><br>

				<div class="box-talk">
					<div class="row align-c">
						<div class="col-12 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/Arnaldo-Brandao-Hanoi-Hanoi.png" alt="Arnaldo Brandão e Hanoi-Hanoi">
						</div>
						<div class="col-12 col-md-6">
							Show<br>
							<span class="f-purple">Arnaldo Brandão e Hanoi-Hanoi</span>
							<p>Arnaldo Brandão, multinstrumentista, um dos maiores precursores do Rock no Brasil, realizará um super show exclusivo para os convidados do Prêmio Compliance Brasil. Além de tocar e gravar com Raul Seixas, Gal Costa, Luiz Melodia, Jorge Mautner, Jorge Ben, Doces Bárbaros e etc, Brandão também fundou a banda Hanoi-Hanoi, que fará companhia para ele nesta apresentação. Aproveite para curtir os sucessos "Totalmente Demais", "Rádio Blabla" e "O Tempo Não Pára".</p>
						</div>
					</div>
				</div>

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