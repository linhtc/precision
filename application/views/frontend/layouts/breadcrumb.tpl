{if $uuid neq 'home'}
<ul class="breadcrumb" style="padding: 0px; margin-top: 0px;">
    <li><a href="{base_url()}">{lang('home')}</a></li>
    {foreach from=$breadcrumb key=kcrumb item=icrumb}
    {if $icrumb.class eq ''}
    <li class="$icrumb.class"><a href="{$icrumb.url}">{$icrumb.title}</a></li>
    {else}
    <li class="$icrumb.class">{$icrumb.title}</li>
    {/if}
    {/foreach}
</ul>
{/if}