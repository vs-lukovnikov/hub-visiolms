(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.semanticSelect = {
    attach: function () {
      $('.ui.dropdown')
        .dropdown();
    }
  };
}(jQuery, Drupal));