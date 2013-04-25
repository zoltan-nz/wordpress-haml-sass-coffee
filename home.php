<?php get_header(); ?>
<div class='carousel slide' id='myCarousel'>
  <div class='carousel-inner'>
    <div class='item' style='background-color:gray'>
      <img src=''>
      <div class='container'>
        <div class='carousel-caption'>
          <h1>Example headline 1</h1>
          <p class='lead'>
            Longer text
          </p>
          <a class='btn btn-large btn-danger' href='#'>Sign up today</a>
        </div>
      </div>
    </div>
    <div class='item' style='background-color:gray'>
      <img src=''>
      <div class='container'>
        <div class='carousel-caption'>
          <h1>Example headline 2</h1>
          <p class='lead'>
            Longer text
          </p>
          <a class='btn btn-large btn-danger' href='#'>Sign up today</a>
        </div>
      </div>
    </div>
    <a class='left carousel-control' data-slide='pref' href='#myCarousel'>‹</a>
    <a class='right carousel-control' data-slide='next' href='#myCarousel'>›</a>
  </div>
</div>
<?php get_footer(); ?>
<script>
      !function ($) {
        $(function(){
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
</script>
