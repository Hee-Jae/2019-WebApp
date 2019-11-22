<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="design/qna.css">
</head>
<body>
    <div id="lecture_slide">
    </div>
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
                        질문 : <p><textarea name='content' cols='35' rows='5'></textarea></p>
                        <p> <input type='hidden' name='lecture_id' value='<?=$lecture_id?>'> </p>
                        <p> <input type='hidden' name='slide' value='<?=$slide?>'> </p>
                        <p><input type='submit' value='작성'></p>
                    </form>
                </div>
            </div> <!-- post_button -->
        </div> <!-- question_button -->

        <?php
        require("lib/password.php");
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
                                답변 : <p><textarea name='content' cols='35' rows='5'></textarea></p>
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
</body>
</html>