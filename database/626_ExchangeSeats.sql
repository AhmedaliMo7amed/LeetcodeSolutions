SELECT 
    id,
    IFNULL(
        # CONDITION
        IF(
            # CONDITION
            id % 2 != 0,
            # ODD IDS ( TRUE CASE )
            (SELECT student FROM Seat AS Sub WHERE Sub.id = Seat.id + 1),
            # EVEN IDS ( FALSE CASE )
            (SELECT student FROM Seat AS Sub WHERE Sub.id = Seat.id - 1)
        ),
        # RETURN IF FALSE
        student
    ) AS student
FROM 
    Seat
ORDER BY 
    id;
