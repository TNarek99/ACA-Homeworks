<?php

class NavbarList
{
    private $listItems;

    /**
     * NavbarList constructor.
     * @param $listItems
     */
    public function __construct()
    {
        $this->listItems = [];
    }

    public function addListItem(NavbarListItem $listItem)
    {
        $this->listItems[] = $listItem;
    }
    
    public function draw()
    {
        echo '<ul class = "navbar-list">';
        foreach ($this->listItems as $listItem)
        {
            $listItem->draw();
        }
        echo '</ul>';
    }
}