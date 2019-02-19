<?php
    //Inisialisasi Kategori Teori 
    //_bs                    = Basic Management Server
    //_db                    = Pemrograman Database 
    //_web                   = Pemrograman Website
    //_mob                   = Pemrograman Mobile 
    //_dnb                   = Design & Bisnis Proses Program 
    //_knk                   = Karya dan Kewirausahaan 

    //Variable Basic Management Server ----------------------------------------------------------------------------------------|
    $pg_soal_bs             = 35;
    $essay_soal_bs          = 10;

    $nilai_pg_bs           = 1;
    $nilai_essay_bs        = 8;

    $totalsoal_teori_bs    = $pg_soal_bs + $essay_soal_bs;
    $value_bs              = $essay_soal_bs * $nilai_essay_bs + $pg_soal_bs * $nilai_pg_bs;
    $totalnilai_teori_bs   = 100 / $value_bs * $value_bs;

    $kompetensi_1_bs       = 10;
    $kompetensi_2_bs       = 25;
    $kompetensi_3_bs       = 10;
    $kompetensi_4_bs       = 10;
    $kompetensi_5_bs       = 10;
    $kompetensi_6_bs       = 10;
    $kompetensi_7_bs       = 35;
    $kompetensi_8_bs       = 10;
    $kompetensi_9_bs       = 25;
    $kompetensi_10_bs      = 30;
    $kompetensi_11_bs      = 50;
    $kompetensi_12_bs      = 35;
    $kompetensi_13_bs      = 50;
    $kompetensi_14_bs      = 25;
    $kompetensi_15_bs      = 25;
    $kompetensi_16_bs      = 35;
    $kompetensi_17_bs      = 50;
    $kompetensi_18_bs      = 45;
    $kompetensi_19_bs      = 50;
    $kompetensi_20_bs      = 35;
    $kompetensi_21_bs      = 10;
    $kompetensi_22_bs      = 50;
    $kompetensi_23_bs      = 25;
    $kompetensi_24_bs      = 40;
    $kompetensi_25_bs      = 50;
    $kompetensi_26_bs      = 20;
    $kompetensi_27_bs      = 20;
    $kompetensi_28_bs      = 20;
    $kompetensi_29_bs      = 20;
    $kompetensi_30_bs      = 20;
    $kompetensi_31_bs      = 25;

    $totalnilai_uji_bs     = 
                        (
                            $kompetensi_1_bs + $kompetensi_2_bs + $kompetensi_3_bs + $kompetensi_4_bs + $kompetensi_5_bs +
                            $kompetensi_6_bs + $kompetensi_7_bs + $kompetensi_8_bs + $kompetensi_9_bs + $kompetensi_10_bs +
                            $kompetensi_11_bs + $kompetensi_12_bs + $kompetensi_13_bs + $kompetensi_14_bs + $kompetensi_15_bs +
                            $kompetensi_16_bs + $kompetensi_17_bs + $kompetensi_18_bs + $kompetensi_19_bs + $kompetensi_20_bs +
                            $kompetensi_21_bs + $kompetensi_22_bs + $kompetensi_23_bs + $kompetensi_24_bs + $kompetensi_25_bs +
                            $kompetensi_26_bs + $kompetensi_27_bs + $kompetensi_28_bs + $kompetensi_29_bs + $kompetensi_30_bs +
                            $kompetensi_31_bs
                        );

    $nilaiakhir_bs         = 100 / $totalnilai_uji_bs * $totalnilai_uji_bs;

    //Variable Database Programming -------------------------------------------------------------------------------------------|
    $pg_soal_db             = 60;
    $essay_soal_db          = 5;

    $nilai_pg_db            = 1;
    $nilai_essay_db         = 8;

    $totalsoal_teori_db    = $pg_soal_db + $essay_soal_db;
    $value_db              = $essay_soal_db * $nilai_essay_db + $pg_soal_db * $nilai_pg_db;
    $totalnilai_teori_db   = 100 / $value_db * $value_db;

    $kompetensi_1_db       = 20;
    $kompetensi_2_db       = 50;
    $kompetensi_3_db       = 45;
    $kompetensi_4_db       = 25;
    $kompetensi_5_db       = 35;
    $kompetensi_6_db       = 40;
    $kompetensi_7_db       = 25;
    $kompetensi_8_db       = 50;
    $kompetensi_9_db       = 35;
    $kompetensi_10_db      = 50;
    $kompetensi_11_db      = 25;
    $kompetensi_12_db      = 35;
    $kompetensi_13_db      = 20;
    $kompetensi_14_db      = 20;
    $kompetensi_15_db      = 10;
    $kompetensi_16_db      = 20;
    $kompetensi_17_db      = 25;
    $kompetensi_18_db      = 30;
    $kompetensi_19_db      = 30;
    $kompetensi_20_db      = 20;
    $kompetensi_21_db      = 20;
    $kompetensi_22_db      = 20;
    $kompetensi_23_db      = 25;
    $kompetensi_24_db      = 40;
    $kompetensi_25_db      = 50;

    $totalnilai_uji_db     = 
                        (
                            $kompetensi_1_db + $kompetensi_2_db + $kompetensi_3_db + $kompetensi_4_db + $kompetensi_5_db +
                            $kompetensi_6_db + $kompetensi_7_db + $kompetensi_8_db + $kompetensi_9_db + $kompetensi_10_db +
                            $kompetensi_11_db + $kompetensi_12_db + $kompetensi_13_db + $kompetensi_14_db + $kompetensi_15_db +
                            $kompetensi_16_db + $kompetensi_17_db + $kompetensi_18_db + $kompetensi_19_db + $kompetensi_20_db +
                            $kompetensi_21_db + $kompetensi_22_db + $kompetensi_23_db + $kompetensi_24_db + $kompetensi_25_db
                        );

    $nilaiakhir_db         = 100 / $totalnilai_uji_db * $totalnilai_uji_db;

    //Variable Pemrograman Website --------------------------------------------------------------------------------------------|
    $pg_soal_web             = 31;
    $essay_soal_web          = 5;

    $nilai_pg_web            = 1;
    $nilai_essay_web         = 8;

    $totalsoal_teori_web    = $pg_soal_web + $essay_soal_web;
    $value_web              = $essay_soal_web * $nilai_essay_web + $pg_soal_web * $nilai_pg_web;
    $totalnilai_teori_web   = 100 / $value_web * $value_web;



    $totalnilai_uji_web     = 
                        (
                            $kompetensi_1_web + $kompetensi_2_web + $kompetensi_3_web + $kompetensi_4_web + $kompetensi_5_web +
                            $kompetensi_6_web + $kompetensi_7_web + $kompetensi_8_web + $kompetensi_9_web + $kompetensi_10_web +
                            $kompetensi_11_web + $kompetensi_12_web + $kompetensi_13_web + $kompetensi_14_web + $kompetensi_15_web +
                            $kompetensi_16_web + $kompetensi_17_web + $kompetensi_18_web + $kompetensi_19_web + $kompetensi_20_web +
                            $kompetensi_21_web + $kompetensi_22_web + $kompetensi_23_web + $kompetensi_24_web + $kompetensi_25_web
                        );

    $nilaiakhir_web          = 100 / $totalnilai_uji_web * $totalnilai_uji_web;

    //Variable Pemrograman Mobile Android -------------------------------------------------------------------------------------|
    $pg_soal_mob             = 0;
    $essay_soal_mob          = 0;

    $nilai_pg_mob            = 0;
    $nilai_essay_mob         = 0;

    $totalsoal_teori_mob     = $pg_soal_mob + $essay_soal_mob;
    $value_mob               = $essay_soal_mob * $nilai_essay_mob + $pg_soal_mob * $nilai_pg_mob;
    $totalnilai_teori_mob    = 100 / $value_mob * $value_mob;

    $kompetensi_1_mob        = 0;

    $totalnilai_uji_mob      = 
                        (
                            $kompetensi_1_mob + $kompetensi_2_mob + $kompetensi_3_mob + $kompetensi_4_mob + $kompetensi_5_mob +
                            $kompetensi_6_mob + $kompetensi_7_mob + $kompetensi_8_mob + $kompetensi_9_mob + $kompetensi_10_mob +
                            $kompetensi_11_mob + $kompetensi_12_mob + $kompetensi_13_mob + $kompetensi_14_mob + $kompetensi_15_mob +
                            $kompetensi_16_mob + $kompetensi_17_mob + $kompetensi_18_mob + $kompetensi_19_mob + $kompetensi_20_mob +
                            $kompetensi_21_mob + $kompetensi_22_mob + $kompetensi_23_mob + $kompetensi_24_mob + $kompetensi_25_mob
                        );

    $nilaiakhir_mob         = 100 / $totalnilai_uji_mob * $totalnilai_uji_mob;

    //Variable Design & Bisnis Proses Program ---------------------------------------------------------------------------------|
    $pg_soal_dnb             = 0;
    $essay_soal_dnb          = 0;

    $nilai_pg_dnb            = 0;
    $nilai_essay_dnb         = 0;

    $totalsoal_teori_dnb     = $pg_soal_dnb + $essay_soal_dnb;
    $value_dnb               = $essay_soal_dnb * $nilai_essay_dnb + $pg_soal_dnb * $nilai_pg_dnb;
    $totalnilai_teori_dnb    = 100 / $value_dnb * $value_dnb;

    $kompetensi_1_dnb        = 0;

    $totalnilai_uji_dnb      = 
                        (
                            $kompetensi_1_dnb + $kompetensi_2_dnb + $kompetensi_3_dnb + $kompetensi_4_dnb + $kompetensi_5_dnb +
                            $kompetensi_6_dnb + $kompetensi_7_dnb + $kompetensi_8_dnb + $kompetensi_9_dnb + $kompetensi_10_dnb +
                            $kompetensi_11_dnb + $kompetensi_12_dnb + $kompetensi_13_dnb + $kompetensi_14_dnb + $kompetensi_15_dnb +
                            $kompetensi_16_dnb + $kompetensi_17_dnb + $kompetensi_18_dnb + $kompetensi_19_dnb + $kompetensi_20_dnb +
                            $kompetensi_21_dnb + $kompetensi_22_dnb + $kompetensi_23_dnb + $kompetensi_24_dnb + $kompetensi_25_dnb
                        );

    $nilaiakhir_dnb          = 100 / $totalnilai_uji_dnb * $totalnilai_uji_dnb;

    //Variable Karya & Kewirausahaan ------------------------------------------------------------------------------------------|
    $pg_soal_knk             = 0;
    $essay_soal_knk          = 0;

    $nilai_pg_knk            = 0;
    $nilai_essay_knk         = 0;

    $totalsoal_teori_knk     = $pg_soal_knk + $essay_soal_knk;
    $value_knk               = $essay_soal_knk * $nilai_essay_knk + $pg_soal_knk * $nilai_pg_knk;
    $totalnilai_teori_knk    = 100 / $value_knk * $value_knk;

    $kompetensi_1_knk        = 0;

    $totalnilai_uji_knk      = 
                        (
                            $kompetensi_1_knk + $kompetensi_2_knk + $kompetensi_3_knk + $kompetensi_4_knk + $kompetensi_5_knk +
                            $kompetensi_6_knk + $kompetensi_7_knk + $kompetensi_8_knk + $kompetensi_9_knk + $kompetensi_10_knk +
                            $kompetensi_11_knk + $kompetensi_12_knk + $kompetensi_13_knk + $kompetensi_14_knk + $kompetensi_15_knk +
                            $kompetensi_16_knk + $kompetensi_17_knk + $kompetensi_18_knk+ $kompetensi_19_knk + $kompetensi_20_knk +
                            $kompetensi_21_knk + $kompetensi_22_knk + $kompetensi_23_knk + $kompetensi_24_knk + $kompetensi_25_knk
                        );

    $nilaiakhir_knk          = 100 / $totalnilai_uji_knk * $totalnilai_uji_knk;
?>