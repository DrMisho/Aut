<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('0F2F66194756B43AAAQAAAAXAAAABJAAAACABAAAAAAAAAD/JShncRHanup+DXGMXxXzgeuRg7ntQn7Y1CRAK0jsW+pcc1RLNXmPGG6IRbA+uE6kArhsdv/uURFssV6O6ao/h/FfdtVnXXbP6Geqn08bs3+9eROu1m96pALwF2IuuaQ8oNQ1yeQBBkeBKhHsQA384mHMPfzRUEI7wKlppPyQMmuiIy6z25iuCYzNDX9lRVL2SgAAAAgFAAB0hl/m89EQjPHwSsH3IOXEi4rk+l+pXhE6B9yMVNimaFZuVEl9xyi1fibvljm9RYK8x6SUcGXEt4LYK7cLPXxDc5eAr3s9o8U+5q2z0Yq5byagTdADq66mgCX3qyQHizzO+zbYlu/TV5wSeiYfKYO/e+AijQyl1HWnrm1BSvzT1bbLlsTd/B439Oq5/V8SD/SFFhoBuLZSb3vULON57PrWKdJF5Pm1K77B04fWR/O2NAEPWF/3isMOs7uqYyl1MlB13zhUco8q1DYn09MBlRjiDC/LFTxwnPLjeAkBVocott/QKkNIs0fUDU+kqJ+mMRFYGR6oEPUT9nDEm5NSrQE00C2DI/v+2zumM/MYqlEx8WsRJQC9J2qXDzrnhm9X/n4pNT/GMgV7HEPZ6d/eSAqy/SQy0TpdBWroAGh1V7nvNnYyO3d5sZypE95jDx6W/UldcR69ybxrl0k1WJPRUOXLIQXUzWspZHxoU1H60cQ8GGDfAjk7UTOKcJzPGSF3ah3FiSkILsflJb6QTlUB3Qj/K4GKwxvgr9IfcxF1cgk7BQdILbYg5PEKxZTRHUCS+1mjLd/PRt1I8Z2ZDC5aiv5d3VSeZWiLytOHEbiML/4UhG8eAi+/XOYwA2Yit/vi/SEi670/kq4zFTxNSlaTjCgS+XskHLMzYyqq7bczZ+XZkWoA9ewWtaQU/7UsPzY1E/0ob1nZFyTw7vcAHCQlyeuRCAMtB59j+bgX28diAA1L4bO/3YTh+KlOUrGDVPoTximgtZowGjGJK7H32giX1VgQSSwASgsdCe46ksbC1xf3XAUv2O5sC1j7kaWkp2JWAlAfL1ageycJjzSG4vmw7g/bp9+wlZzGyLMa+CjSr8vpM9d3kHkJg/fjheTVT0l7VT91jFM4LNiGOALoynq9rRcgad4xYonPoDhw5pKU5Iml9qFVHI5KXEttLfhtHN/Cm6rp/BRoJuza8/iXPIBqE4qPLkI9DiUyYzhmIO6j5aLYK8oSTwchC/66UzVnCRnd+pTLPkQQn/imFkjt6OyRpDlRYrcDBqyLJV7rn5WRndrk0kqAFkS1PiY9edMS88Mt/Kv5oRyGsP5ee7x+zEQqvGjrRQXQ1TniyQMoSc5aGbhJ/3kDo3UW7Yt3VXG1jD00yN/gLrcd3CWZrXnak0DVGaJNfVdjfwM7kJbklzgV8g53xgfd32qE2PzgKevjLV+bgFXoEIsBYFLbzaAduKeGHtpf2mRsA+ozhxQRywbMWxjtsgkuIdtwdNX1Zfa04KwYs2dJVbIqoLwLm/L9+2L900PtF1Km63kk9JX4ecFL5MOzQLkshhDR35JYPO6a1iAHtJ++GCBWjDkCmx/uNaNcX40OywnKOffXn3hS0ADU6JthDqY54k1uNUqn1kgc4f/Uea1svjal4EEtWguhbbdUds36v7bYZljlLBPTgfRGeQyPYN06NrOux4wQ5VGcZqS+838H6+pWFHCEz0Ih3hpePIi/mot5zpoImYPE7OyvXwYP2i41URdfRZ4N0B0OK/Y5UTcLD8PAK9gMQAPYrvI5naoU4+RUjibg/0eyTplimjCEysmqddY1KeW1PU1NKtFIgejFFawpgfDVpf4xN67lf5UgaqCryvZY90fZf5hWDLc8COPaFa3ew1r5uU2liMfpu841gcRZAcieuc9gSCEsX0IijOTrE+d1uSL0nw8exb9tNNWJzz8AE207AAAAAA==');
