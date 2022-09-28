<?
function post($inputname){
    $deger=html_entity_decode($_POST[$inputname]);
    return $deger;
}
function get($inputname){
    $deger=html_entity_decode($_GET[$inputname]);
    return $deger;
}
function postInt($inputname){
    $deger=0+$_POST[$inputname];
    return $deger;
}
function postDecimal($inputname){
    $deger=0+$_POST[$inputname];
    $noktakontrol=strpos($deger,".");
    if(!$noktakontrol)
        $deger=str_replace(",",".",$deger);
    else
        $deger=str_replace(",","",$deger);

    $deger=0+$deger;
    return $deger;
}
function timeCheck($timevalue){
    $t1=explode(":",$timevalue);
    if(count($t1)!=2) return false; else
    if(0+$t1[0]==0&&($t1[0]!="00"||$t1[0]!="0")) return false; else
    if(0+$t1[1]==0&&($t1[1]!="00"||$t1[1]!="0")) return false; else
    return true;

}
function dateCheck($datevalue){
    $zaman=0+strtotime($datevalue." 00:00:00");
    if($zaman==0) return false;
    return true;

}
function dateWrite($dateString){
  $mounths=array("","Ocak","Şubat","Mart","Nisan","Mayıs","Haziran","Temmuz","Ağustos","Eylül","Ekim","Kasım","Aralık");
  $parts=explode("-",$dateString);
  $mounthno=0+(int)$parts[1];
  return $parts[2]." ".$mounths[$mounthno]." ".$parts[0];
}
function errorWrite($resultdata,$errorfield){
  if($resultdata->{$errorfield}){?><label for="exampleInputEmail1" class="formerror"><? echo $resultdata->{$errorfield};?></label><? }

}
	function tcno_dogrula($tcno_dogrula_tc,$tcno_dogrula_ad,$tcno_dogrula_soyad,$tcno_dogrula_dogumyili){
		$gonder = '<?xml version="1.0" encoding="utf-8"?>
		<soap:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/">
		<soap:Body>
		<TCKimlikNoDogrula xmlns="http://tckimlik.nvi.gov.tr/WS">
		<TCKimlikNo>'.$tcno_dogrula_tc.'</TCKimlikNo>
		<Ad>'.$tcno_dogrula_ad.'</Ad>
		<Soyad>'.$tcno_dogrula_soyad.'</Soyad>
		<DogumYili>'.$tcno_dogrula_dogumyili.'</DogumYili>
		</TCKimlikNoDogrula>
		</soap:Body>
		</soap:Envelope>';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,            "https://tckimlik.nvi.gov.tr/Service/KPSPublic.asmx" );
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
		curl_setopt($ch, CURLOPT_POST,           true );
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_HEADER, FALSE);
		curl_setopt($ch, CURLOPT_POSTFIELDS,    $gonder);
		curl_setopt($ch, CURLOPT_HTTPHEADER,     array(
		'POST /Service/KPSPublic.asmx HTTP/1.1',
		'Host: tckimlik.nvi.gov.tr',
		'Content-Type: text/xml; charset=utf-8',
		'SOAPAction: "http://tckimlik.nvi.gov.tr/WS/TCKimlikNoDogrula"',
		'Content-Length: '.strlen($gonder)
		));
		$gelen = curl_exec($ch);
		curl_close($ch);
	    return strip_tags($gelen);
	}
?>