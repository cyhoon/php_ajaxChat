$("#submit").click(function(){

		var name = $("input[id=writer]").val();
		// console.log(name);
		var content = $("input[id=content").val();
		// console.log(content);

		if( $.trim(name) == ""){
			alert("작성자 이름을 입력해 주세요: ");
			$("#writer").focus();
			return false;
		}

		if( $.trim(content) == ""){
			alert("내용을 입력해 주세요: ");
			$("#focus").focus();
			return false;
		}

		clear_value();

		var form_data = new FormData();
		form_data.append('writer', name);
		form_data.append('content', content);


		$.ajax({
			url : "../../proc.php",
			type: 'POST',
			data: form_data,
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			success: function(response){
				if($.trim(response) == "error"){
					alert("처리 실패");
					return false;
				}
				real_time();
			}
		});

		return false;

	});


	function select_chat(value){

		/*for(var i in value){
			$("#view").append("<p>"+value[i][`name`]+":   "+value[i][`msg`]+"      : date :"+value[i][`date`]+"</p>");
		}*/

	}

	function real_time(){
		$.ajax({
			url : "./chat_select.php",
			type: 'POST',
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			success: function(response){
				input_data(response);
			}
		});
	}

	function input_data(value){
		var content = "";
		for(var i in value){
			// $("#view").html("<p>"+value[i][`name`]+":   "+value[i][`msg`]+"      : date :"+value[i][`date`]+"</p>");
			content += "<div class=\"content\"> <span style=\"font-size: 25px; font-weight: bold;\">name: "+value[i][`name`]+"</span><br>     Msg: "+value[i][`msg`]+" <br>date: "+value[i][`date`]+"</div><hr>";
			// content += "<div class=\"content\"> <span style=\"font-size: 25px; font-weight: bold;\">name: 영훈이 노예</span><br>     Msg: "+value[i][`msg`]+" <br>date: "+value[i][`date`]+"</div><hr>";
		}
		$("#view").html(content);
		content = "";
	}

	setInterval(function(){
		/*var objDiv = document.getElementById("#view");
		objDiv.scrollTop = objDiv.scrollHeight;*/
		chat_count();
		today_chat_count();
		real_time();
	}, 1000);

	function chat_count(){
		$.ajax({
			url : "./db_count.php",
			type: 'GET',
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			success: function(response){
				show_count(response);
			}		
		});
	}

	function show_count(value){
		$("#count").html(value);
	}

	function today_chat_count(){
		$.ajax({
			url: './today_count.php',
			type: 'GET',
			dataType: 'json',
			cache: false,
			contentType: false,
			processData: false,
			success: function(response){
				show_today_count(response);
			}
		})
	}

	function show_today_count(value){
		$("#today_count").html(value);
	}


	function clear_value(){
		// $("input[id=writer").val("");
		$("input[id=content]").val("");
	}