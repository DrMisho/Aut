<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/tRepKBBxaXK06s9UJx3tkQ20y0l1aUQmwEacT4/cAYM5XjLcKIY1RhHgB36wYRuykziPlPd8mx20AxwMiM/IaU5c1P6pG6nukyAijDa3C7O+NJGXb/3H+ThOeVsSbphSdKRh9x/MnCu3nMjD0lp2K+3b200dcJR2AOKPwyVCcAn4C28VljpaCCt9zF5j6F/iSgAAAOADAAANmN1DF3pn2ULYN3A92nd/ulWwFns9wmiASXVbEekqBsoAfirXUUOAGwLutgO9oU+1C5gZnQl6TUUu7Uq9U9DqV+pvrj7FVwicDSKKzqNdMNmzRHWcKgQt9F5F/AoEolw/IOQcgQzre1JiLygl2gGt7094bVxAG6fsGtta4MEa2YL/aCKFvWpYefp77aNfAoit7Gzbf1DpTHhnJiQI3rNXtIbgClUExigFZ3I53uXinR3IQuirc8RKyDuCKyFWcEaVSqAw10mH6vODgHiCp1dhCgdqVkAjw+RdHPyyP0WBw9HjOUEN3mAbiGyjkTcnVeGlxokd4h96XJV4By5R5BmmNvk/POn+vZtQrWyg8P0LwUaDfKSMuSzzc0SiyGr8hauAevWkkkfKQeob2Ke9JfUr0BDwSg1M+kOl4SSjH3CSUhmyZMbEZYDavffcEaBa00IWKqyNEOpJ5cnuIhVWxNaX9wqPCnpBOZ+uQfV98lBoJ+E0uoAx4RYesbPn3uJyG7UKkTe8jpdq+KSU5cO1mzPoCmg1AeZXyhxop93a0X+KhXnz2uKfzqQC/QnrfPz8HT29msOzTPnFr/MXaF3s+kOSLi6gmdYykXGS914gUu7fWLE0gKHopFEWK4ouNMjg5+OEU7FjQgKe40ElyRccxvlNEld5c5Q3645NqEVK4U4EqQfhPU21MqRhsk/tBmhHlsNNQ/0tc33/OWiurJzrCmD8fQ4/9w8zSw+Dhvx8y1+0f0/PPhxYDBc86qT9zFU/Vgtu2fHBVpYRugoy98ZA+a9oFFmEpEzQMs1tWa37+zPIUp+0Ijx74mEZEFWU0fmlbAagprpa9DKFrmrjMXPPFLl1RQRsS7r2bhVfvLY9BP1So/lfrV/qdBaHiEk3MKFo46A5pkdAbT3te6E5svP342uGEQj51slavb22uvObc1pwJI8o1W2nGf5Ij2U4WEsf+dpeM5mjEHDfR+VHyjFqIq1OGPz4/u45nBc2PYBdG4uhYHCbhw4UT52DxTy5/kqI7mWZIOzPbayWG9ENuvPZx57+fBPXbDhdlUMwuXxs+5ThwPkCfEd5c1YTnIv2X+31KSm5EJBfQjDpBjK8lIeOTAv3vyPmvimaFTxq5qK1ghI+R9lsy0ehMkIuzoP1+mi2sHH/ZsDiDfcLL5B7O8UNR3e6OrnwMMBMDgzj3Ltkj/9mSU0ojE4I3UIYROqpUAwbBsTU3/jhU1DGpXI8TvGy3dTQkrVGGbq9qgARRye5qjQxfl1yXF3P3Z8EWCTBrhZKN988u4H4gnmvjv6l0haLaT5NmsdpN+KmSi4ZtrAdsEaUKwAAAAA=');
