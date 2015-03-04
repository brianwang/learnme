<?php /* Smarty version Smarty-3.1.19-dev, created on 2015-03-04 07:39:29
         compiled from "application\views\myplan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:158454f6a23786b0f8-15855010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ace5e1d643feeba6259b71dbcc733a781e2b5c39' => 
    array (
      0 => 'application\\views\\myplan.tpl',
      1 => 1425451047,
      2 => 'file',
    ),
    '2a85247465597293ee626e4c5d9fc74edde9da80' => 
    array (
      0 => 'application\\views\\layouts\\col2.tpl',
      1 => 1423984029,
      2 => 'file',
    ),
    '4cd18deac4673a9784a61e6d0386e61cd8aa8e78' => 
    array (
      0 => 'application\\views\\layouts\\main.tpl',
      1 => 1425093343,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '158454f6a23786b0f8-15855010',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19-dev',
  'unifunc' => 'content_54f6a238369f68_99843409',
  'variables' => 
  array (
    'g' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54f6a238369f68_99843409')) {function content_54f6a238369f68_99843409($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php echo bower('jquery/dist/jquery.js');?>

        
        
        
        <!-- Optional theme -->
        <script src="<?php echo base_url('/assets/js/ie-emulation-modes-warning.js');?>
"></script>
        <!-- Latest compiled and minified JavaScript -->
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
        <?php echo bower('jquery-serializeForm/dist/jquery-serializeForm.js');?>

        <?php echo bower('knockout/dist/knockout.debug.js');?>

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
            
    <div id="planopts">
        <form class="form-horizontal" id="form_plan">
            <input type="hidden" name="author" value="<?php echo (($tmp = @$_SESSION['uid'])===null||$tmp==='' ? '33' : $tmp);?>
"/>
            <div class="form-group">
                <label for="plantilte">标题</label>
                <input type="text" class="form-control" id="plantilte" placeholder="请输入计划标题，不超过255个字符" name="title">
            </div>
            <div class="form-group">
                <label for="tags">标签</label>
                <input type="text" class="form-control" id="tags" placeholder="输入标签" data-role="tagsinput" style="width: 500px;" name="tags">
            </div>
            <div class="form-group">
                <label for="tags">类型</label>
                <select name="type" class="form-control">
                    <option value='week'>周任务</option>
                    <option value='month'>月任务</option>
                    <option value='year'>年任务</option>
                    <option value='long'>长期任务</option>
                </select>  
            </div>
            <div class="form-group">
                <label for="content">内容</label>
                <textarea type="text" class="form-control" id="content" placeholder="计划内容" name="content"></textarea>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-info" data-bind="click: add">保存</a>
            </div>
        </form>
        <a class="btn btn-primary">添加计划</a>
        <form class="form-horizontal">
            <div class="form-group">
                <label for="content">步骤简介</label>
                <input type="text" name="steptitle" id="content" placeholder="任务内容" class="form-control">
            </div>
            <div class="form-group">
                <label for="content">步骤细节</label>
                <textarea type="text" name="assumetime" placeholder="步骤的细节" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <a class="btn btn-info">保存</a>
            </div
    </div>
</form>
</div>
<ul class="list-group">
    <li class="list-group-item">
        <h2>我要在一周内学会C++</h2>
        <ul class="nav nav-pills">
            <li class="active"><a href="#">C++</a></li>
            <li class="active"><a href="#">编程</a></li>
        </ul>
        <div style="position: absolute; right: 20px; top: 35px;">
            <a>评论</a>
            <a>关注</a>
        </div>
        <ul class="list-group">
            <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = array('学习基本语法','学习流程','学习都达到'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['step']->key;
?>
                <li class="list-group-item">
                    第<?php echo $_smarty_tpl->tpl_vars['idx']->value;?>
步: <?php echo $_smarty_tpl->tpl_vars['step']->value;?>

                    <div style="position: absolute; right: 5px; top: 5px;">
                        <a>重要性</a>
                    </div>
                </li>
            <?php } ?>
        </ul>
    </li>
</ul>
<hr/>
<form class="form-horizontal">
    <div class="form-group">
        <input type="text" name="steptitle" id="comment" placeholder="评论" class="form-control"><a class="btn btn-info">保存</a>
    </div>
</form>
<ul class="list-group">
    <?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['idx'] = new Smarty_Variable;
 $_from = array('学习基本语法','学习流程','学习都达到'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['idx']->value = $_smarty_tpl->tpl_vars['step']->key;
?>
        <li class="list-group-item">
            <?php echo $_smarty_tpl->tpl_vars['step']->value;?>

        </li>
    <?php } ?>
    <li class="list-group-item">
        <a class="btn btn-primary">添加评论</a>
    </li>
</ul>

<div class="row">
    <ul class="nav nav-pills col-md-8">
        <li><a>已完成</a></li>
        <li><a>未完成</a></li>
        <li><a>重要不紧急</a></li>
        <li><a>紧急不重要</a></li>
        <li><a>重要不紧急</a></li>
        <li><a>不重要不紧急</a></li>
        <li><a>按日期</a></li>
    </ul>
    <div class="col-md-4 col-sm-1">
        <input type="text" name="key" placeholder="搜索关键字"><a>搜索</a>
    </div>
</div>
<div class="row">

    <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = array(1,2,3,4,5); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><?php echo (($tmp = @$_smarty_tpl->tpl_vars['plan']->value['title'])===null||$tmp==='' ? '我要学习插画' : $tmp);?>
</h3>
                    <p>周任务</p>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">进入详细</a> 
                        <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    <?php } ?>
</div>


        </div>
    </div>
</div>


   
<?php echo $_smarty_tpl->getSubTemplate ("layouts/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php echo bower('/bootstrap-tagsinput/dist/bootstrap-tagsinput.js');?>

    <?php echo bower('jquery.validate/dist/jquery.validate.js');?>

    <?php echo bower('jquery.validate/dist/additional-methods.js');?>

    <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css');?>
">
    <link rel="stylesheet" href="<?php echo base_url('/assets/bower_components/form.validation/dist/css/bootstrapValidator.css');?>
">
    <?php echo bower('form.validation/dist/js/bootstrapValidator.js');?>

    <?php echo js('myplan.js');?>

   
</body>
</html>


<?php }} ?>
