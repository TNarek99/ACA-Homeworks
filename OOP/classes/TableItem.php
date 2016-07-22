<?php

class TableItem
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
        echo "<td>" . $this->content . "</td>";
    }
}