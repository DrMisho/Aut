<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/m0MfsllVuvA3fe0aWtECPNigZ8b+RIJg42n3JgplZd2lfOSxHGbiXAyUglf5oLGsT/irciH8LnGLgwgW2Vtb6E56mqsw4ehx9N/s6Yc7eZ6joKOfB6aJ53gF0n7yJ4adxhZ45BfUoHv94vd3owfVq0IOECYg3NHXRRmUwP7M1RLDbjPkV9j+9jWH8bMJTGdbSgAAANgDAACeaZ8UIwBOgzci4031O3M5gD2F0fts9d06UzAotCAo1S0ObtrQr+h7/eTwTe+1dp8JyeGQwI+0not6sij/k+tKtqtsgEFPChtyncWAeUGilglMVt97b/e9wkvFneWLz1BcIAIn+zwEqbvc55LsOcOOTPOMdi5EQdJlvIltfvOEADkTkEwIzxwpVRoj5W/tE7uq6/PJJg+6wXsBpvK6ugqUKjiHWQIsN/XGmJFx6sLbP7tJN2D2qK06dipPHWEV95Xn9l0L7xFcZWFbD8/YY78uPX8N5LxUiTXddfyHHP+9Om8xNkgj8QN1Htk1nHm2324IaYmOZr40H7NJfEtFkRMMMiua6yd+3EDh4QoiTRu414hoaqWgP7leXfH1hT9f/mdSdIwiqdTtHFxfi4snuZVSd1XadtJ2Ja9D9zxgH2heZFlGk1vRm5x3RhWjwmBNXt4LJehVMr6WKV6qFPpWF2RBaEZukKDqZGhDvtSHZZTL5uXLRRoxDwhoH16pQCghHMRNJokH1KGLLG0Zet8+H7IHuQrYUs5DYPLRnQS0AVq0eck8DwIQIL37Ec3kRdtak1Z04QpbMRm2w6PU4eWcS+cd+I8vPxjk6+QULAqjZ0W3TX6EkVUKh3TO7BaQwuvn/3HWN/OT06QcrcLd77+HBzoOxBNQAccqdqUlZrm//+KqZBr2liNMzI3zdjuzy08Gg2RgWmDxrEJk540LatoswegVR+OIKfcqB5rhLkvC1rM7OzYjU1i7RtpAE1fMbXtbzgK49feWEKh/cnj52K59ni6MPMay/2Wv/q5eb8l2lcYs0PAXJKUtKRfRg8LJNRxaGnMMGKpNkcbWJkI4fMlTVD7Ky9pzIue21LMelG5LMy0dp4p2Luvnr/nrVoFf45AhbS5vCQJZCvJg9ZWZSaslOMfpGjCelmZFW3WSdp3Aq1P0Nn3RePzLWfG9zGOd/KJdOytaUcwwIW4Bi3HUASqv9gXfBw0TUiuU30361t7APwNNlJX/U4ewkixEseqjwxPk7N6xgHDvqoSwFqZlX2Vj5ClInW2e+dMgkKcLG71hJFB4R9VvyfRVMTuZk/NvvvVK04GNY1iUKcwPLN6mO8VcuDvdq952bkDEYJNXKykwi80bzGO0OG5fYDLMzDFDo7u4mYl3oIeSIehgu/a/xFIojS+E8PnsxraDR8cBS6eyUEe7WDuJBi2NwCxHZiU2A1LlxO34n3/hpltCr0d+u07Quqc5cSzLO8qUsAsn4jlSQpFz3I35CV0SK/Xaf/F/WsUEQflMEZ4zKDbKkXTj1P9mcFcNJDIVnixFjYoAAAAA');
