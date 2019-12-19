<!DOCTYPE HTML>

<html lang="ko">
    <?php include('./assets/php/head.php'); ?>
    <?php $currentpage = 'COURSES'; ?>
    <body>
        <!-- Navbar -->
        <?php include('assets/php/navbar.php'); ?>
        <!-- article_yc -->
        <div id="left_banner_yc">
            <!-- <span class="banner_head">HOME</span> -->
            <ul>
                <li><a href="#objectives">Objectives</a></li>
                <li><a href="#lecturer">Lecturer</a></li>
                <li><a href="#ta">TA</a></li>
                <li><a href="#places_dates">Places & Dates</a></li>
                <li><a href="#coursesforum">Courses Forum</a></li>
                <li><a href="#textbooks">Textbooks</a></li>
                <li><a href="#coursesschedule">Courses Schedule</a></li>
                <li><a href="#teamproject">Team Project</a></li>
                <li><a href="#assessment">Assessments</a></li>
            </ul>
            <hr id="banner_hr">
            <!-- <span class="banner_head">SLIDES</span> -->
            <ul>
                <li><a href="lecture.php">Slides</a></li>
            </ul>
        </div>
        <div class="article_yc">
            <div id="objectives">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Objectives </div>
                    <div class="courses_home_text">
                        <p> In this course, the followings will be covered to adequately enable web programming and web application development:</p>
                        <ol>
                            <li>Understand the protocols, language and systems used on the Web (HTML, CSS, HTTP, URLs, XML)</li>
                            <li>Understand the functions of clients and servers on the Web & learn how to implement client-side scripts (JavaScript) and server-side scripts (PHP)</li>
                            <li>Obtain ability to design and implement an interactive web site where usability, accessibility and internationalization issues are considered</li>
                            <li>Learn how to use/manage database associated with web applications (mainly storage and retrieval)</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="lecturer">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Lecturer: Scott Lee </div>
                    <div class="courses_home_text">
                        <ol>
                            <li>Office: 학연산클러스터 617호</li>
                            <li>Tel: 031-400-5238</li>
                            <li>Email: scottlee@hanyang.ac.kr</li>
                        </ol>
                    </div>
                </div>
            </div>

            <div id="ta">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Teaching Assistants </div>
                    <div class="courses_home_text">
                        <ul>
                            <li> Gichan Lee
                                <ul>
                                    <li>Office: 학연산클러스터 621호</li>
                                    <li>Tel: 031-400-4754</li>
                                    <li>Email: fantasyopy@gmail.com</li>
                                </ul>
                            </li>
                            <li> HakJin Lee
                                <ul>
                                    <li>Office: 학연산클러스터 621호</li>
                                    <li>Tel: 031-400-4754</li>
                                    <li>Email: gsdjini91@gmail.com</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="places_dates">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Places & Dates </div>
                    <div class="courses_home_text">
                        <ul>
                            <li> Class 1 (23497)
                                <ul>
                                    <li>Lecture : Thu (09:00 - 10:30) & Fri (13:00 - 14:30) @ Engineering Building #1 Room 402</li>
                                    <li>Lab : Fri (09:00 - 11:00) @ Engineering Building #4 PC Room 1 & 2</li>
                                </ul>
                            </li>
                            <li> Class 2 (24465)
                                <ul>
                                    <li>Lecture : Thu (10:30 - 12:00) & Fri (14:30 - 16:00) @ Engineering Building #1 Room 407</li>
                                    <li>Lab : Fri (16:00 - 18:00) @ Engineering Building #4 PC Room 1 & 2</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="coursesforum">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Courses Forum </div>
                    <div class="courses_home_text">
                        <ul>
                            <li><a href="https://learn.hanyang.ac.kr/"> Blackboard </a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="textbooks">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Textbooks </div>
                    <div class="courses_home_text">
                        <ul>
                            <li>Marty Stepp, Jessica Miller, Victoria Kirst, <span class="text-bold">Web Programming Step by Step: Second Edition</span>, Step by Step Publishing, 2012</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="coursesschedule">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Courses Schedule </div>
                    <div class="courses_home_text">
                        <ul>
                            <li>Week 01 : 05/09/2019 - Introduction & The Internet and World Wide Web</li>
                            <li>Week 01 : 06/09/2019 - Basic HTML</li>
                            <li>Week 02 : 12/09/2019 - No Lecture (추석 Thanksgiving)</li>
                            <li>Week 02 : 13/09/2019 - No Lecture (추석 Thanksgiving)</li>
                            <li>Week 03 : 19/09/2019 - Basic HTML</li>
                            <li>Week 03 : 20/09/2019 - CSS for Styling</li>
                            <li>Week 04 : 20/09/2019 - CSS for Styling</li>
                            <li>Week 04 : 27/09/2019 - Page Layout</li>
                            <li>Week 05 : 02/10/2019 - [특강] 게임 서버 개발 - 17:00 ~ 19:00 @제1학술관 101호 (supplementary lecture for 03/10/2019)</li>
                            <li>Week 05 : 03/10/2019 - No Lecture (National Foundation Day) - supplementary lecture 02/10/2019</li>
                            <li>Week 05 : 04/10/2019 - Page Layout</li>
                            <li>Week 06 : 10/10/2019 - Basic PHP</li>
                            <li>Week 06 : 10/10/2019 - Basic PHP</li>
                            <li>Week 07 : 10/10/2019 - Basic PHP</li>
                            <li>Week 07 : 18/10/2019 - Forms</li>
                            <li>Week 08 : 24/10/2019 - Mid-Term Exam Preparation</li>
                            <li>Week 08 : 25/10/2019 - Mid-Term Exam 13:00 ~ 16:00 @제1학술관 101호 (Educational Building I Room 101) & 4공학관 PC1실 (Engineering Building IV PC Room 1)</li>
                            <li>Week 09 : 31/10/2019 - Forms</li>
                            <li>Week 09 : 01/11/2019 - Forms</li>
                            <li>Week 10 : 07/11/2019 - Relational Database & SQL</li>
                            <li>Week 10 : 07/11/2019 - Relational Database & SQL</li>
                            <li>Week 11 : 14/11/2019 - JavaScript</li>
                            <li>Week 11 : 14/11/2019 - JavaScript</li>
                            <li>Week 12 : 21/11/2019 - JavaScript & DOM</li>
                            <li>Week 12 : 22/11/2019 - DOM</li>
                            <li>Week 13 : 28/11/2019 - Prototype & Event</li>
                            <li>Week 13 : 29/11/2019 - Ajax & XML & JSON</li>
                            <li>Week 14 : 29/11/2019 - Ajax & XML & JSON</li>
                            <li>Week 14 : 06/12/2019 - Web Services</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="teamproject">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Team Project </div>
                    <div class="courses_home_text">
                        <ul>
                            <li> Class 23497
                                <ul>
                                    <li><span class="text-bold">박서연</span>, 이효원, 정희재, 김재현, 모지환, 황예찬</li>
                                    <li><span class="text-bold">이종민</span>, 박준영, 박진혁, 송현수, 엄세진, 이준섭</li>
                                    <li><span class="text-bold">김소현</span>, 임소윤, 이정인, 강가원, 안예지</li>
                                    <li><span class="text-bold">이민혁</span>, 백승민, 김유현, <span class="text-bold">Ana Carolina Cardoso</span>, Zhou Xueyi, Frederik Bonde</li>
                                    <li><span class="text-bold">양재우</span>, 주한새, 강은호, 권순범, 김하영, 안한서</li>
                                    <li><span class="text-bold">위준범</span>, 배진우, 박재선, 박성수, 최준호</li>
                                    <li><span class="text-bold">박재용</span>, 김동규, 이세명, 오승기, 김덕영</li>
                                    <li><span class="text-bold">양재우</span>, 주한새, 강은호, 권순범, 김하영, 안한서</li>
                                    <li><span class="text-bold">위준범</span>, 배진우, 박재선, 박성수, 최준호</li>
                                    <li><span class="text-bold">박재용</span>, 김동규, 이세명, 오승기, 김덕영</li>
                                </ul>
                            </li>
                            <li> Class 24465
                                <ul>
                                    <li><span class="text-bold">밤서연</span>, 임효원, 점희재, 김재현, 몸지환, 홤예찬</li>
                                    <li><span class="text-bold">이종민</span>, 박준영, 박진혁, 송현수, 엄세진, 이준섭</li>
                                    <li><span class="text-bold">김소현</span>, 임소윤, 이정인, 강가원, 안예지</li>
                                    <li><span class="text-bold">이민혁</span>, 백승민, 김유현, <span class="text-bold">Ana Carolina Cardoso</span>, Zhou Xueyi, Frederik Bonde</li>
                                    <li><span class="text-bold">양재우</span>, 주한새, 강은호, 권순범, 김하영, 안한서</li>
                                    <li><span class="text-bold">위준범</span>, 배진우, 박재선, 박성수, 최준호</li>
                                    <li><span class="text-bold">박재용</span>, 김동규, 이세명, 오승기, 김덕영</li>
                                    <li><span class="text-bold">양재우</span>, 주한새, 강은호, 권순범, 김하영, 안한서</li>
                                    <li><span class="text-bold">위준범</span>, 배진우, 박재선, 박성수, 최준호</li>
                                    <li><span class="text-bold">박재용</span>, 김동규, 이세명, 오승기, 김덕영</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="assessment">
                <div class="courses_home_content">
                    <div class="courses_home_title"> Assessment </div>
                    <div class="courses_home_text">
                        <ul>
                            <li>Attendance (10%)</li>
                            <li>Midterm Exam (30%) - <a href="https://selab.hanyang.ac.kr/courses/cse326/2019/score/2019-2%20WebAppDev%20Midterm%20Score.pdf">Midterm Score</a></li>
                            <li>Final Exam (30%)</li>
                            <li>Team Project (30%)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- Footer -->
        <?php include('assets/php/footer.php'); ?>
    </body>
</html>
