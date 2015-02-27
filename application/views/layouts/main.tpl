<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="{base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.css')}">
        <link rel="stylesheet" href="{base_url('/assets/css/dashboard.css')}">
        <!-- Optional theme -->
        <script src="{base_url('/assets/js/ie-emulation-modes-warning.js')}"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <script src="{base_url('/assets/bower_components/holderjs/holder.js')}"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <title>{$g.sitename}</title>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
         <!--[if lt IE 9]><script src="{base_url('/assets/js/ie-emulation-modes-warning.js')}"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="{site_url('/remotejs/config')}"></script>

    {block name=header}{/block}
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">{$g.sitename}</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">推荐计划</a></li>
                    <li><a href="{site_url('/page/dashboard')}">我的任务</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{site_url('/page/setting')}">设置</a></li>
                    <li><a href="{site_url('/page/profile')}">个人中心</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>
{block name=content}{/block}   
{include file="layouts/footer.tpl"}
</body>
</html>


