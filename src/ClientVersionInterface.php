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

interface ClientVersionInterface
{
    /** @throws void */
    public function hasClientVersion(string $value): bool;

    /**
     * @return non-empty-string|null
     *
     * @throws void
     */
    public function getClientVersion(string $value, string | null $code = null): string | null;
}
