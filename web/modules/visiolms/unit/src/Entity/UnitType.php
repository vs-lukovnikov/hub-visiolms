<?php

namespace Drupal\visiolms_unit\Entity;

use Drupal\entity_generic\Entity\GenericType;

/**
 * Defines the entity type class.
 *
 * @ConfigEntityType(
 *   id = "visiolms_unit_type",
 *   label = @Translation("Unit type"),
 *   label_singular = @Translation("unit type"),
 *   label_plural = @Translation("unit types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count unit type",
 *     plural = "@count unit types",
 *   ),
 *   handlers = {
 *     "access" = "Drupal\entity_generic\Access\GenericAccessControlHandler",
 *     "permission_provider" = "Drupal\entity_generic\Permission\GenericPermissionProvider",
 *     "list_builder" = "Drupal\entity_generic\GenericTypeListBuilder",
 *     "form" = {
 *       "default" = "Drupal\entity_generic\Form\GenericTypeForm",
 *       "add" = "Drupal\entity_generic\Form\GenericTypeForm",
 *       "edit" = "Drupal\entity_generic\Form\GenericTypeForm",
 *       "delete" = "Drupal\entity_generic\Form\GenericTypeDeleteForm"
 *     },
 *     "route_provider" = {
 *       "default" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider"
 *     }
 *   },
 *   config_prefix = "type",
 *   admin_permission = "administer visiolms_unit_type",
 *   bundle_of = "visiolms_unit",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "help",
 *     "new_revision",
 *   },
 *   links = {
 *     "add-form" = "/admin/lms/units/types/add",
 *     "delete-form" = "/admin/lms/units/types/manage/{visiolms_unit_type}/delete",
 *     "edit-form" = "/admin/lms/units/types/manage/{visiolms_unit_type}",
 *     "admin-form" = "/admin/lms/units/types/manage/{visiolms_unit_type}",
 *     "collection" = "/admin/lms/units/types"
 *   }
 * )
 */
class UnitType extends GenericType implements UnitTypeInterface {

}
