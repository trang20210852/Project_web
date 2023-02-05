CREATE TABLE "dish" (
  "id" int PRIMARY KEY,
  "id_stall" int,
  "name" varchar,
  "type" varchar,
  "sale_off" int,
  "price" float,
  "image" varchar[]
);

CREATE TABLE "stall" (
  "id" int PRIMARY KEY,
  "name" varchar[],
  "address" varchar[],
  "type" varchar,
  "time_o" timestamp,
  "time_c" timestamp,
  "rating" float,
  "image" varchar[],
  "telephone_num" varchar[],
  "like_stall" int
);

CREATE TABLE "user" (
  "username" varchar PRIMARY KEY,
  "password" varchar,
  "name" varchar,
  "address" varchar,
  "telephone_num" varchar,
  "favorite_list" int[],
  "u_follow" varchar[],
  "u_followed" varchar[]
);

CREATE TABLE "comment" (
  "id" int PRIMARY KEY,
  "username" varchar,
  "id_stall" int,
  "content" varchar,
  "star" int,
  "time" timestamp,
  "like_cmt" int
);

ALTER TABLE "dish" ADD FOREIGN KEY ("id_stall") REFERENCES "stall" ("id");

ALTER TABLE "comment" ADD FOREIGN KEY ("username") REFERENCES "user" ("username");

ALTER TABLE "comment" ADD FOREIGN KEY ("id_stall") REFERENCES "stall" ("id");

ALTER TABLE "dish" ADD FOREIGN KEY ("id") REFERENCES "user" ("favorite_list");
