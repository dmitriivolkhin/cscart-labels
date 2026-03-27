REPLACE INTO ?:labels_material (labels_material_id, labels_material_name) VALUES 
    (1, 'Wood'),
    (2, 'Metal'),
    (3, 'Paperboard'),
    (4, 'Leather'),
    (5, 'Plastic');

REPLACE INTO ?:labels_form (labels_form_id, labels_form_name) VALUES
    (1, 'Square'),
    (2, 'Triangle'),
    (3, 'Circle'),
    (4, 'Star'),
    (5, 'Octagon');

REPLACE INTO ?:labels (label_id, lable_name, label_length, label_width, label_material_id, label_form_id) VALUES
    (1, 'Small Wood Triangle', 50, 50, 1, 2),
    (2, 'Medium Wood Triangle', 100, 100, 1, 2),
    (3, 'Big Wood Triangle', 150, 150, 1, 2),
    (4, 'Small Paperboard Octagon', 50, 50, 3, 5),
    (5, 'Medium Paperboard Octagon', 100, 100, 3, 5),
    (6, 'Big Paperboard Octagon', 150, 150, 3, 5),
    (7, 'Small Leather Triangle', 50, 50, 4, 2),
    (8, 'Medium Leather Triangle', 100, 100, 4, 2),
    (9, 'Big Leather Triangle', 150, 150, 4, 2),
    (10, 'Small Wood Star', 50, 50, 1, 4),
    (11, 'Medium Wood Star', 100, 100, 1, 4),
    (12, 'Big Wood Star', 150, 150, 1, 4),
    (13, 'Small Plastic Star', 50, 50, 5, 4),
    (14, 'Medium Plastic Star', 100, 100, 5, 4),
    (15, 'Big Plastic Star', 150, 150, 5, 4);