$(function(){

	var figNum = $("#page figure").length;
	var attr = new Array(50);

	for(var k = 0; k<attr.length; k++){
		attr[k] = k;
	}

    //
	///*第一次请求数据，渲染页面*/
    //
	//$.getJSON('get_all_info.php', function(json){
    //
	//	$.each(json, function(index, item){
    //
	//		var dbId = item.id;
	//		var dbName = item.name;
	//		var dbImg = item.img;
	//		var dbJob = item.job;
    //
	//		console.log(dbId+ "和" + dbName + "和" + dbImg + "和" + dbJob);
    //
	//		// createMem();
	//		showPage(dbId, dbImg, dbJob, dbName);
    //
	//	})
    //
	//});

	/*渲染页面的函数*/
	function showPage(id, dbImg, dbJob, dbName){

		$("#page figure img").eq(attr[id]).attr("src", dbImg);
		$(".Profile h4").eq(attr[id]).text(dbName);
		$(".Profile p").eq(attr[id]).text(dbJob);
	}

	/* 为点击的模态框进行添加数据*/
	$('.Profile a').on('click',function(e){



		var $dataRemodalId;
		//获取到.Profile中的a的NO_1值		
		var modalNum = $(e.target).parent().attr('href');

		modalNum = modalNum.substr(1);

		//获取到.remodal 中的 data-rmodal-id 的值
		for(var i=0; i<$('.remodal').length; i++){
			if($('.remodal').eq(i).attr("data-remodal-id") == modalNum){
				$dataRemodalId = $('.remodal').eq(i).attr("data-remodal-id");
				//alert("相等啦" + modalNum + "@@" + $('.remodal').eq(i).attr("data-remodal-id"));
			}
		}



		//再次向后台发起请求,将此数据添置模态框中		
		$.getJSON('person_info.php', {"id":$dataRemodalId}, function(json){
			//alert('18238384');
			var dbId = json.id;
			var dbName = json.name;
			var dbImg = json.img;
			var dbJob = json.job;
			var dbIntroduce = json.introduce;
			var dbsocial = json.social;


			console.log(dbId+ "和" + dbName + "和" + dbImg + "和" + dbJob + "And" + dbIntroduce+ "And"+ dbsocial);

			dbId = dbId-1;

			$(".remodal img").eq(attr[dbId]).attr("src", dbImg);
			$(".remodal h3").eq(attr[dbId]).text(dbName);

			$(".remodal .Text--small").eq(attr[dbId]).text(dbJob);
			$(".self--descript").eq(attr[dbId]).text(dbIntroduce);

			/* 处理social 部分*/
			// website github dribbble linkedin weibo twitter	instagram  facebook

			var $thisSocial = $(".social_link").eq(attr[dbId]);

			if(dbsocial.website){
				$thisSocial.find("i").eq(0).attr("class", "fa fa-home fa-2x");
				$thisSocial.find("a").eq(0).attr("href", dbsocial.website);
			}

			if(dbsocial.github){
			//	alert(dbsocial.github);
				$thisSocial.find("i").eq(1).attr("class", "fa fa-github fa-2x");
				$thisSocial.find("a").eq(1).attr("href", dbsocial.github);
			}

			if(dbsocial.dribbble){
				$thisSocial.find("i").eq(2).attr("class", "fa fa-dribbble fa-2x");
				$thisSocial.find("a").eq(2).attr("href", dbsocial.dribbble);
			}

			if(dbsocial.instagram){
				$thisSocial.find("i").eq(3).attr("class", "fa fa-instagram fa-2x");
				$thisSocial.find("a").eq(3).attr("href", dbsocial.instagram);
			}

			if(dbsocial.linkedin){
				$thisSocial.find("i").eq(4).attr("class", "fa fa-linkedin-square fa-2x");
				$thisSocial.find("a").eq(4).attr("href", dbsocial.linkedin);
			}

			if(dbsocial.weibo){
				$thisSocial.find("i").eq(5).attr("class", "fa fa-weibo fa-2x");
				$thisSocial.find("a").eq(5).attr("href", dbsocial.weibo);
			}
			if(dbsocial.facebook){
				$thisSocial.find("i").eq(6).attr("class", "fa fa-facebook fa-2x");
				$thisSocial.find("a").eq(6).attr("href", dbsocial.facebook);
			}
			if(dbsocial.twitter){
				$thisSocial.find("i").eq(7).attr("class", "fa fa-twitter fa-2x");
				$thisSocial.find("a").eq(7).attr("href", dbsocial.twitter);
			}

		});

	});

	/*动态生成一个成员*/
	function createMem(){

		$textCenter = $(".u-textCenter");
		var $Profile = $(" <div class='col-lg-3  col-md-3 col-sm-4 col-xs-4 Profile ' ></div>");
		var $figure = $(' <figure class="profile-figure"></figure>');
		var $a = $(' <a href="#No_1"><img src="" alt="" class="img-circle img-circle-hover" width="100" height="100"/></a>');

		//生成模态框部分
		var $remodal = $('  <div class="remodal" data-remodal-id="No_1" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc"></div>');

		var $button = $('<button data-remodal-action="close" class="remodal-close" aria-label="Close"></button>');

		var $div = $("<div></div>");
		var $img = $('<img src="" alt="" class="img-circle" width="100" height="100">');
		var $h3 = $(' <h3 class="Text Text--spacedSmall"></h3>');
		var $p = $('<p class="self--descript"></p><hr>');
		var $divSoc = $('<div class="social_link"><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span><span><a href="#"><i class=""></i></a></span></div>');

		$figure.append($a);
		$Profile.append($figure);

		$div.append($divSoc);
		$div.append($p);
		$div.append($h3);
		$div.append($img);
		$remodal.append($div);
		$remodal.append($button);
		$Profile.append($remodal);


		$textCenter.append($Profile);

	}

});