{extends file='layouts\main.tpl'}
{block name=content}
    <!-- **********************************************************************************************************************************************************
     MAIN SIDEBAR MENU
     *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">

                <p class="centered"><a href="profile.html">
                        <img src="img/ui-sam.jpg" class="img-circle" width="60"></a>
                </p>
                <h5 class="centered">{$smarty.session.user.email|default: ''}</h5>

                {foreach from=$g.navs item=nav}
                    <li class="{$nav.class}">
                        <a {if is_in_array($nav.submenus,'url',cur_uri()) or cur_uri()== $nav.url}class="active"{/if} href="{$nav.url}">
                            <i class="fa {$nav.icon}"></i>
                            <span>{$nav.title|default: ''}</span>
                        </a>
                        {if !empty($nav.submenus)}
                            <ul class="sub">
                                {foreach from=$nav.submenus item=sub}                        
                                    <li  class="{if $sub.url == cur_uri()}active{/if}"><a  href="{$sub.url}">{$sub.title}</a></li>
                                {/foreach}
                            </ul>
                        {/if}
                    </li>
                {/foreach}


                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-tasks fa-dashboard"></i>
                        <span>计划</span>
                    </a>
                    <ul>
                        <li><a  href="{site_url('/page/myplan')}">我的计划</a></li>
                        <li><a  href="{site_url('/page/myfriends')}">关注的计划</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-cogs"></i>
                        <span>任务</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="calendar.html">我的任务</a></li>
                        <li><a  href="gallery.html">Gallery</a></li>
                        <li><a  href="todo_list.html">Todo List</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="fa fa-book"></i>
                        <span>消息</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="blank.html">Blank Page</a></li>
                        <li><a  href="login.html">Login</a></li>
                        <li><a  href="lock_screen.html">Lock Screen</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-bar-chart-o"></i>
                        <span>我的成就</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="morris.html">学习成就</a></li>
                        <li><a  href="chartjs.html">影响力</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class=" fa fa-user"></i>
                        <span>个人设置</span>
                    </a>
                    <ul class="sub">
                        <li><a  href="morris.html">学习成就</a></li>
                        <li><a  href="chartjs.html">影响力</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <div class="row-fluid">
            {block name=body}{/block}
        </div>
    </section>
</section>
{/block}