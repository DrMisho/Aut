<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAHgCAABFUoXhyJQzFQd6iz2VAt0jZRG5UHaUaqvHLJneFAeMDnCiAnqP+AADOsbZCGNGSQhZ/QD5idM4joXKa9qNr11Ox1aTg/ibq3C2hCMwwvMKwSL18VHBcgviXfPO92ufem71mk0Vc/XCVZUEcPIVc3ZUL8cu5qTLX6kxuKA1KIGv9ZUPsBRufIm8ygKOTVdovrnYbrKmN/9l5TnGecOXs90mkLwXGZ7qImj9waYM5/O3/CbWgeTzKkPbITZjqFbZpU9vHnoXiywW2+LyIG2MfXPvGFsGbE/zlEKgZolCYPybFxzV3Wr1RVnGgBeCxKgRuEp0M36qgINcvQ5JTlmwe2JeOidxS4v311hmY2CdSddYLp9L3k0T1U74ga2B2NsUAA/YjVjCTIuKm6l3erjv9HQsg/I0NbpcSt5ujhWphF+Qg95h7Sam+uCcGMs8US4zgIkBRYMPXEFHiz490m9Cy68qB3dt6S23O7YjHgq9GpzUAyFJaJWPhkVcsdBsFPH1LwBIpcjLgCvguW4Z5tIus1hDTyzyCKfjG08w71K0qf8qcg7yXYWg8B+HIf+ve5Yltyz2RrXKGaU/91RSUf+t/NXll3aWDpW0RSpLxs1V8UDBGc62W0YKUFi9EJY7vlsJf3nU6w+OWaLvPiu3sDfv/Ab2xUNQCNdBVIHxphy81QBm7pel1aLoPo0VMz6Hv+hGgiK1lpy+iR2i4YbUWq6DloFMafM3tyJfdwKp6EjWSdifolZKbVwT7c9/Daa0p+GV0PDUB1tKg8zlaGRr8C+B8/TV5o3e90zNH0Rr+2w/hqfoIs5NGIx+YoMXca/S3HfcSiCMjQGALzkQ1wAAAAA=');