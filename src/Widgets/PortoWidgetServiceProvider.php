<?php

namespace PortoSurchargeWidget\Widgets;

use Plenty\Modules\ShopBuilder\Contracts\ShopBuilderWidgetProvider;
use Plenty\Modules\ShopBuilder\Contracts\ShopBuilderWidgetRepositoryContract;
use Plenty\Plugin\ServiceProvider;

class PortoWidgetServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot(ShopBuilderWidgetRepositoryContract $repository)
    {
        $repository->registerWidget(
            PortoWidget::class,
            'PortoSurchargeWidget::porto-widget'
        );
    }
}
