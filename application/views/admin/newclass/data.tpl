{if !empty($list)}
    {foreach from=$list key=i item=item}
        <tr>
            <td>{$item.id}</td>
            <td>{$item.modified|date_format:lang('smt_dt_format')}</td>
            <td>{$item.class}</td>
            <td>{$item.subject}</td>
            <td>{$item.address_street}</td>
            <td>{$item.address_district}</td>
            <td>{$item.times_per_week}</td>
            <td>{$item.work_time}</td>
            <td>{$item.salary}</td>
            <td>{$item.requirement}</td>
            <td>
            	{if $item.done eq 0}
            		{lang('class_waiting')}
            	{else}
            		{lang('class_success')}
            	{/if}
            </td>
            <td style="text-align: center;">
                {if (not empty($permission['execute'])) or $permission eq 1}
                    <a info-id="{$item.id}" info-action="done" class="label label-warning a-confirmation" style="cursor: pointer;">{lang('done')}</a>
                {/if}
                {if (not empty($permission['edit'])) or $permission eq 1}
                    <a href="edit/{$this->mask($item.id)}" class="label label-info" style="cursor: pointer;">{lang('edit')}</a>
                {/if}
                {if (not empty($permission['delete'])) or $permission eq 1}
                    <a info-id="{$item.id}" info-action="delete" class="label label-danger a-confirmation" style="cursor: pointer;">{lang('delete')}</a>
                {/if}
            </td>
        </tr>
    {/foreach}
{/if}