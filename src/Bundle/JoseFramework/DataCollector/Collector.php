<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2018 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Bundle\JoseFramework\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

interface Collector
{
    /**
     * @param array           $data
     * @param Request         $request
     * @param Response        $response
     * @param \Exception|null $exception
     */
    public function collect(array &$data, Request $request, Response $response, \Exception $exception = null);
}
