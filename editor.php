<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$dd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($dd){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$ld=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($ld){$$a=$ld;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$e;return$e;}function
idf_unescape($z){$vc=substr($z,-1);return
str_replace($vc.$vc,$vc,substr($z,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Oa){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Oa)){foreach($a
as$qa=>$q){unset($Oa[$d][$qa]);if(is_array($q)){$Oa[$d][stripslashes($qa)]=$q;$Oa[]=&$Oa[$d][stripslashes($qa)];}else{$Oa[$d][stripslashes($qa)]=($dd?$q:stripslashes($q));}}}}}function
bracket_escape($z,$Gd=false){static$fd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($z,($Gd?array_flip($fd):$fd));}function
h($v){return
htmlspecialchars($v,ENT_QUOTES);}function
nbsp($v){return(trim($v)!=""?h($v):"&nbsp;");}function
nl_br($v){return
str_replace("\n","<br>",$v);}function
checkbox($h,$m,$ob,$Rc="",$Pc=""){static$ea=0;$ea++;$b="<input type='checkbox'".($h?" name='$h' value='".h($m)."'":"").($ob?" checked":"").($Pc?" onclick=\"$Pc\"":"")." id='checkbox-$ea'>";return($Rc!=""?"<label for='checkbox-$ea'>$b".h($Rc)."</label>":$b);}function
optionlist($Fa,$Ld=null,$Fc=false){$b="";foreach($Fa
as$qa=>$q){if(is_array($q)){$b.='<optgroup label="'.h($qa).'">';}foreach((is_array($q)?$q:array($qa=>$q))as$d=>$a){$b.='<option'.($Fc||is_string($d)?' value="'.h($d).'"':'').(($Fc||is_string($d)?(string)$d:$a)===$Ld?' selected':'').'>'.h($a);}if(is_array($q)){$b.='</optgroup>';}}return$b;}function
html_select($h,$Fa,$m="",$Ta=true){if($Ta){return"<select name='".h($h)."'".(is_string($Ta)?" onchange=\"$Ta\"":"").">".optionlist($Fa,$m)."</select>";}$b="";foreach($Fa
as$d=>$a){$b.="<label><input type='radio' name='".h($h)."' value='".h($d)."'".($d==$m?" checked":"").">".h($a)."</label>";}return$b;}function
ini_bool($Hd){$a=ini_get($Hd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($v){global$e;return$e->quote($v);}function
get_vals($j,$x=0){global$e;$b=array();$i=$e->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$x];}}return$b;}function
get_key_vals($j,$M=null){global$e;if(!is_object($M)){$M=$e;}$b=array();$i=$M->query($j);while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}return$b;}function
get_rows($j,$M=null,$p="<p class='error'>"){global$e;if(!is_object($M)){$M=$e;}$b=array();$i=$M->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$p&&(headers_sent()||ob_get_level())){echo$p.error()."\n";}return$b;}function
unique_array($c,$X){foreach($X
as$S){if(ereg("PRIMARY|UNIQUE",$S["type"])){$b=array();foreach($S["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($l){$b=array();foreach((array)$l["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$l["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$md);remove_slashes(array(&$md));return
where($md);}function
where_link($r,$x,$m,$Fd="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($x)."&where%5B$r%5D%5Bop%5D=".urlencode($Fd)."&where%5B$r%5D%5Bval%5D=".urlencode($m);}function
cookie($h,$m){global$hb;$pb=array($h,(ereg("\n",$m)?"":$m),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$pb[]=true;}return
call_user_func_array('setcookie',$pb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Bb,$A,$D){global$pa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($pa))."|username|".session_name()),$k);return"$k[1]?".(SID&&!$_COOKIE?SID."&":"").($Bb!="server"||$A!=""?urlencode($Bb)."=".urlencode($A)."&":"")."username=".urlencode($D).($k[2]?"&$k[2]":"");}function
redirect($ja,$oa=null){if(isset($oa)){restart_session();$_SESSION["messages"][]=$oa;}if(isset($ja)){header("Location: ".($ja!=""?$ja:"."));exit;}}function
query_redirect($j,$ja,$oa,$Fb=true,$Ad=true,$Wc=false){global$e,$p,$n;if($Ad){$Wc=!$e->query($j);}$_c="";if($j){$_c=$n->messageQuery($j);}if($Wc){$p=error().$_c;return
false;}if($Fb){redirect($ja,$oa.$_c);}return
true;}function
queries($j=null){global$e;static$Ga=array();if(!isset($j)){return
implode(";\n",$Ga);}$Ga[]=$j;return$e->query($j);}function
apply_queries($j,$F,$od='table'){foreach($F
as$g){if(!queries("$j ".$od($g))){return
false;}}return
true;}function
queries_redirect($ja,$oa,$Fb){return
query_redirect(queries(),$ja,$oa,$Fb,false,!$Fb);}function
remove_from_uri($Aa=""){return
substr(preg_replace("~(?<=[?&])($Aa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($P,$qd){return" ".($P==$qd?$P+1:'<a href="'.h(remove_from_uri("page").($P?"&page=$P":"")).'">'.($P+1)."</a>");}function
get_file($d,$ad=false){$Z=$_FILES[$d];if(!$Z||$Z["error"]){return$Z["error"];}return
file_get_contents($ad&&ereg('\\.gz$',$Z["name"])?"compress.zlib://$Z[tmp_name]":($ad&&ereg('\\.bz2$',$Z["name"])?"compress.bzip2://$Z[tmp_name]":$Z["tmp_name"]));}function
upload_error($p){$Zc=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?lang(0).($Zc?" ".lang(1,$Zc):""):lang(2));}function
odd($b=' class="odd"'){static$r=0;if(!$b){$r=-1;}return($r++%
2?$b:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($v,$xa=80,$_d=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$xa})($)?)u",$v,$k)){preg_match("(^([\t\r\n -~]{0,$xa})($)?)",$v,$k);}return
h($k[1]).$_d.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Oa,$xd=array()){while(list($d,$a)=each($Oa)){if(is_array($a)){foreach($a
as$qa=>$q){$Oa[$d."[$qa]"]=$q;}}elseif(!in_array($d,$xd)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($g){$b=array();foreach(foreign_keys($g)as$K){foreach($K["source"]as$a){$b[$a][]=$K;}}return$b;}function
enum_input($E,$la,$f,$m){preg_match_all("~'((?:[^']|'')*)'~",$f["length"],$Y);foreach($Y[1]as$r=>$a){$a=stripcslashes(str_replace("''","'",$a));$ob=(is_int($m)?$m==$r+1:(is_array($m)?in_array($r+1,$m):$m===$a));echo" <label><input type='$E'$la value='".($r+1)."'".($ob?' checked':'').'>'.h($a).'</label>';}}function
input($f,$m,$N){global$W,$n,$Ia;$h=h(bracket_escape($f["field"]));echo"<td class='function'>";$V=(isset($_GET["select"])?array("orig"=>lang(3)):array())+$n->editFunctions($f);$la=" name='fields[$h]'";if($f["type"]=="enum"){echo
nbsp($V[""])."<td>".($V["orig"]?"<label><input type='radio'$la value='-1' checked><i>$V[orig]</i></label> ":""),$n->editInput($_GET["edit"],$f,$la,$m);enum_input("radio",$la,$f,$m);}else{$Sa=0;foreach($V
as$d=>$a){if($d===""||!$a){break;}$Sa++;}$Ta=($Sa?" onchange=\"var f = this.form['function[".addcslashes($h,"\r\n'\\")."]']; if ($Sa > f.selectedIndex) f.selectedIndex = $Sa;\"":"");$la.=$Ta;echo(count($V)>1?html_select("function[$h]",$V,!isset($N)||in_array($N,$V)||isset($V[$N])?$N:""):nbsp(reset($V))).'<td>';$Tc=$n->editInput($_GET["edit"],$f,$la,$m);if($Tc!=""){echo$Tc;}elseif($f["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$f["length"],$Y);foreach($Y[1]as$r=>$a){$a=stripcslashes(str_replace("''","'",$a));$ob=(is_int($m)?($m>>$r)&1:in_array($a,explode(",",$m),true));echo" <label><input type='checkbox' name='fields[$h][$r]' value='".(1<<$r)."'".($ob?' checked':'')."$Ta>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$f["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$h'$Ta>";}elseif(ereg('text|lob',$f["type"])){echo"<textarea ".($Ia!="sqlite"||ereg("\n",$m)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$la>".h($m).'</textarea>';}else{$nc=(!ereg('int',$f["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$f["length"],$k)?((ereg("binary",$f["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$f["unsigned"]?1:0)):($W[$f["type"]]?$W[$f["type"]]+($f["unsigned"]?0:1):0));echo"<input value='".h($m)."'".($nc?" maxlength='$nc'":"").(ereg('char|binary',$f["type"])&&$nc>20?" size='40'":"")."$la>";}}}function
process_input($f){global$n;$z=bracket_escape($f["field"]);$N=$_POST["function"][$z];$m=$_POST["fields"][$z];if($f["type"]=="enum"){if($m==-1){return
false;}if($m==""){return"NULL";}return
intval($m);}if($f["auto_increment"]&&$m==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($f["type"]=="set"){return
array_sum((array)$m);}if(ereg('blob|bytea|raw|file',$f["type"])&&ini_bool("file_uploads")){$Z=get_file("fields-$z");if(!is_string($Z)){return
false;}return
q($Z);}return$n->processInput($f,$m,$N);}function
search_tables(){global$n,$e;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$oc=false;foreach(table_status()as$g=>$G){$h=$n->tableName($G);if(isset($G["Engine"])&&$h!=""&&(!$_POST["tables"]||in_array($g,$_POST["tables"]))){$i=$e->query("SELECT".limit("1 FROM ".table($g)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($g),array())),1));if($i->fetch_row()){if(!$oc){echo"<ul>\n";$oc=true;}echo"<li><a href='".h(ME."select=".urlencode($g)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($h)."</a>\n";}}}echo($oc?"</ul>":"<p class='message'>".lang(4))."\n";}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$c)."\n";}function
apply_sql_function($N,$x){return($N?($N=="unixepoch"?"DATETIME($x, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$x)"):$x);}function
password_file(){$Eb=ini_get("upload_tmp_dir");if(!$Eb){if(function_exists('sys_get_temp_dir')){$Eb=sys_get_temp_dir();}else{$R=@tempnam("","");if(!$R){return
false;}$Eb=dirname($R);unlink($R);}}$R="$Eb/adminer.key";$b=@file_get_contents($R);if($b){return$b;}$sc=@fopen($R,"w");if($sc){$b=md5(uniqid(mt_rand(),true));fwrite($sc,$b);fclose($sc);}return$b;}function
is_email($bb){$jd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$qb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$da="$jd+(\\.$jd+)*@($qb?\\.)+$qb";return
preg_match("(^$da(,\\s*$da)*\$)i",$bb);}function
is_url($v){$qb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($qb?\\.)+$qb(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$v,$k)?strtolower($k[1]):"");}function
print_fieldset($ea,$Ed,$ud=false){echo"<fieldset><legend><a href='#fieldset-$ea' onclick=\"return !toggle('fieldset-$ea');\">$Ed</a></legend><div id='fieldset-$ea'".($ud?"":" class='hidden'").">\n";}function
bold($v,$td){return($td?"<b>$v</b>":$v);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$hb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$pb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$pb[]=true;}call_user_func_array('session_set_cookie_params',$pb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);$jb=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்',);function
lang($z,$Qb=null){global$sa,$aa;$eb=$aa[$z];if(is_array($eb)&&$eb){$sd=($Qb==1||(!$Qb&&$sa=='fr')?0:((!$Qb||$Qb>=5)&&ereg('cs|sk|ru',$sa)?2:1));$eb=$eb[$sd];}$cd=func_get_args();array_shift($cd);return
vsprintf((isset($eb)?$eb:$z),$cd);}function
switch_lang(){global$sa,$jb;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(5).": ".html_select("lang",$jb,$sa,"this.form.submit();")," <input type='submit' value='".lang(6)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$sa="en";if(isset($jb[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$sa=$_COOKIE["adminer_lang"];}elseif(isset($jb[$_SESSION["lang"]])){$sa=$_SESSION["lang"];}else{$Rb=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Y,PREG_SET_ORDER);foreach($Y
as$k){$Rb[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Rb);foreach($Rb
as$d=>$Wb){if(isset($jb[$d])){$sa=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($Rb[$d])&&isset($jb[$d])){$sa=$d;break;}}}switch($sa){case"cs":$aa=array('Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','původní','Žádné tabulky.','Jazyk','Vybrat','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Stránka','poslední',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','d.m.[rrrr]','prázdné','Odhlásit','Server','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Opravdu?','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty zvyšte délku textů.','Ke změně této hodnoty použijte odkaz upravit.',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import CSV','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Ze serveru');break;case"de":$aa=array('Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','Original','Keine Tabellen.','Sprache','Benutzung','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Seite','letzte',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'now','t.m.[jjjj]','leer','Abmelden','Server','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Sind Sie sicher ?','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen',array('%d Artikel betroffen.','%d Artikel betroffen.'),'Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Vergrössern Sie die Textlänge um den Wert ändern zu können.','Benutzen Sie den Link zum editieren dieses Wertes.',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importiere CSV','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Struktur anzeigen');break;case"en":$aa=array('Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','original','No tables.','Language','Use','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Page','last',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','[yyyy]-mm-dd','empty','Logout','Server','No extension','None of the supported PHP extensions (%s) are available.','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','Too big POST data. Reduce the data or increase the %s configuration directive.','Are you sure?','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Increase text length to modify this value.','Use edit link to modify this value.',array('%d row','%d rows'),'whole result','Clone','Export','CSV Import','Import','Search data in tables','Table','Rows',',','%d in total');break;case"es":$aa=array('No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','original','No existen tablas.','Idioma','Usar','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Página','último',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'now','dd/mm/[aaaa]','ningúno','Logout','Servidor','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Está seguro?','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Aumente el tamaño del campo de texto para modificar este valor.','Utilice el enlace de modificar para realizar los cambios.',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar CSV','Importar','Buscar datos en tablas','Tabla','Registros',' ','Mostrar estructura');break;case"et":$aa=array('Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','originaal','Tabeleid ei leitud.','Keel','Kasuta','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Lehekülg','viimane',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada',array('Saadetud kirju: %d.','Saadetud kirju: %d.'),'now','d.m.[yyyy]','tühi','Logi välja','Server','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kas oled kindel?','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta',array('Mõjutatud kirjeid: %d.','Mõjutatud kirjeid: %d.'),'Väärtuse muutmiseks topelt-kliki sellel.',array('Imporditi %d rida.','Imporditi %d rida.'),'Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks suurenda tekstiveeru pikkust.','Väärtuse muutmiseks kasuta muutmislinki.',array('%d rida','%d rida'),'Täielikud tulemused','Kloon','Ekspordi','Impordi CSV','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Näita struktuuri');break;case"fr":$aa=array('Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','original','Aucune table.','Langue','Utiliser','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Editeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Page','dernière',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','jj/mm/[aaaa]','vide','Déconnexion','Serveur','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir!','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Êtes-vous certain ?','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Augmentez la longueur de texte affiché pour modifier cette valeur.','Utilisez le lien "modifier" pour modifier cette valeur.',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer CSV','Importer','Rechercher dans les tables','Table','Lignes',',','Afficher la structure');break;case"hu":$aa=array('Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','eredeti','Nincs tábla.','Nyelv','Használ','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','oldal','utoljára',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválaszt','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','[yyyy].mm.dd','üres','Kilépés','Szerver','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Biztos benne?','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva','%d sor importálva'),'Nem tudom kiválasztani a táblát.','Nincs megjeleníthető eredmény.','szerkeszt','Reláció','Növeld a szöveg hosszát, hogy módosítani tudd ezt az értéket.','Használd a szerkesztés hivatkozást ezen érték módosításához.',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','CSV importálása','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Szerverről');break;case"it":$aa=array('Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','originale','No tabelle.','Lingua','Usa','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Pagina','ultima',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'now','dd/mm/[yyyy]','vuoto','Esci','Server','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Sicuro?','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento','Il risultato consiste in %d elementi'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Aumenta la lunghezza del testo per modificare questo valore.','Usa il link modifica per modificare questo valore.',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa da CSV','Importa','Cerca nelle tabelle','Tabella','Righe','.','Visualizza struttura');break;case"ja":$aa=array('ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','元','テーブルがありません。','言語','使用','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','ページ','最終','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','[yyyy].mm.dd','空','ログアウト','サーバ','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','実行しますか？','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','編集枠を広げる','リンクを編集する','%d 行','全結果','クローン','エクスポート','CSV インポート','インポート','データを検索する','テーブル','行数',',','データベース種類');break;case"nl":$aa=array('Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','origineel','Geen tabellen.','Taal','Gebruik','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Pagina','laatste',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'now','dd-mm-[jjjj]','leeg','Uitloggen','Server','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Weet u het zeker?','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Verhoog de lengte om deze waarde te bewerken.','Gebruik de link "bewerk" om deze waarde te wijzigen.',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','CSV Import','Importeren','Zoeken in database','Tabel','Rijen','.','Toon structuur');break;case"ru":$aa=array('Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','исходный','В базе данных нет таблиц.','Язык','Выбрать','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Страница','последняя',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'now','дд.мм.[гггг]','пусто','Выйти','Сервер','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Вы уверены?','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Увеличь длину текста, чтобы изменить это значение.','Изменить это значение можно с помощью ссылки «изменить».',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Експорт','Импорт CSV','Импорт','Поиск в таблицах','Таблица','Строк',' ','Показать структуру');break;case"sk":$aa=array('Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','originál','Žiadne tabuľky.','Jazyk','Vybrať','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Stránka','posledný',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'now','d.m.[rrrr]','prázdne','Odhlásiť','Server','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Naozaj?','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty zvýšte dĺžku textov.','Pre zmenu tejto hodnoty použite odkaz upraviť.',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import CSV','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Vypísať dáta');break;case"ta":$aa=array('கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','ப‌க்க‌ம்','க‌டைசி',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்.','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','dd/mm/[yyyy]','வெறுமை (empty)','வெளியேறு','வ‌ழ‌ங்கி (Server)','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','நிச்ச‌ய‌மாக‌ ?','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை.','வ‌ரிசை இல்லை.','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற, டெக்ஸ்ட் நீள‌த்தினை அதிக‌ரிக்க‌வும்.','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இம்போர்ட் CSV','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','%s ப‌திப்பு: %s through PHP extension %s');break;case"zh-tw":$aa=array('無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','原始','沒有資料表。','語言','使用','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','頁','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','now','[yyyy].mm.dd','空值','登出','伺服器','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','POST 資料太大。減少資料或者增加 %s 的設定值。','你確定嗎？','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','增加字串長度來修改。','使用編輯連結來修改。','%d行','所有結果','複製','匯出','匯入 CSV','匯入','在資料庫搜尋','資料表','行數',',','秀出結構');break;case"zh":$aa=array('不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','原始','没有表。','语言','使用','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','页面','最后','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','now','[yyyy].mm.dd','空','注销','服务器','没有扩展','没有支持的 PHP 扩展可用（%s）。','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','你确定吗？','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','增加文本长度以修改该值。','使用编辑链接来修改该值。','%d 行','所有结果','克隆','导出','CSV 导入','导入','在表中搜索数据','表','行数',',','显示结构');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($vd,$D,$I,$wd='auth_error'){set_exception_handler($wd);parent::__construct($vd,$D,$I);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ca=false){$i=parent::query($j);if(!$i){$zd=$this->errorInfo();$this->error=$zd[2];return
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
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$ra=array();$pa=array();$ra[]="SQLite";$ra[]="SQLite3";$ra[]="PDO_SQLite";if(extension_loaded("sqlite3")||extension_loaded("pdo_sqlite")){$pa["sqlite"]="SQLite 3";}if(extension_loaded("sqlite")||extension_loaded("pdo_sqlite")){$pa["sqlite2"]="SQLite 2";}if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite2"])?"sqlite":"sqlite3")){if(isset($_GET["sqlite2"])){class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($R);}function
query($j,$Ca=false){$rd=($Ca?"unbufferedQuery":"query");$i=@$this->_link->$rd($j,SQLITE_BOTH,$p);if(!$i){$this->error=$p;return
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
fetch_field(){$h=$this->_result->fieldName($this->_offset++);$da='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($da\\.)?$da\$~",$h,$k)){$g=($k[3]!=""?$k[3]:idf_unescape($k[2]));$h=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$h,"orgname"=>$h,"orgtable"=>$g,);}}}else{class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($R){$this->_link=new
SQLite3($R);$ic=$this->_link->version();$this->server_info=$ic["versionString"];}function
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
fetch_field(){$x=$this->_offset++;$E=$this->_result->columnType($x);return(object)array("name"=>$this->_result->columnName($x),"type"=>$E,"charsetnr"=>($E==SQLITE3_BLOB?63:0),);}function
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
limit($j,$l,$_,$T=0,$ga=" "){return" $j$l".(isset($_)?$ga."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){global$e;return($e->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$l,1):" $j$l");}function
db_collation($C,$_b){global$e;return$e->result("PRAGMA encoding");}function
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
fields($g,$zb=false){$b=array();foreach(get_rows("PRAGMA table_info(".table($g).")")as$c){$E=strtolower($c["type"]);$gb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$E)?"integer":(eregi("char|clob|text",$E)?"text":(eregi("blob",$E)?"blob":(eregi("real|floa|doub",$E)?"real":"numeric")))),"full_type"=>$E,"default"=>(ereg("'(.*)'",$gb,$k)?str_replace("''","'",$k[1]):($gb=="NULL"?null:$gb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$E)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($g,$M=null){$b=array();$na=array();foreach(fields($g)as$f){if($f["primary"]){$na[]=$f["field"];}}if($na){$b[""]=array("type"=>"PRIMARY","columns"=>$na,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($g).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$pd){$b[$c["name"]]["columns"][]=$pd["name"];}}return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($g).")")as$c){$K=&$b[$c["id"]];if(!$K){$K=$c;}$K["source"][]=$c["from"];$K["target"][]=$c["to"];}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($h))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($C){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
create_database($C,$H){global$e;if(file_exists($C)){$e->error=lang(7);return
false;}$u=new
Min_SQLite($C);$u->query('PRAGMA encoding = "UTF-8"');$u->query('CREATE TABLE adminer (i)');$u->query('DROP TABLE adminer');return
true;}function
drop_databases($O){global$e;$e->Min_SQLite(":memory:");foreach($O
as$C){if(!@unlink($C)){$e->error=lang(7);return
false;}}return
true;}function
rename_database($h,$H){global$e;$e->Min_SQLite(":memory:");$e->error=lang(7);return@rename(DB,$h);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($g,$h,$t,$Ya,$Va,$fb,$H,$ya,$Ab){$s=array();foreach($t
as$f){if($f[1]){$s[]=($g!=""&&$f[0]==""?"ADD ":"  ").implode($f[1]);}}$s=array_merge($s,$Ya);if($g!=""){foreach($s
as$a){if(!queries("ALTER TABLE ".table($g)." $a")){return
false;}}if($g!=$h&&!queries("ALTER TABLE ".table($g)." RENAME TO ".table($h))){return
false;}}elseif(!queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)")){return
false;}if($ya){queries("UPDATE sqlite_sequence SET seq = $ya WHERE name = ".q($h));}return
true;}function
alter_indexes($g,$s){foreach($s
as$a){if(!queries(($a[2]?"DROP INDEX":"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g))." $a[1]")){return
false;}}return
true;}function
truncate_tables($F){return
apply_queries("DELETE FROM",$F);}function
drop_views($ba){return
apply_queries("DROP VIEW",$ba);}function
drop_tables($F){return
apply_queries("DROP TABLE",$F);}function
move_tables($F,$ba,$La){return
false;}function
trigger($h){global$e;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$e->result("SELECT sql FROM sqlite_master WHERE name = ".q($h)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$h,"Statement"=>$k[3]);}function
triggers($g){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($g))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$E){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$na){return
queries("REPLACE INTO ".table($g)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ROWID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($nd){return
true;}function
create_sql($g,$ya){global$e;return$e->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($g));}function
truncate_sql($g){return"DELETE FROM ".table($g);}function
use_sql($Q){}function
trigger_sql($g,$yc){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($g)));}function
show_variables(){global$e;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$e->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$yd){list($d,$a)=explode("=",$yd,2);$b[$d]=$a;}return$b;}function
support($Na){return
ereg('^(view|trigger|variables|status|dump)$',$Na);}$Ia="sqlite";$W=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ea=array_keys($W);$Ub=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("hex","length","lower","round","unixepoch","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$Yb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ra[]="PgSQL";$ra[]="PDO_PgSQL";if(extension_loaded("pgsql")||extension_loaded("pdo_pgsql")){$pa["pgsql"]="PostgreSQL";}if(isset($_GET["pgsql"])){define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Rd,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($A,$D,$I){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($A,"'\\"))."' user='".addcslashes($D,"'\\")."' password='".addcslashes($I,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect($this->_string,PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$ic=pg_version($this->_link);$this->server_info=$ic["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($v){return"'".pg_escape_string($this->_link,$v)."'";}function
select_db($Q){if($Q==DB){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($Q,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
close(){$this->_link=@pg_connect($this->_string);}function
query($j,$Ca=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
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
fetch_field(){$x=$this->_offset++;$b=new
stdClass;if(function_exists('pg_field_table')){$b->orgtable=pg_field_table($this->_result,$x);}$b->name=pg_field_name($this->_result,$x);$b->orgname=$b->name;$b->type=pg_field_type($this->_result,$x);$b->charsetnr=($b->type=="bytea"?63:0);return$b;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($A,$D,$I){$v="pgsql:host='".str_replace(":","' port='",addcslashes($A,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($v.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$D,$I);return
true;}function
select_db($Q){return(DB==$Q);}function
close(){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$ka=$n->credentials();if($e->connect($ka[0],$ka[1],$ka[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$l,$_,$T=0,$ga=" "){return" $j$l".(isset($_)?$ga."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($C,$_b){global$e;return$e->result("SHOW LC_COLLATE");}function
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
fields($g,$zb=false){$b=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($g)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
".($zb?"":"AND a.attnum > 0")."
ORDER BY a.attnum < 0, a.attnum")as$c){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$b[$c["field"]]=$c;}return$b;}function
indexes($g,$M=null){global$e;if(!is_object($M)){$M=$e;}$b=array();$Vc=$M->result("SELECT oid FROM pg_class WHERE relname = ".q($g));$J=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Vc AND attnum > 0",$M);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Vc AND ci.oid = i.indexrelid",$M)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Nd){$b[$c["relname"]]["columns"][]=$J[$Nd];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($g))as$c){$K=&$b[$c["constraint_name"]];if(!$K){$K=$c;}$K["source"][]=$c["column_name"];$K["target"][]=$c["ref"];}return$b;}function
view($h){global$e;return
array("select"=>$e->result("SELECT pg_get_viewdef(".q($h).")"));}function
collations(){return
array();}function
information_schema($C){return($C=="information_schema");}function
error(){global$e;$b=h($e->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$b,$k)){$b=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($b);}function
exact_value($a){return
q($a);}function
create_database($C,$H){return
queries("CREATE DATABASE ".idf_escape($C).($H?" ENCODING ".idf_escape($H):""));}function
drop_databases($O){global$e;$e->close();return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($h,$H){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($h));}function
auto_increment(){return"";}function
alter_table($g,$h,$t,$Ya,$Va,$fb,$H,$ya,$Ab){$s=array();$Ga=array();foreach($t
as$f){$x=idf_escape($f[0]);$a=$f[1];if(!$a){$s[]="DROP $x";}else{$zc=$a[5];unset($a[5]);if(isset($a[6])&&$f[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($f[0]==""){$s[]=($g!=""?"ADD ":"  ").implode($a);}else{if($x!=$a[0]){$Ga[]="ALTER TABLE ".table($g)." RENAME $x TO $a[0]";}$s[]="ALTER $x TYPE$a[1]";if(!$a[6]){$s[]="ALTER $x ".($a[3]?"SET$a[3]":"DROP DEFAULT");$s[]="ALTER $x ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($f[0]!=""||$zc!=""){$Ga[]="COMMENT ON COLUMN ".table($g).".$a[0] IS ".($zc!=""?substr($zc,9):"''");}}}$s=array_merge($s,$Ya);if($g==""){array_unshift($Ga,"CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)");}elseif($s){array_unshift($Ga,"ALTER TABLE ".table($g)."\n".implode(",\n",$s));}if($g!=""&&$g!=$h){$Ga[]="ALTER TABLE ".table($g)." RENAME TO ".table($h);}if($g!=""||$Va!=""){$Ga[]="COMMENT ON TABLE ".table($h)." IS ".q($Va);}if($ya!=""){}foreach($Ga
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($g,$s){$Qa=array();$_a=array();foreach($s
as$a){if($a[0]!="INDEX"){$Qa[]=($a[2]?"\nDROP CONSTRAINT ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}elseif($a[2]){$_a[]=$a[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g)." $a[1]")){return
false;}}return((!$Qa||queries("ALTER TABLE ".table($g).implode(",",$Qa)))&&(!$_a||queries("DROP INDEX ".implode(", ",$_a))));}function
truncate_tables($F){return
queries("TRUNCATE ".implode(", ",array_map('table',$F)));return
true;}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$ba,$La){foreach($F
as$g){if(!queries("ALTER TABLE ".table($g)." SET SCHEMA ".idf_escape($La))){return
false;}}foreach($ba
as$g){if(!queries("ALTER VIEW ".table($g)." SET SCHEMA ".idf_escape($La))){return
false;}}return
true;}function
trigger($h){$y=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($h));return
reset($y);}function
triggers($g){$b=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($g))as$c){$b[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$na){global$e;$U=array();$l=array();foreach($o
as$d=>$a){$U[]="$d = $a";if(isset($na[idf_unescape($d)])){$l[]="$d = $a";}}return($l&&queries("UPDATE ".table($g)." SET ".implode(", ",$U)." WHERE ".implode(" AND ",$l))&&$e->affected_rows)||queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
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
set_schema($wc){global$e,$W,$Ea;$b=$e->query("SET search_path TO ".idf_escape($wc));foreach(types()as$E){if(!isset($W[$E])){$W[$E]=0;$Ea[lang(8)][]=$E;}}return$b;}function
use_sql($Q){return"\connect ".idf_escape($Q);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($Na){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$Na);}$Ia="pgsql";$W=array();$Ea=array();foreach(array(lang(9)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(10)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(11)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(12)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(13)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(14)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$W+=$a;$Ea[$d]=array_keys($a);}$Ub=array();$ub=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vb=array("avg","count","count distinct","max","min","sum");$Yb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ra[]="OCI8";$ra[]="PDO_OCI";if(extension_loaded("oci8")||extension_loaded("pdo_oci")){$pa["oracle"]="Oracle";}if(isset($_GET["oracle"])){define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Rd,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($A,$D,$I){$this->_link=@oci_new_connect($D,$I,$A);if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$p=oci_error();$this->error=$p["message"];return
false;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
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
result($j,$f=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$f);}}class
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
connect($A,$D,$I){}function
select_db($Q){}}}function
idf_escape($z){return'"'.str_replace('"','""',$z).'"';}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$ka=$n->credentials();if($e->connect($ka[0],$ka[1],$ka[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$l,$_,$T=0,$ga=" "){return" $j$l".(isset($_)?($l?" AND":$ga."WHERE").($T?" rownum > $T AND":"")." rownum <= ".($_+$T):"");}function
limit1($j,$l){return" $j$l";}function
db_collation($C,$_b){global$e;return$e->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($O){return
array();}function
table_status($h=""){$b=array();$nb=q($h);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($h!=""?" AND table_name = $nb":"")."
UNION SELECT view_name, 'view' FROM user_views".($h!=""?" WHERE view_name = $nb":""))as$c){if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return$G["Engine"]=="view";}function
fk_support($G){return
true;}function
fields($g,$zb=false){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($g)." ORDER BY column_id")as$c){$E=$c["DATA_TYPE"];$xa="$c[DATA_PRECISION],$c[DATA_SCALE]";if($xa==","){$xa=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$E.($xa?"($xa)":""),"type"=>strtolower($E),"length"=>$xa,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($g,$M=null){return
array();}function
view($h){$y=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($h));return
reset($y);}function
collations(){return
array();}function
information_schema($C){return
false;}function
error(){global$e;return
h($e->error);}function
exact_value($a){return
q($a);}function
explain($e,$j){$e->query("EXPLAIN PLAN FOR $j");return$e->query("SELECT * FROM plan_table");}function
alter_table($g,$h,$t,$Ya,$Va,$fb,$H,$ya,$Ab){$s=$_a=array();foreach($t
as$f){$a=$f[1];if($a&&$f[0]!=""&&idf_escape($f[0])!=$a[0]){queries("ALTER TABLE ".table($g)." RENAME COLUMN ".idf_escape($f[0])." TO $a[0]");}if($a){$s[]=($g!=""?($f[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($g!=""?")":"");}else{$_a[]=idf_escape($f[0]);}}if($g==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n)");}return(!$s||queries("ALTER TABLE ".table($g)."\n".implode("\n",$s)))&&(!$_a||queries("ALTER TABLE ".table($g)." DROP (".implode(", ",$_a).")"))&&($g==$h||queries("ALTER TABLE ".table($g)." RENAME TO ".table($h)));}function
foreign_keys($g){return
array();}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($ba){return
apply_queries("DROP VIEW",$ba);}function
drop_tables($F){return
apply_queries("DROP TABLE",$F);}function
begin(){return
true;}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($nd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$y=get_rows('SELECT * FROM v$instance');return
reset($y);}function
support($Na){return
ereg("view|drop_col|variables|status",$Na);}$Ia="oracle";$W=array();$Ea=array();foreach(array(lang(9)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(10)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(11)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(12)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$W+=$a;$Ea[$d]=array_keys($a);}$Ub=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("length","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$Yb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ra[]="SQLSRV";$ra[]="MSSQL";if(extension_loaded("sqlsrv")||extension_loaded("mssql")){$pa["mssql"]="MS SQL";}if(isset($_GET["mssql"])){define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$p){$this->error.="$p[message]\n";}$this->error=rtrim($this->error);}function
connect($A,$D,$I){$this->_link=@sqlsrv_connect($A,array("UID"=>$D,"PWD"=>$I));if($this->_link){$Od=sqlsrv_server_info($this->_link);$this->server_info=$Od['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
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
seek($T){for($r=0;$r<$T;$r++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($A,$D,$I){$this->_link=@mssql_connect($A,$D,$I);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($v){return"'".str_replace("'","''",$v)."'";}function
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
idf_escape($z){return"[".str_replace("]","]]",$z)."]";}function
table($z){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$ka=$n->credentials();if($e->connect($ka[0],$ka[1],$ka[2])){return$e;}return$e->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$l,$_,$T=0,$ga=" "){return(isset($_)?" TOP (".($_+$T).")":"")." $j$l";}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($C,$_b){global$e;return$e->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($C));}function
engines(){return
array();}function
logged_user(){global$e;return$e->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($O){global$e;$b=array();foreach($O
as$C){$e->select_db($C);$b[$C]=$e->result("SELECT COUNT(*) FROM information_schema.TABLES");}return$b;}function
table_status($h=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($h!=""?" AND name = ".q($h):""))as$c){if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return$G["Engine"]=="VIEW";}function
fk_support($G){return
true;}function
fields($g,$zb=false){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($g))as$c){$E=$c["type"];$xa=(ereg("char|binary",$E)?$c["max_length"]:($E=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$E.($xa?"($xa)":""),"type"=>$E,"length"=>$xa,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($g,$M=null){global$e;if(!is_object($M)){$M=$e;}$b=array();foreach(get_rows("SELECT indexes.name, key_ordinal, is_unique, is_primary_key, columns.name AS column_name
FROM sys.indexes
INNER JOIN sys.index_columns ON indexes.object_id = index_columns.object_id AND indexes.index_id = index_columns.index_id
INNER JOIN sys.columns ON index_columns.object_id = columns.object_id AND index_columns.column_id = columns.column_id
WHERE OBJECT_NAME(indexes.object_id) = ".q($g),$M)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$e->result("SELECT view_definition FROM information_schema.views WHERE table_schema = SCHEMA_NAME() AND table_name = ".q($h))));}function
collations(){$b=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$H){$b[ereg_replace("_.*","",$H)][]=$H;}return$b;}function
information_schema($C){return
false;}function
error(){global$e;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$e->error)));}function
exact_value($a){return
q($a);}function
create_database($C,$H){return
queries("CREATE DATABASE ".idf_escape($C).($H?" COLLATE ".idf_escape($H):""));}function
drop_databases($O){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$O)));}function
rename_database($h,$H){if($H){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE ".idf_escape($H));}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($h));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".preg_replace('~\\D+~','',$_POST["Auto_increment"]).",1)":"");}function
alter_table($g,$h,$t,$Ya,$Va,$fb,$H,$ya,$Ab){$s=array();foreach($t
as$f){$x=idf_escape($f[0]);$a=$f[1];if(!$a){$s["DROP"][]=" COLUMN $f[0]";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($f[0]==""){$s["ADD"][]="\n  ".implode("",$a);}else{unset($a[6]);if($x!=$a[0]){queries("EXEC sp_rename ".q(table($g).".$x").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$s["ALTER COLUMN ".implode("",$a)][]="";}}}if($g==""){return
queries("CREATE TABLE ".table($h)." (".implode(",",(array)$s["ADD"])."\n)");}if($g!=$h){queries("EXEC sp_rename ".q(table($g)).", ".q($h));}foreach($s
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($h)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($g,$s){$S=array();$_a=array();foreach($s
as$a){if($a[2]){if($a[0]=="PRIMARY"){$_a[]=$a[1];}else{$S[]="$a[1] ON ".table($g);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g):"ALTER TABLE ".table($g)." ADD PRIMARY KEY")." $a[1]")){return
false;}}return(!$S||queries("DROP INDEX ".implode(", ",$S)))&&(!$_a||queries("ALTER TABLE ".table($g)." DROP ".implode(", ",$_a)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$na){$U=array();$l=array();foreach($o
as$d=>$a){$U[]="$d = $a";if(isset($na[idf_unescape($d)])){$l[]="$d = $a";}}return
queries("MERGE ".table($g)." USING (VALUES(".implode(", ",$o).")) AS source (c".implode(", c",range(1,count($o))).") ON ".implode(" AND ",$l)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$U)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).");");}function
last_id(){global$e;return$e->result("SELECT SCOPE_IDENTITY()");}function
explain($e,$j){$e->query("SET SHOWPLAN_ALL ON");$b=$e->query($j);$e->query("SET SHOWPLAN_ALL OFF");return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($g))as$c){$K=&$b[$c["FK_NAME"]];$K["table"]=$c["PKTABLE_NAME"];$K["source"][]=$c["FKCOLUMN_NAME"];$K["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$ba,$La){return
apply_queries("ALTER SCHEMA ".idf_escape($La)." TRANSFER",array_merge($F,$ba));}function
trigger($h){$y=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($h));$b=reset($y);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
triggers($g){$b=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($g))as$c){$b[$c["name"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$e;if($_GET["ns"]!=""){return$_GET["ns"];}return$e->result("SELECT SCHEMA_NAME()");}function
set_schema($wc){return
true;}function
use_sql($Q){return"USE ".idf_escape($Q);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Na){return
ereg('^(scheme|trigger|view|drop_col)$',$Na);}$Ia="mssql";$W=array();$Ea=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(10)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(11)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(12)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$W+=$a;$Ea[$d]=array_keys($a);}$Ub=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$V=array("len","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$Yb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ra[]="MySQLi";$ra[]="MySQL";$ra[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$pa=array("server"=>"MySQL")+$pa;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($A,$D,$I){mysqli_report(MYSQLI_REPORT_OFF);list($Pd,$Kb)=explode(":",$A,2);$b=@$this->real_connect(($A!=""?$Pd:ini_get("mysqli.default_host")),("$A$D"!=""?$D:ini_get("mysqli.default_user")),("$A$D$I"!=""?$I:ini_get("mysqli.default_pw")),null,(is_numeric($Kb)?$Kb:ini_get("mysqli.default_port")),(!is_numeric($Kb)?$Kb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$f];}function
quote($v){return"'".$this->escape_string($v)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($A,$D,$I){$this->_link=@mysql_connect(($A!=""?$A:ini_get("mysql.default_host")),("$A$D"!=""?$D:ini_get("mysql.default_user")),("$A$D$I"!=""?$I:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($v){return"'".mysql_real_escape_string($v,$this->_link)."'";}function
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
result($j,$f=0){$i=$this->query($j);if(!$i){return
false;}return
mysql_result($i->_result,0,$f);}}class
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
connect($A,$D,$I){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$A)),$D,$I);$this->query("SET NAMES utf8");return
true;}function
select_db($Q){return$this->query("USE ".idf_escape($Q));}function
query($j,$Ca=false){$this->setAttribute(1000,!$Ca);return
parent::query($j,$Ca);}}}function
idf_escape($z){return"`".str_replace("`","``",$z)."`";}function
table($z){return
idf_escape($z);}function
connect(){global$n;$e=new
Min_DB;$ka=$n->credentials();if($e->connect($ka[0],$ka[1],$ka[2])){$e->query("SET SQL_QUOTE_SHOW_CREATE=1");return$e;}return$e->error;}function
get_databases($Jd=true){$b=&get_session("dbs");if(!isset($b)){if($Jd){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($j,$l,$_,$T=0,$ga=" "){return" $j$l".(isset($_)?$ga."LIMIT $_".($T?" OFFSET $T":""):"");}function
limit1($j,$l){return
limit($j,$l,1);}function
db_collation($C,$_b){global$e;$b=null;$Qa=$e->result("SHOW CREATE DATABASE ".idf_escape($C),1);if(preg_match('~ COLLATE ([^ ]+)~',$Qa,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Qa,$k)){$b=$_b[$k[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$e;return$e->result("SELECT USER()");}function
tables_list(){global$e;return
get_key_vals("SHOW".($e->server_info>=5?" FULL":"")." TABLES");}function
count_tables($O){$b=array();foreach($O
as$C){$b[$C]=count(get_vals("SHOW TABLES IN ".idf_escape($C)));}return$b;}function
table_status($h=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($h!=""?" LIKE ".q(addcslashes($h,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($h!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($G){return!isset($G["Rows"]);}function
fk_support($G){return($G["Engine"]=="InnoDB");}function
fields($g,$zb=false){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($g))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($g,$M=null){global$e;if(!is_object($M)){$M=$e;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($g),$M)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($g){global$e,$xc;static$da='`(?:[^`]|``)+`';$b=array();$bd=$e->result("SHOW CREATE TABLE ".table($g),1);if($bd){preg_match_all("~CONSTRAINT ($da) FOREIGN KEY \\(((?:$da,? ?)+)\\) REFERENCES ($da)(?:\\.($da))? \\(((?:$da,? ?)+)\\)(?: ON DELETE (".implode("|",$xc)."))?(?: ON UPDATE (".implode("|",$xc)."))?~",$bd,$Y,PREG_SET_ORDER);foreach($Y
as$k){preg_match_all("~$da~",$k[2],$mc);preg_match_all("~$da~",$k[5],$La);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$mc[0]),"target"=>array_map('idf_unescape',$La[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
view($h){global$e;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$e->result("SHOW CREATE VIEW ".table($h),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$c){$b[$c["Charset"]][]=$c["Collation"];}ksort($b);foreach($b
as$d=>$a){sort($b[$d]);}return$b;}function
information_schema($C){global$e;return($e->server_info>=5&&$C=="information_schema");}function
error(){global$e;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$e->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($C,$H){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($C).($H?" COLLATE ".q($H):""));}function
drop_databases($O){set_session("dbs",null);return
apply_queries("DROP DATABASE",$O,'idf_escape');}function
rename_database($h,$H){if(create_database($h,$H)){$cb=array();foreach(tables_list()as$g=>$E){$cb[]=table($g)." TO ".idf_escape($h).".".table($g);}if(!$cb||queries("RENAME TABLE ".implode(", ",$cb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Zb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$S){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$S["columns"],true)){$Zb="";break;}if($S["type"]=="PRIMARY"){$Zb=" UNIQUE";}}}return" AUTO_INCREMENT$Zb";}function
alter_table($g,$h,$t,$Ya,$Va,$fb,$H,$ya,$Ab){$s=array();foreach($t
as$f){$s[]=($f[1]?($g!=""?($f[0]!=""?"CHANGE ".idf_escape($f[0]):"ADD"):" ")." ".implode($f[1]).($g!=""?" $f[2]":""):"DROP ".idf_escape($f[0]));}$s=array_merge($s,$Ya);$Yc="COMMENT=".q($Va).($fb?" ENGINE=".q($fb):"").($H?" COLLATE ".q($H):"").($ya!=""?" AUTO_INCREMENT=$ya":"").$Ab;if($g==""){return
queries("CREATE TABLE ".table($h)." (\n".implode(",\n",$s)."\n) $Yc");}if($g!=$h){$s[]="RENAME TO ".table($h);}$s[]=$Yc;return
queries("ALTER TABLE ".table($g)."\n".implode(",\n",$s));}function
alter_indexes($g,$s){foreach($s
as$d=>$a){$s[$d]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($g).implode(",",$s));}function
truncate_tables($F){return
apply_queries("TRUNCATE TABLE",$F);}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($F){return
queries("DROP TABLE ".implode(", ",array_map('table',$F)));}function
move_tables($F,$ba,$La){$cb=array();foreach(array_merge($F,$ba)as$g){$cb[]=table($g)." TO ".idf_escape($La).".".table($g);}return
queries("RENAME TABLE ".implode(", ",$cb));}function
trigger($h){$y=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($h));return
reset($y);}function
triggers($g){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($g,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($h,$E){global$e,$Xc,$Dd,$W;$Cd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Sc="((".implode("|",array_merge(array_keys($W),$Cd)).")(?:\\s*\\(((?:[^'\")]*|$Xc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$da="\\s*(".($E=="FUNCTION"?"":implode("|",$Dd)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Sc";$Qa=$e->result("SHOW CREATE $E ".idf_escape($h),2);preg_match("~\\(((?:$da\\s*,?)*)\\)".($E=="FUNCTION"?"\\s*RETURNS\\s+$Sc":"")."\\s*(.*)~is",$Qa,$k);$t=array();preg_match_all("~$da\\s*,?~is",$k[1],$Y,PREG_SET_ORDER);foreach($Y
as$Aa){$h=str_replace("``","`",$Aa[2]).$Aa[3];$t[]=array("field"=>$h,"type"=>strtolower($Aa[5]),"length"=>preg_replace_callback("~$Xc~s",'normalize_enum',$Aa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Aa[8] $Aa[7]"))),"full_type"=>$Aa[4],"inout"=>strtoupper($Aa[1]),"collation"=>strtolower($Aa[9]),);}if($E!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
insert_update($g,$o,$na){foreach($o
as$d=>$a){$o[$d]="$d = $a";}$U=implode(", ",$o);return
queries("INSERT INTO ".table($g)." SET $U ON DUPLICATE KEY UPDATE $U");}function
last_id(){global$e;return$e->result("SELECT LAST_INSERT_ID()");}function
explain($e,$j){return$e->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($wc){return
true;}function
create_sql($g,$ya){global$e;$b=$e->result("SHOW CREATE TABLE ".table($g),1);if(!$ya){$b=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$b);}return$b;}function
truncate_sql($g){return"TRUNCATE ".table($g);}function
use_sql($Q){return"USE ".idf_escape($Q);}function
trigger_sql($g,$yc){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($g,"%_")),null,"-- ")as$c){$b.="\n".($yc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Na){global$e;return!ereg("scheme|sequence|type".($e->server_info<5.1?"|event|partitioning".($e->server_info<5?"|view|routine|trigger":""):""),$Na);}$Ia="sql";$W=array();$Ea=array();foreach(array(lang(9)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(10)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(11)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(12)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(15)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$W+=$a;$Ea[$d]=array_keys($a);}$Ub=array("unsigned","zerofill","unsigned zerofill");$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$V=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$Yb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$cc="3.0.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return
lang(16);}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$e;$O=get_databases(false);return(!$O?$e->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$O[(information_schema($O[0])?1:0)]);}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(17),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(18),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(19)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(20))."\n";}function
login($Vd,$I){return
true;}function
tableName($vb){return
h($vb["Comment"]!=""?$vb["Comment"]:$vb["Name"]);}function
fieldName($f,$za=0){return
h($f["comment"]!=""?$f["comment"]:$f["field"]);}function
selectLinks($vb,$o=""){$w=$vb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($w).$o).'">'.lang(21)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(22).": ".lang(23)."'>&gt;&gt;</a>\n";}function
backwardKeys($g,$Id){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($g)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$h=$this->tableName(table_status($d));if($h!=""){$nb=preg_quote($Id);$ga="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$nb$ga(.+)|^(.+?)$ga$nb\$)",$h,$k)?$k[2].$k[3]:$h);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($kd,$c){if($kd){echo"<td>";foreach($kd
as$g=>$hd){foreach($hd["keys"]as$Xa){$u=ME.'select='.urlencode($g);$r=0;foreach($Xa
as$x=>$a){$u.=where_link($r++,$x,$c[$a]);}echo"<a href='".h($u)."'>".h($hd["name"])."</a>";$u=ME.'edit='.urlencode($g);foreach($Xa
as$x=>$a){$u.="&set".urlencode("[".bracket_escape($x)."]")."=".urlencode($c[$a]);}echo"<a href='".h($u)."' title='".lang(21)."'>+</a> ";}}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($g){foreach(fields($g)as$f){if($f["type"]=="varchar"){return
idf_escape($f["field"]);}}return"";}function
rowDescriptions($y,$rb){$b=$y;foreach($y[0]as$d=>$a){foreach((array)$rb[$d]as$wa){if(count($wa["source"])==1){$ea=idf_escape($wa["target"][0]);$h=$this->rowDescription($wa["table"]);if($h!=""){$gd=array();foreach($y
as$c){$gd[$c[$d]]=exact_value($c[$d]);}$bc=$this->_values[$wa["table"]];if(!$bc){$bc=get_key_vals("SELECT $ea, $h FROM ".idf_escape($wa["table"])." WHERE $ea IN (".implode(", ",$gd).")");}foreach($y
as$L=>$c){if(isset($c[$d])){$b[$L][$d]=(string)$bc[$c[$d]];}}break;}}}}return$b;}function
selectVal($a,$u,$f){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$f["type"])&&!is_utf8($a)){$b=lang(24,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$u' alt='$b'>";}}if($f["full_type"]=="tinyint(1)"&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.0":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.0").'" alt="'.h($a).'">';}if($u){$b="<a href='$u'>$b</a>";}if(!$u&&$f["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$f["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$f["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$f){if(ereg('date|timestamp',$f["type"])&&isset($a)){return
preg_replace('~^([0-9]{2}([0-9]+))-(0?([0-9]+))-(0?([0-9]+))~',lang(25),$a);}return(ereg("binary",$f["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($B,$J){}function
selectSearchPrint($l,$J,$X){$l=(array)$_GET["where"];echo'<fieldset><legend>'.lang(26)."</legend><div>\n";$dc=array();foreach($l
as$d=>$a){$dc[$a["col"]]=$d;}$r=0;foreach(fields($_GET["select"])as$h=>$f){if(ereg("enum",$f["type"])){$Ka=$J[$h];$d=$dc[$h];$r--;echo"<div>".h($Ka)."<input type='hidden' name='where[$r][col]' value='".h($h)."'>:";enum_input("checkbox"," name='where[$r][val][]'",$f,(array)$l[$d]["val"]);echo"</div>\n";unset($J[$h]);}}foreach($J
as$h=>$Ka){$Fa=$this->_foreignKeyOptions($_GET["select"],$h);if($Fa){$d=$dc[$h];$r--;echo"<div>".h($Ka)."<input type='hidden' name='where[$r][col]' value='".h($h)."'><input type='hidden' name='where[$r][op]' value='='>: <select name='where[$r][val]'>".optionlist($Fa,$l[$d]["val"],true)."</select></div>\n";unset($J[$h]);}}$r=0;foreach($l
as$a){if(($a["col"]==""||$J[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$r][col]'><option value=''>(".lang(27).")".optionlist($J,$a["col"],true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$r][val]' value='".h($a["val"])."'></div>\n";$r++;}}echo"<div><select name='where[$r][col]' onchange='selectAddRow(this);'><option value=''>(".lang(27).")".optionlist($J,null,true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators),"<input name='where[$r][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($za,$J,$X){$fc=array();foreach($X
as$d=>$S){$za=array();foreach($S["columns"]as$a){$za[]=$this->fieldName(array("field"=>$a,"comment"=>$J[$a]));}if(count(array_filter($za,'strlen'))>1&&$d!="PRIMARY"){$fc[$d]=implode(", ",$za);}}if($fc){echo'<fieldset><legend>'.lang(28)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$fc,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(29)."</legend><div>";echo
html_select("limit",array("","30","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($kb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(30)."</legend><div>","<input type='submit' value='".lang(31)."'>","</div></fieldset>\n";}function
selectEmailPrint($Hb,$J){if($Hb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.lang(32)."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".lang(33).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(34).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$J,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(35)."'>\n";echo"<p>".lang(36).": <input type='file' name='email_files[]' onchange=\"var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el); this.onchange = function () { };\">","<p>".(count($Hb)==1?'<input type="hidden" name="email_field" value="'.h(key($Hb)).'">':html_select("email_field",$Hb)),"<input type='submit' name='email' value='".lang(37)."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($J,$X){return
array(array(),array());}function
selectSearchProcess($t,$X){$b=array();foreach((array)$_GET["where"]as$d=>$l){$Ja=$l["col"];$Db=$l["op"];$a=$l["val"];if(($d<0?"":$Ja).$a!=""){$Ob=array();foreach(($Ja!=""?array($Ja=>$t[$Ja]):$t)as$h=>$f){if($Ja!=""||is_numeric($a)||!ereg('int|float|double|decimal',$f["type"])){if($Ja!=""&&$f["type"]=="enum"){$Ob[]=idf_escape($h)." IN (".implode(", ",array_map('intval',$a)).")";}else{$ed=ereg('char|text|enum|set',$f["type"]);$m=$this->processInput($f,($ed&&ereg('^[^%]+$',$a)?"%$a%":$a));$Ob[]=idf_escape($h).($m=="NULL"?" IS".($Db==">="?" NOT":""):(in_array($Db,$this->operators)?" $Db":($Db!="="&&$ed?" LIKE":" =")))." $m";}}}$b[]=($Ob?"(".implode(" OR ",$Ob).")":"0");}}return$b;}function
selectOrderProcess($t,$X){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$ac=$_GET["index_order"];foreach(($ac!=""?array($X[$ac]):$X)as$S){if($ac!=""||$S["type"]=="INDEX"){$Ka=false;foreach($S["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Ka=true;break;}}$b=array();foreach($S["columns"]as$a){$b[]=idf_escape($a).($Ka?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($l,$rb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$id=0;if($_POST["all"]||$_POST["check"]){$f=idf_escape($_POST["email_field"]);$Pb=$_POST["email_subject"];$oa=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Pb.$oa",$Y);$y=get_rows("SELECT DISTINCT $f".($Y[1]?", ".implode(", ",array_map('idf_escape',array_unique($Y[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $f IS NOT NULL AND $f != ''".($l?" AND ".implode(" AND ",$l):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($y,$rb)as$c){$gc=array('{\\'=>'{');foreach($Y[1]as$a){$gc['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$bb=$c[$_POST["email_field"]];if(is_email($bb)&&send_email($bb,strtr($Pb,$gc),strtr($oa,$gc),$_POST["email_from"],$_FILES["email_files"])){$id++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(38,$id));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($f){$b=array(""=>($f["null"]||$f["auto_increment"]||$f["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$f["type"])){$b["now"]=lang(39);}if(eregi('_(md5|sha1)$',$f["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($g,$f,$la,$m){if($f["type"]=="enum"){return($f["null"]?"<input type='radio'$la value=''".($m||isset($_GET["select"])?"":" checked").">":"");}$Fa=$this->_foreignKeyOptions($g,$f["field"]);if($Fa){return"<select$la>".optionlist($Fa,$m,true)."</select>";}if($f["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($m?$m:1).'"'.($m?' checked':'')."$la>";}if(ereg('date|timestamp',$f["type"])){return"<input value='".h($m)."'$la> (".lang(40).")";}return'';}function
processInput($f,$m,$N=""){if($N=="now"){return"$N()";}$b=$m;if(ereg('date|timestamp',$f["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>[0-9]*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>[0-9]{1,2})',preg_quote(lang(25)))).'(.*))',$m,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=q($b);if(!ereg('varchar|text',$f["type"])&&$f["full_type"]!="tinyint(1)"&&$m==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$N)){$b="$N($b)";}if(ereg("binary",$f["type"])){$b="unhex($b)";}return$b;}function
dumpOutput($B,$m=""){return"";}function
dumpFormat($B,$m=""){return
html_select("format",array('csv'=>'CSV,','csv;'=>'CSV;'),$m,$B);}function
navigation($Cb){global$cc,$Ba;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$cc,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($cc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Cb=="auth"){$Sa=true;foreach((array)$_SESSION["pwds"]["server"][""]as$D=>$I){if(isset($I)){if($Sa){echo"<p>\n";$Sa=false;}echo"<a href='".h(auth_url("server","",$D))."'>".($D!=""?h($D):"<i>".lang(41)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$Ba,'">
<input type="submit" name="logout" value="',lang(42),'">
</p>
</form>
';if($Cb!="db"){$G=table_status();if(!$G){echo"<p class='message'>".lang(4)."\n";}else{$this->tablesPrint($G);}}}}function
tablesPrint($F){echo"<p id='tables'>\n";foreach($F
as$c){$h=$this->tableName($c);if(isset($c["Engine"])&&$h!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'>".bold($h,$_GET["select"]==$c["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($g,$x){$rb=column_foreign_keys($g);foreach((array)$rb[$x]as$wa){if(count($wa["source"])==1){$ea=idf_escape($wa["target"][0]);$h=$this->rowDescription($wa["table"]);if($h!=""){$b=&$this->_values[$wa["table"]];if(!isset($b)){$G=table_status($wa["table"]);$b=($G["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $ea, $h FROM ".idf_escape($wa["table"])." ORDER BY 2"));}return$b;}}}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Uc,$p="",$tb=array(),$Cc=""){global$sa,$hb,$n,$e,$pa;header("Content-Type: text/html; charset=utf-8");header("X-Frame-Options: deny");$Bc=$Uc.($Cc!=""?": ".h($Cc):"");$yb=($hb?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$sa,'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Bc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.0";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($e)?substr($e->server_info,0,3):""),'\', \'',$yb,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$yb');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.0",'"></script>

<div id="content">
';if(isset($tb)){$u=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($u?h($u):".").'">'.$pa[DRIVER].'</a> &raquo; ';$u=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$A=(SERVER!=""?h(SERVER):lang(43));if($tb===false){echo"$A\n";}else{echo"<a href='".($u?h($u):".")."'>$A</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($tb))){echo'<a href="'.h($u."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($tb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($tb
as$d=>$a){$Ka=(is_array($a)?$a[1]:$a);if($Ka!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Ka).'</a> &raquo; ';}}}echo"$Uc\n";}}echo"<h2>$Bc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$O=&get_session("dbs");if(DB!=""&&$O&&!in_array(DB,$O,true)){$O=null;}if($p){echo"<div class='error'>$p</div>\n";}}function
page_footer($Cb=""){global$n;echo'</div>

';switch_lang();echo'<div id="menu">
';$n->navigation($Cb);echo'</div>
';}function
int32($L){while($L>=2147483648){$L-=4294967296;}while($L<=-2147483649){$L+=4294967296;}return(int)$L;}function
long2str($q,$ec){$Wa='';foreach($q
as$a){$Wa.=pack('V',$a);}if($ec){return
substr($Wa,0,end($q));}return$Wa;}function
str2long($Wa,$ec){$q=array_values(unpack('V*',str_pad($Wa,4*ceil(strlen($Wa)/4),"\0")));if($ec){$q[]=strlen($Wa);}return$q;}function
xxtea_mx($ha,$ia,$ma,$qa){return
int32((($ha>>5&0x7FFFFFF)^$ia<<2)+(($ia>>3&0x1FFFFFFF)^$ha<<4))^int32(($ma^$ia)+($qa^$ha));}function
encrypt_string($xb,$d){if($xb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$q=str2long($xb,true);$L=count($q)-1;$ha=$q[$L];$ia=$q[0];$Wb=floor(6+52/($L+1));$ma=0;while($Wb-->0){$ma=int32($ma+0x9E3779B9);$mb=$ma>>2&3;for($fa=0;$fa<$L;$fa++){$ia=$q[$fa+1];$Ra=xxtea_mx($ha,$ia,$ma,$d[$fa&3^$mb]);$ha=int32($q[$fa]+$Ra);$q[$fa]=$ha;}$ia=$q[0];$Ra=xxtea_mx($ha,$ia,$ma,$d[$fa&3^$mb]);$ha=int32($q[$L]+$Ra);$q[$L]=$ha;}return
long2str($q,false);}function
decrypt_string($xb,$d){if($xb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$q=str2long($xb,false);$L=count($q)-1;$ha=$q[$L];$ia=$q[0];$Wb=floor(6+52/($L+1));$ma=int32($Wb*0x9E3779B9);while($ma){$mb=$ma>>2&3;for($fa=$L;$fa>0;$fa--){$ha=$q[$fa-1];$Ra=xxtea_mx($ha,$ia,$ma,$d[$fa&3^$mb]);$ia=int32($q[$fa]-$Ra);$q[$fa]=$ia;}$ha=$q[$L];$Ra=xxtea_mx($ha,$ia,$ma,$d[$fa&3^$mb]);$ia=int32($q[0]-$Ra);$q[0]=$ia;$ma=int32($ma-0x9E3779B9);}return
long2str($q,true);}$e='';if(!$pa){page_header(lang(44),lang(45,implode(", ",$ra)),null);page_footer("auth");exit;}$Ba=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Pa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Pa[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Gb=$n->permanentLogin();$Pa[$d]="$d:".base64_encode($Gb?encrypt_string($_POST["password"],$Gb):"");cookie("adminer_permanent",implode(" ",$Pa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Ba&&$_POST["token"]!=$Ba){page_header(lang(42),lang(46));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Pa[$d]){unset($Pa[$d]);cookie("adminer_permanent",implode(" ",$Pa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(47));}}elseif($Pa&&!$_SESSION["pwds"]){session_regenerate_id();$Gb=$n->permanentLogin();foreach($Pa
as$d=>$a){list(,$Bd)=explode(":",$a);list($Bb,$A,$D)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Bb][$A][$D]=decrypt_string(base64_decode($Bd),$Gb);}}function
auth_error($Hc=null){global$e,$n,$Ba;$Lb=session_name();$p="";if(!$_COOKIE[$Lb]&&$_GET[$Lb]&&ini_bool("session.use_only_cookies")){$p=lang(48);}elseif(isset($_GET["username"])){if(($_COOKIE[$Lb]||$_GET[$Lb])&&!$Ba){$p=lang(49);}else{$I=&get_session("pwds");if(isset($I)){$p=h($Hc?$Hc->getMessage():(is_string($e)?$e:lang(50)));$I=null;}}}page_header(lang(19),$p,null);echo"<form action='' method='post'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$e=connect();}if(is_string($e)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Ba=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Ba;}$p=($_POST?($_POST["token"]==$Ba?"":lang(46)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(51,'"post_max_size"')));$e->select_db($n->database());function
email_header($Kd){return"=?UTF-8?B?".base64_encode($Kd)."?=";}function
send_email($bb,$Pb,$oa,$lb="",$Ib=array()){$ca=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$oa=str_replace("\n",$ca,wordwrap(str_replace("\r","","$oa\n")));$Jb=uniqid("boundary");$Mb="";foreach($Ib["error"]as$d=>$a){if(!$a){$Mb.="--$Jb$ca"."Content-Type: ".str_replace("\n","",$Ib["type"][$d]).$ca."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Ib["name"][$d])."\"$ca"."Content-Transfer-Encoding: base64$ca$ca".chunk_split(base64_encode(file_get_contents($Ib["tmp_name"][$d])),76,$ca).$ca;}}$Gc="";$Nb="Content-Type: text/plain; charset=utf-8$ca"."Content-Transfer-Encoding: 8bit";if($Mb){$Mb.="--$Jb--$ca";$Gc="--$Jb$ca$Nb$ca$ca";$Nb="Content-Type: multipart/mixed; boundary=\"$Jb\"";}$Nb.=$ca."MIME-Version: 1.0$ca"."X-Mailer: Adminer Editor".($lb?$ca."From: ".str_replace("\n","",$lb):"");return
mail($bb,email_header($Pb),$Gc.$oa.$Mb,$Nb);}function
dump_table($g){echo"\xef\xbb\xbf";}function
dump_data($g,$yc,$B=""){global$e;$i=$e->query(($B?$B:"SELECT * FROM ".idf_escape($g)),1);if($i){while($c=$i->fetch_assoc()){dump_csv($c);}}}function
dump_headers($Qc){$R=($Qc!=""?friendly_url($Qc):"dump");$Nc="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$R.$Nc");session_write_close();return$Nc;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$xc=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Md=" onclick=\"return confirm('".lang(52)."');\"";$pa[DRIVER]=lang(19);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$w=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$w-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$e->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($w)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$w=$_GET["edit"];$l=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$U=(isset($_GET["select"])?$_POST["edit"]:$l);$t=fields($w);foreach($t
as$h=>$f){if(!isset($f["privileges"][$U?"update":"insert"])||$n->fieldName($f)==""){unset($t[$h]);}}if($_POST&&!$p&&!isset($_GET["select"])){$ja=$_POST["referer"];if($_POST["insert"]){$ja=($U?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ja)){$ja=ME."select=".urlencode($w);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($w)," WHERE $l"),$ja,lang(53));}else{$o=array();foreach($t
as$h=>$f){$a=process_input($f);if($a!==false&&$a!==null){$o[idf_escape($h)]=($U?"\n".idf_escape($h)." = $a":$a);}}if($U){if(!$o){redirect($ja);}query_redirect("UPDATE".limit1(table($w)." SET".implode(",",$o),"\nWHERE $l"),$ja,lang(54));}else{$i=insert_into($w,$o);$Mc=($i?last_id():0);queries_redirect($ja,lang(55,($Mc?" $Mc":"")),$i);}}}$wb=$n->tableName(table_status($w));page_header(($U?lang(56):lang(35)),$p,array("select"=>array($w,$wb)),$wb);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($l){$B=array();foreach($t
as$h=>$f){if(isset($f["privileges"]["select"])){$B[]=($_POST["clone"]&&$f["auto_increment"]?"'' AS ":(ereg("enum|set",$f["type"])?"1*".idf_escape($h)." AS ":"")).idf_escape($h);}}$c=array();if($B){$y=get_rows("SELECT".limit(implode(", ",$B)." FROM ".table($w)," WHERE $l",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($y)!=1?null:reset($y));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($t){echo"<table cellspacing='0'>\n";foreach($t
as$h=>$f){echo"<tr><th>".$n->fieldName($f);$gb=$_GET["set"][bracket_escape($h)];$m=(isset($c)?($c[$h]!=""&&ereg("enum|set",$f["type"])?intval($c[$h]):$c[$h]):(!$U&&$f["auto_increment"]?"":(isset($_GET["select"])?false:(isset($gb)?$gb:$f["default"]))));if(!$_POST["save"]&&is_string($m)){$m=$n->editVal($m,$f);}$N=($_POST["save"]?(string)$_POST["function"][$h]:($l&&$f["on_update"]=="CURRENT_TIMESTAMP"?"now":($m===false?null:(isset($m)?'':'NULL'))));if($f["type"]=="timestamp"&&$m=="CURRENT_TIMESTAMP"){$m="";$N="now";}input($f,$m,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$Ba,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($t){echo"<input type='submit' value='".lang(57)."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($U?lang(58):lang(59))."\">\n";}}if($U){echo"<input type='submit' name='delete' value='".lang(60)."'$Md>\n";}echo'</form>
';}elseif(isset($_GET["select"])){$w=$_GET["select"];$G=table_status($w);$X=indexes($w);$t=fields($w,1);$sb=column_foreign_keys($w);$Jc=array();$J=array();$kb=null;foreach($t
as$d=>$f){$h=$n->fieldName($f);if(isset($f["privileges"]["select"])&&$h!=""){$J[$d]=html_entity_decode(strip_tags($h));if(ereg('text|lob',$f["type"])){$kb=$n->selectLengthProcess();}}$Jc+=$f["privileges"];}list($B,$ta)=$n->selectColumnsProcess($J,$X);$l=$n->selectSearchProcess($t,$X);$za=$n->selectOrderProcess($t,$X);$_=$n->selectLimitProcess();$lb=($B?implode(", ",$B):"*")."\nFROM ".table($w);$hc=($ta&&count($ta)<count($B)?"\nGROUP BY ".implode(", ",$ta):"").($za?"\nORDER BY ".implode(", ",$za):"");if($_POST&&!$p){$Lc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$na=$Sb=null;foreach($X
as$S){if($S["type"]=="PRIMARY"){$na=array_flip($S["columns"]);$Sb=($B?$na:array());break;}}foreach($B
as$d=>$a){$a=$_GET["columns"][$d];if(!$a["fun"]){unset($Sb[$a["col"]]);}}if($_POST["export"]){dump_headers($w);dump_table($w,"");if($_POST["format"]!="sql"){$c=array_keys($t);if($B){$c=array();foreach($B
as$a){$c[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($c);}if(!is_array($_POST["check"])||$Sb===array()){$uc=$l;if(is_array($_POST["check"])){$uc[]="($Lc)";}dump_data($w,"INSERT","SELECT $lb".($uc?"\nWHERE ".implode(" AND ",$uc):"").$hc);}else{$Oc=array();foreach($_POST["check"]as$a){$Oc[]="(SELECT".limit($lb,"\nWHERE ".($l?implode(" AND ",$l)." AND ":"").where_check($a).$hc,1).")";}dump_data($w,"INSERT",implode(" UNION ALL ",$Oc));}exit;}if(!$n->selectEmailProcess($l,$sb)){if($_POST["save"]||$_POST["delete"]){$i=true;$Ma=0;$j=table($w);$o=array();if(!$_POST["delete"]){foreach($J
as$h=>$a){$a=process_input($t[$h]);if($a!==null){if($_POST["clone"]){$o[idf_escape($h)]=($a!==false?$a:idf_escape($h));}elseif($a!==false){$o[]=idf_escape($h)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($w):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$Tb="UPDATE";if($_POST["delete"]){$Tb="DELETE";$j="FROM $j";}if($_POST["clone"]){$Tb="INSERT";$j="INTO $j";}if($_POST["all"]||($Sb===array()&&$_POST["check"])||count($ta)<count($B)){$i=queries($Tb." $j".($_POST["all"]?($l?"\nWHERE ".implode(" AND ",$l):""):"\nWHERE $Lc"));$Ma=$e->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($Tb.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$Ma+=$e->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(61,$Ma),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p=lang(62);}else{$i=true;$Ma=0;foreach($_POST["val"]as$Ha=>$c){$o=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$o[]=idf_escape($d)." = ".$n->processInput($t[$d],$a);}$i=queries("UPDATE".limit1(table($w)." SET ".implode(", ",$o)," WHERE ".where_check($Ha).($l?" AND ".implode(" AND ",$l):"")));if(!$i){break;}$Ma+=$e->affected_rows;}queries_redirect(remove_from_uri(),lang(61,$Ma),$i);}}elseif(is_string($Z=get_file("csv_file",true))){$Z=preg_replace("~^\xEF\xBB\xBF~",'',$Z);$i=true;$Xa=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Z,$Y);$Ma=count($Y[0]);begin();$ga=($_POST["separator"]=="csv"?",":";");foreach($Y[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ga]*)$ga~",$a.$ga,$lc);if(!$d&&!array_diff($lc[1],$Xa)){$Xa=$lc[1];$Ma--;}else{$o=array();foreach($lc[1]as$r=>$Ja){$o[idf_escape($Xa[$r])]=($Ja==""&&$t[$Xa[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));}$i=insert_update($w,$o,$na);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(63,$Ma),$i);queries("ROLLBACK");}else{$p=upload_error($Z);}}}$wb=$n->tableName($G);page_header(lang(31).": $wb",$p);session_write_close();$o=null;if(isset($Jc["insert"])){$o="";foreach((array)$_GET["where"]as$a){if(count($sb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$o.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$n->selectLinks($G,$o);if(!$J){echo"<p class='error'>".lang(64).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($w).'">',"</div>\n";$n->selectColumnsPrint($B,$J);$n->selectSearchPrint($l,$J,$X);$n->selectOrderPrint($za,$J,$X);$n->selectLimitPrint($_);$n->selectLengthPrint($kb);$n->selectActionPrint($kb);echo"</form>\n";$P=$_GET["page"];if($P=="last"){$va=$e->result("SELECT COUNT(*) FROM ".table($w).($l?" WHERE ".implode(" AND ",$l):""));$P=floor(($va-1)/$_);}$j="SELECT".limit((intval($_)&&$ta&&count($ta)<count($B)&&$Ia=="sql"?"SQL_CALC_FOUND_ROWS ":"").$lb,($l?"\nWHERE ".implode(" AND ",$l):"").$hc,($_!=""?intval($_):null),($P?$_*$P:0),"\n");echo$n->selectQuery($j);$i=$e->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($Ia=="mssql"){$i->seek($_*$P);}$Xb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$y=array();while($c=$i->fetch_assoc()){$y[]=$c;}if($_GET["page"]!="last"){$va=(intval($_)&&$ta&&count($ta)<count($B)?($Ia=="sql"?$e->result(" SELECT FOUND_ROWS()"):$e->result("SELECT COUNT(*) FROM ($j) x")):count($y));}if(!$y){echo"<p class='message'>".lang(65)."\n";}else{$Kc=$n->backwardKeys($w,$wb);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$ta&&$B?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(66)."</a>");$kc=array();$V=array();reset($B);$za=1;foreach($y[0]as$d=>$a){$a=$_GET["columns"][key($B)];$f=$t[$B?$a["col"]:$d];$h=($f?$n->fieldName($f,$za):"*");if($h!=""){$za++;$kc[$d]=$h;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($_GET["order"][0]==$d&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$h)."</a>";}$V[$d]=$a["fun"];next($B);}$jc=array();if($_GET["modify"]){foreach($y
as$c){foreach($c
as$d=>$a){$jc[$d]=max($jc[$d],min(40,strlen(utf8_decode($a))));}}}echo($Kc?"<th>".lang(67):"")."</thead>\n";foreach($n->rowDescriptions($y,$sb)as$L=>$c){$tc=unique_array($y[$L],$X);$Ha="";foreach($tc
as$d=>$a){$Ha.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$ta&&$B?"":"<td>".checkbox("check[]",substr($Ha,1),in_array(substr($Ha,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ta)<count($B)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($w).$Ha)."'>".lang(66)."</a>"));foreach($c
as$d=>$a){if(isset($kc[$d])){$f=$t[$d];if($a!=""&&(!isset($Xb[$d])||$Xb[$d]!="")){$Xb[$d]=(is_email($a)?$kc[$d]:"");}$u="";$a=$n->editVal($a,$f);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$f["type"])&&$a!=""){$u=h(ME.'download='.urlencode($w).'&field='.urlencode($d).$Ha);}if($a==""){$a="&nbsp;";}elseif($kb!=""&&ereg('text|blob',$f["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,intval($kb)));}else{$a=h($a);}if(!$u){foreach((array)$sb[$d]as$K){if(count($sb[$d])==1||count($K["source"])==1){foreach($K["source"]as$r=>$mc){$u.=where_link($r,$K["target"][$r],$y[$L][$mc]);}$u=h(($K["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($K["db"]),ME):ME).'select='.urlencode($K["table"]).$u);break;}}}if($d=="COUNT(*)"){$u=h(ME."select=".urlencode($w));$r=0;foreach((array)$_GET["where"]as$q){if(!array_key_exists($q["col"],$tc)){$u.=h(where_link($r++,$q["col"],$q["val"],$q["op"]));}}foreach($tc
as$qa=>$q){$u.=h(where_link($r++,$qa,$q,(isset($q)?"=":"IS NULL")));}}}if(!$u){if(is_email($a)){$u="mailto:$a";}if($yb=is_url($c[$d])){$u=($yb=="http"&&$hb?$c[$d]:"$yb://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$ea=h("val[$Ha][".bracket_escape($d)."]");$m=$_POST["val"][$Ha][bracket_escape($d)];$Ic=h(isset($m)?$m:$c[$d]);$Dc=strpos($a,"<i>...</i>");$Ac=is_utf8($a)&&!$Dc&&$y[$L][$d]==$c[$d]&&!$V[$d];$Ec=ereg('text|lob',$f["type"]);echo(($_GET["modify"]&&$Ac)||isset($m)?"<td>".($Ec?"<textarea name='$ea' cols='30' rows='".(substr_count($c[$d],"\n")+1)."'>$Ic</textarea>":"<input name='$ea' value='$Ic' size='$jc[$d]'>"):"<td id='$ea' ondblclick=\"".($Ac?"selectDblClick(this, event".($Ec?", 1":"").")":"alert('".h($Dc?lang(68):lang(69))."')").";\">".$n->selectVal($a,$u,$f));}}$n->backwardKeysPrint($Kc,$y[$L]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$rc);if($y||$P){$pc=true;if($_GET["page"]!="last"&&intval($_)&&count($ta)>=count($B)&&($va>=$_||$P)){$va=$G["Rows"];if(!isset($va)||$l||2*$P*$_>$va||($G["Engine"]=="InnoDB"&&$va<1e4)){ob_flush();flush();$va=$e->result("SELECT COUNT(*) FROM ".table($w).($l?" WHERE ".implode(" AND ",$l):""));}else{$pc=false;}}echo"<p class='pages'>";if(intval($_)&&$va>$_){$qc=floor(($va-1)/$_);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".lang(22)."', '".($P+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".lang(22)."</a>:".pagination(0,$P).($P>5?" ...":"");for($r=max(1,$P-4);$r<min($qc,$P+5);$r++){echo
pagination($r,$P);}echo($P+5<$qc?" ...":"").($pc?pagination($qc,$P):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(23)."</a>");}echo" (".($pc?"":"~ ").lang(70,$va).") ".checkbox("all",1,0,lang(71))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(56),'</legend><div>
<input type="submit" value="',lang(57),'" title="',lang(62),'">
<input type="submit" name="edit" value="',lang(56),'">
<input type="submit" name="clone" value="',lang(72),'">
<input type="submit" name="delete" value="',lang(60),'" onclick="return confirm(\'',lang(52);?> (' + (this.form['all'].checked ? <?php echo$va,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(73));echo$n->dumpOutput(1,$rc["output"])." ".$n->dumpFormat(1,$rc["format"]);echo" <input type='submit' name='export' value='".lang(73)."'>\n","</div></fieldset>\n";}print_fieldset("import",lang(74),!$y);echo"<input type='hidden' name='token' value='$Ba'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$rc["format"],1);echo" <input type='submit' name='import' value='".lang(75)."'>\n","</div></fieldset>\n";$n->selectEmailPrint(array_filter($Xb,'strlen'),$J);echo"</form>\n";}}}else{page_header(lang(43),"",false);echo"<form action='' method='post'>\n","<p>".lang(76).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(26)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(77).'<td>'.lang(78)."</thead>\n";foreach(table_status()as$g=>$c){$h=$n->tableName($c);if(isset($c["Engine"])&&$h!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$g,in_array($g,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($g).'">'.h($h).'</a>';$a=number_format($c["Rows"],0,'.',lang(79));echo"<td align='right'><a href='".h(ME."edit=").urlencode($g)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();