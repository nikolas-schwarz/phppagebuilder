<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * PhpPageBuilder 
 *
 * Small side project to implement a page builder with php for learning purpose.
 *
 * PHP version 7.3 or higher
 *
 * LICENSE: MIT
 *
 * @package    PhpPageBuilder
 * @author     Nikolas Schwarz <nikolas.schwarz@evolut.solutions>
 * @copyright  2021 Nikolas Schwarz
 * @license    https://raw.githubusercontent.com/nikolas-schwarz/phppagebuilder/main/LICENSE  MIT
 * @version    1.0.0
 * @link       https://github.com/nikolas-schwarz/phppagebuilder
 */

use PhpPageBuilder\App;

$app = new App();

// Testing
print_r($app->getVersion());
print_r($app->getName());