=======
Article-Test
============

Sample CRUD Application Using Jamie Rumbelow's MY_Model and MY_Controller

<b>What is Article Test</b><br>
This is a sample code file which goes through the steps of creating, updating and deleting articles in a sample application.
using Jamie Rumbelow's MY_Model and MY_Controller along with Twitter Bootstrap.

<b>Installation</b><br>
Download the files into your projects directory. Make necessary changes to database.php file.<br>
Create a table like:-<br>
CREATE TABLE IF NOT EXISTS `articles` (<br>
 `body` text,<br>
 `title` varchar(250) DEFAULT NULL,<br>
 `id` int(11) NOT NULL AUTO_INCREMENT,<br>
 PRIMARY KEY (`id`),<br>
 FULLTEXT KEY `body` (`body`,`title`)<br>
) ENGINE=MyISAM <br>
<br>
Dumping Data for table 'articles'<br>


INSERT INTO `articles` (`body`, `title`, `id`) VALUES<br>
 ('bears are fuzzy and cute - but don''t try to pet them!', 'Something about bears', 1),<br>
 ('Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn''t very fuzzy, was he?', 'Fuzzy Wuzzy', 2),<br>
 ('This is dumb and boring', 'Dumb and boring post', 3),<br>
 ('This is dumb and boring, too.', 'Second Dumb and boring post', 4);<br>
 
 Now you can view the page in the browser by using /path/to/projectfolder/article<br>
 
 <b>Reference:-</b><br>
 Code by Jeff: http://www.codebyjeff.com/blog/2012/01/using-jamie-rumbelows-my_model<br>
 Codeigniter Bootstrap: https://github.com/sjlu/CodeIgniter-Bootstrap<br>
 Jamie Rumbelow's MY_Model: https://github.com/jamierumbelow/codeigniter-base-model<br>
Jamie Rumbelow's MY_Controller: https://github.com/jamierumbelow/codeigniter-base-controllerm/blog/2012/01/using-jamie-rumbelows-my_model<br>
