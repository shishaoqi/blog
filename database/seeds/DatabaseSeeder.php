<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\ArticlesTableSeeder;
use Database\Seeders\DiscussionsTableSeeder;
use Database\Seeders\CommentsTableSeeder;
use Database\Seeders\TagsTableSeeder;
use Database\Seeders\LinksTableSeeder;
use Database\Seeders\VisitorsTableSeeder;
use Database\Seeders\PermissionsTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(ArticlesTableSeeder::class);
         $this->call(DiscussionsTableSeeder::class);
         $this->call(CommentsTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(LinksTableSeeder::class);
         $this->call(VisitorsTableSeeder::class);
         $this->call(PermissionsTableSeeder::class);
    }
}
