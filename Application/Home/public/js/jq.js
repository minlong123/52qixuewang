var jq={};

var searchTop=function(){
	$('.sear_input').bind('focus',function(){
		$('.search_sp').removeClass('searchH').addClass('searchS');
	})
	$('.sear_input').bind('blur',function(){
		$('.search_sp').removeClass('searchS').addClass('searchH');
	})

	$('#qxw_retTop').bind('click',function(){
		$('body,html').animate({scrollTop:0},1000);
	})
	$('.qxw_re_img').hover(function(){
		$(this).find('a').css('opacity','1');
		$(this).find('a').css('animation','0.5s showw');
		$(this).find('a').css('color','red');
	},function(){
		$(this).find('a').css('color','#A52A2A');
		$(this).find('a').css('animation','1s showh');
		$(this).find('a').css('opacity','0');
	})

	function linea(){
		var color1;
		var color2;
		var direc1;
		var direc2;
		var arraColor=['blue','red','green','yellow','#c0c0c0','orange','black','#EE0000','#c27625','#18ca91'];
		var direction=['left','right','top','bottom'];
		var colorLength=arraColor.length-1;
		var directLength=direction.length-1;
			color1=arraColor[Math.floor((Math.random())*colorLength)];
			color2=arraColor[Math.floor((Math.random())*colorLength)];
			direc3=direction[Math.floor((Math.random())*directLength)];
			direc4=direction[Math.floor((Math.random())*directLength)];
			$('.speart_c_lt .speart_lt_content .speart_lt_content1').css({
				'background':'-webkit-linear-gradient('+direc3+' '+direc4+','+color1+','+color2+')',
				'background':'-o-linear-gradient('+direc3+' '+direc4+','+color1+','+color2+')',
				'background':'-moz-linear-gradient('+direc3+' '+direc4+','+color1+','+color2+')',
				'background':'linear-gradient(to '+direc3+' '+direc4+','+color1+','+color2+')'
			})
	}
	linea();
	$('.cd-signin').bind('click',function(){
		$('.dialog').fadeIn();
		ver($('.dia_verification'));
		ver($('.dia_verification1'));
		startTime();

	})
	$('.dialog_modal').bind('click',function(){
		$('.dialog').fadeOut();
		clearInterval(time);
	})
	$('.dialog_close').bind('click',function(){
		$('.dialog').fadeOut();
		clearInterval(time);
	})
	$(document).keydown(function(event){
		if(event.keyCode==27){
			$('.dialog').fadeOut();
		}
	})
	$('.dialog_login').bind('click',function(){
		$('.dialog_modal_register').css('display','none');
		$('.dialog_modal_register').fadeOut();
		$('.dialog_register').css('background','#D2D8D8');
		$(this).css('background','#FFF');
		$('.dialog_modal_login').fadeIn(100);
	})
	$('.dialog_register').bind('click',function(){
		$('.dialog_modal_login').css('display','none');
		$('.dialog_modal_login').fadeOut();
		$('.dialog_login').css('background','#D2D8D8');
		$(this).css('background','#FFF');
		$('.dialog_modal_register').fadeIn(100);
	})

	var top=0;
	var timer=setInterval(autoplay,4000);
	var heights=$('.personal_mess .personal_mess_c .personal_mess_ul').height();
	var liLength=$('.personal_mess .personal_mess_c .personal_mess_ul').find('li');
	var firstDom=liLength.first().clone();
	$('.personal_mess .personal_mess_c .personal_mess_ul').append(firstDom);
	function autoplay(){
		addTransition();
		top+=30;
		messageTab(top);
	}
	$('.personal_mess .personal_mess_c .personal_mess_ul').bind('transitionend',function(){
		if(top>=120){
			top=0;
			$(this).css('top',top);
		}
		removeTransition();
	})
	function messageTab(top){
		var top=top;
		$('.personal_mess .personal_mess_c .personal_mess_ul').css('top',-top);
	}
	function removeTransition(){
		$('.personal_mess .personal_mess_c .personal_mess_ul').css('transition','none');
	}
	function addTransition(){
		$('.personal_mess .personal_mess_c .personal_mess_ul').css('transition','1s');
	}

	function startTime(){
		var time=setInterval(function(){
				ver($('.dia_verification'));
				ver($('.dia_verification1'));
		},30000);
	}
	function ver(dom){
		var ver1=['1','2','3','4','5','6','7','8','9'];
		var ver2=['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
		var ver3=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
		var ver4="的,一,国,在,人,了,有,中,是,年,和,大,业,不,为,发,会,工,经,上,地,市,要,个,产,这,出,行,作,生,家,以,成,到,日,民,来,我,部,对,进,多,全,建,他,公,开,们,场,展,时,理,新,方,主,企,资,实,学,报,制,政,济,用,同,于,法,高,长,现,本,月,定,化,加,动,合,品,重,关,机,分,力,自,外,者,区,能,设,后,就,等,体,下,万,元,社,过,前,面,农,也,得,与,说,之,员,而,务,利,电,文,事,可,种,总,改,三,各,好,金,第,司,其,从,平,代,当,天,水,省,提,商,十,管,内,小,技,位,目,起,海,所,立,已,通,入,量,子,问,度,北,保,心,还,科,委,都,术,使,明,着,次,将,增,基,名,向,门,应,里,美,由,规,今,题,记,点,计,去,强,两,些,表,系,办,教,正,条,最,达,特,革,收,二,期,并,程,厂,如,道,际,及,西,口,京,华,任,调,性,导,组,东,路,活,广,意,比,投,决,交,统,党,南,安,此,领,结,营,项,情,解,议,义,山,先,车,然,价,放,世,间,因,共,院,步,物,界,集,把,持,无,但,城,相,书,村,求,治,取,原,处,府,研,质,信,四,运,县,军,件,育,局,干,队,团,又,造,形,级,标,联,专,少,费,效,据,手,施,权,江,近,深,更,认,果,格,几,看,职,服,台,式,益,想,数,单,样,只,被,亿,老,受,优,常,销,志,战,流,很,接,乡,头,给,至,难,观,指,创,证,织,论,别,五,协,变,风,批,见,究,支,那,查,张,精,林,每,转,划,准,做,需,传,争,税,构,具,百,或,才,积,势,举,必,型,易,视,快,李,参,回,引,镇,首,推,思,完,消,值,该,走,装,众,责,备,州,供,包,副,极,整,确,知,贸,己,环,话,反,身,选,亚,么,带,采,王,策,真,女,谈,严,斯,况,色,打,德,告,仅,它,气,料,神,率,识,劳,境,源,青,护,列,兴,许,户,马,港,则,节,款,拉,直,案,股,光,较,河,花,根,布,线,土,克,再,群,医,清,速,律,她,族,历,非,感,占,续,师,何,影,功,负,验,望,财,类,货,约,艺,售,连,纪,按,讯,史,示,象,养,获,石,食,抓,富,模,始,住,赛,客,越,闻,央,席,坚,份,士,热,限,米,银,息,校,均,房,周,游,千,失,八,检,足,配,存,九,命,尔,即,防,钱,评,复,考,依,断,范,础,油,照,段,落,访,未,额,双,让,切,须,儿,便,空,往,你,层,低,奖,注,黄,英,承,远,版,维,算,破,铁,乐,边,初,满,病,响,药,助,致,善,突,爱,容,香,称,购,届,余,素,请,白,宣,健,牌,促,培,竞,巴,稳,继,紧,字,困,刘,旅,声,超,随,例,担,友,号,显,却,监,材,且,春,居,适,除,红,半,买,充,陈,火,搞,图,阳,六,察,试,太,什,执,片,古,七,球,修,尽,控,讲,排,粮,武,预,亲,挥,卖,审,措,荣,洲,卫,希,店,良,属,险,曾,围,域,令,站,苏,龙,念,罗,吨,器,汇,康,减,习,演,普,田,班,待,星,飞,写,矿,轻,扩,言,章,汽,靠,毛,终,仍,景,置,底,福,止,离,泽,波,兰,核,降,训,逐,票,菜,座,献,钢,眼,损,宁,像,苦,印,融,独,湖,早,予,夫,编,换,欧,努,著,顾,征,升,态,套,介,送,某,斗,状,画,留,航,派,室,临,兵,补,宝,略,黑,综,云,差,纳,密,贫,剧,犯,阿,击,遇,岁,阶,烈,督,吃,丰,馆,招,害,官,树,听,庭,另,沙,私,针,胜,贷,网,愿,托,缺,园,假,酒,音,巨,既,判,输,讨,测,读,洋,括,筑,欢,刚,庆,久,陆,找,楼,激,晚,绝,压,故,互,签,汉,草,木,亩,短,绍,迎,吸,警,藏,疗,贵,纷,授,登,探,索,湾,宏,录,申,诉,秀,序,顺,死,卡,歌,午,孩,桥,喜,川,邓,扬,津,温,船,库,订,练,候,退,违,否,彩,棉,帮,拿,罪,币,角,召,灾,妇,杨,奋,绩,虽,煤,免,笔,够,永,圳,停,奥,鲜,朝,吴,岛,觉,移,尼,急,博,贯,拥,束,左,细,舞,幅,语,俄,奇,般,简,拍,脑,债,固,威,券,追,筹,刻,映,繁,伟,甚,饭,右,彻,烟,沿,街,血,冲,洪,植,誉,刊,玉,厅,救,潮,迅,伍,怎,付,倍,顿,述,播,励,斤,乎,纸,振,旧,障,鼓,艰,呼,吉,男,绿,尚,夏,亏,季,松,哈,祖,典,韩,遍,夜,轮,板,抗,摄,杂,皮,贡,借,幕,罚,伤,岸,扶,乱,曲,脱,践,危,澳,童,散,味,叶,累,谢,孙,邮,雄,兼,微,呢,谁,惠,偿,署,择,染,答,块,徐,鱼,赞,课,盛,延,瑞,怀,堂";
		var vers4=ver4.split(',');
		var ver1Length=ver1.length-1;
		var ver2Length=ver2.length-1;
		var ver3Length=ver3.length-1;
		var ver4Length=vers4.length-1;
		var string1=ver1[Math.floor((Math.random()*ver1Length))];
		var string2=ver2[Math.floor((Math.random()*ver2Length))];
		var string3=ver3[Math.floor((Math.random()*ver3Length))];
		var string4=vers4[Math.floor((Math.random()*ver4Length))];
		var string=string1+string2+string3+string4;
			$(dom).html(string);
	}

	$('.dia_verification').bind('click',function(){
		ver($(this));
	})
	$('.dia_verification1').bind('click',function(){
		ver($(this))
	})

}
$(function(){
	searchTop();
	$(window).scroll(function(){
		var scrollTop=document.body.scrollTop || document.documentElement.scrollTop;
		if(scrollTop>120){
			$('#qxw_nav').css('position','fixed');
		}else{
			$('#qxw_nav').css('position','relative');
		}
		if(scrollTop>550){
			$('#qxw_retTop').css('display','block');
		}else{
			$('#qxw_retTop').css('display','none');
		}
	})

})