<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trust Group</title>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<main>




<div class="accordion">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">About</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">About</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">About</h3>
<div class="accordion-panel"> text</div>
</div>

</div>




</main>
<?php include 'footer.php'; ?>
<script>
jQuery(document).ready(function(jQuery) {
    var jQueryslider = jQuery('.heroSldier');
    var jQuerycurrentSlide = jQuery('.current-slide');
    var jQuerytotalSlides = jQuery('.total-slides');
    jQueryslider.on('init', function(event, slick){
        var totalSlides = slick.slideCount;
        jQuerytotalSlides.text(totalSlides);
    });
    jQueryslider.slick({
        dots: false,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 600,
        slidesToShow: 1,
        slidesToScroll: 1
    });
    jQueryslider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
        jQuerycurrentSlide.text(nextSlide + 1);
    });
});
</script>


</body>
</html>