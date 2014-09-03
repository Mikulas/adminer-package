<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$od=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($od){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$Qc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($Qc){$$a=$Qc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
document.body.className=document.body.className.replace(/(^|\s)nojs(\s|$)/,'$1js$2');function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
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
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
function bodyKeydown(event){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea/i.test(target.tagName)){target.blur();if((!target.form.onsubmit||target.form.onsubmit()!==false)&&!ajaxForm(target.form)){target.form.submit();}
return false;}}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
function replaceFavicon(href){var favicon=document.getElementById('favicon');favicon.href=href;favicon.parentNode.appendChild(favicon);}
var ajaxState=0;function ajaxSend(url,data,popState){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.2.1');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.2.1" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(location.pathname+'?file=favicon.ico&amp;version=3.2.1');if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}
scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){if(href==as[i].href){as[i].className='active';}else if(as[i].className=='active'){as[i].className='';}}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if(event.state?confirm(areYouSure):ajaxState){ajaxSend(location.href,event.state,1);}}
function ajaxForm(form,data){if(/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'));}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'));}
function selectDblClick(td,event,text){td.ondblclick=function(){};var pos=event.rangeOffset;var value=(td.firstChild.alt?td.firstChild.alt:(td.textContent?td.textContent:td.innerText));var input=document.createElement(text?'textarea':'input');input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/^:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''));}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){onpopstate(history);}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$f;return$f;}function
idf_unescape($F){$yc=substr($F,-1);return
str_replace($yc.$yc,$yc,substr($F,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Ma){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Ma)){foreach($a
as$ua=>$s){unset($Ma[$d][$ua]);if(is_array($s)){$Ma[$d][stripslashes($ua)]=$s;$Ma[]=&$Ma[$d][stripslashes($ua)];}else{$Ma[$d][stripslashes($ua)]=($od?$s:stripslashes($s));}}}}}function
bracket_escape($F,$Ad=false){static$Yc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($F,($Ad?array_flip($Yc):$Yc));}function
h($x){return
htmlspecialchars($x,ENT_QUOTES);}function
nbsp($x){return(trim($x)!=""?h($x):"&nbsp;");}function
nl_br($x){return
str_replace("\n","<br>",$x);}function
checkbox($e,$n,$ob,$Tc="",$Wc=""){static$ba=0;$ba++;$b="<input type='checkbox'".($e?" name='$e' value='".h($n)."'":" class='jsonly'").($ob?" checked":"").($Wc?" onclick=\"$Wc\"":"")." id='checkbox-$ba'>";return($Tc!=""?"<label for='checkbox-$ba'>$b".h($Tc)."</label>":$b);}function
optionlist($Ga,$Td=null,$Pc=false){$b="";foreach($Ga
as$ua=>$s){$Kc=array($ua=>$s);if(is_array($s)){$b.='<optgroup label="'.h($ua).'">';$Kc=$s;}foreach($Kc
as$d=>$a){$b.='<option'.($Pc||is_string($d)?' value="'.h($d).'"':'').(($Pc||is_string($d)?(string)$d:$a)===$Td?' selected':'').'>'.h($a);}if(is_array($s)){$b.='</optgroup>';}}return$b;}function
html_select($e,$Ga,$n="",$Sa=true){if($Sa){return"<select name='".h($e)."'".(is_string($Sa)?" onchange=\"$Sa\"":"").">".optionlist($Ga,$n)."</select>";}$b="";foreach($Ga
as$d=>$a){$b.="<label><input type='radio' name='".h($e)."' value='".h($d)."'".($d==$n?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($Sc="",$Od=false){return" onclick=\"".($Od?"eventStop(event); ":"")."return confirm('".lang(0).($Sc?" (' + $Sc + ')":"")."');\"";}function
js_escape($x){return
addcslashes($x,"\r\n'\\/");}function
ini_bool($Yd){$a=ini_get($Yd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($x){global$f;return$f->quote($x);}function
get_vals($j,$u=0){global$f;$b=array();$i=$f->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$u];}}return$b;}function
get_key_vals($j,$N=null){global$f;if(!is_object($N)){$N=$f;}$b=array();$i=$N->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}}return$b;}function
get_rows($j,$N=null,$p="<p class='error'>"){global$f;if(!is_object($N)){$N=$f;}$b=array();$i=$N->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$f->error&&$p&&defined("PAGE_HEADER")){echo$p.error()."\n";}return$b;}function
unique_array($c,$V){foreach($V
as$Z){if(ereg("PRIMARY|UNIQUE",$Z["type"])){$b=array();foreach($Z["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($m){global$ta;$b=array();foreach((array)$m["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)||$ta=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_")):" = ".exact_value($a));}foreach((array)$m["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$Zc);remove_slashes(array(&$Zc));return
where($Zc);}function
where_link($q,$u,$n,$Hd="="){return"&where%5B$q%5D%5Bcol%5D=".urlencode($u)."&where%5B$q%5D%5Bop%5D=".urlencode((isset($n)?$Hd:"IS NULL"))."&where%5B$q%5D%5Bval%5D=".urlencode($n);}function
cookie($e,$n){global$yb;$xb=array($e,(ereg("\n",$n)?"":$n),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$yb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$xb[]=true;}return
call_user_func_array('setcookie',$xb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Tb,$B,$C){global$sa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($sa))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Tb!="server"||$B!=""?urlencode($Tb)."=".urlencode($B)."&":"")."username=".urlencode($C).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($T,$va=null){if(isset($va)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($T)?$T:$_SERVER["REQUEST_URI"]))][]=$va;}if(isset($T)){if($T==""){$T=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $T");exit;}}function
query_redirect($j,$T,$va,$Sb=true,$Dd=true,$ed=false){global$f,$p,$l;if($Dd){$ed=!$f->query($j);}$ic="";if($j){$ic=$l->messageQuery("$j;");}if($ed){$p=error().$ic;return
false;}if($Sb){redirect($T,$va.$ic);}return
true;}function
queries($j=null){global$f;static$Ka=array();if(!isset($j)){return
implode(";\n",$Ka);}$Ka[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$f->query($j);}function
apply_queries($j,$z,$Md='table'){foreach($z
as$g){if(!queries("$j ".$Md($g))){return
false;}}return
true;}function
queries_redirect($T,$va,$Sb){return
query_redirect(queries(),$T,$va,$Sb,false,!$Sb);}function
remove_from_uri($Ha=""){return
substr(preg_replace("~(?<=[?&])($Ha".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Q,$Sd){return" ".($Q==$Sd?$Q+1:'<a href="'.h(remove_from_uri("page").($Q?"&page=$Q":"")).'">'.($Q+1)."</a>");}function
get_file($d,$Fc=false){$oa=$_FILES[$d];if(!$oa||$oa["error"]){return$oa["error"];}$b=file_get_contents($Fc&&ereg('\\.gz$',$oa["name"])?"compress.zlib://$oa[tmp_name]":($Fc&&ereg('\\.bz2$',$oa["name"])?"compress.bzip2://$oa[tmp_name]":$oa["tmp_name"]));if($Fc){if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$b,$ie)){$b=iconv("utf-16","utf-8",$b);}else{$b=ereg_replace("^\xEF\xBB\xBF","",$b);}}return$b;}function
upload_error($p){$rd=($p==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($p?lang(1).($rd?" ".lang(2,$rd):""):lang(3));}function
odd($b=' class="odd"'){static$q=0;if(!$b){$q=-1;}return($q++%
2?$b:'');}function
json_row($d,$a=null){static$ya=true;if($ya){echo"{";}if($d!=""){echo($ya?"":",")."\n\t\"".addcslashes($d,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$ya=false;}else{echo"\n}\n";$ya=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($S,$ga){return
str_repeat("$S{0,65535}",$ga/65535)."$S{0,".($ga
%
65535)."}";}function
shorten_utf8($x,$ga=80,$ae=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$ga).")($)?)u",$x,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ga).")($)?)",$x,$k);}return
h($k[1]).$ae.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Ma,$be=array()){while(list($d,$a)=each($Ma)){if(is_array($a)){foreach($a
as$ua=>$s){$Ma[$d."[$ua]"]=$s;}}elseif(!in_array($d,$be)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($g){global$l;$b=array();foreach($l->foreignKeys($g)as$J){foreach($J["source"]as$a){$b[$a][]=$J;}}return$b;}function
enum_input($A,$ha,$h,$n,$_c=null){global$l;preg_match_all("~'((?:[^']|'')*)'~",$h["length"],$ca);$b=(isset($_c)?"<label><input type='$A'$ha value='$_c'".((is_array($n)?in_array($_c,$n):$n===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($ca[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$ob=(is_int($n)?$n==$q+1:(is_array($n)?in_array($q+1,$n):$n===$a));$b.=" <label><input type='$A'$ha value='".($q+1)."'".($ob?' checked':'').'>'.h($l->editVal($a,$h)).'</label>';}return$b;}function
input($h,$n,$M){global$Y,$l,$ta;$e=h(bracket_escape($h["field"]));echo"<td class='function'>";$fd=($ta=="mssql"&&$h["auto_increment"]);if($fd&&!$_POST["save"]){$M=null;}$fa=(isset($_GET["select"])||$fd?array("orig"=>lang(5)):array())+$l->editFunctions($h);$ha=" name='fields[$e]'";if($h["type"]=="enum"){echo
nbsp($fa[""])."<td>".$l->editInput($_GET["edit"],$h,$ha,$n);}else{$ya=0;foreach($fa
as$d=>$a){if($d===""||!$a){break;}$ya++;}$Sa=($ya?" onchange=\"var f = this.form['function[".js_escape($e)."]']; if ($ya > f.selectedIndex) f.selectedIndex = $ya;\"":"");$ha.=$Sa;echo(count($fa)>1?html_select("function[$e]",$fa,!isset($M)||in_array($M,$fa)||isset($fa[$M])?$M:"","functionChange(this);"):nbsp(reset($fa))).'<td>';$gd=$l->editInput($_GET["edit"],$h,$ha,$n);if($gd!=""){echo$gd;}elseif($h["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$h["length"],$ca);foreach($ca[1]as$q=>$a){$a=stripcslashes(str_replace("''","'",$a));$ob=(is_int($n)?($n>>$q)&1:in_array($a,explode(",",$n),true));echo" <label><input type='checkbox' name='fields[$e][$q]' value='".(1<<$q)."'".($ob?' checked':'')."$Sa>".h($l->editVal($a,$h)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$h["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$e'$Sa>";}elseif(ereg('text|lob',$h["type"])){echo"<textarea ".($ta!="sqlite"||ereg("\n",$n)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ha>".h($n).'</textarea>';}else{$Dc=(!ereg('int',$h["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$h["length"],$k)?((ereg("binary",$h["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$h["unsigned"]?1:0)):($Y[$h["type"]]?$Y[$h["type"]]+($h["unsigned"]?0:1):0));echo"<input value='".h($n)."'".($Dc?" maxlength='$Dc'":"").(ereg('char|binary',$h["type"])&&$Dc>20?" size='40'":"")."$ha>";}}}function
process_input($h){global$l;$F=bracket_escape($h["field"]);$M=$_POST["function"][$F];$n=$_POST["fields"][$F];if($h["type"]=="enum"){if($n==-1){return
false;}if($n==""){return"NULL";}return+$n;}if($h["auto_increment"]&&$n==""){return
null;}if($M=="orig"){return
false;}if($M=="NULL"){return"NULL";}if($h["type"]=="set"){return
array_sum((array)$n);}if(ereg('blob|bytea|raw|file',$h["type"])&&ini_bool("file_uploads")){$oa=get_file("fields-$F");if(!is_string($oa)){return
false;}return
q($oa);}return$l->processInput($h,$n,$M);}function
search_tables(){global$l,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Cc=false;foreach(table_status()as$g=>$_){$e=$l->tableName($_);if(isset($_["Engine"])&&$e!=""&&(!$_POST["tables"]||in_array($g,$_POST["tables"]))){$i=$f->query("SELECT".limit("1 FROM ".table($g)," WHERE ".implode(" AND ",$l->selectSearchProcess(fields($g),array())),1));if($i->fetch_row()){if(!$Cc){echo"<ul>\n";$Cc=true;}echo"<li><a href='".h(ME."select=".urlencode($g)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($e)."</a>\n";}}}echo($Cc?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($ac,$kd=false){global$l;$b=$l->dumpHeaders($ac,$kd);$Ta=$_POST["output"];if($Ta!="text"){header("Content-Disposition: attachment; filename=".($ac!=""?friendly_url($ac):"dump").".$b".($Ta!="file"&&!ereg('[^0-9a-z]',$Ta)?".$Ta":""));}session_write_close();return$b;}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$c)."\r\n";}function
apply_sql_function($M,$u){return($M?($M=="unixepoch"?"DATETIME($u, '$M')":($M=="count distinct"?"COUNT(DISTINCT ":strtoupper("$M("))."$u)"):$u);}function
password_file(){$dc=ini_get("upload_tmp_dir");if(!$dc){if(function_exists('sys_get_temp_dir')){$dc=sys_get_temp_dir();}else{$W=@tempnam("","");if(!$W){return
false;}$dc=dirname($W);unlink($W);}}$W="$dc/adminer.key";$b=@file_get_contents($W);if($b){return$b;}$hc=@fopen($W,"w");if($hc){$b=md5(uniqid(mt_rand(),true));fwrite($hc,$b);fclose($hc);}return$b;}function
is_mail($lb){$ld='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$S="$ld+(\\.$ld+)*@($Cb?\\.)+$Cb";return
preg_match("(^$S(,\\s*$S)*\$)i",$lb);}function
is_url($x){$Cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Cb?\\.)+$Cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$x,$k)?strtolower($k[1]):"");}function
print_fieldset($ba,$xd,$yd=false){echo"<fieldset><legend><a href='#fieldset-$ba' onclick=\"return !toggle('fieldset-$ba');\">$xd</a></legend><div id='fieldset-$ba'".($yd?"":" class='hidden'").">\n";}function
bold($Cd){return($Cd?" class='active'":"");}global$l,$f,$sa,$Ib,$kc,$p,$fa,$Hb,$yb,$nd,$ta,$da,$Za,$Vb,$Da,$Aa,$O,$Y,$Gb,$Xb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$yb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$xb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$yb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$xb[]=true;}call_user_func_array('session_set_cookie_params',$xb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Za=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','tr'=>'Türkçe','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
get_lang(){global$da;return$da;}function
lang($F,$nb=null){global$da,$O;$mb=$O[$F];if(is_array($mb)&&$mb){$Fd=($nb==1||(!$nb&&$da=='fr')?0:($da=='sl'&&(!$nb||$nb>2)?1:0)+((!$nb||$nb>=5)&&ereg('cs|sk|ru|sl|pl',$da)?2:1));$mb=$mb[$Fd];}$md=func_get_args();array_shift($md);return
vsprintf((isset($mb)?$mb:$F),$md);}function
switch_lang(){global$da,$Za;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$Za,$da,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$da="en";if(isset($Za[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$da=$_COOKIE["adminer_lang"];}elseif(isset($Za[$_SESSION["lang"]])){$da=$_SESSION["lang"];}else{$Ob=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ca,PREG_SET_ORDER);foreach($ca
as$k){$Ob[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($Ob);foreach($Ob
as$d=>$Ub){if(isset($Za[$d])){$da=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($Ob[$d])&&isset($Za[$d])){$da=$d;break;}}}switch($da){case"en":$O=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','ltr','Resend POST data?','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$O=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','ltr','Znovu odeslat POST data?','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$O=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','ltr','Resend POST data?','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Neplatné schéma.');break;case"nl":$O=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','ltr','Resend POST data?','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','.','Ongeldig schema.');break;case"es":$O=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','ltr','Resend POST data?','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros',' ','Esquema inválido.');break;case"de":$O=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','ltr','Resend POST data?','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Schema nicht gültig.');break;case"fr":$O=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Editeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','ltr','Resend POST data?','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes',',','Schéma invalide.');break;case"it":$O=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','ltr','Resend POST data?','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','.','Schema non valido.');break;case"et":$O=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','ltr','Resend POST data?','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Sobimatu skeema.');break;case"hu":$O=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválaszt','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','HH:MM:SS','[yyyy].m.d','Kilépés','ltr','Resend POST data?','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','Nincs megjeleníthető eredmény.','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utoljára',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Érvénytelen séma.');break;case"pl":$O=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','ltr','Resend POST data?','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','Brak rekordów.','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów',' ','Zmień typ');break;case"ca":$O=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','ltr','Resend POST data?','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d fila.','S\'han importat %d files.'),'Impossible seleccionar la taula','No hi ha cap fila.','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d fila','%d files'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files',',','Esquema invàlid.');break;case"pt":$O=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Editor','Usuario','Senha','Entrar','Salvar Senha','Novo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','ltr','Resend POST data?','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','Não existem registros.','modificar','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros',' ','Esquema inválido.');break;case"sl":$O=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','ltr','Resend POST data?','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','Ni vrstic.','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic',' ','Spremeni tip');break;case"tr":$O=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','ltr','Resend POST data?','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','Sıra yok.','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)',' ','Tür değiştir');break;case"ru":$O=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','HH:MM:SS','дд.мм.[гггг]','Выйти','ltr','Resend POST data?','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк',' ','Неправильная схема.');break;case"zh":$O=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','ltr','Resend POST data?','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数',',','非法模式。');break;case"zh-tw":$O=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','ltr','Resend POST data?','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數',',','無效的資料表結構。');break;case"ja":$O=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','HH:MM:SS','[yyyy].mm.dd','ログアウト','ltr','Resend POST data?','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数',',','無効なスキーマ');break;case"ta":$O=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','ltr','Resend POST data?','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','வ‌ரிசை இல்லை.','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அமைப்புமுறை ச‌ரியான‌த‌ல்ல‌ (Invalid Schema).');break;case"ar":$O=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الغمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','rtl','Resend POST data?','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','لا توجد نتائج.','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر',',','مخطط خاطئ.');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($zd,$C,$G,$wd='auth_error'){set_exception_handler($wd);parent::__construct($zd,$C,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ea=false){$i=parent::query($j);if(!$i){$Kd=$this->errorInfo();$this->error=$Kd[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$h=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch();return$c[$h];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$sa=array();$sa["sqlite"]="SQLite 3";$sa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Jb=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($W){$this->_link=new
SQLite3($W);$vc=$this->_link->version();$this->server_info=$vc["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($x){return"'".$this->_link->escapeString($x)."'";}function
store_result(){return$this->_result;}function
result($j,$h=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetchArray();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$u=$this->_offset++;$A=$this->_result->columnType($u);return(object)array("name"=>$this->_result->columnName($u),"type"=>$A,"charsetnr"=>($A==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($W){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($W);}function
query($j,$Ea=false){$Gd=($Ea?"unbufferedQuery":"query");$i=@$this->_link->$Gd($j,SQLITE_BOTH,$p);if(!$i){$this->error=$p;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($x){return"'".sqlite_escape_string($x)."'";}function
store_result(){return$this->_result;}function
result($j,$h=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetch();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$b=array();foreach($c
as$d=>$a){$b[($d[0]=='"'?idf_unescape($d):$d)]=$a;}return$b;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$e=$this->_result->fieldName($this->_offset++);$S='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($S\\.)?$S\$~",$e,$k)){$g=($k[3]!=""?$k[3]:idf_unescape($k[2]));$e=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$e,"orgname"=>$e,"orgtable"=>$g,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($W){$this->dsn(DRIVER.":$W","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($W){if(is_readable($W)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$W)?$W:dirname($_SERVER["SCRIPT_FILENAME"])."/$W")." AS a")){$this->Min_SQLite($W);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}}function
idf_escape($F){return'"'.str_replace('"','""',$F).'"';}function
table($F){return
idf_escape($F);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$m,$D,$U=0,$ka=" "){return" $j$m".(isset($D)?$ka."LIMIT $D".($U?" OFFSET $U":""):"");}function
limit1($j,$m){global$f;return($f->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$m,1):" $j$m");}function
db_collation($E,$Fb){global$f;return$f->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($P){return
array();}function
table_status($e=""){$b=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($e!=""?" AND name = ".q($e):""))as$c){$c["Auto_increment"]="";$b[$c["Name"]]=$c;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$c){$b[$c["name"]]["Auto_increment"]=$c["seq"];}return($e!=""?$b[$e]:$b);}function
is_view($_){return$_["Engine"]=="view";}function
fk_support($_){global$f;return!$f->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($g){$b=array();foreach(get_rows("PRAGMA table_info(".table($g).")")as$c){$A=strtolower($c["type"]);$kb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$A)?"integer":(eregi("char|clob|text",$A)?"text":(eregi("blob",$A)?"blob":(eregi("real|floa|doub",$A)?"real":"numeric")))),"full_type"=>$A,"default"=>(ereg("'(.*)'",$kb,$k)?str_replace("''","'",$k[1]):($kb=="NULL"?null:$kb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$A)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($g,$N=null){$b=array();$wa=array();foreach(fields($g)as$h){if($h["primary"]){$wa[]=$h["field"];}}if($wa){$b[""]=array("type"=>"PRIMARY","columns"=>$wa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($g).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$Id){$b[$c["name"]]["columns"][]=$Id["name"];}}return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($g).")")as$c){$J=&$b[$c["id"]];if(!$J){$J=$c;}$J["source"][]=$c["from"];$J["target"][]=$c["to"];}return$b;}function
view($e){global$f;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$f->result("SELECT sql FROM sqlite_master WHERE name = ".q($e))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($E){return
false;}function
error(){global$f;return
h($f->error);}function
exact_value($a){return
q($a);}function
check_sqlite_name($e){global$f;$pd="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($pd)\$~",$e)){$f->error=lang(9,str_replace("|",", ",$pd));return
false;}return
true;}function
create_database($E,$H){global$f;if(file_exists($E)){$f->error=lang(10);return
false;}if(!check_sqlite_name($E)){return
false;}$v=new
Min_SQLite($E);$v->query('PRAGMA encoding = "UTF-8"');$v->query('CREATE TABLE adminer (i)');$v->query('DROP TABLE adminer');return
true;}function
drop_databases($P){global$f;$f->Min_SQLite(":memory:");foreach($P
as$E){if(!@unlink($E)){$f->error=lang(10);return
false;}}return
true;}function
rename_database($e,$H){global$f;if(!check_sqlite_name($e)){return
false;}$f->Min_SQLite(":memory:");$f->error=lang(10);return@rename(DB,$e);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($g,$e,$t,$Ja,$ab,$eb,$H,$xa,$ub){$r=array();foreach($t
as$h){if($h[1]){$r[]=($g!=""&&$h[0]==""?"ADD ":"  ").implode($h[1]);}}$r=array_merge($r,$Ja);if($g!=""){foreach($r
as$a){if(!queries("ALTER TABLE ".table($g)." $a")){return
false;}}if($g!=$e&&!queries("ALTER TABLE ".table($g)." RENAME TO ".table($e))){return
false;}}elseif(!queries("CREATE TABLE ".table($e)." (\n".implode(",\n",$r)."\n)")){return
false;}if($xa){queries("UPDATE sqlite_sequence SET seq = $xa WHERE name = ".q($e));}return
true;}function
alter_indexes($g,$r){foreach($r
as$a){if(!queries(($a[2]?"DROP INDEX":"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g))." $a[1]")){return
false;}}return
true;}function
truncate_tables($z){return
apply_queries("DELETE FROM",$z);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($z){return
apply_queries("DROP TABLE",$z);}function
move_tables($z,$X,$qa){return
false;}function
trigger($e){global$f;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$f->result("SELECT sql FROM sqlite_master WHERE name = ".q($e)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$e,"Statement"=>$k[3]);}function
triggers($g){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($g))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($e,$A){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$wa){return
queries("REPLACE INTO ".table($g)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ROWID()");}function
explain($f,$j){return$f->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_d){return
true;}function
create_sql($g,$xa){global$f;return$f->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($g));}function
truncate_sql($g){return"DELETE FROM ".table($g);}function
use_sql($R){}function
trigger_sql($g,$sb){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($g)));}function
show_variables(){global$f;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$f->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$Bd){list($d,$a)=explode("=",$Bd,2);$b[$d]=$a;}return$b;}function
support($Pa){return
ereg('^(view|trigger|variables|status|dump)$',$Pa);}$ta="sqlite";$Y=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Da=array_keys($Y);$Gb=array();$rb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("hex","length","lower","round","unixepoch","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$sa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Jb=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Ld,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($B,$C,$G){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($B,"'\\"))."' user='".addcslashes($C,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$vc=pg_version($this->_link);$this->server_info=$vc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($x){return"'".pg_escape_string($this->_link,$x)."'";}function
select_db($R){if($R==DB){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($R,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Ea=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
pg_fetch_result($i->_result,0,$h);}}class
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
connect($B,$C,$G){$x="pgsql:host='".str_replace(":","' port='",addcslashes($B,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($x.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$C,$G);return
true;}function
select_db($R){return(DB==$R);}function
close(){}}}function
idf_escape($F){return'"'.str_replace('"','""',$F).'"';}function
table($F){return
idf_escape($F);}function
connect(){global$l;$f=new
Min_DB;$ja=$l->credentials();if($f->connect($ja[0],$ja[1],$ja[2])){return$f;}return$f->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$m,$D,$U=0,$ka=" "){return" $j$m".(isset($D)?$ka."LIMIT $D".($U?" OFFSET $U":""):"");}function
limit1($j,$m){return" $j$m";}function
db_collation($E,$Fb){global$f;return$f->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($P){return
array();}function
table_status($e=""){$b=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($e!=""?" AND relname = ".q($e):""))as$c){$b[$c["Name"]]=$c;}return($e!=""?$b[$e]:$b);}function
is_view($_){return$_["Engine"]=="view";}function
fk_support($_){return
true;}function
fields($g){$b=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($g)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$c){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$b[$c["field"]]=$c;}return$b;}function
indexes($g,$N=null){global$f;if(!is_object($N)){$N=$f;}$b=array();$hd=$N->result("SELECT oid FROM pg_class WHERE relname = ".q($g));$I=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $hd AND attnum > 0",$N);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $hd AND ci.oid = i.indexrelid",$N)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Xd){$b[$c["relname"]]["columns"][]=$I[$Xd];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($g))as$c){$J=&$b[$c["constraint_name"]];if(!$J){$J=$c;}$J["source"][]=$c["column_name"];$J["target"][]=$c["ref"];}return$b;}function
view($e){global$f;return
array("select"=>$f->result("SELECT pg_get_viewdef(".q($e).")"));}function
collations(){return
array();}function
information_schema($E){return($E=="information_schema");}function
error(){global$f;$b=h($f->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$b,$k)){$b=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($b);}function
exact_value($a){return
q($a);}function
create_database($E,$H){return
queries("CREATE DATABASE ".idf_escape($E).($H?" ENCODING ".idf_escape($H):""));}function
drop_databases($P){global$f;$f->close();return
apply_queries("DROP DATABASE",$P,'idf_escape');}function
rename_database($e,$H){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($e));}function
auto_increment(){return"";}function
alter_table($g,$e,$t,$Ja,$ab,$eb,$H,$xa,$ub){$r=array();$Ka=array();foreach($t
as$h){$u=idf_escape($h[0]);$a=$h[1];if(!$a){$r[]="DROP $u";}else{$zc=$a[5];unset($a[5]);if(isset($a[6])&&$h[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($h[0]==""){$r[]=($g!=""?"ADD ":"  ").implode($a);}else{if($u!=$a[0]){$Ka[]="ALTER TABLE ".table($g)." RENAME $u TO $a[0]";}$r[]="ALTER $u TYPE$a[1]";if(!$a[6]){$r[]="ALTER $u ".($a[3]?"SET$a[3]":"DROP DEFAULT");$r[]="ALTER $u ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($h[0]!=""||$zc!=""){$Ka[]="COMMENT ON COLUMN ".table($g).".$a[0] IS ".($zc!=""?substr($zc,9):"''");}}}$r=array_merge($r,$Ja);if($g==""){array_unshift($Ka,"CREATE TABLE ".table($e)." (\n".implode(",\n",$r)."\n)");}elseif($r){array_unshift($Ka,"ALTER TABLE ".table($g)."\n".implode(",\n",$r));}if($g!=""&&$g!=$e){$Ka[]="ALTER TABLE ".table($g)." RENAME TO ".table($e);}if($g!=""||$ab!=""){$Ka[]="COMMENT ON TABLE ".table($e)." IS ".q($ab);}if($xa!=""){}foreach($Ka
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($g,$r){$Ra=array();$Fa=array();foreach($r
as$a){if($a[0]!="INDEX"){$Ra[]=($a[2]?"\nDROP CONSTRAINT ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}elseif($a[2]){$Fa[]=$a[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g)." $a[1]")){return
false;}}return((!$Ra||queries("ALTER TABLE ".table($g).implode(",",$Ra)))&&(!$Fa||queries("DROP INDEX ".implode(", ",$Fa))));}function
truncate_tables($z){return
queries("TRUNCATE ".implode(", ",array_map('table',$z)));return
true;}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($z){return
queries("DROP TABLE ".implode(", ",array_map('table',$z)));}function
move_tables($z,$X,$qa){foreach($z
as$g){if(!queries("ALTER TABLE ".table($g)." SET SCHEMA ".idf_escape($qa))){return
false;}}foreach($X
as$g){if(!queries("ALTER VIEW ".table($g)." SET SCHEMA ".idf_escape($qa))){return
false;}}return
true;}function
trigger($e){$y=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($e));return
reset($y);}function
triggers($g){$b=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($g))as$c){$b[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$wa){global$f;$aa=array();$m=array();foreach($o
as$d=>$a){$aa[]="$d = $a";if(isset($wa[idf_unescape($d)])){$m[]="$d = $a";}}return($m&&queries("UPDATE ".table($g)." SET ".implode(", ",$aa)." WHERE ".implode(" AND ",$m))&&$f->affected_rows)||queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
explain($f,$j){return$f->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$f;return$f->result("SELECT current_schema()");}function
set_schema($wc){global$f,$Y,$Da;$b=$f->query("SET search_path TO ".idf_escape($wc));foreach(types()as$A){if(!isset($Y[$A])){$Y[$A]=0;$Da[lang(11)][]=$A;}}return$b;}function
use_sql($R){return"\connect ".idf_escape($R);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($Pa){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$Pa);}$ta="pgsql";$Y=array();$Da=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$Y+=$a;$Da[$d]=array_keys($a);}$Gb=array();$rb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("char_length","lower","round","to_hex","to_timestamp","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$sa["oracle"]="Oracle";if(isset($_GET["oracle"])){$Jb=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Ld,$p){if(ini_bool("html_errors")){$p=html_entity_decode(strip_tags($p));}$p=ereg_replace('^[^:]*: ','',$p);$this->error=$p;}function
connect($B,$C,$G){$this->_link=@oci_new_connect($C,$G,$B,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$p=oci_error();$this->error=$p["message"];return
false;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($R){return
true;}function
query($j,$Ea=false){$i=oci_parse($this->_link,$j);if(!$i){$p=oci_error($this->_link);$this->error=$p["message"];return
false;}set_error_handler(array($this,'_error'));$b=@oci_execute($i);restore_error_handler();if($b){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$b;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$h);}}class
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
connect($B,$C,$G){$this->dsn("oci:dbname=//$B;charset=AL32UTF8",$C,$G);return
true;}function
select_db($R){return
true;}}}function
idf_escape($F){return'"'.str_replace('"','""',$F).'"';}function
table($F){return
idf_escape($F);}function
connect(){global$l;$f=new
Min_DB;$ja=$l->credentials();if($f->connect($ja[0],$ja[1],$ja[2])){return$f;}return$f->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$m,$D,$U=0,$ka=" "){return" $j$m".(isset($D)?($m?" AND":$ka."WHERE").($U?" rownum > $U AND":"")." rownum <= ".($D+$U):"");}function
limit1($j,$m){return" $j$m";}function
db_collation($E,$Fb){global$f;return$f->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($P){return
array();}function
table_status($e=""){$b=array();$qb=q($e);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($e!=""?" AND table_name = $qb":"")."
UNION SELECT view_name, 'view' FROM user_views".($e!=""?" WHERE view_name = $qb":""))as$c){if($e!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($_){return$_["Engine"]=="view";}function
fk_support($_){return
true;}function
fields($g){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($g)." ORDER BY column_id")as$c){$A=$c["DATA_TYPE"];$ga="$c[DATA_PRECISION],$c[DATA_SCALE]";if($ga==","){$ga=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$A.($ga?"($ga)":""),"type"=>strtolower($A),"length"=>$ga,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($g,$N=null){return
array();}function
view($e){$y=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($e));return
reset($y);}function
collations(){return
array();}function
information_schema($E){return
false;}function
error(){global$f;return
h($f->error);}function
exact_value($a){return
q($a);}function
explain($f,$j){$f->query("EXPLAIN PLAN FOR $j");return$f->query("SELECT * FROM plan_table");}function
alter_table($g,$e,$t,$Ja,$ab,$eb,$H,$xa,$ub){$r=$Fa=array();foreach($t
as$h){$a=$h[1];if($a&&$h[0]!=""&&idf_escape($h[0])!=$a[0]){queries("ALTER TABLE ".table($g)." RENAME COLUMN ".idf_escape($h[0])." TO $a[0]");}if($a){$r[]=($g!=""?($h[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($g!=""?")":"");}else{$Fa[]=idf_escape($h[0]);}}if($g==""){return
queries("CREATE TABLE ".table($e)." (\n".implode(",\n",$r)."\n)");}return(!$r||queries("ALTER TABLE ".table($g)."\n".implode("\n",$r)))&&(!$Fa||queries("ALTER TABLE ".table($g)." DROP (".implode(", ",$Fa).")"))&&($g==$e||queries("ALTER TABLE ".table($g)." RENAME TO ".table($e)));}function
foreign_keys($g){return
array();}function
truncate_tables($z){return
apply_queries("TRUNCATE TABLE",$z);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($z){return
apply_queries("DROP TABLE",$z);}function
begin(){return
true;}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($_d){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$y=get_rows('SELECT * FROM v$instance');return
reset($y);}function
support($Pa){return
ereg("view|drop_col|variables|status",$Pa);}$ta="oracle";$Y=array();$Da=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$Y+=$a;$Da[$d]=array_keys($a);}$Gb=array();$rb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$fa=array("length","lower","round","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$sa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Jb=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$p){$this->error.="$p[message]\n";}$this->error=rtrim($this->error);}function
connect($B,$C,$G){$this->_link=@sqlsrv_connect($B,array("UID"=>$C,"PWD"=>$G));if($this->_link){$de=sqlsrv_server_info($this->_link);$this->server_info=$de['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($R){return$this->query("USE $R");}function
query($j,$Ea=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
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
result($j,$h=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->fetch_row();return$c[$h];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($c){foreach((array)$c
as$d=>$a){if(is_a($a,'DateTime')){$c[$d]=$a->format("Y-m-d H:i:s");}}return$c;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$h=$this->_fields[$this->_offset++];$b=new
stdClass;$b->name=$h["Name"];$b->orgname=$h["Name"];$b->type=($h["Type"]==1?254:0);return$b;}function
seek($U){for($q=0;$q<$U;$q++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($B,$C,$G){$this->_link=@mssql_connect($B,$C,$G);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($x){return"'".str_replace("'","''",$x)."'";}function
select_db($R){return
mssql_select_db($R);}function
query($j,$Ea=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$h=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$h);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$b=mssql_fetch_field($this->_result);$b->orgtable=$b->table;$b->orgname=$b->name;return$b;}function
seek($U){mssql_data_seek($this->_result,$U);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($F){return"[".str_replace("]","]]",$F)."]";}function
table($F){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($F);}function
connect(){global$l;$f=new
Min_DB;$ja=$l->credentials();if($f->connect($ja[0],$ja[1],$ja[2])){return$f;}return$f->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$m,$D,$U=0,$ka=" "){return(isset($D)?" TOP (".($D+$U).")":"")." $j$m";}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($E,$Fb){global$f;return$f->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($E));}function
engines(){return
array();}function
logged_user(){global$f;return$f->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($P){global$f;$b=array();foreach($P
as$E){$f->select_db($E);$b[$E]=$f->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$b;}function
table_status($e=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($e!=""?" AND name = ".q($e):""))as$c){if($e!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($_){return$_["Engine"]=="VIEW";}function
fk_support($_){return
true;}function
fields($g){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($g))as$c){$A=$c["type"];$ga=(ereg("char|binary",$A)?$c["max_length"]:($A=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$A.($ga?"($ga)":""),"type"=>$A,"length"=>$ga,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($g,$N=null){global$f;if(!is_object($N)){$N=$f;}$b=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($g),$N)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
view($e){global$f;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$f->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($e))));}function
collations(){$b=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$H){$b[ereg_replace("_.*","",$H)][]=$H;}return$b;}function
information_schema($E){return
false;}function
error(){global$f;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$f->error)));}function
exact_value($a){return
q($a);}function
create_database($E,$H){return
queries("CREATE DATABASE ".idf_escape($E).(eregi('^[a-z0-9_]+$',$H)?" COLLATE $H":""));}function
drop_databases($P){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$P)));}function
rename_database($e,$H){if(eregi('^[a-z0-9_]+$',$H)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $H");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($e));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($g,$e,$t,$Ja,$ab,$eb,$H,$xa,$ub){$r=array();foreach($t
as$h){$u=idf_escape($h[0]);$a=$h[1];if(!$a){$r["DROP"][]=" COLUMN $u";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($h[0]==""){$r["ADD"][]="\n  ".implode("",$a).($g==""?substr($Ja[$a[0]],16+strlen($a[0])):"");}else{unset($a[6]);if($u!=$a[0]){queries("EXEC sp_rename ".q(table($g).".$u").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$r["ALTER COLUMN ".implode("",$a)][]="";}}}if($g==""){return
queries("CREATE TABLE ".table($e)." (".implode(",",(array)$r["ADD"])."\n)");}if($g!=$e){queries("EXEC sp_rename ".q(table($g)).", ".q($e));}if($Ja){$r[""]=$Ja;}foreach($r
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($e)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($g,$r){$Z=array();$Fa=array();foreach($r
as$a){if($a[2]){if($a[0]=="PRIMARY"){$Fa[]=$a[1];}else{$Z[]="$a[1] ON ".table($g);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE".($a[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($g."_"))." ON ".table($g):"ALTER TABLE ".table($g)." ADD PRIMARY KEY")." $a[1]")){return
false;}}return(!$Z||queries("DROP INDEX ".implode(", ",$Z)))&&(!$Fa||queries("ALTER TABLE ".table($g)." DROP ".implode(", ",$Fa)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($g,$o,$wa){$aa=array();$m=array();foreach($o
as$d=>$a){$aa[]="$d = $a";if(isset($wa[idf_unescape($d)])){$m[]="$d = $a";}}return
queries("MERGE ".table($g)." USING (VALUES(".implode(", ",$o).")) AS source (c".implode(", c",range(1,count($o))).") ON ".implode(" AND ",$m)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$aa)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).");");}function
last_id(){global$f;return$f->result("SELECT SCOPE_IDENTITY()");}function
explain($f,$j){$f->query("SET SHOWPLAN_ALL ON");$b=$f->query($j);$f->query("SET SHOWPLAN_ALL OFF");return$b;}function
foreign_keys($g){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($g))as$c){$J=&$b[$c["FK_NAME"]];$J["table"]=$c["PKTABLE_NAME"];$J["source"][]=$c["FKCOLUMN_NAME"];$J["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($z){return
apply_queries("TRUNCATE TABLE",$z);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($z){return
queries("DROP TABLE ".implode(", ",array_map('table',$z)));}function
move_tables($z,$X,$qa){return
apply_queries("ALTER SCHEMA ".idf_escape($qa)." TRANSFER",array_merge($z,$X));}function
trigger($e){$y=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($e));$b=reset($y);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
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
get_schema(){global$f;if($_GET["ns"]!=""){return$_GET["ns"];}return$f->result("SELECT SCHEMA_NAME()");}function
set_schema($wc){return
true;}function
use_sql($R){return"USE ".idf_escape($R);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Pa){return
ereg('^(scheme|trigger|view|drop_col)$',$Pa);}$ta="mssql";$Y=array();$Da=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$Y+=$a;$Da[$d]=array_keys($a);}$Gb=array();$rb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("len","lower","round","upper");$Hb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$sa=array("server"=>"MySQL")+$sa;if(!defined("DRIVER")){$Jb=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($B,$C,$G){mysqli_report(MYSQLI_REPORT_OFF);list($Vd,$Qb)=explode(":",$B,2);$b=@$this->real_connect(($B!=""?$Vd:ini_get("mysqli.default_host")),("$B$C"!=""?$C:ini_get("mysqli.default_user")),("$B$C$G"!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($Qb)?$Qb:ini_get("mysqli.default_port")),(!is_numeric($Qb)?$Qb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$h=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$h];}function
quote($x){return"'".$this->escape_string($x)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($B,$C,$G){$this->_link=@mysql_connect(($B!=""?$B:ini_get("mysql.default_host")),("$B$C"!=""?$C:ini_get("mysql.default_user")),("$B$C$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($x){return"'".mysql_real_escape_string($x,$this->_link)."'";}function
select_db($R){return
mysql_select_db($R,$this->_link);}function
query($j,$Ea=false){$i=@($Ea?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$h=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
mysql_result($i->_result,0,$h);}}class
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
connect($B,$C,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$B)),$C,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($R){return$this->query("USE ".idf_escape($R));}function
query($j,$Ea=false){$this->setAttribute(1000,!$Ea);return
parent::query($j,$Ea);}}}function
idf_escape($F){return"`".str_replace("`","``",$F)."`";}function
table($F){return
idf_escape($F);}function
connect(){global$l;$f=new
Min_DB;$ja=$l->credentials();if($f->connect($ja[0],$ja[1],$ja[2])){$f->query("SET sql_quote_show_create = 1");return$f;}return$f->error;}function
get_databases($Pd=true){global$f;$b=&get_session("dbs");if(!isset($b)){if($Pd){restart_session();ob_flush();flush();}$b=get_vals($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($j,$m,$D,$U=0,$ka=" "){return" $j$m".(isset($D)?$ka."LIMIT $D".($U?" OFFSET $U":""):"");}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($E,$Fb){global$f;$b=null;$Ra=$f->result("SHOW CREATE DATABASE ".idf_escape($E),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$k)){$b=$Fb[$k[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals("SHOW".($f->server_info>=5?" FULL":"")." TABLES");}function
count_tables($P){$b=array();foreach($P
as$E){$b[$E]=count(get_vals("SHOW TABLES IN ".idf_escape($E)));}return$b;}function
table_status($e=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($e!=""?" LIKE ".q(addcslashes($e,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($e!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($_){return!isset($_["Rows"]);}function
fk_support($_){return($_["Engine"]=="InnoDB");}function
fields($g){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($g))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($g,$N=null){global$f;if(!is_object($N)){$N=$f;}$b=array();foreach(get_rows("SHOW INDEX FROM ".table($g),$N)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($g){global$f,$Vb;static$S='`(?:[^`]|``)+`';$b=array();$id=$f->result("SHOW CREATE TABLE ".table($g),1);if($id){preg_match_all("~CONSTRAINT ($S) FOREIGN KEY \\(((?:$S,? ?)+)\\) REFERENCES ($S)(?:\\.($S))? \\(((?:$S,? ?)+)\\)(?: ON DELETE (".implode("|",$Vb)."))?(?: ON UPDATE (".implode("|",$Vb)."))?~",$id,$ca,PREG_SET_ORDER);foreach($ca
as$k){preg_match_all("~$S~",$k[2],$Ec);preg_match_all("~$S~",$k[5],$qa);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Ec[0]),"target"=>array_map('idf_unescape',$qa[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
view($e){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($e),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$c){if($c["Default"]){$b[$c["Charset"]][-1]=$c["Collation"];}else{$b[$c["Charset"]][]=$c["Collation"];}}ksort($b);foreach($b
as$d=>$a){asort($b[$d]);}return$b;}function
information_schema($E){global$f;return($f->server_info>=5&&$E=="information_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($E,$H){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($E).($H?" COLLATE ".q($H):""));}function
drop_databases($P){set_session("dbs",null);return
apply_queries("DROP DATABASE",$P,'idf_escape');}function
rename_database($e,$H){if(create_database($e,$H)){$fb=array();foreach(tables_list()as$g=>$A){$fb[]=table($g)." TO ".idf_escape($e).".".table($g);}if(!$fb||queries("RENAME TABLE ".implode(", ",$fb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$xc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$Z){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$Z["columns"],true)){$xc="";break;}if($Z["type"]=="PRIMARY"){$xc=" UNIQUE";}}}return" AUTO_INCREMENT$xc";}function
alter_table($g,$e,$t,$Ja,$ab,$eb,$H,$xa,$ub){$r=array();foreach($t
as$h){$r[]=($h[1]?($g!=""?($h[0]!=""?"CHANGE ".idf_escape($h[0]):"ADD"):" ")." ".implode($h[1]).($g!=""?" $h[2]":""):"DROP ".idf_escape($h[0]));}$r=array_merge($r,$Ja);$jd="COMMENT=".q($ab).($eb?" ENGINE=".q($eb):"").($H?" COLLATE ".q($H):"").($xa!=""?" AUTO_INCREMENT=$xa":"").$ub;if($g==""){return
queries("CREATE TABLE ".table($e)." (\n".implode(",\n",$r)."\n) $jd");}if($g!=$e){$r[]="RENAME TO ".table($e);}$r[]=$jd;return
queries("ALTER TABLE ".table($g)."\n".implode(",\n",$r));}function
alter_indexes($g,$r){foreach($r
as$d=>$a){$r[$d]=($a[2]?"\nDROP INDEX ":"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"")).$a[1];}return
queries("ALTER TABLE ".table($g).implode(",",$r));}function
truncate_tables($z){return
apply_queries("TRUNCATE TABLE",$z);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($z){return
queries("DROP TABLE ".implode(", ",array_map('table',$z)));}function
move_tables($z,$X,$qa){$fb=array();foreach(array_merge($z,$X)as$g){$fb[]=table($g)." TO ".idf_escape($qa).".".table($g);}return
queries("RENAME TABLE ".implode(", ",$fb));}function
copy_tables($z,$X,$qa){foreach($z
as$g){$e=($qa==DB?table("copy_$g"):idf_escape($qa).".".table($g));if(!queries("DROP TABLE IF EXISTS $e")||!queries("CREATE TABLE $e LIKE ".table($g))||!queries("INSERT INTO $e SELECT * FROM ".table($g))){return
false;}}foreach($X
as$g){$e=($qa==DB?table("copy_$g"):idf_escape($qa).".".table($g));$Qd=view($g);if(!queries("DROP VIEW IF EXISTS $e")||!queries("CREATE VIEW $e AS $Qd[select]")){return
false;}}return
true;}function
trigger($e){$y=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($e));return
reset($y);}function
triggers($g){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($g,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($e,$A){global$f,$kc,$nd,$Y;$Ud=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$qd="((".implode("|",array_merge(array_keys($Y),$Ud)).")(?:\\s*\\(((?:[^'\")]*|$kc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$S="\\s*(".($A=="FUNCTION"?"":implode("|",$nd)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$qd";$Ra=$f->result("SHOW CREATE $A ".idf_escape($e),2);preg_match("~\\(((?:$S\\s*,?)*)\\)".($A=="FUNCTION"?"\\s*RETURNS\\s+$qd":"")."\\s*(.*)~is",$Ra,$k);$t=array();preg_match_all("~$S\\s*,?~is",$k[1],$ca,PREG_SET_ORDER);foreach($ca
as$Ha){$e=str_replace("``","`",$Ha[2]).$Ha[3];$t[]=array("field"=>$e,"type"=>strtolower($Ha[5]),"length"=>preg_replace_callback("~$kc~s",'normalize_enum',$Ha[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ha[8] $Ha[7]"))),"full_type"=>$Ha[4],"inout"=>strtoupper($Ha[1]),"collation"=>strtolower($Ha[9]),);}if($A!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($g,$o){return
queries("INSERT INTO ".table($g)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
insert_update($g,$o,$wa){foreach($o
as$d=>$a){$o[$d]="$d = $a";}$aa=implode(", ",$o);return
queries("INSERT INTO ".table($g)." SET $aa ON DUPLICATE KEY UPDATE $aa");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$j){return$f->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($wc){return
true;}function
create_sql($g,$xa){global$f;$b=$f->result("SHOW CREATE TABLE ".table($g),1);if(!$xa){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($g){return"TRUNCATE ".table($g);}function
use_sql($R){return"USE ".idf_escape($R);}function
trigger_sql($g,$sb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($g,"%_")),null,"-- ")as$c){$b.="\n".($sb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Pa){global$f;return!ereg("scheme|sequence|type".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|view|routine|trigger":""):""),$Pa);}$ta="sql";$Y=array();$Da=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$Y+=$a;$Da[$d]=array_keys($a);}$Gb=array("unsigned","zerofill","unsigned zerofill");$rb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$fa=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Hb=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Xb="3.2.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return
lang(19);}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$f;$P=get_databases(false);return(!$P?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$P[(information_schema($P[0])?1:0)]);}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(20),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(21),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(22)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(23))."\n";}function
login($he,$G){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($wb){return
h($wb["Comment"]!=""?$wb["Comment"]:$wb["Name"]);}function
fieldName($h,$ra=0){return
h($h["comment"]!=""?$h["comment"]:$h["field"]);}function
selectLinks($wb,$o=""){$w=$wb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($w).$o).'">'.lang(24)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(25)."'>&gt;&gt;</a>\n";}function
foreignKeys($g){return
foreign_keys($g);}function
backwardKeys($g,$Zd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($g)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$e=$this->tableName(table_status($d));if($e!=""){$qb=preg_quote($Zd);$ka="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$qb$ka(.+)|^(.+?)$ka$qb\$)iu",$e,$k)?$k[2].$k[3]:$e);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($Jd,$c){foreach($Jd
as$g=>$td){foreach($td["keys"]as$cb){$v=ME.'select='.urlencode($g);$q=0;foreach($cb
as$u=>$a){$v.=where_link($q++,$u,$c[$a]);}echo"<a href='".h($v)."'>".h($td["name"])."</a>";$v=ME.'edit='.urlencode($g);foreach($cb
as$u=>$a){$v.="&set".urlencode("[".bracket_escape($u)."]")."=".urlencode($c[$a]);}echo"<a href='".h($v)."' title='".lang(24)."'>+</a> ";}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($g){foreach(fields($g)as$h){if($h["type"]=="varchar"){return
idf_escape($h["field"]);}}return"";}function
rowDescriptions($y,$Ab){$b=$y;foreach($y[0]as$d=>$a){foreach((array)$Ab[$d]as$za){if(count($za["source"])==1){$ba=idf_escape($za["target"][0]);$e=$this->rowDescription($za["table"]);if($e!=""){$sd=array();foreach($y
as$c){$sd[$c[$d]]=exact_value($c[$d]);}$gc=$this->_values[$za["table"]];if(!$gc){$gc=get_key_vals("SELECT $ba, $e FROM ".table($za["table"])." WHERE $ba IN (".implode(", ",$sd).")");}foreach($y
as$L=>$c){if(isset($c[$d])){$b[$L][$d]=(string)$gc[$c[$d]];}}break;}}}}return$b;}function
selectVal($a,$v,$h){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$h["type"])&&!is_utf8($a)){$b=lang(26,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89\x50\x4E\x47\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$v' alt='$b'>";}}if(ereg("(tinyint|bit)\\(1\\)",$h["full_type"])&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.1":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.1").'" alt="'.h($a).'">';}if($v){$b="<a href='$v'>$b</a>";}if(!$v&&!ereg("(tinyint|bit)\\(1\\)",$h["full_type"])&&ereg('int|float|double|decimal',$h["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$h["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$h){if(ereg('date|timestamp',$h["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(27),$a);}return(ereg("binary",$h["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($K,$I){}function
selectSearchPrint($m,$I,$V){$m=(array)$_GET["where"];echo'<fieldset><legend>'.lang(28)."</legend><div>\n";$uc=array();foreach($m
as$d=>$a){$uc[$a["col"]]=$d;}$q=0;$t=fields($_GET["select"]);foreach($t
as$e=>$h){if(ereg("enum",$h["type"])){$Na=$I[$e];$d=$uc[$e];$q--;echo"<div>".h($Na)."<input type='hidden' name='where[$q][col]' value='".h($e)."'>:",enum_input("checkbox"," name='where[$q][val][]'",$h,(array)$m[$d]["val"],($h["null"]?0:null)),"</div>\n";unset($I[$e]);}}foreach($I
as$e=>$Na){$Ga=$this->_foreignKeyOptions($_GET["select"],$e);if($Ga){if($t[$e]["null"]){$Ga[0]='('.lang(4).')';}$d=$uc[$e];$q--;echo"<div>".h($Na)."<input type='hidden' name='where[$q][col]' value='".h($e)."'><input type='hidden' name='where[$q][op]' value='='>: <select name='where[$q][val]'>".optionlist($Ga,$m[$d]["val"],true)."</select></div>\n";unset($I[$e]);}}$q=0;foreach($m
as$a){if(($a["col"]==""||$I[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$q][col]'><option value=''>(".lang(29).")".optionlist($I,$a["col"],true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$q][val]' value='".h($a["val"])."'></div>\n";$q++;}}echo"<div><select name='where[$q][col]' onchange='selectAddRow(this);'><option value=''>(".lang(29).")".optionlist($I,null,true)."</select>",html_select("where[$q][op]",array(-1=>"")+$this->operators),"<input name='where[$q][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ra,$I,$V){$sc=array();foreach($V
as$d=>$Z){$ra=array();foreach($Z["columns"]as$a){$ra[]=$I[$a];}if(count(array_filter($ra,'strlen'))>1&&$d!="PRIMARY"){$sc[$d]=implode(", ",$ra);}}if($sc){echo'<fieldset><legend>'.lang(30)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$sc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($D){echo"<fieldset><legend>".lang(31)."</legend><div>";echo
html_select("limit",array("","30","100"),$D),"</div></fieldset>\n";}function
selectLengthPrint($jb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(32)."</legend><div>","<input type='submit' value='".lang(33)."'>","</div></fieldset>\n";}function
selectEmailPrint($Yb,$I){if($Yb){print_fieldset("email",lang(34),$_POST["email_append"]);echo"<p>".lang(35).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(36).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea><br>\n";echo
html_select("email_addition",$I,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(37)."'>\n";echo"<p>".lang(38).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Yb)==1?'<input type="hidden" name="email_field" value="'.h(key($Yb)).'">':html_select("email_field",$Yb)),"<input type='submit' name='email' value='".lang(39)."' onclick=\"return this.form['delete'].onclick();\">\n","</div></fieldset>\n";}}function
selectColumnsProcess($I,$V){return
array(array(),array());}function
selectSearchProcess($t,$V){$b=array();foreach((array)$_GET["where"]as$d=>$m){$Oa=$m["col"];$zb=$m["op"];$a=$m["val"];if(($d<0?"":$Oa).$a!=""){$Db=array();foreach(($Oa!=""?array($Oa=>$t[$Oa]):$t)as$e=>$h){if($Oa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$h["type"])){$e=idf_escape($e);if($Oa!=""&&$h["type"]=="enum"){$Db[]=(in_array(0,$a)?"$e IS NULL OR ":"")."$e IN (".implode(", ",array_map('intval',$a)).")";}else{$vd=ereg('char|text|enum|set',$h["type"]);$n=$this->processInput($h,(!$zb&&$vd&&ereg('^[^%]+$',$a)?"%$a%":$a));$Db[]=$e.($n=="NULL"?" IS".($zb==">="?" NOT":"")." $n":(in_array($zb,$this->operators)||$zb=="="?" $zb $n":($vd?" LIKE $n":" IN (".str_replace(",","', '",$n).")")));if($d<0&&$a=="0"){$Db[]="$e IS NULL";}}}}$b[]=($Db?"(".implode(" OR ",$Db).")":"0");}}return$b;}function
selectOrderProcess($t,$V){$Mb=$_GET["index_order"];if($Mb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Mb!=""?array($V[$Mb]):$V)as$Z){if($Mb!=""||$Z["type"]=="INDEX"){$Na=false;foreach($Z["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Na=true;break;}}$b=array();foreach($Z["columns"]as$a){$b[]=idf_escape($a).($Na?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($m,$Ab){if($_POST["email_append"]){return
true;}if($_POST["email"]){$ud=0;if($_POST["all"]||$_POST["check"]){$h=idf_escape($_POST["email_field"]);$Nb=$_POST["email_subject"];$va=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Nb.$va",$ca);$y=get_rows("SELECT DISTINCT $h".($ca[1]?", ".implode(", ",array_map('idf_escape',array_unique($ca[1]))):"")." FROM ".table($_GET["select"])." WHERE $h IS NOT NULL AND $h != ''".($m?" AND ".implode(" AND ",$m):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($y,$Ab)as$c){$nc=array('{\\'=>'{');foreach($ca[1]as$a){$nc['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$lb=$c[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Nb,$nc),strtr($va,$nc),$_POST["email_from"],$_FILES["email_files"])){$ud++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(40,$ud));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($h){$b=array();if($h["null"]&&ereg('blob',$h["type"])){$b["NULL"]=lang(4);}$b[""]=($h["null"]||$h["auto_increment"]||ereg("(tinyint|bit)\\(1\\)",$h["full_type"])?"":"*");if(ereg('date|time',$h["type"])){$b["now"]=lang(41);}if(eregi('_(md5|sha1)$',$h["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($g,$h,$ha,$n){if($h["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ha value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ha,$h,($n||isset($_GET["select"])?$n:0),($h["null"]?"":null));}$Ga=$this->_foreignKeyOptions($g,$h["field"]);if($Ga){return"<select$ha>".optionlist($Ga,$n,true)."</select>";}if(ereg("(tinyint|bit)\\(1\\)",$h["full_type"])){return'<input type="checkbox" value="'.h($n?$n:1).'"'.($n?' checked':'')."$ha>";}$hb="";if(ereg('time',$h["type"])){$hb=lang(42);}if(ereg('date|timestamp',$h["type"])){$hb=lang(43).($hb?" [$hb]":"");}if($hb){return"<input value='".h($n)."'$ha> ($hb)";}if(eregi('_(md5|sha1)$',$h["field"])){return"<input type='password' value='".h($n)."'$ha>";}return'';}function
processInput($h,$n,$M=""){if($M=="now"){return"$M()";}$b=$n;if(ereg('date|timestamp',$h["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(27)))).'(.*))',$n,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=($h["type"]=="bit"&&ereg('^[0-9]+$',$n)?$b:q($b));if(!ereg('char|text',$h["type"])&&!ereg("(tinyint|bit)\\(1\\)",$h["full_type"])&&$n==""){$b="NULL";}elseif(ereg('^(md5|sha1)$',$M)){$b="$M($b)";}if(ereg("binary",$h["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($g,$sb,$j){global$f;$i=$f->query($j,1);if($i){while($c=$i->fetch_assoc()){if($sb=="table"){dump_csv(array_keys($c));$sb="INSERT";}dump_csv($c);}}}function
dumpHeaders($ac,$kd=false){$ce="csv";header("Content-Type: text/csv; charset=utf-8");return$ce;}function
homepage(){return
true;}function
navigation($tb){global$Xb,$Aa;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Xb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($Xb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($tb=="auth"){$ya=true;foreach((array)$_SESSION["pwds"]["server"][""]as$C=>$G){if(isset($G)){if($ya){echo"<p onclick='eventStop(event);'>\n";$ya=false;}echo"<a href='".h(auth_url("server","",$C))."'>".($C!=""?h($C):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(44),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$Aa,'">
</p>
</form>
';if($tb!="db"&&$tb!="ns"){$_=table_status();if(!$_){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($_);}}}}function
tablesPrint($z){echo"<p id='tables'>\n";foreach($z
as$c){$e=$this->tableName($c);if(isset($c["Engine"])&&$e!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'".bold($_GET["select"]==$c["Name"]).">$e</a><br>\n";}}}function
_foreignKeyOptions($g,$u){$Ab=column_foreign_keys($g);foreach((array)$Ab[$u]as$za){if(count($za["source"])==1){$ba=idf_escape($za["target"][0]);$e=$this->rowDescription($za["table"]);if($e!=""){$b=&$this->_values[$za["table"]];if(!isset($b)){$_=table_status($za["table"]);$b=($_["Rows"]>1000?array():array(""=>"")+get_key_vals("SELECT $ba, $e FROM ".table($za["table"])." ORDER BY 2"));}return$b;}}}}}$l=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Ic,$p="",$_b=array(),$Nc=""){global$da,$l,$f,$sa;header("Content-Type: text/html; charset=utf-8");$l->headers();$Lc=$Ic.($Nc!=""?": ".h($Nc):"");$Hc=$Lc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$l->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Hc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$da,'" dir="',lang(45),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Hc,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.1",'" id="favicon">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.1",'">
';if($l->head()&&file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="',lang(45),' nojs" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$fc');"),'">
<script type="text/javascript">
var areYouSure = \'',lang(46),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.1",'"></script>

<div id="content">
';}if(isset($_b)){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($v?h($v):".").'">'.$sa[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$B=(SERVER!=""?h(SERVER):lang(47));if($_b===false){echo"$B\n";}else{echo"<a href='".($v?h($v):".")."'>$B</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_b))){echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($_b)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($_b
as$d=>$a){$Na=(is_array($a)?$a[1]:$a);if($Na!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Na).'</a> &raquo; ';}}}echo"$Ic\n";}}echo"<span id='loader'></span>\n","<h2>$Lc</h2>\n";restart_session();$Xc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Vc=$_SESSION["messages"][$Xc];if($Vc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Vc)."</div>\n";unset($_SESSION["messages"][$Xc]);}$P=&get_session("dbs");if(DB!=""&&$P&&!in_array(DB,$P,true)){$P=null;}if($p){echo"<div class='error'>$p</div>\n";}define("PAGE_HEADER",1);}function
page_footer($tb=""){global$l;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$l->navigation($tb);echo'</div>
';}}function
int32($L){while($L>=2147483648){$L-=4294967296;}while($L<=-2147483649){$L+=4294967296;}return(int)$L;}function
long2str($s,$lc){$Wa='';foreach($s
as$a){$Wa.=pack('V',$a);}if($lc){return
substr($Wa,0,end($s));}return$Wa;}function
str2long($Wa,$lc){$s=array_values(unpack('V*',str_pad($Wa,4*ceil(strlen($Wa)/4),"\0")));if($lc){$s[]=strlen($Wa);}return$s;}function
xxtea_mx($ma,$la,$pa,$ua){return
int32((($ma>>5&0x7FFFFFF)^$la<<2)+(($la>>3&0x1FFFFFFF)^$ma<<4))^int32(($pa^$la)+($ua^$ma));}function
encrypt_string($Bb,$d){if($Bb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($Bb,true);$L=count($s)-1;$ma=$s[$L];$la=$s[0];$Ub=floor(6+52/($L+1));$pa=0;while($Ub-->0){$pa=int32($pa+0x9E3779B9);$vb=$pa>>2&3;for($ia=0;$ia<$L;$ia++){$la=$s[$ia+1];$Va=xxtea_mx($ma,$la,$pa,$d[$ia&3^$vb]);$ma=int32($s[$ia]+$Va);$s[$ia]=$ma;}$la=$s[0];$Va=xxtea_mx($ma,$la,$pa,$d[$ia&3^$vb]);$ma=int32($s[$L]+$Va);$s[$L]=$ma;}return
long2str($s,false);}function
decrypt_string($Bb,$d){if($Bb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($Bb,false);$L=count($s)-1;$ma=$s[$L];$la=$s[0];$Ub=floor(6+52/($L+1));$pa=int32($Ub*0x9E3779B9);while($pa){$vb=$pa>>2&3;for($ia=$L;$ia>0;$ia--){$ma=$s[$ia-1];$Va=xxtea_mx($ma,$la,$pa,$d[$ia&3^$vb]);$la=int32($s[$ia]-$Va);$s[$ia]=$la;}$ma=$s[$L];$Va=xxtea_mx($ma,$la,$pa,$d[$ia&3^$vb]);$la=int32($s[0]-$Va);$s[0]=$la;$pa=int32($pa-0x9E3779B9);}return
long2str($s,true);}$f='';$Aa=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Qa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Qa[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Wb=$l->permanentLogin();$Qa[$d]="$d:".base64_encode($Wb?encrypt_string($_POST["password"],$Wb):"");cookie("adminer_permanent",implode(" ",$Qa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Aa&&$_POST["token"]!=$Aa){page_header(lang(44),lang(48));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Qa[$d]){unset($Qa[$d]);cookie("adminer_permanent",implode(" ",$Qa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(49));}}elseif($Qa&&!$_SESSION["pwds"]){session_regenerate_id();$Wb=$l->permanentLogin();foreach($Qa
as$d=>$a){list(,$Rd)=explode(":",$a);list($Tb,$B,$C)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Tb][$B][$C]=decrypt_string(base64_decode($Rd),$Wb);}}function
auth_error($Mc=null){global$f,$l,$Aa;$Rb=session_name();$p="";if(!$_COOKIE[$Rb]&&$_GET[$Rb]&&ini_bool("session.use_only_cookies")){$p=lang(50);}elseif(isset($_GET["username"])){if(($_COOKIE[$Rb]||$_GET[$Rb])&&!$Aa){$p=lang(51);}else{$G=&get_session("pwds");if(isset($G)){$p=h($Mc?$Mc->getMessage():(is_string($f)?$f:lang(52)));$G=null;}}}page_header(lang(22),$p,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$l->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(53),lang(54,implode(", ",$Jb)),false);page_footer("auth");exit;}$f=connect();}if(is_string($f)||!$l->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Aa=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Aa;}$p=($_POST?($_POST["token"]==$Aa?"":lang(48)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(55,'"post_max_size"')));$f->select_db($l->database());function
email_header($Nd){return"=?UTF-8?B?".base64_encode($Nd)."?=";}function
send_mail($lb,$Nb,$va,$db="",$Zb=array("error"=>array())){$ea=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$va=str_replace("\n",$ea,wordwrap(str_replace("\r","","$va\n")));$Lb=uniqid("boundary");$Kb="";foreach($Zb["error"]as$d=>$a){if(!$a){$Kb.="--$Lb$ea"."Content-Type: ".str_replace("\n","",$Zb["type"][$d]).$ea."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Zb["name"][$d])."\"$ea"."Content-Transfer-Encoding: base64$ea$ea".chunk_split(base64_encode(file_get_contents($Zb["tmp_name"][$d])),76,$ea).$ea;}}$ad="";$Pb="Content-Type: text/plain; charset=utf-8$ea"."Content-Transfer-Encoding: 8bit";if($Kb){$Kb.="--$Lb--$ea";$ad="--$Lb$ea$Pb$ea$ea";$Pb="Content-Type: multipart/mixed; boundary=\"$Lb\"";}$Pb.=$ea."MIME-Version: 1.0$ea"."X-Mailer: Adminer Editor".($db?$ea."From: ".str_replace("\n","",$db):"");return
mail($lb,email_header($Nb),$ad.$va.$Kb,$Pb);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Vb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$sa[DRIVER]=lang(22);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$w=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$w-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($w)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$w=$_GET["edit"];$m=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$aa=(isset($_GET["select"])?$_POST["edit"]:$m);$t=fields($w);foreach($t
as$e=>$h){if(!isset($h["privileges"][$aa?"update":"insert"])||$l->fieldName($h)==""){unset($t[$e]);}}if($_POST&&!$p&&!isset($_GET["select"])){$T=$_POST["referer"];if($_POST["insert"]){$T=($aa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$T)){$T=ME."select=".urlencode($w);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($w)," WHERE $m"),$T,lang(56));}else{$o=array();foreach($t
as$e=>$h){$a=process_input($h);if($a!==false&&$a!==null){$o[idf_escape($e)]=($aa?"\n".idf_escape($e)." = $a":$a);}}if($aa){if(!$o){redirect($T);}query_redirect("UPDATE".limit1(table($w)." SET".implode(",",$o),"\nWHERE $m"),$T,lang(57));}else{$i=insert_into($w,$o);$Rc=($i?last_id():0);queries_redirect($T,lang(58,($Rc?" $Rc":"")),$i);}}}$Eb=$l->tableName(table_status($w));page_header(($aa?lang(59):lang(37)),$p,array("select"=>array($w,$Eb)),$Eb);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($m){$K=array();foreach($t
as$e=>$h){if(isset($h["privileges"]["select"])){$K[]=($_POST["clone"]&&$h["auto_increment"]?"'' AS ":(ereg("enum|set",$h["type"])?"1*".idf_escape($e)." AS ":"")).idf_escape($e);}}$c=array();if($K){$y=get_rows("SELECT".limit(implode(", ",$K)." FROM ".table($w)," WHERE $m",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($y)!=1?null:reset($y));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($t){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($t
as$e=>$h){echo"<tr><th>".$l->fieldName($h);$kb=$_GET["set"][bracket_escape($e)];$n=(isset($c)?($c[$e]!=""&&ereg("enum|set",$h["type"])?+$c[$e]:$c[$e]):(!$aa&&$h["auto_increment"]?"":(isset($_GET["select"])?false:(isset($kb)?$kb:$h["default"]))));if(!$_POST["save"]&&is_string($n)){$n=$l->editVal($n,$h);}$M=($_POST["save"]?(string)$_POST["function"][$e]:($m&&$h["on_update"]=="CURRENT_TIMESTAMP"?"now":($n===false?null:(isset($n)?'':'NULL'))));if($h["type"]=="timestamp"&&$n=="CURRENT_TIMESTAMP"){$n="";$M="now";}input($h,$n,$M);echo"\n";}echo"</table>\n";}echo'<p>
';if($t){echo"<input type='submit' value='".lang(60)."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($aa?lang(61):lang(62))."\">\n";}}echo($aa?"<input type='submit' name='delete' value='".lang(63)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$t?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Aa,'">
</form>
';}elseif(isset($_GET["select"])){$w=$_GET["select"];$_=table_status($w);$V=indexes($w);$t=fields($w);$pb=column_foreign_keys($w);if($_["Oid"]=="t"){$V[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$Oc=array();$I=array();$jb=null;foreach($t
as$d=>$h){$e=$l->fieldName($h);if(isset($h["privileges"]["select"])&&$e!=""){$I[$d]=html_entity_decode(strip_tags($e));if(ereg('text|lob',$h["type"])){$jb=$l->selectLengthProcess();}}$Oc+=$h["privileges"];}list($K,$na)=$l->selectColumnsProcess($I,$V);$m=$l->selectSearchProcess($t,$V);$ra=$l->selectOrderProcess($t,$V);$D=$l->selectLimitProcess();$db=($K?implode(", ",$K):($_["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($w);$Ac=($na&&count($na)<count($K)?"\nGROUP BY ".implode(", ",$na):"").($ra?"\nORDER BY ".implode(", ",$ra):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ia=>$c){echo$f->result("SELECT".limit(idf_escape(key($c))." FROM ".table($w)," WHERE ".where_check($Ia).($m?" AND ".implode(" AND ",$m):"").($ra?" ORDER BY ".implode(", ",$ra):""),1));}exit;}if($_POST&&!$p){$Gc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$wa=$bc=null;foreach($V
as$Z){if($Z["type"]=="PRIMARY"){$wa=array_flip($Z["columns"]);$bc=($K?$wa:array());break;}}foreach($K
as$d=>$a){$a=$_GET["columns"][$d];if(!$a["fun"]){unset($bc[$a["col"]]);}}if($_POST["export"]){dump_headers($w);$l->dumpTable($w,"");if(!is_array($_POST["check"])||$bc===array()){$gb=$m;if(is_array($_POST["check"])){$gb[]="($Gc)";}$j="SELECT $db".($gb?"\nWHERE ".implode(" AND ",$gb):"").$Ac;}else{$cd=array();foreach($_POST["check"]as$a){$cd[]="(SELECT".limit($db,"\nWHERE ".($m?implode(" AND ",$m)." AND ":"").where_check($a).$Ac,1).")";}$j=implode(" UNION ALL ",$cd);}$l->dumpData($w,"table",$j);exit;}if(!$l->selectEmailProcess($m,$pb)){if($_POST["save"]||$_POST["delete"]){$i=true;$La=0;$j=table($w);$o=array();if(!$_POST["delete"]){foreach($I
as$e=>$a){$a=process_input($t[$e]);if($a!==null){if($_POST["clone"]){$o[idf_escape($e)]=($a!==false?$a:idf_escape($e));}elseif($a!==false){$o[]=idf_escape($e)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($w):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$ec="UPDATE";if($_POST["delete"]){$ec="DELETE";$j="FROM $j";}if($_POST["clone"]){$ec="INSERT";$j="INTO $j";}if($_POST["all"]||($bc===array()&&$_POST["check"])||count($na)<count($K)){$i=queries($ec." $j".($_POST["all"]?($m?"\nWHERE ".implode(" AND ",$m):""):"\nWHERE $Gc"));$La=$f->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($ec.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$La+=$f->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(64,$La),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$p=lang(65);}else{$i=true;$La=0;foreach($_POST["val"]as$Ia=>$c){$o=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$o[]=idf_escape($d)." = ".(ereg('char|text',$t[$d]["type"])||$a!=""?$l->processInput($t[$d],$a):"NULL");}$j=table($w)." SET ".implode(", ",$o);$gb=" WHERE ".where_check($Ia).($m?" AND ".implode(" AND ",$m):"");$i=queries("UPDATE".(count($na)<count($K)?" $j$gb":limit1($j,$gb)));if(!$i){break;}$La+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(64,$La),$i);}}elseif(is_string($oa=get_file("csv_file",true))){$i=true;$cb=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$oa,$ca);$La=count($ca[0]);begin();$ka=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ca[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ka]*)$ka~",$a.$ka,$mc);if(!$d&&!array_diff($mc[1],$cb)){$cb=$mc[1];$La--;}else{$o=array();foreach($mc[1]as$q=>$Oa){$o[idf_escape($cb[$q])]=($Oa==""&&$t[$cb[$q]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Oa))));}$i=insert_update($w,$o,$wa);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(66,$La),$i);queries("ROLLBACK");}else{$p=upload_error($oa);}}}$Eb=$l->tableName($_);page_header(lang(33).": $Eb",$p);session_write_close();$o=null;if(isset($Oc["insert"])){$o="";foreach((array)$_GET["where"]as$a){if(count($pb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$o.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$l->selectLinks($_,$o);if(!$I){echo"<p class='error'>".lang(67).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($w).'">',"</div>\n";$l->selectColumnsPrint($K,$I);$l->selectSearchPrint($m,$I,$V);$l->selectOrderPrint($ra,$I,$V);$l->selectLimitPrint($D);$l->selectLengthPrint($jb);$l->selectActionPrint($jb);echo"</form>\n";$Q=$_GET["page"];if($Q=="last"){$Ba=$f->result("SELECT COUNT(*) FROM ".table($w).($m?" WHERE ".implode(" AND ",$m):""));$Q=floor(max(0,$Ba-1)/$D);}$j="SELECT".limit((+$D&&$na&&count($na)<count($K)&&$ta=="sql"?"SQL_CALC_FOUND_ROWS ":"").$db,($m?"\nWHERE ".implode(" AND ",$m):"").$Ac,($D!=""?+$D:null),($Q?$D*$Q:0),"\n");echo$l->selectQuery($j);$i=$f->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($ta=="mssql"){$i->seek($D*$Q);}$cc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$y=array();while($c=$i->fetch_assoc()){$y[]=$c;}if($_GET["page"]!="last"){$Ba=(+$D&&$na&&count($na)<count($K)?($ta=="sql"?$f->result(" SELECT FOUND_ROWS()"):$f->result("SELECT COUNT(*) FROM ($j) x")):count($y));}if(!$y){echo"<p class='message'>".lang(68)."\n";}else{$qc=$l->backwardKeys($w,$Eb);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$na&&$K?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(69)."</a>");$oc=array();$fa=array();reset($K);$Uc=1;foreach($y[0]as$d=>$a){if($_["Oid"]!="t"||$d!="oid"){$a=$_GET["columns"][key($K)];$h=$t[$K?$a["col"]:$d];$e=($h?$l->fieldName($h,$Uc):"*");if($e!=""){$Uc++;$oc[$d]=$e;$u=idf_escape($d);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($ra[0]==$u||$ra[0]==$d||(!$ra&&$na[0]==$u)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($a["fun"],$e)."</a>";}$fa[$d]=$a["fun"];next($K);}}$jc=array();if($_GET["modify"]){foreach($y
as$c){foreach($c
as$d=>$a){$jc[$d]=max($jc[$d],min(40,strlen(utf8_decode($a))));}}}echo($qc?"<th>".lang(70):"")."</thead>\n";foreach($l->rowDescriptions($y,$pb)as$L=>$c){$Bc=unique_array($y[$L],$V);$Ia="";foreach($Bc
as$d=>$a){$Ia.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$na&&$K?"":"<td>".checkbox("check[]",substr($Ia,1),in_array(substr($Ia,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($na)<count($K)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($w).$Ia)."'>".lang(69)."</a>"));foreach($c
as$d=>$a){if(isset($oc[$d])){$h=$t[$d];if($a!=""&&(!isset($cc[$d])||$cc[$d]!="")){$cc[$d]=(is_mail($a)?$oc[$d]:"");}$v="";$a=$l->editVal($a,$h);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$h["type"])&&$a!=""){$v=h(ME.'download='.urlencode($w).'&field='.urlencode($d).$Ia);}if($a===""){$a="&nbsp;";}elseif($jb!=""&&ereg('text|blob',$h["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$jb));}else{$a=h($a);}if(!$v){foreach((array)$pb[$d]as$J){if(count($pb[$d])==1||end($J["source"])==$d){$v="";foreach($J["source"]as$q=>$Ec){$v.=where_link($q,$J["target"][$q],$y[$L][$Ec]);}$v=h(($J["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($J["db"]),ME):ME).'select='.urlencode($J["table"]).$v);if(count($J["source"])==1){break;}}}}if($d=="COUNT(*)"){$v=h(ME."select=".urlencode($w));$q=0;foreach((array)$_GET["where"]as$s){if(!array_key_exists($s["col"],$Bc)){$v.=h(where_link($q++,$s["col"],$s["val"],$s["op"]));}}foreach($Bc
as$ua=>$s){$v.=h(where_link($q++,$ua,$s));}}}if(!$v){if(is_mail($a)){$v="mailto:$a";}if($fc=is_url($c[$d])){$v=($fc=="http"&&$yb?$c[$d]:"$fc://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$ba=h("val[$Ia][".bracket_escape($d)."]");$n=$_POST["val"][$Ia][bracket_escape($d)];$bd=h(isset($n)?$n:$c[$d]);$Ed=strpos($a,"<i>...</i>");$dd=is_utf8($a)&&$y[$L][$d]==$c[$d]&&!$fa[$d];$Jc=ereg('text|lob',$h["type"]);echo(($_GET["modify"]&&$dd)||isset($n)?"<td>".($Jc?"<textarea name='$ba' cols='30' rows='".(substr_count($c[$d],"\n")+1)."'>$bd</textarea>":"<input name='$ba' value='$bd' size='$jc[$d]'>"):"<td id='$ba' ondblclick=\"".($dd?"selectDblClick(this, event".($Ed?", 2":($Jc?", 1":"")).")":"alert('".h(lang(71))."')").";\">".$l->selectVal($a,$v,$h));}}if($qc){echo"<td>";}$l->backwardKeysPrint($qc,$y[$L]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$tc);if($y||$Q){$rc=true;if($_GET["page"]!="last"&&+$D&&count($na)>=count($K)&&($Ba>=$D||$Q)){$Ba=$_["Rows"];if(!isset($Ba)||$m||($_["Engine"]=="InnoDB"&&$Ba<max(1e4,2*($Q+1)*$D))){ob_flush();flush();$Ba=$f->result("SELECT COUNT(*) FROM ".table($w).($m?" WHERE ".implode(" AND ",$m):""));}else{$rc=false;}}echo"<p class='pages'>";if(+$D&&$Ba>$D){$pc=floor(($Ba-1)/$D);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(72)."', '".($Q+1)."'), event); return false;\">".lang(72)."</a>:",pagination(0,$Q).($Q>5?" ...":"");for($q=max(1,$Q-4);$q<min($pc,$Q+5);$q++){echo
pagination($q,$Q);}echo($Q+5<$pc?" ...":"").($rc?pagination($pc,$Q):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(73)."</a>");}echo" (".($rc?"":"~ ").lang(74,$Ba).") ".checkbox("all",1,0,lang(75))."\n";if(!information_schema(DB)){echo'<fieldset><legend>',lang(59),'</legend><div>
<input type="submit" value="',lang(60),'" title="',lang(65),'" class="jsonly">
<input type="submit" name="edit" value="',lang(59),'">
<input type="submit" name="clone" value="',lang(76),'">
<input type="submit" name="delete" value="',lang(63),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Ba,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(77));$Ta=$l->dumpOutput();echo($Ta?html_select("output",$Ta,$tc["output"])." ":""),html_select("format",$l->dumpFormat(),$tc["format"])," <input type='submit' name='export' value='".lang(77)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",lang(78),!$y);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$tc["format"],1);echo" <input type='submit' name='import' value='".lang(78)."'>","<input type='hidden' name='token' value='$Aa'>\n","</div></fieldset>\n";$l->selectEmailPrint(array_filter($cc,'strlen'),$I);echo"</form>\n";}}}else{page_header(lang(47),"",false);if($l->homepage()){echo"<form action='' method='post'>\n","<p>".lang(79).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(28)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(80).'<td>'.lang(81)."</thead>\n";foreach(table_status()as$g=>$c){$e=$l->tableName($c);if(isset($c["Engine"])&&$e!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$g,in_array($g,(array)$_POST["tables"],true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'select='.urlencode($g).'">'.h($e).'</a>';$a=number_format($c["Rows"],0,'.',lang(82));echo"<td align='right'><a href='".h(ME."edit=").urlencode($g)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();