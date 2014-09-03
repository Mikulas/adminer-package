<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$nd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($nd){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$Vc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($Vc){$$a=$Vc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className+=' js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
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
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function textareaKeydown(target,event,tab,button){if(tab&&event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){if(button){button.click();}else{target.form.submit();}}
return true;}
function selectDblClick(td,event,text){td.ondblclick=function(){};var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;input.onkeydown=function(event){return textareaKeydown(input,event||window.event);};}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.x,event.y);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveStart('character',pos);range.select();}}
function bodyLoad(version){}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$e;return$e;}function
idf_unescape($A){$pc=substr($A,-1);return
str_replace($pc.$pc,$pc,substr($A,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Ma){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Ma)){foreach($a
as$pa=>$r){unset($Ma[$d][$pa]);if(is_array($r)){$Ma[$d][stripslashes($pa)]=$r;$Ma[]=&$Ma[$d][stripslashes($pa)];}else{$Ma[$d][stripslashes($pa)]=($nd?$r:stripslashes($r));}}}}}function
bracket_escape($A,$Kd=false){static$gd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($A,($Kd?array_flip($gd):$gd));}function
h($v){return
htmlspecialchars($v,ENT_QUOTES);}function
nbsp($v){return(trim($v)!=""?h($v):"&nbsp;");}function
nl_br($v){return
str_replace("\n","<br>",$v);}function
checkbox($g,$o,$qb,$Ac="",$Mc=""){static$Y=0;$Y++;$b="<input type='checkbox'".($g?" name='$g' value='".h($o)."'":"").($qb?" checked":"").($Mc?" onclick=\"$Mc\"":"")." id='checkbox-$Y'>";return($Ac!=""?"<label for='checkbox-$Y'>$b".h($Ac)."</label>":$b);}function
optionlist($Ga,$Pd=null,$Oc=false){$b="";foreach($Ga
as$pa=>$r){if(is_array($r)){$b.='<optgroup label="'.h($pa).'">';}foreach((is_array($r)?$r:array($pa=>$r))as$d=>$a){$b.='<option'.($Oc||is_string($d)?' value="'.h($d).'"':'').(($Oc||is_string($d)?(string)$d:$a)===$Pd?' selected':'').'>'.h($a);}if(is_array($r)){$b.='</optgroup>';}}return$b;}function
html_select($g,$Ga,$o="",$Ta=true){if($Ta){return"<select name='".h($g)."'".(is_string($Ta)?" onchange=\"$Ta\"":"").">".optionlist($Ga,$o)."</select>";}$b="";foreach($Ga
as$d=>$a){$b.="<label><input type='radio' name='".h($g)."' value='".h($d)."'".($d==$o?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($Ic=""){return" onclick=\"return confirm('".lang(0).($Ic?" (' + $Ic + ')":"")."');\"";}function
js_escape($v){return
addcslashes($v,"\r\n'\\/");}function
ini_bool($Id){$a=ini_get($Id);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($v){global$e;return$e->quote($v);}function
get_vals($j,$u=0){global$e;$b=array();$i=$e->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$u];}}return$b;}function
get_key_vals($j,$L=null){global$e;if(!is_object($L)){$L=$e;}$b=array();$i=$L->query($j);while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}return$b;}function
get_rows($j,$L=null,$p="<p class='error'>"){global$e;if(!is_object($L)){$L=$e;}$b=array();$i=$L->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$p&&(headers_sent()||ob_get_level())){echo$p.error()."\n";}return$b;}function
unique_array($c,$V){foreach($V
as$S){if(ereg("PRIMARY|UNIQUE",$S["type"])){$b=array();foreach($S["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($l){global$_a;$b=array();foreach((array)$l["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)||$_a=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$l["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$ld);remove_slashes(array(&$ld));return
where($ld);}function
where_link($q,$u,$o,$Hd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($u)."&where%5B$q%5D%5Bop%5D=".urlencode($Hd)."&where%5B$q%5D%5Bval%5D=".urlencode($o);}function
cookie($g,$o){global$db;$tb=array($g,(ereg("\n",$o)?"":$o),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$db);if(version_compare(PHP_VERSION,'5.2.0')>=0){$tb[]=true;}return
call_user_func_array('setcookie',$tb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Eb,$D,$C){global$xa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($xa))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Eb!="server"||$D!=""?urlencode($Eb)."=".urlencode($D)."&":"")."username=".urlencode($C).($k[2]?"&$k[2]":"");}function
redirect($fa,$qa=null){if(isset($qa)){restart_session();$_SESSION["messages"][]=$qa;}if(isset($fa)){header("Location: ".($fa!=""?$fa:"."));exit;}}function
query_redirect($j,$fa,$qa,$Cb=true,$Cd=true,$pd=false){global$e,$p,$m;if($Cd){$pd=!$e->query($j);}$sc="";if($j){$sc=$m->messageQuery($j);}if($pd){$p=error().$sc;return
false;}if($Cb){redirect($fa,$qa.$sc);}return
true;}function
queries($j=null){global$e;static$Fa=array();if(!isset($j)){return
implode(";\n",$Fa);}$Fa[]=$j;return$e->query($j);}function
apply_queries($j,$B,$sd='table'){foreach($B
as$h){if(!queries("$j ".$sd($h))){return
false;}}return
true;}function
queries_redirect($fa,$qa,$Cb){return
query_redirect(queries(),$fa,$qa,$Cb,false,!$Cb);}function
remove_from_uri($Da=""){return
substr(preg_replace("~(?<=[?&])($Da".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($P,$qd){return" ".($P==$qd?$P+1:'<a href="'.h(remove_from_uri("page").($P?"&page=$P":"")).'">'.($P+1)."</a>");}function
get_file($d,$ad=false){$aa=$_FILES[$d];if(!$aa||$aa["error"]){return$aa["error"];}return
file_get_contents($ad&&ereg('\\.gz$',$aa["name"])?"compress.zlib://$aa[tmp_name]":($ad&&ereg('\\.bz2$',$aa["name"])?"compress.bzip2://$aa[tmp_name]":$aa["tmp_name"]));}function
upload_error($p){$ed=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?lang(1).($ed?" ".lang(2,$ed):""):lang(3));}function
odd($b=' class="odd"'){static$q=0;if(!$b){$q=-1;}return($q++%
2?$b:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($v,$ua=80,$Bd=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$ua})($)?)u",$v,$k)){preg_match("(^([\t\r\n -~]{0,$ua})($)?)",$v,$k);}return
h($k[1]).$Bd.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Ma,$zd=array()){while(list($d,$a)=each($Ma)){if(is_array($a)){foreach($a
as$pa=>$r){$Ma[$d."[$pa]"]=$r;}}elseif(!in_array($d,$zd)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$m;$b=array();foreach($m->foreignKeys($h)as$K){foreach($K["source"]as$a){$b[$a][]=$K;}}return$b;}function
enum_input($E,$la,$f,$o){preg_match_all("~'((?:[^']|'')*)'~",$f["length"],$ba);$b="";foreach($ba[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$qb=(is_int($o)?$o==$q+1:(is_array($o)?in_array($q+1,$o):$o===$a));$b.=" <label><input type='$E'$la value='".($q+1)."'".($qb?' checked':'').'>'.h($a).'</label>';}return$b;}function
input($f,$o,$N){global$X,$m,$_a;$g=h(bracket_escape($f["field"]));echo"<td class='function'>";$ja=(isset($_GET["select"])?array("orig"=>lang(4)):array())+$m->editFunctions($f);$la=" name='fields[$g]'";if($f["type"]=="enum"){echo
nbsp($ja[""])."<td>".$m->editInput($_GET["edit"],$f,$la,$o);}else{$Ua=0;foreach($ja
as$d=>$a){if($d===""||!$a){break;}$Ua++;}$Ta=($Ua?" onchange=\"var f = this.form['function[".js_escape($g)."]']; if ($Ua > f.selectedIndex) f.selectedIndex = $Ua;\"":"");$la.=$Ta;echo(count($ja)>1?html_select("function[$g]",$ja,!isset($N)||in_array($N,$ja)||isset($ja[$N])?$N:""):nbsp(reset($ja))).'<td>';$cd=$m->editInput($_GET["edit"],$f,$la,$o);if($cd!=""){echo$cd;}elseif($f["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$f["length"],$ba);foreach($ba[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$qb=(is_int($o)?($o>>$q)&1:in_array($a,explode(",",$o),true));echo" <label><input type='checkbox' name='fields[$g][$q]' value='".(1<<$q)."'".($qb?' checked':'')."$Ta>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$f["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$g'$Ta>";}elseif(ereg('text|lob',$f["type"])){echo"<textarea ".($_a!="sqlite"||ereg("\n",$o)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$la onkeydown='return textareaKeydown(this, event);'>".h($o).'</textarea>';}else{$dc=(!ereg('int',$f["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$f["length"],$k)?((ereg("binary",$f["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$f["unsigned"]?1:0)):($X[$f["type"]]?$X[$f["type"]]+($f["unsigned"]?0:1):0));echo"<input value='".h($o)."'".($dc?" maxlength='$dc'":"").(ereg('char|binary',$f["type"])&&$dc>20?" size='40'":"")."$la>";}}}function
process_input($f){global$m;$A=bracket_escape($f["field"]);$N=$_POST["function"][$A];$o=$_POST["fields"][$A];if($f["type"]=="enum"){if($o==-1){return
false;}if($o==""){return"NULL";}return+$o;}if($f["auto_increment"]&&$o==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($f["type"]=="set"){return
array_sum((array)$o);}if(ereg('blob|bytea|raw|file',$f["type"])&&ini_bool("file_uploads")){$aa=get_file("fields-$A");if(!is_string($aa)){return
false;}return
q($aa);}return$m->processInput($f,$o,$N);}function
search_tables(){global$m,$e;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Yb=false;foreach(table_status()as$h=>$F){$g=$m->tableName($F);if(isset($F["Engine"])&&$g!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$i=$e->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$m->selectSearchProcess(fields($h),array())),1));if($i->fetch_row()){if(!$Yb){echo"<ul>\n";$Yb=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($g)."</a>\n";}}}echo($Yb?"</ul>":"<p class='message'>".lang(5))."\n";}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$c)."\n";}function
apply_sql_function($N,$u){return($N?($N=="unixepoch"?"DATETIME($u, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$u)"):$u);}function
password_file(){$Sb=ini_get("upload_tmp_dir");if(!$Sb){if(function_exists('sys_get_temp_dir')){$Sb=sys_get_temp_dir();}else{$R=@tempnam("","");if(!$R){return
false;}$Sb=dirname($R);unlink($R);}}$R="$Sb/adminer.key";$b=@file_get_contents($R);if($b){return$b;}$fc=@fopen($R,"w");if($fc){$b=md5(uniqid(mt_rand(),true));fwrite($fc,$b);fclose($fc);}return$b;}function
is_mail($hb){$fd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$da="$fd+(\\.$fd+)*@($xb?\\.)+$xb";return
preg_match("(^$da(,\\s*$da)*\$)i",$hb);}function
is_url($v){$xb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($xb?\\.)+$xb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$v,$k)?strtolower($k[1]):"");}function
print_fieldset($Y,$wd,$vd=false){echo"<fieldset><legend><a href='#fieldset-$Y' onclick=\"return !toggle('fieldset-$Y');\">$wd</a></legend><div id='fieldset-$Y'".($vd?"":" class='hidden'").">\n";}function
bold($v,$ud){return($ud?"<b>$v</b>":$v);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$db=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$tb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$db);if(version_compare(PHP_VERSION,'5.2.0')>=0){$tb[]=true;}call_user_func_array('session_set_cookie_params',$tb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$bb=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','ca'=>'Català','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
lang($A,$Ub=null){global$ta,$U;$ib=$U[$A];if(is_array($ib)&&$ib){$xd=($Ub==1||(!$Ub&&$ta=='fr')?0:((!$Ub||$Ub>=5)&&ereg('cs|sk|ru',$ta)?2:1));$ib=$ib[$xd];}$Xc=func_get_args();array_shift($Xc);return
vsprintf((isset($ib)?$ib:$A),$Xc);}function
switch_lang(){global$ta,$bb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(6).": ".html_select("lang",$bb,$ta,"this.form.submit();")," <input type='submit' value='".lang(7)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$ta="en";if(isset($bb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$ta=$_COOKIE["adminer_lang"];}elseif(isset($bb[$_SESSION["lang"]])){$ta=$_SESSION["lang"];}else{$Vb=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ba,PREG_SET_ORDER);foreach($ba
as$k){$Vb[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Vb);foreach($Vb
as$d=>$Pb){if(isset($bb[$d])){$ta=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($Vb[$d])&&isset($bb[$d])){$ta=$d;break;}}}switch($ta){case"en":$U=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','empty','[yyyy]-mm-dd','Logout','ltr','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Increase Text length to modify this value.','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','CSV Import','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$U=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','prázdné','d.m.[rrrr]','Odhlásit','ltr','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty zvyšte Délku textů.','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import CSV','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$U=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','prázdne','d.m.[rrrr]','Odhlásiť','ltr','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty zvýšte Dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import CSV','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Neplatné schéma.');break;case"nl":$U=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','leeg','dd-mm-[jjjj]','Uitloggen','ltr','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','CSV Import','Importeren','Zoeken in database','Tabel','Rijen','.','Ongeldig schema.');break;case"es":$U=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','ningúno','dd/mm/[aaaa]','Logout','ltr','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar CSV','Importar','Buscar datos en tablas','Tabla','Registros',' ','Esquema inválido.');break;case"de":$U=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','leer','t.m.[jjjj]','Abmelden','ltr','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importiere CSV','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Schema nicht gültig.');break;case"fr":$U=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Editeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','vide','jj/mm/[aaaa]','Déconnexion','ltr','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Augmentez la Longueur de texte affiché pour modifier cette valeur.','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer CSV','Importer','Rechercher dans les tables','Table','Lignes',',','Schéma invalide.');break;case"it":$U=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','vuoto','dd/mm/[yyyy]','Esci','ltr','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Aumenta la Lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa da CSV','Importa','Cerca nelle tabelle','Tabella','Righe','.','Schema non valido.');break;case"et":$U=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada',array('Saadetud kirju: %d.','Saadetud kirju: %d.'),'nüüd','tühi','d.m.[yyyy]','Logi välja','ltr','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks suurenda Tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane',array('%d rida','%d rida'),'Täielikud tulemused','Kloon','Ekspordi','Impordi CSV','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Sobimatu skeema.');break;case"hu":$U=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválaszt','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','üres','[yyyy].m.d','Kilépés','ltr','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','Nincs megjeleníthető eredmény.','szerkeszt','Reláció','Növeld a Szöveg hosszát, hogy módosítani tudd ezt az értéket.','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utoljára',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','CSV importálása','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Érvénytelen séma.');break;case"ca":$U=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','buit','dd/mm/[aaaa]','Desconnecta','ltr','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d fila.','S\'han importat %d files.'),'Impossible seleccionar la taula','No hi ha cap fila.','edita','Relacions','Incrementa la Longitud del text per modificar aquest valor.','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d fila','%d files'),'tots els resultats','Clona','Exporta','Importa CSV','Importa','Cerca dades en les taules','Taula','Files',',','Esquema invàlid.');break;case"ru":$U=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','пусто','дд.мм.[гггг]','Выйти','ltr','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Увеличь Длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт CSV','Импорт','Поиск в таблицах','Таблица','Строк',' ','Неправильная схема.');break;case"zh":$U=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','空','[yyyy].mm.dd','注销','ltr','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','CSV 导入','导入','在表中搜索数据','表','行数',',','非法模式。');break;case"zh-tw":$U=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','空值','[yyyy].mm.dd','登出','ltr','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','增加字串長度來修改。','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入 CSV','匯入','在資料庫搜尋','資料表','行數',',','無效的資料表結構。');break;case"ja":$U=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','空','[yyyy].mm.dd','ログアウト','ltr','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','編集枠を広げる','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','CSV インポート','インポート','データを検索する','テーブル','行数',',','無効なスキーマ');break;case"ta":$U=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','வெறுமை (empty)','dd/mm/[yyyy]','வெளியேறு','ltr','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','வ‌ரிசை இல்லை.','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற, டெக்ஸ்ட் நீள‌த்தினை அதிக‌ரிக்க‌வும்.','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இம்போர்ட் CSV','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அமைப்புமுறை ச‌ரியான‌த‌ல்ல‌ (Invalid Schema).');break;case"ar":$U=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الغمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','فارغ','jj/mm/[aaaa]','تسجيل الخروج','rtl','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','لا توجد نتائج.','تعديل','علاقات','قم بزيادة طول النص لتعديل القيمة.','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد CSV','إستيراد','بحث في الجداول','جدول','الأسطر',',','مخطط خاطئ.');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($yd,$C,$G,$Ad='auth_error'){set_exception_handler($Ad);parent::__construct($yd,$C,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ba=false){$i=parent::query($j);if(!$i){$td=$this->errorInfo();$this->error=$td[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch();return$c[$f];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$xa=array();$xa["sqlite"]="SQLite 3";$xa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$vb=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->_link=new
SQLite3($R);$nc=$this->_link->version();$this->server_info=$nc["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($v){return"'".$this->_link->escapeString($v)."'";}function
store_result(){return$this->_result;}function
result($j,$f=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetchArray();return$c[$f];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$u=$this->_offset++;$E=$this->_result->columnType($u);return(object)array("name"=>$this->_result->columnName($u),"type"=>$E,"charsetnr"=>($E==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($R);}function
query($j,$Ba=false){$_d=($Ba?"unbufferedQuery":"query");$i=@$this->_link->$_d($j,SQLITE_BOTH,$p);if(!$i){$this->error=$p;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($v){return"'".sqlite_escape_string($v)."'";}function
store_result(){return$this->_result;}function
result($j,$f=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetch();return$c[$f];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$b=array();foreach($c
as$d=>$a){$b[($d[0]=='"'?idf_unescape($d):$d)]=$a;}return$b;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$g=$this->_result->fieldName($this->_offset++);$da='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($da\\.)?$da\$~",$g,$k)){$h=($k[3]!=""?$k[3]:idf_unescape($k[2]));$g=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$g,"orgname"=>$g,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($R){$this->dsn(DRIVER.":$R","","");}}}class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($R){if(is_readable($R)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$R)?$R:dirname($_SERVER["SCRIPT_FILENAME"])."/$R")." AS a")){$this->Min_SQLite($R);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}function
idf_escape($A){return'"'.str_replace('"','""',$A).'"';}function
table($A){return
idf_escape($A);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$l,$_,$T=0,$ka=" "){return" $j$l".(isset($_)?$ka."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){global$e;return($e->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$l,1):" $j$l");}function
db_collation($z,$_b){global$e;return$e->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($O){return
array();}function
table_status($g=""){$b=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($g!=""?" AND name = ".q($g):""))as$c){$c["Auto_increment"]="";$b[$c["Name"]]=$c;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$c){$b[$c["name"]]["Auto_increment"]=$c["seq"];}return($g!=""?$b[$g]:$b);}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){global$e;return!$e->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$b=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$c){$E=strtolower($c["type"]);$fb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$E)?"integer":(eregi("char|clob|text",$E)?"text":(eregi("blob",$E)?"blob":(eregi("real|floa|doub",$E)?"real":"numeric")))),"full_type"=>$E,"default"=>(ereg("'(.*)'",$fb,$k)?str_replace("''","'",$k[1]):($fb=="NULL"?null:$fb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$E)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($h,$L=null){$b=array();$oa=array();foreach(fields($h)as$f){if($f["primary"]){$oa[]=$f["field"];}}if($oa){$b[""]=array("type"=>"PRIMARY","columns"=>$oa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$rd){$b[$c["name"]]["columns"][]=$rd["name"];}}return$b;}function
foreign_keys($h){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$c){$K=&$b[$c["id"]];if(!$K){$K=$c;}$K["source"][]=$c["from"];$K["target"][]=$c["to"];}return$b;}function
view($g){global$e;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($g))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($z){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
check_sqlite_name($g){global$e;$Wc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Wc)\$~",$g)){$e->error=lang(8,str_replace("|",", ",$Wc));return
false;}return
true;}function
create_database($z,$H){global$e;if(file_exists($z)){$e->error=lang(9);return
false;}if(!check_sqlite_name($z)){return
false;}$w=new
Min_SQLite($z);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($O){global$e;$e->Min_SQLite(":memory:");foreach($O
as$z){if(!@unlink($z)){$e->error=lang(9);return
false;}}return
true;}function
rename_database($g,$H){global$e;if(!check_sqlite_name($g)){return
false;}$e->Min_SQLite(":memory:");$e->error=lang(9);return@rename(DB,$g);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$g,$t,$Xa,$Ra,$gb,$H,$va,$lb){$s=array();foreach($t
as$f){if($f[1]){$s[]=($h!=""&&$f[0]==""?"ADD ":"  ").implode($f[1]);}}$s=array_merge($s,$Xa);if($h!=""){foreach($s
as$a){if(!queries("ALTER TABLE ".table($h)." $a")){return
false;}}if($h!=$g&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($g))){return
false;}}elseif(!queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)")){return
false;}if($va){queries("UPDATE sqlite_sequence SET seq = $va WHERE name = ".q($g));}return
true;}function
alter_indexes($h,$s){foreach($s
as$a){if(!queries(($a[2]?"DROP INDEX":"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h))." $a[1]")){return
false;}}return
true;}function
truncate_tables($B){return
apply_queries("DELETE FROM",$B);}function
drop_views($ca){return
apply_queries("DROP VIEW",$ca);}function
drop_tables($B){return
apply_queries("DROP TABLE",$B);}function
move_tables($B,$ca,$Ka){return
false;}function
trigger($g){global$e;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($g)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$g,"Statement"=>$k[3]);}function
triggers($h){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($g,$E){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$n){return
queries("INSERT INTO ".table($h).($n?" (".implode(", ",array_keys($n)).")\nVALUES (".implode(", ",$n).")":"DEFAULT VALUES"));}function
insert_update($h,$n,$oa){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($n)).") VALUES (".implode(", ",$n).")");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ROWID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ld){return
true;}function
create_sql($h,$va){global$e;return$e->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($Q){}function
trigger_sql($h,$rc){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$e;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$e->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$Od){list($d,$a)=explode("=",$Od,2);$b[$d]=$a;}return$b;}function
support($La){return
ereg('^(view|trigger|variables|status|dump)$',$La);}$_a="sqlite";$X=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ea=array_keys($X);$Wb=array();$ob=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ja=array("hex","length","lower","round","unixepoch","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$Ob=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$xa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$vb=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Qd,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($D,$C,$G){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' user='".addcslashes($C,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$nc=pg_version($this->_link);$this->server_info=$nc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($v){return"'".pg_escape_string($this->_link,$v)."'";}function
select_db($Q){if($Q==DB){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($Q,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Ba=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}return
pg_fetch_result($i->_result,0,$f);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$u=$this->_offset++;$b=new
stdClass;if(function_exists('pg_field_table')){$b->orgtable=pg_field_table($this->_result,$u);}$b->name=pg_field_name($this->_result,$u);$b->orgname=$b->name;$b->type=pg_field_type($this->_result,$u);$b->charsetnr=($b->type=="bytea"?63:0);return$b;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($D,$C,$G){$v="pgsql:host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($v.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$C,$G);return
true;}function
select_db($Q){return(DB==$Q);}function
close(){}}}function
idf_escape($A){return'"'.str_replace('"','""',$A).'"';}function
table($A){return
idf_escape($A);}function
connect(){global$m;$e=new
Min_DB;$ia=$m->credentials();if($e->connect($ia[0],$ia[1],$ia[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$l,$_,$T=0,$ka=" "){return" $j$l".(isset($_)?$ka."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($z,$_b){global$e;return$e->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($O){return
array();}function
table_status($g=""){$b=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($g!=""?" AND relname = ".q($g):""))as$c){$b[$c["Name"]]=$c;}return($g!=""?$b[$g]:$b);}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){return
true;}function
fields($h){$b=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$c){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$b[$c["field"]]=$c;}return$b;}function
indexes($h,$L=null){global$e;if(!is_object($L)){$L=$e;}$b=array();$bd=$L->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$J=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $bd AND attnum > 0",$L);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $bd AND ci.oid = i.indexrelid",$L)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Rd){$b[$c["relname"]]["columns"][]=$J[$Rd];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($h){$b=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($h))as$c){$K=&$b[$c["constraint_name"]];if(!$K){$K=$c;}$K["source"][]=$c["column_name"];$K["target"][]=$c["ref"];}return$b;}function
view($g){global$e;return
array("select"=>$e->result("SELECT pg_get_viewdef(".q($g).")"));}function
collations(){return
array();}function
information_schema($z){return($z=="information_schema");}function
error(){global$e;$b=h($e->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$b,$k)){$b=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($b);}function
exact_value($a){return
q($a);}function
create_database($z,$H){return
queries("CREATE DATABASE ".idf_escape($z).($H?" ENCODING ".idf_escape($H):""));}function
drop_databases($O){global$e;$e->close();return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($g,$H){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($g));}function
auto_increment(){return"";}function
alter_table($h,$g,$t,$Xa,$Ra,$gb,$H,$va,$lb){$s=array();$Fa=array();foreach($t
as$f){$u=idf_escape($f[0]);$a=$f[1];if(!$a){$s[]="DROP $u";}else{$wc=$a[5];unset($a[5]);if(isset($a[6])&&$f[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($f[0]==""){$s[]=($h!=""?"ADD ":"  ").implode($a);}else{if($u!=$a[0]){$Fa[]="ALTER TABLE ".table($h)." RENAME $u TO $a[0]";}$s[]="ALTER $u TYPE$a[1]";if(!$a[6]){$s[]="ALTER $u ".($a[3]?"SET$a[3]":"DROP DEFAULT");$s[]="ALTER $u ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($f[0]!=""||$wc!=""){$Fa[]="COMMENT ON COLUMN ".table($h).".$a[0] IS ".($wc!=""?substr($wc,9):"''");}}}$s=array_merge($s,$Xa);if($h==""){array_unshift($Fa,"CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)");}elseif($s){array_unshift($Fa,"ALTER TABLE ".table($h)."\n".implode(",\n",$s));}if($h!=""&&$h!=$g){$Fa[]="ALTER TABLE ".table($h)." RENAME TO ".table($g);}if($h!=""||$Ra!=""){$Fa[]="COMMENT ON TABLE ".table($g)." IS ".q($Ra);}if($va!=""){}foreach($Fa
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($h,$s){$Oa=array();$za=array();foreach($s
as$a){if($a[0]!="INDEX"){$Oa[]=($a[2]?"\nDROP CONSTRAINT ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}elseif($a[2]){$za[]=$a[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h)." $a[1]")){return
false;}}return((!$Oa||queries("ALTER TABLE ".table($h).implode(",",$Oa)))&&(!$za||queries("DROP INDEX ".implode(", ",$za))));}function
truncate_tables($B){return
queries("TRUNCATE ".implode(", ",array_map('table',$B)));return
true;}function
drop_views($ca){return
queries("DROP VIEW ".implode(", ",array_map('table',$ca)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$ca,$Ka){foreach($B
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($Ka))){return
false;}}foreach($ca
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($Ka))){return
false;}}return
true;}function
trigger($g){$y=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($g));return
reset($y);}function
triggers($h){$b=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$c){$b[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($h,$n){return
queries("INSERT INTO ".table($h).($n?" (".implode(", ",array_keys($n)).")\nVALUES (".implode(", ",$n).")":"DEFAULT VALUES"));}function
insert_update($h,$n,$oa){global$e;$W=array();$l=array();foreach($n
as$d=>$a){$W[]="$d = $a";if(isset($oa[idf_unescape($d)])){$l[]="$d = $a";}}return($l&&queries("UPDATE ".table($h)." SET ".implode(", ",$W)." WHERE ".implode(" AND ",$l))&&$e->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($n)).") VALUES (".implode(", ",$n).")");}function
last_id(){return
0;}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$e;return$e->result("SELECT current_schema()");}function
set_schema($tc){global$e,$X,$Ea;$b=$e->query("SET search_path TO ".idf_escape($tc));foreach(types()as$E){if(!isset($X[$E])){$X[$E]=0;$Ea[lang(10)][]=$E;}}return$b;}function
use_sql($Q){return"\connect ".idf_escape($Q);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($La){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$La);}$_a="pgsql";$X=array();$Ea=array();foreach(array(lang(11)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(12)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(13)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(14)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(15)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(16)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$X+=$a;$Ea[$d]=array_keys($a);}$Wb=array();$ob=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ja=array("char_length","lower","round","to_hex","to_timestamp","upper");$Xb=array("avg","count","count distinct","max","min","sum");$Ob=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$xa["oracle"]="Oracle";if(isset($_GET["oracle"])){$vb=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Qd,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($D,$C,$G){$this->_link=@oci_new_connect($C,$G,$D);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$p=oci_error();$this->error=$p["message"];return
false;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
select_db($Q){return
true;}function
query($j,$Ba=false){$i=oci_parse($this->_link,$j);if(!$i){$p=oci_error($this->_link);$this->error=$p["message"];return
false;}set_error_handler(array($this,'_error'));$b=@oci_execute($i);restore_error_handler();if($b){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$b;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$f=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$f);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($c){foreach((array)$c
as$d=>$a){if(is_a($a,'OCI-Lob')){$c[$d]=$a->load();}}return$c;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$u=$this->_offset++;$b=new
stdClass;$b->name=oci_field_name($this->_result,$u);$b->orgname=$b->name;$b->type=oci_field_type($this->_result,$u);$b->charsetnr=(ereg("raw|blob|bfile",$b->type)?63:0);return$b;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($D,$C,$G){}function
select_db($Q){}}}function
idf_escape($A){return'"'.str_replace('"','""',$A).'"';}function
table($A){return
idf_escape($A);}function
connect(){global$m;$e=new
Min_DB;$ia=$m->credentials();if($e->connect($ia[0],$ia[1],$ia[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$l,$_,$T=0,$ka=" "){return" $j$l".(isset($_)?($l?" AND":$ka."WHERE").($T?" rownum > $T AND":"")." rownum <= ".($_+$T):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($z,$_b){global$e;return$e->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($O){return
array();}function
table_status($g=""){$b=array();$sb=q($g);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($g!=""?" AND table_name = $sb":"")."
UNION SELECT view_name, 'view' FROM user_views".($g!=""?" WHERE view_name = $sb":""))as$c){if($g!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($F){return$F["Engine"]=="view";}function
fk_support($F){return
true;}function
fields($h){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$c){$E=$c["DATA_TYPE"];$ua="$c[DATA_PRECISION],$c[DATA_SCALE]";if($ua==","){$ua=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$E.($ua?"($ua)":""),"type"=>strtolower($E),"length"=>$ua,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($h,$L=null){return
array();}function
view($g){$y=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($g));return
reset($y);}function
collations(){return
array();}function
information_schema($z){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
explain($e,$j){$e->query("EXPLAIN PLAN FOR $j");return$e->query("SELECT * FROM plan_table");}function
alter_table($h,$g,$t,$Xa,$Ra,$gb,$H,$va,$lb){$s=$za=array();foreach($t
as$f){$a=$f[1];if($a&&$f[0]!=""&&idf_escape($f[0])!=$a[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($f[0])." TO $a[0]");}if($a){$s[]=($h!=""?($f[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($h!=""?")":"");}else{$za[]=idf_escape($f[0]);}}if($h==""){return
queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n)");}return(!$s||queries("ALTER TABLE ".table($h)."\n".implode("\n",$s)))&&(!$za||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$za).")"))&&($h==$g||queries("ALTER TABLE ".table($h)." RENAME TO ".table($g)));}function
foreign_keys($h){return
array();}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($ca){return
apply_queries("DROP VIEW",$ca);}function
drop_tables($B){return
apply_queries("DROP TABLE",$B);}function
begin(){return
true;}function
insert_into($h,$n){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($n)).")\nVALUES (".implode(", ",$n).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ld){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$y=get_rows('SELECT * FROM v$instance');return
reset($y);}function
support($La){return
ereg("view|drop_col|variables|status",$La);}$_a="oracle";$X=array();$Ea=array();foreach(array(lang(11)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(12)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(13)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(14)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$X+=$a;$Ea[$d]=array_keys($a);}$Wb=array();$ob=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$ja=array("length","lower","round","upper");$Xb=array("avg","count","count distinct","max","min","sum");$Ob=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$xa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$vb=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$p){$this->error.="$p[message]\n";}$this->error=rtrim($this->error);}function
connect($D,$C,$G){$this->_link=@sqlsrv_connect($D,array("UID"=>$C,"PWD"=>$G));if($this->_link){$Td=sqlsrv_server_info($this->_link);$this->server_info=$Td['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
select_db($Q){return$this->query("USE $Q");}function
query($j,$Ba=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
false;}return$this->store_result($i);}function
multi_query($j){$this->_result=sqlsrv_query($this->_link,$j);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($i=null){if(!$i){$i=$this->_result;}if(sqlsrv_field_metadata($i)){return
new
Min_Result($i);}$this->affected_rows=sqlsrv_rows_affected($i);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($j,$f=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->fetch_row();return$c[$f];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($c){foreach((array)$c
as$d=>$a){if(is_a($a,'DateTime')){$c[$d]=$a->format("Y-m-d H:i:s");}}return$c;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$f=$this->_fields[$this->_offset++];$b=new
stdClass;$b->name=$f["Name"];$b->orgname=$f["Name"];$b->type=($f["Type"]==1?254:0);return$b;}function
seek($T){for($q=0;$q<$T;$q++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($D,$C,$G){$this->_link=@mssql_connect($D,$C,$G);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
select_db($Q){return
mssql_select_db($Q);}function
query($j,$Ba=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$f=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$f);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$b=mssql_fetch_field($this->_result);$b->orgtable=$b->table;$b->orgname=$b->name;return$b;}function
seek($T){mssql_data_seek($this->_result,$T);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($A){return"[".str_replace("]","]]",$A)."]";}function
table($A){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($A);}function
connect(){global$m;$e=new
Min_DB;$ia=$m->credentials();if($e->connect($ia[0],$ia[1],$ia[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$l,$_,$T=0,$ka=" "){return(isset($_)?" TOP (".($_+$T).")":"")." $j$l";}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($z,$_b){global$e;return$e->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($z));}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($O){global$e;$b=array();foreach($O
as$z){$e->select_db($z);$b[$z]=$e->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$b;}function
table_status($g=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($g!=""?" AND name = ".q($g):""))as$c){if($g!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($F){return$F["Engine"]=="VIEW";}function
fk_support($F){return
true;}function
fields($h){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$c){$E=$c["type"];$ua=(ereg("char|binary",$E)?$c["max_length"]:($E=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$E.($ua?"($ua)":""),"type"=>$E,"length"=>$ua,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($h,$L=null){global$e;if(!is_object($L)){$L=$e;}$b=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$L)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
view($g){global$e;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$e->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($g))));}function
collations(){$b=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$H){$b[ereg_replace("_.*","",$H)][]=$H;}return$b;}function
information_schema($z){return
false;}function
error(){global$e;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$e->error)));}function
exact_value($a){return
q($a);}function
create_database($z,$H){return
queries("CREATE DATABASE ".idf_escape($z).(eregi('^[a-z0-9_]+$',$H)?" COLLATE $H":""));}function
drop_databases($O){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$O)));}function
rename_database($g,$H){if(eregi('^[a-z0-9_]+$',$H)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $H");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($g));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"");}function
alter_table($h,$g,$t,$Xa,$Ra,$gb,$H,$va,$lb){$s=array();foreach($t
as$f){$u=idf_escape($f[0]);$a=$f[1];if(!$a){$s["DROP"][]=" COLUMN $f[0]";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($f[0]==""){$s["ADD"][]="\n  ".implode("",$a);}else{unset($a[6]);if($u!=$a[0]){queries("EXEC sp_rename ".q(table($h).".$u").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$s["ALTER COLUMN ".implode("",$a)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($g)." (".implode(",",(array)$s["ADD"])."\n)");}if($h!=$g){queries("EXEC sp_rename ".q(table($h)).", ".q($g));}foreach($s
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($g)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($h,$s){$S=array();$za=array();foreach($s
as$a){if($a[2]){if($a[0]=="PRIMARY"){$za[]=$a[1];}else{$S[]="$a[1] ON ".table($h);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $a[1]")){return
false;}}return(!$S||queries("DROP INDEX ".implode(", ",$S)))&&(!$za||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$za)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$n){return
queries("INSERT INTO ".table($h).($n?" (".implode(", ",array_keys($n)).")\nVALUES (".implode(", ",$n).")":"DEFAULT VALUES"));}function
insert_update($h,$n,$oa){$W=array();$l=array();foreach($n
as$d=>$a){$W[]="$d = $a";if(isset($oa[idf_unescape($d)])){$l[]="$d = $a";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$n).")) AS source (c".implode(", c",range(1,count($n))).") ON ".implode(" AND ",$l)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$W)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($n)).") VALUES (".implode(", ",$n).");");}function
last_id(){global$e;return$e->result("SELECT SCOPE_IDENTITY()");}function
explain($e,$j){$e->query("SET SHOWPLAN_ALL ON");$b=$e->query($j);$e->query("SET SHOWPLAN_ALL OFF");return$b;}function
foreign_keys($h){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$c){$K=&$b[$c["FK_NAME"]];$K["table"]=$c["PKTABLE_NAME"];$K["source"][]=$c["FKCOLUMN_NAME"];$K["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($ca){return
queries("DROP VIEW ".implode(", ",array_map('table',$ca)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$ca,$Ka){return
apply_queries("ALTER SCHEMA ".idf_escape($Ka)." TRANSFER",array_merge($B,$ca));}function
trigger($g){$y=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($g));$b=reset($y);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
triggers($h){$b=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$c){$b[$c["name"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$e;if($_GET["ns"]!=""){return$_GET["ns"];}return$e->result("SELECT SCHEMA_NAME()");}function
set_schema($tc){return
true;}function
use_sql($Q){return"USE ".idf_escape($Q);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($La){return
ereg('^(scheme|trigger|view|drop_col)$',$La);}$_a="mssql";$X=array();$Ea=array();foreach(array(lang(11)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(12)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(13)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(14)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$X+=$a;$Ea[$d]=array_keys($a);}$Wb=array();$ob=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$ja=array("len","lower","round","upper");$Xb=array("avg","count","count distinct","max","min","sum");$Ob=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$xa=array("server"=>"MySQL")+$xa;if(!defined("DRIVER")){$vb=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$C,$G){mysqli_report(MYSQLI_REPORT_OFF);list($Nd,$Fb)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$Nd:ini_get("mysqli.default_host")),("$D$C"!=""?$C:ini_get("mysqli.default_user")),("$D$C$G"!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($Fb)?$Fb:ini_get("mysqli.default_port")),(!is_numeric($Fb)?$Fb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$f];}function
quote($v){return"'".$this->escape_string($v)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$C,$G){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$C"!=""?$C:ini_get("mysql.default_user")),("$D$C$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($v){return"'".mysql_real_escape_string($v,$this->_link)."'";}function
select_db($Q){return
mysql_select_db($Q,$this->_link);}function
query($j,$Ba=false){$i=@($Ba?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}return
mysql_result($i->_result,0,$f);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result,$this->_offset++);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$C,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$C,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($Q){return$this->query("USE ".idf_escape($Q));}function
query($j,$Ba=false){$this->setAttribute(1000,!$Ba);return
parent::query($j,$Ba);}}}function
idf_escape($A){return"`".str_replace("`","``",$A)."`";}function
table($A){return
idf_escape($A);}function
connect(){global$m;$e=new
Min_DB;$ia=$m->credentials();if($e->connect($ia[0],$ia[1],$ia[2])){$e->query("SET SQL_QUOTE_SHOW_CREATE=1");return$e;}return$e->error;}function
get_databases($Md=true){$b=&get_session("dbs");if(!isset($b)){if($Md){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($j,$l,$_,$T=0,$ka=" "){return" $j$l".(isset($_)?$ka."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($z,$_b){global$e;$b=null;$Oa=$e->result("SHOW CREATE DATABASE ".idf_escape($z),1);if(preg_match('~ COLLATE ([^ ]+)~',$Oa,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Oa,$k)){$b=$_b[$k[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$e;return$e->result("SELECT USER()");}function
tables_list(){global$e;return
get_key_vals("SHOW".($e->server_info>=5?" FULL":"")." TABLES");}function
count_tables($O){$b=array();foreach($O
as$z){$b[$z]=count(get_vals("SHOW TABLES IN ".idf_escape($z)));}return$b;}function
table_status($g=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($g!=""?" LIKE ".q(addcslashes($g,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($g!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($F){return!isset($F["Rows"]);}function
fk_support($F){return($F["Engine"]=="InnoDB");}function
fields($h){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($h,$L=null){global$e;if(!is_object($L)){$L=$e;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$L)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($h){global$e,$qc;static$da='`(?:[^`]|``)+`';$b=array();$dd=$e->result("SHOW CREATE TABLE ".table($h),1);if($dd){preg_match_all("~CONSTRAINT ($da) FOREIGN KEY \\(((?:$da,? ?)+)\\) REFERENCES ($da)(?:\\.($da))? \\(((?:$da,? ?)+)\\)(?: ON DELETE (".implode("|",$qc)."))?(?: ON UPDATE (".implode("|",$qc)."))?~",$dd,$ba,PREG_SET_ORDER);foreach($ba
as$k){preg_match_all("~$da~",$k[2],$vc);preg_match_all("~$da~",$k[5],$Ka);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$vc[0]),"target"=>array_map('idf_unescape',$Ka[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
view($g){global$e;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$e->result("SHOW CREATE VIEW ".table($g),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$c){$b[$c["Charset"]][]=$c["Collation"];}ksort($b);foreach($b
as$d=>$a){sort($b[$d]);}return$b;}function
information_schema($z){global$e;return($e->server_info>=5&&$z=="information_schema");}function
error(){global$e;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$e->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($z,$H){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($z).($H?" COLLATE ".q($H):""));}function
drop_databases($O){set_session("dbs",null);return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($g,$H){if(create_database($g,$H)){$jb=array();foreach(tables_list()as$h=>$E){$jb[]=table($h)." TO ".idf_escape($g).".".table($h);}if(!$jb||queries("RENAME TABLE ".implode(", ",$jb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$zc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$S){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$S["columns"],true)){$zc="";break;}if($S["type"]=="PRIMARY"){$zc=" UNIQUE";}}}return" AUTO_INCREMENT$zc";}function
alter_table($h,$g,$t,$Xa,$Ra,$gb,$H,$va,$lb){$s=array();foreach($t
as$f){$s[]=($f[1]?($h!=""?($f[0]!=""?"CHANGE ".idf_escape($f[0]):"ADD"):" ")." ".implode($f[1]).($h!=""?" $f[2]":""):"DROP ".idf_escape($f[0]));}$s=array_merge($s,$Xa);$Yc="COMMENT=".q($Ra).($gb?" ENGINE=".q($gb):"").($H?" COLLATE ".q($H):"").($va!=""?" AUTO_INCREMENT=$va":"").$lb;if($h==""){return
queries("CREATE TABLE ".table($g)." (\n".implode(",\n",$s)."\n) $Yc");}if($h!=$g){$s[]="RENAME TO ".table($g);}$s[]=$Yc;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$s));}function
alter_indexes($h,$s){foreach($s
as$d=>$a){$s[$d]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($h).implode(",",$s));}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($ca){return
queries("DROP VIEW ".implode(", ",array_map('table',$ca)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$ca,$Ka){$jb=array();foreach(array_merge($B,$ca)as$h){$jb[]=table($h)." TO ".idf_escape($Ka).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$jb));}function
trigger($g){$y=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($g));return
reset($y);}function
triggers($h){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($g,$E){global$e,$Uc,$Dd,$X;$Gd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Tc="((".implode("|",array_merge(array_keys($X),$Gd)).")(?:\\s*\\(((?:[^'\")]*|$Uc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$da="\\s*(".($E=="FUNCTION"?"":implode("|",$Dd)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Tc";$Oa=$e->result("SHOW CREATE $E ".idf_escape($g),2);preg_match("~\\(((?:$da\\s*,?)*)\\)".($E=="FUNCTION"?"\\s*RETURNS\\s+$Tc":"")."\\s*(.*)~is",$Oa,$k);$t=array();preg_match_all("~$da\\s*,?~is",$k[1],$ba,PREG_SET_ORDER);foreach($ba
as$Da){$g=str_replace("``","`",$Da[2]).$Da[3];$t[]=array("field"=>$g,"type"=>strtolower($Da[5]),"length"=>preg_replace_callback("~$Uc~s",'normalize_enum',$Da[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Da[8] $Da[7]"))),"full_type"=>$Da[4],"inout"=>strtoupper($Da[1]),"collation"=>strtolower($Da[9]),);}if($E!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$n){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($n)).")\nVALUES (".implode(", ",$n).")");}function
insert_update($h,$n,$oa){foreach($n
as$d=>$a){$n[$d]="$d = $a";}$W=implode(", ",$n);return
queries("INSERT INTO ".table($h)." SET $W ON DUPLICATE KEY UPDATE $W");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($tc){return
true;}function
create_sql($h,$va){global$e;$b=$e->result("SHOW CREATE TABLE ".table($h),1);if(!$va){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($Q){return"USE ".idf_escape($Q);}function
trigger_sql($h,$rc){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$c){$b.="\n".($rc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($La){global$e;return!ereg("scheme|sequence|type".($e->server_info<5.1?"|event|partitioning".($e->server_info<5?"|view|routine|trigger":""):""),$La);}$_a="sql";$X=array();$Ea=array();foreach(array(lang(11)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(12)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(13)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(14)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(17)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$X+=$a;$Ea[$d]=array_keys($a);}$Wb=array("unsigned","zerofill","unsigned zerofill");$ob=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$ja=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Xb=array("avg","count","count distinct","group_concat","max","min","sum");$Ob=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ic="3.1.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return
lang(18);}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$e;$O=get_databases(false);return(!$O?$e->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$O[(information_schema($O[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(19),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(20),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(21)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(22))."\n";}function
login($Wd,$G){return
true;}function
tableName($yb){return
h($yb["Comment"]!=""?$yb["Comment"]:$yb["Name"]);}function
fieldName($f,$ya=0){return
h($f["comment"]!=""?$f["comment"]:$f["field"]);}function
selectLinks($yb,$n=""){$x=$yb["Name"];if(isset($n)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($x).$n).'">'.lang(23)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(24)."'>&gt;&gt;</a>\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$Jd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($h)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$g=$this->tableName(table_status($d));if($g!=""){$sb=preg_quote($Jd);$ka="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$sb$ka(.+)|^(.+?)$ka$sb\$)",$g,$k)?$k[2].$k[3]:$g);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($od,$c){if($od){echo"<td>";foreach($od
as$h=>$md){foreach($md["keys"]as$ab){$w=ME.'select='.urlencode($h);$q=0;foreach($ab
as$u=>$a){$w.=where_link($q++,$u,$c[$a]);}echo"<a href='".h($w)."'>".h($md["name"])."</a>";$w=ME.'edit='.urlencode($h);foreach($ab
as$u=>$a){$w.="&set".urlencode("[".bracket_escape($u)."]")."=".urlencode($c[$a]);}echo"<a href='".h($w)."' title='".lang(23)."'>+</a> ";}}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($h){foreach(fields($h)as$f){if($f["type"]=="varchar"){return
idf_escape($f["field"]);}}return"";}function
rowDescriptions($y,$mb){$b=$y;foreach($y[0]as$d=>$a){foreach((array)$mb[$d]as$wa){if(count($wa["source"])==1){$Y=idf_escape($wa["target"][0]);$g=$this->rowDescription($wa["table"]);if($g!=""){$hd=array();foreach($y
as$c){$hd[$c[$d]]=exact_value($c[$d]);}$kc=$this->_values[$wa["table"]];if(!$kc){$kc=get_key_vals("SELECT $Y, $g FROM ".idf_escape($wa["table"])." WHERE $Y IN (".implode(", ",$hd).")");}foreach($y
as$M=>$c){if(isset($c[$d])){$b[$M][$d]=(string)$kc[$c[$d]];}}break;}}}}return$b;}function
selectVal($a,$w,$f){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$f["type"])&&!is_utf8($a)){$b=lang(25,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$w' alt='$b'>";}}if($f["full_type"]=="tinyint(1)"&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.1.0":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.1.0").'" alt="'.h($a).'">';}if($w){$b="<a href='$w'>$b</a>";}if(!$w&&$f["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$f["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$f["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$f){if(ereg('date|timestamp',$f["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(26),$a);}return(ereg("binary",$f["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($I,$J){}function
selectSearchPrint($l,$J,$V){$l=(array)$_GET["where"];echo'<fieldset><legend>'.lang(27)."</legend><div>\n";$jc=array();foreach($l
as$d=>$a){$jc[$a["col"]]=$d;}$q=0;foreach(fields($_GET["select"])as$g=>$f){if(ereg("enum",$f["type"])){$Na=$J[$g];$d=$jc[$g];$q--;echo"<div>".h($Na)."<input type='hidden' name='where[$q][col]' value='".h($g)."'>:",enum_input("checkbox"," name='where[$q][val][]'",$f,(array)$l[$d]["val"]);echo"</div>\n";unset($J[$g]);}}foreach($J
as$g=>$Na){$Ga=$this->_foreignKeyOptions($_GET["select"],$g);if($Ga){$d=$jc[$g];$q--;echo"<div>".h($Na)."<input type='hidden' name='where[$q][col]' value='".h($g)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Ga,$l[$d]["val"],true)."</select></div>\n";unset($J[$g]);}}$q=0;foreach($l
as$a){if(($a["col"]==""||$J[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".lang(28).")".optionlist($J,$a["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$q][val]' value='".h($a["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='selectAddRow(this);'><option value=''>(".lang(28).")".optionlist($J,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input name='where[$q][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ya,$J,$V){$gc=array();foreach($V
as$d=>$S){$ya=array();foreach($S["columns"]as$a){$ya[]=$this->fieldName(array("field"=>$a,"comment"=>$J[$a]));}if(count(array_filter($ya,'strlen'))>1&&$d!="PRIMARY"){$gc[$d]=implode(", ",$ya);}}if($gc){echo'<fieldset><legend>'.lang(29)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$gc,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(30)."</legend><div>";echo
html_select("limit",array("","30","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($cb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(31)."</legend><div>","<input type='submit' value='".lang(32)."'>","</div></fieldset>\n";}function
selectEmailPrint($Hb,$J){if($Hb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.lang(33)."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".lang(34).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(35).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75' onkeydown='return textareaKeydown(this, event, false, this.form.email);'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$J,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(36)."'>\n";echo"<p>".lang(37).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Hb)==1?'<input type="hidden" name="email_field" value="'.h(key($Hb)).'">':html_select("email_field",$Hb)),"<input type='submit' name='email' value='".lang(38)."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($J,$V){return
array(array(),array());}function
selectSearchProcess($t,$V){$b=array();foreach((array)$_GET["where"]as$d=>$l){$Ha=$l["col"];$Jb=$l["op"];$a=$l["val"];if(($d<0?"":$Ha).$a!=""){$Nb=array();foreach(($Ha!=""?array($Ha=>$t[$Ha]):$t)as$g=>$f){if($Ha!=""||is_numeric($a)||!ereg('int|float|double|decimal',$f["type"])){if($Ha!=""&&$f["type"]=="enum"){$Nb[]=idf_escape($g)." IN (".implode(", ",array_map('intval',$a)).")";}else{$id=ereg('char|text|enum|set',$f["type"]);$o=$this->processInput($f,($id&&ereg('^[^%]+$',$a)?"%$a%":$a));$Nb[]=idf_escape($g).($o=="NULL"?" IS".($Jb==">="?" NOT":""):(in_array($Jb,$this->operators)?" $Jb":($Jb!="="&&$id?" LIKE":" =")))." $o";}}}$b[]=($Nb?"(".implode(" OR ",$Nb).")":"0");}}return$b;}function
selectOrderProcess($t,$V){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$lc=$_GET["index_order"];foreach(($lc!=""?array($V[$lc]):$V)as$S){if($lc!=""||$S["type"]=="INDEX"){$Na=false;foreach($S["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Na=true;break;}}$b=array();foreach($S["columns"]as$a){$b[]=idf_escape($a).($Na?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($l,$mb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$jd=0;if($_POST["all"]||$_POST["check"]){$f=idf_escape($_POST["email_field"]);$Bb=$_POST["email_subject"];$qa=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Bb.$qa",$ba);$y=get_rows("SELECT DISTINCT $f".($ba[1]?", ".implode(", ",array_map('idf_escape',array_unique($ba[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $f IS NOT NULL AND $f != ''".($l?" AND ".implode(" AND ",$l):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($y,$mb)as$c){$bc=array('{\\'=>'{');foreach($ba[1]as$a){$bc['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$hb=$c[$_POST["email_field"]];if(is_mail($hb)&&send_mail($hb,strtr($Bb,$bc),strtr($qa,$bc),$_POST["email_from"],$_FILES["email_files"])){$jd++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(39,$jd));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($f){$b=array(""=>($f["null"]||$f["auto_increment"]||$f["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$f["type"])){$b["now"]=lang(40);}if(eregi('_(md5|sha1)$',$f["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($h,$f,$la,$o){if($f["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$la value='-1' checked><i>".lang(4)."</i></label> ":"").($f["null"]?"<label><input type='radio'$la value=''".($o||isset($_GET["select"])?"":" checked")."><i>".lang(41)."</i></label>":"").enum_input("radio",$la,$f,$o);}$Ga=$this->_foreignKeyOptions($h,$f["field"]);if($Ga){return"<select$la>".optionlist($Ga,$o,true)."</select>";}if($f["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($o?$o:1).'"'.($o?' checked':'')."$la>";}if(ereg('date|timestamp',$f["type"])){return"<input value='".h($o)."'$la> (".lang(42).")";}return'';}function
processInput($f,$o,$N=""){if($N=="now"){return"$N()";}$b=$o;if(ereg('date|timestamp',$f["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(26)))).'(.*))',$o,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=q($b);if(!ereg('char|text',$f["type"])&&$f["full_type"]!="tinyint(1)"&&$o==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$N)){$b="$N($b)";}if(ereg("binary",$f["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($h,$rc,$j){global$e;$i=$e->query($j,1);if($i){while($c=$i->fetch_assoc()){dump_csv($c);}}}function
dumpHeaders($kd){$R=($kd!=""?friendly_url($kd):"dump");$Zc="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$R.$Zc");session_write_close();return$Zc;}function
navigation($zb){global$ic,$Ca;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$ic,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ic,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($zb=="auth"){$Ua=true;foreach((array)$_SESSION["pwds"]["server"][""]as$C=>$G){if(isset($G)){if($Ua){echo"<p>\n";$Ua=false;}echo"<a href='".h(auth_url("server","",$C))."'>".($C!=""?h($C):"<i>".lang(41)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$Ca,'">
<input type="submit" name="logout" value="',lang(43),'">
</p>
</form>
';if($zb!="db"&&$zb!="ns"){$F=table_status();if(!$F){echo"<p class='message'>".lang(5)."\n";}else{$this->tablesPrint($F);}}}}function
tablesPrint($B){echo"<p id='tables'>\n";foreach($B
as$c){$g=$this->tableName($c);if(isset($c["Engine"])&&$g!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'>".bold($g,$_GET["select"]==$c["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($h,$u){$mb=column_foreign_keys($h);foreach((array)$mb[$u]as$wa){if(count($wa["source"])==1){$Y=idf_escape($wa["target"][0]);$g=$this->rowDescription($wa["table"]);if($g!=""){$b=&$this->_values[$wa["table"]];if(!isset($b)){$F=table_status($wa["table"]);$b=($F["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $Y, $g FROM ".idf_escape($wa["table"])." ORDER BY 2"));}return$b;}}}}}$m=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($_c,$p="",$rb=array(),$Ec=""){global$ta,$db,$m,$e,$xa;header("Content-Type: text/html; charset=utf-8");$m->headers();$Hc=$_c.($Ec!=""?": ".h($Ec):"");$pb=($db?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$ta,'" dir="',lang(44),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Hc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$m->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.1.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.1.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="',lang(44),'" onload="bodyLoad(\'',(is_object($e)?substr($e->server_info,0,3):""),'\', \'',$pb,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$pb');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.1.0",'"></script>

<div id="content">
';if(isset($rb)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($w?h($w):".").'">'.$xa[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):lang(45));if($rb===false){echo"$D\n";}else{echo"<a href='".($w?h($w):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($rb))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($rb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($rb
as$d=>$a){$Na=(is_array($a)?$a[1]:$a);if($Na!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Na).'</a> &raquo; ';}}}echo"$_c\n";}}echo"<h2>$Hc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$O=&get_session("dbs");if(DB!=""&&$O&&!in_array(DB,$O,true)){$O=null;}if($p){echo"<div class='error'>$p</div>\n";}}function
page_footer($zb=""){global$m;echo'</div>

';switch_lang();echo'<div id="menu">
';$m->navigation($zb);echo'</div>
';}function
int32($M){while($M>=2147483648){$M-=4294967296;}while($M<=-2147483649){$M+=4294967296;}return(int)$M;}function
long2str($r,$ec){$Wa='';foreach($r
as$a){$Wa.=pack('V',$a);}if($ec){return
substr($Wa,0,end($r));}return$Wa;}function
str2long($Wa,$ec){$r=array_values(unpack('V*',str_pad($Wa,4*ceil(strlen($Wa)/4),"\0")));if($ec){$r[]=strlen($Wa);}return$r;}function
xxtea_mx($ha,$ea,$ma,$pa){return
int32((($ha>>5&0x7FFFFFF)^$ea<<2)+(($ea>>3&0x1FFFFFFF)^$ha<<4))^int32(($ma^$ea)+($pa^$ha));}function
encrypt_string($nb,$d){if($nb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$r=str2long($nb,true);$M=count($r)-1;$ha=$r[$M];$ea=$r[0];$Pb=floor(6+52/($M+1));$ma=0;while($Pb-->0){$ma=int32($ma+0x9E3779B9);$ub=$ma>>2&3;for($ga=0;$ga<$M;$ga++){$ea=$r[$ga+1];$Va=xxtea_mx($ha,$ea,$ma,$d[$ga&3^$ub]);$ha=int32($r[$ga]+$Va);$r[$ga]=$ha;}$ea=$r[0];$Va=xxtea_mx($ha,$ea,$ma,$d[$ga&3^$ub]);$ha=int32($r[$M]+$Va);$r[$M]=$ha;}return
long2str($r,false);}function
decrypt_string($nb,$d){if($nb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$r=str2long($nb,false);$M=count($r)-1;$ha=$r[$M];$ea=$r[0];$Pb=floor(6+52/($M+1));$ma=int32($Pb*0x9E3779B9);while($ma){$ub=$ma>>2&3;for($ga=$M;$ga>0;$ga--){$ha=$r[$ga-1];$Va=xxtea_mx($ha,$ea,$ma,$d[$ga&3^$ub]);$ea=int32($r[$ga]-$Va);$r[$ga]=$ea;}$ha=$r[$M];$Va=xxtea_mx($ha,$ea,$ma,$d[$ga&3^$ub]);$ea=int32($r[0]-$Va);$r[0]=$ea;$ma=int32($ma-0x9E3779B9);}return
long2str($r,true);}$e='';$Ca=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Pa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Pa[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Kb=$m->permanentLogin();$Pa[$d]="$d:".base64_encode($Kb?encrypt_string($_POST["password"],$Kb):"");cookie("adminer_permanent",implode(" ",$Pa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Ca&&$_POST["token"]!=$Ca){page_header(lang(43),lang(46));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Pa[$d]){unset($Pa[$d]);cookie("adminer_permanent",implode(" ",$Pa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(47));}}elseif($Pa&&!$_SESSION["pwds"]){session_regenerate_id();$Kb=$m->permanentLogin();foreach($Pa
as$d=>$a){list(,$Ed)=explode(":",$a);list($Eb,$D,$C)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Eb][$D][$C]=decrypt_string(base64_decode($Ed),$Kb);}}function
auth_error($Jc=null){global$e,$m,$Ca;$Ib=session_name();$p="";if(!$_COOKIE[$Ib]&&$_GET[$Ib]&&ini_bool("session.use_only_cookies")){$p=lang(48);}elseif(isset($_GET["username"])){if(($_COOKIE[$Ib]||$_GET[$Ib])&&!$Ca){$p=lang(49);}else{$G=&get_session("pwds");if(isset($G)){$p=h($Jc?$Jc->getMessage():(is_string($e)?$e:lang(50)));$G=null;}}}page_header(lang(21),$p,null);echo"<form action='' method='post'>\n";$m->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(51),lang(52,implode(", ",$vb)),false);page_footer("auth");exit;}$e=connect();}if(is_string($e)||!$m->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Ca=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Ca;}$p=($_POST?($_POST["token"]==$Ca?"":lang(46)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(53,'"post_max_size"')));$e->select_db($m->database());function
email_header($Fd){return"=?UTF-8?B?".base64_encode($Fd)."?=";}function
send_mail($hb,$Bb,$qa,$eb="",$Gb=array()){$Z=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$qa=str_replace("\n",$Z,wordwrap(str_replace("\r","","$qa\n")));$Mb=uniqid("boundary");$Lb="";foreach($Gb["error"]as$d=>$a){if(!$a){$Lb.="--$Mb$Z"."Content-Type: ".str_replace("\n","",$Gb["type"][$d]).$Z."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Gb["name"][$d])."\"$Z"."Content-Transfer-Encoding: base64$Z$Z".chunk_split(base64_encode(file_get_contents($Gb["tmp_name"][$d])),76,$Z).$Z;}}$Bc="";$Db="Content-Type: text/plain; charset=utf-8$Z"."Content-Transfer-Encoding: 8bit";if($Lb){$Lb.="--$Mb--$Z";$Bc="--$Mb$Z$Db$Z$Z";$Db="Content-Type: multipart/mixed; boundary=\"$Mb\"";}$Db.=$Z."MIME-Version: 1.0$Z"."X-Mailer: Adminer Editor".($eb?$Z."From: ".str_replace("\n","",$eb):"");return
mail($hb,email_header($Bb),$Bc.$qa.$Lb,$Db);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$qc=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$xa[DRIVER]=lang(21);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$x=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$x-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$e->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($x)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$x=$_GET["edit"];$l=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$W=(isset($_GET["select"])?$_POST["edit"]:$l);$t=fields($x);foreach($t
as$g=>$f){if(!isset($f["privileges"][$W?"update":"insert"])||$m->fieldName($f)==""){unset($t[$g]);}}if($_POST&&!$p&&!isset($_GET["select"])){$fa=$_POST["referer"];if($_POST["insert"]){$fa=($W?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$fa)){$fa=ME."select=".urlencode($x);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($x)," WHERE $l"),$fa,lang(54));}else{$n=array();foreach($t
as$g=>$f){$a=process_input($f);if($a!==false&&$a!==null){$n[idf_escape($g)]=($W?"\n".idf_escape($g)." = $a":$a);}}if($W){if(!$n){redirect($fa);}query_redirect("UPDATE".limit1(table($x)." SET".implode(",",$n),"\nWHERE $l"),$fa,lang(55));}else{$i=insert_into($x,$n);$Kc=($i?last_id():0);queries_redirect($fa,lang(56,($Kc?" $Kc":"")),$i);}}}$Ab=$m->tableName(table_status($x));page_header(($W?lang(57):lang(36)),$p,array("select"=>array($x,$Ab)),$Ab);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($l){$I=array();foreach($t
as$g=>$f){if(isset($f["privileges"]["select"])){$I[]=($_POST["clone"]&&$f["auto_increment"]?"'' AS ":(ereg("enum|set",$f["type"])?"1*".idf_escape($g)." AS ":"")).idf_escape($g);}}$c=array();if($I){$y=get_rows("SELECT".limit(implode(", ",$I)." FROM ".table($x)," WHERE $l",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($y)!=1?null:reset($y));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($t){echo"<table cellspacing='0'>\n";foreach($t
as$g=>$f){echo"<tr><th>".$m->fieldName($f);$fb=$_GET["set"][bracket_escape($g)];$o=(isset($c)?($c[$g]!=""&&ereg("enum|set",$f["type"])?+$c[$g]:$c[$g]):(!$W&&$f["auto_increment"]?"":(isset($_GET["select"])?false:(isset($fb)?$fb:$f["default"]))));if(!$_POST["save"]&&is_string($o)){$o=$m->editVal($o,$f);}$N=($_POST["save"]?(string)$_POST["function"][$g]:($l&&$f["on_update"]=="CURRENT_TIMESTAMP"?"now":($o===false?null:(isset($o)?'':'NULL'))));if($f["type"]=="timestamp"&&$o=="CURRENT_TIMESTAMP"){$o="";$N="now";}input($f,$o,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$Ca,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($t){echo"<input type='submit' value='".lang(58)."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($W?lang(59):lang(60))."\">\n";}}if($W){echo"<input type='submit' name='delete' value='".lang(61)."'".confirm().">\n";}echo'</form>
';}elseif(isset($_GET["select"])){$x=$_GET["select"];$F=table_status($x);$V=indexes($x);$t=fields($x);$wb=column_foreign_keys($x);$Cc=array();$J=array();$cb=null;foreach($t
as$d=>$f){$g=$m->fieldName($f);if(isset($f["privileges"]["select"])&&$g!=""){$J[$d]=html_entity_decode(strip_tags($g));if(ereg('text|lob',$f["type"])){$cb=$m->selectLengthProcess();}}$Cc+=$f["privileges"];}list($I,$na)=$m->selectColumnsProcess($J,$V);$l=$m->selectSearchProcess($t,$V);$ya=$m->selectOrderProcess($t,$V);$_=$m->selectLimitProcess();$eb=($I?implode(", ",$I):"*")."\nFROM ".table($x);$oc=($na&&count($na)<count($I)?"\nGROUP BY ".implode(", ",$na):"").($ya?"\nORDER BY ".implode(", ",$ya):"");if($_POST&&!$p){$Dc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$oa=$Qb=null;foreach($V
as$S){if($S["type"]=="PRIMARY"){$oa=array_flip($S["columns"]);$Qb=($I?$oa:array());break;}}foreach($I
as$d=>$a){$a=$_GET["columns"][$d];if(!$a["fun"]){unset($Qb[$a["col"]]);}}if($_POST["export"]){$m->dumpHeaders($x);$m->dumpTable($x,"");if(ereg("[ct]sv",$_POST["format"])){$c=array_keys($t);if($I){$c=array();foreach($I
as$a){$c[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($c);}if(!is_array($_POST["check"])||$Qb===array()){$uc=$l;if(is_array($_POST["check"])){$uc[]="($Dc)";}$m->dumpData($x,"INSERT","SELECT $eb".($uc?"\nWHERE ".implode(" AND ",$uc):"").$oc);}else{$Qc=array();foreach($_POST["check"]as$a){$Qc[]="(SELECT".limit($eb,"\nWHERE ".($l?implode(" AND ",$l)." AND ":"").where_check($a).$oc,1).")";}$m->dumpData($x,"INSERT",implode(" UNION ALL ",$Qc));}exit;}if(!$m->selectEmailProcess($l,$wb)){if($_POST["save"]||$_POST["delete"]){$i=true;$Ja=0;$j=table($x);$n=array();if(!$_POST["delete"]){foreach($J
as$g=>$a){$a=process_input($t[$g]);if($a!==null){if($_POST["clone"]){$n[idf_escape($g)]=($a!==false?$a:idf_escape($g));}elseif($a!==false){$n[]=idf_escape($g)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($n)).")\nSELECT ".implode(", ",$n)."\nFROM ".table($x):" SET\n".implode(",\n",$n));}if($_POST["delete"]||$n){$Rb="UPDATE";if($_POST["delete"]){$Rb="DELETE";$j="FROM $j";}if($_POST["clone"]){$Rb="INSERT";$j="INTO $j";}if($_POST["all"]||($Qb===array()&&$_POST["check"])||count($na)<count($I)){$i=queries($Rb." $j".($_POST["all"]?($l?"\nWHERE ".implode(" AND ",$l):""):"\nWHERE $Dc"));$Ja=$e->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($Rb.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$Ja+=$e->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(62,$Ja),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p=lang(63);}else{$i=true;$Ja=0;foreach($_POST["val"]as$Ia=>$c){$n=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$n[]=idf_escape($d)." = ".(ereg('char|text',$t[$d]["type"])||$a!=""?$m->processInput($t[$d],$a):"NULL");}$i=queries("UPDATE".limit1(table($x)." SET ".implode(", ",$n)," WHERE ".where_check($Ia).($l?" AND ".implode(" AND ",$l):"")));if(!$i){break;}$Ja+=$e->affected_rows;}queries_redirect(remove_from_uri(),lang(62,$Ja),$i);}}elseif(is_string($aa=get_file("csv_file",true))){$aa=preg_replace("~^\xEF\xBB\xBF~",'',$aa);$i=true;$ab=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$aa,$ba);$Ja=count($ba[0]);begin();$ka=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ba[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ka]*)$ka~",$a.$ka,$yc);if(!$d&&!array_diff($yc[1],$ab)){$ab=$yc[1];$Ja--;}else{$n=array();foreach($yc[1]as$q=>$Ha){$n[idf_escape($ab[$q])]=($Ha==""&&$t[$ab[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ha))));}$i=insert_update($x,$n,$oa);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(64,$Ja),$i);queries("ROLLBACK");}else{$p=upload_error($aa);}}}$Ab=$m->tableName($F);page_header(lang(32).": $Ab",$p);session_write_close();$n=null;if(isset($Cc["insert"])){$n="";foreach((array)$_GET["where"]as$a){if(count($wb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$n.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$m->selectLinks($F,$n);if(!$J){echo"<p class='error'>".lang(65).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($x).'">',"</div>\n";$m->selectColumnsPrint($I,$J);$m->selectSearchPrint($l,$J,$V);$m->selectOrderPrint($ya,$J,$V);$m->selectLimitPrint($_);$m->selectLengthPrint($cb);$m->selectActionPrint($cb);echo"</form>\n";$P=$_GET["page"];if($P=="last"){$sa=$e->result("SELECT COUNT(*) FROM ".table($x).($l?" WHERE ".implode(" AND ",$l):""));$P=floor(max(0,$sa-1)/$_);}$j="SELECT".limit((+$_&&$na&&count($na)<count($I)&&$_a=="sql"?"SQL_CALC_FOUND_ROWS ":"").$eb,($l?"\nWHERE ".implode(" AND ",$l):"").$oc,($_!=""?+$_:null),($P?$_*$P:0),"\n");echo$m->selectQuery($j);$i=$e->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($_a=="mssql"){$i->seek($_*$P);}$Tb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$y=array();while($c=$i->fetch_assoc()){$y[]=$c;}if($_GET["page"]!="last"){$sa=(+$_&&$na&&count($na)<count($I)?($_a=="sql"?$e->result(" SELECT FOUND_ROWS()"):$e->result("SELECT COUNT(*) FROM ($j) x")):count($y));}if(!$y){echo"<p class='message'>".lang(66)."\n";}else{$Lc=$m->backwardKeys($x,$Ab);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$na&&$I?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(67)."</a>");$xc=array();$ja=array();reset($I);$Pc=1;foreach($y[0]as$d=>$a){$a=$_GET["columns"][key($I)];$f=$t[$I?$a["col"]:$d];$g=($f?$m->fieldName($f,$Pc):"*");if($g!=""){$Pc++;$xc[$d]=$g;$u=idf_escape($d);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($ya[0]==$u||$ya[0]==$d||(!$ya&&$na[0]==$u)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$g)."</a>";}$ja[$d]=$a["fun"];next($I);}$cc=array();if($_GET["modify"]){foreach($y
as$c){foreach($c
as$d=>$a){$cc[$d]=max($cc[$d],min(40,strlen(utf8_decode($a))));}}}echo($Lc?"<th>".lang(68):"")."</thead>\n";foreach($m->rowDescriptions($y,$wb)as$M=>$c){$ac=unique_array($y[$M],$V);$Ia="";foreach($ac
as$d=>$a){$Ia.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$na&&$I?"":"<td>".checkbox("check[]",substr($Ia,1),in_array(substr($Ia,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($na)<count($I)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($x).$Ia)."'>".lang(67)."</a>"));foreach($c
as$d=>$a){if(isset($xc[$d])){$f=$t[$d];if($a!=""&&(!isset($Tb[$d])||$Tb[$d]!="")){$Tb[$d]=(is_mail($a)?$xc[$d]:"");}$w="";$a=$m->editVal($a,$f);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$f["type"])&&$a!=""){$w=h(ME.'download='.urlencode($x).'&field='.urlencode($d).$Ia);}if($a==""){$a="&nbsp;";}elseif($cb!=""&&ereg('text|blob',$f["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$cb));}else{$a=h($a);}if(!$w){foreach((array)$wb[$d]as$K){if(count($wb[$d])==1||end($K["source"])==$d){$w="";foreach($K["source"]as$q=>$vc){$w.=where_link($q,$K["target"][$q],$y[$M][$vc]);}$w=h(($K["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($K["db"]),ME):ME).'select='.urlencode($K["table"]).$w);if(count($K["source"])==1){break;}}}}if($d=="COUNT(*)"){$w=h(ME."select=".urlencode($x));$q=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$ac)){$w.=h(where_link($q++,$r["col"],$r["val"],$r["op"]));}}foreach($ac
as$pa=>$r){$w.=h(where_link($q++,$pa,$r,(isset($r)?"=":"IS NULL")));}}}if(!$w){if(is_mail($a)){$w="mailto:$a";}if($pb=is_url($c[$d])){$w=($pb=="http"&&$db?$c[$d]:"$pb://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$Y=h("val[$Ia][".bracket_escape($d)."]");$o=$_POST["val"][$Ia][bracket_escape($d)];$Nc=h(isset($o)?$o:$c[$d]);$Rc=strpos($a,"<i>...</i>");$Sc=is_utf8($a)&&!$Rc&&$y[$M][$d]==$c[$d]&&!$ja[$d];$Fc=ereg('text|lob',$f["type"]);echo(($_GET["modify"]&&$Sc)||isset($o)?"<td>".($Fc?"<textarea name='$Y' cols='30' rows='".(substr_count($c[$d],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$Nc</textarea>":"<input name='$Y' value='$Nc' size='$cc[$d]'>"):"<td id='$Y' ondblclick=\"".($Sc?"selectDblClick(this, event".($Fc?", 1":"").")":"alert('".h($Rc?lang(69):lang(70))."')").";\">".$m->selectVal($a,$w,$f));}}$m->backwardKeysPrint($Lc,$y[$M]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$hc);if($y||$P){$mc=true;if($_GET["page"]!="last"&&+$_&&count($na)>=count($I)&&($sa>=$_||$P)){$sa=$F["Rows"];if(!isset($sa)||$l||2*$P*$_>$sa||($F["Engine"]=="InnoDB"&&$sa<1e4)){ob_flush();flush();$sa=$e->result("SELECT COUNT(*) FROM ".table($x).($l?" WHERE ".implode(" AND ",$l):""));}else{$mc=false;}}echo"<p class='pages'>";if(+$_&&$sa>$_){$Zb=floor(($sa-1)/$_);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".lang(71)."', '".($P+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".lang(71)."</a>:".pagination(0,$P).($P>5?" ...":"");for($q=max(1,$P-4);$q<min($Zb,$P+5);$q++){echo
pagination($q,$P);}echo($P+5<$Zb?" ...":"").($mc?pagination($Zb,$P):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(72)."</a>");}echo" (".($mc?"":"~ ").lang(73,$sa).") ".checkbox("all",1,0,lang(74))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(57),'</legend><div>
<input type="submit" value="',lang(58),'" title="',lang(63),'">
<input type="submit" name="edit" value="',lang(57),'">
<input type="submit" name="clone" value="',lang(75),'">
<input type="submit" name="delete" value="',lang(61),'"',confirm("(this.form['all'].checked ? $sa : formChecked(this, /check/))"),'>
</div></fieldset>
';}print_fieldset("export",lang(76));$Gc=$m->dumpOutput();echo($Gc?html_select("output",$Gc,$hc["output"])." ":"").html_select("format",$m->dumpFormat(),$hc["format"])," <input type='submit' name='export' value='".lang(76)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(77),!$y);echo"<input type='hidden' name='token' value='$Ca'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$hc["format"],1);echo" <input type='submit' name='import' value='".lang(78)."'>\n","</div></fieldset>\n";$m->selectEmailPrint(array_filter($Tb,'strlen'),$J);echo"</form>\n";}}}else{page_header(lang(45),"",false);echo"<form action='' method='post'>\n","<p>".lang(79).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(27)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(80).'<td>'.lang(81)."</thead>\n";foreach(table_status()as$h=>$c){$g=$m->tableName($c);if(isset($c["Engine"])&&$g!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$h,in_array($h,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($h).'">'.h($g).'</a>';$a=number_format($c["Rows"],0,'.',lang(82));echo"<td align='right'><a href='".h(ME."edit=").urlencode($h)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();