<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFACAAAhoqyerT5nchu08nHcTeXaqzs1+u3hqX378jQK3Q0+63bsSjLl055Tn0xdx2ShBWDkrAujoLeI8DxVmx16+hjSNN47Yzlu4UkB2PYDM8QLKiwNzRAHeRSkF9lkX1ODu/cpQtD6I1cHBVWgeLdmPBYtX230Ep9wuKWxI56zeyF/dgtN1e/VA9+ldMswXQgPKE/L+yB6CUM+A4aho8KIrMBT+zsRqxlwQ92/T3JJFHVcJC1Ulg7CtPag4guuavRKqAK2ax1wfJ8a71DQvppx0ScGMSWqE+wU7AZhKvoXuAbttxByQr0pkPfZoIuCkMfzlngLgS7DjpUrAHQcJT/DuAN6Widc0pzKHqHmbD/nmG0Vco05tkW3JAUL1M134i5XXG25iOtT/kKS/D88hgRUsqU8EFYexDezQD9WAcNM2gengkrfolPqZL5MBrexPDi2OQHxlmt8ATmS41Mqrj7tLLFNtlKTroNQpvwnpEZMf0Umg7H89IJHn4l3MBckRd61nx6+tpKmdxLOVpcqCe4GXSssBB5qW3DUqzVv+AoMGsqbFxnqfMTyQ2a+1fvnGNFsDK0eH0OYkmgdpvqxJqrzj9C0XtXg/g95A2NhRpPYEaak9Eoj0zVRPUT3Q+W3JgVCMNVsjYryguaKZemLD2qFvLo4JjFo+jcvdue8Tkb+ImKGW7SuDidB1Ou3HuBDA+o6MVgkyPOHDW/PzscHGlBKZZoudw5oCP/r4Xtgic3kH/UOpIcZBJolkwep/5uUo2JbJnyMZ/iIu841GG4xpRrXEshcAAAAAA==');