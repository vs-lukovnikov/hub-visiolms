<?php

/**
 * @file
 * Contains \Drupal\semantic\ThemeRegistry.
 */

namespace Drupal\semantic;

/**
 * Utility class for managing the theme registry.
 */
class ThemeRegistry {

  /**
   * The theme registry.
   *
   * @var array
   */
  protected $registry;

  /**
   * The name of the active theme.
   *
   * @var string
   */
  protected $theme_name;

  /**
   * Constructs a SemanticRegistry object.
   *
   * @param array &$registry
   *   The theme registry.
   * @param string $theme_name
   *   The name of the active theme.
   */
  public function __construct(&$registry, $theme_name) {
    $this->theme_name = $theme_name;
    $this->registry = &$registry;
  }

  /**
   * Discovers and registers preprocess hooks on behalf of a given theme.
   *
   * @param string $theme
   *   The name of the theme for which to register (pre-)process hooks.
   */
  public function registerHooks($theme) {
    foreach (array('preprocess') as $type) {
      // Iterate over all files in the current theme.
      foreach ($this->discoverFiles($theme, $type) as $item) {
        $callback = "{$theme}_{$type}_{$item->hook}";

        // If there is no hook with that name, continue.
        if (!array_key_exists($item->hook, $this->registry)) {
          continue;
        }

        // Append the included (pre-)process hook to the array of functions.
        $this->registry[$item->hook]["$type functions"][] = $callback;

        // By adding this file to the 'includes' array we make sure that it is
        // available when the hook is executed.
        $this->registry[$item->hook]['includes'][] = $item->uri;
      }
    }
  }

  /**
   * Scans for files of a certain type in the given theme's path.
   *
   * @param string $theme
   *   The name of the theme scan.
   *
   * @param string $type
   *   The file type (e.g. 'preprocess') to scan for.
   *
   * @return array
   *   An array of file objects that matched the given type.
   */
  protected function discoverFiles($theme, $type) {
    $length = -(strlen($type) + 1);

    $path = drupal_get_path('theme', $theme);
    // Only look for files that match the 'something.preprocess.inc' pattern.
    $mask = '/.' . $type . '.inc$/';

    // Recursively scan the folder for the current step for (pre-)process
    // files and write them to the registry.
    $files = file_scan_directory($path . '/' . $type, $mask);
    foreach ($files as &$file) {
      $file->hook = strtr(substr($file->name, 0, $length), '-', '_');
    }

    return $files;
  }

}
