
-- INSERT INTO THE RETREATS TABLE
INSERT INTO retreats
(
  price
, location
, type
, description
, start_date
, end_date
, duration
, group_size
, language
, cancel_policy
, host_id
, name
) 
VALUES 
(
  1000.00
, 'Bohult, Halland'
, 'Other'
, 'Stedsans in the Woods is a retreat in Halland, Sweden with an off the grid restaurant in the forest by the lake and a permaculture farm. We believe that the solution to almost any big problem is beautiful, well tasting and happy. A solution that empowers us all.'
, '2020-05-18'
, '2020-05-22'
, 4
, 20
, 'English/Dutch'
, 'Must notify at least 1 month in advance for 90% refund.'
, 1
, 'Stedsan Creative Food Retreat'
);

INSERT INTO retreats
(
  price
, location
, type
, description
, start_date
, end_date
, duration
, group_size
, language
, cancel_policy
, host_id
, name
) 
VALUES 
(
  500.00
, 'Paros, Greece'
, 'Other'
, 'Body Soul Dance is suitable for anyone who wishes to dance,   regardless of age, shape or prior experience. There are no steps to   learn, nothing to get right or wrong, no judgment.
There is a field of energies, qualities, relationships and possibilities  that exist in us and in the world around us, to which we can connect  and experience through movement and dance.
Dancing leads us to a heightened awareness of ourselves and
of those around us, expands our movement vocabulary and develops  our ability for expression through movement.'
, '2020-09-10'
, '2020-09-17'
, 7
, 60
, 'English/Greek'
, 'Must notify at least 2 months in advance for full refund.'
, 2
, 'Island Dance Retreat'
);

INSERT INTO retreats
(
  price
, location
, type
, description
, start_date
, end_date
, duration
, group_size
, language
, cancel_policy
, host_id
, name
) 
VALUES 
(
  300.00
, 'Paros, Greece'
, 'Other'
, 'At the Black Sea Writing Retreat you will take part in activities that include:
• daily swims;
• evening strolls along scenic coastal paths and beaches;
• excursion to the oldest human settlement in Europe;
• cross-border trip to the neighbouring country of Bulgaria; visit to the prestigious Archeology Museum in the costal town of Mangalia (formerly an ancient Greek colony known as Callatis), about which some say off-shore is the fabled underwater city of Atlantis:
• leisurely walk through a rustic Tatar village;
• traditional homemade Romanian foods accompanied by local wines and even potent home-brewed palinka;
• free-flowing conversational evenings under a canopy of vines.'
, '2020-07-15'
, '2020-09-18'
, 3
, 25
, 'English/Romanian'
, 'Must notify at least 3 weeks in advance for 80% refund.'
, 3
, 'Black Sea Writing Retreat'
);

-- INSERT INTO ATTENDEES TABLE

INSERT INTO attendees(user_id, retreat_id) VALUES (10,1);
INSERT INTO attendees(user_id, retreat_id) VALUES (9,1);
INSERT INTO attendees(user_id, retreat_id) VALUES (8,2);
