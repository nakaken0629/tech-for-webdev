create user 'user1'@'%' identified by 'password1234';
grant all on *.* to 'user1'@'%';

create table product (
    id MEDIUMINT NOT NULL,
    name varchar(1000),
    primary key(id)
);

insert into product (id, name) values (1, 'Webアプリケーション開発入門');
insert into product (id, name) values (2, 'AWSではじめるインフラ構築入門');
insert into product (id, name) values (3, 'スラスラわかるJava');
