{extends file='layouts\col1.tpl'}
{block name=content}
    <div class="col-md-8" style="margin-top: 20px;">
        <div class="list-group">
            {for $i=0 to 15 }
                <div class="list-group-item" style="margin-top: 10px;">
                    <h4 class="list-group-item-heading">
                        一周内学习C++ <span>共需要13个步骤</span>
                    </h4>
                    <div style="position: absolute; right: 10px; top: 10px;">
                        <a href="#" class="btn btn-info">展开</a>                        
                        <a href="#" class="btn btn-info">关注</a>
                        <a href="#" class="btn btn-info">跟随</a>
                    </div>
                    <div class="list-group-item-text">
                        <span>100人关注</span>
                        <span>100人跟随</span>
                    </div>
                </div>
            {/for}
        </div>
        <div>
            <a class="btn btn-default">更多</a>
        </div>
    </div>
    <div class="col-md-3">
       
    </div>

{/block}