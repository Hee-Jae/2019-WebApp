DROP DATABASE webapp;
CREATE DATABASE webapp;
USE webapp;

CREATE TABLE users(
    user_id VARCHAR(20) NOT NULL,
    user_pw VARCHAR(20) NOT NULL
);

INSERT INTO users VALUES("admin", "root");

CREATE TABLE gallaly(
    file_name VARCHAR(20) NOT NULL
);

create TABLE members(
    name varchar(20) PRIMARY KEY,
    email varchar(50),
    web varchar(50),
    comment TEXT,
    rank varchar(20)
);

create TABLE research(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    title varchar(50)
);

create TABLE info_research(
    title varchar(50),
    info TEXT
);

CREATE TABLE careers(
    name varchar(20),
    career TEXT
);

CREATE TABLE question(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    content TEXT,
    password VARCHAR(20) NOT NULL,
    lecture_id VARCHAR(20) NOT NULL,
    slide INT NOT NULL,
    time TIMESTAMP NOT NULL
);

CREATE TABLE answer(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    q_id INT NOT NULL,
    name VARCHAR(20),
    content TEXT,
    password VARCHAR(20) NOT NULL,
    time TIMESTAMP NOT NULL
);

CREATE TABLE gallery(
    title VARCHAR(30) NOT NULL PRIMARY KEY,
    src VARCHAR(30) NOT NULL
);
INSERT INTO research(title)
VALUES("Web&Web security");

INSERT INTO info_research VALUES("Web&Web security", "Semantic web");

INSERT INTO members VALUES("Scott Ukjin Lee", "scottlee@hanyang.ac.kr", "https://selab.hanyang.ac.kr", "an asst. prof. in the CSE Dept. @ HYU (ERICA)", "Prof");


INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("정희재", "어 이건 질문이야", 123123, 4, NULL);
INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("황예찬", "어 이건 질문이야!", 123123, 4, NULL);
INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("이효원", "어 이건 질문이야?", 123123, 4, NULL);
INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("모지환", "어 이건 질문이야;", 123123, 4, NULL);
INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("김재현", "어 이건 질문이야@", 123123, 4, NULL);
INSERT INTO Question(name,content,password,lecture_id,time)
VALUES ("박서연", "어 이건 질문이야#", 123123, 4, NULL);

INSERT INTO Answer(q_id,name,content,password, time)
VALUES (1, "욱진리", "응 그럼 이건 답변이야", 123123, NULL);
INSERT INTO Answer(q_id,name,content,password, time)
VALUES (1, "욱진리", "응 그럼 이건 답변이야!", 123123, NULL);
INSERT INTO Answer(q_id,name,content,password, time)
VALUES (3, "욱진리", "응 그럼 이건 답변이야?", 123123, NULL);

INSERT INTO gallery VALUES("엠티 삼겹살 파티", "maxresdefault.jpg");
INSERT INTO gallery VALUES("야구장 나들이", "1567927165901463.jpg");
INSERT INTO gallery VALUES("학위수여식", "20160204002952_0.jpg");
INSERT INTO gallery VALUES("엠티 출발 전 단체사진", "44652141.jpg");
INSERT INTO gallery VALUES("벚꽃 축제", "2018_301377.jpg");
INSERT INTO gallery VALUES("공항에서 한장", "maxresdefault (1).jpg");
INSERT INTO gallery VALUES("박사졸업 송별회", "maxresdefault (2).jpg");
INSERT INTO gallery VALUES("만우절 교복입기", "20190422195026_edkdevoe.jpg");
INSERT INTO gallery VALUES("0801 채원생일", "I9GUFhn.jpg");