<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/m0MfsllVuvA3fe0aWtECPNigZ8b+RIJg42n3JgplZd2lfOSxHGbiXAyUglf5oLGsT/irciH8LnGLgwgW2Vtb6E56mqsw4ehx9N/s6Yc7eZ6joKOfB6aJ53gF0n7yJ4adxhZ45BfUoHv94vd3owfVq0IOECYg3NHXRRmUwP7M1RLDbjPkV9j+9jWH8bMJTGdbSgAAAEgDAACjMRvlr/mhIs5TAWWckh6qsPpynHMqsj0Es5JxiKzStmsLG7fPU3DCCT8r6Y43wsIWHSLEzMKO4gqroyX9XqQNSwmcvSX3XyIB1Ptuc5iw8vpAOqtAIk4Ii0pBN9G3K8zbGgfXmmAYLyPhkrkwjnDrqn+X4Hy2IHHFyNkigvrx/HuYkqmOvUl7+gALa/pc36KnZ1TRlqR/h369KGL+PiiKL9Jl7ndZVoutCjs3kFv13mhM4heZM49y49WuvSEJc0dEL8X/JJZL20yAGRggNHKsw5SAOI8HhDq+fwC4PHTolrhVbmBjxJmLzmJ23uMbTmDYHa/z1aFw1M6gJEAUQq181Zy8w3OQwUg0TM3Q4P9Oz7rFbFTlbSwz9STIUg69LOjrpyF3/IxowVUSW3z0LgiT0G2at/8PhnqvDHfkSmPwOkNmeUe5sx+Gi/e4MNAGlQtGmG/BregisIcn1tQPfZOAhZT9TMh1KpPQjfNGNFqY8U5b+CX4bMnkzOg/8xd/eY2ElyegRFHQXxIxBLeZclIvzeB8OHXvCKUquqUvhS1Ff72QaySI2hUPjXsZQjI5j7IjoUKzvJT9zVmpyw7dhS+0QmxFxHWx5C7kLKESzjSh8KKENmJS2xAgGi9K7mqOwfs0/xEEUK2LXFCxUEph+qIt4HP7fAj4tj8EISx6K+hSCz445rypKxp4wBbdOC2j84j1eQIQUy8s1sDi4tAp9HEQZQYNmh9crEOl7SEvDwF1uNS39gUEHqSMHojNqyFQcpHAYXA5aOiV0dV1yf5mZFurT+C6NgFn5E6o/0NAP4Ed9hUfTdNJsFHtqgVVFcs8ThuvBtw7QU9f7l+K1/6BLfLNVu6vofmRAVGTBjuTI+Uy6KVna9sxFg1vsJi4O54aOjyXyAP4Qc9TI/iyibWMz283I3lPNWmPm3uqqOZcxChTeMiovCtcckXLMOk1Cb0fvYYfkG0Cr/qfymkCf5eXrPb+CPgsrbr4XgXqorkZKm5R983CK5O3n+eNzshZDCQcjhFWDzqdHY5NLcz0xUP+g29Fal+UD+wslSQlMV+f8P1ySS+iWuz4i6abvcGUq3YOoBdlsYPzYu5E5QqvoboFMWMsodzNgsD5HmYAAAAA');