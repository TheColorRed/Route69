<?php

namespace Route69;

/**
 *
 * @author Ryan Naddy <untuned20@gmail.com>
 * @name Route.php
 * @version 1.0.0 Aug 3, 2015
 */
class Route{

    protected $routes = array();
    protected $strict = true;

    /**
     * Sets a new route to be tested
     * @param string $path The path of the route
     * @param array $settings The settings fo the route
     * @return \Route69\Route
     */
    public function when($path, array $settings = null){
        $this->routes[] = array(
            "path"     => $path,
            "settings" => $settings
        );
        return $this;
    }

    /**
     * If no when statement gets executed default to this
     * @param array $settings
     * @return \Route69\Route
     */
    public function otherwise(array $settings){
        $this->routes[] = array(
            "fallback" => true,
            "settings" => $settings
        );
        return $this;
    }

    /**
     * Gets a list of all the setup routes
     * @return type
     */
    public function getRoutes(){
        return $this->routes;
    }

    public function setStrict($isStrict){
        $this->strict = (bool)$isStrict;
    }

    public function getStrict(){
        return $this->strict;
    }

}
