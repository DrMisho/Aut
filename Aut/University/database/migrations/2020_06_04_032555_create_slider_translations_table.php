<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
