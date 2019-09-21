<?php

namespace LucasQuinnGuru\SitetronicMisc\Commands;

use Illuminate\Console\Command;

class SeedSectionsCommand extends Command {

    protected $signature = 'lucas-quinn-guru:1-misc-section-seeder';

    protected $description = 'Run this command to seed sections';

    public function __construct() {
        parent::__construct();
    }

    public function handle()
    {

        echo "Seeding...sections" . PHP_EOL;

        \DB::table('sections')->delete();

        \DB::table('sections')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Real Property and Laws Relating to Ownership',
                'slug' => 'real-property-and-laws-relating-to-ownership',
                'active' => 1,
                'created_at' => '2015-08-01 17:28:55',
                'updated_at' => '2015-08-23 13:13:38',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Valuation of Real Estate',
                'slug' => 'valuation-of-real-estate',
                'active' => 1,
                'created_at' => '2015-08-01 17:29:11',
                'updated_at' => '2015-10-17 14:18:11',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Financing of Real Estate',
                'slug' => 'financing-of-real-estate',
                'active' => 1,
                'created_at' => '2015-08-01 17:29:29',
                'updated_at' => '2015-10-26 14:00:30',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Transfer of Property Ownership',
                'slug' => 'transfer-of-property-ownership',
                'active' => 1,
                'created_at' => '2015-08-01 17:29:48',
                'updated_at' => '2015-10-26 22:22:39',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Real Estate Brokerage',
                'slug' => 'real-estate-brokerage',
                'active' => 1,
                'created_at' => '2015-08-01 17:31:28',
                'updated_at' => '2015-10-07 20:15:33',
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'Practice Exam Tests - Bonus',
                'slug' => 'practice-exam-tests-bonus',
                'active' => 1,
                'created_at' => '2015-08-21 10:34:17',
                'updated_at' => '2015-08-24 23:54:28',
            ),
        ));
    }

}
