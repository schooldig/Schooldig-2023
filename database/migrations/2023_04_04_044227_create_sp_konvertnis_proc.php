<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_konvertnis`()
BEGIN























declare a,b,c,d varchar(20); declare i,j,k int;























drop temporary table if exists temsuratx ;























create temporary table temsuratx select a.noreg,b.noreg as noregsiswa from tblsurat a inner join tblsiswa b on a.noreg=b.nis;























select count(noreg) into i from temsuratx;























set j=0;















































while j<i do























select noreg,noregsiswa into a,b from temsuratx order by noregsiswa limit j,1;























update tblsurat set noreg=b where noreg=a;























set j=j+1;























end while;























END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_konvertnis");
    }
};
