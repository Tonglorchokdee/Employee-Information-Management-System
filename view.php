<?php
require_once('connections/mysqli.php');

$sql = " SELECT u.user_id,u.user_username,u.user_password,u.user_name,u.user_surname,u.user_sex,u.user_email,u.ref_dep_id,u.user_level
FROM tb_department as p
INNER JOIN tb_user as u ON p.dep_id = u.ref_dep_id";
$query = mysqli_query($Connection,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <!-- fonts -->
    <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Kanit:300">

    <style>
    html, body {
    font-family: kanit;
    background-color: #EDEBEE;
    
    }
    #content {
    position: relative;
    width: 80%; 
    margin: auto;
    }
    article {
    margin: 4em 0;
    padding: 1em 0;
    }
    h1, .indicator-tooltip {
    margin-top: 0;
    font-family: helvetica, sans-serif;
    font-weight: 100;
    -webkit-font-smoothing: antialiased;
    }
    h1 {
    font-size: 3em;
    color: #806973;
    }
    p {
    font-family: georgia, serif;
    line-height: 1.5em;
    }


    .indicator {
    display: inline-block;
    right: 1em;
    padding: 0.3em;
    background: #806973;
    border-radius: 50%;
    opacity: 0.5;
    transition: opacity 0.5s;
    }
    .indicator--passed, .indicator--upcoming {
    position: fixed;
    }
    .indicator--passed { 
    top: 0 !important;
    }
    .indicator--upcoming { 
    bottom: 0 !important;
    }
    .indicator--active {
    position: absolute;
    }
    .indicator--viewing, .indicator:hover {
    opacity: 1;
    }

    .indicator-tooltip {
    position: absolute;
    right: 2em;
    width: 0;
    margin-top: -1em;
    background-color: #806973;
    color: #FFF;
    white-space: nowrap;
    border-radius: 3px;
    overflow: hidden;
    z-index: -1;
    }
    .indicator-tooltip:after {
    display: block;
    content: '';
    position: absolute;
    right: -0.9em;
    top: 50%;
    width: 0;
    height: 0;
    margin-top: -0.4em;
    border: 0.4em solid transparent;
    border-left: 0.5em solid #806973;
    }
    .indicator:hover .indicator-tooltip {
    width: auto;
    padding: 0.5em;
    overflow: visible;
    z-index: 1;
    }
    </style>
</head>
<body>

<!-- >>>>>>>>> -->
<!-- ================================================ -->
<!-- START THE navbar -->

<?php include 'includes/navbar.php';?>

 
<!-- /END THE navbar -->
<!-- ================================================ -->
<!-- START THE bottom กับ liveToast --> 

<div id="content">
  <article id="sf">
    <h1>Chairman</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a urna lobortis, laoreet libero ut, vulputate risus. Aenean rhoncus, tellus nec cursus tempus, magna nisi pellentesque odio, mattis volutpat nunc mauris eget orci. Vivamus quis tellus pellentesque, vulputate diam vel, facilisis risus. Nulla mi felis, euismod ac est in, ultrices tempus nisl. Ut et commodo mi. Sed rutrum porttitor est posuere ullamcorper. Aliquam dapibus nibh id viverra malesuada. Suspendisse quis sem eu nibh varius gravida ut ac magna. Suspendisse massa nisi, malesuada a nisl et, iaculis auctor dolor. Fusce ultrices, mauris non placerat eleifend, nibh sapien sodales velit, sit amet viverra enim erat sed elit. Maecenas facilisis dui eu ullamcorper laoreet. Maecenas pharetra sem id vehicula scelerisque.</p><p>
    Ut a fringilla orci. Donec nec erat in leo posuere hendrerit. Cras posuere vehicula tellus, ac pharetra mauris sagittis ut. Curabitur at ante malesuada, sagittis dolor ut, laoreet erat. Curabitur eu justo eros. Aliquam ac ipsum quis nulla lacinia varius. Cras tempus aliquet erat at imperdiet. Integer sagittis tincidunt commodo. Fusce lacinia blandit leo vel bibendum. Pellentesque hendrerit nibh ac nunc porta, quis tempor odio aliquet. Nulla sed iaculis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sollicitudin, lacus vel lobortis luctus, elit magna lobortis turpis, id cursus magna nunc vel magna. Etiam sit amet condimentum nisl. Aenean in leo vehicula ante dapibus laoreet. Nunc in massa a leo sollicitudin facilisis non non orci.</p><p>
    Nunc lorem nisi, scelerisque quis arcu non, dapibus fermentum arcu. Cras nec facilisis neque. Fusce ultricies nunc nunc, interdum ultrices magna vestibulum in. Suspendisse sed sollicitudin urna. Etiam faucibus aliquet erat. Morbi vel nunc hendrerit arcu hendrerit ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempus luctus sapien vitae porta. Ut eget sapien ut ipsum suscipit porta. Mauris sed dui ac tellus elementum bibendum fringilla id ante. Sed ut felis non lorem venenatis feugiat. Duis cursus, enim sit amet volutpat elementum, diam turpis scelerisque massa, vitae pretium neque velit id arcu. Maecenas at enim id magna gravida bibendum. Vivamus sit amet enim dolor.
    Aenean sollicitudin massa id diam rutrum aliquam. Aenean eget tincidunt felis. Morbi condimentum arcu orci, at malesuada metus blandit quis. Praesent nec massa elit. Vivamus porttitor diam eu quam euismod mattis. Duis ut justo augue. Cras tempus urna quis mauris ornare dapibus. Maecenas quis nibh malesuada, lacinia risus mattis, tempor nibh. Suspendisse convallis ut lorem ut posuere. Integer nec enim mauris. Nunc eget faucibus dolor. Nam vitae hendrerit nisi. Phasellus pulvinar quam sed sapien tincidunt placerat. Maecenas id lacus eu lacus ornare tincidunt ut eu tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>
    Fusce vel libero vitae augue molestie luctus a vel arcu. Maecenas ut quam purus. Pellentesque vestibulum interdum dui, quis imperdiet lacus scelerisque vitae. Integer luctus erat ut feugiat sodales. Cras laoreet accumsan nisi, eu tincidunt eros euismod ac. Aliquam ut odio lacinia, porttitor velit eu, suscipit metus. Nullam varius sem quis enim blandit consectetur. Donec sit amet arcu est. Donec ac aliquet lectus. Duis volutpat, nunc sed iaculis imperdiet, dolor nulla sagittis nunc, vitae congue neque massa at purus. Praesent at ipsum tristique, dignissim est in, lacinia libero. Maecenas sollicitudin massa lobortis facilisis commodo. Donec non est arcu.</p>
  </article><article id="nyc">
    <h1>President</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a urna lobortis, laoreet libero ut, vulputate risus. Aenean rhoncus, tellus nec cursus tempus, magna nisi pellentesque odio, mattis volutpat nunc mauris eget orci. Vivamus quis tellus pellentesque, vulputate diam vel, facilisis risus. Nulla mi felis, euismod ac est in, ultrices tempus nisl. Ut et commodo mi. Sed rutrum porttitor est posuere ullamcorper. Aliquam dapibus nibh id viverra malesuada. Suspendisse quis sem eu nibh varius gravida ut ac magna. Suspendisse massa nisi, malesuada a nisl et, iaculis auctor dolor. Fusce ultrices, mauris non placerat eleifend, nibh sapien sodales velit, sit amet viverra enim erat sed elit. Maecenas facilisis dui eu ullamcorper laoreet. Maecenas pharetra sem id vehicula scelerisque.</p><p>
    Ut a fringilla orci. Donec nec erat in leo posuere hendrerit. Cras posuere vehicula tellus, ac pharetra mauris sagittis ut. Curabitur at ante malesuada, sagittis dolor ut, laoreet erat. Curabitur eu justo eros. Aliquam ac ipsum quis nulla lacinia varius. Cras tempus aliquet erat at imperdiet. Integer sagittis tincidunt commodo. Fusce lacinia blandit leo vel bibendum. Pellentesque hendrerit nibh ac nunc porta, quis tempor odio aliquet. Nulla sed iaculis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sollicitudin, lacus vel lobortis luctus, elit magna lobortis turpis, id cursus magna nunc vel magna. Etiam sit amet condimentum nisl. Aenean in leo vehicula ante dapibus laoreet. Nunc in massa a leo sollicitudin facilisis non non orci.</p><p>
    Nunc lorem nisi, scelerisque quis arcu non, dapibus fermentum arcu. Cras nec facilisis neque. Fusce ultricies nunc nunc, interdum ultrices magna vestibulum in. Suspendisse sed sollicitudin urna. Etiam faucibus aliquet erat. Morbi vel nunc hendrerit arcu hendrerit ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempus luctus sapien vitae porta. Ut eget sapien ut ipsum suscipit porta. Mauris sed dui ac tellus elementum bibendum fringilla id ante. Sed ut felis non lorem venenatis feugiat. Duis cursus, enim sit amet volutpat elementum, diam turpis scelerisque massa, vitae pretium neque velit id arcu. Maecenas at enim id magna gravida bibendum. Vivamus sit amet enim dolor.
    Aenean sollicitudin massa id diam rutrum aliquam. Aenean eget tincidunt felis. Morbi condimentum arcu orci, at malesuada metus blandit quis. Praesent nec massa elit. Vivamus porttitor diam eu quam euismod mattis. Duis ut justo augue. Cras tempus urna quis mauris ornare dapibus. Maecenas quis nibh malesuada, lacinia risus mattis, tempor nibh. Suspendisse convallis ut lorem ut posuere. Integer nec enim mauris. Nunc eget faucibus dolor. Nam vitae hendrerit nisi. Phasellus pulvinar quam sed sapien tincidunt placerat. Maecenas id lacus eu lacus ornare tincidunt ut eu tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>
    Fusce vel libero vitae augue molestie luctus a vel arcu. Maecenas ut quam purus. Pellentesque vestibulum interdum dui, quis imperdiet lacus scelerisque vitae. Integer luctus erat ut feugiat sodales. Cras laoreet accumsan nisi, eu tincidunt eros euismod ac. Aliquam ut odio lacinia, porttitor velit eu, suscipit metus. Nullam varius sem quis enim blandit consectetur. Donec sit amet arcu est. Donec ac aliquet lectus. Duis volutpat, nunc sed iaculis imperdiet, dolor nulla sagittis nunc, vitae congue neque massa at purus. Praesent at ipsum tristique, dignissim est in, lacinia libero. Maecenas sollicitudin massa lobortis facilisis commodo. Donec non est arcu.</p>
  </article><article id="dc">
    <h1>Manager</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a urna lobortis, laoreet libero ut, vulputate risus. Aenean rhoncus, tellus nec cursus tempus, magna nisi pellentesque odio, mattis volutpat nunc mauris eget orci. Vivamus quis tellus pellentesque, vulputate diam vel, facilisis risus. Nulla mi felis, euismod ac est in, ultrices tempus nisl. Ut et commodo mi. Sed rutrum porttitor est posuere ullamcorper. Aliquam dapibus nibh id viverra malesuada. Suspendisse quis sem eu nibh varius gravida ut ac magna. Suspendisse massa nisi, malesuada a nisl et, iaculis auctor dolor. Fusce ultrices, mauris non placerat eleifend, nibh sapien sodales velit, sit amet viverra enim erat sed elit. Maecenas facilisis dui eu ullamcorper laoreet. Maecenas pharetra sem id vehicula scelerisque.</p><p>
    Ut a fringilla orci. Donec nec erat in leo posuere hendrerit. Cras posuere vehicula tellus, ac pharetra mauris sagittis ut. Curabitur at ante malesuada, sagittis dolor ut, laoreet erat. Curabitur eu justo eros. Aliquam ac ipsum quis nulla lacinia varius. Cras tempus aliquet erat at imperdiet. Integer sagittis tincidunt commodo. Fusce lacinia blandit leo vel bibendum. Pellentesque hendrerit nibh ac nunc porta, quis tempor odio aliquet. Nulla sed iaculis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sollicitudin, lacus vel lobortis luctus, elit magna lobortis turpis, id cursus magna nunc vel magna. Etiam sit amet condimentum nisl. Aenean in leo vehicula ante dapibus laoreet. Nunc in massa a leo sollicitudin facilisis non non orci.</p><p>
    Nunc lorem nisi, scelerisque quis arcu non, dapibus fermentum arcu. Cras nec facilisis neque. Fusce ultricies nunc nunc, interdum ultrices magna vestibulum in. Suspendisse sed sollicitudin urna. Etiam faucibus aliquet erat. Morbi vel nunc hendrerit arcu hendrerit ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempus luctus sapien vitae porta. Ut eget sapien ut ipsum suscipit porta. Mauris sed dui ac tellus elementum bibendum fringilla id ante. Sed ut felis non lorem venenatis feugiat. Duis cursus, enim sit amet volutpat elementum, diam turpis scelerisque massa, vitae pretium neque velit id arcu. Maecenas at enim id magna gravida bibendum. Vivamus sit amet enim dolor.
    Aenean sollicitudin massa id diam rutrum aliquam. Aenean eget tincidunt felis. Morbi condimentum arcu orci, at malesuada metus blandit quis. Praesent nec massa elit. Vivamus porttitor diam eu quam euismod mattis. Duis ut justo augue. Cras tempus urna quis mauris ornare dapibus. Maecenas quis nibh malesuada, lacinia risus mattis, tempor nibh. Suspendisse convallis ut lorem ut posuere. Integer nec enim mauris. Nunc eget faucibus dolor. Nam vitae hendrerit nisi. Phasellus pulvinar quam sed sapien tincidunt placerat. Maecenas id lacus eu lacus ornare tincidunt ut eu tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>
    Fusce vel libero vitae augue molestie luctus a vel arcu. Maecenas ut quam purus. Pellentesque vestibulum interdum dui, quis imperdiet lacus scelerisque vitae. Integer luctus erat ut feugiat sodales. Cras laoreet accumsan nisi, eu tincidunt eros euismod ac. Aliquam ut odio lacinia, porttitor velit eu, suscipit metus. Nullam varius sem quis enim blandit consectetur. Donec sit amet arcu est. Donec ac aliquet lectus. Duis volutpat, nunc sed iaculis imperdiet, dolor nulla sagittis nunc, vitae congue neque massa at purus. Praesent at ipsum tristique, dignissim est in, lacinia libero. Maecenas sollicitudin massa lobortis facilisis commodo. Donec non est arcu.</p>
  </article><article id="philly">
    <h1>Philadelphia</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a urna lobortis, laoreet libero ut, vulputate risus. Aenean rhoncus, tellus nec cursus tempus, magna nisi pellentesque odio, mattis volutpat nunc mauris eget orci. Vivamus quis tellus pellentesque, vulputate diam vel, facilisis risus. Nulla mi felis, euismod ac est in, ultrices tempus nisl. Ut et commodo mi. Sed rutrum porttitor est posuere ullamcorper. Aliquam dapibus nibh id viverra malesuada. Suspendisse quis sem eu nibh varius gravida ut ac magna. Suspendisse massa nisi, malesuada a nisl et, iaculis auctor dolor. Fusce ultrices, mauris non placerat eleifend, nibh sapien sodales velit, sit amet viverra enim erat sed elit. Maecenas facilisis dui eu ullamcorper laoreet. Maecenas pharetra sem id vehicula scelerisque.</p><p>
    Ut a fringilla orci. Donec nec erat in leo posuere hendrerit. Cras posuere vehicula tellus, ac pharetra mauris sagittis ut. Curabitur at ante malesuada, sagittis dolor ut, laoreet erat. Curabitur eu justo eros. Aliquam ac ipsum quis nulla lacinia varius. Cras tempus aliquet erat at imperdiet. Integer sagittis tincidunt commodo. Fusce lacinia blandit leo vel bibendum. Pellentesque hendrerit nibh ac nunc porta, quis tempor odio aliquet. Nulla sed iaculis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sollicitudin, lacus vel lobortis luctus, elit magna lobortis turpis, id cursus magna nunc vel magna. Etiam sit amet condimentum nisl. Aenean in leo vehicula ante dapibus laoreet. Nunc in massa a leo sollicitudin facilisis non non orci.</p><p>
    Nunc lorem nisi, scelerisque quis arcu non, dapibus fermentum arcu. Cras nec facilisis neque. Fusce ultricies nunc nunc, interdum ultrices magna vestibulum in. Suspendisse sed sollicitudin urna. Etiam faucibus aliquet erat. Morbi vel nunc hendrerit arcu hendrerit ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempus luctus sapien vitae porta. Ut eget sapien ut ipsum suscipit porta. Mauris sed dui ac tellus elementum bibendum fringilla id ante. Sed ut felis non lorem venenatis feugiat. Duis cursus, enim sit amet volutpat elementum, diam turpis scelerisque massa, vitae pretium neque velit id arcu. Maecenas at enim id magna gravida bibendum. Vivamus sit amet enim dolor.
    Aenean sollicitudin massa id diam rutrum aliquam. Aenean eget tincidunt felis. Morbi condimentum arcu orci, at malesuada metus blandit quis. Praesent nec massa elit. Vivamus porttitor diam eu quam euismod mattis. Duis ut justo augue. Cras tempus urna quis mauris ornare dapibus. Maecenas quis nibh malesuada, lacinia risus mattis, tempor nibh. Suspendisse convallis ut lorem ut posuere. Integer nec enim mauris. Nunc eget faucibus dolor. Nam vitae hendrerit nisi. Phasellus pulvinar quam sed sapien tincidunt placerat. Maecenas id lacus eu lacus ornare tincidunt ut eu tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>
    Fusce vel libero vitae augue molestie luctus a vel arcu. Maecenas ut quam purus. Pellentesque vestibulum interdum dui, quis imperdiet lacus scelerisque vitae. Integer luctus erat ut feugiat sodales. Cras laoreet accumsan nisi, eu tincidunt eros euismod ac. Aliquam ut odio lacinia, porttitor velit eu, suscipit metus. Nullam varius sem quis enim blandit consectetur. Donec sit amet arcu est. Donec ac aliquet lectus. Duis volutpat, nunc sed iaculis imperdiet, dolor nulla sagittis nunc, vitae congue neque massa at purus. Praesent at ipsum tristique, dignissim est in, lacinia libero. Maecenas sollicitudin massa lobortis facilisis commodo. Donec non est arcu.</p>
  </article><article id="la">
    <h1>Los Angeles</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a urna lobortis, laoreet libero ut, vulputate risus. Aenean rhoncus, tellus nec cursus tempus, magna nisi pellentesque odio, mattis volutpat nunc mauris eget orci. Vivamus quis tellus pellentesque, vulputate diam vel, facilisis risus. Nulla mi felis, euismod ac est in, ultrices tempus nisl. Ut et commodo mi. Sed rutrum porttitor est posuere ullamcorper. Aliquam dapibus nibh id viverra malesuada. Suspendisse quis sem eu nibh varius gravida ut ac magna. Suspendisse massa nisi, malesuada a nisl et, iaculis auctor dolor. Fusce ultrices, mauris non placerat eleifend, nibh sapien sodales velit, sit amet viverra enim erat sed elit. Maecenas facilisis dui eu ullamcorper laoreet. Maecenas pharetra sem id vehicula scelerisque.</p><p>
    Ut a fringilla orci. Donec nec erat in leo posuere hendrerit. Cras posuere vehicula tellus, ac pharetra mauris sagittis ut. Curabitur at ante malesuada, sagittis dolor ut, laoreet erat. Curabitur eu justo eros. Aliquam ac ipsum quis nulla lacinia varius. Cras tempus aliquet erat at imperdiet. Integer sagittis tincidunt commodo. Fusce lacinia blandit leo vel bibendum. Pellentesque hendrerit nibh ac nunc porta, quis tempor odio aliquet. Nulla sed iaculis sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer sollicitudin, lacus vel lobortis luctus, elit magna lobortis turpis, id cursus magna nunc vel magna. Etiam sit amet condimentum nisl. Aenean in leo vehicula ante dapibus laoreet. Nunc in massa a leo sollicitudin facilisis non non orci.</p><p>
    Nunc lorem nisi, scelerisque quis arcu non, dapibus fermentum arcu. Cras nec facilisis neque. Fusce ultricies nunc nunc, interdum ultrices magna vestibulum in. Suspendisse sed sollicitudin urna. Etiam faucibus aliquet erat. Morbi vel nunc hendrerit arcu hendrerit ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nullam tempus luctus sapien vitae porta. Ut eget sapien ut ipsum suscipit porta. Mauris sed dui ac tellus elementum bibendum fringilla id ante. Sed ut felis non lorem venenatis feugiat. Duis cursus, enim sit amet volutpat elementum, diam turpis scelerisque massa, vitae pretium neque velit id arcu. Maecenas at enim id magna gravida bibendum. Vivamus sit amet enim dolor.
    Aenean sollicitudin massa id diam rutrum aliquam. Aenean eget tincidunt felis. Morbi condimentum arcu orci, at malesuada metus blandit quis. Praesent nec massa elit. Vivamus porttitor diam eu quam euismod mattis. Duis ut justo augue. Cras tempus urna quis mauris ornare dapibus. Maecenas quis nibh malesuada, lacinia risus mattis, tempor nibh. Suspendisse convallis ut lorem ut posuere. Integer nec enim mauris. Nunc eget faucibus dolor. Nam vitae hendrerit nisi. Phasellus pulvinar quam sed sapien tincidunt placerat. Maecenas id lacus eu lacus ornare tincidunt ut eu tellus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p><p>
    Fusce vel libero vitae augue molestie luctus a vel arcu. Maecenas ut quam purus. Pellentesque vestibulum interdum dui, quis imperdiet lacus scelerisque vitae. Integer luctus erat ut feugiat sodales. Cras laoreet accumsan nisi, eu tincidunt eros euismod ac. Aliquam ut odio lacinia, porttitor velit eu, suscipit metus. Nullam varius sem quis enim blandit consectetur. Donec sit amet arcu est. Donec ac aliquet lectus. Duis volutpat, nunc sed iaculis imperdiet, dolor nulla sagittis nunc, vitae congue neque massa at purus. Praesent at ipsum tristique, dignissim est in, lacinia libero. Maecenas sollicitudin massa lobortis facilisis commodo. Donec non est arcu.</p>
  </article>

  
  
</div>

<?php mysqli_close($Connection);?> 

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>
</html>