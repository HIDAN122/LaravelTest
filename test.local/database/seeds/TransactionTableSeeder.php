<?php

use Illuminate\Database\Seeder;

class TransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'=>'Транзакція #1',
                'sum'=>1244,
                 'transaction_id'=>3
            ],
            [
                'name'=>'Транзакція #2',
                'sum'=>15664,
                'transaction_id'=>7
            ]
        ];
        DB::table('transactions')->insert($data);
    }
}
