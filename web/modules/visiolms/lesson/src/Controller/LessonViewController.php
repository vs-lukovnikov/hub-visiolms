<?php

namespace Drupal\visiolms_lesson\Controller;

use Drupal\entity_generic\Controller\GenericViewController;
use Drupal\Core\Entity\EntityInterface;

/**
 * Defines a controller to render a single entity.
 */
class LessonViewController extends GenericViewController {

  /**
   * {@inheritdoc}
   */
  public function title(EntityInterface $visiolms_lesson) {
    return parent::title($visiolms_lesson);
  }

}
