<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.0
*/error_reporting(6135);$Mc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Mc){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$a){$zc=filter_input_array(constant("INPUT$a"),FILTER_UNSAFE_RAW);if($zc){$$a=$zc;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
idf_unescape($da){$Ob=substr($da,-1);return
str_replace($Ob.$Ob,$Ob,substr($da,1,-1));}function
escape_string($a){return
substr(q($a),1,-1);}function
remove_slashes($na){if(get_magic_quotes_gpc()){while(list($c,$a)=each($na)){foreach($a
as$Z=>$o){unset($na[$c][$Z]);if(is_array($o)){$na[$c][stripslashes($Z)]=$o;$na[]=&$na[$c][stripslashes($Z)];}else{$na[$c][stripslashes($Z)]=($Mc?$o:stripslashes($o));}}}}}function
bracket_escape($da,$bd=false){static$pc=array(':'=>':1',']'=>':2','['=>':3');return
strtr($da,($bd?array_flip($pc):$pc));}function
h($F){return
htmlspecialchars(str_replace("\0","",$F),ENT_QUOTES);}function
nbsp($F){return(trim($F)!=""?h($F):"&nbsp;");}function
nl_br($F){return
str_replace("\n","<br>",$F);}function
checkbox($f,$i,$Za,$Bc="",$eb="",$od=false){static$z=0;$z++;$b="<input type='checkbox' name='$f' value='".h($i)."'".($Za?" checked":"").($eb?" onclick=\"$eb\"":"").($od?" class='jsonly'":"")." id='checkbox-$z'>";return($Bc!=""?"<label for='checkbox-$z'>$b".h($Bc)."</label>":$b);}function
optionlist($Y,$Fd=null,$ic=false){$b="";foreach($Y
as$Z=>$o){$vc=array($Z=>$o);if(is_array($o)){$b.='<optgroup label="'.h($Z).'">';$vc=$o;}foreach($vc
as$c=>$a){$b.='<option'.($ic||is_string($c)?' value="'.h($c).'"':'').(($ic||is_string($c)?(string)$c:$a)===$Fd?' selected':'').'>'.h($a);}if(is_array($o)){$b.='</optgroup>';}}return$b;}function
html_select($f,$Y,$i="",$Aa=true){if($Aa){return"<select name='".h($f)."'".(is_string($Aa)?" onchange=\"$Aa\"":"").">".optionlist($Y,$i)."</select>";}$b="";foreach($Y
as$c=>$a){$b.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$i?" checked":"").">".h($a)."</label>";}return$b;}function
confirm($tc="",$Ld=false){return" onclick=\"".($Ld?"eventStop(event); ":"")."return confirm('".'Naozaj?'.($tc?" (' + $tc + ')":"")."');\"";}function
js_escape($F){return
addcslashes($F,"\r\n'\\/");}function
ini_bool($Kd){$a=ini_get($Kd);return(eregi('^(on|true|yes)$',$a)||(int)$a);}function
sid(){static$b;if(!isset($b)){$b=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$b;}function
q($F){global$g;return$g->quote($F);}function
get_vals($l,$H=0){global$g;$b=array();$k=$g->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[]=$d[$H];}}return$b;}function
get_key_vals($l,$qa=null){global$g;if(!is_object($qa)){$qa=$g;}$b=array();$k=$qa->query($l);if(is_object($k)){while($d=$k->fetch_row()){$b[$d[0]]=$d[1];}}return$b;}function
get_rows($l,$qa=null,$v="<p class='error'>"){global$g;if(!is_object($qa)){$qa=$g;}$b=array();$k=$qa->query($l);if(is_object($k)){while($d=$k->fetch_assoc()){$b[]=$d;}}elseif(!$k&&$g->error&&$v&&defined("PAGE_HEADER")){echo$v.error()."\n";}return$b;}function
unique_array($d,$G){foreach($G
as$R){if(ereg("PRIMARY|UNIQUE",$R["type"])){$b=array();foreach($R["columns"]as$c){if(!isset($d[$c])){continue
2;}$b[$c]=$d[$c];}return$b;}}$b=array();foreach($d
as$c=>$a){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$b[$c]=$a;}}return$b;}function
where($p){global$ma;$b=array();foreach((array)$p["where"]as$c=>$a){$b[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$a)||$ma=="mssql"?" LIKE ".exact_value(addcslashes($a,"%_\\")):" = ".exact_value($a));}foreach((array)$p["null"]as$c){$b[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$b);}function
where_check($a){parse_str($a,$sc);remove_slashes(array(&$sc));return
where($sc);}function
where_link($n,$H,$i,$Bd="="){return"&where%5B$n%5D%5Bcol%5D=".urlencode($H)."&where%5B$n%5D%5Bop%5D=".urlencode((isset($i)?$Bd:"IS NULL"))."&where%5B$n%5D%5Bval%5D=".urlencode($i);}function
cookie($f,$i){global$Ya;$cb=array($f,(ereg("\n",$i)?"":$i),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ya);if(version_compare(PHP_VERSION,'5.2.0')>=0){$cb[]=true;}return
call_user_func_array('setcookie',$cb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$a){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$a;}function
auth_url($Ab,$D,$B){global$sa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($sa))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($Ab!="server"||$D!=""?urlencode($Ab)."=".urlencode($D)."&":"")."username=".urlencode($B).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($I,$X=null){if(isset($X)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($I)?$I:$_SERVER["REQUEST_URI"]))][]=$X;}if(isset($I)){if($I==""){$I=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $I");exit;}}function
query_redirect($l,$I,$X,$yb=true,$Ad=true,$cc=false){global$g,$v,$j;if($Ad){$cc=!$g->query($l);}$Nb="";if($l){$Nb=$j->messageQuery("$l;");}if($cc){$v=error().$Nb;return
false;}if($yb){redirect($I,$X.$Nb);}return
true;}function
queries($l=null){global$g;static$Tc=array();if(!isset($l)){return
implode(";\n",$Tc);}$Tc[]=(ereg(';$',$l)?"DELIMITER ;;\n$l;\nDELIMITER ":$l);return$g->query($l);}function
apply_queries($l,$ka,$yd='table'){foreach($ka
as$h){if(!queries("$l ".$yd($h))){return
false;}}return
true;}function
queries_redirect($I,$X,$yb){return
query_redirect(queries(),$I,$X,$yb,false,!$yb);}function
remove_from_uri($fa=""){return
substr(preg_replace("~(?<=[?&])($fa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($_,$zd){return" ".($_==$zd?$_+1:'<a href="'.h(remove_from_uri("page").($_?"&page=$_":"")).'">'.($_+1)."</a>");}function
get_file($c,$Jb=false){$U=$_FILES[$c];if(!$U||$U["error"]){return$U["error"];}$b=file_get_contents($Jb&&ereg('\\.gz$',$U["name"])?"compress.zlib://$U[tmp_name]":($Jb&&ereg('\\.bz2$',$U["name"])?"compress.bzip2://$U[tmp_name]":$U["tmp_name"]));if($Jb){$Cc=substr($b,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Cc,$Sd)){$b=iconv("utf-16","utf-8",$b);}elseif($Cc=="\xEF\xBB\xBF"){$b=substr($b,3);}}return$b;}function
upload_error($v){$Pc=($v==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($v?'Súbor sa nepodarilo nahrať.'.($Pc?" ".sprintf('Maximálna povolená veľkosť súboru je %sB.',$Pc):""):'Súbor neexistuje.');}function
odd($b=' class="odd"'){static$n=0;if(!$b){$n=-1;}return($n++%
2?$b:'');}function
json_row($c,$a=null){static$ca=true;if($ca){echo"{";}if($c!=""){echo($ca?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($a)?'"'.addcslashes($a,"\r\n\"\\").'"':'undefined');$ca=false;}else{echo"\n}\n";$ca=true;}}function
is_utf8($a){return(preg_match('~~u',$a)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$a));}function
repeat_pattern($K,$bb){return
str_repeat("$K{0,65535}",$bb/65535)."$K{0,".($bb
%
65535)."}";}function
shorten_utf8($F,$bb=80,$xd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$bb).")($)?)u",$F,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$bb).")($)?)",$F,$m);}return
h($m[1]).$xd.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($a){return
preg_replace('~[^a-z0-9_]~i','-',$a);}function
hidden_fields($na,$wd=array()){while(list($c,$a)=each($na)){if(is_array($a)){foreach($a
as$Z=>$o){$na[$c."[$Z]"]=$o;}}elseif(!in_array($c,$wd)){echo'<input type="hidden" name="'.h($c).'" value="'.h($a).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$j;$b=array();foreach($j->foreignKeys($h)as$la){foreach($la["source"]as$a){$b[$a][]=$la;}}return$b;}function
enum_input($ta,$L,$e,$i,$Ib=null){global$j;preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$T);$b=(isset($Ib)?"<label><input type='$ta'$L value='$Ib'".((is_array($i)?in_array($Ib,$i):$i===0)?" checked":"")."><i>".'prázdne'."</i></label>":"");foreach($T[1]as$n=>$a){$a=stripcslashes(str_replace("''","'",$a));$Za=(is_int($i)?$i==$n+1:(is_array($i)?in_array($n+1,$i):$i===$a));$b.=" <label><input type='$ta'$L value='".($n+1)."'".($Za?' checked':'').'>'.h($j->editVal($a,$e)).'</label>';}return$b;}function
input($e,$i,$x){global$ya,$j,$ma;$f=h(bracket_escape($e["field"]));echo"<td class='function'>";$Ec=($ma=="mssql"&&$e["auto_increment"]);if($Ec&&!$_POST["save"]){$x=null;}$ba=(isset($_GET["select"])||$Ec?array("orig"=>'originál'):array())+$j->editFunctions($e);$L=" name='fields[$f]'";if($e["type"]=="enum"){echo
nbsp($ba[""])."<td>".$j->editInput($_GET["edit"],$e,$L,$i);}else{$ca=0;foreach($ba
as$c=>$a){if($c===""||!$a){break;}$ca++;}$Aa=($ca?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ca > f.selectedIndex) f.selectedIndex = $ca;\"":"");$L.=$Aa;echo(count($ba)>1?html_select("function[$f]",$ba,!isset($x)||in_array($x,$ba)||isset($ba[$x])?$x:"","functionChange(this);"):nbsp(reset($ba))).'<td>';$Dc=$j->editInput($_GET["edit"],$e,$L,$i);if($Dc!=""){echo$Dc;}elseif($e["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$e["length"],$T);foreach($T[1]as$n=>$a){$a=stripcslashes(str_replace("''","'",$a));$Za=(is_int($i)?($i>>$n)&1:in_array($a,explode(",",$i),true));echo" <label><input type='checkbox' name='fields[$f][$n]' value='".(1<<$n)."'".($Za?' checked':'')."$Aa>".h($j->editVal($a,$e)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Aa>";}elseif(ereg('text|lob',$e["type"])){echo"<textarea ".($ma!="sqlite"||ereg("\n",$i)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$L>".h($i).'</textarea>';}else{$Db=(!ereg('int',$e["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$e["length"],$m)?((ereg("binary",$e["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$e["unsigned"]?1:0)):($ya[$e["type"]]?$ya[$e["type"]]+($e["unsigned"]?0:1):0));echo"<input value='".h($i)."'".($Db?" maxlength='$Db'":"").(ereg('char|binary',$e["type"])&&$Db>20?" size='40'":"")."$L>";}}}function
process_input($e){global$j;$da=bracket_escape($e["field"]);$x=$_POST["function"][$da];$i=$_POST["fields"][$da];if($e["type"]=="enum"){if($i==-1){return
false;}if($i==""){return"NULL";}return+$i;}if($e["auto_increment"]&&$i==""){return
null;}if($x=="orig"){return($e["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($e["field"]):false);}if($x=="NULL"){return"NULL";}if($e["type"]=="set"){return
array_sum((array)$i);}if(ereg('blob|bytea|raw|file',$e["type"])&&ini_bool("file_uploads")){$U=get_file("fields-$da");if(!is_string($U)){return
false;}return
q($U);}return$j->processInput($e,$i,$x);}function
search_tables(){global$j,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Kb=false;foreach(table_status()as$h=>$C){$f=$j->tableName($C);if(isset($C["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$k=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$j->selectSearchProcess(fields($h),array())),1));if($k->fetch_row()){if(!$Kb){echo"<ul>\n";$Kb=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($Kb?"</ul>":"<p class='message'>".'Žiadne tabuľky.')."\n";}function
dump_headers($gb,$Lc=false){global$j;$b=$j->dumpHeaders($gb,$Lc);$xa=$_POST["output"];if($xa!="text"){header("Content-Disposition: attachment; filename=".friendly_url($gb!=""?$gb:(SERVER!=""?SERVER:"localhost")).".$b".($xa!="file"&&!ereg('[^0-9a-z]',$xa)?".$xa":""));}session_write_close();return$b;}function
dump_csv($d){foreach($d
as$c=>$a){if(preg_match("~[\"\n,;\t]~",$a)||$a===""){$d[$c]='"'.str_replace('"','""',$a).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$d)."\r\n";}function
apply_sql_function($x,$H){return($x?($x=="unixepoch"?"DATETIME($H, '$x')":($x=="count distinct"?"COUNT(DISTINCT ":strtoupper("$x("))."$H)"):$H);}function
password_file(){$lb=ini_get("upload_tmp_dir");if(!$lb){if(function_exists('sys_get_temp_dir')){$lb=sys_get_temp_dir();}else{$Da=@tempnam("","");if(!$Da){return
false;}$lb=dirname($Da);unlink($Da);}}$Da="$lb/adminer.key";$b=@file_get_contents($Da);if($b){return$b;}$Mb=@fopen($Da,"w");if($Mb){$b=md5(uniqid(mt_rand(),true));fwrite($Mb,$b);fclose($Mb);}return$b;}function
is_mail($Ia){$Qc='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$K="$Qc+(\\.$Qc+)*@($ab?\\.)+$ab";return
preg_match("(^$K(,\\s*$K)*\$)i",$Ia);}function
is_url($F){$ab='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($ab?\\.)+$ab(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$F,$m)?strtolower($m[1]):"");}function
print_fieldset($z,$Hd,$vd=false,$eb=""){echo"<fieldset><legend><a href='#fieldset-$z' onclick=\"$eb"."return !toggle('fieldset-$z');\">$Hd</a></legend><div id='fieldset-$z'".($vd?"":" class='hidden'").">\n";}function
bold($ad){return($ad?" class='active'":"");}global$j,$g,$sa,$Zc,$Xb,$v,$ba,$cd,$Ya,$Hc,$ma,$hd,$Qd,$ob,$Uc,$ea,$Pd,$ya,$id,$xb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ya=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$cb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ya);if(version_compare(PHP_VERSION,'5.2.0')>=0){$cb[]=true;}call_user_func_array('session_set_cookie_params',$cb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'sk';}function
lang($fd,$wb){$dd=($wb==1?0:($wb&&$wb<5?1:2));return
sprintf($fd[$dd],$wb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($kd,$B,$N,$pd='auth_error'){set_exception_handler($pd);parent::__construct($kd,$B,$N);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($l,$Ja=false){$k=parent::query($l);if(!$k){$nd=$this->errorInfo();$this->error=$nd[2];return
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
fetch_field(){$d=(object)$this->getColumnMeta($this->_offset++);$d->orgtable=$d->table;$d->orgname=$d->name;$d->charsetnr=(in_array("blob",$d->flags)?63:0);return$d;}}}$sa=array();$sa=array("server"=>"MySQL")+$sa;if(!defined("DRIVER")){$qd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($D,$B,$N){mysqli_report(MYSQLI_REPORT_OFF);list($Wc,$ib)=explode(":",$D,2);$b=@$this->real_connect(($D!=""?$Wc:ini_get("mysqli.default_host")),($D.$B!=""?$B:ini_get("mysqli.default_user")),($D.$B.$N!=""?$N:ini_get("mysqli.default_pw")),null,(is_numeric($ib)?$ib:ini_get("mysqli.default_port")),(!is_numeric($ib)?$ib:null));if($b){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$b;}function
result($l,$e=0){$k=$this->query($l);if(!$k){return
false;}$d=$k->fetch_array();return$d[$e];}function
quote($F){return"'".$this->escape_string($F)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($D,$B,$N){$this->_link=@mysql_connect(($D!=""?$D:ini_get("mysql.default_host")),("$D$B"!=""?$B:ini_get("mysql.default_user")),("$D$B$N"!=""?$N:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($F){return"'".mysql_real_escape_string($F,$this->_link)."'";}function
select_db($Xa){return
mysql_select_db($Xa,$this->_link);}function
query($l,$Ja=false){$k=@($Ja?mysql_unbuffered_query($l,$this->_link):mysql_query($l,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
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
connect($D,$B,$N){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$D)),$B,$N);$this->query("SET NAMES utf8");return
true;}function
select_db($Xa){return$this->query("USE ".idf_escape($Xa));}function
query($l,$Ja=false){$this->setAttribute(1000,!$Ja);return
parent::query($l,$Ja);}}}function
idf_escape($da){return"`".str_replace("`","``",$da)."`";}function
table($da){return
idf_escape($da);}function
connect(){global$j;$g=new
Min_DB;$Qb=$j->credentials();if($g->connect($Qb[0],$Qb[1],$Qb[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($Yc=true){global$g;$b=&get_session("dbs");if(!isset($b)){if($Yc){restart_session();ob_flush();flush();}$b=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$b;}function
limit($l,$p,$E,$Fc=0,$wa=" "){return" $l$p".(isset($E)?$wa."LIMIT $E".($Fc?" OFFSET $Fc":""):"");}function
limit1($l,$p){return
limit($l,$p,1);}function
db_collation($va,$Xc){global$g;$b=null;$kb=$g->result("SHOW CREATE DATABASE ".idf_escape($va),1);if(preg_match('~ COLLATE ([^ ]+)~',$kb,$m)){$b=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$kb,$m)){$b=$Xc[$m[1]][-1];}return$b;}function
engines(){$b=array();foreach(get_rows("SHOW ENGINES")as$d){if(ereg("YES|DEFAULT",$d["Support"])){$b[]=$d["Engine"];}}return$b;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($ja){$b=array();foreach($ja
as$va){$b[$va]=count(get_vals("SHOW TABLES IN ".idf_escape($va)));}return$b;}function
table_status($f=""){$b=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$d){if($d["Engine"]=="InnoDB"){$d["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$d["Comment"]);}if(!isset($d["Rows"])){$d["Comment"]="";}if($f!=""){return$d;}$b[$d["Name"]]=$d;}return$b;}function
is_view($C){return!isset($C["Rows"]);}function
fk_support($C){return
eregi("InnoDB|IBMDB2I",$C["Engine"]);}function
fields($h){$b=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$d){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$d["Type"],$m);$b[$d["Field"]]=array("field"=>$d["Field"],"full_type"=>$d["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($d["Default"]!=""||ereg("char",$m[1])?$d["Default"]:null),"null"=>($d["Null"]=="YES"),"auto_increment"=>($d["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$d["Extra"],$m)?$m[1]:""),"collation"=>$d["Collation"],"privileges"=>array_flip(explode(",",$d["Privileges"])),"comment"=>$d["Comment"],"primary"=>($d["Key"]=="PRI"),);}return$b;}function
indexes($h,$qa=null){$b=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$qa)as$d){$b[$d["Key_name"]]["type"]=($d["Key_name"]=="PRIMARY"?"PRIMARY":($d["Index_type"]=="FULLTEXT"?"FULLTEXT":($d["Non_unique"]?"INDEX":"UNIQUE")));$b[$d["Key_name"]]["columns"][]=$d["Column_name"];$b[$d["Key_name"]]["lengths"][]=$d["Sub_part"];}return$b;}function
foreign_keys($h){global$g,$ob;static$K='`(?:[^`]|``)+`';$b=array();$Sc=$g->result("SHOW CREATE TABLE ".table($h),1);if($Sc){preg_match_all("~CONSTRAINT ($K) FOREIGN KEY \\(((?:$K,? ?)+)\\) REFERENCES ($K)(?:\\.($K))? \\(((?:$K,? ?)+)\\)(?: ON DELETE (".implode("|",$ob)."))?(?: ON UPDATE (".implode("|",$ob)."))?~",$Sc,$T,PREG_SET_ORDER);foreach($T
as$m){preg_match_all("~$K~",$m[2],$Zb);preg_match_all("~$K~",$m[5],$W);$b[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$Zb[0]),"target"=>array_map('idf_unescape',$W[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$b;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$b=array();foreach(get_rows("SHOW COLLATION")as$d){if($d["Default"]){$b[$d["Charset"]][-1]=$d["Collation"];}else{$b[$d["Charset"]][]=$d["Collation"];}}ksort($b);foreach($b
as$c=>$a){asort($b[$c]);}return$b;}function
information_schema($va){global$g;return($g->server_info>=5&&$va=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($a){return
q($a)." COLLATE utf8_bin";}function
create_database($va,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($va).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($ja){set_session("dbs",null);return
apply_queries("DROP DATABASE",$ja,'idf_escape');}function
rename_database($f,$Ba){if(create_database($f,$Ba)){$Ha=array();foreach(tables_list()as$h=>$ta){$Ha[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Ha||queries("RENAME TABLE ".implode(", ",$Ha))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ac=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$R){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$R["columns"],true)){$ac="";break;}if($R["type"]=="PRIMARY"){$ac=" UNIQUE";}}}return" AUTO_INCREMENT$ac";}function
alter_table($h,$f,$q,$Gd,$rd,$Oc,$Ba,$pb,$Ed){$ha=array();foreach($q
as$e){$ha[]=($e[1]?($h!=""?($e[0]!=""?"CHANGE ".idf_escape($e[0]):"ADD"):" ")." ".implode($e[1]).($h!=""?" $e[2]":""):"DROP ".idf_escape($e[0]));}$ha=array_merge($ha,$Gd);$Ic="COMMENT=".q($rd).($Oc?" ENGINE=".q($Oc):"").($Ba?" COLLATE ".q($Ba):"").($pb!=""?" AUTO_INCREMENT=$pb":"").$Ed;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ha)."\n) $Ic");}if($h!=$f){$ha[]="RENAME TO ".table($f);}$ha[]=$Ic;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$ha));}function
alter_indexes($h,$ha){foreach($ha
as$c=>$a){$ha[$c]=($a[2]=="DROP"?"\nDROP INDEX ".idf_escape($a[1]):"\nADD $a[0] ".($a[0]=="PRIMARY"?"KEY ":"").($a[1]!=""?idf_escape($a[1])." ":"").$a[2]);}return
queries("ALTER TABLE ".table($h).implode(",",$ha));}function
truncate_tables($ka){return
apply_queries("TRUNCATE TABLE",$ka);}function
drop_views($Wa){return
queries("DROP VIEW ".implode(", ",array_map('table',$Wa)));}function
drop_tables($ka){return
queries("DROP TABLE ".implode(", ",array_map('table',$ka)));}function
move_tables($ka,$Wa,$W){$Ha=array();foreach(array_merge($ka,$Wa)as$h){$Ha[]=table($h)." TO ".idf_escape($W).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Ha));}function
copy_tables($ka,$Wa,$W){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ka
as$h){$f=($W==DB?table("copy_$h"):idf_escape($W).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($Wa
as$h){$f=($W==DB?table("copy_$h"):idf_escape($W).".".table($h));$Id=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Id[select]")){return
false;}}return
true;}function
trigger($f){$w=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($w);}function
triggers($h){$b=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$d){$b[$d["Trigger"]]=array($d["Timing"],$d["Event"]);}return$b;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$ta){global$g,$Xb,$Hc,$ya;$Md=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Kc="((".implode("|",array_merge(array_keys($ya),$Md)).")(?:\\s*\\(((?:[^'\")]*|$Xb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$K="\\s*(".($ta=="FUNCTION"?"":$Hc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Kc";$kb=$g->result("SHOW CREATE $ta ".idf_escape($f),2);preg_match("~\\(((?:$K\\s*,?)*)\\)".($ta=="FUNCTION"?"\\s*RETURNS\\s+$Kc":"")."\\s*(.*)~is",$kb,$m);$q=array();preg_match_all("~$K\\s*,?~is",$m[1],$T,PREG_SET_ORDER);foreach($T
as$fa){$f=str_replace("``","`",$fa[2]).$fa[3];$q[]=array("field"=>$f,"type"=>strtolower($fa[5]),"length"=>preg_replace_callback("~$Xb~s",'normalize_enum',$fa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$fa[8] $fa[7]"))),"full_type"=>$fa[4],"inout"=>strtoupper($fa[1]),"collation"=>strtolower($fa[9]),);}if($ta!="FUNCTION"){return
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
insert_update($h,$t,$hb){foreach($t
as$c=>$a){$t[$c]="$c = $a";}$aa=implode(", ",$t);return
queries("INSERT INTO ".table($h)." SET $aa ON DUPLICATE KEY UPDATE $aa");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$l){return$g->query("EXPLAIN $l");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Od){return
true;}function
create_sql($h,$pb){global$g;$b=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$pb){$b=preg_replace('~ AUTO_INCREMENT=\\d+~','',$b);}return$b;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($Xa){return"USE ".idf_escape($Xa);}function
trigger_sql($h,$tb){$b="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$d){$b.="\n".($tb=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($d["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($d["Trigger"])." $d[Timing] $d[Event] ON ".table($d["Table"])." FOR EACH ROW\n$d[Statement];;\n";}return$b;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Cd){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Cd);}$ma="sql";$ya=array();$Uc=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Dátum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Reťazce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binárne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),)as$c=>$a){$ya+=$a;$Uc[$c]=array_keys($a);}$id=array("unsigned","zerofill","unsigned zerofill");$ud=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ba=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$cd=array("avg","count","count distinct","group_concat","max","min","sum");$Zc=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$xb="3.3.0";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Editor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$g;$ja=get_databases(false);return(!$ja?$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$ja[(information_schema($ja[0])?1:0)]);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>Používateľ<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".'Prihlásiť sa'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé prihlásenie')."\n";}function
login($Nd,$N){global$g;$g->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Sa){return
h($Sa["Comment"]!=""?$Sa["Comment"]:$Sa["Name"]);}function
fieldName($e,$V=0){return
h($e["comment"]!=""?$e["comment"]:$e["field"]);}function
selectLinks($Sa,$t=""){$r=$Sa["Name"];if(isset($t)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($r).$t).'">'.'Nová položka'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Posledná stránka'."'>&gt;&gt;</a>\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$td){$b=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($h)."
ORDER BY ORDINAL_POSITION",null,"")as$d){$b[$d["TABLE_NAME"]]["keys"][$d["CONSTRAINT_NAME"]][$d["COLUMN_NAME"]]=$d["REFERENCED_COLUMN_NAME"];}foreach($b
as$c=>$a){$f=$this->tableName(table_status($c));if($f!=""){$Gc=preg_quote($td);$wa="(:|\\s*-)?\\s+";$b[$c]["name"]=(preg_match("(^$Gc$wa(.+)|^(.+?)$wa$Gc\$)iu",$f,$m)?$m[2].$m[3]:$f);}else{unset($b[$c]);}}return$b;}function
backwardKeysPrint($sd,$d){foreach($sd
as$h=>$Nc){foreach($Nc["keys"]as$_a){$s=ME.'select='.urlencode($h);$n=0;foreach($_a
as$H=>$a){$s.=where_link($n++,$H,$d[$a]);}echo"<a href='".h($s)."'>".h($Nc["name"])."</a>";$s=ME.'edit='.urlencode($h);foreach($_a
as$H=>$a){$s.="&set".urlencode("[".bracket_escape($H)."]")."=".urlencode($d[$a]);}echo"<a href='".h($s)."' title='".'Nová položka'."'>+</a> ";}}}function
selectQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->\n";}function
rowDescription($h){foreach(fields($h)as$e){if(ereg("varchar|character varying",$e["type"])){return
idf_escape($e["field"]);}}return"";}function
rowDescriptions($w,$Ta){$b=$w;foreach($w[0]as$c=>$a){if(list($h,$z,$f)=$this->_foreignColumn($Ta,$c)){$Rc=array();foreach($w
as$d){$Rc[$d[$c]]=exact_value($d[$c]);}$Eb=$this->_values[$h];if(!$Eb){$Eb=get_key_vals("SELECT $z, $f FROM ".table($h)." WHERE $z IN (".implode(", ",$Rc).")");}foreach($w
as$y=>$d){if(isset($d[$c])){$b[$y][$c]=(string)$Eb[$d[$c]];}}}}return$b;}function
selectVal($a,$s,$e){$b=($a=="<i>NULL</i>"?"&nbsp;":$a);if(ereg('blob|bytea',$e["type"])&&!is_utf8($a)){$b=lang(array('%d bajt','%d bajty','%d bajtov'),strlen($a));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$a)){$b="<img src='$s' alt='$b'>";}}if(like_bool($e)&&$b!="&nbsp;"){$b='<img src="'.($a?"".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0":"".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.0").'" alt="'.h($a).'">';}if($s){$b="<a href='$s'>$b</a>";}if(!$s&&!like_bool($e)&&ereg('int|float|double|decimal',$e["type"])){$b="<div class='number'>$b</div>";}elseif(ereg('date',$e["type"])){$b="<div class='datetime'>$b</div>";}return$b;}function
editVal($a,$e){if(ereg('date|timestamp',$e["type"])&&isset($a)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$a);}return(ereg("binary",$e["type"])?reset(unpack("H*",$a)):$a);}function
selectColumnsPrint($u,$A){}function
selectSearchPrint($p,$A,$G){$p=(array)$_GET["where"];echo'<fieldset><legend>'.'Vyhľadať'."</legend><div>\n";$Fb=array();foreach($p
as$c=>$a){$Fb[$a["col"]]=$c;}$n=0;$q=fields($_GET["select"]);foreach($q
as$f=>$e){if(ereg("enum",$e["type"])){$pa=$A[$f];$c=$Fb[$f];$n--;echo"<div>".h($pa)."<input type='hidden' name='where[$n][col]' value='".h($f)."'>:",enum_input("checkbox"," name='where[$n][val][]'",$e,(array)$p[$c]["val"],($e["null"]?0:null)),"</div>\n";unset($A[$f]);}}foreach($A
as$f=>$pa){$Y=$this->_foreignKeyOptions($_GET["select"],$f);if(is_array($Y)){if($q[$f]["null"]){$Y[0]='('.'prázdne'.')';}$c=$Fb[$f];$n--;echo"<div>".h($pa)."<input type='hidden' name='where[$n][col]' value='".h($f)."'><input type='hidden' name='where[$n][op]' value='='>: <select name='where[$n][val]'>".optionlist($Y,$p[$c]["val"],true)."</select></div>\n";unset($A[$f]);}}$n=0;foreach($p
as$a){if(($a["col"]==""||$A[$a["col"]])&&"$a[col]$a[val]"!=""){echo"<div><select name='where[$n][col]'><option value=''>(".'kdekoľvek'.")".optionlist($A,$a["col"],true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators,$a["op"]),"<input name='where[$n][val]' value='".h($a["val"])."'></div>\n";$n++;}}echo"<div><select name='where[$n][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoľvek'.")".optionlist($A,null,true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators),"<input name='where[$n][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($V,$A,$G){$Gb=array();foreach($G
as$c=>$R){$V=array();foreach($R["columns"]as$a){$V[]=$A[$a];}if(count(array_filter($V,'strlen'))>1&&$c!="PRIMARY"){$Gb[$c]=implode(", ",$V);}}if($Gb){echo'<fieldset><legend>'.'Zotriediť'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Gb,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($E){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$E),"</div></fieldset>\n";}function
selectLengthPrint($Ua){}function
selectActionPrint(){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'Vypísať'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($jb,$A){if($jb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Odosielateľ'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Predmet'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$A,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Vložiť'."'>\n";echo"<p>".'Prílohy'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($jb)==1?'<input type="hidden" name="email_field" value="'.h(key($jb)).'">':html_select("email_field",$jb)),"<input type='submit' name='email' value='".'Odoslať'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($A,$G){return
array(array(),array());}function
selectSearchProcess($q,$G){$b=array();foreach((array)$_GET["where"]as$c=>$p){$ra=$p["col"];$Va=$p["op"];$a=$p["val"];if(($c<0?"":$ra).$a!=""){$Ra=array();foreach(($ra!=""?array($ra=>$q[$ra]):$q)as$f=>$e){if($ra!=""||is_numeric($a)||!ereg('int|float|double|decimal',$e["type"])){$f=idf_escape($f);if($ra!=""&&$e["type"]=="enum"){$Ra[]=(in_array(0,$a)?"$f IS NULL OR ":"")."$f IN (".implode(", ",array_map('intval',$a)).")";}else{$jc=ereg('char|text|enum|set',$e["type"]);$i=$this->processInput($e,(!$Va&&$jc&&ereg('^[^%]+$',$a)?"%$a%":$a));$Ra[]=$f.($i=="NULL"?" IS".($Va==">="?" NOT":"")." $i":(in_array($Va,$this->operators)||$Va=="="?" $Va $i":($jc?" LIKE $i":" IN (".str_replace(",","', '",$i).")")));if($c<0&&$a=="0"){$Ra[]="$f IS NULL";}}}}$b[]=($Ra?"(".implode(" OR ",$Ra).")":"0");}}return$b;}function
selectOrderProcess($q,$G){$sb=$_GET["index_order"];if($sb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($sb!=""?array($G[$sb]):$G)as$R){if($sb!=""||$R["type"]=="INDEX"){$pa=false;foreach($R["columns"]as$a){if(ereg('date|timestamp',$q[$a]["type"])){$pa=true;break;}}$b=array();foreach($R["columns"]as$a){$b[]=idf_escape($a).($pa?" DESC":"");}return$b;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($p,$Ta){if($_POST["email_append"]){return
true;}if($_POST["email"]){$hc=0;if($_POST["all"]||$_POST["check"]){$e=idf_escape($_POST["email_field"]);$vb=$_POST["email_subject"];$X=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$vb.$X",$T);$w=get_rows("SELECT DISTINCT $e".($T[1]?", ".implode(", ",array_map('idf_escape',array_unique($T[1]))):"")." FROM ".table($_GET["select"])." WHERE $e IS NOT NULL AND $e != ''".($p?" AND ".implode(" AND ",$p):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($w,$Ta)as$d){$Cb=array('{\\'=>'{');foreach($T[1]as$a){$Cb['{$'."$a}"]=$this->editVal($d[$a],$q[$a]);}$Ia=$d[$_POST["email_field"]];if(is_mail($Ia)&&send_mail($Ia,strtr($vb,$Cb),strtr($X,$Cb),$_POST["email_from"],$_FILES["email_files"])){$hc++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),$hc));}return
false;}function
messageQuery($l){return"<!--\n".str_replace("--","--><!-- ",$l)."\n-->";}function
editFunctions($e){$b=array();if($e["null"]&&ereg('blob',$e["type"])){$b["NULL"]='prázdne';}$b[""]=($e["null"]||$e["auto_increment"]||like_bool($e)?"":"*");if(ereg('date|time',$e["type"])){$b["now"]='teraz';}if(eregi('_(md5|sha1)$',$e["field"],$m)){$b[]=strtolower($m[1]);}return$b;}function
editInput($h,$e,$L,$i){if($e["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$L value='-1' checked><i>".'originál'."</i></label> ":"").enum_input("radio",$L,$e,($i||isset($_GET["select"])?$i:0),($e["null"]?"":null));}$Y=$this->_foreignKeyOptions($h,$e["field"],$i);if(isset($Y)){return(is_array($Y)?"<select$L>".optionlist($Y,$i,true)."</select>":"<input value='".h($i)."'$L class='hidden'><input value='".h($Y)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($h)."&field=".urlencode($e["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($e)){return'<input type="checkbox" value="'.h($i?$i:1).'"'.($i?' checked':'')."$L>";}$Fa="";if(ereg('time',$e["type"])){$Fa='HH:MM:SS';}if(ereg('date|timestamp',$e["type"])){$Fa='d.m.[rrrr]'.($Fa?" [$Fa]":"");}if($Fa){return"<input value='".h($i)."'$L> ($Fa)";}if(eregi('_(md5|sha1)$',$e["field"])){return"<input type='password' value='".h($i)."'$L>";}return'';}function
processInput($e,$i,$x=""){if($x=="now"){return"$x()";}$b=$i;if(ereg('date|timestamp',$e["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$i,$m)){$b=($m["p1"]!=""?$m["p1"]:($m["p2"]!=""?($m["p2"]<70?20:19).$m["p2"]:gmdate("Y")))."-$m[p3]$m[p4]-$m[p5]$m[p6]".end($m);}$b=($e["type"]=="bit"&&ereg('^[0-9]+$',$i)?$b:q($b));if($i==""&&($e["null"]||!ereg('char|text',$e["type"]))&&!like_bool($e)){$b="NULL";}elseif(ereg('^(md5|sha1)$',$x)){$b="$x($b)";}if(ereg("binary",$e["type"])){$b="unhex($b)";}return$b;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($h,$tb,$l){global$g;$k=$g->query($l,1);if($k){while($d=$k->fetch_assoc()){if($tb=="table"){dump_csv(array_keys($d));$tb="INSERT";}dump_csv($d);}}}function
dumpHeaders($gb,$Lc=false){$_d="csv";header("Content-Type: text/csv; charset=utf-8");return$_d;}function
homepage(){return
true;}function
navigation($Qa){global$xb,$ea;echo'<h1>
',$this->name(),' <span class="version">',$xb,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($xb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Qa=="auth"){$ca=true;foreach((array)$_SESSION["pwds"]["server"][""]as$B=>$N){if(isset($N)){if($ca){echo"<p onclick='eventStop(event);'>\n";$ca=false;}echo"<a href='".h(auth_url("server","",$B))."'>".($B!=""?h($B):"<i>".'prázdne'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Odhlásiť" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$ea,'">
</p>
</form>
';if($Qa!="db"&&$Qa!="ns"){$C=table_status();if(!$C){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{$this->tablesPrint($C);}}}}function
tablesPrint($ka){echo"<p id='tables'>\n";foreach($ka
as$d){$f=$this->tableName($d);if(isset($d["Engine"])&&$f!=""){echo"<a href='".h(ME).'select='.urlencode($d["Name"])."'".bold($_GET["select"]==$d["Name"]).">$f</a><br>\n";}}}function
_foreignColumn($Ta,$H){foreach((array)$Ta[$H]as$ub){if(count($ub["source"])==1){$f=$this->rowDescription($ub["table"]);if($f!=""){$z=idf_escape($ub["target"][0]);return
array($ub["table"],$z,$f);}}}}function
_foreignKeyOptions($h,$H,$i=null){global$g;if(list($W,$z,$f)=$this->_foreignColumn(column_foreign_keys($h),$H)){$b=&$this->_values[$W];if(!isset($b)){$C=table_status($W);$b=($C["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $z, $f FROM ".table($W)." ORDER BY 2"));}if(!$b&&isset($i)){return$g->result("SELECT $f FROM ".table($W)." WHERE $z = ".q($i));}return$b;}}}$j=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($ec,$v="",$Ka=array(),$oc=""){global$hd,$j,$g,$sa;header("Content-Type: text/html; charset=utf-8");if($j->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$yc=$ec.($oc!=""?": ".h($oc):"");$xc=strip_tags($yc.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$j->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($xc));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="sk" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$xc,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.0",'">
<script type="text/javascript">
var areYouSure = \'Znovu poslať POST data?\';
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
}if(isset($Ka)){$s=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($s?$s:".").'">'.$sa[DRIVER].'</a> &raquo; ';$s=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$D=(SERVER!=""?h(SERVER):'Server');if($Ka===false){echo"$D\n";}else{echo"<a href='".($s?h($s):".")."' accesskey='1' title='Alt+Shift+1'>$D</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ka))){echo'<a href="'.h($s."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Ka)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Ka
as$c=>$a){$pa=(is_array($a)?$a[1]:$a);if($pa!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($a)?$a[0]:$a).'">'.h($pa).'</a> &raquo; ';}}}echo"$ec\n";}}echo"<span id='loader'></span>\n","<h2>$yc</h2>\n";restart_session();$_c=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ac=$_SESSION["messages"][$_c];if($Ac){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ac)."</div>\n";unset($_SESSION["messages"][$_c]);}$ja=&get_session("dbs");if(DB!=""&&$ja&&!in_array(DB,$ja,true)){$ja=null;}if($v){echo"<div class='error'>$v</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Qa=""){global$j;if(!is_ajax()){echo'</div>

<div id="menu">
';$j->navigation($Qa);echo'</div>
';}}function
int32($y){while($y>=2147483648){$y-=4294967296;}while($y<=-2147483649){$y+=4294967296;}return(int)$y;}function
long2str($o,$Hb){$za='';foreach($o
as$a){$za.=pack('V',$a);}if($Hb){return
substr($za,0,end($o));}return$za;}function
str2long($za,$Hb){$o=array_values(unpack('V*',str_pad($za,4*ceil(strlen($za)/4),"\0")));if($Hb){$o[]=strlen($za);}return$o;}function
xxtea_mx($O,$M,$S,$Z){return
int32((($O>>5&0x7FFFFFF)^$M<<2)+(($M>>3&0x1FFFFFFF)^$O<<4))^int32(($S^$M)+($Z^$O));}function
encrypt_string($Ma,$c){if($Ma==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$o=str2long($Ma,true);$y=count($o)-1;$O=$o[$y];$M=$o[0];$Lb=floor(6+52/($y+1));$S=0;while($Lb-->0){$S=int32($S+0x9E3779B9);$La=$S>>2&3;for($P=0;$P<$y;$P++){$M=$o[$P+1];$Ca=xxtea_mx($O,$M,$S,$c[$P&3^$La]);$O=int32($o[$P]+$Ca);$o[$P]=$O;}$M=$o[0];$Ca=xxtea_mx($O,$M,$S,$c[$P&3^$La]);$O=int32($o[$y]+$Ca);$o[$y]=$O;}return
long2str($o,false);}function
decrypt_string($Ma,$c){if($Ma==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$o=str2long($Ma,false);$y=count($o)-1;$O=$o[$y];$M=$o[0];$Lb=floor(6+52/($y+1));$S=int32($Lb*0x9E3779B9);while($S){$La=$S>>2&3;for($P=$y;$P>0;$P--){$O=$o[$P-1];$Ca=xxtea_mx($O,$M,$S,$c[$P&3^$La]);$M=int32($o[$P]-$Ca);$o[$P]=$M;}$O=$o[$y];$Ca=xxtea_mx($O,$M,$S,$c[$P&3^$La]);$M=int32($o[0]-$Ca);$o[0]=$M;$S=int32($S-0x9E3779B9);}return
long2str($o,true);}$g='';$ea=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ua=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$a){list($c)=explode(":",$a);$ua[$c]=$a;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$fb=$j->permanentLogin();$ua[$c]="$c:".base64_encode($fb?encrypt_string($_POST["password"],$fb):"");cookie("adminer_permanent",implode(" ",$ua));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($ea&&$_POST["token"]!=$ea){page_header('Odhlásiť','Neplatný token CSRF. Odošlite formulár znova.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ua[$c]){unset($ua[$c]);cookie("adminer_permanent",implode(" ",$ua));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlásenie prebehlo v poriadku.');}}elseif($ua&&!$_SESSION["pwds"]){session_regenerate_id();$fb=$j->permanentLogin();foreach($ua
as$c=>$a){list(,$Jd)=explode(":",$a);list($Ab,$D,$B)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$Ab][$D][$B]=decrypt_string(base64_decode($Jd),$fb);}}function
auth_error($nc=null){global$g,$j,$ea;$rb=session_name();$v="";if(!$_COOKIE[$rb]&&$_GET[$rb]&&ini_bool("session.use_only_cookies")){$v='Session premenné musia byť povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$rb]||$_GET[$rb])&&!$ea){$v='Session vypršala, prihláste sa prosím znova.';}else{$N=&get_session("pwds");if(isset($N)){$v=h($nc?$nc->getMessage():(is_string($g)?$g:'Neplatné prihlasovacie údaje.'));$N=null;}}}page_header('Prihlásiť sa',$v,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$j->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žiadne rozšírenie',sprintf('Nie je dostupné žiadne z podporovaných rozšírení (%s).',implode(", ",$qd)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$j->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$ea=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$ea;}$v=($_POST?($_POST["token"]==$ea?"":'Neplatný token CSRF. Odošlite formulár znova.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','"post_max_size"')));$g->select_db($j->database());function
email_header($Dd){return"=?UTF-8?B?".base64_encode($Dd)."?=";}function
send_mail($Ia,$vb,$X,$Ga="",$nb=array()){$J=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$X=str_replace("\n",$J,wordwrap(str_replace("\r","","$X\n")));$Bb=uniqid("boundary");$mb="";foreach((array)$nb["error"]as$c=>$a){if(!$a){$mb.="--$Bb$J"."Content-Type: ".str_replace("\n","",$nb["type"][$c]).$J."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$nb["name"][$c])."\"$J"."Content-Transfer-Encoding: base64$J$J".chunk_split(base64_encode(file_get_contents($nb["tmp_name"][$c])),76,$J).$J;}}$bc="";$qb="Content-Type: text/plain; charset=utf-8$J"."Content-Transfer-Encoding: 8bit";if($mb){$mb.="--$Bb--$J";$bc="--$Bb$J$qb$J$J";$qb="Content-Type: multipart/mixed; boundary=\"$Bb\"";}$qb.=$J."MIME-Version: 1.0$J"."X-Mailer: Adminer Editor".($Ga?$J."From: ".str_replace("\n","",$Ga):"");return
mail($Ia,email_header($vb),$bc.$X.$mb,$qb);}function
like_bool($e){return
ereg("bool|(tinyint|bit)\\(1\\)",$e["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$ob=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$sa[DRIVER]='Prihlásiť sa';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$r=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$r-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($r)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$r=$_GET["edit"];$p=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$aa=(isset($_GET["select"])?$_POST["edit"]:$p);$q=fields($r);foreach($q
as$f=>$e){if(!isset($e["privileges"][$aa?"update":"insert"])||$j->fieldName($e)==""){unset($q[$f]);}}if($_POST&&!$v&&!isset($_GET["select"])){$I=$_POST["referer"];if($_POST["insert"]){$I=($aa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$I)){$I=ME."select=".urlencode($r);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($r)," WHERE $p"),$I,'Položka bola vymazaná.');}else{$t=array();foreach($q
as$f=>$e){$a=process_input($e);if($a!==false&&$a!==null){$t[idf_escape($f)]=($aa?"\n".idf_escape($f)." = $a":$a);}}if($aa){if(!$t){redirect($I);}query_redirect("UPDATE".limit1(table($r)." SET".implode(",",$t),"\nWHERE $p"),$I,'Položka bola aktualizovaná.');}else{$k=insert_into($r,$t);$dc=($k?last_id():0);queries_redirect($I,sprintf('Položka%s bola vložená.',($dc?" $dc":"")),$k);}}}$Na=$j->tableName(table_status($r));page_header(($aa?'Upraviť':'Vložiť'),$v,array("select"=>array($r,$Na)),$Na);$d=null;if($_POST["save"]){$d=(array)$_POST["fields"];}elseif($p){$u=array();foreach($q
as$f=>$e){if(isset($e["privileges"]["select"])){$u[]=($_POST["clone"]&&$e["auto_increment"]?"'' AS ":(ereg("enum|set",$e["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$d=array();if($u){$w=get_rows("SELECT".limit(implode(", ",$u)." FROM ".table($r)," WHERE $p",(isset($_GET["select"])?2:1)));$d=(isset($_GET["select"])&&count($w)!=1?null:reset($w));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$f=>$e){echo"<tr><th>".$j->fieldName($e);$wc=$_GET["set"][bracket_escape($f)];$i=(isset($d)?($d[$f]!=""&&ereg("enum|set",$e["type"])?(is_array($d[$f])?array_sum($d[$f]):+$d[$f]):$d[$f]):(!$aa&&$e["auto_increment"]?"":(isset($_GET["select"])?false:(isset($wc)?$wc:$e["default"]))));if(!$_POST["save"]&&is_string($i)){$i=$j->editVal($i,$e);}$x=($_POST["save"]?(string)$_POST["function"][$f]:($aa&&$e["on_update"]=="CURRENT_TIMESTAMP"?"now":($i===false?null:(isset($i)?'':'NULL'))));if($e["type"]=="timestamp"&&$i=="CURRENT_TIMESTAMP"){$i="";$x="now";}input($e,$i,$x);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".'Uložiť'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($aa?'Uložiť a pokračovať v úpravách':'Uložiť a vložiť ďalší')."' title='Ctrl+Shift+Enter'>\n";}}echo($aa?"<input type='submit' name='delete' value='".'Zmazať'."' onclick=\"return confirm('".'Naozaj?'."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$ea,'">
</form>
';}elseif(isset($_GET["select"])){$r=$_GET["select"];$C=table_status($r);$G=indexes($r);$q=fields($r);$Oa=column_foreign_keys($r);if($C["Oid"]=="t"){$G[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$db);$uc=array();$A=array();$Ua=null;foreach($q
as$c=>$e){$f=$j->fieldName($e);if(isset($e["privileges"]["select"])&&$f!=""){$A[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$e["type"])){$Ua=$j->selectLengthProcess();}}$uc+=$e["privileges"];}list($u,$Q)=$j->selectColumnsProcess($A,$G);$p=$j->selectSearchProcess($q,$G);$V=$j->selectOrderProcess($q,$G);$E=$j->selectLimitProcess();$Ga=($u?implode(", ",$u):($C["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($r);$Pb=($Q&&count($Q)<count($u)?"\nGROUP BY ".implode(", ",$Q):"").($V?"\nORDER BY ".implode(", ",$V):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$ia=>$d){echo$g->result("SELECT".limit(idf_escape(key($d))." FROM ".table($r)," WHERE ".where_check($ia).($p?" AND ".implode(" AND ",$p):"").($V?" ORDER BY ".implode(", ",$V):""),1));}exit;}if($_POST&&!$v){$rc="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$hb=$Pa=null;foreach($G
as$R){if($R["type"]=="PRIMARY"){$hb=array_flip($R["columns"]);$Pa=($u?$hb:array());break;}}foreach((array)$Pa
as$c=>$a){if(in_array(idf_escape($c),$u)){unset($Pa[$c]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($r);$j->dumpTable($r,"");if(!is_array($_POST["check"])||$Pa===array()){$Ea=$p;if(is_array($_POST["check"])){$Ea[]="($rc)";}$l="SELECT $Ga".($Ea?"\nWHERE ".implode(" AND ",$Ea):"").$Pb;}else{$qc=array();foreach($_POST["check"]as$a){$qc[]="(SELECT".limit($Ga,"\nWHERE ".($p?implode(" AND ",$p)." AND ":"").where_check($a).$Pb,1).")";}$l=implode(" UNION ALL ",$qc);}$j->dumpData($r,"table",$l);exit;}if(!$j->selectEmailProcess($p,$Oa)){if($_POST["save"]||$_POST["delete"]){$k=true;$oa=0;$l=table($r);$t=array();if(!$_POST["delete"]){foreach($A
as$f=>$a){$a=process_input($q[$f]);if($a!==null){if($_POST["clone"]){$t[idf_escape($f)]=($a!==false?$a:idf_escape($f));}elseif($a!==false){$t[]=idf_escape($f)." = $a";}}}$l.=($_POST["clone"]?" (".implode(", ",array_keys($t)).")\nSELECT ".implode(", ",$t)."\nFROM ".table($r):" SET\n".implode(",\n",$t));}if($_POST["delete"]||$t){$_b="UPDATE";if($_POST["delete"]){$_b="DELETE";$l="FROM $l";}if($_POST["clone"]){$_b="INSERT";$l="INTO $l";}if($_POST["all"]||($Pa===array()&&$_POST["check"])||count($Q)<count($u)){$k=queries($_b." $l".($_POST["all"]?($p?"\nWHERE ".implode(" AND ",$p):""):"\nWHERE $rc"));$oa=$g->affected_rows;}else{foreach((array)$_POST["check"]as$a){$k=queries($_b.limit1($l,"\nWHERE ".where_check($a)));if(!$k){break;}$oa+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d položiek bolo ovplyvnených.',$oa),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$v='Dvojkliknite na políčko, ktoré chcete zmeniť.';}else{$k=true;$oa=0;foreach($_POST["val"]as$ia=>$d){$t=array();foreach($d
as$c=>$a){$c=bracket_escape($c,1);$t[]=idf_escape($c)." = ".(ereg('char|text',$q[$c]["type"])||$a!=""?$j->processInput($q[$c],$a):"NULL");}$l=table($r)." SET ".implode(", ",$t);$Ea=" WHERE ".where_check($ia).($p?" AND ".implode(" AND ",$p):"");$k=queries("UPDATE".(count($Q)<count($u)?" $l$Ea":limit1($l,$Ea)));if(!$k){break;}$oa+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d položiek bolo ovplyvnených.',$oa),$k);}}elseif(is_string($U=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($db["output"])."&format=".urlencode($_POST["separator"]));$k=true;$_a=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$U,$T);$oa=count($T[0]);begin();$wa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($T[0]as$c=>$a){preg_match_all("~((\"[^\"]*\")+|[^$wa]*)$wa~",$a.$wa,$Yb);if(!$c&&!array_diff($Yb[1],$_a)){$_a=$Yb[1];$oa--;}else{$t=array();foreach($Yb[1]as$n=>$ra){$t[idf_escape($_a[$n])]=($ra==""&&$q[$_a[$n]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$ra))));}$k=insert_update($r,$t,$hb);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),$oa),$k);queries("ROLLBACK");}else{$v=upload_error($U);}}}$Na=$j->tableName($C);page_header('Vypísať'.": $Na",$v);session_write_close();$t=null;if(isset($uc["insert"])){$t="";foreach((array)$_GET["where"]as$a){if(count($Oa[$a["col"]])==1&&($a["op"]=="="||(!$a["op"]&&!ereg('[_%]',$a["val"])))){$t.="&set".urlencode("[".bracket_escape($a["col"])."]")."=".urlencode($a["val"]);}}}$j->selectLinks($C,$t);if(!$A){echo"<p class='error'>".'Tabuľku sa nepodarilo vypísať'.($q?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($r).'">',"</div>\n";$j->selectColumnsPrint($u,$A);$j->selectSearchPrint($p,$A,$G);$j->selectOrderPrint($V,$A,$G);$j->selectLimitPrint($E);$j->selectLengthPrint($Ua);$j->selectActionPrint();echo"</form>\n";$_=$_GET["page"];if($_=="last"){$ga=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));$_=floor(max(0,$ga-1)/$E);}$l="SELECT".limit((+$E&&$Q&&count($Q)<count($u)&&$ma=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Ga,($p?"\nWHERE ".implode(" AND ",$p):"").$Pb,($E!=""?+$E:null),($_?$E*$_:0),"\n");echo$j->selectQuery($l);$k=$g->query($l);if(!$k){echo"<p class='error'>".error()."\n";}else{if($ma=="mssql"){$k->seek($E*$_);}$zb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$w=array();while($d=$k->fetch_assoc()){if($_&&$ma=="oracle"){unset($d["RNUM"]);}$w[]=$d;}if($_GET["page"]!="last"){$ga=(+$E&&$Q&&count($Q)<count($u)?($ma=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($l) x")):count($w));}if(!$w){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{$Rb=$j->backwardKeys($r,$Na);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Q&&$u?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upraviť'."</a>");$Sb=array();$ba=array();reset($u);$gc=1;foreach($w[0]as$c=>$a){if($C["Oid"]!="t"||$c!="oid"){$a=$_GET["columns"][key($u)];$e=$q[$u?($a?$a["col"]:current($u)):$c];$f=($e?$j->fieldName($e,$gc):"*");if($f!=""){$gc++;$Sb[$c]=$f;$H=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($V[0]==$H||$V[0]==$c||(!$V&&count($Q)<count($u)&&$Q[0]==$H)?'&desc%5B0%5D=1':'')).'">'.(!$u||$a?apply_sql_function($a["fun"],$f):h(current($u)))."</a>";}$ba[$c]=$a["fun"];next($u);}}$Wb=array();if($_GET["modify"]){foreach($w
as$d){foreach($d
as$c=>$a){$Wb[$c]=max($Wb[$c],min(40,strlen(utf8_decode($a))));}}}echo($Rb?"<th>".'Vzťahy':"")."</thead>\n";foreach($j->rowDescriptions($w,$Oa)as$y=>$d){$Vb=unique_array($w[$y],$G);$ia="";foreach($Vb
as$c=>$a){$ia.="&".(isset($a)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($a):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$Q&&$u?"":"<td>".checkbox("check[]",substr($ia,1),in_array(substr($ia,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Q)<count($u)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($r).$ia)."'>".'upraviť'."</a>"));foreach($d
as$c=>$a){if(isset($Sb[$c])){$e=$q[$c];if($a!=""&&(!isset($zb[$c])||$zb[$c]!="")){$zb[$c]=(is_mail($a)?$Sb[$c]:"");}$s="";$a=$j->editVal($a,$e);if(!isset($a)){$a="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$e["type"])&&$a!=""){$s=h(ME.'download='.urlencode($r).'&field='.urlencode($c).$ia);}if($a===""){$a="&nbsp;";}elseif($Ua!=""&&ereg('text|blob',$e["type"])&&is_utf8($a)){$a=shorten_utf8($a,max(0,+$Ua));}else{$a=h($a);}if(!$s){foreach((array)$Oa[$c]as$la){if(count($Oa[$c])==1||end($la["source"])==$c){$s="";foreach($la["source"]as$n=>$Zb){$s.=where_link($n,$la["target"][$n],$w[$y][$Zb]);}$s=h(($la["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($la["db"]),ME):ME).'select='.urlencode($la["table"]).$s);if(count($la["source"])==1){break;}}}}if($c=="COUNT(*)"){$s=h(ME."select=".urlencode($r));$n=0;foreach((array)$_GET["where"]as$o){if(!array_key_exists($o["col"],$Vb)){$s.=h(where_link($n++,$o["col"],$o["val"],$o["op"]));}}foreach($Vb
as$Z=>$o){$s.=h(where_link($n++,$Z,$o));}}}if(!$s){if(is_mail($a)){$s="mailto:$a";}if($fc=is_url($d[$c])){$s=($fc=="http"&&$Ya?$d[$c]:"$fc://www.adminer.org/redirect/?url=".urlencode($d[$c]));}}$z=h("val[$ia][".bracket_escape($c)."]");$i=$_POST["val"][$ia][bracket_escape($c)];$mc=h(isset($i)?$i:$d[$c]);$gd=strpos($a,"<i>...</i>");$lc=is_utf8($a)&&$w[$y][$c]==$d[$c]&&!$ba[$c];$kc=ereg('text|lob',$e["type"]);echo(($_GET["modify"]&&$lc)||isset($i)?"<td>".($kc?"<textarea name='$z' cols='30' rows='".(substr_count($d[$c],"\n")+1)."'>$mc</textarea>":"<input name='$z' value='$mc' size='$Wb[$c]'>"):"<td id='$z' ondblclick=\"".($lc?"selectDblClick(this, event".($gd?", 2":($kc?", 1":"")).")":"alert('".h('Pre zmenu tejto hodnoty použite odkaz upraviť.')."')").";\">".$j->selectVal($a,$s,$e));}}if($Rb){echo"<td>";}$j->backwardKeysPrint($Rb,$w[$y]);echo"</tr>\n";}echo"</table>\n";}if($w||$_){$Ub=true;if($_GET["page"]!="last"&&+$E&&count($Q)>=count($u)&&($ga>=$E||$_)){$ga=$C["Rows"];if(!isset($ga)||$p||($C["Engine"]=="InnoDB"&&$ga<max(1e4,2*($_+1)*$E))){ob_flush();flush();$ga=$g->result("SELECT COUNT(*) FROM ".table($r).($p?" WHERE ".implode(" AND ",$p):""));}else{$Ub=false;}}echo"<p class='pages'>";if(+$E&&$ga>$E){$Tb=floor(($ga-1)/$E);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($_+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$_).($_>5?" ...":"");for($n=max(1,$_-4);$n<min($Tb,$_+5);$n++){echo
pagination($n,$_);}echo($_+5<$Tb?" ...":"").($Ub?pagination($Tb,$_):' <a href="'.h(remove_from_uri()."&page=last").'">'.'posledný'."</a>");}echo" (".($Ub?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$ga).") ".checkbox("all",1,0,'celý výsledok')."\n";if($j->selectCommandPrint()){?>
<fieldset><legend>Upraviť</legend><div>
<input type="submit" value="Uložiť" title="Dvojkliknite na políčko, ktoré chcete zmeniť." class="jsonly">
<input type="submit" name="edit" value="Upraviť">
<input type="submit" name="clone" value="Klonovať">
<input type="submit" name="delete" value="Zmazať" onclick="return confirm('Naozaj? (' + (this.form['all'].checked ? <?php echo$ga,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$xa=$j->dumpOutput();echo($xa?html_select("output",$xa,$db["output"])." ":""),html_select("format",$j->dumpFormat(),$db["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($j->selectImportPrint()){print_fieldset("import",'Import',!$w);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$db["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$ea'>\n","</div></fieldset>\n";}$j->selectEmailPrint(array_filter($zb,'strlen'),$A);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($h,$z,$f)=$j->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$k=$g->query("SELECT $z, $f FROM ".table($h)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$z = $_GET[value] OR ":"")."$f LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($n=0;$n<10&&($d=$k->fetch_row());$n++){echo"<a href='".h(ME."edit=".urlencode($h)."&where".urlencode("[".bracket_escape(idf_unescape($z))."]")."=".urlencode($d[0]))."'>".h($d[1])."</a><br>\n";}if($n==10){echo"...\n";}}exit;}else{page_header('Server',"",false);if($j->homepage()){echo"<form action='' method='post'>\n","<p>".'Vyhľadať dáta v tabuľkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Vyhľadať'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabuľka'.'<td>'.'Riadky'."</thead>\n";foreach(table_status()as$h=>$d){$f=$j->tableName($d);if(isset($d["Engine"])&&$f!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$h,in_array($h,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($h)."'>$f</a>";$a=number_format($d["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($h)."'>".($d["Engine"]=="InnoDB"&&$a?"~ $a":$a)."</a>";}}echo"</table>\n","</form>\n";}}page_footer();