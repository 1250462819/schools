CREATE FUNCTION ispast (return_date DATE) RETURNS VARCHAR(3) 
DETERMINISTIC BEGIN DECLARE sf_value VARCHAR(3);
 IF curdate() > return_date THEN SET sf_value = 'Yes';
  ELSEIF curdate() <= return_date THEN SET sf_value = 'No';
   END IF;
   RETURN sf_value; 
   END 