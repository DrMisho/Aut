<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAADgFAAAxOtUX3Ltew2RuHiJ8WXX7jA1BEAT4I2tk+En6AeatkhWUFj//Iz8+lAPaF1t2mXMFmCYBfrwTznhsntLV7RyAcFJCmEfqJRvh8zbsxKLGYhF2iuurzHQLaWxP+HUGY6STPQM14OTdgnKKXYqQyMO1uO0Wq60gH090asMfUwrKcIcLoH+ehk8ao7KKOEab7j0xghNUtokxF9mS7XLaJdm4kzJ+m7Vje/vpNG22VGWfpq1+4QHMKKHxb8B+v4YMgLjNUlY3QZbMT+IDUjpzUJGedrgqbOOrx5xYIbshBJ66cyM+6u8fiHHaOKfN8mKrjEoFnBtHSF0RGPJzVnMMq1aJGA6y5OSXmfB2g25xKCWl3OVNgxbbdjizCW7DbJ+zXsuAN8qZL1gRXvejhdI3MlQIkvm57QumKlXhKI3xCaA2d9P/CHYgklBVI3La/VQ6rDxzX0VsKdMlcVhDWF8pAT37yKTAmsvlbAgMe5bpIdAiFTOw3boVpwVFA6ellLlEFzRLoH+IyfVYTH0uGpTSiHMWd39beMlz3MwtIlG/5g3r837aypxCYfe1D2SRB5CoRiL2zPlEDzxpWTPSyZd5UJ+tiqIpBPmDm9971KqYhoGLt0GAqQVHgcYqNTalqknm8iW1GmU8g+N+F8v3mxzhLU+NI9cq723qBmhQMoyZn56OkGJqmmM6eBhwMJmZdZ2DuvX+OD7jyDFZrYK0shT4xi4i7dPOStXii8uec0yMDLnUJo1ASJ7mszT4XvW+MI/Ys9Xx89IwxZDyCMnh95RjhwKu5qGfEKJgHQLSr/qc/pLF4EEEd5M1PVlP0r9ZWlh3/IhKzwZL3NfHzV9Gh/b9mQwsVIXHPXexW7Cr6qolLxp8NudhGbkUu4qo8Q7z+detRQHBGZCpOroQu/+wvfbYg4IsValfhhP8+mQUylM820/MHlKmIK0ReQTq1wJc5/cJp4R8QKFw/T3+C+kr24x1rTcYSHc9pbthThRF65CFEQMTApdfkLywyHql00cCOyvjzYyLeiPxXDWCMfJ88uZBIYfeSsQNrgIL+cKw/rHjj3WbJNuco0HBJU2CI6i9Os+lYtGwi37b5NXbXPeUbiXTGmvVR/Ema/FhK1a6AZ7mf/ECIRWgd42YA9LPZMuH3Aa8tCkTOQmzIKXvCSxsdtZ9ysu2TKZ9xBvGelv/s3oxrV0BlUytXPAoV0oZjRyDp1MutsRlAwtBnfeyyFyQ4yS1T59unsEgSYuofmZOoHLG3o4vMj2H14iDxM/Cs9TYT0EvVk3SRzoGQ0Xx8zi5dnqBYZ79/KFSiZme9PoDRQuGOxv9udXRVmrdUv6plNoJ4SC9ka4DTXBpp0FSzqGdWfzftg2rEPtpsPlFaDK7MqmvGuc1CGwLYhDgtINO7jLWJD4nNT9q1tqo0c0SKVDfgKAz5SJOHbg99bmKLhsDChX7GMm+KXzf1Wmplte+Va63UmPWZvBq3eweE0hwuHo9qRKvFWK+5L4bwJS8uODY17qYOZdgr5IiYt4mxCjOlZb3jJMZrbmZblvvP5+ZDkch8AyvbuxdfA5EPF/OlE16Mgw8zeBtdEKoXRBH4v2k3DS9l59oFAP/xzMY2ZQWjioygXiIoA9Mfvc3xTzN4CwrEvz6LYPktCqvkVKJY3s+eeHuXpao+j6sXrIEkKvk0DaWhUC5AGtpukI910RtJKJGotj2EGpcaojKYSGplMCw9hxZU5RVpPKo3Kg8Js/aFbp8LX02OJz8UjzLBT4QQTomeDwbZmoUlGLitGq2XiQfAAAAAA==');