<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="mobel">
    <div class="container">
      <div class="mod-top">
          <span id="topic">请选择自己心仪的并投票</span>
      </div>
    </div>
    <form class="" action="/vote/add/score" method="get">
    <div class="box">
      @foreach ($voteInfo->candidate as $voteInfo)
        <img src="{{ $voteInfo->c_img }}" alt="" style="height: 100%;width: 100%;">

        <div class="votechoice">
            <ul class="vote1">
        <input type="radio" name="c_id" value="{{$voteInfo->c_id}}"id="check">
        <label>编号:</label>
        <span><b>{{$voteInfo->c_id}}</b></span>
      </ul>
   </div>
      @endforeach
    </div>
         <button type="button" class="button blue" onClick="submitvote(this)">投票</button>
    </form>
    </div>
  </body>
</html>
<style media="screen">
.box{
  text-align: center;
  height: auto;
}
.box ul{
  width: 100%; */
      height: auto;
      margin: 0 auto;
}
.box ul li{
  width: 100%;
  height: auto;
  float: left;
  text-align: center;
}
#check{
  position: relative;
  right: 6%;
}
#choosing {
  font-size: 25px;
      font-weight: 600;
      font-style: normal;
      font-family: Micsorft-YAHEI;
      color: black;
      left: -5%;
      position: relative;
}


.votechoice ul {
  list-style-type: none;
      /* padding-top: 10px; */
 }

.votechoice ul li {
  width: 100%;
  padding-top: 15px;
}

.votechoicename {
  width: 340px;
      right: 6%;
      padding-left: 25px;
      position: relative;
}

.button {
  left: 39%;
      width: 80px;
      line-height: 25px;
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      color: #ffffff;
      text-shadow: 1px 1px 1px #333;
      border-radius: 5px;
      margin: 0 20px 20px 0;
      position: relative;
      overflow: hidden;
      border: 1px solid #1e7db9;
      background-color: #2e88c0;
      box-shadow: 0 1px 2px #8fcaee inset, 0 -1px 0 #497897 inset, 0 -2px 3px #8fcaee inset;
      background: -webkit-linear-gradient(top, #42a4e0, #2e88c0);
      background: -moz-linear-gradient(top, #42a4e0, #2e88c0);
      background: linear-gradient(top, #42a4e0, #2e88c0);
}
li{
  text-shadow: none;
}
  html, body {
    margin: 0;
    padding: 0;
    height: 100%;
  }
  .container{
    width: 100%;
  }
  .container .mod-top{
    width: 100%;
    text-align: center;
    background-color: rgba(54, 130, 180, 1);
    position: relative;
    height: 45px;
}
  .container .mod-top #topic {
    margin-top: auto;
    position: relative;
    top: 5px;
    font-size: 24px;
    font-style: normal;
    font-family: Micsorft YAHEI;
    font-weight: 600;
    color: white;
  }
</style>
<script type="text/javascript">
function submitvote(event){
  var checkstatus = event.parentNode.parentNode.getElementsByTagName('input');
  var infomessage=false;
  for(var i=0;i<checkstatus.length;i++){
      if(checkstatus[i].checked){
          infomessage=true;
      }
  }
  if(infomessage){
      alert("投票成功！");
  }else{
      alert("请选择选项后再点击投票按钮！");
  }

}
</script>
