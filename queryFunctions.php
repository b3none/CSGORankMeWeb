<?php

require_once("../../config.php");
function getTotalPlayers($steamID){
	$stmt = "SELECT count(steam) FROM rankme";
	$query = $dbh->prepare($stmt);
	$query->execute();
	$item = $query->fetchColumn();
	return $item;	
}

function getLastIP($steamID){
	$stmt = "SELECT lastip FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getScore($steamID){
	$stmt = "SELECT score FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getKills($steamID){
	$stmt = "SELECT kills FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getDeaths($steamID){
	$stmt = "SELECT deaths FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getAssists($steamID){
	$stmt = "SELECT assists FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getSuicides($steamID){
	$stmt = "SELECT suicides FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getTKs($steamID){
	$stmt = "SELECT tk FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getShots($steamID){
	$stmt = "SELECT shots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getHits($steamID){
	$stmt = "SELECT hits FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getHeadshots($steamID){
	$stmt = "SELECT headshots FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getConneced($steamID){
	$stmt = "SELECT connected FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getRoundsT($steamID){
	$stmt = "SELECT rounds_tr FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getRoundsCT($steamID){
	$stmt = "SELECT rounds_ct FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getLastConnected($steamID){
	$stmt = "SELECT lastconnect FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getKnife($steamID){
	$stmt = "SELECT knife FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getGlock($steamID){
	$stmt = "SELECT glock FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getP2000($steamID){
	$stmt = "SELECT hk2000 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getUSPS($steamID){
	$stmt = "SELECT usp_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getP250($steamID){
	$stmt = "SELECT p250 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getDeagle($steamID){
	$stmt = "SELECT deagle FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getElite($steamID){
	$stmt = "SELECT elite FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getFiveSeven($steamID){
	$stmt = "SELECT fiveseven FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getTec9($steamID){
	$stmt = "SELECT tec9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getCZ75A($steamID){
	$stmt = "SELECT cz75a FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getRevolver($steamID){
	$stmt = "SELECT revolver FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getNova($steamID){
	$stmt = "SELECT nova FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getX1014($steamID){
	$stmt = "SELECT xm1014 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getMag7($steamID){
	$stmt = "SELECT mag7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getSawedOff($steamID){
	$stmt = "SELECT sawedoff FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $iitem[0];
}

function getBizon($steamID){
	$stmt = "SELECT bizon FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getMac10($steamID){
	$stmt = "SELECT mac10 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getMp9($steamID){
	$stmt = "SELECT mp9 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}	

function getMP7($steamID){
	$stmt = "SELECT mp7 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getUMP45($steamID){
	$stmt = "SELECT ump45 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getP90($steamID){
	$stmt = "SELECT p90 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getGalilar($steamID){
	$stmt = "SELECT galilar FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getAK47($steamID){
	$stmt = "SELECT ak47 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getScar20($steamID){
	$stmt = "SELECT sccar20 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getFamas($steamID){
	$stmt = "SELECT famas FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getM4A4($steamID){
	$stmt = "SELECT m4a1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getM4a1S($steamID){
	$stmt = "SELECT m4a1_silencer FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getAug($steamID){
	$stmt = "SELECT aug FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getSSG08($steamID){
	$stmt = "SELECT ssg08 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getSG556($steamID){
	$stmt = "SELECT sg556 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getAWP($steamID){
	$stmt = "SELECT awp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getG3SG1($steamID){
	$stmt = "SELECT g3sg1 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getm249($steamID){
	$stmt = "SELECT m249 FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getNegev($steamID){
	$stmt = "SELECT negev FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getHeGernade($steamID){
	$stmt = "SELECT hegrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getFlashBang($steamID){
	$stmt = "SELECT flashbang FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getSmokeGrenade($steamID){
	$stmt = "SELECT smoekgrenade FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getInferno($steamID){
	$stmt = "SELECT inferno FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getDecoy($steamID){
	$stmt = "SELECT decoy FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getTaser($steamID){
	$stmt = "SELECT taser FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getHead($steamID){
	$stmt = "SELECT head FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getChest($steamID){
	$stmt = "SELECT chest FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getStomach($steamID){
	$stmt = "SELECT stomach FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getLeftArm($steamID){
	$stmt = "SELECT left_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getRightArm($steamID){
	$stmt = "SELECT right_arm FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getLeftLeg($steamID){
	$stmt = "SELECT left_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getRightleg($steamID){
	$stmt = "SELECT right_leg FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getC4Plants($steamID){
	$stmt = "SELECT c4_planted FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getC4Exploded($steamID){
	$stmt = "SELECT c4_exploded FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getC4Defused($steamID){
	$stmt = "SELECT c4_defused FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getCTWins($steamID){
	$stmt = "SELECT ct_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getTWins($steamID){
	$stmt = "SELECT tr_win FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getHostagesRescued($steamID){
	$stmt = "SELECT hostages_rescued FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getVIPKilled($steamID){
	$stmt = "SELECT vip_killed FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getVIPEscaped($steamID){
	$stmt = "SELECT vip_escaped FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getVIPPlayed($steamID){
	$stmt = "SELECT vip_played FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getMVP($steamID){
	$stmt = "SELECT mvp FROM rankme WHERE steam = :steamID";
	$query = $dbh->prepare($stmt);
	$query->bindValue(":steamID", $steamID);
	$query->execute();
	$item = $query->fetch(PDO::FETCH_ASSOC);
	return $item[0];
}

function getDamage($steamID){
  	$stmt = "SELECT damage FROM rankme WHERE steam = :steamID";
  	$query = $dbh->prepare($stmt);
  	$query->bindValue(":steamID", $steamID);
  	$query->execute();
  	$item = $query->fetch(PDO::FETCH_ASSOC);
  	return $item[0];
}