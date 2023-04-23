<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
  <title>INSERT INTO Developer Jobs Table</title>
    <link type="text/css" rel="stylesheet" href="style_table.css" />
</head>
<body>
<?php
// Set the variables for the database access:
  require_once('connectvars.php');
  
$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


$query = "INSERT INTO developer_jobs VALUES (1, 'Applications Developer', 'This position will be performed as a member of the research and development organization within the DOD Cyber Crime Center, a national cyber center. The candidate will be actively investigating and developing new software tools and techniques in performing automated malware analysis, digital forensics and cyber intelligence. The candidate should have strong algorithm, software design, and software development skills with an understanding of low level OS and system operations.', 'Linthicum', 'MD', '98101', 'DOD Cyber Crime Center', '2017-07-24 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (2, 'Web Developer', 'Aeroflow, Inc. is in search of an entry level web developer to assist and learn alongside the current team. Candidate should have a strong desire and willingness to learn new systems and how they pertain to Aeroflow\'s current business model. Candidate will be responsible for performing numerous site update and design tasks as they are assigned in a timely and efficient manner. This is a great opportunity for someone looking for an entry into the fields of web development, digital Marketing, design, or E-Commerce.', 'Asheville', 'NC', '43801', 'Aeroflow Healthcare', '2017-04-28 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (3, 'Full Stack Developer', 'If you are seeking an environment where your contribution helps people across the U.S. and worldwide make some of the most important decisions of their lives, and you want to work in a friendly environment where employees\’ opinions are valued, then U.S. News is the place for you!  We offer a strong benefits package, including but not limited to: competitive compensation, health, dental, vision, 401K with a match as well as a variety of flexible spending accounts to match the needs of our employees.', 'Washington', 'DC', '38701', 'U.S. News & World Report', '2017-06-28 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (4, 'Natural Developer', 'This Natural Developer position will be responsible for day to day maintenance and operations of various systems supporting city operating departments. The majority of the systems are supporting the Finance department. Tasks will include but not be limited to new programming, modification and maintenance of old code, running of batch jobs, ad-hoc reports and queries and JCL scripting.', 'Philadelphia', 'PA', '44109', 'The Office of Innovation & Technology', '2017-09-04 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (5, 'Back End Developer', 'As a back end developer, you will be collaborating with one of the most exciting teams at Flybits. The Flybits platform is developed on a scalable microservice based architecture, and in conjunction with the engineering and product teams, you will be responsible for end-to-end delivery of product components including conceptual design, development, deployment, and monitoring.', 'Toronto', 'ON', 'N9T 1X3', 'Flybits, Inc.', '2017-07-29 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (6, 'Junior Developer', 'As a Junior Web Developer at SAGE you will work closely with our digital team to forge innovative solutions and redefine the look and feel of digital within the healthcare landscape. Your passion for coding and programming will not only build dynamic pieces that meet our clients needs, but also drive your ability to propose improvements and unique solutions.', 'Toronto', 'ON', 'M2V 5R3', 'SAGE Medica Inc.', '2017-08-17 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (7, 'Mobile Developer', 'We\'re looking for an experienced mobile app developer that has a passion for working in an Agile environment. You’ll be responsible for developing native mobile applications, collaborating closely with design and product management, and providing technical guidance across multiple projects.', 'Montreal', 'QC', 'F7Q 9G1', 'Newforma', '2017-03-11 12:11:17')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (8, 'Wordpress Developer', 'We are looking for a candidate that has strong programming skills, and is more of a programmer / coder, than a website designer. Knowledge of PHP, MYSQL responsive CSS Layouts and Wordpress will be required. We have a friendly, down to earth, and relaxing office space to work within however we are a fast paced website development company.', 'Chatham-Kent', 'ON', 'N5D 4S7', 'Abstract Marketing', '2017-03-24 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (9, 'Embedded Developer', 'A career at General Dynamics Land Systems - Canada offers excitement, opportunity and a high-energy environment for global collaboration within the Land Systems family.', 'Windsor', 'ON', 'N6D 5RH', 'General Dynamics Land Systems', '2017-11-14 11:43:59')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (10, 'Software Developer', 'The Software Developer is responsible for the design and development of new web and standalone applications. The position requires strong knowledge of ASP.NET, VB.NET, C#.NET, CSS, and HTML.', 'Windsor', 'ON', 'G6J 4L5', 'AlphaKor Group', '2017-07-14 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (11, 'Full Stack Developer', 'Red Piston Inc. is looking for skilled full stack web developers to work on exciting software for small and large brands. Please apply with a resume, a portfolio (screenshots/screen casts/git accounts) is also beneficial to our hiring process if available.', 'Windsor', 'ON', 'J4F 5E1', 'Red Piston Inc.', '2017-11-02 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (12, 'IT Developer', 'Our client, an international consumer goods company, is looking for an IT Developer to join their team in Windsor, ON. This is a permanent position and the right candidate will have 1-3 years of experience, a strong background in programming / database development and is a self-starter who takes initiative and enjoys working as part of a team. ', 'Windsor', 'ON', 'R8W 5S9', 'Forge Consulting Group', '2017-11-09 11:25:27')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (13, 'iOS Applications Developer', 'Alteris Group Canada is looking for an experienced iOS Applications Developer to develop and maintain native iOS applications using Swift . The primary focus will be the development of such applications and their integration with back-end services. ', 'Windsor', 'ON', 'T3F 5C7', 'Alteris Group Canada', '2017-11-14 11:31:08')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (14, 'Outsystems Developer', 'Due to the incorporation of the OutSystems development platform, we are urgently seeking an experienced Developer. The primary duties will be to: Develop Frontend applications by today’s standards. Have a leading and inspiring role on the user experience in these applications. Take part in the social process of our team. Have excellent communication skills and be a true team player. Draw up or support and amend functional and technical documentation.', 'Remote Work', 'Canada', 'N/A', 'Two95 International Inc.', '2017-11-14 21:49:31')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (15, 'Front End Developer', 'tbk Creative is hiring a full-time Junior Front End Developer. To thrive in this role, you love solving complex problems with elegantly simple solutions, you\’re a great communicator (verbal and written), you like learning new things, are a self-starter, and want to be part of and serve a greater mission.', 'London', 'ON', 'F5J 1W7', 'tbk Creative', '2017-07-27 11:22:28')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (16, 'iOS Developer', 'Clearbridge Mobile is an award-winning full stack mobile application development studio. With our skilled team of developers and designers, we’ve made end-to-end custom mobile applications (including iOS) for an extensive list of premium clients.', 'London', 'ON', 'G6J 2R8', 'Clearbridge Mobile', '2017-11-14 21:13:35')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (17, 'AI Web Developer', 'An innovative and results-driven mobile app development agency for startup entrepreneurs, fast-growth companies, and nonprofit organizations. We help our clients solve complex problems using AI and other methods to turn ideas into apps.', 'London', 'ON', 'X6Y 5G6', 'Red Square Labs Inc.', '2017-11-14 21:17:16')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (18, 'Java Developer', 'As a part of the Deep Security team at Trend Micro, you will participate as part of a dynamic and talented team that develops the next generation of Trend Micro’s security products. Your role will be to design, implement and test high quality software capabilities for data center and cloud based systems using your excellent coding abilities in Java and other languages.', 'Ottawa', 'ON', 'A5L 5R8', 'Trend Micro Inc', '2017-05-22 09:54:32')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 

$query = "INSERT INTO developer_jobs VALUES (19, 'Developer Intern', 'We are looking for a driven, passionate individual that has some experience developing online or smartphone applications and wants to be part of an Innovative Business.', 'Kitchener', 'ON', 'N8K 5T8', 'LiveApp', '2017-08-12 04:54:12')";
if (mysqli_query($dbc, $query)) {
 	echo "The query was successfully executed. Record was inserted!<br />";
	echo "<b>Data: $query </b><br /><br />";
} else {
 	echo "The query could not be executed!" . mysqli_error($dbc);
} 


mysqli_close($dbc);
?>
</body>
</html>