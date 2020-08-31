<?php 
    //file system  - method 1

    //$file = readfile('readme.txt');
    //echo $file;

    /*
    $file = 'readme.txt';
    //to check if file exist
    if(file_exists($file))
    {
        //read file
        echo readfile($file) . '<br/>';
        //copy file
        copy($file, 'newreadme.txt');
        //path of file
        echo realpath($file) . '<br/>';
        //file sixe
        echo filesize($file) . '<br/>';
        //rename file
        rename($file, 'test.txt');
    }
    //make directory
    mkdir('files');
    */

    //file system method 2
    $file='test.txt';
    //opening for reading
    $handle= fopen($file,'a+'); //r - reading only, r+ read & write (over the original), a+ places
    //places pointer at the end

    //read a single line
    echo fread($handle, filesize($file)); // 2nd arrgu how many bytes want to read
    echo fgets($handle); // only single line
    echo fgets($handle); // read 2nd line ... as pointer on file is on next line

    //read a single character
    fgetc($handle);

    //writing to a file
    fwrite($handle, "\n hmmmmm"); // write over the original

    fclose($handle);

    unlink('newreadme.txt'); // to delete the file

?>