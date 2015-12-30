<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
	
  
  
  
</head>

<style>
img, 
.wp-caption {
	max-width: 100%;
	height: 300px;
	
}


	
</style>
	<body>		
		
		
	
	

	<section class="container-fluid jumbotron">
	
		<?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>	
	 			
				<div class="panel panel-default">
   			<div class="panel-body">
				<div class="title">
									<h3 class="text-center"><?php the_title();?></h3>
								</div>

								<div class="text-center">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(700,700))?></a>
								</div>


								<div class="text-justify">
								<?php the_content();?>
										
								</div>
				
				<div class="text-center">
				<a href="<?php echo get_option('home');?>" class="btn btn-success" role="button">Voltar</a>
				</div>
				</div>
				</div>
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
	
	</section>

	
	
								
			
	         
	</body>
	</html>	
	



