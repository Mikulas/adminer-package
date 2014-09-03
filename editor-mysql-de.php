<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$sc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($sc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$ac=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($ac){$$a=$ac;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAETMzEREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD///8BwP//AYB//wGAf/8BgH//AYB//wGAf/8BgH//AYAB/wGAAf8BgAH/AcAA/wH+AP8B/wD/Af+B/wH///8B");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className='js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days,params){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date+(params||'');}
function verifyVersion(protocol){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=protocol+'://www.adminer.org/version.php';document.body.appendChild(script);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function selectAddRow(field){var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[[0-9]+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[[0-9]+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);field.onchange=function(){};}
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=(td.clientWidth-14)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}
td.ondblclick=function(){};}
function bodyLoad(version){}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($Z){$Fb=substr($Z,-1);return
str_replace($Fb.$Fb,$Fb,substr($Z,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($na){if(get_magic_quotes_gpc()){while(list($c,$a)=each($na)){foreach($a
as$S=>$n){unset($na[$c][$S]);if(is_array($n)){$na[$c][stripslashes($S)]=$n;$na[]=&$na[$c][stripslashes($S)];}else{$na[$c][stripslashes($S)]=($sc?$n:stripslashes($n));}}}}}function
bracket_escape($Z,$Xc=false){static$pc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Z,($Xc?array_flip($pc):$pc));}function
h($A){return
htmlspecialchars($A,ENT_QUOTES);}function
nbsp($A){return(trim($A)!=""?h($A):"&nbsp;");}function
nl_br($A){return
str_replace("\n","<br>",$A);}function
checkbox($f,$i,$Ha,$oc="",$nc=""){static$H=0;$H++;$b="<input type='checkbox'".($f?" name='$f' value='".h($i)."'":"").($Ha?" checked":"").($nc?" onclick=\"$nc\"":"")." id='checkbox-$H'>";return($oc!=""?"<label for='checkbox-$H'>$b".h($oc)."</label>":$b);}function
optionlist($ia,$Zc=null,$Xb=false){$b="";foreach($ia
as$S=>$n){if(is_array($n)){$b.='<optgroup label="'.h($S).'">';}foreach((is_array($n)?$n:array($S=>$n))as$c=>$a){$b.='<option'.($Xb||is_string($c)?' value="'.h($c).'"':'').(($Xb||is_string($c)?(string)$c:$a)===$Zc?' selected':'').'>'.h($a);}if(is_array($n)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ia,$i="",$za=true){if($za){return"<select name='".h($f)."'".(is_string($za)?" onchange=\"$za\"":"").">".optionlist($ia,$i)."</select>";}$b="";foreach($ia
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$i?" checked":"").">".h($a)."</label>";}return$b;}function
ini_bool($dd){$a=ini_get($dd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($A){global$g;return$g->quote($A);}function
get_vals($l,$V=0){global$g;$b=array();$h=$g->query($l);if(is_object($h)){while($d=$h->fetch_row()){$b[]=$d[$V];}}return$b;}function
get_key_vals($l,$ea=null){global$g;if(!is_object($ea)){$ea=$g;}$b=array();$h=$ea->query($l);while($d=$h->fetch_row()){$b[$d[0]]=$d[1];}return$b;}function
get_rows($l,$ea=null,$w="<p class='error'>"){global$g;if(!is_object($ea)){$ea=$g;}$b=array();$h=$ea->query($l);if(is_object($h)){while($d=$h->fetch_assoc()){$b[]=$d;}}elseif(!$h&&$w&&(headers_sent()||ob_get_level())){echo$w.error()."\n";}return$b;}function
unique_array($d,$E){foreach($E
as$R){if(ereg("PRIMARY|UNIQUE",$R["type"])){$b=array();foreach($R["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Vb);remove_slashes(array(&$Vb));return
where($Vb);}function
where_link($o,$V,$i,$ad="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($V)."&where%5B$o%5D%5Bop%5D=".urlencode($ad)."&where%5B$o%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$Ba;$Na=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ba);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Na[]=true;}return
call_user_func_array('setcookie',$Na);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($hb,$D,$B){global$ta;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ta))."|username|".session_name()),$j);return"$j[1]?".(SID&&!$_COOKIE?SID."&":"").($hb!="server"||$D!=""?urlencode($hb)."=".urlencode($D)."&":"")."username=".urlencode($B).($j[2]?"&$j[2]":"");}function
redirect($K,$W=null){if(isset($W)){restart_session();$_SESSION["messages"][]=$W;}if(isset($K)){header("Location: ".($K!=""?$K:"."));exit;}}function
query_redirect($l,$K,$W,$gb=true,$ld=true,$_c=false){global$g,$w,$m;if($ld){$_c=!$g->query($l);}$Jb="";if($l){$Jb=$m->messageQuery($l);}if($_c){$w=error().$Jb;return
false;}if($gb){redirect($K,$W.$Jb);}return
true;}function
queries($l=null){global$g;static$Bc=array();if(!isset($l)){return
implode(";\n",$Bc);}$Bc[]=$l;return$g->query($l);}function
apply_queries($l,$ma,$qd='table'){foreach($ma
as$k){if(!queries("$l ".$qd($k))){return
false;}}return
true;}function
queries_redirect($K,$W,$gb){return
query_redirect(queries(),$K,$W,$gb,false,!$gb);}function
remove_from_uri($fa=""){return
substr(preg_replace("~(?<=[?&])($fa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($z,$od){return" ".($z==$od?$z+1:'<a href="'.h(remove_from_uri("page").($z?"&page=$z":"")).'">'.($z+1)."</a>");}function
get_file($c,$Hc=false){$I=$_FILES[$c];if(!$I||$I["error"]){return$I["error"];}return
file_get_contents($Hc&&ereg('\\.gz$',$I["name"])?"compress.zlib://$I[tmp_name]":($Hc&&ereg('\\.bz2$',$I["name"])?"compress.bzip2://$I[tmp_name]":$I["tmp_name"]));}function
upload_error($w){$zc=($w==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($w?'Hochladen von Datei fehlgeschlagen.'.($zc?" ".sprintf('Maximal erlaubte Dateigrösse ist %sB.',$zc):""):'Datei existiert nicht.');}function
odd($b=' class="odd"'){static$o=0;if(!$b){$o=-1;}return($o++%
2?$b:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($A,$Dc=80,$gd=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$Dc})($)?)u",$A,$j)){preg_match("(^([\t\r\n -~]{0,$Dc})($)?)",$A,$j);}return
h($j[1]).$gd.(isset($j[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($na,$fd=array()){while(list($c,$a)=each($na)){if(is_array($a)){foreach($a
as$S=>$n){$na[$c."[$S]"]=$n;}}elseif(!in_array($c,$fd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($k){$b=array();foreach(foreign_keys($k)as$ja){foreach($ja["source"]as$a){$b[$a][]=$ja;}}return$b;}function
enum_input($_a,$P,$e,$i){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$O);foreach($O[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ha=(is_int($i)?$i==$o+1:(is_array($i)?in_array($o+1,$i):$i===$a));echo" <label><input type='$_a'$P value='".($o+1)."'".($Ha?' checked':'').'>'.h($a).'</label>';}}function
input($e,$i,$y){global$Ea,$m,$Ra;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$U=(isset($_GET["select"])?array("orig"=>'Original'):array())+$m->editFunctions($e);$P=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($U[""])."<td>".($U["orig"]?"<label><input type='radio'$P value='-1' checked><i>$U[orig]</i></label> ":""),$m->editInput($_GET["edit"],$e,$P,$i);enum_input("radio",$P,$e,$i);}else{$Aa=0;foreach($U
as$c=>$a){if($c===""||!$a){break;}$Aa++;}$za=($Aa?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($Aa > f.selectedIndex) f.selectedIndex = $Aa;\"":"");$P.=$za;echo(count($U)>1?html_select("function[$f]",$U,!isset($y)||in_array($y,$U)||isset($U[$y])?$y:""):nbsp(reset($U))).'<td>';$lc=$m->editInput($_GET["edit"],$e,$P,$i);if($lc!=""){echo$lc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$O);foreach($O[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ha=(is_int($i)?($i>>$o)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$o]' value='".(1<<$o)."'".($Ha?' checked':'')."$za>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$za>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($Ra!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$P>".h($i).'</textarea>';}else{$Ob=(!ereg('int',$e["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$e["length"],$j)?((ereg("binary",$e["type"])?2:1)*$j[1]+($j[3]?1:0)+($j[2]&&!$e["unsigned"]?1:0)):($Ea[$e["type"]]?$Ea[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Ob?" maxlength='$Ob'":"").(ereg('char|binary',$e["type"])&&$Ob>20?" size='40'":"")."$P>";}}}function
process_input($e){global$m;$Z=bracket_escape($e["field"]);$y=$_POST["function"][$Z];$i=$_POST["fields"][$Z];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return
intval($i);}if($e["auto_increment"]&&$i==""){return
null;}if($y=="orig"){return
false;}if($y=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$I=get_file("fields-$Z");if(!is_string($I)){return
false;}return
q($I);}return$m->processInput($e,$i,$y);}function
search_tables(){global$m,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Pb=false;foreach(table_status()as$k=>$G){$f=$m->tableName($G);if(isset($G["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($k,$_POST["tables"]))){$h=$g->query("SELECT".limit("1 FROM ".table($k)," WHERE ".implode(" AND ",$m->selectSearchProcess(fields($k),array())),1));if($h->fetch_row()){if(!$Pb){echo"<ul>\n";$Pb=true;}echo"<li><a href='".h(ME."select=".urlencode($k)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($Pb?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$d)."\n";}function
apply_sql_function($y,$V){return($y?($y=="unixepoch"?"DATETIME($V, '$y')":($y=="count distinct"?"COUNT(DISTINCT ":strtoupper("$y("))."$V)"):$V);}function
password_file(){$eb=ini_get("upload_tmp_dir");if(!$eb){if(function_exists('sys_get_temp_dir')){$eb=sys_get_temp_dir();}else{$qa=@tempnam("","");if(!$qa){return
false;}$eb=dirname($qa);unlink($qa);}}$qa="$eb/adminer.key";$b=@file_get_contents($qa);if($b){return$b;}$Qb=@fopen($qa,"w");if($Qb){$b=md5(uniqid(mt_rand(),true));fwrite($Qb,$b);fclose($Qb);}return$b;}function
is_email($Da){$Fc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ta='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$T="$Fc+(\\.$Fc+)*@($Ta?\\.)+$Ta";return
preg_match("(^$T(,\\s*$T)*\$)i",$Da);}function
is_url($A){$Ta='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ta?\\.)+$Ta(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$A,$j)?strtolower($j[1]):"");}function
print_fieldset($H,$Tc,$Qc=false){echo"<fieldset><legend><a href='#fieldset-$H' onclick=\"return !toggle('fieldset-$H');\">$Tc</a></legend><div id='fieldset-$H'".($Qc?"":" class='hidden'").">\n";}function
bold($A,$Vc){return($Vc?"<b>$A</b>":$A);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Na=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ba);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Na[]=true;}call_user_func_array('session_set_cookie_params',$Na);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);function
lang($Sc,$Va){$Rc=($Va==1||(!$Va&&'de'=='fr')?0:((!$Va||$Va>=5)&&ereg('cs|sk|ru','de')?2:1));return
sprintf($Sc[$Rc],$Va);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Yc,$B,$M,$Oc='auth_error'){set_exception_handler($Oc);parent::__construct($Yc,$B,$M);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($l,$Oa=false){$h=parent::query($l);if(!$h){$bd=$this->errorInfo();$this->error=$bd[2];return
false;}$this->store_result($h);return$h;}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result($h=null){if(!$h){$h=$this->_result;}if($h->columnCount()){$h->num_rows=$h->rowCount();return$h;}$this->affected_rows=$h->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($l,$e=0){$h=$this->query($l);if(!$h){return
false;}$d=$h->fetch();return$d[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$ab=array();$ta=array();$ab[]="MySQLi";$ab[]="MySQL";$ab[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ta=array("server"=>"MySQL")+$ta;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$B,$M){mysqli_report(MYSQLI_REPORT_OFF);list($md,$pb)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$md:ini_get("mysqli.default_host")),("$D$B"!=""?$B:ini_get("mysqli.default_user")),("$D$B$M"!=""?$M:ini_get("mysqli.default_pw")),null,(is_numeric($pb)?$pb:ini_get("mysqli.default_port")),(!is_numeric($pb)?$pb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($l,$e=0){$h=$this->query($l);if(!$h){return
false;}$d=$h->fetch_array();return$d[$e];}function
quote($A){return"'".$this->escape_string($A)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$B,$M){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$B"!=""?$B:ini_get("mysql.default_user")),("$D$B$M"!=""?$M:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($A){return"'".mysql_real_escape_string($A,$this->_link)."'";}function
select_db($Ja){return
mysql_select_db($Ja,$this->_link);}function
query($l,$Oa=false){$h=@($Oa?mysql_unbuffered_query($l,$this->_link):mysql_query($l,$this->_link));if(!$h){$this->error=mysql_error($this->_link);return
false;}if($h===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($h);}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($l,$e=0){$h=$this->query($l);if(!$h){return
false;}return
mysql_result($h->_result,0,$e);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($h){$this->_result=$h;$this->num_rows=mysql_num_rows($h);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$B,$M){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$D)),$B,$M);$this->query("SET NAMES utf8");return
true;}function
select_db($Ja){return$this->query("USE ".idf_escape($Ja));}function
query($l,$Oa=false){$this->setAttribute(1000,!$Oa);return
parent::query($l,$Oa);}}}function
idf_escape($Z){return"`".str_replace("`","``",$Z)."`";}function
table($Z){return
idf_escape($Z);}function
connect(){global$m;$g=new
Min_DB;$Nb=$m->credentials();if($g->connect($Nb[0],$Nb[1],$Nb[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($rd=true){$b=&get_session("dbs");if(!isset($b)){if($rd){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($l,$p,$C,$fc=0,$ua=" "){return" $l$p".(isset($C)?$ua."LIMIT $C".($fc?" OFFSET $fc":""):"");}function
limit1($l,$p){return
limit($l,$p,1);}function
db_collation($sa,$sd){global$g;$b=null;$kb=$g->result("SHOW CREATE DATABASE ".idf_escape($sa),1);if(preg_match('~ COLLATE ([^ ]+)~',$kb,$j)){$b=$j[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$kb,$j)){$b=$sd[$j[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ha){$b=array();foreach($ha
as$sa){$b[$sa]=count(get_vals("SHOW TABLES IN ".idf_escape($sa)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($G){return!isset($G["Rows"]);}function
fk_support($G){return($G["Engine"]=="InnoDB");}function
fields($k,$Cd=false){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($k))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$j);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$j[1],"length"=>$j[2],"unsigned"=>ltrim($j[3].$j[4]),"default"=>($d["Default"]!=""||ereg("char",$j[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$j)?$j[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($k,$ea=null){global$g;if(!is_object($ea)){$ea=$g;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($k),$ea)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($k){global$g,$Sb;static$T='`(?:[^`]|``)+`';$b=array();$Tb=$g->result("SHOW CREATE TABLE ".table($k),1);if($Tb){preg_match_all("~CONSTRAINT ($T) FOREIGN KEY \\(((?:$T,? ?)+)\\) REFERENCES ($T)(?:\\.($T))? \\(((?:$T,? ?)+)\\)(?: ON DELETE (".implode("|",$Sb)."))?(?: ON UPDATE (".implode("|",$Sb)."))?~",$Tb,$O,PREG_SET_ORDER);foreach($O
as$j){preg_match_all("~$T~",$j[2],$Kb);preg_match_all("~$T~",$j[5],$Lb);$b[idf_unescape($j[1])]=array("db"=>idf_unescape($j[4]!=""?$j[3]:$j[4]),"table"=>idf_unescape($j[4]!=""?$j[4]:$j[3]),"source"=>array_map('idf_unescape',$Kb[0]),"target"=>array_map('idf_unescape',$Lb[0]),"on_delete"=>$j[6],"on_update"=>$j[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){$b[$d["Charset"]][]=$d["Collation"];}ksort($b);foreach($b
as$c=>$a){sort($b[$c]);}return$b;}function
information_schema($sa){global$g;return($g->server_info>=5&&$sa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($sa,$ya){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($sa).($ya?" COLLATE ".q($ya):""));}function
drop_databases($ha){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ha,'idf_escape');}function
rename_database($f,$ya){if(create_database($f,$ya)){$Ca=array();foreach(tables_list()as$k=>$_a){$Ca[]=table($k)." TO ".idf_escape($f).".".table($k);}if(!$Ca||queries("RENAME TABLE ".implode(", ",$Ca))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Mb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$R){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$R["columns"],true)){$Mb="";break;}if($R["type"]=="PRIMARY"){$Mb=" UNIQUE";}}}return" AUTO_INCREMENT$Mb";}function
alter_table($k,$f,$r,$jd,$id,$Ec,$ya,$bb,$hd){$ca=array();foreach($r
as$e){$ca[]=($e[1]?($k!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($k!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ca=array_merge($ca,$jd);$Lc="COMMENT=".q($id).($Ec?" ENGINE=".q($Ec):"").($ya?" COLLATE ".q($ya):"").($bb!=""?" AUTO_INCREMENT=$bb":"").$hd;if($k==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ca)."\n) $Lc");}if($k!=$f){$ca[]="RENAME TO ".table($f);}$ca[]=$Lc;return
queries("ALTER TABLE ".table($k)."\n".implode(",\n",$ca));}function
alter_indexes($k,$ca){foreach($ca
as$c=>$a){$ca[$c]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($k).implode(",",$ca));}function
truncate_tables($ma){return
apply_queries("TRUNCATE TABLE",$ma);}function
drop_views($Rb){return
queries("DROP VIEW ".implode(", ",array_map('table',$Rb)));}function
drop_tables($ma){return
queries("DROP TABLE ".implode(", ",array_map('table',$ma)));}function
move_tables($ma,$Rb,$Lb){$Ca=array();foreach(array_merge($ma,$Rb)as$k){$Ca[]=table($k)." TO ".idf_escape($Lb).".".table($k);}return
queries("RENAME TABLE ".implode(", ",$Ca));}function
trigger($f){$v=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($v);}function
triggers($k){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$_a){global$g,$Cc,$ed,$Ea;$cd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$yc="((".implode("|",array_merge(array_keys($Ea),$cd)).")(?:\\s*\\(((?:[^'\")]*|$Cc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$T="\\s*(".($_a=="FUNCTION"?"":implode("|",$ed)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$yc";$kb=$g->result("SHOW CREATE $_a ".idf_escape($f),2);preg_match("~\\(((?:$T\\s*,?)*)\\)".($_a=="FUNCTION"?"\\s*RETURNS\\s+$yc":"")."\\s*(.*)~is",$kb,$j);$r=array();preg_match_all("~$T\\s*,?~is",$j[1],$O,PREG_SET_ORDER);foreach($O
as$fa){$f=str_replace("``","`",$fa[2]).$fa[3];$r[]=array("field"=>$f,"type"=>strtolower($fa[5]),"length"=>preg_replace_callback("~$Cc~s",'normalize_enum',$fa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fa[8] $fa[7]"))),"full_type"=>$fa[4],"inout"=>strtoupper($fa[1]),"collation"=>strtolower($fa[9]),);}if($_a!="FUNCTION"){return
array("fields"=>$r,"definition"=>$j[11]);}return
array("fields"=>$r,"returns"=>array("type"=>$j[12],"length"=>$j[13],"unsigned"=>$j[15],"collation"=>$j[16]),"definition"=>$j[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($k,$s){return
queries("INSERT INTO ".table($k)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
insert_update($k,$s,$db){foreach($s
as$c=>$a){$s[$c]="$c = $a";}$da=implode(", ",$s);return
queries("INSERT INTO ".table($k)." SET $da ON DUPLICATE KEY UPDATE $da");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$l){return$g->query("EXPLAIN $l");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ad){return
true;}function
create_sql($k,$bb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($k),1);if(!$bb){$b=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$b);}return$b;}function
truncate_sql($k){return"TRUNCATE ".table($k);}function
use_sql($Ja){return"USE ".idf_escape($Ja);}function
trigger_sql($k,$dc){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")),null,"-- ")as$d){$b.="\n".($dc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($kd){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$kd);}$Ra="sql";$Ea=array();$Mc=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binär'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$Ea+=$a;$Mc[$c]=array_keys($a);}$vd=array("unsigned","zerofill","unsigned zerofill");$Uc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$U=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$_d=array("avg","count","count distinct","group_concat","max","min","sum");$Bd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$zb="3.0.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Editor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ha=get_databases(false);return(!$ha?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ha[(information_schema($ha[0])?1:0)]);}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Benutzer<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Passwort<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($wd,$M){return
true;}function
tableName($Ma){return
h($Ma["Comment"]!=""?$Ma["Comment"]:$Ma["Name"]);}function
fieldName($e,$Y=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Ma,$s=""){$q=$Ma["Name"];if(isset($s)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($q).$s).'">'.'Neuer Datensatz'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Seite'.": ".'letzte'."'>&gt;&gt;</a>\n";}function
backwardKeys($k,$ud){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($k)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Kc=preg_quote($ud);$ua="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Kc$ua(.+)|^(.+?)$ua$Kc\$)",$f,$j)?$j[2].$j[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($vc,$d){if($vc){echo"<td>";foreach($vc
as$k=>$tc){foreach($tc["keys"]as$va){$t=ME.'select='.urlencode($k);$o=0;foreach($va
as$V=>$a){$t.=where_link($o++,$V,$d[$a]);}echo"<a href='".h($t)."'>".h($tc["name"])."</a>";$t=ME.'edit='.urlencode($k);foreach($va
as$V=>$a){$t.="&set".urlencode("[".bracket_escape($V)."]")."=".urlencode($d[$a]);}echo"<a href='".h($t)."' title='".'Neuer Datensatz'."'>+</a> ";}}}}function
selectQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->\n";}function
rowDescription($k){foreach(fields($k)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($v,$La){$b=$v;foreach($v[0]as$c=>$a){foreach((array)$La[$c]as$X){if(count($X["source"])==1){$H=idf_escape($X["target"][0]);$f=$this->rowDescription($X["table"]);if($f!=""){$Ac=array();foreach($v
as$d){$Ac[$d[$c]]=exact_value($d[$c]);}$wb=$this->_values[$X["table"]];if(!$wb){$wb=get_key_vals("SELECT $H, $f FROM ".idf_escape($X["table"])." WHERE $H IN (".implode(", ",$Ac).")");}foreach($v
as$x=>$d){if(isset($d[$c])){$b[$x][$c]=(string)$wb[$d[$c]];}}break;}}}}return$b;}function
selectVal($a,$t,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d Byte','%d Bytes'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$t' alt='$b'>";}}if($e["full_type"]=="tinyint(1)"&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0").'" alt="'.h($a).'">';}if($t){$b="<a href='$t'>$b</a>";}if(!$t&&$e["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^([0-9]{2}([0-9]+))-(0?([0-9]+))-(0?([0-9]+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($u,$_){}function
selectSearchPrint($p,$_,$E){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Suchen'."</legend><div>\n";$yb=array();foreach($p
as$c=>$a){$yb[$a["col"]]=$c;}$o=0;foreach(fields($_GET["select"])as$f=>$e){if(ereg("enum",$e["type"])){$ka=$_[$f];$c=$yb[$f];$o--;echo"<div>".h($ka)."<input type='hidden' name='where[$o][col]' value='".h($f)."'>:";enum_input("checkbox"," name='where[$o][val][]'",$e,(array)$p[$c]["val"]);echo"</div>\n";unset($_[$f]);}}foreach($_
as$f=>$ka){$ia=$this->_foreignKeyOptions($_GET["select"],$f);if($ia){$c=$yb[$f];$o--;echo"<div>".h($ka)."<input type='hidden' name='where[$o][col]' value='".h($f)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($ia,$p[$c]["val"],true)."</select></div>\n";unset($_[$f]);}}$o=0;foreach($p
as$a){if(($a["col"]==""||$_[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'beliebig'.")".optionlist($_,$a["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$o][val]' value='".h($a["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='selectAddRow(this);'><option value=''>(".'beliebig'.")".optionlist($_,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Y,$_,$E){$tb=array();foreach($E
as$c=>$R){$Y=array();foreach($R["columns"]as$a){$Y[]=$this->fieldName(array("field"=>$a,"comment"=>$_[$a]));}if(count(array_filter($Y,'strlen'))>1&&$c!="PRIMARY"){$tb[$c]=implode(", ",$Y);}}if($tb){echo'<fieldset><legend>'.'Ordnen'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$tb,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($C){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo
html_select("limit",array("","30","100"),$C),"</div></fieldset>\n";}function
selectLengthPrint($Fa){}function
selectActionPrint(){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>","</div></fieldset>\n";}function
selectEmailPrint($cb,$_){if($cb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.'E-mail'."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".'Von'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Betreff'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$_,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Hinzufügen'."'>\n";echo"<p>".'Anhänge'.": <input type='file' name='email_files[]' onchange=\"var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el); this.onchange = function () { };\">","<p>".(count($cb)==1?'<input type="hidden" name="email_field" value="'.h(key($cb)).'">':html_select("email_field",$cb)),"<input type='submit' name='email' value='".'Abschicken'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($_,$E){return
array(array(),array());}function
selectSearchProcess($r,$E){$b=array();foreach((array)$_GET["where"]as$c=>$p){$oa=$p["col"];$Xa=$p["op"];$a=$p["val"];if(($c<0?"":$oa).$a!=""){$Wa=array();foreach(($oa!=""?array($oa=>$r[$oa]):$r)as$f=>$e){if($oa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){if($oa!=""&&$e["type"]=="enum"){$Wa[]=idf_escape($f)." IN (".implode(", ",array_map('intval',$a)).")";}else{$Jc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,($Jc&&ereg('^[^%]+$',$a)?"%$a%":$a));$Wa[]=idf_escape($f).($i=="NULL"?" IS".($Xa==">="?" NOT":""):(in_array($Xa,$this->operators)?" $Xa":($Xa!="="&&$Jc?" LIKE":" =")))." $i";}}}$b[]=($Wa?"(".implode(" OR ",$Wa).")":"0");}}return$b;}function
selectOrderProcess($r,$E){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$Hb=$_GET["index_order"];foreach(($Hb!=""?array($E[$Hb]):$E)as$R){if($Hb!=""||$R["type"]=="INDEX"){$ka=false;foreach($R["columns"]as$a){if(ereg('date|timestamp',$r[$a]["type"])){$ka=true;break;}}$b=array();foreach($R["columns"]as$a){$b[]=idf_escape($a).($ka?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$La){if($_POST["email_append"]){return
true;}if($_POST["email"]){$rc=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$Ya=$_POST["email_subject"];$W=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Ya.$W",$O);$v=get_rows("SELECT DISTINCT $e".($O[1]?", ".implode(", ",array_map('idf_escape',array_unique($O[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$r=fields($_GET["select"]);foreach($this->rowDescriptions($v,$La)as$d){$Eb=array('{\\'=>'{');foreach($O[1]as$a){$Eb['{$'."$a}"]=$this->editVal($d[$a],$r[$a]);}$Da=$d[$_POST["email_field"]];if(is_email($Da)&&send_email($Da,strtr($Ya,$Eb),strtr($W,$Eb),$_POST["email_from"],$_FILES["email_files"])){$rc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),$rc));}return
false;}function
messageQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->";}function
editFunctions($e){$b=array(""=>($e["null"]||$e["auto_increment"]||$e["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$e["type"])){$b["now"]='now';}if(eregi('_(md5|sha1)$',$e["field"],$j)){$b[]=strtolower($j[1]);}return$b;}function
editInput($k,$e,$P,$i){if($e["type"]=="enum"){return($e["null"]?"<input type='radio'$P value=''".($i||isset($_GET["select"])?"":" checked").">":"");}$ia=$this->_foreignKeyOptions($k,$e["field"]);if($ia){return"<select$P>".optionlist($ia,$i,true)."</select>";}if($e["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$P>";}if(ereg('date|timestamp',$e["type"])){return"<input value='".h($i)."'$P> (".'t.m.[jjjj]'.")";}return'';}function
processInput($e,$i,$y=""){if($y=="now"){return"$y()";}$b=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>[0-9]*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>[0-9]{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$i,$j)){$b=($j["p1"]!=""?$j["p1"]:($j["p2"]!=""?($j["p2"]<70?20:19).$j["p2"]:gmdate("Y")))."-$j[p3]$j[p4]-$j[p5]$j[p6]".end($j);}$b=q($b);if(!ereg('varchar|text',$e["type"])&&$e["full_type"]!="tinyint(1)"&&$i==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$y)){$b="$y($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput($u,$i=""){return"";}function
dumpFormat($u,$i=""){return
html_select("format",array('csv'=>'CSV,','csv;'=>'CSV;'),$i,$u);}function
navigation($jb){global$zb,$ga;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$zb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($zb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($jb=="auth"){$Aa=true;foreach((array)$_SESSION["pwds"]["server"][""]as$B=>$M){if(isset($M)){if($Aa){echo"<p>\n";$Aa=false;}echo"<a href='".h(auth_url("server","",$B))."'>".($B!=""?h($B):"<i>".'leer'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$ga,'">
<input type="submit" name="logout" value="Abmelden">
</p>
</form>
';if($jb!="db"){$G=table_status();if(!$G){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{$this->tablesPrint($G);}}}}function
tablesPrint($ma){echo"<p id='tables'>\n";foreach($ma
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'>".bold($f,$_GET["select"]==$d["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($k,$V){$La=column_foreign_keys($k);foreach((array)$La[$V]as$X){if(count($X["source"])==1){$H=idf_escape($X["target"][0]);$f=$this->rowDescription($X["table"]);if($f!=""){$b=&$this->_values[$X["table"]];if(!isset($b)){$G=table_status($X["table"]);$b=($G["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $H, $f FROM ".idf_escape($X["table"])." ORDER BY 2"));}return$b;}}}}}$m=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($cc,$w="",$Ka=array(),$Zb=""){global$xd,$Ba,$m,$g,$ta;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$Ub=$cc.($Zb!=""?": ".h($Zb):"");$Pa=($Ba?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="de">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Ub.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$m->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\', \'',$Pa,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Pa');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0",'"></script>

<div id="content">
';if(isset($Ka)){$t=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($t?h($t):".").'">'.$ta[DRIVER].'</a> &raquo; ';$t=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Server');if($Ka===false){echo"$D\n";}else{echo"<a href='".($t?h($t):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ka))){echo'<a href="'.h($t."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Ka)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Ka
as$c=>$a){$ka=(is_array($a)?$a[1]:$a);if($ka!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($ka).'</a> &raquo; ';}}}echo"$cc\n";}}echo"<h2>$Ub</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$ha=&get_session("dbs");if(DB!=""&&$ha&&!in_array(DB,$ha,true)){$ha=null;}if($w){echo"<div class='error'>$w</div>\n";}}function
page_footer($jb=""){global$m;echo'</div>

<div id="menu">
';$m->navigation($jb);echo'</div>
';}function
int32($x){while($x>=2147483648){$x-=4294967296;}while($x<=-2147483649){$x+=4294967296;}return(int)$x;}function
long2str($n,$Bb){$wa='';foreach($n
as$a){$wa.=pack('V',$a);}if($Bb){return
substr($wa,0,end($n));}return$wa;}function
str2long($wa,$Bb){$n=array_values(unpack('V*',str_pad($wa,4*ceil(strlen($wa)/4),"\0")));if($Bb){$n[]=strlen($wa);}return$n;}function
xxtea_mx($N,$L,$Q,$S){return
int32((($N>>5&0x7FFFFFF)^$L<<2)+(($L>>3&0x1FFFFFFF)^$N<<4))^int32(($Q^$L)+($S^$N));}function
encrypt_string($Qa,$c){if($Qa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Qa,true);$x=count($n)-1;$N=$n[$x];$L=$n[0];$Db=floor(6+52/($x+1));$Q=0;while($Db-->0){$Q=int32($Q+0x9E3779B9);$Ia=$Q>>2&3;for($J=0;$J<$x;$J++){$L=$n[$J+1];$xa=xxtea_mx($N,$L,$Q,$c[$J&3^$Ia]);$N=int32($n[$J]+$xa);$n[$J]=$N;}$L=$n[0];$xa=xxtea_mx($N,$L,$Q,$c[$J&3^$Ia]);$N=int32($n[$x]+$xa);$n[$x]=$N;}return
long2str($n,false);}function
decrypt_string($Qa,$c){if($Qa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Qa,false);$x=count($n)-1;$N=$n[$x];$L=$n[0];$Db=floor(6+52/($x+1));$Q=int32($Db*0x9E3779B9);while($Q){$Ia=$Q>>2&3;for($J=$x;$J>0;$J--){$N=$n[$J-1];$xa=xxtea_mx($N,$L,$Q,$c[$J&3^$Ia]);$L=int32($n[$J]-$xa);$n[$J]=$L;}$N=$n[$x];$xa=xxtea_mx($N,$L,$Q,$c[$J&3^$Ia]);$L=int32($n[0]-$xa);$n[0]=$L;$Q=int32($Q-0x9E3779B9);}return
long2str($n,true);}$g='';if(!$ta){page_header('Keine Erweiterungen installiert',sprintf('Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$ab)),null);page_footer("auth");exit;}$ga=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ra=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ra[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$qb=$m->permanentLogin();$ra[$c]="$c:".base64_encode($qb?encrypt_string($_POST["password"],$qb):"");cookie("adminer_permanent",implode(" ",$ra));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($ga&&$_POST["token"]!=$ga){page_header('Abmelden','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ra[$c]){unset($ra[$c]);cookie("adminer_permanent",implode(" ",$ra));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($ra&&!$_SESSION["pwds"]){session_regenerate_id();$qb=$m->permanentLogin();foreach($ra
as$c=>$a){list(,$td)=explode(":",$a);list($hb,$D,$B)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$hb][$D][$B]=decrypt_string(base64_decode($td),$qb);}}function
auth_error($mc=null){global$g,$m,$ga;$mb=session_name();$w="";if(!$_COOKIE[$mb]&&$_GET[$mb]&&ini_bool("session.use_only_cookies")){$w='Sitzungen müssen aktiviert sein.';}elseif(isset($_GET["username"])){if(($_COOKIE[$mb]||$_GET[$mb])&&!$ga){$w='Sitzungsdauer abgelaufen, bitte erneut anmelden.';}else{$M=&get_session("pwds");if(isset($M)){$w=h($mc?$mc->getMessage():(is_string($g)?$g:'Ungültige Anmelde-Informationen.'));$M=null;}}}page_header('Login',$w,null);echo"<form action='' method='post'>\n";$m->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$g=connect();}if(is_string($g)||!$m->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ga=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$ga;}$w=($_POST?($_POST["token"]==$ga?"":'CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','"post_max_size"')));$g->select_db($m->database());function
email_header($pd){return"=?UTF-8?B?".base64_encode($pd)."?=";}function
send_email($Da,$Ya,$W,$Ga="",$rb=array()){$F=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$W=str_replace("\n",$F,wordwrap(str_replace("\r","","$W\n")));$ob=uniqid("boundary");$fb="";foreach($rb["error"]as$c=>$a){if(!$a){$fb.="--$ob$F"."Content-Type: ".str_replace("\n","",$rb["type"][$c]).$F."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$rb["name"][$c])."\"$F"."Content-Transfer-Encoding: base64$F$F".chunk_split(base64_encode(file_get_contents($rb["tmp_name"][$c])),76,$F).$F;}}$kc="";$ib="Content-Type: text/plain; charset=utf-8$F"."Content-Transfer-Encoding: 8bit";if($fb){$fb.="--$ob--$F";$kc="--$ob$F$ib$F$F";$ib="Content-Type: multipart/mixed; boundary=\"$ob\"";}$ib.=$F."MIME-Version: 1.0$F"."X-Mailer: Adminer Editor".($Ga?$F."From: ".str_replace("\n","",$Ga):"");return
mail($Da,email_header($Ya),$kc.$W.$fb,$ib);}function
dump_table($k){echo"\xef\xbb\xbf";}function
dump_data($k,$dc,$u=""){global$g;$h=$g->query(($u?$u:"SELECT * FROM ".idf_escape($k)),1);if($h){while($d=$h->fetch_assoc()){dump_csv($d);}}}function
dump_headers($bc){$qa=($bc!=""?friendly_url($bc):"dump");$jc="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$qa.$jc");session_write_close();return$jc;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Sb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Nc=" onclick=\"return confirm('".'Sind Sie sicher ?'."');\"";$ta[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$q=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$q-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($q)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$q=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$da=(isset($_GET["select"])?$_POST["edit"]:$p);$r=fields($q);foreach($r
as$f=>$e){if(!isset($e["privileges"][$da?"update":"insert"])||$m->fieldName($e)==""){unset($r[$f]);}}if($_POST&&!$w&&!isset($_GET["select"])){$K=$_POST["referer"];if($_POST["insert"]){$K=($da?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$K)){$K=ME."select=".urlencode($q);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($q)," WHERE $p"),$K,'Datensatz gelöscht.');}else{$s=array();foreach($r
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$s[idf_escape($f)]=($da?"\n".idf_escape($f)." = $a":$a);}}if($da){if(!$s){redirect($K);}query_redirect("UPDATE".limit1(table($q)." SET".implode(",",$s),"\nWHERE $p"),$K,'Datensatz geändert.');}else{$h=insert_into($q,$s);$gc=($h?last_id():0);queries_redirect($K,sprintf('Datensatz%s hinzugefügt.',($gc?" $gc":"")),$h);}}}$Ua=$m->tableName(table_status($q));page_header(($da?'Ändern':'Hinzufügen'),$w,array("select"=>array($q,$Ua)),$Ua);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$u=array();foreach($r
as$f=>$e){if(isset($e["privileges"]["select"])){$u[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($u){$v=get_rows("SELECT".limit(implode(", ",$u)." FROM ".table($q)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($v)!=1?null:reset($v));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($r){echo"<table cellspacing='0'>\n";foreach($r
as$f=>$e){echo"<tr><th>".$m->fieldName($e);$hc=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?intval($d[$f]):$d[$f]):(!$da&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($hc)?$hc:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$m->editVal($i,$e);}$y=($_POST["save"]?(string)$_POST["function"][$f]:($p&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$y="now";}input($e,$i,$y);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$ga,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($r){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($da?'Speichern und weiter bearbeiten':'Speichern und nächsten hinzufügen')."\">\n";}}if($da){echo"<input type='submit' name='delete' value='".'Entfernen'."'$Nc>\n";}echo'</form>
';}elseif(isset($_GET["select"])){$q=$_GET["select"];$G=table_status($q);$E=indexes($q);$r=fields($q,1);$Sa=column_foreign_keys($q);$qc=array();$_=array();$Fa=null;foreach($r
as$c=>$e){$f=$m->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$_[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Fa=$m->selectLengthProcess();}}$qc+=$e["privileges"];}list($u,$ba)=$m->selectColumnsProcess($_,$E);$p=$m->selectSearchProcess($r,$E);$Y=$m->selectOrderProcess($r,$E);$C=$m->selectLimitProcess();$Ga=($u?implode(", ",$u):"*")."\nFROM ".table($q);$ub=($ba&&count($ba)<count($u)?"\nGROUP BY ".implode(", ",$ba):"").($Y?"\nORDER BY ".implode(", ",$Y):"");if($_POST&&!$w){$ec="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$db=$nb=null;foreach($E
as$R){if($R["type"]=="PRIMARY"){$db=array_flip($R["columns"]);$nb=($u?$db:array());break;}}foreach($u
as$c=>$a){$a=$_GET["columns"][$c];if(!$a["fun"]){unset($nb[$a["col"]]);}}if($_POST["export"]){dump_headers($q);dump_table($q,"");if($_POST["format"]!="sql"){$d=array_keys($r);if($u){$d=array();foreach($u
as$a){$d[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($d);}if(!is_array($_POST["check"])||$nb===array()){$Gb=$p;if(is_array($_POST["check"])){$Gb[]="($ec)";}dump_data($q,"INSERT","SELECT $Ga".($Gb?"\nWHERE ".implode(" AND ",$Gb):"").$ub);}else{$Wb=array();foreach($_POST["check"]as$a){$Wb[]="(SELECT".limit($Ga,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$ub,1).")";}dump_data($q,"INSERT",implode(" UNION ALL ",$Wb));}exit;}if(!$m->selectEmailProcess($p,$Sa)){if($_POST["save"]||$_POST["delete"]){$h=true;$la=0;$l=table($q);$s=array();if(!$_POST["delete"]){foreach($_
as$f=>$a){$a=process_input($r[$f]);if($a!==null){if($_POST["clone"]){$s[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$s[]=idf_escape($f)." = $a";}}}$l.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($q):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$lb="UPDATE";if($_POST["delete"]){$lb="DELETE";$l="FROM $l";}if($_POST["clone"]){$lb="INSERT";$l="INTO $l";}if($_POST["all"]||($nb===array()&&$_POST["check"])||count($ba)<count($u)){$h=queries($lb." $l".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $ec"));$la=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$h=queries($lb.limit1($l,"\nWHERE ".where_check($a)));if(!$h){break;}$la+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$la),$h);}elseif(!$_POST["import"]){if(!$_POST["val"]){$w='Doppelklick zum Bearbeiten des Wertes.';}else{$h=true;$la=0;foreach($_POST["val"]as$pa=>$d){$s=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$s[]=idf_escape($c)." = ".$m->processInput($r[$c],$a);}$h=queries("UPDATE".limit1(table($q)." SET ".implode(", ",$s)," WHERE ".where_check($pa).($p?" AND ".implode(" AND ",$p):"")));if(!$h){break;}$la+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$la),$h);}}elseif(is_string($I=get_file("csv_file",true))){$I=preg_replace("~^\xEF\xBB\xBF~",'',$I);$h=true;$va=array_keys($r);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$I,$O);$la=count($O[0]);begin();$ua=($_POST["separator"]=="csv"?",":";");foreach($O[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ua]*)$ua~",$a.$ua,$_b);if(!$c&&!array_diff($_b[1],$va)){$va=$_b[1];$la--;}else{$s=array();foreach($_b[1]as$o=>$oa){$s[idf_escape($va[$o])]=($oa==""&&$r[$va[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$oa))));}$h=insert_update($q,$s,$db);if(!$h){break;}}}if($h){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),$la),$h);queries("ROLLBACK");}else{$w=upload_error($I);}}}$Ua=$m->tableName($G);page_header('Daten zeigen von'.": $Ua",$w);session_write_close();$s=null;if(isset($qc["insert"])){$s="";foreach((array)$_GET["where"]as$a){if(count($Sa[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$s.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$m->selectLinks($G,$s);if(!$_){echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($r?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($q).'">',"</div>\n";$m->selectColumnsPrint($u,$_);$m->selectSearchPrint($p,$_,$E);$m->selectOrderPrint($Y,$_,$E);$m->selectLimitPrint($C);$m->selectLengthPrint($Fa);$m->selectActionPrint($Fa);echo"</form>\n";$z=$_GET["page"];if($z=="last"){$aa=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));$z=floor(($aa-1)/$C);}$l="SELECT".limit((intval($C)&&$ba&&count($ba)<count($u)&&$Ra=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ga,($p?"\nWHERE ".implode(" AND ",$p):"").$ub,($C!=""?intval($C):null),($z?$C*$z:0),"\n");echo$m->selectQuery($l);$h=$g->query($l);if(!$h){echo"<p class='error'>".error()."\n";}else{if($Ra=="mssql"){$h->seek($C*$z);}$Za=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$v=array();while($d=$h->fetch_assoc()){$v[]=$d;}if($_GET["page"]!="last"){$aa=(intval($C)&&$ba&&count($ba)<count($u)?($Ra=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($l) x")):count($v));}if(!$v){echo"<p class='message'>".'Keine Daten.'."\n";}else{$Gc=$m->backwardKeys($q,$Ua);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$ba&&$u?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ändern'."</a>");$Ib=array();$U=array();reset($u);$Y=1;foreach($v[0]as$c=>$a){$a=$_GET["columns"][key($u)];$e=$r[$u?$a["col"]:$c];$f=($e?$m->fieldName($e,$Y):"*");if($f!=""){$Y++;$Ib[$c]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($_GET["order"][0]==$c&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$U[$c]=$a["fun"];next($u);}$xb=array();if($_GET["modify"]){foreach($v
as$d){foreach($d
as$c=>$a){$xb[$c]=max($xb[$c],min(40,strlen(utf8_decode($a))));}}}echo($Gc?"<th>".'Relationen':"")."</thead>\n";foreach($m->rowDescriptions($v,$Sa)as$x=>$d){$sb=unique_array($v[$x],$E);$pa="";foreach($sb
as$c=>$a){$pa.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$ba&&$u?"":"<td>".checkbox("check[]",substr($pa,1),in_array(substr($pa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ba)<count($u)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($q).$pa)."'>".'ändern'."</a>"));foreach($d
as$c=>$a){if(isset($Ib[$c])){$e=$r[$c];if($a!=""&&(!isset($Za[$c])||$Za[$c]!="")){$Za[$c]=(is_email($a)?$Ib[$c]:"");}$t="";$a=$m->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$t=h(ME.'download='.urlencode($q).'&field='.urlencode($c).$pa);}if($a==""){$a="&nbsp;";}elseif($Fa!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,intval($Fa)));}else{$a=h($a);}if(!$t){foreach((array)$Sa[$c]as$ja){if(count($Sa[$c])==1||count($ja["source"])==1){foreach($ja["source"]as$o=>$Kb){$t.=where_link($o,$ja["target"][$o],$v[$x][$Kb]);}$t=h(($ja["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ja["db"]),ME):ME).'select='.urlencode($ja["table"]).$t);break;}}}if($c=="COUNT(*)"){$t=h(ME."select=".urlencode($q));$o=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$sb)){$t.=h(where_link($o++,$n["col"],$n["val"],$n["op"]));}}foreach($sb
as$S=>$n){$t.=h(where_link($o++,$S,$n,(isset($n)?"=":"IS NULL")));}}}if(!$t){if(is_email($a)){$t="mailto:$a";}if($Pa=is_url($d[$c])){$t=($Pa=="http"&&$Ba?$d[$c]:"$Pa://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$H=h("val[$pa][".bracket_escape($c)."]");$i=$_POST["val"][$pa][bracket_escape($c)];$wc=h(isset($i)?$i:$d[$c]);$uc=strpos($a,"<i>...</i>");$xc=is_utf8($a)&&!$uc&&$v[$x][$c]==$d[$c]&&!$U[$c];$Ic=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$xc)||isset($i)?"<td>".($Ic?"<textarea name='$H' cols='30' rows='".(substr_count($d[$c],"\n")+1)."'>$wc</textarea>":"<input name='$H' value='$wc' size='$xb[$c]'>"):"<td id='$H' ondblclick=\"".($xc?"selectDblClick(this, event".($Ic?", 1":"").")":"alert('".h($uc?'Vergrössern Sie die Textlänge um den Wert ändern zu können.':'Benutzen Sie den Link zum editieren dieses Wertes.')."')").";\">".$m->selectVal($a,$t,$e));}}$m->backwardKeysPrint($Gc,$v[$x]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$vb);if($v||$z){$Ab=true;if($_GET["page"]!="last"&&intval($C)&&count($ba)>=count($u)&&($aa>=$C||$z)){$aa=$G["Rows"];if(!isset($aa)||$p||2*$z*$C>$aa||($G["Engine"]=="InnoDB"&&$aa<1e4)){ob_flush();flush();$aa=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));}else{$Ab=false;}}echo"<p class='pages'>";if(intval($C)&&$aa>$C){$Cb=floor(($aa-1)/$C);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Seite'."', '".($z+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Seite'."</a>:".pagination(0,$z).($z>5?" ...":"");for($o=max(1,$z-4);$o<min($Cb,$z+5);$o++){echo
pagination($o,$z);}echo($z+5<$Cb?" ...":"").($Ab?pagination($Cb,$z):' <a href="'.h(remove_from_uri()."&page=last").'">'.'letzte'."</a>");}echo" (".($Ab?"":"~ ").lang(array('%d Datensatz','%d Datensätze'),$aa).") ".checkbox("all",1,0,'Gesamtergebnis')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Ändern</legend><div>
<input type="submit" value="Speichern" title="Doppelklick zum Bearbeiten des Wertes.">
<input type="submit" name="edit" value="Ändern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$aa,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Exportieren');echo$m->dumpOutput(1,$vb["output"])." ".$m->dumpFormat(1,$vb["format"]);echo" <input type='submit' name='export' value='".'Exportieren'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Importiere CSV',!$v);echo"<input type='hidden' name='token' value='$ga'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$vb["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>\n","</div></fieldset>\n";$m->selectEmailPrint(array_filter($Za,'strlen'),$_);echo"</form>\n";}}}else{page_header('Server',"",false);echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Suchen'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabelle'.'<td>'.'Datensätze'."</thead>\n";foreach(table_status()as$k=>$d){$f=$m->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$k,in_array($k,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($k).'">'.h($f).'</a>';$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($k)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();