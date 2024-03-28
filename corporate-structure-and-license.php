<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Structure & License | Trust Group</title>
    <?php include 'head.php'; ?>
</head>
<body>
<?php include 'header.php'; ?>
<main>




<!-- Awards & Accolades -->
<section class="research"><div class="container">
<div class="wow fadeInUp">
    <h5 class="heading_top tu textGold">Trust Capital Services (INDIA) Private Limited</h5>
</div>
<!-- About End -->



<div class="accordion accordion09S1 accordion09S1Ex downloads">

<div class="accordion-item is-active">
<h3 class="accordion-thumb">Draft Prospectus</h3>
<div class="accordion-panel"> 
<div class="accordion-panel_data">    
  
<h5>Under Regulatory Disclosures - Trust Financial Consultancy Services Private Limited</h5>

<ul>
  <li>Investor Complaints DP Feb 2024</li>
  <li>Investor Complaints Research Analyst Feb 2024</li>
  <li>Investor Complaints Stock Broker Feb 2024</li>
  <li>Investor Charter - Research Analyst</li>
  <li>Investor Charter – Depository Participant</li>
  <li>Advisory – KYC Compliance</li>
</ul>

<h5>Trust Financial Consultancy Services Private Limited - Client Bank Account details :</h5>

<h3>Quicklinks</h3>
<ul>
<li><a href="#">SEBI</a></li>
<li><a href="#">NSE</a></li>
<li><a href="#">BSE</a></li>
<li><a href="#">MSEI</a></li>
<li><a href="#">CDSL</a></li>
</ul>

<h5>Arbitration Mechanism In Stock Exchanges :</h5>
<ul>
  <li>SEBI Circular No. CIR/MRD/DSA/24/2010 dated August 11, 2010</li>
  <li>SEBI Circular No. CIR/MRD/DSA/29/2010 dated August 31, 2010</li>
  <li>SEBI Circular No. CIR/MRD/DSA/2/2011 dated February 09, 2011</li>
  <li>SEBI Circular No. CIR/MRD/ICC/20/2013 dated July 05, 2013</li>
  <li>SEBI Circular No. CIR/MRD/ICC/21/2013 dated July 05, 2013</li>
</ul>

</div>
</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Trust Investment Advisors Private Limited.</h3>
<div class="accordion-panel"> text</div>
</div>

<div class="accordion-item">
<h3 class="accordion-thumb">Trust Financial Consultancy Services Private Limited.</h3>
<div class="accordion-panel"> text</div>
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