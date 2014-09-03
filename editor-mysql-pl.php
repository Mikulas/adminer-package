<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.4.0
*/error_reporting(6135);$vb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($vb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Ld=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Ld)$$V=$Ld;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>function
toggle(id){var
el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}function
cookie(assign,days){var
date=new
Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}function
verifyVersion(){cookie('adminer_version=0',1);var
script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}function
selectValue(select){var
selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}function
trCheck(el){var
tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}function
formCheck(el,name){var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}function
tableCheck(){var
tables=document.getElementsByTagName('table');for(var
i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var
trs=tables[i].getElementsByTagName('tr');for(var
j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}function
formUncheck(id){var
el=document.getElementById(id);el.checked=false;trCheck(el);}function
formChecked(el,name){var
checked=0;var
elems=el.form.elements;for(var
i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}return checked;}function
tableClick(event){var
click=(!window.getSelection||getSelection().isCollapsed);var
el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){if(el.type!='checkbox'){return;}checkboxClick(event,el);click=false;}el=el.parentNode;}el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}trCheck(el);}var
lastChecked;function
checkboxClick(event,el){if(!el.name){return;}if(event.shiftKey&&(!lastChecked||lastChecked.name==el.name)){var
checked=(lastChecked?lastChecked.checked:true);var
inputs=el.parentNode.parentNode.parentNode.getElementsByTagName('input');var
checking=!lastChecked;for(var
i=0;i<inputs.length;i++){var
input=inputs[i];if(input.name===el.name){if(checking){input.checked=checked;trCheck(input);}if(input===el||input===lastChecked){if(checking){break;}checking=true;}}}}lastChecked=el;}function
setHtml(id,html){var
el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}function
nodePosition(el){var
pos=0;while(el=el.previousSibling){pos++;}return pos;}function
pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');location.href=href;}}function
selectAddRow(field){field.onchange=function(){selectFieldChange(field.form);};field.onchange();var
row=field.parentNode.cloneNode(true);var
selects=row.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}var
inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}field.parentNode.parentNode.appendChild(row);}function
selectFieldChange(form){var
ok=(function(){var
inputs=form.getElementsByTagName('input');for(var
i=0;i<inputs.length;i++){var
input=inputs[i];if(/^fulltext/.test(input.name)&&input.value){return true;}}var
ok=true;var
selects=form.getElementsByTagName('select');for(var
i=0;i<selects.length;i++){var
select=selects[i];var
col=selectValue(select);var
match=/^(where.+)col\]/.exec(select.name);if(match){var
op=selectValue(form[match[1]+'op]']);var
val=form[match[1]+'val]'].value;if(col
in
indexColumns&&(!/LIKE|REGEXP/.test(op)||(op=='LIKE'&&val.charAt(0)!='%'))){return true;}else
if(col||val){ok=false;}}if(col&&/^order/.test(select.name)){if(!(col
in
indexColumns)){ok=false;}break;}}return ok;})();setHtml('noindex',(ok?'':'!'));}function
bodyKeydown(event,button){var
target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(button){target.form[button].click();}else{target.form.submit();}return false;}return true;}function
editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var
target=event.target||event.srcElement;var
sibling=(event.keyCode==40?'nextSibling':'previousSibling');var
el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}return false;}if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}return true;}function
functionChange(select){var
input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}input.removeAttribute('maxlength');}else
if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}function
ajax(url,callback,data){var
request=(window.XMLHttpRequest?new
XMLHttpRequest():(window.ActiveXObject?new
ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}return request;}function
ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var
data=eval('('+request.responseText+')');for(var
key
in
data){setHtml(key,data[key]);}}});}function
selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}var
original=td.innerHTML;var
input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var
pos=event.rangeOffset;var
value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var
rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}if(document.selection){var
range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var
range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var
range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}function
eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}function
bodyLoad(version){}function
whisperClick(event,field){var
el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';return false;}}function
whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var
a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$b;return$b;}function
idf_unescape($Qb){$cc=substr($Qb,-1);return
str_replace($cc.$cc,$cc,substr($Qb,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Oc,$vb=false){if(get_magic_quotes_gpc()){while(list($u,$V)=each($Oc)){foreach($V
as$t=>$U){unset($Oc[$u][$t]);if(is_array($U)){$Oc[$u][stripslashes($t)]=$U;$Oc[]=&$Oc[$u][stripslashes($t)];}else$Oc[$u][stripslashes($t)]=($vb?$U:stripslashes($U));}}}}function
bracket_escape($Qb,$qa=false){static$Bd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Qb,($qa?array_flip($Bd):$Bd));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($B,$W,$za,$ac="",$xc="",$Xb=false){static$q=0;$q++;$I="<input type='checkbox' name='$B' value='".h($W)."'".($za?" checked":"").($xc?' onclick="'.h($xc).'"':'').($Xb?" class='jsonly'":"")." id='checkbox-$q'>";return($ac!=""?"<label for='checkbox-$q'>$I".h($ac)."</label>":$I);}function
optionlist($Ac,$cd=null,$Qd=false){$I="";foreach($Ac
as$t=>$U){$Bc=array($t=>$U);if(is_array($U)){$I.='<optgroup label="'.h($t).'">';$Bc=$U;}foreach($Bc
as$u=>$V)$I.='<option'.($Qd||is_string($u)?' value="'.h($u).'"':'').(($Qd||is_string($u)?(string)$u:$V)===$cd?' selected':'').'>'.h($V);if(is_array($U))$I.='</optgroup>';}return$I;}function
html_select($B,$Ac,$W="",$wc=true){if($wc)return"<select name='".h($B)."'".(is_string($wc)?' onchange="'.h($wc).'"':"").">".optionlist($Ac,$W)."</select>";$I="";foreach($Ac
as$u=>$V)$I.="<label><input type='radio' name='".h($B)."' value='".h($u)."'".($u==$W?" checked":"").">".h($V)."</label>";return$I;}function
confirm($Ja=""){return" onclick=\"return confirm('".'Czy jesteś pewien?'.($Ja?" (' + $Ja + ')":"")."');\"";}function
print_fieldset($q,$ec,$Td=false,$xc=""){echo"<fieldset><legend><a href='#fieldset-$q' onclick=\"".h($xc)."return !toggle('fieldset-$q');\">$ec</a></legend><div id='fieldset-$q'".($Td?"":" class='hidden'").">\n";}function
bold($va){return($va?" class='active'":"");}function
odd($I=' class="odd"'){static$p=0;if(!$I)$p=-1;return($p++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($u,$V=null){static$wb=true;if($wb)echo"{";if($u!=""){echo($wb?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.($V!==null?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$wb=false;}else{echo"\n}\n";$wb=true;}}function
ini_bool($Ub){$V=ini_get($Ub);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if($I===null)$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$I;}function
q($O){global$g;return$g->quote($O);}function
get_vals($G,$e=0){global$g;$I=array();$H=$g->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[]=$J[$e];}return$I;}function
get_key_vals($G,$Ia=null){global$g;if(!is_object($Ia))$Ia=$g;$I=array();$H=$Ia->query($G);if(is_object($H)){while($J=$H->fetch_row())$I[$J[0]]=$J[1];}return$I;}function
get_rows($G,$Ia=null,$i="<p class='error'>"){global$g;$Ha=(is_object($Ia)?$Ia:$g);$I=array();$H=$Ha->query($G);if(is_object($H)){while($J=$H->fetch_assoc())$I[]=$J;}elseif(!$H&&!is_object($Ia)&&$i&&defined("PAGE_HEADER"))echo$i.error()."\n";return$I;}function
unique_array($J,$s){foreach($s
as$r){if(ereg("PRIMARY|UNIQUE",$r["type"])){$I=array();foreach($r["columns"]as$u){if(!isset($J[$u]))continue
2;$I[$u]=$J[$u];}return$I;}}$I=array();foreach($J
as$u=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u))$I[$u]=$V;}return$I;}function
where($X){global$Yb;$I=array();foreach((array)$X["where"]as$u=>$V)$I[]=idf_escape(bracket_escape($u,1)).(($Yb=="sql"&&ereg('\\.',$V))||$Yb=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".exact_value($V));foreach((array)$X["null"]as$u)$I[]=idf_escape($u)." IS NULL";return
implode(" AND ",$I);}function
where_check($V){parse_str($V,$ya);remove_slashes(array(&$ya));return
where($ya);}function
where_link($p,$e,$W,$zc="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($e)."&where%5B$p%5D%5Bop%5D=".urlencode(($W!==null?$zc:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($W);}function
cookie($B,$W){global$aa;$Gc=array($B,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Gc[]=true;return
call_user_func_array('setcookie',$Gc);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$V){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($Xa,$M,$T,$Qa=null){global$Ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ya))."|username|".($Qa!==null?"db|":"").session_name()),$y);return"$y[1]?".(sid()?SID."&":"").($Xa!="server"||$M!=""?urlencode($Xa)."=".urlencode($M)."&":"")."username=".urlencode($T).($Qa!=""?"&db=".urlencode($Qa):"").($y[2]?"&$y[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($x,$_=null){if($_!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($x!==null?$x:$_SERVER["REQUEST_URI"]))][]=$_;}if($x!==null){if($x=="")$x=".";header("Location: $x");exit;}}function
query_redirect($G,$x,$_,$Tc=true,$ob=true,$rb=false){global$g,$i,$b;if($ob)$rb=!$g->query($G);$id="";if($G)$id=$b->messageQuery("$G;");if($rb){$i=error().$id;return
false;}if($Tc)redirect($x,$_.$id);return
true;}function
queries($G=null){global$g;static$Rc=array();if($G===null)return
implode(";\n",$Rc);$Rc[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$g->query($G);}function
apply_queries($G,$td,$kb='table'){foreach($td
as$Q){if(!queries("$G ".$kb($Q)))return
false;}return
true;}function
queries_redirect($x,$_,$Tc){return
query_redirect(queries(),$x,$_,$Tc,false,!$Tc);}function
remove_from_uri($Fc=""){return
substr(preg_replace("~(?<=[?&])($Fc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Na){return" ".($D==$Na?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($u,$Ra=false){$l=$_FILES[$u];if(!$l||$l["error"])return$l["error"];$I=file_get_contents($Ra&&ereg('\\.gz$',$l["name"])?"compress.zlib://$l[tmp_name]":($Ra&&ereg('\\.bz2$',$l["name"])?"compress.bzip2://$l[tmp_name]":$l["tmp_name"]));if($Ra){$jd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$jd,$Uc))$I=iconv("utf-16","utf-8",$I);elseif($jd=="\xEF\xBB\xBF")$I=substr($I,3);}return$I;}function
upload_error($i){$lc=($i==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($i?'Wgranie pliku było niemożliwe.'.($lc?" ".sprintf('Maksymalna wielkość pliku to %sB.',$lc):""):'Plik nie istnieje.');}function
repeat_pattern($F,$fc){return
str_repeat("$F{0,65535}",$fc/65535)."$F{0,".($fc
%
65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$fc=80,$pd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$fc).")($)?)u",$O,$y))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$fc).")($)?)",$O,$y);return
h($y[1]).$pd.(isset($y[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Oc,$Sb=array()){while(list($u,$V)=each($Oc)){if(is_array($V)){foreach($V
as$t=>$U)$Oc[$u."[$t]"]=$U;}elseif(!in_array($u,$Sb))echo'<input type="hidden" name="'.h($u).'" value="'.h($V).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$Ab){foreach($Ab["source"]as$V)$I[$V][]=$Ab;}return$I;}function
enum_input($Ed,$c,$j,$W,$gb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$z);$I=($gb!==null?"<label><input type='$Ed'$c value='$gb'".((is_array($W)?in_array($gb,$W):$W===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?$W==$p+1:(is_array($W)?in_array($p+1,$W):$W===$V));$I.=" <label><input type='$Ed'$c value='".($p+1)."'".($za?' checked':'').'>'.h($b->editVal($V,$j)).'</label>';}return$I;}function
input($j,$W,$m){global$Gd,$b,$Yb;$B=h(bracket_escape($j["field"]));echo"<td class='function'>";$Xc=($Yb=="mssql"&&$j["auto_increment"]);if($Xc&&!$_POST["save"])$m=null;$n=(isset($_GET["select"])||$Xc?array("orig"=>'bez zmian'):array())+$b->editFunctions($j);$c=" name='fields[$B]'";if($j["type"]=="enum")echo
nbsp($n[""])."<td>".$b->editInput($_GET["edit"],$j,$c,$W);else{$wb=0;foreach($n
as$u=>$V){if($u===""||!$V)break;$wb++;}$wc=($wb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($j["field"])))."]']; if ($wb > f.selectedIndex) f.selectedIndex = $wb;\"":"");$c.=$wc;echo(count($n)>1?html_select("function[$B]",$n,$m===null||in_array($m,$n)||isset($n[$m])?$m:"","functionChange(this);"):nbsp(reset($n))).'<td>';$Wb=$b->editInput($_GET["edit"],$j,$c,$W);if($Wb!="")echo$Wb;elseif($j["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$j["length"],$z);foreach($z[1]as$p=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?($W>>$p)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$B][$p]' value='".(1<<$p)."'".($za?' checked':'')."$wc>".h($b->editVal($V,$j)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$B'$wc>";elseif(ereg('text|lob',$j["type"]))echo"<textarea ".($Yb!="sqlite"||ereg("\n",$W)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$c>".h($W).'</textarea>';else{$mc=(!ereg('int',$j["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$j["length"],$y)?((ereg("binary",$j["type"])?2:1)*$y[1]+($y[3]?1:0)+($y[2]&&!$j["unsigned"]?1:0)):($Gd[$j["type"]]?$Gd[$j["type"]]+($j["unsigned"]?0:1):0));echo"<input value='".h($W)."'".($mc?" maxlength='$mc'":"").(ereg('char|binary',$j["type"])&&$mc>20?" size='40'":"")."$c>";}}}function
process_input($j){global$b;$Qb=bracket_escape($j["field"]);$m=$_POST["function"][$Qb];$W=$_POST["fields"][$Qb];if($j["type"]=="enum"){if($W==-1)return
false;if($W=="")return"NULL";return+$W;}if($j["auto_increment"]&&$W=="")return
null;if($m=="orig")return($j["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($j["field"]):false);if($m=="NULL")return"NULL";if($j["type"]=="set")return
array_sum((array)$W);if(ereg('blob|bytea|raw|file',$j["type"])&&ini_bool("file_uploads")){$l=get_file("fields-$Qb");if(!is_string($l))return
false;return
q($l);}return$b->processInput($j,$W,$m);}function
search_tables(){global$b,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Db=false;foreach(table_status()as$Q=>$R){$B=$b->tableName($R);if(isset($R["Engine"])&&$B!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$g->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if($H->fetch_row()){if(!$Db){echo"<ul>\n";$Db=true;}echo"<li><a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$B</a>\n";}}}echo($Db?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($Pb,$pc=false){global$b;$I=$b->dumpHeaders($Pb,$pc);$Ec=$_POST["output"];if($Ec!="text")header("Content-Disposition: attachment; filename=".$b->dumpFilename($Pb).".$I".($Ec!="file"&&!ereg('[^0-9a-z]',$Ec)?".$Ec":""));session_write_close();return$I;}function
dump_csv($J){foreach($J
as$u=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V==="")$J[$u]='"'.str_replace('"','""',$V).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($m,$e){return($m?($m=="unixepoch"?"DATETIME($e, '$m')":($m=="count distinct"?"COUNT(DISTINCT ":strtoupper("$m("))."$e)"):$e);}function
password_file(){$Va=ini_get("upload_tmp_dir");if(!$Va){if(function_exists('sys_get_temp_dir'))$Va=sys_get_temp_dir();else{$tb=@tempnam("","");if(!$tb)return
false;$Va=dirname($tb);unlink($tb);}}$tb="$Va/adminer.key";$I=@file_get_contents($tb);if($I)return$I;$Fb=@fopen($tb,"w");if($Fb){$I=md5(uniqid(mt_rand(),true));fwrite($Fb,$I);fclose($Fb);}return$I;}function
is_mail($db){$ma='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$ma+(\\.$ma+)*@($Wa?\\.)+$Wa";return
preg_match("(^$F(,\\s*$F)*\$)i",$db);}function
is_url($O){$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Wa?\\.)+$Wa(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$y)?strtolower($y[1]):"");}global$b,$g,$Ya,$bb,$ib,$i,$n,$Ib,$aa,$Vb,$Yb,$ba,$bc,$vc,$md,$Ad,$Dd,$Gd,$Nd,$ca;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Gc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Gc[]=true;call_user_func_array('session_set_cookie_params',$Gc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$vb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($Cd,$tc){$Kc=($tc==1?0:($tc
%
10>1&&$tc
%
10<5&&$tc/10
%
10!=1?1:2));$Cd=str_replace("%d","%s",$Cd[$Kc]);$tc=number_format($tc,0,".",' ');return
sprintf($Cd,$tc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$Kc=array_search("",$b->operators);if($Kc!==false)unset($b->operators[$Kc]);}function
dsn($Za,$T,$E,$nb='auth_error'){set_exception_handler($nb);parent::__construct($Za,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Hd=false){$H=parent::query($G);if(!$H){$jb=$this->errorInfo();$this->error=$jb[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H)$H=$this->_result;if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($G,$j=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch();return$J[$j];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",(array)$J->flags)?63:0);return$J;}}}$Ya=array();$Ya=array("server"=>"MySQL")+$Ya;if(!defined("DRIVER")){$Lc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Nb,$Jc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Nb:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Jc)?$Jc:ini_get("mysqli.default_port")),(!is_numeric($Jc)?$Jc:null));if($I){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$I;}function
result($G,$j=0){$H=$this->query($G);if(!$H)return
false;$J=$H->fetch_array();return$J[$j];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Oa){return
mysql_select_db($Oa,$this->_link);}function
query($G,$Hd=false){$H=@($Hd?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$j=0){$H=$this->query($G);if(!$H||!$H->num_rows)return
false;return
mysql_result($H->_result,0,$j);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($H){$this->_result=$H;$this->num_rows=mysql_num_rows($H);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$I=mysql_fetch_field($this->_result,$this->_offset++);$I->orgtable=$I->table;$I->orgname=$I->name;$I->charsetnr=($I->blob?63:0);return$I;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($M,$T,$E){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$M)),$T,$E);$this->query("SET NAMES utf8");return
true;}function
select_db($Oa){return$this->query("USE ".idf_escape($Oa));}function
query($G,$Hd=false){$this->setAttribute(1000,!$Hd);return
parent::query($G,$Hd);}}}function
idf_escape($Qb){return"`".str_replace("`","``",$Qb)."`";}function
table($Qb){return
idf_escape($Qb);}function
connect(){global$b;$g=new
Min_DB;$Ma=$b->credentials();if($g->connect($Ma[0],$Ma[1],$Ma[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$I=$g->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Zc=iconv("windows-1250","utf-8",$I))>strlen($I))$I=$Zc;return$I;}function
get_databases($xb=true){global$g;$I=&get_session("dbs");if($I===null){if($xb){restart_session();ob_flush();flush();}$I=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$X,$v,$uc=0,$ed=" "){return" $G$X".($v!==null?$ed."LIMIT $v".($uc?" OFFSET $uc":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($Qa,$Ca){global$g;$I=null;$Ka=$g->result("SHOW CREATE DATABASE ".idf_escape($Qa),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ka,$y))$I=$y[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ka,$y))$I=$Ca[$y[1]][-1];return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"]))$I[]=$J["Engine"];}return$I;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Pa){$I=array();foreach($Pa
as$Qa)$I[$Qa]=count(get_vals("SHOW TABLES IN ".idf_escape($Qa)));return$I;}function
table_status($B=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($B!=""?" LIKE ".q(addcslashes($B,"%_")):""))as$J){if($J["Engine"]=="InnoDB")$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);if(!isset($J["Rows"]))$J["Comment"]="";if($B!="")return$J;$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$y);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$y[1],"length"=>$y[2],"unsigned"=>ltrim($y[3].$y[4]),"default"=>($J["Default"]!=""||ereg("char",$y[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$y)?$y[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$Ia=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$Ia)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$g,$vc;static$F='`(?:[^`]|``)+`';$I=array();$La=$g->result("SHOW CREATE TABLE ".table($Q),1);if($La){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($vc))?(?: ON UPDATE ($vc))?~",$La,$z,PREG_SET_ORDER);foreach($z
as$y){preg_match_all("~$F~",$y[2],$hd);preg_match_all("~$F~",$y[5],$S);$I[idf_unescape($y[1])]=array("db"=>idf_unescape($y[4]!=""?$y[3]:$y[4]),"table"=>idf_unescape($y[4]!=""?$y[4]:$y[3]),"source"=>array_map('idf_unescape',$hd[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>($y[6]?$y[6]:"RESTRICT"),"on_update"=>($y[7]?$y[7]:"RESTRICT"),);}}return$I;}function
view($B){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($B),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"])$I[$J["Charset"]][-1]=$J["Collation"];else$I[$J["Charset"]][]=$J["Collation"];}ksort($I);foreach($I
as$u=>$V)asort($I[$u]);return$I;}function
information_schema($Qa){global$g;return($g->server_info>=5&&$Qa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$Uc))return$Uc[1]-1;}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($Qa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($Qa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($Pa){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Pa,'idf_escape');}function
rename_database($B,$Ba){if(create_database($B,$Ba)){$Vc=array();foreach(tables_list()as$Q=>$Ed)$Vc[]=table($Q)." TO ".idf_escape($B).".".table($Q);if(!$Vc||queries("RENAME TABLE ".implode(", ",$Vc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$pa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$r){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$r["columns"],true)){$pa="";break;}if($r["type"]=="PRIMARY")$pa=" UNIQUE";}}return" AUTO_INCREMENT$pa";}function
alter_table($Q,$B,$k,$yb,$Fa,$hb,$Ba,$oa,$Hc){$la=array();foreach($k
as$j)$la[]=($j[1]?($Q!=""?($j[0]!=""?"CHANGE ".idf_escape($j[0]):"ADD"):" ")." ".implode($j[1]).($Q!=""?" $j[2]":""):"DROP ".idf_escape($j[0]));$la=array_merge($la,$yb);$kd="COMMENT=".q($Fa).($hb?" ENGINE=".q($hb):"").($Ba?" COLLATE ".q($Ba):"").($oa!=""?" AUTO_INCREMENT=$oa":"").$Hc;if($Q=="")return
queries("CREATE TABLE ".table($B)." (\n".implode(",\n",$la)."\n) $kd");if($Q!=$B)$la[]="RENAME TO ".table($B);$la[]=$kd;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$u=>$V)$la[$u]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($td){return
apply_queries("TRUNCATE TABLE",$td);}function
drop_views($Sd){return
queries("DROP VIEW ".implode(", ",array_map('table',$Sd)));}function
drop_tables($td){return
queries("DROP TABLE ".implode(", ",array_map('table',$td)));}function
move_tables($td,$Sd,$S){$Vc=array();foreach(array_merge($td,$Sd)as$Q)$Vc[]=table($Q)." TO ".idf_escape($S).".".table($Q);return
queries("RENAME TABLE ".implode(", ",$Vc));}function
copy_tables($td,$Sd,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($td
as$Q){$B=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));if(!queries("DROP TABLE IF EXISTS $B")||!queries("CREATE TABLE $B LIKE ".table($Q))||!queries("INSERT INTO $B SELECT * FROM ".table($Q)))return
false;}foreach($Sd
as$Q){$B=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));$Rd=view($Q);if(!queries("DROP VIEW IF EXISTS $B")||!queries("CREATE VIEW $B AS $Rd[select]"))return
false;}return
true;}function
trigger($B){if($B=="")return
array();$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($B));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$J)$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($B,$Ed){global$g,$ib,$Vb,$Gd;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Fd="((".implode("|",array_merge(array_keys($Gd),$ka)).")\\b(?:\\s*\\(((?:[^'\")]*|$ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Ed=="FUNCTION"?"":$Vb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Fd";$Ka=$g->result("SHOW CREATE $Ed ".idf_escape($B),2);preg_match("~\\(((?:$F\\s*,?)*)\\)\\s*".($Ed=="FUNCTION"?"RETURNS\\s+$Fd\\s+":"")."(.*)~is",$Ka,$y);$k=array();preg_match_all("~$F\\s*,?~is",$y[1],$z,PREG_SET_ORDER);foreach($z
as$Fc){$B=str_replace("``","`",$Fc[2]).$Fc[3];$k[]=array("field"=>$B,"type"=>strtolower($Fc[5]),"length"=>preg_replace_callback("~$ib~s",'normalize_enum',$Fc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Fc[8] $Fc[7]"))),"full_type"=>$Fc[4],"inout"=>strtoupper($Fc[1]),"collation"=>strtolower($Fc[9]),);}if($Ed!="FUNCTION")return
array("fields"=>$k,"definition"=>$y[11]);return
array("fields"=>$k,"returns"=>array("type"=>$y[12],"length"=>$y[13],"unsigned"=>$y[15],"collation"=>$y[16]),"definition"=>$y[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$Mc){foreach($N
as$u=>$V)$N[$u]="$u = $V";$Od=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $Od ON DUPLICATE KEY UPDATE $Od");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$G){return$g->query("EXPLAIN $G");}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ad){return
true;}function
create_sql($Q,$oa){global$g;$I=$g->result("SHOW CREATE TABLE ".table($Q),1);if(!$oa)$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Oa){return"USE ".idf_escape($Oa);}function
trigger_sql($Q,$nd){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$J)$I.="\n".($nd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($sb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$sb);}$Yb="sql";$Gd=array();$md=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),)as$u=>$V){$Gd+=$V;$md[$u]=array_keys($V);}$Nd=array("unsigned","zerofill","unsigned zerofill");$_c=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$n=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Ib=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.4.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Edytor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$Pa=$this->databases(false);return(!$Pa?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Pa[(information_schema($Pa[0])?1:0)]);}function
databases($xb=true){return
get_databases($xb);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Użytkownik<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>Hasło<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($hc,$E){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($rd){return
h($rd["Comment"]!=""?$rd["Comment"]:$rd["Name"]);}function
fieldName($j,$Cc=0){return
h($j["comment"]!=""?$j["comment"]:$j["field"]);}function
selectLinks($rd,$N=""){$a=$rd["Name"];if($N!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'Nowy rekord'."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$qd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J)$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];foreach($I
as$u=>$V){$B=$this->tableName(table_status($u));if($B!=""){$bd=preg_quote($qd);$ed="(:|\\s*-)?\\s+";$I[$u]["name"]=(preg_match("(^$bd$ed(.+)|^(.+?)$ed$bd\$)iu",$B,$y)?$y[2].$y[3]:$B);}else
unset($I[$u]);}return$I;}function
backwardKeysPrint($sa,$J){foreach($sa
as$Q=>$ra){foreach($ra["keys"]as$Da){$w=ME.'select='.urlencode($Q);$p=0;foreach($Da
as$e=>$V)$w.=where_link($p++,$e,$J[$V]);echo"<a href='".h($w)."'>".h($ra["name"])."</a>";$w=ME.'edit='.urlencode($Q);foreach($Da
as$e=>$V)$w.="&set".urlencode("[".bracket_escape($e)."]")."=".urlencode($J[$V]);echo"<a href='".h($w)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$j){if(ereg("varchar|character varying",$j["type"]))return
idf_escape($j["field"]);}return"";}function
rowDescriptions($K,$_b){$I=$K;foreach($K[0]as$u=>$V){if(list($Q,$q,$B)=$this->_foreignColumn($_b,$u)){$Rb=array();foreach($K
as$J)$Rb[$J[$u]]=exact_value($J[$u]);$Ua=$this->_values[$Q];if(!$Ua)$Ua=get_key_vals("SELECT $q, $B FROM ".table($Q)." WHERE $q IN (".implode(", ",$Rb).")");foreach($K
as$A=>$J){if(isset($J[$u]))$I[$A][$u]=(string)$Ua[$J[$u]];}}}return$I;}function
selectVal($V,$w,$j){$I=($V===null?"&nbsp;":$V);if(ereg('blob|bytea',$j["type"])&&!is_utf8($V)){$I=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V))$I="<img src='$w' alt='$I'>";}if(like_bool($j)&&$I!="&nbsp;")$I=($V?'tak':'nie');if($w)$I="<a href='$w'>$I</a>";if(!$w&&!like_bool($j)&&ereg('int|float|double|decimal',$j["type"]))$I="<div class='number'>$I</div>";elseif(ereg('date',$j["type"]))$I="<div class='datetime'>$I</div>";return$I;}function
editVal($V,$j){if(ereg('date|timestamp',$j["type"])&&$V!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);return(ereg("binary",$j["type"])?reset(unpack("H*",$V)):$V);}function
selectColumnsPrint($L,$f){}function
selectSearchPrint($X,$f,$s){$X=(array)$_GET["where"];echo'<fieldset><legend>'.'Szukaj'."</legend><div>\n";$Zb=array();foreach($X
as$u=>$V)$Zb[$V["col"]]=$u;$p=0;$k=fields($_GET["select"]);foreach($f
as$B=>$Ta){$j=$k[$B];if(ereg("enum",$j["type"])||like_bool($j)){$u=$Zb[$B];$p--;echo"<div>".h($Ta)."<input type='hidden' name='where[$p][col]' value='".h($B)."'>:",(like_bool($j)?" <select name='where[$p][val]'>".optionlist(array(""=>"",'nie','tak'),$X[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$p][val][]'",$j,(array)$X[$u]["val"],($j["null"]?0:null))),"</div>\n";unset($f[$B]);}elseif(is_array($Ac=$this->_foreignKeyOptions($_GET["select"],$B))){if($k[$B]["null"])$Ac[0]='('.'puste'.')';$u=$Zb[$B];$p--;echo"<div>".h($Ta)."<input type='hidden' name='where[$p][col]' value='".h($B)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($Ac,$X[$u]["val"],true)."</select></div>\n";unset($f[$B]);}}$p=0;foreach($X
as$V){if(($V["col"]==""||$f[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($f,$V["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$V["op"]),"<input name='where[$p][val]' value='".h($V["val"])."'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'gdziekolwiek'.")".optionlist($f,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input name='where[$p][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Cc,$f,$s){$Dc=array();foreach($s
as$u=>$r){$Cc=array();foreach($r["columns"]as$V)$Cc[]=$f[$V];if(count(array_filter($Cc,'strlen'))>1&&$u!="PRIMARY")$Dc[$u]=implode(", ",$Cc);}if($Dc){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Dc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($v){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($vd){}function
selectActionPrint($s){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($eb,$f){if($eb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$f,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($eb)==1?'<input type="hidden" name="email_field" value="'.h(key($eb)).'">':html_select("email_field",$eb)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($f,$s){return
array(array(),array());}function
selectSearchProcess($k,$s){$I=array();foreach((array)$_GET["where"]as$u=>$X){$Aa=$X["col"];$yc=$X["op"];$V=$X["val"];if(($u<0?"":$Aa).$V!=""){$Ga=array();foreach(($Aa!=""?array($Aa=>$k[$Aa]):$k)as$B=>$j){if($Aa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$j["type"])){$B=idf_escape($B);if($Aa!=""&&$j["type"]=="enum")$Ga[]=(in_array(0,$V)?"$B IS NULL OR ":"")."$B IN (".implode(", ",array_map('intval',$V)).")";else{$wd=ereg('char|text|enum|set',$j["type"]);$W=$this->processInput($j,(!$yc&&$wd&&ereg('^[^%]+$',$V)?"%$V%":$V));$Ga[]=$B.($W=="NULL"?" IS".($yc==">="?" NOT":"")." $W":(in_array($yc,$this->operators)||$yc=="="?" $yc $W":($wd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($u<0&&$V=="0")$Ga[]="$B IS NULL";}}}$I[]=($Ga?"(".implode(" OR ",$Ga).")":"0");}}return$I;}function
selectOrderProcess($k,$s){$Tb=$_GET["index_order"];if($Tb!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($Tb!=""?array($s[$Tb]):$s)as$r){if($Tb!=""||$r["type"]=="INDEX"){$Ta=false;foreach($r["columns"]as$V){if(ereg('date|timestamp',$k[$V]["type"])){$Ta=true;break;}}$I=array();foreach($r["columns"]as$V)$I[]=idf_escape($V).($Ta?" DESC":"");return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$_b){if($_POST["email_append"])return
true;if($_POST["email"]){$dd=0;if($_POST["all"]||$_POST["check"]){$j=idf_escape($_POST["email_field"]);$od=$_POST["email_subject"];$_=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$od.$_",$z);$K=get_rows("SELECT DISTINCT $j".($z[1]?", ".implode(", ",array_map('idf_escape',array_unique($z[1]))):"")." FROM ".table($_GET["select"])." WHERE $j IS NOT NULL AND $j != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$k=fields($_GET["select"]);foreach($this->rowDescriptions($K,$_b)as$J){$Wc=array('{\\'=>'{');foreach($z[1]as$V)$Wc['{$'."$V}"]=$this->editVal($J[$V],$k[$V]);$db=$J[$_POST["email_field"]];if(is_mail($db)&&send_mail($db,strtr($od,$Wc),strtr($_,$Wc),$_POST["email_from"],$_FILES["email_files"]))$dd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$dd));}return
false;}function
messageQuery($G){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($j){$I=array();if($j["null"]&&ereg('blob',$j["type"]))$I["NULL"]='puste';$I[""]=($j["null"]||$j["auto_increment"]||like_bool($j)?"":"*");if(ereg('date|time',$j["type"]))$I["now"]='teraz';if(eregi('_(md5|sha1)$',$j["field"],$y))$I[]=strtolower($y[1]);return$I;}function
editInput($Q,$j,$c,$W){if($j["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$c,$j,($W||isset($_GET["select"])?$W:0),($j["null"]?"":null));$Ac=$this->_foreignKeyOptions($Q,$j["field"],$W);if($Ac!==null)return(is_array($Ac)?"<select$c>".optionlist($Ac,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($Ac)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($j["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($j))return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";$Mb="";if(ereg('time',$j["type"]))$Mb='HH:MM:SS';if(ereg('date|timestamp',$j["type"]))$Mb='d.m.[rrrr]'.($Mb?" [$Mb]":"");if($Mb)return"<input value='".h($W)."'$c> ($Mb)";if(eregi('_(md5|sha1)$',$j["field"]))return"<input type='password' value='".h($W)."'$c>";return'';}function
processInput($j,$W,$m=""){if($m=="now")return"$m()";$I=$W;if(ereg('date|timestamp',$j["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$y))$I=($y["p1"]!=""?$y["p1"]:($y["p2"]!=""?($y["p2"]<70?20:19).$y["p2"]:gmdate("Y")))."-$y[p3]$y[p4]-$y[p5]$y[p6]".end($y);$I=($j["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&($j["null"]||!ereg('char|text',$j["type"]))&&!like_bool($j))$I="NULL";elseif(ereg('^(md5|sha1)$',$m))$I="$m($I)";if(ereg("binary",$j["type"]))$I="unhex($I)";return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$nd,$G){global$g;$H=$g->query($G,1);if($H){while($J=$H->fetch_assoc()){if($nd=="table"){dump_csv(array_keys($J));$nd="INSERT";}dump_csv($J);}}}function
dumpFilename($Pb){return
friendly_url($Pb);}function
dumpHeaders($Pb,$pc=false){$pb="csv";header("Content-Type: text/csv; charset=utf-8");return$pb;}function
homepage(){return
true;}function
navigation($oc){global$ca,$Ad;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($oc=="auth"){$wb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if($E!==null){if($wb){echo"<p>\n";$wb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'puste'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj">
<input type="hidden" name="token" value="',$Ad,'">
</p>
</form>
';if($oc!="db"&&$oc!="ns"){$R=table_status();if(!$R)echo"<p class='message'>".'Brak tabel.'."\n";else$this->tablesPrint($R);}}}function
tablesPrint($td){echo"<p id='tables'>\n";foreach($td
as$J){$B=$this->tableName($J);if(isset($J["Engine"])&&$B!="")echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Pokaż dane'."'>$B</a><br>\n";}}function
_foreignColumn($_b,$e){foreach((array)$_b[$e]as$zb){if(count($zb["source"])==1){$B=$this->rowDescription($zb["table"]);if($B!=""){$q=idf_escape($zb["target"][0]);return
array($zb["table"],$q,$B);}}}}function
_foreignKeyOptions($Q,$e,$W=null){global$g;if(list($S,$q,$B)=$this->_foreignColumn(column_foreign_keys($Q),$e)){$I=&$this->_values[$S];if($I===null){$R=table_status($S);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $q, $B FROM ".table($S)." ORDER BY 2"));}if(!$I&&$W!==null)return$g->result("SELECT $B FROM ".table($S)." WHERE $q = ".q($W));return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($xd,$i="",$xa=array(),$yd=""){global$ba,$b,$g,$Ya;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$zd=$xd.($yd!=""?": ".h($yd):"");$_d=strip_tags($zd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$_d,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.4.0",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.4.0",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.4.0",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($xa!==null){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$Ya[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Serwer');if($xa===false)echo"$M\n";else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($xa)))echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($xa)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($xa
as$u=>$V){$Ta=(is_array($V)?$V[1]:$V);if($Ta!="")echo'<a href="'.h(ME."$u=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Ta).'</a> &raquo; ';}}echo"$xd\n";}}echo"<h2>$zd</h2>\n";restart_session();$Pd=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$nc=$_SESSION["messages"][$Pd];if($nc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$nc)."</div>\n";unset($_SESSION["messages"][$Pd]);}$Pa=&get_session("dbs");if(DB!=""&&$Pa&&!in_array(DB,$Pa,true))$Pa=null;if($i)echo"<div class='error'>$i</div>\n";define("PAGE_HEADER",1);}function
page_footer($oc=""){global$b;echo'</div>

<div id="menu">
';$b->navigation($oc);echo'</div>
';}function
int32($A){while($A>=2147483648)$A-=4294967296;while($A<=-2147483649)$A+=4294967296;return(int)$A;}function
long2str($U,$Ud){$Zc='';foreach($U
as$V)$Zc.=pack('V',$V);if($Ud)return
substr($Zc,0,end($U));return$Zc;}function
str2long($Zc,$Ud){$U=array_values(unpack('V*',str_pad($Zc,4*ceil(strlen($Zc)/4),"\0")));if($Ud)$U[]=strlen($Zc);return$U;}function
xxtea_mx($Z,$Y,$P,$t){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($t^$Z));}function
encrypt_string($ld,$u){if($ld=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($ld,true);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$Qc=floor(6+52/($A+1));$P=0;while($Qc-->0){$P=int32($P+0x9E3779B9);$ab=$P>>2&3;for($C=0;$C<$A;$C++){$Y=$U[$C+1];$qc=xxtea_mx($Z,$Y,$P,$u[$C&3^$ab]);$Z=int32($U[$C]+$qc);$U[$C]=$Z;}$Y=$U[0];$qc=xxtea_mx($Z,$Y,$P,$u[$C&3^$ab]);$Z=int32($U[$A]+$qc);$U[$A]=$Z;}return
long2str($U,false);}function
decrypt_string($ld,$u){if($ld=="")return"";$u=array_values(unpack("V*",pack("H*",md5($u))));$U=str2long($ld,false);$A=count($U)-1;$Z=$U[$A];$Y=$U[0];$Qc=floor(6+52/($A+1));$P=int32($Qc*0x9E3779B9);while($P){$ab=$P>>2&3;for($C=$A;$C>0;$C--){$Z=$U[$C-1];$qc=xxtea_mx($Z,$Y,$P,$u[$C&3^$ab]);$Y=int32($U[$C]-$qc);$U[$C]=$Y;}$Z=$U[$A];$qc=xxtea_mx($Z,$Y,$P,$u[$C&3^$ab]);$Y=int32($U[0]-$qc);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$g='';$Ad=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Ic=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($u)=explode(":",$V);$Ic[$u]=$V;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];if($d["permanent"]){$u=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"]);$Nc=$b->permanentLogin();$Ic[$u]="$u:".base64_encode($Nc?encrypt_string($d["password"],$Nc):"");cookie("adminer_permanent",implode(" ",$Ic));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($Ad&&$_POST["token"]!=$Ad){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$u)set_session($u,null);$u=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ic[$u]){unset($Ic[$u]);cookie("adminer_permanent",implode(" ",$Ic));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($Ic&&!$_SESSION["pwds"]){session_regenerate_id();$Nc=$b->permanentLogin();foreach($Ic
as$u=>$V){list(,$_a)=explode(":",$V);list($Xa,$M,$T)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$Xa][$M][$T]=decrypt_string(base64_decode($_a),$Nc);}}function
auth_error($mb=null){global$g,$b,$Ad;$gd=session_name();$i="";if(!$_COOKIE[$gd]&&$_GET[$gd]&&ini_bool("session.use_only_cookies"))$i='Wymagana jest obsługa sesji w PHP.';elseif(isset($_GET["username"])){if(($_COOKIE[$gd]||$_GET[$gd])&&!$Ad)$i='Sesja wygasła, zaloguj się ponownie.';else{$E=&get_session("pwds");if($E!==null){$i=h($mb?$mb->getMessage():(is_string($g)?$g:'Nieprawidłowe dane logowania.'));$E=null;}}}page_header('Zaloguj się',$i,null);echo"<form action='' method='post'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$Lc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Ad=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$Ad;$i=($_POST?($_POST["token"]==$Ad?"":'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','"post_max_size"')));$g->select_db($b->database());function
email_header($Kb){return"=?UTF-8?B?".base64_encode($Kb)."?=";}function
send_mail($db,$od,$_,$Gb="",$ub=array()){$h=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$_=str_replace("\n",$h,wordwrap(str_replace("\r","","$_\n")));$wa=uniqid("boundary");$na="";foreach((array)$ub["error"]as$u=>$V){if(!$V)$na.="--$wa$h"."Content-Type: ".str_replace("\n","",$ub["type"][$u]).$h."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$ub["name"][$u])."\"$h"."Content-Transfer-Encoding: base64$h$h".chunk_split(base64_encode(file_get_contents($ub["tmp_name"][$u])),76,$h).$h;}$ua="";$Lb="Content-Type: text/plain; charset=utf-8$h"."Content-Transfer-Encoding: 8bit";if($na){$na.="--$wa--$h";$ua="--$wa$h$Lb$h$h";$Lb="Content-Type: multipart/mixed; boundary=\"$wa\"";}$Lb.=$h."MIME-Version: 1.0$h"."X-Mailer: Adminer Editor".($Gb?$h."From: ".str_replace("\n","",$Gb):"");return
mail($db,email_header($od),$ua.$_.$na,$Lb);}function
like_bool($j){return
ereg("bool|(tinyint|bit)\\(1\\)",$j["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$vc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Ya[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Od=(isset($_GET["select"])?$_POST["edit"]:$X);$k=fields($a);foreach($k
as$B=>$j){if(!isset($j["privileges"][$Od?"update":"insert"])||$b->fieldName($j)=="")unset($k[$B]);}if($_POST&&!$i&&!isset($_GET["select"])){$x=$_POST["referer"];if($_POST["insert"])$x=($Od?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$x))$x=ME."select=".urlencode($a);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$x,'Rekord został usunięty.');else{$N=array();foreach($k
as$B=>$j){$V=process_input($j);if($V!==false&&$V!==null)$N[idf_escape($B)]=($Od?"\n".idf_escape($B)." = $V":$V);}if($Od){if(!$N)redirect($x);query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$N),"\nWHERE $X"),$x,'Rekord został zaktualizowany.');}else{$H=insert_into($a,$N);$dc=($H?last_id():0);queries_redirect($x,sprintf('Rekord%s został dodany.',($dc?" $dc":"")),$H);}}}$sd=$b->tableName(table_status($a));page_header(($Od?'Edytuj':'Dodaj'),$i,array("select"=>array($a,$sd)),$sd);$J=null;if($_POST["save"])$J=(array)$_POST["fields"];elseif($X){$L=array();foreach($k
as$B=>$j){if(isset($j["privileges"]["select"]))$L[]=($_POST["clone"]&&$j["auto_increment"]?"'' AS ":(ereg("enum|set",$j["type"])?"1*".idf_escape($B)." AS ":"")).idf_escape($B);}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false)echo"<p class='error'>".'Brak rekordów.'."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($k){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($k
as$B=>$j){echo"<tr><th>".$b->fieldName($j);$Sa=$_GET["set"][bracket_escape($B)];$W=($J!==null?($J[$B]!=""&&ereg("enum|set",$j["type"])?(is_array($J[$B])?array_sum($J[$B]):+$J[$B]):$J[$B]):(!$Od&&$j["auto_increment"]?"":(isset($_GET["select"])?false:($Sa!==null?$Sa:$j["default"]))));if(!$_POST["save"]&&is_string($W))$W=$b->editVal($W,$j);$m=($_POST["save"]?(string)$_POST["function"][$B]:($Od&&$j["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:($W!==null?'':'NULL'))));if($j["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$m="now";}input($j,$W,$m);echo"\n";}echo"</table>\n";}echo'<p>
';if($k){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Od?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}echo($Od?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$k?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Ad,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$s=indexes($a);$k=fields($a);$Bb=column_foreign_keys($a);if($R["Oid"]=="t")$s[]=array("type"=>"PRIMARY","columns"=>array("oid"));parse_str($_COOKIE["adminer_import"],$ha);$Yc=array();$f=array();$vd=null;foreach($k
as$u=>$j){$B=$b->fieldName($j);if(isset($j["privileges"]["select"])&&$B!=""){$f[$u]=html_entity_decode(strip_tags($B));if(ereg('text|lob',$j["type"]))$vd=$b->selectLengthProcess();}$Yc+=$j["privileges"];}list($L,$o)=$b->selectColumnsProcess($f,$s);$X=$b->selectSearchProcess($k,$s);$Cc=$b->selectOrderProcess($k,$s);$v=$b->selectLimitProcess();$Gb=($L?implode(", ",$L):($R["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($a);$Hb=($o&&count($o)<count($L)?"\nGROUP BY ".implode(", ",$o):"").($Cc?"\nORDER BY ".implode(", ",$Cc):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Kd=>$J)echo$g->result("SELECT".limit(idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($Kd).($X?" AND ".implode(" AND ",$X):"").($Cc?" ORDER BY ".implode(", ",$Cc):""),1));exit;}if($_POST&&!$i){$Wd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Mc=$Md=null;foreach($s
as$r){if($r["type"]=="PRIMARY"){$Mc=array_flip($r["columns"]);$Md=($L?$Mc:array());break;}}foreach((array)$Md
as$u=>$V){if(in_array(idf_escape($u),$L))unset($Md[$u]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Md===array()){$Vd=$X;if(is_array($_POST["check"]))$Vd[]="($Wd)";$G="SELECT $Gb".($Vd?"\nWHERE ".implode(" AND ",$Vd):"").$Hb;}else{$Id=array();foreach($_POST["check"]as$V)$Id[]="(SELECT".limit($Gb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V).$Hb,1).")";$G=implode(" UNION ALL ",$Id);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Bb)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($f
as$B=>$V){$V=process_input($k[$B]);if($V!==null){if($_POST["clone"])$N[idf_escape($B)]=($V!==false?$V:idf_escape($B));elseif($V!==false)$N[]=idf_escape($B)." = $V";}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ea="UPDATE";if($_POST["delete"]){$Ea="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ea="INSERT";$G="INTO $G";}if($_POST["all"]||($Md===array()&&$_POST["check"])||count($o)<count($L)){$H=queries($Ea." $G".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $Wd"));$ia=$g->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ea.limit1($G,"\nWHERE ".where_check($V)));if(!$H)break;$ia+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia),$H);}elseif(!$_POST["import"]){if(!$_POST["val"])$i='Kliknij podwójnie wartość, aby ją edytować.';else{$H=true;$ia=0;foreach($_POST["val"]as$Kd=>$J){$N=array();foreach($J
as$u=>$V){$u=bracket_escape($u,1);$N[]=idf_escape($u)." = ".(ereg('char|text',$k[$u]["type"])||$V!=""?$b->processInput($k[$u],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$Vd=" WHERE ".where_check($Kd).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".(count($o)<count($L)?" $G$Vd":limit1($G,$Vd)));if(!$H)break;$ia+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia),$H);}}elseif(is_string($l=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Da=array_keys($k);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$l,$z);$ia=count($z[0]);begin();$ed=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($z[0]as$u=>$V){preg_match_all("~((\"[^\"]*\")+|[^$ed]*)$ed~",$V.$ed,$jc);if(!$u&&!array_diff($jc[1],$Da)){$Da=$jc[1];$ia--;}else{$N=array();foreach($jc[1]as$p=>$Aa)$N[idf_escape($Da[$p])]=($Aa==""&&$k[$Da[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Aa))));$H=insert_update($a,$N,$Mc);if(!$H)break;}}if($H)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$ia),$H);queries("ROLLBACK");}else$i=upload_error($l);}}$sd=$b->tableName($R);page_header('pokaż'.": $sd",$i);session_write_close();$N=null;if(isset($Yc["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Bb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"]))))$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}$b->selectLinks($R,$N);if(!$f)echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($k?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$f);$b->selectSearchPrint($X,$f,$s);$b->selectOrderPrint($Cc,$f,$s);$b->selectLimitPrint($v);$b->selectLengthPrint($vd);$b->selectActionPrint($s);echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Eb=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$Eb-1)/$v);}$G="SELECT".limit((+$v&&$o&&count($o)<count($L)&&$Yb=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Gb,($X?"\nWHERE ".implode(" AND ",$X):"").$Hb,($v!=""?+$v:null),($D?$v*$D:0),"\n");echo$b->selectQuery($G);$H=$g->query($G);if(!$H)echo"<p class='error'>".error()."\n";else{if($Yb=="mssql")$H->seek($v*$D);$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$Yb=="oracle")unset($J["RNUM"]);$K[]=$J;}if($_GET["page"]!="last")$Eb=(+$v&&$o&&count($o)<count($L)?($Yb=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($G) x")):count($K));if(!$K)echo"<p class='message'>".'Brak rekordów.'."\n";else{$ta=$b->backwardKeys($a,$sd);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$o&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$rc=array();$n=array();reset($L);$Sc=1;foreach($K[0]as$u=>$V){if($R["Oid"]!="t"||$u!="oid"){$V=$_GET["columns"][key($L)];$j=$k[$L?($V?$V["col"]:current($L)):$u];$B=($j?$b->fieldName($j,$Sc):"*");if($B!=""){$Sc++;$rc[$u]=$B;$e=idf_escape($u);$Ob=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u);echo'<th><a href="'.h($Ob).'">'.(!$L||$V?apply_sql_function($V["fun"],$B):h(current($L)))."</a>";echo"<a href='".h("$Ob&desc%5B0%5D=1")."' title='".'malejąco'."' class='text'> ↓</a>";}$n[$u]=$V["fun"];next($L);}}$gc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$u=>$V)$gc[$u]=max($gc[$u],min(40,strlen(utf8_decode($V))));}}echo($ta?"<th>".'Relacje':"")."</thead>\n";foreach($b->rowDescriptions($K,$Bb)as$A=>$J){$Jd=unique_array($K[$A],$s);$Kd="";foreach($Jd
as$u=>$V)$Kd.="&".($V!==null?urlencode("where[".bracket_escape($u)."]")."=".urlencode($V):"null%5B%5D=".urlencode($u));echo"<tr".odd().">".(!$o&&$L?"":"<td>".checkbox("check[]",substr($Kd,1),in_array(substr($Kd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($o)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Kd)."'>".'edytuj'."</a>"));foreach($J
as$u=>$V){if(isset($rc[$u])){$j=$k[$u];if($V!=""&&(!isset($fb[$u])||$fb[$u]!=""))$fb[$u]=(is_mail($V)?$rc[$u]:"");$w="";$V=$b->editVal($V,$j);if($V!==null){if(ereg('blob|bytea|raw|file',$j["type"])&&$V!="")$w=h(ME.'download='.urlencode($a).'&field='.urlencode($u).$Kd);if($V==="")$V="&nbsp;";elseif(is_utf8($V)){if($vd!=""&&ereg('text|blob',$j["type"]))$V=shorten_utf8($V,max(0,+$vd));else$V=h($V);}if(!$w){foreach((array)$Bb[$u]as$Ab){if(count($Bb[$u])==1||end($Ab["source"])==$u){$w="";foreach($Ab["source"]as$p=>$hd)$w.=where_link($p,$Ab["target"][$p],$K[$A][$hd]);$w=h(($Ab["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ab["db"]),ME):ME).'select='.urlencode($Ab["table"]).$w);if(count($Ab["source"])==1)break;}}}if($u=="COUNT(*)"){$w=h(ME."select=".urlencode($a));$p=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Jd))$w.=h(where_link($p++,$U["col"],$U["val"],$U["op"]));}foreach($Jd
as$t=>$U)$w.=h(where_link($p++,$t,$U));}}if(!$w){if(is_mail($V))$w="mailto:$V";if($Pc=is_url($J[$u]))$w=($Pc=="http"&&$aa?$J[$u]:"$Pc://www.adminer.org/redirect/?url=".urlencode($J[$u]));}$q=h("val[$Kd][".bracket_escape($u)."]");$W=$_POST["val"][$Kd][bracket_escape($u)];$Jb=h($W!==null?$W:$J[$u]);$ic=strpos($V,"<i>...</i>");$cb=is_utf8($V)&&$K[$A][$u]==$J[$u]&&!$n[$u];$ud=ereg('text|lob',$j["type"]);echo(($_GET["modify"]&&$cb)||$W!==null?"<td>".($ud?"<textarea name='$q' cols='30' rows='".(substr_count($J[$u],"\n")+1)."'>$Jb</textarea>":"<input name='$q' value='$Jb' size='$gc[$u]'>"):"<td id='$q' ondblclick=\"".($cb?"selectDblClick(this, event".($ic?", 2":($ud?", 1":"")).")":"alert('".h('Użyj linku edycji aby zmienić tę wartość.')."')").";\">".$b->selectVal($V,$w,$j));}}if($ta)echo"<td>";$b->backwardKeysPrint($ta,$K[$A]);echo"</tr>\n";}echo"</table>\n",(!$o&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$lb=true;if($_GET["page"]!="last"&&+$v&&count($o)>=count($L)&&($Eb>=$v||$D)){$Eb=found_rows($R,$X);if($Eb<max(1e4,2*($D+1)*$v)){ob_flush();flush();$Eb=$g->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));}else$lb=false;}echo"<p class='pages'>";if(+$v&&$Eb>$v){$kc=floor(($Eb-1)/$v);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($D+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$D).($D>5?" ...":"");for($p=max(1,$D-4);$p<min($kc,$D+5);$p++)echo
pagination($p,$D);echo($D+5<$kc?" ...":"").($lb?pagination($kc,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.'ostatni'."</a>");}echo" (".($lb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$Eb).") ".checkbox("all",1,0,'wybierz wszystkie')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Kliknij podwójnie wartość, aby ją edytować.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$Eb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Cb=$b->dumpFormat();if($Cb){print_fieldset("export",'Eksport');$Ec=$b->dumpOutput();echo($Ec?html_select("output",$Ec,$ha["output"])." ":""),html_select("format",$Cb,$ha["format"])," <input type='submit' name='export' value='".'Eksport'."'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$Ad'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($fb,'strlen'),$f);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($Q,$q,$B)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$g->query("SELECT $q, $B FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$q = $_GET[value] OR ":"")."$B LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($J=$H->fetch_row());$p++)echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($q))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";if($p==10)echo"...\n";}exit;}else{page_header('Serwer',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$Q=>$J){$B=$b->tableName($J);if(isset($J["Engine"])&&$B!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$B</a>";$V=number_format($J["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();