<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAANAFAAC9LxgonwNxc2tqf3SiGNAlF5kd+4JypX4m7YqPsE3bPJonC0yxJ/imYazO3/mHbKC5KSl6wdZ4OizIuE7Z5BmYC5PTCQAahUU9lWgR8Aiy7VDBEcu6YKmO9Ln5Khw8j7+ANJv25tf8B14TO3pWXxsriVfIK1RGUIxrcBHFcGHfhnuJxMB37G0MrD7RlGU+rrDAH6fzQn40Bxg8HkEyVO/kXQRRKmm0lw+Fg1/VM4WPcgdOwdeBRUPaRiwM0XrJO7yLsL4y4Dde41kA5zCFKvqSWx2uk8p4NV4l4yI3hD3RIIBb0Rbe2poxMBEJATpC10XlKX2w++5t0QIKIaqn8cw6j9FF+X/kRCASfxJaniancdbMqy3YBUKUXdY0SH2gik1koV3agVKBoCab+XhIKptRut8moM8YQvKCkdww3fAadrn1o5ni4Fsuzawb1O6tO3irra/ELrvBQoHaNI5mOjviPrZYOa2vDTx8/OItki2byzAJ0B3chhiFsu5AKh6a0lRdn5uEFv+NkYcDhGwKk7cP7mZSMXr2LeZzqKiFbxpedgseQuskXW4MCs1H0lLLcm4352pcP98mYUDmzjfkF41S7Rdk1jvMuX+QhonNG3eUJdpAh8FKxF6dxXVaYfqKIRkgHzg5bp+cuPP8UmQ92CIf9L9A1G6O8l1dvSC3t9svN2X2TmpeaZk5ATKQZRJFhQE5bvQNzEjDPWXTCa73PetwxgyaMOr0QTWUH9WeASx0uplR+f2B4NvN6qz8yVYH7ZitzmVTRy6mkNDNybGqWVrP/keCK5FvSFjuxJpkTrJMsuZ9c6+8Q5H7lUJHLAtDUJ4y4lQG0aWJGKzYv/CSTGpDaZ/neW5tUwfya7wdFxTFlm94OLXY3wzdcEkME2lvge3KXfY7kjoBgDQQdjgRYAVWQCc0uF0ZyWH+QsWrX5jrT1iXi/OT7wynG6nF5zMDWNfV6IGjWq/KU/4nztQ7JEkzjoJW+5uduBBqIRG3/wN3S7DvOJ2ZACffhPfEp+kIqx1JzupzIaADLwbK3rKpz9Gr6mGjQBJvucCZ4j6lBNwOqwxIfxhdOzfl4emqla2otCro6AqtMtCVWVdE8oHUs0FQ6GAQ1pOm5FGflpblGyocu89s5KUHACIRRoT7rsnRnO5OZ3OHtFWqOoFAttqVYwxbI6buUxZlTsJu6GTQZbvOJ0v1XnLpNfTInjlgnDY/5Ksvgi2ZVBwzBMoeeoZzqNMB+9NBATkEX6SGgSqtkKHoSuy3+h8bydakMLWeqQIjThv97eqHCZwuDZfYm9eql6Yd3cGNxXywgq6dmYMzqoGf2PhSiroK3hep6axZTf8HFsb45A4GbpH1iwpqkZRd1FZP603lYHMV84TUNSreFiNzUSPGaIoYzIHq/oIApLfq02/dAlWJSyYhdAIMl1nmvungcCyfo6ECjJQIX5FAv6sC9Qs1TyNOCg5w3YnIWcISkoifMGqj3dbO9jiRl7byr/CThDytt7COIcYjFIHSYp/Rikj8rCH+nRdWe66tIYgsPUl5/7trVJsB0J/3e4HPMzdFvy1w2GKPVWHNzwY5Hfv8hAoYPTNk4fXvZcrBSYE8p6KCHQzS8D3+00WW9+/nfO78k9cT8/SPjOROCF7Y9g/SV36tO16eYgM9UEvyHsS7/RmOndp6zL2UvIrWf1xDwaSxAKMtMmAIL8dB52HJWjg3xQ5zXWcMwtkySHsgnTM3CDDWSmfvuk3EMxO9HR84gNTS7s1BJVWYk9xxQiQ6tD1YW84ui6OJvz1D7xlbApi+3OqBaq3D+B8OG+EKNZss15JOjWbU9hhcQlktX19DZLHDZ+6UNOn/EbEb8Ttn+3nAtSHpH9zAXssud6GEzNTMN+/OBkpFWf3nfc7KIleCsYV3Qs0W5gY3vzA4dCY4ek6rheQlBxgrsIgw8y7dPh98Bv4rBcy6OrY26ZCTdG2o9dzSeRofSFkb3gx90lA/fmjxl0sAAAAA');
