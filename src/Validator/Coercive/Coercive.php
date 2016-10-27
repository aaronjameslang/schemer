<?php

namespace Schemer\Validator\Coercive;

use Schemer\Result;

trait Coercive
{
    /**
     * Execute the validation functions.
     * @param $value The value to validate.
     * @return \Schemer\Result The validation result.
     */
    public function validate(string $string) : Result
    {
        $value = $this->coerce($string);
        return
            $value instanceof Result
            ? $value
            : parent::validate($value);
    }
}