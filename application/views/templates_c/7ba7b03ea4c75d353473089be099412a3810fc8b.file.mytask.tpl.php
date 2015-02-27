<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-02-27 03:13:41
         compiled from "application\views\mytask.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2021954df05418dfea6-09875176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7ba7b03ea4c75d353473089be099412a3810fc8b' => 
    array (
      0 => 'application\\views\\mytask.tpl',
      1 => 1423906868,
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
  'nocache_hash' => '2021954df05418dfea6-09875176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54df0541b8f741_15063191',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df0541b8f741_15063191')) {function content_54df0541b8f741_15063191($_smarty_tpl) {?><!DOCTYPE html>
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
             
    <h2 class="sub-header">Section title</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                    <th>Header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>ipsum</td>
                    <td>dolor</td>
                    <td>sit</td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>consectetur</td>
                    <td>adipiscing</td>
                    <td>elit</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>nec</td>
                    <td>odio</td>
                    <td>Praesent</td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>Sed</td>
                    <td>cursus</td>
                    <td>ante</td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>dapibus</td>
                    <td>diam</td>
                    <td>Sed</td>
                    <td>nisi</td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>quis</td>
                    <td>sem</td>
                    <td>at</td>
                </tr>
                <tr>
                    <td>1,006</td>
                    <td>nibh</td>
                    <td>elementum</td>
                    <td>imperdiet</td>
                    <td>Duis</td>
                </tr>
                <tr>
                    <td>1,007</td>
                    <td>sagittis</td>
                    <td>ipsum</td>
                    <td>Praesent</td>
                    <td>mauris</td>
                </tr>
                <tr>
                    <td>1,008</td>
                    <td>Fusce</td>
                    <td>nec</td>
                    <td>tellus</td>
                    <td>sed</td>
                </tr>
                <tr>
                    <td>1,009</td>
                    <td>augue</td>
                    <td>semper</td>
                    <td>porta</td>
                    <td>Mauris</td>
                </tr>
                <tr>
                    <td>1,010</td>
                    <td>massa</td>
                    <td>Vestibulum</td>
                    <td>lacinia</td>
                    <td>arcu</td>
                </tr>
                <tr>
                    <td>1,011</td>
                    <td>eget</td>
                    <td>nulla</td>
                    <td>Class</td>
                    <td>aptent</td>
                </tr>
                <tr>
                    <td>1,012</td>
                    <td>taciti</td>
                    <td>sociosqu</td>
                    <td>ad</td>
                    <td>litora</td>
                </tr>
                <tr>
                    <td>1,013</td>
                    <td>torquent</td>
                    <td>per</td>
                    <td>conubia</td>
                    <td>nostra</td>
                </tr>
                <tr>
                    <td>1,014</td>
                    <td>per</td>
                    <td>inceptos</td>
                    <td>himenaeos</td>
                    <td>Curabitur</td>
                </tr>
                <tr>
                    <td>1,015</td>
                    <td>sodales</td>
                    <td>ligula</td>
                    <td>in</td>
                    <td>libero</td>
                </tr>
            </tbody>
        </table>
    </div>

        </div>
    </div>
</div>


   
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>


<?php }} ?>
