create user 'user1'@'%' identified by 'password1234';
grant all on *.* to 'user1'@'%';

create table product (
    id medimint not null,
    name varchar(1000)
    primary key(id),
);

insert into product (id, name, onsale) values (1, 'Webアプリケーション開発入門');
insert into product (id, name, onsale) values (2, 'AWSではじめるインフラ構築入門');
insert into product (id, name, onsale) values (3, 'スラスラわかるJava');
insert into product (id, name, onsale) values (4, '作ればわかるGoogle App Engine');
insert into product (id, name, onsale) values (5, 'Visual Basic 2008 逆引きレシピ');
