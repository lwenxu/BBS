CREATE TABLE formus (
  id INT NOT NULL AUTO_INCREMENT,
  `forum_name` varchar(50) NOT NULL default '',
  `forum_description` varchar(200) NOT NULL default '',
  `last_post_author` varchar(50) NOT NULL default '',
  `last_post_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `forum_order` tinyint(3) NOT NULL default '0',
  `isguest` tinyint(3) NOT NULL default '0',
  PRIMARY KEY (`ID`)
  );

CREATE TABLE `member` (
  `ID` int(11) NOT NULL auto_increment,
  `groupID` tinyint(3) NOT NULL default '0',
  `username` varchar(50) NOT NULL default '',
  `real_name` varchar(50) NOT NULL default '',
  `password` varchar(50) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `headimg` varchar(50) NOT NULL default '',
  `homepage` varchar(50) default NULL,
  `qq` varchar(10) default NULL,
  `MSN` varchar(50) default NULL,
  `jointime` datetime NOT NULL default '0000-00-00 00:00:00',
  `no_of_post` smallint(6) default NULL,
  `sign` varchar(200) default NULL,
  PRIMARY KEY (`ID`)
  );

CREATE TABLE `topic` (
  `ID` int(11) NOT NULL auto_increment,
  `title` varchar(100) NOT NULL default '',
  `author` varchar(50) NOT NULL default '',
  `last_post_author` varchar(50) default NULL,
  `last_post_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `no_of_hit` smallint(6) NOT NULL default '0',
  `no_of_reply` mediumint(9) NOT NULL default '0',
  `locked` tinyint(3) NOT NULL default '0',
  `face` varchar(50) default NULL,
  `topic` tinyint(3) NOT NULL default '0',
  `good` tinyint(3) NOT NULL default '0',
  `forum_id` mediumint(9) NOT NULL default '0',
  PRIMARY KEY (`ID`)
  );


CREATE TABLE `thread` (
  `ID` int(11) NOT NULL auto_increment,
  `topicID` smallint(6) NOT NULL default '0',
  `face` varchar(50) default NULL,
  `title` varchar(100) default NULL,
  `author` varchar(50) NOT NULL default '',
  `post_time` datetime NOT NULL default '0000-00-00 00:00:00',
  `subject` mediumtext NOT NULL,
  PRIMARY KEY (`ID`)
  );


