<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="{$g.description|default: ''}">
        <meta name="author" content="{$g.author|default: ''}">
        <meta name="keyword" content="{$g.keyword|default: ''}">
        <title>{$g.sitename}</title>
        <!-- Bootstrap core CSS -->
        {css('bootstrap.css')}
        <!--external css-->
        {css('../font-awesome/css/font-awesome.css')}
        {css('zabuto_calendar.css')}
        {css('../js/gritter/css/jquery.gritter.css')}
        {css('../lineicons/style.css')}    
        <!-- Custom styles for this template -->
        {css('style.css')}
        {css('style-responsive.css')}
        {css('../../bower_components/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css')}

        {bower('jquery/dist/jquery.js')}
        {js('bootstrap.min.js')}
        
        {js('date.js')}
        {bower('bootstrap-daterangepicker/daterangepicker.js')}
        {bower('bootstrap-datepicker/dist/js/bootstrap-datepicker.js')}
        {js('jquery.dcjqaccordion.2.7.js')}
        {js('jquery.scrollTo.min.js')}
        {js('jquery.nicescroll.js')}
        {js('jquery.sparkline.js')}        
        <!--common script for all pages-->
        {js('common-scripts.js')}
        {js('gritter/js/jquery.gritter.js')}
        {js('gritter-conf.js')}	
        {js('fullcalendar/fullcalendar.min.js')}
        {js('chart-master/Chart.js')}
        {*<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*}
        <script src="{base_url('/assets/js/ie-emulation-modes-warning.js')}"></script>
        <script src="{base_url('/assets/bower_components/holderjs/holder.js')}"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        {bower('jquery-serializeForm/dist/jquery-serializeForm.js')}
        
        {bower('knockout/dist/knockout.debug.js')}
        {bower('bootstrap-switch/dist/js/bootstrap-switch.js')}
        {js('ko.bindingHandlers.bootstrapSwitch.js')}
        <script src="{site_url('/remotejs/config')}"></script>
    {block name=header}{/block}
</head>