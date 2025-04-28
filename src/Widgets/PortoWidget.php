<?php

namespace PortoSurchargeWidget\Widgets;

use Plenty\Modules\ShopBuilder\Contracts\ShopBuilderWidgetProvider;
use Plenty\Modules\ShopBuilder\Models\ShopBuilderWidget;

class PortoWidget implements ShopBuilderWidgetProvider
{
    public function getWidget(): ShopBuilderWidget
    {
        $widget = new ShopBuilderWidget(
            'porto-widget',
            '🚚 Portoaufschlag-Widget',
            'Zeigt automatisch Portoaufschläge 1 und 2 des aktuellen Artikels an.',
            'General'
        );

        return $widget;
    }

    public function getTemplate(): string
    {
        return 'PortoSurchargeWidget::porto-widget';
    }
}
