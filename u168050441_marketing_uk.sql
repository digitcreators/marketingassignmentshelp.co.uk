-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2026 at 09:45 AM
-- Server version: 11.8.3-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u168050441_marketing_uk`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_levels`
--

CREATE TABLE `academic_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academic_levels`
--

INSERT INTO `academic_levels` (`id`, `name`) VALUES
(1, 'High School'),
(3, 'Master'),
(4, 'Mphil/PhD'),
(2, 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `description` longtext NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `slug`, `canonical`, `meta_description`, `description`, `image_path`, `user_id`, `is_published`, `created_at`, `updated_at`) VALUES
(4, 8, 'Can Turnitin Detect ChatGPT? All You Need to Know', 'can-turnitin-detect-chatgpt', 'https://assignmenthelpuk.co.uk/can-turnitin-detect-chatgpt', 'Can Turnitin detect ChatGPT? Understanding the importance and use of Turnitin, how it works, and its AI detection. How accurate is Turnitin in AI detection?', '<p>Most of us believe that Chat GPT is a great blessing since it helps to complete daily business tasks and academic assignments. However, when it comes to Turnitin, Chat GPT is the biggest enemy. Can Turnitin detect ChatGPT? The answer is “Yes” since Turnitin is designed to detect AI content and values human-written content. Therefore, if you need help with your assignments seek help from writing experts rather than using AI tools to do that for you.&nbsp;</p><h2>Does Turnitin Detect AI-Generated Content from Other AI Tools?&nbsp;</h2><p><br>This is a common question that arises in people’s minds whether Turnitin detects AI-generated content from other tools or not. Turnitin was initially built to check similar data from its existing database. In other words, it was designed to identify plagiarism in any content. However, when AI came into being, Turnitin updated its features to advanced AI detection which helps it detect AI-generated content from all AI tools.&nbsp;</p><p>After this important update, Turnitin has become capable of detecting AI in content with 97% to 98% precision. So, does Turnitin detect Chat GPT? Yes, it can detect AI-generated content from all AI tools.&nbsp;</p><p>If you want to hire an expert to write assignments for free from plagiarism and AI content, choose Assignment Help UK. Our professional assignment writers check every assignment through Turnitin to ensure its authenticity.&nbsp;</p><h2>How Does Turnitin Work? Is It Accurate?&nbsp;</h2><p><br>Turnitin has a 98% precision rate, which makes it a highly reliable tool. It is a web-based software that identifies plagiarism along with AI-generated content. In many universities in the UK, teachers and professors use Turnitin to scan students’ assignment documents to ensure their originality. This software has a large database that processes the whole document in a digital format and checks the similarity in students’ assignments. By using proper algorithms, Turnitin scans everything present in the document.&nbsp;</p><p>After the complete process, Turnitin provides an original report that showcases the percentage of similarity and AI-generated content present in the document.&nbsp;</p><h3>Does Turnitin Detect Paraphrased Content?</h3><p><br>The latest Turnitin update has sharpened the AI detection tool. So, can Turnitin detect Chat GPT if you paraphrase? Yes, Turnitin can identify paraphrased content that you took from Chat GPT. If you think that you are smart enough, then Turnitin is far smarter than you. This software is built in such a way that it can detect all kinds of AI-generated content as well as paraphrased content.</p><h3>Is it Possible to Write an Excellent Assignment Without Using AI?</h3><p><br>Writing an excellent and stand-out assignment without using AI is not a difficult task since many students have been writing assignments before the advent of AI. Furthermore, you can easily write original assignments or seek help from our professionals, whether you need help with <a href=\"https://assignmenthelpuk.co.uk/dissertation-writing-help\">dissertation writing</a> or <a href=\"https://assignmenthelpuk.co.uk/college-essay-writing-service\">college essay writing</a>.&nbsp;</p><h3>Easy Tips on Writing Original Content</h3><p><br>Writing original content should not be difficult. However, many students still face challenges even after several revisions. With so many tries, they still get plagiarism and AI. But there is no need to worry since we are going to discuss easy tips that will help you create original and quality content:</p><h4>Know Your Audience</h4><p><br>The most important step in creating original content is connecting with your audience. When you are crafting content, you must remember to add facts that connect to your audience. Also, you must understand the needs of your audience and write content accordingly. This will help make your content engaging and authentic.&nbsp;</p><h4>Research Your Topics&nbsp;</h4><p><br>You can research topics from various sources, such as Google Scholar, rather than using AI tools to research data. Researching content from various sources will help provide an opportunity to collect plenty of data for your assignment. You can also collect data and references from the top UK universities, including Cambridge and Oxford.&nbsp;</p><h4>Brainstorm Ideas</h4><p><br>Brainstorming new ideas helps add creativity to your work. This easy tip will not only help you craft engaging content but will also bring creativity to your work. Brainstorming ideas also helps bring creativity to your thinking which ultimately enhances the quality of work.&nbsp;</p><h4>Add Visuals to Your Work</h4><p><br>Elements like images and videos play a crucial role in making your content engaging. They help make your content valuable and original.</p><h4>Quality Over Quantity</h4><p><br>Your content may be effective because of many different factors. However, the quality of your content will always remain at the top. Therefore, rather than too much content stuffing, you should focus more on its quality.</p><h4>Use Your Words</h4><p><br>When writing an assignment, you must focus on your natural way of writing. The more natural words you use in your assignment, the more you make it authentic. Making your tone unique and using different perspectives will further make your content original.</p><h3>Conclusion</h3><p><br>If you are looking for top platforms for the <a href=\"https://assignmenthelpuk.co.uk/academic-writing-service\">best academic writing in UK</a>, you must choose Assignment Help UK. We have a team of expert assignment writers who focus on crafting original content rather than using AI. They ensure that every assignment is written through proper brainstorming and critical analysis, making it stand out.&nbsp;</p>', 'blogs/1745653975.webp', 1, 1, '2025-04-26 07:52:55', '2025-04-29 09:00:57'),
(5, 8, 'How to Become a Teacher in UK? A Comprehensive Guide', 'how-to-become-a-teacher-in-uk', 'https://assignmenthelpuk.co.uk/how-to-become-a-teacher-in-uk', 'A step-by-step guide on becoming a teacher in the UK. Learn how to become the best and qualified teacher. Develop various teaching skills in your career.', '<p>If you are fond of teaching or want to become a teacher, you will have to have a lot of patience, energy, and excitement. You may also need to join a program of Initial Teacher Training (ITT), which will provide you with Qualified Teacher Status (QTS). In order to decide if teaching is right for you and bring success to your application, you should get school work experience. If you are not certain about which age or subject would be appropriate for you, you can reach on to the schools in your area by contacting them and asking to see in a classroom.&nbsp;</p><h2>How to Become a Teacher in the UK?<br>&nbsp;</h2><p>To become a teacher in the UK, you need to follow the ITT program, as discussed earlier. These programs come in various forms and timings, but each of them contains theory and practical classroom experience. The following are the easy steps in how to get into teaching in the UK:</p><h3>Check your teaching qualifications<br>&nbsp;</h3><p>To become a teacher or train teachers, you must have GCSEs at grade 4, or if you want to teach the primary, you need to have above English, Math, and Science. You may also need to have an undergraduate degree in any course to teach primary and secondary.&nbsp;</p><p>If you do not have a bachelor’s degree, you can opt for undergraduate teacher training in order to get a bachelor’s degree as well as Qualified Teacher Status (QTS). Or else, you may be qualified to choose a Teacher Degree Apprenticeship (TDA).&nbsp;</p><h3>Know about funding<br>&nbsp;</h3><p>The fees of undergraduate and postgraduate teacher training courses are nearly £9,535 each year. You can also pay the maintenance loans and tuition fees, even while having a student loan. If you are eager to teach certain subjects, you may be awarded a tax-free bursary or scholarship of up to £31k to support you as you are continuing your training.&nbsp;</p><h3>Consider getting experience&nbsp;<br>&nbsp;</h3><p>The life experience in school helps you know and decide whether teaching is the right profession for you and who you want to teach. This is the best way to know what the classroom is really like.&nbsp;</p><h3>Find a postgraduate teacher training course&nbsp;<br>&nbsp;</h3><p>The teacher training can grant you the Qualified Teacher Status (QTS) or QTS with a Postgraduate Certificate in Education (PGCE).&nbsp;</p><p>In the majority of primary and secondary schools in England, you are required to have QTS to teach, while you do not need a PGCE to teach. You can find out the age groups and specialism you could be eligible to teach.&nbsp;</p><p>If you lack a degree, you can discover undergraduate teacher training. While having a degree, you can find out how to select your teacher postgraduate training course.&nbsp;</p><h3>Apply for teacher training<br>&nbsp;</h3><p>You can easily apply for postgraduate training in October and undergraduate training in the month of May. Although you can apply throughout the entire year, however, some courses could be chosen quickly.&nbsp;</p><p>When you are selected for a particular course, your provider will check your background and criminal records. You need to pass these checks to start teaching students under 18.&nbsp;</p><h3>Start your teacher training<br>&nbsp;</h3><p>In all postgraduate training, there are classroom placements in a minimum of 2 schools. Your training may also contain certain theoretical learning which might be in a specific spot to your placements.&nbsp;</p><p>The majority of teacher training courses begin in September, with the lowest number of courses on other dates in the entire year.&nbsp;</p><p>While it takes 9 months for full-time courses and 18-24 months for part-time courses.&nbsp;</p><h3>Apply for a teaching role<br>&nbsp;</h3><p>Some teacher trainers suggest you begin thinking about job applications very early in your teacher training year.&nbsp;</p><h3>Start your career&nbsp;<br>&nbsp;</h3><p>Now, you are a qualified teacher! You have now begun your first teaching job, you will be called an early career teacher (ECT). In the initial 2 years as an early career teacher, you will get a lot of support, helping you find your feet. You will receive this benefit automatically as you work in a maintained school. However, many schools offer this for ECTs, too.&nbsp;</p><p>In addition, you will be assigned a mentor to guide you, boost your confidence, and assist in building your teaching skills. These skills may include behavior management and tips to adapt your teaching. This develops in your early teacher training. You will also be able to understand the rivalry of Cambridge vs Oxford.&nbsp;</p><p>If you are also looking for a <a href=\"https://assignmenthelpuk.co.uk/cv-writing-service\">CV writing help in UK</a>, you can visit our platform – Assignment Help UK for professional and get professional assistance.&nbsp;</p><h4>Conclusion<br>&nbsp;</h4><p>Starting a teaching career is a great option if you really want to become a mentor and help students achieve academic success. However, to apply as a teacher, you need to pass certain requirements, such as a bachelor’s degree, grades, and any previous teaching experience. Higher academic qualification will help you become a teacher of higher institutions such as colleges or universities. You will then also be able to provide students with various academic assistance such as <a href=\"https://assignmenthelpuk.co.uk/mba-assignment-help\">MBA assignment help</a> or research projects.&nbsp;</p>', 'blogs/1745918029.webp', 1, 1, '2025-04-29 09:13:49', '2025-04-29 09:36:50'),
(6, 2, 'How to Do a Research Project for Your Academic Study?', 'how-to-do-a-research-project-for-your-academic-study', 'https://assignmenthelpuk.co.uk/how-to-do-a-research-project-for-your-academic-study', 'Learn how to write an engaging research project for your academic study. Explore various sections and how to write each one of them with authenticity.', '<p>In most university degrees, a research report holds great importance. So, you must know what research project you are going to do and how you are going to do. In this guide, you will learn how to do a research project for your academic study and also what to do at each stage of the process. If you want to seek professional assistance with a research project, you can choose top-rated platforms, such as<strong> </strong>Assignment Help UK.&nbsp;</p><h2>What is a research project?&nbsp;</h2><p>&nbsp;</p><p>A research project is a lengthy essay that includes a question or statement for research. During the research analysis, you need to present your own ideas and research on a subject as well as analyse existing knowledge.</p><h2>How to Write a Research Project?&nbsp;</h2><p>&nbsp;</p><p>Writing a research project requires a lot of research and hard work. However, the following the easy tips below, you can write an engaging research project:&nbsp;</p><h3>Developing a research question or statement</h3><p>&nbsp;</p><p>The topics of a research project vary based on the course you study. However, excellent research project ideas are developed from the subjects you have great interest and knowledge in. The topic must be specific and should be too broad to cover fully with ease. For your ease, you can create sub-topics and questions quickly and complete research.&nbsp;</p><h3>Finding and evaluating sources&nbsp;</h3><p>&nbsp;</p><p>Secondary research is a broader part of your research project since it helps in crafting a literature review. The important thing is to use authentic sources for research to increase the validity of your project.&nbsp;</p><p>The following are the top examples of secondary sources:&nbsp;</p><ul><li>Peer-reviewed journals</li><li>Books</li><li>Scholarly articles</li><li>Newspapers</li></ul><p>The top sources to get information for your research project are the University library and Google Scholar. Both of these sources provide you with the best opportunity to find the most authentic information.&nbsp;</p><p>Secondary research is a broader part of your research project since it helps in crafting a literature review. The important thing is to use authentic sources for research to increase the validity of your project.&nbsp;</p><p>The following are the top examples of secondary sources:&nbsp;</p><ul><li>Peer-reviewed journals</li><li>Books</li><li>Scholarly articles</li><li>Newspapers</li></ul><p>The top sources to get information for your research project are the University library and Google Scholar. Both of these sources provide you with the best opportunity to find the most authentic information.&nbsp;</p><h3>Conducting research&nbsp;</h3><p>&nbsp;</p><p>In this step, you need to conduct primary research since this is the original research that you need to collect to further develop your research project. The following are the most common primary research below:&nbsp;</p><ul><li>Interviews and surveys</li><li>Focus groups</li><li>Experiments</li><li>Research diaries</li></ul><p>If you are looking for the best <a href=\"https://assignmenthelpuk.co.uk/research-paper-writing-service\">research paper writing in UK</a>, you must head towards Assignment Help UK. We have an expert team of academic writers who has served thousands of UK students.</p><h3>Research project format&nbsp;</h3><p>&nbsp;</p><p>Now, you have learned how to write a research project, so now you need to understand its format. The research paper format is highly important and must be used clearly. Without a clear format, you won’t be able to present your research perfectly.&nbsp;</p><p>There is a total of seven sections of a research paper, including introduction, literature review, methodology, findings and results, discussions, conclusions, as well as references. Also, you need to make sure that you cite the list of references correctly to avoid plagiarism.&nbsp;</p><h3>Introduction</h3><p>&nbsp;</p><p>In the introduction section, you present hypothesis and provide background for why you are doing the project. This is where you include relevant background information, introduce your research aims, and explain why the research is necessary.&nbsp;</p><h3>Literature review</h3><p>&nbsp;</p><p>The Literature review is another important part of a research project in which you analyse the current research within your area of subject. Moreover, you present your secondary research in this section. The following are the things that need to be included in the literature review:&nbsp;</p><ul><li>A description of the publications</li><li>A summary of the main points</li><li>An evaluation on the contribution to the study area</li><li>Potential flaws and gaps in the research</li></ul><p>&nbsp;</p><h3>Methodology</h3><p>&nbsp;</p><p>This methodology section in the research paper outlines the process of your data collection. In this section, you present your primary research. Also, the purpose of the methodology section is to answer two questions:&nbsp;</p><ul><li>Why did you select the research method you used?</li><li>How do these methods contribute to your research hypothesis?</li></ul><p>In this section, you will write about the ways through which you are going to achieve findings rather than writing about them. You will also need to state whether your research is qualitative, quantitative, or mixed.&nbsp;</p><p>Even after starting the data collection, this section of methodology must be written in the past tense.</p><h3>Findings and results&nbsp;</h3><p>&nbsp;</p><p>In this section, you will introduce the findings as well as the results of your primary research. This is the portion where you write a concise and factual summary of your findings with the help of tables and graphs where required.&nbsp;</p><h3>Discussion</h3><p>&nbsp;</p><p>In the discussion section, you write about your findings in detail. In this portion, you have to associate your results to your hypothesis, elaborating what you came up with your findings and the Importance of the research.&nbsp;</p><h3>Conclusion</h3><p>&nbsp;</p><p>In this section, you finally conclude your research project. This is where you will be restating your research aims and how you achieved them, as well as discussing the broader significance of your research project.&nbsp;</p><p>You should not bring new ideas into your conclusion since in this section, you only need to summarise what you already explained in the research project.&nbsp;</p><h3>References&nbsp;</h3><p>&nbsp;</p><p>Since you write research projects using your own ideas and with the collection of information and research from existing sources, you need to add a list of cited references correctly. A list of references will help the reader know the quality of your secondary research while also saving your content from plagiarism.&nbsp;</p><p>Don’t forget to read our blog on “<a href=\"https://assignmenthelpuk.co.uk/blogs/can-turnitin-detect-chatgpt\">Can Turnitin Detect Chat GPT</a>”</p><h4>Conclusion</h4><p>&nbsp;</p><p>If you want professional <a href=\"https://assignmenthelpuk.co.uk/report-writing-help\">report-writing help</a>, then you must choose our platform. Assignment Help UK is a leading spot that has a team of the most qualified writers. We also help in crafting outstanding research projects for all students since we check every document via Turnitin to ensure originality. The research project is an important part of your academic study that you must work on. The above-mentioned sections and format will help you craft a compelling research paper easily.</p>', 'blogs/1746530639.webp', 1, 1, '2025-05-06 11:23:59', '2025-05-06 11:36:02'),
(7, 8, 'Oxford vs Cambridge - Ultimate Comparison Guide', 'oxford-vs-cambridge-ultimate-comparison-guide', 'https://assignmenthelpuk.co.uk/oxford-vs-cambridge-ultimate-comparison-guide', 'Which is better, Oxford or Cambridge? Explore the significance and rivalry of the world’s leading universities. Make the right decision for your admission.', '<p>The University of Cambridge and the University of Oxford are the world’s top universities. These two universities hold a great position in academic excellence and research. Therefore, it isn\'t easy to know about Oxford vs Cambridge – the comparision between these two. If you want to apply for any one of these universities while not knowing which is right for you, this article will help you make the best decision.&nbsp;</p><p>&nbsp;</p><h2>Old Rivalry</h2><p>&nbsp;</p><p>Throughout history the Oxford and Cambridge have had the world’s famous rivalry since both of these institutions fought for academic superiority. The most famous battle between these two Universities is the Oxford vs Cambridge boat race. Furthermore, hopeful scholars can only apply to one of these two universities in the same year.&nbsp;</p><p>&nbsp;</p><h3>Comprehensive Comparison: University Rankings and Reputation</h3><p>&nbsp;</p><p>Now you might be thinking about which is better, Oxford or Cambridge. Although both of these universities are top-ranking but because of their extreme rivalry, these universities are ready to beat each other every year.&nbsp;</p><p>Normally, there is a difference in whose ranking you look at, but Times Higher Education Rankings are highly used and trusted worldwide. In 2024, Oxford University secured the first position in its global ranking, while Cambridge University stood at the fifth position just behind Stanford, MIT, and Harvard in the United States. Oxford University also beat Cambridge University in teaching quality.&nbsp;</p><p>These two universities were also matched in terms of research environment, a metric representing the status, output of a university\'s research.&nbsp;</p><p>On the other hand, in the QS World University Rankings, Cambridge stood in second place and Oxford in third for 2024.&nbsp;</p><p>&nbsp;</p><h3>Academic Offerings: Courses, Specialties, and Teaching Styles</h3><p>&nbsp;</p><p>One of the things that makes Oxford and Cambridge different from other universities is the importance of teaching in small groups. These two universities also offer several small-group tuition classes every week, known as ‘tutorials’ at Oxford and ‘supervisions’ at Cambridge. In these classes, you will work with a teacher along with one or two other students to conduct deep research on a topic and participate in complex discussions.&nbsp;</p><p>Both of these universities also provide a wide range of courses so that you can choose any one that offers an exclusive field of study. For example, you will find Architecture and Veterinary fields of study in Cambridge only, while you see Oxford offering only Find Art. Furthermore, you can join the Natural Sciences Program at Cambridge. On the other hand, Oxford allows you to choose a particular scientific course.&nbsp;</p><p>&nbsp;</p><h3>Admission Process: Entry Requirements and Application Insights</h3><p>&nbsp;</p><p>There are many different things to keep in mind when applying to university, including entry requirements, the documents as well and the logistics of exams or interviews. To get a clear overview of the university requirements, you can visit Assignment Help UK.&nbsp;</p><p>The entry requirements of Oxford and Cambridge are based on the course you choose but are typically some of the highest in the country. The requirement of Oxford commonly is AAA-A*A*A, while Cambridge requires A*AA-A*A*A.&nbsp;</p><p>Whereas with other UK universities, you must submit a UCAS application along with the application form as well as a personal statement. When applying to Oxford or Cambridge University, you need to focus more on your academic interests, goals, and achievements, while less on your daily activities.&nbsp;</p><p>Also, you must know that when applying for either Oxford or Cambridge University, you will get a short deadline approximately three months prior to the deadline of other universities. Also, when providing an application reference, you need to let your referee know earlier that you are applying to either of these universities so it won’t get too late. For Cambridge University, you have to fill out two extra forms, including My Cambridge Application and the Additional Applicant Information Form.</p><p>Moreover, prior to getting any interviews, you may be required to take some tests based on the course you are opting for, whether you choose either Oxford or Cambridge. After that, you may have to provide some examples of your written work, whether it is the current project or essay or a self-chosen written document regarding your field of study.&nbsp;</p><p>At last, you will be informed about whether you are invited for an interview. These interviews are generally held in the month of December, so you must get the invitation nearly two weeks in advance.&nbsp;</p><p>If you need help with <a href=\"https://assignmenthelpuk.co.uk/admission-essay-writing\">admission essay writing</a>, you can reach us easily online and our experts will help you craft the best piece.</p><p>&nbsp;</p><h3>Campus Life: Accommodation, Facilities, and Extracurricular Activities</h3><p>&nbsp;</p><p>At Cambridge, the majority of students are provided college accommodation where they stay for the whole three years of their undergraduate period. On the other hand, the Oxford colleges only offer accommodation for first-year students.&nbsp;</p><p>Both universities also provide many of the best facilities, both for your academic interests and extracurricular activities. You can spend a lot of time exploring Oxford’s Bodleian Library or the Cambridge University Library and many other specific libraries. If you are fond of sports, you can participate in different college or university-level sports groups.&nbsp;</p><p>If you want <a href=\"https://assignmenthelpuk.co.uk/university-assignment\">university assignment help in UK</a>, don’t forget to join our platforms – Assignment Help UK.&nbsp;</p><p>&nbsp;</p><h4>Conclusion</h4><p>&nbsp;</p><p>Both Oxford and Cambridge universities have their importance and values since both of them are leading institutions around the world. They offer a wide range of subjects and courses that you can opt for with strict admission requirements. Not student is lucky enough to get admission in either of these universities&nbsp; both of these universities are high demand for academic excellence and grades.</p><p>&nbsp;</p>', 'blogs/1747315885.webp', 1, 1, '2025-05-15 13:31:25', '2025-05-15 13:33:16');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `slug` varchar(225) NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Assignment Writing', 'assignment-writing', '2025-03-21 17:27:41', '2025-03-21 17:27:41'),
(2, 'Academic Writing', 'academic-writing', '2025-03-21 17:28:02', '2025-03-21 17:28:02'),
(3, 'Content Writing', 'content-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(4, 'Essay Writing', 'essay-writing', '2025-03-21 16:42:10', '2025-03-21 16:42:10'),
(5, 'Research Paper', 'research-paper', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(6, 'Admission', 'admission', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(7, 'Jobs', 'jobs', '2025-03-21 16:43:22', '2025-03-21 16:43:22'),
(8, 'Tips', 'tips', '2025-03-21 16:43:22', '2025-03-21 16:43:22');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `country`, `subject`, `phone`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'Ishmael Fowler', 'dc.usmankhaliq@gmail.com', 'Monaco', 'Expedita quis volupt', '+17067341512', 'Sed elit nesciunt', '2023-01-17 16:41:11', '2023-01-17 16:41:11'),
(2, 'ZEE', 'muhammad.webpro@gmail.com', 'Anguilla', 'Site audit report', '+9712509402729', 'Hi, I found a number of issues and technical flaws on your website.\r\n\r\nI can voluntarily make and send you an in-depth audit report. (costless).\r\n\r\nKindly reply if you are interested.\r\n\r\nCheers!\r\nMuhammad\r\n\r\nDigital Advertising & Website Development Guru\r\nAssisting organizations globally for 10+ years\r\n+1 (832) 548-5829', '2023-03-13 15:34:30', '2023-03-13 15:34:30'),
(3, 'Vincent Foster', 'vincent@copyfactory.us', 'United States', 'New content for your website', '+9719294292712', 'Hi, I noticed your last article was in July 2021. \r\n\r\nI want to offer a free blog article on your choice of topic to boost your blog activity.\r\n\r\nCan I send a few topic ideas your way?\r\n\r\nThank you for your time.\r\n\r\nBest regards,\r\nVincent.', '2023-03-20 20:37:30', '2023-03-20 20:37:30'),
(4, 'CMuhammad', 'muhammad.webpro+182@gmail.com', 'Bahamas', 'Layout concerns', '+9718416684153', 'Hi, I spotted a number of typos and technical errors on your web site.\r\n\r\nI can voluntarily prepare and send you a detailed audit report. (costless).\r\n\r\nKindly reply if you are interested.\r\n\r\nGood day!\r\nMuhammad\r\n\r\nSEO & Website Development Guru\r\nHelping businesses globally for 10+ years\r\n+1 (832) 548-5829', '2023-04-13 13:51:35', '2023-04-13 13:51:35'),
(5, 'Mr Kumar', 'offers@visionsoftwares.com', 'United Arab Emirates', 'Special Discount Offers on IT Software n Hardware.', '+971561199446', 'Better Deals This Week\r\n\r\nGreetings!!!💐\r\n\r\nSoftware Solutions\r\n\r\n🙋Cheque Printing Software - AED 500/- only\r\n\r\n🙋Accounting Software - AED 1,500/- only\r\n\r\n🙋HRMS Software - AED 3,000/- only\r\n\r\n🙋Autogarage Software - AED 3,000/- only\r\n\r\n🙋Recruitment Software - AED 4,000/- only\r\n\r\n🙋Cleaning Software - AED 3,000/- only\r\n\r\n🙋Real Estate Software - AED 3,000/- only\r\n\r\n🙋Clinic Management Software - AED 4,500/- onwards\r\n(DHA (NABIDH) / DOH (MALAFFI) / MOH (RIAYATI) Approved)\r\n\r\n🙋Homecare Management Software - AED 500/- per month onwards\r\n(DHA (NABIDH) / DOH (MALAFFI) / MOH (RIAYATI) Approved)\r\n\r\n🙋Laboratory Management Software - AED 4,500/- onwards\r\n(DHA (NABIDH) / DOH (MALAFFI) / MOH (RIAYATI) Approved)\r\n\r\n🙋Pharmacy Management Software - AED 2,500/- onwards\r\n(DHA (NABIDH) / DOH (MALAFFI) / MOH (RIAYATI) Approved)\r\n\r\n\r\nHardware Solutions\r\n\r\n🙋Fingerprint Biometric Fingerprint System - AED 999/- only\r\n\r\n🙋Door Access Biometric Fingerprint System - AED 1,999/- only\r\n\r\n🙋FaceID Biometric Fingerprint System - AED 1,999/- only\r\n\r\n🙋Samsung TAB 10\" with touch pen - AED 999/- only\r\n\r\n🙋Windows 10 / 11 License - AED 150/- only\r\n\r\n🙋Windows Server 2019 R2 License - AED 1,000/- only\r\n\r\n🙋Kaspersky Antivirus license - AED 50/- only\r\n\r\n🙋MS Office 2021 lifetime license - AED 125/- only\r\n\r\n🙋APC Back-UPS 750VA - AED 399/- only\r\n\r\n🙋Fortinet Firewall - AED 2,299/- only with license\r\n\r\n🙋NAS Backup device - AED 1,299/- only (4 TB)\r\n\r\n🙋PABX Call monitoring Software - AED 1,750/- only\r\n\r\n🙋Servers / Networking / CCTV / PABX solutions - depends on requirement\r\n\r\nMarketing Solutions\r\n\r\n🙋SMS Credits - 5.5 fils per sms\r\n\r\n🙋WhatsApp messages - AED 500/- month (400 messages per sim per day)\r\n\r\n🙋Website Designing - AED 1,000/- only (domain + hosting + emails + design + maintenance)\r\n\r\n🙋Website SEO - AED 650/- only\r\n\r\n🙋Facebook & Instagram Marketing - AED 1,000/- only\r\n\r\n🙋YouTube Videos Marketing - AED 1,000/- only\r\n\r\n🙋Digital Scanning files - 9 fils per document\r\n\r\n☎ Call / WhatsApp: 056-1199446 / 056-7777433 / 050-9505538\r\n\r\n📧 E-mail: sales@visionsoftwares.com\r\n\r\n📧 Website: https://www.visionsoftwares.com\r\n\r\nDownload our company profile from https://www.visionsoftwares.com/demos/vision_technologies_profile.pdf', '2023-04-24 17:27:04', '2023-04-24 17:27:04'),
(6, 'Sebastian K', 'pat@aneesho.com', 'United States', 'Design Work', '+18102440753', 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, brochures, logos, flyers, etc. for a fixed monthly fee. \r\n\r\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.', '2023-04-26 14:27:39', '2023-04-26 14:27:39'),
(7, 'Justin Wilson', 'justin@wiki-moderator.com', 'United States', 'Get A Wikipedia Page For Yourself Or For Your Company.', '+16282545380', 'Wikipedia is considered to be the World’s most significant tool for reference material. The Wiki links show up on the 1st page of Google 97% of the time. With a Page on one of the most revered reference tools, you are sure to get yourself or your business noticed. So if you\'re thinking of getting a Wikipedia Page created, it\'s the best time of the year.\r\n\r\nIf you are interested in getting more information just respond back to this email.\r\n\r\nThanks,\r\n\r\nJustin Wilson\r\nWiki Moderator\r\njustin@wiki-moderator.com\r\n\r\nRespond with stop to optout.', '2023-05-01 17:08:41', '2023-05-01 17:08:41'),
(8, 'Sebastian K', 'pat@aneesho.com', 'United States', 'Design Work', '+9718102440753', 'Just wanted to ask if you would be interested in getting external help with graphic design? We do all design work like banners, advertisements, brochures, logos, flyers, etc. for a fixed monthly fee. \r\n\r\nWe don\'t charge for each task. What kind of work do you need on a regular basis? Let me know and I\'ll share my portfolio with you.', '2023-05-26 15:31:18', '2023-05-26 15:31:18'),
(9, 'Sujith Noronha', 'sunoronha@hotmail.com', 'United Arab Emirates', 'Business plan for subsidiary office', '+971506980992', 'I am having own company in UAE and would like to set up a subsidiary.', '2023-06-11 13:25:26', '2023-06-11 13:25:26'),
(10, 'Justin Wilson', 'justin@wiki-moderator.com', 'United States', 'Get A Wikipedia Page For Yourself Or For Your Company.', '+16282545380', 'Wikipedia is considered to be the World’s most significant tool for reference material. The Wiki links show up on the 1st page of Google 97% of the time. With a Page on one of the most revered reference tools, you are sure to get yourself or your business noticed. So if you\'re thinking of getting a Wikipedia Page created, it\'s the best time of the year.\r\n\r\nIf you are interested in getting more information just respond back to this email.\r\n\r\nThanks,\r\n\r\nJustin Wilson\r\nWiki Moderator\r\njustin@wiki-moderator.com\r\n\r\nRespond with stop to optout.', '2023-06-27 21:06:12', '2023-06-27 21:06:12'),
(11, 'Laura', 'laura.a@agenciasubido.com', 'Afghanistan', 'Interesting Proposal', '+971655390359', 'Hello! My name is Laura and I am very happy to greet you.\r\n\r\nI wanted to write to you because I thought it would be interesting to discuss the possibility of your business appearing every month in digital newspapers as news to position it at the top of the internet, i.e. with real articles in the newspaper that are not marked as advertising and are not deleted.\r\n\r\nThe news is published by more than sixty newspapers of great authority to improve the positioning of your website and reputation.\r\n\r\n\r\n\r\nCould you provide me with a phone number to offer you up to two months free of charge?\r\n\r\nThank you', '2023-07-20 23:07:08', '2023-07-20 23:07:08'),
(12, 'Path of Ex', 'business@pathofex.com', 'United States', 'Collaboration', '+971589103021', 'Hi Team,\r\n\r\nI want to collaborate with you for my website Pathofex.com (260K Traffic)\r\n\r\nPathofex is Tech based website with DA 61 DR 60 and low spam score (260K Organic traffic from Google Search)\r\n\r\nHope you are interested in Guest Posting and Link Building or Review articles.\r\n\r\nContact Email: business@pathofex.com\r\n\r\nThanks', '2023-09-26 16:43:05', '2023-09-26 16:43:05'),
(13, 'EduQuill Academic Solutions', 'abhirupofeduquill@gmail.com', 'India', 'Writing Service Outsourcing', '+919434510939', 'Dear Sir\\Ma’am,\r\nEduQuill Academic Solutions provides high quality academic writing services across the globe. Our in-house teams of writers are experts of diverse educational domains. Plagiarism-free, high quality assignment writing services are our specialty. Deadline specific delivery and revision assistance are available as well. \r\nWe are currently providing multi-disciplinary assignment development services at various academic levels including PhD, Masters, PG, UG, school as well as professional spheres. We ensure optimal levels of professional and academic ethical compliance for our clients to secure maximum efficiency and satisfaction. You can avail the best possible services from us in terms of quality, timeliness and personalized demands at affordable prices. We are dedicated to maintenance of healthy and cordial relationships with all our customers and strive to provide them with the best experience through close communication, personalized support and assurance of quality and timeliness. \r\nDetails of our services, charges and terms are mentioned below.  We can provide free samples and address all your queries. Contact us today for academic writing and content development services. Have a great week.\r\n\r\nThanks and regards,\r\nEduQuill Academic Solutions\r\n\r\nContacts:\r\nEmail us at eduquill.sales@gmail.com for any query. \r\n\r\nReach out to our Executive Marketing Manager directly for free samples, placing and monitoring orders.\r\nEmail: abhirupofeduquill@gmail.com \r\nWhatsApp: +91-9434510939\r\nInstagram: https://www.instagram.com/eduquill/  \r\nSubjects:\r\nBusiness Management (all domains)           	Education	Law\r\nEngineering	Mathematics 	Data Science\r\nPsychology	Literature	Physical Science\r\nSociology	Accounting 	Bio Science\r\nHistory	Finance	Computer Science\r\nGeography 	Project Management	Environmental Science\r\nHealth	Philosophy	Political Science\r\nAssignment Services:\r\nDissertation	Research Paper	Thesis\r\nEssay	Case Study	Report\r\nReflective Writing	Formative Task	Summative Task\r\nCoursework	Homework assignment	Project\r\nOther Services:\r\nRe-sit Assignments	Re-formatting	PowerPoint Presentations\r\nReferencing and Citations	Plagiarism Checking	Poster Designing\r\nEditing	Plagiarism Removal	Spelling and Grammar Check\r\n\r\nPayment modes:\r\n•	Bank Transfer\r\n•	UPI\r\n•	Paypal\r\nCharges and Terms:\r\n•	Standard rate for written assignments is 0.80 INR per word.\r\n•	First five (5) assignments will be delivered on Instant Payment basis.\r\n•	Weekly and Bi-weekly payments accepted only.\r\n•	The mentioned rate is subject to change on the basis of nature and difficulty of specific tasks.\r\n•	Other services and additional contents will be charged separately.', '2023-11-08 05:35:19', '2023-11-08 05:35:19'),
(14, 'Jullian Jericho', 'jullian@thewiikiinc.com', 'United States', 'Get A Wikipedia Page For Yourself Or For Your Company.', '+18149805065', 'Wikipedia is considered to be the World’s most significant tool for reference material. The Wiki links show up on the 1st page of Google 97% of the time. With a Page on one of the most revered reference tools, you are sure to get yourself or your business noticed. So if you\'re thinking of getting a Wikipedia Page created, it\'s the best time of the year.\r\n\r\nIf you are interested in getting more information just respond back to this email.\r\n\r\nThanks,\r\n\r\nJullian Jericho\r\nThe Wiki Inc\r\njullian@thewiikiinc.com\r\n\r\nRespond with stop to optout.', '2023-11-15 20:48:09', '2023-11-15 20:48:09'),
(15, 'Muhammad Akram', 'iamfine890@gmail.com', 'Pakistan', 'Application for a tutor', '+923042474837', 'Hi there!  I would like to be a part of your exceptional team of academic writers. I have been writing for Middle East students for 4 years. Sadly, I am not directly linked with any service but rather work for a third person who is connected with another platform like yours. I want a platform like yours to work with. please do contact if you require my services. I have 15 years of teaching and 4 years of wiring experience. I am M.Phil. in applied Linguistics.        \r\n                                                                                                        Regard\r\n                                                                                                  Muhammad Akram', '2023-11-23 22:51:04', '2023-11-23 22:51:04'),
(16, 'Wonnnoa Shimray', 'won.shimray@ibeforum.com', 'India', 'Oman STEM Conferences', '+918892074964', 'Hi There,\r\n\r\nI am reaching out in regards to the upcoming Oman STEM Education Conference - Feb-24\r\n\r\nLet me know if you are keen to receive additional information.', '2023-11-30 10:51:05', '2023-11-30 10:51:05'),
(17, 'Wonnaola Shimray', 'won.shimray@ibeforum.com', 'India', 'Saudi SMART School Conference', '+918892074964', 'This is regarding the upcoming Saudi SMART School Conference scheduled on 21st – 22nd May 2024 in Riyadh, Saudi Arabia.\r\n\r\nDo let me know if you are keen to receive additional information.', '2024-02-27 14:50:42', '2024-02-27 14:50:42'),
(18, 'sindhu', 'paul.arvind@ibeforum.com', 'India', 'marketing', '+9718892074964', 'Hi Team Marketing, this is regarding the upcoming Qatar SMART Education Conference scheduled on 2nd - 3rd Oct 2024 in Qatar. Do let me know if you are keen to receive additional information', '2024-05-13 15:46:25', '2024-05-13 15:46:25'),
(19, 'priya', 'paul.arvind@ibeforum.com', 'India', 'marketing', '+918892074964', 'Hi Team Marketing, this is regarding the upcoming Qatar SMART Education Conference scheduled on 2nd - 3rd Oct 2024 in Qatar. Do let me know if you are keen to receive additional information', '2024-05-15 17:49:35', '2024-05-15 17:49:35'),
(20, 'Mohd Burhan', 'paul.arvind@ibeforum.com', 'India', 'Qatar SMART Education Conference 2024', '+9718892074964', 'Hi Team Marketing, this is regarding the upcoming Qatar SMART Education Conference scheduled \r\n  on 2nd - 3rd Oct 2024 in Qatar. Do let me know if you are keen to receive additional\r\n  information.', '2024-05-23 23:04:36', '2024-05-23 23:04:36'),
(21, 'Mohammed JUNAID', 'paul.arvind@ibeforum.com', 'India', 'Saudi STEM Education Conference 17th - 18th September', '+918892074964', 'Hi Team Marketing, this is regarding the upcoming Saudi STEM Education Conference scheduled on 17th - 18th\r\n September 2024 in Riyadh, Saudi Arabia. Do let me know if you are keen to receive additional information', '2024-05-30 19:19:30', '2024-05-30 19:19:30'),
(22, 'Syed', 'paul.arvind@ibeforum.com', 'United States', 'Saudi STEM Education Conference', '+918892074964', 'Saudi STEM Education Conference \r\n\r\n\r\n Hi Team Marketing, this is regarding the upcoming Saudi STEM Education Conference scheduled on 17th - 18th September 2024 in Riyadh, Saudi Arabia.\r\n Do let me know if you are keen to receive additional information.', '2024-06-06 15:38:49', '2024-06-06 15:38:49'),
(23, 'Krista Hannum', 'hannumkrista@gmail.com', 'India', 'Re: Proposal - SEO and Web design', '+9719830152514', 'Hi There,\r\nI hope you are doing well.\r\n \r\nI was going through your website & I personally see a lot of potential in your website & business. it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.\r\n \r\n1. Title Tag Optimizations are missing; I can add these to your site.\r\n2. Meta Tag Optimization descriptions are absent; I can add them too. \r\n3. Heading Tags Optimization - No problem getting those put in there.\r\n4. Targeted keywords are not placed into tags correctly.\r\n5. Alt / Image tags Optimization is not present - it would take me seconds to write these.\r\n6. Google Publisher is missing; I can set this up for you\r\n7. Custom 404 Page is missing and I can create this for you.\r\n8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.\r\n9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a\r\nspeed performance using GTMetrics or Pingdom\r\n10.Content Creation SEO work - As a native English speaker, I can create fantastic articles that\r\npeople will want to read and share; these will bring business to you by word of mouth rather than\r\nexpensive promotion via google paid search.\r\n \r\nIt will show you exactly what needs to be done to move you up in the rankings dramatically.\r\n \r\nWe can place your website on Google\'s 1st page (Yahoo, etc.)\r\n \r\nMay I send you Packages and Plan?\r\n \r\nIf you are interested, we can arrange a meeting via WhatsApp/ Zoom for project discussion. You can see our rates on our website.\r\n \r\nBest Regards,\r\nKrista Hannum', '2024-06-13 18:38:17', '2024-06-13 18:38:17'),
(24, 'Nomlanga Patrick', 'huweb@mailinator.com', 'Somalia', 'Voluptatibus sit asp', '+17892884234', 'Ratione eos praesent', '2025-03-21 10:11:11', '2025-03-21 10:11:11'),
(25, 'Justine Baker', 'mahwishali.kingdomvision@gmail.com', 'Virgin Islands (British)', 'Magni veritatis pari', '+11173977507', 'Sint sapiente nostru', '2025-03-22 04:32:15', '2025-03-22 04:32:15'),
(26, 'Malachi Woodard', 'mahwishali.kingdomvision@gmail.com', 'Slovakia', 'Quia error placeat', '+14277098806', 'Molestiae ut sed sit', '2025-03-22 04:39:46', '2025-03-22 04:39:46'),
(27, 'Chase Wilcox', 'geromefu@mailinator.com', 'Nigeria', 'Excepteur cillum vel', '+12644448321', 'Quia labore placeat', '2025-03-22 04:41:17', '2025-03-22 04:41:17'),
(28, 'Ciaran Gamble', 'umehanihammad@gmail.com', 'Lesotho', 'Excepteur officia al', '+12631495615', 'Obcaecati explicabo', '2025-03-22 09:07:41', '2025-03-22 09:07:41'),
(29, 'Amir Shaw', 'cocivax@mailinator.com', 'Hungary', 'Autem officiis sequi', '+16295214376', 'Distinctio Nostrud', '2025-04-03 08:03:36', '2025-04-03 08:03:36'),
(30, 'Sigourney Carter', 'lezareb@mailinator.com', 'Tunisia', 'Reprehenderit non qu', '+12023654047', 'Ea et amet velit v', '2025-04-03 08:09:21', '2025-04-03 08:09:21'),
(31, 'Teegan Blankenship', 'mahwishali.kingdomvision@gmail.com', 'Jamaica', 'Quidem do vel quia m', '+18188811345', 'Ipsa sed ipsa poss', '2025-04-07 12:09:45', '2025-04-07 12:09:45'),
(32, 'Melissa Hersom', 'melissarhersom@gmail.com', 'Hong Kong', 'Re: Proposal - SEO and Web design', '+919830152514', 'Hi there,\r\nI hope you are doing well.\r\n \r\nI was going through your website & I personally see a lot of potential in your website & business. it seems that you are not ranking well for your ad words and key phrases. I actually help businesses like yours get a better ranking in google by using 10 proven techniques below.\r\n \r\n1. Title Tag Optimizations are missing; I can add these to your site.\r\n2. Meta Tag Optimization descriptions are absent; I can add them too.\r\n3. Heading Tags Optimization - No problem getting those put in there.\r\n4. Targeted keywords are not placed into tags correctly.\r\n5. Alt / Image tags Optimization is not present - it would take me seconds to write these.\r\n6. Google Publisher is missing; I can set this up for you\r\n7. Custom 404 Page is missing and I can create this for you.\r\n8. The Products are not following Structured mark-up data, let me edit that in google webmaster tools.\r\n9. Website Speed Development (Both Mobile and Desktop) I can make some tweaks and show you a speed performance using GTMetrics or Pingdom\r\n10.Content Creation SEO work - As a native English speaker, I can create fantastic articles that people will want to read and share; these will bring business to you by word of mouth rather than expensive promotion via google paid search.\r\n \r\nIt will show you exactly what needs to be done to move you up in the rankings dramatically.\r\n \r\nWe can place your website on Google\'s 1st page (Yahoo, etc.)\r\n \r\nMay I send you Packages and Plan?\r\n \r\nIf you are interested, we can arrange a meeting via WhatsApp/ Zoom for project discussion. You can see our rates on our website.\r\n \r\nBest Regards,\r\nMelissa Hersom', '2025-05-31 09:27:02', '2025-05-31 09:27:02'),
(33, 'Riffat', 'Mahik6061@gmail.com', 'Azerbaijan', '+447 40 366 3991', '+447403663991', '+447 40 366 3991', '2025-06-16 10:07:12', '2025-06-16 10:07:12'),
(34, 'Isaiah Thornton', 'mahwishali.kingdomvision@gmail.com', 'Guam', 'Sit proident laboru', '+16578716364', 'Dignissimos at quis', '2025-10-02 07:52:06', '2025-10-02 07:52:06'),
(35, 'May Robertson', 'mahwishali.kingdomvision@gmail.com', 'Egypt', 'Doloremque voluptas', '+19386477956', 'Laborum Ut quam obc', '2025-10-11 09:53:20', '2025-10-11 09:53:20'),
(36, 'Pamela Booker', 'mahwishali.kingdomvision@gmail.com', 'Portugal', 'General Inquiry', '+18062587652', NULL, '2025-10-11 10:09:58', '2025-10-11 10:09:58'),
(37, 'Hamza', 'hamzakarim786@gmail.com', 'United Kingdom', 'General Inquiry', '+443413096652', NULL, '2025-10-14 08:50:56', '2025-10-14 08:50:56'),
(38, 'Hamza', 'hamzakarim786@gmail.com', 'Pakistan', 'test', '+443413096652', 'test', '2025-10-14 08:52:43', '2025-10-14 08:52:43'),
(39, 'Emi Santana', 'ayeshaaa.6000@gmail.com', 'Tokelau', 'Saepe dolor quasi mo', '+447403663991', 'In quaerat nisi aut', '2025-10-14 09:11:28', '2025-10-14 09:11:28'),
(40, 'Shea Mcintosh', 'ayeshaaa.6000@gmail.com', 'Mauritius', 'Molestiae aliquam pa', '+447403663991', 'Et quidem elit et d', '2025-10-14 09:39:18', '2025-10-14 09:39:18'),
(41, 'Alea Pena', 'ayeshaaa.6000@gmail.com', 'Gabon', 'General Inquiry', '+447403663991', NULL, '2025-10-14 09:41:56', '2025-10-14 09:41:56'),
(42, 'Angela Bridges', 'ayeshaaa.6000@gmail.com', 'Benin', 'Porro cupiditate har', '+447403663991', 'Nam accusamus vitae', '2025-10-17 11:40:40', '2025-10-17 11:40:40'),
(43, 'Josiah Williamson', 'ayeshaaa.6000@gmail.com', 'Tokelau', 'Sit officiis fuga', '+14095743856', 'Iusto minim est aut', '2025-10-20 07:04:47', '2025-10-20 07:04:47'),
(44, 'Lilah Huffman', 'ayeshaaa.6000@gmail.com', 'Rwanda', 'Eum incidunt aut ut', '+447403663991', 'Voluptate consectetu', '2025-10-20 07:05:22', '2025-10-20 07:05:22'),
(45, 'Mary Sykes', 'ayeshaaa.6000@gmail.com', 'Chile', 'Harum impedit solut', '+447403663991', 'Beatae nostrud quia', '2025-10-20 07:19:00', '2025-10-20 07:19:00'),
(46, 'Uma Carpenter', 'ayeshaaa.6000@gmail.com', 'Mozambique', 'Tenetur at quaerat e', '+447403663991', 'Perferendis nulla ex', '2025-10-20 07:30:00', '2025-10-20 07:30:00'),
(47, 'Christy Mark', 'christy@guestpostzoomwings.com', 'India', 'Premium Guest Posts – Secure High-Quality Backlinks', '+919811517339', 'Hello,\r\n\r\nMy name is Christy, and my web analysis shows that you are already using guest posting to build backlinks for your https://www.mcmglobaleducation.com/ found the https://bcrelx.com/phd-for-working-professionals/ \r\n \r\nI\'m a professional Blogger and Outreach Service Provider. I would like to inform you that I also have many such types of High DA blogs and sites with better metrics and more incoming traffic. My content writing team can create excellent, quality articles related to your business and publish them with your backlinks on High DA (Domain Authority) & PA (Page Authority) blogs.\r\n\r\nWe understand your business well, as we have extensive experience in the same industry.\r\n\r\nWe provide Dofollow links to your website pages and use only ethical content marketing methods, so your website will never be affected by or penalized by new Google algorithm updates.\r\n\r\nKindly let me know if you are looking for a trustworthy Guest Posting Service / Blogger Outreach Service to grow your business online. I can provide you with end-to-end guest posting solutions.\r\n\r\nNote – If you wish first to see my list of 100+ sites and prices is right here: https://docs.google.com/spreadsheets/d/1ZhzNDaJFB5aF5t4NCHZwi-nGqWfz9GEr/\r\n\r\nCheck Out Our other list of 700+ sites, and prices are right here: https://docs.google.com/spreadsheets/d/1RloY4MhNVROUrQ19iXWRWRCpFzRZ23No/\r\n\r\nPlease get in touch, I can help your business beat the competitors.\r\n\r\nThanks & Regardss\r\nChristy Mark\r\nEmail: christy@guestpostzoomwings.com\r\ninfozoomwings@gmail.com\r\nWebsite: https://www.zoomwings.com\r\nMicrosoft Team: Zoom Wings\r\n\r\nP.S. We sincerely regret the inconvenience if you have received our emails multiple times. We value your privacy and company with anti-spam laws. To unsubscribe, Please reply with a \"No\" on the email subject-line.', '2025-11-17 09:29:30', '2025-11-17 09:29:30'),
(48, 'Christy Mark', 'christy@guestpostzoomwings.com', 'India', 'Premium Guest Posts – Secure High-Quality Backlinks', '+919811517339', 'Hello,\r\n\r\nMy name is Christy, and my web analysis shows that you are already using guest posting to build backlinks for your https://marketingassignmentshelp.co.uk/ found the https://bcrelx.com/the-role-of-marketing-assignment-help-uk-in-building-analytical-thinking-skills/ \r\n \r\nI\'m a professional Blogger and Outreach Service Provider. I would like to inform you that I also have many such types of High DA blogs and sites with better metrics and more incoming traffic. My content writing team can create excellent, quality articles related to your business and publish them with your backlinks on High DA (Domain Authority) & PA (Page Authority) blogs.\r\n\r\nWe understand your business well, as we have extensive experience in the same industry.\r\n\r\nWe provide Dofollow links to your website pages and use only ethical content marketing methods, so your website will never be affected by or penalized by new Google algorithm updates.\r\n\r\nKindly let me know if you are looking for a trustworthy Guest Posting Service / Blogger Outreach Service to grow your business online. I can provide you with end-to-end guest posting solutions.\r\n\r\nNote – If you wish first to see my list of 100+ sites and prices is right here: https://docs.google.com/spreadsheets/d/1ZhzNDaJFB5aF5t4NCHZwi-nGqWfz9GEr/\r\n\r\nCheck Out Our other list of 700+ sites, and prices are right here: https://docs.google.com/spreadsheets/d/1RloY4MhNVROUrQ19iXWRWRCpFzRZ23No/\r\n\r\nPlease get in touch, I can help your business beat the competitors.\r\n\r\nThanks & Regardss\r\nChristy Mark\r\nEmail: christy@guestpostzoomwings.com\r\ninfozoomwings@gmail.com\r\nWebsite: https://www.zoomwings.com\r\nMicrosoft Team: Zoom Wings\r\n\r\nP.S. We sincerely regret the inconvenience if you have received our emails multiple times. We value your privacy and company with anti-spam laws. To unsubscribe, Please reply with a \"No\" on the email subject-line.', '2025-11-17 09:30:18', '2025-11-17 09:30:18');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'AS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and/or Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British lndian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'CA', 'Canada'),
(37, 'KH', 'Cambodia'),
(38, 'CM', 'Cameroon'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'CD', 'Democratic Republic of Congo'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecudaor'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People\'s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'KW', 'Kuwait'),
(116, 'KG', 'Kyrgyzstan'),
(117, 'LA', 'Lao People\'s Democratic Republic'),
(118, 'LV', 'Latvia'),
(119, 'LB', 'Lebanon'),
(120, 'LS', 'Lesotho'),
(121, 'LR', 'Liberia'),
(122, 'LY', 'Libyan Arab Jamahiriya'),
(123, 'LI', 'Liechtenstein'),
(124, 'LT', 'Lithuania'),
(125, 'LU', 'Luxembourg'),
(126, 'MO', 'Macau'),
(127, 'MK', 'Macedonia'),
(128, 'MG', 'Madagascar'),
(129, 'MW', 'Malawi'),
(130, 'MY', 'Malaysia'),
(131, 'MV', 'Maldives'),
(132, 'ML', 'Mali'),
(133, 'MT', 'Malta'),
(134, 'MH', 'Marshall Islands'),
(135, 'MQ', 'Martinique'),
(136, 'MR', 'Mauritania'),
(137, 'MU', 'Mauritius'),
(138, 'TY', 'Mayotte'),
(139, 'MX', 'Mexico'),
(140, 'FM', 'Micronesia, Federated States of'),
(141, 'MD', 'Moldova, Republic of'),
(142, 'MC', 'Monaco'),
(143, 'MN', 'Mongolia'),
(144, 'MS', 'Montserrat'),
(145, 'MA', 'Morocco'),
(146, 'MZ', 'Mozambique'),
(147, 'MM', 'Myanmar'),
(148, 'NA', 'Namibia'),
(149, 'NR', 'Nauru'),
(150, 'NP', 'Nepal'),
(151, 'NL', 'Netherlands'),
(152, 'AN', 'Netherlands Antilles'),
(153, 'NC', 'New Caledonia'),
(154, 'NZ', 'New Zealand'),
(155, 'NI', 'Nicaragua'),
(156, 'NE', 'Niger'),
(157, 'NG', 'Nigeria'),
(158, 'NU', 'Niue'),
(159, 'NF', 'Norfork Island'),
(160, 'MP', 'Northern Mariana Islands'),
(161, 'NO', 'Norway'),
(162, 'OM', 'Oman'),
(163, 'PK', 'Pakistan'),
(164, 'PW', 'Palau'),
(165, 'PA', 'Panama'),
(166, 'PG', 'Papua New Guinea'),
(167, 'PY', 'Paraguay'),
(168, 'PE', 'Peru'),
(169, 'PH', 'Philippines'),
(170, 'PN', 'Pitcairn'),
(171, 'PL', 'Poland'),
(172, 'PT', 'Portugal'),
(173, 'PR', 'Puerto Rico'),
(174, 'QA', 'Qatar'),
(175, 'SS', 'Republic of South Sudan'),
(176, 'RE', 'Reunion'),
(177, 'RO', 'Romania'),
(178, 'RU', 'Russian Federation'),
(179, 'RW', 'Rwanda'),
(180, 'KN', 'Saint Kitts and Nevis'),
(181, 'LC', 'Saint Lucia'),
(182, 'VC', 'Saint Vincent and the Grenadines'),
(183, 'WS', 'Samoa'),
(184, 'SM', 'San Marino'),
(185, 'ST', 'Sao Tome and Principe'),
(186, 'SA', 'Saudi Arabia'),
(187, 'SN', 'Senegal'),
(188, 'RS', 'Serbia'),
(189, 'SC', 'Seychelles'),
(190, 'SL', 'Sierra Leone'),
(191, 'SG', 'Singapore'),
(192, 'SK', 'Slovakia'),
(193, 'SI', 'Slovenia'),
(194, 'SB', 'Solomon Islands'),
(195, 'SO', 'Somalia'),
(196, 'ZA', 'South Africa'),
(197, 'GS', 'South Georgia South Sandwich Islands'),
(198, 'ES', 'Spain'),
(199, 'LK', 'Sri Lanka'),
(200, 'SH', 'St. Helena'),
(201, 'PM', 'St. Pierre and Miquelon'),
(202, 'SD', 'Sudan'),
(203, 'SR', 'Suriname'),
(204, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(205, 'SZ', 'Swaziland'),
(206, 'SE', 'Sweden'),
(207, 'CH', 'Switzerland'),
(208, 'SY', 'Syrian Arab Republic'),
(209, 'TW', 'Taiwan'),
(210, 'TJ', 'Tajikistan'),
(211, 'TZ', 'Tanzania, United Republic of'),
(212, 'TH', 'Thailand'),
(213, 'TG', 'Togo'),
(214, 'TK', 'Tokelau'),
(215, 'TO', 'Tonga'),
(216, 'TT', 'Trinidad and Tobago'),
(217, 'TN', 'Tunisia'),
(218, 'TR', 'Turkey'),
(219, 'TM', 'Turkmenistan'),
(220, 'TC', 'Turks and Caicos Islands'),
(221, 'TV', 'Tuvalu'),
(222, 'UG', 'Uganda'),
(223, 'UA', 'Ukraine'),
(224, 'AE', 'United Arab Emirates'),
(225, 'GB', 'United Kingdom'),
(226, 'US', 'United States'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `deadlines`
--

CREATE TABLE `deadlines` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `duration_in_days` double(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deadlines`
--

INSERT INTO `deadlines` (`id`, `name`, `duration_in_days`) VALUES
(1, '20 Days', 20.00),
(2, '15 Days', 15.00),
(3, '10 Days', 10.00),
(4, '8 Days', 8.00),
(5, '6 Days', 6.00),
(6, '5 Days', 5.00),
(7, '4 Days', 4.00),
(8, '3 Days', 3.00),
(9, '48 Hours', 2.00),
(10, '24 Hours', 1.00),
(11, '12 Hours', 0.50);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fares`
--

CREATE TABLE `fares` (
  `id` int(10) UNSIGNED NOT NULL,
  `academic_level_id` int(10) UNSIGNED NOT NULL,
  `deadline_id` int(10) UNSIGNED NOT NULL,
  `per_page_price` double(6,2) NOT NULL,
  `per_slide_price` double(6,2) NOT NULL,
  `per_poster_price` double(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fares`
--

INSERT INTO `fares` (`id`, `academic_level_id`, `deadline_id`, `per_page_price`, `per_slide_price`, `per_poster_price`) VALUES
(1, 1, 1, 4.00, 4.00, 20.00),
(2, 1, 2, 6.00, 4.00, 20.00),
(3, 1, 3, 8.00, 4.00, 20.00),
(4, 1, 4, 10.00, 4.00, 20.00),
(5, 1, 5, 12.00, 4.00, 20.00),
(6, 1, 6, 14.00, 4.00, 20.00),
(7, 1, 7, 16.00, 4.00, 20.00),
(8, 1, 8, 18.00, 4.00, 20.00),
(9, 1, 9, 20.00, 4.00, 20.00),
(10, 1, 10, 22.00, 4.00, 20.00),
(11, 1, 11, 24.00, 4.00, 20.00),
(12, 2, 1, 5.00, 4.00, 20.00),
(13, 2, 2, 7.00, 4.00, 20.00),
(14, 2, 3, 9.00, 4.00, 20.00),
(15, 2, 4, 11.00, 4.00, 20.00),
(16, 2, 5, 13.00, 4.00, 20.00),
(17, 2, 6, 15.00, 4.00, 20.00),
(18, 2, 7, 17.00, 4.00, 20.00),
(19, 2, 8, 19.00, 4.00, 20.00),
(20, 2, 9, 21.00, 4.00, 20.00),
(21, 2, 10, 23.00, 4.00, 20.00),
(22, 2, 11, 25.00, 4.00, 20.00),
(23, 3, 1, 6.00, 4.00, 20.00),
(24, 3, 2, 8.00, 4.00, 20.00),
(25, 3, 3, 10.00, 4.00, 20.00),
(26, 3, 4, 12.00, 4.00, 20.00),
(27, 3, 5, 14.00, 4.00, 20.00),
(28, 3, 6, 16.00, 4.00, 20.00),
(29, 3, 7, 18.00, 4.00, 20.00),
(30, 3, 8, 20.00, 4.00, 20.00),
(31, 3, 9, 22.00, 4.00, 20.00),
(32, 3, 10, 24.00, 4.00, 20.00),
(33, 3, 11, 26.00, 4.00, 20.00),
(34, 4, 1, 7.00, 4.00, 20.00),
(35, 4, 2, 9.00, 4.00, 20.00),
(36, 4, 3, 11.00, 4.00, 20.00),
(37, 4, 4, 13.00, 4.00, 20.00),
(38, 4, 5, 15.00, 4.00, 20.00),
(39, 4, 6, 17.00, 4.00, 20.00),
(40, 4, 7, 19.00, 4.00, 20.00),
(41, 4, 8, 21.00, 4.00, 20.00),
(42, 4, 9, 23.00, 4.00, 20.00),
(43, 4, 10, 25.00, 4.00, 20.00),
(44, 4, 11, 27.00, 4.00, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `order_id`, `file_path`) VALUES
(6, 50, 'uploads/67f52b910e094_1744120721_image (12).png'),
(7, 51, 'uploads/67f52cead0cf0_1744121066_logow.png'),
(8, 62, 'uploads/684fd95896724_1750063448_mobile-app.png'),
(9, 85, 'uploads/68ee0fae993b7_1760432046_Assignment Help UK - Backlinks & Keywords.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(10) UNSIGNED NOT NULL,
  `ref_no` varchar(255) NOT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `currency` varchar(255) NOT NULL DEFAULT 'gbp',
  `stripe_id` varchar(255) DEFAULT NULL,
  `amount` double NOT NULL,
  `auto_mail` int(11) NOT NULL DEFAULT 0,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 4,
  `user_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `ref_no`, `gateway`, `currency`, `stripe_id`, `amount`, `auto_mail`, `status_id`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(3, '85c43f58-d557-4d48-b5b5-c9865b02cc53', 'stripe', 'GBP', NULL, 404, 0, 4, 45, 83, '2025-10-11 10:03:23', '2025-10-11 10:03:23'),
(4, '724ef583-8f30-48b7-b8fe-979f562fef47', 'stripe', 'GBP', NULL, 900, 0, 5, 45, 84, '2025-10-13 09:56:46', '2025-10-13 09:57:25'),
(5, '68acd5e7-0240-413e-a251-1ff18ec7a8a1', 'stripe', 'GBP', NULL, 24, 0, 4, 46, 85, '2025-10-14 08:54:06', '2025-10-14 08:54:06'),
(6, 'ccba432e-36fc-442e-ae29-e4810ad12c85', 'stripe', 'GBP', NULL, 2040, 0, 4, 47, 86, '2025-10-14 09:10:36', '2025-10-14 09:10:36'),
(10, 'a561c968-f8f6-4006-9904-0c846bf05d40', 'stripe', 'GBP', NULL, 1532, 0, 4, 47, 90, '2025-10-20 07:30:48', '2025-10-20 07:30:48'),
(11, '189e5485-ce37-4ea5-9582-8b123dbf0bc6', 'stripe', 'GBP', NULL, 76, 0, 4, 48, 91, '2025-10-21 10:37:19', '2025-10-21 10:37:19'),
(12, '46dc0829-f750-45a4-accb-a9f1a7cf1098', 'stripe', 'GBP', NULL, 0, 0, 4, 48, 92, '2025-11-17 10:40:06', '2025-11-17 10:40:06'),
(13, 'c87d4e6b-23fd-40b3-86f1-e1827c938a17', 'stripe', 'GBP', NULL, 116, 0, 4, 48, 93, '2025-11-24 09:35:17', '2025-11-24 09:35:17'),
(14, '29dfca21-9871-45f1-a72c-2d58b42e9fae', 'stripe', 'GBP', NULL, 0, 0, 4, 48, 94, '2025-12-01 19:43:01', '2025-12-01 19:43:01'),
(15, '4d59a4bb-89d1-4e31-8507-143ecd5ddf72', 'stripe', 'GBP', NULL, 0, 0, 4, 48, 95, '2025-12-08 20:38:51', '2025-12-08 20:38:51'),
(16, '9ac8f3d2-7d07-4da9-bf43-6dd70b28f5d2', 'stripe', 'GBP', NULL, 0, 0, 4, 45, 96, '2025-12-09 06:51:14', '2025-12-09 06:51:14'),
(17, 'b0a2cddf-13ab-4645-8478-6d47422b68cc', 'stripe', 'GBP', NULL, 1840, 0, 4, 45, 97, '2025-12-09 07:06:57', '2025-12-09 07:06:57'),
(18, 'adde8ea9-89b1-42bc-8758-ff643cd47a84', 'stripe', 'GBP', NULL, 374, 0, 4, 48, 98, '2025-12-09 08:20:56', '2025-12-09 08:20:56'),
(19, 'e193c13b-9c1e-4dcd-b805-52cefd0dc5a5', 'stripe', 'GBP', NULL, 88, 0, 4, 48, 99, '2025-12-15 08:30:54', '2025-12-15 08:30:54'),
(20, '9d17cfd2-2bb8-4d60-b862-790e72c3216b', 'stripe', 'GBP', NULL, 450, 0, 4, 48, 100, '2025-12-22 12:32:41', '2025-12-22 12:32:41'),
(21, 'a9b7f1f9-2a49-4a4a-a4c3-8a69c3e37b37', 'stripe', 'GBP', NULL, 374, 0, 4, 48, 101, '2026-01-01 09:43:46', '2026-01-01 09:43:46'),
(22, '7bf27a7f-7e7a-4c3a-b068-ea5bdf29bbfa', 'stripe', 'GBP', NULL, 500, 0, 4, 48, 102, '2026-01-06 05:09:43', '2026-01-06 05:09:43'),
(23, '74ee6166-24de-4b53-b4e2-461d09845ccc', 'stripe', 'GBP', NULL, 776, 0, 4, 49, 103, '2026-01-08 12:06:27', '2026-01-08 12:06:27'),
(24, '1efc580d-f1c4-447e-9534-566d41b30c8d', 'stripe', 'GBP', NULL, 1812, 0, 4, 50, 104, '2026-01-08 12:08:19', '2026-01-08 12:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_12_11_104107_create_statuses_table', 1),
(4, '2022_05_24_000001_create_permissions_table', 1),
(5, '2022_05_24_000002_create_roles_table', 1),
(6, '2022_05_24_000003_create_users_table', 1),
(7, '2022_05_24_000004_create_permission_role_pivot_table', 1),
(8, '2022_05_24_000005_create_role_user_pivot_table', 1),
(9, '2022_06_08_085252_create_web_settings_table', 1),
(10, '2022_06_09_072430_create_services_table', 1),
(11, '2022_06_09_103559_create_blogs_table', 1),
(12, '2022_06_11_081924_create_contacts_table', 1),
(13, '2022_06_13_085818_create_paper_types_table', 1),
(14, '2022_06_13_100951_create_academic_levels_table', 1),
(15, '2022_06_13_103131_create_deadlines_table', 1),
(16, '2022_06_13_111450_create_fares_table', 1),
(17, '2022_06_15_085659_create_subjects_table', 1),
(18, '2022_06_15_093044_create_refrence_styles_table', 1),
(19, '2022_06_15_101945_create_countries_table', 1),
(20, '2022_06_20_093634_create_orders_table', 1),
(21, '2022_06_20_093817_create_files_table', 1),
(22, '2023_01_13_094552_create_invoices_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `paper_type` varchar(255) NOT NULL,
  `paper_topic` text NOT NULL,
  `academic_level` varchar(255) NOT NULL,
  `number_of_pages` varchar(255) NOT NULL,
  `no_of_slides` int(11) NOT NULL DEFAULT 0,
  `no_of_posters` int(11) NOT NULL DEFAULT 0,
  `reference_style` varchar(255) NOT NULL,
  `no_of_references` int(11) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `is_complete` tinyint(1) NOT NULL DEFAULT 0,
  `cost_per_page` int(11) NOT NULL,
  `cost_per_slide` varchar(255) NOT NULL,
  `cost_per_poster` varchar(255) NOT NULL,
  `total_price` int(11) NOT NULL,
  `academic_level_id` int(11) DEFAULT NULL,
  `deadline_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `country`, `subject`, `paper_type`, `paper_topic`, `academic_level`, `number_of_pages`, `no_of_slides`, `no_of_posters`, `reference_style`, `no_of_references`, `deadline`, `detail`, `is_complete`, `cost_per_page`, `cost_per_slide`, `cost_per_poster`, `total_price`, `academic_level_id`, `deadline_id`, `user_id`, `status_id`, `created_at`, `updated_at`) VALUES
(81, 'Allistair Kerr', 'mahwishali.kingdomvision@gmail.com', '+17403663991', 'Kiribati', 'Criminology', 'Assignment', 'Ex possimus assumen', 'Mphil/PhD', '77', 0, 0, 'MLA', 7, '12 Hours', 'Nisi non occaecat no', 0, 27, '4', '20', 244, 4, 11, 43, 1, '2025-10-02 07:29:45', '2025-10-02 07:29:45'),
(82, 'Eagan Kennedy', 'mahwishali.kingdomvision@gmail.com', '+19038588774', 'Malawi', 'Movies', 'Other', 'Cumque velit ad in', 'Undergraduate', '56', 0, 0, 'Harvard', 17, '6 Days', 'Ea mollitia aliquip', 0, 13, '4', '20', 1684, 2, 5, 43, 1, '2025-10-02 07:40:53', '2025-10-02 07:40:53'),
(83, 'Eugenia Graves', 'mahwishali.kingdomvision@gmail.com', '+16578522782', 'Malawi', 'Case Study', 'Course Work', 'Dolore voluptates au', 'Undergraduate', '11', 0, 0, 'Vancouver', 15, '5 Days', 'Impedit obcaecati s', 0, 15, '4', '20', 404, 2, 6, 45, 1, '2025-10-11 10:03:23', '2025-10-11 10:03:23'),
(84, 'Carl Simon', 'mahwishali.kingdomvision@gmail.com', '+16572099618', 'Germany', 'Pharmacology', 'Research Proposal', 'Sit autem omnis ven', 'High School', '39', 0, 0, 'Chicago', 12, '8 Days', 'Animi perferendis e', 0, 10, '4', '20', 900, 1, 4, 45, 1, '2025-10-13 09:56:46', '2025-10-13 09:56:46'),
(85, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', 'Pakistan', 'Creative Writing', 'Essay', 'test', 'High School', '1', 0, 0, 'MLA', 15, '20 Days', 'test', 0, 4, '4', '20', 24, 1, 1, 46, 1, '2025-10-14 08:54:06', '2025-10-14 08:54:06'),
(86, 'Anne Koch', 'ayeshaaa.6000@gmail.com', '+447403663991', 'Uganda', 'Legal Issues', 'Course Work', 'Ipsa tempor aute am', 'High School', '31', 0, 0, 'CBE', 7, '24 Hours', 'Sunt eu eius placeat', 0, 22, '4', '20', 2040, 1, 10, 47, 1, '2025-10-14 09:10:36', '2025-10-14 09:10:36'),
(90, 'Reece Johnson', 'ayeshaaa.6000@gmail.com', '+18486084977', 'Serbia', 'Criminology', 'Thesis Proposal', 'Modi quo non tempori', 'Mphil/PhD', '28', 0, 0, 'APA', 11, '12 Hours', 'Est Nam soluta repu', 0, 27, '4', '20', 1532, 4, 11, 47, 1, '2025-10-20 07:30:48', '2025-10-20 07:30:48'),
(91, 'riffat mushtaq', 'Mahik6061@gmail.com', '+447403663991', 'Albania', 'Creative Writing', 'Essay', 'Notification check', 'Mphil/PhD', '18', 0, 0, 'APA', 14, '12 Hours', 'gggnsmexesm', 0, 27, '4', '20', 76, 4, 11, 48, 1, '2025-10-21 10:37:19', '2025-10-21 10:37:19'),
(92, 'RIFFAT', 'Mahik6061@gmail.com', '+15487084611', 'Bangladesh', 'Journalism', 'Other', 'Notification check', 'High School', '16', 0, 0, 'APA', 18, '24 Hours', 'DFA', 0, 22, '4', '20', 0, 1, 10, 48, 1, '2025-11-17 10:40:06', '2025-11-17 10:40:06'),
(93, 'riffat', 'Mahik6061@gmail.com', '+35314433129', 'Bahamas', 'Economics', 'Essay', 'Notification check', 'Mphil/PhD', '16', 0, 0, 'MLA', 17, '12 Hours', 'imjnki', 0, 27, '4', '20', 116, 4, 11, 48, 1, '2025-11-24 09:35:17', '2025-11-24 09:35:17'),
(94, 'riffat', 'Mahik6061@gmail.com', '+97450345779', 'Barbados', 'Creative Writing', 'Research Paper', 'Notification check', 'Undergraduate', '15', 0, 0, 'MLA', 14, '24 Hours', 'xvcsd', 0, 23, '4', '20', 0, 2, 10, 48, 1, '2025-12-01 19:43:01', '2025-12-01 19:43:01'),
(95, 'riffat', 'mahik6061@gmail.com', '+923451234567', 'Belarus', 'Communication Strategies', 'Dissertation Proposal', 'testinmg', 'Undergraduate', '13', 0, 0, 'MLA', 16, '24 Hours', 'dfgrjn', 0, 23, '4', '20', 0, 2, 10, 48, 1, '2025-12-08 20:38:51', '2025-12-08 20:38:51'),
(96, 'Damon Johns', 'mahwishali.kingdomvision@gmail.com', '+13158282055', 'Belize', 'Journalism', 'Essay', 'Eu dolor vero rerum', 'High School', '16', 0, 0, 'Other', 5, '24 Hours', 'Doloribus maiores ni', 0, 22, '4', '20', 0, 1, 10, 45, 1, '2025-12-09 06:51:14', '2025-12-09 06:51:14'),
(97, 'Rahim Harvey', 'mahwishali.kingdomvision@gmail.com', '+19146996214', 'Malaysia', 'American History', 'Term Paper', 'Aut rerum voluptatum', 'Master', '20', 0, 0, 'APA', 5, '5 Days', 'Culpa nesciunt magn', 0, 16, '4', '20', 1840, 3, 6, 45, 1, '2025-12-09 07:06:57', '2025-12-09 07:06:57'),
(98, 'riffat', 'Mahik6061@gmail.com', '+447400123456', 'Armenia', 'Communication Strategies', 'Assignment', 'Notification check', 'High School', '17', 0, 0, 'Vancouver', 16, '24 Hours', 'dfe', 0, 22, '4', '20', 374, 1, 10, 48, 1, '2025-12-09 08:20:56', '2025-12-09 08:20:56'),
(99, 'riffat', 'Mahik6061@gmail.com', '+35314433129', 'Bahrain', 'Communication Strategies', 'Other', 'Notification check', 'Master', '3', 0, 0, 'CBE', 12, '24 Hours', 'fbd', 0, 24, '4', '20', 88, 3, 10, 48, 1, '2025-12-15 08:30:54', '2025-12-15 08:30:54'),
(100, 'riffat', 'Mahik6061@gmail.com', '+447400123456', 'Barbados', 'Communication and Media', 'Assignment', 'Notification check', 'Undergraduate', '18', 0, 0, 'Turabian', 15, '12 Hours', 'ggf', 0, 25, '4', '20', 450, 2, 11, 48, 1, '2025-12-22 12:32:41', '2025-12-22 12:32:41'),
(101, 'riffat', 'Mahik6061@gmail.com', '+447400123456', 'Belarus', 'Creative Writing', 'Assignment', 'Notification check', 'High School', '17', 0, 0, 'MLA', 14, '24 Hours', 'dsfcew', 0, 22, '4', '20', 374, 1, 10, 48, 1, '2026-01-01 09:43:46', '2026-01-01 09:43:46'),
(102, 'riffat', 'mahik6061@gmail.com', '+15487084611', 'Bangladesh', 'Economics', 'Other', 'testing', 'Undergraduate', '20', 0, 0, 'Other', 20, '12 Hours', 'df', 0, 25, '4', '20', 500, 2, 11, 48, 1, '2026-01-06 05:09:43', '2026-01-06 05:09:43'),
(103, 'Jordan Decker', 'fowi@mailinator.com', '+12499577404', 'Republic of South Sudan', 'Education', 'Thesis Proposal', 'Aut libero elit vel', 'High School', '5', 0, 0, 'MLA', 6, '6 Days', 'Et ut qui elit dele', 0, 12, '4', '20', 776, 1, 5, 49, 1, '2026-01-08 12:06:27', '2026-01-08 12:06:27'),
(104, 'Cameron Perkins', 'homegec@mailinator.com', '+447403663991', 'New Caledonia', 'Shakespeare Studies', 'Thesis', 'Irure consequatur E', 'High School', '5', 0, 0, 'Vancouver', 3, '6 Days', 'Nobis proident omni', 0, 12, '4', '20', 1812, 1, 5, 50, 1, '2026-01-08 12:08:19', '2026-01-08 12:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `paper_types`
--

CREATE TABLE `paper_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paper_types`
--

INSERT INTO `paper_types` (`id`, `name`) VALUES
(11, 'Assignment'),
(2, 'Book Report'),
(7, 'Course Work'),
(6, 'Dissertation'),
(10, 'Dissertation Proposal'),
(1, 'Essay'),
(12, 'Other'),
(3, 'Research Paper'),
(9, 'Research Proposal'),
(4, 'Term Paper'),
(5, 'Thesis'),
(8, 'Thesis Proposal');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('dc.usmankhaliq@gmail.com', '$2y$10$CK0wYFzdECuaHCSkpomS7uUa.t6Bn3vzDbxx4JyXKSqGQIxcvbUvG', '2023-01-17 16:44:05');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(2, 17);

-- --------------------------------------------------------

--
-- Table structure for table `reference_styles`
--

CREATE TABLE `reference_styles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reference_styles`
--

INSERT INTO `reference_styles` (`id`, `name`, `active`) VALUES
(1, 'APA', 1),
(2, 'MLA', 1),
(3, 'Chicago', 1),
(4, 'Turabian', 1),
(5, 'Harvard', 1),
(6, 'Oxford', 1),
(7, 'Vancouver', 1),
(8, 'CBE', 1),
(9, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(31, 2),
(32, 2),
(36, 2),
(37, 2),
(38, 2),
(39, 2),
(40, 2),
(41, 2),
(42, 2),
(43, 2),
(44, 2),
(45, 2),
(46, 2),
(47, 2),
(48, 2),
(49, 2),
(50, 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `canonical` varchar(255) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `html` longtext DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `title`, `slug`, `canonical`, `meta_description`, `html`, `user_id`, `is_published`, `created_at`, `updated_at`) VALUES
(3, 'Dissertation Writing', 'The Top Dissertation Writing Help UK for A+ Grades', 'dissertation-writing', 'https://assignmenthelpuk.co.uk/dissertation-writing', 'Hire our proficient writers for the top dissertation writing help in UK. Get well-researched and engaging dissertations to excel in all your academics.', '<h1><strong>Dissertation writing help in Dubai, letting you reach your destination easily</strong></h1><p>Dissertation Writing is a lot different and require more potential than doing other simple assignments. In order to write a best dissertation the writer should be an expert and a good researcher. Moreover, an experienced writers who knows well how to proofread and perfectly edit the missing content is essential for successful dissertation writing services.</p><p>Our dissertation writing help in Dubai, Ajman, Sharjah, Al-Ain, Fujairah and other part of UAE is just convenient and remarkable. The qualified writers are experienced and most of them are also from education background. Every step of our dissertation is done with step by step, ending at a fully prepared dissertation that is received by our valued customers.</p><p>Your dissertation writing in Dubai and all other cities of UAE is no more a NEED. You have found the capable team of writers whose entire focus is to serve students of UAE. Help with dissertation writing at Essay Writing Service UAE comes with a complete package beginning with research, editing and proofreading. Each heading is includes as per the students requirements and we put maximum efforts to deliver back your thesis before time that you have a good time to review and revisions.</p><p>Referencing is an important part of thesis. Our writers make sure that correct referencing is done so that nothing can stop you from getting your work done. An interactively written abstract is just necessary for your dissertation and we never miss that. The expert dissertation writers in UAE works smartly on these abstract so that reader urge to read the complete dissertation is established.</p><p>Our pool of customers is just amazing. They have been with us since they were in high school and many other from PhD level join us every day. The students are happy with our work and freely ask from our dissertation writers about their projects. We respect student’s privacy and maintain confidentiality. So keep aside any kind of hesitation and ask for our services without any worry.</p><h2><strong>BEST DISSERTATION ASSISTANCE, DISSERTATION WRITING SERVICES IN DUBAI</strong></h2><p>Most of the students face trouble is working on long thesis, dissertation and research proposal. There are many reason behind it including less time, practical life and they often find it difficult to complete their dissertation. Perhaps it can be the most difficult thing students might deal with. Our custom dissertation help is modified to your requirements. Students just share their requirements with us and we ensure that their work is done solely and nothing can trouble them with our dissertation writing in Dubai and all over UAE.</p><p>Our custom dissertation writing services never leave you at any stage. No matter you are stuck at any point of your dissertation writing we can help you. We take all you pain away with our writing services. Whether you have done an intro only or covered more than one chapters we can complete it all quickly as possible. Share your half-done dissertation and we will return it back done completely.</p><p>Not only this, we emphasis on creating quality work. Our writers has already worked for many students who has got desired grades in their dissertations. Working on dissertation by conducting proper research is not only what our writers do. They add their ideas and collection of words so that it can be unique piece of work.</p><h3><strong>Super Team of Dissertation Writers in UAE</strong></h3><p>Best team of writers here not only just do it for the sake of their job. We choose the writers who feel happy working on thesis, assignments and dissertations. Making a customer happy is not an easy task. Our writers love to assist you. The dedication level is so high that it helps students get better understanding of their assignments and dissertation. We also guide students in any kind of help they require after their dissertation is completely done. Our major focus is to leave customer stress-free. Dissertation help won’t be so feasible and easy to get. Just chat with us and find solution to your dissertation writing needs.</p><h4><strong>We make it effective and fast</strong></h4><p>Our prices varies and depend on your timeline. We ask our customers to place their order as quick as they can before the submission. However, many students don’t find it easy to manage because of their busy schedule and they have less time left to submit the dissertation. Our writers are not afraid working on your urgent deadlines. So don’t held by the time just message us to know the availability of our writers and discuss your problem with us.</p><p>We are the best dissertation writers online. We work with task synchronization and work in a proper process. Don’t let your important part of academic years be squandered by wrong hands. You have spent a lot year working hard on your academic assignment a properly written dissertation can be a milestone for you. So what are you waiting for? Get help from the best dissertation writers in UAE</p><h3><strong>Write my dissertation, this can really help you</strong></h3><p>Dissertation help in UAE is taking your worries over. Students come to us and say “write my dissertation” and we take all the requirement from them to help them. It might a long writing task for you but our writers find it quite easy as they experienced and they almost work on different dissertations every day.</p><p>Dissertation writing Dubai is making the academic journey of students less painful and more practical. Why not opt for writing services when you are getting cheap dissertation writing services in UAE easily. You get an online help now just email us or chat with us.</p><h4><strong>Doing it professionally</strong></h4><p>The best way to do any assignment is to understand what the facilitator want in it and our writers focus on that to create a practical piece of paper. There are some pointer we work on and follow them on each step. Meetings and discussion is the part of our routine. We take it personally. Our complete focus is that our customer don’t feel worried or painful while using our dissertation writing service online. Our affordable prices is the another thing student love about EWS. If you need more clarification on your topic we are here for your assistance and clear all your doubts. Even after submitting an order we respond you in best possible way to make you feel relax and satisfied with our services.</p><p>Dissertation writing UAE appreciate its customer’s patience and their cooperation. We expect a proper guideline and instructions from students so we can provide them quality paper as per their requirement. We believe just say three words “write my dissertation” is not difficult.</p>', 1, 1, '2022-07-07 02:54:43', '2025-05-15 11:23:30'),
(17, 'CIPD Assignment', 'CIPD Assignment', 'cipd-assignment', 'https://assignmenthelpuk.co.uk/cipd-assignment', NULL, '<h1><strong>CIPD Assignment Writing Help in Dubai</strong></h1><p>Do you have your CIPD assignments pending for a long time? Are you looking for professional CIPD writers in UAE to ace your CIPD course?</p><p>Let’s not worry about it as we’re here to take you out of the chaos with our exceptional services. No matter if the course is long due or you’re stuck between the complexities of the course, our professional assistance at the right time can help you complete it with good grades.&nbsp;</p><p>Since CIPD is emerging as an important qualification for the corporate world so it’s not right to skip it. There are a number of assignments, deadlines, tests, and submissions that sometimes it becomes impossible to get everything done. But with our CIPD assignment help in Dubai we make the achievement possible for you.</p><p>Whether it’s CIPD Level 1, Level 3, Level 5 chr assignment or CIPD Level 7, our writers are CIPD professionals who can make you win your courses with their quality writing help.&nbsp;</p><h2><strong>Why Only Our CIPD Writers in Dubai?</strong></h2><p>Anyone can come forward as a CIPD writer but there are certain skills, knowledge and writing styles that separate excellent CIPD writers from the crowd. At EWS ae, we have writers who know how to write a CIPD report or assignment following the standards it demands. So, if you’re still not sure to trust us, we can connect you with our writers to win your confidence. They won’t only make the success possible for you but will also make sure that you complete the CIPD phases smoothly.&nbsp;</p><p>You can even call us to receive instant assistance from our CIPD writers in Dubai. It’s time for you to unlock the journey to success by hiring our professional help who worries more about your grades than you, yourself. To let you outshine the crowd through CIPD assignments, they perform extensive research and write it with meticulous details to leave no point to make your assignments outstanding.</p><p>That’s why it’s always a fair deal to hire us. You won’t be needing an additional income as we always charge affordable rates and you’d also be saving your precious time by letting our writers work on your CIPD assignments and reports.&nbsp;</p><h3><strong>Best CIPD Writing Help in Dubai</strong></h3><p>In the UAE, CIPD isn’t as challenging as it was before because of the immediate help of the professional services. With our platform, we teach you how to write a personal development plan CIPD to get on top of other candidates. Not only this, if you’re finding it difficult to perform the CIPD level 5 assignment answer, we can also make it work for you.</p><p>The objective is to make your CIPD course easier for you and get over the highly-valued, in-demand qualification. If you’re looking to make a successful career ahead, CIPD courses can be a value-addition to your resume. So, whether your assignment is about business skills, employee management, coaching or mentoring, leadership or organization skills, our CIPD assignment online Dubai is right here to serve you quality papers within the deadline.&nbsp;</p><p>We don’t claim ourselves as one of the leading CIPD assignment writing services in Dubai but we do deliver excellent, state-of-the-art writing services. Over the years, we have helped students in completing their CIPD diploma in human resource management and CIPD in HR. And we can help you too. Just leave us your requirements in the order form and we’ll revert with an outclass assignment.</p><p>We know, internet is filled with CIPD assignment writers but if you don’t want to take risks, always take help from the ones who are experienced in this field. This will keep your hassle-free and calm.</p><p>Ready to get your CIPD assignment from the best writers in Abu Dhabi, Sharjah, Fujairah, Al Ain, UAE?</p>', 1, 1, '2022-07-07 03:48:15', '2025-05-14 08:53:30'),
(19, 'Admission Essay Writing', 'Admission Essay Writing', 'admission-essay-writing', 'https://assignmenthelpuk.co.uk/admission-essay-writing', 'Get high-quality essays from our best admission essay writing service UAE. Hire our professional essay writers and get admission to your desired institution.', NULL, 1, 1, '2024-10-28 13:24:10', '2025-05-15 11:15:51'),
(34, 'Online Exam Help', 'Online Exam Help', 'online-exam-help', 'https://assignmenthelpuk.co.uk/online-exam-help', NULL, NULL, 1, 1, '2024-10-28 14:03:23', '2025-01-20 04:38:11'),
(51, 'Assignment Proofreading', 'Assignment Proofreading', 'assignment-proofreading', 'https://assignmenthelpuk.co.uk/assignment-proofreading', NULL, NULL, 1, 1, '2025-01-13 01:31:14', '2025-01-13 01:31:14'),
(52, 'Essay Writing', 'Essay Writing', 'essay-writing', 'https://assignmenthelpuk.co.uk/essay-writing', NULL, NULL, 1, 1, '2025-01-14 01:47:32', '2025-05-15 11:24:17'),
(53, 'Homework Writing', 'Homework Writing', 'homework-writing', 'https://assignmenthelpuk.co.uk/homework-writing', NULL, NULL, 1, 1, '2025-01-14 05:24:26', '2025-05-14 08:58:44'),
(54, 'Coursework Writing', 'Coursework Writing', 'coursework-writing', 'https://assignmenthelpuk.co.uk/coursework-writing', NULL, NULL, 1, 1, '2025-01-14 06:21:01', '2025-05-14 08:55:30'),
(55, 'Buy Assignment', 'Buy Assignment', 'buy-assignment', 'https://assignmenthelpuk.co.uk/buy-assignment', NULL, NULL, 1, 1, '2025-01-17 05:22:52', '2025-05-14 08:47:29'),
(56, 'HND Assignment', 'HND Assignment', 'hnd-assignment', 'https://assignmenthelpuk.co.uk/hnd-assignment', NULL, NULL, 1, 1, '2025-01-17 06:15:58', '2025-05-14 08:58:33'),
(57, 'Buy Essay', 'Buy Essay', 'buy-essay', 'https://assignmenthelpuk.co.uk/buy-essay', NULL, NULL, 1, 1, '2025-01-18 05:14:12', '2025-05-15 11:18:10'),
(58, 'Do My Assignment', 'Do My Assignment', 'do-my-assignment', 'https://assignmenthelpuk.co.uk/do-my-assignment', NULL, NULL, 1, 1, '2025-01-20 04:19:19', '2025-05-14 08:57:23'),
(59, 'Make My Assignment', 'Make My Assignment', 'make-my-assignment', 'https://assignmenthelpuk.co.uk/make-my-assignment', NULL, NULL, 1, 1, '2025-01-20 05:41:13', '2025-05-14 09:17:36'),
(60, 'HR Assignment', 'HR Assignment', 'hr-assignment', 'https://assignmenthelpuk.co.uk/hr-assignment', NULL, NULL, 1, 1, '2025-01-22 00:02:20', '2025-05-15 11:25:46'),
(62, 'ATHE Assignment', 'ATHE Assignment', 'athe-assignment', 'https://assignmenthelpuk.co.uk/athe-assignment', NULL, NULL, 1, 1, '2025-01-22 01:14:54', '2025-05-15 11:16:11'),
(63, 'Law Assignment', 'Law Assignment', 'law-assignment', 'https://assignmenthelpuk.co.uk/law-assignment', NULL, NULL, 1, 1, '2025-01-27 06:19:40', '2025-05-15 11:32:23'),
(64, 'CMI Assignment', 'CMI Assignment', 'cmi-assignment', 'https://assignmenthelpuk.co.uk/cmi-assignment', NULL, NULL, 1, 1, '2025-01-27 07:31:25', '2025-05-15 11:19:08'),
(65, 'Write My Assignment', 'Write My Assignment', 'write-my-assignment', 'https://assignmenthelpuk.co.uk/write-my-assignment', NULL, NULL, 1, 1, '2025-01-27 07:45:16', '2025-05-14 09:32:09'),
(66, 'ILM Assignment', 'ILM Assignment', 'ilm-assignment', 'https://assignmenthelpuk.co.uk/ilm-assignment', NULL, NULL, 1, 1, '2025-01-27 08:38:11', '2025-05-15 11:25:58'),
(67, 'Edexcel Assignment', 'Edexcel Assignment', 'edexcel-assignment', 'https://assignmenthelpuk.co.uk/edexcel-assignment', NULL, NULL, 1, 1, '2025-02-07 05:35:49', '2025-05-15 11:23:48'),
(68, 'PowerPoint Presentation', 'PowerPoint Presentation', 'powerpoint-presentation', 'https://assignmenthelpuk.co.uk/powerpoint-presentation', NULL, NULL, 1, 1, '2025-02-08 03:04:28', '2025-05-14 09:26:18'),
(69, 'Thesis Writing', 'Thesis Writing', 'thesis-writing', 'https://assignmenthelpuk.co.uk/thesis-writing', NULL, NULL, 1, 1, '2025-02-08 03:07:48', '2025-05-14 09:32:42'),
(70, 'Research Paper Writing', 'Research Paper Writing', 'research-paper-writing', 'https://assignmenthelpuk.co.uk/research-paper-writing', NULL, NULL, 1, 1, '2025-02-08 03:09:27', '2025-05-15 11:25:16'),
(71, 'CV Writing', 'CV Writing', 'cv-writing', 'https://assignmenthelpuk.co.uk/cv-writing', NULL, NULL, 1, 1, '2025-02-08 03:10:58', '2025-05-14 08:56:29'),
(72, 'Write My Essay', 'Write My Essay', 'write-my-essay', 'https://assignmenthelpuk.co.uk/write-my-essay', NULL, NULL, 1, 1, '2025-02-08 03:12:49', '2025-05-14 09:18:54'),
(73, 'Case Study Writing', 'Case Study Writing', 'case-study-writing', 'https://assignmenthelpuk.co.uk/case-study-writing', NULL, NULL, 1, 1, '2025-02-08 03:14:59', '2025-05-14 08:52:54'),
(74, 'PhD Writing', 'PhD Writing', 'phd-writing', 'https://assignmenthelpuk.co.uk/phd-writing', NULL, NULL, 1, 1, '2025-02-08 03:15:53', '2025-05-15 11:30:09'),
(75, 'PGCE Assignment', 'PGCE Assignment', 'pgce-assignment', 'https://assignmenthelpuk.co.uk/pgce-assignment', NULL, NULL, 1, 1, '2025-02-08 03:17:11', '2025-05-15 11:30:50'),
(76, 'MBA Assignment', 'MBA Assignment', 'mba-assignment', 'https://assignmenthelpuk.co.uk/mba-assignment', NULL, NULL, 1, 1, '2025-02-08 03:18:06', '2025-05-15 11:32:50'),
(77, 'Write My Dissertation', 'Write My Dissertation', 'write-my-dissertation', 'https://assignmenthelpuk.co.uk/write-my-dissertation', NULL, NULL, 1, 1, '2025-02-08 03:19:15', '2025-02-08 03:19:26'),
(78, 'OTHM Assignment', 'OTHM Assignment', 'othm-assignment', 'https://assignmenthelpuk.co.uk/othm-assignment', NULL, NULL, 1, 1, '2025-02-08 03:20:00', '2025-05-15 11:33:25'),
(80, 'Nursing Essay Writing', 'Nursing Essay Writing', 'nursing-essay-writing', 'https://assignmenthelpuk.co.uk/nursing-essay-writing', NULL, NULL, 1, 1, '2025-02-08 03:21:20', '2025-05-14 09:19:35'),
(81, 'College Assignment', 'College Assignment', 'college-assignment', 'https://assignmenthelpuk.co.uk/college-assignment', NULL, NULL, 1, 1, '2025-02-08 04:39:24', '2025-05-15 11:19:46'),
(83, 'University Assignment', 'University Assignment', 'university-assignment', 'https://assignmenthelpuk.co.uk/university-assignment', NULL, NULL, 1, 1, '2025-02-10 05:35:42', '2025-05-15 11:24:34'),
(84, 'Last Minute Assignment', 'Last Minute Assignment', 'last-minute-assignment', 'https://assignmenthelpuk.co.uk/last-minute-assignment', NULL, NULL, 1, 1, '2025-02-11 06:41:55', '2025-05-15 11:31:41'),
(85, 'Dissertation Editing', 'Dissertation Editing', 'dissertation-editing', 'https://assignmenthelpuk.co.uk/dissertation-editing', NULL, NULL, 1, 1, '2025-02-11 09:32:27', '2025-05-15 11:21:04'),
(86, 'NVQ Assignment', 'NVQ Assignment', 'nvq-assignment', 'https://assignmenthelpuk.co.uk/nvq-assignment', NULL, NULL, 1, 1, '2025-02-13 04:58:26', '2025-05-15 11:33:06'),
(87, 'CIM Assignment', 'CIM Assignment', 'cim-assignment', 'https://assignmenthelpuk.co.uk/cim-assignment', NULL, NULL, 1, 1, '2025-02-13 05:08:49', '2025-05-15 11:18:48'),
(88, 'Custom Essay Writing', 'Custom Essay Writing', 'custom-essay-writing', 'https://assignmenthelpuk.co.uk/custom-essay-writing', NULL, NULL, 1, 1, '2025-02-13 05:34:50', '2025-05-15 11:26:16'),
(89, 'BTEC Assignment', 'BTEC Assignment', 'btec-assignment', 'https://assignmenthelpuk.co.uk/btec-assignment', NULL, NULL, 1, 1, '2025-02-13 05:48:24', '2025-05-14 08:47:18'),
(90, 'Academic Writing', 'Academic Writing', 'academic-writing', 'https://assignmenthelpuk.co.uk/academic-writing', NULL, NULL, 1, 1, '2025-02-13 06:37:58', '2025-05-14 08:46:10'),
(91, 'Open University Assignment', 'Open University Assignment', 'open-university-assignment', 'https://assignmenthelpuk.co.uk/open-university-assignment', NULL, NULL, 1, 1, '2025-02-13 08:29:00', '2025-05-15 11:34:50'),
(92, 'Term Paper Writing', 'Term Paper Writing', 'term-paper-writing', 'https://assignmenthelpuk.co.uk/term-paper-writing', NULL, NULL, 1, 1, '2025-02-14 00:54:19', '2025-05-14 09:33:04'),
(93, 'Personal Statement Writing', 'Personal Statement Writing', 'personal-statement-writing', 'https://assignmenthelpuk.co.uk/personal-statement-writing', NULL, NULL, 1, 1, '2025-02-14 01:13:44', '2025-05-15 11:34:15'),
(94, 'Nebosh Assignment', 'Nebosh Assignment', 'nebosh-assignment', 'https://assignmenthelpuk.co.uk/nebosh-assignment', NULL, NULL, 1, 1, '2025-02-14 01:47:52', '2025-05-14 09:19:09'),
(95, 'Literature Review Writing', 'Literature Review Writing', 'literature-review-writing', 'https://assignmenthelpuk.co.uk/literature-review-writing', NULL, NULL, 1, 1, '2025-02-15 02:20:26', '2025-05-15 11:36:14'),
(96, 'Do My Homework', 'Do My Homework', 'do-my-homework', 'https://assignmenthelpuk.co.uk/do-my-homework', NULL, NULL, 1, 1, '2025-02-15 07:58:33', '2025-02-15 07:58:33'),
(97, 'Copywriting', 'Copywriting', 'copywriting', 'https://assignmenthelpuk.co.uk/copywriting', NULL, NULL, 1, 1, '2025-02-17 05:00:37', '2025-05-15 11:20:30'),
(98, 'Pay Someone to Do My Assignment', 'Pay Someone to Do My Assignment', 'pay-someone-to-do-my-assignment', 'https://assignmenthelpuk.co.uk/pay-someone-to-do-my-assignment', NULL, NULL, 1, 1, '2025-02-17 05:14:59', '2025-02-17 05:14:59'),
(99, 'Report Writing', 'Report Writing', 'report-writing', 'https://assignmenthelpuk.co.uk/report-writing', NULL, NULL, 1, 1, '2025-02-18 01:25:49', '2025-05-15 11:25:32'),
(100, 'SWOT Analysis Assignment', 'SWOT Analysis Assignment', 'swot-analysis-assignment', 'https://assignmenthelpuk.co.uk/swot-analysis-assignment', NULL, NULL, 1, 1, '2025-02-18 02:24:51', '2025-05-15 11:24:54'),
(101, 'Summary Writing', 'Summary Writing', 'summary-writing', 'https://assignmenthelpuk.co.uk/summary-writing', NULL, NULL, 1, 1, '2025-02-18 02:38:27', '2025-05-14 09:27:14'),
(102, 'Conclusion Writing', 'Conclusion Writing', 'conclusion-writing', 'https://assignmenthelpuk.co.uk/conclusion-writing', NULL, NULL, 1, 1, '2025-02-18 04:49:21', '2025-05-14 08:54:33'),
(103, 'CTH Assignment', 'CTH Assignment', 'cth-assignment', 'https://assignmenthelpuk.co.uk/cth-assignment', NULL, NULL, 1, 1, '2025-02-18 05:26:22', '2025-05-14 08:55:51'),
(104, 'TMA Assignment', 'TMA Assignment', 'tma-assignment', 'https://assignmenthelpuk.co.uk/tma-assignment', NULL, NULL, 1, 1, '2025-02-18 05:58:29', '2025-05-14 09:32:29'),
(105, 'Lab Report Writing', 'Lab Report Writing', 'lab-report-writing', 'https://assignmenthelpuk.co.uk/lab-report-writing', NULL, NULL, 1, 1, '2025-02-19 01:52:44', '2025-05-15 11:31:27'),
(107, 'College Essay Writing', 'College Essay Writing', 'college-essay-writing', 'https://assignmenthelpuk.co.uk/college-essay-writing', NULL, NULL, 1, 1, '2025-03-24 07:53:11', '2025-05-14 08:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `for` varchar(255) NOT NULL,
  `css_class` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `slug`, `for`, `css_class`) VALUES
(1, 'Pending', 'pending', 'order', 'badge-warning'),
(2, 'In Progress', 'in-progress', 'order', 'badge-info'),
(3, 'Completed', 'completed', 'order', 'badge-success'),
(4, 'Unpaid', 'unpaid', 'invoice', 'badge-warning'),
(5, 'Paid', 'paid', 'invoice', 'badge-success');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `active`) VALUES
(1, 'Art', 1),
(2, 'Architecture', 1),
(3, 'Dance', 1),
(4, 'Design Analysis', 1),
(5, 'Drama', 1),
(6, 'Movies', 1),
(7, 'Music', 1),
(8, 'Paintings', 1),
(9, 'Theatre', 1),
(10, 'Biology', 1),
(11, 'Chemistry', 1),
(12, 'Communication and Media', 1),
(13, 'Advertising', 1),
(14, 'Communication Strategies', 1),
(15, 'Journalism', 1),
(16, 'Public Relations', 1),
(17, 'Creative Writing', 1),
(18, 'Economics', 1),
(19, 'Accounting', 1),
(20, 'Case Study', 1),
(21, 'Company Analysis', 1),
(22, 'E-Commerce', 1),
(23, 'Finance', 1),
(24, 'Logistics', 1),
(25, 'Trade', 1),
(26, 'Education', 1),
(27, 'Application Essay', 1),
(28, 'Education Theories', 1),
(29, 'Pedogogy', 1),
(30, 'Teacher\'s Career', 1),
(31, 'Engineering', 1),
(32, 'English', 1),
(33, 'Ethics', 1),
(34, 'History', 1),
(35, 'African-American Studies', 1),
(36, 'American History', 1),
(37, 'Asian Studis', 1),
(38, 'Canadian Studies', 1),
(39, 'East European Studies', 1),
(40, 'Holocaust', 1),
(41, 'Latin-American Studies', 1),
(42, 'Native-American Studies', 1),
(43, 'West European Studies', 1),
(44, 'Law', 1),
(45, 'Criminology', 1),
(46, 'Legal Issues', 1),
(47, 'Linguistics', 1),
(48, 'Literature', 1),
(49, 'American Literature', 1),
(50, 'Antique Literature', 1),
(51, 'Asian Literature', 1),
(52, 'English Literature', 1),
(53, 'Shakespeare Studies', 1),
(54, 'Management', 1),
(55, 'Marketing', 1),
(56, 'Mathematics', 1),
(57, 'Medicine and Health', 1),
(58, 'Alternative Medicine', 1),
(59, 'Healthcare', 1),
(60, 'Nursing', 1),
(61, 'Nurtition', 1),
(62, 'Pharmacology', 1),
(63, 'Sport', 1),
(64, 'Nature', 1),
(65, 'Agricultural Studies', 1),
(66, 'Anthropology', 1),
(67, 'Astronomy', 1),
(68, 'Environmental Issues', 1),
(69, 'Geography', 1),
(70, 'Geology', 1),
(71, 'Philosophy', 1),
(72, 'Physics', 1),
(73, 'Political Science', 1),
(74, 'Psychology', 1),
(75, 'Religion and Theology', 1),
(76, 'Sociology', 1),
(77, 'Technology', 1),
(78, 'Aeronautics', 1),
(79, 'Aviation', 1),
(80, 'Computer Science', 1),
(81, 'Internet', 1),
(82, 'IT Management', 1),
(83, 'Web Design', 1),
(84, 'Toursim', 1),
(85, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Assignment', NULL, NULL),
(2, 'Thesis', NULL, NULL),
(3, 'Writing', NULL, NULL),
(4, 'Essay', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_name` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `address`, `state`, `zip_code`, `city`, `country`, `email_verified_at`, `password`, `provider_id`, `provider_name`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'info@marketingassignmentshelp.co.uk', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$cRuDpmtAMap4xPvGeyPj0eZnhQdEJ2zajDjCn67W.6n9zAfSz9v16', NULL, NULL, '5i1xugihsF1krMfdriJx76mmkJb2MnkjT67SyRn5I5Ld11nMOk2r8DYJPD29', NULL, NULL, NULL),
(45, 'Eugenia Graves', 'mahwishali.kingdomvision@gmail.com', '+16578522782', NULL, NULL, NULL, NULL, 'Malawi', NULL, '$2y$12$MZ65Ya.zE6aGqmJA6VxV.uK5BnZA7GO5WHw259ecMsuYQQUAJsNVu', NULL, NULL, NULL, '2025-10-11 10:03:23', '2025-10-11 10:03:23', NULL),
(46, 'Hamza', 'hamzakarim786@gmail.com', '+443413096652', NULL, NULL, NULL, NULL, 'Pakistan', NULL, '$2y$12$x92MjGKpH7bzXPlcZ7pLPe3/EpXpoHOGrWq2wlLNMqGtdCKtcvClW', NULL, NULL, NULL, '2025-10-14 08:54:06', '2025-10-14 08:54:06', NULL),
(47, 'Anne Koch', 'ayeshaaa.6000@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'Uganda', NULL, '$2y$12$Bkr2wuh3Q4YQ9ZVGXTn1COI4Dkj3Ekyi/Q00SGU5b33ubTieI2GBO', NULL, NULL, NULL, '2025-10-14 09:10:35', '2025-10-14 09:10:35', NULL),
(48, 'riffat mushtaq', 'Mahik6061@gmail.com', '+447403663991', NULL, NULL, NULL, NULL, 'Albania', NULL, '$2y$12$tGfDpJQfsmNZkrAgnoIBs.tJoEu/ZNHa3TA0SBGz7s.mGd7PHRrRG', NULL, NULL, NULL, '2025-10-21 10:37:19', '2025-10-21 10:37:19', NULL),
(49, 'Jordan Decker', 'fowi@mailinator.com', '+12499577404', NULL, NULL, NULL, NULL, 'Republic of South Sudan', NULL, '$2y$12$eenFyjANqAnDynazysV7VusJzmVh0ArVRTWwGa8WKKKVCkAYO.6ti', NULL, NULL, NULL, '2026-01-08 12:06:27', '2026-01-08 12:06:27', NULL),
(50, 'Cameron Perkins', 'homegec@mailinator.com', '+447403663991', NULL, NULL, NULL, NULL, 'New Caledonia', NULL, '$2y$12$FYFKYmiVGCleg74SPlpdFe/15dtQ1QVHfBjnsOTzqGkG0oYYMzUx6', NULL, NULL, NULL, '2026-01-08 12:08:19', '2026-01-08 12:08:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `web_settings`
--

CREATE TABLE `web_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `instagram_link` varchar(255) DEFAULT NULL,
  `twitter_link` varchar(255) DEFAULT NULL,
  `linkedin_link` varchar(255) DEFAULT NULL,
  `whatsapp_no` varchar(255) DEFAULT NULL,
  `is_blogs_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_services_offers` tinyint(1) NOT NULL DEFAULT 0,
  `is_index` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_settings`
--

INSERT INTO `web_settings` (`id`, `name`, `email`, `contact`, `address`, `facebook_link`, `instagram_link`, `twitter_link`, `linkedin_link`, `whatsapp_no`, `is_blogs_offers`, `is_services_offers`, `is_index`) VALUES
(1, 'assignmenthelpuk', 'info@assignmenthelpuk.co.uk', '447403663991', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium odio dicta voluptate necessitatibus, error autem tenetur fuga eveniet maxime facilis quo aperiam hic, beatae ullam. Iusto, dolorum doloribus. Sed, cum.', 'https://www.facebook.com/assignmenthelpuk.co.uk/', 'https://www.instagram.com/assignmenthelpuk.co.uk/', 'https://www.pinterest.com/assignmenthelpukcouk/', 'null', 'https://api.whatsapp.com/send?phone=971555947610', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_levels`
--
ALTER TABLE `academic_levels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `academic_levels_name_unique` (`name`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_academic_level_id_foreign` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `deadlines`
--
ALTER TABLE `deadlines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deadlines_name_unique` (`name`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fares`
--
ALTER TABLE `fares`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fares_academic_level_id_foreign` (`academic_level_id`),
  ADD KEY `fares_deadline_id_foreign` (`deadline_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`),
  ADD KEY `files_order_id_foreign` (`order_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `invoices_ref_no_unique` (`ref_no`),
  ADD KEY `invoices_status_id_foreign` (`status_id`),
  ADD KEY `invoices_user_id_foreign` (`user_id`),
  ADD KEY `invoices_order_id_foreign` (`order_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_status_id_foreign` (`status_id`);

--
-- Indexes for table `paper_types`
--
ALTER TABLE `paper_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paper_types_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6657804` (`role_id`),
  ADD KEY `permission_id_fk_6657804` (`permission_id`);

--
-- Indexes for table `reference_styles`
--
ALTER TABLE `reference_styles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `refrence_styles_name_unique` (`name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6657813` (`user_id`),
  ADD KEY `role_id_fk_6657813` (`role_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `statuses_name_unique` (`name`),
  ADD UNIQUE KEY `statuses_slug_unique` (`slug`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subjects_name_unique` (`name`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_levels`
--
ALTER TABLE `academic_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=243;

--
-- AUTO_INCREMENT for table `deadlines`
--
ALTER TABLE `deadlines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fares`
--
ALTER TABLE `fares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `paper_types`
--
ALTER TABLE `paper_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reference_styles`
--
ALTER TABLE `reference_styles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_academic_level_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `fares`
--
ALTER TABLE `fares`
  ADD CONSTRAINT `fares_academic_level_id_foreign` FOREIGN KEY (`academic_level_id`) REFERENCES `academic_levels` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fares_deadline_id_foreign` FOREIGN KEY (`deadline_id`) REFERENCES `deadlines` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
