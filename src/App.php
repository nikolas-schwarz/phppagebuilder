<?php

namespace PhpPageBuilder;

/**
 * App 
 *
 * Main entry point for the application.
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

class App {
    // define the default meta values for application.
    protected $version = 'dev-1.0.0';
    protected $name = 'phppagebuilder';


    // constructor
    function __construct() {
        // load the composer.json file in to retrive the latest version.
        $composerJson = json_decode(file_get_contents("../composer.json"), true);
        // check if the composer.json is correctly converted to an array.
        if($composerJson) {
            // than save the current version from the composer.json
            $this->version = $composerJson["version"];
            // and save the current name from the composer.json
            $this->name = explode('/', $composerJson["name"])[1];

            // it is possible to retrive even more infos from the composer.json 
            // so thats the reason to load the file at the contruction time of our application
        }
    }

    // getter for the application meta data
    function getVersion() {
        return $this->version;
    }

    function getName() {
        return $this->name;
    }
}