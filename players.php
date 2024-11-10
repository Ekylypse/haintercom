<?php

require('haconfig.php');

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, array($auth));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FAILONERROR, true);
$result = curl_exec($ch);
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
} else { $error_msg = 'valid'; }
curl_close($ch);
//echo $error_msg;
//echo $result;
//echo '<br>';

$info = json_decode($result,true);

$entity_id = $info['entity_id'];
$state = $info['state'];
$last_changed = $info['last_changed'];

echo $entity_id.'  '.$state.'  '.$last_changed;

//foreach($info as $key => $value) {
?>

	<select name='media_player' id='media_player'>

<?php
foreach($info as $key => $value) {
	foreach($value as $val => $content) if ($val == 'entity_id') {
		if(str_contains($content, 'media')){
	  echo "<option value='" . $content . "'>" . $content . "</option>"; }
	}
}
?>
	</select>

<?php


?>
