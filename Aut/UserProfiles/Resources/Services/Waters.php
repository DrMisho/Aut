<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAJAEAABc75GCd4btD4qFtMRQpI18FngQpyijNFU0BO/XKWXpoIvmAEvuO50iv//7+S5u1/97T/0sattefqk1Ro82gYNL3MBkfz7gVpiuacZUgC5dc7Q3kXNyFmnCRgwr2f1csCUXSyN4JJI88aNVCcFd6y72xaD3yhnRVXaZK1mOY/q1u0I7PuKgE1ZElRra02DT6xpbfnKftBJdKWf6jzTMB1ntBHCX7vEhlxenTLhR+NOkZMMoQm3J3u67G38+I+jKEz1pBB2ng/szpEXey1sR9+WyWds4Ir1P7IcGRb0Hsm7/CPEMArTEbzULZsV/NAXP8GXHVEqwP2PL8Nub5/h1Rjsm3NForH5TGEUp+xxTutmIK+TCFjc+RaJum148qM9BM+IsQeVvEF3KbsSkXlq8Jv+TKKjzr9+dgQuEsR04SCkQ3GXn3XEnDuuwI2iBHSoVN/Wm+GNfcMOa9bPxfmlE1ext49vuI9B48id1aiNKu1kJNKzheuB39EGqEKgvPOxWNqhXxzO5AcXfSKZbWjoRGml3KWNsq/AesmABU13gX+akOrOooe/AFLuDG4XJEjZsFssOHMfmoW+LP3mSL+rEizYc8u2bi9ureR23MlBEU6JoSAkc01v99mF/Fvm5h59ifDYjRjNQzU8ejlHt1hOnSn6hNpvPRQzJpmJjxJwd5qYZYg/PmDU5iU49GucGhTlZ+UiRTpmcCG1wmqUT8/qbUzotxZ7SO2R86dVpzxto+iM48/C8Qupa28N8E1uTzo1QrG0Insd4t9ZhedoKCw7vNejUcQYe70+Q+0BkMmXZn9wnb4WXqP1o3Asr0Q7qj3vK0/e9nqDM365Op+xjR0Hp+Xu7CHhSru0n2oAB1QgBOEG2f7z8meYv4UNR5uDkjG3A3TaJdx/UGfOBRfDG1Jx31VhMNxzibDJATufKQazhsyLQK9WT3HjVHPBLMRCVQwhLAMqkd+CLHQPLQFcBM93AfutF+a0GljvzeKtqoogo/Ap8sMz3HLIZnqEABmbXwUwmqR+XaD1cGn7H7wNBylpqqevlm6J8p2993+KeiCnuWbpLXY5hy4n0qKI1rMGLzbBTV2/JalP69v5qdTR5Yz5yLFGfBIPhb9Ln+5sSKuc0kRMBfGnuuRrWBew8cACT8DZGUZlneC3YiQhyMD87xz2tRZM+olotBbjfEn9cMA3/4HA3Yds+RZ1RIuwVCosbe3tSM2/X3ASmhz9J4CVb+LeTzOGhWTx9LXPaE+UYst03V9P+4TsSxqyTNvZLSUn/UzvlkIu3CwlNALO2g8NznNiU/rLAQXuC6ShACLivHOB0dQoqv5c60VhYm+w4tzi5419OZauqNgNl1d85ikJIZdmK1QsnHKwGUJVAyNepkgMFQbAZeOMjmnOBnAwNtkIuDE0xpNwR1l8+xK32XVAZ2Ew/Ya1AUKm1OeXOHxeafYQiJ6mLGcZb8/SP8SOIlImsNyFToDM/NiaMveLAtFG4Cyy4z5nvTQ67yKJllKEPyQ/+EXMIRc+S7dvy1FHzyAAewCOfavIUAfULKs+3AN4+PO2XkTGSAAAAAA==');