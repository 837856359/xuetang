(function(){var a=window.bShareUtil,m=window.bShareControl,b=window.bShare,n=b.config,i=b.iL8n,j=b.pnMap,u=n.poptxtc,v=n.popbgc,e=b.imageBasePath,c,q=function(){a.getElem(a.getElemById("bsLogoList"),"img","bsPlatImg",function(a){if(!a.src){var b=a.parentNode.parentNode.id.split("-")[1];a.src=e+"/logos/mp2/"+b+".gif"}});var b=a.getElemById("searchBox");b.value="";b.focus();a.filterPlats("");a.stopProp()},w=function(){a.loadScript(b.bhost+"/bshare_load_sites?request_locale="+(b.lang||"zh")+"&lite=false&uuid="+
b.params.publisherUuid+"&callback=bShare.morecb");setTimeout(function(){a.getElemById("bsMorePanel").childNodes.length==0&&b.morecb()},1E3)};b.morecb=function(f){if(a.getElemById("bsMorePanel").childNodes.length==0){var d=j,o=a.getElemById("bsMorePanel"),x=b.params.promote,h=[],l,g;try{d=f.contents.p;for(c=0,g=d.length;c<g;++c)h.push(d[c].name)}catch(e){for(c in d)h.push(c)}var r=a.createElement("div","","bsSearchDiv"),f=a.createElement("div","","bFind-wrapper-top"),d=a.createElement("span","","bFind-placeholder");
g=a.createElement("input","searchBox","bFind");var p=a.createElement("div","","bsPlatDiv"),s=a.createElement("ul","bsLogoList"),t=a.createElement("div","","bsFooterDiv");g.type="text";g.setAttribute("placeholder",i.searchHint);g.setAttribute("maxlength",25);g.onkeyup=function(){return a.filterPlats(this.value)};f.appendChild(d);f.appendChild(g);r.appendChild(f);var m=function(a){b.share(a,this.parentNode.id.split("-")[1]);return!1},f=function(c){if(j[c]&&(l=j[c][0])){var f=a.createElement("li","bp-"+
c),d=a.createElement("a","","bsPlatIcon"),h=a.createElement("img","","bsPlatImg"),g=a.createElement("div","","bsPlatName","",l);o.appendChild(r);o.appendChild(p);o.appendChild(t);d.title=l;d.onclick=m;g.title=l;var k="bsHot",e="";if(x&&a.arrayContains(b.arrayIsAwd,c))k="bsAwd";else if(a.arrayContains(b.arrayIsHot,c))k="bsPromoM bsHot",e=i.promoteHot;else if(a.arrayContains(b.arrayIsNew,c))k="bsPromoM bsNew",e=i.promoteNew;else if(a.arrayContains(b.arrayIsRec,c))k="bsPromoM bsRec",e=i.promoteRec;f.appendChild(a.createElement("div",
"",k,"",e));d.appendChild(h);f.appendChild(d);f.appendChild(g);s.appendChild(f)}};for(c=0;c<h.length;c++)f(h[c]);p.appendChild(s);p.appendChild(a.createElement("div","","bsClear"));if(n.logo)t.innerHTML=b.elems.powerBy;q()}};b.moreDiv=function(c,d){var e=d;if(b.entries.length>1)e=b.curb;b.prepare(e);b.display(!0);a.getElemById("bsMorePanel").childNodes.length>0?q():m.bShareLoad?w():b.morecb()};a.filterPlats=function(b){if(b=="")return a.getElem(a.getElemById("bsLogoList"),"li","",function(a){a.style.display=
""}),!0;var d=b.replace(/^\s+|\s+$/,"").toLowerCase();for(c in j){var e=j[c][0].toLowerCase(),i=c.toLowerCase(),h="bp-"+c;if(a.getElemById(h))i.indexOf(b)>-1||i.indexOf(d)>-1||e.indexOf(b)>-1||e.indexOf(d)>-1?a.getElemById(h).style.display="":a.getElemById(h).style.display="none"}return!0};a.loadStyle('div.bsClear{clear:both;height:0;line-height:0;overflow:hidden;font-size:0;}.bsSearchDiv{padding:5px 15px;background-color:#fafafa;}.bFind-wrapper-top{background:#fff;border-color:#ccc #aaa #aaa #ccc;border-style:solid;border-width:1px;height:16px;padding:4px;margin:0;}.bFind-wrapper-top input{padding:0 !important;border:none !important;box-shadow:none !important;line-height:16px !important;}.bFind-placeholder{background:url("'+
b.shost+'/css/images/search-icon.gif") no-repeat;display:block;float:left;height:16px;width:16px;}.bFind{background:none;border:none;float:left;font-size:11px !important;height:16px !important;margin-left:3px;outline:none;padding:0;width:400px;}.bsPlatDiv{height:322px;background:#fff;overflow:auto;padding:0 15px;}#bsLogoList{display:block;list-style:none;overflow:hidden;margin:0;padding:0;}#bsLogoList li{float:left;display:inline-block;width:71px;text-align:center;font-size:12px;height:80px;margin:0 !important;}#bsLogoList .bsPlatIcon{cursor:pointer;display:block !important;text-align:center;}#bsLogoList .bsPlatImg{width:32px;height:32px;border:none !important;display:inline-block;}#bsLogoList .bsPlatImg:hover{-moz-border-radius:7px;-webkit-border-radius:7px;border-radius:7px;box-shadow:0 0 15px #a7a8ac;}#bsLogoList .bsPlatName{white-space:nowrap;text-overflow:ellipsis;overflow:hidden;text-align:center;color:#333 !important;margin-top:2px;line-height:140%;*width:70px;}#bsLogoList .bsPromoM{text-align:center;}.bsFooterDiv{height:24px;line-height:24px;padding:0 15px;border-top:1px solid #e8e8e8;background:'+
v+";text-align:right;}a.bsLogoLink{color:"+u+";}.bsLogoLink:hover{text-decoration:underline;}.bsPromoM{background:url("+e+"/bshare_box_sprite2.gif) no-repeat top left;}.bsNew,.bsHot,.bsRec,.bsAwd{background-position:0 -552px;width:19px;margin:5px auto 1px;line-height:16px;height:18px;font-size:12px;color:#fff;overflow:hidden;}.bsNew{background-position:0 -570px;}.bsRec{width:30px;background-position:0 -588px;}.bsAwd{background:url("+e+"/promot/promote.gif) no-repeat;}")})();
