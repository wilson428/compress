//take the .csvd file and assemble the complete object
//IDEA: could alternatively use pointers to original object

var assemble = function(data) {
    var keys = [];
    for (var key in data[0]) {
        if (data[0].hasOwnProperty(key)) {
            keys.push(key);   
        }
    }
    
    for (var c = 1; c < data.length; c += 1) {
		for (var k = 0; k < keys.length; k += 1) {
			if (!data[c].hasOwnProperty(keys[k])) {
				data[c][keys[k]] = data[c - 1][keys[k]];
			}
		}			
	}
    return data;
};