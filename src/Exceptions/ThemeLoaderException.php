<?php

declare(strict_types=1);

namespace Hexadog\ThemesManager\Exceptions;

final class ThemeLoaderException extends \RuntimeException
{
    /**
     * @return \Hexadog\ThemesManager\Exceptions\ThemeLoaderException
     */
    public static function duplicate(string $name): self
    {
        return new self(sprintf(
            'A theme named "%s" already exists.',
            $name
        ));
    }
}
