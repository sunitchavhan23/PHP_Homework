<?php 
$demo = "file.txt";
function read($demo){
    if (file_exists($demo)) {
            $data=file_get_contents($demo);
            echo "$data";
        }
    }

    // read($demo);


    function write($demo,$name,$grade){
        $data="$name,$grade";
                file_put_contents($demo,array($name,$grade));
        echo "$data";
    }
    // write($demo,"Sunit","A+");

    function append($demo,$name,$grade){
        $data="$name,$grade";
                file_put_contents($demo,array($name,$grade),FILE_APPEND);
        echo "$data";
    }
    // append($demo,"Virat","B+");


    function delete($demo){
        if(file_exists($demo)){
            unlink($demo);
        echo "data delete";
       } else {
           echo "dataa not found";
        }
    }

    
    delete ($demo);
    









?>