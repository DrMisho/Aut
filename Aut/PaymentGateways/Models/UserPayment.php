<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAMACAACxnqLYicaq9gO66o38XAxQyG5040y7sIOW1S+ggU/OtTBM9l136wy1bDXmwVGk652aCumBHlIEIHYNR7ioFwQoMv7Zpqcfiqmzjro+znKL6XmJxgCW+q+5LQMjLmzQQXCQzPCD1qygIPRb7WW2Pkmu1Ld44XpyIyHRPgOa3kVwvuVuIChnSHyJrVTDP7kEsx3kpbLzjjgIRQ+/GOPb7vJeZvB9Y2zxCOaM3ODKJNrRCssu6uzlh8rT97oz99MasRL7nvebpt7/ZlfZ9QkGfu0uXscuZA+eNdGDC4LBgOOQMs8VaCtnevb6TtEaKnk23oUpei67kRJz13pNb7AxKSFGi3zmL/4yLqS0PqaM+8swHa4wagSAResL2hMdTf3wy8K8vs3KaSBW0WuPybUDlkdEX3HiMxTFRvRLheW4ziKyLvrf4E76w/7jMEKAr75FJxkbcI0TO3reHQ9LbqZ7s6oaAbIyVt5U18nku1EE49ErR+fVBZ+EWMcqoDC4GWzK61KYCz+6SqrPLIlscAxqVLwRMchpAXoHm/olADoJVCbGat8tlAH/oweoqq7S27n4iiE1U1rXpdAXPOGgC4SFK/qbx3qkGQ0hvBMNuHtL9JW6bjTEqVuLvAfT5pNzG/nr/qMWDiY4fTd1iTM9gjO4xqEabd352EewFAIGWQuFU4Ge6QwVwtwRiA4SpLb6uozWWCBW8xifLD/9aXXdqSCYE/B7uPkSvCAzfBUrRi0pcGCjYEM3xyh9J2HEYTsOzgSAmNPOacQ17HsP4V6V8KrqzmeTKq5kKpSE3jM3uGmD5jicybzsAsK5vWLDIjnzQBMPYmBbsBoOremMUNYDNezt36xgw00FZDcboTvM6Q4nK2MRMxYBDg9AuatanQH9RNDxaGcBlMHbWzUcUP3tQC6Fr4qZTCS4bGnM3g1DrLPCMXVFCgAAAAA=');