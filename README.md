# CRUD_Javascript_Ajax_Php
 
  CREATE BD

   Database: `[name_bd]`

 
-- --------------------------------------------------------

-- Table structure for table `emp_database`

 
CREATE TABLE `emp_database` (
  `id` int(11) NOT NULL,
  `emp_name` varchar(250) NOT NULL,
  `emp_designation` varchar(250) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `emp_contact` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
 

-- Indexes for dumped tables

 

-- Indexes for table `emp_database`

ALTER TABLE `emp_database`
  ADD PRIMARY KEY (`id`);
 

-- AUTO_INCREMENT for dumped tables

 
-- AUTO_INCREMENT for table `emp_database`

ALTER TABLE `emp_database`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

Los datos los debes llenar manualmente en la base de datos
