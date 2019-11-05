<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'SLIDE_TEST'; ?>
    <body>
        <!-- Navbar -->
        <!-- Article -->
        <div class="article">
            
            <h1><span class="h1-border">강의노트(같은 것)</span></h1>
            <div id="slide_content">
                <h1>Viewing PHP output</h1>
                <div id="slide_qna">

                    <?php
                    $question_number=4;
                    $who_asked=array('스캇 욱! 우욱.. 속이안좋아..','김 태형','롯데리아 케찹도둑','내이름은 유난');
                    $what_asked=array('제가 한국어 울렁증이 있는데.. 멀미약 있나요?','김유신! 대답해!','쇼미더머니가 있다면 이친구는 쇼미더어머니입니다 저희아빠는 졸지에 롯데리아에서 케찹을 훔치다 징역살이 40분을 처분받았네요..','떨고있죠');
                    $when_asked=array('오후 5:36 오늘','오전 1:38 어제','오후 5:36 백이십일전','시간 날짜');

                    $is_there_ans=array(FALSE,TRUE,FALSE,TRUE);
                    $who_answered=array('','김유신','','내이름은 가난');
                    $what_answered=array('','','','돈이 없죠');
                    $when_answered=array('','오후 5:36 오늘','','시간 날짜');
                    for($i=0;$i<$question_number;$i++){ ?>
                        <div class="question">
                            <div class="info">
                                <?php
                                if($is_there_ans[$i]){ ?>
                                    <div class="solved">
                                        해결
                                    </div>
                                <?php }else{ ?>
                                    <div class="unsolved">
                                        미해결
                                    </div>
                                <?php  } ?>    
                                <img src="https://png.pngtree.com/element_our/png_detail/20181026/avatar-vector-icon-man-vector-symbol-avatar-icon-png_219876.jpg" width="50" />
                                <p class="who"><?=$who_asked[$i]?></p>
                                <p class="when"><?=$when_asked[$i]?></p>
                            </div>
                            <div class="q_or_a">
                                <?=$what_asked[$i]?>
                            </div>
                        </div>
                        <?php
                        if($is_there_ans[$i]){ ?>
                            <div class="ans">
                                <div class="info">
                                    <img src="https://png.pngtree.com/element_our/png_detail/20181026/avatar-vector-icon-man-vector-symbol-avatar-icon-png_219876.jpg" width="50" />
                                    <p class="who"><?=$who_answered[$i]?></p>
                                    <p class="when"><?=$when_answered[$i]?></p>
                                </div>
                                <div class="q_or_a">
                                    <?=$what_answered[$i]?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>

                </div>
                <div id="lec_slide">
                    재밌는 상상 한 번 해보자고.
                    강의노트가 이렇게 생겼다고 생각할거야.<br/>
                    이 강의노트보단 실제 강의노트가 더 넓겠지?
                    <br/>
                    <img src="https://s3.filecdn.xyz/data/editor/1904/f9ea9aa1bf9b59038fe2cbff5da5bc2c.jpg">
                    <ul>
                        <li>you can't view your <code>.php</code> page on your local hard drive; you'll either see nothing or see the PHP source code</li>
                        <li>if you upload the file to a PHP-enabled web server, requesting the <code>.php</code> file will run the program and send you back its output</li>
                    </ul>
                    대충 강의내용 같은 것..
                </div>
            </div>
            
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>