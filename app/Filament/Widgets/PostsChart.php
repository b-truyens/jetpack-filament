<?php

namespace App\Filament\Widgets;

use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class PostsChart extends ApexChartWidget
{
    /**
     * Chart Id
     *
     * @var string
     */
    protected static string $chartId = 'postsChart';

    /**
     * Widget Title
     *
     * @var string|null
     */
    protected static ?string $heading = 'PostsChart';

    /**
     * Chart options (series, labels, types, size, animations...)
     * https://apexcharts.com/docs/options
     *
     * @return array
     */
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => 'treemap',
                'height' => 300,
            ],
            'series' => [
                [
                    'data' => [
                        ['x' => 'Code', 'y' => 40],
                        ['x' => 'Test', 'y' => 20],
                        ['x' => 'Validation', 'y' => 60],
                        ['x' => 'Deployment', 'y' => 10],
                    ],
                ],
            ],
            'colors' => ['#6366f1'],
            'legend' => [
                'show' => false,
            ],
        ];
    }
}
