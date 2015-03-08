<?php
namespace Tkjn\TestProviders;

trait IntegerTrait
{
    public function notAnIntegerProvider()
    {
        return [
            [1210.12],
            [-9775.01],
            [0.0001],
            ['asdasd'],
            [null],
            [[]],
            ['1a'],
            ['15.1'],
            ['15.11231231'],
            ['-722.123123'],
            [false],
        ];
    }

    public function integerProvider()
    {
        return [
            [1],
            [-5],
            [0],
            [1891287],
            [-7712791],
            [PHP_INT_MAX],
            [~PHP_INT_MAX],
            [true], // not convinced this is a good idea
        ];
    }
}
