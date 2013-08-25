What is Article Test
This is a sample code file which goes through the steps of creating, updating and deleting articles in a sample application.
using Jamie Rumbelow's MY_Model and MY_Controller along with Twitter Bootstrap.

Installation
Download the files into your projects directory. Make necessary changes to database.php file.
Create a table like:-

CREATE TABLE IF NOT EXISTS `articles` (
 `body` text,
 `title` varchar(250) DEFAULT NULL,
 `id` int(11) NOT NULL AUTO_INCREMENT,
 PRIMARY KEY (`id`),
 FULLTEXT KEY `body` (`body`,`title`)
) ENGINE=MyISAM  


--
-- Dumping data for table `articles`
--

 INSERT INTO `articles` (`body`, `title`, `id`) VALUES
 ('bears are fuzzy and cute - but don''t try to pet them!', 'Something about bears', 1),
 ('Fuzzy Wuzzy was a bear; Fuzzy Wuzzy had no hair. Fuzzy Wuzzy wasn''t very fuzzy, was he?', 'Fuzzy Wuzzy', 2),
 ('This is dumb and boring', 'Dumb and boring post', 3),
 ('This is dumb and boring, too.', 'Dumb and boring post', 4);

Now you can view the page in the browser by using /path/to/projectfolder/article


Reference:-
Code by Jeff: http://www.codebyjeff.com/blog/2012/01/using-jamie-rumbelows-my_model
Codeigniter Bootstrap: https://github.com/sjlu/CodeIgniter-Bootstrap
Jamie Rumbelow's MY_Model: https://github.com/jamierumbelow/codeigniter-base-model
Jamie Rumbelow's MY_Controller: https://github.com/jamierumbelow/codeigniter-base-controller
