drop table if exists post;

-- postテーブルを作成する
create table post (
    id MEDIUMINT NOT NULL AUTO_INCREMENT,
    posted_at datetime,
    article varchar(1000),
    primary key(id)
);
