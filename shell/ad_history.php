
	
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
<div id="ajax_reciever"></div>

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
                <h2 class="page-title"><i class="fontello-icon-monitor"></i>История объявления</h2>
                
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
                                                        <table  width="10%" id="two" class="table table-striped table-bordered boo-table table-condensed" cellspacing="0" cellpadding="4" >
															 <thead>
																<tr>
																	<th >№ </th>
																	<th >Дата запуска</th>
																	<th >Дата остановки</th>
																	<th >Статус</th>
																	<th >CPA</th>
																	<th >Источники трафика</th>
																	<th >Фото</th>
																	<th >Текст</th>
																	<th >Затраты</th>
																	<th >Показы</th>
																	<th >Клики</th>
																	<th >Затрaты на 1 клик</th>
																	<th >CTR</th>
																	<th >Конверсии</th>
																	<th >% конверсий</th>
																	<th >Кликов для 1 конверсии</th>
																	<th >Затраты на 1 конверсию</th>
																	<th >Тариф</th>
																	<th >ВД</th>
																	<th >ВД с 1 клика</th>
																	<th >Профит(ВД-Затраты)</th>
																	<th >ROI</th>
																	
																</tr>  
															 </thead>
															   <?php
																$res=mysqli_query($db,'SELECT
																							*
																						FROM
																							sub_offers
																						LEFT JOIN offers on offers.id_off=sub_offers.off_id
																						LEFT JOIN status ON sub_offers.st = status.status_id
																						LEFT JOIN offer_types ON offers.type = offer_types.id
																						LEFT JOIN cpa_types ON sub_offers.cpa = cpa_types.id
																						LEFT JOIN trafic_types ON sub_offers.tr_type = trafic_types.tr_id
																						LEFT JOIN zatraty ON zatraty.sub_offer_id = sub_offers.suboff_id
																						ORDER BY suboff_id');

																while ($row = mysqli_fetch_assoc($res)) {
																	$str='';
																	$t = $row["traffic"];
																	$r="SELECT traf_name FROM avail_traf where id in ($t)"	;
																	$traft=mysqli_query($db,$r) or die (mysql_error());	
																	
																	while ($row2 = mysqli_fetch_array($traft)) {
																		$str.=$row2["traf_name"]."  ";	
																	}
																	
																	echo 
																	"<td >".$row['suboff_id']."</td>
																	<td >".date("d.m.Y",strtotime($row['startdate']))."</td>
																	<td >".$row['end_date']."</td>
																	<td style='text-align: center;'>".$row['status_icon']."</td>
																	<td >".$row['cpa_name']."</td>
																	<td >".$row['value']."</td>
																	<td >Фото</td>
																	<td >Текст</td>";
																	
																	if (isset($row['cost']) && isset($row['shows']) && isset($row['click']))
																		echo															
																	"<td >".$row['cost']."</td>
																	<td >".$row['shows']."</td>
																	<td >".$row['click']."</td>
																	<td >".round($row['cost']/$row['click'],1)."</td>
																	<td >".round($row['click']/$row['shows'],3)."</td>
																	<td >".$row['konv']."</td>
																	<td >".round($row['konv']/$row['click'],1)."</td>
																	<td >".round($row['click']/$row['konv'],1)."</td>
																	<td >".round($row['cost']/$row['konv'],1)."</td>
																	<td >".$row['tarif']."</td>
																	<td >".$row['konv']*$row['tarif']."</td>
																	<td >".round(($row['konv']*$row['tarif'])/$row['click'],1)."</td>
																	<td >".(round(($row['konv']*$row['tarif'])/$row['click'],1)-round($row['cost']/$row['click'],1))*$row['click']."</td>
																	<td >".round(((round(($row['konv']*$row['tarif'])/$row['click'],1)-round($row['cost']/$row['click'],1))*$row['click'])/$row['cost'],2)."</td>
																	</tr>";
																	else echo
																	"<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	<td >"."-----"."</td>
																	</tr>";
																}
															 ?>
														</table>
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
