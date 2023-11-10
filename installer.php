<?php
$action = $_GET['action'];
  if ($action == "install") {
    $random = rand(000000000,999999999);
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
    //$warnusers_php = file_get_contents("https://raw.githubusercontent.com/PhoenixPars/wizwizxui-timebot/main/settings/warnusers.php");
    //file_put_contents("wizwiz_timebot/settings/warnusers.php",$warnusers_php);
  } elseif ($action == "update") {

  } else {
echo "       welcome to wizwiz indtaller       ";
echo "        my channel : @phoenixars         ";
echo " --------------------------------------- ";
echo " What do you want to do ?                ";
echo " <a href=\"?action=install\">Install</a> ";
echo " <a href=\"?action=update\">update</a>  ";
  }
    ?>
