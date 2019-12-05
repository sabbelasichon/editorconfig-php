<?php

declare(strict_types=1);

namespace Idiosyncratic\EditorConfig\Declaration;

use DomainException;
use function in_array;
use function is_string;
use function sprintf;

final class IndentStyle extends Declaration
{
    public function getName() : string
    {
        return 'indent_style';
    }

    /**
     * @inheritdoc
     */
    public function validateValue($value) : void
    {
        if (is_string($value) === false || in_array($value, ['tab', 'space']) === false) {
            throw new DomainException(sprintf('%s is not a valid value for \'%s\'', $value, $this->getName()));
        }
    }
}
