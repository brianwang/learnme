{extends file='layouts\col1.tpl'}
{block name=content}
    <div class="row" style="margin-top: 50px;">
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
    </div>

{/block}