<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
