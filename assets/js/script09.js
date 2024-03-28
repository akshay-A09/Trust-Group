//Sticky HEADER START
jQuery(window).scroll(function(){
    if (jQuery(window).scrollTop() >= 1) {
       jQuery('header').addClass('fixed');
    }
    else {
       jQuery('header').removeClass('fixed');
    }
});
//Sticky HEADER END

//add active class based on url
jQuery(function($) {
    var path = window.location.href; 
   jQuery('a').each(function() {
      if (this.href === path) {
       jQuery(this).addClass('active');
      }
    });
  });
//add active class based on url END
  
// Menu Bar
jQuery('.menu_btn').click(function(){
    jQuery(this).toggleClass("active");
    jQuery('body').toggleClass("menu_open");
  });
// Menu Bar


// Footer FAQ click
jQuery('.f_faqBtn').click(function(){
    jQuery(this).toggleClass("active");
    jQuery('.f_faqData').toggleClass("show");
  });
// Footer FAQ click


// Nav Dropdown js
document.addEventListener("DOMContentLoaded", function() {
  const navLinks = document.querySelectorAll('.navH a');
  const tabContents = document.querySelectorAll('.navdata');
  navLinks.forEach(function(navLink) {
      navLink.addEventListener('click', function(event) {
          if (navLink.getAttribute('href') !== '#' && !navLink.classList.contains('nav-link')) {
              return;
          }

          event.preventDefault();
          toggleActiveClasses(navLink);
      });
  });
  document.body.addEventListener('click', function(event) {
      const clickedElement = event.target;
      if (!clickedElement.closest('.navH') && !clickedElement.closest('.navdata')) {
          navLinks.forEach(function(link) {
              link.classList.remove('activeTab');
          });
          tabContents.forEach(function(tab) {
              tab.classList.remove('showTab');
          });
      }
  });
  function toggleActiveClasses(clickedNavLink) {
      const targetTabId = clickedNavLink.getAttribute('href');
      const targetTab = document.querySelector(targetTabId); 
      if (clickedNavLink.classList.contains('activeTab')) {
          clickedNavLink.classList.remove('activeTab');
          targetTab.classList.remove('showTab');
          return; 
      }
      navLinks.forEach(function(link) {
          link.classList.remove('activeTab');
      });
      clickedNavLink.classList.add('activeTab');
      tabContents.forEach(function(tab) {
          tab.classList.remove('showTab');
      });
      targetTab.classList.add('showTab');
  }
});
// Nav Dropdown js End

// Accordion
jQuery(function() {
	jQuery(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
	jQuery(".accordion > .accordion-item").click(function() {
		jQuery(this).siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
		jQuery(this).toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
	});
});
// Accordion End

