<?php

class NavbarListItem
{
    private $content;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
    
    public function draw()
    {
        echo '<li class = "navbar-list-item">';
        echo $this->content;
        echo '</li>';
    }
}