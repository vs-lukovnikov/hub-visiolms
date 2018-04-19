<?php

/**
 * @file
 * Contains \Drupal\visiolms_lesson\Entity\Lesson.
 */

namespace Drupal\visiolms_lesson\Entity;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\entity_generic\Entity\Generic;
use Drupal\visiolms_lesson\Entity\LessonInterface;

// @TODO add cache context like in Node

/**
 * Defines the entity class.
 *
 * @ContentEntityType(
 *   id = "visiolms_lesson",
 *   label = @Translation("Lesson"),
 *   label_singular = @Translation("lesson"),
 *   label_plural = @Translation("lessons"),
 *   label_count = @PluralTranslation(
 *     singular = "@count lesson",
 *     plural = "@count lessons "
 *   ),
 *   bundle_label = @Translation("Lesson type"),
 *   handlers = {
 *     "access" = "Drupal\entity_generic\Access\GenericAccessControlHandler",
 *     "event" = "Drupal\entity_generic\Event\GenericEvent",
 *     "storage" = "Drupal\entity_generic\GenericStorage",
 *     "permission_provider" = "Drupal\entity_generic\Permission\GenericPermissionProvider",
 *     "view_builder" = "Drupal\entity_generic\GenericViewBuilder",
 *     "list_builder" = "Drupal\visiolms_lesson\LessonListBuilder",
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
 *   admin_permission = "administer visiolms_lessons",
 *   bundle_entity_type = "visiolms_lesson_type",
 *   base_table = "visiolms_lesson",
 *   data_table = "visiolms_lesson_data",
 *   revision_table = "visiolms_lesson_revision",
 *   revision_data_table = "visiolms_lesson_revision_data",
 *   translatable = TRUE,
 *   fieldable = TRUE,
 *   field_ui_base_route = "entity.visiolms_lesson_type.edit_form",
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
 *     "canonical" = "/lesson/{visiolms_lesson}",
 *     "add-page" = "/admin/lms/lessons/lesson/add",
 *     "add-form" = "/admin/lms/lessons/lesson/add/{visiolms_lesson}",
 *     "edit-form" = "/admin/lms/lessons/lesson/{visiolms_lesson}/edit",
 *     "delete-form" = "/admin/lms/lessons/lesson/{visiolms_lesson}/delete",
 *     "delete-multiple-form" = "/admin/lms/lessons/delete",
 *     "revision-history" = "/admin/lms/lessons/lesson/{visiolms_lesson}/revisions",
 *     "revision" = "/admin/lms/lessons/lesson/{visiolms_lesson}/revisions/{visiolms_lesson_revision}/view",
 *     "collection" = "/admin/lms/lessons"
 *   },
 *   entity_generic = {
 *     "entity" = "entity_generic",
 *     "callbacks" = {
 *       "entity.visiolms_lesson.canonical.title" = "\Drupal\visiolms_lesson\Controller\LessonViewController::title",
 *       "entity.visiolms_lesson.add_page" = "\Drupal\visiolms_lesson\Controller\LessonController::addPage",
 *       "entity.visiolms_lesson.add_entity_title" = "\Drupal\visiolms_lesson\Controller\LessonController::addGenericEntityTitle",
 *       "entity.visiolms_lesson.add_entity" = "\Drupal\visiolms_lesson\Controller\LessonController::addGenericEntity",
 *       "entity.visiolms_lesson.revision_history" = "\Drupal\visiolms_lesson\Controller\LessonController::revisionOverview",
 *       "entity.visiolms_lesson.revision" = "\Drupal\visiolms_lesson\Controller\LessonController::revisionShow",
 *       "entity.visiolms_lesson.revision.title" = "\Drupal\visiolms_lesson\Controller\LessonController::revisionPageTitle"
 *     }
 *   }
 * )
 */
class Lesson extends Generic implements LessonInterface {

  /**
   * {@inheritdoc}
   */
    public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    $fields['summary'] = BaseFieldDefinition::create('text_long')
      ->setLabel(t('Summary'))
      ->setDescription(t('The summary of the lesson.'))
      ->setTranslatable(TRUE)
      ->setRequired(FALSE)
      ->setDisplayOptions('view', [
        'label' => 'inline',
        'type' => 'text_default',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('view', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE);
    if ($entity_type->isRevisionable()) {
      $fields['summary']->setRevisionable(TRUE);
    }
      return $fields;
  }

}
