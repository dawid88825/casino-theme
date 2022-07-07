<?php wp_footer(); ?>
</div>
<script>
  window.addEventListener('DOMContentLoaded', function() {
    var navbar = document.querySelector('.navbar');
    var hamburger = document.querySelector('.hamburger');
    var menuLinks = document.querySelectorAll('.menu-item.has-dropdown .menu-link');

    function toggleDropdownMenu(e) {
      e.target.closest('.menu-item').classList.toggle('active');
    }

    function toggleNavigation() {
      navbar.classList.toggle('active');
      hamburger.classList.toggle('is-active');
      document.body.classList.toggle('has-active-navigation');
    }

    hamburger.addEventListener('click', toggleNavigation);

    if (menuLinks.length > 0) {
      menuLinks.forEach(function(menuLink) {
        menuLink.addEventListener('click', toggleDropdownMenu);
      });
    }
  });
</script>
</body>
</html>