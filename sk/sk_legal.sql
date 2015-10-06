-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2015 at 06:00 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sk_legal`
--

-- --------------------------------------------------------

--
-- Table structure for table `associateoffices`
--

CREATE TABLE IF NOT EXISTS `associateoffices` (
`id` int(11) NOT NULL,
  `Branch` varchar(4000) DEFAULT NULL,
  `Name1` varchar(4000) DEFAULT NULL,
  `Name2` varchar(4000) DEFAULT NULL,
  `Address` varchar(4000) DEFAULT NULL,
  `Phone1` varchar(1000) DEFAULT NULL,
  `Phone2` varchar(1000) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `associateoffices`
--

INSERT INTO `associateoffices` (`id`, `Branch`, `Name1`, `Name2`, `Address`, `Phone1`, `Phone2`, `Email`) VALUES
(1, 'Pune Office', 'Mr. Madhukar M', 'Mokashi, Advocate', 'S. No. 16/1A, Ustad Hamid Khan Building, Near Acharya Society, Warje Naka(old), Warje, Pune -411058.', '020-25231522', ' 0-9422031063', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banks_and_financial_institutions`
--

CREATE TABLE IF NOT EXISTS `banks_and_financial_institutions` (
`id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `listorder` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=127 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks_and_financial_institutions`
--

INSERT INTO `banks_and_financial_institutions` (`id`, `Name`, `listorder`) VALUES
(40, 'The Brihan Mumbai Electric Supply & Transport Undertaking Ltd. (BEST).', 5),
(41, 'Export Credit Guarantee Corporation of India (ECGC)', 6),
(45, 'Aditya Birla Group.', 7),
(46, 'Hindustan Organic Chemicals Limited (HOCL)', 8),
(42, 'Bank Of India (BOI)', 4),
(43, 'Union Bank Of India (UBI)', 1),
(44, 'Kotak Mahindra Bank', 3),
(48, 'Bharat Forge Ltd.', 9),
(49, 'Mahanagar Gas Ltd.', 10),
(50, 'ABG Shipyard Ltd', 11),
(51, 'Ashok Piramal Group (Peninsula)', 12),
(52, 'ABG Cement Ltd.', 13),
(53, 'Popley& Sons Jewellers Private Limited -Jewellers  ', 14),
(54, 'Kotak Life Insurance', 15),
(55, 'Development Credit Bank.(DCB)', 16),
(56, 'Dewan Housing Finance Corporation Ltd. (DHFL)', 17),
(57, 'Capri Global Finance Limited (CGFL)', 18),
(58, 'Aspire Housing Finance Corporation Limited (AHFCL)', 19),
(59, 'Garware Capital Market Ltd. ', 2),
(60, 'SangliSahakari Bank Ltd. Mumbai. ', 20),
(61, 'ApnaSahakari Bank Ltd', 21),
(62, 'The Gopinath Patil Parsik Janata Sahakari Bank Ltd.,', 22),
(63, 'Seth Group (Builders & Developers).', 23),
(64, 'Akruti Nirman Limited / Hubtown Ltd', 24),
(65, 'Kumar Builders.(Pune)', 25),
(66, 'Evershine Enterprises (Builders & Developers).', 26),
(67, 'Drushti Realtors Pvt. Ltd.', 27),
(68, 'The Maharashtra Electricity Regulatory Commission (MERC)', 28),
(69, 'Ford Credit India Pvt Ltd(FCIPL)', 29),
(70, 'Garware Wall Ropes Ltd., ', 30),
(71, 'BGH Exim Limited.', 31),
(72, 'DHFL Vysya Housing Finance Ltd..,', 32),
(73, 'Tide Water Oil Co. (India) Ltd.', 33),
(74, 'Akums Drugs & Pharmaceuticals Ltd.', 34),
(75, 'Hathaway Cables &Datacom Pvt. Ltd.', 35),
(76, 'Bharat Matrimony.com Pvt Ltd', 36),
(77, 'Marvellous Builders Pvt. Ltd', 37),
(78, 'Spectrum Infrastructures & Developers Co. ', 38),
(79, 'Samarth Enterprises (Builders ', 39),
(80, 'Shree Sadhguru Enterprises(Builders & Developers)..', 40),
(81, 'M.M Corporation (Builders & Developers)', 41),
(82, 'Ark Diagnostics Pvt. Ltd.', 42),
(83, 'Khandwani Group of Co.', 43),
(84, 'Govardhani Construction Co.', 44),
(85, 'Maya Construction Co.', 45),
(86, 'Hotel Marine Plaza.', 46),
(87, 'Milestone Developers.', 47),
(88, 'Shri.Ram Mandir Trust.', 48),
(89, 'AnandDalal&Co.', 49),
(90, 'Swami Samarth Enterprises (Builders & Developers)', 50),
(91, 'Rushabh Builders', 51),
(92, 'Sterling Buildcon Pvt. Ltd.', 52),
(93, 'Orchid Buildcon Pvt. Ltd.', 53),
(94, 'Nishitha Developers Pvt. Ltd.', 54),
(95, 'The Kunbi Sahakari Bank Ltd. Mumbai.', 55),
(96, 'P. Builders (Builders & Developers).', 56),
(97, 'Rama Cylinder Pvt. Ltd.', 57),
(98, 'Royal Builders.', 58),
(99, 'Sonata Realty Ltd.', 59),
(100, 'Kings Realtors & Developers Pvt. Ltd.', 60),
(101, 'M/s. Ushdev International Limited.', 61),
(102, 'Nestor Constructions.', 62),
(103, 'Fuji Electric India Private Ltd.', 63),
(104, 'Chetak Co-operative Housing Society Ltd., ', 64),
(105, 'Bhoiwada Gaon Swapnapurti Co-operative Housing Society Ltd.,', 65),
(107, 'M/s. Ionic Realty,', 66),
(108, 'M/s. Mehul Realtors P Ltd.,', 67),
(109, 'M/s. Balaji Enterprises,', 68),
(110, 'Riddhima Realty.', 69),
(111, 'Sahakar Nagar Co-Operative Housing Society Ltd.', 70),
(112, 'Paramhans Creations (Shailesh Singh)', 71),
(113, 'Varun Resorts Ltd.,', 72),
(114, 'Goradia Hotels Pvt. Ltd., ', 73),
(115, 'V. Shantialal& Company Pvt. Ltd., ', 74),
(123, 'Godrej & Boyce Manufacturing Co Ltd.', 75);

-- --------------------------------------------------------

--
-- Table structure for table `sk_partners`
--

CREATE TABLE IF NOT EXISTS `sk_partners` (
`id` int(11) NOT NULL,
  `Name` varchar(500) DEFAULT NULL,
  `Description` varchar(4000) DEFAULT NULL,
  `listorder` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sk_partners`
--

INSERT INTO `sk_partners` (`id`, `Name`, `Description`, `listorder`) VALUES
(3, 'Mr. K. Anandavasagan, Sr. Partner', 'He is graduated from University of Madras in Madras in B.Sc.,(Math) and B.L., Law. CAIIB from Indian  asdfInstitute of Banking and Finance, Mumbai.After completion of Law, enrolled as an Advocate in 1987 and he was associated with Mr.B.Pannerselvan, Sr. Advocate, empanelled with Various Banks and also Government Pleader. Then he was in the Panel advocates for various banks like SBI, Indian Bank, Urban Co-op Bank, Land Mortgage bank etc., He worked in various positions in banks like Law Officer in PNB, Manager Legal in BOB, Sr. Manager in Bank of India, Head of Legal in DHFL and Vice President Legal ', 4),
(4, 'Mr. Munir Ahmad Abbassi, Sr. Associate.', 'A seasoned corporate lawyer having three decade of experiences in legal profession ï¿½ as a legal practitioner (Enrolled in 1985) and as an in-house counsel in major Nationalized banks and companies (listed Nazir', 3),
(5, 'Mr. Dilip Annasaheb Taur, Sr. Associate, A. O. R. For Supreme Court of India, Delhi', 'In 2003 he has completed his LL.B. from M. P. Law College, Maharashtra and inthe year 2005 he has Completed LL.M. (Human Rights) from Mumbai University. 	Hehadregistered with Bar Council of Maharashtra on 14.9.2004 under Enrollment No. MAH/4003/2004.  From 2003 to 2004 he worked for CBI lawyer Mr. Raja Thakare as a Researcher in Telgis Fake Stamp Paper Case, in the Sessions Court 	Bombay, special TADA Court, Special MCOC Court Pune, and High Court,Bombay. 2004 to 2006 handled various matter pertains to Civil, Criminal law, commercial and corporate Law, High Court, Bombay,  briefed to eminent Sr. Counsel like Rafiq Dada, Seervai, Andhy arjuna, Uday Lalit at Bombay High Court & Supreme Court, Research on co-operative Societies Act/RDDB Act., Research on 	Co-operative and corporate Banks in India. 2006 to 2007 he worked with K. Ashar & Co. as full time Advocate.  Represented K. Ashar& co. at Bombay High Court. Since March 2007 started independent practice at Supreme Court of India at Delhi including National/State Consumer redressal forum, FDI, FIPB, ED, DRT, DRAT, BIFR, AAIFR and vice versa. Specialization in Arbitration matters. Actively participation in Arbitration and mediation referred by High Court Bombay, India., 	Assisting innovative, effective and speedy methods for the recovery of bad debts (Non Performing Assets -NPA), Research on Arbitration Laws of London, Italy and 	United States of America, Actively participated in documentation work for Indian Client viz. Hindustan Zinc Ltd. in the International Arbitration held at America, Special Research on Land Acquisition matters pertains to SEZ, Assisting innovative, effective and speedy methods for the recovery of bad debts (Non Performing Assets 	-NPA) and assets reconstruction for the farmers. Briefed and assisted eminent Sr. Counsels viz. Mr. Ashok Desai, Mr. Fali Nariman, Mr. Abhishek Manu Singhavi, Mr. Vinod Bobde, Mr. Dr. Rajeev Dhavan,  Mr. Arun Jetly, Mr.  Uday Lalit, Mr. Shyam Divan, Mr. Harish Salve, Mr. Mukul Rohtagi at Supreme Court of India.  Active member of World Intellectual Property organization.', 2),
(6, 'Mrs. Swati S. Pawar, Partner', 'After completing her Graduation degree in B.A. faculty from Mumbai University, she took up Law field and gained degree of LL.B. from Mumbai University. During her law course, she has also participated in various competitions like Moot Court, Debate, Research work, various competitions etc. She has also gained knowledge in drafting of various types of documents viz. various types of Conveyances, Agreement to Sale, Development Agreement of Property, Memorandum of Understanding, Lease Deed, Deed of Assignment, Deed of Partnership, Will, Supplementary Agreement, Deed of Cancellation, Deed of Confirmation, Deed of Mortgage, Deed of Rectification, Release Deed and Gift Deed, Power of Attorney, Declaration-cum-Indemnity, Notices and other miscellaneous documents. She has also gained knowledge in investigation of Title of the Property and giving opinion in respect of the property and various Development Project documents thereon. She has appeared before various courts, viz. High Court at Bombay, City Civil Courts at Bombay and at Dindoshi, Debts Recovery Tribunal, Co-operative Courts, Small Causes Court, and Competent Authorities and before various Government Tribunals and Authorities. She is experienced in property litigation, Money Suits, Summary Suits, Matrimonial Litigation, Arbitration Proceedings, Company Petitions, drafting Plaints, Petitions, Revision Application, Written Statements, Reply, Affidavits, and Rejoinders etc. She has also briefed and assisted eminent Sr. Counsels at Hon’ble High Court Mumbai. ', 5),
(7, 'Ms. Falguni Laheru, Sr. Associate, India & Solicitor England and Wales, Member of ILPA UK.', 'Membership - Registered ass Lawyer with  Bar Council of Maharashtra and Goa, Registered as Solicitor with  Law Society of England and Wales, Member of Immigration Legal Practitioner''s Association  ( ILPA) UK.\r\n              she is a young Solicitor who is making waves in the Immigration and Nationality domain. She has completed her Post graduation Masters in International Law and Human Rights from Mumbai University. She is member and panelist with Immigration Legal Practitioners Association (UK), with experience of working with Legal 500 firm in the UK. She is the Principal Director and Senior Solicitor at Smart Move2uk a niche Immigration advisory firm that provides UK Immigration advise to Business houses, Corporate and Individuals on citizenship and nationality applications. Her clientele includes business houses like Birla, ICICI Ventures, Infrasoftech, politicians, bollywood celebrities and sport star.\r\n              Her specialist focus area is complex Entry Clearance applications, Investor visa, Entrepreneur visa, Intra Company transfer, registration of employer with UKBA Home Office as sponsor, appeal applications to the First Tier Tribunal, Upper Tribunal (Immigration and Asylum Chamber) Judicial Review Applications,  and has experience of representing clients India, UK,  Singapore, Germany, France, USA, Australia and Japan. She has experience of working with clients in India and the UK. She has always been praised by clients for providing advice that can be easily understood by clients. She is friendly and solution oriented and has been admired in solving several complex corporate and personal immigration matters. She has established a sound reputation for providing impartial advise and for her knowledge of UK immigration Laws.She has been interviewed by BBC News, BBC Radio 4 and has expressed her views with regards to UK Immigration and visa in Rediff and Zee News.', 1),
(8, 'Mr. Madhukar Dalvi, Sr. Associate (Specialized in Criminal Law)', 'In 2004 he has completed his LL.B. from Government Law College, Mumbai. He was enrolled with the Bar Council of Maharashtra and Goa on 31.07.2004 under enrollment No. MAH/3131/2004. From 2003 to 2008 he worked as a Junior Advocate in the Chambers of renowned criminal lawyers Shri. Raja B. Thakare and Shri. Avadhut Chimalker and has worked on important matters such as the Telgi Fake Stamp Paper Case, 7/11 Railway bomb blast case, etc. He has appeared as a Counsel in several criminal matters such as SLP’s in the Apex Court, Criminal Writ Petitions under Article 226 and 227 of the Constitution of India, application under section 482 of Cr PC, Bail Applications and Anticipatory Bail Applications, Revision Applications, Criminal Appeals in the Bombay High Court and various other Courts of Law. Has conducted criminal trials from the prosecution as well as from the defense side. Dealt extensively in matters under section 138 of the Negotiable Instruments Act in the Trial Courts and also in Appellate Courts. Briefed and assisted Senior Advocates like Shri. Uday Lalit, Shri. Mukul Rohatgi, Shri. Shirish Gupte, Shri. Harshad  Ponda and Shri. Ashok Mundergi.', 6),
(9, 'Mr. Mangesh Shelar, Sr. Associate', 'After graduating in B.A. faculty from Mumbai University, took up degree in Law from Mumbai University. He was for a short period in the Chambers of V.P. PATIL. During the said period he got experience of litigation in criminal courts. as well as Civil Court including Property matters and convincing  He has appeared in various matters in the High Court, Bombay City Civil Court, Special Court, Session Court and Magistrate Court, has got experience of criminal matters.', 7),
(10, 'Mr. Rajesh Vanzara, Sr. Associate', 'After completion of Law from Mumbai University, he has gained experience of litigation in Criminal Courts as well as Civil Court including Property matters and convincing. He has also worked with an international law firms like Ince& co. and V Ships etc. He has also gained knowledge of Marine Litigation. He has appeared in various matters in the Hon’ble High Court, Bombay City Civil Court, Session Court and Magistrate Court, has got experience of Criminal Matters.', 8),
(11, 'Ms. Jharna Kar, Sr. Associate', 'She has completed her LL.B from Mumbai University in the year 1992 and stood First in Thane Law college. She has good 20 years of experience in civil and civil criminal matters. She has appeared before various courts, viz. High Court at Bombay, City Civil Courts at Bombay and at Dindoshi, Debts Recovery Tribunal, Co-operative Courts, Small Causes Court, Metropolitan Magistrate Courts and Competent Authorities and before various Government Tribunals and Authorities. She is experienced in property litigation, Money Suits, Summary Suits, Matrimonial Litigation, Arbitration Proceedings, Company Petitions, drafting Plaints, Petitions, Revision Application, Written Statements, Reply, Affidavits, and Rejoinders etc. She has also gained knowledge in investigation of Title of the Property and giving opinion thereon.', 9),
(12, 'Ms. Kranti Warawadekar, Associate', 'She perused her LL.B. Degree, from Government Law College, Mumbai. During her law course, she also completed Diploma in Cyber Laws from Asian School of Cyber Law, Pune. Soon after completing her law she worked with HemantSahai Associates, Advocates. She has gained knowledge in reviewing drafting, negotiating various agreements/documents such as Finance Documents, Security Documents and issuing opinion regarding validity, legality and enforceability of the Finance Documents and Security Documents. She has gained knowledge in Company law matters (Incorporation of a Company, Drafting of MOA & AOA, and Board Resolutions etc.). Also, she has gained knowledge in drafting of various types of Deeds and Documents, Notices and Other miscellaneous documents. She has also gained knowledge in investigation of Title of the Property and issuing opinion in respect of the property and various development project documents thereon.', 10),
(13, 'Ms. Kruttika Pokale, Associate', 'She has completed her double Graduation BLS, LL.B., ( 5 year course) in Law from Government Law College, Mumbai, in 2009.  During her college years, she has completed Diploma Course of Cyber Laws and Crimes of Cyber World from Asian School of Cyber Laws, Pune, Maharashtra. \r\n              She was working with M/s. Tamhane and Co., Solicitors firm, wherein she acquired knowledge over documentation of real estate projects related SRA, MHADA buildings, Co-operative Housing Societies, Land dealings, Co-operative society formations, preparation of search reports, title certificates, title verifications. She also handled litigation related to real estate matters at Bombay High Court, City Civil Court, Small Causes Court, Mumbai. \r\n              Thereafter, she has worked with various Builders and Developers viz. Palai Developers, Shree Dham Developers, Ashford Constructions Pvt. Ltd., RNA Corp Pvt. Ltd. for a span for 4 years. She gained experience as anin-house Counsel in real Estate Industry. ', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(5) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`) VALUES
(6, 'nazir', 'nazir@gmail.com', '123456'),
(5, 'arif', 'arif@gmail.com', '123456'),
(7, 'hashmat', 'hashmat@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `what_we_do_list`
--

CREATE TABLE IF NOT EXISTS `what_we_do_list` (
`id` int(11) NOT NULL,
  `Title` varchar(100) DEFAULT NULL,
  `Description` varchar(3000) DEFAULT NULL,
  `listorder` int(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `what_we_do_list`
--

INSERT INTO `what_we_do_list` (`id`, `Title`, `Description`, `listorder`) VALUES
(1, 'AREAS OF PRACTICE: asdf', 'We are specialized in the following areas of practice and provide a comprehensive range of services across a broad spectrum of transactions asdf asdfasd', 3),
(2, 'DISPUTE RESOLUTION: sdfg sdf asdf', 'Litigation, Arbitration  asdf asdf asd fasdf asdf asdf', 2),
(3, 'REAL ESTATE, DEVELOPMENTS AND PROPERTY LAW:', 'We provide ?end to end services? in the matters relating to large scale development projects, SEZ projects, redevelopment of buildings, redevelopment of societies? buildings, slum redevelopment projects,transfer of tenancy,regional real estate investments, projects financing, commercial and residential leasing, sale and purchase of immovable properties. Our services also includecarrying out the due diligence, title search / verification and issuance of the Title Certificate and related documentation in all the aforesaid areas.', 4),
(4, 'STRUCTURING, DRAFTING AND VETTING OF VAROIUS CONTRACTS:', 'Structuring,negotiating, vetting and closing of term & spot contracts relating to sale / purchase of crude oil & refined products, coal procurement related term & spot contracts, (international contracts), contracts between buyer and supplier of commodities, bid related documents, project related contracts, information technology related contracts, license agreements with technology providers; contracts relating to business association with other companies relating to various retail and bulk business, contracts with suppliers /vendors/ service providers / franchisees/Distributors NDAs, MOUs, consent terms, offer letters, bank guarantees, performance guarantees, financing documents.', 5),
(5, 'ELECTRICITY LAWS:', 'We advising and consulting from the various issues and matters arising under the Electricity Act and Rules framed thereunder including representation before the various tribunals including MERC, APTEL and before the various courts of laws including the High Courts and Supreme Court of India.', 6),
(6, 'MUNICIPAL AND REVENUE LAW:', 'We advise on matter relating to Town Planning, Redevelopment, assessment of municipal taxes, Land Under Construction Tax, Land being built upon, Sewerage Charges, Extra Water Charges, and all other related matters. Application for change of Mutation entry, 7/12 Extract, Property Register Card etc.', 7),
(7, 'CO-OPERATIVE BANK/ SOCIETY LAW:', 'We advise on Co-Operative Law including formation of the co-operative Bank or the housing society, transfer of membership of the society, recovery of the dues from the members of the society, expulsion of member, managements etc.', 8),
(8, 'LABOUR AND EMPLOYMENT:', 'Regulatory requirements and litigation relating to employment and employee unions. ', 9),
(9, 'ARBITRATION AND CONCILITATION: asdf', 'We appear and handle the Arbitration matters/ disputesbefore the asdf Arbitration Tribunals including in international Arbitration, before the appointed retired judges, Bombay Stock Exchange, National Stock Exchange & Retired Judges and appear before the concerned Courts of law, including the Hon?ble High Courts for the matters under Sections 9, 11, 14, 15, 34 and 37 of the Arbitration and Conciliation Act, 1996 and before the Hon?ble High Courts and Hon?ble Supreme court of India.', 10),
(10, 'CRIMINAL LAWS:', 'Wepractice in criminal law including economic offences under Indian Penal Code, Bombay Police Act, M. C. O. C. Act, Foreign Exchange Management Act (FEMA), Maharashtra Regional Town Planning Act, Sec 138 of Negotiable Instrument Act, including application for bail, discharge of accused, making miscellaneous application, revision application, Criminal Writ Petitions.', 11),
(11, 'CORPORATE AND COMMERCIAL PRACTICE: ', 'Corporate advisory, regulatory and compliance, commercial transactions, share and business acquisitions and disposals, corporate reorganization and restructuring, joint ventures, foreign technical and financial collaboration, mergers and acquisitions, buy outs, schemes of arrangement, amalgamation and reconstruction, corporate administration, capital restructuring, private placements, anti-trust regulations and commercial contracts, insurance and exchange control regulations.', 12),
(12, 'CAPITAL MARKETS, BANKING AND CORPORATE FINANCE:', 'Debt, equity and equity-linked offerings of securities, domestic offerings such as initial public offerings (IPOs), international offerings such as global depository receipts (GDRs) and American depository receipts (ADRs), securities law, structured products and financial institutions regulation, futures, derivatives and ISDA agreements, mergers and acquisitions, takeovers, securities transactions and regulatory issues.', 13),
(13, 'INTELLECTUAL PROPERTY LAW:', 'We advise on law pertaining to copyrights, designs, patents and trademarks and the documentation relating to the same such as franchising and licensing agreements, assignments, marketing rights, etc. We also provide services at the international level such as transfer of intellectual property rights from one country to another as well as in convention countries of the World Trade Organization under the Trade Related Aspects of Intellectual Property Rights Agreement (TRIPS). Protection of undisclosed and confidential information as well as traditional knowledge and its documentation is one more aspect where we provide legal guidance. We also look after the law pertaining to geographical indications and its repercussions on our Indian industry and the means to protect the same under the international scenario as well as its registration. We prosecute on behalf of and defend our clients? intellectual property rights in India for the protection against piracy and infringement or breach of any agreement, make urgent court applications for injunction as well as search and seizure. Our non-contentious work includes registration of designs, patents, copyrights and trademarks and drafting and negotiation of documentation relating to intellectual property.', 14),
(14, 'INFORMATION TECHNOLOGY, E-BANKING AND e-COMMERCE', 'Laws relating to internet and cyberspace, electronic banking, cross-border electronic commerce, security and encryption including digital signatures, trusted third parties, certification authorities and public key infrastructure, convergence technology, semi-conductors and hardware design, software services and private equity and venture capital investments in information technology enabled companies and information exchange in diverse fields like biotechnology, healthcare, pharmaceuticals, computers, telecommunications, banking, media and entertainment, on-line contracts and agreements with service providers. Software license agreement, software development agreement, Website Transfer Agreement etc.', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `associateoffices`
--
ALTER TABLE `associateoffices`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks_and_financial_institutions`
--
ALTER TABLE `banks_and_financial_institutions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sk_partners`
--
ALTER TABLE `sk_partners`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `what_we_do_list`
--
ALTER TABLE `what_we_do_list`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `associateoffices`
--
ALTER TABLE `associateoffices`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banks_and_financial_institutions`
--
ALTER TABLE `banks_and_financial_institutions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT for table `sk_partners`
--
ALTER TABLE `sk_partners`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `what_we_do_list`
--
ALTER TABLE `what_we_do_list`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
