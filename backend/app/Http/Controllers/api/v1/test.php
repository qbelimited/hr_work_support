SELECT
    `a`.`id` AS `id`,
    `a`.`employee_id` AS `employee_id`,
    `a`.`first_name` AS `first_name`,
    `a`.`middle_name` AS `middle_name`,
    `a`.`last_name` AS `last_name`,
    `a`.`bank_acc_no` AS `bank_acc_no`,
    `a`.`birthday` AS `birthday`,
    `a`.`gender` AS `gender`,
    `a`.`tin_no` AS `tin_no`,
    `a`.`ssn_num` AS `ssn_num`,
    `a`.`nassit_num` AS `nassit_num`,
    (
    SELECT
        `hrmdatatest_utb`.`jobtitles`.`name`
    FROM
        `hrmdatatest_utb`.`jobtitles`
    WHERE
        `hrmdatatest_utb`.`jobtitles`.`id` = `a`.`job_title`
) AS `job_title`,
(
    SELECT
        `hrmdatatest_utb`.`paygrades`.`name`
    FROM
        `hrmdatatest_utb`.`paygrades`
    WHERE
        `hrmdatatest_utb`.`paygrades`.`id` = `a`.`pay_grade`
) AS `pay_grade`,
(
    SELECT
        `hrmdatatest_utb`.`notches`.`name`
    FROM
        `hrmdatatest_utb`.`notches`
    WHERE
        `hrmdatatest_utb`.`notches`.`id` = `a`.`notches`
) AS `notches`,
(
    SELECT
        `hrmdatatest_utb`.`employmentstatus`.`name`
    FROM
        `hrmdatatest_utb`.`employmentstatus`
    WHERE
        `hrmdatatest_utb`.`employmentstatus`.`id` = `a`.`employment_status`
) AS `employment_status`,
`b`.`payroll` AS `payroll`,
`b`.`employee` AS `employee`,
(
    SELECT
        `hrmdatatest_utb`.`companystructures`.`title`
    FROM
        `hrmdatatest_utb`.`companystructures`
    WHERE
        `hrmdatatest_utb`.`companystructures`.`id` = `a`.`department` AND `hrmdatatest_utb`.`companystructures`.`type` = 'Department'
) AS `department`,
`b`.`BASIC` AS `basic`,
`b`.`honorarium` AS `honorarium`,
`b`.`car` AS `car`,
`b`.`transport` AS `transport`,
b.lunch as lunch,
`b`.`GROSS_SALARY` AS `gross_salary`,
`b`.`NASSIT_5` AS `nassit_5`,
`b`.`MEDICAL_EXCESS` AS `medical_excess`,
`b`.`UNION_DUES` AS `union_dues`,
`b`.`monthly_rent` AS `rent`,
`b`.`PAYE` AS `paye`,
`b`.`TOTAL_DEDUCTION` AS `total_deduction`,
`b`.`NET_SALARY` AS `net_salary`,
`b`.`NASSIT10_DEDUCT` AS `nassit10_deduct`,
`b`.`WITHOLDING_TAX` AS `witholding_tax`,
`b`.`NASSIT10_PAYT` AS `nassit10_payt`,
`b`.`BASIC_AN` AS `basic_an`,
`b`.`TOTAL_ALLOWANCE` AS `total_allowance`,
b.basic_tax_free as basic_tax_free,
b.taxable_basic as taxable_basic,
`b`.`TAXABLE_INCOME` AS `taxable_income`,
`b`.`NASSIT5_CONTRACT` AS `nassit5_contract`,
`b`.`TOTAL_DEDUCT_CONTRACT` AS `total_deduct_contract`,
`b`.`NET_SALARY_CONTRACT` AS `net_salary_contract`,
`b`.`TAXABLE_ALLOWANCE` AS `taxable_allowance`,
`b`.`CASUAL_LABOUR` AS `casual_labour`,
`b`.`NASSIT10_DEDT_CONTR` AS `nassit10_dedt_contr`,
`b`.`NASSIT10_PAYT_CONTR` AS `nassit10_payt_contr`,
`a`.`ssn_num` AS `NASSIT_NO`,
(
    SELECT
        `hrmdatatest_utb`.`companystructures`.`title`
    FROM
        `hrmdatatest_utb`.`companystructures`
    WHERE
        `hrmdatatest_utb`.`companystructures`.`comp_code` = `a`.`branch`
) AS `branch`,
`c`.`date_start` AS `date_start`,
`c`.`date_end` AS `date_end`,
`c`.`posting_date` AS `posting_date`,
`c`.`finalized_date` AS `finalized_date`,
(
    SELECT
        CONCAT(
            `hrmdatatest_utb`.`employees`.`first_name`,
            ' ',
            `hrmdatatest_utb`.`employees`.`middle_name`,
            ' ',
            `hrmdatatest_utb`.`employees`.`last_name`
        )
    FROM
        `hrmdatatest_utb`.`employees`
    WHERE
        `hrmdatatest_utb`.`employees`.`id` = `c`.`verified_by`
) AS `verified_by`,
(
    SELECT
        CONCAT(
            `hrmdatatest_utb`.`employees`.`first_name`,
            ' ',
            `hrmdatatest_utb`.`employees`.`middle_name`,
            ' ',
            `hrmdatatest_utb`.`employees`.`last_name`
        )
    FROM
        `hrmdatatest_utb`.`employees`
    WHERE
        `hrmdatatest_utb`.`employees`.`id` = `c`.`approved_by`
) AS `approved_by`,
`c`.`documentRef` AS `documentRef`
FROM
    (
        (
            `hrmdatatest_utb`.`employees` `a`
        JOIN `hrmdatatest_utb`.`payroll_data` `b`
        ON
            (`a`.`id` = `b`.`employee`)
        )
    JOIN `hrmdatatest_utb`.`payroll` `c`
    ON
        (`c`.`id` = `b`.`payroll`)
    )