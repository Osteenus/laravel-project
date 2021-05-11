<?php

namespace App\Jobs\GenerateCatalog;

class GenerateCatalogMainJob extends AbstractJob
{

    public function handle()
    {
        $this->debug('start');

        // Сначала кешируем продукты
        GenerateCatalogCacheJob::dispatchNow();

        // Затем создаем цепочку заданий формирования файлов с ценами
        $chainPrices = $this->getChainPrices();

        // Основные подзадачи
        $chainMain = [
            new GenerateCategoriesJob, // Генерация категорий
            new GenerateDeliveriesJob, // Генерация способов доставок
            new GeneratePointsJob, // Генерация пунктов выдачи
        ];

        // Подзадачи, которые
        $chainList = [

        ];


    }

}
