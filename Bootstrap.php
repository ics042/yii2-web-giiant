<?php

namespace ics042\giiant;

use yii\base\Application;
use yii\base\BootstrapInterface;


/**
 * Class Bootstrap
 * @package ics042\giiant
 */
class Bootstrap implements BootstrapInterface
{

    /**
     * Bootstrap method to be called during application bootstrap stage.
     *
     * @param Application $app the application currently running
     */
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {

            if (!isset($app->getModule('gii')->generators['giiant-model'])) {
                $app->getModule('gii')->generators['giiant-model'] = 'ics042\giiant\model\Generator';
            }
            if (!isset($app->getModule('gii')->generators['giiant-crud'])) {
                $app->getModule('gii')->generators['giiant-crud'] = 'ics042\giiant\crud\Generator';
            }
            if ($app instanceof \yii\console\Application) {
                $app->controllerMap['giiant-batch'] = 'ics042\giiant\commands\BatchController';
            }
        }
    }
}