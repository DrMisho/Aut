<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAALgDAAA1gvpFD7x4wvvKfCU4LNvhNRI9i4WRAN5f7Tb48qTHApLYmEudfqOpvgvM8byckrrk9yT5XvOaH8R4wl1Sqs8otVFkOSpCnXxaF6/JK0wuRcJng+EwNvd5GTWD7b8CeQLZLhcOOklPYlCZbgaxZWTMuS+1R5pMB0aTsGRPz7uv6n8RavUTSsHzGI50tZoP8BYv3O1/Z0QT1TBckrZ8adq0mSUxQNT9cisdlY7DwbwKXeoftnZalmpU7dgE3If6/ZvMlQ80F5YojHXl1ecg9FYBY+CnYjFpVG0G2Z/eLEtuiRtWiDhglDOI/QtViwKHvCzVdTyXIlIidSJTxZ+TrqwxaxTOxHvmOnFV7UIl66KGgm3gD4F7X/kt1oo5TMQIP7zPJl56XAJENRezEtDk9lfzufaNGe9/iYmfgwXUvSRsEtsWUdTdu1oIRbdy7SiL+GYy+mXZ7pbiyQOMg1j7BZvSt1Ycqv7HTn0tU/ox5VDsoiHDimka+jrzfEVkR3t+kj+UDvvSMr6Yk+x7GOU3EgXtj2gCAH799IggFLnvOZxaBS2aw6hHvqnkldgsqobINh96WSXC3mibTqgqrph2wOSAHJVzTZL7FCEulTWMjMjwsB6BK0Aj4MhKoaGVFAV37WavBc1EOlFGXCYHo3tqwrxpqrkmwqhJ+pCCifBABJi2uLMunJImM+jfLsHxnzZeQ9fIrOUAS7+KVcyq+ojoMdxNTpYnNZvv+pWKAba/mmGn5KAY2acn5LxVrsEPXy1kHsZkM52cSd83tqrFhfrpnTybynGeY7rQmWEce4a04NgO+TQDmvg2bqZdOILagcAM8gA9i1aKO5UP7XDil9NmcmrICA/zgMdqlvRQ2a9EdK1InNSzhJmPi/YdXXudyisORPJZmcsS5HzUWVwTRXR27levq521Wk2qhUs0suxQuRKITlzUAQ3VbqxGXqBtOwms1af8lNjWVJbpe2rW37Fa3PsNIswtnobIasfg1RO4auT+S9gtnk2+mTAOpLKmv593SmGKXpo8zQ9kDAL9Hza4pEjSVAtNxf6fGrWAB6U8JUySsd/HeRz2UtboDFvOD0QqZs6yNa5hQHAZDSgT+5mKKmvPvi+0KsI37tyf32Zj8z6bc/hBVXjztophUDdvyYcY6fAN9juIE9Qj7kdbLqa0wxD0QWzKMa/h1NdEBPjWepBDfr3iJRPurL20VoImBBioynuvcP3UWgARkncAzV8iMaKxBKrz5c7Cf/OQI1NYvgLfXZuL2NCSmxWPAAAAAA==');