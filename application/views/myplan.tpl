{extends file='layouts\col2.tpl'}
{block name=header}
    <script src="{base_url('/assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}"></script>
    <link rel="stylesheet" href="{base_url('/assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}">
    {js('myplan.js')}
{/block}
{block name=body}
    <form class="form-horizontal">
        <div class="form-group">
            <label for="plantilte">标题</label>
            <input type="text" class="form-control" id="plantilte" placeholder="请输入计划标题，不超过255个字符" >
        </div>
        <div class="form-group">
            <label for="tags">标签</label>
            <input type="text" class="form-control" id="tags" placeholder="输入标签" data-role="tagsinput" style="width: 500px;">
        </div>
        <div class="form-group">
            <label for="tags">类型</label>
            <select name="tasktype" class="form-control">
                <option>周任务</option>
                <option>月任务</option>
                <option>年任务</option>
                <option>长期任务</option>
            </select>  
        </div>

        <div class="form-group">
            <a href="#" class="btn btn-info">保存</a>
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
            {foreach from=['学习基本语法','学习流程','学习都达到'] item=step key=idx}
                <li class="list-group-item">
                    第{$idx}步: {$step}
                    <div style="position: absolute; right: 5px; top: 5px;">
                        <a>重要性</a>
                    </div>
                </li>
            {/foreach}
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
    {foreach from=['学习基本语法','学习流程','学习都达到'] item=step key=idx}
        <li class="list-group-item">
            {$step}
        </li>
    {/foreach}
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

    {foreach from=[1,2,3,4,5] item=plan}
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3>{$plan.title|default: '我要学习插画'}</h3>
                    <p>周任务</p>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">进入详细</a> 
                        <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    {/foreach}
</div>

{/block}