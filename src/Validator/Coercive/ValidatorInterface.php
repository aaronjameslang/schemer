<?php

namespace Schemer\Validator\Coercive;

interface ValidatorInterface extends \Schemer\Validator\ValidatorInterface
{
    public function coerce(string $string);
}