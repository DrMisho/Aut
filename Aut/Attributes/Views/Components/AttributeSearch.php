<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAAgEAAD+Qb0rb2zV6saPytN5dINKrLU5xwKctaat4wEhF3aS1n/whLLgkng/kskNbT6SlC2hQ59zipdoXkuJ2Uw9/E5YQQ5YC4MwEjfRrCZLl9Yhny0JXDMrX+BiPdoFS6sSPCD8cCEtXRTe3pwYs15xGdp5A8o5ml1d8l1vBPZOhGrV7mZlmGN1nTQYoq77kq+8aH6PiKLiVC5viuIaLKnWhJX3KUYbuev2bVTWunvJisGQpBFf4HIZDHte5R1gIfQCzrCdSlvzdoZnBeCswEwY429tFQaQkbvzo+EebylAlM3PDZcUexG+ziCGGYBzCnWCwF1TnLLtVTd9BtFDt6hQvGy9vfMPYSsmpoOxCpARmNkvjtG6pltbkbsi1/9MSrOwqWGvuL3Fs1Qr65CqgyFqFtJkDLA4Ofu4MAet5D1G4STO+fYo/1A9QRaCudyTYPhHocKD/uGmm+nRJ/hOK+7KCs3orzpj4EJ9NdvDqoYMwjmGa+84/2uAFJoii05QTFZWs0aefrQ3VksDqdkyfJP33BYxFXpK7R1kfwkUW8of5eRZa7U2nHkwymFIN0FxQdmO56s/MpmNeoB5nBqqRKD9V8DEEVSrq2RurQpL0EukhYr+4tinjSS6W+OwAB3nJ3jaUazGp3V4yeXYJBkTvfbKXZu0rurZTI9Hx4wt8CxIynWvwhJuUV6CbqEDVKoL/zxbWz1wu6TbNtehPWPI5eEPoCBWk0pkvCZueHeV2+zEbQhszro2SOrK+2HDACkJYsx3a7qPSGoZ8gRsOtSfCDetqWM9o25eBf4csD/o34UBm8kA+hnpZCunsRtcXRpAuHMmfjb5oHzALb6YfLcFOB7dMBxia4hXB8Hh6rZLnbQOwEHwFfVWZFi+mKiG4sM0+zdIoO/rcdg2C9cRbHco0XRJaBhjQBBuGo56ZCMJOowo8fV6hiskAzYg9e9emaNZrNCkdtVKtk3ci89eAXxIBqOzPqsSIAH5CKWiGq15Go4drcRFT+qnEufdYrD50O2l5ZypuMm6Pm60baOfet/onjVEQP7yAl/8Nq3dLy/1D3AdGtbXUqBj4ySwcY6A3jTqf+4PipXL08Wcl9uU1pbORnfY2YB87jsF8xYV743W1yW2Ak1XG9cF5RpQwJv5896FcTIz9rO+Abwrn78Ri1Hdv+3v6c5h8sevA0Tf1/Ir2s6y2GcA3aAWOE74B7mLrmZcUVChXGgjtOzFZNhW2U0C1PEQtL/brGpEEruE+RyswaEyjjHLAQKVQdoxVdoLcA9Vvse4zeUvw+hofT1AH7xKWTu24OS/xgkWxkuLE+Xd7eUnMBi/hYJmTHz2Us/1/3ffcwNiDHnEbc0RxxVi+4OcxQfWTSGtJNgBaNq765IAAAAA');