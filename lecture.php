<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'SLIDES'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- article_yc -->
        <div id="left_banner_yc">
            <span class="banner_head">HOME</span>
            <ul>
                <li><a href="#">Course Objective</a></li>
                <li><a href="#">Lecturer</a></li>
                <li><a href="#">Teaching Assistants</a></li>
                <li><a href="#">Places&Dates</a></li>
            </ul>
            <hr id="banner_hr">
            <span class="banner_head">SLIDES</span>
        </div>
        <div class="article_yc">
        <div class="lctop">
            <div class="lctopbox">
                <select id="selectbox" onchange=Onchange()>
                    <optgroup label="LECTURE">
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" >Introduction</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/01-www.html" >The Internet & World Wide Web</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/02-html.html">Basic HTML</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/03-css.html">CSS for styling</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/04-layout.html">Page Layout</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/05-PHP.html">PHP</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/06-forms.html">Forms</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/07-sql.html">Relational Databases & SQL[DBs]</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/08-javascript.html">JavaScript</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/09-dom.html">Document Object Model(DOM)</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/10-prototype.html">Prototype</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/11-events.html">Events</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/12-ajaxXmlJson.html">Ajax, XML, JSON</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/13-webServices.html">Web Services</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/14-scriptaculous.html">Scriptaculous</option>
                    </optgroup>
                    <optgroup label="LAB">
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab0-introduction.html">Introduction - Week3</oprtion>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab1-aboutme(HTML).html">About Me(HTML) - Week4</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab2-aboutme(CSS).html">CSS - Week5</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab3-favorite.html">CSS Design & Layout - Week6</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab4-movieReview.html">Movie Review(HTML, CSS, Layout) - Week7</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab5-musicLibrary.html">Basic PHP - Week9</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab6-gradeStore.html">FORMS - Week10</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab7-SQL.html">SQL - Week11</option>
                        <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab8-pimpMyText.html">JavaScript - Week12</option>
                    </optgroup>
                </select>
            </div>
            <div id="expansion">
            <a target="blank" id='image_link' href="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" ><img src="./images/expansion.png"width = 15px/></a>
            </div>
        </div>
            <iframe name="lecture_frame" src="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" width=100% height=700px scrolling=yes>LectureNote</iframe>
            <hr>
            <textarea rows="50" cols="25"></textarea>
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>

    <script>
        function Onchange(){
            var val = document.getElementById("selectbox");
            var res = val.options[val.selectedIndex].value;
            $('#image_link').attr("href", res);
            window.open(res,'lecture_frame');
        }
        
    </script>
</html>
