<?php

/**
 * This file is part of the mimmi20/ua-parser-interface package.
 *
 * Copyright (c) 2025-2026, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaParser;

use UaData\EngineInterface;

interface EngineParserInterface
{
    /**
     * Gets the information about the engine by User Agent
     *
     * @throws void
     */
    public function parse(string $useragent): EngineInterface;
}
