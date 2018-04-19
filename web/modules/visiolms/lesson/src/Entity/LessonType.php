<?php

/**
 * @file
 * Contains \Drupal\visiolms_lesson\Entity\Lesson.
 */

namespace Drupal\visiolms_lesson\Entity;

use Drupal\entity_generic\Entity\GenericType;

/**
 * Defines the entity type class.
 *
 * @ConfigEntityType(
 *   id = "visiolms_lesson_type",
 *   label = @Translation("Lesson type"),
 *   label_singular = @Translation("lesson type"),
 *   label_plural = @Translation("lesson types"),
 *   label_count = @PluralTranslation(
 *     singular = "@count lesson type",
 *     plural = "@count lesson types",
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
 *       "default" = "Drupal\Core\Entity\Routing\DefaultHtmlRouteProvider",
 *     }
 *   },
 *   config_prefix = "type",
 *   admin_permission = "administer visiolms_lesson_type",
 *   bundle_of = "visiolms_lesson",
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
 *     "new_revision"
 *   },
 *   links = {
 *     "add-form" = "/admin/visiolms/lessons/types/add",
 *     "delete-form" = "/admin/visiolms/lessons/types/manage/{visiolms_lesson_type}/delete",
 *     "edit-form" = "/admin/visiolms/lessons/types/manage/{visiolms_lesson_type}",
 *     "admin-form" = "/admin/visiolms/lessons/types/manage/{visiolms_lesson_type}",
 *     "collection" = "/admin/visiolms/lessons/types"
 *   }
 * )
 */

class LessonType extends GenericType implements LessonTypeInterface {

}
