<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAPgCAADbMZr4CeQeuHCNyHlhnHwacNZI5Tzlgzq/f88bfxbgbdx3375fgnjmi0vOWly59J1jVu34uDp0k/1pUSrSXkRuKGAL+8N4Gt3MU3fw1vUOlxma3I6K3GuIg37UOPxbQIgPKDmh+2KZKIf0IJoLxWk6w8DJEkpYnbbWo3QqbvxnvRvFCP+mcErqd5B8hBVo+RVcLicA7oLLiBfDhD8qrxzjeyvaE7aaIqi5VS84CqLsOzbe7DEbX++pD3pJbXlL1zsYCts7Bpq88MFeiiJHpKoRwcYr65i0hUy9hhI0NB9I07nKyekhpXH0sc0Q4ksL019jYtymkNigoW7l1ZIwplIn+dRU+9Dv3MjPhqflaQdpS/9WsVG3wTRyshSkKzE030l607gogEma7/kTmL/zGzQP5aYxSaXiPzdBqhfbYOGsUqMsJySjHq0fd2DrB5ER2ei37SeHf7DnIiwW6uti9giEfSqVadFF4kRkdfQxwl1DOV73D9Ey8pL/IeokdYOXpqsSZSoESv5QanbkVRzYyJgL2V91aWi8Kn91sJHhtUqDvxw33YyBllzXfjD38KNKVSkyVhDA4AUOXwcKkBdPegrJ50JLLUMaGBGArxpkCX8aJroVC/OQRGYyR4ff4iwi+hsQJttVVilzoGr/yBZbLrNOA6vNa8MS4sG+uA9qjIy+n++Ic4snfK1uow0L4KvfrEz4b6v6RtclDAleKxSInUVuCqBHFSotXCywRtyGJKyLlPcZBb/pnRqDPuZU3cNzA57tYl5eArJZnZn2r45/+CapeL7oyq3sITAhN2+oOqXtRGOegpjQo6khKEu+TlSHAfGrXaob9OZDGEKc7aY6XWmVVo8WfGY2yHdgcuogpqNR9ELlyC/ZbDIw591JPRvDPiNELIla7KAk8t1hs0OkYO9kQNqMmye+YpT5Yz2Afzx3fpLrt3oNnkwZEgnYdxe8KByrLugFBPVOiTbP+CUXKgLNrHGHF9WofpX4/DnPVPb4rmonCDw6047RAAAAAA==');