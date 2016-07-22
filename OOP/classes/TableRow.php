<?php

class TableRow
{
    private $tableItems;

    /**
     * TableRow constructor.
     */
    public function __construct()
    {
        $this->tableItems = [];
    }

    public function addItem(TableItem $tableItem)
    {
        $this->tableItems[] = $tableItem;
    }
    
    public function draw()
    {
        echo '<tr>';
        foreach ($this->tableItems as $tableItem){
            $tableItem->draw();
        }
        echo '</tr>';
    }

}