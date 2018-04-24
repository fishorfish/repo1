var obj = {};
'use strict'
Object.defineProperty(obj, "test"),
			{
				value: 12345;
				writable: false
			});
console.log(obj.test);
obg.test = "vrver";
console.log(obj.test);