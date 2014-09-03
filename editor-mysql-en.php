<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Ic=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Ic){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$sc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($sc){$$a=$sc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className+=' js';function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){return(select.value!==undefined?select.value:select.options[select.selectedIndex].text);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html.replace(/<noscript>.*<\/noscript>/i,'');}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxMain(href,'',event)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function textareaKeypress(target,event,tab,button){if(tab&&event.keyCode==9&&!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(target.setSelectionRange){var start=target.selectionStart;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey){target.blur();if(button){button.click();}else if(!target.form.onsubmit||target.form.onsubmit()!==false){target.form.submit();}}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
return true;}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){if(history.replaceState){history.replaceState(null,'',redirect);}
return ajaxSend(redirect);}
var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
callback(xmlhttp.responseText);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(text){var data=eval('('+text+')');for(var key in data){setHtml(key,data[key]);}});}
var ajaxState=0,ajaxTimeout;function ajaxSend(url,data){var currentState=++ajaxState;clearTimeout(ajaxTimeout);ajaxTimeout=setTimeout(function(){scrollTo(0,0);setHtml('content','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.2.0" alt="">');},500);return ajax(url,function(text){if(currentState==ajaxState){clearTimeout(ajaxTimeout);scrollTo(0,0);setHtml('content',text);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){if(href==as[i].href){as[i].className='active';}else if(as[i].className=='active'){as[i].className='';}}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}},data);}
function ajaxMain(url,data,event){if(!history.pushState||(event&&(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey))){return false;}
history.pushState(data,'',url);return ajaxSend(url,data);}
window.onpopstate=function(event){if(ajaxState||event.state){ajaxSend(location.href,event.state);}}
function ajaxForm(form,data){var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxMain((/\?/.test(form.action)?form.action:location.href),params.join('&'));}
return ajaxMain((form.action||location.pathname)+'?'+params.join('&'));}
function selectDblClick(td,event,text){td.ondblclick=function(){};var pos=event.rangeOffset;var value=(td.firstChild.alt?td.firstChild.alt:(td.textContent?td.textContent:td.innerText));if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
var input=document.createElement(text?'textarea':'input');input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;input.onkeypress=function(event){return textareaKeypress(input,event||window.event,false,document.getElementById('save'));};}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(text){input.value=text;input.name=td.id;});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/^https?:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.exec(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxMain(el.href,'',event));}
if(/^input$/i.test(el.tagName)&&(el.type=='image'||(el.type=='submit'&&!/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)))){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''));}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($ba){$Xb=substr($ba,-1);return
str_replace($Xb.$Xb,$Xb,substr($ba,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($na){if(get_magic_quotes_gpc()){while(list($c,$a)=each($na)){foreach($a
as$X=>$n){unset($na[$c][$X]);if(is_array($n)){$na[$c][stripslashes($X)]=$n;$na[]=&$na[$c][stripslashes($X)];}else{$na[$c][stripslashes($X)]=($Ic?$n:stripslashes($n));}}}}}function
bracket_escape($ba,$ad=false){static$qc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ba,($ad?array_flip($qc):$qc));}function
h($C){return
htmlspecialchars($C,ENT_QUOTES);}function
nbsp($C){return(trim($C)!=""?h($C):"&nbsp;");}function
nl_br($C){return
str_replace("\n","<br>",$C);}function
checkbox($f,$i,$Ua,$nc="",$pc=""){static$L=0;$L++;$b="<input type='checkbox'".($f?" name='$f' value='".h($i)."'":"").($Ua?" checked":"").($pc?" onclick=\"$pc\"":"")." id='checkbox-$L'>";return($nc!=""?"<label for='checkbox-$L'>$b".h($nc)."</label>":$b);}function
optionlist($ka,$hd=null,$vc=false){$b="";foreach($ka
as$X=>$n){if(is_array($n)){$b.='<optgroup label="'.h($X).'">';}foreach((is_array($n)?$n:array($X=>$n))as$c=>$a){$b.='<option'.($vc||is_string($c)?' value="'.h($c).'"':'').(($vc||is_string($c)?(string)$c:$a)===$hd?' selected':'').'>'.h($a);}if(is_array($n)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ka,$i="",$ya=true){if($ya){return"<select name='".h($f)."'".(is_string($ya)?" onchange=\"$ya\"":"").">".optionlist($ka,$i)."</select>";}$b="";foreach($ka
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$i?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($wc="",$jd=false){return" onclick=\"".($jd?"eventStop(event); ":"")."return confirm('".'Are you sure?'.($wc?" (' + $wc + ')":"")."');\"";}function
js_escape($C){return
addcslashes($C,"\r\n'\\/");}function
ini_bool($id){$a=ini_get($id);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($C){global$g;return$g->quote($C);}function
get_vals($l,$H=0){global$g;$b=array();$k=$g->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[]=$d[$H];}}return$b;}function
get_key_vals($l,$ha=null){global$g;if(!is_object($ha)){$ha=$g;}$b=array();$k=$ha->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[$d[0]]=$d[1];}}return$b;}function
get_rows($l,$ha=null,$u="<p class='error'>"){global$g;if(!is_object($ha)){$ha=$g;}$b=array();$k=$ha->query($l);if(is_object($k)){while($d=$k->fetch_assoc()){$b[]=$d;}}elseif(!$k&&$g->error&&$u&&defined("PAGE_HEADER")){echo$u.error()."\n";}return$b;}function
unique_array($d,$F){foreach($F
as$T){if(ereg("PRIMARY|UNIQUE",$T["type"])){$b=array();foreach($T["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){global$qa;$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$qa=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Bc);remove_slashes(array(&$Bc));return
where($Bc);}function
where_link($o,$H,$i,$Uc="="){return"&where%5B$o%5D%5Bcol%5D=".urlencode($H)."&where%5B$o%5D%5Bop%5D=".urlencode((isset($i)?$Uc:"IS NULL"))."&where%5B$o%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$Ta;$Ra=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ta);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ra[]=true;}return
call_user_func_array('setcookie',$Ra);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($rb,$D,$B){global$va;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($va))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($rb!="server"||$D!=""?urlencode($rb)."=".urlencode($D)."&":"")."username=".urlencode($B).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($G,$W=null){if(isset($W)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($G)?$G:$_SERVER["REQUEST_URI"]))][]=$W;}if(isset($G)){if($G==""){$G=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $G");exit;}}function
query_redirect($l,$G,$W,$sb=true,$Tc=true,$Ac=false){global$g,$u,$j;if($Tc){$Ac=!$g->query($l);}$Vb="";if($l){$Vb=$j->messageQuery($l);}if($Ac){$u=error().$Vb;return
false;}if($sb){redirect($G,$W.$Vb);}return
true;}function
queries($l=null){global$g;static$_c=array();if(!isset($l)){return
implode(";\n",$_c);}$_c[]=$l;return$g->query($l);}function
apply_queries($l,$ja,$Xc='table'){foreach($ja
as$h){if(!queries("$l ".$Xc($h))){return
false;}}return
true;}function
queries_redirect($G,$W,$sb){return
query_redirect(queries(),$G,$W,$sb,false,!$sb);}function
remove_from_uri($ia=""){return
substr(preg_replace("~(?<=[?&])($ia".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($_,$md){return" ".($_==$md?$_+1:'<a href="'.h(remove_from_uri("page").($_?"&page=$_":"")).'">'.($_+1)."</a>");}function
get_file($c,$Ec=false){$I=$_FILES[$c];if(!$I||$I["error"]){return$I["error"];}return
file_get_contents($Ec&&ereg('\\.gz$',$I["name"])?"compress.zlib://$I[tmp_name]":($Ec&&ereg('\\.bz2$',$I["name"])?"compress.bzip2://$I[tmp_name]":$I["tmp_name"]));}function
upload_error($u){$Yb=($u==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($u?'Unable to upload a file.'.($Yb?" ".sprintf('Maximum allowed file size is %sB.',$Yb):""):'File does not exist.');}function
odd($b=' class="odd"'){static$o=0;if(!$b){$o=-1;}return($o++%
2?$b:'');}function
json_row($c,$a=null){static$ca=true;if($ca){echo"{";}if($c!=""){echo($ca?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$ca=false;}else{echo"\n}\n";$ca=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($J,$Ya){return
str_repeat("$J{0,65535}",$Ya/65535)."$J{0,".($Ya
%
65535)."}";}function
shorten_utf8($C,$Ya=80,$_d=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Ya).")($)?)u",$C,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Ya).")($)?)",$C,$m);}return
h($m[1]).$_d.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($na,$Dd=array()){while(list($c,$a)=each($na)){if(is_array($a)){foreach($a
as$X=>$n){$na[$c."[$X]"]=$n;}}elseif(!in_array($c,$Dd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$j;$b=array();foreach($j->foreignKeys($h)as$ma){foreach($ma["source"]as$a){$b[$a][]=$ma;}}return$b;}function
enum_input($xa,$M,$e,$i,$Wb=null){global$j;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$U);$b=(isset($Wb)?"<label><input type='$xa'$M value='$Wb'".((is_array($i)?in_array($Wb,$i):$i===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($U[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ua=(is_int($i)?$i==$o+1:(is_array($i)?in_array($o+1,$i):$i===$a));$b.=" <label><input type='$xa'$M value='".($o+1)."'".($Ua?' checked':'').'>'.h($j->editVal($a,$e)).'</label>';}return$b;}function
input($e,$i,$x){global$Ea,$j,$qa;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$Zb=($qa=="mssql"&&$e["auto_increment"]);if($Zb&&!$_POST["save"]){$x=null;}$Z=(isset($_GET["select"])||$Zb?array("orig"=>'original'):array())+$j->editFunctions($e);$M=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($Z[""])."<td>".$j->editInput($_GET["edit"],$e,$M,$i);}else{$ca=0;foreach($Z
as$c=>$a){if($c===""||!$a){break;}$ca++;}$ya=($ca?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ca > f.selectedIndex) f.selectedIndex = $ca;\"":"");$M.=$ya;echo(count($Z)>1?html_select("function[$f]",$Z,!isset($x)||in_array($x,$Z)||isset($Z[$x])?$x:""):nbsp(reset($Z))).'<td>';$ac=$j->editInput($_GET["edit"],$e,$M,$i);if($ac!=""){echo$ac;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$U);foreach($U[1]as$o=>$a){$a=stripcslashes(str_replace("''","'",$a));$Ua=(is_int($i)?($i>>$o)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$o]' value='".(1<<$o)."'".($Ua?' checked':'')."$ya>".h($j->editVal($a,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$ya>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($qa!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$M onkeypress='return textareaKeypress(this, event);'>".h($i).'</textarea>';}else{$Pb=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$m)?((ereg("binary",$e["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$e["unsigned"]?1:0)):($Ea[$e["type"]]?$Ea[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Pb?" maxlength='$Pb'":"").(ereg('char|binary',$e["type"])&&$Pb>20?" size='40'":"")."$M>";}}}function
process_input($e){global$j;$ba=bracket_escape($e["field"]);$x=$_POST["function"][$ba];$i=$_POST["fields"][$ba];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return+$i;}if($e["auto_increment"]&&$i==""){return
null;}if($x=="orig"){return
false;}if($x=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$I=get_file("fields-$ba");if(!is_string($I)){return
false;}return
q($I);}return$j->processInput($e,$i,$x);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Ub=false;foreach(table_status()as$h=>$A){$f=$j->tableName($A);if(isset($A["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$k=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($h),array())),1));if($k->fetch_row()){if(!$Ub){echo"<ul>\n";$Ub=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($Ub?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($mb,$lc=false){global$j;$b=$j->dumpHeaders($mb,$lc);$Aa=$_POST["output"];if($Aa!="text"){header("Content-Disposition: attachment; filename=".($mb!=""?friendly_url($mb):"dump").".$b".($Aa!="file"&&!ereg('[^0-9a-z]',$Aa)?".$Aa":""));}session_write_close();return$b;}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\r\n";}function
apply_sql_function($x,$H){return($x?($x=="unixepoch"?"DATETIME($H, '$x')":($x=="count distinct"?"COUNT(DISTINCT ":strtoupper("$x("))."$H)"):$H);}function
password_file(){$tb=ini_get("upload_tmp_dir");if(!$tb){if(function_exists('sys_get_temp_dir')){$tb=sys_get_temp_dir();}else{$Ka=@tempnam("","");if(!$Ka){return
false;}$tb=dirname($Ka);unlink($Ka);}}$Ka="$tb/adminer.key";$b=@file_get_contents($Ka);if($b){return$b;}$Tb=@fopen($Ka,"w");if($Tb){$b=md5(uniqid(mt_rand(),true));fwrite($Tb,$b);fclose($Tb);}return$b;}function
is_mail($Ia){$cc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$J="$cc+(\\.$cc+)*@($bb?\\.)+$bb";return
preg_match("(^$J(,\\s*$J)*\$)i",$Ia);}function
is_url($C){$bb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($bb?\\.)+$bb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$C,$m)?strtolower($m[1]):"");}function
print_fieldset($L,$sd,$td=false){echo"<fieldset><legend><a href='#fieldset-$L' onclick=\"return !toggle('fieldset-$L');\">$sd</a></legend><div id='fieldset-$L'".($td?"":" class='hidden'").">\n";}function
bold($xd){return($xd?" class='active'":"");}global$j,$g,$va,$wd,$Rb,$u,$Z,$ud,$Ta,$jc,$qa,$Id,$Ld,$wb,$yc,$aa,$Kd,$Ea,$gd,$xb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ta=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Ra=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ta);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ra[]=true;}call_user_func_array('session_set_cookie_params',$Ra);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Zc,$za){$Bd=($za==1||(!$za&&'en'=='fr')?0:('en'=='sl'&&(!$za||$za>2)?1:0)+((!$za||$za>=5)&&ereg('cs|sk|ru|sl','en')?2:1));return
sprintf($Zc[$Bd],$za);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($od,$B,$O,$pd='auth_error'){set_exception_handler($pd);parent::__construct($od,$B,$O);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($l,$Na=false){$k=parent::query($l);if(!$k){$qd=$this->errorInfo();$this->error=$qd[2];return
false;}$this->store_result($k);return$k;}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result($k=null){if(!$k){$k=$this->_result;}if($k->columnCount()){$k->num_rows=$k->rowCount();return$k;}$this->affected_rows=$k->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch();return$d[$e];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$va=array();$va=array("server"=>"MySQL")+$va;if(!defined("DRIVER")){$Fd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$B,$O){mysqli_report(MYSQLI_REPORT_OFF);list($Hd,$fb)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$Hd:ini_get("mysqli.default_host")),("$D$B"!=""?$B:ini_get("mysqli.default_user")),("$D$B$O"!=""?$O:ini_get("mysqli.default_pw")),null,(is_numeric($fb)?$fb:ini_get("mysqli.default_port")),(!is_numeric($fb)?$fb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch_array();return$d[$e];}function
quote($C){return"'".$this->escape_string($C)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$B,$O){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$B"!=""?$B:ini_get("mysql.default_user")),("$D$B$O"!=""?$O:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($C){return"'".mysql_real_escape_string($C,$this->_link)."'";}function
select_db($Za){return
mysql_select_db($Za,$this->_link);}function
query($l,$Na=false){$k=@($Na?mysql_unbuffered_query($l,$this->_link):mysql_query($l,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
false;}if($k===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($k);}function
multi_query($l){return$this->_result=$this->query($l);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($l,$e=0){$k=$this->query($l);if(!$k||!$k->num_rows){return
false;}return
mysql_result($k->_result,0,$e);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($k){$this->_result=$k;$this->num_rows=mysql_num_rows($k);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$b=mysql_fetch_field($this->_result,$this->_offset++);$b->orgtable=$b->table;$b->orgname=$b->name;$b->charsetnr=($b->blob?63:0);return$b;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($D,$B,$O){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$B,$O);$this->query("SET NAMES utf8");return
true;}function
select_db($Za){return$this->query("USE ".idf_escape($Za));}function
query($l,$Na=false){$this->setAttribute(1000,!$Na);return
parent::query($l,$Na);}}}function
idf_escape($ba){return"`".str_replace("`","``",$ba)."`";}function
table($ba){return
idf_escape($ba);}function
connect(){global$j;$g=new
Min_DB;$Ob=$j->credentials();if($g->connect($Ob[0],$Ob[1],$Ob[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($nd=true){$b=&get_session("dbs");if(!isset($b)){if($nd){restart_session();ob_flush();flush();}$b=get_vals("SHOW DATABASES");}return$b;}function
limit($l,$p,$E,$Hc=0,$ua=" "){return" $l$p".(isset($E)?$ua."LIMIT $E".($Hc?" OFFSET $Hc":""):"");}function
limit1($l,$p){return
limit($l,$p,1);}function
db_collation($wa,$Vc){global$g;$b=null;$db=$g->result("SHOW CREATE DATABASE ".idf_escape($wa),1);if(preg_match('~ COLLATE ([^ ]+)~',$db,$m)){$b=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$db,$m)){$b=$Vc[$m[1]][0];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($fa){$b=array();foreach($fa
as$wa){$b[$wa]=count(get_vals("SHOW TABLES IN ".idf_escape($wa)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($A){return!isset($A["Rows"]);}function
fk_support($A){return($A["Engine"]=="InnoDB");}function
fields($h){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$m);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($d["Default"]!=""||ereg("char",$m[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$m)?$m[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($h,$ha=null){global$g;if(!is_object($ha)){$ha=$g;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$ha)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($h){global$g,$wb;static$J='`(?:[^`]|``)+`';$b=array();$Kc=$g->result("SHOW CREATE TABLE ".table($h),1);if($Kc){preg_match_all("~CONSTRAINT ($J) FOREIGN KEY \\(((?:$J,? ?)+)\\) REFERENCES ($J)(?:\\.($J))? \\(((?:$J,? ?)+)\\)(?: ON DELETE (".implode("|",$wb)."))?(?: ON UPDATE (".implode("|",$wb)."))?~",$Kc,$U,PREG_SET_ORDER);foreach($U
as$m){preg_match_all("~$J~",$m[2],$Sb);preg_match_all("~$J~",$m[5],$ta);$b[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Sb[0]),"target"=>array_map('idf_unescape',$ta[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){$b[$d["Charset"]][]=$d["Collation"];}ksort($b);foreach($b
as$c=>$a){sort($b[$c]);}return$b;}function
information_schema($wa){global$g;return($g->server_info>=5&&$wa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($wa,$Ca){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($wa).($Ca?" COLLATE ".q($Ca):""));}function
drop_databases($fa){set_session("dbs",null);return
apply_queries("DROP DATABASE",$fa,'idf_escape');}function
rename_database($f,$Ca){if(create_database($f,$Ca)){$Ha=array();foreach(tables_list()as$h=>$xa){$Ha[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Ha||queries("RENAME TABLE ".implode(", ",$Ha))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Qb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$T){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$T["columns"],true)){$Qb="";break;}if($T["type"]=="PRIMARY"){$Qb=" UNIQUE";}}}return" AUTO_INCREMENT$Qb";}function
alter_table($h,$f,$q,$dd,$ed,$Nc,$Ca,$eb,$fd){$ea=array();foreach($q
as$e){$ea[]=($e[1]?($h!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($h!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ea=array_merge($ea,$dd);$hc="COMMENT=".q($ed).($Nc?" ENGINE=".q($Nc):"").($Ca?" COLLATE ".q($Ca):"").($eb!=""?" AUTO_INCREMENT=$eb":"").$fd;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ea)."\n) $hc");}if($h!=$f){$ea[]="RENAME TO ".table($f);}$ea[]=$hc;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$ea));}function
alter_indexes($h,$ea){foreach($ea
as$c=>$a){$ea[$c]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($h).implode(",",$ea));}function
truncate_tables($ja){return
apply_queries("TRUNCATE TABLE",$ja);}function
drop_views($Va){return
queries("DROP VIEW ".implode(", ",array_map('table',$Va)));}function
drop_tables($ja){return
queries("DROP TABLE ".implode(", ",array_map('table',$ja)));}function
move_tables($ja,$Va,$ta){$Ha=array();foreach(array_merge($ja,$Va)as$h){$Ha[]=table($h)." TO ".idf_escape($ta).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Ha));}function
copy_tables($ja,$Va,$ta){foreach($ja
as$h){$f=($ta==DB?table("copy_$h"):idf_escape($ta).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($Va
as$h){$f=($ta==DB?table("copy_$h"):idf_escape($ta).".".table($h));$bd=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $bd[select]")){return
false;}}return
true;}function
trigger($f){$v=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($v);}function
triggers($h){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$xa){global$g,$Rb,$jc,$Ea;$cd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Lc="((".implode("|",array_merge(array_keys($Ea),$cd)).")(?:\\s*\\(((?:[^'\")]*|$Rb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$J="\\s*(".($xa=="FUNCTION"?"":implode("|",$jc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Lc";$db=$g->result("SHOW CREATE $xa ".idf_escape($f),2);preg_match("~\\(((?:$J\\s*,?)*)\\)".($xa=="FUNCTION"?"\\s*RETURNS\\s+$Lc":"")."\\s*(.*)~is",$db,$m);$q=array();preg_match_all("~$J\\s*,?~is",$m[1],$U,PREG_SET_ORDER);foreach($U
as$ia){$f=str_replace("``","`",$ia[2]).$ia[3];$q[]=array("field"=>$f,"type"=>strtolower($ia[5]),"length"=>preg_replace_callback("~$Rb~s",'normalize_enum',$ia[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ia[8] $ia[7]"))),"full_type"=>$ia[4],"inout"=>strtoupper($ia[1]),"collation"=>strtolower($ia[9]),);}if($xa!="FUNCTION"){return
array("fields"=>$q,"definition"=>$m[11]);}return
array("fields"=>$q,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$t){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($t)).")\nVALUES (".implode(", ",$t).")");}function
insert_update($h,$t,$gb){foreach($t
as$c=>$a){$t[$c]="$c = $a";}$la=implode(", ",$t);return
queries("INSERT INTO ".table($h)." SET $la ON DUPLICATE KEY UPDATE $la");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$l){return$g->query("EXPLAIN $l");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Od){return
true;}function
create_sql($h,$eb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$eb){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($Za){return"USE ".idf_escape($Za);}function
trigger_sql($h,$Mc){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$d){$b.="\n".($Mc=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($ld){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$ld);}$qa="sql";$Ea=array();$yc=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$Ea+=$a;$yc[$c]=array_keys($a);}$gd=array("unsigned","zerofill","unsigned zerofill");$kd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$ud=array("avg","count","count distinct","group_concat","max","min","sum");$wd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$xb="3.2.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return'Editor';}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$fa=get_databases(false);return(!$fa?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$fa[(information_schema($fa[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Username<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Password<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Md,$O){return
true;}function
tableName($Sa){return
h($Sa["Comment"]!=""?$Sa["Comment"]:$Sa["Name"]);}function
fieldName($e,$S=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Sa,$t=""){$r=$Sa["Name"];if(isset($t)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($r).$t).'">'.'New item'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a>\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$Wc){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($h)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Jc=preg_quote($Wc);$ua="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Jc$ua(.+)|^(.+?)$ua$Jc\$)iu",$f,$m)?$m[2].$m[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($Yc,$d){foreach($Yc
as$h=>$Gc){foreach($Gc["keys"]as$Da){$s=ME.'select='.urlencode($h);$o=0;foreach($Da
as$H=>$a){$s.=where_link($o++,$H,$d[$a]);}echo"<a href='".h($s)."'>".h($Gc["name"])."</a>";$s=ME.'edit='.urlencode($h);foreach($Da
as$H=>$a){$s.="&set".urlencode("[".bracket_escape($H)."]")."=".urlencode($d[$a]);}echo"<a href='".h($s)."' title='".'New item'."'>+</a> ";}}}function
selectQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->\n";}function
rowDescription($h){foreach(fields($h)as$e){if($e["type"]=="varchar"){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($v,$cb){$b=$v;foreach($v[0]as$c=>$a){foreach((array)$cb[$c]as$Y){if(count($Y["source"])==1){$L=idf_escape($Y["target"][0]);$f=$this->rowDescription($Y["table"]);if($f!=""){$Pc=array();foreach($v
as$d){$Pc[$d[$c]]=exact_value($d[$c]);}$Nb=$this->_values[$Y["table"]];if(!$Nb){$Nb=get_key_vals("SELECT $L, $f FROM ".table($Y["table"])." WHERE $L IN (".implode(", ",$Pc).")");}foreach($v
as$w=>$d){if(isset($d[$c])){$b[$w][$c]=(string)$Nb[$d[$c]];}}break;}}}}return$b;}function
selectVal($a,$s,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d byte','%d bytes'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$s' alt='$b'>";}}if(ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.0").'" alt="'.h($a).'">';}if($s){$b="<a href='$s'>$b</a>";}if(!$s&&!ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$1-$3-$5',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($y,$z){}function
selectSearchPrint($p,$z,$F){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Search'."</legend><div>\n";$Kb=array();foreach($p
as$c=>$a){$Kb[$a["col"]]=$c;}$o=0;$q=fields($_GET["select"]);foreach($q
as$f=>$e){if(ereg("enum",$e["type"])){$oa=$z[$f];$c=$Kb[$f];$o--;echo"<div>".h($oa)."<input type='hidden' name='where[$o][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$o][val][]'",$e,(array)$p[$c]["val"],($e["null"]?0:null)),"</div>\n";unset($z[$f]);}}foreach($z
as$f=>$oa){$ka=$this->_foreignKeyOptions($_GET["select"],$f);if($ka){if($q[$f]["null"]){$ka[0]='('.'empty'.')';}$c=$Kb[$f];$o--;echo"<div>".h($oa)."<input type='hidden' name='where[$o][col]' value='".h($f)."'><input type='hidden' name='where[$o][op]' value='='>: <select name='where[$o][val]'>".optionlist($ka,$p[$c]["val"],true)."</select></div>\n";unset($z[$f]);}}$o=0;foreach($p
as$a){if(($a["col"]==""||$z[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$o][col]'><option value=''>(".'anywhere'.")".optionlist($z,$a["col"],true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$o][val]' value='".h($a["val"])."'></div>\n";$o++;}}echo"<div><select name='where[$o][col]' onchange='selectAddRow(this);'><option value=''>(".'anywhere'.")".optionlist($z,null,true)."</select>",html_select("where[$o][op]",array(-1=>"")+$this->operators),"<input name='where[$o][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($S,$z,$F){$Eb=array();foreach($F
as$c=>$T){$S=array();foreach($T["columns"]as$a){$S[]=$z[$a];}if(count(array_filter($S,'strlen'))>1&&$c!="PRIMARY"){$Eb[$c]=implode(", ",$S);}}if($Eb){echo'<fieldset><legend>'.'Sort'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Eb,$_GET["index_order"],true)."</select>","</div></fieldset>\n";}}function
selectLimitPrint($E){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$E),"</div></fieldset>\n";}function
selectLengthPrint($Ga){}function
selectActionPrint(){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectEmailPrint($ib,$z){if($ib){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<p>".'From'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Subject'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75' onkeypress='return textareaKeypress(this, event, false, this.form.email);'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n",html_select("email_addition",$z,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Insert'."'>\n";echo"<p>".'Attachments'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($ib)==1?'<input type="hidden" name="email_field" value="'.h(key($ib)).'">':html_select("email_field",$ib)),"<input type='submit' name='email' value='".'Send'."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($z,$F){return
array(array(),array());}function
selectSearchProcess($q,$F){$b=array();foreach((array)$_GET["where"]as$c=>$p){$ra=$p["col"];$Oa=$p["op"];$a=$p["val"];if(($c<0?"":$ra).$a!=""){$La=array();foreach(($ra!=""?array($ra=>$q[$ra]):$q)as$f=>$e){if($ra!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);if($ra!=""&&$e["type"]=="enum"){$La[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$Sc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,(!$Oa&&$Sc&&ereg('^[^%]+$',$a)?"%$a%":$a));$La[]=$f.($i=="NULL"?" IS".($Oa==">="?" NOT":"")." $i":(in_array($Oa,$this->operators)||$Oa=="="?" $Oa $i":($Sc?" LIKE $i":" IN (".str_replace(",","', '",$i).")")));if($c<0&&$a=="0"){$La[]="$f IS NULL";}}}}$b[]=($La?"(".implode(" OR ",$La).")":"0");}}return$b;}function
selectOrderProcess($q,$F){if($_GET["order"]){return
array(idf_escape($_GET["order"][0]).(isset($_GET["desc"][0])?" DESC":""));}$Lb=$_GET["index_order"];foreach(($Lb!=""?array($F[$Lb]):$F)as$T){if($Lb!=""||$T["type"]=="INDEX"){$oa=false;foreach($T["columns"]as$a){if(ereg('date|timestamp',$q[$a]["type"])){$oa=true;break;}}$b=array();foreach($T["columns"]as$a){$b[]=idf_escape($a).($oa?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$cb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$Rc=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$vb=$_POST["email_subject"];$W=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$vb.$W",$U);$v=get_rows("SELECT DISTINCT $e".($U[1]?", ".implode(", ",array_map('idf_escape',array_unique($U[1]))):"")." FROM ".table($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($v,$cb)as$d){$Hb=array('{\\'=>'{');foreach($U[1]as$a){$Hb['{$'."$a}"]=$this->editVal($d[$a],$q[$a]);}$Ia=$d[$_POST["email_field"]];if(is_mail($Ia)&&send_mail($Ia,strtr($vb,$Hb),strtr($W,$Hb),$_POST["email_from"],$_FILES["email_files"])){$Rc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('%d e-mail has been sent.','%d e-mails have been sent.'),$Rc));}return
false;}function
messageQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->";}function
editFunctions($e){$b=array();if($e["null"]&&ereg('blob',$e["type"])){$b["NULL"]='empty';}$b[""]=($e["null"]||$e["auto_increment"]||ereg("(tinyint|bit)\\(1\\)",$e["full_type"])?"":"*");if(ereg('date|time',$e["type"])){$b["now"]='now';}if(eregi('_(md5|sha1)$',$e["field"],$m)){$b[]=strtolower($m[1]);}return$b;}function
editInput($h,$e,$M,$i){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$M value='-1' checked><i>".'original'."</i></label> ":"").enum_input("radio",$M,$e,($i||isset($_GET["select"])?$i:0),($e["null"]?"":null));}$ka=$this->_foreignKeyOptions($h,$e["field"]);if($ka){return"<select$M>".optionlist($ka,$i,true)."</select>";}if(ereg("(tinyint|bit)\\(1\\)",$e["full_type"])){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$M>";}if(ereg('date|timestamp',$e["type"])){return"<input value='".h($i)."'$M> (".'[yyyy]-mm-dd'.")";}if(eregi('_(md5|sha1)$',$e["field"])){return"<input type='password' value='".h($i)."'$M>";}return'';}function
processInput($e,$i,$x=""){if($x=="now"){return"$x()";}$b=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$1-$3-$5'))).'(.*))',$i,$m)){$b=($m["p1"]!=""?$m["p1"]:($m["p2"]!=""?($m["p2"]<70?20:19).$m["p2"]:gmdate("Y")))."-$m[p3]$m[p4]-$m[p5]$m[p6]".end($m);}$b=($e["type"]=="bit"&&ereg('^[0-9]+$',$i)?$b:q($b));if(!ereg('char|text',$e["type"])&&!ereg("(tinyint|bit)\\(1\\)",$e["full_type"])&&$i==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$x)){$b="$x($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($h,$Mc,$l){global$g;$k=$g->query($l,1);if($k){while($d=$k->fetch_assoc()){dump_csv($d);}}}function
dumpHeaders($mb,$lc=false){$Ad="csv";header("Content-Type: text/csv; charset=utf-8");return$Ad;}function
homepage(){return
true;}function
navigation($Ma){global$xb,$aa;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$xb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($xb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ma=="auth"){$ca=true;foreach((array)$_SESSION["pwds"]["server"][""]as$B=>$O){if(isset($O)){if($ca){echo"<p onclick='eventStop(event);'>\n";$ca=false;}echo"<a href='".h(auth_url("server","",$B))."'>".($B!=""?h($B):"<i>".'empty'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="hidden" name="token" value="',$aa,'">
<input type="submit" name="logout" value="Logout" onclick="eventStop(event);">
</p>
</form>
';if($Ma!="db"&&$Ma!="ns"){$A=table_status();if(!$A){echo"<p class='message'>".'No tables.'."\n";}else{$this->tablesPrint($A);}}}}function
tablesPrint($ja){echo"<p id='tables'>\n";foreach($ja
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'".bold($_GET["select"]==$d["Name"]).">$f</a><br>\n";}}}function
_foreignKeyOptions($h,$H){$cb=column_foreign_keys($h);foreach((array)$cb[$H]as$Y){if(count($Y["source"])==1){$L=idf_escape($Y["target"][0]);$f=$this->rowDescription($Y["table"]);if($f!=""){$b=&$this->_values[$Y["table"]];if(!isset($b)){$A=table_status($Y["table"]);$b=($A["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $L, $f FROM ".table($Y["table"])." ORDER BY 2"));}return$b;}}}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($fc,$u="",$Pa=array(),$ec=""){global$Id,$j,$g,$va;header("Content-Type: text/html; charset=utf-8");$j->headers();$dc=$fc.($ec!=""?": ".h($ec):"");$gc=$dc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($gc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$gc,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Ib');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.0",'"></script>

<div id="content">
';}if(isset($Pa)){$s=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($s?h($s):".").'">'.$va[DRIVER].'</a> &raquo; ';$s=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Server');if($Pa===false){echo"$D\n";}else{echo"<a href='".($s?h($s):".")."'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Pa))){echo'<a href="'.h($s."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Pa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Pa
as$c=>$a){$oa=(is_array($a)?$a[1]:$a);if($oa!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($oa).'</a> &raquo; ';}}}echo"$fc\n";}}echo"<h2>$dc</h2>\n";restart_session();$Fc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$kc=$_SESSION["messages"][$Fc];if($kc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$kc)."</div>\n";unset($_SESSION["messages"][$Fc]);}$fa=&get_session("dbs");if(DB!=""&&$fa&&!in_array(DB,$fa,true)){$fa=null;}if($u){echo"<div class='error'>$u</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Ma=""){global$j;if(!is_ajax()){echo'</div>

<div id="menu">
';$j->navigation($Ma);echo'</div>
';}}function
int32($w){while($w>=2147483648){$w-=4294967296;}while($w<=-2147483649){$w+=4294967296;}return(int)$w;}function
long2str($n,$Jb){$_a='';foreach($n
as$a){$_a.=pack('V',$a);}if($Jb){return
substr($_a,0,end($n));}return$_a;}function
str2long($_a,$Jb){$n=array_values(unpack('V*',str_pad($_a,4*ceil(strlen($_a)/4),"\0")));if($Jb){$n[]=strlen($_a);}return$n;}function
xxtea_mx($Q,$P,$V,$X){return
int32((($Q>>5&0x7FFFFFF)^$P<<2)+(($P>>3&0x1FFFFFFF)^$Q<<4))^int32(($V^$P)+($X^$Q));}function
encrypt_string($Wa,$c){if($Wa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Wa,true);$w=count($n)-1;$Q=$n[$w];$P=$n[0];$Mb=floor(6+52/($w+1));$V=0;while($Mb-->0){$V=int32($V+0x9E3779B9);$ab=$V>>2&3;for($N=0;$N<$w;$N++){$P=$n[$N+1];$Ba=xxtea_mx($Q,$P,$V,$c[$N&3^$ab]);$Q=int32($n[$N]+$Ba);$n[$N]=$Q;}$P=$n[0];$Ba=xxtea_mx($Q,$P,$V,$c[$N&3^$ab]);$Q=int32($n[$w]+$Ba);$n[$w]=$Q;}return
long2str($n,false);}function
decrypt_string($Wa,$c){if($Wa==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$n=str2long($Wa,false);$w=count($n)-1;$Q=$n[$w];$P=$n[0];$Mb=floor(6+52/($w+1));$V=int32($Mb*0x9E3779B9);while($V){$ab=$V>>2&3;for($N=$w;$N>0;$N--){$Q=$n[$N-1];$Ba=xxtea_mx($Q,$P,$V,$c[$N&3^$ab]);$P=int32($n[$N]-$Ba);$n[$N]=$P;}$Q=$n[$w];$Ba=xxtea_mx($Q,$P,$V,$c[$N&3^$ab]);$P=int32($n[0]-$Ba);$n[0]=$P;$V=int32($V-0x9E3779B9);}return
long2str($n,true);}$g='';$aa=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$sa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$sa[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$lb=$j->permanentLogin();$sa[$c]="$c:".base64_encode($lb?encrypt_string($_POST["password"],$lb):"");cookie("adminer_permanent",implode(" ",$sa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($aa&&$_POST["token"]!=$aa){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($sa[$c]){unset($sa[$c]);cookie("adminer_permanent",implode(" ",$sa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($sa&&!$_SESSION["pwds"]){session_regenerate_id();$lb=$j->permanentLogin();foreach($sa
as$c=>$a){list(,$zd)=explode(":",$a);list($rb,$D,$B)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$rb][$D][$B]=decrypt_string(base64_decode($zd),$lb);}}function
auth_error($bc=null){global$g,$j,$aa;$kb=session_name();$u="";if(!$_COOKIE[$kb]&&$_GET[$kb]&&ini_bool("session.use_only_cookies")){$u='Session support must be enabled.';}elseif(isset($_GET["username"])){if(($_COOKIE[$kb]||$_GET[$kb])&&!$aa){$u='Session expired, please login again.';}else{$O=&get_session("pwds");if(isset($O)){$u=h($bc?$bc->getMessage():(is_string($g)?$g:'Invalid credentials.'));$O=null;}}}page_header('Login',$u,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Fd)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$aa=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$aa;}$u=($_POST?($_POST["token"]==$aa?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));$g->select_db($j->database());function
email_header($Gd){return"=?UTF-8?B?".base64_encode($Gd)."?=";}function
send_mail($Ia,$vb,$W,$Fa="",$hb=array("error"=>array())){$K=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$W=str_replace("\n",$K,wordwrap(str_replace("\r","","$W\n")));$ub=uniqid("boundary");$jb="";foreach($hb["error"]as$c=>$a){if(!$a){$jb.="--$ub$K"."Content-Type: ".str_replace("\n","",$hb["type"][$c]).$K."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$hb["name"][$c])."\"$K"."Content-Transfer-Encoding: base64$K$K".chunk_split(base64_encode(file_get_contents($hb["tmp_name"][$c])),76,$K).$K;}}$ic="";$nb="Content-Type: text/plain; charset=utf-8$K"."Content-Transfer-Encoding: 8bit";if($jb){$jb.="--$ub--$K";$ic="--$ub$K$nb$K$K";$nb="Content-Type: multipart/mixed; boundary=\"$ub\"";}$nb.=$K."MIME-Version: 1.0$K"."X-Mailer: Adminer Editor".($Fa?$K."From: ".str_replace("\n","",$Fa):"");return
mail($Ia,email_header($vb),$ic.$W.$jb,$nb);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$wb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$va[DRIVER]='Login';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$r=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$r-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($r)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$r=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$la=(isset($_GET["select"])?$_POST["edit"]:$p);$q=fields($r);foreach($q
as$f=>$e){if(!isset($e["privileges"][$la?"update":"insert"])||$j->fieldName($e)==""){unset($q[$f]);}}if($_POST&&!$u&&!isset($_GET["select"])){$G=$_POST["referer"];if($_POST["insert"]){$G=($la?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$G)){$G=ME."select=".urlencode($r);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($r)," WHERE $p"),$G,'Item has been deleted.');}else{$t=array();foreach($q
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$t[idf_escape($f)]=($la?"\n".idf_escape($f)." = $a":$a);}}if($la){if(!$t){redirect($G);}query_redirect("UPDATE".limit1(table($r)." SET".implode(",",$t),"\nWHERE $p"),$G,'Item has been updated.');}else{$k=insert_into($r,$t);$zc=($k?last_id():0);queries_redirect($G,sprintf('Item%s has been inserted.',($zc?" $zc":"")),$k);}}}$Xa=$j->tableName(table_status($r));page_header(($la?'Edit':'Insert'),$u,array("select"=>array($r,$Xa)),$Xa);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$y=array();foreach($q
as$f=>$e){if(isset($e["privileges"]["select"])){$y[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($y){$v=get_rows("SELECT".limit(implode(", ",$y)." FROM ".table($r)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($v)!=1?null:reset($v));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$mc=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?+$d[$f]:$d[$f]):(!$la&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($mc)?$mc:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$j->editVal($i,$e);}$x=($_POST["save"]?(string)$_POST["function"][$f]:($p&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$x="now";}input($e,$i,$x);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$aa,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($q){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($la?'Save and continue edit':'Save and insert next')."\">\n";}}echo($la?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n")),'</form>
';}elseif(isset($_GET["select"])){$r=$_GET["select"];$A=table_status($r);$F=indexes($r);$q=fields($r);$Qa=column_foreign_keys($r);if($A["Oid"]=="t"){$F[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$xc=array();$z=array();$Ga=null;foreach($q
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$z[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Ga=$j->selectLengthProcess();}}$xc+=$e["privileges"];}list($y,$R)=$j->selectColumnsProcess($z,$F);$p=$j->selectSearchProcess($q,$F);$S=$j->selectOrderProcess($q,$F);$E=$j->selectLimitProcess();$Fa=($y?implode(", ",$y):($A["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($r);$Gb=($R&&count($R)<count($y)?"\nGROUP BY ".implode(", ",$R):"").($S?"\nORDER BY ".implode(", ",$S):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ga=>$d){echo$g->result("SELECT".limit(idf_escape(key($d))." FROM ".table($r)," WHERE ".where_check($ga).($p?" AND ".implode(" AND ",$p):"").($S?" ORDER BY ".implode(", ",$S):""),1));}exit;}if($_POST&&!$u){$Dc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$gb=$ob=null;foreach($F
as$T){if($T["type"]=="PRIMARY"){$gb=array_flip($T["columns"]);$ob=($y?$gb:array());break;}}foreach($y
as$c=>$a){$a=$_GET["columns"][$c];if(!$a["fun"]){unset($ob[$a["col"]]);}}if($_POST["export"]){dump_headers($r);$j->dumpTable($r,"");if(!is_array($_POST["check"])||$ob===array()){$Ja=$p;if(is_array($_POST["check"])){$Ja[]="($Dc)";}$l="SELECT $Fa".($Ja?"\nWHERE ".implode(" AND ",$Ja):"").$Gb;}else{$Cc=array();foreach($_POST["check"]as$a){$Cc[]="(SELECT".limit($Fa,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$Gb,1).")";}$l=implode(" UNION ALL ",$Cc);}$j->dumpData($r,"table",$l);exit;}if(!$j->selectEmailProcess($p,$Qa)){if($_POST["save"]||$_POST["delete"]){$k=true;$pa=0;$l=table($r);$t=array();if(!$_POST["delete"]){foreach($z
as$f=>$a){$a=process_input($q[$f]);if($a!==null){if($_POST["clone"]){$t[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$t[]=idf_escape($f)." = $a";}}}$l.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($r):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$qb="UPDATE";if($_POST["delete"]){$qb="DELETE";$l="FROM $l";}if($_POST["clone"]){$qb="INSERT";$l="INTO $l";}if($_POST["all"]||($ob===array()&&$_POST["check"])||count($R)<count($y)){$k=queries($qb." $l".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $Dc"));$pa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$k=queries($qb.limit1($l,"\nWHERE ".where_check($a)));if(!$k){break;}$pa+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d item has been affected.','%d items have been affected.'),$pa),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$u='Double click on a value to modify it.';}else{$k=true;$pa=0;foreach($_POST["val"]as$ga=>$d){$t=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".(ereg('char|text',$q[$c]["type"])||$a!=""?$j->processInput($q[$c],$a):"NULL");}$l=table($r)." SET ".implode(", ",$t);$Ja=" WHERE ".where_check($ga).($p?" AND ".implode(" AND ",$p):"");$k=queries("UPDATE".(count($R)<count($y)?" $l$Ja":limit1($l,$Ja)));if(!$k){break;}$pa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$pa),$k);}}elseif(is_string($I=get_file("csv_file",true))){$I=preg_replace("~^\xEF\xBB\xBF~",'',$I);$k=true;$Da=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$I,$U);$pa=count($U[0]);begin();$ua=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($U[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ua]*)$ua~",$a.$ua,$Fb);if(!$c&&!array_diff($Fb[1],$Da)){$Da=$Fb[1];$pa--;}else{$t=array();foreach($Fb[1]as$o=>$ra){$t[idf_escape($Da[$o])]=($ra==""&&$q[$Da[$o]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$ra))));}$k=insert_update($r,$t,$gb);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$pa),$k);queries("ROLLBACK");}else{$u=upload_error($I);}}}$Xa=$j->tableName($A);page_header('Select'.": $Xa",$u);session_write_close();$t=null;if(isset($xc["insert"])){$t="";foreach((array)$_GET["where"]as$a){if(count($Qa[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$t.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($A,$t);if(!$z){echo"<p class='error'>".'Unable to select the table'.($q?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($r).'">',"</div>\n";$j->selectColumnsPrint($y,$z);$j->selectSearchPrint($p,$z,$F);$j->selectOrderPrint($S,$z,$F);$j->selectLimitPrint($E);$j->selectLengthPrint($Ga);$j->selectActionPrint($Ga);echo"</form>\n";$_=$_GET["page"];if($_=="last"){$da=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));$_=floor(max(0,$da-1)/$E);}$l="SELECT".limit((+$E&&$R&&count($R)<count($y)&&$qa=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Fa,($p?"\nWHERE ".implode(" AND ",$p):"").$Gb,($E!=""?+$E:null),($_?$E*$_:0),"\n");echo$j->selectQuery($l);$k=$g->query($l);if(!$k){echo"<p class='error'>".error()."\n";}else{if($qa=="mssql"){$k->seek($E*$_);}$pb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$v=array();while($d=$k->fetch_assoc()){$v[]=$d;}if($_GET["page"]!="last"){$da=(+$E&&$R&&count($R)<count($y)?($qa=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($l) x")):count($v));}if(!$v){echo"<p class='message'>".'No rows.'."\n";}else{$_b=$j->backwardKeys($r,$Xa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$R&&$y?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$zb=array();$Z=array();reset($y);$oc=1;foreach($v[0]as$c=>$a){if($A["Oid"]!="t"||$c!="oid"){$a=$_GET["columns"][key($y)];$e=$q[$y?$a["col"]:$c];$f=($e?$j->fieldName($e,$oc):"*");if($f!=""){$oc++;$zb[$c]=$f;$H=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($S[0]==$H||$S[0]==$c||(!$S&&$R[0]==$H)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$f)."</a>";}$Z[$c]=$a["fun"];next($y);}}$yb=array();if($_GET["modify"]){foreach($v
as$d){foreach($d
as$c=>$a){$yb[$c]=max($yb[$c],min(40,strlen(utf8_decode($a))));}}}echo($_b?"<th>".'Relations':"")."</thead>\n";foreach($j->rowDescriptions($v,$Qa)as$w=>$d){$Ab=unique_array($v[$w],$F);$ga="";foreach($Ab
as$c=>$a){$ga.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$R&&$y?"":"<td>".checkbox("check[]",substr($ga,1),in_array(substr($ga,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($R)<count($y)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($r).$ga)."'>".'edit'."</a>"));foreach($d
as$c=>$a){if(isset($zb[$c])){$e=$q[$c];if($a!=""&&(!isset($pb[$c])||$pb[$c]!="")){$pb[$c]=(is_mail($a)?$zb[$c]:"");}$s="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$s=h(ME.'download='.urlencode($r).'&field='.urlencode($c).$ga);}if($a===""){$a="&nbsp;";}elseif($Ga!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Ga));}else{$a=h($a);}if(!$s){foreach((array)$Qa[$c]as$ma){if(count($Qa[$c])==1||end($ma["source"])==$c){$s="";foreach($ma["source"]as$o=>$Sb){$s.=where_link($o,$ma["target"][$o],$v[$w][$Sb]);}$s=h(($ma["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($ma["db"]),ME):ME).'select='.urlencode($ma["table"]).$s);if(count($ma["source"])==1){break;}}}}if($c=="COUNT(*)"){$s=h(ME."select=".urlencode($r));$o=0;foreach((array)$_GET["where"]as$n){if(!array_key_exists($n["col"],$Ab)){$s.=h(where_link($o++,$n["col"],$n["val"],$n["op"]));}}foreach($Ab
as$X=>$n){$s.=h(where_link($o++,$X,$n));}}}if(!$s){if(is_mail($a)){$s="mailto:$a";}if($Ib=is_url($d[$c])){$s=($Ib=="http"&&$Ta?$d[$c]:"$Ib://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$L=h("val[$ga][".bracket_escape($c)."]");$i=$_POST["val"][$ga][bracket_escape($c)];$rc=h(isset($i)?$i:$d[$c]);$Ed=strpos($a,"<i>...</i>");$uc=is_utf8($a)&&$v[$w][$c]==$d[$c]&&!$Z[$c];$tc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$uc)||isset($i)?"<td>".($tc?"<textarea name='$L' cols='30' rows='".(substr_count($d[$c],"\n")+1)."' onkeypress='return textareaKeypress(this, event);'>$rc</textarea>":"<input name='$L' value='$rc' size='$yb[$c]'>"):"<td id='$L' ondblclick=\"".($uc?"selectDblClick(this, event".($Ed?", 2":($tc?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$j->selectVal($a,$s,$e));}}if($_b){echo"<td>";}$j->backwardKeysPrint($_b,$v[$w]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Bb);if($v||$_){$Db=true;if($_GET["page"]!="last"&&+$E&&count($R)>=count($y)&&($da>=$E||$_)){$da=$A["Rows"];if(!isset($da)||$p||2*$_*$E>$da||($A["Engine"]=="InnoDB"&&$da<1e4)){ob_flush();flush();$da=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));}else{$Db=false;}}echo"<p class='pages'>";if(+$E&&$da>$E){$Cb=floor(($da-1)/$E);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($_+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$_).($_>5?" ...":"");for($o=max(1,$_-4);$o<min($Cb,$_+5);$o++){echo
pagination($o,$_);}echo($_+5<$Cb?" ...":"").($Db?pagination($Cb,$_):' <a href="'.h(remove_from_uri()."&page=last").'">'.'last'."</a>");}echo" (".($Db?"":"~ ").lang(array('%d row','%d rows'),$da).") ".checkbox("all",1,0,'whole result')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Edit</legend><div>
<input type="submit" id="save" value="Save" title="Double click on a value to modify it.">
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$da,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$Aa=$j->dumpOutput();echo($Aa?html_select("output",$Aa,$Bb["output"])." ":""),html_select("format",$j->dumpFormat(),$Bb["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Import',!$v);echo"<input type='hidden' name='token' value='$aa'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Bb["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$j->selectEmailPrint(array_filter($pb,'strlen'),$z);echo"</form>\n";}}}else{page_header('Server',"",false);if($j->homepage()){echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Search'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Table'.'<td>'.'Rows'."</thead>\n";foreach(table_status()as$h=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$h,in_array($h,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($h).'">'.h($f).'</a>';$a=number_format($d["Rows"],0,'.',',');echo"<td align='right'><a href='".h(ME."edit=").urlencode($h)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();