<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$fd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($fd){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$Pc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($Pc){$$a=$Pc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
function textareaKeydown(target,event,tab,button){if(tab&&event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){if(button){button.click();}else{target.form.submit();}}
return true;}
function selectDblClick(td,event,text){var pos=event.rangeOffset;var value=(td.firstChild.firstChild?td.firstChild.firstChild.data:(td.firstChild.alt?td.firstChild.alt:td.firstChild.data));var input=document.createElement(text?'textarea':'input');input.name=td.id;input.value=(value=='\u00A0'||td.getElementsByTagName('i').length?'':value);input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;input.onkeydown=function(event){return textareaKeydown(input,event||window.event);};}
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
connection(){global$e;return$e;}function
idf_unescape($z){$oc=substr($z,-1);return
str_replace($oc.$oc,$oc,substr($z,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Na){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Na)){foreach($a
as$qa=>$r){unset($Na[$d][$qa]);if(is_array($r)){$Na[$d][stripslashes($qa)]=$r;$Na[]=&$Na[$d][stripslashes($qa)];}else{$Na[$d][stripslashes($qa)]=($fd?$r:stripslashes($r));}}}}}function
bracket_escape($z,$sd=false){static$Uc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($z,($sd?array_flip($Uc):$Uc));}function
h($w){return
htmlspecialchars($w,ENT_QUOTES);}function
nbsp($w){return(trim($w)!=""?h($w):"&nbsp;");}function
nl_br($w){return
str_replace("\n","<br>",$w);}function
checkbox($h,$m,$Ab,$Fc="",$Nc=""){static$aa=0;$aa++;$b="<input type='checkbox'".($h?" name='$h' value='".h($m)."'":"").($Ab?" checked":"").($Nc?" onclick=\"$Nc\"":"")." id='checkbox-$aa'>";return($Fc!=""?"<label for='checkbox-$aa'>$b".h($Fc)."</label>":$b);}function
optionlist($Ha,$Qd=null,$Tc=false){$b="";foreach($Ha
as$qa=>$r){if(is_array($r)){$b.='<optgroup label="'.h($qa).'">';}foreach((is_array($r)?$r:array($qa=>$r))as$d=>$a){$b.='<option'.($Tc||is_string($d)?' value="'.h($d).'"':'').(($Tc||is_string($d)?(string)$d:$a)===$Qd?' selected':'').'>'.h($a);}if(is_array($r)){$b.='</optgroup>';}}return$b;}function
html_select($h,$Ha,$m="",$Ua=true){if($Ua){return"<select name='".h($h)."'".(is_string($Ua)?" onchange=\"$Ua\"":"").">".optionlist($Ha,$m)."</select>";}$b="";foreach($Ha
as$d=>$a){$b.="<label><input type='radio' name='".h($h)."' value='".h($d)."'".($d==$m?" checked":"").">".h($a)."</label>";}return$b;}function
ini_bool($Gd){$a=ini_get($Gd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($w){global$e;return$e->quote($w);}function
get_vals($j,$x=0){global$e;$b=array();$i=$e->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$x];}}return$b;}function
get_key_vals($j,$K=null){global$e;if(!is_object($K)){$K=$e;}$b=array();$i=$K->query($j);while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}return$b;}function
get_rows($j,$K=null,$p="<p class='error'>"){global$e;if(!is_object($K)){$K=$e;}$b=array();$i=$K->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$p&&(headers_sent()||ob_get_level())){echo$p.error()."\n";}return$b;}function
unique_array($c,$W){foreach($W
as$T){if(ereg("PRIMARY|UNIQUE",$T["type"])){$b=array();foreach($T["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($l){global$Ea;$b=array();foreach((array)$l["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)||$Ea=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$l["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Rc);remove_slashes(array(&$Rc));return
where($Rc);}function
where_link($q,$x,$m,$Hd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($x)."&where%5B$q%5D%5Bop%5D=".urlencode($Hd)."&where%5B$q%5D%5Bval%5D=".urlencode($m);}function
cookie($h,$m){global$bb;$yb=array($h,(ereg("\n",$m)?"":$m),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$bb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$yb[]=true;}return
call_user_func_array('setcookie',$yb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Sb,$D,$B){global$ra;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ra))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Sb!="server"||$D!=""?urlencode($Sb)."=".urlencode($D)."&":"")."username=".urlencode($B).($k[2]?"&$k[2]":"");}function
redirect($ja,$oa=null){if(isset($oa)){restart_session();$_SESSION["messages"][]=$oa;}if(isset($ja)){header("Location: ".($ja!=""?$ja:"."));exit;}}function
query_redirect($j,$ja,$oa,$Ub=true,$Kd=true,$Hc=false){global$e,$p,$n;if($Kd){$Hc=!$e->query($j);}$dc="";if($j){$dc=$n->messageQuery($j);}if($Hc){$p=error().$dc;return
false;}if($Ub){redirect($ja,$oa.$dc);}return
true;}function
queries($j=null){global$e;static$Fa=array();if(!isset($j)){return
implode(";\n",$Fa);}$Fa[]=$j;return$e->query($j);}function
apply_queries($j,$C,$Id='table'){foreach($C
as$f){if(!queries("$j ".$Id($f))){return
false;}}return
true;}function
queries_redirect($ja,$oa,$Ub){return
query_redirect(queries(),$ja,$oa,$Ub,false,!$Ub);}function
remove_from_uri($_a=""){return
substr(preg_replace("~(?<=[?&])($_a".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($P,$Jd){return" ".($P==$Jd?$P+1:'<a href="'.h(remove_from_uri("page").($P?"&page=$P":"")).'">'.($P+1)."</a>");}function
get_file($d,$kd=false){$da=$_FILES[$d];if(!$da||$da["error"]){return$da["error"];}return
file_get_contents($kd&&ereg('\\.gz$',$da["name"])?"compress.zlib://$da[tmp_name]":($kd&&ereg('\\.bz2$',$da["name"])?"compress.bzip2://$da[tmp_name]":$da["tmp_name"]));}function
upload_error($p){$Vc=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?lang(0).($Vc?" ".lang(1,$Vc):""):lang(2));}function
odd($b=' class="odd"'){static$q=0;if(!$b){$q=-1;}return($q++%
2?$b:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($w,$ya=80,$Dd=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$ya})($)?)u",$w,$k)){preg_match("(^([\t\r\n -~]{0,$ya})($)?)",$w,$k);}return
h($k[1]).$Dd.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Na,$Ed=array()){while(list($d,$a)=each($Na)){if(is_array($a)){foreach($a
as$qa=>$r){$Na[$d."[$qa]"]=$r;}}elseif(!in_array($d,$Ed)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($f){$b=array();foreach(foreign_keys($f)as$M){foreach($M["source"]as$a){$b[$a][]=$M;}}return$b;}function
enum_input($F,$ma,$g,$m){preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ba);foreach($ba[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ab=(is_int($m)?$m==$q+1:(is_array($m)?in_array($q+1,$m):$m===$a));echo" <label><input type='$F'$ma value='".($q+1)."'".($Ab?' checked':'').'>'.h($a).'</label>';}}function
input($g,$m,$N){global$X,$n,$Ea;$h=h(bracket_escape($g["field"]));echo"<td class='function'>";$Y=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$n->editFunctions($g);$ma=" name='fields[$h]'";if($g["type"]=="enum"){echo
nbsp($Y[""])."<td>".($Y["orig"]?"<label><input type='radio'$ma value='-1' checked><i>$Y[orig]</i></label> ":""),$n->editInput($_GET["edit"],$g,$ma,$m);enum_input("radio",$ma,$g,$m);}else{$Ra=0;foreach($Y
as$d=>$a){if($d===""||!$a){break;}$Ra++;}$Ua=($Ra?" onchange=\"var f = this.form['function[".addcslashes($h,"\r\n'\\")."]']; if ($Ra > f.selectedIndex) f.selectedIndex = $Ra;\"":"");$ma.=$Ua;echo(count($Y)>1?html_select("function[$h]",$Y,!isset($N)||in_array($N,$Y)||isset($Y[$N])?$N:""):nbsp(reset($Y))).'<td>';$Zc=$n->editInput($_GET["edit"],$g,$ma,$m);if($Zc!=""){echo$Zc;}elseif($g["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ba);foreach($ba[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ab=(is_int($m)?($m>>$q)&1:in_array($a,explode(",",$m),true));echo" <label><input type='checkbox' name='fields[$h][$q]' value='".(1<<$q)."'".($Ab?' checked':'')."$Ua>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$h'$Ua>";}elseif(ereg('text|lob',$g["type"])){echo"<textarea ".($Ea!="sqlite"||ereg("\n",$m)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ma onkeydown='return textareaKeydown(this, event);'>".h($m).'</textarea>';}else{$ec=(!ereg('int',$g["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$g["length"],$k)?((ereg("binary",$g["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$g["unsigned"]?1:0)):($X[$g["type"]]?$X[$g["type"]]+($g["unsigned"]?0:1):0));echo"<input value='".h($m)."'".($ec?" maxlength='$ec'":"").(ereg('char|binary',$g["type"])&&$ec>20?" size='40'":"")."$ma>";}}}function
process_input($g){global$n;$z=bracket_escape($g["field"]);$N=$_POST["function"][$z];$m=$_POST["fields"][$z];if($g["type"]=="enum"){if($m==-1){return
false;}if($m==""){return"NULL";}return
intval($m);}if($g["auto_increment"]&&$m==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($g["type"]=="set"){return
array_sum((array)$m);}if(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){$da=get_file("fields-$z");if(!is_string($da)){return
false;}return
q($da);}return$n->processInput($g,$m,$N);}function
search_tables(){global$n,$e;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$fc=false;foreach(table_status()as$f=>$G){$h=$n->tableName($G);if(isset($G["Engine"])&&$h!=""&&(!$_POST["tables"]||in_array($f,$_POST["tables"]))){$i=$e->query("SELECT".limit("1 FROM ".table($f)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($f),array())),1));if($i->fetch_row()){if(!$fc){echo"<ul>\n";$fc=true;}echo"<li><a href='".h(ME."select=".urlencode($f)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($h)."</a>\n";}}}echo($fc?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$c)."\n";}function
apply_sql_function($N,$x){return($N?($N=="unixepoch"?"DATETIME($x, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$x)"):$x);}function
password_file(){$Fb=ini_get("upload_tmp_dir");if(!$Fb){if(function_exists('sys_get_temp_dir')){$Fb=sys_get_temp_dir();}else{$R=@tempnam("","");if(!$R){return
false;}$Fb=dirname($R);unlink($R);}}$R="$Fb/adminer.key";$b=@file_get_contents($R);if($b){return$b;}$hc=@fopen($R,"w");if($hc){$b=md5(uniqid(mt_rand(),true));fwrite($hc,$b);fclose($hc);}return$b;}function
is_mail($hb){$Xc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$Z="$Xc+(\\.$Xc+)*@($Bb?\\.)+$Bb";return
preg_match("(^$Z(,\\s*$Z)*\$)i",$hb);}function
is_url($w){$Bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Bb?\\.)+$Bb(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$w,$k)?strtolower($k[1]):"");}function
print_fieldset($aa,$Rd,$Pd=false){echo"<fieldset><legend><a href='#fieldset-$aa' onclick=\"return !toggle('fieldset-$aa');\">$Rd</a></legend><div id='fieldset-$aa'".($Pd?"":" class='hidden'").">\n";}function
bold($w,$od){return($od?"<b>$w</b>":$w);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$bb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$yb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$bb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$yb[]=true;}call_user_func_array('session_set_cookie_params',$yb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$jb=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','ca'=>'Català','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்',);function
lang($z,$Db=null){global$za,$U;$kb=$U[$z];if(is_array($kb)&&$kb){$rd=($Db==1||(!$Db&&$za=='fr')?0:((!$Db||$Db>=5)&&ereg('cs|sk|ru',$za)?2:1));$kb=$kb[$rd];}$jd=func_get_args();array_shift($jd);return
vsprintf((isset($kb)?$kb:$z),$jd);}function
switch_lang(){global$za,$jb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$jb,$za,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$za="en";if(isset($jb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$za=$_COOKIE["adminer_lang"];}elseif(isset($jb[$_SESSION["lang"]])){$za=$_SESSION["lang"];}else{$Gb=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ba,PREG_SET_ORDER);foreach($ba
as$k){$Gb[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Gb);foreach($Gb
as$d=>$Eb){if(isset($jb[$d])){$za=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($Gb[$d])&&isset($jb[$d])){$za=$d;break;}}}switch($za){case"ca":$U=array('Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','original','Cap taula.','Idioma','Utilitza','Please use one of the extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i temps','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Plana','darrera',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Escull','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','dd-mm-[aaaa]','buit','Desconnecta','Servidor','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','Estàs segur?','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d fila.','S\'han importat %d files.'),'Impossible seleccionar la taula','No hi ha cap fila.','edita','Relacions','Incrementa la Longitud del text per modificar aquest valor.','Utilitza l\'enllaç d\'edició per modificar aquest valor.',array('%d fila','%d files'),'tots els resultats','Clona','Exporta','Importa CSV','Importa','Cerca dades en les taules','Taula','Files',',','En el servidor');break;case"cs":$U=array('Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Stránka','poslední',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','d.m.[rrrr]','prázdné','Odhlásit','Server','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Opravdu?','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty zvyšte Délku textů.','Ke změně této hodnoty použijte odkaz upravit.',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import CSV','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Ze serveru');break;case"de":$U=array('Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Please use one of the extensions %s.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Seite','letzte',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'now','t.m.[jjjj]','leer','Abmelden','Server','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Sind Sie sicher ?','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importiere CSV','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Struktur anzeigen');break;case"en":$U=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Page','last',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','[yyyy]-mm-dd','empty','Logout','Server','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Are you sure?','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Increase Text length to modify this value.','Use edit link to modify this value.',array('%d row','%d rows'),'whole result','Clone','Export','CSV Import','Import','Search data in tables','Table','Rows',',','%d in total');break;case"es":$U=array('No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Please use one of the extensions %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Página','último',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'now','dd/mm/[aaaa]','ningúno','Logout','Servidor','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Está seguro?','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar CSV','Importar','Buscar datos en tablas','Tabla','Registros',' ','Mostrar estructura');break;case"et":$U=array('Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Please use one of the extensions %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Lehekülg','viimane',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada',array('Saadetud kirju: %d.','Saadetud kirju: %d.'),'now','d.m.[yyyy]','tühi','Logi välja','Server','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kas oled kindel?','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks suurenda Tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.',array('%d rida','%d rida'),'Täielikud tulemused','Kloon','Ekspordi','Impordi CSV','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Näita struktuuri');break;case"fr":$U=array('Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucune table.','Langue','Utiliser','Please use one of the extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Editeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Page','dernière',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','jj/mm/[aaaa]','vide','Déconnexion','Serveur','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir!','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Êtes-vous certain ?','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Augmentez la Longueur de texte affiché pour modifier cette valeur.','Utilisez le lien "modifier" pour modifier cette valeur.',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer CSV','Importer','Rechercher dans les tables','Table','Lignes',',','Afficher la structure');break;case"hu":$U=array('Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','eredeti','Nincs tábla.','Nyelv','Használ','Please use one of the extensions %s.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','oldal','utoljára',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválaszt','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','[yyyy].mm.dd','üres','Kilépés','Szerver','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Biztos benne?','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','Nincs megjeleníthető eredmény.','szerkeszt','Reláció','Növeld a Szöveg hosszát, hogy módosítani tudd ezt az értéket.','Használd a szerkesztés hivatkozást ezen érték módosításához.',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','CSV importálása','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Szerverről');break;case"it":$U=array('Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Please use one of the extensions %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Pagina','ultima',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'now','dd/mm/[yyyy]','vuoto','Esci','Server','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Sicuro?','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Aumenta la Lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa da CSV','Importa','Cerca nelle tabelle','Tabella','Righe','.','Visualizza struttura');break;case"ja":$U=array('ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません。','言語','使用','Please use one of the extensions %s.','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','ページ','最終','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','[yyyy].mm.dd','空','ログアウト','サーバ','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','実行しますか？','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','編集枠を広げる','リンクを編集する','%d 行','全結果','クローン','エクスポート','CSV インポート','インポート','データを検索する','テーブル','行数',',','データベース種類');break;case"nl":$U=array('Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Please use one of the extensions %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Pagina','laatste',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'now','dd-mm-[jjjj]','leeg','Uitloggen','Server','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Weet u het zeker?','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','CSV Import','Importeren','Zoeken in database','Tabel','Rijen','.','Toon structuur');break;case"ru":$U=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Please use one of the extensions %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Страница','последняя',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'now','дд.мм.[гггг]','пусто','Выйти','Сервер','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Вы уверены?','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Увеличь Длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт CSV','Импорт','Поиск в таблицах','Таблица','Строк',' ','Показать структуру');break;case"sk":$U=array('Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Please use one of the extensions %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Stránka','posledný',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'now','d.m.[rrrr]','prázdne','Odhlásiť','Server','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Naozaj?','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty zvýšte Dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import CSV','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Vypísať dáta');break;case"ta":$U=array('கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','Please use one of the extensions %s.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','ப‌க்க‌ம்','க‌டைசி',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','dd/mm/[yyyy]','வெறுமை (empty)','வெளியேறு','வ‌ழ‌ங்கி (Server)','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','நிச்ச‌ய‌மாக‌ ?','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','வ‌ரிசை இல்லை.','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற, டெக்ஸ்ட் நீள‌த்தினை அதிக‌ரிக்க‌வும்.','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இம்போர்ட் CSV','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','%s ப‌திப்பு: %s through PHP extension %s');break;case"zh-tw":$U=array('無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','Please use one of the extensions %s.','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','頁','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','now','[yyyy].mm.dd','空值','登出','伺服器','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','POST 資料太大。減少資料或者增加 %s 的設定值。','你確定嗎？','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','增加字串長度來修改。','使用編輯連結來修改。','%d行','所有結果','複製','匯出','匯入 CSV','匯入','在資料庫搜尋','資料表','行數',',','秀出結構');break;case"zh":$U=array('不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','Please use one of the extensions %s.','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','页面','最后','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','now','[yyyy].mm.dd','空','注销','服务器','没有扩展','没有支持的 PHP 扩展可用（%s）。','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','你确定吗？','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','%d 行','所有结果','克隆','导出','CSV 导入','导入','在表中搜索数据','表','行数',',','显示结构');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($td,$B,$I,$Ad='auth_error'){set_exception_handler($Ad);parent::__construct($td,$B,$I);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ca=false){$i=parent::query($j);if(!$i){$yd=$this->errorInfo();$this->error=$yd[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch();return$c[$g];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$na=array();$ra=array();$na[]="SQLite";$na[]="SQLite3";$na[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$ra["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$ra["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($R);}function
query($j,$Ca=false){$xd=($Ca?"unbufferedQuery":"query");$i=@$this->_link->$xd($j,SQLITE_BOTH,$p);if(!$i){$this->error=$p;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($w){return"'".sqlite_escape_string($w)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetch();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$b=array();foreach($c
as$d=>$a){$b[($d[0]=='"'?idf_unescape($d):$d)]=$a;}return$b;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$h=$this->_result->fieldName($this->_offset++);$Z='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($Z\\.)?$Z\$~",$h,$k)){$f=($k[3]!=""?$k[3]:idf_unescape($k[2]));$h=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$h,"orgname"=>$h,"orgtable"=>$f,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->_link=new
SQLite3($R);$vc=$this->_link->version();$this->server_info=$vc["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($w){return"'".$this->_link->escapeString($w)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetchArray();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$x=$this->_offset++;$F=$this->_result->columnType($x);return(object)array("name"=>$this->_result->columnName($x),"type"=>$F,"charsetnr"=>($F==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}}elseif(extension_loaded("pdo_sqlite")){class
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
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$l,$A,$S=0,$ka=" "){return" $j$l".(isset($A)?$ka."LIMIT $A".($S?" OFFSET $S":""):"");}function
limit1($j,$l){global$e;return($e->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$l,1):" $j$l");}function
db_collation($_,$zb){global$e;return$e->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($O){return
array();}function
table_status($h=""){$b=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($h!=""?" AND name = ".q($h):""))as$c){$c["Auto_increment"]="";$b[$c["Name"]]=$c;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$c){$b[$c["name"]]["Auto_increment"]=$c["seq"];}return($h!=""?$b[$h]:$b);}function
is_view($G){return$G["Engine"]=="view";}function
fk_support($G){global$e;return!$e->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($f,$_b=false){$b=array();foreach(get_rows("PRAGMA table_info(".table($f).")")as$c){$F=strtolower($c["type"]);$eb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$F)?"integer":(eregi("char|clob|text",$F)?"text":(eregi("blob",$F)?"blob":(eregi("real|floa|doub",$F)?"real":"numeric")))),"full_type"=>$F,"default"=>(ereg("'(.*)'",$eb,$k)?str_replace("''","'",$k[1]):($eb=="NULL"?null:$eb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$F)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($f,$K=null){$b=array();$pa=array();foreach(fields($f)as$g){if($g["primary"]){$pa[]=$g["field"];}}if($pa){$b[""]=array("type"=>"PRIMARY","columns"=>$pa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($f).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$wd){$b[$c["name"]]["columns"][]=$wd["name"];}}return$b;}function
foreign_keys($f){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($f).")")as$c){$M=&$b[$c["id"]];if(!$M){$M=$c;}$M["source"][]=$c["from"];$M["target"][]=$c["to"];}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($h))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($_){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
check_sqlite_name($h){global$e;$id="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($id)\$~",$h)){$e->error=lang(7,str_replace("|",", ",$id));return
false;}return
true;}function
create_database($_,$H){global$e;if(file_exists($_)){$e->error=lang(8);return
false;}if(!check_sqlite_name($_)){return
false;}$v=new
Min_SQLite($_);$v->query('PRAGMA encoding = "UTF-8"');$v->query('CREATE TABLE adminer (i)');$v->query('DROP TABLE adminer');return
true;}function
drop_databases($O){global$e;$e->Min_SQLite(":memory:");foreach($O
as$_){if(!@unlink($_)){$e->error=lang(8);return
false;}}return
true;}function
rename_database($h,$H){global$e;if(!check_sqlite_name($h)){return
false;}$e->Min_SQLite(":memory:");$e->error=lang(8);return@rename(DB,$h);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($f,$h,$t,$Wa,$Xa,$cb,$H,$xa,$xb){$s=array();foreach($t
as$g){if($g[1]){$s[]=($f!=""&&$g[0]==""?"ADD ":"  ").implode($g[1]);}}$s=array_merge($s,$Wa);if($f!=""){foreach($s
as$a){if(!queries("ALTER TABLE ".table($f)." $a")){return
false;}}if($f!=$h&&!queries("ALTER TABLE ".table($f)." RENAME TO ".table($h))){return
false;}}elseif(!queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)")){return
false;}if($xa){queries("UPDATE sqlite_sequence SET seq = $xa WHERE name = ".q($h));}return
true;}function
alter_indexes($f,$s){foreach($s
as$a){if(!queries(($a[2]?"DROP INDEX":"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($f."_"))." ON ".table($f))." $a[1]")){return
false;}}return
true;}function
truncate_tables($C){return
apply_queries("DELETE FROM",$C);}function
drop_views($ea){return
apply_queries("DROP VIEW",$ea);}function
drop_tables($C){return
apply_queries("DROP TABLE",$C);}function
move_tables($C,$ea,$Ia){return
false;}function
trigger($h){global$e;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($h)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$h,"Statement"=>$k[3]);}function
triggers($f){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($f))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$F){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($f,$o){return
queries("INSERT INTO ".table($f).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($f,$o,$pa){return
queries("REPLACE INTO ".table($f)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ROWID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($vd){return
true;}function
create_sql($f,$xa){global$e;return$e->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($f));}function
truncate_sql($f){return"DELETE FROM ".table($f);}function
use_sql($Q){}function
trigger_sql($f,$rc){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($f)));}function
show_variables(){global$e;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$e->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$ud){list($d,$a)=explode("=",$ud,2);$b[$d]=$a;}return$b;}function
support($Ja){return
ereg('^(view|trigger|variables|status|dump)$',$Ja);}$Ea="sqlite";$X=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ga=array_keys($X);$Qb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("hex","length","lower","round","unixepoch","upper");$Rb=array("avg","count","count distinct","group_concat","max","min","sum");$Vb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$na[]="PgSQL";$na[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$ra["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($_d,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($D,$B,$I){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' user='".addcslashes($B,"'\\")."' password='".addcslashes($I,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$vc=pg_version($this->_link);$this->server_info=$vc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($w){return"'".pg_escape_string($this->_link,$w)."'";}function
select_db($Q){if($Q==DB){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($Q,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Ca=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}return
pg_fetch_result($i->_result,0,$g);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$x=$this->_offset++;$b=new
stdClass;if(function_exists('pg_field_table')){$b->orgtable=pg_field_table($this->_result,$x);}$b->name=pg_field_name($this->_result,$x);$b->orgname=$b->name;$b->type=pg_field_type($this->_result,$x);$b->charsetnr=($b->type=="bytea"?63:0);return$b;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($D,$B,$I){$w="pgsql:host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($w.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$B,$I);return
true;}function
select_db($Q){return(DB==$Q);}function
close(){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$fa=$n->credentials();if($e->connect($fa[0],$fa[1],$fa[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$l,$A,$S=0,$ka=" "){return" $j$l".(isset($A)?$ka."LIMIT $A".($S?" OFFSET $S":""):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($_,$zb){global$e;return$e->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($O){return
array();}function
table_status($h=""){$b=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($h!=""?" AND relname = ".q($h):""))as$c){$b[$c["Name"]]=$c;}return($h!=""?$b[$h]:$b);}function
is_view($G){return$G["Engine"]=="view";}function
fk_support($G){return
true;}function
fields($f,$_b=false){$b=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($f)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($_b?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum")as$c){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$b[$c["field"]]=$c;}return$b;}function
indexes($f,$K=null){global$e;if(!is_object($K)){$K=$e;}$b=array();$cd=$K->result("SELECT oid FROM pg_class WHERE relname = ".q($f));$J=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $cd AND attnum > 0",$K);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $cd AND ci.oid = i.indexrelid",$K)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Bd){$b[$c["relname"]]["columns"][]=$J[$Bd];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($f){$b=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($f))as$c){$M=&$b[$c["constraint_name"]];if(!$M){$M=$c;}$M["source"][]=$c["column_name"];$M["target"][]=$c["ref"];}return$b;}function
view($h){global$e;return
array("select"=>$e->result("SELECT pg_get_viewdef(".q($h).")"));}function
collations(){return
array();}function
information_schema($_){return($_=="information_schema");}function
error(){global$e;$b=h($e->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$b,$k)){$b=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($b);}function
exact_value($a){return
q($a);}function
create_database($_,$H){return
queries("CREATE DATABASE ".idf_escape($_).($H?" ENCODING ".idf_escape($H):""));}function
drop_databases($O){global$e;$e->close();return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($h,$H){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($h));}function
auto_increment(){return"";}function
alter_table($f,$h,$t,$Wa,$Xa,$cb,$H,$xa,$xb){$s=array();$Fa=array();foreach($t
as$g){$x=idf_escape($g[0]);$a=$g[1];if(!$a){$s[]="DROP $x";}else{$xc=$a[5];unset($a[5]);if(isset($a[6])&&$g[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($g[0]==""){$s[]=($f!=""?"ADD ":"  ").implode($a);}else{if($x!=$a[0]){$Fa[]="ALTER TABLE ".table($f)." RENAME $x TO $a[0]";}$s[]="ALTER $x TYPE$a[1]";if(!$a[6]){$s[]="ALTER $x ".($a[3]?"SET$a[3]":"DROP DEFAULT");$s[]="ALTER $x ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($g[0]!=""||$xc!=""){$Fa[]="COMMENT ON COLUMN ".table($f).".$a[0] IS ".($xc!=""?substr($xc,9):"''");}}}$s=array_merge($s,$Wa);if($f==""){array_unshift($Fa,"CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)");}elseif($s){array_unshift($Fa,"ALTER TABLE ".table($f)."\n".implode(",\n",$s));}if($f!=""&&$f!=$h){$Fa[]="ALTER TABLE ".table($f)." RENAME TO ".table($h);}if($f!=""||$Xa!=""){$Fa[]="COMMENT ON TABLE ".table($h)." IS ".q($Xa);}if($xa!=""){}foreach($Fa
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($f,$s){$Qa=array();$Aa=array();foreach($s
as$a){if($a[0]!="INDEX"){$Qa[]=($a[2]?"\nDROP CONSTRAINT ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}elseif($a[2]){$Aa[]=$a[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($f."_"))." ON ".table($f)." $a[1]")){return
false;}}return((!$Qa||queries("ALTER TABLE ".table($f).implode(",",$Qa)))&&(!$Aa||queries("DROP INDEX ".implode(", ",$Aa))));}function
truncate_tables($C){return
queries("TRUNCATE ".implode(", ",array_map('table',$C)));return
true;}function
drop_views($ea){return
queries("DROP VIEW ".implode(", ",array_map('table',$ea)));}function
drop_tables($C){return
queries("DROP TABLE ".implode(", ",array_map('table',$C)));}function
move_tables($C,$ea,$Ia){foreach($C
as$f){if(!queries("ALTER TABLE ".table($f)." SET SCHEMA ".idf_escape($Ia))){return
false;}}foreach($ea
as$f){if(!queries("ALTER VIEW ".table($f)." SET SCHEMA ".idf_escape($Ia))){return
false;}}return
true;}function
trigger($h){$y=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($h));return
reset($y);}function
triggers($f){$b=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($f))as$c){$b[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($f,$o){return
queries("INSERT INTO ".table($f).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($f,$o,$pa){global$e;$V=array();$l=array();foreach($o
as$d=>$a){$V[]="$d = $a";if(isset($pa[idf_unescape($d)])){$l[]="$d = $a";}}return($l&&queries("UPDATE ".table($f)." SET ".implode(", ",$V)." WHERE ".implode(" AND ",$l))&&$e->affected_rows)||queries("INSERT INTO ".table($f)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
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
set_schema($pc){global$e,$X,$Ga;$b=$e->query("SET search_path TO ".idf_escape($pc));foreach(types()as$F){if(!isset($X[$F])){$X[$F]=0;$Ga[lang(9)][]=$F;}}return$b;}function
use_sql($Q){return"\connect ".idf_escape($Q);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($Ja){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$Ja);}$Ea="pgsql";$X=array();$Ga=array();foreach(array(lang(10)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(11)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(12)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(13)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(14)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(15)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$X+=$a;$Ga[$d]=array_keys($a);}$Qb=array();$qb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("char_length","lower","round","to_hex","to_timestamp","upper");$Rb=array("avg","count","count distinct","max","min","sum");$Vb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$na[]="OCI8";$na[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$ra["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($_d,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($D,$B,$I){$this->_link=@oci_new_connect($B,$I,$D);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$p=oci_error();$this->error=$p["message"];return
false;}function
quote($w){return"'".str_replace("'","''",$w)."'";}function
select_db($Q){return
true;}function
query($j,$Ca=false){$i=oci_parse($this->_link,$j);if(!$i){$p=oci_error($this->_link);$this->error=$p["message"];return
false;}set_error_handler(array($this,'_error'));$b=@oci_execute($i);restore_error_handler();if($b){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$b;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$g=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$g);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($c){foreach((array)$c
as$d=>$a){if(is_a($a,'OCI-Lob')){$c[$d]=$a->load();}}return$c;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$x=$this->_offset++;$b=new
stdClass;$b->name=oci_field_name($this->_result,$x);$b->orgname=$b->name;$b->type=oci_field_type($this->_result,$x);$b->charsetnr=(ereg("raw|blob|bfile",$b->type)?63:0);return$b;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($D,$B,$I){}function
select_db($Q){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$fa=$n->credentials();if($e->connect($fa[0],$fa[1],$fa[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$l,$A,$S=0,$ka=" "){return" $j$l".(isset($A)?($l?" AND":$ka."WHERE").($S?" rownum > $S AND":"")." rownum <= ".($A+$S):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($_,$zb){global$e;return$e->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($O){return
array();}function
table_status($h=""){$b=array();$ob=q($h);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($h!=""?" AND table_name = $ob":"")."
UNION SELECT view_name, 'view' FROM user_views".($h!=""?" WHERE view_name = $ob":""))as$c){if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return$G["Engine"]=="view";}function
fk_support($G){return
true;}function
fields($f,$_b=false){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($f)." ORDER BY column_id")as$c){$F=$c["DATA_TYPE"];$ya="$c[DATA_PRECISION],$c[DATA_SCALE]";if($ya==","){$ya=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$F.($ya?"($ya)":""),"type"=>strtolower($F),"length"=>$ya,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($f,$K=null){return
array();}function
view($h){$y=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($h));return
reset($y);}function
collations(){return
array();}function
information_schema($_){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
explain($e,$j){$e->query("EXPLAIN PLAN FOR $j");return$e->query("SELECT * FROM plan_table");}function
alter_table($f,$h,$t,$Wa,$Xa,$cb,$H,$xa,$xb){$s=$Aa=array();foreach($t
as$g){$a=$g[1];if($a&&$g[0]!=""&&idf_escape($g[0])!=$a[0]){queries("ALTER TABLE ".table($f)." RENAME COLUMN ".idf_escape($g[0])." TO $a[0]");}if($a){$s[]=($f!=""?($g[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($f!=""?")":"");}else{$Aa[]=idf_escape($g[0]);}}if($f==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)");}return(!$s||queries("ALTER TABLE ".table($f)."\n".implode("\n",$s)))&&(!$Aa||queries("ALTER TABLE ".table($f)." DROP (".implode(", ",$Aa).")"))&&($f==$h||queries("ALTER TABLE ".table($f)." RENAME TO ".table($h)));}function
foreign_keys($f){return
array();}function
truncate_tables($C){return
apply_queries("TRUNCATE TABLE",$C);}function
drop_views($ea){return
apply_queries("DROP VIEW",$ea);}function
drop_tables($C){return
apply_queries("DROP TABLE",$C);}function
begin(){return
true;}function
insert_into($f,$o){return
queries("INSERT INTO ".table($f)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($vd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$y=get_rows('SELECT * FROM v$instance');return
reset($y);}function
support($Ja){return
ereg("view|drop_col|variables|status",$Ja);}$Ea="oracle";$X=array();$Ga=array();foreach(array(lang(10)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(11)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(12)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(13)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$X+=$a;$Ga[$d]=array_keys($a);}$Qb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$Y=array("length","lower","round","upper");$Rb=array("avg","count","count distinct","max","min","sum");$Vb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$na[]="SQLSRV";$na[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$ra["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$p){$this->error.="$p[message]\n";}$this->error=rtrim($this->error);}function
connect($D,$B,$I){$this->_link=@sqlsrv_connect($D,array("UID"=>$B,"PWD"=>$I));if($this->_link){$pd=sqlsrv_server_info($this->_link);$this->server_info=$pd['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($w){return"'".str_replace("'","''",$w)."'";}function
select_db($Q){return$this->query("USE $Q");}function
query($j,$Ca=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
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
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->fetch_row();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($c){foreach((array)$c
as$d=>$a){if(is_a($a,'DateTime')){$c[$d]=$a->format("Y-m-d H:i:s");}}return$c;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$g=$this->_fields[$this->_offset++];$b=new
stdClass;$b->name=$g["Name"];$b->orgname=$g["Name"];$b->type=($g["Type"]==1?254:0);return$b;}function
seek($S){for($q=0;$q<$S;$q++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($D,$B,$I){$this->_link=@mssql_connect($D,$B,$I);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($w){return"'".str_replace("'","''",$w)."'";}function
select_db($Q){return
mssql_select_db($Q);}function
query($j,$Ca=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$g);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$b=mssql_fetch_field($this->_result);$b->orgtable=$b->table;$b->orgname=$b->name;return$b;}function
seek($S){mssql_data_seek($this->_result,$S);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($z){return"[".str_replace("]","]]",$z)."]";}function
table($z){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$fa=$n->credentials();if($e->connect($fa[0],$fa[1],$fa[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$l,$A,$S=0,$ka=" "){return(isset($A)?" TOP (".($A+$S).")":"")." $j$l";}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($_,$zb){global$e;return$e->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($_));}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($O){global$e;$b=array();foreach($O
as$_){$e->select_db($_);$b[$_]=$e->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$b;}function
table_status($h=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($h!=""?" AND name = ".q($h):""))as$c){if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return$G["Engine"]=="VIEW";}function
fk_support($G){return
true;}function
fields($f,$_b=false){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($f))as$c){$F=$c["type"];$ya=(ereg("char|binary",$F)?$c["max_length"]:($F=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$F.($ya?"($ya)":""),"type"=>$F,"length"=>$ya,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($f,$K=null){global$e;if(!is_object($K)){$K=$e;}$b=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($f),$K)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$e->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($h))));}function
collations(){$b=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$H){$b[ereg_replace("_.*","",$H)][]=$H;}return$b;}function
information_schema($_){return
false;}function
error(){global$e;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$e->error)));}function
exact_value($a){return
q($a);}function
create_database($_,$H){return
queries("CREATE DATABASE ".idf_escape($_).(eregi('^[a-z0-9_]+$',$H)?" COLLATE $H":""));}function
drop_databases($O){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$O)));}function
rename_database($h,$H){if(eregi('^[a-z0-9_]+$',$H)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $H");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($h));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($f,$h,$t,$Wa,$Xa,$cb,$H,$xa,$xb){$s=array();foreach($t
as$g){$x=idf_escape($g[0]);$a=$g[1];if(!$a){$s["DROP"][]=" COLUMN $g[0]";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($g[0]==""){$s["ADD"][]="\n  ".implode("",$a);}else{unset($a[6]);if($x!=$a[0]){queries("EXEC sp_rename ".q(table($f).".$x").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$s["ALTER COLUMN ".implode("",$a)][]="";}}}if($f==""){return
queries("CREATE TABLE ".table($h)." (".implode(",",(array)$s["ADD"])."\n)");}if($f!=$h){queries("EXEC sp_rename ".q(table($f)).", ".q($h));}foreach($s
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($h)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($f,$s){$T=array();$Aa=array();foreach($s
as$a){if($a[2]){if($a[0]=="PRIMARY"){$Aa[]=$a[1];}else{$T[]="$a[1] ON ".table($f);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($f."_"))." ON ".table($f):"ALTER TABLE ".table($f)." ADD PRIMARY KEY")." $a[1]")){return
false;}}return(!$T||queries("DROP INDEX ".implode(", ",$T)))&&(!$Aa||queries("ALTER TABLE ".table($f)." DROP ".implode(", ",$Aa)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($f,$o){return
queries("INSERT INTO ".table($f).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($f,$o,$pa){$V=array();$l=array();foreach($o
as$d=>$a){$V[]="$d = $a";if(isset($pa[idf_unescape($d)])){$l[]="$d = $a";}}return
queries("MERGE ".table($f)." USING (VALUES(".implode(", ",$o).")) AS source (c".implode(", c",range(1,count($o))).") ON ".implode(" AND ",$l)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$V)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).");");}function
last_id(){global$e;return$e->result("SELECT SCOPE_IDENTITY()");}function
explain($e,$j){$e->query("SET SHOWPLAN_ALL ON");$b=$e->query($j);$e->query("SET SHOWPLAN_ALL OFF");return$b;}function
foreign_keys($f){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($f))as$c){$M=&$b[$c["FK_NAME"]];$M["table"]=$c["PKTABLE_NAME"];$M["source"][]=$c["FKCOLUMN_NAME"];$M["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($C){return
apply_queries("TRUNCATE TABLE",$C);}function
drop_views($ea){return
queries("DROP VIEW ".implode(", ",array_map('table',$ea)));}function
drop_tables($C){return
queries("DROP TABLE ".implode(", ",array_map('table',$C)));}function
move_tables($C,$ea,$Ia){return
apply_queries("ALTER SCHEMA ".idf_escape($Ia)." TRANSFER",array_merge($C,$ea));}function
trigger($h){$y=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($h));$b=reset($y);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
triggers($f){$b=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($f))as$c){$b[$c["name"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$e;if($_GET["ns"]!=""){return$_GET["ns"];}return$e->result("SELECT SCHEMA_NAME()");}function
set_schema($pc){return
true;}function
use_sql($Q){return"USE ".idf_escape($Q);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Ja){return
ereg('^(scheme|trigger|view|drop_col)$',$Ja);}$Ea="mssql";$X=array();$Ga=array();foreach(array(lang(10)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(11)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(12)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(13)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$X+=$a;$Ga[$d]=array_keys($a);}$Qb=array();$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Y=array("len","lower","round","upper");$Rb=array("avg","count","count distinct","max","min","sum");$Vb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$na[]="MySQLi";$na[]="MySQL";$na[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ra=array("server"=>"MySQL")+$ra;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$B,$I){mysqli_report(MYSQLI_REPORT_OFF);list($zd,$Ib)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$zd:ini_get("mysqli.default_host")),("$D$B"!=""?$B:ini_get("mysqli.default_user")),("$D$B$I"!=""?$I:ini_get("mysqli.default_pw")),null,(is_numeric($Ib)?$Ib:ini_get("mysqli.default_port")),(!is_numeric($Ib)?$Ib:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$g];}function
quote($w){return"'".$this->escape_string($w)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$B,$I){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$B"!=""?$B:ini_get("mysql.default_user")),("$D$B$I"!=""?$I:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($w){return"'".mysql_real_escape_string($w,$this->_link)."'";}function
select_db($Q){return
mysql_select_db($Q,$this->_link);}function
query($j,$Ca=false){$i=@($Ca?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}return
mysql_result($i->_result,0,$g);}}class
Min_Result{var$num_rows,$_result;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$B,$I){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$D)),$B,$I);$this->query("SET NAMES utf8");return
true;}function
select_db($Q){return$this->query("USE ".idf_escape($Q));}function
query($j,$Ca=false){$this->setAttribute(1000,!$Ca);return
parent::query($j,$Ca);}}}function
idf_escape($z){return"`".str_replace("`","``",$z)."`";}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$fa=$n->credentials();if($e->connect($fa[0],$fa[1],$fa[2])){$e->query("SET SQL_QUOTE_SHOW_CREATE=1");return$e;}return$e->error;}function
get_databases($Ld=true){$b=&get_session("dbs");if(!isset($b)){if($Ld){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($j,$l,$A,$S=0,$ka=" "){return" $j$l".(isset($A)?$ka."LIMIT $A".($S?" OFFSET $S":""):"");}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($_,$zb){global$e;$b=null;$Qa=$e->result("SHOW CREATE DATABASE ".idf_escape($_),1);if(preg_match('~ COLLATE ([^ ]+)~',$Qa,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Qa,$k)){$b=$zb[$k[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$e;return$e->result("SELECT USER()");}function
tables_list(){global$e;return
get_key_vals("SHOW".($e->server_info>=5?" FULL":"")." TABLES");}function
count_tables($O){$b=array();foreach($O
as$_){$b[$_]=count(get_vals("SHOW TABLES IN ".idf_escape($_)));}return$b;}function
table_status($h=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($h!=""?" LIKE ".q(addcslashes($h,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return!isset($G["Rows"]);}function
fk_support($G){return($G["Engine"]=="InnoDB");}function
fields($f,$_b=false){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($f))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($f,$K=null){global$e;if(!is_object($K)){$K=$e;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($f),$K)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($f){global$e,$_c;static$Z='`(?:[^`]|``)+`';$b=array();$gd=$e->result("SHOW CREATE TABLE ".table($f),1);if($gd){preg_match_all("~CONSTRAINT ($Z) FOREIGN KEY \\(((?:$Z,? ?)+)\\) REFERENCES ($Z)(?:\\.($Z))? \\(((?:$Z,? ?)+)\\)(?: ON DELETE (".implode("|",$_c)."))?(?: ON UPDATE (".implode("|",$_c)."))?~",$gd,$ba,PREG_SET_ORDER);foreach($ba
as$k){preg_match_all("~$Z~",$k[2],$yc);preg_match_all("~$Z~",$k[5],$Ia);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$yc[0]),"target"=>array_map('idf_unescape',$Ia[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$e->result("SHOW CREATE VIEW ".table($h),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$c){$b[$c["Charset"]][]=$c["Collation"];}ksort($b);foreach($b
as$d=>$a){sort($b[$d]);}return$b;}function
information_schema($_){global$e;return($e->server_info>=5&&$_=="information_schema");}function
error(){global$e;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$e->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($_,$H){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($_).($H?" COLLATE ".q($H):""));}function
drop_databases($O){set_session("dbs",null);return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($h,$H){if(create_database($h,$H)){$lb=array();foreach(tables_list()as$f=>$F){$lb[]=table($f)." TO ".idf_escape($h).".".table($f);}if(!$lb||queries("RENAME TABLE ".implode(", ",$lb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$kc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$T){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$T["columns"],true)){$kc="";break;}if($T["type"]=="PRIMARY"){$kc=" UNIQUE";}}}return" AUTO_INCREMENT$kc";}function
alter_table($f,$h,$t,$Wa,$Xa,$cb,$H,$xa,$xb){$s=array();foreach($t
as$g){$s[]=($g[1]?($f!=""?($g[0]!=""?"CHANGE ".idf_escape($g[0]):"ADD"):" ")." ".implode($g[1]).($f!=""?" $g[2]":""):"DROP ".idf_escape($g[0]));}$s=array_merge($s,$Wa);$nd="COMMENT=".q($Xa).($cb?" ENGINE=".q($cb):"").($H?" COLLATE ".q($H):"").($xa!=""?" AUTO_INCREMENT=$xa":"").$xb;if($f==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n) $nd");}if($f!=$h){$s[]="RENAME TO ".table($h);}$s[]=$nd;return
queries("ALTER TABLE ".table($f)."\n".implode(",\n",$s));}function
alter_indexes($f,$s){foreach($s
as$d=>$a){$s[$d]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($f).implode(",",$s));}function
truncate_tables($C){return
apply_queries("TRUNCATE TABLE",$C);}function
drop_views($ea){return
queries("DROP VIEW ".implode(", ",array_map('table',$ea)));}function
drop_tables($C){return
queries("DROP TABLE ".implode(", ",array_map('table',$C)));}function
move_tables($C,$ea,$Ia){$lb=array();foreach(array_merge($C,$ea)as$f){$lb[]=table($f)." TO ".idf_escape($Ia).".".table($f);}return
queries("RENAME TABLE ".implode(", ",$lb));}function
trigger($h){$y=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($h));return
reset($y);}function
triggers($f){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($f,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$F){global$e,$Yc,$Od,$X;$Nd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$dd="((".implode("|",array_merge(array_keys($X),$Nd)).")(?:\\s*\\(((?:[^'\")]*|$Yc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$Z="\\s*(".($F=="FUNCTION"?"":implode("|",$Od)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$dd";$Qa=$e->result("SHOW CREATE $F ".idf_escape($h),2);preg_match("~\\(((?:$Z\\s*,?)*)\\)".($F=="FUNCTION"?"\\s*RETURNS\\s+$dd":"")."\\s*(.*)~is",$Qa,$k);$t=array();preg_match_all("~$Z\\s*,?~is",$k[1],$ba,PREG_SET_ORDER);foreach($ba
as$_a){$h=str_replace("``","`",$_a[2]).$_a[3];$t[]=array("field"=>$h,"type"=>strtolower($_a[5]),"length"=>preg_replace_callback("~$Yc~s",'normalize_enum',$_a[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$_a[8] $_a[7]"))),"full_type"=>$_a[4],"inout"=>strtoupper($_a[1]),"collation"=>strtolower($_a[9]),);}if($F!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($f,$o){return
queries("INSERT INTO ".table($f)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
insert_update($f,$o,$pa){foreach($o
as$d=>$a){$o[$d]="$d = $a";}$V=implode(", ",$o);return
queries("INSERT INTO ".table($f)." SET $V ON DUPLICATE KEY UPDATE $V");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($pc){return
true;}function
create_sql($f,$xa){global$e;$b=$e->result("SHOW CREATE TABLE ".table($f),1);if(!$xa){$b=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$b);}return$b;}function
truncate_sql($f){return"TRUNCATE ".table($f);}function
use_sql($Q){return"USE ".idf_escape($Q);}function
trigger_sql($f,$rc){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($f,"%_")),null,"-- ")as$c){$b.="\n".($rc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Ja){global$e;return!ereg("scheme|sequence|type".($e->server_info<5.1?"|event|partitioning".($e->server_info<5?"|view|routine|trigger":""):""),$Ja);}$Ea="sql";$X=array();$Ga=array();foreach(array(lang(10)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(11)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(12)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(13)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(16)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$X+=$a;$Ga[$d]=array_keys($a);}$Qb=array("unsigned","zerofill","unsigned zerofill");$qb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$Y=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Rb=array("avg","count","count distinct","group_concat","max","min","sum");$Vb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ac="3.0.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return
lang(17);}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$e;$O=get_databases(false);return(!$O?$e->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$O[(information_schema($O[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(18),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(19),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(20)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(21))."\n";}function
login($Vd,$I){return
true;}function
tableName($nb){return
h($nb["Comment"]!=""?$nb["Comment"]:$nb["Name"]);}function
fieldName($g,$ta=0){return
h($g["comment"]!=""?$g["comment"]:$g["field"]);}function
selectLinks($nb,$o=""){$u=$nb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($u).$o).'">'.lang(22)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(23).": ".lang(24)."'>&gt;&gt;</a>\n";}function
backwardKeys($f,$Sd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($f)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$h=$this->tableName(table_status($d));if($h!=""){$ob=preg_quote($Sd);$ka="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$ob$ka(.+)|^(.+?)$ka$ob\$)",$h,$k)?$k[2].$k[3]:$h);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($ed,$c){if($ed){echo"<td>";foreach($ed
as$f=>$bd){foreach($bd["keys"]as$Va){$v=ME.'select='.urlencode($f);$q=0;foreach($Va
as$x=>$a){$v.=where_link($q++,$x,$c[$a]);}echo"<a href='".h($v)."'>".h($bd["name"])."</a>";$v=ME.'edit='.urlencode($f);foreach($Va
as$x=>$a){$v.="&set".urlencode("[".bracket_escape($x)."]")."=".urlencode($c[$a]);}echo"<a href='".h($v)."' title='".lang(22)."'>+</a> ";}}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($f){foreach(fields($f)as$g){if($g["type"]=="varchar"){return
idf_escape($g["field"]);}}return"";}function
rowDescriptions($y,$mb){$b=$y;foreach($y[0]as$d=>$a){foreach((array)$mb[$d]as$sa){if(count($sa["source"])==1){$aa=idf_escape($sa["target"][0]);$h=$this->rowDescription($sa["table"]);if($h!=""){$ad=array();foreach($y
as$c){$ad[$c[$d]]=exact_value($c[$d]);}$jc=$this->_values[$sa["table"]];if(!$jc){$jc=get_key_vals("SELECT $aa, $h FROM ".idf_escape($sa["table"])." WHERE $aa IN (".implode(", ",$ad).")");}foreach($y
as$L=>$c){if(isset($c[$d])){$b[$L][$d]=(string)$jc[$c[$d]];}}break;}}}}return$b;}function
selectVal($a,$v,$g){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$g["type"])&&!is_utf8($a)){$b=lang(25,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$v' alt='$b'>";}}if($g["full_type"]=="tinyint(1)"&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.1":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.1").'" alt="'.h($a).'">';}if($v){$b="<a href='$v'>$b</a>";}if(!$v&&$g["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$g["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$g["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$g){if(ereg('date|timestamp',$g["type"])&&isset($a)){return
preg_replace('~^([0-9]{2}([0-9]+))-(0?([0-9]+))-(0?([0-9]+))~',lang(26),$a);}return(ereg("binary",$g["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($E,$J){}function
selectSearchPrint($l,$J,$W){$l=(array)$_GET["where"];echo'<fieldset><legend>'.lang(27)."</legend><div>\n";$cc=array();foreach($l
as$d=>$a){$cc[$a["col"]]=$d;}$q=0;foreach(fields($_GET["select"])as$h=>$g){if(ereg("enum",$g["type"])){$Ka=$J[$h];$d=$cc[$h];$q--;echo"<div>".h($Ka)."<input type='hidden' name='where[$q][col]' value='".h($h)."'>:";enum_input("checkbox"," name='where[$q][val][]'",$g,(array)$l[$d]["val"]);echo"</div>\n";unset($J[$h]);}}foreach($J
as$h=>$Ka){$Ha=$this->_foreignKeyOptions($_GET["select"],$h);if($Ha){$d=$cc[$h];$q--;echo"<div>".h($Ka)."<input type='hidden' name='where[$q][col]' value='".h($h)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Ha,$l[$d]["val"],true)."</select></div>\n";unset($J[$h]);}}$q=0;foreach($l
as$a){if(($a["col"]==""||$J[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".lang(28).")".optionlist($J,$a["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$q][val]' value='".h($a["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='selectAddRow(this);'><option value=''>(".lang(28).")".optionlist($J,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input name='where[$q][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ta,$J,$W){$gc=array();foreach($W
as$d=>$T){$ta=array();foreach($T["columns"]as$a){$ta[]=$this->fieldName(array("field"=>$a,"comment"=>$J[$a]));}if(count(array_filter($ta,'strlen'))>1&&$d!="PRIMARY"){$gc[$d]=implode(", ",$ta);}}if($gc){echo'<fieldset><legend>'.lang(29)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$gc,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($A){echo"<fieldset><legend>".lang(30)."</legend><div>";echo
html_select("limit",array("","30","100"),$A),"</div></fieldset>\n";}function
selectLengthPrint($gb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(31)."</legend><div>","<input type='submit' value='".lang(32)."'>","</div></fieldset>\n";}function
selectEmailPrint($Xb,$J){if($Xb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.lang(33)."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".lang(34).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(35).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75' onkeydown='return textareaKeydown(this, event, false, this.form.email);'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$J,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(36)."'>\n";echo"<p>".lang(37).": <input type='file' name='email_files[]' onchange=\"var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el); this.onchange = function () { };\">","<p>".(count($Xb)==1?'<input type="hidden" name="email_field" value="'.h(key($Xb)).'">':html_select("email_field",$Xb)),"<input type='submit' name='email' value='".lang(38)."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($J,$W){return
array(array(),array());}function
selectSearchProcess($t,$W){$b=array();foreach((array)$_GET["where"]as$d=>$l){$Ma=$l["col"];$Yb=$l["op"];$a=$l["val"];if(($d<0?"":$Ma).$a!=""){$Wb=array();foreach(($Ma!=""?array($Ma=>$t[$Ma]):$t)as$h=>$g){if($Ma!=""||is_numeric($a)||!ereg('int|float|double|decimal',$g["type"])){if($Ma!=""&&$g["type"]=="enum"){$Wb[]=idf_escape($h)." IN (".implode(", ",array_map('intval',$a)).")";}else{$ld=ereg('char|text|enum|set',$g["type"]);$m=$this->processInput($g,($ld&&ereg('^[^%]+$',$a)?"%$a%":$a));$Wb[]=idf_escape($h).($m=="NULL"?" IS".($Yb==">="?" NOT":""):(in_array($Yb,$this->operators)?" $Yb":($Yb!="="&&$ld?" LIKE":" =")))." $m";}}}$b[]=($Wb?"(".implode(" OR ",$Wb).")":"0");}}return$b;}function
selectOrderProcess($t,$W){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$ic=$_GET["index_order"];foreach(($ic!=""?array($W[$ic]):$W)as$T){if($ic!=""||$T["type"]=="INDEX"){$Ka=false;foreach($T["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Ka=true;break;}}$b=array();foreach($T["columns"]as$a){$b[]=idf_escape($a).($Ka?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($l,$mb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$md=0;if($_POST["all"]||$_POST["check"]){$g=idf_escape($_POST["email_field"]);$Tb=$_POST["email_subject"];$oa=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Tb.$oa",$ba);$y=get_rows("SELECT DISTINCT $g".($ba[1]?", ".implode(", ",array_map('idf_escape',array_unique($ba[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $g IS NOT NULL AND $g != ''".($l?" AND ".implode(" AND ",$l):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($y,$mb)as$c){$Zb=array('{\\'=>'{');foreach($ba[1]as$a){$Zb['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$hb=$c[$_POST["email_field"]];if(is_mail($hb)&&send_mail($hb,strtr($Tb,$Zb),strtr($oa,$Zb),$_POST["email_from"],$_FILES["email_files"])){$md++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(39,$md));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($g){$b=array(""=>($g["null"]||$g["auto_increment"]||$g["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$g["type"])){$b["now"]=lang(40);}if(eregi('_(md5|sha1)$',$g["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($f,$g,$ma,$m){if($g["type"]=="enum"){return($g["null"]?"<input type='radio'$ma value=''".($m||isset($_GET["select"])?"":" checked").">":"");}$Ha=$this->_foreignKeyOptions($f,$g["field"]);if($Ha){return"<select$ma>".optionlist($Ha,$m,true)."</select>";}if($g["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($m?$m:1).'"'.($m?' checked':'')."$ma>";}if(ereg('date|timestamp',$g["type"])){return"<input value='".h($m)."'$ma> (".lang(41).")";}return'';}function
processInput($g,$m,$N=""){if($N=="now"){return"$N()";}$b=$m;if(ereg('date|timestamp',$g["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>[0-9]*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>[0-9]{1,2})',preg_quote(lang(26)))).'(.*))',$m,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=q($b);if(!ereg('char|text',$g["type"])&&$g["full_type"]!="tinyint(1)"&&$m==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$N)){$b="$N($b)";}if(ereg("binary",$g["type"])){$b="unhex($b)";}return$b;}function
dumpOutput($E,$m=""){return"";}function
dumpFormat($E,$m=""){return
html_select("format",array('csv'=>'CSV,','csv;'=>'CSV;'),$m,$E);}function
navigation($ub){global$ac,$Ba;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$ac,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ac,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ub=="auth"){$Ra=true;foreach((array)$_SESSION["pwds"]["server"][""]as$B=>$I){if(isset($I)){if($Ra){echo"<p>\n";$Ra=false;}echo"<a href='".h(auth_url("server","",$B))."'>".($B!=""?h($B):"<i>".lang(42)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$Ba,'">
<input type="submit" name="logout" value="',lang(43),'">
</p>
</form>
';if($ub!="db"&&$ub!="ns"){$G=table_status();if(!$G){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($G);}}}}function
tablesPrint($C){echo"<p id='tables'>\n";foreach($C
as$c){$h=$this->tableName($c);if(isset($c["Engine"])&&$h!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'>".bold($h,$_GET["select"]==$c["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($f,$x){$mb=column_foreign_keys($f);foreach((array)$mb[$x]as$sa){if(count($sa["source"])==1){$aa=idf_escape($sa["target"][0]);$h=$this->rowDescription($sa["table"]);if($h!=""){$b=&$this->_values[$sa["table"]];if(!isset($b)){$G=table_status($sa["table"]);$b=($G["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $aa, $h FROM ".idf_escape($sa["table"])." ORDER BY 2"));}return$b;}}}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($hd,$p="",$rb=array(),$Wc=""){global$za,$bb,$n,$e,$ra;header("Content-Type: text/html; charset=utf-8");$n->headers();$Jc=$hd.($Wc!=""?": ".h($Wc):"");$vb=($bb?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$za,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Jc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.1",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.1";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($e)?substr($e->server_info,0,3):""),'\', \'',$vb,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$vb');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.1",'"></script>

<div id="content">
';if(isset($rb)){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($v?h($v):".").'">'.$ra[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):lang(44));if($rb===false){echo"$D\n";}else{echo"<a href='".($v?h($v):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($rb))){echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($rb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($rb
as$d=>$a){$Ka=(is_array($a)?$a[1]:$a);if($Ka!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Ka).'</a> &raquo; ';}}}echo"$hd\n";}}echo"<h2>$Jc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$O=&get_session("dbs");if(DB!=""&&$O&&!in_array(DB,$O,true)){$O=null;}if($p){echo"<div class='error'>$p</div>\n";}}function
page_footer($ub=""){global$n;echo'</div>

';switch_lang();echo'<div id="menu">
';$n->navigation($ub);echo'</div>
';}function
int32($L){while($L>=2147483648){$L-=4294967296;}while($L<=-2147483649){$L+=4294967296;}return(int)$L;}function
long2str($r,$bc){$ab='';foreach($r
as$a){$ab.=pack('V',$a);}if($bc){return
substr($ab,0,end($r));}return$ab;}function
str2long($ab,$bc){$r=array_values(unpack('V*',str_pad($ab,4*ceil(strlen($ab)/4),"\0")));if($bc){$r[]=strlen($ab);}return$r;}function
xxtea_mx($ia,$ha,$la,$qa){return
int32((($ia>>5&0x7FFFFFF)^$ha<<2)+(($ha>>3&0x1FFFFFFF)^$ia<<4))^int32(($la^$ha)+($qa^$ia));}function
encrypt_string($sb,$d){if($sb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$r=str2long($sb,true);$L=count($r)-1;$ia=$r[$L];$ha=$r[0];$Eb=floor(6+52/($L+1));$la=0;while($Eb-->0){$la=int32($la+0x9E3779B9);$tb=$la>>2&3;for($ga=0;$ga<$L;$ga++){$ha=$r[$ga+1];$Sa=xxtea_mx($ia,$ha,$la,$d[$ga&3^$tb]);$ia=int32($r[$ga]+$Sa);$r[$ga]=$ia;}$ha=$r[0];$Sa=xxtea_mx($ia,$ha,$la,$d[$ga&3^$tb]);$ia=int32($r[$L]+$Sa);$r[$L]=$ia;}return
long2str($r,false);}function
decrypt_string($sb,$d){if($sb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$r=str2long($sb,false);$L=count($r)-1;$ia=$r[$L];$ha=$r[0];$Eb=floor(6+52/($L+1));$la=int32($Eb*0x9E3779B9);while($la){$tb=$la>>2&3;for($ga=$L;$ga>0;$ga--){$ia=$r[$ga-1];$Sa=xxtea_mx($ia,$ha,$la,$d[$ga&3^$tb]);$ha=int32($r[$ga]-$Sa);$r[$ga]=$ha;}$ia=$r[$L];$Sa=xxtea_mx($ia,$ha,$la,$d[$ga&3^$tb]);$ha=int32($r[0]-$Sa);$r[0]=$ha;$la=int32($la-0x9E3779B9);}return
long2str($r,true);}$e='';if(!$ra){page_header(lang(45),lang(46,implode(", ",$na)),null);page_footer("auth");exit;}$Ba=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Pa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Pa[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Nb=$n->permanentLogin();$Pa[$d]="$d:".base64_encode($Nb?encrypt_string($_POST["password"],$Nb):"");cookie("adminer_permanent",implode(" ",$Pa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Ba&&$_POST["token"]!=$Ba){page_header(lang(43),lang(47));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Pa[$d]){unset($Pa[$d]);cookie("adminer_permanent",implode(" ",$Pa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(48));}}elseif($Pa&&!$_SESSION["pwds"]){session_regenerate_id();$Nb=$n->permanentLogin();foreach($Pa
as$d=>$a){list(,$Fd)=explode(":",$a);list($Sb,$D,$B)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Sb][$D][$B]=decrypt_string(base64_decode($Fd),$Nb);}}function
auth_error($Lc=null){global$e,$n,$Ba;$Hb=session_name();$p="";if(!$_COOKIE[$Hb]&&$_GET[$Hb]&&ini_bool("session.use_only_cookies")){$p=lang(49);}elseif(isset($_GET["username"])){if(($_COOKIE[$Hb]||$_GET[$Hb])&&!$Ba){$p=lang(50);}else{$I=&get_session("pwds");if(isset($I)){$p=h($Lc?$Lc->getMessage():(is_string($e)?$e:lang(51)));$I=null;}}}page_header(lang(20),$p,null);echo"<form action='' method='post'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$e=connect();}if(is_string($e)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Ba=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Ba;}$p=($_POST?($_POST["token"]==$Ba?"":lang(47)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(52,'"post_max_size"')));$e->select_db($n->database());function
email_header($Md){return"=?UTF-8?B?".base64_encode($Md)."?=";}function
send_mail($hb,$Tb,$oa,$db="",$Mb=array()){$ca=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$oa=str_replace("\n",$ca,wordwrap(str_replace("\r","","$oa\n")));$Lb=uniqid("boundary");$Jb="";foreach($Mb["error"]as$d=>$a){if(!$a){$Jb.="--$Lb$ca"."Content-Type: ".str_replace("\n","",$Mb["type"][$d]).$ca."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Mb["name"][$d])."\"$ca"."Content-Transfer-Encoding: base64$ca$ca".chunk_split(base64_encode(file_get_contents($Mb["tmp_name"][$d])),76,$ca).$ca;}}$Kc="";$Kb="Content-Type: text/plain; charset=utf-8$ca"."Content-Transfer-Encoding: 8bit";if($Jb){$Jb.="--$Lb--$ca";$Kc="--$Lb$ca$Kb$ca$ca";$Kb="Content-Type: multipart/mixed; boundary=\"$Lb\"";}$Kb.=$ca."MIME-Version: 1.0$ca"."X-Mailer: Adminer Editor".($db?$ca."From: ".str_replace("\n","",$db):"");return
mail($hb,email_header($Tb),$Kc.$oa.$Jb,$Kb);}function
dump_table($f){echo"\xef\xbb\xbf";}function
dump_data($f,$rc,$E=""){global$e;$i=$e->query(($E?$E:"SELECT * FROM ".idf_escape($f)),1);if($i){while($c=$i->fetch_assoc()){dump_csv($c);}}}function
dump_headers($Dc){$R=($Dc!=""?friendly_url($Dc):"dump");$Ec="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$R.$Ec");session_write_close();return$Ec;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$_c=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Cd=" onclick=\"return confirm('".lang(53)."');\"";$ra[DRIVER]=lang(20);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$u=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$u-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$e->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($u)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$u=$_GET["edit"];$l=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$V=(isset($_GET["select"])?$_POST["edit"]:$l);$t=fields($u);foreach($t
as$h=>$g){if(!isset($g["privileges"][$V?"update":"insert"])||$n->fieldName($g)==""){unset($t[$h]);}}if($_POST&&!$p&&!isset($_GET["select"])){$ja=$_POST["referer"];if($_POST["insert"]){$ja=($V?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ja)){$ja=ME."select=".urlencode($u);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($u)," WHERE $l"),$ja,lang(54));}else{$o=array();foreach($t
as$h=>$g){$a=process_input($g);if($a!==false&&$a!==null){$o[idf_escape($h)]=($V?"\n".idf_escape($h)." = $a":$a);}}if($V){if(!$o){redirect($ja);}query_redirect("UPDATE".limit1(table($u)." SET".implode(",",$o),"\nWHERE $l"),$ja,lang(55));}else{$i=insert_into($u,$o);$Gc=($i?last_id():0);queries_redirect($ja,lang(56,($Gc?" $Gc":"")),$i);}}}$wb=$n->tableName(table_status($u));page_header(($V?lang(57):lang(36)),$p,array("select"=>array($u,$wb)),$wb);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($l){$E=array();foreach($t
as$h=>$g){if(isset($g["privileges"]["select"])){$E[]=($_POST["clone"]&&$g["auto_increment"]?"'' AS ":(ereg("enum|set",$g["type"])?"1*".idf_escape($h)." AS ":"")).idf_escape($h);}}$c=array();if($E){$y=get_rows("SELECT".limit(implode(", ",$E)." FROM ".table($u)," WHERE $l",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($y)!=1?null:reset($y));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($t){echo"<table cellspacing='0'>\n";foreach($t
as$h=>$g){echo"<tr><th>".$n->fieldName($g);$eb=$_GET["set"][bracket_escape($h)];$m=(isset($c)?($c[$h]!=""&&ereg("enum|set",$g["type"])?intval($c[$h]):$c[$h]):(!$V&&$g["auto_increment"]?"":(isset($_GET["select"])?false:(isset($eb)?$eb:$g["default"]))));if(!$_POST["save"]&&is_string($m)){$m=$n->editVal($m,$g);}$N=($_POST["save"]?(string)$_POST["function"][$h]:($l&&$g["on_update"]=="CURRENT_TIMESTAMP"?"now":($m===false?null:(isset($m)?'':'NULL'))));if($g["type"]=="timestamp"&&$m=="CURRENT_TIMESTAMP"){$m="";$N="now";}input($g,$m,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$Ba,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($t){echo"<input type='submit' value='".lang(58)."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($V?lang(59):lang(60))."\">\n";}}if($V){echo"<input type='submit' name='delete' value='".lang(61)."'$Cd>\n";}echo'</form>
';}elseif(isset($_GET["select"])){$u=$_GET["select"];$G=table_status($u);$W=indexes($u);$t=fields($u,1);$pb=column_foreign_keys($u);$Mc=array();$J=array();$gb=null;foreach($t
as$d=>$g){$h=$n->fieldName($g);if(isset($g["privileges"]["select"])&&$h!=""){$J[$d]=html_entity_decode(strip_tags($h));if(ereg('text|lob',$g["type"])){$gb=$n->selectLengthProcess();}}$Mc+=$g["privileges"];}list($E,$wa)=$n->selectColumnsProcess($J,$W);$l=$n->selectSearchProcess($t,$W);$ta=$n->selectOrderProcess($t,$W);$A=$n->selectLimitProcess();$db=($E?implode(", ",$E):"*")."\nFROM ".table($u);$zc=($wa&&count($wa)<count($E)?"\nGROUP BY ".implode(", ",$wa):"").($ta?"\nORDER BY ".implode(", ",$ta):"");if($_POST&&!$p){$Sc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$pa=$Ob=null;foreach($W
as$T){if($T["type"]=="PRIMARY"){$pa=array_flip($T["columns"]);$Ob=($E?$pa:array());break;}}foreach($E
as$d=>$a){$a=$_GET["columns"][$d];if(!$a["fun"]){unset($Ob[$a["col"]]);}}if($_POST["export"]){dump_headers($u);dump_table($u,"");if($_POST["format"]!="sql"){$c=array_keys($t);if($E){$c=array();foreach($E
as$a){$c[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($c);}if(!is_array($_POST["check"])||$Ob===array()){$wc=$l;if(is_array($_POST["check"])){$wc[]="($Sc)";}dump_data($u,"INSERT","SELECT $db".($wc?"\nWHERE ".implode(" AND ",$wc):"").$zc);}else{$Oc=array();foreach($_POST["check"]as$a){$Oc[]="(SELECT".limit($db,"\nWHERE ".($l?implode(" AND ",$l)." AND ":"").where_check($a).$zc,1).")";}dump_data($u,"INSERT",implode(" UNION ALL ",$Oc));}exit;}if(!$n->selectEmailProcess($l,$pb)){if($_POST["save"]||$_POST["delete"]){$i=true;$La=0;$j=table($u);$o=array();if(!$_POST["delete"]){foreach($J
as$h=>$a){$a=process_input($t[$h]);if($a!==null){if($_POST["clone"]){$o[idf_escape($h)]=($a!==false?$a:idf_escape($h));}elseif($a!==false){$o[]=idf_escape($h)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($u):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$Cb="UPDATE";if($_POST["delete"]){$Cb="DELETE";$j="FROM $j";}if($_POST["clone"]){$Cb="INSERT";$j="INTO $j";}if($_POST["all"]||($Ob===array()&&$_POST["check"])||count($wa)<count($E)){$i=queries($Cb." $j".($_POST["all"]?($l?"\nWHERE ".implode(" AND ",$l):""):"\nWHERE $Sc"));$La=$e->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($Cb.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$La+=$e->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(62,$La),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p=lang(63);}else{$i=true;$La=0;foreach($_POST["val"]as$Oa=>$c){$o=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$o[]=idf_escape($d)." = ".(ereg('char|text',$t[$d]["type"])||$a!=""?$n->processInput($t[$d],$a):"NULL");}$i=queries("UPDATE".limit1(table($u)." SET ".implode(", ",$o)," WHERE ".where_check($Oa).($l?" AND ".implode(" AND ",$l):"")));if(!$i){break;}$La+=$e->affected_rows;}queries_redirect(remove_from_uri(),lang(62,$La),$i);}}elseif(is_string($da=get_file("csv_file",true))){$da=preg_replace("~^\xEF\xBB\xBF~",'',$da);$i=true;$Va=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$da,$ba);$La=count($ba[0]);begin();$ka=($_POST["separator"]=="csv"?",":";");foreach($ba[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ka]*)$ka~",$a.$ka,$nc);if(!$d&&!array_diff($nc[1],$Va)){$Va=$nc[1];$La--;}else{$o=array();foreach($nc[1]as$q=>$Ma){$o[idf_escape($Va[$q])]=($Ma==""&&$t[$Va[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ma))));}$i=insert_update($u,$o,$pa);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(64,$La),$i);queries("ROLLBACK");}else{$p=upload_error($da);}}}$wb=$n->tableName($G);page_header(lang(32).": $wb",$p);session_write_close();$o=null;if(isset($Mc["insert"])){$o="";foreach((array)$_GET["where"]as$a){if(count($pb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$o.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$n->selectLinks($G,$o);if(!$J){echo"<p class='error'>".lang(65).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($u).'">',"</div>\n";$n->selectColumnsPrint($E,$J);$n->selectSearchPrint($l,$J,$W);$n->selectOrderPrint($ta,$J,$W);$n->selectLimitPrint($A);$n->selectLengthPrint($gb);$n->selectActionPrint($gb);echo"</form>\n";$P=$_GET["page"];if($P=="last"){$va=$e->result("SELECT COUNT(*) FROM ".table($u).($l?" WHERE ".implode(" AND ",$l):""));$P=floor(($va-1)/$A);}$j="SELECT".limit((intval($A)&&$wa&&count($wa)<count($E)&&$Ea=="sql"?"SQL_CALC_FOUND_ROWS ":"").$db,($l?"\nWHERE ".implode(" AND ",$l):"").$zc,($A!=""?intval($A):null),($P?$A*$P:0),"\n");echo$n->selectQuery($j);$i=$e->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($Ea=="mssql"){$i->seek($A*$P);}$Pb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$y=array();while($c=$i->fetch_assoc()){$y[]=$c;}if($_GET["page"]!="last"){$va=(intval($A)&&$wa&&count($wa)<count($E)?($Ea=="sql"?$e->result(" SELECT FOUND_ROWS()"):$e->result("SELECT COUNT(*) FROM ($j) x")):count($y));}if(!$y){echo"<p class='message'>".lang(66)."\n";}else{$Qc=$n->backwardKeys($u,$wb);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$wa&&$E?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(67)."</a>");$lc=array();$Y=array();reset($E);$ta=1;foreach($y[0]as$d=>$a){$a=$_GET["columns"][key($E)];$g=$t[$E?$a["col"]:$d];$h=($g?$n->fieldName($g,$ta):"*");if($h!=""){$ta++;$lc[$d]=$h;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($_GET["order"][0]==$d&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$h)."</a>";}$Y[$d]=$a["fun"];next($E);}$mc=array();if($_GET["modify"]){foreach($y
as$c){foreach($c
as$d=>$a){$mc[$d]=max($mc[$d],min(40,strlen(utf8_decode($a))));}}}echo($Qc?"<th>".lang(68):"")."</thead>\n";foreach($n->rowDescriptions($y,$pb)as$L=>$c){$qc=unique_array($y[$L],$W);$Oa="";foreach($qc
as$d=>$a){$Oa.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$wa&&$E?"":"<td>".checkbox("check[]",substr($Oa,1),in_array(substr($Oa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($wa)<count($E)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($u).$Oa)."'>".lang(67)."</a>"));foreach($c
as$d=>$a){if(isset($lc[$d])){$g=$t[$d];if($a!=""&&(!isset($Pb[$d])||$Pb[$d]!="")){$Pb[$d]=(is_mail($a)?$lc[$d]:"");}$v="";$a=$n->editVal($a,$g);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$g["type"])&&$a!=""){$v=h(ME.'download='.urlencode($u).'&field='.urlencode($d).$Oa);}if($a==""){$a="&nbsp;";}elseif($gb!=""&&ereg('text|blob',$g["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,intval($gb)));}else{$a=h($a);}if(!$v){foreach((array)$pb[$d]as$M){if(count($pb[$d])==1||count($M["source"])==1){foreach($M["source"]as$q=>$yc){$v.=where_link($q,$M["target"][$q],$y[$L][$yc]);}$v=h(($M["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($M["db"]),ME):ME).'select='.urlencode($M["table"]).$v);break;}}}if($d=="COUNT(*)"){$v=h(ME."select=".urlencode($u));$q=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$qc)){$v.=h(where_link($q++,$r["col"],$r["val"],$r["op"]));}}foreach($qc
as$qa=>$r){$v.=h(where_link($q++,$qa,$r,(isset($r)?"=":"IS NULL")));}}}if(!$v){if(is_mail($a)){$v="mailto:$a";}if($vb=is_url($c[$d])){$v=($vb=="http"&&$bb?$c[$d]:"$vb://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$aa=h("val[$Oa][".bracket_escape($d)."]");$m=$_POST["val"][$Oa][bracket_escape($d)];$Ic=h(isset($m)?$m:$c[$d]);$Ac=strpos($a,"<i>...</i>");$Cc=is_utf8($a)&&!$Ac&&$y[$L][$d]==$c[$d]&&!$Y[$d];$Bc=ereg('text|lob',$g["type"]);echo(($_GET["modify"]&&$Cc)||isset($m)?"<td>".($Bc?"<textarea name='$aa' cols='30' rows='".(substr_count($c[$d],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$Ic</textarea>":"<input name='$aa' value='$Ic' size='$mc[$d]'>"):"<td id='$aa' ondblclick=\"".($Cc?"selectDblClick(this, event".($Bc?", 1":"").")":"alert('".h($Ac?lang(69):lang(70))."')").";\">".$n->selectVal($a,$v,$g));}}$n->backwardKeysPrint($Qc,$y[$L]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$uc);if($y||$P){$tc=true;if($_GET["page"]!="last"&&intval($A)&&count($wa)>=count($E)&&($va>=$A||$P)){$va=$G["Rows"];if(!isset($va)||$l||2*$P*$A>$va||($G["Engine"]=="InnoDB"&&$va<1e4)){ob_flush();flush();$va=$e->result("SELECT COUNT(*) FROM ".table($u).($l?" WHERE ".implode(" AND ",$l):""));}else{$tc=false;}}echo"<p class='pages'>";if(intval($A)&&$va>$A){$sc=floor(($va-1)/$A);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".lang(23)."', '".($P+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".lang(23)."</a>:".pagination(0,$P).($P>5?" ...":"");for($q=max(1,$P-4);$q<min($sc,$P+5);$q++){echo
pagination($q,$P);}echo($P+5<$sc?" ...":"").($tc?pagination($sc,$P):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(24)."</a>");}echo" (".($tc?"":"~ ").lang(71,$va).") ".checkbox("all",1,0,lang(72))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(57),'</legend><div>
<input type="submit" value="',lang(58),'" title="',lang(63),'">
<input type="submit" name="edit" value="',lang(57),'">
<input type="submit" name="clone" value="',lang(73),'">
<input type="submit" name="delete" value="',lang(61),'" onclick="return confirm(\'',lang(53);?> (' + (this.form['all'].checked ? <?php echo$va,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(74));echo$n->dumpOutput(1,$uc["output"])." ".$n->dumpFormat(1,$uc["format"]);echo" <input type='submit' name='export' value='".lang(74)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(75),!$y);echo"<input type='hidden' name='token' value='$Ba'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$uc["format"],1);echo" <input type='submit' name='import' value='".lang(76)."'>\n","</div></fieldset>\n";$n->selectEmailPrint(array_filter($Pb,'strlen'),$J);echo"</form>\n";}}}else{page_header(lang(44),"",false);echo"<form action='' method='post'>\n","<p>".lang(77).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(27)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(78).'<td>'.lang(79)."</thead>\n";foreach(table_status()as$f=>$c){$h=$n->tableName($c);if(isset($c["Engine"])&&$h!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$f,in_array($f,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($f).'">'.h($h).'</a>';$a=number_format($c["Rows"],0,'.',lang(80));echo"<td align='right'><a href='".h(ME."edit=").urlencode($f)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();