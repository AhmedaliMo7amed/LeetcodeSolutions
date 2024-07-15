#SOL 1

SELECT DISTINCT l1.num AS ConsecutiveNums
  FROM Logs l1
    JOIN Logs l2 ON l1.num = l2.num AND l1.id = l2.id - 1
    JOIN Logs l3 ON l2.num = l3.num AND l2.id = l3.id - 1
  WHERE l1.num = l2.num AND l2.num = l3.num;


#SOL 2

WITH sequenced_logs AS (
    SELECT *,
           ROW_NUMBER() OVER (ORDER BY id) AS seq_id
    FROM Logs
),
consecutive_logs AS (
    SELECT num,
           LEAD(num, 1) OVER (ORDER BY seq_id) AS next_num,
           LEAD(num, 2) OVER (ORDER BY seq_id) AS next_next_num
    FROM sequenced_logs
)
SELECT DISTINCT num AS ConsecutiveNums
FROM consecutive_logs
WHERE num = next_num AND num = next_next_num;

