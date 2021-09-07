<?php


function scanThisDirectory ($dirToScan){
    /*
    Function returning the files of a directory
    */
    $directory = $dirToScan;
    $scanned_directory = array_diff(scandir($directory), 
        array('..', '.'));
    $resumePdf = "";
    foreach ($scanned_directory as $file){
        if (str_contains($file, '.pdf')) {
            $resumePdf = $file;
        }
    }
    return $resumePdf;
}// end function scanThisDirectory