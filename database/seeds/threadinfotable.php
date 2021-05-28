<?php

use Illuminate\Database\Seeder;

class threadinfotable extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
      $now = \Carbon\Carbon::now();
      
      for($i=1; $i <= 100;$i++){
        $threadinfo = [
          'id'          => $i,
          'title'       => 'スレッドのタイトル'. $i,
          'contents'     => 'テストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテストテスト'.$i,
          'create_user' => 'test'.$i,
          'created_at'  => $now,
          'updated_at'  => $now
        ];
        DB::table('threadinfo')->insert($threadinfo);
      }
    }
}
