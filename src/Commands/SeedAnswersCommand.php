<?php

namespace LucasQuinnGuru\SitetronicExam\Commands;

use Illuminate\Console\Command;

class SeedAnswersCommand extends Command {

    protected $signature = 'lucas-quinn-guru:4-misc-answer-seeder';

    protected $description = 'Run this command to seed answers';

    public function __construct() {
        parent::__construct();
    }

    public function handle()
    {

        echo "Seeding...answers" . PHP_EOL;

        \DB::table('answers')->delete();

        \DB::table('answers')->insert(array (
            0 =>
            array (
                'id' => 1,
                'question_id' => 1,
                'answer' => 'a defeasible fee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 17:50:14',
                'updated_at' => '2015-08-11 17:50:14',
            ),
            1 =>
            array (
                'id' => 2,
                'question_id' => 1,
                'answer' => 'a fee simple absolute',
                'correct' => 1,
                'definition' => 'While a defeasible fee (one subject to a condition) and a live estate can be transferred by deed, they must be clearly specified. An estate for years is transferred (demised) by lease. A fee simple absolute is one that is not qualified.',
                'created_at' => '2015-08-11 19:11:06',
                'updated_at' => '2015-08-11 19:11:06',
            ),
            2 =>
            array (
                'id' => 3,
                'question_id' => 1,
                'answer' => 'an estate for years.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:15:18',
                'updated_at' => '2015-08-11 19:15:18',
            ),
            3 =>
            array (
                'id' => 4,
                'question_id' => 1,
                'answer' => 'a life estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:15:32',
                'updated_at' => '2015-08-11 19:15:32',
            ),
            4 =>
            array (
                'id' => 5,
                'question_id' => 2,
                'answer' => 'deed restrictions.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:26:18',
                'updated_at' => '2015-08-11 19:26:18',
            ),
            5 =>
            array (
                'id' => 6,
                'question_id' => 2,
                'answer' => 'the statute of frauds',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:26:35',
                'updated_at' => '2015-08-11 19:26:35',
            ),
            6 =>
            array (
                'id' => 7,
                'question_id' => 2,
                'answer' => 'the bundle of legal rights.',
                'correct' => 1,
                'definition' => 'Possession, control, enjoyment, exclusion, and disposition are the bundle of legal rights that come with ownership of real property.',
                'created_at' => '2015-08-11 19:27:29',
                'updated_at' => '2015-08-11 19:27:29',
            ),
            7 =>
            array (
                'id' => 8,
                'question_id' => 2,
                'answer' => 'an appurtenance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:27:59',
                'updated_at' => '2015-08-11 19:27:59',
            ),
            8 =>
            array (
                'id' => 9,
                'question_id' => 3,
                'answer' => 'Contingent life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:29:20',
                'updated_at' => '2015-08-11 19:29:20',
            ),
            9 =>
            array (
                'id' => 10,
                'question_id' => 3,
                'answer' => 'Contingent reversion fee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:29:37',
                'updated_at' => '2015-08-11 19:29:37',
            ),
            10 =>
            array (
                'id' => 11,
                'question_id' => 3,
                'answer' => 'Contingent remainder fee',
                'correct' => 1,
            'definition' => 'A reversionary interest under choice (D) is when the property will return to the grantor or the grantor\'s heirs. Here, the property will "remain" away from the grantor and Cynthia will be the fee owner, provided that (contingent upon) Bernice dies leaving no heirs. Remainders are either vested (owned now) or contingent.',
                'created_at' => '2015-08-11 19:31:54',
                'updated_at' => '2015-08-11 19:31:54',
            ),
            11 =>
            array (
                'id' => 12,
                'question_id' => 3,
                'answer' => 'Reversionary interest',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:32:19',
                'updated_at' => '2015-08-11 19:32:19',
            ),
            12 =>
            array (
                'id' => 13,
                'question_id' => 4,
                'answer' => 'Life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:32:55',
                'updated_at' => '2015-08-11 19:32:55',
            ),
            13 =>
            array (
                'id' => 14,
                'question_id' => 4,
                'answer' => 'Remainder',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:33:08',
                'updated_at' => '2015-08-11 19:33:08',
            ),
            14 =>
            array (
                'id' => 15,
                'question_id' => 4,
                'answer' => 'Reversion',
                'correct' => 1,
                'definition' => 'When Jonathon dies, his life estate ends, and the property will revert back to the grantor.  Rights of reentry are found in leases and also in a fee simple subject to a condition subsequent in which the condition is broken or violated.',
                'created_at' => '2015-08-11 19:34:27',
                'updated_at' => '2015-08-11 19:34:27',
            ),
            15 =>
            array (
                'id' => 16,
                'question_id' => 4,
                'answer' => 'Right of reentry',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:34:43',
                'updated_at' => '2015-08-11 19:34:43',
            ),
            16 =>
            array (
                'id' => 17,
                'question_id' => 5,
                'answer' => 'only when it is for the duration of the grantee\'s life.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:36:17',
                'updated_at' => '2015-08-11 19:36:17',
            ),
            17 =>
            array (
                'id' => 18,
                'question_id' => 5,
                'answer' => 'for the duration of the life of someone other than the grantee.',
                'correct' => 1,
                'definition' => 'The measuring life for a life estate can be that of someone other than the grantee--Abe to Ben for the life of Carl.  Thus, upon Carl\'s death, the property will revert back to Abe.  If Ben predeceases Carl, Ben\'s heirs will have an interest in the property until Carl dies.  This is called an estate pur autre vie.',
                'created_at' => '2015-08-11 19:38:58',
                'updated_at' => '2015-08-11 19:38:58',
            ),
            18 =>
            array (
                'id' => 19,
                'question_id' => 5,
                'answer' => 'For a definite term.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:39:17',
                'updated_at' => '2015-08-11 19:39:17',
            ),
            19 =>
            array (
                'id' => 20,
                'question_id' => 5,
                'answer' => 'only to a grantee over the age of majority.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:39:39',
                'updated_at' => '2015-08-11 19:39:39',
            ),
            20 =>
            array (
                'id' => 21,
                'question_id' => 6,
                'answer' => 'a life estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:40:46',
                'updated_at' => '2015-08-11 19:40:46',
            ),
            21 =>
            array (
                'id' => 22,
                'question_id' => 6,
                'answer' => 'a fee simple estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:40:58',
                'updated_at' => '2015-08-11 19:40:58',
            ),
            22 =>
            array (
                'id' => 23,
                'question_id' => 6,
                'answer' => 'an estate for years.',
                'correct' => 1,
                'definition' => 'An estate for years is a leasehold. Next to the fee simple absolute and the defeasible fee, the life estate is the most common freehold estate today.  While it is not an estate of inheritance, it is an estate for an indefinite, or unpredictable, duration.',
                'created_at' => '2015-08-11 19:42:08',
                'updated_at' => '2015-10-26 11:20:09',
            ),
            23 =>
            array (
                'id' => 24,
                'question_id' => 6,
                'answer' => 'a defeasible fee estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:42:32',
                'updated_at' => '2015-08-11 19:42:32',
            ),
            24 =>
            array (
                'id' => 25,
                'question_id' => 7,
                'answer' => 'an estate of inheritance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:43:19',
                'updated_at' => '2015-08-11 19:43:19',
            ),
            25 =>
            array (
                'id' => 26,
                'question_id' => 7,
                'answer' => 'a freehold estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:43:30',
                'updated_at' => '2015-08-11 19:43:30',
            ),
            26 =>
            array (
                'id' => 27,
                'question_id' => 7,
                'answer' => 'a less-than-freehold estate.',
                'correct' => 1,
            'definition' => 'One of the key features of a fee simple is that the property can continue in the same family line through inheritance.  The two most popular forms of freehold estates are fee simple (including absolute and conditional fees) and life estates.',
                'created_at' => '2015-08-11 19:44:43',
                'updated_at' => '2015-08-11 19:44:43',
            ),
            27 =>
            array (
                'id' => 28,
                'question_id' => 7,
                'answer' => 'indefinite as to its duration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:45:10',
                'updated_at' => '2015-08-11 19:45:10',
            ),
            28 =>
            array (
                'id' => 29,
                'question_id' => 8,
                'answer' => 'grantor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:45:40',
                'updated_at' => '2015-08-11 19:45:40',
            ),
            29 =>
            array (
                'id' => 30,
                'question_id' => 8,
                'answer' => 'remainderman.',
                'correct' => 1,
                'definition' => 'After the death of both spouses, the life estate will end and ownership will remain away from the grantor\'s estate. The hospital\'s remainder interest then will ripen into a fee simple absolute estate. Here is another way to remember what a remainder estate is--it is the estate that remains after the existing life estate terminates.',
                'created_at' => '2015-08-11 19:47:12',
                'updated_at' => '2015-09-19 23:49:01',
            ),
            30 =>
            array (
                'id' => 31,
                'question_id' => 8,
                'answer' => 'reversionary party.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:47:39',
                'updated_at' => '2015-08-11 19:47:39',
            ),
            31 =>
            array (
                'id' => 32,
                'question_id' => 8,
                'answer' => 'donor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:48:05',
                'updated_at' => '2015-08-11 19:48:05',
            ),
            32 =>
            array (
                'id' => 33,
                'question_id' => 9,
                'answer' => 'Sell',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:50:59',
                'updated_at' => '2015-08-11 19:50:59',
            ),
            33 =>
            array (
                'id' => 34,
                'question_id' => 9,
                'answer' => 'Mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:51:31',
                'updated_at' => '2015-08-11 19:51:31',
            ),
            34 =>
            array (
                'id' => 35,
                'question_id' => 9,
                'answer' => 'Devise',
                'correct' => 1,
            'definition' => 'A devise is a transfer by will (do not confuse with demise, which is a transfer of lease), but there is no estate left for heirs after the owner of the life estate (life tenant) dies.  Because the buyer, lender, and lessee take their interest with knowledge, subject to the life estate, their interests cease when the life estate ceases.  Lenders rarely lend on a life estate; if they do, they may require a term life insurance policy or an agreement with the remainderman as further security. Incidentally, any buyer of a life estate would then own a "life estate pur autre vie."',
                'created_at' => '2015-08-11 19:53:48',
                'updated_at' => '2015-09-19 23:45:55',
            ),
            35 =>
            array (
                'id' => 36,
                'question_id' => 9,
                'answer' => 'Lease',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:56:27',
                'updated_at' => '2015-08-11 19:56:27',
            ),
            36 =>
            array (
                'id' => 37,
                'question_id' => 10,
                'answer' => 'a fee simple estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:57:47',
                'updated_at' => '2015-08-11 19:57:47',
            ),
            37 =>
            array (
                'id' => 38,
                'question_id' => 10,
                'answer' => 'a leasehold.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:57:59',
                'updated_at' => '2015-08-11 19:57:59',
            ),
            38 =>
            array (
                'id' => 39,
                'question_id' => 10,
                'answer' => 'an easement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 19:58:10',
                'updated_at' => '2015-08-11 19:58:10',
            ),
            39 =>
            array (
                'id' => 40,
                'question_id' => 10,
                'answer' => 'a life estate',
                'correct' => 1,
                'definition' => 'During her life, she has ownership of a life estate. Her children have a remainder interest. Despite having ownership rights in the property, the widow can\'t commit "waste," such as tearing the structure down or converting it into a triplex rental.',
                'created_at' => '2015-08-11 19:59:20',
                'updated_at' => '2015-10-26 11:38:02',
            ),
            40 =>
            array (
                'id' => 41,
                'question_id' => 11,
                'answer' => 'It must be measured by the life of one person only.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:01:06',
                'updated_at' => '2015-08-11 20:01:06',
            ),
            41 =>
            array (
                'id' => 42,
                'question_id' => 11,
                'answer' => 'Because it is based on life, it may not be encumbered by the holder.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:01:29',
                'updated_at' => '2015-08-11 20:01:29',
            ),
            42 =>
            array (
                'id' => 43,
                'question_id' => 11,
                'answer' => 'It may be created by will or deed.',
                'correct' => 1,
            'definition' => 'Life estates are frequently created by will--the husband leaves the home to his wife for life and then to their children. There could be several "life tenants, or the survivor of them." The owner of the fee (grantor of life estate) is responsible for any mortgage principal payments, but the life tenant is responsible for carrying charges, such as interest, taxes, and maintenance.',
                'created_at' => '2015-08-11 20:06:09',
                'updated_at' => '2015-08-26 07:13:29',
            ),
            43 =>
            array (
                'id' => 44,
                'question_id' => 11,
                'answer' => 'It requires that the holder make principal payments on any encumbrances.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:06:44',
                'updated_at' => '2015-08-11 20:06:44',
            ),
            44 =>
            array (
                'id' => 45,
                'question_id' => 12,
                'answer' => 'estate.',
                'correct' => 1,
            'definition' => 'This is the classic definition of estate (Latin for "status"). It ranges from absolute ownership to mere possession.',
                'created_at' => '2015-08-11 20:19:39',
                'updated_at' => '2015-09-19 23:49:53',
            ),
            45 =>
            array (
                'id' => 46,
                'question_id' => 12,
                'answer' => 'dower.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:19:58',
                'updated_at' => '2015-08-11 20:19:58',
            ),
            46 =>
            array (
                'id' => 47,
                'question_id' => 12,
                'answer' => 'curtesy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:20:08',
                'updated_at' => '2015-08-11 20:20:08',
            ),
            47 =>
            array (
                'id' => 48,
                'question_id' => 12,
                'answer' => 'possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 20:20:19',
                'updated_at' => '2015-08-11 20:20:19',
            ),
            48 =>
            array (
                'id' => 49,
                'question_id' => 13,
                'answer' => 'remainder.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 21:55:41',
                'updated_at' => '2015-08-11 21:55:41',
            ),
            49 =>
            array (
                'id' => 50,
                'question_id' => 13,
                'answer' => 'reversion.',
                'correct' => 1,
                'definition' => 'A reversion occurs when the land returns to the grantor or heirs of the grantor. A remainder occurs when the land remains away from the grantor or heirs.',
                'created_at' => '2015-08-11 21:56:44',
                'updated_at' => '2015-09-19 23:51:16',
            ),
            50 =>
            array (
                'id' => 51,
                'question_id' => 13,
                'answer' => 'kickback.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 21:57:00',
                'updated_at' => '2015-08-11 21:57:00',
            ),
            51 =>
            array (
                'id' => 52,
                'question_id' => 13,
                'answer' => 'surrender.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 21:57:11',
                'updated_at' => '2015-08-11 21:57:11',
            ),
            52 =>
            array (
                'id' => 53,
                'question_id' => 14,
                'answer' => 'an estate in equity.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 21:58:07',
                'updated_at' => '2015-08-11 21:58:07',
            ),
            53 =>
            array (
                'id' => 54,
                'question_id' => 14,
                'answer' => 'a defeasible fee.',
                'correct' => 1,
                'definition' => 'This is a freehold estate in fee simple, which can be terminated upon the happening of an event such as marriage. It also is called a determinable fee or qualified fee.',
                'created_at' => '2015-08-11 21:59:22',
                'updated_at' => '2015-10-26 11:41:04',
            ),
            54 =>
            array (
                'id' => 55,
                'question_id' => 14,
                'answer' => 'less than a freehold estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 21:59:57',
                'updated_at' => '2015-08-11 21:59:57',
            ),
            55 =>
            array (
                'id' => 56,
                'question_id' => 14,
                'answer' => 'a life estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:00:11',
                'updated_at' => '2015-08-11 22:00:11',
            ),
            56 =>
            array (
                'id' => 57,
                'question_id' => 15,
                'answer' => 'a life estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:06:59',
                'updated_at' => '2015-08-11 22:06:59',
            ),
            57 =>
            array (
                'id' => 58,
                'question_id' => 15,
                'answer' => 'a leasehold estate',
                'correct' => 1,
                'definition' => 'Leaseholds are less than freehold based on ancient feudal classifications in which only "freemen" had protection of the courts and the serfs had no interest in land, although they had possession under leases.',
                'created_at' => '2015-08-11 22:08:13',
                'updated_at' => '2015-08-11 22:08:13',
            ),
            58 =>
            array (
                'id' => 59,
                'question_id' => 15,
                'answer' => 'an estate on condition subsequent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:08:44',
                'updated_at' => '2015-08-11 22:08:44',
            ),
            59 =>
            array (
                'id' => 60,
                'question_id' => 15,
                'answer' => 'a mortgaged estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:09:00',
                'updated_at' => '2015-08-11 22:09:00',
            ),
            60 =>
            array (
                'id' => 61,
                'question_id' => 16,
                'answer' => 'all property left by the deceased.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:09:51',
                'updated_at' => '2015-08-11 22:09:51',
            ),
            61 =>
            array (
                'id' => 62,
                'question_id' => 16,
                'answer' => 'a bequest of a specific property in a will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:10:07',
                'updated_at' => '2015-08-11 22:10:07',
            ),
            62 =>
            array (
                'id' => 63,
                'question_id' => 16,
                'answer' => 'fee simple ownership of property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:10:21',
                'updated_at' => '2015-08-11 22:10:21',
            ),
            63 =>
            array (
                'id' => 64,
                'question_id' => 16,
                'answer' => 'the nature and degree of an interest in real property.',
                'correct' => 1,
            'definition' => '(A) and (B) could include personal property, and (C) is just one example of an estate.',
                'created_at' => '2015-08-11 22:11:17',
                'updated_at' => '2015-08-11 22:11:17',
            ),
            64 =>
            array (
                'id' => 65,
                'question_id' => 17,
                'answer' => 'The owner will give a general warranty deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:13:56',
                'updated_at' => '2015-08-11 22:13:56',
            ),
            65 =>
            array (
                'id' => 66,
                'question_id' => 17,
                'answer' => 'The owner can furnish title insurance.',
                'correct' => 1,
            'definition' => 'If the owner can give a general warranty deed or can furnish title insurance, you would have a claim for money damages if it turned out the grantor did not have the title as promised.  There is more assurance of recovering money from the title company than from the grantor. For example, perhaps some defect in the title, owing to some off-record risk (such as forgery in the chain of title), prevents clear ownership of title. Title insurance companies only insure the title subject to state exceptions; they cannot correct the actual defects that may be found in the title.',
                'created_at' => '2015-08-11 22:31:50',
                'updated_at' => '2015-09-20 23:14:23',
            ),
            66 =>
            array (
                'id' => 67,
                'question_id' => 17,
                'answer' => 'The deed contains the covenant of seisin.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:33:23',
                'updated_at' => '2015-08-11 22:33:23',
            ),
            67 =>
            array (
                'id' => 68,
                'question_id' => 17,
                'answer' => 'The habendum clause states that a fee estate is what is being conveyed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:33:53',
                'updated_at' => '2015-08-11 22:33:53',
            ),
            68 =>
            array (
                'id' => 69,
                'question_id' => 18,
                'answer' => 'The executor',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:34:36',
                'updated_at' => '2015-08-11 22:34:36',
            ),
            69 =>
            array (
                'id' => 70,
                'question_id' => 18,
                'answer' => 'the testator',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:34:48',
                'updated_at' => '2015-08-11 22:34:48',
            ),
            70 =>
            array (
                'id' => 71,
                'question_id' => 18,
                'answer' => 'the heirs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:34:59',
                'updated_at' => '2015-08-11 22:34:59',
            ),
            71 =>
            array (
                'id' => 72,
                'question_id' => 18,
                'answer' => 'The probate court',
                'correct' => 1,
                'definition' => 'The probate court assigns an administrator to administer the estate of those who die intestate.',
                'created_at' => '2015-08-11 22:35:54',
                'updated_at' => '2015-08-11 22:35:54',
            ),
            72 =>
            array (
                'id' => 73,
                'question_id' => 19,
                'answer' => 'Freely transferable',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:39:39',
                'updated_at' => '2015-08-11 22:39:39',
            ),
            73 =>
            array (
                'id' => 74,
                'question_id' => 19,
                'answer' => 'Freely inheritable',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:39:57',
                'updated_at' => '2015-08-11 22:39:57',
            ),
            74 =>
            array (
                'id' => 75,
                'question_id' => 19,
                'answer' => 'Definite duration',
                'correct' => 1,
            'definition' => 'It is indefinite in time; unless conveyed to another, it will come to an end only in the event the owner dies without having left heirs or a alid will (in which case escheat occurs).',
                'created_at' => '2015-08-11 22:40:59',
                'updated_at' => '2015-08-11 22:40:59',
            ),
            75 =>
            array (
                'id' => 76,
                'question_id' => 19,
                'answer' => 'Unlimited duration',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:44:20',
                'updated_at' => '2015-08-11 22:44:20',
            ),
            76 =>
            array (
                'id' => 77,
                'question_id' => 20,
                'answer' => 'interstate.',
                'correct' => 1,
                'definition' => 'When a person dies without leaving a valid will, he is said to be died intestate.',
                'created_at' => '2015-08-11 22:48:20',
                'updated_at' => '2015-08-11 22:48:20',
            ),
            77 =>
            array (
                'id' => 78,
                'question_id' => 20,
                'answer' => 'in fee simple defeasible.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:48:44',
                'updated_at' => '2015-08-11 22:48:44',
            ),
            78 =>
            array (
                'id' => 79,
                'question_id' => 20,
                'answer' => 'probate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:48:53',
                'updated_at' => '2015-08-11 22:48:53',
            ),
            79 =>
            array (
                'id' => 80,
                'question_id' => 20,
                'answer' => 'via devise.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:49:04',
                'updated_at' => '2015-08-11 22:49:04',
            ),
            80 =>
            array (
                'id' => 81,
                'question_id' => 21,
                'answer' => 'Sell it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:50:18',
                'updated_at' => '2015-08-11 22:50:18',
            ),
            81 =>
            array (
                'id' => 82,
                'question_id' => 21,
                'answer' => 'Subdivide it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:50:29',
                'updated_at' => '2015-08-11 22:50:29',
            ),
            82 =>
            array (
                'id' => 83,
                'question_id' => 21,
                'answer' => 'Use it contrary to zoning regulations',
                'correct' => 1,
            'definition' => 'All but (C) are within the "bundle of rights." The woman has a fee simple estate. She may not violate the governmental limitations.',
                'created_at' => '2015-08-11 22:51:27',
                'updated_at' => '2015-08-11 22:51:27',
            ),
            83 =>
            array (
                'id' => 84,
                'question_id' => 21,
                'answer' => 'Will it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:53:57',
                'updated_at' => '2015-08-11 22:53:57',
            ),
            84 =>
            array (
                'id' => 85,
                'question_id' => 22,
                'answer' => 'Life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:54:41',
                'updated_at' => '2015-08-11 22:54:41',
            ),
            85 =>
            array (
                'id' => 86,
                'question_id' => 22,
                'answer' => 'Fee simple determinable',
                'correct' => 1,
                'definition' => 'This is an example of a fee simple determinable estate. The farmer sold a portion of his farm to the railroad company with the condition, as long as it remains a rail line. In the event of abandonment, the rail line property would revert back to the farmer or the farmer\'s heirs.',
                'created_at' => '2015-08-11 22:56:11',
                'updated_at' => '2015-08-11 22:56:11',
            ),
            86 =>
            array (
                'id' => 87,
                'question_id' => 22,
                'answer' => 'Tenancy at will',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:56:33',
                'updated_at' => '2015-08-11 22:56:33',
            ),
            87 =>
            array (
                'id' => 88,
                'question_id' => 22,
                'answer' => 'Tenancy at sufferance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 22:56:48',
                'updated_at' => '2015-08-11 22:56:48',
            ),
            88 =>
            array (
                'id' => 89,
                'question_id' => 23,
                'answer' => 'an estate at sufferance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:00:16',
                'updated_at' => '2015-08-11 23:00:16',
            ),
            89 =>
            array (
                'id' => 90,
                'question_id' => 23,
                'answer' => 'an estate at will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:00:28',
                'updated_at' => '2015-08-11 23:00:28',
            ),
            90 =>
            array (
                'id' => 91,
                'question_id' => 23,
                'answer' => 'a life estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:00:40',
                'updated_at' => '2015-08-11 23:00:40',
            ),
            91 =>
            array (
                'id' => 92,
                'question_id' => 23,
                'answer' => 'a fee simple estate.',
                'correct' => 1,
                'definition' => 'The largest bundle of rights attaches to a fee simple estate.',
                'created_at' => '2015-08-11 23:01:13',
                'updated_at' => '2015-08-11 23:01:13',
            ),
            92 =>
            array (
                'id' => 93,
                'question_id' => 24,
                'answer' => 'Life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:01:46',
                'updated_at' => '2015-08-11 23:01:46',
            ),
            93 =>
            array (
                'id' => 94,
                'question_id' => 24,
                'answer' => 'Defeasible fee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:02:10',
                'updated_at' => '2015-08-11 23:02:10',
            ),
            94 =>
            array (
                'id' => 95,
                'question_id' => 24,
                'answer' => 'unrecorded vendor\'s deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-11 23:02:25',
                'updated_at' => '2015-08-11 23:02:25',
            ),
            95 =>
            array (
                'id' => 96,
                'question_id' => 24,
                'answer' => 'Estate for years',
                'correct' => 1,
            'definition' => 'An estate for years is the only "less-than-freehold" estate listed here. An unrecorded vendor\'s (seller) deed would transfer a freehold estate, provided the grantor owned one and there was a valid delivery (recording is advised but not required).',
                'created_at' => '2015-08-11 23:03:53',
                'updated_at' => '2015-08-11 23:03:53',
            ),
            96 =>
            array (
                'id' => 97,
                'question_id' => 25,
                'answer' => 'Grant title using an assumed name',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-20 22:41:26',
                'updated_at' => '2015-08-20 22:41:26',
            ),
            97 =>
            array (
                'id' => 98,
                'question_id' => 25,
                'answer' => 'Receive title upon the death of the life tenant',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-20 22:41:54',
                'updated_at' => '2015-08-20 22:41:54',
            ),
            98 =>
            array (
                'id' => 99,
                'question_id' => 25,
                'answer' => 'Take back fee title at any time',
                'correct' => 1,
                'definition' => 'Grantors should grant title using the same name in which they acquired title.  If they don\'t, this may cause title search problems. however, all that is required for a valid transfer is delivery, and that involves the intention of the grantor to relinquish all control to the grantee. A life estate can be for the life of more than one person.',
                'created_at' => '2015-08-20 22:44:36',
                'updated_at' => '2015-08-20 22:44:36',
            ),
            99 =>
            array (
                'id' => 100,
                'question_id' => 25,
                'answer' => 'Create a life estate for the life of more than one person',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-20 22:45:13',
                'updated_at' => '2015-08-20 22:45:13',
            ),
            100 =>
            array (
                'id' => 101,
                'question_id' => 26,
                'answer' => 'City attorney',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:04:24',
                'updated_at' => '2015-08-21 23:04:24',
            ),
            101 =>
            array (
                'id' => 102,
                'question_id' => 26,
                'answer' => 'Planning department',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:04:53',
                'updated_at' => '2015-08-21 23:04:53',
            ),
            102 =>
            array (
                'id' => 103,
                'question_id' => 26,
                'answer' => 'Licensed surveyor',
                'correct' => 1,
                'definition' => 'While public records may contain maps of the proper boundaries, these records do not usually reveal any encroachments, such as a fence two feet over a line.  The licensee should retain a surveyor to verify the boundaries and reveal any encroachments.',
                'created_at' => '2015-08-21 23:06:29',
                'updated_at' => '2015-08-21 23:06:29',
            ),
            103 =>
            array (
                'id' => 104,
                'question_id' => 26,
                'answer' => 'Tax offic records',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:06:53',
                'updated_at' => '2015-08-21 23:06:53',
            ),
            104 =>
            array (
                'id' => 105,
                'question_id' => 28,
                'answer' => 'household furnishings',
                'correct' => 1,
            'definition' => 'Wall-to-wall carpeting, a built-in dishwasher and a garbage disposal are generally treated as being fixtures (chattels real), and thus title passes with the land on its sale. Unless the contract of sale provides otherwise, the seller can remove personal property prior to closing.',
                'created_at' => '2015-08-21 23:13:47',
                'updated_at' => '2015-09-20 23:15:16',
            ),
            105 =>
            array (
                'id' => 106,
                'question_id' => 28,
                'answer' => 'wall-to-wall carpeting',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:14:12',
                'updated_at' => '2015-08-21 23:14:12',
            ),
            106 =>
            array (
                'id' => 107,
                'question_id' => 28,
                'answer' => 'a built-in dishwasher.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:14:41',
                'updated_at' => '2015-08-21 23:14:41',
            ),
            107 =>
            array (
                'id' => 108,
                'question_id' => 28,
                'answer' => 'a garbage disposal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:15:11',
                'updated_at' => '2015-08-21 23:15:11',
            ),
            108 =>
            array (
                'id' => 109,
                'question_id' => 27,
                'answer' => 'Violation of a covenant',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:18:56',
                'updated_at' => '2015-08-21 23:18:56',
            ),
            109 =>
            array (
                'id' => 110,
                'question_id' => 27,
                'answer' => 'Violation of a condition subsequent',
                'correct' => 1,
                'definition' => 'This is a condition subsequent. The owner sold the parcel of real estate to the buyer with the stipulation that the buyer was not allowed to sell alcohol from the premises. Ten years later, when it was sold to a buyer who converted the building into a convenient store that sold beer, the original condition that "ran with the property" was violated. Therefore, the owner or owners heirs have the right of re-entry.',
                'created_at' => '2015-08-21 23:21:51',
                'updated_at' => '2015-08-21 23:23:09',
            ),
            110 =>
            array (
                'id' => 111,
                'question_id' => 27,
                'answer' => 'Violation of a condition precedent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:22:38',
                'updated_at' => '2015-08-21 23:22:38',
            ),
            111 =>
            array (
                'id' => 112,
                'question_id' => 27,
                'answer' => 'Violation of the statue of frauds',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-21 23:25:07',
                'updated_at' => '2015-08-21 23:25:07',
            ),
            112 =>
            array (
                'id' => 113,
                'question_id' => 29,
                'answer' => 'Gas and Mineral rights',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:06:48',
                'updated_at' => '2015-08-22 14:06:48',
            ),
            113 =>
            array (
                'id' => 114,
                'question_id' => 29,
                'answer' => 'Water rights',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:07:01',
                'updated_at' => '2015-08-22 14:07:01',
            ),
            114 =>
            array (
                'id' => 115,
                'question_id' => 29,
                'answer' => 'A beneficiary\'s rights under a real property trust',
                'correct' => 1,
                'definition' => 'The beneficiary does not own the real property, only an interest in the trust. All contracts involving the sale or transfer of property should be executed by the trustee, not the beneficiary only.',
                'created_at' => '2015-08-22 14:08:11',
                'updated_at' => '2015-08-22 14:08:11',
            ),
            115 =>
            array (
                'id' => 116,
                'question_id' => 29,
                'answer' => 'Trees on a farm',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:09:42',
                'updated_at' => '2015-08-22 14:09:42',
            ),
            116 =>
            array (
                'id' => 117,
                'question_id' => 30,
                'answer' => 'Land and the air above it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:10:47',
                'updated_at' => '2015-08-22 14:10:47',
            ),
            117 =>
            array (
                'id' => 118,
                'question_id' => 30,
                'answer' => 'Land, the area below and above the surface to infinity, and all the improvements thereon',
                'correct' => 1,
                'definition' => 'Real property includes rights in the land, air rights, subsurface rights, and improvement.',
                'created_at' => '2015-08-22 14:11:36',
                'updated_at' => '2015-08-22 14:11:36',
            ),
            118 =>
            array (
                'id' => 119,
                'question_id' => 30,
                'answer' => 'The land, buildings thereon, and anything permanently affixed to the land and/or buildings',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:12:10',
                'updated_at' => '2015-08-22 14:12:10',
            ),
            119 =>
            array (
                'id' => 120,
                'question_id' => 30,
                'answer' => 'Land and the mineral rights in the land',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:12:31',
                'updated_at' => '2015-08-22 14:12:31',
            ),
            120 =>
            array (
                'id' => 121,
                'question_id' => 31,
                'answer' => 'realty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:19:08',
                'updated_at' => '2015-08-22 14:19:08',
            ),
            121 =>
            array (
                'id' => 122,
                'question_id' => 31,
                'answer' => 'devices.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:19:23',
                'updated_at' => '2015-08-22 14:19:23',
            ),
            122 =>
            array (
                'id' => 123,
                'question_id' => 31,
                'answer' => 'personalty.',
                'correct' => 1,
                'definition' => 'Realty, devices, and apputenances involve real property. Personalty is another word for chettel or personal property.',
                'created_at' => '2015-08-22 14:20:34',
                'updated_at' => '2015-08-22 14:20:34',
            ),
            123 =>
            array (
                'id' => 124,
                'question_id' => 31,
                'answer' => 'appurtenances.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:20:54',
                'updated_at' => '2015-08-22 14:20:54',
            ),
            124 =>
            array (
                'id' => 125,
                'question_id' => 32,
                'answer' => 'a bill of sale.',
                'correct' => 1,
                'definition' => 'A bill of sale is especially useful to investors for purposes of allocating values to personal property that can depreciate at faster rates than real property for income tax purposes.',
                'created_at' => '2015-08-22 14:23:01',
                'updated_at' => '2015-08-22 14:23:01',
            ),
            125 =>
            array (
                'id' => 126,
                'question_id' => 32,
                'answer' => 'an estoppel certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:23:35',
                'updated_at' => '2015-08-22 14:23:35',
            ),
            126 =>
            array (
                'id' => 127,
                'question_id' => 32,
                'answer' => 'a chettel mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:23:50',
                'updated_at' => '2015-08-22 14:23:50',
            ),
            127 =>
            array (
                'id' => 128,
                'question_id' => 32,
                'answer' => 'a satisfaction piece.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:24:16',
                'updated_at' => '2015-08-22 14:24:16',
            ),
            128 =>
            array (
                'id' => 129,
                'question_id' => 33,
                'answer' => 'A barn',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:24:59',
                'updated_at' => '2015-08-22 14:24:59',
            ),
            129 =>
            array (
                'id' => 130,
                'question_id' => 33,
                'answer' => 'An orchard',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:25:14',
                'updated_at' => '2015-08-22 14:25:14',
            ),
            130 =>
            array (
                'id' => 131,
                'question_id' => 33,
                'answer' => 'A fence',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-22 14:25:27',
                'updated_at' => '2015-08-22 14:25:27',
            ),
            131 =>
            array (
                'id' => 132,
                'question_id' => 33,
                'answer' => 'A trade fixture',
                'correct' => 1,
                'definition' => 'A trade fixture, such as a merchant\'s display case, does not become a part of the landlord\'s property during the term of the lease.  Trade fixtures are removable by the tenant.',
                'created_at' => '2015-08-22 14:26:31',
                'updated_at' => '2015-08-22 14:26:31',
            ),
            132 =>
            array (
                'id' => 133,
                'question_id' => 34,
                'answer' => 'the method of its attachment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:15:06',
                'updated_at' => '2015-08-23 13:15:06',
            ),
            133 =>
            array (
                'id' => 134,
                'question_id' => 34,
                'answer' => 'its size.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:15:25',
                'updated_at' => '2015-08-23 13:15:25',
            ),
            134 =>
            array (
                'id' => 135,
                'question_id' => 34,
                'answer' => 'its weight.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:15:42',
                'updated_at' => '2015-08-23 13:15:42',
            ),
            135 =>
            array (
                'id' => 136,
                'question_id' => 34,
                'answer' => 'the intention of the party who attached it.',
                'correct' => 1,
                'definition' => 'While the method of its attachment and its size and weight are factors, most courts emphasize the intention test, particularly as noted in the listing and sales contracts.',
                'created_at' => '2015-08-23 13:17:21',
                'updated_at' => '2015-10-26 09:57:54',
            ),
            136 =>
            array (
                'id' => 137,
                'question_id' => 35,
                'answer' => 'The seller\'s signature',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:18:22',
                'updated_at' => '2015-08-23 13:18:22',
            ),
            137 =>
            array (
                'id' => 138,
                'question_id' => 35,
                'answer' => 'A description of the items',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:18:42',
                'updated_at' => '2015-08-23 13:18:42',
            ),
            138 =>
            array (
                'id' => 139,
                'question_id' => 35,
                'answer' => 'The date of the transaction',
                'correct' => 1,
                'definition' => 'While the date is frequently given, it is not as essential as the other items. Nevertheless, anyone preparing a bill of sale should insert a date.',
                'created_at' => '2015-08-23 13:19:38',
                'updated_at' => '2015-08-23 13:20:19',
            ),
            139 =>
            array (
                'id' => 140,
                'question_id' => 35,
                'answer' => 'The buyer\'s name',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:19:56',
                'updated_at' => '2015-08-23 13:19:56',
            ),
            140 =>
            array (
                'id' => 141,
                'question_id' => 36,
                'answer' => 'Chattel',
                'correct' => 1,
                'definition' => 'Chattel is another term for persoanl property. A synonym is personalty.',
                'created_at' => '2015-08-23 13:23:29',
                'updated_at' => '2015-08-23 13:23:29',
            ),
            141 =>
            array (
                'id' => 142,
                'question_id' => 36,
                'answer' => 'Appurtenance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:23:47',
                'updated_at' => '2015-08-23 13:23:47',
            ),
            142 =>
            array (
                'id' => 143,
                'question_id' => 36,
                'answer' => 'Fixture',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:24:00',
                'updated_at' => '2015-08-23 13:24:00',
            ),
            143 =>
            array (
                'id' => 144,
                'question_id' => 36,
                'answer' => 'Improvement',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:24:13',
                'updated_at' => '2015-08-23 13:24:13',
            ),
            144 =>
            array (
                'id' => 145,
                'question_id' => 37,
                'answer' => 'a hillside.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:24:55',
                'updated_at' => '2015-08-23 13:24:55',
            ),
            145 =>
            array (
                'id' => 146,
                'question_id' => 37,
                'answer' => 'the seashore.',
                'correct' => 1,
                'definition' => 'Littoral property borders on the ocean or sea. Riparian property is located on a watercourse or over an underground nonnavigable stream.',
                'created_at' => '2015-08-23 13:26:09',
                'updated_at' => '2015-08-23 13:26:09',
            ),
            146 =>
            array (
                'id' => 147,
                'question_id' => 37,
                'answer' => 'the boundary line.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:26:26',
                'updated_at' => '2015-08-23 13:26:26',
            ),
            147 =>
            array (
                'id' => 148,
                'question_id' => 37,
                'answer' => 'a stream.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:26:40',
                'updated_at' => '2015-08-23 13:26:40',
            ),
            148 =>
            array (
                'id' => 149,
                'question_id' => 38,
                'answer' => 'fences, wells, dains, and roadways.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:28:28',
                'updated_at' => '2015-08-23 13:28:28',
            ),
            149 =>
            array (
                'id' => 150,
                'question_id' => 38,
                'answer' => 'additions to the original structure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:28:47',
                'updated_at' => '2015-08-23 13:28:47',
            ),
            150 =>
            array (
                'id' => 151,
                'question_id' => 38,
                'answer' => 'everything artificial or constructed except the land.',
                'correct' => 1,
                'definition' => 'Everything artificial or constructed except the land is the most comprehensive.',
                'created_at' => '2015-08-23 13:31:02',
                'updated_at' => '2015-08-23 13:31:02',
            ),
            151 =>
            array (
                'id' => 152,
                'question_id' => 38,
                'answer' => 'upgrades to the interior.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:31:26',
                'updated_at' => '2015-08-23 13:31:26',
            ),
            152 =>
            array (
                'id' => 153,
                'question_id' => 39,
                'answer' => 'corporeal ownership.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:32:54',
                'updated_at' => '2015-08-23 13:32:54',
            ),
            153 =>
            array (
                'id' => 154,
                'question_id' => 39,
                'answer' => 'incorporeal ownership.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:33:14',
                'updated_at' => '2015-10-26 11:37:31',
            ),
            154 =>
            array (
                'id' => 155,
                'question_id' => 39,
                'answer' => 'bundle of rights.',
                'correct' => 1,
                'definition' => 'Real property is a collection of all of one\'s rights in a certain parcel.',
                'created_at' => '2015-08-23 13:33:54',
                'updated_at' => '2015-08-23 13:33:54',
            ),
            155 =>
            array (
                'id' => 156,
                'question_id' => 39,
                'answer' => 'survivorship.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:34:07',
                'updated_at' => '2015-08-23 13:34:07',
            ),
            156 =>
            array (
                'id' => 157,
                'question_id' => 40,
                'answer' => 'an easement',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:37:04',
                'updated_at' => '2015-08-23 13:37:04',
            ),
            157 =>
            array (
                'id' => 158,
                'question_id' => 40,
                'answer' => 'dedication',
                'correct' => 1,
                'definition' => 'A dedication is, in effect, a grant to the public, which may be either a fee simple or an easement. Condemnation is the government\'s taking private property for a public use with just compensation.',
                'created_at' => '2015-08-23 13:38:03',
                'updated_at' => '2015-09-20 23:16:26',
            ),
            158 =>
            array (
                'id' => 159,
                'question_id' => 40,
                'answer' => 'a public grant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:38:17',
                'updated_at' => '2015-08-23 13:38:33',
            ),
            159 =>
            array (
                'id' => 160,
                'question_id' => 40,
                'answer' => 'condemnation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:40:40',
                'updated_at' => '2015-08-23 13:40:40',
            ),
            160 =>
            array (
                'id' => 161,
                'question_id' => 41,
                'answer' => 'water department records of the county recorder.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:42:21',
                'updated_at' => '2015-08-23 13:42:21',
            ),
            161 =>
            array (
                'id' => 162,
                'question_id' => 41,
                'answer' => 'title policy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:43:09',
                'updated_at' => '2015-08-23 13:43:09',
            ),
            162 =>
            array (
                'id' => 163,
                'question_id' => 41,
                'answer' => 'grant deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:43:21',
                'updated_at' => '2015-08-23 13:43:21',
            ),
            163 =>
            array (
                'id' => 164,
                'question_id' => 41,
                'answer' => 'appropriate state law.',
                'correct' => 1,
                'definition' => 'Riparian rights are those rights an owner has to the adjoining nonnavigable water, such as rights to swim, boat or irrigate. These rights are created by operation of state law. If in doubt, an owner should check with a local real estate attorney.',
                'created_at' => '2015-08-23 13:44:51',
                'updated_at' => '2015-08-23 13:44:51',
            ),
            164 =>
            array (
                'id' => 165,
                'question_id' => 42,
                'answer' => 'accretion.',
                'correct' => 1,
            'definition' => 'Accretion is the gradual addition of soil (alluvion) to the shoreline (littoral accretion) or to the land bordering a stream (riparian accretion), which then becomes the property of the shoreline owner or the stream side owner. Avulsion is the tearing away of land caused by a sudden natural occurrence, but the original property line stays intact.',
                'created_at' => '2015-08-23 13:48:46',
                'updated_at' => '2015-09-20 23:18:51',
            ),
            165 =>
            array (
                'id' => 166,
                'question_id' => 42,
                'answer' => 'avulsion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:49:09',
                'updated_at' => '2015-08-23 13:49:09',
            ),
            166 =>
            array (
                'id' => 167,
                'question_id' => 42,
                'answer' => 'encroachments.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:49:22',
                'updated_at' => '2015-08-23 13:49:22',
            ),
            167 =>
            array (
                'id' => 168,
                'question_id' => 42,
                'answer' => 'construction of a fence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:49:37',
                'updated_at' => '2015-08-23 13:49:37',
            ),
            168 =>
            array (
                'id' => 169,
                'question_id' => 43,
                'answer' => 'municipal property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:51:47',
                'updated_at' => '2015-08-23 13:51:47',
            ),
            169 =>
            array (
                'id' => 170,
                'question_id' => 43,
                'answer' => 'a waterway.',
                'correct' => 1,
                'definition' => 'A littoral owner has land that bounds on the ocean. If the land borders on a navigable waterway, then there are no riparian rights, because the government would have control over this property.',
                'created_at' => '2015-08-23 13:52:58',
                'updated_at' => '2015-08-23 13:52:58',
            ),
            170 =>
            array (
                'id' => 171,
                'question_id' => 43,
                'answer' => 'a national forest.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:53:21',
                'updated_at' => '2015-08-23 13:53:21',
            ),
            171 =>
            array (
                'id' => 172,
                'question_id' => 43,
                'answer' => 'unsurveyed public lands.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 13:53:44',
                'updated_at' => '2015-08-23 13:53:44',
            ),
            172 =>
            array (
                'id' => 173,
                'question_id' => 44,
                'answer' => 'the surface of the earth.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:29:55',
                'updated_at' => '2015-08-23 19:29:55',
            ),
            173 =>
            array (
                'id' => 174,
                'question_id' => 44,
                'answer' => 'the air above the surface.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:30:11',
                'updated_at' => '2015-08-23 19:30:11',
            ),
            174 =>
            array (
                'id' => 175,
                'question_id' => 44,
                'answer' => 'personal property.',
                'correct' => 1,
                'definition' => 'This is a vertical concept of ownership, which includes subsurface and air rights, as opposed to horizontal ownership, such as is found in condominiums.',
                'created_at' => '2015-08-23 19:31:34',
                'updated_at' => '2015-08-23 19:31:34',
            ),
            175 =>
            array (
                'id' => 176,
                'question_id' => 44,
                'answer' => 'the subsurface.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:32:01',
                'updated_at' => '2015-08-23 19:32:01',
            ),
            176 =>
            array (
                'id' => 177,
                'question_id' => 45,
                'answer' => 'an owner living in a townhouse subdivision.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:34:05',
                'updated_at' => '2015-09-22 23:06:00',
            ),
            177 =>
            array (
                'id' => 178,
                'question_id' => 45,
                'answer' => 'an owner living in a waterway.',
                'correct' => 1,
                'definition' => 'Such riparian owner would be the beneficiary of any increased land due to accretion and could take some of the water for personal use.',
                'created_at' => '2015-08-23 19:35:36',
                'updated_at' => '2015-08-23 19:35:36',
            ),
            178 =>
            array (
                'id' => 179,
                'question_id' => 45,
                'answer' => 'an owner entitled to ripened fruit from crops.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:36:00',
                'updated_at' => '2015-08-23 19:36:00',
            ),
            179 =>
            array (
                'id' => 180,
                'question_id' => 45,
                'answer' => 'owners of land granting easements for city water pipes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:36:25',
                'updated_at' => '2015-08-23 19:36:25',
            ),
            180 =>
            array (
                'id' => 181,
                'question_id' => 46,
                'answer' => 'adverse possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:37:24',
                'updated_at' => '2015-08-23 19:37:24',
            ),
            181 =>
            array (
                'id' => 182,
                'question_id' => 46,
                'answer' => 'breach.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:37:39',
                'updated_at' => '2015-08-23 19:37:39',
            ),
            182 =>
            array (
                'id' => 183,
                'question_id' => 46,
                'answer' => 'avulsion.',
                'correct' => 1,
                'definition' => 'The key word here is "suddenly"; no change in ownership results.',
                'created_at' => '2015-08-23 19:38:28',
                'updated_at' => '2015-08-23 19:38:28',
            ),
            183 =>
            array (
                'id' => 184,
                'question_id' => 46,
                'answer' => 'accretion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:39:11',
                'updated_at' => '2015-08-23 19:39:11',
            ),
            184 =>
            array (
                'id' => 185,
                'question_id' => 47,
                'answer' => 'specifically reserve the mineral rights therein, or they will automatically pass to the buyer.',
                'correct' => 1,
                'definition' => 'Mineral rights and air rights are typically part of the real estate being sold and, unless reserved to the grantor, will automatically pass to the grantee. However, some states, and sometimes a previous grantor, already may have reserved the mineral rights before the owner obtains title. Therefore, it is important to check state law and the status of the owner\'s title before taking title.',
                'created_at' => '2015-08-23 19:43:18',
                'updated_at' => '2015-10-26 11:42:55',
            ),
            185 =>
            array (
                'id' => 186,
                'question_id' => 47,
                'answer' => 'specifically describe the air rights in the deed for the buyer to gain title thereto.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:43:55',
                'updated_at' => '2015-08-23 19:43:55',
            ),
            186 =>
            array (
                'id' => 187,
                'question_id' => 47,
                'answer' => 'sign a quitclaim deed to release air rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:44:17',
                'updated_at' => '2015-08-23 19:44:17',
            ),
            187 =>
            array (
                'id' => 188,
                'question_id' => 47,
                'answer' => 'release any riparian rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:44:32',
                'updated_at' => '2015-08-23 19:44:32',
            ),
            188 =>
            array (
                'id' => 189,
                'question_id' => 48,
                'answer' => 'interstate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:46:48',
                'updated_at' => '2015-08-23 19:46:48',
            ),
            189 =>
            array (
                'id' => 190,
                'question_id' => 48,
                'answer' => 'probate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 19:47:53',
                'updated_at' => '2015-08-23 19:47:53',
            ),
            190 =>
            array (
                'id' => 191,
                'question_id' => 48,
                'answer' => 'a divisee.',
                'correct' => 1,
                'definition' => 'When a gift of real property is made by will, the recipient of that gift is called the divisee.',
                'created_at' => '2015-08-23 19:48:07',
                'updated_at' => '2015-08-23 19:56:27',
            ),
            191 =>
            array (
                'id' => 192,
                'question_id' => 49,
                'answer' => 'erosion.',
                'correct' => 1,
                'definition' => 'Erosion will result in a loss of one\'s property. Curtilage describes the enclosed space of ground and buildings immediately surrounding a dwelling-house, such as a courtyard or fenced-in area. ',
                'created_at' => '2015-08-23 20:00:32',
                'updated_at' => '2015-08-23 20:00:32',
            ),
            192 =>
            array (
                'id' => 193,
                'question_id' => 49,
                'answer' => 'escheat.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:00:52',
                'updated_at' => '2015-08-23 20:00:52',
            ),
            193 =>
            array (
                'id' => 194,
                'question_id' => 49,
                'answer' => 'curtilage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:01:06',
                'updated_at' => '2015-08-23 20:01:06',
            ),
            194 =>
            array (
                'id' => 195,
                'question_id' => 49,
                'answer' => 'obsolescence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:01:20',
                'updated_at' => '2015-08-23 20:01:20',
            ),
            195 =>
            array (
                'id' => 196,
                'question_id' => 50,
                'answer' => 'A new access road',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:05:03',
                'updated_at' => '2015-08-23 20:05:03',
            ),
            196 =>
            array (
                'id' => 197,
                'question_id' => 50,
                'answer' => 'Utilities',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:05:16',
                'updated_at' => '2015-08-23 20:05:16',
            ),
            197 =>
            array (
                'id' => 198,
                'question_id' => 50,
                'answer' => 'A new house',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:05:26',
                'updated_at' => '2015-08-23 20:05:26',
            ),
            198 =>
            array (
                'id' => 199,
                'question_id' => 50,
                'answer' => 'Planted crops',
                'correct' => 1,
                'definition' => 'Improvements refer to human-made constructed additions or developments, such as roads, buildings, or fences, which are usually part of the real estate. Planted crops are usually personal property, technically called fructus industriales.',
                'created_at' => '2015-08-23 20:06:48',
                'updated_at' => '2015-10-26 11:37:00',
            ),
            199 =>
            array (
                'id' => 200,
                'question_id' => 51,
                'answer' => 'Water rights',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:10:47',
                'updated_at' => '2015-08-23 20:10:47',
            ),
            200 =>
            array (
                'id' => 201,
                'question_id' => 51,
                'answer' => 'Appurtenances',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:11:11',
                'updated_at' => '2015-08-23 20:11:11',
            ),
            201 =>
            array (
                'id' => 202,
                'question_id' => 51,
                'answer' => 'Air space rights',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:11:31',
                'updated_at' => '2015-08-23 20:11:31',
            ),
            202 =>
            array (
                'id' => 203,
                'question_id' => 51,
                'answer' => 'Furniture',
                'correct' => 1,
                'definition' => 'Furniture is personalty unless it is a built-in fixture.',
                'created_at' => '2015-08-23 20:12:20',
                'updated_at' => '2015-08-23 20:12:20',
            ),
            203 =>
            array (
                'id' => 204,
                'question_id' => 52,
                'answer' => 'specifically granted for a specified source of water.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:14:59',
                'updated_at' => '2015-08-23 20:14:59',
            ),
            204 =>
            array (
                'id' => 205,
                'question_id' => 52,
                'answer' => 'found in the records of the county recorder\'s office',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:15:36',
                'updated_at' => '2015-08-23 20:15:36',
            ),
            205 =>
            array (
                'id' => 206,
                'question_id' => 52,
                'answer' => 'an owner has from a natural watercourse abutting or crossing the land.',
                'correct' => 1,
                'definition' => 'These riparian rights arise by operation of law and attach to property bordering on a nonnavigable stream',
                'created_at' => '2015-08-23 20:20:26',
                'updated_at' => '2015-08-23 20:20:26',
            ),
            206 =>
            array (
                'id' => 207,
                'question_id' => 52,
                'answer' => 'obtained by the purchase of fixtures',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 20:21:06',
                'updated_at' => '2015-08-23 20:21:06',
            ),
            207 =>
            array (
                'id' => 208,
                'question_id' => 53,
                'answer' => 'an emblement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 22:02:35',
                'updated_at' => '2015-08-23 22:02:35',
            ),
            208 =>
            array (
                'id' => 209,
                'question_id' => 53,
                'answer' => 'an appurtenance.',
                'correct' => 1,
                'definition' => 'Appurtenances are rights in land that pass to the new owner. Emblements are annual crops produced by cultivation and are treated as personal property.',
                'created_at' => '2015-08-23 22:04:55',
                'updated_at' => '2015-08-23 22:04:55',
            ),
            209 =>
            array (
                'id' => 210,
                'question_id' => 53,
                'answer' => 'a restriction.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 22:05:13',
                'updated_at' => '2015-08-23 22:05:13',
            ),
            210 =>
            array (
                'id' => 211,
                'question_id' => 53,
                'answer' => 'an encroachment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-23 22:05:27',
                'updated_at' => '2015-08-23 22:05:27',
            ),
            211 =>
            array (
                'id' => 212,
                'question_id' => 48,
                'answer' => 'chattel.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 16:30:56',
                'updated_at' => '2015-08-24 16:30:56',
            ),
            212 =>
            array (
                'id' => 213,
                'question_id' => 54,
                'answer' => 'the money charged by a broker for services rendered.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:10:31',
                'updated_at' => '2015-08-24 21:10:31',
            ),
            213 =>
            array (
                'id' => 214,
                'question_id' => 54,
                'answer' => 'an estate of inheritance.',
                'correct' => 1,
                'definition' => 'Fee refers to a fee simple, which is a freehold estate of inheritance. A broker typically earns a "commission."',
                'created_at' => '2015-08-24 21:11:21',
                'updated_at' => '2015-08-24 21:11:21',
            ),
            214 =>
            array (
                'id' => 215,
                'question_id' => 54,
                'answer' => 'the charge made for searching title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:11:41',
                'updated_at' => '2015-08-24 21:11:41',
            ),
            215 =>
            array (
                'id' => 216,
                'question_id' => 54,
                'answer' => 'leased land.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:11:55',
                'updated_at' => '2015-08-24 21:11:55',
            ),
            216 =>
            array (
                'id' => 217,
                'question_id' => 55,
                'answer' => 'air rights.',
                'correct' => 1,
                'definition' => 'Many highrise office buildings and condominiums are built after the developer purchases the air rights. Solar rights involve easements to five access to light and air.',
                'created_at' => '2015-08-24 21:13:45',
                'updated_at' => '2015-08-24 21:13:45',
            ),
            217 =>
            array (
                'id' => 218,
                'question_id' => 55,
                'answer' => 'The bundle of rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:14:24',
                'updated_at' => '2015-08-24 21:14:24',
            ),
            218 =>
            array (
                'id' => 219,
                'question_id' => 55,
                'answer' => 'solar rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:14:41',
                'updated_at' => '2015-08-24 21:14:41',
            ),
            219 =>
            array (
                'id' => 220,
                'question_id' => 55,
                'answer' => 'riparian rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:14:52',
                'updated_at' => '2015-08-24 21:14:52',
            ),
            220 =>
            array (
                'id' => 221,
                'question_id' => 56,
                'answer' => 'emblements.',
                'correct' => 1,
                'definition' => 'Note that trees and shrubs not requiring annual cultivation would be real property, called fructus naturales.',
                'created_at' => '2015-08-24 21:16:23',
                'updated_at' => '2015-10-26 11:21:10',
            ),
            221 =>
            array (
                'id' => 222,
                'question_id' => 56,
                'answer' => 'fructus naturales.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:17:18',
                'updated_at' => '2015-08-24 21:17:18',
            ),
            222 =>
            array (
                'id' => 223,
                'question_id' => 56,
                'answer' => 'real property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:17:32',
                'updated_at' => '2015-08-24 21:17:32',
            ),
            223 =>
            array (
                'id' => 224,
                'question_id' => 56,
                'answer' => 'fixtures.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:17:43',
                'updated_at' => '2015-08-24 21:17:43',
            ),
            224 =>
            array (
                'id' => 225,
                'question_id' => 57,
                'answer' => 'reversion interests.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:18:40',
                'updated_at' => '2015-08-24 21:18:40',
            ),
            225 =>
            array (
                'id' => 226,
                'question_id' => 57,
                'answer' => 'warranties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:18:53',
                'updated_at' => '2015-08-24 21:18:53',
            ),
            226 =>
            array (
                'id' => 227,
                'question_id' => 57,
                'answer' => 'tenements.',
                'correct' => 1,
                'definition' => 'Tenement is a broad term covering rights to buildings, fences, easements, and rents. Reversion interests return to the grantor in the future and reservation interests remain with the grantor. Warranties may be expressed in the deed.',
                'created_at' => '2015-08-24 21:20:11',
                'updated_at' => '2015-08-24 21:20:11',
            ),
            227 =>
            array (
                'id' => 228,
                'question_id' => 57,
                'answer' => 'reservation interests.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:20:36',
                'updated_at' => '2015-08-24 21:20:36',
            ),
            228 =>
            array (
                'id' => 229,
                'question_id' => 58,
                'answer' => 'Growing trees',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:21:46',
                'updated_at' => '2015-08-24 21:21:46',
            ),
            229 =>
            array (
                'id' => 230,
                'question_id' => 58,
                'answer' => 'Trade fixtures',
                'correct' => 1,
                'definition' => 'Trade fixtures, such as display cabinets, storage systems, or barber chairs can be removed by the tenant upon expiration of the lease. They are considered personal property. Growing trees are classified as fractus naturales.',
                'created_at' => '2015-08-24 21:23:00',
                'updated_at' => '2015-08-24 21:23:00',
            ),
            230 =>
            array (
                'id' => 231,
                'question_id' => 58,
                'answer' => 'Buried water tanks',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:23:20',
                'updated_at' => '2015-08-24 21:23:20',
            ),
            231 =>
            array (
                'id' => 232,
                'question_id' => 58,
                'answer' => 'Buildings',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:23:30',
                'updated_at' => '2015-08-24 21:23:41',
            ),
            232 =>
            array (
                'id' => 233,
                'question_id' => 59,
                'answer' => 'All to the wife',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:25:08',
                'updated_at' => '2015-08-24 21:25:08',
            ),
            233 =>
            array (
                'id' => 234,
                'question_id' => 59,
                'answer' => 'All to the son',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:25:21',
                'updated_at' => '2015-08-24 21:25:21',
            ),
            234 =>
            array (
                'id' => 235,
                'question_id' => 59,
                'answer' => 'Part to the wife and part to the son',
                'correct' => 1,
            'definition' => 'In those states that have adopted the Uniform Probate Code, the wife would be entitlted to one-third absolute interest in all his property (i.e., she could elect to renounce the will).',
                'created_at' => '2015-08-24 21:26:21',
                'updated_at' => '2015-08-24 21:26:21',
            ),
            235 =>
            array (
                'id' => 236,
                'question_id' => 59,
                'answer' => 'None to the wife',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:26:37',
                'updated_at' => '2015-08-24 21:26:37',
            ),
            236 =>
            array (
                'id' => 237,
                'question_id' => 60,
                'answer' => 'a testator.',
                'correct' => 1,
            'definition' => 'A testatrix is a female. Executors (those named in a will) and administrators (those named by the court) handle the settlement of the deceased\'s estate--a more popular name today is "personal represetative/"',
                'created_at' => '2015-08-24 21:28:31',
                'updated_at' => '2015-08-24 21:28:31',
            ),
            237 =>
            array (
                'id' => 238,
                'question_id' => 60,
                'answer' => 'an executor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:28:46',
                'updated_at' => '2015-08-24 21:28:46',
            ),
            238 =>
            array (
                'id' => 239,
                'question_id' => 60,
                'answer' => 'a testatrix.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:28:59',
                'updated_at' => '2015-08-24 21:28:59',
            ),
            239 =>
            array (
                'id' => 240,
                'question_id' => 60,
                'answer' => 'an administrator.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:29:14',
                'updated_at' => '2015-08-24 21:29:14',
            ),
            240 =>
            array (
                'id' => 241,
                'question_id' => 61,
                'answer' => 'real property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:30:00',
                'updated_at' => '2015-08-24 21:30:00',
            ),
            241 =>
            array (
                'id' => 242,
                'question_id' => 61,
                'answer' => 'trade fixtures.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:30:16',
                'updated_at' => '2015-08-24 21:30:16',
            ),
            242 =>
            array (
                'id' => 243,
                'question_id' => 61,
                'answer' => 'fixtures.',
                'correct' => 1,
            'definition' => 'In a building, the ceiling tiles that drop into a metal fram are fixtures. Normally fixtures are attached; however, intent is the criteria for determining if something is a fixture. Here we have movable objects (ceiling tiles) that have been adapted to the building, and are therefore fixtures.',
                'created_at' => '2015-08-24 21:32:41',
                'updated_at' => '2015-08-24 21:32:41',
            ),
            243 =>
            array (
                'id' => 244,
                'question_id' => 61,
                'answer' => 'personal property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:32:59',
                'updated_at' => '2015-08-24 21:32:59',
            ),
            244 =>
            array (
                'id' => 245,
                'question_id' => 62,
                'answer' => 'real property by will.',
                'correct' => 1,
            'definition' => 'A bequest is a gift of personal property. (A legacy is a gift of money to a legatee.)',
                'created_at' => '2015-08-24 21:35:27',
                'updated_at' => '2015-08-24 21:35:27',
            ),
            245 =>
            array (
                'id' => 246,
                'question_id' => 62,
                'answer' => 'personal property under a bill of sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:35:52',
                'updated_at' => '2015-08-24 21:35:52',
            ),
            246 =>
            array (
                'id' => 247,
                'question_id' => 62,
                'answer' => 'property by escheat.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:46:41',
                'updated_at' => '2015-08-24 21:46:41',
            ),
            247 =>
            array (
                'id' => 248,
                'question_id' => 62,
                'answer' => 'property through foreclosure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:47:01',
                'updated_at' => '2015-08-24 21:47:01',
            ),
            248 =>
            array (
                'id' => 249,
                'question_id' => 63,
                'answer' => 'leaving a will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:48:02',
                'updated_at' => '2015-08-24 21:48:02',
            ),
            249 =>
            array (
                'id' => 250,
                'question_id' => 63,
                'answer' => 'without leaving a will',
                'correct' => 1,
            'definition' => 'In the case of intestacy, the state will, in effect, write a will under its laws of intestate succession (or laws of descent).',
                'created_at' => '2015-08-24 21:49:17',
                'updated_at' => '2015-08-24 21:49:17',
            ),
            250 =>
            array (
                'id' => 251,
                'question_id' => 63,
                'answer' => 'without leaving an heir.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:49:47',
                'updated_at' => '2015-08-24 21:49:47',
            ),
            251 =>
            array (
                'id' => 252,
                'question_id' => 63,
                'answer' => 'leaving property to the state.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:50:00',
                'updated_at' => '2015-08-24 21:50:00',
            ),
            252 =>
            array (
                'id' => 253,
                'question_id' => 64,
                'answer' => 'demise.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:50:40',
                'updated_at' => '2015-08-24 21:51:06',
            ),
            253 =>
            array (
                'id' => 254,
                'question_id' => 64,
                'answer' => 'devise.',
                'correct' => 1,
                'definition' => 'A codicil is an addition to a will that must be executed with the same formality as the original will. A demise is a transfer of a real property interest by lease.',
                'created_at' => '2015-08-24 21:52:06',
                'updated_at' => '2015-08-24 21:52:06',
            ),
            254 =>
            array (
                'id' => 255,
                'question_id' => 64,
                'answer' => 'decree.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:52:21',
                'updated_at' => '2015-08-24 21:52:21',
            ),
            255 =>
            array (
                'id' => 256,
                'question_id' => 64,
                'answer' => 'degree.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:52:31',
                'updated_at' => '2015-08-24 21:52:31',
            ),
            256 =>
            array (
                'id' => 257,
                'question_id' => 65,
                'answer' => 'cure a defect by a quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:53:11',
                'updated_at' => '2015-08-24 21:53:11',
            ),
            257 =>
            array (
                'id' => 258,
                'question_id' => 65,
                'answer' => 'prove title by adverse possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:53:29',
                'updated_at' => '2015-08-24 21:53:29',
            ),
            258 =>
            array (
                'id' => 259,
                'question_id' => 65,
                'answer' => 'process a will to establish its validity.',
                'correct' => 1,
                'definition' => 'When a testator dies, it is necessary to prove the validity of the will and give notice to any creditors that they may file claims. This is all part of the process of transferring title from the name of the deceased owner.',
                'created_at' => '2015-08-24 21:54:27',
                'updated_at' => '2015-10-26 11:34:18',
            ),
            259 =>
            array (
                'id' => 260,
                'question_id' => 65,
                'answer' => 'process of partition of property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:54:46',
                'updated_at' => '2015-08-24 21:54:46',
            ),
            260 =>
            array (
                'id' => 261,
                'question_id' => 66,
                'answer' => 'a gift of real estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:55:48',
                'updated_at' => '2015-08-24 21:55:48',
            ),
            261 =>
            array (
                'id' => 262,
                'question_id' => 66,
                'answer' => 'trust in perpetuity.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:56:02',
                'updated_at' => '2015-08-24 21:56:02',
            ),
            262 =>
            array (
                'id' => 263,
                'question_id' => 66,
                'answer' => 'real estate gift by last testament.',
                'correct' => 1,
                'definition' => 'The devisee must wait for the probate process to settle the decedent\'s estate and pay the just debts before the devisee will obtain marketable title.',
                'created_at' => '2015-08-24 21:57:10',
                'updated_at' => '2015-08-24 21:57:10',
            ),
            263 =>
            array (
                'id' => 264,
                'question_id' => 66,
                'answer' => 'plan or scheme of development.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:58:11',
                'updated_at' => '2015-08-24 21:58:11',
            ),
            264 =>
            array (
                'id' => 265,
                'question_id' => 67,
                'answer' => 'succession.',
                'correct' => 1,
                'definition' => 'Each state has its own rules as to who will succeed to the intestate person\'s property. In effect, the state writes the will.',
                'created_at' => '2015-08-24 21:59:29',
                'updated_at' => '2015-08-24 21:59:29',
            ),
            265 =>
            array (
                'id' => 266,
                'question_id' => 67,
                'answer' => 'accretion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:59:42',
                'updated_at' => '2015-08-24 21:59:42',
            ),
            266 =>
            array (
                'id' => 267,
                'question_id' => 67,
                'answer' => 'acquisition.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 21:59:53',
                'updated_at' => '2015-08-24 21:59:53',
            ),
            267 =>
            array (
                'id' => 268,
                'question_id' => 67,
                'answer' => 'prescription.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:00:07',
                'updated_at' => '2015-08-24 22:00:07',
            ),
            268 =>
            array (
                'id' => 269,
                'question_id' => 68,
                'answer' => 'reconveyance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:01:13',
                'updated_at' => '2015-08-24 22:01:13',
            ),
            269 =>
            array (
                'id' => 270,
                'question_id' => 68,
                'answer' => 'reversion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:01:32',
                'updated_at' => '2015-08-24 22:01:32',
            ),
            270 =>
            array (
                'id' => 271,
                'question_id' => 68,
                'answer' => 'escheat.',
                'correct' => 1,
                'definition' => 'Most state laws allow a long period between death and title passing to the government so that next of kin have sufficient time to file claims.',
                'created_at' => '2015-08-24 22:02:39',
                'updated_at' => '2015-08-24 22:02:39',
            ),
            271 =>
            array (
                'id' => 272,
                'question_id' => 68,
                'answer' => 'succession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:02:51',
                'updated_at' => '2015-08-24 22:02:51',
            ),
            272 =>
            array (
                'id' => 273,
                'question_id' => 69,
                'answer' => 'escheats and is sold at an auction by the state',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:17:16',
                'updated_at' => '2015-08-24 22:17:16',
            ),
            273 =>
            array (
                'id' => 274,
                'question_id' => 69,
                'answer' => 'goest to the next of kin.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:17:34',
                'updated_at' => '2015-08-24 22:17:34',
            ),
            274 =>
            array (
                'id' => 275,
                'question_id' => 69,
                'answer' => 'passes to the devisee.',
                'correct' => 1,
                'definition' => 'Testate means to die with a valid will in which real property is passe by way of a devise.',
                'created_at' => '2015-08-24 22:18:24',
                'updated_at' => '2015-08-24 22:18:24',
            ),
            275 =>
            array (
                'id' => 276,
                'question_id' => 69,
                'answer' => 'goes to the administrator.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:18:44',
                'updated_at' => '2015-08-24 22:18:44',
            ),
            276 =>
            array (
                'id' => 277,
                'question_id' => 70,
                'answer' => 'A codicil',
                'correct' => 1,
                'definition' => 'A codicil is an addition to a will and could transfer real property as well as personal property. Bequest is the transfer of personal property, and a legacy refers to money.',
                'created_at' => '2015-08-24 22:20:30',
                'updated_at' => '2015-08-24 22:20:30',
            ),
            277 =>
            array (
                'id' => 278,
                'question_id' => 70,
                'answer' => 'A gift',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:20:40',
                'updated_at' => '2015-08-24 22:20:40',
            ),
            278 =>
            array (
                'id' => 279,
                'question_id' => 70,
                'answer' => 'A bequest',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:20:54',
                'updated_at' => '2015-08-24 22:20:54',
            ),
            279 =>
            array (
                'id' => 280,
                'question_id' => 70,
                'answer' => 'A legacy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:21:05',
                'updated_at' => '2015-08-24 22:21:05',
            ),
            280 =>
            array (
                'id' => 281,
                'question_id' => 71,
                'answer' => 'warranty deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:22:09',
                'updated_at' => '2015-08-24 22:22:09',
            ),
            281 =>
            array (
                'id' => 282,
                'question_id' => 71,
                'answer' => 'special warranty deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:22:24',
                'updated_at' => '2015-08-24 22:22:24',
            ),
            282 =>
            array (
                'id' => 283,
                'question_id' => 71,
                'answer' => 'trustee\'s deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:22:41',
                'updated_at' => '2015-08-24 22:22:41',
            ),
            283 =>
            array (
                'id' => 284,
                'question_id' => 71,
                'answer' => 'last will and testament.',
                'correct' => 1,
                'definition' => 'A will differs from a transfer by deed in that a provision in a will is effective only after death and probate. A deed is effective on delivery during the grantor\'s lifetime. A will can be rewritten any time prior to the death of the testator.',
                'created_at' => '2015-08-24 22:24:26',
                'updated_at' => '2015-08-24 22:24:26',
            ),
            284 =>
            array (
                'id' => 285,
                'question_id' => 72,
                'answer' => 'feudal custom of the king\'s seizure of land',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:29:07',
                'updated_at' => '2015-08-24 22:29:07',
            ),
            285 =>
            array (
                'id' => 286,
                'question_id' => 72,
                'answer' => 'right of the government to take private property for a public purpose upon payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:30:04',
                'updated_at' => '2015-08-24 22:30:04',
            ),
            286 =>
            array (
                'id' => 287,
                'question_id' => 72,
                'answer' => 'acquisition of title by adverse possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:30:22',
                'updated_at' => '2015-08-24 22:30:22',
            ),
            287 =>
            array (
                'id' => 288,
                'question_id' => 72,
                'answer' => 'right of the givernment to acquire title where the owner dies without a will and without heirs.',
                'correct' => 1,
                'definition' => 'Escheat also applies to abandonment of real property. The right of the government to take private property for a public purpsoe upon payment refers to eminent domain NOT escheat.',
                'created_at' => '2015-08-24 22:32:04',
                'updated_at' => '2015-08-24 22:32:04',
            ),
            288 =>
            array (
                'id' => 289,
                'question_id' => 73,
                'answer' => 'Holder of the second mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:32:53',
                'updated_at' => '2015-08-24 22:32:53',
            ),
            289 =>
            array (
                'id' => 290,
                'question_id' => 73,
                'answer' => 'Creditors',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:33:06',
                'updated_at' => '2015-08-24 22:33:06',
            ),
            290 =>
            array (
                'id' => 291,
                'question_id' => 73,
                'answer' => 'Heirs',
                'correct' => 1,
                'definition' => 'Secured creditors, the government, and unsecured creditors all receive payment before the heirs. Sometimes, a devisee finds out that the real property he or she was to receive had to be sold to pay all of the debts of the deceased.',
                'created_at' => '2015-08-24 22:33:58',
                'updated_at' => '2015-08-24 22:33:58',
            ),
            291 =>
            array (
                'id' => 292,
                'question_id' => 73,
                'answer' => 'The government for taxes',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:34:18',
                'updated_at' => '2015-08-24 22:34:18',
            ),
            292 =>
            array (
                'id' => 293,
                'question_id' => 74,
                'answer' => 'Testator',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:35:01',
                'updated_at' => '2015-08-24 22:35:01',
            ),
            293 =>
            array (
                'id' => 294,
                'question_id' => 74,
                'answer' => 'Devise',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:35:14',
                'updated_at' => '2015-08-24 22:35:14',
            ),
            294 =>
            array (
                'id' => 295,
                'question_id' => 74,
                'answer' => 'Intestate',
                'correct' => 1,
                'definition' => 'Intestate means there is no will, while the rest involve a will prepared by a testator. A devise is real property passing by will.',
                'created_at' => '2015-08-24 22:35:58',
                'updated_at' => '2015-08-24 22:35:58',
            ),
            295 =>
            array (
                'id' => 296,
                'question_id' => 74,
                'answer' => 'Will',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:36:13',
                'updated_at' => '2015-08-24 22:36:13',
            ),
            296 =>
            array (
                'id' => 297,
                'question_id' => 75,
                'answer' => 'Bill of sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:37:10',
                'updated_at' => '2015-08-24 22:37:10',
            ),
            297 =>
            array (
                'id' => 298,
                'question_id' => 75,
                'answer' => 'Chattel mortgage',
                'correct' => 1,
                'definition' => 'In those states that have adopted the Uniform Commercial Code, the chattel mortgage is call a security agreement; it is the financing statement that is recorded.',
                'created_at' => '2015-08-24 22:38:30',
                'updated_at' => '2015-08-24 22:38:30',
            ),
            298 =>
            array (
                'id' => 299,
                'question_id' => 75,
                'answer' => 'Bargain and sale deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:38:49',
                'updated_at' => '2015-08-24 22:38:49',
            ),
            299 =>
            array (
                'id' => 300,
                'question_id' => 75,
                'answer' => 'Partial release',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:39:13',
                'updated_at' => '2015-08-24 22:39:13',
            ),
            300 =>
            array (
                'id' => 301,
                'question_id' => 76,
                'answer' => 'An option',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:42:49',
                'updated_at' => '2015-08-24 22:42:49',
            ),
            301 =>
            array (
                'id' => 302,
                'question_id' => 76,
                'answer' => 'A lease',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:43:08',
                'updated_at' => '2015-08-24 22:43:08',
            ),
            302 =>
            array (
                'id' => 303,
                'question_id' => 76,
                'answer' => 'A bill of sale',
                'correct' => 1,
                'definition' => 'A bill of sale is used to transfer title to personal property and is sometimes used in real estate transactions, so the seller will warrant that there are no unpaid liens on the title. An option, lease and agreement of sale all transfer an equitable interest in real property.',
                'created_at' => '2015-08-24 22:46:47',
                'updated_at' => '2015-08-24 22:46:47',
            ),
            303 =>
            array (
                'id' => 304,
                'question_id' => 76,
                'answer' => 'An agreement of sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:48:14',
                'updated_at' => '2015-08-24 22:48:14',
            ),
            304 =>
            array (
                'id' => 305,
                'question_id' => 77,
                'answer' => 'The devisees named in the will',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 22:58:29',
                'updated_at' => '2015-08-24 22:58:29',
            ),
            305 =>
            array (
                'id' => 306,
                'question_id' => 77,
                'answer' => 'Those entitled under the state laws of intestate succession',
                'correct' => 1,
                'definition' => 'In the event of the death of a person who did not leave a valid will, state law will specify which relatives are entitled to succeed to the real and personal property. This is sometimes called the state laws of intestate succession or laws of descent.',
                'created_at' => '2015-08-24 23:04:23',
                'updated_at' => '2015-08-24 23:04:23',
            ),
            306 =>
            array (
                'id' => 307,
                'question_id' => 77,
                'answer' => 'The property escheats to the state',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:04:59',
                'updated_at' => '2015-08-24 23:04:59',
            ),
            307 =>
            array (
                'id' => 308,
                'question_id' => 77,
                'answer' => 'The previous owners of the property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:05:18',
                'updated_at' => '2015-08-24 23:05:18',
            ),
            308 =>
            array (
                'id' => 309,
                'question_id' => 78,
                'answer' => 'Probate court',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:06:09',
                'updated_at' => '2015-08-24 23:06:09',
            ),
            309 =>
            array (
                'id' => 310,
                'question_id' => 78,
                'answer' => 'Administrator',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:06:23',
                'updated_at' => '2015-08-24 23:06:23',
            ),
            310 =>
            array (
                'id' => 311,
                'question_id' => 78,
                'answer' => 'Testator',
                'correct' => 1,
                'definition' => 'The deceased person usually designates the executor in the will. If one was not designated or the one designated does not qualify, then the probate court will appoint an administrator. In some states, the executor and administrator are call personal representatives.',
                'created_at' => '2015-08-24 23:07:59',
                'updated_at' => '2015-08-24 23:07:59',
            ),
            311 =>
            array (
                'id' => 312,
                'question_id' => 78,
                'answer' => 'Heirs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:08:46',
                'updated_at' => '2015-08-24 23:09:17',
            ),
            312 =>
            array (
                'id' => 313,
                'question_id' => 79,
                'answer' => 'escheat to the government.',
                'correct' => 1,
                'definition' => 'Because the man left no will and has not surviving relatives, his real property will escheat to the government. The man has no devisees because he has no will.',
                'created_at' => '2015-08-24 23:12:15',
                'updated_at' => '2015-08-24 23:12:15',
            ),
            313 =>
            array (
                'id' => 314,
                'question_id' => 79,
                'answer' => 'revert back to the original grantor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:12:40',
                'updated_at' => '2015-08-24 23:12:40',
            ),
            314 =>
            array (
                'id' => 315,
                'question_id' => 79,
                'answer' => 'go to a testatrix.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:12:53',
                'updated_at' => '2015-08-24 23:12:53',
            ),
            315 =>
            array (
                'id' => 316,
                'question_id' => 79,
                'answer' => 'pass to the man\'s devisees.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:13:10',
                'updated_at' => '2015-08-24 23:13:10',
            ),
            316 =>
            array (
                'id' => 317,
                'question_id' => 80,
                'answer' => 'When minerals are discovered under the land',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:14:45',
                'updated_at' => '2015-08-24 23:14:45',
            ),
            317 =>
            array (
                'id' => 318,
                'question_id' => 80,
                'answer' => 'When the land is contiguous to a stream',
                'correct' => 1,
                'definition' => 'Riparian rights belong to owners whose land borders a watercourse. They are rights to acquire title to accreted land and rights to boating, swimming, and so forth.',
                'created_at' => '2015-08-24 23:18:02',
                'updated_at' => '2015-08-24 23:18:02',
            ),
            318 =>
            array (
                'id' => 319,
                'question_id' => 80,
                'answer' => 'When the property is in a geothermal area',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:18:28',
                'updated_at' => '2015-08-24 23:18:28',
            ),
            319 =>
            array (
                'id' => 320,
                'question_id' => 80,
                'answer' => 'When the property borders on the ocean',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:18:49',
                'updated_at' => '2015-08-24 23:18:49',
            ),
            320 =>
            array (
                'id' => 321,
                'question_id' => 81,
                'answer' => 'escheat to the government.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:19:35',
                'updated_at' => '2015-08-24 23:19:35',
            ),
            321 =>
            array (
                'id' => 322,
                'question_id' => 81,
                'answer' => 'pass to the next of kin.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:19:51',
                'updated_at' => '2015-08-24 23:19:51',
            ),
            322 =>
            array (
                'id' => 323,
                'question_id' => 81,
                'answer' => 'descend to the survivors.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:20:06',
                'updated_at' => '2015-08-24 23:20:06',
            ),
            323 =>
            array (
                'id' => 324,
                'question_id' => 81,
                'answer' => 'pass to the devisees.',
                'correct' => 1,
                'definition' => 'When a person dies testate, the real property will be devised to those people named in the will. If the person dies intestate, then state law determines to whom the property will descend.',
                'created_at' => '2015-08-24 23:22:04',
                'updated_at' => '2015-08-24 23:22:04',
            ),
            324 =>
            array (
                'id' => 325,
                'question_id' => 82,
                'answer' => 'Each owner is responsible for one-half of the maintenance fees.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:27:53',
                'updated_at' => '2015-08-24 23:27:53',
            ),
            325 =>
            array (
                'id' => 326,
                'question_id' => 82,
                'answer' => 'Each owner owns the half of the wall on his or her side and has an easement on the other half.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:28:28',
                'updated_at' => '2015-08-24 23:28:28',
            ),
            326 =>
            array (
                'id' => 327,
                'question_id' => 82,
                'answer' => 'Only one owner is responsible for the maintenance on the wall.',
                'correct' => 1,
                'definition' => 'Party walls are more frequently used in large city tenements. They involve reciprocal easements of support.',
                'created_at' => '2015-08-24 23:29:30',
                'updated_at' => '2015-08-24 23:29:54',
            ),
            327 =>
            array (
                'id' => 328,
                'question_id' => 82,
                'answer' => 'Neither owner may destroy the wall with the other\'s permission.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:30:35',
                'updated_at' => '2015-08-24 23:30:35',
            ),
            328 =>
            array (
                'id' => 329,
                'question_id' => 83,
                'answer' => 'prevent fraud in the proof of oral sales contracts.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:35:20',
                'updated_at' => '2015-08-24 23:35:20',
            ),
            329 =>
            array (
                'id' => 330,
                'question_id' => 83,
                'answer' => 'regulate personal property items pledged in a sales contract.',
                'correct' => 1,
                'definition' => 'Where personal  property is used as security in a land sales contract, the creditor-seller should, under the UCC, perfect the lien by filing a financing statement that describes the particular personal property.',
                'created_at' => '2015-08-24 23:36:59',
                'updated_at' => '2015-08-24 23:36:59',
            ),
            330 =>
            array (
                'id' => 331,
                'question_id' => 83,
                'answer' => 'make real property transactions more uniform.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:37:21',
                'updated_at' => '2015-08-24 23:37:21',
            ),
            331 =>
            array (
                'id' => 332,
                'question_id' => 83,
                'answer' => 'regulate commercial leasing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:37:38',
                'updated_at' => '2015-08-24 23:37:38',
            ),
            332 =>
            array (
                'id' => 333,
                'question_id' => 84,
                'answer' => 'An administrator is assigned by the courts to administer a decedent\'s estate while an executor is named in a decedent\'s will to execute the decedent\'s las will and testament.',
                'correct' => 1,
                'definition' => 'An administrator is assigned by the courts to administer a decedent\'s estate, while an executor is named in a decedent\'s will to execute the decedent\'s last will and testament.',
                'created_at' => '2015-08-24 23:41:06',
                'updated_at' => '2015-08-24 23:41:06',
            ),
            333 =>
            array (
                'id' => 334,
                'question_id' => 84,
                'answer' => 'An administrator is a devisee, while an executor is not.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:41:27',
                'updated_at' => '2015-08-24 23:41:27',
            ),
            334 =>
            array (
                'id' => 335,
                'question_id' => 84,
                'answer' => 'An administrator is a testator, while an executor is not.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:41:47',
                'updated_at' => '2015-08-24 23:41:47',
            ),
            335 =>
            array (
                'id' => 336,
                'question_id' => 84,
                'answer' => 'An executor has riparian rights, while and administrator does not.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:42:09',
                'updated_at' => '2015-08-24 23:42:09',
            ),
            336 =>
            array (
                'id' => 337,
                'question_id' => 85,
                'answer' => 'Indestructibility',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:43:30',
                'updated_at' => '2015-08-24 23:43:47',
            ),
            337 =>
            array (
                'id' => 338,
                'question_id' => 85,
                'answer' => 'Immobility',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:44:09',
                'updated_at' => '2015-08-24 23:44:09',
            ),
            338 =>
            array (
                'id' => 339,
                'question_id' => 85,
                'answer' => 'Situs',
                'correct' => 1,
                'definition' => 'Situs is the personal preference owners have for one area of land over another. It is an economic characteristic as opposed to a physical characteristic, such as indestructibility and immobility.',
                'created_at' => '2015-08-24 23:45:09',
                'updated_at' => '2015-08-24 23:45:09',
            ),
            339 =>
            array (
                'id' => 340,
                'question_id' => 85,
                'answer' => 'Uniqueness',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:45:29',
                'updated_at' => '2015-08-24 23:45:29',
            ),
            340 =>
            array (
                'id' => 341,
                'question_id' => 86,
                'answer' => 'If the actual deed is lost, the recorded copy will be proof of the grantee\'s title.',
                'correct' => 1,
            'definition' => 'Because the deed itself is not the title (it is evidence of title), there is no loss of title merely because the deed is lost. However, it is the grantees\'s advantage to have a copy on record. Even U.S. patent deeds must be recorded in the local record office where the property is located.',
                'created_at' => '2015-08-24 23:52:40',
                'updated_at' => '2015-08-24 23:52:40',
            ),
            341 =>
            array (
                'id' => 342,
                'question_id' => 86,
                'answer' => 'The deed becomes valid on recording',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:53:10',
                'updated_at' => '2015-08-24 23:53:10',
            ),
            342 =>
            array (
                'id' => 343,
                'question_id' => 86,
                'answer' => 'Recording requires actual notice.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:53:26',
                'updated_at' => '2015-08-24 23:53:26',
            ),
            343 =>
            array (
                'id' => 344,
                'question_id' => 86,
                'answer' => 'Deeds from the U.S. government must be recorded in federal court.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-24 23:53:49',
                'updated_at' => '2015-08-24 23:53:49',
            ),
            344 =>
            array (
                'id' => 345,
                'question_id' => 87,
                'answer' => 'deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:37:55',
                'updated_at' => '2015-08-25 06:37:55',
            ),
            345 =>
            array (
                'id' => 346,
                'question_id' => 87,
                'answer' => 'inheritance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:38:07',
                'updated_at' => '2015-08-25 06:38:07',
            ),
            346 =>
            array (
                'id' => 347,
                'question_id' => 87,
                'answer' => 'adverse possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:38:25',
                'updated_at' => '2015-08-25 06:38:25',
            ),
            347 =>
            array (
                'id' => 348,
                'question_id' => 87,
                'answer' => 'lease.',
                'correct' => 1,
                'definition' => 'Under a lease, one acquires a right of exclusive posession--not title or ownership, which remain with the lessor.',
                'created_at' => '2015-08-25 06:39:13',
                'updated_at' => '2015-08-25 06:39:13',
            ),
            348 =>
            array (
                'id' => 349,
                'question_id' => 88,
                'answer' => 'the grantee\'s name is filled in.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:40:18',
                'updated_at' => '2015-08-25 06:40:18',
            ),
            349 =>
            array (
                'id' => 350,
                'question_id' => 88,
                'answer' => 'it is signed by the grantor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:40:34',
                'updated_at' => '2015-08-25 06:40:34',
            ),
            350 =>
            array (
                'id' => 351,
                'question_id' => 88,
                'answer' => 'it is delivered to the grantee.',
                'correct' => 1,
                'definition' => 'Delivery is the key, because the deed could have been signed by the grantor, then stolen by the grantee who filled in his own name.',
                'created_at' => '2015-08-25 06:41:24',
                'updated_at' => '2015-09-20 23:17:34',
            ),
            351 =>
            array (
                'id' => 352,
                'question_id' => 88,
                'answer' => 'it is found in the possession of the grantee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:41:50',
                'updated_at' => '2015-10-26 10:47:05',
            ),
            352 =>
            array (
                'id' => 353,
                'question_id' => 89,
                'answer' => 'tenant at will.',
                'correct' => 1,
                'definition' => 'Depending on the facts, the tenant also could have been a tenant at sufferance or a holdover tenant.  A life tenant, tenant in common and joint tenant are concerned with methods of ownership.',
                'created_at' => '2015-08-25 06:44:30',
                'updated_at' => '2015-08-25 06:44:30',
            ),
            353 =>
            array (
                'id' => 354,
                'question_id' => 89,
                'answer' => 'life tenant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:44:47',
                'updated_at' => '2015-08-25 06:44:47',
            ),
            354 =>
            array (
                'id' => 355,
                'question_id' => 89,
                'answer' => 'tenant in common.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:45:02',
                'updated_at' => '2015-08-25 06:45:02',
            ),
            355 =>
            array (
                'id' => 356,
                'question_id' => 89,
                'answer' => 'joint tenant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 06:45:16',
                'updated_at' => '2015-08-25 06:45:16',
            ),
            356 =>
            array (
                'id' => 357,
                'question_id' => 90,
                'answer' => 'Zoning laws',
                'correct' => 1,
                'definition' => 'Zoning laws are public restrictions. Condominium bylaws often restrict the type of uses in the project.',
                'created_at' => '2015-08-25 07:05:55',
                'updated_at' => '2015-08-25 07:05:55',
            ),
            357 =>
            array (
                'id' => 358,
                'question_id' => 90,
                'answer' => 'Condominium bylaws',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:06:19',
                'updated_at' => '2015-08-25 07:06:19',
            ),
            358 =>
            array (
                'id' => 359,
                'question_id' => 90,
                'answer' => 'Restrictive covenants',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:06:37',
                'updated_at' => '2015-08-25 07:06:37',
            ),
            359 =>
            array (
                'id' => 360,
                'question_id' => 90,
                'answer' => 'Subdivision restrictions',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:06:52',
                'updated_at' => '2015-08-25 07:06:52',
            ),
            360 =>
            array (
                'id' => 361,
                'question_id' => 91,
                'answer' => 'condemnation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:07:39',
                'updated_at' => '2015-08-25 07:07:39',
            ),
            361 =>
            array (
                'id' => 362,
                'question_id' => 91,
                'answer' => 'sale-leaseback.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:07:56',
                'updated_at' => '2015-08-25 07:07:56',
            ),
            362 =>
            array (
                'id' => 363,
                'question_id' => 91,
                'answer' => 'conversion.',
                'correct' => 1,
                'definition' => 'Condominium conversion involves the transformation of a rental apartment building under single ownership to a building in which the individual apartment units are separately owned as condominium apartments. The building remains basically the same.',
                'created_at' => '2015-08-25 07:08:58',
                'updated_at' => '2015-08-25 07:08:58',
            ),
            363 =>
            array (
                'id' => 364,
                'question_id' => 91,
                'answer' => 'rent with option to buy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 07:09:22',
                'updated_at' => '2015-08-25 07:09:22',
            ),
            364 =>
            array (
                'id' => 365,
                'question_id' => 92,
                'answer' => 'Time-sharing',
                'correct' => 1,
                'definition' => 'Under time-sharing, the owners have specific rights of possession in a particular project. In some cases, they have rights to a particular unit for a particular time period; in other cases, both the unit and the time period may vary according to a prearranged schedule.',
                'created_at' => '2015-08-25 12:33:42',
                'updated_at' => '2015-08-29 11:44:31',
            ),
            365 =>
            array (
                'id' => 366,
                'question_id' => 92,
                'answer' => 'Corporate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 12:33:52',
                'updated_at' => '2015-08-29 12:44:16',
            ),
            366 =>
            array (
                'id' => 367,
                'question_id' => 92,
                'answer' => 'Cooperative',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 12:34:07',
                'updated_at' => '2015-08-29 12:44:40',
            ),
            367 =>
            array (
                'id' => 368,
                'question_id' => 92,
                'answer' => 'Syndication',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-25 12:34:13',
                'updated_at' => '2015-08-29 12:44:59',
            ),
            368 =>
            array (
                'id' => 369,
                'question_id' => 93,
                'answer' => 'Steering',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:46:02',
                'updated_at' => '2015-08-29 12:46:02',
            ),
            369 =>
            array (
                'id' => 370,
                'question_id' => 93,
                'answer' => 'Blockbusting or panic selling',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:46:18',
                'updated_at' => '2015-08-29 12:46:18',
            ),
            370 =>
            array (
                'id' => 371,
                'question_id' => 93,
                'answer' => 'Redlining',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:46:30',
                'updated_at' => '2015-08-29 12:46:30',
            ),
            371 =>
            array (
                'id' => 372,
                'question_id' => 93,
                'answer' => 'Denying a lease to military personnel',
                'correct' => 1,
                'definition' => 'While it is not a specified discriminatory act under the federal Fair Housing Act to refuse to rent to military, it is not a recommended practice and may involve violation of other federal laws.',
                'created_at' => '2015-08-29 12:48:15',
                'updated_at' => '2015-08-29 12:48:15',
            ),
            372 =>
            array (
                'id' => 373,
                'question_id' => 94,
                'answer' => 'a valid agreement exists, because the buyer accepted the seller\'s offer exactly as it was made, regardless of the fact that it was not accepted immediately.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:50:43',
                'updated_at' => '2015-08-29 12:50:43',
            ),
            373 =>
            array (
                'id' => 374,
                'question_id' => 94,
                'answer' => 'a valid agreement exists, because the buyer accepted before the seller advised him that the offer was withdrawn.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:51:16',
                'updated_at' => '2015-08-29 12:51:16',
            ),
            374 =>
            array (
                'id' => 375,
                'question_id' => 94,
                'answer' => 'no valid agreement exists, because the seller\'s offer was not accepted within 72 hours of it having been made.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:51:49',
                'updated_at' => '2015-08-29 12:51:49',
            ),
            375 =>
            array (
                'id' => 376,
                'question_id' => 94,
                'answer' => 'no valid agreement exists, because the buyer\'s counteroffer was a rejection of the seller\'s offer and with that rejection, the seller\'s initial offer ceased to exist.',
                'correct' => 1,
                'definition' => 'There is no valid agreement, because the buyer\'s counteroffer rejected the seller\'s offer, and , with that rejection, the seller\'s initial offer ceased to exist.',
                'created_at' => '2015-08-29 12:53:09',
                'updated_at' => '2015-08-29 12:53:09',
            ),
            376 =>
            array (
                'id' => 377,
                'question_id' => 95,
                'answer' => 'This discrimination does not violate the federal act, because it involves vacant land.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:55:07',
                'updated_at' => '2015-08-29 12:55:07',
            ),
            377 =>
            array (
                'id' => 378,
                'question_id' => 95,
                'answer' => 'The developer is exempt from the law.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:55:26',
                'updated_at' => '2015-08-29 12:55:26',
            ),
            378 =>
            array (
                'id' => 379,
                'question_id' => 95,
                'answer' => 'The law applies only to transactions of $50,000.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:55:46',
                'updated_at' => '2015-08-29 12:55:46',
            ),
            379 =>
            array (
                'id' => 380,
                'question_id' => 95,
                'answer' => 'The minority person may have a valid claim under the act.',
                'correct' => 1,
                'definition' => 'The federal law applies to developers and to sales of vacant land that may be used for residential purposes.',
                'created_at' => '2015-08-29 12:56:41',
                'updated_at' => '2015-08-29 12:56:41',
            ),
            380 =>
            array (
                'id' => 381,
                'question_id' => 96,
                'answer' => 'severalty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:58:20',
                'updated_at' => '2015-08-29 12:58:20',
            ),
            381 =>
            array (
                'id' => 382,
                'question_id' => 96,
                'answer' => 'joint tenancy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:58:31',
                'updated_at' => '2015-08-29 12:58:31',
            ),
            382 =>
            array (
                'id' => 383,
                'question_id' => 96,
                'answer' => 'tenancy a will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 12:58:44',
                'updated_at' => '2015-08-29 12:58:44',
            ),
            383 =>
            array (
                'id' => 384,
                'question_id' => 96,
                'answer' => 'Tenancy in common.',
                'correct' => 1,
                'definition' => 'This form of ownership is called tenancy in common.',
                'created_at' => '2015-08-29 13:00:09',
                'updated_at' => '2015-08-29 13:00:09',
            ),
            384 =>
            array (
                'id' => 385,
                'question_id' => 97,
                'answer' => 'Salesperson introduces minority buyer to minority lender who will give buyer a loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:01:08',
                'updated_at' => '2015-08-29 13:01:08',
            ),
            385 =>
            array (
                'id' => 386,
                'question_id' => 97,
                'answer' => 'Salesperson shows minority buyer homes only in minority section of town even though buyer wants to see homes in other areas.',
                'correct' => 1,
                'definition' => 'Steering is the practice of directing a prospect into or away from certain areas based on ethnic considerations.',
                'created_at' => '2015-08-29 13:02:38',
                'updated_at' => '2015-08-29 13:13:30',
            ),
            386 =>
            array (
                'id' => 387,
                'question_id' => 97,
                'answer' => 'Salesperson directs minority buyer to minority attorney.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:03:09',
                'updated_at' => '2015-08-29 13:03:09',
            ),
            387 =>
            array (
                'id' => 388,
                'question_id' => 97,
                'answer' => 'Salesperson directs minority buyer to minority appraiser.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:03:30',
                'updated_at' => '2015-08-29 13:03:30',
            ),
            388 =>
            array (
                'id' => 389,
                'question_id' => 98,
                'answer' => 'federal Fair Housing Act.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:17:17',
                'updated_at' => '2015-08-29 13:17:17',
            ),
            389 =>
            array (
                'id' => 390,
                'question_id' => 98,
                'answer' => 'Equal Credit Opportunity Act.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:18:49',
                'updated_at' => '2015-08-29 13:18:49',
            ),
            390 =>
            array (
                'id' => 391,
                'question_id' => 98,
                'answer' => 'Truth in Lending Act.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:19:04',
                'updated_at' => '2015-08-29 13:19:04',
            ),
            391 =>
            array (
                'id' => 392,
                'question_id' => 98,
                'answer' => 'nothing; this not a violation.',
                'correct' => 1,
                'definition' => 'The association\'s decision is based on sound business judgment rather than discriminatory reasons, so there is no violation. Note that the Equal Credit Opportunity Act, unlike the federal Fair Housing Act, also prohibits discrimination based on age.',
                'created_at' => '2015-08-29 13:21:23',
                'updated_at' => '2015-08-29 13:21:23',
            ),
            392 =>
            array (
                'id' => 393,
                'question_id' => 99,
                'answer' => 'an estate for years.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:22:46',
                'updated_at' => '2015-08-29 13:22:46',
            ),
            393 =>
            array (
                'id' => 394,
                'question_id' => 99,
                'answer' => 'an estate from year to year.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:23:00',
                'updated_at' => '2015-08-29 13:23:00',
            ),
            394 =>
            array (
                'id' => 395,
                'question_id' => 99,
                'answer' => 'tenancy at will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:23:13',
                'updated_at' => '2015-08-29 13:23:13',
            ),
            395 =>
            array (
                'id' => 396,
                'question_id' => 99,
                'answer' => 'tenancy at sufferance.',
                'correct' => 1,
                'definition' => 'Under these facts, the tenant has a tenancy at sufferance.',
                'created_at' => '2015-08-29 13:23:53',
                'updated_at' => '2015-08-29 13:23:53',
            ),
            396 =>
            array (
                'id' => 397,
                'question_id' => 100,
                'answer' => 'A written contract between agent and broker',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:25:53',
                'updated_at' => '2015-08-29 13:25:53',
            ),
            397 =>
            array (
                'id' => 398,
                'question_id' => 100,
                'answer' => 'Agent compensation based on performance and not on number of hours worked',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:26:19',
                'updated_at' => '2015-08-29 13:26:19',
            ),
            398 =>
            array (
                'id' => 399,
                'question_id' => 100,
                'answer' => 'The agent is properly licensed to sell real estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:26:42',
                'updated_at' => '2015-08-29 13:26:42',
            ),
            399 =>
            array (
                'id' => 400,
                'question_id' => 100,
                'answer' => 'Agent\'s successfully closing a minimum of two transactions per year',
                'correct' => 1,
                'definition' => 'Federal regulations now require only that there be a written contract between agent and broker, the agent is compensated on performance and not on number of hours worked and the agent must be licensed to sell real estate.',
                'created_at' => '2015-08-29 13:28:47',
                'updated_at' => '2015-08-29 13:28:47',
            ),
            400 =>
            array (
                'id' => 401,
                'question_id' => 101,
                'answer' => 'The broker\'s license can be revoked.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:30:25',
                'updated_at' => '2015-08-29 13:30:25',
            ),
            401 =>
            array (
                'id' => 402,
                'question_id' => 101,
                'answer' => 'This is blockbusting.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:30:41',
                'updated_at' => '2015-08-29 13:30:41',
            ),
            402 =>
            array (
                'id' => 403,
                'question_id' => 101,
                'answer' => 'Such practice is legal.',
                'correct' => 1,
                'definition' => 'Because there is no apparent connection between the lower commission rates and race, there is no illegal act. If the broker, however, were to emphasize the need to sell due to increased crime caused by the presence of this minority group, then this would be blockbusting.',
                'created_at' => '2015-08-29 13:32:32',
                'updated_at' => '2015-08-29 13:32:32',
            ),
            403 =>
            array (
                'id' => 404,
                'question_id' => 101,
                'answer' => 'Brokers cannot lower their standard rate of commission.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:32:56',
                'updated_at' => '2015-08-29 13:32:56',
            ),
            404 =>
            array (
                'id' => 405,
                'question_id' => 102,
                'answer' => 'is not obliged to show any offer that he feels the owner will reject.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:34:28',
                'updated_at' => '2015-08-29 13:34:28',
            ),
            405 =>
            array (
                'id' => 406,
                'question_id' => 102,
                'answer' => 'must present all offers.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:34:40',
                'updated_at' => '2015-08-29 13:34:40',
            ),
            406 =>
            array (
                'id' => 407,
                'question_id' => 102,
                'answer' => 'must get instructions form the owner about presenting offers to members of the religion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:35:09',
                'updated_at' => '2015-08-29 13:35:09',
            ),
            407 =>
            array (
                'id' => 408,
                'question_id' => 102,
                'answer' => 'could be punished by HUD if a complaint is filed against him.',
                'correct' => 1,
                'definition' => 'The mere acceptance of a listing with a discriminatory restriction is an illegal act. Not presenting all offers involves licensing law.',
                'created_at' => '2015-08-29 13:36:11',
                'updated_at' => '2015-08-29 13:36:11',
            ),
            408 =>
            array (
                'id' => 409,
                'question_id' => 103,
                'answer' => 'Taking into consideration the borrower\'s race in fixing the terms of a loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:37:20',
                'updated_at' => '2015-08-29 13:37:20',
            ),
            409 =>
            array (
                'id' => 410,
                'question_id' => 103,
                'answer' => 'Inquiring into the financial capacity of a prospective purchaser of a dwelling who belongs to a minority group.',
                'correct' => 1,
                'definition' => 'Race is not a propert factor, but financial capacity is proper regardless of whether the borrower is from a minority group.',
                'created_at' => '2015-08-29 13:38:23',
                'updated_at' => '2015-08-29 13:38:23',
            ),
            410 =>
            array (
                'id' => 411,
                'question_id' => 103,
                'answer' => 'Using a form that contains a fill-in section for applicant\'s religion and national origin',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:39:01',
                'updated_at' => '2015-08-29 13:39:01',
            ),
            411 =>
            array (
                'id' => 412,
                'question_id' => 103,
                'answer' => 'Refusing to rent to a pregnant woman',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:39:15',
                'updated_at' => '2015-08-29 13:39:15',
            ),
            412 =>
            array (
                'id' => 413,
                'question_id' => 104,
            'answer' => 'Person(s) entitled to possession and ownership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:40:22',
                'updated_at' => '2015-08-29 13:40:22',
            ),
            413 =>
            array (
                'id' => 414,
                'question_id' => 104,
                'answer' => 'Rents and operating expenses',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:40:34',
                'updated_at' => '2015-08-29 13:40:34',
            ),
            414 =>
            array (
                'id' => 415,
                'question_id' => 104,
                'answer' => 'Zoning',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 13:40:58',
                'updated_at' => '2015-08-29 13:40:58',
            ),
            415 =>
            array (
                'id' => 416,
                'question_id' => 104,
                'answer' => 'Original cost of the center',
                'correct' => 1,
            'definition' => 'The appraiser must know, for example, whether he or she is appraising the leasehold estate (lessee) or the leased fee (lessor). Rents and operating expenses are vital in the capitalization or income approach to valuation.',
                'created_at' => '2015-08-29 13:42:07',
                'updated_at' => '2015-08-29 13:42:07',
            ),
            416 =>
            array (
                'id' => 417,
                'question_id' => 105,
                'answer' => 'It can be revoked by the principal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:26:18',
                'updated_at' => '2015-08-29 21:26:18',
            ),
            417 =>
            array (
                'id' => 418,
                'question_id' => 105,
                'answer' => 'It is terminated by the death of the principal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:26:34',
                'updated_at' => '2015-08-29 21:26:34',
            ),
            418 =>
            array (
                'id' => 419,
                'question_id' => 105,
                'answer' => 'It is illegal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:26:48',
                'updated_at' => '2015-08-29 21:26:48',
            ),
            419 =>
            array (
                'id' => 420,
                'question_id' => 105,
                'answer' => 'It generally is irrevocable.',
                'correct' => 1,
                'definition' => 'An agency coupled with an interest is different from a normal listing in that the agent has some direct interest in the property. Assume a broker owns a parcel that the broker sells to the a developer on the condition that the developer give the broker an exclusive listing to sell the completed condominium development. This unique type of agency cannot be revoked nor is it terminated by death.',
                'created_at' => '2015-08-29 21:28:42',
                'updated_at' => '2015-10-26 09:58:33',
            ),
            420 =>
            array (
                'id' => 421,
                'question_id' => 106,
                'answer' => 'Obedience',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:30:08',
                'updated_at' => '2015-08-29 21:30:08',
            ),
            421 =>
            array (
                'id' => 422,
                'question_id' => 106,
                'answer' => 'Care',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:30:19',
                'updated_at' => '2015-08-29 21:30:19',
            ),
            422 =>
            array (
                'id' => 423,
                'question_id' => 106,
                'answer' => 'Loyalty',
                'correct' => 1,
                'definition' => 'While all the choices are fiduciary duties, this question describes the duty of loyalty. The activity described would violate most licensing laws as well.',
                'created_at' => '2015-08-29 21:31:10',
                'updated_at' => '2015-08-29 21:31:10',
            ),
            423 =>
            array (
                'id' => 424,
                'question_id' => 106,
                'answer' => 'Skill',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:44:10',
                'updated_at' => '2015-08-29 21:44:10',
            ),
            424 =>
            array (
                'id' => 425,
                'question_id' => 107,
                'answer' => 'Signing listings',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:46:41',
                'updated_at' => '2015-08-29 21:46:41',
            ),
            425 =>
            array (
                'id' => 426,
                'question_id' => 107,
                'answer' => 'Leasing property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:48:07',
                'updated_at' => '2015-08-29 21:48:07',
            ),
            426 =>
            array (
                'id' => 427,
                'question_id' => 107,
                'answer' => 'Selling the broker\'s own property',
                'correct' => 1,
                'definition' => 'In selling his or her own property, the broker is acting as a principal, not an agent. Brokers can represent buyers, but they should clearly disclose this representation in the sales contract.',
                'created_at' => '2015-08-29 21:53:08',
                'updated_at' => '2015-08-29 21:53:08',
            ),
            427 =>
            array (
                'id' => 428,
                'question_id' => 107,
                'answer' => 'Representing the purchaser',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 21:54:09',
                'updated_at' => '2015-08-29 21:54:09',
            ),
            428 =>
            array (
                'id' => 429,
                'question_id' => 108,
                'answer' => 'Special',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:00:10',
                'updated_at' => '2015-08-29 22:00:10',
            ),
            429 =>
            array (
                'id' => 430,
                'question_id' => 108,
                'answer' => 'Limited',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:00:21',
                'updated_at' => '2015-08-29 22:00:21',
            ),
            430 =>
            array (
                'id' => 431,
                'question_id' => 108,
                'answer' => 'Indirect',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:00:33',
                'updated_at' => '2015-08-29 22:00:33',
            ),
            431 =>
            array (
                'id' => 432,
                'question_id' => 108,
                'answer' => 'General',
                'correct' => 1,
                'definition' => 'The property manager typically has continuing duties to manage and maintain the property, unlike a broker who has limited or special duties to find a ready, willing, and able buyer.',
                'created_at' => '2015-08-29 22:02:13',
                'updated_at' => '2015-08-29 22:02:13',
            ),
            432 =>
            array (
                'id' => 433,
                'question_id' => 109,
                'answer' => 'physical apperance.',
                'correct' => 1,
                'definition' => 'To much attention to physical appearance may imply some preference base on discriminatory grounds, and this is a violation of the federal Fair Housing Act.',
                'created_at' => '2015-08-29 22:06:00',
                'updated_at' => '2015-08-29 22:06:00',
            ),
            433 =>
            array (
                'id' => 434,
                'question_id' => 109,
                'answer' => 'credit rating.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:08:40',
                'updated_at' => '2015-08-29 22:08:40',
            ),
            434 =>
            array (
                'id' => 435,
                'question_id' => 109,
                'answer' => 'profession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:08:53',
                'updated_at' => '2015-08-29 22:08:53',
            ),
            435 =>
            array (
                'id' => 436,
                'question_id' => 109,
                'answer' => 'understanding of the house rules.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:09:14',
                'updated_at' => '2015-08-29 22:09:14',
            ),
            436 =>
            array (
                'id' => 437,
                'question_id' => 110,
                'answer' => 'rely on a warranty deed as proof of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:14:03',
                'updated_at' => '2015-08-29 22:14:03',
            ),
            437 =>
            array (
                'id' => 438,
                'question_id' => 110,
                'answer' => 'establish ownership by a suit to quiet title',
                'correct' => 1,
                'definition' => 'The best way to clear up the title gap is to get a court opinion rather than just an opinion from the grantor. A new abstract won\'t be able to show why there was a break in the chain of title.',
                'created_at' => '2015-08-29 22:15:43',
                'updated_at' => '2015-08-29 22:15:43',
            ),
            438 =>
            array (
                'id' => 439,
                'question_id' => 110,
                'answer' => 'prepare and record a new abstract of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:16:21',
                'updated_at' => '2015-08-29 22:16:21',
            ),
            439 =>
            array (
                'id' => 440,
                'question_id' => 110,
                'answer' => 'secure an affidavit from the grantor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:16:38',
                'updated_at' => '2015-08-29 22:16:38',
            ),
            440 =>
            array (
                'id' => 441,
                'question_id' => 111,
                'answer' => 'Title insurance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:19:16',
                'updated_at' => '2015-08-29 22:19:16',
            ),
            441 =>
            array (
                'id' => 442,
                'question_id' => 111,
                'answer' => 'Lender\'s credit report fee',
                'correct' => 1,
                'definition' => 'Some lenders collect their own fees and give escrow only the net loan amount.',
                'created_at' => '2015-08-29 22:19:35',
                'updated_at' => '2015-08-29 22:20:45',
            ),
            442 =>
            array (
                'id' => 443,
                'question_id' => 111,
                'answer' => 'Attorney\'s fees for preparing the closing document',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:21:11',
                'updated_at' => '2015-08-29 22:21:11',
            ),
            443 =>
            array (
                'id' => 444,
                'question_id' => 111,
                'answer' => 'The conveyance tax',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:21:26',
                'updated_at' => '2015-08-29 22:21:26',
            ),
            444 =>
            array (
                'id' => 445,
                'question_id' => 112,
                'answer' => 'Tax prorations',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:22:23',
                'updated_at' => '2015-08-29 22:22:23',
            ),
            445 =>
            array (
                'id' => 446,
                'question_id' => 112,
                'answer' => 'The escrow fee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:22:42',
                'updated_at' => '2015-08-29 22:22:42',
            ),
            446 =>
            array (
                'id' => 447,
                'question_id' => 112,
                'answer' => 'Income tax deductions',
                'correct' => 1,
                'definition' => 'The RESPA statement would include tax prorations, the escrow fee and closing costs, but not all tax deductions, such as depreciation.',
                'created_at' => '2015-08-29 22:24:13',
                'updated_at' => '2015-09-19 23:48:04',
            ),
            447 =>
            array (
                'id' => 448,
                'question_id' => 112,
                'answer' => 'Closing costs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:24:31',
                'updated_at' => '2015-08-29 22:24:31',
            ),
            448 =>
            array (
                'id' => 449,
                'question_id' => 113,
                'answer' => 'Amount the seller will receive from the sale',
                'correct' => 1,
                'definition' => 'The seller\'s statement reflects only the seller\'s obligations, not the buyer\'s.',
                'created_at' => '2015-08-29 22:28:16',
                'updated_at' => '2015-08-29 22:28:16',
            ),
            449 =>
            array (
                'id' => 450,
                'question_id' => 113,
                'answer' => 'Amount the buyer will pay at closing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:28:33',
                'updated_at' => '2015-08-29 22:28:33',
            ),
            450 =>
            array (
                'id' => 451,
                'question_id' => 113,
                'answer' => 'Interest rate on the buyer\'s loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:28:51',
                'updated_at' => '2015-08-29 22:28:51',
            ),
            451 =>
            array (
                'id' => 452,
                'question_id' => 113,
                'answer' => 'Buyer\'s attorney\'s fee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:29:10',
                'updated_at' => '2015-08-29 22:29:10',
            ),
            452 =>
            array (
                'id' => 453,
                'question_id' => 114,
                'answer' => 'FHA',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:33:48',
                'updated_at' => '2015-08-29 22:33:48',
            ),
            453 =>
            array (
                'id' => 454,
                'question_id' => 114,
            'answer' => 'Farmer\'s Home Administration (FmHA)',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:34:33',
                'updated_at' => '2015-08-29 22:34:33',
            ),
            454 =>
            array (
                'id' => 455,
                'question_id' => 114,
                'answer' => 'VA',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-08-29 22:34:44',
                'updated_at' => '2015-08-29 22:34:44',
            ),
            455 =>
            array (
                'id' => 456,
                'question_id' => 114,
                'answer' => 'Seller financing',
                'correct' => 1,
                'definition' => 'RESPA is mandatory in all federally related loan transactions.',
                'created_at' => '2015-08-29 22:36:40',
                'updated_at' => '2015-08-29 22:36:40',
            ),
            456 =>
            array (
                'id' => 457,
                'question_id' => 115,
                'answer' => 'the titleholder resides.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 19:58:31',
                'updated_at' => '2015-09-01 19:58:31',
            ),
            457 =>
            array (
                'id' => 458,
                'question_id' => 115,
                'answer' => 'the titleholder has legal residence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 19:58:47',
                'updated_at' => '2015-09-01 19:58:47',
            ),
            458 =>
            array (
                'id' => 459,
                'question_id' => 115,
                'answer' => 'the real estate is located.',
                'correct' => 1,
                'definition' => 'If, for example, contract of sale is signed in Florida the property located in Alaska, the deed should be recorded in Alaska.',
                'created_at' => '2015-09-01 20:00:05',
                'updated_at' => '2015-09-01 20:00:05',
            ),
            459 =>
            array (
                'id' => 460,
                'question_id' => 115,
                'answer' => 'due legal process is to be served.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:00:24',
                'updated_at' => '2015-09-01 20:00:24',
            ),
            460 =>
            array (
                'id' => 461,
                'question_id' => 116,
                'answer' => 'Determine how title is to be held by buyer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:01:05',
                'updated_at' => '2015-10-26 11:33:37',
            ),
            461 =>
            array (
                'id' => 462,
                'question_id' => 116,
                'answer' => 'Show how expenses are to be paid',
                'correct' => 1,
                'definition' => 'The closing statement is the financial blueprint of the transaction.  Determining how a title is held by a buyer and showing the chain of a title concerns a title report.  Showing the location of the property is a tax map.',
                'created_at' => '2015-09-01 20:02:50',
                'updated_at' => '2015-09-01 20:02:50',
            ),
            462 =>
            array (
                'id' => 463,
                'question_id' => 116,
                'answer' => 'Show the chain of title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:03:05',
                'updated_at' => '2015-09-01 20:03:05',
            ),
            463 =>
            array (
                'id' => 464,
                'question_id' => 116,
                'answer' => 'Show the location of the property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:03:49',
                'updated_at' => '2015-09-01 20:03:49',
            ),
            464 =>
            array (
                'id' => 465,
                'question_id' => 117,
                'answer' => 'The seller can cancel the listing prior to the 120th day.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:04:54',
                'updated_at' => '2015-09-01 20:05:09',
            ),
            465 =>
            array (
                'id' => 466,
                'question_id' => 117,
                'answer' => 'The seller can withdraw the property from the market.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:05:35',
                'updated_at' => '2015-09-01 20:05:35',
            ),
            466 =>
            array (
                'id' => 467,
                'question_id' => 117,
                'answer' => 'The broker has earned a commission.',
                'correct' => 1,
                'definition' => 'The broker has a duty to use good-faith efforts to sell the property. Failure to do so is a breach justifying cancellation or withdrawal.',
                'created_at' => '2015-09-01 20:06:27',
                'updated_at' => '2015-09-01 20:06:27',
            ),
            467 =>
            array (
                'id' => 468,
                'question_id' => 117,
                'answer' => 'The broker has breached the contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:06:43',
                'updated_at' => '2015-09-01 20:06:43',
            ),
            468 =>
            array (
                'id' => 469,
                'question_id' => 118,
                'answer' => 'At a real estate commission hearing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:07:21',
                'updated_at' => '2015-09-01 20:07:21',
            ),
            469 =>
            array (
                'id' => 470,
                'question_id' => 118,
                'answer' => 'At an informal meeting of real estate brokers',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:07:39',
                'updated_at' => '2015-09-01 20:07:39',
            ),
            470 =>
            array (
                'id' => 471,
                'question_id' => 118,
                'answer' => 'At a formal meeting of real estate brokers of their firm',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:08:00',
                'updated_at' => '2015-09-01 20:08:00',
            ),
            471 =>
            array (
                'id' => 472,
                'question_id' => 118,
                'answer' => 'At a meeting between the seller and listing broker',
                'correct' => 1,
                'definition' => 'Only broker and seller can negotiate the commission rate. If two or more conspire to fix rates in their community, this attempt to fix commission will violate state and federal antitrust laws.',
                'created_at' => '2015-09-01 20:09:10',
                'updated_at' => '2015-09-01 20:09:10',
            ),
            472 =>
            array (
                'id' => 473,
                'question_id' => 119,
                'answer' => 'A open listing may be terminated by the owner at any time prior to performance.',
                'correct' => 1,
                'definition' => 'Open listings are generally unilateral contracts that can be cancelled prior to substantial performance. A seller can give many open listings but owes a commission only to the broker who is the procuring cause of the sale.',
                'created_at' => '2015-09-01 20:11:02',
                'updated_at' => '2015-09-01 20:11:02',
            ),
            473 =>
            array (
                'id' => 474,
                'question_id' => 119,
                'answer' => 'An owner may not enter into an open listing contract with more than two brokers at a time.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:11:34',
                'updated_at' => '2015-09-01 20:11:34',
            ),
            474 =>
            array (
                'id' => 475,
                'question_id' => 119,
                'answer' => 'An open listing must contain a definite termination date.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:11:54',
                'updated_at' => '2015-09-01 20:11:54',
            ),
            475 =>
            array (
                'id' => 476,
                'question_id' => 119,
                'answer' => 'An open listing is illegal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:12:09',
                'updated_at' => '2015-09-01 20:12:09',
            ),
            476 =>
            array (
                'id' => 477,
                'question_id' => 120,
                'answer' => 'principal broker whether or not a sale results.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:13:00',
                'updated_at' => '2015-09-01 20:13:00',
            ),
            477 =>
            array (
                'id' => 478,
                'question_id' => 120,
                'answer' => 'seller if a sale results.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:13:17',
                'updated_at' => '2015-09-01 20:13:17',
            ),
            478 =>
            array (
                'id' => 479,
                'question_id' => 120,
                'answer' => 'buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:13:30',
                'updated_at' => '2015-09-01 20:13:30',
            ),
            479 =>
            array (
                'id' => 480,
                'question_id' => 120,
                'answer' => 'salesperson whether or not a sale results.',
                'correct' => 1,
                'definition' => 'The salesperson, especially if an independent contractor, pays for most out-of-pocket expenses in connection with a listing, except that the broker often pays for advertising.',
                'created_at' => '2015-09-01 20:14:24',
                'updated_at' => '2015-09-01 20:14:24',
            ),
            480 =>
            array (
                'id' => 481,
                'question_id' => 121,
                'answer' => 'Voidable',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:15:15',
                'updated_at' => '2015-09-01 20:15:15',
            ),
            481 =>
            array (
                'id' => 482,
                'question_id' => 121,
                'answer' => 'Executed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:15:27',
                'updated_at' => '2015-09-01 20:15:27',
            ),
            482 =>
            array (
                'id' => 483,
                'question_id' => 121,
                'answer' => 'Bilateral',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:15:45',
                'updated_at' => '2015-09-01 20:15:45',
            ),
            483 =>
            array (
                'id' => 484,
                'question_id' => 121,
                'answer' => 'Unilateral',
                'correct' => 1,
                'definition' => 'The broker generally is under no obligation to find a buyer. If, however, the broker is the procuring cause of the sale, then the seller owes a commission.',
                'created_at' => '2015-09-01 20:18:44',
                'updated_at' => '2015-09-01 20:18:44',
            ),
            484 =>
            array (
                'id' => 485,
                'question_id' => 122,
                'answer' => 'Exclusive agency',
                'correct' => 1,
            'definition' => 'The seller can reserve the right to sell the property under an exclusive agency (where the seller agrees not to list with other brokers) and under an open listing (in which it can be given to any number of brokers).',
                'created_at' => '2015-09-01 20:21:24',
                'updated_at' => '2015-09-01 20:21:24',
            ),
            485 =>
            array (
                'id' => 486,
                'question_id' => 122,
                'answer' => 'Exclusive right to sell',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:21:43',
                'updated_at' => '2015-09-01 20:21:43',
            ),
            486 =>
            array (
                'id' => 487,
                'question_id' => 122,
                'answer' => 'Multiple',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:21:57',
                'updated_at' => '2015-09-01 20:21:57',
            ),
            487 =>
            array (
                'id' => 488,
                'question_id' => 122,
                'answer' => 'Net',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:22:14',
                'updated_at' => '2015-09-01 20:22:14',
            ),
            488 =>
            array (
                'id' => 489,
                'question_id' => 123,
                'answer' => 'if the property does not sell in 120 days, the listing period is extended for an additional period of time, until the property is sold.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:24:48',
                'updated_at' => '2015-09-01 20:24:48',
            ),
            489 =>
            array (
                'id' => 490,
                'question_id' => 123,
                'answer' => 'if the property is not sold within the 120-day period, the broker will buy it.',
                'correct' => 1,
                'definition' => 'The broker must fully disclose and limitations on his or her obligation to purchase in the event the property is not sold.',
                'created_at' => '2015-09-01 20:29:08',
                'updated_at' => '2015-09-01 20:29:08',
            ),
            490 =>
            array (
                'id' => 491,
                'question_id' => 123,
                'answer' => 'title is guaranteed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:29:21',
                'updated_at' => '2015-09-01 20:29:21',
            ),
            491 =>
            array (
                'id' => 492,
                'question_id' => 123,
                'answer' => 'the property is guaranteed against any defects.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:29:42',
                'updated_at' => '2015-09-01 20:29:42',
            ),
            492 =>
            array (
                'id' => 493,
                'question_id' => 124,
                'answer' => 'A lease is cancelled by mutual agreement of the lessor and lessee.',
                'correct' => 1,
                'definition' => 'A rescission is a return to the status quo. When a lease is cancelled by mutal agreement between the lessor and lessee.',
                'created_at' => '2015-09-01 20:43:49',
                'updated_at' => '2015-09-01 20:43:49',
            ),
            493 =>
            array (
                'id' => 494,
                'question_id' => 124,
                'answer' => 'An offer to purchase is revised by a counterproposal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:44:12',
                'updated_at' => '2015-09-01 20:44:12',
            ),
            494 =>
            array (
                'id' => 495,
                'question_id' => 124,
                'answer' => 'An option to purchase is transferred to a new buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:44:40',
                'updated_at' => '2015-09-01 20:44:40',
            ),
            495 =>
            array (
                'id' => 496,
                'question_id' => 124,
                'answer' => 'A listing results in a commission to a broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:45:02',
                'updated_at' => '2015-09-01 20:45:02',
            ),
            496 =>
            array (
                'id' => 497,
                'question_id' => 125,
                'answer' => 'It is a voidable by the optionor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:47:37',
                'updated_at' => '2015-09-01 20:47:37',
            ),
            497 =>
            array (
                'id' => 498,
                'question_id' => 125,
                'answer' => 'It can be made binding on the optionee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:47:58',
                'updated_at' => '2015-09-01 20:47:58',
            ),
            498 =>
            array (
                'id' => 499,
                'question_id' => 125,
                'answer' => 'It usually is given by the owner.',
                'correct' => 1,
                'definition' => 'The optionor is typically the owner, who receives option money in return for the promise to sell at a specified price to the optionee in the event the optionee decides to buy.',
                'created_at' => '2015-09-01 20:50:06',
                'updated_at' => '2015-09-01 20:50:06',
            ),
            499 =>
            array (
                'id' => 500,
                'question_id' => 125,
                'answer' => 'It can be enforced by a suit filed by the optionor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:50:35',
                'updated_at' => '2015-09-01 20:50:35',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 =>
            array (
                'id' => 501,
                'question_id' => 126,
                'answer' => 'The buyer may assign the option to a third party only with the optionor\'s consent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 20:59:32',
                'updated_at' => '2015-09-01 20:59:32',
            ),
            1 =>
            array (
                'id' => 502,
                'question_id' => 126,
                'answer' => 'The buyer may offer a lower price prior to the expiration of the option without losing her right to exercise the option.',
                'correct' => 1,
                'definition' => 'The buyer\'s lower offer is an independent act and not relevant. Options are contracts and thus are generally assignable unless restricted.',
                'created_at' => '2015-09-01 21:01:36',
                'updated_at' => '2015-09-01 21:01:36',
            ),
            2 =>
            array (
                'id' => 503,
                'question_id' => 126,
                'answer' => 'Only the buyer must sign the option agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 21:02:03',
                'updated_at' => '2015-09-01 21:02:03',
            ),
            3 =>
            array (
                'id' => 504,
                'question_id' => 126,
                'answer' => 'The buyer can exercise the option within a reasonable time after the 18th day.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-01 21:02:45',
                'updated_at' => '2015-09-01 21:02:45',
            ),
            4 =>
            array (
                'id' => 505,
                'question_id' => 127,
                'answer' => 'Refuse to present the counteroffer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:21:23',
                'updated_at' => '2015-09-05 10:21:23',
            ),
            5 =>
            array (
                'id' => 506,
                'question_id' => 127,
                'answer' => 'Alter the counteroffer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:21:39',
                'updated_at' => '2015-09-05 10:21:39',
            ),
            6 =>
            array (
                'id' => 507,
                'question_id' => 127,
                'answer' => 'Follow the seller\'s instruction',
                'correct' => 1,
                'definition' => 'It is the broker\'s duty to follow his principal\'s instructions after explaining all the ramifications of this type of counteroffer.',
                'created_at' => '2015-09-05 10:23:18',
                'updated_at' => '2015-09-05 10:23:18',
            ),
            7 =>
            array (
                'id' => 508,
                'question_id' => 127,
                'answer' => 'Persuade the buyer to recounter at a middle price.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:23:54',
                'updated_at' => '2015-09-05 10:23:54',
            ),
            8 =>
            array (
                'id' => 509,
                'question_id' => 128,
                'answer' => 'an inventory of the furnishings.',
                'correct' => 1,
                'definition' => 'It is common practice to itemize the personal property but not to make a sworn statement as to its condition.',
                'created_at' => '2015-09-05 10:26:38',
                'updated_at' => '2015-09-05 10:26:38',
            ),
            9 =>
            array (
                'id' => 510,
                'question_id' => 128,
                'answer' => 'an affidavit as to the condition of the furnishings.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:27:35',
                'updated_at' => '2015-09-05 10:27:35',
            ),
            10 =>
            array (
                'id' => 511,
                'question_id' => 128,
                'answer' => 'a truth-in-lending disclosure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:27:53',
                'updated_at' => '2015-09-05 10:27:53',
            ),
            11 =>
            array (
                'id' => 512,
                'question_id' => 128,
                'answer' => 'a promissory note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:28:06',
                'updated_at' => '2015-09-05 10:28:06',
            ),
            12 =>
            array (
                'id' => 513,
                'question_id' => 129,
                'answer' => 'punitive damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:29:11',
                'updated_at' => '2015-09-05 10:29:11',
            ),
            13 =>
            array (
                'id' => 514,
                'question_id' => 129,
                'answer' => 'liquidated damages.',
                'correct' => 1,
                'definition' => 'Earnest money is usually a good-faith deposit that can be used by the seller to liquidate the debt in the event the buyer breaches the contract and fails to perform.',
                'created_at' => '2015-09-05 10:30:00',
                'updated_at' => '2015-09-05 10:30:00',
            ),
            14 =>
            array (
                'id' => 515,
                'question_id' => 129,
                'answer' => 'consequential damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:30:20',
                'updated_at' => '2015-09-05 10:30:20',
            ),
            15 =>
            array (
                'id' => 516,
                'question_id' => 129,
                'answer' => 'special damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:30:36',
                'updated_at' => '2015-09-05 10:30:36',
            ),
            16 =>
            array (
                'id' => 517,
                'question_id' => 130,
                'answer' => 'The optionee must sign the option and have it acknowledged.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:31:20',
                'updated_at' => '2015-09-05 10:31:20',
            ),
            17 =>
            array (
                'id' => 518,
                'question_id' => 130,
                'answer' => 'The option money is applied to the purchase price if the option is exercised.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:31:43',
                'updated_at' => '2015-09-05 10:31:43',
            ),
            18 =>
            array (
                'id' => 519,
                'question_id' => 130,
                'answer' => 'The optionee must pay the full purchase price before the option expires.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:32:09',
                'updated_at' => '2015-09-05 10:32:09',
            ),
            19 =>
            array (
                'id' => 520,
                'question_id' => 130,
                'answer' => 'If the option is not exercised, the option money is forfeited.',
                'correct' => 1,
                'definition' => 'Option money is forfeited if the option is not exercised. If the option money were to be refunded, then the option would not have been enforceable, because there really was no consideration--it was illusory. Because the optionee is usually given a short period of time to close after the option is exercised, the full price is often not paid until after the option\'s expiration date. Having the option money applied to the purchase price if the option is exercised is  a matter of agreement and should be covered in the option.',
                'created_at' => '2015-09-05 10:42:20',
                'updated_at' => '2015-09-05 10:42:20',
            ),
            20 =>
            array (
                'id' => 521,
                'question_id' => 131,
                'answer' => 'consideration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:43:14',
                'updated_at' => '2015-09-05 10:43:14',
            ),
            21 =>
            array (
                'id' => 522,
                'question_id' => 131,
                'answer' => 'legality of object.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:43:30',
                'updated_at' => '2015-09-05 10:43:30',
            ),
            22 =>
            array (
                'id' => 523,
                'question_id' => 131,
                'answer' => 'reality of consent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:43:42',
                'updated_at' => '2015-09-05 10:43:42',
            ),
            23 =>
            array (
                'id' => 524,
                'question_id' => 131,
                'answer' => 'legal capacity.',
                'correct' => 1,
            'definition' => 'Legal capacity refers to competency. reality of consent refers to genuine consent in an offer and acceptance (no fraud, misrepresentation, or duress).',
                'created_at' => '2015-09-05 10:44:52',
                'updated_at' => '2015-09-05 10:44:52',
            ),
            24 =>
            array (
                'id' => 525,
                'question_id' => 132,
                'answer' => 'once they are connected to the real estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:49:36',
                'updated_at' => '2015-09-05 10:49:36',
            ),
            25 =>
            array (
                'id' => 526,
                'question_id' => 132,
                'answer' => 'if they are not removed by the tenant upon the expiration of the lease.',
                'correct' => 1,
                'definition' => 'These fixtures belong to the tenant under the trade fixtures exception, although the tenant must remove them by the time the lease expires.',
                'created_at' => '2015-09-05 10:50:40',
                'updated_at' => '2015-09-05 10:50:40',
            ),
            26 =>
            array (
                'id' => 527,
                'question_id' => 132,
                'answer' => 'if the lessee is late with one rent check.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:51:02',
                'updated_at' => '2015-09-05 10:51:02',
            ),
            27 =>
            array (
                'id' => 528,
                'question_id' => 132,
                'answer' => 'if the lessor pays for their upkeep.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:51:24',
                'updated_at' => '2015-09-05 10:51:24',
            ),
            28 =>
            array (
                'id' => 529,
                'question_id' => 133,
                'answer' => 'will not allow the lessee to be disturbed by strangers coming upon the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:53:14',
                'updated_at' => '2015-09-05 10:53:14',
            ),
            29 =>
            array (
                'id' => 530,
                'question_id' => 133,
                'answer' => 'is obligated to make all necessary repairs t the leased premises.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:53:47',
                'updated_at' => '2015-09-05 10:53:47',
            ),
            30 =>
            array (
                'id' => 531,
                'question_id' => 133,
                'answer' => 'promises that the lessee will not be evicted by a person who has title superior to that of the landlord.',
                'correct' => 1,
                'definition' => 'This covenant is breached if the lessee is evicted by the true owner other than the landlord. If a stranger has no valid claim to the property, then the lessee will have to take her or his own protective measures.',
                'created_at' => '2015-09-05 10:56:43',
                'updated_at' => '2015-09-05 10:56:43',
            ),
            31 =>
            array (
                'id' => 532,
                'question_id' => 133,
                'answer' => 'undertakes to protect the lessee from loud noises caused by other tenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:57:16',
                'updated_at' => '2015-09-05 10:57:16',
            ),
            32 =>
            array (
                'id' => 533,
                'question_id' => 134,
                'answer' => 'leasehold estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:58:48',
                'updated_at' => '2015-09-05 10:58:48',
            ),
            33 =>
            array (
                'id' => 534,
                'question_id' => 134,
                'answer' => 'contingent fee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 10:59:21',
                'updated_at' => '2015-09-05 10:59:21',
            ),
            34 =>
            array (
                'id' => 535,
                'question_id' => 134,
                'answer' => 'leased fee.',
                'correct' => 1,
                'definition' => 'The leased fee is the lessor\'s interest, which represents the fee simple title subject to the lease. The lessee\'s interest is called the leasehold estate.',
                'created_at' => '2015-09-05 11:00:13',
                'updated_at' => '2015-09-05 11:00:13',
            ),
            35 =>
            array (
                'id' => 536,
                'question_id' => 134,
                'answer' => 'reverter.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:00:27',
                'updated_at' => '2015-09-05 11:00:27',
            ),
            36 =>
            array (
                'id' => 537,
                'question_id' => 135,
                'answer' => 'private parties.',
                'correct' => 1,
                'definition' => 'Private parties include individuals and corporations, and they buy the mortgages, including FHA mortgages that are sold in the secondary mortgage market by organizations like Freddie Mac. While insurance companies are a good source, mortgage insurance companies insure loans.',
                'created_at' => '2015-09-05 11:02:25',
                'updated_at' => '2015-09-05 11:02:25',
            ),
            37 =>
            array (
                'id' => 538,
                'question_id' => 135,
                'answer' => 'the FHA.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:02:42',
                'updated_at' => '2015-09-05 11:02:42',
            ),
            38 =>
            array (
                'id' => 539,
                'question_id' => 135,
                'answer' => 'mortgage insurance companies.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:02:55',
                'updated_at' => '2015-09-05 11:02:55',
            ),
            39 =>
            array (
                'id' => 540,
                'question_id' => 135,
                'answer' => 'Freddie Mac.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:03:08',
                'updated_at' => '2015-09-05 11:03:08',
            ),
            40 =>
            array (
                'id' => 541,
                'question_id' => 136,
                'answer' => 'a sale-leaseback.',
                'correct' => 1,
                'definition' => 'By selling its plant and then renting it back, the seller gains funds but does not have to relocate, otherwise, the owner would have to refinance its plant to raise the money.',
                'created_at' => '2015-09-05 11:04:38',
                'updated_at' => '2015-09-05 11:04:38',
            ),
            41 =>
            array (
                'id' => 542,
                'question_id' => 136,
                'answer' => 'a land contract of sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:04:54',
                'updated_at' => '2015-09-05 11:04:54',
            ),
            42 =>
            array (
                'id' => 543,
                'question_id' => 136,
                'answer' => 'a real estate investment trust.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:05:10',
                'updated_at' => '2015-09-05 11:05:10',
            ),
            43 =>
            array (
                'id' => 544,
                'question_id' => 136,
                'answer' => 'an assignment of rents.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:05:23',
                'updated_at' => '2015-09-05 11:05:23',
            ),
            44 =>
            array (
                'id' => 545,
                'question_id' => 137,
                'answer' => 'insured by a private mortgage insurance company',
                'correct' => 1,
            'definition' => 'A popular private insurance program is that of the Mortgage Guaranty Insurance Corporation, or MGIC, which enables a lender to make a 90% loan despite the lender\'s policy of usually making only 70% loans, because the insurance (paid for by the borrower) would insure the lender for that additional 20%. FHA has an insurance program for is nonconventional loans.',
                'created_at' => '2015-09-05 11:14:40',
                'updated_at' => '2015-09-05 11:14:40',
            ),
            45 =>
            array (
                'id' => 546,
                'question_id' => 137,
                'answer' => 'insured by the FHA.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:15:02',
                'updated_at' => '2015-09-05 11:15:02',
            ),
            46 =>
            array (
                'id' => 547,
                'question_id' => 137,
                'answer' => 'guaranteed by the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:15:21',
                'updated_at' => '2015-09-05 11:15:21',
            ),
            47 =>
            array (
                'id' => 548,
                'question_id' => 137,
                'answer' => 'guaranteed by the VA.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:15:34',
                'updated_at' => '2015-09-05 11:15:34',
            ),
            48 =>
            array (
                'id' => 549,
                'question_id' => 138,
                'answer' => 'Liquidation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:18:08',
                'updated_at' => '2015-09-05 11:18:08',
            ),
            49 =>
            array (
                'id' => 550,
                'question_id' => 138,
                'answer' => 'Refinancing',
                'correct' => 1,
            'definition' => 'In a typical refinancing, the borrower receives cash for part of the equity in the property. For example, assume a property owner has a property worth $100,000 with a $40,000 mortgage.  The owner might refinance for a $60,000 loan, thus raising $20,000 in cash (after paying off the $40,00 mortgage) but reducing the equity from $60,000 to $40,000.',
                'created_at' => '2015-09-05 11:18:25',
                'updated_at' => '2015-09-05 11:20:35',
            ),
            50 =>
            array (
                'id' => 551,
                'question_id' => 138,
                'answer' => 'Exchanging',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:21:20',
                'updated_at' => '2015-09-05 11:21:20',
            ),
            51 =>
            array (
                'id' => 552,
                'question_id' => 138,
                'answer' => 'Leasing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:21:32',
                'updated_at' => '2015-09-05 11:21:32',
            ),
            52 =>
            array (
                'id' => 553,
                'question_id' => 139,
                'answer' => 'indemnify the lender on a defaulted loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:23:08',
                'updated_at' => '2015-09-05 11:23:08',
            ),
            53 =>
            array (
                'id' => 554,
                'question_id' => 139,
                'answer' => 'qualify the buyer for a new loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:23:24',
                'updated_at' => '2015-09-05 11:23:24',
            ),
            54 =>
            array (
                'id' => 555,
                'question_id' => 139,
                'answer' => 'insure a loan made to a qualified buyer.',
                'correct' => 1,
            'definition' => 'Under a conditional commitment, the FHA agrees to insure a loan (usually for a certain period such as six months), provided the buyer meets FHA qualification standards.',
                'created_at' => '2015-09-05 11:24:44',
                'updated_at' => '2015-09-05 11:24:44',
            ),
            55 =>
            array (
                'id' => 556,
                'question_id' => 139,
                'answer' => 'guarantee the value of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:25:03',
                'updated_at' => '2015-09-05 11:25:03',
            ),
            56 =>
            array (
                'id' => 557,
                'question_id' => 140,
                'answer' => 'a syndicate.',
                'correct' => 1,
                'definition' => 'Syndications are usually set up in the form of a limited partnership where the limited partners pool their money and have the real estate venture managed by a general partner.',
                'created_at' => '2015-09-05 11:27:08',
                'updated_at' => '2015-09-05 11:27:08',
            ),
            57 =>
            array (
                'id' => 558,
                'question_id' => 140,
                'answer' => 'growing equity.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:27:26',
                'updated_at' => '2015-09-05 11:27:26',
            ),
            58 =>
            array (
                'id' => 559,
                'question_id' => 140,
                'answer' => 'a participating group.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:27:43',
                'updated_at' => '2015-09-05 11:27:43',
            ),
            59 =>
            array (
                'id' => 560,
                'question_id' => 140,
                'answer' => 'an investment trust.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:27:57',
                'updated_at' => '2015-09-05 11:27:57',
            ),
            60 =>
            array (
                'id' => 561,
                'question_id' => 141,
                'answer' => 'insure real estate loans.',
                'correct' => 1,
                'definition' => 'Under the Mutual Mortgage Protection Plan, the FHA insures loans made by approved lenders to qualified borrowers.',
                'created_at' => '2015-09-05 11:29:25',
                'updated_at' => '2015-09-05 11:29:25',
            ),
            61 =>
            array (
                'id' => 562,
                'question_id' => 141,
                'answer' => 'build public housing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:30:14',
                'updated_at' => '2015-09-05 11:30:14',
            ),
            62 =>
            array (
                'id' => 563,
                'question_id' => 141,
                'answer' => 'act as a secondary mortgage market.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:30:32',
                'updated_at' => '2015-09-05 11:30:32',
            ),
            63 =>
            array (
                'id' => 564,
                'question_id' => 141,
                'answer' => 'establish discount points.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:30:46',
                'updated_at' => '2015-09-05 11:30:46',
            ),
            64 =>
            array (
                'id' => 565,
                'question_id' => 142,
                'answer' => 'Her monthly payments are lower than before.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:31:40',
                'updated_at' => '2015-09-05 11:31:40',
            ),
            65 =>
            array (
                'id' => 566,
                'question_id' => 142,
                'answer' => 'Her tax depreciation allowance is increased.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:32:00',
                'updated_at' => '2015-09-05 11:32:00',
            ),
            66 =>
            array (
                'id' => 567,
                'question_id' => 142,
                'answer' => 'A capital gains tax is due.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:32:18',
                'updated_at' => '2015-09-05 11:32:18',
            ),
            67 =>
            array (
                'id' => 568,
                'question_id' => 142,
                'answer' => 'Her debt service is higher than before.',
                'correct' => 1,
                'definition' => 'Her monthly principal and interest payments will increase, because she\'s increased her loan amount by the $30,000 equity should received in cash.',
                'created_at' => '2015-09-05 11:33:32',
                'updated_at' => '2015-09-05 11:33:32',
            ),
            68 =>
            array (
                'id' => 569,
                'question_id' => 143,
                'answer' => 'The veteran owns investment property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:34:42',
                'updated_at' => '2015-09-05 11:34:42',
            ),
            69 =>
            array (
                'id' => 570,
                'question_id' => 143,
                'answer' => 'The sales prices exceeds the Certificate of Reasonable Value.',
                'correct' => 1,
                'definition' => 'While a 100% loan is possible under VA, the loan cannot exceed the appraisal as indicated by the Certificate of Reasonable Value.',
                'created_at' => '2015-09-05 11:35:57',
                'updated_at' => '2015-09-05 11:35:57',
            ),
            70 =>
            array (
                'id' => 571,
                'question_id' => 143,
                'answer' => 'The veteran is in the National Guard.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:36:22',
                'updated_at' => '2015-09-05 11:36:22',
            ),
            71 =>
            array (
                'id' => 572,
                'question_id' => 143,
                'answer' => 'The veteran is unmarried.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:38:11',
                'updated_at' => '2015-09-05 11:38:11',
            ),
            72 =>
            array (
                'id' => 573,
                'question_id' => 144,
                'answer' => 'veteran cannot qualify for the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:40:10',
                'updated_at' => '2015-09-05 11:40:10',
            ),
            73 =>
            array (
                'id' => 574,
                'question_id' => 144,
                'answer' => 'sales price exceeds the FHA appraisal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:40:33',
                'updated_at' => '2015-09-05 11:40:33',
            ),
            74 =>
            array (
                'id' => 575,
                'question_id' => 144,
                'answer' => 'property cannot be repaired to meet minimum property requirements.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:41:02',
                'updated_at' => '2015-09-05 11:41:02',
            ),
            75 =>
            array (
                'id' => 576,
                'question_id' => 144,
                'answer' => 'veteran decides the house is to small.',
                'correct' => 1,
                'definition' => 'FHA sales contracts usually contain a contingency provision allowing the buyer to cancel either if the buyer cannot qualify for the loan or if the sales price exceeds the FHA appraisal.',
                'created_at' => '2015-09-05 11:42:31',
                'updated_at' => '2015-09-05 11:42:31',
            ),
            76 =>
            array (
                'id' => 577,
                'question_id' => 145,
                'answer' => 'the buyer must accept the deed signed only by the husband.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:45:20',
                'updated_at' => '2015-09-05 11:45:20',
            ),
            77 =>
            array (
                'id' => 578,
                'question_id' => 145,
                'answer' => 'The buyer can sue the wife for breach of contract.',
                'correct' => 1,
                'definition' => 'To get clear title, the buyer needs a deed from both husband and wife and can sue the wife for specific performance. The divorce had no legal effect on the transaction.',
                'created_at' => '2015-09-05 11:47:56',
                'updated_at' => '2015-09-05 11:47:56',
            ),
            78 =>
            array (
                'id' => 579,
                'question_id' => 145,
                'answer' => 'The husband must reduce the balance due.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:48:26',
                'updated_at' => '2015-09-05 11:48:26',
            ),
            79 =>
            array (
                'id' => 580,
                'question_id' => 145,
                'answer' => 'the husband can rescind the contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:49:44',
                'updated_at' => '2015-09-05 11:49:44',
            ),
            80 =>
            array (
                'id' => 581,
                'question_id' => 146,
                'answer' => 'Fannie Mac',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:55:56',
                'updated_at' => '2015-09-05 11:55:56',
            ),
            81 =>
            array (
                'id' => 582,
                'question_id' => 146,
                'answer' => 'Farmer Mac',
                'correct' => 1,
                'definition' => 'Farmer Mac is the Federal Agricultural Mortgage Corporation that operates like Fannie Mae and Freddie Mac by pooling agricultural loans from lenders fro sale as securities.',
                'created_at' => '2015-09-05 11:56:07',
                'updated_at' => '2015-09-05 11:58:30',
            ),
            82 =>
            array (
                'id' => 583,
                'question_id' => 146,
                'answer' => 'Ginnie Mac',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:56:26',
                'updated_at' => '2015-09-05 11:56:26',
            ),
            83 =>
            array (
                'id' => 584,
                'question_id' => 146,
                'answer' => 'Freddie Mac',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 11:56:56',
                'updated_at' => '2015-09-05 11:56:56',
            ),
            84 =>
            array (
                'id' => 585,
                'question_id' => 147,
                'answer' => 'be willing to subordinate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:14:01',
                'updated_at' => '2015-09-05 12:14:01',
            ),
            85 =>
            array (
                'id' => 586,
                'question_id' => 147,
                'answer' => 'purchase subject to the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:14:29',
                'updated_at' => '2015-09-05 12:14:29',
            ),
            86 =>
            array (
                'id' => 587,
                'question_id' => 147,
                'answer' => 'buy on land contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:14:47',
                'updated_at' => '2015-09-05 12:14:47',
            ),
            87 =>
            array (
                'id' => 588,
                'question_id' => 147,
                'answer' => 'assume the loan.',
                'correct' => 1,
            'definition' => 'In a true assumption, the buyer replaces the seller for primary responsibility on the loan, but the seller remains secondarily liable (unless there is a novation).',
                'created_at' => '2015-09-05 12:15:57',
                'updated_at' => '2015-09-05 12:15:57',
            ),
            88 =>
            array (
                'id' => 589,
                'question_id' => 148,
                'answer' => 'Monthly payments of $275',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:18:47',
                'updated_at' => '2015-09-05 12:18:47',
            ),
            89 =>
            array (
                'id' => 590,
                'question_id' => 148,
                'answer' => '360 monthly payments',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:19:04',
                'updated_at' => '2015-10-26 11:22:08',
            ),
            90 =>
            array (
                'id' => 591,
                'question_id' => 148,
                'answer' => 'No charge for credit',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:19:18',
                'updated_at' => '2015-09-05 12:19:18',
            ),
            91 =>
            array (
                'id' => 592,
                'question_id' => 148,
                'answer' => 'Financing by Second Federal Savings',
                'correct' => 1,
                'definition' => 'Financing by Second Federal Savings is such a general statement that it does not trigger the required disclosures that a specific statement such as the specific other answers would trigger.',
                'created_at' => '2015-09-05 12:21:22',
                'updated_at' => '2015-09-05 12:21:22',
            ),
            92 =>
            array (
                'id' => 593,
                'question_id' => 149,
                'answer' => 'terms of repayment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:28:25',
                'updated_at' => '2015-09-05 12:28:25',
            ),
            93 =>
            array (
                'id' => 594,
                'question_id' => 149,
                'answer' => 'amount of down payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:28:42',
                'updated_at' => '2015-09-05 12:28:42',
            ),
            94 =>
            array (
                'id' => 595,
                'question_id' => 149,
                'answer' => 'simple interest rate.',
                'correct' => 1,
                'definition' => 'It also should state whether any increase in the annual percentage rate is possible.',
                'created_at' => '2015-09-05 12:29:24',
                'updated_at' => '2015-09-05 12:29:24',
            ),
            95 =>
            array (
                'id' => 596,
                'question_id' => 149,
                'answer' => 'annual percentage rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:29:42',
                'updated_at' => '2015-09-05 12:29:42',
            ),
            96 =>
            array (
                'id' => 597,
                'question_id' => 150,
                'answer' => 'a customer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:31:04',
                'updated_at' => '2015-09-05 12:31:04',
            ),
            97 =>
            array (
                'id' => 598,
                'question_id' => 150,
                'answer' => 'an arranger.',
                'correct' => 1,
                'definition' => 'If deemed an "arranger," the broker is required to make the necessary disclosures concerning credit terms.',
                'created_at' => '2015-09-05 12:31:56',
                'updated_at' => '2015-09-05 12:31:56',
            ),
            98 =>
            array (
                'id' => 599,
                'question_id' => 150,
                'answer' => 'a lender.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:32:11',
                'updated_at' => '2015-09-05 12:32:11',
            ),
            99 =>
            array (
                'id' => 600,
                'question_id' => 150,
                'answer' => 'a borrower.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:32:23',
                'updated_at' => '2015-09-05 12:32:23',
            ),
            100 =>
            array (
                'id' => 601,
                'question_id' => 151,
                'answer' => 'Appraised value of the residence',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:33:41',
                'updated_at' => '2015-09-05 12:33:41',
            ),
            101 =>
            array (
                'id' => 602,
                'question_id' => 151,
                'answer' => 'Total charges required for settlement of a real estate transaction',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:34:08',
                'updated_at' => '2015-09-05 12:34:08',
            ),
            102 =>
            array (
                'id' => 603,
                'question_id' => 151,
                'answer' => 'Total finance charges',
                'correct' => 1,
            'definition' => 'Regulation Z is concerned with credit disclosure only, not appraisal amount or closing costs (covered by RESPA).',
                'created_at' => '2015-09-05 12:35:31',
                'updated_at' => '2015-09-05 12:35:31',
            ),
            103 =>
            array (
                'id' => 604,
                'question_id' => 151,
                'answer' => 'Cost of a survey',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:35:49',
                'updated_at' => '2015-09-05 12:35:49',
            ),
            104 =>
            array (
                'id' => 605,
                'question_id' => 152,
                'answer' => 'sheriff\'s deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:36:59',
                'updated_at' => '2015-09-05 12:36:59',
            ),
            105 =>
            array (
                'id' => 606,
                'question_id' => 152,
                'answer' => 'commissioner\'s deed.',
                'correct' => 1,
                'definition' => 'The court appoints a commissioner to conduct the public auction and sale, including executing the commissioner\'s deed transferring legal title to the purchaser.',
                'created_at' => '2015-09-05 12:37:53',
                'updated_at' => '2015-09-05 12:37:53',
            ),
            106 =>
            array (
                'id' => 607,
                'question_id' => 152,
                'answer' => 'quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:38:11',
                'updated_at' => '2015-09-05 12:38:11',
            ),
            107 =>
            array (
                'id' => 608,
                'question_id' => 152,
                'answer' => 'guardian\'s deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:38:33',
                'updated_at' => '2015-09-05 12:38:33',
            ),
            108 =>
            array (
                'id' => 609,
                'question_id' => 153,
                'answer' => 'each payment has the same amount applying to principal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:45:29',
                'updated_at' => '2015-09-05 12:45:29',
            ),
            109 =>
            array (
                'id' => 610,
                'question_id' => 153,
                'answer' => 'there will be a balloon payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:45:43',
                'updated_at' => '2015-09-05 12:45:43',
            ),
            110 =>
            array (
                'id' => 611,
                'question_id' => 153,
                'answer' => 'the amount applying to principal increases with each payment.',
                'correct' => 1,
                'definition' => 'With amortized payments, the monthly amount remains the same, but a portion of that amount is applied each month to reduce the principal. In the early years, most of the payment is applied to interest; in the later years move is applied to principal, with no balloon payment due at the end of the loan term.',
                'created_at' => '2015-09-05 12:47:12',
                'updated_at' => '2015-09-05 12:47:12',
            ),
            111 =>
            array (
                'id' => 612,
                'question_id' => 153,
                'answer' => 'there is a lump sum payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:47:40',
                'updated_at' => '2015-09-05 12:47:40',
            ),
            112 =>
            array (
                'id' => 613,
                'question_id' => 154,
                'answer' => 'It must be signed by all owners for it to be an effective lien against the entire property.',
                'correct' => 1,
                'definition' => 'Because all owners must sign, most lenders require a title policy to identify the owners. Death of a mortgagor does not trigger any survivorship rights in the mortgagee.',
                'created_at' => '2015-09-05 12:58:15',
                'updated_at' => '2015-09-05 12:58:15',
            ),
            113 =>
            array (
                'id' => 614,
                'question_id' => 154,
                'answer' => 'Upon the death of one out of two tenants-in-common mortgagors, one-half of the property would pass to the mortgagee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:59:36',
                'updated_at' => '2015-09-05 12:59:36',
            ),
            114 =>
            array (
                'id' => 615,
                'question_id' => 154,
                'answer' => 'It must be signed by each mortgagee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 12:59:56',
                'updated_at' => '2015-09-05 12:59:56',
            ),
            115 =>
            array (
                'id' => 616,
                'question_id' => 154,
                'answer' => 'Only the promissory not is recorded.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:00:13',
                'updated_at' => '2015-09-05 13:00:13',
            ),
            116 =>
            array (
                'id' => 617,
                'question_id' => 155,
                'answer' => 'amortization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:01:48',
                'updated_at' => '2015-09-05 13:01:48',
            ),
            117 =>
            array (
                'id' => 618,
                'question_id' => 155,
                'answer' => 'redemption.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:01:59',
                'updated_at' => '2015-09-05 13:01:59',
            ),
            118 =>
            array (
                'id' => 619,
                'question_id' => 155,
                'answer' => 'acceleration.',
                'correct' => 1,
                'definition' => 'The equitable redemption period is typically shorter with a deed of trust. Amortization and redemption refer to the provisions of a note.',
                'created_at' => '2015-09-05 13:03:05',
                'updated_at' => '2015-09-05 13:03:05',
            ),
            119 =>
            array (
                'id' => 620,
                'question_id' => 155,
                'answer' => 'capitalization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:04:24',
                'updated_at' => '2015-09-05 13:04:24',
            ),
            120 =>
            array (
                'id' => 621,
                'question_id' => 156,
                'answer' => 'with interest in addition.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:05:24',
                'updated_at' => '2015-09-05 13:05:24',
            ),
            121 =>
            array (
                'id' => 622,
                'question_id' => 156,
                'answer' => 'of interest only.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:05:38',
                'updated_at' => '2015-09-05 13:05:38',
            ),
            122 =>
            array (
                'id' => 623,
                'question_id' => 156,
                'answer' => 'of principal only.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:05:53',
                'updated_at' => '2015-09-05 13:05:53',
            ),
            123 =>
            array (
                'id' => 624,
                'question_id' => 156,
                'answer' => 'that include both principal and interest.',
                'correct' => 1,
                'definition' => 'With an amortized loan, there is a zero balance of interest and principal at the end of the loan term.',
                'created_at' => '2015-09-05 13:06:33',
                'updated_at' => '2015-09-05 13:06:33',
            ),
            124 =>
            array (
                'id' => 625,
                'question_id' => 157,
                'answer' => 'as added assurance the building will be built.',
                'correct' => 1,
                'definition' => 'Sometimes, contractors get into financial difficulty. The performance bond is designed to provide funds to get the job completed.',
                'created_at' => '2015-09-05 13:08:03',
                'updated_at' => '2015-09-05 13:08:03',
            ),
            125 =>
            array (
                'id' => 626,
                'question_id' => 157,
                'answer' => 'to reduce the risk of subordination.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:08:22',
                'updated_at' => '2015-09-05 13:08:22',
            ),
            126 =>
            array (
                'id' => 627,
                'question_id' => 157,
                'answer' => 'to eliminate forfeiture.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:08:43',
                'updated_at' => '2015-09-05 13:08:43',
            ),
            127 =>
            array (
                'id' => 628,
                'question_id' => 157,
                'answer' => 'as a hedge against inflation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-05 13:09:08',
                'updated_at' => '2015-09-05 13:09:08',
            ),
            128 =>
            array (
                'id' => 629,
                'question_id' => 158,
                'answer' => 'The second deed of trust is now the first lien, since it was recorded first.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:22:06',
                'updated_at' => '2015-09-08 21:22:06',
            ),
            129 =>
            array (
                'id' => 630,
                'question_id' => 158,
                'answer' => 'The original first deed of trust is still a lien.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:22:25',
                'updated_at' => '2015-09-08 21:22:25',
            ),
            130 =>
            array (
                'id' => 631,
                'question_id' => 158,
                'answer' => 'the second deed of trust is no longer a lien.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:22:44',
                'updated_at' => '2015-09-08 21:22:44',
            ),
            131 =>
            array (
                'id' => 632,
                'question_id' => 158,
                'answer' => 'The new deed of trust takes priority over the second deed of trust.',
                'correct' => 1,
                'definition' => 'If it were not for the subordination clause, the second deed of trust would now be the first lien, since it was recorded first.',
                'created_at' => '2015-09-08 21:24:14',
                'updated_at' => '2015-09-08 21:24:14',
            ),
            132 =>
            array (
                'id' => 633,
                'question_id' => 159,
                'answer' => 'a partial release agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:25:06',
                'updated_at' => '2015-09-08 21:25:06',
            ),
            133 =>
            array (
                'id' => 634,
                'question_id' => 159,
                'answer' => 'an assignment agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:25:25',
                'updated_at' => '2015-09-08 21:25:25',
            ),
            134 =>
            array (
                'id' => 635,
                'question_id' => 159,
                'answer' => 'a subordination agreement.',
                'correct' => 1,
                'definition' => 'With a subordination clause, the lender under a first mortgage may agree to become junior to a subsequent mortgage. This agreement often is used when the holder of raw land sells it by way of a deed and purchase-money mortgage to a buyer who will later obtain a construction loan from a lender who requires that it be in a first lien position.',
                'created_at' => '2015-09-08 21:28:46',
                'updated_at' => '2015-09-08 21:28:46',
            ),
            135 =>
            array (
                'id' => 636,
                'question_id' => 159,
                'answer' => 'a release agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:29:09',
                'updated_at' => '2015-09-08 21:29:09',
            ),
            136 =>
            array (
                'id' => 637,
                'question_id' => 160,
                'answer' => 'defeasance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:30:06',
                'updated_at' => '2015-09-08 21:30:06',
            ),
            137 =>
            array (
                'id' => 638,
                'question_id' => 160,
                'answer' => 'defect of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:30:18',
                'updated_at' => '2015-09-08 21:30:18',
            ),
            138 =>
            array (
                'id' => 639,
                'question_id' => 160,
                'answer' => 'redemption.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:30:28',
                'updated_at' => '2015-09-08 21:30:28',
            ),
            139 =>
            array (
                'id' => 640,
                'question_id' => 160,
                'answer' => 'foreclosure.',
                'correct' => 1,
                'definition' => 'The foreclosure process is structured to close off any rights of the mortgagor/debtor to redeem his or her property.',
                'created_at' => '2015-09-08 21:31:19',
                'updated_at' => '2015-09-08 21:31:19',
            ),
            140 =>
            array (
                'id' => 641,
                'question_id' => 161,
                'answer' => 'A mortgage creates a lien even if it does not convey title to the holder.',
                'correct' => 1,
                'definition' => 'In title theory states, the mortgage actually conveys legal title; most states are lien-theory states in which the mortgage creates a lien even though no legal title is transferred. The mortgage secures the note.',
                'created_at' => '2015-09-08 21:32:09',
                'updated_at' => '2015-09-08 21:33:25',
            ),
            141 =>
            array (
                'id' => 642,
                'question_id' => 161,
                'answer' => 'A mortgage is secured by a promissory note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:33:53',
                'updated_at' => '2015-09-08 21:33:53',
            ),
            142 =>
            array (
                'id' => 643,
                'question_id' => 161,
                'answer' => 'A mortgage is not needed if the loan is under $10,000.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:34:15',
                'updated_at' => '2015-09-08 21:34:44',
            ),
            143 =>
            array (
                'id' => 644,
                'question_id' => 161,
                'answer' => 'Only banks use a mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:34:32',
                'updated_at' => '2015-09-08 21:34:32',
            ),
            144 =>
            array (
                'id' => 645,
                'question_id' => 162,
                'answer' => 'All-inclusive monthly payments',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:35:39',
                'updated_at' => '2015-09-08 21:35:39',
            ),
            145 =>
            array (
                'id' => 646,
                'question_id' => 162,
                'answer' => 'An existing underlying mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:35:55',
                'updated_at' => '2015-09-08 21:35:55',
            ),
            146 =>
            array (
                'id' => 647,
                'question_id' => 162,
                'answer' => 'Profit from interest override',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:36:10',
                'updated_at' => '2015-09-08 21:36:10',
            ),
            147 =>
            array (
                'id' => 648,
                'question_id' => 162,
                'answer' => 'Priority of lien by wraparound mortgage',
                'correct' => 1,
                'definition' => 'The wraparound mortgage is typically junior to the underlying mortgage that it wraps around.',
                'created_at' => '2015-09-08 21:39:33',
                'updated_at' => '2015-09-08 21:39:33',
            ),
            148 =>
            array (
                'id' => 649,
                'question_id' => 163,
                'answer' => 'changes depending on the borrower\'s income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:40:49',
                'updated_at' => '2015-09-08 21:40:49',
            ),
            149 =>
            array (
                'id' => 650,
                'question_id' => 163,
                'answer' => 'never varies.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:41:00',
                'updated_at' => '2015-09-08 21:41:00',
            ),
            150 =>
            array (
                'id' => 651,
                'question_id' => 163,
                'answer' => 'varies one time each year.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:41:17',
                'updated_at' => '2015-09-08 21:41:17',
            ),
            151 =>
            array (
                'id' => 652,
                'question_id' => 163,
                'answer' => 'varies according to an agreed-on market indicator.',
                'correct' => 1,
                'definition' => 'The rate may, for example, be subject to change according to changes in the U.S. Treasury Bill rate. Such changes may occur several times a year, although there are specified ceilings on the amount of change.',
                'created_at' => '2015-09-08 21:42:46',
                'updated_at' => '2015-09-08 21:42:46',
            ),
            152 =>
            array (
                'id' => 653,
                'question_id' => 164,
                'answer' => 'a FHA loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:44:04',
                'updated_at' => '2015-09-08 21:44:04',
            ),
            153 =>
            array (
                'id' => 654,
                'question_id' => 164,
                'answer' => 'a fixed-rate loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:44:16',
                'updated_at' => '2015-09-08 21:44:16',
            ),
            154 =>
            array (
                'id' => 655,
                'question_id' => 164,
                'answer' => 'an adjustable rate indexed loan.',
                'correct' => 1,
                'definition' => 'The specific index used, however, differs from lender to lender.',
                'created_at' => '2015-09-08 21:44:58',
                'updated_at' => '2015-09-08 21:44:58',
            ),
            155 =>
            array (
                'id' => 656,
                'question_id' => 164,
                'answer' => 'a flexible-payment loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:45:27',
                'updated_at' => '2015-09-08 21:45:27',
            ),
            156 =>
            array (
                'id' => 657,
                'question_id' => 165,
                'answer' => 'Use the $30,000 as an earnest money deposit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:48:01',
                'updated_at' => '2015-09-08 21:48:01',
            ),
            157 =>
            array (
                'id' => 658,
                'question_id' => 165,
                'answer' => 'Have the seller apply at least $10,000 of the down payment to reduce the mortgage balance',
                'correct' => 1,
                'definition' => 'The down payment is $30,000; it is too much for the buyer to put up as a good-faith deposit. The first and second mortgage total $100,00, so the buyer should have $10,000 applied to reduce the mortgage balance. The danger in allowing the underlying mortgage balance to exceed the balance owed to the seller is that the buyer could pay off the seller who then leaves town. The buyer is left with the outstanding balance on the property even though he has met all his obligations to the seller.',
                'created_at' => '2015-09-08 21:52:23',
                'updated_at' => '2015-09-08 21:52:23',
            ),
            158 =>
            array (
                'id' => 659,
                'question_id' => 165,
                'answer' => 'have the buyer refuse to sign the note',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:52:44',
                'updated_at' => '2015-09-08 21:52:44',
            ),
            159 =>
            array (
                'id' => 660,
                'question_id' => 165,
                'answer' => 'Put all mortgage payments into a trust account until maturity of the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:53:17',
                'updated_at' => '2015-09-08 21:53:17',
            ),
            160 =>
            array (
                'id' => 661,
                'question_id' => 166,
                'answer' => 'a release clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 21:57:07',
                'updated_at' => '2015-09-08 21:57:07',
            ),
            161 =>
            array (
                'id' => 662,
                'question_id' => 166,
                'answer' => 'an alienation clause.',
                'correct' => 1,
                'definition' => 'The alienation clause also is called the acceleration clause or due-on-sale clause. It has been upheld by the U.S. Supreme Court as an enforceable device for the lender to call in the loan if the property is transferred without the lender\'s consent.',
                'created_at' => '2015-09-08 21:59:58',
                'updated_at' => '2015-09-08 21:59:58',
            ),
            162 =>
            array (
                'id' => 663,
                'question_id' => 166,
                'answer' => 'a subordination clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:00:18',
                'updated_at' => '2015-09-08 22:00:18',
            ),
            163 =>
            array (
                'id' => 664,
                'question_id' => 166,
                'answer' => 'a prepayment clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:00:33',
                'updated_at' => '2015-09-08 22:00:33',
            ),
            164 =>
            array (
                'id' => 665,
                'question_id' => 167,
                'answer' => 'Mortgagor\'s right to prepay',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:01:20',
                'updated_at' => '2015-09-08 22:01:20',
            ),
            165 =>
            array (
                'id' => 666,
                'question_id' => 167,
                'answer' => 'Mortgagee\'s demand for full payment',
                'correct' => 1,
                'definition' => 'The acceleration clause may be triggered by default or by transfer of the property.',
                'created_at' => '2015-09-08 22:02:13',
                'updated_at' => '2015-09-08 22:02:13',
            ),
            166 =>
            array (
                'id' => 667,
                'question_id' => 167,
                'answer' => 'Foreclosure',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:02:26',
                'updated_at' => '2015-09-08 22:02:26',
            ),
            167 =>
            array (
                'id' => 668,
                'question_id' => 167,
                'answer' => 'Promissory note',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:02:39',
                'updated_at' => '2015-09-08 22:02:39',
            ),
            168 =>
            array (
                'id' => 669,
                'question_id' => 168,
                'answer' => 'Agreement of sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:04:38',
                'updated_at' => '2015-09-08 22:04:38',
            ),
            169 =>
            array (
                'id' => 670,
                'question_id' => 168,
                'answer' => 'Assumption of mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:04:51',
                'updated_at' => '2015-09-08 22:04:51',
            ),
            170 =>
            array (
                'id' => 671,
                'question_id' => 168,
                'answer' => 'Wraparound mortgage',
                'correct' => 1,
                'definition' => 'The sales price is $175,000 with the seller carrying back a second mortgage from which the seller will make the payments on the $100,000 first loan at 10%. The $150,000 mortgage wraps around the seller\'s $100,000 first mortgage, although the buyer does not assume the first mortgage.',
                'created_at' => '2015-09-08 22:06:29',
                'updated_at' => '2015-09-08 22:06:29',
            ),
            171 =>
            array (
                'id' => 672,
                'question_id' => 168,
                'answer' => 'Conventional mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:06:46',
                'updated_at' => '2015-09-08 22:06:46',
            ),
            172 =>
            array (
                'id' => 673,
                'question_id' => 169,
                'answer' => 'procedure for declaring a debt due and payable upon default.',
                'correct' => 1,
                'definition' => '',
                'created_at' => '2015-09-08 22:07:57',
                'updated_at' => '2015-09-08 22:07:57',
            ),
            173 =>
            array (
                'id' => 674,
                'question_id' => 169,
                'answer' => 'penalty for early payment of the note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:08:28',
                'updated_at' => '2015-09-08 22:08:28',
            ),
            174 =>
            array (
                'id' => 675,
                'question_id' => 169,
                'answer' => 'gradually increasing interest rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:08:43',
                'updated_at' => '2015-09-08 22:08:43',
            ),
            175 =>
            array (
                'id' => 676,
                'question_id' => 169,
                'answer' => 'method of foreclosure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:08:58',
                'updated_at' => '2015-09-08 22:08:58',
            ),
            176 =>
            array (
                'id' => 677,
                'question_id' => 170,
                'answer' => 'Unit-cost-in-place',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:09:52',
                'updated_at' => '2015-09-08 22:09:52',
            ),
            177 =>
            array (
                'id' => 678,
                'question_id' => 170,
                'answer' => 'Quantity survey',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:10:06',
                'updated_at' => '2015-09-08 22:10:06',
            ),
            178 =>
            array (
                'id' => 679,
                'question_id' => 170,
                'answer' => 'Comparative unit',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:10:24',
                'updated_at' => '2015-09-08 22:10:24',
            ),
            179 =>
            array (
                'id' => 680,
                'question_id' => 170,
                'answer' => 'Engineering breakdown',
                'correct' => 1,
                'definition' => 'Engineering breakdown refers to a method of estimating accrued depreciation.',
                'created_at' => '2015-09-08 22:11:32',
                'updated_at' => '2015-09-08 22:11:32',
            ),
            180 =>
            array (
                'id' => 681,
                'question_id' => 171,
                'answer' => 'minus depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:27:07',
                'updated_at' => '2015-09-08 22:27:07',
            ),
            181 =>
            array (
                'id' => 682,
                'question_id' => 171,
                'answer' => 'plus land value.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:27:23',
                'updated_at' => '2015-09-08 22:27:23',
            ),
            182 =>
            array (
                'id' => 683,
                'question_id' => 171,
                'answer' => 'with one having the same utility.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:27:42',
                'updated_at' => '2015-09-08 22:27:42',
            ),
            183 =>
            array (
                'id' => 684,
                'question_id' => 171,
                'answer' => 'with the same or very similar materials.',
                'correct' => 1,
                'definition' => 'Reproduction cost involves the cost to make an exact replica. Replacement cost involves producing a replacement structure with similar utility. After this cost is determined, the appraiser subtracts a figure for accrued depreciation in arriving at an estimate of value under the cost or summation approach.',
                'created_at' => '2015-09-08 22:30:28',
                'updated_at' => '2015-09-08 22:30:28',
            ),
            184 =>
            array (
                'id' => 685,
                'question_id' => 172,
                'answer' => 'Capitalization method',
                'correct' => 1,
                'definition' => 'The capitalization approach converts income into value.',
                'created_at' => '2015-09-08 22:32:47',
                'updated_at' => '2015-09-08 22:32:47',
            ),
            185 =>
            array (
                'id' => 686,
                'question_id' => 172,
                'answer' => 'Comparison method',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:33:20',
                'updated_at' => '2015-09-08 22:33:20',
            ),
            186 =>
            array (
                'id' => 687,
                'question_id' => 172,
                'answer' => 'Replacement cost method',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:33:34',
                'updated_at' => '2015-09-08 22:33:34',
            ),
            187 =>
            array (
                'id' => 688,
                'question_id' => 172,
                'answer' => 'Summation method',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:33:47',
                'updated_at' => '2015-09-08 22:33:47',
            ),
            188 =>
            array (
                'id' => 689,
                'question_id' => 173,
                'answer' => 'Operating expenses',
                'correct' => 1,
                'definition' => 'Operating income is only relevant when using the income or capitalization approach to value.',
                'created_at' => '2015-09-08 22:37:01',
                'updated_at' => '2015-09-08 22:37:01',
            ),
            189 =>
            array (
                'id' => 690,
                'question_id' => 173,
                'answer' => 'Depreciation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:37:23',
                'updated_at' => '2015-09-08 22:37:23',
            ),
            190 =>
            array (
                'id' => 691,
                'question_id' => 173,
                'answer' => 'Land value',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:37:35',
                'updated_at' => '2015-09-08 22:37:35',
            ),
            191 =>
            array (
                'id' => 692,
                'question_id' => 173,
                'answer' => 'Replacement cost',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:37:47',
                'updated_at' => '2015-09-08 22:37:47',
            ),
            192 =>
            array (
                'id' => 693,
                'question_id' => 174,
                'answer' => 'Owner\'s rights and interests',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:38:41',
                'updated_at' => '2015-09-08 22:38:41',
            ),
            193 =>
            array (
                'id' => 694,
                'question_id' => 174,
                'answer' => 'Easements and adequacy of public improvements and utilities',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:39:19',
                'updated_at' => '2015-09-08 22:39:19',
            ),
            194 =>
            array (
                'id' => 695,
                'question_id' => 174,
                'answer' => 'Zoning',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:39:37',
                'updated_at' => '2015-09-08 22:39:37',
            ),
            195 =>
            array (
                'id' => 696,
                'question_id' => 174,
                'answer' => 'Foreclosure rights',
                'correct' => 1,
                'definition' => 'Foreclosure rights aren\'t relevant.',
                'created_at' => '2015-09-08 22:40:25',
                'updated_at' => '2015-09-08 22:40:25',
            ),
            196 =>
            array (
                'id' => 697,
                'question_id' => 175,
                'answer' => '2.5%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:42:30',
                'updated_at' => '2015-09-08 22:42:30',
            ),
            197 =>
            array (
                'id' => 698,
                'question_id' => 175,
                'answer' => '4%',
                'correct' => 1,
                'definition' => 'Recapture rate is designed to give a return of the investment in a building that will be theoretically worth zero at the end of its useful life. Thus, each year the building with depreciate 4%.',
                'created_at' => '2015-09-08 22:43:41',
                'updated_at' => '2015-09-08 22:43:41',
            ),
            198 =>
            array (
                'id' => 699,
                'question_id' => 175,
                'answer' => '20%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:43:57',
                'updated_at' => '2015-09-08 22:43:57',
            ),
            199 =>
            array (
                'id' => 700,
                'question_id' => 175,
                'answer' => '25%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-08 22:44:09',
                'updated_at' => '2015-09-08 22:44:09',
            ),
            200 =>
            array (
                'id' => 701,
                'question_id' => 176,
                'answer' => 'Poor condition of floors, ceilings, beams, and other structural elements',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:42:40',
                'updated_at' => '2015-09-12 13:42:40',
            ),
            201 =>
            array (
                'id' => 702,
                'question_id' => 176,
                'answer' => 'Basement damage due to flooding',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:42:59',
                'updated_at' => '2015-09-12 13:42:59',
            ),
            202 =>
            array (
                'id' => 703,
                'question_id' => 176,
                'answer' => 'Peeled paint on the exterior and siding',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:43:14',
                'updated_at' => '2015-09-12 13:43:14',
            ),
            203 =>
            array (
                'id' => 704,
                'question_id' => 176,
                'answer' => 'Rundown neighborhood',
                'correct' => 1,
                'definition' => 'This is an exampe of external obsolescence.',
                'created_at' => '2015-09-12 13:43:58',
                'updated_at' => '2015-10-26 09:56:20',
            ),
            204 =>
            array (
                'id' => 705,
                'question_id' => 177,
                'answer' => 'market data comparables.',
                'correct' => 1,
                'definition' => 'Market value is determined by an analysis of market conditions, not the personal desires of the parties.',
                'created_at' => '2015-09-12 13:45:59',
                'updated_at' => '2015-09-12 13:45:59',
            ),
            205 =>
            array (
                'id' => 706,
                'question_id' => 177,
                'answer' => 'the tenant\'s demands.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:46:31',
                'updated_at' => '2015-09-12 13:46:31',
            ),
            206 =>
            array (
                'id' => 707,
                'question_id' => 177,
                'answer' => 'the friend\'s demands.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:46:46',
                'updated_at' => '2015-09-12 13:46:46',
            ),
            207 =>
            array (
                'id' => 708,
                'question_id' => 177,
                'answer' => 'the lender\'s opinion.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:47:03',
                'updated_at' => '2015-09-12 13:47:03',
            ),
            208 =>
            array (
                'id' => 709,
                'question_id' => 178,
                'answer' => '$135,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:48:10',
                'updated_at' => '2015-09-12 13:48:10',
            ),
            209 =>
            array (
                'id' => 710,
                'question_id' => 178,
                'answer' => '$135,000 plus commission.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:48:37',
                'updated_at' => '2015-09-12 13:48:37',
            ),
            210 =>
            array (
                'id' => 711,
                'question_id' => 178,
                'answer' => 'based on the square-foot cost of the house next door.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:49:04',
                'updated_at' => '2015-09-12 13:49:04',
            ),
            211 =>
            array (
                'id' => 712,
                'question_id' => 178,
                'answer' => 'based on more comparables.',
                'correct' => 1,
                'definition' => 'Listing prices should be based on several comparable sales and not just one, especially where the properties are different sizes.',
                'created_at' => '2015-09-12 13:50:52',
                'updated_at' => '2015-09-12 13:50:52',
            ),
            212 =>
            array (
                'id' => 713,
                'question_id' => 179,
                'answer' => 'zoning of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:51:43',
                'updated_at' => '2015-09-12 13:51:43',
            ),
            213 =>
            array (
                'id' => 714,
                'question_id' => 179,
                'answer' => 'a stated definition of value and the purpose of the appraisal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:52:07',
                'updated_at' => '2015-09-12 13:52:07',
            ),
            214 =>
            array (
                'id' => 715,
                'question_id' => 179,
                'answer' => 'a description of the property and type of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:52:24',
                'updated_at' => '2015-09-12 13:52:24',
            ),
            215 =>
            array (
                'id' => 716,
                'question_id' => 179,
                'answer' => 'the types of financing that are available for the property.',
                'correct' => 1,
                'definition' => 'Financing is not relevant to an appraisal, but zoning is, because it affects the highest and best use.  The appraiser also needs to know whether to look for insurance value, market value, loan value, and so on.',
                'created_at' => '2015-09-12 13:53:37',
                'updated_at' => '2015-09-12 13:53:37',
            ),
            216 =>
            array (
                'id' => 717,
                'question_id' => 180,
                'answer' => 'the real estate manager is not concerned with the economic use of capital.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 13:55:47',
                'updated_at' => '2015-09-12 13:55:47',
            ),
            217 =>
            array (
                'id' => 718,
                'question_id' => 180,
                'answer' => 'the manufacturer can curtail supply in a falling market.',
                'correct' => 1,
                'definition' => 'In a falling market, the manager of real estate cannot decrease the supply of unrented units.',
                'created_at' => '2015-09-12 13:59:21',
                'updated_at' => '2015-09-12 13:59:21',
            ),
            218 =>
            array (
                'id' => 719,
                'question_id' => 180,
                'answer' => 'the manufacturer  must be licensed must be licensed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 14:00:38',
                'updated_at' => '2015-09-12 14:00:38',
            ),
            219 =>
            array (
                'id' => 720,
                'question_id' => 180,
                'answer' => 'there is no difference.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-12 14:00:52',
                'updated_at' => '2015-09-12 14:00:52',
            ),
            220 =>
            array (
                'id' => 721,
                'question_id' => 181,
                'answer' => 'capitalization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:09:02',
                'updated_at' => '2015-09-13 19:09:02',
            ),
            221 =>
            array (
                'id' => 722,
                'question_id' => 181,
                'answer' => 'modernization.',
                'correct' => 1,
                'definition' => 'Certain outdated design problems can be corrected by modernization, such as expanding a room or replacing an obsolete plumbing system.',
                'created_at' => '2015-09-13 19:09:54',
                'updated_at' => '2015-09-13 19:09:54',
            ),
            222 =>
            array (
                'id' => 723,
                'question_id' => 181,
                'answer' => 'dedpreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:10:07',
                'updated_at' => '2015-09-13 19:10:07',
            ),
            223 =>
            array (
                'id' => 724,
                'question_id' => 181,
                'answer' => 'specialization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:10:19',
                'updated_at' => '2015-09-13 19:10:19',
            ),
            224 =>
            array (
                'id' => 725,
                'question_id' => 182,
                'answer' => 'omit a management fee if the property is managed by the owner.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:11:08',
                'updated_at' => '2015-09-13 19:11:08',
            ),
            225 =>
            array (
                'id' => 726,
                'question_id' => 182,
                'answer' => 'include the owner\'s income taxes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:11:22',
                'updated_at' => '2015-09-13 19:11:22',
            ),
            226 =>
            array (
                'id' => 727,
                'question_id' => 182,
                'answer' => 'deduct the owner\'s income taxes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:11:35',
                'updated_at' => '2015-09-13 19:11:35',
            ),
            227 =>
            array (
                'id' => 728,
                'question_id' => 182,
                'answer' => 'deduct typical vacancy and bad debt collection losses.',
                'correct' => 1,
                'definition' => 'Vacancy and bad debt losses must be taken into consideration, whereas personal income tax aspects are not relevant.',
                'created_at' => '2015-09-13 19:12:34',
                'updated_at' => '2015-09-13 19:12:34',
            ),
            228 =>
            array (
                'id' => 729,
                'question_id' => 183,
                'answer' => 'Financially feasible use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:13:21',
                'updated_at' => '2015-09-13 19:13:21',
            ),
            229 =>
            array (
                'id' => 730,
                'question_id' => 183,
                'answer' => 'Compatibility with surrounding land uses.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:13:34',
                'updated_at' => '2015-09-13 19:13:34',
            ),
            230 =>
            array (
                'id' => 731,
                'question_id' => 183,
                'answer' => 'Legally permissible use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:13:45',
                'updated_at' => '2015-09-13 19:13:45',
            ),
            231 =>
            array (
                'id' => 732,
                'question_id' => 183,
                'answer' => 'Production of highest gross income',
                'correct' => 1,
                'definition' => 'The highest and best use is concerned with that use which will produce the highest net income or yield.',
                'created_at' => '2015-09-13 19:14:31',
                'updated_at' => '2015-09-13 19:14:52',
            ),
            232 =>
            array (
                'id' => 733,
                'question_id' => 184,
                'answer' => 'Pedestrian traffic',
                'correct' => 1,
                'definition' => 'Pedestrian traffic patterns are more appropriate for a retail establishment like a shopping center.',
                'created_at' => '2015-09-13 19:16:41',
                'updated_at' => '2015-09-13 19:16:41',
            ),
            233 =>
            array (
                'id' => 734,
                'question_id' => 184,
                'answer' => 'Ceiling height',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:16:58',
                'updated_at' => '2015-09-13 19:16:58',
            ),
            234 =>
            array (
                'id' => 735,
                'question_id' => 184,
                'answer' => 'Capacity of water and electrical services',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:17:16',
                'updated_at' => '2015-09-13 19:17:16',
            ),
            235 =>
            array (
                'id' => 736,
                'question_id' => 184,
                'answer' => 'Capacity of floor load factors',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:17:27',
                'updated_at' => '2015-09-13 19:17:27',
            ),
            236 =>
            array (
                'id' => 737,
                'question_id' => 185,
                'answer' => 'The rate of depreciation is speeded up.',
                'correct' => 1,
                'definition' => 'Neglect will speed up the rate of physical deterioration.',
                'created_at' => '2015-09-13 19:18:19',
                'updated_at' => '2015-09-13 19:22:09',
            ),
            237 =>
            array (
                'id' => 738,
                'question_id' => 185,
                'answer' => 'The rate of obsolescence is speeded up.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:18:45',
                'updated_at' => '2015-09-13 19:18:45',
            ),
            238 =>
            array (
                'id' => 739,
                'question_id' => 185,
                'answer' => 'the rate of depreciation is slowed down.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:21:27',
                'updated_at' => '2015-09-13 19:21:27',
            ),
            239 =>
            array (
                'id' => 740,
                'question_id' => 185,
                'answer' => 'The rate of obsolescence is slowed down.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 19:21:44',
                'updated_at' => '2015-09-13 19:21:44',
            ),
            240 =>
            array (
                'id' => 741,
                'question_id' => 186,
                'answer' => 'Interval ownership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:04:11',
                'updated_at' => '2015-09-13 20:04:11',
            ),
            241 =>
            array (
                'id' => 742,
                'question_id' => 186,
                'answer' => 'Floating-use periods',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:04:24',
                'updated_at' => '2015-09-13 20:04:24',
            ),
            242 =>
            array (
                'id' => 743,
                'question_id' => 186,
                'answer' => 'Prepaid vacations',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:04:38',
                'updated_at' => '2015-09-13 20:04:38',
            ),
            243 =>
            array (
                'id' => 744,
                'question_id' => 186,
                'answer' => 'Escalating rents',
                'correct' => 1,
            'definition' => 'There are many forms of time-share ownership--time interval (like tenants in common), license to use, vacation lease, and club members. Often, the time periods fluctuate over the years, and they can be exchanged. The concept is attractive to people who vacation frequently in the same resort (and get tired of increased hotel rates).',
                'created_at' => '2015-09-13 20:06:13',
                'updated_at' => '2015-09-13 20:06:13',
            ),
            244 =>
            array (
                'id' => 745,
                'question_id' => 187,
                'answer' => 'Subject property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:07:18',
                'updated_at' => '2015-09-13 20:07:18',
            ),
            245 =>
            array (
                'id' => 746,
                'question_id' => 187,
                'answer' => 'Comparable property',
                'correct' => 1,
                'definition' => 'The value of the comparable is adjusted upward or downward, depending on whether it has a feature different from the subject property.',
                'created_at' => '2015-09-13 20:08:06',
                'updated_at' => '2015-09-13 20:08:06',
            ),
            246 =>
            array (
                'id' => 747,
                'question_id' => 187,
                'answer' => 'Both properties',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:08:21',
                'updated_at' => '2015-09-13 20:08:21',
            ),
            247 =>
            array (
                'id' => 748,
                'question_id' => 187,
                'answer' => 'Neither property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:08:30',
                'updated_at' => '2015-09-13 20:08:30',
            ),
            248 =>
            array (
                'id' => 749,
                'question_id' => 188,
                'answer' => 'monthly net income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:09:26',
                'updated_at' => '2015-09-13 20:09:26',
            ),
            249 =>
            array (
                'id' => 750,
                'question_id' => 188,
                'answer' => 'monthly gross income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:09:38',
                'updated_at' => '2015-09-13 20:09:38',
            ),
            250 =>
            array (
                'id' => 751,
                'question_id' => 188,
                'answer' => 'annual net income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:09:50',
                'updated_at' => '2015-09-13 20:09:50',
            ),
            251 =>
            array (
                'id' => 752,
                'question_id' => 188,
                'answer' => 'annual gross income.',
                'correct' => 1,
                'definition' => 'The gross income multiplier, used to compare investment property in the market comparison appraisal method, is the ratio between gross income and sales price.',
                'created_at' => '2015-09-13 20:10:44',
                'updated_at' => '2015-09-13 20:10:44',
            ),
            252 =>
            array (
                'id' => 753,
                'question_id' => 189,
                'answer' => 'a small mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:11:51',
                'updated_at' => '2015-09-13 20:12:01',
            ),
            253 =>
            array (
                'id' => 754,
                'question_id' => 189,
                'answer' => 'a 60% loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:12:25',
                'updated_at' => '2015-09-13 20:12:25',
            ),
            254 =>
            array (
                'id' => 755,
                'question_id' => 189,
                'answer' => 'a large mortgage.',
                'correct' => 1,
            'definition' => 'The larger the loan amount, the less cash the buyer has invested in the property--the less cash, the greater leverage (or use of other people\'s money, OPM).',
                'created_at' => '2015-09-13 20:13:15',
                'updated_at' => '2015-09-13 20:13:15',
            ),
            255 =>
            array (
                'id' => 756,
                'question_id' => 189,
                'answer' => 'no mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:13:27',
                'updated_at' => '2015-09-13 20:13:27',
            ),
            256 =>
            array (
                'id' => 757,
                'question_id' => 190,
                'answer' => 'Principal broker',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:14:27',
                'updated_at' => '2015-09-13 20:14:27',
            ),
            257 =>
            array (
                'id' => 758,
                'question_id' => 190,
                'answer' => 'Salesperson',
                'correct' => 1,
                'definition' => 'The sales person must not be compensated on a hourly basis. The principal broker and the broker in charge act in a supervisory capacity. The secretary also is an employee.',
                'created_at' => '2015-09-13 20:14:41',
                'updated_at' => '2015-10-26 10:45:07',
            ),
            258 =>
            array (
                'id' => 759,
                'question_id' => 190,
                'answer' => 'Broker in charge',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:17:00',
                'updated_at' => '2015-09-13 20:17:00',
            ),
            259 =>
            array (
                'id' => 760,
                'question_id' => 190,
                'answer' => 'Secretary',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:17:13',
                'updated_at' => '2015-09-13 20:17:13',
            ),
            260 =>
            array (
                'id' => 761,
                'question_id' => 191,
                'answer' => 'depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:17:56',
                'updated_at' => '2015-09-13 20:17:56',
            ),
            261 =>
            array (
                'id' => 762,
                'question_id' => 191,
                'answer' => 'amortization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:18:08',
                'updated_at' => '2015-09-13 20:18:08',
            ),
            262 =>
            array (
                'id' => 763,
                'question_id' => 191,
                'answer' => 'reconciliation.',
                'correct' => 1,
                'definition' => 'Reconciliation, formerly called correlation, is more than just averaging the three approaches to value; it weighs many factors.',
                'created_at' => '2015-09-13 20:18:56',
                'updated_at' => '2015-09-13 20:18:56',
            ),
            263 =>
            array (
                'id' => 764,
                'question_id' => 191,
                'answer' => 'accrual.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:19:20',
                'updated_at' => '2015-09-13 20:19:20',
            ),
            264 =>
            array (
                'id' => 765,
                'question_id' => 192,
                'answer' => 'mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:20:10',
                'updated_at' => '2015-09-13 20:20:10',
            ),
            265 =>
            array (
                'id' => 766,
                'question_id' => 192,
                'answer' => 'sell.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:20:19',
                'updated_at' => '2015-09-13 20:20:19',
            ),
            266 =>
            array (
                'id' => 767,
                'question_id' => 192,
                'answer' => 'raise rent.',
                'correct' => 1,
                'definition' => 'The rent is fixed for five years. If the lessor mortgages, sells, or wills the property, it will be taken subject to the lease.',
                'created_at' => '2015-09-13 20:20:53',
                'updated_at' => '2015-09-13 20:20:53',
            ),
            267 =>
            array (
                'id' => 768,
                'question_id' => 192,
                'answer' => 'devise.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:21:03',
                'updated_at' => '2015-09-13 20:21:03',
            ),
            268 =>
            array (
                'id' => 769,
                'question_id' => 193,
                'answer' => 'exchanged.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:21:54',
                'updated_at' => '2015-09-13 20:21:54',
            ),
            269 =>
            array (
                'id' => 770,
                'question_id' => 193,
                'answer' => 'deferred.',
                'correct' => 1,
                'definition' => 'Taxes are deferred until the new property is sold.',
                'created_at' => '2015-09-13 20:41:14',
                'updated_at' => '2015-09-13 20:41:14',
            ),
            270 =>
            array (
                'id' => 771,
                'question_id' => 193,
                'answer' => 'forgiven.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:41:25',
                'updated_at' => '2015-09-13 20:41:25',
            ),
            271 =>
            array (
                'id' => 772,
                'question_id' => 193,
                'answer' => 'compounded.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:41:39',
                'updated_at' => '2015-09-13 20:41:39',
            ),
            272 =>
            array (
                'id' => 773,
                'question_id' => 194,
                'answer' => 'Federal income taxes',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:42:24',
                'updated_at' => '2015-09-13 20:42:24',
            ),
            273 =>
            array (
                'id' => 774,
                'question_id' => 194,
                'answer' => 'Capital improvements',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:42:37',
                'updated_at' => '2015-09-13 20:42:37',
            ),
            274 =>
            array (
                'id' => 775,
                'question_id' => 194,
                'answer' => 'Vacancy and debt losses',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:43:02',
                'updated_at' => '2015-09-13 20:43:02',
            ),
            275 =>
            array (
                'id' => 776,
                'question_id' => 194,
                'answer' => 'All ordinary expenses to the property',
                'correct' => 1,
                'definition' => 'Expenses are deducted to arrive at net operating income. Vacancy and bad debt losses are deducted to reflect the gross effective income.',
                'created_at' => '2015-09-13 20:43:48',
                'updated_at' => '2015-09-13 20:43:48',
            ),
            276 =>
            array (
                'id' => 777,
                'question_id' => 195,
                'answer' => 'Sweat equity',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:44:28',
                'updated_at' => '2015-09-13 20:44:28',
            ),
            277 =>
            array (
                'id' => 778,
                'question_id' => 195,
                'answer' => 'Reverse annuity',
                'correct' => 1,
                'definition' => 'The reverse annuity mortgage allows the homeowner to receive monthly payments to help meet living costs. Thus, the inflow and outflow of funds is the reverse of the standard loan.',
                'created_at' => '2015-09-13 20:45:29',
                'updated_at' => '2015-09-13 20:45:29',
            ),
            278 =>
            array (
                'id' => 779,
                'question_id' => 195,
                'answer' => 'Balloon',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:45:50',
                'updated_at' => '2015-09-13 20:45:50',
            ),
            279 =>
            array (
                'id' => 780,
                'question_id' => 195,
                'answer' => 'Graduated payment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:46:00',
                'updated_at' => '2015-09-13 20:46:00',
            ),
            280 =>
            array (
                'id' => 781,
                'question_id' => 196,
                'answer' => 'Tenant',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:46:34',
                'updated_at' => '2015-09-13 20:46:34',
            ),
            281 =>
            array (
                'id' => 782,
                'question_id' => 196,
                'answer' => 'Hotel industry',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:46:42',
                'updated_at' => '2015-09-13 20:46:42',
            ),
            282 =>
            array (
                'id' => 783,
                'question_id' => 196,
                'answer' => 'Lessor',
                'correct' => 1,
                'definition' => 'With inflation, expenses increase while income is frozen by rent control, in which the government puts a lid on rent increases.',
                'created_at' => '2015-09-13 20:47:33',
                'updated_at' => '2015-09-13 20:47:33',
            ),
            283 =>
            array (
                'id' => 784,
                'question_id' => 196,
                'answer' => 'Optionee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:47:49',
                'updated_at' => '2015-09-13 20:47:49',
            ),
            284 =>
            array (
                'id' => 785,
                'question_id' => 197,
                'answer' => 'Limited partnership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:50:37',
                'updated_at' => '2015-09-13 20:50:37',
            ),
            285 =>
            array (
                'id' => 786,
                'question_id' => 197,
                'answer' => 'Syndication',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:50:52',
                'updated_at' => '2015-09-13 20:50:52',
            ),
            286 =>
            array (
                'id' => 787,
                'question_id' => 197,
                'answer' => 'S corporation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:51:02',
                'updated_at' => '2015-09-13 20:51:02',
            ),
            287 =>
            array (
                'id' => 788,
                'question_id' => 197,
                'answer' => 'Joint tenancy',
                'correct' => 1,
                'definition' => 'A security often involves stock or an investment contract, as when one invests in a venture with the expectation of making profits through the efforts of the promoter. The sale of an investment condominium with a mandatory rental pool arrangement involves the sale of a security and thus requires registration with federal and state securities agencies.',
                'created_at' => '2015-09-13 20:52:28',
                'updated_at' => '2015-09-13 20:52:28',
            ),
            288 =>
            array (
                'id' => 789,
                'question_id' => 198,
                'answer' => 'the seller',
                'correct' => 1,
                'definition' => 'The sales associate is the agent of the broker, who is the agent of the seller. Thus, the sales associate is subagent of the seller.',
                'created_at' => '2015-09-13 20:55:52',
                'updated_at' => '2015-09-13 20:55:52',
            ),
            289 =>
            array (
                'id' => 790,
                'question_id' => 198,
                'answer' => 'the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:56:11',
                'updated_at' => '2015-09-13 20:56:11',
            ),
            290 =>
            array (
                'id' => 791,
                'question_id' => 198,
                'answer' => 'the broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:56:20',
                'updated_at' => '2015-09-13 20:56:20',
            ),
            291 =>
            array (
                'id' => 792,
                'question_id' => 198,
                'answer' => 'escrow.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:56:30',
                'updated_at' => '2015-09-13 20:56:30',
            ),
            292 =>
            array (
                'id' => 793,
                'question_id' => 199,
                'answer' => 'Population growth',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:57:48',
                'updated_at' => '2015-09-13 20:57:48',
            ),
            293 =>
            array (
                'id' => 794,
                'question_id' => 199,
                'answer' => 'Transportation and traffic patterns',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:58:10',
                'updated_at' => '2015-09-13 20:58:10',
            ),
            294 =>
            array (
                'id' => 795,
                'question_id' => 199,
                'answer' => 'Study of blighted areas',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 20:58:21',
                'updated_at' => '2015-09-13 20:58:21',
            ),
            295 =>
            array (
                'id' => 796,
                'question_id' => 199,
                'answer' => 'State\'s usury laws',
                'correct' => 1,
                'definition' => 'City planning is not concerned with laws regulating the amount of interest charged on loans.',
                'created_at' => '2015-09-13 20:58:56',
                'updated_at' => '2015-09-13 20:58:56',
            ),
            296 =>
            array (
                'id' => 797,
                'question_id' => 200,
                'answer' => 'Land values would increase.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:01:05',
                'updated_at' => '2015-09-13 21:01:05',
            ),
            297 =>
            array (
                'id' => 798,
                'question_id' => 200,
                'answer' => 'Interim construction loan would be on better terms.',
                'correct' => 1,
                'definition' => 'By subordinating the fee, the collateral or security for the loan now includes both the leasehold and the fee simple estates. The owner would do this only after consulting legal counsel. The prime motivation would be to help the project get completed and thus result in greater sales price to the owner for the property.',
                'created_at' => '2015-09-13 21:02:20',
                'updated_at' => '2015-09-13 21:02:20',
            ),
            298 =>
            array (
                'id' => 799,
                'question_id' => 200,
                'answer' => 'The owner would avoid foreclosure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:02:51',
                'updated_at' => '2015-09-13 21:02:51',
            ),
            299 =>
            array (
                'id' => 800,
                'question_id' => 200,
                'answer' => 'the purchaser could rescind sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:03:05',
                'updated_at' => '2015-09-13 21:03:05',
            ),
            300 =>
            array (
                'id' => 801,
                'question_id' => 201,
                'answer' => 'Criminal penalty',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:05:24',
                'updated_at' => '2015-09-13 21:05:24',
            ),
            301 =>
            array (
                'id' => 802,
                'question_id' => 201,
                'answer' => 'Civil penalty',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:05:36',
                'updated_at' => '2015-09-13 21:05:36',
            ),
            302 =>
            array (
                'id' => 803,
                'question_id' => 201,
                'answer' => 'Rescission of contract',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:05:46',
                'updated_at' => '2015-09-13 21:05:46',
            ),
            303 =>
            array (
                'id' => 804,
                'question_id' => 201,
                'answer' => 'Actual damages multiplied by five',
                'correct' => 1,
                'definition' => 'The antifraud provisions of the federal securities laws provide for stiff penalties, but not multiplied, so it can qualify for a permanent loan.',
                'created_at' => '2015-09-13 21:06:47',
                'updated_at' => '2015-09-13 21:06:47',
            ),
            304 =>
            array (
                'id' => 805,
                'question_id' => 202,
                'answer' => 'Filler loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:07:50',
                'updated_at' => '2015-09-13 21:07:50',
            ),
            305 =>
            array (
                'id' => 806,
                'question_id' => 202,
                'answer' => 'Bridge loan',
                'correct' => 1,
                'definition' => 'A bridge, or swing, loan is often used to carry the property from the time of acquisition until it can be improved or developed, so it can qualify for a permanent loan.',
                'created_at' => '2015-09-13 21:08:40',
                'updated_at' => '2015-09-13 21:08:40',
            ),
            306 =>
            array (
                'id' => 807,
                'question_id' => 202,
                'answer' => 'Subordinate loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:08:56',
                'updated_at' => '2015-09-13 21:08:56',
            ),
            307 =>
            array (
                'id' => 808,
                'question_id' => 202,
                'answer' => 'Conversion loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:09:05',
                'updated_at' => '2015-09-13 21:09:05',
            ),
            308 =>
            array (
                'id' => 809,
                'question_id' => 203,
                'answer' => 'They are useful in revealing encroachments.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:09:58',
                'updated_at' => '2015-09-13 21:09:58',
            ),
            309 =>
            array (
                'id' => 810,
                'question_id' => 203,
                'answer' => 'They are likely to be used when lenders are making a loan on real property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:10:20',
                'updated_at' => '2015-09-13 21:10:20',
            ),
            310 =>
            array (
                'id' => 811,
                'question_id' => 203,
                'answer' => 'They may reveal zoning and setback violations.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:10:39',
                'updated_at' => '2015-09-13 21:10:39',
            ),
            311 =>
            array (
                'id' => 812,
                'question_id' => 203,
                'answer' => 'They are required in every real estate transaction.',
                'correct' => 1,
                'definition' => 'Many transactions close without a survey being ordered. Most lenders require an extended title insurance policy. The policy covers rights of parties in possession, so a survey is usually ordered.',
                'created_at' => '2015-09-13 21:11:56',
                'updated_at' => '2015-09-13 21:11:56',
            ),
            312 =>
            array (
                'id' => 813,
                'question_id' => 204,
                'answer' => 'The interest rate and points are negotiable.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:12:43',
                'updated_at' => '2015-09-13 21:12:43',
            ),
            313 =>
            array (
                'id' => 814,
                'question_id' => 204,
                'answer' => 'Points are based on the amount of the mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:12:57',
                'updated_at' => '2015-09-13 21:12:57',
            ),
            314 =>
            array (
                'id' => 815,
                'question_id' => 204,
                'answer' => 'The insurance premium is payable upfront or added to the loan balance at 3.8% on a maximum loan of $135,000.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:13:38',
                'updated_at' => '2015-09-13 21:13:38',
            ),
            315 =>
            array (
                'id' => 816,
                'question_id' => 204,
                'answer' => 'They are restricted to veterans.',
                'correct' => 1,
            'definition' => 'VA loans are restricted to veterans. FHA loans have an MIP--mortgage insurance premium--paid by the borrower to cover the cost of insurance (payable in one lump sum upfront or financed).',
                'created_at' => '2015-09-13 21:18:59',
                'updated_at' => '2015-09-13 21:18:59',
            ),
            316 =>
            array (
                'id' => 817,
                'question_id' => 205,
                'answer' => 'The man is a subagent of the woman.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:20:34',
                'updated_at' => '2015-09-13 21:20:34',
            ),
            317 =>
            array (
                'id' => 818,
                'question_id' => 205,
                'answer' => 'The woman is the woman\'s principal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:20:47',
                'updated_at' => '2015-09-13 21:20:47',
            ),
            318 =>
            array (
                'id' => 819,
                'question_id' => 205,
                'answer' => 'No agency exists.',
                'correct' => 1,
                'definition' => 'Agency is a consensual relationship. Giving the man the key is inadequate to evidence an intent to have him act on behalf of the woman.',
                'created_at' => '2015-09-13 21:21:57',
                'updated_at' => '2015-09-13 21:21:57',
            ),
            319 =>
            array (
                'id' => 820,
                'question_id' => 205,
                'answer' => 'An implied agency exists.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:22:26',
                'updated_at' => '2015-09-13 21:22:26',
            ),
            320 =>
            array (
                'id' => 821,
                'question_id' => 206,
                'answer' => 'years left on the building lease.',
                'correct' => 1,
                'definition' => 'The tax assessor is concerned with the value of the fee simple interest.',
                'created_at' => '2015-09-13 21:24:16',
                'updated_at' => '2015-09-13 21:24:16',
            ),
            321 =>
            array (
                'id' => 822,
                'question_id' => 206,
                'answer' => 'zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:24:26',
                'updated_at' => '2015-09-13 21:24:26',
            ),
            322 =>
            array (
                'id' => 823,
                'question_id' => 206,
                'answer' => 'condition of structure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:24:59',
                'updated_at' => '2015-09-13 21:24:59',
            ),
            323 =>
            array (
                'id' => 824,
                'question_id' => 206,
                'answer' => 'location.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:25:08',
                'updated_at' => '2015-09-13 21:25:08',
            ),
            324 =>
            array (
                'id' => 825,
                'question_id' => 207,
                'answer' => 'original purchase price.',
                'correct' => 1,
                'definition' => 'The original purchase price has no effect on present value.',
                'created_at' => '2015-09-13 21:26:27',
                'updated_at' => '2015-09-13 21:26:27',
            ),
            325 =>
            array (
                'id' => 826,
                'question_id' => 207,
                'answer' => 'zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:26:45',
                'updated_at' => '2015-09-13 21:26:45',
            ),
            326 =>
            array (
                'id' => 827,
                'question_id' => 207,
                'answer' => 'setback requirements.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:26:55',
                'updated_at' => '2015-09-13 21:26:55',
            ),
            327 =>
            array (
                'id' => 828,
                'question_id' => 207,
                'answer' => 'restrictions on record.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:27:06',
                'updated_at' => '2015-09-13 21:27:06',
            ),
            328 =>
            array (
                'id' => 829,
                'question_id' => 208,
                'answer' => 'make a mental note to see if these items are still there are closing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:29:54',
                'updated_at' => '2015-09-13 21:29:54',
            ),
            329 =>
            array (
                'id' => 830,
                'question_id' => 208,
                'answer' => 'do nothing, because they were not on the listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:30:19',
                'updated_at' => '2015-09-13 21:30:19',
            ),
            330 =>
            array (
                'id' => 831,
                'question_id' => 208,
                'answer' => 'write them into the offer, because they are personal property.',
                'correct' => 1,
                'definition' => 'The personal property will not pass to the buyer unless included in the sales contract.',
                'created_at' => '2015-09-13 21:30:59',
                'updated_at' => '2015-09-13 21:30:59',
            ),
            331 =>
            array (
                'id' => 832,
                'question_id' => 208,
                'answer' => 'do nothing, because they are fixtures.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:31:12',
                'updated_at' => '2015-09-13 21:31:12',
            ),
            332 =>
            array (
                'id' => 833,
                'question_id' => 209,
                'answer' => 'Probate sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:32:05',
                'updated_at' => '2015-09-13 21:32:05',
            ),
            333 =>
            array (
                'id' => 834,
                'question_id' => 209,
                'answer' => 'Comparable sale',
                'correct' => 1,
                'definition' => 'Involuntary sales are not included in the market comparison approach, which stresses sales to ready, willing, and able buyers by sellers not compelled to sell.',
                'created_at' => '2015-09-13 21:32:57',
                'updated_at' => '2015-09-13 21:32:57',
            ),
            334 =>
            array (
                'id' => 835,
                'question_id' => 209,
                'answer' => 'Foreclosure sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:33:09',
                'updated_at' => '2015-09-13 21:33:09',
            ),
            335 =>
            array (
                'id' => 836,
                'question_id' => 209,
                'answer' => 'Tax sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:33:18',
                'updated_at' => '2015-09-13 21:33:18',
            ),
            336 =>
            array (
                'id' => 837,
                'question_id' => 210,
                'answer' => 'legal description.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:34:20',
                'updated_at' => '2015-09-13 21:34:20',
            ),
            337 =>
            array (
                'id' => 838,
                'question_id' => 210,
                'answer' => 'nonconforming use.',
                'correct' => 1,
                'definition' => 'The nonconforming use status is revealed by a comparison of the existing use with the permitted use under the zoning.',
                'created_at' => '2015-09-13 21:34:56',
                'updated_at' => '2015-09-13 21:34:56',
            ),
            338 =>
            array (
                'id' => 839,
                'question_id' => 210,
                'answer' => 'restrictive covenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:35:09',
                'updated_at' => '2015-09-13 21:35:09',
            ),
            339 =>
            array (
                'id' => 840,
                'question_id' => 210,
                'answer' => 'estate of ownership.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:35:19',
                'updated_at' => '2015-09-13 21:35:19',
            ),
            340 =>
            array (
                'id' => 841,
                'question_id' => 211,
                'answer' => '$81,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:38:39',
                'updated_at' => '2015-09-13 21:38:39',
            ),
            341 =>
            array (
                'id' => 842,
                'question_id' => 211,
                'answer' => '$112,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:38:52',
                'updated_at' => '2015-09-13 21:38:52',
            ),
            342 =>
            array (
                'id' => 843,
                'question_id' => 211,
                'answer' => '$128,100',
                'correct' => 1,
                'definition' => '$80,000 - 32,000 = 48,000

25 x 12 x $587 = $176,000

$176,100 - $48,000 = $128,100',
                'created_at' => '2015-09-13 21:40:12',
                'updated_at' => '2015-09-13 21:40:12',
            ),
            343 =>
            array (
                'id' => 844,
                'question_id' => 211,
                'answer' => '$144,100',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:40:40',
                'updated_at' => '2015-09-13 21:40:40',
            ),
            344 =>
            array (
                'id' => 845,
                'question_id' => 212,
                'answer' => 'Keep silent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:41:56',
                'updated_at' => '2015-09-13 21:41:56',
            ),
            345 =>
            array (
                'id' => 846,
                'question_id' => 212,
                'answer' => 'Tell the seller to pay',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:42:18',
                'updated_at' => '2015-09-13 21:42:18',
            ),
            346 =>
            array (
                'id' => 847,
                'question_id' => 212,
                'answer' => 'Tell the buyer to pay',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:42:27',
                'updated_at' => '2015-09-13 21:42:27',
            ),
            347 =>
            array (
                'id' => 848,
                'question_id' => 212,
                'answer' => 'Point out to the closing agent that there may be a problem',
                'correct' => 1,
                'definition' => 'The problem is that the buyer customarily pays for the cost of drafting the mortgage, because the buyer benefits by being able to obtain the loan.',
                'created_at' => '2015-09-13 21:43:19',
                'updated_at' => '2015-09-13 21:43:19',
            ),
            348 =>
            array (
                'id' => 849,
                'question_id' => 213,
                'answer' => 'FHA loans for nonowner occupants are assumable in the first 24 months without lender approval.',
                'correct' => 1,
            'definition' => 'FHA loans are not longer automatically assumable. There can be no simple assumption in the first 24 months (one year for owner-occupants), and only formal assumptions are allowed. This change is in response to the high number of foreclosures within the first two years of an FHA loan.',
                'created_at' => '2015-09-13 21:46:50',
                'updated_at' => '2015-09-13 21:46:50',
            ),
            349 =>
            array (
                'id' => 850,
                'question_id' => 213,
                'answer' => 'The maximum VA guaranty is set by law.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:47:24',
                'updated_at' => '2015-09-13 21:47:24',
            ),
            350 =>
            array (
                'id' => 851,
                'question_id' => 213,
                'answer' => 'VA loans can be assumed and the veteran released from liability if the buyer is proven to be creditworthy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:47:46',
                'updated_at' => '2015-09-13 21:47:46',
            ),
            351 =>
            array (
                'id' => 852,
                'question_id' => 213,
                'answer' => 'Under a FHA formal assumption, the original borrower can be released from liability.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:48:11',
                'updated_at' => '2015-09-13 21:48:11',
            ),
            352 =>
            array (
                'id' => 853,
                'question_id' => 214,
                'answer' => 'Unit owner',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:48:59',
                'updated_at' => '2015-09-13 21:48:59',
            ),
            353 =>
            array (
                'id' => 854,
                'question_id' => 214,
                'answer' => 'Management company',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:49:07',
                'updated_at' => '2015-09-13 21:49:07',
            ),
            354 =>
            array (
                'id' => 855,
                'question_id' => 214,
                'answer' => 'Association of owners',
                'correct' => 1,
                'definition' => 'The association of owners is responsible for repairs to common elements.',
                'created_at' => '2015-09-13 21:49:38',
                'updated_at' => '2015-09-13 21:49:38',
            ),
            355 =>
            array (
                'id' => 856,
                'question_id' => 214,
                'answer' => 'Real estate broker',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:50:00',
                'updated_at' => '2015-09-13 21:50:00',
            ),
            356 =>
            array (
                'id' => 857,
                'question_id' => 215,
                'answer' => 'insure a loan made to a qualified buyer.',
                'correct' => 1,
                'definition' => 'Provided the borrower is qualified, the FHA commits to insure the loan.',
                'created_at' => '2015-09-13 21:51:00',
                'updated_at' => '2015-09-13 21:51:00',
            ),
            357 =>
            array (
                'id' => 858,
                'question_id' => 215,
                'answer' => 'guarantee the value of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:51:20',
                'updated_at' => '2015-09-13 21:51:20',
            ),
            358 =>
            array (
                'id' => 859,
                'question_id' => 215,
                'answer' => 'make a loan subject to a mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:51:35',
                'updated_at' => '2015-09-13 21:51:35',
            ),
            359 =>
            array (
                'id' => 860,
                'question_id' => 215,
                'answer' => 'indemnify the lender ona defaulted loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-13 21:51:49',
                'updated_at' => '2015-09-13 21:51:49',
            ),
            360 =>
            array (
                'id' => 861,
                'question_id' => 216,
                'answer' => 'Remainderman',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:48:45',
                'updated_at' => '2015-09-15 19:48:45',
            ),
            361 =>
            array (
                'id' => 862,
                'question_id' => 216,
                'answer' => 'Holder of a reversion',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:49:14',
                'updated_at' => '2015-09-15 19:49:14',
            ),
            362 =>
            array (
                'id' => 863,
                'question_id' => 216,
                'answer' => 'Grantor of a life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:49:38',
                'updated_at' => '2015-09-15 19:49:38',
            ),
            363 =>
            array (
                'id' => 864,
                'question_id' => 216,
                'answer' => 'Life tenant',
                'correct' => 1,
                'definition' => 'A future interest is one that occurs in the future on the happening of some event, such as the default of a life tenant. A life tenant owns a present interest.',
                'created_at' => '2015-09-15 19:50:29',
                'updated_at' => '2015-09-15 19:50:29',
            ),
            364 =>
            array (
                'id' => 865,
                'question_id' => 217,
                'answer' => 'Bimonthly payroll',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:51:19',
                'updated_at' => '2015-09-15 19:51:19',
            ),
            365 =>
            array (
                'id' => 866,
                'question_id' => 217,
                'answer' => 'Graduated commission scale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:51:31',
                'updated_at' => '2015-09-15 19:51:31',
            ),
            366 =>
            array (
                'id' => 867,
                'question_id' => 217,
                'answer' => 'Preparation of monthly statements that account for expenses on each listing',
                'correct' => 1,
                'definition' => 'Brokers need to be careful that expenses don\'t get out of control or too much money is spent on ads.',
                'created_at' => '2015-09-15 19:52:15',
                'updated_at' => '2015-09-15 19:52:15',
            ),
            367 =>
            array (
                'id' => 868,
                'question_id' => 217,
                'answer' => 'Newspaper ads at the discretion of the listing salesperson',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:52:39',
                'updated_at' => '2015-09-15 19:52:39',
            ),
            368 =>
            array (
                'id' => 869,
                'question_id' => 218,
                'answer' => 'soil settlement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:53:10',
                'updated_at' => '2015-09-15 19:53:10',
            ),
            369 =>
            array (
                'id' => 870,
                'question_id' => 218,
                'answer' => 'ground termites.',
                'correct' => 1,
                'definition' => 'Subterranean land or ground termites move through mud tunnels.',
                'created_at' => '2015-09-15 19:53:44',
                'updated_at' => '2015-09-15 19:53:44',
            ),
            370 =>
            array (
                'id' => 871,
                'question_id' => 218,
                'answer' => 'cracked foundation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:53:59',
                'updated_at' => '2015-09-15 19:53:59',
            ),
            371 =>
            array (
                'id' => 872,
                'question_id' => 218,
                'answer' => 'inadequate footing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:54:17',
                'updated_at' => '2015-09-15 19:54:17',
            ),
            372 =>
            array (
                'id' => 873,
                'question_id' => 219,
                'answer' => 'The salesperson takes his listings with him.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:55:11',
                'updated_at' => '2015-09-15 19:55:11',
            ),
            373 =>
            array (
                'id' => 874,
                'question_id' => 219,
                'answer' => 'The salesperson\'s listings are terminated.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:55:25',
                'updated_at' => '2015-09-15 19:55:25',
            ),
            374 =>
            array (
                'id' => 875,
                'question_id' => 219,
                'answer' => 'The salesperson\'s errors and omissions policy is automatically transferred.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:55:45',
                'updated_at' => '2015-09-15 19:55:45',
            ),
            375 =>
            array (
                'id' => 876,
                'question_id' => 219,
                'answer' => 'The salesperson\'s broker can pay him commissions that he earned.',
                'correct' => 1,
                'definition' => '',
                'created_at' => '2015-09-15 19:56:07',
                'updated_at' => '2015-09-15 19:56:07',
            ),
            376 =>
            array (
                'id' => 877,
                'question_id' => 220,
                'answer' => 'Appraisers favor this method of valuing commercial properties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:56:58',
                'updated_at' => '2015-09-15 19:56:58',
            ),
            377 =>
            array (
                'id' => 878,
                'question_id' => 220,
                'answer' => 'Taxpayers can switch from straight line to accelerated depreciation after four years.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:57:21',
                'updated_at' => '2015-09-15 19:57:21',
            ),
            378 =>
            array (
                'id' => 879,
                'question_id' => 220,
                'answer' => 'Contractors use this system to recoup expenses.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 19:57:40',
                'updated_at' => '2015-09-15 19:57:40',
            ),
            379 =>
            array (
                'id' => 880,
                'question_id' => 220,
                'answer' => 'Under the Tax Act, the typical method of recovery of depreciation is straight line.',
                'correct' => 1,
                'definition' => 'The 1986 Tax Reform Act basically limited depreciation to straight line, thus eliminating the ACRS methods developed under the 1981 Tax Act.',
                'created_at' => '2015-09-15 19:58:42',
                'updated_at' => '2015-09-15 19:58:42',
            ),
            380 =>
            array (
                'id' => 881,
                'question_id' => 221,
                'answer' => 'It is subject to capital gains tax.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:51:09',
                'updated_at' => '2015-09-15 20:51:09',
            ),
            381 =>
            array (
                'id' => 882,
                'question_id' => 221,
                'answer' => 'It is tax free to the homeowner.',
                'correct' => 1,
                'definition' => 'The $5,000 is not taxable, but it reduces the owner\'s equity in the home.',
                'created_at' => '2015-09-15 20:51:52',
                'updated_at' => '2015-09-15 20:51:52',
            ),
            382 =>
            array (
                'id' => 883,
                'question_id' => 221,
                'answer' => 'It reduces the tax basis in the home.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:52:17',
                'updated_at' => '2015-09-15 20:52:17',
            ),
            383 =>
            array (
                'id' => 884,
                'question_id' => 221,
                'answer' => 'It increases the equity in the home.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:52:29',
                'updated_at' => '2015-09-15 20:52:29',
            ),
            384 =>
            array (
                'id' => 885,
                'question_id' => 222,
                'answer' => 'Cost to draft not and mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:53:18',
                'updated_at' => '2015-09-15 20:53:18',
            ),
            385 =>
            array (
                'id' => 886,
                'question_id' => 222,
                'answer' => 'Unpaid charges that accrue on the day of the closing',
                'correct' => 1,
            'definition' => 'A question sometimes arises whether the seller or the buyer is responsible for the expenses (like real property taxes, interest, maintenance fees) on the day of closing.  Typically, the seller\'s obligations run up to an include the day of closing.',
                'created_at' => '2015-09-15 20:54:40',
                'updated_at' => '2015-09-15 20:54:40',
            ),
            386 =>
            array (
                'id' => 887,
                'question_id' => 222,
                'answer' => 'Real estate licensing fees',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:57:08',
                'updated_at' => '2015-09-15 20:58:05',
            ),
            387 =>
            array (
                'id' => 888,
                'question_id' => 222,
                'answer' => 'Cost of appraisal',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:57:22',
                'updated_at' => '2015-09-15 20:58:24',
            ),
            388 =>
            array (
                'id' => 889,
                'question_id' => 223,
                'answer' => 'A bill of sale is needed to transfer title to it.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:59:38',
                'updated_at' => '2015-09-15 20:59:38',
            ),
            389 =>
            array (
                'id' => 890,
                'question_id' => 223,
                'answer' => 'It is a fixture that belongs to the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 20:59:55',
                'updated_at' => '2015-09-15 20:59:55',
            ),
            390 =>
            array (
                'id' => 891,
                'question_id' => 223,
                'answer' => 'It is personal property that belongs to the seller.',
                'correct' => 1,
                'definition' => 'The tool shed is easily removable and not permanently attached to the property.',
                'created_at' => '2015-09-15 21:00:37',
                'updated_at' => '2015-09-15 21:00:37',
            ),
            391 =>
            array (
                'id' => 892,
                'question_id' => 223,
                'answer' => 'It is an encumbrance that runs with the land.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:00:55',
                'updated_at' => '2015-09-15 21:00:55',
            ),
            392 =>
            array (
                'id' => 893,
                'question_id' => 224,
                'answer' => 'supervising broker.',
                'correct' => 1,
                'definition' => 'the salesperson is the agent of the listing broker, who is the agent of the seller.',
                'created_at' => '2015-09-15 21:03:43',
                'updated_at' => '2015-09-15 21:03:43',
            ),
            393 =>
            array (
                'id' => 894,
                'question_id' => 224,
                'answer' => 'buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:03:52',
                'updated_at' => '2015-09-15 21:03:52',
            ),
            394 =>
            array (
                'id' => 895,
                'question_id' => 224,
                'answer' => 'seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:04:00',
                'updated_at' => '2015-09-15 21:04:00',
            ),
            395 =>
            array (
                'id' => 896,
                'question_id' => 224,
                'answer' => 'sales manager.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:04:09',
                'updated_at' => '2015-09-15 21:04:09',
            ),
            396 =>
            array (
                'id' => 897,
                'question_id' => 225,
                'answer' => 'Real property taxes',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:05:09',
                'updated_at' => '2015-09-15 21:05:09',
            ),
            397 =>
            array (
                'id' => 898,
                'question_id' => 225,
                'answer' => 'Insurance costs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:05:20',
                'updated_at' => '2015-09-15 21:05:20',
            ),
            398 =>
            array (
                'id' => 899,
                'question_id' => 225,
                'answer' => 'Debt service',
                'correct' => 1,
            'definition' => 'Under the income (capitalization) approach, effective gross income is determined by deducting from potential gross income an allowance for bad debts and vacancy. To determine net operating income, deduct fixed and operating expenses but not financing costs (debt service).',
                'created_at' => '2015-09-15 21:06:45',
                'updated_at' => '2015-09-15 21:06:45',
            ),
            399 =>
            array (
                'id' => 900,
                'question_id' => 225,
                'answer' => 'Utility costs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:09:21',
                'updated_at' => '2015-09-15 21:09:21',
            ),
            400 =>
            array (
                'id' => 901,
                'question_id' => 226,
                'answer' => 'Because it is the law',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:11:50',
                'updated_at' => '2015-09-15 21:11:50',
            ),
            401 =>
            array (
                'id' => 902,
                'question_id' => 226,
                'answer' => 'Because an unrecorded deed isn\'t valid',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:12:06',
                'updated_at' => '2015-09-15 21:12:06',
            ),
            402 =>
            array (
                'id' => 903,
                'question_id' => 226,
                'answer' => 'To make the title marketable',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:12:19',
                'updated_at' => '2015-09-15 21:12:19',
            ),
            403 =>
            array (
                'id' => 904,
                'question_id' => 226,
                'answer' => 'To provide others with constructive notice',
                'correct' => 1,
                'definition' => 'Recording a deed gives constructive notice to others. Recording laws are voluntary, not required. A deed is still valid without recordation, it\'s just no as enforceable.',
                'created_at' => '2015-09-15 21:13:22',
                'updated_at' => '2015-09-15 21:13:22',
            ),
            404 =>
            array (
                'id' => 905,
                'question_id' => 227,
                'answer' => 'Credit seller $1,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:16:06',
                'updated_at' => '2015-09-15 21:16:06',
            ),
            405 =>
            array (
                'id' => 906,
                'question_id' => 227,
                'answer' => 'Credit buyer $1,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:16:18',
                'updated_at' => '2015-09-15 21:16:18',
            ),
            406 =>
            array (
                'id' => 907,
                'question_id' => 227,
                'answer' => 'Debit seller $1,000 and credit buyer $1,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:16:51',
                'updated_at' => '2015-09-15 21:16:51',
            ),
            407 =>
            array (
                'id' => 908,
                'question_id' => 227,
                'answer' => 'Credit seller $1,000 and debit buyer $1,000',
                'correct' => 1,
                'definition' => 'This is a double entry with the seller being returned the funds the seller had advanced at the start of the loan--funds that the buyer will receive later at loan payoff.',
                'created_at' => '2015-09-15 21:17:50',
                'updated_at' => '2015-09-15 21:17:50',
            ),
            408 =>
            array (
                'id' => 909,
                'question_id' => 228,
                'answer' => 'annual interest due.',
                'correct' => 1,
                'definition' => 'Only interest, not principal, is prorated.',
                'created_at' => '2015-09-15 21:18:58',
                'updated_at' => '2015-09-15 21:18:58',
            ),
            409 =>
            array (
                'id' => 910,
                'question_id' => 228,
                'answer' => 'interest and principal.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:19:14',
                'updated_at' => '2015-09-15 21:19:14',
            ),
            410 =>
            array (
                'id' => 911,
                'question_id' => 228,
                'answer' => 'principal only.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:19:24',
                'updated_at' => '2015-09-15 21:19:24',
            ),
            411 =>
            array (
                'id' => 912,
                'question_id' => 228,
                'answer' => 'seller to pay balance due.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:19:36',
                'updated_at' => '2015-09-15 21:19:36',
            ),
            412 =>
            array (
                'id' => 913,
                'question_id' => 229,
                'answer' => 'an increase in the mortgage rate.',
                'correct' => 1,
                'definition' => 'Higher interest rates usually mean marginal buyers can\'t buy and have to rent instead.',
                'created_at' => '2015-09-15 21:37:11',
                'updated_at' => '2015-09-15 21:37:11',
            ),
            413 =>
            array (
                'id' => 914,
                'question_id' => 229,
                'answer' => 'an increase in disposable income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:37:46',
                'updated_at' => '2015-09-15 21:37:46',
            ),
            414 =>
            array (
                'id' => 915,
                'question_id' => 229,
                'answer' => 'a decrease in mortgage rates.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:38:01',
                'updated_at' => '2015-09-15 21:38:01',
            ),
            415 =>
            array (
                'id' => 916,
                'question_id' => 229,
                'answer' => 'an increase in urban clearance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:38:14',
                'updated_at' => '2015-09-15 21:38:14',
            ),
            416 =>
            array (
                'id' => 917,
                'question_id' => 230,
                'answer' => 'negotiate maintenance service fees.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:39:17',
                'updated_at' => '2015-09-15 21:39:17',
            ),
            417 =>
            array (
                'id' => 918,
                'question_id' => 230,
                'answer' => 'rehabilitate and convert property.',
                'correct' => 1,
                'definition' => 'Clients make the major decisions, such as converting a rental building into a condominium.',
                'created_at' => '2015-09-15 21:39:52',
                'updated_at' => '2015-09-15 21:39:52',
            ),
            418 =>
            array (
                'id' => 919,
                'question_id' => 230,
                'answer' => 'initiate action for recovery of rent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:40:09',
                'updated_at' => '2015-09-15 21:40:09',
            ),
            419 =>
            array (
                'id' => 920,
                'question_id' => 230,
                'answer' => 'file required federal and state reports.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:40:25',
                'updated_at' => '2015-09-15 21:40:25',
            ),
            420 =>
            array (
                'id' => 921,
                'question_id' => 231,
                'answer' => 'Lease rent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:41:30',
                'updated_at' => '2015-09-15 21:41:30',
            ),
            421 =>
            array (
                'id' => 922,
                'question_id' => 231,
                'answer' => 'Insurance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:41:41',
                'updated_at' => '2015-09-15 21:41:41',
            ),
            422 =>
            array (
                'id' => 923,
                'question_id' => 231,
                'answer' => 'Maintenance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:41:57',
                'updated_at' => '2015-09-15 21:41:57',
            ),
            423 =>
            array (
                'id' => 924,
                'question_id' => 231,
                'answer' => 'Property management fee',
                'correct' => 1,
                'definition' => 'Under the terms of a typical triple net lease, the tenant pays all the carrying charges. The lessor pays for its own property managers.',
                'created_at' => '2015-09-15 21:42:40',
                'updated_at' => '2015-09-15 21:42:40',
            ),
            424 =>
            array (
                'id' => 925,
                'question_id' => 232,
                'answer' => '$25,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:46:29',
                'updated_at' => '2015-09-15 21:46:29',
            ),
            425 =>
            array (
                'id' => 926,
                'question_id' => 232,
                'answer' => '$50,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:47:24',
                'updated_at' => '2015-09-15 21:47:24',
            ),
            426 =>
            array (
                'id' => 927,
                'question_id' => 232,
                'answer' => '$75,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:47:34',
                'updated_at' => '2015-09-15 21:47:34',
            ),
            427 =>
            array (
                'id' => 928,
                'question_id' => 232,
                'answer' => '$125,000',
                'correct' => 1,
            'definition' => 'Because the seller\'s basis was $100,000 plus $25,000, the taxable capital gain is $125,00 ($250,000 - $125,000 = $125,000). The current tax law requires a homeowner to live in a home at least two years in order to be excluded from capital gains.',
                'created_at' => '2015-09-15 21:49:10',
                'updated_at' => '2015-09-15 21:49:10',
            ),
            428 =>
            array (
                'id' => 929,
                'question_id' => 233,
                'answer' => 'Control of a large asset with a small mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:50:11',
                'updated_at' => '2015-09-15 21:50:11',
            ),
            429 =>
            array (
                'id' => 930,
                'question_id' => 233,
                'answer' => 'Ability to change loan terms',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:50:25',
                'updated_at' => '2015-09-15 21:50:25',
            ),
            430 =>
            array (
                'id' => 931,
                'question_id' => 233,
                'answer' => 'Control of a large asset with little money down',
                'correct' => 1,
            'definition' => 'Leverage involves the use of other people\'s money to control an asset (e.g., buy real estate with little money down).',
                'created_at' => '2015-09-15 21:51:19',
                'updated_at' => '2015-09-15 21:51:19',
            ),
            431 =>
            array (
                'id' => 932,
                'question_id' => 233,
                'answer' => 'Purchase of a security',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:51:56',
                'updated_at' => '2015-09-15 21:51:56',
            ),
            432 =>
            array (
                'id' => 933,
                'question_id' => 234,
                'answer' => 'fixed by law.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:52:31',
                'updated_at' => '2015-09-15 21:52:31',
            ),
            433 =>
            array (
                'id' => 934,
                'question_id' => 234,
                'answer' => 'determined by agreement of brokers in the community.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:52:53',
                'updated_at' => '2015-09-15 21:52:53',
            ),
            434 =>
            array (
                'id' => 935,
                'question_id' => 234,
                'answer' => 'sometimes set by company policy but could be further negotiated by the seller and broker.',
                'correct' => 1,
                'definition' => 'Price fixing is illegal under antitrust laws. Some firms prefer a certain fee but recognize that the commission is negotiable between buyer and seller.',
                'created_at' => '2015-09-15 21:54:09',
                'updated_at' => '2015-09-15 21:54:09',
            ),
            435 =>
            array (
                'id' => 936,
                'question_id' => 234,
                'answer' => 'agreed upon at closing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:54:32',
                'updated_at' => '2015-09-15 21:54:32',
            ),
            436 =>
            array (
                'id' => 937,
                'question_id' => 235,
                'answer' => 'Lot and block number',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:55:38',
                'updated_at' => '2015-09-15 21:55:38',
            ),
            437 =>
            array (
                'id' => 938,
                'question_id' => 235,
                'answer' => 'Ranges, townships, and sections',
                'correct' => 1,
                'definition' => 'The survey system creates a checkerboard of identical squares covering a given area--also called rectangular survey system.',
                'created_at' => '2015-09-15 21:56:22',
                'updated_at' => '2015-09-15 21:56:22',
            ),
            438 =>
            array (
                'id' => 939,
                'question_id' => 235,
                'answer' => 'Plat and parcel',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:56:33',
                'updated_at' => '2015-09-15 21:56:33',
            ),
            439 =>
            array (
                'id' => 940,
                'question_id' => 235,
                'answer' => 'Metes and bounds',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:56:45',
                'updated_at' => '2015-09-15 21:56:45',
            ),
            440 =>
            array (
                'id' => 941,
                'question_id' => 236,
                'answer' => 'requires the same amount of mutual mortgage insurance for both the first and second mortgages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:57:40',
                'updated_at' => '2015-09-15 21:57:40',
            ),
            441 =>
            array (
                'id' => 942,
                'question_id' => 236,
                'answer' => 'allows unlimited assumptions of the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:57:54',
                'updated_at' => '2015-09-15 21:57:54',
            ),
            442 =>
            array (
                'id' => 943,
                'question_id' => 236,
                'answer' => 'collects discount charges from either buyer or seller.',
                'correct' => 1,
                'definition' => 'Whether buyer or seller pays, the discount charged is subject to negotiation. FHA restricts assumption in the first 24 months of a loan on an investment property.',
                'created_at' => '2015-09-15 21:58:47',
                'updated_at' => '2015-09-15 21:58:47',
            ),
            443 =>
            array (
                'id' => 944,
                'question_id' => 236,
                'answer' => 'charges a prepayment penalty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 21:59:25',
                'updated_at' => '2015-09-15 21:59:25',
            ),
            444 =>
            array (
                'id' => 945,
                'question_id' => 237,
                'answer' => '$700',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:01:49',
                'updated_at' => '2015-09-15 22:01:49',
            ),
            445 =>
            array (
                'id' => 946,
                'question_id' => 237,
                'answer' => '$800',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:02:00',
                'updated_at' => '2015-09-15 22:02:00',
            ),
            446 =>
            array (
                'id' => 947,
                'question_id' => 237,
                'answer' => '$5,900',
                'correct' => 1,
                'definition' => 'She can deduct interest and real property taxes.',
                'created_at' => '2015-09-15 22:02:56',
                'updated_at' => '2015-09-15 22:02:56',
            ),
            447 =>
            array (
                'id' => 948,
                'question_id' => 237,
                'answer' => '$6,400',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:03:12',
                'updated_at' => '2015-09-15 22:03:12',
            ),
            448 =>
            array (
                'id' => 949,
                'question_id' => 238,
                'answer' => 'Joint tenancy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:04:10',
                'updated_at' => '2015-09-15 22:04:10',
            ),
            449 =>
            array (
                'id' => 950,
                'question_id' => 238,
                'answer' => 'Tenancy in common',
                'correct' => 1,
                'definition' => 'They could choose any tenancy among themselves; but as to the share of each couple, that should be a tenancy in common.If they were all to be joint tenants, then one could survive the other, thus leaving nothing for the heirs to inherit.',
                'created_at' => '2015-09-15 22:05:17',
                'updated_at' => '2015-09-15 22:05:17',
            ),
            450 =>
            array (
                'id' => 951,
                'question_id' => 238,
                'answer' => 'Tenancy by entirety',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:05:41',
                'updated_at' => '2015-09-15 22:05:41',
            ),
            451 =>
            array (
                'id' => 952,
                'question_id' => 238,
                'answer' => 'Tenancy in severalty',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:06:06',
                'updated_at' => '2015-09-15 22:06:06',
            ),
            452 =>
            array (
                'id' => 953,
                'question_id' => 239,
                'answer' => 'an index mortgage.',
                'correct' => 1,
                'definition' => 'An example is an index mortgage whose interest rate is tied to the rate of U.S. Treasury bills.',
                'created_at' => '2015-09-15 22:07:38',
                'updated_at' => '2015-09-15 22:07:38',
            ),
            453 =>
            array (
                'id' => 954,
                'question_id' => 239,
                'answer' => 'an open-end mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:07:58',
                'updated_at' => '2015-09-15 22:07:58',
            ),
            454 =>
            array (
                'id' => 955,
                'question_id' => 239,
                'answer' => 'a balloon mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:08:12',
                'updated_at' => '2015-09-15 22:08:12',
            ),
            455 =>
            array (
                'id' => 956,
                'question_id' => 239,
                'answer' => 'an escalation mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:08:30',
                'updated_at' => '2015-09-15 22:08:30',
            ),
            456 =>
            array (
                'id' => 957,
                'question_id' => 240,
                'answer' => 'Names and signatures of parties to be bound',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:09:32',
                'updated_at' => '2015-09-15 22:09:32',
            ),
            457 =>
            array (
                'id' => 958,
                'question_id' => 240,
                'answer' => 'Provision for broker\'s commission',
                'correct' => 1,
                'definition' => 'The broker\'s fee often is set in the listing agreement. It also may appear in the sales contract but is not necessary.',
                'created_at' => '2015-09-15 22:10:22',
                'updated_at' => '2015-09-15 22:10:22',
            ),
            458 =>
            array (
                'id' => 959,
                'question_id' => 240,
                'answer' => 'Consideration',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:10:39',
                'updated_at' => '2015-09-15 22:10:39',
            ),
            459 =>
            array (
                'id' => 960,
                'question_id' => 240,
                'answer' => 'Description of property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:10:51',
                'updated_at' => '2015-09-15 22:10:51',
            ),
            460 =>
            array (
                'id' => 961,
                'question_id' => 241,
                'answer' => '$46,558.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:14:26',
                'updated_at' => '2015-09-15 22:14:26',
            ),
            461 =>
            array (
                'id' => 962,
                'question_id' => 241,
                'answer' => '$47,652.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:14:42',
                'updated_at' => '2015-09-15 22:14:42',
            ),
            462 =>
            array (
                'id' => 963,
                'question_id' => 241,
                'answer' => '$47,975',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:14:56',
                'updated_at' => '2015-09-15 22:14:56',
            ),
            463 =>
            array (
                'id' => 964,
                'question_id' => 241,
                'answer' => '$48,500.',
                'correct' => 1,
                'definition' => 'Principal is not prorated on a daily basis, only interest.',
                'created_at' => '2015-09-15 22:15:42',
                'updated_at' => '2015-09-15 22:15:42',
            ),
            464 =>
            array (
                'id' => 965,
                'question_id' => 242,
                'answer' => 'continue to show the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:17:00',
                'updated_at' => '2015-09-15 22:17:00',
            ),
            465 =>
            array (
                'id' => 966,
                'question_id' => 242,
                'answer' => 'present additional offers.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:17:20',
                'updated_at' => '2015-09-15 22:17:20',
            ),
            466 =>
            array (
                'id' => 967,
                'question_id' => 242,
                'answer' => 'answer questions about the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:17:33',
                'updated_at' => '2015-09-15 22:17:33',
            ),
            467 =>
            array (
                'id' => 968,
                'question_id' => 242,
                'answer' => 'recommend the seller accept another offer.',
                'correct' => 1,
                'definition' => 'Unless instructed otherwise by the seller, the broker should continue to market the property. The seller needs to be careful about accepting additional offers without first revoking the counteroffer.',
                'created_at' => '2015-09-15 22:18:38',
                'updated_at' => '2015-09-15 22:18:38',
            ),
            468 =>
            array (
                'id' => 969,
                'question_id' => 243,
                'answer' => 'deficiency judgment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:20:34',
                'updated_at' => '2015-09-15 22:20:34',
            ),
            469 =>
            array (
                'id' => 970,
                'question_id' => 243,
                'answer' => 'lis pendens.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:20:48',
                'updated_at' => '2015-09-15 22:20:48',
            ),
            470 =>
            array (
                'id' => 971,
                'question_id' => 243,
                'answer' => 'short sale.',
                'correct' => 1,
                'definition' => 'Normally, the lender will require full payment before releasing its lien. In a short sale, the lender may feel market conditions are such that it will net more money faster from the defaulting mortgagor by taking the proceeds from a short sale rather than seeking foreclosure through the courts.',
                'created_at' => '2015-09-15 22:22:05',
                'updated_at' => '2015-09-15 22:22:05',
            ),
            471 =>
            array (
                'id' => 972,
                'question_id' => 243,
                'answer' => 'court sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:22:17',
                'updated_at' => '2015-09-15 22:22:17',
            ),
            472 =>
            array (
                'id' => 973,
                'question_id' => 244,
                'answer' => 'The seller can require that the buyer use a specific title company.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:23:06',
                'updated_at' => '2015-09-15 22:23:06',
            ),
            473 =>
            array (
                'id' => 974,
                'question_id' => 244,
                'answer' => 'It applies to VA and FHA loans.',
                'correct' => 1,
                'definition' => 'RESPA applies to any federally related loan. The lender is the party responsible that RESPA disclosures are made.',
                'created_at' => '2015-09-15 22:24:01',
                'updated_at' => '2015-09-15 22:24:01',
            ),
            474 =>
            array (
                'id' => 975,
                'question_id' => 244,
                'answer' => 'It applies to seller wraparound loans.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:24:17',
                'updated_at' => '2015-09-15 22:24:17',
            ),
            475 =>
            array (
                'id' => 976,
                'question_id' => 244,
                'answer' => 'It is the responsibility of the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:24:38',
                'updated_at' => '2015-09-15 22:24:38',
            ),
            476 =>
            array (
                'id' => 977,
                'question_id' => 245,
                'answer' => 'a payoff mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:26:31',
                'updated_at' => '2015-09-15 22:26:31',
            ),
            477 =>
            array (
                'id' => 978,
                'question_id' => 245,
                'answer' => 'a budget mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:26:43',
                'updated_at' => '2015-09-15 22:26:43',
            ),
            478 =>
            array (
                'id' => 979,
                'question_id' => 245,
                'answer' => 'a straight mortgage.',
                'correct' => 1,
                'definition' => 'A straight mortgage is an interest-only mortgage, also called a term mortgage.',
                'created_at' => '2015-09-15 22:27:17',
                'updated_at' => '2015-09-15 22:27:17',
            ),
            479 =>
            array (
                'id' => 980,
                'question_id' => 245,
                'answer' => 'an amortized mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-15 22:27:29',
                'updated_at' => '2015-09-15 22:27:29',
            ),
            480 =>
            array (
                'id' => 981,
                'question_id' => 246,
                'answer' => '$100,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 18:59:28',
                'updated_at' => '2015-09-17 18:59:28',
            ),
            481 =>
            array (
                'id' => 982,
                'question_id' => 246,
                'answer' => '$110,000',
                'correct' => 1,
                'definition' => '$100,000 cost plus $100,000 in improvements.',
                'created_at' => '2015-09-17 19:00:06',
                'updated_at' => '2015-09-17 19:00:06',
            ),
            482 =>
            array (
                'id' => 983,
                'question_id' => 246,
                'answer' => '$120,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:00:17',
                'updated_at' => '2015-09-17 19:00:17',
            ),
            483 =>
            array (
                'id' => 984,
                'question_id' => 246,
                'answer' => '$121,500',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:00:52',
                'updated_at' => '2015-09-17 19:00:52',
            ),
            484 =>
            array (
                'id' => 985,
                'question_id' => 247,
                'answer' => 'Credit the seller $1,444',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:08:00',
                'updated_at' => '2015-09-17 19:08:00',
            ),
            485 =>
            array (
                'id' => 986,
                'question_id' => 247,
                'answer' => 'Credit the buyer $1,706',
                'correct' => 1,
                'definition' => '$42,000 x 0.075 = 43,150

$9,840 x 30 - $262.50/month x 6.5 = $1,706.25',
                'created_at' => '2015-09-17 19:14:01',
                'updated_at' => '2015-09-17 19:14:01',
            ),
            486 =>
            array (
                'id' => 987,
                'question_id' => 247,
                'answer' => 'Debit the buyer $1,181',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:14:20',
                'updated_at' => '2015-09-17 19:14:20',
            ),
            487 =>
            array (
                'id' => 988,
                'question_id' => 247,
                'answer' => 'Debit the seller $1,968',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:14:37',
                'updated_at' => '2015-09-17 19:14:37',
            ),
            488 =>
            array (
                'id' => 989,
                'question_id' => 248,
                'answer' => '$127,500',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:16:51',
                'updated_at' => '2015-09-17 19:16:51',
            ),
            489 =>
            array (
                'id' => 990,
                'question_id' => 248,
                'answer' => '$195,200',
                'correct' => 1,
                'definition' => '8.20 x 100 = $820/month x 12 = $9,840

$9,840 x 30 = $295,200 - $100,00 = $195,200',
                'created_at' => '2015-09-17 19:18:33',
                'updated_at' => '2015-09-17 19:18:33',
            ),
            490 =>
            array (
                'id' => 991,
                'question_id' => 248,
                'answer' => '$285,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:18:48',
                'updated_at' => '2015-09-17 19:18:48',
            ),
            491 =>
            array (
                'id' => 992,
                'question_id' => 248,
                'answer' => '$310,220',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:18:59',
                'updated_at' => '2015-09-17 19:18:59',
            ),
            492 =>
            array (
                'id' => 993,
                'question_id' => 249,
                'answer' => '$590,300',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:20:18',
                'updated_at' => '2015-09-17 19:20:18',
            ),
            493 =>
            array (
                'id' => 994,
                'question_id' => 249,
                'answer' => '$605,300',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:20:31',
                'updated_at' => '2015-09-17 19:20:31',
            ),
            494 =>
            array (
                'id' => 995,
                'question_id' => 249,
                'answer' => '$749,300',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:20:43',
                'updated_at' => '2015-09-17 19:20:43',
            ),
            495 =>
            array (
                'id' => 996,
                'question_id' => 249,
                'answer' => '$805,300',
                'correct' => 1,
                'definition' => '$37,456 - 7,200 = $30,265

$30,265 / 5% = $605,300 + $200,00 = 805,300',
                'created_at' => '2015-09-17 19:22:16',
                'updated_at' => '2015-09-17 19:22:16',
            ),
            496 =>
            array (
                'id' => 997,
                'question_id' => 250,
                'answer' => '$35,200',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:23:34',
                'updated_at' => '2015-09-17 19:23:34',
            ),
            497 =>
            array (
                'id' => 998,
                'question_id' => 250,
                'answer' => '$36,200',
                'correct' => 1,
                'definition' => '32\' x 50\' = 1,600 sq ft. x $32 = $51,200 - $15,000 = $36,200',
                'created_at' => '2015-09-17 19:24:33',
                'updated_at' => '2015-09-17 19:24:33',
            ),
            498 =>
            array (
                'id' => 999,
                'question_id' => 250,
                'answer' => '$41,200',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:24:50',
                'updated_at' => '2015-09-17 19:24:50',
            ),
            499 =>
            array (
                'id' => 1000,
                'question_id' => 250,
                'answer' => '$51,200',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:25:01',
                'updated_at' => '2015-09-17 19:25:01',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 =>
            array (
                'id' => 1001,
                'question_id' => 251,
                'answer' => 'Interest',
                'correct' => 1,
                'definition' => 'The September mortgage payment, for example, includes the interest for August. FHA points are now paid up front.',
                'created_at' => '2015-09-17 19:26:10',
                'updated_at' => '2015-09-17 19:26:10',
            ),
            1 =>
            array (
                'id' => 1002,
                'question_id' => 251,
                'answer' => 'Lease rent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:26:22',
                'updated_at' => '2015-09-17 19:26:22',
            ),
            2 =>
            array (
                'id' => 1003,
                'question_id' => 251,
                'answer' => 'FHA points',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:26:34',
                'updated_at' => '2015-09-17 19:26:34',
            ),
            3 =>
            array (
                'id' => 1004,
                'question_id' => 251,
                'answer' => 'Private mortgage insurance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:26:46',
                'updated_at' => '2015-09-17 19:26:46',
            ),
            4 =>
            array (
                'id' => 1005,
                'question_id' => 252,
                'answer' => 'Debit to buyer; debt to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:27:50',
                'updated_at' => '2015-09-17 19:27:50',
            ),
            5 =>
            array (
                'id' => 1006,
                'question_id' => 252,
                'answer' => 'Credit to buyer; credit to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:28:03',
                'updated_at' => '2015-09-17 19:28:03',
            ),
            6 =>
            array (
                'id' => 1007,
                'question_id' => 252,
                'answer' => 'Debit to buyer, credit to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:28:14',
                'updated_at' => '2015-09-17 19:28:14',
            ),
            7 =>
            array (
                'id' => 1008,
                'question_id' => 252,
                'answer' => 'Credit to buyer; debit to seller',
                'correct' => 1,
                'definition' => 'It is debited to the seller because it is money not yet received.',
                'created_at' => '2015-09-17 19:28:39',
                'updated_at' => '2015-09-17 19:28:39',
            ),
            8 =>
            array (
                'id' => 1009,
                'question_id' => 253,
                'answer' => 'seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:29:34',
                'updated_at' => '2015-09-17 19:29:34',
            ),
            9 =>
            array (
                'id' => 1010,
                'question_id' => 253,
                'answer' => 'lenders.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:29:42',
                'updated_at' => '2015-09-17 19:29:42',
            ),
            10 =>
            array (
                'id' => 1011,
                'question_id' => 253,
                'answer' => 'escrow office.',
                'correct' => 1,
            'definition' => 'The Settlement Statement (HUD-1) is designed to reflect all closing charges, even those that are not paid through the escrow agent.',
                'created_at' => '2015-09-17 19:30:28',
                'updated_at' => '2015-09-17 19:30:28',
            ),
            11 =>
            array (
                'id' => 1012,
                'question_id' => 253,
                'answer' => 'appraiser.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:30:42',
                'updated_at' => '2015-09-17 19:30:42',
            ),
            12 =>
            array (
                'id' => 1013,
                'question_id' => 254,
                'answer' => 'Credit $125,000 to buyer; debit $125,000 to seller',
                'correct' => 1,
                'definition' => 'The $125,000 represents the financing carried back by the seller and is used to offset the $140,000 purchase price credited to the seller.',
                'created_at' => '2015-09-17 19:33:47',
                'updated_at' => '2015-09-17 19:33:47',
            ),
            13 =>
            array (
                'id' => 1014,
                'question_id' => 254,
                'answer' => 'Debit $125,000 to the seller; credit $125,000 to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:34:13',
                'updated_at' => '2015-09-17 19:34:13',
            ),
            14 =>
            array (
                'id' => 1015,
                'question_id' => 254,
                'answer' => 'Credit $140,000 to seller; debit $15,000 to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:34:30',
                'updated_at' => '2015-09-17 19:34:30',
            ),
            15 =>
            array (
                'id' => 1016,
                'question_id' => 254,
                'answer' => 'Debit $140,000 to buyer; credit $10,000 to seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:34:48',
                'updated_at' => '2015-09-17 19:34:48',
            ),
            16 =>
            array (
                'id' => 1017,
                'question_id' => 255,
                'answer' => 'Debit buyer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:36:14',
                'updated_at' => '2015-09-17 19:36:14',
            ),
            17 =>
            array (
                'id' => 1018,
                'question_id' => 255,
                'answer' => 'Credit seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:36:22',
                'updated_at' => '2015-09-17 19:36:22',
            ),
            18 =>
            array (
                'id' => 1019,
                'question_id' => 255,
                'answer' => 'Debit buyer; credit seller',
                'correct' => 1,
            'definition' => 'The customer trust account (impound or reserve account) is money advanced by the seller to make sure there is enough to pay taxes, condo maintenance fees, insurance, and so on. Because the money won\'t be returned to the seller by the lender until the end of the loan, an adjustment is made at closing and the assuming buyer will be entitled to the refund when the loan is paid off.',
                'created_at' => '2015-09-17 19:37:38',
                'updated_at' => '2015-09-17 19:37:38',
            ),
            19 =>
            array (
                'id' => 1020,
                'question_id' => 255,
                'answer' => 'Credit buyer; debit seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:38:18',
                'updated_at' => '2015-09-17 19:38:18',
            ),
            20 =>
            array (
                'id' => 1021,
                'question_id' => 256,
                'answer' => 'net loan amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:39:34',
                'updated_at' => '2015-09-17 19:39:34',
            ),
            21 =>
            array (
                'id' => 1022,
                'question_id' => 256,
                'answer' => 'gross loan amount.',
                'correct' => 1,
                'definition' => 'If the lender deducted the loan fee before depositing the funds into escrow, then the statement would show a credit to the buyer of only $63,360.',
                'created_at' => '2015-09-17 19:40:25',
                'updated_at' => '2015-09-17 19:40:25',
            ),
            22 =>
            array (
                'id' => 1023,
                'question_id' => 256,
                'answer' => 'prorated amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:40:36',
                'updated_at' => '2015-09-17 19:40:36',
            ),
            23 =>
            array (
                'id' => 1024,
                'question_id' => 256,
                'answer' => 'adjusted loan amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:40:45',
                'updated_at' => '2015-09-17 19:40:45',
            ),
            24 =>
            array (
                'id' => 1025,
                'question_id' => 257,
                'answer' => 'Rental income',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:41:16',
                'updated_at' => '2015-09-17 19:41:16',
            ),
            25 =>
            array (
                'id' => 1026,
                'question_id' => 257,
                'answer' => 'Real property tax',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:41:27',
                'updated_at' => '2015-09-17 19:41:27',
            ),
            26 =>
            array (
                'id' => 1027,
                'question_id' => 257,
                'answer' => 'Recording fees',
                'correct' => 1,
                'definition' => 'Recording fees are single-entry expense of either the seller or the buyer, depending upon custom or agreement.',
                'created_at' => '2015-09-17 19:42:00',
                'updated_at' => '2015-09-17 19:42:00',
            ),
            27 =>
            array (
                'id' => 1028,
                'question_id' => 257,
                'answer' => 'Assigned insurance policy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:42:15',
                'updated_at' => '2015-09-17 19:42:15',
            ),
            28 =>
            array (
                'id' => 1029,
                'question_id' => 258,
                'answer' => 'Debit seller and credit buyer',
                'correct' => 1,
                'definition' => 'The seller has possession of the tenant\'s money, which the buyer will have to return to the tenant if the tenant leaves the property in good condition.',
                'created_at' => '2015-09-17 19:43:33',
                'updated_at' => '2015-09-17 19:43:33',
            ),
            29 =>
            array (
                'id' => 1030,
                'question_id' => 258,
                'answer' => 'Credit the seller and debit buyer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:43:47',
                'updated_at' => '2015-09-17 19:43:47',
            ),
            30 =>
            array (
                'id' => 1031,
                'question_id' => 258,
                'answer' => 'Debit seller only',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:43:58',
                'updated_at' => '2015-09-17 19:43:58',
            ),
            31 =>
            array (
                'id' => 1032,
                'question_id' => 258,
                'answer' => 'Credit buyer only',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:44:09',
                'updated_at' => '2015-09-17 19:44:09',
            ),
            32 =>
            array (
                'id' => 1033,
                'question_id' => 259,
                'answer' => 'delay closing until seller builds a replacement.',
                'correct' => 1,
                'definition' => 'The seller has the risk of loss until closing, so the buyer can rescind or accept the deed and insurance proceeds.',
                'created_at' => '2015-09-17 19:45:24',
                'updated_at' => '2015-09-17 19:45:24',
            ),
            33 =>
            array (
                'id' => 1034,
                'question_id' => 259,
                'answer' => 'close the sale and obtain an assignment of the insurance proceeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:45:50',
                'updated_at' => '2015-09-17 19:45:50',
            ),
            34 =>
            array (
                'id' => 1035,
                'question_id' => 259,
                'answer' => 'rescind the contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:46:04',
                'updated_at' => '2015-09-17 19:46:04',
            ),
            35 =>
            array (
                'id' => 1036,
                'question_id' => 259,
                'answer' => 'renegotiate the price if seller agrees.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:46:22',
                'updated_at' => '2015-09-17 19:46:22',
            ),
            36 =>
            array (
                'id' => 1037,
                'question_id' => 260,
                'answer' => 'boundaries.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:47:01',
                'updated_at' => '2015-09-17 19:47:01',
            ),
            37 =>
            array (
                'id' => 1038,
                'question_id' => 260,
                'answer' => 'estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:47:10',
                'updated_at' => '2015-09-17 19:47:10',
            ),
            38 =>
            array (
                'id' => 1039,
                'question_id' => 260,
                'answer' => 'restrictive covenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:47:21',
                'updated_at' => '2015-09-17 19:47:21',
            ),
            39 =>
            array (
                'id' => 1040,
                'question_id' => 260,
                'answer' => 'nonconforming use.',
                'correct' => 1,
                'definition' => 'While the fact that a property is nonconforming should be disclosed in the sales contract, it does not appear on the deed.',
                'created_at' => '2015-09-17 19:48:00',
                'updated_at' => '2015-09-17 19:48:00',
            ),
            40 =>
            array (
                'id' => 1041,
                'question_id' => 261,
                'answer' => 'building permit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:50:53',
                'updated_at' => '2015-09-17 19:50:53',
            ),
            41 =>
            array (
                'id' => 1042,
                'question_id' => 261,
                'answer' => 'variance.',
                'correct' => 1,
                'definition' => 'The owner is looking for an exception to the zoning.',
                'created_at' => '2015-09-17 19:51:15',
                'updated_at' => '2015-09-17 19:51:15',
            ),
            42 =>
            array (
                'id' => 1043,
                'question_id' => 261,
                'answer' => 'nonconforming use.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:51:28',
                'updated_at' => '2015-09-17 19:51:28',
            ),
            43 =>
            array (
                'id' => 1044,
                'question_id' => 261,
                'answer' => 'special use permit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:52:01',
                'updated_at' => '2015-09-17 19:52:01',
            ),
            44 =>
            array (
                'id' => 1045,
                'question_id' => 262,
                'answer' => 'General contractor',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:52:49',
                'updated_at' => '2015-09-17 19:52:49',
            ),
            45 =>
            array (
                'id' => 1046,
                'question_id' => 262,
                'answer' => 'Subcontractor',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:53:00',
                'updated_at' => '2015-09-17 19:53:00',
            ),
            46 =>
            array (
                'id' => 1047,
                'question_id' => 262,
                'answer' => 'Architect',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:53:09',
                'updated_at' => '2015-09-17 19:53:09',
            ),
            47 =>
            array (
                'id' => 1048,
                'question_id' => 262,
                'answer' => 'Real estate broker',
                'correct' => 1,
                'definition' => 'Brokers cannot file a lien for unpaid commission for sales or for rental management.',
                'created_at' => '2015-09-17 19:53:38',
                'updated_at' => '2015-09-17 19:53:38',
            ),
            48 =>
            array (
                'id' => 1049,
                'question_id' => 263,
                'answer' => 'entirety.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:54:37',
                'updated_at' => '2015-09-17 19:54:37',
            ),
            49 =>
            array (
                'id' => 1050,
                'question_id' => 263,
                'answer' => 'joint.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:54:45',
                'updated_at' => '2015-09-17 19:54:45',
            ),
            50 =>
            array (
                'id' => 1051,
                'question_id' => 263,
                'answer' => 'severalty.',
                'correct' => 1,
                'definition' => 'Each parcel is now held in sole ownership.',
                'created_at' => '2015-09-17 19:55:15',
                'updated_at' => '2015-09-17 19:55:15',
            ),
            51 =>
            array (
                'id' => 1052,
                'question_id' => 263,
                'answer' => 'common.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:55:35',
                'updated_at' => '2015-09-17 19:55:35',
            ),
            52 =>
            array (
                'id' => 1053,
                'question_id' => 264,
                'answer' => 'a small mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:56:50',
                'updated_at' => '2015-09-17 19:56:50',
            ),
            53 =>
            array (
                'id' => 1054,
                'question_id' => 264,
                'answer' => 'a 60% loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:57:04',
                'updated_at' => '2015-09-17 19:57:04',
            ),
            54 =>
            array (
                'id' => 1055,
                'question_id' => 264,
                'answer' => 'a large mortgage.',
                'correct' => 1,
            'definition' => 'The larger the loan amount, the less cash the buyer has invested in the property--the less cash, the greater leverage (or use of other people\'s money, OPM).',
                'created_at' => '2015-09-17 19:57:54',
                'updated_at' => '2015-09-17 19:57:54',
            ),
            55 =>
            array (
                'id' => 1056,
                'question_id' => 264,
                'answer' => 'no mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:58:04',
                'updated_at' => '2015-09-17 19:58:04',
            ),
            56 =>
            array (
                'id' => 1057,
                'question_id' => 265,
                'answer' => 'who is pregnant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:59:18',
                'updated_at' => '2015-09-17 19:59:18',
            ),
            57 =>
            array (
                'id' => 1058,
                'question_id' => 265,
                'answer' => 'in process of securing legal custody of a child.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 19:59:38',
                'updated_at' => '2015-09-17 19:59:38',
            ),
            58 =>
            array (
                'id' => 1059,
                'question_id' => 265,
                'answer' => 'with a child 19 years old.',
                'correct' => 1,
                'definition' => 'The age of majority under the law is 18.',
                'created_at' => '2015-09-17 19:59:50',
                'updated_at' => '2015-09-17 20:00:49',
            ),
            59 =>
            array (
                'id' => 1060,
                'question_id' => 265,
                'answer' => 'who has written permission of a child\'s parents to keep temporary custody of the child.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:00:28',
                'updated_at' => '2015-09-17 20:00:28',
            ),
            60 =>
            array (
                'id' => 1061,
                'question_id' => 266,
                'answer' => 'Filling out a loan application form for the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:01:42',
                'updated_at' => '2015-09-17 20:01:42',
            ),
            61 =>
            array (
                'id' => 1062,
                'question_id' => 266,
                'answer' => 'Selecting the lender for the borrower.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:01:59',
                'updated_at' => '2015-09-17 20:01:59',
            ),
            62 =>
            array (
                'id' => 1063,
                'question_id' => 266,
                'answer' => 'Advising the buyer about possible loans available in the market',
                'correct' => 1,
                'definition' => 'The agent\'s role is to give advice, not to make decisions for the buyer.',
                'created_at' => '2015-09-17 20:02:47',
                'updated_at' => '2015-09-17 20:02:47',
            ),
            63 =>
            array (
                'id' => 1064,
                'question_id' => 266,
                'answer' => 'Cosigning a promissory note in order for the buyer to qualify for a loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:03:17',
                'updated_at' => '2015-09-17 20:03:17',
            ),
            64 =>
            array (
                'id' => 1065,
                'question_id' => 267,
                'answer' => 'promise the client the availability of a specified loan amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:19:28',
                'updated_at' => '2015-09-17 20:19:28',
            ),
            65 =>
            array (
                'id' => 1066,
                'question_id' => 267,
                'answer' => 'show the client houses within the probable price range indicated by the prequalification.',
                'correct' => 1,
                'definition' => 'Because many things can cause a loan to fall through, the agent should caution the buyer not to count on the loan until a final commitment is obtained. Prequalification helps to set the range of properties to preview.',
                'created_at' => '2015-09-17 20:21:18',
                'updated_at' => '2015-09-17 20:21:18',
            ),
            66 =>
            array (
                'id' => 1067,
                'question_id' => 267,
                'answer' => 'require the client to use a specific lender before the sales contract is drafted and presented to the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:21:54',
                'updated_at' => '2015-09-17 20:21:54',
            ),
            67 =>
            array (
                'id' => 1068,
                'question_id' => 267,
                'answer' => 'require the use of the lender who prequalified the client.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:22:17',
                'updated_at' => '2015-09-17 20:22:17',
            ),
            68 =>
            array (
                'id' => 1069,
                'question_id' => 268,
                'answer' => 'Race',
                'correct' => 1,
            'definition' => 'The landlord is exempt under the federal Fair Housing Act but is still covered by the Civil Rights Act of 1866 (racial discrimination).',
                'created_at' => '2015-09-17 20:24:37',
                'updated_at' => '2015-09-17 20:24:37',
            ),
            69 =>
            array (
                'id' => 1070,
                'question_id' => 268,
                'answer' => 'Religion',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:24:48',
                'updated_at' => '2015-09-17 20:24:48',
            ),
            70 =>
            array (
                'id' => 1071,
                'question_id' => 268,
                'answer' => 'National origin',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:24:57',
                'updated_at' => '2015-09-17 20:24:57',
            ),
            71 =>
            array (
                'id' => 1072,
                'question_id' => 268,
                'answer' => 'Sex',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:25:02',
                'updated_at' => '2015-09-17 20:25:02',
            ),
            72 =>
            array (
                'id' => 1073,
                'question_id' => 269,
                'answer' => 'Reasonable modifications at expense of tenant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:26:22',
                'updated_at' => '2015-09-17 20:26:22',
            ),
            73 =>
            array (
                'id' => 1074,
                'question_id' => 269,
                'answer' => 'Reasonable accomm0odations in the rules and polices',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:26:41',
                'updated_at' => '2015-09-17 20:26:41',
            ),
            74 =>
            array (
                'id' => 1075,
                'question_id' => 269,
                'answer' => 'Premises that are newly designed must meet certain accessibility requirements',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:27:08',
                'updated_at' => '2015-09-17 20:27:08',
            ),
            75 =>
            array (
                'id' => 1076,
                'question_id' => 269,
                'answer' => 'Lower rent payments charged to handicapped tenants.',
                'correct' => 1,
                'definition' => 'The law does not regulate amount of rent.',
                'created_at' => '2015-09-17 20:27:37',
                'updated_at' => '2015-09-17 20:27:37',
            ),
            76 =>
            array (
                'id' => 1077,
                'question_id' => 270,
                'answer' => 'College transcripts',
                'correct' => 1,
                'definition' => 'Lenders are concerned with financial data, not educational background.',
                'created_at' => '2015-09-17 20:50:15',
                'updated_at' => '2015-09-17 20:50:15',
            ),
            77 =>
            array (
                'id' => 1078,
                'question_id' => 270,
                'answer' => 'Pay stubs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:50:29',
                'updated_at' => '2015-09-17 20:50:29',
            ),
            78 =>
            array (
                'id' => 1079,
                'question_id' => 270,
                'answer' => 'Last two years\' personal income tax returns',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:50:49',
                'updated_at' => '2015-09-17 20:50:49',
            ),
            79 =>
            array (
                'id' => 1080,
                'question_id' => 270,
                'answer' => 'Current business financial statements',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:51:01',
                'updated_at' => '2015-09-17 20:51:01',
            ),
            80 =>
            array (
                'id' => 1081,
                'question_id' => 271,
                'answer' => 'Refusing to make any modifications in a unit that will add to the comfort and safety of a handicapped tenant',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:52:39',
                'updated_at' => '2015-09-17 20:52:39',
            ),
            81 =>
            array (
                'id' => 1082,
                'question_id' => 271,
                'answer' => 'Refusing permission to a handicapped tenant to make modifications unless the tenant pays the cost',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:53:03',
                'updated_at' => '2015-09-17 20:53:03',
            ),
            82 =>
            array (
                'id' => 1083,
                'question_id' => 271,
                'answer' => 'Refusing permission to a handicapped tenant to make modifications unless the tenant agrees to restore the premises to approximately the same condition at the end of the lease.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:53:42',
                'updated_at' => '2015-09-17 20:53:42',
            ),
            83 =>
            array (
                'id' => 1084,
                'question_id' => 271,
                'answer' => 'Refusing permission to a tenant who pays the cost and agrees to restore the property to its original condition',
                'correct' => 1,
                'definition' => 'The landlord does not have to make modifications to accommodate a handicapped person but does have to agree to modifications paid for by the tenant.',
                'created_at' => '2015-09-17 20:54:44',
                'updated_at' => '2015-09-17 20:54:44',
            ),
            84 =>
            array (
                'id' => 1085,
                'question_id' => 272,
                'answer' => 'Provide all of the information to the licensee so that the licensee can fill out the application for the borrower',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:57:19',
                'updated_at' => '2015-09-17 20:57:19',
            ),
            85 =>
            array (
                'id' => 1086,
                'question_id' => 272,
                'answer' => 'Submit all account numbers and branch locations and addresses of banks and lenders with application',
                'correct' => 1,
                'definition' => 'This information is required to obtain a credit history of the borrowers',
                'created_at' => '2015-09-17 20:58:07',
                'updated_at' => '2015-09-17 20:58:07',
            ),
            86 =>
            array (
                'id' => 1087,
                'question_id' => 272,
                'answer' => 'Provide the lender with a photograph of the borrower',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:58:24',
                'updated_at' => '2015-09-17 20:58:24',
            ),
            87 =>
            array (
                'id' => 1088,
                'question_id' => 272,
                'answer' => 'Disclose allphysical handicaps of borrower',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 20:58:39',
                'updated_at' => '2015-09-17 20:58:39',
            ),
            88 =>
            array (
                'id' => 1089,
                'question_id' => 273,
                'answer' => 'Receipt of alimony',
                'correct' => 1,
                'definition' => 'Payments need to be disclosed, not all sources of income.',
                'created_at' => '2015-09-17 21:03:23',
                'updated_at' => '2015-09-17 21:03:23',
            ),
            89 =>
            array (
                'id' => 1090,
                'question_id' => 273,
                'answer' => 'Payment of child support',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:03:36',
                'updated_at' => '2015-09-17 21:03:36',
            ),
            90 =>
            array (
                'id' => 1091,
                'question_id' => 273,
                'answer' => 'Car loan payments',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:03:47',
                'updated_at' => '2015-09-17 21:03:47',
            ),
            91 =>
            array (
                'id' => 1092,
                'question_id' => 273,
                'answer' => 'Second mortgage obligations',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:04:08',
                'updated_at' => '2015-09-17 21:04:08',
            ),
            92 =>
            array (
                'id' => 1093,
                'question_id' => 274,
                'answer' => 'Adjustable-rate mortgage',
                'correct' => 1,
                'definition' => 'The ARM is based on some predetermined index. such as the U.S. Treasury Bill rate.',
                'created_at' => '2015-09-17 21:06:48',
                'updated_at' => '2015-09-17 21:06:48',
            ),
            93 =>
            array (
                'id' => 1094,
                'question_id' => 274,
                'answer' => 'Graduated-payment mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:07:10',
                'updated_at' => '2015-09-17 21:07:10',
            ),
            94 =>
            array (
                'id' => 1095,
                'question_id' => 274,
                'answer' => 'Rollover mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:07:23',
                'updated_at' => '2015-09-17 21:07:34',
            ),
            95 =>
            array (
                'id' => 1096,
                'question_id' => 274,
                'answer' => 'Reverse-annuity mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:07:52',
                'updated_at' => '2015-09-17 21:07:52',
            ),
            96 =>
            array (
                'id' => 1097,
                'question_id' => 275,
                'answer' => 'Growing-equity mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:08:36',
                'updated_at' => '2015-09-17 21:08:36',
            ),
            97 =>
            array (
                'id' => 1098,
                'question_id' => 275,
                'answer' => 'Biweekly fixed rate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:08:49',
                'updated_at' => '2015-09-17 21:08:49',
            ),
            98 =>
            array (
                'id' => 1099,
                'question_id' => 275,
                'answer' => 'Level payment, fixed rate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:09:01',
                'updated_at' => '2015-09-17 21:09:01',
            ),
            99 =>
            array (
                'id' => 1100,
                'question_id' => 275,
                'answer' => 'Reverse-annuity mortgage',
                'correct' => 1,
                'definition' => 'As payments are made, the principal increases. In a GEM, the loan is paid off early, because principal payments are increased during the term of the loan.',
                'created_at' => '2015-09-17 21:10:59',
                'updated_at' => '2015-09-17 21:10:59',
            ),
            100 =>
            array (
                'id' => 1101,
                'question_id' => 276,
                'answer' => 'One day',
                'correct' => 1,
            'definition' => 'Escrow sends the Settlement Statement (HUD-1) and a disclosure document, but no right of rescission exists.',
                'created_at' => '2015-09-17 21:13:19',
                'updated_at' => '2015-09-17 21:13:19',
            ),
            101 =>
            array (
                'id' => 1102,
                'question_id' => 276,
                'answer' => 'Three days',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:13:34',
                'updated_at' => '2015-09-17 21:13:34',
            ),
            102 =>
            array (
                'id' => 1103,
                'question_id' => 276,
                'answer' => 'Five days',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:13:49',
                'updated_at' => '2015-09-17 21:13:49',
            ),
            103 =>
            array (
                'id' => 1104,
                'question_id' => 276,
                'answer' => 'No advance inspection required',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:14:08',
                'updated_at' => '2015-09-17 21:14:08',
            ),
            104 =>
            array (
                'id' => 1105,
                'question_id' => 277,
                'answer' => 'If a salesperson does not meet the professional standards of a licensed attorney',
                'correct' => 1,
                'definition' => 'If the salesperson is practicing law without a license, the salesperson is held to the standards of an attorney.',
                'created_at' => '2015-09-17 21:29:48',
                'updated_at' => '2015-09-17 21:29:48',
            ),
            105 =>
            array (
                'id' => 1106,
                'question_id' => 277,
                'answer' => 'If the client fails to make a profit on the deal',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:30:06',
                'updated_at' => '2015-09-17 21:30:06',
            ),
            106 =>
            array (
                'id' => 1107,
                'question_id' => 277,
                'answer' => 'If the salesperson does not have the contract reviewed by his or her employing broker',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:30:34',
                'updated_at' => '2015-09-17 21:30:34',
            ),
            107 =>
            array (
                'id' => 1108,
                'question_id' => 277,
                'answer' => 'If the salesperson fails to get written permission, in advance of drafting the contract, from the board of REALTORS®',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:32:10',
                'updated_at' => '2015-09-17 21:32:10',
            ),
            108 =>
            array (
                'id' => 1109,
                'question_id' => 278,
                'answer' => 'suggest that the parties consult an attorney.',
                'correct' => 1,
                'definition' => 'These provisions are to complex for the untrained salesperson and require the use of a legal expert.',
                'created_at' => '2015-09-17 21:34:00',
                'updated_at' => '2015-09-17 21:34:00',
            ),
            109 =>
            array (
                'id' => 1110,
                'question_id' => 278,
                'answer' => 'disclose that this would make the salesperson a mortgage broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:34:20',
                'updated_at' => '2015-09-17 21:34:20',
            ),
            110 =>
            array (
                'id' => 1111,
                'question_id' => 278,
                'answer' => 'fill out a standard purchase-money mortgage form.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:34:36',
                'updated_at' => '2015-09-17 21:34:36',
            ),
            111 =>
            array (
                'id' => 1112,
                'question_id' => 278,
                'answer' => 'obtain the proper language from a bank.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:34:52',
                'updated_at' => '2015-09-17 21:34:52',
            ),
            112 =>
            array (
                'id' => 1113,
                'question_id' => 279,
                'answer' => 'The licensee is a dual agent.',
                'correct' => 1,
                'definition' => 'As a dual agent, the licensee needs to obtain the written informed consent of both the buyer and seller clients.',
                'created_at' => '2015-09-17 21:36:28',
                'updated_at' => '2015-09-17 21:36:28',
            ),
            113 =>
            array (
                'id' => 1114,
                'question_id' => 279,
                'answer' => 'The buyer is now a "customer."',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:38:14',
                'updated_at' => '2015-09-17 21:38:14',
            ),
            114 =>
            array (
                'id' => 1115,
                'question_id' => 279,
                'answer' => 'The seller is now a "customer."',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:38:31',
                'updated_at' => '2015-09-17 21:38:31',
            ),
            115 =>
            array (
                'id' => 1116,
                'question_id' => 279,
                'answer' => 'The buyer is unrepresented.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:39:03',
                'updated_at' => '2015-09-17 21:39:03',
            ),
            116 =>
            array (
                'id' => 1117,
                'question_id' => 280,
                'answer' => 'The seller is dying of AIDS.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:40:13',
                'updated_at' => '2015-09-17 21:40:13',
            ),
            117 =>
            array (
                'id' => 1118,
                'question_id' => 280,
                'answer' => 'The building does not conform with tax records.',
                'correct' => 1,
                'definition' => 'This indicates there may be a building code violation. In most states, AIDS is not deemed to be a material fact--disclosure may invade the seller\'s privacy.',
                'created_at' => '2015-09-17 21:41:21',
                'updated_at' => '2015-09-17 21:41:21',
            ),
            118 =>
            array (
                'id' => 1119,
                'question_id' => 280,
                'answer' => 'The price the seller paid for the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:42:36',
                'updated_at' => '2015-09-17 21:42:36',
            ),
            119 =>
            array (
                'id' => 1120,
                'question_id' => 280,
                'answer' => 'The seller is about to obtain a divorce.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:42:51',
                'updated_at' => '2015-09-17 21:42:51',
            ),
            120 =>
            array (
                'id' => 1121,
                'question_id' => 281,
                'answer' => 'Make sure the contingency is properly and clearly stated',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:43:56',
                'updated_at' => '2015-09-17 21:43:56',
            ),
            121 =>
            array (
                'id' => 1122,
                'question_id' => 281,
                'answer' => 'Make sure the client diligently adheres to all time provisions',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:44:14',
                'updated_at' => '2015-09-17 21:44:14',
            ),
            122 =>
            array (
                'id' => 1123,
                'question_id' => 281,
                'answer' => 'Obtain all receipts, satisfactions, waivers, approval and failure notices, and other matters in writing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:44:47',
                'updated_at' => '2015-09-17 21:44:47',
            ),
            123 =>
            array (
                'id' => 1124,
                'question_id' => 281,
                'answer' => 'Require an additional earnest money deposit for each contingency',
                'correct' => 1,
                'definition' => 'If the buyer fails to meet the contingency despite good-faith efforts, the buyer is entitled to the return of all the deposit money.',
                'created_at' => '2015-09-17 21:45:42',
                'updated_at' => '2015-09-17 21:45:42',
            ),
            124 =>
            array (
                'id' => 1125,
                'question_id' => 282,
                'answer' => 'disclosed and obvious defects.',
                'correct' => 1,
                'definition' => 'The "as is" clause relates to obvious and disclosed defects. If a seller knows of hidden defects, the "as is" clause won\'t free the seller of liability for affirmative concealment of such facts.',
                'created_at' => '2015-09-17 21:47:31',
                'updated_at' => '2015-09-17 21:47:31',
            ),
            125 =>
            array (
                'id' => 1126,
                'question_id' => 282,
                'answer' => 'any hidden defects.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:47:50',
                'updated_at' => '2015-09-17 21:47:50',
            ),
            126 =>
            array (
                'id' => 1127,
                'question_id' => 282,
                'answer' => 'affirmative misrepresentation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:48:12',
                'updated_at' => '2015-09-17 21:48:12',
            ),
            127 =>
            array (
                'id' => 1128,
                'question_id' => 282,
                'answer' => 'all property defects.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:48:24',
                'updated_at' => '2015-09-17 21:48:24',
            ),
            128 =>
            array (
                'id' => 1129,
                'question_id' => 283,
                'answer' => 'a dual agent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:49:19',
                'updated_at' => '2015-09-17 21:49:19',
            ),
            129 =>
            array (
                'id' => 1130,
                'question_id' => 283,
                'answer' => 'an attorney-in-fact.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:49:32',
                'updated_at' => '2015-09-17 21:49:32',
            ),
            130 =>
            array (
                'id' => 1131,
                'question_id' => 283,
                'answer' => 'required to make disclosure of the dual agency to the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:49:56',
                'updated_at' => '2015-09-17 21:49:56',
            ),
            131 =>
            array (
                'id' => 1132,
                'question_id' => 283,
                'answer' => 'a single agent.',
                'correct' => 1,
                'definition' => 'A single agent represents either a buyer or a seller, but never both as in this case.',
                'created_at' => '2015-09-17 21:50:35',
                'updated_at' => '2015-09-17 21:50:35',
            ),
            132 =>
            array (
                'id' => 1133,
                'question_id' => 284,
                'answer' => 'federal law usually prevails',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:56:37',
                'updated_at' => '2015-09-17 21:56:37',
            ),
            133 =>
            array (
                'id' => 1134,
                'question_id' => 284,
                'answer' => 'state law usually prevails.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:56:54',
                'updated_at' => '2015-09-17 21:56:54',
            ),
            134 =>
            array (
                'id' => 1135,
                'question_id' => 284,
                'answer' => 'the law that gives the most protection to the consumer prevails.',
                'correct' => 1,
                'definition' => 'In some cases, state law is more strict than federal law.',
                'created_at' => '2015-09-17 21:57:32',
                'updated_at' => '2015-09-17 21:57:32',
            ),
            135 =>
            array (
                'id' => 1136,
                'question_id' => 284,
                'answer' => 'the law that gives the most protection to the homeowner prevails.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:57:54',
                'updated_at' => '2015-09-17 21:57:54',
            ),
            136 =>
            array (
                'id' => 1137,
                'question_id' => 285,
                'answer' => 'Ads using words like "private," "integrated," or "traditional"',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 21:59:43',
                'updated_at' => '2015-09-17 21:59:43',
            ),
            137 =>
            array (
                'id' => 1138,
                'question_id' => 285,
                'answer' => 'A series of ads using models but failing to include some representation of other major racial groups',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:00:12',
                'updated_at' => '2015-09-17 22:00:12',
            ),
            138 =>
            array (
                'id' => 1139,
                'question_id' => 285,
                'answer' => 'Advertising limiting housing to people of a particular religion',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:00:38',
                'updated_at' => '2015-09-17 22:00:38',
            ),
            139 =>
            array (
                'id' => 1140,
                'question_id' => 285,
                'answer' => 'Ads for low-income housing',
                'correct' => 1,
                'definition' => 'The fact that housing is directed at low-income prospects is not discriminatory. ',
                'created_at' => '2015-09-17 22:02:22',
                'updated_at' => '2015-09-17 22:02:22',
            ),
            140 =>
            array (
                'id' => 1141,
                'question_id' => 286,
                'answer' => 'reconciliation.',
                'correct' => 1,
                'definition' => 'Different weights are assigned to each method, depending on the particular circumstances. Assemblage is the increased value created by consolidating several lots.',
                'created_at' => '2015-09-17 22:04:03',
                'updated_at' => '2015-09-17 22:04:03',
            ),
            141 =>
            array (
                'id' => 1142,
                'question_id' => 286,
                'answer' => 'weighted analysis.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:04:19',
                'updated_at' => '2015-09-17 22:04:19',
            ),
            142 =>
            array (
                'id' => 1143,
                'question_id' => 286,
                'answer' => 'adjustment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:04:28',
                'updated_at' => '2015-09-17 22:04:28',
            ),
            143 =>
            array (
                'id' => 1144,
                'question_id' => 286,
                'answer' => 'assemblage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:04:42',
                'updated_at' => '2015-09-17 22:04:42',
            ),
            144 =>
            array (
                'id' => 1145,
                'question_id' => 287,
                'answer' => 'consolidation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:05:24',
                'updated_at' => '2015-09-17 22:05:24',
            ),
            145 =>
            array (
                'id' => 1146,
                'question_id' => 287,
                'answer' => 'downzoning.',
                'correct' => 1,
                'definition' => 'Downzoning is a change from a higher-use classification to a lower one, often causing a devaluation in property value.',
                'created_at' => '2015-09-17 22:06:18',
                'updated_at' => '2015-09-17 22:06:18',
            ),
            146 =>
            array (
                'id' => 1147,
                'question_id' => 287,
                'answer' => 'spot zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:06:30',
                'updated_at' => '2015-09-17 22:06:30',
            ),
            147 =>
            array (
                'id' => 1148,
                'question_id' => 287,
                'answer' => 'restrictive zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:06:57',
                'updated_at' => '2015-09-17 22:06:57',
            ),
            148 =>
            array (
                'id' => 1149,
                'question_id' => 288,
                'answer' => 'determine net income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:07:36',
                'updated_at' => '2015-09-17 22:07:36',
            ),
            149 =>
            array (
                'id' => 1150,
                'question_id' => 288,
                'answer' => 'evaluate commercial joint ventures.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:07:52',
                'updated_at' => '2015-09-17 22:07:52',
            ),
            150 =>
            array (
                'id' => 1151,
                'question_id' => 288,
                'answer' => 'select the proper capitalization rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:08:05',
                'updated_at' => '2015-09-17 22:08:05',
            ),
            151 =>
            array (
                'id' => 1152,
                'question_id' => 288,
                'answer' => 'convert a property\'s net income into market value.',
                'correct' => 1,
            'definition' => 'This method considers the property\'s net operating income and the expected return (cap rate) to arrive at an estimate of value.',
                'created_at' => '2015-09-17 22:08:55',
                'updated_at' => '2015-09-17 22:08:55',
            ),
            152 =>
            array (
                'id' => 1153,
                'question_id' => 289,
                'answer' => 'tenant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:09:50',
                'updated_at' => '2015-09-17 22:09:50',
            ),
            153 =>
            array (
                'id' => 1154,
                'question_id' => 289,
                'answer' => 'lessee.',
                'correct' => 1,
                'definition' => 'The sublessor is the lessee under the original lease; the tenant occupying the property is the sublessee.',
                'created_at' => '2015-09-17 22:10:35',
                'updated_at' => '2015-09-17 22:10:49',
            ),
            154 =>
            array (
                'id' => 1155,
                'question_id' => 289,
                'answer' => 'lessor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:11:11',
                'updated_at' => '2015-09-17 22:11:11',
            ),
            155 =>
            array (
                'id' => 1156,
                'question_id' => 289,
                'answer' => 'owner.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:11:18',
                'updated_at' => '2015-09-17 22:11:18',
            ),
            156 =>
            array (
                'id' => 1157,
                'question_id' => 290,
                'answer' => 'Percentage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:12:10',
                'updated_at' => '2015-09-17 22:12:10',
            ),
            157 =>
            array (
                'id' => 1158,
                'question_id' => 290,
                'answer' => 'Gross',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:12:24',
                'updated_at' => '2015-09-17 22:12:24',
            ),
            158 =>
            array (
                'id' => 1159,
                'question_id' => 290,
                'answer' => 'Triple net',
                'correct' => 1,
                'definition' => 'Under a net lease, the lessee typically pays the carrying charges on the property, such as taxes and insurance.',
                'created_at' => '2015-09-17 22:13:06',
                'updated_at' => '2015-09-17 22:13:06',
            ),
            159 =>
            array (
                'id' => 1160,
                'question_id' => 290,
                'answer' => 'Index',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:13:16',
                'updated_at' => '2015-09-17 22:13:16',
            ),
            160 =>
            array (
                'id' => 1161,
                'question_id' => 291,
                'answer' => 'location.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:14:09',
                'updated_at' => '2015-09-17 22:14:09',
            ),
            161 =>
            array (
                'id' => 1162,
                'question_id' => 291,
                'answer' => 'comparable sales.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:14:17',
                'updated_at' => '2015-09-17 22:14:17',
            ),
            162 =>
            array (
                'id' => 1163,
                'question_id' => 291,
                'answer' => 'amenitites.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:14:27',
                'updated_at' => '2015-09-17 22:14:27',
            ),
            163 =>
            array (
                'id' => 1164,
                'question_id' => 291,
                'answer' => 'extraordinary expenses.',
                'correct' => 1,
                'definition' => 'If a building incurs large expenses, the gross revenues will bear little relationship to the net.',
                'created_at' => '2015-09-17 22:15:07',
                'updated_at' => '2015-09-17 22:15:07',
            ),
            164 =>
            array (
                'id' => 1165,
                'question_id' => 292,
                'answer' => 'Increases $80,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:16:11',
                'updated_at' => '2015-09-17 22:16:11',
            ),
            165 =>
            array (
                'id' => 1166,
                'question_id' => 292,
                'answer' => 'Decreases $8,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:16:24',
                'updated_at' => '2015-09-17 22:16:24',
            ),
            166 =>
            array (
                'id' => 1167,
                'question_id' => 292,
                'answer' => 'Decreases $80,000',
                'correct' => 1,
                'definition' => 'Because rents are fixed, there is an $8,000 loss in income. $8,000 / 0.10 = $80,000',
                'created_at' => '2015-09-17 22:17:09',
                'updated_at' => '2015-09-17 22:17:09',
            ),
            167 =>
            array (
                'id' => 1168,
                'question_id' => 292,
                'answer' => 'No change',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:17:20',
                'updated_at' => '2015-09-17 22:17:20',
            ),
            168 =>
            array (
                'id' => 1169,
                'question_id' => 293,
                'answer' => 'provide borrower with a copy of HUD booklet within three business days.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:18:32',
                'updated_at' => '2015-09-17 22:18:32',
            ),
            169 =>
            array (
                'id' => 1170,
                'question_id' => 293,
                'answer' => 'allow borrower to inspect HUD settlement statement one business day before settlement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:18:56',
                'updated_at' => '2015-09-17 22:18:56',
            ),
            170 =>
            array (
                'id' => 1171,
                'question_id' => 293,
                'answer' => 'charge a reasonable fee for preparation of RESPA form.',
                'correct' => 1,
                'definition' => 'No fee may be charged by a lender for preparing required RESPA forms.',
                'created_at' => '2015-09-17 22:19:44',
                'updated_at' => '2015-09-17 22:19:44',
            ),
            171 =>
            array (
                'id' => 1172,
                'question_id' => 293,
                'answer' => 'provide borrower with further estimate of likely settlement charges.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:20:04',
                'updated_at' => '2015-09-17 22:20:04',
            ),
            172 =>
            array (
                'id' => 1173,
                'question_id' => 294,
                'answer' => 'Trustee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:20:40',
                'updated_at' => '2015-09-17 22:20:40',
            ),
            173 =>
            array (
                'id' => 1174,
                'question_id' => 294,
                'answer' => 'Mortgagee',
                'correct' => 1,
            'definition' => 'The assignment of rents provision allows the mortgagee (lender) to collect rent during the default of the loan.',
                'created_at' => '2015-09-17 22:21:19',
                'updated_at' => '2015-09-17 22:21:19',
            ),
            174 =>
            array (
                'id' => 1175,
                'question_id' => 294,
                'answer' => 'Mortgagor',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:21:31',
                'updated_at' => '2015-09-17 22:21:31',
            ),
            175 =>
            array (
                'id' => 1176,
                'question_id' => 294,
                'answer' => 'Lessee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:21:41',
                'updated_at' => '2015-09-17 22:21:41',
            ),
            176 =>
            array (
                'id' => 1177,
                'question_id' => 295,
                'answer' => 'A ban on expanding use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:22:25',
                'updated_at' => '2015-09-17 22:22:25',
            ),
            177 =>
            array (
                'id' => 1178,
                'question_id' => 295,
                'answer' => 'An eventual time for the use to stop',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:22:38',
                'updated_at' => '2015-09-17 22:22:38',
            ),
            178 =>
            array (
                'id' => 1179,
                'question_id' => 295,
                'answer' => 'A ban on rebuilding once the structure deteriorates',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-17 22:22:52',
                'updated_at' => '2015-09-17 22:22:52',
            ),
            179 =>
            array (
                'id' => 1180,
                'question_id' => 295,
                'answer' => 'A requirement to switch to a permitted use immediately',
                'correct' => 1,
                'definition' => 'Laws generally permit the nonconforming use to continue until such time as the structure needs to be rebuilt.',
                'created_at' => '2015-09-17 22:23:43',
                'updated_at' => '2015-09-17 22:23:43',
            ),
            180 =>
            array (
                'id' => 1181,
                'question_id' => 296,
                'answer' => 'Progression',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:15:00',
                'updated_at' => '2015-09-27 11:15:00',
            ),
            181 =>
            array (
                'id' => 1182,
                'question_id' => 296,
                'answer' => 'Substitution',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:15:14',
                'updated_at' => '2015-09-27 11:15:14',
            ),
            182 =>
            array (
                'id' => 1183,
                'question_id' => 296,
                'answer' => 'Highest and best use',
                'correct' => 1,
                'definition' => 'Highest and best use is that use that at a given time produces the best net return for the property.',
                'created_at' => '2015-09-27 11:15:58',
                'updated_at' => '2015-09-27 11:15:58',
            ),
            183 =>
            array (
                'id' => 1184,
                'question_id' => 296,
                'answer' => 'Regression',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:16:13',
                'updated_at' => '2015-09-27 11:16:13',
            ),
            184 =>
            array (
                'id' => 1185,
                'question_id' => 297,
                'answer' => 'a partial amortization loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:17:01',
                'updated_at' => '2015-09-27 11:17:01',
            ),
            185 =>
            array (
                'id' => 1186,
                'question_id' => 297,
                'answer' => 'a fully amortized loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:17:12',
                'updated_at' => '2015-09-27 11:17:12',
            ),
            186 =>
            array (
                'id' => 1187,
                'question_id' => 297,
                'answer' => 'a reverse annuity loan.',
                'correct' => 1,
                'definition' => 'Under a reverse annuity loan, the lender pays the borrower a certain amount each month. The borrower eventually will pay back principal plus interest on the interest portion of the payments.',
                'created_at' => '2015-09-27 11:18:07',
                'updated_at' => '2015-09-27 11:18:07',
            ),
            187 =>
            array (
                'id' => 1188,
                'question_id' => 297,
                'answer' => 'an adjustable rate loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:18:25',
                'updated_at' => '2015-09-27 11:18:25',
            ),
            188 =>
            array (
                'id' => 1189,
                'question_id' => 298,
                'answer' => 'price of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:19:06',
                'updated_at' => '2015-09-27 11:19:06',
            ),
            189 =>
            array (
                'id' => 1190,
                'question_id' => 298,
                'answer' => 'fact an agent placed the ad.',
                'correct' => 1,
                'definition' => 'Licensing laws require that brokers placing ads must identify themselves as licensees: otherwise, a buyer might think this was a "for sale by owner."',
                'created_at' => '2015-09-27 11:20:01',
                'updated_at' => '2015-09-27 11:20:01',
            ),
            190 =>
            array (
                'id' => 1191,
                'question_id' => 298,
                'answer' => 'location of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:20:13',
                'updated_at' => '2015-09-27 11:20:13',
            ),
            191 =>
            array (
                'id' => 1192,
                'question_id' => 298,
                'answer' => 'fact the owner is leaving the state.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 11:20:27',
                'updated_at' => '2015-09-27 11:20:27',
            ),
            192 =>
            array (
                'id' => 1193,
                'question_id' => 299,
                'answer' => 'Lessor can increase the rent to any amount',
                'correct' => 1,
                'definition' => 'At the end of the lease, the landlord is not required to renegotiate, unless the lease contains specific provisions.',
                'created_at' => '2015-09-27 22:14:08',
                'updated_at' => '2015-09-27 22:14:08',
            ),
            193 =>
            array (
                'id' => 1194,
                'question_id' => 299,
                'answer' => 'Mandatory arbitration is required to set the new rent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:14:36',
                'updated_at' => '2015-09-27 22:14:36',
            ),
            194 =>
            array (
                'id' => 1195,
                'question_id' => 299,
                'answer' => 'Court appoints a commissioner to set rent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:15:02',
                'updated_at' => '2015-09-27 22:15:02',
            ),
            195 =>
            array (
                'id' => 1196,
                'question_id' => 299,
                'answer' => 'Litigation is needed if agreement is not reached within 180 days',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:15:44',
                'updated_at' => '2015-09-27 22:15:44',
            ),
            196 =>
            array (
                'id' => 1197,
                'question_id' => 300,
                'answer' => 'Capitalization',
                'correct' => 1,
                'definition' => 'The capitalization or income approach analyzes the net operating income and the expected rate of return on the investment.',
                'created_at' => '2015-09-27 22:17:41',
                'updated_at' => '2015-09-27 22:17:41',
            ),
            197 =>
            array (
                'id' => 1198,
                'question_id' => 300,
                'answer' => 'Direct sales comparison',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:27:14',
                'updated_at' => '2015-09-27 22:27:14',
            ),
            198 =>
            array (
                'id' => 1199,
                'question_id' => 300,
                'answer' => 'Cost',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:27:23',
                'updated_at' => '2015-09-27 22:27:23',
            ),
            199 =>
            array (
                'id' => 1200,
                'question_id' => 300,
                'answer' => 'Summation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:27:32',
                'updated_at' => '2015-09-27 22:27:32',
            ),
            200 =>
            array (
                'id' => 1201,
                'question_id' => 301,
                'answer' => 'Retained an attorney',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:30:18',
                'updated_at' => '2015-09-27 22:30:18',
            ),
            201 =>
            array (
                'id' => 1202,
                'question_id' => 301,
                'answer' => 'Used a salesperson to represent him',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:30:33',
                'updated_at' => '2015-09-27 22:30:33',
            ),
            202 =>
            array (
                'id' => 1203,
                'question_id' => 301,
                'answer' => 'Terminated the listing and advised the seller to retain other counsel',
                'correct' => 1,
                'definition' => 'The risk of buying an in-house listing is that the seller will later claim breach of the fiduciary duties of loyalty and full disclosure. While not foolproof, the best technique is to terminate the agency relationship and advise the seller to retain an attorney or another broker.',
                'created_at' => '2015-09-27 22:32:54',
                'updated_at' => '2015-09-27 22:32:54',
            ),
            203 =>
            array (
                'id' => 1204,
                'question_id' => 301,
                'answer' => 'Avoided giving the seller a second mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:33:18',
                'updated_at' => '2015-09-27 22:33:18',
            ),
            204 =>
            array (
                'id' => 1205,
                'question_id' => 302,
                'answer' => '0.0006',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:34:58',
                'updated_at' => '2015-09-27 22:34:58',
            ),
            205 =>
            array (
                'id' => 1206,
                'question_id' => 302,
                'answer' => '0.0008',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:35:12',
                'updated_at' => '2015-09-27 22:35:12',
            ),
            206 =>
            array (
                'id' => 1207,
                'question_id' => 302,
                'answer' => '133.33',
                'correct' => 1,
                'definition' => '$70,000 + 525 = 133.33',
                'created_at' => '2015-09-27 22:35:44',
                'updated_at' => '2015-09-27 22:35:44',
            ),
            207 =>
            array (
                'id' => 1208,
                'question_id' => 302,
                'answer' => '175',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:35:55',
                'updated_at' => '2015-09-27 22:35:55',
            ),
            208 =>
            array (
                'id' => 1209,
                'question_id' => 303,
                'answer' => 'Progression',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:40:51',
                'updated_at' => '2015-09-27 22:40:51',
            ),
            209 =>
            array (
                'id' => 1210,
                'question_id' => 303,
                'answer' => 'Reconciliation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:41:04',
                'updated_at' => '2015-09-27 22:41:04',
            ),
            210 =>
            array (
                'id' => 1211,
                'question_id' => 303,
                'answer' => 'Regression',
                'correct' => 1,
                'definition' => 'Regression states that, as between dissimilar properties, the worth of the better property is adversely affected by the presence of the lesser-quality property. Progression is the opposite.',
                'created_at' => '2015-09-27 22:41:47',
                'updated_at' => '2015-10-26 09:59:13',
            ),
            211 =>
            array (
                'id' => 1212,
                'question_id' => 303,
                'answer' => 'Substitution',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:42:00',
                'updated_at' => '2015-09-27 22:42:00',
            ),
            212 =>
            array (
                'id' => 1213,
                'question_id' => 304,
                'answer' => 'fixed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:42:51',
                'updated_at' => '2015-09-27 22:42:51',
            ),
            213 =>
            array (
                'id' => 1214,
                'question_id' => 304,
                'answer' => 'nonrecourse.',
                'correct' => 1,
                'definition' => 'The lender agrees to limit its recovery to the money generated at the foreclosure sale. Some states have antideficiency legislation to curb selling at speculative prices.',
                'created_at' => '2015-09-27 22:43:01',
                'updated_at' => '2015-09-27 22:44:49',
            ),
            214 =>
            array (
                'id' => 1215,
                'question_id' => 304,
                'answer' => 'adjusted.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:43:10',
                'updated_at' => '2015-09-27 22:43:10',
            ),
            215 =>
            array (
                'id' => 1216,
                'question_id' => 304,
                'answer' => 'nonmonetary.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:43:26',
                'updated_at' => '2015-09-27 22:43:26',
            ),
            216 =>
            array (
                'id' => 1217,
                'question_id' => 305,
                'answer' => 'Nonrecourse',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:45:46',
                'updated_at' => '2015-09-27 22:45:46',
            ),
            217 =>
            array (
                'id' => 1218,
                'question_id' => 305,
                'answer' => 'Judicial',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:47:50',
                'updated_at' => '2015-09-27 22:47:50',
            ),
            218 =>
            array (
                'id' => 1219,
                'question_id' => 305,
                'answer' => 'Deed in lieu of foreclosure',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:48:23',
                'updated_at' => '2015-09-27 22:48:23',
            ),
            219 =>
            array (
                'id' => 1220,
                'question_id' => 305,
                'answer' => 'Nonjudicial',
                'correct' => 1,
                'definition' => 'A nonjudicial foreclosure requires a special clause in the mortgage that would permit a sale to take place without the need for a more time-consuming and expensive court action. No deficiency judgment can be obtained, however.',
                'created_at' => '2015-09-27 22:49:26',
                'updated_at' => '2015-09-27 22:49:26',
            ),
            220 =>
            array (
                'id' => 1221,
                'question_id' => 306,
                'answer' => 'the seller is entitled to possession of the property until the debt is paid.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:50:29',
                'updated_at' => '2015-09-27 22:50:29',
            ),
            221 =>
            array (
                'id' => 1222,
                'question_id' => 306,
                'answer' => 'the seller retains legal title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:50:44',
                'updated_at' => '2015-09-27 22:50:44',
            ),
            222 =>
            array (
                'id' => 1223,
                'question_id' => 306,
                'answer' => 'the buyer may place no second mortgage on the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:51:02',
                'updated_at' => '2015-09-27 22:51:02',
            ),
            223 =>
            array (
                'id' => 1224,
                'question_id' => 306,
                'answer' => 'this is a purchase-money mortgage.',
                'correct' => 1,
                'definition' => 'Possession and title pass to the buyer, but the seller retains a security interest pending full payment of the debt. Sellers usually do not restrict junior financing.',
                'created_at' => '2015-09-27 22:52:20',
                'updated_at' => '2015-09-27 22:52:20',
            ),
            224 =>
            array (
                'id' => 1225,
                'question_id' => 307,
                'answer' => '$1,012.15.',
                'correct' => 1,
                'definition' => 'Tax = $625.32 / 12 = $52.11/month

Lease = $720 / 6 = $120/month

Insurance = $586.22 / 36 = $16.28/month

Loan = $823.76/month

Payment = $1,1012.15 total',
                'created_at' => '2015-09-27 22:56:34',
                'updated_at' => '2015-09-27 22:56:34',
            ),
            225 =>
            array (
                'id' => 1226,
                'question_id' => 307,
                'answer' => '$1,132.15.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:57:16',
                'updated_at' => '2015-09-27 22:57:16',
            ),
            226 =>
            array (
                'id' => 1227,
                'question_id' => 307,
                'answer' => '$1,164.71',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:57:29',
                'updated_at' => '2015-09-27 22:57:29',
            ),
            227 =>
            array (
                'id' => 1228,
                'question_id' => 307,
                'answer' => '$1,211.16.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-27 22:57:43',
                'updated_at' => '2015-09-27 22:57:43',
            ),
            228 =>
            array (
                'id' => 1229,
                'question_id' => 308,
                'answer' => '$27,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 17:33:32',
                'updated_at' => '2015-09-28 17:33:32',
            ),
            229 =>
            array (
                'id' => 1230,
                'question_id' => 308,
                'answer' => '$30,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 17:33:44',
                'updated_at' => '2015-09-28 17:33:44',
            ),
            230 =>
            array (
                'id' => 1231,
                'question_id' => 308,
                'answer' => '$270,000',
                'correct' => 1,
                'definition' => '$15,000 down + $15,000 second mortgage = $30,000

? x 0.10 = $30,000

$30,000 / 0.10 = $300,000 x 0.90 = $270,000',
                'created_at' => '2015-09-28 23:33:04',
                'updated_at' => '2015-09-28 23:33:04',
            ),
            231 =>
            array (
                'id' => 1232,
                'question_id' => 308,
                'answer' => '$300,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:33:29',
                'updated_at' => '2015-09-28 23:33:29',
            ),
            232 =>
            array (
                'id' => 1233,
                'question_id' => 309,
                'answer' => 'A nonoccupant holder of a warranty deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:34:23',
                'updated_at' => '2015-09-28 23:34:23',
            ),
            233 =>
            array (
                'id' => 1234,
                'question_id' => 309,
                'answer' => 'A nonoccupant holder of an unrecorded quitclaim deed',
                'correct' => 1,
            'definition' => 'This grantee has given no constructive notice of his rights (recording or possession) and has no warranties to assert against the grantor in the event the stranger proves to have a superior title. Possession gives constructive notice (actual notice if a person is aware of the possession).',
                'created_at' => '2015-09-28 23:36:13',
                'updated_at' => '2015-09-28 23:36:13',
            ),
            234 =>
            array (
                'id' => 1235,
                'question_id' => 309,
                'answer' => 'One who holds an unrecorded deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:36:31',
                'updated_at' => '2015-09-28 23:36:31',
            ),
            235 =>
            array (
                'id' => 1236,
                'question_id' => 309,
                'answer' => 'One who holds a recorded quitclaim deed to the property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:36:54',
                'updated_at' => '2015-09-28 23:36:54',
            ),
            236 =>
            array (
                'id' => 1237,
                'question_id' => 310,
                'answer' => '$60,500 at 7%',
                'correct' => 1,
                'definition' => '7% of $60,500 is $4,235 x 0.60 = $2,541

6.5% of $63,500 is $4,128 x 0.60 = $2,477

6.5% of $63,750 is $4,174 x 0.60 = $2,504

6% of $64,000 is $3,840 x 0.60 = $2,304',
                'created_at' => '2015-09-28 23:49:30',
                'updated_at' => '2015-09-28 23:49:30',
            ),
            237 =>
            array (
                'id' => 1238,
                'question_id' => 310,
                'answer' => '$63,500 at 6.5%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:50:16',
                'updated_at' => '2015-09-28 23:50:26',
            ),
            238 =>
            array (
                'id' => 1239,
                'question_id' => 310,
                'answer' => '$63,750 at 6.5%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:51:04',
                'updated_at' => '2015-09-28 23:51:04',
            ),
            239 =>
            array (
                'id' => 1240,
                'question_id' => 310,
                'answer' => '$64,000 at 6%',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:51:23',
                'updated_at' => '2015-09-28 23:51:23',
            ),
            240 =>
            array (
                'id' => 1241,
                'question_id' => 311,
                'answer' => 'Lenders dealing exclusively in second mortgages',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:53:31',
                'updated_at' => '2015-09-28 23:53:31',
            ),
            241 =>
            array (
                'id' => 1242,
                'question_id' => 311,
                'answer' => 'Where loans are bought and sold after they have been originated',
                'correct' => 1,
                'definition' => 'The secondary markert is the market in which loans are bought and sold after they have been originated.',
                'created_at' => '2015-09-28 23:54:27',
                'updated_at' => '2015-09-28 23:54:27',
            ),
            242 =>
            array (
                'id' => 1243,
                'question_id' => 311,
                'answer' => 'The major lender of residential mortgages and deeds of trust',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:55:07',
                'updated_at' => '2015-09-28 23:55:07',
            ),
            243 =>
            array (
                'id' => 1244,
                'question_id' => 311,
                'answer' => 'The major lender of FHA and VA loans',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-28 23:55:26',
                'updated_at' => '2015-09-28 23:55:26',
            ),
            244 =>
            array (
                'id' => 1245,
                'question_id' => 312,
                'answer' => '$42,308',
                'correct' => 1,
                'definition' => '$112,000 x 0.94 = $105,280 - $63,200 = $42,080

1/3 year; $684 / 3 = $228 + $42,080 = $42,308',
                'created_at' => '2015-09-29 20:58:00',
                'updated_at' => '2015-09-29 20:58:00',
            ),
            245 =>
            array (
                'id' => 1246,
                'question_id' => 312,
                'answer' => '$63,428',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 20:58:34',
                'updated_at' => '2015-09-29 20:58:34',
            ),
            246 =>
            array (
                'id' => 1247,
                'question_id' => 312,
                'answer' => '$105,280',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 20:58:46',
                'updated_at' => '2015-09-29 20:58:46',
            ),
            247 =>
            array (
                'id' => 1248,
                'question_id' => 312,
                'answer' => '$105,508',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 20:58:56',
                'updated_at' => '2015-09-29 20:58:56',
            ),
            248 =>
            array (
                'id' => 1249,
                'question_id' => 313,
                'answer' => '$32',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:00:55',
                'updated_at' => '2015-09-29 21:00:55',
            ),
            249 =>
            array (
                'id' => 1250,
                'question_id' => 313,
                'answer' => '$89.75',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:01:13',
                'updated_at' => '2015-09-29 21:01:13',
            ),
            250 =>
            array (
                'id' => 1251,
                'question_id' => 313,
                'answer' => '$231',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:01:25',
                'updated_at' => '2015-09-29 21:01:25',
            ),
            251 =>
            array (
                'id' => 1252,
                'question_id' => 313,
                'answer' => '$263',
                'correct' => 1,
                'definition' => '$1,155 x 0.05 = $57.75

$1,155 x 0.15 = $173.25

$115,500.00 - $83,526.23 = $31,973.77

$31,973.77 / 500 = 63.9 (approximately 64)

64 / 0.50 = 32

$57.75 + 175.25 + $32.00 = $263.00 ',
                'created_at' => '2015-09-29 21:04:56',
                'updated_at' => '2015-09-29 21:04:56',
            ),
            252 =>
            array (
                'id' => 1253,
                'question_id' => 314,
                'answer' => '$79,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:07:08',
                'updated_at' => '2015-09-29 21:07:08',
            ),
            253 =>
            array (
                'id' => 1254,
                'question_id' => 314,
                'answer' => '$93,000',
                'correct' => 1,
                'definition' => '36 x 42 = $1,512

$1,512 x 52 = $78,624

$78,624 + $15,600 = $94,222 - $1,134 = $93,090

$1,512 x 0.75 = $1,134',
                'created_at' => '2015-09-29 21:12:59',
                'updated_at' => '2015-09-29 21:12:59',
            ),
            254 =>
            array (
                'id' => 1255,
                'question_id' => 314,
                'answer' => '$94,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:13:27',
                'updated_at' => '2015-09-29 21:13:27',
            ),
            255 =>
            array (
                'id' => 1256,
                'question_id' => 314,
                'answer' => '$95,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:13:39',
                'updated_at' => '2015-09-29 21:13:39',
            ),
            256 =>
            array (
                'id' => 1257,
                'question_id' => 315,
                'answer' => '$79,750',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:15:58',
                'updated_at' => '2015-09-29 21:15:58',
            ),
            257 =>
            array (
                'id' => 1258,
                'question_id' => 315,
                'answer' => '$86,475',
                'correct' => 1,
                'definition' => 'Least:
0.25 x $65,000 = $16,250
+ 1,000 x $63.50 = + 63,500
Totaling $79,750

Most:
0.75 x $65,000 = $48,750
+ 1,850 x $63.50 = + 117,475
Totaling $166,225

$166,225 - 79,750 = $86,475',
                'created_at' => '2015-09-29 21:19:06',
                'updated_at' => '2015-09-29 21:19:06',
            ),
            258 =>
            array (
                'id' => 1259,
                'question_id' => 315,
                'answer' => '$93,432',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:19:24',
                'updated_at' => '2015-09-29 21:19:24',
            ),
            259 =>
            array (
                'id' => 1260,
                'question_id' => 315,
                'answer' => '$166,225',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:19:36',
                'updated_at' => '2015-09-29 21:19:36',
            ),
            260 =>
            array (
                'id' => 1261,
                'question_id' => 316,
                'answer' => '$50,900 sales price and $15 in miscellaneous expenses',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:24:31',
                'updated_at' => '2015-09-29 21:24:31',
            ),
            261 =>
            array (
                'id' => 1262,
                'question_id' => 316,
                'answer' => '$51,200 sales price and $110 in miscellaneous expenses',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:24:53',
                'updated_at' => '2015-09-29 21:24:53',
            ),
            262 =>
            array (
                'id' => 1263,
                'question_id' => 316,
                'answer' => '$52,000 sales price and $294 in miscellaneous expenses',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:25:17',
                'updated_at' => '2015-09-29 21:25:17',
            ),
            263 =>
            array (
                'id' => 1264,
                'question_id' => 316,
                'answer' => '$52,500 sales price and $492 in miscellaneous expenses',
                'correct' => 1,
                'definition' => '$48,333',
                'created_at' => '2015-09-29 21:25:54',
                'updated_at' => '2015-09-29 21:25:54',
            ),
            264 =>
            array (
                'id' => 1265,
                'question_id' => 317,
                'answer' => '$20,100',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:27:48',
                'updated_at' => '2015-09-29 21:27:48',
            ),
            265 =>
            array (
                'id' => 1266,
                'question_id' => 317,
                'answer' => '$20,900',
                'correct' => 1,
                'definition' => 'House:
$6,000 x 0.05 = $300
$300 x 7 = $2,100
$6,000 - $2,100 = $3,900

Lot:
$10,000 x 0.10 = $1,000
$1,000 x 7 = $7,000
$10,000 + $7,000 = $17,000
$3,900 + $17,000 = $20,900',
                'created_at' => '2015-09-29 21:30:27',
                'updated_at' => '2015-09-29 21:30:27',
            ),
            266 =>
            array (
                'id' => 1267,
                'question_id' => 317,
                'answer' => '$25,100',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:30:46',
                'updated_at' => '2015-09-29 21:30:46',
            ),
            267 =>
            array (
                'id' => 1268,
                'question_id' => 317,
                'answer' => '$42,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:30:58',
                'updated_at' => '2015-09-29 21:30:58',
            ),
            268 =>
            array (
                'id' => 1269,
                'question_id' => 318,
                'answer' => '$300.83',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:32:35',
                'updated_at' => '2015-09-29 21:32:35',
            ),
            269 =>
            array (
                'id' => 1270,
                'question_id' => 318,
                'answer' => '$419.58',
                'correct' => 1,
                'definition' => '$50,000 x 0.70 = $25,000
$45,000 x 0.40 = $18,000
$35,000 + $18,000 = $53,000 total loan

$53,000 x 0.095 = $5,035 / 12 = $419.58',
                'created_at' => '2015-09-29 21:35:47',
                'updated_at' => '2015-09-29 21:35:47',
            ),
            270 =>
            array (
                'id' => 1271,
                'question_id' => 318,
                'answer' => '$526.46',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:36:13',
                'updated_at' => '2015-09-29 21:36:13',
            ),
            271 =>
            array (
                'id' => 1272,
                'question_id' => 318,
                'answer' => '$752.08',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:36:28',
                'updated_at' => '2015-09-29 21:36:28',
            ),
            272 =>
            array (
                'id' => 1273,
                'question_id' => 319,
                'answer' => '$45.90',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:38:34',
                'updated_at' => '2015-09-29 21:38:34',
            ),
            273 =>
            array (
                'id' => 1274,
                'question_id' => 319,
                'answer' => '$94.50',
                'correct' => 1,
                'definition' => 'Present tax:
$45,000 x 45% = $20,250
$20.25 x 18 = $364.50
$459.00 - $364.50 = $94.50

Proposed Tax:
$35,000 x 60% = $21,000 + 4,500 = $25,500
$10,000 x 45% = $4,500
$25.50 x 18 = $459',
                'created_at' => '2015-09-29 21:40:44',
                'updated_at' => '2015-09-29 21:40:44',
            ),
            274 =>
            array (
                'id' => 1275,
                'question_id' => 319,
                'answer' => '$255.00',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:41:03',
                'updated_at' => '2015-09-29 21:41:03',
            ),
            275 =>
            array (
                'id' => 1276,
                'question_id' => 319,
                'answer' => '$64.50',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:41:19',
                'updated_at' => '2015-09-29 21:41:19',
            ),
            276 =>
            array (
                'id' => 1277,
                'question_id' => 320,
                'answer' => '$1,880',
                'correct' => 1,
                'definition' => '$50,000 - $3,000 down payment =
$47,000 loan x 4 discount points =
$1,880',
                'created_at' => '2015-09-29 21:43:20',
                'updated_at' => '2015-09-29 21:43:20',
            ),
            277 =>
            array (
                'id' => 1278,
                'question_id' => 320,
                'answer' => '$1,920',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:43:38',
                'updated_at' => '2015-09-29 21:43:38',
            ),
            278 =>
            array (
                'id' => 1279,
                'question_id' => 320,
                'answer' => '$1,960',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:43:48',
                'updated_at' => '2015-09-29 21:43:48',
            ),
            279 =>
            array (
                'id' => 1280,
                'question_id' => 320,
                'answer' => '$2,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:43:57',
                'updated_at' => '2015-09-29 21:43:57',
            ),
            280 =>
            array (
                'id' => 1281,
                'question_id' => 321,
                'answer' => 'cannot be terminated without the consent of each tenant.',
                'correct' => 1,
                'definition' => 'Possession is the only unity required to create a tenancy in common ownership interest. The percentage of interest does not have to be equal and title may be taken at any time by a new tenant.',
                'created_at' => '2015-09-29 21:50:10',
                'updated_at' => '2015-09-29 21:50:10',
            ),
            281 =>
            array (
                'id' => 1282,
                'question_id' => 321,
                'answer' => 'can be held in different fractional shares.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:50:30',
                'updated_at' => '2015-09-29 21:50:30',
            ),
            282 =>
            array (
                'id' => 1283,
                'question_id' => 321,
                'answer' => 'avoids the delays and expenses of probate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:50:47',
                'updated_at' => '2015-09-29 21:50:47',
            ),
            283 =>
            array (
                'id' => 1284,
                'question_id' => 321,
                'answer' => 'can exist only between husband and wife.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:50:51',
                'updated_at' => '2015-09-29 21:52:34',
            ),
            284 =>
            array (
                'id' => 1285,
                'question_id' => 322,
                'answer' => 'The deed to the husband is invalid.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:53:33',
                'updated_at' => '2015-09-29 21:53:33',
            ),
            285 =>
            array (
                'id' => 1286,
                'question_id' => 322,
                'answer' => 'The joint tenancy is severed.',
                'correct' => 1,
                'definition' => 'The joint tenancy is severed on the transfer, with the brother owning one-half undivided interest and the husband and wife owning the other half, which could be held as tenancy by the entirety, joint tenancy, or tenancy in common. They are tenants in common as to their respective half interests.',
                'created_at' => '2015-09-29 21:55:08',
                'updated_at' => '2015-09-29 21:55:08',
            ),
            286 =>
            array (
                'id' => 1287,
                'question_id' => 322,
                'answer' => 'All three now hold title in joint tenancy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:55:25',
                'updated_at' => '2015-09-29 21:55:25',
            ),
            287 =>
            array (
                'id' => 1288,
                'question_id' => 322,
                'answer' => 'The joint tenancy remains the same.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:55:38',
                'updated_at' => '2015-09-29 21:55:38',
            ),
            288 =>
            array (
                'id' => 1289,
                'question_id' => 323,
                'answer' => 'Broker',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 21:56:21',
                'updated_at' => '2015-09-29 21:56:21',
            ),
            289 =>
            array (
                'id' => 1290,
                'question_id' => 323,
                'answer' => 'Buyer and attorney',
                'correct' => 1,
                'definition' => 'Such a determination involves the practice of law, especially because there are important estate tax ramifications. A broker should be able to describe the differences among the various types of tenancies; however, the broker should not make a recommendation or the ultimate decision.',
                'created_at' => '2015-09-29 21:57:30',
                'updated_at' => '2015-09-29 21:57:30',
            ),
            290 =>
            array (
                'id' => 1291,
                'question_id' => 323,
                'answer' => 'Seller and CPA',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:00:39',
                'updated_at' => '2015-09-29 22:03:24',
            ),
            291 =>
            array (
                'id' => 1292,
                'question_id' => 323,
                'answer' => 'Salesperson',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:02:55',
                'updated_at' => '2015-09-29 22:03:44',
            ),
            292 =>
            array (
                'id' => 1293,
                'question_id' => 324,
                'answer' => 'Foreclosure',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:07:16',
                'updated_at' => '2015-09-29 22:07:16',
            ),
            293 =>
            array (
                'id' => 1294,
                'question_id' => 324,
                'answer' => 'Quiet title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:07:34',
                'updated_at' => '2015-09-29 22:07:34',
            ),
            294 =>
            array (
                'id' => 1295,
                'question_id' => 324,
                'answer' => 'Forfeiture',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:07:47',
                'updated_at' => '2015-09-29 22:07:47',
            ),
            295 =>
            array (
                'id' => 1296,
                'question_id' => 324,
                'answer' => 'Partition',
                'correct' => 1,
            'definition' => 'If the co-owners cannot reach an agreement on splitting the property, then any one owner can petition the court to partition the property. They can try to physically divide the property (partition in kind) or else sell it and split the net proceeds. Most courts first attempt a partition in kind, but this is sometimes impossible--for example, in the case of a studio condominium property.',
                'created_at' => '2015-09-29 22:09:38',
                'updated_at' => '2015-09-29 22:09:38',
            ),
            296 =>
            array (
                'id' => 1297,
                'question_id' => 325,
                'answer' => 'personalty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:11:39',
                'updated_at' => '2015-09-29 22:11:39',
            ),
            297 =>
            array (
                'id' => 1298,
                'question_id' => 325,
                'answer' => 'common.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:11:49',
                'updated_at' => '2015-09-29 22:11:49',
            ),
            298 =>
            array (
                'id' => 1299,
                'question_id' => 325,
                'answer' => 'severalty.',
                'correct' => 1,
                'definition' => 'This person\'s ownership is severed from that of anyone else. Personalty is another term from personal property.',
                'created_at' => '2015-09-29 22:12:47',
                'updated_at' => '2015-09-29 22:12:47',
            ),
            299 =>
            array (
                'id' => 1300,
                'question_id' => 325,
                'answer' => 'secret.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-29 22:12:59',
                'updated_at' => '2015-09-29 22:12:59',
            ),
            300 =>
            array (
                'id' => 1301,
                'question_id' => 326,
                'answer' => 'The listing broker should get both husband and wife to sign the listing.',
                'correct' => 1,
            'definition' => 'Many courts still would enforce a listing against the sole signing spouse (meaning the one signing could be liable for a commission), but it is best to get both to sign. Both spouses must owe the creditor for the possibility of executing against the home to exist (there may be a different result if they are joint tenants).',
                'created_at' => '2015-09-30 20:03:55',
                'updated_at' => '2015-09-30 20:03:55',
            ),
            301 =>
            array (
                'id' => 1302,
                'question_id' => 326,
                'answer' => 'The wife\'s creditors have a right to take one half of the property in settlement of the debts.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:04:25',
                'updated_at' => '2015-09-30 20:04:25',
            ),
            302 =>
            array (
                'id' => 1303,
                'question_id' => 326,
                'answer' => 'The property should not be sold until the debts have been paid.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:04:43',
                'updated_at' => '2015-09-30 20:04:43',
            ),
            303 =>
            array (
                'id' => 1304,
                'question_id' => 326,
                'answer' => 'The debts of both spouses are of no importance to the broker listing the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:05:07',
                'updated_at' => '2015-09-30 20:05:07',
            ),
            304 =>
            array (
                'id' => 1305,
                'question_id' => 327,
                'answer' => 'Joint tenancy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:06:04',
                'updated_at' => '2015-09-30 20:06:04',
            ),
            305 =>
            array (
                'id' => 1306,
                'question_id' => 327,
                'answer' => 'Tenancy by the entirety',
                'correct' => 1,
                'definition' => 'The marital unit owns the property in tenancy by the entirety, so one spouse cannot seek partition.',
                'created_at' => '2015-09-30 20:07:03',
                'updated_at' => '2015-09-30 20:07:03',
            ),
            306 =>
            array (
                'id' => 1307,
                'question_id' => 327,
                'answer' => 'Tenancy in common',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:07:18',
                'updated_at' => '2015-09-30 20:07:18',
            ),
            307 =>
            array (
                'id' => 1308,
                'question_id' => 327,
                'answer' => 'Tenancy in partnership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:07:29',
                'updated_at' => '2015-09-30 20:07:29',
            ),
            308 =>
            array (
                'id' => 1309,
                'question_id' => 328,
                'answer' => 'Liability is limited to the extent of his or her investment.',
                'correct' => 1,
                'definition' => 'A limited partner\'s liability normally extends only to the extent of his or her investment. However, should a limited partner participate in the management of the partnership, then the limited partner loses his or her intended limited liability. A general partner is usually liable for all the partnership\'s debt.',
                'created_at' => '2015-09-30 20:09:33',
                'updated_at' => '2015-09-30 20:09:33',
            ),
            309 =>
            array (
                'id' => 1310,
                'question_id' => 328,
                'answer' => 'Liability is without limits.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:09:55',
                'updated_at' => '2015-09-30 20:09:55',
            ),
            310 =>
            array (
                'id' => 1311,
                'question_id' => 328,
                'answer' => 'Liability is limited to short-term debts of the partnership.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:13:34',
                'updated_at' => '2015-09-30 20:13:34',
            ),
            311 =>
            array (
                'id' => 1312,
                'question_id' => 328,
                'answer' => 'Personal liability is limited to a stated percentage of partnership debts.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 20:14:07',
                'updated_at' => '2015-09-30 20:14:07',
            ),
            312 =>
            array (
                'id' => 1313,
                'question_id' => 329,
                'answer' => 'a time share.',
                'correct' => 1,
                'definition' => 'Time-share ownership permits multiple purchasers to buy interest in the same piece of real estate, often a resort property. Each purchaser receives the right to use the property for a certain period of time.',
                'created_at' => '2015-09-30 22:19:26',
                'updated_at' => '2015-09-30 22:19:26',
            ),
            313 =>
            array (
                'id' => 1314,
                'question_id' => 329,
                'answer' => 'a REIT.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:19:36',
                'updated_at' => '2015-09-30 22:19:36',
            ),
            314 =>
            array (
                'id' => 1315,
                'question_id' => 329,
                'answer' => 'a partnership.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:19:50',
                'updated_at' => '2015-09-30 22:19:50',
            ),
            315 =>
            array (
                'id' => 1316,
                'question_id' => 329,
                'answer' => 'none of these.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:20:04',
                'updated_at' => '2015-09-30 22:20:04',
            ),
            316 =>
            array (
                'id' => 1317,
                'question_id' => 330,
                'answer' => 'Cindy\'s share in the property is unaffected.',
                'correct' => 1,
                'definition' => 'Barb\'s interest goes to her heirs.',
                'created_at' => '2015-09-30 22:21:27',
                'updated_at' => '2015-09-30 22:21:27',
            ),
            317 =>
            array (
                'id' => 1318,
                'question_id' => 330,
                'answer' => 'Barb\'s interest goes to Cindy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:21:43',
                'updated_at' => '2015-09-30 22:21:43',
            ),
            318 =>
            array (
                'id' => 1319,
                'question_id' => 330,
                'answer' => 'Barb\'s interest goes to Cindy and Sue.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:22:02',
                'updated_at' => '2015-09-30 22:22:02',
            ),
            319 =>
            array (
                'id' => 1320,
                'question_id' => 330,
                'answer' => 'Barb\'s interest automatically goes to her heirs.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:22:34',
                'updated_at' => '2015-09-30 22:22:34',
            ),
            320 =>
            array (
                'id' => 1321,
                'question_id' => 331,
                'answer' => 'Joint tenancy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:23:17',
                'updated_at' => '2015-09-30 22:23:17',
            ),
            321 =>
            array (
                'id' => 1322,
                'question_id' => 331,
                'answer' => 'S Corporation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:23:28',
                'updated_at' => '2015-09-30 22:23:28',
            ),
            322 =>
            array (
                'id' => 1323,
                'question_id' => 331,
                'answer' => 'Corporation',
                'correct' => 1,
                'definition' => 'A corporation is subject to tax on its profits, and the stockholders will be taxed again on any dividends distributed to them. For partnerships and S Corporations, income and expenses are passed through to the owners, so taxes are paid only once.',
                'created_at' => '2015-09-30 22:24:28',
                'updated_at' => '2015-09-30 22:24:28',
            ),
            323 =>
            array (
                'id' => 1324,
                'question_id' => 331,
                'answer' => 'Partnership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:24:42',
                'updated_at' => '2015-09-30 22:24:42',
            ),
            324 =>
            array (
                'id' => 1325,
                'question_id' => 332,
                'answer' => 'may not file for partition.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:25:23',
                'updated_at' => '2015-09-30 22:25:23',
            ),
            325 =>
            array (
                'id' => 1326,
                'question_id' => 332,
                'answer' => 'has no recourse except to sell the interest to other joint tenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:25:46',
                'updated_at' => '2015-09-30 22:25:46',
            ),
            326 =>
            array (
                'id' => 1327,
                'question_id' => 332,
                'answer' => 'may convey to a non-tenant, who becomes a tenant in common.',
                'correct' => 1,
                'definition' => 'joint tenancies may be severed by transfer of one\'s interest in the property. In some cases, the parties agree to give their cotenants a right of first refusal.',
                'created_at' => '2015-09-30 22:26:56',
                'updated_at' => '2015-09-30 22:26:56',
            ),
            327 =>
            array (
                'id' => 1328,
                'question_id' => 332,
                'answer' => 'has no recourse except to buy out the other joint tenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:27:23',
                'updated_at' => '2015-09-30 22:27:23',
            ),
            328 =>
            array (
                'id' => 1329,
                'question_id' => 333,
                'answer' => 'become tenants in common.',
                'correct' => 1,
                'definition' => 'Because the marital unit is ended, the tenancy by entirely also ends. Often, there is a property settlement agreement that resolves who gets the property, or the owners may elect to form a joint tenancy or a tenancy in common. Otherwise, by operation of law, the property is held in tenancy in common.',
                'created_at' => '2015-09-30 22:31:46',
                'updated_at' => '2015-09-30 22:31:46',
            ),
            329 =>
            array (
                'id' => 1330,
                'question_id' => 333,
                'answer' => 'become tenants at sufferance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:32:08',
                'updated_at' => '2015-09-30 22:32:08',
            ),
            330 =>
            array (
                'id' => 1331,
                'question_id' => 333,
                'answer' => 'remain tenants by entireties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:32:26',
                'updated_at' => '2015-09-30 22:32:26',
            ),
            331 =>
            array (
                'id' => 1332,
                'question_id' => 333,
                'answer' => 'automatically become joint tenants with right of survivorship.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:32:58',
                'updated_at' => '2015-09-30 22:32:58',
            ),
            332 =>
            array (
                'id' => 1333,
                'question_id' => 334,
                'answer' => 'Time-share',
                'correct' => 1,
            'definition' => 'In time-sharing, different people purchase the right to use a piece of real property (typically a condominium unit) for a set period each year for a definite or indefinite period of years. The different owners could be tenants in common (called time-interval ownership), members of a special club, or lessees under a vacation lease plan.',
                'created_at' => '2015-09-30 22:37:14',
                'updated_at' => '2015-09-30 22:37:14',
            ),
            333 =>
            array (
                'id' => 1334,
                'question_id' => 335,
                'answer' => 'Samuel\'s wife has a dower interest in the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:42:29',
                'updated_at' => '2015-09-30 22:42:42',
            ),
            334 =>
            array (
                'id' => 1335,
                'question_id' => 335,
                'answer' => 'Carl can transfer his interest in the property by will.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:43:02',
                'updated_at' => '2015-09-30 22:43:02',
            ),
            335 =>
            array (
                'id' => 1336,
                'question_id' => 335,
                'answer' => 'Upon Samuel\'s death his interest will pass to his widow.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:43:21',
                'updated_at' => '2015-09-30 22:43:21',
            ),
            336 =>
            array (
                'id' => 1337,
                'question_id' => 335,
                'answer' => 'Carl can sell his half interest in the farm without Samuel\'s consent.',
                'correct' => 1,
                'definition' => 'Dower does not apply to joint-tenancy property. There is no property left in the estate to pass by will because the remaining joint tenants survive to the interest of the deceased joint tenant.',
                'created_at' => '2015-09-30 22:45:13',
                'updated_at' => '2015-09-30 22:45:13',
            ),
            337 =>
            array (
                'id' => 1338,
                'question_id' => 336,
                'answer' => 'get divorced first.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:46:37',
                'updated_at' => '2015-09-30 22:46:37',
            ),
            338 =>
            array (
                'id' => 1339,
                'question_id' => 336,
                'answer' => 'conceal the pending divorce.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:46:58',
                'updated_at' => '2015-09-30 22:46:58',
            ),
            339 =>
            array (
                'id' => 1340,
                'question_id' => 336,
                'answer' => 'consult an attorney',
                'correct' => 1,
                'definition' => 'The client is best served by having an experienced real estate attorney discuss the best type of tenancy based on the pending divorce.',
                'created_at' => '2015-09-30 22:47:47',
                'updated_at' => '2015-09-30 22:47:47',
            ),
            340 =>
            array (
                'id' => 1341,
                'question_id' => 336,
                'answer' => 'choose joint tenancy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:48:01',
                'updated_at' => '2015-09-30 22:48:01',
            ),
            341 =>
            array (
                'id' => 1342,
                'question_id' => 337,
                'answer' => 'girders and stairways.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:51:39',
                'updated_at' => '2015-09-30 22:51:39',
            ),
            342 =>
            array (
                'id' => 1343,
                'question_id' => 337,
                'answer' => 'parking stalls assigned to particular apartments',
                'correct' => 1,
            'definition' => 'Common elements consist of those areas used in common by all owners and include elevators, lobbies, recreation areas, and laundry rooms. Areas assigned for the exclusive use of individual owners are called limited common elements (such as storage closets and reserved parking stalls). Different rules that relate to maintenance responsibility and permission to make additions or alterations apply to limited common elements.',
                'created_at' => '2015-09-30 22:53:28',
                'updated_at' => '2015-09-30 22:53:28',
            ),
            343 =>
            array (
                'id' => 1344,
                'question_id' => 337,
                'answer' => 'elevators.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:53:52',
                'updated_at' => '2015-09-30 22:53:52',
            ),
            344 =>
            array (
                'id' => 1345,
                'question_id' => 337,
                'answer' => 'roofs.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-09-30 22:54:01',
                'updated_at' => '2015-09-30 22:54:01',
            ),
            345 =>
            array (
                'id' => 1346,
                'question_id' => 338,
                'answer' => 'In a condominium, each owner is responsible for his or her own mortgage payments as well as those of the other owners.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:37:55',
                'updated_at' => '2015-10-03 13:37:55',
            ),
            346 =>
            array (
                'id' => 1347,
                'question_id' => 338,
                'answer' => 'In a cooperative association, if one or more members fail to pay their share of the mortgage, the other owners must make payments for the defaulting members or risk foreclosure on the entire property.',
                'correct' => 1,
                'definition' => 'In a condominium, the owners are not responsible for the mortgage payments of other owners. But in a cooperative, because there is usually one blanket mortgage, all owners must make up the defaults of other unit owners to avoid foreclosure of the one mortgage. Of course, they would place a lien on the defaulting owner\'s interest to the extent of their cash advances. If 10 people own one unit, they are not all voting members; usually it is one member per unit.',
                'created_at' => '2015-10-03 13:40:51',
                'updated_at' => '2015-10-03 13:40:51',
            ),
            347 =>
            array (
                'id' => 1348,
                'question_id' => 338,
                'answer' => 'In a condominium, each unit owner is a voting member of the association of owners.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:41:23',
                'updated_at' => '2015-10-03 13:41:23',
            ),
            348 =>
            array (
                'id' => 1349,
                'question_id' => 338,
                'answer' => 'In a cooperative association, taxes are collected twice a year.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:41:44',
                'updated_at' => '2015-10-03 13:41:44',
            ),
            349 =>
            array (
                'id' => 1350,
                'question_id' => 339,
                'answer' => 'Recreation fees',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:42:30',
                'updated_at' => '2015-10-03 13:42:30',
            ),
            350 =>
            array (
                'id' => 1351,
                'question_id' => 339,
                'answer' => 'Maintenance fees',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:43:23',
                'updated_at' => '2015-10-03 13:43:23',
            ),
            351 =>
            array (
                'id' => 1352,
                'question_id' => 339,
                'answer' => 'Stock-transfer fees',
                'correct' => 1,
                'definition' => 'Stock-transfer fees are paid in connection with the transfer of a cooperative apartment.',
                'created_at' => '2015-10-03 13:45:23',
                'updated_at' => '2015-10-03 13:45:23',
            ),
            352 =>
            array (
                'id' => 1353,
                'question_id' => 339,
                'answer' => 'Hazard insurance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:45:37',
                'updated_at' => '2015-10-03 13:45:37',
            ),
            353 =>
            array (
                'id' => 1354,
                'question_id' => 340,
                'answer' => 'Ownership in a cooperative usually requires purchase of shares of stock to the cooperative corporation or association.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:47:42',
                'updated_at' => '2015-10-03 13:47:42',
            ),
            354 =>
            array (
                'id' => 1355,
                'question_id' => 340,
                'answer' => 'Individual apartments in a condominium are conveyed and are financed as if they were single-family dwellings on separate pieces of land.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:48:48',
                'updated_at' => '2015-10-03 13:48:48',
            ),
            355 =>
            array (
                'id' => 1356,
                'question_id' => 340,
                'answer' => 'Cooperative owners usually can sell their units only with prior board-of-directors approval.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:49:10',
                'updated_at' => '2015-10-03 13:49:10',
            ),
            356 =>
            array (
                'id' => 1357,
                'question_id' => 340,
                'answer' => 'Cooperative owners receive a deed.',
                'correct' => 1,
                'definition' => 'In addition to stock purchase, the cooperative purchaser becomes a lessee under a proprietary lease to the specific apartment unit, no a grantee under a deed.',
                'created_at' => '2015-10-03 13:50:12',
                'updated_at' => '2015-10-03 13:50:12',
            ),
            357 =>
            array (
                'id' => 1358,
                'question_id' => 341,
                'answer' => 'the premiums are common expenses.',
                'correct' => 1,
                'definition' => 'Failure of the board to obtain such coverage could be a basis for liability for negligence. Each person should obtain individual coverage for apartment contents.',
                'created_at' => '2015-10-03 13:54:48',
                'updated_at' => '2015-10-03 13:54:48',
            ),
            358 =>
            array (
                'id' => 1359,
                'question_id' => 341,
                'answer' => 'individual apartment owners cannot insure their own apartment contents.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:55:18',
                'updated_at' => '2015-10-03 13:55:18',
            ),
            359 =>
            array (
                'id' => 1360,
                'question_id' => 341,
                'answer' => 'the premiums are refundable.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:55:31',
                'updated_at' => '2015-10-03 13:55:31',
            ),
            360 =>
            array (
                'id' => 1361,
                'question_id' => 341,
                'answer' => 'the insurance covers theft losses in individual units.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:55:49',
                'updated_at' => '2015-10-03 13:55:49',
            ),
            361 =>
            array (
                'id' => 1362,
                'question_id' => 342,
                'answer' => 'Time-sharing',
                'correct' => 1,
                'definition' => 'Many time-sharing projects are structured as vacation leases, club memberships, or time-interval ownership. For example, each unit may have several tenant-in-common owners who have agreed on the time where each is entitled to occupancy during the year.',
                'created_at' => '2015-10-03 13:58:30',
                'updated_at' => '2015-10-03 13:58:30',
            ),
            362 =>
            array (
                'id' => 1363,
                'question_id' => 342,
                'answer' => 'Recreation lease',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:58:54',
                'updated_at' => '2015-10-03 13:58:54',
            ),
            363 =>
            array (
                'id' => 1364,
                'question_id' => 342,
                'answer' => 'Periodic tenancy',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 13:59:54',
                'updated_at' => '2015-10-03 13:59:54',
            ),
            364 =>
            array (
                'id' => 1365,
                'question_id' => 342,
                'answer' => 'Life estate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:00:09',
                'updated_at' => '2015-10-03 14:00:09',
            ),
            365 =>
            array (
                'id' => 1366,
                'question_id' => 343,
                'answer' => 'Association bylaws',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:01:08',
                'updated_at' => '2015-10-03 14:01:08',
            ),
            366 =>
            array (
                'id' => 1367,
                'question_id' => 343,
                'answer' => 'A master deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:01:19',
                'updated_at' => '2015-10-03 14:01:19',
            ),
            367 =>
            array (
                'id' => 1368,
                'question_id' => 343,
                'answer' => 'A proprietary lease',
                'correct' => 1,
                'definition' => 'The proprietary lease, along with a stock or trust certificate, is typically used in a cooperative housing project.',
                'created_at' => '2015-10-03 14:02:10',
                'updated_at' => '2015-10-03 14:02:10',
            ),
            368 =>
            array (
                'id' => 1369,
                'question_id' => 343,
                'answer' => 'A declaration',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:02:38',
                'updated_at' => '2015-10-03 14:02:38',
            ),
            369 =>
            array (
                'id' => 1370,
                'question_id' => 344,
                'answer' => 'Purchase and installation of a new air conditioning unit',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:03:48',
                'updated_at' => '2015-10-03 14:03:48',
            ),
            370 =>
            array (
                'id' => 1371,
                'question_id' => 344,
                'answer' => 'Negotiation of a new property management agreement',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:04:15',
                'updated_at' => '2015-10-03 14:04:15',
            ),
            371 =>
            array (
                'id' => 1372,
                'question_id' => 344,
                'answer' => 'Relocation of the boundaries of several units',
                'correct' => 1,
            'definition' => 'While the board of directors is empowered to handle operational decisions, any major changes in the established boundaries usually require unanimous owner approval (along with all mortgagees\' consent as well).',
                'created_at' => '2015-10-03 14:05:47',
                'updated_at' => '2015-10-03 14:05:47',
            ),
            372 =>
            array (
                'id' => 1373,
                'question_id' => 344,
                'answer' => 'Renegotiation of the building\'s master insurance policy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:06:10',
                'updated_at' => '2015-10-03 14:06:10',
            ),
            373 =>
            array (
                'id' => 1374,
                'question_id' => 345,
                'answer' => 'cost of ownership.',
                'correct' => 1,
                'definition' => 'Because the total cost of the unit is divided among the many time-share owners, a person can acquire an interest in a unit at a relatively low cost. The trade-offs that use is limited to a certain period.',
                'created_at' => '2015-10-03 14:09:43',
                'updated_at' => '2015-10-03 14:09:43',
            ),
            374 =>
            array (
                'id' => 1375,
                'question_id' => 345,
                'answer' => 'number of occupants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:10:02',
                'updated_at' => '2015-10-03 14:10:02',
            ),
            375 =>
            array (
                'id' => 1376,
                'question_id' => 345,
                'answer' => 'real property taxes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:10:13',
                'updated_at' => '2015-10-03 14:10:13',
            ),
            376 =>
            array (
                'id' => 1377,
                'question_id' => 345,
                'answer' => 'maintenance fees.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:10:24',
                'updated_at' => '2015-10-03 14:10:24',
            ),
            377 =>
            array (
                'id' => 1378,
                'question_id' => 346,
                'answer' => 'express grant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:13:19',
                'updated_at' => '2015-10-03 14:13:19',
            ),
            378 =>
            array (
                'id' => 1379,
                'question_id' => 346,
                'answer' => 'reservation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:13:32',
                'updated_at' => '2015-10-03 14:13:32',
            ),
            379 =>
            array (
                'id' => 1380,
                'question_id' => 346,
                'answer' => 'implication of law.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:13:48',
                'updated_at' => '2015-10-03 14:13:48',
            ),
            380 =>
            array (
                'id' => 1381,
                'question_id' => 346,
                'answer' => 'prescription.',
                'correct' => 1,
                'definition' => 'Prescriptive easements usually require open, notorious, and hostile use for the same statutory period as adverse possession.',
                'created_at' => '2015-10-03 14:14:47',
                'updated_at' => '2015-10-03 14:14:47',
            ),
            381 =>
            array (
                'id' => 1382,
                'question_id' => 347,
                'answer' => 'must be consistent and not at variance with the zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:15:32',
                'updated_at' => '2015-10-03 14:15:32',
            ),
            382 =>
            array (
                'id' => 1383,
                'question_id' => 347,
                'answer' => 'cannot be more strict than the current zoning use.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:15:49',
                'updated_at' => '2015-10-03 14:15:49',
            ),
            383 =>
            array (
                'id' => 1384,
                'question_id' => 347,
                'answer' => 'are the same as conditions in a deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:16:04',
                'updated_at' => '2015-10-03 14:16:04',
            ),
            384 =>
            array (
                'id' => 1385,
                'question_id' => 347,
                'answer' => 'are an encumbrance on the property.',
                'correct' => 1,
                'definition' => 'Restrictive covenants are zoning regulations are often at variance with each other; the one that is more strict or severe will control the use of the affected property, except in certain situations where a deed restriction is against public policy or in violation of law.',
                'created_at' => '2015-10-03 14:33:00',
                'updated_at' => '2015-10-03 14:33:00',
            ),
            385 =>
            array (
                'id' => 1386,
                'question_id' => 348,
                'answer' => 'an appurtenance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:36:38',
                'updated_at' => '2015-10-03 14:36:38',
            ),
            386 =>
            array (
                'id' => 1387,
                'question_id' => 348,
                'answer' => 'a riparian right.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:37:49',
                'updated_at' => '2015-10-03 14:37:49',
            ),
            387 =>
            array (
                'id' => 1388,
                'question_id' => 348,
                'answer' => 'an easement in gross.',
                'correct' => 1,
            'definition' => 'Easements in gross are rights in the land of another person that benefit someone else (legal or natural), but there is no dominant estate as with an easement appurtenant. Appurtenances are property rights that attach that attach to and benefit a parcel of land; riparian rights are water rights.',
                'created_at' => '2015-10-03 14:39:06',
                'updated_at' => '2015-10-03 14:39:06',
            ),
            388 =>
            array (
                'id' => 1389,
                'question_id' => 348,
                'answer' => 'a right on encroachment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:39:19',
                'updated_at' => '2015-10-03 14:39:19',
            ),
            389 =>
            array (
                'id' => 1390,
                'question_id' => 349,
                'answer' => 'along a property line.',
                'correct' => 1,
                'definition' => 'A party wall ins a shared wall between two adjoning buildings. Each party owns one-half of the wall and has an easement of support in the other half. According to the statue of frauds, party wall agreements should be in writing, because they involve an interest in real property.',
                'created_at' => '2015-10-03 14:40:42',
                'updated_at' => '2015-10-03 14:40:42',
            ),
            390 =>
            array (
                'id' => 1391,
                'question_id' => 349,
                'answer' => 'between the dining and living rooms.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:40:57',
                'updated_at' => '2015-10-03 14:40:57',
            ),
            391 =>
            array (
                'id' => 1392,
                'question_id' => 349,
                'answer' => 'facing the direction from which bad weather usually comes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:41:14',
                'updated_at' => '2015-10-03 14:41:14',
            ),
            392 =>
            array (
                'id' => 1393,
                'question_id' => 349,
                'answer' => 'between the upper and lower stories of a structure.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:41:31',
                'updated_at' => '2015-10-03 14:41:31',
            ),
            393 =>
            array (
                'id' => 1394,
                'question_id' => 350,
                'answer' => 'tenancy in common.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:42:09',
                'updated_at' => '2015-10-03 14:42:09',
            ),
            394 =>
            array (
                'id' => 1395,
                'question_id' => 350,
                'answer' => 'leasehold estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:42:19',
                'updated_at' => '2015-10-03 14:42:19',
            ),
            395 =>
            array (
                'id' => 1396,
                'question_id' => 350,
                'answer' => 'tenancy at sufferance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:42:33',
                'updated_at' => '2015-10-03 14:42:33',
            ),
            396 =>
            array (
                'id' => 1397,
                'question_id' => 350,
                'answer' => 'license.',
                'correct' => 1,
                'definition' => 'Such permission is revocable, unlike an easement. For example, the right to enter a movie theater is a revocable license. In addition to a use right, a lessee may have the right to make improvements.',
                'created_at' => '2015-10-03 14:43:48',
                'updated_at' => '2015-10-03 14:43:48',
            ),
            397 =>
            array (
                'id' => 1398,
                'question_id' => 351,
                'answer' => 'Easement in gross',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:45:29',
                'updated_at' => '2015-10-03 14:45:29',
            ),
            398 =>
            array (
                'id' => 1399,
                'question_id' => 351,
                'answer' => 'Right-of-way',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:45:40',
                'updated_at' => '2015-10-03 14:45:40',
            ),
            399 =>
            array (
                'id' => 1400,
                'question_id' => 351,
                'answer' => 'License',
                'correct' => 1,
            'definition' => 'A license is a mere right or privilege to use another\'s property. This right can be revoked at any time. An easement appurtenant is irrevocable; and a right-of-way is a specific type of easement (it may be appurtenant or in gross).',
                'created_at' => '2015-10-03 14:46:59',
                'updated_at' => '2015-10-03 14:46:59',
            ),
            400 =>
            array (
                'id' => 1401,
                'question_id' => 351,
                'answer' => 'Easement appurtenant',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:47:18',
                'updated_at' => '2015-10-03 14:47:18',
            ),
            401 =>
            array (
                'id' => 1402,
                'question_id' => 352,
                'answer' => 'Judgment lien',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:47:54',
                'updated_at' => '2015-10-03 14:47:54',
            ),
            402 =>
            array (
                'id' => 1403,
                'question_id' => 352,
                'answer' => 'Mortgage lien',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:48:04',
                'updated_at' => '2015-10-03 14:48:04',
            ),
            403 =>
            array (
                'id' => 1404,
                'question_id' => 352,
                'answer' => 'Mechanic\'s lien',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:48:16',
                'updated_at' => '2015-10-03 14:48:16',
            ),
            404 =>
            array (
                'id' => 1405,
                'question_id' => 352,
                'answer' => 'Real property tax lien',
                'correct' => 1,
                'definition' => 'Real property tax liens have priority, even over prior recorded special and general liens. Do not confuse them with income tax liens or estate tax liens, whose priority is set by the date of recording.',
                'created_at' => '2015-10-03 14:49:09',
                'updated_at' => '2015-10-03 14:49:09',
            ),
            405 =>
            array (
                'id' => 1406,
                'question_id' => 353,
                'answer' => 'A mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:50:42',
                'updated_at' => '2015-10-03 14:50:42',
            ),
            406 =>
            array (
                'id' => 1407,
                'question_id' => 353,
                'answer' => 'A judgment',
                'correct' => 1,
                'definition' => 'A restriction is not a charge on property for the payment of a debt; it is a physical encumbrance.',
                'created_at' => '2015-10-03 14:50:56',
                'updated_at' => '2015-10-03 14:51:27',
            ),
            407 =>
            array (
                'id' => 1408,
                'question_id' => 353,
                'answer' => 'A restriction',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:51:49',
                'updated_at' => '2015-10-03 14:51:49',
            ),
            408 =>
            array (
                'id' => 1409,
                'question_id' => 353,
                'answer' => 'A tax',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:51:56',
                'updated_at' => '2015-10-03 14:51:56',
            ),
            409 =>
            array (
                'id' => 1410,
                'question_id' => 354,
                'answer' => 'a lis pendens.',
                'correct' => 1,
                'definition' => 'A lis pendens is the notice of suit, whereas an attachment is the actual seizure of specific property by a court pending the outcome of the lawsuit. The writ of execution is an order for the sale of property to satisfy the judgment.',
                'created_at' => '2015-10-03 14:53:26',
                'updated_at' => '2015-10-03 14:53:26',
            ),
            410 =>
            array (
                'id' => 1411,
                'question_id' => 354,
                'answer' => 'a writ of execution.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:53:43',
                'updated_at' => '2015-10-03 14:53:43',
            ),
            411 =>
            array (
                'id' => 1412,
                'question_id' => 354,
                'answer' => 'an attachment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:54:07',
                'updated_at' => '2015-10-03 14:54:07',
            ),
            412 =>
            array (
                'id' => 1413,
                'question_id' => 354,
                'answer' => 'an order to show cause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:54:18',
                'updated_at' => '2015-10-03 14:54:18',
            ),
            413 =>
            array (
                'id' => 1414,
                'question_id' => 355,
                'answer' => 'All liens are encumbrances.',
                'correct' => 1,
                'definition' => 'Judgments are liens. Easements are encumbrances but are not liens.',
                'created_at' => '2015-10-03 14:56:03',
                'updated_at' => '2015-10-26 11:12:35',
            ),
            414 =>
            array (
                'id' => 1415,
                'question_id' => 355,
                'answer' => 'All encumbrances are liens.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:56:14',
                'updated_at' => '2015-10-03 14:56:14',
            ),
            415 =>
            array (
                'id' => 1416,
                'question_id' => 355,
                'answer' => 'Specific liens affect all property of the debtor located in the state.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:56:40',
                'updated_at' => '2015-10-03 14:56:40',
            ),
            416 =>
            array (
                'id' => 1417,
                'question_id' => 355,
                'answer' => 'Judgments are specific liens.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:56:55',
                'updated_at' => '2015-10-03 14:56:55',
            ),
            417 =>
            array (
                'id' => 1418,
                'question_id' => 356,
                'answer' => 'An encumbrance effectively prevents the passing a title from grantor to grantee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 14:58:20',
                'updated_at' => '2015-10-03 14:58:20',
            ),
            418 =>
            array (
                'id' => 1419,
                'question_id' => 356,
                'answer' => 'An encumbrance may indicate a lien.',
                'correct' => 1,
            'definition' => 'Many grantees agree to accept title subject to certain disclosed encumbrances. All liens (mortgages, judgments, or taxes) are encumbrances, but not all encumbrances (easements, restrictions, or encroachments) are liens.',
                'created_at' => '2015-10-03 15:11:42',
                'updated_at' => '2015-10-03 15:11:42',
            ),
            419 =>
            array (
                'id' => 1420,
                'question_id' => 356,
                'answer' => 'Encumbrances are liens that restrict use of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:12:07',
                'updated_at' => '2015-10-03 15:12:07',
            ),
            420 =>
            array (
                'id' => 1421,
                'question_id' => 356,
                'answer' => 'Encumbrances are restrictions that transfer title to property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:12:33',
                'updated_at' => '2015-10-03 15:12:33',
            ),
            421 =>
            array (
                'id' => 1422,
                'question_id' => 357,
                'answer' => 'restrictive covenant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:15:57',
                'updated_at' => '2015-10-03 15:15:57',
            ),
            422 =>
            array (
                'id' => 1423,
                'question_id' => 357,
                'answer' => 'police power.',
                'correct' => 1,
                'definition' => 'The police power is given to the government by the constitution and enables the government to pass rules and regulations to protect the health, safety, and welfare of the community. Restrictive covenants are private restrictions found in deeds or recorded declarations.',
                'created_at' => '2015-10-03 15:16:22',
                'updated_at' => '2015-10-03 15:17:24',
            ),
            423 =>
            array (
                'id' => 1424,
                'question_id' => 357,
                'answer' => 'subordination.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:17:42',
                'updated_at' => '2015-10-03 15:17:42',
            ),
            424 =>
            array (
                'id' => 1425,
                'question_id' => 357,
                'answer' => 'eminent domain.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:17:52',
                'updated_at' => '2015-10-03 15:17:52',
            ),
            425 =>
            array (
                'id' => 1426,
                'question_id' => 358,
                'answer' => 'variance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:18:43',
                'updated_at' => '2015-10-03 15:18:43',
            ),
            426 =>
            array (
                'id' => 1427,
                'question_id' => 358,
                'answer' => 'nonconforming use.',
                'correct' => 1,
            'definition' => 'A nonconforming (grandfathered) use is the continuation of a use that was permissible prior to the recent zoning change. A variance would be the introduction of a new use that varies from the current zoning.',
                'created_at' => '2015-10-03 15:19:36',
                'updated_at' => '2015-10-03 15:19:36',
            ),
            427 =>
            array (
                'id' => 1428,
                'question_id' => 358,
                'answer' => 'variable zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:19:49',
                'updated_at' => '2015-10-03 15:19:49',
            ),
            428 =>
            array (
                'id' => 1429,
                'question_id' => 358,
                'answer' => 'restrictive zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:19:59',
                'updated_at' => '2015-10-03 15:19:59',
            ),
            429 =>
            array (
                'id' => 1430,
                'question_id' => 359,
                'answer' => 'Variance',
                'correct' => 1,
                'definition' => 'One usually has to prove some hardship to justify a variance from the setback rule. A variance is an exception to a zoning regulation.',
                'created_at' => '2015-10-03 15:21:46',
                'updated_at' => '2015-10-03 15:21:46',
            ),
            430 =>
            array (
                'id' => 1431,
                'question_id' => 359,
                'answer' => 'Nonconforming use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:21:56',
                'updated_at' => '2015-10-03 15:21:56',
            ),
            431 =>
            array (
                'id' => 1432,
                'question_id' => 359,
                'answer' => 'Subordination agreement',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:22:08',
                'updated_at' => '2015-10-03 15:22:08',
            ),
            432 =>
            array (
                'id' => 1433,
                'question_id' => 359,
                'answer' => 'Reservation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:22:21',
                'updated_at' => '2015-10-03 15:22:21',
            ),
            433 =>
            array (
                'id' => 1434,
                'question_id' => 360,
                'answer' => 'an attachment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:23:03',
                'updated_at' => '2015-10-03 15:23:03',
            ),
            434 =>
            array (
                'id' => 1435,
                'question_id' => 360,
                'answer' => 'the right of eminent domain.',
                'correct' => 1,
                'definition' => 'The government must pay "just compensation" to the condemnee for the taking. It pays less for acquiring an easement than for the fee simple title. If the government abandons the easement, clear title reverts to the condemnee.',
                'created_at' => '2015-10-03 15:24:11',
                'updated_at' => '2015-10-03 15:24:11',
            ),
            435 =>
            array (
                'id' => 1436,
                'question_id' => 360,
                'answer' => 'a suit to quiet title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:24:31',
                'updated_at' => '2015-10-03 15:24:31',
            ),
            436 =>
            array (
                'id' => 1437,
                'question_id' => 360,
                'answer' => 'a claim of adverse possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:24:44',
                'updated_at' => '2015-10-03 15:24:44',
            ),
            437 =>
            array (
                'id' => 1438,
                'question_id' => 361,
                'answer' => 'He must move his plant to a portion of the city zoned for industrial purposes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:26:33',
                'updated_at' => '2015-10-03 15:26:33',
            ),
            438 =>
            array (
                'id' => 1439,
                'question_id' => 361,
                'answer' => 'He may continue to operate as a nonconforming use.',
                'correct' => 1,
                'definition' => 'Because the owner\'s use was permitted under the prior zoning, it will be allowed to continue.',
                'created_at' => '2015-10-03 15:27:21',
                'updated_at' => '2015-10-03 15:27:21',
            ),
            439 =>
            array (
                'id' => 1440,
                'question_id' => 361,
                'answer' => 'he should abandon the plant and sue the city for damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:27:38',
                'updated_at' => '2015-10-03 15:27:38',
            ),
            440 =>
            array (
                'id' => 1441,
                'question_id' => 361,
                'answer' => 'he is entitled to a variance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:27:51',
                'updated_at' => '2015-10-03 15:27:51',
            ),
            441 =>
            array (
                'id' => 1442,
                'question_id' => 362,
                'answer' => 'Municipal control of the volume of building',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:28:51',
                'updated_at' => '2015-10-03 15:28:51',
            ),
            442 =>
            array (
                'id' => 1443,
                'question_id' => 362,
                'answer' => 'Evidence of compliance with municipal regulations',
                'correct' => 1,
                'definition' => 'Building permits not only indicate compliance with building code requirements but also check conformity with the zoning regulations.',
                'created_at' => '2015-10-03 15:29:59',
                'updated_at' => '2015-10-03 15:29:59',
            ),
            443 =>
            array (
                'id' => 1444,
                'question_id' => 362,
                'answer' => 'Regulation of area and bulk of buildings',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:30:20',
                'updated_at' => '2015-10-03 15:30:20',
            ),
            444 =>
            array (
                'id' => 1445,
                'question_id' => 362,
                'answer' => 'Evidence that construction fees have been paid',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:30:36',
                'updated_at' => '2015-10-03 15:30:36',
            ),
            445 =>
            array (
                'id' => 1446,
                'question_id' => 363,
                'answer' => 'the action was by sovereign power or by statue.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:31:28',
                'updated_at' => '2015-10-03 15:31:28',
            ),
            446 =>
            array (
                'id' => 1447,
                'question_id' => 363,
                'answer' => 'any compensation was paid to the owner.',
                'correct' => 1,
                'definition' => 'If the value of property is lessened by government regulation under the police power as opposed to a taking under eminent domain, no just compensation is paid. ',
                'created_at' => '2015-10-03 15:35:16',
                'updated_at' => '2015-10-03 15:35:16',
            ),
            447 =>
            array (
                'id' => 1448,
                'question_id' => 363,
                'answer' => 'the owner\'s use was affected.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:36:20',
                'updated_at' => '2015-10-03 15:36:20',
            ),
            448 =>
            array (
                'id' => 1449,
                'question_id' => 363,
                'answer' => 'the improvements are to be destroyed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 15:36:32',
                'updated_at' => '2015-10-03 15:36:32',
            ),
            449 =>
            array (
                'id' => 1450,
                'question_id' => 364,
                'answer' => 'escheat.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:33:45',
                'updated_at' => '2015-10-03 17:33:45',
            ),
            450 =>
            array (
                'id' => 1451,
                'question_id' => 364,
                'answer' => 'police power.',
                'correct' => 1,
                'definition' => 'In emergency cases, such as a spreading fire, the government under the police power could destroy a person\'s property and not be liable for any compensation. Zoning is the regulation, not the taking, of private property.',
                'created_at' => '2015-10-03 17:34:59',
                'updated_at' => '2015-10-03 17:34:59',
            ),
            451 =>
            array (
                'id' => 1452,
                'question_id' => 364,
                'answer' => 'eminent domain.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:40:20',
                'updated_at' => '2015-10-03 17:40:20',
            ),
            452 =>
            array (
                'id' => 1453,
                'question_id' => 364,
                'answer' => 'zoning.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:40:27',
                'updated_at' => '2015-10-03 17:40:27',
            ),
            453 =>
            array (
                'id' => 1454,
                'question_id' => 365,
                'answer' => 'frontage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:43:45',
                'updated_at' => '2015-10-03 17:43:45',
            ),
            454 =>
            array (
                'id' => 1455,
                'question_id' => 365,
                'answer' => 'setback.',
                'correct' => 1,
            'definition' => 'Setback and sideline (or sideyard) requirements are helpful in keeping some open area around contiguous properties.',
                'created_at' => '2015-10-03 17:45:37',
                'updated_at' => '2015-10-03 17:45:37',
            ),
            455 =>
            array (
                'id' => 1456,
                'question_id' => 365,
                'answer' => 'buffer zone.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:45:47',
                'updated_at' => '2015-10-03 17:45:47',
            ),
            456 =>
            array (
                'id' => 1457,
                'question_id' => 365,
                'answer' => 'depth.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:45:55',
                'updated_at' => '2015-10-03 17:45:55',
            ),
            457 =>
            array (
                'id' => 1458,
                'question_id' => 366,
                'answer' => '6 sections.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:48:00',
                'updated_at' => '2015-10-03 17:48:00',
            ),
            458 =>
            array (
                'id' => 1459,
                'question_id' => 366,
                'answer' => '16 sections.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:49:28',
                'updated_at' => '2015-10-03 17:49:55',
            ),
            459 =>
            array (
                'id' => 1460,
                'question_id' => 366,
                'answer' => '24 sections.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:49:43',
                'updated_at' => '2015-10-03 17:49:43',
            ),
            460 =>
            array (
                'id' => 1461,
                'question_id' => 366,
                'answer' => '36 sections.',
                'correct' => 1,
                'definition' => 'There are 16 townships in a check, and 36 sections in a township.',
                'created_at' => '2015-10-03 17:51:03',
                'updated_at' => '2015-10-03 17:51:03',
            ),
            461 =>
            array (
                'id' => 1462,
                'question_id' => 367,
                'answer' => '10',
                'correct' => 1,
                'definition' => 'Multiply the denominators and divide the results into 640 acres. Thus, 4 x 4 x 4 = 64; 640 acres / 64 = 10 acres.',
                'created_at' => '2015-10-03 17:53:46',
                'updated_at' => '2015-10-03 17:53:46',
            ),
            462 =>
            array (
                'id' => 1463,
                'question_id' => 367,
                'answer' => '20',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:54:02',
                'updated_at' => '2015-10-03 17:54:02',
            ),
            463 =>
            array (
                'id' => 1464,
                'question_id' => 367,
                'answer' => '30',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:54:10',
                'updated_at' => '2015-10-03 17:54:10',
            ),
            464 =>
            array (
                'id' => 1465,
                'question_id' => 367,
                'answer' => '40',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:54:17',
                'updated_at' => '2015-10-03 17:54:17',
            ),
            465 =>
            array (
                'id' => 1466,
                'question_id' => 368,
                'answer' => '640 acres',
                'correct' => 1,
            'definition' => '640 acres = 1 square mile (1 section).',
                'created_at' => '2015-10-03 17:55:45',
                'updated_at' => '2015-10-03 17:55:45',
            ),
            466 =>
            array (
                'id' => 1467,
                'question_id' => 368,
                'answer' => '9 square miles',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:56:08',
                'updated_at' => '2015-10-03 17:56:08',
            ),
            467 =>
            array (
                'id' => 1468,
                'question_id' => 368,
                'answer' => 'Half of a township',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:56:18',
                'updated_at' => '2015-10-03 17:56:18',
            ),
            468 =>
            array (
                'id' => 1469,
                'question_id' => 368,
                'answer' => '36 square miles',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 17:56:30',
                'updated_at' => '2015-10-03 17:56:30',
            ),
            469 =>
            array (
                'id' => 1470,
                'question_id' => 369,
                'answer' => '2 miles square',
                'correct' => 1,
            'definition' => 'Two miles square is equal to 4 square miles. Do not confuse the expression "miles square," which means shape, with "square miles," which mean area or content. For example, a township is a 6-mile square (a square 6 miles on each side), containing 36 square miles.',
                'created_at' => '2015-10-03 18:04:00',
                'updated_at' => '2015-10-03 18:04:00',
            ),
            470 =>
            array (
                'id' => 1471,
                'question_id' => 369,
                'answer' => '2 sections',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:04:16',
                'updated_at' => '2015-10-03 18:04:16',
            ),
            471 =>
            array (
                'id' => 1472,
                'question_id' => 369,
                'answer' => '10% of a township',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:04:30',
                'updated_at' => '2015-10-03 18:04:30',
            ),
            472 =>
            array (
                'id' => 1473,
                'question_id' => 369,
                'answer' => '130 acres',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:04:40',
                'updated_at' => '2015-10-03 18:04:40',
            ),
            473 =>
            array (
                'id' => 1474,
                'question_id' => 370,
                'answer' => '8',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:05:29',
                'updated_at' => '2015-10-03 18:05:29',
            ),
            474 =>
            array (
                'id' => 1475,
                'question_id' => 370,
                'answer' => '20',
                'correct' => 1,
                'definition' => 'Multiply the denominators and divide the results into 640 acres. Thus, 2 x 4 x 4 = 32; 640 acres / 32 = 20 acres.',
                'created_at' => '2015-10-03 18:06:39',
                'updated_at' => '2015-10-03 18:06:39',
            ),
            475 =>
            array (
                'id' => 1476,
                'question_id' => 370,
                'answer' => '32',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:06:48',
                'updated_at' => '2015-10-03 18:06:48',
            ),
            476 =>
            array (
                'id' => 1477,
                'question_id' => 370,
                'answer' => '64',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:06:55',
                'updated_at' => '2015-10-03 18:06:55',
            ),
            477 =>
            array (
                'id' => 1478,
                'question_id' => 371,
                'answer' => '19,29, and 31',
                'correct' => 1,
                'definition' => '',
                'created_at' => '2015-10-03 18:08:09',
                'updated_at' => '2015-10-03 18:08:09',
            ),
            478 =>
            array (
                'id' => 1479,
                'question_id' => 371,
                'answer' => '29 only',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:08:19',
                'updated_at' => '2015-10-03 18:08:19',
            ),
            479 =>
            array (
                'id' => 1480,
                'question_id' => 371,
                'answer' => '19, 20, 21, 31, and 32',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:08:34',
                'updated_at' => '2015-10-03 18:08:34',
            ),
            480 =>
            array (
                'id' => 1481,
                'question_id' => 371,
                'answer' => '10, 20, and 33',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:08:47',
                'updated_at' => '2015-10-03 18:08:47',
            ),
            481 =>
            array (
                'id' => 1482,
                'question_id' => 372,
                'answer' => '2 miles',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:10:14',
                'updated_at' => '2015-10-03 18:10:14',
            ),
            482 =>
            array (
                'id' => 1483,
                'question_id' => 372,
                'answer' => '4 miles',
                'correct' => 1,
                'definition' => '',
                'created_at' => '2015-10-03 18:10:23',
                'updated_at' => '2015-10-03 18:10:23',
            ),
            483 =>
            array (
                'id' => 1484,
                'question_id' => 372,
                'answer' => '6 miles',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:10:35',
                'updated_at' => '2015-10-03 18:10:35',
            ),
            484 =>
            array (
                'id' => 1485,
                'question_id' => 372,
                'answer' => '12 miles',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:10:44',
                'updated_at' => '2015-10-03 18:10:44',
            ),
            485 =>
            array (
                'id' => 1486,
                'question_id' => 373,
                'answer' => '$22.95',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:11:51',
                'updated_at' => '2015-10-03 18:11:51',
            ),
            486 =>
            array (
                'id' => 1487,
                'question_id' => 373,
                'answer' => '$15,625',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:12:06',
                'updated_at' => '2015-10-03 18:12:06',
            ),
            487 =>
            array (
                'id' => 1488,
                'question_id' => 373,
                'answer' => '$22,960',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:12:29',
                'updated_at' => '2015-10-03 18:12:29',
            ),
            488 =>
            array (
                'id' => 1489,
                'question_id' => 373,
                'answer' => '$1,562.50',
                'correct' => 1,
            'definition' => '640 acres in a section ($1,000,000 / 640 = $,562.50 price per acre).',
                'created_at' => '2015-10-03 18:13:20',
                'updated_at' => '2015-10-03 18:13:20',
            ),
            489 =>
            array (
                'id' => 1490,
                'question_id' => 374,
                'answer' => '24,111',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:14:43',
                'updated_at' => '2015-10-03 18:14:43',
            ),
            490 =>
            array (
                'id' => 1491,
                'question_id' => 374,
                'answer' => '108,900',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:15:04',
                'updated_at' => '2015-10-03 18:15:04',
            ),
            491 =>
            array (
                'id' => 1492,
                'question_id' => 374,
                'answer' => '217,800',
                'correct' => 1,
                'definition' => 'Multiply the denominators and divide the results into 640 acres. Thus, 2 x 4 x 4 x 4 = 128; 640 acres / 128 = 5 acres.',
                'created_at' => '2015-10-03 18:16:08',
                'updated_at' => '2015-10-03 18:16:08',
            ),
            492 =>
            array (
                'id' => 1493,
                'question_id' => 374,
                'answer' => '435,600',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:16:30',
                'updated_at' => '2015-10-03 18:16:30',
            ),
            493 =>
            array (
                'id' => 1494,
                'question_id' => 375,
                'answer' => 'a new home.',
                'correct' => 1,
                'definition' => 'The older a building becomes, the more difficult it becomes to accurately adjust for depreciation. The approach is base on the principle of substitution--a buyer will not pay more for a structure than it would cost to duplicate it.',
                'created_at' => '2015-10-03 18:19:15',
                'updated_at' => '2015-10-03 18:19:15',
            ),
            494 =>
            array (
                'id' => 1495,
                'question_id' => 375,
                'answer' => 'a multiple dwelling.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:19:29',
                'updated_at' => '2015-10-03 18:19:29',
            ),
            495 =>
            array (
                'id' => 1496,
                'question_id' => 375,
                'answer' => 'an old home.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:19:37',
                'updated_at' => '2015-10-03 18:19:37',
            ),
            496 =>
            array (
                'id' => 1497,
                'question_id' => 375,
                'answer' => 'a medium-age home.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:19:49',
                'updated_at' => '2015-10-03 18:19:49',
            ),
            497 =>
            array (
                'id' => 1498,
                'question_id' => 376,
                'answer' => 'Physical deterioration',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:20:36',
                'updated_at' => '2015-10-03 18:20:36',
            ),
            498 =>
            array (
                'id' => 1499,
                'question_id' => 376,
                'answer' => 'External obsolescence',
                'correct' => 1,
                'definition' => 'External obsolescence is loss in value due to external causes outside the property itself, such as a change in zoning.',
                'created_at' => '2015-10-03 18:21:22',
                'updated_at' => '2015-10-03 18:21:22',
            ),
            499 =>
            array (
                'id' => 1500,
                'question_id' => 376,
                'answer' => 'Functional obsolescence',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:21:39',
                'updated_at' => '2015-10-03 18:21:39',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 =>
            array (
                'id' => 1501,
                'question_id' => 376,
                'answer' => 'Negligible obsolescence',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:21:52',
                'updated_at' => '2015-10-03 18:21:52',
            ),
            1 =>
            array (
                'id' => 1502,
                'question_id' => 377,
                'answer' => 'The exterior needs painting',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:22:35',
                'updated_at' => '2015-10-03 18:22:35',
            ),
            2 =>
            array (
                'id' => 1503,
                'question_id' => 377,
                'answer' => 'The property fronts on a busy expressway.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:22:49',
                'updated_at' => '2015-10-03 18:22:49',
            ),
            3 =>
            array (
                'id' => 1504,
                'question_id' => 377,
                'answer' => 'The property has a sing-car garage.',
                'correct' => 1,
                'definition' => 'Lack of desirability in terms of design or layout compared with the desirability of a new property serving the same function is functional obsolescence. Usually, double garages are functionally more acceptable.',
                'created_at' => '2015-10-03 18:23:56',
                'updated_at' => '2015-10-03 18:23:56',
            ),
            4 =>
            array (
                'id' => 1505,
                'question_id' => 377,
                'answer' => 'The neighborhood is 50 years old.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:24:16',
                'updated_at' => '2015-10-03 18:24:16',
            ),
            5 =>
            array (
                'id' => 1506,
                'question_id' => 378,
                'answer' => 'acquisition cost, market data, and replacement cost.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:25:20',
                'updated_at' => '2015-10-03 18:25:20',
            ),
            6 =>
            array (
                'id' => 1507,
                'question_id' => 378,
                'answer' => 'comparison, income, and replacement cost.',
                'correct' => 1,
                'definition' => 'All three are appraisal approaches to value.',
                'created_at' => '2015-10-03 18:25:54',
                'updated_at' => '2015-10-03 18:25:54',
            ),
            7 =>
            array (
                'id' => 1508,
                'question_id' => 378,
                'answer' => 'purchase price and summation cost.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:26:39',
                'updated_at' => '2015-10-03 18:26:39',
            ),
            8 =>
            array (
                'id' => 1509,
                'question_id' => 378,
                'answer' => 'income stram and acquisition cost.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:26:52',
                'updated_at' => '2015-10-03 18:26:52',
            ),
            9 =>
            array (
                'id' => 1510,
                'question_id' => 379,
                'answer' => 'Contribution',
                'correct' => 1,
                'definition' => 'The principle of contribution states that the value of any component is what it adds to the value of the whole or what its absence detracts from that value.',
                'created_at' => '2015-10-03 18:29:18',
                'updated_at' => '2015-10-03 18:29:18',
            ),
            10 =>
            array (
                'id' => 1511,
                'question_id' => 379,
                'answer' => 'Conformity',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:29:36',
                'updated_at' => '2015-10-03 18:29:36',
            ),
            11 =>
            array (
                'id' => 1512,
                'question_id' => 379,
                'answer' => 'Highest and best use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:29:53',
                'updated_at' => '2015-10-03 18:29:53',
            ),
            12 =>
            array (
                'id' => 1513,
                'question_id' => 379,
                'answer' => 'Substitution',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:30:07',
                'updated_at' => '2015-10-03 18:30:07',
            ),
            13 =>
            array (
                'id' => 1514,
                'question_id' => 380,
                'answer' => 'age of the building.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:31:05',
                'updated_at' => '2015-10-03 18:31:05',
            ),
            14 =>
            array (
                'id' => 1515,
                'question_id' => 380,
                'answer' => 'condition of the surrounding buildings.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:31:30',
                'updated_at' => '2015-10-03 18:31:30',
            ),
            15 =>
            array (
                'id' => 1516,
                'question_id' => 380,
                'answer' => 'observed condition of the subject building.',
                'correct' => 1,
                'definition' => 'Effective age, not actual age, is sought in a determination of depreciation through physical deterioration.',
                'created_at' => '2015-10-03 18:32:19',
                'updated_at' => '2015-10-03 18:32:19',
            ),
            16 =>
            array (
                'id' => 1517,
                'question_id' => 380,
                'answer' => 'zoning of the neighborhood.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:32:34',
                'updated_at' => '2015-10-03 18:32:34',
            ),
            17 =>
            array (
                'id' => 1518,
                'question_id' => 381,
                'answer' => 'Income',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:33:21',
                'updated_at' => '2015-10-03 18:33:21',
            ),
            18 =>
            array (
                'id' => 1519,
                'question_id' => 381,
                'answer' => 'Market comparison',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:33:31',
                'updated_at' => '2015-10-03 18:33:31',
            ),
            19 =>
            array (
                'id' => 1520,
                'question_id' => 381,
                'answer' => 'Land residual',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:33:40',
                'updated_at' => '2015-10-03 18:33:40',
            ),
            20 =>
            array (
                'id' => 1521,
                'question_id' => 381,
                'answer' => 'Cost',
                'correct' => 1,
            'definition' => 'The cost approach (also called summation approach) is the best way to appraise a property where there is no rental income and no comparables recently bought or sold.',
                'created_at' => '2015-10-03 18:34:27',
                'updated_at' => '2015-10-03 18:34:27',
            ),
            21 =>
            array (
                'id' => 1522,
                'question_id' => 382,
                'answer' => 'Population density',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:35:13',
                'updated_at' => '2015-10-03 18:35:13',
            ),
            22 =>
            array (
                'id' => 1523,
                'question_id' => 382,
                'answer' => 'Direct effect of the elements',
                'correct' => 1,
            'definition' => 'Population changes, changes in zoning, or highway realignment might cause external obsolescence of the property. Direct effect of the elements (such as wind or snow) could result in physical deterioration.',
                'created_at' => '2015-10-03 18:37:39',
                'updated_at' => '2015-10-03 18:37:39',
            ),
            23 =>
            array (
                'id' => 1524,
                'question_id' => 382,
                'answer' => 'Zoning',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:37:56',
                'updated_at' => '2015-10-03 18:37:56',
            ),
            24 =>
            array (
                'id' => 1525,
                'question_id' => 382,
                'answer' => 'Nearby highway realignment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-03 18:38:07',
                'updated_at' => '2015-10-03 18:38:07',
            ),
            25 =>
            array (
                'id' => 1526,
                'question_id' => 383,
                'answer' => 'Acknowledgment',
                'correct' => 1,
                'definition' => 'Acknowledgments are required only if the parties desire to record the sales contract. Reality of consent means that there was a voluntary meeting of the minds and that no obstacles to consent, such as fraud, misrepresentation, duress, or undue influence, were present.',
                'created_at' => '2015-10-07 18:47:37',
                'updated_at' => '2015-10-07 18:47:37',
            ),
            26 =>
            array (
                'id' => 1527,
                'question_id' => 383,
                'answer' => 'Legality of object',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:47:54',
                'updated_at' => '2015-10-07 18:47:54',
            ),
            27 =>
            array (
                'id' => 1528,
                'question_id' => 383,
                'answer' => 'Consideration',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:48:05',
                'updated_at' => '2015-10-07 18:48:05',
            ),
            28 =>
            array (
                'id' => 1529,
                'question_id' => 383,
                'answer' => 'Reality of consent',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:48:16',
                'updated_at' => '2015-10-07 18:48:16',
            ),
            29 =>
            array (
                'id' => 1530,
                'question_id' => 384,
                'answer' => 'Specific performance',
                'correct' => 1,
                'definition' => 'Should the seller default, a buyer could seek the equitable remedy of specific performance. A judgment for money damages may be insufficient to satisfy the buyer, because each piece of real property is unique and irreplaceable.',
                'created_at' => '2015-10-07 18:50:34',
                'updated_at' => '2015-10-07 18:50:34',
            ),
            30 =>
            array (
                'id' => 1531,
                'question_id' => 384,
                'answer' => 'Lis pendens',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:50:51',
                'updated_at' => '2015-10-07 18:50:51',
            ),
            31 =>
            array (
                'id' => 1532,
                'question_id' => 384,
                'answer' => 'Attachment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:51:03',
                'updated_at' => '2015-10-07 18:51:03',
            ),
            32 =>
            array (
                'id' => 1533,
                'question_id' => 384,
                'answer' => 'Subpoena',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:51:12',
                'updated_at' => '2015-10-07 18:51:12',
            ),
            33 =>
            array (
                'id' => 1534,
                'question_id' => 385,
                'answer' => 'one of the parties failed to read the instrument before signing it.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:53:37',
                'updated_at' => '2015-10-07 18:53:37',
            ),
            34 =>
            array (
                'id' => 1535,
                'question_id' => 385,
                'answer' => 'one of the parties was an unmarried minor when the contract was signed.',
                'correct' => 1,
            'definition' => 'Persons who sign a contract without reading it (or the fine print) do so at their risk. Most contracts of minors are voidable at the election of the minor. In some states, a minor who marries is treated as an adult. However, minors\' contracts for necessities, such as food or clothing, are not voidable.',
                'created_at' => '2015-10-07 18:55:14',
                'updated_at' => '2015-10-07 18:55:14',
            ),
            35 =>
            array (
                'id' => 1536,
                'question_id' => 385,
                'answer' => 'one of the parties became sick.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:55:31',
                'updated_at' => '2015-10-07 18:55:31',
            ),
            36 =>
            array (
                'id' => 1537,
                'question_id' => 385,
                'answer' => 'The buyer failed to include a Social Security number.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:55:50',
                'updated_at' => '2015-10-07 18:55:50',
            ),
            37 =>
            array (
                'id' => 1538,
                'question_id' => 386,
                'answer' => 'The broker splits earnest money with the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:57:01',
                'updated_at' => '2015-10-07 18:57:01',
            ),
            38 =>
            array (
                'id' => 1539,
                'question_id' => 386,
                'answer' => 'The broker charges commission later.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:57:15',
                'updated_at' => '2015-10-07 18:57:15',
            ),
            39 =>
            array (
                'id' => 1540,
                'question_id' => 386,
                'answer' => 'The broker gets nothing.',
                'correct' => 1,
                'definition' => 'Because there is no ready, willing, and able buyer accepted by the seller, the broker gets nothing.',
                'created_at' => '2015-10-07 18:57:57',
                'updated_at' => '2015-10-07 18:57:57',
            ),
            40 =>
            array (
                'id' => 1541,
                'question_id' => 386,
                'answer' => 'The broker is entitled to expenses.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:58:16',
                'updated_at' => '2015-10-07 18:58:16',
            ),
            41 =>
            array (
                'id' => 1542,
                'question_id' => 387,
                'answer' => 'all contracts for the sale of real property, to be enforceable, must be in writing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 18:59:42',
                'updated_at' => '2015-10-07 18:59:42',
            ),
            42 =>
            array (
                'id' => 1543,
                'question_id' => 387,
                'answer' => 'such contracts must be signed by the party to be charged thereby.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:00:05',
                'updated_at' => '2015-10-07 19:00:05',
            ),
            43 =>
            array (
                'id' => 1544,
                'question_id' => 387,
                'answer' => 'oral contracts are valid and enforceable.',
                'correct' => 1,
            'definition' => 'An oral contract regarding real estate may be valid, but a court will not enforce it unless it satisfies the statute-of-frauds requirements. The parties to be charged are those who are to be held to the contract (the ones to be sued in the event of breach of contract).',
                'created_at' => '2015-10-07 19:01:25',
                'updated_at' => '2015-10-07 19:01:25',
            ),
            44 =>
            array (
                'id' => 1545,
                'question_id' => 387,
                'answer' => 'leases for periods of more than three years must be in writing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:01:57',
                'updated_at' => '2015-10-07 19:01:57',
            ),
            45 =>
            array (
                'id' => 1546,
                'question_id' => 388,
                'answer' => 'The owner may or may not sell.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:02:55',
                'updated_at' => '2015-10-07 19:02:55',
            ),
            46 =>
            array (
                'id' => 1547,
                'question_id' => 388,
                'answer' => 'the buyer must buy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:03:12',
                'updated_at' => '2015-10-07 19:03:12',
            ),
            47 =>
            array (
                'id' => 1548,
                'question_id' => 388,
                'answer' => 'the owner must sell, but the buyer need not buy.',
                'correct' => 1,
            'definition' => 'Because an option is a unilateral contract, the optionee is not obliged (nor can he or she be ordered) to perform; but if the optionee does elect to purchase, then the seller is bound to sell.',
                'created_at' => '2015-10-07 19:04:47',
                'updated_at' => '2015-10-07 19:04:47',
            ),
            48 =>
            array (
                'id' => 1549,
                'question_id' => 388,
                'answer' => 'it is specifically enforceable by both parties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:05:10',
                'updated_at' => '2015-10-07 19:05:10',
            ),
            49 =>
            array (
                'id' => 1550,
                'question_id' => 389,
                'answer' => 'the terms of the contract must express the true intention of the parties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:57:57',
                'updated_at' => '2015-10-07 19:57:57',
            ),
            50 =>
            array (
                'id' => 1551,
                'question_id' => 389,
                'answer' => 'the parties\' consent to the contract must be genuinely given.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 19:58:18',
                'updated_at' => '2015-10-07 19:58:18',
            ),
            51 =>
            array (
                'id' => 1552,
                'question_id' => 389,
                'answer' => 'both parties give their consent at closing.',
                'correct' => 1,
            'definition' => 'If, for example, the buyer intended to buy Lot 1 and the seller intended to sell Lot 2, there would be no true meeting of the minds owing to mutual mistake of fact. There must be no obstacle to genuine consent, such as fraud, duress, undue influence, or misrepresentation (refers to consent at the time of the sales contract, not at closing).',
                'created_at' => '2015-10-07 20:00:07',
                'updated_at' => '2015-10-07 20:00:07',
            ),
            52 =>
            array (
                'id' => 1553,
                'question_id' => 389,
                'answer' => 'both parties are certain and clear about what is being offered and what is being accepted.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:00:33',
                'updated_at' => '2015-10-07 20:00:33',
            ),
            53 =>
            array (
                'id' => 1554,
                'question_id' => 390,
                'answer' => 'The assignment of rights may be made only by the original seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:01:33',
                'updated_at' => '2015-10-07 20:01:33',
            ),
            54 =>
            array (
                'id' => 1555,
                'question_id' => 390,
                'answer' => 'Sales contracts generally may be assigned.',
                'correct' => 1,
                'definition' => 'Both sellers and buyers may assign their rights in a sales contract unless prohibited by the explicit terms of the agreement. Because of the rule that any sales contract may be assigned, some contracts have provisions stipulating that this particular sales contract cannot be assigned without consent. Listing contracts are not assignable.',
                'created_at' => '2015-10-07 20:03:00',
                'updated_at' => '2015-10-07 20:03:00',
            ),
            55 =>
            array (
                'id' => 1556,
                'question_id' => 390,
                'answer' => 'The contract becomes binding only on the assignor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:03:33',
                'updated_at' => '2015-10-07 20:03:33',
            ),
            56 =>
            array (
                'id' => 1557,
                'question_id' => 390,
                'answer' => 'All contracts are assignable.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:03:46',
                'updated_at' => '2015-10-07 20:03:46',
            ),
            57 =>
            array (
                'id' => 1558,
                'question_id' => 391,
                'answer' => 'undue influence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:18:50',
                'updated_at' => '2015-10-07 20:18:50',
            ),
            58 =>
            array (
                'id' => 1559,
                'question_id' => 391,
                'answer' => 'duress.',
                'correct' => 1,
            'definition' => 'The buyer would have the ability to void (voidable) the contract based on the broker\'s threatening conduct. Technically, the threat of force is called menace. The contract is voidable when a buyer has been unduly influenced to sign a contract, usually by pressure from someone in a close or confidential relationship.',
                'created_at' => '2015-10-07 20:20:51',
                'updated_at' => '2015-10-07 20:20:51',
            ),
            59 =>
            array (
                'id' => 1560,
                'question_id' => 391,
                'answer' => 'prejudice.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:21:23',
                'updated_at' => '2015-10-07 20:21:23',
            ),
            60 =>
            array (
                'id' => 1561,
                'question_id' => 391,
                'answer' => 'deceptive trade practice.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:21:45',
                'updated_at' => '2015-10-07 20:21:45',
            ),
            61 =>
            array (
                'id' => 1562,
                'question_id' => 392,
                'answer' => 'salesperson signs the sales contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:23:32',
                'updated_at' => '2015-10-07 20:23:32',
            ),
            62 =>
            array (
                'id' => 1563,
                'question_id' => 392,
                'answer' => 'offeree signs the sales contract.',
                'correct' => 1,
                'definition' => 'When the seller signs the contract, this is typically the acceptance of the buyer\'s offer. Be sure that the seller or agent then notifies the buyer of the acceptance in order to eliminate any chance the buyer may try to revoke the offer.',
                'created_at' => '2015-10-07 20:24:53',
                'updated_at' => '2015-10-07 20:24:53',
            ),
            63 =>
            array (
                'id' => 1564,
                'question_id' => 392,
                'answer' => 'offeror signs the sales contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:25:13',
                'updated_at' => '2015-10-07 20:25:13',
            ),
            64 =>
            array (
                'id' => 1565,
                'question_id' => 392,
                'answer' => 'broker signs the sales contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:25:25',
                'updated_at' => '2015-10-07 20:25:25',
            ),
            65 =>
            array (
                'id' => 1566,
                'question_id' => 393,
                'answer' => 'a copy of the broker\'s employment contract with the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:27:18',
                'updated_at' => '2015-10-07 20:27:18',
            ),
            66 =>
            array (
                'id' => 1567,
                'question_id' => 393,
                'answer' => 'the return of the earnest money deposit prior to the seller\'s acceptance of the offer to purchase.',
                'correct' => 1,
                'definition' => 'The buyer can revoke prior to acceptance. The listing is a confidential employment agreement between the seller and the broker. It should not be shown to the buyer, because there could be inaccurate or unverified information on the listing.',
                'created_at' => '2015-10-07 20:32:34',
                'updated_at' => '2015-10-07 20:32:34',
            ),
            67 =>
            array (
                'id' => 1568,
                'question_id' => 393,
                'answer' => 'copies of any offers from other interested buyers.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:34:01',
                'updated_at' => '2015-10-07 20:34:01',
            ),
            68 =>
            array (
                'id' => 1569,
                'question_id' => 393,
                'answer' => 'a copy of any appraisal that was previously done on the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:34:32',
                'updated_at' => '2015-10-07 20:34:32',
            ),
            69 =>
            array (
                'id' => 1571,
                'question_id' => 394,
                'answer' => 'such rejection should be noted on the offer by the seller or broker and a copy returned to the prospective buyer.',
                'correct' => 1,
                'definition' => 'The buyer should at least be advised that the offer was considered by the seller and then rejected. The rejection is only a counteroffer if so intended. Not that a counteroffer also is a rejection of the original offer.',
                'created_at' => '2015-10-07 20:42:49',
                'updated_at' => '2015-10-07 20:42:49',
            ),
            70 =>
            array (
                'id' => 1572,
                'question_id' => 394,
                'answer' => 'it constitutes a counteroffer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:43:14',
                'updated_at' => '2015-10-07 20:43:44',
            ),
            71 =>
            array (
                'id' => 1573,
                'question_id' => 394,
                'answer' => 'the buyer will forfeit any deposit submitted with the offer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:43:34',
                'updated_at' => '2015-10-07 20:43:34',
            ),
            72 =>
            array (
                'id' => 1574,
                'question_id' => 394,
                'answer' => 'the broker is still entitled to a commission.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:43:59',
                'updated_at' => '2015-10-07 20:43:59',
            ),
            73 =>
            array (
                'id' => 1575,
                'question_id' => 395,
                'answer' => 'It serves as a source of payment of damages to the seller in case of a buyer\'s breach.',
                'correct' => 1,
                'definition' => 'Use of earnest money is both customary and prudent. It is not essential, because the buyer\'s promise to perform is sufficient consideration to support the seller\'s promise to sell.',
                'created_at' => '2015-10-07 20:46:58',
                'updated_at' => '2015-10-07 20:46:58',
            ),
            74 =>
            array (
                'id' => 1576,
                'question_id' => 395,
                'answer' => 'It is essential to the contract ofor the sale of real property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:49:26',
                'updated_at' => '2015-10-07 20:49:26',
            ),
            75 =>
            array (
                'id' => 1577,
                'question_id' => 395,
                'answer' => 'It must equal 10% of the purchase price.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:49:40',
                'updated_at' => '2015-10-07 20:49:40',
            ),
            76 =>
            array (
                'id' => 1578,
                'question_id' => 395,
                'answer' => 'It may be kept by the broker as compensation if the offer is accepted.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:49:57',
                'updated_at' => '2015-10-07 20:49:57',
            ),
            77 =>
            array (
                'id' => 1579,
                'question_id' => 396,
                'answer' => 'a ratification.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:56:42',
                'updated_at' => '2015-10-07 20:56:42',
            ),
            78 =>
            array (
                'id' => 1580,
                'question_id' => 396,
                'answer' => 'a return to the status quo.',
                'correct' => 1,
                'definition' => 'The concept of rescission is to return the parties to their relative positions that existed before they attempted to contract.',
                'created_at' => '2015-10-07 20:57:25',
                'updated_at' => '2015-10-07 20:57:25',
            ),
            79 =>
            array (
                'id' => 1581,
                'question_id' => 396,
                'answer' => 'an amendment to the terms of a contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:57:44',
                'updated_at' => '2015-10-07 20:57:44',
            ),
            80 =>
            array (
                'id' => 1582,
                'question_id' => 396,
                'answer' => 'an escrow arrangement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 20:58:00',
                'updated_at' => '2015-10-07 20:58:00',
            ),
            81 =>
            array (
                'id' => 1583,
                'question_id' => 397,
                'answer' => 'Down payment',
                'correct' => 1,
            'definition' => 'The down payment includes the earnest money deposit (also called hand money or binder).',
                'created_at' => '2015-10-07 21:02:35',
                'updated_at' => '2015-10-07 21:02:35',
            ),
            82 =>
            array (
                'id' => 1584,
                'question_id' => 397,
                'answer' => 'Hand money',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:02:50',
                'updated_at' => '2015-10-07 21:02:50',
            ),
            83 =>
            array (
                'id' => 1585,
                'question_id' => 397,
                'answer' => 'Earnest money deposit',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:03:01',
                'updated_at' => '2015-10-07 21:03:01',
            ),
            84 =>
            array (
                'id' => 1586,
                'question_id' => 397,
                'answer' => 'Binder',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:03:09',
                'updated_at' => '2015-10-07 21:03:09',
            ),
            85 =>
            array (
                'id' => 1587,
                'question_id' => 398,
                'answer' => 'on the signing of the contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:03:52',
                'updated_at' => '2015-10-07 21:03:52',
            ),
            86 =>
            array (
                'id' => 1588,
                'question_id' => 398,
                'answer' => 'when the seller vacates the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:04:02',
                'updated_at' => '2015-10-07 21:04:02',
            ),
            87 =>
            array (
                'id' => 1589,
                'question_id' => 398,
                'answer' => 'on signing the deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:04:15',
                'updated_at' => '2015-10-07 21:04:15',
            ),
            88 =>
            array (
                'id' => 1590,
                'question_id' => 398,
                'answer' => 'on the transfer of title.',
                'correct' => 1,
                'definition' => 'Possession usually takes place on delivery of the deed, which often is several days after signatures are obtained on the deed, and a month or so after the sales contract is signed.',
                'created_at' => '2015-10-07 21:05:01',
                'updated_at' => '2015-10-07 21:05:01',
            ),
            89 =>
            array (
                'id' => 1591,
                'question_id' => 399,
                'answer' => 'A seller can be sued for "specific performance" if a contract is not performed.',
                'correct' => 1,
                'definition' => 'Specific performance is a powerful remedy given to the purchaser. Even if the buyer offers more than the listing price, the seller is under no obligation to accept, although the seller may be liable to the broker for breach of the listing contract to pay a commission. The seller can sue for money damages.',
                'created_at' => '2015-10-07 21:16:55',
                'updated_at' => '2015-10-07 21:16:55',
            ),
            90 =>
            array (
                'id' => 1592,
                'question_id' => 399,
                'answer' => 'A seller must sign an agreement to sell if the offer\'s terms are exactly in accordance with the listing agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:17:25',
                'updated_at' => '2015-10-07 21:17:25',
            ),
            91 =>
            array (
                'id' => 1593,
                'question_id' => 399,
                'answer' => 'The sole remedy for default of the buyer is a suit for specific performance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:17:50',
                'updated_at' => '2015-10-07 21:17:50',
            ),
            92 =>
            array (
                'id' => 1594,
                'question_id' => 399,
                'answer' => 'They must be on a printed form to make them binding.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:18:12',
                'updated_at' => '2015-10-07 21:18:12',
            ),
            93 =>
            array (
                'id' => 1595,
                'question_id' => 400,
                'answer' => 'enforced unless excessive in amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:19:19',
                'updated_at' => '2015-10-07 21:19:19',
            ),
            94 =>
            array (
                'id' => 1596,
                'question_id' => 400,
                'answer' => 'fixed and certain in amount.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:19:30',
                'updated_at' => '2015-10-07 21:19:30',
            ),
            95 =>
            array (
                'id' => 1597,
                'question_id' => 400,
                'answer' => 'limited to 2% of purchase price.',
                'correct' => 1,
            'definition' => 'In fact, they often exceed 2%, although if to high (e.g., 25%), they will be treated as a penalty and hence be unenforceable in many states.',
                'created_at' => '2015-10-07 21:21:45',
                'updated_at' => '2015-10-07 21:21:45',
            ),
            96 =>
            array (
                'id' => 1598,
                'question_id' => 400,
                'answer' => 'a discharge of the obligation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:22:08',
                'updated_at' => '2015-10-07 21:22:08',
            ),
            97 =>
            array (
                'id' => 1599,
                'question_id' => 401,
                'answer' => 'a fraudulent contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:23:15',
                'updated_at' => '2015-10-07 21:23:15',
            ),
            98 =>
            array (
                'id' => 1600,
                'question_id' => 401,
                'answer' => 'the statute of frauds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:23:31',
                'updated_at' => '2015-10-07 21:23:31',
            ),
            99 =>
            array (
                'id' => 1601,
                'question_id' => 401,
                'answer' => 'equitable damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:23:41',
                'updated_at' => '2015-10-07 21:23:41',
            ),
            100 =>
            array (
                'id' => 1602,
                'question_id' => 401,
                'answer' => 'liquidated damages.',
                'correct' => 1,
                'definition' => 'To avoid litigation in the event that one party breaches a contract, the parties may agree on a specified amount of money that will compensate the non-breaching party. That money is called liquidated damages.',
                'created_at' => '2015-10-07 21:25:09',
                'updated_at' => '2015-10-07 21:25:09',
            ),
            101 =>
            array (
                'id' => 1603,
                'question_id' => 402,
                'answer' => 'must make an earnest money deposit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:25:54',
                'updated_at' => '2015-10-07 21:25:54',
            ),
            102 =>
            array (
                'id' => 1604,
                'question_id' => 402,
                'answer' => 'will owe the broker a commission when the contract is accepted, even if the sale is never consummated.',
                'correct' => 1,
                'definition' => 'The consideration used to support most real estate contracts of sale is the mutual exchange of promises to perform by buyer and seller; therefore, earnest money is not legally required. Most buyers do not agree to pay the broker a commission on default, and so recovery from the buyer is quite difficult, if not impossible, unless the buyer had employed the broker.',
                'created_at' => '2015-10-07 21:26:29',
                'updated_at' => '2015-10-07 21:28:58',
            ),
            103 =>
            array (
                'id' => 1605,
                'question_id' => 402,
                'answer' => 'will lose the earnest money if she withdraws prior to acceptance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:27:01',
                'updated_at' => '2015-10-07 21:27:01',
            ),
            104 =>
            array (
                'id' => 1606,
                'question_id' => 402,
                'answer' => 'must give valuable consideration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:27:15',
                'updated_at' => '2015-10-07 21:27:15',
            ),
            105 =>
            array (
                'id' => 1607,
                'question_id' => 403,
                'answer' => 'The purchase contract is voidable if only the wife signs.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:30:51',
                'updated_at' => '2015-10-07 21:30:51',
            ),
            106 =>
            array (
                'id' => 1608,
                'question_id' => 403,
                'answer' => 'The contract is void unless both husband and wife sign the contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:31:07',
                'updated_at' => '2015-10-07 21:31:07',
            ),
            107 =>
            array (
                'id' => 1609,
                'question_id' => 403,
                'answer' => 'The husband must sign prior to closing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:31:43',
                'updated_at' => '2015-10-07 21:31:43',
            ),
            108 =>
            array (
                'id' => 1610,
                'question_id' => 403,
                'answer' => 'It is only when they desire to sell the property that both signatures are required.',
                'correct' => 1,
                'definition' => 'One buyer can sign the contract and request that title be conveyed to himself or herself and another. It is much more vital for all sellers to sign than it is for all buyers, although the best practice is to obtain the signatures of all parties. The broker should advise the seller as to why the husband is not signing.',
                'created_at' => '2015-10-07 21:33:38',
                'updated_at' => '2015-10-07 21:33:38',
            ),
            109 =>
            array (
                'id' => 1611,
                'question_id' => 404,
                'answer' => 'The buyer acquires legal title on settlement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:34:35',
                'updated_at' => '2015-10-07 21:34:35',
            ),
            110 =>
            array (
                'id' => 1612,
                'question_id' => 404,
                'answer' => 'The contract should provide whether the seller is to pay any rent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:34:57',
                'updated_at' => '2015-10-07 21:34:57',
            ),
            111 =>
            array (
                'id' => 1613,
                'question_id' => 404,
                'answer' => 'The buyer has the risk of loss.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:35:07',
                'updated_at' => '2015-10-07 21:35:07',
            ),
            112 =>
            array (
                'id' => 1614,
                'question_id' => 404,
                'answer' => 'The buyer will withhold the down payment.',
                'correct' => 1,
                'definition' => 'In a late occupancy the seller gets to stay in possession after closing. Some provision should be made as to rent, and the rental agreement should b in writing.',
                'created_at' => '2015-10-07 21:35:57',
                'updated_at' => '2015-10-07 21:35:57',
            ),
            113 =>
            array (
                'id' => 1615,
                'question_id' => 405,
                'answer' => 'Defeasance clause',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:37:26',
                'updated_at' => '2015-10-07 21:37:26',
            ),
            114 =>
            array (
                'id' => 1616,
                'question_id' => 405,
                'answer' => 'Subordination clause',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:37:38',
                'updated_at' => '2015-10-07 21:37:38',
            ),
            115 =>
            array (
                'id' => 1617,
                'question_id' => 405,
                'answer' => 'Habendum clause',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:37:56',
                'updated_at' => '2015-10-07 21:37:56',
            ),
            116 =>
            array (
                'id' => 1618,
                'question_id' => 405,
                'answer' => 'Contingency clause',
                'correct' => 1,
                'definition' => 'Defeasance and subordination clauses are found in mortgages and lease and habendum clause in deeds.',
                'created_at' => '2015-10-07 21:39:37',
                'updated_at' => '2015-10-07 21:39:37',
            ),
            117 =>
            array (
                'id' => 1619,
                'question_id' => 406,
                'answer' => 'Prior to the issuance of the buyer\'s title insurance policy.',
                'correct' => 1,
            'definition' => 'The real estate contract is typically entered into before the title report and the loan commitment. It is therefore important that the contract contain language covering whether there are any major encumbrances on title and whether the offer is subject to loan approval (a contingency).',
                'created_at' => '2015-10-07 21:42:41',
                'updated_at' => '2015-10-07 21:42:41',
            ),
            118 =>
            array (
                'id' => 1620,
                'question_id' => 406,
                'answer' => 'Immediately after the lender commits to the loan',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:43:13',
                'updated_at' => '2015-10-07 21:43:13',
            ),
            119 =>
            array (
                'id' => 1621,
                'question_id' => 406,
                'answer' => 'At the same time as recordation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:43:26',
                'updated_at' => '2015-10-07 21:43:26',
            ),
            120 =>
            array (
                'id' => 1622,
                'question_id' => 406,
                'answer' => 'Before the listing contract',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:43:40',
                'updated_at' => '2015-10-07 21:43:40',
            ),
            121 =>
            array (
                'id' => 1623,
                'question_id' => 407,
                'answer' => 'The seller must sell if the buyer decides to buy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:44:29',
                'updated_at' => '2015-10-07 21:44:29',
            ),
            122 =>
            array (
                'id' => 1624,
                'question_id' => 407,
                'answer' => 'The seller must accept the buyer\'s offer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:44:52',
                'updated_at' => '2015-10-07 21:44:52',
            ),
            123 =>
            array (
                'id' => 1625,
                'question_id' => 407,
                'answer' => 'The buyer must buy if the seller decides to sell.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:45:27',
                'updated_at' => '2015-10-07 21:45:27',
            ),
            124 =>
            array (
                'id' => 1626,
                'question_id' => 407,
                'answer' => 'The seller must offer the property to the prospective buyer if the seller decides to sell.',
                'correct' => 1,
                'definition' => 'Regarding a right of first refusal, the seller cannot be forced to sell the property unless the decision has finally been made to sell and the price determined. An option price must be definite when the option is signed.',
                'created_at' => '2015-10-07 21:46:37',
                'updated_at' => '2015-10-07 21:46:37',
            ),
            125 =>
            array (
                'id' => 1627,
                'question_id' => 408,
                'answer' => 'liquidated damages.',
                'correct' => 1,
            'definition' => 'A liquidated damage clause states in essence, that because actual damages are difficult to estimate at the time of signing the contract, the parties agree on an amount to liquidate or settle the contract in the event of buyer default. If the amount decided on is excessive (say 20% of sales price), a court might not enforce such a penalty provision.',
                'created_at' => '2015-10-07 21:48:44',
                'updated_at' => '2015-10-07 21:51:28',
            ),
            126 =>
            array (
                'id' => 1628,
                'question_id' => 408,
                'answer' => 'nominal damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:48:54',
                'updated_at' => '2015-10-07 21:48:54',
            ),
            127 =>
            array (
                'id' => 1629,
                'question_id' => 408,
                'answer' => 'punitive damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:49:13',
                'updated_at' => '2015-10-07 21:49:13',
            ),
            128 =>
            array (
                'id' => 1630,
                'question_id' => 408,
                'answer' => 'release damages.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:49:21',
                'updated_at' => '2015-10-07 21:49:21',
            ),
            129 =>
            array (
                'id' => 1631,
                'question_id' => 409,
                'answer' => 'be in writing and signed by bother buyer and seller.',
                'correct' => 1,
            'definition' => 'Technically, it need be signed only by the party to be charged (i.e., the party to be held to the contract), although it is best to get all to sign. For example, the seller could sign a letter confirming a prior oral agreement.',
                'created_at' => '2015-10-07 21:53:30',
                'updated_at' => '2015-10-07 21:53:30',
            ),
            130 =>
            array (
                'id' => 1632,
                'question_id' => 409,
                'answer' => 'state an earnest money deposit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:53:44',
                'updated_at' => '2015-10-07 21:53:44',
            ),
            131 =>
            array (
                'id' => 1633,
                'question_id' => 409,
                'answer' => 'have the signature of the agent for the buyer and seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:54:00',
                'updated_at' => '2015-10-07 21:54:00',
            ),
            132 =>
            array (
                'id' => 1634,
                'question_id' => 409,
                'answer' => 'state a purchase price.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-07 21:54:14',
                'updated_at' => '2015-10-07 21:54:14',
            ),
            133 =>
            array (
                'id' => 1635,
                'question_id' => 410,
                'answer' => 'comparable price.',
                'correct' => 1,
                'definition' => 'Market value is the most probable price a ready, willing, and able buyer, not forced to buy, will pay to a ready, willing and able seller, not forced to sell, allowing a reasonable time for exposure in the open market.',
                'created_at' => '2015-10-15 21:36:03',
                'updated_at' => '2015-10-15 21:36:03',
            ),
            134 =>
            array (
                'id' => 1636,
                'question_id' => 410,
                'answer' => 'replacement price.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:36:20',
                'updated_at' => '2015-10-15 21:36:20',
            ),
            135 =>
            array (
                'id' => 1637,
                'question_id' => 410,
                'answer' => 'income analysis.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:36:31',
                'updated_at' => '2015-10-15 21:36:31',
            ),
            136 =>
            array (
                'id' => 1638,
                'question_id' => 410,
                'answer' => 'reproduction price.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:36:42',
                'updated_at' => '2015-10-15 21:36:42',
            ),
            137 =>
            array (
                'id' => 1639,
                'question_id' => 411,
                'answer' => 'gross income multiplier.',
                'correct' => 1,
            'definition' => 'A gross income multiplier is obtained by dividing the sales price by the annual gross income of comparable properties recently sold.  Land residual process is used in the income approach when the value of the building and net operating income (NOI) are known. Building residential process  is used when the value of the land and the NOI are known.',
                'created_at' => '2015-10-15 21:40:16',
                'updated_at' => '2015-10-15 21:40:56',
            ),
            138 =>
            array (
                'id' => 1640,
                'question_id' => 411,
                'answer' => 'land residual process.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:40:33',
                'updated_at' => '2015-10-15 21:40:33',
            ),
            139 =>
            array (
                'id' => 1641,
                'question_id' => 411,
                'answer' => 'building residual process.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:41:13',
                'updated_at' => '2015-10-15 21:41:13',
            ),
            140 =>
            array (
                'id' => 1642,
                'question_id' => 411,
                'answer' => 'capitalization rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:41:24',
                'updated_at' => '2015-10-15 21:41:24',
            ),
            141 =>
            array (
                'id' => 1643,
                'question_id' => 412,
                'answer' => 'physical depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:42:30',
                'updated_at' => '2015-10-15 21:42:30',
            ),
            142 =>
            array (
                'id' => 1644,
                'question_id' => 412,
                'answer' => 'functional obsolescence.',
                'correct' => 1,
                'definition' => 'Functional obsolescence is a loss in value due to a decrease in the home\'s desirability because of poor design, layout, or style.',
                'created_at' => '2015-10-15 21:43:55',
                'updated_at' => '2015-10-15 21:43:55',
            ),
            143 =>
            array (
                'id' => 1645,
                'question_id' => 412,
                'answer' => 'cost-adjustment ratio.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:44:13',
                'updated_at' => '2015-10-15 21:44:13',
            ),
            144 =>
            array (
                'id' => 1646,
                'question_id' => 412,
                'answer' => 'structural depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:44:24',
                'updated_at' => '2015-10-15 21:44:24',
            ),
            145 =>
            array (
                'id' => 1647,
                'question_id' => 413,
                'answer' => 'net yield to owner.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:45:05',
                'updated_at' => '2015-10-15 21:45:05',
            ),
            146 =>
            array (
                'id' => 1648,
                'question_id' => 413,
                'answer' => 'utility of surrounding area.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:45:31',
                'updated_at' => '2015-10-15 21:45:31',
            ),
            147 =>
            array (
                'id' => 1649,
                'question_id' => 413,
                'answer' => 'relationship to regional development.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:45:46',
                'updated_at' => '2015-10-15 21:45:46',
            ),
            148 =>
            array (
                'id' => 1650,
                'question_id' => 413,
                'answer' => 'interest rate on investment loans.',
                'correct' => 1,
                'definition' => 'Highest and best use is that use, at the time of the appraisal, most likely to produce the greatest net return over a given period of time.',
                'created_at' => '2015-10-15 21:47:01',
                'updated_at' => '2015-10-15 21:47:01',
            ),
            149 =>
            array (
                'id' => 1651,
                'question_id' => 414,
                'answer' => 'depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:47:52',
                'updated_at' => '2015-10-15 21:47:52',
            ),
            150 =>
            array (
                'id' => 1652,
                'question_id' => 414,
                'answer' => 'amortization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:48:02',
                'updated_at' => '2015-10-15 21:48:02',
            ),
            151 =>
            array (
                'id' => 1653,
                'question_id' => 414,
                'answer' => 'reconciliation.',
                'correct' => 1,
            'definition' => 'Reconciliation (also called correlation) is more than just averaging the three approaches to value; it weighs many factors.',
                'created_at' => '2015-10-15 21:48:41',
                'updated_at' => '2015-10-15 21:48:41',
            ),
            152 =>
            array (
                'id' => 1654,
                'question_id' => 414,
                'answer' => 'accrual.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:48:51',
                'updated_at' => '2015-10-15 21:48:51',
            ),
            153 =>
            array (
                'id' => 1655,
                'question_id' => 415,
                'answer' => 'value = cap rate / income.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:49:44',
                'updated_at' => '2015-10-15 21:49:44',
            ),
            154 =>
            array (
                'id' => 1656,
                'question_id' => 415,
                'answer' => 'value = income / cap rate.',
                'correct' => 1,
                'definition' => 'Conversely, if the rate is unknown, it may be determined by dividing income by value; if income is unknown, it is determined by multiplying value times rate. If in doubt on a question like this, make up a practical example to see what amount is divided by what.',
                'created_at' => '2015-10-15 21:50:00',
                'updated_at' => '2015-10-15 21:52:00',
            ),
            155 =>
            array (
                'id' => 1657,
                'question_id' => 415,
                'answer' => 'value - income x cap rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:50:28',
                'updated_at' => '2015-10-15 21:50:28',
            ),
            156 =>
            array (
                'id' => 1658,
                'question_id' => 415,
                'answer' => 'value = income / net assets.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:50:44',
                'updated_at' => '2015-10-15 21:50:44',
            ),
            157 =>
            array (
                'id' => 1659,
                'question_id' => 416,
                'answer' => 'functional obsolescence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:53:48',
                'updated_at' => '2015-10-15 21:53:48',
            ),
            158 =>
            array (
                'id' => 1660,
                'question_id' => 416,
                'answer' => 'external obsolescence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:54:01',
                'updated_at' => '2015-10-15 21:54:01',
            ),
            159 =>
            array (
                'id' => 1661,
                'question_id' => 416,
                'answer' => 'physical deterioration.',
                'correct' => 1,
                'definition' => 'Physical deterioration refers to loss in value due to wear and tear, direct effects of the elements, or other physical damage.',
                'created_at' => '2015-10-15 21:54:48',
                'updated_at' => '2015-10-15 21:54:48',
            ),
            160 =>
            array (
                'id' => 1662,
                'question_id' => 416,
                'answer' => 'residual loss.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:55:02',
                'updated_at' => '2015-10-15 21:55:02',
            ),
            161 =>
            array (
                'id' => 1663,
                'question_id' => 417,
                'answer' => 'The use that the owner wants',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:58:30',
                'updated_at' => '2015-10-15 21:58:30',
            ),
            162 =>
            array (
                'id' => 1664,
                'question_id' => 417,
                'answer' => 'Whatever is the present use',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 21:58:42',
                'updated_at' => '2015-10-15 21:58:42',
            ),
            163 =>
            array (
                'id' => 1665,
                'question_id' => 417,
                'answer' => 'The use that produces the greatest net return',
                'correct' => 1,
                'definition' => 'The highest and best use for a parcel could be a parking for today but an office building three years from now. It depends on the greatest net return, not necessarily the maximum number of units that can be built in a green space.',
                'created_at' => '2015-10-15 22:02:28',
                'updated_at' => '2015-10-15 22:02:28',
            ),
            164 =>
            array (
                'id' => 1666,
                'question_id' => 417,
                'answer' => 'Whatever use produces the highest density zoning',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:02:58',
                'updated_at' => '2015-10-15 22:02:58',
            ),
            165 =>
            array (
                'id' => 1667,
                'question_id' => 418,
                'answer' => 'The $117,000 figure and the average rate of appreciation of residences  in the past five years.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:04:44',
                'updated_at' => '2015-10-15 22:04:44',
            ),
            166 =>
            array (
                'id' => 1668,
                'question_id' => 418,
                'answer' => 'the value of similar residences recently sold in the community.',
                'correct' => 1,
                'definition' => 'The appraiser would be most concerned with market comparison information. In appraising the residence, neither original cost nor valuation for death tax purposes would have much relevance to the question of what a ready, willing and able buyer would pay today for the residence.',
                'created_at' => '2015-10-15 22:06:09',
                'updated_at' => '2015-10-15 22:06:09',
            ),
            167 =>
            array (
                'id' => 1669,
                'question_id' => 418,
                'answer' => 'the book value of the dwelling.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:06:25',
                'updated_at' => '2015-10-15 22:06:25',
            ),
            168 =>
            array (
                'id' => 1670,
                'question_id' => 418,
                'answer' => 'the equity at the time of the father\'s death.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:06:40',
                'updated_at' => '2015-10-15 22:06:40',
            ),
            169 =>
            array (
                'id' => 1671,
                'question_id' => 419,
                'answer' => 'Highest',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:10:16',
                'updated_at' => '2015-10-15 22:10:16',
            ),
            170 =>
            array (
                'id' => 1672,
                'question_id' => 419,
                'answer' => 'Lowest',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:10:28',
                'updated_at' => '2015-10-15 22:10:28',
            ),
            171 =>
            array (
                'id' => 1673,
                'question_id' => 419,
                'answer' => 'Average of the three',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:10:40',
                'updated_at' => '2015-10-15 22:10:40',
            ),
            172 =>
            array (
                'id' => 1674,
                'question_id' => 419,
                'answer' => 'Price of the most similar property',
                'correct' => 1,
                'definition' => 'The important aspect of the market comparison approach is making the necessary adjustments in the differences among the comparable properties so as to arrive at the most similar property. More is involved than just averaging sales prices.',
                'created_at' => '2015-10-15 22:11:56',
                'updated_at' => '2015-10-15 22:11:56',
            ),
            173 =>
            array (
                'id' => 1675,
                'question_id' => 420,
                'answer' => '$107,250',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:15:25',
                'updated_at' => '2015-10-15 22:15:25',
            ),
            174 =>
            array (
                'id' => 1676,
                'question_id' => 420,
                'answer' => '$108,300',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:15:40',
                'updated_at' => '2015-10-15 22:15:40',
            ),
            175 =>
            array (
                'id' => 1677,
                'question_id' => 420,
                'answer' => '$108,875',
                'correct' => 1,
                'definition' => 'Based on the three properties, the gross rent multiplier is 6.5, in other words, the sales prices were 6.5 times the annual rent.',
                'created_at' => '2015-10-15 22:17:32',
                'updated_at' => '2015-10-15 22:17:32',
            ),
            176 =>
            array (
                'id' => 1678,
                'question_id' => 420,
                'answer' => '$112,125',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:18:29',
                'updated_at' => '2015-10-15 22:18:29',
            ),
            177 =>
            array (
                'id' => 1679,
                'question_id' => 421,
                'answer' => 'correct capitalization rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:36:38',
                'updated_at' => '2015-10-15 22:36:38',
            ),
            178 =>
            array (
                'id' => 1680,
                'question_id' => 421,
                'answer' => 'cost of the next door.',
                'correct' => 1,
            'definition' => 'If the cap rate is off by just 0.5%, the difference in valuation can be drastic. ThOne percentage point difference in the cap rate can make a 12.5% difference in the value estimate. There are two methods to select the appropriate cap rate: (1) by evaluating net income figures and sales prices of comparable properties, and (2) by analyzing the two component parts of the cap rate; that is, the return on the investment (interest) and the return of the investment (recapture). The cap rate is applied to the net operating income after deducting for bad debt and vacancy.',
                'created_at' => '2015-10-15 22:39:23',
                'updated_at' => '2015-10-15 22:39:23',
            ),
            179 =>
            array (
                'id' => 1681,
                'question_id' => 421,
                'answer' => 'net operating income of the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:39:45',
                'updated_at' => '2015-10-15 22:39:45',
            ),
            180 =>
            array (
                'id' => 1682,
                'question_id' => 421,
                'answer' => 'vacancy and bad debt rates.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:39:58',
                'updated_at' => '2015-10-15 22:39:58',
            ),
            181 =>
            array (
                'id' => 1683,
                'question_id' => 422,
                'answer' => '$91,500',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:42:35',
                'updated_at' => '2015-10-15 22:42:35',
            ),
            182 =>
            array (
                'id' => 1684,
                'question_id' => 422,
                'answer' => '$93,000',
                'correct' => 1,
            'definition' => 'If the cap rate is off by just 0.5%, the difference in valuation can be drastic. One percentage point difference in the cap rate can make a 12.5% difference in the value estimate. There are two methods to select the appropriate cap rate: (1) by evaluating net income figures and sales prices of comparable properties, and (2) by analyzing the two component parts of the capt rate; that is, the return on the investment (interest) and the return of the investment (recapture). The cap rate is applied to the net operating income after deducting for bad debt and vacancy.',
                'created_at' => '2015-10-15 22:46:09',
                'updated_at' => '2015-10-15 22:46:09',
            ),
            183 =>
            array (
                'id' => 1685,
                'question_id' => 422,
                'answer' => '$94,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:46:28',
                'updated_at' => '2015-10-15 22:46:28',
            ),
            184 =>
            array (
                'id' => 1686,
                'question_id' => 422,
                'answer' => '$97,500',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-15 22:46:45',
                'updated_at' => '2015-10-15 22:46:45',
            ),
            185 =>
            array (
                'id' => 1687,
                'question_id' => 423,
                'answer' => 'exchange.',
                'correct' => 1,
            'definition' => 'Boot (anythin received in an exchange, such as extra cash to equalize the values of two properties) may be the only immediately taxable portion of a tax-deferred exchange.',
                'created_at' => '2015-10-17 15:08:14',
                'updated_at' => '2015-10-17 15:08:55',
            ),
            186 =>
            array (
                'id' => 1688,
                'question_id' => 423,
                'answer' => 'legal description.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:10:42',
                'updated_at' => '2015-10-17 15:10:42',
            ),
            187 =>
            array (
                'id' => 1689,
                'question_id' => 423,
                'answer' => 'depreciation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:10:53',
                'updated_at' => '2015-10-17 15:10:53',
            ),
            188 =>
            array (
                'id' => 1690,
                'question_id' => 423,
                'answer' => 'leasehold title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:11:03',
                'updated_at' => '2015-10-17 15:11:03',
            ),
            189 =>
            array (
                'id' => 1691,
                'question_id' => 424,
                'answer' => 'improvements over 30 years of age.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:11:55',
                'updated_at' => '2015-10-17 15:11:55',
            ),
            190 =>
            array (
                'id' => 1692,
                'question_id' => 424,
                'answer' => 'land.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:12:03',
                'updated_at' => '2015-10-17 15:12:03',
            ),
            191 =>
            array (
                'id' => 1693,
                'question_id' => 424,
                'answer' => 'buildings.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:12:12',
                'updated_at' => '2015-10-17 15:12:12',
            ),
            192 =>
            array (
                'id' => 1694,
                'question_id' => 424,
                'answer' => 'leaseholds.',
                'correct' => 1,
                'definition' => 'In real estate investments, depreciation is, for tax purposes, an expense deduction taken over the period of ownership.',
                'created_at' => '2015-10-17 15:13:03',
                'updated_at' => '2015-10-17 15:13:03',
            ),
            193 =>
            array (
                'id' => 1695,
                'question_id' => 425,
                'answer' => 'a vacant duplex.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:14:03',
                'updated_at' => '2015-10-17 15:14:03',
            ),
            194 =>
            array (
                'id' => 1696,
                'question_id' => 425,
                'answer' => 'a home rented to a friend.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:14:14',
                'updated_at' => '2015-10-17 15:14:14',
            ),
            195 =>
            array (
                'id' => 1697,
                'question_id' => 425,
                'answer' => 'vacant land held for investment.',
                'correct' => 1,
                'definition' => 'Land does not qualify for depreciation, but improvements on investment property do.',
                'created_at' => '2015-10-17 15:15:03',
                'updated_at' => '2015-10-17 15:15:03',
            ),
            196 =>
            array (
                'id' => 1698,
                'question_id' => 425,
                'answer' => 'a rented single-family dwelling.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:15:28',
                'updated_at' => '2015-10-17 15:15:28',
            ),
            197 =>
            array (
                'id' => 1699,
                'question_id' => 426,
                'answer' => 'general tax.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:17:16',
                'updated_at' => '2015-10-17 15:17:16',
            ),
            198 =>
            array (
                'id' => 1700,
                'question_id' => 426,
                'answer' => 'special excise tax.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:17:28',
                'updated_at' => '2015-10-17 15:17:28',
            ),
            199 =>
            array (
                'id' => 1701,
                'question_id' => 426,
                'answer' => 'property use tax.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:17:39',
                'updated_at' => '2015-10-17 15:17:39',
            ),
            200 =>
            array (
                'id' => 1702,
                'question_id' => 426,
                'answer' => 'special assessment.',
                'correct' => 1,
            'definition' => 'When specific properties are benefited by public improvements, the charge levied to pay for such an improvement is called an <i>assessment</a>, a <i>special assessment</i>, or a <i>betterment</i> (unlike a general tax).',
                'created_at' => '2015-10-17 15:19:44',
                'updated_at' => '2015-10-17 15:19:44',
            ),
            201 =>
            array (
                'id' => 1703,
                'question_id' => 427,
                'answer' => 'property held for investment.',
                'correct' => 1,
                'definition' => 'Repairs are deductible for only rental property. Major improvements to a personal residence will be added to the basis of the home on sale, thus reducing the amount of taxable gain.',
                'created_at' => '2015-10-17 15:21:31',
                'updated_at' => '2015-10-17 15:21:31',
            ),
            202 =>
            array (
                'id' => 1704,
                'question_id' => 427,
                'answer' => 'appliances in the home.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:21:46',
                'updated_at' => '2015-10-17 15:21:46',
            ),
            203 =>
            array (
                'id' => 1705,
                'question_id' => 427,
                'answer' => 'personal residence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:21:57',
                'updated_at' => '2015-10-17 15:21:57',
            ),
            204 =>
            array (
                'id' => 1706,
                'question_id' => 427,
                'answer' => 'church property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:22:11',
                'updated_at' => '2015-10-17 15:22:11',
            ),
            205 =>
            array (
                'id' => 1707,
                'question_id' => 428,
                'answer' => 'A deduction for $10,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:23:03',
                'updated_at' => '2015-10-17 15:23:03',
            ),
            206 =>
            array (
                'id' => 1708,
                'question_id' => 428,
                'answer' => 'A deferral of $10,000 gain',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:23:21',
                'updated_at' => '2015-10-17 15:23:21',
            ),
            207 =>
            array (
                'id' => 1709,
                'question_id' => 428,
                'answer' => 'A credit for $10,000',
                'correct' => 1,
                'definition' => 'Because if applies against the amount of tax owed, a credit is more beneficial than a deduction or exclusion, which lessens the amount of income subject to taxation.',
                'created_at' => '2015-10-17 15:24:15',
                'updated_at' => '2015-10-17 15:24:15',
            ),
            208 =>
            array (
                'id' => 1710,
                'question_id' => 428,
                'answer' => 'An exemption for $10,000',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:24:31',
                'updated_at' => '2015-10-17 15:24:31',
            ),
            209 =>
            array (
                'id' => 1711,
                'question_id' => 429,
                'answer' => 'loan points paid by purchaser.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:26:14',
                'updated_at' => '2015-10-17 15:26:14',
            ),
            210 =>
            array (
                'id' => 1712,
                'question_id' => 429,
                'answer' => 'prepayment penalties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:26:25',
                'updated_at' => '2015-10-17 15:26:25',
            ),
            211 =>
            array (
                'id' => 1713,
                'question_id' => 429,
                'answer' => 'real property taxes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:26:34',
                'updated_at' => '2015-10-17 15:26:34',
            ),
            212 =>
            array (
                'id' => 1714,
                'question_id' => 429,
                'answer' => 'depreciation.',
                'correct' => 1,
                'definition' => 'Loan points and prepayment penalties are fully tax deductible as interest in the year paid if the security for the loan is the borrower\'s personal residence. If the security is investment property, these charges are deductible over the term of the loan and not in the year paid.',
                'created_at' => '2015-10-17 15:27:38',
                'updated_at' => '2015-10-17 15:27:38',
            ),
            213 =>
            array (
                'id' => 1715,
                'question_id' => 430,
                'answer' => 'When one lives in it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:28:56',
                'updated_at' => '2015-10-17 15:28:56',
            ),
            214 =>
            array (
                'id' => 1716,
                'question_id' => 430,
                'answer' => 'When one sells it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:29:06',
                'updated_at' => '2015-10-17 15:29:06',
            ),
            215 =>
            array (
                'id' => 1717,
                'question_id' => 430,
                'answer' => 'When one exchanges it',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 15:29:17',
                'updated_at' => '2015-10-17 15:29:17',
            ),
            216 =>
            array (
                'id' => 1718,
                'question_id' => 430,
                'answer' => 'When one rents it',
                'correct' => 1,
                'definition' => 'Depreciation is allowed on property held in a trade or business but is not allowed on a personal residence.',
                'created_at' => '2015-10-17 15:30:00',
                'updated_at' => '2015-10-17 15:30:00',
            ),
            217 =>
            array (
                'id' => 1719,
                'question_id' => 431,
                'answer' => 'subordination.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:10:35',
                'updated_at' => '2015-10-17 18:10:35',
            ),
            218 =>
            array (
                'id' => 1720,
                'question_id' => 431,
                'answer' => 'novation.',
                'correct' => 1,
                'definition' => 'Novation is the substitution of one obliged party for another. Note that the assuming buyer would have to substitute his or her own VA eligibility.',
                'created_at' => '2015-10-17 18:12:21',
                'updated_at' => '2015-10-17 18:12:36',
            ),
            219 =>
            array (
                'id' => 1721,
                'question_id' => 431,
                'answer' => 'acceleration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:12:54',
                'updated_at' => '2015-10-17 18:12:54',
            ),
            220 =>
            array (
                'id' => 1722,
                'question_id' => 431,
                'answer' => 'subrogation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:13:03',
                'updated_at' => '2015-10-17 18:13:03',
            ),
            221 =>
            array (
                'id' => 1723,
                'question_id' => 432,
                'answer' => 'qualified lending institutions.',
                'correct' => 1,
                'definition' => 'The private lender makes the loan, which is then insured by the FHA.',
                'created_at' => '2015-10-17 18:14:09',
                'updated_at' => '2015-10-17 18:14:09',
            ),
            222 =>
            array (
                'id' => 1724,
                'question_id' => 432,
                'answer' => 'Fannie Mae.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:14:20',
                'updated_at' => '2015-10-17 18:14:20',
            ),
            223 =>
            array (
                'id' => 1725,
                'question_id' => 432,
                'answer' => 'the Federal Housing Administration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:14:37',
                'updated_at' => '2015-10-17 18:14:37',
            ),
            224 =>
            array (
                'id' => 1726,
                'question_id' => 432,
                'answer' => 'the Federal Home Loan Bank.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:14:53',
                'updated_at' => '2015-10-17 18:14:53',
            ),
            225 =>
            array (
                'id' => 1727,
                'question_id' => 433,
                'answer' => 'The applicant must sign a declaration that he or she intends to occupy the dwelling.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:16:02',
                'updated_at' => '2015-10-17 18:16:02',
            ),
            226 =>
            array (
                'id' => 1728,
                'question_id' => 433,
                'answer' => 'There must be an appraisal from an appraiser approved by the VA.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:16:20',
                'updated_at' => '2015-10-17 18:16:20',
            ),
            227 =>
            array (
                'id' => 1729,
                'question_id' => 433,
                'answer' => 'The applicant must have a certificate of eligibility.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:16:43',
                'updated_at' => '2015-10-17 18:16:43',
            ),
            228 =>
            array (
                'id' => 1730,
                'question_id' => 433,
                'answer' => 'The borrower must pay the discount points at closing.',
                'correct' => 1,
                'definition' => 'The VA uses its approved appraisers and will lend only to owner-occupant veterans.',
                'created_at' => '2015-10-17 18:17:59',
                'updated_at' => '2015-10-17 18:17:59',
            ),
            229 =>
            array (
                'id' => 1731,
                'question_id' => 434,
                'answer' => 'an escalation payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:19:16',
                'updated_at' => '2015-10-17 18:19:16',
            ),
            230 =>
            array (
                'id' => 1732,
                'question_id' => 434,
                'answer' => 'a balloon payment.',
                'correct' => 1,
                'definition' => 'For example, a five-year loan could be amortized on a 10-year basis with a balloon payment due at the end of the fifth year.',
                'created_at' => '2015-10-17 18:19:54',
                'updated_at' => '2015-10-17 18:19:54',
            ),
            231 =>
            array (
                'id' => 1733,
                'question_id' => 434,
                'answer' => 'a satisfaction payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:20:08',
                'updated_at' => '2015-10-17 18:20:08',
            ),
            232 =>
            array (
                'id' => 1734,
                'question_id' => 434,
                'answer' => 'an acceleration payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:20:28',
                'updated_at' => '2015-10-17 18:20:28',
            ),
            233 =>
            array (
                'id' => 1735,
                'question_id' => 435,
                'answer' => 'an installment note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:21:21',
                'updated_at' => '2015-10-17 18:21:21',
            ),
            234 =>
            array (
                'id' => 1736,
                'question_id' => 435,
                'answer' => 'a straight note.',
                'correct' => 1,
                'definition' => 'A straight note is interest only. An amortized note would include interest and principal payments.',
                'created_at' => '2015-10-17 18:22:06',
                'updated_at' => '2015-10-17 18:22:06',
            ),
            235 =>
            array (
                'id' => 1737,
                'question_id' => 435,
                'answer' => 'an amortized note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:22:22',
                'updated_at' => '2015-10-17 18:22:22',
            ),
            236 =>
            array (
                'id' => 1738,
                'question_id' => 435,
                'answer' => 'a non-interest-bearing note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:22:37',
                'updated_at' => '2015-10-17 18:22:37',
            ),
            237 =>
            array (
                'id' => 1739,
                'question_id' => 436,
                'answer' => 'amortization.',
                'correct' => 1,
                'definition' => 'A fully amortized debt is one in which there are equal periodic payments of principal and interest, resulting in a zero balance at the end of the stated period. While the amount is constant, the part of each payment applied to interest and that applied to principal varies, with the interest portion gradually decreasing and the principal portion gradually increasing. An annuity is the periodic payment of money for the duration of a person\'s life or other designated period of time.',
                'created_at' => '2015-10-17 18:26:37',
                'updated_at' => '2015-10-17 18:26:37',
            ),
            238 =>
            array (
                'id' => 1740,
                'question_id' => 436,
                'answer' => 'an annuity.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:26:55',
                'updated_at' => '2015-10-17 18:26:55',
            ),
            239 =>
            array (
                'id' => 1741,
                'question_id' => 436,
                'answer' => 'acceleration.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:27:04',
                'updated_at' => '2015-10-17 18:27:04',
            ),
            240 =>
            array (
                'id' => 1742,
                'question_id' => 436,
                'answer' => 'assemblage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:34:53',
                'updated_at' => '2015-10-17 18:34:53',
            ),
            241 =>
            array (
                'id' => 1743,
                'question_id' => 437,
                'answer' => 'obtaining a second mortgage on a property that already has a first mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:35:53',
                'updated_at' => '2015-10-17 18:35:53',
            ),
            242 =>
            array (
                'id' => 1744,
                'question_id' => 437,
                'answer' => 'the repayment of an existing mortgage loan from the proceeds of a new one.',
                'correct' => 1,
            'definition' => 'An owner may pay off his five-year 10% loan with the proceeds of a recently negotiated 25-year, 9% loan (a primary market loan transaction). Naturally, the first lender would record a release of mortgage to clear the records of that encumbrance.',
                'created_at' => '2015-10-17 18:37:13',
                'updated_at' => '2015-10-17 18:37:13',
            ),
            243 =>
            array (
                'id' => 1745,
                'question_id' => 437,
                'answer' => 'changing one or more of the terms of an existing mortgage loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:37:31',
                'updated_at' => '2015-10-17 18:37:31',
            ),
            244 =>
            array (
                'id' => 1746,
                'question_id' => 437,
                'answer' => 'a secondary mortgage market transaction.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:37:45',
                'updated_at' => '2015-10-17 18:37:45',
            ),
            245 =>
            array (
                'id' => 1747,
                'question_id' => 438,
                'answer' => 'the seller assumes no financial risk.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:38:40',
                'updated_at' => '2015-10-17 18:38:40',
            ),
            246 =>
            array (
                'id' => 1748,
                'question_id' => 438,
                'answer' => 'the title is conveyed immediately to the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:38:55',
                'updated_at' => '2015-10-17 18:38:55',
            ),
            247 =>
            array (
                'id' => 1749,
                'question_id' => 438,
                'answer' => 'the seller is the lender.',
                'correct' => 1,
                'definition' => 'Under a land contract, the seller retains legal title as security, whereas under the purchase-money mortgage, the seller retains no title interest in the property, only the lien interest of a mortgagee.',
                'created_at' => '2015-10-17 18:39:51',
                'updated_at' => '2015-10-17 18:39:51',
            ),
            248 =>
            array (
                'id' => 1750,
                'question_id' => 438,
                'answer' => 'a mortgage is required.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:40:04',
                'updated_at' => '2015-10-17 18:40:04',
            ),
            249 =>
            array (
                'id' => 1751,
                'question_id' => 439,
                'answer' => 'the seller gets a return on the purchase in the form of rental.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:40:53',
                'updated_at' => '2015-10-17 18:40:53',
            ),
            250 =>
            array (
                'id' => 1752,
                'question_id' => 439,
                'answer' => 'The property is sold on condition that the new owner lease it back to the seller at the time title passes.',
                'correct' => 1,
                'definition' => 'The buyer is relatively confident the seller will be a triple-A tenant. Rent is tax deductible as a business expense.',
                'created_at' => '2015-10-17 18:43:23',
                'updated_at' => '2015-10-17 18:43:23',
            ),
            251 =>
            array (
                'id' => 1753,
                'question_id' => 439,
                'answer' => 'The buyer keeps capital in inventories, rather than in realty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:43:43',
                'updated_at' => '2015-10-17 18:43:43',
            ),
            252 =>
            array (
                'id' => 1754,
                'question_id' => 439,
                'answer' => 'The rental that the seller pays is not income-tax deductible.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:44:06',
                'updated_at' => '2015-10-17 18:44:06',
            ),
            253 =>
            array (
                'id' => 1755,
                'question_id' => 440,
                'answer' => 'higher yield to the lender.',
                'correct' => 1,
                'definition' => 'Each point is computed as a percent. One point is 1% and two points equal 2%. The discount points increase the lender\'s yield. Borrowers use points to buy down the interest rate, and by artificially lowering the interest rate by paying discount points, the buyer\'s borrowing power increases. Either the buyer or seller can pay up to six discount points without having a negative influence on the appraisal.',
                'created_at' => '2015-10-17 18:46:04',
                'updated_at' => '2015-10-17 18:46:04',
            ),
            254 =>
            array (
                'id' => 1756,
                'question_id' => 440,
                'answer' => 'longer time period of loan repayment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:46:33',
                'updated_at' => '2015-10-17 18:46:33',
            ),
            255 =>
            array (
                'id' => 1757,
                'question_id' => 440,
                'answer' => 'lower overall cost to borrower.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:46:45',
                'updated_at' => '2015-10-17 18:46:45',
            ),
            256 =>
            array (
                'id' => 1758,
                'question_id' => 440,
                'answer' => 'higher purchase price in the secondary mortgage market.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:47:00',
                'updated_at' => '2015-10-17 18:47:00',
            ),
            257 =>
            array (
                'id' => 1759,
                'question_id' => 441,
                'answer' => 'Interest rate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:47:57',
                'updated_at' => '2015-10-17 18:47:57',
            ),
            258 =>
            array (
                'id' => 1760,
                'question_id' => 441,
                'answer' => 'Monthly payments',
                'correct' => 1,
                'definition' => 'Graduated payment mortgages appeal to younger people who expect their income to gradually increase so they will be able to handle higher payments in later years. Under an adjustable-rate mortgage, the interest will fluctuate.',
                'created_at' => '2015-10-17 18:48:55',
                'updated_at' => '2015-10-17 18:48:55',
            ),
            259 =>
            array (
                'id' => 1761,
                'question_id' => 441,
                'answer' => 'Finance charge',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:49:05',
                'updated_at' => '2015-10-17 18:49:05',
            ),
            260 =>
            array (
                'id' => 1762,
                'question_id' => 441,
                'answer' => 'Annual rate',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:49:13',
                'updated_at' => '2015-10-17 18:49:13',
            ),
            261 =>
            array (
                'id' => 1763,
                'question_id' => 442,
                'answer' => 'A recorded land contract',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:51:24',
                'updated_at' => '2015-10-17 18:51:24',
            ),
            262 =>
            array (
                'id' => 1764,
                'question_id' => 442,
                'answer' => 'A lease with option to purchase',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:51:34',
                'updated_at' => '2015-10-17 18:51:34',
            ),
            263 =>
            array (
                'id' => 1765,
                'question_id' => 442,
                'answer' => 'An unrecorded land contract',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:51:46',
                'updated_at' => '2015-10-17 18:51:46',
            ),
            264 =>
            array (
                'id' => 1766,
                'question_id' => 442,
                'answer' => 'A second mortgage',
                'correct' => 1,
            'definition' => 'As a result of the federal Garn-St. Germain law, federal lending institutions are permitted to call in or accelerate their loans in the event the borrower transfers title to the real property securing the loan. Any transfer of legal or equitable title (including options or long-term leases) will trigger the due-on-sale clause, with a few exceptions, such as transfer between husband and wife. This law does not apply to junior mortgaging, because no transfer of legal or equitable title is involved.',
                'created_at' => '2015-10-17 18:53:54',
                'updated_at' => '2015-10-17 18:53:54',
            ),
            265 =>
            array (
                'id' => 1767,
                'question_id' => 443,
                'answer' => 'Capital is not tied up.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:55:20',
                'updated_at' => '2015-10-17 18:55:20',
            ),
            266 =>
            array (
                'id' => 1768,
                'question_id' => 443,
                'answer' => 'Rental payments are tax deductible.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:55:35',
                'updated_at' => '2015-10-17 18:55:35',
            ),
            267 =>
            array (
                'id' => 1769,
                'question_id' => 443,
                'answer' => 'Capital gain benefits result.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:55:47',
                'updated_at' => '2015-10-17 18:55:47',
            ),
            268 =>
            array (
                'id' => 1770,
                'question_id' => 443,
            'answer' => 'Allowable depreciation (cost recovery) can be claimed.',
                'correct' => 1,
                'definition' => 'The buyer gets the tax advantages of ownership, plus the benefits of any later appreciation in value of the property.',
                'created_at' => '2015-10-17 18:56:33',
                'updated_at' => '2015-10-17 18:56:33',
            ),
            269 =>
            array (
                'id' => 1771,
                'question_id' => 444,
                'answer' => 'arranges loans between borrowers and lenders.',
                'correct' => 1,
                'definition' => 'A mortgage <i>banker</i> could be a lender as well as an arranger.',
                'created_at' => '2015-10-17 18:57:35',
                'updated_at' => '2015-10-17 18:57:35',
            ),
            270 =>
            array (
                'id' => 1772,
                'question_id' => 444,
                'answer' => 'is a lender.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:57:45',
                'updated_at' => '2015-10-17 18:57:45',
            ),
            271 =>
            array (
                'id' => 1773,
                'question_id' => 444,
                'answer' => 'buys mortgages in the secondary mortgage market.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:58:02',
                'updated_at' => '2015-10-17 18:58:02',
            ),
            272 =>
            array (
                'id' => 1774,
                'question_id' => 444,
                'answer' => 'buys mortgages and resells them at a profit.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 18:58:19',
                'updated_at' => '2015-10-17 18:58:19',
            ),
            273 =>
            array (
                'id' => 1775,
                'question_id' => 445,
                'answer' => 'Reduction in the proceeds due seller',
                'correct' => 1,
                'definition' => 'The seller would be debited the amount of the discount points.',
                'created_at' => '2015-10-17 18:59:48',
                'updated_at' => '2015-10-17 18:59:48',
            ),
            274 =>
            array (
                'id' => 1776,
                'question_id' => 445,
                'answer' => 'Addition to the principal due from the buyer',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:00:21',
                'updated_at' => '2015-10-17 19:00:21',
            ),
            275 =>
            array (
                'id' => 1777,
                'question_id' => 445,
                'answer' => 'Reduction in the buyer\'s down payment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:00:35',
                'updated_at' => '2015-10-17 19:00:35',
            ),
            276 =>
            array (
                'id' => 1778,
                'question_id' => 445,
                'answer' => 'Addition to the proceeds due seller',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:00:47',
                'updated_at' => '2015-10-17 19:00:47',
            ),
            277 =>
            array (
                'id' => 1779,
                'question_id' => 446,
                'answer' => 'take title subject to the mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:01:44',
                'updated_at' => '2015-10-17 19:01:44',
            ),
            278 =>
            array (
                'id' => 1780,
                'question_id' => 446,
                'answer' => 'subordinate her position to the mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:02:00',
                'updated_at' => '2015-10-17 19:02:00',
            ),
            279 =>
            array (
                'id' => 1781,
                'question_id' => 446,
                'answer' => 'assume the mortgage and note.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:02:11',
                'updated_at' => '2015-10-17 19:02:11',
            ),
            280 =>
            array (
                'id' => 1782,
                'question_id' => 446,
                'answer' => 'obtain her own financing.',
                'correct' => 1,
                'definition' => 'If the buyer obtains financing, the seller will get cashed out and can pay off the existing mortgage. The seller would not be primarily liable if the buyer assumed the note, although he or she would remain secondarily liable.',
                'created_at' => '2015-10-17 19:03:12',
                'updated_at' => '2015-10-26 10:42:45',
            ),
            281 =>
            array (
                'id' => 1783,
                'question_id' => 447,
                'answer' => 'Assumption mortgage, deed, purchase-money second mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:07:47',
                'updated_at' => '2015-10-17 19:07:47',
            ),
            282 =>
            array (
                'id' => 1784,
                'question_id' => 447,
                'answer' => 'Deed, release of existing second mortgage, assumption agreement, purchase-mortgage second mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:08:22',
                'updated_at' => '2015-10-17 19:08:22',
            ),
            283 =>
            array (
                'id' => 1785,
                'question_id' => 447,
                'answer' => 'Purchase-money second mortgage, deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:08:51',
                'updated_at' => '2015-10-17 19:08:51',
            ),
            284 =>
            array (
                'id' => 1786,
                'question_id' => 447,
                'answer' => 'Release of second mortgage, deed, purchase-money second mortgage',
                'correct' => 1,
                'definition' => 'The existing second mortgage will be paid off, so a release or satisfaction piece must be recorded. Nothing need be recorded concerning the assumption, because the obligation to assume will be state in the deed. This is recorded an instant before the purchase-money second mortgage.',
                'created_at' => '2015-10-17 19:10:10',
                'updated_at' => '2015-10-17 19:10:10',
            ),
            285 =>
            array (
                'id' => 1787,
                'question_id' => 448,
                'answer' => 'Conventional',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:13:32',
                'updated_at' => '2015-10-17 19:13:32',
            ),
            286 =>
            array (
                'id' => 1788,
                'question_id' => 448,
                'answer' => 'FHA',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:13:40',
                'updated_at' => '2015-10-17 19:13:40',
            ),
            287 =>
            array (
                'id' => 1789,
                'question_id' => 448,
                'answer' => 'VA',
                'correct' => 1,
                'definition' => 'The VA requires that the veteran certify eligibility for its guaranteed nonconventional loans. The eligibility remains with the property until the loan is paid off or another veteran assumes the loan and substitutes his or her own eligibility.',
                'created_at' => '2015-10-17 19:15:36',
                'updated_at' => '2015-10-17 19:15:36',
            ),
            288 =>
            array (
                'id' => 1790,
                'question_id' => 448,
                'answer' => 'Fannie Mae',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:15:47',
                'updated_at' => '2015-10-17 19:15:47',
            ),
            289 =>
            array (
                'id' => 1791,
                'question_id' => 449,
                'answer' => 'Brokers service the loans they arrange.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:16:34',
                'updated_at' => '2015-10-17 19:16:34',
            ),
            290 =>
            array (
                'id' => 1792,
                'question_id' => 449,
                'answer' => 'Brokers arrange junior financing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:16:50',
                'updated_at' => '2015-10-17 19:16:50',
            ),
            291 =>
            array (
                'id' => 1793,
                'question_id' => 449,
                'answer' => 'Brokers do not provide their own funds to originate loans.',
                'correct' => 1,
            'definition' => 'Unlike the broker, the mortgage <i>banker</i> is capable of originating loans as well as servicing the loans arranged for others. The mortgage banker operates in the primary mortgage market (originating loans) as well as in the secondary mortgage market (seller loans, especially to Fannie Mae).',
                'created_at' => '2015-10-17 19:19:13',
                'updated_at' => '2015-10-17 19:19:13',
            ),
            292 =>
            array (
                'id' => 1794,
                'question_id' => 449,
                'answer' => 'Brokers operate in the primary mortgage market.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:19:31',
                'updated_at' => '2015-10-26 11:04:17',
            ),
            293 =>
            array (
                'id' => 1795,
                'question_id' => 450,
                'answer' => 'The amount applied to principal decreases each month.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:21:42',
                'updated_at' => '2015-10-17 19:21:42',
            ),
            294 =>
            array (
                'id' => 1796,
                'question_id' => 450,
                'answer' => 'The interest payment stays the same.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:21:57',
                'updated_at' => '2015-10-17 19:21:57',
            ),
            295 =>
            array (
                'id' => 1797,
                'question_id' => 450,
                'answer' => 'Interest and principal payments are constant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:22:10',
                'updated_at' => '2015-10-17 19:22:10',
            ),
            296 =>
            array (
                'id' => 1798,
                'question_id' => 450,
                'answer' => 'The amount applied to interest decreases each month.',
                'correct' => 1,
                'definition' => 'As each monthly $600 is paid, a portion is applied to reduce the principal balance of the debt. This results in a lower interest payment for the next month, because interest is now calculated on a lower balance.',
                'created_at' => '2015-10-17 19:23:19',
                'updated_at' => '2015-10-17 19:23:19',
            ),
            297 =>
            array (
                'id' => 1799,
                'question_id' => 451,
                'answer' => 'The seller is automatically released from liability upon the assumption.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:24:56',
                'updated_at' => '2015-10-17 19:24:56',
            ),
            298 =>
            array (
                'id' => 1800,
                'question_id' => 451,
                'answer' => 'The seller is immediately eligible for a maximum new VA loan upon the assumption.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:25:28',
                'updated_at' => '2015-10-17 19:25:28',
            ),
            299 =>
            array (
                'id' => 1801,
                'question_id' => 451,
                'answer' => 'There is a prepayment penalty.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-17 19:25:41',
                'updated_at' => '2015-10-17 19:25:41',
            ),
            300 =>
            array (
                'id' => 1802,
                'question_id' => 451,
                'answer' => 'It may be assumed with VA approval.',
                'correct' => 1,
                'definition' => 'To assume a VA loan committed after March 1, 1988, a purchaser must be able to qualify based on VA guidelines.',
                'created_at' => '2015-10-17 19:26:29',
                'updated_at' => '2015-10-17 19:26:29',
            ),
            301 =>
            array (
                'id' => 1803,
                'question_id' => 452,
                'answer' => 'a subordination clause.',
                'correct' => 1,
                'definition' => 'This clause is frequently found in second mortgages that allow the mortgagor to refinance the first mortgage. A recapture clause is found in shopping center percentage leases; a habendum clause is likely in a deed; and an escalation clause covers increases or decreases in payments.',
                'created_at' => '2015-10-20 19:44:34',
                'updated_at' => '2015-10-20 19:44:34',
            ),
            302 =>
            array (
                'id' => 1804,
                'question_id' => 452,
                'answer' => 'a habendum clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:44:50',
                'updated_at' => '2015-10-20 19:44:50',
            ),
            303 =>
            array (
                'id' => 1805,
                'question_id' => 452,
                'answer' => 'an escalation clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:45:02',
                'updated_at' => '2015-10-20 19:45:02',
            ),
            304 =>
            array (
                'id' => 1806,
                'question_id' => 452,
                'answer' => 'a recapture clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:45:13',
                'updated_at' => '2015-10-20 19:45:13',
            ),
            305 =>
            array (
                'id' => 1807,
                'question_id' => 453,
                'answer' => 'an estoppel certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:45:49',
                'updated_at' => '2015-10-20 19:45:49',
            ),
            306 =>
            array (
                'id' => 1808,
                'question_id' => 453,
                'answer' => 'a release of lien.',
                'correct' => 1,
            'definition' => 'Another name for a release is a satisfaction piece. The estoppel certificate (also called certificate of noe defence) is used when assigning a mortgage. It confirms the terms of the mortgagor\'s debt to prevent later dispute over any of the terms.',
                'created_at' => '2015-10-20 19:47:18',
                'updated_at' => '2015-10-20 19:47:18',
            ),
            307 =>
            array (
                'id' => 1809,
                'question_id' => 453,
                'answer' => 'a reduction certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:47:34',
                'updated_at' => '2015-10-20 19:47:34',
            ),
            308 =>
            array (
                'id' => 1810,
                'question_id' => 453,
                'answer' => 'a certificate of no defense.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:47:45',
                'updated_at' => '2015-10-20 19:47:45',
            ),
            309 =>
            array (
                'id' => 1811,
                'question_id' => 454,
                'answer' => 'Mortgagor',
                'correct' => 1,
                'definition' => 'The note evidences the debt and the mortgage transfers an interest in the secured property; thus, the borrower, not the lender, must sign.',
                'created_at' => '2015-10-20 19:48:48',
                'updated_at' => '2015-10-20 19:48:48',
            ),
            310 =>
            array (
                'id' => 1812,
                'question_id' => 454,
                'answer' => 'Mortgagee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:49:02',
                'updated_at' => '2015-10-20 19:49:02',
            ),
            311 =>
            array (
                'id' => 1813,
                'question_id' => 454,
                'answer' => 'Trustee',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:49:10',
                'updated_at' => '2015-10-20 19:49:10',
            ),
            312 =>
            array (
                'id' => 1814,
                'question_id' => 454,
                'answer' => 'Beneficiary',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:49:23',
                'updated_at' => '2015-10-20 19:49:23',
            ),
            313 =>
            array (
                'id' => 1815,
                'question_id' => 455,
                'answer' => 'borrower gains additional financing at a higher rate than the market interest rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:50:28',
                'updated_at' => '2015-10-20 19:50:28',
            ),
            314 =>
            array (
                'id' => 1816,
                'question_id' => 455,
                'answer' => 'originator of a wraparound mortgage is the primary mortgage holder.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:50:44',
                'updated_at' => '2015-10-20 19:50:44',
            ),
            315 =>
            array (
                'id' => 1817,
                'question_id' => 455,
                'answer' => 'wraparound mortgage specifically finances subdivisions.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:51:07',
                'updated_at' => '2015-10-20 19:51:07',
            ),
            316 =>
            array (
                'id' => 1818,
                'question_id' => 455,
                'answer' => 'effective interest rate is typically lower than the prevailing rate on new mortgages.',
                'correct' => 1,
            'definition' => 'A wraparound is a junior mortgage; but because the lender puts out only the cash difference between the existing mortgage and the total loan, the interest rate tends to be lower than the prevailing rat (but is usually higher than the existing mortgage\'s rate). The wraparound mortgage is actually a junior mortgage that overstates its principal by the amount of the surviving, underlying prior mortgages (i.e., the principal balance of the wraparound loan includes the principal balances of all existing mortgages). For example, a buyer gets a mortgage for $140,000 at 9%, which wraps around the seller\'s existing mortgage of $100,000 at 7%, even though the current rate of interest is 11%. The wraparound lender puts up only $40,000 in cash and uses the buyer\'s monthly 9% payments to pay both the existing first mortgage ($100,000) and the wraparound loan ($40,000). It is like a consolidation loan, with the wraparound lender disbursing all the monthly payments.',
                'created_at' => '2015-10-20 19:56:02',
                'updated_at' => '2015-10-20 19:56:02',
            ),
            317 =>
            array (
                'id' => 1819,
                'question_id' => 456,
                'answer' => 'It is the written promise of the borrower to repay the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:57:07',
                'updated_at' => '2015-10-20 19:57:07',
            ),
            318 =>
            array (
                'id' => 1820,
                'question_id' => 456,
                'answer' => 'It is the fundamental loan document.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:57:19',
                'updated_at' => '2015-10-20 19:57:19',
            ),
            319 =>
            array (
                'id' => 1821,
                'question_id' => 456,
                'answer' => 'It is typically recorded.',
                'correct' => 1,
                'definition' => 'The mortgage, not the note, is recorded, because the note does not create an interest in real estate; also, lenders often do not want the terms of the loan made public.',
                'created_at' => '2015-10-20 19:58:16',
                'updated_at' => '2015-10-20 19:58:16',
            ),
            320 =>
            array (
                'id' => 1822,
                'question_id' => 456,
                'answer' => 'It is signed by the mortgagor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 19:58:31',
                'updated_at' => '2015-10-20 19:58:31',
            ),
            321 =>
            array (
                'id' => 1823,
                'question_id' => 457,
                'answer' => 'The second mortgagee has priority.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:28:12',
                'updated_at' => '2015-10-20 20:28:12',
            ),
            322 =>
            array (
                'id' => 1824,
                'question_id' => 457,
                'answer' => 'The borrower is personally liable to both lenders.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:28:32',
                'updated_at' => '2015-10-20 20:28:32',
            ),
            323 =>
            array (
                'id' => 1825,
                'question_id' => 457,
                'answer' => 'The first lender will still be able to collect the money owed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:28:52',
                'updated_at' => '2015-10-20 20:28:52',
            ),
            324 =>
            array (
                'id' => 1826,
                'question_id' => 457,
                'answer' => 'An unrecorded mortgage cannot be enforced and collected on.',
                'correct' => 1,
            'definition' => 'Recordation determines priority of mortgage liens (in the absence of a subordination clause). Even if a mortgage is not recorded, the mortgagor is obligated under the note, for the debt is still effective between the borrower and the lender. An unrecorded mortgage is still valid against the mortgagor; it is just <i>not</i> valid against the claim of a good-faith second mortgagee who records first.',
                'created_at' => '2015-10-20 20:30:54',
                'updated_at' => '2015-10-20 20:30:54',
            ),
            325 =>
            array (
                'id' => 1827,
                'question_id' => 458,
                'answer' => 'Blanket mortgage',
                'correct' => 1,
                'definition' => 'Blanket mortgages are often used in developing subdivisions. These mortgages should contain carefully worded partial release causes to release individual lots from under the umbrella of the mortgage as they are sold.',
                'created_at' => '2015-10-20 20:32:32',
                'updated_at' => '2015-10-20 20:32:32',
            ),
            326 =>
            array (
                'id' => 1828,
                'question_id' => 458,
                'answer' => 'Package mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:32:43',
                'updated_at' => '2015-10-20 20:32:43',
            ),
            327 =>
            array (
                'id' => 1829,
                'question_id' => 458,
                'answer' => 'Open-end mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:32:52',
                'updated_at' => '2015-10-20 20:32:52',
            ),
            328 =>
            array (
                'id' => 1830,
                'question_id' => 458,
                'answer' => 'Conventional mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:33:02',
                'updated_at' => '2015-10-20 20:33:02',
            ),
            329 =>
            array (
                'id' => 1831,
                'question_id' => 459,
                'answer' => 'The woman is guilty of mortgage fraud.',
                'correct' => 1,
                'definition' => 'Making a false statement on a mortgage loan application constitutes fraud and may subject the woman to criminal prosecution as well as civil liability.',
                'created_at' => '2015-10-20 20:41:49',
                'updated_at' => '2015-10-20 20:41:49',
            ),
            330 =>
            array (
                'id' => 1832,
                'question_id' => 459,
                'answer' => 'The woman is a savvy investor and has done nothing wrong.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:42:27',
                'updated_at' => '2015-10-20 20:42:27',
            ),
            331 =>
            array (
                'id' => 1833,
                'question_id' => 459,
                'answer' => 'The woman should have purchased private mortgage insurance.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:42:46',
                'updated_at' => '2015-10-20 20:42:46',
            ),
            332 =>
            array (
                'id' => 1834,
                'question_id' => 459,
                'answer' => 'The lender will take possession of the property via principles of eminent domain.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:43:09',
                'updated_at' => '2015-10-20 20:43:09',
            ),
            333 =>
            array (
                'id' => 1835,
                'question_id' => 460,
                'answer' => 'first payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:43:55',
                'updated_at' => '2015-10-20 20:43:55',
            ),
            334 =>
            array (
                'id' => 1836,
                'question_id' => 460,
                'answer' => 'last payment.',
                'correct' => 1,
                'definition' => 'Balloon payments are popular in installment land contracts and nonamortized purchase-money second financing.',
                'created_at' => '2015-10-20 20:44:52',
                'updated_at' => '2015-10-20 20:44:52',
            ),
            335 =>
            array (
                'id' => 1837,
                'question_id' => 460,
                'answer' => 'middle payment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:45:06',
                'updated_at' => '2015-10-20 20:45:06',
            ),
            336 =>
            array (
                'id' => 1838,
                'question_id' => 460,
                'answer' => 'total payments.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:45:16',
                'updated_at' => '2015-10-20 20:45:16',
            ),
            337 =>
            array (
                'id' => 1839,
                'question_id' => 461,
                'answer' => 'an adjustment of the interest rate under specified conditions.',
                'correct' => 1,
            'definition' => 'The modern version of the escalation clause is the variable-rate (or adjustable-rate ) mortgage.',
                'created_at' => '2015-10-20 20:46:55',
                'updated_at' => '2015-10-20 20:46:55',
            ),
            338 =>
            array (
                'id' => 1840,
                'question_id' => 461,
                'answer' => 'immediate payment of the full debt upon any default.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:48:53',
                'updated_at' => '2015-10-20 20:48:53',
            ),
            339 =>
            array (
                'id' => 1841,
                'question_id' => 461,
                'answer' => 'a method of speeding up the payment to pay off the loan sooner.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:49:08',
                'updated_at' => '2015-10-20 20:49:08',
            ),
            340 =>
            array (
                'id' => 1842,
                'question_id' => 461,
                'answer' => 'a locked-in interest rate in the event that interest rates increase.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:49:28',
                'updated_at' => '2015-10-20 20:49:28',
            ),
            341 =>
            array (
                'id' => 1843,
                'question_id' => 462,
                'answer' => 'a direct reduction mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:51:13',
                'updated_at' => '2015-10-20 20:51:13',
            ),
            342 =>
            array (
                'id' => 1844,
                'question_id' => 462,
                'answer' => 'an amortized mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:51:37',
                'updated_at' => '2015-10-20 20:51:37',
            ),
            343 =>
            array (
                'id' => 1845,
                'question_id' => 462,
                'answer' => 'a blanket mortgage',
                'correct' => 1,
                'definition' => 'Popular in subdivision developments, blanket mortgages must be carefully checked for definite and unambiguous partial release provisions.',
                'created_at' => '2015-10-20 20:52:28',
                'updated_at' => '2015-10-20 20:52:28',
            ),
            344 =>
            array (
                'id' => 1846,
                'question_id' => 462,
                'answer' => 'a declining balance mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:52:53',
                'updated_at' => '2015-10-20 20:52:53',
            ),
            345 =>
            array (
                'id' => 1847,
                'question_id' => 463,
                'answer' => 'a lender can foreclose on a borrower who is in default.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:55:25',
                'updated_at' => '2015-10-20 20:55:25',
            ),
            346 =>
            array (
                'id' => 1848,
                'question_id' => 463,
                'answer' => 'the debtor can reclaim the property by payment.',
                'correct' => 1,
                'definition' => 'In many states, to redeem the property, the borrower must pay back the entire debt, not just the overdue payments. The purpose of foreclosure is to cut off this right to redeem.',
                'created_at' => '2015-10-20 20:56:55',
                'updated_at' => '2015-10-20 20:56:55',
            ),
            347 =>
            array (
                'id' => 1849,
                'question_id' => 463,
                'answer' => 'a prospective purchase can bid on the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:57:32',
                'updated_at' => '2015-10-20 20:57:32',
            ),
            348 =>
            array (
                'id' => 1850,
                'question_id' => 463,
                'answer' => 'the court may take possession of the secured property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-20 20:57:52',
                'updated_at' => '2015-10-20 20:57:52',
            ),
            349 =>
            array (
                'id' => 1851,
                'question_id' => 464,
                'answer' => 'There is no remedy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:02:49',
                'updated_at' => '2015-10-22 18:02:49',
            ),
            350 =>
            array (
                'id' => 1852,
                'question_id' => 464,
                'answer' => 'The mortgages must absorb the loss, because the mortgagor is liable only for foreclosure expenses.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:03:29',
                'updated_at' => '2015-10-22 18:03:29',
            ),
            351 =>
            array (
                'id' => 1853,
                'question_id' => 464,
                'answer' => 'The owner has the statutory right of redemption.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:49:19',
                'updated_at' => '2015-10-22 18:49:19',
            ),
            352 =>
            array (
                'id' => 1854,
                'question_id' => 464,
                'answer' => 'The mortgagee may obtain a deficiency judgment against the mortgagor.',
                'correct' => 1,
                'definition' => 'The mortgagee will not be able to obtain a deficiency judgment, however, if there is state antideficiency legislation or if the loan is a nonrecourse loan.',
                'created_at' => '2015-10-22 18:50:46',
                'updated_at' => '2015-10-22 18:50:46',
            ),
            353 =>
            array (
                'id' => 1855,
                'question_id' => 465,
                'answer' => 'A lower amount of interest',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:52:15',
                'updated_at' => '2015-10-22 18:52:15',
            ),
            354 =>
            array (
                'id' => 1856,
                'question_id' => 465,
                'answer' => 'Lower monthly payments',
                'correct' => 1,
                'definition' => 'Al though the principal amount and the rate of interest are the same, the fact that the payments are spread over five more years results in lower monthly payments. For example, on a $100,000 loan at 12%, the monthly payment on a 15-year amortization is $1,200.22. Each payment is $1,101.12 base on 20 years.',
                'created_at' => '2015-10-22 18:53:35',
                'updated_at' => '2015-10-22 18:53:35',
            ),
            355 =>
            array (
                'id' => 1857,
                'question_id' => 465,
                'answer' => 'Higher monthly payments',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:53:47',
                'updated_at' => '2015-10-22 18:53:47',
            ),
            356 =>
            array (
                'id' => 1858,
                'question_id' => 465,
                'answer' => 'Lower down payment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:53:56',
                'updated_at' => '2015-10-22 18:53:56',
            ),
            357 =>
            array (
                'id' => 1859,
                'question_id' => 466,
                'answer' => 'The acceleration clause is placed in a mortgage document for the benefit of the mortgagror.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:56:20',
                'updated_at' => '2015-10-22 18:56:20',
            ),
            358 =>
            array (
                'id' => 1860,
                'question_id' => 466,
                'answer' => 'The escalation clause is placed in the mortgage contract to facilitate foreclosure,',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:57:27',
                'updated_at' => '2015-10-22 18:57:27',
            ),
            359 =>
            array (
                'id' => 1861,
                'question_id' => 466,
                'answer' => 'The defeasance clause tells when the payments are due and defines any late charges.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:58:02',
                'updated_at' => '2015-10-22 18:58:02',
            ),
            360 =>
            array (
                'id' => 1862,
                'question_id' => 466,
                'answer' => 'Charging more than the legal rate of interest is called usury.',
                'correct' => 1,
                'definition' => 'The acceleration clause benefits the lender; the escalation clause permits fluctuations in the interest rate to reflect changes in the money market.',
                'created_at' => '2015-10-22 18:58:56',
                'updated_at' => '2015-10-22 18:58:56',
            ),
            361 =>
            array (
                'id' => 1863,
                'question_id' => 467,
                'answer' => 'a package mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 18:59:53',
                'updated_at' => '2015-10-22 18:59:53',
            ),
            362 =>
            array (
                'id' => 1864,
                'question_id' => 467,
                'answer' => 'an open-end mortgage.',
                'correct' => 1,
                'definition' => 'Such mortgages are not very popular, especially because of the frequent transfer of mortgages in the secondary mortgage market. They usually can\'t exceed the original amount of the loan.',
                'created_at' => '2015-10-22 19:00:50',
                'updated_at' => '2015-10-22 19:00:50',
            ),
            363 =>
            array (
                'id' => 1865,
                'question_id' => 467,
                'answer' => 'a purchase-money mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 19:01:04',
                'updated_at' => '2015-10-22 19:01:04',
            ),
            364 =>
            array (
                'id' => 1866,
                'question_id' => 467,
                'answer' => 'a wraparound mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 19:01:15',
                'updated_at' => '2015-10-22 19:01:15',
            ),
            365 =>
            array (
                'id' => 1867,
                'question_id' => 468,
                'answer' => 'bill of sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 19:03:05',
                'updated_at' => '2015-10-22 19:03:05',
            ),
            366 =>
            array (
                'id' => 1868,
                'question_id' => 468,
                'answer' => 'note and mortgage.',
                'correct' => 1,
            'definition' => 'The deed usually contains and assumption clause obligating the grantee to take on the grantor\'s obligations under the existing note and mortgage. There would be a new note and mortgage (or novation) if the seller were to be relieved of all liability.',
                'created_at' => '2015-10-22 19:04:33',
                'updated_at' => '2015-10-22 19:04:33',
            ),
            367 =>
            array (
                'id' => 1869,
                'question_id' => 468,
                'answer' => 'assumption agreement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 19:04:49',
                'updated_at' => '2015-10-22 19:04:49',
            ),
            368 =>
            array (
                'id' => 1870,
                'question_id' => 468,
                'answer' => 'warranty deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-22 19:05:04',
                'updated_at' => '2015-10-22 19:05:04',
            ),
            369 =>
            array (
                'id' => 1871,
                'question_id' => 469,
                'answer' => 'a lender\'s certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:21:25',
                'updated_at' => '2015-10-25 21:21:25',
            ),
            370 =>
            array (
                'id' => 1872,
                'question_id' => 469,
                'answer' => 'a title certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:21:42',
                'updated_at' => '2015-10-25 21:21:42',
            ),
            371 =>
            array (
                'id' => 1873,
                'question_id' => 469,
                'answer' => 'an estoppel certificate.',
                'correct' => 1,
                'definition' => 'It is important that purchasers of a mortgage in the secondary mortgage market obtain this estoppel certificate. Most mortgages have provisions requiring that the mortgagor execute an estoppel certificate on request of the mortgagee. The mortgagor states that he or she has no claims, set-offs, or defenses to assert against the debt.',
                'created_at' => '2015-10-25 21:23:56',
                'updated_at' => '2015-10-25 21:23:56',
            ),
            372 =>
            array (
                'id' => 1874,
                'question_id' => 469,
                'answer' => 'a financial certificate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:24:14',
                'updated_at' => '2015-10-25 21:24:14',
            ),
            373 =>
            array (
                'id' => 1875,
                'question_id' => 470,
                'answer' => 'The seller is relieved from liability.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:25:31',
                'updated_at' => '2015-10-25 21:25:31',
            ),
            374 =>
            array (
                'id' => 1876,
                'question_id' => 470,
                'answer' => 'The buyer and the seller are liable for the loan.',
                'correct' => 1,
                'definition' => 'The buyer is primarily liable, and the seller is secondarily liable. In a sale "subject to" the mortgage, the buyer is not liable to the lender.',
                'created_at' => '2015-10-25 21:26:26',
                'updated_at' => '2015-10-25 21:26:26',
            ),
            375 =>
            array (
                'id' => 1877,
                'question_id' => 470,
                'answer' => 'Only the seller is liable.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:26:47',
                'updated_at' => '2015-10-25 21:26:47',
            ),
            376 =>
            array (
                'id' => 1878,
                'question_id' => 470,
                'answer' => 'Only the buyer is liable.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:26:59',
                'updated_at' => '2015-10-25 21:26:59',
            ),
            377 =>
            array (
                'id' => 1879,
                'question_id' => 471,
                'answer' => 'Foreclosure',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:27:54',
                'updated_at' => '2015-10-25 21:27:54',
            ),
            378 =>
            array (
                'id' => 1880,
                'question_id' => 471,
                'answer' => 'Prepayment',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:28:05',
                'updated_at' => '2015-10-25 21:28:05',
            ),
            379 =>
            array (
                'id' => 1881,
                'question_id' => 471,
                'answer' => 'Redemption',
                'correct' => 1,
                'definition' => 'The right to pay off a mortgage debt at any time up to the foreclosure sale is called the equitable right of redemption. Some states give an additional time after the foreclosure sale--this is called the <i>statutory right of redemption</i>.',
                'created_at' => '2015-10-25 21:29:29',
                'updated_at' => '2015-10-26 10:50:56',
            ),
            380 =>
            array (
                'id' => 1882,
                'question_id' => 471,
                'answer' => 'Escalation',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:29:42',
                'updated_at' => '2015-10-25 21:29:42',
            ),
            381 =>
            array (
                'id' => 1883,
                'question_id' => 472,
                'answer' => 'The term of the loan may not be extended.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:30:24',
                'updated_at' => '2015-10-25 21:30:24',
            ),
            382 =>
            array (
                'id' => 1884,
                'question_id' => 472,
                'answer' => 'The interest rate may decrease one percentage point.',
                'correct' => 1,
                'definition' => 'The interest rate on an adjustable-rate mortgage may increase or decrease, depending on the terms of the loan. If there is an increase, the monthly payments could stay the same, but the term might be extended.',
                'created_at' => '2015-10-25 21:31:50',
                'updated_at' => '2015-10-25 21:31:50',
            ),
            383 =>
            array (
                'id' => 1885,
                'question_id' => 472,
                'answer' => 'The number of lenders involved changes each year.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:32:14',
                'updated_at' => '2015-10-25 21:32:14',
            ),
            384 =>
            array (
                'id' => 1886,
                'question_id' => 472,
                'answer' => 'No prepayment is allowed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:32:29',
                'updated_at' => '2015-10-25 21:32:29',
            ),
            385 =>
            array (
                'id' => 1887,
                'question_id' => 473,
                'answer' => 'Unless otherwise provided, interest is usually charged in arrears, meaning at the end of each period for which interest is due.',
                'correct' => 1,
                'definition' => 'Interest is paid in the arrears; therefore, the payment due September 1 covers interest for the August period. The amount of the monthly payment applied to interest gradually decreases as the principal on the loan is slowly paid off.',
                'created_at' => '2015-10-25 21:34:39',
                'updated_at' => '2015-10-25 21:34:39',
            ),
            386 =>
            array (
                'id' => 1888,
                'question_id' => 473,
                'answer' => 'The interest portion of each payment remains the same throughout the entire term of the loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:35:03',
                'updated_at' => '2015-10-25 21:35:03',
            ),
            387 =>
            array (
                'id' => 1889,
                'question_id' => 473,
                'answer' => 'the monthly payment will remain the same, and out of each monthly payment, the same amount will be applied to principal and toward interest.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:35:29',
                'updated_at' => '2015-10-25 21:35:29',
            ),
            388 =>
            array (
                'id' => 1890,
                'question_id' => 473,
                'answer' => 'Amortized loans must have a floating interest rate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:35:46',
                'updated_at' => '2015-10-25 21:35:46',
            ),
            389 =>
            array (
                'id' => 1891,
                'question_id' => 474,
                'answer' => 'partial assignment.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:37:02',
                'updated_at' => '2015-10-25 21:37:02',
            ),
            390 =>
            array (
                'id' => 1892,
                'question_id' => 474,
                'answer' => 'release.',
                'correct' => 1,
                'definition' => 'A release clause , or partial release clause, will remove a specific parcel from the lien of the blanket mortgage. Partial assignments typically involve the transfer of all of the lease term as it applies to a portion of the leased premises.',
                'created_at' => '2015-10-25 21:38:54',
                'updated_at' => '2015-10-25 21:38:54',
            ),
            391 =>
            array (
                'id' => 1893,
                'question_id' => 474,
                'answer' => 'novation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:39:10',
                'updated_at' => '2015-10-25 21:39:10',
            ),
            392 =>
            array (
                'id' => 1894,
                'question_id' => 474,
                'answer' => 'due-on-sale.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:39:21',
                'updated_at' => '2015-10-25 21:39:21',
            ),
            393 =>
            array (
                'id' => 1895,
                'question_id' => 475,
                'answer' => 'They have the same number of parties.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:40:35',
                'updated_at' => '2015-10-25 21:40:35',
            ),
            394 =>
            array (
                'id' => 1896,
                'question_id' => 475,
                'answer' => 'They have similar foreclosure processes.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:40:48',
                'updated_at' => '2015-10-25 21:40:48',
            ),
            395 =>
            array (
                'id' => 1897,
                'question_id' => 475,
                'answer' => 'They transfer the same interest to the lender.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:41:03',
                'updated_at' => '2015-10-25 21:41:03',
            ),
            396 =>
            array (
                'id' => 1898,
                'question_id' => 475,
                'answer' => 'They involve a promissory note.',
                'correct' => 1,
                'definition' => 'The trust deed and mortgage are devices used to secure the repayment of debt. The trust deed uses a trustee to hold title and has a more expeditious foreclosure mechanism.',
                'created_at' => '2015-10-25 21:42:01',
                'updated_at' => '2015-10-25 21:42:01',
            ),
            397 =>
            array (
                'id' => 1899,
                'question_id' => 476,
                'answer' => 'Whith PMI, the borrower purchases an insurance policy that provides the lender with funds in the event the borrower defaults on the loan.',
                'correct' => 1,
                'definition' => 'This allows the lender to assume more risk so that the loan-to-value ratio is higher than for other conventional loans.',
                'created_at' => '2015-10-25 21:44:10',
                'updated_at' => '2015-10-25 21:44:10',
            ),
            398 =>
            array (
                'id' => 1900,
                'question_id' => 476,
                'answer' => 'Private mortgage insurance is illegal in most states.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:44:37',
                'updated_at' => '2015-10-25 21:44:37',
            ),
            399 =>
            array (
                'id' => 1901,
                'question_id' => 476,
                'answer' => 'Private mortgage insurance is only available to consumers with a credit score of 750 or higher.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:45:12',
                'updated_at' => '2015-10-25 21:45:12',
            ),
            400 =>
            array (
                'id' => 1902,
                'question_id' => 476,
                'answer' => 'With PMI, the borrower is protected in the event of disputes concerning title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:45:34',
                'updated_at' => '2015-10-25 21:45:34',
            ),
            401 =>
            array (
                'id' => 1903,
                'question_id' => 477,
                'answer' => 'Seth',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:53:10',
                'updated_at' => '2015-10-25 21:53:10',
            ),
            402 =>
            array (
                'id' => 1904,
                'question_id' => 477,
                'answer' => 'Hank\'s heirs',
                'correct' => 1,
                'definition' => 'There is no delivery; that is, Hank did not give up <i>control</i> over the deed during his lifetime as he would have if he had handed it to Seth or put it into an escrow. To accomplish his purpose, Hank should have prepared a will that, unless revoked, would have the effect of transferring title on Hank\'s death.',
                'created_at' => '2015-10-25 21:54:41',
                'updated_at' => '2015-10-25 21:54:41',
            ),
            403 =>
            array (
                'id' => 1905,
                'question_id' => 477,
                'answer' => 'The state',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:54:51',
                'updated_at' => '2015-10-25 21:54:51',
            ),
            404 =>
            array (
                'id' => 1906,
                'question_id' => 477,
                'answer' => 'Seth\'s heirs',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:55:03',
                'updated_at' => '2015-10-25 21:55:03',
            ),
            405 =>
            array (
                'id' => 1907,
                'question_id' => 478,
                'answer' => 'involuntary alienation.',
                'correct' => 1,
                'definition' => 'Examples of transfer by involuntary alienation include adverse possession, foreclosure and eminent domain.',
                'created_at' => '2015-10-25 21:57:04',
                'updated_at' => '2015-10-25 21:57:04',
            ),
            406 =>
            array (
                'id' => 1908,
                'question_id' => 478,
                'answer' => 'voluntary alienation.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:57:17',
                'updated_at' => '2015-10-25 21:57:17',
            ),
            407 =>
            array (
                'id' => 1909,
                'question_id' => 478,
                'answer' => 'quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:57:30',
                'updated_at' => '2015-10-25 21:57:30',
            ),
            408 =>
            array (
                'id' => 1910,
                'question_id' => 478,
                'answer' => 'none of these.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 21:57:40',
                'updated_at' => '2015-10-25 21:57:40',
            ),
            409 =>
            array (
                'id' => 1911,
                'question_id' => 479,
                'answer' => 'special warranty deeds.',
                'correct' => 1,
                'definition' => 'Special warranty deeds are frequently used by fiduciaries, such as guardians and trustees. In a general warranty deed, the warranties extend to defects arising even before the grantor acquired title--fiduciaries will not usually assume this risk.',
                'created_at' => '2015-10-25 22:10:50',
                'updated_at' => '2015-10-25 22:10:50',
            ),
            410 =>
            array (
                'id' => 1912,
                'question_id' => 479,
                'answer' => 'general warranty deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:11:06',
                'updated_at' => '2015-10-25 22:11:06',
            ),
            411 =>
            array (
                'id' => 1913,
                'question_id' => 479,
                'answer' => 'quitclaim deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:11:17',
                'updated_at' => '2015-10-25 22:11:17',
            ),
            412 =>
            array (
                'id' => 1914,
                'question_id' => 479,
                'answer' => 'trust deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:11:27',
                'updated_at' => '2015-10-25 22:11:27',
            ),
            413 =>
            array (
                'id' => 1915,
                'question_id' => 480,
                'answer' => 'partition clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:12:32',
                'updated_at' => '2015-10-25 22:12:32',
            ),
            414 =>
            array (
                'id' => 1916,
                'question_id' => 480,
                'answer' => 'revocation clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:12:43',
                'updated_at' => '2015-10-25 22:12:43',
            ),
            415 =>
            array (
                'id' => 1917,
                'question_id' => 480,
                'answer' => 'habendum clause.',
                'correct' => 1,
                'definition' => 'Also called the <i>to have and to hold clause</i>, the habendum clause is customarily included in a deed. It indicates that the grantor is conveying , for example, a fee simple or life estate.',
                'created_at' => '2015-10-25 22:13:56',
                'updated_at' => '2015-10-25 22:13:56',
            ),
            416 =>
            array (
                'id' => 1918,
                'question_id' => 480,
                'answer' => 'reversion clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:14:14',
                'updated_at' => '2015-10-25 22:14:14',
            ),
            417 =>
            array (
                'id' => 1919,
                'question_id' => 481,
                'answer' => 'There must be manual delivery of the deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:21:03',
                'updated_at' => '2015-10-25 22:21:03',
            ),
            418 =>
            array (
                'id' => 1920,
                'question_id' => 481,
                'answer' => 'The deed must be signed by the grantor and grantee and then recorded.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:21:27',
                'updated_at' => '2015-10-25 22:21:27',
            ),
            419 =>
            array (
                'id' => 1921,
                'question_id' => 481,
                'answer' => 'The deed must have a habendum clause.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-25 22:22:07',
                'updated_at' => '2015-10-25 22:22:07',
            ),
            420 =>
            array (
                'id' => 1922,
                'question_id' => 481,
                'answer' => 'The deed must be in writing.',
                'correct' => 1,
                'definition' => 'Delivery in escrow could be sufficient; deeds need not be signed by the grantee or recorded to be valid.',
                'created_at' => '2015-10-25 22:22:46',
                'updated_at' => '2015-10-25 22:22:46',
            ),
            421 =>
            array (
                'id' => 1923,
                'question_id' => 482,
                'answer' => 'Bargain and sale',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:28:37',
                'updated_at' => '2015-10-26 21:28:37',
            ),
            422 =>
            array (
                'id' => 1924,
                'question_id' => 482,
                'answer' => 'Special warranty',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:28:51',
                'updated_at' => '2015-10-26 21:28:51',
            ),
            423 =>
            array (
                'id' => 1925,
                'question_id' => 482,
                'answer' => 'General warranty',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:29:02',
                'updated_at' => '2015-10-26 21:29:02',
            ),
            424 =>
            array (
                'id' => 1926,
                'question_id' => 482,
                'answer' => 'Quitclaim',
                'correct' => 1,
                'definition' => 'In a bargain and sale deed, there are no warranties, but the grantor does assert ownership of title.',
                'created_at' => '2015-10-26 21:32:15',
                'updated_at' => '2015-10-26 21:32:15',
            ),
            425 =>
            array (
                'id' => 1927,
                'question_id' => 483,
                'answer' => 'acknowledgment.',
                'correct' => 1,
                'definition' => 'Acknowledgments are usually taken by a notary public and are partially designed to eliminate forgery of documents. Therefore, notaries should require proper identification. Acknowledgments also are evidence that the document is authentic.',
                'created_at' => '2015-10-26 21:35:19',
                'updated_at' => '2015-10-26 21:35:19',
            ),
            426 =>
            array (
                'id' => 1928,
                'question_id' => 483,
                'answer' => 'authorization.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:35:31',
                'updated_at' => '2015-10-26 21:35:31',
            ),
            427 =>
            array (
                'id' => 1929,
                'question_id' => 483,
                'answer' => 'authentication.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:36:44',
                'updated_at' => '2015-10-26 21:36:44',
            ),
            428 =>
            array (
                'id' => 1930,
                'question_id' => 483,
                'answer' => 'execution.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:36:52',
                'updated_at' => '2015-10-26 21:36:52',
            ),
            429 =>
            array (
                'id' => 1931,
                'question_id' => 484,
                'answer' => 'a nonoccupant holder of a warranty deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:37:52',
                'updated_at' => '2015-10-26 21:37:52',
            ),
            430 =>
            array (
                'id' => 1932,
                'question_id' => 484,
                'answer' => 'a nonoccupant holder of an unrecorded quitclaim deed',
                'correct' => 1,
                'definition' => 'This grantee has given no constructive notice of the rights of recording or possession and has no warranties to assert against the grantor in the event the stranger proves to have a superior title. ',
                'created_at' => '2015-10-26 21:44:04',
                'updated_at' => '2015-10-26 21:44:04',
            ),
            431 =>
            array (
                'id' => 1933,
                'question_id' => 484,
                'answer' => 'One who holds an unrecorded deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:48:58',
                'updated_at' => '2015-10-26 21:48:58',
            ),
            432 =>
            array (
                'id' => 1934,
                'question_id' => 484,
                'answer' => 'One who holds a recorded quitclaim deed to the property',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:49:59',
                'updated_at' => '2015-10-26 21:49:59',
            ),
            433 =>
            array (
                'id' => 1935,
                'question_id' => 485,
                'answer' => 'An unrecorded deed is not enforceable between grantor and grantee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:51:52',
                'updated_at' => '2015-10-26 21:51:52',
            ),
            434 =>
            array (
                'id' => 1936,
                'question_id' => 485,
                'answer' => 'A deed must be signed by the grantor to be recorded.',
                'correct' => 1,
                'definition' => 'The unrecorded deed is valid between the parties buy may be unenforceable against a subsequent purchaser for value who records first. The acknowledged signature of the grantor is a requirement for recordation.',
                'created_at' => '2015-10-26 21:53:28',
                'updated_at' => '2015-10-26 21:54:22',
            ),
            435 =>
            array (
                'id' => 1937,
                'question_id' => 485,
                'answer' => 'A deed with the grantee\'s name omitted is acceptable for recording.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 21:57:07',
                'updated_at' => '2015-10-26 21:57:07',
            ),
            436 =>
            array (
                'id' => 1938,
                'question_id' => 485,
                'answer' => 'An unacknowledged deed is void.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:00:07',
                'updated_at' => '2015-10-26 22:00:07',
            ),
            437 =>
            array (
                'id' => 1939,
                'question_id' => 486,
                'answer' => 'to a minor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:01:10',
                'updated_at' => '2015-10-26 22:01:10',
            ),
            438 =>
            array (
                'id' => 1940,
                'question_id' => 486,
                'answer' => 'by a quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:01:39',
                'updated_at' => '2015-10-26 22:01:39',
            ),
            439 =>
            array (
                'id' => 1941,
                'question_id' => 486,
                'answer' => 'by a minor.',
                'correct' => 1,
                'definition' => 'Provided the grantor of the quitclaim deed had good title, that good title could be transferred, although a grantee would be wise to inquire why the grantor is not giving any warranties of title. If there is any doubt of a clear title, obtaining a title insurance policy is recommended. A deed by a minor is voidable. A guardian must be appointed and empowered by the court to convey.',
                'created_at' => '2015-10-26 22:01:48',
                'updated_at' => '2015-10-26 22:03:33',
            ),
            440 =>
            array (
                'id' => 1942,
                'question_id' => 486,
                'answer' => 'release deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:04:24',
                'updated_at' => '2015-10-26 22:04:24',
            ),
            441 =>
            array (
                'id' => 1943,
                'question_id' => 487,
                'answer' => 'bargain and sale deeds.',
                'correct' => 1,
            'definition' => 'A bargain and sale deed may be used by a grantor who had good title but does not want to make any warranties with respect to title. In this sense, it is slightly more beneficial to the grantee than a quitclaim deed (which is often used when grantees are unsure whether they have any title to a property).',
                'created_at' => '2015-10-26 22:07:11',
                'updated_at' => '2015-10-26 22:07:11',
            ),
            442 =>
            array (
                'id' => 1944,
                'question_id' => 487,
                'answer' => 'quitclaim deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:08:18',
                'updated_at' => '2015-10-26 22:08:18',
            ),
            443 =>
            array (
                'id' => 1945,
                'question_id' => 487,
                'answer' => 'habendum deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:08:30',
                'updated_at' => '2015-10-26 22:08:30',
            ),
            444 =>
            array (
                'id' => 1946,
                'question_id' => 487,
                'answer' => 'release deeds.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:08:41',
                'updated_at' => '2015-10-26 22:08:41',
            ),
            445 =>
            array (
                'id' => 1947,
                'question_id' => 488,
                'answer' => 'Proper signature',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:09:28',
                'updated_at' => '2015-10-26 22:09:28',
            ),
            446 =>
            array (
                'id' => 1948,
                'question_id' => 488,
                'answer' => 'Lack of money consideration',
                'correct' => 1,
                'definition' => 'It could be a gift deed involving only good consideration. Only contracts need valuable consideration; deeds are conveyances.',
                'created_at' => '2015-10-26 22:10:40',
                'updated_at' => '2015-10-26 22:10:40',
            ),
            447 =>
            array (
                'id' => 1949,
                'question_id' => 488,
                'answer' => 'Delivery',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:10:54',
                'updated_at' => '2015-10-26 22:10:54',
            ),
            448 =>
            array (
                'id' => 1950,
                'question_id' => 488,
                'answer' => 'Competent grantor',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:11:05',
                'updated_at' => '2015-10-26 22:11:05',
            ),
            449 =>
            array (
                'id' => 1951,
                'question_id' => 489,
                'answer' => 'purchase contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:11:47',
                'updated_at' => '2015-10-26 22:11:47',
            ),
            450 =>
            array (
                'id' => 1952,
                'question_id' => 489,
                'answer' => 'listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:11:57',
                'updated_at' => '2015-10-26 22:11:57',
            ),
            451 =>
            array (
                'id' => 1953,
                'question_id' => 489,
                'answer' => 'lease.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:12:05',
                'updated_at' => '2015-10-26 22:12:05',
            ),
            452 =>
            array (
                'id' => 1954,
                'question_id' => 489,
                'answer' => 'warranty deed.',
                'correct' => 1,
                'definition' => 'A deed is a conveyance that must be signed by the grantor. The listing is signed by both seller and broker, the lease by a landlord and tenant, and the purchase contract by a buyer and seller.',
                'created_at' => '2015-10-26 22:12:53',
                'updated_at' => '2015-10-26 22:12:53',
            ),
            453 =>
            array (
                'id' => 1955,
                'question_id' => 490,
                'answer' => 'The special warranty deed contains the most covenants.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:14:15',
                'updated_at' => '2015-10-26 22:14:33',
            ),
            454 =>
            array (
                'id' => 1956,
                'question_id' => 490,
                'answer' => 'The quitclaim deed is no different from a bargain and sale deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:15:00',
                'updated_at' => '2015-10-26 22:15:00',
            ),
            455 =>
            array (
                'id' => 1957,
                'question_id' => 490,
                'answer' => 'The quitclaim deed gives the lease protection to the grantee.',
                'correct' => 1,
            'definition' => 'As far as the grantor\'s liability is concerned, the general warranty deed gives the most exposure, then the special warranty deed (covers only the time the grantor owned the property), then the quitclaim deed (with no liability).',
                'created_at' => '2015-10-26 22:17:21',
                'updated_at' => '2015-10-26 22:17:21',
            ),
            456 =>
            array (
                'id' => 1958,
                'question_id' => 490,
                'answer' => 'The general warranty deed offers the least liability to the grantor.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:17:47',
                'updated_at' => '2015-10-26 22:17:47',
            ),
            457 =>
            array (
                'id' => 1959,
                'question_id' => 491,
                'answer' => 'Title passed when the deed was placed into escrow.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:19:11',
                'updated_at' => '2015-10-26 22:19:11',
            ),
            458 =>
            array (
                'id' => 1960,
                'question_id' => 491,
                'answer' => 'Title passes when and if the estate provides another deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:19:30',
                'updated_at' => '2015-10-26 22:19:30',
            ),
            459 =>
            array (
                'id' => 1961,
                'question_id' => 491,
                'answer' => 'Because the escrow dies with the seller, no deed or legal title will pass as closing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:20:02',
                'updated_at' => '2015-10-26 22:20:02',
            ),
            460 =>
            array (
                'id' => 1962,
                'question_id' => 491,
                'answer' => 'Title passes on closing.',
                'correct' => 1,
                'definition' => 'The rule is that a deed is valid only if the grantor is alive at the time of delivery. When death occurs during escrow, most courts will create the legal fiction that delivery occurred when the deed was first deposited in escrow, at which time the grantor was alive. Although delivery relates back, actual passing of legal title does not take place until closing.',
                'created_at' => '2015-10-26 22:22:00',
                'updated_at' => '2015-10-26 22:22:00',
            ),
            461 =>
            array (
                'id' => 1963,
                'question_id' => 492,
                'answer' => 'governmental actions.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:28:18',
                'updated_at' => '2015-10-26 22:28:18',
            ),
            462 =>
            array (
                'id' => 1964,
                'question_id' => 492,
                'answer' => 'forgery of a deed.',
                'correct' => 1,
                'definition' => 'All title insurance policies cover hidden risks, such as forgery in the chain of title. A extended policy, such as an ALTA policy, would cover against rights of parties in possession and water an mineral rights, but few policies would extend to governmental actions.',
                'created_at' => '2015-10-26 22:30:29',
                'updated_at' => '2015-10-26 22:30:52',
            ),
            463 =>
            array (
                'id' => 1965,
                'question_id' => 492,
                'answer' => 'rights of parties in possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:31:28',
                'updated_at' => '2015-10-26 22:31:28',
            ),
            464 =>
            array (
                'id' => 1966,
                'question_id' => 492,
                'answer' => 'water and mineral rights.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:31:39',
                'updated_at' => '2015-10-26 22:31:39',
            ),
            465 =>
            array (
                'id' => 1967,
                'question_id' => 493,
                'answer' => 'Certificate of title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:33:12',
                'updated_at' => '2015-10-26 22:33:12',
            ),
            466 =>
            array (
                'id' => 1968,
                'question_id' => 493,
                'answer' => 'Standard coverage policy of title insurance',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:33:29',
                'updated_at' => '2015-10-26 22:33:29',
            ),
            467 =>
            array (
                'id' => 1969,
                'question_id' => 493,
                'answer' => 'Abstract of title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:33:45',
                'updated_at' => '2015-10-26 22:33:45',
            ),
            468 =>
            array (
                'id' => 1970,
                'question_id' => 493,
                'answer' => 'Extended coverage policy of title insurance',
                'correct' => 1,
                'definition' => 'An extended coverage title policy insures against hidden risks and matters that an inspection of the property would reveal, such as mechanics\' liens, undisclosed easements, or rights of parties in possession.',
                'created_at' => '2015-10-26 22:35:45',
                'updated_at' => '2015-10-26 22:35:45',
            ),
            469 =>
            array (
                'id' => 1971,
                'question_id' => 494,
                'answer' => 'unrecorded mechanics\' liens.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:37:42',
                'updated_at' => '2015-10-26 22:37:42',
            ),
            470 =>
            array (
                'id' => 1972,
                'question_id' => 494,
                'answer' => 'unrecorded physical easements.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:38:03',
                'updated_at' => '2015-10-26 22:38:03',
            ),
            471 =>
            array (
                'id' => 1973,
                'question_id' => 494,
                'answer' => 'the effect of zoning regulations.',
                'correct' => 1,
                'definition' => 'It would be an unusual endorsement even on an extended coverage policy that would cover matters of zoning and governmental regulation.',
                'created_at' => '2015-10-26 22:40:45',
                'updated_at' => '2015-10-26 22:40:45',
            ),
            472 =>
            array (
                'id' => 1974,
                'question_id' => 494,
                'answer' => 'the rights of parties in possession.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:41:05',
                'updated_at' => '2015-10-26 22:41:05',
            ),
            473 =>
            array (
                'id' => 1975,
                'question_id' => 495,
                'answer' => 'Guarantees a clear title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:45:16',
                'updated_at' => '2015-10-26 22:45:16',
            ),
            474 =>
            array (
                'id' => 1976,
                'question_id' => 495,
                'answer' => 'Insures the title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:45:26',
                'updated_at' => '2015-10-26 22:45:26',
            ),
            475 =>
            array (
                'id' => 1977,
                'question_id' => 495,
                'answer' => 'Gives the abstracter\'s opinion of the title',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-26 22:45:51',
                'updated_at' => '2015-10-26 22:45:51',
            ),
            476 =>
            array (
                'id' => 1978,
                'question_id' => 495,
                'answer' => 'Offers a condensed history of all recorded documents',
                'correct' => 1,
            'definition' => 'An abstract is a document that summarizes (digests) the various recorded instruments found in the chain of title. It neither insures nor guarantees the title, although the abstractor would be liable for negligence in conducting the search if something such as a recorded second mortgage were overlooked.',
                'created_at' => '2015-10-26 22:47:25',
                'updated_at' => '2015-10-26 22:47:25',
            ),
            477 =>
            array (
                'id' => 1979,
                'question_id' => 496,
                'answer' => 'chain of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:18:22',
                'updated_at' => '2015-10-29 20:18:22',
            ),
            478 =>
            array (
                'id' => 1980,
                'question_id' => 496,
                'answer' => 'title search.',
                'correct' => 1,
                'definition' => 'In a title search, one runs through the chain of title to discover and clouds on title.',
                'created_at' => '2015-10-29 20:18:54',
                'updated_at' => '2015-10-29 20:18:54',
            ),
            479 =>
            array (
                'id' => 1981,
                'question_id' => 496,
                'answer' => 'cloud on title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:19:12',
                'updated_at' => '2015-10-29 20:19:12',
            ),
            480 =>
            array (
                'id' => 1982,
                'question_id' => 496,
                'answer' => 'recordation of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:19:23',
                'updated_at' => '2015-10-29 20:19:23',
            ),
            481 =>
            array (
                'id' => 1983,
                'question_id' => 497,
                'answer' => 'matters of record.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:20:14',
                'updated_at' => '2015-10-29 20:20:14',
            ),
            482 =>
            array (
                'id' => 1984,
                'question_id' => 497,
                'answer' => 'forgery.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:20:23',
                'updated_at' => '2015-10-29 20:20:23',
            ),
            483 =>
            array (
                'id' => 1985,
                'question_id' => 497,
                'answer' => 'mining claims.',
                'correct' => 1,
                'definition' => 'Mining and water claims are more likely to be excluded from the standard title insurance policy than any of the other choices.',
                'created_at' => '2015-10-29 20:22:06',
                'updated_at' => '2015-10-29 20:22:06',
            ),
            484 =>
            array (
                'id' => 1986,
                'question_id' => 497,
                'answer' => 'contractual capacity.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-29 20:22:24',
                'updated_at' => '2015-10-29 20:22:24',
            ),
            485 =>
            array (
                'id' => 1987,
                'question_id' => 498,
                'answer' => 'a designated agent agreed to by the parties holds the necessary documents until the terms are met.',
                'correct' => 1,
                'definition' => 'Escrows acts as the stakeholder, an intermediary between buyer and seller to ensure the parties perform their respective obligations before title and money pass.',
                'created_at' => '2015-10-30 23:14:44',
                'updated_at' => '2015-10-30 23:14:44',
            ),
            486 =>
            array (
                'id' => 1988,
                'question_id' => 498,
                'answer' => 'they are completed in secrecy.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:15:04',
                'updated_at' => '2015-10-30 23:15:04',
            ),
            487 =>
            array (
                'id' => 1989,
                'question_id' => 498,
                'answer' => 'the broker holds the papers until the registration of title is competed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:15:26',
                'updated_at' => '2015-10-30 23:15:26',
            ),
            488 =>
            array (
                'id' => 1990,
                'question_id' => 498,
                'answer' => 'the broker is no longer involved.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:15:42',
                'updated_at' => '2015-10-30 23:15:42',
            ),
            489 =>
            array (
                'id' => 1991,
                'question_id' => 499,
                'answer' => 'A new deposit receipt must be written.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:17:06',
                'updated_at' => '2015-10-30 23:17:06',
            ),
            490 =>
            array (
                'id' => 1992,
                'question_id' => 499,
                'answer' => 'Escrow instructions take precedence.',
                'correct' => 1,
                'definition' => 'Because the conflicting matter in the mutually agreed-on subsequent escrow instruction is a modification of the original contract, the escrow agreement usually takes precedence. In a counteroffer, it is the offer that is modified.',
                'created_at' => '2015-10-30 23:18:30',
                'updated_at' => '2015-10-30 23:18:30',
            ),
            491 =>
            array (
                'id' => 1993,
                'question_id' => 499,
                'answer' => 'The deposit receipt takes precedence.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:18:51',
                'updated_at' => '2015-10-30 23:18:51',
            ),
            492 =>
            array (
                'id' => 1994,
                'question_id' => 499,
                'answer' => 'Everything is void; the parties must start over.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:19:10',
                'updated_at' => '2015-10-30 23:19:10',
            ),
            493 =>
            array (
                'id' => 1995,
                'question_id' => 500,
                'answer' => 'a brief digest of the title to a particular property.',
                'correct' => 1,
                'definition' => 'An abstract of title summarizes not only deeds but also all recorded documents affecting the title, such as leases, options, and mortgages.',
                'created_at' => '2015-10-30 23:20:50',
                'updated_at' => '2015-10-30 23:20:50',
            ),
            494 =>
            array (
                'id' => 1996,
                'question_id' => 500,
                'answer' => 'a summary of each deed in a title search.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:21:10',
                'updated_at' => '2015-10-30 23:21:10',
            ),
            495 =>
            array (
                'id' => 1997,
                'question_id' => 500,
                'answer' => 'an appraisal of the lands and the improvements.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:21:25',
                'updated_at' => '2015-10-30 23:21:25',
            ),
            496 =>
            array (
                'id' => 1998,
                'question_id' => 500,
                'answer' => 'a summary of all improvements and encroachments on the property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:22:06',
                'updated_at' => '2015-10-30 23:22:06',
            ),
            497 =>
            array (
                'id' => 1999,
                'question_id' => 501,
                'answer' => 'if only the buyer gives written consent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:24:17',
                'updated_at' => '2015-10-30 23:24:17',
            ),
            498 =>
            array (
                'id' => 2000,
                'question_id' => 501,
                'answer' => 'if only the seller gives written consent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:24:36',
                'updated_at' => '2015-10-30 23:24:36',
            ),
            499 =>
            array (
                'id' => 2001,
                'question_id' => 501,
                'answer' => 'without the need for consent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:24:51',
                'updated_at' => '2015-10-30 23:24:51',
            ),
        ));
        \DB::table('answers')->insert(array (
            0 =>
            array (
                'id' => 2002,
                'question_id' => 501,
                'answer' => 'only when both buyer and seller give their written consent.',
                'correct' => 1,
                'definition' => 'Both parties must consent before the broker can draw from escrow against earned commission. Otherwise, there could be a problem in a case where the buyer is entitled to the return of his or her deposit. In some states, advance fees are regulated.',
                'created_at' => '2015-10-30 23:26:24',
                'updated_at' => '2015-10-30 23:26:24',
            ),
            1 =>
            array (
                'id' => 2003,
                'question_id' => 502,
                'answer' => 'Dollar coverage under a mortgagee\'s policy of title insurance remains constant.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:27:47',
                'updated_at' => '2015-10-30 23:27:47',
            ),
            2 =>
            array (
                'id' => 2004,
                'question_id' => 502,
                'answer' => 'Dollar coverage under an owner\'s policy of title insurance declines as the loan declines.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:28:09',
                'updated_at' => '2015-10-30 23:28:09',
            ),
            3 =>
            array (
                'id' => 2005,
                'question_id' => 502,
                'answer' => 'The buyer pays annually for coverage as long as the policy is in effect.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-10-30 23:28:31',
                'updated_at' => '2015-10-30 23:28:31',
            ),
            4 =>
            array (
                'id' => 2006,
                'question_id' => 502,
                'answer' => 'The insurance coverage on a mortgagee\'s policy is based on the declining balance of the loan.',
                'correct' => 1,
            'definition' => 'Coverage is steady for an owner, but it declines for the lender as the loan decreases (like a term life insurance policy). There is a one-time payment.',
                'created_at' => '2015-10-30 23:29:33',
                'updated_at' => '2015-10-30 23:29:33',
            ),
            5 =>
            array (
                'id' => 2007,
                'question_id' => 503,
                'answer' => 'a claim of marketable title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:46:20',
                'updated_at' => '2015-11-14 10:46:20',
            ),
            6 =>
            array (
                'id' => 2008,
                'question_id' => 503,
                'answer' => 'the services of a real estate licensee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:46:34',
                'updated_at' => '2015-11-14 10:46:34',
            ),
            7 =>
            array (
                'id' => 2009,
                'question_id' => 503,
                'answer' => 'a valid and enforceable written contract for the sale of the land.',
                'correct' => 1,
                'definition' => 'Escrow, which is a disinterested stakeholder, cannot carry out the terms of an unenforceable agreement.',
                'created_at' => '2015-11-14 10:47:21',
                'updated_at' => '2015-11-14 10:47:21',
            ),
            8 =>
            array (
                'id' => 2010,
                'question_id' => 503,
                'answer' => 'that the escrow holder have an interest in the subject matter.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:47:44',
                'updated_at' => '2015-11-14 10:47:44',
            ),
            9 =>
            array (
                'id' => 2011,
                'question_id' => 504,
                'answer' => 'determine that outstanding and unpaid liens will be satisfied.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:48:30',
                'updated_at' => '2015-11-14 10:48:30',
            ),
            10 =>
            array (
                'id' => 2012,
                'question_id' => 504,
                'answer' => 'see that the purchase price is paid and all checks have cleared the bank.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:48:50',
                'updated_at' => '2015-11-14 10:48:50',
            ),
            11 =>
            array (
                'id' => 2013,
                'question_id' => 504,
                'answer' => 'offer properties for sale to prospective buyers.',
                'correct' => 1,
                'definition' => 'Escrow often uses the funds generated by the buyer to pay off unpaid taxes and mortgages so that the buyer will get the free and clear title promised by the seller in the sales contract.',
                'created_at' => '2015-11-14 10:49:43',
                'updated_at' => '2015-11-14 10:49:43',
            ),
            12 =>
            array (
                'id' => 2014,
                'question_id' => 504,
                'answer' => 'disburse funds from a sale to the appropriate people.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:50:02',
                'updated_at' => '2015-11-14 10:50:02',
            ),
            13 =>
            array (
                'id' => 2015,
                'question_id' => 505,
                'answer' => 'a land contract.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:51:02',
                'updated_at' => '2015-11-14 10:51:02',
            ),
            14 =>
            array (
                'id' => 2016,
                'question_id' => 505,
                'answer' => 'a quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:51:14',
                'updated_at' => '2015-11-14 10:51:14',
            ),
            15 =>
            array (
                'id' => 2017,
                'question_id' => 505,
                'answer' => 'an assignment of a mortgage.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:51:29',
                'updated_at' => '2015-11-14 10:51:29',
            ),
            16 =>
            array (
                'id' => 2018,
                'question_id' => 505,
                'answer' => 'a promissory note secured by a mortgage.',
                'correct' => 1,
                'definition' => 'A not does not involve an interest in real property. Also, most lenders do not want the details of loans to be made public.',
                'created_at' => '2015-11-14 10:52:19',
                'updated_at' => '2015-11-14 10:52:19',
            ),
            17 =>
            array (
                'id' => 2019,
                'question_id' => 506,
                'answer' => 'between parties to the deed.',
                'correct' => 1,
                'definition' => 'The validity of the deed between the parties is not affected by failure to record. Most states rule that a good-faith purchaser for value who first records, without notice of the earlier unrecorded deed, will have title superior to that of a prior grantee under an unrecorded deed.',
                'created_at' => '2015-11-14 10:55:25',
                'updated_at' => '2015-11-14 10:55:25',
            ),
            18 =>
            array (
                'id' => 2020,
                'question_id' => 506,
                'answer' => 'on a later bona fide purchaser for value who first records the deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:55:48',
                'updated_at' => '2015-11-14 10:55:48',
            ),
            19 =>
            array (
                'id' => 2021,
                'question_id' => 506,
                'answer' => 'even if not delivered.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:55:59',
                'updated_at' => '2015-11-14 10:55:59',
            ),
            20 =>
            array (
                'id' => 2022,
                'question_id' => 506,
                'answer' => 'when signed by the grantee.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:56:20',
                'updated_at' => '2015-11-14 10:56:20',
            ),
            21 =>
            array (
                'id' => 2023,
                'question_id' => 507,
                'answer' => 'entering it in the public record.',
                'correct' => 1,
                'definition' => 'The law presumes that people have notice of matters published in the public record even though a person may not have actual notice.',
                'created_at' => '2015-11-14 10:57:19',
                'updated_at' => '2015-11-14 10:57:19',
            ),
            22 =>
            array (
                'id' => 2024,
                'question_id' => 507,
                'answer' => 'acting openly in accordance with the fact.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:57:37',
                'updated_at' => '2015-11-14 10:57:37',
            ),
            23 =>
            array (
                'id' => 2025,
                'question_id' => 507,
                'answer' => 'communicating the fact directly to each interested party.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:57:53',
                'updated_at' => '2015-11-14 10:57:53',
            ),
            24 =>
            array (
                'id' => 2026,
                'question_id' => 507,
                'answer' => 'testifying to the existence of the fact under oath in open court.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:58:14',
                'updated_at' => '2015-11-14 10:58:14',
            ),
            25 =>
            array (
                'id' => 2027,
                'question_id' => 508,
                'answer' => 'a quitclaim deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:59:42',
                'updated_at' => '2015-11-14 10:59:42',
            ),
            26 =>
            array (
                'id' => 2028,
                'question_id' => 508,
                'answer' => 'an abstract of title.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 10:59:55',
                'updated_at' => '2015-11-14 10:59:55',
            ),
            27 =>
            array (
                'id' => 2029,
                'question_id' => 508,
                'answer' => 'a bargain and sale of deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:00:06',
                'updated_at' => '2015-11-14 11:00:06',
            ),
            28 =>
            array (
                'id' => 2030,
                'question_id' => 508,
                'answer' => 'an extended coverage title insurance policy.',
                'correct' => 1,
                'definition' => 'In this situation, the buyer should obtain an extended title insurance policy to ocver against matters that would be revealed by an inspection, such as encroachments, adverse possession, and mechanics\' liens.',
                'created_at' => '2015-11-14 11:01:11',
                'updated_at' => '2015-11-14 11:01:11',
            ),
            29 =>
            array (
                'id' => 2031,
                'question_id' => 509,
                'answer' => 'Semiannually during ownership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:02:09',
                'updated_at' => '2015-11-14 11:02:09',
            ),
            30 =>
            array (
                'id' => 2032,
                'question_id' => 509,
                'answer' => 'Bimonthly during ownership',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:02:20',
                'updated_at' => '2015-11-14 11:02:31',
            ),
            31 =>
            array (
                'id' => 2033,
                'question_id' => 509,
                'answer' => 'Only at the time of issuance',
                'correct' => 1,
                'definition' => 'The premium is paid once at the beginning of the coverage and covers defects occurring up to the date of the policy.',
                'created_at' => '2015-11-14 11:03:18',
                'updated_at' => '2015-11-14 11:03:18',
            ),
            32 =>
            array (
                'id' => 2034,
                'question_id' => 509,
                'answer' => 'At the start and end of the policy term',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:03:39',
                'updated_at' => '2015-11-14 11:03:39',
            ),
            33 =>
            array (
                'id' => 2035,
                'question_id' => 510,
                'answer' => 'disclosures of closing information.',
                'correct' => 1,
                'definition' => 'RESPA is a federal law requiring disclosures of certain closing data, such as estimated closing costs, to consumers.',
                'created_at' => '2015-11-14 11:05:12',
                'updated_at' => '2015-11-14 11:05:12',
            ),
            34 =>
            array (
                'id' => 2036,
                'question_id' => 510,
                'answer' => 'procedures for recording titles to real estate.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:05:52',
                'updated_at' => '2015-11-14 11:05:52',
            ),
            35 =>
            array (
                'id' => 2037,
                'question_id' => 510,
                'answer' => 'ceilings on interest rates charged.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:06:05',
                'updated_at' => '2015-11-14 11:06:05',
            ),
            36 =>
            array (
                'id' => 2038,
                'question_id' => 510,
                'answer' => 'those who are qualified to prepare a settlement statement.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 11:06:21',
                'updated_at' => '2015-11-14 11:06:21',
            ),
            37 =>
            array (
                'id' => 2039,
                'question_id' => 511,
                'answer' => 'Buyers may not use their attorneys at a closing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:05:59',
                'updated_at' => '2015-11-14 12:05:59',
            ),
            38 =>
            array (
                'id' => 2040,
                'question_id' => 511,
                'answer' => 'Lenders can require the use of a designated closing agent.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:06:17',
                'updated_at' => '2015-11-14 12:06:17',
            ),
            39 =>
            array (
                'id' => 2041,
                'question_id' => 511,
                'answer' => 'Lenders cannot charge points on a loan.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:06:52',
                'updated_at' => '2015-11-14 12:06:52',
            ),
            40 =>
            array (
                'id' => 2042,
                'question_id' => 511,
                'answer' => 'Borrowers receive an explanation of settlement charges.',
                'correct' => 1,
                'definition' => 'The buyer is free to use an attorney, and the lender can use any settlement agent; however, RESPA prohibits the lender from dictating the use of one particular agent.',
                'created_at' => '2015-11-14 12:08:00',
                'updated_at' => '2015-11-14 12:08:00',
            ),
            41 =>
            array (
                'id' => 2043,
                'question_id' => 512,
                'answer' => 'The security deposit is a credit to the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:09:29',
                'updated_at' => '2015-11-14 12:09:29',
            ),
            42 =>
            array (
                'id' => 2044,
                'question_id' => 512,
                'answer' => 'the prepaid rent is a credit to the buyer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:09:48',
                'updated_at' => '2015-11-14 12:09:48',
            ),
            43 =>
            array (
                'id' => 2045,
                'question_id' => 512,
                'answer' => 'The security deposit is a debit to the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:10:02',
                'updated_at' => '2015-11-14 12:10:02',
            ),
            44 =>
            array (
                'id' => 2046,
                'question_id' => 512,
                'answer' => 'The prepaid rent is a credit to the seller.',
                'correct' => 1,
                'definition' => 'Prepaid rent is a debit to the seller and a credit to the buyer, because the seller has already received this income for the unused period. The seller who has this money must return it to the buyer, who will eventually return it to the tenant, provided there are no damages at the time of lease termination.',
                'created_at' => '2015-11-14 12:11:13',
                'updated_at' => '2015-11-14 12:11:13',
            ),
            45 =>
            array (
                'id' => 2047,
                'question_id' => 513,
                'answer' => 'Quitclaim deed',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:12:29',
                'updated_at' => '2015-11-14 12:12:29',
            ),
            46 =>
            array (
                'id' => 2048,
                'question_id' => 513,
                'answer' => 'Satisfaction of mortgage',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:12:44',
                'updated_at' => '2015-11-14 12:12:44',
            ),
            47 =>
            array (
                'id' => 2049,
                'question_id' => 513,
                'answer' => 'Power of attorney',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:12:54',
                'updated_at' => '2015-11-14 12:12:54',
            ),
            48 =>
            array (
                'id' => 2050,
                'question_id' => 513,
                'answer' => 'Offer and acceptance',
                'correct' => 1,
            'definition' => 'Most contracts of sale are not recorded, because there is a relatively short time between signing and closing. If an attorney-in-fact is to sign a document that will be recorded, then the power of attorney must first be recorded (under the "equal dignities rule").',
                'created_at' => '2015-11-14 12:14:06',
                'updated_at' => '2015-11-14 12:14:06',
            ),
            49 =>
            array (
                'id' => 2051,
                'question_id' => 514,
                'answer' => 'Julio owns the property based on his having the first deed.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:15:37',
                'updated_at' => '2015-11-14 12:15:37',
            ),
            50 =>
            array (
                'id' => 2052,
                'question_id' => 514,
                'answer' => 'Augusto is the owner if he first records without notice of Julio\'s rights.',
                'correct' => 1,
                'definition' => 'The recording laws will protect Augusto if he is a bona fide purchaser for value who first records.',
                'created_at' => '2015-11-14 12:16:42',
                'updated_at' => '2015-11-14 12:16:42',
            ),
            51 =>
            array (
                'id' => 2053,
                'question_id' => 514,
                'answer' => 'Augusto and Julio are now tenants in common.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:16:58',
                'updated_at' => '2015-11-14 12:16:58',
            ),
            52 =>
            array (
                'id' => 2054,
                'question_id' => 514,
                'answer' => 'Caitlin remains the owner, because both deeds are void.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2015-11-14 12:17:13',
                'updated_at' => '2015-11-14 12:17:13',
            ),
            53 =>
            array (
                'id' => 2055,
                'question_id' => 516,
                'answer' => 'the listing broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 15:31:27',
                'updated_at' => '2017-04-23 15:31:27',
            ),
            54 =>
            array (
                'id' => 2056,
                'question_id' => 516,
                'answer' => 'her employing broker.',
                'correct' => 1,
                'definition' => 'Salespeople, as subagents, are always directly responsible to the broker who holds their licenses, whether their broker is the listing or the selling broker.',
                'created_at' => '2017-04-23 15:32:52',
                'updated_at' => '2017-04-23 15:32:52',
            ),
            55 =>
            array (
                'id' => 2057,
                'question_id' => 516,
                'answer' => 'the multiple listing service.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 15:33:14',
                'updated_at' => '2017-04-23 15:33:14',
            ),
            56 =>
            array (
                'id' => 2058,
                'question_id' => 516,
                'answer' => 'the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 15:33:26',
                'updated_at' => '2017-04-23 15:33:26',
            ),
            57 =>
            array (
                'id' => 2059,
                'question_id' => 517,
                'answer' => '$500',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:10:15',
                'updated_at' => '2017-04-23 23:10:15',
            ),
            58 =>
            array (
                'id' => 2060,
                'question_id' => 517,
                'answer' => '$1,250',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:10:34',
                'updated_at' => '2017-04-23 23:10:34',
            ),
            59 =>
            array (
                'id' => 2061,
                'question_id' => 517,
                'answer' => 'Full commission',
                'correct' => 1,
                'definition' => 'Because the broker prduced a ready, willing, and able buyer, the commission established in the listing agreement has been earned.',
                'created_at' => '2017-04-23 23:11:26',
                'updated_at' => '2017-04-23 23:11:26',
            ),
            60 =>
            array (
                'id' => 2062,
                'question_id' => 517,
                'answer' => 'Nothing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:12:07',
                'updated_at' => '2017-04-23 23:12:07',
            ),
            61 =>
            array (
                'id' => 2063,
                'question_id' => 518,
                'answer' => 'a net listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:13:58',
                'updated_at' => '2017-04-23 23:13:58',
            ),
            62 =>
            array (
                'id' => 2064,
                'question_id' => 518,
                'answer' => 'an open listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:14:13',
                'updated_at' => '2017-04-23 23:14:13',
            ),
            63 =>
            array (
                'id' => 2065,
                'question_id' => 518,
                'answer' => 'an exclusive agency listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:14:30',
                'updated_at' => '2017-04-23 23:14:30',
            ),
            64 =>
            array (
                'id' => 2066,
                'question_id' => 518,
                'answer' => 'an exclusive right-to-sell listing.',
                'correct' => 1,
                'definition' => '"The commission is owed if I produce the sale for you or by anyone else." Under an exclusive agency listing, no commission is owed if the seller finds the buyer. Under an open listing, the broker must be the procuring cause.',
                'created_at' => '2017-04-23 23:16:29',
                'updated_at' => '2017-04-23 23:16:29',
            ),
            65 =>
            array (
                'id' => 2067,
                'question_id' => 519,
                'answer' => 'the destruction of the listed property.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:19:06',
                'updated_at' => '2017-04-23 23:19:06',
            ),
            66 =>
            array (
                'id' => 2068,
                'question_id' => 519,
                'answer' => 'the death of the listing broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:19:21',
                'updated_at' => '2017-04-23 23:19:21',
            ),
            67 =>
            array (
                'id' => 2069,
                'question_id' => 519,
                'answer' => 'the bankruptcy of the listing broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:19:37',
                'updated_at' => '2017-04-23 23:19:37',
            ),
            68 =>
            array (
                'id' => 2070,
                'question_id' => 519,
                'answer' => 'a sudden increase in market value.',
                'correct' => 1,
                'definition' => 'While the sudden increase won\'t terminate the listing, a prudent broker should discuss with the owner the benefits of increasing the listing price and extending the term of the listing.',
                'created_at' => '2017-04-23 23:21:05',
                'updated_at' => '2017-04-23 23:21:05',
            ),
            69 =>
            array (
                'id' => 2071,
                'question_id' => 520,
                'answer' => 'the listing should be prepared in writing.',
                'correct' => 1,
                'definition' => 'It is good business practice to get the listing in writing even in those states where this is not required under either the statue of frauds or the licensing law. ',
                'created_at' => '2017-04-23 23:24:53',
                'updated_at' => '2017-04-23 23:24:53',
            ),
            70 =>
            array (
                'id' => 2072,
                'question_id' => 520,
                'answer' => 'any buyer must be furnished with a copy of the listing.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:25:22',
                'updated_at' => '2017-04-23 23:25:22',
            ),
            71 =>
            array (
                'id' => 2073,
                'question_id' => 520,
                'answer' => 'the seller may lawfully cancel it any time the seller decides the broker is not doing a good job.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:25:48',
                'updated_at' => '2017-04-23 23:25:48',
            ),
            72 =>
            array (
                'id' => 2074,
                'question_id' => 520,
                'answer' => 'there is no fiduciary relationship between a broker and the seller.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:26:14',
                'updated_at' => '2017-04-23 23:26:14',
            ),
            73 =>
            array (
                'id' => 2075,
                'question_id' => 521,
                'answer' => 'refuse to submit the $62,000 offer.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:28:59',
                'updated_at' => '2017-04-23 23:28:59',
            ),
            74 =>
            array (
                'id' => 2076,
                'question_id' => 521,
                'answer' => 'suggest a compromise of $63,500.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:29:27',
                'updated_at' => '2017-04-23 23:29:27',
            ),
            75 =>
            array (
                'id' => 2077,
                'question_id' => 521,
                'answer' => 'persuade the buyer to make a $65,000 offer.',
                'correct' => 1,
            'definition' => 'The broker has a fiduciary duty to the principal (seller) to obtain the best possible price. Although the broker is ethically bound to treat all parties fairly, this does not mean the broker must make sure the buyer gets outside advice or representation.',
                'created_at' => '2017-04-23 23:31:01',
                'updated_at' => '2017-04-23 23:31:01',
            ),
            76 =>
            array (
                'id' => 2078,
                'question_id' => 521,
                'answer' => 'persuade the buyer to go to another broker.',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-23 23:31:25',
                'updated_at' => '2017-04-23 23:31:25',
            ),
            77 =>
            array (
                'id' => 2079,
                'question_id' => 522,
                'answer' => 'Multiple listing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-28 21:05:45',
                'updated_at' => '2017-04-28 21:05:45',
            ),
            78 =>
            array (
                'id' => 2080,
                'question_id' => 522,
                'answer' => 'Open listing',
                'correct' => 1,
                'definition' => 'Only the agent under an open listing who is the "procuring cause" will be entitled to the commission. Under a multiple listing, there is only one listing contract and only one agent; the cooperating broker would be a subagent working with the listing broker.',
                'created_at' => '2017-04-28 21:08:48',
                'updated_at' => '2017-04-28 21:08:48',
            ),
            79 =>
            array (
                'id' => 2081,
                'question_id' => 522,
                'answer' => 'Exclusive-agency listing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-28 21:09:18',
                'updated_at' => '2017-04-28 21:09:18',
            ),
            80 =>
            array (
                'id' => 2082,
                'question_id' => 522,
                'answer' => 'Exclusive-right-to-sell listing',
                'correct' => 0,
                'definition' => '',
                'created_at' => '2017-04-28 21:09:44',
                'updated_at' => '2017-04-28 21:09:44',
            ),
        ));
    }
}
