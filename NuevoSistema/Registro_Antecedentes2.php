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
        $MAntico=$_POST['metodo_antico'];
        $Nombre=$_POST['nombre'];
        $APaterno=$_POST['ap_paterno'];
        $AMaterno=$_POST['ap_materno'];
        $FechaNac=$_POST['fecha'];

        $Edad=$_POST['edad'];       

        $Nacionalidad=$_POST['nacionalidad'];
        $EstadoCivil=$_POST['edo_civil'];
        $Derechohab=$_POST['derecho'];
        $Ocupacion=$_POST['ocupacion'];
        $Origen=$_POST['origen'];
        $Calle=$_POST['calle'];
        $Numero=$_POST['numero'];
        $Colonia=$_POST['colonia'];
        $Codigo=$_POST['codigo'];
        $Localidad=$_POST['localidad'];
        $Estado=$_POST['estado'];
        $Tel=$_POST['telefono'];
        $Sexo=$_POST['sexo'];
        $Instit=$_POST['institucion'];
        $Seg_Popular=$_POST['seg_popular'];       
        $EmbarazoA=$_POST['embarazoA'];
        $Perdida=$_POST['perdida'];
        $Fechab=$_POST['fechab'];
        $Resolucion=$_POST['resolucion'];
        $Lactancia=$_POST['lactancia'];
        $Intraparto=$_POST['intraparto'];
        $PostParto=$_POST['postparto'];
        $TipoI=$_POST['tipoi'];
        $TiempoI=$_POST['tiempoi'];
        $TipoP=$_POST['tipop'];
        $TiempoP=$_POST['tiempop'];



        //echo "holalallala";
        $AHere=$_POST['ant_heredofamiliares'];
        $Escolar=$_POST['escolaridad'];
        $Vivi=$_POST['vivienda'];


        $ViajesR=$_POST['viajes_rec']; 
        if (is_null($_POST['viajes'])) {
            $Viajes="0";
        }else{
            $Viajes=$_POST['viajes'];
        }     


        $Convive=$_POST['conv_animales'];
        if (isset($_POST['mascotas']))
         {
            $Mascotas=$_POST['mascotas'];
            
            $Masc = $Mascotas[0];
            if(count($Mascotas>1)){
                for ($i=1;$i<count($Mascotas);$i++)    
                {     
                $Masc=$Masc.",".$Mascotas[$i];
                } 
            }
           
        }else{
            
            $Masc="NOT";
        }  


        $Tab=$_POST['tabaquismo'];
        if (is_null($_POST['tab_cantidad'])) {
            $TabCant="0";
        }else{
            $TabCant=$_POST['tab_cantidad'];
        }
        if (is_null($_POST['tab_frecuencia'])) {
            $TabFrec="0";
        }else{
            $TabFrec=$_POST['tab_frecuencia'];
        }

        if (is_null($_POST['tab_años'])) {
            $TabAnio="0";
        }else{
            $TabAnio=$_POST['tab_años'];
        }


        $Alco=$_POST['alcoholismo'];
        if (is_null($_POST['alc_cantidad'])) {
            $AlcoCant="0";
        }else{
            $AlcoCant=$_POST['alc_cantidad'];
        }

        if (is_null($_POST['alc_frecuencia'])) {
            $AlcoFrec="0";
        }else{
            $AlcoFrec=$_POST['alc_frecuencia'];
        }

        if (is_null($_POST['alc_años'])) {
            $AlcoAnio="0";
        }else{
            $AlcoAnio=$_POST['alc_años'];
        }

        
        $Inmu=$_POST['inmunizacion'];
        if (is_null($_POST['CInmun'])) {
            $cInmun="0";
        }else{
            $cInmun=$_POST['CInmun'];
        }


        $Ciru=$_POST['cirugias'];
        if (is_null($_POST['CCiru'])) {
            $cCiru="0";
        }else{
            $cCiru=$_POST['CCiru'];
        }


        $Frac=$_POST['fracturas'];
        if (is_null($_POST['CFrac'])) {
            $cFrac="0";
        }else{
            $cFrac=$_POST['CFrac'];
        }


        $Aler=$_POST['alergias'];
        if (is_null($_POST['CAler'])) {
            $cAler="0";
        }else{
            $cAler=$_POST['CAler'];
        }


        $OMed=$_POST['otros_medicamentos'];
        if (is_null($_POST['CMed'])) {
            $cMed="0";
        }else{
            $cMed=$_POST['CMed'];
        }

/*    echo    $AHere;
      echo  $Escolar;
   echo     $Vivi;
      echo  $ViajesR;
     echo   $Viajes;
      echo  $Convive;
       echo $Masc;
  echo      $Tab;
      echo  $TabCant;
      echo  $TabFrec;
      echo  $TabAnio;
   echo     $Alco;
       echo $AlcoCant;
       echo $AlcoFrec;
       echo $AlcoAnio;
   echo     $Inmu;
     echo   $cInmun;
   echo     $Ciru;
    echo    $cCiru;
   echo     $Frac;
    echo    $cFrac;
   echo     $Aler;
    echo    $cAler;
   echo     $OMed;
    echo    $cMed;
*/
        
        $queryAnte2="INSERT INTO antecedentes_2(ant_heredofamiliares,escolaridad,vivienda,viajes_rec,viajes,conv_animales,animales,tabaquismo,tab_cantidad,tab_frecuencia,tab_años,alcoholismo,alc_cantidad,alc_frecuencia,alc_años,inmunizacion,inm_cuales,cirugias,cirugias_cuales,fracturas,fracturas_cuales,alergias,alergias_cuales,otros_medicamentos,otros_med_cuales) VALUES('$AHere','$Escolar','$Vivi','$ViajesR','$Viajes','$Convive','$Masc','$Tab','$TabCant','$TabFrec','$TabAnio','$Alco','$AlcoCant','$AlcoFrec','$AlcoAnio','$Inmu','$cInmun','$Ciru','$cCiru','$Frac','$cFrac','$Aler','$cAler','$OMed','$cMed')";
            
       
        
        if($Derechohab=="1"){

            $query="INSERT INTO datos(nombre,ap_paterno,ap_materno,edad,fecha,nacionalidad,edo_civil,derecho,ocupacion,origen,calle,numero,colonia,codigo,localidad,estado,telefono,sexo,institucion,seg_popular) VALUES('$Nombre',$APaterno','$AMaterno','$Edad','$FechaNac','$Nacionalidad','$EstadoCivil','$Derechohab','$Ocupacion','$Origen','$Calle','$Numero','$Colonia','$Codigo','$Localidad','$Estado','$Tel','$Sexo','$Instit','$Seg_Popular')";
            echo $query;
            $link->query($query);
            
        }else{


            $query="INSERT INTO datos(nombre,ap_paterno,ap_materno,edad,fecha,nacionalidad,edo_civil,derecho,ocupacion,origen,calle,numero,colonia,codigo,localidad,estado,telefono,sexo,institucion,seg_popular) VALUES('$Nombre','$APaterno','$AMaterno','$Edad','$FechaNac','$Nacionalidad','$EstadoCivil','$Derechohab','$Ocupacion','$Origen','$Calle','$Numero','$Colonia','$Codigo','$Localidad','$Estado','$Tel','$Sexo','N/A','N/A')";
            $link->query($query);
            

        }
        $resultado=$link->query("SELECT * FROM datos WHERE ('datos'.'nombre'='$Nombre' AND 'datos'.'ap_paterno'='APaterno' AND 'datos'.'ap_materno'='$AMaterno' AND 'datos'.'edad'='$Edad')");
        $row=$resultado->fetch_assoc();
        echo $row['id_datos'];
        $idDatos=$row['id_datos'];

        if($Antico=="1"){


            $queryAntecedentes="INSERT INTO antecedentes(factor,inicio_sex,num_parejas,antico,metodo_antico,fecha_diagnostico,metodo_diagnostico,fecha_pro_inf,fecha_ini_man,Datos_id_datos) VALUES('$Factor','$Sex','$Pareja','$Antico','$MAntico','$FechaD','$MetodoD','$FechaInf','$FechaMan','$idDatos')";
            $link->query($queryAntecedentes);
            
        }else{


            $queryAntecedentes="INSERT INTO antecedentes(factor,inicio_sex,num_parejas,antico,fecha_diagnostico,metodo_diagnostico,fecha_pro_inf,fecha_ini_man,Datos_id_datos) VALUES('$Factor','$Sex','$Pareja','$Antico','$FechaD','$MetodoD','$FechaInf','$FechaMan','$idDatos')";
            $link->query($queryAntecedentes);
            

        }

        $link->query("INSERT INTO antecedentes_2(ant_heredofamiliares,escolaridad,vivienda,viajes_rec,viajes,conv_animales,animales,tabaquismo,tab_cantidad,tab_frecuencia,tab_anios,alcoholismo,alc_cantidad,alc_frecuencia,alc_anios,inmunizacion,inm_cuales,cirugias,cirugias_cuales,fracturas,fracturas_cuales,alergias,alergias_cuales,otros_medicamentos,otros_med_cuales,Datos_id_datos) VALUES('$AHere','$Escolar','$Vivi','$ViajesR','$Viajes','$Convive','$Masc','$Tab','$TabCant','$TabFrec','$TabAnio','$Alco','$AlcoCant','$AlcoFrec','$AlcoAnio','$Inmu','$cInmun','$Ciru','$cCiru','$Frac','$cFrac','$Aler','$cAler','$OMed','$cMed','$idDatos')");
        
        if($Sexo=="2"){
           
        if($EmbarazoA=="1"){
       
                if($Intraparto=="1"){

                    if ($PostParto=="1") { 

                       $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_intra_tipo,profilaxis_intra_tiempo,profilaxis_pos_tipo,profilaxis_pos_tiempo,Datos_id_datos) VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoI','$TiempoI','$TipoP','$TiempoP','$idDatos')";
                       $link->query($query3);

                    }else{
                       $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_intra_tipo,profilaxis_intra_tiempo,Datos_id_datos) 
                       VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoI','$TiempoI','$idDatos')";
                       $link->query($query3); 
                    }

                }else{

                    if ($PostParto=="1") {  
                        
                        $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_pos_tipo,profilaxis_pos_tiempo,Datos_id_datos) 
                        VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoP','$TiempoP','$idDatos')";
                        $link->query($query3);

                    }else{
                        
                        $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,Datos_id_datos) VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$idDatos')";
                       $link->query($query3);
                    }

                }

                
          }      

    }

    
    

   // header("Location: Buscar_Paciente.php"); 

?> 