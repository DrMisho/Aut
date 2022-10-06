<html lang="ar">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bombo Cars</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="css/flexboxgrid.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            margin: 0 5px;
        }
        .full-height {
            height: 100vh;
        }
        .sidbar{
            width:30%;
            background-color: #bcccb9;
        }
        .content{
            width:80%;
            background-color: #e1ebe2;
            text-align: right;
        }
        .right{
            text-align: right;
        }
        .item{
            display: flex;
    justify-content: center;
    background-color: #dcebda;
    font-size: 200%;
    margin-bottom: 5px;
        }
        .item:hover{
    background-color: #96d48a;
    color: white;
        }
        .add{
            text-decoration: none;
    color: inherit;
        }
    </style>
</head>
<body>
<div class="row between-xs center-xs middle-xs full-height">
<h1>FAQ Pages</h1>
<div style="display: flex;">
<div class="sidbar">
<x-faq-category :categories="$categories"/>
</div>
<div class="content">
<x-questions :questions="$faqs"/>
</div>

</div>

</div>
</body>
</html>