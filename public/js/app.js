!function(e){var n={};function t(a){if(n[a])return n[a].exports;var r=n[a]={i:a,l:!1,exports:{}};return e[a].call(r.exports,r,r.exports,t),r.l=!0,r.exports}t.m=e,t.c=n,t.d=function(e,n,a){t.o(e,n)||Object.defineProperty(e,n,{configurable:!1,enumerable:!0,get:a})},t.n=function(e){var n=e&&e.__esModule?function(){return e.default}:function(){return e};return t.d(n,"a",n),n},t.o=function(e,n){return Object.prototype.hasOwnProperty.call(e,n)},t.p="/",t(t.s=0)}([function(e,n,t){t(1),t(8),t(9),e.exports=t(10)},function(e,n,t){"use strict";Object.defineProperty(n,"__esModule",{value:!0});var a=t(2),r=t.n(a),i=t(3),s=t.n(i),o=t(4),l=t.n(o),c=t(5),d=t.n(c),u=t(6),g=t.n(u),m=t(7),p=t.n(m);r.a.registerLanguage("javascript",s.a),r.a.registerLanguage("php",l.a),r.a.registerLanguage("python",d.a),r.a.registerLanguage("sql",g.a),r.a.registerLanguage("bash",p.a),r.a.initHighlightingOnLoad()},function(e,n,t){!function(e){"object"==typeof window&&window||"object"==typeof self&&self;e(n)}(function(e){var n=[],t=Object.keys,a={},r={},i=/^(no-?highlight|plain|text)$/i,s=/\blang(?:uage)?-([\w-]+)\b/i,o=/((^(<[^>]+>|\t|)+|(?:\n)))/gm,l="</span>",c={classPrefix:"hljs-",tabReplace:null,useBR:!1,languages:void 0};function d(e){return e.replace(/&/g,"&amp;").replace(/</g,"&lt;").replace(/>/g,"&gt;")}function u(e){return e.nodeName.toLowerCase()}function g(e,n){var t=e&&e.exec(n);return t&&0===t.index}function m(e){return i.test(e)}function p(e){var n,t={},a=Array.prototype.slice.call(arguments,1);for(n in e)t[n]=e[n];return a.forEach(function(e){for(n in e)t[n]=e[n]}),t}function _(e){var n=[];return function e(t,a){for(var r=t.firstChild;r;r=r.nextSibling)3===r.nodeType?a+=r.nodeValue.length:1===r.nodeType&&(n.push({event:"start",offset:a,node:r}),a=e(r,a),u(r).match(/br|hr|img|input/)||n.push({event:"stop",offset:a,node:r}));return a}(e,0),n}function f(e){function n(e){return e&&e.source||e}function a(t,a){return new RegExp(n(t),"m"+(e.case_insensitive?"i":"")+(a?"g":""))}!function r(i,s){if(!i.compiled){if(i.compiled=!0,i.keywords=i.keywords||i.beginKeywords,i.keywords){var o={},l=function(n,t){e.case_insensitive&&(t=t.toLowerCase()),t.split(" ").forEach(function(e){var t=e.split("|");o[t[0]]=[n,t[1]?Number(t[1]):1]})};"string"==typeof i.keywords?l("keyword",i.keywords):t(i.keywords).forEach(function(e){l(e,i.keywords[e])}),i.keywords=o}i.lexemesRe=a(i.lexemes||/\w+/,!0),s&&(i.beginKeywords&&(i.begin="\\b("+i.beginKeywords.split(" ").join("|")+")\\b"),i.begin||(i.begin=/\B|\b/),i.beginRe=a(i.begin),i.endSameAsBegin&&(i.end=i.begin),i.end||i.endsWithParent||(i.end=/\B|\b/),i.end&&(i.endRe=a(i.end)),i.terminator_end=n(i.end)||"",i.endsWithParent&&s.terminator_end&&(i.terminator_end+=(i.end?"|":"")+s.terminator_end)),i.illegal&&(i.illegalRe=a(i.illegal)),null==i.relevance&&(i.relevance=1),i.contains||(i.contains=[]),i.contains=Array.prototype.concat.apply([],i.contains.map(function(e){return function(e){return e.variants&&!e.cached_variants&&(e.cached_variants=e.variants.map(function(n){return p(e,{variants:null},n)})),e.cached_variants||e.endsWithParent&&[p(e)]||[e]}("self"===e?i:e)})),i.contains.forEach(function(e){r(e,i)}),i.starts&&r(i.starts,s);var c=i.contains.map(function(e){return e.beginKeywords?"\\.?("+e.begin+")\\.?":e.begin}).concat([i.terminator_end,i.illegal]).map(n).filter(Boolean);i.terminators=c.length?a(c.join("|"),!0):{exec:function(){return null}}}}(e)}function b(e,n,t,r){function i(e,n){var t=p.case_insensitive?n[0].toLowerCase():n[0];return e.keywords.hasOwnProperty(t)&&e.keywords[t]}function s(e,n,t,a){var r='<span class="'+(a?"":c.classPrefix);return(r+=e+'">')+n+(t?"":l)}function o(){y+=null!=v.subLanguage?function(){var e="string"==typeof v.subLanguage;if(e&&!a[v.subLanguage])return d(x);var n=e?b(v.subLanguage,x,!0,E[v.subLanguage]):h(x,v.subLanguage.length?v.subLanguage:void 0);return v.relevance>0&&(N+=n.relevance),e&&(E[v.subLanguage]=n.top),s(n.language,n.value,!1,!0)}():function(){var e,n,t,a;if(!v.keywords)return d(x);for(a="",n=0,v.lexemesRe.lastIndex=0,t=v.lexemesRe.exec(x);t;)a+=d(x.substring(n,t.index)),(e=i(v,t))?(N+=e[1],a+=s(e[0],d(t[0]))):a+=d(t[0]),n=v.lexemesRe.lastIndex,t=v.lexemesRe.exec(x);return a+d(x.substr(n))}(),x=""}function u(e){y+=e.className?s(e.className,"",!0):"",v=Object.create(e,{parent:{value:v}})}function m(e,n){if(x+=e,null==n)return o(),0;var a=function(e,n){var t,a,r;for(t=0,a=n.contains.length;t<a;t++)if(g(n.contains[t].beginRe,e))return n.contains[t].endSameAsBegin&&(n.contains[t].endRe=(r=n.contains[t].beginRe.exec(e)[0],new RegExp(r.replace(/[-\/\\^$*+?.()|[\]{}]/g,"\\$&"),"m"))),n.contains[t]}(n,v);if(a)return a.skip?x+=n:(a.excludeBegin&&(x+=n),o(),a.returnBegin||a.excludeBegin||(x=n)),u(a),a.returnBegin?0:n.length;var r=function e(n,t){if(g(n.endRe,t)){for(;n.endsParent&&n.parent;)n=n.parent;return n}if(n.endsWithParent)return e(n.parent,t)}(v,n);if(r){var i=v;i.skip?x+=n:(i.returnEnd||i.excludeEnd||(x+=n),o(),i.excludeEnd&&(x=n));do{v.className&&(y+=l),v.skip||v.subLanguage||(N+=v.relevance),v=v.parent}while(v!==r.parent);return r.starts&&(r.endSameAsBegin&&(r.starts.endRe=r.endRe),u(r.starts)),i.returnEnd?0:n.length}if(function(e,n){return!t&&g(n.illegalRe,e)}(n,v))throw new Error('Illegal lexeme "'+n+'" for mode "'+(v.className||"<unnamed>")+'"');return x+=n,n.length||1}var p=w(e);if(!p)throw new Error('Unknown language: "'+e+'"');f(p);var _,v=r||p,E={},y="";for(_=v;_!==p;_=_.parent)_.className&&(y=s(_.className,"",!0)+y);var x="",N=0;try{for(var M,O,k=0;v.terminators.lastIndex=k,M=v.terminators.exec(n);)O=m(n.substring(k,M.index),M[0]),k=M.index+O;for(m(n.substr(k)),_=v;_.parent;_=_.parent)_.className&&(y+=l);return{relevance:N,value:y,language:e,top:v}}catch(e){if(e.message&&-1!==e.message.indexOf("Illegal"))return{relevance:0,value:d(n)};throw e}}function h(e,n){n=n||c.languages||t(a);var r={relevance:0,value:d(e)},i=r;return n.filter(w).filter(x).forEach(function(n){var t=b(n,e,!1);t.language=n,t.relevance>i.relevance&&(i=t),t.relevance>r.relevance&&(i=r,r=t)}),i.language&&(r.second_best=i),r}function v(e){return c.tabReplace||c.useBR?e.replace(o,function(e,n){return c.useBR&&"\n"===e?"<br>":c.tabReplace?n.replace(/\t/g,c.tabReplace):""}):e}function E(e){var t,a,i,o,l,g=function(e){var n,t,a,r,i=e.className+" ";if(i+=e.parentNode?e.parentNode.className:"",t=s.exec(i))return w(t[1])?t[1]:"no-highlight";for(n=0,a=(i=i.split(/\s+/)).length;n<a;n++)if(m(r=i[n])||w(r))return r}(e);m(g)||(c.useBR?(t=document.createElementNS("http://www.w3.org/1999/xhtml","div")).innerHTML=e.innerHTML.replace(/\n/g,"").replace(/<br[ \/]*>/g,"\n"):t=e,l=t.textContent,i=g?b(g,l,!0):h(l),(a=_(t)).length&&((o=document.createElementNS("http://www.w3.org/1999/xhtml","div")).innerHTML=i.value,i.value=function(e,t,a){var r=0,i="",s=[];function o(){return e.length&&t.length?e[0].offset!==t[0].offset?e[0].offset<t[0].offset?e:t:"start"===t[0].event?e:t:e.length?e:t}function l(e){i+="<"+u(e)+n.map.call(e.attributes,function(e){return" "+e.nodeName+'="'+d(e.value).replace('"',"&quot;")+'"'}).join("")+">"}function c(e){i+="</"+u(e)+">"}function g(e){("start"===e.event?l:c)(e.node)}for(;e.length||t.length;){var m=o();if(i+=d(a.substring(r,m[0].offset)),r=m[0].offset,m===e){s.reverse().forEach(c);do{g(m.splice(0,1)[0]),m=o()}while(m===e&&m.length&&m[0].offset===r);s.reverse().forEach(l)}else"start"===m[0].event?s.push(m[0].node):s.pop(),g(m.splice(0,1)[0])}return i+d(a.substr(r))}(a,_(o),l)),i.value=v(i.value),e.innerHTML=i.value,e.className=function(e,n,t){var a=n?r[n]:t,i=[e.trim()];return e.match(/\bhljs\b/)||i.push("hljs"),-1===e.indexOf(a)&&i.push(a),i.join(" ").trim()}(e.className,g,i.language),e.result={language:i.language,re:i.relevance},i.second_best&&(e.second_best={language:i.second_best.language,re:i.second_best.relevance}))}function y(){if(!y.called){y.called=!0;var e=document.querySelectorAll("pre code");n.forEach.call(e,E)}}function w(e){return e=(e||"").toLowerCase(),a[e]||a[r[e]]}function x(e){var n=w(e);return n&&!n.disableAutodetect}return e.highlight=b,e.highlightAuto=h,e.fixMarkup=v,e.highlightBlock=E,e.configure=function(e){c=p(c,e)},e.initHighlighting=y,e.initHighlightingOnLoad=function(){addEventListener("DOMContentLoaded",y,!1),addEventListener("load",y,!1)},e.registerLanguage=function(n,t){var i=a[n]=t(e);i.aliases&&i.aliases.forEach(function(e){r[e]=n})},e.listLanguages=function(){return t(a)},e.getLanguage=w,e.autoDetection=x,e.inherit=p,e.IDENT_RE="[a-zA-Z]\\w*",e.UNDERSCORE_IDENT_RE="[a-zA-Z_]\\w*",e.NUMBER_RE="\\b\\d+(\\.\\d+)?",e.C_NUMBER_RE="(-?)(\\b0[xX][a-fA-F0-9]+|(\\b\\d+(\\.\\d*)?|\\.\\d+)([eE][-+]?\\d+)?)",e.BINARY_NUMBER_RE="\\b(0b[01]+)",e.RE_STARTERS_RE="!|!=|!==|%|%=|&|&&|&=|\\*|\\*=|\\+|\\+=|,|-|-=|/=|/|:|;|<<|<<=|<=|<|===|==|=|>>>=|>>=|>=|>>>|>>|>|\\?|\\[|\\{|\\(|\\^|\\^=|\\||\\|=|\\|\\||~",e.BACKSLASH_ESCAPE={begin:"\\\\[\\s\\S]",relevance:0},e.APOS_STRING_MODE={className:"string",begin:"'",end:"'",illegal:"\\n",contains:[e.BACKSLASH_ESCAPE]},e.QUOTE_STRING_MODE={className:"string",begin:'"',end:'"',illegal:"\\n",contains:[e.BACKSLASH_ESCAPE]},e.PHRASAL_WORDS_MODE={begin:/\b(a|an|the|are|I'm|isn't|don't|doesn't|won't|but|just|should|pretty|simply|enough|gonna|going|wtf|so|such|will|you|your|they|like|more)\b/},e.COMMENT=function(n,t,a){var r=e.inherit({className:"comment",begin:n,end:t,contains:[]},a||{});return r.contains.push(e.PHRASAL_WORDS_MODE),r.contains.push({className:"doctag",begin:"(?:TODO|FIXME|NOTE|BUG|XXX):",relevance:0}),r},e.C_LINE_COMMENT_MODE=e.COMMENT("//","$"),e.C_BLOCK_COMMENT_MODE=e.COMMENT("/\\*","\\*/"),e.HASH_COMMENT_MODE=e.COMMENT("#","$"),e.NUMBER_MODE={className:"number",begin:e.NUMBER_RE,relevance:0},e.C_NUMBER_MODE={className:"number",begin:e.C_NUMBER_RE,relevance:0},e.BINARY_NUMBER_MODE={className:"number",begin:e.BINARY_NUMBER_RE,relevance:0},e.CSS_NUMBER_MODE={className:"number",begin:e.NUMBER_RE+"(%|em|ex|ch|rem|vw|vh|vmin|vmax|cm|mm|in|pt|pc|px|deg|grad|rad|turn|s|ms|Hz|kHz|dpi|dpcm|dppx)?",relevance:0},e.REGEXP_MODE={className:"regexp",begin:/\//,end:/\/[gimuy]*/,illegal:/\n/,contains:[e.BACKSLASH_ESCAPE,{begin:/\[/,end:/\]/,relevance:0,contains:[e.BACKSLASH_ESCAPE]}]},e.TITLE_MODE={className:"title",begin:e.IDENT_RE,relevance:0},e.UNDERSCORE_TITLE_MODE={className:"title",begin:e.UNDERSCORE_IDENT_RE,relevance:0},e.METHOD_GUARD={begin:"\\.\\s*"+e.UNDERSCORE_IDENT_RE,relevance:0},e})},function(e,n){e.exports=function(e){var n="[A-Za-z$_][0-9A-Za-z$_]*",t={keyword:"in of if for while finally var new function do return void else break catch instanceof with throw case default try this switch continue typeof delete let yield const export super debugger as async await static import from as",literal:"true false null undefined NaN Infinity",built_in:"eval isFinite isNaN parseFloat parseInt decodeURI decodeURIComponent encodeURI encodeURIComponent escape unescape Object Function Boolean Error EvalError InternalError RangeError ReferenceError StopIteration SyntaxError TypeError URIError Number Math Date String RegExp Array Float32Array Float64Array Int16Array Int32Array Int8Array Uint16Array Uint32Array Uint8Array Uint8ClampedArray ArrayBuffer DataView JSON Intl arguments require module console window document Symbol Set Map WeakSet WeakMap Proxy Reflect Promise"},a={className:"number",variants:[{begin:"\\b(0[bB][01]+)"},{begin:"\\b(0[oO][0-7]+)"},{begin:e.C_NUMBER_RE}],relevance:0},r={className:"subst",begin:"\\$\\{",end:"\\}",keywords:t,contains:[]},i={className:"string",begin:"`",end:"`",contains:[e.BACKSLASH_ESCAPE,r]};r.contains=[e.APOS_STRING_MODE,e.QUOTE_STRING_MODE,i,a,e.REGEXP_MODE];var s=r.contains.concat([e.C_BLOCK_COMMENT_MODE,e.C_LINE_COMMENT_MODE]);return{aliases:["js","jsx"],keywords:t,contains:[{className:"meta",relevance:10,begin:/^\s*['"]use (strict|asm)['"]/},{className:"meta",begin:/^#!/,end:/$/},e.APOS_STRING_MODE,e.QUOTE_STRING_MODE,i,e.C_LINE_COMMENT_MODE,e.C_BLOCK_COMMENT_MODE,a,{begin:/[{,]\s*/,relevance:0,contains:[{begin:n+"\\s*:",returnBegin:!0,relevance:0,contains:[{className:"attr",begin:n,relevance:0}]}]},{begin:"("+e.RE_STARTERS_RE+"|\\b(case|return|throw)\\b)\\s*",keywords:"return throw case",contains:[e.C_LINE_COMMENT_MODE,e.C_BLOCK_COMMENT_MODE,e.REGEXP_MODE,{className:"function",begin:"(\\(.*?\\)|"+n+")\\s*=>",returnBegin:!0,end:"\\s*=>",contains:[{className:"params",variants:[{begin:n},{begin:/\(\s*\)/},{begin:/\(/,end:/\)/,excludeBegin:!0,excludeEnd:!0,keywords:t,contains:s}]}]},{begin:/</,end:/(\/\w+|\w+\/)>/,subLanguage:"xml",contains:[{begin:/<\w+\s*\/>/,skip:!0},{begin:/<\w+/,end:/(\/\w+|\w+\/)>/,skip:!0,contains:[{begin:/<\w+\s*\/>/,skip:!0},"self"]}]}],relevance:0},{className:"function",beginKeywords:"function",end:/\{/,excludeEnd:!0,contains:[e.inherit(e.TITLE_MODE,{begin:n}),{className:"params",begin:/\(/,end:/\)/,excludeBegin:!0,excludeEnd:!0,contains:s}],illegal:/\[|%/},{begin:/\$[(.]/},e.METHOD_GUARD,{className:"class",beginKeywords:"class",end:/[{;=]/,excludeEnd:!0,illegal:/[:"\[\]]/,contains:[{beginKeywords:"extends"},e.UNDERSCORE_TITLE_MODE]},{beginKeywords:"constructor",end:/\{/,excludeEnd:!0}],illegal:/#(?!!)/}}},function(e,n){e.exports=function(e){var n={begin:"\\$+[a-zA-Z_-ÿ][a-zA-Z0-9_-ÿ]*"},t={className:"meta",begin:/<\?(php)?|\?>/},a={className:"string",contains:[e.BACKSLASH_ESCAPE,t],variants:[{begin:'b"',end:'"'},{begin:"b'",end:"'"},e.inherit(e.APOS_STRING_MODE,{illegal:null}),e.inherit(e.QUOTE_STRING_MODE,{illegal:null})]},r={variants:[e.BINARY_NUMBER_MODE,e.C_NUMBER_MODE]};return{aliases:["php","php3","php4","php5","php6","php7"],case_insensitive:!0,keywords:"and include_once list abstract global private echo interface as static endswitch array null if endwhile or const for endforeach self var while isset public protected exit foreach throw elseif include __FILE__ empty require_once do xor return parent clone use __CLASS__ __LINE__ else break print eval new catch __METHOD__ case exception default die require __FUNCTION__ enddeclare final try switch continue endfor endif declare unset true false trait goto instanceof insteadof __DIR__ __NAMESPACE__ yield finally",contains:[e.HASH_COMMENT_MODE,e.COMMENT("//","$",{contains:[t]}),e.COMMENT("/\\*","\\*/",{contains:[{className:"doctag",begin:"@[A-Za-z]+"}]}),e.COMMENT("__halt_compiler.+?;",!1,{endsWithParent:!0,keywords:"__halt_compiler",lexemes:e.UNDERSCORE_IDENT_RE}),{className:"string",begin:/<<<['"]?\w+['"]?$/,end:/^\w+;?$/,contains:[e.BACKSLASH_ESCAPE,{className:"subst",variants:[{begin:/\$\w+/},{begin:/\{\$/,end:/\}/}]}]},t,{className:"keyword",begin:/\$this\b/},n,{begin:/(::|->)+[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/},{className:"function",beginKeywords:"function",end:/[;{]/,excludeEnd:!0,illegal:"\\$|\\[|%",contains:[e.UNDERSCORE_TITLE_MODE,{className:"params",begin:"\\(",end:"\\)",contains:["self",n,e.C_BLOCK_COMMENT_MODE,a,r]}]},{className:"class",beginKeywords:"class interface",end:"{",excludeEnd:!0,illegal:/[:\(\$"]/,contains:[{beginKeywords:"extends implements"},e.UNDERSCORE_TITLE_MODE]},{beginKeywords:"namespace",end:";",illegal:/[\.']/,contains:[e.UNDERSCORE_TITLE_MODE]},{beginKeywords:"use",end:";",contains:[e.UNDERSCORE_TITLE_MODE]},{begin:"=>"},a,r]}}},function(e,n){e.exports=function(e){var n={keyword:"and elif is global as in if from raise for except finally print import pass return exec else break not with class assert yield try while continue del or def lambda async await nonlocal|10 None True False",built_in:"Ellipsis NotImplemented"},t={className:"meta",begin:/^(>>>|\.\.\.) /},a={className:"subst",begin:/\{/,end:/\}/,keywords:n,illegal:/#/},r={className:"string",contains:[e.BACKSLASH_ESCAPE],variants:[{begin:/(u|b)?r?'''/,end:/'''/,contains:[e.BACKSLASH_ESCAPE,t],relevance:10},{begin:/(u|b)?r?"""/,end:/"""/,contains:[e.BACKSLASH_ESCAPE,t],relevance:10},{begin:/(fr|rf|f)'''/,end:/'''/,contains:[e.BACKSLASH_ESCAPE,t,a]},{begin:/(fr|rf|f)"""/,end:/"""/,contains:[e.BACKSLASH_ESCAPE,t,a]},{begin:/(u|r|ur)'/,end:/'/,relevance:10},{begin:/(u|r|ur)"/,end:/"/,relevance:10},{begin:/(b|br)'/,end:/'/},{begin:/(b|br)"/,end:/"/},{begin:/(fr|rf|f)'/,end:/'/,contains:[e.BACKSLASH_ESCAPE,a]},{begin:/(fr|rf|f)"/,end:/"/,contains:[e.BACKSLASH_ESCAPE,a]},e.APOS_STRING_MODE,e.QUOTE_STRING_MODE]},i={className:"number",relevance:0,variants:[{begin:e.BINARY_NUMBER_RE+"[lLjJ]?"},{begin:"\\b(0o[0-7]+)[lLjJ]?"},{begin:e.C_NUMBER_RE+"[lLjJ]?"}]},s={className:"params",begin:/\(/,end:/\)/,contains:["self",t,i,r]};return a.contains=[r,i,t],{aliases:["py","gyp"],keywords:n,illegal:/(<\/|->|\?)|=>/,contains:[t,i,r,e.HASH_COMMENT_MODE,{variants:[{className:"function",beginKeywords:"def"},{className:"class",beginKeywords:"class"}],end:/:/,illegal:/[${=;\n,]/,contains:[e.UNDERSCORE_TITLE_MODE,s,{begin:/->/,endsWithParent:!0,keywords:"None"}]},{className:"meta",begin:/^[\t ]*@/,end:/$/},{begin:/\b(print|exec)\(/}]}}},function(e,n){e.exports=function(e){var n=e.COMMENT("--","$");return{case_insensitive:!0,illegal:/[<>{}*]/,contains:[{beginKeywords:"begin end start commit rollback savepoint lock alter create drop rename call delete do handler insert load replace select truncate update set show pragma grant merge describe use explain help declare prepare execute deallocate release unlock purge reset change stop analyze cache flush optimize repair kill install uninstall checksum restore check backup revoke comment with",end:/;/,endsWithParent:!0,lexemes:/[\w\.]+/,keywords:{keyword:"as abort abs absolute acc acce accep accept access accessed accessible account acos action activate add addtime admin administer advanced advise aes_decrypt aes_encrypt after agent aggregate ali alia alias allocate allow alter always analyze ancillary and any anydata anydataset anyschema anytype apply archive archived archivelog are as asc ascii asin assembly assertion associate asynchronous at atan atn2 attr attri attrib attribu attribut attribute attributes audit authenticated authentication authid authors auto autoallocate autodblink autoextend automatic availability avg backup badfile basicfile before begin beginning benchmark between bfile bfile_base big bigfile bin binary_double binary_float binlog bit_and bit_count bit_length bit_or bit_xor bitmap blob_base block blocksize body both bound buffer_cache buffer_pool build bulk by byte byteordermark bytes cache caching call calling cancel capacity cascade cascaded case cast catalog category ceil ceiling chain change changed char_base char_length character_length characters characterset charindex charset charsetform charsetid check checksum checksum_agg child choose chr chunk class cleanup clear client clob clob_base clone close cluster_id cluster_probability cluster_set clustering coalesce coercibility col collate collation collect colu colum column column_value columns columns_updated comment commit compact compatibility compiled complete composite_limit compound compress compute concat concat_ws concurrent confirm conn connec connect connect_by_iscycle connect_by_isleaf connect_by_root connect_time connection consider consistent constant constraint constraints constructor container content contents context contributors controlfile conv convert convert_tz corr corr_k corr_s corresponding corruption cos cost count count_big counted covar_pop covar_samp cpu_per_call cpu_per_session crc32 create creation critical cross cube cume_dist curdate current current_date current_time current_timestamp current_user cursor curtime customdatum cycle data database databases datafile datafiles datalength date_add date_cache date_format date_sub dateadd datediff datefromparts datename datepart datetime2fromparts day day_to_second dayname dayofmonth dayofweek dayofyear days db_role_change dbtimezone ddl deallocate declare decode decompose decrement decrypt deduplicate def defa defau defaul default defaults deferred defi defin define degrees delayed delegate delete delete_all delimited demand dense_rank depth dequeue des_decrypt des_encrypt des_key_file desc descr descri describ describe descriptor deterministic diagnostics difference dimension direct_load directory disable disable_all disallow disassociate discardfile disconnect diskgroup distinct distinctrow distribute distributed div do document domain dotnet double downgrade drop dumpfile duplicate duration each edition editionable editions element ellipsis else elsif elt empty enable enable_all enclosed encode encoding encrypt end end-exec endian enforced engine engines enqueue enterprise entityescaping eomonth error errors escaped evalname evaluate event eventdata events except exception exceptions exchange exclude excluding execu execut execute exempt exists exit exp expire explain export export_set extended extent external external_1 external_2 externally extract failed failed_login_attempts failover failure far fast feature_set feature_value fetch field fields file file_name_convert filesystem_like_logging final finish first first_value fixed flash_cache flashback floor flush following follows for forall force foreign form forma format found found_rows freelist freelists freepools fresh from from_base64 from_days ftp full function general generated get get_format get_lock getdate getutcdate global global_name globally go goto grant grants greatest group group_concat group_id grouping grouping_id groups gtid_subtract guarantee guard handler hash hashkeys having hea head headi headin heading heap help hex hierarchy high high_priority hosts hour http id ident_current ident_incr ident_seed identified identity idle_time if ifnull ignore iif ilike ilm immediate import in include including increment index indexes indexing indextype indicator indices inet6_aton inet6_ntoa inet_aton inet_ntoa infile initial initialized initially initrans inmemory inner innodb input insert install instance instantiable instr interface interleaved intersect into invalidate invisible is is_free_lock is_ipv4 is_ipv4_compat is_not is_not_null is_used_lock isdate isnull isolation iterate java join json json_exists keep keep_duplicates key keys kill language large last last_day last_insert_id last_value lax lcase lead leading least leaves left len lenght length less level levels library like like2 like4 likec limit lines link list listagg little ln load load_file lob lobs local localtime localtimestamp locate locator lock locked log log10 log2 logfile logfiles logging logical logical_reads_per_call logoff logon logs long loop low low_priority lower lpad lrtrim ltrim main make_set makedate maketime managed management manual map mapping mask master master_pos_wait match matched materialized max maxextents maximize maxinstances maxlen maxlogfiles maxloghistory maxlogmembers maxsize maxtrans md5 measures median medium member memcompress memory merge microsecond mid migration min minextents minimum mining minus minute minvalue missing mod mode model modification modify module monitoring month months mount move movement multiset mutex name name_const names nan national native natural nav nchar nclob nested never new newline next nextval no no_write_to_binlog noarchivelog noaudit nobadfile nocheck nocompress nocopy nocycle nodelay nodiscardfile noentityescaping noguarantee nokeep nologfile nomapping nomaxvalue nominimize nominvalue nomonitoring none noneditionable nonschema noorder nopr nopro noprom nopromp noprompt norely noresetlogs noreverse normal norowdependencies noschemacheck noswitch not nothing notice notnull notrim novalidate now nowait nth_value nullif nulls num numb numbe nvarchar nvarchar2 object ocicoll ocidate ocidatetime ociduration ociinterval ociloblocator ocinumber ociref ocirefcursor ocirowid ocistring ocitype oct octet_length of off offline offset oid oidindex old on online only opaque open operations operator optimal optimize option optionally or oracle oracle_date oradata ord ordaudio orddicom orddoc order ordimage ordinality ordvideo organization orlany orlvary out outer outfile outline output over overflow overriding package pad parallel parallel_enable parameters parent parse partial partition partitions pascal passing password password_grace_time password_lock_time password_reuse_max password_reuse_time password_verify_function patch path patindex pctincrease pctthreshold pctused pctversion percent percent_rank percentile_cont percentile_disc performance period period_add period_diff permanent physical pi pipe pipelined pivot pluggable plugin policy position post_transaction pow power pragma prebuilt precedes preceding precision prediction prediction_cost prediction_details prediction_probability prediction_set prepare present preserve prior priority private private_sga privileges procedural procedure procedure_analyze processlist profiles project prompt protection public publishingservername purge quarter query quick quiesce quota quotename radians raise rand range rank raw read reads readsize rebuild record records recover recovery recursive recycle redo reduced ref reference referenced references referencing refresh regexp_like register regr_avgx regr_avgy regr_count regr_intercept regr_r2 regr_slope regr_sxx regr_sxy reject rekey relational relative relaylog release release_lock relies_on relocate rely rem remainder rename repair repeat replace replicate replication required reset resetlogs resize resource respect restore restricted result result_cache resumable resume retention return returning returns reuse reverse revoke right rlike role roles rollback rolling rollup round row row_count rowdependencies rowid rownum rows rtrim rules safe salt sample save savepoint sb1 sb2 sb4 scan schema schemacheck scn scope scroll sdo_georaster sdo_topo_geometry search sec_to_time second section securefile security seed segment select self sequence sequential serializable server servererror session session_user sessions_per_user set sets settings sha sha1 sha2 share shared shared_pool short show shrink shutdown si_averagecolor si_colorhistogram si_featurelist si_positionalcolor si_stillimage si_texture siblings sid sign sin size size_t sizes skip slave sleep smalldatetimefromparts smallfile snapshot some soname sort soundex source space sparse spfile split sql sql_big_result sql_buffer_result sql_cache sql_calc_found_rows sql_small_result sql_variant_property sqlcode sqldata sqlerror sqlname sqlstate sqrt square standalone standby start starting startup statement static statistics stats_binomial_test stats_crosstab stats_ks_test stats_mode stats_mw_test stats_one_way_anova stats_t_test_ stats_t_test_indep stats_t_test_one stats_t_test_paired stats_wsr_test status std stddev stddev_pop stddev_samp stdev stop storage store stored str str_to_date straight_join strcmp strict string struct stuff style subdate subpartition subpartitions substitutable substr substring subtime subtring_index subtype success sum suspend switch switchoffset switchover sync synchronous synonym sys sys_xmlagg sysasm sysaux sysdate sysdatetimeoffset sysdba sysoper system system_user sysutcdatetime table tables tablespace tan tdo template temporary terminated tertiary_weights test than then thread through tier ties time time_format time_zone timediff timefromparts timeout timestamp timestampadd timestampdiff timezone_abbr timezone_minute timezone_region to to_base64 to_date to_days to_seconds todatetimeoffset trace tracking transaction transactional translate translation treat trigger trigger_nestlevel triggers trim truncate try_cast try_convert try_parse type ub1 ub2 ub4 ucase unarchived unbounded uncompress under undo unhex unicode uniform uninstall union unique unix_timestamp unknown unlimited unlock unnest unpivot unrecoverable unsafe unsigned until untrusted unusable unused update updated upgrade upped upper upsert url urowid usable usage use use_stored_outlines user user_data user_resources users using utc_date utc_timestamp uuid uuid_short validate validate_password_strength validation valist value values var var_samp varcharc vari varia variab variabl variable variables variance varp varraw varrawc varray verify version versions view virtual visible void wait wallet warning warnings week weekday weekofyear wellformed when whene whenev wheneve whenever where while whitespace with within without work wrapped xdb xml xmlagg xmlattributes xmlcast xmlcolattval xmlelement xmlexists xmlforest xmlindex xmlnamespaces xmlpi xmlquery xmlroot xmlschema xmlserialize xmltable xmltype xor year year_to_month years yearweek",literal:"true false null unknown",built_in:"array bigint binary bit blob bool boolean char character date dec decimal float int int8 integer interval number numeric real record serial serial8 smallint text time timestamp varchar varying void"},contains:[{className:"string",begin:"'",end:"'",contains:[e.BACKSLASH_ESCAPE,{begin:"''"}]},{className:"string",begin:'"',end:'"',contains:[e.BACKSLASH_ESCAPE,{begin:'""'}]},{className:"string",begin:"`",end:"`",contains:[e.BACKSLASH_ESCAPE]},e.C_NUMBER_MODE,e.C_BLOCK_COMMENT_MODE,n,e.HASH_COMMENT_MODE]},e.C_BLOCK_COMMENT_MODE,n,e.HASH_COMMENT_MODE]}}},function(e,n){e.exports=function(e){var n={className:"variable",variants:[{begin:/\$[\w\d#@][\w\d_]*/},{begin:/\$\{(.*?)}/}]},t={className:"string",begin:/"/,end:/"/,contains:[e.BACKSLASH_ESCAPE,n,{className:"variable",begin:/\$\(/,end:/\)/,contains:[e.BACKSLASH_ESCAPE]}]};return{aliases:["sh","zsh"],lexemes:/\b-?[a-z\._]+\b/,keywords:{keyword:"if then else elif fi for while in do done case esac function",literal:"true false",built_in:"break cd continue eval exec exit export getopts hash pwd readonly return shift test times trap umask unset alias bind builtin caller command declare echo enable help let local logout mapfile printf read readarray source type typeset ulimit unalias set shopt autoload bg bindkey bye cap chdir clone comparguments compcall compctl compdescribe compfiles compgroups compquote comptags comptry compvalues dirs disable disown echotc echoti emulate fc fg float functions getcap getln history integer jobs kill limit log noglob popd print pushd pushln rehash sched setcap setopt stat suspend ttyctl unfunction unhash unlimit unsetopt vared wait whence where which zcompile zformat zftp zle zmodload zparseopts zprof zpty zregexparse zsocket zstyle ztcp",_:"-ne -eq -lt -gt -f -d -e -s -l -a"},contains:[{className:"meta",begin:/^#![^\n]+sh\s*$/,relevance:10},{className:"function",begin:/\w[\w\d_]*\s*\(\s*\)\s*\{/,returnBegin:!0,contains:[e.inherit(e.TITLE_MODE,{begin:/\w[\w\d_]*/})],relevance:0},e.HASH_COMMENT_MODE,t,{className:"string",begin:/'/,end:/'/},n]}}},function(e,n){},function(e,n){},function(e,n){}]);