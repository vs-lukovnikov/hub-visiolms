// Defines behavior of messages closing element.
(function ($, Drupal) {
  'use strict';
  Drupal.behaviors.semanticMessages = {
    attach: function () {
      $('.message .close').on('click', function () {
        $(this).closest('.message').transition('fade');
      });
    }
  };
}(jQuery, Drupal));