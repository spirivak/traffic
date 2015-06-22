<?php

	include_once("bd.php");
	
	if (isset($_POST["updateOffer"])){
		
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
		
		$landExmp=$_POST["landExmp"];
		$pay=$_POST["pay"];
		$curr=$_POST["curr"];
		$rate=$_POST["rate"];
		$curr_t=$_POST["currT"];
		$geo=$_POST["geo"];
		$cp=$_POST["cp"];
		$cpc=$_POST["cpc"];
		$lifeTime=$_POST["lifeTime"];
		$hold=$_POST["hold"];
		$prim=$_POST["prim"];

		$query="UPDATE offers SET
										name='$name',
										user_id=1,
										type='$type',
										cpa='$cpa_val',
										startdate='$date',
										traffic='$traf',
										land = '$landExmp',
										pay = '$pay',
										curr = '$curr',
										rate='$rate',
										curr_t='$curr_t',
										geo='$geo',
										cp='$cp',
										cpc = '$cpc',
										livetime='$lifeTime',
										hold='$hold',
										prim='$prim',
										soc_net='$trval',
										s_sys='$trval2',
										tiz_net='$trval3'

					WHERE id_off=3";
		
		//echo $query; 
		
		mysqli_query($db,$query);
		
		/*$id=mysqli_fetch_assoc(mysqli_query($db, "SELECT id_off from offers ORDER BY id_off desc LIMIT 1"))["id_off"];
	
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
				mysqli_query($db,"INSert into sub_offers (off_id,st,cpa,tr_type) values (3,0,$cpaOpt,$trOpt)");
			}
		}*/
		
		end:header("location:add_new_offer.php");
	}
	
	
?>