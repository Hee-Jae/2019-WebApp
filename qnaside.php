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
            <label for="qna_post_question" class="btn qna_title">Press here to Question</label>
            <div class="qna_post_button">
                <div class="qna_input_box">
                    <form action='post_process.php' method='post'>
                        <p>Name : <input type='text' name='name'></p>
                        <p>Password : <input type='password' name='password'></p>
                        <p>Lecture : <select name="lecture_id"> </p>
                        <optgroup>
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
                        </optgroup>
                        <optgroup>
                            <option value="b00"> Introduction - Week 3 </option>
                            <option value="b01"> About Me (HTML) - Week 4 </option>
                            <option value="b02"> CSS - Week 5 </option>
                            <option value="b03"> CSS Design & Layout - Week 6 </option>
                            <option value="b04"> Movie Review(HTML, CSS, Layout) - Week 7 </option>
                            <option value="b05"> Basic PHP - Week 9 </option>
                            <option value="b06"> Forms - Week 10 </option>
                            <option value="b07"> SQL - Week 11 </option>
                            <option value="b08"> JavaScript - Week 12 </option>
                            <option value="b09"> Maze (DOM, Prototype, Event) - Week 13 </option>
                            <option value="b10"> Ajax & XML & JSON - Week 14 </option>
                        <optgroup>
                        </select>
                        <p>Q : <p><textarea name='content' cols='35' rows='5'></textarea></p> </p>
                        <p><input type='submit' value='Submit'></p>
                    </form>
                </div>
            </div> <!-- post_button -->
        </div> <!-- question_button -->

        <?php
        $db = new PDO("mysql:dbname=webapp; host=localhost", "root", "root");
        $rows = $db -> query("SELECT * FROM Question");
        $rowr = $rows->fetchAll(\PDO::FETCH_ASSOC);
        foreach(array_reverse($rowr) as $row){
            $category = "";
            if($row["lecture_id"] == "00") $category = "Introduction";
            else if($row["lecture_id"] == "01") $category = "The Internet & World Wide Web";
            else if($row["lecture_id"] == "02") $category = "Basic HTML";
            else if($row["lecture_id"] == "03") $category = "CSS for Styling";
            else if($row["lecture_id"] == "04") $category = "Page Layout";
            else if($row["lecture_id"] == "05") $category = "PHP";
            else if($row["lecture_id"] == "06") $category = "Forms";
            else if($row["lecture_id"] == "07") $category = "Relation Database & SQL";
            else if($row["lecture_id"] == "08") $category = "JavaScript";
            else if($row["lecture_id"] == "09") $category = "Document Object Model";
            else if($row["lecture_id"] == "10") $category = "Prototype";
            else if($row["lecture_id"] == "11") $category = "Events";
            else if($row["lecture_id"] == "12") $category = "Ajax, XML, JSON";
            else if($row["lecture_id"] == "13") $category = "Web Services";
            else if($row["lecture_id"] == "14") $category = "Scriptaculous";
            else if($row["lecture_id"] == "b00") $category = "Introduction(LAB)";
            else if($row["lecture_id"] == "b01") $category = "About Me (HTML)";
            else if($row["lecture_id"] == "b02") $category = "CSS(LAB)";
            else if($row["lecture_id"] == "b03") $category = "CSS Design & Layout(LAB)";
            else if($row["lecture_id"] == "b04") $category = "Movie Review(HTML, CSS, Layout)";
            else if($row["lecture_id"] == "b05") $category = "Basic PHP(LAB)";
            else if($row["lecture_id"] == "b06") $category = "Forms(LAB)";
            else if($row["lecture_id"] == "b07") $category = "SQL(LAB)";
            else if($row["lecture_id"] == "b08") $category = "JavaScript(LAB)";
            else if($row["lecture_id"] == "b09") $category = "Maze";
            else if($row["lecture_id"] == "b10") $category = "Ajax & XML & JSON(LAB)";
            ?>
            <div class="qna_contents">
                <p id="qna_name">
                    <?=$row["name"] ?>
                    
                    <?=$category?>
                    <?=$row["time"] ?>
                </p>
                <p id="qna_answer_content"> <?=$row["content"] ?> </p>
                <div class="qna_query_button">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_update_question<?=$row["id"]?>" />
                    <label for="qna_update_question<?=$row["id"]?>" class="btn qna_title qna-first-button fas fa-edit"></label>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_delete_question<?=$row["id"]?>" />
                    <label for="qna_delete_question<?=$row["id"]?>" class="btn fas fa-trash-alt qna_title"></label>
                    <input type="radio" class="qna_checkbox" name="button" id="qna_reply_question<?=$row["id"]?>" />
                    <label for="qna_reply_question<?=$row["id"]?>" class="btn fas fa-comment qna_title"></label>
                    
                    <div class="qna_update_button">
                        <div class="qna_input_box">
                            <form action="update_process.php" method="POST">
                                <p> Password : <input type="password" name="password"> </p>
                                <p><textarea name='content' cols='35' rows='5'><?=$row["content"]?></textarea></p>
                                <input type="hidden" name="id" value=<?=$row["id"]?> >
                                <p><input type="submit" value="Edit"></p>
                            </form>
                        </div>
                    </div>

                    <div class='qna_delete_button'>
                        <div class="qna_input_box">
                            <form action='delete_process.php' method='POST'>
                                <p> Password : <input type='password' name='password'> </p>
                                <input type='hidden' name='id' value=<?=$row["id"]?> >
                                <p><input type='submit' value='Delete'></p>
                            </form>
                        </div>
                    </div>

                    <div class='qna_reply_button'>
                        <div class="qna_input_box">
                            <form action="reply_process.php" method="POST">
                                <p>Name : <input type='text' name='name'></p>
                                <p>Password : <input type='password' name='password'></p>
                                <p>Answer : <p><textarea name='content' cols='35' rows='5'></textarea></p> </p>
                                <p> <input type='hidden' name='id' value='<?=$row["id"]?>'> </p>
                                <p><input type='submit' value='Submit'></p>
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
                    <p id="qna_answer_content"> <?=$ans["content"] ?> </p>
                    <div class="qna_query_button">
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_update_question<?=$ans["id"]?>" />
                        <label for="qna_rep_update_question<?=$ans["id"]?>" class="qna_rep_title btn fas fa-edit"></label>
                        <input type="radio" class="qna_rep_checkbox" name="button" id="qna_rep_delete_question<?=$ans["id"]?>" />
                        <label for="qna_rep_delete_question<?=$ans["id"]?>" class="qna_rep_title btn fas fa-trash-alt"></label>
                        <div class="qna_rep_update_button">
                            <div class="qna_input_box">
                                <form action="rep_update_process.php" method="POST">
                                    <p> Password : <input type="password" name="password"> </p>
                                    <p><textarea name='content' cols='35' rows='5'><?=$ans["content"]?></textarea></p>
                                    <input type="hidden" name="id" value=<?=$ans["id"]?> >
                                    <p><input type="submit" value="Edit"></p>
                                </form>
                            </div>
                        </div>

                        <div class='qna_rep_delete_button'>
                            <div class="qna_input_box">
                                <form action='rep_delete_process.php' method='POST'>
                                    <p> Password : <input type='password' name='password'> </p>
                                    <input type='hidden' name='id' value=<?=$ans["id"]?> >
                                    <p><input type='submit' value='Delete'></p>
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