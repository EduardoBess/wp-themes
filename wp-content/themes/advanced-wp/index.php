<!DOCTYPE html>
<html>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php bloginfo('name'); ?></title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
   <?php wp_head(); ?>   <title>Advanced WP Theme</title>
   <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
   <header>
      <div class="container">
         <h1>
         	<a href="index.html">
         	<?php bloginfo('name'); ?>
         	</a>
         	<small><?php bloginfo('name'); ?></small>
     	 </h1>
      
	     <div class="h_right">
			  <form method="get" action="<?php esc_url(home_url('/')); ?>">
			     <input type="text" name="s" placeholder="Search...">
			  </form>
		 </div>
	  </div>
   </header>

   <nav class="nav main-nav">
	   <div class="container">
	    <?php 
	      	$args = array(
	      		'theme_location' => 'primary'
	      	);
	    ?>

	    <?php wp_nav_menu($args); ?>
	    </div>
	</nav>

	<div class="container content">
	   <div class="main block">
	      <article class="post">
	         <h2>Blog Post 1</h2>
	         <p class="meta">Posted at 11:00 on May 9 by admin</p>
	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam eleifend ligula, non mattis purus feugiat et. Maecenas dignissim nisi eu enim egestas sollicitudin. Proin tincidunt tortor ac ligula dictum fringilla. Donec lorem nisl, convallis nec tempor ac, mattis in leo. Praesent volutpat pulvinar odio, quis interdum mi luctus quis. Sed id aliquet nisi, et convallis ante. Quisque quis sapien sodales, commodo lorem sollicitudin, maximus lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc nisl, pellentesque quis vestibulum viverra, aliquam sit amet turpis. Donec non magna nunc. Curabitur gravida at diam quis sollicitudin. Cras mattis velit quis luctus consectetur. Mauris purus augue, porta scelerisque tortor aliquet, suscipit aliquam erat.</p>
	         <a class="button" href="#">Read More</a>
	      </article>

	      <article class="post">
	         <h2>Blog Post 1</h2>
	         <p class="meta">Posted at 11:00 on May 9 by admin</p>
	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam eleifend ligula, non mattis purus feugiat et. Maecenas dignissim nisi eu enim egestas sollicitudin. Proin tincidunt tortor ac ligula dictum fringilla. Donec lorem nisl, convallis nec tempor ac, mattis in leo. Praesent volutpat pulvinar odio, quis interdum mi luctus quis. Sed id aliquet nisi, et convallis ante. Quisque quis sapien sodales, commodo lorem sollicitudin, maximus lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc nisl, pellentesque quis vestibulum viverra, aliquam sit amet turpis. Donec non magna nunc. Curabitur gravida at diam quis sollicitudin. Cras mattis velit quis luctus consectetur. Mauris purus augue, porta scelerisque tortor aliquet, suscipit aliquam erat.</p>
	         <a class="button" href="#">Read More</a>
	      </article>

	      <article class="post">
	         <h2>Blog Post 1</h2>
	         <p class="meta">Posted at 11:00 on May 9 by admin</p>
	         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus aliquam eleifend ligula, non mattis purus feugiat et. Maecenas dignissim nisi eu enim egestas sollicitudin. Proin tincidunt tortor ac ligula dictum fringilla. Donec lorem nisl, convallis nec tempor ac, mattis in leo. Praesent volutpat pulvinar odio, quis interdum mi luctus quis. Sed id aliquet nisi, et convallis ante. Quisque quis sapien sodales, commodo lorem sollicitudin, maximus lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nunc nisl, pellentesque quis vestibulum viverra, aliquam sit amet turpis. Donec non magna nunc. Curabitur gravida at diam quis sollicitudin. Cras mattis velit quis luctus consectetur. Mauris purus augue, porta scelerisque tortor aliquet, suscipit aliquam erat.</p>
	         <a class="button" href="#">Read More</a>
	      </article>
	   </div>

	   <div class="side">
		   <div class="block">
		   <h3>Sidebar Head</h3>
		   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
		   Nam vel diam hendrerit erat fermentum aliquet sed eget arcu.</p>
		   <a class="button">More</a>
   	    	</div>
		</div>
	</div>

	<footer class="main-footer">
	   <div class="container">
		   <div class="f_left">
		      <p>&copy; 2017 - Advanced WP Theme</p>
		   </div>
		   <div class="f_right">
		      <ul>
		      <li><a href="index.html">Home</a></li>
		      <li><a href="about.html">About</a></li>
		      <li><a href="#">Services</a></li>
		      </ul>
		   </div>
	   </div>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>