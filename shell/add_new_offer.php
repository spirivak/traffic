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
    </div>
    <div id="main-container">
<?php include("menu.php");?>
        <div id="main-content" class="main-content container-fluid">
            <div class="row-fluid page-head">
                <h2 class="page-title"><i class="fontello-icon-monitor"></i>Новый оффер</h2>
                <p class="pagedesc" style="margin-left: 45px; margin-top: 0px;">Форма добавления нового оффера в CRM</p>
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
                                        <form id="accounForm" class="form-horizontal" method="POST" action="save_in_db.php" >
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            
                                                            <li class="control-group">
                                                                <label for="offerName" class="control-label">Наименование</label>
                                                                <div class="controls">
                                                                    <input id="offerName" class="span11" type="text" value="" name="offerName" required>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="offertype" class="control-label">Тип оффера</label>
                                                                <div class="controls">
                                                                    <select id="offertype" class="selecttwo span6" name="offertype" required>
																		<option>&nbsp;</option>
																		<?php
																			$res=mysqli_query($db,'Select * from offer_types');
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["t_name"]);
																			}
;																		?>
																	</select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="cpa" class="control-label">СРА</label>
                                                                <div class="controls">
                                                                   <select id="cpa" multiple="multiple" class="controls selecttwo span11" name="cpa[]" required>
																	<?php
																			$res=mysqli_query($db,'Select * from cpa_types');
																			
																			while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["id"],$row["cpa_name"]);
																			}
;																		?>
																</select>
                                                                </div>
                                                            </li>
                                                            
                                                            <li class="control-group">
                                                                <label for="date" class="control-label">Дата запуска</label>
                                                                <div class="controls ">
                                                                    <input id="date" class="span4" type="date" name="date" value="" required>
                                                                </div>
                                                            </li>
															
                                                            <li class="control-group">
                                                                <label for="trafic" class="control-label">Разрешенный трафик</label>
																<div class="controls">
																	<select id="trafic" multiple="multiple" class="controls selecttwo span11" name="trafic[]" required>
																		
																		<?php
																			$res=mysqli_query($db,'Select * from avail_traf');
																		
																			while ($row = mysqli_fetch_assoc($res)) {
																			printf('<option id="%s" value="%s">%s</option>',$row["id"],$row["id"],$row["traf_name"]);
																			}
																		?>
																	<select>

																</div>
                                                            </li>
															
															
															<script>
																$( "#trafic" ).click(function () {
																	if($("#1").is(":selected")) {
																		$( "#tra_val" ).show();
																	} else {
																		$( "#tra_val" ).hide();
																	}
																	if($("#2").is(":selected")) {
																		$( "#tra_val2" ).show();
																	} else {
																		$( "#tra_val2" ).hide();
																	}
																	if($("#3").is(":selected")) {
																		$( "#tra_val3" ).show();
																	} else {
																		$( "#tra_val3" ).hide();
																	}
																});
															</script>
															
															<li class="control-group" id="tra_val" style="display:none">
																<label for="tr_val"  class="control-label" style="text-align:right">Соц.сети</label>
																<div class="controls">
																	<select  id="tr_val" multiple="multiple" class="controls selecttwo span11" name="tr_val[]">
																			
																			<?php
																				$res=mysqli_query($db,'Select * from trafic_types where av_tr_id=1');
																			
																				while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option  value="%s">%s</option>',$row["tr_id"],$row["value"]);
																				}
																			?>
																			
																	</select>
																</div>
															</li>
															
															<li class="control-group" id="tra_val2" style="display:none">
																<label  class="control-label" style="text-align:right">Поисковые системы</label>
																<div class="controls">
																	<select   multiple="multiple" class="controls selecttwo span11" name="tr_val2[]">
																			
																			<?php
																				$res=mysqli_query($db,'Select * from trafic_types where av_tr_id=2');
																			
																				while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["tr_id"],$row["value"]);
																				}
																			?>
																			
																	</select>
																</div>
															</li>
															
															<li class="control-group" id="tra_val3" style="display:none">
																<label  class="control-label" style="text-align:right">Тизерные сети</label>
																<div class="controls">
																	<select   multiple="multiple" class="controls selecttwo span11" name="tr_val3[]">
																			<?php
																				$res=mysqli_query($db,'Select * from trafic_types where av_tr_id=3');
																			
																				while ($row = mysqli_fetch_assoc($res)) {
																				printf('<option value="%s">%s</option>',$row["tr_id"],$row["value"]);
																				}
																			?>
																			
																	</select>
																</div>
															</li>
															
                                                            <li class="control-group">
                                                                <label for="landExmp" class="control-label">Лендинг</label>
																<div class="controls land">
																	<input id="landExmp1" class="span10" type="text" name="landExmp[]" value="" required>
																	<input id="btn_land_plus" class="span1" type="button" name="" value="+" >
																	
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
																	<div id="lol">
																	<select id="pay" class="selecttwo span6" name="pay[]" required>
																		<option>&nbsp;</option>
																		<?php
																			
																			$res=mysqli_query($db,"Select * from payment");
																			
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
																			}
																	?>
																	</select>
																	<input id="btn_pay_plus" class="span1" type="button" name="" value="+" >
																	</div>
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
															
															<!--<li class="control-group">
                                                                <label for="geo" class="control-label">ГЕО</label>
                                                                <div class="controls">
                                                                    <input id="geo" class="span11" type="text" name="geo" value="" required>
                                                                </div>
                                                            </li>
                                                             // form item -->
															<!-- |-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-| -->
           				
	<li class="control-group">
    <label for="geo" class="control-label" style="padding-top : 25%;">ГЕО</label>
        <div class="controls">
            <div class="span11">

              <!-- tab navigation-->

              <ul class="nav nav-tabs" style="max-height : 37px;">
                  <li class="active"><a href="#tab1" data-toggle="tab"> Россия </a></li>
                  <li><a href="#tab2" data-toggle="tab"> СНГ(кроме России)</a></li>
              </ul>

                <div class="tab-content">
                 
<!-- ///////////////////////////////////////////////////////// Tab separation ///////////////////////////////////////////////////////// -->

    <div class="tab-pane active" id="tab1">
        <ul class="geo">
            <li><input type="checkbox" class="pickup region" value="Центр"> Центр
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Москва и область"> Москва и область 
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Москва"> Москва</li>
                            <li><input type="checkbox" class="pickup city" value="Балашиха"> Балашиха</li>
                            <li><input type="checkbox" class="pickup city" value="Видное"> Видное</li>
                            <li><input type="checkbox" class="pickup city" value="Волоколамск"> Волоколамск</li>
                            <li><input type="checkbox" class="pickup city" value="Воскресенск"> Воскресенск</li>
                            <li><input type="checkbox" class="pickup city" value="Дзержинский"> Дзержинский</li>
                            <li><input type="checkbox" class="pickup city" value="Дмитров"> Дмитров</li>
                            <li><input type="checkbox" class="pickup city" value="Долгопрудный"> Долгопрудный</li>
                            <li><input type="checkbox" class="pickup city" value="Домодедово"> Домодедово</li>
                            <li><input type="checkbox" class="pickup city" value="Дубна"> Дубна</li>
                            <li><input type="checkbox" class="pickup city" value="Егорьевск"> Егорьевск</li>
                            <li><input type="checkbox" class="pickup city" value="Железнодорожный"> Железнодорожный</li>
                            <li><input type="checkbox" class="pickup city" value="Жуковский"> Жуковский</li>
                            <li><input type="checkbox" class="pickup city" value="Зарайск"> Зарайск</li>
                            <li><input type="checkbox" class="pickup city" value="Звенигород"> Звенигород</li>
                            <li><input type="checkbox" class="pickup city" value="Ивантеевка"> Ивантеевка</li>
                            <li><input type="checkbox" class="pickup city" value="Истра"> Истра</li>
                            <li><input type="checkbox" class="pickup city" value="Кашира"> Кашира</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Белгород и область"> Белгород и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Белгород"> Белгород</li>
                            <li><input type="checkbox" class="pickup city" value="Старый Оскол"> Старый Оскол</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Брянск и область"> Брянск и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Владимир и область"> Владимир и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Владимир"> Владимир</li>
                            <li><input type="checkbox" class="pickup city" value="Ковров"> Ковров</li>
                            <li><input type="checkbox" class="pickup city" value="Муром"> Муром</li>
                        </ul></li>
                    <li><input type="checkbox" class="pickup obl" value="Воронеж и область"> Воронеж и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Иваново и область"> Иваново и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Калуга и область"> Калуга и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Калуга"> Калуга</li>
                            <li><input type="checkbox" class="pickup city" value="Обнинск"> Обнинск</li>
                        </ul></li>
                    <li><input type="checkbox" class="pickup obl" value="Кострома и область"> Кострома и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Курск и область"> Курск и область
                        <ul class="geo-deep">
                                <li><input type="checkbox" class="pickup city" value="Железногорск"> Железногорск</li>
                                <li><input type="checkbox" class="pickup city" value="Курск"> Курск</li>
                        </ul></li>
                    <li><input type="checkbox" class="pickup obl" value="Липецк и область"> Липецк и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Орел и область"> Орел и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Рязань и область"> Рязань и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Смоленск и область"> Смоленск и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Тамбов и область"> Тамбов и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Тверь и область"> Тверь и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Тула и область"> Тула и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Новомосковск"> Новомосковск</li>
                            <li><input type="checkbox" class="pickup city" value="Тула"> Тула</li>
                        </ul></li>
                    <li><input type="checkbox" class="pickup obl" value="Ярославль и область"> Ярославль и область
                        <ul class="geo-deep">
                        <li><input type="checkbox" class="pickup city" value="Рыбинск"> Рыбинск</li>
                        <li><input type="checkbox" class="pickup city" value="Тутаев"> Тутаев</li>
                        <li><input type="checkbox" class="pickup city" value="Ярославль"> Ярославль</li>
                        </ul></li></ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Северо-Запад"> Северо-Запад
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Санкт-Петербург и Ленинградская област">Санкт-Петербург и Ленинградская область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Волхов">Волхов</li>
                            <li><input type="checkbox" class="pickup city" value="Всеволожск">Всеволожск</li>
                            <li><input type="checkbox" class="pickup city" value="Выборг">Выборг</li>
                            <li><input type="checkbox" class="pickup city" value="Гатчина">Гатчина</li>
                            <li><input type="checkbox" class="pickup city" value="Кириши">Кириши</li>
                            <li><input type="checkbox" class="pickup city" value="Санкт-Петербург">Санкт-Петербург</li>
                            <li><input type="checkbox" class="pickup city" value="Сосновый Бор">Сосновый Бор</li>
                            <li><input type="checkbox" class="pickup city" value="Тихвин">Тихвин</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Архангельск и область">Архангельск и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Архангельск">Архангельск</li>
                            <li><input type="checkbox" class="pickup city" value="Северодвинск">Северодвинск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Великий Новгород и Новгородская область">Великий Новгород и Новгородская область</li>
                    <li><input type="checkbox" class="pickup obl" value="Вологда и область">Вологда и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Вологда">Вологда</li>
                            <li><input type="checkbox" class="pickup city" value="Череповец">Череповец</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Калининград и область">Калининград и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Мурманск и область">Мурманск и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Апатиты">Апатиты</li>
                            <li><input type="checkbox" class="pickup city" value="Мурманск">Мурманск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Ненецкий автономный округ">Ненецкий автономный округ</li>
                    <li><input type="checkbox" class="pickup obl" value="Псков и область">Псков и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Великие Луки">Великие Луки</li>
                            <li><input type="checkbox" class="pickup city" value="Псков">Псков</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Карелия">Республика Карелия
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Кондопога">Кондопога</li>
                            <li><input type="checkbox" class="pickup city" value="Петрозаводск">Петрозаводск</li>
                            <li><input type="checkbox" class="pickup city" value="Сортавала">Сортавала</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Коми">Республика Коми
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Воркута">Воркута</li>
                            <li><input type="checkbox" class="pickup city" value="Сыктывкар">Сыктывкар</li>
                            <li><input type="checkbox" class="pickup city" value="Усинск">Усинск</li>
                            <li><input type="checkbox" class="pickup city" value="Ухта">Ухта</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Поволжье"> Поволжье
            <ul class="geo-deep">
                <li><input type="checkbox" class="pickup obl" value="Киров и область">Киров и область</li>
                <li><input type="checkbox" class="pickup obl" value="Нижний Новгород и область">Нижний Новгород и область
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Выкса">Выкса</li>
                    <li><input type="checkbox" class="pickup city" value="Дзержинск">Дзержинск</li>
                    <li><input type="checkbox" class="pickup city" value="Кстово">Кстово</li>
                    <li><input type="checkbox" class="pickup city" value="Нижний Новгород">Нижний Новгород</li>
                    <li><input type="checkbox" class="pickup city" value="Саров">Саров</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Оренбург и область">Оренбург и область
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Оренбург">Оренбург</li>
                    <li><input type="checkbox" class="pickup city" value="Орск">Орск</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Пенза и область">Пенза и область</li>
                <li><input type="checkbox" class="pickup obl" value="Пермский край">Пермский край
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Березники">Березники</li>
                    <li><input type="checkbox" class="pickup city" value="Пермь">Пермь</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Республика Башкортостан">Республика Башкортостан
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Нефтекамск">Нефтекамск</li>
                    <li><input type="checkbox" class="pickup city" value="Октябрьский">Октябрьский</li>
                    <li><input type="checkbox" class="pickup city" value="Салават">Салават</li>
                    <li><input type="checkbox" class="pickup city" value="Стерлитамак">Стерлитамак</li>
                    <li><input type="checkbox" class="pickup city" value="Уфа">Уфа</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Республика Марий Эл">Республика Марий Эл</li>
                <li><input type="checkbox" class="pickup obl" value="Республика Мордовия">Республика Мордовия</li>
                <li><input type="checkbox" class="pickup obl" value="Республика Татарстан">Республика Татарстан
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Альметьевск">Альметьевск</li>
                    <li><input type="checkbox" class="pickup city" value="Бугульма">Бугульма</li>
                    <li><input type="checkbox" class="pickup city" value="Казань">Казань</li>
                    <li><input type="checkbox" class="pickup city" value="Набережные Челны">Набережные Челны</li>
                    <li><input type="checkbox" class="pickup city" value="Нижнекамск">Нижнекамск</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Самара и область">Самара и область
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Жигулевск">Жигулевск</li>
                    <li><input type="checkbox" class="pickup city" value="Самара">Самара</li>
                    <li><input type="checkbox" class="pickup city" value="Сызрань">Сызрань</li>
                    <li><input type="checkbox" class="pickup city" value="Тольятти">Тольятти</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Саратов и область">Саратов и область
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Балаково">Балаково</li>
                    <li><input type="checkbox" class="pickup city" value="Саратов">Саратов</li>
                    <li><input type="checkbox" class="pickup city" value="Энгельс">Энгельс</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Удмуртская Республика">Удмуртская Республика
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Глазов">Глазов</li>
                    <li><input type="checkbox" class="pickup city" value="Ижевск">Ижевск</li>
                    <li><input type="checkbox" class="pickup city" value="Сарапул">Сарапул</li>
                </ul>
                </li>
                <li><input type="checkbox" class="pickup obl" value="Ульяновск и область">Ульяновск и область</li>
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Димитровград">Димитровград</li>
                    <li><input type="checkbox" class="pickup city" value="Ульяновск">Ульяновск</li>
                </ul>
                <li><input type="checkbox" class="pickup obl" value="Чувашская Республика">Чувашская Республика
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup city" value="Новочебоксарск">Новочебоксарск</li>
                    <li><input type="checkbox" class="pickup city" value="Чебоксарск">Чебоксарск</li>
                </ul>
                </li>
            </ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Юг"> Юг
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Астрахань и область">Астрахань и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Волгоград и область">Волгоград и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Волгоград">Волгоград</li>
                            <li><input type="checkbox" class="pickup city" value="Волжский">Волжский</li>
                            <li><input type="checkbox" class="pickup city" value="Камышин">Камышин</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Краснодарский край">Краснодарский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Анапа">Анапа</li>
                            <li><input type="checkbox" class="pickup city" value="Армавир">Армавир</li>
                            <li><input type="checkbox" class="pickup city" value="Ейск">Ейск</li>
                            <li><input type="checkbox" class="pickup city" value="Краснодар">Краснодар</li>
                            <li><input type="checkbox" class="pickup city" value="Новороссийск">Новороссийск</li>
                            <li><input type="checkbox" class="pickup city" value="Сочи">Сочи</li>
                            <li><input type="checkbox" class="pickup city" value="Туапсе">Туапсе</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Крым">Крым
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Евпатория">Евпатория</li>
                            <li><input type="checkbox" class="pickup city" value="Керчь">Керчь</li>
                            <li><input type="checkbox" class="pickup city" value="Севастополь">Севастополь</li>
                            <li><input type="checkbox" class="pickup city" value="Симферополь">Симферополь</li>
                            <li><input type="checkbox" class="pickup city" value="Феодосия">Феодосия</li>
                            <li><input type="checkbox" class="pickup city" value="Ялта">Ялта</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Адыгея">Республика Адыгея</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Калмыкия">Республика Калмыкия</li>
                    <li><input type="checkbox" class="pickup obl" value="Ростов-на-Дону и область">Ростов-на-Дону и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Волгодонск">Волгодонск</li>
                            <li><input type="checkbox" class="pickup city" value="Каменск-Шахтинский">Каменск-Шахтинский</li>
                            <li><input type="checkbox" class="pickup city" value="Новочеркасск">Новочеркасск</li>
                            <li><input type="checkbox" class="pickup city" value="Ростов-на-Дону">Ростов-на-Дону</li>
                            <li><input type="checkbox" class="pickup city" value="Таганрог">Таганрог</li>
                            <li><input type="checkbox" class="pickup city" value="Шахты">Шахты</li>
                        </ul>
                    </li>
                </ul>
                </li>
            <li><input type="checkbox" class="pickup region" value="Сибирь"> Сибирь
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Алтайский край">Алтайский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Барнаул">Барнаул</li>
                            <li><input type="checkbox" class="pickup city" value="Бийск">Бийск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Забайкальский край">Забайкальский край</li>
                    <li><input type="checkbox" class="pickup obl" value="Иркутск и область">Иркутск и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Ангарск">Ангарск</li>
                            <li><input type="checkbox" class="pickup city" value="Братск">Братск</li>
                            <li><input type="checkbox" class="pickup city" value="Иркутск">Иркутск</li>
                            <li><input type="checkbox" class="pickup city" value="Усть-Илимск">Усть-Илимск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Кемерово и область">Кемерово и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Кемерово">Кемерово</li>
                            <li><input type="checkbox" class="pickup city" value="Междуреченск">Междуреченск</li>
                            <li><input type="checkbox" class="pickup city" value="Новокузнецк">Новокузнецк</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Красноярский край">Красноярский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Ачинск">Ачинск</li>
                            <li><input type="checkbox" class="pickup city" value="Железногорск">Железногорск</li>
                            <li><input type="checkbox" class="pickup city" value="Красноярск">Красноярск</li>
                            <li><input type="checkbox" class="pickup city" value="Минусинск">Минусинск</li>
                            <li><input type="checkbox" class="pickup city" value="Норильск">Норильск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Новосибирск и область">Новосибирск и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Омск и область">Омск и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Алтай">Республика Алтай</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Бурятия">Республика Бурятия</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Тыва">Республика Тыва</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Хакасия">Республика Хакасия</li>
                    <li><input type="checkbox" class="pickup obl" value="Томск и область">Томск и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Северск">Северск</li>
                            <li><input type="checkbox" class="pickup city" value="Томск">Томск</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Дальний Восток"> Дальний Восток
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Благовещенск и Амурская область">Благовещенск и Амурская область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Белогорск">Белогорск</li>
                            <li><input type="checkbox" class="pickup city" value="Благовещенск">Благовещенск</li>
                            <li><input type="checkbox" class="pickup city" value="Тында">Тында</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Еврейская автономная область">Еврейская автономная область</li>
                    <li><input type="checkbox" class="pickup obl" value="Камчатский край">Камчатский край</li>
                    <li><input type="checkbox" class="pickup obl" value="Магадан и область">Магадан и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Приморский край">Приморский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Владивосток">Владивосток</li>
                            <li><input type="checkbox" class="pickup city" value="Находка">Находка</li>
                            <li><input type="checkbox" class="pickup city" value="Уссурийск">Уссурийск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Саха (Якутия)">Республика Саха (Якутия)</li>
                    <li><input type="checkbox" class="pickup obl" value="Хабаровский край">Хабаровский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Комсомольск-на-Амуре">Комсомольск-на-Амуре</li>
                            <li><input type="checkbox" class="pickup city" value="Хабаровск">Хабаровск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Чукотский автономный округ">Чукотский автономный округ</li>
                    <li><input type="checkbox" class="pickup obl" value="Южно-Сахалинск и Сахалинская область">Южно-Сахалинск и Сахалинская область</li>
                </ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Северный Кавказ"> Северный Кавказ
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Кабардино-Балкарская Республика">Кабардино-Балкарская Республика</li>
                    <li><input type="checkbox" class="pickup obl" value="Карачаево-Черкесская Республика">Карачаево-Черкесская Республика</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Дагестан">Республика Дагестан</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Ингушетия">Республика Ингушетия</li>
                    <li><input type="checkbox" class="pickup obl" value="Республика Северная Осетия-Алания">Республика Северная Осетия-Алания</li>
                    <li><input type="checkbox" class="pickup obl" value="Ставропольский край">Ставропольский край
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Ессентуки">Ессентуки</li>
                            <li><input type="checkbox" class="pickup city" value="Кисловодск">Кисловодск</li>
                            <li><input type="checkbox" class="pickup city" value="Минеральные Воды">Минеральные Воды</li>
                            <li><input type="checkbox" class="pickup city" value="Невинномысск">Невинномысск</li>
                            <li><input type="checkbox" class="pickup city" value="Пятигорск">Пятигорск</li>
                            <li><input type="checkbox" class="pickup city" value="Ставрополь">Ставрополь</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Северный Кавказ">Чеченская Республика</li>
                </ul>
            </li>
            <li><input type="checkbox" class="pickup region" value="Урал"> Урал
                <ul class="geo-deep">
                    <li><input type="checkbox" class="pickup obl" value="Екатеринбург и Свердловская область">Екатеринбург и Свердловская область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Екатеринбург">Екатеринбург</li>
                            <li><input type="checkbox" class="pickup city" value="Каменск-Уральский">Каменск-Уральский</li>
                            <li><input type="checkbox" class="pickup city" value="Нижний Тагил">Нижний Тагил</li>
                            <li><input type="checkbox" class="pickup city" value="Первоуральск">Первоуральск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Курган и область">Курган и область</li>
                    <li><input type="checkbox" class="pickup obl" value="Тюмень и область">Тюмень и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Ишим">Ишим</li>
                            <li><input type="checkbox" class="pickup city" value="Тобольск">Тобольск</li>
                            <li><input type="checkbox" class="pickup city" value="Тюмень">Тюмень</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Ханты-Мансийский автономный округ">Ханты-Мансийский автономный округ
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Нефтеюганск">Нефтеюганск</li>
                            <li><input type="checkbox" class="pickup city" value="Нижневартовск">Нижневартовск</li>
                            <li><input type="checkbox" class="pickup city" value="Сургут">Сургут</li>
                            <li><input type="checkbox" class="pickup city" value="Ханты-Мансийск">Ханты-Мансийск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Челябинск и область">Челябинск и область
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Магнитогорск">Магнитогорск</li>
                            <li><input type="checkbox" class="pickup city" value="Миасс">Миасс</li>
                            <li><input type="checkbox" class="pickup city" value="Озерск">Озерск</li>
                            <li><input type="checkbox" class="pickup city" value="Сатка">Сатка</li>
                            <li><input type="checkbox" class="pickup city" value="Челябинск">Челябинск</li>
                        </ul>
                    </li>
                    <li><input type="checkbox" class="pickup obl" value="Ямало-Ненецкий автономный округ">Ямало-Ненецкий автономный округ
                        <ul class="geo-deep">
                            <li><input type="checkbox" class="pickup city" value="Новый Уренгой">Новый Уренгой</li>
                            <li><input type="checkbox" class="pickup city" value="Ноябрьск">Ноябрьск</li>
                            <li><input type="checkbox" class="pickup city" value="Салехард">Салехард</li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
                  
<!-- ///////////////////////////////////////////////////////// Tab separation ///////////////////////////////////////////////////////// -->

        <div class="tab-pane" id="tab2">
            <ul class="geo">
                <li><input type="checkbox" class="pickup region" value="Абхазия"> Абхазия</li>
                <li><input type="checkbox" class="pickup region" value="Азербайджан"> Азербайджан</li>
                <li><input type="checkbox" class="pickup region" value="Армения"> Армения</li>
                <li><input type="checkbox" class="pickup region" value="Беларусь"> Беларусь
                    <ul class="geo-deep"> 
                        <li><input type="checkbox" class="pickup obl" value="Брест и область"> Брест и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Витебск и область"> Витебск и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Гомель и область"> Гомель и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Гродно и область"> Гродно и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Минск и область"> Минск и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Могилёв и область"> Могилёв и область</li>
                    </ul>
                </li>
                <li><input type="checkbox" class="pickup region" value="Казахстан"> Казахстан
                    <ul class="geo-deep"> 
                        <li><input type="checkbox" class="pickup obl" value="Актау и Мангистауская область"> Актау и Мангистауская область</li>
                        <li><input type="checkbox" class="pickup obl" value="Актобе и область"> Актобе и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Астана и Акмолинская и область"> Астана и Акмолинская и область
                            <ul class="geo-deep"> 
                                <li><input type="checkbox" class="pickup city" value="Астана"> Астана</li>
                                <li><input type="checkbox" class="pickup city" value="Кокшетау"> Кокшетау</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" class="pickup obl" value="Атырау и область"> Атырау и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Восточно-Казахстанская и область"> Восточно-Казахстанская и область
                            <ul class="geo-deep"> 
                                <li><input type="checkbox" class="pickup city" value="Семей"> Семей</li>
                                <li><input type="checkbox" class="pickup city" value="Усть-Каменогорск"> Усть-Каменогорск</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" class="pickup obl" value="Западно-Казахстанская и область"> Западно-Казахстанская и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Караганда и область"> Караганда и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Костанай и область"> Костанай и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Кызылорда и область"> Кызылорда и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Павлодар и область"> Павлодар и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Северо-Казахстанская и область"> Северо-Казахстанская и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Талдыкорган и Алматинская и область"> Талдыкорган и Алматинская и область
                            <ul class="geo-deep"> 
                                <li><input type="checkbox" class="pickup city" value="Алматы"> Алматы</li>
                                <li><input type="checkbox" class="pickup city" value="Талдыкорган"> Талдыкорган</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" class="pickup obl" value="Тараз и Жамбылская и область"> Тараз и Жамбылская и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Южно-Казахстанская и область"> Южно-Казахстанская и область</li>
                    </ul>
                </li>
                <li><input type="checkbox" class="pickup region" value="Киргизия"> Киргизия</li>
                <li><input type="checkbox" class="pickup region" value="Молдова"> Молдова</li>
                <li><input type="checkbox" class="pickup region" value="Таджикистан"> Таджикистан</li>
                <li><input type="checkbox" class="pickup region" value="Туркмения"> Туркмения</li>
                <li><input type="checkbox" class="pickup region" value="Узбекистан"> Узбекистан</li>
                <li><input type="checkbox" class="pickup region" value="Украина"> Украина
                    <ul class="geo-deep"> 
                        <li><input type="checkbox" class="pickup obl" value="Днепропетровск и область"> Днепропетровск и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Донецк и область"> Донецк и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Запорожье и область"> Запорожье и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Луганск и область"> Луганск и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Харьков и область"> Харьков и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Ивано-Франковск и область"> Ивано-Франковск и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Луцк и Волынская область"> Луцк и Волынская область</li>
                        <li><input type="checkbox" class="pickup obl" value="Львов и область"> Львов и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Ровно и область"> Ровно и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Тернополь и область"> Тернополь и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Ужгород и Закарпатская область"> Ужгород и Закарпатская область</li>
                        <li><input type="checkbox" class="pickup obl" value="Хмельницкий и область"> Хмельницкий и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Черновцы и область"> Черновцы и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Сумы и область"> Сумы и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Чернигов и область"> Чернигов и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Винница и область"> Винница и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Житомир и область"> Житомир и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Киев и область"> Киев и область
                            <ul class="geo-deep"> 
                                <li><input type="checkbox" class="pickup city" value="Белая Церковь"> Белая Церковь</li>
                                <li><input type="checkbox" class="pickup city" value="Киев"> Киев</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" class="pickup obl" value="Кировоград и область"> Кировоград и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Полтава и область"> Полтава и область
                            <ul class="geo-deep"> 
                                <li><input type="checkbox" class="pickup city" value="Кременчуг"> Кременчуг</li>
                                <li><input type="checkbox" class="pickup city" value="Полтава"> Полтава</li>
                            </ul>
                        </li>
                        <li><input type="checkbox" class="pickup obl" value="Черкассы и область"> Черкассы и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Николаев и область"> Николаев и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Одесса и область"> Одесса и область</li>
                        <li><input type="checkbox" class="pickup obl" value="Херсон и область"> Херсон и область</li>
                    </ul>
                </li>
            </ul>
        </div>
                    
<!-- ///////////////////////////////////////////////////////// Tab separation ///////////////////////////////////////////////////////// -->
                    <br />
                </div>
            </div>
            <textarea readonly class="span11" style="cursor: default;" name="geo" rows="5" id="geo" placeholder="Выбрать Регион" required></textarea>
        </div> 
           
           <script>
                     
               jQuery(document).ready(function(){
                   
                   $('.geo').find('.obl').closest('li').hide();
                    $('.geo').find('.city').closest('li').hide();
                                      
                   $('.pickup').click(function(e){
                       
                       var item = $('.geo');
                       var sub1 = $(this);
                       var sub2 = sub1.closest('li');
                       var sub3 = sub2.find('input[type="checkbox"]');
                       var region = item.find('.region');
                       var checkboxes = item.find('input[type="checkbox"]');
                       var litext = "";
                       var litext1 = "";
                       var litext2 = "";
                       var litext3 = "";
                       var litext4 = "";
                       var temp1 = [];
                       var temp2 = [];
                       var tempItem;
                       var tempItem2;
                                              
                       if(sub1.prop('checked'))
                           sub3.prop('checked', true);
                       else 
                           sub3.prop('checked', false);
                       
                       checkboxes.each(function(){
                           
                           if(sub1.prop('checked'))
                           sub1.parent().find("li").show();
                       else
                           sub1.parent().find("li").hide();
                           
                           if($(this).hasClass("region") && $(this).nextAll().find('input[type="checkbox"]').length > 0)
                              {
                                tempItem = $(this);
                                  if(tempItem.nextAll().find('input[type="checkbox"]').length == tempItem.nextAll().find('input[type="checkbox"]:checked').length)
                                      tempItem.prop('checked', true);
                                  else
                                      tempItem.prop('checked', false);
                              }
                           
                           if($(this).hasClass("obl") && $(this).nextAll().find('input[type="checkbox"]').length > 0)
                              {
                                tempItem = $(this);
                                  if(tempItem.nextAll().find('input[type="checkbox"]').length == tempItem.nextAll().find('input[type="checkbox"]:checked').length)
                                      tempItem.prop('checked', true);
                                  else
                                      tempItem.prop('checked', false);
                                  
                                  region.each(function(){
                                      if($(this).hasClass("region") && $(this).nextAll().find('input[type="checkbox"]').length > 0)
                                      {
                                        tempItem = $(this);
                                          if(tempItem.nextAll().find('input[type="checkbox"]').length == tempItem.nextAll().find('input[type="checkbox"]:checked').length)
                                              tempItem.prop('checked', true);
                                          else
                                              tempItem.prop('checked', false);
                                      } 
                                  });
                              }
                           
                           });
                           
                            $("#tab1").find('input[type="checkbox"]').each(function(){
                           if($(this).hasClass("obl") && $(this).prop('checked'))
                           {
                               $(this).parent().find(".city").each(function(){
                                  temp1.push("c"+$(this).val()+"c");
                               });
                               
                           }
                           
                           if($(this).hasClass("region") && $(this).prop('checked'))
                           {
                               $(this).parent().find(".obl").each(function(){
                                  temp1.push("o"+$(this).val()+"o");
                               });
                               
                           }
                            });
                       
                            $("#tab2").find('input[type="checkbox"]').each(function(){
                           if($(this).hasClass("obl") && $(this).prop('checked'))
                           {
                               $(this).parent().find(".city").each(function(){
                                  temp2.push("c"+$(this).val()+"c");
                               });
                               
                           }
                           
                           if($(this).hasClass("region") && $(this).prop('checked'))
                           {
                               $(this).parent().find(".obl").each(function(){
                                  temp2.push("o"+$(this).val()+"o");
                               });
                               
                           }
                            
                        });
                       
                              $("#tab1").find('input[type="checkbox"]').each(function(){
                                
                                  if($(this).prop('checked'))
                                  {
                                      if($(this).hasClass("region"))
                                      litext3 += "r" + $(this).val() + "r";
                                      if($(this).hasClass("obl"))
                                      litext3 += "o" + $(this).val() + "o";
                                      if($(this).hasClass("city"))
                                      litext3 += "c" + $(this).val() + "c";
                                  }
                                      
                              });
                              $("#tab2").find('input[type="checkbox"]').each(function(){
                                
                                 if($(this).prop('checked'))
                                  {
                                      if($(this).hasClass("region"))
                                      litext4 += "r" + $(this).val() + "r";
                                      if($(this).hasClass("obl"))
                                      litext4 += "o" + $(this).val() + "o";
                                      if($(this).hasClass("city"))
                                      litext4 += "c" + $(this).val() + "c";
                                  }
                                  
                              });
                       
                       for(var s=0;s<temp1.length;s++)
                           litext3 = litext3.replace(String(temp1[s]), '');
                       
                       for(var s=0;s<temp2.length;s++)
                           litext4 = litext4.replace(String(temp2[s]), '');
                       
                       litext3 = litext3.replace(/r/g, ' ');
                       litext3 = litext3.replace(/o/g, ' ');
                       litext3 = litext3.replace(/c/g, ' ');
                       
                       litext4 = litext4.replace(/r/g, ' ');
                       litext4 = litext4.replace(/o/g, ' ');
                       litext4 = litext4.replace(/c/g, ' ');
                       
                       if(litext3)
                       litext1 = "Россия:" + litext3;
                       else
                       litext1 = "";
                       
                       if(litext4)
                       litext2 = "СНГ:" + litext4;
                       else
                       litext2 = "";
                       
                       if(!litext1.replace("Россия ", ''))
                       $("#geo").val(litext1 + litext2);    
                       else
                       $("#geo").val(litext1 + "\n\n" + litext2);
                   
                   });
               });
                                                                    
           </script>
           
            <style>
    
                input[type="checkbox"]{margin-top:0;}
                .tab-content{padding-top:0;}
                .geo, .geo-deep{list-style: none;}
                #geo {
                    background-color: #DCDDDF;
                    border: 1px solid;
                    border-color: #a8abba #b5b7c5 #c5c7d2;
                    border-radius: 3px;
                    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.3), 0 1px 2px rgba(0, 0, 0, 0.2) inset;
                }
                ul .nav .nav-tabs {}
                .pickup, .geo {
                    
                    margin: 0;
                    padding: 0;
                    border: 0;
                    font-size: 100%;
                    font: inherit;
                    vertical-align: baseline;
                    
                }
                
                li.hilight {background: yellow;}
                
            </style>
															</li>
																	   
															<script>
																				 
															 $(document).ready(function(){
																			  
															   $("#geo-dropdown").click(function(e){
																   e.preventDefault();
															   });
																			   
																  $("#geo-dropdown .pickup").click(function(e){
																	   $("#geo").val($(this).text());
																   });
																			   
																 });
																																
															 </script>
            
<!-- |-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-|-| -->

															<li class="control-group">
                                                                <label for="cp" class="control-label">СR, %</label>
                                                                <div class="controls">
                                                                    <input id="cp" class="span2" type="text" name="cp" value="" required>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="cpc" class="control-label">СPС</label>
                                                                <div class="controls">
                                                                    <input id="cpc" class="span2" type="text" name="cpc" value="" required>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="lifeTime" class="control-label">Время жизни кука, дн</label>
                                                                <div class="controls">
                                                                    <input id="lifeTime" class="span2" type="text" name="lifeTime" value="" required>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="hold" class="control-label">Холд, дн</label>
                                                                <div class="controls">
                                                                    <input id="hold" class="span2" type="text" name="hold" value="" required>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
															
															<li class="control-group">
                                                                <label for="prim" class="control-label">Примечания</label>
                                                                <div class="controls">
                                                                    <textarea id="prim" class="span11" rows="2" type="text" name="prim" value=""></textarea>
                                                                </div>
                                                            </li>
                                                        </ul>
														
                                                    </fieldset>
                                                    
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions" style="margin-top:0!important;">
                                                        <button type="submit" class="btn btn-blue" name="saveOffer">Сохранить</button>
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
