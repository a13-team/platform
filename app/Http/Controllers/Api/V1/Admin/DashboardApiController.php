<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Services\ChartsService;

class DashboardApiController extends Controller
{
    public function index()
    {
        $pie0 = new ChartsService([
            'title'            => 'Статистика по Баерам',
            'chart_type'       => 'pie',
            'model'            => 'App\Models\User',
            'group_by_field'   => 'updated_at',
            'group_by_period'  => 'day',
            'column_class'     => 'col-md-12',
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 90,
        ]);

        $line1 = new ChartsService([
            'title'            => 'Стата',
            'chart_type'       => 'line',
            'model'            => 'App\Models\Permission',
            'group_by_field'   => 'created_at',
            'group_by_period'  => 'day',
            'column_class'     => 'col-md-12',
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 90,
        ]);

        $pie2 = new ChartsService([
            'title'            => 'Стата3',
            'chart_type'       => 'pie',
            'model'            => 'App\Models\User',
            'group_by_field'   => 'remember_token',
            'group_by_period'  => 'day',
            'column_class'     => 'col-md-12',
            'filter_by_field'  => 'created_at',
            'filter_by_period' => 90,
        ]);

        return response()->json(compact('pie0', 'line1', 'pie2'));
    }
}
