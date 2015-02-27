{extends file='layouts\col1.tpl'}
{block name=body}
    <div class="row-fluid" style="margin-top: 20px;">
        <div class="col-md-1" >

        </div>
        <div class="col-md-7">
            <div class="list-group">
                {for $i=0 to 15 }
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
                {/for}
            </div>
            <div>
                <a class="btn btn-default">更多</a>
            </div>
        </div>
        <div class="col-md-4">

        </div>
    </div>

{/block}