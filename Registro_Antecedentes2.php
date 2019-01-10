<?php
        $link = mysqli_connect("localhost","root","","capasits")or die("<h2>No se encuentra el servidor</h2>");

        $AHere=$_POST['ant_heredofamiliares'];
        $Escolar=$_POST['escolaridad'];
        $Vivi=$_POST['vivienda'];

        $ViajesR=$_POST['viajes_rec'];      

        $Convive=$_POST['conv_animales'];       

        $Tab=$_POST['tabaquismo'];

        $Alco=$_POST['alcoholismo'];
        
        $Inmu=$_POST['inmunizacion'];
        $Ciru=$_POST['cirugias'];
        $Frac=$_POST['fracturas'];
        $Aler=$_POST['alergias'];
        $OMed=$_POST['otros_medicamentos'];
        
        if ($_POST['vivienda'] =! NULL) {
            $Viajes=$_POST['viajes'];
        }else{
            $Viajes="0";
        }

        if ($_POST['mascotas'] =! NULL) {
            $Mascotas=$_POST['mascotas'];
        }else{
            $Mascotas="0";
        }

        if ($_POST['tab_cantidad'] =! NULL) {
            $TabCant=$_POST['tab_cantidad'];
        }else{
            $TabCant="0";
        }

        if ($_POST['tab_frecuencia'] =! NULL) {
            $TabFrec=$_POST['tab_frecuencia'];
        }else{
            $TabFrec="0";
        }

        if ($_POST['tab_años'] =! NULL) {
            $TabAnio=$_POST['tab_años'];
        }else{
            $TabAnio="0";
        }

        if ($_POST['alc_cantidad'] =! NULL) {
            $AlcoCant=$_POST['alc_cantidad'];
        }else{
            $AlcoCant="0";
        }

        if ($_POST['alc_frecuencia'] =! NULL) {
            $AlcoFrec=$_POST['alc_frecuencia'];
        }else{
            $AlcoFrec="0";
        }

        if ($_POST['alc_años'] =! NULL) {
            $AlcoAnio=$_POST['alc_años'];
        }else{
            $AlcoAnio="0";
        }
        
        $query="INSERT INTO antecedentes2() VALUES()";
        $link->query($query);


        header("Location: Citas.html"); 

?> 