-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 07:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edubeelaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `address`, `phone`) VALUES
('2', 'admin', 'admin@edubee.edu', 'gafafa', '15156'),
('124578', 'monim', 'monim@edubee.edu', 'bangladesh', '05151');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(10) UNSIGNED NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courseforstudents`
--

CREATE TABLE `courseforstudents` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` double(8,2) NOT NULL,
  `courseid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grades` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courseforstudents`
--

INSERT INTO `courseforstudents` (`id`, `name`, `email`, `cgpa`, `courseid`, `coursename`, `section`, `marks`, `grades`) VALUES
('17-35193-2', 'sajid islam', 'sajid@edubee.edu', 3.77, 'cs101', 'introduction to programming', 'A', '90', 'A+'),
('17-35193-2', 'sajid islam', 'sajid@edubee.edu', 3.77, 'cs302', 'web technology', 'A', '90', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `department`) VALUES
('cs101', 'introduction to programming', 'CSE'),
('cs302', 'web technology', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructorforcourses`
--

CREATE TABLE `instructorforcourses` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courseid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `instructorforcourses`
--

INSERT INTO `instructorforcourses` (`id`, `name`, `courseid`, `coursename`, `section`) VALUES
('123456', 'MD Alamin', 'cs302', 'web technology', 'A'),
('123456', 'MD Alamin', 'cs302', 'web technology', 'A'),
('123457', 'Md mohaimen bin noor', 'cs101', 'introduction to programming', 'A'),
('123457', 'Md mohaimen bin noor', 'cs101', 'introduction to programming', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `name`, `email`, `password`, `type`) VALUES
('1', 'superadmin', 'superadmin@edubee.edu', 'superadmin', 'superadmin'),
('2', 'admin', 'admin@edubee.edu', 'admin', 'admin'),
('3', 'moderator', 'moderator@edubee.edu', 'moderator', 'moderator'),
('4', 'instructor', 'instructor@edubee.edu', 'instructor', 'instructor'),
('5', 'student', 'student@gmail.com', 'student', 'student'),
('17-35193-2', 'sajid islam', 'sajid@edubee.edu', 'sajid', 'student'),
('17-35229-2', 'Rahman Md. Mahmudur mugdho', 'mugdho@edubee.edu', 'mugdho', 'student'),
('123456', 'Md Alamin', 'alamin@edubee.edu', 'alamin', 'instructor'),
('123457', 'Md mohaimen bin noor', 'mohaimen@edubee.edu', 'mohaimen', 'instructor'),
('124578', 'monim', 'monim@edubee.edu', 'monim', 'admin'),
('123789', 'sadia', 'sadia@edubee.edu', 'sadia', 'moderator');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2020_09_17_211807_create_admin_table', 1),
(2, '2020_09_17_212306_create_moderator_table', 1),
(3, '2020_09_17_213837_create_user_table', 1),
(4, '2020_09_17_213904_create_login_table', 1),
(5, '2020_09_17_214005_create_department_table', 1),
(6, '2020_09_17_214121_create_course_table', 1),
(7, '2020_09_17_214522_create_courseforstudent_table', 1),
(8, '2020_09_17_214721_create_instructorforcourse_table', 1),
(9, '2020_09_17_214848_create_announcements_table', 1),
(10, '2020_09_17_221355_create_assignments_table', 1),
(11, '2020_09_17_221542_create_videos_table', 1),
(12, '2020_09_17_221623_create_notes_table', 1),
(13, '2020_09_20_185356_create_posts_table', 2),
(14, '2020_09_23_095122_create_replies_table', 2),
(15, '2020_09_25_123222_add_cover_image_to_posts', 2),
(16, '2020_09_25_183223_create_profiles_table', 3),
(17, '2020_09_25_223610_create_senders_table', 4),
(18, '2020_09_25_223648_create_receivers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `moderators`
--

CREATE TABLE `moderators` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moderators`
--

INSERT INTO `moderators` (`id`, `name`, `email`, `address`, `phone`) VALUES
('3', 'moderator', 'moderator@edubee.edu', 'bangladesh', '056486516'),
('123789', 'sadia', 'sadia@edubee.edu', 'bangladesh', '0561521');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `coursename`, `section`, `filename`) VALUES
(1, 'web technology', 'A', 'Advacned_WEBTECH__EvaluationForm (1).docx'),
(2, 'web technology', 'A', 'ProjectMH_YourID (2).docx');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `userid`, `username`, `created_at`, `updated_at`, `cover_image`) VALUES
(1, 'first thing', '<p>Guzzle is a PHP HTTP client that makes it easy to send HTTP requests and trivial to integrate with web services.</p>\r\n\r\n<ul>\r\n	<li>Simple interface for building query strings, POST requests, streaming large uploads, streaming large downloads, using HTTP cookies, uploading JSON data, etc...</li>\r\n	<li>Can send both synchronous and asynchronous requests using the same interface.</li>\r\n	<li>Uses PSR-7 interfaces for requests, responses, and streams. This allows you to utilize other PSR-7 compatible libraries with Guzzle.</li>\r\n	<li>Abstracts away the underlying HTTP transport, allowing you to write environment and transport agnostic code; i.e., no hard dependency on cURL, PHP streams, sockets, or non-blocking event loops.</li>\r\n	<li>Middleware system allows you to augment and compose client behavior.</li>\r\n</ul>\r\n\r\n<pre>\r\n$client = new GuzzleHttp\\Client();\r\n$res = $client-&gt;request(&#39;GET&#39;, &#39;https://api.github.com/user&#39;, [\r\n    &#39;auth&#39; =&gt; [&#39;user&#39;, &#39;pass&#39;]\r\n]);\r\necho $res-&gt;getStatusCode();\r\n// &quot;200&quot;\r\necho $res-&gt;getHeader(&#39;content-type&#39;)[0];\r\n// &#39;application/json; charset=utf8&#39;\r\necho $res-&gt;getBody();\r\n// {&quot;type&quot;:&quot;User&quot;...&#39;\r\n\r\n// Send an asynchronous request.\r\n$request = new \\GuzzleHttp\\Psr7\\Request(&#39;GET&#39;, &#39;http://httpbin.org&#39;);\r\n$promise = $client-&gt;sendAsync($request)-&gt;then(function ($response) {\r\n    echo &#39;I completed! &#39; . $response-&gt;getBody();\r\n});\r\n$promise-&gt;wait();\r\n</pre>\r\n\r\n<h2>User Guide</h2>\r\n\r\n<ul>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html\">Overview</a>\r\n\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#requirements\">Requirements</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#installation\">Installation</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#bleeding-edge\">Bleeding edge</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#license\">License</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#contributing\">Contributing</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#guidelines\">Guidelines</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#running-the-tests\">Running the tests</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/overview.html#reporting-a-security-vulnerability\">Reporting a security vulnerability</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html\">Quickstart</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#making-a-request\">Making a Request</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#creating-a-client\">Creating a Client</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#sending-requests\">Sending Requests</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#async-requests\">Async Requests</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#concurrent-requests\">Concurrent requests</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#using-responses\">Using Responses</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#query-string-parameters\">Query String Parameters</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#uploading-data\">Uploading Data</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#post-form-requests\">POST/Form Requests</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#cookies\">Cookies</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#redirects\">Redirects</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#exceptions\">Exceptions</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#environment-variables\">Environment Variables</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/quickstart.html#relevant-ini-settings\">Relevant ini Settings</a></li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html\">Request Options</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#allow-redirects\">allow_redirects</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#auth\">auth</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#body\">body</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#cert\">cert</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#cookies\">cookies</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#connect-timeout\">connect_timeout</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#debug\">debug</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#decode-content\">decode_content</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#delay\">delay</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#expect\">expect</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#force-ip-resolve\">force_ip_resolve</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#form-params\">form_params</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#headers\">headers</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#http-errors\">http_errors</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#idn-conversion\">idn_conversion</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#json\">json</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#multipart\">multipart</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#on-headers\">on_headers</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#on-stats\">on_stats</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#progress\">progress</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#proxy\">proxy</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#query\">query</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#read-timeout\">read_timeout</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#sink\">sink</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#ssl-key\">ssl_key</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#stream\">stream</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#synchronous\">synchronous</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#verify\">verify</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#timeout\">timeout</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/request-options.html#version\">version</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html\">Guzzle and PSR-7</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#headers\">Headers</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#accessing-headers\">Accessing Headers</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#complex-headers\">Complex Headers</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#body\">Body</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#requests\">Requests</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#request-methods\">Request Methods</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#request-uri\">Request URI</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#scheme\">Scheme</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#host\">Host</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#port\">Port</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#path\">Path</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#query-string\">Query string</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#responses\">Responses</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#start-line\">Start-Line</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#id2\">Body</a></li>\r\n		</ul>\r\n		</li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#streams\">Streams</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#creating-streams\">Creating Streams</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#metadata\">Metadata</a></li>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/psr7.html#stream-decorators\">Stream Decorators</a></li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html\">Handlers and Middleware</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#handlers\">Handlers</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#middleware\">Middleware</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#handlerstack\">HandlerStack</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/handlers-and-middleware.html#creating-a-handler\">Creating a Handler</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/testing.html\">Testing Guzzle Clients</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/testing.html#mock-handler\">Mock Handler</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/testing.html#history-middleware\">History Middleware</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/testing.html#test-web-server\">Test Web Server</a>\r\n		<ul>\r\n			<li><a href=\"http://docs.guzzlephp.org/en/stable/testing.html#using-the-test-server\">Using the test server</a></li>\r\n		</ul>\r\n		</li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html\">FAQ</a>\r\n	<ul>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#does-guzzle-require-curl\">Does Guzzle require cURL?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#can-guzzle-send-asynchronous-requests\">Can Guzzle send asynchronous requests?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#how-can-i-add-custom-curl-options\">How can I add custom cURL options?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#how-can-i-add-custom-stream-context-options\">How can I add custom stream context options?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#why-am-i-getting-an-ssl-verification-error\">Why am I getting an SSL verification error?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#what-is-this-maximum-function-nesting-error\">What is this Maximum function nesting error?</a></li>\r\n		<li><a href=\"http://docs.guzzlephp.org/en/stable/faq.html#why-am-i-getting-a-417-error-response\">Why am I get</a></li>\r\n	</ul>\r\n	</li>\r\n</ul>', '2', 'admin', '2020-09-25 11:47:34', '2020-09-25 11:56:27', 'MicrosoftTeams-image_1601056587.png');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `sender_email`, `receiver_email`, `subject`, `email_body`, `created_at`, `updated_at`) VALUES
(1, 'admin@edubee.edu', 'sajid@edubee.edu', 'hello', 'hello you have been flagged', '2020-09-25 23:20:15', '2020-09-25 23:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `reply` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `postid` int(11) NOT NULL,
  `replyUid` int(11) NOT NULL,
  `replyUname` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply`, `postid`, `replyUid`, `replyUname`, `created_at`, `updated_at`) VALUES
(1, '<p>thanks bro</p>', 1, 1, 'superadmin', '2020-09-25 11:50:39', '2020-09-25 11:50:39');

-- --------------------------------------------------------

--
-- Table structure for table `senders`
--

CREATE TABLE `senders` (
  `id` int(10) UNSIGNED NOT NULL,
  `sender_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_body` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `senders`
--

INSERT INTO `senders` (`id`, `sender_email`, `receiver_email`, `subject`, `email_body`, `created_at`, `updated_at`) VALUES
(1, 'admin@edubee.edu', 'sajid@edubee.edu', 'hello', 'hello you have been flagged', '2020-09-25 23:20:15', '2020-09-25 23:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `type`, `department`) VALUES
('4', 'instructor', 'instructor@edubee.edu', '1564165', 'instructor', ''),
('5', 'student', 'student@gmail.com', '56156', 'student', ''),
('17-35193-2', 'sajid islam', 'sajid@edubee.edu', '0516512', 'student', 'CSE'),
('17-35229-2', 'Rahman Md. Mahmudur mugdho', 'mugdho@edubee.edu', '0561651', 'student', 'CSE'),
('123456', 'Md Alamin', 'alamin@edubee.edu', '056152132', 'instructor', 'CSE'),
('123457', 'Md mohaimen bin noor', 'mohaimen@edubee.edu', '05461561', 'instructor', 'CSE');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `coursename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `coursename`, `section`, `filename`) VALUES
(1, 'web technology', 'A', 'Your-Facebook-Video-fbdown.net.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `senders`
--
ALTER TABLE `senders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `senders`
--
ALTER TABLE `senders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
