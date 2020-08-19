<?php

namespace EditorState;

class Editor {
    private $content;

    public function __construct(string $content){
        $this->content = $content;
        echo "The Original Content is {$this->content}\n";
    }
    public function setContent(string $content){
        $this->content = $content;
        echo "The Content changed to {$this->content}\n";
    }

    public function getContent() : string {
        return $this->content;
    }

    public function createState() : EditorStateInterface {
        return new EditorState($this->content);
    }

    public function restoreContent(EditorState $editorState) : void {
         $this->content = $editorState->getContent();
         echo "my content changed to: {$this->content}\n";
    }
}

?>