/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.16-MariaDB : Database - joshseas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `summary` varchar(200) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `image_caption` varchar(50) DEFAULT NULL,
  `view_count` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `deleted` tinyint(4) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `blogs` */

insert  into `blogs`(`id`,`title`,`summary`,`content`,`image`,`image_caption`,`view_count`,`status`,`deleted`,`created`,`modified`) values 
(3,'Do not leave your camera when traveling','Balancing a composition involves arranging both positive elements and negative space in such a way that no one area of the design overpowers other areas. Everything works together and fits together in','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla et facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue et duis dolore feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>\r\n\r\n<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>\r\n','assets/uploads/blogs/danish-image-post-02.jpg','image',1,1,0,1516834568,1516834568),
(4,'Beautiful forest at mount Sindoro','The visual interest is balanced, which keeps viewers engaged with the design. Without visual balance, viewers might not see all areas of the design. They probably wonâ€™t spend any time in areas with ','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla et facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue et duis dolore feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>\r\n\r\n<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>\r\n','assets/uploads/blogs/danish-image-post-03.jpg','image',0,1,0,1516834677,1516834677),
(5,'Hold my hand tightly and never loose','Just as in the physical world, visual balance is a good thing. Itâ€™s desirable in and of itself. An unbalanced composition can feel uncomfortable for the viewer. Look back at the second of the three ','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla et facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue et duis dolore feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>\r\n\r\n<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>\r\n','assets/uploads/blogs/danish-image-post-04.jpg','image',4,1,0,1516834790,1516896311),
(6,'Metronic Blog Reborn','Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci ','<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore siat magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>\r\n\r\n<blockquote>\r\n<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>\r\n</blockquote>\r\n\r\n<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla et facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue et duis dolore feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>\r\n\r\n<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam et processus sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quame nunc putamus parum claram, siad anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>\r\n','assets/uploads/blogs/pexels-photo-707193.jpeg','image',1,1,0,1516841281,1519688370);

/*Table structure for table `categories` */

DROP TABLE IF EXISTS `categories`;

CREATE TABLE `categories` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `categories` */

insert  into `categories`(`id`,`name`,`created`,`modified`) values 
(1,'Animal',1519688674,1519688674),
(2,'Nature',1519688681,1519688681),
(3,'Wedding',1519688687,1519688687),
(4,'Family',1519688694,1519688694),
(5,'Event',1519688727,1519688727),
(6,'Portrait',1519688734,1519688734);

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `blog_id` int(8) DEFAULT NULL,
  `name` varchar(70) DEFAULT NULL,
  `email` varchar(70) DEFAULT NULL,
  `comment` text,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `options` varchar(255) DEFAULT NULL,
  `message` text,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

/*Table structure for table `contents` */

DROP TABLE IF EXISTS `contents`;

CREATE TABLE `contents` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `menu_id` tinyint(4) NOT NULL,
  `summary` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `image_caption` varchar(255) NOT NULL,
  `deleted` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `contents` */

insert  into `contents`(`id`,`title`,`menu_id`,`summary`,`content`,`image`,`image_caption`,`deleted`,`status`,`created`,`modified`) values 
(4,'JOSH-SEAS PHOTOGRAPHY',1,'Joshua Ojo is an Artistic, Nature, Travel, and Event photographer based in Ghana, with great interest in capturing the invaluable, underrated beauty of Africa. When he is not taking pictures, he works as a Network Engineer in the banking industry. He is k','Joshua Ojo is an Artistic, Nature, Travel, and Event photographer based in Ghana, with great interest in capturing the invaluable, underrated beauty of Africa.\r\nWhen he is not taking pictures, he works as a Network Engineer in the banking industry.\r\nHe is keen to deliver his best, and nothing less with each image.','assets/uploads/contents/Plain-White-Background-Wallpaper-Hd.jpg','me',0,0,1516317931,1516740778),
(5,'Lorem Ipsum',1,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl mi, blandit in luctus a, cursus quis turpis. Nam quis eros malesuada, condimentum dolor id, molestie mi. Pellentesque sed convallis metus.','<p style=\"text-align:justify\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nisl mi, blandit in luctus a, cursus quis turpis. Nam quis eros malesuada, condimentum dolor id, molestie mi. Pellentesque sed convallis metus. Nunc non turpis nec diam tincidunt pellentesque. Vivamus eleifend volutpat diam, blandit hendrerit ipsum gravida quis. Donec orci dolor, finibus quis tempor a, cursus in urna. Vestibulum tempor ipsum eget egestas porta.</p>\r\n\r\n<p style=\"text-align:justify\">Maecenas malesuada arcu ac consectetur tincidunt. Praesent leo odio, cursus quis scelerisque et, faucibus et nunc. Ut tincidunt tristique orci, in sagittis nisl fringilla in. Sed bibendum dui nec lectus efficitur, eget tempus tellus scelerisque. Integer ac mollis velit. Sed bibendum felis libero, a commodo metus venenatis non. Phasellus vitae lacinia neque, ultricies interdum leo. Donec rhoncus vulputate sapien eget bibendum. Quisque iaculis, nibh et scelerisque bibendum, augue massa porta turpis, aliquam gravida erat massa a ligula. Sed fermentum tempor magna at euismod.</p>\r\n','assets/uploads/contents/1497193715017.jpg','image',0,1,1516739388,1516739388);

/*Table structure for table `galleries` */

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `image_caption` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(2) DEFAULT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

/*Data for the table `galleries` */

insert  into `galleries`(`id`,`image_caption`,`image`,`status`,`created`,`modified`) values 
(13,'image1','assets/uploads/galleries/1.jpg',1,1516232107,1516232107),
(14,'image2','assets/uploads/galleries/2.jpg',1,1516232129,1516232129),
(15,'image3','assets/uploads/galleries/3.jpg',1,1516232151,1516232151),
(16,'image4','assets/uploads/galleries/4.jpg',1,1516232168,1516232168),
(17,'image5','assets/uploads/galleries/5.jpg',1,1516232182,1516232182),
(18,'image6','assets/uploads/galleries/6.jpg',1,1516232199,1516232199),
(19,'image','assets/uploads/galleries/danish-image-post-04.jpg',NULL,1516834329,1516834329),
(20,'image','assets/uploads/galleries/danish-image-post-03.jpg',NULL,1516834399,1516834399);

/*Table structure for table `logos` */

DROP TABLE IF EXISTS `logos`;

CREATE TABLE `logos` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `logo_caption` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `logos` */

insert  into `logos`(`id`,`logo_caption`,`logo`,`status`,`created`,`modified`) values 
(1,'logo','assets/uploads/logos/rccg-logo.png',0,1512184947,1512184947),
(2,'logo2','assets/uploads/logos/27407.png',0,1512186694,1512186694),
(3,'naso','assets/uploads/logos/delivery.png',0,1512190856,1512190856),
(4,'logo','assets/uploads/logos/logo.png',1,1515626785,1515626785);

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `body` tinytext,
  `status` varchar(8) DEFAULT NULL,
  `delete` tinyint(4) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `messages` */

/*Table structure for table `navigations` */

DROP TABLE IF EXISTS `navigations`;

CREATE TABLE `navigations` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `navigations` */

insert  into `navigations`(`id`,`title`,`path`,`created`,`modified`) values 
(1,'About','about-us.php',1512175525,1515627696),
(2,'Shots','portfolio.php',1512175860,1513107413),
(3,'Blog','blog.php',1512249045,1512249045),
(4,'Contact','contact.php',1512249045,1512249045),
(5,'Rate Cards','#',1516238901,1516238901);

/*Table structure for table `notifications` */

DROP TABLE IF EXISTS `notifications`;

CREATE TABLE `notifications` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `messages` text,
  `status` tinyint(4) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notifications` */

/*Table structure for table `settings` */

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `website` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `facebook_url` varchar(255) DEFAULT NULL,
  `twitter_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `googleplus_url` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `settings` */

insert  into `settings`(`id`,`website`,`location`,`country`,`phone`,`email_address`,`facebook_url`,`twitter_url`,`instagram_url`,`googleplus_url`,`created`,`modified`) values 
(1,'http://localhost/complete/site','Plot 554/6 Cola Avenue, Kokomlemle, Accra','Ghana','+233570848319','ayojosh2k@gmail.com','http://www.facebook.com/josh-seas','http://www.twitter.com/josh-seas','http://www.instagram.com/josh-seas','http://www.googleplus.com/josh-seas',1519689112,1519689112);

/*Table structure for table `sliders` */

DROP TABLE IF EXISTS `sliders`;

CREATE TABLE `sliders` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `slider_caption` varchar(255) NOT NULL,
  `slider` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sliders` */

insert  into `sliders`(`id`,`slider_caption`,`slider`,`status`,`created`,`modified`) values 
(1,'slider1','assets/uploads/sliders/1.jpg',1,1512077426,1512077426),
(2,'slide2','assets/uploads/sliders/2.jpg',1,1512183867,1512183867),
(3,'slider1','assets/uploads/sliders/3.jpg',0,1515632935,1515632935),
(4,'slider1','assets/uploads/sliders/4.jpg',1,1515633051,1515633051),
(5,'slider','assets/uploads/sliders/3.JPG',1,1515633051,1516739780);

/*Table structure for table `sub_menus` */

DROP TABLE IF EXISTS `sub_menus`;

CREATE TABLE `sub_menus` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `menu_id` int(8) DEFAULT NULL,
  `title` varchar(70) DEFAULT NULL,
  `path` varchar(70) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `sub_menus` */

insert  into `sub_menus`(`id`,`menu_id`,`title`,`path`,`created`,`modified`) values 
(1,5,'Wedding Photography','#',1516756610,1516760735),
(2,5,'Family Photography','#',1516830758,1516830758),
(3,5,'Event Photography','#',1516830758,1516830758),
(4,5,'Portrait Photography','#',1516830758,1519688610),
(5,5,'Website Photography','#',1516830758,1516830758);

/*Table structure for table `subscribers` */

DROP TABLE IF EXISTS `subscribers`;

CREATE TABLE `subscribers` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subscribers` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `active` tinyint(4) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`first_name`,`last_name`,`username`,`email`,`password`,`role`,`profile_pic`,`active`,`created`,`modified`) values 
(2,'Onyetube','Collins','Collins169','kosicollins169@gmail.com','cda6f2e0e181551b849187596ffa4afe','administrator','assets/uploads/profiles/id.jpg',1,1511996631,1512759291),
(3,'Esther','Thompson','Ethompson','ethompson0828@gmail.com','b3e4a0eba121dcc7a9983fefe1688a79','editor','assets/uploads/profiles/22814426_1638653106180492_6567969944194698194_n.jpg',1,1513023087,1513105501);

/*Table structure for table `views` */

DROP TABLE IF EXISTS `views`;

CREATE TABLE `views` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `blog_id` int(8) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `views` */

insert  into `views`(`id`,`ip_address`,`blog_id`,`created`,`modified`) values 
(1,'::1',6,1519688370,1519688370);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
