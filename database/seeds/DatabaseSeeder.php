<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UsersTableSeeder;
use Database\Seeders\CategoriesTableSeeder;
use Database\Seeders\ArticlesTableSeeder;
use Database\Seeders\DiscussionsTableSeeder;
use Database\Seeders\CommentsTableSeeder;
use Database\Seeders\TagsTableSeeder;
use Database\Seeders\TaggablesTableSeeder;
use Database\Seeders\LinksTableSeeder;
use Database\Seeders\VisitorsTableSeeder;
use Database\Seeders\PermissionsTableSeeder;

use Database\Seeders\CollectionsTableSeeder;
use Database\Seeders\FailedJobsTableSeeder;
use Database\Seeders\FollowersTableSeeder;
use Database\Seeders\ModelHasPermissionsTableSeeder;
use Database\Seeders\ModelHasRolesTableSeeder;
use Database\Seeders\NotificationsTableSeeder;
use Database\Seeders\PasswordResetsTableSeeder;
use Database\Seeders\RoleHasPermissionsTableSeeder;
use Database\Seeders\RolesTableSeeder;
use Database\Seeders\VotesTableSeeder;


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
        $this->call(TaggablesTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(VisitorsTableSeeder::class);

        $this->call(CollectionsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FollowersTableSeeder::class);
        $this->call(NotificationsTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(VotesTableSeeder::class);

        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(ModelHasPermissionsTableSeeder::class);
        $this->call(ModelHasRolesTableSeeder::class);
        $this->call(RoleHasPermissionsTableSeeder::class);
    }
}
