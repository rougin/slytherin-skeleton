<?php

namespace App;

/**
 * Models Test
 *
 * @runTestsInSeparateProcesses
 *
 * @package App
 * @author  Rougin Royce Gutib <rougingutib@gmail.com>
 */
class ModelsTest extends TestCase
{
    /**
     * Tests App\Models\User model.
     *
     * @return void
     */
    public function testUserModel()
    {
        $expected = 'basilisk';

        $model = new \App\Models\User;

        $model->password = $expected;

        $verified = password_verify($expected, $model->password);

        $this->assertTrue($verified);
    }
}
