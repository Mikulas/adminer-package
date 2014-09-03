<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$Oe=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Oe){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Ue=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Ue){$$b=$Ue;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
function bodyLoad(version){var jushRoot=location.protocol + '//www.adminer.org/static/';var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';jush.urls.sql_sqlset=jush.urls.sql[0];jush.urls.sqlset[0]=jush.urls.sql[0];jush.urls.sqlstatus[0]=jush.urls.sql[0];jush.urls.pgsql[0]='http://www.postgresql.org/docs/'+version+'/static/$key';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0];jush.urls.pgsqlset[0]='http://www.postgresql.org/docs/'+version+'/static/runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
var added='.',rowCount;function reEscape(s){return s.replace(/[\[\]\\^$*+?.(){|}]/,'\\$&');}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var table=reEscape(field.value);var column='';var match;if((match=/(.+)_(.+)/.exec(table))||(match=/(.*[a-z])([A-Z].*)/.exec(table))){table=match[1];column=match[2];}
var plural='(?:e?s)?';var tabCol=table+plural+'_?'+column;var re=new RegExp('(^'+idfEscape(table+plural)+'`'+idfEscape(column)+'$'
+'|^'+idfEscape(tabCol)+'`'
+'|^'+idfEscape(column+plural)+'`'+idfEscape(table)+'$'
+')|`'+idfEscape(tabCol)+'$','i');var candidate;for(var i=opts.length;i--;){if(!/`/.test(opts[i].value)){if(i==opts.length-2&&candidate&&!match[1]&&name=='fields[1]'){return false;}
break;}
if(match=re.exec(opts[i].value)){if(candidate){return false;}
candidate=i;}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/(\d+)(\.\d+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var spans=row.getElementsByTagName('span');for(var i=0;i<spans.length-1;i++){row.removeChild(spans[i]);}
var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var input=row.getElementsByTagName('input')[0];input.name=input.name.replace(/indexes\[\d+/,'$&1');input.value='';field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddColumn(field){field.onchange=function(){};var column=field.parentNode.cloneNode(true);var select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;}}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
s=encodeURIComponent(s.substr(1));var link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH+GkNyZWF0ZWQgd2l0aCBhamF4bG9hZC5pbmZvACH5BAAKAAAAIf8LTkVUU0NBUEUyLjADAQAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQACgABACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkEAAoAAgAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkEAAoAAwAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkEAAoABAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQACgAFACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQACgAGACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAAKAAcALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($S){$rb=substr($S,-1);return
str_replace($rb.$rb,$rb,substr($S,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($sb){if(get_magic_quotes_gpc()){while(list($e,$b)=each($sb)){foreach($b
as$Na=>$y){unset($sb[$e][$Na]);if(is_array($y)){$sb[$e][stripslashes($Na)]=$y;$sb[]=&$sb[$e][stripslashes($Na)];}else{$sb[$e][stripslashes($Na)]=($Oe?$y:stripslashes($y));}}}}}function
bracket_escape($S,$gf=false){static$Ce=array(':'=>':1',']'=>':2','['=>':3');return
strtr($S,($gf?array_flip($Ce):$Ce));}function
h($J){return
htmlspecialchars($J,ENT_QUOTES);}function
nbsp($J){return(trim($J)!=""?h($J):"&nbsp;");}function
nl_br($J){return
str_replace("\n","<br>",$J);}function
checkbox($f,$q,$fb,$Zd="",$ue=""){static$R=0;$R++;$c="<input type='checkbox'".($f?" name='$f' value='".h($q)."'":"").($fb?" checked":"").($ue?" onclick=\"$ue\"":"")." id='checkbox-$R'>";return($Zd!=""?"<label for='checkbox-$R'>$c".h($Zd)."</label>":$c);}function
optionlist($Cc,$Hf=null,$se=false){$c="";foreach($Cc
as$Na=>$y){if(is_array($y)){$c.='<optgroup label="'.h($Na).'">';}foreach((is_array($y)?$y:array($Na=>$y))as$e=>$b){$c.='<option'.($se||is_string($e)?' value="'.h($e).'"':'').(($se||is_string($e)?(string)$e:$b)===$Hf?' selected':'').'>'.h($b);}if(is_array($y)){$c.='</optgroup>';}}return$c;}function
html_select($f,$Cc,$q="",$Qb=true){if($Qb){return"<select name='".h($f)."'".(is_string($Qb)?" onchange=\"$Qb\"":"").">".optionlist($Cc,$q)."</select>";}$c="";foreach($Cc
as$e=>$b){$c.="<label><input type='radio' name='".h($f)."' value='".h($e)."'".($e==$q?" checked":"").">".h($b)."</label>";}return$c;}function
confirm($Ec="",$Mf=false){return" onclick=\"".($Mf?"eventStop(event); ":"")."return confirm('".'Naozaj?'.($Ec?" (' + $Ec + ')":"")."');\"";}function
js_escape($J){return
addcslashes($J,"\r\n'\\/");}function
ini_bool($wf){$b=ini_get($wf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$c;if(!isset($c)){$c=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$c;}function
q($J){global$g;return$g->quote($J);}function
get_vals($j,$C=0){global$g;$c=array();$i=$g->query($j);if(is_object($i)){while($a=$i->fetch_row()){$c[]=$a[$C];}}return$c;}function
get_key_vals($j,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();$i=$H->query($j);if(is_object($i)){while($a=$i->fetch_row()){$c[$a[0]]=$a[1];}}return$c;}function
get_rows($j,$H=null,$n="<p class='error'>"){global$g;if(!is_object($H)){$H=$g;}$c=array();$i=$H->query($j);if(is_object($i)){while($a=$i->fetch_assoc()){$c[]=$a;}}elseif(!$i&&$g->error&&$n&&defined("PAGE_HEADER")){echo$n.error()."\n";}return$c;}function
unique_array($a,$I){foreach($I
as$x){if(ereg("PRIMARY|UNIQUE",$x["type"])){$c=array();foreach($x["columns"]as$e){if(!isset($a[$e])){continue
2;}$c[$e]=$a[$e];}return$c;}}$c=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$c[$e]=$b;}}return$c;}function
where($s){global$v;$c=array();foreach((array)$s["where"]as$e=>$b){$c[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)||$v=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$s["null"]as$e){$c[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$c);}function
where_check($b){parse_str($b,$Ve);remove_slashes(array(&$Ve));return
where($Ve);}function
where_link($k,$C,$q,$df="="){return"&where%5B$k%5D%5Bcol%5D=".urlencode($C)."&where%5B$k%5D%5Bop%5D=".urlencode((isset($q)?$df:"IS NULL"))."&where%5B$k%5D%5Bval%5D=".urlencode($q);}function
cookie($f,$q){global$Ac;$xc=array($f,(ereg("\n",$q)?"":$q),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ac);if(version_compare(PHP_VERSION,'5.2.0')>=0){$xc[]=true;}return
call_user_func_array('setcookie',$xc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Gb,$F,$O){global$ka;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ka))."|username|".session_name()),$l);return"$l[1]?".(sid()?SID."&":"").($Gb!="server"||$F!=""?urlencode($Gb)."=".urlencode($F)."&":"")."username=".urlencode($O).($l[2]?"&$l[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($ea,$ua=null){if(isset($ua)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($ea)?$ea:$_SERVER["REQUEST_URI"]))][]=$ua;}if(isset($ea)){if($ea==""){$ea=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $ea");exit;}}function
query_redirect($j,$ea,$ua,$Yc=true,$Ef=true,$Ie=false){global$g,$n,$o;if($Ef){$Ie=!$g->query($j);}$id="";if($j){$id=$o->messageQuery($j);}if($Ie){$n=error().$id;return
false;}if($Yc){redirect($ea,$ua.$id);}return
true;}function
queries($j=null){global$g;static$mb=array();if(!isset($j)){return
implode(";\n",$mb);}$mb[]=$j;return$g->query($j);}function
apply_queries($j,$D,$yf='table'){foreach($D
as$h){if(!queries("$j ".$yf($h))){return
false;}}return
true;}function
queries_redirect($ea,$ua,$Yc){return
query_redirect(queries(),$ea,$ua,$Yc,false,!$Yc);}function
remove_from_uri($Za=""){return
substr(preg_replace("~(?<=[?&])($Za".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($ba,$sf){return" ".($ba==$sf?$ba+1:'<a href="'.h(remove_from_uri("page").($ba?"&page=$ba":"")).'">'.($ba+1)."</a>");}function
get_file($e,$ee=false){$ta=$_FILES[$e];if(!$ta||$ta["error"]){return$ta["error"];}return
file_get_contents($ee&&ereg('\\.gz$',$ta["name"])?"compress.zlib://$ta[tmp_name]":($ee&&ereg('\\.bz2$',$ta["name"])?"compress.bzip2://$ta[tmp_name]":$ta["tmp_name"]));}function
upload_error($n){$Ld=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?'Súbor sa nepodarilo nahrať.'.($Ld?" ".sprintf('Maximálna povolená veľkosť súboru je %sB.',$Ld):""):'Súbor neexistuje.');}function
odd($c=' class="odd"'){static$k=0;if(!$c){$k=-1;}return($k++%
2?$c:'');}function
json_row($e,$b=null){static$Aa=true;if($Aa){echo"{";}if($e!=""){echo($Aa?"":",")."\n\t\"".addcslashes($e,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$Aa=false;}else{echo"\n}\n";$Aa=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($aa,$W){return
str_repeat("$aa{0,65535}",$W/65535)."$aa{0,".($W
%
65535)."}";}function
shorten_utf8($J,$W=80,$Lf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$W).")($)?)u",$J,$l)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$W).")($)?)",$J,$l);}return
h($l[1]).$Lf.(isset($l[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($sb,$_f=array()){while(list($e,$b)=each($sb)){if(is_array($b)){foreach($b
as$Na=>$y){$sb[$e."[$Na]"]=$y;}}elseif(!in_array($e,$_f)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$o;$c=array();foreach($o->foreignKeys($h)as$A){foreach($A["source"]as$b){$c[$b][]=$A;}}return$c;}function
enum_input($z,$Ta,$d,$q,$gc=null){global$o;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$sa);$c=(isset($gc)?"<label><input type='$z'$Ta value='$gc'".((is_array($q)?in_array($gc,$q):$q===0)?" checked":"")."><i>".'prázdne'."</i></label>":"");foreach($sa[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?$q==$k+1:(is_array($q)?in_array($k+1,$q):$q===$b));$c.=" <label><input type='$z'$Ta value='".($k+1)."'".($fb?' checked':'').'>'.h($o->editVal($b,$d)).'</label>';}return$c;}function
input($d,$q,$N){global$Q,$o,$v;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$Qd=($v=="mssql"&&$d["auto_increment"]);if($Qd&&!$_POST["save"]){$N=null;}$Z=(isset($_GET["select"])||$Qd?array("orig"=>'originál'):array())+$o->editFunctions($d);$Ta=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($Z[""])."<td>".$o->editInput($_GET["edit"],$d,$Ta,$q);}else{$Aa=0;foreach($Z
as$e=>$b){if($e===""||!$b){break;}$Aa++;}$Qb=($Aa?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($Aa > f.selectedIndex) f.selectedIndex = $Aa;\"":"");$Ta.=$Qb;echo(count($Z)>1?html_select("function[$f]",$Z,!isset($N)||in_array($N,$Z)||isset($Z[$N])?$N:""):nbsp(reset($Z))).'<td>';$Ae=$o->editInput($_GET["edit"],$d,$Ta,$q);if($Ae!=""){echo$Ae;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$sa);foreach($sa[1]as$k=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?($q>>$k)&1:in_array($b,explode(",",$q),true));echo" <label><input type='checkbox' name='fields[$f][$k]' value='".(1<<$k)."'".($fb?' checked':'')."$Qb>".h($o->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Qb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($v!="sqlite"||ereg("\n",$q)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ta onkeypress='return textareaKeypress(this, event);'>".h($q).'</textarea>';}else{$_d=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$l)?((ereg("binary",$d["type"])?2:1)*$l[1]+($l[3]?1:0)+($l[2]&&!$d["unsigned"]?1:0)):($Q[$d["type"]]?$Q[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($q)."'".($_d?" maxlength='$_d'":"").(ereg('char|binary',$d["type"])&&$_d>20?" size='40'":"")."$Ta>";}}}function
process_input($d){global$o;$S=bracket_escape($d["field"]);$N=$_POST["function"][$S];$q=$_POST["fields"][$S];if($d["type"]=="enum"){if($q==-1){return
false;}if($q==""){return"NULL";}return+$q;}if($d["auto_increment"]&&$q==""){return
null;}if($N=="orig"){return
false;}if($N=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$q);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$ta=get_file("fields-$S");if(!is_string($ta)){return
false;}return
q($ta);}return$o->processInput($d,$q,$N);}function
search_tables(){global$o,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$qa=false;foreach(table_status()as$h=>$E){$f=$o->tableName($E);if(isset($E["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$i=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$o->selectSearchProcess(fields($h),array())),1));if($i->fetch_row()){if(!$qa){echo"<ul>\n";$qa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($qa?"</ul>":"<p class='message'>".'Žiadne tabuľky.')."\n";}function
dump_headers($ad,$Bd=false){global$o;$c=$o->dumpHeaders($ad,$Bd);$Oa=$_POST["output"];if($Oa!="text"){header("Content-Disposition: attachment; filename=".($ad!=""?friendly_url($ad):"dump").".$c".($Oa!="file"&&!ereg('[^0-9a-z]',$Oa)?".$Oa":""));}session_write_close();return$c;}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($N,$C){return($N?($N=="unixepoch"?"DATETIME($C, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$C)"):$C);}function
password_file(){$bd=ini_get("upload_tmp_dir");if(!$bd){if(function_exists('sys_get_temp_dir')){$bd=sys_get_temp_dir();}else{$ha=@tempnam("","");if(!$ha){return
false;}$bd=dirname($ha);unlink($ha);}}$ha="$bd/adminer.key";$c=@file_get_contents($ha);if($c){return$c;}$Ma=@fopen($ha,"w");if($Ma){$c=md5(uniqid(mt_rand(),true));fwrite($Ma,$c);fclose($Ma);}return$c;}function
is_mail($if){$ye='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$sc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$aa="$ye+(\\.$ye+)*@($sc?\\.)+$sc";return
preg_match("(^$aa(,\\s*$aa)*\$)i",$if);}function
is_url($J){$sc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($sc?\\.)+$sc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$J,$l)?strtolower($l[1]):"");}function
print_fieldset($R,$Bf,$mf=false){echo"<fieldset><legend><a href='#fieldset-$R' onclick=\"return !toggle('fieldset-$R');\">$Bf</a></legend><div id='fieldset-$R'".($mf?"":" class='hidden'").">\n";}function
bold($lf){return($lf?" class='active'":"");}global$o,$g,$ka,$Ob,$Ab,$n,$Z,$ib,$Ac,$bc,$v,$cf,$Tf,$bb,$Ka,$K,$Rf,$Q,$kb,$uc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Ac=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$xc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Ac);if(version_compare(PHP_VERSION,'5.2.0')>=0){$xc[]=true;}call_user_func_array('session_set_cookie_params',$xc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'sk';}function
lang($ff,$Pb){$rc=($Pb==1||(!$Pb&&'sk'=='fr')?0:('sk'=='sl'&&(!$Pb||$Pb>2)?1:0)+((!$Pb||$Pb>=5)&&ereg('cs|sk|ru|sl','sk')?2:1));return
sprintf($ff[$rc],$Pb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($jf,$O,$T,$Jf='auth_error'){set_exception_handler($Jf);parent::__construct($jf,$O,$T);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Ya=false){$i=parent::query($j);if(!$i){$If=$this->errorInfo();$this->error=$If[2];return
false;}$this->store_result($i);return$i;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($i=null){if(!$i){$i=$this->_result;}if($i->columnCount()){$i->num_rows=$i->rowCount();return$i;}$this->affected_rows=$i->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ka=array();$ka["sqlite"]="SQLite 3";$ka["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$nc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ha){$this->_link=new
SQLite3($ha);$Dd=$this->_link->version();$this->server_info=$Dd["versionString"];}function
query($j){$i=@$this->_link->query($j);if(!$i){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($i->numColumns()){return
new
Min_Result($i);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($J){return"'".$this->_link->escapeString($J)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$C=$this->_offset++;$z=$this->_result->columnType($C);return(object)array("name"=>$this->_result->columnName($C),"type"=>$z,"charsetnr"=>($z==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ha){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ha);}function
query($j,$Ya=false){$Kf=($Ya?"unbufferedQuery":"query");$i=@$this->_link->$Kf($j,SQLITE_BOTH,$n);if(!$i){$this->error=$n;return
false;}elseif($i===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($i);}function
quote($J){return"'".sqlite_escape_string($J)."'";}function
store_result(){return$this->_result;}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;if(method_exists($i,'numRows')){$this->num_rows=$i->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$c=array();foreach($a
as$e=>$b){$c[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$c;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$aa='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($aa\\.)?$aa\$~",$f,$l)){$h=($l[3]!=""?$l[3]:idf_unescape($l[2]));$f=($l[5]!=""?$l[5]:idf_unescape($l[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ha){$this->dsn(DRIVER.":$ha","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ha){if(is_readable($ha)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ha)?$ha:dirname($_SERVER["SCRIPT_FILENAME"])."/$ha")." AS a")){$this->Min_SQLite($ha);return
true;}return
false;}function
multi_query($j){return$this->_result=$this->query($j);}function
next_result(){return
false;}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($j,$s,1):" $j$s");}function
db_collation($t,$Y){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$c[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$c[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$c[$f]:$c);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$c=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$z=strtolower($a["type"]);$ya=$a["dflt_value"];$c[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$z)?"integer":(eregi("char|clob|text",$z)?"text":(eregi("blob",$z)?"blob":(eregi("real|floa|doub",$z)?"real":"numeric")))),"full_type"=>$z,"default"=>(ereg("'(.*)'",$ya,$l)?str_replace("''","'",$l[1]):($ya=="NULL"?null:$ya)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$z)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$c;}function
indexes($h,$H=null){$c=array();$Ja=array();foreach(fields($h)as$d){if($d["primary"]){$Ja[]=$d["field"];}}if($Ja){$c[""]=array("type"=>"PRIMARY","columns"=>$Ja,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$c[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$c[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$ed){$c[$a["name"]]["columns"][]=$ed["name"];}}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$A=&$c[$a["id"]];if(!$A){$A=$a;}$A["source"][]=$a["from"];$A["target"][]=$a["to"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
check_sqlite_name($f){global$g;$Pd="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Pd)\$~",$f)){$g->error=sprintf('Prosím vyberte jednu z koncoviek %s.',str_replace("|",", ",$Pd));return
false;}return
true;}function
create_database($t,$U){global$g;if(file_exists($t)){$g->error='Súbor existuje.';return
false;}if(!check_sqlite_name($t)){return
false;}$w=new
Min_SQLite($t);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($_){global$g;$g->Min_SQLite(":memory:");foreach($_
as$t){if(!@unlink($t)){$g->error='Súbor existuje.';return
false;}}return
true;}function
rename_database($f,$U){global$g;if(!check_sqlite_name($f)){return
false;}$g->Min_SQLite(":memory:");$g->error='Súbor existuje.';return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$p,$Ha,$_a,$xb,$U,$Ua,$qb){$u=array();foreach($p
as$d){if($d[1]){$u[]=($h!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$u=array_merge($u,$Ha);if($h!=""){foreach($u
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)")){return
false;}if($Ua){queries("UPDATE sqlite_sequence SET seq = $Ua WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$u){foreach($u
as$b){if(!queries(($b[2]?"DROP INDEX":"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h))." $b[1]")){return
false;}}return
true;}function
truncate_tables($D){return
apply_queries("DELETE FROM",$D);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
move_tables($D,$X,$ca){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$l);return
array("Timing"=>strtoupper($l[1]),"Event"=>strtoupper($l[2]),"Trigger"=>$f,"Statement"=>$l[3]);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$l);$c[$a["name"]]=array($l[1],$l[2]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){}function
routines(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ja){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($hd){return
true;}function
create_sql($h,$Ua){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($fa){}function
trigger_sql($h,$V){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$c=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$c[$e]=$g->result("PRAGMA $e");}return$c;}function
show_status(){$c=array();foreach(get_vals("PRAGMA compile_options")as$vf){list($e,$b)=explode("=",$vf,2);$c[$e]=$b;}return$c;}function
support($tb){return
ereg('^(view|trigger|variables|status|dump)$',$tb);}$v="sqlite";$Q=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ka=array_keys($Q);$kb=array();$fc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("hex","length","lower","round","unixepoch","upper");$ib=array("avg","count","count distinct","group_concat","max","min","sum");$Ob=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ka["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$nc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($bf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$O,$T){set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' user='".addcslashes($O,"'\\")."' password='".addcslashes($T,"'\\")."'";$this->_link=@pg_connect($this->_string.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&DB!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Dd=pg_version($this->_link);$this->server_info=$Dd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($J){return"'".pg_escape_string($this->_link,$J)."'";}function
select_db($fa){if($fa==DB){return$this->_database;}$c=@pg_connect("$this->_string dbname='".addcslashes($fa,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($c){$this->_link=$c;}return$c;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($j,$Ya=false){$i=@pg_query($this->_link,$j);if(!$i){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($i)){$this->affected_rows=pg_affected_rows($i);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
pg_fetch_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=pg_num_rows($i);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;if(function_exists('pg_field_table')){$c->orgtable=pg_field_table($this->_result,$C);}$c->name=pg_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=pg_field_type($this->_result,$C);$c->charsetnr=($c->type=="bytea"?63:0);return$c;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($F,$O,$T){$J="pgsql:host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($J.(DB!=""?" dbname='".addcslashes(DB,"'\\")."'":""),$O,$T);return
true;}function
select_db($fa){return(DB==$fa);}function
close(){}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$Ba=$o->credentials();if($g->connect($Ba[0],$Ba[1],$Ba[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$Y){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$c[$a["Name"]]=$a;}return($f!=""?$c[$f]:$c);}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$l);list(,$a["type"],,$a["length"])=$l;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);$c[$a["field"]]=$a;}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();$We=$H->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $We AND attnum > 0",$H);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $We AND ci.oid = i.indexrelid",$H)as$a){$c[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$c[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$Of){$c[$a["relname"]]["columns"][]=$B[$Of];}$c[$a["relname"]]["lengths"]=array();}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.table_name = ".q($h))as$a){$A=&$c[$a["constraint_name"]];if(!$A){$A=$a;}$A["source"][]=$a["column_name"];$A["target"][]=$a["ref"];}return$c;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($t){return($t=="information_schema");}function
error(){global$g;$c=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$c,$l)){$c=$l[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($l[3]).'})(.*)~','\\1<b>\\2</b>',$l[2]).$l[4];}return
nl_br($c);}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).($U?" ENCODING ".idf_escape($U):""));}function
drop_databases($_){global$g;$g->close();return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$p,$Ha,$_a,$xb,$U,$Ua,$qb){$u=array();$mb=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$u[]="DROP $C";}else{$nd=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$u[]=($h!=""?"ADD ":"  ").implode($b);}else{if($C!=$b[0]){$mb[]="ALTER TABLE ".table($h)." RENAME $C TO $b[0]";}$u[]="ALTER $C TYPE$b[1]";if(!$b[6]){$u[]="ALTER $C ".($b[3]?"SET$b[3]":"DROP DEFAULT");$u[]="ALTER $C ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$nd!=""){$mb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($nd!=""?substr($nd,9):"''");}}}$u=array_merge($u,$Ha);if($h==""){array_unshift($mb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}elseif($u){array_unshift($mb,"ALTER TABLE ".table($h)."\n".implode(",\n",$u));}if($h!=""&&$h!=$f){$mb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$_a!=""){$mb[]="COMMENT ON TABLE ".table($f)." IS ".q($_a);}if($Ua!=""){}foreach($mb
as$j){if(!queries($j)){return
false;}}return
true;}function
alter_indexes($h,$u){$ja=array();$Ca=array();foreach($u
as$b){if($b[0]!="INDEX"){$ja[]=($b[2]?"\nDROP CONSTRAINT ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}elseif($b[2]){$Ca[]=$b[1];}elseif(!queries("CREATE INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h)." $b[1]")){return
false;}}return((!$ja||queries("ALTER TABLE ".table($h).implode(",",$ja)))&&(!$Ca||queries("DROP INDEX ".implode(", ",$Ca))));}function
truncate_tables($D){return
queries("TRUNCATE ".implode(", ",array_map('table',$D)));return
true;}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ca){foreach($D
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($ca))){return
false;}}foreach($X
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($ca))){return
false;}}return
true;}function
trigger($f){$G=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($G);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$c[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ja){global$g;$na=array();$s=array();foreach($r
as$e=>$b){$na[]="$e = $b";if(isset($Ja[idf_unescape($e)])){$s[]="$e = $b";}}return($s&&queries("UPDATE ".table($h)." SET ".implode(", ",$na)." WHERE ".implode(" AND ",$s))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Ia){global$g,$Q,$Ka;$c=$g->query("SET search_path TO ".idf_escape($Ia));foreach(types()as$z){if(!isset($Q[$z])){$Q[$z]=0;$Ka['Užívateľské typy'][]=$z;}}return$c;}function
use_sql($fa){return"\connect ".idf_escape($fa);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
show_status(){}function
support($tb){return
ereg('^(comment|view|scheme|sequence|trigger|type|variables|drop_col)$',$tb);}$v="pgsql";$Q=array();$Ka=array();foreach(array('Čísla'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Dátum a čas'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Reťazce'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binárne'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Sieť'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometria'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$Q+=$b;$Ka[$e]=array_keys($b);}$kb=array();$fc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("char_length","lower","round","to_hex","to_timestamp","upper");$ib=array("avg","count","count distinct","max","min","sum");$Ob=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ka["oracle"]="Oracle";if(isset($_GET["oracle"])){$nc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($bf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$O,$T){$this->_link=@oci_new_connect($O,$T,$F,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($fa){return
true;}function
query($j,$Ya=false){$i=oci_parse($this->_link,$j);if(!$i){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$c=@oci_execute($i);restore_error_handler();if($c){if(oci_num_fields($i)){return
new
Min_Result($i);}$this->affected_rows=oci_num_rows($i);}return$c;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=1){$i=$this->query($j);if(!is_object($i)||!oci_fetch($i->_result)){return
false;}return
oci_result($i->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;$c->name=oci_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=oci_field_type($this->_result,$C);$c->charsetnr=(ereg("raw|blob|bfile",$c->type)?63:0);return$c;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($F,$O,$T){$this->dsn("oci:dbname=//$F;charset=AL32UTF8",$O,$T);return
true;}function
select_db($fa){return
true;}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$Ba=$o->credentials();if($g->connect($Ba[0],$Ba[1],$Ba[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?($s?" AND":$Pa."WHERE").($L?" rownum > $L AND":"")." rownum <= ".($M+$L):"");}function
limit1($j,$s){return" $j$s";}function
db_collation($t,$Y){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();$De=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $De":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $De":""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return$E["Engine"]=="view";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$z=$a["DATA_TYPE"];$W="$a[DATA_PRECISION],$a[DATA_SCALE]";if($W==","){$W=$a["DATA_LENGTH"];}$c[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$z.($W?"($W)":""),"type"=>strtolower($z),"length"=>$W,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$c;}function
indexes($h,$H=null){return
array();}function
view($f){$G=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($G);}function
collations(){return
array();}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$j){$g->query("EXPLAIN PLAN FOR $j");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$p,$Ha,$_a,$xb,$U,$Ua,$qb){$u=$Ca=array();foreach($p
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$u[]=($h!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ca[]=idf_escape($d[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n)");}return(!$u||queries("ALTER TABLE ".table($h)."\n".implode("\n",$u)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ca).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($D){return
apply_queries("DROP TABLE",$D);}function
begin(){return
true;}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($hd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$G=get_rows('SELECT * FROM v$instance');return
reset($G);}function
support($tb){return
ereg("view|drop_col|variables|status",$tb);}$v="oracle";$Q=array();$Ka=array();foreach(array('Čísla'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Dátum a čas'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Reťazce'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binárne'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$Q+=$b;$Ka[$e]=array_keys($b);}$kb=array();$fc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("length","lower","round","upper");$ib=array("avg","count","count distinct","max","min","sum");$Ob=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ka["mssql"]="MS SQL";if(isset($_GET["mssql"])){$nc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($F,$O,$T){$this->_link=@sqlsrv_connect($F,array("UID"=>$O,"PWD"=>$T));if($this->_link){$xf=sqlsrv_server_info($this->_link);$this->server_info=$xf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($fa){return$this->query("USE $fa");}function
query($j,$Ya=false){$i=sqlsrv_query($this->_link,$j);if(!$i){$this->_get_error();return
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
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}$a=$i->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$c=new
stdClass;$c->name=$d["Name"];$c->orgname=$d["Name"];$c->type=($d["Type"]==1?254:0);return$c;}function
seek($L){for($k=0;$k<$L;$k++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($F,$O,$T){$this->_link=@mssql_connect($F,$O,$T);if($this->_link){$i=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$i->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($J){return"'".str_replace("'","''",$J)."'";}function
select_db($fa){return
mssql_select_db($fa);}function
query($j,$Ya=false){$i=mssql_query($j,$this->_link);if(!$i){$this->error=mssql_get_last_message();return
false;}if($i===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($j,$d=0){$i=$this->query($j);if(!is_object($i)){return
false;}return
mssql_result($i->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($i){$this->_result=$i;$this->num_rows=mssql_num_rows($i);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$c=mssql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;return$c;}function
seek($L){mssql_data_seek($this->_result,$L);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($S){return"[".str_replace("]","]]",$S)."]";}function
table($S){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$Ba=$o->credentials();if($g->connect($Ba[0],$Ba[1],$Ba[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($j,$s,$M,$L=0,$Pa=" "){return(isset($M)?" TOP (".($M+$L).")":"")." $j$s";}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$Y){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($t));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($_){global$g;$c=array();foreach($_
as$t){$g->select_db($t);$c[$t]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return$E["Engine"]=="VIEW";}function
fk_support($E){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$z=$a["type"];$W=(ereg("char|binary",$z)?$a["max_length"]:($z=="decimal"?"$a[precision],$a[scale]":""));$c[$a["name"]]=array("field"=>$a["name"],"full_type"=>$z.($W?"($W)":""),"type"=>$z,"length"=>$W,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$H)as$a){$c[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$c[$a["name"]]["lengths"]=array();$c[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($f))));}function
collations(){$c=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$U){$c[ereg_replace("_.*","",$U)][]=$U;}return$c;}function
information_schema($t){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).(eregi('^[a-z0-9_]+$',$U)?" COLLATE $U":""));}function
drop_databases($_){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$_)));}function
rename_database($f,$U){if(eregi('^[a-z0-9_]+$',$U)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $U");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($h,$f,$p,$Ha,$_a,$xb,$U,$Ua,$qb){$u=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$u["DROP"][]=" COLUMN $C";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$u["ADD"][]="\n  ".implode("",$b).($h==""?substr($Ha[$b[0]],16+strlen($b[0])):"");}else{unset($b[6]);if($C!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$C").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$u["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$u["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}if($Ha){$u[""]=$Ha;}foreach($u
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $e".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$u){$x=array();$Ca=array();foreach($u
as$b){if($b[2]){if($b[0]=="PRIMARY"){$Ca[]=$b[1];}else{$x[]="$b[1] ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE".($b[0]!="INDEX"?" UNIQUE":"")." INDEX ".idf_escape(uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[1]")){return
false;}}return(!$x||queries("DROP INDEX ".implode(", ",$x)))&&(!$Ca||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ca)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Ja){$na=array();$s=array();foreach($r
as$e=>$b){$na[]="$e = $b";if(isset($Ja[idf_unescape($e)])){$s[]="$e = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$r).")) AS source (c".implode(", c",range(1,count($r))).") ON ".implode(" AND ",$s)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$na)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$j){$g->query("SET SHOWPLAN_ALL ON");$c=$g->query($j);$g->query("SET SHOWPLAN_ALL OFF");return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$A=&$c[$a["FK_NAME"]];$A["table"]=$a["PKTABLE_NAME"];$A["source"][]=$a["FKCOLUMN_NAME"];$A["target"][]=$a["PKCOLUMN_NAME"];}return$c;}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ca){return
apply_queries("ALTER SCHEMA ".idf_escape($ca)." TRANSFER",array_merge($D,$X));}function
trigger($f){$G=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$c=reset($G);if($c){$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);}return$c;}function
triggers($h){$c=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$c[$a["name"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Ia){return
true;}function
use_sql($fa){return"USE ".idf_escape($fa);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($tb){return
ereg('^(scheme|trigger|view|drop_col)$',$tb);}$v="mssql";$Q=array();$Ka=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Dátum a čas'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Reťazce'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binárne'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$Q+=$b;$Ka[$e]=array_keys($b);}$kb=array();$fc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Z=array("len","lower","round","upper");$ib=array("avg","count","count distinct","max","min","sum");$Ob=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ka=array("server"=>"MySQL")+$ka;if(!defined("DRIVER")){$nc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($F,$O,$T){mysqli_report(MYSQLI_REPORT_OFF);list($hf,$cd)=explode(":",$F,2);$c=@$this->real_connect(($F!=""?$hf:ini_get("mysqli.default_host")),("$F$O"!=""?$O:ini_get("mysqli.default_user")),("$F$O$T"!=""?$T:ini_get("mysqli.default_pw")),null,(is_numeric($cd)?$cd:ini_get("mysqli.default_port")),(!is_numeric($cd)?$cd:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($j,$d=0){$i=$this->query($j);if(!$i){return
false;}$a=$i->fetch_array();return$a[$d];}function
quote($J){return"'".$this->escape_string($J)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($F,$O,$T){$this->_link=@mysql_connect(($F!=""?$F:ini_get("mysql.default_host")),("$F$O"!=""?$O:ini_get("mysql.default_user")),("$F$O$T"!=""?$T:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($J){return"'".mysql_real_escape_string($J,$this->_link)."'";}function
select_db($fa){return
mysql_select_db($fa,$this->_link);}function
query($j,$Ya=false){$i=@($Ya?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$i){$this->error=mysql_error($this->_link);return
false;}if($i===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($i);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$i=$this->query($j);if(!$i||!$i->num_rows){return
false;}return
mysql_result($i->_result,0,$d);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($i){$this->_result=$i;$this->num_rows=mysql_num_rows($i);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result,$this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($F,$O,$T){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$F)),$O,$T);$this->query("SET NAMES utf8");return
true;}function
select_db($fa){return$this->query("USE ".idf_escape($fa));}function
query($j,$Ya=false){$this->setAttribute(1000,!$Ya);return
parent::query($j,$Ya);}}}function
idf_escape($S){return"`".str_replace("`","``",$S)."`";}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$Ba=$o->credentials();if($g->connect($Ba[0],$Ba[1],$Ba[2])){$g->query("SET SQL_QUOTE_SHOW_CREATE=1");return$g;}return$g->error;}function
get_databases($ef=true){$c=&get_session("dbs");if(!isset($c)){if($ef){restart_session();ob_flush();flush();}$c=get_vals("SHOW DATABASES");}return$c;}function
limit($j,$s,$M,$L=0,$Pa=" "){return" $j$s".(isset($M)?$Pa."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($j,$s){return
limit($j,$s,1);}function
db_collation($t,$Y){global$g;$c=null;$ja=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1);if(preg_match('~ COLLATE ([^ ]+)~',$ja,$l)){$c=$l[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ja,$l)){$c=$Y[$l[1]][0];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$c[]=$a["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$c=array();foreach($_
as$t){$c[$t]=count(get_vals("SHOW TABLES IN ".idf_escape($t)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($E){return!isset($E["Rows"]);}function
fk_support($E){return($E["Engine"]=="InnoDB");}function
fields($h){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$l);$c[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$l[1],"length"=>$l[2],"unsigned"=>ltrim($l[3].$l[4]),"default"=>($a["Default"]!=""||ereg("char",$l[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$l)?$l[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$c;}function
indexes($h,$H=null){global$g;if(!is_object($H)){$H=$g;}$c=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$H)as$a){$c[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$c[$a["Key_name"]]["columns"][]=$a["Column_name"];$c[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$c;}function
foreign_keys($h){global$g,$bb;static$aa='`(?:[^`]|``)+`';$c=array();$Se=$g->result("SHOW CREATE TABLE ".table($h),1);if($Se){preg_match_all("~CONSTRAINT ($aa) FOREIGN KEY \\(((?:$aa,? ?)+)\\) REFERENCES ($aa)(?:\\.($aa))? \\(((?:$aa,? ?)+)\\)(?: ON DELETE (".implode("|",$bb)."))?(?: ON UPDATE (".implode("|",$bb)."))?~",$Se,$sa,PREG_SET_ORDER);foreach($sa
as$l){preg_match_all("~$aa~",$l[2],$Fa);preg_match_all("~$aa~",$l[5],$ca);$c[idf_unescape($l[1])]=array("db"=>idf_unescape($l[4]!=""?$l[3]:$l[4]),"table"=>idf_unescape($l[4]!=""?$l[4]:$l[3]),"source"=>array_map('idf_unescape',$Fa[0]),"target"=>array_map('idf_unescape',$ca[0]),"on_delete"=>$l[6],"on_update"=>$l[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$a){$c[$a["Charset"]][]=$a["Collation"];}ksort($c);foreach($c
as$e=>$b){sort($c[$e]);}return$c;}function
information_schema($t){global$g;return($g->server_info>=5&&$t=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($t,$U){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($t).($U?" COLLATE ".q($U):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){if(create_database($f,$U)){$Ub=array();foreach(tables_list()as$h=>$z){$Ub[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$Ub||queries("RENAME TABLE ".implode(", ",$Ub))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$kd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$x){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$x["columns"],true)){$kd="";break;}if($x["type"]=="PRIMARY"){$kd=" UNIQUE";}}}return" AUTO_INCREMENT$kd";}function
alter_table($h,$f,$p,$Ha,$_a,$xb,$U,$Ua,$qb){$u=array();foreach($p
as$d){$u[]=($d[1]?($h!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($h!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$u=array_merge($u,$Ha);$Sb="COMMENT=".q($_a).($xb?" ENGINE=".q($xb):"").($U?" COLLATE ".q($U):"").($Ua!=""?" AUTO_INCREMENT=$Ua":"").$qb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$u)."\n) $Sb");}if($h!=$f){$u[]="RENAME TO ".table($f);}$u[]=$Sb;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$u));}function
alter_indexes($h,$u){foreach($u
as$e=>$b){$u[$e]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($h).implode(",",$u));}function
truncate_tables($D){return
apply_queries("TRUNCATE TABLE",$D);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($D){return
queries("DROP TABLE ".implode(", ",array_map('table',$D)));}function
move_tables($D,$X,$ca){$Ub=array();foreach(array_merge($D,$X)as$h){$Ub[]=table($h)." TO ".idf_escape($ca).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$Ub));}function
copy_tables($D,$X,$ca){foreach($D
as$h){$f=($ca==DB?table("copy_$h"):idf_escape($ca).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($X
as$h){$f=($ca==DB?table("copy_$h"):idf_escape($ca).".".table($h));$Wb=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Wb[select]")){return
false;}}return
true;}function
trigger($f){$G=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($G);}function
triggers($h){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$c[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){global$g,$Ab,$bc,$Q;$qf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Me="((".implode("|",array_merge(array_keys($Q),$qf)).")(?:\\s*\\(((?:[^'\")]*|$Ab)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$aa="\\s*(".($z=="FUNCTION"?"":implode("|",$bc)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Me";$ja=$g->result("SHOW CREATE $z ".idf_escape($f),2);preg_match("~\\(((?:$aa\\s*,?)*)\\)".($z=="FUNCTION"?"\\s*RETURNS\\s+$Me":"")."\\s*(.*)~is",$ja,$l);$p=array();preg_match_all("~$aa\\s*,?~is",$l[1],$sa,PREG_SET_ORDER);foreach($sa
as$Za){$f=str_replace("``","`",$Za[2]).$Za[3];$p[]=array("field"=>$f,"type"=>strtolower($Za[5]),"length"=>preg_replace_callback("~$Ab~s",'normalize_enum',$Za[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Za[8] $Za[7]"))),"full_type"=>$Za[4],"inout"=>strtoupper($Za[1]),"collation"=>strtolower($Za[9]),);}if($z!="FUNCTION"){return
array("fields"=>$p,"definition"=>$l[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$l[12],"length"=>$l[13],"unsigned"=>$l[15],"collation"=>$l[16]),"definition"=>$l[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
insert_update($h,$r,$Ja){foreach($r
as$e=>$b){$r[$e]="$e = $b";}$na=implode(", ",$r);return
queries("INSERT INTO ".table($h)." SET $na ON DUPLICATE KEY UPDATE $na");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$j){return$g->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ia){return
true;}function
create_sql($h,$Ua){global$g;$c=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Ua){$c=preg_replace('~ AUTO_INCREMENT=\\d+~','',$c);}return$c;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($fa){return"USE ".idf_escape($fa);}function
trigger_sql($h,$V){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$c.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($tb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$tb);}$v="sql";$Q=array();$Ka=array();foreach(array('Čísla'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Dátum a čas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Reťazce'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binárne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Zoznamy'=>array("enum"=>65535,"set"=>64),)as$e=>$b){$Q+=$b;$Ka[$e]=array_keys($b);}$kb=array("unsigned","zerofill","unsigned zerofill");$fc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Z=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$ib=array("avg","count","count distinct","group_concat","max","min","sum");$Ob=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$uc="3.2.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){global$ka;echo'<table cellspacing="0">
<tr><th>Systém<td>',html_select("driver",$ka,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'">
<tr><th>Používateľ<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Heslo<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Prihlásiť sa'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Trvalé prihlásenie')."\n";}function
login($Pf,$T){return
true;}function
tableName($dd){return
h($dd["Name"]);}function
fieldName($d,$ab=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($dd,$r=""){echo'<p class="tabs">';$La=array("select"=>'Vypísať dáta',"table"=>'Zobraziť štruktúru');if(is_view($dd)){$La["view"]='Zmeniť pohľad';}else{$La["create"]='Zmeniť tabuľku';}if(isset($r)){$La["edit"]='Nová položka';}foreach($La
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($dd["Name"]).($e=="edit"?$r:"")."'".bold(isset($_GET[$e])).">$b</a>";}echo"\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$Vf){return
array();}function
backwardKeysPrint($Sf,$a){}function
selectQuery($j){global$v;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Posledná stránka'."'>&gt;&gt;</a> <code class='jush-$v'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upraviť'."</a>\n";}function
rowDescription($h){return"";}function
rowDescriptions($G,$Df){return$G;}function
selectVal($b,$w,$d){$c=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$c=lang(array('%d bajt','%d bajty','%d bajtov'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($w?"<a href='$w'>$c</a>":$c);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($P,$B){global$Z,$ib;print_fieldset("select",'Vypísať',$P);$k=0;$Ze=array('Funkcie'=>$Z,'Agregácia'=>$ib);foreach($P
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Ze,$b["fun"]),"(<select name='columns[$k][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$k++;}echo"<div>".html_select("columns[$k][fun]",array(-1=>"")+$Ze,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$k][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($s,$B,$I){print_fieldset("search",'Vyhľadať',$s);foreach($I
as$k=>$x){if($x["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$x["columns"]))."</i>) AGAINST"," <input name='fulltext[$k]' value='".h($_GET["fulltext"][$k])."'>",checkbox("boolean[$k]",1,isset($_GET["boolean"][$k]),"BOOL"),"<br>\n";}}$k=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$k][col]'><option value=''>(".'kdekoľvek'.")".optionlist($B,$b["col"],true)."</select>",html_select("where[$k][op]",$this->operators,$b["op"]),"<input name='where[$k][val]' value='".h($b["val"])."'></div>\n";$k++;}}echo"<div><select name='where[$k][col]' onchange='selectAddRow(this);'><option value=''>(".'kdekoľvek'.")".optionlist($B,null,true)."</select>",html_select("where[$k][op]",$this->operators,"="),"<input name='where[$k][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($ab,$B,$I){print_fieldset("sort",'Zotriediť',$ab);$k=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($B[$b])){echo"<div><select name='order[$k]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$k]",1,isset($_GET["desc"][$e]),'zostupne')."</div>\n";$k++;}}echo"<div><select name='order[$k]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>",checkbox("desc[$k]",1,0,'zostupne')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($M){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($M)."'>","</div></fieldset>\n";}function
selectLengthPrint($Db){if(isset($Db)){echo"<fieldset><legend>".'Dĺžka textov'."</legend><div>",'<input name="text_length" size="3" value="'.h($Db).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Akcia'."</legend><div>","<input type='submit' value='".'Vypísať'."'>","</div></fieldset>\n";}function
selectEmailPrint($Wf,$B){}function
selectColumnsProcess($B,$I){global$Z,$ib;$P=array();$oa=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$Z)||in_array($b["fun"],$ib)))){$P[$e]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$ib)){$oa[]=$P[$e];}}}return
array($P,$oa);}function
selectSearchProcess($p,$I){global$v;$c=array();foreach($I
as$k=>$x){if($x["type"]=="FULLTEXT"&&$_GET["fulltext"][$k]!=""){$c[]="MATCH (".implode(", ",array_map('idf_escape',$x["columns"])).") AGAINST (".q($_GET["fulltext"][$k]).(isset($_GET["boolean"][$k])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Fb=" $b[op]";if(ereg('IN$',$b["op"])){$Mb=process_length($b["val"]);$Fb.=" (".($Mb!=""?$Mb:"NULL").")";}elseif(!$b["op"]){$Fb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$Fb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Fb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$c[]=idf_escape($b["col"]).$Fb;}else{$ob=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$ob[]=($v=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$c[]=($ob?"(".implode("$Fb OR ",$ob)."$Fb)":"0");}}}return$c;}function
selectOrderProcess($p,$I){$c=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$c[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$c;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($s,$Df){return
false;}function
messageQuery($j){global$v;static$Ec=0;restart_session();$R="sql-".($Ec++);$Xa=&get_session("queries");$Xa[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$R' onclick=\"return !toggle('$R');\">".'SQL príkaz'."</a><div id='$R' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Xa[$_GET["db"]])-1)).'">'.'Upraviť'.'</a></div>';}function
editFunctions($d){global$Ob;$c=($d["null"]?"NULL/":"");foreach($Ob
as$e=>$Z){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($Z
as$aa=>$b){if(!$aa||ereg($aa,$d["type"])){$c.="/$b";}}}}return
explode("/",$c);}function
editInput($h,$d,$Ta,$q){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ta value='-1' checked><i>".'originál'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ta value=''".(isset($q)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ta,$d,$q,0);}return"";}function
processInput($d,$q,$N=""){$f=$d["field"];$c=($d["type"]=="bit"&&ereg('^[0-9]+$',$q)?$q:q($q));if(ereg('^(now|getdate|uuid)$',$N)){$c="$N()";}elseif(ereg('^current_(date|timestamp)$',$N)){$c=$N;}elseif(ereg('^([+-]|\\|\\|)$',$N)){$c=idf_escape($f)." $N $c";}elseif(ereg('^[+-] interval$',$N)){$c=idf_escape($f)." $N ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$q)?$q:$c);}elseif(ereg('^(addtime|subtime|concat)$',$N)){$c="$N(".idf_escape($f).", $c)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$N)){$c="$N($c)";}if(ereg("binary",$d["type"])){$c="unhex($c)";}return$c;}function
dumpOutput(){$c=array('text'=>'otvoriť','file'=>'uložiť');if(function_exists('gzencode')){$c['gz']='gzip';}if(function_exists('bzcompress')){$c['bz2']='bzip2';}return$c;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($h,$V,$Zc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($h)));}}elseif($V){$ja=create_sql($h,$_POST["auto_increment"]);if($ja){if($V=="DROP+CREATE"){echo"DROP ".($Zc?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($Zc){$ja=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$ja);}echo($V!="CREATE+ALTER"?$ja:($Zc?substr_replace($ja," OR REPLACE",6,0):substr_replace($ja," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$Zc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$Kb="";foreach(get_rows($j)as$a){$ya=$a["COLUMN_DEFAULT"];$a["default"]=(isset($ya)?q($ya):"NULL");$a["after"]=q($Kb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($ya)?" DEFAULT ".($ya=="CURRENT_TIMESTAMP"?$ya:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Kb?" AFTER ".idf_escape($Kb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$Kb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($p
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', '');
					IF NOT (_column_default <=> $a[default]) OR _is_nullable != '$a[IS_NULLABLE]' OR _collation_name != '$a[COLLATION_NAME]' OR _column_type != ".q($a["COLUMN_TYPE"])." OR _extra != '$a[EXTRA]' OR _column_comment != ".q($a["COLUMN_COMMENT"])." OR after != $a[after] THEN
						SET @alter_table = CONCAT(@alter_table, ', MODIFY $a[alter]');
					END IF;";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($h,$V,$j){global$g,$v;$fe=($v=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}if($_POST["format"]=="sql"){$p=fields($h);}$i=$g->query($j,1);if($i){$mc="";$hb="";while($a=$i->fetch_assoc()){if($_POST["format"]!="sql"){if($V=="table"){dump_csv(array_keys($a));$V="INSERT";}dump_csv($a);}else{if(!$mc){$mc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$p[$e]["type"])?$b:q($b)):"NULL");}$ma=implode(",\t",$a);if($V=="INSERT+UPDATE"){$r=array();foreach($a
as$e=>$b){$r[]=idf_escape($e)." = $b";}echo"$mc ($ma) ON DUPLICATE KEY UPDATE ".implode(", ",$r).";\n";}else{$ma=($fe?"\n":" ")."($ma)";if(!$hb){$hb=$mc.$ma;}elseif(strlen($hb)+2+strlen($ma)<$fe){$hb.=",$ma";}else{$hb.=";\n";echo$hb;$hb=$mc.$ma;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$hb){$hb.=";\n";echo$hb;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$g->error)."\n";}}}function
dumpHeaders($ad,$Bd=false){$Oa=$_POST["output"];$Rb=($_POST["format"]=="sql"?"sql":($Bd?"tar":"csv"));header("Content-Type: ".($Oa=="bz2"?"application/x-bzip":($Oa=="gz"?"application/x-gzip":($Rb=="tar"?"application/x-tar":($Rb=="sql"||$Oa!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Oa=="bz2"){ob_start('bzcompress',1e6);}if($Oa=="gz"){ob_start('gzencode',1e6);}return$Rb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Zmeniť databázu'."</a>\n":"");if(support("scheme")){echo"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Pozmeniť schému':'Vytvoriť schému')."</a>\n";}return
true;}function
navigation($cc){global$uc,$g,$K,$v,$ka;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$uc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($uc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($cc=="auth"){$Aa=true;foreach((array)$_SESSION["pwds"]as$Gb=>$Nf){foreach($Nf
as$F=>$Gf){foreach($Gf
as$O=>$T){if(isset($T)){if($Aa){echo"<p onclick='eventStop(event);'>\n";$Aa=false;}echo"<a href='".h(auth_url($Gb,$F,$O))."'>($ka[$Gb]) ".h($O.($F!=""?"@$F":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$cc){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL príkaz'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}}echo'<input type="hidden" name="token" value="',$K,'">
<input type="submit" name="logout" value="Odhlásiť" onclick="eventStop(event);">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'databáza'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Vybrať"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($cc!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'schéma'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""&&!$cc){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Vytvoriť novú tabuľku'."</a>\n";$D=tables_list();if(!$D){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{$this->tablesPrint($D);$La=array();foreach($D
as$h=>$z){$La[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$La).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$v;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($D){echo"<p id='tables'>\n";foreach($D
as$h=>$z){echo'<a href="'.h(ME).'select='.urlencode($h).'"'.bold($_GET["select"]==$h).">".'vypísať'."</a> ",'<a href="'.h(ME).'table='.urlencode($h).'"'.bold($_GET["table"]==$h).">".$this->tableName(array("Name"=>$h))."</a><br>\n";}}}$o=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($o->operators)){$o->operators=$fc;}function
page_header($xe,$n="",$yc=array(),$re=""){global$cf,$o,$g,$ka;header("Content-Type: text/html; charset=utf-8");$o->headers();$le=$xe.($re!=""?": ".h($re):"");$Xe=$le.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$o->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Xe));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="sk" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Xe,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$Gd');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.0",'"></script>

<div id="content">
';}if(isset($yc)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($w?h($w):".").'">'.$ka[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$F=(SERVER!=""?h(SERVER):'Server');if($yc===false){echo"$F\n";}else{echo"<a href='".($w?h($w):".")."'>$F</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($yc))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($yc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($yc
as$e=>$b){$_c=(is_array($b)?$b[1]:$b);if($_c!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($_c).'</a> &raquo; ';}}}echo"$xe\n";}}echo"<h2>$le</h2>\n";restart_session();$ie=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$qe=$_SESSION["messages"][$ie];if($qe){echo"<div class='message'>".implode("</div>\n<div class='message'>",$qe)."</div>\n";unset($_SESSION["messages"][$ie]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($n){echo"<div class='error'>$n</div>\n";}define("PAGE_HEADER",1);}function
page_footer($cc=""){global$o;if(!is_ajax()){echo'</div>

<div id="menu">
';$o->navigation($cc);echo'</div>
';}}function
int32($ga){while($ga>=2147483648){$ga-=4294967296;}while($ga<=-2147483649){$ga+=4294967296;}return(int)$ga;}function
long2str($y,$Id){$ma='';foreach($y
as$b){$ma.=pack('V',$b);}if($Id){return
substr($ma,0,end($y));}return$ma;}function
str2long($ma,$Id){$y=array_values(unpack('V*',str_pad($ma,4*ceil(strlen($ma)/4),"\0")));if($Id){$y[]=strlen($ma);}return$y;}function
xxtea_mx($za,$va,$Ea,$Na){return
int32((($za>>5&0x7FFFFFF)^$va<<2)+(($va>>3&0x1FFFFFFF)^$za<<4))^int32(($Ea^$va)+($Na^$za));}function
encrypt_string($tc,$e){if($tc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($tc,true);$ga=count($y)-1;$za=$y[$ga];$va=$y[0];$la=floor(6+52/($ga+1));$Ea=0;while($la-->0){$Ea=int32($Ea+0x9E3779B9);$wc=$Ea>>2&3;for($wa=0;$wa<$ga;$wa++){$va=$y[$wa+1];$Lb=xxtea_mx($za,$va,$Ea,$e[$wa&3^$wc]);$za=int32($y[$wa]+$Lb);$y[$wa]=$za;}$va=$y[0];$Lb=xxtea_mx($za,$va,$Ea,$e[$wa&3^$wc]);$za=int32($y[$ga]+$Lb);$y[$ga]=$za;}return
long2str($y,false);}function
decrypt_string($tc,$e){if($tc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($tc,false);$ga=count($y)-1;$za=$y[$ga];$va=$y[0];$la=floor(6+52/($ga+1));$Ea=int32($la*0x9E3779B9);while($Ea){$wc=$Ea>>2&3;for($wa=$ga;$wa>0;$wa--){$za=$y[$wa-1];$Lb=xxtea_mx($za,$va,$Ea,$e[$wa&3^$wc]);$va=int32($y[$wa]-$Lb);$y[$wa]=$va;}$za=$y[$ga];$Lb=xxtea_mx($za,$va,$Ea,$e[$wa&3^$wc]);$va=int32($y[0]-$Lb);$y[0]=$va;$Ea=int32($Ea-0x9E3779B9);}return
long2str($y,true);}$g='';$K=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Bb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$Bb[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Dc=$o->permanentLogin();$Bb[$e]="$e:".base64_encode($Dc?encrypt_string($_POST["password"],$Dc):"");cookie("adminer_permanent",implode(" ",$Bb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($K&&$_POST["token"]!=$K){page_header('Odhlásiť','Neplatný token CSRF. Odošlite formulár znova.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Bb[$e]){unset($Bb[$e]);cookie("adminer_permanent",implode(" ",$Bb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Odhlásenie prebehlo v poriadku.');}}elseif($Bb&&!$_SESSION["pwds"]){session_regenerate_id();$Dc=$o->permanentLogin();foreach($Bb
as$e=>$b){list(,$Cf)=explode(":",$b);list($Gb,$F,$O)=array_map('base64_decode',explode("-",$e));$_SESSION["pwds"][$Gb][$F][$O]=decrypt_string(base64_decode($Cf),$Dc);}}function
auth_error($Nd=null){global$g,$o,$K;$Xc=session_name();$n="";if(!$_COOKIE[$Xc]&&$_GET[$Xc]&&ini_bool("session.use_only_cookies")){$n='Session premenné musia byť povolené.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Xc]||$_GET[$Xc])&&!$K){$n='Session vypršala, prihláste sa prosím znova.';}else{$T=&get_session("pwds");if(isset($T)){$n=h($Nd?$Nd->getMessage():(is_string($g)?$g:'Neplatné prihlasovacie údaje.'));$T=null;}}}page_header('Prihlásiť sa',$n,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$o->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Žiadne rozšírenie',sprintf('Nie je dostupné žiadne z podporovaných rozšírení (%s).',implode(", ",$nc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$o->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$K=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$K;}$n=($_POST?($_POST["token"]==$K?"":'Neplatný token CSRF. Odošlite formulár znova.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','"post_max_size"')));function
connect_error(){global$g,$K,$n,$ka;$_=array();if(DB!=""){page_header('Databáza'.": ".h(DB),'Nesprávna databáza.',true);}else{if($_POST["db"]&&!$n){queries_redirect(substr(ME,0,-1),'Databázy boli odstránené.',drop_databases($_POST["db"]));}page_header('Vybrať databázu',$n,false);echo"<p><a href='".h(ME)."database='>".'Vytvoriť novú databázu'."</a>\n";foreach(array('privileges'=>'Oprávnenia','processlist'=>'Zoznam procesov','variables'=>'Premenné','status'=>'Stav',)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".sprintf('Verzia %s: %s cez PHP rozšírenie %s',$ka[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Prihlásený ako: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$hd=support("scheme");$Y=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$K'>&nbsp;<th>".'Databáza'."<td>".'Porovnávanie'."<td>".'Tabuľky'."</thead>\n";foreach($_
as$t){$Hd=h(ME)."db=".urlencode($t);echo"<tr".odd()."><td>".checkbox("db[]",$t,in_array($t,(array)$_POST["db"])),"<th><a href='$Hd'>".h($t)."</a>","<td><a href='$Hd".($hd?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($t,$Y))."</a>","<td align='right'><a href='$Hd&amp;schema=' id='tables-".h($t)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Odstrániť'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Obnoviť'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"])){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}if(!set_schema($_GET["ns"])){page_header('Schéma'.": ".h($_GET["ns"]),'Neplatné schéma.',true);page_footer("ns");exit;}}function
select($i,$H=null,$be=""){$La=array();$I=array();$B=array();$Be=array();$Q=array();odd('');for($k=0;$a=$i->fetch_row();$k++){if(!$k){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($pa=0;$pa<count($a);$pa++){$d=$i->fetch_field();$Da=$d->orgtable;$jc=$d->orgname;if($Da!=""){if(!isset($I[$Da])){$I[$Da]=array();foreach(indexes($Da,$H)as$x){if($x["type"]=="PRIMARY"){$I[$Da]=array_flip($x["columns"]);break;}}$B[$Da]=$I[$Da];}if(isset($B[$Da][$jc])){unset($B[$Da][$jc]);$I[$Da][$jc]=$pa;$La[$pa]=$Da;}}if($d->charsetnr==63){$Be[$pa]=true;}$Q[$pa]=$d->type;$f=h($d->name);echo"<th".($Da!=""||$d->name!=$jc?" title='".h(($Da!=""?"$Da.":"").$jc)."'":"").">".($be?"<a href='$be".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($Be[$e]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtov'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($Q[$e]==254){$b="<code>$b</code>";}}if(isset($La[$e])&&!$B[$La[$e]]){$w="edit=".urlencode($La[$e]);foreach($I[$La[$e]]as$Wc=>$pa){$w.="&where".urlencode("[".bracket_escape($Wc)."]")."=".urlencode($a[$pa]);}$b="<a href='".h(ME.$w)."'>$b</a>";}}echo"<td>$b";}}echo($k?"</table>":"<p class='message'>".'Žiadne riadky.')."\n";}function
referencable_primary($Ff){$c=array();foreach(table_status()as$Ga=>$h){if($Ga!=$Ff&&fk_support($h)){foreach(fields($Ga)as$d){if($d["primary"]){if($c[$Ga]){unset($c[$Ga]);break;}$c[$Ga]=$d;}}}}return$c;}function
textarea($f,$q,$G=10,$ob=80){echo"<textarea name='$f' rows='$G' cols='$ob' style='width: 98%;' spellcheck='false' wrap='off' onkeypress='return textareaKeypress(this, event, true);'>";if(is_array($q)){foreach($q
as$b){echo
h($b).";\n\n\n";}}else{echo
h($q);}echo"</textarea>";}function
format_time($hc,$lc){return" <span class='time'>(".sprintf('%.3f s',max(0,$lc[0]-$hc[0]+$lc[1]-$hc[1])).")</span>";}function
edit_type($e,$d,$Y,$da=array()){global$Ka,$Q,$kb,$bb;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($Q[$d["type"]])?array():array($d["type"]))+$Ka+($da?array('Cudzie kľúče'=>$da):array()),$d["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porovnávanie'.')'.optionlist($Y,$d["collation"]).'</select>',($kb?"<select name='$e"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($kb,$d["unsigned"]).'</select>':''),($da?"<select name='$e"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($bb,$d["on_delete"])."</select> ":" ");}function
process_length($W){global$Ab;return(preg_match("~^\\s*(?:$Ab)(?:\\s*,\\s*(?:$Ab))*\\s*\$~",$W)&&preg_match_all("~$Ab~",$W,$sa)?implode(",",$sa[0]):preg_replace('~[^0-9,+-]~','',$W));}function
process_type($d,$kc="COLLATE"){global$kb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$kb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $kc ".q($d["collation"]):"");}function
process_field($d,$Rc){return
array(idf_escape($d["field"]),process_type($Rc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($z){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$z)){return" class='$e'";}}}function
edit_fields($p,$Y,$z="TABLE",$ce=0,$da=array(),$Nb=false){global$bc;foreach($p
as$d){if($d["comment"]!=""){$Nb=true;break;}}echo'<thead><tr class="wrap">
';if($z=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($z=="TABLE"?'Názov stĺpca':'Názov parametra'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Dĺžka
<td>Voľby
';if($z=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td class="hidden">Východzie hodnoty
',(support("comment")?"<td".($Nb?"":" class='hidden'").">".'Komentár':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Pridať ďalší'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$k=>$d){$k++;$ld=$d[($_POST?"orig":"field")];$Ne=(isset($_POST["add"][$k-1])||(isset($d["field"])&&!$_POST["drop_col"][$k]))&&(support("drop_col")||$ld=="");echo'<tr',($Ne?"":" style='display: none;'"),'>
',($z=="PROCEDURE"?"<td>".html_select("fields[$k][inout]",$bc,$d["inout"]):""),'<th>';if($Ne){echo'<input name="fields[',$k,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $ce); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$k,'][orig]" value="',h($ld),'">
';edit_type("fields[$k]",$d,$Y,$da);if($z=="TABLE"){echo'<td>',checkbox("fields[$k][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$k,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$k][has_default]",1,$d["has_default"]),'<input name="fields[',$k,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Nb?"":" class='hidden'")."><input name='fields[$k][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Pridať ďalší'."' onclick='return !editingAddRow(this, $ce, 1);'>&nbsp;"."<input type='image' name='up[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.2.0' alt='^' title='".'Presunúť hore'."'>&nbsp;"."<input type='image' name='down[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.2.0' alt='v' title='".'Presunúť dolu'."'>&nbsp;":""),($ld==""||support("drop_col")?"<input type='image' name='drop_col[$k]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.0' alt='x' title='".'Odobrať'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$Nb;}function
process_fields(&$p){ksort($p);$L=0;if($_POST["up"]){$rb=0;foreach($p
as$e=>$d){if(key($_POST["up"])==$e){unset($p[$e]);array_splice($p,$rb,0,array($d));break;}if(isset($d["field"])){$rb=$L;}$L++;}}if($_POST["down"]){$qa=false;foreach($p
as$e=>$d){if(isset($d["field"])&&$qa){unset($p[key($_POST["down"])]);array_splice($p,$L,0,array($qa));break;}if(key($_POST["down"])==$e){$qa=$d;}$L++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($l){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($l[0][0].$l[0][0],$l[0][0],substr($l[0],1,-1))),'\\'))."'";}function
grant($ia,$ra,$B,$zb){if(!$ra){return
true;}if($ra==array("ALL PRIVILEGES","GRANT OPTION")){return($ia=="GRANT"?queries("$ia ALL PRIVILEGES$zb WITH GRANT OPTION"):queries("$ia ALL PRIVILEGES$zb")&&queries("$ia GRANT OPTION$zb"));}return
queries("$ia ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$ra).$B).$zb);}function
drop_create($Ca,$ja,$ea,$Pe,$tf,$kf,$f){if($_POST["drop"]){return
query_redirect($Ca,$ea,$Pe,true,!$_POST["dropped"]);}$eb=$f!=""&&($_POST["dropped"]||queries($Ca));$uf=queries($ja);if(!queries_redirect($ea,($f!=""?$tf:$kf),$uf)&&$eb){redirect(null,$Pe);}return$eb;}function
tar_file($ha,$jd){$c=pack("a100a8a8a8a12a12",$ha,644,0,0,decoct(strlen($jd)),decoct(time()));$Qe=8*32;for($k=0;$k<strlen($c);$k++){$Qe+=ord($c{$k});}$c.=sprintf("%06o",$Qe)."\0 ";return$c.str_repeat("\0",512-strlen($c)).$jd.str_repeat("\0",511-(strlen($jd)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$bb=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Ab="'(?:''|[^'\\\\]|\\\\.)*+'";$bc=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$p=fields($m);if(!$p){$n=error();}$E=($p?table_status($m):array());page_header(($p&&is_view($E)?'Pohľad':'Tabuľka').": ".h($m),$n);$o->selectLinks($E);$_a=$E["Comment"];if($_a!=""){echo"<p>".'Komentár'.": ".h($_a)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Stĺpec'."<td>".'Typ'.(support("comment")?"<td>".'Komentár':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($E)){echo"<h3>".'Indexy'."</h3>\n";$I=indexes($m);if($I){echo"<table cellspacing='0'>\n";foreach($I
as$f=>$x){ksort($x["columns"]);$pb=array();foreach($x["columns"]as$e=>$b){$pb[]="<i>".h($b)."</i>".($x["lengths"][$e]?"(".$x["lengths"][$e].")":"");}echo"<tr title='".h($f)."'><th>$x[type]<td>".implode(", ",$pb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.'Zmeniť indexy'."</a>\n";if(fk_support($E)){echo"<h3>".'Cudzie kľúče'."</h3>\n";$da=foreign_keys($m);if($da){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Zdroj'."<td>".'Cieľ'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($da
as$f=>$A){$w=($A["db"]!=""?"<b>".h($A["db"])."</b>.":"").h($A["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$A["source"]))."</i>","<td><a href='".h($A["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($A["db"]),ME):ME)."table=".urlencode($A["table"])."'>$w</a>","(<i>".implode("</i>, <i>",array_map('h',$A["target"]))."</i>)","<td>$A[on_delete]\n","<td>$A[on_update]\n";if($v!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.'Zmeniť'.'</a>';}}echo"</table>\n";}if($v!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.'Pridať cudzí kľúč'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggery'."</h3>\n";$ic=triggers($m);if($ic){echo"<table cellspacing='0'>\n";foreach($ic
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".'Zmeniť'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.'Pridať trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schéma databázy',"",array(),DB);$ub=array();$Re=array();$f="adminer_schema";preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]),$sa,PREG_SET_ORDER);foreach($sa
as$k=>$l){$ub[$l[1]]=array($l[2],$l[3]);$Re[]="\n\t'".js_escape($l[1])."': [ $l[2], $l[3] ]";}$Xb=0;$Le=-1;$Ia=array();$Ke=array();$Ee=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$rc=0;$Ia[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$rc+=1.25;$d["pos"]=$rc;$Ia[$a["Name"]]["fields"][$f]=$d;}$Ia[$a["Name"]]["pos"]=($ub[$a["Name"]]?$ub[$a["Name"]]:array($Xb,0));foreach($o->foreignKeys($a["Name"])as$b){if(!$b["db"]){$xa=$Le;if($ub[$a["Name"]][1]||$ub[$b["table"]][1]){$xa=min(floatval($ub[$a["Name"]][1]),floatval($ub[$b["table"]][1]))-1;}else{$Le-=.1;}while($Ee[(string)$xa]){$xa-=.0001;}$Ia[$a["Name"]]["references"][$b["table"]][(string)$xa]=array($b["source"],$b["target"]);$Ke[$b["table"]][$a["Name"]][(string)$xa]=$b["target"];$Ee[(string)$xa]=true;}}$Xb=max($Xb,$Ia[$a["Name"]]["pos"][0]+2.5+$rc);}echo'<div id="schema" style="height: ',$Xb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Re)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Xb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Ia
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Tb=>$vc){foreach($vc
as$xa=>$Qc){$Bc=$xa-$ub[$f][1];$k=0;foreach($Qc[0]as$Fa){echo"<div class='references' title='".h($Tb)."' id='refs$xa-".($k++)."' style='left: $Bc"."em; top: ".$h["fields"][$Fa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Bc)."em;'></div></div>\n";}}}foreach((array)$Ke[$f]as$Tb=>$vc){foreach($vc
as$xa=>$B){$Bc=$xa-$ub[$f][1];$k=0;foreach($B
as$ca){echo"<div class='references' title='".h($Tb)."' id='refd$xa-".($k++)."' style='left: $Bc"."em; top: ".$h["fields"][$ca]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.2.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Bc)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ia
as$f=>$h){foreach((array)$h["references"]as$Tb=>$vc){foreach($vc
as$xa=>$Qc){$Pc=$Xb;$md=-10;foreach($Qc[0]as$e=>$Fa){$Fe=$h["pos"][0]+$h["fields"][$Fa]["pos"];$Ge=$Ia[$Tb]["pos"][0]+$Ia[$Tb]["fields"][$Qc[1][$e]]["pos"];$Pc=min($Pc,$Fe,$Ge);$md=max($md,$Fe,$Ge);}echo"<div class='references' id='refl$xa' style='left: $xa"."em; top: $Pc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($md-$Pc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h($_SERVER["REQUEST_URI"]),'" id="schema-link">#</a>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$Je="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$e){$Je.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($Je,1));$Rb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$wb=($_POST["format"]=="sql");if($wb){echo"-- Adminer $uc ".$ka[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$t){if($g->select_db($t)){if($wb&&ereg('CREATE',$V)&&($ja=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($t).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ja):$ja).";\n";}if($wb){if($V){echo
use_sql($t).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$nb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ra){foreach(get_rows("SHOW $Ra STATUS WHERE Db = ".q($t),null,"-- ")as$a){$nb.=($V!='DROP+CREATE'?"DROP $Ra IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Ra ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$nb.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($nb){echo"DELIMITER ;;\n\n$nb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$X=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$He=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$He){if(!is_view($a)){if($Rb=="tar"){ob_start();}$o->dumpTable($a["Name"],($h?$_POST["table_style"]:""));if($He){$o->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($wb&&$_POST["triggers"]){$ic=trigger_sql($a["Name"],$_POST["table_style"]);if($ic){echo"\nDELIMITER ;;\n$ic\nDELIMITER ;\n";}}if($Rb=="tar"){echo
tar_file((DB!=""?"":"$t/")."$a[Name].csv",ob_get_clean());}elseif($wb){echo"\n";}}elseif($wb){$X[]=$a["Name"];}}}foreach($X
as$Wb){$o->dumpTable($Wb,$_POST["table_style"],true);}if($Rb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$wb){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $j;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($j)as$a){$_a=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $_a THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$_a;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$wb){echo"SELECT @adminer_alter;\n";}}}if($wb){echo"-- ".$g->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Te=array('','USE','DROP+CREATE','CREATE');$af=array('','DROP+CREATE','CREATE');$Ye=array('','TRUNCATE+INSERT','INSERT');if($v=="sql"){$Te[]='CREATE+ALTER';$af[]='CREATE+ALTER';$Ye[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["auto_increment"]=$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Výstup'."<td>".html_select("output",$o->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Formát'."<td>".html_select("format",$o->dumpFormat(),$a["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Databáza'."<td>".html_select('db_style',$Te,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Procedúry'):"").(support("event")?checkbox("events",1,$a["events"],'Udalosti'):"")),"<tr><th>".'Tabuľky'."<td>".html_select('table_style',$af,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Triggery'):""),"<tr><th>".'Dáta'."<td>".html_select('data_style',$Ye,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$pd=array();if(DB!=""){$fb=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".'Tabuľky'."</label>","<th style='text-align: right;'><label>".'Dáta'."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$X="";foreach(table_status()as$a){$f=$a["Name"];$zc=ereg_replace("_.*","",$f);$fb=($m==""||$m==(substr($m,-1)=="%"?"$zc%":$f));$pb="<tr><td>".checkbox("tables[]",$f,$fb,$f,"formUncheck('check-tables');");if(is_view($a)){$X.="$pb\n";}else{echo"$pb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$fb,"","formUncheck('check-data');")."</label>\n";}$pd[$zc]++;}echo$X;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Databáza'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$t){if(!information_schema($t)){$zc=ereg_replace("_.*","",$t);echo"<tr><td>".checkbox("databases[]",$t,$m==""||$m=="$zc%",$t,"formUncheck('check-databases');")."</label>\n";$pd[$zc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20' onkeypress='return textareaKeypress(this, event);'></textarea>";}}echo'</table>
</form>
';$Aa=true;foreach($pd
as$e=>$b){if($e!=""&&$b>1){echo($Aa?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$Aa=false;}}}elseif(isset($_GET["privileges"])){page_header('Oprávnenia');$i=$g->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$i){echo'<form action=""><p>
';hidden_fields_get();echo'Používateľ: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Upraviť">
</form>
';$i=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Používateľ'."<th>".'Server'."</thead>\n";while($a=$i->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'upraviť'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Vytvoriť používateľa'."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$o->dumpTable("","");$o->dumpData("","table",$_POST["query"]);exit;}restart_session();$Af=&get_session("queries");$Xa=&$Af[DB];if(!$n&&$_POST["clear"]){$Xa=array();redirect(remove_from_uri("history"));}page_header('SQL príkaz',$n);if(!$n&&$_POST){$Ma=false;$j=$_POST["query"];if($_POST["webfile"]){$Ma=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Ma?fread($Ma,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$Xa||end($Xa)!=$j)){$Xa[]=$j;}$Sc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Fd=";";$L=0;$gc=true;$H=connect();if(is_object($H)&&DB!=""){$H->select_db(DB);}$_b=0;$Tc=array();$nf='[\'`"]'.($v=="pgsql"?'|\\$[^$]*\\$':($v=="mssql"||$v=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$of=explode(" ",microtime());parse_str($_COOKIE["adminer_export"],$Yb);$ve=$o->dumpFormat();unset($ve["sql"]);while($j!=""){if(!$L&&$v=="sql"&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$l)){$Fd=$l[1];$j=substr($j,strlen($l[0]));}else{preg_match('('.preg_quote($Fd)."|$nf|\$)",$j,$l,PREG_OFFSET_CAPTURE,$L);$qa=$l[0][0];$L=$l[0][1]+strlen($qa);if(!$qa&&$Ma&&!feof($Ma)){$j.=fread($Ma,1e5);}else{if(!$qa&&rtrim($j)==""){break;}if($qa&&$qa!=$Fd){while(preg_match('('.($qa=='/*'?'\\*/':($qa=='['?']':(ereg('^-- |^#',$qa)?"\n":preg_quote($qa)."|\\\\."))).'|$)s',$j,$l,PREG_OFFSET_CAPTURE,$L)){$ma=$l[0][0];$L=$l[0][1]+strlen($ma);if(!$ma&&$Ma&&!feof($Ma)){$j.=fread($Ma,1e6);}elseif($ma[0]!="\\"){break;}}}else{$gc=false;$la=substr($j,0,$l[0][1]);$_b++;$pb="<pre id='sql-$_b'><code class='jush-$v'>".shorten_utf8(trim($la),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$pb;ob_flush();flush();}$hc=explode(" ",microtime());if($g->multi_query($la)){if(is_object($H)&&preg_match("~^$Sc*(USE)\\b~isU",$la)){$H->query($la);}do{$i=$g->store_result();$lc=explode(" ",microtime());$Xd=format_time($hc,$lc).(strlen($la)<1000?" <a href='".h(ME)."sql=".urlencode(trim($la))."'>".'Upraviť'."</a>":"");if(!is_object($i)){if(preg_match("~^$Sc*(CREATE|DROP|ALTER)$Sc+(DATABASE|SCHEMA)\\b~isU",$la)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($g->info)."'>".lang(array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),$g->affected_rows)."$Xd\n";}}else{if($_POST["only_errors"]){echo$pb;$pb="";}select($i,$H);echo"<form action='' method='post'>\n","<p>".($i->num_rows?lang(array('%d riadok','%d riadky','%d riadkov'),$i->num_rows):"").$Xd;$R="export-$_b";$Wd=", <a href='#$R' onclick=\"return !toggle('$R');\">".'Export'."</a><span id='$R' class='hidden'>: ".html_select("output",$o->dumpOutput(),$Yb["output"])." ".html_select("format",$ve,$Yb["format"])." <input type='hidden' name='query' value='".h($la)."' />"." <input type='hidden' name='token' value='$K' />"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'></span>";if($H&&preg_match("~^($Sc|\\()*SELECT\\b~isU",$la)&&($pf=explain($H,$la))){$R="explain-$_b";echo", <a href='#$R' onclick=\"return !toggle('$R');\">EXPLAIN</a>$Wd\n","<div id='$R' class='hidden'>\n";select($pf,$H,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#":""));echo"</div>\n";}else{echo"$Wd\n";}echo"</form>\n";}$hc=$lc;}while($g->next_result());}elseif($g->error){echo($_POST["only_errors"]?$pb:""),"<p class='error'>".'Chyba v dotaze'.": ".error()."\n";$Tc[]=" <a href='#sql-$_b'>$_b</a>";if($_POST["error_stops"]){break;}}$j=substr($j,$L);$L=0;}}}}if($gc){echo"<p class='message'>".'Žiadne príkazy na vykonanie.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('Bol vykonaný %d dotaz.','Boli vykonané %d dotazy.','Bolo vykonaných %d dotazov.'),$_b-count($Tc)).format_time($of,explode(" ",microtime()))."\n";}elseif($Tc&&$_b>1){echo"<p class='error'>".'Chyba v dotaze'.": ".implode("",$Tc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$la=$_GET["sql"];if($_POST){$la=$_POST["query"];}elseif($_GET["history"]=="all"){$la=$Xa;}elseif($_GET["history"]!=""){$la=$Xa[$_GET["history"]];}textarea("query",$la,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Nahranie súboru'.': <input type="file" name="sql_file"> (&lt; '.ini_get("upload_max_filesize").'B)':'Nahrávánie súborov nie je povolené.');echo'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Vykonať" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Zastaviť pri chybe')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Zobraziť iba chyby')."\n";print_fieldset("webfile",'Zo serveru',$_POST["webfile"]);$qd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$qd[]=".$e";}}echo
sprintf('Súbor %s na webovom serveri',"<code>adminer.sql".($qd?"[".implode("|",$qd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Spustiť súbor'.'">',"</div></fieldset>\n";if($Xa){print_fieldset("history",'História',$_GET["history"]!="");foreach($Xa
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.'Upraviť'."</a> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Vyčistiť'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Upraviť'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$s=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$na=(isset($_GET["select"])?$_POST["edit"]:$s);$p=fields($m);foreach($p
as$f=>$d){if(!isset($d["privileges"][$na?"update":"insert"])||$o->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$ea=$_POST["referer"];if($_POST["insert"]){$ea=($na?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$ea)){$ea=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $s"),$ea,'Položka bola vymazaná.');}else{$r=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$r[idf_escape($f)]=($na?"\n".idf_escape($f)." = $b":$b);}}if($na){if(!$r){redirect($ea);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$r),"\nWHERE $s"),$ea,'Položka bola aktualizovaná.');}else{$i=insert_into($m,$r);$Vd=($i?last_id():0);queries_redirect($ea,sprintf('Položka%s bola vložená.',($Vd?" $Vd":"")),$i);}}}$Ga=$o->tableName(table_status($m));page_header(($na?'Upraviť':'Vložiť'),$n,array("select"=>array($m,$Ga)),$Ga);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($s){$P=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$P[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($P){$G=get_rows("SELECT".limit(implode(", ",$P)." FROM ".table($m)," WHERE $s",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($G)!=1?null:reset($G));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$o->fieldName($d);$ya=$_GET["set"][bracket_escape($f)];$q=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?+$a[$f]:$a[$f]):(!$na&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($ya)?$ya:$d["default"]))));if(!$_POST["save"]&&is_string($q)){$q=$o->editVal($q,$d);}$N=($_POST["save"]?(string)$_POST["function"][$f]:($s&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($q===false?null:(isset($q)?'':'NULL'))));if($d["type"]=="timestamp"&&$q=="CURRENT_TIMESTAMP"){$q="";$N="now";}input($d,$q,$N);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($p){echo"<input type='submit' value='".'Uložiť'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($na?'Uložiť a pokračovať v úpravách':'Uložiť a vložiť ďalší')."\">\n";}}echo($na?"<input type='submit' name='delete' value='".'Zmazať'."' onclick=\"return confirm('".'Naozaj?'."');\">\n":($_POST?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n")),'</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$Ud=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Yd=referencable_primary($m);$da=array();foreach($Yd
as$Ga=>$d){$da[str_replace("`","``",$Ga)."`".str_replace("`","``",$d["field"])]=$Ga;}$Fc=array();$Vc=array();if($m!=""){$Fc=fields($m);$Vc=table_status($m);}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),'Tabuľka bola odstránená.');}else{$p=array();$Ha=array();ksort($_POST["fields"]);$fd=reset($Fc);$Kb="FIRST";foreach($_POST["fields"]as$e=>$d){$A=$da[$d["type"]];$Rc=(isset($A)?$Yd[$A]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$ya=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($ya!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$ya;}if($e==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$de=process_field($d,$Rc);if($de!=process_field($fd,$fd)){$p[]=array($d["orig"],$de,$Kb);}if(isset($A)){$Ha[idf_escape($d["field"])]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($da[$d["type"]])." (".idf_escape($Rc["field"]).")".(in_array($d["on_delete"],$bb)?" ON DELETE $d[on_delete]":"");}$Kb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$fd=next($Fc);}}$qb="";if(in_array($_POST["partition_by"],$Ud)){$gd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$q=$_POST["partition_values"][$e];$gd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($q!=""?" ($q)":" MAXVALUE");}}$qb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($gd?" (".implode(",",$gd)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$qb.="\nREMOVE PARTITIONING";}$ua='Tabuľka bola zmenená.';if($m==""){cookie("adminer_engine",$_POST["Engine"]);$ua='Tabuľka bola vytvorená.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ua,alter_table($m,$_POST["name"],$p,$Ha,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Vc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Vc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$qb));}}page_header(($m!=""?'Zmeniť tabuľku':'Vytvoriť tabuľku'),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Q["int"])?"int":(isset($Q["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Vc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Fc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$ec="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$i=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $ec ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$i->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $ec AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$ed){$a["partition_names"][]=$ed["PARTITION_NAME"];$a["partition_values"][]=$ed["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$Y=collations();$od=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($od&&count($a["fields"])>$od){echo"<p class='error'>".h(sprintf('Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$Ed=engines();foreach($Ed
as$xb){if(!strcasecmp($xb,$a["Engine"])){$a["Engine"]=$xb;break;}}echo'
<form action="" method="post" id="form">
<p>
Názov tabuľky: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($m==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Ed?html_select("Engine",array(""=>"(".'úložisko'.")")+$Ed,$a["Engine"]):""),' ',($Y&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'porovnávanie'.")")+$Y,$a["Collation"]):""),' <input type="submit" value="Uložiť">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Nb=edit_fields($a["fields"],$Y,"TABLE",$od,$da,$a["Comment"]!="");echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Východzie hodnoty</label>
',(support("comment")?checkbox("","",$Nb,'Komentár',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Nb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}if(support("partitioning")){$Td=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Rozdeliť podľa',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ud,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Oddiely: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Td||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Td?"":" class='hidden'"),'>
<thead><tr><th>Názov oddielu<th>Hodnoty</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Uc=array("PRIMARY","UNIQUE","INDEX");$E=table_status($m);if(eregi("MyISAM|M?aria",$E["Engine"])){$Uc[]="FULLTEXT";}$I=indexes($m);if($v=="sqlite"){unset($Uc[0]);unset($I[""]);}if($_POST&&!$n&&!$_POST["add"]){$u=array();foreach($_POST["indexes"]as$x){if(in_array($x["type"],$Uc)){$B=array();$Zb=array();$r=array();ksort($x["columns"]);foreach($x["columns"]as$e=>$C){if($C!=""){$W=$x["lengths"][$e];$r[]=idf_escape($C).($W?"(".(+$W).")":"");$B[]=$C;$Zb[]=($W?$W:null);}}if($B){foreach($I
as$f=>$yb){ksort($yb["columns"]);ksort($yb["lengths"]);if($x["type"]==$yb["type"]&&array_values($yb["columns"])===$B&&(!$yb["lengths"]||array_values($yb["lengths"])===$Zb)){unset($I[$f]);continue
2;}}$u[]=array($x["type"],"(".implode(", ",$r).")");}}}foreach($I
as$f=>$yb){$u[]=array($yb["type"],idf_escape($f),"DROP");}if(!$u){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),'Indexy boli zmenené.',alter_indexes($m,$u));}page_header('Indexy',$n,array("table"=>$m),$m);$p=array_keys(fields($m));$a=array("indexes"=>$I);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$x){if($x["columns"][count($x["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$x=end($a["indexes"]);if($x["type"]||array_filter($x["columns"],'strlen')||array_filter($x["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$x){$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indexu<th>Stĺpec (dĺžka)</thead>
';$pa=1;foreach($a["indexes"]as$x){echo"<tr><td>".html_select("indexes[$pa][type]",array(-1=>"")+$Uc,$x["type"],($pa==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($x["columns"]);$k=1;foreach($x["columns"]as$e=>$C){echo"<span>".html_select("indexes[$pa][columns][$k]",array(-1=>"")+$p,$C,($k==count($x["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$pa][lengths][$k]' size='2' value='".h($x["lengths"][$e])."'> </span>";$k++;}$pa++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
<noscript><p><input type="submit" name="add" value="Pridať ďalší"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Databáza bola odstránená.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Databáza bola premenovaná.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$Kd=true;$rb="";foreach($_
as$t){if(count($_)==1||$t!=""){if(!create_database($t,$_POST["collation"])){$Kd=false;}$rb=$t;}}queries_redirect(ME."db=".urlencode($rb),'Databáza bola vytvorená.',$Kd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Databáza bola zmenená.');}}page_header(DB!=""?'Zmeniť databázu':'Vytvoriť databázu',$n,array(),DB);$Y=collations();$f=DB;$kc=null;if($_POST){$f=$_POST["name"];$kc=$_POST["collation"];}elseif(DB!=""){$kc=db_collation(DB,$Y);}elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$ia){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ia,$l)&&$l[1]){$f=stripcslashes(idf_unescape("`$l[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40" onkeypress="return textareaKeypress(this, event);">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($Y?html_select("collation",array(""=>"(".'porovnávanie'.")")+$Y,$kc):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="hidden" name="token" value="<?php echo$K,'">
<input type="submit" value="Uložiť">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Pridať ďalší'."'>\n";}echo'</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$w=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$w,'Schéma bola odstránená.');}else{$w.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$w,'Schéma bola vytvorená.');}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$w,'Schéma bola zmenená.');}else{redirect($w);}}}page_header($_GET["ns"]!=""?'Pozmeniť schému':'Vytvoriť schému',$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'".confirm().">\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Qa=$_GET["call"];page_header('Zavolať'.": ".h($Qa),$n);$Ra=routine($Qa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Mb=array();$nb=array();foreach($Ra["fields"]as$k=>$d){if(substr($d["inout"],-3)=="OUT"){$nb[$k]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Mb[]=$k;}}if(!$n&&$_POST){$Jd=array();foreach($Ra["fields"]as$e=>$d){if(in_array($e,$Mb)){$b=process_input($d);if($b===false){$b="''";}if(isset($nb[$e])){$g->query("SET @".idf_escape($d["field"])." = $b");}}$Jd[]=(isset($nb[$e])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Qa)."(".implode(", ",$Jd).")";echo"<p><code class='jush-$v'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Upraviť'."</a>\n";if(!$g->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$i=$g->store_result();if(is_object($i)){select($i);}else{echo"<p class='message'>".lang(array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),$g->affected_rows)."\n";}}while($g->next_result());if($nb){select($g->query("SELECT ".implode(", ",$nb)));}}}echo'
<form action="" method="post">
';if($Mb){echo"<table cellspacing='0'>\n";foreach($Mb
as$e){$d=$Ra["fields"][$e];$f=$d["field"];echo"<tr><th>".$o->fieldName($d);$q=$_POST["fields"][$f];if($q!=""){if($d["type"]=="enum"){$q=+$q;}if($d["type"]=="set"){$q=array_sum($q);}}input($d,$q,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Zavolať">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),'Cudzí kľúč bol odstránený.');}else{$Fa=array_filter($_POST["source"],'strlen');ksort($Fa);$ca=array();foreach($Fa
as$e=>$b){$ca[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Fa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ca)).")".(in_array($_POST["on_delete"],$bb)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$bb)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?'Cudzí kľúč bol zmenený.':'Cudzí kľúč bol vytvorený.'));$n='Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.'."<br>$n";}}page_header('Cudzí kľúč',$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$da=foreign_keys($m);$a=$da[$_GET["name"]];$a["source"][]="";}$Fa=array_keys(fields($m));$ca=($m===$a["table"]?$Fa:array_keys(fields($a["table"])));$Md=array();foreach(table_status()as$f=>$E){if(fk_support($E)){$Md[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Cieľová tabuľka:
',html_select("table",$Md,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Zmeniť"></noscript>
<table cellspacing="0">
<thead><tr><th>Zdroj<th>Cieľ</thead>
';$pa=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".(+$e)."]",array(-1=>"")+$Fa,$b,($pa==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$e)."]",$ca,$a["target"][$e]);$pa++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$bb,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$bb,$a["on_update"]),'<p>
<input type="submit" value="Uložiť">
<noscript><p><input type="submit" name="add" value="Pridať stĺpec"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$K,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$eb=false;if($_POST&&!$n){$eb=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.',$m);}page_header(($m!=""?'Zmeniť pohľad':'Vytvoriť pohľad'),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>Názov: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$K,'">
';if($eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
</form>
';}elseif(isset($_GET["event"])){$lb=$_GET["event"];$Sd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Ad=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($lb),substr(ME,0,-1),'Udalosť bola odstránená.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Sd)&&isset($Ad[$_POST["STATUS"]])){$Rd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($lb!=""?"ALTER EVENT ".idf_escape($lb).$Rd.($lb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Rd)."\n".$Ad[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($lb!=""?'Udalosť bola zmenená.':'Udalosť bola vytvorená.'));}}page_header(($lb!=""?'Upraviť udalosť'.": ".h($lb):'Vytvoriť udalosť'),$n);$a=array();if($_POST){$a=$_POST;}elseif($lb!=""){$G=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($lb));$a=reset($G);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Názov<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Začiatok<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Koniec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Každých<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Sd,$a["INTERVAL_FIELD"]),'<tr><th>Stav<td>',html_select("STATUS",$Ad,$a["STATUS"]),'<tr><th>Komentár<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Po dokončení zachovat'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
';if($lb!=""){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Qa=$_GET["procedure"];$Ra=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$eb=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$r=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$r[]=(in_array($d["inout"],$bc)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$eb=drop_create("DROP $Ra ".idf_escape($Qa),"CREATE $Ra ".idf_escape($_POST["name"])." (".implode(", ",$r).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.',$Qa);}page_header(($Qa!=""?(isset($_GET["function"])?'Zmeniť funkciu':'Zmeniť procedúru').": ".h($Qa):(isset($_GET["function"])?'Vytvoriť funkciu':'Vytvoriť procedúru')),$n);$Y=get_vals("SHOW CHARACTER SET");sort($Y);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Qa!=""){$a=routine($Qa,$Ra);$a["name"]=$Qa;}echo'
<form action="" method="post" id="form">
<p>Názov: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$Y,$Ra);if(isset($_GET["function"])){echo"<tr><td>".'Návratový typ';edit_type("returns",$a["returns"],$Y);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$K,'">
';if($eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
';if($Qa!=""){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["sequence"])){$Cb=$_GET["sequence"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Cb),$w,'Sekvencia bola odstránená.');}elseif($Cb==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$w,'Sekvencia bola vytvorená.');}elseif($Cb!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Cb)." RENAME TO ".idf_escape($_POST["name"]),$w,'Sekvencia bola zmenená.');}else{redirect($w);}}page_header($Cb!=""?'Pozmeniť sekvenciu'.": ".h($Cb):'Vytvoriť sekvenciu',$n);$a=array("name"=>$Cb);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
';if($Cb!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'".confirm().">\n";}echo'</form>
';}elseif(isset($_GET["type"])){$Oc=$_GET["type"];if($_POST&&!$n){$w=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Oc),$w,'Typ bol odstránený.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$w,'Typ bol vytvorený.');}}page_header($Oc!=""?'Pozmeniť typ'.": ".h($Oc):'Vytvoriť typ',$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$K,'">
';if($Oc!=""){echo"<input type='submit' name='drop' value='".'Odstrániť'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Uložiť'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Nc=trigger_options();$Od=array("INSERT","UPDATE","DELETE");$eb=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Nc["Timing"])&&in_array($_POST["Event"],$Od)&&in_array($_POST["Type"],$Nc["Type"])){$ae=" $_POST[Timing] $_POST[Event]";$zb=" ON ".table($m);$eb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$zb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($v=="mssql"?$zb.$ae:$ae.$zb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($m),'Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Zmeniť trigger'.": ".h($_GET["name"]):'Vytvoriť trigger'),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Čas<td>',html_select("Timing",$Nc["Timing"],$a["Timing"],"if (/^".h(preg_quote($m,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($m))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Udalosť<td>',html_select("Event",$Od,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Nc["Type"],$a["Type"]),'</table>
<p>Názov: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$K,'">
';if($eb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Uložiť">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["user"])){$rd=$_GET["user"];$ra=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Ic){$ra[$Ic][$a["Privilege"]]=$a["Comment"];}}$ra["Server Admin"]+=$ra["File access on server"];$ra["Databases"]["Create routine"]=$ra["Procedures"]["Create routine"];unset($ra["Procedures"]["Create routine"]);$ra["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ra["Columns"][$b]=$ra["Tables"][$b];}unset($ra["Server Admin"]["Usage"]);foreach($ra["Tables"]as$e=>$b){unset($ra["Databases"][$e]);}$pc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$pc[$b]=(array)$pc[$b]+(array)$_POST["grants"][$e];}}$jb=array();$Hc="";if(isset($_GET["host"])&&($i=$g->query("SHOW GRANTS FOR ".q($rd)."@".q($_GET["host"])))){while($a=$i->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$l)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$l[1],$sa,PREG_SET_ORDER)){foreach($sa
as$b){if($b[1]!="USAGE"){$jb["$l[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$jb["$l[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$l)){$Hc=$l[1];}}}if($_POST&&!$n){$ac=(isset($_GET["host"])?q($rd)."@".q($_GET["host"]):"''");$gb=q($_POST["user"])."@".q($_POST["host"]);$Cd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $ac",ME."privileges=",'Používateľ bol odstránený.');}else{if($ac!=$gb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $gb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Cd");}elseif($_POST["pass"]!=$Hc||!$_POST["hashed"]){queries("SET PASSWORD FOR $gb = ".($_POST["hashed"]?$Cd:"PASSWORD($Cd)"));}if(!$n){$oc=array();foreach($pc
as$db=>$ia){if(isset($_GET["grant"])){$ia=array_filter($ia);}$ia=array_keys($ia);if(isset($_GET["grant"])){$oc=array_diff(array_keys(array_filter($pc[$db],'strlen')),$ia);}elseif($ac==$gb){$te=array_keys((array)$jb[$db]);$oc=array_diff($te,$ia);$ia=array_diff($ia,$te);unset($jb[$db]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$db,$l)&&(!grant("REVOKE",$oc,$l[2]," ON $l[1] FROM $gb")||!grant("GRANT",$ia,$l[2]," ON $l[1] TO $gb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($ac!=$gb){queries("DROP USER $ac");}elseif(!isset($_GET["grant"])){foreach($jb
as$db=>$oc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$db,$l)){grant("REVOKE",array_keys($oc),$l[2]," ON $l[1] FROM $gb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Používateľ bol zmenený.':'Používateľ bol vytvorený.'),!$n);if($ac!=$gb){$g->query("DROP USER $gb");}}}page_header((isset($_GET["host"])?'Používateľ'.": ".h("$rd@$_GET[host]"):'Vytvoriť používateľa'),$n,array("privileges"=>array('','Oprávnenia')));if($_POST){$a=$_POST;$jb=$pc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Hc;if($Hc!=""){$a["hashed"]=true;}$jb[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Používateľ<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Heslo<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahašované',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Oprávnenia'."</a>";$k=0;foreach($jb
as$db=>$ia){echo'<th>'.($db!="*.*"?"<input name='objects[$k]' value='".h($db)."' size='10'>":"<input type='hidden' name='objects[$k]' value='*.*' size='10'>*.*");$k++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Databáza',"Tables"=>'Tabuľka',"Columns"=>'Stĺpec',"Procedures"=>'Procedúra',)as$Ic=>$_c){foreach((array)$ra[$Ic]as$qc=>$_a){echo"<tr".odd()."><td".($_c?">$_c<td":" colspan='2'").' lang="en" title="'.h($_a).'">'.h($qc);$k=0;foreach($jb
as$db=>$ia){$f="'grants[$k][".h(strtoupper($qc))."]'";$q=$ia[strtoupper($qc)];if($Ic=="Server Admin"&&$db!=(isset($jb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($q?" selected":"").">".'Povoliť'."<option value='0'".($q=="0"?" selected":"").">".'Zakázať'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($q?" checked":"").($qc=="All privileges"?" id='grants-$k-all'":($qc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$k-all');\"")).">";}$k++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Uložiť">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Odstrániť"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$n){$zd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$zd++;}}queries_redirect(ME."processlist=",lang(array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),$zd),$zd||!$_POST["kill"]);}page_header('Zoznam procesov',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$k=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$k=>$a){if(!$k){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$e=>$b){echo"<td>".($e=="Info"&&$b!=""?"<code class='jush-$v'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Upraviť'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($k+1)."/".sprintf('%d celkom',$g->result("SELECT @@max_connections")),'<p>
<input type="hidden" name="token" value="',$K,'">
<input type="submit" value="Ukončiť">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$E=table_status($m);$I=indexes($m);$p=fields($m);$da=column_foreign_keys($m);if($E["Oid"]=="t"){$I[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$we=array();$B=array();$Db=null;foreach($p
as$e=>$d){$f=$o->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$B[$e]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$Db=$o->selectLengthProcess();}}$we+=$d["privileges"];}list($P,$oa)=$o->selectColumnsProcess($B,$I);$s=$o->selectSearchProcess($p,$I);$ab=$o->selectOrderProcess($p,$I);$M=$o->selectLimitProcess();$ec=($P?implode(", ",$P):($E["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($m);$yd=($oa&&count($oa)<count($P)?"\nGROUP BY ".implode(", ",$oa):"").($ab?"\nORDER BY ".implode(", ",$ab):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Wa=>$a){echo$g->result("SELECT".limit(idf_escape(key($a))." FROM ".table($m)," WHERE ".where_check($Wa).($s?" AND ".implode(" AND ",$s):"").($ab?" ORDER BY ".implode(", ",$ab):""),1));}exit;}if($_POST&&!$n){$_e="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Ja=$Gc=null;foreach($I
as$x){if($x["type"]=="PRIMARY"){$Ja=array_flip($x["columns"]);$Gc=($P?$Ja:array());break;}}foreach($P
as$e=>$b){$b=$_GET["columns"][$e];if(!$b["fun"]){unset($Gc[$b["col"]]);}}if($_POST["export"]){dump_headers($m);$o->dumpTable($m,"");if(!is_array($_POST["check"])||$Gc===array()){$Vb=$s;if(is_array($_POST["check"])){$Vb[]="($_e)";}$j="SELECT $ec".($Vb?"\nWHERE ".implode(" AND ",$Vb):"").$yd;}else{$ze=array();foreach($_POST["check"]as$b){$ze[]="(SELECT".limit($ec,"\nWHERE ".($s?implode(" AND ",$s)." AND ":"").where_check($b).$yd,1).")";}$j=implode(" UNION ALL ",$ze);}$o->dumpData($m,"table",$j);exit;}if(!$o->selectEmailProcess($s,$da)){if($_POST["save"]||$_POST["delete"]){$i=true;$vb=0;$j=table($m);$r=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$r[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$r[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($r)).")\nSELECT ".implode(", ",$r)."\nFROM ".table($m):" SET\n".implode(",\n",$r));}if($_POST["delete"]||$r){$Jc="UPDATE";if($_POST["delete"]){$Jc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Jc="INSERT";$j="INTO $j";}if($_POST["all"]||($Gc===array()&&$_POST["check"])||count($oa)<count($P)){$i=queries($Jc." $j".($_POST["all"]?($s?"\nWHERE ".implode(" AND ",$s):""):"\nWHERE $_e"));$vb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$i=queries($Jc.limit1($j,"\nWHERE ".where_check($b)));if(!$i){break;}$vb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d položiek bolo ovplyvnených.',$vb),$i);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n='Dvojkliknite na políčko, ktoré chcete zmeniť.';}else{$i=true;$vb=0;foreach($_POST["val"]as$Wa=>$a){$r=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$r[]=idf_escape($e)." = ".(ereg('char|text',$p[$e]["type"])||$b!=""?$o->processInput($p[$e],$b):"NULL");}$j=table($m)." SET ".implode(", ",$r);$Vb=" WHERE ".where_check($Wa).($s?" AND ".implode(" AND ",$s):"");$i=queries("UPDATE".(count($oa)<count($P)?" $j$Vb":limit1($j,$Vb)));if(!$i){break;}$vb+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d položiek bolo ovplyvnených.',$vb),$i);}}elseif(is_string($ta=get_file("csv_file",true))){$ta=preg_replace("~^\xEF\xBB\xBF~",'',$ta);$i=true;$ob=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ta,$sa);$vb=count($sa[0]);begin();$Pa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($sa[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Pa]*)$Pa~",$b.$Pa,$td);if(!$e&&!array_diff($td[1],$ob)){$ob=$td[1];$vb--;}else{$r=array();foreach($td[1]as$k=>$Wc){$r[idf_escape($ob[$k])]=($Wc==""&&$p[$ob[$k]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Wc))));}$i=insert_update($m,$r,$Ja);if(!$i){break;}}}if($i){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),$vb),$i);queries("ROLLBACK");}else{$n=upload_error($ta);}}}$Ga=$o->tableName($E);page_header('Vypísať'.": $Ga",$n);session_write_close();$r=null;if(isset($we["insert"])){$r="";foreach((array)$_GET["where"]as$b){if(count($da[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$r.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$o->selectLinks($E,$r);if(!$B){echo"<p class='error'>".'Tabuľku sa nepodarilo vypísať'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$o->selectColumnsPrint($P,$B);$o->selectSearchPrint($s,$B,$I);$o->selectOrderPrint($ab,$B,$I);$o->selectLimitPrint($M);$o->selectLengthPrint($Db);$o->selectActionPrint($Db);echo"</form>\n";$ba=$_GET["page"];if($ba=="last"){$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));$ba=floor(max(0,$Va-1)/$M);}$j="SELECT".limit((+$M&&$oa&&count($oa)<count($P)&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$ec,($s?"\nWHERE ".implode(" AND ",$s):"").$yd,($M!=""?+$M:null),($ba?$M*$ba:0),"\n");echo$o->selectQuery($j);$i=$g->query($j);if(!$i){echo"<p class='error'>".error()."\n";}else{if($v=="mssql"){$i->seek($M*$ba);}$Kc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$G=array();while($a=$i->fetch_assoc()){$G[]=$a;}if($_GET["page"]!="last"){$Va=(+$M&&$oa&&count($oa)<count($P)?($v=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($j) x")):count($G));}if(!$G){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{$sd=$o->backwardKeys($m,$Ga);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$oa&&$P?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'upraviť'."</a>");$ud=array();$Z=array();reset($P);$je=1;foreach($G[0]as$e=>$b){if($E["Oid"]!="t"||$e!="oid"){$b=$_GET["columns"][key($P)];$d=$p[$P?$b["col"]:$e];$f=($d?$o->fieldName($d,$je):"*");if($f!=""){$je++;$ud[$e]=$f;$C=idf_escape($e);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($ab[0]==$C||$ab[0]==$e||(!$ab&&$oa[0]==$C)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$Z[$e]=$b["fun"];next($P);}}$Zb=array();if($_GET["modify"]){foreach($G
as$a){foreach($a
as$e=>$b){$Zb[$e]=max($Zb[$e],min(40,strlen(utf8_decode($b))));}}}echo($sd?"<th>".'Vzťahy':"")."</thead>\n";foreach($o->rowDescriptions($G,$da)as$ga=>$a){$vd=unique_array($G[$ga],$I);$Wa="";foreach($vd
as$e=>$b){$Wa.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd().">".(!$oa&&$P?"":"<td>".checkbox("check[]",substr($Wa,1),in_array(substr($Wa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($oa)<count($P)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$Wa)."'>".'upraviť'."</a>"));foreach($a
as$e=>$b){if(isset($ud[$e])){$d=$p[$e];if($b!=""&&(!isset($Kc[$e])||$Kc[$e]!="")){$Kc[$e]=(is_mail($b)?$ud[$e]:"");}$w="";$b=$o->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$w=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$Wa);}if($b===""){$b="&nbsp;";}elseif($Db!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$Db));}else{$b=h($b);}if(!$w){foreach((array)$da[$e]as$A){if(count($da[$e])==1||end($A["source"])==$e){$w="";foreach($A["source"]as$k=>$Fa){$w.=where_link($k,$A["target"][$k],$G[$ga][$Fa]);}$w=h(($A["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($A["db"]),ME):ME).'select='.urlencode($A["table"]).$w);if(count($A["source"])==1){break;}}}}if($e=="COUNT(*)"){$w=h(ME."select=".urlencode($m));$k=0;foreach((array)$_GET["where"]as$y){if(!array_key_exists($y["col"],$vd)){$w.=h(where_link($k++,$y["col"],$y["val"],$y["op"]));}}foreach($vd
as$Na=>$y){$w.=h(where_link($k++,$Na,$y));}}}if(!$w){if(is_mail($b)){$w="mailto:$b";}if($Gd=is_url($a[$e])){$w=($Gd=="http"&&$Ac?$a[$e]:"$Gd://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$R=h("val[$Wa][".bracket_escape($e)."]");$q=$_POST["val"][$Wa][bracket_escape($e)];$he=h(isset($q)?$q:$a[$e]);$rf=strpos($b,"<i>...</i>");$ge=is_utf8($b)&&$G[$ga][$e]==$a[$e]&&!$Z[$e];$ke=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$ge)||isset($q)?"<td>".($ke?"<textarea name='$R' cols='30' rows='".(substr_count($a[$e],"\n")+1)."' onkeypress='return textareaKeypress(this, event);'>$he</textarea>":"<input name='$R' value='$he' size='$Zb[$e]'>"):"<td id='$R' ondblclick=\"".($ge?"selectDblClick(this, event".($rf?", 2":($ke?", 1":"")).")":"alert('".h('Pre zmenu tejto hodnoty použite odkaz upraviť.')."')").";\">".$o->selectVal($b,$w,$d));}}if($sd){echo"<td>";}$o->backwardKeysPrint($sd,$G[$ga]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$Yb);if($G||$ba){$xd=true;if($_GET["page"]!="last"&&+$M&&count($oa)>=count($P)&&($Va>=$M||$ba)){$Va=$E["Rows"];if(!isset($Va)||$s||2*$ba*$M>$Va||($E["Engine"]=="InnoDB"&&$Va<1e4)){ob_flush();flush();$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));}else{$xd=false;}}echo"<p class='pages'>";if(+$M&&$Va>$M){$wd=floor(($Va-1)/$M);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Stránka'."', '".($ba+1)."'), event); return false;\">".'Stránka'."</a>:",pagination(0,$ba).($ba>5?" ...":"");for($k=max(1,$ba-4);$k<min($wd,$ba+5);$k++){echo
pagination($k,$ba);}echo($ba+5<$wd?" ...":"").($xd?pagination($wd,$ba):' <a href="'.h(remove_from_uri()."&page=last").'">'.'posledný'."</a>");}echo" (".($xd?"":"~ ").lang(array('%d riadok','%d riadky','%d riadkov'),$Va).") ".checkbox("all",1,0,'celý výsledok')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Upraviť</legend><div>
<input type="submit" id="save" value="Uložiť" title="Dvojkliknite na políčko, ktoré chcete zmeniť.">
<input type="submit" name="edit" value="Upraviť">
<input type="submit" name="clone" value="Klonovať">
<input type="submit" name="delete" value="Zmazať" onclick="return confirm('Naozaj? (' + (this.form['all'].checked ? <?php echo$Va,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$Oa=$o->dumpOutput();echo($Oa?html_select("output",$Oa,$Yb["output"])." ":""),html_select("format",$o->dumpFormat(),$Yb["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Import',!$G);echo"<input type='hidden' name='token' value='$K'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Yb["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$o->selectEmailPrint(array_filter($Kc,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Sb=isset($_GET["status"]);page_header($Sb?'Stav':'Premenné');$pe=($Sb?show_status():show_variables());if(!$pe){echo"<p class='message'>".'Žiadne riadky.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($pe
as$e=>$b){echo"<tr>","<th><code class='jush-".$v.($Sb?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Mc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$R=js_escape($a["Name"]);json_row("Comment-$R",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$e){json_row("$e-$R",nbsp($a[$e]));}foreach($Mc+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($a[$e]!=""){$b=number_format($a[$e],0,'.',' ');json_row("$e-$R",($e=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($Mc[$e])){$Mc[$e]+=($a["Engine"]!="InnoDB"||$e!="Data_free"?$a[$e]:0);}}elseif(array_key_exists($e,$a)){json_row("$e-$R");}}}}foreach($Mc
as$e=>$b){json_row("sum-$e",number_format($b,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$t=>$b){json_row("tables-".js_escape($t),$b);}json_row("");}exit;}else{$oe=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($oe&&!$n&&!$_POST["search"]){$i=true;$ua="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$i=truncate_tables($_POST["tables"]);}$ua='Tabuľka bola vyprázdnená.';}elseif($_POST["move"]){$i=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ua='Tabuľka bola presunutá.';}elseif($_POST["copy"]){$i=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ua='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"]){$i=drop_views($_POST["views"]);}if($i&&$_POST["tables"]){$i=drop_tables($_POST["tables"]);}$ua='Tabuľka bola odstránená.';}elseif($_POST["tables"]&&($i=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$i->fetch_assoc()){$ua.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ua,$i);}page_header(($_GET["ns"]==""?'Databáza'.": ".h(DB):'Schéma'.": ".h($_GET["ns"])),$n,true);if($o->homepage()){if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Schéma databázy'."</a>\n","<h3>".'Tabuľky a pohľady'."</h3>\n";$Lc=tables_list();if(!$Lc){echo"<p class='message'>".'Žiadne tabuľky.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Vyhľadať dáta v tabuľkách'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Vyhľadať'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabuľka'.'<td>'.'Typ'.'<td>'.'Porovnávanie'.'<td>'.'Veľkosť dát'.'<td>'.'Veľkosť indexu'.'<td>'.'Voľné miesto'.'<td>'.'Auto Increment'.'<td>'.'Riadky'.(support("comment")?'<td>'.'Komentár':'')."</thead>\n";foreach($Lc
as$f=>$z){$Wb=(isset($z)&&!eregi("table",$z));echo'<tr'.odd().'><td>'.checkbox(($Wb?"views[]":"tables[]"),$f,in_array($f,$oe,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($Wb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Pohľad'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$w){echo($w?"<td align='right'><a href='".h(ME."$w=").urlencode($f)."' id='$e-".h($f)."'>?</a>":"<td id='$e-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d celkom',count($Lc)),"<td>".nbsp($g->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$e){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$K'>".($v=="sql"?"<input type='submit' value='".'Analyzovať'."'> <input type='submit' name='optimize' value='".'Optimalizovať'."'> <input type='submit' name='check' value='".'Skontrolovať'."'> <input type='submit' name='repair' value='".'Opraviť'."'> ":"")."<input type='submit' name='truncate' value='".'Vyprázdniť'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Odstrániť'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$v!="sqlite"){$t=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Presunúť do inej databázy'.": ",($_?html_select("target",$_,$t):'<input name="target" value="'.h($t).'">')," <input type='submit' name='move' value='".'Presunúť'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."' onclick='eventStop(event);'>":""),"\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Vytvoriť tabuľku'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Vytvoriť pohľad'."</a>\n";}if(support("routine")){echo"<h3>".'Procedúry'."</h3>\n";$ne=routines();if($ne){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Názov'.'<td>'.'Typ'.'<td>'.'Návratový typ'."<td>&nbsp;</thead>\n";odd('');foreach($ne
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Zmeniť'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Vytvoriť procedúru'.'</a> <a href="'.h(ME).'function=">'.'Vytvoriť funkciu'."</a>\n";}if(support("sequence")){echo"<h3>".'Sekvencia'."</h3>\n";$me=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($me){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Názov'."</thead>\n";odd('');foreach($me
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Vytvoriť sekvenciu'."</a>\n";}if(support("type")){echo"<h3>".'Užívateľské typy'."</h3>\n";$Q=types();if($Q){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Názov'."</thead>\n";odd('');foreach($Q
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Vytvoriť typ'."</a>\n";}if(support("event")){echo"<h3>".'Udalosti'."</h3>\n";$G=get_rows("SHOW EVENTS");if($G){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Názov'."<td>".'Plán'."<td>".'Začiatok'."<td>".'Koniec'."</thead>\n";foreach($G
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'V stanovený čas'."<td>".$a["Execute at"]:'Každých'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Vytvoriť udalosť'."</a>\n";}if($Lc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();