<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'QNA'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- article_yc -->
        <div id="qna_banner">
            <span class="banner_title">Lecture</span>
            <ul>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=0">0</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=1">1</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=2">2</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=3">3</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=4">4</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=5">5</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=6">6</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=7">7</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=8">8</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=9">9</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=10">10</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=11">11</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=12">12</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=13">13</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=14">14</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?lectureid=15">15</a></li>
            </ul>
            <hr id="banner_hr">
            <span class="banner_title">Lab</span>
            <ul>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=0">0</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=1">1</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=2">2</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=3">3</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=4">4</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=5">5</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=6">6</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=7">7</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=8">8</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=9">9</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=10">10</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=11">11</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=12">12</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=13">13</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=14">14</a></li>
                <li><a href="http://localhost/base/2019-WebApp-master/qna-slide.php?labid=15">15</a></li>
            </ul>
        </div>
        <div class="article_yc">
            <div class="participate"> <!-- internatinal -->
                <h1><span class="h1-border">QNA</span></h1>
                <p>
                    <div class="qna-content-box">    
                        <div class="qna-question">
                            <img src="images/Q.png" class="Q" alt="Q.">
                            <p> 택배를 신청했는데 방문은 언제쯤 해 주시나요? </p>
                            <a onclick="showHide('qna-answer')" onfocus="this.blur()">
                                <img src="images/down.png" class="V">
                            </a>
                        </div>
                        <div id="qna-answer" style="display:none">
                            <p> CJ 대한통운은 전국 약 4,000개의 편의점과 취급점 계약이 되어 있어, 가까운 편의점으로 상품을 가져가시면 택배서비스를 이용하실 수 있습니다. 
                            <br/> ㅁ 택배 접수 편의점 : CU / GS25
                            <br/>
                            <br/> 내가 js 를 쓸 줄 몰라서 우선 구글링한 걸로 붙여놈 : class 가 아니라 id 사용, 그래서 여러 항목 들어오면 제대로 작동 안 할 거야 당황 ㄴ ㄴ
                            </p>
                        </div>
                    </div>
                </p>
            </div>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
