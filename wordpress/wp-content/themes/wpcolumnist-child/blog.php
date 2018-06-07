<div class="header">
  <h2>Blog Name</h2>
</div>

<?php
/*
Template Name: blog
*/
?>

<?php get_header(); ?>
<div class="container">
  <h1 class="text-center">Blog</h1>
    <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <h2>First Heading</h2>
          <h5>Title description, Dec 7, 2017</h5>
          <img src="<?php echo get_template_directory_uri(); ?>/image/img3.jpg" class="img-responsive" style="width:100%;" alt="Image"><br>
          <p>lorem Ipsum..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
        <div class="card">
          <h2>Second Heading</h2>
          <h5>Title description, Sep 2, 2017</h5>
          <img src="<?php echo get_template_directory_uri(); ?>/image/img4.jpg" class="img-responsive" style="width:100%; height:370px;" alt="Image"><br>
          <p>lorem Ipsum..</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
        </div>
      </div>
      <div class="rightcolumn">
        <div class="card">
          <h2>About Me</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/image/patrick_soon-shiong.jpg" class="img-responsive" style="width:100%;" alt="Image"> <br>
          <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
        </div>
        <div class="card">
          <h3>Popular Post</h3>
          <img src="<?php echo get_template_directory_uri(); ?>/image/ryan.jpg" class="img-responsive" style="width:100%;" alt="Image"><br>
          <img src="<?php echo get_template_directory_uri(); ?>/image/tuna-the-cat.png" class="img-responsive" style="width:100%;" alt="Image"><br>
          <img src="<?php echo get_template_directory_uri(); ?>/image/cat.png" class="img-responsive" style="width:100%;" alt="Image">
        </div>
        <div class="card">
          <h3>Follow Me</h3>
          <p>Some text..</p>
        </div>
      </div>
    </div>
</div>
<?php 
get_footer(); ?>