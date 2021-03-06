<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Requests\Config;

use Modules\Admin\Http\Requests\Request;

class SiteRequest extends Request
{
    /**
     * The site configuration rules.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title'               => 'required|max:30',
            'admin_title'         => 'required|max:30',
            'work_order_calendar' => 'max:100',
            'asset_calendar'      => 'max:100',
            'inventory_calendar'  => 'max:100',
        ];
    }

    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
