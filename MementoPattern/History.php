<?php

namespace Editor;

class History{
    private $states = [];
    private $editor;

    public function __construct(Editor $editor){
        $this->editor = $editor;
    }

    public function push(): void
    {
        echo "\n History: Saving Editor's state ...";
        $this->states[]= $this->editor->createState();
    }

    public function pop(): void
    {
        if (!count($this->states)){
            return;
        }
        $state = array_pop($this->states);
        echo "History: Restoring state to previous. \n";
        try{
            $this->editor->restoreContent($state);
        }catch (\Exception $e){
            $this->pop();
        }
    }

    public function showHistory(): void
    {
        echo "History: Here's the list of mementos:\n";
        foreach ($this->states as $state) {
            echo $state. "\n";
        }
    }

}


?>