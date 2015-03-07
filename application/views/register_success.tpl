{extends file='layouts\col1.tpl'}
{block name=script}
    <script>
        $(document).ready(function () {
            var times = 3;
            var timeout = setInterval(function () {
                $('#span_to').text(times);
                times--;
                if (times <= 0) {
                    clearInterval(timeout);
                    window.location.replace('{site_url('/page/dashboard')}');
                }
            }, 1000);
        });
    </script>
{/block}
{block name=content}
    <div class="row" style="margin-top: 40px;">
        <div class="alert alert-success col-md-4 col-md-push-4" role="alert">
            <p>恭喜您{$frompage|default: '注册'}成功，正在跳转。。。。。。<span id='span_to'></span></p>
            <a href='{site_url('/page/dashboard')}'>直接到个人首页</a>
        </div>

    </div>
{/block}