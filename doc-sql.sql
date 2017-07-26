create table user
(
	id int(11) auto_increment primary key,
	nome varchar(250),
	login varchar(250),
	email varchar(150),
	senha varchar(100),
	status_user smallint(1)
);

create table team
(
	id int(11) auto_increment primary key,
	id_user int(11),
	id_user_master_team int(11),
	name_team varchar(250),
	photo_team varchar(250)
);

alter table user add status_access smallint(1) default 0;

alter table user add token varchar(50);

alter table team add dt_creation datetime;

alter table team_player add access_status smallint(1);

alter table user add dt_registro datetime;