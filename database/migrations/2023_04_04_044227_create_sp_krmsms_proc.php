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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_krmsms`(

	IN `noregx` VARCHAR(20),

	IN `sms` VARCHAR(640),

	IN `userx` VARCHAR(20)

)
BEGIN DECLARE hpsis,hpwali,hpwlkelas,hpbk,tpoinx,sekolah,senderid VARCHAR(50); DECLARE smsx VARCHAR(640);

SET senderid =(SELECT idsekolah FROM tblsekolah);

SELECT hpsiswa,hportu, IFNULL(c.telp,\"\") AS hpwalikelas,ifnull(d.telp,\"\") as nohpbk,alias INTO hpsis,hpwali,hpwlkelas,hpbk,sekolah



FROM tblsiswa a



LEFT JOIN tblkelas b ON a.nmkelas=b.nmkelas



LEFT JOIN tblpegawai c ON b.idwali=c.kdguru LEFT JOIN tblpegawai d ON b.idbk=d.kdguru,tblsekolah



WHERE noreg=noregx ;



SELECT CONCAT('Total Poin : ', SUM(poinp-poinr)) AS tpoint INTO tpoinx



FROM tbltransaksi



WHERE noreg=noregx; 



SET smsx= CONCAT('Diberitahukan bahwa: ',sms,',',tpoinx,', ',sekolah,'.#ini adalah pesan yang dikirim oleh sistem, mohon tidak dibalas'); 



IF LENGTH(hpsis) > 10 THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpsis, smsx,senderid,userx); 



END IF; 



IF LENGTH(hpwali) > 10 THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpwali, smsx,senderid,userx); 



END IF; 



IF LENGTH(hpwlkelas) > 10 THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpwlkelas,smsx,senderid,userx); 



END IF; 



IF LENGTH(hpbk) > 10 THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpbk,smsx,senderid,userx); 



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
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_krmsms");
    }
};
