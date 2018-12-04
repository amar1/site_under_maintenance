<?php

/**
 * @file
 * Contains \Drupal\site_under_maintenance\Controller\SiteUnderMaintenanceController.
 */

namespace Drupal\site_under_maintenance\Controller;
use Drupal\Core\Controller\ControllerBase;

/**
 * Controller routines for filter routes.
 */
class SiteUnderMaintenanceController extends ControllerBase{

  /**
   * Displays a page with a descriptive page.
   *
   * Our router maps this method to the path 'site_under_maintenance'.
   */
  function social_link() {
    $build = array(
      '#markup' => t('<h2>Site under maintenance for Drupal</h2>
      <p>A very basic creative html. User can upload own custom html or choose existing html of module.</p>'),
    );
    return $build;
  }

}
