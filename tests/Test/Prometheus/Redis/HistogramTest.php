<?php

namespace Test\Prometheus\Redis;

use Test\Prometheus\AbstractHistogramTest;

/**
 * See https://prometheus.io/docs/instrumenting/exposition_formats/
 * @requires extension redis
 */
class HistogramTest extends AbstractHistogramTest
{
    use InitializationTrait;
}
