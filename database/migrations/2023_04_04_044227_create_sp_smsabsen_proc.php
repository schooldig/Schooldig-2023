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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_smsabsen`(

	IN `noregx` VARCHAR(20),

	IN `sms` VARCHAR(640),

	IN `userx` VARCHAR(20)

)
BEGIN 

DECLARE hpsis,hpwali,hpwlkelas,senderid VARCHAR(50); DECLARE smsx VARCHAR(640);

SELECT hpsiswa,hportu,c.telp  AS hpwali,d.telp AS hpbk, wagroup FROM tblsiswa a, tblkelas b, tblpegawai c,tblpegawai d WHERE b.idwali=c.kdguru and b.idbk=d.kdguru AND  a.nmkelas=b.nmkelas AND  noreg=noregx ;



SET smsx=CONCAT(sms,'.#ini adalah pesan yang dikirim oleh sistem, mohon tidak dibalas');

SET senderid =(SELECT idsekolah FROM tblsekolah);



IF LENGTH(hpsis) > 10 THEN

INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpsis, smsx,senderid,userx); 

END IF; 

IF LENGTH(hpwali) > 10 THEN

INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpwali, smsx,senderid,userx); 

END IF; 



END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_smsabsen");
    }
};
