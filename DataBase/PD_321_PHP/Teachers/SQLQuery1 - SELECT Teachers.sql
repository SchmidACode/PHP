USE PD_212;
GO

SELECT
		teacher_id,
		FORMATMESSAGE(N'%s %s %s', last_name, first_name, IIF(ISNULL(middle_name,N''),N' ',middle_name)) AS 'full_name',
		birth_date,
		DATEDIFF(DAY, work_since, GETDATE())/365
FROM	Teachers