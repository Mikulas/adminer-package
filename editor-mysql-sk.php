<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Gc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Gc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$jc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($jc){$$a=$jc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$g;return$g;}function
idf_unescape($Y){$vb=substr($Y,-1);return
str_replace($vb.$vb,$vb,substr($Y,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($ka){if(get_magic_quotes_gpc()){while(list($c,$a)=each($ka)){foreach($a
as$W=>$n){unset($ka[$c][$W]);if(is_array($n)){$ka[$c][stripslashes($W)]=$n;$ka[]=&$ka[$c][stripslashes($W)];}else{$ka[$c][stripslashes($W)]=($Gc?$n:stripslashes($n));}}}}}function
bracket_escape($Y,$ad=false){static$fc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Y,($ad?array_flip($fc):$fc));}function
h($A){return
htmlspecialchars($A,ENT_QUOTES);}function
nbsp($A){return(trim($A)!=""?h($A):"&nbsp;");}function
nl_br($A){return
str_replace("\n","<br>",$A);}function
checkbox($f,$l,$Va,$dc="",$tc=""){static$H=0;$H++;$b="<input type='checkbox'".($f?" name='$f' value='".h($l)."'":"").($Va?" checked":"").($tc?" onclick=\"$tc\"":"")." id='checkbox-$H'>";return($dc!=""?"<label for='checkbox-$H'>$b".h($dc)."</label>":$b);}function
optionlist($ja,$hd=null,$Vb=false){$b="";foreach($ja
as$W=>$n){if(is_array($n)){$b.='<optgroup label="'.h($W).'">';}foreach((is_array($n)?$n:array($W=>$n))as$c=>$a){$b.='<option'.($Vb||is_string($c)?' value="'.h($c).'"':'').(($Vb||is_string($c)?(string)$c:$a)===$hd?' selected':'').'>'.h($a);}if(is_array($n)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ja,$l="",$Ba=true){if($Ba){return"<select name='".h($f)."'".(is_string($Ba)?" onchange=\"$Ba\"":"").">".optionlist($ja,$l)."</select>";}$b="";foreach($ja
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$l?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($Ub=""){return" onclick=\"return confirm('".'Naozaj?'.($Ub?" (' + $Ub + ')":"")."');\"";}function
js_escape($A){return
addcslashes($A,"\r\n'\\/");}function
ini_bool($jd){$a=ini_get($jd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($A){global$g;return$g->quote($A);}function
get_vals($m,$J=0){global$g;$b=array();$h=$g->query($m);if(is_object($h)){while($d=$h->fetch_row()){$b[]=$d[$J];}}return$b;}function
get_key_vals($m,$ba=null){global$g;if(!is_object($ba)){$ba=$g;}$b=array();$h=$ba->query($m);while($d=$h->fetch_row()){$b[$d[0]]=$d[1];}return$b;}function
get_rows($m,$ba=null,$v="<p class='error'>"){global$g;if(!is_object($ba)){$ba=$g;}$b=array();$h=$ba->query($m);if(is_object($h)){while($d=$h->fetch_assoc()){$b[]=$d;}}elseif(!$h&&$v&&(headers_sent()||ob_get_level())){echo$v.error()."\n";}return$b;}function
unique_array($d,$E){foreach($E
as$Q){if(ereg("PRIMARY|UNIQUE",$Q["type"])){$b=array();foreach($Q["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){global$ya;$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$ya=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Kc);remove_slashes(array(&$Kc));return
where($Kc);}function
where_link($o,$J,$l,$nd="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($J)."&where%5B$o%5D%5Bop%5D=".urlencode($nd)."&where%5B$o%5D%5Bval%5D=".urlencode($l);}function
cookie($f,$l){global$Ha;$La=array($f,(ereg("\n",$l)?"":$l),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ha);if(version_compare(PHP_VERSION,'5.2.0')>=0){$La[]=true;}return
call_user_func_array('setcookie',$La);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($ab,$B,$D){global$Aa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Aa))."|username|".session_name()),$i);return"$i[1]?".(SID&&!$_COOKIE?SID."&":"").($ab!="server"||$B!=""?urlencode($ab)."=".urlencode($B)."&":"")."username=".urlencode($D).($i[2]?"&$i[2]":"");}function
redirect($O,$V=null){if(isset($V)){restart_session();$_SESSION["messages"][]=$V;}if(isset($O)){header("Location: ".($O!=""?$O:"."));exit;}}function
query_redirect($m,$O,$V,$nb=true,$qd=true,$Jc=false){global$g,$v,$j;if($qd){$Jc=!$g->query($m);}$rb="";if($m){$rb=$j->messageQuery($m);}if($Jc){$v=error().$rb;return
false;}if($nb){redirect($O,$V.$rb);}return
true;}function
queries($m=null){global$g;static$Bc=array();if(!isset($m)){return
implode(";\n",$Bc);}$Bc[]=$m;return$g->query($m);}function
apply_queries($m,$pa,$Yc='table'){foreach($pa
as$k){if(!queries("$m ".$Yc($k))){return
false;}}return
true;}function
queries_redirect($O,$V,$nb){return
query_redirect(queries(),$O,$V,$nb,false,!$nb);}function
remove_from_uri($fa=""){return
substr(preg_replace("~(?<=[?&])($fa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($y,$Wc){return" ".($y==$Wc?$y+1:'<a href="'.h(remove_from_uri("page").($y?"&page=$y":"")).'">'.($y+1)."</a>");}function
get_file($c,$yc=false){$G=$_FILES[$c];if(!$G||$G["error"]){return$G["error"];}return
file_get_contents($yc&&ereg('\\.gz$',$G["name"])?"compress.zlib://$G[tmp_name]":($yc&&ereg('\\.bz2$',$G["name"])?"compress.bzip2://$G[tmp_name]":$G["tmp_name"]));}function
upload_error($v){$Fc=($v==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($v?'Súbor sa nepodarilo nahrať.'.($Fc?" ".sprintf('Maximálna povolená veľkosť súboru je %sB.',$Fc):""):'Súbor neexistuje.');}function
odd($b=' class="odd"'){static$o=0;if(!$b){$o=-1;}return($o++%
2?$b:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($A,$wc=80,$cd=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$wc})($)?)u",$A,$i)){preg_match("(^([\t\r\n -~]{0,$wc})($)?)",$A,$i);}return
h($i[1]).$cd.(isset($i[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($ka,$id=array()){while(list($c,$a)=each($ka)){if(is_array($a)){foreach($a
as$W=>$n){$ka[$c."[$W]"]=$n;}}elseif(!in_array($c,$id)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($k){global$j;$b=array();foreach($j->foreignKeys($k)as$ia){foreach($ia["source"]as$a){$b[$a][]=$ia;}}return$b;}function
enum_input($za,$P,$e,$l){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$S);$b="";foreach($S[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Va=(is_int($l)?$l==$o+1:(is_array($l)?in_array($o+1,$l):$l===$a));$b.=" <label><input type='$za'$P value='".($o+1)."'".($Va?' checked':'').'>'.h($a).'</label>';}return$b;}function
input($e,$l,$_){global$Da,$j,$ya;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$ea=(isset($_GET["select"])?array("orig"=>'originál'):array())+$j->editFunctions($e);$P=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($ea[""])."<td>".$j->editInput($_GET["edit"],$e,$P,$l);}else{$_a=0;foreach($ea
as$c=>$a){if($c===""||!$a){break;}$_a++;}$Ba=($_a?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($_a > f.selectedIndex) f.selectedIndex = $_a;\"":"");$P.=$Ba;echo(count($ea)>1?html_select("function[$f]",$ea,!isset($_)||in_array($_,$ea)||isset($ea[$_])?$_:""):nbsp(reset($ea))).'<td>';$hc=$j->editInput($_GET["edit"],$e,$P,$l);if($hc!=""){echo$hc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$S);foreach($S[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Va=(is_int($l)?($l>>$o)&1:in_array($a,explode(",",$l),true));echo" <label><input type='checkbox' name='fields[$f][$o]' value='".(1<<$o)."'".($Va?' checked':'')."$Ba>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Ba>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($ya!="sqlite"||ereg("\n",$l)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$P onkeydown='return textareaKeydown(this, event);'>".h($l).'</textarea>';}else{$Pb=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$i)?((ereg("binary",$e["type"])?2:1)*$i[1]+($i[3]?1:0)+($i[2]&&!$e["unsigned"]?1:0)):($Da[$e["type"]]?$Da[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($l)."'".($Pb?" maxlength='$Pb'":"").(ereg('char|binary',$e["type"])&&$Pb>20?" size='40'":"")."$P>";}}}function
process_input($e){global$j;$Y=bracket_escape($e["field"]);$_=$_POST["function"][$Y];$l=$_POST["fields"][$Y];if($e["type"]=="enum"){if($l==-1){return
false;}if($l==""){return"NULL";}return+$l;}if($e["auto_increment"]&&$l==""){return
null;}if($_=="orig"){return
false;}if($_=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$l);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$G=get_file("fields-$Y");if(!is_string($G)){return
false;}return
q($G);}return$j->processInput($e,$l,$_);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$sb=false;foreach(table_status()as$k=>$I){$f=$j->tableName($I);if(isset($I["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($k,$_POST["tables"]))){$h=$g->query("SELECT".limit("1 FROM ".table($k)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($k),array())),1));if($h->fetch_row()){if(!$sb){echo"<ul>\n";$sb=true;}echo"<li><a href='".h(ME."select=".urlencode($k)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($sb?"</ul>":"<p class='message'>".'Žiadne tabuľky.')."\n";}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\n";}function
apply_sql_function($_,$J){return($_?($_=="unixepoch"?"DATETIME($J, '$_')":($_=="count distinct"?"COUNT(DISTINCT ":strtoupper("$_("))."$J)"):$J);}function
password_file(){$qb=ini_get("upload_tmp_dir");if(!$qb){if(function_exists('sys_get_temp_dir')){$qb=sys_get_temp_dir();}else{$qa=@tempnam("","");if(!$qa){return
false;}$qb=dirname($qa);unlink($qa);}}$qa="$qb/adminer.key";$b=@file_get_contents($qa);if($b){return$b;}$tb=@fopen($qa,"w");if($tb){$b=md5(uniqid(mt_rand(),true));fwrite($tb,$b);fclose($tb);}return$b;}function
is_mail($Ga){$rc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Ua='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$U="$rc+(\\.$rc+)*@($Ua?\\.)+$Ua";return
preg_match("(^$U(,\\s*$U)*\$)i",$Ga);}function
is_url($A){$Ua='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Ua?\\.)+$Ua(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$A,$i)?strtolower($i[1]):"");}function
print_fieldset($H,$Xc,$bd=false){echo"<fieldset><legend><a href='#fieldset-$H' onclick=\"return !toggle('fieldset-$H');\">$Xc</a></legend><div id='fieldset-$H'".($bd?"":" class='hidden'").">\n";}function
bold($A,$rd){return($rd?"<b>$A</b>":$A);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ha=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$La=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ha);if(version_compare(PHP_VERSION,'5.2.0')>=0){$La[]=true;}call_user_func_array('session_set_cookie_params',$La);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
lang($sd,$Wa){$td=($Wa==1||(!$Wa&&'sk'=='fr')?0:((!$Wa||$Wa>=5)&&ereg('cs|sk|ru','sk')?2:1));return
sprintf($sd[$td],$Wa);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($fd,$D,$L,$ed='auth_error'){set_exception_handler($ed);parent::__construct($fd,$D,$L);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($m,$Ja=false){$h=parent::query($m);if(!$h){$dd=$this->errorInfo();$this->error=$dd[2];return
false;}$this->store_result($h);return$h;}function
multi_query($m){return$this->_result=$this->query($m);}function
store_result($h=null){if(!$h){$h=$this->_result;}if($h->columnCount()){$h->num_rows=$h->rowCount();return$h;}$this->affected_rows=$h->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($m,$e=0){$h=$this->query($m);if(!$h){return
false;}$d=$h->fetch();return$d[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$Aa=array();$Aa=array("server"=>"MySQL")+$Aa;if(!defined("DRIVER")){$ld=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($B,$D,$L){mysqli_report(MYSQLI_REPORT_OFF);list($pd,$pb)=explode(":",$B,2);$b=@$this->real_connect(($B!=""?$pd:ini_get("mysqli.default_host")),("$B$D"!=""?$D:ini_get("mysqli.default_user")),("$B$D$L"!=""?$L:ini_get("mysqli.default_pw")),null,(is_numeric($pb)?$pb:ini_get("mysqli.default_port")),(!is_numeric($pb)?$pb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($m,$e=0){$h=$this->query($m);if(!$h){return
false;}$d=$h->fetch_array();return$d[$e];}function
quote($A){return"'".$this->escape_string($A)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($B,$D,$L){$this->_link=@mysql_connect(($B!=""?$B:ini_get("mysql.default_host")),("$B$D"!=""?$D:ini_get("mysql.default_user")),("$B$D$L"!=""?$L:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($A){return"'".mysql_real_escape_string($A,$this->_link)."'";}function
select_db($Na){return
mysql_select_db($Na,$this->_link);}function
query($m,$Ja=false){$h=@($Ja?mysql_unbuffered_query($m,$this->_link):mysql_query($m,$this->_link));if(!$h){$this->error=mysql_error($this->_link);return
false;}if($h===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($h);}function
multi_query($m){return$this->_result=$this->query($m);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($m,$e=0){$h=$this->query($m);if(!$h){return
false;}return
mysql_result($h->_result,0,$e);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($h){$this->_result=$h;$this->num_rows=mysql_num_rows($h);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result,$this->_offset++);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($B,$D,$L){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$B)),$D,$L);$this->query("SET NAMES utf8");return
true;}function
select_db($Na){return$this->query("USE ".idf_escape($Na));}function
query($m,$Ja=false){$this->setAttribute(1000,!$Ja);return
parent::query($m,$Ja);}}}function
idf_escape($Y){return"`".str_replace("`","``",$Y)."`";}function
table($Y){return
idf_escape($Y);}function
connect(){global$j;$g=new
Min_DB;$zb=$j->credentials();if($g->connect($zb[0],$zb[1],$zb[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($md=true){$b=&get_session("dbs");if(!isset($b)){if($md){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($m,$p,$C,$Ec=0,$sa=" "){return" $m$p".(isset($C)?$sa."LIMIT $C".($Ec?" OFFSET $Ec":""):"");}function
limit1($m,$p){return
limit($m,$p,1);}function
db_collation($ta,$gd){global$g;$b=null;$ob=$g->result("SHOW CREATE DATABASE ".idf_escape($ta),1);if(preg_match('~ COLLATE ([^ ]+)~',$ob,$i)){$b=$i[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ob,$i)){$b=$gd[$i[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ha){$b=array();foreach($ha
as$ta){$b[$ta]=count(get_vals("SHOW TABLES IN ".idf_escape($ta)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($I){return!isset($I["Rows"]);}function
fk_support($I){return($I["Engine"]=="InnoDB");}function
fields($k){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($k))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$i);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$i[1],"length"=>$i[2],"unsigned"=>ltrim($i[3].$i[4]),"default"=>($d["Default"]!=""||ereg("char",$i[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$i)?$i[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($k,$ba=null){global$g;if(!is_object($ba)){$ba=$g;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($k),$ba)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($k){global$g,$Mb;static$U='`(?:[^`]|``)+`';$b=array();$Lc=$g->result("SHOW CREATE TABLE ".table($k),1);if($Lc){preg_match_all("~CONSTRAINT ($U) FOREIGN KEY \\(((?:$U,? ?)+)\\) REFERENCES ($U)(?:\\.($U))? \\(((?:$U,? ?)+)\\)(?: ON DELETE (".implode("|",$Mb)."))?(?: ON UPDATE (".implode("|",$Mb)."))?~",$Lc,$S,PREG_SET_ORDER);foreach($S
as$i){preg_match_all("~$U~",$i[2],$Ob);preg_match_all("~$U~",$i[5],$Ab);$b[idf_unescape($i[1])]=array("db"=>idf_unescape($i[4]!=""?$i[3]:$i[4]),"table"=>idf_unescape($i[4]!=""?$i[4]:$i[3]),"source"=>array_map('idf_unescape',$Ob[0]),"target"=>array_map('idf_unescape',$Ab[0]),"on_delete"=>$i[6],"on_update"=>$i[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){$b[$d["Charset"]][]=$d["Collation"];}ksort($b);foreach($b
as$c=>$a){sort($b[$c]);}return$b;}function
information_schema($ta){global$g;return($g->server_info>=5&&$ta=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($ta,$xa){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($ta).($xa?" COLLATE ".q($xa):""));}function
drop_databases($ha){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ha,'idf_escape');}function
rename_database($f,$xa){if(create_database($f,$xa)){$Ca=array();foreach(tables_list()as$k=>$za){$Ca[]=table($k)." TO ".idf_escape($f).".".table($k);}if(!$Ca||queries("RENAME TABLE ".implode(", ",$Ca))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Qb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$Q){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$Q["columns"],true)){$Qb="";break;}if($Q["type"]=="PRIMARY"){$Qb=" UNIQUE";}}}return" AUTO_INCREMENT$Qb";}function
alter_table($k,$f,$r,$Vc,$Uc,$Nc,$xa,$Ya,$Tc){$ca=array();foreach($r
as$e){$ca[]=($e[1]?($k!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($k!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ca=array_merge($ca,$Vc);$xc="COMMENT=".q($Uc).($Nc?" ENGINE=".q($Nc):"").($xa?" COLLATE ".q($xa):"").($Ya!=""?" AUTO_INCREMENT=$Ya":"").$Tc;if($k==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ca)."\n) $xc");}if($k!=$f){$ca[]="RENAME TO ".table($f);}$ca[]=$xc;return
queries("ALTER TABLE ".table($k)."\n".implode(",\n",$ca));}function
alter_indexes($k,$ca){foreach($ca
as$c=>$a){$ca[$c]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($k).implode(",",$ca));}function
truncate_tables($pa){return
apply_queries("TRUNCATE TABLE",$pa);}function
drop_views($Lb){return
queries("DROP VIEW ".implode(", ",array_map('table',$Lb)));}function
drop_tables($pa){return
queries("DROP TABLE ".implode(", ",array_map('table',$pa)));}function
move_tables($pa,$Lb,$Ab){$Ca=array();foreach(array_merge($pa,$Lb)as$k){$Ca[]=table($k)." TO ".idf_escape($Ab).".".table($k);}return
queries("RENAME TABLE ".implode(", ",$Ca));}function
trigger($f){$u=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($u);}function
triggers($k){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$za){global$g,$vc,$Sc,$Da;$Zc=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Cc="((".implode("|",array_merge(array_keys($Da),$Zc)).")(?:\\s*\\(((?:[^'\")]*|$vc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$U="\\s*(".($za=="FUNCTION"?"":implode("|",$Sc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Cc";$ob=$g->result("SHOW CREATE $za ".idf_escape($f),2);preg_match("~\\(((?:$U\\s*,?)*)\\)".($za=="FUNCTION"?"\\s*RETURNS\\s+$Cc":"")."\\s*(.*)~is",$ob,$i);$r=array();preg_match_all("~$U\\s*,?~is",$i[1],$S,PREG_SET_ORDER);foreach($S
as$fa){$f=str_replace("``","`",$fa[2]).$fa[3];$r[]=array("field"=>$f,"type"=>strtolower($fa[5]),"length"=>preg_replace_callback("~$vc~s",'normalize_enum',$fa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fa[8] $fa[7]"))),"full_type"=>$fa[4],"inout"=>strtoupper($fa[1]),"collation"=>strtolower($fa[9]),);}if($za!="FUNCTION"){return
array("fields"=>$r,"definition"=>$i[11]);}return
array("fields"=>$r,"returns"=>array("type"=>$i[12],"length"=>$i[13],"unsigned"=>$i[15],"collation"=>$i[16]),"definition"=>$i[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($k,$t){return
queries("INSERT INTO ".table($k)." (".implode(", ",array_keys($t)).")\nVALUES (".implode(", ",$t).")");}function
insert_update($k,$t,$Xa){foreach($t
as$c=>$a){$t[$c]="$c = $a";}$ga=implode(", ",$t);return
queries("INSERT INTO ".table($k)." SET $ga ON DUPLICATE KEY UPDATE $ga");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$m){return$g->query("EXPLAIN $m");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Cd){return
true;}function
create_sql($k,$Ya){global$g;$b=$g->result("SHOW CREATE TABLE ".table($k),1);if(!$Ya){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($k){return"TRUNCATE ".table($k);}function
use_sql($Na){return"USE ".idf_escape($Na);}function
trigger_sql($k,$Ac){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")),null,"-- ")as$d){$b.="\n".($Ac=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Oc){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Oc);}$ya="sql";$Da=array();$Pc=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Dátum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Reťazce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binárne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$Da+=$a;$Pc[$c]=array_keys($a);}$Bd=array("unsigned","zerofill","unsigned zerofill");$Rc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$ea=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Ad=array("avg","count","count distinct","group_concat","max","min","sum");$Dd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Gb="3.1.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Editor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ha=get_databases(false);return(!$ha?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ha[(information_schema($ha[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Používateľ<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Prihlásiť sa'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé prihlásenie')."\n";}function
login($yd,$L){return
true;}function
tableName($Ka){return
h($Ka["Comment"]!=""?$Ka["Comment"]:$Ka["Name"]);}function
fieldName($e,$X=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Ka,$t=""){$q=$Ka["Name"];if(isset($t)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($q).$t).'">'.'Nová položka'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Posledná stránka'."'>&gt;&gt;</a>\n";}function
foreignKeys($k){return
foreign_keys($k);}function
backwardKeys($k,$Qc){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($k)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Mc=preg_quote($Qc);$sa="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Mc$sa(.+)|^(.+?)$sa$Mc\$)",$f,$i)?$i[2].$i[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($_c,$d){if($_c){echo"<td>";foreach($_c
as$k=>$Dc){foreach($Dc["keys"]as$ua){$s=ME.'select='.urlencode($k);$o=0;foreach($ua
as$J=>$a){$s.=where_link($o++,$J,$d[$a]);}echo"<a href='".h($s)."'>".h($Dc["name"])."</a>";$s=ME.'edit='.urlencode($k);foreach($ua
as$J=>$a){$s.="&set".urlencode("[".bracket_escape($J)."]")."=".urlencode($d[$a]);}echo"<a href='".h($s)."' title='".'Nová položka'."'>+</a> ";}}}}function
selectQuery($m){return"<!--\n".str_replace("--","--><!-- ",$m)."\n-->\n";}function
rowDescription($k){foreach(fields($k)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($u,$Ia){$b=$u;foreach($u[0]as$c=>$a){foreach((array)$Ia[$c]as$aa){if(count($aa["source"])==1){$H=idf_escape($aa["target"][0]);$f=$this->rowDescription($aa["table"]);if($f!=""){$zc=array();foreach($u
as$d){$zc[$d[$c]]=exact_value($d[$c]);}$Db=$this->_values[$aa["table"]];if(!$Db){$Db=get_key_vals("SELECT $H, $f FROM ".idf_escape($aa["table"])." WHERE $H IN (".implode(", ",$zc).")");}foreach($u
as$x=>$d){if(isset($d[$c])){$b[$x][$c]=(string)$Db[$d[$c]];}}break;}}}}return$b;}function
selectVal($a,$s,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d bajt','%d bajty','%d bajtov'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$s' alt='$b'>";}}if($e["full_type"]=="tinyint(1)"&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.1.0":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.1.0").'" alt="'.h($a).'">';}if($s){$b="<a href='$s'>$b</a>";}if(!$s&&$e["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($w,$z){}function
selectSearchPrint($p,$z,$E){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Vyhľadať'."</legend><div>\n";$Cb=array();foreach($p
as$c=>$a){$Cb[$a["col"]]=$c;}$o=0;foreach(fields($_GET["select"])as$f=>$e){if(ereg("enum",$e["type"])){$oa=$z[$f];$c=$Cb[$f];$o--;echo"<div>".h($oa)."<input type='hidden' name='where[$o][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$o][val][]'",$e,(array)$p[$c]["val"]);echo"</div>\n";unset($z[$f]);}}foreach($z
as$f=>$oa){$ja=$this->_foreignKeyOptions($_GET["select"],$f);if($ja){$c=$Cb[$f];$o--;echo"<div>".h($oa)."<input type='hidden' name='where[$o][col]' value='".h($f)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($ja,$p[$c]["val"],true)."</select></div>\n";unset($z[$f]);}}$o=0;foreach($p
as$a){if(($a["col"]==""||$z[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'kdekoľvek'.")".optionlist($z,$a["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$o][val]' value='".h($a["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoľvek'.")".optionlist($z,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($X,$z,$E){$Bb=array();foreach($E
as$c=>$Q){$X=array();foreach($Q["columns"]as$a){$X[]=$this->fieldName(array("field"=>$a,"comment"=>$z[$a]));}if(count(array_filter($X,'strlen'))>1&&$c!="PRIMARY"){$Bb[$c]=implode(", ",$X);}}if($Bb){echo'<fieldset><legend>'.'Zotriediť'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Bb,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($C){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$C),"</div></fieldset>\n";}function
selectLengthPrint($Fa){}function
selectActionPrint(){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'Vypísať'."'>","</div></fieldset>\n";}function
selectEmailPrint($jb,$z){if($jb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.'E-mail'."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".'Odosielateľ'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Predmet'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75' onkeydown='return textareaKeydown(this, event, false, this.form.email);'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$z,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložiť'."'>\n";echo"<p>".'Prílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($jb)==1?'<input type="hidden" name="email_field" value="'.h(key($jb)).'">':html_select("email_field",$jb)),"<input type='submit' name='email' value='".'Odoslať'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($z,$E){return
array(array(),array());}function
selectSearchProcess($r,$E){$b=array();foreach((array)$_GET["where"]as$c=>$p){$la=$p["col"];$kb=$p["op"];$a=$p["val"];if(($c<0?"":$la).$a!=""){$lb=array();foreach(($la!=""?array($la=>$r[$la]):$r)as$f=>$e){if($la!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){if($la!=""&&$e["type"]=="enum"){$lb[]=idf_escape($f)." IN (".implode(", ",array_map('intval',$a)).")";}else{$Hc=ereg('char|text|enum|set',$e["type"]);$l=$this->processInput($e,($Hc&&ereg('^[^%]+$',$a)?"%$a%":$a));$lb[]=idf_escape($f).($l=="NULL"?" IS".($kb==">="?" NOT":""):(in_array($kb,$this->operators)?" $kb":($kb!="="&&$Hc?" LIKE":" =")))." $l";}}}$b[]=($lb?"(".implode(" OR ",$lb).")":"0");}}return$b;}function
selectOrderProcess($r,$E){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$_b=$_GET["index_order"];foreach(($_b!=""?array($E[$_b]):$E)as$Q){if($_b!=""||$Q["type"]=="INDEX"){$oa=false;foreach($Q["columns"]as$a){if(ereg('date|timestamp',$r[$a]["type"])){$oa=true;break;}}$b=array();foreach($Q["columns"]as$a){$b[]=idf_escape($a).($oa?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$Ia){if($_POST["email_append"]){return
true;}if($_POST["email"]){$Ic=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$ib=$_POST["email_subject"];$V=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$ib.$V",$S);$u=get_rows("SELECT DISTINCT $e".($S[1]?", ".implode(", ",array_map('idf_escape',array_unique($S[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$r=fields($_GET["select"]);foreach($this->rowDescriptions($u,$Ia)as$d){$xb=array('{\\'=>'{');foreach($S[1]as$a){$xb['{$'."$a}"]=$this->editVal($d[$a],$r[$a]);}$Ga=$d[$_POST["email_field"]];if(is_mail($Ga)&&send_mail($Ga,strtr($ib,$xb),strtr($V,$xb),$_POST["email_from"],$_FILES["email_files"])){$Ic++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),$Ic));}return
false;}function
messageQuery($m){return"<!--\n".str_replace("--","--><!-- ",$m)."\n-->";}function
editFunctions($e){$b=array(""=>($e["null"]||$e["auto_increment"]||$e["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$e["type"])){$b["now"]='teraz';}if(eregi('_(md5|sha1)$',$e["field"],$i)){$b[]=strtolower($i[1]);}return$b;}function
editInput($k,$e,$P,$l){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$P value='-1' checked><i>".'originál'."</i></label> ":"").($e["null"]?"<label><input type='radio'$P value=''".($l||isset($_GET["select"])?"":" checked")."><i>".'prázdne'."</i></label>":"").enum_input("radio",$P,$e,$l);}$ja=$this->_foreignKeyOptions($k,$e["field"]);if($ja){return"<select$P>".optionlist($ja,$l,true)."</select>";}if($e["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($l?$l:1).'"'.($l?' checked':'')."$P>";}if(ereg('date|timestamp',$e["type"])){return"<input value='".h($l)."'$P> (".'d.m.[rrrr]'.")";}return'';}function
processInput($e,$l,$_=""){if($_=="now"){return"$_()";}$b=$l;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$l,$i)){$b=($i["p1"]!=""?$i["p1"]:($i["p2"]!=""?($i["p2"]<70?20:19).$i["p2"]:gmdate("Y")))."-$i[p3]$i[p4]-$i[p5]$i[p6]".end($i);}$b=q($b);if(!ereg('char|text',$e["type"])&&$e["full_type"]!="tinyint(1)"&&$l==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$_)){$b="$_($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($k,$Ac,$m){global$g;$h=$g->query($m,1);if($h){while($d=$h->fetch_assoc()){dump_csv($d);}}}function
dumpHeaders($uc){$qa=($uc!=""?friendly_url($uc):"dump");$Xb="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$qa.$Xb");session_write_close();return$Xb;}function
navigation($Oa){global$Gb,$da;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Gb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($Gb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Oa=="auth"){$_a=true;foreach((array)$_SESSION["pwds"]["server"][""]as$D=>$L){if(isset($L)){if($_a){echo"<p>\n";$_a=false;}echo"<a href='".h(auth_url("server","",$D))."'>".($D!=""?h($D):"<i>".'prázdne'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$da,'">
<input type="submit" name="logout" value="Odhlásiť">
</p>
</form>
';if($Oa!="db"&&$Oa!="ns"){$I=table_status();if(!$I){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{$this->tablesPrint($I);}}}}function
tablesPrint($pa){echo"<p id='tables'>\n";foreach($pa
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'>".bold($f,$_GET["select"]==$d["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($k,$J){$Ia=column_foreign_keys($k);foreach((array)$Ia[$J]as$aa){if(count($aa["source"])==1){$H=idf_escape($aa["target"][0]);$f=$this->rowDescription($aa["table"]);if($f!=""){$b=&$this->_values[$aa["table"]];if(!isset($b)){$I=table_status($aa["table"]);$b=($I["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $H, $f FROM ".idf_escape($aa["table"])." ORDER BY 2"));}return$b;}}}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ac,$v="",$Ma=array(),$Wb=""){global$_d,$Ha,$j,$g,$Aa;header("Content-Type: text/html; charset=utf-8");$j->headers();$cc=$ac.($Wb!=""?": ".h($Wb):"");$Pa=($Ha?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="sk" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$cc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.1.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.1.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\', \'',$Pa,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Pa');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.1.0",'"></script>

<div id="content">
';if(isset($Ma)){$s=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($s?h($s):".").'">'.$Aa[DRIVER].'</a> &raquo; ';$s=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$B=(SERVER!=""?h(SERVER):'Server');if($Ma===false){echo"$B\n";}else{echo"<a href='".($s?h($s):".")."'>$B</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ma))){echo'<a href="'.h($s."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Ma)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Ma
as$c=>$a){$oa=(is_array($a)?$a[1]:$a);if($oa!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($oa).'</a> &raquo; ';}}}echo"$ac\n";}}echo"<h2>$cc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$ha=&get_session("dbs");if(DB!=""&&$ha&&!in_array(DB,$ha,true)){$ha=null;}if($v){echo"<div class='error'>$v</div>\n";}}function
page_footer($Oa=""){global$j;echo'</div>

<div id="menu">
';$j->navigation($Oa);echo'</div>
';}function
int32($x){while($x>=2147483648){$x-=4294967296;}while($x<=-2147483649){$x+=4294967296;}return(int)$x;}function
long2str($n,$Eb){$wa='';foreach($n
as$a){$wa.=pack('V',$a);}if($Eb){return
substr($wa,0,end($n));}return$wa;}function
str2long($wa,$Eb){$n=array_values(unpack('V*',str_pad($wa,4*ceil(strlen($wa)/4),"\0")));if($Eb){$n[]=strlen($wa);}return$n;}function
xxtea_mx($N,$K,$R,$W){return
int32((($N>>5&0x7FFFFFF)^$K<<2)+(($K>>3&0x1FFFFFFF)^$N<<4))^int32(($R^$K)+($W^$N));}function
encrypt_string($Qa,$c){if($Qa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Qa,true);$x=count($n)-1;$N=$n[$x];$K=$n[0];$yb=floor(6+52/($x+1));$R=0;while($yb-->0){$R=int32($R+0x9E3779B9);$Sa=$R>>2&3;for($M=0;$M<$x;$M++){$K=$n[$M+1];$va=xxtea_mx($N,$K,$R,$c[$M&3^$Sa]);$N=int32($n[$M]+$va);$n[$M]=$N;}$K=$n[0];$va=xxtea_mx($N,$K,$R,$c[$M&3^$Sa]);$N=int32($n[$x]+$va);$n[$x]=$N;}return
long2str($n,false);}function
decrypt_string($Qa,$c){if($Qa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Qa,false);$x=count($n)-1;$N=$n[$x];$K=$n[0];$yb=floor(6+52/($x+1));$R=int32($yb*0x9E3779B9);while($R){$Sa=$R>>2&3;for($M=$x;$M>0;$M--){$N=$n[$M-1];$va=xxtea_mx($N,$K,$R,$c[$M&3^$Sa]);$K=int32($n[$M]-$va);$n[$M]=$K;}$N=$n[$x];$va=xxtea_mx($N,$K,$R,$c[$M&3^$Sa]);$K=int32($n[0]-$va);$n[0]=$K;$R=int32($R-0x9E3779B9);}return
long2str($n,true);}$g='';$da=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ra=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ra[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$gb=$j->permanentLogin();$ra[$c]="$c:".base64_encode($gb?encrypt_string($_POST["password"],$gb):"");cookie("adminer_permanent",implode(" ",$ra));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($da&&$_POST["token"]!=$da){page_header('Odhlásiť','Neplatný token CSRF. Odošlite formulár znova.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ra[$c]){unset($ra[$c]);cookie("adminer_permanent",implode(" ",$ra));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlásenie prebehlo v poriadku.');}}elseif($ra&&!$_SESSION["pwds"]){session_regenerate_id();$gb=$j->permanentLogin();foreach($ra
as$c=>$a){list(,$wd)=explode(":",$a);list($ab,$B,$D)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$ab][$B][$D]=decrypt_string(base64_decode($wd),$gb);}}function
auth_error($nc=null){global$g,$j,$da;$fb=session_name();$v="";if(!$_COOKIE[$fb]&&$_GET[$fb]&&ini_bool("session.use_only_cookies")){$v='Session premenné musia byť povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$fb]||$_GET[$fb])&&!$da){$v='Session vypršala, prihláste sa prosím znova.';}else{$L=&get_session("pwds");if(isset($L)){$v=h($nc?$nc->getMessage():(is_string($g)?$g:'Neplatné prihlasovacie údaje.'));$L=null;}}}page_header('Prihlásiť sa',$v,null);echo"<form action='' method='post'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žiadne rozšírenie',sprintf('Nie je dostupné žiadne z podporovaných rozšírení (%s).',implode(", ",$ld)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$da=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$da;}$v=($_POST?($_POST["token"]==$da?"":'Neplatný token CSRF. Odošlite formulár znova.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','"post_max_size"')));$g->select_db($j->database());function
email_header($ud){return"=?UTF-8?B?".base64_encode($ud)."?=";}function
send_mail($Ga,$ib,$V,$Ea="",$eb=array()){$F=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$V=str_replace("\n",$F,wordwrap(str_replace("\r","","$V\n")));$hb=uniqid("boundary");$db="";foreach($eb["error"]as$c=>$a){if(!$a){$db.="--$hb$F"."Content-Type: ".str_replace("\n","",$eb["type"][$c]).$F."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$eb["name"][$c])."\"$F"."Content-Transfer-Encoding: base64$F$F".chunk_split(base64_encode(file_get_contents($eb["tmp_name"][$c])),76,$F).$F;}}$qc="";$mb="Content-Type: text/plain; charset=utf-8$F"."Content-Transfer-Encoding: 8bit";if($db){$db.="--$hb--$F";$qc="--$hb$F$mb$F$F";$mb="Content-Type: multipart/mixed; boundary=\"$hb\"";}$mb.=$F."MIME-Version: 1.0$F"."X-Mailer: Adminer Editor".($Ea?$F."From: ".str_replace("\n","",$Ea):"");return
mail($Ga,email_header($ib),$qc.$V.$db,$mb);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Mb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Aa[DRIVER]='Prihlásiť sa';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$q=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$q-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($q)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$q=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$ga=(isset($_GET["select"])?$_POST["edit"]:$p);$r=fields($q);foreach($r
as$f=>$e){if(!isset($e["privileges"][$ga?"update":"insert"])||$j->fieldName($e)==""){unset($r[$f]);}}if($_POST&&!$v&&!isset($_GET["select"])){$O=$_POST["referer"];if($_POST["insert"]){$O=($ga?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$O)){$O=ME."select=".urlencode($q);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($q)," WHERE $p"),$O,'Položka bola vymazaná.');}else{$t=array();foreach($r
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$t[idf_escape($f)]=($ga?"\n".idf_escape($f)." = $a":$a);}}if($ga){if(!$t){redirect($O);}query_redirect("UPDATE".limit1(table($q)." SET".implode(",",$t),"\nWHERE $p"),$O,'Položka bola aktualizovaná.');}else{$h=insert_into($q,$t);$sc=($h?last_id():0);queries_redirect($O,sprintf('Položka%s bola vložená.',($sc?" $sc":"")),$h);}}}$Ta=$j->tableName(table_status($q));page_header(($ga?'Upraviť':'Vložiť'),$v,array("select"=>array($q,$Ta)),$Ta);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$w=array();foreach($r
as$f=>$e){if(isset($e["privileges"]["select"])){$w[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($w){$u=get_rows("SELECT".limit(implode(", ",$w)." FROM ".table($q)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($u)!=1?null:reset($u));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($r){echo"<table cellspacing='0'>\n";foreach($r
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$mc=$_GET["set"][bracket_escape($f)];$l=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?+$d[$f]:$d[$f]):(!$ga&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($mc)?$mc:$e["default"]))));if(!$_POST["save"]&&is_string($l)){$l=$j->editVal($l,$e);}$_=($_POST["save"]?(string)$_POST["function"][$f]:($p&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($l===false?null:(isset($l)?'':'NULL'))));if($e["type"]=="timestamp"&&$l=="CURRENT_TIMESTAMP"){$l="";$_="now";}input($e,$l,$_);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$da,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($r){echo"<input type='submit' value='".'Uložiť'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($ga?'Uložiť a pokračovať v úpravách':'Uložiť a vložiť ďalší')."\">\n";}}if($ga){echo"<input type='submit' name='delete' value='".'Zmazať'."'".confirm().">\n";}echo'</form>
';}elseif(isset($_GET["select"])){$q=$_GET["select"];$I=table_status($q);$E=indexes($q);$r=fields($q);$Ra=column_foreign_keys($q);$lc=array();$z=array();$Fa=null;foreach($r
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$z[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Fa=$j->selectLengthProcess();}}$lc+=$e["privileges"];}list($w,$T)=$j->selectColumnsProcess($z,$E);$p=$j->selectSearchProcess($r,$E);$X=$j->selectOrderProcess($r,$E);$C=$j->selectLimitProcess();$Ea=($w?implode(", ",$w):"*")."\nFROM ".table($q);$wb=($T&&count($T)<count($w)?"\nGROUP BY ".implode(", ",$T):"").($X?"\nORDER BY ".implode(", ",$X):"");if($_POST&&!$v){$ec="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Xa=$cb=null;foreach($E
as$Q){if($Q["type"]=="PRIMARY"){$Xa=array_flip($Q["columns"]);$cb=($w?$Xa:array());break;}}foreach($w
as$c=>$a){$a=$_GET["columns"][$c];if(!$a["fun"]){unset($cb[$a["col"]]);}}if($_POST["export"]){$j->dumpHeaders($q);$j->dumpTable($q,"");if(ereg("[ct]sv",$_POST["format"])){$d=array_keys($r);if($w){$d=array();foreach($w
as$a){$d[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($d);}if(!is_array($_POST["check"])||$cb===array()){$ub=$p;if(is_array($_POST["check"])){$ub[]="($ec)";}$j->dumpData($q,"INSERT","SELECT $Ea".($ub?"\nWHERE ".implode(" AND ",$ub):"").$wb);}else{$kc=array();foreach($_POST["check"]as$a){$kc[]="(SELECT".limit($Ea,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$wb,1).")";}$j->dumpData($q,"INSERT",implode(" UNION ALL ",$kc));}exit;}if(!$j->selectEmailProcess($p,$Ra)){if($_POST["save"]||$_POST["delete"]){$h=true;$ma=0;$m=table($q);$t=array();if(!$_POST["delete"]){foreach($z
as$f=>$a){$a=process_input($r[$f]);if($a!==null){if($_POST["clone"]){$t[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$t[]=idf_escape($f)." = $a";}}}$m.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($q):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$bb="UPDATE";if($_POST["delete"]){$bb="DELETE";$m="FROM $m";}if($_POST["clone"]){$bb="INSERT";$m="INTO $m";}if($_POST["all"]||($cb===array()&&$_POST["check"])||count($T)<count($w)){$h=queries($bb." $m".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $ec"));$ma=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$h=queries($bb.limit1($m,"\nWHERE ".where_check($a)));if(!$h){break;}$ma+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d položiek bolo ovplyvnených.',$ma),$h);}elseif(!$_POST["import"]){if(!$_POST["val"]){$v='Dvojkliknite na políčko, ktoré chcete zmeniť.';}else{$h=true;$ma=0;foreach($_POST["val"]as$na=>$d){$t=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".(ereg('char|text',$r[$c]["type"])||$a!=""?$j->processInput($r[$c],$a):"NULL");}$h=queries("UPDATE".limit1(table($q)." SET ".implode(", ",$t)," WHERE ".where_check($na).($p?" AND ".implode(" AND ",$p):"")));if(!$h){break;}$ma+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d položiek bolo ovplyvnených.',$ma),$h);}}elseif(is_string($G=get_file("csv_file",true))){$G=preg_replace("~^\xEF\xBB\xBF~",'',$G);$h=true;$ua=array_keys($r);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$G,$S);$ma=count($S[0]);begin();$sa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($S[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$sa]*)$sa~",$a.$sa,$Fb);if(!$c&&!array_diff($Fb[1],$ua)){$ua=$Fb[1];$ma--;}else{$t=array();foreach($Fb[1]as$o=>$la){$t[idf_escape($ua[$o])]=($la==""&&$r[$ua[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$la))));}$h=insert_update($q,$t,$Xa);if(!$h){break;}}}if($h){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),$ma),$h);queries("ROLLBACK");}else{$v=upload_error($G);}}}$Ta=$j->tableName($I);page_header('Vypísať'.": $Ta",$v);session_write_close();$t=null;if(isset($lc["insert"])){$t="";foreach((array)$_GET["where"]as$a){if(count($Ra[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$t.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($I,$t);if(!$z){echo"<p class='error'>".'Tabuľku sa nepodarilo vypísať'.($r?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($q).'">',"</div>\n";$j->selectColumnsPrint($w,$z);$j->selectSearchPrint($p,$z,$E);$j->selectOrderPrint($X,$z,$E);$j->selectLimitPrint($C);$j->selectLengthPrint($Fa);$j->selectActionPrint($Fa);echo"</form>\n";$y=$_GET["page"];if($y=="last"){$Z=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));$y=floor(max(0,$Z-1)/$C);}$m="SELECT".limit((+$C&&$T&&count($T)<count($w)&&$ya=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ea,($p?"\nWHERE ".implode(" AND ",$p):"").$wb,($C!=""?+$C:null),($y?$C*$y:0),"\n");echo$j->selectQuery($m);$h=$g->query($m);if(!$h){echo"<p class='error'>".error()."\n";}else{if($ya=="mssql"){$h->seek($C*$y);}$Za=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$u=array();while($d=$h->fetch_assoc()){$u[]=$d;}if($_GET["page"]!="last"){$Z=(+$C&&$T&&count($T)<count($w)?($ya=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($m) x")):count($u));}if(!$u){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{$ic=$j->backwardKeys($q,$Ta);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$T&&$w?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upraviť'."</a>");$Nb=array();$ea=array();reset($w);$gc=1;foreach($u[0]as$c=>$a){$a=$_GET["columns"][key($w)];$e=$r[$w?$a["col"]:$c];$f=($e?$j->fieldName($e,$gc):"*");if($f!=""){$gc++;$Nb[$c]=$f;$J=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($X[0]==$J||$X[0]==$c||(!$X&&$T[0]==$J)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$ea[$c]=$a["fun"];next($w);}$Jb=array();if($_GET["modify"]){foreach($u
as$d){foreach($d
as$c=>$a){$Jb[$c]=max($Jb[$c],min(40,strlen(utf8_decode($a))));}}}echo($ic?"<th>".'Vzťahy':"")."</thead>\n";foreach($j->rowDescriptions($u,$Ra)as$x=>$d){$Rb=unique_array($u[$x],$E);$na="";foreach($Rb
as$c=>$a){$na.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$T&&$w?"":"<td>".checkbox("check[]",substr($na,1),in_array(substr($na,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($T)<count($w)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($q).$na)."'>".'upraviť'."</a>"));foreach($d
as$c=>$a){if(isset($Nb[$c])){$e=$r[$c];if($a!=""&&(!isset($Za[$c])||$Za[$c]!="")){$Za[$c]=(is_mail($a)?$Nb[$c]:"");}$s="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$s=h(ME.'download='.urlencode($q).'&field='.urlencode($c).$na);}if($a==""){$a="&nbsp;";}elseif($Fa!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Fa));}else{$a=h($a);}if(!$s){foreach((array)$Ra[$c]as$ia){if(count($Ra[$c])==1||end($ia["source"])==$c){$s="";foreach($ia["source"]as$o=>$Ob){$s.=where_link($o,$ia["target"][$o],$u[$x][$Ob]);}$s=h(($ia["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ia["db"]),ME):ME).'select='.urlencode($ia["table"]).$s);if(count($ia["source"])==1){break;}}}}if($c=="COUNT(*)"){$s=h(ME."select=".urlencode($q));$o=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$Rb)){$s.=h(where_link($o++,$n["col"],$n["val"],$n["op"]));}}foreach($Rb
as$W=>$n){$s.=h(where_link($o++,$W,$n,(isset($n)?"=":"IS NULL")));}}}if(!$s){if(is_mail($a)){$s="mailto:$a";}if($Pa=is_url($d[$c])){$s=($Pa=="http"&&$Ha?$d[$c]:"$Pa://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$H=h("val[$na][".bracket_escape($c)."]");$l=$_POST["val"][$na][bracket_escape($c)];$oc=h(isset($l)?$l:$d[$c]);$bc=strpos($a,"<i>...</i>");$Tb=is_utf8($a)&&!$bc&&$u[$x][$c]==$d[$c]&&!$ea[$c];$Sb=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$Tb)||isset($l)?"<td>".($Sb?"<textarea name='$H' cols='30' rows='".(substr_count($d[$c],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$oc</textarea>":"<input name='$H' value='$oc' size='$Jb[$c]'>"):"<td id='$H' ondblclick=\"".($Tb?"selectDblClick(this, event".($Sb?", 1":"").")":"alert('".h($bc?'Pre zmenu tejto hodnoty zvýšte Dĺžku textov.':'Pre zmenu tejto hodnoty použite odkaz upraviť.')."')").";\">".$j->selectVal($a,$s,$e));}}$j->backwardKeysPrint($ic,$u[$x]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Ib);if($u||$y){$Kb=true;if($_GET["page"]!="last"&&+$C&&count($T)>=count($w)&&($Z>=$C||$y)){$Z=$I["Rows"];if(!isset($Z)||$p||2*$y*$C>$Z||($I["Engine"]=="InnoDB"&&$Z<1e4)){ob_flush();flush();$Z=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));}else{$Kb=false;}}echo"<p class='pages'>";if(+$C&&$Z>$C){$Hb=floor(($Z-1)/$C);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Stránka'."', '".($y+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Stránka'."</a>:".pagination(0,$y).($y>5?" ...":"");for($o=max(1,$y-4);$o<min($Hb,$y+5);$o++){echo
pagination($o,$y);}echo($y+5<$Hb?" ...":"").($Kb?pagination($Hb,$y):' <a href="'.h(remove_from_uri()."&page=last").'">'.'posledný'."</a>");}echo" (".($Kb?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$Z).") ".checkbox("all",1,0,'celý výsledok')."\n";if(!information_schema(DB)){echo'<fieldset><legend>Upraviť</legend><div>
<input type="submit" value="Uložiť" title="Dvojkliknite na políčko, ktoré chcete zmeniť.">
<input type="submit" name="edit" value="Upraviť">
<input type="submit" name="clone" value="Klonovať">
<input type="submit" name="delete" value="Zmazať"',confirm("(this.form['all'].checked ? $Z : formChecked(this, /check/))"),'>
</div></fieldset>
';}print_fieldset("export",'Export');$Yb=$j->dumpOutput();echo($Yb?html_select("output",$Yb,$Ib["output"])." ":"").html_select("format",$j->dumpFormat(),$Ib["format"])," <input type='submit' name='export' value='".'Export'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Import CSV',!$u);echo"<input type='hidden' name='token' value='$da'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Ib["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$j->selectEmailPrint(array_filter($Za,'strlen'),$z);echo"</form>\n";}}}else{page_header('Server',"",false);echo"<form action='' method='post'>\n","<p>".'Vyhľadať dáta v tabuľkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhľadať'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabuľka'.'<td>'.'Riadky'."</thead>\n";foreach(table_status()as$k=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$k,in_array($k,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($k).'">'.h($f).'</a>';$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($k)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();