<?php
    $author = array (
        // Nama Auditor
        "Asep Septiadi"
    );
    $update = array (
        // Nama Auditor
        "Ahad, 22 April 2018"
    );
    $link = array (
        // Nama Auditor
        "https://facebook.com/septiyadii"
    );
    $arrlength = count($author);

    for ($dataawal = 0; $dataawal < $arrlength; $dataawal++) {

        ?>
        <?php
        for ($dataawal = 0; $dataawal < $arrlength; $dataawal++) {
            ?>
            <img src="https://localhost/data.smk/uas.io/semester.ii/assessment.io/img/user.png" style="height: 22px; widht: 22px; vertical-align: middle; margin-top: 5px;"></img> 
            <font style="font-size: 13px" title="Lihat profile lebih lengkapnya."><a style="text-decoration: none; vertical-align: middle;" target="_blank" href="<?php echo $link[$dataawal]; ?>"><b><?php echo " ".$author[$dataawal];?></b></a></font>
            <font style="font-size: 13px"> (<?php echo "".$update[$dataawal];?>)</font><br>
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