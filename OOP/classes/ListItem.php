<?php

class ListItem
{
    private $content;
    private $href;

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }
    
    public function draw()
    {
        echo "<li>" . '<a href = "'.$this->href.'">' . $this->content . '</a>' . "</li>";
    }
}