<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.0
*/error_reporting(6135);$Ge=(!ereg('^(unsafe_raw)?$',ini_get("filter.default"))||ini_get("filter.default_flags"));if($Ge){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$ke=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($ke){$$b=$ke;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
idf_unescape($Ca){$Xa=substr($Ca,-1);return
str_replace($Xa.$Xa,$Xa,substr($Ca,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($eb){if(get_magic_quotes_gpc()){while(list($c,$b)=each($eb)){foreach($b
as$za=>$s){unset($eb[$c][$za]);if(is_array($s)){$eb[$c][stripslashes($za)]=$s;$eb[]=&$eb[$c][stripslashes($za)];}else{$eb[$c][stripslashes($za)]=($Ge?$s:stripslashes($s));}}}}}function
bracket_escape($Ca,$Qe=false){static$ge=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Ca,($Qe?array_flip($ge):$ge));}function
h($V){return
htmlspecialchars(str_replace("\0","",$V),ENT_QUOTES);}function
nbsp($V){return(trim($V)!=""?h($V):"&nbsp;");}function
nl_br($V){return
str_replace("\n","<br>",$V);}function
checkbox($f,$o,$Oa,$Nd="",$Nc="",$lf=false){static$E=0;$E++;$e="<input type='checkbox' name='$f' value='".h($o)."'".($Oa?" checked":"").($Nc?" onclick=\"$Nc\"":"").($lf?" class='jsonly'":"")." id='checkbox-$E'>";return($Nd!=""?"<label for='checkbox-$E'>$e".h($Nd)."</label>":$e);}function
optionlist($Kc,$xf=null,$ve=false){$e="";foreach($Kc
as$za=>$s){$je=array($za=>$s);if(is_array($s)){$e.='<optgroup label="'.h($za).'">';$je=$s;}foreach($je
as$c=>$b){$e.='<option'.($ve||is_string($c)?' value="'.h($c).'"':'').(($ve||is_string($c)?(string)$c:$b)===$xf?' selected':'').'>'.h($b);}if(is_array($s)){$e.='</optgroup>';}}return$e;}function
html_select($f,$Kc,$o="",$ob=true){if($ob){return"<select name='".h($f)."'".(is_string($ob)?" onchange=\"$ob\"":"").">".optionlist($Kc,$o)."</select>";}$e="";foreach($Kc
as$c=>$b){$e.="<label><input type='radio' name='".h($f)."' value='".h($c)."'".($c==$o?" checked":"").">".h($b)."</label>";}return$e;}function
confirm($Ic="",$jf=false){return" onclick=\"".($jf?"eventStop(event); ":"")."return confirm('".'Are you sure?'.($Ic?" (' + $Ic + ')":"")."');\"";}function
js_escape($V){return
addcslashes($V,"\r\n'\\/");}function
ini_bool($yf){$b=ini_get($yf);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
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
where_link($g,$ea,$o,$Pe="="){return"&where%5B$g%5D%5Bcol%5D=".urlencode($ea)."&where%5B$g%5D%5Bop%5D=".urlencode((isset($o)?$Pe:"IS NULL"))."&where%5B$g%5D%5Bval%5D=".urlencode($o);}function
cookie($f,$o){global$Nb;$Pb=array($f,(ereg("\n",$o)?"":$o),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Nb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pb[]=true;}return
call_user_func_array('setcookie',$Pb);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($c){return$_SESSION[$c][DRIVER][SERVER][$_GET["username"]];}function
set_session($c,$b){$_SESSION[$c][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($ub,$J,$Z){global$ya;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ya))."|username|".session_name()),$m);return"$m[1]?".(sid()?SID."&":"").($ub!="server"||$J!=""?urlencode($ub)."=".urlencode($J)."&":"")."username=".urlencode($Z).($m[2]?"&$m[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($O,$ga=null){if(isset($ga)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($O)?$O:$_SERVER["REQUEST_URI"]))][]=$ga;}if(isset($O)){if($O==""){$O=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $O");exit;}}function
query_redirect($j,$O,$ga,$yc=true,$sf=true,$Ne=false){global$i,$q,$n;if($sf){$Ne=!$i->query($j);}$td="";if($j){$td=$n->messageQuery("$j;");}if($Ne){$q=error().$td;return
false;}if($yc){redirect($O,$ga.$td);}return
true;}function
queries($j=null){global$i;static$Sd=array();if(!isset($j)){return
implode(";\n",$Sd);}$Sd[]=(ereg(';$',$j)?"DELIMITER ;;\n$j;\nDELIMITER ":$j);return$i->query($j);}function
apply_queries($j,$ia,$af='table'){foreach($ia
as$l){if(!queries("$j ".$af($l))){return
false;}}return
true;}function
queries_redirect($O,$ga,$yc){return
query_redirect(queries(),$O,$ga,$yc,false,!$yc);}function
remove_from_uri($Na=""){return
substr(preg_replace("~(?<=[?&])($Na".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($K,$kf){return" ".($K==$kf?$K+1:'<a href="'.h(remove_from_uri("page").($K?"&page=$K":"")).'">'.($K+1)."</a>");}function
get_file($c,$Uc=false){$va=$_FILES[$c];if(!$va||$va["error"]){return$va["error"];}$e=file_get_contents($Uc&&ereg('\\.gz$',$va["name"])?"compress.zlib://$va[tmp_name]":($Uc&&ereg('\\.bz2$',$va["name"])?"compress.bzip2://$va[tmp_name]":$va["tmp_name"]));if($Uc){$rb=substr($e,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$rb,$If)){$e=iconv("utf-16","utf-8",$e);}elseif($rb=="\xEF\xBB\xBF"){$e=substr($e,3);}}return$e;}function
upload_error($q){$Ed=($q==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($q?'Unable to upload a file.'.($Ed?" ".sprintf('Maximum allowed file size is %sB.',$Ed):""):'File does not exist.');}function
odd($e=' class="odd"'){static$g=0;if(!$e){$g=-1;}return($g++%
2?$e:'');}function
json_row($c,$b=null){static$qa=true;if($qa){echo"{";}if($c!=""){echo($qa?"":",")."\n\t\"".addcslashes($c,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$qa=false;}else{echo"\n}\n";$qa=true;}}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
repeat_pattern($R,$wa){return
str_repeat("$R{0,65535}",$wa/65535)."$R{0,".($wa
%
65535)."}";}function
shorten_utf8($V,$wa=80,$Ze=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$wa).")($)?)u",$V,$m)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$wa).")($)?)",$V,$m);}return
h($m[1]).$Ze.(isset($m[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($eb,$Ve=array()){while(list($c,$b)=each($eb)){if(is_array($b)){foreach($b
as$za=>$s){$eb[$c."[$za]"]=$s;}}elseif(!in_array($c,$Ve)){echo'<input type="hidden" name="'.h($c).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($l){global$n;$e=array();foreach($n->foreignKeys($l)as$C){foreach($C["source"]as$b){$e[$b][]=$C;}}return$e;}function
enum_input($N,$Da,$d,$o,$Gb=null){global$n;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);$e=(isset($Gb)?"<label><input type='$N'$Da value='$Gb'".((is_array($o)?in_array($Gb,$o):$o===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Oa=(is_int($o)?$o==$g+1:(is_array($o)?in_array($g+1,$o):$o===$b));$e.=" <label><input type='$N'$Da value='".($g+1)."'".($Oa?' checked':'').'>'.h($n->editVal($b,$d)).'</label>';}return$e;}function
input($d,$o,$A){global$ua,$n,$r;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$Gd=($r=="mssql"&&$d["auto_increment"]);if($Gd&&!$_POST["save"]){$A=null;}$X=(isset($_GET["select"])||$Gd?array("orig"=>'original'):array())+$n->editFunctions($d);$Da=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($X[""])."<td>".$n->editInput($_GET["edit"],$d,$Da,$o);}else{$qa=0;foreach($X
as$c=>$b){if($c===""||!$b){break;}$qa++;}$ob=($qa?" onchange=\"var f = this.form['function[".js_escape($f)."]']; if ($qa > f.selectedIndex) f.selectedIndex = $qa;\"":"");$Da.=$ob;echo(count($X)>1?html_select("function[$f]",$X,!isset($A)||in_array($A,$X)||isset($X[$A])?$A:"","functionChange(this);"):nbsp(reset($X))).'<td>';$Jd=$n->editInput($_GET["edit"],$d,$Da,$o);if($Jd!=""){echo$Jd;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$fa);foreach($fa[1]as$g=>$b){$b=stripcslashes(str_replace("''","'",$b));$Oa=(is_int($o)?($o>>$g)&1:in_array($b,explode(",",$o),true));echo" <label><input type='checkbox' name='fields[$f][$g]' value='".(1<<$g)."'".($Oa?' checked':'')."$ob>".h($n->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$ob>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($r!="sqlite"||ereg("\n",$o)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Da>".h($o).'</textarea>';}else{$od=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$m)?((ereg("binary",$d["type"])?2:1)*$m[1]+($m[3]?1:0)+($m[2]&&!$d["unsigned"]?1:0)):($ua[$d["type"]]?$ua[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($o)."'".($od?" maxlength='$od'":"").(ereg('char|binary',$d["type"])&&$od>20?" size='40'":"")."$Da>";}}}function
process_input($d){global$n;$Ca=bracket_escape($d["field"]);$A=$_POST["function"][$Ca];$o=$_POST["fields"][$Ca];if($d["type"]=="enum"){if($o==-1){return
false;}if($o==""){return"NULL";}return+$o;}if($d["auto_increment"]&&$o==""){return
null;}if($A=="orig"){return($d["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($d["field"]):false);}if($A=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$o);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$va=get_file("fields-$Ca");if(!is_string($va)){return
false;}return
q($va);}return$n->processInput($d,$o,$A);}function
search_tables(){global$n,$i;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$ba=false;foreach(table_status()as$l=>$H){$f=$n->tableName($H);if(isset($H["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($l,$_POST["tables"]))){$k=$i->query("SELECT".limit("1 FROM ".table($l)," WHERE ".implode(" AND ",$n->selectSearchProcess(fields($l),array())),1));if($k->fetch_row()){if(!$ba){echo"<ul>\n";$ba=true;}echo"<li><a href='".h(ME."select=".urlencode($l)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($ba?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Mc,$hd=false){global$n;$e=$n->dumpHeaders($Mc,$hd);$_a=$_POST["output"];if($_a!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Mc!=""?$Mc:(SERVER!=""?SERVER:"localhost")).".$e".($_a!="file"&&!ereg('[^0-9a-z]',$_a)?".$_a":""));}session_write_close();return$e;}function
dump_csv($a){foreach($a
as$c=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$c]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($A,$ea){return($A?($A=="unixepoch"?"DATETIME($ea, '$A')":($A=="count distinct"?"COUNT(DISTINCT ":strtoupper("$A("))."$ea)"):$ea);}function
password_file(){$Gc=ini_get("upload_tmp_dir");if(!$Gc){if(function_exists('sys_get_temp_dir')){$Gc=sys_get_temp_dir();}else{$kb=@tempnam("","");if(!$kb){return
false;}$Gc=dirname($kb);unlink($kb);}}$kb="$Gc/adminer.key";$e=@file_get_contents($kb);if($e){return$e;}$Aa=@fopen($kb,"w");if($Aa){$e=md5(uniqid(mt_rand(),true));fwrite($Aa,$e);fclose($Aa);}return$e;}function
is_mail($Ue){$Pd='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$dc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$R="$Pd+(\\.$Pd+)*@($dc?\\.)+$dc";return
preg_match("(^$R(,\\s*$R)*\$)i",$Ue);}function
is_url($V){$dc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($dc?\\.)+$dc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$V,$m)?strtolower($m[1]):"");}function
print_fieldset($E,$Te,$Se=false,$Nc=""){echo"<fieldset><legend><a href='#fieldset-$E' onclick=\"$Nc"."return !toggle('fieldset-$E');\">$Te</a></legend><div id='fieldset-$E'".($Se?"":" class='hidden'").">\n";}function
bold($Re){return($Re?" class='active'":"");}global$n,$i,$ya,$dd,$lb,$q,$X,$Ab,$Nb,$yb,$r,$Cf,$Gf,$Ga,$Ec,$D,$Ff,$ua,$wb,$fc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$Nb=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Pb=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$Nb);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Pb[]=true;}call_user_func_array('session_set_cookie_params',$Pb);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE));if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($zf,$de){$Zb=($de==1?0:1);return
sprintf($zf[$Zb],$de);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($uf,$Z,$oa,$tf='auth_error'){set_exception_handler($tf);parent::__construct($uf,$Z,$oa);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($j,$Yb=false){$k=parent::query($j);if(!$k){$gf=$this->errorInfo();$this->error=$gf[2];return
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
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ya=array();$ya=array("server"=>"MySQL")+$ya;if(!defined("DRIVER")){$ef=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($J,$Z,$oa){mysqli_report(MYSQLI_REPORT_OFF);list($cf,$Hc)=explode(":",$J,2);$e=@$this->real_connect(($J!=""?$cf:ini_get("mysqli.default_host")),($J.$Z!=""?$Z:ini_get("mysqli.default_user")),($J.$Z.$oa!=""?$oa:ini_get("mysqli.default_pw")),null,(is_numeric($Hc)?$Hc:ini_get("mysqli.default_port")),(!is_numeric($Hc)?$Hc:null));if($e){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$e;}function
result($j,$d=0){$k=$this->query($j);if(!$k){return
false;}$a=$k->fetch_array();return$a[$d];}function
quote($V){return"'".$this->escape_string($V)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($J,$Z,$oa){$this->_link=@mysql_connect(($J!=""?$J:ini_get("mysql.default_host")),("$J$Z"!=""?$Z:ini_get("mysql.default_user")),("$J$Z$oa"!=""?$oa:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($V){return"'".mysql_real_escape_string($V,$this->_link)."'";}function
select_db($Tb){return
mysql_select_db($Tb,$this->_link);}function
query($j,$Yb=false){$k=@($Yb?mysql_unbuffered_query($j,$this->_link):mysql_query($j,$this->_link));if(!$k){$this->error=mysql_error($this->_link);return
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
select_db($Tb){return$this->query("USE ".idf_escape($Tb));}function
query($j,$Yb=false){$this->setAttribute(1000,!$Yb);return
parent::query($j,$Yb);}}}function
idf_escape($Ca){return"`".str_replace("`","``",$Ca)."`";}function
table($Ca){return
idf_escape($Ca);}function
connect(){global$n;$i=new
Min_DB;$Qc=$n->credentials();if($i->connect($Qc[0],$Qc[1],$Qc[2])){$i->query("SET sql_quote_show_create = 1");return$i;}return$i->error;}function
get_databases($df=true){global$i;$e=&get_session("dbs");if(!isset($e)){if($df){restart_session();ob_flush();flush();}$e=get_vals($i->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$e;}function
limit($j,$x,$W,$ma=0,$ac=" "){return" $j$x".(isset($W)?$ac."LIMIT $W".($ma?" OFFSET $ma":""):"");}function
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
foreign_keys($l){global$i,$Ga;static$R='`(?:[^`]|``)+`';$e=array();$xe=$i->result("SHOW CREATE TABLE ".table($l),1);if($xe){preg_match_all("~CONSTRAINT ($R) FOREIGN KEY \\(((?:$R,? ?)+)\\) REFERENCES ($R)(?:\\.($R))? \\(((?:$R,? ?)+)\\)(?: ON DELETE (".implode("|",$Ga)."))?(?: ON UPDATE (".implode("|",$Ga)."))?~",$xe,$fa,PREG_SET_ORDER);foreach($fa
as$m){preg_match_all("~$R~",$m[2],$xa);preg_match_all("~$R~",$m[5],$na);$e[idf_unescape($m[1])]=array("db"=>idf_unescape($m[4]!=""?$m[3]:$m[4]),"table"=>idf_unescape($m[4]!=""?$m[4]:$m[3]),"source"=>array_map('idf_unescape',$xa[0]),"target"=>array_map('idf_unescape',$na[0]),"on_delete"=>$m[6],"on_update"=>$m[7],);}}return$e;}function
view($f){global$i;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$i->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$e=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$e[$a["Charset"]][-1]=$a["Collation"];}else{$e[$a["Charset"]][]=$a["Collation"];}}ksort($e);foreach($e
as$c=>$b){asort($e[$c]);}return$e;}function
information_schema($v){global$i;return($i->server_info>=5&&$v=="information_schema");}function
error(){global$i;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$i->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($v,$mb){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($v).($mb?" COLLATE ".q($mb):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$mb){if(create_database($f,$mb)){$zb=array();foreach(tables_list()as$l=>$N){$zb[]=table($l)." TO ".idf_escape($f).".".table($l);}if(!$zb||queries("RENAME TABLE ".implode(", ",$zb))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Zc=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$Zc="";break;}if($t["type"]=="PRIMARY"){$Zc=" UNIQUE";}}}return" AUTO_INCREMENT$Zc";}function
alter_table($l,$f,$p,$Jc,$cb,$cc,$mb,$Fc,$Ob){$ca=array();foreach($p
as$d){$ca[]=($d[1]?($l!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($l!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$ca=array_merge($ca,$Jc);$Db="COMMENT=".q($cb).($cc?" ENGINE=".q($cc):"").($mb?" COLLATE ".q($mb):"").($Fc!=""?" AUTO_INCREMENT=$Fc":"").$Ob;if($l==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$ca)."\n) $Db");}if($l!=$f){$ca[]="RENAME TO ".table($f);}$ca[]=$Db;return
queries("ALTER TABLE ".table($l)."\n".implode(",\n",$ca));}function
alter_indexes($l,$ca){foreach($ca
as$c=>$b){$ca[$c]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($l).implode(",",$ca));}function
truncate_tables($ia){return
apply_queries("TRUNCATE TABLE",$ia);}function
drop_views($Qa){return
queries("DROP VIEW ".implode(", ",array_map('table',$Qa)));}function
drop_tables($ia){return
queries("DROP TABLE ".implode(", ",array_map('table',$ia)));}function
move_tables($ia,$Qa,$na){$zb=array();foreach(array_merge($ia,$Qa)as$l){$zb[]=table($l)." TO ".idf_escape($na).".".table($l);}return
queries("RENAME TABLE ".implode(", ",$zb));}function
copy_tables($ia,$Qa,$na){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($ia
as$l){$f=($na==DB?table("copy_$l"):idf_escape($na).".".table($l));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($l))||!queries("INSERT INTO $f SELECT * FROM ".table($l))){return
false;}}foreach($Qa
as$l){$f=($na==DB?table("copy_$l"):idf_escape($na).".".table($l));$xb=view($l);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $xb[select]")){return
false;}}return
true;}function
trigger($f){$F=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($F);}function
triggers($l){$e=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")))as$a){$e[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$e;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$N){global$i,$lb,$yb,$ua;$nf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$re="((".implode("|",array_merge(array_keys($ua),$nf)).")(?:\\s*\\(((?:[^'\")]*|$lb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$R="\\s*(".($N=="FUNCTION"?"":$yb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$re";$da=$i->result("SHOW CREATE $N ".idf_escape($f),2);preg_match("~\\(((?:$R\\s*,?)*)\\)".($N=="FUNCTION"?"\\s*RETURNS\\s+$re":"")."\\s*(.*)~is",$da,$m);$p=array();preg_match_all("~$R\\s*,?~is",$m[1],$fa,PREG_SET_ORDER);foreach($fa
as$Na){$f=str_replace("``","`",$Na[2]).$Na[3];$p[]=array("field"=>$f,"type"=>strtolower($Na[5]),"length"=>preg_replace_callback("~$lb~s",'normalize_enum',$Na[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Na[8] $Na[7]"))),"full_type"=>$Na[4],"inout"=>strtoupper($Na[1]),"collation"=>strtolower($Na[9]),);}if($N!="FUNCTION"){return
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
as$c=>$b){$u[$c]="$c = $b";}$Fa=implode(", ",$u);return
queries("INSERT INTO ".table($l)." SET $Fa ON DUPLICATE KEY UPDATE $Fa");}function
last_id(){global$i;return$i->result("SELECT LAST_INSERT_ID()");}function
explain($i,$j){return$i->query("EXPLAIN $j");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Wa){return
true;}function
create_sql($l,$Fc){global$i;$e=$i->result("SHOW CREATE TABLE ".table($l),1);if(!$Fc){$e=preg_replace('~ AUTO_INCREMENT=\\d+~','',$e);}return$e;}function
truncate_sql($l){return"TRUNCATE ".table($l);}function
use_sql($Tb){return"USE ".idf_escape($Tb);}function
trigger_sql($l,$I){$e="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($l,"%_")),null,"-- ")as$a){$e.="\n".($I=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$e;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($qf){global$i;return!ereg("scheme|sequence|type".($i->server_info<5.1?"|event|partitioning".($i->server_info<5?"|view|routine|trigger":""):""),$qf);}$r="sql";$ua=array();$Ec=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),)as$c=>$b){$ua+=$b;$Ec[$c]=array_keys($b);}$wb=array("unsigned","zerofill","unsigned zerofill");$oe=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$X=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Ab=array("avg","count","count distinct","group_concat","max","min","sum");$dd=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$fc="3.3.0";class
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
loginForm(){global$ya;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("driver",$ya,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
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
login($Hf,$oa){return
true;}function
tableName($Dc){return
h($Dc["Name"]);}function
fieldName($d,$Ma=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Dc,$u=""){echo'<p class="tabs">';$ha=array("select"=>'Select data',"table"=>'Show structure');if(is_view($Dc)){$ha["view"]='Alter view';}else{$ha["create"]='Alter table';}if(isset($u)){$ha["edit"]='New item';}foreach($ha
as$c=>$b){echo" <a href='".h(ME)."$c=".urlencode($Dc["Name"]).($c=="edit"?$u:"")."'".bold(isset($_GET[$c])).">$b</a>";}echo"\n";}function
foreignKeys($l){return
foreign_keys($l);}function
backwardKeys($l,$Lf){return
array();}function
backwardKeysPrint($Mf,$a){}function
selectQuery($j){global$r;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a> <code class='jush-$r'>".h(str_replace("\n"," ",$j))."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edit'."</a></p>\n";}function
rowDescription($l){return"";}function
rowDescriptions($F,$wf){return$F;}function
selectVal($b,$B,$d){$e=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$e=lang(array('%d byte','%d bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($B?"<a href='$B'>$e</a>":$e);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($y,$w){global$X,$Ab;print_fieldset("select",'Select',$y);$g=0;$Rd=array('Functions'=>$X,'Aggregation'=>$Ab);foreach($y
as$c=>$b){$b=$_GET["columns"][$c];echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Rd,$b["fun"]),"(<select name='columns[$g][col]'><option>".optionlist($w,$b["col"],true)."</select>)</div>\n";$g++;}echo"<div>".html_select("columns[$g][fun]",array(-1=>"")+$Rd,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$g][col]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($x,$w,$z){print_fieldset("search",'Search',$x);foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$g]' value='".h($_GET["fulltext"][$g])."'>",checkbox("boolean[$g]",1,isset($_GET["boolean"][$g]),"BOOL"),"<br>\n";}}$g=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$g][col]'><option value=''>(".'anywhere'.")".optionlist($w,$b["col"],true)."</select>",html_select("where[$g][op]",$this->operators,$b["op"]),"<input name='where[$g][val]' value='".h($b["val"])."'></div>\n";$g++;}}echo"<div><select name='where[$g][col]' onchange='selectAddRow(this);'><option value=''>(".'anywhere'.")".optionlist($w,null,true)."</select>",html_select("where[$g][op]",$this->operators,"="),"<input name='where[$g][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Ma,$w,$z){print_fieldset("sort",'Sort',$Ma);$g=0;foreach((array)$_GET["order"]as$c=>$b){if(isset($w[$b])){echo"<div><select name='order[$g]'><option>".optionlist($w,$b,true)."</select>",checkbox("desc[$g]",1,isset($_GET["desc"][$c]),'descending')."</div>\n";$g++;}}echo"<div><select name='order[$g]' onchange='selectAddRow(this);'><option>".optionlist($w,null,true)."</select>","<label><input type='checkbox' name='desc[$g]' value='1'>".'descending'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($W){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($W)."'>","</div></fieldset>\n";}function
selectLengthPrint($pb){if(isset($pb)){echo"<fieldset><legend>".'Text length'."</legend><div>",'<input name="text_length" size="3" value="'.h($pb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Kf,$w){}function
selectColumnsProcess($w,$z){global$X,$Ab;$y=array();$Y=array();foreach((array)$_GET["columns"]as$c=>$b){if($b["fun"]=="count"||(isset($w[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$X)||in_array($b["fun"],$Ab)))){$y[$c]=apply_sql_function($b["fun"],(isset($w[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$Ab)){$Y[]=$y[$c];}}}return
array($y,$Y);}function
selectSearchProcess($p,$z){global$r;$e=array();foreach($z
as$g=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$g]!=""){$e[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$g]).(isset($_GET["boolean"][$g])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$tb=" $b[op]";if(ereg('IN$',$b["op"])){$qb=process_length($b["val"]);$tb.=" (".($qb!=""?$qb:"NULL").")";}elseif(!$b["op"]){$tb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$tb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$tb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$e[]=idf_escape($b["col"]).$tb;}else{$Sa=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$Sa[]=($r=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$e[]=($Sa?"(".implode("$tb OR ",$Sa)."$tb)":"0");}}}return$e;}function
selectOrderProcess($p,$z){$e=array();foreach((array)$_GET["order"]as$c=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$e[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$c])?" DESC":"");}}return$e;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($x,$wf){return
false;}function
messageQuery($j){global$r;static$Ic=0;restart_session();$E="sql-".($Ic++);$Ia=&get_session("queries");if(strlen($j)>1e6){$j=ereg_replace('[\x80-\xFF]+$','',substr($j,0,1e6))."\n...";}$Ia[$_GET["db"]][]=$j;return" <a href='#$E' onclick=\"return !toggle('$E');\">".'SQL command'."</a><div id='$E' class='hidden'><pre><code class='jush-$r'>".shorten_utf8($j,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Ia[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($d){global$dd;$e=($d["null"]?"NULL/":"");foreach($dd
as$c=>$X){if(!$c||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($X
as$R=>$b){if(!$R||ereg($R,$d["type"])){$e.="/$b";}}if($c&&!ereg('set|blob|bytea|raw|file',$d["type"])){$e.="/=";}}}return
explode("/",$e);}function
editInput($l,$d,$Da,$o){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Da value='-1' checked><i>".'original'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Da value=''".(isset($o)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Da,$d,$o,0);}return"";}function
processInput($d,$o,$A=""){if($A=="="){return$o;}$f=$d["field"];$e=($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$o)?$o:q($o));if(ereg('^(now|getdate|uuid)$',$A)){$e="$A()";}elseif(ereg('^current_(date|timestamp)$',$A)){$e=$A;}elseif(ereg('^([+-]|\\|\\|)$',$A)){$e=idf_escape($f)." $A $e";}elseif(ereg('^[+-] interval$',$A)){$e=idf_escape($f)." $A ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$o)?$o:$e);}elseif(ereg('^(addtime|subtime|concat)$',$A)){$e="$A(".idf_escape($f).", $e)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$A)){$e="$A($e)";}if(ereg("binary",$d["type"])){$e="unhex($e)";}return$e;}function
dumpOutput(){$e=array('text'=>'open','file'=>'save');if(function_exists('gzencode')){$e['gz']='gzip';}if(function_exists('bzcompress')){$e['bz2']='bzip2';}return$e;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($l,$I,$Oc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($I){dump_csv(array_keys(fields($l)));}}elseif($I){$da=create_sql($l,$_POST["auto_increment"]);if($da){if($I=="DROP+CREATE"){echo"DROP ".($Oc?"VIEW":"TABLE")." IF EXISTS ".table($l).";\n";}if($Oc){$da=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$da);}echo($I!="CREATE+ALTER"?$da:($Oc?substr_replace($da," OR REPLACE",6,0):substr_replace($da," IF NOT EXISTS",12,0))).";\n\n";}if($I=="CREATE+ALTER"&&!$Oc){$j="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($l)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$sb="";foreach(get_rows($j)as$a){$La=$a["COLUMN_DEFAULT"];$a["default"]=(isset($La)?q($La):"NULL");$a["after"]=q($sb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($La)?" DEFAULT ".($La=="CURRENT_TIMESTAMP"?$La:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($sb?" AFTER ".idf_escape($sb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$sb=$a["COLUMN_NAME"];}echo"';
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
dumpData($l,$I,$j){global$i,$r;$ie=($r=="sqlite"?0:1048576);if($I){if($_POST["format"]=="sql"&&$I=="TRUNCATE+INSERT"){echo
truncate_sql($l).";\n";}if($_POST["format"]=="sql"){$p=fields($l);}$k=$i->query($j,1);if($k){$Kb="";$Za="";while($a=$k->fetch_assoc()){if($_POST["format"]!="sql"){if($I=="table"){dump_csv(array_keys($a));$I="INSERT";}dump_csv($a);}else{if(!$Kb){$Kb="INSERT INTO ".table($l)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$c=>$b){$a[$c]=(isset($b)?(ereg('int|float|double|decimal',$p[$c]["type"])?$b:q($b)):"NULL");}$U=implode(",\t",$a);if($I=="INSERT+UPDATE"){$u=array();foreach($a
as$c=>$b){$u[]=idf_escape($c)." = $b";}echo"$Kb ($U) ON DUPLICATE KEY UPDATE ".implode(", ",$u).";\n";}else{$U=($ie?"\n":" ")."($U)";if(!$Za){$Za=$Kb.$U;}elseif(strlen($Za)+4+strlen($U)<$ie){$Za.=",$U";}else{echo"$Za;\n";$Za=$Kb.$U;}}}}if($_POST["format"]=="sql"&&$I!="INSERT+UPDATE"&&$Za){$Za.=";\n";echo$Za;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$i->error)."\n";}}}function
dumpHeaders($Mc,$hd=false){$_a=$_POST["output"];$vb=($_POST["format"]=="sql"?"sql":($hd?"tar":"csv"));header("Content-Type: ".($_a=="bz2"?"application/x-bzip":($_a=="gz"?"application/x-gzip":($vb=="tar"?"application/x-tar":($vb=="sql"||$_a!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($_a=="bz2"){ob_start('bzcompress',1e6);}if($_a=="gz"){ob_start('gzencode',1e6);}return$vb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Fb){global$fc,$i,$D,$r,$ya;echo'<h1>
',$this->name(),' <span class="version">',$fc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($fc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Fb=="auth"){$qa=true;foreach((array)$_SESSION["pwds"]as$ub=>$Ye){foreach($Ye
as$J=>$Xe){foreach($Xe
as$Z=>$oa){if(isset($oa)){if($qa){echo"<p onclick='eventStop(event);'>\n";$qa=false;}echo"<a href='".h(auth_url($ub,$J,$Z))."'>($ya[$ub]) ".h($Z.($J!=""?"@$J":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Fb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL command'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}}echo'<input type="submit" name="logout" value="Logout" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$D,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'database'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Use"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($Fb!="db"&&DB!=""&&$i->select_db(DB)){if($_GET["ns"]!==""&&!$Fb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$ia=tables_list();if(!$ia){echo"<p class='message'>".'No tables.'."\n";}else{$this->tablesPrint($ia);$ha=array();foreach($ia
as$l=>$N){$ha[]=preg_quote($l,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $r: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$ha).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$r;\n";}echo"var cmComplete = [ '".implode("', '",array_map('js_escape',array_keys($ia)))."' ];\n","</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($ia){echo"<p id='tables'>\n";foreach($ia
as$l=>$N){echo'<a href="'.h(ME).'select='.urlencode($l).'"'.bold($_GET["select"]==$l).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($l).'"'.bold($_GET["table"]==$l).">".$this->tableName(array("Name"=>$l))."</a><br>\n";}}}$n=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($n->operators)){$n->operators=$oe;}function
page_header($Ee,$q="",$Vb=array(),$Dd=""){global$Cf,$n,$i,$ya;header("Content-Type: text/html; charset=utf-8");if($n->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$vd=$Ee.($Dd!=""?": ".h($Dd):"");$yd=strip_tags($vd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$n->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($yd));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$yd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.0",'">
<script type="text/javascript">
var areYouSure = \'Resend POST data?\';
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
}if(isset($Vb)){$B=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($B?$B:".").'">'.$ya[DRIVER].'</a> &raquo; ';$B=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$J=(SERVER!=""?h(SERVER):'Server');if($Vb===false){echo"$J\n";}else{echo"<a href='".($B?h($B):".")."' accesskey='1' title='Alt+Shift+1'>$J</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Vb))){echo'<a href="'.h($B."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Vb)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Vb
as$c=>$b){$Wb=(is_array($b)?$b[1]:$b);if($Wb!=""){echo'<a href="'.h(ME."$c=").urlencode(is_array($b)?$b[0]:$b).'">'.h($Wb).'</a> &raquo; ';}}}echo"$Ee\n";}}echo"<span id='loader'></span>\n","<h2>$vd</h2>\n";restart_session();$fe=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Yd=$_SESSION["messages"][$fe];if($Yd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Yd)."</div>\n";unset($_SESSION["messages"][$fe]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($q){echo"<div class='error'>$q</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Fb=""){global$n;if(!is_ajax()){echo'</div>

<div id="menu">
';$n->navigation($Fb);echo'</div>
';}}function
int32($P){while($P>=2147483648){$P-=4294967296;}while($P<=-2147483649){$P+=4294967296;}return(int)$P;}function
long2str($s,$rd){$U='';foreach($s
as$b){$U.=pack('V',$b);}if($rd){return
substr($U,0,end($s));}return$U;}function
str2long($U,$rd){$s=array_values(unpack('V*',str_pad($U,4*ceil(strlen($U)/4),"\0")));if($rd){$s[]=strlen($U);}return$s;}function
xxtea_mx($pa,$la,$sa,$za){return
int32((($pa>>5&0x7FFFFFF)^$la<<2)+(($la>>3&0x1FFFFFFF)^$pa<<4))^int32(($sa^$la)+($za^$pa));}function
encrypt_string($Rb,$c){if($Rb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$s=str2long($Rb,true);$P=count($s)-1;$pa=$s[$P];$la=$s[0];$L=floor(6+52/($P+1));$sa=0;while($L-->0){$sa=int32($sa+0x9E3779B9);$Lb=$sa>>2&3;for($ja=0;$ja<$P;$ja++){$la=$s[$ja+1];$nb=xxtea_mx($pa,$la,$sa,$c[$ja&3^$Lb]);$pa=int32($s[$ja]+$nb);$s[$ja]=$pa;}$la=$s[0];$nb=xxtea_mx($pa,$la,$sa,$c[$ja&3^$Lb]);$pa=int32($s[$P]+$nb);$s[$P]=$pa;}return
long2str($s,false);}function
decrypt_string($Rb,$c){if($Rb==""){return"";}$c=array_values(unpack("V*",pack("H*",md5($c))));$s=str2long($Rb,false);$P=count($s)-1;$pa=$s[$P];$la=$s[0];$L=floor(6+52/($P+1));$sa=int32($L*0x9E3779B9);while($sa){$Lb=$sa>>2&3;for($ja=$P;$ja>0;$ja--){$pa=$s[$ja-1];$nb=xxtea_mx($pa,$la,$sa,$c[$ja&3^$Lb]);$la=int32($s[$ja]-$nb);$s[$ja]=$la;}$pa=$s[$P];$nb=xxtea_mx($pa,$la,$sa,$c[$ja&3^$Lb]);$la=int32($s[0]-$nb);$s[0]=$la;$sa=int32($sa-0x9E3779B9);}return
long2str($s,true);}$i='';$D=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$fb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($c)=explode(":",$b);$fb[$c]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$c=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Cc=$n->permanentLogin();$fb[$c]="$c:".base64_encode($Cc?encrypt_string($_POST["password"],$Cc):"");cookie("adminer_permanent",implode(" ",$fb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($D&&$_POST["token"]!=$D){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$c){set_session($c,null);}$c=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($fb[$c]){unset($fb[$c]);cookie("adminer_permanent",implode(" ",$fb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($fb&&!$_SESSION["pwds"]){session_regenerate_id();$Cc=$n->permanentLogin();foreach($fb
as$c=>$b){list(,$Ef)=explode(":",$b);list($ub,$J,$Z)=array_map('base64_decode',explode("-",$c));$_SESSION["pwds"][$ub][$J][$Z]=decrypt_string(base64_decode($Ef),$Cc);}}function
auth_error($Cd=null){global$i,$n,$D;$Bc=session_name();$q="";if(!$_COOKIE[$Bc]&&$_GET[$Bc]&&ini_bool("session.use_only_cookies")){$q='Session support must be enabled.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Bc]||$_GET[$Bc])&&!$D){$q='Session expired, please login again.';}else{$oa=&get_session("pwds");if(isset($oa)){$q=h($Cd?$Cd->getMessage():(is_string($i)?$i:'Invalid credentials.'));$oa=null;}}}page_header('Login',$q,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$n->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$ef)),false);page_footer("auth");exit;}$i=connect();}if(is_string($i)||!$n->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$D=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$D;}$q=($_POST?($_POST["token"]==$D?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));function
connect_error(){global$i,$D,$q,$ya;$_=array();if(DB!=""){page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$q){queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));}page_header('Select database',$q,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$c=>$b){if(support($c)){echo"<a href='".h(ME)."$c='>$b</a>\n";}}echo"<p>".sprintf('%s version: %s through PHP extension %s',$ya[DRIVER],"<b>$i->server_info</b>","<b>$i->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$bf=support("scheme");$S=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($_
as$v){$sd=h(ME)."db=".urlencode($v);echo"<tr".odd()."><td>".checkbox("db[]",$v,in_array($v,(array)$_POST["db"])),"<th><a href='$sd'>".h($v)."</a>","<td><a href='$sd".($bf?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($v,$S))."</a>","<td align='right'><a href='$sd&amp;schema=' id='tables-".h($v)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$D'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Refresh'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$i->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}function
select($k,$G=null,$wc=""){$ha=array();$z=array();$w=array();$_e=array();$ua=array();odd('');for($g=0;$a=$k->fetch_row();$g++){if(!$g){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($T=0;$T<count($a);$T++){$d=$k->fetch_field();$f=$d->name;$ta=$d->orgtable;$Mb=$d->orgname;if($wc){$ha[$T]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($ta!=""){if(!isset($z[$ta])){$z[$ta]=array();foreach(indexes($ta,$G)as$t){if($t["type"]=="PRIMARY"){$z[$ta]=array_flip($t["columns"]);break;}}$w[$ta]=$z[$ta];}if(isset($w[$ta][$Mb])){unset($w[$ta][$Mb]);$z[$ta][$Mb]=$T;$ha[$T]=$ta;}}if($d->charsetnr==63){$_e[$T]=true;}$ua[$T]=$d->type;$f=h($f);echo"<th".($ta!=""||$d->name!=$Mb?" title='".h(($ta!=""?"$ta.":"").$Mb)."'":"").">".($wc?"<a href='$wc".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$c=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($_e[$c]&&!is_utf8($b)){$b="<i>".lang(array('%d byte','%d bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($ua[$c]==254){$b="<code>$b</code>";}}if(isset($ha[$c])&&!$w[$ha[$c]]){if($wc){$B=$ha[$c].urlencode($a[array_search("table=",$ha)]);}else{$B="edit=".urlencode($ha[$c]);foreach($z[$ha[$c]]as$vc=>$T){$B.="&where".urlencode("[".bracket_escape($vc)."]")."=".urlencode($a[$T]);}}$b="<a href='".h(ME.$B)."'>$b</a>";}echo"<td>$b";}}echo($g?"</table>":"<p class='message'>".'No rows.')."\n";}function
referencable_primary($mf){$e=array();foreach(table_status()as$ra=>$l){if($ra!=$mf&&fk_support($l)){foreach(fields($ra)as$d){if($d["primary"]){if($e[$ra]){unset($e[$ra]);break;}$e[$ra]=$d;}}}}return$e;}function
textarea($f,$o,$F=10,$Sa=80){echo"<textarea name='$f' rows='$F' cols='$Sa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($o)){foreach($o
as$b){echo
h($b)."\n\n\n";}}else{echo
h($o);}echo"</textarea>";}function
format_time($rb,$uc){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$uc))-array_sum(explode(" ",$rb)))).")</span>";}function
edit_type($c,$d,$S,$M=array()){global$Ec,$ua,$wb,$Ga;echo'<td><select name="',$c,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($ua[$d["type"]])?array():array($d["type"]))+$Ec+($M?array('Foreign keys'=>$M):array()),$d["type"]),'</select>
<td><input name="',$c,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$c"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($S,$d["collation"]).'</select>',($wb?"<select name='$c"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($wb,$d["unsigned"]).'</select>':''),($M?"<select name='$c"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($Ga,$d["on_delete"])."</select> ":" ");}function
process_length($wa){global$lb;return(preg_match("~^\\s*(?:$lb)(?:\\s*,\\s*(?:$lb))*\\s*\$~",$wa)&&preg_match_all("~$lb~",$wa,$fa)?implode(",",$fa[0]):preg_replace('~[^0-9,+-]~','',$wa));}function
process_type($d,$Jb="COLLATE"){global$wb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$wb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $Jb ".q($d["collation"]):"");}function
process_field($d,$xc){return
array(idf_escape($d["field"]),process_type($xc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".(($d["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$d["default"]))||($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$d["default"]))?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($N){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$c=>$b){if(ereg("$c|$b",$N)){return" class='$c'";}}}function
edit_fields($p,$S,$N="TABLE",$se=0,$M=array(),$jb=false){global$yb;echo'<thead><tr class="wrap">
';if($N=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($N=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($N=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Default values
',(support("comment")?"<td".($jb?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$g=>$d){$g++;$Wc=$d[($_POST?"orig":"field")];$ue=(isset($_POST["add"][$g-1])||(isset($d["field"])&&!$_POST["drop_col"][$g]))&&(support("drop_col")||$Wc=="");echo'<tr',($ue?"":" style='display: none;'"),'>
',($N=="PROCEDURE"?"<td>".html_select("fields[$g][inout]",explode("|",$yb),$d["inout"]):""),'<th>';if($ue){echo'<input name="fields[',$g,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $se); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$g,'][orig]" value="',h($Wc),'">
';edit_type("fields[$g]",$d,$S,$M);if($N=="TABLE"){echo'<td>',checkbox("fields[$g][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$g,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$g][has_default]",1,$d["has_default"]),'<input name="fields[',$g,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($jb?"":" class='hidden'")."><input name='fields[$g][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, $se, 1);'>&nbsp;"."<input type='image' name='up[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.0' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' name='down[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.0' alt='v' title='".'Move down'."'>&nbsp;":""),($Wc==""||support("drop_col")?"<input type='image' name='drop_col[$g]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.0' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$ma=0;if($_POST["up"]){$Xa=0;foreach($p
as$c=>$d){if(key($_POST["up"])==$c){unset($p[$c]);array_splice($p,$Xa,0,array($d));break;}if(isset($d["field"])){$Xa=$ma;}$ma++;}}if($_POST["down"]){$ba=false;foreach($p
as$c=>$d){if(isset($d["field"])&&$ba){unset($p[key($_POST["down"])]);array_splice($p,$ma,0,array($ba));break;}if(key($_POST["down"])==$c){$ba=$d;}$ma++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($m){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($m[0][0].$m[0][0],$m[0][0],substr($m[0],1,-1))),'\\'))."'";}function
grant($Q,$aa,$w,$ib){if(!$aa){return
true;}if($aa==array("ALL PRIVILEGES","GRANT OPTION")){return($Q=="GRANT"?queries("$Q ALL PRIVILEGES$ib WITH GRANT OPTION"):queries("$Q ALL PRIVILEGES$ib")&&queries("$Q GRANT OPTION$ib"));}return
queries("$Q ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$w, ",$aa).$w).$ib);}function
drop_create($we,$da,$O,$qe,$of,$pf,$f){if($_POST["drop"]){return
query_redirect($we,$O,$qe,true,!$_POST["dropped"]);}$Ja=$f!=""&&($_POST["dropped"]||queries($we));$rf=queries($da);if(!queries_redirect($O,($f!=""?$of:$pf),$rf)&&$Ja){redirect(null,$qe);}return$Ja;}function
tar_file($kb,$Vc){$e=pack("a100a8a8a8a12a12",$kb,644,0,0,decoct(strlen($Vc)),decoct(time()));$he=8*32;for($g=0;$g<strlen($e);$g++){$he+=ord($e{$g});}$e.=sprintf("%06o",$he)."\0 ";return$e.str_repeat("\0",512-strlen($e)).$Vc.str_repeat("\0",511-(strlen($Vc)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ga=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$lb="'(?:''|[^'\\\\]|\\\\.)*+'";$yb="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$h=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$h-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$i->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($h)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$h=$_GET["table"];$p=fields($h);if(!$p){$q=error();}$H=($p?table_status($h):array());page_header(($p&&is_view($H)?'View':'Table').": ".h($h),$q);$n->selectLinks($H);$cb=$H["Comment"];if($cb!=""){echo"<p>".'Comment'.": ".h($cb)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td title='".h($d["collation"])."'>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($d["default"])?" [<b>".h($d["default"])."</b>]":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($H)){echo"<h3>".'Indexes'."</h3>\n";$z=indexes($h);if($z){echo"<table cellspacing='0'>\n";foreach($z
as$f=>$t){ksort($t["columns"]);$hb=array();foreach($t["columns"]as$c=>$b){$hb[]="<i>".h($b)."</i>".($t["lengths"][$c]?"(".$t["lengths"][$c].")":"");}echo"<tr title='".h($f)."'><th>$t[type]<td>".implode(", ",$hb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($h).'">'.'Alter indexes'."</a>\n";if(fk_support($H)){echo"<h3>".'Foreign keys'."</h3>\n";$M=foreign_keys($h);if($M){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($r!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($M
as$f=>$C){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$C["source"]))."</i>","<td><a href='".h($C["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($C["db"]),ME):($C["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($C["ns"]),ME):ME))."table=".urlencode($C["table"])."'>".($C["db"]!=""?"<b>".h($C["db"])."</b>.":"").($C["ns"]!=""?"<b>".h($C["ns"])."</b>.":"").h($C["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$C["target"]))."</i>)","<td>".nbsp($C["on_delete"])."\n","<td>".nbsp($C["on_update"])."\n";if($r!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($h).'&name='.urlencode($f)).'">'.'Alter'.'</a>';}}echo"</table>\n";}if($r!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($h).'">'.'Add foreign key'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggers'."</h3>\n";$Ac=triggers($h);if($Ac){echo"<table cellspacing='0'>\n";foreach($Ac
as$c=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($c)."<td><a href='".h(ME.'trigger='.urlencode($h).'&name='.urlencode($c))."'>".'Alter'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($h).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB);$db=array();$me=array();$f="adminer_schema";$ze=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$ze,$fa,PREG_SET_ORDER);foreach($fa
as$g=>$m){$db[$m[1]]=array($m[2],$m[3]);$me[]="\n\t'".js_escape($m[1])."': [ $m[2], $m[3] ]";}$Ib=0;$Le=-1;$Wa=array();$Ke=array();$Je=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$Zb=0;$Wa[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$Zb+=1.25;$d["pos"]=$Zb;$Wa[$a["Name"]]["fields"][$f]=$d;}$Wa[$a["Name"]]["pos"]=($db[$a["Name"]]?$db[$a["Name"]]:array($Ib,0));foreach($n->foreignKeys($a["Name"])as$b){if(!$b["db"]){$ka=$Le;if($db[$a["Name"]][1]||$db[$b["table"]][1]){$ka=min(floatval($db[$a["Name"]][1]),floatval($db[$b["table"]][1]))-1;}else{$Le-=.1;}while($Je[(string)$ka]){$ka-=.0001;}$Wa[$a["Name"]]["references"][$b["table"]][(string)$ka]=array($b["source"],$b["target"]);$Ke[$b["table"]][$a["Name"]][(string)$ka]=$b["target"];$Je[(string)$ka]=true;}}$Ib=max($Ib,$Wa[$a["Name"]]["pos"][0]+2.5+$Zb);}echo'<div id="schema" style="height: ',$Ib,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$me)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Ib,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Wa
as$f=>$l){echo"<div class='table' style='top: ".$l["pos"][0]."em; left: ".$l["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($l["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$l["references"]as$Hb=>$Ub){foreach($Ub
as$ka=>$ic){$Sb=$ka-$db[$f][1];$g=0;foreach($ic[0]as$xa){echo"<div class='references' title='".h($Hb)."' id='refs$ka-".($g++)."' style='left: $Sb"."em; top: ".$l["fields"][$xa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Sb)."em;'></div></div>\n";}}}foreach((array)$Ke[$f]as$Hb=>$Ub){foreach($Ub
as$ka=>$w){$Sb=$ka-$db[$f][1];$g=0;foreach($w
as$na){echo"<div class='references' title='".h($Hb)."' id='refd$ka-".($g++)."' style='left: $Sb"."em; top: ".$l["fields"][$na]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.0'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Sb)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Wa
as$f=>$l){foreach((array)$l["references"]as$Hb=>$Ub){foreach($Ub
as$ka=>$ic){$_c=$Ib;$Rc=-10;foreach($ic[0]as$c=>$xa){$Ce=$l["pos"][0]+$l["fields"][$xa]["pos"];$Be=$Wa[$Hb]["pos"][0]+$Wa[$Hb]["fields"][$ic[1][$c]]["pos"];$_c=min($_c,$Ce,$Be);$Rc=max($Rc,$Ce,$Be);}echo"<div class='references' id='refl$ka' style='left: $ka"."em; top: $_c"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($Rc-$_c)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($ze)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$h=$_GET["dump"];if($_POST){$Ae="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$c){$Ae.="&$c=".urlencode($_POST[$c]);}cookie("adminer_export",substr($Ae,1));$vb=dump_headers(($h!=""?$h:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Ya=($_POST["format"]=="sql");if($Ya){echo"-- Adminer $fc ".$ya[DRIVER]." dump

".($r!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($i->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$I=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$v){if($i->select_db($v)){if($Ya&&ereg('CREATE',$I)&&($da=$i->result("SHOW CREATE DATABASE ".idf_escape($v),1))){if($I=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($v).";\n";}echo($I=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$da):$da).";\n";}if($Ya){if($I){echo
use_sql($v).";\n\n";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$Ra="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ea){foreach(get_rows("SHOW $Ea STATUS WHERE Db = ".q($v),null,"-- ")as$a){$Ra.=($I!='DROP+CREATE'?"DROP $Ea IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE $Ea ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$Ra.=($I!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$i->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($Ra){echo"DELIMITER ;;\n\n$Ra"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$Qa=array();foreach(table_status()as$a){$l=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$Fe=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($l||$Fe){if(!is_view($a)){if($vb=="tar"){ob_start();}$n->dumpTable($a["Name"],($l?$_POST["table_style"]:""));if($Fe){$n->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($Ya&&$_POST["triggers"]&&$l&&($Ac=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$Ac\nDELIMITER ;\n";}if($vb=="tar"){echo
tar_file((DB!=""?"":"$v/")."$a[Name].csv",ob_get_clean());}elseif($Ya){echo"\n";}}elseif($Ya){$Qa[]=$a["Name"];}}}foreach($Qa
as$xb){$n->dumpTable($xb,$_POST["table_style"],true);}if($vb=="tar"){echo
pack("x512");}}if($I=="CREATE+ALTER"&&$Ya){$j="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
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
			CASE _table_name";foreach(get_rows($j)as$a){$cb=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $cb THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$cb;
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
";}if(in_array("CREATE+ALTER",array($I,$_POST["table_style"]))&&$Ya){echo"SELECT @adminer_alter;\n";}}}if($Ya){echo"-- ".$i->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$ne=array('','USE','DROP+CREATE','CREATE');$Zd=array('','DROP+CREATE','CREATE');$Fd=array('','TRUNCATE+INSERT','INSERT');if($r=="sql"){$ne[]='CREATE+ALTER';$Zd[]='CREATE+ALTER';$Fd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$n->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$n->dumpFormat(),$a["format"],0)."\n";echo($r=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$ne,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Routines'):"").(support("event")?checkbox("events",1,$a["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Zd,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Fd,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$qd=array();if(DB!=""){$Oa=($h!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Oa onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$Oa onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Qa="";foreach(table_status()as$a){$f=$a["Name"];$ec=ereg_replace("_.*","",$f);$Oa=($h==""||$h==(substr($h,-1)=="%"?"$ec%":$f));$hb="<tr><td>".checkbox("tables[]",$f,$Oa,$f,"formUncheck('check-tables');");if(is_view($a)){$Qa.="$hb\n";}else{echo"$hb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$Oa,"","formUncheck('check-data');")."</label>\n";}$qd[$ec]++;}echo$Qa;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($h==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$v){if(!information_schema($v)){$ec=ereg_replace("_.*","",$v);echo"<tr><td>".checkbox("databases[]",$v,$h==""||$h=="$ec%",$v,"formUncheck('check-databases');")."</label>\n";$qd[$ec]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$qa=true;foreach($qd
as$c=>$b){if($c!=""&&$b>1){echo($qa?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$c%")."'>".h($c)."</a>";$qa=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$k=$i->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$k){echo'<form action=""><p>
';hidden_fields_get();echo'Username: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Edit">
</form>
';$k=$i->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Username'."<th>".'Server'."</thead>\n";while($a=$k->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'edit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$q&&$_POST["export"]){dump_headers("sql");$n->dumpTable("","");$n->dumpData("","table",$_POST["query"]);exit;}restart_session();$hf=&get_session("queries");$Ia=&$hf[DB];if(!$q&&$_POST["clear"]){$Ia=array();redirect(remove_from_uri("history"));}page_header('SQL command',$q);if(!$q&&$_POST){$Aa=false;$j=$_POST["query"];if($_POST["webfile"]){$Aa=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$j=($Aa?fread($Aa,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$j=get_file("sql_file",true);}if(is_string($j)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($j)+memory_get_usage()+8e6));}if($j!=""&&strlen($j)<1e6){$L=$j.(ereg(';$',$j)?"":";");if(!$Ia||end($Ia)!=$L){$Ia[]=$L;}}$Xb="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Tc=";";$ma=0;$Gb=true;$G=connect();if(is_object($G)&&DB!=""){$G->select_db(DB);}$gb=0;$zc=array();$Bf='[\'`"]'.($r=="pgsql"?'|\\$[^$]*\\$':($r=="mssql"||$r=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$Af=microtime();parse_str($_COOKIE["adminer_export"],$Id);$Bd=$n->dumpFormat();unset($Bd["sql"]);while($j!=""){if(!$ma&&$r=="sql"&&preg_match("~^$Xb*DELIMITER\\s+(.+)~i",$j,$m)){$Tc=$m[1];$j=substr($j,strlen($m[0]));}else{preg_match('('.preg_quote($Tc)."|$Bf|\$)",$j,$m,PREG_OFFSET_CAPTURE,$ma);$ba=$m[0][0];$ma=$m[0][1]+strlen($ba);if(!$ba&&$Aa&&!feof($Aa)){$j.=fread($Aa,1e5);}else{if(!$ba&&rtrim($j)==""){break;}if($ba&&$ba!=$Tc){while(preg_match('('.($ba=='/*'?'\\*/':($ba=='['?']':(ereg('^-- |^#',$ba)?"\n":preg_quote($ba)."|\\\\."))).'|$)s',$j,$m,PREG_OFFSET_CAPTURE,$ma)){$U=$m[0][0];$ma=$m[0][1]+strlen($U);if(!$U&&$Aa&&!feof($Aa)){$j.=fread($Aa,1e6);}elseif($U[0]!="\\"){break;}}}else{$Gb=false;$L=substr($j,0,$m[0][1]);$gb++;$hb="<pre id='sql-$gb'><code class='jush-$r'>".shorten_utf8(trim($L),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$hb;ob_flush();flush();}$rb=microtime();if($i->multi_query($L)&&is_object($G)&&preg_match("~^$Xb*USE\\b~isU",$L)){$G->query($L);}do{$k=$i->store_result();$uc=microtime();$ud=format_time($rb,$uc).(strlen($L)<1000?" <a href='".h(ME)."sql=".urlencode(trim($L))."'>".'Edit'."</a>":"");if($i->error){echo($_POST["only_errors"]?$hb:""),"<p class='error'>".'Error in query'.": ".error()."\n";$zc[]=" <a href='#sql-$gb'>$gb</a>";if($_POST["error_stops"]){break;}}elseif(is_object($k)){select($k,$G);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($k->num_rows?lang(array('%d row','%d rows'),$k->num_rows):"").$ud;$E="export-$gb";$wd=", <a href='#$E' onclick=\"return !toggle('$E');\">".'Export'."</a><span id='$E' class='hidden'>: ".html_select("output",$n->dumpOutput(),$Id["output"])." ".html_select("format",$Bd,$Id["format"])."<input type='hidden' name='query' value='".h($L)."'>"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$D'></span>";if($G&&preg_match("~^($Xb|\\()*SELECT\\b~isU",$L)&&($Df=explain($G,$L))){$E="explain-$gb";echo", <a href='#$E' onclick=\"return !toggle('$E');\">EXPLAIN</a>$wd\n","<div id='$E' class='hidden'>\n";select($Df,$G,($r=="sql"?"http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo"$wd\n";}echo"</form>\n";}}else{if(preg_match("~^$Xb*(CREATE|DROP|ALTER)$Xb+(DATABASE|SCHEMA)\\b~isU",$L)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($i->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$i->affected_rows)."$ud\n";}}$rb=$uc;}while($i->next_result());$j=substr($j,$ma);$ma=0;}}}}if($Gb){echo"<p class='message'>".'No commands to execute.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$gb-count($zc)).format_time($Af,microtime())."\n";}elseif($zc&&$gb>1){echo"<p class='error'>".'Error in query'.": ".implode("",$zc)."\n";}}else{echo"<p class='error'>".upload_error($j)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$L=$_GET["sql"];if($_POST){$L=$_POST["query"];}elseif($_GET["history"]=="all"){$L=$Ia;}elseif($_GET["history"]!=""){$L=$Ia[$_GET["history"]];}textarea("query",$L,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$D,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$ad=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$c=>$b){if(extension_loaded($b)){$ad[]=".$c";}}echo
sprintf('Webserver file %s',"<code>adminer.sql".($ad?"[".implode("|",$ad)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Ia){print_fieldset("history",'History',$_GET["history"]!="");foreach($Ia
as$c=>$b){echo'<a href="'.h(ME."sql=&history=$c").'">'.'Edit'."</a> <code class='jush-$r'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$h=$_GET["edit"];$x=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Fa=(isset($_GET["select"])?$_POST["edit"]:$x);$p=fields($h);foreach($p
as$f=>$d){if(!isset($d["privileges"][$Fa?"update":"insert"])||$n->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$q&&!isset($_GET["select"])){$O=$_POST["referer"];if($_POST["insert"]){$O=($Fa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$O)){$O=ME."select=".urlencode($h);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($h)," WHERE $x"),$O,'Item has been deleted.');}else{$u=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$u[idf_escape($f)]=($Fa?"\n".idf_escape($f)." = $b":$b);}}if($Fa){if(!$u){redirect($O);}query_redirect("UPDATE".limit1(table($h)." SET".implode(",",$u),"\nWHERE $x"),$O,'Item has been updated.');}else{$k=insert_into($h,$u);$Ad=($k?last_id():0);queries_redirect($O,sprintf('Item%s has been inserted.',($Ad?" $Ad":"")),$k);}}}$ra=$n->tableName(table_status($h));page_header(($Fa?'Edit':'Insert'),$q,array("select"=>array($h,$ra)),$ra);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($x){$y=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$y[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($y){$F=get_rows("SELECT".limit(implode(", ",$y)." FROM ".table($h)," WHERE $x",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($F)!=1?null:reset($F));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$n->fieldName($d);$La=$_GET["set"][bracket_escape($f)];$o=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$Fa&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($La)?$La:$d["default"]))));if(!$_POST["save"]&&is_string($o)){$o=$n->editVal($o,$d);}$A=($_POST["save"]?(string)$_POST["function"][$f]:($Fa&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($o===false?null:(isset($o)?'':'NULL'))));if($d["type"]=="timestamp"&&$o=="CURRENT_TIMESTAMP"){$o="";$A="now";}input($d,$o,$A);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($Fa?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}}echo($Fa?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["create"])){$h=$_GET["create"];$_d=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$zd=referencable_primary($h);$M=array();foreach($zd
as$ra=>$d){$M[str_replace("`","``",$ra)."`".str_replace("`","``",$d["field"])]=$ra;}$tc=array();$sc=array();if($h!=""){$tc=fields($h);$sc=table_status($h);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($h),substr(ME,0,-1),'Table has been dropped.');}else{$p=array();$Jc=array();ksort($_POST["fields"]);$cd=reset($tc);$sb="FIRST";foreach($_POST["fields"]as$c=>$d){$C=$M[$d["type"]];$xc=(isset($C)?$zd[$C]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$La=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($La!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$La;}if($c==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$Md=process_field($d,$xc);if($Md!=process_field($cd,$cd)){$p[]=array($d["orig"],$Md,$sb);}if(isset($C)){$Jc[idf_escape($d["field"])]=($h!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($M[$d["type"]])." (".idf_escape($xc["field"]).")".(in_array($d["on_delete"],$Ga)?" ON DELETE $d[on_delete]":"");}$sb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$cd=next($tc);}}$Ob="";if(in_array($_POST["partition_by"],$_d)){$ld=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$c=>$b){$o=$_POST["partition_values"][$c];$ld[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($o!=""?" ($o)":" MAXVALUE");}}$Ob.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($ld?" (".implode(",",$ld)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($h!=""&&support("partitioning")){$Ob.="\nREMOVE PARTITIONING";}$ga='Table has been altered.';if($h==""){cookie("adminer_engine",$_POST["Engine"]);$ga='Table has been created.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ga,alter_table($h,$_POST["name"],$p,$Jc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$sc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$sc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$Ob));}}page_header(($h!=""?'Alter table':'Create table'),$q,array("table"=>$h),$h);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($ua["int"])?"int":(isset($ua["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($h!=""){$a=$sc;$a["name"]=$h;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($tc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Eb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($h);$k=$i->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Eb ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$k->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Eb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$ae){$a["partition_names"][]=$ae["PARTITION_NAME"];$a["partition_values"][]=$ae["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$S=collations();$kd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($kd&&count($a["fields"])>$kd){echo"<p class='error'>".h(sprintf('Maximum number of allowed fields exceeded. Please increase %s and %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$md=engines();foreach($md
as$cc){if(!strcasecmp($cc,$a["Engine"])){$a["Engine"]=$cc;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($h==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($md?html_select("Engine",array(""=>"(".'engine'.")")+$md,$a["Engine"]):""),' ',($S&&!ereg("sqlite|mssql",$r)?html_select("Collation",array(""=>"(".'collation'.")")+$S,$a["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$jb=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$jb){foreach($a["fields"]as$d){if($d["comment"]!=""){$jb=true;break;}}}edit_fields($a["fields"],$S,"TABLE",$kd,$M,$jb);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Default values</label>
',(support("comment")?checkbox("comments",1,$jb,'Comment',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($jb?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
';if(support("partitioning")){$ee=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partition by',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$_d,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitions: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($ee||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($ee?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($a["partition_names"]as$c=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($c==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$c]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$h=$_GET["indexes"];$mc=array("PRIMARY","UNIQUE","INDEX");$H=table_status($h);if(eregi("MyISAM|M?aria",$H["Engine"])){$mc[]="FULLTEXT";}$z=indexes($h);if($r=="sqlite"){unset($mc[0]);unset($z[""]);}if($_POST&&!$q&&!$_POST["add"]){$ca=array();foreach($_POST["indexes"]as$t){$f=$t["name"];if(in_array($t["type"],$mc)){$w=array();$Bb=array();$u=array();ksort($t["columns"]);foreach($t["columns"]as$c=>$ea){if($ea!=""){$wa=$t["lengths"][$c];$u[]=idf_escape($ea).($wa?"(".(+$wa).")":"");$w[]=$ea;$Bb[]=($wa?$wa:null);}}if($w){$bb=$z[$f];if($bb){ksort($bb["columns"]);ksort($bb["lengths"]);if($t["type"]==$bb["type"]&&array_values($bb["columns"])===$w&&(!$bb["lengths"]||array_values($bb["lengths"])===$Bb)){unset($z[$f]);continue;}}$ca[]=array($t["type"],$f,"(".implode(", ",$u).")");}}}foreach($z
as$f=>$bb){$ca[]=array($bb["type"],$f,"DROP");}if(!$ca){redirect(ME."table=".urlencode($h));}queries_redirect(ME."table=".urlencode($h),'Indexes have been altered.',alter_indexes($h,$ca));}page_header('Indexes',$q,array("table"=>$h),$h);$p=array_keys(fields($h));$a=array("indexes"=>$z);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$c=>$t){if($t["columns"][count($t["columns"])]!=""){$a["indexes"][$c]["columns"][]="";}}$t=end($a["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$c=>$t){$a["indexes"][$c]["name"]=$c;$a["indexes"][$c]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$T=1;foreach($a["indexes"]as$t){echo"<tr><td>".html_select("indexes[$T][type]",array(-1=>"")+$mc,$t["type"],($T==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$g=1;foreach($t["columns"]as$c=>$ea){echo"<span>".html_select("indexes[$T][columns][$g]",array(-1=>"")+$p,$ea,($g==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($r=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$T][lengths][$g]' size='2' value='".h($t["lengths"][$c])."'> </span>";$g++;}echo"<td><input name='indexes[$T][name]' value='".h($t["name"])."'>\n";$T++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$q&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Database has been renamed.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$ce=true;$Xa="";foreach($_
as$v){if(count($_)==1||$v!=""){if(!create_database($v,$_POST["collation"])){$ce=false;}$Xa=$v;}}queries_redirect(ME."db=".urlencode($Xa),'Database has been created.',$ce);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$q,array(),DB);$S=collations();$f=DB;$Jb=null;if($_POST){$f=$_POST["name"];$Jb=$_POST["collation"];}elseif(DB!=""){$Jb=db_collation(DB,$S);}elseif($r=="sql"){foreach(get_vals("SHOW GRANTS")as$Q){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$Q,$m)&&$m[1]){$f=stripcslashes(idf_unescape("`$m[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($S?html_select("collation",array(""=>"(".'collation'.")")+$S,$Jb):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.0' alt='+' title='".'Add next'."'>\n";}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["call"])){$Ba=$_GET["call"];page_header('Call'.": ".h($Ba),$q);$Ea=routine($Ba,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$qb=array();$Ra=array();foreach($Ea["fields"]as$g=>$d){if(substr($d["inout"],-3)=="OUT"){$Ra[$g]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$qb[]=$g;}}if(!$q&&$_POST){$Wd=array();foreach($Ea["fields"]as$c=>$d){if(in_array($c,$qb)){$b=process_input($d);if($b===false){$b="''";}if(isset($Ra[$c])){$i->query("SET @".idf_escape($d["field"])." = $b");}}$Wd[]=(isset($Ra[$c])?"@".idf_escape($d["field"]):$b);}$j=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Ba)."(".implode(", ",$Wd).")";echo"<p><code class='jush-$r'>".h($j)."</code> <a href='".h(ME)."sql=".urlencode($j)."'>".'Edit'."</a>\n";if(!$i->multi_query($j)){echo"<p class='error'>".error()."\n";}else{$G=connect();if(is_object($G)){$G->select_db(DB);}do{$k=$i->store_result();if(is_object($k)){select($k,$G);}else{echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$i->affected_rows)."\n";}}while($i->next_result());if($Ra){select($i->query("SELECT ".implode(", ",$Ra)));}}}echo'
<form action="" method="post">
';if($qb){echo"<table cellspacing='0'>\n";foreach($qb
as$c){$d=$Ea["fields"][$c];$f=$d["field"];echo"<tr><th>".$n->fieldName($d);$o=$_POST["fields"][$f];if($o!=""){if($d["type"]=="enum"){$o=+$o;}if($d["type"]=="set"){$o=array_sum($o);}}input($d,$o,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["foreign"])){$h=$_GET["foreign"];if($_POST&&!$q&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($h)."\nDROP ".($r=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($h),'Foreign key has been dropped.');}else{$xa=array_filter($_POST["source"],'strlen');ksort($xa);$na=array();foreach($xa
as$c=>$b){$na[$c]=$_POST["target"][$c];}query_redirect("ALTER TABLE ".table($h).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$xa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$na)).")".(in_array($_POST["on_delete"],$Ga)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$Ga)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($h),($_GET["name"]!=""?'Foreign key has been altered.':'Foreign key has been created.'));$q='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$q";}}page_header('Foreign key',$q,array("table"=>$h),$h);$a=array("table"=>$h,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$M=foreign_keys($h);$a=$M[$_GET["name"]];$a["source"][]="";}$xa=array_keys(fields($h));$na=($h===$a["table"]?$xa:array_keys(fields($a["table"])));$Vd=array();foreach(table_status()as$f=>$H){if(fk_support($H)){$Vd[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo'Target table:
',html_select("table",$Vd,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$T=0;foreach($a["source"]as$c=>$b){echo"<tr>","<td>".html_select("source[".(+$c)."]",array(-1=>"")+$xa,$b,($T==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$c)."]",$na,$a["target"][$c]);$T++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$Ga,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$Ga,$a["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["view"])){$h=$_GET["view"];$Ja=false;if($_POST&&!$q){$Ja=drop_create("DROP VIEW ".table($h),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View has been dropped.','View has been altered.','View has been created.',$h);}page_header(($h!=""?'Alter view':'Create view'),$q,array("table"=>$h),$h);$a=array();if($_POST){$a=$_POST;}elseif($h!=""){$a=view($h);$a["name"]=$h;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($Ja){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["event"])){$Ta=$_GET["event"];$Od=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$jd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$q){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($Ta),substr(ME,0,-1),'Event has been dropped.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Od)&&isset($jd[$_POST["STATUS"]])){$Qd="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($Ta!=""?'Event has been altered.':'Event has been created.'),queries(($Ta!=""?"ALTER EVENT ".idf_escape($Ta).$Qd.($Ta!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Qd)."\n".$jd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($Ta!=""?'Alter event'.": ".h($Ta):'Create event'),$q);$a=array();if($_POST){$a=$_POST;}elseif($Ta!=""){$F=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($Ta));$a=reset($F);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>End<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Every<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Od,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$jd,$a["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($Ta!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["procedure"])){$Ba=$_GET["procedure"];$Ea=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$id=routine_languages();$Ja=false;if($_POST&&!$q&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$u=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$u[]=(ereg("^($yb)\$",$d["inout"])?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ja=drop_create("DROP $Ea ".idf_escape($Ba),"CREATE $Ea ".idf_escape($_POST["name"])." (".implode(", ",$u).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$id)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$Ba);}page_header(($Ba!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($Ba):(isset($_GET["function"])?'Create function':'Create procedure')),$q);$S=get_vals("SHOW CHARACTER SET");sort($S);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Ba!=""){$a=routine($Ba,$Ea);$a["name"]=$Ba;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
',($id?'Language'.": ".html_select("language",$id,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$S,$Ea);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$a["returns"],$S);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Save">
';if($Ba!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Ja){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["trigger"])){$h=$_GET["trigger"];$lc=trigger_options();$Ud=array("INSERT","UPDATE","DELETE");$Ja=false;if($_POST&&!$q&&in_array($_POST["Timing"],$lc["Timing"])&&in_array($_POST["Event"],$Ud)&&in_array($_POST["Type"],$lc["Type"])){$Td=" $_POST[Timing] $_POST[Event]";$ib=" ON ".table($h);$Ja=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($r=="pgsql"?$ib:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($r=="mssql"?$ib.$Td:$Td.$ib).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($h),'Trigger has been dropped.','Trigger has been altered.','Trigger has been created.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Alter trigger'.": ".h($_GET["name"]):'Create trigger'),$q,array("table"=>$h));$a=array("Trigger"=>$h."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$lc["Timing"],$a["Timing"],"if (/^".h(preg_quote($h,"/"))."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".h(js_escape($h))."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$Ud,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$lc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Ja){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["user"])){$ed=$_GET["user"];$aa=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$kc){$aa[$kc][$a["Privilege"]]=$a["Comment"];}}$aa["Server Admin"]+=$aa["File access on server"];$aa["Databases"]["Create routine"]=$aa["Procedures"]["Create routine"];unset($aa["Procedures"]["Create routine"]);$aa["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$aa["Columns"][$b]=$aa["Tables"][$b];}unset($aa["Server Admin"]["Usage"]);foreach($aa["Tables"]as$c=>$b){unset($aa["Databases"][$c]);}$gc=array();if($_POST){foreach($_POST["objects"]as$c=>$b){$gc[$b]=(array)$gc[$b]+(array)$_POST["grants"][$c];}}$Va=array();$jc="";if(isset($_GET["host"])&&($k=$i->query("SHOW GRANTS FOR ".q($ed)."@".q($_GET["host"])))){while($a=$k->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$m)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$m[1],$fa,PREG_SET_ORDER)){foreach($fa
as$b){if($b[1]!="USAGE"){$Va["$m[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$Va["$m[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$m)){$jc=$m[1];}}}if($_POST&&!$q){$_b=(isset($_GET["host"])?q($ed)."@".q($_GET["host"]):"''");$Ua=q($_POST["user"])."@".q($_POST["host"]);$fd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $_b",ME."privileges=",'User has been dropped.');}else{if($_b!=$Ua){$q=!queries(($i->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $Ua IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $fd");}elseif($_POST["pass"]!=$jc||!$_POST["hashed"]){queries("SET PASSWORD FOR $Ua = ".($_POST["hashed"]?$fd:"PASSWORD($fd)"));}if(!$q){$bc=array();foreach($gc
as$Ha=>$Q){if(isset($_GET["grant"])){$Q=array_filter($Q);}$Q=array_keys($Q);if(isset($_GET["grant"])){$bc=array_diff(array_keys(array_filter($gc[$Ha],'strlen')),$Q);}elseif($_b==$Ua){$be=array_keys((array)$Va[$Ha]);$bc=array_diff($be,$Q);$Q=array_diff($Q,$be);unset($Va[$Ha]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Ha,$m)&&(!grant("REVOKE",$bc,$m[2]," ON $m[1] FROM $Ua")||!grant("GRANT",$Q,$m[2]," ON $m[1] TO $Ua"))){$q=true;break;}}}if(!$q&&isset($_GET["host"])){if($_b!=$Ua){queries("DROP USER $_b");}elseif(!isset($_GET["grant"])){foreach($Va
as$Ha=>$bc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Ha,$m)){grant("REVOKE",array_keys($bc),$m[2]," ON $m[1] FROM $Ua");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$q);if($_b!=$Ua){$i->query("DROP USER $Ua");}}}page_header((isset($_GET["host"])?'Username'.": ".h("$ed@$_GET[host]"):'Create user'),$q,array("privileges"=>array('','Privileges')));if($_POST){$a=$_POST;$Va=$gc;}else{$a=$_GET+array("host"=>$i->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$jc;if($jc!=""){$a["hashed"]=true;}$Va[DB!=""&&!isset($_GET["host"])?idf_escape($_GET["db"]).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Password<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($i->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Privileges'."</a>";$g=0;foreach($Va
as$Ha=>$Q){echo'<th>'.($Ha!="*.*"?"<input name='objects[$g]' value='".h($Ha)."' size='10'>":"<input type='hidden' name='objects[$g]' value='*.*' size='10'>*.*");$g++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$kc=>$Wb){foreach((array)$aa[$kc]as$hc=>$cb){echo"<tr".odd()."><td".($Wb?">$Wb<td":" colspan='2'").' lang="en" title="'.h($cb).'">'.h($hc);$g=0;foreach($Va
as$Ha=>$Q){$f="'grants[$g][".h(strtoupper($hc))."]'";$o=$Q[strtoupper($hc)];if($kc=="Server Admin"&&$Ha!=(isset($Va["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($o?" selected":"").">".'Grant'."<option value='0'".($o=="0"?" selected":"").">".'Revoke'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($o?" checked":"").($hc=="All privileges"?" id='grants-$g-all'":($hc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$g-all');\"")).">";}$g++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["processlist"])){if($_POST&&!$q){$pd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$pd++;}}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$pd),$pd||!$_POST["kill"]);}page_header('Process list',$q);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$g=-1;foreach(get_rows("SHOW FULL PROCESSLIST")as$g=>$a){if(!$g){echo"<thead><tr lang='en'><th>&nbsp;<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd()."><td>".checkbox("kill[]",$a["Id"],0);foreach($a
as$c=>$b){echo"<td>".($c=="Info"&&$b!=""?"<code class='jush-$r'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Edit'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>',($g+1)."/".sprintf('%d in total',$i->result("SELECT @@max_connections")),'<p>
<input type="submit" value="Kill">
<input type="hidden" name="token" value="',$D,'">
</form>
';}elseif(isset($_GET["select"])){$h=$_GET["select"];$H=table_status($h);$z=indexes($h);$p=fields($h);$M=column_foreign_keys($h);if($H["Oid"]=="t"){$z[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$nc);$Ld=array();$w=array();$pb=null;foreach($p
as$c=>$d){$f=$n->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$w[$c]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$pb=$n->selectLengthProcess();}}$Ld+=$d["privileges"];}list($y,$Y)=$n->selectColumnsProcess($w,$z);$x=$n->selectSearchProcess($p,$z);$Ma=$n->selectOrderProcess($p,$z);$W=$n->selectLimitProcess();$Eb=($y?implode(", ",$y):($H["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($h);$gd=($Y&&count($Y)<count($y)?"\nGROUP BY ".implode(", ",$Y):"").($Ma?"\nORDER BY ".implode(", ",$Ma):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Pa=>$a){echo$i->result("SELECT".limit(idf_escape(key($a))." FROM ".table($h)," WHERE ".where_check($Pa).($x?" AND ".implode(" AND ",$x):"").($Ma?" ORDER BY ".implode(", ",$Ma):""),1));}exit;}if($_POST&&!$q){$xd="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Lc=$Qb=null;foreach($z
as$t){if($t["type"]=="PRIMARY"){$Lc=array_flip($t["columns"]);$Qb=($y?$Lc:array());break;}}foreach((array)$Qb
as$c=>$b){if(in_array(idf_escape($c),$y)){unset($Qb[$c]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($h);$n->dumpTable($h,"");if(!is_array($_POST["check"])||$Qb===array()){$Cb=$x;if(is_array($_POST["check"])){$Cb[]="($xd)";}$j="SELECT $Eb".($Cb?"\nWHERE ".implode(" AND ",$Cb):"").$gd;}else{$Kd=array();foreach($_POST["check"]as$b){$Kd[]="(SELECT".limit($Eb,"\nWHERE ".($x?implode(" AND ",$x)." AND ":"").where_check($b).$gd,1).")";}$j=implode(" UNION ALL ",$Kd);}$n->dumpData($h,"table",$j);exit;}if(!$n->selectEmailProcess($x,$M)){if($_POST["save"]||$_POST["delete"]){$k=true;$ab=0;$j=table($h);$u=array();if(!$_POST["delete"]){foreach($w
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$u[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$u[]=idf_escape($f)." = $b";}}}$j.=($_POST["clone"]?" (".implode(", ",array_keys($u)).")\nSELECT ".implode(", ",$u)."\nFROM ".table($h):" SET\n".implode(",\n",$u));}if($_POST["delete"]||$u){$oc="UPDATE";if($_POST["delete"]){$oc="DELETE";$j="FROM $j";}if($_POST["clone"]){$oc="INSERT";$j="INTO $j";}if($_POST["all"]||($Qb===array()&&$_POST["check"])||count($Y)<count($y)){$k=queries($oc." $j".($_POST["all"]?($x?"\nWHERE ".implode(" AND ",$x):""):"\nWHERE $xd"));$ab=$i->affected_rows;}else{foreach((array)$_POST["check"]as$b){$k=queries($oc.limit1($j,"\nWHERE ".where_check($b)));if(!$k){break;}$ab+=$i->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d item has been affected.','%d items have been affected.'),$ab),$k);}elseif(!$_POST["import"]){if(!$_POST["val"]){$q='Double click on a value to modify it.';}else{$k=true;$ab=0;foreach($_POST["val"]as$Pa=>$a){$u=array();foreach($a
as$c=>$b){$c=bracket_escape($c,1);$u[]=idf_escape($c)." = ".(ereg('char|text',$p[$c]["type"])||$b!=""?$n->processInput($p[$c],$b):"NULL");}$j=table($h)." SET ".implode(", ",$u);$Cb=" WHERE ".where_check($Pa).($x?" AND ".implode(" AND ",$x):"");$k=queries("UPDATE".(count($Y)<count($y)?" $j$Cb":limit1($j,$Cb)));if(!$k){break;}$ab+=$i->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$ab),$k);}}elseif(is_string($va=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($nc["output"])."&format=".urlencode($_POST["separator"]));$k=true;$Sa=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$va,$fa);$ab=count($fa[0]);begin();$ac=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($fa[0]as$c=>$b){preg_match_all("~((\"[^\"]*\")+|[^$ac]*)$ac~",$b.$ac,$nd);if(!$c&&!array_diff($nd[1],$Sa)){$Sa=$nd[1];$ab--;}else{$u=array();foreach($nd[1]as$g=>$vc){$u[idf_escape($Sa[$g])]=($vc==""&&$p[$Sa[$g]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$vc))));}$k=insert_update($h,$u,$Lc);if(!$k){break;}}}if($k){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$ab),$k);queries("ROLLBACK");}else{$q=upload_error($va);}}}$ra=$n->tableName($H);page_header('Select'.": $ra",$q);session_write_close();$u=null;if(isset($Ld["insert"])){$u="";foreach((array)$_GET["where"]as$b){if(count($M[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$u.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$n->selectLinks($H,$u);if(!$w){echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($h).'">',"</div>\n";$n->selectColumnsPrint($y,$w);$n->selectSearchPrint($x,$w,$z);$n->selectOrderPrint($Ma,$w,$z);$n->selectLimitPrint($W);$n->selectLengthPrint($pb);$n->selectActionPrint();echo"</form>\n";$K=$_GET["page"];if($K=="last"){$Ka=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));$K=floor(max(0,$Ka-1)/$W);}$j="SELECT".limit((+$W&&$Y&&count($Y)<count($y)&&$r=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Eb,($x?"\nWHERE ".implode(" AND ",$x):"").$gd,($W!=""?+$W:null),($K?$W*$K:0),"\n");echo$n->selectQuery($j);$k=$i->query($j);if(!$k){echo"<p class='error'>".error()."\n";}else{if($r=="mssql"){$k->seek($W*$K);}$rc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$F=array();while($a=$k->fetch_assoc()){if($K&&$r=="oracle"){unset($a["RNUM"]);}$F[]=$a;}if($_GET["page"]!="last"){$Ka=(+$W&&$Y&&count($Y)<count($y)?($r=="sql"?$i->result(" SELECT FOUND_ROWS()"):$i->result("SELECT COUNT(*) FROM ($j) x")):count($F));}if(!$F){echo"<p class='message'>".'No rows.'."\n";}else{$Sc=$n->backwardKeys($h,$ra);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Y&&$y?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$Pc=array();$X=array();reset($y);$Ie=1;foreach($F[0]as$c=>$b){if($H["Oid"]!="t"||$c!="oid"){$b=$_GET["columns"][key($y)];$d=$p[$y?($b?$b["col"]:current($y)):$c];$f=($d?$n->fieldName($d,$Ie):"*");if($f!=""){$Ie++;$Pc[$c]=$f;$ea=idf_escape($c);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($c).($Ma[0]==$ea||$Ma[0]==$c||(!$Ma&&count($Y)<count($y)&&$Y[0]==$ea)?'&desc%5B0%5D=1':'')).'">'.(!$y||$b?apply_sql_function($b["fun"],$f):h(current($y)))."</a>";}$X[$c]=$b["fun"];next($y);}}$Bb=array();if($_GET["modify"]){foreach($F
as$a){foreach($a
as$c=>$b){$Bb[$c]=max($Bb[$c],min(40,strlen(utf8_decode($b))));}}}echo($Sc?"<th>".'Relations':"")."</thead>\n";foreach($n->rowDescriptions($F,$M)as$P=>$a){$bd=unique_array($F[$P],$z);$Pa="";foreach($bd
as$c=>$b){$Pa.="&".(isset($b)?urlencode("where[".bracket_escape($c)."]")."=".urlencode($b):"null%5B%5D=".urlencode($c));}echo"<tr".odd().">".(!$Y&&$y?"":"<td>".checkbox("check[]",substr($Pa,1),in_array(substr($Pa,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Y)<count($y)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($h).$Pa)."'>".'edit'."</a>"));foreach($a
as$c=>$b){if(isset($Pc[$c])){$d=$p[$c];if($b!=""&&(!isset($rc[$c])||$rc[$c]!="")){$rc[$c]=(is_mail($b)?$Pc[$c]:"");}$B="";$b=$n->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$B=h(ME.'download='.urlencode($h).'&field='.urlencode($c).$Pa);}if($b===""){$b="&nbsp;";}elseif($pb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$pb));}else{$b=h($b);}if(!$B){foreach((array)$M[$c]as$C){if(count($M[$c])==1||end($C["source"])==$c){$B="";foreach($C["source"]as$g=>$xa){$B.=where_link($g,$C["target"][$g],$F[$P][$xa]);}$B=h(($C["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($C["db"]),ME):ME).'select='.urlencode($C["table"]).$B);if(count($C["source"])==1){break;}}}}if($c=="COUNT(*)"){$B=h(ME."select=".urlencode($h));$g=0;foreach((array)$_GET["where"]as$s){if(!array_key_exists($s["col"],$bd)){$B.=h(where_link($g++,$s["col"],$s["val"],$s["op"]));}}foreach($bd
as$za=>$s){$B.=h(where_link($g++,$za,$s));}}}if(!$B){if(is_mail($b)){$B="mailto:$b";}if($Oe=is_url($a[$c])){$B=($Oe=="http"&&$Nb?$a[$c]:"$Oe://www.adminer.org/redirect/?url=".urlencode($a[$c]));}}$E=h("val[$Pa][".bracket_escape($c)."]");$o=$_POST["val"][$Pa][bracket_escape($c)];$Me=h(isset($o)?$o:$a[$c]);$We=strpos($b,"<i>...</i>");$He=is_utf8($b)&&$F[$P][$c]==$a[$c]&&!$X[$c];$le=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$He)||isset($o)?"<td>".($le?"<textarea name='$E' cols='30' rows='".(substr_count($a[$c],"\n")+1)."'>$Me</textarea>":"<input name='$E' value='$Me' size='$Bb[$c]'>"):"<td id='$E' ondblclick=\"".($He?"selectDblClick(this, event".($We?", 2":($le?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$n->selectVal($b,$B,$d));}}if($Sc){echo"<td>";}$n->backwardKeysPrint($Sc,$F[$P]);echo"</tr>\n";}echo"</table>\n";}if($F||$K){$Yc=true;if($_GET["page"]!="last"&&+$W&&count($Y)>=count($y)&&($Ka>=$W||$K)){$Ka=$H["Rows"];if(!isset($Ka)||$x||($H["Engine"]=="InnoDB"&&$Ka<max(1e4,2*($K+1)*$W))){ob_flush();flush();$Ka=$i->result("SELECT COUNT(*) FROM ".table($h).($x?" WHERE ".implode(" AND ",$x):""));}else{$Yc=false;}}echo"<p class='pages'>";if(+$W&&$Ka>$W){$Xc=floor(($Ka-1)/$W);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($K+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$K).($K>5?" ...":"");for($g=max(1,$K-4);$g<min($Xc,$K+5);$g++){echo
pagination($g,$K);}echo($K+5<$Xc?" ...":"").($Yc?pagination($Xc,$K):' <a href="'.h(remove_from_uri()."&page=last").'">'.'last'."</a>");}echo" (".($Yc?"":"~ ").lang(array('%d row','%d rows'),$Ka).") ".checkbox("all",1,0,'whole result')."\n";if($n->selectCommandPrint()){?>
<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save" title="Double click on a value to modify it." class="jsonly">
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$Ka,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$_a=$n->dumpOutput();echo($_a?html_select("output",$_a,$nc["output"])." ":""),html_select("format",$n->dumpFormat(),$nc["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($n->selectImportPrint()){print_fieldset("import",'Import',!$F);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$nc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$D'>\n","</div></fieldset>\n";}$n->selectEmailPrint(array_filter($rc,'strlen'),$w);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Db=isset($_GET["status"]);page_header($Db?'Status':'Variables');$pe=($Db?show_status():show_variables());if(!$pe){echo"<p class='message'>".'No rows.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($pe
as$c=>$b){echo"<tr>","<th><code class='jush-".$r.($Db?"status":"set")."'>".h($c)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$qc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$E=js_escape($a["Name"]);json_row("Comment-$E",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$c){json_row("$c-$E",nbsp($a[$c]));}foreach($qc+array("Auto_increment"=>0,"Rows"=>0)as$c=>$b){if($a[$c]!=""){$b=number_format($a[$c],0,'.',',');json_row("$c-$E",($c=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($qc[$c])){$qc[$c]+=($a["Engine"]!="InnoDB"||$c!="Data_free"?$a[$c]:0);}}elseif(array_key_exists($c,$a)){json_row("$c-$E");}}}}foreach($qc
as$c=>$b){json_row("sum-$c",number_format($b,0,'.',','));}json_row("");}else{foreach(count_tables(get_databases())as$v=>$b){json_row("tables-".js_escape($v),$b);}json_row("");}exit;}else{$ye=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ye&&!$q&&!$_POST["search"]){$k=true;$ga="";if($r=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$k=truncate_tables($_POST["tables"]);}$ga='Tables have been truncated.';}elseif($_POST["move"]){$k=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ga='Tables have been moved.';}elseif($_POST["copy"]){$k=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ga='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"]){$k=drop_views($_POST["views"]);}if($k&&$_POST["tables"]){$k=drop_tables($_POST["tables"]);}$ga='Tables have been dropped.';}elseif($_POST["tables"]&&($k=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$k->fetch_assoc()){$ga.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ga,$k);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$q,true);if($n->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tables and views'."</h3>\n";$pc=tables_list();if(!$pc){echo"<p class='message'>".'No tables.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Table'.'<td>'.'Engine'.'<td>'.'Collation'.'<td>'.'Data Length'.'<td>'.'Index Length'.'<td>'.'Data Free'.'<td>'.'Auto Increment'.'<td>'.'Rows'.(support("comment")?'<td>'.'Comment':'')."</thead>\n";foreach($pc
as$f=>$N){$xb=(isset($N)&&!eregi("table",$N));echo'<tr'.odd().'><td>'.checkbox(($xb?"views[]":"tables[]"),$f,in_array($f,$ye,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($xb){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$c=>$B){echo($B?"<td align='right'><a href='".h(ME."$B=").urlencode($f)."' id='$c-".h($f)."'>?</a>":"<td id='$c-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($pc)),"<td>".nbsp($r=="sql"?$i->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$c){echo"<td align='right' id='sum-$c'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($r=="sql"?"<input type='submit' value='".'Analyze'."'> <input type='submit' name='optimize' value='".'Optimize'."'> <input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$r!="sqlite"){$v=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($_?html_select("target",$_,$v):'<input name="target" value="'.h($v).'">')," <input type='submit' name='move' value='".'Move'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$D'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";}if(support("routine")){echo"<h3>".'Routines'."</h3>\n";$te=routines();if($te){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($te
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("event")){echo"<h3>".'Events'."</h3>\n";$F=get_rows("SHOW EVENTS");if($F){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."</thead>\n";foreach($F
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'At given time'."<td>".$a["Execute at"]:'Every'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($pc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();