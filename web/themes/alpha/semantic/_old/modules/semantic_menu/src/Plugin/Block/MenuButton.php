<?php

namespace Drupal\semantic_menu\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;


/**
 * @Block(
 *   id = "semantic_menu_button",
 *   admin_label = @Translation("Semantic menu button"),
 *   category = @Translation("Semantic")
 * )
 */
class MenuButton extends BlockBase {

/**
   * {@inheritdoc}
   */
  protected function blockAccess(AccountInterface $account) {
    return AccessResult::allowed();
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = array();

    $build['menu_button'] = array(
      '#theme' => 'semantic_menu_button',
    );

    return $build;
  }

}
