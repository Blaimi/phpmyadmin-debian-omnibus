CREATE TABLE bookmark (
    id int(11) DEFAULT '0' NOT NULL auto_increment,
    dbase varchar(255) NOT NULL,
    user varchar(255) NOT NULL,
    label varchar(255) NOT NULL,
    query text NOT NULL,
    PRIMARY KEY (id)
);
