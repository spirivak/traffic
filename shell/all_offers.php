
	
	<?php include_once("bd.php");?>

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

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
    </div>
    <div id="main-container">
		<?php include("menu.php");?>
        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i>Мои офферы</h2>
                
                <div class="page-bar">
                    <div class="btn-toolbar"> </div>
                </div>
            </div>
            <!-- // page head -->
            
            <div id="page-content" class="page-content tab-content overflow-y">
                <div id="TabTop1" class="tab-pane padding-bottom30 active fade in">
                    <div class="row-fluid">
                        <div class="span12 grider">
                            <div class="widget widget-simple">
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="accounForm" class="form-horizontal"  >
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
													
                                                        <table width="100%" id="two" class="table table-striped table-bordered boo-table table-condensed" cellspacing="0" cellpadding="4" >
															 <thead>
																<tr>
																	<th >№</th>
																	<th >Имя</th>
																	<th >Тип оффера</th>
																	<th >CPA</th>
																	<th >Дата запуска</th>
																	<th >Разрешенный трафик</th>
																	<th >Примеры лендингов</th>
																	<th >Оплата</th>
																	<th >Тариф</th>
																	<th >Гео</th>
																	<th >СR</th>
																	<th >СРC</th>
																	<th >Время жизни,дн.</th>
																	<th >Холд,дн.</th>
																	<th >Примечания</th>
																</tr>  
															 </thead>
															 
															 <?php
																$res=mysqli_query($db,'SELECT
																							*
																						FROM
																							offers
																						LEFT JOIN offer_types ON offers.type = offer_types.id
																						LEFT JOIN cpa_types ON offers.cpa = cpa_types.id
																						LEFT JOIN payment ON offers.pay = payment.id
																						LEFT JOIN currency ON offers.curr = currency.id
																						LEFT JOIN rate_currency ON offers.curr_t = rate_currency.id
																						ORDER BY id_off');
																while ($row = mysqli_fetch_assoc($res)) {
																	
																	$str='';
																	$str2='';
																	$str3='';
																	$str4='';
																	$str5='';
																	
																	$t = $row["cpa"];
																	$r="SELECT cpa_name FROM cpa_types where id in ($t)";
																	$traft=mysqli_query($db,$r) or die (mysql_error());	
																	
																	while ($row2 = mysqli_fetch_array($traft)) {
																		$str.=$row2["cpa_name"]."<br />";	
																	}
																	
																	$t1 = $row["traffic"];
																	$r1="SELECT traf_name FROM avail_traf where id in ($t1)";
																	$traft=mysqli_query($db,$r1) or die (mysql_error());	
																	
																	while ($row3 = mysqli_fetch_array($traft)) {
																		$str2.=$row3["traf_name"]."<br />";	
																	}
																	
																	$id = $row['id_off'];
																	$l="SELECT landing_val FROM landings WHERE id_o='$id'";
																	$lands = mysqli_query($db,$l) or die (mysql_error());
																	
																	while ($row4 = mysqli_fetch_array($lands)) {
																		$str3.=$row4["landing_val"]."<br />";	
																	}
																	
																	$opt="SELECT pay_val,rate,curname FROM oplata_tarif LEFT JOIN payment ON oplata_tarif.pay=payment.id LEFT JOIN currency ON oplata_tarif.currency=currency.id WHERE of_id='$id'";
																	$optv = mysqli_query($db,$opt) or die (mysql_error());
																	while ($row4 = mysqli_fetch_array($optv)) {
																		$str4.=$row4["pay_val"]."<br />";	
																		$str5.=$row4["rate"].$row4["curname"]."<br />";	
																	}
																	
																	echo "<tr id=$id><td>".$row['id_off']."</td>
																	<td >".$row['name']."</td>													
																	<td >".$row['t_name']."</td>
																	<td >".$str."</td>
																	<td >".date("d.m.Y",strtotime($row['startdate']))."</td>
																	<td >".$str2."</td>
																	<td >".$str3."</td>
																	<td >".$str4."</td>
																	<td >".$str5."</td>
																	<td >".$row['geo']."</td>
																	<td >".$row['cp']."</td>
																	<td >".$row['cpc']."</td>
																	<td >".$row['livetime']."</td>
																	<td >".$row['hold']."</td>
																	<td >".$row['prim']."</td></tr>";																
																}
															 ?>

														</table>
														
														<script>
																$("tr").css('cursor', 'pointer');
															 
																$('#two tr').click(function(){
																	var idtr = $(this).attr('id');
																		
																	$.get('111.php',{idtr:idtr});
																	location.href="offer_red.php";
																});
														</script>
														
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>                       
                    </div>
                </div> 
			</div>
        </div>
    </div>

<?php include("footer.php");?>

<?php include("js.php");?>
</body>
</html>
