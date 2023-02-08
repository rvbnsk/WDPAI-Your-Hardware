CREATE TABLE users (
    id serial not null,
    name varchar(100) not null,
    surname varchar(100) not null,
    email varchar(100) not null unique,
    password varchar(100) not null
    -- role_id int not null foreign key()
);


CREATE TABLE data (
    id serial not null,
    title varchar(100) not null,
    description varchar(1000) not null,
    createdBy varchar(100) not null,
    imageUrl varchar(100) not null
);

-- CREATE TABLE roles (
--     id serial not null,
--     name varchar(100) not null
-- );