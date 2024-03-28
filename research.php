<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research | Trust Group</title>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<main>




<!-- Awards & Accolades -->
<section class="research"><div class="container">
<div class="wow fadeInUp">
    <h5 class="heading_top tu textGold">Research</h5>
    <h2 class="heading">We are one of the few domestic financial services houses to provide insightful rates and credit research.</h2>
</div>
<!-- About End -->

<div class="tabStyle1">
<div class="tab-container research_tabs">
  <div class="tab active" data-tab="rates-research"><span>Rates Research</span></div>
  <div class="tab" data-tab="credit-research"><span>Credit Research</span></div>
  <div class="tab" data-tab="equity-research"><span>Equity Research</span></div>
</div>

<div id="rates-research" class="tab-content active">

<div class="accordion accordion09S1 accordion09S1Ex">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">Inflation Watch</h3>
<div class="accordion-panel"> 
<div class="accordion-panel_data">    
   
<div class="res_tags">
<a class="res_tags_item"><span>CPI_Sep_2023</span></a>
<a class="res_tags_item"><span>CPI_Oct_2023</span></a>
<a class="res_tags_item"><span>CPI_Aug_2023</span></a>
</div>

<div class="res_tags2">
<div class="res_tags_item"><span>Achieve</span> <a href="#">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>

</div>

</div>
</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">IIP Watch</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">External Watch</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Credit Watch</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Monetary Policy Watch</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Financial Conditions Watch</h3>
<div class="accordion-panel"> text</div>
</div>

</div>

</div>

<div id="credit-research" class="tab-content">

<div class="accordion accordion09S1 accordion09S1Ex">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">IIP Watch</h3>
<div class="accordion-panel"> 
<div class="accordion-panel_data">    
   
<div class="res_tags">
<a class="res_tags_item"><span>CPI_Sep_2023</span></a>
<a class="res_tags_item"><span>CPI_Oct_2023</span></a>
<a class="res_tags_item"><span>CPI_Aug_2023</span></a>
</div>

<div class="res_tags2">
<div class="res_tags_item"><span>Achieve</span> <a href="#">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>

</div>

</div>
</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Monetary Policy Watch</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Financial Conditions Watch</h3>
<div class="accordion-panel"> text</div>
</div>

</div>

</div>

<div id="equity-research" class="tab-content">
<div class="accordion accordion09S1 accordion09S1Ex">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">Financial Conditions Watch</h3>
<div class="accordion-panel"> 
<div class="accordion-panel_data">    
   
<div class="res_tags">
<a class="res_tags_item"><span>CPI_Sep_2023</span></a>
<a class="res_tags_item"><span>CPI_Oct_2023</span></a>
<a class="res_tags_item"><span>CPI_Aug_2023</span></a>
</div>

<div class="res_tags2">
<div class="res_tags_item"><span>Achieve</span> <a href="#">View All <i class="fa-solid fa-arrow-right" aria-hidden="true"></i></a></div>

</div>

</div>
</div>
</div>


</div>
</div>

</div>
</div></section>
<!-- awards and accolades End -->

</main>
<?php include 'footer.php'; ?>

<!-- Tabs -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  var tabs = document.querySelectorAll('.tab');
  tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
      var tabId = this.getAttribute('data-tab');
      activateTab(tabId);
      history.pushState(null, null, '#' + tabId);
    });
  });
  var hash = window.location.hash.substr(1);
  if (hash !== "") {
    activateTab(hash);
  }
  function activateTab(tabId) {
    var tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach(function(content) {
      content.classList.remove('active');
    });
    document.getElementById(tabId).classList.add('active');

    tabs.forEach(function(t) {
      t.classList.remove('active');
      if (t.getAttribute('data-tab') === tabId) {
        t.classList.add('active');
      }
    });
  }
});
</script>
<!-- Tabs End-->

</body>
</html>