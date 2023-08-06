<?php

?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/app.css')}}" />
</head>

<body>

    <?php foreach($blogs as $blog ) : ?>
    <div class=" container">
        <h1> <a href="/blogs/{{$blog['filename']}}">
                {{$blog['title']}}
            </a>
        </h1>
        <p>{{$blog['intro']}} </p>
        <p> published date - {{$blog['created_at']}}</p> <?php endforeach;?>
    </div>




    <!-- <div class=" container">
        <h1> <a href="/blogs/second-blog">Second-blog</a> </h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae et ad similique ratione, necessitatibus
            sit? Optio
            debitis magnam, facere doloremque aperiam incidunt iure, asperiores est nam, nemo inventore totam
            cumque
            soluta
            sunt vel et. Nemo temporibus dolore ut autem quibusdam magni laborum. A architecto nam nihil, illum
            ducimus
            quidem harum, id expedita earum eaque repellendus, voluptates obcaecati aperiam. Aliquam culpa
            deserunt
            sed reiciendis maxime ut aspernatur odit minima repellat, quidem quasi ratione blanditiis animi
            distinctio
            tenetur earum! Nulla alias quis tenetur velit nihil eligendi itaque consequuntur ex aut a? Veniam,
            error
            eius
            ratione adipisci eligendi molestias, vitae necessitatibus eveniet dolorum minus iure nihil ipsa,


        </p>
    </div> -->

    <script src="{{asset('/app.js')}}"></script>

</body>

</html>