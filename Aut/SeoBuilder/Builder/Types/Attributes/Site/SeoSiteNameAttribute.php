<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/Z/HnYNUJgo/svChP+aPuK8Basv4OjzuX4sHFn1z7c2V8Tob8Pw/lS2RTdhvv7zGW8S8K/HzUFFPpkOrAASbwFcufJ4oWRl95C26m775+xt37fJQWA56lXjc4oqARHqYdVriWBHC0yc+LrBM9ZICvAZwNT0QswjF3LECObadm9GMUcoPT/wUQ6zoEwas11efCSgAAADgCAACok6zzg9idA09kQ4yKEb//omjFMe7WKLPU12exZ9ci4hDh3D6J9E67FQSK8YwA8s6uWB/c+6Qfrh2uLQaOKAyBjCOohYiIqz97+YyNCcJxrCnz74V7VlQ1yjgPvSxXYv4D5r0ilnUzv18n7T2Bo6YOV/jTKn+GTkAt15xvedX73NvZlLENX6KcpK/EwryyRZu2I/g/6v5dkcfCyERS3oXL8W/QlODkIE8cAnuO6ORs7Zmrlzaa5siY8W2vKlGtTlGBAsfF0ySA/3VrPC9L6zg8SLLQwfM6AZUMl0OThPZ2HS8qZOEm0SXyIAN72jqAQN9Y0vQp5tUcjHSmUDufi4UYZQjwzhAsYRC3YydfCuaGT6kUGpwxIZahfHxmGstz+DKuT3uQrzu5BM5OrRd3zYG3Q2UU2OGn0exU8qIfjMYQ0M0tfpItLh35LbiiF+XRHcR0brQ2hcNnn2cLAL5tbd2iXle8ZjUu6p401BCCTF1Lfl0hToJx68b+s9GYLc1Xtg5rWI8D6fSVGHi5xPdLiR4KI9lu/rAY9ECC3myYp7cOH8+DrveeCBORZ5HxWM8pxLt/5mh0+m/8xyFDLmDh1T/rCc4lmagM9G7W1AzdcRRgL4W9qkOK7FQ3t2o2TQZQL0xJ60+0mavwViE8ojGpUTuw1SYs0m0cBamStmfYE8Y2vdNE8oZbKTidkOyOqjtFqUl1OqF+mkAz3VyQFBWOo4qBSRLeRAesDFVN1yZUav+2ncp54fAU3gn0AAAAAA==');