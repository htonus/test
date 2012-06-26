-- $Id$

create sequence user_id;
create table "user" (
	"id"		bigint not null PRIMARY KEY default nextval('user_id'),
	"name"		varchar(64) not null,
	"surname"	varchar(64) not null,
	"email"		varchar(128) not null,
	"username" 	varchar(64) not null,
	"password"	varchar(32) not null
);

create sequence type_id;
create table "type" (
	"id"		bigint not null PRIMARY KEY default nextval('type_id'),
	"name"		varchar(64) not null,
	"parent_id"	bigint null references "type"(id) on update cascade on delete cascade,
	"left"		integer null,
	"right"		integer null
);
create index type_parent_idx on type(parent_id);


create sequence sale_id;
create table "sale" (
	"id"			bigint not null PRIMARY KEY default nextval('sale_id'),
	"name"			varchar(64) not null,
	"description"	varchar(512) null,
	"user_id"		bigint not null references "user"(id) on update cascade on delete cascade
);
create index sale_user_idx on sale(user_id);

create sequence item_id;
create table item (
	"id"			bigint not null PRIMARY KEY default nextval('item_id'),
	"name"			varchar(64) not null,
	"description"	varchar(512) null,
	"type_id"		bigint null references "type"(id) on update cascade on delete cascade,
	"sale_id"		bigint not null references "sale"(id) on update cascade on delete cascade,
	"price"			numeric(20,2) null
);
create index item_sale_idx on item(sale_id);
create index item_type_idx on item(type_id);
