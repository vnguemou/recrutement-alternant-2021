<?php
/**
 * @package show_social_network
 * @version 1.7.2
 */
/*
Plugin Name: show_social_network
Plugin URI: http://wordpress.org/plugins/show_social_network/
Description: Afficher la liste des réseaux sociaux
Author: NGUEMOU Vanelle
Version: 1.7.2
*/

include_once("Models/SocialNetwork.php");
include_once("Controllers/SocialNetworkController.php");

$socialNetworkController = new SocialNetworkController();
$listSocialNetwork = $socialNetworkController->getListSocialNetwork();

$htmlRendu = "<div><ul>";

foreach ($listSocialNetwork as $socialNetwork) {
	$htmlRendu .= "<li>".$socialNetwork->getName()." : "."<a href='".$socialNetwork->getLink()."'>".$socialNetwork->getLink()."</a></li>";
}

$htmlRendu .= "</ul></div>";

echo $htmlRendu;