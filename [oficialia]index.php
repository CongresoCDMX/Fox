<?php
	//phpinfo();

	//$ruta = "oficialia/di/";

	//if ($handle = opendir($ruta)) {
	if ($handle = opendir('.')) {
		while (false !== ($entry = readdir($handle))) {
			//if ($entry != "." && $entry != "..") {
			if ($entry != ".") {
				//echo "<br>$entry";

				$ext = pathinfo($entry, PATHINFO_EXTENSION);
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
				
				//echo "extension: [".$ext."]<br>";
				
				
				//if($entry != "img" || $entry != "delta" || $entry != "juliett" || $entry != "romeo"){
				if($entry != "img"){
					switch($ext){
						/*case "txt":
							echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
							break;*/
						
						case "":
							if($entry==".."){
								//echo "<br><a href='".$ruta."$entry'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
								echo "<br><a href='".$ruta."$entry'><img src='".$array_tipos["home"]."'> Regresar...</a>";
								break;
							}else{
								echo "<br><a href='".$ruta."$entry'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                	break;
							}
						
						case "pdf":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
						
						case "xlsx":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
	
						case "xls":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
						
						case "csv":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
						
						case "rtf":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
	
						case "docx":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
	
						case "doc":
	                                                echo "<br><a href='".$ruta."$entry' target='_blank'><img src='".$array_tipos[$ext]."'> ".$entry."</a>";
	                                                break;
						
					};
				}
				
			}
		}

		closedir($handle);

	}
?>
