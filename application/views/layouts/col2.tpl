{extends file='layouts\main.tpl'}
{block name=content}
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 sidebar">
                <ul class="nav nav-sidebar">
                    <li class="active">
                        <a href="#">我要学</a>
                    </li>
                    <li><a href="{site_url('/page/myplan')}">我的计划</a></li>
                    <li><a href="{site_url('/page/status')}">感兴趣话题</a></li>
                    {*<li><a href="{site_url('/page/mytask')}">任务列表</a></li>*}
                    <li><a href="{site_url('/page/status')}">我的成就</a></li>
                    
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href="">学他人</a></li>
                    <li><a href="">他人列表</a></li>
                    <li><a href="">好友计划</a></li>
                </ul>
                <ul class="nav nav-sidebar">
                    <li class="active"><a href='#'>用户信息</a></li>
                    <li><a href="{site_url('/page/profile')}">设置</a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-sm-offset-3 col-md-8 col-md-offset-2 main">
            {block name=body}{/block}
        </div>
    </div>
</div>


{/block}