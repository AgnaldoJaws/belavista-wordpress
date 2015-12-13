<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  
	
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<style>
img, 
.wp-caption {
	max-width: 100%;
	height: 300px;
	
	
}

.title{	
	margin-left:auto;
	
	}
	
	.texto {
	width: 100%;
	text-align: justify;
	
	}
	
	.btn {
	margin-left:45%;
	}
</style>
	<body>		
		
		<div class="row" >
	
	

	<div id ="singleBorder2" class="col-md-offset-2 col-md-8">
		
  		<?php 	if (have_posts ()) : while ( have_posts () ) : 	the_post ();?>	
	 			
				<div class="panel panel-default">
   			<div class="panel-body">
				<div class="title">
									<h3><?php the_title();?></h3>
								</div>

								<div class="imagem">
									<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(700,700))?></a>
								</div>


								<div class="texto">
								<?php the_content();?>	
								</div>
				<a href="<?php echo get_option('home');?>" class="btn btn-success" role="button">Voltar</a>
				
				</div>
				</div>
				<?php endwhile;  else :?>
				<p>Nenhum post</p>				
				<?php endif;?>
				
	</div>

	
	
								
	</div>			
	         
	</body>
	</html>	
	



