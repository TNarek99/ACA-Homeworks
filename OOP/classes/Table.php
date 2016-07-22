<?php

class Table
{
    private $tableHead;
    private $tableRows;

    /**
     * Table constructor.
     */
    public function __construct()
    {
        $this->tableRows = [];
    }

    public function addRow(TableRow $tableRow){
        $this->tableRows[] = $tableRow;
    }

    public function setHead(TableHead $tableHead){
        $this->tableHead = $tableHead;
    }
    
    public function draw()
    {
        echo '<table class = "table table-striped">';
        $this->tableHead->draw();
        foreach ($this->tableRows as $tableRow){
            $tableRow->draw();
        }
        echo '</table>';
    }

}