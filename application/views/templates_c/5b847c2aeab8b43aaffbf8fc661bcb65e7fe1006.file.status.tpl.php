<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-02-27 03:13:43
         compiled from "application\views\status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2147154df04ec974e73-46435706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b847c2aeab8b43aaffbf8fc661bcb65e7fe1006' => 
    array (
      0 => 'application\\views\\status.tpl',
      1 => 1423906876,
      2 => 'file',
    ),
    '359fe87966e65ca692174d35db7269773e51e876' => 
    array (
      0 => 'application\\views\\layouts\\col2.tpl',
      1 => 1423984029,
      2 => 'file',
    ),
    '71f140b0174d476da8f10fc64d280f53daa67c6b' => 
    array (
      0 => 'application\\views\\layouts\\main.tpl',
      1 => 1423908189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2147154df04ec974e73-46435706',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54df04ecbe9d81_28445050',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df04ecbe9d81_28445050')) {function content_54df04ecbe9d81_28445050($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/favicon.ico">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap/dist/css/bootstrap.css');?>
">
        <link rel="stylesheet" href="<?php echo base_url('/assets/css/dashboard.css');?>
">
        <!-- Optional theme -->
        <script src="<?php echo base_url('/assets/js/ie-emulation-modes-warning.js');?>
"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <script src="<?php echo base_url('/assets/bower_components/holderjs/holder.js');?>
"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="http://libs.baidu.com/jquery/1.9.0/jquery.js"></script>
        <title><?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
</title>
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
         <!--[if lt IE 9]><script src="<?php echo base_url('/assets/js/ie-emulation-modes-warning.js');?>
"></script>
        <![endif]-->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    
</head>
<body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#"><?php echo $_smarty_tpl->tpl_vars['g']->value['sitename'];?>
</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/">推荐计划</a></li>
                    <li><a href="<?php echo site_url('/page/dashboard');?>
">我的任务</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo site_url('/page/setting');?>
">设置</a></li>
                    <li><a href="<?php echo site_url('/page/profile');?>
">个人中心</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active">
                        <a href="#">我要学</a>
                    </li>
                    <li><a href="<?php echo site_url('/page/myplan');?>
">我的计划</a></li>
                    <li><a href="<?php echo site_url('/page/mytask');?>
">任务列表</a></li>
                    <li><a href="<?php echo site_url('/page/status');?>
">我的成就</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active">
                        <a href="" >我感兴趣</a>
                        <span style="position: absolute; top: 10px;right: 10px;">
                            <a style="color: #fff;">添加</a>
                        </span>
                    </li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">学他人</a></li>
                    <li><a href="">他人列表</a></li>
                    <li><a href="">好友计划</a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-sm-offset-3 col-md-8 col-md-offset-2 main">
            
    <h1 class="page-header">任务状态</h1>

    <div class="row placeholders">
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>任务完成率</h4>
            <span class="text-muted">30%</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>帮助好友度</h4>
            <span class="text-muted">40%</span>
        </div>

    </div>
    <h1 class="page-header">我的成就</h1>
    <div class="row placeholders">

        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>个人成就</h4>
            <span class="text-muted">Something else</span>
        </div>
        <div class="col-xs-6 col-sm-3 placeholder">
            <img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
            <h4>Label</h4>
            <span class="text-muted">Something else</span>
        </div>
    </div>

        </div>
    </div>
</div>


   
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>


<?php }} ?>
