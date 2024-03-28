<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Downloads | Trust Group</title>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<main>


<!-- Downloads -->
<section class="research"><div class="container">
<div class="wow fadeInUp">
    <h5 class="heading_top tu textGold">Downloads</h5>
</div>
<!-- About End -->

<div class="accordion accordion09S1 accordion09S1Ex downloads">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">Draft Prospectus</h3>
<div class="accordion-panel"> 
<div class="accordion-panel_data">    
<div class="dwn_list">
<ul>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
<li><a href="#">Edelweiss Financial Services Limited - Draft Prospectus dated December 18, 2023</a></li>
</ul>
</div>
</div>
</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Abridged Prospectus & Application Form</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Final Prospectus</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Track Records</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">CPSE ETF</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">MLD Valuations</h3>
<div class="accordion-panel"> text</div>
</div>

</div>



</div></section>
<!-- Downloads End -->

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