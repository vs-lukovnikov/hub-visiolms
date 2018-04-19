(function($, Drupal) {
  "use strict";
  Drupal.behaviors.fileInput = {
    attach: function() {
      $(".input-file-inner").once().on("click", function() {
        $(this).closest(".input-file").find("input[type=file]").trigger("click");
      });
      $(".input-file").find("input:file").on("change", function(e) {
        var name = e.target.files[0].name;
        $("input:text", $(e.target).parent()).val(name);
      });
    }
  };
})(jQuery, Drupal);