<?php

namespace LucasQuinnGuru\SitetronicMisc\Commands;

use Illuminate\Console\Command;

class SeedTopicsCommand extends Command {

    protected $signature = 'lucas-quinn-guru:2-misc-topic-seeder';

    protected $description = 'Run this command to seed topics';

    public function __construct() {
        parent::__construct();
    }

    public function handle()
    {

        echo "Seeding...topics" . PHP_EOL;

        \DB::table('topics')->delete();

        \DB::table('topics')->insert(array (
            0 =>
            array (
                'id' => 1,
                'section_id' => 1,
                'name' => 'Interests in Real Property',
                'slug' => 'interests-in-real-property',
                'active' => 1,
                'created_at' => '2015-08-02 21:17:45',
                'updated_at' => '2015-08-23 13:13:56',
            ),
            1 =>
            array (
                'id' => 2,
                'section_id' => 1,
                'name' => 'Forms of Ownership',
                'slug' => 'forms-of-ownership',
                'active' => 1,
                'created_at' => '2015-08-08 17:25:16',
                'updated_at' => '2015-09-30 22:48:28',
            ),
            2 =>
            array (
                'id' => 3,
                'section_id' => 1,
                'name' => 'Condominiums and Cooperatives',
                'slug' => 'condominiums-and-cooperatives',
                'active' => 1,
                'created_at' => '2015-08-08 17:25:55',
                'updated_at' => '2015-10-03 19:49:48',
            ),
            3 =>
            array (
                'id' => 4,
                'section_id' => 1,
                'name' => 'Encumbrances: Easements, Restrictions and Liens',
                'slug' => 'encumbrances-easements-restrictions-and-liens',
                'active' => 1,
                'created_at' => '2015-08-08 17:26:29',
                'updated_at' => '2015-10-03 19:50:13',
            ),
            4 =>
            array (
                'id' => 5,
                'section_id' => 1,
                'name' => 'Governmental Limitiations: Building Codes, Zoning, and Eminent Domain',
                'slug' => 'governmental-limitiations-building-codes-zoning-and-eminent-domain',
                'active' => 1,
                'created_at' => '2015-08-08 17:27:07',
                'updated_at' => '2015-10-03 19:50:40',
            ),
            5 =>
            array (
                'id' => 6,
                'section_id' => 2,
                'name' => 'Land Description',
                'slug' => 'land-description',
                'active' => 1,
                'created_at' => '2015-08-09 11:08:41',
                'updated_at' => '2015-10-03 19:51:01',
            ),
            6 =>
            array (
                'id' => 7,
                'section_id' => 2,
                'name' => 'Appraisal',
                'slug' => 'appraisal',
                'active' => 1,
                'created_at' => '2015-08-09 11:09:50',
                'updated_at' => '2015-10-15 22:46:54',
            ),
            7 =>
            array (
                'id' => 8,
                'section_id' => 2,
                'name' => 'Taxes and Assessments',
                'slug' => 'taxes-and-assessments',
                'active' => 1,
                'created_at' => '2015-08-09 11:10:25',
                'updated_at' => '2015-10-17 15:30:57',
            ),
            8 =>
            array (
                'id' => 9,
                'section_id' => 3,
                'name' => 'Sources of Financing: Conventional, Governmental, and the Secondary Mortgage Market',
                'slug' => 'sources-of-financing-conventional-governmental-and-the-secondary-mortgage-market',
                'active' => 1,
                'created_at' => '2015-08-09 11:11:26',
                'updated_at' => '2015-10-17 19:26:51',
            ),
            9 =>
            array (
                'id' => 10,
                'section_id' => 3,
                'name' => 'Mortgages and Foreclosures',
                'slug' => 'mortgages-and-foreclosures',
                'active' => 1,
                'created_at' => '2015-08-09 11:12:39',
                'updated_at' => '2015-10-25 21:45:51',
            ),
            10 =>
            array (
                'id' => 11,
                'section_id' => 4,
                'name' => 'Acquisition of Title: Deeds',
                'slug' => 'acquisition-of-title-deeds',
                'active' => 1,
                'created_at' => '2015-08-09 22:07:07',
                'updated_at' => '2015-10-26 22:22:26',
            ),
            11 =>
            array (
                'id' => 12,
                'section_id' => 4,
                'name' => 'Settlement Procedures: Escrow, Evidence of Title, and Recording',
                'slug' => 'settlement-procedures-escrow-evidence-of-title-and-recording',
                'active' => 1,
                'created_at' => '2015-08-09 22:07:35',
                'updated_at' => '2015-11-14 12:17:40',
            ),
            12 =>
            array (
                'id' => 13,
                'section_id' => 4,
                'name' => 'Real Estate Settlement Exercises',
                'slug' => 'real-estate-settlement-exercises',
                'active' => 0,
                'created_at' => '2015-08-09 22:07:55',
                'updated_at' => '2015-08-09 22:07:55',
            ),
            13 =>
            array (
                'id' => 14,
                'section_id' => 5,
                'name' => 'Agency and Business Ethics',
                'slug' => 'agency-and-business-ethics',
                'active' => 0,
                'created_at' => '2015-08-09 22:08:30',
                'updated_at' => '2015-08-09 22:08:30',
            ),
            14 =>
            array (
                'id' => 15,
                'section_id' => 5,
                'name' => 'Listings',
                'slug' => 'listings',
                'active' => 0,
                'created_at' => '2015-08-09 22:08:40',
                'updated_at' => '2015-08-09 22:08:40',
            ),
            15 =>
            array (
                'id' => 16,
                'section_id' => 5,
                'name' => 'Sales Contracts and Options',
                'slug' => 'sales-contracts-and-options',
                'active' => 1,
                'created_at' => '2015-08-09 22:08:52',
                'updated_at' => '2015-10-07 20:14:54',
            ),
            16 =>
            array (
                'id' => 17,
                'section_id' => 5,
                'name' => 'Federal Fair Housing, Truth in Lending, the National Do Not Call Registry, and Environmental Disclosures',
                'slug' => 'federal-fair-housing-truth-in-lending-the-national-do-not-call-registry-and-environmental-disclosures',
                'active' => 0,
                'created_at' => '2015-08-09 22:09:30',
                'updated_at' => '2015-08-09 22:09:30',
            ),
            17 =>
            array (
                'id' => 18,
                'section_id' => 5,
                'name' => 'Property Management, Lease Agreements, and Securitites',
                'slug' => 'property-management-lease-agreements-and-securitites',
                'active' => 0,
                'created_at' => '2015-08-09 22:10:01',
                'updated_at' => '2015-08-09 22:10:01',
            ),
            18 =>
            array (
                'id' => 19,
                'section_id' => 5,
                'name' => 'Real Estate Mathematics',
                'slug' => 'real-estate-mathematics',
                'active' => 0,
                'created_at' => '2015-08-09 22:10:46',
                'updated_at' => '2015-08-09 22:10:46',
            ),
            19 =>
            array (
                'id' => 20,
                'section_id' => 7,
                'name' => 'Review Exam 1 Questions',
                'slug' => 'review-exam-1-questions',
                'active' => 1,
                'created_at' => '2015-08-24 23:49:25',
                'updated_at' => '2015-08-25 12:33:15',
            ),
            20 =>
            array (
                'id' => 21,
                'section_id' => 7,
                'name' => 'Review Exam 2 Questions',
                'slug' => 'review-exam-2-questions',
                'active' => 1,
                'created_at' => '2015-09-08 21:55:32',
                'updated_at' => '2015-09-15 22:27:39',
            ),
            21 =>
            array (
                'id' => 22,
                'section_id' => 7,
                'name' => 'Review Exam 3 Questions',
                'slug' => 'review-exam-3-questions',
                'active' => 1,
                'created_at' => '2015-09-17 18:58:02',
                'updated_at' => '2015-09-22 22:31:54',
            ),
        ));
    }
}
