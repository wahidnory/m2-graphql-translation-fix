<?php

declare(strict_types=1);

namespace Wahid\GraphQlTranslations\Plugin\Controller;

use Magento\Framework\App\Area;
use Magento\Framework\App\AreaList;
use Magento\Framework\App\State;
use Magento\GraphQl\Controller\GraphQl;

class GraphQlPlugin
{
    private AreaList $areaList;

    private State $appState;

    public function __construct(
        AreaList $areaList,
        State $appState
    ) {
        $this->areaList = $areaList;
        $this->appState = $appState;
    }

    public function beforeDispatch(GraphQl $subject)
    {
        $area = $this->areaList->getArea($this->appState->getAreaCode());
        $area->load(Area::PART_TRANSLATE);

        return null;
    }
}
