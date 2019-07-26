
<?php

        session_start();

 ?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Chat Takearound</title>


    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style6.css">





  </head>

  <body>

      <div class="container clearfix">
    <div class="people-list" id="people-list">
      <a href="profile_2.php">
        <div class="search">
        <li class="clearfix">
          <img src="../images/profiles/<?php echo $_SESSION['picture']; ?>" alt="<?php echo $_SESSION['username']; ?>" style="width:70px;height:70px;border-radius:100px;"  />
          <div class="about">
            <div class="name"><?php echo $_SESSION['username']; ?></div>
            <div class="status">
              <i class="fa fa-circle online"></i> online
            </div>
          </div>
        </li>

        <hr>
      </div></a>
        <!-- <ul class='list'>*\
      <?php
          /*  $id = $_GET['id'];
          include 'config.php';
          $user_id = $_SESSION['user_id'];
          $id1     = "msg_from = '$user_id'";
          $id2     = "msg_to  = '$user_id'";
          $quary   = "SELECT * FROM `message` WHERE $id1 OR $id2 ";
          $get     = mysqli_query($LINK,$quary);
          while ($row = mysqli_fetch_assoc($get)) {
              $previous = '';

         $current = $row['msg_from'];
         $current2 = $row['msg_to'];
         if ($previous == $current ||$current2 == $previous ) {
           echo "


             <li class='clearfix'>
               <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/195612/chat_avatar_01.jpg' alt='avatar' />
               <div class='about'>
                 <div class='name'>Vincent Porter</div>
                 <div class='status'>
                   <i class='fa fa-circle online'></i> online
                 </div>
               </div>
             </li>



           ";
         }
         $previous = $current;
         $previous = $current2;
         }




*/
       ?>
     </ul>-->
</div>
<?php
  $name = $_GET['name'];



 ?>

    <div class="chat">
      <div class="chat-header clearfix">
        <img src="../images/profiles/ow.jpg" alt="<?php echo $_SESSION['username']; ?>" style="width:70px;height:70px;border-radius:100px;"  />

        <div class="chat-about">
          <div class="chat-with">You Chat with <?php echo $name; ?></div>
          <div class="chat-num-messages">already are in messages</div>
        </div>
        <i class="fa fa-star"></i>
      </div> <!-- end chat-header -->
      <div class="chat-history">
        <ul>
      <?php
              $id = $_GET['id'];
              $uname      = $_GET['name'];
              include 'config.php';
              $user_id = $_SESSION['user_id'];
              $id1     = "msg_from = '$user_id'";
              $id2     = "msg_to  = '$user_id'";
              $quary   = "SELECT * FROM `message`";
              $get     = mysqli_query($LINK,$quary);
              while ($data =  mysqli_fetch_array($get)) {
                if ($data[1] == $user_id || $data[1] == $id) {
                  if ($data[2] == $user_id ||$data[2] == $id) {
                    if ($data[1]== $user_id) {
                      # code...
                      echo "<li class='clearfix'>
                        <div class='message-data align-right'>
                          <span class='message-data-time' >$data[4]</span> &nbsp; &nbsp;
                          <span class='message-data-name' >you</span> <i class='fa fa-circle me'></i>

                        </div>
                        <div class='message other-message float-right'>
                          $data[3]
                        </div>
                      </li>";
                    }
                      if ($data[2]== $user_id) {

echo "
<li>
  <div class='message-data'>
    <span class='message-data-name'><i class='fa fa-circle online'></i> $uname </span>
    <span class='message-data-time'>$data[4]</span>
  </div>
  <div class='message my-message'>
  $data[3]
  </div>
</li>";
}

}
}
}


       ?>







      </div> <!-- end chat-history -->

      <div class="chat-message clearfix">
        <form  action="chat.php?id=<?php echo $id ;?>&  name=<?php echo $uname;?>" method="post">


        <textarea name="message-to-send" id="message-to-send" placeholder ="Type your message" rows="1"></textarea>

        <i class="fa fa-file-o"></i> &nbsp;&nbsp;&nbsp;
        <i class="fa fa-file-image-o"></i>

        <button type="submit" name="send">Send</button>
  </form>
      </div> <!-- end chat-message -->

    </div> <!-- end chat -->

  </div> <!-- end container -->
<?php
$id = $_GET['id'];
$user_id = $_SESSION['user_id'];
if (isset($_POST['send'])) {
  # code...
          $message = $_POST['message-to-send'];

           $insert  = "INSERT INTO `message` VALUES(NULL, '$user_id' , '$id','$message',NOW())";
           mysqli_query($LINK,$insert);
           mysqli_close($LINK);


}
 ?>


  </body>
</html>
