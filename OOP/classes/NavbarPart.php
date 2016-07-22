<?php

/**
 * Created by PhpStorm.
 * User: narek
 * Date: 7/22/16
 * Time: 9:13 PM
 */
class NavbarPart
{
    private $type;
    private $navbarList;

    /**
     * NavbarPart constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        if ($type = "left" || $type == "right")
        {
            $this->type = $type;
        }
    }
    
    public function setNavbarList(NavbarList $navbarList)
    {
        $this->navbarList = $navbarList;
    }
    
    public function draw()
    {
        echo '<div class = "navbar-' . $this->type . '">';
        $this->navbarList->draw();
        echo '</div>';
    }
}