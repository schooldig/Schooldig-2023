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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_rekapabsen`()
BEGIN

DECLARE hpsis,hpwali,hpwlkelas,senderid VARCHAR(50); DECLARE smsx VARCHAR(640);

SELECT hpsiswa,hportu INTO hpsis,hpwali FROM tblsiswa a WHERE noreg=noregx ;



SET smsx=CONCAT(smsx,'.#ini adalah pesan yang dikirim oleh sistem, mohon tidak dibalas');

SET senderid =(SELECT idsekolah FROM tblsekolah);







IF LENGTH(hpsis) > 10 THEN

INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpsis, smsx,senderid,userx); 

END IF; 

IF LENGTH(hpwali) > 10 THEN

INSERT INTO waboot.outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpwali, smsx,senderid,userx); 

END IF; 

IF LENGTH(hpwlkelas) > 10 THEN

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
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_rekapabsen");
    }
};
