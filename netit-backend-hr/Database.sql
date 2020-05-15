CREATE DATABASE final_project;

CREATE TABLE final_project.users (
  id            int NOT NULL AUTO_INCREMENT,
  username      varchar(256) NOT NULL,
  company_name  varchar(256) NOT NULL,
  email         varchar(256) NOT NULL,
  password      varchar(256) NOT NULL,
  role          tinyint NOT NULL DEFAULT 0,
  industry      varchar(256) NOT NULL,
  description   varchar(256) NOT NULL
  
); 


CREATE TABLE final_project.jobs_post (

  id           int NOT NULL AUTO_INCREMENT,
  title        varchar(256) NOT NULL,
  category     varchar(128) NOT NULL,
  description  text NOT NULL,
  requirements text NOT NULL 

); 

CREATE TABLE final_project.user_jobs (

  user_id  int NOT NULL,
  post_id  int NOT NULL,
  status   varchar(45) NOT NULL

);