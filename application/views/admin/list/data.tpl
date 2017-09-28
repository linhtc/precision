{if !empty($list)}
    {foreach from=$list key=i item=item}
        <tr>
            <td>{$item.id}</td>
            <td>{$item.modified}</td>
            <td>{$item.p}</td>
            <td style="max-width: 250px; overflow: hidden;">{$item.c1}</td>
            <td style="max-width: 250px; overflow: hidden;">{$item.c2}</td>
            <td>
                {if (not empty($permission['edit'])) or $permission eq 1}
                    <a href="edit/{$this->mask($item.id)}" class="label label-info" style="cursor: pointer;">{lang('edit')}</a>
                {/if}
                {if (not empty($permission['delete'])) or $permission eq 1}
                    <a info-id="{$item.id}" info-action="delete" class="label label-danger a-confirmation" data-toggle="confirmation" style="cursor: pointer;">{lang('delete')}</a>
                {/if}
            </td>
        </tr>
    {/foreach}
{/if}