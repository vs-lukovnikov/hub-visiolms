<?php

/**
 * @file
 * Contains \Drupal\visiolms_unit\Entity\Unit.
 */

namespace Drupal\visiolms_unit\Entity;

use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\entity_generic\Entity\Generic;

/**
 * Defines the entity class.
 *
 * @ContentEntityType(
 *   id = "visiolms_unit",
 *   label = @Translation("Unit"),
 *   label_singular = @Translation("Unit"),
 *   label_plural = @Translation("Units"),
 *   label_count = @PluralTranslation(
 *     singular = "@count unit",
 *     plural = "@count units"
 *   ),
 *   bundle_label = @Translation("Unit type"),
 *   handlers = {
 *     "access" = "Drupal\entity_generic\Access\GenericAccessControlHandler",
 *     "event" = "Drupal\entity_generic\Event\GenericEvent",
 *     "storage" = "Drupal\entity_generic\GenericStorage",
 *     "permission_provider" = "Drupal\entity_generic\Permission\GenericPermissionProvider",
 *     "list_builder" = "Drupal\entity_generic\GenericListBuilder",
 *     "view_builder" = "Drupal\entity_generic\GenericViewBuilder",
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
 *   base_table = "visiolms_unit",
 *   data_table = "visiolms_unit_field_data",
 *   revision_table = "visiolms_unit_revision",
 *   revision_data_table = "visiolms_unit_revision_data",
 *   admin_permission = "administer visiolms_units",
 *   bundle_entity_type = "visiolms_unit_type",
 *   translatable = TRUE,
 *   fieldable = TRUE,
 *   field_ui_base_route = "entity.visiolms_unit_type.edit_form",
 *   common_reference_target = TRUE,
 *   entity_keys = {
 *     "id" = "id",
 *     "revision" = "vid",
 *     "bundle" = "type",
 *     "label" = "name",
 *     "langcode" = "langcode",
 *     "status" = "status",
 *     "created" = "created",
 *     "changed" = "changed",
 *     "uid" = "uid",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/unit/{visiolms_unit}",
 *     "collection" = "/admin/lms/units",
 *     "add-page" = "/admin/lms/units/unit/add",
 *     "add-form" = "/admin/lms/units/unit/add/{visiolms_unit}",
 *     "edit-form" = "/admin/lms/units/unit/{visiolms_unit}/edit",
 *     "delete-form" = "/admin/lms/units/unit/{visiolms_unit}/delete",
 *     "delete-multiple-form" = "/admin/lms/units/delete",
 *     "revision-history" = "/admin/lms/units/unit/{visiolms_unit}/revisions",
 *     "revision" = "/admin/lms/units/unit/{visiolms_unit}/revisions/{visiolms_unit_revision}/view"
 *   },
 *   entity_generic = {
 *     "entity" = "entity_generic",
 *     "callbacks" = {
 *       "entity.visiolms_unit.canonical.title" = "\Drupal\visiolms_unit\Controller\UnitViewController::title",
 *       "entity.visiolms_unit.add_page" = "\Drupal\visiolms_unit\Controller\UnitController::addPage",
 *       "entity.visiolms_unit.add_entity" = "\Drupal\visiolms_unit\Controller\UnitController::addGenericEntity",
 *       "entity.visiolms_unit.add_entity_title" = "\Drupal\visiolms_unit\Controller\UnitController::addGenericEntityTitle",
 *       "entity.visiolms_unit.revision_history" = "\Drupal\visiolms_unit\Controller\UnitController::revisionOverview",
 *       "entity.visiolms_unit.revision" = "\Drupal\visiolms_unit\Controller\UnitController::revisionShow",
 *       "entity.visiolms_unit.revision.title" = "\Drupal\visiolms_unit\Controller\UnitController::revisionPageTitle"
 *     }
 *   }
 * )
 */
class Unit extends Generic implements UnitInterface {

  /**
   * {@inheritdoc}
   */
  public static function baseFieldDefinitions(EntityTypeInterface $entity_type) {
    $fields = parent::baseFieldDefinitions($entity_type);

    // Reference to the Lesson item.
    $fields['lesson_id'] = BaseFieldDefinition::create('entity_reference')
      ->setLabel(t('Lesson'))
      ->setDescription(t('Lesson for the Unit'))
      ->setSetting('target_type', 'visiolms_lesson')
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

    $fields['description'] = BaseFieldDefinition::create('text_long')
      ->setLabel('Description')
      ->setDisplayOptions('view', [
        'label' => 'hidden',
        'type' => 'text_default',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('view', TRUE)
      ->setDisplayOptions('form', [
        'type' => 'text_textarea',
        'weight' => 0,
      ])
      ->setDisplayConfigurable('form', TRUE);

    return $fields;
  }


}
