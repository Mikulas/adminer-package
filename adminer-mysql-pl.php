<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.0
*/error_reporting(6135);$Ld=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Ld){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$he=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($he){$$b=$he;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
var jushRoot=location.protocol + '//www.adminer.org/static/';function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}
if(jushRoot){var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
var added='.',rowCount;function delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var candidate;var val=field.value;for(var i=opts.length;i--;){var match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}
break;}
var table=match[1];var column=match[2];var tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}
candidate=i;break;}}}
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
function indexesAddRow(field){field.onchange=function(){};var parent=field.parentNode.parentNode;var row=parent.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');for(var i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}
parent.parentNode.appendChild(row);}
function indexesChangeColumn(field,prefix){var columns=field.parentNode.parentNode.getElementsByTagName('select');var names=[];for(var i=0;i<columns.length;i++){var value=selectValue(columns[i]);if(value){names.push(value);}}
field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}
var column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}
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
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$i;return$i;}function
idf_unescape($Fa){$Xa=substr($Fa,-1);return
str_replace($Xa.$Xa,$Xa,substr($Fa,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($cb){if(get_magic_quotes_gpc()){while(list($c,$b)=each($cb)){foreach($b
as$_a=>$s){unset($cb[$c][$_a]);if(is_array($s)){$cb[$c][stripslashes($_a)]=$s;$cb[]=&$cb[$c][stripslashes($_a)];}else{$cb[$c][stripslashes($_a)]=($Ld?$s:stripslashes($s));}}}}}function
bracket_escape($Fa,$Ve=false){static$Fd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Fa,($Ve?array_flip($Fd):$Fd));}function
h($V){return
htmlspecialchars(str_replace("\0","",$V),ENT_QUOTES);}function
nbsp($V){return(trim($V)!=""?h($V):"&nbsp;");}function
nl_br($V){return
str_replace("\n","<br>",$V);}function
checkbox($f,$o,$Ja,$Od="",$Oc="",$mf=false){static$E=0;$E++;$e="<input type='checkbox' name='$f' value='".h($o)."'".($Ja?" checked":"").($Oc?" onclick=\"$Oc\"":"").($mf?" class='jsonly'":"")." id='checkbox-$E'>";return($Od!=""?"<label for='checkbox-$E'>$e".h($Od)."</label>":$e);}function
optionlist($Kc,$wf=null,$ve=false){$e="";foreach($Kc
as$_a=>$s){$ke=array($_a=>$s);if(is_array($s)){$e.='<optgroup label="'.h($_a).'">';$ke=$s;}foreach($ke
as$c=>$b){$e.='<option'.($ve||is_string($c)?' value="'.h($c).'"':'').(($ve||is_string($c)?(string)$c:$b)===$wf?' selected':'').'>'.h($b);}if(is_array($s)){$e.='</optgroup>';}}return$e;}function
html_select($f,$Kc,$o="",$tb=true){if($tb){return"<select name='".h($f)."'".(is_string($tb)?" onchange=\"$tb\"":"").">".optionlist($Kc,$o)."</select>";}$e="";foreach($Kc
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$o?" checked":"").">".h($b)."</label>";}return$e;}function
confirm($Jc="",$kf=false){return" onclick=\"".($kf?"eventStop(event); ":"")."return confirm('".'Czy jesteś pewien?'.($Jc?" (' + $Jc + ')":"")."');\"";}function
js_escape($V){return
addcslashes($V,"\r\n'\\/");}function
ini_bool($xf){$b=ini_get($xf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$e;if(!isset($e)){$e=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$e;}function
q($V){global$i;return$i->quote($V);}function
get_vals($j,$ea=0){global$i;$e=array();$k=$i->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[]=$a[$ea];}}return$e;}function
get_key_vals($j,$G=null){global$i;if(!is_object($G)){$G=$i;}$e=array();$k=$G->query($j);if(is_object($k)){while($a=$k->fetch_row()){$e[$a[0]]=$a[1];}}return$e;}function
get_rows($j,$G=null,$q="<p class='error'>"){global$i;if(!is_object($G)){$G=$i;}$e=array();$k=$G->query($j);if(is_object($k)){while($a=$k->fetch_assoc()){$e[]=$a;}}elseif(!$k&&$i->error&&$q&&defined("PAGE_HEADER")){echo$q.error()."\n";}return$e;}function
unique_array($a,$z){foreach($z
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$e=array();foreach($t["columns"]as$c){if(!isset($a[$c])){continue
2;}$e[$c]=$a[$c];}return$e;}}$e=array();foreach($a
as$c=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$c)){$e[$c]=$b;}}return$e;}function
where($x){global$r;$e=array();foreach((array)$x["where"]as$c=>$b){$e[]=idf_escape(bracket_escape($c,1)).(ereg('\\.',$b)||$r=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_\\")):" = ".exact_value($b));}foreach((array)$x["null"]as$c){$e[]=idf_escape($c)." IS NULL";}return
implode(" AND ",$e);}function
where_check($b){parse_str($b,$Hd);remove_slashes(array(&$Hd));return
where($Hd);}function
where_link($g,$ea,$o,$Te="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($ea)."&where%5B$g%5D%5Bop%5D=".urlencode((isset($o)?$Te:"IS NULL"))."&where%5B$g%5D%5Bval%5D=".urlencode($o);}function
cookie($f,$o){global$hc;$ec=array($f,(ereg("\n",$o)?"":$o),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$ec[]=true;}return
call_user_func_array('setcookie',$ec);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($pb,$J,$Z){global$ra;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ra))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($pb!="server"||$J!=""?urlencode($pb)."=".urlencode($J)."&":"")."username=".urlencode($Z).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($O,$ga=null){if(isset($ga)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($O)?$O:$_SERVER["REQUEST_URI"]))][]=$ga;}if(isset($O)){if($O==""){$O=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $O");exit;}}function
query_redirect($j,$O,$ga,$vc=true,$Ue=true,$Ke=false){global$i,$q,$n;if($Ue){$Ke=!$i->query($j);}$ud="";if($j){$ud=$n->messageQuery("$j;");}if($Ke){$q=error().$ud;return
false;}if($vc){redirect($O,$ga.$ud);}return
true;}function
queries($j=null){global$i;static$Sd=array();if(!isset($j)){return
implode(";\n",$Sd);}$Sd[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$i->query($j);}function
apply_queries($j,$ia,$hf='table'){foreach($ia
as$l){if(!queries("$j ".$hf($l))){return
false;}}return
true;}function
queries_redirect($O,$ga,$vc){return
query_redirect(queries(),$O,$ga,$vc,false,!$vc);}function
remove_from_uri($Oa=""){return
substr(preg_replace("~(?<=[?&])($Oa".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($K,$lf){return" ".($K==$lf?$K+1:'<a href="'.h(remove_from_uri("page").($K?"&page=$K":"")).'">'.($K+1)."</a>");}function
get_file($c,$Rc=false){$ua=$_FILES[$c];if(!$ua||$ua["error"]){return$ua["error"];}$e=file_get_contents($Rc&&ereg('\\.gz$',$ua["name"])?"compress.zlib://$ua[tmp_name]":($Rc&&ereg('\\.bz2$',$ua["name"])?"compress.bzip2://$ua[tmp_name]":$ua["tmp_name"]));if($Rc){$mb=substr($e,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$mb,$Jf)){$e=iconv("utf-16","utf-8",$e);}elseif($mb=="\xEF\xBB\xBF"){$e=substr($e,3);}}return$e;}function
upload_error($q){$Ed=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?'Wgranie pliku było niemożliwe.'.($Ed?" ".sprintf('Maksymalna wielkość pliku to %sB.',$Ed):""):'Plik nie istnieje.');}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
json_row($c,$b=null){static$qa=true;if($qa){echo"{";}if($c!=""){echo($qa?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$qa=false;}else{echo"\n}\n";$qa=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($R,$wa){return
str_repeat("$R{0,65535}",$wa/65535)."$R{0,".($wa
%
65535)."}";}function
shorten_utf8($V,$wa=80,$Re=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$wa).")($)?)u",$V,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$wa).")($)?)",$V,$m);}return
h($m[1]).$Re.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($cb,$af=array()){while(list($c,$b)=each($cb)){if(is_array($b)){foreach($b
as$_a=>$s){$cb[$c."[$_a]"]=$s;}}elseif(!in_array($c,$af)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($l){global$n;$e=array();foreach($n->foreignKeys($l)as$C){foreach($C["source"]as$b){$e[$b][]=$C;}}return$e;}function
enum_input($N,$Da,$d,$o,$Db=null){global$n;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);$e=(isset($Db)?"<label><input type='$N'$Da value='$Db'".((is_array($o)?in_array($Db,$o):$o===0)?" checked":"")."><i>".'puste'."</i></label>":"");foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ja=(is_int($o)?$o==$g+1:(is_array($o)?in_array($g+1,$o):$o===$b));$e.=" <label><input type='$N'$Da value='".($g+1)."'".($Ja?' checked':'').'>'.h($n->editVal($b,$d)).'</label>';}return$e;}function
input($d,$o,$A){global$sa,$n,$r;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$Gd=($r=="mssql"&&$d["auto_increment"]);if($Gd&&!$_POST["save"]){$A=null;}$X=(isset($_GET["select"])||$Gd?array("orig"=>'bez zmian'):array())+$n->editFunctions($d);$Da=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($X[""])."<td>".$n->editInput($_GET["edit"],$d,$Da,$o);}else{$qa=0;foreach($X
as$c=>$b){if($c===""||!$b){break;}$qa++;}$tb=($qa?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($qa > f.selectedIndex) f.selectedIndex = $qa;\"":"");$Da.=$tb;echo(count($X)>1?html_select("function[$f]",$X,!isset($A)||in_array($A,$X)||isset($X[$A])?$A:"","functionChange(this);"):nbsp(reset($X))).'<td>';$Jd=$n->editInput($_GET["edit"],$d,$Da,$o);if($Jd!=""){echo$Jd;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Ja=(is_int($o)?($o>>$g)&1:in_array($b,explode(",",$o),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($Ja?' checked':'')."$tb>".h($n->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$tb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($r!="sqlite"||ereg("\n",$o)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Da>".h($o).'</textarea>';}else{$pd=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$m)?((ereg("binary",$d["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$d["unsigned"]?1:0)):($sa[$d["type"]]?$sa[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($o)."'".($pd?" maxlength='$pd'":"").(ereg('char|binary',$d["type"])&&$pd>20?" size='40'":"")."$Da>";}}}function
process_input($d){global$n;$Fa=bracket_escape($d["field"]);$A=$_POST["function"][$Fa];$o=$_POST["fields"][$Fa];if($d["type"]=="enum"){if($o==-1){return
false;}if($o==""){return"NULL";}return+$o;}if($d["auto_increment"]&&$o==""){return
null;}if($A=="orig"){return($d["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($d["field"]):false);}if($A=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$o);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$ua=get_file("fields-$Fa");if(!is_string($ua)){return
false;}return
q($ua);}return$n->processInput($d,$o,$A);}function
search_tables(){global$n,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$ba=false;foreach(table_status()as$l=>$H){$f=$n->tableName($H);if(isset($H["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($l,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($l)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($l),array())),1));if($k->fetch_row()){if(!$ba){echo"<ul>\n";$ba=true;}echo"<li><a href='".h(ME."select=".urlencode($l)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($ba?"</ul>":"<p class='message'>".'Brak tabel.')."\n";}function
dump_headers($Nc,$id=false){global$n;$e=$n->dumpHeaders($Nc,$id);$za=$_POST["output"];if($za!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Nc!=""?$Nc:(SERVER!=""?SERVER:"localhost")).".$e".($za!="file"&&!ereg('[^0-9a-z]',$za)?".$za":""));}session_write_close();return$e;}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($A,$ea){return($A?($A=="unixepoch"?"DATETIME($ea, '$A')":($A=="count distinct"?"COUNT(DISTINCT ":strtoupper("$A("))."$ea)"):$ea);}function
password_file(){$Hc=ini_get("upload_tmp_dir");if(!$Hc){if(function_exists('sys_get_temp_dir')){$Hc=sys_get_temp_dir();}else{$jb=@tempnam("","");if(!$jb){return
false;}$Hc=dirname($jb);unlink($jb);}}$jb="$Hc/adminer.key";$e=@file_get_contents($jb);if($e){return$e;}$Aa=@fopen($jb,"w");if($Aa){$e=md5(uniqid(mt_rand(),true));fwrite($Aa,$e);fclose($Aa);}return$e;}function
is_mail($Ze){$Rd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$R="$Rd+(\\.$Rd+)*@($Sb?\\.)+$Sb";return
preg_match("(^$R(,\\s*$R)*\$)i",$Ze);}function
is_url($V){$Sb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Sb?\\.)+$Sb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$V,$m)?strtolower($m[1]):"");}function
print_fieldset($E,$Pe,$Qe=false,$Oc=""){echo"<fieldset><legend><a href='#fieldset-$E' onclick=\"$Oc"."return !toggle('fieldset-$E');\">$Pe</a></legend><div id='fieldset-$E'".($Qe?"":" class='hidden'").">\n";}function
bold($Se){return($Se?" class='active'":"");}global$n,$i,$ra,$ed,$hb,$q,$X,$Bb,$hc,$Gb,$r,$tf,$Hf,$Ga,$Fc,$D,$Gf,$sa,$_b,$Zb;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$hc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$ec=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$hc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$ec[]=true;}call_user_func_array('session_set_cookie_params',$ec);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'pl';}function
lang($_f,$ac){$Xb=($ac==1?0:($ac
%
10>1&&$ac
%
10<5&&$ac/10
%
10!=1?1:2));return
sprintf($_f[$Xb],$ac);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($Ef,$Z,$oa,$vf='auth_error'){set_exception_handler($vf);parent::__construct($Ef,$Z,$oa);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Vb=false){$k=parent::query($j);if(!$k){$uf=$this->errorInfo();$this->error=$uf[2];return
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
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ra=array();$ra=array("server"=>"MySQL")+$ra;if(!defined("DRIVER")){$ff=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($J,$Z,$oa){mysqli_report(MYSQLI_REPORT_OFF);list($cf,$Ec)=explode(":",$J,2);$e=@$this->real_connect(($J!=""?$cf:ini_get("mysqli.default_host")),($J.$Z!=""?$Z:ini_get("mysqli.default_user")),($J.$Z.$oa!=""?$oa:ini_get("mysqli.default_pw")),null,(is_numeric($Ec)?$Ec:ini_get("mysqli.default_port")),(!is_numeric($Ec)?$Ec:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($V){return"'".$this->escape_string($V)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($J,$Z,$oa){$this->_link=@mysql_connect(($J!=""?$J:ini_get("mysql.default_host")),("$J$Z"!=""?$Z:ini_get("mysql.default_user")),("$J$Z$oa"!=""?$oa:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($V){return"'".mysql_real_escape_string($V,$this->_link)."'";}function
select_db($gc){return
mysql_select_db($gc,$this->_link);}function
query($j,$Vb=false){$k=@($Vb?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
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
connect($J,$Z,$oa){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$J)),$Z,$oa);$this->query("SET NAMES utf8");return
true;}function
select_db($gc){return$this->query("USE ".idf_escape($gc));}function
query($j,$Vb=false){$this->setAttribute(1000,!$Vb);return
parent::query($j,$Vb);}}}function
idf_escape($Fa){return"`".str_replace("`","``",$Fa)."`";}function
table($Fa){return
idf_escape($Fa);}function
connect(){global$n;$i=new
Min_DB;$Qc=$n->credentials();if($i->connect($Qc[0],$Qc[1],$Qc[2])){$i->query("SET sql_quote_show_create = 1");return$i;}return$i->error;}function
get_databases($ef=true){global$i;$e=&get_session("dbs");if(!isset($e)){if($ef){restart_session();ob_flush();flush();}$e=get_vals($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$e;}function
limit($j,$x,$W,$ma=0,$fc=" "){return" $j$x".(isset($W)?$fc."LIMIT $W".($ma?" OFFSET $ma":""):"");}function
limit1($j,$x){return
limit($j,$x,1);}function
db_collation($v,$S){global$i;$e=null;$da=$i->result("SHOW CREATE DATABASE ".idf_escape($v),1);if(preg_match('~ COLLATE ([^ ]+)~',$da,$m)){$e=$m[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$da,$m)){$e=$S[$m[1]][-1];}return$e;}function
engines(){$e=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$e[]=$a["Engine"];}}return$e;}function
logged_user(){global$i;return$i->result("SELECT USER()");}function
tables_list(){global$i;return
get_key_vals("SHOW".($i->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$e=array();foreach($_
as$v){$e[$v]=count(get_vals("SHOW TABLES IN ".idf_escape($v)));}return$e;}function
table_status($f=""){$e=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$e[$a["Name"]]=$a;}return$e;}function
is_view($H){return!isset($H["Rows"]);}function
fk_support($H){return
eregi("InnoDB|IBMDB2I",$H["Engine"]);}function
fields($l){$e=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($l))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$m);$e[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$m[1],"length"=>$m[2],"unsigned"=>ltrim($m[3].$m[4]),"default"=>($a["Default"]!=""||ereg("char",$m[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$m)?$m[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$e;}function
indexes($l,$G=null){$e=array();foreach(get_rows("SHOW INDEX FROM ".table($l),$G)as$a){$e[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$e[$a["Key_name"]]["columns"][]=$a["Column_name"];$e[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$e;}function
foreign_keys($l){global$i,$Ga;static$R='`(?:[^`]|``)+`';$e=array();$pe=$i->result("SHOW CREATE TABLE ".table($l),1);if($pe){preg_match_all("~CONSTRAINT ($R) FOREIGN KEY \\(((?:$R,? ?)+)\\) REFERENCES ($R)(?:\\.($R))? \\(((?:$R,? ?)+)\\)(?: ON DELETE (".implode("|",$Ga)."))?(?: ON UPDATE (".implode("|",$Ga)."))?~",$pe,$fa,PREG_SET_ORDER);foreach($fa
as$m){preg_match_all("~$R~",$m[2],$ta);preg_match_all("~$R~",$m[5],$na);$e[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$ta[0]),"target"=>array_map('idf_unescape',$na[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$e[$a["Charset"]][-1]=$a["Collation"];}else{$e[$a["Charset"]][]=$a["Collation"];}}ksort($e);foreach($e
as$c=>$b){asort($e[$c]);}return$e;}function
information_schema($v){global$i;return($i->server_info>=5&&$v=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($v,$sb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($v).($sb?" COLLATE ".q($sb):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$sb){if(create_database($f,$sb)){$xb=array();foreach(tables_list()as$l=>$N){$xb[]=table($l)." TO ".idf_escape($f).".".table($l);}if(!$xb||queries("RENAME TABLE ".implode(", ",$xb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$bd=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$bd="";break;}if($t["type"]=="PRIMARY"){$bd=" UNIQUE";}}}return" AUTO_INCREMENT$bd";}function
alter_table($l,$f,$p,$Mc,$db,$Wb,$sb,$Gc,$Ob){$ca=array();foreach($p
as$d){$ca[]=($d[1]?($l!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($l!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ca=array_merge($ca,$Mc);$yb="COMMENT=".q($db).($Wb?" ENGINE=".q($Wb):"").($sb?" COLLATE ".q($sb):"").($Gc!=""?" AUTO_INCREMENT=$Gc":"").$Ob;if($l==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ca)."\n) $yb");}if($l!=$f){$ca[]="RENAME TO ".table($f);}$ca[]=$yb;return
queries("ALTER TABLE ".table($l)."\n".implode(",\n",$ca));}function
alter_indexes($l,$ca){foreach($ca
as$c=>$b){$ca[$c]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($l).implode(",",$ca));}function
truncate_tables($ia){return
apply_queries("TRUNCATE TABLE",$ia);}function
drop_views($Ha){return
queries("DROP VIEW ".implode(", ",array_map('table',$Ha)));}function
drop_tables($ia){return
queries("DROP TABLE ".implode(", ",array_map('table',$ia)));}function
move_tables($ia,$Ha,$na){$xb=array();foreach(array_merge($ia,$Ha)as$l){$xb[]=table($l)." TO ".idf_escape($na).".".table($l);}return
queries("RENAME TABLE ".implode(", ",$xb));}function
copy_tables($ia,$Ha,$na){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ia
as$l){$f=($na==DB?table("copy_$l"):idf_escape($na).".".table($l));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($l))||!queries("INSERT INTO $f SELECT * FROM ".table($l))){return
false;}}foreach($Ha
as$l){$f=($na==DB?table("copy_$l"):idf_escape($na).".".table($l));$wb=view($l);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $wb[select]")){return
false;}}return
true;}function
trigger($f){$F=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($F);}function
triggers($l){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$N){global$i,$hb,$Gb,$sa;$of=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$re="((".implode("|",array_merge(array_keys($sa),$of)).")(?:\\s*\\(((?:[^'\")]*|$hb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$R="\\s*(".($N=="FUNCTION"?"":$Gb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$re";$da=$i->result("SHOW CREATE $N ".idf_escape($f),2);preg_match("~\\(((?:$R\\s*,?)*)\\)".($N=="FUNCTION"?"\\s*RETURNS\\s+$re":"")."\\s*(.*)~is",$da,$m);$p=array();preg_match_all("~$R\\s*,?~is",$m[1],$fa,PREG_SET_ORDER);foreach($fa
as$Oa){$f=str_replace("``","`",$Oa[2]).$Oa[3];$p[]=array("field"=>$f,"type"=>strtolower($Oa[5]),"length"=>preg_replace_callback("~$hb~s",'normalize_enum',$Oa[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Oa[8] $Oa[7]"))),"full_type"=>$Oa[4],"inout"=>strtoupper($Oa[1]),"collation"=>strtolower($Oa[9]),);}if($N!="FUNCTION"){return
array("fields"=>$p,"definition"=>$m[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$m[12],"length"=>$m[13],"unsigned"=>$m[15],"collation"=>$m[16]),"definition"=>$m[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($l,$u){return
queries("INSERT INTO ".table($l)." (".implode(", ",array_keys($u)).")\nVALUES (".implode(", ",$u).")");}function
insert_update($l,$u,$Lc){foreach($u
as$c=>$b){$u[$c]="$c = $b";}$Ea=implode(", ",$u);return
queries("INSERT INTO ".table($l)." SET $Ea ON DUPLICATE KEY UPDATE $Ea");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Sa){return
true;}function
create_sql($l,$Gc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($l),1);if(!$Gc){$e=preg_replace('~ AUTO_INCREMENT=\\d+~','',$e);}return$e;}function
truncate_sql($l){return"TRUNCATE ".table($l);}function
use_sql($gc){return"USE ".idf_escape($gc);}function
trigger_sql($l,$I){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")),null,"-- ")as$a){$e.="\n".($I=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($rf){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$rf);}$r="sql";$sa=array();$Fc=array();foreach(array('Numeryczne'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Data i czas'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Tekstowe'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binarne'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listy'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$sa+=$b;$Fc[$c]=array_keys($b);}$_b=array("unsigned","zerofill","unsigned zerofill");$_e=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$X=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Bb=array("avg","count","count distinct","group_concat","max","min","sum");$ed=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$Zb="3.3.0";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$ra;echo'<table cellspacing="0">
<tr><th>Rodzaj bazy<td>',html_select("driver",$ra,DRIVER,"loginDriver(this);"),'<tr><th>Serwer<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Użytkownik<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Hasło<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Zaloguj się'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Zapamiętaj sesję')."\n";}function
login($Lf,$oa){return
true;}function
tableName($Ic){return
h($Ic["Name"]);}function
fieldName($d,$Ka=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Ic,$u=""){echo'<p class="tabs">';$ha=array("select"=>'Pokaż dane',"table"=>'Struktura tabeli');if(is_view($Ic)){$ha["view"]='Zmień perspektywę';}else{$ha["create"]='Zmień tabelę';}if(isset($u)){$ha["edit"]='Nowy rekord';}foreach($ha
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Ic["Name"]).($c=="edit"?$u:"")."'".bold(isset($_GET[$c])).">$b</a>";}echo"\n";}function
foreignKeys($l){return
foreign_keys($l);}function
backwardKeys($l,$If){return
array();}function
backwardKeysPrint($Mf,$a){}function
selectQuery($j){global$r;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Ostatnia strona'."'>&gt;&gt;</a> <code class='jush-$r'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edytuj'."</a></p>\n";}function
rowDescription($l){return"";}function
rowDescriptions($F,$zf){return$F;}function
selectVal($b,$B,$d){$e=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d bajt','%d bajty','%d bajtów'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($B?"<a href='$B'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($y,$w){global$X,$Bb;print_fieldset("select",'pokaż',$y);$g=0;$Qd=array('Funkcje'=>$X,'Agregacje'=>$Bb);foreach($y
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Qd,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($w,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Qd,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($x,$w,$z){print_fieldset("search",'Szukaj',$x);foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'gdziekolwiek'.")".optionlist($w,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'gdziekolwiek'.")".optionlist($w,null,true)."</select>",html_select("where[$g][op]",$this->operators,"="),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Ka,$w,$z){print_fieldset("sort",'Sortuj',$Ka);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($w[$b])){echo"<div><select name='order[$g]'><option>".optionlist($w,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'malejąco')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>","<label><input type='checkbox' name='desc[$g]' value='1'>".'malejąco'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($W){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($W)."'>","</div></fieldset>\n";}function
selectLengthPrint($vb){if(isset($vb)){echo"<fieldset><legend>".'Długość tekstu'."</legend><div>",'<input name="text_length" size="3" value="'.h($vb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Czynność'."</legend><div>","<input type='submit' value='".'pokaż'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Ff,$w){}function
selectColumnsProcess($w,$z){global$X,$Bb;$y=array();$Y=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($w[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$X)||in_array($b["fun"],$Bb)))){$y[$c]=apply_sql_function($b["fun"],(isset($w[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Bb)){$Y[]=$y[$c];}}}return
array($y,$Y);}function
selectSearchProcess($p,$z){global$r;$e=array();foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$rb=" $b[op]";if(ereg('IN$',$b["op"])){$nb=process_length($b["val"]);$rb.=" (".($nb!=""?$nb:"NULL").")";}elseif(!$b["op"]){$rb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$rb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$rb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$rb;}else{$Wa=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Wa[]=($r=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Wa?"(".implode("$rb OR ",$Wa)."$rb)":"0");}}}return$e;}function
selectOrderProcess($p,$z){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($x,$zf){return
false;}function
messageQuery($j){global$r;static$Jc=0;restart_session();$E="sql-".($Jc++);$Qa=&get_session("queries");if(strlen($j)>1e6){$j=ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...";}$Qa[$_GET["db"]][]=$j;return" <a href='#$E' onclick=\"return !toggle('$E');\">".'Zapytanie SQL'."</a><div id='$E' class='hidden'><pre><code class='jush-$r'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Qa[$_GET["db"]])-1)).'">'.'Edytuj'.'</a></div>';}function
editFunctions($d){global$ed;$e=($d["null"]?"NULL/":"");foreach($ed
as$c=>$X){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($X
as$R=>$b){if(!$R||ereg($R,$d["type"])){$e.="/$b";}}if($c&&!ereg('set|blob|bytea|raw|file',$d["type"])){$e.="/=";}}}return
explode("/",$e);}function
editInput($l,$d,$Da,$o){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Da value='-1' checked><i>".'bez zmian'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Da value=''".(isset($o)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Da,$d,$o,0);}return"";}function
processInput($d,$o,$A=""){if($A=="="){return$o;}$f=$d["field"];$e=($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$o)?$o:q($o));if(ereg('^(now|getdate|uuid)$',$A)){$e="$A()";}elseif(ereg('^current_(date|timestamp)$',$A)){$e=$A;}elseif(ereg('^([+-]|\\|\\|)$',$A)){$e=idf_escape($f)." $A $e";}elseif(ereg('^[+-] interval$',$A)){$e=idf_escape($f)." $A ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$o)?$o:$e);}elseif(ereg('^(addtime|subtime|concat)$',$A)){$e="$A(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$A)){$e="$A($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput(){$e=array('text'=>'otwórz','file'=>'zapisz');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return$e;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($l,$I,$Pc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($I){dump_csv(array_keys(fields($l)));}}elseif($I){$da=create_sql($l,$_POST["auto_increment"]);if($da){if($I=="DROP+CREATE"){echo"DROP ".($Pc?"VIEW":"TABLE")." IF EXISTS ".table($l).";\n";}if($Pc){$da=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$da);}echo($I!="CREATE+ALTER"?$da:($Pc?substr_replace($da," OR REPLACE",6,0):substr_replace($da," IF NOT EXISTS",12,0))).";\n\n";}if($I=="CREATE+ALTER"&&!$Pc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($l)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$qb="";foreach(get_rows($j)as$a){$Na=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Na)?q($Na):"NULL");$a["after"]=q($qb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Na)?" DEFAULT ".($Na=="CURRENT_TIMESTAMP"?$Na:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($qb?" AFTER ".idf_escape($qb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$qb=$a["COLUMN_NAME"];}echo"';
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
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', IF(
						_column_default <=> $a[default] AND _is_nullable = '$a[IS_NULLABLE]' AND _collation_name <=> ".(isset($a["COLLATION_NAME"])?"'$a[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($a["COLUMN_TYPE"])." AND _extra = '$a[EXTRA]' AND _column_comment = ".q($a["COLUMN_COMMENT"])." AND after = $a[after]
					, '', ', MODIFY $a[alter]'));";}echo"
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
dumpData($l,$I,$j){global$i,$r;$je=($r=="sqlite"?0:1048576);if($I){if($_POST["format"]=="sql"&&$I=="TRUNCATE+INSERT"){echo
truncate_sql($l).";\n";}if($_POST["format"]=="sql"){$p=fields($l);}$k=$i->query($j,1);if($k){$Jb="";$Ya="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){if($I=="table"){dump_csv(array_keys($a));$I="INSERT";}dump_csv($a);}else{if(!$Jb){$Jb="INSERT INTO ".table($l)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$p[$c]["type"])?$b:q($b)):"NULL");}$U=implode(",\t",$a);if($I=="INSERT+UPDATE"){$u=array();foreach($a
as$c=>$b){$u[]=idf_escape($c)." = $b";}echo"$Jb ($U) ON DUPLICATE KEY UPDATE ".implode(", ",$u).";\n";}else{$U=($je?"\n":" ")."($U)";if(!$Ya){$Ya=$Jb.$U;}elseif(strlen($Ya)+4+strlen($U)<$je){$Ya.=",$U";}else{echo"$Ya;\n";$Ya=$Jb.$U;}}}}if($_POST["format"]=="sql"&&$I!="INSERT+UPDATE"&&$Ya){$Ya.=";\n";echo$Ya;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$i->error)."\n";}}}function
dumpHeaders($Nc,$id=false){$za=$_POST["output"];$ob=($_POST["format"]=="sql"?"sql":($id?"tar":"csv"));header("Content-Type: ".($za=="bz2"?"application/x-bzip":($za=="gz"?"application/x-gzip":($ob=="tar"?"application/x-tar":($ob=="sql"||$za!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($za=="bz2"){ob_start('bzcompress',1e6);}if($za=="gz"){ob_start('gzencode',1e6);}return$ob;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Zmień bazę danych'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Zmień schemat':'Utwórz schemat')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Schemat bazy danych'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Uprawnienia użytkowników'."</a>\n":"");return
true;}function
navigation($Eb){global$Zb,$i,$D,$r,$ra;echo'<h1>
',$this->name(),' <span class="version">',$Zb,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($Zb,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Eb=="auth"){$qa=true;foreach((array)$_SESSION["pwds"]as$pb=>$Xe){foreach($Xe
as$J=>$Ye){foreach($Ye
as$Z=>$oa){if(isset($oa)){if($qa){echo"<p onclick='eventStop(event);'>\n";$qa=false;}echo"<a href='".h(auth_url($pb,$J,$Z))."'>($ra[$pb]) ".h($Z.($J!=""?"@$J":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Eb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'Zapytanie SQL'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Eksport'."</a>\n";}}echo'<input type="submit" name="logout" value="Wyloguj" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$D,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'baza danych'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Wybierz"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($Eb!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$Eb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Utwórz nową tabelę'."</a>\n";$ia=tables_list();if(!$ia){echo"<p class='message'>".'Brak tabel.'."\n";}else{$this->tablesPrint($ia);$ha=array();foreach($ia
as$l=>$N){$ha[]=preg_quote($l,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $r: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$ha).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$r;\n";}echo"var cmComplete = [ '".implode("', '",array_map('js_escape',array_keys($ia)))."' ];\n","</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($ia){echo"<p id='tables'>\n";foreach($ia
as$l=>$N){echo'<a href="'.h(ME).'select='.urlencode($l).'"'.bold($_GET["select"]==$l).">".'przeglądaj'."</a> ",'<a href="'.h(ME).'table='.urlencode($l).'"'.bold($_GET["table"]==$l).">".$this->tableName(array("Name"=>$l))."</a><br>\n";}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($n->operators)){$n->operators=$_e;}function
page_header($Me,$q="",$Mb=array(),$ge=""){global$tf,$n,$i,$ra;header("Content-Type: text/html; charset=utf-8");if($n->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Dd=$Me.($ge!=""?": ".h($ge):"");$xd=strip_tags($Dd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($xd));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="pl" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$xd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.0",'">
<script type="text/javascript">
var areYouSure = \'Wysłać dane ponownie?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.0",'"></script>
';if($n->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.0",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".js_escape(DB)."', '".js_escape($_GET["ns"])."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($i)?substr($i->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($Mb)){$B=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($B?$B:".").'">'.$ra[DRIVER].'</a> &raquo; ';$B=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$J=(SERVER!=""?h(SERVER):'Serwer');if($Mb===false){echo"$J\n";}else{echo"<a href='".($B?h($B):".")."' accesskey='1' title='Alt+Shift+1'>$J</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Mb))){echo'<a href="'.h($B."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Mb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Mb
as$c=>$b){$Nb=(is_array($b)?$b[1]:$b);if($Nb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Nb).'</a> &raquo; ';}}}echo"$Me\n";}}echo"<span id='loader'></span>\n","<h2>$Dd</h2>\n";restart_session();$Yd=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Xd=$_SESSION["messages"][$Yd];if($Xd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Xd)."</div>\n";unset($_SESSION["messages"][$Yd]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Eb=""){global$n;if(!is_ajax()){echo'</div>

<div id="menu">
';$n->navigation($Eb);echo'</div>
';}}function
int32($P){while($P>=2147483648){$P-=4294967296;}while($P<=-2147483649){$P+=4294967296;}return(int)$P;}function
long2str($s,$td){$U='';foreach($s
as$b){$U.=pack('V',$b);}if($td){return
substr($U,0,end($s));}return$U;}function
str2long($U,$td){$s=array_values(unpack('V*',str_pad($U,4*ceil(strlen($U)/4),"\0")));if($td){$s[]=strlen($U);}return$s;}function
xxtea_mx($pa,$la,$va,$_a){return
int32((($pa>>5&0x7FFFFFF)^$la<<2)+(($la>>3&0x1FFFFFFF)^$pa<<4))^int32(($va^$la)+($_a^$pa));}function
encrypt_string($Qb,$c){if($Qb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$s=str2long($Qb,true);$P=count($s)-1;$pa=$s[$P];$la=$s[0];$L=floor(6+52/($P+1));$va=0;while($L-->0){$va=int32($va+0x9E3779B9);$Pb=$va>>2&3;for($ja=0;$ja<$P;$ja++){$la=$s[$ja+1];$ub=xxtea_mx($pa,$la,$va,$c[$ja&3^$Pb]);$pa=int32($s[$ja]+$ub);$s[$ja]=$pa;}$la=$s[0];$ub=xxtea_mx($pa,$la,$va,$c[$ja&3^$Pb]);$pa=int32($s[$P]+$ub);$s[$P]=$pa;}return
long2str($s,false);}function
decrypt_string($Qb,$c){if($Qb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$s=str2long($Qb,false);$P=count($s)-1;$pa=$s[$P];$la=$s[0];$L=floor(6+52/($P+1));$va=int32($L*0x9E3779B9);while($va){$Pb=$va>>2&3;for($ja=$P;$ja>0;$ja--){$pa=$s[$ja-1];$ub=xxtea_mx($pa,$la,$va,$c[$ja&3^$Pb]);$la=int32($s[$ja]-$ub);$s[$ja]=$la;}$pa=$s[$P];$ub=xxtea_mx($pa,$la,$va,$c[$ja&3^$Pb]);$la=int32($s[0]-$ub);$s[0]=$la;$va=int32($va-0x9E3779B9);}return
long2str($s,true);}$i='';$D=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$gb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$gb[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Dc=$n->permanentLogin();$gb[$c]="$c:".base64_encode($Dc?encrypt_string($_POST["password"],$Dc):"");cookie("adminer_permanent",implode(" ",$gb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($D&&$_POST["token"]!=$D){page_header('Wyloguj','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($gb[$c]){unset($gb[$c]);cookie("adminer_permanent",implode(" ",$gb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Wylogowano pomyślnie.');}}elseif($gb&&!$_SESSION["pwds"]){session_regenerate_id();$Dc=$n->permanentLogin();foreach($gb
as$c=>$b){list(,$bf)=explode(":",$b);list($pb,$J,$Z)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$pb][$J][$Z]=decrypt_string(base64_decode($bf),$Dc);}}function
auth_error($yd=null){global$i,$n,$D;$yc=session_name();$q="";if(!$_COOKIE[$yc]&&$_GET[$yc]&&ini_bool("session.use_only_cookies")){$q='Wymagana jest obsługa sesji w PHP.';}elseif(isset($_GET["username"])){if(($_COOKIE[$yc]||$_GET[$yc])&&!$D){$q='Sesja wygasła, zaloguj się ponownie.';}else{$oa=&get_session("pwds");if(isset($oa)){$q=h($yd?$yd->getMessage():(is_string($i)?$i:'Nieprawidłowe dane logowania.'));$oa=null;}}}page_header('Zaloguj się',$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Brak rozszerzenia',sprintf('Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.',implode(", ",$ff)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$D=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$D;}$q=($_POST?($_POST["token"]==$D?"":'Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','"post_max_size"')));function
connect_error(){global$i,$D,$q,$ra;$_=array();if(DB!=""){page_header('Baza danych'.": ".h(DB),'Nie znaleziono bazy danych.',true);}else{if($_POST["db"]&&!$q){queries_redirect(substr(ME,0,-1),'Bazy danych zostały usunięte.',drop_databases($_POST["db"]));}page_header('Wybierz bazę danych',$q,false);echo"<p><a href='".h(ME)."database='>".'Utwórz nową bazę danych'."</a>\n";foreach(array('privileges'=>'Uprawnienia użytkowników','processlist'=>'Lista procesów','variables'=>'Zmienne','status'=>'Status',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('Wersja %s: %s za pomocą %s',$ra[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Zalogowany jako: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$df=support("scheme");$S=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Baza danych'."<td>".'Porównywanie znaków'."<td>".'Tabele'."</thead>\n";foreach($_
as$v){$sd=h(ME)."db=".urlencode($v);echo"<tr".odd()."><td>".checkbox("db[]",$v,in_array($v,(array)$_POST["db"])),"<th><a href='$sd'>".h($v)."</a>","<td><a href='$sd".($df?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($v,$S))."</a>","<td align='right'><a href='$sd&amp;schema=' id='tables-".h($v)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Usuń'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$D'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Odśwież'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$G=null,$Ac=""){$ha=array();$z=array();$w=array();$He=array();$sa=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($T=0;$T<count($a);$T++){$d=$k->fetch_field();$f=$d->name;$xa=$d->orgtable;$Kb=$d->orgname;if($Ac){$ha[$T]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($xa!=""){if(!isset($z[$xa])){$z[$xa]=array();foreach(indexes($xa,$G)as$t){if($t["type"]=="PRIMARY"){$z[$xa]=array_flip($t["columns"]);break;}}$w[$xa]=$z[$xa];}if(isset($w[$xa][$Kb])){unset($w[$xa][$Kb]);$z[$xa][$Kb]=$T;$ha[$T]=$xa;}}if($d->charsetnr==63){$He[$T]=true;}$sa[$T]=$d->type;$f=h($f);echo"<th".($xa!=""||$d->name!=$Kb?" title='".h(($xa!=""?"$xa.":"").$Kb)."'":"").">".($Ac?"<a href='$Ac".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($He[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d bajt','%d bajty','%d bajtów'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($sa[$c]==254){$b="<code>$b</code>";}}if(isset($ha[$c])&&!$w[$ha[$c]]){if($Ac){$B=$ha[$c].urlencode($a[array_search("table=",$ha)]);}else{$B="edit=".urlencode($ha[$c]);foreach($z[$ha[$c]]as$xc=>$T){$B.="&where".urlencode("[".bracket_escape($xc)."]")."=".urlencode($a[$T]);}}$b="<a href='".h(ME.$B)."'>$b</a>";}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'Brak rekordów.')."\n";}function
referencable_primary($nf){$e=array();foreach(table_status()as$ya=>$l){if($ya!=$nf&&fk_support($l)){foreach(fields($ya)as$d){if($d["primary"]){if($e[$ya]){unset($e[$ya]);break;}$e[$ya]=$d;}}}}return$e;}function
textarea($f,$o,$F=10,$Wa=80){echo"<textarea name='$f' rows='$F' cols='$Wa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($o)){foreach($o
as$b){echo
h($b)."\n\n\n";}}else{echo
h($o);}echo"</textarea>";}function
format_time($mb,$sc){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$sc))-array_sum(explode(" ",$mb)))).")</span>";}function
edit_type($c,$d,$S,$M=array()){global$Fc,$sa,$_b,$Ga;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($sa[$d["type"]])?array():array($d["type"]))+$Fc+($M?array('Klucze obce'=>$M):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'porównywanie znaków'.')'.optionlist($S,$d["collation"]).'</select>',($_b?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($_b,$d["unsigned"]).'</select>':''),($M?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'W przypadku usunięcia'.")".optionlist($Ga,$d["on_delete"])."</select> ":" ");}function
process_length($wa){global$hb;return(preg_match("~^\\s*(?:$hb)(?:\\s*,\\s*(?:$hb))*\\s*\$~",$wa)&&preg_match_all("~$hb~",$wa,$fa)?implode(",",$fa[0]):preg_replace('~[^0-9,+-]~','',$wa));}function
process_type($d,$Lb="COLLATE"){global$_b;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$_b)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Lb ".q($d["collation"]):"");}function
process_field($d,$tc){return
array(idf_escape($d["field"]),process_type($tc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".(($d["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$d["default"]))||($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$d["default"]))?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($N){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$N)){return" class='$c'";}}}function
edit_fields($p,$S,$N="TABLE",$te=0,$M=array(),$lb=false){global$Gb;echo'<thead><tr class="wrap">
';if($N=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($N=="TABLE"?'Nazwa kolumny':'Nazwa parametru'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Długość
<td>Opcje
';if($N=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Wartości domyślne
',(support("comment")?"<td".($lb?"":" class='hidden'").">".'Komentarz':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Dodaj następny'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$g=>$d){$g++;$Yc=$d[($_POST?"orig":"field")];$ue=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$Yc=="");echo'<tr',($ue?"":" style='display: none;'"),'>
',($N=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",explode("|",$Gb),$d["inout"]):""),'<th>';if($ue){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $te); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($Yc),'">
';edit_type("fields[$g]",$d,$S,$M);if($N=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($lb?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Dodaj następny'."' onclick='return !editingAddRow(this, $te, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.0' alt='^' title='".'Przesuń w górę'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.0' alt='v' title='".'Przesuń w dół'."'>&nbsp;":""),($Yc==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.0' alt='x' title='".'Usuń'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$ma=0;if($_POST["up"]){$Xa=0;foreach($p
as$c=>$d){if(key($_POST["up"])==$c){unset($p[$c]);array_splice($p,$Xa,0,array($d));break;}if(isset($d["field"])){$Xa=$ma;}$ma++;}}if($_POST["down"]){$ba=false;foreach($p
as$c=>$d){if(isset($d["field"])&&$ba){unset($p[key($_POST["down"])]);array_splice($p,$ma,0,array($ba));break;}if(key($_POST["down"])==$c){$ba=$d;}$ma++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($m){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($m[0][0].$m[0][0],$m[0][0],substr($m[0],1,-1))),'\\'))."'";}function
grant($Q,$aa,$w,$ib){if(!$aa){return
true;}if($aa==array("ALL PRIVILEGES","GRANT OPTION")){return($Q=="GRANT"?queries("$Q ALL PRIVILEGES$ib WITH GRANT OPTION"):queries("$Q ALL PRIVILEGES$ib")&&queries("$Q GRANT OPTION$ib"));}return
queries("$Q ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$w, ",$aa).$w).$ib);}function
drop_create($xe,$da,$O,$we,$pf,$qf,$f){if($_POST["drop"]){return
query_redirect($xe,$O,$we,true,!$_POST["dropped"]);}$Ia=$f!=""&&($_POST["dropped"]||queries($xe));$sf=queries($da);if(!queries_redirect($O,($f!=""?$pf:$qf),$sf)&&$Ia){redirect(null,$we);}return$Ia;}function
tar_file($jb,$Wc){$e=pack("a100a8a8a8a12a12",$jb,644,0,0,decoct(strlen($Wc)),decoct(time()));$ie=8*32;for($g=0;$g<strlen($e);$g++){$ie+=ord($e{$g});}$e.=sprintf("%06o",$ie)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Wc.str_repeat("\0",511-(strlen($Wc)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ga=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$hb="'(?:''|[^'\\\\]|\\\\.)*+'";$Gb="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$p=fields($h);if(!$p){$q=error();}$H=($p?table_status($h):array());page_header(($p&&is_view($H)?'Perspektywa':'Tabela').": ".h($h),$q);$n->selectLinks($H);$db=$H["Comment"];if($db!=""){echo"<p>".'Komentarz'.": ".h($db)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Kolumna'."<td>".'Typ'.(support("comment")?"<td>".'Komentarz':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td title='".h($d["collation"])."'>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($d["default"])?" [<b>".h($d["default"])."</b>]":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($H)){echo"<h3>".'Indeksy'."</h3>\n";$z=indexes($h);if($z){echo"<table cellspacing='0'>\n";foreach($z
as$f=>$t){ksort($t["columns"]);$kb=array();foreach($t["columns"]as$c=>$b){$kb[]="<i>".h($b)."</i>".($t["lengths"][$c]?"(".$t["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$t[type]<td>".implode(", ",$kb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Zmień indeksy'."</a>\n";if(fk_support($H)){echo"<h3>".'Klucze obce'."</h3>\n";$M=foreign_keys($h);if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Źródło'."<td>".'Cel'."<td>".'W przypadku usunięcia'."<td>".'W przypadku zmiany'.($r!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($M
as$f=>$C){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$C["source"]))."</i>","<td><a href='".h($C["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($C["db"]),ME):($C["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($C["ns"]),ME):ME))."table=".urlencode($C["table"])."'>".($C["db"]!=""?"<b>".h($C["db"])."</b>.":"").($C["ns"]!=""?"<b>".h($C["ns"])."</b>.":"").h($C["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$C["target"]))."</i>)","<td>".nbsp($C["on_delete"])."\n","<td>".nbsp($C["on_update"])."\n";if($r!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Zmień'.'</a>';}}echo"</table>\n";}if($r!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Dodaj klucz obcy'."</a>\n";}}if(support("trigger")){echo"<h3>".'Wyzwalacze'."</h3>\n";$uc=triggers($h);if($uc){echo"<table cellspacing='0'>\n";foreach($uc
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Zmień'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Dodaj wyzwalacz'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Schemat bazy danych',"",array(),DB);$ab=array();$ne=array();$f="adminer_schema";$me=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$me,$fa,PREG_SET_ORDER);foreach($fa
as$g=>$m){$ab[$m[1]]=array($m[2],$m[3]);$ne[]="\n\t'".js_escape($m[1])."': [ $m[2], $m[3] ]";}$zb=0;$Fe=-1;$Sa=array();$Je=array();$Ie=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Xb=0;$Sa[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Xb+=1.25;$d["pos"]=$Xb;$Sa[$a["Name"]]["fields"][$f]=$d;}$Sa[$a["Name"]]["pos"]=($ab[$a["Name"]]?$ab[$a["Name"]]:array($zb,0));foreach($n->foreignKeys($a["Name"])as$b){if(!$b["db"]){$ka=$Fe;if($ab[$a["Name"]][1]||$ab[$b["table"]][1]){$ka=min(floatval($ab[$a["Name"]][1]),floatval($ab[$b["table"]][1]))-1;}else{$Fe-=.1;}while($Ie[(string)$ka]){$ka-=.0001;}$Sa[$a["Name"]]["references"][$b["table"]][(string)$ka]=array($b["source"],$b["target"]);$Je[$b["table"]][$a["Name"]][(string)$ka]=$b["target"];$Ie[(string)$ka]=true;}}$zb=max($zb,$Sa[$a["Name"]]["pos"][0]+2.5+$Xb);}echo'<div id="schema" style="height: ',$zb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$ne)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$zb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Sa
as$f=>$l){echo"<div class='table' style='top: ".$l["pos"][0]."em; left: ".$l["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($l["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$l["references"]as$Fb=>$dc){foreach($dc
as$ka=>$rc){$Rb=$ka-$ab[$f][1];$g=0;foreach($rc[0]as$ta){echo"<div class='references' title='".h($Fb)."' id='refs$ka-".($g++)."' style='left: $Rb"."em; top: ".$l["fields"][$ta]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Rb)."em;'></div></div>\n";}}}foreach((array)$Je[$f]as$Fb=>$dc){foreach($dc
as$ka=>$w){$Rb=$ka-$ab[$f][1];$g=0;foreach($w
as$na){echo"<div class='references' title='".h($Fb)."' id='refd$ka-".($g++)."' style='left: $Rb"."em; top: ".$l["fields"][$na]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Rb)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Sa
as$f=>$l){foreach((array)$l["references"]as$Fb=>$dc){foreach($dc
as$ka=>$rc){$wc=$zb;$Uc=-10;foreach($rc[0]as$c=>$ta){$De=$l["pos"][0]+$l["fields"][$ta]["pos"];$Ee=$Sa[$Fb]["pos"][0]+$Sa[$Fb]["fields"][$rc[1][$c]]["pos"];$wc=min($wc,$De,$Ee);$Uc=max($Uc,$De,$Ee);}echo"<div class='references' id='refl$ka' style='left: $ka"."em; top: $wc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Uc-$wc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($me)),'" id="schema-link">Trwały link</a>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$Oe="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$c){$Oe.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($Oe,1));$ob=dump_headers(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$eb=($_POST["format"]=="sql");if($eb){echo"-- Adminer $Zb ".$ra[DRIVER]." dump

".($r!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$I=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$v){if($i->select_db($v)){if($eb&&ereg('CREATE',$I)&&($da=$i->result("SHOW CREATE DATABASE ".idf_escape($v),1))){if($I=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($v).";\n";}echo($I=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$da):$da).";\n";}if($eb){if($I){echo
use_sql($v).";\n\n";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Ta="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ba){foreach(get_rows("SHOW $Ba STATUS WHERE Db = ".q($v),null,"-- ")as$a){$Ta.=($I!='DROP+CREATE'?"DROP $Ba IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $Ba ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Ta.=($I!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Ta){echo"DELIMITER ;;\n\n$Ta"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Ha=array();foreach(table_status()as$a){$l=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Ce=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($l||$Ce){if(!is_view($a)){if($ob=="tar"){ob_start();}$n->dumpTable($a["Name"],($l?$_POST["table_style"]:""));if($Ce){$n->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($eb&&$_POST["triggers"]&&$l&&($uc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$uc\nDELIMITER ;\n";}if($ob=="tar"){echo
tar_file((DB!=""?"":"$v/")."$a[Name].csv",ob_get_clean());}elseif($eb){echo"\n";}}elseif($eb){$Ha[]=$a["Name"];}}}foreach($Ha
as$wb){$n->dumpTable($wb,$_POST["table_style"],true);}if($ob=="tar"){echo
pack("x512");}}if($I=="CREATE+ALTER"&&$eb){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$db=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $db THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$db;
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
";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))&&$eb){echo"SELECT @adminer_alter;\n";}}}if($eb){echo"-- ".$i->result("SELECT NOW()")."\n";}exit;}page_header('Eksport',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Le=array('','USE','DROP+CREATE','CREATE');$oe=array('','DROP+CREATE','CREATE');$Zd=array('','TRUNCATE+INSERT','INSERT');if($r=="sql"){$Le[]='CREATE+ALTER';$oe[]='CREATE+ALTER';$Zd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Rezultat'."<td>".html_select("output",$n->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$n->dumpFormat(),$a["format"],0)."\n";echo($r=="sqlite"?"":"<tr><th>".'Baza danych'."<td>".html_select('db_style',$Le,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Procedury i funkcje'):"").(support("event")?checkbox("events",1,$a["events"],'Wydarzenia'):"")),"<tr><th>".'Tabele'."<td>".html_select('table_style',$oe,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Wyzwalacze'):""),"<tr><th>".'Dane'."<td>".html_select('data_style',$Zd,$a["data_style"]),'</table>
<p><input type="submit" value="Eksport">

<table cellspacing="0">
';$rd=array();if(DB!=""){$Ja=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ja onclick='formCheck(this, /^tables\\[/);'>".'Tabele'."</label>","<th style='text-align: right;'><label>".'Dane'."<input type='checkbox' id='check-data'$Ja onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Ha="";foreach(table_status()as$a){$f=$a["Name"];$ic=ereg_replace("_.*","",$f);$Ja=($h==""||$h==(substr($h,-1)=="%"?"$ic%":$f));$kb="<tr><td>".checkbox("tables[]",$f,$Ja,$f,"formUncheck('check-tables');");if(is_view($a)){$Ha.="$kb\n";}else{echo"$kb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Ja,"","formUncheck('check-data');")."</label>\n";}$rd[$ic]++;}echo$Ha;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Baza danych'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$v){if(!information_schema($v)){$ic=ereg_replace("_.*","",$v);echo"<tr><td>".checkbox("databases[]",$v,$h==""||$h=="$ic%",$v,"formUncheck('check-databases');")."</label>\n";$rd[$ic]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$qa=true;foreach($rd
as$c=>$b){if($c!=""&&$b>1){echo($qa?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$qa=false;}}}elseif(isset($_GET["privileges"])){page_header('Uprawnienia użytkowników');$k=$i->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Użytkownik: <input name="user">
Serwer: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Edytuj">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Użytkownik'."<th>".'Serwer'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'edytuj'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Dodaj użytkownika'."</a>";}elseif(isset($_GET["sql"])){if(!$q&&$_POST["export"]){dump_headers("sql");$n->dumpTable("","");$n->dumpData("","table",$_POST["query"]);exit;}restart_session();$jf=&get_session("queries");$Qa=&$jf[DB];if(!$q&&$_POST["clear"]){$Qa=array();redirect(remove_from_uri("history"));}page_header('Zapytanie SQL',$q);if(!$q&&$_POST){$Aa=false;$j=$_POST["query"];if($_POST["webfile"]){$Aa=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Aa?fread($Aa,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($j)+memory_get_usage()+8e6));}if($j!=""&&strlen($j)<1e6){$L=$j.(ereg(';$',$j)?"":";");if(!$Qa||end($Qa)!=$L){$Qa[]=$L;}}$bc="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Tc=";";$ma=0;$Db=true;$G=connect();if(is_object($G)&&DB!=""){$G->select_db(DB);}$fb=0;$Bc=array();$Bf='[\'`"]'.($r=="pgsql"?'|\\$[^$]*\\$':($r=="mssql"||$r=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$Cf=microtime();parse_str($_COOKIE["adminer_export"],$Id);$Cd=$n->dumpFormat();unset($Cd["sql"]);while($j!=""){if(!$ma&&$r=="sql"&&preg_match("~^$bc*DELIMITER\\s+(.+)~i",$j,$m)){$Tc=$m[1];$j=substr($j,strlen($m[0]));}else{preg_match('('.preg_quote($Tc)."|$Bf|\$)",$j,$m,PREG_OFFSET_CAPTURE,$ma);$ba=$m[0][0];$ma=$m[0][1]+strlen($ba);if(!$ba&&$Aa&&!feof($Aa)){$j.=fread($Aa,1e5);}else{if(!$ba&&rtrim($j)==""){break;}if($ba&&$ba!=$Tc){while(preg_match('('.($ba=='/*'?'\\*/':($ba=='['?']':(ereg('^-- |^#',$ba)?"\n":preg_quote($ba)."|\\\\."))).'|$)s',$j,$m,PREG_OFFSET_CAPTURE,$ma)){$U=$m[0][0];$ma=$m[0][1]+strlen($U);if(!$U&&$Aa&&!feof($Aa)){$j.=fread($Aa,1e6);}elseif($U[0]!="\\"){break;}}}else{$Db=false;$L=substr($j,0,$m[0][1]);$fb++;$kb="<pre id='sql-$fb'><code class='jush-$r'>".shorten_utf8(trim($L),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$kb;ob_flush();flush();}$mb=microtime();if($i->multi_query($L)&&is_object($G)&&preg_match("~^$bc*USE\\b~isU",$L)){$G->query($L);}do{$k=$i->store_result();$sc=microtime();$vd=format_time($mb,$sc).(strlen($L)<1000?" <a href='".h(ME)."sql=".urlencode(trim($L))."'>".'Edytuj'."</a>":"");if($i->error){echo($_POST["only_errors"]?$kb:""),"<p class='error'>".'Błąd w zapytaniu'.": ".error()."\n";$Bc[]=" <a href='#sql-$fb'>$fb</a>";if($_POST["error_stops"]){break;}}elseif(is_object($k)){select($k,$G);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($k->num_rows?lang(array('%d rekord','%d rekordy','%d rekordów'),$k->num_rows):"").$vd;$E="export-$fb";$wd=", <a href='#$E' onclick=\"return !toggle('$E');\">".'Eksport'."</a><span id='$E' class='hidden'>: ".html_select("output",$n->dumpOutput(),$Id["output"])." ".html_select("format",$Cd,$Id["format"])."<input type='hidden' name='query' value='".h($L)."'>"." <input type='submit' name='export' value='".'Eksport'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$D'></span>";if($G&&preg_match("~^($bc|\\()*SELECT\\b~isU",$L)&&($Df=explain($G,$L))){$E="explain-$fb";echo", <a href='#$E' onclick=\"return !toggle('$E');\">EXPLAIN</a>$wd\n","<div id='$E' class='hidden'>\n";select($Df,$G,($r=="sql"?"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo"$wd\n";}echo"</form>\n";}}else{if(preg_match("~^$bc*(CREATE|DROP|ALTER)$bc+(DATABASE|SCHEMA)\\b~isU",$L)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($i->info)."'>".lang(array('Zapytanie wykonane pomyślnie, zmieniono %d rekord.','Zapytanie wykonane pomyślnie, zmieniono %d rekordy.','Zapytanie wykonane pomyślnie, zmieniono %d rekordów.'),$i->affected_rows)."$vd\n";}}$mb=$sc;}while($i->next_result());$j=substr($j,$ma);$ma=0;}}}}if($Db){echo"<p class='message'>".'Nic do wykonania.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('Pomyślnie wykonano %d zapytanie.','Pomyślnie wykonano %d zapytania.','Pomyślnie wykonano %d zapytań.'),$fb-count($Bc)).format_time($Cf,microtime())."\n";}elseif($Bc&&$fb>1){echo"<p class='error'>".'Błąd w zapytaniu'.": ".implode("",$Bc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$L=$_GET["sql"];if($_POST){$L=$_POST["query"];}elseif($_GET["history"]=="all"){$L=$Qa;}elseif($_GET["history"]!=""){$L=$Qa[$_GET["history"]];}textarea("query",$L,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Wgranie pliku'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Wgrywanie plików jest wyłączone.'),'<p>
<input type="submit" value="Wykonaj" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$D,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Zatrzymaj w przypadku błędu')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Pokaż tylko błędy')."\n";print_fieldset("webfile",'Z serwera',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$cd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$cd[]=".$c";}}echo
sprintf('Plik %s na serwerze',"<code>adminer.sql".($cd?"[".implode("|",$cd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Uruchom z pliku'.'">',"</div></fieldset>\n";if($Qa){print_fieldset("history",'Historia',$_GET["history"]!="");foreach($Qa
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Edytuj'."</a> <code class='jush-$r'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Wyczyść'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edytuj wszystkie'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$x=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Ea=(isset($_GET["select"])?$_POST["edit"]:$x);$p=fields($h);foreach($p
as$f=>$d){if(!isset($d["privileges"][$Ea?"update":"insert"])||$n->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$O=$_POST["referer"];if($_POST["insert"]){$O=($Ea?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$O)){$O=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $x"),$O,'Rekord został usunięty.');}else{$u=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$u[idf_escape($f)]=($Ea?"\n".idf_escape($f)." = $b":$b);}}if($Ea){if(!$u){redirect($O);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$u),"\nWHERE $x"),$O,'Rekord został zaktualizowany.');}else{$k=insert_into($h,$u);$Bd=($k?last_id():0);queries_redirect($O,sprintf('Rekord%s został dodany.',($Bd?" $Bd":"")),$k);}}}$ya=$n->tableName(table_status($h));page_header(($Ea?'Edytuj':'Dodaj'),$q,array("select"=>array($h,$ya)),$ya);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($x){$y=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$y[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($y){$F=get_rows("SELECT".limit(implode(", ",$y)." FROM ".table($h)," WHERE $x",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($F)!=1?null:reset($F));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$n->fieldName($d);$Na=$_GET["set"][bracket_escape($f)];$o=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$Ea&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Na)?$Na:$d["default"]))));if(!$_POST["save"]&&is_string($o)){$o=$n->editVal($o,$d);}$A=($_POST["save"]?(string)$_POST["function"][$f]:($Ea&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($o===false?null:(isset($o)?'':'NULL'))));if($d["type"]=="timestamp"&&$o=="CURRENT_TIMESTAMP"){$o="";$A="now";}input($d,$o,$A);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Zapisz zmiany'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Ea?'Zapisz i kontynuuj edycję':'Zapisz i dodaj następny')."' title='Ctrl+Shift+Enter'>\n";}}echo($Ea?"<input type='submit' name='delete' value='".'Usuń'."' onclick=\"return confirm('".'Czy jesteś pewien?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$Ad=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$_d=referencable_primary($h);$M=array();foreach($_d
as$ya=>$d){$M[str_replace("`","``",$ya)."`".str_replace("`","``",$d["field"])]=$ya;}$_c=array();$qc=array();if($h!=""){$_c=fields($h);$qc=table_status($h);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Tabela została usunięta.');}else{$p=array();$Mc=array();ksort($_POST["fields"]);$dd=reset($_c);$qb="FIRST";foreach($_POST["fields"]as$c=>$d){$C=$M[$d["type"]];$tc=(isset($C)?$_d[$C]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Na=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Na!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Na;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Md=process_field($d,$tc);if($Md!=process_field($dd,$dd)){$p[]=array($d["orig"],$Md,$qb);}if(isset($C)){$Mc[idf_escape($d["field"])]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($M[$d["type"]])." (".idf_escape($tc["field"]).")".(in_array($d["on_delete"],$Ga)?" ON DELETE $d[on_delete]":"");}$qb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$dd=next($_c);}}$Ob="";if(in_array($_POST["partition_by"],$Ad)){$md=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$o=$_POST["partition_values"][$c];$md[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($o!=""?" ($o)":" MAXVALUE");}}$Ob.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($md?" (".implode(",",$md)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$Ob.="\nREMOVE PARTITIONING";}$ga='Tabela została zmieniona.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$ga='Tabela została utworzona.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ga,alter_table($h,$_POST["name"],$p,$Mc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$qc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$qc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$Ob));}}page_header(($h!=""?'Zmień tabelę':'Utwórz tabelę'),$q,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($sa["int"])?"int":(isset($sa["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$qc;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($_c
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Hb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Hb ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Hb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$ae){$a["partition_names"][]=$ae["PARTITION_NAME"];$a["partition_values"][]=$ae["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$S=collations();$ld=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($ld&&count($a["fields"])>$ld){echo"<p class='error'>".h(sprintf('Przekroczono maksymalną liczbę pól. Zwiększ %s i %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$nd=engines();foreach($nd
as$Wb){if(!strcasecmp($Wb,$a["Engine"])){$a["Engine"]=$Wb;break;}}echo'
<form action="" method="post" id="form">
<p>
Nazwa tabeli: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($h==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($nd?html_select("Engine",array(""=>"(".'składowanie'.")")+$nd,$a["Engine"]):""),' ',($S&&!ereg("sqlite|mssql",$r)?html_select("Collation",array(""=>"(".'porównywanie znaków'.")")+$S,$a["Collation"]):""),' <input type="submit" value="Zapisz zmiany">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$lb=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$lb){foreach($a["fields"]as$d){if($d["comment"]!=""){$lb=true;break;}}}edit_fields($a["fields"],$S,"TABLE",$ld,$M,$lb);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Wartości domyślne</label>
',(support("comment")?checkbox("comments",1,$lb,'Komentarz',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($lb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Zapisz zmiany">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
';if(support("partitioning")){$ee=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partycjonowanie',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Ad,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partycje: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($ee||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($ee?"":" class='hidden'"),'>
<thead><tr><th>Nazwa partycji<th>Wartości</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$zc=array("PRIMARY","UNIQUE","INDEX");$H=table_status($h);if(eregi("MyISAM|M?aria",$H["Engine"])){$zc[]="FULLTEXT";}$z=indexes($h);if($r=="sqlite"){unset($zc[0]);unset($z[""]);}if($_POST&&!$q&&!$_POST["add"]){$ca=array();foreach($_POST["indexes"]as$t){$f=$t["name"];if(in_array($t["type"],$zc)){$w=array();$Ib=array();$u=array();ksort($t["columns"]);foreach($t["columns"]as$c=>$ea){if($ea!=""){$wa=$t["lengths"][$c];$u[]=idf_escape($ea).($wa?"(".(+$wa).")":"");$w[]=$ea;$Ib[]=($wa?$wa:null);}}if($w){$Za=$z[$f];if($Za){ksort($Za["columns"]);ksort($Za["lengths"]);if($t["type"]==$Za["type"]&&array_values($Za["columns"])===$w&&(!$Za["lengths"]||array_values($Za["lengths"])===$Ib)){unset($z[$f]);continue;}}$ca[]=array($t["type"],$f,"(".implode(", ",$u).")");}}}foreach($z
as$f=>$Za){$ca[]=array($Za["type"],$f,"DROP");}if(!$ca){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indeksy zostały zmienione.',alter_indexes($h,$ca));}page_header('Indeksy',$q,array("table"=>$h),$h);$p=array_keys(fields($h));$a=array("indexes"=>$z);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$t){if($t["columns"][count($t["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$t=end($a["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$t){$a["indexes"][$c]["name"]=$c;$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Typ indeksu<th>Kolumna (długość)<th>Nazwa</thead>
';$T=1;foreach($a["indexes"]as$t){echo"<tr><td>".html_select("indexes[$T][type]",array(-1=>"")+$zc,$t["type"],($T==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$g=1;foreach($t["columns"]as$c=>$ea){echo"<span>".html_select("indexes[$T][columns][$g]",array(-1=>"")+$p,$ea,($g==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($r=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$T][lengths][$g]' size='2' value='".h($t["lengths"][$c])."'> </span>";$g++;}echo"<td><input name='indexes[$T][name]' value='".h($t["name"])."'>\n";$T++;}echo'</table>
<p>
<input type="submit" value="Zapisz zmiany">
<noscript><p><input type="submit" name="add" value="Dodaj następny"></noscript>
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$q&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Baza danych została usunięta.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Nazwa bazy danych została zmieniona.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$ce=true;$Xa="";foreach($_
as$v){if(count($_)==1||$v!=""){if(!create_database($v,$_POST["collation"])){$ce=false;}$Xa=$v;}}queries_redirect(ME."db=".urlencode($Xa),'Baza danych została utworzona.',$ce);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Baza danych została zmieniona.');}}page_header(DB!=""?'Zmień bazę danych':'Utwórz bazę danych',$q,array(),DB);$S=collations();$f=DB;$Lb=null;if($_POST){$f=$_POST["name"];$Lb=$_POST["collation"];}elseif(DB!=""){$Lb=db_collation(DB,$S);}elseif($r=="sql"){foreach(get_vals("SHOW GRANTS")as$Q){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Q,$m)&&$m[1]){$f=stripcslashes(idf_unescape("`$m[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($S?html_select("collation",array(""=>"(".'porównywanie znaków'.")")+$S,$Lb):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Zapisz zmiany">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Usuń'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Dodaj następny'."'>\n";}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["call"])){$Ca=$_GET["call"];page_header('Uruchom'.": ".h($Ca),$q);$Ba=routine($Ca,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$nb=array();$Ta=array();foreach($Ba["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Ta[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$nb[]=$g;}}if(!$q&&$_POST){$Wd=array();foreach($Ba["fields"]as$c=>$d){if(in_array($c,$nb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Ta[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Wd[]=(isset($Ta[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ca)."(".implode(", ",$Wd).")";echo"<p><code class='jush-$r'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edytuj'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{$G=connect();if(is_object($G)){$G->select_db(DB);}do{$k=$i->store_result();if(is_object($k)){select($k,$G);}else{echo"<p class='message'>".lang(array('Procedura została uruchomiona, zmieniono %d rekord.','Procedura została uruchomiona, zmieniono %d rekordy.','Procedura została uruchomiona, zmieniono %d rekordów.'),$i->affected_rows)."\n";}}while($i->next_result());if($Ta){select($i->query("SELECT ".implode(", ",$Ta)));}}}echo'
<form action="" method="post">
';if($nb){echo"<table cellspacing='0'>\n";foreach($nb
as$c){$d=$Ba["fields"][$c];$f=$d["field"];echo"<tr><th>".$n->fieldName($d);$o=$_POST["fields"][$f];if($o!=""){if($d["type"]=="enum"){$o=+$o;}if($d["type"]=="set"){$o=array_sum($o);}}input($d,$o,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Uruchom">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$q&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($r=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Klucz obcy został usunięty.');}else{$ta=array_filter($_POST["source"],'strlen');ksort($ta);$na=array();foreach($ta
as$c=>$b){$na[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$ta)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$na)).")".(in_array($_POST["on_delete"],$Ga)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Ga)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Klucz obcy został zmieniony.':'Klucz obcy został utworzony.'));$q='Źródłowa i docelowa kolumna muszą być tego samego typu, powinien istnieć indeks na docelowej kolumnie oraz muszą istnieć dane referencyjne.'."<br>$q";}}page_header('Klucz obcy',$q,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$M=foreign_keys($h);$a=$M[$_GET["name"]];$a["source"][]="";}$ta=array_keys(fields($h));$na=($h===$a["table"]?$ta:array_keys(fields($a["table"])));$Vd=array();foreach(table_status()as$f=>$H){if(fk_support($H)){$Vd[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo'Tabela docelowa:
',html_select("table",$Vd,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Zmień"></noscript>
<table cellspacing="0">
<thead><tr><th>Źródło<th>Cel</thead>
';$T=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".(+$c)."]",array(-1=>"")+$ta,$b,($T==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$c)."]",$na,$a["target"][$c]);$T++;}echo'</table>
<p>
W przypadku usunięcia: ',html_select("on_delete",array(-1=>"")+$Ga,$a["on_delete"]),' W przypadku zmiany: ',html_select("on_update",array(-1=>"")+$Ga,$a["on_update"]),'<p>
<input type="submit" value="Zapisz zmiany">
<noscript><p><input type="submit" name="add" value="Dodaj kolumnę"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$Ia=false;if($_POST&&!$q){$Ia=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'Perspektywa została usunięta.','Perspektywa została zmieniona.','Perspektywa została utworzona.',$h);}page_header(($h!=""?'Zmień perspektywę':'Utwórz perspektywę'),$q,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Nazwa: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($Ia){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Zapisz zmiany">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["event"])){$Ua=$_GET["event"];$Pd=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$kd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$q){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Ua),substr(ME,0,-1),'Wydarzenie zostało usunięte.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Pd)&&isset($kd[$_POST["STATUS"]])){$Nd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($Ua!=""?'Wydarzenie zostało zmienione.':'Wydarzenie zostało utworzone.'),queries(($Ua!=""?"ALTER EVENT ".idf_escape($Ua).$Nd.($Ua!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Nd)."\n".$kd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($Ua!=""?'Zmień wydarzenie'.": ".h($Ua):'Utwórz wydarzenie'),$q);$a=array();if($_POST){$a=$_POST;}elseif($Ua!=""){$F=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Ua));$a=reset($F);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Nazwa<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Początek<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Koniec<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Wykonuj co<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Pd,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$kd,$a["STATUS"]),'<tr><th>Komentarz<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Nie kasuj wydarzenia po przeterminowaniu'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($Ua!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["procedure"])){$Ca=$_GET["procedure"];$Ba=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$jd=routine_languages();$Ia=false;if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$u=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$u[]=(ereg("^($Gb)\$",$d["inout"])?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ia=drop_create("DROP $Ba ".idf_escape($Ca),"CREATE $Ba ".idf_escape($_POST["name"])." (".implode(", ",$u).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$jd)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Procedura została usunięta.','Procedura została zmieniona.','Procedura została utworzona.',$Ca);}page_header(($Ca!=""?(isset($_GET["function"])?'Zmień funkcję':'Zmień procedurę').": ".h($Ca):(isset($_GET["function"])?'Utwórz funkcję':'Utwórz procedurę')),$q);$S=get_vals("SHOW CHARACTER SET");sort($S);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ca!=""){$a=routine($Ca,$Ba);$a["name"]=$Ca;}echo'
<form action="" method="post" id="form">
<p>Nazwa: <input name="name" value="',h($a["name"]),'" maxlength="64">
',($jd?'Język'.": ".html_select("language",$jd,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$S,$Ba);if(isset($_GET["function"])){echo"<tr><td>".'Zwracany typ';edit_type("returns",$a["returns"],$S);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($Ca!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}if($Ia){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$Cc=trigger_options();$Ud=array("INSERT","UPDATE","DELETE");$Ia=false;if($_POST&&!$q&&in_array($_POST["Timing"],$Cc["Timing"])&&in_array($_POST["Event"],$Ud)&&in_array($_POST["Type"],$Cc["Type"])){$Td=" $_POST[Timing] $_POST[Event]";$ib=" ON ".table($h);$Ia=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($r=="pgsql"?$ib:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($r=="mssql"?$ib.$Td:$Td.$ib).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($h),'Wyzwalacz został usunięty.','Wyzwalacz został zmieniony.','Wyzwalacz został utworzony.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Zmień wyzwalacz'.": ".h($_GET["name"]):'Utwórz wyzwalacz'),$q,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Czas<td>',html_select("Timing",$Cc["Timing"],$a["Timing"],"if (/^".h(preg_quote($h,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($h))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Wydarzenie<td>',html_select("Event",$Ud,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Cc["Type"],$a["Type"]),'</table>
<p>Nazwa: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Zapisz zmiany">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}if($Ia){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["user"])){$fd=$_GET["user"];$aa=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$nc){$aa[$nc][$a["Privilege"]]=$a["Comment"];}}$aa["Server Admin"]+=$aa["File access on server"];$aa["Databases"]["Create routine"]=$aa["Procedures"]["Create routine"];unset($aa["Procedures"]["Create routine"]);$aa["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$aa["Columns"][$b]=$aa["Tables"][$b];}unset($aa["Server Admin"]["Usage"]);foreach($aa["Tables"]as$c=>$b){unset($aa["Databases"][$c]);}$Yb=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$Yb[$b]=(array)$Yb[$b]+(array)$_POST["grants"][$c];}}$Va=array();$mc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($fd)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$m)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$m[1],$fa,PREG_SET_ORDER)){foreach($fa
as$b){if($b[1]!="USAGE"){$Va["$m[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Va["$m[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$m)){$mc=$m[1];}}}if($_POST&&!$q){$Ab=(isset($_GET["host"])?q($fd)."@".q($_GET["host"]):"''");$Ra=q($_POST["user"])."@".q($_POST["host"]);$gd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Ab",ME."privileges=",'Użytkownik został usunięty.');}else{if($Ab!=$Ra){$q=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ra IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $gd");}elseif($_POST["pass"]!=$mc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ra = ".($_POST["hashed"]?$gd:"PASSWORD($gd)"));}if(!$q){$Tb=array();foreach($Yb
as$La=>$Q){if(isset($_GET["grant"])){$Q=array_filter($Q);}$Q=array_keys($Q);if(isset($_GET["grant"])){$Tb=array_diff(array_keys(array_filter($Yb[$La],'strlen')),$Q);}elseif($Ab==$Ra){$be=array_keys((array)$Va[$La]);$Tb=array_diff($be,$Q);$Q=array_diff($Q,$be);unset($Va[$La]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$La,$m)&&(!grant("REVOKE",$Tb,$m[2]," ON $m[1] FROM $Ra")||!grant("GRANT",$Q,$m[2]," ON $m[1] TO $Ra"))){$q=true;break;}}}if(!$q&&isset($_GET["host"])){if($Ab!=$Ra){queries("DROP USER $Ab");}elseif(!isset($_GET["grant"])){foreach($Va
as$La=>$Tb){if(preg_match('~^(.+)(\\(.*\\))?$~U',$La,$m)){grant("REVOKE",array_keys($Tb),$m[2]," ON $m[1] FROM $Ra");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Użytkownik został zmieniony.':'Użytkownik został dodany.'),!$q);if($Ab!=$Ra){$i->query("DROP USER $Ra");}}}page_header((isset($_GET["host"])?'Użytkownik'.": ".h("$fd@$_GET[host]"):'Dodaj użytkownika'),$q,array("privileges"=>array('','Uprawnienia użytkowników')));if($_POST){$a=$_POST;$Va=$Yb;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$mc;if($mc!=""){$a["hashed"]=true;}$Va[DB!=""&&!isset($_GET["host"])?idf_escape($_GET["db"]).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Serwer<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Użytkownik<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Hasło<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Zahashowane',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Uprawnienia użytkowników'."</a>";$g=0;foreach($Va
as$La=>$Q){echo'<th>'.($La!="*.*"?"<input name='objects[$g]' value='".h($La)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Serwer',"Databases"=>'Baza danych',"Tables"=>'Tabela',"Columns"=>'Kolumna',"Procedures"=>'Procedura',)as$nc=>$Nb){foreach((array)$aa[$nc]as$Ub=>$db){echo"<tr".odd()."><td".($Nb?">$Nb<td":" colspan='2'").' lang="en" title="'.h($db).'">'.h($Ub);$g=0;foreach($Va
as$La=>$Q){$f="'grants[$g][".h(strtoupper($Ub))."]'";$o=$Q[strtoupper($Ub)];if($nc=="Server Admin"&&$La!=(isset($Va["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($o?" selected":"").">".'Uprawnienia'."<option value='0'".($o=="0"?" selected":"").">".'Usuń uprawnienia'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($o?" checked":"").($Ub=="All privileges"?" id='grants-$g-all'":($Ub=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="submit" value="Zapisz zmiany">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Usuń"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$q){$qd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$qd++;}}queries_redirect(ME."processlist=",lang(array('Przerwano %d wątek.','Przerwano %d wątki.','Przerwano %d wątków.'),$qd),$qd||!$_POST["kill"]);}page_header('Lista procesów',$q);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$g=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$g=>$a){if(!$g){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$c=>$b){echo"<td>".($c=="Info"&&$b!=""?"<code class='jush-$r'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Edytuj'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($g+1)."/".sprintf('%d w sumie',$i->result("SELECT @@max_connections")),'<p>
<input type="submit" value="Przerwij wykonywanie">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$H=table_status($h);$z=indexes($h);$p=fields($h);$M=column_foreign_keys($h);if($H["Oid"]=="t"){$z[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$oc);$fe=array();$w=array();$vb=null;foreach($p
as$c=>$d){$f=$n->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$w[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$vb=$n->selectLengthProcess();}}$fe+=$d["privileges"];}list($y,$Y)=$n->selectColumnsProcess($w,$z);$x=$n->selectSearchProcess($p,$z);$Ka=$n->selectOrderProcess($p,$z);$W=$n->selectLimitProcess();$Hb=($y?implode(", ",$y):($H["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($h);$hd=($Y&&count($Y)<count($y)?"\nGROUP BY ".implode(", ",$Y):"").($Ka?"\nORDER BY ".implode(", ",$Ka):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Pa=>$a){echo$i->result("SELECT".limit(idf_escape(key($a))." FROM ".table($h)," WHERE ".where_check($Pa).($x?" AND ".implode(" AND ",$x):"").($Ka?" ORDER BY ".implode(", ",$Ka):""),1));}exit;}if($_POST&&!$q){$zd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Lc=$cc=null;foreach($z
as$t){if($t["type"]=="PRIMARY"){$Lc=array_flip($t["columns"]);$cc=($y?$Lc:array());break;}}foreach((array)$cc
as$c=>$b){if(in_array(idf_escape($c),$y)){unset($cc[$c]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($h);$n->dumpTable($h,"");if(!is_array($_POST["check"])||$cc===array()){$Cb=$x;if(is_array($_POST["check"])){$Cb[]="($zd)";}$j="SELECT $Hb".($Cb?"\nWHERE ".implode(" AND ",$Cb):"").$hd;}else{$Kd=array();foreach($_POST["check"]as$b){$Kd[]="(SELECT".limit($Hb,"\nWHERE ".($x?implode(" AND ",$x)." AND ":"").where_check($b).$hd,1).")";}$j=implode(" UNION ALL ",$Kd);}$n->dumpData($h,"table",$j);exit;}if(!$n->selectEmailProcess($x,$M)){if($_POST["save"]||$_POST["delete"]){$k=true;$bb=0;$j=table($h);$u=array();if(!$_POST["delete"]){foreach($w
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$u[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$u[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($u)).")\nSELECT ".implode(", ",$u)."\nFROM ".table($h):" SET\n".implode(",\n",$u));}if($_POST["delete"]||$u){$lc="UPDATE";if($_POST["delete"]){$lc="DELETE";$j="FROM $j";}if($_POST["clone"]){$lc="INSERT";$j="INTO $j";}if($_POST["all"]||($cc===array()&&$_POST["check"])||count($Y)<count($y)){$k=queries($lc." $j".($_POST["all"]?($x?"\nWHERE ".implode(" AND ",$x):""):"\nWHERE $zd"));$bb=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($lc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$bb+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$bb),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q='Kliknij podwójnie wartość, aby ją edytować.';}else{$k=true;$bb=0;foreach($_POST["val"]as$Pa=>$a){$u=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$u[]=idf_escape($c)." = ".(ereg('char|text',$p[$c]["type"])||$b!=""?$n->processInput($p[$c],$b):"NULL");}$j=table($h)." SET ".implode(", ",$u);$Cb=" WHERE ".where_check($Pa).($x?" AND ".implode(" AND ",$x):"");$k=queries("UPDATE".(count($Y)<count($y)?" $j$Cb":limit1($j,$Cb)));if(!$k){break;}$bb+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),$bb),$k);}}elseif(is_string($ua=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($oc["output"])."&format=".urlencode($_POST["separator"]));$k=true;$Wa=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$ua,$fa);$bb=count($fa[0]);begin();$fc=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($fa[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$fc]*)$fc~",$b.$fc,$od);if(!$c&&!array_diff($od[1],$Wa)){$Wa=$od[1];$bb--;}else{$u=array();foreach($od[1]as$g=>$xc){$u[idf_escape($Wa[$g])]=($xc==""&&$p[$Wa[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$xc))));}$k=insert_update($h,$u,$Lc);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),$bb),$k);queries("ROLLBACK");}else{$q=upload_error($ua);}}}$ya=$n->tableName($H);page_header('pokaż'.": $ya",$q);session_write_close();$u=null;if(isset($fe["insert"])){$u="";foreach((array)$_GET["where"]as$b){if(count($M[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$u.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($H,$u);if(!$w){echo"<p class='error'>".'Nie udało się pobrać danych z tabeli'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$n->selectColumnsPrint($y,$w);$n->selectSearchPrint($x,$w,$z);$n->selectOrderPrint($Ka,$w,$z);$n->selectLimitPrint($W);$n->selectLengthPrint($vb);$n->selectActionPrint();echo"</form>\n";$K=$_GET["page"];if($K=="last"){$Ma=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));$K=floor(max(0,$Ma-1)/$W);}$j="SELECT".limit((+$W&&$Y&&count($Y)<count($y)&&$r=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Hb,($x?"\nWHERE ".implode(" AND ",$x):"").$hd,($W!=""?+$W:null),($K?$W*$K:0),"\n");echo$n->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($r=="mssql"){$k->seek($W*$K);}$pc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$F=array();while($a=$k->fetch_assoc()){if($K&&$r=="oracle"){unset($a["RNUM"]);}$F[]=$a;}if($_GET["page"]!="last"){$Ma=(+$W&&$Y&&count($Y)<count($y)?($r=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($F));}if(!$F){echo"<p class='message'>".'Brak rekordów.'."\n";}else{$Sc=$n->backwardKeys($h,$ya);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Y&&$y?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edytuj'."</a>");$Vc=array();$X=array();reset($y);$Ae=1;foreach($F[0]as$c=>$b){if($H["Oid"]!="t"||$c!="oid"){$b=$_GET["columns"][key($y)];$d=$p[$y?($b?$b["col"]:current($y)):$c];$f=($d?$n->fieldName($d,$Ae):"*");if($f!=""){$Ae++;$Vc[$c]=$f;$ea=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($Ka[0]==$ea||$Ka[0]==$c||(!$Ka&&count($Y)<count($y)&&$Y[0]==$ea)?'&desc%5B0%5D=1':'')).'">'.(!$y||$b?apply_sql_function($b["fun"],$f):h(current($y)))."</a>";}$X[$c]=$b["fun"];next($y);}}$Ib=array();if($_GET["modify"]){foreach($F
as$a){foreach($a
as$c=>$b){$Ib[$c]=max($Ib[$c],min(40,strlen(utf8_decode($b))));}}}echo($Sc?"<th>".'Relacje':"")."</thead>\n";foreach($n->rowDescriptions($F,$M)as$P=>$a){$ad=unique_array($F[$P],$z);$Pa="";foreach($ad
as$c=>$b){$Pa.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$Y&&$y?"":"<td>".checkbox("check[]",substr($Pa,1),in_array(substr($Pa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Y)<count($y)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$Pa)."'>".'edytuj'."</a>"));foreach($a
as$c=>$b){if(isset($Vc[$c])){$d=$p[$c];if($b!=""&&(!isset($pc[$c])||$pc[$c]!="")){$pc[$c]=(is_mail($b)?$Vc[$c]:"");}$B="";$b=$n->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$B=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$Pa);}if($b===""){$b="&nbsp;";}elseif($vb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$vb));}else{$b=h($b);}if(!$B){foreach((array)$M[$c]as$C){if(count($M[$c])==1||end($C["source"])==$c){$B="";foreach($C["source"]as$g=>$ta){$B.=where_link($g,$C["target"][$g],$F[$P][$ta]);}$B=h(($C["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($C["db"]),ME):ME).'select='.urlencode($C["table"]).$B);if(count($C["source"])==1){break;}}}}if($c=="COUNT(*)"){$B=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$s){if(!array_key_exists($s["col"],$ad)){$B.=h(where_link($g++,$s["col"],$s["val"],$s["op"]));}}foreach($ad
as$_a=>$s){$B.=h(where_link($g++,$_a,$s));}}}if(!$B){if(is_mail($b)){$B="mailto:$b";}if($Ge=is_url($a[$c])){$B=($Ge=="http"&&$hc?$a[$c]:"$Ge://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$E=h("val[$Pa][".bracket_escape($c)."]");$o=$_POST["val"][$Pa][bracket_escape($c)];$Ne=h(isset($o)?$o:$a[$c]);$We=strpos($b,"<i>...</i>");$ze=is_utf8($b)&&$F[$P][$c]==$a[$c]&&!$X[$c];$le=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$ze)||isset($o)?"<td>".($le?"<textarea name='$E' cols='30' rows='".(substr_count($a[$c],"\n")+1)."'>$Ne</textarea>":"<input name='$E' value='$Ne' size='$Ib[$c]'>"):"<td id='$E' ondblclick=\"".($ze?"selectDblClick(this, event".($We?", 2":($le?", 1":"")).")":"alert('".h('Użyj linku edycji aby zmienić tę wartość.')."')").";\">".$n->selectVal($b,$B,$d));}}if($Sc){echo"<td>";}$n->backwardKeysPrint($Sc,$F[$P]);echo"</tr>\n";}echo"</table>\n";}if($F||$K){$Zc=true;if($_GET["page"]!="last"&&+$W&&count($Y)>=count($y)&&($Ma>=$W||$K)){$Ma=$H["Rows"];if(!isset($Ma)||$x||($H["Engine"]=="InnoDB"&&$Ma<max(1e4,2*($K+1)*$W))){ob_flush();flush();$Ma=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));}else{$Zc=false;}}echo"<p class='pages'>";if(+$W&&$Ma>$W){$Xc=floor(($Ma-1)/$W);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Strona'."', '".($K+1)."'), event); return false;\">".'Strona'."</a>:",pagination(0,$K).($K>5?" ...":"");for($g=max(1,$K-4);$g<min($Xc,$K+5);$g++){echo
pagination($g,$K);}echo($K+5<$Xc?" ...":"").($Zc?pagination($Xc,$K):' <a href="'.h(remove_from_uri()."&page=last").'">'.'ostatni'."</a>");}echo" (".($Zc?"":"~ ").lang(array('%d rekord','%d rekordy','%d rekordów'),$Ma).") ".checkbox("all",1,0,'wybierz wszystkie')."\n";if($n->selectCommandPrint()){?>
<fieldset><legend>Edytuj</legend><div>
<input type="submit" value="Zapisz zmiany" title="Kliknij podwójnie wartość, aby ją edytować." class="jsonly">
<input type="submit" name="edit" value="Edytuj">
<input type="submit" name="clone" value="Duplikuj">
<input type="submit" name="delete" value="Usuń" onclick="return confirm('Czy jesteś pewien? (' + (this.form['all'].checked ? <?php echo$Ma,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Eksport');$za=$n->dumpOutput();echo($za?html_select("output",$za,$oc["output"])." ":""),html_select("format",$n->dumpFormat(),$oc["format"])," <input type='submit' name='export' value='".'Eksport'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($n->selectImportPrint()){print_fieldset("import",'Import',!$F);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$oc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$D'>\n","</div></fieldset>\n";}$n->selectEmailPrint(array_filter($pc,'strlen'),$w);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$yb=isset($_GET["status"]);page_header($yb?'Status':'Zmienne');$qe=($yb?show_status():show_variables());if(!$qe){echo"<p class='message'>".'Brak rekordów.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($qe
as$c=>$b){echo"<tr>","<th><code class='jush-".$r.($yb?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$jc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$E=js_escape($a["Name"]);json_row("Comment-$E",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$c){json_row("$c-$E",nbsp($a[$c]));}foreach($jc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',' ');json_row("$c-$E",($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($jc[$c])){$jc[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){json_row("$c-$E");}}}}foreach($jc
as$c=>$b){json_row("sum-$c",number_format($b,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$v=>$b){json_row("tables-".js_escape($v),$b);}json_row("");}exit;}else{$ye=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ye&&!$q&&!$_POST["search"]){$k=true;$ga="";if($r=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$ga='Tabele zostały opróżnione.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ga='Tabele zostały przeniesione.';}elseif($_POST["copy"]){$k=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ga='Tabele zostały skopiowane.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$ga='Tabele zostały usunięte.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$ga.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ga,$k);}page_header(($_GET["ns"]==""?'Baza danych'.": ".h(DB):'Schemat'.": ".h($_GET["ns"])),$q,true);if($n->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabele i perspektywy'."</h3>\n";$kc=tables_list();if(!$kc){echo"<p class='message'>".'Brak tabel.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Wyszukaj we wszystkich tabelach'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Szukaj'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabela'.'<td>'.'Składowanie'.'<td>'.'Porównywanie znaków'.'<td>'.'Rozmiar danych'.'<td>'.'Rozmiar indeksów'.'<td>'.'Wolne miejsce'.'<td>'.'Auto Increment'.'<td>'.'Liczba rekordów'.(support("comment")?'<td>'.'Komentarz':'')."</thead>\n";foreach($kc
as$f=>$N){$wb=(isset($N)&&!eregi("table",$N));echo'<tr'.odd().'><td>'.checkbox(($wb?"views[]":"tables[]"),$f,in_array($f,$ye,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($wb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'Perspektywa'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$B){echo($B?"<td align='right'><a href='".h(ME."$B=").urlencode($f)."' id='$c-".h($f)."'>?</a>":"<td id='$c-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d w sumie',count($kc)),"<td>".nbsp($r=="sql"?$i->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($r=="sql"?"<input type='submit' value='".'Analizuj'."'> <input type='submit' name='optimize' value='".'Optymalizuj'."'> <input type='submit' name='check' value='".'Sprawdź'."'> <input type='submit' name='repair' value='".'Napraw'."'> ":"")."<input type='submit' name='truncate' value='".'Opróżnij'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Usuń'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$r!="sqlite"){$v=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Przenieś do innej bazy danych'.": ",($_?html_select("target",$_,$v):'<input name="target" value="'.h($v).'">')," <input type='submit' name='move' value='".'Przenieś'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Kopiuj'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$D'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Utwórz tabelę'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Utwórz perspektywę'."</a>\n";}if(support("routine")){echo"<h3>".'Procedury i funkcje'."</h3>\n";$se=routines();if($se){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Nazwa'.'<td>'.'Typ'.'<td>'.'Zwracany typ'."<td>&nbsp;</thead>\n";odd('');foreach($se
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Zmień'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Utwórz procedurę'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Utwórz funkcję'."</a>\n";}if(support("event")){echo"<h3>".'Wydarzenia'."</h3>\n";$F=get_rows("SHOW EVENTS");if($F){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Nazwa'."<td>".'Harmonogram'."<td>".'Początek'."<td>".'Koniec'."</thead>\n";foreach($F
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'O danym czasie'."<td>".$a["Execute at"]:'Wykonuj co'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Utwórz wydarzenie'."</a>\n";}if($kc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();