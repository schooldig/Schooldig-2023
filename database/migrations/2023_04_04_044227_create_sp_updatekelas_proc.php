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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_updatekelas`(

	IN `kelasX` VARCHAR(50)

)
BEGIN

DECLARE a,b INT; declare noregx,namakelas VARCHAR(50);

SET a = 0;

SET b = (SELECT count(noreg) AS jumlah FROM tblsiswa a WHERE a.kelas=kelasX);

while b > a DO

SELECT noreg,nmkelas INTO noregx,namakelas FROM tblsiswa a WHERE a.kelas=kelasX LIMIT a,1;

UPDATE tblabsensi SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tbltransaksi SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tblsurat SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tblsrtabsen SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tblsrtalpa SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tblsrtijin SET nmkelas=namakelas WHERE noreg=noregx;

UPDATE tblsrtsakit SET nmkelas=namakelas WHERE noreg=noregx;

SET a = a+1;

END while;

END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_updatekelas");
    }
};
