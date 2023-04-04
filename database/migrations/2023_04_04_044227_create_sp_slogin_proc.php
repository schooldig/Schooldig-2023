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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_slogin`(IN `userx` VARCHAR(15), IN `dbx` VARCHAR(50), IN `statx` VARCHAR(10))
BEGIN































declare j int;































select count(userx) into j from tblslogin;































if j > 300 then































truncate tblslogin;































end if;































insert into tblslogin SELECT now() as timex,HOST as host,userx,statx FROM `information_schema`.`PROCESSLIST` where DB=dbx  order by id desc limit 1;































END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_slogin");
    }
};
