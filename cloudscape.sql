-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2026 at 10:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudscape`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'admin@cloudscape.com', '$2y$12$td2zCCbTnHa7dxWz2CFeduBUvhSFx7F3FrnCZChVyD39PPE5Z.n/e', '2026-01-24 05:01:14', '2026-02-09 02:49:02');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `age_group` enum('child','teen','adult') NOT NULL,
  `doctor_name` varchar(255) DEFAULT NULL,
  `service_name` varchar(255) DEFAULT NULL,
  `preferred_date` date DEFAULT NULL,
  `preferred_time` time DEFAULT NULL,
  `additional_info` text DEFAULT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `full_name`, `email`, `phone`, `age_group`, `doctor_name`, `service_name`, `preferred_date`, `preferred_time`, `additional_info`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ddd', 'rasmasherin@gmail.com', '1234567890', 'child', NULL, NULL, NULL, '16:30:00', 'dddd', 'pending', '2026-01-29 05:38:22', '2026-01-29 05:38:22'),
(2, 'kl', 'admin@cloudscape.com', '7736145293', 'teen', NULL, NULL, '2026-01-22', NULL, 'm,m,', 'pending', '2026-01-29 05:50:03', '2026-01-29 05:50:03'),
(3, 'wqhjeuiowjh', 'admin@hirehub.com', '1234567890', 'child', NULL, NULL, '2026-01-30', '09:58:00', '4444444444444444444444', 'pending', '2026-01-29 05:55:14', '2026-01-29 05:55:14'),
(4, 'jhbhd', 'astrakgd@gmail.com', '7777777777', 'teen', NULL, NULL, '2026-01-15', '22:08:00', 'hjhuhkjlk', 'pending', '2026-01-29 06:03:12', '2026-01-29 06:03:12'),
(5, 'bnmm', 'ra@gmail.com', '0987654321', 'adult', 'Dr. James Wilson', 'Speech & Language Therapy', '2026-01-16', '23:07:00', 'fjkkopfrjf[peojhe]pr[owejhkkipdo', 'pending', '2026-01-29 07:02:38', '2026-01-29 07:02:38'),
(6, 'azmi', 'azmi@gmail.com', '1234567890', 'child', 'Dr. James Wilson', 'Physiotherapy', '2026-02-03', '13:19:00', 'azmi azmi azmiiiii', 'pending', '2026-02-03 02:16:18', '2026-02-03 02:16:18'),
(7, 'sherin', 'rasmasherin@gmail.com', '0987654321', 'child', 'Dr. Sarah Johnson', 'Occupational Therapy', '2026-02-09', '14:14:00', 'mmm', 'pending', '2026-02-09 03:11:29', '2026-02-09 03:11:29'),
(8, 'iiiiiiii', 'admin@hirehub.com', '7736145293', 'child', 'Dr. Michael Chen', 'Occupational Therapy', '2026-02-11', '16:12:00', 'gmhm', 'pending', '2026-02-09 05:09:48', '2026-02-09 05:09:48'),
(9, 'shaaa', 'rasmasherin@gmail.com', '7736145293', 'child', 'Dr. Sarah Johnson', 'Occupational Therapy', '2026-02-05', '19:38:00', 'jj', 'pending', '2026-02-09 06:38:43', '2026-02-09 06:38:43'),
(10, 'marzan', 'rasmasherin9@gmail.com', '0987654321', 'child', 'Dr. Michael Chen', 'Occupational Therapy', '2026-02-26', '17:43:00', 'hjjhjjhhj', 'pending', '2026-02-09 06:40:50', '2026-02-09 06:40:50'),
(11, 'neha', 'rasmasherin@gmail.com', '7777777777', 'child', NULL, 'Physiotherapy', '2026-02-11', '17:47:00', 'fjkkf', 'pending', '2026-02-09 06:44:21', '2026-02-09 06:44:21'),
(12, 'eeeeeeeeeeeeeeeeeee', 'eeee@gmail.com', '0987654321', 'child', NULL, 'Developmental Assessments', NULL, NULL, NULL, 'pending', '2026-02-10 06:08:05', '2026-02-10 06:08:05');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `content` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `category`, `image`, `excerpt`, `content`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Welcome to Our Space: Where Every Child Is Heard, Understood, and Supported', 'welcome-to-our-space-where-every-child-is-heard-understood-and-supported-1770273355', 'Child Development', 'blogs/BhkKOY5UNPwU5e5ltXzrTJtdroFHbFa8ozsQg8hV.jpg', 'A place where every child feels safe, understood, and supported. Discover our heart-centered, evidence-based approach to speech therapy and child development.', 'Starting this center has been more than a professional dream. It is a journey of purpose, passion, and deep belief in every child’s potential.\r\n\r\nOver the years, while working with children and families, I have seen that when a child feels safe, understood, and supported, real growth happens. That belief is the foundation of our speech therapy and child development services.\r\n\r\nMore Than Therapy — A Place of Trust\r\n\r\nFor many parents, visiting a therapy center for the first time can feel overwhelming.\r\n\r\n“Will my child be okay?”\r\n“Will they improve?”\r\n“Am I doing enough?”\r\n\r\nYou are not alone.\r\nYour child is capable.\r\nAnd together, we will move forward — step by step.\r\n\r\nThis is not just a therapy clinic. It is a space of comfort, trust, and hope.\r\n\r\nEvery Child Has Their Own Timeline\r\n\r\nEvery child grows at their own pace. Some need extra support with speech, learning, behavior, or feeding — and that is perfectly okay.\r\n\r\nWe focus on understanding each child’s strengths and needs and providing personalized, evidence-based therapy.\r\n\r\nOur Approach: Heart + Science\r\n\r\nOur therapy combines professional expertise with genuine care.\r\n\r\nWe offer:\r\n• Speech and Language Therapy  \r\n• Occupational Therapy  \r\n• Early Intervention  \r\n• Feeding Therapy  \r\n• Parent Guidance  \r\n\r\nWe don’t just teach skills — we build confidence and communication.\r\n\r\nWalking With Parents\r\n\r\nParents are a child’s strongest support system. Through counseling, home programs, and regular guidance, we work as a team for your child’s progress.\r\n\r\nA Message From My Heart\r\n\r\nEvery child deserves a voice.\r\nEvery parent deserves support.\r\nEvery family deserves hope.\r\n\r\nIf you are concerned about your child’s development, we are here for you.\r\n\r\nLet’s build their future together — one smile, one word, one small victory at a time.', 1, '2026-02-05 01:05:55', '2026-02-05 01:05:55'),
(4, 'Understanding Children’s Behaviour', 'understanding-childrens-behaviour-1770273614', 'Behaviour Therapy', 'blogs/mQsqppgqizOG7ZH6tVhVTgLZoKtnjfHy2lQzlkEh.jpg', 'Children communicate their needs and emotions through behaviour. Understanding why behaviours occur helps parents respond effectively and support healthy development.', 'Children express their needs, emotions, and difficulties through their behaviour. Understanding why a child behaves in a certain way helps parents and caregivers respond more effectively and support healthy development.\r\n\r\nWhat Is Child Behaviour?\r\n\r\nChild behaviour refers to how a child acts, responds, and communicates in different situations such as at home, school, or in social settings. Behaviour is often a child’s way of expressing feelings they may not yet have words for.\r\n\r\nWhat Is Positive Behaviour?\r\n\r\nPositive behaviour includes actions that help a child learn, communicate, and interact well with others.\r\n\r\nExamples of positive behaviour include:\r\n• Following simple instructions  \r\n• Expressing needs using words or gestures  \r\n• Sharing and taking turns  \r\n• Managing emotions appropriately  \r\n• Participating in learning activities  \r\n\r\nPositive behaviours support a child’s confidence and overall development.\r\n\r\nWhat Is Maladaptive Behaviour?\r\n\r\nMaladaptive behaviour refers to behaviours that interfere with a child’s learning, safety, or social interaction.\r\n\r\nCommon examples include:\r\n• Aggression or frequent tantrums  \r\n• Self-injurious behaviours  \r\n• Difficulty following instructions  \r\n• Avoidance of tasks or social interaction  \r\n• Repetitive behaviours that affect learning  \r\n\r\nThese behaviours are not intentional but often a sign that the child needs support.\r\n\r\nHow Does Behaviour Therapy Help?\r\n\r\nBehaviour therapy focuses on understanding the reason behind a child’s behaviour and teaching appropriate alternatives.\r\n\r\nBehaviour therapy helps by:\r\n• Identifying the cause of challenging behaviours  \r\n• Encouraging positive behaviours  \r\n• Teaching communication and social skills  \r\n• Improving attention and emotional regulation  \r\n• Supporting learning and daily functioning  \r\n\r\nTherapy plans are structured, child-friendly, and individualized.\r\n\r\nThe Importance of Parent Involvement\r\n\r\nParent involvement is an essential part of behaviour therapy.\r\n\r\nParents are supported to:\r\n• Understand their child’s behaviour  \r\n• Use positive strategies at home  \r\n• Maintain consistency across settings  \r\n• Strengthen parent-child interaction  \r\n\r\nConsistent guidance helps children show progress more effectively.', 1, '2026-02-05 01:10:14', '2026-02-05 01:10:14'),
(5, 'My Child Walks on Toes – Should I Be Worried?', 'my-child-walks-on-toes-should-i-be-worried', 'Pediatric Physiotherapy', 'blogs/ROA56GPuiJAbCVZw5kyZwjvlDx9BJ62XMJPZ1BEJ.jpg', 'Toe walking can be normal in early walkers, but if it continues after the age of 2–3 years, it may need attention. Learn when to worry and how therapy can help.', 'Many parents notice that their child prefers to walk on their toes instead of placing their heels on the ground. At first, it may even look cute or playful. Some parents think the child is just being naughty or enjoying a new way of walking.\r\n\r\nBut when this continues for months, an important question comes up:\r\n\r\nIs toe walking normal, or does my child need help?\r\n\r\nLet’s understand this in a simple way.\r\n\r\nWhat Is Toe Walking?\r\n\r\nSometimes parents observe that their child walks only on the front part of the feet, without the heels touching the floor. This walking pattern is called toe walking.\r\n\r\nIt is quite common when children are just learning to walk. During this stage, their balance is still developing, and walking on toes can simply be part of learning this new skill.\r\n\r\nHowever, if this pattern continues even after the age of 2 years, it deserves a little more attention.\r\n\r\nWhen Is Toe Walking Considered Normal?\r\n\r\nToe walking can be normal:\r\n• In children below 2 years of age who are still learning to walk  \r\n• Occasionally during play, excitement, or while pretending  \r\n• If the child is able to walk normally (heel down) when asked to do so  \r\n\r\nIn these situations, it is usually just a temporary habit and not a concern.\r\n\r\nWhen Should Parents Be Concerned?\r\n\r\nParents should consider an assessment if:\r\n• The child is older than 2–3 years and still walks mostly on toes  \r\n• The child is unable to bring the heels down even when reminded  \r\n• There is noticeable tightness in the calf muscles  \r\n• The child frequently trips, falls, or loses balance  \r\n• There are delays in other developmental milestones  \r\n• The child shows signs like sensory sensitivity, poor eye contact, or repetitive behaviors  \r\n\r\nMany parents assume this will correct on its own, but persistent toe walking is often the body’s way of adapting to an underlying issue.\r\n\r\nWhat Causes Toe Walking?\r\n\r\nToe walking can happen due to several reasons.\r\n\r\n1. Tight Calf Muscles (Muscle Tightness)\r\n\r\nWhen the calf muscles are tight, the ankle cannot bend properly. Because of this, it becomes difficult for the heel to touch the ground.\r\n\r\n2. Sensory Processing Issues\r\n\r\nSome children are uncomfortable with the feeling of the floor touching their feet. Walking on toes reduces that sensory input and feels easier for them.\r\n\r\n3. Habitual Toe Walking\r\n\r\nSometimes, the child simply develops this walking pattern and continues it out of habit without any major underlying problem.\r\n\r\n4. Neurological or Developmental Conditions\r\n\r\nToe walking is commonly seen in children with:\r\n• Autism Spectrum Disorder  \r\n• ADHD  \r\n• Developmental delays  \r\n• Mild neurological involvement  \r\n\r\nThis does not mean every child who toe walks has these conditions, but it is important to rule them out.\r\n\r\nWhy Early Attention Is Important\r\n\r\nIf toe walking continues for a long time, it can gradually lead to:\r\n• Shortened calf muscles  \r\n• Reduced ankle mobility  \r\n• Poor balance  \r\n• Changes in posture  \r\n• Difficulty in running and playing  \r\n• Foot pain later in life  \r\n\r\nThe good news is that early physiotherapy can prevent most of these complications.\r\n\r\nHow Pediatric Physiotherapy and Occupational Therapy Help\r\n\r\nA pediatric physiotherapist will assess:\r\n• Muscle tightness  \r\n• Ankle movement  \r\n• Balance and coordination  \r\n• Walking pattern  \r\n• Overall development  \r\n\r\nIf needed, an occupational therapist may assess sensory processing as well.\r\n\r\nTreatment may include:\r\n• Gentle calf stretching exercises  \r\n• Activities to improve heel contact during walking  \r\n• Balance and walking training  \r\n• Sensory integration activities (if required)  \r\n• Parent-guided home exercises  \r\n\r\nIn clinical practice, many children show very good improvement with early and consistent intervention.\r\n\r\nSimple Activities Parents Can Try at Home\r\n\r\nThese are not replacements for therapy, but they can definitely help:\r\n• Encourage your child to walk barefoot on different surfaces like grass, mat, or sand  \r\n• Practice “heel walking” like a fun game  \r\n• Calf stretches while sitting with legs straight  \r\n• Squatting games (like picking toys from the floor)  \r\n• Walking up slopes or ramps  \r\n\r\nThe Takeaway for Parents\r\n\r\nToe walking is common in early walkers, but persistent toe walking is something that should not be ignored.\r\n\r\nWith timely assessment and simple therapy, children can return to a normal walking pattern and avoid future problems.\r\n\r\nIf you notice your child frequently walking on toes after the age of 2–3 years, consulting a pediatric physiotherapist can make a big difference.\r\n\r\nEarly attention often leads to easy correction.', 1, '2026-02-05 01:36:54', '2026-02-05 02:58:04'),
(6, 'wehjwwwwwwwwwwwwww', 'wehjwwwwwwwwwwwwww-1770276445', 'hqasjkkkkkkkkk', 'blogs/VwfZMBJxdiDX3SDOpXdiPDJF1SCTnqsv1woVvvE5.jpg', 'ajkdsh;;;;;;;edjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 'jkwdqnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnheweiuqryuefynjxkcnksjakdiqwhdkwednbipejdjwhadwajnjdksajduiwuewfdopdhas;djwkdjwhdjhgweiuwq;dkjsa;lkdsjadopwquywqiphewl;fjdsbfopjheoueop[qwndkaskhgwehdwgye8otre0whfkjkfskowioeruyriuwoipdwqopijkhsfjkwaehjfqwiuoguiqeiopuraklasndm,oiufserurawjkhrWRhjliwrjliwdN<MCskaahfaio;sdfndsmM<NSD>JKFshufdadfjls;kdsvjnk>jklfduhsoas;jkhsfdskjkhsdfroigsyuriatuoi.jksdadsLKJ', 0, '2026-02-05 01:57:25', '2026-02-09 04:02:24');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `job_type` enum('Full Time','Part Time','Contract') NOT NULL DEFAULT 'Full Time',
  `description` text NOT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `skills` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `title`, `location`, `job_type`, `description`, `experience`, `qualification`, `skills`, `status`, `created_at`, `updated_at`) VALUES
(7, 'ssss', 'qsq', 'Part Time', 'dwdwq', 'ss', 'sssss', 'sss', 0, '2026-02-08 03:22:11', '2026-02-10 04:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `career_applications`
--

CREATE TABLE `career_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `other_position` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `cover_letter` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_applications`
--

INSERT INTO `career_applications` (`id`, `full_name`, `email`, `phone`, `position`, `other_position`, `qualification`, `experience`, `resume`, `cover_letter`, `created_at`, `updated_at`) VALUES
(1, 'jhbhd', 'hhsqj@gmail.com', '7736145293', 'Speech Therapy', NULL, 'qssw', '0-1', 'career_resumes/dXCfa84YOTciDBbPzbn1FIqYMHaB6pRE3uddVpbf.pdf', 'asas', '2026-01-28 23:03:38', '2026-01-28 23:03:38'),
(2, 'uhyu', 'rasmasherin@gmail.com', '7736145293', '1', NULL, 'k,l;;;', '0-1', 'resumes/ifJ4i6cEv9V2RDZHzCTaWr8fO7fuV4tELfrPyCHn.pdf', 'wewe', '2026-01-28 23:34:40', '2026-01-28 23:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `consultations`
--

CREATE TABLE `consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `consultations`
--

INSERT INTO `consultations` (`id`, `name`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'sherim', '7777777777', 'sdsds@gmail.com', '2026-02-10 01:53:41', '2026-02-10 01:53:41'),
(2, 'fffffffffffffffffffff', '44444444444444444', 'admin@hirehub.com', '2026-02-10 03:48:34', '2026-02-10 03:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `company`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'sd', 'ss', 'admin@hirehub.com', '1234567890', 'hjsujshj', 'wwww', '2026-02-09 04:24:31', '2026-01-29 04:24:31'),
(2, 'sd', 'ss', 'admin@hirehub.com', '1234567890', 'hjsujshj', 'wwww', '2026-01-29 04:25:30', '2026-01-29 04:25:30'),
(5, 'jkkkkkkkkkkk', NULL, 'nvnnnnnnnnnnnn@gmail.com', '234444444444444', 'jhbbbbbbbbbm', 'nmmmmmmmmmmm', '2026-02-11 09:37:24', '2026-02-11 09:37:24'),
(6, 'ijoj', NULL, 'rasmasherin9@gmail.com', '777777777777777', 'bjm', 'kkkkkkkk', '2026-02-11 09:39:31', '2026-02-11 09:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(3, 'gallery/oW81uLCJ1lABOSil9EP8pubgxADW3qeklZJjbq8X.jpg', NULL, '2026-02-05 05:36:55', '2026-02-05 05:36:55'),
(4, 'gallery/BlTdpdin301CVbhVwny3emq3Tf23jrASAgvAzlJ1.jpg', NULL, '2026-02-05 05:37:31', '2026-02-05 05:37:31'),
(5, 'gallery/Favtv4pGD5QMhBi5S0JSRFKJNMLh5JIYQRFQZSFZ.jpg', NULL, '2026-02-05 05:37:48', '2026-02-05 05:37:48'),
(6, 'gallery/Nsa1RAfWxOtHRusB5PtrfH0QHFJ5FPspYAu1C3BW.jpg', NULL, '2026-02-05 05:38:15', '2026-02-05 05:38:15'),
(7, 'gallery/GY0k2IGXYpkUdmNCUFF7FzKiUisHIxMeVPE54Udg.jpg', NULL, '2026-02-05 05:38:39', '2026-02-05 05:38:39'),
(8, 'gallery/M9N57n1w3UKGkTz1blitsjGSjmPPOqxFCHKVF9Xl.jpg', NULL, '2026-02-05 05:39:02', '2026-02-05 05:39:02'),
(10, 'gallery/TYZuZ0clggRyHTWL1rDZdoYpCakpYnbPfFUuSBVv.jpg', NULL, '2026-02-05 05:39:53', '2026-02-05 05:39:53'),
(11, 'gallery/lkL9CdAqp19JTxCwsajntwMJ6i21LoXJzU70ADWT.jpg', NULL, '2026-02-05 05:40:12', '2026-02-05 05:40:12'),
(13, 'gallery/zLdhoFsGy7Ot1dsneF4x7cJa0wCHRbbOXEhSuhO6.jpg', NULL, '2026-02-11 09:07:54', '2026-02-11 09:07:54'),
(14, 'gallery/miOwghBu5H9ZkdijNDqaNqPVHSpMUkTZzZari4jD.jpg', NULL, '2026-02-11 09:07:55', '2026-02-11 09:07:55');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_01_24_083044_create_admins_table', 1),
(5, '2026_01_27_120501_create_services_table', 2),
(6, '2026_01_28_063638_create_services_table', 3),
(7, '2026_01_28_084536_create_careers_table', 4),
(8, '2026_01_28_090618_create_career_applications_table', 5),
(9, '2026_01_28_094608_create_contact_messages_table', 6),
(10, '2026_01_28_101031_create_appointments_table', 7),
(11, '2026_02_05_055152_create_blogs_table', 8),
(12, '2026_02_05_094301_create_galleries_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`features`)),
  `display_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`, `icon`, `features`, `display_order`, `created_at`, `updated_at`) VALUES
(8, 'Speech and Language Therapy', 'Our Speech and Language Therapy service helps children and adults improve communication skills, speech clarity, language comprehension, and social interaction. Our licensed therapists provide personalized sessions tailored to individual needs, fostering confidence and effective communication in everyday life.', 'services/pT8pbZRN1kKFM4e1Dlx80CsWV6dqxDeh1hul19xt.jpg', 'services/icons/0Aysve6LQrSKmbo4RTOcEYWdUKD6SrQpiLOcqPlp.png', '[\"Individualized therapy sessions based on client needs.\",\"Assessment of speech, language, and communication difficulties.\",\"Techniques to improve articulation, pronunciation, and fluency.\",\"Support for social communication and language comprehension.\",\"Use of engaging, evidence-based activities and exercises.\"]', 1, '2026-02-05 06:18:48', '2026-02-05 06:18:48'),
(9, 'Occupational Therapy', 'Our Occupational Therapy service focuses on helping individuals of all ages develop, recover, or maintain daily living and work skills. We design personalized programs to enhance physical, sensory, and cognitive abilities, empowering clients to lead more independent and fulfilling lives.', 'services/9QcNKkt24je3eAmd48dD0mG1xkiyxLP2Yr1hVT17.jpg', 'services/icons/pGUtahme2MtWq0PimmEa3Vrz2whw0Rgt0IwobprO.png', '[\"Assistance with fine motor skills, coordination, and sensory processing.\",\"Support for daily living activities such as dressing, eating, and self-care.\",\"Techniques to improve cognitive function, attention, and problem-solving.\",\"Adaptive equipment training to promote independence.\",\"Personalized therapy plans tailored to individual needs\"]', 2, '2026-02-05 06:25:49', '2026-02-05 06:47:34'),
(10, 'Psychological and Behavioural Support', 'Our Psychological and Behavioural Support service helps children and adults manage emotional, social, and behavioural challenges. Our trained psychologists provide personalized interventions to promote mental well-being, improve coping strategies, and foster positive behaviour in everyday life.', 'services/r6IsQdZ1l1BmzytrHsT6HJ1QVetSlBbnu2X6Tqe1.jpg', 'services/icons/V1OgE2k77RbxGMKkidnVLbOZO8ynwNQgqdNrdrXF.png', '[\"Individual and group counselling sessions.\",\"Behaviour assessment and personalized intervention plans.\",\"Support for anxiety, stress, anger management, and emotional regulation.\",\"Guidance for parents, caregivers, and educators\",\"Strategies to improve social skills and interpersonal relationships\"]', 3, '2026-02-05 06:29:08', '2026-02-05 06:40:06'),
(11, 'Physiotherapy', 'Our Physiotherapy service focuses on improving mobility, strength, and overall physical health for children and adults. Through personalized exercise programs, manual therapy, and rehabilitation techniques, we help clients recover from injuries, manage chronic conditions, and enhance physical function for daily life activities.', 'services/KlXUaM9s0uhtCrJUq4AOPG4PFUFCVseP80pd8Mex.jpg', 'services/icons/Z4NMqG9kUyaSEXZhBtlJ2r95VxmfwWZVn3WJRAfA.png', '[\"Individualized assessment and therapy plans.\",\"Exercises to improve strength, flexibility, and balance.\",\"Rehabilitation after injury, surgery, or illness.\",\"Pain management techniques and postural correction\",\"Support for neurological, musculoskeletal, and developmental conditions\"]', 4, '2026-02-05 06:43:09', '2026-02-05 06:43:09'),
(12, 'Developmental and Functional Assessments', 'Our Developmental and Functional Assessments provide a comprehensive evaluation of a child’s or adult’s physical, cognitive, social, and emotional development. These assessments help identify strengths, challenges, and areas that require targeted intervention, allowing our specialists to create personalized therapy plans for optimal growth and progress.', 'services/Hpo22ID7KDL9MJNpCkkkeB6B7LHvvSj0ceof6P4E.jpg', 'services/icons/2nRVcDtHCKhxljTJmPGzTjpfbLK7OVsNPAnm2F6q.png', '[\"Comprehensive evaluation of physical, cognitive, and social skills.\",\"Early detection of developmental delays or learning challenges.\",\"Functional assessments for daily living skills and independence.\",\"Personalized recommendations for therapy and intervention.\",\"Support for educational planning and goal setting\"]', 5, '2026-02-05 06:45:24', '2026-02-05 06:46:43');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('BOxOMig7wA72BLPjEh3zCJFkFTKuVUTIQKUWjk8O', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMnN5ZldFT1ZSaThBM1VtaHJ1OE9JVzRaU2xISkJFa0RTMkpWV1NqTyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9jb250YWN0LW1lc3NhZ2VzLzYiO3M6NToicm91dGUiO3M6Mjc6ImFkbWluLmNvbnRhY3RfbWVzc2FnZXMuc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTI6ImxvZ2luX2FkbWluXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTt9', 1770822579),
('TjkaOoYsr3KsFYudkbyDID510LZSZM9N8Buny9UR', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/145.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWThvckM5SnF1UnJ1NjBZZmRwVnFsUFpoaGpvdGF4ODY3ZlA5a29qZiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ibG9ncy91bmRlcnN0YW5kaW5nLWNoaWxkcmVucy1iZWhhdmlvdXItMTc3MDI3MzYxNCI7czo1OiJyb3V0ZSI7czoxMDoiYmxvZ3Muc2hvdyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1772095684),
('v4QoBxheXowCIyN5jFGJdIQEChH6fzK0LjwOhZR6', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVERFTEZJVGpWSjBKMENNYXhKbDhxWFphMHhKWE5WM2pYWTNsU1hrQiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1770820564);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_applications`
--
ALTER TABLE `career_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consultations`
--
ALTER TABLE `consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career_applications`
--
ALTER TABLE `career_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `consultations`
--
ALTER TABLE `consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
