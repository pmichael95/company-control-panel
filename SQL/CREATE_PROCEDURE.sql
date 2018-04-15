DELIMITER $$
CREATE PROCEDURE `getSubordinates`(IN e_id INT)
BEGIN
select e2.SIN, e2.employeeName, e2.SupervisorSIN, e1.SupervisorSIN as Child from employee e1
inner join employee e2 on e2.supervisorSIN = e1.SIN
where (e1.SupervisorSIN != 0 or e2.SupervisorSIN = e_id)
and (e1.SupervisorSIN in 
(
select e2.SIN from employee e1
inner join employee e2 on e2.supervisorSIN = e1.SIN
)
 or e1.supervisorSIN = e_id or
 e2.SupervisorSIN = e_id)
 and
 (e2.supervisorSIN = e_id or
 e2.supervisorSIN in 
 (
 select e2.SIN from employee e1
inner join employee e2 on e2.supervisorSIN = e1.SIN
where (e1.SupervisorSIN != 0 or e2.SupervisorSIN = e_id)
and (e1.SupervisorSIN in 
(
select e2.SIN from employee e1
inner join employee e2 on e2.supervisorSIN = e1.SIN
)
 or e1.supervisorSIN = e_id or
 e2.SupervisorSIN = e_id)
 )
 );
END$$
DELIMITER ;