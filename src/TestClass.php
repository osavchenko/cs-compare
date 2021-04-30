<?php

declare(strict_types=1);

namespace App;

class TestClass extends \Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'name';

    public function somePublicMethod(int $firstArg, string $secondArg): int
    {
        return (int) $secondArg;
    }

    private function somePrivate_method($argStr, $arg_arr)
    {
        if ($argStr === 'pending') {
            $a = static function () {
                return 123;
            };
        }

        if (in_array($arg_arr, ['pending', 'done'], true)) {
            // do something
        }


        return [
            'search' => 'search',
            'order' => 'order',
        ];
    }
}
