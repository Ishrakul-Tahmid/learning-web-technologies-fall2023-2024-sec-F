

CREATE TABLE `employeeinfo` (
  `EmpID` varchar(20) NOT NULL,
  `EmployeeName` varchar(20) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `employeeinfo` (`EmpID`, `EmployeeName`, `ContactNo`, `UserName`, `Password`) VALUES
('21-45402-3', 'Ishrakul', '018904734372', 'it', 'a@a23'),
('21-45420-3', 'Tahmid', '01608942005', 'tahmid', 'hdcba#jfh');

ALTER TABLE `employeeinfo`
  ADD PRIMARY KEY (`EmpID`);
COMMIT;
