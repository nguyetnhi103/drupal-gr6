<?php

namespace Drupal\Tests\custom_markup_block\Functional;

use Drupal\Tests\block\Functional\BlockTestBase;

/**
 * Base class for Custom Markup Block functional tests.
 */
abstract class CustomMarkupBlockTestBase extends BlockTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * Modules to enable.
   *
   * @var array
   */
  protected static $modules = [
    'custom_markup_block',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    if (version_compare(\Drupal::VERSION, '9', '<')) {
      $this->defaultTheme = 'classy';
    }

    parent::setUp();
  }

}
