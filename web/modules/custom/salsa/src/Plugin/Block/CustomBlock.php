<?php
/**
 * @file
 * Contains \Drupal\salsa\Plugin\Block\CustomBlock.
 */
namespace Drupal\salsa\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a custom_block.
 *
 * @Block(
 *   id = "custom_block",
 *   admin_label = @Translation("Custom block"),
 *   category = @Translation("Custom block example")
 * )
 */
class CustomBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
    $output = node_load_multiple();
    $output = node_view_multiple($output);
    return array(
      '#markup' => render($output),
    );
  }
}
