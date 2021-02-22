<?php

$niche1 = (rand(1,9));
$niche2 = (rand(1,9));
$niche3 = (rand(1,9));
$rand = (rand(100,98888));
//$user = $_GET['user'];
$user = $_GET['authToken'];
//$gameToken = $_GET['gameToken'];


// ricavo dati dal gioco


//---------------------


?>
<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>3 e Lotto - Lottery</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> 
  <link rel="stylesheet" media="all" href="style.css?e=<?php echo $rand;?>" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/layer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/bscroll.min.js"></script>
  <script src="js/lotto.js?var1=<?php echo $user;?>&v=<?php echo $rand;?>"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

 <style>

.container {

  position: relative;
}

.center {
    position: absolute;
  top: 30%;
  left: 10%;
  right: 10%;
  margin: 0 0 0 0; /* apply negative top and left margins to truly center the element */
}
body {
  text-align: center;
  
  
}



.ticker_ko {
	background-color: rgb(225, 11, 0);
	border-radius: 10px;
}

.ticker_ok {
  font color:green;
}

.rotator {
  display: inline-block;
 
}

.verde {
  color:green;
}



@media screen and (max-width: 600px) {
  /* For tablets: */

  .rotator {
  width: 100px;
  height: 160px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 70px;
  line-height: 80px;
  background-image:
  url(flip2.png),
  url(flip2.png),
  url(flip2.png);
  background-position: center, top, bottom;
  background-size: 300px;
  background-repeat: no-repeat;
  margin: 20px 0 20px;
  overflow: hidden;
  opacity: 0;

}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .rotator {
  width: 200px;
  height: 260px;
  font-family: Arial, Helvetica, sans-serif;
  font-size: 120px;
  line-height: 130px;
  background-image:
  url(flip2.png),
  url(flip2.png),
  url(flip2.png);
  background-position: center, top, bottom;
  background-size: 300px;
  background-repeat: no-repeat;
  margin: 20px 0 20px;
  overflow: hidden;
  opacity: 0;
}
}

.quota {
  height: 50%;
  cursor: default;
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  -webkit-tap-highlight-color: transparent;
}

#result {
  height: 35px;
  font-size: 40px;
  color: white;
  line-height: 35px;
  letter-spacing: 3px;
  -webkit-box-shadow: 0 0 3px black;
  box-shadow: 0 0 3px black;
}

.cancella {
	color: red;

}

.gioca {
	color: green;

}

.mt10{
				margin-top: 10px;
      }
      
input[type="text"]
{
    background: transparent;
    border: none;
    color:#fff;
}

.footer_button {
  position: fixed;
  bottom: 200px;
  
  text-align: center;
  
  z-index: 1;
}

.footer_button2 {
  position: fixed;
  bottom: 100px;
  
  text-align: center;
  
  z-index: 1;
}

.footer_button3 {
  position: fixed;
  bottom: 170px;
  
  text-align: center;
  
  z-index: 1;
}

.top_button {
  position: fixed;
  top: 2px;
  z-index: 1;
  right: 10px;
}

.top_alert {
  position: fixed;
  top: 8px;
  z-index: 1;
  width: 100%;
}

.ex1 {
  background-color: rgba(133, 133, 133, 0.5);
  width: 100%;
  height: 265px;
  overflow: scroll;
}

.ex1_bis {
  background-color: rgba(133, 133, 133, 0.5);
  width: 100%;
  height: 376px;
  overflow: scroll;
}

.ex2 {
  background-color: rgba(133, 133, 133, 0.5);
  width: 100%;
  height: 345px;
  overflow: scroll;
}

.fa_eye {

  color: #fff;
}

.sfondo{
  width:100%;
  height:100%;
  background:#000;
  opacity:0.8;
}


@media screen and (max-width: 600px) {
html, body {
  overflow: hidden;
}
}

</style>





 

</head>

<body onload="getsetting()">
<div class="top_button">
   <a href="#" onclick="closegame()"> <i class="fa fa-3x fa_eye fa-times"></i></a> 
</div>

<div class="alert alert-success top_alert animated bounceInDown" id="alert_message" style="display:none">
  <strong><span id="value_message_del"></span></strong>
</div>

<div id="information" class="alert alert-success top_alert animated bounceInDown" style="display:none">
<span id="value_message_have_bet"></span>
</div>

<div id="free" class="alert alert-success top_alert animated bounceInDown" style="display:none">
<b><span id="value_message_available"></span></b>
</div>

<div id="notfree" class="alert alert-danger top_alert animated bounceInDown" style="display:none">
<b><span id="value_message_not_available"></span></b>
</div>

<div class="alert alert-danger top_alert animated bounceInDown" id="alert_error" style="display:none">
  

</div>



  <div class="wrap"> 

 


    <header>

    <div class="row"> 
    
    <div class="col-xs-2" align="left">
    <script>
     (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetSettings?authToken=<?php echo $user;?>&gameToken=EE9CD6D9-531E-4F6B-88E0-79EB7A078331");
    const datiJson_head = await response.json();
    var logo_gioco1 = datiJson_head.settings.logoUrl;
    
    var nome_gioco = datiJson_head.settings.title;
   // localStorage.setItem("logo_gioco", logo_gioco1);
   //document.write("<img src="+ logo_gioco1 +" width=50>");
   var logo_head = "<img src="+ logo_gioco1 +" width=50>";
   $('#value_logo').html(logo_head);
  })()

    //var logo_gioco = localStorage.getItem("logo_gioco");
   

    </script>
    <span id="value_logo"></span>
    </div>
    <div class="col-xs-4"><div style="height:2px"></div>
    <span id="titolo_gioco" style="font-size:22px"></span> 
    </div>
    <div class="col-xs-3" align="right"><div style="height:4px"></div>
    <span id="testo"></span> <span id="timer1" style="font-weight:bold;color:green;font-size:16px"></span><br><span id="errori" style="color:white;font-size:12px"></span> 

    </div>
    
</div>



      
    </header> 

    
    <div id="corpo" class="content">
		
	

	
 <div id="tapnumber">
 <div id="change" class="animated infinite bounce" style="color:white" align="center"><i class="fa fa-arrow-down" aria-hidden="true"></i> <b><span id="value_tap" ></span></b> <i class="fa fa-arrow-down" aria-hidden="true"></i></div>
		<div class="mt10 animated zoomIn" id="ticker"><input type="text" name="" id="picker" value="<?php echo $niche1;?> <?php echo $niche2;?> <?php echo $niche3;?>" readonly="readonly" style="border:0;text-align:center;width:100%;margin-top:-35px;font-size:20vw;font-family: 'Lobster', cursive;" /></div> 
    
    
    <div style="height:10px"></div>


   

</div>



<div align="center" id="tab_1" style="margin-top:-15px">
<table class="table" style="color:#fff" >
   
    <tbody> 
      <tr><td><h4><span id="value_history"></span> <a href="#" onclick="apri_result()"><i class="fa fa_eye fa-chevron-up" aria-hidden="true" id="up"></i></a><a href="#" onclick="chiudi_result()"><i class="fa fa_eye fa-chevron-down" aria-hidden="true" id="down" style="display:none"></i></a></h4></td><td> <span id="value_message_won" style="display:none"></span><span id="bet_open" class="gioca" style="font-size:20px"></span> <span id="round_value" style="font-size:20px"></span></td><td align="right"><a href="#" onclick="open_bet()"><i class="fa fa_eye fa-2x fa-bars" aria-hidden="true"></i></a></td></tr>
      
    </tbody>
  </table>
 

<div class="ex1" id="tabella_storia"> 

<table class="table" style="color:#fff" >
    <thead>
      <tr>
        <th style="text-align:center"><span style="color:#fff"><b><span id="value_date"></span></b></span></th> 
        <th style="text-align:center"><span style="color:#fff"><i class="fa fa-clock-o" aria-hidden="true"></i></span></th>
        <th style="text-align:center"><span style="color:#fff"><i class="fa fa-trophy" aria-hidden="true"></i></span></th>
        <th style="text-align:center"><span style="color:#fff"><b><span id="value_message_view"></span></b></span></th>
      </tr>
    </thead>
    <tbody id="risultati"> 
      
      
    </tbody>
  </table>
</div>
</div>


<div id="betab" style="display:none">


<div align="center" id="tab_2">
<table class="table" style="color:#fff" >
   
    <tbody> 
      <tr><td><h4><span id="value_historybet"> </h4></td><td align="right"><a href="#" onclick="storybet()"><i class="fa fa_eye fa-2x fa-refresh" aria-hidden="true"></i></a></td><td align="right"><a href="#" onclick="close_bet()"><i class="fa fa_eye fa-2x fa-chevron-left" aria-hidden="true"></i></a></td></tr>
      
    </tbody>
  </table>
  </div>

<div class="ex2"> 

<table class="table" style="color:#fff" >
    <thead>
      <tr>
        <th style="text-align:center"><span style="color:#fff"><b>#</b></span></th> 
        <th style="text-align:center"><span style="color:#fff"><i class="fa fa-clock-o" aria-hidden="true"></i></span></th>
        <th style="text-align:center"><span style="color:#fff"><b><span id="value_bet2"></span></b></span></th>
        <th style="text-align:center"><span style="color:#fff"><i class="fa fa-trophy" aria-hidden="true"></i></span></th>
        <th style="text-align:center"><span style="color:#fff"><b><span id="value_status"></span></b></span></th>
        <th style="text-align:center"><span style="color:#fff"><b><span id="value_action"></span></b></span></th>
      </tr>
    </thead>
    <tbody id="risultatibet"> 
      
      
    </tbody>
  </table>
</div>

</div>






    </div>
   
    
  <footer>
   
    
  <div class="row">
      <div class="col-xs-2"><b><span id="value_balance"></span></b><br><span id="credito"><a class="into"></a></span> <div align="center">x <span id="multi"></span></div></div>
      <div class="col-xs-2" ><b><span id="value_bet" ></span></b><br><span id="bet_value"></span></div>
      <div class="col-xs-2"><b><span id="max"></span></b><br><span id="maxwin"></span></div>
      <div class="col-xs-2"><br><b><span id="currency"></span></b></div>
      <div class="col-xs-2" style="margin-top:8px"><a href="#" onclick="restart()"><i id="cancel" class="fa fa-3x fa-ban cancella" aria-hidden="true"></i></a></div>
      <div id="bet_si" class="col-xs-2" style="margin-top:8px"><a href="#" onclick="placebet()"><i id="bet" class="fa fa-3x fa-check gioca" aria-hidden="true"></i></a></div>
      <div id="bet_no" class="col-xs-2" style="margin-top:8px;display:none;opacity:0.4"><i class="fa fa-3x fa-check gioca" aria-hidden="true"></i></div>
    </div>
    


  
    </footer>

      
      <div id="nobet" class="footer_button3" style="display:none;width:100%;color:red"><span id="timer2" style="font-weight:bold;color:red;font-size:22px"></span><br><b><h1><span id="betclosed"></span></h1></b><br><br><i class="fa fa_eye fa-spinner fa-spin fa-2x fa-fw"></i></div> 



     

	<script>

var x_error = localStorage.getItem("errore_lotto");
$('#alert_error').html(x_error);

//picker
$.fn.picker = function(options){ 
		var p = new Picker(options,this);
   
		return this;
	}

	function Picker (options, _this) {

    
		var _default_ = {
     
			title:'picker',
			cols: [
				{
					textAlign:'center',
					values: []
				}
			]
		}

		this.opt = $.extend({}, _default_, options);
		this.el = _this;

		this.wheels = []; //picker 滚动条
		this.pickerSelect = []; //picker选中的值
		this.init()
	}

	Picker.prototype = {
		//初始化
		init:function(){
			var _this = this;
			this.el.click(function(){

				var value = _this.el.val();
				var tpl = _this.template(_this.createWrapper());
        $("#ticker").removeClass("animated zoomIn");
        $("#change").hide();
				$("body").append(tpl);

				$(".picker").show();
				var w = $(".picker").width();

				$(".picker").addClass("active");

				_this.createdPicker();
				_this.close();

				if(value !== ""){
					_this.setValue(value);
				}
			})
		},
		//创建滚动的部分
		createWrapper: function(){
			var wheelWrapper = '';

			this.opt.cols.forEach(function(el, index){

				var item = '';
				el.values.forEach(function(element, i){
					item += '<li class="wheel-item" data-index="'+i+'" style="text-align:'+el.textAlign+'">'+element+'</li>'
				})
				item = '<ul class="wheel-scroll">'+item+'</ul>'
				wheelWrapper += '<div class="wheel">'+item+'</div>';
			})

			return wheelWrapper;
		},
		//生成picker模板
		template: function(wheelWrapper){
     
			var tpl = '<div class="picker">'+
					'<div class="picker-panel">'+
						'<div class="picker-title"><span class="cancel"></span><h2 class="title">'+this.opt.title+'</h2><span class="confirm pickerClose"><i class="fa fa-3x fa-check" aria-hidden="true" style="margin-top:8px"></i></span></div>'+
						'<div class="picker-content">'+
							'<div class="mask-top border-1px"></div>'+
							'<div class="wheel-wrapper">'+wheelWrapper+'</div>'+
							'<div class="mask-bottom border-top-1px"></div>'+
						'</div>'+
					'</div>'+
				'</div>'
			return tpl;
		},
		//使picker滚动起来，并记录选择的值
		createdPicker: function(){
			var wrapper = document.getElementsByClassName("wheel");
			var _this = this;
			var wheels = this.wheels;

			for(var i=0; i<wrapper.length; i++){
				wheels[i] = new BScroll(wrapper[i],{
					wheel:{selectedIndex: 0},
					probeType: 3
				})

				!(function(i){
					wheels[i].on("scrollEnd",function(pos){
						var index = wheels[i].getSelectedIndex();
						var id = $(wheels[i].items[index]).data("index");
						var value = _this.opt.cols[i].values[id];

						_this.pickerSelect[i] = value;
						_this.getValue();
					})
				})(i)
			}
		},
		//关闭picker
		close: function(){
      
			$(".pickerClose").click(function(){
        risultato()
				$(".picker").removeClass("active");
				setTimeout(function(){
					$(".picker").remove();
				},300)
			})
		},
		//将选择的值赋值到input框
		getValue: function(){
			var v = this.pickerSelect.join(' ');
			this.el.val(v);
		},
		//将input的值赋值到picker
		setValue: function(val){
			var arr = val.split(" ");
			var selectIndex = []; //记录input中的值在picker中的位置

			this.pickerSelect = arr;

			this.opt.cols.forEach(function(el, index){
				var v = el.values;
				var len = v.length;

				for(var i=0; i<len; i++){
					if(v[i] == $.trim(arr[index])){
						selectIndex.push(i);
						return false;
					}
				}
			})

			var _this = this;
			this.wheels.forEach(function(el, index){
				_this.wheels[index].wheelTo(selectIndex[index]);
			})
		}
	}
			
			$("#toast").on("click",function(){
				$.toast('Toast Message Here')
			})
			$("#alert").on("click",function(){
				$.alert('Alert Message','Alert Title',function(){
					console.log('alert')
				})
			})
			$("#confirm").on("click",function(){
				$.confirm('Confirm Message','jQueryScript',function(){
					console.log('ok')
				},function(){
					console.log('cncle')
				})
			})
			$("#toptip").on("click",function(){
				$.toptip('Top Notification')
			})

			$("#actions").on("click",function(){
				$.actions({
  title:'Choose A Language',
  onClose: function(){
    console.log('onclose')
  },
  actions:[
    {
      text: 'English',
      onClick: function(){
        console.log('English')
      }
    },
    {
      text: '中文',
      onClick: function(){
        console.log('中文')
      }
    },
    {
      text: 'German',
      onClick: function(){
        console.log('German')
      }
    }

  ]
})
			})

			$("#modal").click(function(){
				$.modal({
  title:'Modal Title',
  text: 'Modal Content',
  buttons: [
    {onClick: function(){console.log('A')}, text: 'A'},
    {onClick: function(){console.log('B')}, text: 'B'},
    {onClick: function(){console.log('C')}, text: 'C'},
  ]
})
			})

			$("#picker").picker({
  title:'Choose A Number',
  cols: [
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    },
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    },
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    }
  ]
})



      //$("#citypicker").cityPicker()
      

function open_reels() {
  
  $("#picker").picker(

    {
  title:'Choose A Number',
  cols: [
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    },
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    },
    {
      textAlign:'center',
      values: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']
    }
  ]
}
  );
}


  </script>

</body>
</html>
