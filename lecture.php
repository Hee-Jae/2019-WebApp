<!DOCTYPE HTML>

<html lang="ko">

<head>
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'COURSES'; ?>
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
                    <select id="selectbox">
                        <optgroup label="LECTURE">
                            <option
                                value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html">
                                Introduction</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/01-www.html">The
                                Internet & World Wide Web</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/02-html.html">Basic
                                HTML</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/03-css.html">CSS for
                                styling</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/04-layout.html">Page
                                Layout</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/05-PHP.html">PHP
                            </option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/06-forms.html">Forms
                            </option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/07-sql.html">
                                Relational Databases & SQL[DBs]</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/08-javascript.html">
                                JavaScript</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/09-dom.html">Document
                                Object Model(DOM)</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/10-prototype.html">
                                Prototype</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/11-events.html">
                                Events</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/12-ajaxXmlJson.html">
                                Ajax, XML, JSON</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/13-webServices.html">
                                Web Services</option>
                            <option
                                value="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/14-scriptaculous.html">
                                Scriptaculous</option>
                        </optgroup>
                        <optgroup label="LAB">
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab0-introduction.html">
                                Introduction - Week3</oprtion>
                            <option
                                value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab1-aboutme(HTML).html">
                                About Me(HTML) - Week4</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab2-aboutme(CSS).html">
                                CSS - Week5</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab3-favorite.html">CSS
                                Design & Layout - Week6</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab4-movieReview.html">
                                Movie Review(HTML, CSS, Layout) - Week7</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab5-musicLibrary.html">
                                Basic PHP - Week9</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab6-gradeStore.html">
                                FORMS - Week10</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab7-SQL.html">SQL -
                                Week11</option>
                            <option value="https://selab.hanyang.ac.kr/courses/cse326/2019/labs/lab8-pimpMyText.html">
                                JavaScript - Week12</option>
                        </optgroup>
                    </select>
                </div> <!-- lctopbox -->
                <div id="expansion">
                    <a target="blank" class="fas fa-compress" id='image_link'
                        href="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html"></a>
                </div> <!-- expansoin -->
                <div class="shortt">
                    <a class="btn fas fa-question" onclick="showHide('qna-answer')" onfocus="this.blur()"></a>
                    <div id="qna-answer" style="display: none">
                        <div id="slide_qna">
                        </div>
                    </div>
                </div>

            </div> <!-- lctop -->
            <iframe id="lecture_frame_id" name="lecture_frame"
                src="https://selab.hanyang.ac.kr/courses/cse326/2019/lecture/00-introduction.html" width=100%
                height=700px scrolling=yes>LectureNote</iframe>
            <hr>
        </div> <!-- article_yc -->
    </div>
    <!-- Footer -->
    <?php include('assets/php/footer.php'); ?>
</body>

<script>
    document.observe("dom:loaded", function () {
        $$('#selectbox')[0].onchange = Onchange;
        Onchange();
    });

    function strrev(str) {
        var splitStr = str.split("");
        var revArray = splitStr.reverse();
        var joinArray = revArray.join("");
        return joinArray;
    }

    function Onchange(ajax) {
        // alert(ajax.responseText);
        var val = $$("#selectbox")[0];
        var res = val.value;
        var lecture_id = strrev(res);
        lecture_id = lecture_id.substr(lecture_id.indexOf('-') + 1, 2);
        lecture_id = strrev(lecture_id);
        $$('#image_link')[0].href = res;
        window.open(res, 'lecture_frame');
        new Ajax.Request("get_qna.php", {
            method: "get",
            parameters: {
                "lecture_id": lecture_id
            },
            onSuccess: get_qna,
            onFailure: ajaxFailed,
            onException: ajaxFailed
        });
    }
    function Onadd() {
        var val = $$("#selectbox")[0];
        var res = val.value;
        var lecture_id = strrev(res);
        lecture_id = lecture_id.substr(lecture_id.indexOf('-') + 1, 2);
        lecture_id = strrev(lecture_id);
        new Ajax.Request("get_qna.php", {
            method: "get",
            parameters: {
                "lecture_id": lecture_id
            },
            onSuccess: get_qna,
            onFailure: ajaxFailed,
            onException: ajaxFailed
        });
    }

    function get_qna(ajax) {
        var val = $$("#selectbox")[0];
        var res = val.value;
        var lecture_id = strrev(res);
        lecture_id = lecture_id.substr(lecture_id.indexOf('-') + 1, 2);
        lecture_id = strrev(lecture_id);
        var datas = JSON.parse(ajax.responseText);
        var data = datas[0];
        var answers = datas[1];
        $$('#slide_qna')[0].innerHTML = '';
        $$('#qna-answer')[0].innerHTML = '\
                                    <div class="q_input">\
                                    <input type="text" size="6" placeholder="닉네임" id="q_id"/>\
                                    <input type="password" size="6" placeholder="비밀번호" id="q_pw"/>\
                                    <input type="text" size="40" maxlength="1000" placeholder="댓글" id="q_content"/>\
                                    <input type="hidden" id="l_id" value="' + lecture_id + '"\
                                </div>\
                                <input type="button" onclick="addq()" value="제출" /><br>\
                                <div id="slide_qna"></div>';
        for (i = 0; i < data.length; i++) {
            var question = $(document.createElement('div'));
            question.addClassName("question");
            var info = $(document.createElement('div'));
            info.addClassName('info');
            var img = $(document.createElement('img'));
            img.src =
                "https://png.pngtree.com/element_our/png_detail/20181026/avatar-vector-icon-man-vector-symbol-avatar-icon-png_219876.jpg";
            img.width = 50;
            var who = $(document.createElement('p'));
            var a = $(document.createElement('a'));
            var showhide = 'as_id' + data[i]['id'];
            a.href = "javascript:Display('" + showhide + "')";
            a.addClassName('btn fas fa-edit')
            who.addClassName("who");
            who.innerHTML = data[i]['name'] + '<span class="right-align" onclick="q_del(' + data[i]['id'] + ',' + data[
                i]['password'] + ')"><a class="btn fas fa-minus"></a></span>';
            who.appendChild(a);
            var when = $(document.createElement('p'));
            when.addClassName("when");
            when.innerHTML = data[i]['time'];
            info.appendChild(img);
            info.appendChild(who);
            info.appendChild(when);
            question.appendChild(info);
            var qa = $(document.createElement('div'));
            qa.innerHTML = data[i]['content'];
            qa.addClassName("q_or_a");
            question.appendChild(qa);
            q_input = $(document.createElement('div'));
            q_input.addClassName('q_input');
            q_input.id = 'as_id' + data[i]['id'];
            q_input.style.display = 'none';
            q_input.innerHTML = '<input type="text" size="6" placeholder="닉네임"/>'
            q_input.innerHTML += '<input type="password" size="6" placeholder="비밀번호"/>';
            q_input.innerHTML += '<input type="text" size="40" maxlength="1000" placeholder="답글"/>';
            q_input.innerHTML += '<input type="button" onclick="adda(' + data[i]['id'] + ')" value="제출" />'
            question.appendChild(q_input);
            $$('#slide_qna')[0].appendChild(question);


            // $$('#slide_qna')[0].appendChild(a);
            for (j = 0; j < answers.length; j++) {
                if (answers[j]['q_id'] == data[i]['id']) {
                    var ans = $(document.createElement('div'));
                    ans.addClassName('ans');
                    var info = $(document.createElement('div'));
                    info.addClassName('info');
                    var img = $(document.createElement('img'));
                    img.src =
                        "https://png.pngtree.com/element_our/png_detail/20181026/avatar-vector-icon-man-vector-symbol-avatar-icon-png_219876.jpg";
                    img.width = 50;
                    var who = $(document.createElement('p'));
                    who.addClassName("who");
                    who.innerHTML = answers[j]['name'] + '<span class="right-align" onclick="a_del(' + answers[j][
                        'id'] + ',' + answers[j]['password'] + ')"><a class="btn fas fa-minus"></a></span>';
                    var when = $(document.createElement('p'));
                    when.addClassName("when");
                    when.innerHTML = answers[j]['time'];
                    info.appendChild(img);
                    info.appendChild(who);
                    info.appendChild(when);
                    ans.appendChild(info);
                    var qa = $(document.createElement('div'));
                    qa.innerHTML = answers[j]['content'];
                    qa.addClassName("q_or_a");
                    ans.appendChild(qa);
                    $$('#slide_qna')[0].appendChild(ans);
                }
            }
        }

    }

    function Display(id) {
        id = '#' + id;
        if ($$(id)[0].style.display == 'block') {
            $$(id)[0].style.display = 'none';
        } else {
            $$(id)[0].style.display = 'block';
        }
    }

    function a_del(id, pw) {
        var result = prompt("비밀번호를 입력 하시오.", '');
        if (result == pw) {
            new Ajax.Request("qna-minus.php", {
                method: "get",
                parameters: {
                    "a_id": id
                },
                onSuccess: Onadd,
                onFailure: ajaxFailed,
                onException: ajaxFailed
            });
        } else {
            alert("비밀번호가 틀렸습니다.");
        }
    }

    function q_del(id, pw) {
        var result = prompt("비밀번호를 입력 하시오.", '');
        if (result == pw) {
            new Ajax.Request("qna-minus.php", {
                method: "get",
                parameters: {
                    "id": id
                },
                onSuccess: Onadd,
                onFailure: ajaxFailed,
                onException: ajaxFailed
            });
        } else {
            alert("비밀번호가 틀렸습니다.");
        }
    }

    function addq() {
        id = $$('#q_id')[0].value;
        pw = $$('#q_pw')[0].value;
        content = $$('#q_content')[0].value;
        l_id = $$('#l_id')[0].value;
        new Ajax.Request("q_add.php", {
            method: "post",
            parameters: {
                "id": id,
                "pw": pw,
                "content": content,
                "l_id": l_id
            },
            onSuccess: Onadd,
            onFailure: ajaxFailed,
            onException: ajaxFailed
        });
    }

    function adda(id) {
        name = $$('#as_id' + id + ' input')[0].value;
        pw = $$('#as_id' + id + ' input')[1].value;
        content = $$('#as_id' + id + ' input')[2].value;
        new Ajax.Request("a_add.php", {
            method: "post",
            parameters: {
                "id": name,
                "pw": pw,
                "content": content,
                "q_id": id
            },
            onSuccess: Onadd,
            onFailure: ajaxFailed,
            onException: ajaxFailed
        });
    }

    function ajaxFailed(ajax, exception) {
        var errorMessage = "Error making Ajax request:\n\n";
        if (exception) {
            errorMessage += "Exception: " + exception.message;
        } else {
            errorMessage += "Server status:\n" + ajax.status + " " + ajax.statusText + "\n\nServer response text:\n" +
                ajax.responseText;
        }
        alert(errorMessage);
    }
</script>

</html>