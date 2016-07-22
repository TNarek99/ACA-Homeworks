<?php

class Navbar
{
    private $navbarLeftPart;
    private $navbarRightPart;

    /**
     * @param mixed $navbarLeftPart
     */
    public function setNavbarLeftPart(NavbarPart $navbarLeftPart)
    {
        $this->navbarLeftPart = $navbarLeftPart;
    }

    /**
     * @param mixed $navbarRightPart
     */
    public function setNavbarRightPart(NavbarPart $navbarRightPart)
    {
        $this->navbarRightPart = $navbarRightPart;
    }
    
    public function draw()
    {
        echo '<div class = "navbar">';
        $this->navbarLeftPart->draw();
        $this->navbarRightPart->draw();
        echo '<div class = "clear"></div>';
        echo '</div>';
    }
}