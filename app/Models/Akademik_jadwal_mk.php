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
            
            class Akademik_jadwal_mk extends Model
            {
                use HasFactory;
                protected $table = "akademik_jadwal_mk";
                protected $fillable = [
                    "nip_dosen",
"id_mk",
"jam_mulai",
"jam_selesai",
"tahun",
"status",

                ];
            }
            ?>