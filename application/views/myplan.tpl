{extends file='layouts\col2.tpl'}
{block name=script}
    {bower('/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}
    {bower('jquery.validate/dist/jquery.validate.js')}
    {bower('jquery.validate/dist/additional-methods.js')}
    <link rel="stylesheet" href="{base_url('/assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}">
    <link rel="stylesheet" href="{base_url('/assets/bower_components/form.validation/dist/css/bootstrapValidator.css')}">
    {bower('form.validation/dist/js/bootstrapValidator.js')}
    {js('myplan.js')}
{/block}
{block name=body}
    <div id="planlist" data-bind="foreach: ">


    </div>
    <div style=" border: 1px solid #ccc;box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);padding: 20px; border-radius: 5px;" 
         id="addplan">
        <div id="planlist" data-bind="foreach: plans" >
            <div class="media-list">
                <div class="media-left media-middle" style="border-right: solid 1px;">
                    <a data-bind="click: $parent.finish" title="该计划" class="media-object">
                        <span class="glyphicon glyphicon-ok"></span>                            
                    </a>
                </div>
                <div class="media-body row">
                    <div class="panel">
                        <a data-bind="attr: { href: $parent.baseurl+'/'+$data.id }">
                            <span data-bind="text: $data.title" class="col-md-8"></span></a>
                        <span  data-bind="text: $data.type" class="col-md-2"></span>
                        <span class="col-md-2">
                            <a data-bind="click: $parent.showaddstep" title="添加计划步骤">
                                <span class="glyphicon glyphicon-th-list"></span>
                            </a>                          
                        </span>
                    </div>
                    <hr/>
                    <ul class="list-group" data-bind="foreach: { data: $data.steps, as: 'step' }">
                        <li class="list-group-item">
                            <span data-bind="text: step.title"></span>
                        </li>
                    </ul>
                    <form class="form-horizontal" id="form_step" >
                        <input type="hidden" name="plan_id" value="" data-bind="attr: { value: $data.id}"/>
                        <div class="form-inline">
                            <input type="text" name="title" id="content" placeholder="任务内容" class="form-control">
                            <a class="btn btn-info" data-bind="click: $parent.addstep">保存</a>
                        </div>
                    </form>
                </div>
                <hr/>
            </div>
        </div>
        <div id="tmp_addplan" style="font-size: 18px;">
            <a data-bind="click: showaddplan">
                <span class="glyphicon glyphicon-plus" aria-hidden="true" ></span>
                <span class="border-radus: 4px;">添加新的学习计划</span>
            </a>
        </div>

    </div>
    <div id="planopts">
        <form class="form-horizontal" id="form_plan" style="display: none;">
            <div class="form-inline" style="margin-bottom: 10px;">
                <input type="hidden" name="author" value="{$smarty.session.uid|default: '33'}"/>
                <input type="text" class="form-control" id="plantilte" placeholder="请输入计划标题，不超过255个字符" name="title">
                <select name="type" class="form-control">
                    <option value='week'>周任务</option>
                    <option value='month'>月任务</option>
                    <option value='year'>年任务</option>
                    <option value='long'>长期任务</option>
                </select>

                <a href="#" class="btn btn-info" data-bind="click: add">保存</a>
                <a href="#" class="btn btn-warning" data-bind="click: close">关闭</a>
            </div>
            <div class="form-inline" style="margin-bottom: 10px;width: 440px;">
                <input type="text" class="form-control" id="tags" placeholder="输入标签" data-role="tagsinput" name="tags">
            </div>
            <div style="width: 440px;">

                <textarea type="text" class="form-control" id="content" placeholder="计划内容" name="content"></textarea>
            </div>
        </form>

        {* <form class="form-horizontal" id="form_plan">
        <input type="hidden" name="author" value="{$smarty.session.uid|default: '33'}"/>
        <div class="form-group">
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
        </form>*}
        {*<a class="btn btn-primary">添加计划</a>
        <form class="form-horizontal" id="form_step">
        <input type="hidden" name="plan_id" value="2"/>
        <div class="form-group">
        <label for="content">步骤简介</label>
        <input type="text" name="title" id="content" placeholder="任务内容" class="form-control">
        </div>
        <div class="form-group">
        <label for="content">步骤ID</label>
        <input type="text" name="idx" placeholder="任务第几步">
        </div>
        <div class="form-group">
        <a class="btn btn-info" data-bind="click: addstep">保存</a>
        </div>
        </form>*}
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