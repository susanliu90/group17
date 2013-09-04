	CREATE TABLE professors
	(
		prof_id INT AUTO_INCREMENT,
		user_id INT,
		course_num VARCHAR(50),
		primary key (prof_id)
	);
	CREATE TABLE tas
	(
		ta_id INT AUTO_INCREMENT,
		user_id INT,
		course_num INT,
		primary key (ta_id)
	);
	CREATE TABLE students 
	(
		student_id INT AUTO_INCREMENT,
		user_id INT,
		course_num VARCHAR(50),
		grades_id INT,
		primary key (student_id)
	);
	CREATE TABLE users 
	(
		user_id INT AUTO_INCREMENT,
		lastname VARCHAR(50),
		firstname VARCHAR(50),
		email VARCHAR(50),
		password CHAR(36),
		level VARCHAR(50),
		securityq VARCHAR(50),
		answer CHAR(36),
		primary key (user_id)
	);
	CREATE TABLE courses 
	(
		course_num VARCHAR(50),
		course_sched VARCHAR(50),
		course_loc VARCHAR(50),
		course_pwd CHAR(36),
		proflist_id INT,
		talist_id INT,
		studentlist_id INT,
		quizlist_id INT,
		primary key (course_num)
	);
  	CREATE TABLE grades 
	(
		grades_id INT AUTO_INCREMENT,
		course_num INT,
		aplus INT,
		a INT,
		aminus INT,
		bplus INT,
		b INT,
		bminus INT,
		cplus INT,
		c INT,
		cminus INT,
		d INT,
		f INT,
		primary key (grades_id)
	);

  	CREATE TABLE professor_list
	(
		proflist_id INT AUTO_INCREMENT,
		prof_id INT,
		course_num VARCHAR(50),
		primary key (proflist_id)
	);

 	CREATE TABLE ta_list
	(
		talist_id INT AUTO_INCREMENT,
		ta_id INT,
		course_num VARCHAR(50),
		primary key (talist_id)
	);


   CREATE TABLE student_list
	(
		studentlist_id INT AUTO_INCREMENT,
		student_id INT,
		course_num VARCHAR(50),
		primary key (studentlist_id)
	);


  	CREATE TABLE quiz_list
	(
		quizlist_id INT AUTO_INCREMENT,
		quiz_id INT,
		course_num VARCHAR(50),
		primary key (quizlist_id)
	);


  	CREATE TABLE quiz
	(
		quiz_id INT AUTO_INCREMENT,
		course_num VARCHAR(50),
		mcsingle_id INT,
		mcmultiple_id INT,
		tf_id INT,
		fillinblank_id INT,
		simpleanswer_id INT,
		shortanswer_id INT,
		primary key (quiz_id)
	);
 	CREATE TABLE mcsingle_list
	(
		mcsingle_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		feedback VARCHAR(150),
		primary key (mcsingle_id)
	);


 	CREATE TABLE mcmultiple_list
	(
		mcmultiple_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		answer2 VARCHAR(50),
		answer3 VARCHAR(50),
		answer4 VARCHAR(50),
		answer5 VARCHAR(50),
		feedback VARCHAR(150),
		primary key (mcmultiple_id)
	);
	
  	CREATE TABLE tf_list
	(
		tf_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		primary key (tf_id)
	);


   CREATE TABLE fillinblank_list
	(
		fillinblank_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		primary key (fillinblank_id)
	);


   CREATE TABLE simpleanswer_list
	(
		simpleanswer_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		primary key (simpleanswer_id)
	);


  	CREATE TABLE shortanswer_list
	(
		shortanswer_id INT AUTO_INCREMENT,
		question VARCHAR(50),
		answer VARCHAR(50),
		primary key (shortanswer_id)
	);


 	CREATE TABLE comment
	(
		comment_id INT AUTO_INCREMENT,
		feedback VARCHAR(150),
		primary key (comment_id)
	);

