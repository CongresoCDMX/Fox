<?php
	$dir=opendir(".");
	while(false !== ($archivo = readdir($dir))){
		if ( ($archivo != '.') and ($archivo != '..')){
			//$store[$sum] = $archivo;
			//$sum++;
	
			$ext = pathinfo($archivo, PATHINFO_EXTENSION);
			$array_tipos=array(
				"folder"=>"../img/folder.png"
				,""=>"../img/folder.png"
				,"txt"=>"../img/text.png"
				,"pdf"=>"../img/pdf.png"
				,"xlsx"=>"../img/calc.png"
				,"xls"=>"../img/calc.png"
				,"csv"=>"../img/calc.png"
				,"rtf"=>"../img/doc.png"
				,"docx"=>"../img/doc.png"
				,"doc"=>"../img/doc.png"
				,"home"=>"../img/folder-home.png"
			);
			
		}
		
		switch($ext){
			/*case "txt":
				echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;*/
			
			case "":
				if($archivo==".."){
					//echo "<br><a href='".$ruta."$archivo'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
					//echo "<br><a href='".$ruta."$archivo'><img src='".$array_tipos["home"]."'> Regresar...</a>";
					//$store[$sum] = "<br><a href='".$ruta."$archivo'><img src='../img/folder-home.png'> Regresar...</a>";
					break;
				}else{
					//echo "<br><a href='".$ruta."$archivo'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
					$store[$sum] = "<br><a href='".$ruta."$archivo'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
					break;
				}
				
			/*case "pdf":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
				
			case "xlsx":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
			
			case "xls":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
			
			case "csv":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
			
			case "rtf":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
			
			case "docx":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				"<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;
			
			case "doc":
				//echo "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				$store[$sum] = "<br><a href='".$ruta."$archivo' target='_blank'><img src='".$array_tipos[$ext]."'> ".$archivo."</a>";
				break;*/
			
		};
		
		$sum++;
		
	}
	
	natcasesort($store);
	
	$num = 0;
	
	foreach($store as $item => $value){
		if($num > 0){
			echo "$value";
			//echo $num;
		}
		$num++;
	}
	
	closedir($dir);
?>
