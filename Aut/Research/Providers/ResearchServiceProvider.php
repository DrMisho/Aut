<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAADADAABLilsAB4qi5ckjqiA473usjfZJ4zGa2KNntrrziH1Cds1Wl/BxOAp2DMuAt/gbQ4NeKr02hZPMX6O6J7iKf+z1VY6iou8pOSdpmUbdvCLGuKdGh5D06dj50qSLRCsao/9pMZbSMXunRdB8DtwlBiTaMBa+ozUDES/blWm9Jmuba6mweIORQKtnnxodV1As+EoI5KqttysNC5iYncXSjl/YE5G6vkJ/qRMidZGY/RY4kxYBeYJP2ZhLd32Z4WkpURTt8jwYfieAtmK5z1fYGuquBwWTZ5RFnlY0yrHgGv5S5v8M9gV8jGksOD6cb3G/rxgAq1C5diOIvPN/lAgeP27xfEl4feSDKLvN0IrExd0vbMu1W3gfMsGxc5K1OF5qZiVF26q7xVliidOCoRzdLxzvfV4+BV4K6kpUMaELQNyjgh3AE5q4MraBc8OhJNDhihRqFLORXbsmUAC1130EkzFM6JAxq0+U502IS/OGG2aP3+FQVwU68e5+3cRL+zOQo5pzTnFG5ptPmMDkXng47HsMffX9bY+LkhUJCA1izt9LmEwV5RPcZ4ojPHgga83J8evpSlPUh60LOHv42LvXaEHNaGOpum0wgLW2G1XdY0apq37ilhdFD58nr/oXuNVdxMpaZJ/y7o6o+CRKd/wdwn/6Fcgfw7w2YxNBFdgzMZnuR7sR9UDT73mPeONhtQstWGpwLYOYw8eUxNvHKEaVBeYLWlQ84Smyd6Cytel9ac7fVuEeYHqPB8tcH1K65NjGd2/4/pQ/Y4u15QFz7hhxpuOkoXlHc7cUx2vkdAHjs0GoOOL4eemojaYhAE/7yf/JRy3MjUGJRvyRX7IcNcl/G8oD5GAAZEQjkCzrW9+kCrLjagdgRMzHiubgTvGHr79gGmNNgvalGvIJBc0cz9EPdfBqMu+/EtcocFJ/3HudqjeCgtS/jSlBIBrTP+0fLTxAWUkQS+2cCizwRMekwyYUfo5/xo97iyxPDBr0zCoorkBqWaxlHqmhaClY+UZkmES+nocXoCgwfA+rwTOijLP1tKCkdDMGlMVkHU4R2GtEyMgv34Y03baMW850DHAiXDplc94AAAAA');