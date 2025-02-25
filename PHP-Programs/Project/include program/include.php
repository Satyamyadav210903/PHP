<?php
    $file = 'os.pdf';
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' .$file.'"');
   // header('Content-Transfer-Encoding: binary');
   // header('accept-Renges: bytes');
    @readfile($file);
?>