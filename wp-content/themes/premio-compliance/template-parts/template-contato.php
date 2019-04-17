<?php /* Template Name: Contato */

get_header(); ?>

<section>
	<div class="bg-contato">
		<div class="container p-t-100 p-b-100 p-t-c p-b-c">
			<div class="row">
				<div class="col">
					<h1>CONTATO</h1>
					<strong><h4>Verde Ghaia</h4></strong>

					<p>(31) 2127-9137<br>
					<a href="mailto:comunicacao@verdeghaia.com.br">comunicacao@verdeghaia.com.br</a></p>

					<p>Av. Raja Gabaglia, nº 555, <br> 
					Cidade Jardim, Belo Horizonte</p>

					<a href="www.verdeghaia.com.br">www.verdeghaia.com.br</a>
					<div class="p-t-70">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/vg.png" alt="verde ghaia" />	
					</div>
					
				</div>
				<div class="col p-t-c">
					<div class="form-contato">						
						<?php while (have_posts()) : the_post(); ?>
						    <?php the_content(); ?>
						<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>