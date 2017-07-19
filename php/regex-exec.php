<?php
$file_name = $_GET["path"];
if(!preg_match("/^[\/a-zA-Z0-9\-\s_]+\.rpt$/m", $file_name)) {
    echo "regex failed";
} else {
    echo exec("/usr/bin/file -i -b " . $file_name);
}
?>