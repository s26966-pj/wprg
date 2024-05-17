<?php
    if(isset($_FILES['uploaded_file']['name'])) {
        $uploded_file = $_FILES['uploaded_file']['name'];
        $fd = fopen($uploded_file,"r+");
        $fcontent = fread($fd,filesize($uploded_file));
        $lines = explode("\n",$fcontent);
        $lines = array_reverse($lines);
        $freversed = implode("\n", $lines);
        rewind($fd);
        fwrite($fd, $freversed);
        fclose($fd);

        echo "Wiersze w pliku zostały odwrócone";
    }
?>