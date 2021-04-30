<?php
namespace App;

class TestClass extends \Symfony\Component\Console\Command\Command
{
    protected static $defaultName = 'name';

    /**
     *
     */
    private function somePrivate_method($argStr, $arg_arr)
    {
        if ($argStr == 'pending') {
            $a = function() {
                return 123;
            };
        }

        if (in_array($arg_arr, ['pending', 'done'])) {
            // do something
        }


        return [
            'search' => 'search',
            'order' => 'order'
        ];
    }

    /**
     * @param int $firstArg
     * @param string $secondArg
     */
    public function somePublicMethod($firstArg, $secondArg) : int
    {
        return (int)$secondArg;
    }
}
