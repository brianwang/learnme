{extends file='layouts\col1.tpl'}
{block name=content}
    {*<div class="row" style="margin-top: 50px;">
    <div class="col-md-4 col-md-push-4">
    <div class="alert alert-error" role="alert">
    {$error|default: ''}
    </div>
    <form id="form_register" class="form-horizontal" action="{site_url('/auth/login')}" method='POST'>
    <input type='hidden' name='sessiontime' value='{$sessiontime}'/>
    <div class="form-group">
    <label for="email" class="col-sm-2 control-label">用户名:</label>
    <div class="col-sm-10">
    <input type="text" name="email" placeholder="邮箱/QQ/用户名" class="form-control">
    </div>
    </div>
    <div class="form-group">
    <label for="password" class="col-sm-2 control-label">密码:</label>
    <div class="col-sm-10">
    <input type="password" name="password" placeholder="密码" class="form-control">
    </div>
    </div>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button class="btn btn-primary">登录</button>
    </div>
    </div>
    </form>
    </div>
    </div>*}
    <div id="login-page">
        <div class="container">

            <form class="form-login" id="form_register" action="{site_url('/auth/login')}" method='POST'>

                <input type='hidden' name='sessiontime' value='{$sessiontime}'/>
                <h2 class="form-login-heading">现在登录</h2>
                {if $smarty.session.flash_data|default: false}
                    <div class="alert alert-danger" >
                        {$smarty.session.flash_data}
                    </div>
                {/if}
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="邮箱/QQ/用户名" autofocus name="email">
                    <br>
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <label class="checkbox">
                        <span class="pull-right">
                            <a data-toggle="modal" href="login.html#myModal"> 忘记密码?</a>
                        </span>
                    </label>
                    <button class="btn btn-theme btn-block" href="{site_url('/page/register')}" type="submit">
                        <i class="fa fa-lock"></i> 登录</button>
                    <hr>

                    <div class="login-social-link centered">
                        <p>通过社交网络登录</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-qq"></i> QQ</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-weibo"></i> 微博</button>
                    </div>
                    <div class="registration">
                        还没注册?<br/>
                        <a class="" href="{site_url('/page/register')}">
                            注册帐号
                        </a>
                    </div>

                </div>
            </form>
            <!-- Modal -->
            <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Forgot Password ?</h4>
                        </div>
                        <div class="modal-body">
                            <p>Enter your e-mail address below to reset your password.</p>
                            <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                            <button class="btn btn-theme" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal -->          	  	

        </div>
    </div>
{/block}