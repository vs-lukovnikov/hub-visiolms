<?php

/**
 * @file
 * Contains \Drupal\visiolms_course\Entity\CourseType.
 */

namespace Drupal\visiolms_course\Entity;

use Drupal\entity_generic\Entity\GenericType;

/**
 * Defines the entity type class.
 *
 * @ConfigEntityType(
 *   id = "visiolms_course_type",
 *   label = @Translation("Course type"),
 *   label_singular = @Translation("Course type"),
 *   label_plural = @Translation("Course types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count Course type",
 *     plural = "@count Course types"
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
 *   "route_provider" = {
 *      "default" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     }
 *   },
 *   admin_permission = "administer visiolms_course_type",
 *   config_prefix = "type",
 *   bundle_of = "visiolms_course",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label"
 *   },
 *   links = {
 *     "add-form" = "/admin/lms/courses/types/add",
 *     "delete-form" = "/admin/lms/courses/types/manage/{visiolms_course_type}/delete",
 *     "edit-form" = "/admin/lms/courses/types/manage/{visiolms_course_type}",
 *     "admin-form" = "/admin/lms/courses/types/manage/{visiolms_course_type}",
 *     "collection" = "/admin/lms/courses/types"
 *   },
 *   config_export = {
 *     "id",
 *     "label",
 *     "description",
 *     "help",
 *     "new_revision",
 *   }
 * )
 */
class CourseType extends GenericType implements CourseTypeInterface {

}