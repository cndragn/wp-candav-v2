<?php
/**
 * Template Name: Front Page Template
 *
 * @package understrap
 */

get_header();

while ( have_posts() ) : the_post();
	get_template_part( 'loop-templates/content', 'empty' );
endwhile;
?>

<div class="container">
<div class="row">
  <div class="skills col-sm-12 col-md-7">
	<div class="card">
	  <div class="card-body">
		<h3 class="card-title">Skills</h3>
		<h4>Front End:</h4><p class="card-text">HTML, CSS, Sass, JavaScript, ReactJS, jQuery, Bootstrap</p>
		<h4>Back End:</h4><p class="card-text">Ruby, Ruby on Rails, RESTful API</p>
		<h4>Project Management:</h4><p class="card-text">Git, Agile, TDD, Pair Programming</p>
	  </div>
	</div>
  </div>
  <div class="contact col-sm-12 col-md-5">
		<div class="card">
			<div class="card-body">
			<h3 class="card-title">Get In Touch</h3>
			<!-- <p class="card-text"><i class="fa fa-pencil"></i>Blog</p> -->
			<p class="card-text"><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:cndragn@gmail.com">cndragn@gmail.com</a></p>
			<p class="card-text"><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:305-432-4789">305-432-4789</a></p>
			</div>
		</div>
		<div class="card recent">
		<div class="card-body">
			<h3 class="card-title">Recent Posts</h3>
				<ul>
					<?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<li><?php echo get_the_date(); ?>: <a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
					<?php 
					endwhile;
					wp_reset_postdata();
					?>
				</ul>
			</div>
		</div>
  </div>
</div>

<div class="row projects">
  <div class="col-md-12">
	<h3>Recent Projects</h3>
  </div>

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/ideaboard.png" alt="">
	<figcaption>
	  <h4>React | Ruby on Rails | API | Bootstrap</h4>
	</figcaption><a href="https://github.com/cndragn/ideaboard-react" target="_blank"></a>
  </div>

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/memori.png" alt="">
	<figcaption>
	  <h4>Ruby on Rails | API | OmniAuth | Materialize</h4>
	</figcaption><a href="https://github.com/cndragn/memori-app" target="_blank"></a>
  </div>

  <!-- <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/fotoscape.png" alt="">
	<figcaption>
	  <h4>Ruby on Rails | API | Materialize | Devise</h4>
	</figcaption><a href="https://github.com/cndragn/fotoscape" target="_blank"></a>
  </div> -->

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/calculator.png">
	<figcaption>
	  <h4>JavaScript | jQuery | HTML/CSS | Bootstrap</h4>
	</figcaption><a href="https://github.com/cndragn/javascript-calculator" target="_blank"></a>
  </div>

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/Unsolicited_Advice_Generator_w_API.png" alt="">
	<figcaption>
	  <h4>API | JavaScript | jQuery | HTML/CSS </h4>
	</figcaption><a href="https://github.com/cndragn/advice-generator" target="_blank"></a>
  </div>

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/pomodoro.png" alt="">
	<figcaption>
	  <h4>JavaScript | jQuery | HTML/CSS | Bootstrap</h4>
	</figcaption><a href="https://github.com/cndragn/pomodoro" target="_blank"></a>
  </div>

  <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/simon.png" alt="">
	<figcaption>
	  <h4>JavaScript | jQuery | HTML/CSS | Bootstrap</h4>
	</figcaption><a href="https://github.com/cndragn/simon-game" target="_blank"></a>
  </div>

  <!-- <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/twitch.png" alt="">
	<figcaption>
	  <h4>JavaScript | jQuery | JSON API | HTML/CSS</h4>
	</figcaption><a href="https://github.com/cndragn/twitch-tv" target="_blank"></a>
  </div> -->

  <!-- <div class="pg col-sm-12 col-md-6 col-lg-4 mb-20">
	<img src="http://www.candicedavidson.com/images/movie-trailers.png" alt="">
	<figcaption>
	  <h4>Python | HTML/CSS | Bootstrap</h4>
	</figcaption><a href="https://github.com/cndragn/studies/tree/master/udacity-python/movie" target="_blank"></a>
  </div> -->
</div>

</div>

<?php
get_footer();
