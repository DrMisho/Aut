<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
