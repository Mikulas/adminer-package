<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.1
*/error_reporting(6135);$gc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($gc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$id=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($id){$$a=$id;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
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
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.1');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.1" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(originalFavicon);if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}}
function whisperClick(event,field){var el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';eventStop(event);return false;}}
function whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$h;return$h;}function
idf_unescape($B){$jc=substr($B,-1);return
str_replace($jc.$jc,$jc,substr($B,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Oa,$gc=false){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Oa)){foreach($a
as$va=>$s){unset($Oa[$d][$va]);if(is_array($s)){$Oa[$d][stripslashes($va)]=$s;$Oa[]=&$Oa[$d][stripslashes($va)];}else{$Oa[$d][stripslashes($va)]=($gc?$s:stripslashes($s));}}}}}function
bracket_escape($B,$Md=false){static$gd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($B,($Md?array_flip($gd):$gd));}function
h($y){return
htmlspecialchars(str_replace("\0","",$y),ENT_QUOTES);}function
nbsp($y){return(trim($y)!=""?h($y):"&nbsp;");}function
nl_br($y){return
str_replace("\n","<br>",$y);}function
checkbox($f,$m,$xb,$Vc="",$hc="",$Bd=false){static$O=0;$O++;$b="<input type='checkbox' name='$f' value='".h($m)."'".($xb?" checked":"").($hc?' onclick="'.h($hc).'"':'').($Bd?" class='jsonly'":"")." id='checkbox-$O'>";return($Vc!=""?"<label for='checkbox-$O'>$b".h($Vc)."</label>":$b);}function
optionlist($ua,$Ud=null,$Tc=false){$b="";foreach($ua
as$va=>$s){$md=array($va=>$s);if(is_array($s)){$b.='<optgroup label="'.h($va).'">';$md=$s;}foreach($md
as$d=>$a){$b.='<option'.($Tc||is_string($d)?' value="'.h($d).'"':'').(($Tc||is_string($d)?(string)$d:$a)===$Ud?' selected':'').'>'.h($a);}if(is_array($s)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ua,$m="",$Ta=true){if($Ta){return"<select name='".h($f)."'".(is_string($Ta)?' onchange="'.h($Ta).'"':"").">".optionlist($ua,$m)."</select>";}$b="";foreach($ua
as$d=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($d)."'".($d==$m?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($ud="",$ce=false){return" onclick=\"".($ce?"eventStop(event); ":"")."return confirm('".lang(0).($ud?" (' + $ud + ')":"")."');\"";}function
print_fieldset($O,$Id,$Qd=false,$hc=""){echo"<fieldset><legend><a href='#fieldset-$O' onclick=\"".h($hc)."return !toggle('fieldset-$O');\">$Id</a></legend><div id='fieldset-$O'".($Qd?"":" class='hidden'").">\n";}function
bold($Td){return($Td?" class='active'":"");}function
odd($b=' class="odd"'){static$p=0;if(!$b){$p=-1;}return($p++%
2?$b:'');}function
js_escape($y){return
addcslashes($y,"\r\n'\\/");}function
json_row($d,$a=null){static$Aa=true;if($Aa){echo"{";}if($d!=""){echo($Aa?"":",")."\n\t\"".addcslashes($d,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$Aa=false;}else{echo"\n}\n";$Aa=true;}}function
ini_bool($de){$a=ini_get($de);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($y){global$h;return$h->quote($y);}function
get_vals($j,$u=0){global$h;$b=array();$i=$h->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$u];}}return$b;}function
get_key_vals($j,$T=null){global$h;if(!is_object($T)){$T=$h;}$b=array();$i=$T->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}}return$b;}function
get_rows($j,$T=null,$q="<p class='error'>"){global$h;if(!is_object($T)){$T=$h;}$b=array();$i=$T->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$h->error&&$q&&defined("PAGE_HEADER")){echo$q.error()."\n";}return$b;}function
unique_array($c,$ca){foreach($ca
as$ea){if(ereg("PRIMARY|UNIQUE",$ea["type"])){$b=array();foreach($ea["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($n){global$pa;$b=array();foreach((array)$n["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)||$pa=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_\\")):" = ".exact_value($a));}foreach((array)$n["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$od);remove_slashes(array(&$od));return
where($od);}function
where_link($p,$u,$m,$Fd="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($u)."&where%5B$p%5D%5Bop%5D=".urlencode((isset($m)?$Fd:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($m);}function
cookie($f,$m){global$Hb;$Cb=array($f,(ereg("\n",$m)?"":$m),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Cb[]=true;}return
call_user_func_array('setcookie',$Cb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Sb,$D,$F){global$ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ya))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Sb!="server"||$D!=""?urlencode($Sb)."=".urlencode($D)."&":"")."username=".urlencode($F).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($da,$wa=null){if(isset($wa)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($da)?$da:$_SERVER["REQUEST_URI"]))][]=$wa;}if(isset($da)){if($da==""){$da=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $da");exit;}}function
query_redirect($j,$da,$wa,$Rb=true,$Od=true,$ad=false){global$h,$q,$l;if($Od){$ad=!$h->query($j);}$lc="";if($j){$lc=$l->messageQuery("$j;");}if($ad){$q=error().$lc;return
false;}if($Rb){redirect($da,$wa.$lc);}return
true;}function
queries($j=null){global$h;static$La=array();if(!isset($j)){return
implode(";\n",$La);}$La[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$h->query($j);}function
apply_queries($j,$A,$Yd='table'){foreach($A
as$e){if(!queries("$j ".$Yd($e))){return
false;}}return
true;}function
queries_redirect($da,$wa,$Rb){return
query_redirect(queries(),$da,$wa,$Rb,false,!$Rb);}function
remove_from_uri($Ea=""){return
substr(preg_replace("~(?<=[?&])($Ea".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($P,$Wd){return" ".($P==$Wd?$P+1:'<a href="'.h(remove_from_uri("page").($P?"&page=$P":"")).'">'.($P+1)."</a>");}function
get_file($d,$oc=false){$ta=$_FILES[$d];if(!$ta||$ta["error"]){return$ta["error"];}$b=file_get_contents($oc&&ereg('\\.gz$',$ta["name"])?"compress.zlib://$ta[tmp_name]":($oc&&ereg('\\.bz2$',$ta["name"])?"compress.bzip2://$ta[tmp_name]":$ta["tmp_name"]));if($oc){$Jc=substr($b,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Jc,$ie)){$b=iconv("utf-16","utf-8",$b);}elseif($Jc=="\xEF\xBB\xBF"){$b=substr($b,3);}}return$b;}function
upload_error($q){$Ic=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?lang(1).($Ic?" ".lang(2,$Ic):""):lang(3));}function
repeat_pattern($W,$oa){return
str_repeat("$W{0,65535}",$oa/65535)."$W{0,".($oa
%
65535)."}";}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($y,$oa=80,$Vd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$oa).")($)?)u",$y,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$oa).")($)?)",$y,$k);}return
h($k[1]).$Vd.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Oa,$Sd=array()){while(list($d,$a)=each($Oa)){if(is_array($a)){foreach($a
as$va=>$s){$Oa[$d."[$va]"]=$s;}}elseif(!in_array($d,$Sd)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($e){global$l;$b=array();foreach($l->foreignKeys($e)as$K){foreach($K["source"]as$a){$b[$a][]=$K;}}return$b;}function
enum_input($C,$ha,$g,$m,$rc=null){global$l;preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ga);$b=(isset($rc)?"<label><input type='$C'$ha value='$rc'".((is_array($m)?in_array($rc,$m):$m===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($ga[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$xb=(is_int($m)?$m==$p+1:(is_array($m)?in_array($p+1,$m):$m===$a));$b.=" <label><input type='$C'$ha value='".($p+1)."'".($xb?' checked':'').'>'.h($l->editVal($a,$g)).'</label>';}return$b;}function
input($g,$m,$M){global$aa,$l,$pa;$f=h(bracket_escape($g["field"]));echo"<td class='function'>";$wd=($pa=="mssql"&&$g["auto_increment"]);if($wd&&!$_POST["save"]){$M=null;}$ia=(isset($_GET["select"])||$wd?array("orig"=>lang(5)):array())+$l->editFunctions($g);$ha=" name='fields[$f]'";if($g["type"]=="enum"){echo
nbsp($ia[""])."<td>".$l->editInput($_GET["edit"],$g,$ha,$m);}else{$Aa=0;foreach($ia
as$d=>$a){if($d===""||!$a){break;}$Aa++;}$Ta=($Aa?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($g["field"])))."]']; if ($Aa > f.selectedIndex) f.selectedIndex = $Aa;\"":"");$ha.=$Ta;echo(count($ia)>1?html_select("function[$f]",$ia,!isset($M)||in_array($M,$ia)||isset($ia[$M])?$M:"","functionChange(this);"):nbsp(reset($ia))).'<td>';$qd=$l->editInput($_GET["edit"],$g,$ha,$m);if($qd!=""){echo$qd;}elseif($g["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ga);foreach($ga[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$xb=(is_int($m)?($m>>$p)&1:in_array($a,explode(",",$m),true));echo" <label><input type='checkbox' name='fields[$f][$p]' value='".(1<<$p)."'".($xb?' checked':'')."$Ta>".h($l->editVal($a,$g)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Ta>";}elseif(ereg('text|lob',$g["type"])){echo"<textarea ".($pa!="sqlite"||ereg("\n",$m)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ha>".h($m).'</textarea>';}else{$tc=(!ereg('int',$g["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$g["length"],$k)?((ereg("binary",$g["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$g["unsigned"]?1:0)):($aa[$g["type"]]?$aa[$g["type"]]+($g["unsigned"]?0:1):0));echo"<input value='".h($m)."'".($tc?" maxlength='$tc'":"").(ereg('char|binary',$g["type"])&&$tc>20?" size='40'":"")."$ha>";}}}function
process_input($g){global$l;$B=bracket_escape($g["field"]);$M=$_POST["function"][$B];$m=$_POST["fields"][$B];if($g["type"]=="enum"){if($m==-1){return
false;}if($m==""){return"NULL";}return+$m;}if($g["auto_increment"]&&$m==""){return
null;}if($M=="orig"){return($g["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($g["field"]):false);}if($M=="NULL"){return"NULL";}if($g["type"]=="set"){return
array_sum((array)$m);}if(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){$ta=get_file("fields-$B");if(!is_string($ta)){return
false;}return
q($ta);}return$l->processInput($g,$m,$M);}function
search_tables(){global$l,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$uc=false;foreach(table_status()as$e=>$E){$f=$l->tableName($E);if(isset($E["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($e,$_POST["tables"]))){$i=$h->query("SELECT".limit("1 FROM ".table($e)," WHERE ".implode(" AND ",$l->selectSearchProcess(fields($e),array())),1));if($i->fetch_row()){if(!$uc){echo"<ul>\n";$uc=true;}echo"<li><a href='".h(ME."select=".urlencode($e)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($uc?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Mb,$ed=false){global$l;$b=$l->dumpHeaders($Mb,$ed);$cb=$_POST["output"];if($cb!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Mb!=""?$Mb:(SERVER!=""?SERVER:"localhost")).".$b".($cb!="file"&&!ereg('[^0-9a-z]',$cb)?".$cb":""));}session_write_close();return$b;}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$c)."\r\n";}function
apply_sql_function($M,$u){return($M?($M=="unixepoch"?"DATETIME($u, '$M')":($M=="count distinct"?"COUNT(DISTINCT ":strtoupper("$M("))."$u)"):$u);}function
password_file(){$Nb=ini_get("upload_tmp_dir");if(!$Nb){if(function_exists('sys_get_temp_dir')){$Nb=sys_get_temp_dir();}else{$Y=@tempnam("","");if(!$Y){return
false;}$Nb=dirname($Y);unlink($Y);}}$Y="$Nb/adminer.key";$b=@file_get_contents($Y);if($b){return$b;}$xc=@fopen($Y,"w");if($xc){$b=md5(uniqid(mt_rand(),true));fwrite($xc,$b);fclose($xc);}return$b;}function
is_mail($eb){$fd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$W="$fd+(\\.$fd+)*@($Db?\\.)+$Db";return
preg_match("(^$W(,\\s*$W)*\$)i",$eb);}function
is_url($y){$Db='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Db?\\.)+$Db(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$y,$k)?strtolower($k[1]):"");}global$l,$h,$ya,$Ib,$Cc,$q,$ia,$Jb,$Hb,$nd,$pa,$U,$Xa,$Yb,$Ia,$za,$J,$aa,$Gb,$dc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Hb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Cb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Hb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Cb[]=true;}call_user_func_array('session_set_cookie_params',$Cb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$gc);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Xa=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
get_lang(){global$U;return$U;}function
lang($B,$S=null){global$U,$J;$Eb=$J[$B];if(is_array($Eb)){$xd=($S==1?0:($U=='cs'||$U=='sk'?($S&&$S<5?1:2):($U=='fr'?(!$S?0:1):($U=='pl'?($S
%
10>1&&$S
%
10<5&&$S/10
%
10!=1?1:2):($U=='sl'?($S
%
100==1?0:($S
%
100==2?1:($S
%
100==3||$S
%
100==4?2:3))):($U=='lt'?($S
%
10==1&&$S
%
100!=11?0:($S
%
10>1&&$S/10
%
10!=1?1:2)):($U=='ru'?($S
%
10==1&&$S
%
100!=11?0:($S
%
10>1&&$S
%
10<5&&$S/10
%
10!=1?1:2)):1)))))));$Eb=$Eb[$xd];}$vd=func_get_args();array_shift($vd);return
vsprintf((isset($Eb)?$Eb:$B),$vd);}function
switch_lang(){global$U,$Xa;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$Xa,$U,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$U="en";if(isset($Xa[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$U=$_COOKIE["adminer_lang"];}elseif(isset($Xa[$_SESSION["lang"]])){$U=$_SESSION["lang"];}else{$ec=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ga,PREG_SET_ORDER);foreach($ga
as$k){$ec[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($ec);foreach($ec
as$d=>$fc){if(isset($Xa[$d])){$U=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($ec[$d])&&isset($Xa[$d])){$U=$d;break;}}}switch($U){case"en":$J=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','ltr','Resend POST data?','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','No rows.','edit','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$J=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','ltr','Znovu odeslat POST data?','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','Žádné řádky.','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$J=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','ltr','Znovu poslať POST data?','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','Žiadne riadky.','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Upraviť všetko');break;case"nl":$J=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','ltr','POST data opnieuw verzenden','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','Geen rijen.','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','.','Alles bewerken');break;case"es":$J=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','ltr','Volver a enviar POST data?','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','No existen registros.','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros',' ','Editar todos');break;case"de":$J=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','ltr','POST data noch einmal senden ?','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','Keine Daten.','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Alle ändern');break;case"fr":$J=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Éditeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','ltr','Renvoyer les données POST ?','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','Aucun résultat.','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes',',','Tout modifier');break;case"it":$J=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','ltr','Reinvio i dati POST?','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','Nessuna riga.','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','.','Modifica tutto');break;case"et":$J=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','ltr','Saada POST andmed uuesti?','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','Sissekanded puuduvad.','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Muuda kõiki');break;case"hu":$J=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválasztás','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','óó:pp:mm','[yyyy].m.d','Kilépés','ltr','Újraküldi a POST adatokat?','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','Nincs megjeleníthető eredmény.','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Összes szerkesztése');break;case"pl":$J=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','ltr','Wysłać dane ponownie?','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','Brak rekordów.','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów',' ','Zmień typ');break;case"ca":$J=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','ltr','Torna a enviar les dades POST?','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','No hi ha cap registre.','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d registre','%d registres'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files',',','Edita-ho tot');break;case"pt":$J=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Editor','Usuario','Senha','Entrar','Salvar Senha','Novo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','ltr','Resend POST data?','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','Não existem registros.','modificar','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros',' ','Esquema inválido.');break;case"sl":$J=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','ltr','Resend POST data?','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','Ni vrstic.','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic',' ','Spremeni tip');break;case"lt":$J=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Redaktorius','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Naujas įrašas','Paskutinis puslapis',array('%d baitas','%d baigai','%d baitų'),'$1-$3-$5','Ieškoti','visur','Rikiuoti','Limitas','Veiksmas','Atrinkti','El. paštas','Nuo','Antraštė','Įrašyti','Priedai','Siųsti',array('Išsiųstas %d laiškas.','Išsiųsti %d laiškai.','Išsiųsta %d laiškų.'),'dabar','HH:MM:SS','[yyyy]-mm-dd','Atsijungti','ltr','Persiųsti POST duomenis?','Serveris','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Redaguoti','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','Nėra įrašų.','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis',array('%d įrašas','%d įrašai','%d įrašų'),'visas rezultatas','Klonuoti','Eksportas','Importas','Ieškoti duomenų lentelėse','Lentelė','Įrašai',' ','Keisti tipą');break;case"tr":$J=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','ltr','Resend POST data?','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','Sıra yok.','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)',' ','Tür değiştir');break;case"ro":$J=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Editor','Nume de utilizator','Parola','Intră','Logare permanentă','Înscriere nouă','Ultima pagină',array('%d octet','%d octeți'),'$5.$3.$1','Căutare','oriunde','Sortare','Limit','Acțiune','Selectează','Poșta electronică','De la','Pentru','Inserează','Fișiere atașate','Trimite',array('A fost trimisă %d scrisoare.','Au fost trimise %d scrisori.'),'acum','HH:MM:SS','dd.mm.[yyyy]','Eșire','ltr','Retrimite datele POST?','Server','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Editează','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','Nu sunt înscrieri.','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima',array('%d înscriere','%d înscrieri'),'tot rezultatul','Clonează','Export','Importă','Caută în tabele','Tabel','Înscrieri',',','Editează tot');break;case"ru":$J=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','ЧЧ:ММ:СС','дд.мм.[гггг]','Выйти','ltr','Еще раз послать данные POST запроса?','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','Нет записей.','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк',' ','Редактировать всё');break;case"zh":$J=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','ltr','重新发送 POST 数据？','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','没有行。','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数',',','编辑全部');break;case"zh-tw":$J=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','ltr','重新發送表單資料?','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','沒有行。','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數',',','編輯全部');break;case"ja":$J=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','時:分:秒','[yyyy].mm.dd','ログアウト','ltr','再送信しますか？','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','行がありません','編集','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数',',','すべて編集');break;case"ta":$J=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','ltr','POST data வை மீண்டும் அனுப்பவா?','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','வ‌ரிசை இல்லை.','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அனைத்தையும் தொகு');break;case"ar":$J=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','rtl','هل تود إعادة إرسال بيانات POST ؟','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','لا توجد نتائج.','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر',',','تعديل الكل');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Rd,$F,$G,$ee='auth_error'){set_exception_handler($ee);parent::__construct($Rd,$F,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ga=false){$i=parent::query($j);if(!$i){$fe=$this->errorInfo();$this->error=$fe[2];return
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
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$ya=array();$ya["sqlite"]="SQLite 3";$ya["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Fb=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Y){$this->_link=new
SQLite3($Y);$Dc=$this->_link->version();$this->server_info=$Dc["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($y){return"'".$this->_link->escapeString($y)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetchArray();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$u=$this->_offset++;$C=$this->_result->columnType($u);return(object)array("name"=>$this->_result->columnName($u),"type"=>$C,"charsetnr"=>($C==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Y){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Y);}function
query($j,$Ga=false){$Ld=($Ga?"unbufferedQuery":"query");$i=@$this->_link->$Ld($j,SQLITE_BOTH,$q);if(!$i){$this->error=$q;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($y){return"'".sqlite_escape_string($y)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetch();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$b=array();foreach($c
as$d=>$a){$b[($d[0]=='"'?idf_unescape($d):$d)]=$a;}return$b;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$W='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($W\\.)?$W\$~",$f,$k)){$e=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$e,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Y){$this->dsn(DRIVER.":$Y","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Y){if(is_readable($Y)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$Y)?$Y:dirname($_SERVER["SCRIPT_FILENAME"])."/$Y")." AS a")){$this->Min_SQLite($Y);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}}function
idf_escape($B){return'"'.str_replace('"','""',$B).'"';}function
table($B){return
idf_escape($B);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$n,$_,$X=0,$qa=" "){return" $j$n".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$n){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$n,1):" $j$n");}function
db_collation($v,$lb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($Q){return
array();}function
table_status($f=""){$b=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$c){$c["Auto_increment"]="";$b[$c["Name"]]=$c;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$c){$b[$c["name"]]["Auto_increment"]=$c["seq"];}return($f!=""?$b[$f]:$b);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($e){$b=array();foreach(get_rows("PRAGMA table_info(".table($e).")")as$c){$C=strtolower($c["type"]);$hb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$C)?"integer":(eregi("char|clob|text",$C)?"text":(eregi("blob",$C)?"blob":(eregi("real|floa|doub",$C)?"real":"numeric")))),"full_type"=>$C,"default"=>(ereg("'(.*)'",$hb,$k)?str_replace("''","'",$k[1]):($hb=="NULL"?null:$hb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$C)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($e,$T=null){$b=array();$xa=array();foreach(fields($e)as$g){if($g["primary"]){$xa[]=$g["field"];}}if($xa){$b[""]=array("type"=>"PRIMARY","columns"=>$xa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($e).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$_d){$b[$c["name"]]["columns"][]=$_d["name"];}}return$b;}function
foreign_keys($e){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($e).")")as$c){$K=&$b[$c["id"]];if(!$K){$K=$c;}$K["source"][]=$c["from"];$K["target"][]=$c["to"];}return$b;}function
view($f){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($v){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($a){return
q($a);}function
check_sqlite_name($f){global$h;$Hc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Hc)\$~",$f)){$h->error=lang(9,str_replace("|",", ",$Hc));return
false;}return
true;}function
create_database($v,$I){global$h;if(file_exists($v)){$h->error=lang(10);return
false;}if(!check_sqlite_name($v)){return
false;}$w=new
Min_SQLite($v);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($Q){global$h;$h->Min_SQLite(":memory:");foreach($Q
as$v){if(!@unlink($v)){$h->error=lang(10);return
false;}}return
true;}function
rename_database($f,$I){global$h;if(!check_sqlite_name($f)){return
false;}$h->Min_SQLite(":memory:");$h->error=lang(10);return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($e,$f,$t,$Ja,$Ya,$jb,$I,$_a,$Ab){$r=array();foreach($t
as$g){if($g[1]){$r[]=($e!=""&&$g[0]==""?"ADD ":"  ").implode($g[1]);}}$r=array_merge($r,$Ja);if($e!=""){foreach($r
as$a){if(!queries("ALTER TABLE ".table($e)." $a")){return
false;}}if($e!=$f&&!queries("ALTER TABLE ".table($e)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)")){return
false;}if($_a){queries("UPDATE sqlite_sequence SET seq = $_a WHERE name = ".q($f));}return
true;}function
alter_indexes($e,$r){foreach($r
as$a){if(!queries($a[2]=="DROP"?"DROP INDEX ".idf_escape($a[1]):"CREATE $a[0] ".($a[0]!="INDEX"?"INDEX ":"").idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e)." $a[2]")){return
false;}}return
true;}function
truncate_tables($A){return
apply_queries("DELETE FROM",$A);}function
drop_views($ba){return
apply_queries("DROP VIEW",$ba);}function
drop_tables($A){return
apply_queries("DROP TABLE",$A);}function
move_tables($A,$ba,$V){return
false;}function
trigger($f){global$h;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($e){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($e))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$C){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($e,$o,$xa){return
queries("REPLACE INTO ".table($e)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ae){return
true;}function
create_sql($e,$_a){global$h;return$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($e));}function
truncate_sql($e){return"DELETE FROM ".table($e);}function
use_sql($R){}function
trigger_sql($e,$zb){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($e)));}function
show_variables(){global$h;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$h->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$Ed){list($d,$a)=explode("=",$Ed,2);$b[$d]=$a;}return$b;}function
support($Ma){return
ereg('^(view|trigger|variables|status|dump)$',$Ma);}$pa="sqlite";$aa=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ia=array_keys($aa);$Gb=array();$Bb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ia=array("hex","length","lower","round","unixepoch","upper");$Jb=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ya["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Fb=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($yd,$q){if(ini_bool("html_errors")){$q=html_entity_decode(strip_tags($q));}$q=ereg_replace('^[^:]*: ','',$q);$this->error=$q;}function
connect($D,$F,$G){global$l;$v=$l->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' user='".addcslashes($F,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect($this->_string.($v!=""?" dbname='".addcslashes($v,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$v!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Dc=pg_version($this->_link);$this->server_info=$Dc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($y){return"'".pg_escape_string($this->_link,$y)."'";}function
select_db($R){global$l;if($R==$l->database()){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($R,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Ga=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$g=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
pg_fetch_result($i->_result,0,$g);}}class
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
connect($D,$F,$G){global$l;$v=$l->database();$y="pgsql:host='".str_replace(":","' port='",addcslashes($D,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($y.($v!=""?" dbname='".addcslashes($v,"'\\")."'":""),$F,$G);return
true;}function
select_db($R){global$l;return($l->database()==$R);}function
close(){}}}function
idf_escape($B){return'"'.str_replace('"','""',$B).'"';}function
table($B){return
idf_escape($B);}function
connect(){global$l;$h=new
Min_DB;$la=$l->credentials();if($h->connect($la[0],$la[1],$la[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$n,$_,$X=0,$qa=" "){return" $j$n".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$n){return" $j$n";}function
db_collation($v,$lb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($Q){return
array();}function
table_status($f=""){$b=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$c){$b[$c["Name"]]=$c;}return($f!=""?$b[$f]:$b);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($e){$b=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($e)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$c){ereg('(.*)(\\((.*)\\))?',$c["full_type"],$k);list(,$c["type"],,$c["length"])=$k;$c["full_type"]=$c["type"].($c["length"]?"($c[length])":"");$c["null"]=($c["attnotnull"]=="f");$c["auto_increment"]=eregi("^nextval\\(",$c["default"]);$c["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$c["default"],$k)){$c["default"]=($k[1][0]=="'"?idf_unescape($k[1]):$k[1]);}$b[$c["field"]]=$c;}return$b;}function
indexes($e,$T=null){global$h;if(!is_object($T)){$T=$h;}$b=array();$ld=$T->result("SELECT oid FROM pg_class WHERE relname = ".q($e));$L=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $ld AND attnum > 0",$T);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $ld AND ci.oid = i.indexrelid",$T)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Hd){$b[$c["relname"]]["columns"][]=$L[$Hd];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($e){$b=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, unique_constraint_schema AS ns, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.constraint_schema = current_schema() AND tc.table_name = ".q($e))as$c){$K=&$b[$c["constraint_name"]];if(!$K){$K=$c;}$K["source"][]=$c["column_name"];$K["target"][]=$c["ref"];}return$b;}function
view($f){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($v){return($v=="information_schema");}function
error(){global$h;$b=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$b,$k)){$b=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($b);}function
exact_value($a){return
q($a);}function
create_database($v,$I){return
queries("CREATE DATABASE ".idf_escape($v).($I?" ENCODING ".idf_escape($I):""));}function
drop_databases($Q){global$h;$h->close();return
apply_queries("DROP DATABASE",$Q,'idf_escape');}function
rename_database($f,$I){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($e,$f,$t,$Ja,$Ya,$jb,$I,$_a,$Ab){$r=array();$La=array();foreach($t
as$g){$u=idf_escape($g[0]);$a=$g[1];if(!$a){$r[]="DROP $u";}else{$nc=$a[5];unset($a[5]);if(isset($a[6])&&$g[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($g[0]==""){$r[]=($e!=""?"ADD ":"  ").implode($a);}else{if($u!=$a[0]){$La[]="ALTER TABLE ".table($e)." RENAME $u TO $a[0]";}$r[]="ALTER $u TYPE$a[1]";if(!$a[6]){$r[]="ALTER $u ".($a[3]?"SET$a[3]":"DROP DEFAULT");$r[]="ALTER $u ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($g[0]!=""||$nc!=""){$La[]="COMMENT ON COLUMN ".table($e).".$a[0] IS ".($nc!=""?substr($nc,9):"''");}}}$r=array_merge($r,$Ja);if($e==""){array_unshift($La,"CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)");}elseif($r){array_unshift($La,"ALTER TABLE ".table($e)."\n".implode(",\n",$r));}if($e!=""&&$e!=$f){$La[]="ALTER TABLE ".table($e)." RENAME TO ".table($f);}if($e!=""||$Ya!=""){$La[]="COMMENT ON TABLE ".table($f)." IS ".q($Ya);}if($_a!=""){}foreach($La
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($e,$r){$Ra=array();$Fa=array();foreach($r
as$a){if($a[0]!="INDEX"){$Ra[]=($a[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").$a[2]);}elseif($a[2]=="DROP"){$Fa[]=idf_escape($a[1]);}elseif(!queries("CREATE INDEX ".idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e)." $a[2]")){return
false;}}return((!$Ra||queries("ALTER TABLE ".table($e).implode(",",$Ra)))&&(!$Fa||queries("DROP INDEX ".implode(", ",$Fa))));}function
truncate_tables($A){return
queries("TRUNCATE ".implode(", ",array_map('table',$A)));return
true;}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$ba,$V){foreach($A
as$e){if(!queries("ALTER TABLE ".table($e)." SET SCHEMA ".idf_escape($V))){return
false;}}foreach($ba
as$e){if(!queries("ALTER VIEW ".table($e)." SET SCHEMA ".idf_escape($V))){return
false;}}return
true;}function
trigger($f){$z=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($z);}function
triggers($e){$b=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($e))as$c){$b[$c["trigger_name"]]=array($c["condition_timing"],$c["event_manipulation"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($e,$o,$xa){global$h;$Z=array();$n=array();foreach($o
as$d=>$a){$Z[]="$d = $a";if(isset($xa[idf_unescape($d)])){$n[]="$d = $a";}}return($n&&queries("UPDATE ".table($e)." SET ".implode(", ",$Z)." WHERE ".implode(" AND ",$n))&&$h->affected_rows)||queries("INSERT INTO ".table($e)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($Ac){global$h,$aa,$Ia;$b=$h->query("SET search_path TO ".idf_escape($Ac));foreach(types()as$C){if(!isset($aa[$C])){$aa[$C]=0;$Ia[lang(11)][]=$C;}}return$b;}function
use_sql($R){return"\connect ".idf_escape($R);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($Ma){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Ma);}$pa="pgsql";$aa=array();$Ia=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$aa+=$a;$Ia[$d]=array_keys($a);}$Gb=array();$Bb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ia=array("char_length","lower","round","to_hex","to_timestamp","upper");$Jb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ya["oracle"]="Oracle";if(isset($_GET["oracle"])){$Fb=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($yd,$q){if(ini_bool("html_errors")){$q=html_entity_decode(strip_tags($q));}$q=ereg_replace('^[^:]*: ','',$q);$this->error=$q;}function
connect($D,$F,$G){$this->_link=@oci_new_connect($F,$G,$D,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$q=oci_error();$this->error=$q["message"];return
false;}function
quote($y){return"'".str_replace("'","''",$y)."'";}function
select_db($R){return
true;}function
query($j,$Ga=false){$i=oci_parse($this->_link,$j);if(!$i){$q=oci_error($this->_link);$this->error=$q["message"];return
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
fetch_field(){$u=$this->_offset++;$b=new
stdClass;$b->name=oci_field_name($this->_result,$u);$b->orgname=$b->name;$b->type=oci_field_type($this->_result,$u);$b->charsetnr=(ereg("raw|blob|bfile",$b->type)?63:0);return$b;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($D,$F,$G){$this->dsn("oci:dbname=//$D;charset=AL32UTF8",$F,$G);return
true;}function
select_db($R){return
true;}}}function
idf_escape($B){return'"'.str_replace('"','""',$B).'"';}function
table($B){return
idf_escape($B);}function
connect(){global$l;$h=new
Min_DB;$la=$l->credentials();if($h->connect($la[0],$la[1],$la[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$n,$_,$X=0,$qa=" "){return($X?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $j$n) t WHERE rownum <= ".($_+$X).") WHERE rnum > $X":(isset($_)?" * FROM (SELECT $j$n) WHERE rownum <= ".($_+$X):" $j$n"));}function
limit1($j,$n){return" $j$n";}function
db_collation($v,$lb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($Q){return
array();}function
table_status($f=""){$b=array();$sb=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $sb":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $sb":""))as$c){if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($e){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($e)." ORDER BY column_id")as$c){$C=$c["DATA_TYPE"];$oa="$c[DATA_PRECISION],$c[DATA_SCALE]";if($oa==","){$oa=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$C.($oa?"($oa)":""),"type"=>strtolower($C),"length"=>$oa,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($e,$T=null){$b=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($e)."
ORDER BY uc.constraint_type, uic.column_position",$T)as$c){$b[$c["INDEX_NAME"]]["type"]=($c["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($c["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$b[$c["INDEX_NAME"]]["columns"][]=$c["COLUMN_NAME"];$b[$c["INDEX_NAME"]]["lengths"][]=($c["CHAR_LENGTH"]&&$c["CHAR_LENGTH"]!=$c["COLUMN_LENGTH"]?$c["CHAR_LENGTH"]:null);}return$b;}function
view($f){$z=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($z);}function
collations(){return
array();}function
information_schema($v){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($a){return
q($a);}function
explain($h,$j){$h->query("EXPLAIN PLAN FOR $j");return$h->query("SELECT * FROM plan_table");}function
alter_table($e,$f,$t,$Ja,$Ya,$jb,$I,$_a,$Ab){$r=$Fa=array();foreach($t
as$g){$a=$g[1];if($a&&$g[0]!=""&&idf_escape($g[0])!=$a[0]){queries("ALTER TABLE ".table($e)." RENAME COLUMN ".idf_escape($g[0])." TO $a[0]");}if($a){$r[]=($e!=""?($g[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($e!=""?")":"");}else{$Fa[]=idf_escape($g[0]);}}if($e==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)");}return(!$r||queries("ALTER TABLE ".table($e)."\n".implode("\n",$r)))&&(!$Fa||queries("ALTER TABLE ".table($e)." DROP (".implode(", ",$Fa).")"))&&($e==$f||queries("ALTER TABLE ".table($e)." RENAME TO ".table($f)));}function
foreign_keys($e){return
array();}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($ba){return
apply_queries("DROP VIEW",$ba);}function
drop_tables($A){return
apply_queries("DROP TABLE",$A);}function
begin(){return
true;}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($ae){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$z=get_rows('SELECT * FROM v$instance');return
reset($z);}function
support($Ma){return
ereg("view|drop_col|variables|status",$Ma);}$pa="oracle";$aa=array();$Ia=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$aa+=$a;$Ia[$d]=array_keys($a);}$Gb=array();$Bb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ia=array("length","lower","round","upper");$Jb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ya["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Fb=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$q){$this->error.="$q[message]\n";}$this->error=rtrim($this->error);}function
connect($D,$F,$G){$this->_link=@sqlsrv_connect($D,array("UID"=>$F,"PWD"=>$G));if($this->_link){$Gd=sqlsrv_server_info($this->_link);$this->server_info=$Gd['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($y){return"'".str_replace("'","''",$y)."'";}function
select_db($R){return$this->query("USE $R");}function
query($j,$Ga=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
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
seek($X){for($p=0;$p<$X;$p++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($D,$F,$G){$this->_link=@mssql_connect($D,$F,$G);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($y){return"'".str_replace("'","''",$y)."'";}function
select_db($R){return
mssql_select_db($R);}function
query($j,$Ga=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
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
seek($X){mssql_data_seek($this->_result,$X);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($B){return"[".str_replace("]","]]",$B)."]";}function
table($B){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($B);}function
connect(){global$l;$h=new
Min_DB;$la=$l->credentials();if($h->connect($la[0],$la[1],$la[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$n,$_,$X=0,$qa=" "){return(isset($_)?" TOP (".($_+$X).")":"")." $j$n";}function
limit1($j,$n){return
limit($j,$n,1);}function
db_collation($v,$lb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($v));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($Q){global$h;$b=array();foreach($Q
as$v){$h->select_db($v);$b[$v]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$c){if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($E){return$E["Engine"]=="VIEW";}function
fk_support($E){return
true;}function
fields($e){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($e))as$c){$C=$c["type"];$oa=(ereg("char|binary",$C)?$c["max_length"]:($C=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$C.($oa?"($oa)":""),"type"=>$C,"length"=>$oa,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($e,$T=null){$b=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($e),$T)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
view($f){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($f))));}function
collations(){$b=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$I){$b[ereg_replace("_.*","",$I)][]=$I;}return$b;}function
information_schema($v){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
exact_value($a){return
q($a);}function
create_database($v,$I){return
queries("CREATE DATABASE ".idf_escape($v).(eregi('^[a-z0-9_]+$',$I)?" COLLATE $I":""));}function
drop_databases($Q){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$Q)));}function
rename_database($f,$I){if(eregi('^[a-z0-9_]+$',$I)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $I");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($e,$f,$t,$Ja,$Ya,$jb,$I,$_a,$Ab){$r=array();foreach($t
as$g){$u=idf_escape($g[0]);$a=$g[1];if(!$a){$r["DROP"][]=" COLUMN $u";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($g[0]==""){$r["ADD"][]="\n  ".implode("",$a).($e==""?substr($Ja[$a[0]],16+strlen($a[0])):"");}else{unset($a[6]);if($u!=$a[0]){queries("EXEC sp_rename ".q(table($e).".$u").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$r["ALTER COLUMN ".implode("",$a)][]="";}}}if($e==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$r["ADD"])."\n)");}if($e!=$f){queries("EXEC sp_rename ".q(table($e)).", ".q($f));}if($Ja){$r[""]=$Ja;}foreach($r
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($f)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($e,$r){$ea=array();$Fa=array();foreach($r
as$a){if($a[2]=="DROP"){if($a[0]=="PRIMARY"){$Fa[]=idf_escape($a[1]);}else{$ea[]=idf_escape($a[1])." ON ".table($e);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE $a[0] ".($a[0]!="INDEX"?"INDEX ":"").idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e):"ALTER TABLE ".table($e)." ADD PRIMARY KEY")." $a[2]")){return
false;}}return(!$ea||queries("DROP INDEX ".implode(", ",$ea)))&&(!$Fa||queries("ALTER TABLE ".table($e)." DROP ".implode(", ",$Fa)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($e,$o,$xa){$Z=array();$n=array();foreach($o
as$d=>$a){$Z[]="$d = $a";if(isset($xa[idf_unescape($d)])){$n[]="$d = $a";}}return
queries("MERGE ".table($e)." USING (VALUES(".implode(", ",$o).")) AS source (c".implode(", c",range(1,count($o))).") ON ".implode(" AND ",$n)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Z)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$j){$h->query("SET SHOWPLAN_ALL ON");$b=$h->query($j);$h->query("SET SHOWPLAN_ALL OFF");return$b;}function
foreign_keys($e){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($e))as$c){$K=&$b[$c["FK_NAME"]];$K["table"]=$c["PKTABLE_NAME"];$K["source"][]=$c["FKCOLUMN_NAME"];$K["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$ba,$V){return
apply_queries("ALTER SCHEMA ".idf_escape($V)." TRANSFER",array_merge($A,$ba));}function
trigger($f){$z=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$b=reset($z);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
triggers($e){$b=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($e))as$c){$b[$c["name"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!=""){return$_GET["ns"];}return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($Ac){return
true;}function
use_sql($R){return"USE ".idf_escape($R);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Ma){return
ereg('^(scheme|trigger|view|drop_col)$',$Ma);}$pa="mssql";$aa=array();$Ia=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$aa+=$a;$Ia[$d]=array_keys($a);}$Gb=array();$Bb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ia=array("len","lower","round","upper");$Jb=array("avg","count","count distinct","max","min","sum");$Ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ya=array("server"=>"MySQL")+$ya;if(!defined("DRIVER")){$Fb=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$F,$G){mysqli_report(MYSQLI_REPORT_OFF);list($Kd,$Pb)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$Kd:ini_get("mysqli.default_host")),($D.$F!=""?$F:ini_get("mysqli.default_user")),($D.$F.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($Pb)?$Pb:ini_get("mysqli.default_port")),(!is_numeric($Pb)?$Pb:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$g];}function
quote($y){return"'".$this->escape_string($y)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$F,$G){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$F"!=""?$F:ini_get("mysql.default_user")),("$D$F$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($y){return"'".mysql_real_escape_string($y,$this->_link)."'";}function
select_db($R){return
mysql_select_db($R,$this->_link);}function
query($j,$Ga=false){$i=@($Ga?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$g=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
mysql_result($i->_result,0,$g);}}class
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
connect($D,$F,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$F,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($R){return$this->query("USE ".idf_escape($R));}function
query($j,$Ga=false){$this->setAttribute(1000,!$Ga);return
parent::query($j,$Ga);}}}function
idf_escape($B){return"`".str_replace("`","``",$B)."`";}function
table($B){return
idf_escape($B);}function
connect(){global$l;$h=new
Min_DB;$la=$l->credentials();if($h->connect($la[0],$la[1],$la[2])){$h->query("SET sql_quote_show_create = 1");return$h;}return$h->error;}function
get_databases($zd=true){global$h;$b=&get_session("dbs");if(!isset($b)){if($zd){restart_session();ob_flush();flush();}$b=get_vals($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($j,$n,$_,$X=0,$qa=" "){return" $j$n".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$n){return
limit($j,$n,1);}function
db_collation($v,$lb){global$h;$b=null;$Ra=$h->result("SHOW CREATE DATABASE ".idf_escape($v),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$k)){$b=$lb[$k[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Q){$b=array();foreach($Q
as$v){$b[$v]=count(get_vals("SHOW TABLES IN ".idf_escape($v)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($E){return!isset($E["Rows"]);}function
fk_support($E){return
eregi("InnoDB|IBMDB2I",$E["Engine"]);}function
fields($e){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($e))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($e,$T=null){$b=array();foreach(get_rows("SHOW INDEX FROM ".table($e),$T)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($e){global$h,$Yb;static$W='`(?:[^`]|``)+`';$b=array();$pd=$h->result("SHOW CREATE TABLE ".table($e),1);if($pd){preg_match_all("~CONSTRAINT ($W) FOREIGN KEY \\(((?:$W,? ?)+)\\) REFERENCES ($W)(?:\\.($W))? \\(((?:$W,? ?)+)\\)(?: ON DELETE (".implode("|",$Yb)."))?(?: ON UPDATE (".implode("|",$Yb)."))?~",$pd,$ga,PREG_SET_ORDER);foreach($ga
as$k){preg_match_all("~$W~",$k[2],$Gc);preg_match_all("~$W~",$k[5],$V);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Gc[0]),"target"=>array_map('idf_unescape',$V[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
view($f){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$c){if($c["Default"]){$b[$c["Charset"]][-1]=$c["Collation"];}else{$b[$c["Charset"]][]=$c["Collation"];}}ksort($b);foreach($b
as$d=>$a){asort($b[$d]);}return$b;}function
information_schema($v){global$h;return($h->server_info>=5&&$v=="information_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($v,$I){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($v).($I?" COLLATE ".q($I):""));}function
drop_databases($Q){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Q,'idf_escape');}function
rename_database($f,$I){if(create_database($f,$I)){$ib=array();foreach(tables_list()as$e=>$C){$ib[]=table($e)." TO ".idf_escape($f).".".table($e);}if(!$ib||queries("RENAME TABLE ".implode(", ",$ib))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Fc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$ea){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$ea["columns"],true)){$Fc="";break;}if($ea["type"]=="PRIMARY"){$Fc=" UNIQUE";}}}return" AUTO_INCREMENT$Fc";}function
alter_table($e,$f,$t,$Ja,$Ya,$jb,$I,$_a,$Ab){$r=array();foreach($t
as$g){$r[]=($g[1]?($e!=""?($g[0]!=""?"CHANGE ".idf_escape($g[0]):"ADD"):" ")." ".implode($g[1]).($e!=""?" $g[2]":""):"DROP ".idf_escape($g[0]));}$r=array_merge($r,$Ja);$kd="COMMENT=".q($Ya).($jb?" ENGINE=".q($jb):"").($I?" COLLATE ".q($I):"").($_a!=""?" AUTO_INCREMENT=$_a":"").$Ab;if($e==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n) $kd");}if($e!=$f){$r[]="RENAME TO ".table($f);}$r[]=$kd;return
queries("ALTER TABLE ".table($e)."\n".implode(",\n",$r));}function
alter_indexes($e,$r){foreach($r
as$d=>$a){$r[$d]=($a[2]=="DROP"?"\nDROP INDEX ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").($a[1]!=""?idf_escape($a[1])." ":"").$a[2]);}return
queries("ALTER TABLE ".table($e).implode(",",$r));}function
truncate_tables($A){return
apply_queries("TRUNCATE TABLE",$A);}function
drop_views($ba){return
queries("DROP VIEW ".implode(", ",array_map('table',$ba)));}function
drop_tables($A){return
queries("DROP TABLE ".implode(", ",array_map('table',$A)));}function
move_tables($A,$ba,$V){$ib=array();foreach(array_merge($A,$ba)as$e){$ib[]=table($e)." TO ".idf_escape($V).".".table($e);}return
queries("RENAME TABLE ".implode(", ",$ib));}function
copy_tables($A,$ba,$V){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($A
as$e){$f=($V==DB?table("copy_$e"):idf_escape($V).".".table($e));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($e))||!queries("INSERT INTO $f SELECT * FROM ".table($e))){return
false;}}foreach($ba
as$e){$f=($V==DB?table("copy_$e"):idf_escape($V).".".table($e));$Dd=view($e);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Dd[select]")){return
false;}}return
true;}function
trigger($f){$z=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($z);}function
triggers($e){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($e,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$C){global$h,$Cc,$nd,$aa;$Cd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$jd="((".implode("|",array_merge(array_keys($aa),$Cd)).")(?:\\s*\\(((?:[^'\")]*|$Cc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$W="\\s*(".($C=="FUNCTION"?"":$nd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$jd";$Ra=$h->result("SHOW CREATE $C ".idf_escape($f),2);preg_match("~\\(((?:$W\\s*,?)*)\\)".($C=="FUNCTION"?"\\s*RETURNS\\s+$jd":"")."\\s*(.*)~is",$Ra,$k);$t=array();preg_match_all("~$W\\s*,?~is",$k[1],$ga,PREG_SET_ORDER);foreach($ga
as$Ea){$f=str_replace("``","`",$Ea[2]).$Ea[3];$t[]=array("field"=>$f,"type"=>strtolower($Ea[5]),"length"=>preg_replace_callback("~$Cc~s",'normalize_enum',$Ea[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Ea[8] $Ea[7]"))),"full_type"=>$Ea[4],"inout"=>strtoupper($Ea[1]),"collation"=>strtolower($Ea[9]),);}if($C!="FUNCTION"){return
array("fields"=>$t,"definition"=>$k[11]);}return
array("fields"=>$t,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
insert_update($e,$o,$xa){foreach($o
as$d=>$a){$o[$d]="$d = $a";}$Z=implode(", ",$o);return
queries("INSERT INTO ".table($e)." SET $Z ON DUPLICATE KEY UPDATE $Z");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ac){return
true;}function
create_sql($e,$_a){global$h;$b=$h->result("SHOW CREATE TABLE ".table($e),1);if(!$_a){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($e){return"TRUNCATE ".table($e);}function
use_sql($R){return"USE ".idf_escape($R);}function
trigger_sql($e,$zb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($e,"%_")),null,"-- ")as$c){$b.="\n".($zb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Ma){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$Ma);}$pa="sql";$aa=array();$Ia=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$aa+=$a;$Ia[$d]=array_keys($a);}$Gb=array("unsigned","zerofill","unsigned zerofill");$Bb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ia=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Jb=array("avg","count","count distinct","group_concat","max","min","sum");$Ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$dc="3.3.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(19)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$h;$Q=get_databases(false);return(!$Q?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Q[(information_schema($Q[0])?1:0)]);}function
headers(){return
true;}function
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
login($he,$G){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($tb){return
h($tb["Comment"]!=""?$tb["Comment"]:$tb["Name"]);}function
fieldName($g,$ra=0){return
h($g["comment"]!=""?$g["comment"]:$g["field"]);}function
selectLinks($tb,$o=""){$x=$tb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($x).$o).'">'.lang(24)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(25)."'>&gt;&gt;</a>\n";}function
foreignKeys($e){return
foreign_keys($e);}function
backwardKeys($e,$Zd){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($e)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$f=$this->tableName(table_status($d));if($f!=""){$sb=preg_quote($Zd);$qa="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$sb$qa(.+)|^(.+?)$qa$sb\$)iu",$f,$k)?$k[2].$k[3]:$f);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($be,$c){foreach($be
as$e=>$rd){foreach($rd["keys"]as$Ua){$w=ME.'select='.urlencode($e);$p=0;foreach($Ua
as$u=>$a){$w.=where_link($p++,$u,$c[$a]);}echo"<a href='".h($w)."'>".h($rd["name"])."</a>";$w=ME.'edit='.urlencode($e);foreach($Ua
as$u=>$a){$w.="&set".urlencode("[".bracket_escape($u)."]")."=".urlencode($c[$a]);}echo"<a href='".h($w)."' title='".lang(24)."'>+</a> ";}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($e){foreach(fields($e)as$g){if(ereg("varchar|character varying",$g["type"])){return
idf_escape($g["field"]);}}return"";}function
rowDescriptions($z,$ub){$b=$z;foreach($z[0]as$d=>$a){if(list($e,$O,$f)=$this->_foreignColumn($ub,$d)){$hd=array();foreach($z
as$c){$hd[$c[$d]]=exact_value($c[$d]);}$ic=$this->_values[$e];if(!$ic){$ic=get_key_vals("SELECT $O, $f FROM ".table($e)." WHERE $O IN (".implode(", ",$hd).")");}foreach($z
as$N=>$c){if(isset($c[$d])){$b[$N][$d]=(string)$ic[$c[$d]];}}}}return$b;}function
selectVal($a,$w,$g){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$g["type"])&&!is_utf8($a)){$b=lang(26,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$w' alt='$b'>";}}if(like_bool($g)&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.1":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.1").'" alt="'.h($a).'">';}if($w){$b="<a href='$w'>$b</a>";}if(!$w&&!like_bool($g)&&ereg('int|float|double|decimal',$g["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$g["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$g){if(ereg('date|timestamp',$g["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(27),$a);}return(ereg("binary",$g["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($H,$L){}function
selectSearchPrint($n,$L,$ca){$n=(array)$_GET["where"];echo'<fieldset><legend>'.lang(28)."</legend><div>\n";$pc=array();foreach($n
as$d=>$a){$pc[$a["col"]]=$d;}$p=0;$t=fields($_GET["select"]);foreach($t
as$f=>$g){$Ka=$L[$f];if(ereg("enum",$g["type"])&&$Ka!=""){$d=$pc[$f];$p--;echo"<div>".h($Ka)."<input type='hidden' name='where[$p][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$p][val][]'",$g,(array)$n[$d]["val"],($g["null"]?0:null)),"</div>\n";unset($L[$f]);}}foreach($L
as$f=>$Ka){$ua=$this->_foreignKeyOptions($_GET["select"],$f);if(is_array($ua)){if($t[$f]["null"]){$ua[0]='('.lang(4).')';}$d=$pc[$f];$p--;echo"<div>".h($Ka)."<input type='hidden' name='where[$p][col]' value='".h($f)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($ua,$n[$d]["val"],true)."</select></div>\n";unset($L[$f]);}}$p=0;foreach($n
as$a){if(($a["col"]==""||$L[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".lang(29).")".optionlist($L,$a["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$p][val]' value='".h($a["val"])."'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='selectAddRow(this);'><option value=''>(".lang(29).")".optionlist($L,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input name='where[$p][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ra,$L,$ca){$vc=array();foreach($ca
as$d=>$ea){$ra=array();foreach($ea["columns"]as$a){$ra[]=$L[$a];}if(count(array_filter($ra,'strlen'))>1&&$d!="PRIMARY"){$vc[$d]=implode(", ",$ra);}}if($vc){echo'<fieldset><legend>'.lang(30)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$vc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(31)."</legend><div>";echo
html_select("limit",array("","30","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($qb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(32)."</legend><div>","<input type='submit' value='".lang(33)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($cc,$L){if($cc){print_fieldset("email",lang(34),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(35).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(36).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$L,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(37)."'>\n";echo"<p>".lang(38).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($cc)==1?'<input type="hidden" name="email_field" value="'.h(key($cc)).'">':html_select("email_field",$cc)),"<input type='submit' name='email' value='".lang(39)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($L,$ca){return
array(array(),array());}function
selectSearchProcess($t,$ca){$b=array();foreach((array)$_GET["where"]as$d=>$n){$Pa=$n["col"];$rb=$n["op"];$a=$n["val"];if(($d<0?"":$Pa).$a!=""){$vb=array();foreach(($Pa!=""?array($Pa=>$t[$Pa]):$t)as$f=>$g){if($Pa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$g["type"])){$f=idf_escape($f);if($Pa!=""&&$g["type"]=="enum"){$vb[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$sd=ereg('char|text|enum|set',$g["type"]);$m=$this->processInput($g,(!$rb&&$sd&&ereg('^[^%]+$',$a)?"%$a%":$a));$vb[]=$f.($m=="NULL"?" IS".($rb==">="?" NOT":"")." $m":(in_array($rb,$this->operators)||$rb=="="?" $rb $m":($sd?" LIKE $m":" IN (".str_replace(",","', '",$m).")")));if($d<0&&$a=="0"){$vb[]="$f IS NULL";}}}}$b[]=($vb?"(".implode(" OR ",$vb).")":"0");}}return$b;}function
selectOrderProcess($t,$ca){$Kb=$_GET["index_order"];if($Kb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Kb!=""?array($ca[$Kb]):$ca)as$ea){if($Kb!=""||$ea["type"]=="INDEX"){$Ka=false;foreach($ea["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Ka=true;break;}}$b=array();foreach($ea["columns"]as$a){$b[]=idf_escape($a).($Ka?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($n,$ub){if($_POST["email_append"]){return
true;}if($_POST["email"]){$td=0;if($_POST["all"]||$_POST["check"]){$g=idf_escape($_POST["email_field"]);$Lb=$_POST["email_subject"];$wa=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Lb.$wa",$ga);$z=get_rows("SELECT DISTINCT $g".($ga[1]?", ".implode(", ",array_map('idf_escape',array_unique($ga[1]))):"")." FROM ".table($_GET["select"])." WHERE $g IS NOT NULL AND $g != ''".($n?" AND ".implode(" AND ",$n):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($z,$ub)as$c){$qc=array('{\\'=>'{');foreach($ga[1]as$a){$qc['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$eb=$c[$_POST["email_field"]];if(is_mail($eb)&&send_mail($eb,strtr($Lb,$qc),strtr($wa,$qc),$_POST["email_from"],$_FILES["email_files"])){$td++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(40,$td));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($g){$b=array();if($g["null"]&&ereg('blob',$g["type"])){$b["NULL"]=lang(4);}$b[""]=($g["null"]||$g["auto_increment"]||like_bool($g)?"":"*");if(ereg('date|time',$g["type"])){$b["now"]=lang(41);}if(eregi('_(md5|sha1)$',$g["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($e,$g,$ha,$m){if($g["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ha value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ha,$g,($m||isset($_GET["select"])?$m:0),($g["null"]?"":null));}$ua=$this->_foreignKeyOptions($e,$g["field"],$m);if(isset($ua)){return(is_array($ua)?"<select$ha>".optionlist($ua,$m,true)."</select>":"<input value='".h($m)."'$ha class='hidden'><input value='".h($ua)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($e)."&field=".urlencode($g["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($g)){return'<input type="checkbox" value="'.h($m?$m:1).'"'.($m?' checked':'')."$ha>";}$kb="";if(ereg('time',$g["type"])){$kb=lang(42);}if(ereg('date|timestamp',$g["type"])){$kb=lang(43).($kb?" [$kb]":"");}if($kb){return"<input value='".h($m)."'$ha> ($kb)";}if(eregi('_(md5|sha1)$',$g["field"])){return"<input type='password' value='".h($m)."'$ha>";}return'';}function
processInput($g,$m,$M=""){if($M=="now"){return"$M()";}$b=$m;if(ereg('date|timestamp',$g["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(27)))).'(.*))',$m,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=($g["type"]=="bit"&&ereg('^[0-9]+$',$m)?$b:q($b));if($m==""&&($g["null"]||!ereg('char|text',$g["type"]))&&!like_bool($g)){$b="NULL";}elseif(ereg('^(md5|sha1)$',$M)){$b="$M($b)";}if(ereg("binary",$g["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($e,$zb,$j){global$h;$i=$h->query($j,1);if($i){while($c=$i->fetch_assoc()){if($zb=="table"){dump_csv(array_keys($c));$zb="INSERT";}dump_csv($c);}}}function
dumpHeaders($Mb,$ed=false){$Ad="csv";header("Content-Type: text/csv; charset=utf-8");return$Ad;}function
homepage(){return
true;}function
navigation($wb){global$dc,$za;echo'<h1>
',$this->name(),' <span class="version">',$dc,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($dc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($wb=="auth"){$Aa=true;foreach((array)$_SESSION["pwds"]["server"][""]as$F=>$G){if(isset($G)){if($Aa){echo"<p onclick='eventStop(event);'>\n";$Aa=false;}echo"<a href='".h(auth_url("server","",$F))."'>".($F!=""?h($F):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(44),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$za,'">
</p>
</form>
';if($wb!="db"&&$wb!="ns"){$E=table_status();if(!$E){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($E);}}}}function
tablesPrint($A){echo"<p id='tables'>\n";foreach($A
as$c){$f=$this->tableName($c);if(isset($c["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'".bold($_GET["select"]==$c["Name"]).">$f</a><br>\n";}}}function
_foreignColumn($ub,$u){foreach((array)$ub[$u]as$Ob){if(count($Ob["source"])==1){$f=$this->rowDescription($Ob["table"]);if($f!=""){$O=idf_escape($Ob["target"][0]);return
array($Ob["table"],$O,$f);}}}}function
_foreignKeyOptions($e,$u,$m=null){global$h;if(list($V,$O,$f)=$this->_foreignColumn(column_foreign_keys($e),$u)){$b=&$this->_values[$V];if(!isset($b)){$E=table_status($V);$b=($E["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $O, $f FROM ".table($V)." ORDER BY 2"));}if(!$b&&isset($m)){return$h->result("SELECT $f FROM ".table($V)." WHERE $O = ".q($m));}return$b;}}}$l=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($dd,$q="",$_b=array(),$Oc=""){global$U,$l,$h,$ya;header("Content-Type: text/html; charset=utf-8");if($l->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Pc=$dd.($Oc!=""?": ".h($Oc):"");$Qc=strip_tags($Pc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$l->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Qc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$U,'" dir="',lang(45),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Qc,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.1",'">
<script type="text/javascript">
var areYouSure = \'',lang(46),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.1",'"></script>
';if($l->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(45),' nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($_b)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$ya[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):lang(47));if($_b===false){echo"$D\n";}else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($_b))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($_b)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($_b
as$d=>$a){$Ka=(is_array($a)?$a[1]:$a);if($Ka!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Ka).'</a> &raquo; ';}}}echo"$dd\n";}}echo"<span id='loader'></span>\n","<h2>$Pc</h2>\n";restart_session();$Lc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Kc=$_SESSION["messages"][$Lc];if($Kc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Kc)."</div>\n";unset($_SESSION["messages"][$Lc]);}$Q=&get_session("dbs");if(DB!=""&&$Q&&!in_array(DB,$Q,true)){$Q=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($wb=""){global$l;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$l->navigation($wb);echo'</div>
';}}function
int32($N){while($N>=2147483648){$N-=4294967296;}while($N<=-2147483649){$N+=4294967296;}return(int)$N;}function
long2str($s,$sc){$Wa='';foreach($s
as$a){$Wa.=pack('V',$a);}if($sc){return
substr($Wa,0,end($s));}return$Wa;}function
str2long($Wa,$sc){$s=array_values(unpack('V*',str_pad($Wa,4*ceil(strlen($Wa)/4),"\0")));if($sc){$s[]=strlen($Wa);}return$s;}function
xxtea_mx($na,$ka,$sa,$va){return
int32((($na>>5&0x7FFFFFF)^$ka<<2)+(($ka>>3&0x1FFFFFFF)^$na<<4))^int32(($sa^$ka)+($va^$na));}function
encrypt_string($pb,$d){if($pb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($pb,true);$N=count($s)-1;$na=$s[$N];$ka=$s[0];$fc=floor(6+52/($N+1));$sa=0;while($fc-->0){$sa=int32($sa+0x9E3779B9);$yb=$sa>>2&3;for($ma=0;$ma<$N;$ma++){$ka=$s[$ma+1];$Sa=xxtea_mx($na,$ka,$sa,$d[$ma&3^$yb]);$na=int32($s[$ma]+$Sa);$s[$ma]=$na;}$ka=$s[0];$Sa=xxtea_mx($na,$ka,$sa,$d[$ma&3^$yb]);$na=int32($s[$N]+$Sa);$s[$N]=$na;}return
long2str($s,false);}function
decrypt_string($pb,$d){if($pb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($pb,false);$N=count($s)-1;$na=$s[$N];$ka=$s[0];$fc=floor(6+52/($N+1));$sa=int32($fc*0x9E3779B9);while($sa){$yb=$sa>>2&3;for($ma=$N;$ma>0;$ma--){$na=$s[$ma-1];$Sa=xxtea_mx($na,$ka,$sa,$d[$ma&3^$yb]);$ka=int32($s[$ma]-$Sa);$s[$ma]=$ka;}$na=$s[$N];$Sa=xxtea_mx($na,$ka,$sa,$d[$ma&3^$yb]);$ka=int32($s[0]-$Sa);$s[0]=$ka;$sa=int32($sa-0x9E3779B9);}return
long2str($s,true);}$h='';$za=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Qa=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Qa[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$bc=$l->permanentLogin();$Qa[$d]="$d:".base64_encode($bc?encrypt_string($_POST["password"],$bc):"");cookie("adminer_permanent",implode(" ",$Qa));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($za&&$_POST["token"]!=$za){page_header(lang(44),lang(48));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Qa[$d]){unset($Qa[$d]);cookie("adminer_permanent",implode(" ",$Qa));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(49));}}elseif($Qa&&!$_SESSION["pwds"]){session_regenerate_id();$bc=$l->permanentLogin();foreach($Qa
as$d=>$a){list(,$Pd)=explode(":",$a);list($Sb,$D,$F)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Sb][$D][$F]=decrypt_string(base64_decode($Pd),$bc);}}function
auth_error($Xc=null){global$h,$l,$za;$Xb=session_name();$q="";if(!$_COOKIE[$Xb]&&$_GET[$Xb]&&ini_bool("session.use_only_cookies")){$q=lang(50);}elseif(isset($_GET["username"])){if(($_COOKIE[$Xb]||$_GET[$Xb])&&!$za){$q=lang(51);}else{$G=&get_session("pwds");if(isset($G)){$q=h($Xc?$Xc->getMessage():(is_string($h)?$h:lang(52)));$G=null;}}}page_header(lang(22),$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$l->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(53),lang(54,implode(", ",$Fb)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$l->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$za=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$za;}$q=($_POST?($_POST["token"]==$za?"":lang(48)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(55,'"post_max_size"')));$h->select_db($l->database());function
email_header($Xd){return"=?UTF-8?B?".base64_encode($Xd)."?=";}function
send_mail($eb,$Lb,$wa,$db="",$Qb=array()){$fa=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$wa=str_replace("\n",$fa,wordwrap(str_replace("\r","","$wa\n")));$Zb=uniqid("boundary");$ac="";foreach((array)$Qb["error"]as$d=>$a){if(!$a){$ac.="--$Zb$fa"."Content-Type: ".str_replace("\n","",$Qb["type"][$d]).$fa."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Qb["name"][$d])."\"$fa"."Content-Transfer-Encoding: base64$fa$fa".chunk_split(base64_encode(file_get_contents($Qb["tmp_name"][$d])),76,$fa).$fa;}}$Uc="";$Wb="Content-Type: text/plain; charset=utf-8$fa"."Content-Transfer-Encoding: 8bit";if($ac){$ac.="--$Zb--$fa";$Uc="--$Zb$fa$Wb$fa$fa";$Wb="Content-Type: multipart/mixed; boundary=\"$Zb\"";}$Wb.=$fa."MIME-Version: 1.0$fa"."X-Mailer: Adminer Editor".($db?$fa."From: ".str_replace("\n","",$db):"");return
mail($eb,email_header($Lb),$Uc.$wa.$ac,$Wb);}function
like_bool($g){return
ereg("bool|(tinyint|bit)\\(1\\)",$g["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Yb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$ya[DRIVER]=lang(22);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$x=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$x-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($x)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$x=$_GET["edit"];$n=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Z=(isset($_GET["select"])?$_POST["edit"]:$n);$t=fields($x);foreach($t
as$f=>$g){if(!isset($g["privileges"][$Z?"update":"insert"])||$l->fieldName($g)==""){unset($t[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$da=$_POST["referer"];if($_POST["insert"]){$da=($Z?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$da)){$da=ME."select=".urlencode($x);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($x)," WHERE $n"),$da,lang(56));}else{$o=array();foreach($t
as$f=>$g){$a=process_input($g);if($a!==false&&$a!==null){$o[idf_escape($f)]=($Z?"\n".idf_escape($f)." = $a":$a);}}if($Z){if(!$o){redirect($da);}query_redirect("UPDATE".limit1(table($x)." SET".implode(",",$o),"\nWHERE $n"),$da,lang(57));}else{$i=insert_into($x,$o);$Wc=($i?last_id():0);queries_redirect($da,lang(58,($Wc?" $Wc":"")),$i);}}}$nb=$l->tableName(table_status($x));page_header(($Z?lang(59):lang(37)),$q,array("select"=>array($x,$nb)),$nb);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($n){$H=array();foreach($t
as$f=>$g){if(isset($g["privileges"]["select"])){$H[]=($_POST["clone"]&&$g["auto_increment"]?"'' AS ":(ereg("enum|set",$g["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$c=array();if($H){$z=get_rows("SELECT".limit(implode(", ",$H)." FROM ".table($x)," WHERE $n",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($z)!=1?null:reset($z));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($t){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($t
as$f=>$g){echo"<tr><th>".$l->fieldName($g);$hb=$_GET["set"][bracket_escape($f)];$m=(isset($c)?($c[$f]!=""&&ereg("enum|set",$g["type"])?(is_array($c[$f])?array_sum($c[$f]):+$c[$f]):$c[$f]):(!$Z&&$g["auto_increment"]?"":(isset($_GET["select"])?false:(isset($hb)?$hb:$g["default"]))));if(!$_POST["save"]&&is_string($m)){$m=$l->editVal($m,$g);}$M=($_POST["save"]?(string)$_POST["function"][$f]:($Z&&$g["on_update"]=="CURRENT_TIMESTAMP"?"now":($m===false?null:(isset($m)?'':'NULL'))));if($g["type"]=="timestamp"&&$m=="CURRENT_TIMESTAMP"){$m="";$M="now";}input($g,$m,$M);echo"\n";}echo"</table>\n";}echo'<p>
';if($t){echo"<input type='submit' value='".lang(60)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Z?lang(61):lang(62))."' title='Ctrl+Shift+Enter'>\n";}}echo($Z?"<input type='submit' name='delete' value='".lang(63)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$t?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$za,'">
</form>
';}elseif(isset($_GET["select"])){$x=$_GET["select"];$E=table_status($x);$ca=indexes($x);$t=fields($x);$mb=column_foreign_keys($x);if($E["Oid"]=="t"){$ca[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$Vb);$Sc=array();$L=array();$qb=null;foreach($t
as$d=>$g){$f=$l->fieldName($g);if(isset($g["privileges"]["select"])&&$f!=""){$L[$d]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$g["type"])){$qb=$l->selectLengthProcess();}}$Sc+=$g["privileges"];}list($H,$ja)=$l->selectColumnsProcess($L,$ca);$n=$l->selectSearchProcess($t,$ca);$ra=$l->selectOrderProcess($t,$ca);$_=$l->selectLimitProcess();$db=($H?implode(", ",$H):($E["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($x);$wc=($ja&&count($ja)<count($H)?"\nGROUP BY ".implode(", ",$ja):"").($ra?"\nORDER BY ".implode(", ",$ra):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Da=>$c){echo$h->result("SELECT".limit(idf_escape(key($c))." FROM ".table($x)," WHERE ".where_check($Da).($n?" AND ".implode(" AND ",$n):"").($ra?" ORDER BY ".implode(", ",$ra):""),1));}exit;}if($_POST&&!$q){$Rc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$xa=$ob=null;foreach($ca
as$ea){if($ea["type"]=="PRIMARY"){$xa=array_flip($ea["columns"]);$ob=($H?$xa:array());break;}}foreach((array)$ob
as$d=>$a){if(in_array(idf_escape($d),$H)){unset($ob[$d]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($x);$l->dumpTable($x,"");if(!is_array($_POST["check"])||$ob===array()){$gb=$n;if(is_array($_POST["check"])){$gb[]="($Rc)";}$j="SELECT $db".($gb?"\nWHERE ".implode(" AND ",$gb):"").$wc;}else{$bd=array();foreach($_POST["check"]as$a){$bd[]="(SELECT".limit($db,"\nWHERE ".($n?implode(" AND ",$n)." AND ":"").where_check($a).$wc,1).")";}$j=implode(" UNION ALL ",$bd);}$l->dumpData($x,"table",$j);exit;}if(!$l->selectEmailProcess($n,$mb)){if($_POST["save"]||$_POST["delete"]){$i=true;$Na=0;$j=table($x);$o=array();if(!$_POST["delete"]){foreach($L
as$f=>$a){$a=process_input($t[$f]);if($a!==null){if($_POST["clone"]){$o[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$o[]=idf_escape($f)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($x):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$Tb="UPDATE";if($_POST["delete"]){$Tb="DELETE";$j="FROM $j";}if($_POST["clone"]){$Tb="INSERT";$j="INTO $j";}if($_POST["all"]||($ob===array()&&$_POST["check"])||count($ja)<count($H)){$i=queries($Tb." $j".($_POST["all"]?($n?"\nWHERE ".implode(" AND ",$n):""):"\nWHERE $Rc"));$Na=$h->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($Tb.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$Na+=$h->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(64,$Na),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q=lang(65);}else{$i=true;$Na=0;foreach($_POST["val"]as$Da=>$c){$o=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$o[]=idf_escape($d)." = ".(ereg('char|text',$t[$d]["type"])||$a!=""?$l->processInput($t[$d],$a):"NULL");}$j=table($x)." SET ".implode(", ",$o);$gb=" WHERE ".where_check($Da).($n?" AND ".implode(" AND ",$n):"");$i=queries("UPDATE".(count($ja)<count($H)?" $j$gb":limit1($j,$gb)));if(!$i){break;}$Na+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(64,$Na),$i);}}elseif(is_string($ta=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($Vb["output"])."&format=".urlencode($_POST["separator"]));$i=true;$Ua=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ta,$ga);$Na=count($ga[0]);begin();$qa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ga[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$qa]*)$qa~",$a.$qa,$Ec);if(!$d&&!array_diff($Ec[1],$Ua)){$Ua=$Ec[1];$Na--;}else{$o=array();foreach($Ec[1]as$p=>$Pa){$o[idf_escape($Ua[$p])]=($Pa==""&&$t[$Ua[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Pa))));}$i=insert_update($x,$o,$xa);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(66,$Na),$i);queries("ROLLBACK");}else{$q=upload_error($ta);}}}$nb=$l->tableName($E);page_header(lang(33).": $nb",$q);session_write_close();$o=null;if(isset($Sc["insert"])){$o="";foreach((array)$_GET["where"]as$a){if(count($mb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$o.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$l->selectLinks($E,$o);if(!$L){echo"<p class='error'>".lang(67).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($x).'">',"</div>\n";$l->selectColumnsPrint($H,$L);$l->selectSearchPrint($n,$L,$ca);$l->selectOrderPrint($ra,$L,$ca);$l->selectLimitPrint($_);$l->selectLengthPrint($qb);$l->selectActionPrint();echo"</form>\n";$P=$_GET["page"];if($P=="last"){$Ca=$h->result("SELECT COUNT(*) FROM ".table($x).($n?" WHERE ".implode(" AND ",$n):""));$P=floor(max(0,$Ca-1)/$_);}$j="SELECT".limit((+$_&&$ja&&count($ja)<count($H)&&$pa=="sql"?"SQL_CALC_FOUND_ROWS ":"").$db,($n?"\nWHERE ".implode(" AND ",$n):"").$wc,($_!=""?+$_:null),($P?$_*$P:0),"\n");echo$l->selectQuery($j);$i=$h->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($pa=="mssql"){$i->seek($_*$P);}$Ub=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$z=array();while($c=$i->fetch_assoc()){if($P&&$pa=="oracle"){unset($c["RNUM"]);}$z[]=$c;}if($_GET["page"]!="last"){$Ca=(+$_&&$ja&&count($ja)<count($H)?($pa=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($j) x")):count($z));}if(!$z){echo"<p class='message'>".lang(68)."\n";}else{$zc=$l->backwardKeys($x,$nb);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$ja&&$H?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(69)."</a>");$yc=array();$ia=array();reset($H);$cd=1;foreach($z[0]as$d=>$a){if($E["Oid"]!="t"||$d!="oid"){$a=$_GET["columns"][key($H)];$g=$t[$H?($a?$a["col"]:current($H)):$d];$f=($g?$l->fieldName($g,$cd):"*");if($f!=""){$cd++;$yc[$d]=$f;$u=idf_escape($d);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($ra[0]==$u||$ra[0]==$d||(!$ra&&count($ja)<count($H)&&$ja[0]==$u)?'&desc%5B0%5D=1':'')).'">'.(!$H||$a?apply_sql_function($a["fun"],$f):h(current($H)))."</a>";}$ia[$d]=$a["fun"];next($H);}}$_c=array();if($_GET["modify"]){foreach($z
as$c){foreach($c
as$d=>$a){$_c[$d]=max($_c[$d],min(40,strlen(utf8_decode($a))));}}}echo($zc?"<th>".lang(70):"")."</thead>\n";foreach($l->rowDescriptions($z,$mb)as$N=>$c){$Bc=unique_array($z[$N],$ca);$Da="";foreach($Bc
as$d=>$a){$Da.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$ja&&$H?"":"<td>".checkbox("check[]",substr($Da,1),in_array(substr($Da,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ja)<count($H)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($x).$Da)."'>".lang(69)."</a>"));foreach($c
as$d=>$a){if(isset($yc[$d])){$g=$t[$d];if($a!=""&&(!isset($Ub[$d])||$Ub[$d]!="")){$Ub[$d]=(is_mail($a)?$yc[$d]:"");}$w="";$a=$l->editVal($a,$g);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$g["type"])&&$a!=""){$w=h(ME.'download='.urlencode($x).'&field='.urlencode($d).$Da);}if($a===""){$a="&nbsp;";}elseif($qb!=""&&ereg('text|blob',$g["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$qb));}else{$a=h($a);}if(!$w){foreach((array)$mb[$d]as$K){if(count($mb[$d])==1||end($K["source"])==$d){$w="";foreach($K["source"]as$p=>$Gc){$w.=where_link($p,$K["target"][$p],$z[$N][$Gc]);}$w=h(($K["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($K["db"]),ME):ME).'select='.urlencode($K["table"]).$w);if(count($K["source"])==1){break;}}}}if($d=="COUNT(*)"){$w=h(ME."select=".urlencode($x));$p=0;foreach((array)$_GET["where"]as$s){if(!array_key_exists($s["col"],$Bc)){$w.=h(where_link($p++,$s["col"],$s["val"],$s["op"]));}}foreach($Bc
as$va=>$s){$w.=h(where_link($p++,$va,$s));}}}if(!$w){if(is_mail($a)){$w="mailto:$a";}if($Mc=is_url($c[$d])){$w=($Mc=="http"&&$Hb?$c[$d]:"$Mc://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$O=h("val[$Da][".bracket_escape($d)."]");$m=$_POST["val"][$Da][bracket_escape($d)];$Nc=h(isset($m)?$m:$c[$d]);$Nd=strpos($a,"<i>...</i>");$Yc=is_utf8($a)&&$z[$N][$d]==$c[$d]&&!$ia[$d];$Zc=ereg('text|lob',$g["type"]);echo(($_GET["modify"]&&$Yc)||isset($m)?"<td>".($Zc?"<textarea name='$O' cols='30' rows='".(substr_count($c[$d],"\n")+1)."'>$Nc</textarea>":"<input name='$O' value='$Nc' size='$_c[$d]'>"):"<td id='$O' ondblclick=\"".($Yc?"selectDblClick(this, event".($Nd?", 2":($Zc?", 1":"")).")":"alert('".h(lang(71))."')").";\">".$l->selectVal($a,$w,$g));}}if($zc){echo"<td>";}$l->backwardKeysPrint($zc,$z[$N]);echo"</tr>\n";}echo"</table>\n";}if($z||$P){$mc=true;if($_GET["page"]!="last"&&+$_&&count($ja)>=count($H)&&($Ca>=$_||$P)){$Ca=$E["Rows"];if(!isset($Ca)||$n||($E["Engine"]=="InnoDB"&&$Ca<max(1e4,2*($P+1)*$_))){ob_flush();flush();$Ca=$h->result("SELECT COUNT(*) FROM ".table($x).($n?" WHERE ".implode(" AND ",$n):""));}else{$mc=false;}}echo"<p class='pages'>";if(+$_&&$Ca>$_){$kc=floor(($Ca-1)/$_);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(72)."', '".($P+1)."'), event); return false;\">".lang(72)."</a>:",pagination(0,$P).($P>5?" ...":"");for($p=max(1,$P-4);$p<min($kc,$P+5);$p++){echo
pagination($p,$P);}echo($P+5<$kc?" ...":"").($mc?pagination($kc,$P):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(73)."</a>");}echo" (".($mc?"":"~ ").lang(74,$Ca).") ".checkbox("all",1,0,lang(75))."\n";if($l->selectCommandPrint()){echo'<fieldset><legend>',lang(59),'</legend><div>
<input type="submit" value="',lang(60),'" title="',lang(65),'" class="jsonly">
<input type="submit" name="edit" value="',lang(59),'">
<input type="submit" name="clone" value="',lang(76),'">
<input type="submit" name="delete" value="',lang(63),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Ca,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(77));$cb=$l->dumpOutput();echo($cb?html_select("output",$cb,$Vb["output"])." ":""),html_select("format",$l->dumpFormat(),$Vb["format"])," <input type='submit' name='export' value='".lang(77)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($l->selectImportPrint()){print_fieldset("import",lang(78),!$z);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Vb["format"],1);echo" <input type='submit' name='import' value='".lang(78)."'>","<input type='hidden' name='token' value='$za'>\n","</div></fieldset>\n";}$l->selectEmailPrint(array_filter($Ub,'strlen'),$L);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($e,$O,$f)=$l->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$i=$h->query("SELECT $O, $f FROM ".table($e)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$O = $_GET[value] OR ":"")."$f LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($c=$i->fetch_row());$p++){echo"<a href='".h(ME."edit=".urlencode($e)."&where".urlencode("[".bracket_escape(idf_unescape($O))."]")."=".urlencode($c[0]))."'>".h($c[1])."</a><br>\n";}if($p==10){echo"...\n";}}exit;}else{page_header(lang(47),"",false);if($l->homepage()){echo"<form action='' method='post'>\n","<p>".lang(79).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(28)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(80).'<td>'.lang(81)."</thead>\n";foreach(table_status()as$e=>$c){$f=$l->tableName($c);if(isset($c["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$e,in_array($e,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($e)."'>$f</a>";$a=number_format($c["Rows"],0,'.',lang(82));echo"<td align='right'><a href='".h(ME."edit=").urlencode($e)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();