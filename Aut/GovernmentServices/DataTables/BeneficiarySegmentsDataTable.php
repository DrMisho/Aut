<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/vIAQPNcs8kzDl6DGTkW0s8I5DpFKwF/Uho1fkr9WXlzFDkhmwZSSpPEIqBuxbY2EBRmNwes5ZY/mTt/aehWICLAgmbqfFSXVxEQfJyFnPtJ9u66YAmT6slc+b0mPNKlJ8UnNcYumjAV1TaxwmRgguw0XSSyd0L1KD7UGsTI5HmGuSPX8wyaUYaPJLdJxHiSfSgAAAJAEAAAgKrhT7LwaCz28IpASWG8cdLFeSTSKDc9BH3LXjy20CaLtFymr2LrIrpze/jGjqgMygbjgQSvYpcBuodSbkMSFqld1Z/vHZTqt/9Ay8zAxoPI0JEHZ6TQq2FmahD9dJaZv4Rs2zJO1a/WK02HG9TS6bvg7fzcOnyDfmQE5u55p5EyvT/N3bdIjdy5vjZn6kzNcByDvkoPaGaEtWYRdCp/tdaG3sTdPQViga4d7aNDZ49ZEOGm7rcsTNUZX5/rgNe4vTHt1nVdKz7xd0HHXo7d/sPSezF53d5MXgE/XFmwkxyYlU7rmkqIfoKpvHoh7J5k6LgoANr2qxWXh//hpqf4biNH56vRKcDxF1zCTqiRStvi9DzVOMMu2YIhZbsScWXDeV3ztwTMXJOdNiQ7aKboEo3j0uu0MQmaUVWsQ6H5AaPn+VQ2oTogISdVujnEZCFNIFQAFYmT2as5FQcba8fHE6PB+G4ztbPhGTXC98qQPEMhRNO4sJRFIGXHoQjuWUvoJWJf4GpOV/oFkq3k5cG/IUWZJRrm7R4gFAq53sX2TZB0dbcaqpeHjFBaNGsRBII/KYa5maCW4HbT8x1D4TmAnqK9IwUcPgtiQRjL09LKxKz+xV8/hkLQfvQ5dxucuw4GqXmeWDbMFgEGTfBba9bjtYk7HlPpgycZh0swc/SQPgPwN+rnf5bLefdB0RcIzx0d2FD1EI9nl9IgPYmW9MmtqLEF0DsienoGqsRf/RyRdSbls55d97UO9FVHfsrkdfc1MtRgpsW4u5CUKEi4VeP1Z3yG3HL3jGjiI0NnmC18fWRLnntUQRHIg6Vz2mo3WWxtGObpcRNgvrXJ5C8kJBZD/88FemXKpkaQro08frF1MJ+Ufl3HKtEXCqMuq3V191JSvhlT3NK+fvpDDrguQhkzgKiyBX5YcpJ0It+YuZVl2h0cdQEU0I+TJBv0zOaGNJPi+DmcFi+vdrUhQrzJBGWMGRQX/CamlN7AA9czSz6PmG3yhFlsY8dsk5f7kV0iFjLrHpZ63H5YyhdxhJr/WoR+ISp1e5BIzUuU6R8l2oSbcz6taR0g96NZNAQOHs9CrUtZUe2kOZGE5vvuXeZYsQPJIWDHKuIES7jT3ZwWBYxGJDunYD6+mqEFYOupHlYfTv2FkP5Ev8+RiQRNMYuX+uA6gCyNTTqqwBfI8bNlG/hpe+51J0SM9Xdpudmo8tDF1Rzz0aDmeUbvh+ZDLTVabmILfdVGmyE89wmeznarv6yN1lk8clXVnbKx6V1VrmcdUf9ggKM2XtJnmR811w/OHoWl4b/JROxQ9GHFfLHk6+xVxxHqJqUseJqg68M19YbqB6Ksc0jvVsosKgntUEQdlDj7g3IWBj36ck5JoGCMMYLEnBYyTgx2CUsZDEP7/187NUInUB+JYJk5V9DosWjOqNS3G8bJI4y0/s/U+Vi3KSsV2JEF3Yf9SZ4lu6npVHw6w2uPtbvyQp4SwtMW7E4qGvqAnIMQESQ51E6rSym1JWL27gjsHWul2WWPCciQU4yJUbgnRSEegTJ30EeFDD31H5U+vAAAAAA==');