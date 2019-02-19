<?php
    $penilaian = array (
        // Nama Auditor
        "Ulangan Tengah Semester (UTS)",
        "Ujian Akhir Semester (UAS)",
        "Ujian Harian (ULHAR)",
    );
    $tanggalujian = array (
        // Nama Auditor
        "Senin, 5-9 Maret 2018",
        "Senin, 23-27 April 2018",
        "Belum teridentifikasi"
    );
    $linkdatapenilaian = array (
        // Nama Auditor
        "https://192.168.2.8/data.smk/uas.io/semester.ii/assessment.io/assesment/uts",
        "https://192.168.2.8/data.smk/uas.io/semester.ii/assessment.io/assesment/uas",
        "https://192.168.2.8/data.smk/uas.io/semester.ii/assessment.io/assesment/ulhar"
    );
    $imgoption = array (
        // Nama Auditor
        "https://localhost/data.smk/uas.io/semester.ii/assessment.io/img/selesai_dilaksanakan.png",
        "https://localhost/data.smk/uas.io/semester.ii/assessment.io/img/progress.png",
        "https://localhost/data.smk/uas.io/semester.ii/assessment.io/img/test.png"
    );
    $imgtitle = array (
        // Nama Auditor
        "Ujian sudah dilaksanakan.",
        "Sedang dalam proses",
        "Belum teridentifikasi"
    );
    $arrlength = count($penilaian);

    for ($dataawal = 0; $dataawal < $arrlength; $dataawal++) {
        ?><?php
        for ($dataawal = 0; $dataawal < $arrlength; $dataawal++) {
            ?>
            <img title="<?php echo $imgtitle[$dataawal]; ?>" style="height: 22px; widht: 22px; vertical-align: middle; margin-top: 5px;" src="<?php echo $imgoption[$dataawal]; ?>"></img> 
            <font style="font-size: 13px; vertical-align: middle;" title="Klik link untuk melihat data penilaian lebih lengkapnya."><a style="text-decoration: none; vertical-align: middle;" target="_blank" href="<?php echo $linkdatapenilaian[$dataawal]; ?>"><b style="vertical-align: middle;"><?php echo " ".$penilaian[$dataawal];?></b></a></font>    
            <br><font style="font-size: 13px; vertical-align: middle; margin-left: 31px;">Waktu Pelaksanaan: (<?php echo "".$tanggalujian[$dataawal];?>)</font><br>
            <?php
        }
    }
?>

<script> 
var message = "This website is protected so you can not access right click copy & cut, so the data is protected, thanks! for more can contact the website admin. Message by Asep Septiadi";
    function clickIE4(){
        if (event.button == 2){
            alert(message);
            return false;
        }
    } 
    function clickNS4(e){
        if (document.layers || document.getElementById && !document.all) {
            if (e.which == 2 || e.which == 3){
                alert(message);
                return false;
            }
        }
    } 
    if (document.layers){
        document.captureEvents(Event.MOUSEDOWN);
        document.onmousedown = clickNS4;
    } else if (document.all && !document.getElementById){
        document.onmousedown = clickIE4;
    } 
    document.oncontextmenu = new Function("alert(message);return false")
</script>