<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/JShncRHanup+DXGMXxXzgeuRg7ntQn7Y1CRAK0jsW+pcc1RLNXmPGG6IRbA+uE6kArhsdv/uURFssV6O6ao/h/FfdtVnXXbP6Geqn08bs3+9eROu1m96pALwF2IuuaQ8oNQ1yeQBBkeBKhHsQA384mHMPfzRUEI7wKlppPyQMmuiIy6z25iuCYzNDX9lRVL2SgAAAGACAABnsXx2MrTHwK5T6v4Xq/DqJRidP7CnXcTKCHjyRcL0nqP0P6mNaZzAR8aUzkAXrdC2wb+C0XMoYbImGnCeHyut8+vNwrJVZlh/m/2Sk1rQuo7wY3hKDaixuHOFDc9PsHkUl/rgYZf4FLS8X6MqNMmlhkKDvtYFWYTEE1WUWpOEbW9DBzoSb8E3y2nlRfYHLhQ4TESSrH5w/wUJ1Jb1yLyYZ45jvJaEa0DBGm+RHSs6tCVXQb/+Hr+hRDJnezYmxI+wwtzNgySMpmYYADinRXLFRejSyls9yhMO50jFlOg4Hs9/SAc38XB/VAFlkBib9JG7lNMBtOqX32S6HgMetD+/Wp5v91/mtecmg6JRPTkTK2bGDzgDCgzCdq8re6MIfM9ioLsFSQM76pyl5EaNqQqF01ZETjS79upak7SlDwYw6xHGx+7DAArz1gjPlHWcIVv6ZcIMYp2DwrFUPeUecWYxef4EcryvFLmTMIvXvs4jHCdvHISLy5nDkDuHY4kJ85REFw3bprS8t6MY9lwxKjYlAVVXhz2gNA5GdppfwPiJk7tbg74lPZU+JvKbLz40zkFBP1B2yco/h1sUBohKbCztsnRzRJlEfehS9X7ow0IyVY0uFiW3voW6z5I34k4ySisPVFbtCyU554utgEH9O1cgMIykDrcWNZ2ZHpOl1w/IDZJqdBnkBEh0vr3IvpYmpM7Mu5wNgkpMSchWqxS6sSwDnteQ6c1efzO+YpDrm36hagt+cdUUlqtSrA/CvrbKZuE3PpK9HjCleoBYXttO/XhpzOh1G+KljlfZpWId4IIpGgAAAAA=');