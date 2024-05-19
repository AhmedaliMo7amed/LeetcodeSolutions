SELECT
    date_id,
    make_name,
    -- as unique in ORM
    COUNT(DISTINCT lead_id) AS unique_leads,
    COUNT(DISTINCT partner_id) AS unique_partners
FROM
    DailySales
GROUP BY
    -- group each date with brand to calc on each group
    date_id,
    make_name;
