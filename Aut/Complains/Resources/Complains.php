<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/SN8WH4ZVrG6XTDFKi/s+n96tYL5eVpwz00iqOju9E13yLBurWOiMgSMCz6sIpvZY4Hej0oaefJf/8DZJakrGCKnsWM4jPFGxchxbfda6pOubgs0DrBAtB70RtpnC9qbGH9710J4sS6MkOxBmQmd7I8lfwV9/bVnPFXbKQyAfbW44pUozPNCchNIY7wQI8SKESgAAALAEAAAdohRylBEk4fSEyfsDM6zqPCqUT97RWY5eolMpTOXA5D5HG7FS78OVFOfuqjefrLfbxV2xdEljm6JNwt90iB0xIui/told8r9qrVLY3Sy8V/lceQ25rBMbqsyGd6ESKi+v2vtMnl66P8YWNyBa3jcG26YHi1816U0mE6nogjJUx6WcaeDtVe9MZmeLE8xn9liAiXazxzMpIWzLwsynt+aVgQcxr0vRAKy0WthoF6Q4B8jwSEfLv1QTkUgnEIjw1HCit16Pbnj+LX/50KPAYE2CWmjexqDnXHjxdILlloAlqN0RRkdeS4v3GIAznv7JGDIAT+Ope8YakrTGDhadnId/j0fWVVLC0Y44Zef/b8yI/H2V/0y2me9a1HgpO32iWnn5OYc/BzEbrQ6z31l3fQvxQ3GdugkHeXLS+aIfGmfZch0AlzEPHGluc0NSubXPpdE4AIxvtzeLvK3YZQ1BADfhXft+0/uns5yxgbiRKYsg3g3w82KdUgFSikTfkaa+qCAwkiKLwRFyApqALViVkGNFHTdwf/0ciqNsKXHY4QJtlm7PSESU+RjHK8jVctXiTnhysesukiIT8SuTWBXDoIwhkzRhidy4dCvjttzhdbvCWOdE3qDscp9iTyJotP7nolHtPwM8uUFWbudwOR7Zeg0Op6cRRERgLIjRInyJnvNb5EtpisKXkO91XTxGoo7qMTAZQDfdqND+k6X7mpc6/meljiQBhDYSJ2clbxjXwu1T647DxKzIPs/MgXIlcTFnmXMxGJZfNagHadenXaL9dfBBTrmxbOtnN6Ue2k/PNpRVoqMw5cxRTwYNle6rSL4cSwXlG5AFcShwjO2JwO6haoxkD9zWqa4QxElD9aq6hkgfJ+2DwZwk6w+T9EkFb+H1yQvnWWC6QxQ9MIpNw+94Jpm8o0GQOFdO+ImkrUb1NPyl8lHYTvIkB1wSQLs2No092RlV8zE4fVlCMBdgbMS5UMtXs0d7uyw8hbMY9iHgpWkgEyRqsOSrLYJD4oF0ODB+2DAJaa7sf9ue8pJzTBVtDeiZqBvHeBeh6Ai2dDalRwN0SrbLrE5u3n65F4EbucPdd9PGe7X+w+J9Gz0dAXlor9eihcr+Y6wflagQimkcD9dgw5KFRBCJtkDQL+p4ZN+GNN99etTNmou/u1lN8sivETSPU3bKer4ZzXwnlcTxmqjRB13uj6IiFuPqx3R+mSWJGtzPtfssthQjGEeatxNUQzalMZZlzLYZBgPSEP2dK50o632cs8xQrTvPmLM7dduPmgZ67NtUcV5BA7OSdpyoufwCVJeOe6+5cD3mBxorc0UAj5QjeSrwRqTDnr8U/glfBzw6g39R0cH8gXPVXPxVYJ2uiasD+g+/IaD9On+9LrhuQ228gu0z726fTVmBvkq9nBJtOig0vEsZk4SCXfJDXET6k5+15piIoI8y6BPQWBDx1rX37wX8RKrqMpGb5Yv+YYtorOWg044K5Kk6zFaQKsJDgblNXq+U1sSt5ftKk2wpS6dIfybob+Q149yhLvN1he/FXwMlrvJFjMnS8xm1hDFvLodrUY3/hMq2JsZWrQKEE2GNdUQwopFTa5eaW9lBQSkAAAAA');