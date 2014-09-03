<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/error_reporting(6135);$ve=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($ve){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$Bd=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($Bd){$$b=$Bd;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$i;return$i;}function
idf_unescape($Ea){$bb=substr($Ea,-1);return
str_replace($bb.$bb,$bb,substr($Ea,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($db){if(get_magic_quotes_gpc()){while(list($c,$b)=each($db)){foreach($b
as$za=>$r){unset($db[$c][$za]);if(is_array($r)){$db[$c][stripslashes($za)]=$r;$db[]=&$db[$c][stripslashes($za)];}else{$db[$c][stripslashes($za)]=($ve?$r:stripslashes($r));}}}}}function
bracket_escape($Ea,$Ne=false){static$xe=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Ea,($Ne?array_flip($xe):$xe));}function
h($T){return
htmlspecialchars($T,ENT_QUOTES);}function
nbsp($T){return(trim($T)!=""?h($T):"&nbsp;");}function
nl_br($T){return
str_replace("\n","<br>",$T);}function
checkbox($f,$o,$Ha,$se="",$re=""){static$D=0;$D++;$e="<input type='checkbox'".($f?" name='$f' value='".h($o)."'":"").($Ha?" checked":"").($re?" onclick=\"$re\"":"")." id='checkbox-$D'>";return($se!=""?"<label for='checkbox-$D'>$e".h($se)."</label>":$e);}function
optionlist($oc,$Ve=null,$Od=false){$e="";foreach($oc
as$za=>$r){if(is_array($r)){$e.='<optgroup label="'.h($za).'">';}foreach((is_array($r)?$r:array($za=>$r))as$c=>$b){$e.='<option'.($Od||is_string($c)?' value="'.h($c).'"':'').(($Od||is_string($c)?(string)$c:$b)===$Ve?' selected':'').'>'.h($b);}if(is_array($r)){$e.='</optgroup>';}}return$e;}function
html_select($f,$oc,$o="",$ub=true){if($ub){return"<select name='".h($f)."'".(is_string($ub)?" onchange=\"$ub\"":"").">".optionlist($oc,$o)."</select>";}$e="";foreach($oc
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$o?" checked":"").">".h($b)."</label>";}return$e;}function
confirm($yc="",$pf=false){return" onclick=\"".($pf?"eventStop(event); ":"")."return confirm('".'Are you sure?'.($yc?" (' + $yc + ')":"")."');\"";}function
js_escape($T){return
addcslashes($T,"\r\n'\\/");}function
ini_bool($of){$b=ini_get($of);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$e;if(!isset($e)){$e=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$e;}function
q($T){global$i;return$i->quote($T);}function
get_vals($j,$ga=0){global$i;$e=array();$k=$i->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[]=$a[$ga];}}return$e;}function
get_key_vals($j,$K=null){global$i;if(!is_object($K)){$K=$i;}$e=array();$k=$K->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[$a[0]]=$a[1];}}return$e;}function
get_rows($j,$K=null,$q="<p class='error'>"){global$i;if(!is_object($K)){$K=$i;}$e=array();$k=$K->query($j);if(is_object($k)){while($a=$k->fetch_assoc()){$e[]=$a;}}elseif(!$k&&$i->error&&$q&&defined("PAGE_HEADER")){echo$q.error()."\n";}return$e;}function
unique_array($a,$z){foreach($z
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$e=array();foreach($t["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($x){global$s;$e=array();foreach((array)$x["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)||$s=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_")):" = ".exact_value($b));}foreach((array)$x["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$He);remove_slashes(array(&$He));return
where($He);}function
where_link($g,$ga,$o,$kf="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($ga)."&where%5B$g%5D%5Bop%5D=".urlencode((isset($o)?$kf:"IS NULL"))."&where%5B$g%5D%5Bval%5D=".urlencode($o);}function
cookie($f,$o){global$Vb;$Kb=array($f,(ereg("\n",$o)?"":$o),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Vb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Kb[]=true;}return
call_user_func_array('setcookie',$Kb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($vb,$I,$X){global$va;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($va))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($vb!="server"||$I!=""?urlencode($vb)."=".urlencode($I)."&":"")."username=".urlencode($X).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($M,$ia=null){if(isset($ia)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($M)?$M:$_SERVER["REQUEST_URI"]))][]=$ia;}if(isset($M)){if($M==""){$M=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $M");exit;}}function
query_redirect($j,$M,$ia,$pc=true,$mf=true,$ee=false){global$i,$q,$n;if($mf){$ee=!$i->query($j);}$Yc="";if($j){$Yc=$n->messageQuery($j);}if($ee){$q=error().$Yc;return
false;}if($pc){redirect($M,$ia.$Yc);}return
true;}function
queries($j=null){global$i;static$ce=array();if(!isset($j)){return
implode(";\n",$ce);}$ce[]=$j;return$i->query($j);}function
apply_queries($j,$qa,$nf='table'){foreach($qa
as$l){if(!queries("$j ".$nf($l))){return
false;}}return
true;}function
queries_redirect($M,$ia,$pc){return
query_redirect(queries(),$M,$ia,$pc,false,!$pc);}function
remove_from_uri($Na=""){return
substr(preg_replace("~(?<=[?&])($Na".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($J,$uf){return" ".($J==$uf?$J+1:'<a href="'.h(remove_from_uri("page").($J?"&page=$J":"")).'">'.($J+1)."</a>");}function
get_file($c,$le=false){$da=$_FILES[$c];if(!$da||$da["error"]){return$da["error"];}return
file_get_contents($le&&ereg('\\.gz$',$da["name"])?"compress.zlib://$da[tmp_name]":($le&&ereg('\\.bz2$',$da["name"])?"compress.bzip2://$da[tmp_name]":$da["tmp_name"]));}function
upload_error($q){$me=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?'Unable to upload a file.'.($me?" ".sprintf('Maximum allowed file size is %sB.',$me):""):'File does not exist.');}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
json_row($c,$b=null){static$ja=true;if($ja){echo"{";}if($c!=""){echo($ja?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$ja=false;}else{echo"\n}\n";$ja=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($R,$xa){return
str_repeat("$R{0,65535}",$xa/65535)."$R{0,".($xa
%
65535)."}";}function
shorten_utf8($T,$xa=80,$zf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xa).")($)?)u",$T,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xa).")($)?)",$T,$m);}return
h($m[1]).$zf.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($db,$_f=array()){while(list($c,$b)=each($db)){if(is_array($b)){foreach($b
as$za=>$r){$db[$c."[$za]"]=$r;}}elseif(!in_array($c,$_f)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($l){global$n;$e=array();foreach($n->foreignKeys($l)as$F){foreach($F["source"]as$b){$e[$b][]=$F;}}return$e;}function
enum_input($O,$Ca,$d,$o,$xb=null){global$n;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);$e=(isset($xb)?"<label><input type='$O'$Ca value='$xb'".((is_array($o)?in_array($xb,$o):$o===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ha=(is_int($o)?$o==$g+1:(is_array($o)?in_array($g+1,$o):$o===$b));$e.=" <label><input type='$O'$Ca value='".($g+1)."'".($Ha?' checked':'').'>'.h($n->editVal($b,$d)).'</label>';}return$e;}function
input($d,$o,$A){global$ba,$n,$s;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$ke=($s=="mssql"&&$d["auto_increment"]);if($ke&&!$_POST["save"]){$A=null;}$W=(isset($_GET["select"])||$ke?array("orig"=>'original'):array())+$n->editFunctions($d);$Ca=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($W[""])."<td>".$n->editInput($_GET["edit"],$d,$Ca,$o);}else{$ja=0;foreach($W
as$c=>$b){if($c===""||!$b){break;}$ja++;}$ub=($ja?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($ja > f.selectedIndex) f.selectedIndex = $ja;\"":"");$Ca.=$ub;echo(count($W)>1?html_select("function[$f]",$W,!isset($A)||in_array($A,$W)||isset($W[$A])?$A:""):nbsp(reset($W))).'<td>';$je=$n->editInput($_GET["edit"],$d,$Ca,$o);if($je!=""){echo$je;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ha=(is_int($o)?($o>>$g)&1:in_array($b,explode(",",$o),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($Ha?' checked':'')."$ub>".h($n->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$ub>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($s!="sqlite"||ereg("\n",$o)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ca onkeypress='return textareaKeypress(this, event);'>".h($o).'</textarea>';}else{$od=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$m)?((ereg("binary",$d["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$d["unsigned"]?1:0)):($ba[$d["type"]]?$ba[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($o)."'".($od?" maxlength='$od'":"").(ereg('char|binary',$d["type"])&&$od>20?" size='40'":"")."$Ca>";}}}function
process_input($d){global$n;$Ea=bracket_escape($d["field"]);$A=$_POST["function"][$Ea];$o=$_POST["fields"][$Ea];if($d["type"]=="enum"){if($o==-1){return
false;}if($o==""){return"NULL";}return+$o;}if($d["auto_increment"]&&$o==""){return
null;}if($A=="orig"){return
false;}if($A=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$o);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$da=get_file("fields-$Ea");if(!is_string($da)){return
false;}return
q($da);}return$n->processInput($d,$o,$A);}function
search_tables(){global$n,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$aa=false;foreach(table_status()as$l=>$G){$f=$n->tableName($G);if(isset($G["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($l,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($l)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($l),array())),1));if($k->fetch_row()){if(!$aa){echo"<ul>\n";$aa=true;}echo"<li><a href='".h(ME."select=".urlencode($l)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>".h($f)."</a>\n";}}}echo($aa?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($kc,$gd=false){global$n;$e=$n->dumpHeaders($kc,$gd);$ya=$_POST["output"];if($ya!="text"){header("Content-Disposition: attachment; filename=".($kc!=""?friendly_url($kc):"dump").".$e".($ya!="file"&&!ereg('[^0-9a-z]',$ya)?".$ya":""));}session_write_close();return$e;}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($A,$ga){return($A?($A=="unixepoch"?"DATETIME($ga, '$A')":($A=="count distinct"?"COUNT(DISTINCT ":strtoupper("$A("))."$ga)"):$ga);}function
password_file(){$nc=ini_get("upload_tmp_dir");if(!$nc){if(function_exists('sys_get_temp_dir')){$nc=sys_get_temp_dir();}else{$hb=@tempnam("","");if(!$hb){return
false;}$nc=dirname($hb);unlink($hb);}}$hb="$nc/adminer.key";$e=@file_get_contents($hb);if($e){return$e;}$_a=@fopen($hb,"w");if($_a){$e=md5(uniqid(mt_rand(),true));fwrite($_a,$e);fclose($_a);}return$e;}function
is_mail($hf){$Ie='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$R="$Ie+(\\.$Ie+)*@($Tb?\\.)+$Tb";return
preg_match("(^$R(,\\s*$R)*\$)i",$hf);}function
is_url($T){$Tb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Tb?\\.)+$Tb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$T,$m)?strtolower($m[1]):"");}function
print_fieldset($D,$Ue,$if=false){echo"<fieldset><legend><a href='#fieldset-$D' onclick=\"return !toggle('fieldset-$D');\">$Ue</a></legend><div id='fieldset-$D'".($if?"":" class='hidden'").">\n";}function
bold($We){return($We?" class='active'":"");}global$n,$i,$va,$qd,$lb,$q,$W,$Fb,$Vb,$wb,$s,$Te,$Df,$Ka,$Oc,$B,$Ff,$ba,$Gb,$Wb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Vb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Kb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Vb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Kb[]=true;}call_user_func_array('session_set_cookie_params',$Kb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($Qe,$tb){$hc=($tb==1||(!$tb&&'en'=='fr')?0:('en'=='sl'&&(!$tb||$tb>2)?1:0)+((!$tb||$tb>=5)&&ereg('cs|sk|ru|sl','en')?2:1));return
sprintf($Qe[$hc],$tb);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($ef,$X,$na,$ff='auth_error'){set_exception_handler($ff);parent::__construct($ef,$X,$na);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$dc=false){$k=parent::query($j);if(!$k){$gf=$this->errorInfo();$this->error=$gf[2];return
false;}$this->store_result($k);return$k;}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result($k=null){if(!$k){$k=$this->_result;}if($k->columnCount()){$k->num_rows=$k->rowCount();return$k;}$this->affected_rows=$k->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$va=array();$va=array("server"=>"MySQL")+$va;if(!defined("DRIVER")){$Ze=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($I,$X,$na){mysqli_report(MYSQLI_REPORT_OFF);list($af,$rc)=explode(":",$I,2);$e=@$this->real_connect(($I!=""?$af:ini_get("mysqli.default_host")),("$I$X"!=""?$X:ini_get("mysqli.default_user")),("$I$X$na"!=""?$na:ini_get("mysqli.default_pw")),null,(is_numeric($rc)?$rc:ini_get("mysqli.default_port")),(!is_numeric($rc)?$rc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($T){return"'".$this->escape_string($T)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($I,$X,$na){$this->_link=@mysql_connect(($I!=""?$I:ini_get("mysql.default_host")),("$I$X"!=""?$X:ini_get("mysql.default_user")),("$I$X$na"!=""?$na:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($T){return"'".mysql_real_escape_string($T,$this->_link)."'";}function
select_db($gc){return
mysql_select_db($gc,$this->_link);}function
query($j,$dc=false){$k=@($dc?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
false;}if($k===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($k);}function
multi_query($j){return$this->_result=$this->query($j);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($j,$d=0){$k=$this->query($j);if(!$k||!$k->num_rows){return
false;}return
mysql_result($k->_result,0,$d);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($k){$this->_result=$k;$this->num_rows=mysql_num_rows($k);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$e=mysql_fetch_field($this->_result,$this->_offset++);$e->orgtable=$e->table;$e->orgname=$e->name;$e->charsetnr=($e->blob?63:0);return$e;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($I,$X,$na){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$I)),$X,$na);$this->query("SET NAMES utf8");return
true;}function
select_db($gc){return$this->query("USE ".idf_escape($gc));}function
query($j,$dc=false){$this->setAttribute(1000,!$dc);return
parent::query($j,$dc);}}}function
idf_escape($Ea){return"`".str_replace("`","``",$Ea)."`";}function
table($Ea){return
idf_escape($Ea);}function
connect(){global$n;$i=new
Min_DB;$sd=$n->credentials();if($i->connect($sd[0],$sd[1],$sd[2])){$i->query("SET SQL_QUOTE_SHOW_CREATE=1");return$i;}return$i->error;}function
get_databases($bf=true){$e=&get_session("dbs");if(!isset($e)){if($bf){restart_session();ob_flush();flush();}$e=get_vals("SHOW DATABASES");}return$e;}function
limit($j,$x,$S,$ka=0,$Sb=" "){return" $j$x".(isset($S)?$Sb."LIMIT $S".($ka?" OFFSET $ka":""):"");}function
limit1($j,$x){return
limit($j,$x,1);}function
db_collation($w,$U){global$i;$e=null;$ha=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1);if(preg_match('~ COLLATE ([^ ]+)~',$ha,$m)){$e=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ha,$m)){$e=$U[$m[1]][0];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$e=array();foreach($_
as$w){$e[$w]=count(get_vals("SHOW TABLES IN ".idf_escape($w)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($G){return!isset($G["Rows"]);}function
fk_support($G){return($G["Engine"]=="InnoDB");}function
fields($l){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($l))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$m);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($a["Default"]!=""||ereg("char",$m[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$m)?$m[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($l,$K=null){global$i;if(!is_object($K)){$K=$i;}$e=array();foreach(get_rows("SHOW INDEX FROM ".table($l),$K)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($l){global$i,$Ka;static$R='`(?:[^`]|``)+`';$e=array();$Qd=$i->result("SHOW CREATE TABLE ".table($l),1);if($Qd){preg_match_all("~CONSTRAINT ($R) FOREIGN KEY \\(((?:$R,? ?)+)\\) REFERENCES ($R)(?:\\.($R))? \\(((?:$R,? ?)+)\\)(?: ON DELETE (".implode("|",$Ka)."))?(?: ON UPDATE (".implode("|",$Ka)."))?~",$Qd,$fa,PREG_SET_ORDER);foreach($fa
as$m){preg_match_all("~$R~",$m[2],$ta);preg_match_all("~$R~",$m[5],$ma);$e[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$ta[0]),"target"=>array_map('idf_unescape',$ma[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){$e[$a["Charset"]][]=$a["Collation"];}ksort($e);foreach($e
as$c=>$b){sort($e[$c]);}return$e;}function
information_schema($w){global$i;return($i->server_info>=5&&$w=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($w,$qb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($w).($qb?" COLLATE ".q($qb):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$qb){if(create_database($f,$qb)){$Ib=array();foreach(tables_list()as$l=>$O){$Ib[]=table($l)." TO ".idf_escape($f).".".table($l);}if(!$Ib||queries("RENAME TABLE ".implode(", ",$Ib))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$id=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$id="";break;}if($t["type"]=="PRIMARY"){$id=" UNIQUE";}}}return" AUTO_INCREMENT$id";}function
alter_table($l,$f,$p,$Bc,$eb,$ac,$qb,$_c,$ic){$ea=array();foreach($p
as$d){$ea[]=($d[1]?($l!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($l!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ea=array_merge($ea,$Bc);$Eb="COMMENT=".q($eb).($ac?" ENGINE=".q($ac):"").($qb?" COLLATE ".q($qb):"").($_c!=""?" AUTO_INCREMENT=$_c":"").$ic;if($l==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ea)."\n) $Eb");}if($l!=$f){$ea[]="RENAME TO ".table($f);}$ea[]=$Eb;return
queries("ALTER TABLE ".table($l)."\n".implode(",\n",$ea));}function
alter_indexes($l,$ea){foreach($ea
as$c=>$b){$ea[$c]=($b[2]?"\nDROP INDEX ":"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"")).$b[1];}return
queries("ALTER TABLE ".table($l).implode(",",$ea));}function
truncate_tables($qa){return
apply_queries("TRUNCATE TABLE",$qa);}function
drop_views($Oa){return
queries("DROP VIEW ".implode(", ",array_map('table',$Oa)));}function
drop_tables($qa){return
queries("DROP TABLE ".implode(", ",array_map('table',$qa)));}function
move_tables($qa,$Oa,$ma){$Ib=array();foreach(array_merge($qa,$Oa)as$l){$Ib[]=table($l)." TO ".idf_escape($ma).".".table($l);}return
queries("RENAME TABLE ".implode(", ",$Ib));}function
copy_tables($qa,$Oa,$ma){foreach($qa
as$l){$f=($ma==DB?table("copy_$l"):idf_escape($ma).".".table($l));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($l))||!queries("INSERT INTO $f SELECT * FROM ".table($l))){return
false;}}foreach($Oa
as$l){$f=($ma==DB?table("copy_$l"):idf_escape($ma).".".table($l));$zb=view($l);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $zb[select]")){return
false;}}return
true;}function
trigger($f){$E=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($E);}function
triggers($l){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$O){global$i,$lb,$wb,$ba;$Re=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$zd="((".implode("|",array_merge(array_keys($ba),$Re)).")(?:\\s*\\(((?:[^'\")]*|$lb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$R="\\s*(".($O=="FUNCTION"?"":implode("|",$wb)).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$zd";$ha=$i->result("SHOW CREATE $O ".idf_escape($f),2);preg_match("~\\(((?:$R\\s*,?)*)\\)".($O=="FUNCTION"?"\\s*RETURNS\\s+$zd":"")."\\s*(.*)~is",$ha,$m);$p=array();preg_match_all("~$R\\s*,?~is",$m[1],$fa,PREG_SET_ORDER);foreach($fa
as$Na){$f=str_replace("``","`",$Na[2]).$Na[3];$p[]=array("field"=>$f,"type"=>strtolower($Na[5]),"length"=>preg_replace_callback("~$lb~s",'normalize_enum',$Na[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Na[8] $Na[7]"))),"full_type"=>$Na[4],"inout"=>strtoupper($Na[1]),"collation"=>strtolower($Na[9]),);}if($O!="FUNCTION"){return
array("fields"=>$p,"definition"=>$m[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
begin(){return
queries("BEGIN");}function
insert_into($l,$u){return
queries("INSERT INTO ".table($l)." (".implode(", ",array_keys($u)).")\nVALUES (".implode(", ",$u).")");}function
insert_update($l,$u,$xc){foreach($u
as$c=>$b){$u[$c]="$c = $b";}$Ja=implode(", ",$u);return
queries("INSERT INTO ".table($l)." SET $Ja ON DUPLICATE KEY UPDATE $Ja");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ua){return
true;}function
create_sql($l,$_c){global$i;$e=$i->result("SHOW CREATE TABLE ".table($l),1);if(!$_c){$e=preg_replace('~ AUTO_INCREMENT=\\d+~','',$e);}return$e;}function
truncate_sql($l){return"TRUNCATE ".table($l);}function
use_sql($gc){return"USE ".idf_escape($gc);}function
trigger_sql($l,$H){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")),null,"-- ")as$a){$e.="\n".($H=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Pe){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$Pe);}$s="sql";$ba=array();$Oc=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$ba+=$b;$Oc[$c]=array_keys($b);}$Gb=array("unsigned","zerofill","unsigned zerofill");$Ad=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$W=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Fb=array("avg","count","count distinct","group_concat","max","min","sum");$qd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Wb="3.2.0";class
Adminer{var$operators;function
name(){return"Adminer";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}function
loginForm(){global$va;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("driver",$va,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'">
<tr><th>Username<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Password<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($Ef,$na){return
true;}function
tableName($Ec){return
h($Ec["Name"]);}function
fieldName($d,$La=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Ec,$u=""){echo'<p class="tabs">';$Aa=array("select"=>'Select data',"table"=>'Show structure');if(is_view($Ec)){$Aa["view"]='Alter view';}else{$Aa["create"]='Alter table';}if(isset($u)){$Aa["edit"]='New item';}foreach($Aa
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Ec["Name"]).($c=="edit"?$u:"")."'".bold(isset($_GET[$c])).">$b</a>";}echo"\n";}function
foreignKeys($l){return
foreign_keys($l);}function
backwardKeys($l,$Gf){return
array();}function
backwardKeysPrint($Hf,$a){}function
selectQuery($j){global$s;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a> <code class='jush-$s'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edit'."</a>\n";}function
rowDescription($l){return"";}function
rowDescriptions($E,$Se){return$E;}function
selectVal($b,$y,$d){$e=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d byte','%d bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($y?"<a href='$y'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($C,$v){global$W,$Fb;print_fieldset("select",'Select',$C);$g=0;$ye=array('Functions'=>$W,'Aggregation'=>$Fb);foreach($C
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$ye,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($v,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$ye,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($x,$v,$z){print_fieldset("search",'Search',$x);foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'anywhere'.")".optionlist($v,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'anywhere'.")".optionlist($v,null,true)."</select>",html_select("where[$g][op]",$this->operators,"="),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($La,$v,$z){print_fieldset("sort",'Sort',$La);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($v[$b])){echo"<div><select name='order[$g]'><option>".optionlist($v,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'descending')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($v,null,true)."</select>",checkbox("desc[$g]",1,0,'descending')."</div>\n","</div></fieldset>\n";}function
selectLimitPrint($S){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($S)."'>","</div></fieldset>\n";}function
selectLengthPrint($fb){if(isset($fb)){echo"<fieldset><legend>".'Text length'."</legend><div>",'<input name="text_length" size="3" value="'.h($fb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectEmailPrint($Cf,$v){}function
selectColumnsProcess($v,$z){global$W,$Fb;$C=array();$Z=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($v[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$W)||in_array($b["fun"],$Fb)))){$C[$c]=apply_sql_function($b["fun"],(isset($v[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Fb)){$Z[]=$C[$c];}}}return
array($C,$Z);}function
selectSearchProcess($p,$z){global$s;$e=array();foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$pb=" $b[op]";if(ereg('IN$',$b["op"])){$sb=process_length($b["val"]);$pb.=" (".($sb!=""?$sb:"NULL").")";}elseif(!$b["op"]){$pb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$pb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$pb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$pb;}else{$Ya=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Ya[]=($s=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Ya?"(".implode("$pb OR ",$Ya)."$pb)":"0");}}}return$e;}function
selectOrderProcess($p,$z){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($x,$Se){return
false;}function
messageQuery($j){global$s;static$yc=0;restart_session();$D="sql-".($yc++);$Ia=&get_session("queries");$Ia[$_GET["db"]][]=(strlen($j)>1e6?ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...":$j);return" <a href='#$D' onclick=\"return !toggle('$D');\">".'SQL command'."</a><div id='$D' class='hidden'><pre><code class='jush-$s'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ia[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($d){global$qd;$e=($d["null"]?"NULL/":"");foreach($qd
as$c=>$W){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($W
as$R=>$b){if(!$R||ereg($R,$d["type"])){$e.="/$b";}}}}return
explode("/",$e);}function
editInput($l,$d,$Ca,$o){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ca value='-1' checked><i>".'original'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ca value=''".(isset($o)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ca,$d,$o,0);}return"";}function
processInput($d,$o,$A=""){$f=$d["field"];$e=($d["type"]=="bit"&&ereg('^[0-9]+$',$o)?$o:q($o));if(ereg('^(now|getdate|uuid)$',$A)){$e="$A()";}elseif(ereg('^current_(date|timestamp)$',$A)){$e=$A;}elseif(ereg('^([+-]|\\|\\|)$',$A)){$e=idf_escape($f)." $A $e";}elseif(ereg('^[+-] interval$',$A)){$e=idf_escape($f)." $A ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$o)?$o:$e);}elseif(ereg('^(addtime|subtime|concat)$',$A)){$e="$A(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$A)){$e="$A($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput(){$e=array('text'=>'open','file'=>'save');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return$e;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($l,$H,$sc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($H){dump_csv(array_keys(fields($l)));}}elseif($H){$ha=create_sql($l,$_POST["auto_increment"]);if($ha){if($H=="DROP+CREATE"){echo"DROP ".($sc?"VIEW":"TABLE")." IF EXISTS ".table($l).";\n";}if($sc){$ha=preg_replace('~^([A-Z =]+) DEFINER=`'.str_replace("@","`@`",logged_user()).'`~','\\1',$ha);}echo($H!="CREATE+ALTER"?$ha:($sc?substr_replace($ha," OR REPLACE",6,0):substr_replace($ha," IF NOT EXISTS",12,0))).";\n\n";}if($H=="CREATE+ALTER"&&!$sc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($l)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$ob="";foreach(get_rows($j)as$a){$Pa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Pa)?q($Pa):"NULL");$a["after"]=q($ob);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Pa)?" DEFAULT ".($Pa=="CURRENT_TIMESTAMP"?$Pa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($ob?" AFTER ".idf_escape($ob):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$ob=$a["COLUMN_NAME"];}echo"';
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
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($l)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($l,$H,$j){global$i,$s;$Le=($s=="sqlite"?0:1048576);if($H){if($_POST["format"]=="sql"&&$H=="TRUNCATE+INSERT"){echo
truncate_sql($l).";\n";}if($_POST["format"]=="sql"){$p=fields($l);}$k=$i->query($j,1);if($k){$Ub="";$Wa="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){if($H=="table"){dump_csv(array_keys($a));$H="INSERT";}dump_csv($a);}else{if(!$Ub){$Ub="INSERT INTO ".table($l)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$p[$c]["type"])?$b:q($b)):"NULL");}$V=implode(",\t",$a);if($H=="INSERT+UPDATE"){$u=array();foreach($a
as$c=>$b){$u[]=idf_escape($c)." = $b";}echo"$Ub ($V) ON DUPLICATE KEY UPDATE ".implode(", ",$u).";\n";}else{$V=($Le?"\n":" ")."($V)";if(!$Wa){$Wa=$Ub.$V;}elseif(strlen($Wa)+2+strlen($V)<$Le){$Wa.=",$V";}else{$Wa.=";\n";echo$Wa;$Wa=$Ub.$V;}}}}if($_POST["format"]=="sql"&&$H!="INSERT+UPDATE"&&$Wa){$Wa.=";\n";echo$Wa;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$i->error)."\n";}}}function
dumpHeaders($kc,$gd=false){$ya=$_POST["output"];$rb=($_POST["format"]=="sql"?"sql":($gd?"tar":"csv"));header("Content-Type: ".($ya=="bz2"?"application/x-bzip":($ya=="gz"?"application/x-gzip":($rb=="tar"?"application/x-tar":($rb=="sql"||$ya!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($ya=="bz2"){ob_start('bzcompress',1e6);}if($ya=="gz"){ob_start('gzencode',1e6);}return$rb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":"");return
true;}function
navigation($Cb){global$Wb,$i,$B,$s,$va;echo'<h1>
<a href="http://www.adminer.org/" id="h1">',$this->name(),'</a>
<span class="version">',$Wb,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Wb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Cb=="auth"){$ja=true;foreach((array)$_SESSION["pwds"]as$vb=>$xf){foreach($xf
as$I=>$Af){foreach($Af
as$X=>$na){if(isset($na)){if($ja){echo"<p onclick='eventStop(event);'>\n";$ja=false;}echo"<a href='".h(auth_url($vb,$I,$X))."'>($va[$vb]) ".h($X.($I!=""?"@$I":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Cb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL command'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}}echo'<input type="hidden" name="token" value="',$B,'">
<input type="submit" name="logout" value="Logout" onclick="eventStop(event);">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'database'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Use"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($Cb!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$Cb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$qa=tables_list();if(!$qa){echo"<p class='message'>".'No tables.'."\n";}else{$this->tablesPrint($qa);$Aa=array();foreach($qa
as$l=>$O){$Aa[]=preg_quote($l,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $s: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$Aa).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$s;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($qa){echo"<p id='tables'>\n";foreach($qa
as$l=>$O){echo'<a href="'.h(ME).'select='.urlencode($l).'"'.bold($_GET["select"]==$l).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($l).'"'.bold($_GET["table"]==$l).">".$this->tableName(array("Name"=>$l))."</a><br>\n";}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($n->operators)){$n->operators=$Ad;}function
page_header($Ge,$q="",$Ob=array(),$ue=""){global$Te,$n,$i,$va;header("Content-Type: text/html; charset=utf-8");$n->headers();$te=$Ge.($ue!=""?": ".h($ue):"");$ge=$te.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name();if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($ge));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ge,'</title>
<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.2.0",'">
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.2.0",'">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}echo'
<body class="ltr" onclick="return bodyClick(event, \'',js_escape(DB),'\', \'',js_escape($_GET["ns"]),'\');" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion('$nd');"),'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.2.0",'"></script>

<div id="content">
';}if(isset($Ob)){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.($y?h($y):".").'">'.$va[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$I=(SERVER!=""?h(SERVER):'Server');if($Ob===false){echo"$I\n";}else{echo"<a href='".($y?h($y):".")."'>$I</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ob))){echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Ob)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Ob
as$c=>$b){$fc=(is_array($b)?$b[1]:$b);if($fc!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($fc).'</a> &raquo; ';}}}echo"$Ge\n";}}echo"<h2>$te</h2>\n";restart_session();$fe=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ae=$_SESSION["messages"][$fe];if($ae){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ae)."</div>\n";unset($_SESSION["messages"][$fe]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Cb=""){global$n;if(!is_ajax()){echo'</div>

<div id="menu">
';$n->navigation($Cb);echo'</div>
';}}function
int32($N){while($N>=2147483648){$N-=4294967296;}while($N<=-2147483649){$N+=4294967296;}return(int)$N;}function
long2str($r,$hd){$V='';foreach($r
as$b){$V.=pack('V',$b);}if($hd){return
substr($V,0,end($r));}return$V;}function
str2long($V,$hd){$r=array_values(unpack('V*',str_pad($V,4*ceil(strlen($V)/4),"\0")));if($hd){$r[]=strlen($V);}return$r;}function
xxtea_mx($la,$ra,$sa,$za){return
int32((($la>>5&0x7FFFFFF)^$ra<<2)+(($ra>>3&0x1FFFFFFF)^$la<<4))^int32(($sa^$ra)+($za^$la));}function
encrypt_string($cc,$c){if($cc==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($cc,true);$N=count($r)-1;$la=$r[$N];$ra=$r[0];$Q=floor(6+52/($N+1));$sa=0;while($Q-->0){$sa=int32($sa+0x9E3779B9);$Lb=$sa>>2&3;for($oa=0;$oa<$N;$oa++){$ra=$r[$oa+1];$nb=xxtea_mx($la,$ra,$sa,$c[$oa&3^$Lb]);$la=int32($r[$oa]+$nb);$r[$oa]=$la;}$ra=$r[0];$nb=xxtea_mx($la,$ra,$sa,$c[$oa&3^$Lb]);$la=int32($r[$N]+$nb);$r[$N]=$la;}return
long2str($r,false);}function
decrypt_string($cc,$c){if($cc==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$r=str2long($cc,false);$N=count($r)-1;$la=$r[$N];$ra=$r[0];$Q=floor(6+52/($N+1));$sa=int32($Q*0x9E3779B9);while($sa){$Lb=$sa>>2&3;for($oa=$N;$oa>0;$oa--){$la=$r[$oa-1];$nb=xxtea_mx($la,$ra,$sa,$c[$oa&3^$Lb]);$ra=int32($r[$oa]-$nb);$r[$oa]=$ra;}$la=$r[$N];$nb=xxtea_mx($la,$ra,$sa,$c[$oa&3^$Lb]);$ra=int32($r[0]-$nb);$r[0]=$ra;$sa=int32($sa-0x9E3779B9);}return
long2str($r,true);}$i='';$B=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$ib=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$ib[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Kc=$n->permanentLogin();$ib[$c]="$c:".base64_encode($Kc?encrypt_string($_POST["password"],$Kc):"");cookie("adminer_permanent",implode(" ",$ib));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($B&&$_POST["token"]!=$B){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($ib[$c]){unset($ib[$c]);cookie("adminer_permanent",implode(" ",$ib));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($ib&&!$_SESSION["pwds"]){session_regenerate_id();$Kc=$n->permanentLogin();foreach($ib
as$c=>$b){list(,$yf)=explode(":",$b);list($vb,$I,$X)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$vb][$I][$X]=decrypt_string(base64_decode($yf),$Kc);}}function
auth_error($pe=null){global$i,$n,$B;$Fc=session_name();$q="";if(!$_COOKIE[$Fc]&&$_GET[$Fc]&&ini_bool("session.use_only_cookies")){$q='Session support must be enabled.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Fc]||$_GET[$Fc])&&!$B){$q='Session expired, please login again.';}else{$na=&get_session("pwds");if(isset($na)){$q=h($pe?$pe->getMessage():(is_string($i)?$i:'Invalid credentials.'));$na=null;}}}page_header('Login',$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$Ze)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$B=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$B;}$q=($_POST?($_POST["token"]==$B?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));function
connect_error(){global$i,$B,$q,$va;$_=array();if(DB!=""){page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$q){queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));}page_header('Select database',$q,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('%s version: %s through PHP extension %s',$va[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$wf=support("scheme");$U=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td><input type='hidden' name='token' value='$B'>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($_
as$w){$dd=h(ME)."db=".urlencode($w);echo"<tr".odd()."><td>".checkbox("db[]",$w,in_array($w,(array)$_POST["db"])),"<th><a href='$dd'>".h($w)."</a>","<td><a href='$dd".($wf?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($w,$U))."</a>","<td align='right'><a href='$dd&amp;schema=' id='tables-".h($w)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Refresh'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$K=null,$Be=""){$Aa=array();$z=array();$v=array();$ne=array();$ba=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($ca=0;$ca<count($a);$ca++){$d=$k->fetch_field();$ua=$d->orgtable;$Pb=$d->orgname;if($ua!=""){if(!isset($z[$ua])){$z[$ua]=array();foreach(indexes($ua,$K)as$t){if($t["type"]=="PRIMARY"){$z[$ua]=array_flip($t["columns"]);break;}}$v[$ua]=$z[$ua];}if(isset($v[$ua][$Pb])){unset($v[$ua][$Pb]);$z[$ua][$Pb]=$ca;$Aa[$ca]=$ua;}}if($d->charsetnr==63){$ne[$ca]=true;}$ba[$ca]=$d->type;$f=h($d->name);echo"<th".($ua!=""||$d->name!=$Pb?" title='".h(($ua!=""?"$ua.":"").$Pb)."'":"").">".($Be?"<a href='$Be".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}else{if($ne[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d byte','%d bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($ba[$c]==254){$b="<code>$b</code>";}}if(isset($Aa[$c])&&!$v[$Aa[$c]]){$y="edit=".urlencode($Aa[$c]);foreach($z[$Aa[$c]]as$Mc=>$ca){$y.="&where".urlencode("[".bracket_escape($Mc)."]")."=".urlencode($a[$ca]);}$b="<a href='".h(ME.$y)."'>$b</a>";}}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'No rows.')."\n";}function
referencable_primary($vf){$e=array();foreach(table_status()as$wa=>$l){if($wa!=$vf&&fk_support($l)){foreach(fields($wa)as$d){if($d["primary"]){if($e[$wa]){unset($e[$wa]);break;}$e[$wa]=$d;}}}}return$e;}function
textarea($f,$o,$E=10,$Ya=80){echo"<textarea name='$f' rows='$E' cols='$Ya' style='width: 98%;' spellcheck='false' wrap='off' onkeypress='return textareaKeypress(this, event, true);'>";if(is_array($o)){foreach($o
as$b){echo
h($b).";\n\n\n";}}else{echo
h($o);}echo"</textarea>";}function
format_time($ec,$Qb){return" <span class='time'>(".sprintf('%.3f s',max(0,$Qb[0]-$ec[0]+$Qb[1]-$ec[1])).")</span>";}function
edit_type($c,$d,$U,$L=array()){global$Oc,$ba,$Gb,$Ka;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($ba[$d["type"]])?array():array($d["type"]))+$Oc+($L?array('Foreign keys'=>$L):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($U,$d["collation"]).'</select>',($Gb?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($Gb,$d["unsigned"]).'</select>':''),($L?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($Ka,$d["on_delete"])."</select> ":" ");}function
process_length($xa){global$lb;return(preg_match("~^\\s*(?:$lb)(?:\\s*,\\s*(?:$lb))*\\s*\$~",$xa)&&preg_match_all("~$lb~",$xa,$fa)?implode(",",$fa[0]):preg_replace('~[^0-9,+-]~','',$xa));}function
process_type($d,$Mb="COLLATE"){global$Gb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$Gb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Mb ".q($d["collation"]):"");}function
process_field($d,$mc){return
array(idf_escape($d["field"]),process_type($mc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".($d["type"]=="timestamp"&&eregi("^CURRENT_TIMESTAMP$",$d["default"])?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($O){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$O)){return" class='$c'";}}}function
edit_fields($p,$U,$O="TABLE",$de=0,$L=array(),$mb=false){global$wb;foreach($p
as$d){if($d["comment"]!=""){$mb=true;break;}}echo'<thead><tr class="wrap">
';if($O=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($O=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($O=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td class="hidden">Default values
',(support("comment")?"<td".($mb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$g=>$d){$g++;$cd=$d[($_POST?"orig":"field")];$be=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$cd=="");echo'<tr',($be?"":" style='display: none;'"),'>
',($O=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",$wb,$d["inout"]):""),'<th>';if($be){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $de); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($cd),'">
';edit_type("fields[$g]",$d,$U,$L);if($O=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td class="hidden"><?php echo
checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($mb?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, $de, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.2.0' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.2.0' alt='v' title='".'Move down'."'>&nbsp;":""),($cd==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.2.0' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}return$mb;}function
process_fields(&$p){ksort($p);$ka=0;if($_POST["up"]){$bb=0;foreach($p
as$c=>$d){if(key($_POST["up"])==$c){unset($p[$c]);array_splice($p,$bb,0,array($d));break;}if(isset($d["field"])){$bb=$ka;}$ka++;}}if($_POST["down"]){$aa=false;foreach($p
as$c=>$d){if(isset($d["field"])&&$aa){unset($p[key($_POST["down"])]);array_splice($p,$ka,0,array($aa));break;}if(key($_POST["down"])==$c){$aa=$d;}$ka++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($m){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($m[0][0].$m[0][0],$m[0][0],substr($m[0],1,-1))),'\\'))."'";}function
grant($P,$Y,$v,$jb){if(!$Y){return
true;}if($Y==array("ALL PRIVILEGES","GRANT OPTION")){return($P=="GRANT"?queries("$P ALL PRIVILEGES$jb WITH GRANT OPTION"):queries("$P ALL PRIVILEGES$jb")&&queries("$P GRANT OPTION$jb"));}return
queries("$P ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$v, ",$Y).$v).$jb);}function
drop_create($ie,$ha,$M,$he,$Oe,$lf,$f){if($_POST["drop"]){return
query_redirect($ie,$M,$he,true,!$_POST["dropped"]);}$Qa=$f!=""&&($_POST["dropped"]||queries($ie));$jf=queries($ha);if(!queries_redirect($M,($f!=""?$Oe:$lf),$jf)&&$Qa){redirect(null,$he);}return$Qa;}function
tar_file($hb,$Zc){$e=pack("a100a8a8a8a12a12",$hb,644,0,0,decoct(strlen($Zc)),decoct(time()));$Fe=8*32;for($g=0;$g<strlen($e);$g++){$Fe+=ord($e{$g});}$e.=sprintf("%06o",$Fe)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Zc.str_repeat("\0",511-(strlen($Zc)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ka=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$lb="'(?:''|[^'\\\\]|\\\\.)*+'";$wb=array("IN","OUT","INOUT");if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$p=fields($h);if(!$p){$q=error();}$G=($p?table_status($h):array());page_header(($p&&is_view($G)?'View':'Table').": ".h($h),$q);$n->selectLinks($G);$eb=$G["Comment"];if($eb!=""){echo"<p>".'Comment'.": ".h($eb)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($G)){echo"<h3>".'Indexes'."</h3>\n";$z=indexes($h);if($z){echo"<table cellspacing='0'>\n";foreach($z
as$f=>$t){ksort($t["columns"]);$Va=array();foreach($t["columns"]as$c=>$b){$Va[]="<i>".h($b)."</i>".($t["lengths"][$c]?"(".$t["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$t[type]<td>".implode(", ",$Va)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Alter indexes'."</a>\n";if(fk_support($G)){echo"<h3>".'Foreign keys'."</h3>\n";$L=foreign_keys($h);if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($s!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($L
as$f=>$F){$y=($F["db"]!=""?"<b>".h($F["db"])."</b>.":"").h($F["table"]);echo"<tr>","<th><i>".implode("</i>, <i>",array_map('h',$F["source"]))."</i>","<td><a href='".h($F["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($F["db"]),ME):ME)."table=".urlencode($F["table"])."'>$y</a>","(<i>".implode("</i>, <i>",array_map('h',$F["target"]))."</i>)","<td>$F[on_delete]\n","<td>$F[on_update]\n";if($s!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Alter'.'</a>';}}echo"</table>\n";}if($s!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Add foreign key'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggers'."</h3>\n";$Rb=triggers($h);if($Rb){echo"<table cellspacing='0'>\n";foreach($Rb
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Alter'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB);$ab=array();$Ke=array();$f="adminer_schema";preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]),$fa,PREG_SET_ORDER);foreach($fa
as$g=>$m){$ab[$m[1]]=array($m[2],$m[3]);$Ke[]="\n\t'".js_escape($m[1])."': [ $m[2], $m[3] ]";}$Db=0;$Je=-1;$Ua=array();$De=array();$Ce=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$hc=0;$Ua[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$hc+=1.25;$d["pos"]=$hc;$Ua[$a["Name"]]["fields"][$f]=$d;}$Ua[$a["Name"]]["pos"]=($ab[$a["Name"]]?$ab[$a["Name"]]:array($Db,0));foreach($n->foreignKeys($a["Name"])as$b){if(!$b["db"]){$pa=$Je;if($ab[$a["Name"]][1]||$ab[$b["table"]][1]){$pa=min(floatval($ab[$a["Name"]][1]),floatval($ab[$b["table"]][1]))-1;}else{$Je-=.1;}while($Ce[(string)$pa]){$pa-=.0001;}$Ua[$a["Name"]]["references"][$b["table"]][(string)$pa]=array($b["source"],$b["target"]);$De[$b["table"]][$a["Name"]][(string)$pa]=$b["target"];$Ce[(string)$pa]=true;}}$Db=max($Db,$Ua[$a["Name"]]["pos"][0]+2.5+$hc);}echo'<div id="schema" style="height: ',$Db,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Ke)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Db,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Ua
as$f=>$l){echo"<div class='table' style='top: ".$l["pos"][0]."em; left: ".$l["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($l["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$l["references"]as$Ab=>$Yb){foreach($Yb
as$pa=>$Ic){$Xb=$pa-$ab[$f][1];$g=0;foreach($Ic[0]as$ta){echo"<div class='references' title='".h($Ab)."' id='refs$pa-".($g++)."' style='left: $Xb"."em; top: ".$l["fields"][$ta]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Xb)."em;'></div></div>\n";}}}foreach((array)$De[$f]as$Ab=>$Yb){foreach($Yb
as$pa=>$v){$Xb=$pa-$ab[$f][1];$g=0;foreach($v
as$ma){echo"<div class='references' title='".h($Ab)."' id='refd$pa-".($g++)."' style='left: $Xb"."em; top: ".$l["fields"][$ma]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.2.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Xb)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ua
as$f=>$l){foreach((array)$l["references"]as$Ab=>$Yb){foreach($Yb
as$pa=>$Ic){$uc=$Db;$Qc=-10;foreach($Ic[0]as$c=>$ta){$Zd=$l["pos"][0]+$l["fields"][$ta]["pos"];$Ae=$Ua[$Ab]["pos"][0]+$Ua[$Ab]["fields"][$Ic[1][$c]]["pos"];$uc=min($uc,$Zd,$Ae);$Qc=max($Qc,$Zd,$Ae);}echo"<div class='references' id='refl$pa' style='left: $pa"."em; top: $uc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Qc-$uc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h($_SERVER["REQUEST_URI"]),'" id="schema-link">#</a>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$_e="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$c){$_e.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($_e,1));$rb=dump_headers(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Za=($_POST["format"]=="sql");if($Za){echo"-- Adminer $Wb ".$va[DRIVER]." dump

".($s!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$H=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$w){if($i->select_db($w)){if($Za&&ereg('CREATE',$H)&&($ha=$i->result("SHOW CREATE DATABASE ".idf_escape($w),1))){if($H=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($w).";\n";}echo($H=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ha):$ha).";\n";}if($Za){if($H){echo
use_sql($w).";\n\n";}if(in_array("CREATE+ALTER",array($H,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Xa="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Da){foreach(get_rows("SHOW $Da STATUS WHERE Db = ".q($w),null,"-- ")as$a){$Xa.=($H!='DROP+CREATE'?"DROP $Da IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $Da ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Xa.=($H!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Xa){echo"DELIMITER ;;\n\n$Xa"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Oa=array();foreach(table_status()as$a){$l=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$ud=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($l||$ud){if(!is_view($a)){if($rb=="tar"){ob_start();}$n->dumpTable($a["Name"],($l?$_POST["table_style"]:""));if($ud){$n->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($Za&&$_POST["triggers"]){$Rb=trigger_sql($a["Name"],$_POST["table_style"]);if($Rb){echo"\nDELIMITER ;;\n$Rb\nDELIMITER ;\n";}}if($rb=="tar"){echo
tar_file((DB!=""?"":"$w/")."$a[Name].csv",ob_get_clean());}elseif($Za){echo"\n";}}elseif($Za){$Oa[]=$a["Name"];}}}foreach($Oa
as$zb){$n->dumpTable($zb,$_POST["table_style"],true);}if($rb=="tar"){echo
pack("x512");}}if($H=="CREATE+ALTER"&&$Za){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$eb=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $eb THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$eb;
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
";}if(in_array("CREATE+ALTER",array($H,$_POST["table_style"]))&&$Za){echo"SELECT @adminer_alter;\n";}}}if($Za){echo"-- ".$i->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$xd=array('','USE','DROP+CREATE','CREATE');$Fd=array('','DROP+CREATE','CREATE');$Ed=array('','TRUNCATE+INSERT','INSERT');if($s=="sql"){$xd[]='CREATE+ALTER';$Fd[]='CREATE+ALTER';$Ed[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["auto_increment"]=$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$n->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$n->dumpFormat(),$a["format"],0)."\n";echo($s=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$xd,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Routines'):"").(support("event")?checkbox("events",1,$a["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Fd,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Ed,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$bd=array();if(DB!=""){$Ha=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ha onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Ha onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Oa="";foreach(table_status()as$a){$f=$a["Name"];$Nb=ereg_replace("_.*","",$f);$Ha=($h==""||$h==(substr($h,-1)=="%"?"$Nb%":$f));$Va="<tr><td>".checkbox("tables[]",$f,$Ha,$f,"formUncheck('check-tables');");if(is_view($a)){$Oa.="$Va\n";}else{echo"$Va<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Ha,"","formUncheck('check-data');")."</label>\n";}$bd[$Nb]++;}echo$Oa;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$w){if(!information_schema($w)){$Nb=ereg_replace("_.*","",$w);echo"<tr><td>".checkbox("databases[]",$w,$h==""||$h=="$Nb%",$w,"formUncheck('check-databases');")."</label>\n";$bd[$Nb]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20' onkeypress='return textareaKeypress(this, event);'></textarea>";}}echo'</table>
</form>
';$ja=true;foreach($bd
as$c=>$b){if($c!=""&&$b>1){echo($ja?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$ja=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$k=$i->query("SELECT User, Host FROM mysql.user ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Username: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Edit">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Username'."<th>".'Server'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'edit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$q&&$_POST["export"]){dump_headers("sql");$n->dumpTable("","");$n->dumpData("","table",$_POST["query"]);exit;}restart_session();$tf=&get_session("queries");$Ia=&$tf[DB];if(!$q&&$_POST["clear"]){$Ia=array();redirect(remove_from_uri("history"));}page_header('SQL command',$q);if(!$q&&$_POST){$_a=false;$j=$_POST["query"];if($_POST["webfile"]){$_a=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($_a?fread($_a,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",2*strlen($j)+memory_get_usage()+8e6);}if($j!=""&&strlen($j)<1e6&&(!$Ia||end($Ia)!=$j)){$Ia[]=$j;}$Dc="(\\s|/\\*.*\\*/|(#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Xc=";";$ka=0;$xb=true;$K=connect();if(is_object($K)&&DB!=""){$K->select_db(DB);}$kb=0;$wc=array();$sf='[\'`"]'.($s=="pgsql"?'|\\$[^$]*\\$':($s=="mssql"||$s=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$rf=explode(" ",microtime());parse_str($_COOKIE["adminer_export"],$yb);$wd=$n->dumpFormat();unset($wd["sql"]);while($j!=""){if(!$ka&&$s=="sql"&&preg_match('~^\\s*DELIMITER\\s+(.+)~i',$j,$m)){$Xc=$m[1];$j=substr($j,strlen($m[0]));}else{preg_match('('.preg_quote($Xc)."|$sf|\$)",$j,$m,PREG_OFFSET_CAPTURE,$ka);$aa=$m[0][0];$ka=$m[0][1]+strlen($aa);if(!$aa&&$_a&&!feof($_a)){$j.=fread($_a,1e5);}else{if(!$aa&&rtrim($j)==""){break;}if($aa&&$aa!=$Xc){while(preg_match('('.($aa=='/*'?'\\*/':($aa=='['?']':(ereg('^-- |^#',$aa)?"\n":preg_quote($aa)."|\\\\."))).'|$)s',$j,$m,PREG_OFFSET_CAPTURE,$ka)){$V=$m[0][0];$ka=$m[0][1]+strlen($V);if(!$V&&$_a&&!feof($_a)){$j.=fread($_a,1e6);}elseif($V[0]!="\\"){break;}}}else{$xb=false;$Q=substr($j,0,$m[0][1]);$kb++;$Va="<pre id='sql-$kb'><code class='jush-$s'>".shorten_utf8(trim($Q),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Va;ob_flush();flush();}$ec=explode(" ",microtime());if($i->multi_query($Q)){if(is_object($K)&&preg_match("~^$Dc*(USE)\\b~isU",$Q)){$K->query($Q);}do{$k=$i->store_result();$Qb=explode(" ",microtime());$_d=format_time($ec,$Qb).(strlen($Q)<1000?" <a href='".h(ME)."sql=".urlencode(trim($Q))."'>".'Edit'."</a>":"");if(!is_object($k)){if(preg_match("~^$Dc*(CREATE|DROP|ALTER)$Dc+(DATABASE|SCHEMA)\\b~isU",$Q)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($i->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$i->affected_rows)."$_d\n";}}else{if($_POST["only_errors"]){echo$Va;$Va="";}select($k,$K);echo"<form action='' method='post'>\n","<p>".($k->num_rows?lang(array('%d row','%d rows'),$k->num_rows):"").$_d;$D="export-$kb";$Yd=", <a href='#$D' onclick=\"return !toggle('$D');\">".'Export'."</a><span id='$D' class='hidden'>: ".html_select("output",$n->dumpOutput(),$yb["output"])." ".html_select("format",$wd,$yb["format"])." <input type='hidden' name='query' value='".h($Q)."' />"." <input type='hidden' name='token' value='$B' />"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'></span>";if($K&&preg_match("~^($Dc|\\()*SELECT\\b~isU",$Q)&&($qf=explain($K,$Q))){$D="explain-$kb";echo", <a href='#$D' onclick=\"return !toggle('$D');\">EXPLAIN</a>$Yd\n","<div id='$D' class='hidden'>\n";select($qf,$K,($s=="sql"?"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/explain-output.html#":""));echo"</div>\n";}else{echo"$Yd\n";}echo"</form>\n";}$ec=$Qb;}while($i->next_result());}elseif($i->error){echo($_POST["only_errors"]?$Va:""),"<p class='error'>".'Error in query'.": ".error()."\n";$wc[]=" <a href='#sql-$kb'>$kb</a>";if($_POST["error_stops"]){break;}}$j=substr($j,$ka);$ka=0;}}}}if($xb){echo"<p class='message'>".'No commands to execute.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$kb-count($wc)).format_time($rf,explode(" ",microtime()))."\n";}elseif($wc&&$kb>1){echo"<p class='error'>".'Error in query'.": ".implode("",$wc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data">
<p>';$Q=$_GET["sql"];if($_POST){$Q=$_POST["query"];}elseif($_GET["history"]=="all"){$Q=$Ia;}elseif($_GET["history"]!=""){$Q=$Ia[$_GET["history"]];}textarea("query",$Q,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file"> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.');echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Execute" title="Ctrl+Enter">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"]);$Wc=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$Wc[]=".$c";}}echo
sprintf('Webserver file %s',"<code>adminer.sql".($Wc?"[".implode("|",$Wc)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Ia){print_fieldset("history",'History',$_GET["history"]!="");foreach($Ia
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Edit'."</a> <code class='jush-$s'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$x=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ja=(isset($_GET["select"])?$_POST["edit"]:$x);$p=fields($h);foreach($p
as$f=>$d){if(!isset($d["privileges"][$Ja?"update":"insert"])||$n->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$M=$_POST["referer"];if($_POST["insert"]){$M=($Ja?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$M)){$M=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $x"),$M,'Item has been deleted.');}else{$u=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$u[idf_escape($f)]=($Ja?"\n".idf_escape($f)." = $b":$b);}}if($Ja){if(!$u){redirect($M);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$u),"\nWHERE $x"),$M,'Item has been updated.');}else{$k=insert_into($h,$u);$Sd=($k?last_id():0);queries_redirect($M,sprintf('Item%s has been inserted.',($Sd?" $Sd":"")),$k);}}}$wa=$n->tableName(table_status($h));page_header(($Ja?'Edit':'Insert'),$q,array("select"=>array($h,$wa)),$wa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($x){$C=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$C[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($C){$E=get_rows("SELECT".limit(implode(", ",$C)." FROM ".table($h)," WHERE $x",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($E)!=1?null:reset($E));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$n->fieldName($d);$Pa=$_GET["set"][bracket_escape($f)];$o=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?+$a[$f]:$a[$f]):(!$Ja&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Pa)?$Pa:$d["default"]))));if(!$_POST["save"]&&is_string($o)){$o=$n->editVal($o,$d);}$A=($_POST["save"]?(string)$_POST["function"][$f]:($x&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($o===false?null:(isset($o)?'':'NULL'))));if($d["type"]=="timestamp"&&$o=="CURRENT_TIMESTAMP"){$o="";$A="now";}input($d,$o,$A);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
';if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo'<input type="submit" name="insert" value="'.($Ja?'Save and continue edit':'Save and insert next')."\">\n";}}echo($Ja?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n")),'</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$Rd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$Gd=referencable_primary($h);$L=array();foreach($Gd
as$wa=>$d){$L[str_replace("`","``",$wa)."`".str_replace("`","``",$d["field"])]=$wa;}$Cc=array();$Ac=array();if($h!=""){$Cc=fields($h);$Ac=table_status($h);}if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Table has been dropped.');}else{$p=array();$Bc=array();ksort($_POST["fields"]);$Sc=reset($Cc);$ob="FIRST";foreach($_POST["fields"]as$c=>$d){$F=$L[$d["type"]];$mc=(isset($F)?$Gd[$F]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Pa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Pa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Pa;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Xd=process_field($d,$mc);if($Xd!=process_field($Sc,$Sc)){$p[]=array($d["orig"],$Xd,$ob);}if(isset($F)){$Bc[idf_escape($d["field"])]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($L[$d["type"]])." (".idf_escape($mc["field"]).")".(in_array($d["on_delete"],$Ka)?" ON DELETE $d[on_delete]":"");}$ob="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$Sc=next($Cc);}}$ic="";if(in_array($_POST["partition_by"],$Rd)){$Rc=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$o=$_POST["partition_values"][$c];$Rc[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($o!=""?" ($o)":" MAXVALUE");}}$ic.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Rc?" (".implode(",",$Rc)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$ic.="\nREMOVE PARTITIONING";}$ia='Table has been altered.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$ia='Table has been created.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ia,alter_table($h,$_POST["name"],$p,$Bc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Ac["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Ac["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$ic));}}page_header(($h!=""?'Alter table':'Create table'),$q,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ba["int"])?"int":(isset($ba["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$Ac;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Cc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Hb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Hb ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Hb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Wd){$a["partition_names"][]=$Wd["PARTITION_NAME"];$a["partition_values"][]=$Wd["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$U=collations();$Tc=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Tc&&count($a["fields"])>$Tc){echo"<p class='error'>".h(sprintf('Maximum number of allowed fields exceeded. Please increase %s and %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$Uc=engines();foreach($Uc
as$ac){if(!strcasecmp($ac,$a["Engine"])){$a["Engine"]=$ac;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($h==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Uc?html_select("Engine",array(""=>"(".'engine'.")")+$Uc,$a["Engine"]):""),' ',($U&&!ereg("sqlite|mssql",$s)?html_select("Collation",array(""=>"(".'collation'.")")+$U,$a["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$mb=edit_fields($a["fields"],$U,"TABLE",$Tc,$L,$a["Comment"]!="");echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label><input type="checkbox" onclick="columnShow(this.checked, 5);">Default values</label>
',(support("comment")?checkbox("","",$mb,'Comment',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();").' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($mb?'':' class="hidden"').'>':''),'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Save">
';if(strlen($_GET["create"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if(support("partitioning")){$Jd=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partition by',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Rd,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitions: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($Jd||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Jd?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$Hc=array("PRIMARY","UNIQUE","INDEX");$G=table_status($h);if(eregi("MyISAM|M?aria",$G["Engine"])){$Hc[]="FULLTEXT";}$z=indexes($h);if($s=="sqlite"){unset($Hc[0]);unset($z[""]);}if($_POST&&!$q&&!$_POST["add"]){$ea=array();foreach($_POST["indexes"]as$t){if(in_array($t["type"],$Hc)){$v=array();$Jb=array();$u=array();ksort($t["columns"]);foreach($t["columns"]as$c=>$ga){if($ga!=""){$xa=$t["lengths"][$c];$u[]=idf_escape($ga).($xa?"(".(+$xa).")":"");$v[]=$ga;$Jb[]=($xa?$xa:null);}}if($v){foreach($z
as$f=>$gb){ksort($gb["columns"]);ksort($gb["lengths"]);if($t["type"]==$gb["type"]&&array_values($gb["columns"])===$v&&(!$gb["lengths"]||array_values($gb["lengths"])===$Jb)){unset($z[$f]);continue
2;}}$ea[]=array($t["type"],"(".implode(", ",$u).")");}}}foreach($z
as$f=>$gb){$ea[]=array($gb["type"],idf_escape($f),"DROP");}if(!$ea){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indexes have been altered.',alter_indexes($h,$ea));}page_header('Indexes',$q,array("table"=>$h),$h);$p=array_keys(fields($h));$a=array("indexes"=>$z);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$t){if($t["columns"][count($t["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$t=end($a["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$t){$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)</thead>
';$ca=1;foreach($a["indexes"]as$t){echo"<tr><td>".html_select("indexes[$ca][type]",array(-1=>"")+$Hc,$t["type"],($ca==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$g=1;foreach($t["columns"]as$c=>$ga){echo"<span>".html_select("indexes[$ca][columns][$g]",array(-1=>"")+$p,$ga,($g==count($t["columns"])?"indexesAddColumn(this);":1)),"<input name='indexes[$ca][lengths][$g]' size='2' value='".h($t["lengths"][$c])."'> </span>";$g++;}$ca++;}echo'</table>
<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$q&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Database has been renamed.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$Ld=true;$bb="";foreach($_
as$w){if(count($_)==1||$w!=""){if(!create_database($w,$_POST["collation"])){$Ld=false;}$bb=$w;}}queries_redirect(ME."db=".urlencode($bb),'Database has been created.',$Ld);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$q,array(),DB);$U=collations();$f=DB;$Mb=null;if($_POST){$f=$_POST["name"];$Mb=$_POST["collation"];}elseif(DB!=""){$Mb=db_collation(DB,$U);}elseif($s=="sql"){foreach(get_vals("SHOW GRANTS")as$P){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$P,$m)&&$m[1]){$f=stripcslashes(idf_unescape("`$m[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40" onkeypress="return textareaKeypress(this, event);">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($U?html_select("collation",array(""=>"(".'collation'.")")+$U,$Mb):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="hidden" name="token" value="<?php echo$B,'">
<input type="submit" value="Save">
';if(DB!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.2.0' alt='+' title='".'Add next'."'>\n";}echo'</form>
';}elseif(isset($_GET["call"])){$Fa=$_GET["call"];page_header('Call'.": ".h($Fa),$q);$Da=routine($Fa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$sb=array();$Xa=array();foreach($Da["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Xa[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$sb[]=$g;}}if(!$q&&$_POST){$Nd=array();foreach($Da["fields"]as$c=>$d){if(in_array($c,$sb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Xa[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Nd[]=(isset($Xa[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Fa)."(".implode(", ",$Nd).")";echo"<p><code class='jush-$s'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edit'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{do{$k=$i->store_result();if(is_object($k)){select($k);}else{echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$i->affected_rows)."\n";}}while($i->next_result());if($Xa){select($i->query("SELECT ".implode(", ",$Xa)));}}}echo'
<form action="" method="post">
';if($sb){echo"<table cellspacing='0'>\n";foreach($sb
as$c){$d=$Da["fields"][$c];$f=$d["field"];echo"<tr><th>".$n->fieldName($d);$o=$_POST["fields"][$f];if($o!=""){if($d["type"]=="enum"){$o=+$o;}if($d["type"]=="set"){$o=array_sum($o);}}input($d,$o,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Call">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$q&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($s=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Foreign key has been dropped.');}else{$ta=array_filter($_POST["source"],'strlen');ksort($ta);$ma=array();foreach($ta
as$c=>$b){$ma[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$ta)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ma)).")".(in_array($_POST["on_delete"],$Ka)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Ka)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Foreign key has been altered.':'Foreign key has been created.'));$q='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$q";}}page_header('Foreign key',$q,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$L=foreign_keys($h);$a=$L[$_GET["name"]];$a["source"][]="";}$ta=array_keys(fields($h));$ma=($h===$a["table"]?$ta:array_keys(fields($a["table"])));$Md=array();foreach(table_status()as$f=>$G){if(fk_support($G)){$Md[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""){echo'Target table:
',html_select("table",$Md,$a["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$ca=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".(+$c)."]",array(-1=>"")+$ta,$b,($ca==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$c)."]",$ma,$a["target"][$c]);$ca++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$Ka,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$Ka,$a["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$B,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$Qa=false;if($_POST&&!$q){$Qa=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View has been dropped.','View has been altered.','View has been created.',$h);}page_header(($h!=""?'Alter view':'Create view'),$q,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Qa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
</form>
';}elseif(isset($_GET["event"])){$Sa=$_GET["event"];$oe=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Vc=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$q){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Sa),substr(ME,0,-1),'Event has been dropped.');}elseif(in_array($_POST["INTERVAL_FIELD"],$oe)&&isset($Vc[$_POST["STATUS"]])){$Td="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";query_redirect(($Sa!=""?"ALTER EVENT ".idf_escape($Sa).$Td.($Sa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Td)."\n".$Vc[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"])." DO\n$_POST[EVENT_DEFINITION]",substr(ME,0,-1),($Sa!=""?'Event has been altered.':'Event has been created.'));}}page_header(($Sa!=""?'Alter event'.": ".h($Sa):'Create event'),$q);$a=array();if($_POST){$a=$_POST;}elseif($Sa!=""){$E=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Sa));$a=reset($E);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>End<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Every<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$oe,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Vc,$a["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Save">
';if($Sa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["procedure"])){$Fa=$_GET["procedure"];$Da=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Qa=false;if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$u=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$u[]=(in_array($d["inout"],$wb)?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Qa=drop_create("DROP $Da ".idf_escape($Fa),"CREATE $Da ".idf_escape($_POST["name"])." (".implode(", ",$u).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"")."\n$_POST[definition]",substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$Fa);}page_header(($Fa!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($Fa):(isset($_GET["function"])?'Create function':'Create procedure')),$q);$U=get_vals("SHOW CHARACTER SET");sort($U);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Fa!=""){$a=routine($Fa,$Da);$a["name"]=$Fa;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$U,$Da);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$a["returns"],$U);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Qa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($Fa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["type"])){$zc=$_GET["type"];if($_POST&&!$q){$y=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($zc),$y,'Type has been dropped.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$y,'Type has been created.');}}page_header($zc!=""?'Alter type'.": ".h($zc):'Create type',$q);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
<input type="hidden" name="token" value="',$B,'">
';if($zc!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$vc=trigger_options();$Dd=array("INSERT","UPDATE","DELETE");$Qa=false;if($_POST&&!$q&&in_array($_POST["Timing"],$vc["Timing"])&&in_array($_POST["Event"],$Dd)&&in_array($_POST["Type"],$vc["Type"])){$yd=" $_POST[Timing] $_POST[Event]";$jb=" ON ".table($h);$Qa=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($s=="pgsql"?$jb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($s=="mssql"?$jb.$yd:$yd.$jb)." $_POST[Type]\n$_POST[Statement]",ME."table=".urlencode($h),'Trigger has been dropped.','Trigger has been altered.','Trigger has been created.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Alter trigger'.": ".h($_GET["name"]):'Create trigger'),$q,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$vc["Timing"],$a["Timing"],"if (/^".h(preg_quote($h,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($h))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$Dd,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$vc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="hidden" name="token" value="',$B,'">
';if($Qa){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["user"])){$ad=$_GET["user"];$Y=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$lc){$Y[$lc][$a["Privilege"]]=$a["Comment"];}}$Y["Server Admin"]+=$Y["File access on server"];$Y["Databases"]["Create routine"]=$Y["Procedures"]["Create routine"];unset($Y["Procedures"]["Create routine"]);$Y["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$Y["Columns"][$b]=$Y["Tables"][$b];}unset($Y["Server Admin"]["Usage"]);foreach($Y["Tables"]as$c=>$b){unset($Y["Databases"][$c]);}$jc=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$jc[$b]=(array)$jc[$b]+(array)$_POST["grants"][$c];}}$Ta=array();$tc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($ad)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$m)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$m[1],$fa,PREG_SET_ORDER)){foreach($fa
as$b){if($b[1]!="USAGE"){$Ta["$m[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Ta["$m[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$m)){$tc=$m[1];}}}if($_POST&&!$q){$Bb=(isset($_GET["host"])?q($ad)."@".q($_GET["host"]):"''");$Ra=q($_POST["user"])."@".q($_POST["host"]);$Pc=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Bb",ME."privileges=",'User has been dropped.');}else{if($Bb!=$Ra){$q=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ra IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Pc");}elseif($_POST["pass"]!=$tc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ra = ".($_POST["hashed"]?$Pc:"PASSWORD($Pc)"));}if(!$q){$bc=array();foreach($jc
as$Ga=>$P){if(isset($_GET["grant"])){$P=array_filter($P);}$P=array_keys($P);if(isset($_GET["grant"])){$bc=array_diff(array_keys(array_filter($jc[$Ga],'strlen')),$P);}elseif($Bb==$Ra){$qe=array_keys((array)$Ta[$Ga]);$bc=array_diff($qe,$P);$P=array_diff($P,$qe);unset($Ta[$Ga]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ga,$m)&&(!grant("REVOKE",$bc,$m[2]," ON $m[1] FROM $Ra")||!grant("GRANT",$P,$m[2]," ON $m[1] TO $Ra"))){$q=true;break;}}}if(!$q&&isset($_GET["host"])){if($Bb!=$Ra){queries("DROP USER $Bb");}elseif(!isset($_GET["grant"])){foreach($Ta
as$Ga=>$bc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ga,$m)){grant("REVOKE",array_keys($bc),$m[2]," ON $m[1] FROM $Ra");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$q);if($Bb!=$Ra){$i->query("DROP USER $Ra");}}}page_header((isset($_GET["host"])?'Username'.": ".h("$ad@$_GET[host]"):'Create user'),$q,array("privileges"=>array('','Privileges')));if($_POST){$a=$_POST;$Ta=$jc;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$tc;if($tc!=""){$a["hashed"]=true;}$Ta[""]=true;}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Password<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Privileges'."</a>";$g=0;foreach($Ta
as$Ga=>$P){echo'<th>'.($Ga!="*.*"?"<input name='objects[$g]' value='".h($Ga)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$lc=>$fc){foreach((array)$Y[$lc]as$Zb=>$eb){echo"<tr".odd()."><td".($fc?">$fc<td":" colspan='2'").' lang="en" title="'.h($eb).'">'.h($Zb);$g=0;foreach($Ta
as$Ga=>$P){$f="'grants[$g][".h(strtoupper($Zb))."]'";$o=$P[strtoupper($Zb)];if($lc=="Server Admin"&&$Ga!=(isset($Ta["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($o?" selected":"").">".'Grant'."<option value='0'".($o=="0"?" selected":"").">".'Revoke'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($o?" checked":"").($Zb=="All privileges"?" id='grants-$g-all'":($Zb=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$q){$kd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$kd++;}}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$kd),$kd||!$_POST["kill"]);}page_header('Process list',$q);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$g=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$g=>$a){if(!$g){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$c=>$b){echo"<td>".($c=="Info"&&$b!=""?"<code class='jush-$s'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Edit'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($g+1)."/".sprintf('%d in total',$i->result("SELECT @@max_connections")),'<p>
<input type="hidden" name="token" value="',$B,'">
<input type="submit" value="Kill">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$G=table_status($h);$z=indexes($h);$p=fields($h);$L=column_foreign_keys($h);if($G["Oid"]=="t"){$z[]=array("type"=>"PRIMARY","columns"=>array("oid"));}$Ee=array();$v=array();$fb=null;foreach($p
as$c=>$d){$f=$n->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$v[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$fb=$n->selectLengthProcess();}}$Ee+=$d["privileges"];}list($C,$Z)=$n->selectColumnsProcess($v,$z);$x=$n->selectSearchProcess($p,$z);$La=$n->selectOrderProcess($p,$z);$S=$n->selectLimitProcess();$Hb=($C?implode(", ",$C):($G["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($h);$ld=($Z&&count($Z)<count($C)?"\nGROUP BY ".implode(", ",$Z):"").($La?"\nORDER BY ".implode(", ",$La):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ma=>$a){echo$i->result("SELECT".limit(idf_escape(key($a))." FROM ".table($h)," WHERE ".where_check($Ma).($x?" AND ".implode(" AND ",$x):"").($La?" ORDER BY ".implode(", ",$La):""),1));}exit;}if($_POST&&!$q){$we="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$xc=$Jc=null;foreach($z
as$t){if($t["type"]=="PRIMARY"){$xc=array_flip($t["columns"]);$Jc=($C?$xc:array());break;}}foreach($C
as$c=>$b){$b=$_GET["columns"][$c];if(!$b["fun"]){unset($Jc[$b["col"]]);}}if($_POST["export"]){dump_headers($h);$n->dumpTable($h,"");if(!is_array($_POST["check"])||$Jc===array()){$_b=$x;if(is_array($_POST["check"])){$_b[]="($we)";}$j="SELECT $Hb".($_b?"\nWHERE ".implode(" AND ",$_b):"").$ld;}else{$ze=array();foreach($_POST["check"]as$b){$ze[]="(SELECT".limit($Hb,"\nWHERE ".($x?implode(" AND ",$x)." AND ":"").where_check($b).$ld,1).")";}$j=implode(" UNION ALL ",$ze);}$n->dumpData($h,"table",$j);exit;}if(!$n->selectEmailProcess($x,$L)){if($_POST["save"]||$_POST["delete"]){$k=true;$cb=0;$j=table($h);$u=array();if(!$_POST["delete"]){foreach($v
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$u[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$u[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($u)).")\nSELECT ".implode(", ",$u)."\nFROM ".table($h):" SET\n".implode(",\n",$u));}if($_POST["delete"]||$u){$Nc="UPDATE";if($_POST["delete"]){$Nc="DELETE";$j="FROM $j";}if($_POST["clone"]){$Nc="INSERT";$j="INTO $j";}if($_POST["all"]||($Jc===array()&&$_POST["check"])||count($Z)<count($C)){$k=queries($Nc." $j".($_POST["all"]?($x?"\nWHERE ".implode(" AND ",$x):""):"\nWHERE $we"));$cb=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($Nc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$cb+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d item has been affected.','%d items have been affected.'),$cb),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q='Double click on a value to modify it.';}else{$k=true;$cb=0;foreach($_POST["val"]as$Ma=>$a){$u=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$u[]=idf_escape($c)." = ".(ereg('char|text',$p[$c]["type"])||$b!=""?$n->processInput($p[$c],$b):"NULL");}$j=table($h)." SET ".implode(", ",$u);$_b=" WHERE ".where_check($Ma).($x?" AND ".implode(" AND ",$x):"");$k=queries("UPDATE".(count($Z)<count($C)?" $j$_b":limit1($j,$_b)));if(!$k){break;}$cb+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$cb),$k);}}elseif(is_string($da=get_file("csv_file",true))){$da=preg_replace("~^\xEF\xBB\xBF~",'',$da);$k=true;$Ya=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$da,$fa);$cb=count($fa[0]);begin();$Sb=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($fa[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Sb]*)$Sb~",$b.$Sb,$md);if(!$c&&!array_diff($md[1],$Ya)){$Ya=$md[1];$cb--;}else{$u=array();foreach($md[1]as$g=>$Mc){$u[idf_escape($Ya[$g])]=($Mc==""&&$p[$Ya[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Mc))));}$k=insert_update($h,$u,$xc);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$cb),$k);queries("ROLLBACK");}else{$q=upload_error($da);}}}$wa=$n->tableName($G);page_header('Select'.": $wa",$q);session_write_close();$u=null;if(isset($Ee["insert"])){$u="";foreach((array)$_GET["where"]as$b){if(count($L[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$u.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($G,$u);if(!$v){echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$n->selectColumnsPrint($C,$v);$n->selectSearchPrint($x,$v,$z);$n->selectOrderPrint($La,$v,$z);$n->selectLimitPrint($S);$n->selectLengthPrint($fb);$n->selectActionPrint($fb);echo"</form>\n";$J=$_GET["page"];if($J=="last"){$Ba=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));$J=floor(max(0,$Ba-1)/$S);}$j="SELECT".limit((+$S&&$Z&&count($Z)<count($C)&&$s=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Hb,($x?"\nWHERE ".implode(" AND ",$x):"").$ld,($S!=""?+$S:null),($J?$S*$J:0),"\n");echo$n->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($s=="mssql"){$k->seek($S*$J);}$Lc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$E=array();while($a=$k->fetch_assoc()){$E[]=$a;}if($_GET["page"]!="last"){$Ba=(+$S&&$Z&&count($Z)<count($C)?($s=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($E));}if(!$E){echo"<p class='message'>".'No rows.'."\n";}else{$rd=$n->backwardKeys($h,$wa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Z&&$C?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$pd=array();$W=array();reset($C);$Cd=1;foreach($E[0]as$c=>$b){if($G["Oid"]!="t"||$c!="oid"){$b=$_GET["columns"][key($C)];$d=$p[$C?$b["col"]:$c];$f=($d?$n->fieldName($d,$Cd):"*");if($f!=""){$Cd++;$pd[$c]=$f;$ga=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($La[0]==$ga||$La[0]==$c||(!$La&&$Z[0]==$ga)?'&desc%5B0%5D=1':'')).'">'.apply_sql_function($b["fun"],$f)."</a>";}$W[$c]=$b["fun"];next($C);}}$Jb=array();if($_GET["modify"]){foreach($E
as$a){foreach($a
as$c=>$b){$Jb[$c]=max($Jb[$c],min(40,strlen(utf8_decode($b))));}}}echo($rd?"<th>".'Relations':"")."</thead>\n";foreach($n->rowDescriptions($E,$L)as$N=>$a){$jd=unique_array($E[$N],$z);$Ma="";foreach($jd
as$c=>$b){$Ma.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$Z&&$C?"":"<td>".checkbox("check[]",substr($Ma,1),in_array(substr($Ma,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Z)<count($C)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$Ma)."'>".'edit'."</a>"));foreach($a
as$c=>$b){if(isset($pd[$c])){$d=$p[$c];if($b!=""&&(!isset($Lc[$c])||$Lc[$c]!="")){$Lc[$c]=(is_mail($b)?$pd[$c]:"");}$y="";$b=$n->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$y=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$Ma);}if($b===""){$b="&nbsp;";}elseif($fb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$fb));}else{$b=h($b);}if(!$y){foreach((array)$L[$c]as$F){if(count($L[$c])==1||end($F["source"])==$c){$y="";foreach($F["source"]as$g=>$ta){$y.=where_link($g,$F["target"][$g],$E[$N][$ta]);}$y=h(($F["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($F["db"]),ME):ME).'select='.urlencode($F["table"]).$y);if(count($F["source"])==1){break;}}}}if($c=="COUNT(*)"){$y=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$r){if(!array_key_exists($r["col"],$jd)){$y.=h(where_link($g++,$r["col"],$r["val"],$r["op"]));}}foreach($jd
as$za=>$r){$y.=h(where_link($g++,$za,$r));}}}if(!$y){if(is_mail($b)){$y="mailto:$b";}if($nd=is_url($a[$c])){$y=($nd=="http"&&$Vb?$a[$c]:"$nd://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$D=h("val[$Ma][".bracket_escape($c)."]");$o=$_POST["val"][$Ma][bracket_escape($c)];$vd=h(isset($o)?$o:$a[$c]);$Me=strpos($b,"<i>...</i>");$Ud=is_utf8($b)&&$E[$N][$c]==$a[$c]&&!$W[$c];$Vd=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Ud)||isset($o)?"<td>".($Vd?"<textarea name='$D' cols='30' rows='".(substr_count($a[$c],"\n")+1)."' onkeypress='return textareaKeypress(this, event);'>$vd</textarea>":"<input name='$D' value='$vd' size='$Jb[$c]'>"):"<td id='$D' ondblclick=\"".($Ud?"selectDblClick(this, event".($Me?", 2":($Vd?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$n->selectVal($b,$y,$d));}}if($rd){echo"<td>";}$n->backwardKeysPrint($rd,$E[$N]);echo"</tr>\n";}echo"</table>\n";}parse_str($_COOKIE["adminer_export"],$yb);if($E||$J){$ed=true;if($_GET["page"]!="last"&&+$S&&count($Z)>=count($C)&&($Ba>=$S||$J)){$Ba=$G["Rows"];if(!isset($Ba)||$x||2*$J*$S>$Ba||($G["Engine"]=="InnoDB"&&$Ba<1e4)){ob_flush();flush();$Ba=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));}else{$ed=false;}}echo"<p class='pages'>";if(+$S&&$Ba>$S){$fd=floor(($Ba-1)/$S);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($J+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$J).($J>5?" ...":"");for($g=max(1,$J-4);$g<min($fd,$J+5);$g++){echo
pagination($g,$J);}echo($J+5<$fd?" ...":"").($ed?pagination($fd,$J):' <a href="'.h(remove_from_uri()."&page=last").'">'.'last'."</a>");}echo" (".($ed?"":"~ ").lang(array('%d row','%d rows'),$Ba).") ".checkbox("all",1,0,'whole result')."\n";if(!information_schema(DB)){?>
<fieldset><legend>Edit</legend><div>
<input type="submit" id="save" value="Save" title="Double click on a value to modify it.">
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$Ba,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$ya=$n->dumpOutput();echo($ya?html_select("output",$ya,$yb["output"])." ":""),html_select("format",$n->dumpFormat(),$yb["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}print_fieldset("import",'Import',!$E);echo"<input type='hidden' name='token' value='$B'><input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$yb["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>\n","</div></fieldset>\n";$n->selectEmailPrint(array_filter($Lc,'strlen'),$v);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Eb=isset($_GET["status"]);page_header($Eb?'Status':'Variables');$Pd=($Eb?show_status():show_variables());if(!$Pd){echo"<p class='message'>".'No rows.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($Pd
as$c=>$b){echo"<tr>","<th><code class='jush-".$s.($Eb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Gc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$D=js_escape($a["Name"]);json_row("Comment-$D",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$c){json_row("$c-$D",nbsp($a[$c]));}foreach($Gc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',',');json_row("$c-$D",($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($Gc[$c])){$Gc[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){json_row("$c-$D");}}}}foreach($Gc
as$c=>$b){json_row("sum-$c",number_format($b,0,'.',','));}json_row("");}else{foreach(count_tables(get_databases())as$w=>$b){json_row("tables-".js_escape($w),$b);}json_row("");}exit;}else{$Hd=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($Hd&&!$q&&!$_POST["search"]){$k=true;$ia="";if($s=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$ia='Tables have been truncated.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ia='Tables have been moved.';}elseif($_POST["copy"]){$k=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ia='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$ia='Tables have been dropped.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$ia.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ia,$k);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$q,true);if($n->homepage()){if($_GET["ns"]!==""){echo'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n","<h3>".'Tables and views'."</h3>\n";$qc=tables_list();if(!$qc){echo"<p class='message'>".'No tables.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Table'.'<td>'.'Engine'.'<td>'.'Collation'.'<td>'.'Data Length'.'<td>'.'Index Length'.'<td>'.'Data Free'.'<td>'.'Auto Increment'.'<td>'.'Rows'.(support("comment")?'<td>'.'Comment':'')."</thead>\n";foreach($qc
as$f=>$O){$zb=(isset($O)&&!eregi("table",$O));echo'<tr'.odd().'><td>'.checkbox(($zb?"views[]":"tables[]"),$f,in_array($f,$Hd,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($zb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$y){echo($y?"<td align='right'><a href='".h(ME."$y=").urlencode($f)."' id='$c-".h($f)."'>?</a>":"<td id='$c-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($qc)),"<td>".nbsp($i->result("SELECT @@storage_engine")),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p><input type='hidden' name='token' value='$B'>".($s=="sql"?"<input type='submit' value='".'Analyze'."'> <input type='submit' name='optimize' value='".'Optimize'."'> <input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$s!="sqlite"){$w=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($_?html_select("target",$_,$w):'<input name="target" value="'.h($w).'">')," <input type='submit' name='move' value='".'Move'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."' onclick='eventStop(event);'>":""),"\n";}}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";}if(support("routine")){echo"<h3>".'Routines'."</h3>\n";$Kd=routines();if($Kd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Kd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]=="FUNCTION"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p><a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> <a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("type")){echo"<h3>".'User types'."</h3>\n";$ba=types();if($ba){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($ba
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3>".'Events'."</h3>\n";$E=get_rows("SHOW EVENTS");if($E){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."</thead>\n";foreach($E
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'At given time'."<td>".$a["Execute at"]:'Every'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($qc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();