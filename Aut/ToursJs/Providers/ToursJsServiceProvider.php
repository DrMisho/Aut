<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAHgDAABcv9FrrZ+48H1/i71v6YVohmjXly+VDQGSwZMoFRzJx/bzHsDZ+I0fP/AjGhrle1RHTkJKDfASt1Lrs+IL0ktiKrFShuot3NxDfLvdUgY3WV4IryspX/W1J7VQCQZxgh5O4LMzNlllbYOPvdBmc7KpixNVrocSWj9xPNWp4Igf6CnbHQoBb9CobMNZ3+c68OQ+JUiYvbiOiE7p7CMFEuYmvUnmLCvcWqGhPJHVbWJiLDVzeU2OBH1A+0PYLPtsl+7bF2QRoJckYJ4jlrCe0/ctYMV5KXHzPBWtHHDYFuq9DH1AsacsMNRJuPRRF3lj7zw1ZHrY4JdU+kWn46KGBU26ZMLJuRys2GYr9ZVaHPlu1HfN40VM2gjdgL8A+967+0dpxie3xKt8+x1JYg2siAR2TBItdbRJsu/0v/bfKklyhqjPm+xQJcKgV5WIeQtF3nTprJtkp4vGSXaCW6S1nOMZSoOutx+3Ym4T+JNZNYUf5cApwUtnp+aphSeJoUbTkeZiPrps/FiJPLY8Vqfs+mHVYU6O53sDB+wWqI+sXV3cc1EEOWC5zpt2c1Suui7aIjNp2aBRB1Iv/KczPsfJnzRzKEQhsMPX6gXYsSED/otWJ4BSC4BkIS1VDKaVTt0iwnxzGO5vNfNZIzAcDaWPPm48YNFTXJigtwJ/ccnqRloaZoaX39HS456nkNJ0Ay+aV4vKgxU8e6IvjfTa3SBO1AbFGx2DfE5yigRKhM2ZuiTmbGakG6xZjPs804WjXoTL+DlQbI5u/jujP5QlCr28bGv60rCfg7CdKB+fBXMPtWrHDjs3ZCRbDkEHL8ngQ8WlQXjTpKs3ggkPqzXSXhH+4xMSTN7Ta98hx9CwrXWwb3vwd2BnPC0Ku6S6Mvi+L9rpdEWdINbb5rxrnjBYiG4yBGXF0Dw3fAbvJxyNLwAfJf+Myum3/OPsmYbMcsJv/OilCVWHUqHvFGuRb/231FsDMKv03ZCbfXMiL4g9YElJyZg1qZJGhq2MLXHtqY3Ttl8Vi+EwZ/hcAxGkF9/VveJ33PDWWxTmwO5xdR2WHED/TjRN2YgCSN7uh828ycimAec29BJ3LMHqEGu7muwfDTu5xMAivRM71wNUoyGHLJQ7vFQxDRS3ngPd11WIeOXmsXzAQNU2O4jnc7bNH75SOYFdoThuwXbrI3MzdpYAAAAA');