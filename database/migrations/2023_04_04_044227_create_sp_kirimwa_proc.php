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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_kirimwa`(

	IN `levelwax` VARCHAR(50),

	IN `noregx` VARCHAR(14),

	IN `sms` VARCHAR(500),

	IN `userx` VARCHAR(10)

)
BEGIN 



DECLARE wasiswa,waortu,wawlkelas,wabk,wakelas,lsenderid,wasekolah,waguru VARCHAR(50);DECLARE lsiswa,lortu,lwlkelas,lbk,lgroupwa,lsekolah,lguru INT; DECLARE smsx VARCHAR(640);



if (levelwax='jurnalkelas') or (levelwax='ketidakhadiran')then



SELECT a.telp AS hpguru,b.wasekolah AS hpsekolah INTO waguru,wasekolah FROM tblpegawai a,tblsekolah b WHERE a.kdguru=noregx ;



ELSE 



SELECT hpsiswa,hportu,c.telp AS hpwali,d.telp AS hpbk, wagroup INTO wasiswa,waortu,wawlkelas,wabk,wakelas FROM tblsiswa a, tblkelas b, tblpegawai c,tblpegawai d WHERE b.idwali=c.kdguru and b.idbk=d.kdguru AND  a.nmkelas=b.nmkelas AND a.noreg=noregx ;



END if;

SELECT siswa,ortu,walikelas,bk,groupkelas,a.sekolah,guru,senderid INTO lsiswa,lortu,lwlkelas,lbk,lgroupwa,lsekolah,lguru,lsenderid FROM tbllevelwa a,tblsekolah b WHERE levelwa=LOWER(levelwax);



if (levelwax='ketidakhadiran') then

SET smsx=CONCAT(sms,'.');

ELSE 

SET smsx=CONCAT(sms,'.#ini adalah pesan yang dikirim oleh sistem, mohon tidak dibalas');

END if;



IF (LENGTH(wasiswa) > 10) AND (lsiswa=1) THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (wasiswa, smsx,lsenderid,userx); 



END IF; 







IF (LENGTH(waortu) > 10) AND (lortu=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (waortu, smsx,lsenderid,userx); 



END IF; 







IF (LENGTH(wawlkelas) > 10) AND (lwlkelas=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (wawlkelas, smsx,lsenderid,userx); 



END IF; 







IF (LENGTH(wabk) > 10) AND (lbk=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (wabk, smsx,lsenderid,userx); 



END IF;







IF (LENGTH(wakelas) > 18) AND (lgroupwa=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (wakelas, smsx,lsenderid,userx); 



END IF;



IF (LENGTH(waguru) > 10) AND (lguru=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (waguru, smsx,lsenderid,userx); 



END IF;



IF (LENGTH(wasekolah) > 10) AND (lsekolah=1)  THEN



INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (wasekolah, smsx,lsenderid,userx); 



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
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_kirimwa");
    }
};
