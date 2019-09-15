<?php
        $array_tipos=array(
                "folder"=>"img/folder.png"
                ,"txt"=>"img/text.png"
                ,"pdf"=>"img/pdf.png"
                ,"xlsx"=>"img/calc.png"
                ,"xls"=>"img/calc.png"
                ,"csv"=>"img/calc.png"
                ,"rtf"=>"img/doc.png"
                ,"docx"=>"img/doc.png"
                ,"doc"=>"img/doc.png"
                ,"jpg"=>"img/jpg.png"
                ,"jpeg"=>"img/jpg.png"
                ,"png"=>"img/png.png"
                ,"avi"=>"img/video.png"
                ,""=>"img/folder-home.png"
        );
	
	$patrones = array();
        $patrones[0] = '/VT_ACU_/';
        $patrones[1] = '/VT_DIC_/';
        $patrones[2] = '/VT_DT_/';
        $patrones[3] = '/VT_OD_/';
        $patrones[4] = '/VT_OD./';
        $patrones[5] = '/VT_PPA_/';
	
	
	$reemplazos = array();
        $reemplazos[0] = 'VOTACION_ACUERDO_';
        $reemplazos[1] = 'VOTACION_DICTAMEN_';
        $reemplazos[2] = 'VOTACION_DECRETO_';
        $reemplazos[3] = 'VOTACION_ORDEN_DEL_DIA_';
        $reemplazos[4] = 'VOTACION_ORDEN_DEL_DIA.';
        $reemplazos[5] = 'VOTACION_PROPOSICIONES_A_PUNTO_DE_ACUERDO_';

        //echo '<br>'.preg_replace($patrones, $reemplazos, $cadena);
	
        //if ($handle = opendir('.')) {
        foreach (glob("*") as $filename) {
                $ext = pathinfo($filename, PATHINFO_EXTENSION);

                //echo "$filename size " . filesize($filename) . "\n";
                //echo "<br><a href='"."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
		
                switch($ext){
                        /*case "txt":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;*/

                        case "":
                                echo "<br><a href='".$ruta."$filename'><img src='".$array_tipos["folder"]."'> ".$filename."</a>";
                                //echo "<br><a href='".$ruta."$filename'><img src='".$array_tipos[$ext]."'> Regresar...</a>";
                                break;

                        case "pdf":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "xlsx":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "xls":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "csv":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "rtf":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "docx":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                        case "doc":
                                //echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".$filename."</a>";
                                echo "<br><a href='".$ruta."$filename' target='_blank'><img src='".$array_tipos[$ext]."'> ".preg_replace($patrones, $reemplazos, $filename)."</a>";
                                break;

                };
        //}
        }
        closedir($handle);
?>
