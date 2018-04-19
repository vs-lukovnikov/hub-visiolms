<?php

/**
 * @file
 * Contains \Drupal\visiolms_course\CourseListBuilder.
 */

namespace Drupal\visiolms_course;

use Drupal\entity_generic\GenericListBuilder;
use Drupal\Core\Entity\EntityInterface;

/**
 * Course list builder.
 */
class CourseListBuilder extends GenericListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader() {

    $header['name'] = $this->t('Name');
    $header['description'] = $this->t('Description');

    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {

    $row['name'] = $entity->toLink();
    $row['description'] = $entity->get('description')->value;

    return $row + parent::buildRow($entity);
  }

}
