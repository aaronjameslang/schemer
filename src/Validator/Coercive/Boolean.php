<?php
namespace Schemer\Validator\Coercive;

class Boolean extends \Schemer\Validator\Boolean implements ValidatorInterface
{
    use Coercive;

    private $map = [
        'true' => true,
        'false' => false
    ];

    public function coerce(string $string) : bool
    {
        return
            array_key_exists($string, $this->map)
            ? $this->map[$string]
            : null;
    }
}