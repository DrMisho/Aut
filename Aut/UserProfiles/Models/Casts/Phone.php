<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAAgDAAD2YQ7Z2NGR+iNCLBp6wyjy1TfQxEQmULmobC/+Lp01tA0/tJaHo8dhSo1XCuHmjHwo6owL+P3GDAnJabRUzvHWPi/JAl21m2uxPi2FSut7C8CKOpvRpQghSg5xP7UWV4Q/s5Ck5OP0xA/GgRsevIJN9HCzA5sCcUL0BtlZZPHdhFyjTxJBnpQDuiSBOXs2ov2fGA2hUKSw6i/ssE8UMEYcI3A1QXxv8KWO0MoO2/5lBF+z6yBNC6ZqYXVxJi0BBeDU7rOK63LmbWGt0yzqOIxHxCoXGTBcQIo65ttIOUY44bje6yrAzaBSJ6dwiifJYfyJOcPclT6MwZkr+ypWH1Y5swR9xElRgU4LM2A024DVAQY6801cjS5PGrLZ6iRraUHX1wVqTrmzeykyZoHZc+4osvgF6Wt4eludOrGmezIQZ7BGA+lGumEu3yyGUO9uPu0aQMkqAC9aRztSMpw2rgYo3oK5qgJ8A7yeaudMgnJOsgxxdxcdtTooN6QoB6wzz+YxN/dXsrwlrqU7yF0GkGSfD38AI/BQj5UgP8N3JQ7cXgSP4tihivpQLr37BAkmUErFcMZX0F1TApBnaq4d8YEsMkB1r7wsskSYFA+JeYA0t/PImgYtbo2iO6p7ZVapTlva4oe1Pu9UtQyY9bYs2/J4t4txTxXpxJnpIaKKg/RDYTVXGjEeULgtYSpKa0tbnXyYYFQpNnIsh8gqRofbOsfv+jtmFEg4XVpClXSbGhFH7KXPPvXmr6z0LLSbrDz9VUoE83NPxR3WQ49UTsrC79DOekFBR54b2WJCVLLVKMYTbkJoIMStWOR8rjO+a/ntyODpGt/dgBt5pijAv+2GvheNIhD2gU658aukTfLsxB2EyJgLfx0mF+DTwimhyjsqwjKAy7v1fX4FgLp2HqsnFx9457DabHCF9zoJng4z9kR/0F52JQLBOe46T1EqLwIrBA0+c7ypT05mgxqQPah9V1Mr9LA7jGWykWIn3wvnE1mgA2y3nLLuxxzshhpb1pv5ciJZL45u5d+kWQAAAAA=');