<?php

/**
 * @file
 * Contains \Drupal\visiolms_course\CourseListBuilder.
 */

namespace Drupal\visiolms_lesson;

use Drupal\entity_generic\GenericListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Course list builder.
 */
class LessonListBuilder extends GenericListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {

    $header['name'] = $this->t('Name');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {

    $row['name'] = $entity->toLink();

    return $row + parent::buildRow($entity);
  }

}
