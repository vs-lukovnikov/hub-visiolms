<?php

namespace Drupal\visiolms_unit\Controller;

use Drupal\entity_generic\Controller\GenericViewController;
use Drupal\Core\Entity\EntityInterface;

/**
 * Defines a controller to render a single entity.
 */
class UnitViewController extends GenericViewController {

  /**
   * {@inheritdoc}
   */
  public function title(EntityInterface $realtyjet_property) {
    return parent::title($realtyjet_property);
  }

}
