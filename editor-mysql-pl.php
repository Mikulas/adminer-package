<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.4
*/error_reporting(6135);$vb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($vb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$V){$Kd=filter_input_array(constant("INPUT$V"),FILTER_UNSAFE_RAW);if($Kd){$$V=$Kd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.loading{cursor:progress;}.loading #loader{display:inline;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{display:none;position:fixed;top:2px;right:2px;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=(!window.getSelection||getSelection().isCollapsed);var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function ajaxAbort(){ajaxRequest.onreadystatechange=null;if(ajaxRequest.abort){ajaxRequest.abort();}}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.keyCode==27&&!event.shiftKey&&!event.ctrlKey&&!event.altKey&&!event.metaKey){ajaxAbort();document.body.className=document.body.className.replace(/ loading/g,'');onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var request=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}
return request;}
function ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var data=eval('('+request.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxRequest={};function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
ajaxAbort();onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(document.getElementById('loader').firstChild.src);};document.body.className+=' loading';ajaxRequest=ajax(url,function(request){var title=request.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=request.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',(request.status?request.responseText:'<p class="error">'+noResponse));document.body.className=document.body.className.replace(/ loading/g,'');var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}},data);return ajaxRequest;}
onpopstate=function(event){if((ajaxRequest.send||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxRequest.send=true;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)&&!event.ctrlKey){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?decodeURIComponent(match[1]):'')&&ns==(match2?decodeURIComponent(match2[1]):'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){if(event.ctrlKey){el.form.target='_blank';}else{return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}}
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
connection(){global$f;return$f;}function
adminer(){global$b;return$b;}function
idf_unescape($p){$bc=substr($p,-1);return
str_replace($bc.$bc,$bc,substr($p,1,-1));}function
escape_string($V){return
substr(q($V),1,-1);}function
remove_slashes($Mc,$vb=false){if(get_magic_quotes_gpc()){while(list($t,$V)=each($Mc)){foreach($V
as$s=>$U){unset($Mc[$t][$s]);if(is_array($U)){$Mc[$t][stripslashes($s)]=$U;$Mc[]=&$Mc[$t][stripslashes($s)];}else{$Mc[$t][stripslashes($s)]=($vb?$U:stripslashes($U));}}}}}function
bracket_escape($p,$qa=false){static$Ad=array(':'=>':1',']'=>':2','['=>':3');return
strtr($p,($qa?array_flip($Ad):$Ad));}function
h($O){return
htmlspecialchars(str_replace("\0","",$O),ENT_QUOTES);}function
nbsp($O){return(trim($O)!=""?h($O):"&nbsp;");}function
nl_br($O){return
str_replace("\n","<br>",$O);}function
checkbox($A,$W,$za,$Zb="",$wc="",$Wb=false){static$o=0;$o++;$I="<input type='checkbox' name='$A' value='".h($W)."'".($za?" checked":"").($wc?' onclick="'.h($wc).'"':'').($Wb?" class='jsonly'":"")." id='checkbox-$o'>";return($Zb!=""?"<label for='checkbox-$o'>$I".h($Zb)."</label>":$I);}function
optionlist($_c,$ad=null,$Pd=false){$I="";foreach($_c
as$s=>$U){$Ac=array($s=>$U);if(is_array($U)){$I.='<optgroup label="'.h($s).'">';$Ac=$U;}foreach($Ac
as$t=>$V){$I.='<option'.($Pd||is_string($t)?' value="'.h($t).'"':'').(($Pd||is_string($t)?(string)$t:$V)===$ad?' selected':'').'>'.h($V);}if(is_array($U)){$I.='</optgroup>';}}return$I;}function
html_select($A,$_c,$W="",$vc=true){if($vc){return"<select name='".h($A)."'".(is_string($vc)?' onchange="'.h($vc).'"':"").">".optionlist($_c,$W)."</select>";}$I="";foreach($_c
as$t=>$V){$I.="<label><input type='radio' name='".h($A)."' value='".h($t)."'".($t==$W?" checked":"").">".h($V)."</label>";}return$I;}function
confirm($Ja="",$jd=false){return" onclick=\"".($jd?"eventStop(event); ":"")."return confirm('".'Czy jesteś pewien?'.($Ja?" (' + $Ja + ')":"")."');\"";}function
print_fieldset($o,$dc,$Sd=false,$wc=""){echo"<fieldset><legend><a href='#fieldset-$o' onclick=\"".h($wc)."return !toggle('fieldset-$o');\">$dc</a></legend><div id='fieldset-$o'".($Sd?"":" class='hidden'").">\n";}function
bold($va){return($va?" class='active'":"");}function
odd($I=' class="odd"'){static$n=0;if(!$I){$n=-1;}return($n++%
2?$I:'');}function
js_escape($O){return
addcslashes($O,"\r\n'\\/");}function
json_row($t,$V=null){static$wb=true;if($wb){echo"{";}if($t!=""){echo($wb?"":",")."\n\t\"".addcslashes($t,"\r\n\"\\").'": '.(isset($V)?'"'.addcslashes($V,"\r\n\"\\").'"':'undefined');$wb=false;}else{echo"\n}\n";$wb=true;}}function
ini_bool($Tb){$V=ini_get($Tb);return(eregi('^(on|true|yes)$',$V)||(int)$V);}function
sid(){static$I;if(!isset($I)){$I=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$I;}function
q($O){global$f;return$f->quote($O);}function
get_vals($G,$d=0){global$f;$I=array();$H=$f->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[]=$J[$d];}}return$I;}function
get_key_vals($G,$Ia=null){global$f;if(!is_object($Ia)){$Ia=$f;}$I=array();$H=$Ia->query($G);if(is_object($H)){while($J=$H->fetch_row()){$I[$J[0]]=$J[1];}}return$I;}function
get_rows($G,$Ia=null,$h="<p class='error'>"){global$f;$Ha=(is_object($Ia)?$Ia:$f);$I=array();$H=$Ha->query($G);if(is_object($H)){while($J=$H->fetch_assoc()){$I[]=$J;}}elseif(!$H&&!is_object($Ia)&&$h&&defined("PAGE_HEADER")){echo$h.error()."\n";}return$I;}function
unique_array($J,$r){foreach($r
as$q){if(ereg("PRIMARY|UNIQUE",$q["type"])){$I=array();foreach($q["columns"]as$t){if(!isset($J[$t])){continue
2;}$I[$t]=$J[$t];}return$I;}}$I=array();foreach($J
as$t=>$V){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$t)){$I[$t]=$V;}}return$I;}function
where($X){global$Xb;$I=array();foreach((array)$X["where"]as$t=>$V){$I[]=idf_escape(bracket_escape($t,1)).(($Xb=="sql"&&ereg('\\.',$V))||$Xb=="mssql"?" LIKE ".exact_value(addcslashes($V,"%_\\")):" = ".exact_value($V));}foreach((array)$X["null"]as$t){$I[]=idf_escape($t)." IS NULL";}return
implode(" AND ",$I);}function
where_check($V){parse_str($V,$ya);remove_slashes(array(&$ya));return
where($ya);}function
where_link($n,$d,$W,$yc="="){return"&where%5B$n%5D%5Bcol%5D=".urlencode($d)."&where%5B$n%5D%5Bop%5D=".urlencode((isset($W)?$yc:"IS NULL"))."&where%5B$n%5D%5Bval%5D=".urlencode($W);}function
cookie($A,$W){global$aa;$Ec=array($A,(ereg("\n",$W)?"":$W),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ec[]=true;}return
call_user_func_array('setcookie',$Ec);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($t){return$_SESSION[$t][DRIVER][SERVER][$_GET["username"]];}function
set_session($t,$V){$_SESSION[$t][DRIVER][SERVER][$_GET["username"]]=$V;}function
auth_url($Xa,$M,$T){global$Ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Ya))."|username|".session_name()),$x);return"$x[1]?".(sid()?SID."&":"").($Xa!="server"||$M!=""?urlencode($Xa)."=".urlencode($M)."&":"")."username=".urlencode($T).($x[2]?"&$x[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($w,$z=null){if(isset($z)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($w)?$w:$_SERVER["REQUEST_URI"]))][]=$z;}if(isset($w)){if($w==""){$w=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $w");exit;}}function
query_redirect($G,$w,$z,$Rc=true,$ob=true,$rb=false){global$f,$h,$b;if($ob){$rb=!$f->query($G);}$gd="";if($G){$gd=$b->messageQuery("$G;");}if($rb){$h=error().$gd;return
false;}if($Rc){redirect($w,$z.$gd);}return
true;}function
queries($G=null){global$f;static$Pc=array();if(!isset($G)){return
implode(";\n",$Pc);}$Pc[]=(ereg(';$',$G)?"DELIMITER ;;\n$G;\nDELIMITER ":$G);return$f->query($G);}function
apply_queries($G,$sd,$kb='table'){foreach($sd
as$Q){if(!queries("$G ".$kb($Q))){return
false;}}return
true;}function
queries_redirect($w,$z,$Rc){return
query_redirect(queries(),$w,$z,$Rc,false,!$Rc);}function
remove_from_uri($Dc=""){return
substr(preg_replace("~(?<=[?&])($Dc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($D,$Na){return" ".($D==$Na?$D+1:'<a href="'.h(remove_from_uri("page").($D?"&page=$D":"")).'">'.($D+1)."</a>");}function
get_file($t,$Ra=false){$k=$_FILES[$t];if(!$k||$k["error"]){return$k["error"];}$I=file_get_contents($Ra&&ereg('\\.gz$',$k["name"])?"compress.zlib://$k[tmp_name]":($Ra&&ereg('\\.bz2$',$k["name"])?"compress.bzip2://$k[tmp_name]":$k["tmp_name"]));if($Ra){$hd=substr($I,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$hd,$Sc)){$I=iconv("utf-16","utf-8",$I);}elseif($hd=="\xEF\xBB\xBF"){$I=substr($I,3);}}return$I;}function
upload_error($h){$kc=($h==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($h?'Wgranie pliku było niemożliwe.'.($kc?" ".sprintf('Maksymalna wielkość pliku to %sB.',$kc):""):'Plik nie istnieje.');}function
repeat_pattern($F,$ec){return
str_repeat("$F{0,65535}",$ec/65535)."$F{0,".($ec
%
65535)."}";}function
is_utf8($V){return(preg_match('~~u',$V)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$V));}function
shorten_utf8($O,$ec=80,$od=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$ec).")($)?)u",$O,$x)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$ec).")($)?)",$O,$x);}return
h($x[1]).$od.(isset($x[2])?"":"<i>...</i>");}function
friendly_url($V){return
preg_replace('~[^a-z0-9_]~i','-',$V);}function
hidden_fields($Mc,$Rb=array()){while(list($t,$V)=each($Mc)){if(is_array($V)){foreach($V
as$s=>$U){$Mc[$t."[$s]"]=$U;}}elseif(!in_array($t,$Rb)){echo'<input type="hidden" name="'.h($t).'" value="'.h($V).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($Q){global$b;$I=array();foreach($b->foreignKeys($Q)as$Ab){foreach($Ab["source"]as$V){$I[$V][]=$Ab;}}return$I;}function
enum_input($Dd,$c,$i,$W,$gb=null){global$b;preg_match_all("~'((?:[^']|'')*)'~",$i["length"],$y);$I=(isset($gb)?"<label><input type='$Dd'$c value='$gb'".((is_array($W)?in_array($gb,$W):$W===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($y[1]as$n=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?$W==$n+1:(is_array($W)?in_array($n+1,$W):$W===$V));$I.=" <label><input type='$Dd'$c value='".($n+1)."'".($za?' checked':'').'>'.h($b->editVal($V,$i)).'</label>';}return$I;}function
input($i,$W,$l){global$Fd,$b,$Xb;$A=h(bracket_escape($i["field"]));echo"<td class='function'>";$Vc=($Xb=="mssql"&&$i["auto_increment"]);if($Vc&&!$_POST["save"]){$l=null;}$Hb=(isset($_GET["select"])||$Vc?array("orig"=>'bez zmian'):array())+$b->editFunctions($i);$c=" name='fields[$A]'";if($i["type"]=="enum"){echo
nbsp($Hb[""])."<td>".$b->editInput($_GET["edit"],$i,$c,$W);}else{$wb=0;foreach($Hb
as$t=>$V){if($t===""||!$V){break;}$wb++;}$vc=($wb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($i["field"])))."]']; if ($wb > f.selectedIndex) f.selectedIndex = $wb;\"":"");$c.=$vc;echo(count($Hb)>1?html_select("function[$A]",$Hb,!isset($l)||in_array($l,$Hb)||isset($Hb[$l])?$l:"","functionChange(this);"):nbsp(reset($Hb))).'<td>';$Vb=$b->editInput($_GET["edit"],$i,$c,$W);if($Vb!=""){echo$Vb;}elseif($i["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$i["length"],$y);foreach($y[1]as$n=>$V){$V=stripcslashes(str_replace("''","'",$V));$za=(is_int($W)?($W>>$n)&1:in_array($V,explode(",",$W),true));echo" <label><input type='checkbox' name='fields[$A][$n]' value='".(1<<$n)."'".($za?' checked':'')."$vc>".h($b->editVal($V,$i)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$i["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$A'$vc>";}elseif(ereg('text|lob',$i["type"])){echo"<textarea ".($Xb!="sqlite"||ereg("\n",$W)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$c>".h($W).'</textarea>';}else{$lc=(!ereg('int',$i["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$i["length"],$x)?((ereg("binary",$i["type"])?2:1)*$x[1]+($x[3]?1:0)+($x[2]&&!$i["unsigned"]?1:0)):($Fd[$i["type"]]?$Fd[$i["type"]]+($i["unsigned"]?0:1):0));echo"<input value='".h($W)."'".($lc?" maxlength='$lc'":"").(ereg('char|binary',$i["type"])&&$lc>20?" size='40'":"")."$c>";}}}function
process_input($i){global$b;$p=bracket_escape($i["field"]);$l=$_POST["function"][$p];$W=$_POST["fields"][$p];if($i["type"]=="enum"){if($W==-1){return
false;}if($W==""){return"NULL";}return+$W;}if($i["auto_increment"]&&$W==""){return
null;}if($l=="orig"){return($i["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($i["field"]):false);}if($l=="NULL"){return"NULL";}if($i["type"]=="set"){return
array_sum((array)$W);}if(ereg('blob|bytea|raw|file',$i["type"])&&ini_bool("file_uploads")){$k=get_file("fields-$p");if(!is_string($k)){return
false;}return
q($k);}return$b->processInput($i,$W,$l);}function
search_tables(){global$b,$f;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Db=false;foreach(table_status()as$Q=>$R){$A=$b->tableName($R);if(isset($R["Engine"])&&$A!=""&&(!$_POST["tables"]||in_array($Q,$_POST["tables"]))){$H=$f->query("SELECT".limit("1 FROM ".table($Q)," WHERE ".implode(" AND ",$b->selectSearchProcess(fields($Q),array())),1));if($H->fetch_row()){if(!$Db){echo"<ul>\n";$Db=true;}echo"<li><a href='".h(ME."select=".urlencode($Q)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$A</a>\n";}}}echo($Db?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($Pb,$oc=false){global$b;$I=$b->dumpHeaders($Pb,$oc);$Cc=$_POST["output"];if($Cc!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Pb!=""?$Pb:(SERVER!=""?SERVER:"localhost")).".$I".($Cc!="file"&&!ereg('[^0-9a-z]',$Cc)?".$Cc":""));}session_write_close();return$I;}function
dump_csv($J){foreach($J
as$t=>$V){if(preg_match("~[\"\n,;\t]~",$V)||$V===""){$J[$t]='"'.str_replace('"','""',$V).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$J)."\r\n";}function
apply_sql_function($l,$d){return($l?($l=="unixepoch"?"DATETIME($d, '$l')":($l=="count distinct"?"COUNT(DISTINCT ":strtoupper("$l("))."$d)"):$d);}function
password_file(){$Va=ini_get("upload_tmp_dir");if(!$Va){if(function_exists('sys_get_temp_dir')){$Va=sys_get_temp_dir();}else{$tb=@tempnam("","");if(!$tb){return
false;}$Va=dirname($tb);unlink($tb);}}$tb="$Va/adminer.key";$I=@file_get_contents($tb);if($I){return$I;}$Fb=@fopen($tb,"w");if($Fb){$I=md5(uniqid(mt_rand(),true));fwrite($Fb,$I);fclose($Fb);}return$I;}function
is_mail($db){$ma='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$ma+(\\.$ma+)*@($Wa?\\.)+$Wa";return
preg_match("(^$F(,\\s*$F)*\$)i",$db);}function
is_url($O){$Wa='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Wa?\\.)+$Wa(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$O,$x)?strtolower($x[1]):"");}global$b,$f,$Ya,$bb,$ib,$h,$Hb,$Jb,$aa,$Ub,$Xb,$ba,$ac,$uc,$ld,$_d,$Cd,$Fd,$Md,$ca;if(!$_SERVER["REQUEST_URI"]){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];}if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!=""){$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";}$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Ec=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Ec[]=true;}call_user_func_array('session_set_cookie_params',$Ec);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$vb);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($Bd,$sc){$Ic=($sc==1?0:($sc
%
10>1&&$sc
%
10<5&&$sc/10
%
10!=1?1:2));return
sprintf($Bd[$Ic],$sc);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$b;$Ic=array_search("",$b->operators);if($Ic!==false){unset($b->operators[$Ic]);}}function
dsn($Za,$T,$E,$nb='auth_error'){set_exception_handler($nb);parent::__construct($Za,$T,$E);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($G,$Gd=false){$H=parent::query($G);if(!$H){$jb=$this->errorInfo();$this->error=$jb[2];return
false;}$this->store_result($H);return$H;}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result($H=null){if(!$H){$H=$this->_result;}if($H->columnCount()){$H->num_rows=$H->rowCount();return$H;}$this->affected_rows=$H->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($G,$i=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch();return$J[$i];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$J=(object)$this->getColumnMeta($this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=(in_array("blob",$J->flags)?63:0);return$J;}}}$Ya=array();$Ya=array("server"=>"MySQL")+$Ya;if(!defined("DRIVER")){$Jc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($M,$T,$E){mysqli_report(MYSQLI_REPORT_OFF);list($Ob,$Hc)=explode(":",$M,2);$I=@$this->real_connect(($M!=""?$Ob:ini_get("mysqli.default_host")),($M.$T!=""?$T:ini_get("mysqli.default_user")),($M.$T.$E!=""?$E:ini_get("mysqli.default_pw")),null,(is_numeric($Hc)?$Hc:ini_get("mysqli.default_port")),(!is_numeric($Hc)?$Hc:null));if($I){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$I;}function
result($G,$i=0){$H=$this->query($G);if(!$H){return
false;}$J=$H->fetch_array();return$J[$i];}function
quote($O){return"'".$this->escape_string($O)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($M,$T,$E){$this->_link=@mysql_connect(($M!=""?$M:ini_get("mysql.default_host")),("$M$T"!=""?$T:ini_get("mysql.default_user")),("$M$T$E"!=""?$E:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($O){return"'".mysql_real_escape_string($O,$this->_link)."'";}function
select_db($Oa){return
mysql_select_db($Oa,$this->_link);}function
query($G,$Gd=false){$H=@($Gd?mysql_unbuffered_query($G,$this->_link):mysql_query($G,$this->_link));if(!$H){$this->error=mysql_error($this->_link);return
false;}if($H===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($H);}function
multi_query($G){return$this->_result=$this->query($G);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($G,$i=0){$H=$this->query($G);if(!$H||!$H->num_rows){return
false;}return
mysql_result($H->_result,0,$i);}}class
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
query($G,$Gd=false){$this->setAttribute(1000,!$Gd);return
parent::query($G,$Gd);}}}function
idf_escape($p){return"`".str_replace("`","``",$p)."`";}function
table($p){return
idf_escape($p);}function
connect(){global$b;$f=new
Min_DB;$Ma=$b->credentials();if($f->connect($Ma[0],$Ma[1],$Ma[2])){$f->query("SET sql_quote_show_create = 1, autocommit = 1");return$f;}$I=$f->error;if(function_exists('iconv')&&!is_utf8($I)&&strlen($Xc=iconv("windows-1250","utf-8",$I))>strlen($I)){$I=$Xc;}return$I;}function
get_databases($xb=true){global$f;$I=&get_session("dbs");if(!isset($I)){if($xb){restart_session();ob_flush();flush();}$I=get_vals($f->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$I;}function
limit($G,$X,$u,$tc=0,$cd=" "){return" $G$X".(isset($u)?$cd."LIMIT $u".($tc?" OFFSET $tc":""):"");}function
limit1($G,$X){return
limit($G,$X,1);}function
db_collation($Qa,$Ca){global$f;$I=null;$Ka=$f->result("SHOW CREATE DATABASE ".idf_escape($Qa),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ka,$x)){$I=$x[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ka,$x)){$I=$Ca[$x[1]][-1];}return$I;}function
engines(){$I=array();foreach(get_rows("SHOW ENGINES")as$J){if(ereg("YES|DEFAULT",$J["Support"])){$I[]=$J["Engine"];}}return$I;}function
logged_user(){global$f;return$f->result("SELECT USER()");}function
tables_list(){global$f;return
get_key_vals("SHOW".($f->server_info>=5?" FULL":"")." TABLES");}function
count_tables($Pa){$I=array();foreach($Pa
as$Qa){$I[$Qa]=count(get_vals("SHOW TABLES IN ".idf_escape($Qa)));}return$I;}function
table_status($A=""){$I=array();foreach(get_rows("SHOW TABLE STATUS".($A!=""?" LIKE ".q(addcslashes($A,"%_")):""))as$J){if($J["Engine"]=="InnoDB"){$J["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$J["Comment"]);}if(!isset($J["Rows"])){$J["Comment"]="";}if($A!=""){return$J;}$I[$J["Name"]]=$J;}return$I;}function
is_view($R){return!isset($R["Rows"]);}function
fk_support($R){return
eregi("InnoDB|IBMDB2I",$R["Engine"]);}function
fields($Q){$I=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($Q))as$J){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$J["Type"],$x);$I[$J["Field"]]=array("field"=>$J["Field"],"full_type"=>$J["Type"],"type"=>$x[1],"length"=>$x[2],"unsigned"=>ltrim($x[3].$x[4]),"default"=>($J["Default"]!=""||ereg("char",$x[1])?$J["Default"]:null),"null"=>($J["Null"]=="YES"),"auto_increment"=>($J["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$J["Extra"],$x)?$x[1]:""),"collation"=>$J["Collation"],"privileges"=>array_flip(explode(",",$J["Privileges"])),"comment"=>$J["Comment"],"primary"=>($J["Key"]=="PRI"),);}return$I;}function
indexes($Q,$Ia=null){$I=array();foreach(get_rows("SHOW INDEX FROM ".table($Q),$Ia)as$J){$I[$J["Key_name"]]["type"]=($J["Key_name"]=="PRIMARY"?"PRIMARY":($J["Index_type"]=="FULLTEXT"?"FULLTEXT":($J["Non_unique"]?"INDEX":"UNIQUE")));$I[$J["Key_name"]]["columns"][]=$J["Column_name"];$I[$J["Key_name"]]["lengths"][]=$J["Sub_part"];}return$I;}function
foreign_keys($Q){global$f,$uc;static$F='`(?:[^`]|``)+`';$I=array();$La=$f->result("SHOW CREATE TABLE ".table($Q),1);if($La){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($uc))?(?: ON UPDATE ($uc))?~",$La,$y,PREG_SET_ORDER);foreach($y
as$x){preg_match_all("~$F~",$x[2],$fd);preg_match_all("~$F~",$x[5],$S);$I[idf_unescape($x[1])]=array("db"=>idf_unescape($x[4]!=""?$x[3]:$x[4]),"table"=>idf_unescape($x[4]!=""?$x[4]:$x[3]),"source"=>array_map('idf_unescape',$fd[0]),"target"=>array_map('idf_unescape',$S[0]),"on_delete"=>($x[6]?$x[6]:"RESTRICT"),"on_update"=>($x[7]?$x[7]:"RESTRICT"),);}}return$I;}function
view($A){global$f;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$f->result("SHOW CREATE VIEW ".table($A),1)));}function
collations(){$I=array();foreach(get_rows("SHOW COLLATION")as$J){if($J["Default"]){$I[$J["Charset"]][-1]=$J["Collation"];}else{$I[$J["Charset"]][]=$J["Collation"];}}ksort($I);foreach($I
as$t=>$V){asort($I[$t]);}return$I;}function
information_schema($Qa){global$f;return($f->server_info>=5&&$Qa=="information_schema");}function
error(){global$f;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$f->error));}function
exact_value($V){return
q($V)." COLLATE utf8_bin";}function
create_database($Qa,$Ba){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($Qa).($Ba?" COLLATE ".q($Ba):""));}function
drop_databases($Pa){set_session("dbs",null);return
apply_queries("DROP DATABASE",$Pa,'idf_escape');}function
rename_database($A,$Ba){if(create_database($A,$Ba)){$Tc=array();foreach(tables_list()as$Q=>$Dd){$Tc[]=table($Q)." TO ".idf_escape($A).".".table($Q);}if(!$Tc||queries("RENAME TABLE ".implode(", ",$Tc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$pa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$q){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$q["columns"],true)){$pa="";break;}if($q["type"]=="PRIMARY"){$pa=" UNIQUE";}}}return" AUTO_INCREMENT$pa";}function
alter_table($Q,$A,$j,$yb,$Fa,$hb,$Ba,$oa,$Fc){$la=array();foreach($j
as$i){$la[]=($i[1]?($Q!=""?($i[0]!=""?"CHANGE ".idf_escape($i[0]):"ADD"):" ")." ".implode($i[1]).($Q!=""?" $i[2]":""):"DROP ".idf_escape($i[0]));}$la=array_merge($la,$yb);$id="COMMENT=".q($Fa).($hb?" ENGINE=".q($hb):"").($Ba?" COLLATE ".q($Ba):"").($oa!=""?" AUTO_INCREMENT=$oa":"").$Fc;if($Q==""){return
queries("CREATE TABLE ".table($A)." (\n".implode(",\n",$la)."\n) $id");}if($Q!=$A){$la[]="RENAME TO ".table($A);}$la[]=$id;return
queries("ALTER TABLE ".table($Q)."\n".implode(",\n",$la));}function
alter_indexes($Q,$la){foreach($la
as$t=>$V){$la[$t]=($V[2]=="DROP"?"\nDROP INDEX ".idf_escape($V[1]):"\nADD $V[0] ".($V[0]=="PRIMARY"?"KEY ":"").($V[1]!=""?idf_escape($V[1])." ":"").$V[2]);}return
queries("ALTER TABLE ".table($Q).implode(",",$la));}function
truncate_tables($sd){return
apply_queries("TRUNCATE TABLE",$sd);}function
drop_views($Rd){return
queries("DROP VIEW ".implode(", ",array_map('table',$Rd)));}function
drop_tables($sd){return
queries("DROP TABLE ".implode(", ",array_map('table',$sd)));}function
move_tables($sd,$Rd,$S){$Tc=array();foreach(array_merge($sd,$Rd)as$Q){$Tc[]=table($Q)." TO ".idf_escape($S).".".table($Q);}return
queries("RENAME TABLE ".implode(", ",$Tc));}function
copy_tables($sd,$Rd,$S){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($sd
as$Q){$A=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));if(!queries("DROP TABLE IF EXISTS $A")||!queries("CREATE TABLE $A LIKE ".table($Q))||!queries("INSERT INTO $A SELECT * FROM ".table($Q))){return
false;}}foreach($Rd
as$Q){$A=($S==DB?table("copy_$Q"):idf_escape($S).".".table($Q));$Qd=view($Q);if(!queries("DROP VIEW IF EXISTS $A")||!queries("CREATE VIEW $A AS $Qd[select]")){return
false;}}return
true;}function
trigger($A){if($A==""){return
array();}$K=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($A));return
reset($K);}function
triggers($Q){$I=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")))as$J){$I[$J["Trigger"]]=array($J["Timing"],$J["Event"]);}return$I;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($A,$Dd){global$f,$ib,$Ub,$Fd;$ka=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ed="((".implode("|",array_merge(array_keys($Fd),$ka)).")(?:\\s*\\(((?:[^'\")]*|$ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($Dd=="FUNCTION"?"":$Ub).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ed";$Ka=$f->result("SHOW CREATE $Dd ".idf_escape($A),2);preg_match("~\\(((?:$F\\s*,?)*)\\)".($Dd=="FUNCTION"?"\\s*RETURNS\\s+$Ed":"")."\\s*(.*)~is",$Ka,$x);$j=array();preg_match_all("~$F\\s*,?~is",$x[1],$y,PREG_SET_ORDER);foreach($y
as$Dc){$A=str_replace("``","`",$Dc[2]).$Dc[3];$j[]=array("field"=>$A,"type"=>strtolower($Dc[5]),"length"=>preg_replace_callback("~$ib~s",'normalize_enum',$Dc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Dc[8] $Dc[7]"))),"full_type"=>$Dc[4],"inout"=>strtoupper($Dc[1]),"collation"=>strtolower($Dc[9]),);}if($Dd!="FUNCTION"){return
array("fields"=>$j,"definition"=>$x[11]);}return
array("fields"=>$j,"returns"=>array("type"=>$x[12],"length"=>$x[13],"unsigned"=>$x[15],"collation"=>$x[16]),"definition"=>$x[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($Q,$N){return
queries("INSERT INTO ".table($Q)." (".implode(", ",array_keys($N)).")\nVALUES (".implode(", ",$N).")");}function
insert_update($Q,$N,$Kc){foreach($N
as$t=>$V){$N[$t]="$t = $V";}$Nd=implode(", ",$N);return
queries("INSERT INTO ".table($Q)." SET $Nd ON DUPLICATE KEY UPDATE $Nd");}function
last_id(){global$f;return$f->result("SELECT LAST_INSERT_ID()");}function
explain($f,$G){return$f->query("EXPLAIN $G");}function
found_rows($R,$X){return($X||$R["Engine"]!="InnoDB"?null:$R["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Yc){return
true;}function
create_sql($Q,$oa){global$f;$I=$f->result("SHOW CREATE TABLE ".table($Q),1);if(!$oa){$I=preg_replace('~ AUTO_INCREMENT=\\d+~','',$I);}return$I;}function
truncate_sql($Q){return"TRUNCATE ".table($Q);}function
use_sql($Oa){return"USE ".idf_escape($Oa);}function
trigger_sql($Q,$md){$I="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($Q,"%_")),null,"-- ")as$J){$I.="\n".($md=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($J["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($J["Trigger"])." $J[Timing] $J[Event] ON ".table($J["Table"])." FOR EACH ROW\n$J[Statement];;\n";}return$I;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($sb){global$f;return!ereg("scheme|sequence|type".($f->server_info<5.1?"|event|partitioning".($f->server_info<5?"|view|routine|trigger":""):""),$sb);}$Xb="sql";$Fd=array();$ld=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),)as$t=>$V){$Fd+=$V;$ld[$t]=array_keys($V);}$Md=array("unsigned","zerofill","unsigned zerofill");$zc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Hb=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Jb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ca="3.3.4";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".'Edytor'."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$f;$Pa=$this->databases(false);return(!$Pa?$f->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$Pa[(information_schema($Pa[0])?1:0)]);}function
databases($xb=true){return
get_databases($xb);}function
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
login($gc,$E){global$f;$f->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($qd){return
h($qd["Comment"]!=""?$qd["Comment"]:$qd["Name"]);}function
fieldName($i,$B=0){return
h($i["comment"]!=""?$i["comment"]:$i["field"]);}function
selectLinks($qd,$N=""){$a=$qd["Name"];if(isset($N)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($a).$N).'">'.'Nowy rekord'."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a>\n";}function
foreignKeys($Q){return
foreign_keys($Q);}function
backwardKeys($Q,$pd){$I=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($Q)."
ORDER BY ORDINAL_POSITION",null,"")as$J){$I[$J["TABLE_NAME"]]["keys"][$J["CONSTRAINT_NAME"]][$J["COLUMN_NAME"]]=$J["REFERENCED_COLUMN_NAME"];}foreach($I
as$t=>$V){$A=$this->tableName(table_status($t));if($A!=""){$Zc=preg_quote($pd);$cd="(:|\\s*-)?\\s+";$I[$t]["name"]=(preg_match("(^$Zc$cd(.+)|^(.+?)$cd$Zc\$)iu",$A,$x)?$x[2].$x[3]:$A);}else{unset($I[$t]);}}return$I;}function
backwardKeysPrint($sa,$J){foreach($sa
as$Q=>$ra){foreach($ra["keys"]as$Da){$v=ME.'select='.urlencode($Q);$n=0;foreach($Da
as$d=>$V){$v.=where_link($n++,$d,$J[$V]);}echo"<a href='".h($v)."'>".h($ra["name"])."</a>";$v=ME.'edit='.urlencode($Q);foreach($Da
as$d=>$V){$v.="&set".urlencode("[".bracket_escape($d)."]")."=".urlencode($J[$V]);}echo"<a href='".h($v)."' title='".'Nowy rekord'."'>+</a> ";}}}function
selectQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->\n";}function
rowDescription($Q){foreach(fields($Q)as$i){if(ereg("varchar|character varying",$i["type"])){return
idf_escape($i["field"]);}}return"";}function
rowDescriptions($K,$_b){$I=$K;foreach($K[0]as$t=>$V){if(list($Q,$o,$A)=$this->_foreignColumn($_b,$t)){$Qb=array();foreach($K
as$J){$Qb[$J[$t]]=exact_value($J[$t]);}$Ua=$this->_values[$Q];if(!$Ua){$Ua=get_key_vals("SELECT $o, $A FROM ".table($Q)." WHERE $o IN (".implode(", ",$Qb).")");}foreach($K
as$_=>$J){if(isset($J[$t])){$I[$_][$t]=(string)$Ua[$J[$t]];}}}}return$I;}function
selectVal($V,$v,$i){$I=($V=="<i>NULL</i>"?"&nbsp;":$V);if(ereg('blob|bytea',$i["type"])&&!is_utf8($V)){$I=lang(array('%d bajt','%d bajty','%d bajtów'),strlen($V));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$V)){$I="<img src='$v' alt='$I'>";}}if(like_bool($i)&&$I!="&nbsp;"){$I=($V?'yes':'no');}if($v){$I="<a href='$v'>$I</a>";}if(!$v&&!like_bool($i)&&ereg('int|float|double|decimal',$i["type"])){$I="<div class='number'>$I</div>";}elseif(ereg('date',$i["type"])){$I="<div class='datetime'>$I</div>";}return$I;}function
editVal($V,$i){if(ereg('date|timestamp',$i["type"])&&isset($V)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~','$6.$4.$1',$V);}return(ereg("binary",$i["type"])?reset(unpack("H*",$V)):$V);}function
selectColumnsPrint($L,$e){}function
selectSearchPrint($X,$e,$r){$X=(array)$_GET["where"];echo'<fieldset><legend>'.'Szukaj'."</legend><div>\n";$Yb=array();foreach($X
as$t=>$V){$Yb[$V["col"]]=$t;}$n=0;$j=fields($_GET["select"]);foreach($e
as$A=>$Ta){$i=$j[$A];if(ereg("enum",$i["type"])||like_bool($i)){$t=$Yb[$A];$n--;echo"<div>".h($Ta)."<input type='hidden' name='where[$n][col]' value='".h($A)."'>:",(like_bool($i)?" <select name='where[$n][val]'>".optionlist(array(""=>"",'no','yes'),$X[$t]["val"],true)."</select>":enum_input("checkbox"," name='where[$n][val][]'",$i,(array)$X[$t]["val"],($i["null"]?0:null))),"</div>\n";unset($e[$A]);}elseif(is_array($_c=$this->_foreignKeyOptions($_GET["select"],$A))){if($j[$A]["null"]){$_c[0]='('.'puste'.')';}$t=$Yb[$A];$n--;echo"<div>".h($Ta)."<input type='hidden' name='where[$n][col]' value='".h($A)."'><input type='hidden' name='where[$n][op]' value='='>: <select name='where[$n][val]'>".optionlist($_c,$X[$t]["val"],true)."</select></div>\n";unset($e[$A]);}}$n=0;foreach($X
as$V){if(($V["col"]==""||$e[$V["col"]])&&"$V[col]$V[val]"!=""){echo"<div><select name='where[$n][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($e,$V["col"],true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators,$V["op"]),"<input name='where[$n][val]' value='".h($V["val"])."'></div>\n";$n++;}}echo"<div><select name='where[$n][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".'gdziekolwiek'.")".optionlist($e,null,true)."</select>",html_select("where[$n][op]",array(-1=>"")+$this->operators),"<input name='where[$n][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($B,$e,$r){$Bc=array();foreach($r
as$t=>$q){$B=array();foreach($q["columns"]as$V){$B[]=$e[$V];}if(count(array_filter($B,'strlen'))>1&&$t!="PRIMARY"){$Bc[$t]=implode(", ",$B);}}if($Bc){echo'<fieldset><legend>'.'Sortuj'."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Bc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($u){echo"<fieldset><legend>".'Limit'."</legend><div>";echo
html_select("limit",array("","30","100"),$u),"</div></fieldset>\n";}function
selectLengthPrint($ud){}function
selectActionPrint(){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($eb,$e){if($eb){print_fieldset("email",'E-mail',$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".'Nadawca'.": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",'Temat'.": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$e,$_POST["email_addition"])."<input type='submit' name='email_append' value='".'Dodaj'."'>\n";echo"<p>".'Załączniki'.": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($eb)==1?'<input type="hidden" name="email_field" value="'.h(key($eb)).'">':html_select("email_field",$eb)),"<input type='submit' name='email' value='".'Wyślij'."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($e,$r){return
array(array(),array());}function
selectSearchProcess($j,$r){$I=array();foreach((array)$_GET["where"]as$t=>$X){$Aa=$X["col"];$xc=$X["op"];$V=$X["val"];if(($t<0?"":$Aa).$V!=""){$Ga=array();foreach(($Aa!=""?array($Aa=>$j[$Aa]):$j)as$A=>$i){if($Aa!=""||is_numeric($V)||!ereg('int|float|double|decimal',$i["type"])){$A=idf_escape($A);if($Aa!=""&&$i["type"]=="enum"){$Ga[]=(in_array(0,$V)?"$A IS NULL OR ":"")."$A IN (".implode(", ",array_map('intval',$V)).")";}else{$vd=ereg('char|text|enum|set',$i["type"]);$W=$this->processInput($i,(!$xc&&$vd&&ereg('^[^%]+$',$V)?"%$V%":$V));$Ga[]=$A.($W=="NULL"?" IS".($xc==">="?" NOT":"")." $W":(in_array($xc,$this->operators)||$xc=="="?" $xc $W":($vd?" LIKE $W":" IN (".str_replace(",","', '",$W).")")));if($t<0&&$V=="0"){$Ga[]="$A IS NULL";}}}}$I[]=($Ga?"(".implode(" OR ",$Ga).")":"0");}}return$I;}function
selectOrderProcess($j,$r){$Sb=$_GET["index_order"];if($Sb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Sb!=""?array($r[$Sb]):$r)as$q){if($Sb!=""||$q["type"]=="INDEX"){$Ta=false;foreach($q["columns"]as$V){if(ereg('date|timestamp',$j[$V]["type"])){$Ta=true;break;}}$I=array();foreach($q["columns"]as$V){$I[]=idf_escape($V).($Ta?" DESC":"");}return$I;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($X,$_b){if($_POST["email_append"]){return
true;}if($_POST["email"]){$bd=0;if($_POST["all"]||$_POST["check"]){$i=idf_escape($_POST["email_field"]);$nd=$_POST["email_subject"];$z=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$nd.$z",$y);$K=get_rows("SELECT DISTINCT $i".($y[1]?", ".implode(", ",array_map('idf_escape',array_unique($y[1]))):"")." FROM ".table($_GET["select"])." WHERE $i IS NOT NULL AND $i != ''".($X?" AND ".implode(" AND ",$X):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$j=fields($_GET["select"]);foreach($this->rowDescriptions($K,$_b)as$J){$Uc=array('{\\'=>'{');foreach($y[1]as$V){$Uc['{$'."$V}"]=$this->editVal($J[$V],$j[$V]);}$db=$J[$_POST["email_field"]];if(is_mail($db)&&send_mail($db,strtr($nd,$Uc),strtr($z,$Uc),$_POST["email_from"],$_FILES["email_files"])){$bd++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),$bd));}return
false;}function
messageQuery($G){return"<!--\n".str_replace("--","--><!-- ",$G)."\n-->";}function
editFunctions($i){$I=array();if($i["null"]&&ereg('blob',$i["type"])){$I["NULL"]='puste';}$I[""]=($i["null"]||$i["auto_increment"]||like_bool($i)?"":"*");if(ereg('date|time',$i["type"])){$I["now"]='teraz';}if(eregi('_(md5|sha1)$',$i["field"],$x)){$I[]=strtolower($x[1]);}return$I;}function
editInput($Q,$i,$c,$W){if($i["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$c value='-1' checked><i>".'bez zmian'."</i></label> ":"").enum_input("radio",$c,$i,($W||isset($_GET["select"])?$W:0),($i["null"]?"":null));}$_c=$this->_foreignKeyOptions($Q,$i["field"],$W);if(isset($_c)){return(is_array($_c)?"<select$c>".optionlist($_c,$W,true)."</select>":"<input value='".h($W)."'$c class='hidden'><input value='".h($_c)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($Q)."&field=".urlencode($i["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($i)){return'<input type="checkbox" value="'.h($W?$W:1).'"'.($W?' checked':'')."$c>";}$Nb="";if(ereg('time',$i["type"])){$Nb='HH:MM:SS';}if(ereg('date|timestamp',$i["type"])){$Nb='d.m.[rrrr]'.($Nb?" [$Nb]":"");}if($Nb){return"<input value='".h($W)."'$c> ($Nb)";}if(eregi('_(md5|sha1)$',$i["field"])){return"<input type='password' value='".h($W)."'$c>";}return'';}function
processInput($i,$W,$l=""){if($l=="now"){return"$l()";}$I=$W;if(ereg('date|timestamp',$i["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote('$6.$4.$1'))).'(.*))',$W,$x)){$I=($x["p1"]!=""?$x["p1"]:($x["p2"]!=""?($x["p2"]<70?20:19).$x["p2"]:gmdate("Y")))."-$x[p3]$x[p4]-$x[p5]$x[p6]".end($x);}$I=($i["type"]=="bit"&&ereg('^[0-9]+$',$W)?$I:q($I));if($W==""&&($i["null"]||!ereg('char|text',$i["type"]))&&!like_bool($i)){$I="NULL";}elseif(ereg('^(md5|sha1)$',$l)){$I="$l($I)";}if(ereg("binary",$i["type"])){$I="unhex($I)";}return$I;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($Q,$md,$G){global$f;$H=$f->query($G,1);if($H){while($J=$H->fetch_assoc()){if($md=="table"){dump_csv(array_keys($J));$md="INSERT";}dump_csv($J);}}}function
dumpHeaders($Pb,$oc=false){$pb="csv";header("Content-Type: text/csv; charset=utf-8");return$pb;}function
homepage(){return
true;}function
navigation($nc){global$ca,$_d;echo'<h1>
',$this->name(),' <span class="version">',$ca,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ca,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($nc=="auth"){$wb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$T=>$E){if(isset($E)){if($wb){echo"<p onclick='eventStop(event);'>\n";$wb=false;}echo"<a href='".h(auth_url("server","",$T))."'>".($T!=""?h($T):"<i>".'puste'."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="Wyloguj" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$_d,'">
</p>
</form>
';if($nc!="db"&&$nc!="ns"){$R=table_status();if(!$R){echo"<p class='message'>".'Brak tabel.'."\n";}else{$this->tablesPrint($R);}}}}function
tablesPrint($sd){echo"<p id='tables'>\n";foreach($sd
as$J){$A=$this->tableName($J);if(isset($J["Engine"])&&$A!=""){echo"<a href='".h(ME).'select='.urlencode($J["Name"])."'".bold($_GET["select"]==$J["Name"])." title='".'Pokaż dane'."'>$A</a><br>\n";}}}function
_foreignColumn($_b,$d){foreach((array)$_b[$d]as$zb){if(count($zb["source"])==1){$A=$this->rowDescription($zb["table"]);if($A!=""){$o=idf_escape($zb["target"][0]);return
array($zb["table"],$o,$A);}}}}function
_foreignKeyOptions($Q,$d,$W=null){global$f;if(list($S,$o,$A)=$this->_foreignColumn(column_foreign_keys($Q),$d)){$I=&$this->_values[$S];if(!isset($I)){$R=table_status($S);$I=($R["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $o, $A FROM ".table($S)." ORDER BY 2"));}if(!$I&&isset($W)){return$f->result("SELECT $A FROM ".table($S)." WHERE $o = ".q($W));}return$I;}}}$b=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($wd,$h="",$xa=array(),$xd=""){global$ba,$b,$f,$Ya;header("Content-Type: text/html; charset=utf-8");if($b->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$yd=$wd.($xd!=""?": ".h($xd):"");$zd=strip_tags($yd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$b->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($zd));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$zd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.4";?>">
<script type="text/javascript">
var areYouSure = 'Wysłać dane ponownie?';
var noResponse = 'No response from server.';
</script>
<script type="text/javascript" src="<?php echo
h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.4",'"></script>
';if($b->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.4",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($f)?substr($f->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="loader"><img src="',h(preg_replace("~\\?.*~","",ME))."?file=loader.gif&amp;version=3.3.4",'" alt=""></div>
<div id="content">
';}if(isset($xa)){$v=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($v?$v:".").'">'.$Ya[DRIVER].'</a> &raquo; ';$v=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$M=(SERVER!=""?h(SERVER):'Serwer');if($xa===false){echo"$M\n";}else{echo"<a href='".($v?h($v):".")."' accesskey='1' title='Alt+Shift+1'>$M</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($xa))){echo'<a href="'.h($v."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($xa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($xa
as$t=>$V){$Ta=(is_array($V)?$V[1]:$V);if($Ta!=""){echo'<a href="'.h(ME."$t=").urlencode(is_array($V)?$V[0]:$V).'">'.h($Ta).'</a> &raquo; ';}}}echo"$wd\n";}}echo"<h2>$yd</h2>\n";restart_session();$Od=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$mc=$_SESSION["messages"][$Od];if($mc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$mc)."</div>\n";unset($_SESSION["messages"][$Od]);}$Pa=&get_session("dbs");if(DB!=""&&$Pa&&!in_array(DB,$Pa,true)){$Pa=null;}if($h){echo"<div class='error'>$h</div>\n";}define("PAGE_HEADER",1);}function
page_footer($nc=""){global$b;if(!is_ajax()){echo'</div>

<div id="menu">
';$b->navigation($nc);echo'</div>
';}}function
int32($_){while($_>=2147483648){$_-=4294967296;}while($_<=-2147483649){$_+=4294967296;}return(int)$_;}function
long2str($U,$Td){$Xc='';foreach($U
as$V){$Xc.=pack('V',$V);}if($Td){return
substr($Xc,0,end($U));}return$Xc;}function
str2long($Xc,$Td){$U=array_values(unpack('V*',str_pad($Xc,4*ceil(strlen($Xc)/4),"\0")));if($Td){$U[]=strlen($Xc);}return$U;}function
xxtea_mx($Z,$Y,$P,$s){return
int32((($Z>>5&0x7FFFFFF)^$Y<<2)+(($Y>>3&0x1FFFFFFF)^$Z<<4))^int32(($P^$Y)+($s^$Z));}function
encrypt_string($kd,$t){if($kd==""){return"";}$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($kd,true);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$Oc=floor(6+52/($_+1));$P=0;while($Oc-->0){$P=int32($P+0x9E3779B9);$ab=$P>>2&3;for($C=0;$C<$_;$C++){$Y=$U[$C+1];$pc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Z=int32($U[$C]+$pc);$U[$C]=$Z;}$Y=$U[0];$pc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Z=int32($U[$_]+$pc);$U[$_]=$Z;}return
long2str($U,false);}function
decrypt_string($kd,$t){if($kd==""){return"";}$t=array_values(unpack("V*",pack("H*",md5($t))));$U=str2long($kd,false);$_=count($U)-1;$Z=$U[$_];$Y=$U[0];$Oc=floor(6+52/($_+1));$P=int32($Oc*0x9E3779B9);while($P){$ab=$P>>2&3;for($C=$_;$C>0;$C--){$Z=$U[$C-1];$pc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Y=int32($U[$C]-$pc);$U[$C]=$Y;}$Z=$U[$_];$pc=xxtea_mx($Z,$Y,$P,$t[$C&3^$ab]);$Y=int32($U[0]-$pc);$U[0]=$Y;$P=int32($P-0x9E3779B9);}return
long2str($U,true);}$f='';$_d=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Gc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$V){list($t)=explode(":",$V);$Gc[$t]=$V;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$t=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Lc=$b->permanentLogin();$Gc[$t]="$t:".base64_encode($Lc?encrypt_string($_POST["password"],$Lc):"");cookie("adminer_permanent",implode(" ",$Gc));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($_d&&$_POST["token"]!=$_d){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$t){set_session($t,null);}$t=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Gc[$t]){unset($Gc[$t]);cookie("adminer_permanent",implode(" ",$Gc));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($Gc&&!$_SESSION["pwds"]){session_regenerate_id();$Lc=$b->permanentLogin();foreach($Gc
as$t=>$V){list(,$_a)=explode(":",$V);list($Xa,$M,$T)=array_map('base64_decode',explode("-",$t));$_SESSION["pwds"][$Xa][$M][$T]=decrypt_string(base64_decode($_a),$Lc);}}function
auth_error($mb=null){global$f,$b,$_d;$ed=session_name();$h="";if(!$_COOKIE[$ed]&&$_GET[$ed]&&ini_bool("session.use_only_cookies")){$h='Wymagana jest obsługa sesji w PHP.';}elseif(isset($_GET["username"])){if(($_COOKIE[$ed]||$_GET[$ed])&&!$_d){$h='Sesja wygasła, zaloguj się ponownie.';}else{$E=&get_session("pwds");if(isset($E)){$h=h($mb?$mb->getMessage():(is_string($f)?$f:'Nieprawidłowe dane logowania.'));$E=null;}}}page_header('Zaloguj się',$h,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$b->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$Jc)),false);page_footer("auth");exit;}$f=connect();}if(is_string($f)||!$b->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$_d=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$_d;}$h=($_POST?($_POST["token"]==$_d?"":'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','"post_max_size"')));$f->select_db($b->database());function
email_header($Lb){return"=?UTF-8?B?".base64_encode($Lb)."?=";}function
send_mail($db,$nd,$z,$Gb="",$ub=array()){$g=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$z=str_replace("\n",$g,wordwrap(str_replace("\r","","$z\n")));$wa=uniqid("boundary");$na="";foreach((array)$ub["error"]as$t=>$V){if(!$V){$na.="--$wa$g"."Content-Type: ".str_replace("\n","",$ub["type"][$t]).$g."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$ub["name"][$t])."\"$g"."Content-Transfer-Encoding: base64$g$g".chunk_split(base64_encode(file_get_contents($ub["tmp_name"][$t])),76,$g).$g;}}$ua="";$Mb="Content-Type: text/plain; charset=utf-8$g"."Content-Transfer-Encoding: 8bit";if($na){$na.="--$wa--$g";$ua="--$wa$g$Mb$g$g";$Mb="Content-Type: multipart/mixed; boundary=\"$wa\"";}$Mb.=$g."MIME-Version: 1.0$g"."X-Mailer: Adminer Editor".($Gb?$g."From: ".str_replace("\n","",$Gb):"");return
mail($db,email_header($nd),$ua.$z.$na,$Mb);}function
like_bool($i){return
ereg("bool|(tinyint|bit)\\(1\\)",$i["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$uc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Ya[DRIVER]='Zaloguj się';if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$a=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$a-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$f->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($a)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$a=$_GET["edit"];$X=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Nd=(isset($_GET["select"])?$_POST["edit"]:$X);$j=fields($a);foreach($j
as$A=>$i){if(!isset($i["privileges"][$Nd?"update":"insert"])||$b->fieldName($i)==""){unset($j[$A]);}}if($_POST&&!$h&&!isset($_GET["select"])){$w=$_POST["referer"];if($_POST["insert"]){$w=($Nd?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$w)){$w=ME."select=".urlencode($a);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($a)," WHERE $X"),$w,'Rekord został usunięty.');}else{$N=array();foreach($j
as$A=>$i){$V=process_input($i);if($V!==false&&$V!==null){$N[idf_escape($A)]=($Nd?"\n".idf_escape($A)." = $V":$V);}}if($Nd){if(!$N){redirect($w);}query_redirect("UPDATE".limit1(table($a)." SET".implode(",",$N),"\nWHERE $X"),$w,'Rekord został zaktualizowany.');}else{$H=insert_into($a,$N);$cc=($H?last_id():0);queries_redirect($w,sprintf('Rekord%s został dodany.',($cc?" $cc":"")),$H);}}}$rd=$b->tableName(table_status($a));page_header(($Nd?'Edytuj':'Dodaj'),$h,array("select"=>array($a,$rd)),$rd);$J=null;if($_POST["save"]){$J=(array)$_POST["fields"];}elseif($X){$L=array();foreach($j
as$A=>$i){if(isset($i["privileges"]["select"])){$L[]=($_POST["clone"]&&$i["auto_increment"]?"'' AS ":(ereg("enum|set",$i["type"])?"1*".idf_escape($A)." AS ":"")).idf_escape($A);}}$J=array();if($L){$K=get_rows("SELECT".limit(implode(", ",$L)." FROM ".table($a)," WHERE $X",(isset($_GET["select"])?2:1)));$J=(isset($_GET["select"])&&count($K)!=1?null:reset($K));}}if($J===false){echo"<p class='error'>".'Brak rekordów.'."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($j){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($j
as$A=>$i){echo"<tr><th>".$b->fieldName($i);$Sa=$_GET["set"][bracket_escape($A)];$W=(isset($J)?($J[$A]!=""&&ereg("enum|set",$i["type"])?(is_array($J[$A])?array_sum($J[$A]):+$J[$A]):$J[$A]):(!$Nd&&$i["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Sa)?$Sa:$i["default"]))));if(!$_POST["save"]&&is_string($W)){$W=$b->editVal($W,$i);}$l=($_POST["save"]?(string)$_POST["function"][$A]:($Nd&&$i["on_update"]=="CURRENT_TIMESTAMP"?"now":($W===false?null:(isset($W)?'':'NULL'))));if($i["type"]=="timestamp"&&$W=="CURRENT_TIMESTAMP"){$W="";$l="now";}input($i,$W,$l);echo"\n";}echo"</table>\n";}echo'<p>
';if($j){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Nd?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}}echo($Nd?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$j?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$_d,'">
</form>
';}elseif(isset($_GET["select"])){$a=$_GET["select"];$R=table_status($a);$r=indexes($a);$j=fields($a);$Bb=column_foreign_keys($a);if($R["Oid"]=="t"){$r[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$ha);$Wc=array();$e=array();$ud=null;foreach($j
as$t=>$i){$A=$b->fieldName($i);if(isset($i["privileges"]["select"])&&$A!=""){$e[$t]=html_entity_decode(strip_tags($A));if(ereg('text|lob',$i["type"])){$ud=$b->selectLengthProcess();}}$Wc+=$i["privileges"];}list($L,$m)=$b->selectColumnsProcess($e,$r);$X=$b->selectSearchProcess($j,$r);$B=$b->selectOrderProcess($j,$r);$u=$b->selectLimitProcess();$Gb=($L?implode(", ",$L):($R["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($a);$Ib=($m&&count($m)<count($L)?"\nGROUP BY ".implode(", ",$m):"").($B?"\nORDER BY ".implode(", ",$B):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Jd=>$J){echo$f->result("SELECT".limit(idf_escape(key($J))." FROM ".table($a)," WHERE ".where_check($Jd).($X?" AND ".implode(" AND ",$X):"").($B?" ORDER BY ".implode(", ",$B):""),1));}exit;}if($_POST&&!$h){$Vd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Kc=$Ld=null;foreach($r
as$q){if($q["type"]=="PRIMARY"){$Kc=array_flip($q["columns"]);$Ld=($L?$Kc:array());break;}}foreach((array)$Ld
as$t=>$V){if(in_array(idf_escape($t),$L)){unset($Ld[$t]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($a);$b->dumpTable($a,"");if(!is_array($_POST["check"])||$Ld===array()){$Ud=$X;if(is_array($_POST["check"])){$Ud[]="($Vd)";}$G="SELECT $Gb".($Ud?"\nWHERE ".implode(" AND ",$Ud):"").$Ib;}else{$Hd=array();foreach($_POST["check"]as$V){$Hd[]="(SELECT".limit($Gb,"\nWHERE ".($X?implode(" AND ",$X)." AND ":"").where_check($V).$Ib,1).")";}$G=implode(" UNION ALL ",$Hd);}$b->dumpData($a,"table",$G);exit;}if(!$b->selectEmailProcess($X,$Bb)){if($_POST["save"]||$_POST["delete"]){$H=true;$ia=0;$G=table($a);$N=array();if(!$_POST["delete"]){foreach($e
as$A=>$V){$V=process_input($j[$A]);if($V!==null){if($_POST["clone"]){$N[idf_escape($A)]=($V!==false?$V:idf_escape($A));}elseif($V!==false){$N[]=idf_escape($A)." = $V";}}}$G.=($_POST["clone"]?" (".implode(", ",array_keys($N)).")\nSELECT ".implode(", ",$N)."\nFROM ".table($a):" SET\n".implode(",\n",$N));}if($_POST["delete"]||$N){$Ea="UPDATE";if($_POST["delete"]){$Ea="DELETE";$G="FROM $G";}if($_POST["clone"]){$Ea="INSERT";$G="INTO $G";}if($_POST["all"]||($Ld===array()&&$_POST["check"])||count($m)<count($L)){$H=queries($Ea." $G".($_POST["all"]?($X?"\nWHERE ".implode(" AND ",$X):""):"\nWHERE $Vd"));$ia=$f->affected_rows;}else{foreach((array)$_POST["check"]as$V){$H=queries($Ea.limit1($G,"\nWHERE ".where_check($V)));if(!$H){break;}$ia+=$f->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia),$H);}elseif(!$_POST["import"]){if(!$_POST["val"]){$h='Kliknij podwójnie wartość, aby ją edytować.';}else{$H=true;$ia=0;foreach($_POST["val"]as$Jd=>$J){$N=array();foreach($J
as$t=>$V){$t=bracket_escape($t,1);$N[]=idf_escape($t)." = ".(ereg('char|text',$j[$t]["type"])||$V!=""?$b->processInput($j[$t],$V):"NULL");}$G=table($a)." SET ".implode(", ",$N);$Ud=" WHERE ".where_check($Jd).($X?" AND ".implode(" AND ",$X):"");$H=queries("UPDATE".(count($m)<count($L)?" $G$Ud":limit1($G,$Ud)));if(!$H){break;}$ia+=$f->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$ia),$H);}}elseif(is_string($k=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ha["output"])."&format=".urlencode($_POST["separator"]));$H=true;$Da=array_keys($j);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$k,$y);$ia=count($y[0]);begin();$cd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($y[0]as$t=>$V){preg_match_all("~((\"[^\"]*\")+|[^$cd]*)$cd~",$V.$cd,$ic);if(!$t&&!array_diff($ic[1],$Da)){$Da=$ic[1];$ia--;}else{$N=array();foreach($ic[1]as$n=>$Aa){$N[idf_escape($Da[$n])]=($Aa==""&&$j[$Da[$n]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Aa))));}$H=insert_update($a,$N,$Kc);if(!$H){break;}}}if($H){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$ia),$H);queries("ROLLBACK");}else{$h=upload_error($k);}}}$rd=$b->tableName($R);page_header('pokaż'.": $rd",$h);session_write_close();$N=null;if(isset($Wc["insert"])){$N="";foreach((array)$_GET["where"]as$V){if(count($Bb[$V["col"]])==1&&($V["op"]=="="||(!$V["op"]&&!ereg('[_%]',$V["val"])))){$N.="&set".urlencode("[".bracket_escape($V["col"])."]")."=".urlencode($V["val"]);}}}$b->selectLinks($R,$N);if(!$e){echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($j?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($a).'">',"</div>\n";$b->selectColumnsPrint($L,$e);$b->selectSearchPrint($X,$e,$r);$b->selectOrderPrint($B,$e,$r);$b->selectLimitPrint($u);$b->selectLengthPrint($ud);$b->selectActionPrint();echo"</form>\n";$D=$_GET["page"];if($D=="last"){$Eb=$f->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));$D=floor(max(0,$Eb-1)/$u);}$G="SELECT".limit((+$u&&$m&&count($m)<count($L)&&$Xb=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Gb,($X?"\nWHERE ".implode(" AND ",$X):"").$Ib,($u!=""?+$u:null),($D?$u*$D:0),"\n");echo$b->selectQuery($G);$H=$f->query($G);if(!$H){echo"<p class='error'>".error()."\n";}else{if($Xb=="mssql"){$H->seek($u*$D);}$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$K=array();while($J=$H->fetch_assoc()){if($D&&$Xb=="oracle"){unset($J["RNUM"]);}$K[]=$J;}if($_GET["page"]!="last"){$Eb=(+$u&&$m&&count($m)<count($L)?($Xb=="sql"?$f->result(" SELECT FOUND_ROWS()"):$f->result("SELECT COUNT(*) FROM ($G) x")):count($K));}if(!$K){echo"<p class='message'>".'Brak rekordów.'."\n";}else{$ta=$b->backwardKeys($a,$rd);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$m&&$L?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$qc=array();$Hb=array();reset($L);$Qc=1;foreach($K[0]as$t=>$V){if($R["Oid"]!="t"||$t!="oid"){$V=$_GET["columns"][key($L)];$i=$j[$L?($V?$V["col"]:current($L)):$t];$A=($i?$b->fieldName($i,$Qc):"*");if($A!=""){$Qc++;$qc[$t]=$A;$d=idf_escape($t);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($t).($B[0]==$d||$B[0]==$t||(!$B&&count($m)<count($L)&&$m[0]==$d)?'&desc%5B0%5D=1':'')).'">'.(!$L||$V?apply_sql_function($V["fun"],$A):h(current($L)))."</a>";}$Hb[$t]=$V["fun"];next($L);}}$fc=array();if($_GET["modify"]){foreach($K
as$J){foreach($J
as$t=>$V){$fc[$t]=max($fc[$t],min(40,strlen(utf8_decode($V))));}}}echo($ta?"<th>".'Relacje':"")."</thead>\n";foreach($b->rowDescriptions($K,$Bb)as$_=>$J){$Id=unique_array($K[$_],$r);$Jd="";foreach($Id
as$t=>$V){$Jd.="&".(isset($V)?urlencode("where[".bracket_escape($t)."]")."=".urlencode($V):"null%5B%5D=".urlencode($t));}echo"<tr".odd().">".(!$m&&$L?"":"<td>".checkbox("check[]",substr($Jd,1),in_array(substr($Jd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($m)<count($L)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($a).$Jd)."'>".'edytuj'."</a>"));foreach($J
as$t=>$V){if(isset($qc[$t])){$i=$j[$t];if($V!=""&&(!isset($fb[$t])||$fb[$t]!="")){$fb[$t]=(is_mail($V)?$qc[$t]:"");}$v="";$V=$b->editVal($V,$i);if(!isset($V)){$V="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$i["type"])&&$V!=""){$v=h(ME.'download='.urlencode($a).'&field='.urlencode($t).$Jd);}if($V===""){$V="&nbsp;";}elseif($ud!=""&&ereg('text|blob',$i["type"])&&is_utf8($V)){$V=shorten_utf8($V,max(0,+$ud));}else{$V=h($V);}if(!$v){foreach((array)$Bb[$t]as$Ab){if(count($Bb[$t])==1||end($Ab["source"])==$t){$v="";foreach($Ab["source"]as$n=>$fd){$v.=where_link($n,$Ab["target"][$n],$K[$_][$fd]);}$v=h(($Ab["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($Ab["db"]),ME):ME).'select='.urlencode($Ab["table"]).$v);if(count($Ab["source"])==1){break;}}}}if($t=="COUNT(*)"){$v=h(ME."select=".urlencode($a));$n=0;foreach((array)$_GET["where"]as$U){if(!array_key_exists($U["col"],$Id)){$v.=h(where_link($n++,$U["col"],$U["val"],$U["op"]));}}foreach($Id
as$s=>$U){$v.=h(where_link($n++,$s,$U));}}}if(!$v){if(is_mail($V)){$v="mailto:$V";}if($Nc=is_url($J[$t])){$v=($Nc=="http"&&$aa?$J[$t]:"$Nc://www.adminer.org/redirect/?url=".urlencode($J[$t]));}}$o=h("val[$Jd][".bracket_escape($t)."]");$W=$_POST["val"][$Jd][bracket_escape($t)];$Kb=h(isset($W)?$W:$J[$t]);$hc=strpos($V,"<i>...</i>");$cb=is_utf8($V)&&$K[$_][$t]==$J[$t]&&!$Hb[$t];$td=ereg('text|lob',$i["type"]);echo(($_GET["modify"]&&$cb)||isset($W)?"<td>".($td?"<textarea name='$o' cols='30' rows='".(substr_count($J[$t],"\n")+1)."'>$Kb</textarea>":"<input name='$o' value='$Kb' size='$fc[$t]'>"):"<td id='$o' ondblclick=\"".($cb?"selectDblClick(this, event".($hc?", 2":($td?", 1":"")).")":"alert('".h('Użyj linku edycji aby zmienić tę wartość.')."')").";\">".$b->selectVal($V,$v,$i));}}if($ta){echo"<td>";}$b->backwardKeysPrint($ta,$K[$_]);echo"</tr>\n";}echo"</table>\n",(!$m&&$L?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($K||$D){$lb=true;if($_GET["page"]!="last"&&+$u&&count($m)>=count($L)&&($Eb>=$u||$D)){$Eb=found_rows($R,$X);if($Eb<max(1e4,2*($D+1)*$u)){ob_flush();flush();$Eb=$f->result("SELECT COUNT(*) FROM ".table($a).($X?" WHERE ".implode(" AND ",$X):""));}else{$lb=false;}}echo"<p class='pages'>";if(+$u&&$Eb>$u){$jc=floor(($Eb-1)/$u);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($D+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$D).($D>5?" ...":"");for($n=max(1,$D-4);$n<min($jc,$D+5);$n++){echo
pagination($n,$D);}echo($D+5<$jc?" ...":"").($lb?pagination($jc,$D):' <a href="'.h(remove_from_uri()."&page=last").'">'.'ostatni'."</a>");}echo" (".($lb?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$Eb).") ".checkbox("all",1,0,'wybierz wszystkie')."\n";if($b->selectCommandPrint()){echo'<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany"',($_GET["modify"]?'':' title="'.'Kliknij podwójnie wartość, aby ją edytować.'.'" class="jsonly"');?>>
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$Eb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Cb=$b->dumpFormat();if($Cb){print_fieldset("export",'Eksport');$Cc=$b->dumpOutput();echo($Cc?html_select("output",$Cc,$ha["output"])." ":""),html_select("format",$Cb,$ha["format"])," <input type='submit' name='export' value='".'Eksport'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}}if($b->selectImportPrint()){print_fieldset("import",'Import',!$K);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ha["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$_d'>\n","</div></fieldset>\n";}$b->selectEmailPrint(array_filter($fb,'strlen'),$e);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($Q,$o,$A)=$b->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$H=$f->query("SELECT $o, $A FROM ".table($Q)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$o = $_GET[value] OR ":"")."$A LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($n=0;$n<10&&($J=$H->fetch_row());$n++){echo"<a href='".h(ME."edit=".urlencode($Q)."&where".urlencode("[".bracket_escape(idf_unescape($o))."]")."=".urlencode($J[0]))."'>".h($J[1])."</a><br>\n";}if($n==10){echo"...\n";}}exit;}else{page_header('Serwer',"",false);if($b->homepage()){echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".'Szukaj'."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.'Tabela'.'<td>'.'Liczba rekordów'."</thead>\n";foreach(table_status()as$Q=>$J){$A=$b->tableName($J);if(isset($J["Engine"])&&$A!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$Q,in_array($Q,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($Q)."'>$A</a>";$V=number_format($J["Rows"],0,'.',' ');echo"<td align='right'><a href='".h(ME."edit=").urlencode($Q)."'>".($J["Engine"]=="InnoDB"&&$V?"~ $V":$V)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();