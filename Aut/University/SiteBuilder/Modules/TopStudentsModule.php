<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAFADAABurysJR4GIjvnpNA92iitCtjHZu8vfKjiSYpUs3vDvBB2+obs9DKFeay7tzC7DfBH1t65nzs8VYSHRhk73PeDe0Ee3DZKLL/13DImA5hR9nHdiBeDH/f/HGs7IFnqz+2s3NNnDfDS3JP2o25Lwq0LQuvhfBnk++xvUQcg5PYCdcxUL7o8OT+Ti2gOIqKD9jEzmXpEvjuhBSt6rgYVYaCzT/xCgfAFP0XIMjDdW/qe9vvbtxuH7+3g/bFZ7t7QG3RhFH91Oj8mafz8L/3/C7u6rx1v7lIv8NPxdDjbn3aJk/b/acwJJ8NgV9GXXjEgErCM1/yngKrwegkA6cYTsX3jro6mE+RNJJh9rLiA6sarHZIBJ8dXQhXm3Rq+nCnRiwtrMY0fMTkMaH5bCykcpDCJSl2WiufC/kvVboLYGMe8UMxKcxp8aG+eNHlU0Fz7xEBvv0XTRJh0O2Sl3ARJhSju5nIyAPXhNv2r30kaGdpQSN9WhwIDHP2p2faiUKw7SW6L2w7VtoxNEKklwkTxjj5r0IZjDJJyBJ1Y6V6CyAd9J/fGABke4/SuyOkTRCQw2UdnUjZh5e1DS/BNLPWXD82hfgbY0kxfptP8d1PhAeeEqYkZECDRJQDov93CtBBjaiHQEaaWoGICCgal73nuXLxNYYJ4vgJcKi0wVs8NTfEdYa6Ac1pasr9NQfMAm/YgC2hu5W05IVT0XIAYM2UaYkYpNR8FKyaK59PccUCf86Z4D6WXuSSKTcCWUhasGTHsk65eLmrtrkYpyU+l0saFIDLRAwqPogwM+fZOxO8+bJt4rcVp/Sor15hivC3++olVerdp6X29VHL/MSAu6dL34UeL6777l0ywq6SUPb6duEvjItId03/RcOW1rP5/xN8RiMpVv6n5D+f3wa68SueNqa020XVg7Li1GASxEtTWMM/zlGHFcI/PElArlIahm7K+hm2k+RR5Ufnn5Yq8moHgS43XMcmZK6S6IkUVFtOF7DiuPfXOgYVPQR7POYanUk28IekbUCzgVrR3Z3CDQPQlgpsMeFDA0k1RoWctonMtW9acECm1QFf1f+xXERKX8FD4GdNpOvY5cooTDH/5k2HtTt7QmM2hrh1fsDN5G8ttWnuU3sAAAAAA=');
