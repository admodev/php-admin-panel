CREATE DATABASE IF NOT EXISTS admin_panel;

USE admin_panel;

CREATE TABLE users(
    id int(255) auto_increment not null,
    name varchar(50) not null,
    surname varchar(100),
    role varchar(20),
    email varchar(255) not null,
    password varchar(255) not null,
    description text,
    image varchar(255),
    created_at datetime DEFAULT null,
    updated_at datetime DEFAULT null,
    remember_token varchar(255),
    CONSTRAINT pk_users PRIMARY KEY(id)
) ENGINE = InnoDb;

CREATE TABLE categories(
    id int(255) auto_increment not null,
    name varchar(100),
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL,
    CONSTRAINT pk_categories PRIMARY KEY(id)
) ENGINE = InnoDb;

CREATE TABLE posts(
    id int(255) auto_increment not null,
    user_id int(255) not null,
    category_id int(255) not null,
    title varchar(255) not null,
    content text not null,
    image varchar(255),
    created_at datetime NOT NULL,
    updated_at datetime NOT NULL,
    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_post_user FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT fk_post_category FOREIGN KEY(category_id) REFERENCES categories(id)
) ENGINE = InnoDb;