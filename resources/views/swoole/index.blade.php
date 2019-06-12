<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>
    <input type="text">
    <button value="send" id="button">send</button>
</div>

<div>
    <lable id="content"></lable>
</div>

<script src="/jquery-3.1.1.min.js"></script>
<script>

    var ws_server ='ws://swoole.1809a.zyzyz.top:9502';
    var ws =new WebSocket(ws_server);
//    websock 成功时触发事件
    ws.onopen=function(){
        //使用send发送数据
        $("#button").click(function () {
            var chat_value = $(this).prev().val();
            var data ={
                type:"message",
                text:chat_value,
                id:"1",
                date:Date.now()
            };
            ws.send(JSON.stringify(data));
        });

    };
//    接收服务端数据时触发事件
    ws.onmessage=function(d){
        var str = d.data;
        var arr = JSON.parse(str);
//        console.log(arr[0]);
        $("#content").append(arr.text).append("<br>");
    };
    console.log(ws);

</script>
</body>
</html>
