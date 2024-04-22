-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 06:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pap_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `coursecurriculum`
--

CREATE TABLE `coursecurriculum` (
  `CourseID` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `CourseMaterial` text NOT NULL,
  `CourseAuthor` varchar(50) NOT NULL DEFAULT 'Unknown',
  `LastUpdated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coursecurriculum`
--

INSERT INTO `coursecurriculum` (`CourseID`, `Title`, `CourseMaterial`, `CourseAuthor`, `LastUpdated`, `created_at`, `updated_at`) VALUES
(1, 'Attack Structure', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span>Quando a fazer um ataque a um sistema, o primeiro passo que precede a todos os outros é o da enumeração. Neste passo aprendemos tudo o que podemos sobre o sistema que estamos a atacar. A estrutura de ataque pode ser dividida em 5 categorias principais:</span></p><ul><li><span>- Enumeração;</span></li><li><span>- Preparação;</span></li><li><span >- Exploitação;</span></li><li><span>- Elevação de privilégios;</span></li><li><span>- Pós exploitação.</span></li></ul></body></html>', 'q', '2024-04-16 14:08:20', NULL, NULL),
(5, 'Buffer Overflow', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Quando temos um servidor que recebe valores, ele geralmente tem um buffer. Um buffer é um limite de caracteres para o input do utilizador. Ao ultrapassar este limite criamos um buffer overflow. Ao criar um buffer overflow ele cria um leak de memória que podemos ler para perceber que variáveis escondidas temos.</span></p></body></html>', 'q', '2024-04-16 14:10:39', NULL, NULL),
(5, 'Commandline injection', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Em uma situação semelhante ao buffer overflow, o servidor recebe valores que depois são utilizados para executar um comando de sistema. Neste caso inserimos um valor inesperado como:</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">“; ls”</code></pre></body></html>', 'q', '2024-04-16 14:10:47', NULL, NULL),
(7, 'Image Forensics', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Para encontrar um tipo de ficheiro para uma imagem é necessário baixá-la e corrê-la por um programa que a decompõe em binários. </span></p><p><span >Sugiro este: </span></p><p><a href=\"https://hexed.it/\"><span style=\"color:#1155cc;\">https://hexed.it/</span></a></p><p><span >Depois verificar os primeiros 6 bits e associá-los a um tipo de ficheiro com este repositório: </span></p><p><a href=\"https://www.garykessler.net/library/file_sigs.html\"><span style=\"color:#1155cc;\">https://www.garykessler.net/library/file_sigs.html</span></a></p></body></html>', 'q', '2024-04-16 14:12:16', NULL, NULL),
(6, 'Level 1 Guide', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p> </p><p>Level 1: The Vulnerable Server (Beginner Level)</p><p>Step 1: Get Metasploit VM</p><p>Step 2: Discover Vulnerabilities<br />- Use network scanning tools like Nmap to identify open ports and services running on the vulnerable server.</p><p> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">nmap -p- &lt;IP_Address&gt;\nnmap -A &lt;IP_Address&gt;</code></pre><p> </p><p>- Identify the services that are running outdated or vulnerable software.</p><p> </p><p>Step 3: Exploit Vulnerabilities with Metasploit<br />- Launch Metasploit framework in your terminal.</p><p> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\"> msfconsole</code></pre><p><br />- Search for available exploits related to the identified vulnerabilities.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">search &lt;vulnerability&gt;</code></pre><p><br />- Select an appropriate exploit and set the required options.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">use &lt;exploit_name&gt;\nset RHOST &lt;IP_Address&gt;</code></pre><p><br />- Execute the exploit.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">exploit</code></pre><p> </p><p>Step 4: Locate the Flag<br />- Once the exploit is successful, navigate through the compromised system to locate the flag.<br />- Common locations for flags include /root/flag.txt or /home/user/flag.txt.<br />- Use commands like ls, `cd, and cat to navigate and read files.</p><p>Step 5: Capture the Flag<br />- Once you find the flag, copy the content or note down the flag.<br />- Submit the flag.</p><p> </p></body></html>', 'q', '2024-04-16 13:59:02', NULL, NULL),
(6, 'Level 2 Guide', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p>Level 2: Network Intrusion (Intermediate Level)</p><p>Step 1: Network Enumeration<br />- Use Nmap to perform a comprehensive scan of the target network.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">nmap -sS -sV -O &lt;target_network&gt;</code></pre><p><br />- Identify open ports, services, and potential entry points into the network.</p><p>Step 2: Vulnerability Assessment<br />- Use auxiliary modules in Metasploit to conduct vulnerability scans against the identified services.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">use auxiliary/scanner/&lt;service&gt;/&lt;vulnerability&gt;\r\nset RHOSTS &lt;target_network&gt;</code></pre><p><br />- Run the module and analyze the results to identify exploitable vulnerabilities.</p><p>Step 3: Exploit Services<br />- Choose an exploit module from Metasploit that matches the identified vulnerabilities.<br /> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">search &lt;service&gt;/&lt;vulnerability&gt;\r\nuse &lt;exploit_name&gt;\r\nset RHOST &lt;target_IP&gt;</code></pre><p><br />- Set required options and execute the exploit.</p><p> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">exploit</code></pre><p> </p><p>Step 4: Pivot and Escalate Privileges<br />- After gaining initial access, pivot through the network by exploiting additional systems and escalating privileges to gain deeper access.<br />- Use Metasploit post-exploitation modules like `post/multi/manage/shell_to_meterpreter` to gain a Meterpreter shell for easier control.</p><p>Step 5: Find and Capture the Flag<br />- Navigate through compromised systems and locate the flag.<br />- Remember to cover tracks and maintain persistence if required.<br />- Capture the flag and submit it to complete the level.</p></body></html>', 'q', '2024-04-16 14:01:08', NULL, NULL),
(1, 'Linux Commandline', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span>Existem vários comandos possíveis em Linux. Alguns de estes são:</span></p><ul><li><span>cd [dir]: O comando CD significa “Change Directory” e faz possível ir de um diretório para outros. </span></li></ul><p><span>Exemplos:</span></p><p><span>Mudar para um diretório anterior </span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">cd ..</code></pre><p><span>Mudar para um diretório específico</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">cd /home/user/Documents</code></pre><ul><li><span>ls [dir (opcional)] : O comando ls mostra tudos os ficheiros e pastas em um diretório.</span></li></ul><p><span >Exemplos:</span></p><p><span >Mostrar os ficheiros e pastas no diretório</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">ls</code></pre><p><span >Mostrar todos os ficheiros e pastas e permissões no diretório</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">ls -l</code></pre><ul><li><span>cat [file] : Mostrar texto que contém dentro de um ficheiro</span></li></ul><p><span >Exemplos:</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">cat text.txt</code></pre></body></html>', 'q', '2024-04-16 14:10:19', NULL, NULL),
(6, 'Metasploit Framework - Introduction', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Este Capítulo terá um nível de complexidade mais elevado e então será dividido em outros subcapítulos. O metasploit framework é uma introdução à utilização de software para automatizar o processo de hacking a um servidor ou website.</span></p></body></html>', 'q', '2024-04-16 14:11:47', NULL, NULL),
(6, 'Metasploit Framework Console', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Este programa é um programa de consola que permite o acesso a todos os exploits que o MSF (Metasploit framework) contém. É a única maneira de aceder à maioria dos programas que o MSF tem.</span></p><p><span >Os programas utilizados pelo MSF são guardados dentro da diretoria /usr/share/metasploit-framework e são compostos por várias pastas para subdividir os diferentes tipos de módulos, scripts, payloads e tools.</span></p><p> </p><p><span >Para baixar o MSF podemos fazer </span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">sudo apt update &amp;&amp; sudo apt install metasploit-framework</code></pre><p><span >Ou</span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">sudo pacman -Syuu &amp;&amp; sudo pacman -S metasploit-framework</code></pre></body></html>', 'q', '2024-04-16 14:11:41', NULL, NULL),
(4, 'SQL Injection', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >SQL injection é o tipo de Web Exploitation mais popular mas também é muito prevenível. Quando encontrado com um formulário de login, por exemplo, podemos em vez de colocar um nome de utilizador, colocar um </span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">‘</code></pre><p><span>Ao fazer isto ele poderá causar um erro na base de dados. Mas se colocarmos </span></p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">‘ AND 1=1; </code></pre><p><span>poderemos ultrapassar o login sem nunca saber o nome do utilizador nem a password.</span></p></body></html>', 'q', '2024-04-16 14:10:32', NULL, NULL),
(6, 'Wifite2', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p><span >Para aceder a uma rede existem várias técnicas que podemos implementar. Uma que iremos falar é utilizando o programa de linha de comandos wifite.</span></p><p><span >Como usar wifite:</span></p><ul><li><span >Instalar wifite2, net-tools, wireless_tools, aircrack-ng, reaver, pyrit, wireshark-git, cowpatty, pixiewps</span></li><li><span >Rodar wifite como sudo</span></li><li><span >Selecionar uma rede com clientes (preferencialmente)</span></li><li><span >Esperar que o crack automático seja concluído</span></li></ul><p><span >Quando terminar verificar se a password foi encontrada. Se sim irá mostrá-la. Se não irá dizer que houve um erro no crack.</span></p></body></html>', 'q', '2024-04-16 14:11:24', NULL, NULL),
(4, 'YAUgfdshiugn', '<html xmlns=\"http://www.w3.org/1999/xhtml\"><head></head><body><p>gyusduhigds</p><p> </p><pre><code class=\"language-plaintext text-sm sm:text-base inline-flex text-left items-center space-x-4 bg-gray-800 text-white rounded-lg p-4 pl-6\">tyfgyugyu</code></pre></body></html>', 'q', '2024-04-19 15:08:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `HoursUntilCompletion` int(11) NOT NULL,
  `UsersEnrolled` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `Name`, `Description`, `HoursUntilCompletion`, `UsersEnrolled`) VALUES
(1, 'A Simple Start to CyberSecurity', 'This course will cover the complete basics in programming and cybersecurity, as well as hardware.', 1, 0),
(2, 'Encryption and Cryptography', 'This course will cover the basics of Cryptography and Encryption, as well as teach you how to implement your knowledge to make your accounts safer.', 2, 0),
(3, 'Vulnerabilities', 'This course will cover the many different types of vulnerabilities, giving you the basic knowledge to then exploit them in the later courses.', 1, 0),
(4, 'Website Hacking', 'This course will cover all that relates to Web vulnerability exploitation, covering topics such as SQL Injection, Brute Force attacks and other types of website vulnerabilities.', 5, 0),
(5, 'Application Hacking', 'Memory Leaks, Command line execution and exploitation', 5, 0),
(6, 'SysAdmin and Server/Network hacking', 'SSH, wget, etc, Network Vulnerabilities, Packet Tracing, Man in the Middle attacks', 5, 0),
(7, 'Forensics', 'This course will cover the basics of forensics, notably focusing on image forensics.', 5, 0);

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
(24, '2014_10_12_000000_create_users_table', 1),
(25, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(26, '2019_08_19_000000_create_failed_jobs_table', 1),
(27, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(28, '2024_04_15_110204_add_updated_at_to_course_curriculums_table', 2),
(29, '2024_04_15_114058_create_permissions_table', 2);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `TurmaAno` varchar(255) NOT NULL,
  `Escola` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Username`, `email`, `email_verified_at`, `password`, `TurmaAno`, `Escola`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Omega', 'OmegaLeDeer', 'omega@gmail.com', NULL, '$2y$12$/qHkvehQm8sI0xF1JYhi1usS9SFEP/aT00tjaiXaIMBp5G6kJ2Dy2', 'F12', 'Manuel Teixeira Gomes', NULL, '2024-04-22 15:10:09', '2024-04-22 15:10:09');

-- --------------------------------------------------------

--
-- Table structure for table `users_old`
--

CREATE TABLE `users_old` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `TurmaAno` varchar(10) NOT NULL,
  `Escola` varchar(50) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `CoursesCompleted` int(11) NOT NULL,
  `LevelsCompleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_old`
--

INSERT INTO `users_old` (`id`, `Name`, `Username`, `email`, `TurmaAno`, `Escola`, `Password`, `CoursesCompleted`, `LevelsCompleted`) VALUES
(1, 'fsdf', 'fdsf', 'dfs', 'dfs', '', 'dsf', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coursecurriculum`
--
ALTER TABLE `coursecurriculum`
  ADD PRIMARY KEY (`Title`) USING BTREE,
  ADD KEY `CourseID` (`CourseID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_old`
--
ALTER TABLE `users_old`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_old`
--
ALTER TABLE `users_old`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coursecurriculum`
--
ALTER TABLE `coursecurriculum`
  ADD CONSTRAINT `coursecurriculum_ibfk_1` FOREIGN KEY (`CourseID`) REFERENCES `courses` (`CourseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
