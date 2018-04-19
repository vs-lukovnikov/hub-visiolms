<?php

/**
 * @file
 * Contains \Drupal\visiolms_course\Entity\Course.
 */

namespace Drupal\visiolms_course\Entity;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\entity_generic\Entity\Generic;

/**
 * Defines the entity class.
 *
 * @ContentEntityType(
 *   id = "visiolms_course",
 *   label = @Translation("Course"),
 *   label_singular = @Translation("Course"),
 *   label_plural = @Translation("Courses"),
 *   label_count = @PluralTranslation(
 *     singular = "@count Course",
 *     plural = "@count Courses"
 *   ),
 *   bundle_label = @Translation("Course type"),
 *   handlers = {
 *    "access" = "Drupal\entity_generic\Access\GenericAccessControlHandler",
 *     "event" = "Drupal\entity_generic\Event\GenericEvent",
 *     "storage" = "Drupal\entity_generic\GenericStorage",
 *     "permission_provider" = "Drupal\entity_generic\Permission\GenericPermissionProvider",
 *     "view_builder" = "Drupal\entity_generic\GenericViewBuilder",
 *     "list_builder" = "Drupal\visiolms_course\CourseListBuilder",
 *     "views_data" = "Drupal\entity_generic\GenericViewsData",
 *     "translation" = "Drupal\entity_generic\GenericTranslationHandler",
 *     "form" = {
 *       "default" = "Drupal\entity_generic\Form\GenericForm",
 *       "add" = "Drupal\entity_generic\Form\GenericForm",
 *       "edit" = "Drupal\entity_generic\Form\GenericForm",
 *       "delete" = "Drupal\entity_generic\Form\GenericDeleteForm"
 *     },
 *     "route_provider" = {
 *       "html" = "Drupal\entity_generic\Routing\GenericRouteProvider",
 *       "delete-multiple" = "Drupal\entity\Routing\DeleteMultipleRouteProvider"
 *     }
 *   },
 *   bundle_entity_type = "visiolms_course_type",
 *   admin_permission = "administer visiolms_courses",
 *   base_table = "visiolms_course",
 *   data_table = "visiolms_course_data",
 *   revision_table = "visiolms_course_revision",
 *   revision_data_table = "visiolms_course_revision_data",
 *   translatable = TRUE,
 *   fieldable = TRUE,
 *   field_ui_base_route = "entity.visiolms_course_type.edit_form",
 *   common_reference_target = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "vid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "uuid" = "uuid",
 *     "status" = "status",
 *     "created" = "created",
 *     "changed" = "changed",
 *     "uid" = "uid"
 *   },
 *   links = {
 *     "canonical" = "/course/{visiolms_course}",
 *     "add-page" = "/admin/lms/courses/course/add",
 *     "add-form" = "/admin/lms/courses/course/add/{visiolms_course}",
 *     "edit-form" = "/admin/lms/courses/course/{visiolms_course}/edit",
 *     "delete-form" = "/admin/lms/courses/course/{visiolms_course}/delete",
 *     "delete-multiple-form" = "/admin/lms/courses/delete",
 *     "revision-history" = "/admin/lms//courses/course/{visiolms_course}/revisions",
 *     "revision" = "/admin/lms/courses/course/{visiolms_course}/revisions/{visiolms_courses_revision}/view",
 *     "collection" = "/admin/lms/courses"
 *   },
 *   entity_generic = {
 *     "entity" = "entity_generic",
 *     "callbacks" = {
 *       "entity.visiolms_course.canonical.title" = "\Drupal\visiolms_course\Controller\CourseViewController::title",
 *       "entity.visiolms_course.add_page" = "\Drupal\visiolms_course\Controller\CourseController::addPage",
 *       "entity.visiolms_course.add_entity_title" = "\Drupal\visiolms_course\Controller\CourseController::addGenericEntityTitle",
 *       "entity.visiolms_course.add_entity" = "\Drupal\visiolms_course\Controller\CourseController::addGenericEntity",
 *       "entity.visiolms_course.revision_history" = "\Drupal\visiolms_course\Controller\CourseController::revisionOverview",
 *       "entity.visiolms_course.revision" = "\Drupal\visiolms_course\Controller\CourseController::revisionShow",
 *       "entity.visiolms_course.revision.title" = "\Drupal\visiolms_course\Controller\CourseController::revisionPageTitle"
 *     }
 *   }
 * )
 */
class Course extends Generic implements CourseInterface {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {

    $fields = parent::baseFieldDefinitions($entity_type);

    // Unit_id field for the course.
    // Entity reference field, holds the reference to the Unit item.
    $fields['unit_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Unit'))
      ->setDescription(t('Related unit with the course'))
      ->setSetting('target_type', 'visiolms_unit')
      ->setCardinality(BaseFieldDefinition::CARDINALITY_UNLIMITED)
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'entity_reference_label',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'entity_reference_autocomplete',
        'settings' => [
          'match_operator' => 'CONTAINS',
          'size' => 60,
          'placeholder' => '',
        ],
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    // Description field for the course entity.
    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Description'))
      ->setDescription(t('Description of the Course.'))
      ->setSettings([
        'default_value' => '',
      ])
      ->setDisplayOptions('view', [
        'label' => 'above',
        'type' => 'text_default',
        'weight' => 0,
      ])
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE)
      ->setDisplayConfigurable('view', TRUE);

    return $fields;
  }

}
