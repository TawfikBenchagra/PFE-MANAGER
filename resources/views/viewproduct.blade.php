<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <div style="text-align: center;">
        <div >
          
                <h3 style="font-family: 'Courier New', Courier, monospace"  > {{$data->name}} </h3>
                <h5 style="color: red">  {{$data->description}} </h5>

        </div>
    </div>
  
   
    <iframe height="500" width="100%" src="/assets/{{$data->file}}"></iframe> 
</body>
</html>