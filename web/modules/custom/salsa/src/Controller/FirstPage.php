<?php
/*
 * @file
 * Contains \Drupal\salsa\Controller\FirstPage.
 */
namespace Drupal\salsa\Controller;
/*
 * Provides route for our custom module
 */
class FirstPage{
  /*
   * displays simple page
   */

  public function content(){
    $output = node_load_multiple();
    $output = node_view_multiple($output);
    return array(
      '#markup' => render($output),
    );
  }

}
