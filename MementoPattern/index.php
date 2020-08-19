<?php

namespace Editor;
namespace History;



$editor = new Editor("first sheet");
$history = new History($editor);

$history->push();
$editor->setContent("test");
$history->push();
$editor->setContent("tes22");
echo "\nClient: Now, let's rollback!\n\n";
$history->pop();
$history->pop();


?>