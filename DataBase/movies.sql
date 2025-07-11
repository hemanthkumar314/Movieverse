-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 10:26 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `content`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `mov_id` int(4) NOT NULL,
  `mov_name` varchar(100) NOT NULL,
  `description` varchar(800) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `actress` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `image` varchar(250) NOT NULL,
  `year` int(4) NOT NULL,
  `rating` varchar(5) NOT NULL,
  `duration` int(5) NOT NULL,
  `imdb` float NOT NULL,
  `genre` varchar(35) NOT NULL,
  `language` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`mov_id`, `mov_name`, `description`, `actor`, `actress`, `director`, `image`, `year`, `rating`, `duration`, `imdb`, `genre`, `language`) VALUES
(1, 'RRR', 'A fearless revolutionary and an officer in the British force, who once shared a deep bond, decide to join forces and chart out an inspirational path of freedom against the despotic rulers.', 'NTR,Ramcharan', 'Alia Bhatt,Olivia Morris', 'SS.Rajamouli', 'images/rrr.jpeg', 2022, 'U/A', 182, 7.9, 'Action,Drama', 'Telugu'),
(2, 'KGF 2', 'Rocky successfully rises as the leader and saviour of the people of the Kolar Gold Fields. But, in his goal to fulfil his mother\'s wishes, Rocky must tackle Adheera, Inayat Khalil and Ramika Sen.', 'Yash', 'Srinidhi Shetty', 'Prasanth Neel', 'images/kgf2.png', 2022, 'U/A', 168, 8.3, 'Action,Drama', 'Kannada'),
(3, 'PATHAAN', 'An Indian spy battles against the leader of a gang of mercenaries who have a heinous plot for his homeland.', 'Sharukh Khan', 'Deepika Padukone', 'Shidharth Anand', 'images/pathan.jpg', 2023, 'U/A', 146, 6, 'Action,Thriller', 'Hindi'),
(4, 'Pushpa-The Rise', 'Pushpa Raj a coolie, volunteers to smuggle red sanders, a rare wood that only grows in Andhra, with the help of novel ideas to smuggle the red sanders. Pushpa quickly becomes leader of red sanders smuggling network. While Pushpa is at his prime, a ruthless police Shekhawat takes charge as SP and ridicules Pushpa for his lineage', 'Allu Arjun', 'Rashmika Mandanna', 'Sukumar', 'images/pushpa.jpg', 2021, 'U/A', 179, 7.6, 'Action/Crime', 'Telugu'),
(5, 'Sita Ramam', 'An orphan soldier, Lieutenant Ram\'s life changes, after he gets a letter from a girl named Sita. He meets her and more.....', 'Dulquer Salman', 'Mrunal Thakur', 'Hanu Raghavapudi', 'images/Sita-Ramam.jpg', 2022, 'U/A', 163, 8.6, 'Romance/Costume Dram', 'Telugu'),
(6, 'Ala Vaikunthapurramuloo', 'Fate plays a vital role in connecting the life of Bantu, a son who seeks validation from his cold-hearted father with the life of Raj, whose millionaire father wishes that he was more assertive.', 'Allu Arjun', 'Pooja Hegde', 'Trivikram Srinivas', 'images/alaVaikunthapurramuloo.jpg', 2020, 'U/A', 163, 7.3, 'Action/Drama', 'Telugu'),
(7, 'Duvvada Jagannadham', 'Trained by a high profile cop, an encounter specialist masquerading as a Brahmin priest takes on a real estate crime organization after losing his uncle.', 'Allu Arjun', 'Pooja Hegde', 'Harish Shankar', 'images/DJ.jpg', 2017, 'U/A', 152, 5.9, 'Action/Thriller', 'Telugu'),
(8, 'S/O Satyamurthy', 'A rich businessman\'s son faces multiple challenges after he becomes the sole breadwinner of his family.', 'Allu Arjun', 'Samantha Ruth Prabhu', 'Trivikram Srinivas', 'images/s-oSatyamurthy.jpg', 2015, 'U/A', 162, 7, 'Drama/Action', 'Telugu'),
(9, 'Race Gurram', 'Two brothers have two different approaches to life. While one brother follows rules and regulations, the other does things his own way.', 'Allu Arjun', 'Shruti Haasan', 'Surender Reddy', 'images/raceGurram.jpg', 2014, 'U/A', 163, 7.1, 'Romance/Drama', 'Telugu'),
(10, 'Dasara', 'Set in the backdrop of Singareni coal mines near Godavarikhani of Telangana.', 'Nani', 'Keerthy Suresh', 'Srikanth Odela', 'images/dasara.jpg', 2023, 'U/A', 152, 7.5, 'Action/Drama', 'Telugu'),
(11, 'Ante Sundharaniki', 'A Hindu Brahmin falls for a Christian girl and they both lie to their parents, only for their lies to be revealed.', 'Nani', 'Nazriya Nazim', 'Vivek Athreya', 'images/anteSundharaniki.jpg', 2022, 'U/A', 173, 7.6, 'Romance/Comedy', 'Telugu'),
(13, 'Major', 'Based on the life of Major Sandeep Unnikrishnan, who was martyred in action during the November 2008 Mumbai attacks and was consequently awarded the Ashoka Chakra, India\'s highest peacetime gallantry award, on 26 January 2009.', 'Adivi Sesh', 'Saiee Manjrekar', 'Sashi Kiran Tikka', 'images/major.jpg', 2022, 'U/A', 150, 8.1, 'Action/Drama', 'Telugu'),
(15, 'The Warriorr', 'When Satya raises his voice against Guru, the latter revolts and bashes the former to hell. Satya makes a comeback as a cop to take revenge on Guru and put an end to his crime in Kurnool city.', 'Ram Pothineni', 'Krithi Shetty', 'N.Linguswamy', 'images/theWarriorr.jpg', 2022, 'U/A', 155, 4.7, 'Action/Crime', 'Telugu'),
(16, 'Waltair Veerayya', 'A fisherman who engages in smuggling accepts a request from a disheveled police officer in order to use it to his personal advantage', 'Chiranjeevi, Ravi Teja', 'Shruti Haasan', 'K.S. Ravindra', 'images/waltairVeerayya.jpg', 2023, 'U/A', 155, 6.4, 'Action/Drama', 'Telugu'),
(17, 'Godfather', 'After the death of a political leader, a mysterious man steps in to ascend the throne.', 'Chiranjeevi, Salman Khan', 'Nayanthara', 'Mohan Raja', 'images/godfather.jpg', 2022, 'U/A', 157, 5.2, 'Action/Crime', 'Telugu'),
(18, 'Veera Simha Reddy', 'The father of Veera Simha Reddy is a revered man in a village and his son Bala Simha Reddy settles in the USA.When his father gets killed in the village politics, Bala Simha returns to India and takes revenge on who killed his father.', 'Nandamuri Balakrishna', 'Shruti Haasan', 'Gopichand Malineni', 'images/veerasimhareddy.jpg', 2023, 'U/A', 170, 5, 'Action/Drama', 'Telugu'),
(19, 'Akhanda', 'Balakrishna plays a fierce devotee of Lord Shiva, who stands tall against evildoers.', 'Nandamuri Balakrishna', 'Pragya Jaiswal', 'Boyapati Srinu', 'images/akhanda.jpg', 2021, 'U/A', 167, 6.9, 'Action/Drama', 'Telugu'),
(20, 'Sarkaru Vaari Paata', 'After being conned by the woman he loves, a finance agent arrives in India from USA to retrieve his money from the woman\'s father who is a powerful MP and industrialist.', 'Mahesh Babu', 'Keerthy Suresh', 'Parasuram', 'images/sarkaruVaariPaata.jpg', 2022, 'U/A', 162, 5.6, 'Action/Drama', 'Telugu'),
(21, 'Bheeshma', 'Bheeshma is a young bachelor who is desperate to find a girlfriend. One day, he meets and falls in love with Chaitra, who works for an organics company that coincidentally carries his first name.', 'Nithiin', 'Rashmika Mandanna', 'Venky Kudumula', 'images/bheeshma.jpg', 2020, 'U/A', 150, 6.6, 'Romance/Comedy', 'Telugu'),
(22, 'Love Today', 'Two young lovers, who are made to exchange their phones for a day and what happens due to that.', 'Pradeep Ranganathan', 'Ivana', 'Pradeep Ranganathan', 'images/loveToday.jpg', 2022, 'U/A', 154, 8.1, 'Romance/Comedy', 'Tamil'),
(23, 'Love Story', 'A love story of a boy and girl who move to the city from their village to pursue their dreams.', 'Naga Chaitanya Akkineni', 'Sai Pallavi', 'Sekhar Kammula', 'images/loveStory.jpg', 2021, 'U/A', 155, 6.8, 'Romance', 'Telugu'),
(24, 'Varudu Kaavalenu', 'Bhoomi runs an eco-friendly start up business in Hyderabad. Her mother wants her to marry soon and is on the hunt for suitable grooms but Bhoomi is reluctant towards marriage.', 'Naga Shaurya', 'Ritu Varma', 'Lakshmi Sowjanya', 'images/varuduKaavalenu.jpg', 2021, 'U/A', 135, 6.4, 'Romance', 'Telugu'),
(25, 'Bheemla Nayak', 'Things change when the egos of an upright police officer and a retired army havildar clash.', 'Pawan Kalyan', 'Nithya Menen', 'Saagar K Chandra', 'images/bheemlaNayak.jpg', 2022, 'U/A', 130, 6.3, 'Action/Drama', 'Telugu'),
(26, 'Chup', '2bdiub3hvjdx 3hjw xjw e3xcv3fjlcl 3vf3', 'Dulquer Salmaan', 'Shreya Dhanwanthary', 'R.Balki', 'images/chup.jpg', 2022, 'U/A', 135, 7.6, 'Crime/Mystery', 'Hindi'),
(27, 'Brahmastra Part One: Shiva', 'This is the story of Shiva who sets out in search of love and self-discovery. During his journey, he has to face many evil forces that threaten our existence.', 'Ranbir Kapoor', 'Alia Bhatt', 'Ayan Mukerji', 'images/brahmastra.jpg', 2022, 'U/A', 167, 5.5, 'Action/Adventure', 'Hindi'),
(28, 'Bhediya', 'Set in the forests of Arunachal, Bhediya is a story of Bhaskar, a man who gets bitten by a wolf, and begins to transform into the creature. As Bhaskar and his buddies try to find answers, a bunch of twists, turns, and laughs ensue.', 'Varun Dhawan', 'Kriti Sanon', 'Amar Kaushik', 'images/bhediya.jpg', 2022, 'U/A', 156, 7.3, 'Comedy/Horror', 'Hindi'),
(29, 'Tu Jhoothi Main Makkaar', 'Madness ensues when a \'player\' in the world of romantic relationships finds a girl who\'s a worthy opponent, that believes love is a battle of wits.', 'Ranbir Kapoor', 'Shradda Kapoor', 'Luv Ranjan', 'images/tuJhoothiMainMakkaar.jpg', 2023, 'U/A', 150, 6.7, 'Romance/Comedy', 'Hindi'),
(30, 'Shamshera', 'In the fictitious city of Kaza, a warrior tribe is imprisoned, enslaved and tortured by a ruthless authoritarian Shudh Singh. Shamshera is a legend for his tribe who relentlessly fights for his tribe\'s freedom and dignity.', 'Ranbir Kapoor', 'Vaani Kapoor', 'Karan Malhotra', 'images/shamshera.jpg', 2022, 'U/A', 178, 4.7, 'Action/Adventure', 'Hindi'),
(31, 'Shershaah', 'Shershaah is the story of PVC awardee Indian soldier Capt. Vikram Batra, whose bravery and unflinching courage in chasing the Pakistani soldiers out of Indian territory contributed immensely in India finally winning the Kargil War in 1999.', 'Sidharth Malhotra', 'Kiara Advani', 'Vishnuvardhan', 'images/shershaah.jpg', 2021, 'U/A', 135, 8.3, 'Action/Drama', 'Hindi'),
(32, 'Dil Bechara', 'The emotional journey of two hopelessly-in-love youngsters; a young girl, Kizie, who is suffering from cancer; and Manny, a boy Kizie meets at a support group.', 'Sushant Singh Rajput', 'Sanjana Sanghi', 'Mukesh Chhabra', 'images/dilBechara.jpg', 2020, 'U/A', 101, 8.4, 'Romance/Comedy', 'Hindi'),
(33, 'Chhichhore', 'A tragic incident forces Anirudh, a middle-aged man, to take a trip down memory lane and reminisce his college days along with his friends, who were labelled as losers.', 'Sushant Singh Rajput', 'Shradda Kapoor', 'Nitesh Tiwari', 'images/chhichhore.jpg', 2019, 'U/A', 163, 8.3, 'Romance/Comedy', 'Hindi'),
(34, 'Freddy', 'The lines between love and obsession blur in this romantic thriller packed with unpredictable twists and sharp turns.', 'Kartik Aaryan', 'Alaya F', 'Shashanka Ghosh', 'images/freddy.jpg', 2022, 'U/A', 124, 7.5, 'Romance/Thriller', 'Hindi'),
(35, 'Atrangi Re', 'A Tamil boy meets a girl from Bihar, what follows is a love story for the ages. A non-linear narrative of two romances running in parallel from different timelines.', 'Danush, Akshay Kumar', 'Sara Ali Khan', 'Aanand L. Rai', 'images/atrangiRe.jpg', 2021, 'U/A', 138, 6.5, 'Romance/Drama', 'Hindi'),
(36, 'Dilwale', 'The siblings of two estranged lovers fall for each other, unaware of the violent past that drove them apart.', 'Shah Rukh Khan, Varun Dhawan', 'Kajol', 'Rohit Shetty', 'images/dilwale.jpg', 2015, 'U/A', 158, 5, 'Action/Drama', 'Hindi'),
(37, 'Badrinath Ki Dulhania', 'Badrinath is looking for a typical bride; Vaidehi is looking for an independent life. Together they must break with tradition and redefine their role.', 'Varun Dhawan', 'Alia Bhatt', 'Shashank Khaitan', 'images/badrinathKiDulhania.jpg', 2017, 'U/A', 139, 6.1, 'Romance/Comedy', 'Hindi'),
(38, 'Shiddat', 'A passionate love story involving two couples which highlights the contrast between a regular, mature yet egoistic husband and a unique, happy go lucky, enamored, overzealous boy chasing after the love of his life.', 'Sunny Kaushal', 'Radhika Madan', 'Kunal Deshmukh', 'images/shiddat.jpg', 2021, 'U/A', 146, 7.7, 'Romance', 'Hindi'),
(39, 'Ponniyin Selvan: Part One', 'Vandiyathevan sets out to cross the Chola land to deliver a message from the Crown Prince Aditha Karikalan. Kundavai attempts to establish political peace as vassals and petty chieftains plot against the throne. Unrest grips the land as a long-tailed comet arrives, signalling a time of turmoil.', 'Vikram, Jayam Ravi, Karthi', 'Aishwarya Rai Bachchan, Trisha Krishnan', 'Mani Ratnam', 'images/Ponniyin_Selvan_I.jpg', 2022, 'U/A', 167, 7.7, 'Action/Adventure', 'Tamil'),
(40, 'Vikram', 'A high-octane action film where a special investigator is assigned a case of serial Killings, he finds the case is not what it seems to be and leading down this path is only going to end in a war between everyone involved.', 'Kamal Haasan, Fahadh Fassil', 'Gayathrie', 'Lokesh Kangaraj', 'images/vikram.jpg', 2022, 'U/A', 175, 8.3, 'Action/Crime', 'Tamil'),
(41, 'Sardar', 'A spy, who is estranged from his family due to a mission, suddenly meets his police officer son.', 'Karthi', 'Raashi Khanna', 'P.S. Mithran', 'images/sardar.jpg', 2022, 'U/A', 166, 7.5, 'Action/Drama', 'Tamil'),
(42, 'Thunivu', 'A mysterious mastermind - Daredevil and his team forms a plan and commits bank heist to find the corporate looted people\'s money.', 'Ajith Kumar', 'Manju Warrier', 'H. Vinoth', 'images/thunivu.jpg', 2023, 'U/A', 146, 6.1, 'Action/Adventure', 'Tamil'),
(43, 'Vaathi', 'The life of a young man and his struggles against the privatization of education.', 'Danush', 'Samyuktha Menon', 'Venky Atluri', 'images/vaathi.jpg', 2023, 'U/A', 139, 7.4, 'Action/Drama', 'Tamil'),
(44, 'Thiruchitrambalam', 'Thiruchitrambalam lives with his father and grandfather. He blames his father for the loss of his mother and sister and is not on good terms with the latter. Meanwhile, his love life is not so successful.', 'Danush', 'Nithya Menon', 'Mithran Jawahar', 'images/thiru.jpg', 2022, 'U/A', 131, 7.9, 'Romance/Comedy', 'Tamil'),
(45, 'Varisu', 'Vijay Rajendran is a happy to-go lucky man. Things change when his father becomes terminally ill, and he is left to manage his business empire.', 'Joseph Vijay', 'Rashmika Mandanna', '\r\nVamshi Paidipally', 'images/varisu.jpg', 2023, 'U/A', 169, 6.1, 'Action,Drama', 'Tamil'),
(46, 'Master', 'An alcoholic professor is sent to a juvenile school, where he clashes with a gangster who uses the school children for criminal activities.', 'Joseph Vijay', 'Malavika Mohanan', '\r\nLokesh Kanagaraj', 'images/master.jpg', 2021, 'U/A', 177, 7.3, 'Action,Crime,Thriller', 'Tamil'),
(47, 'Bigil', 'Rayappan a local don lives in Chennai city slum. He does lot of social welfare for the people in his area. Rayappan’s son Michael, a Football player along with his friends more.....', 'Joseph Vijay', 'Nayanthara', 'Atlee', 'images/bigil.jpg', 2019, 'U/A', 177, 6.7, 'Drama', 'Tamil'),
(48, 'Sarkar', 'An NRI businessman learns his vote has been cast by someone else and decides to investigate the matter, eventually finding himself pitted against two corrupt politicians.\r\n', 'Joseph Vijay', 'Keerthy Suresh', 'A.R. Murugadoss', 'images/sarkar.jpg', 2018, 'U/A', 163, 6.7, 'Action,Drama', 'Tamil'),
(49, 'F9 The Fast Saga', 'Dom and the crew must take on an international terrorist who turns out to be Dom and Mia's estranged brother.', 'Vin Diesel', 'Michelle Rodriguez\r\n', 'Justin Lin', 'images/F9.jpg', 2021, 'U/A', 143, 5.2, 'Action,Crime,Thriller', 'English'),
(50, 'After', 'A young woman falls for a guy with a dark secret and the two embark on a rocky relationship. Based on the novel by Anna Todd.', 'Hero Fiennes Tiffin', 'Josephine Langford', 'Jenny Gage', 'images/after.png', 2019, 'A', 105, 5.3, 'Romance,Drama', 'English'),
(51, 'Titanic', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.', 'Leonardo DiCaprio', 'Kate Winslet', 'James Cameron', 'images/titanic2.jpg', 1997, 'A', 194, 7.9, 'Romance,love,Drama', 'English'),
(52, 'Thor Ragnarok', 'Imprisoned on the planet Sakaar, Thor must race against time to return to Asgard and stop Ragnarök, the destruction of his world, at the hands of the powerful and ruthless villain Hela.', 'Chris Hemsworth', 'Tessa Thompson', 'Taika Waititi', 'images/Thor.jpg', 2017, 'U/A', 130, 7.9, 'Action,Comedy,Adventre', 'English'),
(53, 'Interstellar', 'A team of explorers travel through a wormhole in space in an attempt to ensure humanity\'s survival.', 'Matthew McConaughey', 'Anne Hathaway\r\n', 'Christopher Nolan', 'images/interstellar.jpg', 2014, 'U/A', 169, 8.6, 'Drama,Adventre,Sci-Fi', 'English'),
(54, 'Hridayam', 'The emotional journey of Arun, his carefree bachelor days in engineering college, and how he matures through various phases of life.', 'Pranav Mohanlal', 'Kalyani Priyadarshan', '\r\nVineeth Sreenivasan', 'images/Hridayam.jpg', 2022, 'U/A', 172, 8.1, 'Drama,Romance,Musical', 'Malayalam'),
(55, 'Cold Case', 'The film tells the riveting story of a complex murder case, parallelly investigated by a police officer and an investigative journalist in their own way and more........', 'Prithviraj Sukumaran\r\n', 'Aditi Balan,Athmeeya Rajan\r\n\r\n', 'Tanu Balak', 'images/coldcase.jpg', 2021, 'U/A', 139, 6, 'Horror,Thriller', 'Malayalam'),
(56, 'Trance', 'A disheartened motivational speaker gets hired by a corporate to become a preacher until his live stint on television puts him and his service under the scanner.', 'Fahadh Faasil', 'Nazriya Nazim\r\n', '\r\nAnwar Rasheed', 'images/trance.jpg', 2020, 'U/A', 170, 7.3, 'Drama,Thriller', 'Malayalam'),
(57, '100 Days of Love', 'A man, who just got dumped, falls in love with another girl who he bullied in his childhood.\r\n', 'Dulquer Salmaan', 'Nithya Menen\r\n', 'Jenuse Mohamed', 'images/100days.jpg', 2015, 'U/A', 153, 6.6, 'Romance,Comedy', 'Malayalam'),
(58, 'Kurup', 'Kurup is a criminal who is on the run from police after murdering someone for life insurance fraud.', 'Dulquer Salmaan\r\n', 'Sobhita Dhulipala\r\n', '\r\nSrinath Rajendran', 'images/kurup.jpg', 2021, 'U/A', 140, 7, 'Thriller,Crime,Biography', 'Malayalam'),
(59, 'Kantara', 'When greed paves the way for betrayal, scheming and murder, a young tribal reluctantly dons the traditions of his ancestors to seek justice.', 'Rishab Shetty', 'Sapthami Gowda\r\n', 'Rishab Shetty', 'images/kantara.jpg', 2022, 'U/A', 148, 8.3, 'Action,Drama', 'Kannada'),
(60, 'KGF 1', 'In the 1970s, a gangster goes undercover as a slave to assassinate the owner of a notorious gold mine.', 'Yash\r\n', 'Srinidhi Shetty\r\n', 'Prashanth Neel', 'images/kgf1.jpg', 2018, 'U/A', 156, 8.2, 'Action,Crime,Drama', 'Kannada'),
(61, 'Bahubali 2', 'When Shiva, the son of Bahubali, learns about his heritage, he begins to look for answers. His story is juxtaposed with past events that unfolded in the Mahishmati Kingdom.', 'Prabhas', 'Anushka Shetty,Tamannah', 'SS Rajamouli', 'images/bahu2.jpg', 2017, 'U/A', 167, 8.2, 'Action,Drama', 'Telugu'),
(62, 'Bahubali', 'In ancient India, an adventurous and daring man becomes involved in a decades-old feud between two warring peoples.', 'Prabhas', 'Anushka Shetty,Tamannah', 'SS Rajamouli', 'images/bahu1.jpg', 2015, 'U/A', 159, 8, 'Action,Drama', 'Telugu');
(63, 'Salaar', 'In a dystopian city, two childhood friends end up on opposite sides of a conflict. One rises to reclaim his throne with blood and power.', 'Prabhas,Prithviraj Sukumaran', 'Shruti Haasan', 'Prashanth Neel', 'images/salaar.jpg', 2023, 'U/A', 174, 7.0, 'Action,Thriller', 'Telugu'),
(64, 'Kalki 2898 AD', 'A dystopian future blends with Indian mythology as a mysterious warrior rises to fight against a powerful empire.', 'Prabhas,Amitabh Bachchan,Kamal Haasan', 'Deepika Padukone', 'Nag Ashwin', 'images/kalki.jpeg', 2024, 'U/A', 180, 8.2, 'Sci-Fi,Action,Adventure', 'Telugu'),
(65, 'Stree 2', 'A headless spirit terrorizes Chanderi by abducting men, leading a group of friends to uncover the secret and end her curse.', 'Rajkummar Rao,Pankaj Tripathi', 'Shraddha Kapoor', 'Amar Kaushik', 'images/stree2.jpg', 2024, 'U/A', 135, 7.5, 'Comedy,Horror', 'Hindi'),
(66, 'Munjya', 'A young man unwittingly awakens a vengeful spirit named Munjya who wants to marry him, leading to comedic chaos.', 'Abhay Verma', 'Sharvari Wagh', 'Aditya Sarpotdar', 'images/munjya.jpg', 2024, 'U/A', 140, 7.1, 'Horror,Comedy,Fantasy', 'Hindi'),
(67, 'Game Changer', 'An IAS officer fights systemic corruption while his father’s political legacy complicates his journey.', 'Ram Charan', 'Kiara Advani', 'Shankar', 'images/gamechanger.jpg', 2025, 'U/A', 165, 7.3, 'Action,Drama', 'Telugu'),
(68, 'HIT 3', 'A seasoned officer from the Homicide Intervention Team returns to solve a series of brutal murders tied to his past.', 'Nani', 'Srinidhi Shetty', 'Sailesh Kolanu', 'images/hit3.jpg', 2025, 'U/A', 142, 7.4, 'Thriller,Crime,Action', 'Telugu'),
(69, 'Deadpool & Wolverine', 'Deadpool joins forces with Wolverine in a multiverse-spanning adventure full of chaos, humor, and R-rated action.', 'Ryan Reynolds,Hugh Jackman', 'Morena Baccarin,Emma Corrin', 'Shawn Levy', 'images/deadpool&wolverine.jpg', 2024, 'A', 127, 8.8, 'Action,Comedy,Fantasy', 'English'),
(70, 'Inside Out 2', 'Riley enters her teenage years and new emotions like Anxiety and Envy join the original crew in her mind’s headquarters.', 'Amy Poehler,Tony Hale', 'Maya Hawke,Liza Lapira', 'Kelsey Mann', 'images/insideout2.jpg', 2024, 'U', 96, 7.6, 'Animation,Adventure,Comedy', 'English'),
(71, 'Dune: Part Two', 'Paul Atreides unites with the Fremen to seek revenge and fulfill his destiny as war erupts across Arrakis.', 'Timothée Chalamet,Josh Brolin,Austin Butler', 'Zendaya,Rebecca Ferguson,Florence Pugh', 'Denis Villeneuve', 'images/dune2.jpg', 2024, 'U/A', 166, 8.7, 'Sci-Fi,Action,Adventure', 'English'),
(72, 'Mufasa: The Lion King', 'The origin story of Mufasa, Simba’s father, exploring his rise from orphaned cub to king of the Pride Lands.', 'Aaron Pierre,Kelvin Harrison Jr.', 'Tiffany Boone', 'Barry Jenkins', 'images/mufasa.jpg', 2024, 'U', 118, 7.1, 'Animation,Drama,Adventure', 'English'),
(73, 'F1', 'An aging Formula 1 driver returns to racing and mentors a young teammate, blending speed, glory, and drama.', 'Brad Pitt,Javier Bardem', 'Kerry Condon', 'Joseph Kosinski', 'images/F1.jpg', 2025, 'U/A', 130, 7.5, 'Action,Sport,Drama', 'English'),
(74, 'Venom: The Last Dance', 'Eddie Brock faces a deadly threat that puts both him and Venom at odds with forces from their past.', 'Tom Hardy', 'Juno Temple,Chiwetel Ejiofor', 'Kelly Marcel', 'images/venom.jpg', 2024, 'U/A', 112, 7.2, 'Action,Sci-Fi,Thriller', 'English'),
(75, 'Godzilla x Kong: The New Empire', 'Godzilla and Kong must team up to face a mysterious threat hidden deep within Hollow Earth.', 'Rebecca Hall,Brian Tyree Henry,Dan Stevens', 'Fala Chen', 'Adam Wingard', 'images/Godzilla-vs-Kong.jpg', 2024, 'U/A', 115, 6.8, 'Action,Sci-Fi,Adventure', 'English'),
(76, 'Thunderbolts', 'A team of anti-heroes from the MCU is assembled by the government to take on covert missions and morally gray threats.', 'Sebastian Stan,Wyatt Russell,David Harbour', 'Florence Pugh,Hannah John-Kamen', 'Jake Schreier', 'images/thunderbolts.png', 2025, 'U/A', 128, 7.3, 'Action,Adventure,Sci-Fi', 'English'),
(77, 'Retro', 'A Tamil sci-fi thriller set in a retro-futuristic world, featuring time travel, intense action, and a gripping narrative.', 'Suriya', 'Pooja Hedge', 'Siva', 'images/retro.png', 2024, 'U/A', 150, 7.8, 'Sci-Fi,Thriller,Action', 'Tamil'),
(78, 'Mission: Impossible – Dead Reckoning Part Two', 'Ethan Hunt faces his most dangerous mission yet as a global threat challenges everything he stands for.', 'Tom Cruise,Simon Pegg,Ving Rhames', 'Rebecca Ferguson,Vanessa Kirby', 'Christopher McQuarrie', 'images/MI2.png', 2025, 'U/A', 165, 8.1, 'Action,Thriller,Adventure', 'English'),
(79, 'Final Destination 6', 'A new group of individuals narrowly escape a catastrophic event, only to be hunted by death itself in creative ways.', 'TBA', 'TBA', 'Zach Lipovsky,Adam B. Stein', 'images/finaldestination.png', 2025, 'A', 105, 6.9, 'Horror,Thriller', 'English'),
(80, 'Kesari Chapter 2', 'Following the heroic Battle of Saragarhi, a new conflict emerges that puts Sikh bravery and valor to the test.', 'Akshay Kumar', 'Parineeti Chopra', 'Anurag Singh', 'images/kesari2.png', 2025, 'U/A', 148, 7.6, 'Action,Drama,History', 'Hindi'),
(81, 'Chaava', 'The historical story of Chhatrapati Sambhaji Maharaj and his fierce resistance against the Mughal empire.', 'Vicky Kaushal', 'Rashmika Mandanna', 'Laxman Utekar', 'images/chaava.jpg', 2024, 'U/A', 155, 7.9, 'Historical,Drama,Action', 'Hindi'),


--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `mov_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
