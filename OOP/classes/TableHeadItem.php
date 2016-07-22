<?php

class TableHeadItem
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
        echo "<th>" . $this->content . "</th>";
    }
}