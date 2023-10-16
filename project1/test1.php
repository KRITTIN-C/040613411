SELECT
cars.car_id AS car_id,
cars.license_plate AS license_plate,
cars.depart_time AS depart_time,
cars.arrival_time AS arrival_time,
cars.price AS price,
COUNT(tickets.car_id) AS count
FROM cars
LEFT JOIN tickets ON cars.car_id = tickets.car_id
WHERE cars.group = $locationId
GROUP BY cars.car_id, cars.license_plate, cars.depart_time, cars.arrival_time, cars.price;