<!DOCTYPE HTML>

<html lang="ko">
    <head>
        <?php include('./assets/php/head.php'); ?>
        <?php $currentpage = 'SLIDES'; ?>
        <link rel="stylesheet" href="assets/css/qna.css">
    </head>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <div id="all_contents">
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
                </div> <!-- lctopbox -->
                <div id="expansion">
                <a target="blank" id='image_link' href="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" ><img src="./images/expansion.png"width = 15px/></a>
                </div> <!-- expansoin -->
            </div> <!-- lctop -->
                <iframe name="lecture_frame" src="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" width=100% height=700px scrolling=yes>LectureNote</iframe>
                <hr>
        </div> <!-- article_yc -->
            <?php
                $url2 = "https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/06-forms.html#slide48";
                $url_parse = parse_url($url2);
                $lecture_id = strrev($url_parse["path"]);
                $lecture_id = substr($lecture_id, strpos($lecture_id, '-'),2);
                $lecture_id = (int)strrev($lecture_id);
                $slide = (int)substr($url_parse["fragment"], 5);
            ?>
            <div id="qna_page">
                <div id="qna_question_button">
                    <input type="checkbox" class="qna_checkbox" id="qna_post_question" />
                    <label for="qna_post_question" class="qna_title">질문하기</label>
                    <div class="qna_post_button">
                        <div class="qna_input_box">
                            <form action='post_process.php' method='post'>
                                <p>이름 : <input type='text' name='name'></p>
                                <p>비밀번호 : <input type='password' name='password'></p>
                                <p><textarea name='content' cols='35' rows='5'></textarea></p>
                                <p> <input type='hidden' name='lecture_id' value='<?=$lecture_id?>'> </p>
                                <p> <input type='hidden' name='slide' value='<?=$slide?>'> </p>
                                <p><input type='submit' value='작성'></p>
                            </form>
                        </div>
                    </div> <!-- post_button -->
                </div> <!-- question_button -->

                <?php
                require("assets/php/password.php");
                $db = new PDO("mysql:dbname=webapp; host=localhost", "root", $your_password);
                $rows = $db -> query("SELECT * FROM Question");
                foreach($rows as $row){ ?>
                    <div class="qna_contents">
                        <p id="qna_name">
                            <?=$row["name"] ?>
                            <?=$row["time"] ?>
                        </p>
                        <p> <?=$row["content"] ?> </p>
                        <div class="qna_query_button">
                            <input type="radio" class="qna_checkbox" name="button" id="qna_update_question<?=$row["id"]?>" />
                            <label for="qna_update_question<?=$row["id"]?>" class="qna_title">수정</label>
                            <input type="radio" class="qna_checkbox" name="button" id="qna_delete_question<?=$row["id"]?>" />
                            <label for="qna_delete_question<?=$row["id"]?>" class="qna_title">삭제</label>
                            <input type="radio" class="qna_checkbox" name="button" id="qna_reply_question<?=$row["id"]?>" />
                            <label for="qna_reply_question<?=$row["id"]?>" class="qna_title">댓글</label>
                        
                            <div class="qna_update_button">
                                <div class="qna_input_box">
                                    <form action="update_process.php" method="POST">
                                        <p> 비밀번호 : <input type="password" name="password"> </p>
                                        <p><textarea name='content' cols='35' rows='5'><?=$row["content"]?></textarea></p>
                                        <input type="hidden" name="id" value=<?=$row["id"]?> >
                                        <p><input type="submit" value="수정"></p>
                                    </form>
                                </div>
                            </div>

                            <div class='qna_delete_button'>
                                <div class="qna_input_box">
                                    <form action='delete_process.php' method='POST'>
                                        <p> 비밀번호 : <input type='password' name='password'> </p>
                                        <input type='hidden' name='id' value=<?=$row["id"]?> >
                                        <p><input type='submit' value='삭제'></p>
                                    </form>
                                </div>
                            </div>

                            <div class='qna_reply_button'>
                                <div class="qna_input_box">
                                    <form action="reply_process.php" method="POST">
                                        <p>이름 : <input type='text' name='name'></p>
                                        <p>비밀번호 : <input type='password' name='password'></p>
                                        <p><textarea name='content' cols='35' rows='5'></textarea></p>
                                        <p> <input type='hidden' name='id' value='<?=$row["id"]?>'> </p>
                                        <p><input type='submit' value='작성'></p>
                                    </form>
                                </div>
                            </div> <!-- reply_button -->
                        </div> <!-- query_button -->
                    </div> <!-- contents -->
                <?php
                    //댓글
                    $q_id = $db -> quote($row['id']);
                    $answer = $db -> query("SELECT * FROM Answer WHERE q_id = $q_id");
                    foreach($answer as $ans){ ?>
                        <div class="qna_ans_contents">
                            <p id="qna_name">
                                <?=$ans["name"] ?>
                                <?=$ans["time"] ?>
                            </p>
                            <p> <?=$ans["content"] ?> </p>
                            <div class="qna_query_button">
                                <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_update_question<?=$ans["id"]?>" />
                                <label for="qna_rep_update_question<?=$ans["id"]?>" class="qna_rep_title">수정</label>
                                <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_delete_question<?=$ans["id"]?>" />
                                <label for="qna_rep_delete_question<?=$ans["id"]?>" class="qna_rep_title">삭제</label>

                                <div class="qna_rep_update_button">
                                    <div class="qna_input_box">
                                        <form action="rep_update_process.php" method="POST">
                                            <p> 비밀번호 : <input type="password" name="password"> </p>
                                            <p><textarea name='content' cols='35' rows='5'><?=$ans["content"]?></textarea></p>
                                            <input type="hidden" name="id" value=<?=$ans["id"]?> >
                                            <p><input type="submit" value="수정"></p>
                                        </form>
                                    </div>
                                </div>

                                <div class='qna_rep_delete_button'>
                                    <div class="qna_input_box">
                                        <form action='rep_delete_process.php' method='POST'>
                                            <p> 비밀번호 : <input type='password' name='password'> </p>
                                            <input type='hidden' name='id' value=<?=$ans["id"]?> >
                                            <p><input type='submit' value='삭제'></p>
                                        </form>
                                    </div>
                                </div> <!-- delete_button -->
                            </div> <!-- query_button -->
                        </div> <!-- ans_contents -->
                    <?php
                    }
                }
                ?>
            </div> <!-- qna_page -->
        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>

    <script>
        function strrev(str){
            var splitStr = str.split("");
            var revArray = splitStr.reverse();
            var joinArray = revArray.join("");
            return joinArray;
        }
        function Onchange(){
            var val = document.getElementById("selectbox");
            var res = val.options[val.selectedIndex].value;
            var lecture_id = strrev(res);
            lecture_id = lecture_id.substr(lecture_id.indexOf('-')+1,2);
            lecture_id = strrev(lecture_id);
            $('#image_link').attr("href", res);
            window.open(res,'lecture_frame');
        }
    </script>
</html>