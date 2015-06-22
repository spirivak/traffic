<?php

	include_once("bd.php");
	
	if (isset($_POST["saveOffer"])){
		
		
		$name=$_POST["offerName"];
		$type=$_POST['offertype'];
		
		foreach ($_POST['cpa'] as $selectedOption) {
			$cpa_mas[]=$selectedOption;
		}
		$cpa_val=implode(",",$cpa_mas);
		
		$date=$_POST["date"];
		
		foreach ($_POST['trafic'] as $selectedOption) {
			$trafic_mas[]=$selectedOption;
		}
		$traf=implode(",",$trafic_mas);
		
		if (isset($_POST['tr_val'])) {
			foreach ($_POST['tr_val'] as $selectedOption) {
				$tr_val_mas[]=$selectedOption;
			}
			$trval=implode(",",$tr_val_mas); // соц сети
		} else $trval='';
		
		if (isset($_POST['tr_val2'])) {
			foreach ($_POST['tr_val2'] as $selectedOption) {
				$tr_val2_mas[]=$selectedOption;
			}
			$trval2=implode(",",$tr_val2_mas); // поиск системы
		}else $trval2='';
		
		if (isset($_POST['tr_val3'])) {
			foreach ($_POST['tr_val3'] as $selectedOption) {
				$tr_val_mas3[]=$selectedOption;
			}
			$trval3=implode(",",$tr_val_mas3); // тизерные сети
		}else $trval3='';
		
		/*$landExmp=$_POST["landExmp"];
		$pay=$_POST["pay"];
		$curr=$_POST["curr"];
		$rate=$_POST["rate"];
		$curr_t=$_POST["currT"];*/
		$geo=$_POST["geo"];
		$cp=$_POST["cp"];
		$cpc=$_POST["cpc"];
		$lifeTime=$_POST["lifeTime"];
		$hold=$_POST["hold"];
		$prim=$_POST["prim"];

		$query="INSERT INTO offers ( 
										name,
										user_id,
										type,
										cpa,
										startdate,
										traffic,
										geo,
										cp,
										cpc,
										livetime,
										hold,
										prim,
										soc_net,
										s_sys,
										tiz_net
									)
									VALUES(	'$name',
											1, 
											'$type',
											'$cpa_val',
											'$date',
											'$traf',
											'$geo',
											'$cp',
											'$cpc',
											'$lifeTime',
											'$hold',
											'$prim',
											'$trval',
											'$trval2',
											'$trval3'
										)";
		
		//echo $query; 
		
		mysqli_query($db,$query);
		
		$q="Select id_off from offers Where name='$name'";
										
		$id=mysqli_fetch_assoc(mysqli_query($db,$q))["id_off"];

		if((isset($tr_val_mas))) 
			if ((isset($tr_val2_mas))) 
				if ((isset($tr_val_mas3))) $all_trafic=array_merge($tr_val_mas,$tr_val2_mas,$tr_val_mas3);
				else $all_trafic=array_merge($tr_val_mas,$tr_val2_mas);
			elseif ((isset($tr_val_mas3))) $all_trafic=array_merge($tr_val_mas,$tr_val_mas3);
			else $all_trafic=$tr_val_mas;
		elseif ((isset($tr_val2_mas))) 
			if ((isset($tr_val_mas3)))  $all_trafic=array_merge($tr_val2_mas,$tr_val_mas3);
			else $all_trafic=$tr_val2_mas;
			elseif ((isset($tr_val_mas3))) $all_trafic=$tr_val_mas3;
			else goto end;
		
		foreach ($cpa_mas as $cpaOpt) {
			foreach ($all_trafic as $trOpt) {
				mysqli_query($db,"INSert into sub_offers (off_id,st,cpa,tr_type) values ($id,0,$cpaOpt,$trOpt)");
			}
		}
		
		foreach ($_POST["landExmp"] as $landExmp) {
		 $q=("insert into landings (id_o,landing_val) values ('$id','$landExmp')");
		 mysqli_query($db,$q);
		 }
		 
		if (isset($_POST['pay'])) {
			foreach ($_POST['pay'] as $selectedOption) {
				$pay[]=$selectedOption;
			}
		}
		if (isset($_POST['rate'])) {
			foreach ($_POST['rate'] as $selectedOption) {
				$rate[]=$selectedOption;
			}
		}
		if (isset($_POST['currT'])) {
			foreach ($_POST['currT'] as $selectedOption) {
				$curr[]=$selectedOption;
			}
		}
		
		for($i=0;$i<count($pay);$i++)
		{
			$q=("insert into oplata_tarif (of_id,pay,rate,currency) values ($id,$pay[$i],$rate[$i],$curr[$i])");
			mysqli_query($db,$q);
		}
		
		
		end:header("location:add_new_offer.php");
	}
	
	
?>