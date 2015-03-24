{extends file='layouts\col2.tpl'}
{block name=script}
    {bower('/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}
    {bower('jquery.validate/dist/jquery.validate.js')}
    {bower('jquery.validate/dist/additional-methods.js')}
    <link rel="stylesheet" href="{base_url('/assets/bower_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}">
    <link rel="stylesheet" href="{base_url('/assets/bower_components/form.validation/dist/css/bootstrapValidator.css')}">
    {bower('form.validation/dist/js/bootstrapValidator.js')}
    {js('../../js/myplan.js')}
    <script type="text/html" id="seasonTemplate">
        <li>
            <strong data-bind="text: name"></strong>
            <ul data-bind="template: { name: 'monthTemplate', foreach: months, as: 'month' }"></ul>
        </li>
    </script>
    <script type="text/html" id="monthTemplate">
        <li>
            <span data-bind="text: month"></span>
            is in
            <span data-bind="text: season.name"></span>
        </li>
    </script>
{/block}
{block name=body}
    <div class="row-fluid">
        <h3>
            <i class="fa fa-angle-right"></i>学习计划
            <input type="text" class="search-field">
        </h3>  
    </div>
    <div id="plantool" class="row-fluid">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-10"><h3>标题</h3></div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="row-fluid">

        <div id="planlist" class="col-md-8 list-group">
            <!-- ko foreach: plans -->
            <div class="list-group-item">
                <div class="row">
                    <a data-bind="click: $parent.finish" title="完成计划" class="col-md-1">
                        <h3 class="glyphicon glyphicon-ok"></h3>                            
                    </a>
                    <div class="col-md-10">
                        <a data-bind="attr: { href: $parent.baseurl+'/'+$data.id },click: $parent.updateplan">
                            <h3 data-bind="text: $data.title"></h3>
                        </a>
                        <div data-bind="attr:{ id: 'input_'+$data.id},visible: $('input_'+$data.id).before().is(':visible')">
                            <input type="text" name="title" value="" data-bind="attr:{ value: $data.title}">
                            <a class="btn btn-default" data-bind="click: $parent.saveplan">保存</a>
                            <a class="btn btn-info" data-bind="click: $parent.closesave">关闭</a>
                        </div>
                    </div>

                    <a data-bind="click: $parent.showsteps" title="展开步骤" class="col-md-1">
                        <h3 class="glyphicon glyphicon-list"></h3>                            
                    </a>                                                 
                    <div data-bind="attr: { id: 'updateplan_'+$data.id}"></div>
                </div>
            </div>
            <div data-bind="attr: { id: 'steps_'+$data.id }" style="display:none; margin: 3px 0 0 15px;">
                <span data-bind="text: console.log($data.steps())"></span>
                <ul class="list-group" >
                    <!-- ko foreach: { data: $data.steps, as: 'step' }-->
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-8">
                                <span data-bind="text: step.title"></span></div>
                            <div class="col-md-2">
                                <span data-bind="text: step.create_time"></span>
                            </div>
                        </div>
                    </li>
                    <!-- /ko -->
                    <li class="list-group-item" data-bind="attr: { id: 'tmp_addstep_'+$data.id }" style="font-size: 1.5em;">
                        <a data-bind="click: $parent.showaddstep" title="添加计划步骤" data-bind=" click: $data.parnent.showaddstep">
                            <span class="glyphicon glyphicon-plus-sign"></span>
                        </a>
                    </li>
                    <li class= "list-group-item" style="display:none;">
                        <form class="form-horizontal" data-bind="attr: { id: 'form_step_'+$data.id } " >
                            <input type="hidden" name="plan_id" value="" data-bind="attr: { value: $data.id}"/>
                            <div class="form-inline">
                                <input type="text" name="title" id="content" placeholder="任务内容" class="form-control">
                                <a class="btn btn-info" data-bind="click: $parent.addstep">保存</a>
                                <a class="btn btn-info" data-bind="click: $parent.hideaddstep.bind($data.plan_id)">取消</a>
                            </div>
                        </form>
                    </li>
                </ul>
            </div>
            <!-- /ko -->
            <div id="tmp_addplan" class="list-group-item">
                <div class="row">
                    <a data-bind="click: showaddplan" class="row">
                        <h3><i class="glyphicon glyphicon-plus col-md-1" aria-hidden="true" style="font-size: 1.5em;" ></i>
                            <span class="col-md-10">
                                添加新的学习计划</span></h3>
                    </a>
                </div>
            </div>
            <form class="form-horizontal" id="form_plan" style="display: none;">
                <div class="form-inline" style="margin-bottom: 10px;">
                    <input type="hidden" name="author" value="{$smarty.session.user.id|default: ''}"/>
                    <input type="text" class="form-control" id="plantilte" placeholder="请输入计划标题，不超过255个字符" name="title" style="width: 329px;">
                    <select name="type" class="form-control">
                        <option value='week'>周任务</option>
                        <option value='month'>月任务</option>
                        <option value='year'>年任务</option>
                        <option value='long'>长期任务</option>
                    </select>
                </div>
                <div class="form-inline" style="margin-bottom: 10px;width: 440px;">
                    <input type="text" class="form-control" id="tags" placeholder="输入标签" data-role="tagsinput" name="tags">
                </div>
                <div style="width: 440px;">
                    <textarea type="text" class="form-control" id="content" placeholder="计划内容" name="content"></textarea>
                </div>
                <div class="form-inline">
                    <a href="#" class="btn btn-info" data-bind="click: add">保存</a>
                    <a href="#" class="btn btn-warning" data-bind="click: close">关闭</a>
                </div>
            </form>
        </div>
        <div class="col-md-6">
        </div>
    </div>



    <div id="planopts">


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
    {*<ul class="list-group">
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
    </div>*}

{/block}