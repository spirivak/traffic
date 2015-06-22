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
<title>TrafficIMA - Add new CPA</title>
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
                        <li class="active">Добавить CPA</li>
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
                <h2 class="page-title"><i class="fontello-icon-monitor"></i>Новая партнерка</h2>
                <p class="pagedesc" style="margin-left: 45px; margin-top: 0px;">Форма добавления новой CPA-сети в CRM</p>
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
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-resize-small-2"></i> Профиль CPA сети <small>редактирование или создание новой CPA сети в CRM</small></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="accounForm" class="form-horizontal" method="" action="" >
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="accountPrefix" class="control-label">Название</label>
                                                                <div class="controls">
                                                                    <input id="accountPrefix" class="span6" type="text" value="" name="accountPrefix">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountSuffix" class="control-label">Логин</label>
                                                                <div class="controls">
                                                                    <input id="accountSuffix" class="span6" type="text" name="accountSuffix" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->

                                                            <li class="control-group">
                                                                <label for="accountSuffix" class="control-label">Пароль</label>
                                                                <div class="controls">
                                                                    <input id="accountSuffix" class="span6" type="text" name="accountSuffix" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->                                                            
                                                            
                                                            <li class="control-group">
                                                                <label for="accountMiddleName" class="control-label">Дата старта</label>
                                                                <div class="controls">
                                                                    <input id="accountMiddleName" class="span11" type="text" name="accountMiddleName" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="accountGender" class="control-label">Тип партнерки</label>
                                                                <div class="controls">
                                                                    <input id="accountGenderInput" type="hidden" name="accountGender" value="" />
                                                                    <div id="accountGender" class="btn-group change" data-toggle="buttons-radio" data-target="accountGenderInput">
                                                                        <button type="button" class="btn" class-toggle="btn-green" name="accountGender" value="male">A</button>
                                                                        <button type="button" class="btn" class-toggle="btn-green" name="accountGender" value="female">B</button>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="section-form">
                                                                <h4>Оплата</h4>
                                                            </li>
                                                            <!-- // section form divider -->
                                                            
                                                            <li class="control-group">
                                                                <label for="accountEmail" class="control-label">Платежная система вывода средств<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <div class="input-append block">
                                                                        <input id="accountEmail" class="span6" type="text" name="accountEmail" value="">
                                                                        <a class="btn fontello-icon-edit" type="button">write an email</a> </div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="accountPhoneNumber" class="control-label">Частота вывода <span class="required">*</span></label>
                                                                <div class="controls controls-row">
                                                                    <input id="accountPhoneNumber" class="span6 maskPhone margin-right5" type="text" name="accountPhoneNumber" value="">
                                                                    <select id="accountPhoneType" class="selectpicker" data-style="btn-info" name="accountPhoneType">
                                                                        <option value="1">Work</option>
                                                                        <option value="2">Home</option>
                                                                        <option value="3">Next</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="accountFaxNumber" class="control-label">Холд</label>
                                                                <div class="controls controls-row">
                                                                    <input id="accountFaxNumber" class="span6 maskPhone margin-right5" type="text" name="accountFaxNumber" value="">
                                                                    <select id="accountFaxType" class="selectpicker" data-style="btn-info" name="accountFaxType">
                                                                        <option value="1">Work</option>
                                                                        <option value="2">Home</option>
                                                                        <option value="3">Next</option>
                                                                    </select>
                                                                    <a class="btn btn-glyph fontello-icon-plus-1" href="javascript:void(0);"></a> </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend class="section-form">Тех поддержка </legend>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="accountAddressZip" class="control-label">Контакты поддержки<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountAddressZip" class="span6 maskZipcode" type="text" value="" name="accountAddressZip">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <fieldset>
                                                        <legend class="section-form">Инструменты</legend>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="accountAddressZip" class="control-label">Парковка домена<span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="accountAddressZip" class="span6 maskZipcode" type="text" value="" name="accountAddressZip">
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </fieldset>
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-blue">Submit & Validate</button>
                                                        <button class="btn cancel">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
                        <!-- // Column -->
                                                
                    </div>
                    <!-- // Example row --> 
                </div>
                <!-- // Example TAB 1 -->
                
                <div id="TabTop2" class="tab-pane fade padding-bottom30">
                    <div class="page-header">
                        <h3><i class="fontello-icon-doc-2 opaci35"></i> New Article <small>.form-horizontal</small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span8 grider">
                            <div class="widget well well-nice">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-article-alt-1"></i> Articles <small>edit or new article</small></h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="itemForm" class="span12 form-horizontal" method="" action="" >
                                            <div class="row-fluid">
                                                <div class="span12 form-dark">
                                                    <fieldset>
                                                        <ul class="form-list list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="articleTitle" class="control-label">Title <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleTitle" class="input-block-level" type="text" value="" name="articleTitle">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleAlias" class="control-label">Alias <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleAlias" class="input-block-level " type="text" name="articleAlias" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleCategory" class="control-label">Category <span class="required">*</span></label>
                                                                <div class="controls clearfix">
                                                                    <select id="articleCategory" class="span6 selecttwo" data-class="btn-info" name="articleCategory">
                                                                        <option value=""></option>
                                                                        <option value="1">Catagory 1</option>
                                                                        <option value="2">Catagory 2</option>
                                                                        <option value="3">Catagory 3</option>
                                                                    </select>
                                                                    <div class="popover popover-error fade right in" style="top: 153px; left: -291px; display: block;">
                                                                        <div class="arrow"></div>
                                                                        <div class="popover-inner">
                                                                            <div class="popover-content">
                                                                                <p>Please select a Category</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleState" class="control-label">Status</label>
                                                                <div class="controls">
                                                                    <select id="articleStatus" class="selectpicker input-medium" data-style="btn-info" name="articleStatus">
                                                                        <option value="1">Published</option>
                                                                        <option value="2">Unpublished</option>
                                                                        <option value="3">Archived</option>
                                                                        <option value="4">Trashed</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleAccess" class="control-label">Access</label>
                                                                <div class="controls">
                                                                    <select id="articleAccess" class="selectpicker input-medium" data-style="btn-info" name="articleAccess">
                                                                        <option value="1">Public</option>
                                                                        <option value="2">Registred</option>
                                                                        <option value="3">Special</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleTags" class="control-label">Tags</label>
                                                                <div class="controls">
                                                                    <input id="articleTags" class="span6" type="text" name="articleTags" value="" />
                                                                    <span class="help-block">Write or select a tag and press "enter" or "comma" to add them.</span> </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="itemPublished" class="control-label">Articles </label>
                                                                <div class="controls">
                                                                    <div class="well well-nice well-small">
                                                                        <ul class="nav nav-pills no-margin">
                                                                            <li class="active"><a href="#TabContent" data-toggle="tab"><i class="fontello-icon-edit"></i> Content</a></li>
                                                                            <li><a href="#TabPicture" data-toggle="tab"><i class="fontello-icon-picture-1"></i> Picture</a></li>
                                                                            <li><a href="#TabGallery" data-toggle="tab"><i class="fontello-icon-picture"></i> Image Gallery</a></li>
                                                                            <li class="disabled"><a href="#TabAdditional" data-toggle="tab"><i class="fontello-icon-attach"></i> Additional Files</a></li>
                                                                        </ul>
                                                                        <div class="tab-content tab-content-visible">
                                                                            <div class="tab-pane active" id="TabContent">
                                                                                <textarea id="wysiBooEditorCustom" class="input-block-level" style="height: 200px" placeholder="Enter text ..."></textarea>
                                                                                <!-- // fieldset Input -->
                                                                                <div class="btn-toolbar pull-right"> <a class="btn btn-green" href="javascript:void(0);">Update</a> <a class="btn btn-red" href="javascript:void(0);">Clear</a> </div>
                                                                            </div>
                                                                            <!-- // tab 1 -->
                                                                            
                                                                            <div class="tab-pane" id="TabPicture"> </div>
                                                                            <!-- // tab 2 -->
                                                                            
                                                                            <div class="tab-pane" id="TabGallery"> </div>
                                                                            <!-- // tab 3 -->
                                                                            
                                                                            <div class="tab-pane" id="TabAdditional"> </div>
                                                                            <!-- // tab 4 --> 
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!-- // Tabs TOP - .tabbable-bordered --> 
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <fieldset>
                                                        <legend class="section-form">Publishing option </legend>
                                                        <ul class="form-list label-left list-bordered dotted">
                                                            <li class="control-group">
                                                                <label for="articlePostFromTo" class="control-label">Post from - to </label>
                                                                <div class="controls">
                                                                    <input id="articlePostFromTo" class="span3" type="text" name="articlePostFromTo" value="" >
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleAuthor" class="control-label">Author <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleAuthor" class="span6" type="text" value="" name="articleAuthor">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleAuthorAlias" class="control-label">Alias author <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleAuthorAlias" class="span6" type="text" value="" name="articleAuthorAlias">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleCreated" class="control-label">Date Creation</label>
                                                                <div class="controls">
                                                                    <input id="articleCreated" class="span3" type="text" name="articleCreated" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <div class="form-actions">
                                                        <button type="submit" class="btn btn-blue">Submit</button>
                                                        <button class="btn">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
                        <!-- // Column -->
                        
                        <div class="span4 grider">
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-equalizer"></i> Options</h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formArticleSetting" class="span12 form-horizontal form-condensed form-dark label-left small-labels">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <fieldset>
                                                        <ul class="form-list list-bordered dotted">
                                                            <li class="section-form">
                                                                <h4>Publishing option</h4>
                                                            </li>
                                                            <!-- // section form divider -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleCreator" class="control-label">Created by <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleCreator" class="input-block-level margin-0s" type="text" value="" name="articleCreator">
                                                                    <a class="btn btn-mini btn-boo" href="javascript:void(0);">Select user</a> </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleCreatorAlias" class="control-label">Created by Alias <span class="required">*</span></label>
                                                                <div class="controls">
                                                                    <input id="articleCreatorAlias" class="input-block-level" type="text" value="" name="articleCreatorAlias">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleCreatedDate" class="control-label">Created Date</label>
                                                                <div class="controls">
                                                                    <input id="articleCreatedDate" class="input-block-level" type="text" name="articleCreatedDate" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articlePublishingStart" class="control-label">Start Publishing</label>
                                                                <div class="controls">
                                                                    <input id="articlePublishingStart" class="input-block-level" type="text" name="articlePublishingStart" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articlePublishingFinish" class="control-label">Finish Publishing</label>
                                                                <div class="controls">
                                                                    <input id="articlePublishingFinish" class="input-block-level" type="text" name="articlePublishingFinish" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleLanguage" class="control-label">Language</label>
                                                                <div class="controls">
                                                                    <select id="articleLanguage" class="selectpicker inp input-medium" data-style="btn-boo" name="articleLanguage">
                                                                        <option selected value="1">All Language</option>
                                                                        <option value="2">English</option>
                                                                        <option value="3">Poland</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input -->
                                                    <fieldset>
                                                        <ul class="form-list list-bordered dotted small-labels">
                                                            <li class="section-form">
                                                                <h4>Article option</h4>
                                                            </li>
                                                            <!-- // section form divider -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowTitle" class="control-label">Show Title</label>
                                                                <div class="controls">
                                                                    <select id="articleShowTitle" class="selectpicker input-small" data-style="btn-boo" name="articleShowTitle">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowCategory" class="control-label">Show Category</label>
                                                                <div class="controls">
                                                                    <select id="articleShowCategory" class="selectpicker input-small" data-style="btn-boo" name="articleShowCategory">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowAutor" class="control-label">Show Autor</label>
                                                                <div class="controls">
                                                                    <select id="articleShowAutor" class="selectpicker input-small" data-style="btn-boo" name="articleShowAutor">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleLinkAutor" class="control-label">Link Autor</label>
                                                                <div class="controls">
                                                                    <select id="articleLinkAutor" class="selectpicker input-small" data-style="btn-boo" name="articleLinkAutor">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowCreateDate" class="control-label">Show Create Date</label>
                                                                <div class="controls">
                                                                    <select id="articleShowCreateDate" class="selectpicker input-small" data-style="btn-yellow" name="articleShowCreateDate">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowModifyDate" class="control-label">Show Modify Date</label>
                                                                <div class="controls">
                                                                    <select id="articleShowModifyDate" class="selectpicker input-small" data-style="btn-yellow" name="articleShowModifyDate">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleShowPublishDate" class="control-label">Show Publish Date</label>
                                                                <div class="controls">
                                                                    <select id="articleShowPublishDate" class="selectpicker  input-small" data-style="btn-yellow" name="articleShowPublishDate">
                                                                        <option selected value="1">Global</option>
                                                                        <option value="2">Hide</option>
                                                                        <option value="3">Snow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input --> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget -->
                            
                            <div class="widget widget-simple">
                                <div class="widget-header">
                                    <h4><i class="fontello-icon-target-2"></i> Metadata Options </h4>
                                </div>
                                <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="formA">
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <fieldset>
                                                        <ul class="form-list">
                                                            <li class="control-group">
                                                                <label for="metaArticleDescript" class="control-label">Article Descript</label>
                                                                <div class="controls">
                                                                    <textarea id="metaArticleDescript" class="input-block-level" rows="2" placeholder="Enter description for Article ..."></textarea>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="metaArticleKeywords" class="control-label">Meta Keywords</label>
                                                                <div class="controls">
                                                                    <input id="metaArticleKeywords" class="input-block-level" type="text" name="metaArticleKeywords" value="" />
                                                                    <span class="help-block">Write or select a tag and press "enter" or "comma" to add them.</span> </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="articleRobots" class="control-label">Robots</label>
                                                                <div class="controls">
                                                                    <select id="articleRobots" class="selectpicker input-block-level" data-style="btn-boo" name="articleRobots">
                                                                        <option selected value="1">Use Global</option>
                                                                        <option value="2">Index, Follow</option>
                                                                        <option value="3">No index, follow</option>
                                                                        <option value="4">Index, No follow</option>
                                                                        <option value="5">No index, No follow</option>
                                                                    </select>
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                            <li class="control-group">
                                                                <label for="metaArticleAuthor" class="control-label">Author</label>
                                                                <div class="controls">
                                                                    <input id="metaArticleAuthor" class="input-block-level" type="text" name="metaArticleAuthor" value="">
                                                                </div>
                                                            </li>
                                                            <!-- // form item -->
                                                            
                                                        </ul>
                                                    </fieldset>
                                                    <!-- // fieldset Input --> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- // Widget --> 
                            
                        </div>
                        <!-- // Column --> 
                        
                    </div>
                    <!-- // Example row --> 
                </div>
                <!-- // Example TAB 2 -->
                
                <div id="TabTop3" class="tab-pane fade">
                    <div class="page-header">
                        <h3><i class="aweso-icon-list-alt opaci35"></i> Text <small>here</small></h3>
                    </div>
                    <div class="row-fluid">
                        <div class="span6 grider-item">
                        </div>
                        
                        <div class="span6 grider-item">
                        </div>
                    </div>
                    <!-- // Example row --> 
                   
                    <div class="row-fluid">
                        <div class="span12">
                        </div>
                    </div>
                    <!-- // Example row -->
                    
                    <div class="row-fluid">
                        <div class="span12">
                        </div>
                    </div>
                    <!-- // Example row -->
                    
                 </div>
                <!-- // Example TAB 3 --> 
                
            </div>
            <!-- // page content --> 
            






        </div>
        <!-- // main-content --> 
    </div>
    <!-- // main-container  -->
<?php include("footer.php");?>
</div>
<!-- // page-container  --> 

<?php include("js.php");?>
</body>
</html>
