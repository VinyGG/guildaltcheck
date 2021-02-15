<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$token = "USIfJFShESg0XRTCHbavKmuMEcHUPd4PhY";
$region = "us";
$realm = "azralon";
$guild = "saltlords";
$interJson = "http://localhost/guildaltcheck/saltlords.json";
$urlName = "https://".$region.".api.blizzard.com/data/wow/guild/".$realm."/".$guild."/roster?namespace=profile-us&locale=en_US&access_token=".$token;
echo "$urlName";
exit;
$urlAchiev;
$members = json_decode(file_get_contents($urlName), true);
exit;
$names = $members['members'];
exit;
foreach ( $names as $name ) {
    echo $name['character']['name']."<br>" ;
}
exit;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        ?>
    </body>
</html>