<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/vIAQPNcs8kzDl6DGTkW0s8I5DpFKwF/Uho1fkr9WXlzFDkhmwZSSpPEIqBuxbY2EBRmNwes5ZY/mTt/aehWICLAgmbqfFSXVxEQfJyFnPtJ9u66YAmT6slc+b0mPNKlJ8UnNcYumjAV1TaxwmRgguw0XSSyd0L1KD7UGsTI5HmGuSPX8wyaUYaPJLdJxHiSfSgAAAJgEAACa7atDKYoPos0e1zjg5oPWjkcwuNuoVb3zRraL7QSel2fc70nwmgZwrJUwWNg1mMnw5h1tSYUH9loPOA6lkUa9FKc/JL6ztA080zWnvYE8iQwfYkScUWkfQlwU3HUhYDGtmv8RtK+lJ/6arBVpvyfDUkQEL2saVCMjjKHcUsszYeNe4O7hPwF5Vyp11rFyhpwy2HZ3g4WfYGfH7W4G0Zx3U7U6StilSLkBG7WdTup5mCVye2tlmUIX4HYWQThyaeTubSbEwGn3D7ffOMFRSF57+PQXeVS7ZBFk0GZI6yT2K+L7cuV4n+UkiukwAUqJy8BhkI+otwbTZvkpd1Fq4zEIrARWlp4omi1iAN25FGKnFtxGCixgByeY/H5pEv+IyURg0GuXhVIPOdvZn57NKd36wtN5vYD9lxNLppfq+WRREyBqikjFCI7rKK7GWuC2+5KemJ01lrmL/RUoXne/J7IiKJs1j5hrh8nM1nXu53felwCJAPlAwlzhMWJoe2pdEgeiGR/MyIHXF2zwiSmNE/kw+YHqGzhNs2sjUVwmOBdrwu5qJOOFFFzKrPxqoCqFMs1ClPfkqiXSQxnSyLE8Vz0C0EKMKEFlvb7xFjqcoeFNl5hbGkGve0gjmKcnbrqkNLCv0xSEmV9KsBqR5/On5bGHiBWw0sh/ifpTjiABRI4km/XseiS1CDgx4jxA2W0nlXYSFOAhTykZ9dBIKQpSr+gq8DCXr5fZZM4ALP9d1KzB7ocSVdBlCwODuZbSzV4i1CObFr8Gs1RRSatFJ9kiqVy0QHBa/Nf0JX5NUWcUPrVrKJY2lYm90DlQNTpJT/DK9+AHDc0Py8UwbWHrB8zzFahBZdbNxymzPKqViIo8EHauPBy6bvCNeSXScokUcjglhCaANE3yxMw98mhB7HOMq9WRC/NOy4xiZZ0zGFEG5/OIoJOpfszOe9kG8JjZ1K17Ayl2zCOLLX3y20eEcfOESqD984FC8a2jaoc4vrYKLVHB44HgnPJ5TERewN6g7npUVAmO3BC3eSdFktbo8UO7xmxjxMZNZMi0AoBwpzcs+b2QqeaLLt82tLlPGDYLikI37JJSM5CBxmEAvWkrjhst+fi7ip8YW/WHFErfap2tWqZVJXdz8nXuiCT4Jjy+cFPmnqeu5KjBjG9TFKGPao7bcGRGYyqWr2MmFjCTMQ9zhW9YAGTqdhcKz3msC5OQmCwz8pi4DbMbOxCe7EHRe6YHsv1KAxRwdSliXZX1pLS/+nbSfsEqd+USZU0csTfjWr6ffay/HIJz7sVNE9AMVlHLqrL2UCB7cM3hiGSmgeSJqVzMDBSw73bWwDaMogddMUy6VBcd1w4KfP2x4+0DqmaCFG0/1QA8igo1rnFA17QUA3vHGjH52kWDbldmAYPNM5zSbIHa4pgkfcUWYaQp7kjGiKA/EL9zqTlaQ+DEWqfhiBi3mNpN6DRTz29Cr8WEq/4ZU+E0neeR+CougdH0AKQTPqjnQ2panRmi21YofGjttTWKxfNgSTUv/deF3j5otDLbwzQWIH0HjZlSzXevjupSw05PIXai/XFPaekAAAAA');