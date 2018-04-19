<?php

namespace Drupal\visiolms_course\Controller;

use Drupal\entity_generic\Controller\GenericViewController;
use Drupal\Core\Entity\EntityInterface;

/**
 * Defines a controller to render a single entity.
 */
class CourseViewController extends GenericViewController {

  /**
   * {@inheritdoc}
   */
  public function title(EntityInterface $visiolms_course_property) {
    return parent::title($visiolms_course_property);
  }
}
