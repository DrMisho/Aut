<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAKADAADMYTwz6wMAxRtYsrSr7qf9cMFZ/wd5UZnNMtKTIBJSAJY2mKcQOfler33OUaHBObSwtjsJuMow3xm7e4KnWIKA4bOu5V2cAzfmXgZztePGWGQrgJKGu5Y2Vwv3OfcCo2Cn/fEfTpZ+cyHDwiwwF9cCYVRKVHSh3FckAz3NxM7bnJ98UZ1idvonKXcpdepCabt48QKT7x/hiCRQULHODLZiHPSu/YWAaonB6sDi9URGllLZQzTBcXuCQEru6thK3I7T97OifAjjMkLmdD8U90NOBcFPSkuTZN+Su1u2bvfpkMN8hFo21FlgmZrnKbJR+rQFYLzXRwYC9DHXeWYpt9G1fYBIS9f0QeUIK7ELupvpnrFbdmciDHGJSezzl/lEG+nxXzXs00cS6sxvpzKvcOzdIRLqRYTAe8M4XhHVoFgOY9ZgmfhI9/GXGszFLOKhjKhLohg7E4FZlaHzV67yZqekv5mzmJgOGaNKJSS9BQMZXwnYF6uoeu0tqivSiwLjXBpgQKXyYlnvyScg3lcMIvyhJ+8tM1TNRUWRJYcbsgi5daH6zVDspx8maswsV/5vUN0/PwNF7XtZoB5kI/2SarroMI+KjCuDSTf3fTXBoeZGjQw07nFy2QQzkHljYHwmd3ci8EV1tY/pyfX0ngXx+LZELmyf9pqjifY6YEpBJCWLLBpOy5SiAGUPZ82j9MWAPnv+VUpNCZXaJs0XTT0Fes6VyvK8Fu5kzNoHUGIc/boFd58tS0HnNg5ZEfdtThWvru083iiwd2Qj9Qd2P8zPUZscZu4I0DDNLeSPNbA9FhuejU2D6qp0yIx2CVlE1t37bkJBpYKu32bJIZ37yJ/Erb/Mf6kyGWAzaQkBj83bYbbwYFAAzHh/Lp9/loxRfJOJsHJ4nBQLNMRl2mF2UsxSpdfrpSyQkFRHioyPPDEOGw5mJjnJQC1Jd/Ku8Bh0Yd/RaRyoyhcGdPdznw1oayy+gHp4p4mV7Uz7cmHNMX65FqQzeogb1mD7TC4gl3bYqxpV5L4PElb3qOrIAe+miXx9uEpMeUL2trQ9KiQT3zWa3XdI7wu90toqrjvPji+jZSOelM3lbql2UpmfhKAwlBMIQLXz44stC4waKieOWNub1zZ24jTVWWvr3mFr2s6Cz8g69wNNVzb/ogXsXjr7NuaG8GwtFhTg5NswHTgGMReKyFnjDpL+5BASK0fnn6hVLWnVloUh6wU0k8ffJt4PRI1XsSXDAAAAAA==');