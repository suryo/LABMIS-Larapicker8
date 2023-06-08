<?php

            /**
             * author : Suryo Atmojo <suryoatm@gmail.com>
             * project : supresso Laravel
             * Start-date : 19-09-2022
             */
            /**
             “Barangsiapa yang memberi kemudharatan kepada seorang muslim, 
            maka Allah akan memberi kemudharatan kepadanya, 
            barangsiapa yang merepotkan (menyusahkan) seorang muslim 
            maka Allah akan menyusahkan dia.”
            */
            
            namespace App\Models;
            
            use Illuminate\Database\Eloquent\Factories\HasFactory;
            use Illuminate\Database\Eloquent\Model;
            
            class Akademik_praktikum_jurnal extends Model
            {
                use HasFactory;
                protected $table = "akademik_praktikum_jurnal";
                protected $fillable = [
                    "id_jadwal_praktikum",
"tanggal",
"keterangan",
"status",
"created_by",
"updated_by",

                ];
            }
            ?>