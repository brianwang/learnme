<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-02-27 10:00:50
         compiled from "application\views\plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2175354df17af67def0-04718648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca7e0f050b224bdff97596420b9d44058206882f' => 
    array (
      0 => 'application\\views\\plans.tpl',
      1 => 1423981548,
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
      1 => 1425027645,
      2 => 'file',
    ),
    '0ecd67e343bc272a550555bea2fab5b24842d9fb' => 
    array (
      0 => 'application\\views\\layouts\\footer.tpl',
      1 => 1423902103,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2175354df17af67def0-04718648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54df17af98b3b7_73271428',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54df17af98b3b7_73271428')) {function content_54df17af98b3b7_73271428($_smarty_tpl) {?><!DOCTYPE html>
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
        <script src="<?php echo site_url('/remotejs/config');?>
"></script>

    
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
        
    <div class="row-fluid" style="margin-top: 20px;">
        <div class="col-md-1" >

        </div>
        <div class="col-md-7">
            <div class="list-group">
                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 15+1 - (0) : 0-(15)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
                    <div class="list-group-item" style="margin-top: 10px;">
                        <div class="row">
                            <div class="col-md-1">
                                <a class="btn btn-info">赞</a>
                            </div>
                            <div class="col-md-9">
                                <h4 class="list-group-item-heading">
                                    <a href="#">一周内学习C++ <span>共需要13个步骤</span></a>
                                </h4>
                                
                                <div class="list-group-item-text">
                                    <span>100人关注</span>
                                    <span>100人跟随</span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                    <a href="#" class="btn btn-info">关注</a>
                                    <a href="#" class="btn btn-info">跟随</a>
                            </div>
                        </div>
                    </div>
                <?php }} ?>
            </div>
            <div>
                <a class="btn btn-default">更多</a>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>


    </div>
</div>
<?php /*  Call merged included template "layouts/footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '2175354df17af67def0-04718648');
content_54f03243043518_43846217($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "layouts/footer.tpl" */?>

   
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>


<?php }} ?>
<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-02-27 10:00:51
         compiled from "application\views\layouts\footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54f03243043518_43846217')) {function content_54f03243043518_43846217($_smarty_tpl) {?><footer class="footer">
    <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
    </div>
</footer><?php }} ?>
