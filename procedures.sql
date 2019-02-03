CREATE DEFINER=root`@`localhost PROCEDURE schoolPosts(IN name VARCHAR(500))
     NOT DETERMINISTIC CONTAINS SQL SQL SECURITY DEFINER 
     SELECT posts.* FROM posts join schools on schools.id = posts.school_id 
     WHERE schools.name = name;

// add school procedure
CREATE PROCEDURE addschool (IN name varchar(50),IN phone varchar(50),IN slug varchar(50))
BEGIN
    insert into schools (name,phone,slug) values (name ,phone,slug);
END     

