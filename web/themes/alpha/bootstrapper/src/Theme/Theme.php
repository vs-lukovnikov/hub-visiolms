<?php

namespace Drupal\bootstrapper\Theme;

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
  protected $themeHandler;

  /**
   * The machine name of the active theme.
   *
   * @var string
   */
  protected $themeId;

  /**
   * Constructs a Theme object.
   *
   * @param string $theme_id
   *   The machine name of the active theme.
   */
  public function __construct($theme_id) {
    $this->themeId = $theme_id;
    $this->themeHandler = \Drupal::service('theme_handler');
  }

  /**
   * Returns the label of the current theme.
   *
   * @return string
   */
  protected function getThemeLabel() {
    return $this->themeHandler->getName($this->themeId);
  }

  /**
   * Builds the full theme trail (deepest base theme first) for a theme.
   *
   * @return array
   *   An array of all themes in the trail, keyed by theme key.
   */
  public function getThemeTrail() {
    if (($cache = &drupal_static(__FUNCTION__)) && isset($cache[$this->themeId])) {
      return $cache[$this->themeId];
    }

    $cache[$this->themeId] = array();

    $base_themes = $this->getBaseThemes();
    if (!empty($base_themes)) {
      $cache[$this->themeId] = $base_themes;
    }

    // Add our current subtheme ($key) to that array.
    $cache[$this->themeId][$this->themeId] = $this->getThemeLabel();

    return $cache[$this->themeId];
  }

  /**
   * Returns list of base themes for the current theme.
   *
   * @return array
   */
  protected function getBaseThemes() {
    return $this->themeHandler->getBaseThemes($this->themeHandler->listInfo(), $this->themeId);
  }

}
