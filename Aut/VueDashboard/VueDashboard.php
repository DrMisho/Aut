<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
