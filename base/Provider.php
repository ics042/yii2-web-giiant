<?php

namespace ics042\giiant\base;


use yii\base\Object;

class Provider extends Object
{
    /**
     * @var \ics042\giiant\crud\Generator
     */
    public $generator;
    public $columnNames = [''];
} 