<?php
 		 $data = json_decode(file_get_contents("https://api.vagalume.com.br/rank.php?apikey=660a4395f992ff67786584e238f501aa&type=art&period=week&periodVal=201134&scope=all&limit=3"));
 		 $result = $data->art->week->all;
 ?>