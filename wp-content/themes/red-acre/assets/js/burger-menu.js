jQuery(document).ready(function () {
  jQuery(".toggle-nav").click(function (e) {
    jQuery(".menu-header-menu-container").slideToggle("fast");

    e.preventDefault();
  });
});
