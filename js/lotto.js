
var querystring = document.currentScript.src.substring( document.currentScript.src.indexOf("?") );
var urlParams = new URLSearchParams( querystring );
var user = urlParams.get('var1')
var gametoken = "EE9CD6D9-531E-4F6B-88E0-79EB7A078331";


function apri_result() {

  $("#tapnumber").hide(300);
  $("#up").hide();
  $("#down").show();
  $("#tabella_storia").addClass("ex1_bis");
  story()
}

function chiudi_result() {

  $("#tapnumber").show(300);
  $("#up").show();
  $("#down").hide();
  $("#tabella_storia").removeClass("ex1_bis");
}

function open_bet() {
  storybet()
  $("#tapnumber").hide(300);
  $("#tab_1").hide();
  $("#tab_2").show();
  $("#betab").show();
  $("#down").hide();
  $("#up").hide();
}

function close_bet() {

  $("#tapnumber").show(300);
  $("#tab_1").show();
  $("#tab_2").hide();
  $("#betab").hide();

  $("#up").show();
}

// ricavo setting 
function getsetting() {

   
  story()
  storybet()
  risultato()
  $("#corpo").show();
  $("#wait").hide();
  $("#nobet").hide();
  $("#bet").show();
  $("#cancel").show();
  $("#testo_2").hide();
  $("#testo").show(500);
  $("#timer1").show(300);
  $("#tab_1").show();
  $("#change").show();
  $("#information").hide();
  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetSettings?authToken=" + user + "&gameToken=" + gametoken + "");
    const datiJson = await response.json();

    //let settings = datiJson.settings.eventDescs;

    var numero_errore = datiJson.errorNo;

    var tipo_errore = datiJson.error;
    localStorage.setItem("errore_lotto", tipo_errore);
    
    if (numero_errore > 0)  {
      $('#alert_error').show();
    
    setTimeout(function() {
      $('#alert_error').fadeOut('fast');
  }, 4000); // <-- time in milliseconds

    getsetting();

    }

    var betopen = datiJson.betsOpen;

    var errori = datiJson.success;

    

    var max = datiJson.settings.translations[4].value; 
    $('#max').html(max);

    var bet_open = datiJson.settings.translations[22].value; 
    $('#bet_open').html(bet_open);

    var betclosed = datiJson.settings.translations[2].value; 
    $('#betclosed').html(betclosed);

    var value_balance = datiJson.settings.translations[21].value; 
    $('#value_balance').html(value_balance);

    var value_bet = datiJson.settings.translations[6].value; 
    $('#value_bet').html(value_bet);

    var value_bet2 = datiJson.settings.translations[13].value; 
    $('#value_bet2').html(value_bet2);

    var btn_bet = datiJson.settings.translations[13].value; 
    $('#btn_bet').html(btn_bet);

    var btn_cancel = datiJson.settings.translations[5].value; 
    $('#btn_cancel').html(btn_cancel);
    

    var value_cancel = datiJson.settings.translations[5].value; 
    $('#value_cancel').html(value_cancel);
    localStorage.setItem("value_cancel", value_cancel);

    var value_clear = datiJson.settings.translations[15].value; 
    $('#value_clear').html(value_clear);
    localStorage.setItem("value_clear", value_clear);

    var value_date = datiJson.settings.translations[24].value; 
    $('#value_date').html(value_date);

    var value_history = datiJson.settings.translations[19].value; 
    $('#value_history').html(value_history);

    var value_historybet = datiJson.settings.translations[19].value; 
    $('#value_historybet').html(value_historybet);

    var value_action = datiJson.settings.translations[3].value; 
    $('#value_action').html(value_action);

    var value_status = datiJson.settings.translations[7].value; 
    $('#value_status').html(value_status);

    var value_tap = datiJson.settings.translations[17].value; 
    $('#value_tap').html(value_tap);

    var value_message_del = datiJson.settings.translations[20].value; 
    $('#value_message_del').html(value_message_del);

    var value_message_available = datiJson.settings.translations[23].value; 
    $('#value_message_available').html(value_message_available);

    var value_message_not_available = datiJson.settings.translations[9].value; 
    $('#value_message_not_available').html(value_message_not_available);

    var value_message_have_bet = datiJson.settings.translations[1].value; 
    $('#value_message_have_bet').html(value_message_have_bet);

    var value_message_view = datiJson.settings.translations[25].value; 
    $('#value_message_view').html(value_message_view);

    var value_message_won = datiJson.settings.translations[0].value; 
    $('#value_message_won').html(value_message_won);
    

    var multiplier = datiJson.settings.multiplier;
    $('#multi').html(multiplier);


    //alert(numero_errore);

    var currency = datiJson.settings.currency;
    $('#currency').html(currency);

    

    var nome_gioco = datiJson.settings.title;
    $('#titolo_gioco').html(nome_gioco);

    var credito = datiJson.balance;
    $('#credito').html(credito);

    var bet_value = datiJson.settings.betAmount;
    $('#bet_value').html(bet_value);

    var max = datiJson.settings.eventDescs[0].payoutMul;

    var maxwin = bet_value * max;
    $('#maxwin').html(maxwin);
    var round_value = datiJson.currRoundId;
    $('#round_value').html(round_value);


    var secondi = datiJson.betsCloseMillis;


    if (secondi != 0) {
      var millis = Math.round(secondi);

      $("input").removeAttr('disabled');

      function displaytimer() {
        //Thank you MaxArt.
        var hours = Math.floor(millis / 36e5),
          mins = Math.floor((millis % 36e5) / 6e4),
          secs = Math.floor((millis % 6e4) / 1000);
        $('#timer1').html(hours + ':' + mins + ':' + secs);


        if ((hours == 0) && (mins == 0) && (secs == 0)) {

          clearInterval(primo);
          getupdate()
          //wait_bet()
        }

      }

      var primo = setInterval(function () {
        millis -= 1000;
        displaytimer();
      }, 1000);

    } else {

      wait_bet()
    }

  })()
};
//-----------------------


// ricavo update 
function getupdate() {
  $("#corpo").hide();
  $("#timer1").hide();
  $("#information").hide();
  $("#testo").hide();
  $("#testo_2").show();
  $("#bet").hide();
  $("#cancel").hide();
  $("#nobet").show();
  localStorage.setItem("nobet", "no");
  $("input").attr('disabled', 'disabled');
  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetUpdates?authToken=" + user + "&gameToken=" + gametoken + "");
    const datiJson2 = await response.json();


    var betopen = datiJson2.betsOpen;

    var numero_errore = datiJson2.errorNo;

    var tipo_errore = datiJson2.error;
    localStorage.setItem("errore_lotto", tipo_errore);
    
    if (numero_errore > 0)  {
      $('#alert_error').show();
    
    setTimeout(function() {
      $('#alert_error').fadeOut('fast');
  }, 4000); // <-- time in milliseconds

    getsetting();

    }



    var credito = datiJson2.balance;
    $('#credito').html(credito);


    var secondi_2 = datiJson2.nextRuondStartsMillis;

    if (secondi_2 != 0) {
      var millis_2 = Math.round(secondi_2+5000);


      function displaytimer2() {
        //Thank you MaxArt.
        var hours_2 = Math.floor(millis_2 / 36e5),
          mins_2 = Math.floor((millis_2 % 36e5) / 6e4),
          secs_2 = Math.floor((millis_2 % 6e4) / 1000);
        $('#timer2').html(hours_2 + ':' + mins_2 + ':' + secs_2);

        if ((hours_2 == 0) && (mins_2 == 0) && (secs_2 == 0)) {


          $("#timer2").hide();
          clearInterval(primo_2);
          //localStorage.setItem("nobet", "ok");
          getsetting()


        }
      }

      var primo_2 = setInterval(function () {
        millis_2 -= 1000;
        displaytimer2();
      }, 1000);

    } else {
      getupdate()

    }

  })()
  
};
//-----------------------

// wait for new bet

function wait_bet() {

  $("#corpo").hide();
  $("#timer1").hide();
  $("#information").hide();
  $("#testo").hide();
  $("#testo_2").show();
  $("#bet").hide();
  $("#cancel").hide();
  $("#nobet").show();
  $("input").attr('disabled', 'disabled');

  setTimeout(getupdate, 1000);
}


// ricavo storico giocate

function story() {
  $("#risultati").empty();

  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetRoundHistory?authToken=" + user + "&gameToken=" + gametoken + "");
    const datiJson_list = await response.json();

    for (let round of datiJson_list.roundHistory) {

      var orario_1 = round.dateTimeUtc.substr(11, 8);
      var orario_ok = orario_1.substr(0, 5);

      var tabella = "<tr><td style=text-align:center>" + round.dateTimeUtc.substr(0, 10) + "</td><td style=text-align:center>" + orario_ok + "</td><td style=text-align:center>" + round.resultNumbers.toString().replace(",", "").replace(",", "") + "</td><td style=text-align:center><a href=" + round.checkLink + " target=_blank><i class=\"fa fa-eye fa_eye\"></i></a></td></tr>";

      document.getElementById("risultati").innerHTML += tabella;
      //console.log(tabella);
    }

  })()
};

// ricavo storico puntate

function storybet() {
 
  $("#risultatibet").empty();
  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetMyBets?authToken=" + user + "&gameToken=" + gametoken + "");
    const datiJson_listbet = await response.json();

    for (let round of datiJson_listbet.betInfo) {

      var betId_valore = round.betId;
      var status = round.status;
      var link_verify = round.roundInfo.checkLink;
      if (status == 2) {

        var status = "Refused";
        var numerores = round.betContent.toString().replace(",", "").replace(",", "");
        var action = "Refused";
      }
      if (status == 3) {

        var status = "Accepted";
        var numerores = round.betContent.toString().replace(",", "").replace(",", "");
        var action = "<a href=\"#\" onclick=\"cancella_bet("+ betId_valore +")\"><i class=\"fa fa-2x fa_eye fa-trash-o\" ></i></a>";
      }
      if (status == 4) {

        var status = "Won";
        var numerores = round.roundInfo.resultNumbers.toString().replace(",", "").replace(",", "");
        var action = "<a href="+ link_verify + " target=\"_blank\"><i class=\"fa fa-eye fa_eye\"></i></a>";
      }
      if (status == 5) {

        var status = "Lost";
        var numerores = round.roundInfo.resultNumbers.toString().replace(",", "").replace(",", "");
        var action = "<a href="+ link_verify + " target=\"_blank\"><i class=\"fa fa-eye fa_eye\"></i></a>";
      }
      if (status == 6) {
        

        var status = localStorage.getItem("value_cancel");
        var numerores = "---";
        var action = localStorage.getItem("value_clear");

      }
      if (status == 7) {

        var status = "Error";
        var numerores = "---";
        var action = "Error";
      }
      
      //var bet_id = localStorage.setItem("valore_bet", betId_valore);
      var gioco = round.roundInfo.roundId;
      var orario = round.roundInfo.dateTimeUtc.substr(-8);

      var orario_2 = round.roundInfo.dateTimeUtc.substr(-8);
      var orario2_ok = orario_2.substr(0, 5);
      
      var tabellabet = "<tr><td>" + gioco + "</td><td>" + orario2_ok + "</td><td>" + round.amount + "</td><td>" + numerores + "</td><td>" + status + "</td><td>"+ action +"</td></tr>";

      document.getElementById("risultatibet").innerHTML += tabellabet;

    }

  })()

};


function risultato() {
  //setTimeout(function () {
    var cifra = document.getElementById("picker").value;

    //localStorage.setItem("mynumber", cifra);

    //var xnum = localStorage.getItem("mynumber");

    var primo = cifra.charAt(0);
    localStorage.setItem("primo", primo);

    var secondo = cifra.charAt(2);
    localStorage.setItem("secondo", secondo);

    var terzo = cifra.charAt(4);
    localStorage.setItem("terzo", terzo);

    vedinumero()
    // check number API



}


function vedinumero() {


  var primo = localStorage.getItem("primo");

  var secondo = localStorage.getItem("secondo");

  var terzo = localStorage.getItem("terzo");

  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/CheckNumber?authToken=" + user + "&gameToken=" + gametoken + "&n1=" + primo + "&n2=" + secondo + "&n3=" + terzo);
    const datiJson_number = await response.json();

    var numero_ok = datiJson_number.numberQuery.available;
    var betopen = datiJson_number.betsOpen;
    var errori = datiJson_number.success;

    var errorNo = datiJson_number.errorNo;

    var tipo_errore = datiJson_number.error;
    localStorage.setItem("errore_lotto", tipo_errore);

if(errorNo > 0) {

  $('#alert_error').show();
    
  setTimeout(function() {
    $('#alert_error').fadeOut('fast');
}, 4000); // <-- time in milliseconds

  getsetting();

}


    var timer_r = datiJson_number.nextRuondStartsMillis;

    if ((numero_ok == false) && (betopen == true)) {
      //$("#ticker").removeClass("ticker_ok");
      $("#free").hide();
      //$("#bet_button").attr("disabled", true);
      $("#bet_no").show();
      $("#bet_si").hide();
      $("#notfree").show();
      setTimeout(function() {
        $('#notfree').fadeOut('fast');
    }, 4000);
      //$("#ticker").addClass("animated infinite shake");
      //$("#ticker").addClass("ticker_ko");

      

    } else {
      
      
      $("#bet_no").hide();
      $("#bet_si").show();

      $("#notfree").hide();
      
      $("#free").show();
      setTimeout(function() {
        $('#free').fadeOut('fast');
    }, 4000);
      //$("#picker").addClass("ticker_ok"); 
      //$("#tab_1").hide();
      //$("#bet").show();
      //$("#cancel").show();
      //$("#bet").addClass("animated infinite pulse");
    }

  })()

}


// place bet

function placebet() {

  
  var primo = localStorage.getItem("primo");

  var secondo = localStorage.getItem("secondo");

  var terzo = localStorage.getItem("terzo");

  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/PlaceBet?authToken=" + user + "&gameToken=" + gametoken + "&n1=" + primo + "&n2=" + secondo + "&n3=" + terzo);
    const datiJson_bet = await response.json();


    var betopen = datiJson_bet.betsOpen;
    var errori = datiJson_bet.error;
    $('#errori').html(errori);
    var credito = datiJson_bet.balance;
    $('#credito').html(credito);
    var round = datiJson_bet.currRoundId;
    $('#round').html(round);

    var tipo_errore = datiJson_bet.error;
    localStorage.setItem("errore_lotto", tipo_errore);


    if (betopen == true) {

      $("#bet_button").attr("disabled", true);
      //$("#cancel").hide();
      $("#information").show();
      $("#free").hide();
      //$("#ticker").removeClass("ticker_ok");
      setTimeout(getsetting, 5000);

    } else {

      
      $('#alert_error').show();
    
    setTimeout(function() {
      $('#alert_error').fadeOut('fast');
  }, 4000); // <-- time in milliseconds

    getsetting();
    }


  })()

}


function restart() {

  location.reload();
}

function stop2() {
  $("#ticker").removeClass("animated shake");
  //$("#ticker").removeClass("ticker_ko");
  $("#ticker").removeClass("ticker_ok");
 //$("#bet").removeClass("animated infinite flash");
 // $("#bet").hide();
}

function apri() {
  setTimeout(function () {
    $("#ticker").fadeOut(2000);
  }, 3000);
}

function cancella_bet(valore_bet) {

  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/CancelBet?authToken=" + user + "&gameToken=" + gametoken + "&betId=" + valore_bet);
    const datiJson_cancella = await response.json();

    var betopen = datiJson_cancella.betsOpen;
    //var balance = datiJson_cancella.balance; 
    
    
    $('#alert_message').show();
    
    setTimeout(function() {
      $('#alert_message').fadeOut('fast');
  }, 4000); // <-- time in milliseconds

    getsetting();
    


  })()
  

}

function closegame() { 


  (async() => {
    const response = await fetch("https://italy28.117.bet/Lotto10000/GetSettings?authToken=" + user + "&gameToken=" + gametoken);
    const datiJson_exit = await response.json();


    var exiturl = datiJson_exit.settings.exitUrl;
    
    window.location.href = exiturl;
    

  })()


}