<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class MenuItemsTableSeeder extends Seeder
{
    public function run()
    {
        Eloquent::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('ussd_menu_items')->truncate();

        DB::table('ussd_menu_items')->delete();

        DB::table('ussd_menu_items')->insert(array(
            array(
                'menu_id' => 1,
                'description' => 'Send to M-Shwari',
                'next_menu_id' => 3,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Withdraw from M-Shwari',
                'next_menu_id' => 1,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 1,
                'description' => 'Loan',
                'next_menu_id' => 2,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 2,
                'description' => 'Request Loan',
                'next_menu_id' => 2,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 2,
                'description' => 'Pay Loan',
                'next_menu_id' => 2,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 2,
                'description' => 'Check Loan Limit',
                'next_menu_id' => 2,
                'step' => 0,
                'confirmation_phrase' => '',
            ),
            array(
                'menu_id' => 3,
                'description' => 'Enter Amount',
                'next_menu_id' => 0,
                'step' => 1,
                'confirmation_phrase' => 'Amount',
            ),
            array(
                'menu_id' => 3,
                'description' => 'Enter PIN',
                'next_menu_id' => 0,
                'step' => 2,
                'confirmation_phrase' => 'PIN',
            ),
//            array(
//                'menu_id' => 1,
//                'description' => 'Help',
//                'next_menu_id' => 7,
//                'step' => 0,
//                'confirmation_phrase' => '',
//            ),
//            array(
//                'menu_id' => 2,
//                'description' => 'Mini Statements',
//                'next_menu_id' => 7,
//                'step' => 0,
//                'confirmation_phrase' => '',
//            ),

        ));
    }
}
