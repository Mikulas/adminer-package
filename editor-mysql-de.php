<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://php.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
*/error_reporting(6135);$zc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($zc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$Xb=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($Xb){$$a=$Xb;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$g;return$g;}function
idf_unescape($aa){$Qb=substr($aa,-1);return
str_replace($Qb.$Qb,$Qb,substr($aa,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($oa){if(get_magic_quotes_gpc()){while(list($b,$a)=each($oa)){foreach($a
as$S=>$n){unset($oa[$b][$S]);if(is_array($n)){$oa[$b][stripslashes($S)]=$n;$oa[]=&$oa[$b][stripslashes($S)];}else{$oa[$b][stripslashes($S)]=($zc?$n:stripslashes($n));}}}}}function
bracket_escape($aa,$Mc=false){static$ac=array(':'=>':1',']'=>':2','['=>':3');return
strtr($aa,($Mc?array_flip($ac):$ac));}function
h($A){return
htmlspecialchars($A,ENT_QUOTES);}function
nbsp($A){return(trim($A)!=""?h($A):"&nbsp;");}function
nl_br($A){return
str_replace("\n","<br>",$A);}function
checkbox($f,$i,$Ia,$lc="",$ic=""){static$F=0;$F++;$c="<input type='checkbox'".($f?" name='$f' value='".h($i)."'":"").($Ia?" checked":"").($ic?" onclick=\"$ic\"":"")." id='checkbox-$F'>";return($lc!=""?"<label for='checkbox-$F'>$c".h($lc)."</label>":$c);}function
optionlist($ia,$nd=null,$jc=false){$c="";foreach($ia
as$S=>$n){if(is_array($n)){$c.='<optgroup label="'.h($S).'">';}foreach((is_array($n)?$n:array($S=>$n))as$b=>$a){$c.='<option'.($jc||is_string($b)?' value="'.h($b).'"':'').(($jc||is_string($b)?(string)$b:$a)===$nd?' selected':'').'>'.h($a);}if(is_array($n)){$c.='</optgroup>';}}return$c;}function
html_select($f,$ia,$i="",$za=true){if($za){return"<select name='".h($f)."'".(is_string($za)?" onchange=\"$za\"":"").">".optionlist($ia,$i)."</select>";}$c="";foreach($ia
as$b=>$a){$c.="<label><input type='radio' name='".h($f)."' value='".h($b)."'".($b==$i?" checked":"").">".h($a)."</label>";}return$c;}function
ini_bool($gd){$a=ini_get($gd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
q($A){global$g;return$g->quote($A);}function
get_vals($m,$W=0){global$g;$c=array();$h=$g->query($m);if(is_object($h)){while($d=$h->fetch_row()){$c[]=$d[$W];}}return$c;}function
get_key_vals($m,$ca=null){global$g;if(!is_object($ca)){$ca=$g;}$c=array();$h=$ca->query($m);while($d=$h->fetch_row()){$c[$d[0]]=$d[1];}return$c;}function
get_rows($m,$ca=null,$v="<p class='error'>"){global$g;if(!is_object($ca)){$ca=$g;}$c=array();$h=$ca->query($m);if(is_object($h)){while($d=$h->fetch_assoc()){$c[]=$d;}}elseif(!$h&&$v&&(headers_sent()||ob_get_level())){echo$v.error()."\n";}return$c;}function
unique_array($d,$E){foreach($E
as$Q){if(ereg("PRIMARY|UNIQUE",$Q["type"])){$c=array();foreach($Q["columns"]as$b){if(!isset($d[$b])){continue
2;}$c[$b]=$d[$b];}return$c;}}$c=array();foreach($d
as$b=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$b)){$c[$b]=$a;}}return$c;}function
where($p){global$_a;$c=array();foreach((array)$p["where"]as$b=>$a){$c[]=idf_escape(bracket_escape($b,1)).(ereg('\\.',$a)||$_a=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$p["null"]as$b){$c[]=idf_escape($b)." IS NULL";}return
implode(" AND ",$c);}function
where_check($a){parse_str($a,$Vb);remove_slashes(array(&$Vb));return
where($Vb);}function
where_link($o,$W,$i,$Xc="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($W)."&where%5B$o%5D%5Bop%5D=".urlencode($Xc)."&where%5B$o%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$Ca;$Pa=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ca);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pa[]=true;}return
call_user_func_array('setcookie',$Pa);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($b){return$_SESSION[$b][DRIVER][SERVER][$_GET["username"]];}function
set_session($b,$a){$_SESSION[$b][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($ib,$D,$B){global$ua;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ua))."|username|".session_name()),$j);return"$j[1]?".(SID&&!$_COOKIE?SID."&":"").($ib!="server"||$D!=""?urlencode($ib)."=".urlencode($D)."&":"")."username=".urlencode($B).($j[2]?"&$j[2]":"");}function
redirect($K,$V=null){if(isset($V)){restart_session();$_SESSION["messages"][]=$V;}if(isset($K)){header("Location: ".($K!=""?$K:"."));exit;}}function
query_redirect($m,$K,$V,$Xa=true,$Tc=true,$rc=false){global$g,$v,$l;if($Tc){$rc=!$g->query($m);}$tb="";if($m){$tb=$l->messageQuery($m);}if($rc){$v=error().$tb;return
false;}if($Xa){redirect($K,$V.$tb);}return
true;}function
queries($m=null){global$g;static$Kc=array();if(!isset($m)){return
implode(";\n",$Kc);}$Kc[]=$m;return$g->query($m);}function
apply_queries($m,$ma,$ud='table'){foreach($ma
as$k){if(!queries("$m ".$ud($k))){return
false;}}return
true;}function
queries_redirect($K,$V,$Xa){return
query_redirect(queries(),$K,$V,$Xa,false,!$Xa);}function
remove_from_uri($fa=""){return
substr(preg_replace("~(?<=[?&])($fa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($z,$kd){return" ".($z==$kd?$z+1:'<a href="'.h(remove_from_uri("page").($z?"&page=$z":"")).'">'.($z+1)."</a>");}function
get_file($b,$wc=false){$I=$_FILES[$b];if(!$I||$I["error"]){return$I["error"];}return
file_get_contents($wc&&ereg('\\.gz$',$I["name"])?"compress.zlib://$I[tmp_name]":($wc&&ereg('\\.bz2$',$I["name"])?"compress.bzip2://$I[tmp_name]":$I["tmp_name"]));}function
upload_error($v){$uc=($v==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($v?'Hochladen von Datei fehlgeschlagen.'.($uc?" ".sprintf('Maximal erlaubte Dateigrösse ist %sB.',$uc):""):'Datei existiert nicht.');}function
odd($c=' class="odd"'){static$o=0;if(!$c){$o=-1;}return($o++%
2?$c:'');}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($A,$tc=80,$od=""){if(!preg_match("(^([\t\r\n -\x{FFFF}]{0,$tc})($)?)u",$A,$j)){preg_match("(^([\t\r\n -~]{0,$tc})($)?)",$A,$j);}return
h($j[1]).$od.(isset($j[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($oa,$Pc=array()){while(list($b,$a)=each($oa)){if(is_array($a)){foreach($a
as$S=>$n){$oa[$b."[$S]"]=$n;}}elseif(!in_array($b,$Pc)){echo'<input type="hidden" name="'.h($b).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(SID&&!$_COOKIE?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($k){$c=array();foreach(foreign_keys($k)as$ja){foreach($ja["source"]as$a){$c[$a][]=$ja;}}return$c;}function
enum_input($Ba,$P,$e,$i){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$R);foreach($R[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ia=(is_int($i)?$i==$o+1:(is_array($i)?in_array($o+1,$i):$i===$a));echo" <label><input type='$Ba'$P value='".($o+1)."'".($Ia?' checked':'').'>'.h($a).'</label>';}}function
input($e,$i,$_){global$Ea,$l,$_a;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$U=(isset($_GET["select"])?array("orig"=>'Original'):array())+$l->editFunctions($e);$P=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($U[""])."<td>".($U["orig"]?"<label><input type='radio'$P value='-1' checked><i>$U[orig]</i></label> ":""),$l->editInput($_GET["edit"],$e,$P,$i);enum_input("radio",$P,$e,$i);}else{$Aa=0;foreach($U
as$b=>$a){if($b===""||!$a){break;}$Aa++;}$za=($Aa?" onchange=\"var f = this.form['function[".addcslashes($f,"\r\n'\\")."]']; if ($Aa > f.selectedIndex) f.selectedIndex = $Aa;\"":"");$P.=$za;echo(count($U)>1?html_select("function[$f]",$U,!isset($_)||in_array($_,$U)||isset($U[$_])?$_:""):nbsp(reset($U))).'<td>';$Bc=$l->editInput($_GET["edit"],$e,$P,$i);if($Bc!=""){echo$Bc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$R);foreach($R[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ia=(is_int($i)?($i>>$o)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$o]' value='".(1<<$o)."'".($Ia?' checked':'')."$za>".h($a).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$za>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($_a!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$P onkeydown='return textareaKeydown(this, event);'>".h($i).'</textarea>';}else{$Bb=(!ereg('int',$e["type"])&&preg_match('~^([0-9]+)(,([0-9]+))?$~',$e["length"],$j)?((ereg("binary",$e["type"])?2:1)*$j[1]+($j[3]?1:0)+($j[2]&&!$e["unsigned"]?1:0)):($Ea[$e["type"]]?$Ea[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Bb?" maxlength='$Bb'":"").(ereg('char|binary',$e["type"])&&$Bb>20?" size='40'":"")."$P>";}}}function
process_input($e){global$l;$aa=bracket_escape($e["field"]);$_=$_POST["function"][$aa];$i=$_POST["fields"][$aa];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return
intval($i);}if($e["auto_increment"]&&$i==""){return
null;}if($_=="orig"){return
false;}if($_=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$I=get_file("fields-$aa");if(!is_string($I)){return
false;}return
q($I);}return$l->processInput($e,$i,$_);}function
search_tables(){global$l,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$xb=false;foreach(table_status()as$k=>$G){$f=$l->tableName($G);if(isset($G["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($k,$_POST["tables"]))){$h=$g->query("SELECT".limit("1 FROM ".table($k)," WHERE ".implode(" AND ",$l->selectSearchProcess(fields($k),array())),1));if($h->fetch_row()){if(!$xb){echo"<ul>\n";$xb=true;}echo"<li><a href='".h(ME."select=".urlencode($k)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($xb?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_csv($d){foreach($d
as$b=>$a){if(preg_match("~[\"\n,;]~",$a)||$a===""){$d[$b]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":";"),$d)."\n";}function
apply_sql_function($_,$W){return($_?($_=="unixepoch"?"DATETIME($W, '$_')":($_=="count distinct"?"COUNT(DISTINCT ":strtoupper("$_("))."$W)"):$W);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir')){$bb=sys_get_temp_dir();}else{$qa=@tempnam("","");if(!$qa){return
false;}$bb=dirname($qa);unlink($qa);}}$qa="$bb/adminer.key";$c=@file_get_contents($qa);if($c){return$c;}$wb=@fopen($qa,"w");if($wb){$c=md5(uniqid(mt_rand(),true));fwrite($wb,$c);fclose($wb);}return$c;}function
is_mail($Ha){$Ac='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$La='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$T="$Ac+(\\.$Ac+)*@($La?\\.)+$La";return
preg_match("(^$T(,\\s*$T)*\$)i",$Ha);}function
is_url($A){$La='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($La?\\.)+$La(:[0-9]+)?(/.*)?(\\?.*)?(#.*)?\$~i",$A,$j)?strtolower($j[1]):"");}function
print_fieldset($F,$Wc,$Vc=false){echo"<fieldset><legend><a href='#fieldset-$F' onclick=\"return !toggle('fieldset-$F');\">$Wc</a></legend><div id='fieldset-$F'".($Vc?"":" class='hidden'").">\n";}function
bold($A,$Uc){return($Uc?"<b>$A</b>":$A);}if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ca=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Pa=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ca);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pa[]=true;}call_user_func_array('session_set_cookie_params',$Pa);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);function
lang($Yc,$Ra){$Zc=($Ra==1||(!$Ra&&'de'=='fr')?0:((!$Ra||$Ra>=5)&&ereg('cs|sk|ru','de')?2:1));return
sprintf($Yc[$Zc],$Ra);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($bd,$B,$M,$ed='auth_error'){set_exception_handler($ed);parent::__construct($bd,$B,$M);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($m,$Ja=false){$h=parent::query($m);if(!$h){$Qc=$this->errorInfo();$this->error=$Qc[2];return
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
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$kb=array();$ua=array();$kb[]="MySQLi";$kb[]="MySQL";$kb[]="PDO_MySQL";if(extension_loaded("mysqli")||extension_loaded("mysql")||extension_loaded("pdo_mysql")){$ua=array("server"=>"MySQL")+$ua;}if(!defined("DRIVER")){define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$B,$M){mysqli_report(MYSQLI_REPORT_OFF);list($Oc,$mb)=explode(":",$D,2);$c=@$this->real_connect(($D!=""?$Oc:ini_get("mysqli.default_host")),("$D$B"!=""?$B:ini_get("mysqli.default_user")),("$D$B$M"!=""?$M:ini_get("mysqli.default_pw")),null,(is_numeric($mb)?$mb:ini_get("mysqli.default_port")),(!is_numeric($mb)?$mb:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($m,$e=0){$h=$this->query($m);if(!$h){return
false;}$d=$h->fetch_array();return$d[$e];}function
quote($A){return"'".$this->escape_string($A)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$B,$M){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$B"!=""?$B:ini_get("mysql.default_user")),("$D$B$M"!=""?$M:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
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
Min_Result{var$num_rows,$_result;function
Min_Result($h){$this->_result=$h;$this->num_rows=mysql_num_rows($h);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$B,$M){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:([0-9])~',';port=\\1',$D)),$B,$M);$this->query("SET NAMES utf8");return
true;}function
select_db($Na){return$this->query("USE ".idf_escape($Na));}function
query($m,$Ja=false){$this->setAttribute(1000,!$Ja);return
parent::query($m,$Ja);}}}function
idf_escape($aa){return"`".str_replace("`","``",$aa)."`";}function
table($aa){return
idf_escape($aa);}function
connect(){global$l;$g=new
Min_DB;$Fb=$l->credentials();if($g->connect($Fb[0],$Fb[1],$Fb[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($Rc=true){$c=&get_session("dbs");if(!isset($c)){if($Rc){restart_session();ob_flush();flush();}$c=get_vals("SHOW DATABASES");}return$c;}function
limit($m,$p,$C,$Ec=0,$sa=" "){return" $m$p".(isset($C)?$sa."LIMIT $C".($Ec?" OFFSET $Ec":""):"");}function
limit1($m,$p){return
limit($m,$p,1);}function
db_collation($ta,$Sc){global$g;$c=null;$rb=$g->result("SHOW CREATE DATABASE ".idf_escape($ta),1);if(preg_match('~ COLLATE ([^ ]+)~',$rb,$j)){$c=$j[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$rb,$j)){$c=$Sc[$j[1]][0];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$c[]=$d["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ha){$c=array();foreach($ha
as$ta){$c[$ta]=count(get_vals("SHOW TABLES IN ".idf_escape($ta)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$c[$d["Name"]]=$d;}return$c;}function
is_view($G){return!isset($G["Rows"]);}function
fk_support($G){return($G["Engine"]=="InnoDB");}function
fields($k,$xd=false){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($k))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$j);$c[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$j[1],"length"=>$j[2],"unsigned"=>ltrim($j[3].$j[4]),"default"=>($d["Default"]!=""||ereg("char",$j[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$j)?$j[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$c;}function
indexes($k,$ca=null){global$g;if(!is_object($ca)){$ca=$g;}$c=array();foreach(get_rows("SHOW INDEX FROM ".table($k),$ca)as$d){$c[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$c[$d["Key_name"]]["columns"][]=$d["Column_name"];$c[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$c;}function
foreign_keys($k){global$g,$Kb;static$T='`(?:[^`]|``)+`';$c=array();$Dc=$g->result("SHOW CREATE TABLE ".table($k),1);if($Dc){preg_match_all("~CONSTRAINT ($T) FOREIGN KEY \\(((?:$T,? ?)+)\\) REFERENCES ($T)(?:\\.($T))? \\(((?:$T,? ?)+)\\)(?: ON DELETE (".implode("|",$Kb)."))?(?: ON UPDATE (".implode("|",$Kb)."))?~",$Dc,$R,PREG_SET_ORDER);foreach($R
as$j){preg_match_all("~$T~",$j[2],$Hb);preg_match_all("~$T~",$j[5],$Eb);$c[idf_unescape($j[1])]=array("db"=>idf_unescape($j[4]!=""?$j[3]:$j[4]),"table"=>idf_unescape($j[4]!=""?$j[4]:$j[3]),"source"=>array_map('idf_unescape',$Hb[0]),"target"=>array_map('idf_unescape',$Eb[0]),"on_delete"=>$j[6],"on_update"=>$j[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$d){$c[$d["Charset"]][]=$d["Collation"];}ksort($c);foreach($c
as$b=>$a){sort($c[$b]);}return$c;}function
information_schema($ta){global$g;return($g->server_info>=5&&$ta=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($ta,$ya){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($ta).($ya?" COLLATE ".q($ya):""));}function
drop_databases($ha){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ha,'idf_escape');}function
rename_database($f,$ya){if(create_database($f,$ya)){$Da=array();foreach(tables_list()as$k=>$Ba){$Da[]=table($k)." TO ".idf_escape($f).".".table($k);}if(!$Da||queries("RENAME TABLE ".implode(", ",$Da))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Gb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$Q){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$Q["columns"],true)){$Gb="";break;}if($Q["type"]=="PRIMARY"){$Gb=" UNIQUE";}}}return" AUTO_INCREMENT$Gb";}function
alter_table($k,$f,$r,$rd,$sd,$yc,$ya,$eb,$td){$da=array();foreach($r
as$e){$da[]=($e[1]?($k!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($k!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$da=array_merge($da,$rd);$Gc="COMMENT=".q($sd).($yc?" ENGINE=".q($yc):"").($ya?" COLLATE ".q($ya):"").($eb!=""?" AUTO_INCREMENT=$eb":"").$td;if($k==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$da)."\n) $Gc");}if($k!=$f){$da[]="RENAME TO ".table($f);}$da[]=$Gc;return
queries("ALTER TABLE ".table($k)."\n".implode(",\n",$da));}function
alter_indexes($k,$da){foreach($da
as$b=>$a){$da[$b]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($k).implode(",",$da));}function
truncate_tables($ma){return
apply_queries("TRUNCATE TABLE",$ma);}function
drop_views($Nb){return
queries("DROP VIEW ".implode(", ",array_map('table',$Nb)));}function
drop_tables($ma){return
queries("DROP TABLE ".implode(", ",array_map('table',$ma)));}function
move_tables($ma,$Nb,$Eb){$Da=array();foreach(array_merge($ma,$Nb)as$k){$Da[]=table($k)." TO ".idf_escape($Eb).".".table($k);}return
queries("RENAME TABLE ".implode(", ",$Da));}function
trigger($f){$w=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($w);}function
triggers($k){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")))as$d){$c[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$Ba){global$g,$vc,$pd,$Ea;$id=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$xc="((".implode("|",array_merge(array_keys($Ea),$id)).")(?:\\s*\\(((?:[^'\")]*|$vc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$T="\\s*(".($Ba=="FUNCTION"?"":implode("|",$pd)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$xc";$rb=$g->result("SHOW CREATE $Ba ".idf_escape($f),2);preg_match("~\\(((?:$T\\s*,?)*)\\)".($Ba=="FUNCTION"?"\\s*RETURNS\\s+$xc":"")."\\s*(.*)~is",$rb,$j);$r=array();preg_match_all("~$T\\s*,?~is",$j[1],$R,PREG_SET_ORDER);foreach($R
as$fa){$f=str_replace("``","`",$fa[2]).$fa[3];$r[]=array("field"=>$f,"type"=>strtolower($fa[5]),"length"=>preg_replace_callback("~$vc~s",'normalize_enum',$fa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fa[8] $fa[7]"))),"full_type"=>$fa[4],"inout"=>strtoupper($fa[1]),"collation"=>strtolower($fa[9]),);}if($Ba!="FUNCTION"){return
array("fields"=>$r,"definition"=>$j[11]);}return
array("fields"=>$r,"returns"=>array("type"=>$j[12],"length"=>$j[13],"unsigned"=>$j[15],"collation"=>$j[16]),"definition"=>$j[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($k,$s){return
queries("INSERT INTO ".table($k)." (".implode(", ",array_keys($s)).")\nVALUES (".implode(", ",$s).")");}function
insert_update($k,$s,$Za){foreach($s
as$b=>$a){$s[$b]="$b = $a";}$ea=implode(", ",$s);return
queries("INSERT INTO ".table($k)." SET $ea ON DUPLICATE KEY UPDATE $ea");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$m){return$g->query("EXPLAIN $m");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_d){return
true;}function
create_sql($k,$eb){global$g;$c=$g->result("SHOW CREATE TABLE ".table($k),1);if(!$eb){$c=preg_replace('~ AUTO_INCREMENT=[0-9]+~','',$c);}return$c;}function
truncate_sql($k){return"TRUNCATE ".table($k);}function
use_sql($Na){return"USE ".idf_escape($Na);}function
trigger_sql($k,$Fc){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($k,"%_")),null,"-- ")as$d){$c.="\n".($Fc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($md){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$md);}$_a="sql";$Ea=array();$ld=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binär'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),)as$b=>$a){$Ea+=$a;$ld[$b]=array_keys($a);}$yd=array("unsigned","zerofill","unsigned zerofill");$ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL");$U=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$zd=array("avg","count","count distinct","group_concat","max","min","sum");$Ad=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(SID&&!$_COOKIE?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$yb="3.0.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Editor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ha=get_databases(false);return(!$ha?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ha[(information_schema($ha[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Benutzer<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Passwort<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($vd,$M){return
true;}function
tableName($Qa){return
h($Qa["Comment"]!=""?$Qa["Comment"]:$Qa["Name"]);}function
fieldName($e,$X=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Qa,$s=""){$q=$Qa["Name"];if(isset($s)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($q).$s).'">'.'Neuer Datensatz'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Seite'.": ".'letzte'."'>&gt;&gt;</a>\n";}function
backwardKeys($k,$fd){$c=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($k)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$c[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($c
as$b=>$a){$f=$this->tableName(table_status($b));if($f!=""){$Lc=preg_quote($fd);$sa="(:|\\s*-)?\\s+";$c[$b]["name"]=(preg_match("(^$Lc$sa(.+)|^(.+?)$sa$Lc\$)",$f,$j)?$j[2].$j[3]:$f);}else{unset($c[$b]);}}return$c;}function
backwardKeysPrint($Jc,$d){if($Jc){echo"<td>";foreach($Jc
as$k=>$Ic){foreach($Ic["keys"]as$wa){$u=ME.'select='.urlencode($k);$o=0;foreach($wa
as$W=>$a){$u.=where_link($o++,$W,$d[$a]);}echo"<a href='".h($u)."'>".h($Ic["name"])."</a>";$u=ME.'edit='.urlencode($k);foreach($wa
as$W=>$a){$u.="&set".urlencode("[".bracket_escape($W)."]")."=".urlencode($d[$a]);}echo"<a href='".h($u)."' title='".'Neuer Datensatz'."'>+</a> ";}}}}function
selectQuery($m){return"<!--\n".str_replace("--","--><!-- ",$m)."\n-->\n";}function
rowDescription($k){foreach(fields($k)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($w,$Va){$c=$w;foreach($w[0]as$b=>$a){foreach((array)$Va[$b]as$ba){if(count($ba["source"])==1){$F=idf_escape($ba["target"][0]);$f=$this->rowDescription($ba["table"]);if($f!=""){$Hc=array();foreach($w
as$d){$Hc[$d[$b]]=exact_value($d[$b]);}$Pb=$this->_values[$ba["table"]];if(!$Pb){$Pb=get_key_vals("SELECT $F, $f FROM ".idf_escape($ba["table"])." WHERE $F IN (".implode(", ",$Hc).")");}foreach($w
as$x=>$d){if(isset($d[$b])){$c[$x][$b]=(string)$Pb[$d[$b]];}}break;}}}}return$c;}function
selectVal($a,$u,$e){$c=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$c=lang(array('%d Byte','%d Bytes'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$c="<img src='$u' alt='$c'>";}}if($e["full_type"]=="tinyint(1)"&&$c!="&nbsp;"){$c='<img src="'.($a?"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=plus.gif&amp;version=3.0.1":"".h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=cross.gif&amp;version=3.0.1").'" alt="'.h($a).'">';}if($u){$c="<a href='$u'>$c</a>";}if(!$u&&$e["full_type"]!="tinyint(1)"&&ereg('int|float|double|decimal',$e["type"])){$c="<div class='number'>$c</div>";}elseif(ereg('date',$e["type"])){$c="<div class='datetime'>$c</div>";}return$c;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^([0-9]{2}([0-9]+))-(0?([0-9]+))-(0?([0-9]+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($t,$y){}function
selectSearchPrint($p,$y,$E){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Suchen'."</legend><div>\n";$Ib=array();foreach($p
as$b=>$a){$Ib[$a["col"]]=$b;}$o=0;foreach(fields($_GET["select"])as$f=>$e){if(ereg("enum",$e["type"])){$ka=$y[$f];$b=$Ib[$f];$o--;echo"<div>".h($ka)."<input type='hidden' name='where[$o][col]' value='".h($f)."'>:";enum_input("checkbox"," name='where[$o][val][]'",$e,(array)$p[$b]["val"]);echo"</div>\n";unset($y[$f]);}}foreach($y
as$f=>$ka){$ia=$this->_foreignKeyOptions($_GET["select"],$f);if($ia){$b=$Ib[$f];$o--;echo"<div>".h($ka)."<input type='hidden' name='where[$o][col]' value='".h($f)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($ia,$p[$b]["val"],true)."</select></div>\n";unset($y[$f]);}}$o=0;foreach($p
as$a){if(($a["col"]==""||$y[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'beliebig'.")".optionlist($y,$a["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$o][val]' value='".h($a["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='selectAddRow(this);'><option value=''>(".'beliebig'.")".optionlist($y,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($X,$y,$E){$Db=array();foreach($E
as$b=>$Q){$X=array();foreach($Q["columns"]as$a){$X[]=$this->fieldName(array("field"=>$a,"comment"=>$y[$a]));}if(count(array_filter($X,'strlen'))>1&&$b!="PRIMARY"){$Db[$b]=implode(", ",$X);}}if($Db){echo'<fieldset><legend>'.'Ordnen'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Db,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($C){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo
html_select("limit",array("","30","100"),$C),"</div></fieldset>\n";}function
selectLengthPrint($Ga){}function
selectActionPrint(){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>","</div></fieldset>\n";}function
selectEmailPrint($pb,$y){if($pb){echo'<fieldset><legend><a href="#fieldset-email" onclick="return !toggle(\'fieldset-email\');">'.'E-mail'."</a></legend><div id='fieldset-email'".($_POST["email_append"]?"":" class='hidden'").">\n","<p>".'Von'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Betreff'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75' onkeydown='return textareaKeydown(this, event, false, this.form.email);'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$y,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Hinzufügen'."'>\n";echo"<p>".'Anhänge'.": <input type='file' name='email_files[]' onchange=\"var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el); this.onchange = function () { };\">","<p>".(count($pb)==1?'<input type="hidden" name="email_field" value="'.h(key($pb)).'">':html_select("email_field",$pb)),"<input type='submit' name='email' value='".'Abschicken'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($y,$E){return
array(array(),array());}function
selectSearchProcess($r,$E){$c=array();foreach((array)$_GET["where"]as$b=>$p){$pa=$p["col"];$ob=$p["op"];$a=$p["val"];if(($b<0?"":$pa).$a!=""){$nb=array();foreach(($pa!=""?array($pa=>$r[$pa]):$r)as$f=>$e){if($pa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){if($pa!=""&&$e["type"]=="enum"){$nb[]=idf_escape($f)." IN (".implode(", ",array_map('intval',$a)).")";}else{$sc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,($sc&&ereg('^[^%]+$',$a)?"%$a%":$a));$nb[]=idf_escape($f).($i=="NULL"?" IS".($ob==">="?" NOT":""):(in_array($ob,$this->operators)?" $ob":($ob!="="&&$sc?" LIKE":" =")))." $i";}}}$c[]=($nb?"(".implode(" OR ",$nb).")":"0");}}return$c;}function
selectOrderProcess($r,$E){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$Rb=$_GET["index_order"];foreach(($Rb!=""?array($E[$Rb]):$E)as$Q){if($Rb!=""||$Q["type"]=="INDEX"){$ka=false;foreach($Q["columns"]as$a){if(ereg('date|timestamp',$r[$a]["type"])){$ka=true;break;}}$c=array();foreach($Q["columns"]as$a){$c[]=idf_escape($a).($ka?" DESC":"");}return$c;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$Va){if($_POST["email_append"]){return
true;}if($_POST["email"]){$Ub=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$hb=$_POST["email_subject"];$V=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$hb.$V",$R);$w=get_rows("SELECT DISTINCT $e".($R[1]?", ".implode(", ",array_map('idf_escape',array_unique($R[1]))):"")." FROM ".idf_escape($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$r=fields($_GET["select"]);foreach($this->rowDescriptions($w,$Va)as$d){$Sb=array('{\\'=>'{');foreach($R[1]as$a){$Sb['{$'."$a}"]=$this->editVal($d[$a],$r[$a]);}$Ha=$d[$_POST["email_field"]];if(is_mail($Ha)&&send_mail($Ha,strtr($hb,$Sb),strtr($V,$Sb),$_POST["email_from"],$_FILES["email_files"])){$Ub++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),$Ub));}return
false;}function
messageQuery($m){return"<!--\n".str_replace("--","--><!-- ",$m)."\n-->";}function
editFunctions($e){$c=array(""=>($e["null"]||$e["auto_increment"]||$e["full_type"]=="tinyint(1)"?"":"*"));if(ereg('date|time',$e["type"])){$c["now"]='now';}if(eregi('_(md5|sha1)$',$e["field"],$j)){$c[]=strtolower($j[1]);}return$c;}function
editInput($k,$e,$P,$i){if($e["type"]=="enum"){return($e["null"]?"<input type='radio'$P value=''".($i||isset($_GET["select"])?"":" checked").">":"");}$ia=$this->_foreignKeyOptions($k,$e["field"]);if($ia){return"<select$P>".optionlist($ia,$i,true)."</select>";}if($e["full_type"]=="tinyint(1)"){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$P>";}if(ereg('date|timestamp',$e["type"])){return"<input value='".h($i)."'$P> (".'t.m.[jjjj]'.")";}return'';}function
processInput($e,$i,$_=""){if($_=="now"){return"$_()";}$c=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>[0-9]*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>[0-9]{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$i,$j)){$c=($j["p1"]!=""?$j["p1"]:($j["p2"]!=""?($j["p2"]<70?20:19).$j["p2"]:gmdate("Y")))."-$j[p3]$j[p4]-$j[p5]$j[p6]".end($j);}$c=q($c);if(!ereg('char|text',$e["type"])&&$e["full_type"]!="tinyint(1)"&&$i==""){$c="NULL";}elseif(ereg('^(md5|sha1)$',$_)){$c="$_($c)";}if(ereg("binary",$e["type"])){$c="unhex($c)";}return$c;}function
dumpOutput($t,$i=""){return"";}function
dumpFormat($t,$i=""){return
html_select("format",array('csv'=>'CSV,','csv;'=>'CSV;'),$i,$t);}function
navigation($Ma){global$yb,$ga;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$yb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($yb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ma=="auth"){$Aa=true;foreach((array)$_SESSION["pwds"]["server"][""]as$B=>$M){if(isset($M)){if($Aa){echo"<p>\n";$Aa=false;}echo"<a href='".h(auth_url("server","",$B))."'>".($B!=""?h($B):"<i>".'leer'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$ga,'">
<input type="submit" name="logout" value="Abmelden">
</p>
</form>
';if($Ma!="db"&&$Ma!="ns"){$G=table_status();if(!$G){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{$this->tablesPrint($G);}}}}function
tablesPrint($ma){echo"<p id='tables'>\n";foreach($ma
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'>".bold($f,$_GET["select"]==$d["Name"])."</a><br>\n";}}}function
_foreignKeyOptions($k,$W){$Va=column_foreign_keys($k);foreach((array)$Va[$W]as$ba){if(count($ba["source"])==1){$F=idf_escape($ba["target"][0]);$f=$this->rowDescription($ba["table"]);if($f!=""){$c=&$this->_values[$ba["table"]];if(!isset($c)){$G=table_status($ba["table"]);$c=($G["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $F, $f FROM ".idf_escape($ba["table"])." ORDER BY 2"));}return$c;}}}}}$l=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Tb,$v="",$Wa=array(),$qc=""){global$Dd,$Ca,$l,$g,$ua;header("Content-Type: text/html; charset=utf-8");$l->headers();$kc=$Tb.($qc!=""?": ".h($qc):"");$Sa=($Ca?"https":"http");echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="de">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$kc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$l->name(),'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=favicon.ico&amp;version=3.0.1",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=default.css&amp;version=3.0.1";echo'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\', \'',$Sa,'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Sa');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",$_SERVER["REQUEST_URI"]))."?file=functions.js&amp;version=3.0.1",'"></script>

<div id="content">
';if(isset($Wa)){$u=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($u?h($u):".").'">'.$ua[DRIVER].'</a> &raquo; ';$u=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Server');if($Wa===false){echo"$D\n";}else{echo"<a href='".($u?h($u):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Wa))){echo'<a href="'.h($u."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Wa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Wa
as$b=>$a){$ka=(is_array($a)?$a[1]:$a);if($ka!=""){echo'<a href="'.h(ME."$b=").urlencode(is_array($a)?$a[0]:$a).'">'.h($ka).'</a> &raquo; ';}}}echo"$Tb\n";}}echo"<h2>$kc</h2>\n";restart_session();if($_SESSION["messages"]){echo"<div class='message'>".implode("</div>\n<div class='message'>",$_SESSION["messages"])."</div>\n";$_SESSION["messages"]=array();}$ha=&get_session("dbs");if(DB!=""&&$ha&&!in_array(DB,$ha,true)){$ha=null;}if($v){echo"<div class='error'>$v</div>\n";}}function
page_footer($Ma=""){global$l;echo'</div>

<div id="menu">
';$l->navigation($Ma);echo'</div>
';}function
int32($x){while($x>=2147483648){$x-=4294967296;}while($x<=-2147483649){$x+=4294967296;}return(int)$x;}function
long2str($n,$vb){$xa='';foreach($n
as$a){$xa.=pack('V',$a);}if($vb){return
substr($xa,0,end($n));}return$xa;}function
str2long($xa,$vb){$n=array_values(unpack('V*',str_pad($xa,4*ceil(strlen($xa)/4),"\0")));if($vb){$n[]=strlen($xa);}return$n;}function
xxtea_mx($N,$L,$O,$S){return
int32((($N>>5&0x7FFFFFF)^$L<<2)+(($L>>3&0x1FFFFFFF)^$N<<4))^int32(($O^$L)+($S^$N));}function
encrypt_string($Ta,$b){if($Ta==""){return"";}$b=array_values(unpack("V*",pack("H*",md5($b))));$n=str2long($Ta,true);$x=count($n)-1;$N=$n[$x];$L=$n[0];$ub=floor(6+52/($x+1));$O=0;while($ub-->0){$O=int32($O+0x9E3779B9);$Ka=$O>>2&3;for($J=0;$J<$x;$J++){$L=$n[$J+1];$va=xxtea_mx($N,$L,$O,$b[$J&3^$Ka]);$N=int32($n[$J]+$va);$n[$J]=$N;}$L=$n[0];$va=xxtea_mx($N,$L,$O,$b[$J&3^$Ka]);$N=int32($n[$x]+$va);$n[$x]=$N;}return
long2str($n,false);}function
decrypt_string($Ta,$b){if($Ta==""){return"";}$b=array_values(unpack("V*",pack("H*",md5($b))));$n=str2long($Ta,false);$x=count($n)-1;$N=$n[$x];$L=$n[0];$ub=floor(6+52/($x+1));$O=int32($ub*0x9E3779B9);while($O){$Ka=$O>>2&3;for($J=$x;$J>0;$J--){$N=$n[$J-1];$va=xxtea_mx($N,$L,$O,$b[$J&3^$Ka]);$L=int32($n[$J]-$va);$n[$J]=$L;}$N=$n[$x];$va=xxtea_mx($N,$L,$O,$b[$J&3^$Ka]);$L=int32($n[0]-$va);$n[0]=$L;$O=int32($O-0x9E3779B9);}return
long2str($n,true);}$g='';if(!$ua){page_header('Keine Erweiterungen installiert',sprintf('Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$kb)),null);page_footer("auth");exit;}$ga=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ra=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($b)=explode(":",$a);$ra[$b]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$b=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$ab=$l->permanentLogin();$ra[$b]="$b:".base64_encode($ab?encrypt_string($_POST["password"],$ab):"");cookie("adminer_permanent",implode(" ",$ra));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($ga&&$_POST["token"]!=$ga){page_header('Abmelden','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$b){set_session($b,null);}$b=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ra[$b]){unset($ra[$b]);cookie("adminer_permanent",implode(" ",$ra));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($ra&&!$_SESSION["pwds"]){session_regenerate_id();$ab=$l->permanentLogin();foreach($ra
as$b=>$a){list(,$jd)=explode(":",$a);list($ib,$D,$B)=array_map('base64_decode',explode("-",$b));$_SESSION["pwds"][$ib][$D][$B]=decrypt_string(base64_decode($jd),$ab);}}function
auth_error($mc=null){global$g,$l,$ga;$cb=session_name();$v="";if(!$_COOKIE[$cb]&&$_GET[$cb]&&ini_bool("session.use_only_cookies")){$v='Sitzungen müssen aktiviert sein.';}elseif(isset($_GET["username"])){if(($_COOKIE[$cb]||$_GET[$cb])&&!$ga){$v='Sitzungsdauer abgelaufen, bitte erneut anmelden.';}else{$M=&get_session("pwds");if(isset($M)){$v=h($mc?$mc->getMessage():(is_string($g)?$g:'Ungültige Anmelde-Informationen.'));$M=null;}}}page_header('Login',$v,null);echo"<form action='' method='post'>\n";$l->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])&&class_exists("Min_DB")){$g=connect();}if(is_string($g)||!$l->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ga=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$ga;}$v=($_POST?($_POST["token"]==$ga?"":'CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','"post_max_size"')));$g->select_db($l->database());function
email_header($hd){return"=?UTF-8?B?".base64_encode($hd)."?=";}function
send_mail($Ha,$hb,$V,$Fa="",$db=array()){$H=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$V=str_replace("\n",$H,wordwrap(str_replace("\r","","$V\n")));$gb=uniqid("boundary");$Ya="";foreach($db["error"]as$b=>$a){if(!$a){$Ya.="--$gb$H"."Content-Type: ".str_replace("\n","",$db["type"][$b]).$H."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$db["name"][$b])."\"$H"."Content-Transfer-Encoding: base64$H$H".chunk_split(base64_encode(file_get_contents($db["tmp_name"][$b])),76,$H).$H;}}$pc="";$fb="Content-Type: text/plain; charset=utf-8$H"."Content-Transfer-Encoding: 8bit";if($Ya){$Ya.="--$gb--$H";$pc="--$gb$H$fb$H$H";$fb="Content-Type: multipart/mixed; boundary=\"$gb\"";}$fb.=$H."MIME-Version: 1.0$H"."X-Mailer: Adminer Editor".($Fa?$H."From: ".str_replace("\n","",$Fa):"");return
mail($Ha,email_header($hb),$pc.$V.$Ya,$fb);}function
dump_table($k){echo"\xef\xbb\xbf";}function
dump_data($k,$Fc,$t=""){global$g;$h=$g->query(($t?$t:"SELECT * FROM ".idf_escape($k)),1);if($h){while($d=$h->fetch_assoc()){dump_csv($d);}}}function
dump_headers($oc){$qa=($oc!=""?friendly_url($oc):"dump");$Wb="csv";header("Content-Type: text/csv; charset=utf-8");header("Content-Disposition: attachment; filename=$qa.$Wb");session_write_close();return$Wb;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Kb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$qd=" onclick=\"return confirm('".'Sind Sie sicher ?'."');\"";$ua[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$q=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$q-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($q)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$q=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$ea=(isset($_GET["select"])?$_POST["edit"]:$p);$r=fields($q);foreach($r
as$f=>$e){if(!isset($e["privileges"][$ea?"update":"insert"])||$l->fieldName($e)==""){unset($r[$f]);}}if($_POST&&!$v&&!isset($_GET["select"])){$K=$_POST["referer"];if($_POST["insert"]){$K=($ea?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$K)){$K=ME."select=".urlencode($q);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($q)," WHERE $p"),$K,'Datensatz gelöscht.');}else{$s=array();foreach($r
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$s[idf_escape($f)]=($ea?"\n".idf_escape($f)." = $a":$a);}}if($ea){if(!$s){redirect($K);}query_redirect("UPDATE".limit1(table($q)." SET".implode(",",$s),"\nWHERE $p"),$K,'Datensatz geändert.');}else{$h=insert_into($q,$s);$nc=($h?last_id():0);queries_redirect($K,sprintf('Datensatz%s hinzugefügt.',($nc?" $nc":"")),$h);}}}$Oa=$l->tableName(table_status($q));page_header(($ea?'Ändern':'Hinzufügen'),$v,array("select"=>array($q,$Oa)),$Oa);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$t=array();foreach($r
as$f=>$e){if(isset($e["privileges"]["select"])){$t[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($t){$w=get_rows("SELECT".limit(implode(", ",$t)." FROM ".table($q)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($w)!=1?null:reset($w));}}echo'
<form action="" method="post" enctype="multipart/form-data">
';if($r){echo"<table cellspacing='0'>\n";foreach($r
as$f=>$e){echo"<tr><th>".$l->fieldName($e);$hc=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?intval($d[$f]):$d[$f]):(!$ea&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($hc)?$hc:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$l->editVal($i,$e);}$_=($_POST["save"]?(string)$_POST["function"][$f]:($p&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$_="now";}input($e,$i,$_);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$ga,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($r){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($ea?'Speichern und weiter bearbeiten':'Speichern und nächsten hinzufügen')."\">\n";}}if($ea){echo"<input type='submit' name='delete' value='".'Entfernen'."'$qd>\n";}echo'</form>
';}elseif(isset($_GET["select"])){$q=$_GET["select"];$G=table_status($q);$E=indexes($q);$r=fields($q,1);$Ua=column_foreign_keys($q);$gc=array();$y=array();$Ga=null;foreach($r
as$b=>$e){$f=$l->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$y[$b]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Ga=$l->selectLengthProcess();}}$gc+=$e["privileges"];}list($t,$Y)=$l->selectColumnsProcess($y,$E);$p=$l->selectSearchProcess($r,$E);$X=$l->selectOrderProcess($r,$E);$C=$l->selectLimitProcess();$Fa=($t?implode(", ",$t):"*")."\nFROM ".table($q);$Jb=($Y&&count($Y)<count($t)?"\nGROUP BY ".implode(", ",$Y):"").($X?"\nORDER BY ".implode(", ",$X):"");if($_POST&&!$v){$Zb="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Za=$jb=null;foreach($E
as$Q){if($Q["type"]=="PRIMARY"){$Za=array_flip($Q["columns"]);$jb=($t?$Za:array());break;}}foreach($t
as$b=>$a){$a=$_GET["columns"][$b];if(!$a["fun"]){unset($jb[$a["col"]]);}}if($_POST["export"]){dump_headers($q);dump_table($q,"");if($_POST["format"]!="sql"){$d=array_keys($r);if($t){$d=array();foreach($t
as$a){$d[]=(ereg('^`.*`$',$a)?idf_unescape($a):$a);}}dump_csv($d);}if(!is_array($_POST["check"])||$jb===array()){$Mb=$p;if(is_array($_POST["check"])){$Mb[]="($Zb)";}dump_data($q,"INSERT","SELECT $Fa".($Mb?"\nWHERE ".implode(" AND ",$Mb):"").$Jb);}else{$Yb=array();foreach($_POST["check"]as$a){$Yb[]="(SELECT".limit($Fa,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$Jb,1).")";}dump_data($q,"INSERT",implode(" UNION ALL ",$Yb));}exit;}if(!$l->selectEmailProcess($p,$Ua)){if($_POST["save"]||$_POST["delete"]){$h=true;$na=0;$m=table($q);$s=array();if(!$_POST["delete"]){foreach($y
as$f=>$a){$a=process_input($r[$f]);if($a!==null){if($_POST["clone"]){$s[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$s[]=idf_escape($f)." = $a";}}}$m.=($_POST["clone"]?" (".implode(", ",array_keys($s)).")\nSELECT ".implode(", ",$s)."\nFROM ".table($q):" SET\n".implode(",\n",$s));}if($_POST["delete"]||$s){$lb="UPDATE";if($_POST["delete"]){$lb="DELETE";$m="FROM $m";}if($_POST["clone"]){$lb="INSERT";$m="INTO $m";}if($_POST["all"]||($jb===array()&&$_POST["check"])||count($Y)<count($t)){$h=queries($lb." $m".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $Zb"));$na=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$h=queries($lb.limit1($m,"\nWHERE ".where_check($a)));if(!$h){break;}$na+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$na),$h);}elseif(!$_POST["import"]){if(!$_POST["val"]){$v='Doppelklick zum Bearbeiten des Wertes.';}else{$h=true;$na=0;foreach($_POST["val"]as$la=>$d){$s=array();foreach($d
as$b=>$a){$b=bracket_escape($b,1);$s[]=idf_escape($b)." = ".(ereg('char|text',$r[$b]["type"])||$a!=""?$l->processInput($r[$b],$a):"NULL");}$h=queries("UPDATE".limit1(table($q)." SET ".implode(", ",$s)," WHERE ".where_check($la).($p?" AND ".implode(" AND ",$p):"")));if(!$h){break;}$na+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d Artikel betroffen.','%d Artikel betroffen.'),$na),$h);}}elseif(is_string($I=get_file("csv_file",true))){$I=preg_replace("~^\xEF\xBB\xBF~",'',$I);$h=true;$wa=array_keys($r);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$I,$R);$na=count($R[0]);begin();$sa=($_POST["separator"]=="csv"?",":";");foreach($R[0]as$b=>$a){preg_match_all("~((\"[^\"]*\")+|[^$sa]*)$sa~",$a.$sa,$Ob);if(!$b&&!array_diff($Ob[1],$wa)){$wa=$Ob[1];$na--;}else{$s=array();foreach($Ob[1]as$o=>$pa){$s[idf_escape($wa[$o])]=($pa==""&&$r[$wa[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$pa))));}$h=insert_update($q,$s,$Za);if(!$h){break;}}}if($h){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),$na),$h);queries("ROLLBACK");}else{$v=upload_error($I);}}}$Oa=$l->tableName($G);page_header('Daten zeigen von'.": $Oa",$v);session_write_close();$s=null;if(isset($gc["insert"])){$s="";foreach((array)$_GET["where"]as$a){if(count($Ua[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$s.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$l->selectLinks($G,$s);if(!$y){echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($r?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($q).'">',"</div>\n";$l->selectColumnsPrint($t,$y);$l->selectSearchPrint($p,$y,$E);$l->selectOrderPrint($X,$y,$E);$l->selectLimitPrint($C);$l->selectLengthPrint($Ga);$l->selectActionPrint($Ga);echo"</form>\n";$z=$_GET["page"];if($z=="last"){$Z=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));$z=floor(($Z-1)/$C);}$m="SELECT".limit((intval($C)&&$Y&&count($Y)<count($t)&&$_a=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Fa,($p?"\nWHERE ".implode(" AND ",$p):"").$Jb,($C!=""?intval($C):null),($z?$C*$z:0),"\n");echo$l->selectQuery($m);$h=$g->query($m);if(!$h){echo"<p class='error'>".error()."\n";}else{if($_a=="mssql"){$h->seek($C*$z);}$qb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$w=array();while($d=$h->fetch_assoc()){$w[]=$d;}if($_GET["page"]!="last"){$Z=(intval($C)&&$Y&&count($Y)<count($t)?($_a=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($m) x")):count($w));}if(!$w){echo"<p class='message'>".'Keine Daten.'."\n";}else{$bc=$l->backwardKeys($q,$Oa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n","<thead><tr>".(!$Y&&$t?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ändern'."</a>");$Lb=array();$U=array();reset($t);$X=1;foreach($w[0]as$b=>$a){$a=$_GET["columns"][key($t)];$e=$r[$t?$a["col"]:$b];$f=($e?$l->fieldName($e,$X):"*");if($f!=""){$X++;$Lb[$b]=$f;echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($b).($_GET["order"][0]==$b&&!$_GET["desc"][0]?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$U[$b]=$a["fun"];next($t);}$Cb=array();if($_GET["modify"]){foreach($w
as$d){foreach($d
as$b=>$a){$Cb[$b]=max($Cb[$b],min(40,strlen(utf8_decode($a))));}}}echo($bc?"<th>".'Relationen':"")."</thead>\n";foreach($l->rowDescriptions($w,$Ua)as$x=>$d){$sb=unique_array($w[$x],$E);$la="";foreach($sb
as$b=>$a){$la.="&".(isset($a)?urlencode("where[".bracket_escape($b)."]")."=".urlencode($a):"null%5B%5D=".urlencode($b));}echo"<tr".odd().">".(!$Y&&$t?"":"<td>".checkbox("check[]",substr($la,1),in_array(substr($la,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Y)<count($t)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($q).$la)."'>".'ändern'."</a>"));foreach($d
as$b=>$a){if(isset($Lb[$b])){$e=$r[$b];if($a!=""&&(!isset($qb[$b])||$qb[$b]!="")){$qb[$b]=(is_mail($a)?$Lb[$b]:"");}$u="";$a=$l->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$u=h(ME.'download='.urlencode($q).'&field='.urlencode($b).$la);}if($a==""){$a="&nbsp;";}elseif($Ga!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,intval($Ga)));}else{$a=h($a);}if(!$u){foreach((array)$Ua[$b]as$ja){if(count($Ua[$b])==1||count($ja["source"])==1){foreach($ja["source"]as$o=>$Hb){$u.=where_link($o,$ja["target"][$o],$w[$x][$Hb]);}$u=h(($ja["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ja["db"]),ME):ME).'select='.urlencode($ja["table"]).$u);break;}}}if($b=="COUNT(*)"){$u=h(ME."select=".urlencode($q));$o=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$sb)){$u.=h(where_link($o++,$n["col"],$n["val"],$n["op"]));}}foreach($sb
as$S=>$n){$u.=h(where_link($o++,$S,$n,(isset($n)?"=":"IS NULL")));}}}if(!$u){if(is_mail($a)){$u="mailto:$a";}if($Sa=is_url($d[$b])){$u=($Sa=="http"&&$Ca?$d[$b]:"$Sa://www.adminer.org/redirect/?url=".urlencode($d[$b]));}}$F=h("val[$la][".bracket_escape($b)."]");$i=$_POST["val"][$la][bracket_escape($b)];$cc=h(isset($i)?$i:$d[$b]);$fc=strpos($a,"<i>...</i>");$ec=is_utf8($a)&&!$fc&&$w[$x][$b]==$d[$b]&&!$U[$b];$dc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$ec)||isset($i)?"<td>".($dc?"<textarea name='$F' cols='30' rows='".(substr_count($d[$b],"\n")+1)."' onkeydown='return textareaKeydown(this, event);'>$cc</textarea>":"<input name='$F' value='$cc' size='$Cb[$b]'>"):"<td id='$F' ondblclick=\"".($ec?"selectDblClick(this, event".($dc?", 1":"").")":"alert('".h($fc?'Vergrössern Sie die Textlänge um den Wert ändern zu können.':'Benutzen Sie den Link zum editieren dieses Wertes.')."')").";\">".$l->selectVal($a,$u,$e));}}$l->backwardKeysPrint($bc,$w[$x]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$_b);if($w||$z){$Ab=true;if($_GET["page"]!="last"&&intval($C)&&count($Y)>=count($t)&&($Z>=$C||$z)){$Z=$G["Rows"];if(!isset($Z)||$p||2*$z*$C>$Z||($G["Engine"]=="InnoDB"&&$Z<1e4)){ob_flush();flush();$Z=$g->result("SELECT COUNT(*) FROM ".table($q).($p?" WHERE ".implode(" AND ",$p):""));}else{$Ab=false;}}echo"<p class='pages'>";if(intval($C)&&$Z>$C){$zb=floor(($Z-1)/$C);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"var page = +prompt('".'Seite'."', '".($z+1)."'); if (!isNaN(page) &amp;&amp; page) location.href = this.href + (page != 1 ? '&amp;page=' + (page - 1) : ''); return false;\">".'Seite'."</a>:".pagination(0,$z).($z>5?" ...":"");for($o=max(1,$z-4);$o<min($zb,$z+5);$o++){echo
pagination($o,$z);}echo($z+5<$zb?" ...":"").($Ab?pagination($zb,$z):' <a href="'.h(remove_from_uri()."&page=last").'">'.'letzte'."</a>");}echo" (".($Ab?"":"~ ").lang(array('%d Datensatz','%d Datensätze'),$Z).") ".checkbox("all",1,0,'Gesamtergebnis')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Ändern</legend><div>
<input type="submit" value="Speichern" title="Doppelklick zum Bearbeiten des Wertes.">
<input type="submit" name="edit" value="Ändern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$Z,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Exportieren');echo$l->dumpOutput(1,$_b["output"])." ".$l->dumpFormat(1,$_b["format"]);echo" <input type='submit' name='export' value='".'Exportieren'."'>\n","</div></fieldset>\n";}print_fieldset("import",'Importiere CSV',!$w);echo"<input type='hidden' name='token' value='$ga'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;"),$_b["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>\n","</div></fieldset>\n";$l->selectEmailPrint(array_filter($qb,'strlen'),$y);echo"</form>\n";}}}else{page_header('Server',"",false);echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Suchen'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabelle'.'<td>'.'Datensätze'."</thead>\n";foreach(table_status()as$k=>$d){$f=$l->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$k,in_array($k,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($k).'">'.h($f).'</a>';$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($k)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}page_footer();