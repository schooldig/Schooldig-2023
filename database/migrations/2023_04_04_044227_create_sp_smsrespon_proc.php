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
        DB::unprepared("CREATE DEFINER=`tatib`@`%` PROCEDURE `sp_smsrespon`(

	IN `nhari` INT

)
BEGIN DECLARE i,j INT; DECLARE hpwali,senderid VARCHAR(50); DECLARE smsx VARCHAR(640);

SET senderid =(SELECT idsekolah FROM tblsekolah);

SELECT count(d.telp) INTO i

FROM tblsurat a

INNER JOIN tblthajaran b ON a.thajaran=b.thajaran left JOIN tblkelas c ON a.nmkelas=c.nmkelas left JOIN tblpegawai d ON c.idwali=d.kdguru

WHERE walimurid=\"\" AND b.aktif=\"Y\" AND NOT dayname(now())=\"sunday\" AND datediff(DATE(now()),tglsurat) > nhari; SET j=0; WHILE j<i DO

SELECT concat(\"Mohon Surat tindakan siswa Tgl. \",date_format(tglsurat,\"%d/%m/%Y\"),\" atas nama \",nama,\" Kelas \",a.nmkelas,\" segera direspon/diupload.\",e.alias) AS sms,d.telp INTO smsx,hpwali

FROM tblsurat a

INNER JOIN tblthajaran b ON a.thajaran=b.thajaran left JOIN tblkelas c ON a.nmkelas=c.nmkelas left JOIN tblpegawai d ON c.idwali=d.kdguru,tblsekolah e

WHERE walimurid=\"\" AND b.aktif=\"Y\" AND NOT dayname(now())=\"sunday\" AND datediff(DATE(now()),tglsurat) > nhari

LIMIT j,1;



IF LENGTH(hpwali) > 10 THEN

INSERT INTO outbox (DestinationNumber,TextDecoded,SenderID,CreatorID) VALUES (hpwali, smsx,senderid,'sistem'); END IF; SET j=j+1; END WHILE; END");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_smsrespon");
    }
};
