<?php 
	session_start();
	include_once("bd.php");
	$id=$_SESSION["id"];
?>

<!DOCTYPE html>


<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title>TrafficIMA - Add new offer</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">
<?php include("css.php");?>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="assets/ico/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

</head>

<body class="sidebar-left ">


<div class="page-container">
<?php include("header.php");?>
            <div class="header-drawer">
                <div class="mobile-nav text-center visible-phone"> <a href="javascript:void(0);" class="mobile-btn" data-toggle="collapse" data-target=".sidebar"><i class="aweso-icon-chevron-down"></i> Главное меню</a> </div>
                <!-- // Resposive navigation -->
                <div class="breadcrumbs-nav hidden-phone">
                    <ul id="breadcrumbs" class="breadcrumb">
                        <li><a href="javascript:void(0);"><i class="fontello-icon-home f12"></i>Главная</a> <span class="divider">/</span></li>
                        <li class="active">Добавить оффер</li>
                        <!-- <li class="dropdown"><a href="javascript:void(0);">Таблицы</a> <span class="divider">/</span>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);">Table</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                                <li><a href="javascript:void(0);">Elements</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
                <!-- // breadcrumbs --> 
            </div>
            <!-- // drawer --> 
        </div>

    <div id="main-container">
		<?php include("menu.php");?>
    <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head" style="margin-top:74px;">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i>Редактировать оффер</h2>
                <p class="pagedesc" style="margin-left: 45px; margin-top: 0px;">Форма редактирования оффера</p>
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content tab-content overflow-y">
                <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                    <div class="row-fluid">
                        <div class="span8 grider">
                            <div class="widget widget-simple">
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="accounForm" class="form-horizontal" method="POST" action="" >
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            
                                                            <li class="control-group">
                                                                <label for="offerName" class="control-label">Наименование</label>
                                                                <div class="controls">
                                                                   <?php
																	
																	$res=mysqli_query($db,"Select name from offers where id_off='$id'");
																	$name = mysqli_fetch_assoc($res)["name"];
                                                                    echo '<input id="offerName" class="span11" type="text" value='.$name.' name="offerName" required>'
																?>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="offertype" class="control-label">Тип оффера</label>
                                                                <div class="controls">
																 <select id="offertype" class="selecttwo span6" name="offertype" required>
                                                                   <?php
																		$res2=mysqli_query($db,"Select * from offer_types WHere id = (Select type from offers where id_off='$id')");
																		while ($row = mysqli_fetch_assoc($res2)) {
																			printf('<option value="%s" selected>%s</option>',$row["id"],$row["t_name"]);
																		}
																																				
																		$res3=mysqli_query($db,"Select * from offer_types WHere id != (Select type from offers where id_off='$id')");
																		while ($row2 = mysqli_fetch_assoc($res3)) {
																			printf('<option value="%s">%s</option>',$row2["id"],$row2["t_name"]);
																		}
																		
																	?>
																	</select>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="control-group">
                                                                <label for="cpa" class="control-label">СРА</label>
                                                                <div class="controls">
                                                                   <select id="cpa" multiple="multiple" class="controls selecttwo span11" name="cpa[]" required>
																	<?php
																		$res=mysqli_query($db,"Select cpa from offers where id_off='$id'");
																		$cpa = mysqli_fetch_assoc($res)["cpa"];																		
																		
																		$res2=mysqli_query($db,"Select * from cpa_types where id in ($cpa)");	
																		while ($row2 = mysqli_fetch_assoc($res2)) {
																			printf('<option value="%s" selected>%s</option>',$row2["id"],$row2["cpa_name"]);
																		}
																		
																		$res3=mysqli_query($db,"Select * from cpa_types WHere id not in ($cpa)");
																		while ($row3 = mysqli_fetch_assoc($res3)) {
																			printf('<option value="%s">%s</option>',$row3["id"],$row3["cpa_name"]);
																		}?>
																</select>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="control-group">
                                                                <label for="date" class="control-label">Дата запуска</label>
                                                                <div class="controls ">
                                                                   <?php
																	$res=mysqli_query($db,"Select startdate from offers where id_off='$id'");
																	$date = mysqli_fetch_assoc($res)["startdate"];
                                                                    echo '<input id="date" class="span3" type="date" name="date" value='.$date.' required>'
																	?>
                                                                </div>
                                                            </li>
															
                                                            <li class="control-group">
                                                                <label for="trafic" class="control-label">Разрешенный трафик</label>
																<div class="controls">
																	<select id="trafic" multiple="multiple" class="controls selecttwo span11" name="trafic[]" required>
																		
																		<?php
																		$res=mysqli_query($db,"Select traffic from offers where id_off='$id'");
																		$traf = mysqli_fetch_assoc($res)["traffic"];																		
																		
																		$res2=mysqli_query($db,"Select * from avail_traf where id in ($traf)");	
																		while ($row2 = mysqli_fetch_assoc($res2)) {
																			printf('<option id="id_%s" value="%s" selected>%s</option>',$row2["id"],$row2["id"],$row2["traf_name"]);
																		}
																		
																		$res3=mysqli_query($db,"Select * from avail_traf where id not in ($traf)");
																		while ($row3 = mysqli_fetch_assoc($res3)) {
																			printf('<option id="id_%s" value="%s">%s</option>',$row3["id"],$row3["id"],$row3["traf_name"]);
																		}
																	?>		
																	</select>

																</div>
                                                            </li>
															
															
															
															
															<li class="control-group" id="tra_val" >
																<label for="tr_val"  class="control-label">Соц.сети</label>
																<div class="controls">
																	<select  multiple="multiple" class="controls selecttwo span11" name="tr_val[]">
																			
																	<?php
																		$res=mysqli_query($db,"Select soc_net from offers where id_off='$id'");
																		$soc_net = mysqli_fetch_assoc($res)["soc_net"];																		
																		if ($soc_net!=''){
																			$res=mysqli_query($db,"Select * from trafic_types where tr_id in ($soc_net)");
																				
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s" selected>%s</option>',$row["tr_id"],$row["value"]);
																			}
																			
																			$res3=mysqli_query($db,"Select * from trafic_types where tr_id not in ($soc_net) and av_tr_id=1");
																			while ($row2 = mysqli_fetch_assoc($res3)) {
																				printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																			}
																		} else 
																		{
																			$res3=mysqli_query($db,"Select * from trafic_types where av_tr_id=1");
																			while ($row2 = mysqli_fetch_assoc($res3)) {
																				printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																			}
																		}
																	?>		
																			
																	</select>
																</div>
															</li>
															
															<li class="control-group" id="tra_val2">
																<label  class="control-label">Поисковые системы</label>
																<div class="controls">
																	<select   multiple="multiple" class="controls selecttwo span11" name="tr_val2[]">
																			
																			<?php
																		$res=mysqli_query($db,"Select s_sys from offers where id_off='$id'");
																		$s_sys = mysqli_fetch_assoc($res)["s_sys"];																		
																		if ($s_sys!=''){
																			$res=mysqli_query($db,"Select * from trafic_types where tr_id in ($s_sys)");
																				
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s" selected>%s</option>',$row["tr_id"],$row["value"]);
																			}
																			
																			$res3=mysqli_query($db,"Select * from trafic_types where tr_id not in ($s_sys) and av_tr_id=2");
																			while ($row2 = mysqli_fetch_assoc($res3)) {
																				printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																			}
																		} else 
																		{
																		$res3=mysqli_query($db,"Select * from trafic_types where av_tr_id=2");
																		while ($row2 = mysqli_fetch_assoc($res3)) {
																			printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																		}
																		}
																	?>	
																			
																	</select>
																</div>
															</li>
															
															<li class="control-group" id="tra_val3" >
																<label  class="control-label">Тизерные сети</label>
																<div class="controls">
																	<select   multiple="multiple" class="controls selecttwo span11" name="tr_val3[]">
																			<?php
																		$res=mysqli_query($db,"Select tiz_net from offers where id_off='$id'");
																		$tiz_net = mysqli_fetch_assoc($res)["tiz_net"];																		
																		
																		if ($tiz_net!=''){
																			$res=mysqli_query($db,"Select * from trafic_types where tr_id in ($tiz_net)");
																				
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s" selected>%s</option>',$row["tr_id"],$row["value"]);
																			}
																			
																			$res3=mysqli_query($db,"Select * from trafic_types where tr_id not in ($tiz_net) and av_tr_id=3");
																			while ($row2 = mysqli_fetch_assoc($res3)) {
																				printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																			}
																		} else {
																			$res3=mysqli_query($db,"Select * from trafic_types where av_tr_id=3");
																			while ($row2 = mysqli_fetch_assoc($res3)) {
																				printf('<option value="%s">%s</option>',$row2["tr_id"],$row2["value"]);
																			}
																		}
																	?>	
																			
																	</select>
																</div>
															</li>
															
															
															<script>
																$( "#trafic" ).click(function () {
																	if($("#id_1").is(":selected")) {
																		$( "#tra_val" ).show();
																	} else {
																		$( "#tra_val" ).hide();
																	}
																	if($("#id_2").is(":selected")) {
																		$( "#tra_val2" ).show();
																	} else {
																		$( "#tra_val2" ).hide();
																	}
																	if($("#id_3").is(":selected")) {
																		$( "#tra_val3" ).show();
																	} else {
																		$( "#tra_val3" ).hide();
																	}
																});
															</script>
															
                                                            <li class="control-group">
                                                                <label for="landExmp" class="control-label">Лендинг</label>
																<div class="controls land">
																<?php
																	$l="SELECT landing_val FROM landings WHERE id_o='$id'";
																	$lands = mysqli_query($db,$l) or die (mysql_error());
																	
																	$i=1;
																	while ($row4 = mysqli_fetch_array($lands)) {																	
																		echo '<input id="landExmp'.$i.'" class="span11" type="text"  value="'.$row4["landing_val"].'" name="landExmp" required>';
																	}
																?>

																</div>
                                                            </li>
                                                            
															<script>																
																var varb = 2;
																$("#btn_land_plus").click(function(){
																	var idEx='landExmp'+varb;
																	var btnId='btn'+varb;
																	$(".land").append('<div class="n'+varb+'"><input id='+idEx+' class="span10" type="text" name="landExmp[]" value="" required> <input id="btn_min'+varb+'" class="span1" type="button" name="" value="-" ></div>');
																	
																	
																	$('#btn_min'+varb).click(function(){
																		$("#"+idEx).parent().remove();
																		varb--;
																	});
																	varb++;
																});

															</script>
															
															<li class="control-group">
                                                                <label for="pay" class="control-label">Оплата и тариф</label>
                                                                <div class="controls paym">
																
																	<?php
																		$opt="SELECT * FROM oplata_tarif LEFT JOIN payment ON oplata_tarif.pay=payment.id LEFT JOIN currency ON oplata_tarif.currency=currency.id WHERE of_id='$id'";
																		$optv = mysqli_query($db,$opt) or die (mysql_error());
																		
																		while ($row = mysqli_fetch_assoc($optv)) {
																			echo '<div id="lol">
																			<select id="pay" class="selecttwo  span6" name="pay[]"> 
																				<option value="'.$row["pay"].'" selected>'.$row["pay_val"].'</option>
																			
																			</select>
																			
																			<input id="rate" class="span3" type="text" name="rate[]" value="'.$row["rate"].'" >
																			<select id="curr" class="selecttwo span2" name="currT[]" >
																				<option value="'.$row["currency"].'" selected>'.$row["curname"].'</option>
																			</select>
																			
																			</div>
																			';
																		}
																				
																	?>
																	
																	<!--<div id="lol">
																	<select id="pay" class="selecttwo span6" name="pay[]" required>
																		<option>&nbsp;</option>
																		<?php
																			
																			/*$res=mysqli_query($db,"SELECT pay_val,rate,curname FROM oplata_tarif LEFT JOIN payment ON oplata_tarif.pay=payment.id");
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["pay_val"]);
																			}
;																		?>
																	</select>
																	<input id="rate" class="span3" type="text" name="rate[]" value="" required>
																	<select id="curr" class="selecttwo span2" name="currT[]" required>
																		<option>&nbsp;</option>
																		<?php
																			
																			$res=mysqli_query($db,"Select * from currency");
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["curname"]);
																			}*/
																	?>
																	</select>
																	<input id="btn_pay_plus" class="span1" type="button" name="" value="+" >
																	</div>-->
                                                                </div>
                                                            </li>
															
															<script>
																var perm = 2;
																$("#btn_pay_plus").click(function(){
																	var idEx='pay'+perm;

																	  $(".paym").append('<div id="lol'+perm+'"> <select id='+idEx+' class="selecttwo span6" name="pay[]" required></select> <input id="rate'+perm+'" class="span3" type="text" name="rate[]" value="" required> <select id="curr'+perm+'" class="selecttwo span2" name="currT[]" required></select> <input id="btn_t'+perm+'" class="span1" type="button" name="" value="-" > </div>');
																	
																	var $options = $("#pay > option").clone();
																	$('#'+idEx).append($options);
																	
																	var $options2 = $("#curr > option").clone();
																	$('#curr'+perm).append($options2);
																	
																	$('#btn_t'+perm).click(function(){
																		$("#"+idEx).parent().remove();
																		perm--;
																	});
																	perm++;
																});
															</script>
												
							<!--    Здесь должно быть ГЕО   -->
							
															<li class="control-group">
                                                                <label for="cp" class="control-label">СР, %</label>
                                                                <div class="controls">
                                                                     <?php
																		$res=mysqli_query($db,"Select cp from offers where id_off='$id'");
																		$cp = mysqli_fetch_assoc($res)["cp"];
																		echo '<input id="cp" class="span2" type="text" name="cp" value='.$cp.' required>'
																	?>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="cpc" class="control-label">СРС, %</label>
                                                                <div class="controls">
                                                                   <?php
																	$res=mysqli_query($db,"Select cpc from offers where id_off='$id'");
																	$cpc = mysqli_fetch_assoc($res)["cpc"];
																	echo ' <input id="cpc" class="span2" type="text" name="cpc" value='.$cpc.' required>'?>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="lifeTime" class="control-label">Время жизни кука, дн</label>
                                                                <div class="controls">
                                                                    <?php
																		$res=mysqli_query($db,"Select livetime from offers where id_off='$id'");
																		$lt = mysqli_fetch_assoc($res)["livetime"];
															
																		echo '<input id="lifeTime" class="span2" type="text" name="lifeTime" value='.$lt.' required>'?>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="hold" class="control-label">Холд, дн</label>
                                                                <div class="controls">
                                                                   <?php
																		$res=mysqli_query($db,"Select hold from offers where id_off='$id'");
																		$hold = mysqli_fetch_assoc($res)["hold"];
																		
																		echo '<input id="hold" class="span2" type="text" name="hold" value='.$hold.' required>'?>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="prim" class="control-label">Примечания</label>
                                                                <div class="controls">
                                                                   <?php
																	$res=mysqli_query($db,"Select prim from offers where id_off='$id'");
																	$prim = mysqli_fetch_assoc($res)["prim"];
																	
																	echo "<input id='prim' class='span11' type='textarea' name='prim' value='".$prim."' required>"
																	?>
                                                                </div>
                                                            </li>
                                                        </ul>
														
                                                    </fieldset>
                                                    
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions" style="margin-top:0!important;">
                                                        <button type="submit" class="btn btn-blue" name="updateOffer">Сохранить</button>
                                                        <button id="cancel" class="btn cancel">Отмена</button>
                                                    </div>
													
													<script>
														$("#cancel").click(function(){location.href="index.php";});	
													</script>
													
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
              
                    </div>

                </div>
             </div>
    </div>
         
<?php include("footer.php");?>
</div>
<!-- // page-container  --> 

<?php include("js.php");?>
</body>
</html>
