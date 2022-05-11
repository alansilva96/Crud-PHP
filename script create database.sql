createdatabase crud;
use crud;

create table dqcmodel(
id int not null auto_increment primary key,
    model varchar(10) not null,
unique(model)
);

create table dqc84(
id int not null auto_increment primary key,
model int not null,
fat_part_no varchar(15)not null,
total_location int not null,
update_dt timestamp not null,
create_dt timestamp not null DEFAULT CURRENT_TIMESTAMP,
unique (fat_part_no)
);

create table dqc841(
id int not null auto_increment primary key,
fat_part_no int not null,
parts_no varchar(15) not null,
unt_usg int not null,
description longtext not null,
ref_designator longtext,
update_dt timestamp not null,
create_dt timestamp not null DEFAULT CURRENT_TIMESTAMP
);