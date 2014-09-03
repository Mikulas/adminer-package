<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.2
*/error_reporting(6135);$cd=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($cd||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$He=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($He){$$b=$He;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
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
connection(){global$g;return$g;}function
idf_unescape($Q){$pb=substr($Q,-1);return
str_replace($pb.$pb,$pb,substr($Q,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($qb,$cd=false){if(get_magic_quotes_gpc()){while(list($e,$b)=each($qb)){foreach($b
as$Ka=>$z){unset($qb[$e][$Ka]);if(is_array($z)){$qb[$e][stripslashes($Ka)]=$z;$qb[]=&$qb[$e][stripslashes($Ka)];}else{$qb[$e][stripslashes($Ka)]=($cd?$z:stripslashes($z));}}}}}function
bracket_escape($Q,$Hf=false){static$Ue=array(':'=>':1',']'=>':2','['=>':3');return
strtr($Q,($Hf?array_flip($Ue):$Ue));}function
h($I){return
htmlspecialchars(str_replace("\0","",$I),ENT_QUOTES);}function
nbsp($I){return(trim($I)!=""?h($I):"&nbsp;");}function
nl_br($I){return
str_replace("\n","<br>",$I);}function
checkbox($f,$q,$db,$Ke="",$Nc="",$Ff=false){static$R=0;$R++;$c="<input type='checkbox' name='$f' value='".h($q)."'".($db?" checked":"").($Nc?' onclick="'.h($Nc).'"':'').($Ff?" class='jsonly'":"")." id='checkbox-$R'>";return($Ke!=""?"<label for='checkbox-$R'>$c".h($Ke)."</label>":$c);}function
optionlist($Jc,$Lf=null,$Ne=false){$c="";foreach($Jc
as$Ka=>$z){$Ve=array($Ka=>$z);if(is_array($z)){$c.='<optgroup label="'.h($Ka).'">';$Ve=$z;}foreach($Ve
as$e=>$b){$c.='<option'.($Ne||is_string($e)?' value="'.h($e).'"':'').(($Ne||is_string($e)?(string)$e:$b)===$Lf?' selected':'').'>'.h($b);}if(is_array($z)){$c.='</optgroup>';}}return$c;}function
html_select($f,$Jc,$q="",$Rb=true){if($Rb){return"<select name='".h($f)."'".(is_string($Rb)?' onchange="'.h($Rb).'"':"").">".optionlist($Jc,$q)."</select>";}$c="";foreach($Jc
as$e=>$b){$c.="<label><input type='radio' name='".h($f)."' value='".h($e)."'".($e==$q?" checked":"").">".h($b)."</label>";}return$c;}function
confirm($Dc="",$Tf=false){return" onclick=\"".($Tf?"eventStop(event); ":"")."return confirm('".'Sind Sie sicher ?'.($Dc?" (' + $Dc + ')":"")."');\"";}function
print_fieldset($R,$Uf,$Vf=false,$Nc=""){echo"<fieldset><legend><a href='#fieldset-$R' onclick=\"".h($Nc)."return !toggle('fieldset-$R');\">$Uf</a></legend><div id='fieldset-$R'".($Vf?"":" class='hidden'").">\n";}function
bold($Sf){return($Sf?" class='active'":"");}function
odd($c=' class="odd"'){static$l=0;if(!$c){$l=-1;}return($l++%
2?$c:'');}function
js_escape($I){return
addcslashes($I,"\r\n'\\/");}function
json_row($e,$b=null){static$_a=true;if($_a){echo"{";}if($e!=""){echo($_a?"":",")."\n\t\"".addcslashes($e,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$_a=false;}else{echo"\n}\n";$_a=true;}}function
ini_bool($Of){$b=ini_get($Of);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$c;if(!isset($c)){$c=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$c;}function
q($I){global$g;return$g->quote($I);}function
get_vals($i,$D=0){global$g;$c=array();$j=$g->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[]=$a[$D];}}return$c;}function
get_key_vals($i,$G=null){global$g;if(!is_object($G)){$G=$g;}$c=array();$j=$G->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[$a[0]]=$a[1];}}return$c;}function
get_rows($i,$G=null,$n="<p class='error'>"){global$g;if(!is_object($G)){$G=$g;}$c=array();$j=$G->query($i);if(is_object($j)){while($a=$j->fetch_assoc()){$c[]=$a;}}elseif(!$j&&$g->error&&$n&&defined("PAGE_HEADER")){echo$n.error()."\n";}return$c;}function
unique_array($a,$K){foreach($K
as$x){if(ereg("PRIMARY|UNIQUE",$x["type"])){$c=array();foreach($x["columns"]as$e){if(!isset($a[$e])){continue
2;}$c[$e]=$a[$e];}return$c;}}$c=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$c[$e]=$b;}}return$c;}function
where($s){global$v;$c=array();foreach((array)$s["where"]as$e=>$b){$c[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)||$v=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_\\")):" = ".exact_value($b));}foreach((array)$s["null"]as$e){$c[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$c);}function
where_check($b){parse_str($b,$Ze);remove_slashes(array(&$Ze));return
where($Ze);}function
where_link($l,$D,$q,$Pf="="){return"&where%5B$l%5D%5Bcol%5D=".urlencode($D)."&where%5B$l%5D%5Bop%5D=".urlencode((isset($q)?$Pf:"IS NULL"))."&where%5B$l%5D%5Bval%5D=".urlencode($q);}function
cookie($f,$q){global$uc;$kc=array($f,(ereg("\n",$q)?"":$q),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$uc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$kc[]=true;}return
call_user_func_array('setcookie',$kc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Jb,$F,$P){global$ma;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($ma))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Jb!="server"||$F!=""?urlencode($Jb)."=".urlencode($F)."&":"")."username=".urlencode($P).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($fa,$ta=null){if(isset($ta)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($fa)?$fa:$_SERVER["REQUEST_URI"]))][]=$ta;}if(isset($fa)){if($fa==""){$fa=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $fa");exit;}}function
query_redirect($i,$fa,$ta,$fd=true,$lf=true,$qe=false){global$g,$n,$o;if($lf){$qe=!$g->query($i);}$td="";if($i){$td=$o->messageQuery("$i;");}if($qe){$n=error().$td;return
false;}if($fd){redirect($fa,$ta.$td);}return
true;}function
queries($i=null){global$g;static$hb=array();if(!isset($i)){return
implode(";\n",$hb);}$hb[]=(ereg(';$',$i)?"DELIMITER ;;\n$i;\nDELIMITER ":$i);return$g->query($i);}function
apply_queries($i,$E,$sf='table'){foreach($E
as$h){if(!queries("$i ".$sf($h))){return
false;}}return
true;}function
queries_redirect($fa,$ta,$fd){return
query_redirect(queries(),$fa,$ta,$fd,false,!$fd);}function
remove_from_uri($eb=""){return
substr(preg_replace("~(?<=[?&])($eb".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Y,$Af){return" ".($Y==$Af?$Y+1:'<a href="'.h(remove_from_uri("page").($Y?"&page=$Y":"")).'">'.($Y+1)."</a>");}function
get_file($e,$_d=false){$Ga=$_FILES[$e];if(!$Ga||$Ga["error"]){return$Ga["error"];}$c=file_get_contents($_d&&ereg('\\.gz$',$Ga["name"])?"compress.zlib://$Ga[tmp_name]":($_d&&ereg('\\.bz2$',$Ga["name"])?"compress.bzip2://$Ga[tmp_name]":$Ga["tmp_name"]));if($_d){$Hb=substr($c,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Hb,$pe)){$c=iconv("utf-16","utf-8",$c);}elseif($Hb=="\xEF\xBB\xBF"){$c=substr($c,3);}}return$c;}function
upload_error($n){$we=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?'Hochladen von Datei fehlgeschlagen.'.($we?" ".sprintf('Maximal erlaubte Dateigrösse ist %sB.',$we):""):'Datei existiert nicht.');}function
repeat_pattern($ca,$W){return
str_repeat("$ca{0,65535}",$W/65535)."$ca{0,".($W
%
65535)."}";}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($I,$W=80,$yf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$W).")($)?)u",$I,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$W).")($)?)",$I,$k);}return
h($k[1]).$yf.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($qb,$xf=array()){while(list($e,$b)=each($qb)){if(is_array($b)){foreach($b
as$Ka=>$z){$qb[$e."[$Ka]"]=$z;}}elseif(!in_array($e,$xf)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$o;$c=array();foreach($o->foreignKeys($h)as$C){foreach($C["source"]as$b){$c[$b][]=$C;}}return$c;}function
enum_input($_,$Ua,$d,$q,$Yb=null){global$o;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$sa);$c=(isset($Yb)?"<label><input type='$_'$Ua value='$Yb'".((is_array($q)?in_array($Yb,$q):$q===0)?" checked":"")."><i>".'leer'."</i></label>":"");foreach($sa[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$db=(is_int($q)?$q==$l+1:(is_array($q)?in_array($l+1,$q):$q===$b));$c.=" <label><input type='$_'$Ua value='".($l+1)."'".($db?' checked':'').'>'.h($o->editVal($b,$d)).'</label>';}return$c;}function
input($d,$q,$N){global$S,$o,$v;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$De=($v=="mssql"&&$d["auto_increment"]);if($De&&!$_POST["save"]){$N=null;}$aa=(isset($_GET["select"])||$De?array("orig"=>'Original'):array())+$o->editFunctions($d);$Ua=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($aa[""])."<td>".$o->editInput($_GET["edit"],$d,$Ua,$q);}else{$_a=0;foreach($aa
as$e=>$b){if($e===""||!$b){break;}$_a++;}$Rb=($_a?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($d["field"])))."]']; if ($_a > f.selectedIndex) f.selectedIndex = $_a;\"":"");$Ua.=$Rb;echo(count($aa)>1?html_select("function[$f]",$aa,!isset($N)||in_array($N,$aa)||isset($aa[$N])?$N:"","functionChange(this);"):nbsp(reset($aa))).'<td>';$Ee=$o->editInput($_GET["edit"],$d,$Ua,$q);if($Ee!=""){echo$Ee;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$sa);foreach($sa[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$db=(is_int($q)?($q>>$l)&1:in_array($b,explode(",",$q),true));echo" <label><input type='checkbox' name='fields[$f][$l]' value='".(1<<$l)."'".($db?' checked':'')."$Rb>".h($o->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Rb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($v!="sqlite"||ereg("\n",$q)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ua>".h($q).'</textarea>';}else{$Cd=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$k)?((ereg("binary",$d["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$d["unsigned"]?1:0)):($S[$d["type"]]?$S[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($q)."'".($Cd?" maxlength='$Cd'":"").(ereg('char|binary',$d["type"])&&$Cd>20?" size='40'":"")."$Ua>";}}}function
process_input($d){global$o;$Q=bracket_escape($d["field"]);$N=$_POST["function"][$Q];$q=$_POST["fields"][$Q];if($d["type"]=="enum"){if($q==-1){return
false;}if($q==""){return"NULL";}return+$q;}if($d["auto_increment"]&&$q==""){return
null;}if($N=="orig"){return($d["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($d["field"]):false);}if($N=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$q);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$Ga=get_file("fields-$Q");if(!is_string($Ga)){return
false;}return
q($Ga);}return$o->processInput($d,$q,$N);}function
search_tables(){global$o,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$oa=false;foreach(table_status()as$h=>$u){$f=$o->tableName($u);if(isset($u["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$j=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$o->selectSearchProcess(fields($h),array())),1));if($j->fetch_row()){if(!$oa){echo"<ul>\n";$oa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($oa?"</ul>":"<p class='message'>".'Keine Tabellen.')."\n";}function
dump_headers($Lc,$Bd=false){global$o;$c=$o->dumpHeaders($Lc,$Bd);$Ma=$_POST["output"];if($Ma!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Lc!=""?$Lc:(SERVER!=""?SERVER:"localhost")).".$c".($Ma!="file"&&!ereg('[^0-9a-z]',$Ma)?".$Ma":""));}session_write_close();return$c;}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($N,$D){return($N?($N=="unixepoch"?"DATETIME($D, '$N')":($N=="count distinct"?"COUNT(DISTINCT ":strtoupper("$N("))."$D)"):$D);}function
password_file(){$Vc=ini_get("upload_tmp_dir");if(!$Vc){if(function_exists('sys_get_temp_dir')){$Vc=sys_get_temp_dir();}else{$ka=@tempnam("","");if(!$ka){return
false;}$Vc=dirname($ka);unlink($ka);}}$ka="$Vc/adminer.key";$c=@file_get_contents($ka);if($c){return$c;}$Ja=@fopen($ka,"w");if($Ja){$c=md5(uniqid(mt_rand(),true));fwrite($Ja,$c);fclose($Ja);}return$c;}function
is_mail($uf){$Ce='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ca="$Ce+(\\.$Ce+)*@($pc?\\.)+$pc";return
preg_match("(^$ca(,\\s*$ca)*\$)i",$uf);}function
is_url($I){$pc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($pc?\\.)+$pc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$I,$k)?strtolower($k[1]):"");}global$o,$g,$ma,$Gb,$Db,$n,$aa,$gb,$uc,$Zb,$v,$Bf,$Wf,$Ea,$Na,$O,$Xf,$S,$jb,$ic;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$uc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$kc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$uc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$kc[]=true;}call_user_func_array('session_set_cookie_params',$kc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$cd);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'de';}function
lang($Qf,$_e){$vc=($_e==1?0:1);return
sprintf($Qf[$vc],$_e);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($pf,$P,$T,$zf='auth_error'){set_exception_handler($zf);parent::__construct($pf,$P,$T);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($i,$Ya=false){$j=parent::query($i);if(!$j){$wf=$this->errorInfo();$this->error=$wf[2];return
false;}$this->store_result($j);return$j;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result($j=null){if(!$j){$j=$this->_result;}if($j->columnCount()){$j->num_rows=$j->rowCount();return$j;}$this->affected_rows=$j->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($i,$d=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$ma=array();$ma["sqlite"]="SQLite 3";$ma["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$sc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ka){$this->_link=new
SQLite3($ka);$Kd=$this->_link->version();$this->server_info=$Kd["versionString"];}function
query($i){$j=@$this->_link->query($i);if(!$j){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($j->numColumns()){return
new
Min_Result($j);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($I){return"'".$this->_link->escapeString($I)."'";}function
store_result(){return$this->_result;}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$D=$this->_offset++;$_=$this->_result->columnType($D);return(object)array("name"=>$this->_result->columnName($D),"type"=>$_,"charsetnr"=>($_==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ka){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ka);}function
query($i,$Ya=false){$vf=($Ya?"unbufferedQuery":"query");$j=@$this->_link->$vf($i,SQLITE_BOTH,$n);if(!$j){$this->error=$n;return
false;}elseif($j===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($j);}function
quote($I){return"'".sqlite_escape_string($I)."'";}function
store_result(){return$this->_result;}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;if(method_exists($j,'numRows')){$this->num_rows=$j->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$c=array();foreach($a
as$e=>$b){$c[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$c;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$ca='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ca\\.)?$ca\$~",$f,$k)){$h=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ka){$this->dsn(DRIVER.":$ka","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ka){if(is_readable($ka)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ka)?$ka:dirname($_SERVER["SCRIPT_FILENAME"])."/$ka")." AS a")){$this->Min_SQLite($ka);return
true;}return
false;}function
multi_query($i){return$this->_result=$this->query($i);}function
next_result(){return
false;}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($i,$s,$M,$L=0,$bb=" "){return" $i$s".(isset($M)?$bb."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($i,$s){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($i,$s,1):" $i$s");}function
db_collation($t,$Z){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($A){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$c[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$c[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$c[$f]:$c);}function
is_view($u){return$u["Engine"]=="view";}function
fk_support($u){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$c=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$_=strtolower($a["type"]);$xa=$a["dflt_value"];$c[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$_)?"integer":(eregi("char|clob|text",$_)?"text":(eregi("blob",$_)?"blob":(eregi("real|floa|doub",$_)?"real":"numeric")))),"full_type"=>$_,"default"=>(ereg("'(.*)'",$xa,$k)?str_replace("''","'",$k[1]):($xa=="NULL"?null:$xa)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$_)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$c;}function
indexes($h,$G=null){$c=array();$Pa=array();foreach(fields($h)as$d){if($d["primary"]){$Pa[]=$d["field"];}}if($Pa){$c[""]=array("type"=>"PRIMARY","columns"=>$Pa,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$c[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$c[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$Pc){$c[$a["name"]]["columns"][]=$Pc["name"];}}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$C=&$c[$a["id"]];if(!$C){$C=$a;}$C["source"][]=$a["from"];$C["target"][]=$a["to"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
check_sqlite_name($f){global$g;$Fe="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Fe)\$~",$f)){$g->error=sprintf('Bitte einen der Dateitypen %s benutzen.',str_replace("|",", ",$Fe));return
false;}return
true;}function
create_database($t,$U){global$g;if(file_exists($t)){$g->error='Datei existiert schon.';return
false;}if(!check_sqlite_name($t)){return
false;}$y=new
Min_SQLite($t);$y->query('PRAGMA encoding = "UTF-8"');$y->query('CREATE TABLE adminer (i)');$y->query('DROP TABLE adminer');return
true;}function
drop_databases($A){global$g;$g->Min_SQLite(":memory:");foreach($A
as$t){if(!@unlink($t)){$g->error='Datei existiert schon.';return
false;}}return
true;}function
rename_database($f,$U){global$g;if(!check_sqlite_name($f)){return
false;}$g->Min_SQLite(":memory:");$g->error='Datei existiert schon.';return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$p,$La,$za,$wb,$U,$Sa,$rb){$w=array();foreach($p
as$d){if($d[1]){$w[]=($h!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$w=array_merge($w,$La);if($h!=""){foreach($w
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$w)."\n)")){return
false;}if($Sa){queries("UPDATE sqlite_sequence SET seq = $Sa WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$w){foreach($w
as$b){if(!queries($b[2]=="DROP"?"DROP INDEX ".idf_escape($b[1]):"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return
true;}function
truncate_tables($E){return
apply_queries("DELETE FROM",$E);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
move_tables($E,$X,$ea){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$k);$c[$a["name"]]=array($k[1],$k[2]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$_){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Pa){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
found_rows($u,$s){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($zd){return
true;}function
create_sql($h,$Sa){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($da){}function
trigger_sql($h,$V){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$c=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$c[$e]=$g->result("PRAGMA $e");}return$c;}function
show_status(){$c=array();foreach(get_vals("PRAGMA compile_options")as$_f){list($e,$b)=explode("=",$_f,2);$c[$e]=$b;}return$c;}function
support($ub){return
ereg('^(view|trigger|variables|status|dump)$',$ub);}$v="sqlite";$S=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Na=array_keys($S);$jb=array();$Sb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$aa=array("hex","length","lower","round","unixepoch","upper");$gb=array("avg","count","count distinct","group_concat","max","min","sum");$Gb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$ma["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$sc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($tf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$P,$T){global$o;$t=$o->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' user='".addcslashes($P,"'\\")."' password='".addcslashes($T,"'\\")."'";$this->_link=@pg_connect($this->_string.($t!=""?" dbname='".addcslashes($t,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$t!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Kd=pg_version($this->_link);$this->server_info=$Kd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($I){return"'".pg_escape_string($this->_link,$I)."'";}function
select_db($da){global$o;if($da==$o->database()){return$this->_database;}$c=@pg_connect("$this->_string dbname='".addcslashes($da,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($c){$this->_link=$c;}return$c;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($i,$Ya=false){$j=@pg_query($this->_link,$i);if(!$j){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($j)){$this->affected_rows=pg_affected_rows($j);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
pg_fetch_result($j->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=pg_num_rows($j);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$D=$this->_offset++;$c=new
stdClass;if(function_exists('pg_field_table')){$c->orgtable=pg_field_table($this->_result,$D);}$c->name=pg_field_name($this->_result,$D);$c->orgname=$c->name;$c->type=pg_field_type($this->_result,$D);$c->charsetnr=($c->type=="bytea"?63:0);return$c;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($F,$P,$T){global$o;$t=$o->database();$I="pgsql:host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($I.($t!=""?" dbname='".addcslashes($t,"'\\")."'":""),$P,$T);return
true;}function
select_db($da){global$o;return($o->database()==$da);}function
close(){}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$wa=$o->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($i,$s,$M,$L=0,$bb=" "){return" $i$s".(isset($M)?$bb."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($i,$s){return" $i$s";}function
db_collation($t,$Z){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($A){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$c[$a["Name"]]=$a;}return($f!=""?$c[$f]:$c);}function
is_view($u){return$u["Engine"]=="view";}function
fk_support($u){return
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
ORDER BY a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$k);list(,$a["type"],,$a["length"])=$k;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$a["default"],$k)){$a["default"]=($k[1][0]=="'"?idf_unescape($k[1]):$k[1]);}$c[$a["field"]]=$a;}return$c;}function
indexes($h,$G=null){global$g;if(!is_object($G)){$G=$g;}$c=array();$me=$G->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $me AND attnum > 0",$G);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $me AND ci.oid = i.indexrelid",$G)as$a){$c[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$c[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$mf){$c[$a["relname"]]["columns"][]=$B[$mf];}$c[$a["relname"]]["lengths"]=array();}return$c;}function
foreign_keys($h){global$Ea;$c=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT oid FROM pg_class WHERE relname = ".q($h).")
AND contype = 'f'::char
ORDER BY conkey, conname")as$a){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$a['definition'],$k)){$a['source']=array_map('trim',explode(',',$k[1]));$a['table']=$k[2];if(preg_match('~(.+)\.(.+)~',$k[2],$Ub)){$a['ns']=$Ub[1];$a['table']=$Ub[2];}$a['target']=array_map('trim',explode(',',$k[3]));$a['on_delete']=(preg_match("~ON DELETE ($Ea)~",$k[4],$Ub)?$Ub[1]:'');$a['on_update']=(preg_match("~ON UPDATE ($Ea)~",$k[4],$Ub)?$Ub[1]:'');$c[$a['conname']]=$a;}}return$c;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($t){return($t=="information_schema");}function
error(){global$g;$c=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$c,$k)){$c=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($c);}function
exact_value($b){return
q($b);}function
create_database($t,$U){return
queries("CREATE DATABASE ".idf_escape($t).($U?" ENCODING ".idf_escape($U):""));}function
drop_databases($A){global$g;$g->close();return
apply_queries("DROP DATABASE",$A,'idf_escape');}function
rename_database($f,$U){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$p,$La,$za,$wb,$U,$Sa,$rb){$w=array();$hb=array();foreach($p
as$d){$D=idf_escape($d[0]);$b=$d[1];if(!$b){$w[]="DROP $D";}else{$ud=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$w[]=($h!=""?"ADD ":"  ").implode($b);}else{if($D!=$b[0]){$hb[]="ALTER TABLE ".table($h)." RENAME $D TO $b[0]";}$w[]="ALTER $D TYPE$b[1]";if(!$b[6]){$w[]="ALTER $D ".($b[3]?"SET$b[3]":"DROP DEFAULT");$w[]="ALTER $D ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$ud!=""){$hb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($ud!=""?substr($ud,9):"''");}}}$w=array_merge($w,$La);if($h==""){array_unshift($hb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$w)."\n)");}elseif($w){array_unshift($hb,"ALTER TABLE ".table($h)."\n".implode(",\n",$w));}if($h!=""&&$h!=$f){$hb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$za!=""){$hb[]="COMMENT ON TABLE ".table($f)." IS ".q($za);}if($Sa!=""){}foreach($hb
as$i){if(!queries($i)){return
false;}}return
true;}function
alter_indexes($h,$w){$ja=array();$Ha=array();foreach($w
as$b){if($b[0]!="INDEX"){$ja[]=($b[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").$b[2]);}elseif($b[2]=="DROP"){$Ha[]=idf_escape($b[1]);}elseif(!queries("CREATE INDEX ".idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return((!$ja||queries("ALTER TABLE ".table($h).implode(",",$ja)))&&(!$Ha||queries("DROP INDEX ".implode(", ",$Ha))));}function
truncate_tables($E){return
queries("TRUNCATE ".implode(", ",array_map('table',$E)));return
true;}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$X,$ea){foreach($E
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($ea))){return
false;}}foreach($X
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($ea))){return
false;}}return
true;}function
trigger($f){$H=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$c[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$c;}function
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
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Pa){global$g;$pa=array();$s=array();foreach($r
as$e=>$b){$pa[]="$e = $b";if(isset($Pa[idf_unescape($e)])){$s[]="$e = $b";}}return($s&&queries("UPDATE ".table($h)." SET ".implode(", ",$pa)." WHERE ".implode(" AND ",$s))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
found_rows($u,$s){global$g;if(ereg(" rows=([0-9]+)",$g->result("EXPLAIN SELECT * FROM ".idf_escape($u["Name"]).($s?" WHERE ".implode(" AND ",$s):"")),$pe)){return$pe[1];}return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Oa){global$g,$S,$Na;$c=$g->query("SET search_path TO ".idf_escape($Oa));foreach(types()as$_){if(!isset($S[$_])){$S[$_]=0;$Na['Benutzer-definierte Typen'][]=$_;}}return$c;}function
use_sql($da){return"\connect ".idf_escape($da);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($ub){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$ub);}$v="pgsql";$S=array();$Na=array();foreach(array('Zahlen'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Datum oder Zeit'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Zeichenketten'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binär'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Netzwerk'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometrie'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$S+=$b;$Na[$e]=array_keys($b);}$jb=array();$Sb=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$aa=array("char_length","lower","round","to_hex","to_timestamp","upper");$gb=array("avg","count","count distinct","max","min","sum");$Gb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$ma["oracle"]="Oracle";if(isset($_GET["oracle"])){$sc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($tf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$P,$T){$this->_link=@oci_new_connect($P,$T,$F,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($da){return
true;}function
query($i,$Ya=false){$j=oci_parse($this->_link,$i);if(!$j){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$c=@oci_execute($j);restore_error_handler();if($c){if(oci_num_fields($j)){return
new
Min_Result($j);}$this->affected_rows=oci_num_rows($j);}return$c;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=1){$j=$this->query($i);if(!is_object($j)||!oci_fetch($j->_result)){return
false;}return
oci_result($j->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$D=$this->_offset++;$c=new
stdClass;$c->name=oci_field_name($this->_result,$D);$c->orgname=$c->name;$c->type=oci_field_type($this->_result,$D);$c->charsetnr=(ereg("raw|blob|bfile",$c->type)?63:0);return$c;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($F,$P,$T){$this->dsn("oci:dbname=//$F;charset=AL32UTF8",$P,$T);return
true;}function
select_db($da){return
true;}}}function
idf_escape($Q){return'"'.str_replace('"','""',$Q).'"';}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$wa=$o->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($i,$s,$M,$L=0,$bb=" "){return($L?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $i$s) t WHERE rownum <= ".($M+$L).") WHERE rnum > $L":(isset($M)?" * FROM (SELECT $i$s) WHERE rownum <= ".($M+$L):" $i$s"));}function
limit1($i,$s){return" $i$s";}function
db_collation($t,$Z){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($A){return
array();}function
table_status($f=""){$c=array();$re=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $re":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $re":""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($u){return$u["Engine"]=="view";}function
fk_support($u){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$_=$a["DATA_TYPE"];$W="$a[DATA_PRECISION],$a[DATA_SCALE]";if($W==","){$W=$a["DATA_LENGTH"];}$c[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$_.($W?"($W)":""),"type"=>strtolower($_),"length"=>$W,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($h)."
ORDER BY uc.constraint_type, uic.column_position",$G)as$a){$c[$a["INDEX_NAME"]]["type"]=($a["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($a["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$c[$a["INDEX_NAME"]]["columns"][]=$a["COLUMN_NAME"];$c[$a["INDEX_NAME"]]["lengths"][]=($a["CHAR_LENGTH"]&&$a["CHAR_LENGTH"]!=$a["COLUMN_LENGTH"]?$a["CHAR_LENGTH"]:null);}return$c;}function
view($f){$H=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($H);}function
collations(){return
array();}function
information_schema($t){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$i){$g->query("EXPLAIN PLAN FOR $i");return$g->query("SELECT * FROM plan_table");}function
found_rows($u,$s){}function
alter_table($h,$f,$p,$La,$za,$wb,$U,$Sa,$rb){$w=$Ha=array();foreach($p
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$w[]=($h!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ha[]=idf_escape($d[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$w)."\n)");}return(!$w||queries("ALTER TABLE ".table($h)."\n".implode("\n",$w)))&&(!$Ha||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ha).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($X){return
apply_queries("DROP VIEW",$X);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
begin(){return
true;}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($zd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$H=get_rows('SELECT * FROM v$instance');return
reset($H);}function
support($ub){return
ereg("view|drop_col|variables|status",$ub);}$v="oracle";$S=array();$Na=array();foreach(array('Zahlen'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Datum oder Zeit'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Zeichenketten'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binär'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$S+=$b;$Na[$e]=array_keys($b);}$jb=array();$Sb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$aa=array("length","lower","round","upper");$gb=array("avg","count","count distinct","max","min","sum");$Gb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$ma["mssql"]="MS SQL";if(isset($_GET["mssql"])){$sc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($F,$P,$T){$this->_link=@sqlsrv_connect($F,array("UID"=>$P,"PWD"=>$T));if($this->_link){$kf=sqlsrv_server_info($this->_link);$this->server_info=$kf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($da){return$this->query("USE $da");}function
query($i,$Ya=false){$j=sqlsrv_query($this->_link,$i);if(!$j){$this->_get_error();return
false;}return$this->store_result($j);}function
multi_query($i){$this->_result=sqlsrv_query($this->_link,$i);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($j=null){if(!$j){$j=$this->_result;}if(sqlsrv_field_metadata($j)){return
new
Min_Result($j);}$this->affected_rows=sqlsrv_rows_affected($j);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$c=new
stdClass;$c->name=$d["Name"];$c->orgname=$d["Name"];$c->type=($d["Type"]==1?254:0);return$c;}function
seek($L){for($l=0;$l<$L;$l++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($F,$P,$T){$this->_link=@mssql_connect($F,$P,$T);if($this->_link){$j=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$j->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($da){return
mssql_select_db($da);}function
query($i,$Ya=false){$j=mssql_query($i,$this->_link);if(!$j){$this->error=mssql_get_last_message();return
false;}if($j===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}return
mssql_result($j->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=mssql_num_rows($j);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$c=mssql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;return$c;}function
seek($L){mssql_data_seek($this->_result,$L);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($Q){return"[".str_replace("]","]]",$Q)."]";}function
table($Q){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$wa=$o->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($i,$s,$M,$L=0,$bb=" "){return(isset($M)?" TOP (".($M+$L).")":"")." $i$s";}function
limit1($i,$s){return
limit($i,$s,1);}function
db_collation($t,$Z){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($t));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($A){global$g;$c=array();foreach($A
as$t){$g->select_db($t);$c[$t]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($u){return$u["Engine"]=="VIEW";}function
fk_support($u){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$_=$a["type"];$W=(ereg("char|binary",$_)?$a["max_length"]:($_=="decimal"?"$a[precision],$a[scale]":""));$c[$a["name"]]=array("field"=>$a["name"],"full_type"=>$_.($W?"($W)":""),"type"=>$_,"length"=>$W,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$G)as$a){$c[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$c[$a["name"]]["lengths"]=array();$c[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$c;}function
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
drop_databases($A){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$A)));}function
rename_database($f,$U){if(eregi('^[a-z0-9_]+$',$U)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $U");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($h,$f,$p,$La,$za,$wb,$U,$Sa,$rb){$w=array();foreach($p
as$d){$D=idf_escape($d[0]);$b=$d[1];if(!$b){$w["DROP"][]=" COLUMN $D";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$w["ADD"][]="\n  ".implode("",$b).($h==""?substr($La[$b[0]],16+strlen($b[0])):"");}else{unset($b[6]);if($D!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$D").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$w["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$w["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}if($La){$w[""]=$La;}foreach($w
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $e".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$w){$x=array();$Ha=array();foreach($w
as$b){if($b[2]=="DROP"){if($b[0]=="PRIMARY"){$Ha[]=idf_escape($b[1]);}else{$x[]=idf_escape($b[1])." ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[2]")){return
false;}}return(!$x||queries("DROP INDEX ".implode(", ",$x)))&&(!$Ha||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ha)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$Pa){$pa=array();$s=array();foreach($r
as$e=>$b){$pa[]="$e = $b";if(isset($Pa[idf_unescape($e)])){$s[]="$e = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$r).")) AS source (c".implode(", c",range(1,count($r))).") ON ".implode(" AND ",$s)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$pa)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$i){$g->query("SET SHOWPLAN_ALL ON");$c=$g->query($i);$g->query("SET SHOWPLAN_ALL OFF");return$c;}function
found_rows($u,$s){}function
foreign_keys($h){$c=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$C=&$c[$a["FK_NAME"]];$C["table"]=$a["PKTABLE_NAME"];$C["source"][]=$a["FKCOLUMN_NAME"];$C["target"][]=$a["PKCOLUMN_NAME"];}return$c;}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$X,$ea){return
apply_queries("ALTER SCHEMA ".idf_escape($ea)." TRANSFER",array_merge($E,$X));}function
trigger($f){$H=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$c=reset($H);if($c){$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);}return$c;}function
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
set_schema($Oa){return
true;}function
use_sql($da){return"USE ".idf_escape($da);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($ub){return
ereg('^(scheme|trigger|view|drop_col)$',$ub);}$v="mssql";$S=array();$Na=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Datum oder Zeit'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Zeichenketten'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binär'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$S+=$b;$Na[$e]=array_keys($b);}$jb=array();$Sb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$aa=array("len","lower","round","upper");$gb=array("avg","count","count distinct","max","min","sum");$Gb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$ma=array("server"=>"MySQL")+$ma;if(!defined("DRIVER")){$sc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($F,$P,$T){mysqli_report(MYSQLI_REPORT_OFF);list($nf,$Zc)=explode(":",$F,2);$c=@$this->real_connect(($F!=""?$nf:ini_get("mysqli.default_host")),($F.$P!=""?$P:ini_get("mysqli.default_user")),($F.$P.$T!=""?$T:ini_get("mysqli.default_pw")),null,(is_numeric($Zc)?$Zc:ini_get("mysqli.default_port")),(!is_numeric($Zc)?$Zc:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($i,$d=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch_array();return$a[$d];}function
quote($I){return"'".$this->escape_string($I)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($F,$P,$T){$this->_link=@mysql_connect(($F!=""?$F:ini_get("mysql.default_host")),("$F$P"!=""?$P:ini_get("mysql.default_user")),("$F$P$T"!=""?$T:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($I){return"'".mysql_real_escape_string($I,$this->_link)."'";}function
select_db($da){return
mysql_select_db($da,$this->_link);}function
query($i,$Ya=false){$j=@($Ya?mysql_unbuffered_query($i,$this->_link):mysql_query($i,$this->_link));if(!$j){$this->error=mysql_error($this->_link);return
false;}if($j===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
mysql_result($j->_result,0,$d);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($j){$this->_result=$j;$this->num_rows=mysql_num_rows($j);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result,$this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($F,$P,$T){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$F)),$P,$T);$this->query("SET NAMES utf8");return
true;}function
select_db($da){return$this->query("USE ".idf_escape($da));}function
query($i,$Ya=false){$this->setAttribute(1000,!$Ya);return
parent::query($i,$Ya);}}}function
idf_escape($Q){return"`".str_replace("`","``",$Q)."`";}function
table($Q){return
idf_escape($Q);}function
connect(){global$o;$g=new
Min_DB;$wa=$o->credentials();if($g->connect($wa[0],$wa[1],$wa[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($of=true){global$g;$c=&get_session("dbs");if(!isset($c)){if($of){restart_session();ob_flush();flush();}$c=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$c;}function
limit($i,$s,$M,$L=0,$bb=" "){return" $i$s".(isset($M)?$bb."LIMIT $M".($L?" OFFSET $L":""):"");}function
limit1($i,$s){return
limit($i,$s,1);}function
db_collation($t,$Z){global$g;$c=null;$ja=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1);if(preg_match('~ COLLATE ([^ ]+)~',$ja,$k)){$c=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ja,$k)){$c=$Z[$k[1]][-1];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$c[]=$a["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($A){$c=array();foreach($A
as$t){$c[$t]=count(get_vals("SHOW TABLES IN ".idf_escape($t)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($u){return!isset($u["Rows"]);}function
fk_support($u){return
eregi("InnoDB|IBMDB2I",$u["Engine"]);}function
fields($h){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$k);$c[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($a["Default"]!=""||ereg("char",$k[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$k)?$k[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$G)as$a){$c[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$c[$a["Key_name"]]["columns"][]=$a["Column_name"];$c[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$c;}function
foreign_keys($h){global$g,$Ea;static$ca='`(?:[^`]|``)+`';$c=array();$ue=$g->result("SHOW CREATE TABLE ".table($h),1);if($ue){preg_match_all("~CONSTRAINT ($ca) FOREIGN KEY \\(((?:$ca,? ?)+)\\) REFERENCES ($ca)(?:\\.($ca))? \\(((?:$ca,? ?)+)\\)(?: ON DELETE ($Ea))?(?: ON UPDATE ($Ea))?~",$ue,$sa,PREG_SET_ORDER);foreach($sa
as$k){preg_match_all("~$ca~",$k[2],$Ca);preg_match_all("~$ca~",$k[5],$ea);$c[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Ca[0]),"target"=>array_map('idf_unescape',$ea[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$c[$a["Charset"]][-1]=$a["Collation"];}else{$c[$a["Charset"]][]=$a["Collation"];}}ksort($c);foreach($c
as$e=>$b){asort($c[$e]);}return$c;}function
information_schema($t){global$g;return($g->server_info>=5&&$t=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($t,$U){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($t).($U?" COLLATE ".q($U):""));}function
drop_databases($A){set_session("dbs",null);return
apply_queries("DROP DATABASE",$A,'idf_escape');}function
rename_database($f,$U){if(create_database($f,$U)){$fc=array();foreach(tables_list()as$h=>$_){$fc[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$fc||queries("RENAME TABLE ".implode(", ",$fc))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$Md=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$x){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$x["columns"],true)){$Md="";break;}if($x["type"]=="PRIMARY"){$Md=" UNIQUE";}}}return" AUTO_INCREMENT$Md";}function
alter_table($h,$f,$p,$La,$za,$wb,$U,$Sa,$rb){$w=array();foreach($p
as$d){$w[]=($d[1]?($h!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($h!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$w=array_merge($w,$La);$ec="COMMENT=".q($za).($wb?" ENGINE=".q($wb):"").($U?" COLLATE ".q($U):"").($Sa!=""?" AUTO_INCREMENT=$Sa":"").$rb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$w)."\n) $ec");}if($h!=$f){$w[]="RENAME TO ".table($f);}$w[]=$ec;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$w));}function
alter_indexes($h,$w){foreach($w
as$e=>$b){$w[$e]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($h).implode(",",$w));}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($X){return
queries("DROP VIEW ".implode(", ",array_map('table',$X)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$X,$ea){$fc=array();foreach(array_merge($E,$X)as$h){$fc[]=table($h)." TO ".idf_escape($ea).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$fc));}function
copy_tables($E,$X,$ea){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($E
as$h){$f=($ea==DB?table("copy_$h"):idf_escape($ea).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($X
as$h){$f=($ea==DB?table("copy_$h"):idf_escape($ea).".".table($h));$bc=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $bc[select]")){return
false;}}return
true;}function
trigger($f){$H=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$c[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$_){global$g,$Db,$Zb,$S;$rf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$te="((".implode("|",array_merge(array_keys($S),$rf)).")(?:\\s*\\(((?:[^'\")]*|$Db)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ca="\\s*(".($_=="FUNCTION"?"":$Zb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$te";$ja=$g->result("SHOW CREATE $_ ".idf_escape($f),2);preg_match("~\\(((?:$ca\\s*,?)*)\\)".($_=="FUNCTION"?"\\s*RETURNS\\s+$te":"")."\\s*(.*)~is",$ja,$k);$p=array();preg_match_all("~$ca\\s*,?~is",$k[1],$sa,PREG_SET_ORDER);foreach($sa
as$eb){$f=str_replace("``","`",$eb[2]).$eb[3];$p[]=array("field"=>$f,"type"=>strtolower($eb[5]),"length"=>preg_replace_callback("~$Db~s",'normalize_enum',$eb[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$eb[8] $eb[7]"))),"full_type"=>$eb[4],"inout"=>strtoupper($eb[1]),"collation"=>strtolower($eb[9]),);}if($_!="FUNCTION"){return
array("fields"=>$p,"definition"=>$k[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
insert_update($h,$r,$Pa){foreach($r
as$e=>$b){$r[$e]="$e = $b";}$pa=implode(", ",$r);return
queries("INSERT INTO ".table($h)." SET $pa ON DUPLICATE KEY UPDATE $pa");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
found_rows($u,$s){return($s||$u["Engine"]!="InnoDB"?null:$u["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Oa){return
true;}function
create_sql($h,$Sa){global$g;$c=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Sa){$c=preg_replace('~ AUTO_INCREMENT=\\d+~','',$c);}return$c;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($da){return"USE ".idf_escape($da);}function
trigger_sql($h,$V){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$c.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($ub){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$ub);}$v="sql";$S=array();$Na=array();foreach(array('Zahlen'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Datum oder Zeit'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Zeichenketten'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binär'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Listen'=>array("enum"=>65535,"set"=>64),)as$e=>$b){$S+=$b;$Na[$e]=array_keys($b);}$jb=array("unsigned","zerofill","unsigned zerofill");$Sb=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$aa=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$gb=array("avg","count","count distinct","group_concat","max","min","sum");$Gb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ic="3.3.2";class
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
loginForm(){global$ma;echo'<table cellspacing="0">
<tr><th>Datenbank System<td>',html_select("driver",$ma,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Benutzer<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Passwort<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Passwort speichern')."\n";}function
login($Yf,$T){return
true;}function
tableName($bd){return
h($bd["Name"]);}function
fieldName($d,$cb=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($bd,$r=""){echo'<p class="tabs">';$ua=array("select"=>'Daten auswählen',"table"=>'Struktur anzeigen');if(is_view($bd)){$ua["view"]='View ändern';}else{$ua["create"]='Tabelle ändern';}if(isset($r)){$ua["edit"]='Neuer Datensatz';}foreach($ua
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($bd["Name"]).($e=="edit"?$r:"")."'".bold(isset($_GET[$e])).">$b</a>";}echo"\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$bg){return
array();}function
backwardKeysPrint($ag,$a){}function
selectQuery($i){global$v;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Letzte Seite'."'>&gt;&gt;</a> <code class='jush-$v'>".h(str_replace("\n"," ",$i))."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".'Ändern'."</a></p>\n";}function
rowDescription($h){return"";}function
rowDescriptions($H,$Cf){return$H;}function
selectVal($b,$y,$d){$c=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$c=lang(array('%d Byte','%d Bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($y?"<a href='$y'>$c</a>":$c);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($J,$B){global$aa,$gb;print_fieldset("select",'Daten zeigen von',$J);$l=0;$Ie=array('Funktionen'=>$aa,'Agregationen'=>$gb);foreach($J
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$Ie,$b["fun"]),"(<select name='columns[$l][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$l++;}echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$Ie,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$l][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($s,$B,$K){print_fieldset("search",'Suchen',$s);foreach($K
as$l=>$x){if($x["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$x["columns"]))."</i>) AGAINST"," <input name='fulltext[$l]' value='".h($_GET["fulltext"][$l])."'>",checkbox("boolean[$l]",1,isset($_GET["boolean"][$l]),"BOOL"),"<br>\n";}}$l=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$l][col]'><option value=''>(".'beliebig'.")".optionlist($B,$b["col"],true)."</select>",html_select("where[$l][op]",$this->operators,$b["op"]),"<input name='where[$l][val]' value='".h($b["val"])."'></div>\n";$l++;}}echo"<div><select name='where[$l][col]' onchange='selectAddRow(this);'><option value=''>(".'beliebig'.")".optionlist($B,null,true)."</select>",html_select("where[$l][op]",$this->operators,"="),"<input name='where[$l][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($cb,$B,$K){print_fieldset("sort",'Ordnen',$cb);$l=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($B[$b])){echo"<div><select name='order[$l]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$l]",1,isset($_GET["desc"][$e]),'absteigend')."</div>\n";$l++;}}echo"<div><select name='order[$l]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>","<label><input type='checkbox' name='desc[$l]' value='1'>".'absteigend'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($M){echo"<fieldset><legend>".'Begrenzung'."</legend><div>";echo"<input name='limit' size='3' value='".h($M)."'>","</div></fieldset>\n";}function
selectLengthPrint($Eb){if(isset($Eb)){echo"<fieldset><legend>".'Textlänge'."</legend><div>",'<input name="text_length" size="3" value="'.h($Eb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Aktion'."</legend><div>","<input type='submit' value='".'Daten zeigen von'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Zf,$B){}function
selectColumnsProcess($B,$K){global$aa,$gb;$J=array();$qa=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$aa)||in_array($b["fun"],$gb)))){$J[$e]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$gb)){$qa[]=$J[$e];}}}return
array($J,$qa);}function
selectSearchProcess($p,$K){global$v;$c=array();foreach($K
as$l=>$x){if($x["type"]=="FULLTEXT"&&$_GET["fulltext"][$l]!=""){$c[]="MATCH (".implode(", ",array_map('idf_escape',$x["columns"])).") AGAINST (".q($_GET["fulltext"][$l]).(isset($_GET["boolean"][$l])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Pb=" $b[op]";if(ereg('IN$',$b["op"])){$Fb=process_length($b["val"]);$Pb.=" (".($Fb!=""?$Fb:"NULL").")";}elseif(!$b["op"]){$Pb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$Pb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Pb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$c[]=idf_escape($b["col"]).$Pb;}else{$ib=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$ib[]=($v=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$c[]=($ib?"(".implode("$Pb OR ",$ib)."$Pb)":"0");}}}return$c;}function
selectOrderProcess($p,$K){$c=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$c[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$c;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($s,$Cf){return
false;}function
messageQuery($i){global$v;static$Dc=0;restart_session();$R="sql-".($Dc++);$Wa=&get_session("queries");if(strlen($i)>1e6){$i=ereg_replace('[\x80-\xFF]+$','',substr($i,0,1e6))."\n...";}$Wa[$_GET["db"]][]=$i;return" <a href='#$R' onclick=\"return !toggle('$R');\">".'SQL-Query'."</a><div id='$R' class='hidden'><pre><code class='jush-$v'>".shorten_utf8($i,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Wa[$_GET["db"]])-1)).'">'.'Ändern'.'</a></div>';}function
editFunctions($d){global$Gb;$c=($d["null"]?"NULL/":"");foreach($Gb
as$e=>$aa){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($aa
as$ca=>$b){if(!$ca||ereg($ca,$d["type"])){$c.="/$b";}}if($e&&!ereg('set|blob|bytea|raw|file',$d["type"])){$c.="/=";}}}return
explode("/",$c);}function
editInput($h,$d,$Ua,$q){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ua value='-1' checked><i>".'Original'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ua value=''".(isset($q)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ua,$d,$q,0);}return"";}function
processInput($d,$q,$N=""){if($N=="="){return$q;}$f=$d["field"];$c=($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$q)?$q:q($q));if(ereg('^(now|getdate|uuid)$',$N)){$c="$N()";}elseif(ereg('^current_(date|timestamp)$',$N)){$c=$N;}elseif(ereg('^([+-]|\\|\\|)$',$N)){$c=idf_escape($f)." $N $c";}elseif(ereg('^[+-] interval$',$N)){$c=idf_escape($f)." $N ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$q)?$q:$c);}elseif(ereg('^(addtime|subtime|concat)$',$N)){$c="$N(".idf_escape($f).", $c)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$N)){$c="$N($c)";}if(ereg("binary",$d["type"])){$c="unhex($c)";}return$c;}function
dumpOutput(){$c=array('text'=>'anzeigen','file'=>'Datei');if(function_exists('gzencode')){$c['gz']='gzip';}if(function_exists('bzcompress')){$c['bz2']='bzip2';}return$c;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($h,$V,$Ic=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($h)));}}elseif($V){$ja=create_sql($h,$_POST["auto_increment"]);if($ja){if($V=="DROP+CREATE"){echo"DROP ".($Ic?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($Ic){$ja=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$ja);}echo($V!="CREATE+ALTER"?$ja:($Ic?substr_replace($ja," OR REPLACE",6,0):substr_replace($ja," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$Ic){$i="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$Nb="";foreach(get_rows($i)as$a){$xa=$a["COLUMN_DEFAULT"];$a["default"]=(isset($xa)?q($xa):"NULL");$a["after"]=q($Nb);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($xa)?" DEFAULT ".($xa=="CURRENT_TIMESTAMP"?$xa:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Nb?" AFTER ".idf_escape($Nb):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$Nb=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $i;
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
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($h,$V,$i){global$g,$v;$Ye=($v=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}if($_POST["format"]=="sql"){$p=fields($h);}$j=$g->query($i,1);if($j){$lc="";$vb="";while($a=$j->fetch_assoc()){if($_POST["format"]!="sql"){if($V=="table"){dump_csv(array_keys($a));$V="INSERT";}dump_csv($a);}else{if(!$lc){$lc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$p[$e]["type"])?$b:q($b)):"NULL");}$la=implode(",\t",$a);if($V=="INSERT+UPDATE"){$r=array();foreach($a
as$e=>$b){$r[]=idf_escape($e)." = $b";}echo"$lc ($la) ON DUPLICATE KEY UPDATE ".implode(", ",$r).";\n";}else{$la=($Ye?"\n":" ")."($la)";if(!$vb){$vb=$lc.$la;}elseif(strlen($vb)+4+strlen($la)<$Ye){$vb.=",$la";}else{echo"$vb;\n";$vb=$lc.$la;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$vb){$vb.=";\n";echo$vb;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$g->error)."\n";}}}function
dumpHeaders($Lc,$Bd=false){$Ma=$_POST["output"];$Lb=($_POST["format"]=="sql"?"sql":($Bd?"tar":"csv"));header("Content-Type: ".($Ma=="bz2"?"application/x-bzip":($Ma=="gz"?"application/x-gzip":($Lb=="tar"?"application/x-tar":($Lb=="sql"||$Ma!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Ma=="bz2"){ob_start('bzcompress',1e6);}if($Ma=="gz"){ob_start('gzencode',1e6);}return$Lb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Datenbank ändern'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Schema ändern':'Neues Schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Datenbankschema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Rechte'."</a>\n":"");return
true;}function
navigation($Tb){global$ic,$g,$O,$v,$ma;echo'<h1>
',$this->name(),' <span class="version">',$ic,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($ic,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Tb=="auth"){$_a=true;foreach((array)$_SESSION["pwds"]as$Jb=>$Nf){foreach($Nf
as$F=>$Rf){foreach($Rf
as$P=>$T){if(isset($T)){if($_a){echo"<p onclick='eventStop(event);'>\n";$_a=false;}echo"<a href='".h(auth_url($Jb,$F,$P))."'>($ma[$Jb]) ".h($P.($F!=""?"@$F":""))."</a><br>\n";}}}}}else{$A=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Tb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL-Query'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Export'."</a>\n";}}echo'<input type="submit" name="logout" value="Abmelden" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$O,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($A?html_select("db",array(""=>"(".'Datenbank'.")")+$A,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Benutzung"',($A?" class='hidden'":""),' onclick="eventStop(event);">
';if($Tb!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'Schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""&&!$Tb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Neue Tabelle'."</a>\n";$E=tables_list();if(!$E){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{$this->tablesPrint($E);$ua=array();foreach($E
as$h=>$_){$ua[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $v: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$ua).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$v;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($E){echo"<p id='tables'>\n";foreach($E
as$h=>$_){echo'<a href="'.h(ME).'select='.urlencode($h).'"'.bold($_GET["select"]==$h).">".'zeigen'."</a> ",'<a href="'.h(ME).'table='.urlencode($h).'"'.bold($_GET["table"]==$h).">".$this->tableName(array("Name"=>$h))."</a><br>\n";}}}$o=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($o->operators)){$o->operators=$Sb;}function
page_header($Xe,$n="",$zc=array(),$bf=""){global$Bf,$o,$g,$ma;header("Content-Type: text/html; charset=utf-8");if($o->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$cf=$Xe.($bf!=""?": ".h($bf):"");$gf=strip_tags($cf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$o->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($gf));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="de" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$gf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.2",'">
<script type="text/javascript">
var areYouSure = \'POST data noch einmal senden ?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.2",'"></script>
';if($o->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.2",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($zc)){$y=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($y?$y:".").'">'.$ma[DRIVER].'</a> &raquo; ';$y=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$F=(SERVER!=""?h(SERVER):'Server');if($zc===false){echo"$F\n";}else{echo"<a href='".($y?h($y):".")."' accesskey='1' title='Alt+Shift+1'>$F</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($zc))){echo'<a href="'.h($y."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($zc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($zc
as$e=>$b){$oc=(is_array($b)?$b[1]:$b);if($oc!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($oc).'</a> &raquo; ';}}}echo"$Xe\n";}}echo"<span id='loader'></span>\n","<h2>$cf</h2>\n";restart_session();$ke=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$ff=$_SESSION["messages"][$ke];if($ff){echo"<div class='message'>".implode("</div>\n<div class='message'>",$ff)."</div>\n";unset($_SESSION["messages"][$ke]);}$A=&get_session("dbs");if(DB!=""&&$A&&!in_array(DB,$A,true)){$A=null;}if($n){echo"<div class='error'>$n</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Tb=""){global$o;if(!is_ajax()){echo'</div>

<div id="menu">
';$o->navigation($Tb);echo'</div>
';}}function
int32($ga){while($ga>=2147483648){$ga-=4294967296;}while($ga<=-2147483649){$ga+=4294967296;}return(int)$ga;}function
long2str($z,$Jd){$la='';foreach($z
as$b){$la.=pack('V',$b);}if($Jd){return
substr($la,0,end($z));}return$la;}function
str2long($la,$Jd){$z=array_values(unpack('V*',str_pad($la,4*ceil(strlen($la)/4),"\0")));if($Jd){$z[]=strlen($la);}return$z;}function
xxtea_mx($Ba,$Aa,$Da,$Ka){return
int32((($Ba>>5&0x7FFFFFF)^$Aa<<2)+(($Aa>>3&0x1FFFFFFF)^$Ba<<4))^int32(($Da^$Aa)+($Ka^$Ba));}function
encrypt_string($qc,$e){if($qc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$z=str2long($qc,true);$ga=count($z)-1;$Ba=$z[$ga];$Aa=$z[0];$ba=floor(6+52/($ga+1));$Da=0;while($ba-->0){$Da=int32($Da+0x9E3779B9);$wc=$Da>>2&3;for($va=0;$va<$ga;$va++){$Aa=$z[$va+1];$Qb=xxtea_mx($Ba,$Aa,$Da,$e[$va&3^$wc]);$Ba=int32($z[$va]+$Qb);$z[$va]=$Ba;}$Aa=$z[0];$Qb=xxtea_mx($Ba,$Aa,$Da,$e[$va&3^$wc]);$Ba=int32($z[$ga]+$Qb);$z[$ga]=$Ba;}return
long2str($z,false);}function
decrypt_string($qc,$e){if($qc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$z=str2long($qc,false);$ga=count($z)-1;$Ba=$z[$ga];$Aa=$z[0];$ba=floor(6+52/($ga+1));$Da=int32($ba*0x9E3779B9);while($Da){$wc=$Da>>2&3;for($va=$ga;$va>0;$va--){$Ba=$z[$va-1];$Qb=xxtea_mx($Ba,$Aa,$Da,$e[$va&3^$wc]);$Aa=int32($z[$va]-$Qb);$z[$va]=$Aa;}$Ba=$z[$ga];$Qb=xxtea_mx($Ba,$Aa,$Da,$e[$va&3^$wc]);$Aa=int32($z[0]-$Qb);$z[0]=$Aa;$Da=int32($Da-0x9E3779B9);}return
long2str($z,true);}$g='';$O=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$yb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$yb[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$Cc=$o->permanentLogin();$yb[$e]="$e:".base64_encode($Cc?encrypt_string($_POST["password"],$Cc):"");cookie("adminer_permanent",implode(" ",$yb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($O&&$_POST["token"]!=$O){page_header('Abmelden','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($yb[$e]){unset($yb[$e]);cookie("adminer_permanent",implode(" ",$yb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Abmeldung erfolgreich.');}}elseif($yb&&!$_SESSION["pwds"]){session_regenerate_id();$Cc=$o->permanentLogin();foreach($yb
as$e=>$b){list(,$Mf)=explode(":",$b);list($Jb,$F,$P)=array_map('base64_decode',explode("-",$e));$_SESSION["pwds"][$Jb][$F][$P]=decrypt_string(base64_decode($Mf),$Cc);}}function
auth_error($ef=null){global$g,$o,$O;$Gc=session_name();$n="";if(!$_COOKIE[$Gc]&&$_GET[$Gc]&&ini_bool("session.use_only_cookies")){$n='Sitzungen müssen aktiviert sein.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Gc]||$_GET[$Gc])&&!$O){$n='Sitzungsdauer abgelaufen, bitte erneut anmelden.';}else{$T=&get_session("pwds");if(isset($T)){$n=h($ef?$ef->getMessage():(is_string($g)?$g:'Ungültige Anmelde-Informationen.'));$T=null;}}}page_header('Login',$n,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$o->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('Keine Erweiterungen installiert',sprintf('Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.',implode(", ",$sc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$o->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$O=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$O;}$n=($_POST?($_POST["token"]==$O?"":'CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','"post_max_size"')));function
connect_error(){global$g,$O,$n,$ma;$A=array();if(DB!=""){page_header('Datenbank'.": ".h(DB),'Datenbank ungültig.',true);}else{if($_POST["db"]&&!$n){queries_redirect(substr(ME,0,-1),'Datenbanken entfernt.',drop_databases($_POST["db"]));}page_header('Datenbank auswählen',$n,false);echo"<p><a href='".h(ME)."database='>".'Neue Datenbank'."</a>\n";foreach(array('privileges'=>'Rechte','processlist'=>'Prozessliste','variables'=>'Variablen','status'=>'Status',)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".sprintf('Version %s: %s, mit PHP-Erweiterung %s',$ma[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Angemeldet als: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$A=get_databases();if($A){$zd=support("scheme");$Z=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Datenbank'."<td>".'Collation'."<td>".'Tabellen'."</thead>\n";foreach($A
as$t){$nd=h(ME)."db=".urlencode($t);echo"<tr".odd()."><td>".checkbox("db[]",$t,in_array($t,(array)$_POST["db"])),"<th><a href='$nd'>".h($t)."</a>","<td><a href='$nd".($zd?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($t,$Z))."</a>","<td align='right'><a href='$nd&amp;schema=' id='tables-".h($t)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$O'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Aktualisieren'."</a>\n","</form>\n";}}page_footer("db");if($A){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"])){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Schema nicht gültig.',true);page_footer("ns");exit;}}function
select($j,$G=null,$Oc=""){$ua=array();$K=array();$B=array();$df=array();$S=array();odd('');for($l=0;$a=$j->fetch_row();$l++){if(!$l){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($na=0;$na<count($a);$na++){$d=$j->fetch_field();$f=$d->name;$Ia=$d->orgtable;$hc=$d->orgname;if($Oc){$ua[$na]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($Ia!=""){if(!isset($K[$Ia])){$K[$Ia]=array();foreach(indexes($Ia,$G)as$x){if($x["type"]=="PRIMARY"){$K[$Ia]=array_flip($x["columns"]);break;}}$B[$Ia]=$K[$Ia];}if(isset($B[$Ia][$hc])){unset($B[$Ia][$hc]);$K[$Ia][$hc]=$na;$ua[$na]=$Ia;}}if($d->charsetnr==63){$df[$na]=true;}$S[$na]=$d->type;$f=h($f);echo"<th".($Ia!=""||$d->name!=$hc?" title='".h(($Ia!=""?"$Ia.":"").$hc)."'":"").">".($Oc?"<a href='$Oc".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($df[$e]&&!is_utf8($b)){$b="<i>".lang(array('%d Byte','%d Bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($S[$e]==254){$b="<code>$b</code>";}}if(isset($ua[$e])&&!$B[$ua[$e]]){if($Oc){$y=$ua[$e].urlencode($a[array_search("table=",$ua)]);}else{$y="edit=".urlencode($ua[$e]);foreach($K[$ua[$e]]as$ad=>$na){$y.="&where".urlencode("[".bracket_escape($ad)."]")."=".urlencode($a[$na]);}}$b="<a href='".h(ME.$y)."'>$b</a>";}echo"<td>$b";}}echo($l?"</table>":"<p class='message'>".'Keine Daten.')."\n";}function
referencable_primary($if){$c=array();foreach(table_status()as$Fa=>$h){if($Fa!=$if&&fk_support($h)){foreach(fields($Fa)as$d){if($d["primary"]){if($c[$Fa]){unset($c[$Fa]);break;}$c[$Fa]=$d;}}}}return$c;}function
textarea($f,$q,$H=10,$ib=80){echo"<textarea name='$f' rows='$H' cols='$ib' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($q)){foreach($q
as$b){echo
h($b)."\n\n\n";}}else{echo
h($q);}echo"</textarea>";}function
format_time($Hb,$gd){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$gd))-array_sum(explode(" ",$Hb)))).")</span>";}function
edit_type($e,$d,$Z,$ha=array()){global$Na,$S,$jb,$Ea;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($S[$d["type"]])?array():array($d["type"]))+$Na+($ha?array('Fremdschlüssel'=>$ha):array()),$d["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'Kollation'.')'.optionlist($Z,$d["collation"]).'</select>',($jb?"<select name='$e"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($jb,$d["unsigned"]).'</select>':''),($ha?"<select name='$e"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist(explode("|",$Ea),$d["on_delete"])."</select> ":" ");}function
process_length($W){global$Db;return(preg_match("~^\\s*(?:$Db)(?:\\s*,\\s*(?:$Db))*\\s*\$~",$W)&&preg_match_all("~$Db~",$W,$sa)?implode(",",$sa[0]):preg_replace('~[^0-9,+-]~','',$W));}function
process_type($d,$xc="COLLATE"){global$jb;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$jb)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $xc ".q($d["collation"]):"");}function
process_field($d,$Xc){return
array(idf_escape($d["field"]),process_type($Xc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".(($d["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$d["default"]))||($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$d["default"]))?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($_){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$_)){return" class='$e'";}}}function
edit_fields($p,$Z,$_="TABLE",$Me=0,$ha=array(),$_b=false){global$Zb;echo'<thead><tr class="wrap">
';if($_=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($_=="TABLE"?'Spaltenname':'Name des Parameters'),'<td>Typ<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Länge
<td>Optionen
';if($_=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto-Inkrement">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Vorgabewerte festlegen
',(support("comment")?"<td".($_b?"":" class='hidden'").">".'Kommentar':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Hinzufügen'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$l=>$d){$l++;$id=$d[($_POST?"orig":"field")];$Le=(isset($_POST["add"][$l-1])||(isset($d["field"])&&!$_POST["drop_col"][$l]))&&(support("drop_col")||$id=="");echo'<tr',($Le?"":" style='display: none;'"),'>
',($_=="PROCEDURE"?"<td>".html_select("fields[$l][inout]",explode("|",$Zb),$d["inout"]):""),'<th>';if($Le){echo'<input name="fields[',$l,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $Me); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$l,'][orig]" value="',h($id),'">
';edit_type("fields[$l]",$d,$Z,$ha);if($_=="TABLE"){echo'<td>',checkbox("fields[$l][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$l,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$l][has_default]",1,$d["has_default"]),'<input name="fields[',$l,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($_b?"":" class='hidden'")."><input name='fields[$l][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Hinzufügen'."' onclick='return !editingAddRow(this, $Me, 1);'>&nbsp;"."<input type='image' name='up[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.2' alt='^' title='".'Nach oben'."'>&nbsp;"."<input type='image' name='down[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.2' alt='v' title='".'Nach unten'."'>&nbsp;":""),($id==""||support("drop_col")?"<input type='image' name='drop_col[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.2' alt='x' title='".'Entfernen'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$L=0;if($_POST["up"]){$pb=0;foreach($p
as$e=>$d){if(key($_POST["up"])==$e){unset($p[$e]);array_splice($p,$pb,0,array($d));break;}if(isset($d["field"])){$pb=$L;}$L++;}}if($_POST["down"]){$oa=false;foreach($p
as$e=>$d){if(isset($d["field"])&&$oa){unset($p[key($_POST["down"])]);array_splice($p,$L,0,array($oa));break;}if(key($_POST["down"])==$e){$oa=$d;}$L++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($k){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($k[0][0].$k[0][0],$k[0][0],substr($k[0],1,-1))),'\\'))."'";}function
grant($ia,$ra,$B,$zb){if(!$ra){return
true;}if($ra==array("ALL PRIVILEGES","GRANT OPTION")){return($ia=="GRANT"?queries("$ia ALL PRIVILEGES$zb WITH GRANT OPTION"):queries("$ia ALL PRIVILEGES$zb")&&queries("$ia GRANT OPTION$zb"));}return
queries("$ia ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$ra).$B).$zb);}function
drop_create($Ha,$ja,$fa,$Je,$Ef,$Df,$f){if($_POST["drop"]){return
query_redirect($Ha,$fa,$Je,true,!$_POST["dropped"]);}$Za=$f!=""&&($_POST["dropped"]||queries($Ha));$Gf=queries($ja);if(!queries_redirect($fa,($f!=""?$Ef:$Df),$Gf)&&$Za){redirect(null,$Je);}return$Za;}function
tar_file($ka,$ld){$c=pack("a100a8a8a8a12a12",$ka,644,0,0,decoct(strlen($ld)),decoct(time()));$Oe=8*32;for($l=0;$l<strlen($c);$l++){$Oe+=ord($c{$l});}$c.=sprintf("%06o",$Oe)."\0 ";return$c.str_repeat("\0",512-strlen($c)).$ld.str_repeat("\0",511-(strlen($ld)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Ea="RESTRICT|CASCADE|SET NULL|NO ACTION";$Db="'(?:''|[^'\\\\]|\\\\.)*+'";$Zb="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$p=fields($m);if(!$p){$n=error();}$u=($p?table_status($m):array());page_header(($p&&is_view($u)?'View':'Tabelle').": ".h($m),$n);$o->selectLinks($u);$za=$u["Comment"];if($za!=""){echo"<p>".'Kommentar'.": ".h($za)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Spalte'."<td>".'Typ'.(support("comment")?"<td>".'Kommentar':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td title='".h($d["collation"])."'>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto-Inkrement'."</i>":""),(isset($d["default"])?" [<b>".h($d["default"])."</b>]":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($u)){echo"<h3>".'Indizes'."</h3>\n";$K=indexes($m);if($K){echo"<table cellspacing='0'>\n";foreach($K
as$f=>$x){ksort($x["columns"]);$Bb=array();foreach($x["columns"]as$e=>$b){$Bb[]="<i>".h($b)."</i>".($x["lengths"][$e]?"(".$x["lengths"][$e].")":"");}echo"<tr title='".h($f)."'><th>$x[type]<td>".implode(", ",$Bb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.'Indizes ändern'."</a>\n";if(fk_support($u)){echo"<h3>".'Fremdschlüssel'."</h3>\n";$ha=foreign_keys($m);if($ha){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Ursprung'."<td>".'Ziel'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($v!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ha
as$f=>$C){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$C["source"]))."</i>","<td><a href='".h($C["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($C["db"]),ME):($C["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($C["ns"]),ME):ME))."table=".urlencode($C["table"])."'>".($C["db"]!=""?"<b>".h($C["db"])."</b>.":"").($C["ns"]!=""?"<b>".h($C["ns"])."</b>.":"").h($C["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$C["target"]))."</i>)","<td>".nbsp($C["on_delete"])."\n","<td>".nbsp($C["on_update"])."\n";if($v!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.'Ändern'.'</a>';}}echo"</table>\n";}if($v!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.'Fremdschlüssel hinzufügen'."</a>\n";}}if(support("trigger")){echo"<h3>".'Trigger'."</h3>\n";$Qc=triggers($m);if($Qc){echo"<table cellspacing='0'>\n";foreach($Qc
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".'Ändern'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.'Trigger hinzufügen'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Datenbankschema',"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$sb=array();$Pe=array();$f="adminer_schema";$Te=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$Te,$sa,PREG_SET_ORDER);foreach($sa
as$l=>$k){$sb[$k[1]]=array($k[2],$k[3]);$Pe[]="\n\t'".js_escape($k[1])."': [ $k[2], $k[3] ]";}$ac=0;$Se=-1;$Oa=array();$Re=array();$Qe=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$vc=0;$Oa[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$vc+=1.25;$d["pos"]=$vc;$Oa[$a["Name"]]["fields"][$f]=$d;}$Oa[$a["Name"]]["pos"]=($sb[$a["Name"]]?$sb[$a["Name"]]:array($ac,0));foreach($o->foreignKeys($a["Name"])as$b){if(!$b["db"]){$ya=$Se;if($sb[$a["Name"]][1]||$sb[$b["table"]][1]){$ya=min(floatval($sb[$a["Name"]][1]),floatval($sb[$b["table"]][1]))-1;}else{$Se-=.1;}while($Qe[(string)$ya]){$ya-=.0001;}$Oa[$a["Name"]]["references"][$b["table"]][(string)$ya]=array($b["source"],$b["target"]);$Re[$b["table"]][$a["Name"]][(string)$ya]=$b["target"];$Qe[(string)$ya]=true;}}$ac=max($ac,$Oa[$a["Name"]]["pos"][0]+2.5+$vc);}echo'<div id="schema" style="height: ',$ac,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$Pe)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$ac,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Oa
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$Vb=>$Ac){foreach($Ac
as$ya=>$Sc){$_c=$ya-$sb[$f][1];$l=0;foreach($Sc[0]as$Ca){echo"<div class='references' title='".h($Vb)."' id='refs$ya-".($l++)."' style='left: $_c"."em; top: ".$h["fields"][$Ca]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$_c)."em;'></div></div>\n";}}}foreach((array)$Re[$f]as$Vb=>$Ac){foreach($Ac
as$ya=>$B){$_c=$ya-$sb[$f][1];$l=0;foreach($B
as$ea){echo"<div class='references' title='".h($Vb)."' id='refd$ya-".($l++)."' style='left: $_c"."em; top: ".$h["fields"][$ea]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.2'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$_c)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Oa
as$f=>$h){foreach((array)$h["references"]as$Vb=>$Ac){foreach($Ac
as$ya=>$Sc){$Uc=$ac;$kd=-10;foreach($Sc[0]as$e=>$Ca){$Rd=$h["pos"][0]+$h["fields"][$Ca]["pos"];$Qd=$Oa[$Vb]["pos"][0]+$Oa[$Vb]["fields"][$Sc[1][$e]]["pos"];$Uc=min($Uc,$Rd,$Qd);$kd=max($kd,$Rd,$Qd);}echo"<div class='references' id='refl$ya' style='left: $ya"."em; top: $Uc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($kd-$Uc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($Te)),'" id="schema-link">Dauerhafter Link</a>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$Td="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$e){$Td.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($Td,1));$Lb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$xb=($_POST["format"]=="sql");if($xb){echo"-- Adminer $ic ".$ma[DRIVER]." dump

".($v!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$A=array(DB);if(DB==""){$A=$_POST["databases"];if(is_string($A)){$A=explode("\n",rtrim(str_replace("\r","",$A),"\n"));}}foreach((array)$A
as$t){if($g->select_db($t)){if($xb&&ereg('CREATE',$V)&&($ja=$g->result("SHOW CREATE DATABASE ".idf_escape($t),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($t).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ja):$ja).";\n";}if($xb){if($V){echo
use_sql($t).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$mb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Ra){foreach(get_rows("SHOW $Ra STATUS WHERE Db = ".q($t),null,"-- ")as$a){$mb.=($V!='DROP+CREATE'?"DROP $Ra IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Ra ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$mb.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($mb){echo"DELIMITER ;;\n\n$mb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$X=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$ee=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$ee){if(!is_view($a)){if($Lb=="tar"){ob_start();}$o->dumpTable($a["Name"],($h?$_POST["table_style"]:""));if($ee){$o->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($xb&&$_POST["triggers"]&&$h&&($Qc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$Qc\nDELIMITER ;\n";}if($Lb=="tar"){echo
tar_file((DB!=""?"":"$t/")."$a[Name].csv",ob_get_clean());}elseif($xb){echo"\n";}}elseif($xb){$X[]=$a["Name"];}}}foreach($X
as$bc){$o->dumpTable($bc,$_POST["table_style"],true);}if($Lb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$xb){$i="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($i)as$a){$za=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $za THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$za;
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
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$xb){echo"SELECT @adminer_alter;\n";}}}if($xb){echo"-- ".$g->result("SELECT NOW()")."\n";}exit;}page_header('Exportieren',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Vd=array('','USE','DROP+CREATE','CREATE');$he=array('','DROP+CREATE','CREATE');$Xd=array('','TRUNCATE+INSERT','INSERT');if($v=="sql"){$Vd[]='CREATE+ALTER';$he[]='CREATE+ALTER';$Xd[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Ergebnis'."<td>".html_select("output",$o->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$o->dumpFormat(),$a["format"],0)."\n";echo($v=="sqlite"?"":"<tr><th>".'Datenbank'."<td>".html_select('db_style',$Vd,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Prozeduren'):"").(support("event")?checkbox("events",1,$a["events"],'Ereignisse'):"")),"<tr><th>".'Tabellen'."<td>".html_select('table_style',$he,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto-Inkrement').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Trigger'):""),"<tr><th>".'Daten'."<td>".html_select('data_style',$Xd,$a["data_style"]),'</table>
<p><input type="submit" value="Exportieren">

<table cellspacing="0">
';$jd=array();if(DB!=""){$db=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$db onclick='formCheck(this, /^tables\\[/);'>".'Tabellen'."</label>","<th style='text-align: right;'><label>".'Daten'."<input type='checkbox' id='check-data'$db onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$X="";foreach(table_status()as$a){$f=$a["Name"];$tc=ereg_replace("_.*","",$f);$db=($m==""||$m==(substr($m,-1)=="%"?"$tc%":$f));$Bb="<tr><td>".checkbox("tables[]",$f,$db,$f,"formUncheck('check-tables');");if(is_view($a)){$X.="$Bb\n";}else{echo"$Bb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$db,"","formUncheck('check-data');")."</label>\n";}$jd[$tc]++;}echo$X;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Datenbank'."</label></thead>\n";$A=get_databases();if($A){foreach($A
as$t){if(!information_schema($t)){$tc=ereg_replace("_.*","",$t);echo"<tr><td>".checkbox("databases[]",$t,$m==""||$m=="$tc%",$t,"formUncheck('check-databases');")."</label>\n";$jd[$tc]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$_a=true;foreach($jd
as$e=>$b){if($e!=""&&$b>1){echo($_a?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$_a=false;}}}elseif(isset($_GET["privileges"])){page_header('Rechte');$j=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$j){echo'<form action=""><p>
';hidden_fields_get();echo'Benutzer: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Ändern">
</form>
';$j=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Benutzer'."<th>".'Server'."</thead>\n";while($a=$j->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'ändern'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Neuer Benutzer'."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$o->dumpTable("","");$o->dumpData("","table",$_POST["query"]);exit;}restart_session();$Kf=&get_session("queries");$Wa=&$Kf[DB];if(!$n&&$_POST["clear"]){$Wa=array();redirect(remove_from_uri("history"));}page_header('SQL-Query',$n);if(!$n&&$_POST){$Ja=false;$i=$_POST["query"];if($_POST["webfile"]){$Ja=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$i=($Ja?fread($Ja,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$i=get_file("sql_file",true);}if(is_string($i)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($i)+memory_get_usage()+8e6));}if($i!=""&&strlen($i)<1e6){$ba=$i.(ereg(';$',$i)?"":";");if(!$Wa||end($Wa)!=$ba){$Wa[]=$ba;}}$nc="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Ed=";";$L=0;$Yb=true;$G=connect();if(is_object($G)&&DB!=""){$G->select_db(DB);}$Cb=0;$Bc=array();$Jf='[\'"'.($v=="sql"?'`#':($v=="sqlite"?'`[':($v=="mssql"?'[':''))).']|/\\*|-- |$'.($v=="pgsql"?'|\\$[^$]*\\$':'');$If=microtime();parse_str($_COOKIE["adminer_export"],$be);$Zd=$o->dumpFormat();unset($Zd["sql"]);while($i!=""){if(!$L&&$v=="sql"&&preg_match("~^$nc*DELIMITER\\s+(.+)~i",$i,$k)){$Ed=$k[1];$i=substr($i,strlen($k[0]));}else{preg_match('('.preg_quote($Ed)."|$Jf)",$i,$k,PREG_OFFSET_CAPTURE,$L);$oa=$k[0][0];if(!$oa&&$Ja&&!feof($Ja)){$i.=fread($Ja,1e5);}else{$L=$k[0][1]+strlen($oa);if(!$oa&&rtrim($i)==""){break;}if($oa&&$oa!=$Ed){while(preg_match('('.($oa=='/*'?'\\*/':($oa=='['?']':(ereg('^-- |^#',$oa)?"\n":preg_quote($oa)."|\\\\."))).'|$)s',$i,$k,PREG_OFFSET_CAPTURE,$L)){$la=$k[0][0];$L=$k[0][1]+strlen($la);if(!$la&&$Ja&&!feof($Ja)){$L-=strlen($oa);$i.=fread($Ja,1e5);}elseif($la[0]!="\\"){break;}}}else{$Yb=false;$ba=substr($i,0,$k[0][1]);$Cb++;$Bb="<pre id='sql-$Cb'><code class='jush-$v'>".shorten_utf8(trim($ba),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$Bb;ob_flush();flush();}$Hb=microtime();if($g->multi_query($ba)&&is_object($G)&&preg_match("~^$nc*USE\\b~isU",$ba)){$G->query($ba);}do{$j=$g->store_result();$gd=microtime();$Yd=format_time($Hb,$gd).(strlen($ba)<1000?" <a href='".h(ME)."sql=".urlencode(trim($ba))."'>".'Ändern'."</a>":"");if($g->error){echo($_POST["only_errors"]?$Bb:""),"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".error()."\n";$Bc[]=" <a href='#sql-$Cb'>$Cb</a>";if($_POST["error_stops"]){break
2;}}elseif(is_object($j)){select($j,$G);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($j->num_rows?lang(array('%d Datensatz','%d Datensätze'),$j->num_rows):"").$Yd;$R="export-$Cb";$Wd=", <a href='#$R' onclick=\"return !toggle('$R');\">".'Exportieren'."</a><span id='$R' class='hidden'>: ".html_select("output",$o->dumpOutput(),$be["output"])." ".html_select("format",$Zd,$be["format"])."<input type='hidden' name='query' value='".h($ba)."'>"." <input type='submit' name='export' value='".'Exportieren'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$O'></span>\n";if($G&&preg_match("~^($nc|\\()*SELECT\\b~isU",$ba)&&($qf=explain($G,$ba))){$R="explain-$Cb";echo", <a href='#$R' onclick=\"return !toggle('$R');\">EXPLAIN</a>$Wd","<div id='$R' class='hidden'>\n";select($qf,$G,($v=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo$Wd;}echo"</form>\n";}}else{if(preg_match("~^$nc*(CREATE|DROP|ALTER)$nc+(DATABASE|SCHEMA)\\b~isU",$ba)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($g->info)."'>".lang(array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."$Yd\n";}}$Hb=$gd;}while($g->next_result());$i=substr($i,$L);$L=0;}}}}if($Yb){echo"<p class='message'>".'Kein Kommando vorhanden.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('SQL-Query erfolgreich ausgeführt.','%d SQL-Queries erfolgreich ausgeführt.'),$Cb-count($Bc)).format_time($If,microtime())."\n";}elseif($Bc&&$Cb>1){echo"<p class='error'>".'Fehler in der SQL-Abfrage'.": ".implode("",$Bc)."\n";}}else{echo"<p class='error'>".upload_error($i)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$ba=$_GET["sql"];if($_POST){$ba=$_POST["query"];}elseif($_GET["history"]=="all"){$ba=$Wa;}elseif($_GET["history"]!=""){$ba=$Wa[$_GET["history"]];}textarea("query",$ba,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'Datei importieren'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'Importieren von Dateien abgeschaltet.'),'<p>
<input type="submit" value="Ausführen" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$O,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Bei Fehler anhalten')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Nur Fehler anzeigen')."\n";print_fieldset("webfile",'Im Server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$Id=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$Id[]=".$e";}}echo
sprintf('Webserver Datei %s',"<code>adminer.sql".($Id?"[".implode("|",$Id)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Datei ausführen'.'">',"</div></fieldset>\n";if($Wa){print_fieldset("history",'History',$_GET["history"]!="");foreach($Wa
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.'Ändern'."</a> <code class='jush-$v'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Entleeren'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Alle ändern'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$s=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$pa=(isset($_GET["select"])?$_POST["edit"]:$s);$p=fields($m);foreach($p
as$f=>$d){if(!isset($d["privileges"][$pa?"update":"insert"])||$o->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$fa=$_POST["referer"];if($_POST["insert"]){$fa=($pa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$fa)){$fa=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $s"),$fa,'Datensatz gelöscht.');}else{$r=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$r[idf_escape($f)]=($pa?"\n".idf_escape($f)." = $b":$b);}}if($pa){if(!$r){redirect($fa);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$r),"\nWHERE $s"),$fa,'Datensatz geändert.');}else{$j=insert_into($m,$r);$ce=($j?last_id():0);queries_redirect($fa,sprintf('Datensatz%s hinzugefügt.',($ce?" $ce":"")),$j);}}}$Fa=$o->tableName(table_status($m));page_header(($pa?'Ändern':'Hinzufügen'),$n,array("select"=>array($m,$Fa)),$Fa);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($s){$J=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$J[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($J){$H=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($m)," WHERE $s",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($H)!=1?null:reset($H));}}if($a===false){echo"<p class='error'>".'Keine Daten.'."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$o->fieldName($d);$xa=$_GET["set"][bracket_escape($f)];$q=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$pa&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($xa)?$xa:$d["default"]))));if(!$_POST["save"]&&is_string($q)){$q=$o->editVal($q,$d);}$N=($_POST["save"]?(string)$_POST["function"][$f]:($pa&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($q===false?null:(isset($q)?'':'NULL'))));if($d["type"]=="timestamp"&&$q=="CURRENT_TIMESTAMP"){$q="";$N="now";}input($d,$q,$N);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Speichern'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($pa?'Speichern und weiter bearbeiten':'Speichern und nächsten hinzufügen')."' title='Ctrl+Shift+Enter'>\n";}}echo($pa?"<input type='submit' name='delete' value='".'Entfernen'."' onclick=\"return confirm('".'Sind Sie sicher ?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$de=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$ie=referencable_primary($m);$ha=array();foreach($ie
as$Fa=>$d){$ha[str_replace("`","``",$Fa)."`".str_replace("`","``",$d["field"])]=$Fa;}$hd=array();$dd=array();if($m!=""){$hd=fields($m);$dd=table_status($m);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),'Tabelle entfernt.');}else{$p=array();$La=array();ksort($_POST["fields"]);$pd=reset($hd);$Nb="FIRST";foreach($_POST["fields"]as$e=>$d){$C=$ha[$d["type"]];$Xc=(isset($C)?$ie[$C]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$xa=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($xa!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$xa;}if($e==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$ge=process_field($d,$Xc);if($ge!=process_field($pd,$pd)){$p[]=array($d["orig"],$ge,$Nb);}if(isset($C)){$La[idf_escape($d["field"])]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($ha[$d["type"]])." (".idf_escape($Xc["field"]).")".(ereg("^($Ea)\$",$d["on_delete"])?" ON DELETE $d[on_delete]":"");}$Nb="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$pd=next($hd);}}$rb="";if(in_array($_POST["partition_by"],$de)){$Ad=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$q=$_POST["partition_values"][$e];$Ad[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($q!=""?" ($q)":" MAXVALUE");}}$rb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Ad?" (".implode(",",$Ad)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$rb.="\nREMOVE PARTITIONING";}$ta='Tabelle geändert.';if($m==""){cookie("adminer_engine",$_POST["Engine"]);$ta='Tabelle erstellt.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ta,alter_table($m,$_POST["name"],$p,$La,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$dd["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$dd["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$rb));}}page_header(($m!=""?'Tabelle ändern':'Neue Tabelle erstellen'),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($S["int"])?"int":(isset($S["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$dd;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($hd
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$Wb="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$j=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $Wb ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$j->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $Wb AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Pc){$a["partition_names"][]=$Pc["PARTITION_NAME"];$a["partition_values"][]=$Pc["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$Z=collations();$xd=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($xd&&count($a["fields"])>$xd){echo"<p class='error'>".h(sprintf('Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$yd=engines();foreach($yd
as$wb){if(!strcasecmp($wb,$a["Engine"])){$a["Engine"]=$wb;break;}}echo'
<form action="" method="post" id="form">
<p>
Name der Tabelle: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($m==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($yd?html_select("Engine",array(""=>"(".'Motor'.")")+$yd,$a["Engine"]):""),' ',($Z&&!ereg("sqlite|mssql",$v)?html_select("Collation",array(""=>"(".'Kollation'.")")+$Z,$a["Collation"]):""),' <input type="submit" value="Speichern">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$_b=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$_b){foreach($a["fields"]as$d){if($d["comment"]!=""){$_b=true;break;}}}edit_fields($a["fields"],$Z,"TABLE",$xd,$ha,$_b);echo'</table>
<p>
Auto-Inkrement: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Vorgabewerte festlegen</label>
',(support("comment")?checkbox("comments",1,$_b,'Kommentar',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($_b?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Speichern">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
';if(support("partitioning")){$je=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partitionieren um',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$de,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitionen: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($je||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($je?"":" class='hidden'"),'>
<thead><tr><th>Name der Partition<th>Werte</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Kc=array("PRIMARY","UNIQUE","INDEX");$u=table_status($m);if(eregi("MyISAM|M?aria",$u["Engine"])){$Kc[]="FULLTEXT";}$K=indexes($m);if($v=="sqlite"){unset($Kc[0]);unset($K[""]);}if($_POST&&!$n&&!$_POST["add"]){$w=array();foreach($_POST["indexes"]as$x){$f=$x["name"];if(in_array($x["type"],$Kc)){$B=array();$Xb=array();$r=array();ksort($x["columns"]);foreach($x["columns"]as$e=>$D){if($D!=""){$W=$x["lengths"][$e];$r[]=idf_escape($D).($W?"(".(+$W).")":"");$B[]=$D;$Xb[]=($W?$W:null);}}if($B){$ob=$K[$f];if($ob){ksort($ob["columns"]);ksort($ob["lengths"]);if($x["type"]==$ob["type"]&&array_values($ob["columns"])===$B&&(!$ob["lengths"]||array_values($ob["lengths"])===$Xb)){unset($K[$f]);continue;}}$w[]=array($x["type"],$f,"(".implode(", ",$r).")");}}}foreach($K
as$f=>$ob){$w[]=array($ob["type"],$f,"DROP");}if(!$w){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),'Indizes geändert.',alter_indexes($m,$w));}page_header('Indizes',$n,array("table"=>$m),$m);$p=array_keys(fields($m));$a=array("indexes"=>$K);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$x){if($x["columns"][count($x["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$x=end($a["indexes"]);if($x["type"]||array_filter($x["columns"],'strlen')||array_filter($x["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$x){$a["indexes"][$e]["name"]=$e;$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index-Typ<th>Spalte (Länge)<th>Name</thead>
';$na=1;foreach($a["indexes"]as$x){echo"<tr><td>".html_select("indexes[$na][type]",array(-1=>"")+$Kc,$x["type"],($na==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($x["columns"]);$l=1;foreach($x["columns"]as$e=>$D){echo"<span>".html_select("indexes[$na][columns][$l]",array(-1=>"")+$p,$D,($l==count($x["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($v=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$na][lengths][$l]' size='2' value='".h($x["lengths"][$e])."'> </span>";$l++;}echo"<td><input name='indexes[$na][name]' value='".h($x["name"])."'>\n";$na++;}echo'</table>
<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Hinzufügen"></noscript>
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Datenbank entfernt.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Datenbank umbenannt.',rename_database($_POST["name"],$_POST["collation"]));}else{$A=explode("\n",str_replace("\r","",$_POST["name"]));$Nd=true;$pb="";foreach($A
as$t){if(count($A)==1||$t!=""){if(!create_database($t,$_POST["collation"])){$Nd=false;}$pb=$t;}}queries_redirect(ME."db=".urlencode($pb),'Datenbank erstellt.',$Nd);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Datenbank geändert.');}}page_header(DB!=""?'Datenbank ändern':'Neue Datenbank',$n,array(),DB);$Z=collations();$f=DB;$xc=null;if($_POST){$f=$_POST["name"];$xc=$_POST["collation"];}elseif(DB!=""){$xc=db_collation(DB,$Z);}elseif($v=="sql"){foreach(get_vals("SHOW GRANTS")as$ia){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ia,$k)&&$k[1]){$f=stripcslashes(idf_unescape("`$k[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($Z?html_select("collation",array(""=>"(".'Kollation'.")")+$Z,$xc):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Speichern">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.2' alt='+' title='".'Hinzufügen'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$y=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$y,'Schema wurde gelöscht.');}else{$y.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$y,'Neues Schema erstellt.');}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$y,'Schema geändert.');}else{redirect($y);}}}page_header($_GET["ns"]!=""?'Schema ändern':'Neues Schema',$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Speichern">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["call"])){$Qa=$_GET["call"];page_header('Aufrufen'.": ".h($Qa),$n);$Ra=routine($Qa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Fb=array();$mb=array();foreach($Ra["fields"]as$l=>$d){if(substr($d["inout"],-3)=="OUT"){$mb[$l]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Fb[]=$l;}}if(!$n&&$_POST){$Pd=array();foreach($Ra["fields"]as$e=>$d){if(in_array($e,$Fb)){$b=process_input($d);if($b===false){$b="''";}if(isset($mb[$e])){$g->query("SET @".idf_escape($d["field"])." = $b");}}$Pd[]=(isset($mb[$e])?"@".idf_escape($d["field"]):$b);}$i=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Qa)."(".implode(", ",$Pd).")";echo"<p><code class='jush-$v'>".h($i)."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".'Ändern'."</a>\n";if(!$g->multi_query($i)){echo"<p class='error'>".error()."\n";}else{$G=connect();if(is_object($G)){$G->select_db(DB);}do{$j=$g->store_result();if(is_object($j)){select($j,$G);}else{echo"<p class='message'>".lang(array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),$g->affected_rows)."\n";}}while($g->next_result());if($mb){select($g->query("SELECT ".implode(", ",$mb)));}}}echo'
<form action="" method="post">
';if($Fb){echo"<table cellspacing='0'>\n";foreach($Fb
as$e){$d=$Ra["fields"][$e];$f=$d["field"];echo"<tr><th>".$o->fieldName($d);$q=$_POST["fields"][$f];if($q!=""){if($d["type"]=="enum"){$q=+$q;}if($d["type"]=="set"){$q=array_sum($q);}}input($d,$q,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Aufrufen">
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($v=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),'Fremdschlüssel entfernt.');}else{$Ca=array_filter($_POST["source"],'strlen');ksort($Ca);$ea=array();foreach($Ca
as$e=>$b){$ea[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Ca)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$ea)).")".(ereg("^($Ea)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($Ea)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?'Fremdschlüssel geändert.':'Fremdschlüssel erstellt.'));$n='Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.'."<br>$n";}}page_header('Fremdschlüssel',$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ha=foreign_keys($m);$a=$ha[$_GET["name"]];$a["source"][]="";}$Ca=array_keys(fields($m));$ea=($m===$a["table"]?$Ca:array_keys(fields($a["table"])));$Sd=array();foreach(table_status()as$f=>$u){if(fk_support($u)){$Sd[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo'Zieltabelle:
',html_select("table",$Sd,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Ändern"></noscript>
<table cellspacing="0">
<thead><tr><th>Ursprung<th>Ziel</thead>
';$na=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".(+$e)."]",array(-1=>"")+$Ca,$b,($na==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$e)."]",$ea,$a["target"][$e]);$na++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+explode("|",$Ea),$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+explode("|",$Ea),$a["on_update"]),'<p>
<input type="submit" value="Speichern">
<noscript><p><input type="submit" name="add" value="Spalte hinzufügen"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Za=false;if($_POST&&!$n){$Za=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View entfernt.','View geändert.','View erstellt.',$m);}page_header(($m!=""?'View ändern':'Neue View erstellen'),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Speichern">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["event"])){$nb=$_GET["event"];$Ud=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Gd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($nb),substr(ME,0,-1),'Ereignis entfernt.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Ud)&&isset($Gd[$_POST["STATUS"]])){$Od="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($nb!=""?'Ereignis geändert.':'Ereignis erstellt.'),queries(($nb!=""?"ALTER EVENT ".idf_escape($nb).$Od.($nb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Od)."\n".$Gd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($nb!=""?'Ereignis ändern'.": ".h($nb):'Ereignis erstellen'),$n);$a=array();if($_POST){$a=$_POST;}elseif($nb!=""){$H=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($nb));$a=reset($H);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>Ende<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Jede<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Ud,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Gd,$a["STATUS"]),'<tr><th>Kommentar<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'Nach der Ausführung erhalten'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Speichern">
';if($nb!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["procedure"])){$Qa=$_GET["procedure"];$Ra=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ld=routine_languages();$Za=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$r=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$r[]=(ereg("^($Zb)\$",$d["inout"])?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Za=drop_create("DROP $Ra ".idf_escape($Qa),"CREATE $Ra ".idf_escape($_POST["name"])." (".implode(", ",$r).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$Ld)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.',$Qa);}page_header(($Qa!=""?(isset($_GET["function"])?'Funktion ändern':'Prozedur ändern').": ".h($Qa):(isset($_GET["function"])?'Neue Funktion':'Neue Prozedur')),$n);$Z=get_vals("SHOW CHARACTER SET");sort($Z);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Qa!=""){$a=routine($Qa,$Ra);$a["name"]=$Qa;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
',($Ld?'Sprache'.": ".html_select("language",$Ld,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$Z,$Ra);if(isset($_GET["function"])){echo"<tr><td>".'Typ des Rückgabewertes';edit_type("returns",$a["returns"],$Z);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Speichern">
';if($Qa!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["sequence"])){$Ab=$_GET["sequence"];if($_POST&&!$n){$y=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Ab),$y,'Sequenz gelöscht.');}elseif($Ab==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$y,'Neue Sequenz erstellt.');}elseif($Ab!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Ab)." RENAME TO ".idf_escape($_POST["name"]),$y,'Sequenz geändert.');}else{redirect($y);}}page_header($Ab!=""?'Sequenz ändern'.": ".h($Ab):'Neue Sequenz',$n);$a=array("name"=>$Ab);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Speichern">
';if($Ab!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["type"])){$Hc=$_GET["type"];if($_POST&&!$n){$y=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Hc),$y,'Typ gelöscht.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$y,'Typ erstellt.');}}page_header($Hc!=""?'Typ ändern'.": ".h($Hc):'Typ erstellen',$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
';if($Hc!=""){echo"<input type='submit' name='drop' value='".'Entfernen'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Speichern'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Fc=trigger_options();$ae=array("INSERT","UPDATE","DELETE");$Za=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Fc["Timing"])&&in_array($_POST["Event"],$ae)&&in_array($_POST["Type"],$Fc["Type"])){$fe=" $_POST[Timing] $_POST[Event]";$zb=" ON ".table($m);$Za=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($v=="pgsql"?$zb:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($v=="mssql"?$zb.$fe:$fe.$zb).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($m),'Trigger entfernt.','Trigger geändert.','Trigger erstellt.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Trigger ändern'.": ".h($_GET["name"]):'Trigger hinzufügen'),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Zeitpunkt<td>',html_select("Timing",$Fc["Timing"],$a["Timing"],"if (/^".preg_quote($m,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($m)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Ereignis<td>',html_select("Event",$ae,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Typ<td>',html_select("Type",$Fc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Speichern">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}if($Za){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["user"])){$md=$_GET["user"];$ra=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$Mc){$ra[$Mc][$a["Privilege"]]=$a["Comment"];}}$ra["Server Admin"]+=$ra["File access on server"];$ra["Databases"]["Create routine"]=$ra["Procedures"]["Create routine"];unset($ra["Procedures"]["Create routine"]);$ra["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ra["Columns"][$b]=$ra["Tables"][$b];}unset($ra["Server Admin"]["Usage"]);foreach($ra["Tables"]as$e=>$b){unset($ra["Databases"][$e]);}$mc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$mc[$b]=(array)$mc[$b]+(array)$_POST["grants"][$e];}}$fb=array();$Yc="";if(isset($_GET["host"])&&($j=$g->query("SHOW GRANTS FOR ".q($md)."@".q($_GET["host"])))){while($a=$j->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$k)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$k[1],$sa,PREG_SET_ORDER)){foreach($sa
as$b){if($b[1]!="USAGE"){$fb["$k[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$fb["$k[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$k)){$Yc=$k[1];}}}if($_POST&&!$n){$dc=(isset($_GET["host"])?q($md)."@".q($_GET["host"]):"''");$lb=q($_POST["user"])."@".q($_POST["host"]);$vd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $dc",ME."privileges=",'Benutzer entfernt.');}else{if($dc!=$lb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $lb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $vd");}elseif($_POST["pass"]!=$Yc||!$_POST["hashed"]){queries("SET PASSWORD FOR $lb = ".($_POST["hashed"]?$vd:"PASSWORD($vd)"));}if(!$n){$rc=array();foreach($mc
as$Xa=>$ia){if(isset($_GET["grant"])){$ia=array_filter($ia);}$ia=array_keys($ia);if(isset($_GET["grant"])){$rc=array_diff(array_keys(array_filter($mc[$Xa],'strlen')),$ia);}elseif($dc==$lb){$We=array_keys((array)$fb[$Xa]);$rc=array_diff($We,$ia);$ia=array_diff($ia,$We);unset($fb[$Xa]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$Xa,$k)&&(!grant("REVOKE",$rc,$k[2]," ON $k[1] FROM $lb")||!grant("GRANT",$ia,$k[2]," ON $k[1] TO $lb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($dc!=$lb){queries("DROP USER $dc");}elseif(!isset($_GET["grant"])){foreach($fb
as$Xa=>$rc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$Xa,$k)){grant("REVOKE",array_keys($rc),$k[2]," ON $k[1] FROM $lb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'Benutzer geändert.':'Benutzer erstellt.'),!$n);if($dc!=$lb){$g->query("DROP USER $lb");}}}page_header((isset($_GET["host"])?'Benutzer'.": ".h("$md@$_GET[host]"):'Neuer Benutzer'),$n,array("privileges"=>array('','Rechte')));if($_POST){$a=$_POST;$fb=$mc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Yc;if($Yc!=""){$a["hashed"]=true;}$fb[DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Benutzer<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Passwort<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Rechte'."</a>";$l=0;foreach($fb
as$Xa=>$ia){echo'<th>'.($Xa!="*.*"?"<input name='objects[$l]' value='".h($Xa)."' size='10'>":"<input type='hidden' name='objects[$l]' value='*.*' size='10'>*.*");$l++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Datenbank',"Tables"=>'Tabelle',"Columns"=>'Spalte',"Procedures"=>'Rutine',)as$Mc=>$oc){foreach((array)$ra[$Mc]as$yc=>$za){echo"<tr".odd()."><td".($oc?">$oc<td":" colspan='2'").' lang="en" title="'.h($za).'">'.h($yc);$l=0;foreach($fb
as$Xa=>$ia){$f="'grants[$l][".h(strtoupper($yc))."]'";$q=$ia[strtoupper($yc)];if($Mc=="Server Admin"&&$Xa!=(isset($fb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($q?" selected":"").">".'Erlauben'."<option value='0'".($q=="0"?" selected":"").">".'Verbieten'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($q?" checked":"").($yc=="All privileges"?" id='grants-$l-all'":($yc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$l-all');\"")).">";}$l++;}}}echo"</table>\n",'<p>
<input type="submit" value="Speichern">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Entfernen"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$Fd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$Fd++;}}queries_redirect(ME."processlist=",lang(array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),$Fd),$Fd||!$_POST["kill"]);}page_header('Prozessliste',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$l=-1;foreach(process_list()as$l=>$a){if(!$l){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$a["Id"],0):"");foreach($a
as$e=>$b){echo"<td>".(($v=="sql"?$e=="Info"&&$b!="":$e=="current_query"&&$b!="<IDLE>")?"<code class='jush-$v'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Ändern'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>
';if(support("kill")){echo($l+1)."/".sprintf('%d insgesamt',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Anhalten'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$u=table_status($m);$K=indexes($m);$p=fields($m);$ha=column_foreign_keys($m);if($u["Oid"]=="t"){$K[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$Ec);$af=array();$B=array();$Eb=null;foreach($p
as$e=>$d){$f=$o->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$B[$e]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$Eb=$o->selectLengthProcess();}}$af+=$d["privileges"];}list($J,$qa)=$o->selectColumnsProcess($B,$K);$s=$o->selectSearchProcess($p,$K);$cb=$o->selectOrderProcess($p,$K);$M=$o->selectLimitProcess();$Wb=($J?implode(", ",$J):($u["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($m);$od=($qa&&count($qa)<count($J)?"\nGROUP BY ".implode(", ",$qa):"").($cb?"\nORDER BY ".implode(", ",$cb):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Va=>$a){echo$g->result("SELECT".limit(idf_escape(key($a))." FROM ".table($m)," WHERE ".where_check($Va).($s?" AND ".implode(" AND ",$s):"").($cb?" ORDER BY ".implode(", ",$cb):""),1));}exit;}if($_POST&&!$n){$se="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Pa=$jc=null;foreach($K
as$x){if($x["type"]=="PRIMARY"){$Pa=array_flip($x["columns"]);$jc=($J?$Pa:array());break;}}foreach((array)$jc
as$e=>$b){if(in_array(idf_escape($e),$J)){unset($jc[$e]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($m);$o->dumpTable($m,"");if(!is_array($_POST["check"])||$jc===array()){$cc=$s;if(is_array($_POST["check"])){$cc[]="($se)";}$i="SELECT $Wb".($cc?"\nWHERE ".implode(" AND ",$cc):"").$od;}else{$ve=array();foreach($_POST["check"]as$b){$ve[]="(SELECT".limit($Wb,"\nWHERE ".($s?implode(" AND ",$s)." AND ":"").where_check($b).$od,1).")";}$i=implode(" UNION ALL ",$ve);}$o->dumpData($m,"table",$i);exit;}if(!$o->selectEmailProcess($s,$ha)){if($_POST["save"]||$_POST["delete"]){$j=true;$tb=0;$i=table($m);$r=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$r[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$r[]=idf_escape($f)." = $b";}}}$i.=($_POST["clone"]?" (".implode(", ",array_keys($r)).")\nSELECT ".implode(", ",$r)."\nFROM ".table($m):" SET\n".implode(",\n",$r));}if($_POST["delete"]||$r){$ed="UPDATE";if($_POST["delete"]){$ed="DELETE";$i="FROM $i";}if($_POST["clone"]){$ed="INSERT";$i="INTO $i";}if($_POST["all"]||($jc===array()&&$_POST["check"])||count($qa)<count($J)){$j=queries($ed." $i".($_POST["all"]?($s?"\nWHERE ".implode(" AND ",$s):""):"\nWHERE $se"));$tb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$j=queries($ed.limit1($i,"\nWHERE ".where_check($b)));if(!$j){break;}$tb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),sprintf('%d Artikel betroffen.',$tb),$j);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n='Doppelklick zum Bearbeiten des Wertes.';}else{$j=true;$tb=0;foreach($_POST["val"]as$Va=>$a){$r=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$r[]=idf_escape($e)." = ".(ereg('char|text',$p[$e]["type"])||$b!=""?$o->processInput($p[$e],$b):"NULL");}$i=table($m)." SET ".implode(", ",$r);$cc=" WHERE ".where_check($Va).($s?" AND ".implode(" AND ",$s):"");$j=queries("UPDATE".(count($qa)<count($J)?" $i$cc":limit1($i,$cc)));if(!$j){break;}$tb+=$g->affected_rows;}queries_redirect(remove_from_uri(),sprintf('%d Artikel betroffen.',$tb),$j);}}elseif(is_string($Ga=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($Ec["output"])."&format=".urlencode($_POST["separator"]));$j=true;$ib=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Ga,$sa);$tb=count($sa[0]);begin();$bb=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($sa[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$bb]*)$bb~",$b.$bb,$Dd);if(!$e&&!array_diff($Dd[1],$ib)){$ib=$Dd[1];$tb--;}else{$r=array();foreach($Dd[1]as$l=>$ad){$r[idf_escape($ib[$l])]=($ad==""&&$p[$ib[$l]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$ad))));}$j=insert_update($m,$r,$Pa);if(!$j){break;}}}if($j){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),$tb),$j);queries("ROLLBACK");}else{$n=upload_error($Ga);}}}$Fa=$o->tableName($u);page_header('Daten zeigen von'.": $Fa",$n);session_write_close();$r=null;if(isset($af["insert"])){$r="";foreach((array)$_GET["where"]as$b){if(count($ha[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$r.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$o->selectLinks($u,$r);if(!$B){echo"<p class='error'>".'Auswahl der Tabelle fehlgeschlagen'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$o->selectColumnsPrint($J,$B);$o->selectSearchPrint($s,$B,$K);$o->selectOrderPrint($cb,$B,$K);$o->selectLimitPrint($M);$o->selectLengthPrint($Eb);$o->selectActionPrint();echo"</form>\n";$Y=$_GET["page"];if($Y=="last"){$kb=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));$Y=floor(max(0,$kb-1)/$M);}$i="SELECT".limit((+$M&&$qa&&count($qa)<count($J)&&$v=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Wb,($s?"\nWHERE ".implode(" AND ",$s):"").$od,($M!=""?+$M:null),($Y?$M*$Y:0),"\n");echo$o->selectQuery($i);$j=$g->query($i);if(!$j){echo"<p class='error'>".error()."\n";}else{if($v=="mssql"){$j->seek($M*$Y);}$Wc=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$H=array();while($a=$j->fetch_assoc()){if($Y&&$v=="oracle"){unset($a["RNUM"]);}$H[]=$a;}if($_GET["page"]!="last"){$kb=(+$M&&$qa&&count($qa)<count($J)?($v=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($i) x")):count($H));}if(!$H){echo"<p class='message'>".'Keine Daten.'."\n";}else{$sd=$o->backwardKeys($m,$Fa);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$qa&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'ändern'."</a>");$qd=array();$aa=array();reset($J);$le=1;foreach($H[0]as$e=>$b){if($u["Oid"]!="t"||$e!="oid"){$b=$_GET["columns"][key($J)];$d=$p[$J?($b?$b["col"]:current($J)):$e];$f=($d?$o->fieldName($d,$le):"*");if($f!=""){$le++;$qd[$e]=$f;$D=idf_escape($e);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($cb[0]==$D||$cb[0]==$e||(!$cb&&count($qa)<count($J)&&$qa[0]==$D)?'&desc%5B0%5D=1':'')).'">'.(!$J||$b?apply_sql_function($b["fun"],$f):h(current($J)))."</a>";}$aa[$e]=$b["fun"];next($J);}}$Xb=array();if($_GET["modify"]){foreach($H
as$a){foreach($a
as$e=>$b){$Xb[$e]=max($Xb[$e],min(40,strlen(utf8_decode($b))));}}}echo($sd?"<th>".'Relationen':"")."</thead>\n";foreach($o->rowDescriptions($H,$ha)as$ga=>$a){$wd=unique_array($H[$ga],$K);$Va="";foreach($wd
as$e=>$b){$Va.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd().">".(!$qa&&$J?"":"<td>".checkbox("check[]",substr($Va,1),in_array(substr($Va,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($qa)<count($J)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$Va)."'>".'ändern'."</a>"));foreach($a
as$e=>$b){if(isset($qd[$e])){$d=$p[$e];if($b!=""&&(!isset($Wc[$e])||$Wc[$e]!="")){$Wc[$e]=(is_mail($b)?$qd[$e]:"");}$y="";$b=$o->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$y=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$Va);}if($b===""){$b="&nbsp;";}elseif($Eb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$Eb));}else{$b=h($b);}if(!$y){foreach((array)$ha[$e]as$C){if(count($ha[$e])==1||end($C["source"])==$e){$y="";foreach($C["source"]as$l=>$Ca){$y.=where_link($l,$C["target"][$l],$H[$ga][$Ca]);}$y=h(($C["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($C["db"]),ME):ME).'select='.urlencode($C["table"]).$y);if(count($C["source"])==1){break;}}}}if($e=="COUNT(*)"){$y=h(ME."select=".urlencode($m));$l=0;foreach((array)$_GET["where"]as$z){if(!array_key_exists($z["col"],$wd)){$y.=h(where_link($l++,$z["col"],$z["val"],$z["op"]));}}foreach($wd
as$Ka=>$z){$y.=h(where_link($l++,$Ka,$z));}}}if(!$y){if(is_mail($b)){$y="mailto:$b";}if($ne=is_url($a[$e])){$y=($ne=="http"&&$uc?$a[$e]:"$ne://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$R=h("val[$Va][".bracket_escape($e)."]");$q=$_POST["val"][$Va][bracket_escape($e)];$oe=h(isset($q)?$q:$a[$e]);$hf=strpos($b,"<i>...</i>");$xe=is_utf8($b)&&$H[$ga][$e]==$a[$e]&&!$aa[$e];$Ge=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$xe)||isset($q)?"<td>".($Ge?"<textarea name='$R' cols='30' rows='".(substr_count($a[$e],"\n")+1)."'>$oe</textarea>":"<input name='$R' value='$oe' size='$Xb[$e]'>"):"<td id='$R' ondblclick=\"".($xe?"selectDblClick(this, event".($hf?", 2":($Ge?", 1":"")).")":"alert('".h('Benutzen Sie den Link zum editieren dieses Wertes.')."')").";\">".$o->selectVal($b,$y,$d));}}if($sd){echo"<td>";}$o->backwardKeysPrint($sd,$H[$ga]);echo"</tr>\n";}echo"</table>\n";}if($H||$Y){$rd=true;if($_GET["page"]!="last"&&+$M&&count($qa)>=count($J)&&($kb>=$M||$Y)){$kb=found_rows($u,$s);if($kb<max(1e4,2*($Y+1)*$M)){ob_flush();flush();$kb=$g->result("SELECT COUNT(*) FROM ".table($m).($s?" WHERE ".implode(" AND ",$s):""));}else{$rd=false;}}echo"<p class='pages'>";if(+$M&&$kb>$M){$Hd=floor(($kb-1)/$M);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Seite'."', '".($Y+1)."'), event); return false;\">".'Seite'."</a>:",pagination(0,$Y).($Y>5?" ...":"");for($l=max(1,$Y-4);$l<min($Hd,$Y+5);$l++){echo
pagination($l,$Y);}echo($Y+5<$Hd?" ...":"").($rd?pagination($Hd,$Y):' <a href="'.h(remove_from_uri()."&page=last").'">'.'letzte'."</a>");}echo" (".($rd?"":"~ ").lang(array('%d Datensatz','%d Datensätze'),$kb).") ".checkbox("all",1,0,'Gesamtergebnis')."\n";if($o->selectCommandPrint()){?>
<fieldset><legend>Ändern</legend><div>
<input type="submit" value="Speichern" title="Doppelklick zum Bearbeiten des Wertes." class="jsonly">
<input type="submit" name="edit" value="Ändern">
<input type="submit" name="clone" value="Klonen">
<input type="submit" name="delete" value="Entfernen" onclick="return confirm('Sind Sie sicher ? (' + (this.form['all'].checked ? <?php echo$kb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Exportieren');$Ma=$o->dumpOutput();echo($Ma?html_select("output",$Ma,$Ec["output"])." ":""),html_select("format",$o->dumpFormat(),$Ec["format"])," <input type='submit' name='export' value='".'Exportieren'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($o->selectImportPrint()){print_fieldset("import",'Importieren',!$H);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Ec["format"],1);echo" <input type='submit' name='import' value='".'Importieren'."'>","<input type='hidden' name='token' value='$O'>\n","</div></fieldset>\n";}$o->selectEmailPrint(array_filter($Wc,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$ec=isset($_GET["status"]);page_header($ec?'Status':'Variablen');$Be=($ec?show_status():show_variables());if(!$Be){echo"<p class='message'>".'Keine Daten.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($Be
as$e=>$b){echo"<tr>","<th><code class='jush-".$v.($ec?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Tc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$u){$R=js_escape($u["Name"]);json_row("Comment-$R",nbsp($u["Comment"]));if(!is_view($u)){foreach(array("Engine","Collation")as$e){json_row("$e-$R",nbsp($u[$e]));}foreach($Tc+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($u[$e]!=""){$b=number_format($u[$e],0,'.',' ');json_row("$e-$R",($e=="Rows"&&$u["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($Tc[$e])){$Tc[$e]+=($u["Engine"]!="InnoDB"||$e!="Data_free"?$u[$e]:0);}}elseif(array_key_exists($e,$u)){json_row("$e-$R");}}}}foreach($Tc
as$e=>$b){json_row("sum-$e",number_format($b,0,'.',' '));}json_row("");}else{foreach(count_tables(get_databases())as$t=>$b){json_row("tables-".js_escape($t),$b);}json_row("");}exit;}else{$ye=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($ye&&!$n&&!$_POST["search"]){$j=true;$ta="";if($v=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$j=truncate_tables($_POST["tables"]);}$ta='Tabellen sind entleert worden (truncate).';}elseif($_POST["move"]){$j=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ta='Tabellen verschoben.';}elseif($_POST["copy"]){$j=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ta='Tabellen wurden kopiert.';}elseif($_POST["drop"]){if($_POST["views"]){$j=drop_views($_POST["views"]);}if($j&&$_POST["tables"]){$j=drop_tables($_POST["tables"]);}$ta='Tabellen wurden entfernt (drop).';}elseif($_POST["tables"]&&($j=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$j->fetch_assoc()){$ta.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ta,$j);}page_header(($_GET["ns"]==""?'Datenbank'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($o->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tabellen und Views'."</h3>\n";$Rc=tables_list();if(!$Rc){echo"<p class='message'>".'Keine Tabellen.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Suche in Tabellen'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Suchen'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Tabelle'.'<td>'.'Motor'.'<td>'.'Collation'.'<td>'.'Datengrösse'.'<td>'.'Indexgrösse'.'<td>'.'Freier Bereich'.'<td>'.'Auto-Inkrement'.'<td>'.'Datensätze'.(support("comment")?'<td>'.'Kommentar':'')."</thead>\n";foreach($Rc
as$f=>$_){$bc=(isset($_)&&!eregi("table",$_));echo'<tr'.odd().'><td>'.checkbox(($bc?"views[]":"tables[]"),$f,in_array($f,$ye,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($bc){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$y){echo($y?"<td align='right'><a href='".h(ME."$y=").urlencode($f)."' id='$e-".h($f)."'>?</a>":"<td id='$e-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d insgesamt',count($Rc)),"<td>".nbsp($v=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$e){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($v=="sql"?"<input type='submit' value='".'Analysieren'."'> <input type='submit' name='optimize' value='".'Optimieren'."'> <input type='submit' name='check' value='".'Prüfen'."'> <input type='submit' name='repair' value='".'Reparieren'."'> ":"")."<input type='submit' name='truncate' value='".'Entleeren (truncate)'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Entfernen'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$A=(support("scheme")?schemas():get_databases());if(count($A)!=1&&$v!="sqlite"){$t=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'In andere Datenbank verschieben'.": ",($A?html_select("target",$A,$t):'<input name="target" value="'.h($t).'">')," <input type='submit' name='move' value='".'Verschieben'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Kopieren'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$O'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Neue Tabelle erstellen'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Neue View erstellen'."</a>\n";}if(support("routine")){echo"<h3>".'Prozeduren'."</h3>\n";$ze=routines();if($ze){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Typ'.'<td>'.'Typ des Rückgabewertes'."<td>&nbsp;</thead>\n";odd('');foreach($ze
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Ändern'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Neue Prozedur'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Neue Funktion'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequenz'."</h3>\n";$Ae=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Ae){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Ae
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Neue Sequenz'."</a>\n";}if(support("type")){echo"<h3>".'Benutzer-definierte Typen'."</h3>\n";$S=types();if($S){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($S
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Typ erstellen'."</a>\n";}if(support("event")){echo"<h3>".'Ereignisse'."</h3>\n";$H=get_rows("SHOW EVENTS");if($H){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Zeitplan'."<td>".'Start'."<td>".'Ende'."</thead>\n";foreach($H
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'Zur angegebenen Zeit'."<td>".$a["Execute at"]:'Jede'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Ereignis erstellen'."</a>\n";}if($Rc){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();