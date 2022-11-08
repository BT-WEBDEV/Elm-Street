<?php

function get_employes() {
	$employees_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/data/employees.json";
	$employees_json = file_get_contents($employees_url);
	$data = json_decode($employees_json,true);
	return $data['employees'];
}

function get_communitites() {
	$employees_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]/data/communities.json";
	$employees_json = file_get_contents($employees_url);
	$data = json_decode($employees_json,true);
	return $data['communities'];
}


?>