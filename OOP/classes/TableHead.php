<?php

class TableHead
{
    private $tableHeadItems;

    /**
     * TableHead constructor.
     */
    public function __construct()
    {
        $this->tableHeadItems = [];
    }

    public function addHeadItem(TableHeadItem $tableHeadItem)
    {
        $this->tableHeadItems[] = $tableHeadItem;
    }

    public function draw()
    {
        echo '<thead>';
        foreach ($this->tableHeadItems as $tableHeadItem){
            $tableHeadItem->draw();
        }
        echo '</thead>';
    }
}