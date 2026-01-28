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

use BrowserDetector\Version\VersionInterface;
use Deprecated;
use UaData\OsInterface;

interface PlatformVersionInterface
{
    /** @throws void */
    public function hasPlatformVersion(string $value): bool;

    /** @throws void */
    #[Deprecated(message: 'use getPlatformVersionWithOs() instead', since: '5.0.2')]
    public function getPlatformVersion(string $value, string | null $code = null): VersionInterface;

    /** @throws void */
    public function getPlatformVersionWithOs(string $value, OsInterface $os): VersionInterface;
}
