<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/h0Yggil3rrLeGAO4/N0oH7Yl25xbtdF03p9v7ODMi1ODtVO3P8g3wrkMvG4K8Bs0gKTdM/rMDCOukPJe3ApviWEvJCmp7DzxcH0jm1YqYBPf7OeP0lC5wpSRbMrKXKxPh6f2kOK0aFjxp4t7l7paDt7FtmamiJ2grQWhInNE6eIt6IBxYEy3hOuT9/iZsgBGSgAAAFACAAAPmhXwxITMsiGXJHud/2F143CiSHz0W+d76CmOoEdRu0SoMjeaYlsYfeRayrSraJOH2JJJwBlg1jgm2KjMLKIrdfyDUfD6oJIKCQARPuzQ8lKPw9FWnngrHha68QsqGg6Gd3vnowk42omthF0EhdnWyVD5mY6DRiDtqNOrTPClglG2TDBgav/UZGWfSdNYQT5k0YiCRwIiiwsy3SYiqUqHMl7cjToWgCH6Se3V8BSELhlmQvAg613ykG3VdTlehvHFewHXWGQ41Jr8bvfDWTQa3/CHwKe4ZZGTfKxFbxnufwyrndc/VAVvjRQ3XZ9dRBJA/kv/WE2YIegloqm2nOo1ABytqAvaYbBbUNb4WWiWikUkPvtTilNiXC/VA4VtWbDwcbckTHktuhXO7ZxexrqZc+id3Zrt1GCgdRUzdKuKO3q4kWaj6vpkDcKinfiaKmqJGloee4Hqq269df6e3RyTqh9GsXogjY/olgfZmmCz6ZCPLNfPlo5x8dOuR8h/4FX2TenVVv/oweXGz13y9jaMzT6Tcm4+ML8ARhLgX7x62fU7mej9BhkpD0Za3uMuoAxuxNsP5b3F0DMGP6sEKHJh65HDm/oib3E24UWksrhu38WjePe3PAhn+2teyy34RswTgucu4ngAsvQ0DnstDD3pYgx/jpYt8RarhANNP/Tsdwrzsi96suAqC0/wCyLAvdsDtCWWOjkB1Zont4nsfWoFMTvIeJoAkxPZtU1XxW6OwPUOzHER4VwC/A8QKAEleeP0LF2J1pQ1Noa7pYjWLzqMAAAAAA==');