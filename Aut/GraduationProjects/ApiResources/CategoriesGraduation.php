<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAALgCAABhW32XifZt1Zp9jgf5v62NMtFoslVLbwbcaKuI+SWL9QLUYi8Y1cG0Dsa/MmbAYg5Qn+4gBDuyliiDww6ZnppQZiqrTf/nkyOTsbcE0VsMMrez3BX/UXBzxCrSIf91QJP7KtQ/R/whivcxlFz3LICCNZCyiFYVMA68t9Fm55coDIFNMfaoR1500zdRbr26BT2r7Hc8/eyjsO+wjVaNUCGi9uL0ITp33n6s3HnnvjTwLh2fWAFCYaQWqzq9Cep2KludnxAGlxQ0wB+CBvn0ZsHV79C9tHWWXBvI6baXnQghQbCEw0hiF5uhjVZqCqbJDfcjJqWtebleviLY8TXG/m3cbWz84Cp0mukjEuXKsazDVY2PuWg4GnwauFCfkPec5cboAcH4er1NfpyuSLV2D3XNoDHasy73c5Nu+sJkC6Z8a8erwJfAwptqIzivbo4dVMKg6mdHFs7XiEGKKmWr1KiGy9ZTH1bX9RV9t3C7UMXjY1hX9wQWKaDHNA5mTRZ1Seo0IAv8nQbGhciAyDPOTgFGn+Mp/6OSqHiq93uW6IjB3ooB2QoBkIsRAffdc1JXGDor5hTXKS/Ea9EhNfWN7UYH32tTT21g6/XUiuauzsNxIFgqAPb8OTvbtQla+AXSB5iddswHVvOjBBmKMr/cHZJ4z3mB21mDgVWpQDVv63lQudq0VlKEYp3Bb7lKRoJnuH/lcnUUVI7nnaRhw5RgeTBRj9fEc+RKxzN3h4Xx98+sLvfSXNGGChCXfISQ4BoANseMfVX/YrQu5Re3W9Du+8QaY1oTvhAQmd42KKZ67ekHnozHfDdHENbWilxCdbwOk5DDWWqhN5Yvq+hGZ/WRz3NMGYivivct8CnKScxcp0kKgdUXCTjBfOMAfFPhtxotsOMt0OSpS+K5JfIowVIjX6IiqrCM8J6UxrYAAAAA');
