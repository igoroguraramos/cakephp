<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Igor',
            'email' => 'igoroguraramos@hotmail.com',
            'password' => (new DefaultPasswordHasher)->hash('123')
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
