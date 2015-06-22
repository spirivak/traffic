
	
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
																	<th >Статус</th>
																	<th >Тип оффера</th>
																	<th >CPA</th>
																	<th >Источники трафика</th>
																	<th >Затраты</th>
																	<th >Профит</th>
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
																						WHERE user_id=1
																						ORDER BY suboff_id');

																while ($row = mysqli_fetch_assoc($res)) {
																	$r=$row['suboff_id'];
																	$e=$row['status_value'];
																	$q="SELECT status_value as st_v FROM status WHERE status_value != '$e' ";
																	$st=mysqli_query($db,$q);
																	echo "<tr><td >".$row['suboff_id']."</td>
																	<td >".$row['name']."</td>
																	<td >
																		<select id='$r'>
																			<option>".$row['status_value']."</option>";
																			while ($row2 = mysqli_fetch_assoc($st)) {
																				echo "<option>".$row2['st_v']."</option>";
																			}
																		echo "</select>
																	</td>
																	<td >".$row['t_name']."</td>
																	<td >".$row['cpa_name']."</td>
																	<td >".$row['value']."</td>";
																	if (isset($row['cost']) && isset($row['konv']) && isset($row['tarif'])) echo
																	"<td >".$row['cost']."</td>
																	<td >".(round(($row['konv']*$row['tarif'])/$row['click'],1)-round($row['cost']/$row['click'],1))*$row['click']."</td>
																	<td >".round(((round(($row['konv']*$row['tarif'])/$row['click'],1)-round($row['cost']/$row['click'],1))*$row['click'])/$row['cost'],2)."</td>";
																	else echo 
																	"<td >"."-----"."</td>
																	<td >"."------"."</td>
																	<td >"."-----"."</td>";
																	echo "</tr>";
																																
																}
																
															 ?>
															 <script>

																$( "select" ).change(function () {
																	var id = $(this).attr('id');
																	var slctd_val = $(this).val();
																	 $.post('my_ajax_receiver.php', {id:id, slctd_val:slctd_val} );
																	
																});

															</script>
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
