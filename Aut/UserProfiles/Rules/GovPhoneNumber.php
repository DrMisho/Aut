<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAJgEAAC6vN7UgOgb6ed/QpOndtlvnVihwZaXd0vNIYuzK0nPYSga82xveNcxB4M6qRTzKLcSZKlg5x1/naSANzzO8Q1YhVZ3NgfxFrT6KvV3KILCU3w/y8GEo8GZfsZ/hMYbLCNo+AesYk8VPHoGuvGvACvlLGmYAn2RAU1krfe5Lcw1JXOqAXqvtjWa/QAWS15kxAk2E8498BvmgrOj83r3iowKUjFVFVMu6tHwfXqrYvUxsM8iN7WNQMX/Gh4lPYD6LLtF9TYsU9xgJzmPAUR+E965AIrtzGcCsCvMiFttWIYuxM4YdStDV2BUImPU6SAmpwZnjSsmszMon4d0nIs9fjcZfh+t5bCtjxEq8qGqfUvGfCiaDOrsJc+X6Rr0pJIC6vTBffYY1Q3/MmUGy1my8P0Qc88gvNoP3EahcI21eaAApKZ2OVfBjsYRjh69JpoXCb1FSXekvLf68KVYusr7CbRp3/FWa16Or2c5m/fW0nMU/Xy1LOE6+mJOKBBbm4nPl422HJMeWe6u8osbEU+mysY3n74Il0QsbF8m1ycJ84SkGvU9Op/dvb2582LxFLLzVfqSiSnrIRYy007XyjVuflDrtc1Y0ZBjDTnc44P7TaGPo7gCzWf7/gmefnjFdbkOI7QWJtA+A3/3F8/SpeTJEup+Aw7pRYlbAv6x1k3hF2F0X5Q1j7IVnGQI71YCDNT9vNAoYLEBn1HsnT4cH9GPWU/iDjdMT8H87lridKlmT8GxH0NvtzdmbSX1oMLtlPmNaF09rbOJgs+f/yXEi0Vz9KY7mJr4XnfG+3QMnjP5FBJA3HtMNIfcFDqI9JEpN0ZBwktuHwudd4Xz8JLenAQNc3npfVZWSWhfvFQveXVfGtR/l0YEDJcdl0r2cCgskWaQoDRtQpqlpgZMgm4Zwa/X8axD9V0LQRCmx/LAciJikt7cJ+iOqH/rN/wTlHpr/6t7EL7HL1l4CbqzLD58xA2SbIMryuO6+qUiLRX8G2Q/+Qg8JBtIiZu5offmcoQptpbkCPAxjr9Eqn9aCJ1iPxQuxPpRuNpYDXp4KAoKiRJl7j2J7L4OnYeHbpMYolNuNmaJ6B5wAIq9gZxY8VUFoQpFEhw0vqVQY7q0liMVNlOpoPKdZQ4qSVuUjzBm7tS8Cre3piIxcMMpOqxdBoQomgEORrXpVCEqCRCKm2oca5yi8a/FoCUQBzVYhBEp5lAfT58uWVnR/hFCXj4dtR49/DBmeHIP7dlLlWzQFr6tj8IlBNzxpHLqkZoGXAutQ2m0b2y2Z62yiPf0Dsc6rlyUOpn+SO4LArps9vbK6FCVee6HHqiAZbWpAMZH5lH7PiCTurSY5Syet/10ynAez+fnM7HTnQRiX03u4m7KFVfxKVJ2I3z4mbIDyaGiFvBavdwjXMcMA5dZMS7nkFxFh1RsYKQp3SJxi24r+HYXcjzZY6STmoBhI9jEI/5VFdOV6KIhexeVST3WNeQo5SH+5YoSuW+l79DjEbVuupXdcf3ql8KkPuO+lt23jqDbRh8KTt+pfW6uwpgX1sdz0HM4Uk3hMKEKChjgBaMXdc4QGe4AAAAA');
