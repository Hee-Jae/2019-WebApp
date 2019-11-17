CREATE DATABASE webapp;
USE webapp;

CREATE TABLE question(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(20),
    content TEXT,
    password VARCHAR(20) NOT NULL,
    lecture_id INT NOT NULL,
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

INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("정희재", "어 이건 질문이야", 123123, 4, 12, NULL);
INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("황예찬", "어 이건 질문이야!", 123123, 4, 12, NULL);
INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("이효원", "어 이건 질문이야?", 123123, 4, 12, NULL);
INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("모지환", "어 이건 질문이야;", 123123, 4, 12, NULL);
INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("김재현", "어 이건 질문이야@", 123123, 4, 12, NULL);
INSERT INTO Question(name,content,password,lecture_id,slide,time)
VALUES ("박서연", "어 이건 질문이야#", 123123, 4, 12, NULL);

INSERT INTO Answer(q_id,name,content,password, time)
VALUES (1, "욱진리", "응 그럼 이건 답변이야", 123123, NULL);
INSERT INTO Answer(q_id,name,content,password, time)
VALUES (1, "욱진리", "응 그럼 이건 답변이야!", 123123, NULL);
INSERT INTO Answer(q_id,name,content,password, time)
VALUES (3, "욱진리", "응 그럼 이건 답변이야?", 123123, NULL);