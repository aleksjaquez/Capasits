
        
        <?php
        $link = mysqli_connect("localhost","root","","capasits")or die("<h2>No se encuentra el servidor</h2>");

        $Nombre=$_POST['nombre'];
        $APaterno=$_POST['ap_paterno'];
        $AMaterno=$_POST['ap_materno'];
        $Edad=$_POST['edad'];
        $FechaNac=$_POST['fecha'];
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

         
        
        if($Derechohab=="1"){

            $Instit=$_POST['institucion'];
            $Seg_Popular=$_POST['seg_popular'];

            $query="INSERT INTO datos(ap_paterno,ap_materno,edad,fecha,nacionalidad,edo_civil,derecho,ocupacion,origen,calle,numero,colonia,codigo,localidad,estado,telefono,sexo,institucion,seg_popular) VALUES('$APaterno','$AMaterno','$Edad','$FechaNac','$Nacionalidad','$EstadoCivil','$Derechohab','$Ocupacion','$Origen','$Calle','$Numero','$Colonia','$Codigo','$Localidad','$Estado','$Tel','$Sexo','$Instit','$Seg_Popular')";
            $link->query($query);
            
        }else{


            $query="INSERT INTO datos(ap_paterno,ap_materno,edad,fecha,nacionalidad,edo_civil,derecho,ocupacion,origen,calle,numero,colonia,codigo,localidad,estado,telefono,sexo,institucion,seg_popular) VALUES('$APaterno','$AMaterno','$Edad','$FechaNac','$Nacionalidad','$EstadoCivil','$Derechohab','$Ocupacion','$Origen','$Calle','$Numero','$Colonia','$Codigo','$Localidad','$Estado','$Tel','$Sexo','N/A','N/A')";
            $link->query($query);
            

        }
        
        if($Sexo=="2"){
           
                $EmbarazoA=$_POST['embarazoA'];
                $Perdida=$_POST['perdida'];
                $Fechab=$_POST['fechab'];
                $Resolucion=$_POST['resolucion'];
                $Lactancia=$_POST['lactancia'];
                $Intraparto=$_POST['intraparto'];
                $PostParto=$_POST['postparto'];

    if($EmbarazoA=="1"){
       
                if($Intraparto=="1"){
                    $TipoI=$_POST['tipoi'];
                    $TiempoI=$_POST['tiempoi'];


                    if ($PostParto=="1") {
                       $TipoP=$_POST['tipop'];
                       $TiempoP=$_POST['tiempop'];   

                       $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_intra_tipo,profilaxis_intra_tiempo,profilaxis_pos_tipo,profilaxis_pos_tiempo) VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoI','$TiempoI','$TipoP','$TiempoP')";
                       $link->query($query3);

                    }else{
                       $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_intra_tipo,profilaxis_intra_tiempo) 
                       VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoI','$TiempoI')";
                       $link->query($query3); 
                    }

                }else{

                    if ($PostParto=="1") {
                       $TipoP=$_POST['tipop'];
                       $TiempoP=$_POST['tiempop'];   
                        
                        $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos,profilaxis_pos_tipo,profilaxis_pos_tiempo) 
                        VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto','$TipoP','$TiempoP')";
                        $link->query($query3);

                    }else{
                        
                        $query3="INSERT INTO embarazo_ant(embarazo_ant,perdida_pro,fecha_nac_pro,metodo_res_emb,lactancia,profilaxis_intra,profilaxis_pos) VALUES('$EmbarazoA','$Perdida','$Fechab','$Resolucion','$Lactancia','$Intraparto','$PostParto')";
                       $link->query($query3);
                    }

                }

                
          }      

    }

    $queryID = "SELECT id_datos FROM datos WHERE (ap_paterno='$APaterno' and ap_materno='$AMaterno' and fecha='$FechaNac' )";
    $Result = $link->query($queryID);

    $row = $Result->fetch_assoc()
    $ID  = $row["id_datos"];
    
    
        header("Location: antecedentes.html?id='$ID'"); 

?> 
