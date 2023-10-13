$(document).ready(function(){
  var zindex = 10;
  
  $("div.caard .caard-title, div.caard .caard__image-holder").click(function(e){
    e.preventDefault();

    var caard = $(this).closest(".caard"); // Find the parent .caard element

    var isShowing = false;

    if (caard.hasClass("show")) {
      isShowing = true;
    }

    if ($("div.All-caards").hasClass("showing")) {
      // A caard is already in view
      $("div.caard.show")
        .removeClass("show");

      if (isShowing) {
        // This caard was showing - reset the grid
        $("div.All-caards")
          .removeClass("showing");
      } else {
        // This caard isn't showing - get in with it
        caard
          .css({zIndex: zindex})
          .addClass("show");
      }

      zindex++;
    } else {
      // No caards in view
      $("div.All-caards")
        .addClass("showing");
      caard
        .css({zIndex: zindex})
        .addClass("show");
      zindex++;
    }
  });
});
