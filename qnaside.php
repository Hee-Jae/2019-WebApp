<!DOCTYPE html>

<html>
<head>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="assets/css/qna.css">
</head>
<body>
    <div id="lecture_slide">
    </div>
    <div id="qna_page">
        <div id="qna_question_button">
            <input type="checkbox" class="qna_checkbox" id="qna_post_question" />
            <label for="qna_post_question" class="qna_title">질문하기</label>
            <div class="qna_post_button">
                <div class="qna_input_box">
                    <form action='post_process.php' method='post'>
                        <p>이름 : <input type='text' name='name'></p>
                        <p>비밀번호 : <input type='password' name='password'></p>
                        <p>카테고리 : <select name="lecture_id"> </p>
                            <option value="00"> Introduction </option>
                            <option value="01"> The Internet & World Wide Web </option>
                            <option value="02"> Basic HTML </option>
                            <option value="03"> CSS for Styling </option>
                            <option value="04"> Page Layout </option>
                            <option value="05"> PHP </option>
                            <option value="06"> Forms </option>
                            <option value="07"> Relation Database & SQL </option>
                            <option value="08"> JavaScript </option>
                            <option value="09"> Document Object Model </option>
                            <option value="10"> Prototype </option>
                            <option value="11"> Events </option>
                            <option value="12"> Ajax, XML, JSON </option>
                            <option value="13"> Web Services </option>
                            <option value="14"> Scriptaculous </option>
                            <option value="d00"> Introduction - Week 3 </option>
                            <option value="d01"> About Me (HTML) - Week 4 </option>
                            <option value="d02"> CSS - Week 5 </option>
                            <option value="d03"> CSS Design & Layout - Week 6 </option>
                            <option value="d04"> Movie Review(HTML, CSS, Layout) - Week 7 </option>
                            <option value="d05"> Basic PHP - Week 9 </option>
                            <option value="d06"> Forms - Week 10 </option>
                            <option value="d07"> SQL - Week 11 </option>
                            <option value="d08"> JavaScript - Week 12 </option>
                            <option value="d09"> Maze (DOM, Prototype, Event) - Week 13 </option>
                            <option value="d10"> Ajax & XML & JSON - Week 14 </option>
                        </select>
                        <p>질문 : <p><textarea name='content' cols='35' rows='5'></textarea></p> </p>
                        <p><input type='submit' value='작성'></p>
                    </form>
                </div>
            </div> <!-- post_button -->
        </div> <!-- question_button -->

        <?php
        $db = new PDO("mysql:dbname=webapp; host=localhost", "root", "root");
        $rows = $db -> query("SELECT * FROM Question");
        $rowr = $rows->fetchAll(\PDO::FETCH_ASSOC);
        foreach(array_reverse($rowr) as $row){ ?>
            <div class="qna_contents">
                <p id="qna_name">
                    <?=$row["name"] ?>
                    <?=$row["time"] ?>
                </p>
                <p> <?=$row["content"] ?> </p>
                <div class="qna_query_button">
                    <p>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_update_question<?=$row["id"]?>" />
                    <label for="qna_update_question<?=$row["id"]?>" class="qna_title">수정</label>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_delete_question<?=$row["id"]?>" />
                    <label for="qna_delete_question<?=$row["id"]?>" class="qna_title">삭제</label>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_reply_question<?=$row["id"]?>" />
                    <label for="qna_reply_question<?=$row["id"]?>" class="qna_title">댓글</label>
                    </p>
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
                                <p> 답변 : <p><textarea name='content' cols='35' rows='5'></textarea></p> </p>
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
                        <p>
                        <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_update_question<?=$ans["id"]?>" />
                        <label for="qna_rep_update_question<?=$ans["id"]?>" class="qna_rep_title">수정</label>
                        <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_delete_question<?=$ans["id"]?>" />
                        <label for="qna_rep_delete_question<?=$ans["id"]?>" class="qna_rep_title">삭제</label>
                        </p>
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