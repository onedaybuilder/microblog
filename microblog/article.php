<?php session_start();?>
<?php include_once 'includes/db.php';?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Fonts Lora and open sans -->
     <link rel="stylesheet" href="./css/style.css">
  <link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,500,600,700,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel= "stylesheet" href="css/fontawesome.min.css"/>
    <title>Micro blog Article</title>
</head>
<body>
    <header>
        <div class="brand">
          <h1></h1>
          <ul class="menu">
            <li><a href="index.php">home</a></li>
            <li><a href="about.php">contact</a></li>
          </ul>
        </div>
  
      </header>
  
      <?php 
      
      $id = mysqli_real_escape_string($conn, $_GET['id']);
      $sql = "SELECT * FROM blogposts where id = '$id'";

      
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result)){

        echo "
        <div class='article'>
        <h1 id='article-title'>".$row['subject']."</h1>
        <p>".$row['content']." </p>
        <ul>
          <li><a href=''><i class='fa fa-twitter'></i></a></li>
          <li><a href=''><i class='fa fa-behance'></i></a></li>
          <li><a href=''><i class='fa fa-linkedin'></i></a></li>
        </ul>
    </div>
        ";
      }
    }
      ?>   
   <!-- <div class="blog-pic">
        <img src="./img/nicola.jpg" alt="">
        <p id="written-by">Written by: Nikola Jokic</p>
    </div>-->
    <!--<div class="article">
        <h1 id="article-title">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, aliquid!
        </h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum, odio incidunt. Dolorem, nulla? Tenetur cumque incidunt possimus quibusdam ut eius! Dolorum quae animi adipisci neque autem ea perspiciatis incidunt saepe laborum fugiat architecto eum laboriosam eos quis nobis dolores pariatur nam eius debitis delectus veniam, facere similique libero. Tempora delectus ipsa iusto, at eius quam. Delectus similique deleniti omnis a ipsa praesentium incidunt ab corrupti. Commodi quae perspiciatis vero consectetur repudiandae repellat consequatur nemo facilis, omnis natus explicabo ab impedit labore laborum illum mollitia ipsa non expedita quod! Reprehenderit quidem consectetur nobis hic debitis. Alias facere animi impedit exercitationem vel.
        </p>
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. In delectus nulla, exercitationem, distinctio, sequi deleniti voluptatum officia est voluptates vel suscipit enim beatae dicta numquam alias iusto adipisci animi. Id dolorum ex error iusto quas fugit ea aliquam! Animi, quis.
        </p>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum blanditiis quos libero nesciunt id veniam. Error ratione ut repellendus consequatur fuga, eligendi amet soluta voluptas illo? Accusantium ad quae, culpa et ipsum quas omnis nobis recusandae sint ipsam alias adipisci illo, vero eligendi vel explicabo saepe eos corrupti nam quidem asperiores. Alias quae est accusantium? Architecto possimus earum similique minima magni consequatur, quos ullam, nihil voluptatibus itaque aliquid facere exercitationem labore voluptate iusto, eveniet beatae aliquam repellendus magnam vero nostrum? Illum fugit, a eum esse aperiam totam molestias, laboriosam ducimus, excepturi soluta consequuntur nisi fugiat et hic cupiditate sit suscipit error quo tempore placeat beatae voluptatum? Quod deleniti ad fugiat, voluptatem placeat cum quisquam deserunt ea vitae? Placeat, tempora numquam doloribus recusandae perferendis quo fuga sit enim molestiae aliquid consequuntur optio iure! Iste voluptatibus quaerat fugit? Id odio nam quisquam autem iure minima, soluta atque corporis, ducimus temporibus nesciunt quis.
        </p>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro eos optio cumque perspiciatis, odio, officia rerum tempore fuga omnis ipsum, molestias necessitatibus magnam distinctio corrupti delectus iure totam quisquam doloribus. Excepturi, magnam tempora cumque, iusto autem vitae ipsam omnis iste deserunt dolor ab, veritatis velit asperiores at praesentium. Vitae, molestias.
        </p>
    </div>-->
    <div class="email">
        <p>Never miss a post</p>
        <form class="" action="index.html" method="post">
          <input type="text" name="" placeholder="Your email">
          <button type="submit" id="bbtn">send</button>
        </form>
      </div>
    
      <footer>
        &copy microblog 2019
      </footer>
</body>
</html>