<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/vIAQPNcs8kzDl6DGTkW0s8I5DpFKwF/Uho1fkr9WXlzFDkhmwZSSpPEIqBuxbY2EBRmNwes5ZY/mTt/aehWICLAgmbqfFSXVxEQfJyFnPtJ9u66YAmT6slc+b0mPNKlJ8UnNcYumjAV1TaxwmRgguw0XSSyd0L1KD7UGsTI5HmGuSPX8wyaUYaPJLdJxHiSfSgAAAPgEAAA6677+Bjx1o/7lD07mTkXPjiBPRaDKj6xGQJJBGWi569vwxoIUT2/xkpXcKurcwKEy3mn5UBdX2ptOPKeSqQgeVXIZtPD82Pskp52HwwHHy1NVX4dPH6Xf35ByCSEl4LfYnHbxkIKvqQD6F6F9rA41IWLMt5NJiFcWBY5yBOqC/d0FXBuWaPA27db5c7JvW7chkrsh8VSly6lEhvm3Y/pW+OigJDoMtKtt6Lnu8vIexAzUfjBbc1aEjR0iiXYD4UgeJWs4b37Y+wWqKjcO9PGqRnVmxw1Qdo52RiIRojSFLmaQN1OBCTxF2J8cPKPU7QPGyjuGxtBAx68eoMgKpCLoH4COh8Kzil4TjpOD9BGl04md/E1qJ3ueiZhL/Ehm/9GFUu+CSg14QEKKtf15v8m3+XndK/pGW82jVwgFz2YDVQRyhEvWe4yq3DkkCfwnDuOXJxR+0YexO23/EmmyP0LPd8TNtOA5qoi9ipELccDooELLo9yKYoXWaYxTR55Tvy7STOEFE0nk5p57ARBzDndLJYCy2gPBYIVUS9cKQcTcx+VNb0gjjTROyj4Es0zkSDTYIVklVRNkxR/jKtgLw/uDXJJGKu38IIdXonrwnp2eFomlkgWQB/esu6YteMugJqsNxU34ncOJZoGMhOqKGF0iV3d44+VvXPzHiFtLcNK0WP3qiqEf96O2CgSIVbKWIpYDcSTSeHh7lHMCL/1NDRpZbrzhUPB37kyF2xtaMYO1ITD++iVkzqpxufKYzmGRI+ChnE9dLVpO/ysQ+patTw1DItu9ZBoxeJg4j0nU+23bkl0bvdcJ17zGjRMA2dc+VXy6YJ9NvxbLLZHQ5+M2t60x+XegMUczKm29T3VPoMPcVmubvDxpZYtK1iWparGvvx5oK8km/61J5+B6g/3HvEtPRnwsLa4zbbJpNqWprrE0AxP3wkyi5fdgRXaXhUOgEkZQvBsmQpkkg444zXQZNU1+a0rO5ClXb62PecZR4Ptmk05x4dH6KsEJhK3YfPHVVJDEJb36RSSIjj6BQEI9Zh0h8QDWiI49NAkkj4ZAgowxa30h31S9szTlidy3ghuO19kJJowXd7u711gEoZnlc+dQSdsZ2g+h/FsBggt7OQq9Txw4vRRG35w6OOzIsu8N7Nmmms1CzdganSTvz1FEPBfps1pVvH2aUAV4eIqlRAZeEFZQEIsfeVlfrCl62Lyzn9Y6h0cRbcaTa8/CIr7/XPK945XVI21N0+92gnJYOwLkZjsa5qTC3HxA8XBeibRGGPe4iNqK9rlATf5sciBl3Dw25Vgx6JgdLhkVBNUohr3IzXAgSIi1qakUMHtW5NMRGZ5RyUBbqFNNJ+tRJ4ox0cMVZ5d1442oeRtqkesNDMkG7rZJAbo/E/5ADF96wVOFQr0QH6hNN3jCxNUFEyIgTROfOqJR9NHfXdPVrCwE3kzrNeWbDv4hYjCgcPxURlaxT4bTYusYzDxDcS4iVPL5pzcX/5HoSjjDJI9+RegjxT/5dAA7KfIFEbtUDENkLTZLA3/cmsySHrfRcA/mrMHp6W6Wd9FFCowBOBZK0R2Du0P7e6VGJm9AC8mUqITFg0g+nLzuohKVWjAyjOBEVtpadrEiZp5WZYr7RbdHmypxPDBf1zy0aX5ziNum5bDTJORCIdRGcg2v8s175lggzJfVSwzIAKeLnUgetmwAAAAA');