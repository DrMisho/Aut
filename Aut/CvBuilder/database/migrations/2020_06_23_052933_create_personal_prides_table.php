<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAAOAEAAD20Mat3BxgZqE7dMwVrC1RqEWWJhG5lOO/pOlZ2m9tzaqGYuqPKdoJ6Q54cvUYSfhC1uRT7qAOP0e/YY+JVyQ1UH7CpfvQTQwtXICeJtaH0GdxMnPxWHTIQDqL6McLn20K0MvSOKDJgEXmHpj45cBo4fI6lqvEdnhqVVOlNmNeyygKM8S2EUI++SndBIKZQQZw3A+sXst9OGXc51CIa0KK9BWfDQPBCTw2DKOnI3PmNOfnYonoP7G6teHXyz4TIgVqHL2szW+zfKvbZaroTrkhv88zRIRP6I4jUO11BQU583Uoiacjl+MS7oAaLhKkN4ZSnLltLxBHwHCQzh5Kd3ATsxY4aim040eem7/XNvXSyu38f447Z0Jxfhu9ku+OPzz1RIEsswTLmwT7bJk7VCQ9u6/rKRyU8EDG3bn3606s519LHju8bGS6s4OmANhKPS0VO7lpVlzs5fx82DhYAv++PWEs9A/sv1rYyRaTY5bl7slzRictEUbPZQH3Cw6TuDWf7ijT68PcoQ+Yjt5VbrSw/F/J3VJOpi8EQ65NLOwh739Fkz+TaPQiEwUD7qYgQLWMZQZOaFh5xkLehrTg0gcahYCM8p46n3Eyjb3Jl1YFG4ryinasG9VEoH1/G6QJiynNs61WMhbAhERHYWUfLLn7HTjAM1/z020RUgQHCcwAE9vPlK3kP9+LIqyK1LM+OanJOYe0x6ITFmgludnTsDu8Sy5UEa3fSh37kjZXRVmVfN7/rmp2Fa7zrL5+5VeV2DC7L1LVD2Rw9TPwD9abC3QtZt7yizxRrq8Gr1Vr0U3Fnf6czz8t1TV8Sdjb2AXCiJyTfOt/mTWdjd+ul9y+q7JzG+7c0XFdhCR/ZH0W/iXkDG9SxdEsAKRYtXGdnFQaS7gjRmgwV+uKe8dUt2ObyGzugCFplIFY/Ik63ECokWpet11qAF7RvYsfLyOJffnMv8wR9xiN21PH+8AdAWI8bvAYhRzlKyf2ZaRYJV0p/bmDDgiQ04BfvxWwpclzJMjYsMnfbKD18iVgXdCsfAP2hOj/JfPNzGHTZGmePQ8yY9bjho1YxIJs1flo+4k8lNlU4FYoFoGhQhtAva/+YtVFhdGfPBS+DKtp5dMrHzwrYCrAiy1fhtILj8iZwxnYvZ8BSzvDIlc3WNPmQv3iWS8vEgZLn/TZk6NeKwfH3+ls3bNR8d8W7UkwqsvStKs22Acv3uxd1qAcI5IF8DmgdJ3f6KcxF/3Ci0VCKvtdlbcLDFPpIIiwumdiqWTzZRNri+aO3GfnSAaDkXRpZxbDr4Ejt+jjx1/PMdldLKUu91anrTmqXYw9lwhrIoElmpbYwnQXSVxTil8623+8He+qmVj/rxU6ZIqIYpMPw5zD7KMvnC1YAUd/maivEVCtrssvsGqmxWSQYedSCA/7W5sACKaHmeUYKAmBsL7zaXs+DnPNyG+iewTmwu5PNm+eRhebAgoOYy6VithvSg2JEm3gz6POrdoNmZIxhB8sA2RyEjdeylu8Clt3P1zhfN28wFY5BqHFOgnA3emm4bazlrOtOHbZw2KhmyymPkLPIArG1Z+rElEL96H2G/D8zT5lAPpQ/6GoeA/0YHiE56j6w6lLtxnL1NXlIbc0bqsptpf45CfoKxkXpT6waxQlc79VTMW45WaMV6IAAAAA');