<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-02-14 10:38:22
         compiled from "application\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3256654def4433cfb92-85524384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a39a2a8c0cb7ea34e4275c117476d3a5fa8f4c4' => 
    array (
      0 => 'application\\views\\index.tpl',
      1 => 1423906625,
      2 => 'file',
    ),
    'f07094354fd780fe1aa34c62069f24d94f27aa77' => 
    array (
      0 => 'application\\views\\layouts\\col1.tpl',
      1 => 1423903890,
      2 => 'file',
    ),
    '71f140b0174d476da8f10fc64d280f53daa67c6b' => 
    array (
      0 => 'application\\views\\layouts\\main.tpl',
      1 => 1423906701,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3256654def4433cfb92-85524384',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54def4434c1ed3_73799090',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54def4434c1ed3_73799090')) {function content_54def4434c1ed3_73799090($_smarty_tpl) {?><!DOCTYPE html>
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
        <title>Dashboard Template for Bootstrap</title>
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
                    <li class="active"><a href="#">首页</a></li>
                    <li><a href="#">推荐计划</a></li>
                    <li><a href="#about">我的面板</a></li>
                    <li><a href="#contact">任务提醒</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">设置</a></li>
                    <li><a href="#">个人中心</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        </div>
    </nav>

    <div class="col-md-8" style="margin-top: 20px;">
        <div class="list-group">
            <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 15+1 - (0) : 0-(15)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                <div class="list-group-item" style="margin-top: 10px;">
                    <h4 class="list-group-item-heading">
                        一周内学习C++ <span>共需要13个步骤</span>
                    </h4>
                    <div style="position: absolute; right: 10px; top: 10px;">
                        <a href="#" class="btn btn-info">关注</a>
                        <a href="#" class="btn btn-info">跟随</a>
                    </div>
                    <div class="list-group-item-text">
                        <span>100人关注</span>
                        <span>100人跟随</span>
                    </div>
                </div>
            <?php }} ?>
        </div>
        <div>
            <a class="btn btn-default">更多</a>
        </div>
    </div>
    <div class="col-md-3">
       
    </div>

   
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>


<?php }} ?>
