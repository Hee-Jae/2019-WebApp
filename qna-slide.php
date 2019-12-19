<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'QNA'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- article_yc -->
       
        <div id="qna_article">
            <div class="participate"> <!-- internatinal -->
                <h1><span class="h1-border">QNA</span></h1>
                <p>
                    <div class="qna-content-box">    
                        <div class="qna-question">
                            <!-- <img src="images/Q.png" class="Q" alt="Q."> -->
                            <!-- <a onclick="showHide('qna-answer')" onfocus="this.blur()">
                                <img src="images/down.png" class="V">
                            </a> -->
                            <?php
                            require("qnaside.php");
                            ?>
                        </div>
                        
                    </div>
                </p>
            </div>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
