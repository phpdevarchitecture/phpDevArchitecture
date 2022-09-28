<?
$saveerror="";
function dosyaload($image){
	$imagedirectory="bigimage/";
 	$handle = new upload($_FILES[$image]);
	$uuu=explode(".",$_FILES[$image]["name"]);
	$uzt=$uuu[count($uuu)-1];
	if($uzt=="doc"||$uzt=="docx"||$uzt=="xls"||$uzt=="xlsx"||$uzt=="pdf"||$uzt=="rar"||$uzt=="zip"){
	 		if ($handle->uploaded) {
				$filename=md5($image.date("d.m.Y").date("H:i:s"));
	 		    $handle->file_new_name_body   = $filename;
	 		    $handle->process($imagedirectory);
	 		    if ($handle->processed) {
	 		          $handle->clean();
	 		    } else {
				}
	
	 		}
		}
		if($filename)	return $filename.".$uzt";

	}
	function filetypeload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		if($filename)	return ($filename.".ocd");
	}
	function imageload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 1000;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		}
		$imagedirectory="smallimage/";
 		$handle = new upload($_FILES[$image]);
		if ($handle->uploaded) {
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 300;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}
 		}
		if($filename)	return ($filename.".png");
		
	
	}
	function sayfaimageload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 1000;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		}
		$imagedirectory="smallimage/";
 		$handle = new upload($_FILES[$image]);
		if ($handle->uploaded) {
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 300;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}
 		}
		if($filename)	return ($filename.".png");
		
	
	}
	function jpgload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		}
		$imagedirectory="smallimage/";
 		$handle = new upload($_FILES[$image]);
		if ($handle->uploaded) {
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 400;
 		    $handle->image_ratio_y        = true;
			$handle->image_convert ="jpg";
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}
 		}
		if($filename)	return ($filename.".jpg");
		
	
	}
	function pngload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		}
		$imagedirectory="smallimage/";
 		$handle = new upload($_FILES[$image]);
		if ($handle->uploaded) {
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 400;
 		    $handle->image_ratio_y        = true;
			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}
 		}
		if($filename)	return ($filename.".png");
		
	
	}
	function ocdload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		if($filename)	return ($filename.".ocd");
	}
	function dxfload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		if($filename)	return ($filename.".dxf");
	}
	function mp4load($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		if($filename)	return ($filename.".mp4");
	}
	function pdfload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		if($filename)	return ($filename.".pdf");
	}
	function bigimageload($image){
		$imagedirectory="bigimage/";
 		$handle = new upload($_FILES[$image]);
 		if ($handle->uploaded) {
			$filename=md5($image.date("d.m.Y").date("H:i:s"));
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 1200;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		    if ($handle->processed) {
 		          $handle->clean();
 		    } else {
			        	$saveerror.="$image dosyasında yukleme hatası<br>";  
					}

 		}
		$imagedirectory="smallimage/";
 		$handle = new upload($_FILES[$image]);
		if ($handle->uploaded) {
 		    $handle->file_new_name_body   = $filename;
 		    $handle->image_resize         = true;
 		    $handle->image_x              = 200;
			
 		    $handle->image_ratio_y        = true;

			$handle->image_convert ="png";
 		    $handle->process($imagedirectory);
 		}
		if($filename)	return ($filename.".png");
		
	
	}
?>