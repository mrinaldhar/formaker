<?php
$req = json_decode($_POST['data']);
shell_exec("mkdir -P generatedforms/".$req->title);
shell_exec("cp -r default/* generatedforms/".$req->title."/");

?>