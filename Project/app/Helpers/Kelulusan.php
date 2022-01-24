<?php 
if (! function_exists('kelulusan')){

    function kelulusan($selesai_magang){
        $selesai = new DateTime($selesai_magang);
        $today = new DateTime("today"); 
        if ($today > $selesai) { 
            return("LULUS");}
        $y = $selesai->diff($today)->y;
        $m = $selesai->diff($today)->m;
        $d = $selesai->diff($today)->d;
        return $y."tahun ".$m." bulan ".$d." hari";

    }
}
?>