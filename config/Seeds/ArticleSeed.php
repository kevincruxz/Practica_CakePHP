<?php
declare(strict_types=1);

use Migrations\BaseSeed;

/**
 * Article seed.
 */
class ArticleSeed extends BaseSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/migrations/4/en/seeding.html
     *
     * @return void
     */
    public function run(): void
    {
        $data = [];

        $table = $this->table('article');
        $table->insert($data)->save();
    }
}
