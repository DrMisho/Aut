<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAALADAADGeHsh3Fdu6xUHnzeJcjhI1p0vcUzpYUSlnMfQD3gaQ/x72QreKtfSw4Fl0mZUqT6kgU2DZmrq7TTsgrhkU5XGurfbJDZL7mWk4alzYjqA5Sd4BGOq9T6HO11oGiZy1O0M3B0YoSJaNiXO5/dhI5/KAWELdh0qiWJeNtpjoZ37vrbs2rjmg0cQqu3MEruPQ6TkMeTDHk4ydv8TRtyx19sp6HI/LP+e3QJP0CYu1blfZOfBXOLwRtKCzIS2fXaRSl+MGu0I0g+GYX7CGdUeFIGpsQdQhjhVsBchzFYDJPPbqUU9m0/9k8ftvNqZ5aK28XQH1Jx8udXTrco7fjXyPLjXkaJcYm2+jVYCdjXFssPD04wbsF30VhVHWcky4NfOsJtK5R/uhdaRWSjiAoSdb1z8DZfuygdXen6Uk8zWrxO7L1FnAGd043KI2Mb44W4YARmPJwbSEee7hl/7vksJDC9GoKF5vkSQemhFwjh2xMcMGj2ZwwwGIG3aGX1GF/NEOoQOvnEMHsvS/d0TgfO+FpD3tRUOAIkGlqUxZrg4+UdlxEp2LADNUgtAvBra/oMYVghMKMGAcBB62IZBVJvUVIGCsSDd0bCZWknZV5b1pQ1xWtDzpCGteL5H4SXKqI+WZPj5twOl4sxZfBfBzkF7Wjzkv2K/0Km4YKsSc+wgbIYoErrvSNqJ7DZ43Qk7yA41yYUJFEvQrlybsk9BG9zqoFIyTPEFCSWkEuNma/FWnEcXPhuhil4zggQYwollwAXJ10em91bR7xiKPR5XpeeLqKuybgi0LGX70pWTHuaRBea0PKN+BZBwiu3fMm9fttPV506t5v0VJ6o3Wj/s77gdizbAn76VEkID8JAULfWYu25abAz+PpSRN0hhtewssw36rrMxJrH8vnlnEuyVNSR/JoMyoO+zlvSqLTOHBiWDnf+ofdn3E3HcMXFYUn4Fgwq37PqeeOs0XiT1PXCBGwJKpw3i+TlSGHqpjRw66Ra5uaCkdw1nMCGsenxxG1vZ1LchtT4MPLExWjytCy8vvU54GoU+M2sCkYMY8h+d5+1ev80Vx5kswItW/Eb99EUNQ55nOP1DxJuqhZmoTavqq7dn6rIcO+hWIM/eJIUb5Tyyxv8+jdcTN6WeNAzYu8aHGEYCWW0a1x36BfMnfHGyrwVjwruOqoHYckyt7WWmfeKWlYqyif2+ExtECWt+ShHDljHIgMsO9wz0hfMFWvYnxRr8DrM7M91gan7huTWWssVGB9iLhAAAAAA=');