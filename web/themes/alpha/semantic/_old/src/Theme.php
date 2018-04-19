<?php

/**
 * @file
 * Contains \Drupal\semantic\Theme.
 */

namespace Drupal\semantic;

use Drupal\Core\Extension\ThemeHandler;

/**
 * Utility class for managing the theme.
 */
class Theme {

  /**
   * Store ThemeHandler for quick access.
   *
   * @var ThemeHandler
   */
  protected $theme_handler;

  /**
   * The name of the active theme.
   *
   * @var string
   */
  protected $theme_name;

  /**
   * Constructs a Theme object.
   *
   * @param string $theme_name
   *   The name of the active theme.
   */
  public function __construct($theme_name) {
    $this->theme_name = $theme_name;
    $this->theme_handler = \Drupal::service('theme_handler');
  }

  /**
   * Builds the full theme trail (deepest base theme first) for a theme.
   *
   * @return array
   *   An array of all themes in the trail, keyed by theme key.
   */
  public function getThemeTrail() {
    if (($cache = &drupal_static(__FUNCTION__)) && isset($cache[$this->theme_name])) {
      return $cache[$this->theme_name];
    }

    $cache[$this->theme_name] = array();

    $base_themes = $this->getBaseThemes();
    if (!empty($base_themes)) {
      $cache[$this->theme_name] = $base_themes;
    }

    // Add our current subtheme ($key) to that array.
    $cache[$this->theme_name][$this->theme_name] = $this->getThemeLabel();

    return $cache[$this->theme_name];
  }

  /**
   * Returns list of base themes for the current theme.
   *
   * @return array
   */
  protected function getBaseThemes() {
    return $this->theme_handler->getBaseThemes($this->theme_handler->listInfo(), $this->theme_name);
  }

  /**
   * Returns theme name.
   *
   * @return string
   */
  protected function getThemeLabel() {
    return $this->theme_handler->getName($this->theme_name);
  }

}
