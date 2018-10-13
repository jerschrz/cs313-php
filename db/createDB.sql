CREATE TABLE COMMON_LOOKUP (
common_lookup_id      serial       PRIMARY KEY,
common_lookup_context varchar(30)  NOT NULL,
common_lookup_meaning varchar(30)  NOT NULL
);

CREATE TABLE RENTAL_ITEM (
rental_item_id    serial       PRIMARY KEY,
condition         int          NOT NULL REFERENCES common_lookup(common_lookup_id),
rental_item_type  int          NOT NULL REFERENCES common_lookup(common_lookup_id)
);

CREATE TABLE CUSTOMER (
customer_id       serial       PRIMARY KEY,
first_name        varchar(20)  NOT NULL,
last_name         varchar(30)  NOT NULL,
email             varchar(30)  NOT NULL,
password          varchar(30)  NOT NULL,
payment_method    int          NOT NULL REFERENCES common_lookup(common_lookup_id),
card_number       varchar(19),
paypal_account    varchar(30),
phone_number      varchar(13)  NOT NULL
);

CREATE TABLE RENTAL (
rental_id         serial       PRIMARY KEY,
start_date        date         NOT NULL,
end_date          date         NOT NULL,
price             real       NOT NULL,
delivery_address  varchar(50)  NOT NULL,
rental_item_id    int          NOT NULL REFERENCES rental_item(rental_item_id),
customer_id       int          NOT NULL REFERENCES customer(customer_id)
);

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_type',
'grill');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_type',
'chair');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_type',
'cooler');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_type',
'table');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_condition',
'GOOD');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_condition',
'ACCEPTABLE');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'rental_item_condition',
'POOR');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'payment_method_type',
'VISA');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'payment_method_type',
'MASTERCARD');

INSERT INTO COMMON_LOOKUP (
common_lookup_context,
common_lookup_meaning
) VALUES (
'payment_method_type',
'PAYPAL');