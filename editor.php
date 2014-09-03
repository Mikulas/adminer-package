<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.2
*/error_reporting(6135);$Nb=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($Nb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$gd=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($gd){$$a=$gd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.2');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.2" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(originalFavicon);if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
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
idf_unescape($E){$jc=substr($E,-1);return
str_replace($jc.$jc,$jc,substr($E,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($Ma,$Nb=false){if(get_magic_quotes_gpc()){while(list($d,$a)=each($Ma)){foreach($a
as$va=>$s){unset($Ma[$d][$va]);if(is_array($s)){$Ma[$d][stripslashes($va)]=$s;$Ma[]=&$Ma[$d][stripslashes($va)];}else{$Ma[$d][stripslashes($va)]=($Nb?$s:stripslashes($s));}}}}}function
bracket_escape($E,$Bd=false){static$nd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($E,($Bd?array_flip($nd):$nd));}function
h($z){return
htmlspecialchars(str_replace("\0","",$z),ENT_QUOTES);}function
nbsp($z){return(trim($z)!=""?h($z):"&nbsp;");}function
nl_br($z){return
str_replace("\n","<br>",$z);}function
checkbox($f,$n,$yb,$Qc="",$Rb="",$Zd=false){static$N=0;$N++;$b="<input type='checkbox' name='$f' value='".h($n)."'".($yb?" checked":"").($Rb?' onclick="'.h($Rb).'"':'').($Zd?" class='jsonly'":"")." id='checkbox-$N'>";return($Qc!=""?"<label for='checkbox-$N'>$b".h($Qc)."</label>":$b);}function
optionlist($ua,$Xd=null,$Nc=false){$b="";foreach($ua
as$va=>$s){$Mc=array($va=>$s);if(is_array($s)){$b.='<optgroup label="'.h($va).'">';$Mc=$s;}foreach($Mc
as$d=>$a){$b.='<option'.($Nc||is_string($d)?' value="'.h($d).'"':'').(($Nc||is_string($d)?(string)$d:$a)===$Xd?' selected':'').'>'.h($a);}if(is_array($s)){$b.='</optgroup>';}}return$b;}function
html_select($f,$ua,$n="",$Sa=true){if($Sa){return"<select name='".h($f)."'".(is_string($Sa)?' onchange="'.h($Sa).'"':"").">".optionlist($ua,$n)."</select>";}$b="";foreach($ua
as$d=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($d)."'".($d==$n?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($Zc="",$Vd=false){return" onclick=\"".($Vd?"eventStop(event); ":"")."return confirm('".lang(0).($Zc?" (' + $Zc + ')":"")."');\"";}function
print_fieldset($N,$ae,$ge=false,$Rb=""){echo"<fieldset><legend><a href='#fieldset-$N' onclick=\"".h($Rb)."return !toggle('fieldset-$N');\">$ae</a></legend><div id='fieldset-$N'".($ge?"":" class='hidden'").">\n";}function
bold($Cd){return($Cd?" class='active'":"");}function
odd($b=' class="odd"'){static$p=0;if(!$b){$p=-1;}return($p++%
2?$b:'');}function
js_escape($z){return
addcslashes($z,"\r\n'\\/");}function
json_row($d,$a=null){static$Ba=true;if($Ba){echo"{";}if($d!=""){echo($Ba?"":",")."\n\t\"".addcslashes($d,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$Ba=false;}else{echo"\n}\n";$Ba=true;}}function
ini_bool($fe){$a=ini_get($fe);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($z){global$h;return$h->quote($z);}function
get_vals($j,$u=0){global$h;$b=array();$i=$h->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[]=$c[$u];}}return$b;}function
get_key_vals($j,$S=null){global$h;if(!is_object($S)){$S=$h;}$b=array();$i=$S->query($j);if(is_object($i)){while($c=$i->fetch_row()){$b[$c[0]]=$c[1];}}return$b;}function
get_rows($j,$S=null,$q="<p class='error'>"){global$h;if(!is_object($S)){$S=$h;}$b=array();$i=$S->query($j);if(is_object($i)){while($c=$i->fetch_assoc()){$b[]=$c;}}elseif(!$i&&$h->error&&$q&&defined("PAGE_HEADER")){echo$q.error()."\n";}return$b;}function
unique_array($c,$ba){foreach($ba
as$ca){if(ereg("PRIMARY|UNIQUE",$ca["type"])){$b=array();foreach($ca["columns"]as$d){if(!isset($c[$d])){continue
2;}$b[$d]=$c[$d];}return$b;}}$b=array();foreach($c
as$d=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$d)){$b[$d]=$a;}}return$b;}function
where($m){global$ta;$b=array();foreach((array)$m["where"]as$d=>$a){$b[]=idf_escape(bracket_escape($d,1)).(ereg('\\.',$a)||$ta=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_\\")):" = ".exact_value($a));}foreach((array)$m["null"]as$d){$b[]=idf_escape($d)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$td);remove_slashes(array(&$td));return
where($td);}function
where_link($p,$u,$n,$de="="){return"&where%5B$p%5D%5Bcol%5D=".urlencode($u)."&where%5B$p%5D%5Bop%5D=".urlencode((isset($n)?$de:"IS NULL"))."&where%5B$p%5D%5Bval%5D=".urlencode($n);}function
cookie($f,$n){global$ob;$nb=array($f,(ereg("\n",$n)?"":$n),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ob);if(version_compare(PHP_VERSION,'5.2.0')>=0){$nb[]=true;}return
call_user_func_array('setcookie',$nb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($d){return$_SESSION[$d][DRIVER][SERVER][$_GET["username"]];}function
set_session($d,$a){$_SESSION[$d][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Sb,$C,$F){global$wa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($wa))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Sb!="server"||$C!=""?urlencode($Sb)."=".urlencode($C)."&":"")."username=".urlencode($F).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($Z,$xa=null){if(isset($xa)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($Z)?$Z:$_SERVER["REQUEST_URI"]))][]=$xa;}if(isset($Z)){if($Z==""){$Z=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $Z");exit;}}function
query_redirect($j,$Z,$xa,$Qb=true,$Ed=true,$vd=false){global$h,$q,$l;if($Ed){$vd=!$h->query($j);}$Ac="";if($j){$Ac=$l->messageQuery("$j;");}if($vd){$q=error().$Ac;return
false;}if($Qb){redirect($Z,$xa.$Ac);}return
true;}function
queries($j=null){global$h;static$Ka=array();if(!isset($j)){return
implode(";\n",$Ka);}$Ka[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$h->query($j);}function
apply_queries($j,$B,$Fd='table'){foreach($B
as$e){if(!queries("$j ".$Fd($e))){return
false;}}return
true;}function
queries_redirect($Z,$xa,$Qb){return
query_redirect(queries(),$Z,$xa,$Qb,false,!$Qb);}function
remove_from_uri($Fa=""){return
substr(preg_replace("~(?<=[?&])($Fa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($O,$Kd){return" ".($O==$Kd?$O+1:'<a href="'.h(remove_from_uri("page").($O?"&page=$O":"")).'">'.($O+1)."</a>");}function
get_file($d,$Cc=false){$ra=$_FILES[$d];if(!$ra||$ra["error"]){return$ra["error"];}$b=file_get_contents($Cc&&ereg('\\.gz$',$ra["name"])?"compress.zlib://$ra[tmp_name]":($Cc&&ereg('\\.bz2$',$ra["name"])?"compress.bzip2://$ra[tmp_name]":$ra["tmp_name"]));if($Cc){$id=substr($b,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$id,$ed)){$b=iconv("utf-16","utf-8",$b);}elseif($id=="\xEF\xBB\xBF"){$b=substr($b,3);}}return$b;}function
upload_error($q){$od=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?lang(1).($od?" ".lang(2,$od):""):lang(3));}function
repeat_pattern($V,$oa){return
str_repeat("$V{0,65535}",$oa/65535)."$V{0,".($oa
%
65535)."}";}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
shorten_utf8($z,$oa=80,$Od=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$oa).")($)?)u",$z,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$oa).")($)?)",$z,$k);}return
h($k[1]).$Od.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($Ma,$Md=array()){while(list($d,$a)=each($Ma)){if(is_array($a)){foreach($a
as$va=>$s){$Ma[$d."[$va]"]=$s;}}elseif(!in_array($d,$Md)){echo'<input type="hidden" name="'.h($d).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($e){global$l;$b=array();foreach($l->foreignKeys($e)as$U){foreach($U["source"]as$a){$b[$a][]=$U;}}return$b;}function
enum_input($D,$ia,$g,$n,$Fc=null){global$l;preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ga);$b=(isset($Fc)?"<label><input type='$D'$ia value='$Fc'".((is_array($n)?in_array($Fc,$n):$n===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($ga[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$yb=(is_int($n)?$n==$p+1:(is_array($n)?in_array($p+1,$n):$n===$a));$b.=" <label><input type='$D'$ia value='".($p+1)."'".($yb?' checked':'').'>'.h($l->editVal($a,$g)).'</label>';}return$b;}function
input($g,$n,$L){global$aa,$l,$ta;$f=h(bracket_escape($g["field"]));echo"<td class='function'>";$Uc=($ta=="mssql"&&$g["auto_increment"]);if($Uc&&!$_POST["save"]){$L=null;}$fa=(isset($_GET["select"])||$Uc?array("orig"=>lang(5)):array())+$l->editFunctions($g);$ia=" name='fields[$f]'";if($g["type"]=="enum"){echo
nbsp($fa[""])."<td>".$l->editInput($_GET["edit"],$g,$ia,$n);}else{$Ba=0;foreach($fa
as$d=>$a){if($d===""||!$a){break;}$Ba++;}$Sa=($Ba?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($g["field"])))."]']; if ($Ba > f.selectedIndex) f.selectedIndex = $Ba;\"":"");$ia.=$Sa;echo(count($fa)>1?html_select("function[$f]",$fa,!isset($L)||in_array($L,$fa)||isset($fa[$L])?$L:"","functionChange(this);"):nbsp(reset($fa))).'<td>';$Kc=$l->editInput($_GET["edit"],$g,$ia,$n);if($Kc!=""){echo$Kc;}elseif($g["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$g["length"],$ga);foreach($ga[1]as$p=>$a){$a=stripcslashes(str_replace("''","'",$a));$yb=(is_int($n)?($n>>$p)&1:in_array($a,explode(",",$n),true));echo" <label><input type='checkbox' name='fields[$f][$p]' value='".(1<<$p)."'".($yb?' checked':'')."$Sa>".h($l->editVal($a,$g)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Sa>";}elseif(ereg('text|lob',$g["type"])){echo"<textarea ".($ta!="sqlite"||ereg("\n",$n)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ia>".h($n).'</textarea>';}else{$kc=(!ereg('int',$g["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$g["length"],$k)?((ereg("binary",$g["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$g["unsigned"]?1:0)):($aa[$g["type"]]?$aa[$g["type"]]+($g["unsigned"]?0:1):0));echo"<input value='".h($n)."'".($kc?" maxlength='$kc'":"").(ereg('char|binary',$g["type"])&&$kc>20?" size='40'":"")."$ia>";}}}function
process_input($g){global$l;$E=bracket_escape($g["field"]);$L=$_POST["function"][$E];$n=$_POST["fields"][$E];if($g["type"]=="enum"){if($n==-1){return
false;}if($n==""){return"NULL";}return+$n;}if($g["auto_increment"]&&$n==""){return
null;}if($L=="orig"){return($g["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($g["field"]):false);}if($L=="NULL"){return"NULL";}if($g["type"]=="set"){return
array_sum((array)$n);}if(ereg('blob|bytea|raw|file',$g["type"])&&ini_bool("file_uploads")){$ra=get_file("fields-$E");if(!is_string($ra)){return
false;}return
q($ra);}return$l->processInput($g,$n,$L);}function
search_tables(){global$l,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$nc=false;foreach(table_status()as$e=>$w){$f=$l->tableName($w);if(isset($w["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($e,$_POST["tables"]))){$i=$h->query("SELECT".limit("1 FROM ".table($e)," WHERE ".implode(" AND ",$l->selectSearchProcess(fields($e),array())),1));if($i->fetch_row()){if(!$nc){echo"<ul>\n";$nc=true;}echo"<li><a href='".h(ME."select=".urlencode($e)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($nc?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($hc,$Tc=false){global$l;$b=$l->dumpHeaders($hc,$Tc);$bb=$_POST["output"];if($bb!="text"){header("Content-Disposition: attachment; filename=".friendly_url($hc!=""?$hc:(SERVER!=""?SERVER:"localhost")).".$b".($bb!="file"&&!ereg('[^0-9a-z]',$bb)?".$bb":""));}session_write_close();return$b;}function
dump_csv($c){foreach($c
as$d=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$c[$d]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$c)."\r\n";}function
apply_sql_function($L,$u){return($L?($L=="unixepoch"?"DATETIME($u, '$L')":($L=="count distinct"?"COUNT(DISTINCT ":strtoupper("$L("))."$u)"):$u);}function
password_file(){$ic=ini_get("upload_tmp_dir");if(!$ic){if(function_exists('sys_get_temp_dir')){$ic=sys_get_temp_dir();}else{$ea=@tempnam("","");if(!$ea){return
false;}$ic=dirname($ea);unlink($ea);}}$ea="$ic/adminer.key";$b=@file_get_contents($ea);if($b){return$b;}$xc=@fopen($ea,"w");if($xc){$b=md5(uniqid(mt_rand(),true));fwrite($xc,$b);fclose($xc);}return$b;}function
is_mail($mb){$Rc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Gb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$V="$Rc+(\\.$Rc+)*@($Gb?\\.)+$Gb";return
preg_match("(^$V(,\\s*$V)*\$)i",$mb);}function
is_url($z){$Gb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Gb?\\.)+$Gb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$z,$k)?strtolower($k[1]):"");}global$l,$h,$wa,$Jb,$Bc,$q,$fa,$Lb,$ob,$sd,$ta,$R,$ab,$Za,$Ea,$_a,$J,$aa,$Fb,$dc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$ob=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$nb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ob);if(version_compare(PHP_VERSION,'5.2.0')>=0){$nb[]=true;}call_user_func_array('session_set_cookie_params',$nb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Nb);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$ab=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية',);function
get_lang(){global$R;return$R;}function
lang($E,$T=null){global$R,$J;$Kb=$J[$E];if(is_array($Kb)){$Wd=($T==1?0:($R=='cs'||$R=='sk'?($T&&$T<5?1:2):($R=='fr'?(!$T?0:1):($R=='pl'?($T
%
10>1&&$T
%
10<5&&$T/10
%
10!=1?1:2):($R=='sl'?($T
%
100==1?0:($T
%
100==2?1:($T
%
100==3||$T
%
100==4?2:3))):($R=='lt'?($T
%
10==1&&$T
%
100!=11?0:($T
%
10>1&&$T/10
%
10!=1?1:2)):($R=='ru'?($T
%
10==1&&$T
%
100!=11?0:($T
%
10>1&&$T
%
10<5&&$T/10
%
10!=1?1:2)):1)))))));$Kb=$Kb[$Wd];}$Lc=func_get_args();array_shift($Lc);return
vsprintf((isset($Kb)?$Kb:$E),$Lc);}function
switch_lang(){global$R,$ab;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$ab,$R,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$R="en";if(isset($ab[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$R=$_COOKIE["adminer_lang"];}elseif(isset($ab[$_SESSION["lang"]])){$R=$_SESSION["lang"];}else{$gc=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$ga,PREG_SET_ORDER);foreach($ga
as$k){$gc[$k[1]]=(isset($k[3])?$k[3]:1);}arsort($gc);foreach($gc
as$d=>$Tb){if(isset($ab[$d])){$R=$d;break;}$d=preg_replace('~-.*~','',$d);if(!isset($gc[$d])&&isset($ab[$d])){$R=$d;break;}}}switch($R){case"en":$J=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','ltr','Resend POST data?','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','No rows.','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$J=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','ltr','Znovu odeslat POST data?','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Žádné řádky.','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$J=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','ltr','Znovu poslať POST data?','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Žiadne riadky.','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Upraviť všetko');break;case"nl":$J=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','ltr','POST data opnieuw verzenden','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Geen rijen.','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','.','Alles bewerken');break;case"es":$J=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','ltr','Volver a enviar POST data?','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','No existen registros.','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros',' ','Editar todos');break;case"de":$J=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','ltr','POST data noch einmal senden ?','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Keine Daten.','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Alle ändern');break;case"fr":$J=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Éditeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','ltr','Renvoyer les données POST ?','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Aucun résultat.','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes',',','Tout modifier');break;case"it":$J=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','ltr','Reinvio i dati POST?','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Nessuna riga.','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','.','Modifica tutto');break;case"et":$J=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','ltr','Saada POST andmed uuesti?','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Sissekanded puuduvad.','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Muuda kõiki');break;case"hu":$J=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválasztás','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','óó:pp:mm','[yyyy].m.d','Kilépés','ltr','Újraküldi a POST adatokat?','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Nincs megjeleníthető eredmény.','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Összes szerkesztése');break;case"pl":$J=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','ltr','Wysłać dane ponownie?','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Brak rekordów.','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów',' ','Zmień typ');break;case"ca":$J=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','ltr','Torna a enviar les dades POST?','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','No hi ha cap registre.','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d registre','%d registres'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files',',','Edita-ho tot');break;case"pt":$J=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Editor','Usuario','Senha','Entrar','Salvar Senha','Novo Registro','Ultima página',array('%d byte','%d bytes'),'$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','ltr','Resend POST data?','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Não existem registros.','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros',' ','Esquema inválido.');break;case"sl":$J=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','ltr','Resend POST data?','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Ni vrstic.','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic',' ','Spremeni tip');break;case"lt":$J=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Redaktorius','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Naujas įrašas','Paskutinis puslapis',array('%d baitas','%d baigai','%d baitų'),'$1-$3-$5','Ieškoti','visur','Rikiuoti','Limitas','Veiksmas','Atrinkti','El. paštas','Nuo','Antraštė','Įrašyti','Priedai','Siųsti',array('Išsiųstas %d laiškas.','Išsiųsti %d laiškai.','Išsiųsta %d laiškų.'),'dabar','HH:MM:SS','[yyyy]-mm-dd','Atsijungti','ltr','Persiųsti POST duomenis?','Serveris','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Redaguoti','Nėra įrašų.','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis',array('%d įrašas','%d įrašai','%d įrašų'),'visas rezultatas','Klonuoti','Eksportas','Importas','Ieškoti duomenų lentelėse','Lentelė','Įrašai',' ','Keisti tipą');break;case"tr":$J=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','ltr','Resend POST data?','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Sıra yok.','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)',' ','Tür değiştir');break;case"ro":$J=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Editor','Nume de utilizator','Parola','Intră','Logare permanentă','Înscriere nouă','Ultima pagină',array('%d octet','%d octeți'),'$5.$3.$1','Căutare','oriunde','Sortare','Limit','Acțiune','Selectează','Poșta electronică','De la','Pentru','Inserează','Fișiere atașate','Trimite',array('A fost trimisă %d scrisoare.','Au fost trimise %d scrisori.'),'acum','HH:MM:SS','dd.mm.[yyyy]','Eșire','ltr','Retrimite datele POST?','Server','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Editează','Nu sunt înscrieri.','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima',array('%d înscriere','%d înscrieri'),'tot rezultatul','Clonează','Export','Importă','Caută în tabele','Tabel','Înscrieri',',','Editează tot');break;case"ru":$J=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','ЧЧ:ММ:СС','дд.мм.[гггг]','Выйти','ltr','Еще раз послать данные POST запроса?','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Нет записей.','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк',' ','Редактировать всё');break;case"zh":$J=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','ltr','重新发送 POST 数据？','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','没有行。','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数',',','编辑全部');break;case"zh-tw":$J=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','ltr','重新發送表單資料?','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','沒有行。','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數',',','編輯全部');break;case"ja":$J=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','時:分:秒','[yyyy].mm.dd','ログアウト','ltr','再送信しますか？','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','行がありません','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数',',','すべて編集');break;case"ta":$J=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','ltr','POST data வை மீண்டும் அனுப்பவா?','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST  த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','வ‌ரிசை இல்லை.','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அனைத்தையும் தொகு');break;case"ar":$J=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','rtl','هل تود إعادة إرسال بيانات POST ؟','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','لا توجد نتائج.','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر',',','تعديل الكل');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($_d,$F,$H,$zd='auth_error'){set_exception_handler($zd);parent::__construct($_d,$F,$H);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ca=false){$i=parent::query($j);if(!$i){$Ud=$this->errorInfo();$this->error=$Ud[2];return
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
fetch_field(){$c=(object)$this->getColumnMeta($this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=(in_array("blob",$c->flags)?63:0);return$c;}}}$wa=array();$wa["sqlite"]="SQLite 3";$wa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Ib=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ea){$this->_link=new
SQLite3($ea);$qc=$this->_link->version();$this->server_info=$qc["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($z){return"'".$this->_link->escapeString($z)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetchArray();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$u=$this->_offset++;$D=$this->_result->columnType($u);return(object)array("name"=>$this->_result->columnName($u),"type"=>$D,"charsetnr"=>($D==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ea){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ea);}function
query($j,$Ca=false){$ce=($Ca?"unbufferedQuery":"query");$i=@$this->_link->$ce($j,SQLITE_BOTH,$q);if(!$i){$this->error=$q;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($z){return"'".sqlite_escape_string($z)."'";}function
store_result(){return$this->_result;}function
result($j,$g=0){$i=$this->query($j);if(!is_object($i)){return
false;}$c=$i->_result->fetch();return$c[$g];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$c=$this->_result->fetch(SQLITE_ASSOC);if(!$c){return
false;}$b=array();foreach($c
as$d=>$a){$b[($d[0]=='"'?idf_unescape($d):$d)]=$a;}return$b;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$V='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($V\\.)?$V\$~",$f,$k)){$e=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$e,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ea){$this->dsn(DRIVER.":$ea","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ea){if(is_readable($ea)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ea)?$ea:dirname($_SERVER["SCRIPT_FILENAME"])."/$ea")." AS a")){$this->Min_SQLite($ea);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}}function
idf_escape($E){return'"'.str_replace('"','""',$E).'"';}function
table($E){return
idf_escape($E);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$m,$_,$X=0,$qa=" "){return" $j$m".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$m){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$m,1):" $j$m");}function
db_collation($v,$Hb){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($P){return
array();}function
table_status($f=""){$b=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$c){$c["Auto_increment"]="";$b[$c["Name"]]=$c;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$c){$b[$c["name"]]["Auto_increment"]=$c["seq"];}return($f!=""?$b[$f]:$b);}function
is_view($w){return$w["Engine"]=="view";}function
fk_support($w){global$h;return!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($e){$b=array();foreach(get_rows("PRAGMA table_info(".table($e).")")as$c){$D=strtolower($c["type"]);$lb=$c["dflt_value"];$b[$c["name"]]=array("field"=>$c["name"],"type"=>(eregi("int",$D)?"integer":(eregi("char|clob|text",$D)?"text":(eregi("blob",$D)?"blob":(eregi("real|floa|doub",$D)?"real":"numeric")))),"full_type"=>$D,"default"=>(ereg("'(.*)'",$lb,$k)?str_replace("''","'",$k[1]):($lb=="NULL"?null:$lb)),"null"=>!$c["notnull"],"auto_increment"=>eregi('^integer$',$D)&&$c["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$c["pk"],);}return$b;}function
indexes($e,$S=null){$b=array();$ya=array();foreach(fields($e)as$g){if($g["primary"]){$ya[]=$g["field"];}}if($ya){$b[""]=array("type"=>"PRIMARY","columns"=>$ya,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($e).")")as$c){$b[$c["name"]]["type"]=($c["unique"]?"UNIQUE":"INDEX");$b[$c["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($c["name"]).")")as$Nd){$b[$c["name"]]["columns"][]=$Nd["name"];}}return$b;}function
foreign_keys($e){$b=array();foreach(get_rows("PRAGMA foreign_key_list(".table($e).")")as$c){$U=&$b[$c["id"]];if(!$U){$U=$c;}$U["source"][]=$c["from"];$U["target"][]=$c["to"];}return$b;}function
view($f){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($v){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($a){return
q($a);}function
check_sqlite_name($f){global$h;$Pc="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Pc)\$~",$f)){$h->error=lang(9,str_replace("|",", ",$Pc));return
false;}return
true;}function
create_database($v,$I){global$h;if(file_exists($v)){$h->error=lang(10);return
false;}if(!check_sqlite_name($v)){return
false;}$x=new
Min_SQLite($v);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($P){global$h;$h->Min_SQLite(":memory:");foreach($P
as$v){if(!@unlink($v)){$h->error=lang(10);return
false;}}return
true;}function
rename_database($f,$I){global$h;if(!check_sqlite_name($f)){return
false;}$h->Min_SQLite(":memory:");$h->error=lang(10);return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($e,$f,$t,$Ia,$db,$eb,$I,$Aa,$sb){$r=array();foreach($t
as$g){if($g[1]){$r[]=($e!=""&&$g[0]==""?"ADD ":"  ").implode($g[1]);}}$r=array_merge($r,$Ia);if($e!=""){foreach($r
as$a){if(!queries("ALTER TABLE ".table($e)." $a")){return
false;}}if($e!=$f&&!queries("ALTER TABLE ".table($e)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)")){return
false;}if($Aa){queries("UPDATE sqlite_sequence SET seq = $Aa WHERE name = ".q($f));}return
true;}function
alter_indexes($e,$r){foreach($r
as$a){if(!queries($a[2]=="DROP"?"DROP INDEX ".idf_escape($a[1]):"CREATE $a[0] ".($a[0]!="INDEX"?"INDEX ":"").idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e)." $a[2]")){return
false;}}return
true;}function
truncate_tables($B){return
apply_queries("DELETE FROM",$B);}function
drop_views($da){return
apply_queries("DROP VIEW",$da);}function
drop_tables($B){return
apply_queries("DROP TABLE",$B);}function
move_tables($B,$da,$W){return
false;}function
trigger($f){global$h;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($e){$b=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($e))as$c){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$c["sql"],$k);$b[$c["name"]]=array($k[1],$k[2]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$D){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($e,$o,$ya){return
queries("REPLACE INTO ".table($e)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
found_rows($w,$m){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Pd){return
true;}function
create_sql($e,$Aa){global$h;return$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($e));}function
truncate_sql($e){return"DELETE FROM ".table($e);}function
use_sql($Q){}function
trigger_sql($e,$tb){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($e)));}function
show_variables(){global$h;$b=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$d){$b[$d]=$h->result("PRAGMA $d");}return$b;}function
show_status(){$b=array();foreach(get_vals("PRAGMA compile_options")as$Rd){list($d,$a)=explode("=",$Rd,2);$b[$d]=$a;}return$b;}function
support($Pa){return
ereg('^(view|trigger|variables|status|dump)$',$Pa);}$ta="sqlite";$aa=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ea=array_keys($aa);$Fb=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("hex","length","lower","round","unixepoch","upper");$Lb=array("avg","count","count distinct","group_concat","max","min","sum");$Jb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$wa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Ib=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($Qd,$q){if(ini_bool("html_errors")){$q=html_entity_decode(strip_tags($q));}$q=ereg_replace('^[^:]*: ','',$q);$this->error=$q;}function
connect($C,$F,$H){global$l;$v=$l->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($C,"'\\"))."' user='".addcslashes($F,"'\\")."' password='".addcslashes($H,"'\\")."'";$this->_link=@pg_connect($this->_string.($v!=""?" dbname='".addcslashes($v,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$v!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$qc=pg_version($this->_link);$this->server_info=$qc["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($z){return"'".pg_escape_string($this->_link,$z)."'";}function
select_db($Q){global$l;if($Q==$l->database()){return$this->_database;}$b=@pg_connect("$this->_string dbname='".addcslashes($Q,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($b){$this->_link=$b;}return$b;}function
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
connect($C,$F,$H){global$l;$v=$l->database();$z="pgsql:host='".str_replace(":","' port='",addcslashes($C,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($z.($v!=""?" dbname='".addcslashes($v,"'\\")."'":""),$F,$H);return
true;}function
select_db($Q){global$l;return($l->database()==$Q);}function
close(){}}}function
idf_escape($E){return'"'.str_replace('"','""',$E).'"';}function
table($E){return
idf_escape($E);}function
connect(){global$l;$h=new
Min_DB;$na=$l->credentials();if($h->connect($na[0],$na[1],$na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($j,$m,$_,$X=0,$qa=" "){return" $j$m".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$m){return" $j$m";}function
db_collation($v,$Hb){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($P){return
array();}function
table_status($f=""){$b=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$c){$b[$c["Name"]]=$c;}return($f!=""?$b[$f]:$b);}function
is_view($w){return$w["Engine"]=="view";}function
fk_support($w){return
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
indexes($e,$S=null){global$h;if(!is_object($S)){$S=$h;}$b=array();$yd=$S->result("SELECT oid FROM pg_class WHERE relname = ".q($e));$K=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $yd AND attnum > 0",$S);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $yd AND ci.oid = i.indexrelid",$S)as$c){$b[$c["relname"]]["type"]=($c["indisprimary"]=="t"?"PRIMARY":($c["indisunique"]=="t"?"UNIQUE":"INDEX"));$b[$c["relname"]]["columns"]=array();foreach(explode(" ",$c["indkey"])as$Ld){$b[$c["relname"]]["columns"][]=$K[$Ld];}$b[$c["relname"]]["lengths"]=array();}return$b;}function
foreign_keys($e){global$Za;$b=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT oid FROM pg_class WHERE relname = ".q($e).")
AND contype = 'f'::char
ORDER BY conkey, conname")as$c){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$c['definition'],$k)){$c['source']=array_map('trim',explode(',',$k[1]));$c['table']=$k[2];if(preg_match('~(.+)\.(.+)~',$k[2],$hb)){$c['ns']=$hb[1];$c['table']=$hb[2];}$c['target']=array_map('trim',explode(',',$k[3]));$c['on_delete']=(preg_match("~ON DELETE ($Za)~",$k[4],$hb)?$hb[1]:'');$c['on_update']=(preg_match("~ON UPDATE ($Za)~",$k[4],$hb)?$hb[1]:'');$b[$c['conname']]=$c;}}return$b;}function
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
drop_databases($P){global$h;$h->close();return
apply_queries("DROP DATABASE",$P,'idf_escape');}function
rename_database($f,$I){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($e,$f,$t,$Ia,$db,$eb,$I,$Aa,$sb){$r=array();$Ka=array();foreach($t
as$g){$u=idf_escape($g[0]);$a=$g[1];if(!$a){$r[]="DROP $u";}else{$Gc=$a[5];unset($a[5]);if(isset($a[6])&&$g[0]==""){$a[1]=($a[1]=="bigint"?" big":" ")."serial";}if($g[0]==""){$r[]=($e!=""?"ADD ":"  ").implode($a);}else{if($u!=$a[0]){$Ka[]="ALTER TABLE ".table($e)." RENAME $u TO $a[0]";}$r[]="ALTER $u TYPE$a[1]";if(!$a[6]){$r[]="ALTER $u ".($a[3]?"SET$a[3]":"DROP DEFAULT");$r[]="ALTER $u ".($a[2]==" NULL"?"DROP NOT":"SET").$a[2];}}if($g[0]!=""||$Gc!=""){$Ka[]="COMMENT ON COLUMN ".table($e).".$a[0] IS ".($Gc!=""?substr($Gc,9):"''");}}}$r=array_merge($r,$Ia);if($e==""){array_unshift($Ka,"CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)");}elseif($r){array_unshift($Ka,"ALTER TABLE ".table($e)."\n".implode(",\n",$r));}if($e!=""&&$e!=$f){$Ka[]="ALTER TABLE ".table($e)." RENAME TO ".table($f);}if($e!=""||$db!=""){$Ka[]="COMMENT ON TABLE ".table($f)." IS ".q($db);}if($Aa!=""){}foreach($Ka
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($e,$r){$Qa=array();$Ga=array();foreach($r
as$a){if($a[0]!="INDEX"){$Qa[]=($a[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").$a[2]);}elseif($a[2]=="DROP"){$Ga[]=idf_escape($a[1]);}elseif(!queries("CREATE INDEX ".idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e)." $a[2]")){return
false;}}return((!$Qa||queries("ALTER TABLE ".table($e).implode(",",$Qa)))&&(!$Ga||queries("DROP INDEX ".implode(", ",$Ga))));}function
truncate_tables($B){return
queries("TRUNCATE ".implode(", ",array_map('table',$B)));return
true;}function
drop_views($da){return
queries("DROP VIEW ".implode(", ",array_map('table',$da)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$da,$W){foreach($B
as$e){if(!queries("ALTER TABLE ".table($e)." SET SCHEMA ".idf_escape($W))){return
false;}}foreach($da
as$e){if(!queries("ALTER VIEW ".table($e)." SET SCHEMA ".idf_escape($W))){return
false;}}return
true;}function
trigger($f){$A=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($A);}function
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
insert_update($e,$o,$ya){global$h;$Y=array();$m=array();foreach($o
as$d=>$a){$Y[]="$d = $a";if(isset($ya[idf_unescape($d)])){$m[]="$d = $a";}}return($m&&queries("UPDATE ".table($e)." SET ".implode(", ",$Y)." WHERE ".implode(" AND ",$m))&&$h->affected_rows)||queries("INSERT INTO ".table($e)." (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
found_rows($w,$m){global$h;if(ereg(" rows=([0-9]+)",$h->result("EXPLAIN SELECT * FROM ".idf_escape($w["Name"]).($m?" WHERE ".implode(" AND ",$m):"")),$ed)){return$ed[1];}return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($wc){global$h,$aa,$Ea;$b=$h->query("SET search_path TO ".idf_escape($wc));foreach(types()as$D){if(!isset($aa[$D])){$aa[$D]=0;$Ea[lang(11)][]=$D;}}return$b;}function
use_sql($Q){return"\connect ".idf_escape($Q);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($Pa){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Pa);}$ta="pgsql";$aa=array();$Ea=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$d=>$a){$aa+=$a;$Ea[$d]=array_keys($a);}$Fb=array();$ub=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("char_length","lower","round","to_hex","to_timestamp","upper");$Lb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$wa["oracle"]="Oracle";if(isset($_GET["oracle"])){$Ib=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($Qd,$q){if(ini_bool("html_errors")){$q=html_entity_decode(strip_tags($q));}$q=ereg_replace('^[^:]*: ','',$q);$this->error=$q;}function
connect($C,$F,$H){$this->_link=@oci_new_connect($F,$H,$C,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$q=oci_error();$this->error=$q["message"];return
false;}function
quote($z){return"'".str_replace("'","''",$z)."'";}function
select_db($Q){return
true;}function
query($j,$Ca=false){$i=oci_parse($this->_link,$j);if(!$i){$q=oci_error($this->_link);$this->error=$q["message"];return
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
connect($C,$F,$H){$this->dsn("oci:dbname=//$C;charset=AL32UTF8",$F,$H);return
true;}function
select_db($Q){return
true;}}}function
idf_escape($E){return'"'.str_replace('"','""',$E).'"';}function
table($E){return
idf_escape($E);}function
connect(){global$l;$h=new
Min_DB;$na=$l->credentials();if($h->connect($na[0],$na[1],$na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$m,$_,$X=0,$qa=" "){return($X?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $j$m) t WHERE rownum <= ".($_+$X).") WHERE rnum > $X":(isset($_)?" * FROM (SELECT $j$m) WHERE rownum <= ".($_+$X):" $j$m"));}function
limit1($j,$m){return" $j$m";}function
db_collation($v,$Hb){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($P){return
array();}function
table_status($f=""){$b=array();$rb=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $rb":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $rb":""))as$c){if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($w){return$w["Engine"]=="view";}function
fk_support($w){return
true;}function
fields($e){$b=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($e)." ORDER BY column_id")as$c){$D=$c["DATA_TYPE"];$oa="$c[DATA_PRECISION],$c[DATA_SCALE]";if($oa==","){$oa=$c["DATA_LENGTH"];}$b[$c["COLUMN_NAME"]]=array("field"=>$c["COLUMN_NAME"],"full_type"=>$D.($oa?"($oa)":""),"type"=>strtolower($D),"length"=>$oa,"default"=>$c["DATA_DEFAULT"],"null"=>($c["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$b;}function
indexes($e,$S=null){$b=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($e)."
ORDER BY uc.constraint_type, uic.column_position",$S)as$c){$b[$c["INDEX_NAME"]]["type"]=($c["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($c["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$b[$c["INDEX_NAME"]]["columns"][]=$c["COLUMN_NAME"];$b[$c["INDEX_NAME"]]["lengths"][]=($c["CHAR_LENGTH"]&&$c["CHAR_LENGTH"]!=$c["COLUMN_LENGTH"]?$c["CHAR_LENGTH"]:null);}return$b;}function
view($f){$A=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($A);}function
collations(){return
array();}function
information_schema($v){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($a){return
q($a);}function
explain($h,$j){$h->query("EXPLAIN PLAN FOR $j");return$h->query("SELECT * FROM plan_table");}function
found_rows($w,$m){}function
alter_table($e,$f,$t,$Ia,$db,$eb,$I,$Aa,$sb){$r=$Ga=array();foreach($t
as$g){$a=$g[1];if($a&&$g[0]!=""&&idf_escape($g[0])!=$a[0]){queries("ALTER TABLE ".table($e)." RENAME COLUMN ".idf_escape($g[0])." TO $a[0]");}if($a){$r[]=($e!=""?($g[0]!=""?"MODIFY (":"ADD ("):"  ").implode($a).($e!=""?")":"");}else{$Ga[]=idf_escape($g[0]);}}if($e==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n)");}return(!$r||queries("ALTER TABLE ".table($e)."\n".implode("\n",$r)))&&(!$Ga||queries("ALTER TABLE ".table($e)." DROP (".implode(", ",$Ga).")"))&&($e==$f||queries("ALTER TABLE ".table($e)." RENAME TO ".table($f)));}function
foreign_keys($e){return
array();}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($da){return
apply_queries("DROP VIEW",$da);}function
drop_tables($B){return
apply_queries("DROP TABLE",$B);}function
begin(){return
true;}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e)." (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Pd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$A=get_rows('SELECT * FROM v$instance');return
reset($A);}function
support($Pa){return
ereg("view|drop_col|variables|status",$Pa);}$ta="oracle";$aa=array();$Ea=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$d=>$a){$aa+=$a;$Ea[$d]=array_keys($a);}$Fb=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$fa=array("length","lower","round","upper");$Lb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$wa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Ib=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$q){$this->error.="$q[message]\n";}$this->error=rtrim($this->error);}function
connect($C,$F,$H){$this->_link=@sqlsrv_connect($C,array("UID"=>$F,"PWD"=>$H));if($this->_link){$Dd=sqlsrv_server_info($this->_link);$this->server_info=$Dd['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($z){return"'".str_replace("'","''",$z)."'";}function
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
seek($X){for($p=0;$p<$X;$p++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($C,$F,$H){$this->_link=@mssql_connect($C,$F,$H);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$c=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$c[0]] $c[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($z){return"'".str_replace("'","''",$z)."'";}function
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
seek($X){mssql_data_seek($this->_result,$X);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($E){return"[".str_replace("]","]]",$E)."]";}function
table($E){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($E);}function
connect(){global$l;$h=new
Min_DB;$na=$l->credentials();if($h->connect($na[0],$na[1],$na[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$m,$_,$X=0,$qa=" "){return(isset($_)?" TOP (".($_+$X).")":"")." $j$m";}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($v,$Hb){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($v));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($P){global$h;$b=array();foreach($P
as$v){$h->select_db($v);$b[$v]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$c){if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($w){return$w["Engine"]=="VIEW";}function
fk_support($w){return
true;}function
fields($e){$b=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($e))as$c){$D=$c["type"];$oa=(ereg("char|binary",$D)?$c["max_length"]:($D=="decimal"?"$c[precision],$c[scale]":""));$b[$c["name"]]=array("field"=>$c["name"],"full_type"=>$D.($oa?"($oa)":""),"type"=>$D,"length"=>$oa,"default"=>$c["default"],"null"=>$c["is_nullable"],"auto_increment"=>$c["is_identity"],"collation"=>$c["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$c["is_identity"],);}return$b;}function
indexes($e,$S=null){$b=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($e),$S)as$c){$b[$c["name"]]["type"]=($c["is_primary_key"]?"PRIMARY":($c["is_unique"]?"UNIQUE":"INDEX"));$b[$c["name"]]["lengths"]=array();$b[$c["name"]]["columns"][$c["key_ordinal"]]=$c["column_name"];}return$b;}function
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
drop_databases($P){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$P)));}function
rename_database($f,$I){if(eregi('^[a-z0-9_]+$',$I)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $I");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($e,$f,$t,$Ia,$db,$eb,$I,$Aa,$sb){$r=array();foreach($t
as$g){$u=idf_escape($g[0]);$a=$g[1];if(!$a){$r["DROP"][]=" COLUMN $u";}else{$a[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$a[1]);if($g[0]==""){$r["ADD"][]="\n  ".implode("",$a).($e==""?substr($Ia[$a[0]],16+strlen($a[0])):"");}else{unset($a[6]);if($u!=$a[0]){queries("EXEC sp_rename ".q(table($e).".$u").", ".q(idf_unescape($a[0])).", 'COLUMN'");}$r["ALTER COLUMN ".implode("",$a)][]="";}}}if($e==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$r["ADD"])."\n)");}if($e!=$f){queries("EXEC sp_rename ".q(table($e)).", ".q($f));}if($Ia){$r[""]=$Ia;}foreach($r
as$d=>$a){if(!queries("ALTER TABLE ".idf_escape($f)." $d".implode(",",$a))){return
false;}}return
true;}function
alter_indexes($e,$r){$ca=array();$Ga=array();foreach($r
as$a){if($a[2]=="DROP"){if($a[0]=="PRIMARY"){$Ga[]=idf_escape($a[1]);}else{$ca[]=idf_escape($a[1])." ON ".table($e);}}elseif(!queries(($a[0]!="PRIMARY"?"CREATE $a[0] ".($a[0]!="INDEX"?"INDEX ":"").idf_escape($a[1]!=""?$a[1]:uniqid($e."_"))." ON ".table($e):"ALTER TABLE ".table($e)." ADD PRIMARY KEY")." $a[2]")){return
false;}}return(!$ca||queries("DROP INDEX ".implode(", ",$ca)))&&(!$Ga||queries("ALTER TABLE ".table($e)." DROP ".implode(", ",$Ga)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($e,$o){return
queries("INSERT INTO ".table($e).($o?" (".implode(", ",array_keys($o)).")\nVALUES (".implode(", ",$o).")":"DEFAULT VALUES"));}function
insert_update($e,$o,$ya){$Y=array();$m=array();foreach($o
as$d=>$a){$Y[]="$d = $a";if(isset($ya[idf_unescape($d)])){$m[]="$d = $a";}}return
queries("MERGE ".table($e)." USING (VALUES(".implode(", ",$o).")) AS source (c".implode(", c",range(1,count($o))).") ON ".implode(" AND ",$m)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$Y)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($o)).") VALUES (".implode(", ",$o).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$j){$h->query("SET SHOWPLAN_ALL ON");$b=$h->query($j);$h->query("SET SHOWPLAN_ALL OFF");return$b;}function
found_rows($w,$m){}function
foreign_keys($e){$b=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($e))as$c){$U=&$b[$c["FK_NAME"]];$U["table"]=$c["PKTABLE_NAME"];$U["source"][]=$c["FKCOLUMN_NAME"];$U["target"][]=$c["PKCOLUMN_NAME"];}return$b;}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($da){return
queries("DROP VIEW ".implode(", ",array_map('table',$da)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$da,$W){return
apply_queries("ALTER SCHEMA ".idf_escape($W)." TRANSFER",array_merge($B,$da));}function
trigger($f){$A=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$b=reset($A);if($b){$b["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$b["text"]);}return$b;}function
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
set_schema($wc){return
true;}function
use_sql($Q){return"USE ".idf_escape($Q);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($Pa){return
ereg('^(scheme|trigger|view|drop_col)$',$Pa);}$ta="mssql";$aa=array();$Ea=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$d=>$a){$aa+=$a;$Ea[$d]=array_keys($a);}$Fb=array();$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$fa=array("len","lower","round","upper");$Lb=array("avg","count","count distinct","max","min","sum");$Jb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$wa=array("server"=>"MySQL")+$wa;if(!defined("DRIVER")){$Ib=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($C,$F,$H){mysqli_report(MYSQLI_REPORT_OFF);list($Hd,$Ob)=explode(":",$C,2);$b=@$this->real_connect(($C!=""?$Hd:ini_get("mysqli.default_host")),($C.$F!=""?$F:ini_get("mysqli.default_user")),($C.$F.$H!=""?$H:ini_get("mysqli.default_pw")),null,(is_numeric($Ob)?$Ob:ini_get("mysqli.default_port")),(!is_numeric($Ob)?$Ob:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($j,$g=0){$i=$this->query($j);if(!$i){return
false;}$c=$i->fetch_array();return$c[$g];}function
quote($z){return"'".$this->escape_string($z)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($C,$F,$H){$this->_link=@mysql_connect(($C!=""?$C:ini_get("mysql.default_host")),("$C$F"!=""?$F:ini_get("mysql.default_user")),("$C$F$H"!=""?$H:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($z){return"'".mysql_real_escape_string($z,$this->_link)."'";}function
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
connect($C,$F,$H){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$C)),$F,$H);$this->query("SET NAMES utf8");return
true;}function
select_db($Q){return$this->query("USE ".idf_escape($Q));}function
query($j,$Ca=false){$this->setAttribute(1000,!$Ca);return
parent::query($j,$Ca);}}}function
idf_escape($E){return"`".str_replace("`","``",$E)."`";}function
table($E){return
idf_escape($E);}function
connect(){global$l;$h=new
Min_DB;$na=$l->credentials();if($h->connect($na[0],$na[1],$na[2])){$h->query("SET sql_quote_show_create = 1");return$h;}return$h->error;}function
get_databases($Jd=true){global$h;$b=&get_session("dbs");if(!isset($b)){if($Jd){restart_session();ob_flush();flush();}$b=get_vals($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($j,$m,$_,$X=0,$qa=" "){return" $j$m".(isset($_)?$qa."LIMIT $_".($X?" OFFSET $X":""):"");}function
limit1($j,$m){return
limit($j,$m,1);}function
db_collation($v,$Hb){global$h;$b=null;$Qa=$h->result("SHOW CREATE DATABASE ".idf_escape($v),1);if(preg_match('~ COLLATE ([^ ]+)~',$Qa,$k)){$b=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Qa,$k)){$b=$Hb[$k[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$c){if(ereg("YES|DEFAULT",$c["Support"])){$b[]=$c["Engine"];}}return$b;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($P){$b=array();foreach($P
as$v){$b[$v]=count(get_vals("SHOW TABLES IN ".idf_escape($v)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$c){if($c["Engine"]=="InnoDB"){$c["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$c["Comment"]);}if(!isset($c["Rows"])){$c["Comment"]="";}if($f!=""){return$c;}$b[$c["Name"]]=$c;}return$b;}function
is_view($w){return!isset($w["Rows"]);}function
fk_support($w){return
eregi("InnoDB|IBMDB2I",$w["Engine"]);}function
fields($e){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($e))as$c){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$c["Type"],$k);$b[$c["Field"]]=array("field"=>$c["Field"],"full_type"=>$c["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($c["Default"]!=""||ereg("char",$k[1])?$c["Default"]:null),"null"=>($c["Null"]=="YES"),"auto_increment"=>($c["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$c["Extra"],$k)?$k[1]:""),"collation"=>$c["Collation"],"privileges"=>array_flip(explode(",",$c["Privileges"])),"comment"=>$c["Comment"],"primary"=>($c["Key"]=="PRI"),);}return$b;}function
indexes($e,$S=null){$b=array();foreach(get_rows("SHOW INDEX FROM ".table($e),$S)as$c){$b[$c["Key_name"]]["type"]=($c["Key_name"]=="PRIMARY"?"PRIMARY":($c["Index_type"]=="FULLTEXT"?"FULLTEXT":($c["Non_unique"]?"INDEX":"UNIQUE")));$b[$c["Key_name"]]["columns"][]=$c["Column_name"];$b[$c["Key_name"]]["lengths"][]=$c["Sub_part"];}return$b;}function
foreign_keys($e){global$h,$Za;static$V='`(?:[^`]|``)+`';$b=array();$jd=$h->result("SHOW CREATE TABLE ".table($e),1);if($jd){preg_match_all("~CONSTRAINT ($V) FOREIGN KEY \\(((?:$V,? ?)+)\\) REFERENCES ($V)(?:\\.($V))? \\(((?:$V,? ?)+)\\)(?: ON DELETE ($Za))?(?: ON UPDATE ($Za))?~",$jd,$ga,PREG_SET_ORDER);foreach($ga
as$k){preg_match_all("~$V~",$k[2],$vc);preg_match_all("~$V~",$k[5],$W);$b[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$vc[0]),"target"=>array_map('idf_unescape',$W[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$b;}function
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
drop_databases($P){set_session("dbs",null);return
apply_queries("DROP DATABASE",$P,'idf_escape');}function
rename_database($f,$I){if(create_database($f,$I)){$fb=array();foreach(tables_list()as$e=>$D){$fb[]=table($e)." TO ".idf_escape($f).".".table($e);}if(!$fb||queries("RENAME TABLE ".implode(", ",$fb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$lc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$ca){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$ca["columns"],true)){$lc="";break;}if($ca["type"]=="PRIMARY"){$lc=" UNIQUE";}}}return" AUTO_INCREMENT$lc";}function
alter_table($e,$f,$t,$Ia,$db,$eb,$I,$Aa,$sb){$r=array();foreach($t
as$g){$r[]=($g[1]?($e!=""?($g[0]!=""?"CHANGE ".idf_escape($g[0]):"ADD"):" ")." ".implode($g[1]).($e!=""?" $g[2]":""):"DROP ".idf_escape($g[0]));}$r=array_merge($r,$Ia);$kd="COMMENT=".q($db).($eb?" ENGINE=".q($eb):"").($I?" COLLATE ".q($I):"").($Aa!=""?" AUTO_INCREMENT=$Aa":"").$sb;if($e==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$r)."\n) $kd");}if($e!=$f){$r[]="RENAME TO ".table($f);}$r[]=$kd;return
queries("ALTER TABLE ".table($e)."\n".implode(",\n",$r));}function
alter_indexes($e,$r){foreach($r
as$d=>$a){$r[$d]=($a[2]=="DROP"?"\nDROP INDEX ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").($a[1]!=""?idf_escape($a[1])." ":"").$a[2]);}return
queries("ALTER TABLE ".table($e).implode(",",$r));}function
truncate_tables($B){return
apply_queries("TRUNCATE TABLE",$B);}function
drop_views($da){return
queries("DROP VIEW ".implode(", ",array_map('table',$da)));}function
drop_tables($B){return
queries("DROP TABLE ".implode(", ",array_map('table',$B)));}function
move_tables($B,$da,$W){$fb=array();foreach(array_merge($B,$da)as$e){$fb[]=table($e)." TO ".idf_escape($W).".".table($e);}return
queries("RENAME TABLE ".implode(", ",$fb));}function
copy_tables($B,$da,$W){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($B
as$e){$f=($W==DB?table("copy_$e"):idf_escape($W).".".table($e));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($e))||!queries("INSERT INTO $f SELECT * FROM ".table($e))){return
false;}}foreach($da
as$e){$f=($W==DB?table("copy_$e"):idf_escape($W).".".table($e));$Id=view($e);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Id[select]")){return
false;}}return
true;}function
trigger($f){$A=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($A);}function
triggers($e){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($e,"%_")))as$c){$b[$c["Trigger"]]=array($c["Timing"],$c["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$D){global$h,$Bc,$sd,$aa;$Td=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$hd="((".implode("|",array_merge(array_keys($aa),$Td)).")(?:\\s*\\(((?:[^'\")]*|$Bc)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$V="\\s*(".($D=="FUNCTION"?"":$sd).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$hd";$Qa=$h->result("SHOW CREATE $D ".idf_escape($f),2);preg_match("~\\(((?:$V\\s*,?)*)\\)".($D=="FUNCTION"?"\\s*RETURNS\\s+$hd":"")."\\s*(.*)~is",$Qa,$k);$t=array();preg_match_all("~$V\\s*,?~is",$k[1],$ga,PREG_SET_ORDER);foreach($ga
as$Fa){$f=str_replace("``","`",$Fa[2]).$Fa[3];$t[]=array("field"=>$f,"type"=>strtolower($Fa[5]),"length"=>preg_replace_callback("~$Bc~s",'normalize_enum',$Fa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Fa[8] $Fa[7]"))),"full_type"=>$Fa[4],"inout"=>strtoupper($Fa[1]),"collation"=>strtolower($Fa[9]),);}if($D!="FUNCTION"){return
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
insert_update($e,$o,$ya){foreach($o
as$d=>$a){$o[$d]="$d = $a";}$Y=implode(", ",$o);return
queries("INSERT INTO ".table($e)." SET $Y ON DUPLICATE KEY UPDATE $Y");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$j){return$h->query("EXPLAIN $j");}function
found_rows($w,$m){return($m||$w["Engine"]!="InnoDB"?null:$w["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($wc){return
true;}function
create_sql($e,$Aa){global$h;$b=$h->result("SHOW CREATE TABLE ".table($e),1);if(!$Aa){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($e){return"TRUNCATE ".table($e);}function
use_sql($Q){return"USE ".idf_escape($Q);}function
trigger_sql($e,$tb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($e,"%_")),null,"-- ")as$c){$b.="\n".($tb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($c["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($c["Trigger"])." $c[Timing] $c[Event] ON ".table($c["Table"])." FOR EACH ROW\n$c[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Pa){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$Pa);}$ta="sql";$aa=array();$Ea=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$d=>$a){$aa+=$a;$Ea[$d]=array_keys($a);}$Fb=array("unsigned","zerofill","unsigned zerofill");$ub=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$fa=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Lb=array("avg","count","count distinct","group_concat","max","min","sum");$Jb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$dc="3.3.2";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(19)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$h;$P=get_databases(false);return(!$P?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$P[(information_schema($P[0])?1:0)]);}function
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
login($ie,$H){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($qb){return
h($qb["Comment"]!=""?$qb["Comment"]:$qb["Name"]);}function
fieldName($g,$pa=0){return
h($g["comment"]!=""?$g["comment"]:$g["field"]);}function
selectLinks($qb,$o=""){$y=$qb["Name"];if(isset($o)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($y).$o).'">'.lang(24)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(25)."'>&gt;&gt;</a>\n";}function
foreignKeys($e){return
foreign_keys($e);}function
backwardKeys($e,$ee){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($e)."
ORDER BY ORDINAL_POSITION",null,"")as$c){$b[$c["TABLE_NAME"]]["keys"][$c["CONSTRAINT_NAME"]][$c["COLUMN_NAME"]]=$c["REFERENCED_COLUMN_NAME"];}foreach($b
as$d=>$a){$f=$this->tableName(table_status($d));if($f!=""){$rb=preg_quote($ee);$qa="(:|\\s*-)?\\s+";$b[$d]["name"]=(preg_match("(^$rb$qa(.+)|^(.+?)$qa$rb\$)iu",$f,$k)?$k[2].$k[3]:$f);}else{unset($b[$d]);}}return$b;}function
backwardKeysPrint($he,$c){foreach($he
as$e=>$ud){foreach($ud["keys"]as$cb){$x=ME.'select='.urlencode($e);$p=0;foreach($cb
as$u=>$a){$x.=where_link($p++,$u,$c[$a]);}echo"<a href='".h($x)."'>".h($ud["name"])."</a>";$x=ME.'edit='.urlencode($e);foreach($cb
as$u=>$a){$x.="&set".urlencode("[".bracket_escape($u)."]")."=".urlencode($c[$a]);}echo"<a href='".h($x)."' title='".lang(24)."'>+</a> ";}}}function
selectQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->\n";}function
rowDescription($e){foreach(fields($e)as$g){if(ereg("varchar|character varying",$g["type"])){return
idf_escape($g["field"]);}}return"";}function
rowDescriptions($A,$Eb){$b=$A;foreach($A[0]as$d=>$a){if(list($e,$N,$f)=$this->_foreignColumn($Eb,$d)){$wd=array();foreach($A
as$c){$wd[$c[$d]]=exact_value($c[$d]);}$tc=$this->_values[$e];if(!$tc){$tc=get_key_vals("SELECT $N, $f FROM ".table($e)." WHERE $N IN (".implode(", ",$wd).")");}foreach($A
as$M=>$c){if(isset($c[$d])){$b[$M][$d]=(string)$tc[$c[$d]];}}}}return$b;}function
selectVal($a,$x,$g){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$g["type"])&&!is_utf8($a)){$b=lang(26,strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$x' alt='$b'>";}}if(like_bool($g)&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.2").'" alt="'.h($a).'">';}if($x){$b="<a href='$x'>$b</a>";}if(!$x&&!like_bool($g)&&ereg('int|float|double|decimal',$g["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$g["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$g){if(ereg('date|timestamp',$g["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(27),$a);}return(ereg("binary",$g["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($G,$K){}function
selectSearchPrint($m,$K,$ba){$m=(array)$_GET["where"];echo'<fieldset><legend>'.lang(28)."</legend><div>\n";$rc=array();foreach($m
as$d=>$a){$rc[$a["col"]]=$d;}$p=0;$t=fields($_GET["select"]);foreach($t
as$f=>$g){$Ja=$K[$f];if(ereg("enum",$g["type"])&&$Ja!=""){$d=$rc[$f];$p--;echo"<div>".h($Ja)."<input type='hidden' name='where[$p][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$p][val][]'",$g,(array)$m[$d]["val"],($g["null"]?0:null)),"</div>\n";unset($K[$f]);}}foreach($K
as$f=>$Ja){$ua=$this->_foreignKeyOptions($_GET["select"],$f);if(is_array($ua)){if($t[$f]["null"]){$ua[0]='('.lang(4).')';}$d=$rc[$f];$p--;echo"<div>".h($Ja)."<input type='hidden' name='where[$p][col]' value='".h($f)."'><input type='hidden' name='where[$p][op]' value='='>: <select name='where[$p][val]'>".optionlist($ua,$m[$d]["val"],true)."</select></div>\n";unset($K[$f]);}}$p=0;foreach($m
as$a){if(($a["col"]==""||$K[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$p][col]'><option value=''>(".lang(29).")".optionlist($K,$a["col"],true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$p][val]' value='".h($a["val"])."'></div>\n";$p++;}}echo"<div><select name='where[$p][col]' onchange='selectAddRow(this);'><option value=''>(".lang(29).")".optionlist($K,null,true)."</select>",html_select("where[$p][op]",array(-1=>"")+$this->operators),"<input name='where[$p][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($pa,$K,$ba){$uc=array();foreach($ba
as$d=>$ca){$pa=array();foreach($ca["columns"]as$a){$pa[]=$K[$a];}if(count(array_filter($pa,'strlen'))>1&&$d!="PRIMARY"){$uc[$d]=implode(", ",$pa);}}if($uc){echo'<fieldset><legend>'.lang(30)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$uc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($_){echo"<fieldset><legend>".lang(31)."</legend><div>";echo
html_select("limit",array("","30","100"),$_),"</div></fieldset>\n";}function
selectLengthPrint($pb){}function
selectActionPrint(){echo"<fieldset><legend>".lang(32)."</legend><div>","<input type='submit' value='".lang(33)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($Mb,$K){if($Mb){print_fieldset("email",lang(34),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(35).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(36).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$K,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(37)."'>\n";echo"<p>".lang(38).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($Mb)==1?'<input type="hidden" name="email_field" value="'.h(key($Mb)).'">':html_select("email_field",$Mb)),"<input type='submit' name='email' value='".lang(39)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($K,$ba){return
array(array(),array());}function
selectSearchProcess($t,$ba){$b=array();foreach((array)$_GET["where"]as$d=>$m){$Oa=$m["col"];$vb=$m["op"];$a=$m["val"];if(($d<0?"":$Oa).$a!=""){$wb=array();foreach(($Oa!=""?array($Oa=>$t[$Oa]):$t)as$f=>$g){if($Oa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$g["type"])){$f=idf_escape($f);if($Oa!=""&&$g["type"]=="enum"){$wb[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$rd=ereg('char|text|enum|set',$g["type"]);$n=$this->processInput($g,(!$vb&&$rd&&ereg('^[^%]+$',$a)?"%$a%":$a));$wb[]=$f.($n=="NULL"?" IS".($vb==">="?" NOT":"")." $n":(in_array($vb,$this->operators)||$vb=="="?" $vb $n":($rd?" LIKE $n":" IN (".str_replace(",","', '",$n).")")));if($d<0&&$a=="0"){$wb[]="$f IS NULL";}}}}$b[]=($wb?"(".implode(" OR ",$wb).")":"0");}}return$b;}function
selectOrderProcess($t,$ba){$Ub=$_GET["index_order"];if($Ub!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Ub!=""?array($ba[$Ub]):$ba)as$ca){if($Ub!=""||$ca["type"]=="INDEX"){$Ja=false;foreach($ca["columns"]as$a){if(ereg('date|timestamp',$t[$a]["type"])){$Ja=true;break;}}$b=array();foreach($ca["columns"]as$a){$b[]=idf_escape($a).($Ja?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($m,$Eb){if($_POST["email_append"]){return
true;}if($_POST["email"]){$fd=0;if($_POST["all"]||$_POST["check"]){$g=idf_escape($_POST["email_field"]);$bc=$_POST["email_subject"];$xa=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$bc.$xa",$ga);$A=get_rows("SELECT DISTINCT $g".($ga[1]?", ".implode(", ",array_map('idf_escape',array_unique($ga[1]))):"")." FROM ".table($_GET["select"])." WHERE $g IS NOT NULL AND $g != ''".($m?" AND ".implode(" AND ",$m):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$t=fields($_GET["select"]);foreach($this->rowDescriptions($A,$Eb)as$c){$Hc=array('{\\'=>'{');foreach($ga[1]as$a){$Hc['{$'."$a}"]=$this->editVal($c[$a],$t[$a]);}$mb=$c[$_POST["email_field"]];if(is_mail($mb)&&send_mail($mb,strtr($bc,$Hc),strtr($xa,$Hc),$_POST["email_from"],$_FILES["email_files"])){$fd++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(40,$fd));}return
false;}function
messageQuery($j){return"<!--\n".str_replace("--","--><!-- ",$j)."\n-->";}function
editFunctions($g){$b=array();if($g["null"]&&ereg('blob',$g["type"])){$b["NULL"]=lang(4);}$b[""]=($g["null"]||$g["auto_increment"]||like_bool($g)?"":"*");if(ereg('date|time',$g["type"])){$b["now"]=lang(41);}if(eregi('_(md5|sha1)$',$g["field"],$k)){$b[]=strtolower($k[1]);}return$b;}function
editInput($e,$g,$ia,$n){if($g["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ia value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ia,$g,($n||isset($_GET["select"])?$n:0),($g["null"]?"":null));}$ua=$this->_foreignKeyOptions($e,$g["field"],$n);if(isset($ua)){return(is_array($ua)?"<select$ia>".optionlist($ua,$n,true)."</select>":"<input value='".h($n)."'$ia class='hidden'><input value='".h($ua)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($e)."&field=".urlencode($g["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($g)){return'<input type="checkbox" value="'.h($n?$n:1).'"'.($n?' checked':'')."$ia>";}$ib="";if(ereg('time',$g["type"])){$ib=lang(42);}if(ereg('date|timestamp',$g["type"])){$ib=lang(43).($ib?" [$ib]":"");}if($ib){return"<input value='".h($n)."'$ia> ($ib)";}if(eregi('_(md5|sha1)$',$g["field"])){return"<input type='password' value='".h($n)."'$ia>";}return'';}function
processInput($g,$n,$L=""){if($L=="now"){return"$L()";}$b=$n;if(ereg('date|timestamp',$g["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(27)))).'(.*))',$n,$k)){$b=($k["p1"]!=""?$k["p1"]:($k["p2"]!=""?($k["p2"]<70?20:19).$k["p2"]:gmdate("Y")))."-$k[p3]$k[p4]-$k[p5]$k[p6]".end($k);}$b=($g["type"]=="bit"&&ereg('^[0-9]+$',$n)?$b:q($b));if($n==""&&($g["null"]||!ereg('char|text',$g["type"]))&&!like_bool($g)){$b="NULL";}elseif(ereg('^(md5|sha1)$',$L)){$b="$L($b)";}if(ereg("binary",$g["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($e,$tb,$j){global$h;$i=$h->query($j,1);if($i){while($c=$i->fetch_assoc()){if($tb=="table"){dump_csv(array_keys($c));$tb="INSERT";}dump_csv($c);}}}function
dumpHeaders($hc,$Tc=false){$be="csv";header("Content-Type: text/csv; charset=utf-8");return$be;}function
homepage(){return
true;}function
navigation($Db){global$dc,$_a;echo'<h1>
',$this->name(),' <span class="version">',$dc,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($dc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Db=="auth"){$Ba=true;foreach((array)$_SESSION["pwds"]["server"][""]as$F=>$H){if(isset($H)){if($Ba){echo"<p onclick='eventStop(event);'>\n";$Ba=false;}echo"<a href='".h(auth_url("server","",$F))."'>".($F!=""?h($F):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(44),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$_a,'">
</p>
</form>
';if($Db!="db"&&$Db!="ns"){$w=table_status();if(!$w){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($w);}}}}function
tablesPrint($B){echo"<p id='tables'>\n";foreach($B
as$c){$f=$this->tableName($c);if(isset($c["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($c["Name"])."'".bold($_GET["select"]==$c["Name"]).">$f</a><br>\n";}}}function
_foreignColumn($Eb,$u){foreach((array)$Eb[$u]as$ec){if(count($ec["source"])==1){$f=$this->rowDescription($ec["table"]);if($f!=""){$N=idf_escape($ec["target"][0]);return
array($ec["table"],$N,$f);}}}}function
_foreignKeyOptions($e,$u,$n=null){global$h;if(list($W,$N,$f)=$this->_foreignColumn(column_foreign_keys($e),$u)){$b=&$this->_values[$W];if(!isset($b)){$w=table_status($W);$b=($w["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $N, $f FROM ".table($W)." ORDER BY 2"));}if(!$b&&isset($n)){return$h->result("SELECT $f FROM ".table($W)." WHERE $N = ".q($n));}return$b;}}}$l=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Jc,$q="",$Bb=array(),$Ic=""){global$R,$l,$h,$wa;header("Content-Type: text/html; charset=utf-8");if($l->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$ad=$Jc.($Ic!=""?": ".h($Ic):"");$Wc=strip_tags($ad.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$l->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Wc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$R,'" dir="',lang(45),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Wc,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.2",'">
<script type="text/javascript">
var areYouSure = \'',lang(46),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.2",'"></script>
';if($l->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(45),' nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Bb)){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($x?$x:".").'">'.$wa[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$C=(SERVER!=""?h(SERVER):lang(47));if($Bb===false){echo"$C\n";}else{echo"<a href='".($x?h($x):".")."' accesskey='1' title='Alt+Shift+1'>$C</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Bb))){echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Bb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Bb
as$d=>$a){$Ja=(is_array($a)?$a[1]:$a);if($Ja!=""){echo'<a href="'.h(ME."$d=").urlencode(is_array($a)?$a[0]:$a).'">'.h($Ja).'</a> &raquo; ';}}}echo"$Jc\n";}}echo"<span id='loader'></span>\n","<h2>$ad</h2>\n";restart_session();$Vc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Xc=$_SESSION["messages"][$Vc];if($Xc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Xc)."</div>\n";unset($_SESSION["messages"][$Vc]);}$P=&get_session("dbs");if(DB!=""&&$P&&!in_array(DB,$P,true)){$P=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Db=""){global$l;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$l->navigation($Db);echo'</div>
';}}function
int32($M){while($M>=2147483648){$M-=4294967296;}while($M<=-2147483649){$M+=4294967296;}return(int)$M;}function
long2str($s,$sc){$Ta='';foreach($s
as$a){$Ta.=pack('V',$a);}if($sc){return
substr($Ta,0,end($s));}return$Ta;}function
str2long($Ta,$sc){$s=array_values(unpack('V*',str_pad($Ta,4*ceil(strlen($Ta)/4),"\0")));if($sc){$s[]=strlen($Ta);}return$s;}function
xxtea_mx($ma,$la,$sa,$va){return
int32((($ma>>5&0x7FFFFFF)^$la<<2)+(($la>>3&0x1FFFFFFF)^$ma<<4))^int32(($sa^$la)+($va^$ma));}function
encrypt_string($Cb,$d){if($Cb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($Cb,true);$M=count($s)-1;$ma=$s[$M];$la=$s[0];$Tb=floor(6+52/($M+1));$sa=0;while($Tb-->0){$sa=int32($sa+0x9E3779B9);$Ab=$sa>>2&3;for($ka=0;$ka<$M;$ka++){$la=$s[$ka+1];$Ua=xxtea_mx($ma,$la,$sa,$d[$ka&3^$Ab]);$ma=int32($s[$ka]+$Ua);$s[$ka]=$ma;}$la=$s[0];$Ua=xxtea_mx($ma,$la,$sa,$d[$ka&3^$Ab]);$ma=int32($s[$M]+$Ua);$s[$M]=$ma;}return
long2str($s,false);}function
decrypt_string($Cb,$d){if($Cb==""){return"";}$d=array_values(unpack("V*",pack("H*",md5($d))));$s=str2long($Cb,false);$M=count($s)-1;$ma=$s[$M];$la=$s[0];$Tb=floor(6+52/($M+1));$sa=int32($Tb*0x9E3779B9);while($sa){$Ab=$sa>>2&3;for($ka=$M;$ka>0;$ka--){$ma=$s[$ka-1];$Ua=xxtea_mx($ma,$la,$sa,$d[$ka&3^$Ab]);$la=int32($s[$ka]-$Ua);$s[$ka]=$la;}$ma=$s[$M];$Ua=xxtea_mx($ma,$la,$sa,$d[$ka&3^$Ab]);$la=int32($s[0]-$Ua);$s[0]=$la;$sa=int32($sa-0x9E3779B9);}return
long2str($s,true);}$h='';$_a=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Ra=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($d)=explode(":",$a);$Ra[$d]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$d=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Wb=$l->permanentLogin();$Ra[$d]="$d:".base64_encode($Wb?encrypt_string($_POST["password"],$Wb):"");cookie("adminer_permanent",implode(" ",$Ra));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($_a&&$_POST["token"]!=$_a){page_header(lang(44),lang(48));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$d){set_session($d,null);}$d=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Ra[$d]){unset($Ra[$d]);cookie("adminer_permanent",implode(" ",$Ra));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(49));}}elseif($Ra&&!$_SESSION["pwds"]){session_regenerate_id();$Wb=$l->permanentLogin();foreach($Ra
as$d=>$a){list(,$Yd)=explode(":",$a);list($Sb,$C,$F)=array_map('base64_decode',explode("-",$d));$_SESSION["pwds"][$Sb][$C][$F]=decrypt_string(base64_decode($Yd),$Wb);}}function
auth_error($Sc=null){global$h,$l,$_a;$Xb=session_name();$q="";if(!$_COOKIE[$Xb]&&$_GET[$Xb]&&ini_bool("session.use_only_cookies")){$q=lang(50);}elseif(isset($_GET["username"])){if(($_COOKIE[$Xb]||$_GET[$Xb])&&!$_a){$q=lang(51);}else{$H=&get_session("pwds");if(isset($H)){$q=h($Sc?$Sc->getMessage():(is_string($h)?$h:lang(52)));$H=null;}}}page_header(lang(22),$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$l->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(53),lang(54,implode(", ",$Ib)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$l->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$_a=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$_a;}$q=($_POST?($_POST["token"]==$_a?"":lang(48)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(55,'"post_max_size"')));$h->select_db($l->database());function
email_header($Sd){return"=?UTF-8?B?".base64_encode($Sd)."?=";}function
send_mail($mb,$bc,$xa,$gb="",$Yb=array()){$ha=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$xa=str_replace("\n",$ha,wordwrap(str_replace("\r","","$xa\n")));$Vb=uniqid("boundary");$Zb="";foreach((array)$Yb["error"]as$d=>$a){if(!$a){$Zb.="--$Vb$ha"."Content-Type: ".str_replace("\n","",$Yb["type"][$d]).$ha."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Yb["name"][$d])."\"$ha"."Content-Transfer-Encoding: base64$ha$ha".chunk_split(base64_encode(file_get_contents($Yb["tmp_name"][$d])),76,$ha).$ha;}}$Oc="";$ac="Content-Type: text/plain; charset=utf-8$ha"."Content-Transfer-Encoding: 8bit";if($Zb){$Zb.="--$Vb--$ha";$Oc="--$Vb$ha$ac$ha$ha";$ac="Content-Type: multipart/mixed; boundary=\"$Vb\"";}$ac.=$ha."MIME-Version: 1.0$ha"."X-Mailer: Adminer Editor".($gb?$ha."From: ".str_replace("\n","",$gb):"");return
mail($mb,email_header($bc),$Oc.$xa.$Zb,$ac);}function
like_bool($g){return
ereg("bool|(tinyint|bit)\\(1\\)",$g["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Za="RESTRICT|CASCADE|SET NULL|NO ACTION";$wa[DRIVER]=lang(22);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$y=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$y-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($y)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$y=$_GET["edit"];$m=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Y=(isset($_GET["select"])?$_POST["edit"]:$m);$t=fields($y);foreach($t
as$f=>$g){if(!isset($g["privileges"][$Y?"update":"insert"])||$l->fieldName($g)==""){unset($t[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$Z=$_POST["referer"];if($_POST["insert"]){$Z=($Y?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$Z)){$Z=ME."select=".urlencode($y);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($y)," WHERE $m"),$Z,lang(56));}else{$o=array();foreach($t
as$f=>$g){$a=process_input($g);if($a!==false&&$a!==null){$o[idf_escape($f)]=($Y?"\n".idf_escape($f)." = $a":$a);}}if($Y){if(!$o){redirect($Z);}query_redirect("UPDATE".limit1(table($y)." SET".implode(",",$o),"\nWHERE $m"),$Z,lang(57));}else{$i=insert_into($y,$o);$Yc=($i?last_id():0);queries_redirect($Z,lang(58,($Yc?" $Yc":"")),$i);}}}$_b=$l->tableName(table_status($y));page_header(($Y?lang(59):lang(37)),$q,array("select"=>array($y,$_b)),$_b);$c=null;if($_POST["save"]){$c=(array)$_POST["fields"];}elseif($m){$G=array();foreach($t
as$f=>$g){if(isset($g["privileges"]["select"])){$G[]=($_POST["clone"]&&$g["auto_increment"]?"'' AS ":(ereg("enum|set",$g["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$c=array();if($G){$A=get_rows("SELECT".limit(implode(", ",$G)." FROM ".table($y)," WHERE $m",(isset($_GET["select"])?2:1)));$c=(isset($_GET["select"])&&count($A)!=1?null:reset($A));}}if($c===false){echo"<p class='error'>".lang(60)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($t){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($t
as$f=>$g){echo"<tr><th>".$l->fieldName($g);$lb=$_GET["set"][bracket_escape($f)];$n=(isset($c)?($c[$f]!=""&&ereg("enum|set",$g["type"])?(is_array($c[$f])?array_sum($c[$f]):+$c[$f]):$c[$f]):(!$Y&&$g["auto_increment"]?"":(isset($_GET["select"])?false:(isset($lb)?$lb:$g["default"]))));if(!$_POST["save"]&&is_string($n)){$n=$l->editVal($n,$g);}$L=($_POST["save"]?(string)$_POST["function"][$f]:($Y&&$g["on_update"]=="CURRENT_TIMESTAMP"?"now":($n===false?null:(isset($n)?'':'NULL'))));if($g["type"]=="timestamp"&&$n=="CURRENT_TIMESTAMP"){$n="";$L="now";}input($g,$n,$L);echo"\n";}echo"</table>\n";}echo'<p>
';if($t){echo"<input type='submit' value='".lang(61)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Y?lang(62):lang(63))."' title='Ctrl+Shift+Enter'>\n";}}echo($Y?"<input type='submit' name='delete' value='".lang(64)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$t?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$_a,'">
</form>
';}elseif(isset($_GET["select"])){$y=$_GET["select"];$w=table_status($y);$ba=indexes($y);$t=fields($y);$xb=column_foreign_keys($y);if($w["Oid"]=="t"){$ba[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$cc);$bd=array();$K=array();$pb=null;foreach($t
as$d=>$g){$f=$l->fieldName($g);if(isset($g["privileges"]["select"])&&$f!=""){$K[$d]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$g["type"])){$pb=$l->selectLengthProcess();}}$bd+=$g["privileges"];}list($G,$ja)=$l->selectColumnsProcess($K,$ba);$m=$l->selectSearchProcess($t,$ba);$pa=$l->selectOrderProcess($t,$ba);$_=$l->selectLimitProcess();$gb=($G?implode(", ",$G):($w["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($y);$pc=($ja&&count($ja)<count($G)?"\nGROUP BY ".implode(", ",$ja):"").($pa?"\nORDER BY ".implode(", ",$pa):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ha=>$c){echo$h->result("SELECT".limit(idf_escape(key($c))." FROM ".table($y)," WHERE ".where_check($Ha).($m?" AND ".implode(" AND ",$m):"").($pa?" ORDER BY ".implode(", ",$pa):""),1));}exit;}if($_POST&&!$q){$md="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$ya=$zb=null;foreach($ba
as$ca){if($ca["type"]=="PRIMARY"){$ya=array_flip($ca["columns"]);$zb=($G?$ya:array());break;}}foreach((array)$zb
as$d=>$a){if(in_array(idf_escape($d),$G)){unset($zb[$d]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($y);$l->dumpTable($y,"");if(!is_array($_POST["check"])||$zb===array()){$kb=$m;if(is_array($_POST["check"])){$kb[]="($md)";}$j="SELECT $gb".($kb?"\nWHERE ".implode(" AND ",$kb):"").$pc;}else{$ld=array();foreach($_POST["check"]as$a){$ld[]="(SELECT".limit($gb,"\nWHERE ".($m?implode(" AND ",$m)." AND ":"").where_check($a).$pc,1).")";}$j=implode(" UNION ALL ",$ld);}$l->dumpData($y,"table",$j);exit;}if(!$l->selectEmailProcess($m,$xb)){if($_POST["save"]||$_POST["delete"]){$i=true;$Na=0;$j=table($y);$o=array();if(!$_POST["delete"]){foreach($K
as$f=>$a){$a=process_input($t[$f]);if($a!==null){if($_POST["clone"]){$o[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$o[]=idf_escape($f)." = $a";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($o)).")\nSELECT ".implode(", ",$o)."\nFROM ".table($y):" SET\n".implode(",\n",$o));}if($_POST["delete"]||$o){$Pb="UPDATE";if($_POST["delete"]){$Pb="DELETE";$j="FROM $j";}if($_POST["clone"]){$Pb="INSERT";$j="INTO $j";}if($_POST["all"]||($zb===array()&&$_POST["check"])||count($ja)<count($G)){$i=queries($Pb." $j".($_POST["all"]?($m?"\nWHERE ".implode(" AND ",$m):""):"\nWHERE $md"));$Na=$h->affected_rows;}else{foreach((array)$_POST["check"]as$a){$i=queries($Pb.limit1($j,"\nWHERE ".where_check($a)));if(!$i){break;}$Na+=$h->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(65,$Na),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q=lang(66);}else{$i=true;$Na=0;foreach($_POST["val"]as$Ha=>$c){$o=array();foreach($c
as$d=>$a){$d=bracket_escape($d,1);$o[]=idf_escape($d)." = ".(ereg('char|text',$t[$d]["type"])||$a!=""?$l->processInput($t[$d],$a):"NULL");}$j=table($y)." SET ".implode(", ",$o);$kb=" WHERE ".where_check($Ha).($m?" AND ".implode(" AND ",$m):"");$i=queries("UPDATE".(count($ja)<count($G)?" $j$kb":limit1($j,$kb)));if(!$i){break;}$Na+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(65,$Na),$i);}}elseif(is_string($ra=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($cc["output"])."&format=".urlencode($_POST["separator"]));$i=true;$cb=array_keys($t);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ra,$ga);$Na=count($ga[0]);begin();$qa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ga[0]as$d=>$a){preg_match_all("~((\"[^\"]*\")+|[^$qa]*)$qa~",$a.$qa,$Ec);if(!$d&&!array_diff($Ec[1],$cb)){$cb=$Ec[1];$Na--;}else{$o=array();foreach($Ec[1]as$p=>$Oa){$o[idf_escape($cb[$p])]=($Oa==""&&$t[$cb[$p]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Oa))));}$i=insert_update($y,$o,$ya);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(67,$Na),$i);queries("ROLLBACK");}else{$q=upload_error($ra);}}}$_b=$l->tableName($w);page_header(lang(33).": $_b",$q);session_write_close();$o=null;if(isset($bd["insert"])){$o="";foreach((array)$_GET["where"]as$a){if(count($xb[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$o.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$l->selectLinks($w,$o);if(!$K){echo"<p class='error'>".lang(68).($t?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($y).'">',"</div>\n";$l->selectColumnsPrint($G,$K);$l->selectSearchPrint($m,$K,$ba);$l->selectOrderPrint($pa,$K,$ba);$l->selectLimitPrint($_);$l->selectLengthPrint($pb);$l->selectActionPrint();echo"</form>\n";$O=$_GET["page"];if($O=="last"){$La=$h->result("SELECT COUNT(*) FROM ".table($y).($m?" WHERE ".implode(" AND ",$m):""));$O=floor(max(0,$La-1)/$_);}$j="SELECT".limit((+$_&&$ja&&count($ja)<count($G)&&$ta=="sql"?"SQL_CALC_FOUND_ROWS ":"").$gb,($m?"\nWHERE ".implode(" AND ",$m):"").$pc,($_!=""?+$_:null),($O?$_*$O:0),"\n");echo$l->selectQuery($j);$i=$h->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($ta=="mssql"){$i->seek($_*$O);}$fc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$A=array();while($c=$i->fetch_assoc()){if($O&&$ta=="oracle"){unset($c["RNUM"]);}$A[]=$c;}if($_GET["page"]!="last"){$La=(+$_&&$ja&&count($ja)<count($G)?($ta=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($j) x")):count($A));}if(!$A){echo"<p class='message'>".lang(60)."\n";}else{$yc=$l->backwardKeys($y,$_b);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$ja&&$G?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(69)."</a>");$_c=array();$fa=array();reset($G);$xd=1;foreach($A[0]as$d=>$a){if($w["Oid"]!="t"||$d!="oid"){$a=$_GET["columns"][key($G)];$g=$t[$G?($a?$a["col"]:current($G)):$d];$f=($g?$l->fieldName($g,$xd):"*");if($f!=""){$xd++;$_c[$d]=$f;$u=idf_escape($d);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($d).($pa[0]==$u||$pa[0]==$d||(!$pa&&count($ja)<count($G)&&$ja[0]==$u)?'&desc%5B0%5D=1':'')).'">'.(!$G||$a?apply_sql_function($a["fun"],$f):h(current($G)))."</a>";}$fa[$d]=$a["fun"];next($G);}}$oc=array();if($_GET["modify"]){foreach($A
as$c){foreach($c
as$d=>$a){$oc[$d]=max($oc[$d],min(40,strlen(utf8_decode($a))));}}}echo($yc?"<th>".lang(70):"")."</thead>\n";foreach($l->rowDescriptions($A,$xb)as$M=>$c){$mc=unique_array($A[$M],$ba);$Ha="";foreach($mc
as$d=>$a){$Ha.="&".(isset($a)?urlencode("where[".bracket_escape($d)."]")."=".urlencode($a):"null%5B%5D=".urlencode($d));}echo"<tr".odd().">".(!$ja&&$G?"":"<td>".checkbox("check[]",substr($Ha,1),in_array(substr($Ha,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($ja)<count($G)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($y).$Ha)."'>".lang(69)."</a>"));foreach($c
as$d=>$a){if(isset($_c[$d])){$g=$t[$d];if($a!=""&&(!isset($fc[$d])||$fc[$d]!="")){$fc[$d]=(is_mail($a)?$_c[$d]:"");}$x="";$a=$l->editVal($a,$g);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$g["type"])&&$a!=""){$x=h(ME.'download='.urlencode($y).'&field='.urlencode($d).$Ha);}if($a===""){$a="&nbsp;";}elseif($pb!=""&&ereg('text|blob',$g["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$pb));}else{$a=h($a);}if(!$x){foreach((array)$xb[$d]as$U){if(count($xb[$d])==1||end($U["source"])==$d){$x="";foreach($U["source"]as$p=>$vc){$x.=where_link($p,$U["target"][$p],$A[$M][$vc]);}$x=h(($U["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($U["db"]),ME):ME).'select='.urlencode($U["table"]).$x);if(count($U["source"])==1){break;}}}}if($d=="COUNT(*)"){$x=h(ME."select=".urlencode($y));$p=0;foreach((array)$_GET["where"]as$s){if(!array_key_exists($s["col"],$mc)){$x.=h(where_link($p++,$s["col"],$s["val"],$s["op"]));}}foreach($mc
as$va=>$s){$x.=h(where_link($p++,$va,$s));}}}if(!$x){if(is_mail($a)){$x="mailto:$a";}if($cd=is_url($c[$d])){$x=($cd=="http"&&$ob?$c[$d]:"$cd://www.adminer.org/redirect/?url=".urlencode($c[$d]));}}$N=h("val[$Ha][".bracket_escape($d)."]");$n=$_POST["val"][$Ha][bracket_escape($d)];$dd=h(isset($n)?$n:$c[$d]);$Ad=strpos($a,"<i>...</i>");$pd=is_utf8($a)&&$A[$M][$d]==$c[$d]&&!$fa[$d];$qd=ereg('text|lob',$g["type"]);echo(($_GET["modify"]&&$pd)||isset($n)?"<td>".($qd?"<textarea name='$N' cols='30' rows='".(substr_count($c[$d],"\n")+1)."'>$dd</textarea>":"<input name='$N' value='$dd' size='$oc[$d]'>"):"<td id='$N' ondblclick=\"".($pd?"selectDblClick(this, event".($Ad?", 2":($qd?", 1":"")).")":"alert('".h(lang(71))."')").";\">".$l->selectVal($a,$x,$g));}}if($yc){echo"<td>";}$l->backwardKeysPrint($yc,$A[$M]);echo"</tr>\n";}echo"</table>\n";}if($A||$O){$Dc=true;if($_GET["page"]!="last"&&+$_&&count($ja)>=count($G)&&($La>=$_||$O)){$La=found_rows($w,$m);if($La<max(1e4,2*($O+1)*$_)){ob_flush();flush();$La=$h->result("SELECT COUNT(*) FROM ".table($y).($m?" WHERE ".implode(" AND ",$m):""));}else{$Dc=false;}}echo"<p class='pages'>";if(+$_&&$La>$_){$zc=floor(($La-1)/$_);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(72)."', '".($O+1)."'), event); return false;\">".lang(72)."</a>:",pagination(0,$O).($O>5?" ...":"");for($p=max(1,$O-4);$p<min($zc,$O+5);$p++){echo
pagination($p,$O);}echo($O+5<$zc?" ...":"").($Dc?pagination($zc,$O):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(73)."</a>");}echo" (".($Dc?"":"~ ").lang(74,$La).") ".checkbox("all",1,0,lang(75))."\n";if($l->selectCommandPrint()){echo'<fieldset><legend>',lang(59),'</legend><div>
<input type="submit" value="',lang(61),'" title="',lang(66),'" class="jsonly">
<input type="submit" name="edit" value="',lang(59),'">
<input type="submit" name="clone" value="',lang(76),'">
<input type="submit" name="delete" value="',lang(64),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$La,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",lang(77));$bb=$l->dumpOutput();echo($bb?html_select("output",$bb,$cc["output"])." ":""),html_select("format",$l->dumpFormat(),$cc["format"])," <input type='submit' name='export' value='".lang(77)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($l->selectImportPrint()){print_fieldset("import",lang(78),!$A);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$cc["format"],1);echo" <input type='submit' name='import' value='".lang(78)."'>","<input type='hidden' name='token' value='$_a'>\n","</div></fieldset>\n";}$l->selectEmailPrint(array_filter($fc,'strlen'),$K);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($e,$N,$f)=$l->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$i=$h->query("SELECT $N, $f FROM ".table($e)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$N = $_GET[value] OR ":"")."$f LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($p=0;$p<10&&($c=$i->fetch_row());$p++){echo"<a href='".h(ME."edit=".urlencode($e)."&where".urlencode("[".bracket_escape(idf_unescape($N))."]")."=".urlencode($c[0]))."'>".h($c[1])."</a><br>\n";}if($p==10){echo"...\n";}}exit;}else{page_header(lang(47),"",false);if($l->homepage()){echo"<form action='' method='post'>\n","<p>".lang(79).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(28)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(80).'<td>'.lang(81)."</thead>\n";foreach(table_status()as$e=>$c){$f=$l->tableName($c);if(isset($c["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$e,in_array($e,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($e)."'>$f</a>";$a=number_format($c["Rows"],0,'.',lang(82));echo"<td align='right'><a href='".h(ME."edit=").urlencode($e)."'>".($c["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();