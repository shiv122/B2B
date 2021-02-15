<html>
  <head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
    <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
  </head>
    <style>
      .hide{
  display:none;
}
.show{
  display:block;
  position:absolute;
  left: 200px;
  top: 200px;
  color: blue;
}
      body {
        text-align: center;
        padding: 40px 0;
        background: #EBF0F5;
      }
        h1 {
          color: #88B04B;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-weight: 900;
          font-size: 40px;
          margin-bottom: 10px;
        }
        .p {
          color: #404F5E;
          font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
          font-size:20px;
          margin: 0;
        }
      i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
      }
      .card1 {
          
  transition: 0.3s;
  width: 100%;

      }
    </style>
    <script >
      window.onload=function()  //executes when the page finishes loading
{
  setTimeout(func1, 1500); 
  setTimeout(func2, 2500);
  setTimeout(func3, 3550); //sets a timer which calls function func1 after 2,000 milliseconds = 2 secs.
  
};
function func1()
{
  document.getElementById("my_div").className="p";
}
function func2()
{
  document.getElementById("my_div1").className="p";
}
function func3()
{
  document.getElementById("my_div3").className="s-24 icon-done_all";
}




    </script>
    <body>
      <div class="card1">
      <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
        <i class="checkmark">✓</i>
      </div>
        <h1>Success</h1> 
        <div style="" id="my_div" class="hide"><p>Your request has been acceted<br/> Database </p></div>
        
        <div id="my_div1" class="hide"><p>working on it<br/> Please wait </p></div>
        <div id="my_div3" class="hide" ></div></div>
        
      </div>
    </body>
</html>