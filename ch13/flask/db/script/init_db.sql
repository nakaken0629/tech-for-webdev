-- simplewebデータベースを作成する
create database simpleweb;
use simpleweb;

-- user1ユーザーを作成する
create user 'user1'@'%' identified by 'password1234';
grant all on *.* to 'user1'@'%';

-- postテーブルを作成する
create table post (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    posted_at datetime,
    article varchar(1000),
    primary key(id)
);
