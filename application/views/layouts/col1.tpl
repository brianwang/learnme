{extends file='layouts\main.tpl'}
{block name=content}
    <div class="container-fluid">
        <div class="row">
        {block name=body}{/block}
    </div>
</div>
{include file="layouts/footer.tpl"}

{/block}