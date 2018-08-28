<?php 
	get_header();
?>
<main class="container">
	<div id="blog">

		<?php 
		//verificar se existe pagina oiu post
		if ( have_posts() ) {
			while ( have_posts() ) {
				echo "<article>";
				//recuperar a postagem ou pagina 
				the_post();
				//verificar s eexiste imagem destacada - thumbnail
				 if ( has_post_thumbnail() ) {
				 	//mostrar a imagem destacada
				 	the_post_thumbnail();
				 }
				 //mostrar o titulo
				echo "<h2>";
					the_title();
				echo "</h2>";

				//verificar se voc esta na pagina home
				if ( is_home() ) {
				 //se for pagina inicial
					the_excerpt();
					//adicionar um botao
				
					?>
					<p>
						<strong>Data da Postagem:</strong>
						<?php the_time('d/m/Y H:i'); ?>
						por
						<?php the_author_posts_link(); ?>
					</p>
					<p>
					<a href="<?php the_permalink(); ?>" class="btn btn-danger">Ler noticia</a>
					</p>
					<?php
				} else {
					//pagina interna
					//mostrar texto / conteudo
					the_content();
				}

				echo "</article>";
			}//while
			//botoes par aver mais posts
			?>
			<div class="float-left">
				<?php next_posts_link("Posts antigos") ?>
			</div>
			<div class="float-right">
				<?php previous_posts_link("Posts novos") ?>
			</div>
			<?php 
		}//have_posts
		else  {
			echo "<h1>Nada Encontrado</h1>";
		}//else
		?>
		
	</div>
	<aside>
		<?php
			//caregar os widgets 
			if ( dynamic_sidebar("lateral1") );
			 	
			 
		?>
		
	</aside>
	
</main>
<?php
	get_footer(); 
?>