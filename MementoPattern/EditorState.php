<?php

interface EditorStateInterface
{
    public function getContent():string; 
}


class EditorState implements EditorStateInterface
{
    private $content;

    public function __construct(string $content = null){
        $this->content = $content;
       
    }

    public function getContent(): string
    {
        return $this->content;
    }
}

?>