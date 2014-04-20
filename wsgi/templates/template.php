<?php

/**
 * Implements theme_menu_link().
 */
function openshift_theme_menu_link__menu_social_menu($variables) {
  $element = $variables['element'];
  $label = $element['#title'];
  $social_icons = array(
    'twitter',
    'plus.google',
    'youtube',
    'stackoverflow',
    'slideshare',
    'reddit',
    'github'
    );

  foreach ($social_icons as $value) {
    if (strpos($element['#href'], $value)) {
      $label = '';
    }
  }

  $output = l($label, $element['#href'], $element['#localized_options']);

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . "</li>\n";
}