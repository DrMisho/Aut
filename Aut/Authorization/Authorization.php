<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAMgEAAATZPsmbh9VQ/oGA0WsXdz4/+4B0vRjzhysyxhEzQIz0/oJTmVs5QI0cuvI/qAtM1lzfLBL5ckhU1w31O3iPbPiGfM9+z4HL1/yj0rPVx0H6pLMsWIdGYn5ztQMagqlUpY1ZVJve/y+8G/XP3lSbo9MlB4aoglmVl0UbYG4oZkEQKCI6UGJMy0Yn8ZdV8+c7j3agsKYp0pmknRpH3NjRmApZISdrofzke+kBgRhi+93wBF6UuxtK9J6hWB5q+Vs0VSMo4IZkpLu9XMPjtDYyNc7+22fvVVxSj03gfFkMim/U1BzpOD4llDbisHzJKDqBOueoEor4MvUo6D9uS/MkSA/ra6k8kOMdtui3VYxiPovPVQ8AFsEP73+o4zxBJqf6ttFiLhXWIRyRyYOnXinq+CNN0LjXk5/SLRtlLCgOAT2D0jjP6/2nMCFsFbTjnNgrPxD5fpepsoIzFNPIQicm1pdLNwUUqm190YoSZULQZtqCyoPBGG2zghfXxddD2HBSEcrITdcSIkwl8Rm1vxZtygb0N5gF7bgCP5MEAFMBd19YKsEWgwp/+IXPgKk9+FdfZnliPYqWdYcZpBKlNbwyMBmXZJi70VlBTb+L1aHUS4Pqy3YwzldmQgba+zkJUEu9hpj3hOHJIfo3S9TaWPjID7/FkhQf3TR8b8shhDxM3eK/tWImh924yHfmtN+xJS+mCDSkUUVWY0bu+PjJXaFqFedY5UoQPBFJMow16+as00XkSeFgbp9sVIRo7e5QHxkg0stH+PBIc5dsQVVPczE9UcNKg7JsyHuB9XRvOjp2CrhTaEofmUlzRkOBIfowgGp/mejIxWi8EtyEhxUJxkmzn0QLa9dR/4PorQOmfIKVKBHHBUqnM+EDaLY9l+h6ncP7ZqgIAiSH/4Jz+AmKsvH6HHWet109PZWCcucGCpUm0T+aGFtr8AfyGlSRcapXACcL99qbMalTKtCwmOmfElWocqXCAeyux6i8bp3h5wMWaI8gg2hW0tFhJNu3EsL+RLWhtHXd534aDnGY+F7hSs2nEpwjZolZKo31S5XBGciVNfzLQNxiUQxbErBptAvHCezB4T+TX9e3liAaKHV+AIVJIKfH/gpkoKJ18fzk4E4b2PKzS82WVQRMpoOe7YbvCF0OWvhodrZuyx4kGLC+PE7b1tmYV2IHLpOziouscgtrfQ8vddQjdQixjbeqLtaH9sSQVT8QFAlQb9rtXp95F8MQJ+d5qUE44rqFqZt5dutsDeuvlCHJWIxRabbKyEYeujBvTzqBwxuYE5SEwF/zsxvCqKAeDbm61zLocmtf3kPRcXBWPo4hcwBwFvWBoZviaRq0uiF2pckndFPOBvLoqTqw51SAhtEbkBwJFSrbhsWoQfoduB9imCKougu7GyiQitZfkrhNWO06T6wN99mpk9MRKi94bnoxrHbhiALcL6IJEvDXGts4Rw1MO5Rr6pqVfTEiVLqPfu48PhWM/fQzA4lzM+XI5RRNP5paORtrQUR8Nyz9mZNHKrWWlQwZZHpNP9f5+pGfj7WLQE/u7zt5gJopkHXjsLDkG5UYwpZcB8sg06BeGC+tbi6chTDxmk+JsNK8h7GcazvWeOnMEp5d4G0TgVQ96s4m7a25hgAAAAA');
