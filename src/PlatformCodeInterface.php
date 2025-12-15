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

use UaData\OsInterface;

interface PlatformCodeInterface
{
    /** @throws void */
    public function hasPlatformCode(string $value): bool;

    /** @throws void */
    public function getPlatformCode(string $value, string | null $derivate = null): OsInterface;
}
