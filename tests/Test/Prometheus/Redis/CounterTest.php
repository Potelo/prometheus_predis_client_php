<?php

namespace Test\Prometheus\Redis;

use Test\Prometheus\AbstractCounterTest;

/**
 * See https://prometheus.io/docs/instrumenting/exposition_formats/
 * @requires extension redis
 */
class CounterTest extends AbstractCounterTest
{
    use InitializationTrait;
}
