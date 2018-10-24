CREATE TABLE entries(
id int(5) NOT NULL auto_increment, 
firstName varchar(60) NOT NULL default '',
lastName varchar(60) NOT NULL default '',
phone varchar(10) NOT NULL default '',
email varchar(60) NOT NULL default '',
message text NOT NULL, 
Primary key(id)
);

-- phone int(10) NOT NULL default ''
-- we're not using this because Validation is still easier with varchar than int