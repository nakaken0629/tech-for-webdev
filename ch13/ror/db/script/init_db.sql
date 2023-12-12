-- user1ユーザーを作成する
create user 'user1'@'%' identified by 'password1234';
grant all on *.* to 'user1'@'%';
