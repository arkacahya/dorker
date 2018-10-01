jQuery(function($) {
	$('#submit').click(function(){
		var keywords 	= $('[name="keywords"]').val().split("\n").unique().remove('');
		$('[name="keywords"]').val(keywords.join("\n"));
		countz();

		$.each(keywords, function(a,i){
			$.ajax({
				dataType: 'json',
				data: 'keywords='+encodeURIComponent(i),
				type: 'POST',
				url: 'post.php',
				error: function(code, html){
					alert(html);
				},
				success: function(data){
					$.each(data, function(z,x){
						$('[name="afterchk"]').append(x+"\n");
					});
					countz();
				}
			});
		});
	});
	$('#mix').click(function(){
		var isi 	= $('[name="afterchk"]').val().split("\n").unique().remove('');
		$('[name="afterchk"]').val(isi.shuffle().join("\n")+"\n");
		countz();
	});
	// $('#paste').click(function(){
	// 	alert(window.clipboardData.getData('Text'));
	// 	$('[name="keywords"]').val( window.clipboardData.getData('Text') );
	// });

	$(this).keyup(function(){
		countz();
	});
});

function countz(){
	$('#keywords-count').html( $('[name="keywords"]').val().split("\n").length );
	$('#afterchk-count').html( $('[name="afterchk"]').val().split("\n").length );
}
Array.prototype.shuffle = function(){
	var i 	= this.length, j, temp;
	if( i == 0 ) return this;
	while( -- i ){
		j 	= Math.floor( Math.random() * (i+1) );
		temp 	= this[i];
		this[i] = this[j];
		this[j] = temp;
	}
	return this;
}
Array.prototype.unique = function() {
	var a = [];
	var l = this.length;
	for(var i=0; i<l; i++) {
		for(var j=i+1; j<l; j++) {
			if (this[i] === this[j])
			j = ++i;
		}
		a.push(this[i]);
	}
	return a;
};
Array.prototype.remove = function(value){
	var index = this.indexOf(value);
	if(index != -1){
		this.splice(index, 1);
	}
	return this;
};