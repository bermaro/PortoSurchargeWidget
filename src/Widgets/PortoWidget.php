<?php

namespace PortoSurchargeWidget\Widgets;

use Plenty\Modules\ShopBuilder\Contracts\ShopBuilderWidgetProvider;
use Plenty\Modules\ShopBuilder\Models\ShopBuilderWidget;

class PortoWidget implements ShopBuilderWidgetProvider
{
    public function getWidget(): ShopBuilderWidget
    {
        $widget = pluginApp(ShopBuilderWidget::class);
        $widget->widgetKey = 'porto-widget';
        $widget->name = '🚚 Portoaufschlag-Widget';
        $widget->description = 'Zeigt automatisch Portoaufschläge 1 und 2 des aktuellen Artikels an.';
        $widget->category = 'General';

        return $widget;
    }

    public function getTemplate(): string
    {
        return 'PortoSurchargeWidget::porto-widget';
    }
}
