<?php /* Template Name: Home */ ?>

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
			<div class="box-logo">
				<?php $logo_p = get_field('logo_principal');
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
	<?php endif; ?>
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

<?php get_footer(); ?>