<?php

/**
 * This file is part of the mimmi20/ua-parser-interface package.
 *
 * Copyright (c) 2025, Thomas Mueller <mimmi20@live.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace UaParser;

interface EngineParserInterface
{
    /**
     * Gets the information about the engine by User Agent
     *
     * @throws void
     */
    public function parse(string $useragent): string;
}
