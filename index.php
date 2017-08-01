<!DOCTYPE html>
<html>
  <head>
    <title>BitDice</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <!-- Bootstrap core CSS -->
    <link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://bootswatch.com/lumen/bootstrap.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
    <style type="text/css">
      * {
        border-radius: 0 !important;
      }

      /* just for preview */

@media ( max-width: 585px ) {
    .input-group span.input-group-btn,.input-group input,.input-group button{
        display: block;
        width: 100%;
        border-radius: 0;
        margin: 0;
    }
    .input-group {
        position: relative;   
    }
    .input-group span.data-up{
        position: absolute;
        top: 0;
    }
    .input-group span.data-dwn{
        position: absolute;
        bottom: 0;
    }
    .form-control.text-center {
        margin: 34px 0;
    }
    .input-group-btn:last-child>.btn, .input-group-btn:last-child>.btn-group{
        margin-left:0;
    }

}
    </style>
  </head>
  <body>
    <div class="container-fluid" id="headerContainer" style="background-color: #428bca;">
      <div class="row">
        
        <div class="col-xs-2" style="color: white !important;">
          <h4 style="color: white !important;">BitDice </h4>
        </div>
        <div class="col-xs-10">
          <h5 style="color: white !important;" class="pull-right"><strong>Balance:</strong> <small style="font-size: 0.7em; color: white !important;">m</small><i class="fa fa-bitcoin"></i><span id="lblFiatValue"></span></h5>
        </div>
        <div id="myFolioValue"></div>

      </div>

    </div>


    <nav class="navbar navbar-default">
      <div class="container">
      
        <div class="row" style="padding-top: 10px;">

          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562/slots"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/slots-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">Slot Machine</h5></center>
          </div>
          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562/wheel"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/wof-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">Wheel of Wealth</h5></center>
          </div>
          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562/dice"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/dice-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">Roll of Chance</h5></center>
          </div>
          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562/blackjack"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/blackjack-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">BlackJack</h5></center>
          </div>
          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562/roulette"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/roulette-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">Roulette</h5></center>
          </div>
          <div class="col-xs-2">
            <center><a href="http://faucetgame.com/r/8391562"><img style="max-height: 24px;" src="https://faucetgame.com/assets/img/lottery-icon.png" class="img img-responsive"></a><h5 class="hidden-xs hidden-sm">Lottery</h5></center>
          </div>
             

        </div>
     
        <center><small style="font-size: 0.5em;" class="text-muted">THE ABOVE GAMES ARE REFERRAL LINKS</small></center>
      </div>
    </nav>

    <div class="container">
      
      <div class="row">
        <div class="col-md-3">
          <div class="well">
            <h4>Welcome to BitDice</h4>
            <p>Join the rest of our casino loving faucet users and start playing a variety of casino games from around the web today.</p>
            <br/>
            <h4 class="text-center">NO ACCOUNT REQUIRED!</h4>
            <br/>
            <p class="text-center"><small>WE DO NOT CURRENTLY ACCEPT DEPOSITS.</small></p>
            <hr/>
            <button class="btn btn-lg btn-info btn-block">Claim Your Free Bitcoin</button>
            <br/>
            <button class="btn btn-primary btn-block">Withdraw Funds</button>
          </div>

        </div>

        <div class="col-md-9">
          <div class="row">
            <div class="col-md-8">
              <div class=" well">
                <div class="row text-center">
                  <div class="col-md-4">
                    <h4>Rolls<br/><small>0</small></h4>

                  </div>
                  <div class="col-md-4">
                    <h4>Wagered<br/><small>0</small></h4>

                  </div>
                  <div class="col-md-4">
                    <h4>Credits Won<br/><small>0</small></h4>

                  </div>
                </div>

                <div class="text-center">
                  <h1 id="RolledNum">50.00</h1>
                  <span id="winner" class="text-muted"><strong>WIN</strong></span> <span id="nowinner" class="text-muted"><strong>LOSE</strong></span>
                </div>
              </div>

              <div class="well">
                <h5><small>About</small></h5>
                <small>This game is based on your luck and not any other factors. Each roll of the dice is 100% completely random - you can win a lot or you can lose it all.</small>
              </div>

              <center><a href="http://faucetgame.com/r/8391562" target="_BLANK"><img src="http://faucetgame.com/assets/img/banners/15.gif"></a></center>
            </div>

            <div class="col-md-4">
              <div class="well">
                <h4 class="text-center"><small>BET</small></h4>
                <div class="input-group number-spinnerA">
                  <span class="input-group-btn data-dwn">
                    <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                  </span>
                  <input type="text" class="form-control text-center" id="txtMyBet" value="1" min="1" max="5">
                  <span class="input-group-btn data-up">
                    <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                  </span>
                </div>
                <br/>
                <h4 class="text-center"><small>PAYOUT</small></h4>
                <div class="input-group number-spinner">
                  <span class="input-group-btn data-dwn">
                    <button class="btn btn-default btn-info" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                  </span>
                  <input type="text" class="form-control text-center" id="txtThePayout" value="2" min="2" max="5">
                  <span class="input-group-btn data-up">
                    <button class="btn btn-default btn-info" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                  </span>
                </div>
                <br/>

                <p class="text-center"><h4 id="overunder_Number" class="text-center"><small>ROLL <span id="overunder">UNDER</span></small><br/><br/><span id="num2beat">49.9</span> <br/><small style="font-size: 0.5em;">CLICK TO CHANGE</small></h4></p>
                <br/>
                <button class="btn btn-block btn-info btn-lg" id="btnRollDice1">ROLL!</button>
              </div>

              
            </div>
          </div>
        </div>
      </div>
     
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script type="text/javascript">
      var myCredits = 100;
      $('#lblFiatValue').text(parseFloat(myCredits).toFixed(2));
      var RollUpDn = "under";
      $(function() {
          var action;
          $(".number-spinner button").mousedown(function () {
              btn = $(this);
              input = btn.closest('.number-spinner').find('input');
              btn.closest('.number-spinner').find('button').prop("disabled", false);

            if (btn.attr('data-dir') == 'up') {
                  action = setInterval(function(){
                      if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                          input.val(parseInt(input.val())+1);

                      }else{
                          btn.prop("disabled", true);
                          clearInterval(action);
                      }
                  }, 50);

            } else {
                  action = setInterval(function(){
                      if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                          input.val(parseInt(input.val())-1);
                      }else{
                          btn.prop("disabled", true);
                          clearInterval(action);
                      }


                  }, 50);
            }
          }).mouseup(function(){
              clearInterval(action);
              if(RollUpDn == 'under'){
                switch (input.val()) {
                  case '2':
                      $('#num2beat').text('49.9');
                      break;
                  case '3':
                      $('#num2beat').text('33.26');
                      break;
                  case '4':
                      $('#num2beat').text('24.95');
                      break;
                  case '5':
                      $('#num2beat').text('19.96');
                  
                }
              } else {
                switch (input.val()) {
                  case '2':
                      $('#num2beat').text('50.1');
                      break;
                  case '3':
                      $('#num2beat').text('66.74');
                      break;
                  case '4':
                      $('#num2beat').text('75.05');
                      break;
                  case '5':
                      $('#num2beat').text('80.04');
                  
              }
              }
              
          });
      });

      $(function() {
          var action;
          $(".number-spinnerA button").mousedown(function () {
              btn = $(this);
              input = btn.closest('.number-spinnerA').find('input');
              btn.closest('.number-spinnerA').find('button').prop("disabled", false);

            if (btn.attr('data-dir') == 'up') {
                  action = setInterval(function(){
                      if ( input.attr('max') == undefined || parseInt(input.val()) < parseInt(input.attr('max')) ) {
                          input.val(parseInt(input.val())+1);

                      }else{
                          btn.prop("disabled", true);
                          clearInterval(action);
                      }
                  }, 50);

            } else {
                  action = setInterval(function(){
                      if ( input.attr('min') == undefined || parseInt(input.val()) > parseInt(input.attr('min')) ) {
                          input.val(parseInt(input.val())-1);
                      }else{
                          btn.prop("disabled", true);
                          clearInterval(action);
                      }


                  }, 50);
            }
          }).mouseup(function(){
              clearInterval(action);
              
          });
      });

      //overunder_Number
      $( "#overunder_Number" ).click(function() {
        //alert('asdf');
        if(RollUpDn == 'under'){
          RollUpDn = 'over';
          $('#overunder').text('OVER');
          $('#txtMyBet').val('1');
          $('#txtThePayout').val('2');
          $('#num2beat').text('50.1');
        } else {
          RollUpDn = 'under';
          $('#overunder').text('UNDER');
          $('#txtMyBet').val('1');
          $('#txtThePayout').val('2');
          $('#num2beat').text('49.9');
           
        }
      });

      $( "#btnRollDice1" ).click(function() {
        myBet = $('#txtMyBet').val();
        thePayout = $('#txtThePayout').val();
        myCreditsA = $('#lblFiatValue').text();
        //alert(myBet + '-' + myCreditsA);
        if(parseInt(myCreditsA) <= parseInt(myBet)){
          alert('Whoa! You do not have enough credits to keep playing!');
        } else {
          myCredits = myCredits - (myBet * thePayout);

          $('#lblFiatValue').text(parseFloat(myCredits).toFixed(2));
          roll();
        }
        
        
        
      });

      function roll(){
      
      var raw = Math.random();
      
      var times100 = raw * 100;
      var num2beat = $('#num2beat').text();

      $('#RolledNum').text(parseFloat((times100).toFixed(2)));

      //alert(RollUpDn);
      if(RollUpDn == 'under'){
        if(times100 < num2beat){
        
          myBet = $('#txtMyBet').val();
          thePayout = $('#txtThePayout').val();

          theWin = thePayout * myBet;

          //myCredits = myCredits + theWin;
          myCredits = myCredits + (theWin * 2);

          $('#lblFiatValue').text(parseFloat(myCredits).toFixed(2));

          $("#winner").removeClass("text-muted");
          $("#winner").css("color", "green");
          $("#nowinner").css("color", "#999999");  
        } else {
          $("#nowinner").removeClass("text-muted");
          $("#nowinner").css("color", "red");
          $("#winner").css("color", "#999999");
        }

      } else {
        if(times100 > num2beat){
        
          myBet = $('#txtMyBet').val();
          thePayout = $('#txtThePayout').val();

          theWin = thePayout * myBet;

          myCredits = myCredits + (theWin * 2);

          $('#lblFiatValue').text(parseFloat(myCredits).toFixed(2));

          $("#winner").removeClass("text-muted");
          $("#winner").css("color", "green");
          $("#nowinner").css("color", "#999999");  
        } else {
          $("#nowinner").removeClass("text-muted");
          $("#nowinner").css("color", "red");
          $("#winner").css("color", "#999999");
        }
      }
      
     } // end roll

    </script>

    <script type = "text/javascript">
     
 </script>

  </body>
</html>
