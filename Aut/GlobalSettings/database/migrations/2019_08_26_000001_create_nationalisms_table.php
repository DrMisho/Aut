<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/GrHKNjnu7monnr5wFEbniL37KCGou46F3xdFMDATJ6P29z56cFMxOIbYHal/WCtL3i1c80HgFUKEYxAJ11tRmxodr1FzlFnmfFOVWbTLJ2skBP6qY4R4FzMMoKjrAGqiHouTC7kKvV++psXye40rInoq/YmcWx0OdGcqZR+fznj6Bh68V8jjqNv0grZgMAebSgAAALgDAAC0tLgOcmhuuWIW2HcTqqcWuG/1LXMI/S2nVmzmbu1HmmDZuFESP7fyFfykcBAd8sjtDD9ayDHGihS9NBrv+DM6Jc7tytSFawHY/yPVj5yy0Kud9StC2pSGN6RJZ9dtBpTQ10U+oVCrFar4oQfKxMqKjEcTsc8R8J9CkuOgFRnRdsebwwH8j39M0dsKQu6G1T65RDZ2vSCpXJLyZ2+HnkgeOdu/4TDm1Vc053Wj9yebq4x1yZUz0Jl2zF8rPwricsICwrhfY+kionmYntpERSmFTQGvKF0VwsfjwAx35Tct+R4RHxXwwL7AmwO08ArykEzMtGNEjSRFdW0rnqvm/BMjtGNjDYmUtayLmZ6StVNj/iktuiuTT4j4nsKJ6squ890z7z8Xl9HdNkEz2sLN+UNc5ycSZRNR0hFzXT+3OMBWBe5wFvafyJAa4usEGvYtjrCkoI+UBb9qOB4XU8lmKpyApqeGI2NiL7UuHu+rpwizUgGrROnEZTbRQ7UGXEpG+ApkBVq9nUWHh2h8oyb7qlgZz2P/QGX82A0fiT0NiIKTqUt39eV7wqdw4630WGaQLGbVJEB/d7Y6wdEurFegmVijWELAtdXyM0oxQ9MABcNtPmmcowLb1JPEodVDgLz5EwYs1A36vxhr/hqAooUMPfZxtSXWACTGgP9ZNTrYMVIi7cSqcpT0sO3x2PaJZl2AugtsIKXNTMwXu7uoefvryCtotCLceefArV2LNOed96cNW6cGPyAjCKJ2Z7YF3HqIGL3bjJKGU3Qdk+ojziqgTB0yH+ninBARSOpI8aqbCNt/9GuxDFmQoL4MHbzoqBgN8v4hW/kx875dyLVN5Qt7FQzQZG9/hcl8vlycO3A6FZsmNYhEUUYYQ6H1h/1q2mMurKmsw2HL+MRYunz0UVTUXsnOWnkZabKO3X3A1ur6TtU8dp++nfC+oQQwVGEUG1sAYWFLTFZ2FpCt3RudgAJYkMiwbakGf0u3tBfdNHbSwl04+bYtGKyjcdBh7HFtW4IrIn7dWXBgKGEz3XOLJyVFCvqvWdNb9NRlZ+xNL9VwTj6YvU2a8xY1UbL7QhiTnSgPAPhDmwn104SNrmD03wLiUuPaX8fs/YUAkCc+USFLIao2OY9VN1N6ZXfvAhh14eK7wjyqk8jrGF4smUupYjtNIM4RVQT0oVmZWzGAMDN4yrcmJ8tevkysT/w3ngN/juzhrfvvn2uPa3VbIFU6x/7RICafXKwRi8htsye9aqRiBF5tqwnJ62WdgD0YAAAAAA==');