<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAAJgEAADrlR2eZx1FDlkv/2/U6v+5dU/1hyTZ1wuJS3jNsoj79FJ8de490QW/juUqDew2uNqaUtzFa6+1FsSvcHEyisMcI49SZTFPtAsUaGbld+3c7ikZStibnFfVKukRtfqB6kcGasmw2LEA90CmUf6IpNNaiZF1K+b0JgULmJHxudPsYTJDLg5VEe/a6ZCfsjeGfhc8c+LFlQIWXaldRcNWtewC7icZIzYZXOvmbAZfL0hTiT9131j5zGYd010VjKPz5u0c/bmXFok4PCj147uKcc0PjZaXU8GXQK0rxyxVrqcC4LalKVL5afxIYNZHKNqCgU8l1q8AnHS2eam3pe6xQcIBcVxK1nrAYjkZW99mtsEAdSJmzotZOcsMOhNkkj9FsKk/UbI+xgRUmJbwe79NlYojIW3JvmiUPoRZIk343eKAB2QXTnFs8uukHYwWzfnKGZGswRRDp7wh8MR919nVx5YDtRy0sqUn9sLVL9jkl64bCldKeiwEDmzogxrVO9gQAsSD6AoT/pt8rY8uHHt9oK1NRk1lC8HE1b+ukLe7vnFjhm4JGVCrjKcmp+oCBkYncRCLdfiMH6sONrwn6PQ/DyPzNdg0gsEL677xgcUAorbvAkAPiAhSE3T/xcKPsg1jbYjQ/cBJ1j7nl94GhcwqCoZuoXxvney6jV6/zMu/uF0fjwW3c0nHY8L576r4Jg6XhZk3pU9JwJSxSf5EQJo71qrfe1HO9aD4D9IAHE6yJNQ+3vqlqsZNWEDUJFsG3zwvP9eL1H0Hl6Cnhznc+uhBiBMJqgs/HA8icK3RF46SAfdF8lrQbw75fGkiU474VdznfmvsfwWrH+BVyn91vlehdYUp9IBWHaiXYl49Mal5mQHUc7KnpOUeVOW1oaR4CFqnemOiPm9CMiZb9sNbYw1Q6n7hE2NDVwrsnTmsm0jbpT6CgnjtpvYSJb14RHZu5/KHW93HSn1IYtfVd8l3MMElGQ5rDS0JENsaugJEBXMaOICaHB4lrtnSRtR8TgZ6wrdhP3h+aXkvaAh22HhUc0HJKwldvwpx5SY147OnUy1IlLGilBxzfxj4XEUJz0RN4JKuhFvsr07wIPxkXAmZ5IXFPSr0lzDVg+sGYl6Quk2eakRHrqKSsTuKocbKBc7y88gyPJgkyPhKexra5OwKGD6BxIt5Kqt0ER6mo0pi66JXF8pcXF0fnYVTCJnWdyz+qsckFkQkg1WObzPoMocNpRxBAQhns2dGDNt/esZ3KGh4qOVK7WxFDV6pUPDT/FWKII2bvHWQdhbPB1JNUzVxUlwpx/mMSf9pNBRumpEhiFSxTNFdDUi3A3TU7lcGHHqc8YwgwNupESg/h1hCu5dOBiFDpHqeaksQiQbynXVxIdwKaDxItuDwjDPhKZ6EZfLWOFStbPPGUKKc7ui/kQ/r81TF9/OR8Dyrn5zm8ifRvqW4OQhySHdAPTEv78AaWZj8eGlshQoZcqwDfRIf89kNKfdYxxFk63xcyJCGJ+inK2K087cbWyJ48hqrGA2lrvWjaWN1KmHdHiJnxcVbM6fuDMDxU5UkOxofDPgTUFIAAAAA');