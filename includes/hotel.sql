create table room_type (
    t_id int,
    name varchar(20),
    description varchar(100),
    base_price double,
    constraint room_pk primary key(t_id)
);

create table room (
    room_no int,
    floor int,
    description varchar(100),
    availability boolean,
    status boolean,
    type_id int,
    constraint room_pk primary key(room_no),
    constraint room_fk foreign key(type_id) references room_type(t_id)
);

create table user (
    uid int AUTO_INCREMENT,
    fname varchar(20),
    lname varchar(20),
    nic varchar(12),
    email varchar(40),
    address varchar(100), 
    constraint user_pk primary key(uid)
);

create table customer (
    cid int,
    type varchar(50),
    constraint customer_pk primary key(cid),
    constraint customer_fk foreign key(cid) references user(uid)
);

create table reserve (
    cid int,
    room_no int,
    checkIn date,
    checkOut date,
    reservedDate date,
    food_ser varchar(20),
    adults int,
    children int,
    rtype int,
    constraint reserve_pk primary key(cid, room_no),
    constraint reserve_fk1 foreign key(cid) references customer(cid),
    constraint reserve_fk2 foreign key(room_no) references room(room_no),
    constraint reserve_fk3 foreign key(rtype) references room_type(t_id)
);

create table user_phone (
    uid int,
    phone_number varchar(20),
    constraint user_phone_pk primary key(uid, phone_number),
    constraint user_phone_fk foreign key(uid) references user(uid)
);
