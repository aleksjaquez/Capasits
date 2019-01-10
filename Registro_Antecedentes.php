       <?php
        $link = mysqli_connect("localhost","root","","capasits")or die("<h2>No se encuentra el servidor</h2>");

        $Factor=$_POST['factor'];
        $Sex=$_POST['inicio_sex'];
        $Pareja=$_POST['num_parejas'];
        $Antico=$_POST['antico'];
        
        $FechaD=$_POST['fecha_diagnostico'];
        $MetodoD=$_POST['metodo_diagnostico'];
        $FechaInf=$_POST['fecha_pro_inf'];
        $FechaMan=$_POST['fecha_ini_man'];

        
        if($Antico=="1"){

            $MAntico=$_POST['metodo_antico'];

            $query="INSERT INTO antecedentes(factor,inicio_sex,num_parejas,antico,metodo_antico,fecha_diagnostico,metodo_diagnostico,fecha_pro_inf,fecha_ini_man) VALUES('$Factor','$Sex','$Pareja','$Antico','$MAntico','$FechaD','$MetodoD','$FechaInf','$FechaMan')";
            $link->query($query);
            
        }else{


            $query="INSERT INTO antecedentes(factor,inicio_sex,num_parejas,antico,fecha_diagnostico,metodo_diagnostico,fecha_pro_inf,fecha_ini_man) VALUES('$Factor','$Sex','$Pareja','$Antico','$FechaD','$MetodoD','$FechaInf','$FechaMan')";
            $link->query($query);
            

        }

        header("Location: Antecedentes2.html"); 

?> 