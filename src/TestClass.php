<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\Console\Command\Command;

class TestClass extends Command
{
    /**
     * @var string
     *
     * @phpcs:disable SlevomatCodingStandard.TypeHints.PropertyTypeHint
     */
    protected static $defaultName = 'name';

    /**
     * @param int $firstArg
     * @param string $secondArg
     */
    public function somePublicMethod($firstArg, $secondArg): int
    {
        return (int)$secondArg;
    }

    /**
     * @return string[]
     */
    private function somePrivateMethod($argStr, $arg_arr): array
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
