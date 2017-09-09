{if !empty($list)}
    {foreach from=$list key=i item=item}
        <tr>
            <td>{$item.id}</td>
            <td>{$item.modified|date_format:lang('smt_dt_format')}</td>
            <td>{$item.fullname}</td>
            <td>{$item.address}</td>
            <td>{$item.phone}</td>
            <td>{$item.email}</td>
            <td>{$item.classname}</td>
            <td>{$item.subjects}</td>
            <td>{$item.requirement_teachers}</td>
            <td>{$item.notes}</td>
            <td>{$item.done}</td>
            <td style="text-align: center;">
                {if (not empty($permission['execute'])) or $permission eq 1}
                    <a info-id="{$item.id}" info-action="done" class="label label-warning a-confirmation" style="cursor: pointer;">{lang('done')}</a>
                {/if}
                <!-- {if (not empty($permission['edit'])) or $permission eq 1}
                    <a href="edit/{$this->mask($item.id)}" onclick="window.location='edit/{$item.id}'" class="label label-info" style="cursor: pointer;">{lang('edit')}</a>
                {/if} -->
                {if (not empty($permission['delete'])) or $permission eq 1}
                    <a info-id="{$item.id}" info-action="delete" class="label label-danger a-confirmation" style="cursor: pointer;">{lang('delete')}</a>
                {/if}
            </td>
        </tr>
    {/foreach}
{/if}