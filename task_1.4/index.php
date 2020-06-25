<?php

$filename = __DIR__ . "/data.json";
$result = [];
if (file_exists($filename))
    $result = json_decode (file_get_contents ($filename), true);
	
?>

<?php foreach ($result as $item => $value):



	if ($_SERVER['QUERY_STRING'] = 'set_viewed=' . $value[id]) {
		$value['viewed'] = $value['viewed']+ 1;
		$result = json_encode (file_put_contents ($filename), true);
		
	}



?>
<div>
	
    <b><?=$value['name']?></b><br>
    <small>Viewed: <?=$value['viewed']?></small><br>
    <?=$value['text']?><br><br>
    <a href="?set_viewed=<?=$value['id']?>">I watched</a>
    <hr>
</div>
	
<?php endforeach; ?>


