<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAANACAAAtjk9kgy/sb69La5waTxTJufrmORhANhLybPwd0R1+9lZGG3JO88gx7HuQPIAuYHIUVndTMnYDs4Kk/pHHI7vcVp0o1aIN3MaUitEUIPLjpBIlxiDCSKpj3njFOxo1EV6AIc/RGcOh/pMJfLwo19uxHryk/f9fxJNl5JrnaqJl+t0gCvRWINcy4O05faIUiTfYXFY+4thsYV/iwRZlSMJRiIVjktpUYugpWHj4hOvkeCy11IDRpdL165blX7t633zIIBvQBBRYVQ8i5LZs28y1k4Ltm0WKTPGLaE43PJda9ekMaEGzilImSpPba7ZjPSjdVkht3G4oHDxmTb5x0T2whFghCtW9osoMYWVUnMMDGPXuFJ7cnkfLmOJ6KvYGjPX/M6NoujVDomRGjXUy8u2tHKRNspAEQSW51rinnMDi9utdipsu3NDqrejGuydb7LiEjtuujhTj8wGy9Csa8YC0j/e2vKus5shxfXokyOcaKWJYO79T2KaKsaxRWjGwl7Wj+qWq8Ta+9PZASHGDeoeIaKgjyKE6eS9xPMkhl08tWEJoSjSlAy4IRm5Q8l92wtUGVPbxRLCPj2MTb5nivubP8vKLroI7JE/exEXMX9Xosu+48ZZ5P5xSZCew5dWVrFgYcqvJcWmqwRMZZdRCOMnSb6EkAwcE4HrlUlz0r7yuexhunWCmxI6ao9xqzcTyMPtLpbu+64M0ke4qMDavQpCv+luzVRYW3kHemXXDXkTNhf27jyNzadOVAA0Qgdc075s/9katTKyCWcllIVYJCq4SIsAYCDR5EPVHcolDepBUFnTIFi7DbMozxDoRJRCbvtJh6RYidIRixhZNF4vMY8y0f4Y8Y9GnuiSyR+aXd+VQ81qRtA4MIg5qpP2SgtLuqSV4zyawArgEClI8pS1Obb9lb9olCSXgRRlPAejXCyc88q7CWRY9Ll2IT2cCZOO3QXUAAAAA');
