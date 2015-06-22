<?php
    $db = mysqli_connect ("localhost","root","") or die ("1");
    mysqli_select_db($db,'traffic_db')or die ("2");
	
	mysqli_query ($db,'SET CHARACTER SET utf8'); // от кракозябр!! НЕ ТРОГАТЬ!!!
	mysqli_query ($db,'SET character_set_connection = utf8'); //от знаков вопроса при записи!! НЕ ТРОГАТЬ!!!
	mysqli_query ($db,'SET collation_connection = utf8'); //НЕ ТРОГАТЬ
?> 