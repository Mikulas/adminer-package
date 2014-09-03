<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.0
*/error_reporting(6135);$Ic=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Ic){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$wc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($wc){$$a=$wc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.0');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.0" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
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
connection(){global$g;return$g;}function
idf_unescape($ba){$ac=substr($ba,-1);return
str_replace($ac.$ac,$ac,substr($ba,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($na){if(get_magic_quotes_gpc()){while(list($c,$a)=each($na)){foreach($a
as$Y=>$o){unset($na[$c][$Y]);if(is_array($o)){$na[$c][stripslashes($Y)]=$o;$na[]=&$na[$c][stripslashes($Y)];}else{$na[$c][stripslashes($Y)]=($Ic?$o:stripslashes($o));}}}}}function
bracket_escape($ba,$qd=false){static$_c=array(':'=>':1',']'=>':2','['=>':3');return
strtr($ba,($qd?array_flip($_c):$_c));}function
h($E){return
htmlspecialchars(str_replace("\0","",$E),ENT_QUOTES);}function
nbsp($E){return(trim($E)!=""?h($E):"&nbsp;");}function
nl_br($E){return
str_replace("\n","<br>",$E);}function
checkbox($f,$i,$bb,$lc="",$ib="",$Wc=false){static$x=0;$x++;$b="<input type='checkbox' name='$f' value='".h($i)."'".($bb?" checked":"").($ib?" onclick=\"$ib\"":"").($Wc?" class='jsonly'":"")." id='checkbox-$x'>";return($lc!=""?"<label for='checkbox-$x'>$b".h($lc)."</label>":$b);}function
optionlist($X,$Hd=null,$oc=false){$b="";foreach($X
as$Y=>$o){$sc=array($Y=>$o);if(is_array($o)){$b.='<optgroup label="'.h($Y).'">';$sc=$o;}foreach($sc
as$c=>$a){$b.='<option'.($oc||is_string($c)?' value="'.h($c).'"':'').(($oc||is_string($c)?(string)$c:$a)===$Hd?' selected':'').'>'.h($a);}if(is_array($o)){$b.='</optgroup>';}}return$b;}function
html_select($f,$X,$i="",$ya=true){if($ya){return"<select name='".h($f)."'".(is_string($ya)?" onchange=\"$ya\"":"").">".optionlist($X,$i)."</select>";}$b="";foreach($X
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$i?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($tc="",$Ld=false){return" onclick=\"".($Ld?"eventStop(event); ":"")."return confirm('".'Czy jesteś pewien?'.($tc?" (' + $tc + ')":"")."');\"";}function
js_escape($E){return
addcslashes($E,"\r\n'\\/");}function
ini_bool($Kd){$a=ini_get($Kd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($E){global$g;return$g->quote($E);}function
get_vals($l,$I=0){global$g;$b=array();$k=$g->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[]=$d[$I];}}return$b;}function
get_key_vals($l,$ra=null){global$g;if(!is_object($ra)){$ra=$g;}$b=array();$k=$ra->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[$d[0]]=$d[1];}}return$b;}function
get_rows($l,$ra=null,$v="<p class='error'>"){global$g;if(!is_object($ra)){$ra=$g;}$b=array();$k=$ra->query($l);if(is_object($k)){while($d=$k->fetch_assoc()){$b[]=$d;}}elseif(!$k&&$g->error&&$v&&defined("PAGE_HEADER")){echo$v.error()."\n";}return$b;}function
unique_array($d,$H){foreach($H
as$R){if(ereg("PRIMARY|UNIQUE",$R["type"])){$b=array();foreach($R["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){global$ma;$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$ma=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_\\")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$qc);remove_slashes(array(&$qc));return
where($qc);}function
where_link($n,$I,$i,$Bd="="){return"&where%5B$n%5D%5Bcol%5D=".urlencode($I)."&where%5B$n%5D%5Bop%5D=".urlencode((isset($i)?$Bd:"IS NULL"))."&where%5B$n%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$cb;$db=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$cb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$db[]=true;}return
call_user_func_array('setcookie',$db);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($wb,$D,$C){global$va;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($va))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($wb!="server"||$D!=""?urlencode($wb)."=".urlencode($D)."&":"")."username=".urlencode($C).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($G,$Z=null){if(isset($Z)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($G)?$G:$_SERVER["REQUEST_URI"]))][]=$Z;}if(isset($G)){if($G==""){$G=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $G");exit;}}function
query_redirect($l,$G,$Z,$tb=true,$xd=true,$ec=false){global$g,$v,$j;if($xd){$ec=!$g->query($l);}$Wb="";if($l){$Wb=$j->messageQuery("$l;");}if($ec){$v=error().$Wb;return
false;}if($tb){redirect($G,$Z.$Wb);}return
true;}function
queries($l=null){global$g;static$Nc=array();if(!isset($l)){return
implode(";\n",$Nc);}$Nc[]=(ereg(';$',$l)?"DELIMITER ;;\n$l;\nDELIMITER ":$l);return$g->query($l);}function
apply_queries($l,$ja,$yd='table'){foreach($ja
as$h){if(!queries("$l ".$yd($h))){return
false;}}return
true;}function
queries_redirect($G,$Z,$tb){return
query_redirect(queries(),$G,$Z,$tb,false,!$tb);}function
remove_from_uri($ia=""){return
substr(preg_replace("~(?<=[?&])($ia".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($_,$zd){return" ".($_==$zd?$_+1:'<a href="'.h(remove_from_uri("page").($_?"&page=$_":"")).'">'.($_+1)."</a>");}function
get_file($c,$Rb=false){$T=$_FILES[$c];if(!$T||$T["error"]){return$T["error"];}$b=file_get_contents($Rb&&ereg('\\.gz$',$T["name"])?"compress.zlib://$T[tmp_name]":($Rb&&ereg('\\.bz2$',$T["name"])?"compress.bzip2://$T[tmp_name]":$T["tmp_name"]));if($Rb){$Cc=substr($b,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Cc,$Td)){$b=iconv("utf-16","utf-8",$b);}elseif($Cc=="\xEF\xBB\xBF"){$b=substr($b,3);}}return$b;}function
upload_error($v){$Vc=($v==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($v?'Wgranie pliku było niemożliwe.'.($Vc?" ".sprintf('Maksymalna wielkość pliku to %sB.',$Vc):""):'Plik nie istnieje.');}function
odd($b=' class="odd"'){static$n=0;if(!$b){$n=-1;}return($n++%
2?$b:'');}function
json_row($c,$a=null){static$ea=true;if($ea){echo"{";}if($c!=""){echo($ea?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$ea=false;}else{echo"\n}\n";$ea=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($J,$Za){return
str_repeat("$J{0,65535}",$Za/65535)."$J{0,".($Za
%
65535)."}";}function
shorten_utf8($E,$Za=80,$_d=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Za).")($)?)u",$E,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Za).")($)?)",$E,$m);}return
h($m[1]).$_d.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($na,$wd=array()){while(list($c,$a)=each($na)){if(is_array($a)){foreach($a
as$Y=>$o){$na[$c."[$Y]"]=$o;}}elseif(!in_array($c,$wd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$j;$b=array();foreach($j->foreignKeys($h)as$la){foreach($la["source"]as$a){$b[$a][]=$la;}}return$b;}function
enum_input($sa,$L,$e,$i,$Pb=null){global$j;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$S);$b=(isset($Pb)?"<label><input type='$sa'$L value='$Pb'".((is_array($i)?in_array($Pb,$i):$i===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($S[1]as$n=>$a){$a=stripcslashes(str_replace("''","'",$a));$bb=(is_int($i)?$i==$n+1:(is_array($i)?in_array($n+1,$i):$i===$a));$b.=" <label><input type='$sa'$L value='".($n+1)."'".($bb?' checked':'').'>'.h($j->editVal($a,$e)).'</label>';}return$b;}function
input($e,$i,$y){global$za,$j,$ma;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$Fc=($ma=="mssql"&&$e["auto_increment"]);if($Fc&&!$_POST["save"]){$y=null;}$da=(isset($_GET["select"])||$Fc?array("orig"=>'bez zmian'):array())+$j->editFunctions($e);$L=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($da[""])."<td>".$j->editInput($_GET["edit"],$e,$L,$i);}else{$ea=0;foreach($da
as$c=>$a){if($c===""||!$a){break;}$ea++;}$ya=($ea?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ea > f.selectedIndex) f.selectedIndex = $ea;\"":"");$L.=$ya;echo(count($da)>1?html_select("function[$f]",$da,!isset($y)||in_array($y,$da)||isset($da[$y])?$y:"","functionChange(this);"):nbsp(reset($da))).'<td>';$Ec=$j->editInput($_GET["edit"],$e,$L,$i);if($Ec!=""){echo$Ec;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$S);foreach($S[1]as$n=>$a){$a=stripcslashes(str_replace("''","'",$a));$bb=(is_int($i)?($i>>$n)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$n]' value='".(1<<$n)."'".($bb?' checked':'')."$ya>".h($j->editVal($a,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$ya>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($ma!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$L>".h($i).'</textarea>';}else{$Cb=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$m)?((ereg("binary",$e["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$e["unsigned"]?1:0)):($za[$e["type"]]?$za[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Cb?" maxlength='$Cb'":"").(ereg('char|binary',$e["type"])&&$Cb>20?" size='40'":"")."$L>";}}}function
process_input($e){global$j;$ba=bracket_escape($e["field"]);$y=$_POST["function"][$ba];$i=$_POST["fields"][$ba];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return+$i;}if($e["auto_increment"]&&$i==""){return
null;}if($y=="orig"){return($e["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($e["field"]):false);}if($y=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$T=get_file("fields-$ba");if(!is_string($T)){return
false;}return
q($T);}return$j->processInput($e,$i,$y);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Fb=false;foreach(table_status()as$h=>$B){$f=$j->tableName($B);if(isset($B["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$k=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($h),array())),1));if($k->fetch_row()){if(!$Fb){echo"<ul>\n";$Fb=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($Fb?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($xb,$Kc=false){global$j;$b=$j->dumpHeaders($xb,$Kc);$xa=$_POST["output"];if($xa!="text"){header("Content-Disposition: attachment; filename=".friendly_url($xb!=""?$xb:(SERVER!=""?SERVER:"localhost")).".$b".($xa!="file"&&!ereg('[^0-9a-z]',$xa)?".$xa":""));}session_write_close();return$b;}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\r\n";}function
apply_sql_function($y,$I){return($y?($y=="unixepoch"?"DATETIME($I, '$y')":($y=="count distinct"?"COUNT(DISTINCT ":strtoupper("$y("))."$I)"):$I);}function
password_file(){$eb=ini_get("upload_tmp_dir");if(!$eb){if(function_exists('sys_get_temp_dir')){$eb=sys_get_temp_dir();}else{$Ha=@tempnam("","");if(!$Ha){return
false;}$eb=dirname($Ha);unlink($Ha);}}$Ha="$eb/adminer.key";$b=@file_get_contents($Ha);if($b){return$b;}$Xb=@fopen($Ha,"w");if($Xb){$b=md5(uniqid(mt_rand(),true));fwrite($Xb,$b);fclose($Xb);}return$b;}function
is_mail($Ga){$Rc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$J="$Rc+(\\.$Rc+)*@($ab?\\.)+$ab";return
preg_match("(^$J(,\\s*$J)*\$)i",$Ga);}function
is_url($E){$ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($ab?\\.)+$ab(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$E,$m)?strtolower($m[1]):"");}function
print_fieldset($x,$Jd,$vd=false,$ib=""){echo"<fieldset><legend><a href='#fieldset-$x' onclick=\"$ib"."return !toggle('fieldset-$x');\">$Jd</a></legend><div id='fieldset-$x'".($vd?"":" class='hidden'").">\n";}function
bold($Xc){return($Xc?" class='active'":"");}global$j,$g,$va,$Yc,$Zb,$v,$da,$cd,$cb,$Dc,$ma,$fd,$Od,$pb,$Sc,$ca,$Nd,$za,$hd,$Bb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$cb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$db=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$cb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$db[]=true;}call_user_func_array('session_set_cookie_params',$db);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($gd,$Ja){$dd=($Ja==1?0:($Ja
%
10>1&&$Ja
%
10<5&&$Ja/10
%
10!=1?1:2));return
sprintf($gd[$dd],$Ja);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($kd,$C,$Q,$pd='auth_error'){set_exception_handler($pd);parent::__construct($kd,$C,$Q);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($l,$Ka=false){$k=parent::query($l);if(!$k){$nd=$this->errorInfo();$this->error=$nd[2];return
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
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$va=array();$va=array("server"=>"MySQL")+$va;if(!defined("DRIVER")){$ad=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$C,$Q){mysqli_report(MYSQLI_REPORT_OFF);list($bd,$Ab)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$bd:ini_get("mysqli.default_host")),($D.$C!=""?$C:ini_get("mysqli.default_user")),($D.$C.$Q!=""?$Q:ini_get("mysqli.default_pw")),null,(is_numeric($Ab)?$Ab:ini_get("mysqli.default_port")),(!is_numeric($Ab)?$Ab:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch_array();return$d[$e];}function
quote($E){return"'".$this->escape_string($E)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$C,$Q){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$C"!=""?$C:ini_get("mysql.default_user")),("$D$C$Q"!=""?$Q:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($E){return"'".mysql_real_escape_string($E,$this->_link)."'";}function
select_db($Ya){return
mysql_select_db($Ya,$this->_link);}function
query($l,$Ka=false){$k=@($Ka?mysql_unbuffered_query($l,$this->_link):mysql_query($l,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
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
connect($D,$C,$Q){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$C,$Q);$this->query("SET NAMES utf8");return
true;}function
select_db($Ya){return$this->query("USE ".idf_escape($Ya));}function
query($l,$Ka=false){$this->setAttribute(1000,!$Ka);return
parent::query($l,$Ka);}}}function
idf_escape($ba){return"`".str_replace("`","``",$ba)."`";}function
table($ba){return
idf_escape($ba);}function
connect(){global$j;$g=new
Min_DB;$Yb=$j->credentials();if($g->connect($Yb[0],$Yb[1],$Yb[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($Zc=true){global$g;$b=&get_session("dbs");if(!isset($b)){if($Zc){restart_session();ob_flush();flush();}$b=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($l,$p,$F,$Gc=0,$ta=" "){return" $l$p".(isset($F)?$ta."LIMIT $F".($Gc?" OFFSET $Gc":""):"");}function
limit1($l,$p){return
limit($l,$p,1);}function
db_collation($wa,$od){global$g;$b=null;$jb=$g->result("SHOW CREATE DATABASE ".idf_escape($wa),1);if(preg_match('~ COLLATE ([^ ]+)~',$jb,$m)){$b=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$jb,$m)){$b=$od[$m[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ka){$b=array();foreach($ka
as$wa){$b[$wa]=count(get_vals("SHOW TABLES IN ".idf_escape($wa)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($B){return!isset($B["Rows"]);}function
fk_support($B){return
eregi("InnoDB|IBMDB2I",$B["Engine"]);}function
fields($h){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$m);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($d["Default"]!=""||ereg("char",$m[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$m)?$m[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($h,$ra=null){$b=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$ra)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($h){global$g,$pb;static$J='`(?:[^`]|``)+`';$b=array();$Pc=$g->result("SHOW CREATE TABLE ".table($h),1);if($Pc){preg_match_all("~CONSTRAINT ($J) FOREIGN KEY \\(((?:$J,? ?)+)\\) REFERENCES ($J)(?:\\.($J))? \\(((?:$J,? ?)+)\\)(?: ON DELETE (".implode("|",$pb)."))?(?: ON UPDATE (".implode("|",$pb)."))?~",$Pc,$S,PREG_SET_ORDER);foreach($S
as$m){preg_match_all("~$J~",$m[2],$Vb);preg_match_all("~$J~",$m[5],$W);$b[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Vb[0]),"target"=>array_map('idf_unescape',$W[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){if($d["Default"]){$b[$d["Charset"]][-1]=$d["Collation"];}else{$b[$d["Charset"]][]=$d["Collation"];}}ksort($b);foreach($b
as$c=>$a){asort($b[$c]);}return$b;}function
information_schema($wa){global$g;return($g->server_info>=5&&$wa=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($wa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($wa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($ka){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ka,'idf_escape');}function
rename_database($f,$Ba){if(create_database($f,$Ba)){$Ia=array();foreach(tables_list()as$h=>$sa){$Ia[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Ia||queries("RENAME TABLE ".implode(", ",$Ia))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Tb=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$R){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$R["columns"],true)){$Tb="";break;}if($R["type"]=="PRIMARY"){$Tb=" UNIQUE";}}}return" AUTO_INCREMENT$Tb";}function
alter_table($h,$f,$q,$rd,$Id,$Hc,$Ba,$fb,$Gd){$fa=array();foreach($q
as$e){$fa[]=($e[1]?($h!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($h!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$fa=array_merge($fa,$rd);$Mc="COMMENT=".q($Id).($Hc?" ENGINE=".q($Hc):"").($Ba?" COLLATE ".q($Ba):"").($fb!=""?" AUTO_INCREMENT=$fb":"").$Gd;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$fa)."\n) $Mc");}if($h!=$f){$fa[]="RENAME TO ".table($f);}$fa[]=$Mc;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$fa));}function
alter_indexes($h,$fa){foreach($fa
as$c=>$a){$fa[$c]=($a[2]=="DROP"?"\nDROP INDEX ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").($a[1]!=""?idf_escape($a[1])." ":"").$a[2]);}return
queries("ALTER TABLE ".table($h).implode(",",$fa));}function
truncate_tables($ja){return
apply_queries("TRUNCATE TABLE",$ja);}function
drop_views($Xa){return
queries("DROP VIEW ".implode(", ",array_map('table',$Xa)));}function
drop_tables($ja){return
queries("DROP TABLE ".implode(", ",array_map('table',$ja)));}function
move_tables($ja,$Xa,$W){$Ia=array();foreach(array_merge($ja,$Xa)as$h){$Ia[]=table($h)." TO ".idf_escape($W).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Ia));}function
copy_tables($ja,$Xa,$W){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ja
as$h){$f=($W==DB?table("copy_$h"):idf_escape($W).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($Xa
as$h){$f=($W==DB?table("copy_$h"):idf_escape($W).".".table($h));$Dd=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Dd[select]")){return
false;}}return
true;}function
trigger($f){$w=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($w);}function
triggers($h){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$sa){global$g,$Zb,$Dc,$za;$Fd=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Lc="((".implode("|",array_merge(array_keys($za),$Fd)).")(?:\\s*\\(((?:[^'\")]*|$Zb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$J="\\s*(".($sa=="FUNCTION"?"":$Dc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Lc";$jb=$g->result("SHOW CREATE $sa ".idf_escape($f),2);preg_match("~\\(((?:$J\\s*,?)*)\\)".($sa=="FUNCTION"?"\\s*RETURNS\\s+$Lc":"")."\\s*(.*)~is",$jb,$m);$q=array();preg_match_all("~$J\\s*,?~is",$m[1],$S,PREG_SET_ORDER);foreach($S
as$ia){$f=str_replace("``","`",$ia[2]).$ia[3];$q[]=array("field"=>$f,"type"=>strtolower($ia[5]),"length"=>preg_replace_callback("~$Zb~s",'normalize_enum',$ia[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ia[8] $ia[7]"))),"full_type"=>$ia[4],"inout"=>strtoupper($ia[1]),"collation"=>strtolower($ia[9]),);}if($sa!="FUNCTION"){return
array("fields"=>$q,"definition"=>$m[11]);}return
array("fields"=>$q,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($h,$t){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($t)).")\nVALUES (".implode(", ",$t).")");}function
insert_update($h,$t,$nb){foreach($t
as$c=>$a){$t[$c]="$c = $a";}$aa=implode(", ",$t);return
queries("INSERT INTO ".table($h)." SET $aa ON DUPLICATE KEY UPDATE $aa");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$l){return$g->query("EXPLAIN $l");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Qd){return
true;}function
create_sql($h,$fb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$fb){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($Ya){return"USE ".idf_escape($Ya);}function
trigger_sql($h,$vb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$d){$b.="\n".($vb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Cd){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Cd);}$ma="sql";$za=array();$Sc=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$za+=$a;$Sc[$c]=array_keys($a);}$hd=array("unsigned","zerofill","unsigned zerofill");$ud=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$da=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$cd=array("avg","count","count distinct","group_concat","max","min","sum");$Yc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Bb="3.3.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Edytor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ka=get_databases(false);return(!$ka?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ka[(information_schema($ka[0])?1:0)]);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Użytkownik<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Hasło<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($Sd,$Q){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Ta){return
h($Ta["Comment"]!=""?$Ta["Comment"]:$Ta["Name"]);}function
fieldName($e,$U=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Ta,$t=""){$r=$Ta["Name"];if(isset($t)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($r).$t).'">'.'Nowy rekord'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a>\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$td){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($h)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Oc=preg_quote($td);$ta="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Oc$ta(.+)|^(.+?)$ta$Oc\$)iu",$f,$m)?$m[2].$m[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($sd,$d){foreach($sd
as$h=>$Tc){foreach($Tc["keys"]as$Ca){$s=ME.'select='.urlencode($h);$n=0;foreach($Ca
as$I=>$a){$s.=where_link($n++,$I,$d[$a]);}echo"<a href='".h($s)."'>".h($Tc["name"])."</a>";$s=ME.'edit='.urlencode($h);foreach($Ca
as$I=>$a){$s.="&set".urlencode("[".bracket_escape($I)."]")."=".urlencode($d[$a]);}echo"<a href='".h($s)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->\n";}function
rowDescription($h){foreach(fields($h)as$e){if(ereg("varchar|character varying",$e["type"])){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($w,$Ua){$b=$w;foreach($w[0]as$c=>$a){if(list($h,$x,$f)=$this->_foreignColumn($Ua,$c)){$Qc=array();foreach($w
as$d){$Qc[$d[$c]]=exact_value($d[$c]);}$Lb=$this->_values[$h];if(!$Lb){$Lb=get_key_vals("SELECT $x, $f FROM ".table($h)." WHERE $x IN (".implode(", ",$Qc).")");}foreach($w
as$z=>$d){if(isset($d[$c])){$b[$z][$c]=(string)$Lb[$d[$c]];}}}}return$b;}function
selectVal($a,$s,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$s' alt='$b'>";}}if(like_bool($e)&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.0").'" alt="'.h($a).'">';}if($s){$b="<a href='$s'>$b</a>";}if(!$s&&!like_bool($e)&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($u,$A){}function
selectSearchPrint($p,$A,$H){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Szukaj'."</legend><div>\n";$Mb=array();foreach($p
as$c=>$a){$Mb[$a["col"]]=$c;}$n=0;$q=fields($_GET["select"]);foreach($q
as$f=>$e){if(ereg("enum",$e["type"])){$pa=$A[$f];$c=$Mb[$f];$n--;echo"<div>".h($pa)."<input type='hidden' name='where[$n][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$n][val][]'",$e,(array)$p[$c]["val"],($e["null"]?0:null)),"</div>\n";unset($A[$f]);}}foreach($A
as$f=>$pa){$X=$this->_foreignKeyOptions($_GET["select"],$f);if(is_array($X)){if($q[$f]["null"]){$X[0]='('.'puste'.')';}$c=$Mb[$f];$n--;echo"<div>".h($pa)."<input type='hidden' name='where[$n][col]' value='".h($f)."'><input type='hidden' name='where[$n][op]' value='='>: <select name='where[$n][val]'>".optionlist($X,$p[$c]["val"],true)."</select></div>\n";unset($A[$f]);}}$n=0;foreach($p
as$a){if(($a["col"]==""||$A[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$n][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($A,$a["col"],true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$n][val]' value='".h($a["val"])."'></div>\n";$n++;}}echo"<div><select name='where[$n][col]' onchange='selectAddRow(this);'><option value=''>(".'gdziekolwiek'.")".optionlist($A,null,true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators),"<input name='where[$n][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($U,$A,$H){$Nb=array();foreach($H
as$c=>$R){$U=array();foreach($R["columns"]as$a){$U[]=$A[$a];}if(count(array_filter($U,'strlen'))>1&&$c!="PRIMARY"){$Nb[$c]=implode(", ",$U);}}if($Nb){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Nb,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($F){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$F),"</div></fieldset>\n";}function
selectLengthPrint($Va){}function
selectActionPrint(){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($rb,$A){if($rb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$A,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($rb)==1?'<input type="hidden" name="email_field" value="'.h(key($rb)).'">':html_select("email_field",$rb)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($A,$H){return
array(array(),array());}function
selectSearchProcess($q,$H){$b=array();foreach((array)$_GET["where"]as$c=>$p){$oa=$p["col"];$Wa=$p["op"];$a=$p["val"];if(($c<0?"":$oa).$a!=""){$Sa=array();foreach(($oa!=""?array($oa=>$q[$oa]):$q)as$f=>$e){if($oa!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);if($oa!=""&&$e["type"]=="enum"){$Sa[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$dc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,(!$Wa&&$dc&&ereg('^[^%]+$',$a)?"%$a%":$a));$Sa[]=$f.($i=="NULL"?" IS".($Wa==">="?" NOT":"")." $i":(in_array($Wa,$this->operators)||$Wa=="="?" $Wa $i":($dc?" LIKE $i":" IN (".str_replace(",","', '",$i).")")));if($c<0&&$a=="0"){$Sa[]="$f IS NULL";}}}}$b[]=($Sa?"(".implode(" OR ",$Sa).")":"0");}}return$b;}function
selectOrderProcess($q,$H){$qb=$_GET["index_order"];if($qb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($qb!=""?array($H[$qb]):$H)as$R){if($qb!=""||$R["type"]=="INDEX"){$pa=false;foreach($R["columns"]as$a){if(ereg('date|timestamp',$q[$a]["type"])){$pa=true;break;}}$b=array();foreach($R["columns"]as$a){$b[]=idf_escape($a).($pa?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$Ua){if($_POST["email_append"]){return
true;}if($_POST["email"]){$gc=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$ob=$_POST["email_subject"];$Z=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$ob.$Z",$S);$w=get_rows("SELECT DISTINCT $e".($S[1]?", ".implode(", ",array_map('idf_escape',array_unique($S[1]))):"")." FROM ".table($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($w,$Ua)as$d){$Ob=array('{\\'=>'{');foreach($S[1]as$a){$Ob['{$'."$a}"]=$this->editVal($d[$a],$q[$a]);}$Ga=$d[$_POST["email_field"]];if(is_mail($Ga)&&send_mail($Ga,strtr($ob,$Ob),strtr($Z,$Ob),$_POST["email_from"],$_FILES["email_files"])){$gc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$gc));}return
false;}function
messageQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->";}function
editFunctions($e){$b=array();if($e["null"]&&ereg('blob',$e["type"])){$b["NULL"]='puste';}$b[""]=($e["null"]||$e["auto_increment"]||like_bool($e)?"":"*");if(ereg('date|time',$e["type"])){$b["now"]='teraz';}if(eregi('_(md5|sha1)$',$e["field"],$m)){$b[]=strtolower($m[1]);}return$b;}function
editInput($h,$e,$L,$i){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$L value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$L,$e,($i||isset($_GET["select"])?$i:0),($e["null"]?"":null));}$X=$this->_foreignKeyOptions($h,$e["field"],$i);if(isset($X)){return(is_array($X)?"<select$L>".optionlist($X,$i,true)."</select>":"<input value='".h($i)."'$L class='hidden'><input value='".h($X)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($h)."&field=".urlencode($e["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($e)){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$L>";}$Da="";if(ereg('time',$e["type"])){$Da='HH:MM:SS';}if(ereg('date|timestamp',$e["type"])){$Da='d.m.[rrrr]'.($Da?" [$Da]":"");}if($Da){return"<input value='".h($i)."'$L> ($Da)";}if(eregi('_(md5|sha1)$',$e["field"])){return"<input type='password' value='".h($i)."'$L>";}return'';}function
processInput($e,$i,$y=""){if($y=="now"){return"$y()";}$b=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$i,$m)){$b=($m["p1"]!=""?$m["p1"]:($m["p2"]!=""?($m["p2"]<70?20:19).$m["p2"]:gmdate("Y")))."-$m[p3]$m[p4]-$m[p5]$m[p6]".end($m);}$b=($e["type"]=="bit"&&ereg('^[0-9]+$',$i)?$b:q($b));if($i==""&&($e["null"]||!ereg('char|text',$e["type"]))&&!like_bool($e)){$b="NULL";}elseif(ereg('^(md5|sha1)$',$y)){$b="$y($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($h,$vb,$l){global$g;$k=$g->query($l,1);if($k){while($d=$k->fetch_assoc()){if($vb=="table"){dump_csv(array_keys($d));$vb="INSERT";}dump_csv($d);}}}function
dumpHeaders($xb,$Kc=false){$Ad="csv";header("Content-Type: text/csv; charset=utf-8");return$Ad;}function
homepage(){return
true;}function
navigation($Ra){global$Bb,$ca;echo'<h1>
',$this->name(),' <span class="version">',$Bb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($Bb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ra=="auth"){$ea=true;foreach((array)$_SESSION["pwds"]["server"][""]as$C=>$Q){if(isset($Q)){if($ea){echo"<p onclick='eventStop(event);'>\n";$ea=false;}echo"<a href='".h(auth_url("server","",$C))."'>".($C!=""?h($C):"<i>".'puste'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$ca,'">
</p>
</form>
';if($Ra!="db"&&$Ra!="ns"){$B=table_status();if(!$B){echo"<p class='message'>".'Brak tabel.'."\n";}else{$this->tablesPrint($B);}}}}function
tablesPrint($ja){echo"<p id='tables'>\n";foreach($ja
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'".bold($_GET["select"]==$d["Name"]).">$f</a><br>\n";}}}function
_foreignColumn($Ua,$I){foreach((array)$Ua[$I]as$sb){if(count($sb["source"])==1){$f=$this->rowDescription($sb["table"]);if($f!=""){$x=idf_escape($sb["target"][0]);return
array($sb["table"],$x,$f);}}}}function
_foreignKeyOptions($h,$I,$i=null){global$g;if(list($W,$x,$f)=$this->_foreignColumn(column_foreign_keys($h),$I)){$b=&$this->_values[$W];if(!isset($b)){$B=table_status($W);$b=($B["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $x, $f FROM ".table($W)." ORDER BY 2"));}if(!$b&&isset($i)){return$g->result("SELECT $f FROM ".table($W)." WHERE $x = ".q($i));}return$b;}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($cc,$v="",$La=array(),$Bc=""){global$fd,$j,$g,$va;header("Content-Type: text/html; charset=utf-8");if($j->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$xc=$cc.($Bc!=""?": ".h($Bc):"");$yc=strip_tags($xc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($yc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$yc,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.0",'">
<script type="text/javascript">
var areYouSure = \'Wysłać dane ponownie?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.0",'"></script>
';if($j->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.0",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".js_escape(DB)."', '".js_escape($_GET["ns"])."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($La)){$s=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($s?$s:".").'">'.$va[DRIVER].'</a> &raquo; ';$s=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Serwer');if($La===false){echo"$D\n";}else{echo"<a href='".($s?h($s):".")."' accesskey='1' title='Alt+Shift+1'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($La))){echo'<a href="'.h($s."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($La)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($La
as$c=>$a){$pa=(is_array($a)?$a[1]:$a);if($pa!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($pa).'</a> &raquo; ';}}}echo"$cc\n";}}echo"<span id='loader'></span>\n","<h2>$xc</h2>\n";restart_session();$zc=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ac=$_SESSION["messages"][$zc];if($Ac){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ac)."</div>\n";unset($_SESSION["messages"][$zc]);}$ka=&get_session("dbs");if(DB!=""&&$ka&&!in_array(DB,$ka,true)){$ka=null;}if($v){echo"<div class='error'>$v</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Ra=""){global$j;if(!is_ajax()){echo'</div>

<div id="menu">
';$j->navigation($Ra);echo'</div>
';}}function
int32($z){while($z>=2147483648){$z-=4294967296;}while($z<=-2147483649){$z+=4294967296;}return(int)$z;}function
long2str($o,$Kb){$Aa='';foreach($o
as$a){$Aa.=pack('V',$a);}if($Kb){return
substr($Aa,0,end($o));}return$Aa;}function
str2long($Aa,$Kb){$o=array_values(unpack('V*',str_pad($Aa,4*ceil(strlen($Aa)/4),"\0")));if($Kb){$o[]=strlen($Aa);}return$o;}function
xxtea_mx($N,$M,$V,$Y){return
int32((($N>>5&0x7FFFFFF)^$M<<2)+(($M>>3&0x1FFFFFFF)^$N<<4))^int32(($V^$M)+($Y^$N));}function
encrypt_string($Na,$c){if($Na==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$o=str2long($Na,true);$z=count($o)-1;$N=$o[$z];$M=$o[0];$Gb=floor(6+52/($z+1));$V=0;while($Gb-->0){$V=int32($V+0x9E3779B9);$Ma=$V>>2&3;for($P=0;$P<$z;$P++){$M=$o[$P+1];$_a=xxtea_mx($N,$M,$V,$c[$P&3^$Ma]);$N=int32($o[$P]+$_a);$o[$P]=$N;}$M=$o[0];$_a=xxtea_mx($N,$M,$V,$c[$P&3^$Ma]);$N=int32($o[$z]+$_a);$o[$z]=$N;}return
long2str($o,false);}function
decrypt_string($Na,$c){if($Na==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$o=str2long($Na,false);$z=count($o)-1;$N=$o[$z];$M=$o[0];$Gb=floor(6+52/($z+1));$V=int32($Gb*0x9E3779B9);while($V){$Ma=$V>>2&3;for($P=$z;$P>0;$P--){$N=$o[$P-1];$_a=xxtea_mx($N,$M,$V,$c[$P&3^$Ma]);$M=int32($o[$P]-$_a);$o[$P]=$M;}$N=$o[$z];$_a=xxtea_mx($N,$M,$V,$c[$P&3^$Ma]);$M=int32($o[0]-$_a);$o[0]=$M;$V=int32($V-0x9E3779B9);}return
long2str($o,true);}$g='';$ca=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ua=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ua[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$lb=$j->permanentLogin();$ua[$c]="$c:".base64_encode($lb?encrypt_string($_POST["password"],$lb):"");cookie("adminer_permanent",implode(" ",$ua));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($ca&&$_POST["token"]!=$ca){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ua[$c]){unset($ua[$c]);cookie("adminer_permanent",implode(" ",$ua));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($ua&&!$_SESSION["pwds"]){session_regenerate_id();$lb=$j->permanentLogin();foreach($ua
as$c=>$a){list(,$Ed)=explode(":",$a);list($wb,$D,$C)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$wb][$D][$C]=decrypt_string(base64_decode($Ed),$lb);}}function
auth_error($rc=null){global$g,$j,$ca;$gb=session_name();$v="";if(!$_COOKIE[$gb]&&$_GET[$gb]&&ini_bool("session.use_only_cookies")){$v='Wymagana jest obsługa sesji w PHP.';}elseif(isset($_GET["username"])){if(($_COOKIE[$gb]||$_GET[$gb])&&!$ca){$v='Sesja wygasła, zaloguj się ponownie.';}else{$Q=&get_session("pwds");if(isset($Q)){$v=h($rc?$rc->getMessage():(is_string($g)?$g:'Nieprawidłowe dane logowania.'));$Q=null;}}}page_header('Zaloguj się',$v,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$ad)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ca=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$ca;}$v=($_POST?($_POST["token"]==$ca?"":'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','"post_max_size"')));$g->select_db($j->database());function
email_header($Md){return"=?UTF-8?B?".base64_encode($Md)."?=";}function
send_mail($Ga,$ob,$Z,$Fa="",$yb=array()){$K=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Z=str_replace("\n",$K,wordwrap(str_replace("\r","","$Z\n")));$mb=uniqid("boundary");$hb="";foreach((array)$yb["error"]as$c=>$a){if(!$a){$hb.="--$mb$K"."Content-Type: ".str_replace("\n","",$yb["type"][$c]).$K."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$yb["name"][$c])."\"$K"."Content-Transfer-Encoding: base64$K$K".chunk_split(base64_encode(file_get_contents($yb["tmp_name"][$c])),76,$K).$K;}}$bc="";$kb="Content-Type: text/plain; charset=utf-8$K"."Content-Transfer-Encoding: 8bit";if($hb){$hb.="--$mb--$K";$bc="--$mb$K$kb$K$K";$kb="Content-Type: multipart/mixed; boundary=\"$mb\"";}$kb.=$K."MIME-Version: 1.0$K"."X-Mailer: Adminer Editor".($Fa?$K."From: ".str_replace("\n","",$Fa):"");return
mail($Ga,email_header($ob),$bc.$Z.$hb,$kb);}function
like_bool($e){return
ereg("bool|(tinyint|bit)\\(1\\)",$e["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$pb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$va[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$r=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$r-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($r)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$r=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$aa=(isset($_GET["select"])?$_POST["edit"]:$p);$q=fields($r);foreach($q
as$f=>$e){if(!isset($e["privileges"][$aa?"update":"insert"])||$j->fieldName($e)==""){unset($q[$f]);}}if($_POST&&!$v&&!isset($_GET["select"])){$G=$_POST["referer"];if($_POST["insert"]){$G=($aa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$G)){$G=ME."select=".urlencode($r);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($r)," WHERE $p"),$G,'Rekord został usunięty.');}else{$t=array();foreach($q
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$t[idf_escape($f)]=($aa?"\n".idf_escape($f)." = $a":$a);}}if($aa){if(!$t){redirect($G);}query_redirect("UPDATE".limit1(table($r)." SET".implode(",",$t),"\nWHERE $p"),$G,'Rekord został zaktualizowany.');}else{$k=insert_into($r,$t);$hc=($k?last_id():0);queries_redirect($G,sprintf('Rekord%s został dodany.',($hc?" $hc":"")),$k);}}}$Oa=$j->tableName(table_status($r));page_header(($aa?'Edytuj':'Dodaj'),$v,array("select"=>array($r,$Oa)),$Oa);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$u=array();foreach($q
as$f=>$e){if(isset($e["privileges"]["select"])){$u[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($u){$w=get_rows("SELECT".limit(implode(", ",$u)." FROM ".table($r)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($w)!=1?null:reset($w));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$ic=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?(is_array($d[$f])?array_sum($d[$f]):+$d[$f]):$d[$f]):(!$aa&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($ic)?$ic:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$j->editVal($i,$e);}$y=($_POST["save"]?(string)$_POST["function"][$f]:($aa&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$y="now";}input($e,$i,$y);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($aa?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}}echo($aa?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ca,'">
</form>
';}elseif(isset($_GET["select"])){$r=$_GET["select"];$B=table_status($r);$H=indexes($r);$q=fields($r);$Pa=column_foreign_keys($r);if($B["Oid"]=="t"){$H[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$ub);$pc=array();$A=array();$Va=null;foreach($q
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$A[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Va=$j->selectLengthProcess();}}$pc+=$e["privileges"];}list($u,$O)=$j->selectColumnsProcess($A,$H);$p=$j->selectSearchProcess($q,$H);$U=$j->selectOrderProcess($q,$H);$F=$j->selectLimitProcess();$Fa=($u?implode(", ",$u):($B["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($r);$Ub=($O&&count($O)<count($u)?"\nGROUP BY ".implode(", ",$O):"").($U?"\nORDER BY ".implode(", ",$U):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ha=>$d){echo$g->result("SELECT".limit(idf_escape(key($d))." FROM ".table($r)," WHERE ".where_check($ha).($p?" AND ".implode(" AND ",$p):"").($U?" ORDER BY ".implode(", ",$U):""),1));}exit;}if($_POST&&!$v){$nc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$nb=$Qa=null;foreach($H
as$R){if($R["type"]=="PRIMARY"){$nb=array_flip($R["columns"]);$Qa=($u?$nb:array());break;}}foreach((array)$Qa
as$c=>$a){if(in_array(idf_escape($c),$u)){unset($Qa[$c]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($r);$j->dumpTable($r,"");if(!is_array($_POST["check"])||$Qa===array()){$Ea=$p;if(is_array($_POST["check"])){$Ea[]="($nc)";}$l="SELECT $Fa".($Ea?"\nWHERE ".implode(" AND ",$Ea):"").$Ub;}else{$vc=array();foreach($_POST["check"]as$a){$vc[]="(SELECT".limit($Fa,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$Ub,1).")";}$l=implode(" UNION ALL ",$vc);}$j->dumpData($r,"table",$l);exit;}if(!$j->selectEmailProcess($p,$Pa)){if($_POST["save"]||$_POST["delete"]){$k=true;$qa=0;$l=table($r);$t=array();if(!$_POST["delete"]){foreach($A
as$f=>$a){$a=process_input($q[$f]);if($a!==null){if($_POST["clone"]){$t[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$t[]=idf_escape($f)." = $a";}}}$l.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($r):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$zb="UPDATE";if($_POST["delete"]){$zb="DELETE";$l="FROM $l";}if($_POST["clone"]){$zb="INSERT";$l="INTO $l";}if($_POST["all"]||($Qa===array()&&$_POST["check"])||count($O)<count($u)){$k=queries($zb." $l".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $nc"));$qa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$k=queries($zb.limit1($l,"\nWHERE ".where_check($a)));if(!$k){break;}$qa+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$qa),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$v='Kliknij podwójnie wartość, aby ją edytować.';}else{$k=true;$qa=0;foreach($_POST["val"]as$ha=>$d){$t=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".(ereg('char|text',$q[$c]["type"])||$a!=""?$j->processInput($q[$c],$a):"NULL");}$l=table($r)." SET ".implode(", ",$t);$Ea=" WHERE ".where_check($ha).($p?" AND ".implode(" AND ",$p):"");$k=queries("UPDATE".(count($O)<count($u)?" $l$Ea":limit1($l,$Ea)));if(!$k){break;}$qa+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$qa),$k);}}elseif(is_string($T=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ub["output"])."&format=".urlencode($_POST["separator"]));$k=true;$Ca=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$T,$S);$qa=count($S[0]);begin();$ta=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($S[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$ta]*)$ta~",$a.$ta,$Qb);if(!$c&&!array_diff($Qb[1],$Ca)){$Ca=$Qb[1];$qa--;}else{$t=array();foreach($Qb[1]as$n=>$oa){$t[idf_escape($Ca[$n])]=($oa==""&&$q[$Ca[$n]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$oa))));}$k=insert_update($r,$t,$nb);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$qa),$k);queries("ROLLBACK");}else{$v=upload_error($T);}}}$Oa=$j->tableName($B);page_header('pokaż'.": $Oa",$v);session_write_close();$t=null;if(isset($pc["insert"])){$t="";foreach((array)$_GET["where"]as$a){if(count($Pa[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$t.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($B,$t);if(!$A){echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($q?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($r).'">',"</div>\n";$j->selectColumnsPrint($u,$A);$j->selectSearchPrint($p,$A,$H);$j->selectOrderPrint($U,$A,$H);$j->selectLimitPrint($F);$j->selectLengthPrint($Va);$j->selectActionPrint();echo"</form>\n";$_=$_GET["page"];if($_=="last"){$ga=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));$_=floor(max(0,$ga-1)/$F);}$l="SELECT".limit((+$F&&$O&&count($O)<count($u)&&$ma=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Fa,($p?"\nWHERE ".implode(" AND ",$p):"").$Ub,($F!=""?+$F:null),($_?$F*$_:0),"\n");echo$j->selectQuery($l);$k=$g->query($l);if(!$k){echo"<p class='error'>".error()."\n";}else{if($ma=="mssql"){$k->seek($F*$_);}$_b=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$w=array();while($d=$k->fetch_assoc()){if($_&&$ma=="oracle"){unset($d["RNUM"]);}$w[]=$d;}if($_GET["page"]!="last"){$ga=(+$F&&$O&&count($O)<count($u)?($ma=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($l) x")):count($w));}if(!$w){echo"<p class='message'>".'Brak rekordów.'."\n";}else{$Sb=$j->backwardKeys($r,$Oa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$O&&$u?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$Db=array();$da=array();reset($u);$uc=1;foreach($w[0]as$c=>$a){if($B["Oid"]!="t"||$c!="oid"){$a=$_GET["columns"][key($u)];$e=$q[$u?($a?$a["col"]:current($u)):$c];$f=($e?$j->fieldName($e,$uc):"*");if($f!=""){$uc++;$Db[$c]=$f;$I=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($U[0]==$I||$U[0]==$c||(!$U&&count($O)<count($u)&&$O[0]==$I)?'&desc%5B0%5D=1':'')).'">'.(!$u||$a?apply_sql_function($a["fun"],$f):h(current($u)))."</a>";}$da[$c]=$a["fun"];next($u);}}$Eb=array();if($_GET["modify"]){foreach($w
as$d){foreach($d
as$c=>$a){$Eb[$c]=max($Eb[$c],min(40,strlen(utf8_decode($a))));}}}echo($Sb?"<th>".'Relacje':"")."</thead>\n";foreach($j->rowDescriptions($w,$Pa)as$z=>$d){$Jb=unique_array($w[$z],$H);$ha="";foreach($Jb
as$c=>$a){$ha.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$O&&$u?"":"<td>".checkbox("check[]",substr($ha,1),in_array(substr($ha,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($O)<count($u)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($r).$ha)."'>".'edytuj'."</a>"));foreach($d
as$c=>$a){if(isset($Db[$c])){$e=$q[$c];if($a!=""&&(!isset($_b[$c])||$_b[$c]!="")){$_b[$c]=(is_mail($a)?$Db[$c]:"");}$s="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$s=h(ME.'download='.urlencode($r).'&field='.urlencode($c).$ha);}if($a===""){$a="&nbsp;";}elseif($Va!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Va));}else{$a=h($a);}if(!$s){foreach((array)$Pa[$c]as$la){if(count($Pa[$c])==1||end($la["source"])==$c){$s="";foreach($la["source"]as$n=>$Vb){$s.=where_link($n,$la["target"][$n],$w[$z][$Vb]);}$s=h(($la["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($la["db"]),ME):ME).'select='.urlencode($la["table"]).$s);if(count($la["source"])==1){break;}}}}if($c=="COUNT(*)"){$s=h(ME."select=".urlencode($r));$n=0;foreach((array)$_GET["where"]as$o){if(!array_key_exists($o["col"],$Jb)){$s.=h(where_link($n++,$o["col"],$o["val"],$o["op"]));}}foreach($Jb
as$Y=>$o){$s.=h(where_link($n++,$Y,$o));}}}if(!$s){if(is_mail($a)){$s="mailto:$a";}if($jc=is_url($d[$c])){$s=($jc=="http"&&$cb?$d[$c]:"$jc://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$x=h("val[$ha][".bracket_escape($c)."]");$i=$_POST["val"][$ha][bracket_escape($c)];$fc=h(isset($i)?$i:$d[$c]);$id=strpos($a,"<i>...</i>");$mc=is_utf8($a)&&$w[$z][$c]==$d[$c]&&!$da[$c];$kc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$mc)||isset($i)?"<td>".($kc?"<textarea name='$x' cols='30' rows='".(substr_count($d[$c],"\n")+1)."'>$fc</textarea>":"<input name='$x' value='$fc' size='$Eb[$c]'>"):"<td id='$x' ondblclick=\"".($mc?"selectDblClick(this, event".($id?", 2":($kc?", 1":"")).")":"alert('".h('Użyj linku edycji aby zmienić tę wartość.')."')").";\">".$j->selectVal($a,$s,$e));}}if($Sb){echo"<td>";}$j->backwardKeysPrint($Sb,$w[$z]);echo"</tr>\n";}echo"</table>\n";}if($w||$_){$Ib=true;if($_GET["page"]!="last"&&+$F&&count($O)>=count($u)&&($ga>=$F||$_)){$ga=$B["Rows"];if(!isset($ga)||$p||($B["Engine"]=="InnoDB"&&$ga<max(1e4,2*($_+1)*$F))){ob_flush();flush();$ga=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));}else{$Ib=false;}}echo"<p class='pages'>";if(+$F&&$ga>$F){$Hb=floor(($ga-1)/$F);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($_+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$_).($_>5?" ...":"");for($n=max(1,$_-4);$n<min($Hb,$_+5);$n++){echo
pagination($n,$_);}echo($_+5<$Hb?" ...":"").($Ib?pagination($Hb,$_):' <a href="'.h(remove_from_uri()."&page=last").'">'.'ostatni'."</a>");}echo" (".($Ib?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$ga).") ".checkbox("all",1,0,'wybierz wszystkie')."\n";if($j->selectCommandPrint()){?>
<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany" title="Kliknij podwójnie wartość, aby ją edytować." class="jsonly">
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$ga,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Eksport');$xa=$j->dumpOutput();echo($xa?html_select("output",$xa,$ub["output"])." ":""),html_select("format",$j->dumpFormat(),$ub["format"])," <input type='submit' name='export' value='".'Eksport'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($j->selectImportPrint()){print_fieldset("import",'Import',!$w);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ub["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$ca'>\n","</div></fieldset>\n";}$j->selectEmailPrint(array_filter($_b,'strlen'),$A);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($h,$x,$f)=$j->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$k=$g->query("SELECT $x, $f FROM ".table($h)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$x = $_GET[value] OR ":"")."$f LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($n=0;$n<10&&($d=$k->fetch_row());$n++){echo"<a href='".h(ME."edit=".urlencode($h)."&where".urlencode("[".bracket_escape(idf_unescape($x))."]")."=".urlencode($d[0]))."'>".h($d[1])."</a><br>\n";}if($n==10){echo"...\n";}}exit;}else{page_header('Serwer',"",false);if($j->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$h=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$h,in_array($h,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($h)."'>$f</a>";$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($h)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();