<div class="member-human">
    <img class="member-photo" src="images/<?php echo $name;?>.png" />
    <div class="member-human-contents">
        <?php if(isset($_SESSION['username'])&&isset($_SESSION['password'])){?>
        <?php if($member['rank'] != "Prof") {?>
        <form action="./assets/php/member-del.php" method="POST">
            <button class="fas fa-minus btn fa-pull-right" name="name" <?php echo 'value="'.$name.'"';?>></button>
        </form>
        <?php } ?>
        <form action="./member-edit.php" method="POST">
            <button class="fas fa-edit btn fa-pull-right" name="name" <?php echo 'value="'.$name.'"';?>></button>
        </form>
        <?php
            }
            ?>
        <div id="member-info">
            <ul>
                <li class="member-name"> <?php echo $name;?> </li>
                <li><?php echo $email;?></li>
                <li><a href="<?php echo $web;?>" target="_blank"> <?php echo $web;?></a></li>
                <li><?php echo $comment;?></li>
            </ul>
        </div>
        <div id="member-interest">
            <ul>
                <li class="member-career">Career</li>
                <?php
                        
                        $query = "select * from careers where name = '".$name."'";
                        $careers = $db->query($query);
                        foreach($careers as $career){
                            echo '<li>'.$career['career'].'</li>';
                        }
                    ?>
            </ul>
        </div> <!-- member-interest -->

    </div>

</div> <!-- member-human -->