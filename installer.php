<?php
$action = $_GET['action'];
  if ($action == "install") {
    $random = rand(000000000,999999999);
    if (isset($_POST['domain']) && !empty($_POST['domain']) && isset($_POST['token']) && !empty($_POST['token']) && isset($_POST['chat_id']) && !empty($_POST['chat_id'])) {
      $domain = $_POST['domain'];
      $token = $_POST['token'];
      $chat_id = $_POST['chat_id'];
      $dbname = $_POST['dbname'];
      $dbusername = $_POST['dbusername'];
      $dbpassword = $_POST['dbpassword'];
      $base_code = "
<?php
error_reporting(0);
\$botToken = \"$token\";
\$dbUserName = \"$dbusername\";
\$dbPassword = \"$dbpassword\";
\$dbName = \"$dbname\";
\$botUrl = \"https://$domain/wizwiz_timebot/\";
\$admin = $chat_id;
?>
      ";
      file_put_contents("wizwiz_timebot/baseInfo.php",$base_code);
      $webhok = file_get_contents("https://api.telegram.org/bot$token/setWebhook?url=https://$domain/wizwiz_timebot/bot.php");
      echo $webhok;
      file_get_contents("https://api.telegram.org/bot$token/sendmessage?chat_id=$chat_id&&text=\"✅ The wizwiz bot has been successfully installed! @wizwizch , @PhoenixPars\"");
    $CreateDB = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/createDB.php");
    file_put_contents("wizwiz_timebot/createDB.php",$CreateDB);
    echo "<a href=\"https://$domain/wizwiz_timebot/createDB.php\">install DB and end instaltion</a>";
    } else {
    mkdir("wizwiz_timebot");
    mkdir("wizwiz".$random);
    $updateShareConfig = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/updateShareConfig.php");
    file_put_contents("wizwiz_timebot/updateShareConfig.php",$updateShareConfig);
    $search_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/search.php");
    file_put_contents("wizwiz_timebot/search.php",$search_php);
    $config_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/config.php");
    file_put_contents("wizwiz_timebot/config.php",$config_php);
    $bot_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/bot.php");
    file_put_contents("wizwiz_timebot/bot.php",$bot_php);
    mkdir("wizwiz_timebot/settings");
    $QRCode_jpg = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/QRCode.jpg");
    file_put_contents("wizwiz_timebot/settings/QRCode.jpg",$QRCode_jpg);
    $gift2all_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/gift2all.php");
    file_put_contents("wizwiz_timebot/settings/gift2all.php",$gift2all_php);
    $jdf_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/jdf.php");
    file_put_contents("wizwiz_timebot/settings/jdf.php",$jdf_php);
    $messagewizwiz_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/messagewizwiz.php");
    file_put_contents("wizwiz_timebot/settings/messagewizwiz.php",$messagewizwiz_php);
    $rewardReport_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/rewardReport.php");
    file_put_contents("wizwiz_timebot/settings/rewardReport.php",$rewardReport_php);
    $subLink_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/subLink.php");
    file_put_contents("wizwiz_timebot/settings/subLink.php",$subLink_php);
    $temp_txt = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/temp.txt");
    file_put_contents("wizwiz_timebot/settings/temp.txt",$temp_txt);
    $tronChecker_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/tronChecker.php");
    file_put_contents("wizwiz_timebot/settings/tronChecker.php",$tronChecker_php);
    $values_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/values.php");
    file_put_contents("wizwiz_timebot/settings/values.php",$values_php);
    $warnusers_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/warnusers.php");
    file_put_contents("wizwiz_timebot/settings/warnusers.php",$warnusers_php);
    $phpqrcode_zip = file_get_contents("https://github.com/PhoenixPars/wizwiz_host/raw/main/phpqrcode.zip");
    file_put_contents("wizwiz_timebot/phpqrcode.zip",$phpqrcode_zip);
    $zip = new ZipArchive;
if ($zip->open('wizwiz_timebot/phpqrcode.zip') === TRUE) {
    $zip->extractTo('wizwiz_timebot/phpqrcode/');
    $zip->close();
    echo 'ok';
    mkdir("wizwiz_timebot/pay");
    $TCTusorNL_png = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/pay/TCTusorNL.png");
    file_put_contents("wizwiz_timebot/pay/TCTusorNL.png",$TCTusorNL_png);
    $x7QSQv8qk_png = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/pay/x7QSQv8qk.png");
    file_put_contents("wizwiz_timebot/pay/x7QSQv8qk.php",$x7QSQv8qk_png);
    $back_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/pay/back.php");
    file_put_contents("wizwiz_timebot/pay/back.php",$back_php);
    $index_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/pay/index.php");
    file_put_contents("wizwiz_timebot/pay/index.php",$index_php);
    mkdir("wizwiz_timebot/assets");
    $a20bb620751bbea45_css = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/assets/20bb620751bbea45.css");
    file_put_contents("wizwiz_timebot/assets/20bb620751bbea45.css",$a20bb620751bbea45_css);
    $IRANSans_ttf = file_get_contents("https://github.com/PhoenixPars/wizwizxui-timebot/raw/main/assets/IRANSans.ttf");
    file_put_contents("wizwiz_timebot/assets/IRANSans.ttf",$IRANSans_ttf);
    $logo_png = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/assets/logo.png");
    file_put_contents("wizwiz_timebot/assets/logo.png",$logo_png);
    $style_css = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/assets/style.css");
    file_put_contents("wizwiz_timebot/assets/style.css",$style_css);
    $webconf_css = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/assets/webconf.css");
    file_put_contents("wizwiz_timebot/assets/webconf.css",$webconf_css);
    echo "<form method=\"post\">enter your domain :<input type=\"text\" name=\"domain\"><br>enter your token : <input type=\"text\" name=\"token\"><br>enter your chat_id : <input type=\"number\" name=\"chat_id\"><br>enter DBname : <input type=\"text\" name=\"dbname\"><br>enter dbusername :<input type=\"text\" name=\"dbusername\"><br>enter dbpassword:<input type=\"password\" name=\"dbpassword\"><br><input type=\"submit\" name=\"submit\"></form>";
} else {
    echo 'failed';
    echo 'pls reinstall';
}}
  } elseif ($action == "update") {
$bot_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/bot.php");
file_put_contents("wizwiz_timebot/bot.php",$bot_php);
$config_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/config.php");
file_put_contents("wizwiz_timebot/config.php",$config_php);
$createDB_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/createDB.php");
file_put_contents("wizwiz_timebot/createDB.php",$createDB_php);
include 'wizwiz_timebot/createDB.php';
    echo "Update success !";
  } else {
echo "       welcome to wizwiz indtaller       <br>";
echo "        my channel : @phoenixars         <br>";
echo " --------------------------------------- <br>";
echo " What do you want to do ?                <br>";
echo " <a href=\"?action=install\">Install</a> <br>";
echo " <a href=\"?action=update\">update</a>   <br>";
  }
    ?>
