<?php

class Pagination
{
    private $listItems;

    /**
     * Pagination constructor.
     */
    public function __construct()
    {
        $this->listItems = [];
    }

    public function addListItem(ListItem $listItem)
    {
        $this->listItems[] = $listItem;
    }

    public function draw()
    {
        echo '<nav>';
        echo '<ul class = "pagination">';
        echo '<li>';
        echo '<a href="#" aria-label="Previous"> <span aria-hidden="true">&laquo; </span> </a>';
        echo '</li>';
        foreach ($this->listItems as $listItem){
            $listItem->draw();
        }
        echo '<li>';
        echo '<a href="#" aria-label="Next"> <span aria-hidden="true">&raquo; </span> </a>';
        echo '</li>';
        echo '</ul>';
        echo '</nav>';
    }
}