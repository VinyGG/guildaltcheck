<?php
echo "viny";

$region = "us";
$realm = "azralon";
$guild = "Saltlords"; 
$key = "US1qMcOzTR6RhRXtAcqU492bBTJGG53kZC";
$url = "https://us.api.blizzard.com/wow/character/azralon/Domy?locale=en_US&access_token=USeRj1SRgddcRV7irEHtVzbkdKM3FFGLM8";

//Guil Members
$url = "http://".$region.".api.blizzard.com/wow/guild/".$realm."/".$guild."?fields=members&locale=en_US&access_token=".$key;
$ch = curl_init($url);
print_r($ch);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$members = json_decode(curl_exec($ch));
$members = $members->members;
print_r($members);
$json = file_get_contents($url);
$members = json_decode($json, true);
print_r($members);
//exit;
//GetAchievements
function getAchiev($charName) {
    global $region;
    global $realm;
    global $guild;
    global $key;
    $url2 = "https://".$region.".api.blizzard.com/wow/character/".$realm."/".$charName."?locale=en_US&access_token=".$key;
    $ch2 = curl_init($url2);
    curl_setopt($ch2, CURLOPT_RETURNTRANSFER, true);
    $char = json_decode(curl_exec($ch2));
    print_r($char);
    return $char->achievementPoints;
}

foreach ($members as $member) {
    $charName = $member->character->name;
    echo $member->character->name . "(" . GetAchiev($member->character->name) . ")" . " | ";
}
exit;
foreach ($members as $member) {
    $charName = $member->character->name;
    echo $charName . "(" . GetAchiev($charName) . ")" . " | ";
    foreach ($members as $memberNext) {
        if (GetAchiev($member->character->name) == GetAchiev($memberNext->character->name)) {
            echo $memberNext->character->name . "(" . GetAchiev($memberNext->character->name) . ") ";
        }
    }
    echo "\n";
}
?>