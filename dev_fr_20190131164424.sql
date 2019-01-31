--
-- PostgreSQL database dump
--

-- Dumped from database version 10.6
-- Dumped by pg_dump version 10.6

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: dev; Type: SCHEMA; Schema: -; Owner: devfitron
--

CREATE SCHEMA dev;


ALTER SCHEMA dev OWNER TO devfitron;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: categories; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.categories (
    id integer NOT NULL,
    sort integer DEFAULT 500,
    name character varying(255) NOT NULL,
    short character varying(255),
    image character varying(255),
    url character varying(255) NOT NULL,
    seo_h1 character varying(255),
    seo_title character varying(255),
    seo_keywords character varying(255),
    seo_description text,
    description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.categories OWNER TO devfitron;

--
-- Name: categories_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.categories_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.categories_id_seq OWNER TO devfitron;

--
-- Name: categories_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.categories_id_seq OWNED BY dev.categories.id;


--
-- Name: clubs; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.clubs (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    address character varying(255),
    phone character varying(25),
    map_x double precision,
    map_y double precision,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    code character varying(50) NOT NULL,
    iframe text,
    market_image character varying(255),
    id_1c character varying(64)
);


ALTER TABLE dev.clubs OWNER TO devfitron;

--
-- Name: clubs_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.clubs_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.clubs_id_seq OWNER TO devfitron;

--
-- Name: clubs_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.clubs_id_seq OWNED BY dev.clubs.id;


--
-- Name: doings; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.doings (
    id integer NOT NULL,
    sort integer DEFAULT 500 NOT NULL,
    active boolean DEFAULT true NOT NULL,
    name character varying(255) NOT NULL,
    url character varying(255) NOT NULL,
    title character varying(255),
    subtitle character varying(255),
    image character varying(255),
    start_date timestamp(0) without time zone,
    end_date timestamp(0) without time zone,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    preview text,
    description text
);


ALTER TABLE dev.doings OWNER TO devfitron;

--
-- Name: doings_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.doings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.doings_id_seq OWNER TO devfitron;

--
-- Name: doings_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.doings_id_seq OWNED BY dev.doings.id;


--
-- Name: fitnes; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.fitnes (
    id integer NOT NULL,
    code character varying(255) NOT NULL,
    name character varying(255),
    preview text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    menu character varying(100),
    picture character varying(255),
    sort integer
);


ALTER TABLE dev.fitnes OWNER TO devfitron;

--
-- Name: fitnes_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.fitnes_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.fitnes_id_seq OWNER TO devfitron;

--
-- Name: fitnes_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.fitnes_id_seq OWNED BY dev.fitnes.id;


--
-- Name: groups; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.groups (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    title character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.groups OWNER TO devfitron;

--
-- Name: groups_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.groups_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.groups_id_seq OWNER TO devfitron;

--
-- Name: groups_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.groups_id_seq OWNED BY dev.groups.id;


--
-- Name: images; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.images (
    id integer NOT NULL,
    slider_id integer NOT NULL,
    image character varying(255) NOT NULL,
    url character varying(255),
    title character varying(255),
    text text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    active boolean DEFAULT true,
    sort integer DEFAULT 500,
    start_time timestamp without time zone,
    end_time timestamp without time zone
);


ALTER TABLE dev.images OWNER TO devfitron;

--
-- Name: images_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.images_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.images_id_seq OWNER TO devfitron;

--
-- Name: images_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.images_id_seq OWNED BY dev.images.id;


--
-- Name: infrastructures; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.infrastructures (
    id integer NOT NULL,
    club_id integer NOT NULL,
    sort integer DEFAULT 500,
    active boolean DEFAULT true,
    image character varying(255),
    text text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.infrastructures OWNER TO devfitron;

--
-- Name: infrastructures_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.infrastructures_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.infrastructures_id_seq OWNER TO devfitron;

--
-- Name: infrastructures_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.infrastructures_id_seq OWNED BY dev.infrastructures.id;


--
-- Name: intensities; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.intensities (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.intensities OWNER TO devfitron;

--
-- Name: intensities_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.intensities_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.intensities_id_seq OWNER TO devfitron;

--
-- Name: intensities_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.intensities_id_seq OWNED BY dev.intensities.id;


--
-- Name: metas; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.metas (
    id integer NOT NULL,
    page_id integer NOT NULL,
    name character varying(255) NOT NULL,
    content character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.metas OWNER TO devfitron;

--
-- Name: metas_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.metas_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.metas_id_seq OWNER TO devfitron;

--
-- Name: metas_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.metas_id_seq OWNED BY dev.metas.id;


--
-- Name: migrations; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE dev.migrations OWNER TO devfitron;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.migrations_id_seq OWNER TO devfitron;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.migrations_id_seq OWNED BY dev.migrations.id;


--
-- Name: news; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.news (
    id integer NOT NULL,
    active boolean DEFAULT true NOT NULL,
    sort integer DEFAULT 500,
    code character varying(100) NOT NULL,
    title character varying(255) NOT NULL,
    date timestamp(0) without time zone,
    seo_h1 character varying(255),
    seo_title character varying(255),
    seo_keywords character varying(255),
    seo_description text,
    preview text,
    description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.news OWNER TO devfitron;

--
-- Name: news_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.news_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.news_id_seq OWNER TO devfitron;

--
-- Name: news_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.news_id_seq OWNED BY dev.news.id;


--
-- Name: pages; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.pages (
    id integer NOT NULL,
    code character varying(255) NOT NULL,
    title character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    menu character varying(255) NOT NULL,
    sort integer DEFAULT 500 NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    trek character varying(255),
    active boolean DEFAULT true
);


ALTER TABLE dev.pages OWNER TO devfitron;

--
-- Name: pages_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.pages_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.pages_id_seq OWNER TO devfitron;

--
-- Name: pages_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.pages_id_seq OWNED BY dev.pages.id;


--
-- Name: password_resets; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.password_resets (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE dev.password_resets OWNER TO devfitron;

--
-- Name: roles; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.roles (
    id integer NOT NULL,
    title character varying(15) NOT NULL,
    name character varying(255) NOT NULL,
    active boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.roles OWNER TO devfitron;

--
-- Name: roles_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.roles_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.roles_id_seq OWNER TO devfitron;

--
-- Name: roles_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.roles_id_seq OWNED BY dev.roles.id;


--
-- Name: roles_users; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.roles_users (
    id integer NOT NULL,
    user_id integer NOT NULL,
    role_id integer NOT NULL
);


ALTER TABLE dev.roles_users OWNER TO devfitron;

--
-- Name: roles_users_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.roles_users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.roles_users_id_seq OWNER TO devfitron;

--
-- Name: roles_users_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.roles_users_id_seq OWNED BY dev.roles_users.id;


--
-- Name: rooms; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.rooms (
    id integer NOT NULL,
    clubs_id integer NOT NULL,
    active boolean DEFAULT true NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    id_1c character varying(64)
);


ALTER TABLE dev.rooms OWNER TO devfitron;

--
-- Name: rooms_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.rooms_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.rooms_id_seq OWNER TO devfitron;

--
-- Name: rooms_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.rooms_id_seq OWNED BY dev.rooms.id;


--
-- Name: schedule_years; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.schedule_years (
    id integer NOT NULL,
    years_id integer NOT NULL,
    schedules_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.schedule_years OWNER TO devfitron;

--
-- Name: schedule_years_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.schedule_years_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.schedule_years_id_seq OWNER TO devfitron;

--
-- Name: schedule_years_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.schedule_years_id_seq OWNED BY dev.schedule_years.id;


--
-- Name: schedules; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.schedules (
    id integer NOT NULL,
    clubs_id integer NOT NULL,
    trainings_id integer NOT NULL,
    rooms_id integer NOT NULL,
    intensities_id integer NOT NULL,
    active boolean DEFAULT true NOT NULL,
    sort integer DEFAULT 500 NOT NULL,
    start_time timestamp(0) without time zone NOT NULL,
    end_time timestamp(0) without time zone NOT NULL,
    duration integer NOT NULL,
    pre_entry boolean DEFAULT true NOT NULL,
    paid boolean DEFAULT true NOT NULL,
    show_age boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.schedules OWNER TO devfitron;

--
-- Name: schedules_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.schedules_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.schedules_id_seq OWNER TO devfitron;

--
-- Name: schedules_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.schedules_id_seq OWNED BY dev.schedules.id;


--
-- Name: sliders; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.sliders (
    id integer NOT NULL,
    code character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.sliders OWNER TO devfitron;

--
-- Name: sliders_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.sliders_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.sliders_id_seq OWNER TO devfitron;

--
-- Name: sliders_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.sliders_id_seq OWNED BY dev.sliders.id;


--
-- Name: special; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.special (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    description text,
    price_1 double precision NOT NULL,
    price_2 double precision,
    start_active timestamp(0) without time zone NOT NULL,
    end_active timestamp(0) without time zone NOT NULL,
    active boolean DEFAULT true NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    rassrochka boolean DEFAULT true,
    type_card_id integer,
    image character varying(255)
);


ALTER TABLE dev.special OWNER TO devfitron;

--
-- Name: special_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.special_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.special_id_seq OWNER TO devfitron;

--
-- Name: special_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.special_id_seq OWNED BY dev.special.id;


--
-- Name: trainers; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.trainers (
    id integer NOT NULL,
    type_trainers_id integer NOT NULL,
    clubs_id integer NOT NULL,
    name character varying(255) NOT NULL,
    code character varying(255) NOT NULL,
    picture character varying(255),
    image character varying(255),
    youtube character varying(255),
    seo_h1 character varying(255),
    seo_title character varying(255),
    seo_keywords character varying(255),
    seo_description text,
    description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    active boolean DEFAULT true NOT NULL
);


ALTER TABLE dev.trainers OWNER TO devfitron;

--
-- Name: trainers_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.trainers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.trainers_id_seq OWNER TO devfitron;

--
-- Name: trainers_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.trainers_id_seq OWNED BY dev.trainers.id;


--
-- Name: training_years; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.training_years (
    id integer NOT NULL,
    training_id integer NOT NULL,
    year_id integer NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.training_years OWNER TO devfitron;

--
-- Name: training_years_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.training_years_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.training_years_id_seq OWNER TO devfitron;

--
-- Name: training_years_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.training_years_id_seq OWNED BY dev.training_years.id;


--
-- Name: trainings; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.trainings (
    id integer NOT NULL,
    category_id integer NOT NULL,
    type_training_id integer DEFAULT 1 NOT NULL,
    sort integer DEFAULT 500,
    name character varying(255) NOT NULL,
    min_time character varying(15),
    max_time character varying(15),
    url character varying(255) NOT NULL,
    image character varying(255),
    seo_h1 character varying(255),
    seo_title character varying(255),
    seo_keywords character varying(255),
    seo_description text,
    preview text,
    description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    active boolean DEFAULT true
);


ALTER TABLE dev.trainings OWNER TO devfitron;

--
-- Name: trainings_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.trainings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.trainings_id_seq OWNER TO devfitron;

--
-- Name: trainings_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.trainings_id_seq OWNED BY dev.trainings.id;


--
-- Name: type_cards; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.type_cards (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    price double precision,
    sort integer DEFAULT 500 NOT NULL,
    active boolean DEFAULT true NOT NULL,
    description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    code character varying(100)
);


ALTER TABLE dev.type_cards OWNER TO devfitron;

--
-- Name: type_cards_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.type_cards_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.type_cards_id_seq OWNER TO devfitron;

--
-- Name: type_cards_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.type_cards_id_seq OWNED BY dev.type_cards.id;


--
-- Name: type_trainers; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.type_trainers (
    id integer NOT NULL,
    name character varying(100) NOT NULL,
    code character varying(255) NOT NULL,
    seo_h1 character varying(255),
    seo_title character varying(255),
    seo_keywords character varying(255),
    seo_description text,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.type_trainers OWNER TO devfitron;

--
-- Name: type_trainers_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.type_trainers_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.type_trainers_id_seq OWNER TO devfitron;

--
-- Name: type_trainers_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.type_trainers_id_seq OWNED BY dev.type_trainers.id;


--
-- Name: type_trainings; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.type_trainings (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.type_trainings OWNER TO devfitron;

--
-- Name: type_trainings_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.type_trainings_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.type_trainings_id_seq OWNER TO devfitron;

--
-- Name: type_trainings_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.type_trainings_id_seq OWNED BY dev.type_trainings.id;


--
-- Name: user; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev."user" (
    id integer NOT NULL,
    login character varying(50) NOT NULL,
    email character varying(50) NOT NULL,
    first_name character varying(50),
    last_name character varying(50)
);


ALTER TABLE dev."user" OWNER TO devfitron;

--
-- Name: user_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.user_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.user_id_seq OWNER TO devfitron;

--
-- Name: user_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.user_id_seq OWNED BY dev."user".id;


--
-- Name: users; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.users (
    id integer NOT NULL,
    login character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    phone character varying(255) NOT NULL,
    surname character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    lastname character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    active boolean DEFAULT true
);


ALTER TABLE dev.users OWNER TO devfitron;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.users_id_seq OWNER TO devfitron;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.users_id_seq OWNED BY dev.users.id;


--
-- Name: uslugis; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.uslugis (
    id integer NOT NULL,
    fitnes_id integer NOT NULL,
    code character varying(255) NOT NULL,
    preview character varying(255) NOT NULL,
    detail character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    duration character varying(255) NOT NULL,
    directivity character varying(255) NOT NULL,
    intensity character varying(255) NOT NULL,
    "сomplexity" character varying(255) NOT NULL,
    description character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE dev.uslugis OWNER TO devfitron;

--
-- Name: uslugis_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.uslugis_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.uslugis_id_seq OWNER TO devfitron;

--
-- Name: uslugis_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.uslugis_id_seq OWNED BY dev.uslugis.id;


--
-- Name: years; Type: TABLE; Schema: dev; Owner: devfitron
--

CREATE TABLE dev.years (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    sort integer
);


ALTER TABLE dev.years OWNER TO devfitron;

--
-- Name: years_id_seq; Type: SEQUENCE; Schema: dev; Owner: devfitron
--

CREATE SEQUENCE dev.years_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE dev.years_id_seq OWNER TO devfitron;

--
-- Name: years_id_seq; Type: SEQUENCE OWNED BY; Schema: dev; Owner: devfitron
--

ALTER SEQUENCE dev.years_id_seq OWNED BY dev.years.id;


--
-- Name: categories id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.categories ALTER COLUMN id SET DEFAULT nextval('dev.categories_id_seq'::regclass);


--
-- Name: clubs id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.clubs ALTER COLUMN id SET DEFAULT nextval('dev.clubs_id_seq'::regclass);


--
-- Name: doings id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.doings ALTER COLUMN id SET DEFAULT nextval('dev.doings_id_seq'::regclass);


--
-- Name: fitnes id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.fitnes ALTER COLUMN id SET DEFAULT nextval('dev.fitnes_id_seq'::regclass);


--
-- Name: groups id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.groups ALTER COLUMN id SET DEFAULT nextval('dev.groups_id_seq'::regclass);


--
-- Name: images id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.images ALTER COLUMN id SET DEFAULT nextval('dev.images_id_seq'::regclass);


--
-- Name: infrastructures id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.infrastructures ALTER COLUMN id SET DEFAULT nextval('dev.infrastructures_id_seq'::regclass);


--
-- Name: intensities id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.intensities ALTER COLUMN id SET DEFAULT nextval('dev.intensities_id_seq'::regclass);


--
-- Name: metas id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.metas ALTER COLUMN id SET DEFAULT nextval('dev.metas_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.migrations ALTER COLUMN id SET DEFAULT nextval('dev.migrations_id_seq'::regclass);


--
-- Name: news id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.news ALTER COLUMN id SET DEFAULT nextval('dev.news_id_seq'::regclass);


--
-- Name: pages id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.pages ALTER COLUMN id SET DEFAULT nextval('dev.pages_id_seq'::regclass);


--
-- Name: roles id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles ALTER COLUMN id SET DEFAULT nextval('dev.roles_id_seq'::regclass);


--
-- Name: roles_users id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles_users ALTER COLUMN id SET DEFAULT nextval('dev.roles_users_id_seq'::regclass);


--
-- Name: rooms id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.rooms ALTER COLUMN id SET DEFAULT nextval('dev.rooms_id_seq'::regclass);


--
-- Name: schedule_years id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedule_years ALTER COLUMN id SET DEFAULT nextval('dev.schedule_years_id_seq'::regclass);


--
-- Name: schedules id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules ALTER COLUMN id SET DEFAULT nextval('dev.schedules_id_seq'::regclass);


--
-- Name: sliders id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.sliders ALTER COLUMN id SET DEFAULT nextval('dev.sliders_id_seq'::regclass);


--
-- Name: special id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.special ALTER COLUMN id SET DEFAULT nextval('dev.special_id_seq'::regclass);


--
-- Name: trainers id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainers ALTER COLUMN id SET DEFAULT nextval('dev.trainers_id_seq'::regclass);


--
-- Name: training_years id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.training_years ALTER COLUMN id SET DEFAULT nextval('dev.training_years_id_seq'::regclass);


--
-- Name: trainings id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainings ALTER COLUMN id SET DEFAULT nextval('dev.trainings_id_seq'::regclass);


--
-- Name: type_cards id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_cards ALTER COLUMN id SET DEFAULT nextval('dev.type_cards_id_seq'::regclass);


--
-- Name: type_trainers id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_trainers ALTER COLUMN id SET DEFAULT nextval('dev.type_trainers_id_seq'::regclass);


--
-- Name: type_trainings id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_trainings ALTER COLUMN id SET DEFAULT nextval('dev.type_trainings_id_seq'::regclass);


--
-- Name: user id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev."user" ALTER COLUMN id SET DEFAULT nextval('dev.user_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.users ALTER COLUMN id SET DEFAULT nextval('dev.users_id_seq'::regclass);


--
-- Name: uslugis id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.uslugis ALTER COLUMN id SET DEFAULT nextval('dev.uslugis_id_seq'::regclass);


--
-- Name: years id; Type: DEFAULT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.years ALTER COLUMN id SET DEFAULT nextval('dev.years_id_seq'::regclass);


--
-- Data for Name: categories; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.categories (id, sort, name, short, image, url, seo_h1, seo_title, seo_keywords, seo_description, description, created_at, updated_at) FROM stdin;
11	560	Танцевальные программы	Танцевальные программы	/FTUploads/pFd1VL4iFJ7gc5xsgpPUn20LwTXO2Z8FxSvRfWfI.jpeg	dance-programs	Танцевальные программы	Танцевальная тренировка - цены на танцевальные программы для похудения в фитнес-клубе Фитрон, Ростов  для похудения - записаться	\N	Танцевальные групповые тренировки для женщин и мужчин любой спортивной подготовки. Записаться на танцевальную программу для похудения в фитнес-клуб Fitron.	<p>Танцевальная программа — это комплексная тренировка, которая органично объединяет в себе современные танцевальные направления, классические бальные движения, а также особые комбинированные фитнес упражнения. Танец — давно признанное искусство владения своим телом. Он помогает в достижении совершенных форм и пропорций, учит чувствовать ритм и баланс, двигаться гармонично и пластично.</p>\r\n\r\n<p>Групповые занятия с элементами танца позволяют не только улучшить свою физическую форму, но и укрепить здоровье в целом, избавиться от стресса, получить удовольствие и прекрасно провести свое свободное время.</p>\r\n\r\n<p>Общая информация</p>\r\n\r\n<p>В нашем клубе проводится 10 различных танцевальных тренировок, заниматься которыми могут желающие любого возраста от 17 лет. Продолжительность занятия составляет от 45 до 55 минут. Одно из важных преимуществ этой разновидности физических нагрузок — справиться с программой можно при любом уровне подготовки. В зависимости от личных предпочтений есть возможность подобрать быстрый или медленный темп занятий, а также понравившееся танцевальное направление. Квалифицированные тренеры фитнес-клуба «Фитрон» составляют авторские программы занятий с четкой проработкой нагрузки, уделяя внимания всем группам мышц. Любая танцевальная тренировка обеспечит только положительные эмоции, заряд энергии и бодрости, а также поможет с легкостью освоить ритмичные и пластичные движения.</p>\r\n\r\n<p>Виды танцевальных программ</p>\r\n\r\n<p>Окунуться в мир энергичного и зажигательного латиноамериканского танца позволяют тренировки Latina Mix, Zumba и Сaribbean Mix. Освоить азы современных танцевальных движений и с вдохновением покорять любые клубные вечеринки помогут направления House Dance и Dance-Mix. Для любительниц плавных и невероятно женственных движений мы подготовили программу танцев живота Oriental под ритмы восточной музыки. Лучше понять свое тело, раскрепоститься и начать двигаться более красиво и грациозно можно выбрав тренировки Lady's Style или Vogue. Постигнуть страсть и чувственность современного сценического танца, соединяющего в себе восточные и западные направления, поможет Contemporary.</p>\r\n\r\n<p>Особенности танцевальных тренировок</p>\r\n\r\n<p>Несложные движения под ритмичную позитивную музыку — это лучшая танцевальная программа для похудения и улучшения физической подготовки в целом. Она отличается высокой эффективностью, энергичностью и эмоциональностью. Упражнения обеспечивают умеренную нагрузку, которая помогает укрепить иммунную защиту организма, нервную и сердечно-сосудистую системы, стабилизировать эмоциональный фон, избавиться от плохого настроения и стресса, улучшить работу опорно-двигательного аппарата. Занятия придают уверенности, избавляют от комплексов и закрепощенности, позволяя заново открыть себя и развить скрытый потенциал.</p>\r\n\r\n<p>Преимущества танцевальных программ</p>\r\n\r\n<p>Необычные танцевальные связки и оригинальные фитнес упражнения:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>улучшают осанку;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укрепляют мышцы и здоровье;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>развивают координацию, равновесие и чувство ритма;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>уменьшают лишний вес;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>помогают расслабиться;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>учат красивым танцевальным движениям.</p>\r\n\t</li>\r\n</ul>	2018-07-31 09:59:19	2018-07-31 09:59:19
12	580	Боевые искусства	Боевые искусства	/FTUploads/yu3yXMk6L0VIiqpCoDcBAMDMoTC2ga0AcNYKgOT3.jpeg	martial-arts	Боевые искусства	Боевые искусства - записаться на тренировку по фитнес-боевым искусствам в Ростове-на-Дону	\N	Занятие боевыми искусствами в Ростове-на-Дону для новичков и профессионалов. Записаться на тренировку онлайн на сайте Fitron.	<p>Популярность боевых искусств в современное время достаточно высока. Это объясняется желанием получить достаточный уровень защищенности, освоив технику боя, а также поддерживать хорошую спортивную форму. Регулярные занятия способствуют идеальной физической подготовке, при которой мышцы тела постоянно находятся в тонусе. Однако следует понимать, что фитнес-центр — это не профессиональная школа боевых искусств, в которой основной упор делается на профессиональную карьеру, основной целью наших мастеров является обучить клиентов классической технике боя и отработать удары.</p>\r\n\r\n<p>Помимо физической составляющей программы боевых искусств помогают избавиться от напряжения и скопившейся негативной энергии, снять стресс, очистить мысли от повседневных проблем, улучшить концентрацию и научиться контролировать свои эмоции. Тренировка приносит заряд сил и уверенности в себе, улучшает настроение.</p>\r\n\r\n<p>Виды боевых искусств</p>\r\n\r\n<p>Спортивный центр «FITRON» проводит оригинальные и эффективные тренировки под руководством профессиональных специалистов. С нашей помощью боевые искусства в Ростове становятся доступными для клиентов с любым уровнем подготовленности. Они способствуют приобретению спортивного, грациозного и красивого тела, отличающегося также выносливостью и силой. В занятиях могут участвовать мужчины и женщины. Различные боевые комбинации помогут натренировать мышцы, а также освоить технику нападения и защиты.</p>\r\n\r\n<p>Продолжительность занятий составляет 55 минут. Принять участие могут любые желающие в возрасте от 17 лет. Для тренировки обеспечивается все необходимое оборудование.</p>\r\n\r\n<p> </p>\r\n\r\n<p>В клубе «FITRON» представлено несколько направлений боевых искусств. BOXING направлен на тренировку выносливости, скорости реакции и правильности совершения удара, помогает быстро принимать решения. Предполагается средняя и высокая интенсивность занятий. Основной упор идет отработку техники ударов руками и правильному движению ног. KOSHIKI-KARATE — разновидность японского боевого искусства, которая представлена системой рукопашного боя. Также наши клиенты могут освоить принципы таиландского боя, посетив тренировки по тайскому боксу. Основное внимание на них уделяется ударам ногами, для выполнения которых требуется хорошая растяжка.</p>\r\n\r\n<p>Зоны боевых искусств</p>\r\n\r\n<p>Наши тренера обеспечивают профессионально построенные тренировки в боевых искусствах, которые способны обеспечить разностороннюю и полноценную физическую подготовку. Действительно хороший результат дают регулярные тренировки, но занятия подойдут и в качестве дополнительной нагрузки при посещении тренажерного зала. Еще одним преимуществом, помимо поддержания отличной спортивной формы, становится обретение навыков самообороны и быстрой реакции на опасность.</p>\r\n\r\n<p>При выполнении упражнений задействуются все группы мышц, развивается гибкость, выносливость и сила. В зависимости от разновидности боевого искусства, основная нагрузка может быть направлена на верхнюю или нижнюю часть тела.</p>\r\n\r\n<p>Преимущества боевых искусств</p>\r\n\r\n<p>Боевые искусства получили широкое признание благодаря:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>приобретению прекрасной координации движений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>развитию быстрой реакции;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>достаточной для развития нагрузке на все группы мышц;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>хорошей растяжке и гибкости;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>конструктивному избавлению от агрессии и излишней эмоциональности;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>повышению силы и выносливости;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укреплению здоровья;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>постановке правильной техники боя и самозащиты;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>обретению уверенности в своих силах.</p>\r\n\t</li>\r\n</ul>	2018-07-31 10:00:51	2018-07-31 10:00:51
13	600	Mind&Body	Mind&Body	/FTUploads/rMINd0y2jq89bc5Gg3h62KEpRJVPk7MSNmL1cxZV.jpeg	mind-and-body	Mind&Body	Mind and Body программа в фитнес-клубе - записаться на mix тренировки, Fitron в Ростове-на-Дону	\N	В программу Mind Body входят такие направления, как йога, пилатес, растяжка и другая гимнастика. Записаться на групповое занятие Mind and Body в фитнес-клубе Fitron.	\N	2018-07-31 10:02:28	2018-07-31 10:02:28
3	500	Силовые фитнес-программы	Силовые фитнес-программы	/FTUploads/WuVpV8WXV1ji2mCwAUzuk6ARaaCOR7Wpo0Y6lysL.jpeg	strength-programs	Силовые фитнес-программы	Силовые тренировки – цены на групповые силовые тренировки для похудения мужчин и женщин в фитнес-клубе Фитрон	\N	Силовые финтес-программы для мужчин и женщин. Записаться на программу силовых тренировок для набора мышечной массы в фитнес-клуб Fitron.	<p>Силовой фитнес — комплекс спортивных упражнений, с помощью которых можно целенаправленно проработать отдельную группу мышц. Благодаря ему увеличивается объем мышечных тканей, сжигаются лишние жировые клетки, достигается красивая, стройная и подтянутая форма тела с умеренной рельефностью. Силовые тренировки одинаково хорошо подходят для женщин и мужчин, не требуют специальной физической подготовки и легко корректируются по нагрузке.</p>\r\n\r\n<p>Общая информация</p>\r\n\r\n<p>Специалисты спортивного клуба FITRON заботятся о том, чтобы каждая программа силовых тренировокбыла эффективной и безопасной. Правильность выполнения упражнений контролируется, а если в них включено использование спортивного снаряжения, тренер подбирает корректный вес, который будет соответствовать уровню подготовки. Любая тренировка обязательно начинается с разминки, чтобы разогреть мышцы и подготовить их к нагрузке.</p>\r\n\r\n<p>Упражнения оказывают максимальное влияние на различные зоны тела, в результате чего можно сформировать идеальную фигуру, избавиться от лишнего веса и целлюлита. Тренинг оказывает положительное влияние на сердечно-сосудистую систему и ускоряет обмен веществ. Даже если посещатьзал силовых тренировок несколько раз в неделю всего по 15-20 минут заметный результат виден уже через 14 дней.</p>\r\n\r\n<p>Виды силовых программ</p>\r\n\r\n<p>Интенсивность силовых тренировок в фитнес-центре FITRON варьируется от низкой до высокой. Сложность можно подобрать для любого уровня подготовленности, возраста и комплекции. Продолжительность занятия составляет от 30 до 55 минут.</p>\r\n\r\n<p>Силовые тренировки для похудения Antiage и Lean legs повышают кардио-выносливость, улучшают физическую форму, делают мышцы ног и ягодиц подтянутыми и упругими, а после регулярных занятий и более рельефными. Групповой тренинг Antiage проводится на специальных тренажерах Life Fitness с круговым принципом повторения упражнений. Программы Core и X-Press-Core предназначены для укрепления и развития мышц спины и брюшного пресса, устранения усталости и дискомфорта в области позвоночника, а также способствуют формированию правильной осанки. С помощью тренировки Lean Arms можно укрепить мышцы груди, верхнего плечевого пояса, спины.</p>\r\n\r\n<p>Зоны силовых тренировок</p>\r\n\r\n<p>Используя различные упражнения, можно проработать любые группы мышц. В первую очередь задействуются ноги, руки, спина и пресс. Силовые тренировки для мужчин в нашем фитнес-центре отличаются достаточной для оптимальной нагрузки интенсивностью. Ее можно менять, используя более высокие рабочие веса, корректируя продолжительность тренировки, меняя упражнения, количество подходов и повторений, вводя эффективные сеты.</p>\r\n\r\n<p>Преимущества силовых фитнес-программ</p>\r\n\r\n<p>Силовые программы для мужчин помогают набрать мышечную массу или сделать тело более рельефным. Они отлично подходят для снятия напряжения и стресса, помогают обрести спокойствие и уверенность в себе. Силовые тренировки для женщин направлены на снижение веса, придание фактурности фигуре, уничтожение целлюлита и повышение упругости кожи.</p>\r\n\r\n<p>Дополнительные плюсы от занятий:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>стабилизация обмена веществ;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>нормализация кровяного давления;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшение здоровья при проблемах сердца и желудочно-кишечного тракта;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>развитие гибкости и снижение риска растяжений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>устранение проблем со сном;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>увеличение мышечной силы, мощности и выносливости;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>легкость выполнения повседневных задач.</p>\r\n\t</li>\r\n</ul>	2018-07-20 07:35:38	2018-07-31 09:35:54
7	400	Функциональные тренировки	Функциональные тренировки	/FTUploads/q9kYjg6pdHZQgcswaXtjw1EjHAPfm7JuGRi4ypT0.jpeg	functional-training	Функциональные тренировки	Функциональная тренировка - записаться на  программу функционального фитнес-тренинга для девушек, цены в Ростове	\N	Групповые и персональные тренировки для женщин в зоне функционального тренинга в Ростове-на-Дону. Записаться на тренировку онлайн.	<p>Функциональная тренировка обеспечивает обширные возможности для улучшения спортивной формы людям с любыми уровнем физической подготовленности, физиологическими особенностями и возрастом. С его помощью можно усовершенствовать телосложение и привычные движения, развить такие важные физические качества, как сила, гибкость, хорошая координация, выносливость и быстрота. Упражнения могут быть построены на работе с собственным весом или включением спортивного инвентаря. Занятия базируются на принципе постепенного включения в проработку максимального количества мышц. Все упражнения дополняют друг друга, создавая длинные эффективные связки.</p>\r\n\r\n<p>Общая информация</p>\r\n\r\n<p>Главная особенность функционального тренинга заключается в том, что занятия включают упражнения, которые копируют повседневные движения — это позволяет улучшить силу и возможности участвующих в них мышц. В процессе тренировки используются мячи, тяговые тренажеры, амортизаторы или свободные веса, которые позволяют выполнять движения по естественной для тела траектории. Такая тактика исключает лишнюю нагрузку на позвоночник и суставы, снижает риск травм и обеспечивает максимальную эффективность упражнений.</p>\r\n\r\n<p>Виды функциональных тренингов</p>\r\n\r\n<p>Опытные специалисты нашего фитнес-клуба проводят функциональный силовой тренинг по оригинальным авторским методикам, с четкой проработкой нагрузки для разных категорий занимающихся (по физической подготовленности и состоянию здоровья). Это делает спортивные занятия доступными абсолютно для всех. Длительность тренировки составляет от 45 до 55 минут при интенсивности от среднего до высокого уровня.</p>\r\n\r\n<p>Занятие FT Interval предназначено для повышения общей работоспособности организма и комплексного улучшения физических возможностей. Во время выполнения упражнений ощущается нагрузка на все группы мышц. Тренинг имеет фиксированное количество подходов и повторений, а также отдых между ними. Групповая функциональная тренировка FT TRX проходит с использованием специального оборудования — ремней. Тренировки FT Challenge и FT Challenge Friends выполняются в режиме высокой интенсивности с определенным темпом и периодами отдыха, обеспечивая нагрузку на основные мышечные группы, а также улучшая выносливость и силу мышц.</p>\r\n\r\n<p>Зоны функциональных тренингов</p>\r\n\r\n<p>Волшебная сила функциональных упражнений заключается в проработке абсолютно всех мышц тела, включая глубокие, которые отвечают за равновесие, устойчивость и грациозность. Регулярно посещая зал функционального тренинга, можно обрести красивую подтянутую фигуру и легкость движений, улучшить общее самочувствие, укрепить иммунитет. Благодаря обширной вариативности упражнений можно с легкостью формировать индивидуальные планы занятий.</p>\r\n\r\n<p>Преимущества функционального тренинга</p>\r\n\r\n<p>Положительный эффект проявляется в:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>повышенной скорости обменных процессов, что приводит к снижению лишнего веса;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>обретении естественности и легкости повседневных движений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>равномерной проработке нижних и верхних мышечных групп;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>задействовании глубоких мышечных волокон;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>исправлении осанки и укреплении позвоночника;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укреплении иммунной, сердечно-сосудистой и дыхательной системы.</p>\r\n\t</li>\r\n</ul>	2018-07-31 09:38:54	2018-07-31 09:38:54
8	510	Авторские групповые фитнес-программы	Авторские ГП	/FTUploads/YgbI1M8tcqSYAoRM1PiKomf2EeOnX6DTplxXQxIW.jpeg	authors-group-programs	Авторские групповые фитнес-программы	Групповые занятия в фитнес клубе - записаться на авторскую программу тренировок в зале, Fitron	\N	Записаться на авторскую групповую тренировку в фитнес-клуб Fitron. Нашими тренерами групповых программ разработаны авторские фитнес программы, с учетом тенденций развития современного фитнеса.	<p>В спортивном клубе «FITRON» работает профессиональный тренерский состав — мастера групповых фитнес-программ. Они составляют оригинальные авторские занятия, которые отличаются впечатляющей эффективностью, драйвом, позитивным настроем, энергичностью и каждый раз удивляют своей новизной и креативностью. Благодаря им наши клиенты могут не только добиться невероятных спортивных успехов, но еще сохранить красоту и молодость, бодрость духа, укрепить здоровье.</p>\r\n\r\n<p>Мы проводим авторские групповые программы в Ростове с учетом современных тенденций развития фитнеса, постоянно совершенствуя оснащение залов и подход к выполнению спортивных задач любой сложности. Тренировки принадлежат к различным направлениям, что позволяет каждому клиенту найти именно то, что придется по душе и будет соответствовать поставленным целям.</p>\r\n\r\n<p>Виды авторских групповых программ</p>\r\n\r\n<p>Продолжительность тренировки может составлять от 30 минут до часа. Для тех, кто хочет обучиться приемам самозащиты и держать тело в тонусе подойдет программа COSMO COMBO с элементами боевых искусств и хорошей кардио нагрузкой. Не менее эффективные тренировки для укрепления сердечно-сосудистой и дыхательной систем, а также для избавления от лишнего веса — EXPRESS и COSMO CYCLE, которые проходят на велотренажерах под зажигательную музыку. В авторских программах EXPRESS и COSMO PUMP применяется штанга с регулируемым весом, которая помогает сформировать рельеф основных групп мышц и развить силовую выносливость.</p>\r\n\r\n<p>Для любителей более спокойного темпа занятий подойдет групповой фитнес COSMO BALANCE, включающий элементы стретчинга, пилатеса, йоги и тай-чи. COSMO-FT поможет улучшить координацию движений и выносливость. В спортивном клубе «FITRON» также есть особая авторская программа для беременных — COSMO MAMA.</p>\r\n\r\n<p>Зоны авторских групповых занятий</p>\r\n\r\n<p>При выборе тренировок, направленных на снижение веса, нагрузка идет на дыхательную и сердечно-сосудистую системы, а также все основные группы мышц. Чаще всего используются бег и различные виды прыжков, поэтому в первую очередь укрепляются мышцы ног.</p>\r\n\r\n<p>Силовые интервальные программы хорошо подходят для создания красивой и рельефной спортивной фигуры, укрепления мышц. Они отличаются высокой интенсивностью, а также достаточно быстро дают свои результаты — уже через несколько месяцев все прорабатываемые группы мышц выделяются и находятся в постоянном тонусе.</p>\r\n\r\n<p>Разнообразие групповых программ позволяет подготовиться к различным соревнованиям, развить силу и скорость, приучить организм к любым нагрузкам, повысить его выносливость и возможности. Основное внимание может быть направлено на мышцы ног, пресса и спины, рук. Для получения оптимального результата обязательно проводится растяжка.</p>\r\n\r\n<p>Особый вид занятий в группе — это авторские комплексы упражнений, которые помогают сформировать красивую осанку, укрепить мышечный корсет, улучить состояние спины, развить необходимую гибкость, улучшить общее самочувствие.</p>\r\n\r\n<p>Преимущества авторского группового фитнеса</p>\r\n\r\n<p>Групповые занятия в фитнес-клубе «FITRON» отличаются следующими преимуществами:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>индивидуальный подход;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>креативные сочетания различных спортивных направлений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>комплексные тренировки и занятия, нацеленные на выполнение определенных задач;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укрепление здоровья и улучшение общей физической подготовки;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>постоянно корректируемая нагрузка без привыкания к упражнениям;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>советы по правильному питанию для достижения наилучших результатов;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>контроль прогресса каждого клиента.</p>\r\n\t</li>\r\n</ul>	2018-07-31 09:41:52	2018-07-31 09:41:52
9	520	Кардиотренинг	Кардиотренинг	/FTUploads/3PmqnIMsrDvAShvxeGmdQwDzuVvRiUTIKzX3zOKA.jpeg	cardio	Кардиотренинг	Кардиотренировки для похудения – записаться на групповые кардио-тренировки в Fitron в Ростове-на-Дону	\N	Записаться на кардио-тренинг онлайн.  Список кардио-тренировок для сжигания жира, проводимых в спортивном фитнес-клубе Fitron. Расписание кардио программ можно посмотреть на официальном сайте.	<p>Кардиотренировка одинаково хорошо подходит как начинающим любителям активного образа жизни, так и опытным спортсменам. Она легко поддается корректировке в соответствии с возможностями, позволяет подготовить организм к более тяжелым нагрузкам. Немаловажную роль она играет в повышении психической устойчивости, концентрации и снятии стресса. Качественная тренировка стимулирует выброс гормонов эндорфинов, вызывающих состояние абсолютного счастья.</p>\r\n\r\n<p>Общая информация</p>\r\n\r\n<p>Популярность и основное преимущество программы кардиотренинга обусловлены тем, что во время занятия можно решить сразу несколько задач: избавиться от лишнего веса и укрепить организм. Постепенное повышение нагрузок позволяет улучшить эффективность тренировок в любом возрасте и состоянии физической подготовки. Наши квалифицированные тренеры составляют оригинальные программы различной сложности, которые включают танцевальную аэробику, занятия на беговой дорожке, помогают освоить step-платформы.</p>\r\n\r\n<p>Бег — лучший кардиотренинг для похудения. Если его сочетать с силовыми упражнениями или степом, можно увеличить мышечную массу или поддерживать тело в тонусе. Танцевальные элементы помогут новичкам избавиться от закрепощенности и привыкнуть к нагрузке в дружественной веселой атмосфере. При регулярных тренировках снижение веса заметно уже через пару недель, чтобы укрепить сердечно-сосудистую систему понадобится чуть больше времени — несколько месяцев.</p>\r\n\r\n<p>Виды кардиотренировок</p>\r\n\r\n<p>В фитнес-клубе FITRON продолжительность кардиотренировки составляет от 30 до 55 минут. Она зависит от вида упражнений и их интенсивности (от низкой до высокой). Тренинги Fit-walking, Running и Running interval проходят на беговой дорожке. С их помощью можно отработать правильную технику спортивной ходьбы, бега, спринта и подъема в гору. Кардиотренировка для сжигания жира строится на сбалансированном изменении угла наклона дорожки и скорости бега, а также правильном выборе периодов отдыха и нагрузки. Для тех, кто предпочитает занятия в группе под живую веселую музыку, в нашем фитнес-центре предусмотрены тренировки Step time и Step team, которые проходят на step-платформах. В них включены танцевальные движения, не только хорошо укрепляющие мышцы ног, но и обеспечивающие заряд бодрости и позитива на продолжительное время.</p>\r\n\r\n<p>Зоны кардиотренинга</p>\r\n\r\n<p>Во время тренировки работает не только сердце и мышцы ног, разумная нагрузка обеспечивается всему телу, включая мышцы пресса, рук, спины. Благодаря регулярным занятиям тело становится подтянутым и укрепляется, фигура приобретает естественные спортивные формы.</p>\r\n\r\n<p>Преимущества кардиотренинга</p>\r\n\r\n<p>Кардиотренинг — комплексная тренировка, которая положительно влияет на обмен веществ и общее состояние организма. Программа специально подобранных упражнений помогает:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>улучшить работу сердечно-сосудистой, иммунной и дыхательной систем;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>натренировать выносливость и координацию;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>повысить мышечный тонус;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>сделать тело подтянутым и мускулистым;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>избавиться от проблем с давлением;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>снизить лишний вес;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>увеличить объем крови;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укрепить опорно-двигательную систему.</p>\r\n\t</li>\r\n</ul>	2018-07-31 09:44:07	2018-07-31 09:44:07
10	540	Outdoor	Outdoor	/FTUploads/fF0giO1kniieyVX0OjdStvXSyUh4tceoyV8MXoJq.jpeg	outdoor	\N	\N	\N	\N	\N	2018-07-31 09:57:47	2018-07-31 09:57:47
14	620	Водные программы	Водные программы	/FTUploads/vH75LWa5SF63iNcTeCXxdiIpmV4qJfq5I8Oa1DzY.jpeg	water-programs	Водные программы	Тренировка в бассейне - записаться на водные программы в фитнес клубе Fitron, цены в Ростове	\N	Программы групповых занятий в воде в Ростове-на-Дону. Записаться на водную тренировку для любых возрастных групп и с любым уровнем подготовки в фитнес-клуб Fitron.	<p>Занятия в бассейне — один из самых лучших способов для укрепления здоровья. Разнообразие современных программ и направлений позволяют подобрать подходящую нагрузку и виды упражнений для любого возраста и уровня подготовленности: от новичка до профессионала.</p>\r\n\r\n<p>При занятиях в воде нагрузка на суставы и позвоночник значительно снижается, при этом мышцы всегда находятся в тонусе, что обеспечивает высокую эффективность и максимальную безопасность данной разновидности фитнеса.</p>\r\n\r\n<p>«FITRON» — современный фитнес-клуб с бассейном, в котором можно научиться плавать, освоить различные стили, улучшить технику и физическую форму, снизить лишний вес и выполнять лечебные упражнения для улучшения здоровья и самочувствия. Групповые занятия также поднимут настроение и помогут раскрепоститься, а индивидуальные тренировки с тренером повысить эффективность и приблизить достижение желаемой цели.</p>\r\n\r\n<p>Виды водных тренировок</p>\r\n\r\n<p>Плавание и фитнес-программы в спортивном центре «FITRON» подготавливаются специалистами высокой квалификации. Перед началом занятий обязательно проводится инструктаж по безопасному нахождению в водной зоне, ознакомлению с дополнительной экипировкой и оборудованием. Инструктор оценивает подготовленность каждого участника и интересуется состоянием здоровья, чтобы сделать групповое занятие в бассейне максимально эффективным и интересным. Продолжительность тренировки составляет от 40 до 50 минут.</p>\r\n\r\n<p>Для новичков хорошо подойдет программа WATER INTRO, которая содержит основные плавательные движения, соединенные в простые комбинации. Она помогает оценить уровень своей подготовленности и привыкнуть к водной среде. WATER BODY, WATER FITNESS и WATER COMBAT — разновидности силовых тренировок, которые способствуют снижению веса, повышают выносливость и силу, укрепляют все основные мышечные группы. WATER FLAT и WATER RUNNING относятся к аэробным программам, которые развивают ловкость, улучшают координацию и баланс, гибкость тела. WATER STAR — водная тренировкана повышение функциональности и выносливости, отличается чередованием силовой и аэробной нагрузки. Также есть специальная программа для проработки мышц пресса. Для детей предусмотрено несколько тренировок, которые отличаются по интенсивности и представляют различные возрастные группы.</p>\r\n\r\n<p>Зоны водных программ</p>\r\n\r\n<p>Тренировка в бассейне способствует укреплению всех групп мышц. Основная нагрузка идет на верхний плечевой пояс, руки, ноги, ягодицы, спину и брюшной пресс. Регулярные занятия делают тело более стройным и подтянутым, снижают лишний вес, а общую силу и выносливость повышают. Многие упражнения направлены также на улучшение чувства баланса и координации, гибкости и ловкости.</p>\r\n\r\n<p>Преимущества водных занятий</p>\r\n\r\n<p>Основные плюсы тренировок в воде:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>богатый выбор увлекательных силовых упражнений с разным уровнем нагрузки;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшение выносливости и мышечной силы;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>возможность самостоятельного регулирования сопротивления во время выполнения упражнений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укрепление иммунитета;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>доступный спорт для тех, кто по состоянию здоровья избегает лишних нагрузок;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>хорошо прорабатываются не только основные группы мышц, но и мелкие мышечные группы — стабилизаторы, участвующие в поддержании баланса и координации;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>тренировка дыхательной и сердечно-сосудистой систем;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшение настроения и избавление от стресса.</p>\r\n\t</li>\r\n</ul>	2018-07-31 10:04:16	2018-07-31 10:04:16
15	640	Детский фитнес	Детский фитнес	/FTUploads/3ERp7kGwDT7gEU9pV9w9JhTENOBk5dsexpfuBm4W.jpeg	childrens-fitness	Детский фитнес	Детский фитнес: записать ребенка на занятия по фитнес-программе в Ростов-на-Дону	\N	Детский фитнес в Ростове-на-Дону. Записаться на занятия фитнесом для детей. Индивидуальные и групповые занятия по уникальным методикам и программам в фитнес-клубе Fitron.	<p>Детский фитнес — это спортивная программа, которая разрабатывается с учетом возраста ребенка, его физических возможностей и здоровья. Он может включать в себя разноплановые виды упражнений, например, аэробики, гимнастики, силовой нагрузки, восточных единоборств, йоги. Неотъемлемым элементом занятий становятся игровые моменты, расслабляющие методики и коммуникативная составляющая.</p>\r\n\r\n<p>В процессе занятий дети могут обрести новые знакомства, раскрепоститься и с пользой выплеснуть скопившуюся энергию. Помимо этого развиваются такие полезные качества, как гибкость и ловкость, формируется прочный костно-мышечный корсет, укрепляется иммунитет, появляется дисциплинированность.</p>\r\n\r\n<p>Благодаря современному оснащению и квалифицированному тренерскому составу спортивного клуба «FITRON», детский фитнес в Ростове становится доступным и желанным для любого ребенка. Занятия проводятся в ограниченных группах, что позволяет детям полностью расслабиться, почувствовать себя уверенно, получать полноценное внимание тренера и наслаждаться процессом.</p>\r\n\r\n<h2>Виды детского фитнеса</h2>\r\n\r\n<p>«FITRON» предлагает маленьким спортсменам широкое разнообразие физической активности, среди которого можно подобрать тренировку, наиболее подходящую ребенку по темпераменту, возрасту и потенциалу. В числе программ есть боевые искусства, танцевальные занятия, упражнения на развитие ловкости и выносливости, гибкости и пластичности.</p>\r\n\r\n<p>Для самых маленьких деток подготовлены небольшие по продолжительности разминочные комплексы с элементами игры. Хореография включает различные современные направления: рок-н-ролл, хип-хоп, балет, модерн. Немалое внимание уделяется правильному развитию осанки и походки — специальные программы, где детский фитнес-тренер мягко корректирует нарушения и препятствует их дальнейшему развитию.</p>\r\n\r\n<p>Продолжительность занятий составляет от 30 до 55 минут.</p>\r\n\r\n<h2>Особенности детского фитнеса</h2>\r\n\r\n<p>В детском возрасте легче всего выявить и правильно развивать потенциал организма. Сбалансированная двигательная активность, не меньше чем интеллектуальное развитие, влияет на правильное и всестороннее развитие ребенка. Приступать к занятиям фитнесом можно всем здоровым детям, начиная с трех лет.</p>\r\n\r\n<p>В спортивном клубе «FITRON» детские занятия проводятся для мальчиков и девочек от 3 до 16 лет. Благодаря разделению на малые возрастные группы, инструктор детского фитнеса при составлении программы учитывает все физиологические особенности развития, возможности здоровья и выносливости, чтобы в итоге получить сбалансированную по тяжести и времени нагрузку.</p>\r\n\r\n<p>Для положительного результата от занятия рекомендуется посещать детский фитнес не менее трех раз в неделю.</p>\r\n\r\n<h2>Преимущества детского фитнеса</h2>\r\n\r\n<p>Детский фитнес приносит ребенку не только массу положительных впечатлений, но и помогает решить важные задачи, которые связаны с его здоровьем и правильным развитием. Программы детского фитнесав центрах спорта «FITRON» отличаются следующими преимуществами:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>препятствуют развитию плоскостопия;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>повышают сопротивляемость иммунной системы к различным заболеваниям;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>способствуют формированию правильной красивой осанки и ее исправлению при наличии проблем;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>стимулируют физические способности и выносливость организма;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>укрепляют опорно-двигательную систему;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>нормализуют обмен веществ;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшают функциональные возможности вегетативной системы.</p>\r\n\t</li>\r\n</ul>\r\n\r\n<p>Помимо этого детский фитнес повышает устойчивость к психологическим стрессам, способствует формированию гармоничной личности и прививает любовь к правильному образу жизни.</p>	2018-07-31 10:08:21	2018-07-31 10:08:21
16	660	Персональный тренинг	Персональный тренинг	/FTUploads/HaMowVO2gWvGCU9jhgFCjsqPRYO5jrFrPINRqjPp.jpeg	personal-training	Персональный тренинг	Персональные тренировки с тренером: стоимость занятия с персональным фитнес-тренером в тренажерном зале в Ростове	\N	Личный фитнес тренер - стоимость индивидуальных занятий в фитнес-клубе Fitron. Записаться на индивидуальную тренировку онлайн, Ростов-на-Дону.	<p>Целью персонального тренинга считается достижение максимально эффективного результата с учетом всех индивидуальных особенностей организма. Основной проблемой при самостоятельных занятиях часто становится затрата усилий без видимого прогресса, что приводит к разочарованию в спорте и прекращению тренировок. Даже при наличии программы упражнений, половина людей, желающих улучшить свою физическую форму, через некоторое время теряют запал.</p>\r\n\r\n<p>Занятия с персональным тренером — это безопасный, оптимальный по нагрузке и четко соответствующий поставленной цели план действий, который уже через несколько недель будет иметь заметный результат. Квалифицированный специалист обеспечит:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>правильную технику выполнения упражнений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>постановку и планирование задач на краткосрочные и долгосрочные периоды;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>составление и корректировку каждой отдельной тренировки;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>индивидуальный подход;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>точное определение оптимальной нагрузки (веса, количество повторений и подходов) с учетом особенностей здоровья, уровня подготовки и телосложения;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>рекомендации по правильному питанию.</p>\r\n\t</li>\r\n</ul>\r\n\r\n<p>Виды персонального тренинга</p>\r\n\r\n<p>Спортивный клуб «FITRON» предлагает интересные и результативные персональные тренировки в Ростове по следующим направлениям:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>функциональный тренинг;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы для набора мышечной массы;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>тренировки по снижению веса;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>аэробные и кардиозанятия;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовые тренировки (пауэрлифтинг);</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>фитнес-тренировки, направленные на улучшение осанки и профилактику заболеваний позвоночника;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>занятия по коррекции фигуры;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>упражнения на улучшение гибкости;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>тренировки для беременных;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>различные виды единоборств;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>обучение самозащите;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>спортивная подготовка по плаванию и освоению его различных стилей.</p>\r\n\t</li>\r\n</ul>\r\n\r\n<p>Все тренировки с персональным тренером позволяют улучшить спортивную форму, развить физические качества, научиться чувствовать свое тело и правильно выполнять необходимые упражнения. Тренер не только помогает в достижении желаемых целей, но и поддерживает интерес к регулярным занятиям фитнесом, ведению здорового образа жизни, мотивирует и дисциплинирует, поддерживает в преодолении трудностей.</p>\r\n\r\n<p>Зоны персональных тренировок</p>\r\n\r\n<p>Упражнения, которые включают персональные фитнес-тренировки, способствуют укреплению мускулатуры, приучают организм быстро восстанавливается после нагрузок, делают более легким выполнение повседневных задач, улучшают иммунитет и добавляют телу выносливости. Они также способствуют более активной регенерации клеток и помогают оставаться молодым и активным в любом возрасте.</p>\r\n\r\n<p>Проработка конкретных мышечных зон зависит от текущей тренировки, выбранной программы, цели занятий, а также индивидуальной программы каждого тренера. Чтобы избежать психологического дискомфорта и физического привыкания к упражнениям, разнообразить их и сделать более интересными, любое занятие может быть откорректировано. Помимо этого персональный тренер учитывает состояние здоровья и ежедневное самочувствие клиента.</p>\r\n\r\n<p>Преимущества занятий с персональным тренером</p>\r\n\r\n<p>Основные преимущества персонального тренинга:</p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>укрепление связок и сухожилий;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>повышение общего тонуса мышц;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>коррекция фигуры в соответствии с пожеланиями и возможностями клиента;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>избавление от лишних жировых накоплений;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>повышение содержания минеральных веществ в костной ткани;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшение осанки;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>снятие стресса;</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>предупреждение развития заболеваний опорно-двигательного аппарата.</p>\r\n\t</li>\r\n</ul>	2018-07-31 10:15:06	2018-07-31 10:15:06
17	680	Тренажерный зал	Тренажерный зал	/FTUploads/ggFMGkEWbQe9esAuNQ9LwUiccaBs0K5g2p7Y0tCn.jpeg	trenazhernyy-zal	Тренажерный зал	Занятия в тренажерном зале - купить абонемент на программу тренировок для девушек и мужчин, Ростов-на-Дону	\N	Цены на занятия в тренажерном зале в фитнес-клубе Фитрон. Профессиональные тренеры составят программу тренировок индивидуально для девушек и мужчин. Услуги фитнес-клуба в Ростове-на-Дону.	<p><img alt="" src="https://fitron.club/uploads/filemanager/source/%D0%91%D0%B5%D0%B7%20%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-1.jpg" /></p>\r\n\r\n<p>Многие люди мечтают о красивом, подтянутом и сильном теле. Благодаря спортивному клубу «FITRON», который находится в Ростове-на-Дону, мечты воплощаются в реальность! Занятия в тренажерном зале — это лучший способ достичь не только идеальной формы, но и обеспечить себе отличное настроение, самочувствие, красоту и долголетие. Они способствуют комплексному развитию мышечного корсета с возможностью полного контроля нагрузки и прицельной проработки «слабых мест» физической подготовки. Правильно спланированная тренировка в тренажерном зале существенно ускоряет метаболизм, помогает наращиванию мышечной массы или похудению, способствует росту выносливости и помогают выпустить «пар» и снять стресс.</p>\r\n\r\n<p><img alt="" src="https://fitron.club/uploads/filemanager/source/2018-06-14%2015.21.38.jpg" /></p>\r\n\r\n<h2>Занятия в тренажерном зале</h2>\r\n\r\n<p>Тренировки проводятся по комплексной системе, поэтому позволяют одновременно достичь нескольких целей:</p>\r\n\r\n<ul>\r\n\t<li>укрепить здоровье;</li>\r\n\t<li>устранить лишний вес;</li>\r\n\t<li>усовершенствовать фигуру;</li>\r\n\t<li>увеличить силу и выносливость;</li>\r\n\t<li>улучшить координацию движений и гибкость;</li>\r\n\t<li>добиться точности выполнения всех упражнений и сделать более легкими привычные работы по дому или работе;</li>\r\n\t<li>простимулировать дыхательную и сердечно-сосудистую системы;</li>\r\n\t<li>избавиться от негативной или чрезмерной энергии.</li>\r\n</ul>\r\n\r\n<p><img alt="" src="https://fitron.club/uploads/filemanager/source/2018-06-14%2015.21.28.jpg" /></p>\r\n\r\n<p>Тренажерный зал с одинаковым успехом могут посещать, как мужчины, так и девушки, которым не стоит бояться испортить фигуру — нагрузки сделают тело подтянутым и сильным, а естественную красоту только лучше и выразительнее. Программа тренировок включает множество различных упражнений, которые можно комбинировать, заменять, улучшать, добиваясь оптимального результата. Квалифицированный тренер спортивного клуба «FITRON» поможет подобрать индивидуальный спортивный комплекс в соответствии с вашими целями, весом, возможностями организма, здоровьем и возрастом. Профессиональная консультация сделает занятия безопасными и максимально эффективными.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Почему стоит выбрать именно «FITRON»?</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Наш спортивный комплекс гордится самыми большими и хорошо оснащенными залами: площадь составляет около 1200 м<sup>2</sup>, тренажеры представлены последними моделями от мировых лидеров Techno Gym, Precor, Hoist и Foreman. Максимальный комфорт для посетителей обеспечивают удобные душевые, полное оснащение спортивным инвентарем, просторные и открытые фитнес зоны и зоны отдыха и раздевалки с эргономичными шкафчиками в полный рост и возможностью выбора их расположения. Воздух очищается с помощью инновационной технологии. Безопасность обеспечивается системой доступа по отпечаткам пальцев. Сервис соответствует высоким мировым стандартам.</p>\r\n\r\n<p><img alt="" src="https://fitron.club/uploads/filemanager/source/2018-06-14%2015.21.13.jpg" /></p>\r\n\r\n<p>Надеемся, что наши клиенты по достоинству оценят не только услуги зала, но и его креативное ультрасовременное оформление: атмосфера космической станции создает мотивацию к достижению самых невероятных с первого взгляда целей! Чтобы упражнения дали заметный результат, а недорогие цены радовали своей величиной, рекомендуем приобрести абонемент сразу на несколько тренировок, ведь только так можно в полной мере прочувствовать всю прелесть занятий спортом.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Эффективная тренировка в тренажерном зале</h2>\r\n\r\n<p> </p>\r\n\r\n<p>В спортивном клубе «FITRON» поддерживается высочайшие уровень и технологии фитнеса. Занятия проводятся под руководством опытных квалифицированных тренеров, у которых всегда можно спросить совета. Продуманная зональная расстановка тренажеров позволяет сделать занятия максимально результативными и приятными. Она соответствует трехуровневой концепции тренировочного процесса, поэтому позволяет выбирать интенсивность и сложность нагрузки в соответствии с уровнем подготовки: от начального до профессионального уровня.</p>\r\n\r\n<p><img alt="" src="https://fitron.club/uploads/filemanager/source/2018-06-14%2015.21.20.jpg" /></p>\r\n\r\n<p><a href="https://fitronrostov.com/fitnes-uslugi/personal-training/individual-program">Индивидуальные тренировки</a> помогут выработать правильную технику выполнения упражнений, улучшить мотивацию и контроль, сделать занятия эффективными, правильно рассчитать нагрузку. Особенно они важны для новичков, но не менее полезными окажутся и для опытных спортсменов — всегда есть чему учиться и куда развиваться. Персональный тренер делает достижение цели более быстрым, наглядным и в то же время безопасным, он также фиксирует прогресс и корректирует программу с учетом самочувствия, полученных результатов. Тренировки подходят посетителям любого возраста. Наши специалисты с радостью окажут помощь в выборе наилучшего варианта спортивной программы в соответствии с вашими целями и предпочтениями. Стоимость и расписание индивидуальных занятий можно уточнить у нашего менеджера.</p>	2018-07-31 10:17:11	2018-07-31 10:17:11
18	700	Бассейн	Бассейн	/FTUploads/3frTHnvSXhfyGpAwkzoq9hr7ROd8p3sOhZqcezxi.jpeg	basseyn	Бассейн	Записаться в бассейн - цены на занятия в бассейне в фитнес-клубе Фитрон, Ростов-на-Дону	\N	Услуги бассейна в Ростове-на-Дону. Стоимость абонемента в бассейн для детей и взрослых можно узнать по телефону или на официальном сайте фитнес-клуба Фитрон.	<p><img alt="" src="https://fitron.club/uploads/filemanager/source/%D0%91%D0%B5%D0%B7%20%D0%B8%D0%BC%D0%B5%D0%BD%D0%B8-2%20(1).jpg" /></p>\r\n\r\n<p>Занятия в бассейне — это не только эффективная спортивная практика, но и увлекательное, приятное, успокаивающее времяпровождение. Они считаются универсальной разновидностью физических упражнений, с которой не может сравниться никакой другой вид спорта. Плавание и аквааэробика обеспечивают нагрузку на все группы мышц, улучшают выносливость и гибкость, способствуют приобретению красивой подтянутой и рельефной фигуры. Абонемент в бассейн — это залог хорошего самочувствия и настроения, а также крепкого здоровья для людей любой комплекции и возраста.</p>\r\n\r\n<p><img alt="Бассейн Фитрон" src="https://fitron.club/uploads/filemanager/source/WhatsApp%20Image%202018-06-14%20at%2015.54.09.jpg" /></p>\r\n\r\n<p>Плавательный фитнес рекомендуют своим пациентам диетологи, терапевты, невропатологи и другие специалисты, поскольку именно он отличается безопасностью и высокой результативностью. Бассейн хорошо подходит детям, беременным женщинам, пожилым людям, а также спортсменам, которые занимаются другими видами спорта: им он помогает в снятии мышечного напряжения, восстановлении, развитии плавности движений, снятии крепатуры и развитии выносливости.</p>\r\n\r\n<h2>Основные преимущества от занятий в бассейне:</h2>\r\n\r\n<ul>\r\n\t<li>улучшение мышечного тонуса;</li>\r\n\t<li>минимальная нагрузка на опорно-двигательную систему, что особенно важно при лишнем весе или артрите;</li>\r\n\t<li>укрепление костей и развитие гибкости;</li>\r\n\t<li>поддержание оптимальной массы тела;</li>\r\n\t<li>тренировка сердечно-сосудистой системы;</li>\r\n\t<li>снижение уровня холестерина;</li>\r\n\t<li>снятие стресса, повышенная выработка эндорфинов;</li>\r\n\t<li>борьба с приступами астмы;</li>\r\n\t<li>улучшение мозговой деятельности;</li>\r\n\t<li>легкое управление нагрузками и развитие всех групп мышц;</li>\r\n\t<li>закаливание иммунитета и массаж всего тела.</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h2>Программы, которые предлагает спорт-клуб «FITRON»</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Наши квалифицированные тренеры обеспечивают широкое разнообразие программ по плаванию. Расписание клуба включает тренировки, где могут заниматься новички и профессионалы, дети, худеющие и посетители с проблемами здоровья. Для начинающих пловцов тренер продемонстрирует технику правильного выполнения плавательных движений, подскажет, как надо дышать, научит отслеживать частоту сердечных сокращений. Каждое новое групповое занятие проходит по авторской методике, поэтому купив абонемент, вы никогда не заскучаете: различные комбинации упражнений и интенсивности нагрузки помогут держать в тонусе не только мышцы, но и настроение.</p>\r\n\r\n<p><img alt="" src="https://fitron.club/uploads/filemanager/source/WhatsApp%20Image%202018-06-14%20at%2015.54.08.jpg" /></p>\r\n\r\n<p>Разовое занятие позволит вам окунуться в чудесную атмосферу водного зала, а также оценить профессионализм специалистов и удобства клуба. Однако чтобы достичь видимых результатов, следует посещать тренировки регулярно — это касается и похудения и повышения функциональности организма в целом. Вы можете записаться на программу силовой подготовки, развитие гибкости и координации движений, усовершенствовать ловкость, выносливость. Все тренировки отличаются по своей интенсивности и направлению: могут прорабатываться как все группы мышц, так и целенаправленно пресс, верхняя и нижняя часть тела.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Персональные занятия с тренером позволят значительно повысить эффективность тренировок. Он контролирует нагрузку, правильность выполнения всех движений, составляет оптимальную программу по достижению вашей цели:</p>\r\n\r\n<ul>\r\n\t<li>приведение тела и кожи в тонус;</li>\r\n\t<li>похудение;</li>\r\n\t<li>укрепление мышц;</li>\r\n\t<li>улучшение иммунной защиты организма;</li>\r\n\t<li>освоение нового стиля плавания;</li>\r\n\t<li>прокачка отдельных групп мышц;</li>\r\n\t<li>достижение определенных нормативов.</li>\r\n</ul>\r\n\r\n<p> </p>\r\n\r\n<h2>Абонемент в бассейн «FITRON»: оцените все преимущества нашего спорт-клуба!</h2>\r\n\r\n<p> </p>\r\n\r\n<p>Благодаря команде специалистов «FITRON» Ростов-на-Дону впервые может похвастаться премиальной сетью фитнес-клубов мирового класса! Благодаря соблюдению высоких мировых стандартов сервиса каждый клиент будет чувствовать себя комфортно и уверенно. Клуб заботится о безопасности, поэтому предпочитает использовать инновационные технологии для полной защиты — доступ работает по отпечаткам пальца. Передовые системы также применяются для тщательной очистки воды и воздуха. Стоимость занятий определяется в зависимости от их количества — приобрести абонемент всегда выгоднее, особенно учитывая, что по единой мульти-карте будет доступно сразу два бассейна.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Проконсультироваться конкретнее по поводу какой-либо услуги или цены можно использовав телефонную связь (предоставьте свой номер и мы перезвоним вам в кратчайшие сроки) или официальный сайт с онлайн-чатом.</p>	2018-07-31 10:18:28	2018-07-31 10:18:28
19	720	Cycle-студия	Cycle-студия	/FTUploads/T5PNmbwbHU7fTG4PuC4d4ZZSQFhsc5jNXy9X41gt.jpeg	cycle-studiya	\N	\N	\N	\N	\N	2018-07-31 10:20:21	2018-07-31 10:20:21
20	390	INBODY	INBODY	/FTUploads/PIc0EPX1fHfWlaRFlboNCtBk0JTXivNm0hPubleb.jpeg	inbody	\N	Фитнес-тестирование в Ростове-на-Дону: анализ состава тела в фитнес-клубе Фитрон	\N	Фитнес-диагностика в Ростове-на-Дону. Анализ состава тела в Fitron - на основании результатов фитнес-тестирования для Вас составят эффективную и безопасную индивидуальную программу занятий.	<p>Анализ состава тела — быстрый, эффективный и безопасный способ узнать о состоянии здоровья и оценить физическую форму. Вы узнаете 56 параметров состава своего тела за 60 секунд.</p>\r\n\r\n<p>Биоимпедансный анализ тела рекомендован всем, кто следит за своим здоровьем, занимается или планирует заниматься фитнесом. С его помощью удобно следить за результатами и ставить конкретные, измеримые цели, отслеживать динамику изменений.</p>\r\n\r\n<p>Анализаторы InBody измеряют параметры пяти сегментов тела с помощью 8-и тактильных электродов. Данные берутся из анализа, а не рассчитываются на основе среднестатистических данных. Результат при повторных измерениях воспроизводится в 99% случаев. Чтобы записаться на анализ InBody, заполните форму или позвоните по номеру телефона: <a href="tel:+78633018000">301-8000</a>.</p>	2019-01-26 00:22:42	2019-01-26 00:29:23
\.


--
-- Data for Name: clubs; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.clubs (id, name, address, phone, map_x, map_y, created_at, updated_at, code, iframe, market_image, id_1c) FROM stdin;
2	FITRON Милениум	пер. Соборный 94г	+7(863)301-80-00	47.2359030000000004	39.7051119999999997	\N	2019-01-22 14:14:48	millenium	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1354.5082713011345!2d39.7046103!3d47.2358223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea4e11fe97821414!2zRklUUk9OINCc0LjQu9C70LXQvdC40YPQvA!5e0!3m2!1sru!2sru!4v1533651607176" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		\N
8	FITRON Газетный	ул. Красноармейская 170	+7(863)301-80-00	47.226982999999997	39.7136530000000008	2018-07-25 13:24:22	2019-01-22 14:15:31	gazetnyi	\N		\N
5	FITRON Орбита	пр. Королёва 10/4	+7(863)301-80-00	47.2942460000000011	39.7050399999999968	2018-07-12 14:40:29	2019-01-22 14:16:29	orbita	\N		\N
11	FITRON-Горизонт	пр. Михаила Нагибина, 32/2	+7(863)301-80-00	\N	\N	2019-01-22 13:52:29	2019-01-31 10:49:20	gorizont	\N		\N
\.


--
-- Data for Name: doings; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.doings (id, sort, active, name, url, title, subtitle, image, start_date, end_date, created_at, updated_at, preview, description) FROM stdin;
7	500	t	В Fitron Орбита	v-fitron-orbita	Fitron Орбита	\N	/FTUploads/E0vKaqGxtcvYDMLk6V8AhELELIvac9QLJ58LlNuy.jpeg	\N	\N	2018-07-30 08:51:15	2018-07-30 10:49:11	<p>Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. </p>	<p>Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. Вода из бассейна вытесняется в специальные окна в бортиках, очищается в системе механической очистки и подогревается. Для дезинфекции мы используем обеззараживающие агенты и ультрафиолетовое излучение. Очистка воздуха осуществляется с помощью системы вентиляции Breezart Pool Pro. Она закачивает воздух с улицы, нагревает или охлаждает его, удаляет загрязнения и лишнюю влагу. А ещё мы построили хамам в зоне бассейна, чтобы вы могли расслабиться после тренировок.</p>
6	500	t	Открытие фитнес-бара Proton	otkrytie-fitnes-bara-proton	Открытие фитнес-бара Proton в Fitron Миллениум	\N	/FTUploads/YrNJKz9muJPQZzaWWk2Qszlftg2SxU8JN3jfNgZT.jpeg	\N	\N	2018-07-30 08:49:43	2018-07-30 10:49:34	<p>В Fitron Миллениум открылся бар спортивного питания Proton.</p>	<p>В Fitron Миллениум открылся бар спортивного питания Proton. В нем есть вкусный кофе, полезные фреши, качественное спортивное питание — всё что нужно, чтобы подкрепиться до или после тренировки.</p>
4	500	f	Лекция Елены Ярововой	lekcia-eleny-arovovoj	Лекция Елены Ярововой	12 июня	/FTUploads/RSe3tykyaqeXbwoVywJq7EObzG9hWhRpxmOGKk8e.jpeg	\N	\N	2018-07-30 08:44:44	2019-01-26 01:38:43	<p>1 июля в Fitron Миллениум состоялась лекция Елены Ярововой — лицензированного практикующего врача, эндокринолога, диетолога, кандидата медицинских наук. Тема лекции — "Здоровый ужин как способ похудеть!". </p>	<p>1 июля в Fitron Миллениум состоялась лекция Елены Ярововой — лицензированного практикующего врача, эндокринолога, диетолога, кандидата медицинских наук. Тема лекции — "Здоровый ужин как способ похудеть!". Основные вопросы, которые Елена обсудила с аудиторией:</p>\r\n\r\n<p>- каким должен быть правильный ужин</p>\r\n\r\n<p>- можно ли есть после 18.00</p>\r\n\r\n<p>- что нужно есть, чтобы снизить вес</p>\r\n\r\n<p>- каким должен быть правильный ужин.</p>
8	500	f	Поздравляем!	pozdravlaem	Поздравляем с победой!	\N	/FTUploads/u62swdYMsepkL512c0touP3RbvA5it7Zd6Q4g59N.jpeg	\N	\N	2018-07-30 08:52:49	2019-01-26 01:39:20	<p>Клиент Fitron Орбита Шифанов Андрей занял первое место в Чемпионате Европы по пауэрлифтингу и силовым видам спорта.</p>	<p>Клиент Fitron Орбита Шифанов Андрей занял первое место в Чемпионате Европы по пауэрлифтингу и силовым видам спорта. Состязание проходило в г. Сочи в рамках международного спортивного фестиваля "Олимпия - V". Теперь Андрей мастер спорта международного класса в категории жим лёжа.</p>
24	500	f	Мастер-класс "Новогодняя игрушка"	master-klass-novogodnaa-igruska	Мастер-класс "Новогодняя игрушка"	Миллениум	/FTUploads/QPUus0QrmSsmCMB009MHvM2KgTgeF6KDDq7pCPO7.jpeg	\N	\N	2019-01-26 01:51:30	2019-01-26 01:56:32	<p>22.12 в 18.30 в FITRON Миллениум (Соборный, 94Г) состоится мастер-класс "Новогодняя игрушка". </p>	<p>22.12 в 18.30 в FITRON Миллениум (Соборный, 94Г) состоится мастер-класс "Новогодняя игрушка" для детей 3-8 лет.</p>\r\n\r\n<p>Дети будут делать новогодние игрушки, посоревнуются в эстафете, поучаствуют в конкурсе на лучший новогодний костюм.</p>\r\n\r\n<p>Подробности узнавайте на рецепции или по телефону: 301-8000</p>
27	500	f	Новая тренировка	novaa-trenirovka	Газетный	Среда, в 19:00	/FTUploads/AMgrd2TxhD4R2ErJ6PjJMiUO4Nk5y7Ld8OE2bGu7.jpeg	\N	\N	2019-01-26 01:54:32	2019-01-26 01:57:43	<p>MixFight в FITRON Газетный!</p>	<p>MixFight в FITRON Газетный.</p>\r\n\r\n<p>СРЕДА 19:00</p>\r\n\r\n<p>Подробности: 280-8770</p>
31	500	f	Haloween в Орбите	haloween-v-orbite	Haloween в Орбите	28.10.2017	/FTUploads/Gu5RMSKrKLkhcVWG7p1WA4cTDo83qla5oXronxmi.jpeg	\N	\N	2019-01-26 02:00:14	2019-01-26 02:01:57	<p>Страшно интересный Haloween в Орбите</p>	<p>Вас ждет:</p>\r\n\r\n<p>-Творческий мастер-класс,</p>\r\n\r\n<p>- Игровые соревнования,</p>\r\n\r\n<p>- Тропа приключений,</p>\r\n\r\n<p>- Церемония награждения.</p>\r\n\r\n<p>Информация по телефону: 301-2000</p>
30	500	f	Мини-группы в Орбите	mini-gruppy-v-orbite	Гиревой спорт и CosmoEnergy	Орбита	/FTUploads/qZsxz7WDIaGZ7FCEKLbJNch9c0BxsbsGIX39ZKgY.jpeg	\N	\N	2019-01-26 01:59:39	2019-01-26 02:02:09	<p>Гиревой спорт и CosmoEnergy</p>	<p>Подробности по телефону: 301-2000</p>
5	400	t	Турнир по настольному теннису	turnir-po-nastolnomu-tennisu	FITRON Газетный	14 августа	/FTUploads/6nkNcBtgx4Kt1srVrike4ESYITJwzMVa13KmR33W.jpeg	\N	\N	2018-07-30 08:47:52	2018-07-30 14:53:48	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. </p>	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. Записаться на турнир можно у Божко Станислава: тел.: +7 (952)-575-37-93.</p>
9	500	f	Донской марафон	donskoj-marafon	Донской марафон	\N	/FTUploads/OFsY1VQVJDrLqFMlMh0JyWO3BrO7HkF3BwhE5lfz.jpeg	\N	\N	2019-01-26 01:10:10	2019-01-26 01:10:24	<p><strong><span style="color:#0000cc"><span style="font-family:Comic Sans MS,cursive">Донской марафон 14 октября</span></span></strong></p>	<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>14 октября 2018 испытайте свою выносливость! На территории Гребного канала  в 34-й раз пройдёт «Донской марафон». </strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>Дистанции:</strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>- 6 км</strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>-18 км </strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>-42 км 195 м (марафон) </strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><span style="color:#000099"><strong>On-line регистрация до 12 октября 2018 года 19:00 </strong></span></span></p>\r\n\r\n<p><span style="font-family:Comic Sans MS,cursive"><strong><a href="https://reg.place/events/xxxiv-donskoj-marafon"><span style="color:#000099">https://reg.place/events/xxxiv-donskoj-marafon</span></a></strong></span></p>
10	500	f	Сайкл-марафон Cyclon	sajkl-marafon-cyclon	Сайкл-марафон Cyclon	\N	/FTUploads/yPmI9sFYYhSVa9JsfkI2yirMUDLJyEpUYJjqR17J.jpeg	\N	\N	2019-01-26 01:13:23	2019-01-26 01:13:29	<p>C 17 по 30 сентября все занятия в сайкл-студии Cyclon в Fitron Миллениум бесплатны.</p>	<p>C 17 по 30 сентября все занятия в сайкл-студии Cyclon в Fitron Миллениум бесплатны. Узнавайте подробности на рецепции клуба и  по номеру +7 (961) 275 32 55.</p>
11	500	f	Открытие сайкл-студии Cyclon	otkrytie-sajkl-studii-cyclon	Открытие сайкл-студии Cyclon	\N	/FTUploads/42c2AKNJmTMIfeaikWMtiQ4ReqIxReDjzP3BfKJG.jpeg	\N	\N	2019-01-26 01:14:04	2019-01-26 01:14:10	<p>20 июля в Fitron Миллениум открылась новая сайкл-студия Cyclon.</p>	<p>20 июля в Fitron Миллениум открылась новая интерактивная сайкл-студия Cyclon. Cyclon — это 21 велотренажер от LifeFitness и экран размером 2,5 *4 метра. Система Polar Club получает информацию о сердечном ритме, сжигаемых калориях и усилиях в реальном времени. Технология ICG Connect собирает данные с велотренажеров и визуализирует на экране.</p>\r\n\r\n<p>Тренеры Cyclon прошли сертификацию и знают о сайклинге все. А еще они заводные ребята, которые не дают скучать и заряжают драйвом на каждой тренировке.</p>\r\n\r\n<p>На тренировки записывайтесь через наше приложение! <a href="https://itunes.apple.com/us/app/fitron/id862699219?mt=8" rel="nofollow" target="_blank">IOS</a> и <a href="https://play.google.com/store/apps/details?id=com.itrack.fitron378516" rel="nofollow" target="_blank">Android</a>.</p>
12	500	f	4 августа в Fitron Газетный прошли соревнования по настольному теннису!	4-avgusta-v-fitron-gazetnyj-prosli-sorevnovania-po-nastolnomu-tennisu	Поздравляем победителей!	\N	/FTUploads/mfe2h4rKqYMxjbUABeNSRiX0lf0gWkkGBQDRlUWz.jpeg	\N	\N	2019-01-26 01:14:57	2019-01-26 01:15:02	<p>4 августа в Fitron Газетный прошли соревнования по настольному теннису! Всего в соревнованиях приняли участие 32 человека.</p>	<p>4 августа в Fitron Газетный прошли соревнования по настольному теннису! Всего в соревнованиях приняли участие 32 человека. Это было настоящее сражение, никто не хотел уступать ни сантиметра теннисного стола. Но в итоге призерами стали: 1 место - Маренков Сергей</p>\r\n\r\n<p>2 место - Гладких Борис</p>\r\n\r\n<p>3 место - Нечепуренко Антон.</p>\r\n\r\n<p>Спасибо всем, кто был с нами в этот день и принимал участие!</p>
13	500	f	Турнир по настольному теннису	turnir-po-nastolnomu-tennisu	FITRON Газетный	\N	/FTUploads/HmiQjYMN0r4dHyvN62O6C2dOwondDMroDg5azFB1.jpeg	\N	\N	2019-01-26 01:15:40	2019-01-26 01:15:43	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. </p>	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. Записаться на турнир можно у Божко Станислава: тел.: <a href="tel:+79525753793">+7 (952)-575-37-93</a>.</p>
14	500	f	Новая outdoor площадка	novaa-outdoor-plosadka	Новая outdoor площадка	на набережной	/FTUploads/tJDYe0MvBG7bZygUS4MCl5noNit8yRYgsKxjWRHx.jpeg	\N	\N	2019-01-26 01:40:27	2019-01-26 01:40:30	<p>Состоялась долгожданная презентация новой outdoor-площадки нашей компании!</p>	<p>7 июня состоялась долгожданная презентация новой outdoor-площадки нашей компании!</p>\r\n\r\n<p>Тренеры World Class, FITRON и ФизКульт продемонстрировали возможности нового многофункционального спортивного комплекса.</p>
15	500	t	Новая студия групповых программ	novaa-studia-gruppovyh-programm	Новая студия групповых программ	в Fitron Орбита	/FTUploads/O1uP5Yf4dicjSB4qtPlfkSFgESiHDeweRUv24ngf.jpeg	2018-06-15 00:00:00	\N	2019-01-26 01:41:18	2019-01-26 01:41:18	<p>Fitron Орбита открыл ещё одну космическую студию для групповых занятий.</p>	<p>Fitron Орбита открыл ещё одну космическую студию для групповых занятий. Большую и светлую, площадью 160 кв.м. Чистый и свежий воздух в которой обеспечивает специальное климатическое оборудование.</p>
29	500	t	Мини-группы	mini-gruppy	Мини-группы	Орбита	/FTUploads/sy43FqGhoGDf8y1egJgcHcZUm1PdplNY4ox4LsQz.jpeg	2017-11-15 00:00:00	\N	2019-01-26 01:58:55	2019-01-26 01:58:55	<p>Мини-группы в Орбите</p>	<p>Информация по телефону: 301-2000</p>
32	500	t	Массаж	massaz	Массаж	FITRON Миллениум	/FTUploads/aErXcTIPWud7avFLyi7ZCdwe8rtkEvqhWLhcVySW.jpeg	2017-10-19 00:00:00	\N	2019-01-26 02:01:36	2019-01-26 02:01:36	<p>Пилинги, массажи, SPA-ритуалы</p>	<p>Пилинги, массажи, SPA-ритуалы</p>\r\n\r\n<p>Информация на рецепции клуба: 301-8000</p>
16	500	f	FITRONCHALLENGE	fitronchallenge	Внимание, конкурс	приз - 70 т.р.	/FTUploads/byFmownL37H6lXlb0wRNBzdt5BGdNciTFdic0OGP.jpeg	\N	\N	2019-01-26 01:42:07	2019-01-26 01:42:17	<p>26 апреля мы подведем итоги и рандомно выберем пост-победитель. Автор поста и тот, кого вызвали на #FitronChallenge - получат 70 000 рублей на двоих.</p>	<p>Для участия в розыгрыше нужно:</p>\r\n\r\n<p>1. Выбрать друга, которого вы хотите заставить заниматься фитнесом.</p>\r\n\r\n<p>2. Снять видео с собой, где вы призываете его заняться фитнесом в FITRON и сказать: "Идем в на тренировку - жечь жир жестко! Fitron - космический фитнес! Выиграем на двоих - 70.000!"</p>\r\n\r\n<p>3. Разместить это видео у себя в Инстаграмм.</p>\r\n\r\n<p>4. Тегнуть друга.</p>\r\n\r\n<p>5. Поставить хештеги #FitronChallenge.</p>\r\n\r\n<p>Ваш аккаунт должен быть открытым, видео должно обязательно содержать правильную фразу и не содержать сцен насилия, эротики или иного неприемлемого и оскорбительного содержания.</p>\r\n\r\n<p>26 апреля мы подведем итоги и рандомно выберем пост-победитель. Автор поста и тот, кого вызвали на #FitronChallenge - получат 70 000 рублей на двоих.</p>\r\n\r\n<p>Приятный бонус - все, кто принял участие в #FitronChallenge, получает 10% скидку на членство. Просто покажите видео в своем аккаунте в отделе продаж любого FITRON.</p>
17	500	f	Изменение расписания	izmenenie-raspisania	Внимание	Изменение расписания	/FTUploads/PC4rNYAUcTQJwNfGOFGIU6qkKdpShV0pc6OkYbmI.jpeg	\N	\N	2019-01-26 01:43:22	2019-01-26 01:43:35	<p>Изменение расписания групповых и детских программ с 28.04 по 2.05 и 9.05</p>	<p>Изменение расписания групповых и детских программ с 28.04 по 2.05 и 9.05</p>
18	500	f	Временное и частичное закрытие ТЦ Орбита	vremennoe-i-casticnoe-zakrytie-tc-orbita	Временное и частичное закрытие ТЦ "Орбита"	до 27.04.2018	/FTUploads/gHxj2fnDfkDSu32U4F1OvXRZOeT56oLh45fOWO0B.jpeg	\N	\N	2019-01-26 01:44:33	2019-01-26 01:44:44	<p>Уважаемые владельцы клубных карт FITRON Орбита, торговый центр "Орбита", расположенный по адресу пр. Королева 10/4, частично закрывается с 13.04.2018 по 27.04.2018 г, поэтому фитнес-клуб также не будет работать в этот период. Вы можете посещать следующие фитнес-клубы:</p>	<p>Уважаемые владельцы клубных карт FITRON Орбита, торговый центр "Орбита", расположенный по адресу пр. Королева 10/4, частично закрывается с 13.04.2018 по 27.04.2018 г, поэтому фитнес-клуб также не будет работать в этот период. Вы можете посещать следующие фитнес-клубы:</p>\r\n\r\n<ul>\r\n\t<li>Fitron Миллениум, адрес: пер. Соборный 94г.</li>\r\n</ul>\r\n\r\n<ul>\r\n\t<li>Fitron Газетный,адрес: ул. Красноармейская 170/84</li>\r\n</ul>\r\n\r\n<ul>\r\n\t<li>ФизКульт Горизонт, адрес: ТРК "Горизонт", пр. Нагибина 32/2</li>\r\n</ul>\r\n\r\n<p>Сеть World Class доступна по выходным дням.</p>\r\n\r\n<p>Адреса клубов:</p>\r\n\r\n<ul>\r\n\t<li>ул. Герасименко, 5.</li>\r\n\t<li>ул. Красноармейская, 133/117.</li>\r\n</ul>\r\n\r\n<p>Всем владельцам клубных карт FITRON Орбита мы дарим 14 дней активного фитнеса.</p>\r\n\r\n<p>По всем вопросам звоните по телефону: 301-2000.</p>
19	500	t	Спортивная акробатика	sportivnaa-akrobatika	FITRON	Газетный	/FTUploads/z8xltfn5BKgwgL6dCwipuHaDnbpUH9SZWjeYi1t8.jpeg	2018-03-31 00:00:00	\N	2019-01-26 01:45:22	2019-01-26 01:45:22	<p>Каждый вторник и четверг в 17:00 - занятия по спортивной акробатике</p>	<p>Каждый вторник и четверг в 17:00 - занятия по спортивной акробатике в FITRON Газетный</p>\r\n\r\n<p>телефон: 8(988)-253-24-19</p>
20	500	t	Бокс в FITRON Миллениум	boks-v-fitron-millenium	FITRON Миллениум	Бокс	/FTUploads/2e6S4PPz7aQ8CQSGdbexjpZm0CghN7qlXzoVxy9m.jpeg	2018-03-27 00:00:00	\N	2019-01-26 01:48:05	2019-01-26 01:48:05	<p>Новая тренировка по боксу в FITRON Миллениум.</p>	<p>Если вы хотите повысить выносливость, поставить удар и получить новые эмоции, то только для вас - новая тренировка по боксу в FITRON Миллениум.</p>\r\n\r\n<p>Вторник и четверг в 20:30</p>\r\n\r\n<p>Подробнее на рецепции и по телефону: 301-8000</p>
21	500	f	Питайся легко	pitajsa-legko	FITRON Газетный	2-808-770	/FTUploads/yLeC7EB55YeanRvp8ZgQcyKtIxLqD8YIHnfPzrgo.jpeg	\N	\N	2019-01-26 01:48:56	2019-01-26 01:50:16	<p>Питайся легко</p>	<p>3 марта в 10:00 Руфина Атомова, супервайзер групповых программ FITRON Газетный проведет workshop на тему: "Питайся легко". </p>\r\n\r\n<p>Подробности: 2-808-770. </p>
22	500	f	Режим работы в праздники	rezim-raboty-v-prazdniki	!!!	все клубы	/FTUploads/5us9FNqFs16Igh05yFSRjFxemn86GUpH9KpFp52Z.jpeg	\N	\N	2019-01-26 01:49:28	2019-01-26 01:50:21	<p>Праздничный режим работы</p>	<p>23 и 24 февраля мы работаем с 9:00 до 21:00. Отдыхайте и о здоровье не забывайте, приходите тренироваться!</p>
23	500	f	Изменение в расписании	izmenenie-v-raspisanii	Изменение в расписании с 15.01	Миллениум	/FTUploads/9PcEmOviBSWT2c8psDZIZ3y0NIblPq9KhVAtNwsW.jpeg	\N	\N	2019-01-26 01:50:06	2019-01-26 01:50:23	<p>Изменение в расписании с 15.01</p>	<p>Изменение в расписании с 15.01</p>
25	500	f	Новогодний марафон1	novogodnij-marafon1	Газетный	с 18.12	/FTUploads/TS1TtiNFUqJkoVS5KQ1PZdYHxAW5nWs0Ry7pHOah.jpeg	\N	\N	2019-01-26 01:52:04	2019-01-26 01:56:41	<p>В Газетном стартует Новогодний марафон! </p>	<p>В Газетном стартует Новогодний марафон! Участвуй и получай призы.</p>\r\n\r\n<p>Подробности: 2-808-770</p>
26	500	f	Новогодний Марафон2	novogodnij-marafon2	Газетный	18.12	/FTUploads/FInHb6Zn8QUDrcaj9BzSOT94Fw6lFWiEmDL94FT6.jpeg	\N	\N	2019-01-26 01:53:47	2019-01-26 01:56:44	<p>Новогодний марафон в Газетном!</p>	<p>Новогодний марафон - участвуем и получаем призы!</p>\r\n\r\n<p>Подробности на рецепции и по телефону: 2-808-770</p>
28	500	f	Мастер-класс Миллениум	master-klass-millenium	Мастер-класс	Миллениум	/FTUploads/z4yrM8JeiObrDQBiq40JxgNKSaH7jShsnQIjVm7Y.jpeg	\N	\N	2019-01-26 01:55:02	2019-01-26 01:58:12	<p>15.12 в 18.30 в FITRON Миллениум (Соборный, 94 Г) состоится мастер-класс День Художника </p>	<p>15.12 в 18.30 в FITRON Миллениум (Соборный, 94 Г) состоится мастер-класс День Художника.</p>\r\n\r\n<p>Погрузитесь в увлекательный мир красок, праздничную атмосферу и создайте шедевр.</p>\r\n\r\n<p>Подробности узнавайте на рецепции или по телефону: 301-8000</p>
34	500	f	Мастер-класс по акробатике	master-klass-po-akrobatike	Мастер-класс по акробатике	FITRON Орбита	/FTUploads/dvGLzUxLHKYtdnMa3Z6FWGgoC25TQcHHmxCstmVj.jpeg	\N	\N	2019-01-26 02:04:20	2019-01-26 02:04:30	<p>Бесплатный мастер-класс по акробатике для детей</p>	<p>21 сентября в 19:00 в FITRON Орбита состоится бесплатный мастер-класс по акробатике для детей. </p>\r\n\r\n<p>Возраст 5-11 лет.</p>\r\n\r\n<p>Вход только для членов детского клуба FITRON.</p>
35	500	f	Фитнес-тур	fitnes-tur	Роза Хутор	13-17 сентября	/FTUploads/zKrzi62eZBPpa7CSgzpsulVQroDuDHAm6RC51mij.jpeg	\N	\N	2019-01-26 02:05:18	2019-01-26 02:05:40	<p>Горы и море в приятной компании с пользой для здоровья. </p>	<p>Горы и море в приятной компании с пользой для здоровья. Фитнес-тур от Константина Фертика.</p>\r\n\r\n<p>Подробности по телефону: +7 (906) 182-38-23 или на рецепции FITRON Миллениум и Орбита.</p>
36	500	f	Открытый урок по акробатике	otkrytyj-urok-po-akrobatike	Открытый урок по акробатике в Миллениуме	25 августа в 17:00	/FTUploads/unxRpyee8xSfEr3Bg2s8bdSu0qMmfUwwHrN5oAoz.jpeg	\N	\N	2019-01-26 02:07:10	2019-01-26 02:07:19	<p>25 августа в 17:00 состоится открытый урок по акробатике.</p>	<p>25 августа в 17:00 в FITRON Миллениум состоится открытый урок по акробатике.</p>\r\n\r\n<p>Вас ждет:</p>\r\n\r\n<p> - изучение основных элементов акробатики (стойка на лопатках, кувырок, стойка на голове),</p>\r\n\r\n<p>- упражнения для развития гибкости.</p>\r\n\r\n<p>Информация на рецепции клуба и по телефону: 301-8000</p>
37	500	f	Oriental	oriental	Восточные танцы в FITRON Миллениум	Секция Oriental	/FTUploads/VtZxSv17mhBv1id9PWh8ygrtldnWY4gM87nMqorX.jpeg	\N	\N	2019-01-26 02:08:10	2019-01-26 02:08:14	<p>Секция восточных танцев в FITRON Миллениум Секция Oriental.</p>	<p>Секция восточных танцев в FITRON Миллениум Секция Oriental.</p>\r\n\r\n<p>Вторник - 18:00</p>\r\n\r\n<p>Тренер: Лидия Иванова</p>\r\n\r\n<p>Тел.: +7(903)434-42-49</p>
44	500	f	Веселые старты для детей 3-16 лет и их родителей	veselye-starty-dla-detej-3-16-let-i-ih-roditelej	Веселые старты	Веселые старты для детей и родителей	/FTUploads/gBEUNuUK7Q3yqlWInb8tu5R6XjUKr05itQDmk711.jpeg	\N	\N	2019-01-26 02:23:00	2019-01-26 02:23:13	<p>14 июня в 18-00 "Веселые старты" в Fitron для детей от 3-х до 16 лет и их родителей</p>\r\n\r\n<p>В 19-00 - WORKOUT</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 301-8000 и на рецепции клуба.</p>	<p>14 июня в 18-00 "Веселые старты" в Fitron для детей от 3-х до 16 лет и их родителей</p>\r\n\r\n<p>В 19-00 - WORKOUT</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 301-8000 и на рецепции клуба.</p>
51	500	t	Мастер–класс для детей от 3 лет	master-klass-dla-detej-ot-3-let	Мастер–класс	для детей от 3 лет	/FTUploads/LGtJcCglC51CcIIYUzOFxq8YmYEGhh20rfXcC35h.jpeg	2017-03-06 00:00:00	\N	2019-01-26 03:10:06	2019-01-26 03:10:06	<p><strong>Космический подарок для супер–мам!</strong></p>\r\n\r\n<p>Информация и запись на рецепции клуба.</p>	<p><strong>Космический подарок для супер–мам!</strong></p>\r\n\r\n<p>Мастер–класс для детей от 3 лет.</p>\r\n\r\n<p>Информация и запись на рецепции клуба.</p>
52	500	t	Народный жим	narodnyj-zim	Народный жим!	Приглашаются все желающие члены клуба.	/FTUploads/uEYqys1ZySnvYbdV9crWyuYCYM5BwiUiP5FzABda.jpeg	2017-02-23 00:00:00	\N	2019-01-26 03:10:47	2019-01-26 03:10:47	<p><strong>СТАРТ в 15:00 !</strong></p>\r\n\r\n<p>Приём заявок и регистрация до 22.02.17г. включительно.</p>\r\n\r\n<p>Более подробная информация и запись на рецепции.</p>	<p><strong>СТАРТ в 15:00 !</strong></p>\r\n\r\n<p>Приём заявок и регистрация до 22.02.17г. включительно.</p>\r\n\r\n<p>Более подробная информация и запись на рецепции.</p>
33	500	t	Мастер-класс по гирям	master-klass-po-giram	Приходите	в Fitron Орбита	/FTUploads/r9tg1U5MnSWNSyXnbafQtbq8Dh1yWv6XiscnFpTN.jpeg	\N	\N	2019-01-26 02:03:04	2019-01-26 02:03:30	<p>11.10 в 14-00 в Fitron Орбита состоится мастер-класс по гирям.</p>	<p>11.10 в 14-00 в Fitron Орбита состоится мастер-класс по гирям. </p>\r\n\r\n<p>Мастер-класс проводит супервайзер тренажерного зала Антон Денисов.</p>
38	500	f	Набор в секцию по плаванию	nabor-v-sekciu-po-plavaniu	Секция по плаванию FITRON Миллениум	4-5 лет, 6-7 лет	/FTUploads/BILEhEkb9eVk0XGcdiOUo3Sv2PkeHveOQdvZKcqm.jpeg	\N	\N	2019-01-26 02:08:43	2019-01-26 02:08:47	<p>Объявляется набор группы на секцию по плаванию. </p>	<p>Объявляется набор группы на секцию по плаванию.</p>\r\n\r\n<p>Группа 4-5 лет, занятия - в понедельник и пятницу в 14:00</p>\r\n\r\n<p>Группа 6-7 лет, занятия - четверг в 20:00 и воскресенье в 12:00</p>\r\n\r\n<p>Стоимость занятия - 350 руб., стоимость клип-карты 3000 руб. за 10 занятий.</p>\r\n\r\n<p>Только для членов детского клуба FITRON</p>\r\n\r\n<p>Тренер - ЧАСОВСКАЯ ЕКАТЕРИНА,</p>\r\n\r\n<p>тел.: +7(988)-556-61-53</p>
39	500	f	Акробатический рок-н-ролл для детей	akrobaticeskij-rok-n-roll-dla-detej	Набор в группу Cosmo-stars	возраст - от 6-и лет	/FTUploads/HbbmeCpO3cerBCbfJbSE3Lc7NGdZp2bQAoKU0qcQ.jpeg	\N	\N	2019-01-26 02:09:28	2019-01-26 02:09:31	<p>Объявляется набор в танцевальную группу Cosmo-stars для детей от 6-и лет</p>	<p>Объявляется набор в танцевальную группу Cosmo-stars для детей от 6-и лет.</p>\r\n\r\n<p>Тренер - дипломированный хореограф, судья 2-й степени по акробатическому рок-н-роллу Глущенко Кристина</p>\r\n\r\n<p>Информация по тел.: +7(918)-582-44-66</p>
40	500	t	Танцевальная секция	tancevalnaa-sekcia	Танцы в FITRON Миллениум	Сальса, самба, румба, джайв, вальс	/FTUploads/viS1YkKZpbT0xq34x44DX8ajaJjdO4Uxjh8axwOJ.jpeg	2017-08-21 00:00:00	\N	2019-01-26 02:10:21	2019-01-26 02:10:21	<p>В FITRON Миллениум работает танцевальная секция </p>	<p>В FITRON Миллениум работает танцевальная секция.</p>\r\n\r\n<p>Занятия: понедельник в 18:00, суббота в 16:00</p>\r\n\r\n<p>Тренер - Бережко Алексей</p>\r\n\r\n<p>Занятия в формате мини-группы и персональные тренировки</p>\r\n\r\n<p>Направления: Сальса, самба, румба, джайв, вальс, квикстеп, танго</p>\r\n\r\n<p>Тел.: +7(988) 891-67-77</p>
42	500	f	Показ мод на Марсе	pokaz-mod-na-marse	Показ мод на Марсе	28.07. с 17:00	/FTUploads/AF1pm477DHsSn7d4bQoU385nSn9vNN9ddSyqMAzc.jpeg	\N	\N	2019-01-26 02:11:39	2019-01-26 02:11:53	<p>Показ мод на Марсе 28.07. с 17:00</p>	<p>Пусть ваши дети попробуют себя в дизайне одежды! </p>\r\n\r\n<p>Космический показ мод на состоится 28.07.2017. </p>\r\n\r\n<p>В 17:00 дети начнут придумывать костюмы.</p>\r\n\r\n<p>В 19:00 откроется модное дефиле.</p>\r\n\r\n<p>Место проведения: Марс (FITRON Миллениум)</p>\r\n\r\n<p>Информация: 301-8000</p>
43	500	f	Соревнования по плаванию среди детей	sorevnovania-po-plavaniu-sredi-detej	Соревнования по плаванию среди детей	18 июля в 11:00	/FTUploads/fe8G2k3i50JHupilFLtvFT04ZgJD8xMyLFWoC7ZM.jpeg	\N	\N	2019-01-26 02:20:31	2019-01-26 02:21:33	<p>18 июля в 11:00 </p>	<p>18 июля в 11:00 в FITRON Миллениум состоятся соревнования по плаванию среди детей. Дети будут преодолевать дистанции и участвовать в эстафетах.</p>\r\n\r\n<p>Обязательно приходите!</p>\r\n\r\n<p>Подробная информация по телефону: 301-8000</p>
47	500	f	Видео с FITRON Fest	video-s-fitron-fest	Фестиваль ЗОЖ - FITRON Fest	Видео с FITRON Fest		\N	\N	2019-01-26 03:03:41	2019-01-26 03:03:46	<p>Яркий, незабываемый Fitron Fest: праздник для детей с эстафетами, бумажным шоу, открытые тренировки, модный показ, танцы.</p>	\N
48	500	f	График работы клуба с 10 по 12 июня	grafik-raboty-kluba-s-10-po-12-iuna	Изменения в расписании	Режим работы клуба в праздничные дни	/FTUploads/rzjVwcjvrfViZM2QGmXxjrN6JO09PGPPSYR8jjoe.jpeg	\N	\N	2019-01-26 03:07:45	2019-01-26 03:07:50	<p>В праздничные дни клуб работает с 9:00 до 21:00</p>	<p>В праздничные дни клуб работает с 9:00 до 21:00</p>\r\n\r\n<p>С Днем России!</p>
49	500	f	Мастер класс «Zumba kids & Zumba kids Jr.» 4+	master-klass-zumba-kids-zumba-kids-jr-4	Мастер класс	«Zumba kids & Zumba kids Jr.» 4+ в 19:00	/FTUploads/bn9P0wRyEgSFR4bdVZLhJUGjaZRY1iqfaOCUrXxF.jpeg	\N	\N	2019-01-26 03:08:24	2019-01-26 03:08:28	<p>29 марта в 19:00</p>\r\n\r\n<p>Мастер–класс для детей от 4 лет.</p>\r\n\r\n<p>«Zumba kids & Zumba kids Jr.»</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 301-8000 и на рецепции клуба.</p>	<p>29 марта в 19:00</p>\r\n\r\n<p>Мастер–класс для детей от 4 лет.</p>\r\n\r\n<p>«Zumba kids & Zumba kids Jr.»</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 301-8000 и на рецепции клуба.</p>
50	500	t	«Контактная импровизация»  7+	kontaktnaa-improvizacia-7	Мастер класс	«Контактная импровизация»  7+ в 19:00	/FTUploads/56Rl1SSCN7SaKeeoa8ZrC77Iu8cqquzW3kQFWJUe.jpeg	2017-03-24 00:00:00	\N	2019-01-26 03:09:30	2019-01-26 03:09:30	<p><strong>24 марта в 19:00</strong></p>\r\n\r\n<p>Мастер класс для детей от 7 лет.</p>\r\n\r\n<p>«Контактная импровизация»</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 3018000и на рецепции клуба.</p>	<p><strong>24 марта в 19:00</strong></p>\r\n\r\n<p>Мастер класс для детей от 7 лет.</p>\r\n\r\n<p>«Контактная импровизация»</p>\r\n\r\n<p><strong>Подробности :</strong> по т. 301-8000 и на рецепции клуба.</p>
53	500	t	Космический мастер-класс в Fitron "Миллениум"!	kosmiceskij-master-klass-v-fitron-millenium	Космический мастер-класс	в Fitron "Миллениум"	/FTUploads/a4zIqxxpOixqWK2Zy1twxooBFZrTc15rJokbWl0M.jpeg	2017-02-20 00:00:00	2017-02-21 00:00:00	2019-01-26 03:11:36	2019-01-26 03:11:36	<p><strong>В 19:00</strong>  <strong>20 и 21 февраля</strong> <br />\r\nв детском клубе и teen club Fitron "Миллениум"будет проходить космический мастер-класс, в ходе которого ваши дети смогут создать неповторимые сувениры в space–тематике.  <strong>Запись обязательна!</strong></p>	<p><img src="https://fitronrostov.com/uploads/events/af1tv-beaba718a8.jpg" /></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>В 19:00</strong></p>\r\n\r\n<p>20 и 21 февраля в детском клубе и teen club Fitron "Миллениум"будет проходить космический мастер-класс, в ходе которого ваши дети смогут создать неповторимые сувениры в space–тематике.</p>\r\n\r\n<p><strong>Запись обязательна!</strong></p>\r\n\r\n<p>Более подробная информация и регистрация на стойке рецепции или по телефону <strong>301-8000</strong>.</p>
54	500	t	Детский клуб начал свою работу в постоянном режиме!	detskij-klub-nacal-svou-rabotu-v-postoannom-rezime	Детский клуб открыт	в постоянном режиме!	/FTUploads/SIJJ787jmv7xEhQNWNZa3RgwknR2cOo014DuKMry.jpeg	2017-02-15 00:00:00	\N	2019-01-26 03:12:34	2019-01-26 03:12:34	<p><strong>Уважаемые клиенты клуба!</strong></p>\r\n\r\n<p>Детский клуб начал свою работу в постоянном режиме :</p>\r\n\r\n<p><strong>Пн-пт    </strong>с 12 до 21</p>\r\n\r\n<p><strong>Сб, вс   </strong>с 10 до 16</p>	<p><strong>Уважаемые клиенты клуба!</strong></p>\r\n\r\n<p>Детский клуб начал свою работу в постоянном режиме :</p>\r\n\r\n<p><strong>Пн-пт</strong>          <strong>Сб, вс</strong></p>\r\n\r\n<p>с 12 до 21     с 10 до 16.</p>
55	500	t	Официальное открытие Фитрон Миллениум	oficialnoe-otkrytie	Праздничное открытие	Фитрон Миллениум	/FTUploads/jU2SM9AfeQ3DAmwzun9GNzyV4hexCs65qQj5seOz.jpeg	2017-02-09 00:00:00	\N	2019-01-26 03:13:31	2019-01-26 03:13:31	<p>9 февраля состоится праздничное Открытие Fitron "Миллениум" в формате Open Fitness Day! Всех пришедших ждут приятные сюрпризы: розыгрыш, фуршет и приятная атмосфера. Ждем всех на наш праздник! Не забывайте про дресс-код - sport-casual!</p>	<p><strong>9 февраля состоится праздничное Открытие Fitron "Миллениум" в формате Open Fitness Day!</strong></p>\r\n\r\n<p>Всех пришедших ждут приятные сюрпризы: розыгрыш, фуршет и приятная атмосфера. Ждем всех на наш праздник! Не забывайте про дресс-код -<strong> sport-casual!</strong></p>\r\n\r\n<p><strong>Программа мероприятия:</strong> </p>\r\n\r\n<p><img src="http://fitronrostov.com/uploads/events/kartakosmonavtovoborot-96d59a180c.jpg" /></p>
56	500	t	Розыгрыш космического подарка	rozygrish-kosmicheskogo-podarka	Розыгрыш	космического подарка	/FTUploads/RfdZWgUDHouXsBLroeNdgMun4FzqOM2msZZiLeit.jpeg	2017-01-25 00:00:00	\N	2019-01-26 03:14:07	2019-01-26 03:14:07	<p>В первый день работы клуба Fitron Миллениум трое удачливых фитронов могут стать обладателем космического подарка. Более подробную информацию смотрите на нашей странице в instagram <a href="https://www.instagram.com/fitronrostov/" rel="nofollow" target="_blank">@fitronrostov</a></p>	<p>В первый день работы клуба Fitron Миллениум трое удачливых фитронов могут стать обладателем космического подарка. Более подробную информацию смотрите на нашей странице в instagram <a href="https://www.instagram.com/fitronrostov/" rel="nofollow" target="_blank">@fitronrostov</a></p>
57	500	t	Три. Два. Один. Поехали!	otkrytie-fitron-millenium	Три. Два. Один. Поехали!	Открытие В 7:00!	/FTUploads/mPGUgX7j8R856LbXzQldJDZHnB3iMIeVMCSJIhtd.jpeg	2017-01-25 00:00:00	\N	2019-01-26 03:14:43	2019-01-26 03:14:43	<p>Новый мульти-комфортный фитнес-клуб Fitron Миллениум открыл двери для всех поклонников активного и здорового образа жизни</p>	<p>Новый мульти-комфортный фитнес-клуб Fitron Миллениум открыл двери для всех поклонников активного и здорового образа жизни 25.01.2017 в 7:00!</p>\r\n\r\n<p>На поистине космических просторах 3800 кв. м. расположился просторный тренажерный зал (1200 кв. м), залы групповых программ (по 300 кв.м) с последними разработками фитнес-оборудования от мировых лидеров Precor, TechnoGym, Hoist, Foreman:впервые в России! В проекте Fitron Миллениум были использованны самые эффективные и современные решения, все фитнес-зоны клуба имеют открытые и свободные планировки, самые передовые системы очистки воздуха и воды, ультрасовременный концептуальный дизайн, передающий атмосферу космической станции.</p>\r\n\r\n<p>До встречи в Fitron</p>
58	500	t	Пресс-релиз сети фитнес-клубов «FITRON»	press-reliz	Пресс-релиз	сети фитнес-клубов «FITRON»	/FTUploads/F5BYJhNMiNzLcmvXdUJEBelO5CUF2z3w9F1wmbCa.jpeg	2017-01-24 00:00:00	\N	2019-01-26 03:15:25	2019-01-26 03:15:25	<p>Ждем всех владельцев клубных контрактов  «FITRON»  с 25 января 2017 года в первом в России, новом  мульти-комфортном  фитнес-клубе  «FITRON» Миллениум.</p>	<p><strong>ПЕРВЫЙ ФИТНЕС КЛУБ «FITRON» – ОТКРЫТ!</strong></p>\r\n\r\n<p>Ждем всех владельцев клубных контрактов  «FITRON»  с 25 января 2017 года в первом в России, новом  мульти-комфортном  фитнес-клубе  «FITRON» Миллениум.</p>\r\n\r\n<p>Для вас космический фитнес вместе с командой высокопрофессиональных тренеров  в просторном тренажерном зале площадью 1 200 кв. м., зале групповых программ площадью 300 кв. м. , фитнес-оборудование с последними разработками от  мировых лидеров фитнес индустрии «Precor», «TechnoGym», «Hoist», «Foreman».</p>\r\n\r\n<p>При проектировании  клуба «FITRON» Миллениум использованы самые эффективные и современные решения, ноу-хау владельцев брэнда, все фитнес-зоны клуба имеют открытые и свободные планировки, самые передовые системы очистки воздуха, ультрасовременный концептуальный дизайн, передающий атмосферу космической станции.</p>\r\n\r\n<p>    </p>\r\n\r\n<p>Космический «FITRON» Миллениум, площадью  3 800 кв. м., расположен  по  адресу: г. Ростов-на-Дону, пер. Соборный, 94г.</p>\r\n\r\n<p>Режим работы клуба:<br />\r\nс 7:00  до 23:00</p>
41	500	f	Творческая мастерская для детей	tvorceskaa-masterskaa-dla-detej	Творческая мастерская для детей	работает с 1 августа	/FTUploads/NoqJv98xvLyzx3Nbkeq4PLjIjCNG3HpGJ0CLb7J2.jpeg	2017-08-01 00:00:00	\N	2019-01-26 02:10:57	2019-01-26 02:10:57	<p>С 1 августа у нас открыта творческая мастерская!</p>	<p>Приводите деток, мы научим их рисовать, лепить, делать аппликации и оригами.</p>\r\n\r\n<p>Стоимость занятия - 300 р.</p>\r\n\r\n<p>Смотрите время занятий в расписании.</p>
\.


--
-- Data for Name: fitnes; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.fitnes (id, code, name, preview, created_at, updated_at, menu, picture, sort) FROM stdin;
1	functional-training	Функциональные тренировки	<p>Функциональная тренировка&nbsp;обеспечивает обширные возможности для улучшения спортивной формы людям с любыми уровнем физической подготовленности	\N	\N	Функциональные тренировки	/images/fitnes-programs/cat-1-functional-training.jpg	\N
2	strength-programs	Силовые фитнес-программы	<p>Силовой фитнес&nbsp;&mdash; комплекс спортивных упражнений, с помощью которых можно целенаправленно проработать отдельную группу мышц. Благодаря ему увеличивается объем мышечных тканей, сжигаются лишние жировые клетки, достигается красивая, стройная и 	\N	\N	Силовые фитнес-программы	/images/fitnes-programs/cat-2-strength-programs.jpg	\N
3	authors-group-programs	Авторские групповые фитнес-программы	<p>В спортивном клубе &laquo;FITRON&raquo; работает профессиональный тренерский состав &mdash; мастера групповых фитнес-программ. Они составляют оригинальные авторские занятия, которые отличаются впечатляющей эффективностью, драйвом, позитивным настроем, 	\N	\N	Авторские ГП	/images/fitnes-programs/cat-3-authors-group-programs.jpg	\N
9	outdoor	\N	\N	\N	\N	outdoor	/images/fitnes-programs/cat-13-outdoor.jpg	\N
4	cardio	Кардиотренинг	<p>Кардиотренировка&nbsp;одинаково хорошо подходит как начинающим любителям активного образа жизни, так и опытным спортсменам. Она легко поддается корректировке в соответствии с возможностями, позволяет подготовить организм к более тяжелым нагрузкам. Нема	\N	\N	Кардиотренинг	/images/fitnes-programs/cat-4-cardio.jpg	\N
\.


--
-- Data for Name: groups; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.groups (id, name, title, created_at, updated_at) FROM stdin;
1	admin	Администраторы	\N	\N
2	shop	Администраторы интернет-магазин	\N	\N
3	content	Контент-редакторы	\N	\N
\.


--
-- Data for Name: images; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.images (id, slider_id, image, url, title, text, created_at, updated_at, active, sort, start_time, end_time) FROM stdin;
35	11	/FTUploads/dBYLxM8yTtyr5LbkJnywnyKJ2QCBzuSji3j3n8zo.jpeg	детский	детский клуб	детский клуб фит	2019-01-26 00:53:07	2019-01-26 00:53:52	f	500	\N	\N
34	11	/FTUploads/2t52oqYPNEp2u7L5Op4mNTYad0QmTrEYz7ITiuoT.jpeg	опрос	опрос2	опрос3	2019-01-26 00:52:15	2019-01-26 00:53:54	f	500	\N	\N
33	11	/FTUploads/kIAGFe9o78zlvKdUVmBx7H17YzPhpWDkwtw6tkmR.jpeg	детям	детям вм	детям вместе	2019-01-26 00:51:51	2019-01-26 00:53:57	f	500	\N	\N
32	11	/FTUploads/SXsMFb09YUO2qHZrrgFIOd9CsgTLa9AjCT0582cl.jpeg	откр	открыта	открыта сайкл	2019-01-26 00:51:24	2019-01-26 00:53:59	f	500	\N	\N
31	11	/FTUploads/d3aNpYwxG9tsA5dE49iCAF6X6oB5v46H6tYE9dtM.jpeg	фитнес тур	фитнес тур	фитнес тур сочи	2019-01-26 00:51:02	2019-01-26 00:54:02	f	500	\N	\N
30	11	/FTUploads/S7g5bxkqcsvlkAlK4XQkM66ZMcLBuuzj0aauBmBi.jpeg	гру	групп	групповые	2019-01-26 00:50:37	2019-01-26 00:54:05	f	500	\N	\N
29	11	/FTUploads/KgxWQzFb8cZA6bOXTP2JQSduPs7dB2wST5OUV9lg.jpeg	персон	персональный	персональный тренер	2019-01-26 00:50:21	2019-01-26 00:54:11	f	500	\N	\N
28	11	/FTUploads/mJ06EK87oZXgsiyinPgIk5d10v9YR8S7Oay4OVkX.jpeg	питайся	питайся лег	питайся легко	2019-01-26 00:50:00	2019-01-26 00:54:13	f	500	\N	\N
26	11	/FTUploads/wjaqTwQYKi7EyNjsjBsaTCFkshpvykMf1YcMnoO9.jpeg	фитнесс	фитнесс	фитнесс игры	2019-01-26 00:49:20	2019-01-26 00:54:16	f	500	\N	\N
25	11	/FTUploads/cJ9M6KV68VP2tExHCu6Bu1tTAmp2gHwSM8WE2jMR.jpeg	пират	пиратский	пиратский день	2019-01-26 00:49:01	2019-01-26 00:54:25	f	500	\N	\N
23	11	/FTUploads/ka3TjViNbERExaTAMOGbKijQtOo2Zj6rQ6NXp9rN.jpeg	фест	фестиваль	фестиваль здо	2019-01-26 00:48:13	2019-01-26 00:54:32	f	500	\N	\N
22	11	/FTUploads/GLnrTh3Mp3hEDbZfpJbieqx6NwuRbcyUnu0gNw33.jpeg	фитнесс	фитнесс за	фитнесс за 1999	2019-01-26 00:47:54	2019-01-26 00:54:43	f	500	\N	\N
21	11	/FTUploads/eZAdWoPvrhsfnr9flXhZWtqAk4LM7JBw2Z5UoGWv.jpeg	фитнесс	фитнесс за 1999	Фитнесс за 1999	2019-01-26 00:47:35	2019-01-26 00:54:52	f	500	\N	\N
17	11	/FTUploads/Dig2OyxiuIqnkKw85ZPPDhxNpNcQ0TyRv8wunkxv.jpeg	\N	\N	\N	2019-01-26 00:45:27	2019-01-26 15:03:57	t	500	\N	\N
20	11	/FTUploads/orpx8C4CtnBlqj9vObUYVsOMobt9mzTeuO3pItvo.jpeg	\N	\N	\N	2019-01-26 00:46:52	2019-01-26 15:05:22	t	500	\N	\N
24	11	/FTUploads/qE0sq0aEYGsyTp8VTu1kTQY7PFVq9BasrnwGPoC4.jpeg	\N	\N	\N	2019-01-26 00:48:45	2019-01-26 15:05:39	t	500	\N	\N
27	11	/FTUploads/xWWnbvoVrZhhuygM92wUQ22aaRLjcX0SSrOs12Qq.jpeg	\N	\N	\N	2019-01-26 00:49:41	2019-01-26 15:06:04	t	500	\N	\N
18	11	/FTUploads/uQCnrSUXfvCm4fBrpBLVPPoguxfJ0xQnsPuMn4ev.jpeg	\N	\N	\N	2019-01-26 00:46:11	2019-01-26 15:04:40	t	500	\N	\N
19	11	/FTUploads/AokqZ7t2vnhhLbtseRnqHh2ukYFIzNOj5473tXBR.jpeg	\N	\N	\N	2019-01-26 00:46:31	2019-01-26 15:04:59	f	500	\N	\N
36	11	/FTUploads/oponv3rekJRt8xszAB7HEAvIo4xdOZFZfdZIMzU7.jpeg	откр	открытый день	открытый день фитнесса	2019-01-26 00:53:37	2019-01-26 00:53:48	f	500	\N	\N
\.


--
-- Data for Name: infrastructures; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.infrastructures (id, club_id, sort, active, image, text, created_at, updated_at) FROM stdin;
39	5	640	t	/FTUploads/XvfssEXHVT802ENLxjh8HJIIeVvYtWTwp4dzYb2q.jpeg	\N	2018-08-02 12:51:38	2018-08-02 13:53:37
40	5	650	t	/FTUploads/Ekpn0XKLQo5gua81oMGpuINsdaaBJzj6zASPlVMX.jpeg	\N	2018-08-02 12:51:58	2018-08-02 13:53:53
41	5	660	t	/FTUploads/EjUH6bBkCHzhdVpsb8oLOGOMUBKsAqi9O8vbHZTl.jpeg	\N	2018-08-02 12:52:20	2018-08-02 13:54:09
42	5	670	t	/FTUploads/g6FOFnpdYy2N9QQjRTLznFpzb31BtwIE4HBhlwFq.jpeg	\N	2018-08-02 12:52:45	2018-08-02 13:54:20
43	5	680	t	/FTUploads/WblGegVrIQn2xBT8W1dnNOLvpR7NkW0woWSYfn9z.jpeg	\N	2018-08-02 12:53:03	2018-08-02 13:54:31
44	5	690	t	/FTUploads/p0tm4OLOe9r6wX0zWtLCJYSUDMAtfSUd2vDtVZ44.jpeg	\N	2018-08-02 12:53:22	2018-08-02 13:54:42
25	5	500	t	/FTUploads/AxU4Q70VjLtYbNWRd6u5aVkvuGBQQCZes0u8eBbp.jpeg	\N	2018-08-02 12:46:12	2018-08-02 13:50:20
26	5	510	t	/FTUploads/XIXxv09X4p6NbiPa2f3EZ88anYP8TrATVSKzllZy.jpeg	\N	2018-08-02 12:46:38	2018-08-02 13:50:43
27	5	520	t	/FTUploads/O2XcWS3cwyO6EWIVwXREb3hJysM896gIDMfFz2ys.jpeg	\N	2018-08-02 12:47:02	2018-08-02 13:50:52
28	5	530	t	/FTUploads/pURjSvTG20kcM4cNMaYcnOzZwoFUJMIHxKmnmOv8.jpeg	\N	2018-08-02 12:47:20	2018-08-02 13:51:08
29	5	540	t	/FTUploads/UhT5TkEro01Q4H7PAaXvyB25IuZ25KAQYKnuS2xF.jpeg	\N	2018-08-02 12:47:47	2018-08-02 13:51:31
30	5	550	t	/FTUploads/i0ZdaiWuLgEQGkMn59tgJdUgFooSiFXH3w3IHOFK.jpeg	\N	2018-08-02 12:48:23	2018-08-02 13:51:46
31	5	560	t	/FTUploads/0uDr5kn26s8v8hQSAznKa2mHb3e4hqZ1OdNBgys4.jpeg	\N	2018-08-02 12:48:43	2018-08-02 13:52:04
32	5	570	t	/FTUploads/D7OlFCvgu6aFO4QR5cEcPn9rItpRSQwvK2lyRmIo.jpeg	\N	2018-08-02 12:49:04	2018-08-02 13:52:16
33	5	580	t	/FTUploads/XlhYY81kNK47hj2c1joMb3IHMBAxkefs1ioVX6kG.jpeg	\N	2018-08-02 12:49:28	2018-08-02 13:52:27
34	5	590	t	/FTUploads/VAWsVj4DWkokAJQBO5ZgCT3PZYpD7ESsw7R2YHWD.jpeg	\N	2018-08-02 12:49:46	2018-08-02 13:52:37
35	5	600	t	/FTUploads/S6A0gglOPkXRjBeKGrtnEQAExi5oZDqnuzNzxNlc.jpeg	\N	2018-08-02 12:50:06	2018-08-02 13:52:47
36	5	610	t	/FTUploads/FOv8Auazvd37SVsYWIUedY57SVBQYqpfjBv0efVz.jpeg	\N	2018-08-02 12:50:24	2018-08-02 13:52:56
37	5	620	t	/FTUploads/8ixT9aFS4RAdeZYuTfK1FZDd9P57ZbaLpCbQSuda.jpeg	\N	2018-08-02 12:50:48	2018-08-02 13:53:11
38	5	630	t	/FTUploads/yAOl2jII5gvWg3cIV5G2EeyYMAmc1ZRAACVDnWdw.jpeg	\N	2018-08-02 12:51:12	2018-08-02 13:53:26
45	2	500	t	/FTUploads/swEAXzOFNBtiVzj6Z1fUv1QpXUDorcRHTxNv6Ofh.jpeg		2019-01-26 03:25:18	2019-01-26 03:25:18
46	2	500	t	/FTUploads/BTqJVHxj0r14hK7sdmYPsGbx1Tljs2V5I8c7NAdS.jpeg	\N	2019-01-26 03:25:37	2019-01-26 03:25:48
47	2	500	t	/FTUploads/UuMuTgKYVTDf5a4WOwYu1gP25YD1xgvb23Lcs7ja.jpeg		2019-01-26 03:25:55	2019-01-26 03:25:55
48	2	500	t	/FTUploads/WyvGj9qJuPd3vISTbaG5VrhgvoREgCkW1eLgs2YZ.jpeg		2019-01-26 03:26:01	2019-01-26 03:26:01
49	2	500	t	/FTUploads/zNrLX37n4kNYloytKaOfOFDnyeXL5Uf2iiqUl9kA.jpeg		2019-01-26 03:26:08	2019-01-26 03:26:08
50	2	500	t	/FTUploads/pK48UxjF7HVTqJK5yGf73D2u0IoMFXrOi98tbU3r.jpeg		2019-01-26 03:26:17	2019-01-26 03:26:17
52	2	500	t	/FTUploads/74IFWW4ydzxzJIe3DjfiDRmI1dBbTBrvMlWaCGMY.jpeg		2019-01-26 03:26:35	2019-01-26 03:26:35
53	2	500	t	/FTUploads/NtRiIznUM3AlFb0k08T9TSS8AFKJGdMFzWygQiQT.jpeg		2019-01-26 03:26:41	2019-01-26 03:26:41
54	2	500	t	/FTUploads/KAGV9OS4JAxQp56XyUeWqxvr4QzPPnHF1j07Z5A6.jpeg		2019-01-26 03:26:45	2019-01-26 03:26:45
56	2	500	t	/FTUploads/fUa0slDJsTyIdtHrZftZ6PgyU41siDnLWPxKgYJ8.jpeg		2019-01-26 03:26:57	2019-01-26 03:26:57
58	2	500	t	/FTUploads/WLnewgURo4xLJGI5W1mnPLNePPaLWS5cmU7gCDpe.jpeg		2019-01-26 03:27:08	2019-01-26 03:27:08
59	2	500	t	/FTUploads/eH1PKmNLTjjxamEJbWcPNuOarKvSArd05ZMWMYVM.jpeg		2019-01-26 03:27:12	2019-01-26 03:27:12
60	2	500	t	/FTUploads/9GW9zRqmZXjZqoUbqJD5c6NgAvwJXZcqkjAwTOLn.jpeg		2019-01-26 03:27:16	2019-01-26 03:27:16
61	2	500	t	/FTUploads/qRiafnYAf3Hk5Snxy4UE3aW3oUYtIgV4jSIcuxp4.jpeg		2019-01-26 03:27:21	2019-01-26 03:27:21
57	2	500	\N	/FTUploads/exaIIVKnviwwQ6KIhKQWcxe2aUxooyJD9dC1DtWH.jpeg	\N	2019-01-26 03:27:02	2019-01-26 03:27:56
51	2	500	f	/FTUploads/eeMoAGBq5LgddJ33e5ZRAkPywqjrwFy7YyG1m2Ku.jpeg	\N	2019-01-26 03:26:30	2019-01-26 03:27:49
55	2	500	t	/FTUploads/NB67ITYVGZAohRrFThCffTEMUv7FskUStEbCxAdS.jpeg		2019-01-26 03:26:52	2019-01-26 03:26:52
\.


--
-- Data for Name: intensities; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.intensities (id, name, created_at, updated_at) FROM stdin;
2	Низкая	\N	\N
3	Средняя	\N	\N
4	Высокая	\N	\N
\.


--
-- Data for Name: metas; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.metas (id, page_id, name, content, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.migrations (id, migration, batch) FROM stdin;
11	2014_10_12_000000_create_users_table	1
12	2014_10_12_100000_create_password_resets_table	1
13	2018_07_06_174405_create_groups_table	2
14	2018_07_07_130039_create_roles_table	3
15	2018_07_07_141917_create_roles_users_table	3
16	2018_07_09_062756_create_fitnes_table	4
17	2018_07_09_063617_create_uslugis_table	5
18	2018_07_09_132209_create_pages_table	6
19	2018_07_09_134812_create_metas_table	7
20	2018_07_12_073121_create_clubs_table	8
21	2018_07_16_131435_create_sliders_table	9
22	2018_07_16_131559_create_images_table	9
24	2018_07_19_114341_create_years_table	10
25	2018_07_19_115534_create_type_trainings_table	11
26	2018_07_19_120339_create_categories_table	12
27	2018_07_19_122035_create_trainings_table	13
28	2018_07_23_105229_create_doings_table	14
29	2018_08_01_082202_create_infrastructures_table	15
30	2018_08_02_145459_create_news_table	16
31	2018_08_13_073706_create_training_years_table	17
32	2018_08_13_101432_create_type_trainers_table	18
33	2018_08_14_084619_create_trainers_table	19
34	2018_08_16_073015_create_intensities_table	20
35	2018_08_16_073716_create_rooms_table	21
36	2018_08_16_100147_create_schedules_table	22
37	2018_08_16_102010_create_schedule_years_table	23
38	2018_11_16_103211_create_special_table	24
39	2018_11_23_112423_create_type_cards_table	25
\.


--
-- Data for Name: news; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.news (id, active, sort, code, title, date, seo_h1, seo_title, seo_keywords, seo_description, preview, description, created_at, updated_at) FROM stdin;
2	t	510	surprizy-v-trenazernyh-zalah	Сюрпризы в тренажерных залах!	2016-11-16 00:00:00	\N	\N	\N	\N	<p>Первое из нововведений - это просторные удобные раздевалки.</p>	<p><img src="http://fitronrostov.com/uploads/news/9fot-96c2bb9acd.jpg" /></p>\r\n\r\n<p>Сеть фитнес-клубов Fitron постепенно будет раскрывать все сюрпризы, которые Вы сможете увидеть в тренажерных залах.</p>\r\n\r\n<p><strong>И первое из нововведений</strong> - это просторные <strong>удобные раздевалки</strong>, в которых каждому клиенту будет предоставлен большой эргономичный полно-ростовой<em> (а не половинчатый, как в большинстве других клубов!)</em> шкафчик, в котором можно будет с комфортом разместить все вещи, и даже повесить костюм или пальто</p>\r\n\r\n<p><strong>Мы не экономим на комфорте клиентов!</strong></p>\r\n\r\n<p>Подробности в фитнес-клубах Fitron!</p>	2018-08-03 11:13:37	2018-08-03 11:13:37
1	t	400	zaversenie-fitnesmanii	Завершение "Фитнесмании"!	2016-11-10 00:00:00	\N	\N	\N	\N	<p>Благодарим всех участников проекта и поздравляем победителей, ставших счастливыми обладателями клубной карты сети Fitron на 12 месяцев!</p>	<p><img src="http://fitronrostov.com/uploads/news/10fot-1b648fe8c1.jpg" /></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Сегодня, 10 ноября, мы завершили "Фитнесманию"!</strong></p>\r\n\r\n<p>Благодарим всех участников проекта и поздравляем победителей, ставших счастливыми обладателями клубной карты сети Fitron на 12 месяцев!</p>	2018-08-03 10:01:20	2018-08-03 12:39:20
4	t	520	konkurs-vkusnye-prizy-ot-only-onlyrostov	Конкурс! Вкусные призы от ONLY @only_rostov	2016-12-14 00:00:00	\N	\N	\N	\N	<p>​В преддверии Нового года Fitron "Орбита" запускает конкурс!</p>	<p><img src="http://fitronrostov.com/uploads/news/8fot-cb0d286c38.jpg" /></p>\r\n\r\n<p>В преддверии Нового года Fitron "Орбита" запускает конкурс, главными призами которого являются космически вкусные призы от ONLY <a href="https://www.instagram.com/only_rostov/">@only_rostov</a>!</p>\r\n\r\n<p><strong>Условия просты:</strong> подпишись на страницы Fitron @fitronrostov и ONLY <a href="https://www.instagram.com/only_rostov/">@only_rostov</a>, в комментариях к этому посту укажи свой ник</p>\r\n\r\n<p>И<strong> 21.12.2016</strong> мы узнаем имена 3 победителей!</p>	2018-08-07 08:02:45	2018-08-07 08:02:45
5	t	530	pobediteli-konkursa-ot-only-onlyrostov	Победители конкурса от ONLY @only_rostov	2016-12-22 00:00:00	\N	\N	\N	\N	<p>​Фитроны! Спасибо,что вы с нами!</p>	<p><strong><img src="http://fitronrostov.com/uploads/news/7fot-9436bd64ef.jpg" /></strong></p>\r\n\r\n<p><strong>Фитроны! </strong>Поздравляем наших<em> победителей конкурса</em> от ONLY <a href="https://www.instagram.com/only_rostov/">@only_rostov</a>. </p>\r\n\r\n<p>Спасибо,что вы с нами!</p>\r\n\r\n<p>В ближайшее время с вами свяжутся для уточнения места вручения космических корзин</p>\r\n\r\n<p><strong>Превосходи в движении!<br />\r\nБудь с Fitron!</strong></p>	2018-08-07 08:04:31	2018-08-07 08:04:31
6	t	540	ese-odin-podarok-ot-komandy-kosmiceskoj-seti-fitnes-klubov-fitron	Еще один подарок от команды космической сети фитнес-клубов Fitron!	2016-12-26 00:00:00	\N	\N	\N	\N	<p>Спешите выиграть абонемент в самый инновационный клуб нашего города!</p>	<p><img src="http://fitronrostov.com/uploads/news/6fot-853a36eecc.jpg" /></p>\r\n\r\n<p>Команда космической сети фитнес-клубов Fitron приготовила для Вас ещё один подарок!</p>\r\n\r\n<p>Спешите <strong>выиграть абонемент</strong> в самый инновационный клуб нашего города!</p>\r\n\r\n<p><strong>А сделать это очень просто:</strong></p>	2018-08-07 08:05:53	2018-08-07 08:05:53
7	t	550	surprizy-dla-posetitelej-fitnes-klubov-fitron	Сюрпризы для посетителей фитнес-клубов Fitron!	2017-01-11 00:00:00	\N	\N	\N	\N	<p>Одними из них являются беговые дорожки марки Precor серии Experience, спроектированые с учетом накопленного опыта и индивидуального подхода к бег</p>	<p><strong><img src="http://fitronrostov.com/uploads/news/3fot-228510c8aa.jpg" /></strong></p>\r\n\r\n<p><strong>Посетителей фитнес-клубов Fitron ожидает много сюрпризов.</strong></p>\r\n\r\n<p>Одними из них являются беговые дорожки марки Precor серии Experience, спроектированые с учетом накопленного опыта и индивидуального подхода к бегу. Плавное и естественное движение,пониженная нагрузка на суставы,надежное и контролируемое отталкивание - это только ряд преимуществ, которые получает клиент при использовании данного оборудования</p>\r\n\r\n<p>Беговые дорожки Precor ― это комфорт, пространство и надежность во всех деталях!</p>\r\n\r\n<p><strong>Будьте первыми!</strong> Испытайте все возможности тренажеров Precor серии Experience в фитнес-клубах Fitron!!!</p>	2018-08-07 08:07:04	2018-08-07 08:07:04
8	t	560	peredovye-tehnologii-v-fitron-millenium	Передовые технологии в Fitron Миллениум?	2017-01-11 00:00:00	\N	\N	\N	\N	<p>Ультрасовременная пропуская система позволит использовать биометрический сбор данных при вдохе в клуб!</p>	<p><strong><img src="http://fitronrostov.com/uploads/news/4fot-55e43cab31.jpg" /></strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Fitron «Миллениум»</strong> оснащен самыми передовыми, с точки зрения безопасности» технологиями.</p>\r\n\r\n<p>Несколько часов назад была установлена ультрасовременная пропуская система, которая позволит использовать биометрический сбор данных при вдохе в клуб!</p>\r\n\r\n<p>Подробности - 25 января.</p>	2018-08-07 08:08:15	2018-08-07 08:08:15
9	t	570	rozygrys-10-abonementov-v-ultrasovremennye-fitnes-kluby-fitron	Розыгрыш 10 абонементов в ультрасовременные фитнес-клубы Fitron!	2017-01-12 00:00:00	\N	\N	\N	\N	<p>Следите за нашими новостями в соц.сетях и будьте в курсе самых последних новостей!</p>	<p><strong><img src="http://fitronrostov.com/uploads/news/5fot-307166503a.jpg" /></strong></p>\r\n\r\n<p><strong>13 января</strong></p>\r\n\r\n<p>на официальной странице группы Fitronrostov пройдет розыгрыш 10 абонементов в ультрасовременные фитнес-клубы Fitron!</p>\r\n\r\n<p>Следите за нашими новостями в соц.сетях и <strong>будьте в курсе</strong> самых последних новостей!</p>	2018-08-07 08:09:37	2018-08-07 08:09:37
10	t	580	podgotovka-k-otkrytiu-fitron-millenium-idet-polnym-hodom	​Подготовка к открытию Fitron «Миллениум» идет полным ходом!	2017-01-12 00:00:00	\N	\N	\N	\N	<p>Несколько дней назад было смонтировано суперсоврменное настенное покрытие Airslate.</p>	<p><img src="http://fitronrostov.com/uploads/news/1fot-47f8ac2d81.jpg" /></p>\r\n\r\n<p><strong>Подготовка к открытию Fitron «Миллениум» идет полным ходом!</strong> Несколько дней назад было смонтировано суперсоврменное настенное покрытие Airslate.</p>\r\n\r\n<p><strong>Airslate -</strong> это современное решение интерьера, которое позволяет создать монолитное покрытие с эффектом горных скал или утесов. Стильный концептуальный дизайн благодаря своим уникальным эстетическими и технологическим характеристикам гармонично интегрируется в пространство, рождая индивидуальную выразительность. Материал отличается высокой устойчивостью к внешним раздражителям, механическим и термальным воздействиям, обладает высокой гибкостью. Материал настолько искусно выполнен, что создает неподдельное ощущение, что перед Вами монолит.</p>	2018-08-07 08:10:54	2018-08-07 08:10:54
11	t	590	klimaticeskaa-ustanovka-dla-bassejnov-breezart-pool-pro	Климатическая установка для бассейнов Breezart Pool Pro!	2017-01-20 00:00:00	\N	\N	\N	\N	<p>Вентустановка идеально подходит для применения в нашем бассейне и позволит создать и поддерживать оптимальные параметры воздушной среды круглый год при минимальных затратах тепловой энергии.</p>	<p><strong>Климат бассейна.</strong></p>\r\n\r\n<p> </p>\r\n\r\n<p>Слабым местом, с точки зрения Климата в фитнес клубе Оранж, была система вентиляции воздуха в бассейне.</p>\r\n\r\n<p>Чтобы справиться с этой проблемой, были привлечены специалисты инженеринговой компании Арсенал, которые разработали проект вентиляции помещения. В итоге, была приобретена и смонтирована климатическая установка для бассейнов <strong>Breezart Pool Pro</strong>— это приточно-вытяжная вентиляционная установка, предназначенные для осушения и вентиляции воздуха в помещениях с интенсивным влагоотделением. Вентустановка идеально подходит для применения в нашем бассейне и позволит создать и поддерживать оптимальные параметры воздушной среды круглый год при минимальных затратах тепловой энергии.</p>\r\n\r\n<p><strong>В ее состав входят:</strong></p>\r\n\r\n<p>- воздушные фильтры, которые удаляют пыль и другие загрязнения из воздуха</p>\r\n\r\n<p>- рекуператор, который позволяет зимой нагревать приточный воздух за счет тепла удаляемого вытяжного воздуха</p>\r\n\r\n<p>- камера смешения, через которую добавляется свежий воздух с улиц</p>\r\n\r\n<p>- модуль осушения, в котором удаляется лишняя влага</p>\r\n\r\n<p><strong>Посещение плавательного бассейна</strong> – это отличный способ укрепить свое здоровье, улучшить работу сердечно-сосудистой и дыхательной системы, сбросить лишний вес и просто расслабиться и отдохнуть.</p>	2018-08-07 08:12:18	2018-08-07 08:12:18
12	t	600	detskij-klub-teper-rabotaet-v-postoannom-rezime	Детский клуб теперь работает в постоянном режиме!	2017-02-15 00:00:00	\N	\N	\N	\N	<p>Детский клуб начал свою работу в постоянном режиме :<br />\r\nПн-пт - с 12 до 21     /      Сб, вс - с 10 до 16</p>	<p><img src="https://fitronrostov.com/uploads/news/kids-f4ac75b0f1.jpg" /></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Уважаемые клиенты клуба!</strong></p>\r\n\r\n<p>Детский клуб начал свою работу в постоянном режиме :</p>\r\n\r\n<p><strong>Пн-пт</strong>              <strong>Сб, вс</strong></p>\r\n\r\n<p>с 12 до 21         с 10 до 16.</p>	2018-08-07 08:13:37	2018-08-07 08:13:37
13	t	610	trenirujsa-i-zakalajsa	Тренируйся и закаляйся!	2017-02-17 00:00:00	\N	\N	\N	\N	<p>Приглашаем на спец.программы по плаванию для детей от 5 до 16 лет!</p>	<p>ХОТИТЕ НАУЧИТЬ РЕБЕНКА ПЛАВАТЬ И УСОВЕРШЕНСТВОВАТЬ ТЕХНИКУ ПЛАВАТЕЛЬНЫХ ДВИЖЕНИЙ?</p>\r\n\r\n<p>Приглашаем на спец.программы по плаванию для детей от 5 до 16 лет!</p>\r\n\r\n<p>ИЩИ В РАСПИСАНИИ ВОДНЫХ ПРОГРАММ!</p>\r\n\r\n<p>По вопросам обращаться на рецепцию клуба и по тел. +7(863) <strong>3018000</strong>.</p>	2018-08-07 08:14:46	2018-08-07 08:14:46
14	t	620	cosmo-balance	COSMO BALANCE	2017-02-19 00:00:00	\N	\N	\N	\N	<p>Тренировка с элементами йоги ,тай-чи, пилатес, стрейчинга.</p>	<p><img src="https://fitronrostov.com/uploads/news/balance-d4bd8fc866.jpg" /></p>\r\n\r\n<p>Тренировка с элементами йоги ,тай-чи, пилатес, стрейчинга.</p>\r\n\r\n<p>Улучшает подвижность в суставах, гибкость, мышечный корсет.</p>\r\n\r\n<p>Красивя хореография и вдохновляющая музыка поможет снять усталость</p>\r\n\r\n<p>и снизить уровень стресса.</p>\r\n\r\n<p>ИЩИ В РАСПИСАНИИ ГРУППОВЫХ ПРОГРАММ</p>	2018-08-07 08:15:54	2018-08-07 08:15:54
15	t	630	cosmo-pump	COSMO PUMP	2017-02-19 00:00:00	\N	\N	\N	\N	<p>Силовая программа.</p>	<p><img src="https://fitronrostov.com/uploads/news/pump-cb64829337.jpg" /></p>\r\n\r\n<ul>\r\n\t<li>силовая программа включает в себя базовые упражнения на основные мышечные группы</li>\r\n</ul>\r\n\r\n<ul>\r\n\t<li>укрепляет сязки и суставы, улучшает мышечную силу и рельеф</li>\r\n</ul>\r\n\r\n<ul>\r\n\t<li>заменяет тренировку в тренажерном зале</li>\r\n</ul>\r\n\r\n<ul>\r\n\t<li>использование штанги с регулируемым весом позволяет индивидуально подобрать нагрузку согласно вашему уровню подготовки</li>\r\n</ul>\r\n\r\n<p>ИЩИ В РАСПИСАНИИ ГРУППОВЫХ ПРОГРАММ!</p>	2018-08-07 08:17:00	2018-08-07 08:17:00
16	t	640	cosmo-sculpt	COSMO SCULPT	2017-02-19 00:00:00	\N	\N	\N	\N	<p>Мини-группа, пн. и пт. в 12:00, пн. и чт. в 19:00.<br />\r\nМастер–тренер Леся Кличева, тел.: 8(928)623-13-89.</p>	<p><img src="https://fitronrostov.com/uploads/news/cosmomini-a3e3651960.jpg" /></p>\r\n\r\n<ul>\r\n\t<li>эффективный тренировочный процесс(тренажерный зал,кардио зона)</li>\r\n\t<li>полный спектр инновационного оборудования</li>\r\n\t<li>индивидуальные предложения и контроль результатов</li>\r\n\t<li>консультативная поддержка</li>\r\n\t<li>программа на снижение веса и коррекции фигуры</li>\r\n</ul>\r\n\r\n<p>Занятия проходят в мини-группе пн. и пт. в 12:00, пн. и чт. в 19:00.</p>\r\n\r\n<p>Занятия проводит мастер–тренер <strong>Леся Кличева</strong>.</p>\r\n\r\n<p>Подробная информация на рецепции клуба и по тел.: <strong>8(928)623-13-89</strong>.</p>	2018-08-07 08:18:13	2018-08-07 08:18:13
17	t	650	core	CORE	2017-02-19 00:00:00	\N	\N	\N	\N	<p>Силовая тренировка.</p>	<p><img src="https://fitronrostov.com/uploads/news/core-6b04c66189.jpg" /></p>\r\n\r\n<p>Силовая тренировка.</p>\r\n\r\n<p>Способствует формированию мышечного корсета, удерживающего позвоночник.</p>\r\n\r\n<p>Укрепляет мышцы брюшного пресса, разгибатели позвоночника, косые и межреберные мышцы</p>\r\n\r\n<p>ИЩИ В РАСПИСАНИИ ГРУППОВЫХ ПРОГРАММ</p>	2018-08-07 08:19:22	2018-08-07 08:19:22
18	t	660	grafik-raboty-kluba	График работы клуба	2017-02-20 00:00:00	\N	\N	\N	\N	<p>23 – 26 февраля      9:00 – 21:00</p>	<p><img src="https://fitronrostov.com/uploads/news/club2-de23d859fd.jpg" /></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>График работы клуба</strong> с 23 по 26 февраля</p>\r\n\r\n<p>с 9:00 до 21:00</p>	2018-08-07 08:20:28	2018-08-07 08:20:28
19	t	670	rezim-raboty-detskoj-igrovoj-komnaty	Режим работы Детской Игровой Комнаты	2017-02-22 00:00:00	\N	\N	\N	\N	<p>23 и 24 февраля    12:00 – 19:00</p>	<p><img src="https://fitronrostov.com/uploads/news/dclubtvshedule-b8b14eab21.jpg" /></p>	2018-08-07 08:21:31	2018-08-07 08:21:31
20	t	680	vnimanie-otkrytye-uroki-13-14-17-19-marta	Внимание! Открытые уроки 13, 14, 17, 19 марта!	2017-03-06 00:00:00	\N	\N	\N	\N	<p>Детские секционные программы. Вход свободный!<br />\r\nЗапись на сайте и рецепции клуба.</p>	<p><img src="https://fitronrostov.com/uploads/news/dkmini-4fdd9fe87f.jpg" /></p>\r\n\r\n<p><strong>Вход свободный!</strong></p>\r\n\r\n<p>Запись на сайте и рецепции клуба.</p>	2018-08-07 08:22:53	2018-08-07 08:22:53
21	t	690	rezim-raboty-kluba-8-marta	Режим работы клуба 8 марта	2017-03-06 00:00:00	\N	\N	\N	\N	<p>с 9:00 - 21:00</p>	<p><img src="https://fitronrostov.com/uploads/news/8-mar-4200c523f5.jpg" /></p>	2018-08-07 08:24:30	2018-08-07 08:24:30
22	t	700	prazdnicnye-trenirovki-8-marta	Праздничные тренировки 8 марта!	2017-03-07 00:00:00	\N	\N	\N	\N	<p>В честь спортивных и прекрасных дам! HARD CORE, FLOWERS FT, DANCE PARTY. Подробности на рецепции клуба.</p>	<p><img src="https://fitronrostov.com/uploads/news/8martren2-1a64ddb385.jpg" /></p>	2018-08-07 08:25:53	2018-08-07 08:25:53
23	t	710	otkryt-nabor-v-gruppu-babysportiki	​Открыт набор в группу BabySportики!	2017-03-14 00:00:00	\N	\N	\N	\N	<p>Малыши  1 -  3 года. Занятия вместе с мамой. Запись по телефону : 8 (988) 949-06-87, Ирина.</p>	<p><strong><img src="https://fitronrostov.com/uploads/news/baby-workout-1146da9a05.jpg" /></strong></p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Открыт набор в группу BabySportики!</strong></p>\r\n\r\n<p><strong>Возрастная группа:</strong> 1-3 года.</p>\r\n\r\n<p>Программа для малышей вместе с мамой.</p>\r\n\r\n<p>Занятия проходят в формате мини группы<em> (до 5 человек)</em>.</p>\r\n\r\n<p><strong>Описание: </strong>Развитие основных физических качеств, мелкой моторики, творчества и воображения, речи, профилактика плоскостопия, танцы.</p>\r\n\r\n<p><strong>Запись по телефону:</strong> 8 (988) 949-06-87</p>\r\n\r\n<p><strong>Ирина: </strong>супервайзер детского клуба, куратор направления.</p>	2018-08-07 08:26:57	2018-08-07 08:26:57
24	t	720	zazigatelnaa-vecerinka-zumba-fitness	Зажигательная вечеринка ZUMBA FITNESS!	2017-03-20 00:00:00	\N	\N	\N	\N	<p>Каждую пятницу в 18:00. Программу ведет лицензированный инструктор ZUMBA FITNESS – Шошина Ирина.</p>	<p><img src="https://fitronrostov.com/uploads/news/zumba17mini-7287635d5b.jpg" /></p>\r\n\r\n<p>Взрывная смесь фитнеса, аэробики и танцев - не возможно устоять! <br />\r\nZUMBA FITNESS для любого уровня подготовки.</p>\r\n\r\n<p>Возраст от 12 лет.</p>\r\n\r\n<p><br />\r\n<strong>Программу ведет:</strong> лицензированный инструктор ZUMBA FITNESS – Шошина Ирина.</p>	2018-08-07 08:27:53	2018-08-07 08:27:53
25	t	730	real-kickboxing-voskresene-1500	REAL KICKBOXING, воскресенье – 15:00	2017-03-22 00:00:00	\N	\N	\N	\N	<p>Формат мини–группы. Узнавайте на рецепции клуба и по т.: 8 (918) 512-45-54</p>	<p><strong><img src="https://fitronrostov.com/uploads/news/kbmini1-57f992fd1c.jpg" /></strong></p>\r\n\r\n<p><strong>Занятия проводит Рузанова Юлия</strong>,</p>\r\n\r\n<p>мастер спорта по кикбоксингу,</p>\r\n\r\n<p>победитель первенства мира в Италии.</p>\r\n\r\n<p>Узнавайте на рецепции клуба</p>\r\n\r\n<p>и по т.: <strong>8 (918) 512-45-54</strong></p>	2018-08-07 08:29:00	2018-08-07 08:29:00
26	t	740	spec-programmy-po-plavaniu-dla-detej-ot-5-do-6-let	Спец. программы по плаванию для детей от 5 до 6 лет.	2017-03-22 00:00:00	\N	\N	\N	\N	<p>Узнавайте на рецепции клуба и по т.: <a class="comagic_phone2" href="tel:+78633018000">8(863) 301-8000</a></p>	<p><img src="https://fitronrostov.com/uploads/news/plavaniemini-6f8c957300.jpg" /></p>	2018-08-07 08:30:09	2018-08-07 08:30:09
27	t	750	obnovlenie-programm-5-aprela	Обновление программ 5 апреля!	2017-03-22 00:00:00	\N	\N	\N	\N	<p>18:00 Cosmo Pump<br />\r\n19:00 Cosmo Cycle<br />\r\n20:00 Cosmo Balance</p>	<p><img src="https://fitronrostov.com/uploads/news/cosmo5apr-d5996667f6.jpg" /></p>	2018-08-07 08:31:30	2018-08-07 08:31:30
28	t	760	yoga-23-subbota-0900	YOGA 23, суббота – 09:00	2017-03-23 00:00:00	\N	\N	\N	\N	<p>Формат мини–группы. Узнавайте на рецепции клуба и по т.: 8 (908) 182-90-56</p>	<p><img src="https://fitronrostov.com/uploads/news/yoga-23-mini-4e44639847.jpg" /></p>	2018-08-07 08:32:36	2018-08-07 08:32:36
30	t	780	otkrytie-fitron-orbita-press-reliz	Открытие FITRON Орбита. Пресс-релиз	2017-07-30 00:00:00	\N	\N	\N	\N	<p>30 июля, открылся второй космический фитнес-клуб сети FITRON - Орбита.</p>	<p>30 июля, открылся второй космический фитнес-клуб сети FITRON - Орбита. Адрес клуба: пр. Королёва 10/4, торговый центр “Орбита”, 4 этаж. Площадь клуба составляет 4000 кв. м., из них - 1250 кв.м тренажерный зал с бойцовской зоной, зоной для функционального тренинга. Кардиозона Fitron Орбита представлена 20 беговыми дорожками, 8 эллиптическими тренажерами, 2 гребными тренажерами, 2 горизонтальными велотренажерами, 2 вертикальными велотренажерами, 2 адаптивными тренажерами. Групповые занятия будут проходить в 2-х просторных студиях. В клубе будет работать детский клуб с собственными фитнес-программами и детской студией.</p>	2018-08-07 08:34:52	2018-08-07 08:34:52
31	t	790	mobilnoe-prilozenie-vremenno-ne-rabotaet	Мобильное приложение временно не работает.	2018-06-07 00:00:00	\N	\N	\N	\N	<p>Мобильное приложение  временно не работает.</p>	<p>Уважаемые клиенты, у нас временно не работает мобильное приложение. Записаться на занятия можно на рецепции или по телефонам:</p>\r\n\r\n<p>Орбита: 301-2000</p>\r\n\r\n<p>Миллениум: 301-8000</p>\r\n\r\n<p>Газетный: 280-8770</p>\r\n\r\n<p>Приносим извинения за неудобства.</p>	2018-08-07 08:35:55	2018-08-07 08:35:55
32	t	800	prezentacia-novoj-outdoor-plosadki	Презентация новой outdoor-площадки	2018-06-15 00:00:00	\N	\N	\N	\N	<p>Долгожданная презентация новой outdoor-площадки</p>	<p>7 июня состоялась долгожданная презентация новой outdoor-площадки нашей компании!</p>\r\n\r\n<p><iframe frameborder="0" height="281" src="http://www.youtube.com/embed/oy8dMk6nqtM" width="500"></iframe></p>\r\n\r\n<p>Тренеры World Class, FITRON и ФизКульт продемонстрировали возможности нового многофункционального спортивного комплекса.</p>	2018-08-07 08:38:01	2018-08-07 08:38:01
34	t	820	4-avgusta-v-fitron-gazetnyj-prosli-sorevnovania-po-nastolnomu-tennisu	4 августа в Fitron Газетный прошли соревнования по настольному теннису!	2018-08-06 00:00:00	\N	\N	\N	\N	\N	<p><img src="https://fitron.club/uploads/news/1280h720congratulationfitron-f6d78dd3ce.jpg" /></p>	2018-08-07 08:39:50	2018-08-07 08:39:50
29	t	770	otmena-detskih-programm-na-vode	Отмена детских программ на воде!	2017-05-16 00:00:00	\N	\N	\N	\N	<p>с 15 по 21 мая</p>	<p><img src="https://fitronrostov.com/uploads/news/1521mini-da692c0142.jpg" /></p>	2018-08-07 08:33:41	2018-08-07 10:56:39
33	t	810	bassejn-fitron-orbita-otkryt	Бассейн Fitron Орбита открыт	2018-07-11 00:00:00	\N	\N	\N	\N	<p>Открытие басейна</p>	<p><img src="https://fitron.club/uploads/news/tvvkfbfitronpool-opening1076576-6f90c585c3.jpg" />Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. Вода из бассейна вытесняется в специальные окна в бортиках, очищается в системе механической очистки и подогревается. Для дезинфекции мы используем обеззараживающие агенты и ультрафиолетовое излучение. Очистка воздуха осуществляется с помощью системы вентиляции Breezart Pool Pro. Она закачивает воздух с улицы, нагревает или охлаждает его, удаляет загрязнения и лишнюю влагу. А ещё мы построили хамам в зоне бассейна, чтобы вы могли расслабиться после тренировок.</p>	2018-08-07 08:38:55	2019-01-29 17:04:59
\.


--
-- Data for Name: pages; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.pages (id, code, title, name, menu, sort, created_at, updated_at, trek, active) FROM stdin;
8	cards	Клубные карты FITRON Ростов-на-Дону	Клубные карты FITRON Ростов-на-Дону	Клубные карты	300	2018-07-26 10:13:13	2018-08-03 07:06:03	\N	t
9	fitron-life	Всё о фитнес-клубе Фитрон - события, новости и акции	Всё о фитнес-клубе Фитрон - события, новости и акции	События	400	2018-07-26 10:14:30	2018-09-21 13:10:22	\N	f
12	uncos	Новости	Новости	Новости	500	2018-08-03 07:07:16	2018-11-13 14:11:35	\N	f
14	gallery	Галерея Fitron	Галерея	Галерея	500	2018-11-01 13:10:59	2018-11-13 14:11:49	\N	f
10	blog	Блог	Блог	Блог	600	2018-07-26 10:15:09	2018-11-13 14:12:52	http://space.fitron.club/blog	f
15	schedule	Раписание	Расписание	Расписание	100	2018-11-13 14:14:42	2018-11-13 14:14:42	\N	t
1	fitnes-uslugi	Фитнес-услуги	Фитнес-услуги - купить абонемент в тренажерный зал по низким ценам в Ростове-на-Дону	Фитнес	150	2018-07-09 16:05:59	2018-11-13 14:15:01	\N	t
7	clubs	Клубы FITRON	Клубы FITRON	Клубы	400	2018-07-26 10:12:01	2018-11-13 14:17:16	\N	f
18	special	Акции	Акции	Акции	500	2018-11-16 11:49:21	2018-11-16 17:47:41	\N	f
16	trenery	Тренеры	Тренеры	Тренеры	200	2018-11-13 14:16:50	2018-11-19 12:03:21	\N	t
17	contacts	Контакты	Контакты	Контакты	500	2018-11-13 14:18:53	2018-11-19 16:58:22	\N	t
6	join	Вступить в FITRON	Вступить в FITRON	Вступить в FITRON	5000	2018-07-26 10:05:15	2018-11-30 12:15:28	\N	f
21	cabinet	Личный кабинет	Личный кабинет	Личный кабинет	500	2018-12-24 10:53:19	2018-12-24 10:53:19	\N	t
\.


--
-- Data for Name: password_resets; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: roles; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.roles (id, title, name, active, created_at, updated_at) FROM stdin;
2	admin	Администраторы	t	\N	\N
3	content	Контент-менеджер	t	\N	\N
\.


--
-- Data for Name: roles_users; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.roles_users (id, user_id, role_id) FROM stdin;
8	1	2
19	3	2
20	3	3
25	6	2
26	6	3
27	2	3
\.


--
-- Data for Name: rooms; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.rooms (id, clubs_id, active, name, created_at, updated_at, id_1c) FROM stdin;
8	2	t	Бассейн	2018-08-16 09:35:39	2018-08-16 09:35:39	\N
9	2	t	Cycle Zone	2018-08-16 09:35:50	2018-08-16 09:35:50	\N
10	2	t	Group Hall	2018-08-16 09:35:59	2018-08-16 09:35:59	\N
11	2	t	Group Zone	2018-08-16 09:36:09	2018-08-16 09:36:09	\N
12	2	t	Fight Zone	2018-08-16 09:36:26	2018-08-16 09:36:26	\N
13	2	t	Зона ТЗ	2018-08-16 09:36:35	2018-08-16 09:36:35	\N
14	2	t	Зона ДИ	2018-08-16 09:36:44	2018-08-16 09:36:44	\N
16	2	t	Студия ГП	2018-08-16 09:37:02	2018-08-16 09:37:02	\N
17	2	t	Outdoor	2018-08-16 09:37:10	2018-08-16 09:37:10	\N
18	2	t	Group Hall 2	2018-08-16 09:37:19	2018-08-16 09:37:19	\N
19	5	t	Group Hall	2018-08-16 09:38:25	2018-08-16 09:38:25	\N
20	5	t	Cardio Zone	2018-08-16 09:38:35	2018-08-16 09:38:35	\N
21	5	t	Functional Zone	2018-08-16 09:38:43	2018-08-16 09:38:43	\N
22	5	t	Fight Zone	2018-08-16 09:38:52	2018-08-16 09:38:52	\N
23	5	t	Cycle Zone	2018-08-16 09:39:02	2018-08-16 09:39:02	\N
24	5	t	Kids Club	2018-08-16 09:39:10	2018-08-16 09:39:10	\N
25	5	t	Kids Hall	2018-08-16 09:39:19	2018-08-16 09:39:19	\N
26	5	t	Gym Zone	2018-08-16 09:39:27	2018-08-16 09:39:27	\N
27	5	t	Outdoor	2018-08-16 09:39:35	2018-08-16 09:39:35	\N
28	5	t	Group Hall 2	2018-08-16 09:39:43	2018-08-16 09:39:43	\N
29	5	t	Бассейн	2018-08-16 09:39:51	2018-08-16 09:39:51	\N
30	8	t	Group Hall	2018-08-16 09:40:40	2018-08-16 09:40:40	\N
31	8	t	Cardio Zone	2018-08-16 09:40:49	2018-08-16 09:40:49	\N
32	8	t	Functional Zone	2018-08-16 09:40:57	2018-08-16 09:40:57	\N
33	8	t	Fight Zone	2018-08-16 09:41:06	2018-08-16 09:41:06	\N
34	8	t	Cycle Zone	2018-08-16 09:41:14	2018-08-16 09:41:14	\N
35	8	t	Gym Zone	2018-08-16 09:41:21	2018-08-16 09:41:21	\N
36	8	t	Outdoor	2018-08-16 09:41:30	2018-08-16 09:41:30	\N
37	8	t	СФТ	2018-08-16 09:41:38	2018-08-16 09:41:38	\N
38	8	t	ГП 1	2018-08-16 09:41:47	2018-08-16 09:41:47	\N
39	8	t	КЗ	2018-08-16 09:41:55	2018-08-16 09:41:55	\N
40	8	t	ЗБИ	2018-08-16 09:42:03	2018-08-16 09:42:03	\N
41	11	t	Group Hall 2	2019-01-28 01:24:41	2019-01-28 01:24:41	\N
42	11	t	Group Hall 1	2019-01-28 01:24:56	2019-01-28 01:24:56	\N
43	11	t	Cycle Zone	2019-01-28 01:25:33	2019-01-28 01:25:33	\N
44	11	t	Бассейн	2019-01-28 01:25:42	2019-01-28 01:25:42	\N
45	11	t	Fight Zone	2019-01-28 01:25:51	2019-01-28 01:25:51	\N
46	11	t	Gym Zone	2019-01-28 01:26:59	2019-01-28 01:26:59	\N
47	11	t	Cardio Zone	2019-01-28 01:27:08	2019-01-28 01:27:08	\N
15	2	t	Kids club	2018-08-16 09:36:54	2018-08-16 09:36:54	\N
\.


--
-- Data for Name: schedule_years; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.schedule_years (id, years_id, schedules_id, created_at, updated_at) FROM stdin;
3	3	12	2018-09-10 06:27:25	2018-09-10 06:27:25
4	4	12	2018-09-10 06:27:25	2018-09-10 06:27:25
5	5	12	2018-09-10 06:27:25	2018-09-10 06:27:25
6	2	13	2018-09-10 09:47:04	2018-09-10 09:47:04
10	3	14	2018-09-10 15:02:51	2018-09-10 15:02:51
11	4	14	2018-09-10 15:02:51	2018-09-10 15:02:51
12	5	14	2018-09-10 15:02:51	2018-09-10 15:02:51
13	6	15	2018-09-11 06:38:24	2018-09-11 06:38:24
14	3	16	2018-09-11 07:29:57	2018-09-11 07:29:57
15	6	17	2018-09-11 07:51:42	2018-09-11 07:51:42
16	2	18	2018-09-11 07:55:58	2018-09-11 07:55:58
17	2	19	2018-09-11 08:00:41	2018-09-11 08:00:41
18	2	20	2018-09-11 08:04:02	2018-09-11 08:04:02
19	6	21	2018-09-11 08:04:47	2018-09-11 08:04:47
20	2	22	2018-09-11 08:05:34	2018-09-11 08:05:34
21	3	23	2018-09-11 08:08:47	2018-09-11 08:08:47
22	6	24	2018-09-11 08:10:40	2018-09-11 08:10:40
23	2	25	2018-09-11 08:12:22	2018-09-11 08:12:22
24	2	26	2018-09-11 08:13:46	2018-09-11 08:13:46
25	3	27	2018-09-11 08:15:22	2018-09-11 08:15:22
26	6	28	2018-09-11 08:18:40	2018-09-11 08:18:40
27	6	29	2018-09-11 08:21:39	2018-09-11 08:21:39
28	6	30	2018-09-11 08:28:54	2018-09-11 08:28:54
29	6	31	2018-09-11 08:29:57	2018-09-11 08:29:57
30	3	32	2018-09-11 08:31:06	2018-09-11 08:31:06
31	6	33	2018-09-11 08:32:05	2018-09-11 08:32:05
32	2	34	2018-09-11 08:32:53	2018-09-11 08:32:53
33	6	35	2018-09-11 08:33:47	2018-09-11 08:33:47
34	3	36	2018-09-11 08:35:18	2018-09-11 08:35:18
36	6	38	2018-09-11 08:39:57	2018-09-11 08:39:57
37	6	39	2018-09-11 08:40:56	2018-09-11 08:40:56
38	6	40	2018-09-11 08:42:38	2018-09-11 08:42:38
39	6	41	2018-09-11 08:43:22	2018-09-11 08:43:22
41	6	43	2018-09-11 08:50:07	2018-09-11 08:50:07
42	3	44	2018-09-11 08:50:51	2018-09-11 08:50:51
43	6	45	2018-09-11 08:51:50	2018-09-11 08:51:50
44	4	46	2018-09-11 08:56:20	2018-09-11 08:56:20
45	5	46	2018-09-11 08:56:20	2018-09-11 08:56:20
46	6	47	2018-09-11 09:36:43	2018-09-11 09:36:43
48	6	49	2018-09-11 09:50:05	2018-09-11 09:50:05
49	6	50	2018-09-11 12:54:15	2018-09-11 12:54:15
50	3	51	2018-09-11 12:55:05	2018-09-11 12:55:05
51	6	52	2018-09-11 12:55:48	2018-09-11 12:55:48
53	3	54	2018-09-11 12:57:21	2018-09-11 12:57:21
54	6	55	2018-09-11 12:58:00	2018-09-11 12:58:00
55	6	56	2018-09-11 12:58:33	2018-09-11 12:58:33
56	6	57	2018-09-11 12:59:36	2018-09-11 12:59:36
57	6	58	2018-09-11 13:00:11	2018-09-11 13:00:11
58	6	59	2018-09-11 13:00:50	2018-09-11 13:00:50
60	3	61	2018-09-11 13:02:09	2018-09-11 13:02:09
63	6	64	2018-09-11 13:05:02	2018-09-11 13:05:02
64	4	65	2018-09-11 13:06:14	2018-09-11 13:06:14
65	5	65	2018-09-11 13:06:14	2018-09-11 13:06:14
66	3	66	2018-09-11 13:07:00	2018-09-11 13:07:00
68	6	68	2018-09-11 13:08:30	2018-09-11 13:08:30
69	6	69	2018-09-11 13:09:11	2018-09-11 13:09:11
70	6	70	2018-09-11 13:09:48	2018-09-11 13:09:48
71	6	71	2018-09-11 13:10:52	2018-09-11 13:10:52
72	6	72	2018-09-11 13:11:32	2018-09-11 13:11:32
75	6	75	2018-09-11 13:13:41	2018-09-11 13:13:41
76	6	76	2018-09-11 13:14:27	2018-09-11 13:14:27
77	6	77	2018-09-11 13:15:25	2018-09-11 13:15:25
78	3	78	2018-09-11 13:16:03	2018-09-11 13:16:03
79	6	79	2018-09-11 13:16:56	2018-09-11 13:16:56
81	4	81	2018-09-11 13:18:42	2018-09-11 13:18:42
82	5	81	2018-09-11 13:18:42	2018-09-11 13:18:42
83	2	82	2018-09-11 15:29:54	2018-09-11 15:29:54
84	4	83	2018-09-11 15:30:33	2018-09-11 15:30:33
91	6	63	2018-09-18 11:48:25	2018-09-18 11:48:25
92	3	94	2018-10-09 17:09:45	2018-10-09 17:09:45
93	3	95	2018-10-09 17:10:37	2018-10-09 17:10:37
94	4	95	2018-10-09 17:10:37	2018-10-09 17:10:37
95	6	96	2019-01-26 17:37:28	2019-01-26 17:37:28
96	6	97	2019-01-26 17:43:03	2019-01-26 17:43:03
97	6	98	2019-01-26 17:47:29	2019-01-26 17:47:29
98	6	99	2019-01-26 17:49:27	2019-01-26 17:49:27
99	3	100	2019-01-26 17:50:33	2019-01-26 17:50:33
100	6	101	2019-01-26 17:51:26	2019-01-26 17:51:26
101	6	102	2019-01-26 17:52:24	2019-01-26 17:52:24
102	6	103	2019-01-26 17:53:20	2019-01-26 17:53:20
103	6	104	2019-01-26 17:54:00	2019-01-26 17:54:00
104	6	105	2019-01-26 17:55:12	2019-01-26 17:55:12
105	4	106	2019-01-26 17:56:43	2019-01-26 17:56:43
106	5	106	2019-01-26 17:56:43	2019-01-26 17:56:43
109	2	108	2019-01-26 17:58:53	2019-01-26 17:58:53
110	2	107	2019-01-26 17:59:00	2019-01-26 17:59:00
111	6	109	2019-01-26 17:59:48	2019-01-26 17:59:48
113	6	110	2019-01-26 18:00:38	2019-01-26 18:00:38
114	2	111	2019-01-26 18:02:56	2019-01-26 18:02:56
115	6	112	2019-01-26 18:04:39	2019-01-26 18:04:39
116	4	113	2019-01-26 18:05:37	2019-01-26 18:05:37
117	6	114	2019-01-26 18:07:15	2019-01-26 18:07:15
118	3	115	2019-01-26 18:08:09	2019-01-26 18:08:09
119	2	116	2019-01-26 18:08:47	2019-01-26 18:08:47
120	3	116	2019-01-26 18:08:47	2019-01-26 18:08:47
121	6	117	2019-01-26 18:09:50	2019-01-26 18:09:50
122	6	118	2019-01-26 18:10:20	2019-01-26 18:10:20
123	6	119	2019-01-26 18:10:42	2019-01-26 18:10:42
124	6	120	2019-01-26 18:14:24	2019-01-26 18:14:24
125	6	121	2019-01-26 18:15:03	2019-01-26 18:15:03
126	6	122	2019-01-26 18:16:43	2019-01-26 18:16:43
127	6	123	2019-01-26 18:19:44	2019-01-26 18:19:44
128	6	124	2019-01-26 18:24:30	2019-01-26 18:24:30
129	4	125	2019-01-26 18:25:40	2019-01-26 18:25:40
130	5	125	2019-01-26 18:25:40	2019-01-26 18:25:40
131	6	126	2019-01-26 18:26:18	2019-01-26 18:26:18
132	2	127	2019-01-26 18:27:01	2019-01-26 18:27:01
133	3	127	2019-01-26 18:27:01	2019-01-26 18:27:01
134	6	128	2019-01-26 18:27:59	2019-01-26 18:27:59
135	6	129	2019-01-26 18:28:39	2019-01-26 18:28:39
136	6	130	2019-01-26 18:33:40	2019-01-26 18:33:40
138	4	132	2019-01-26 18:34:41	2019-01-26 18:34:41
139	5	132	2019-01-26 18:34:41	2019-01-26 18:34:41
140	6	131	2019-01-26 18:34:46	2019-01-26 18:34:46
141	3	133	2019-01-26 18:35:39	2019-01-26 18:35:39
142	6	134	2019-01-26 18:36:11	2019-01-26 18:36:11
143	6	135	2019-01-26 18:36:46	2019-01-26 18:36:46
144	4	136	2019-01-26 18:37:40	2019-01-26 18:37:40
145	5	136	2019-01-26 18:37:40	2019-01-26 18:37:40
146	3	137	2019-01-27 12:33:38	2019-01-27 12:33:38
147	6	138	2019-01-27 12:34:18	2019-01-27 12:34:18
150	6	140	2019-01-27 12:38:17	2019-01-27 12:38:17
151	2	139	2019-01-27 12:38:20	2019-01-27 12:38:20
152	3	141	2019-01-27 12:39:51	2019-01-27 12:39:51
154	6	143	2019-01-27 15:18:12	2019-01-27 15:18:12
155	6	144	2019-01-27 15:18:57	2019-01-27 15:18:57
156	6	145	2019-01-27 15:19:44	2019-01-27 15:19:44
157	6	142	2019-01-27 15:19:56	2019-01-27 15:19:56
158	6	146	2019-01-27 15:49:51	2019-01-27 15:49:51
159	6	147	2019-01-27 15:50:28	2019-01-27 15:50:28
160	6	148	2019-01-27 15:51:49	2019-01-27 15:51:49
161	5	149	2019-01-27 15:52:24	2019-01-27 15:52:24
162	6	150	2019-01-27 15:53:00	2019-01-27 15:53:00
163	6	151	2019-01-27 15:54:48	2019-01-27 15:54:48
164	6	152	2019-01-27 15:55:36	2019-01-27 15:55:36
165	3	153	2019-01-27 15:56:08	2019-01-27 15:56:08
166	6	154	2019-01-27 15:56:44	2019-01-27 15:56:44
167	3	155	2019-01-27 16:01:33	2019-01-27 16:01:33
168	4	155	2019-01-27 16:01:33	2019-01-27 16:01:33
169	5	155	2019-01-27 16:01:33	2019-01-27 16:01:33
170	5	156	2019-01-27 16:04:28	2019-01-27 16:04:28
171	2	157	2019-01-27 16:09:04	2019-01-27 16:09:04
172	6	158	2019-01-27 16:09:31	2019-01-27 16:09:31
173	6	159	2019-01-27 16:10:05	2019-01-27 16:10:05
174	3	160	2019-01-27 16:10:53	2019-01-27 16:10:53
175	2	161	2019-01-27 16:11:44	2019-01-27 16:11:44
176	6	162	2019-01-27 16:12:28	2019-01-27 16:12:28
177	4	163	2019-01-27 16:16:49	2019-01-27 16:16:49
178	5	163	2019-01-27 16:16:49	2019-01-27 16:16:49
179	4	164	2019-01-27 16:17:40	2019-01-27 16:17:40
180	6	165	2019-01-27 16:19:09	2019-01-27 16:19:09
181	2	166	2019-01-27 16:20:11	2019-01-27 16:20:11
182	3	166	2019-01-27 16:20:11	2019-01-27 16:20:11
183	6	167	2019-01-27 16:20:48	2019-01-27 16:20:48
184	6	168	2019-01-27 16:21:57	2019-01-27 16:21:57
185	6	169	2019-01-27 16:24:48	2019-01-27 16:24:48
186	6	170	2019-01-27 16:27:23	2019-01-27 16:27:23
187	6	171	2019-01-27 16:28:14	2019-01-27 16:28:14
188	6	172	2019-01-27 16:28:49	2019-01-27 16:28:49
189	4	173	2019-01-27 16:29:15	2019-01-27 16:29:15
190	5	173	2019-01-27 16:29:15	2019-01-27 16:29:15
191	6	174	2019-01-27 16:29:58	2019-01-27 16:29:58
192	6	175	2019-01-27 16:59:11	2019-01-27 16:59:11
193	6	176	2019-01-27 16:59:39	2019-01-27 16:59:39
194	6	177	2019-01-27 17:00:21	2019-01-27 17:00:21
195	6	178	2019-01-27 17:00:58	2019-01-27 17:00:58
196	4	179	2019-01-27 17:01:41	2019-01-27 17:01:41
197	5	179	2019-01-27 17:01:41	2019-01-27 17:01:41
198	3	180	2019-01-27 17:02:09	2019-01-27 17:02:09
199	6	181	2019-01-27 17:03:01	2019-01-27 17:03:01
200	6	182	2019-01-27 17:03:33	2019-01-27 17:03:33
201	4	183	2019-01-27 17:04:33	2019-01-27 17:04:33
202	5	183	2019-01-27 17:04:33	2019-01-27 17:04:33
203	6	184	2019-01-27 17:07:49	2019-01-27 17:07:49
204	3	185	2019-01-27 17:09:07	2019-01-27 17:09:07
205	2	186	2019-01-27 17:09:46	2019-01-27 17:09:46
206	6	187	2019-01-27 17:10:32	2019-01-27 17:10:32
207	3	188	2019-01-27 17:11:21	2019-01-27 17:11:21
208	2	189	2019-01-27 17:12:06	2019-01-27 17:12:06
209	6	190	2019-01-27 17:12:37	2019-01-27 17:12:37
210	6	191	2019-01-27 17:13:25	2019-01-27 17:13:25
211	6	192	2019-01-27 17:14:03	2019-01-27 17:14:03
212	6	193	2019-01-27 17:14:45	2019-01-27 17:14:45
213	6	194	2019-01-27 17:28:26	2019-01-27 17:28:26
214	6	195	2019-01-27 17:31:57	2019-01-27 17:31:57
215	3	196	2019-01-27 17:39:44	2019-01-27 17:39:44
216	6	197	2019-01-27 17:40:16	2019-01-27 17:40:16
217	6	198	2019-01-27 17:40:48	2019-01-27 17:40:48
218	2	199	2019-01-27 17:41:16	2019-01-27 17:41:16
219	3	199	2019-01-27 17:41:16	2019-01-27 17:41:16
220	6	200	2019-01-27 17:45:19	2019-01-27 17:45:19
221	6	201	2019-01-27 17:45:50	2019-01-27 17:45:50
222	3	202	2019-01-27 17:46:22	2019-01-27 17:46:22
223	6	203	2019-01-27 17:46:53	2019-01-27 17:46:53
224	4	204	2019-01-27 17:47:31	2019-01-27 17:47:31
225	5	204	2019-01-27 17:47:31	2019-01-27 17:47:31
226	6	205	2019-01-27 17:48:05	2019-01-27 17:48:05
227	5	206	2019-01-27 17:48:50	2019-01-27 17:48:50
228	3	207	2019-01-27 17:49:35	2019-01-27 17:49:35
229	6	208	2019-01-27 17:50:12	2019-01-27 17:50:12
230	2	209	2019-01-27 17:50:57	2019-01-27 17:50:57
231	2	210	2019-01-27 18:00:21	2019-01-27 18:00:21
232	3	210	2019-01-27 18:00:21	2019-01-27 18:00:21
233	2	211	2019-01-27 18:01:00	2019-01-27 18:01:00
234	4	212	2019-01-27 18:01:43	2019-01-27 18:01:43
235	6	213	2019-01-27 18:02:21	2019-01-27 18:02:21
236	6	214	2019-01-27 18:03:11	2019-01-27 18:03:11
237	6	215	2019-01-27 18:04:02	2019-01-27 18:04:02
238	3	216	2019-01-27 18:04:43	2019-01-27 18:04:43
239	6	217	2019-01-27 18:05:17	2019-01-27 18:05:17
240	6	218	2019-01-27 18:05:52	2019-01-27 18:05:52
241	3	219	2019-01-27 18:06:27	2019-01-27 18:06:27
242	4	219	2019-01-27 18:06:27	2019-01-27 18:06:27
243	6	220	2019-01-27 18:11:10	2019-01-27 18:11:10
244	3	221	2019-01-27 18:11:42	2019-01-27 18:11:42
245	6	222	2019-01-27 18:12:14	2019-01-27 18:12:14
246	2	223	2019-01-27 18:13:25	2019-01-27 18:13:25
247	3	224	2019-01-27 18:13:56	2019-01-27 18:13:56
248	4	224	2019-01-27 18:13:56	2019-01-27 18:13:56
249	6	225	2019-01-27 18:14:44	2019-01-27 18:14:44
250	6	226	2019-01-27 18:15:38	2019-01-27 18:15:38
251	3	227	2019-01-27 18:16:10	2019-01-27 18:16:10
252	6	228	2019-01-27 18:16:48	2019-01-27 18:16:48
253	3	229	2019-01-27 18:17:24	2019-01-27 18:17:24
254	5	230	2019-01-27 18:18:07	2019-01-27 18:18:07
255	3	231	2019-01-27 18:19:36	2019-01-27 18:19:36
257	6	232	2019-01-27 18:20:54	2019-01-27 18:20:54
258	4	233	2019-01-27 18:21:32	2019-01-27 18:21:32
259	5	233	2019-01-27 18:21:32	2019-01-27 18:21:32
260	6	234	2019-01-27 18:22:07	2019-01-27 18:22:07
261	4	235	2019-01-27 18:23:04	2019-01-27 18:23:04
262	5	235	2019-01-27 18:23:04	2019-01-27 18:23:04
263	6	236	2019-01-27 18:23:43	2019-01-27 18:23:43
264	2	237	2019-01-27 18:24:26	2019-01-27 18:24:26
265	6	238	2019-01-27 18:25:00	2019-01-27 18:25:00
266	2	239	2019-01-27 18:26:17	2019-01-27 18:26:17
267	5	240	2019-01-27 18:27:04	2019-01-27 18:27:04
268	6	240	2019-01-27 18:27:04	2019-01-27 18:27:04
269	6	241	2019-01-27 18:27:40	2019-01-27 18:27:40
270	2	242	2019-01-27 18:28:17	2019-01-27 18:28:17
271	3	243	2019-01-27 18:28:50	2019-01-27 18:28:50
272	2	244	2019-01-27 18:29:54	2019-01-27 18:29:54
273	3	244	2019-01-27 18:29:54	2019-01-27 18:29:54
274	4	245	2019-01-27 18:30:33	2019-01-27 18:30:33
275	5	246	2019-01-27 18:31:08	2019-01-27 18:31:08
276	6	247	2019-01-27 18:31:59	2019-01-27 18:31:59
277	4	248	2019-01-27 18:32:39	2019-01-27 18:32:39
278	5	248	2019-01-27 18:32:39	2019-01-27 18:32:39
279	6	249	2019-01-27 18:33:43	2019-01-27 18:33:43
280	6	250	2019-01-27 18:34:19	2019-01-27 18:34:19
281	3	251	2019-01-27 18:34:52	2019-01-27 18:34:52
282	4	251	2019-01-27 18:34:52	2019-01-27 18:34:52
283	5	251	2019-01-27 18:34:52	2019-01-27 18:34:52
284	6	252	2019-01-27 18:38:24	2019-01-27 18:38:24
285	6	253	2019-01-27 18:38:56	2019-01-27 18:38:56
286	6	254	2019-01-27 18:43:12	2019-01-27 18:43:12
287	6	255	2019-01-27 18:50:29	2019-01-27 18:50:29
288	6	256	2019-01-27 18:51:03	2019-01-27 18:51:03
289	6	257	2019-01-27 18:52:00	2019-01-27 18:52:00
290	6	258	2019-01-27 18:52:28	2019-01-27 18:52:28
291	6	259	2019-01-27 18:53:01	2019-01-27 18:53:01
292	6	260	2019-01-27 18:53:39	2019-01-27 18:53:39
293	6	261	2019-01-27 18:54:09	2019-01-27 18:54:09
294	6	262	2019-01-27 18:54:33	2019-01-27 18:54:33
295	6	263	2019-01-27 18:55:38	2019-01-27 18:55:38
296	6	264	2019-01-27 18:56:09	2019-01-27 18:56:09
297	6	265	2019-01-27 19:01:46	2019-01-27 19:01:46
298	6	266	2019-01-27 19:05:52	2019-01-27 19:05:52
299	6	267	2019-01-27 19:06:25	2019-01-27 19:06:25
300	6	268	2019-01-27 19:06:51	2019-01-27 19:06:51
301	6	269	2019-01-27 19:07:23	2019-01-27 19:07:23
302	6	270	2019-01-27 19:07:53	2019-01-27 19:07:53
303	6	271	2019-01-27 19:08:21	2019-01-27 19:08:21
304	6	272	2019-01-27 19:08:47	2019-01-27 19:08:47
305	6	273	2019-01-27 19:09:12	2019-01-27 19:09:12
306	6	274	2019-01-27 19:09:44	2019-01-27 19:09:44
307	6	275	2019-01-27 19:10:23	2019-01-27 19:10:23
308	6	276	2019-01-27 19:10:53	2019-01-27 19:10:53
309	6	277	2019-01-27 19:41:42	2019-01-27 19:41:42
310	6	278	2019-01-27 19:42:08	2019-01-27 19:42:08
311	6	279	2019-01-27 19:42:46	2019-01-27 19:42:46
312	6	280	2019-01-27 19:43:07	2019-01-27 19:43:07
313	6	281	2019-01-27 19:43:38	2019-01-27 19:43:38
314	6	282	2019-01-27 19:44:11	2019-01-27 19:44:11
315	6	283	2019-01-27 19:44:59	2019-01-27 19:44:59
316	6	284	2019-01-27 19:47:12	2019-01-27 19:47:12
317	6	285	2019-01-27 19:47:52	2019-01-27 19:47:52
318	6	286	2019-01-27 19:48:51	2019-01-27 19:48:51
319	6	287	2019-01-27 19:49:47	2019-01-27 19:49:47
320	6	288	2019-01-27 19:50:32	2019-01-27 19:50:32
321	6	289	2019-01-27 19:51:07	2019-01-27 19:51:07
322	6	290	2019-01-27 20:25:36	2019-01-27 20:25:36
323	6	291	2019-01-27 20:26:01	2019-01-27 20:26:01
324	6	292	2019-01-27 20:30:56	2019-01-27 20:30:56
325	6	293	2019-01-27 20:31:27	2019-01-27 20:31:27
326	6	294	2019-01-27 20:31:50	2019-01-27 20:31:50
327	6	295	2019-01-27 20:32:17	2019-01-27 20:32:17
329	6	297	2019-01-27 20:35:36	2019-01-27 20:35:36
330	6	296	2019-01-27 20:35:39	2019-01-27 20:35:39
331	6	298	2019-01-27 20:36:09	2019-01-27 20:36:09
332	6	299	2019-01-27 20:36:45	2019-01-27 20:36:45
333	6	300	2019-01-27 20:37:10	2019-01-27 20:37:10
334	6	301	2019-01-27 20:37:33	2019-01-27 20:37:33
336	6	303	2019-01-27 20:40:05	2019-01-27 20:40:05
337	6	302	2019-01-27 20:40:11	2019-01-27 20:40:11
338	6	304	2019-01-27 20:40:29	2019-01-27 20:40:29
339	6	305	2019-01-27 20:40:55	2019-01-27 20:40:55
340	6	306	2019-01-27 20:41:20	2019-01-27 20:41:20
341	6	307	2019-01-27 20:52:59	2019-01-27 20:52:59
342	6	308	2019-01-27 20:56:00	2019-01-27 20:56:00
343	6	309	2019-01-27 20:56:22	2019-01-27 20:56:22
344	6	310	2019-01-27 20:56:46	2019-01-27 20:56:46
345	6	311	2019-01-27 20:57:12	2019-01-27 20:57:12
346	6	312	2019-01-27 20:57:39	2019-01-27 20:57:39
347	6	313	2019-01-27 20:58:13	2019-01-27 20:58:13
348	6	314	2019-01-27 20:58:55	2019-01-27 20:58:55
349	6	315	2019-01-27 20:59:19	2019-01-27 20:59:19
350	6	316	2019-01-27 20:59:39	2019-01-27 20:59:39
351	6	317	2019-01-27 21:02:13	2019-01-27 21:02:13
352	6	318	2019-01-27 21:02:35	2019-01-27 21:02:35
353	6	319	2019-01-27 21:03:02	2019-01-27 21:03:02
354	6	320	2019-01-27 21:06:46	2019-01-27 21:06:46
355	6	321	2019-01-27 21:07:13	2019-01-27 21:07:13
356	6	322	2019-01-27 21:07:37	2019-01-27 21:07:37
357	6	323	2019-01-27 21:08:02	2019-01-27 21:08:02
358	6	324	2019-01-27 21:08:33	2019-01-27 21:08:33
359	6	325	2019-01-27 21:08:51	2019-01-27 21:08:51
360	6	326	2019-01-27 21:40:57	2019-01-27 21:40:57
361	6	327	2019-01-27 21:41:24	2019-01-27 21:41:24
362	6	328	2019-01-27 21:42:20	2019-01-27 21:42:20
363	6	329	2019-01-27 21:42:48	2019-01-27 21:42:48
364	5	330	2019-01-27 21:49:18	2019-01-27 21:49:18
365	6	330	2019-01-27 21:49:18	2019-01-27 21:49:18
366	6	331	2019-01-27 21:49:50	2019-01-27 21:49:50
369	6	333	2019-01-27 21:51:03	2019-01-27 21:51:03
370	4	334	2019-01-27 21:52:00	2019-01-27 21:52:00
371	6	335	2019-01-27 21:52:25	2019-01-27 21:52:25
372	4	336	2019-01-27 21:53:07	2019-01-27 21:53:07
373	2	332	2019-01-27 21:53:16	2019-01-27 21:53:16
374	3	332	2019-01-27 21:53:16	2019-01-27 21:53:16
375	6	337	2019-01-27 22:05:56	2019-01-27 22:05:56
376	5	338	2019-01-27 22:06:38	2019-01-27 22:06:38
377	4	339	2019-01-27 22:07:09	2019-01-27 22:07:09
378	5	340	2019-01-27 22:24:34	2019-01-27 22:24:34
379	3	341	2019-01-27 22:25:03	2019-01-27 22:25:03
380	3	342	2019-01-27 22:29:25	2019-01-27 22:29:25
381	6	343	2019-01-27 22:30:11	2019-01-27 22:30:11
382	6	344	2019-01-27 22:48:34	2019-01-27 22:48:34
383	3	345	2019-01-27 22:49:03	2019-01-27 22:49:03
384	6	346	2019-01-27 22:49:30	2019-01-27 22:49:30
385	6	347	2019-01-27 22:49:54	2019-01-27 22:49:54
386	6	348	2019-01-27 22:50:15	2019-01-27 22:50:15
387	2	349	2019-01-27 22:50:43	2019-01-27 22:50:43
388	6	350	2019-01-27 22:51:08	2019-01-27 22:51:08
389	6	351	2019-01-27 22:51:39	2019-01-27 22:51:39
390	2	352	2019-01-27 22:52:06	2019-01-27 22:52:06
391	6	353	2019-01-27 22:57:55	2019-01-27 22:57:55
392	6	354	2019-01-27 22:58:13	2019-01-27 22:58:13
393	6	355	2019-01-27 22:58:40	2019-01-27 22:58:40
394	6	356	2019-01-27 22:59:00	2019-01-27 22:59:00
395	6	357	2019-01-27 23:00:14	2019-01-27 23:00:14
396	6	358	2019-01-27 23:00:36	2019-01-27 23:00:36
397	6	359	2019-01-27 23:00:57	2019-01-27 23:00:57
398	6	360	2019-01-27 23:01:28	2019-01-27 23:01:28
399	3	361	2019-01-27 23:01:56	2019-01-27 23:01:56
400	3	362	2019-01-27 23:02:18	2019-01-27 23:02:18
401	2	363	2019-01-27 23:02:58	2019-01-27 23:02:58
402	3	364	2019-01-27 23:03:22	2019-01-27 23:03:22
403	2	365	2019-01-27 23:05:13	2019-01-27 23:05:13
404	4	366	2019-01-27 23:05:45	2019-01-27 23:05:45
405	6	367	2019-01-27 23:06:08	2019-01-27 23:06:08
406	2	368	2019-01-27 23:06:37	2019-01-27 23:06:37
407	4	369	2019-01-27 23:07:07	2019-01-27 23:07:07
408	5	369	2019-01-27 23:07:07	2019-01-27 23:07:07
409	5	370	2019-01-27 23:07:33	2019-01-27 23:07:33
410	6	371	2019-01-27 23:07:57	2019-01-27 23:07:57
411	6	372	2019-01-27 23:08:30	2019-01-27 23:08:30
412	6	373	2019-01-27 23:09:04	2019-01-27 23:09:04
413	5	374	2019-01-27 23:09:27	2019-01-27 23:09:27
414	6	375	2019-01-27 23:09:52	2019-01-27 23:09:52
415	5	376	2019-01-27 23:10:55	2019-01-27 23:10:55
416	6	376	2019-01-27 23:10:55	2019-01-27 23:10:55
417	6	377	2019-01-27 23:11:22	2019-01-27 23:11:22
419	6	378	2019-01-27 23:12:22	2019-01-27 23:12:22
420	6	379	2019-01-27 23:12:44	2019-01-27 23:12:44
421	6	380	2019-01-27 23:13:05	2019-01-27 23:13:05
422	6	381	2019-01-27 23:13:27	2019-01-27 23:13:27
423	6	382	2019-01-27 23:13:50	2019-01-27 23:13:50
424	5	383	2019-01-27 23:14:18	2019-01-27 23:14:18
425	6	383	2019-01-27 23:14:18	2019-01-27 23:14:18
426	5	384	2019-01-27 23:14:50	2019-01-27 23:14:50
427	5	385	2019-01-27 23:15:21	2019-01-27 23:15:21
428	2	386	2019-01-27 23:16:08	2019-01-27 23:16:08
429	3	387	2019-01-27 23:16:33	2019-01-27 23:16:33
430	6	388	2019-01-27 23:35:04	2019-01-27 23:35:04
431	3	389	2019-01-27 23:35:32	2019-01-27 23:35:32
432	2	390	2019-01-27 23:36:11	2019-01-27 23:36:11
433	6	391	2019-01-27 23:36:44	2019-01-27 23:36:44
434	4	392	2019-01-27 23:37:13	2019-01-27 23:37:13
435	6	393	2019-01-27 23:37:45	2019-01-27 23:37:45
436	2	394	2019-01-27 23:38:16	2019-01-27 23:38:16
437	4	395	2019-01-27 23:38:44	2019-01-27 23:38:44
438	5	396	2019-01-27 23:39:17	2019-01-27 23:39:17
439	6	396	2019-01-27 23:39:17	2019-01-27 23:39:17
440	6	397	2019-01-27 23:39:42	2019-01-27 23:39:42
441	6	398	2019-01-27 23:41:02	2019-01-27 23:41:02
442	4	399	2019-01-27 23:41:28	2019-01-27 23:41:28
443	6	400	2019-01-27 23:42:06	2019-01-27 23:42:06
444	6	401	2019-01-27 23:42:36	2019-01-27 23:42:36
445	5	402	2019-01-27 23:43:02	2019-01-27 23:43:02
446	6	402	2019-01-27 23:43:02	2019-01-27 23:43:02
447	6	403	2019-01-27 23:44:04	2019-01-27 23:44:04
448	6	404	2019-01-27 23:47:28	2019-01-27 23:47:28
449	6	405	2019-01-27 23:47:49	2019-01-27 23:47:49
450	6	406	2019-01-27 23:48:14	2019-01-27 23:48:14
451	2	407	2019-01-27 23:48:53	2019-01-27 23:48:53
452	3	407	2019-01-27 23:48:53	2019-01-27 23:48:53
453	4	408	2019-01-27 23:49:13	2019-01-27 23:49:13
454	4	409	2019-01-27 23:49:52	2019-01-27 23:49:52
455	6	410	2019-01-27 23:50:09	2019-01-27 23:50:09
456	2	411	2019-01-27 23:50:30	2019-01-27 23:50:30
457	4	412	2019-01-27 23:50:51	2019-01-27 23:50:51
458	2	413	2019-01-27 23:51:13	2019-01-27 23:51:13
459	6	414	2019-01-27 23:52:36	2019-01-27 23:52:36
460	3	415	2019-01-27 23:53:13	2019-01-27 23:53:13
461	6	416	2019-01-27 23:53:38	2019-01-27 23:53:38
462	3	417	2019-01-27 23:54:08	2019-01-27 23:54:08
463	6	418	2019-01-27 23:55:17	2019-01-27 23:55:17
464	6	419	2019-01-27 23:55:44	2019-01-27 23:55:44
465	6	420	2019-01-27 23:56:19	2019-01-27 23:56:19
466	6	421	2019-01-27 23:56:43	2019-01-27 23:56:43
467	5	422	2019-01-28 00:03:44	2019-01-28 00:03:44
468	6	423	2019-01-28 00:04:12	2019-01-28 00:04:12
469	6	424	2019-01-28 00:04:34	2019-01-28 00:04:34
470	5	425	2019-01-28 00:05:04	2019-01-28 00:05:04
471	6	426	2019-01-28 00:05:26	2019-01-28 00:05:26
472	6	427	2019-01-28 00:06:20	2019-01-28 00:06:20
473	5	428	2019-01-28 00:06:42	2019-01-28 00:06:42
474	6	428	2019-01-28 00:06:42	2019-01-28 00:06:42
475	3	429	2019-01-28 00:07:07	2019-01-28 00:07:07
476	6	430	2019-01-28 00:07:42	2019-01-28 00:07:42
477	5	431	2019-01-28 00:08:06	2019-01-28 00:08:06
478	6	431	2019-01-28 00:08:06	2019-01-28 00:08:06
479	2	432	2019-01-28 00:08:33	2019-01-28 00:08:33
480	3	432	2019-01-28 00:08:33	2019-01-28 00:08:33
481	6	433	2019-01-28 00:08:57	2019-01-28 00:08:57
482	6	434	2019-01-28 00:09:20	2019-01-28 00:09:20
483	6	435	2019-01-28 00:09:43	2019-01-28 00:09:43
484	3	436	2019-01-28 00:10:04	2019-01-28 00:10:04
485	3	437	2019-01-28 00:10:51	2019-01-28 00:10:51
486	4	438	2019-01-28 00:12:34	2019-01-28 00:12:34
487	3	439	2019-01-28 00:13:33	2019-01-28 00:13:33
488	6	440	2019-01-28 00:14:03	2019-01-28 00:14:03
489	4	441	2019-01-28 00:14:32	2019-01-28 00:14:32
490	5	441	2019-01-28 00:14:32	2019-01-28 00:14:32
491	5	442	2019-01-28 00:14:59	2019-01-28 00:14:59
492	6	443	2019-01-28 00:15:28	2019-01-28 00:15:28
493	5	444	2019-01-28 00:16:48	2019-01-28 00:16:48
494	6	444	2019-01-28 00:16:48	2019-01-28 00:16:48
495	5	445	2019-01-28 00:17:17	2019-01-28 00:17:17
496	6	446	2019-01-28 00:17:42	2019-01-28 00:17:42
497	6	447	2019-01-28 00:18:08	2019-01-28 00:18:08
498	6	448	2019-01-28 00:39:12	2019-01-28 00:39:12
499	5	449	2019-01-28 00:39:37	2019-01-28 00:39:37
500	6	449	2019-01-28 00:39:37	2019-01-28 00:39:37
501	2	450	2019-01-28 00:39:59	2019-01-28 00:39:59
502	6	451	2019-01-28 00:40:29	2019-01-28 00:40:29
503	6	452	2019-01-28 00:40:52	2019-01-28 00:40:52
504	2	453	2019-01-28 00:41:16	2019-01-28 00:41:16
505	5	454	2019-01-28 00:42:18	2019-01-28 00:42:18
506	6	454	2019-01-28 00:42:18	2019-01-28 00:42:18
507	6	455	2019-01-28 00:43:05	2019-01-28 00:43:05
508	6	456	2019-01-28 00:43:24	2019-01-28 00:43:24
509	2	457	2019-01-28 00:43:56	2019-01-28 00:43:56
510	3	458	2019-01-28 00:44:16	2019-01-28 00:44:16
511	5	459	2019-01-28 00:44:38	2019-01-28 00:44:38
512	6	459	2019-01-28 00:44:38	2019-01-28 00:44:38
513	2	460	2019-01-28 00:45:01	2019-01-28 00:45:01
514	2	461	2019-01-28 00:45:22	2019-01-28 00:45:22
515	2	462	2019-01-28 00:45:41	2019-01-28 00:45:41
516	2	463	2019-01-28 00:46:06	2019-01-28 00:46:06
517	3	463	2019-01-28 00:46:06	2019-01-28 00:46:06
518	6	464	2019-01-28 00:46:54	2019-01-28 00:46:54
519	3	465	2019-01-28 00:47:20	2019-01-28 00:47:20
520	5	466	2019-01-28 00:47:44	2019-01-28 00:47:44
521	6	466	2019-01-28 00:47:44	2019-01-28 00:47:44
522	5	467	2019-01-28 00:48:13	2019-01-28 00:48:13
523	4	468	2019-01-28 00:48:55	2019-01-28 00:48:55
524	6	469	2019-01-28 00:50:01	2019-01-28 00:50:01
525	5	470	2019-01-28 00:51:48	2019-01-28 00:51:48
527	4	472	2019-01-28 01:03:23	2019-01-28 01:03:23
528	3	473	2019-01-28 01:03:50	2019-01-28 01:03:50
529	6	474	2019-01-28 01:04:14	2019-01-28 01:04:14
530	4	475	2019-01-28 01:04:51	2019-01-28 01:04:51
531	5	475	2019-01-28 01:04:51	2019-01-28 01:04:51
532	6	476	2019-01-28 01:05:11	2019-01-28 01:05:11
533	6	477	2019-01-28 01:05:35	2019-01-28 01:05:35
537	6	478	2019-01-28 01:11:36	2019-01-28 01:11:36
538	6	479	2019-01-28 01:12:02	2019-01-28 01:12:02
539	2	480	2019-01-28 01:12:28	2019-01-28 01:12:28
540	6	481	2019-01-28 01:12:52	2019-01-28 01:12:52
541	3	482	2019-01-28 01:13:14	2019-01-28 01:13:14
542	6	483	2019-01-28 01:13:30	2019-01-28 01:13:30
543	2	484	2019-01-28 01:14:33	2019-01-28 01:14:33
544	3	485	2019-01-28 01:17:27	2019-01-28 01:17:27
545	6	486	2019-01-28 01:17:54	2019-01-28 01:17:54
546	3	487	2019-01-28 01:18:21	2019-01-28 01:18:21
547	6	488	2019-01-28 01:18:50	2019-01-28 01:18:50
548	4	489	2019-01-28 01:19:19	2019-01-28 01:19:19
549	5	489	2019-01-28 01:19:19	2019-01-28 01:19:19
550	4	490	2019-01-28 01:19:55	2019-01-28 01:19:55
551	5	491	2019-01-28 01:20:23	2019-01-28 01:20:23
552	6	491	2019-01-28 01:20:23	2019-01-28 01:20:23
553	2	492	2019-01-28 01:20:45	2019-01-28 01:20:45
554	5	493	2019-01-28 01:21:11	2019-01-28 01:21:11
555	5	494	2019-01-28 01:21:33	2019-01-28 01:21:33
556	6	495	2019-01-28 01:21:58	2019-01-28 01:21:58
557	6	496	2019-01-28 01:27:50	2019-01-28 01:27:50
558	6	497	2019-01-28 01:28:12	2019-01-28 01:28:12
559	6	498	2019-01-28 01:28:37	2019-01-28 01:28:37
560	6	499	2019-01-28 01:29:25	2019-01-28 01:29:25
561	6	500	2019-01-28 01:29:46	2019-01-28 01:29:46
562	6	501	2019-01-28 01:30:21	2019-01-28 01:30:21
563	6	502	2019-01-28 01:30:42	2019-01-28 01:30:42
564	6	503	2019-01-28 01:31:07	2019-01-28 01:31:07
565	6	504	2019-01-28 01:31:27	2019-01-28 01:31:27
566	6	505	2019-01-28 01:31:47	2019-01-28 01:31:47
567	6	506	2019-01-28 01:32:07	2019-01-28 01:32:07
568	6	507	2019-01-28 01:32:28	2019-01-28 01:32:28
569	6	508	2019-01-28 01:33:20	2019-01-28 01:33:20
570	6	509	2019-01-28 01:33:48	2019-01-28 01:33:48
571	6	510	2019-01-28 01:34:10	2019-01-28 01:34:10
572	6	511	2019-01-28 01:36:32	2019-01-28 01:36:32
573	6	512	2019-01-28 01:36:52	2019-01-28 01:36:52
574	6	513	2019-01-28 01:37:17	2019-01-28 01:37:17
575	6	514	2019-01-28 01:37:39	2019-01-28 01:37:39
576	6	515	2019-01-28 01:37:58	2019-01-28 01:37:58
577	6	516	2019-01-28 01:38:21	2019-01-28 01:38:21
578	6	517	2019-01-28 01:38:40	2019-01-28 01:38:40
579	6	518	2019-01-28 01:39:01	2019-01-28 01:39:01
580	6	519	2019-01-28 01:39:26	2019-01-28 01:39:26
581	6	520	2019-01-28 01:39:45	2019-01-28 01:39:45
582	6	521	2019-01-28 01:40:46	2019-01-28 01:40:46
583	6	522	2019-01-28 01:41:16	2019-01-28 01:41:16
584	6	523	2019-01-28 01:41:42	2019-01-28 01:41:42
585	6	524	2019-01-28 01:42:02	2019-01-28 01:42:02
586	6	525	2019-01-28 01:42:24	2019-01-28 01:42:24
587	6	526	2019-01-28 01:42:42	2019-01-28 01:42:42
588	6	527	2019-01-28 01:46:06	2019-01-28 01:46:06
589	6	528	2019-01-28 01:46:23	2019-01-28 01:46:23
590	6	529	2019-01-28 01:46:41	2019-01-28 01:46:41
591	6	530	2019-01-28 01:47:01	2019-01-28 01:47:01
592	6	531	2019-01-28 01:47:26	2019-01-28 01:47:26
593	6	532	2019-01-28 01:47:52	2019-01-28 01:47:52
594	6	533	2019-01-28 01:48:27	2019-01-28 01:48:27
595	6	534	2019-01-28 01:48:48	2019-01-28 01:48:48
596	6	535	2019-01-28 01:49:09	2019-01-28 01:49:09
597	6	536	2019-01-28 01:49:28	2019-01-28 01:49:28
598	6	537	2019-01-28 01:49:54	2019-01-28 01:49:54
600	6	538	2019-01-28 01:51:48	2019-01-28 01:51:48
601	6	539	2019-01-28 01:52:08	2019-01-28 01:52:08
602	6	540	2019-01-28 01:53:15	2019-01-28 01:53:15
603	6	541	2019-01-28 01:53:33	2019-01-28 01:53:33
604	6	542	2019-01-28 01:53:54	2019-01-28 01:53:54
605	6	543	2019-01-28 01:55:52	2019-01-28 01:55:52
606	6	544	2019-01-28 01:56:18	2019-01-28 01:56:18
607	6	545	2019-01-28 01:56:38	2019-01-28 01:56:38
608	6	546	2019-01-28 01:56:55	2019-01-28 01:56:55
609	6	547	2019-01-28 01:57:12	2019-01-28 01:57:12
610	6	548	2019-01-28 01:57:49	2019-01-28 01:57:49
611	6	549	2019-01-28 01:58:06	2019-01-28 01:58:06
612	6	550	2019-01-28 01:58:27	2019-01-28 01:58:27
613	6	551	2019-01-28 01:58:56	2019-01-28 01:58:56
614	6	552	2019-01-28 01:59:18	2019-01-28 01:59:18
615	6	553	2019-01-28 01:59:40	2019-01-28 01:59:40
617	6	554	2019-01-28 02:00:43	2019-01-28 02:00:43
618	6	555	2019-01-28 02:00:59	2019-01-28 02:00:59
619	6	556	2019-01-28 02:01:20	2019-01-28 02:01:20
621	6	557	2019-01-28 02:01:39	2019-01-28 02:01:39
622	6	558	2019-01-28 02:02:00	2019-01-28 02:02:00
623	6	559	2019-01-28 02:02:18	2019-01-28 02:02:18
624	6	560	2019-01-28 02:02:43	2019-01-28 02:02:43
625	6	561	2019-01-28 02:03:14	2019-01-28 02:03:14
626	6	562	2019-01-28 02:03:31	2019-01-28 02:03:31
627	6	563	2019-01-28 02:03:51	2019-01-28 02:03:51
628	6	564	2019-01-28 02:04:08	2019-01-28 02:04:08
629	6	565	2019-01-28 02:04:30	2019-01-28 02:04:30
630	6	566	2019-01-28 02:04:56	2019-01-28 02:04:56
631	6	567	2019-01-28 02:05:15	2019-01-28 02:05:15
632	6	568	2019-01-28 02:05:35	2019-01-28 02:05:35
633	6	569	2019-01-28 02:06:34	2019-01-28 02:06:34
634	6	570	2019-01-28 02:06:57	2019-01-28 02:06:57
635	6	571	2019-01-28 02:07:15	2019-01-28 02:07:15
636	6	572	2019-01-28 02:07:34	2019-01-28 02:07:34
637	6	573	2019-01-28 02:07:58	2019-01-28 02:07:58
638	6	574	2019-01-28 02:08:13	2019-01-28 02:08:13
639	6	575	2019-01-28 02:08:32	2019-01-28 02:08:32
640	6	576	2019-01-28 02:08:59	2019-01-28 02:08:59
641	6	577	2019-01-28 02:09:18	2019-01-28 02:09:18
642	6	578	2019-01-28 02:09:37	2019-01-28 02:09:37
643	6	579	2019-01-28 02:09:54	2019-01-28 02:09:54
645	6	580	2019-01-28 02:10:50	2019-01-28 02:10:50
646	6	581	2019-01-28 02:11:11	2019-01-28 02:11:11
647	6	582	2019-01-28 02:11:34	2019-01-28 02:11:34
648	6	583	2019-01-28 02:12:19	2019-01-28 02:12:19
649	6	584	2019-01-28 02:12:40	2019-01-28 02:12:40
650	6	586	2019-01-28 02:13:24	2019-01-28 02:13:24
\.


--
-- Data for Name: schedules; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.schedules (id, clubs_id, trainings_id, rooms_id, intensities_id, active, sort, start_time, end_time, duration, pre_entry, paid, show_age, created_at, updated_at) FROM stdin;
12	8	5	30	3	t	500	2018-09-03 15:52:00	2018-09-03 16:03:00	11	t	t	t	2018-09-10 06:27:25	2018-09-10 06:27:25
13	8	8	34	3	t	500	2018-09-04 08:37:00	2018-09-04 08:48:00	11	f	f	f	2018-09-10 09:47:04	2018-09-10 09:47:04
14	8	4	34	3	t	500	2018-09-03 11:08:00	2018-09-03 11:19:00	11	t	f	f	2018-09-10 12:39:28	2018-09-10 12:39:28
15	2	22	10	2	t	500	2018-09-01 08:30:00	2018-09-01 10:00:00	90	f	f	f	2018-09-11 06:38:24	2018-09-11 06:38:24
16	2	24	8	2	t	500	2018-09-01 11:00:00	2018-09-01 11:45:00	45	f	f	t	2018-09-11 07:29:57	2018-09-11 07:29:57
17	2	28	10	4	t	500	2018-09-01 11:00:00	2018-09-01 12:00:00	60	f	f	t	2018-09-11 07:51:42	2018-09-11 07:51:42
18	2	29	15	2	t	500	2018-09-01 11:30:00	2018-09-01 12:00:00	30	f	f	t	2018-09-11 07:55:58	2018-09-11 07:55:58
19	2	30	15	3	t	500	2018-09-02 11:00:00	2018-09-02 11:30:00	30	f	f	t	2018-09-11 08:00:41	2018-09-11 08:00:41
20	2	31	8	2	t	500	2018-09-02 11:00:00	2018-09-02 11:30:00	30	f	f	t	2018-09-11 08:04:02	2018-09-11 08:04:02
21	2	5	10	3	t	500	2018-09-02 11:00:00	2018-09-02 11:55:00	55	f	f	f	2018-09-11 08:04:47	2018-09-11 08:04:47
22	2	29	15	3	t	500	2018-09-02 11:30:00	2018-09-02 12:00:00	30	f	f	t	2018-09-11 08:05:34	2018-09-11 08:05:34
23	2	32	15	3	t	500	2018-09-02 12:00:00	2018-09-02 12:45:00	45	f	f	t	2018-09-11 08:08:47	2018-09-11 08:08:47
24	2	22	10	2	t	500	2018-09-03 12:00:00	2018-09-03 13:30:00	90	f	f	t	2018-09-11 08:10:40	2018-09-11 08:10:40
25	2	31	8	2	t	500	2018-09-03 18:00:00	2018-09-03 18:30:00	30	f	f	t	2018-09-11 08:12:22	2018-09-11 08:12:22
26	2	30	15	2	t	500	2018-09-03 19:45:00	2018-09-03 20:15:00	30	f	f	t	2018-09-11 08:13:46	2018-09-11 08:13:46
27	2	32	15	3	t	500	2018-09-11 11:00:00	2018-09-11 11:45:00	45	f	f	t	2018-09-11 08:15:22	2018-09-11 08:15:22
28	2	7	10	3	t	500	2018-09-11 10:30:00	2018-09-11 11:00:00	30	f	f	t	2018-09-11 08:18:40	2018-09-11 08:18:40
29	2	34	17	2	t	500	2018-09-11 08:40:00	2018-09-11 09:40:00	60	f	f	t	2018-09-11 08:21:39	2018-09-11 08:21:39
30	2	9	13	4	t	500	2018-09-12 09:00:00	2018-09-12 09:55:00	55	t	t	t	2018-09-11 08:28:54	2018-09-11 08:28:54
31	2	4	10	3	t	500	2018-09-12 12:00:00	2018-09-12 12:55:00	55	f	f	f	2018-09-11 08:29:57	2018-09-11 08:29:57
32	2	32	15	3	t	500	2018-09-12 18:00:00	2018-09-12 18:45:00	45	f	f	t	2018-09-11 08:31:06	2018-09-11 08:31:06
33	2	5	10	3	t	500	2018-09-12 19:00:00	2018-09-12 19:55:00	55	f	f	t	2018-09-11 08:32:05	2018-09-11 08:32:05
34	2	29	15	3	t	500	2018-09-12 20:00:00	2018-09-12 20:30:00	30	f	f	t	2018-09-11 08:32:53	2018-09-11 08:32:53
35	2	7	10	3	t	500	2018-09-13 08:00:00	2018-09-13 08:30:00	30	f	f	t	2018-09-11 08:33:47	2018-09-11 08:33:47
36	2	24	8	2	t	500	2018-09-13 19:00:00	2018-09-13 19:45:00	45	f	f	t	2018-09-11 08:35:18	2018-09-11 08:35:18
37	2	30	15	2	t	500	2018-09-13 19:15:00	2018-09-13 19:45:00	30	f	f	t	2018-09-11 08:37:36	2018-09-11 08:37:36
38	2	7	10	3	t	500	2018-09-13 20:00:00	2018-09-13 20:30:00	30	f	f	t	2018-09-11 08:39:57	2018-09-11 08:39:57
39	2	22	10	3	t	500	2018-09-13 20:30:00	2018-09-13 22:00:00	90	f	f	f	2018-09-11 08:40:56	2018-09-11 08:40:56
40	2	5	10	3	t	500	2018-09-14 11:00:00	2018-09-14 11:55:00	55	f	f	f	2018-09-11 08:42:38	2018-09-11 08:42:38
41	2	7	10	3	t	500	2018-09-14 15:30:00	2018-09-14 16:00:00	30	f	f	f	2018-09-11 08:43:22	2018-09-11 08:43:22
42	2	31	8	2	t	500	2018-09-14 18:00:00	2018-09-14 18:30:00	30	f	f	t	2018-09-11 08:44:02	2018-09-11 08:44:02
43	2	22	10	2	t	500	2018-09-15 08:30:00	2018-09-15 10:00:00	90	f	f	f	2018-09-11 08:50:07	2018-09-11 08:50:07
44	2	24	8	2	t	500	2018-09-15 11:00:00	2018-09-15 11:45:00	45	f	f	t	2018-09-11 08:50:51	2018-09-11 08:50:51
45	2	9	13	3	t	500	2018-09-15 13:00:00	2018-09-15 13:55:00	55	t	f	t	2018-09-11 08:51:50	2018-09-11 08:51:50
46	2	36	12	3	t	500	2018-09-15 16:15:00	2018-09-15 17:15:00	60	t	t	f	2018-09-11 08:56:20	2018-09-11 08:56:20
47	2	22	10	2	t	500	2018-09-17 12:00:00	2018-09-17 13:30:00	90	f	f	t	2018-09-11 09:36:43	2018-09-11 09:36:43
48	2	31	8	2	t	500	2018-09-17 18:00:00	2018-09-17 18:30:00	30	f	f	t	2018-09-11 09:39:17	2018-09-11 09:39:17
49	2	34	17	2	t	500	2018-09-18 08:40:00	2018-09-18 09:40:00	60	f	f	t	2018-09-11 09:50:05	2018-09-11 09:50:05
50	2	7	10	3	t	500	2018-09-18 10:30:00	2018-09-18 11:00:00	30	f	f	t	2018-09-11 12:54:15	2018-09-11 12:54:15
51	2	32	15	3	t	500	2018-09-18 11:00:00	2018-09-18 11:45:00	45	f	f	t	2018-09-11 12:55:05	2018-09-11 12:55:05
52	2	7	10	3	t	500	2018-09-18 18:30:00	2018-09-18 19:00:00	30	f	f	t	2018-09-11 12:55:47	2018-09-11 12:55:47
53	2	29	15	3	t	500	2018-09-18 19:00:00	2018-09-18 19:30:00	30	f	f	t	2018-09-11 12:56:38	2018-09-11 12:56:38
54	2	24	8	2	t	500	2018-09-18 19:00:00	2018-09-18 19:45:00	45	f	f	t	2018-09-11 12:57:21	2018-09-11 12:57:21
55	2	22	10	2	t	500	2018-09-18 20:00:00	2018-09-18 21:30:00	90	f	f	f	2018-09-11 12:58:00	2018-09-11 12:58:00
56	2	35	12	3	t	500	2018-09-18 20:30:00	2018-09-18 21:20:00	50	f	f	t	2018-09-11 12:58:33	2018-09-11 12:58:33
57	2	35	12	3	t	500	2018-09-19 08:00:00	2018-09-19 08:50:00	50	t	t	t	2018-09-11 12:59:36	2018-09-11 12:59:36
58	2	9	13	4	t	500	2018-09-19 09:00:00	2018-09-19 09:55:00	55	t	t	t	2018-09-11 13:00:11	2018-09-11 13:00:11
59	2	22	10	3	t	500	2018-09-19 13:00:00	2018-09-19 14:30:00	90	f	f	f	2018-09-11 13:00:50	2018-09-11 13:00:50
60	2	31	8	2	t	500	2018-09-19 18:00:00	2018-09-19 18:30:00	30	f	f	t	2018-09-11 13:01:28	2018-09-11 13:01:28
61	2	32	15	3	t	500	2018-09-19 18:00:00	2018-09-19 18:45:00	45	f	f	t	2018-09-11 13:02:09	2018-09-11 13:02:09
62	2	29	15	3	t	500	2018-09-19 20:00:00	2018-09-19 20:30:00	30	f	f	t	2018-09-11 13:03:10	2018-09-11 13:03:10
64	2	11	13	4	t	500	2018-09-20 10:00:00	2018-09-20 10:55:00	55	f	f	f	2018-09-11 13:05:02	2018-09-11 13:05:02
65	2	36	12	3	t	500	2018-09-20 17:45:00	2018-09-20 18:45:00	60	t	f	t	2018-09-11 13:06:14	2018-09-11 13:06:14
66	2	24	8	2	t	500	2018-09-20 19:00:00	2018-09-20 19:45:00	45	f	f	t	2018-09-11 13:07:00	2018-09-11 13:07:00
67	2	29	15	3	t	500	2018-09-20 19:45:00	2018-09-20 20:15:00	30	f	f	t	2018-09-11 13:07:49	2018-09-11 13:07:49
68	2	7	10	3	t	500	2018-09-20 20:00:00	2018-09-20 20:30:00	30	f	f	t	2018-09-11 13:08:30	2018-09-11 13:08:30
69	2	35	12	4	t	500	2018-09-20 20:30:00	2018-09-20 21:30:00	60	f	f	t	2018-09-11 13:09:11	2018-09-11 13:09:11
70	2	22	10	3	t	500	2018-09-20 20:30:00	2018-09-20 22:00:00	90	f	f	f	2018-09-11 13:09:48	2018-09-11 13:09:48
71	2	35	12	3	t	500	2018-09-21 08:00:00	2018-09-21 08:50:00	50	t	t	t	2018-09-11 13:10:52	2018-09-11 13:10:52
72	2	7	10	3	t	500	2018-09-21 15:30:00	2018-09-21 16:00:00	30	f	f	f	2018-09-11 13:11:32	2018-09-11 13:11:32
73	2	31	8	2	t	500	2018-09-21 18:00:00	2018-09-21 18:30:00	30	f	f	t	2018-09-11 13:12:09	2018-09-11 13:12:09
74	2	29	15	3	t	500	2018-09-21 18:15:00	2018-09-21 18:45:00	30	f	f	t	2018-09-11 13:13:00	2018-09-11 13:13:00
75	2	11	10	4	t	500	2018-09-21 18:00:00	2018-09-21 18:55:00	55	f	f	t	2018-09-11 13:13:41	2018-09-11 13:13:41
76	2	9	13	4	t	500	2018-09-21 19:00:00	2018-09-21 19:55:00	55	t	t	t	2018-09-11 13:14:27	2018-09-11 13:14:27
77	2	22	10	2	t	500	2018-09-22 08:30:00	2018-09-22 10:00:00	90	f	f	f	2018-09-11 13:15:25	2018-09-11 13:15:25
78	2	24	8	2	t	500	2018-09-22 11:00:00	2018-09-22 11:45:00	45	f	f	t	2018-09-11 13:16:03	2018-09-11 13:16:03
79	2	9	13	3	t	500	2018-09-22 13:00:00	2018-09-22 13:55:00	55	t	f	t	2018-09-11 13:16:56	2018-09-11 13:16:56
80	2	29	15	2	t	500	2018-09-22 11:30:00	2018-09-22 12:00:00	30	f	f	t	2018-09-11 13:17:46	2018-09-11 13:17:46
81	2	36	12	3	t	500	2018-09-22 16:15:00	2018-09-22 17:15:00	60	t	t	f	2018-09-11 13:18:42	2018-09-11 13:18:42
82	2	11	11	3	t	500	2018-09-03 22:30:00	2018-09-03 23:00:00	30	f	f	f	2018-09-11 15:29:54	2018-09-11 15:29:54
83	2	34	9	3	t	500	2018-09-11 22:30:00	2018-09-11 23:00:00	30	f	f	f	2018-09-11 15:30:33	2018-09-11 15:30:33
84	2	9	11	3	t	500	2018-09-11 10:00:00	2018-09-11 10:50:00	50	f	f	f	2018-09-11 17:06:57	2018-09-11 17:06:57
85	2	6	9	2	t	500	2018-09-11 12:00:00	2018-09-11 12:50:00	50	f	f	f	2018-09-11 17:07:21	2018-09-11 17:07:21
86	2	4	11	3	t	500	2018-09-11 13:00:00	2018-09-11 13:50:00	50	f	f	f	2018-09-11 17:07:40	2018-09-11 17:07:40
87	2	12	13	2	t	500	2018-09-11 14:00:00	2018-09-11 14:15:00	15	f	f	f	2018-09-11 17:08:00	2018-09-11 17:08:00
88	2	21	11	2	t	500	2018-09-11 15:00:00	2018-09-11 15:50:00	50	f	f	f	2018-09-11 17:08:17	2018-09-11 17:08:17
89	2	5	16	3	t	500	2018-09-11 15:30:00	2018-09-11 16:00:00	30	f	f	f	2018-09-11 17:08:40	2018-09-11 17:08:40
90	2	13	15	2	t	500	2018-09-11 16:00:00	2018-09-11 16:50:00	50	f	f	f	2018-09-11 17:09:01	2018-09-11 17:09:01
91	2	14	13	3	t	500	2018-09-11 16:30:00	2018-09-11 17:20:00	50	f	f	f	2018-09-11 17:09:20	2018-09-11 17:09:20
92	2	21	12	2	t	500	2018-09-14 09:33:00	2018-09-14 09:44:00	11	f	f	f	2018-09-12 18:13:25	2018-09-12 18:13:25
93	2	4	9	4	t	500	2018-09-14 11:00:00	2018-09-14 11:25:00	25	f	f	f	2018-09-13 10:33:34	2018-09-13 10:33:34
63	2	7	10	3	t	500	2018-09-20 08:00:00	2018-09-20 08:30:00	30	f	t	t	2018-09-11 13:04:16	2018-09-18 11:48:25
94	8	4	34	2	t	500	2018-10-02 08:00:00	2018-10-02 08:45:00	45	t	f	f	2018-10-09 17:09:45	2018-10-09 17:09:45
95	8	22	31	2	t	500	2018-10-10 08:00:00	2018-10-10 08:45:00	45	t	t	f	2018-10-09 17:10:37	2018-10-09 17:10:37
96	2	53	13	2	t	500	2019-01-21 09:00:00	2019-01-21 09:45:00	45	t	f	t	2019-01-26 17:37:28	2019-01-26 17:37:28
97	2	62	13	3	t	500	2019-01-21 09:30:00	2019-01-21 10:00:00	30	f	f	t	2019-01-26 17:43:03	2019-01-26 17:43:03
98	2	117	8	3	t	500	2019-01-21 10:00:00	2019-01-21 10:50:00	50	f	f	t	2019-01-26 17:47:29	2019-01-26 17:47:29
99	2	4	10	3	t	500	2019-01-21 10:00:00	2019-01-21 10:55:00	55	f	f	t	2019-01-26 17:49:27	2019-01-26 17:49:27
100	2	137	15	3	t	500	2019-01-21 11:00:00	2019-01-21 11:45:00	45	f	f	t	2019-01-26 17:50:33	2019-01-26 17:50:33
101	2	10	10	3	t	500	2019-01-21 11:00:00	2019-01-21 11:45:00	45	f	f	t	2019-01-26 17:51:26	2019-01-26 17:51:26
102	2	22	10	2	t	500	2019-01-21 12:00:00	2019-01-21 13:30:00	90	f	f	t	2019-01-26 17:52:24	2019-01-26 17:52:24
103	2	118	8	2	t	500	2019-01-21 14:00:00	2019-01-21 14:50:00	50	f	f	t	2019-01-26 17:53:20	2019-01-26 17:53:20
104	2	45	10	4	t	500	2019-01-21 15:00:00	2019-01-21 16:00:00	60	f	f	f	2019-01-26 17:54:00	2019-01-26 17:54:00
105	2	47	10	2	t	500	2019-01-21 16:00:00	2019-01-21 16:55:00	55	f	f	t	2019-01-26 17:55:12	2019-01-26 17:55:12
106	2	153	15	2	t	500	2019-01-21 17:15:00	2019-01-21 18:00:00	45	f	f	t	2019-01-26 17:56:43	2019-01-26 17:56:43
108	2	31	8	2	t	500	2019-01-21 18:00:00	2019-01-21 18:30:00	30	f	f	t	2019-01-26 17:58:45	2019-01-26 17:58:53
107	2	149	15	3	f	500	2019-01-21 17:30:00	2019-01-21 18:00:00	30	f	f	t	2019-01-26 17:57:23	2019-01-26 17:59:00
109	2	5	10	3	t	500	2019-01-21 18:00:00	2019-01-21 18:55:00	55	f	f	t	2019-01-26 17:59:48	2019-01-26 17:59:48
110	2	87	11	3	f	500	2019-01-21 18:00:00	2019-01-21 18:55:00	55	t	t	t	2019-01-26 18:00:32	2019-01-26 18:00:38
111	2	30	15	2	t	500	2019-01-21 18:45:00	2019-01-21 19:15:00	30	f	f	t	2019-01-26 18:02:56	2019-01-26 18:02:56
112	2	71	11	3	t	500	2019-01-21 19:00:00	2019-01-21 19:45:00	45	f	f	t	2019-01-26 18:04:39	2019-01-26 18:04:39
113	2	111	8	2	t	500	2019-01-21 19:00:00	2019-01-21 19:45:00	45	f	f	t	2019-01-26 18:05:37	2019-01-26 18:05:37
114	2	45	10	4	t	500	2019-01-21 19:00:00	2019-01-21 20:00:00	60	f	f	t	2019-01-26 18:07:15	2019-01-26 18:07:15
115	2	138	15	2	t	500	2019-01-21 19:15:00	2019-01-21 19:45:00	30	f	f	t	2019-01-26 18:08:09	2019-01-26 18:08:09
116	2	145	15	2	t	500	2019-01-21 19:45:00	2019-01-21 20:45:00	60	t	t	t	2019-01-26 18:08:46	2019-01-26 18:08:46
117	2	91	10	2	t	500	2019-01-21 20:00:00	2019-01-21 20:45:00	45	f	f	t	2019-01-26 18:09:50	2019-01-26 18:09:50
118	2	116	8	3	t	500	2019-01-21 20:00:00	2019-01-21 20:50:00	50	f	f	t	2019-01-26 18:10:20	2019-01-26 18:10:20
119	2	72	11	3	t	500	2019-01-21 20:00:00	2019-01-21 20:55:00	55	f	f	t	2019-01-26 18:10:42	2019-01-26 18:10:42
121	2	47	10	2	t	500	2019-01-22 08:30:00	2019-01-22 09:30:00	60	f	f	t	2019-01-26 18:15:03	2019-01-26 18:15:03
122	2	118	8	2	t	500	2019-01-22 10:00:00	2019-01-22 10:50:00	50	f	f	t	2019-01-26 18:16:43	2019-01-26 18:16:43
123	2	7	10	3	t	500	2019-01-22 10:30:00	2019-01-22 11:00:00	30	f	f	t	2019-01-26 18:19:44	2019-01-26 18:19:44
124	2	91	10	2	t	500	2019-01-22 11:00:00	2019-01-22 11:45:00	45	f	f	t	2019-01-26 18:24:30	2019-01-26 18:24:30
125	2	141	15	4	t	500	2019-01-22 11:00:00	2019-01-22 11:45:00	45	f	f	t	2019-01-26 18:25:40	2019-01-26 18:25:40
126	2	14	13	3	t	500	2019-01-22 12:00:00	2019-01-22 12:55:00	55	f	f	t	2019-01-26 18:26:18	2019-01-26 18:26:18
127	2	145	15	2	t	500	2019-01-22 12:00:00	2019-01-22 13:00:00	60	f	f	t	2019-01-26 18:27:01	2019-01-26 18:27:01
128	2	56	10	3	t	500	2019-01-22 13:00:00	2019-01-22 13:45:00	45	f	f	t	2019-01-26 18:27:59	2019-01-26 18:27:59
129	2	99	10	2	t	500	2019-01-22 13:00:00	2019-01-22 13:55:00	55	t	t	t	2019-01-26 18:28:39	2019-01-26 18:28:39
130	2	117	8	3	t	500	2019-01-22 14:00:00	2019-01-22 14:50:00	50	f	f	t	2019-01-26 18:33:40	2019-01-26 18:33:40
132	2	150	13	4	t	500	2019-01-22 17:00:00	2019-01-22 17:30:00	30	f	f	t	2019-01-26 18:34:41	2019-01-26 18:34:41
131	2	73	10	3	t	500	2019-01-22 15:00:00	2019-01-22 15:55:00	55	f	f	t	2019-01-26 18:34:16	2019-01-26 18:34:46
133	2	141	15	4	t	500	2019-01-22 17:30:00	2019-01-22 18:00:00	30	f	f	t	2019-01-26 18:35:39	2019-01-26 18:35:39
134	2	116	8	4	t	500	2019-01-22 18:00:00	2019-01-22 18:50:00	50	f	f	t	2019-01-26 18:36:11	2019-01-26 18:36:11
135	2	14	13	3	t	500	2019-01-22 18:00:00	2019-01-22 18:55:00	55	t	t	t	2019-01-26 18:36:46	2019-01-26 18:36:46
136	2	36	11	3	t	500	2019-01-22 18:00:00	2019-01-22 19:00:00	60	t	f	t	2019-01-26 18:37:40	2019-01-26 18:37:40
137	2	137	15	2	t	500	2019-01-22 18:15:00	2019-01-22 19:00:00	45	f	f	t	2019-01-27 12:33:38	2019-01-27 12:33:38
138	2	7	10	3	t	500	2019-01-22 18:30:00	2019-01-22 19:00:00	30	f	f	f	2019-01-27 12:34:18	2019-01-27 12:34:18
140	2	10	10	3	t	500	2019-01-22 19:00:00	2019-01-22 19:45:00	45	f	f	t	2019-01-27 12:38:11	2019-01-27 12:38:17
139	2	29	15	3	t	500	2019-01-22 19:00:00	2019-01-22 19:30:00	30	f	f	t	2019-01-27 12:37:32	2019-01-27 12:38:20
141	2	24	8	2	t	500	2019-01-22 19:00:00	2019-01-22 19:45:00	45	f	f	t	2019-01-27 12:39:51	2019-01-27 12:39:51
143	2	93	11	2	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-27 15:18:12	2019-01-27 15:18:12
144	2	22	10	2	t	500	2019-01-22 20:00:00	2019-01-22 21:30:00	90	f	f	t	2019-01-27 15:18:57	2019-01-27 15:18:57
145	2	35	11	3	t	500	2019-01-22 20:30:00	2019-01-22 21:20:00	50	f	f	t	2019-01-27 15:19:44	2019-01-27 15:19:44
142	2	43	13	3	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	t	t	t	2019-01-27 12:40:30	2019-01-27 15:19:56
146	2	9	13	4	t	500	2019-01-23 09:00:00	2019-01-23 09:55:00	55	t	t	t	2019-01-27 15:49:51	2019-01-27 15:49:51
147	2	119	8	3	t	500	2019-01-23 10:00:00	2019-01-23 10:50:00	50	f	f	t	2019-01-27 15:50:28	2019-01-27 15:50:28
148	2	58	10	2	t	500	2019-01-23 11:00:00	2019-01-23 11:45:00	45	f	f	t	2019-01-27 15:51:49	2019-01-27 15:51:49
149	2	151	13	3	t	500	2019-01-23 11:00:00	2019-01-23 11:55:00	55	f	f	t	2019-01-27 15:52:24	2019-01-27 15:52:24
150	2	4	10	3	t	500	2019-01-23 12:00:00	2019-01-23 12:55:00	55	f	f	t	2019-01-27 15:53:00	2019-01-27 15:53:00
151	2	22	10	3	t	500	2019-01-23 13:00:00	2019-01-23 14:30:00	90	f	f	t	2019-01-27 15:54:48	2019-01-27 15:54:48
152	2	118	8	2	t	500	2019-01-23 14:00:00	2019-01-23 14:50:00	50	f	f	t	2019-01-27 15:55:36	2019-01-27 15:55:36
153	2	134	15	2	t	500	2019-01-23 15:00:00	2019-01-23 15:30:00	30	f	f	t	2019-01-27 15:56:08	2019-01-27 15:56:08
154	2	10	10	3	t	500	2019-01-23 15:00:00	2019-01-23 15:45:00	45	f	f	t	2019-01-27 15:56:44	2019-01-27 15:56:44
155	2	147	15	3	t	500	2019-01-23 15:30:00	2019-01-23 16:15:00	45	t	t	t	2019-01-27 16:01:33	2019-01-27 16:01:33
156	2	114	8	3	t	500	2019-01-23 17:30:00	2019-01-23 18:15:00	45	f	f	t	2019-01-27 16:04:28	2019-01-27 16:04:28
157	2	136	15	3	t	500	2019-01-23 17:45:00	2019-01-23 18:15:00	30	f	f	t	2019-01-27 16:09:04	2019-01-27 16:09:04
158	2	73	11	3	t	500	2019-01-23 18:00:00	2019-01-23 18:55:00	55	f	f	t	2019-01-27 16:09:31	2019-01-27 16:09:31
159	2	45	10	4	t	500	2019-01-23 18:00:00	2019-01-23 19:00:00	60	f	f	t	2019-01-27 16:10:05	2019-01-27 16:10:05
160	2	32	15	3	t	500	2019-01-23 18:15:00	2019-01-23 19:00:00	45	f	f	t	2019-01-27 16:10:53	2019-01-27 16:10:53
161	2	31	8	3	t	500	2019-01-23 18:30:00	2019-01-23 19:00:00	30	f	f	t	2019-01-27 16:11:44	2019-01-27 16:11:44
162	2	80	11	3	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 16:12:28	2019-01-27 16:12:28
163	2	139	15	3	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 16:16:49	2019-01-27 16:16:49
164	2	111	8	3	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 16:17:40	2019-01-27 16:17:40
165	2	5	10	3	t	500	2019-01-23 19:00:00	2019-01-23 19:55:00	55	f	f	t	2019-01-27 16:19:09	2019-01-27 16:19:09
166	2	145	15	2	t	500	2019-01-23 19:45:00	2019-01-23 20:45:00	60	t	t	t	2019-01-27 16:20:11	2019-01-27 16:20:11
167	2	91	10	2	t	500	2019-01-23 20:00:00	2019-01-23 20:45:00	45	f	f	t	2019-01-27 16:20:48	2019-01-27 16:20:48
168	2	101	8	2	t	500	2019-01-23 20:00:00	2019-01-23 20:50:00	50	f	f	t	2019-01-27 16:21:57	2019-01-27 16:21:57
169	2	63	13	3	t	500	2019-01-24 07:30:00	2019-01-24 08:00:00	30	f	f	f	2019-01-27 16:24:48	2019-01-27 16:24:48
170	2	7	10	3	t	500	2019-01-24 08:00:00	2019-01-24 08:30:00	30	f	f	t	2019-01-27 16:27:23	2019-01-27 16:27:23
171	2	119	8	4	t	500	2019-01-24 10:00:00	2019-01-24 10:50:00	50	f	f	t	2019-01-27 16:28:14	2019-01-27 16:28:14
172	2	11	10	4	t	500	2019-01-24 10:00:00	2019-01-24 10:55:00	55	f	f	t	2019-01-27 16:28:49	2019-01-27 16:28:49
173	2	139	15	3	t	500	2019-01-24 11:00:00	2019-01-24 11:55:00	55	f	f	t	2019-01-27 16:29:15	2019-01-27 16:29:15
174	2	93	10	2	t	500	2019-01-24 11:00:00	2019-01-24 11:55:00	55	f	f	t	2019-01-27 16:29:58	2019-01-27 16:29:58
175	2	45	10	4	t	500	2019-01-24 12:00:00	2019-01-24 13:00:00	60	f	f	t	2019-01-27 16:59:11	2019-01-27 16:59:11
176	2	91	10	2	t	500	2019-01-24 13:00:00	2019-01-24 13:45:00	45	f	f	t	2019-01-27 16:59:39	2019-01-27 16:59:39
177	2	116	8	3	t	500	2019-01-24 14:00:00	2019-01-24 14:50:00	50	f	f	t	2019-01-27 17:00:21	2019-01-27 17:00:21
178	2	98	10	2	t	500	2019-01-24 14:00:00	2019-01-24 14:55:00	55	t	t	t	2019-01-27 17:00:58	2019-01-27 17:00:58
179	2	141	15	3	t	500	2019-01-24 17:45:00	2019-01-24 18:30:00	45	f	f	t	2019-01-27 17:01:41	2019-01-27 17:01:41
180	2	141	15	4	t	500	2019-01-24 17:45:00	2019-01-24 18:30:00	45	f	f	t	2019-01-27 17:02:09	2019-01-27 17:02:09
181	2	118	8	2	t	500	2019-01-24 18:00:00	2019-01-24 18:50:00	50	f	f	t	2019-01-27 17:03:01	2019-01-27 17:03:01
182	2	14	13	3	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	t	t	t	2019-01-27 17:03:33	2019-01-27 17:03:33
183	2	36	11	3	t	500	2019-01-24 18:00:00	2019-01-24 19:00:00	60	t	f	t	2019-01-27 17:04:33	2019-01-27 17:04:33
184	2	47	10	2	t	500	2019-01-24 18:00:00	2019-01-24 19:00:00	60	f	f	t	2019-01-27 17:07:49	2019-01-27 17:07:49
185	2	134	15	2	t	500	2019-01-24 18:30:00	2019-01-24 19:00:00	30	f	f	t	2019-01-27 17:09:07	2019-01-27 17:09:07
186	2	30	15	2	t	500	2019-01-24 19:00:00	2019-01-24 19:30:00	30	f	f	t	2019-01-27 17:09:46	2019-01-27 17:09:46
187	2	70	10	3	t	500	2019-01-24 19:00:00	2019-01-24 19:45:00	45	f	f	t	2019-01-27 17:10:32	2019-01-27 17:10:32
188	2	24	8	2	t	500	2019-01-24 19:00:00	2019-01-24 19:45:00	45	f	f	t	2019-01-27 17:11:21	2019-01-27 17:11:21
189	2	29	15	3	t	500	2019-01-24 19:30:00	2019-01-24 20:00:00	30	f	f	t	2019-01-27 17:12:06	2019-01-27 17:12:06
190	2	7	11	3	t	500	2019-01-24 20:00:00	2019-01-24 20:30:00	30	f	f	t	2019-01-27 17:12:37	2019-01-27 17:12:37
191	2	100	11	2	t	500	2019-01-24 20:30:00	2019-01-24 21:25:00	55	t	t	t	2019-01-27 17:13:25	2019-01-27 17:13:25
192	2	35	11	4	t	500	2019-01-24 20:30:00	2019-01-24 21:30:00	60	f	f	t	2019-01-27 17:14:03	2019-01-27 17:14:03
193	2	22	10	3	t	500	2019-01-24 20:30:00	2019-01-24 22:00:00	90	f	f	t	2019-01-27 17:14:45	2019-01-27 17:14:45
194	2	53	13	2	t	500	2019-01-25 09:00:00	2019-01-25 09:45:00	45	f	f	t	2019-01-27 17:28:26	2019-01-27 17:28:26
195	2	118	8	2	t	500	2019-01-25 10:00:00	2019-01-25 10:50:00	50	f	f	t	2019-01-27 17:31:57	2019-01-27 17:31:57
196	2	32	15	3	t	500	2019-01-25 11:00:00	2019-01-25 11:45:00	45	f	f	t	2019-01-27 17:39:44	2019-01-27 17:39:44
197	2	5	10	3	t	500	2019-01-25 11:00:00	2019-01-25 11:55:00	55	f	f	t	2019-01-27 17:40:16	2019-01-27 17:40:16
198	2	14	13	3	t	500	2019-01-25 12:00:00	2019-01-25 12:55:00	55	t	t	t	2019-01-27 17:40:48	2019-01-27 17:40:48
199	2	145	15	2	t	500	2019-01-25 12:00:00	2019-01-25 13:00:00	60	t	t	t	2019-01-27 17:41:16	2019-01-27 17:41:16
200	2	119	8	3	t	500	2019-01-25 14:00:00	2019-01-25 14:50:00	50	f	f	t	2019-01-27 17:45:19	2019-01-27 17:45:19
201	2	62	13	3	t	500	2019-01-25 15:00:00	2019-01-25 15:30:00	30	f	f	t	2019-01-27 17:45:50	2019-01-27 17:45:50
202	2	138	15	2	t	500	2019-01-25 15:00:00	2019-01-25 15:30:00	30	f	f	t	2019-01-27 17:46:22	2019-01-27 17:46:22
203	2	7	10	3	t	500	2019-01-25 15:30:00	2019-01-25 16:00:00	30	f	f	t	2019-01-27 17:46:53	2019-01-27 17:46:53
204	2	150	13	3	t	500	2019-01-25 16:00:00	2019-01-25 16:30:00	30	f	f	t	2019-01-27 17:47:31	2019-01-27 17:47:31
205	2	91	10	3	t	500	2019-01-25 16:00:00	2019-01-25 16:45:00	45	f	f	t	2019-01-27 17:48:05	2019-01-27 17:48:05
206	2	151	13	3	t	500	2019-01-25 16:30:00	2019-01-25 17:25:00	55	f	f	t	2019-01-27 17:48:50	2019-01-27 17:48:50
207	2	147	12	3	t	500	2019-01-25 17:30:00	2019-01-25 18:15:00	45	t	t	t	2019-01-27 17:49:35	2019-01-27 17:49:35
208	2	11	10	4	t	500	2019-01-25 18:00:00	2019-01-25 18:55:00	55	f	f	t	2019-01-27 17:50:12	2019-01-27 17:50:12
209	2	31	8	2	t	500	2019-01-25 18:30:00	2019-01-25 19:00:00	30	f	f	t	2019-01-27 17:50:57	2019-01-27 17:50:57
210	2	156	15	2	t	500	2019-01-25 18:30:00	2019-01-25 19:00:00	30	t	t	t	2019-01-27 18:00:21	2019-01-27 18:00:21
211	2	29	15	3	t	500	2019-01-25 19:00:00	2019-01-25 19:30:00	30	f	f	t	2019-01-27 18:01:00	2019-01-27 18:01:00
212	2	111	8	2	t	500	2019-01-25 19:00:00	2019-01-25 19:45:00	45	f	f	t	2019-01-27 18:01:43	2019-01-27 18:01:43
213	2	9	13	4	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	t	t	t	2019-01-27 18:02:21	2019-01-27 18:02:21
214	2	43	13	3	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	t	t	t	2019-01-27 18:03:11	2019-01-27 18:03:11
215	2	45	10	4	t	500	2019-01-25 19:00:00	2019-01-25 20:00:00	60	f	f	t	2019-01-27 18:04:02	2019-01-27 18:04:02
216	2	137	15	3	t	500	2019-01-25 19:30:00	2019-01-25 20:15:00	45	f	f	t	2019-01-27 18:04:43	2019-01-27 18:04:43
217	2	91	10	2	t	500	2019-01-25 20:00:00	2019-01-25 20:45:00	45	f	f	t	2019-01-27 18:05:17	2019-01-27 18:05:17
218	2	117	8	3	t	500	2019-01-25 20:00:00	2019-01-25 20:50:00	50	f	f	t	2019-01-27 18:05:52	2019-01-27 18:05:52
219	2	155	15	3	t	500	2019-01-25 20:15:00	2019-01-25 21:00:00	45	t	t	t	2019-01-27 18:06:27	2019-01-27 18:06:27
220	2	22	10	2	t	500	2019-01-26 08:30:00	2019-01-26 10:00:00	90	f	f	t	2019-01-27 18:11:10	2019-01-27 18:11:10
221	2	24	8	2	t	500	2019-01-26 11:00:00	2019-01-26 11:45:00	45	f	f	t	2019-01-27 18:11:42	2019-01-27 18:11:42
222	2	28	10	4	t	500	2019-01-26 11:00:00	2019-01-26 12:00:00	60	f	f	t	2019-01-27 18:12:14	2019-01-27 18:12:14
223	2	29	15	2	t	500	2019-01-26 11:30:00	2019-01-26 12:00:00	30	f	f	t	2019-01-27 18:13:25	2019-01-27 18:13:25
224	2	155	15	3	t	500	2019-01-26 12:00:00	2019-01-26 12:45:00	45	t	t	t	2019-01-27 18:13:56	2019-01-27 18:13:56
225	2	118	8	2	t	500	2019-01-26 12:00:00	2019-01-26 12:50:00	50	f	f	t	2019-01-27 18:14:44	2019-01-27 18:14:44
226	2	47	10	2	t	500	2019-01-26 12:00:00	2019-01-26 13:00:00	60	f	f	t	2019-01-27 18:15:38	2019-01-27 18:15:38
227	2	137	15	2	t	500	2019-01-26 13:00:00	2019-01-26 13:45:00	45	f	f	t	2019-01-27 18:16:10	2019-01-27 18:16:10
228	2	4	10	3	t	500	2019-01-26 13:00:00	2019-01-26 13:55:00	55	f	f	t	2019-01-27 18:16:47	2019-01-27 18:16:47
229	2	156	15	2	t	500	2019-01-26 14:00:00	2019-01-26 14:30:00	30	t	t	t	2019-01-27 18:17:24	2019-01-27 18:17:24
230	2	114	8	2	t	500	2019-01-26 14:00:00	2019-01-26 14:45:00	45	f	f	t	2019-01-27 18:18:06	2019-01-27 18:18:06
231	2	149	15	3	t	500	2019-01-26 15:00:00	2019-01-26 15:45:00	45	t	f	t	2019-01-27 18:19:36	2019-01-27 18:19:36
232	2	72	10	3	f	500	2019-01-26 15:00:00	2019-01-26 15:55:00	55	f	f	t	2019-01-27 18:20:49	2019-01-27 18:20:54
233	2	139	15	3	t	500	2019-01-26 15:45:00	2019-01-26 16:30:00	45	f	f	t	2019-01-27 18:21:32	2019-01-27 18:21:32
234	2	73	10	3	t	500	2019-01-26 16:00:00	2019-01-26 16:55:00	55	f	f	t	2019-01-27 18:22:07	2019-01-27 18:22:07
235	2	149	15	2	t	500	2019-01-26 16:30:00	2019-01-26 17:15:00	45	t	f	t	2019-01-27 18:23:04	2019-01-27 18:23:04
236	2	73	10	3	t	500	2019-01-26 17:00:00	2019-01-26 17:55:00	55	t	t	t	2019-01-27 18:23:43	2019-01-27 18:23:43
237	2	31	8	2	t	500	2019-01-27 11:00:00	2019-01-27 11:30:00	30	f	f	t	2019-01-27 18:24:26	2019-01-27 18:24:26
238	2	5	10	3	t	500	2019-01-27 11:00:00	2019-01-27 11:55:00	55	f	f	t	2019-01-27 18:25:00	2019-01-27 18:25:00
239	2	30	15	3	t	500	2019-01-27 11:45:00	2019-01-27 12:15:00	30	f	f	t	2019-01-27 18:26:17	2019-01-27 18:26:17
240	2	91	10	2	t	500	2019-01-27 12:00:00	2019-01-27 12:45:00	45	f	f	t	2019-01-27 18:27:04	2019-01-27 18:27:04
241	2	119	8	4	t	500	2019-01-27 12:00:00	2019-01-27 12:50:00	50	f	f	t	2019-01-27 18:27:40	2019-01-27 18:27:40
242	2	29	15	3	t	500	2019-01-27 12:15:00	2019-01-27 12:45:00	30	f	f	t	2019-01-27 18:28:17	2019-01-27 18:28:17
243	2	32	15	3	t	500	2019-01-27 12:45:00	2019-01-27 13:30:00	45	f	f	t	2019-01-27 18:28:50	2019-01-27 18:28:50
244	2	145	15	2	t	500	2019-01-27 13:30:00	2019-01-27 14:30:00	60	t	t	t	2019-01-27 18:29:54	2019-01-27 18:29:54
245	2	111	8	2	t	500	2019-01-27 14:00:00	2019-01-27 14:45:00	45	f	f	t	2019-01-27 18:30:33	2019-01-27 18:30:33
246	2	151	13	4	t	500	2019-01-27 14:30:00	2019-01-27 15:25:00	55	f	f	t	2019-01-27 18:31:08	2019-01-27 18:31:08
247	2	11	10	4	t	500	2019-01-27 15:00:00	2019-01-27 15:55:00	55	f	f	t	2019-01-27 18:31:59	2019-01-27 18:31:59
248	2	141	15	3	t	500	2019-01-27 15:30:00	2019-01-27 16:15:00	45	f	f	t	2019-01-27 18:32:39	2019-01-27 18:32:39
249	2	91	10	3	t	500	2019-01-27 16:00:00	2019-01-27 16:45:00	45	f	f	t	2019-01-27 18:33:43	2019-01-27 18:33:43
250	2	98	11	3	t	500	2019-01-27 16:00:00	2019-01-27 16:55:00	55	t	t	t	2019-01-27 18:34:19	2019-01-27 18:34:19
251	2	147	15	3	t	500	2019-01-27 16:15:00	2019-01-27 17:00:00	45	t	t	t	2019-01-27 18:34:52	2019-01-27 18:34:52
252	8	11	30	4	t	500	2019-01-21 07:00:00	2019-01-21 07:55:00	55	f	f	t	2019-01-27 18:38:24	2019-01-27 18:38:24
253	8	4	38	3	t	500	2019-01-21 10:00:00	2019-01-21 10:55:00	55	f	f	t	2019-01-27 18:38:56	2019-01-27 18:38:56
254	8	49	39	4	t	500	2019-01-21 11:00:00	2019-01-21 11:45:00	45	t	f	t	2019-01-27 18:43:12	2019-01-27 18:43:12
255	8	91	38	2	t	500	2019-01-21 12:00:00	2019-01-21 12:45:00	45	f	f	t	2019-01-27 18:50:29	2019-01-27 18:50:29
256	8	10	38	4	t	500	2019-01-21 17:00:00	2019-01-21 17:45:00	45	f	f	t	2019-01-27 18:51:03	2019-01-27 18:51:03
257	8	8	30	3	t	500	2019-01-21 18:00:00	2019-01-21 18:30:00	30	f	f	t	2019-01-27 18:52:00	2019-01-27 18:52:00
258	8	90	30	2	t	500	2019-01-21 18:30:00	2019-01-21 19:00:00	30	f	f	t	2019-01-27 18:52:28	2019-01-27 18:52:28
259	8	71	38	3	t	500	2019-01-21 19:00:00	2019-01-21 19:45:00	45	f	f	t	2019-01-27 18:53:01	2019-01-27 18:53:01
260	8	49	31	4	t	500	2019-01-21 19:00:00	2019-01-21 19:45:00	45	t	f	t	2019-01-27 18:53:39	2019-01-27 18:53:39
261	8	65	38	3	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-27 18:54:09	2019-01-27 18:54:09
262	8	35	33	4	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-27 18:54:33	2019-01-27 18:54:33
263	8	45	38	4	t	500	2019-01-21 20:00:00	2019-01-21 20:55:00	55	f	f	t	2019-01-27 18:55:38	2019-01-27 18:55:38
264	8	91	30	2	t	500	2019-01-21 21:00:00	2019-01-21 21:45:00	45	f	f	t	2019-01-27 18:56:09	2019-01-27 18:56:09
265	8	63	31	3	t	500	2019-01-22 08:00:00	2019-01-22 08:40:00	40	f	f	t	2019-01-27 19:01:46	2019-01-27 19:01:46
266	8	10	38	4	t	500	2019-01-22 11:00:00	2019-01-22 11:55:00	55	f	f	t	2019-01-27 19:05:52	2019-01-27 19:05:52
267	8	21	38	2	t	500	2019-01-22 12:30:00	2019-01-22 13:00:00	30	f	f	t	2019-01-27 19:06:25	2019-01-27 19:06:25
268	8	45	38	4	t	500	2019-01-22 14:00:00	2019-01-22 14:55:00	55	f	f	t	2019-01-27 19:06:51	2019-01-27 19:06:51
269	8	91	38	2	t	500	2019-01-22 15:10:00	2019-01-22 15:55:00	45	f	f	t	2019-01-27 19:07:23	2019-01-27 19:07:23
270	8	56	37	2	t	500	2019-01-22 18:00:00	2019-01-22 18:45:00	45	f	f	t	2019-01-27 19:07:53	2019-01-27 19:07:53
271	8	92	38	2	t	500	2019-01-22 18:00:00	2019-01-22 18:55:00	55	f	f	t	2019-01-27 19:08:21	2019-01-27 19:08:21
272	8	5	38	3	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-27 19:08:47	2019-01-27 19:08:47
273	8	47	37	2	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-27 19:09:12	2019-01-27 19:09:12
274	8	49	34	4	t	500	2019-01-22 20:00:00	2019-01-22 20:45:00	45	t	f	t	2019-01-27 19:09:44	2019-01-27 19:09:44
275	8	9	30	3	t	500	2019-01-22 20:00:00	2019-01-22 20:55:00	55	t	f	t	2019-01-27 19:10:23	2019-01-27 19:10:23
276	8	6	30	3	t	500	2019-01-22 20:00:00	2019-01-22 20:55:00	55	f	f	t	2019-01-27 19:10:53	2019-01-27 19:10:53
277	8	11	33	4	t	500	2019-01-23 07:00:00	2019-01-23 07:55:00	55	f	f	t	2019-01-27 19:41:42	2019-01-27 19:41:42
278	8	9	38	3	t	500	2019-01-23 08:00:00	2019-01-23 09:00:00	60	t	f	t	2019-01-27 19:42:08	2019-01-27 19:42:08
279	8	91	30	2	t	500	2019-01-23 09:00:00	2019-01-23 09:45:00	45	f	f	t	2019-01-27 19:42:46	2019-01-27 19:42:46
280	8	92	30	2	t	500	2019-01-23 11:00:00	2019-01-23 11:55:00	55	f	f	t	2019-01-27 19:43:07	2019-01-27 19:43:07
281	8	5	38	3	t	500	2019-01-23 12:00:00	2019-01-23 12:55:00	55	f	f	t	2019-01-27 19:43:38	2019-01-27 19:43:38
282	8	49	39	4	t	500	2019-01-23 15:00:00	2019-01-23 15:45:00	45	t	f	t	2019-01-27 19:44:11	2019-01-27 19:44:11
283	8	58	37	2	t	500	2019-01-23 18:00:00	2019-01-23 18:45:00	45	f	f	t	2019-01-27 19:44:59	2019-01-27 19:44:59
284	8	10	38	3	t	500	2019-01-23 18:00:00	2019-01-23 18:55:00	55	f	f	t	2019-01-27 19:47:12	2019-01-27 19:47:12
285	8	71	37	3	t	500	2019-01-23 19:00:00	2019-01-23 19:55:00	55	f	f	t	2019-01-27 19:47:52	2019-01-27 19:47:52
286	8	45	38	4	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 19:48:50	2019-01-27 19:48:50
287	8	35	40	4	t	500	2019-01-23 19:00:00	2019-01-23 19:55:00	55	f	f	t	2019-01-27 19:49:47	2019-01-27 19:49:47
288	8	21	30	2	t	500	2019-01-23 20:00:00	2019-01-23 21:30:00	90	f	f	t	2019-01-27 19:50:32	2019-01-27 19:50:32
289	8	94	38	2	t	500	2019-01-23 20:10:00	2019-01-23 20:55:00	45	f	f	t	2019-01-27 19:51:07	2019-01-27 19:51:07
290	8	63	31	3	t	500	2019-01-24 08:00:00	2019-01-24 08:40:00	40	f	f	t	2019-01-27 20:25:36	2019-01-27 20:25:36
291	8	5	38	4	t	500	2019-01-24 11:00:00	2019-01-24 11:55:00	55	f	f	t	2019-01-27 20:26:01	2019-01-27 20:26:01
292	8	91	38	2	t	500	2019-01-24 12:00:00	2019-01-24 12:45:00	45	f	f	t	2019-01-27 20:30:56	2019-01-27 20:30:56
293	8	10	38	3	t	500	2019-01-24 14:00:00	2019-01-24 14:55:00	55	f	f	t	2019-01-27 20:31:27	2019-01-27 20:31:27
294	8	10	38	3	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	f	f	t	2019-01-27 20:31:50	2019-01-27 20:31:50
295	8	92	38	2	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	f	f	t	2019-01-27 20:32:17	2019-01-27 20:32:17
297	8	74	30	3	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	f	f	t	2019-01-27 20:35:36	2019-01-27 20:35:36
296	8	49	39	4	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	t	f	t	2019-01-27 20:33:33	2019-01-27 20:35:39
298	8	4	38	3	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	f	f	t	2019-01-27 20:36:09	2019-01-27 20:36:09
299	8	8	30	3	t	500	2019-01-24 20:00:00	2019-01-24 20:30:00	30	f	f	t	2019-01-27 20:36:45	2019-01-27 20:36:45
300	8	47	38	2	t	500	2019-01-24 20:00:00	2019-01-24 20:55:00	55	f	f	t	2019-01-27 20:37:10	2019-01-27 20:37:10
301	8	90	30	2	t	500	2019-01-24 20:30:00	2019-01-24 21:00:00	30	f	f	t	2019-01-27 20:37:33	2019-01-27 20:37:33
303	8	49	39	4	t	500	2019-01-25 08:00:00	2019-01-25 08:45:00	45	t	f	t	2019-01-27 20:40:05	2019-01-27 20:40:05
302	8	11	36	4	t	500	2019-01-25 07:00:00	2019-01-25 07:55:00	55	t	f	t	2019-01-27 20:39:45	2019-01-27 20:40:11
304	8	47	38	3	t	500	2019-01-25 12:00:00	2019-01-25 12:55:00	55	f	f	t	2019-01-27 20:40:29	2019-01-27 20:40:29
305	8	11	38	3	t	500	2019-01-25 14:00:00	2019-01-25 14:55:00	55	f	f	t	2019-01-27 20:40:55	2019-01-27 20:40:55
306	8	91	38	2	t	500	2019-01-25 15:00:00	2019-01-25 15:45:00	45	f	f	t	2019-01-27 20:41:20	2019-01-27 20:41:20
307	8	5	38	3	t	500	2019-01-25 18:00:00	2019-01-25 18:55:00	55	f	f	t	2019-01-27 20:52:59	2019-01-27 20:52:59
308	8	77	37	3	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	f	f	t	2019-01-27 20:56:00	2019-01-27 20:56:00
309	8	45	38	4	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	f	f	t	2019-01-27 20:56:22	2019-01-27 20:56:22
310	8	35	33	4	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	f	f	t	2019-01-27 20:56:46	2019-01-27 20:56:46
311	8	65	37	3	t	500	2019-01-25 20:00:00	2019-01-25 20:55:00	55	f	f	t	2019-01-27 20:57:12	2019-01-27 20:57:12
312	8	22	37	2	t	500	2019-01-25 20:00:00	2019-01-25 21:30:00	90	f	f	t	2019-01-27 20:57:39	2019-01-27 20:57:39
313	8	91	38	2	t	500	2019-01-25 21:00:00	2019-01-25 21:45:00	45	f	f	t	2019-01-27 20:58:13	2019-01-27 20:58:13
314	8	21	38	2	t	500	2019-01-26 08:30:00	2019-01-26 10:00:00	90	f	f	t	2019-01-27 20:58:55	2019-01-27 20:58:55
315	8	13	38	4	t	500	2019-01-26 11:00:00	2019-01-26 11:45:00	45	f	f	t	2019-01-27 20:59:19	2019-01-27 20:59:19
316	8	45	38	4	t	500	2019-01-26 12:00:00	2019-01-26 12:55:00	55	f	f	t	2019-01-27 20:59:39	2019-01-27 20:59:39
317	8	91	38	2	t	500	2019-01-26 13:00:00	2019-01-26 13:45:00	45	f	f	t	2019-01-27 21:02:13	2019-01-27 21:02:13
318	8	9	30	4	t	500	2019-01-26 17:00:00	2019-01-26 17:55:00	55	t	f	t	2019-01-27 21:02:35	2019-01-27 21:02:35
319	8	47	30	2	t	500	2019-01-26 18:00:00	2019-01-26 18:55:00	55	f	f	t	2019-01-27 21:03:02	2019-01-27 21:03:02
320	8	79	30	3	t	500	2019-01-27 11:00:00	2019-01-27 11:55:00	55	f	f	t	2019-01-27 21:06:46	2019-01-27 21:06:46
321	8	5	38	3	t	500	2019-01-27 11:00:00	2019-01-27 11:55:00	55	f	f	t	2019-01-27 21:07:13	2019-01-27 21:07:13
322	8	78	30	3	t	500	2019-01-27 12:00:00	2019-01-27 12:55:00	55	f	f	t	2019-01-27 21:07:37	2019-01-27 21:07:37
323	8	41	39	3	t	500	2019-01-27 12:00:00	2019-01-27 12:55:00	55	t	f	t	2019-01-27 21:08:02	2019-01-27 21:08:02
324	8	91	38	2	t	500	2019-01-27 13:00:00	2019-01-27 13:45:00	45	f	f	t	2019-01-27 21:08:33	2019-01-27 21:08:33
325	8	49	39	4	t	500	2019-01-27 14:00:00	2019-01-27 14:45:00	45	f	f	t	2019-01-27 21:08:51	2019-01-27 21:08:51
326	5	103	29	3	t	500	2019-01-21 08:00:00	2019-01-21 08:50:00	50	f	f	t	2019-01-27 21:40:56	2019-01-27 21:40:56
327	5	6	19	3	t	500	2019-01-21 09:00:00	2019-01-21 09:55:00	55	f	f	t	2019-01-27 21:41:24	2019-01-27 21:41:24
328	5	113	29	4	t	500	2019-01-21 10:00:00	2019-01-21 10:55:00	55	f	f	t	2019-01-27 21:42:20	2019-01-27 21:42:20
329	5	6	19	3	t	500	2019-01-21 10:00:00	2019-01-21 11:30:00	90	f	f	t	2019-01-27 21:42:48	2019-01-27 21:42:48
330	5	22	28	2	t	500	2019-01-21 10:00:00	2019-01-21 11:30:00	90	f	f	t	2019-01-27 21:49:18	2019-01-27 21:49:18
331	5	4	19	2	t	500	2019-01-21 12:00:00	2019-01-21 12:55:00	55	f	f	t	2019-01-27 21:49:50	2019-01-27 21:49:50
333	5	103	29	3	t	500	2019-01-21 13:00:00	2019-01-21 13:50:00	50	f	f	t	2019-01-27 21:51:03	2019-01-27 21:51:03
334	5	141	28	2	t	500	2019-01-21 15:00:00	2019-01-21 15:45:00	45	f	f	t	2019-01-27 21:52:00	2019-01-27 21:52:00
335	5	45	19	4	t	500	2019-01-21 15:00:00	2019-01-21 15:55:00	55	f	f	t	2019-01-27 21:52:25	2019-01-27 21:52:25
336	5	152	28	2	t	500	2019-01-21 15:45:00	2019-01-21 16:15:00	30	f	f	t	2019-01-27 21:53:07	2019-01-27 21:53:07
332	5	145	24	2	t	500	2019-01-21 13:00:00	2019-01-21 13:45:00	45	f	t	t	2019-01-27 21:50:27	2019-01-27 21:53:16
337	5	91	19	2	t	500	2019-01-21 16:00:00	2019-01-21 16:45:00	45	f	f	t	2019-01-27 22:05:56	2019-01-27 22:05:56
338	5	150	20	2	t	500	2019-01-21 16:30:00	2019-01-21 17:00:00	30	f	f	t	2019-01-27 22:06:38	2019-01-27 22:06:38
339	5	111	29	4	t	500	2019-01-21 16:30:00	2019-01-21 17:10:00	40	f	t	t	2019-01-27 22:07:09	2019-01-27 22:07:09
340	5	151	26	3	t	500	2019-01-21 17:00:00	2019-01-21 17:55:00	55	f	f	t	2019-01-27 22:24:34	2019-01-27 22:24:34
341	5	24	29	3	t	500	2019-01-21 18:00:00	2019-01-21 18:40:00	40	f	f	t	2019-01-27 22:25:03	2019-01-27 22:25:03
342	5	154	28	2	t	500	2019-01-21 18:00:00	2019-01-21 18:40:00	40	f	f	t	2019-01-27 22:29:25	2019-01-27 22:29:25
343	5	101	29	4	t	500	2019-01-21 18:00:00	2019-01-21 18:50:00	50	f	f	t	2019-01-27 22:30:11	2019-01-27 22:30:11
344	5	71	19	3	t	500	2019-01-21 18:00:00	2019-01-21 18:55:00	55	f	f	t	2019-01-27 22:48:34	2019-01-27 22:48:34
345	5	138	25	2	t	500	2019-01-21 18:45:00	2019-01-21 19:15:00	30	f	f	t	2019-01-27 22:49:03	2019-01-27 22:49:03
346	5	101	29	4	t	500	2019-01-21 19:00:00	2019-01-21 19:50:00	50	f	f	t	2019-01-27 22:49:30	2019-01-27 22:49:30
347	5	4	19	3	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-27 22:49:54	2019-01-27 22:49:54
348	5	11	28	4	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-27 22:50:15	2019-01-27 22:50:15
349	5	30	25	2	t	500	2019-01-21 19:30:00	2019-01-21 20:00:00	30	f	f	t	2019-01-27 22:50:43	2019-01-27 22:50:43
350	5	129	29	3	t	500	2019-01-21 20:00:00	2019-01-21 20:45:00	45	f	f	t	2019-01-27 22:51:08	2019-01-27 22:51:08
351	5	49	23	4	t	500	2019-01-21 20:00:00	2019-01-21 20:50:00	50	t	f	t	2019-01-27 22:51:39	2019-01-27 22:51:39
352	5	135	25	2	t	500	2019-01-21 20:15:00	2019-01-21 20:45:00	30	f	f	t	2019-01-27 22:52:06	2019-01-27 22:52:06
353	5	62	20	3	t	500	2019-01-22 08:00:00	2019-01-22 08:30:00	30	t	f	t	2019-01-27 22:57:55	2019-01-27 22:57:55
354	5	107	29	4	t	500	2019-01-22 08:00:00	2019-01-22 08:50:00	50	f	f	t	2019-01-27 22:58:13	2019-01-27 22:58:13
355	5	5	19	3	t	500	2019-01-22 08:30:00	2019-01-22 09:25:00	55	f	f	t	2019-01-27 22:58:40	2019-01-27 22:58:40
356	5	90	19	2	t	500	2019-01-22 09:30:00	2019-01-22 10:00:00	30	f	f	t	2019-01-27 22:59:00	2019-01-27 22:59:00
357	5	104	29	2	t	500	2019-01-22 12:00:00	2019-01-22 12:50:00	50	f	f	t	2019-01-27 23:00:14	2019-01-27 23:00:14
358	5	8	19	3	t	500	2019-01-22 13:00:00	2019-01-22 13:30:00	30	f	f	t	2019-01-27 23:00:36	2019-01-27 23:00:36
359	5	90	19	2	t	500	2019-01-22 13:30:00	2019-01-22 14:00:00	30	f	f	t	2019-01-27 23:00:57	2019-01-27 23:00:57
360	5	63	20	4	t	500	2019-01-22 14:00:00	2019-01-22 14:40:00	40	t	f	t	2019-01-27 23:01:28	2019-01-27 23:01:28
361	5	32	28	2	t	500	2019-01-22 15:00:00	2019-01-22 15:45:00	45	f	f	t	2019-01-27 23:01:56	2019-01-27 23:01:56
362	5	30	28	2	t	500	2019-01-22 16:00:00	2019-01-22 16:30:00	30	f	f	t	2019-01-27 23:02:18	2019-01-27 23:02:18
363	5	135	28	2	t	500	2019-01-22 16:45:00	2019-01-22 17:15:00	30	f	f	t	2019-01-27 23:02:58	2019-01-27 23:02:58
364	5	24	29	3	t	500	2019-01-22 17:00:00	2019-01-22 17:40:00	40	t	f	t	2019-01-27 23:03:22	2019-01-27 23:03:22
365	5	30	28	2	t	500	2019-01-22 17:30:00	2019-01-22 18:00:00	30	f	f	t	2019-01-27 23:05:13	2019-01-27 23:05:13
366	5	139	28	3	t	500	2019-01-22 18:00:00	2019-01-22 18:45:00	45	f	f	t	2019-01-27 23:05:45	2019-01-27 23:05:45
367	5	9	21	4	t	500	2019-01-22 18:00:00	2019-01-22 18:55:00	55	t	f	t	2019-01-27 23:06:08	2019-01-27 23:06:08
368	5	31	29	2	t	500	2019-01-22 18:30:00	2019-01-22 19:00:00	30	t	f	t	2019-01-27 23:06:37	2019-01-27 23:06:37
369	5	140	28	3	t	500	2019-01-22 19:00:00	2019-01-22 19:45:00	45	f	f	t	2019-01-27 23:07:07	2019-01-27 23:07:07
370	5	112	29	3	t	500	2019-01-22 19:00:00	2019-01-22 19:45:00	45	f	f	t	2019-01-27 23:07:33	2019-01-27 23:07:33
371	5	35	22	3	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-27 23:07:57	2019-01-27 23:07:57
372	5	45	19	4	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-27 23:08:30	2019-01-27 23:08:30
373	5	113	29	4	t	500	2019-01-22 20:00:00	2019-01-22 20:45:00	45	f	f	t	2019-01-27 23:09:04	2019-01-27 23:09:04
374	5	139	28	3	t	500	2019-01-22 20:00:00	2019-01-22 20:45:00	45	f	f	t	2019-01-27 23:09:27	2019-01-27 23:09:27
375	5	93	19	2	t	500	2019-01-22 20:00:00	2019-01-22 20:55:00	55	f	f	t	2019-01-27 23:09:52	2019-01-27 23:09:52
376	5	91	19	2	t	500	2019-01-23 08:00:00	2019-01-23 08:45:00	45	f	f	t	2019-01-27 23:10:55	2019-01-27 23:10:55
377	5	103	29	3	t	500	2019-01-23 08:00:00	2019-01-23 08:50:00	50	f	f	t	2019-01-27 23:11:22	2019-01-27 23:11:22
378	5	113	29	4	t	500	2019-01-23 09:00:00	2019-01-23 09:45:00	45	f	f	f	2019-01-27 23:12:12	2019-01-27 23:12:22
379	5	6	19	3	t	500	2019-01-23 11:00:00	2019-01-23 11:55:00	55	f	f	t	2019-01-27 23:12:44	2019-01-27 23:12:44
380	5	92	19	2	t	500	2019-01-23 12:00:00	2019-01-23 12:55:00	55	f	f	t	2019-01-27 23:13:05	2019-01-27 23:13:05
381	5	107	29	4	t	500	2019-01-23 13:00:00	2019-01-23 13:50:00	50	f	f	t	2019-01-27 23:13:27	2019-01-27 23:13:27
382	5	45	19	4	t	500	2019-01-23 14:00:00	2019-01-23 14:55:00	55	f	f	t	2019-01-27 23:13:50	2019-01-27 23:13:50
383	5	91	19	2	t	500	2019-01-23 15:00:00	2019-01-23 15:45:00	45	f	f	t	2019-01-27 23:14:18	2019-01-27 23:14:18
384	5	151	26	3	t	500	2019-01-23 15:00:00	2019-01-23 15:55:00	55	f	f	t	2019-01-27 23:14:50	2019-01-27 23:14:50
385	5	153	28	2	t	500	2019-01-23 16:00:00	2019-01-23 16:30:00	30	f	f	t	2019-01-27 23:15:21	2019-01-27 23:15:21
386	5	31	29	2	t	500	2019-01-23 16:30:00	2019-01-23 17:00:00	30	t	f	t	2019-01-27 23:16:08	2019-01-27 23:16:08
387	5	154	28	2	t	500	2019-01-23 16:30:00	2019-01-23 17:10:00	40	f	f	t	2019-01-27 23:16:33	2019-01-27 23:16:33
388	5	11	19	4	t	500	2019-01-23 17:00:00	2019-01-23 17:55:00	55	f	f	t	2019-01-27 23:35:04	2019-01-27 23:35:04
389	5	138	28	2	t	500	2019-01-23 17:15:00	2019-01-23 17:45:00	30	f	f	t	2019-01-27 23:35:32	2019-01-27 23:35:32
390	5	136	28	2	t	500	2019-01-23 17:45:00	2019-01-23 18:15:00	30	f	f	t	2019-01-27 23:36:11	2019-01-27 23:36:11
391	5	63	20	4	t	500	2019-01-23 18:00:00	2019-01-23 18:40:00	40	t	f	t	2019-01-27 23:36:44	2019-01-27 23:36:44
392	5	111	29	3	t	500	2019-01-23 18:00:00	2019-01-23 18:40:00	40	t	f	t	2019-01-27 23:37:13	2019-01-27 23:37:13
393	5	4	19	3	t	500	2019-01-23 18:00:00	2019-01-23 18:55:00	55	f	f	t	2019-01-27 23:37:45	2019-01-27 23:37:45
394	5	30	28	2	t	500	2019-01-23 18:15:00	2019-01-23 18:45:00	30	f	f	t	2019-01-27 23:38:16	2019-01-27 23:38:16
395	5	142	23	3	t	500	2019-01-23 19:00:00	2019-01-23 19:30:00	30	f	f	t	2019-01-27 23:38:44	2019-01-27 23:38:44
396	5	91	28	2	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 23:39:17	2019-01-27 23:39:17
397	5	113	29	3	t	500	2019-01-23 19:00:00	2019-01-23 19:45:00	45	f	f	t	2019-01-27 23:39:42	2019-01-27 23:39:42
398	5	5	19	3	t	500	2019-01-23 19:00:00	2019-01-23 19:55:00	55	f	f	t	2019-01-27 23:41:02	2019-01-27 23:41:02
399	5	153	25	2	t	500	2019-01-23 19:45:00	2019-01-23 20:15:00	30	f	f	t	2019-01-27 23:41:28	2019-01-27 23:41:28
400	5	113	29	3	t	500	2019-01-23 20:00:00	2019-01-23 20:45:00	45	f	f	t	2019-01-27 23:42:06	2019-01-27 23:42:06
401	5	49	23	4	t	500	2019-01-23 20:00:00	2019-01-23 20:50:00	50	t	f	t	2019-01-27 23:42:36	2019-01-27 23:42:36
402	5	22	28	2	t	500	2019-01-23 20:00:00	2019-01-23 21:30:00	90	f	f	t	2019-01-27 23:43:02	2019-01-27 23:43:02
403	5	6	19	3	t	500	2019-01-24 09:00:00	2019-01-24 09:55:00	55	f	f	t	2019-01-27 23:44:04	2019-01-27 23:44:04
404	5	103	29	3	t	500	2019-01-24 10:00:00	2019-01-24 10:50:00	50	f	f	t	2019-01-27 23:47:28	2019-01-27 23:47:28
405	5	5	19	3	t	500	2019-01-24 13:00:00	2019-01-24 13:55:00	55	f	f	t	2019-01-27 23:47:49	2019-01-27 23:47:49
406	5	63	20	4	t	500	2019-01-24 14:00:00	2019-01-24 14:40:00	40	t	f	t	2019-01-27 23:48:14	2019-01-27 23:48:14
407	5	145	24	2	t	500	2019-01-24 14:00:00	2019-01-24 14:45:00	45	f	t	t	2019-01-27 23:48:53	2019-01-27 23:48:53
408	5	139	28	2	t	500	2019-01-24 15:00:00	2019-01-24 15:45:00	45	f	f	t	2019-01-27 23:49:13	2019-01-27 23:49:13
409	5	153	28	2	t	500	2019-01-24 15:45:00	2019-01-24 16:15:00	30	f	f	t	2019-01-27 23:49:52	2019-01-27 23:49:52
410	5	11	19	4	t	500	2019-01-24 16:00:00	2019-01-24 16:55:00	55	f	f	t	2019-01-27 23:50:09	2019-01-27 23:50:09
411	5	135	28	2	t	500	2019-01-24 16:30:00	2019-01-24 17:00:00	30	f	f	t	2019-01-27 23:50:30	2019-01-27 23:50:30
412	5	111	29	3	t	500	2019-01-24 16:30:00	2019-01-24 17:10:00	40	t	f	t	2019-01-27 23:50:51	2019-01-27 23:50:51
413	5	30	28	2	t	500	2019-01-24 17:00:00	2019-01-24 17:30:00	30	f	f	t	2019-01-27 23:51:13	2019-01-27 23:51:13
414	5	126	29	2	t	500	2019-01-24 17:00:00	2019-01-24 17:40:00	40	f	f	t	2019-01-27 23:52:36	2019-01-27 23:52:36
415	5	35	22	3	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	f	f	t	2019-01-27 23:53:13	2019-01-27 23:53:13
416	5	65	19	3	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	f	f	t	2019-01-27 23:53:38	2019-01-27 23:53:38
417	5	144	28	3	t	500	2019-01-24 19:00:00	2019-01-24 19:40:00	40	f	t	t	2019-01-27 23:54:08	2019-01-27 23:54:08
418	5	10	26	4	t	500	2019-01-24 19:00:00	2019-01-24 19:45:00	45	t	f	t	2019-01-27 23:55:17	2019-01-27 23:55:17
419	5	107	29	4	t	500	2019-01-24 19:00:00	2019-01-24 19:50:00	50	f	f	t	2019-01-27 23:55:44	2019-01-27 23:55:44
420	5	45	19	4	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	f	f	t	2019-01-27 23:56:19	2019-01-27 23:56:19
421	5	35	22	3	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	f	f	t	2019-01-27 23:56:43	2019-01-27 23:56:43
422	5	141	28	3	t	500	2019-01-24 19:45:00	2019-01-24 20:30:00	45	f	f	t	2019-01-28 00:03:44	2019-01-28 00:03:44
423	5	113	29	3	t	500	2019-01-24 20:00:00	2019-01-24 20:45:00	45	f	f	t	2019-01-28 00:04:12	2019-01-28 00:04:12
424	5	92	19	2	t	500	2019-01-24 20:00:00	2019-01-24 20:55:00	55	f	f	t	2019-01-28 00:04:34	2019-01-28 00:04:34
425	5	142	23	3	t	500	2019-01-24 20:30:00	2019-01-24 21:00:00	30	f	f	t	2019-01-28 00:05:04	2019-01-28 00:05:04
426	5	115	29	4	t	500	2019-01-24 21:00:00	2019-01-24 21:45:00	45	f	f	t	2019-01-28 00:05:26	2019-01-28 00:05:26
427	5	107	29	4	t	500	2019-01-25 08:00:00	2019-01-25 08:50:00	50	f	f	t	2019-01-28 00:06:20	2019-01-28 00:06:20
428	5	22	28	2	t	500	2019-01-25 10:00:00	2019-01-25 11:30:00	90	f	f	t	2019-01-28 00:06:42	2019-01-28 00:06:42
429	5	24	29	3	t	500	2019-01-25 11:00:00	2019-01-25 11:40:00	40	t	f	t	2019-01-28 00:07:07	2019-01-28 00:07:07
430	5	5	19	3	t	500	2019-01-25 11:00:00	2019-01-25 11:55:00	55	f	f	t	2019-01-28 00:07:42	2019-01-28 00:07:42
431	5	91	19	2	t	500	2019-01-25 12:00:00	2019-01-25 12:45:00	45	f	f	t	2019-01-28 00:08:06	2019-01-28 00:08:06
432	5	145	24	2	t	500	2019-01-25 13:00:00	2019-01-25 13:45:00	45	f	t	t	2019-01-28 00:08:33	2019-01-28 00:08:33
433	5	107	29	4	t	500	2019-01-25 13:00:00	2019-01-25 13:50:00	50	f	f	t	2019-01-28 00:08:57	2019-01-28 00:08:57
434	5	4	19	3	t	500	2019-01-25 14:00:00	2019-01-25 14:55:00	55	f	f	t	2019-01-28 00:09:20	2019-01-28 00:09:20
435	5	63	20	4	t	500	2019-01-25 15:00:00	2019-01-25 15:40:00	40	t	f	t	2019-01-28 00:09:43	2019-01-28 00:09:43
436	5	137	28	2	t	500	2019-01-25 15:00:00	2019-01-25 15:45:00	45	f	f	t	2019-01-28 00:10:04	2019-01-28 00:10:04
437	5	30	28	2	t	500	2019-01-25 16:00:00	2019-01-25 16:30:00	30	f	f	t	2019-01-28 00:10:51	2019-01-28 00:10:51
438	5	141	28	2	t	500	2019-01-25 16:45:00	2019-01-25 17:30:00	45	f	f	t	2019-01-28 00:12:34	2019-01-28 00:12:34
439	5	24	29	3	t	500	2019-01-25 17:00:00	2019-01-25 17:40:00	40	t	f	t	2019-01-28 00:13:33	2019-01-28 00:13:33
440	5	49	23	4	t	500	2019-01-25 17:00:00	2019-01-25 17:50:00	50	t	f	t	2019-01-28 00:14:03	2019-01-28 00:14:03
441	5	140	19	3	t	500	2019-01-25 17:45:00	2019-01-25 18:30:00	45	f	f	t	2019-01-28 00:14:32	2019-01-28 00:14:32
442	5	112	29	3	t	500	2019-01-25 18:00:00	2019-01-25 18:50:00	50	f	f	t	2019-01-28 00:14:59	2019-01-28 00:14:59
443	5	49	23	4	t	500	2019-01-25 18:00:00	2019-01-25 18:50:00	50	t	f	t	2019-01-28 00:15:28	2019-01-28 00:15:28
444	5	71	19	2	t	500	2019-01-25 18:00:00	2019-01-25 18:55:00	55	f	f	t	2019-01-28 00:16:48	2019-01-28 00:16:48
445	5	151	26	3	t	500	2019-01-25 18:45:00	2019-01-25 19:40:00	55	f	f	t	2019-01-28 00:17:17	2019-01-28 00:17:17
446	5	7	19	3	t	500	2019-01-25 19:00:00	2019-01-25 19:30:00	30	f	f	t	2019-01-28 00:17:42	2019-01-28 00:17:42
447	5	103	29	4	t	500	2019-01-25 19:00:00	2019-01-25 19:50:00	50	f	f	t	2019-01-28 00:18:08	2019-01-28 00:18:08
448	5	9	21	4	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	t	f	t	2019-01-28 00:39:12	2019-01-28 00:39:12
449	5	90	19	2	t	500	2019-01-25 19:30:00	2019-01-25 20:00:00	30	f	f	t	2019-01-28 00:39:37	2019-01-28 00:39:37
450	5	30	28	2	t	500	2019-01-25 19:45:00	2019-01-25 20:15:00	30	f	f	t	2019-01-28 00:39:59	2019-01-28 00:39:59
451	5	56	28	2	t	500	2019-01-25 20:00:00	2019-01-25 20:45:00	45	f	f	t	2019-01-28 00:40:29	2019-01-28 00:40:29
452	5	72	19	3	t	500	2019-01-25 20:00:00	2019-01-25 20:55:00	55	f	f	t	2019-01-28 00:40:52	2019-01-28 00:40:52
453	5	135	28	2	t	500	2019-01-25 20:15:00	2019-01-25 20:45:00	30	f	f	t	2019-01-28 00:41:16	2019-01-28 00:41:16
454	5	22	28	2	t	500	2019-01-26 09:05:00	2019-01-26 10:35:00	90	f	f	t	2019-01-28 00:42:18	2019-01-28 00:42:18
455	5	101	29	4	t	500	2019-01-26 10:00:00	2019-01-26 10:50:00	50	f	f	t	2019-01-28 00:43:05	2019-01-28 00:43:05
456	5	6	19	3	t	500	2019-01-26 10:00:00	2019-01-26 10:55:00	55	f	f	t	2019-01-28 00:43:24	2019-01-28 00:43:24
457	5	135	25	2	t	500	2019-01-26 11:00:00	2019-01-26 11:30:00	30	f	f	t	2019-01-28 00:43:56	2019-01-28 00:43:56
458	5	24	29	3	t	500	2019-01-26 11:00:00	2019-01-26 11:40:00	40	t	f	t	2019-01-28 00:44:16	2019-01-28 00:44:16
459	5	91	19	2	t	500	2019-01-26 11:00:00	2019-01-26 11:45:00	45	f	f	t	2019-01-28 00:44:38	2019-01-28 00:44:38
460	5	136	25	2	t	500	2019-01-26 11:30:00	2019-01-26 12:00:00	30	f	f	t	2019-01-28 00:45:01	2019-01-28 00:45:01
461	5	145	24	2	t	500	2019-01-26 11:40:00	2019-01-26 12:20:00	40	t	t	t	2019-01-28 00:45:22	2019-01-28 00:45:22
462	5	31	29	2	t	500	2019-01-26 12:00:00	2019-01-26 12:30:00	30	t	f	t	2019-01-28 00:45:41	2019-01-28 00:45:41
463	5	149	28	2	t	500	2019-01-26 12:00:00	2019-01-26 12:45:00	45	f	t	t	2019-01-28 00:46:06	2019-01-28 00:46:06
464	5	45	19	4	t	500	2019-01-26 12:00:00	2019-01-26 12:55:00	55	f	f	t	2019-01-28 00:46:54	2019-01-28 00:46:54
465	5	32	28	2	t	500	2019-01-26 12:45:00	2019-01-26 13:30:00	45	f	f	t	2019-01-28 00:47:20	2019-01-28 00:47:20
466	5	47	19	2	t	500	2019-01-26 13:00:00	2019-01-26 13:55:00	55	f	f	t	2019-01-28 00:47:44	2019-01-28 00:47:44
467	5	150	20	3	t	500	2019-01-26 13:30:00	2019-01-26 14:00:00	30	f	f	t	2019-01-28 00:48:13	2019-01-28 00:48:13
468	5	111	29	3	t	500	2019-01-26 14:00:00	2019-01-26 14:40:00	40	t	f	t	2019-01-28 00:48:55	2019-01-28 00:48:55
469	5	4	19	3	t	500	2019-01-26 14:40:00	2019-01-26 15:35:00	55	f	f	t	2019-01-28 00:50:01	2019-01-28 00:50:01
470	5	139	28	2	t	500	2019-01-26 14:15:00	2019-01-26 15:00:00	45	f	f	t	2019-01-28 00:51:48	2019-01-28 00:51:48
472	5	139	28	2	t	500	2019-01-26 15:00:00	2019-01-26 15:45:00	45	f	f	t	2019-01-28 01:03:23	2019-01-28 01:03:23
473	5	36	22	3	t	500	2019-01-26 15:00:00	2019-01-26 15:55:00	55	f	f	t	2019-01-28 01:03:50	2019-01-28 01:03:50
474	5	103	29	3	t	500	2019-01-26 16:00:00	2019-01-26 16:50:00	50	f	f	t	2019-01-28 01:04:14	2019-01-28 01:04:14
475	5	36	22	2	t	500	2019-01-26 16:00:00	2019-01-26 16:55:00	55	f	f	t	2019-01-28 01:04:51	2019-01-28 01:04:51
476	5	129	29	3	t	500	2019-01-26 17:00:00	2019-01-26 17:45:00	45	f	f	t	2019-01-28 01:05:11	2019-01-28 01:05:11
477	5	35	22	3	t	500	2019-01-26 17:00:00	2019-01-26 17:55:00	55	f	f	t	2019-01-28 01:05:35	2019-01-28 01:05:35
487	5	138	28	2	t	500	2019-01-27 12:45:00	2019-01-27 13:15:00	30	f	f	t	2019-01-28 01:18:21	2019-01-28 01:18:21
488	5	5	20	3	t	500	2019-01-27 13:00:00	2019-01-27 13:55:00	55	f	f	t	2019-01-28 01:18:50	2019-01-28 01:18:50
478	5	113	29	3	t	500	2019-01-27 10:00:00	2019-01-27 10:45:00	45	f	f	t	2019-01-28 01:11:36	2019-01-28 01:11:36
479	5	49	23	4	t	500	2019-01-27 10:00:00	2019-01-27 10:50:00	50	t	f	t	2019-01-28 01:12:02	2019-01-28 01:12:02
480	5	30	28	2	t	500	2019-01-27 11:00:00	2019-01-27 11:30:00	30	f	f	t	2019-01-28 01:12:28	2019-01-28 01:12:28
481	5	7	19	3	t	500	2019-01-27 11:00:00	2019-01-27 11:30:00	30	f	f	t	2019-01-28 01:12:52	2019-01-28 01:12:52
482	5	24	29	3	t	500	2019-01-27 11:00:00	2019-01-27 11:40:00	40	f	f	t	2019-01-28 01:13:14	2019-01-28 01:13:14
483	5	90	19	2	t	500	2019-01-27 11:30:00	2019-01-27 12:00:00	30	f	f	t	2019-01-28 01:13:30	2019-01-28 01:13:30
484	5	135	28	2	t	500	2019-01-27 11:30:00	2019-01-27 12:00:00	30	f	f	t	2019-01-28 01:14:33	2019-01-28 01:14:33
485	5	32	28	2	t	500	2019-01-27 12:00:00	2019-01-27 12:45:00	45	f	f	t	2019-01-28 01:17:27	2019-01-28 01:17:27
486	5	72	19	3	t	500	2019-01-27 12:00:00	2019-01-27 12:55:00	55	f	f	t	2019-01-28 01:17:54	2019-01-28 01:17:54
489	5	142	23	3	t	500	2019-01-27 13:15:00	2019-01-27 13:45:00	30	f	f	t	2019-01-28 01:19:19	2019-01-28 01:19:19
490	5	141	28	2	t	500	2019-01-27 13:45:00	2019-01-27 14:30:00	45	f	f	t	2019-01-28 01:19:55	2019-01-28 01:19:55
491	5	91	19	2	t	500	2019-01-27 14:00:00	2019-01-27 14:45:00	45	f	f	t	2019-01-28 01:20:23	2019-01-28 01:20:23
492	5	145	24	2	t	500	2019-01-27 14:00:00	2019-01-27 14:45:00	45	t	t	t	2019-01-28 01:20:45	2019-01-28 01:20:45
493	5	142	23	3	t	500	2019-01-27 14:30:00	2019-01-27 15:00:00	30	f	f	t	2019-01-28 01:21:11	2019-01-28 01:21:11
494	5	151	26	3	t	500	2019-01-27 15:00:00	2019-01-27 15:55:00	55	f	f	t	2019-01-28 01:21:33	2019-01-28 01:21:33
495	5	101	29	4	t	500	2019-01-27 16:00:00	2019-01-27 16:50:00	50	f	f	t	2019-01-28 01:21:58	2019-01-28 01:21:58
496	11	21	41	2	t	500	2019-01-21 09:30:00	2019-01-21 10:55:00	85	f	f	t	2019-01-28 01:27:50	2019-01-28 01:27:50
497	11	6	41	3	t	500	2019-01-21 10:00:00	2019-01-21 10:45:00	45	f	f	t	2019-01-28 01:28:12	2019-01-28 01:28:12
498	11	91	42	2	t	500	2019-01-21 11:00:00	2019-01-21 11:45:00	45	f	f	t	2019-01-28 01:28:37	2019-01-28 01:28:37
499	11	93	41	2	t	500	2019-01-21 11:00:00	2019-01-21 11:55:00	55	f	f	t	2019-01-28 01:29:25	2019-01-28 01:29:25
500	11	45	41	2	t	500	2019-01-21 15:00:00	2019-01-21 15:55:00	55	f	f	t	2019-01-28 01:29:45	2019-01-28 01:29:45
501	11	91	41	2	t	500	2019-01-21 16:00:00	2019-01-21 16:45:00	45	f	f	t	2019-01-28 01:30:21	2019-01-28 01:30:21
502	11	47	42	2	t	500	2019-01-21 16:00:00	2019-01-21 16:55:00	55	f	f	t	2019-01-28 01:30:42	2019-01-28 01:30:42
503	11	56	41	3	t	500	2019-01-21 17:00:00	2019-01-21 17:45:00	45	f	f	t	2019-01-28 01:31:07	2019-01-28 01:31:07
504	11	47	41	2	t	500	2019-01-21 18:00:00	2019-01-21 18:55:00	55	f	f	t	2019-01-28 01:31:27	2019-01-28 01:31:27
505	11	45	41	2	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-28 01:31:47	2019-01-28 01:31:47
506	11	4	42	3	t	500	2019-01-21 19:00:00	2019-01-21 19:55:00	55	f	f	t	2019-01-28 01:32:06	2019-01-28 01:32:06
507	11	84	42	3	t	500	2019-01-21 20:00:00	2019-01-21 20:55:00	55	f	f	t	2019-01-28 01:32:28	2019-01-28 01:32:28
508	11	22	41	2	t	500	2019-01-22 07:30:00	2019-01-22 08:55:00	85	f	f	t	2019-01-28 01:33:20	2019-01-28 01:33:20
509	11	4	41	3	t	500	2019-01-22 09:00:00	2019-01-22 09:45:00	45	f	f	t	2019-01-28 01:33:48	2019-01-28 01:33:48
510	11	45	41	4	t	500	2019-01-22 10:00:00	2019-01-22 10:55:00	55	f	f	t	2019-01-28 01:34:10	2019-01-28 01:34:10
511	11	47	41	2	t	500	2019-01-22 11:00:00	2019-01-22 11:55:00	55	f	f	t	2019-01-28 01:36:32	2019-01-28 01:36:32
512	11	35	41	4	t	500	2019-01-22 12:00:00	2019-01-22 13:30:00	90	f	f	t	2019-01-28 01:36:52	2019-01-28 01:36:52
513	11	5	41	3	t	500	2019-01-22 14:00:00	2019-01-22 14:55:00	55	f	f	t	2019-01-28 01:37:17	2019-01-28 01:37:17
514	11	47	41	2	t	500	2019-01-22 15:00:00	2019-01-22 15:55:00	55	f	f	t	2019-01-28 01:37:39	2019-01-28 01:37:39
515	11	93	42	2	t	500	2019-01-22 18:00:00	2019-01-22 18:55:00	55	f	f	t	2019-01-28 01:37:58	2019-01-28 01:37:58
516	11	10	41	4	t	500	2019-01-22 18:00:00	2019-01-22 18:55:00	55	f	f	t	2019-01-28 01:38:21	2019-01-28 01:38:21
517	11	5	41	3	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-28 01:38:40	2019-01-28 01:38:40
518	11	65	42	3	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	f	f	t	2019-01-28 01:39:01	2019-01-28 01:39:01
519	11	49	43	4	t	500	2019-01-22 19:00:00	2019-01-22 19:55:00	55	t	f	t	2019-01-28 01:39:26	2019-01-28 01:39:26
520	11	6	41	3	t	500	2019-01-22 20:00:00	2019-01-22 20:55:00	55	f	f	t	2019-01-28 01:39:45	2019-01-28 01:39:45
521	11	21	41	2	t	500	2019-01-23 08:30:00	2019-01-23 09:55:00	85	f	f	t	2019-01-28 01:40:46	2019-01-28 01:40:46
522	11	49	43	4	t	500	2019-01-23 09:00:00	2019-01-23 09:55:00	55	t	f	t	2019-01-28 01:41:16	2019-01-28 01:41:16
523	11	113	44	4	t	500	2019-01-23 10:00:00	2019-01-23 10:50:00	50	f	f	t	2019-01-28 01:41:42	2019-01-28 01:41:42
524	11	5	41	3	t	500	2019-01-23 10:00:00	2019-01-23 10:55:00	55	f	f	t	2019-01-28 01:42:02	2019-01-28 01:42:02
525	11	91	42	2	t	500	2019-01-23 11:00:00	2019-01-23 11:45:00	45	f	f	t	2019-01-28 01:42:24	2019-01-28 01:42:24
526	11	92	41	2	t	500	2019-01-23 11:00:00	2019-01-23 11:55:00	55	f	f	t	2019-01-28 01:42:42	2019-01-28 01:42:42
527	11	120	44	4	t	500	2019-01-23 14:00:00	2019-01-23 14:50:00	50	f	f	t	2019-01-28 01:46:06	2019-01-28 01:46:06
528	11	10	41	3	t	500	2019-01-23 14:00:00	2019-01-23 14:55:00	55	f	f	t	2019-01-28 01:46:23	2019-01-28 01:46:23
529	11	91	42	2	t	500	2019-01-23 15:00:00	2019-01-23 15:45:00	45	f	f	t	2019-01-28 01:46:41	2019-01-28 01:46:41
530	11	45	41	4	t	500	2019-01-23 16:00:00	2019-01-23 16:55:00	55	f	f	t	2019-01-28 01:47:01	2019-01-28 01:47:01
531	11	58	41	2	t	500	2019-01-23 17:00:00	2019-01-23 17:45:00	45	f	f	t	2019-01-28 01:47:26	2019-01-28 01:47:26
532	11	47	41	2	t	500	2019-01-23 18:00:00	2019-01-23 18:55:00	55	f	f	t	2019-01-28 01:47:52	2019-01-28 01:47:52
533	11	45	41	4	t	500	2019-01-23 19:00:00	2019-01-23 19:55:00	55	f	f	t	2019-01-28 01:48:27	2019-01-28 01:48:27
534	11	101	44	3	t	500	2019-01-23 20:00:00	2019-01-23 20:50:00	50	f	f	t	2019-01-28 01:48:48	2019-01-28 01:48:48
535	11	84	42	3	t	500	2019-01-23 20:00:00	2019-01-23 20:55:00	55	f	f	t	2019-01-28 01:49:09	2019-01-28 01:49:09
536	11	86	45	4	t	500	2019-01-23 20:00:00	2019-01-23 20:55:00	55	f	f	t	2019-01-28 01:49:28	2019-01-28 01:49:28
537	11	128	44	3	t	500	2019-01-23 21:00:00	2019-01-23 21:45:00	45	f	f	t	2019-01-28 01:49:54	2019-01-28 01:49:54
538	11	22	41	2	t	500	2019-01-24 07:30:00	2019-01-24 08:55:00	85	f	f	t	2019-01-28 01:51:43	2019-01-28 01:51:48
539	11	101	44	3	t	500	2019-01-24 09:00:00	2019-01-24 09:50:00	50	f	f	t	2019-01-28 01:52:08	2019-01-28 01:52:08
540	11	4	42	3	t	500	2019-01-24 09:00:00	2019-01-24 09:55:00	55	f	f	t	2019-01-28 01:53:15	2019-01-28 01:53:15
541	11	45	41	4	t	500	2019-01-24 10:00:00	2019-01-24 10:55:00	55	f	f	t	2019-01-28 01:53:33	2019-01-28 01:53:33
542	11	47	41	2	t	500	2019-01-24 11:00:00	2019-01-24 11:55:00	55	f	f	t	2019-01-28 01:53:54	2019-01-28 01:53:54
543	11	35	42	4	t	500	2019-01-24 12:00:00	2019-01-24 13:30:00	90	f	f	t	2019-01-28 01:55:52	2019-01-28 01:55:52
544	11	104	44	2	t	500	2019-01-24 14:00:00	2019-01-24 14:50:00	50	f	f	t	2019-01-28 01:56:18	2019-01-28 01:56:18
545	11	45	41	4	t	500	2019-01-24 14:00:00	2019-01-24 14:55:00	55	f	f	t	2019-01-28 01:56:38	2019-01-28 01:56:38
546	11	47	41	2	t	500	2019-01-24 15:00:00	2019-01-24 15:55:00	55	f	f	t	2019-01-28 01:56:55	2019-01-28 01:56:55
547	11	74	42	3	t	500	2019-01-24 17:00:00	2019-01-24 17:55:00	55	f	f	t	2019-01-28 01:57:12	2019-01-28 01:57:12
548	11	91	42	2	t	500	2019-01-24 18:00:00	2019-01-24 18:45:00	45	f	f	t	2019-01-28 01:57:49	2019-01-28 01:57:49
549	11	10	41	3	t	500	2019-01-24 18:00:00	2019-01-24 18:55:00	55	f	f	t	2019-01-28 01:58:06	2019-01-28 01:58:06
550	11	107	44	3	t	500	2019-01-24 19:00:00	2019-01-24 19:50:00	50	f	f	t	2019-01-28 01:58:27	2019-01-28 01:58:27
551	11	65	41	4	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	f	f	t	2019-01-28 01:58:56	2019-01-28 01:58:56
552	11	49	43	4	t	500	2019-01-24 19:00:00	2019-01-24 19:55:00	55	t	f	t	2019-01-28 01:59:18	2019-01-28 01:59:18
553	11	4	42	3	t	500	2019-01-24 20:00:00	2019-01-24 20:55:00	55	f	f	t	2019-01-28 01:59:40	2019-01-28 01:59:40
554	11	21	41	2	t	500	2019-01-25 08:30:00	2019-01-25 09:55:00	85	f	f	t	2019-01-28 02:00:39	2019-01-28 02:00:43
560	11	120	44	4	t	500	2019-01-25 14:00:00	2019-01-25 14:50:00	50	f	f	t	2019-01-28 02:02:43	2019-01-28 02:02:43
561	11	10	41	3	t	500	2019-01-25 15:00:00	2019-01-25 15:55:00	55	f	f	t	2019-01-28 02:03:14	2019-01-28 02:03:14
562	11	47	41	2	t	500	2019-01-25 16:00:00	2019-01-25 16:55:00	55	f	f	t	2019-01-28 02:03:31	2019-01-28 02:03:31
563	11	5	42	3	t	500	2019-01-25 18:00:00	2019-01-25 18:55:00	55	f	f	t	2019-01-28 02:03:51	2019-01-28 02:03:51
564	11	93	41	2	t	500	2019-01-25 18:00:00	2019-01-25 18:55:00	55	f	f	t	2019-01-28 02:04:08	2019-01-28 02:04:08
565	11	72	42	3	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	f	f	t	2019-01-28 02:04:30	2019-01-28 02:04:30
566	11	45	41	4	t	500	2019-01-25 19:00:00	2019-01-25 19:55:00	55	f	f	t	2019-01-28 02:04:56	2019-01-28 02:04:56
567	11	91	42	2	t	500	2019-01-25 20:00:00	2019-01-25 20:45:00	45	f	f	t	2019-01-28 02:05:15	2019-01-28 02:05:15
568	11	128	44	3	t	500	2019-01-25 21:00:00	2019-01-25 21:45:00	45	f	f	t	2019-01-28 02:05:35	2019-01-28 02:05:35
569	11	49	43	4	t	500	2019-01-26 10:00:00	2019-01-26 10:45:00	45	t	f	t	2019-01-28 02:06:34	2019-01-28 02:06:34
570	11	10	42	4	t	500	2019-01-26 11:00:00	2019-01-26 11:55:00	55	f	f	t	2019-01-28 02:06:57	2019-01-28 02:06:57
571	11	6	41	3	t	500	2019-01-26 11:00:00	2019-01-26 11:55:00	55	f	f	t	2019-01-28 02:07:15	2019-01-28 02:07:15
572	11	120	44	4	t	500	2019-01-26 11:10:00	2019-01-26 12:00:00	50	f	f	t	2019-01-28 02:07:34	2019-01-28 02:07:34
573	11	4	41	3	t	500	2019-01-26 12:00:00	2019-01-26 12:55:00	55	f	f	t	2019-01-28 02:07:58	2019-01-28 02:07:58
574	11	91	41	2	t	500	2019-01-26 13:00:00	2019-01-26 13:45:00	45	f	f	t	2019-01-28 02:08:13	2019-01-28 02:08:13
575	11	109	44	2	t	500	2019-01-26 13:10:00	2019-01-26 14:00:00	50	f	f	t	2019-01-28 02:08:32	2019-01-28 02:08:32
576	11	67	42	3	t	500	2019-01-26 14:00:00	2019-01-26 14:55:00	55	f	f	t	2019-01-28 02:08:58	2019-01-28 02:08:58
577	11	104	44	2	t	500	2019-01-26 15:00:00	2019-01-26 15:50:00	50	f	f	t	2019-01-28 02:09:18	2019-01-28 02:09:18
578	11	86	45	4	t	500	2019-01-26 15:00:00	2019-01-26 15:55:00	55	f	f	t	2019-01-28 02:09:37	2019-01-28 02:09:37
579	11	22	41	2	t	500	2019-01-26 16:00:00	2019-01-26 17:30:00	90	f	f	t	2019-01-28 02:09:54	2019-01-28 02:09:54
580	11	5	41	3	t	500	2019-01-27 10:00:00	2019-01-27 10:55:00	55	f	f	t	2019-01-28 02:10:48	2019-01-28 02:10:50
581	11	4	41	3	t	500	2019-01-27 11:00:00	2019-01-27 11:45:00	45	f	f	t	2019-01-28 02:11:11	2019-01-28 02:11:11
582	11	45	41	4	t	500	2019-01-27 12:00:00	2019-01-27 12:55:00	55	f	f	t	2019-01-28 02:11:34	2019-01-28 02:11:34
583	11	107	44	3	t	500	2019-01-27 13:00:00	2019-01-27 13:50:00	50	f	f	t	2019-01-28 02:12:19	2019-01-28 02:12:19
584	11	47	41	2	t	500	2019-01-27 13:00:00	2019-01-27 13:55:00	55	f	f	t	2019-01-28 02:12:40	2019-01-28 02:12:40
585	11	22	41	2	t	500	2019-01-27 14:00:00	2019-01-27 15:30:00	90	f	f	t	2019-01-28 02:12:59	2019-01-28 02:12:59
586	11	113	44	4	t	500	2019-01-27 16:00:00	2019-01-27 16:45:00	45	f	f	t	2019-01-28 02:13:24	2019-01-28 02:13:24
556	11	10	42	3	t	500	2019-01-25 10:00:00	2019-01-25 10:55:00	55	f	f	t	2019-01-28 02:01:20	2019-01-28 02:01:20
559	11	101	44	3	t	500	2019-01-25 14:00:00	2019-01-25 14:50:00	50	f	f	t	2019-01-28 02:02:18	2019-01-28 02:02:18
555	11	103	44	3	t	500	2019-01-25 10:00:00	2019-01-25 10:50:00	50	f	f	t	2019-01-28 02:00:59	2019-01-28 02:00:59
558	11	93	41	2	t	500	2019-01-25 11:00:00	2019-01-25 11:55:00	55	f	f	t	2019-01-28 02:02:00	2019-01-28 02:02:00
557	11	91	42	2	t	500	2019-01-25 11:00:00	2019-01-25 11:55:00	55	f	f	t	2019-01-28 02:01:36	2019-01-28 02:01:39
120	2	45	10	4	t	500	2019-01-22 07:30:00	2019-01-22 08:30:00	60	f	f	t	2019-01-26 18:14:24	2019-01-26 18:14:24
\.


--
-- Data for Name: sliders; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.sliders (id, code, name, created_at, updated_at) FROM stdin;
11	main	Главная страница	2018-07-17 12:30:53	2018-07-17 12:30:53
12	trenazhernyy-zal	Тренажерный зал	2018-07-17 12:31:24	2018-07-17 12:31:24
14	gallery	Галерея	2018-11-01 11:43:08	2018-11-01 11:43:08
\.


--
-- Data for Name: special; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.special (id, name, description, price_1, price_2, start_active, end_active, active, created_at, updated_at, rassrochka, type_card_id, image) FROM stdin;
20	&nbsp;	&nbsp;	1	1	2018-11-19 00:00:00	2019-09-30 00:00:00	t	2018-11-23 14:32:00	2019-01-22 13:58:50	t	8	/FTUploads/sVJJcgGExBGYWDvSSjntbuuQTANDMonvSbWmLiye.jpeg
18	&nbsp;	&nbsp;	1	1	2018-11-19 00:00:00	2019-08-15 00:00:00	t	2018-11-23 14:29:33	2019-01-22 14:00:33	f	8	/FTUploads/HvC47cIRYD7oKKMCmTPjRMXf7SyIUSwBtB3ct5Th.jpeg
21	Карта 2	Описание 32	9578	\N	2018-11-19 00:00:00	2019-08-21 00:00:00	t	2018-11-23 14:32:33	2019-01-29 18:02:48	t	8	\N
19	&nbsp;	&nbsp;	1	1	2018-11-19 00:00:00	2019-07-18 00:00:00	t	2018-11-23 14:31:04	2019-01-29 18:02:34	t	8	/FTUploads/qMe1RQxiuJ7MtGvzassg4UO52bmRtN29GT9I2Dq2.jpeg
\.


--
-- Data for Name: trainers; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.trainers (id, type_trainers_id, clubs_id, name, code, picture, image, youtube, seo_h1, seo_title, seo_keywords, seo_description, description, created_at, updated_at, active) FROM stdin;
10	2	2	Новик Евгений	novik-evgenij	/FTUploads/locSZ3duKMGGjMgscFtYLNQhB1v3mAlSLItzksxK.jpeg	/FTUploads/4c6dLvW612jpsik5zPlR7rCHZqO0XM4K0uAePM1i.jpeg	43l6MaPEiZc	\N	\N	\N	\N	<p><strong>Персональный тренер Тренажерного зала.</strong></p>\r\n\r\n<p><em>Выпускник училища олимпийского резерва, высшее образование - ростовский филиал КГУФКСиТ.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Жиросжигающий тренинг</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Коррекция фигуры</li>\r\n\t<li>Набор мышечной массы</li>\r\n\t<li>Улучшение гибкости и подвижности</li>\r\n\t<li>Рекомендации по питанию / контроль питания</li>\r\n</ul>	2018-08-14 13:37:40	2019-01-26 16:00:47	t
20	1	2	Перчиклий Никита	perchiklij-nikita.	/FTUploads/jGDu3j5YerpoqDGe6f7iYCLV3LFznox8fAQFgs0J.jpeg	/FTUploads/4AU5XBd6DagnRC8PfPDYOvmXFNBDiQq7NAziJCLi.jpeg	4bvuHj4qSwM	\N	Перчиклий Никита - фитнес инструктор водных программ клуба FITRON	\N	\N	\N	2019-01-26 15:16:41	2019-01-29 09:29:45	f
7	1	2	Кошелев Алексей	koselev-aleksej	/FTUploads/l40Bsq0oYwWrtiriBiykTHxcjAeysws1Icsjkyj4.jpeg	/FTUploads/x8GVDeXSSPY56qa2SO2Yl2lXQyagGGB6sortzO0z.jpeg	G_AO5DUVpAI	\N	Берман Мария - фитнес инструктор групповых и водных программ клуба FITRON	\N	\N	<p><strong>Фитнес-инструктор групповых программ. Мультитренер.</strong></p>\r\n\r\n<p><em>Высшее спортивное образование - ЮФУ АФКиС.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>направления  MIND BODY</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональный тренинг</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:32:32	2019-01-26 16:08:23	t
22	1	2	Рожкова Оксана	rozkova-oksana	/FTUploads/yFFmnSFp9xz9mdEPvmnrdNIPbD3VRYLbrU1lFEXD.png		\N	\N	\N	\N	\N	<p><strong>Фитнес-инструктор групповых программ</strong></p>	2019-01-26 15:17:27	2019-01-29 10:14:08	t
18	1	2	Ткаченко Оксана	tkachenko-oksana.	/FTUploads/iM3frLHfUVa1aSIDuJSEwMvj60lnvnXjZrJwCNcQ.jpeg		\N	\N	\N	\N	\N	\N	2019-01-26 15:14:32	2019-01-30 17:24:37	f
19	1	2	Глущенко Кристина	glusenko-kristina.	/FTUploads/NiDXedUNu8F4l6HlDR6xcTDFP7pJpCG15IFCrjCc.jpeg		\N	\N	\N	\N	\N	\N	2019-01-26 15:14:55	2019-01-30 17:20:22	t
28	2	2	Лавриненко Анастасия	lavrinenko-anastasia-2.			\N	\N	\N	\N	\N	<p><strong>Тренер групповых программ</strong></p>\r\n\r\n<p><br />\r\n<strong>Спортивные достижения:</strong></p>\r\n\r\n<ul>\r\n\t<li>Мастер спорта по спортивной гимнастике</li>\r\n\t<li>Победитель международных танцевальных конкурсов</li>\r\n</ul>\r\n\r\n<p><strong>Специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Акробатика</li>\r\n\t<li>Хореография </li>\r\n\t<li>Силовые тренировки</li>\r\n</ul>	2019-01-26 15:22:35	2019-01-29 09:32:11	f
31	3	2	Сафронова Мария	safronova-maria.	/FTUploads/3x2mrS3oFBzJghj3GIuqqUZirLn1615hCbQI5H9N.jpeg		\N	\N	\N	\N	\N	<p><strong>Тренер детского клуба.</strong><br />\r\n<strong>Спортивные достижения:</strong></p>\r\n\r\n<ul>\r\n\t<li>Участница телевизионного проекта "Большие танцы" на телеканале "Россия"</li>\r\n\t<li>Солистка театра современной хореографии "Зодчие"</li>\r\n\t<li>Участница танцевально-театральных спектаклей "Чудеса среди нас" и "Оттенки времени"</li>\r\n\t<li>Лауреат российских и международных танцевальных конкурсов </li>\r\n</ul>\r\n\r\n<p><strong>Специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Хореография </li>\r\n\t<li>Stretch</li>\r\n</ul>	2019-01-26 15:48:15	2019-01-29 09:32:33	f
23	1	2	Деревянко Екатерина	derevanko-ekaterina	/FTUploads/C1eezJKnsLEOpDTWUDy96uLE5vklZiGcsoC4gDxe.png	/FTUploads/HeEawOzHWSOFCfByijFWVyzfE8S33qhe9rE9Yhjd.png	\N	\N	\N	\N	\N	<p>Интсруктор водных программ</p>	2019-01-26 15:17:56	2019-01-29 10:34:58	t
21	1	2	Лавриненко Анастасия	lavrinenko-anastasia.	/FTUploads/nzf3HGUnSRTkVeK3TlGQFbKUyuiRVEoXPTyouQjo.png	/FTUploads/nfLcGNz0UL0wP2fMbUY0hqxxw3INk24GLMsrKzmn.png	\N	\N	\N	\N	\N	<p><strong>Тренер групповых программ</strong></p>\r\n\r\n<p><br />\r\n<strong>Спортивные достижения:</strong></p>\r\n\r\n<ul>\r\n\t<li>Мастер спорта по спортивной гимнастике</li>\r\n\t<li>Победитель международных танцевальных конкурсов</li>\r\n</ul>\r\n\r\n<p><strong>Специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Акробатика</li>\r\n\t<li>Хореография </li>\r\n\t<li>Силовые тренировки</li>\r\n</ul>	2019-01-26 15:17:00	2019-01-29 09:47:10	f
17	1	2	Кашилов Иван	kasilov-ivan.	/FTUploads/YNbjRbWt9LE5IPnpinCkokqx3ULVvA484wHZcqvO.jpeg	/FTUploads/S9Eh5f6nhD69rAbSrqzeGNL5T9HSiTx8fcHuVbVr.jpeg	smrGIYa_GWo	\N	\N	\N	\N	\N	2019-01-26 15:10:24	2019-01-29 09:29:58	f
14	3	2	Михайлова Анастасия	mihajlova-anastasia	/FTUploads/6TILBrNDnBrmK7jPh50GHrpdSuADbB0DabY6ZYqc.jpeg	/FTUploads/96JWjzBaRIFUTLmRpUvPhUl9r0UDzdnsjv64J5cp.jpeg	lLw5mVyXs7I	\N	Михайлова Анастасия - тренер детского клуба FITRON	\N	Тренировки силовой направленности\r\nStretch\r\nДетские групповые программы\r\nАкробатический рок-н-ролл\r\nМихайлова Анастасия в финес-клубе Ростова-на-Дону - Fitron. Записаться на занятие к тренеру онлайн.	<p><strong>Фитнес инструктор детского клуба.</strong></p>\r\n\r\n<p><em>МС по акробатическому рок-н-роллу.</em></p>\r\n\r\n<p><em>Обладательница звания « Лучший спортсмен года».</em></p>\r\n\r\n<p><em>Финалистка чемпионата России по рок-н-роллу.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Детские групповые программы</li>\r\n\t<li>Тренировки силовой направленности</li>\r\n\t<li>STRETCH</li>\r\n\t<li>Персональные детские тренировки</li>\r\n\t<li>Акробатический рок-н-ролл</li>\r\n</ul>	2018-08-14 13:44:14	2019-01-26 15:58:24	t
13	3	2	Ерёмина Марина	eremina-marina	/FTUploads/9pUXcZYsPcrLU3cSDdciXVrOYhQ3TTjBaVfIhqNn.jpeg	/FTUploads/L4WvYpGUxnFguXQlwl1mCV3jnLNyhFhXU5pWTwcD.jpeg	dE3Dppl_GAk	\N	Ерёмина Марина - супервайзер детского клуба FITRON	\N	Силовые программы в тренажерном зале. Кикбоксинг. Детские групповые программы. Тренировки силовой направленности. Ерёмина Марина в финес-клубе Ростова-на-Дону - Fitron. Записаться на занятие к тренеру онлайн.	<p><strong>Супервайзер детского клуба. Персональный тренер.</strong></p>\r\n\r\n<p><em>КМС по Кикбоксингу.</em></p>\r\n\r\n<p><em>Судья 3-й категории по кикбоксингу.</em></p>\r\n\r\n<p><em>Финалистка Первенства России и Чемпионата Европы по кикбоксингу.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Детские групповые программы</li>\r\n\t<li>Тренировки силовой направленности</li>\r\n\t<li>Персональные детские тренировки</li>\r\n\t<li>Силовые программы в Трен Зале</li>\r\n\t<li>Кикбоксинг</li>\r\n</ul>	2018-08-14 13:42:37	2019-01-26 15:59:51	t
15	3	2	Миронова Юлия	mironova-ulia	/FTUploads/XK41WchzVmKNBjFz4TcK4lDvDvxO6TxsoiLsdm9t.jpeg	/FTUploads/JRPYizgHn0PBzuwTiONeH9bbMDbrzgYbgE9jp7H4.jpeg	_F3pFaoJ7oI	\N	Миронова Юлия - тренер детского клуба FITRON	\N	Детские групповые программы.\r\nТренировки силовой направленности.\r\nТворчество.\r\nМиронова Юлия в финес-клубе Ростова-на-Дону - Fitron. Записаться на занятие к тренеру онлайн.	<p><strong>Фитнес инструктор детского клуба.</strong></p>\r\n\r\n<p><em>Первый взрослый разряд по спортивному ориентированию.</em></p>\r\n\r\n<p><em>Третий взрослый разряд по спортивному туризму.</em></p>\r\n\r\n<p><em>Судья первой степени.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Детские групповые программы</li>\r\n\t<li>Тренировки силовой направленности</li>\r\n\t<li>Персональные детские тренировки</li>\r\n\t<li>Творчество</li>\r\n</ul>	2018-08-14 13:45:42	2019-01-26 16:00:09	t
11	2	2	Цыганок Николай	cyganok-nikolaj	/FTUploads/gtpoEkpAVPzqhmqNCjnwqH7nnfzMIYrfZmYoomYH.jpeg	/FTUploads/I5MuQe4QpQVKHMlJjHu7HNk5d2ZLkyoUiHOdrD8D.jpeg	bIoQKIu1IKk	\N	\N	\N	\N	<p><strong>Персональный тренер Тренажерного зала.</strong></p>\r\n\r\n<p><em>Высшее образование - РИФКиС филиал КГУФКСиТ.</em></p>\r\n\r\n<p><em>М.С. по гребле на байдарках и каноэ.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Снижение веса</li>\r\n\t<li>Силовой тренинг</li>\r\n\t<li>Набор мышечной массы</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Рекомендации по питанию и спортивным добавкам</li>\r\n\t<li>Общая физическая подготовка</li>\r\n</ul>	2018-08-14 13:39:10	2019-01-26 16:01:13	t
12	2	2	Ханин Дмитрий	hanin-dmitrij	/FTUploads/WJftSMgcCupEv54HOwPIT6I6d56d5cfZX6hBCw91.jpeg	/FTUploads/e1bwYSTOe9Uiw7kVtKwj0U5RxFWeTD5P8T5wdZUz.jpeg	iSDE-yzz1PM	\N	\N	\N	\N	<p><strong>Фитнес инструктор Тренажерного зала.</strong></p>\r\n\r\n<p><em>1-й взр разряд по гиревому спорту. КМС по самбо.</em></p>\r\n\r\n<p><em>Высшее образование ЮРГПУ (НПИ).</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Снижение веса</li>\r\n\t<li>Силовой тренинг</li>\r\n\t<li>Набор мышечной массы</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Рекомендации по питанию и спортивным добавкам</li>\r\n</ul>	2018-08-14 13:40:49	2019-01-26 16:01:28	t
24	2	2	Дворовой Роман	dvorovoj-roman	/FTUploads/MJMyoEn2jFyrLphYwbR5VKhf5SKPmw8pzN7xMNEt.jpeg	/FTUploads/Bl1DBY2PyPGcWUwGYEUKev9Op5OzxiQbooyIhu64.jpeg	2mkJEsihaZo	\N	\N	\N	\N	<p><strong>Персональный тренер Тренажерного зала.</strong></p>\r\n\r\n<p><em>Высшее образование - Институт Физкультуры и Спорта.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Снижение веса, коррекция фигуры</li>\r\n\t<li>Силовой тренинг</li>\r\n\t<li>Набор мышечной массы, улучшение пропорций</li>\r\n\t<li>Укрепление мускулатуры</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Рекомендации по питанию и спортивным добавкам</li>\r\n</ul>	2019-01-26 15:19:39	2019-01-26 16:01:39	t
25	2	2	Хашагульгов Ахмед	hashagulgov-ahmed	/FTUploads/F6k3k7yV9OTaCAV76eNjE468SeeIAJDdXr4msbrm.jpeg	/FTUploads/M9iFrJbOyIDeNvGkFd4BBClRbzQsCrvapJPKLsqj.jpeg	Ab7mOpnYidE	\N	\N	\N	\N	<p><strong>Персональный тренер Тренажерного зала.</strong></p>\r\n\r\n<p><em>Выпускник школы фитнеса «Фитнес Стандарт» по направлению инструктор тренажерного зала.</em></p>\r\n\r\n<p><em>КМС по Тхэквондо, призер первенства России. </em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Составление индивидуальных программ тренировок и питания с целью: набора мышечной массы, сжигание жира, поддержание физической формы</li>\r\n\t<li>Консультации по правильному питанию и спортивным добавкам</li>\r\n\t<li>Проведение персональных тренировок разной направленности</li>\r\n\t<li>Функциональный тренинг</li>\r\n</ul>	2019-01-26 15:21:10	2019-01-26 16:02:05	t
27	2	2	Филиппский Алексей	filippskij-aleksej	/FTUploads/hIb965RmQnyIykkYEGsUjQwTR9uKPvSQdDAaHj9e.jpeg	/FTUploads/mDCuLUFqH8e5naNWYDPJ7PhJT5zKGtO2RvVLoNCo.jpeg	YtKZnjNfmKg	\N	\N	\N	\N	<p><strong>Мастер-тренер. Супервайзер Тренажерного зала.</strong></p>\r\n\r\n<p><em>Высшее спортивное образование ИФК РГПУ, Магистр физической культуры.</em></p>\r\n\r\n<p><em>М.С. По спортивному туризму.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Снижение веса, коррекция фигуры, набор мышечной массы</li>\r\n\t<li>Силовой тренинг</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Рекомендации по питанию и спортивным добавкам</li>\r\n</ul>	2019-01-26 15:22:10	2019-01-26 16:02:50	t
29	2	2	Гайворонская Дарья	gajvoronskaa-dara	/FTUploads/VBZeS2EBuCuX1AHkIPEFUNISo3InfFKm4a83lXgd.jpeg		\N	\N	\N	\N	\N	<p>Фитнес-инструктор тренажерного зала.<br />\r\nОпыт в компании с 2018 года.<br />\r\nФитнес-специализация:<br />\r\n- силовой тренинг<br />\r\n- жиросжигающий тренинг<br />\r\n- набор мышечной массы<br />\r\n- коррекция фигуры<br />\r\n- рекомендации по питанию и спортивным добавкам</p>	2019-01-26 15:22:54	2019-01-26 16:03:21	t
30	2	2	Туров Артём	turov-artem	/FTUploads/oK4pSPY2SN0vNUPI2X0RITQGyR0z4w8FaFUnr4jN.jpeg		\N	\N	\N	\N	\N	<p>Фитнес-инструктор тренажерного зала.<br />\r\nОпыт в компании с 2018 года.<br />\r\nФитнес-специализация:<br />\r\n- силовой тренинг<br />\r\n- жиросжигающий тренинг<br />\r\n- набор мышечной массы<br />\r\n- коррекция фигуры<br />\r\n- рекомендации по питанию и спортивным добавкам</p>	2019-01-26 15:23:14	2019-01-26 16:03:55	t
8	1	2	Рузанова Юлия	ruzanova-ulia	/FTUploads/kJcsHXuPTfdYa679ZdH7Oh1q4G8XnF7qTFNvX5Qv.jpeg	/FTUploads/y0av6X94YC6nqaTwj10EzWBChm7l7gWUzX8UOgcr.jpeg	YYtICDPcyvo	\N	Рузанова Юлия - фитнес инструктор групповых и водных программ клуба FITRON	\N	\N	<p><strong>Персональный тренер групповых программ.</strong></p>\r\n\r\n<p><em>Высшее спортивное ЮРГУЭС.</em></p>\r\n\r\n<p><em>МС ПО КИКБОКСИНГУ.</em></p>\r\n\r\n<p><em>КМС ПО БОКСУ.</em></p>\r\n\r\n<p><em>Победитель Первенства Мира в Италии по кикбоксингу.</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>силовой тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы OUTDOOR</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы MIND BODY(STRETCH,PILATES)</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:34:10	2019-01-26 16:05:57	t
9	1	2	Софья Толстая	sofa-tolstaa	/FTUploads/cBLOUGz5vAFxoQXUrI7geEyW16zENC6t4rSNktFD.jpeg	/FTUploads/tMieglVoJ1JJGXSl9Qbqt3REnd00uzTneKSsvQOq.jpeg	Vf3mejJIax4	\N	\N	\N	\N	<p><strong>Фитнес-инструктор групповых программ. Мультитренер.</strong></p>\r\n\r\n<p><em>Высшее </em>спортивное-ЮФУ<em>.</em></p>\r\n\r\n<p><em>1-й взрослый разряд по бальным танцам.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>силовые программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>кардио-тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы по снижению веса и коррекции фигуры</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>консультации по питанию</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:35:44	2019-01-26 16:07:23	t
67	1	11	Каспарьян Юлия	kasparan-ulia	/FTUploads/al7eJWEvKHRbscJy7jNO4ed2fSVs5LNQkeXEBsY6.jpeg		\N	\N	\N	\N	\N	<p><strong>Инструктор групповых программ.</strong> Премьер тренер, Мульти - тренер, сертифицированный тренер Les mills.</p>\r\n\r\n<p>Опыт работы в компании с 2006 г.</p>\r\n\r\n<p><strong>Специализация:</strong> персональный тренинг, силовой тренинг,танцевальные направления, функциональный тренинг.</p>	2019-01-26 17:02:10	2019-01-26 17:02:14	t
6	1	2	Кличева Леся	klicheva-lesa	/FTUploads/6BTu5RxfErJF1uQJfzK40Le4duLWjtgT3y35IayO.jpeg	/FTUploads/Ut6UGpFSjjtf34T6esyQqO7A13N2iSPtDRDhWMPw.jpeg	AeGGBrMo-Sw	\N	Кличева Леся - супервайзер групповых и водных программ клуба FITRON	\N	\N	<p><strong>Супервайзер групповых программ. Мультитренер.</strong></p>\r\n\r\n<p><em>Высшее спортивное образование - КБГУ.</em></p>\r\n\r\n<p><em>КМС ПО ПЛАВАНИЮ.</em></p>\r\n\r\n<p><em>КМС ПО БАСКЕТБОЛУ.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2011 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>направления OUTDOOR</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>направления  MIND BODY</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы по снижению веса и коррекции фигуры</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональные тренировки в тренажерном зале</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:29:26	2019-01-26 16:08:56	t
16	1	2	Гайдукова Оксана	gajdukova-oksana.	/FTUploads/4SSYwnDLxQv11dl1Srfy9zoi1yCKfSAk1XlN1cOs.jpeg	/FTUploads/i7M8h3bNQxjXSg8ZVCJQR33CgG8wEq2IvCUAOtv3.jpeg	\N	\N	Гайдукова Оксана - фитнес инструктор групповых и водных программ клуба FITRON	\N	\N	<p><strong>Персональный тренер групповых программ.</strong></p>\r\n\r\n<p><em>Высшее РГЭУ «РИНХ».</em></p>\r\n\r\n<p><em>Сертифицированный преподаватель йоги.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>программы Mind Body (STRETCH,PILATES,YAGA,)</p>\r\n\t</li>\r\n</ul>	2019-01-26 15:09:04	2019-01-26 16:20:33	t
37	1	8	Атамова Руфина	atamova-rufina-2	/FTUploads/8Os7Egox3jBVhVwtBRE2jdryPG34kZLLlRWpuXxi.jpeg	/FTUploads/FxgxpgV6LgDel7w5rGxejsVgxRNYwyLSOfJxODU9.jpeg	cLMnKpov-p4	\N	\N	\N	\N	<p><strong>Мастер тренер групповых программ, мульти тренер. </strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>Супервайзер групповых программ</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>Супервайзер приходящих специалистов</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>Куратор программ OutDoor</strong></p>\r\n\t</li>\r\n</ul>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2015 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция ОДА</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>тренировки с подростками и детьми</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>консультирование по вопросам питания</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:27:40	2019-01-26 16:30:18	t
68	1	11	Панковец Юрий	pankovec-urij	/FTUploads/G5HceJYrbbrxdSmLqTFZ6vG74ixrZjqnjUHOvf0C.jpeg		\N	\N	\N	\N	\N	<p><strong>Премьер тренер бассейна.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2007г.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно педагогическое образование.</p>	2019-01-26 17:02:33	2019-01-26 17:02:40	t
70	1	11	Кушнер Дмитрий	kusner-dmitrij	/FTUploads/3XK7x12Ux0o7JdD0IbQc56FuAUn82F6MZtrnsqcE.jpeg		\N	\N	\N	\N	\N	<p><strong>Супервайзер бассейна.</strong> Премьер тренер. Руководитель Fitron swimming club.</p>\r\n\r\n<p>Опыт работы в компании с 2007г.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно-педагогическое образование.КМС по плаванию.</p>	2019-01-26 17:03:18	2019-01-26 17:03:25	t
71	1	11	Литовченко Александр	litovcenko-aleksandr	/FTUploads/nQ80ibsVxfgDEDOLXqgSHDf17RKOyjlqtJUTrErF.jpeg		\N	\N	\N	\N	\N	<p><strong>Премьер тренер бассейна.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2010г.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно-педагогическое образование. Мастер спорта по плаванию.</p>	2019-01-26 17:03:41	2019-01-26 17:03:46	t
38	1	8	Кретова Мария	kretova-maria-2	/FTUploads/umg7fhtw2nGCPt7px2Yw2M3ySAwkTHcmsxXL565a.jpeg	/FTUploads/iVANFEPymrQDnen1xNq22IQdMtIcMlBmkVNo4YpO.jpeg	8gmn6ewYvhU	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ. Куратор направления PILATES.</strong></p>\r\n\r\n<p><em>Образование - Академия физической культуры и спорта.</em></p>\r\n\r\n<p><em>Спортивные достижения: МС по художественной гимнастике. </em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2015 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching, pilates, сosmo balance</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:28:17	2019-01-26 16:30:27	t
40	1	8	Петросян Карен	petrosan-karen	/FTUploads/fEgLgKVfgigT6g3b3YreCzTo4jimNiW8FSljUuM2.jpeg	/FTUploads/U84IVRRS0ZC1rDfvo625frKKEZahQbkv2cXWn9im.jpeg	IE7KBKokQFI	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ, мульти - тренер.</strong></p>\r\n\r\n<p><em>Образование:  Педагогический институт ЮФУ. Академия физической культуры и спорта.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2014 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция ОДА</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>тренировки с подростками и пожилыми</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:31:22	2019-01-26 16:31:28	t
41	1	8	Маркс Валерия	marks-valeria	/FTUploads/6UEv4RgY5P5WLiW6mfJZmgvp0Qig0uHzVSkjgaHy.jpeg	/FTUploads/qSObBOXxnhWtId98Of1AHSKApzlpWSzhsdSkIilF.jpeg	OO2VJyXdUH4	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ.</strong></p>\r\n\r\n<p><em>Образование:  Академия физкультуры и спорта.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:34:36	2019-01-26 16:34:43	t
42	1	8	Семёнова Ксения	semenova-ksenia	/FTUploads/oEDqDRRne9O9Gp5hihSBBf7i9b4PmwrPM5E9CcZg.jpeg		\N	\N	\N	\N	\N	<p><strong>Мастер тренер групповых программ, мульти тренер.</strong></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2016 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция ОДА</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>тренировки с подростками и пожилыми</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>консультирование по вопросам питания</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:35:13	2019-01-26 16:35:20	t
43	1	8	Обухова Виолетта	obuhova-violetta	/FTUploads/Hy3tohXn6xSD2lnPR631bAXi5heeeEmY1uf6slx3.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес инструктор групповых программ.</strong></p>\r\n\r\n<p><em>КМС по Дзюдо.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2018 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>консультирование по вопросам питания</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:35:40	2019-01-26 16:35:52	t
44	1	8	Мурачева Анастасия	muraceva-anastasia	/FTUploads/JImRXYN3VhuqYSI7GtmgKHnklhe3ZVaouViG0yZ5.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес инструктор групповых программ.</strong></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2018 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching, сosmo balance, pilates</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:36:33	2019-01-26 16:36:37	t
69	1	11	Каштоян Давид	kastoan-david	/FTUploads/W4DMDTDuQsQKvaPwRDFR8EDpI6DxBJglcaERwSkK.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес инструктор групповых программ.</strong></p>\r\n\r\n<p>Опыт работы с 2018г.</p>\r\n\r\n<p><strong>Спортивные достижения:</strong> обладатель кубка России по современным танцевальным направлениям.</p>\r\n\r\n<p><strong>Специализация: </strong>танцевальные направления HIP-HOP…силовой тренинг, функциональный тренинг.</p>	2019-01-26 17:02:54	2019-01-26 17:03:05	t
58	2	11	Товба Станислав	tovba-stanislav	/FTUploads/P7Fc8bmrxJiPaLxZT40igAr24A2807ox8g0k5SRl.jpeg		\N	\N	\N	\N	\N	<p><strong>Супервайзер тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2011г.</p>\r\n\r\n<p><strong>Специализация:</strong> персональный тренинг направленный на снижение веса и коррекции фигуры.ПТ направленные на набор мышечной массы,функциональный тренинг.</p>	2019-01-26 16:57:15	2019-01-26 16:57:25	t
59	2	11	Озлав Александра	ozlav-aleksandra	/FTUploads/lw94X3R3KWs1TT4mhDnHKbPfZ4h9HUtq38ptWKb3.jpeg		\N	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы с 2018 г.</p>\r\n\r\n<p><strong>Направление: </strong>Коррекция фигуры,набор мышечной мыссы и снижение веса.</p>	2019-01-26 16:57:44	2019-01-26 16:57:49	t
60	2	11	Завгородний Юрий	zavgorodnij-urij	/FTUploads/yLYC5nu20jOQzK5ssyzSRdREKSrJWSHZE4guDWG8.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес-инструктор тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы с 2018г.</p>\r\n\r\n<p><strong>Спортивные достижения:</strong> КМС по легкой атлетике.</p>\r\n\r\n<p><strong>Направление: </strong>набор мышечной массы, снижение веса, диогностика мышечной дисфусии, миофасциальное раслабление.</p>	2019-01-26 16:58:40	2019-01-26 16:58:54	t
61	2	11	Середина Анастасия	seredina-anastasia	/FTUploads/rnX3Ynwxa8Ia4yzQTomxa1Wz0kMVf6EsGqEiHUqE.jpeg		\N	\N	\N	\N	\N	<p><strong>Мастер тренер тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы в компании 2006 г.</p>\r\n\r\n<p><strong>Образование:</strong> Академия физической культуры и спорта ЮФУ , 2 Взрослый биатлон, КМС по легкой атлетике, КМС по Хокею на траве.</p>\r\n\r\n<p><strong>Специализация:</strong> силовой тренинг, функциональный, реабилитационный, набор мышечной массы, снижение веса.</p>	2019-01-26 16:59:12	2019-01-26 16:59:16	t
62	2	11	Кублашвили Инга	kublasvili-inga	/FTUploads/cszRSunwpyrWg7NunRe9FK9BO9QEEr9Uymzx4axS.jpeg		\N	\N	\N	\N	\N	<p><strong>Персональный тренер тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2012г.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно-педагогическое образование, КМС по легкой атлетике.</p>\r\n\r\n<p><strong>Специализация: </strong>силовой тренинг, функциональный тренинг, набор мышечной массы,снижении веса.</p>	2019-01-26 16:59:36	2019-01-26 16:59:43	t
63	2	11	Гроздовский Михаил	grozdovskij-mihail	/FTUploads/3a8v9Rolppnf277oXBlHPNkhRN64iG1AU3l6QC8J.jpeg		\N	\N	\N	\N	\N	<p><strong>Мастер тренер тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы с 2014г.</p>\r\n\r\n<p><strong>Образование: </strong>высшее физкультурно-педагогическое образование.</p>\r\n\r\n<p>Призёр чемпионата города Ростова-на-Дону и области по бодибилдингу.</p>\r\n\r\n<p><strong>Специализация:</strong> силовой тренинг, набор мышечной массы, снижение веса, оссобенности при остехондрозе и межпозвоночных грыжах.</p>	2019-01-26 17:00:02	2019-01-26 17:00:07	t
64	2	11	Джани-Заде Кирилл	dzani-zade-kirill	/FTUploads/PsOCVQ0mNGNItJX4vL0KEGkhNxmPvWXvG6urCD9v.jpeg		\N	\N	\N	\N	\N	<p><strong>Персональный тренер тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы с 2015г.</p>\r\n\r\n<p><strong>Специализация:</strong> силовой тренинг, функциональный , набор мышечной массы,снижение веса.</p>	2019-01-26 17:00:40	2019-01-26 17:00:45	t
65	2	11	Каменный Илья	kamennyj-ila	/FTUploads/RqbQZuB37CgxaBzKXkoruxAP16FvAoYuvw7vheke.jpeg		\N	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p>Опыт работы с 2018 г.</p>\r\n\r\n<p><strong>Фитнес образование:</strong> Фитрон Юниверсити.</p>\r\n\r\n<p><strong>Направление: </strong>Набор мычечной массы, Функциональный тренинг,снижене веса.</p>	2019-01-26 17:01:06	2019-01-26 17:01:11	t
66	2	11	Лобачева Ирина	lobaceva-irina	/FTUploads/75vRWddIAER9WLOIbySm9uPwbmjqKxmjMivb8n9J.jpeg		\N	\N	\N	\N	\N	<p><strong>Мастер тренер тренажерного зала.</strong> Мастер спорта по паузрлифтингу IPF, МСМК по пауэрлифтингу AWPC.</p>\r\n\r\n<p>Опыт работы в компании с 2015 г.</p>\r\n\r\n<p><strong>Направление:</strong> силовой тренинг,набор массы и снижение веса.</p>	2019-01-26 17:01:24	2019-01-26 17:01:31	t
46	2	8	Кретова Мария	kretova-maria.	/FTUploads/qtsSUPpnnPIQFMTEgONxvAv3LX3FbWolHQIR9Mxj.jpeg	/FTUploads/X8fChTeKB9jcv1XrYxFSxrHyp0oRhePhB0NR8NMh.jpeg	8gmn6ewYvhU	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ</strong></p>	2019-01-26 16:39:49	2019-01-29 09:33:28	f
72	1	11	Копий Анатолий	kopij-anatolij	/FTUploads/XKt8QkMVqbpq0J7iJW4AL6BBacedD2wurMA6q9Qv.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес инструктор бассейна.</strong></p>\r\n\r\n<p>Опыт работыв компании с 2018.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно-педагогическое образоване, мастер спорта по плаванию.</p>	2019-01-26 17:04:14	2019-01-26 17:04:19	t
73	1	11	Сажнева Наталия	sazneva-natalia	/FTUploads/qdTXHJRA478xxFsooBI93B8kOvFLl39j1s6iQ8SG.jpeg		\N	\N	\N	\N	\N	<p><strong>Супервайзер групповых программ.</strong> Премьер тренер, мульти -тренер.</p>\r\n\r\n<p><strong>Образование:</strong> высшее педагогическое ЮФУ.Опыт работы с 2014 г.</p>\r\n\r\n<p><strong>Спортивные достижения: </strong>МС по легкой атлетике.</p>\r\n\r\n<p><strong>Специализация: </strong>Mind Body, силовой тренинг, функциональный тренинг, кардио-тренинг, реабилитационный тренинг, исправление осанки,коррекция композиция тела.</p>	2019-01-26 17:04:41	2019-01-26 17:04:45	t
74	1	11	Лавриненко Анастасия	lavrinenko-anastasia-3			\N	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ.</strong></p>\r\n\r\n<p><strong>Образование:</strong> Академия биологии и биотехнологии.</p>\r\n\r\n<p><strong>Специализация:</strong> силовый тренинг, функциональный тренинг, кардио тренинг, Mine body, реабилитационный тренинг - исправление осанки, коррекциякомпазиции тела.</p>	2019-01-26 17:05:20	2019-01-26 17:05:28	t
75	1	11	Куралесов Даниил	kuralesov-daniil	/FTUploads/ZzhgWanRJOvPL64FOrlLjIsoS9kXctQBZlfXHClK.jpeg		\N	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ.</strong></p>\r\n\r\n<p>Опыт работы с 2017г.</p>\r\n\r\n<p><strong>Образование:</strong> Высшее физкультурно-педагогическое образование. Серцифицированный тренер Life Fitness ICG, Perfomance Trainer.</p>\r\n\r\n<p><strong>Cпециализация:</strong> функциональный тренинг,силовой,кардио тренинг,OUTDOOR.</p>	2019-01-26 17:05:43	2019-01-26 17:05:47	t
76	1	11	Голубева Юлия	golubeva-ulia	/FTUploads/20DkcRb6n9gIRYHKO6YlTG9Uaf2U2JDv91m693qB.jpeg		\N	\N	\N	\N	\N	<p><strong>Фитнес инструктор бассейна.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2018г.</p>\r\n\r\n<p><strong>Образование:</strong> высшее физкультурно-педагогическое образование.</p>	2019-01-26 17:06:01	2019-01-26 17:06:07	t
77	1	11	Бодрова Наталья	bodrova-natala	/FTUploads/bHqKdUjfKhCaD6ssYkr5JTOmmDjgu57rs6PYyvTA.jpeg		\N	\N	\N	\N	\N	<p><strong>Инструктор групповых программ. </strong>Мастер тренер, мульти-тренер.</p>\r\n\r\n<p>Опыт работы в компании с 2016 г .</p>\r\n\r\n<p><strong>Спортивные достижения:</strong> Мастер спорта по спортивной гимнастике, Мастер спорта по прыжкам на батуте ,1 взрослый по черлиденгу.</p>\r\n\r\n<p><strong>Специализация:</strong> силовой тренинг, функциональный тренинг, кардио тренинг, реабилитационный тренинг, коррекция</p>	2019-01-26 17:06:30	2019-01-26 17:06:34	t
78	1	11	Стоян Виктория	stoan-viktoria			\N	\N	\N	\N	\N	<p><strong>Фитнес-инструктор групповых программ.</strong></p>\r\n\r\n<p>Опыт работы с 2018г.</p>\r\n\r\n<p><strong>Спортивные достижения:</strong> победитель всеросийских танцевальных чемпионатов по современным  танцам  Lady style.</p>\r\n\r\n<p><strong>Специализация: </strong>силовой тренинг, кардио тренинг, Mine Body.</p>	2019-01-26 17:06:59	2019-01-26 17:07:09	t
79	1	11	Воеводина Ксения	voevodina-ksenia	/FTUploads/KCdoOfSHF3ywulBuwUR97YG82AXcvMX20Rcbn326.jpeg		\N	\N	\N	\N	\N	<p><strong>Мастер тренер бассейна.</strong></p>\r\n\r\n<p>Опыт работы в компании с 2007г.</p>\r\n\r\n<p><strong>Спортивные достижения:</strong> КМС по плаванию.</p>	2019-01-26 17:07:31	2019-01-26 17:07:38	t
80	1	5	Семенова Валентина	semenova-valentina	/FTUploads/QNYZ0jBoqnkrkvVonluhx2cDkhH0xMUDj5HqnUKU.jpeg	/FTUploads/ijKGPjI2JvkN4ESCBiUGTOL9LnwYVPDO9iwRwpba.jpeg	-T17Ky76Wmc	\N	\N	\N	\N	<p><strong>Инструктор групповых программ.</strong></p>\r\n\r\n<p><em>КМС по акробатике.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>групповые уроки и персональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>большая направленность - сycle и stretch</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:09:02	2019-01-26 17:09:12	t
81	1	5	Матняк Евгения	matnak-evgenia	/FTUploads/GjsVcQ7enhx8PYWOv3jIAqbeaa2zjJw2yFyN31Y5.jpeg	/FTUploads/4SeZpLRI50z5uBIe77Q1vTBptwiDjFt5UvHthJPx.jpeg	4m1UNsUax_0	\N	\N	\N	\N	<p><strong>Инструктор групповых программ.</strong></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>групповые уроки</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональный тренинг</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:09:34	2019-01-26 17:09:38	t
99	2	5	Скляров Влад	sklarov-vlad	/FTUploads/qVnRzLQEgQgejnT41Dhe46cO988x5PwZ5TH7bCiu.jpeg	/FTUploads/LksLB1og2IkjoNH7tJhX21WgKtobZqxHWuxR9wf5.jpeg	UE0Z9atkHdc	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>увеличение мышечной массы, силы, выносливости, сжигание жира</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:25:08	2019-01-26 17:25:13	t
82	1	5	Ермоленко Надежда	ermolenko-nadezda	/FTUploads/uKwSr7V0D9ozyZmgEJRKiYoXQAsdogQKphiNHa9V.jpeg	/FTUploads/uQoIwoaJKfGt3Mg0BPLinSt1ANokBIdhjFZASgIr.jpeg	qEAn4QwxRw8	\N	\N	\N	\N	<p><strong>Супервайзер, инструктор групповых программ.</strong></p>\r\n\r\n<p><em>Фитнес Стандарт-курс  «Персональный тренер».</em></p>\r\n\r\n<p><em>Национальное фитнес-сообщество:  инструктор по аэробике, инструктор по степ-аэробике, пилатес, инструктор по силовым направлениям.</em></p>\r\n\r\n<p><em>Фабрика Фитнеса. Latina dance, Strip dance, МФР.</em></p>\r\n\r\n<p><em>Курс мастера школы соматической интеграции по программе «Эффективные методы коррекции нарушения работы мышц. Биологическое центрирование, реабилитация и фитнес».</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>групповые  уроки, персональный тренер</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой, функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>биологическое центрирование и реабилитация</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>PILATES</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:14:01	2019-01-26 17:14:07	t
83	1	5	Вознюк Инна	voznuk-inna	/FTUploads/f7B6veZvgJqsiAujSinbP0MvUF9sFZrvhrg7BRFr.jpeg	/FTUploads/qdS3vAD8mwceEEqZmPyBnoDFoLhXp76Hb14hby65.jpeg	l5Txx8xnMq8	\N	\N	\N	\N	<p><strong>Инструктор групповых программ.</strong></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>групповые  уроки, персональный тренинг</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:14:28	2019-01-26 17:14:43	t
84	1	5	Смирнова Вера	smirnova-vera	/FTUploads/V104Elc10UbhUk9TCdxBllDFgwtIqHFb9eVXR9iJ.jpeg		\N	\N	\N	\N	\N	<p>Высшее спортивное педагогическое образование (КГУФК и С).</p>\r\n\r\n<p>Кандидат в мастера спорта по гандболу.</p>\r\n\r\n<p>Мастер спорта по пляжному гандболу.</p>\r\n\r\n<p>Ведет функциональный и силовой тренинг.</p>	2019-01-26 17:15:03	2019-01-26 17:15:10	t
85	1	5	Фомина Виктория	fomina-viktoria	/FTUploads/9EUdY8wk0yKp7YZc6vNsRfb9BQX9pIcvmAdD5ccg.jpeg		\N	\N	\N	\N	\N	<p>Проведение персональных и групповых тренировок по плаванию с детьми от 3 месяцев и взрослых.<br />\r\nПроведение персональных и групповых тренировок по аквааэробике.<br />\r\nРабота с людьми имеющими лишний вес (работа по снижению веса).<br />\r\nРеабилитация взрослых и детей после травм и болезней.<br />\r\nОбучение техники плавания.<br />\r\nМастер спорта по синхронному плаванию.<br />\r\nПризер Первенства России и Кубка России по плаванию.<br />\r\n </p>	2019-01-26 17:17:05	2019-01-26 17:17:11	t
86	1	5	Катаева Юлия	kataeva-ulia	/FTUploads/j5HHxXMOK1y8X6H6vO6AFyLzEHi5tkB3RHwOmrxp.jpeg		\N	\N	\N	\N	\N	<p>Кандидат в мастера спорта по плаванию.<br />\r\nВысшее физкультурно-педагогическое образование. Повышение квалификации: по специальности «Детский фитнес» в возрасте 3-6 лет. Fitron University по специальности тренер водных программ.<br />\r\nОпыт работы в фитнесе – 10 лет<br />\r\nСпециализация: <br />\r\n- снижение веса и коррекции фигуры путем тренировок в воде<br />\r\n- составление плана питания с расчетом КБЖУ для достижения результата в максимально короткие сроки<br />\r\n-обучение плаванию детей от 3-х лет в группе и индивидуально</p>	2019-01-26 17:17:26	2019-01-26 17:17:31	t
87	1	5	Иванков Дмитрий	ivankov-dmitrij	/FTUploads/nuYaHzdmSJBDI6REt9ZwFvNIXcWhivqGj8Pkvc66.jpeg		\N	\N	\N	\N	\N	<p>Мастер спорта по гребле на байдарках.<br />\r\nВысшее педагогическое образование — специализация циклические виды спорта.<br />\r\n Фитнес специализация:<br />\r\n-преодоление страха нахождения в воде<br />\r\n-работа с детьми с 3 лет<br />\r\n-постравматическа реабилитация</p>	2019-01-26 17:17:55	2019-01-26 17:18:02	t
88	1	5	Джалолов Тимур	dzalolov-timur	/FTUploads/iEbrGUmlhbZEtXpBmBQBG5ReJFLXrUDkihkw8GHx.jpeg		\N	\N	\N	\N	\N	<p>2-ой взрослый разряд по плаванию.<br />\r\n Специализация:<br />\r\n- обучение плаванию взрослых и детей<br />\r\n- групповые водные программы и аква-фитнес <br />\r\n- коррекция веса<br />\r\n- реабилитация после травм</p>	2019-01-26 17:18:15	2019-01-26 17:18:19	t
89	1	5	Адрианов Роман	adrianov-roman	/FTUploads/6g81qSD9wQWZgknUJmJSvYqW67eTOiAn2k7nZPgg.jpeg		\N	\N	\N	\N	\N	<p>Мастер Спорта по академической гребле.<br />\r\nСпециализация:  </p>\r\n\r\n<p>-персональный тренинг,</p>\r\n\r\n<p>-аква фитнес</p>\r\n\r\n<p>-работа с детьми</p>\r\n\r\n<p>-коррекция веса</p>\r\n\r\n<p>-постравматическая реабилитация</p>	2019-01-26 17:18:31	2019-01-26 17:18:36	t
90	1	5	Алынин Николай	alynin-nikolaj	/FTUploads/Ld66981pmb3LwHU0IXLKiFjon4IhwReRHJwx5yaK.jpeg		\N	\N	\N	\N	\N	<p>Окончил кубанский государственный университет спорта и туризма.<br />\r\nМастер спорта по гребле на байдарках и каноэ.<br />\r\nСпециализация:  </p>\r\n\r\n<p>-персональный тренинг</p>\r\n\r\n<p>-аква фитнес</p>\r\n\r\n<p>-работа с детьми</p>\r\n\r\n<p>-коррекция веса</p>\r\n\r\n<p>-постравматическая реабилитация.</p>	2019-01-26 17:18:52	2019-01-26 17:18:57	t
91	1	5	Буторин Алексей	butorin-aleksej	/FTUploads/NXILV3JM6fxn3zA6wFjnijqhjOI4oAtTvbnyPMUn.jpeg		\N	\N	\N	\N	\N	<p>Фитнес-специализация:  </p>\r\n\r\n<p>-персональный тренинг</p>\r\n\r\n<p>-аква фитнес</p>\r\n\r\n<p>-работа с детьми</p>\r\n\r\n<p>-коррекция веса</p>\r\n\r\n<p>-постравматическая реабилитация.</p>	2019-01-26 17:19:11	2019-01-26 17:19:17	t
92	2	5	Денисов Антон	denisov-anton	/FTUploads/duip0zkKL9ogsusw8Rfde3jFo2JJjWPC7U4b394s.jpeg	/FTUploads/Wbz67Ra6S6KXEvExvFlnYpVt1XylhSiYmOT7ohBb.jpeg	JC0AT_xHM0E	\N	\N	\N	\N	<p><strong>Премьер-тренер.</strong></p>\r\n\r\n<p><em>Мастер спорта по пауэрлифтингу.</em></p>\r\n\r\n<p><em>МС по гиревому спорту.</em></p>\r\n\r\n<p><em>Чемпион РО по пауэрлифтингу, гиревому спорту, функциональному многоборью. </em></p>\r\n\r\n<p><em>Чемпион России по народному жиму.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2010 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>улучшение состава тела</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>похудение</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>реабилитационный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>улучшение осанки</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>развитие силы и выносливости</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>тренировки с гирями</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>FDM-терапия, кинезио-тейпирование, массаж</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:20:08	2019-01-26 17:20:17	t
93	2	5	Агеева Юлия	ageeva-ulia	/FTUploads/54kSVmPwxNkl2V53ISBceCVAz9qD25wdbYE0TrOe.jpeg	/FTUploads/zDsl9RgYX3WiMzRgZlEesNgCax6VafEZ8twAuSCJ.jpeg	8mtFILOvehs	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>Фитнес Стандарт-курс «Персональный тренер» 2017г.</em></p>\r\n\r\n<p><em>Кандидат в мастера спорта по пауэрлифтингу.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>набор мышечной массы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>изменение состава тела</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>снижение веса</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>увеличение силовых  показателей выносливости</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:20:54	2019-01-26 17:20:59	t
94	2	5	Кочетков Роман	kocetkov-roman	/FTUploads/yi9WmdjjrAOTTdEHdACVK62HyEOyhicRUuMDz8Wd.jpeg	/FTUploads/f2xhahBGQlGMSQUAluw9NNJ145Kjzld165ELy2O2.jpeg	KX1u3SHFXhU	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>КМС по становой тяге.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>персональный тренинг, ориентированный на снижение процента жира</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>набор мышечной массы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>изменение состава тела</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>пауэрлифтинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>развитие скоростно-силовых показателей, выносливости</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:22:23	2019-01-26 17:22:35	t
95	2	5	Спивакова Яна	spivakova-ana	/FTUploads/utIQ0OPLC3iBzptv4XRKqggupFEFLdNH5ja0mFwC.jpeg	/FTUploads/BVQuZInc6kXOcA7lqfbeEIFmOQ2IBL7FdBXJH8Nk.jpeg	ysxv7m_xbww	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>«Инструктор тренажерного зала», «Персональный тренер», «Диетология» школа фитнеса Варвары Медведевой.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>снижение веса тела</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>набор мышечной массы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>увеличение выносливости и функциональная подготовка</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:23:00	2019-01-26 17:23:05	t
96	2	5	Александров Дмитрий	aleksandrov-dmitrij	/FTUploads/SAkc3ZFhoAc32qXHfZvKW1NNj05HncctgspBOywn.jpeg	/FTUploads/UH1vISIG0zWjPu2Oim0FJExr0zyCY4vXdYwVmZb4.jpeg	TUuBr4qPlEk	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>Кандидат в мастера спорта по жиму штанги лежа.</em></p>\r\n\r\n<p><em>Чемпион Северного Кавказа по жиму штанги лежа.</em></p>\r\n\r\n<p><em>Чемпион первенства РО по пауэрлифтингу.</em></p>\r\n\r\n<p><em>Чемпион Кубка Евразии по жиму штанги лежа.</em></p>\r\n\r\n<p><em>Чемпион России по жиму штанги лежа.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>подготовка спортсменов по пауэрлифтингу, жиму штанги лежа, становой тяге</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>реабилитационные тренировки ( исправление осанки, улучшение мобильности суставов, устранение мышечного дисбаланса, тренировки после травм и операций)</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг, похудение, набор мышечной массы</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:23:27	2019-01-26 17:23:33	t
97	2	5	Гречко Николай	grecko-nikolaj	/FTUploads/i6zM1L3AWvFvyJT2uBsihIFWHCUtOn5EMcEJ35rn.jpeg	/FTUploads/bek2wP42VeNKXbojYjePnsHEXyEWMXJ8yI7nV6PB.jpeg	RPBTH7EKbbc	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>Фитнес френд, курсы «Персональный тренер».</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>набор мышечной массы, изменение состава тела, снижение веса, увеличение силовых показателей, выносливости</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:24:06	2019-01-26 17:24:13	t
98	2	5	Литвиненко Дмитрий	litvinenko-dmitrij	/FTUploads/vmvf428Wy2Vlo9m3BRHSMIfrfVZMLp5R9xQDTGo3.jpeg	/FTUploads/g9nzkXod5nEGdxSn0SN1X023eMWgc2gymQNVt61z.jpeg	HGgjxmNDejA	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>Курс Персонального тренера фитнес школы Варвары Медведевой.</em></p>\r\n\r\n<p><em>КМС по легкой атлетике.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>набор мышечной массы,похудение, тонус</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой и функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>беговые программы</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:24:35	2019-01-26 17:24:40	t
100	2	5	Гиль Евгений	gil-evgenij	/FTUploads/roayhzX6Cvz4ydU1T2dd7Q3HtVnvrKWYJEHKXgjD.jpeg	/FTUploads/BsO1cacmDOxupN2JHTDfKwTgBTSSTdjdt2nOkVJu.jpeg	JnRojHhBkOc	\N	\N	\N	\N	<p><strong>Инструктор тренажерного зала.</strong></p>\r\n\r\n<p><em>Фитнес Стандарт-курс «Персональный тренер» 2017г.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>набор мышечной массы, изменение состава тела , снижение веса, увеличение силовых  показателей, выносливости, функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>реабилитационные тренировки</p>\r\n\t</li>\r\n</ul>	2019-01-26 17:25:40	2019-01-26 17:25:44	t
101	3	5	Мирошникова Анастасия	mirosnikova-anastasia	/FTUploads/gPHi2L8HKh4RCFwn7hsih389fmds7niNzBRsGLke.jpeg	/FTUploads/iQdiOhcJ6OFq8XOJbqID2hhEd0T6LDmxJ4vv78sk.jpeg	w22La9wYmBY	\N	\N	\N	\N	<p><strong>Супервайзер Детского Клуба и TeenClub.</strong></p>\r\n\r\n<p><em>Образование:</em></p>\r\n\r\n<p><em>– ЮФУ АФКиС (педагогическое образование, профиль физическая культура); </em></p>\r\n\r\n<p><em>– КМС по акробатическому рок-н-роллу.</em></p>	2019-01-26 17:26:41	2019-01-26 17:26:48	t
102	3	5	Чередниченко Оля	cerednicenko-ola	/FTUploads/TSz7f0mURPqwI0RTh52lQVXYVElaf8SadjIbl1Ma.jpeg	/FTUploads/oqfhVX3RJsX9KdkDB0jNHU7Z9oAbiiiVydBVWUDs.jpeg	9JLdn8VzYWE	\N	\N	\N	\N	<p><strong>Инструктор Детского Клуба и TeenClub.</strong></p>\r\n\r\n<p><em>Образование:</em></p>\r\n\r\n<p><em>– Южный федеральный университет, Ростов-на-Дону , Академия психологии и педагогики, Начальное образование, бакалавриат ( окончила 2015)</em></p>\r\n\r\n<p><em>– Академия физической культуры, Образование в области физической культуры, магистратура ( до 2018)</em></p>	2019-01-26 17:27:14	2019-01-26 17:27:22	t
103	3	5	Рябова Яна	rabova-ana	/FTUploads/U01tArhZ1NEDLJIQW6NTKfgsmYMKJQBQzSUfjlY2.jpeg	/FTUploads/EKJWMfLxeHNHwzhkAvASyh8GnbMxkQleavLqzlCc.jpeg	kDil7_6Y5A4	\N	Рябова Яна - тренер детского клуба FITRON	\N	Специализация тренера и опыт работы в фитнес-сфере. Рябова Яна в финес-клубе Ростова-на-Дону - Fitron. Записаться на занятие к тренеру онлайн.	<p><strong>Инструктор Детского Клуба и TeenClub.</strong></p>\r\n\r\n<p><em>Образование: Белгородский государственный институт искусств и культуры.  Кафедра хореографического творчества. </em></p>\r\n\r\n<p><em>– Серебро в чемпионате России по современным танцевальным направлениям; в этапе кубка Европы.</em></p>\r\n\r\n<p><em>–  Участница всероссийских и международных конкурсов и фестивалей в области хореографического искусства.</em></p>	2019-01-26 17:27:50	2019-01-26 17:28:14	t
104	3	5	Бородина Валентина	borodina-valentina	/FTUploads/6V0x2rSkyZPhxsEabIktxBzZ1pAxZUIKikzgBdKZ.jpeg	/FTUploads/F33JpeKjIway8pJzjCRAfPwT9wYBZQRRGOLorKfi.jpeg	6Qeuo7j8Yro	\N	\N	\N	\N	<p><strong>Инструктор Детского Клуба и TeenClub.</strong></p>\r\n\r\n<p><em>Образование: ЮФУ АФКиС (педагогическое). </em></p>\r\n\r\n<p><em>– Серебр.призер ЧР по лёгкой атлетике 2013</em></p>\r\n\r\n<p><em>– 3 место на Спартакиаде учащихся России 2013.</em></p>\r\n\r\n<p><em>– 1 место на чемпионате Рост.области. 2013-2015.</em></p>	2019-01-26 17:28:42	2019-01-26 17:28:47	t
26	2	2	Трошко Павел	trosko-pavel.	/FTUploads/xLZC5mahMUoaJznVxqaYIETkh0qixb3lE8EFPJNA.jpeg	/FTUploads/pNl9xlojCDeA7mz2UYc8X02C4bOUw1FWAbDU9GdY.jpeg	EM8qvnwQx9w	\N	\N	\N	\N	<p><strong>Фитнес инструктор Тренажерного зала.</strong></p>\r\n\r\n<p><em>МС по жиму лежа, 1-й взр разряд по самбо и рукопашному бою.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Снижение веса, коррекция фигуры</li>\r\n\t<li>Силовой тренинг</li>\r\n\t<li>Набор мышечной массы</li>\r\n\t<li>Функциональный тренинг</li>\r\n\t<li>Подготовка к соревнованиям по фитнесу</li>\r\n\t<li>Рекомендации по питанию и спортивным добавкам</li>\r\n</ul>	2019-01-26 15:21:38	2019-01-29 09:31:45	f
32	3	2	Шошина Ирина	shoshina-irina.	/FTUploads/Nsg9w1QmafEuc0Kb8Tx8axtP8BYX3Vr8aTzLaqVQ.jpeg		\N	\N	\N	\N	\N	<p><strong>Супервайзер детского клуба.</strong> (<em>Высшее педагогическое образование)</em></p>\r\n\r\n<p><em>Опыт работы в компании с 2011 г.</em></p>\r\n\r\n<p><strong>Спортивные достижения:</strong></p>\r\n\r\n<ul>\r\n\t<li><em>КМС по легкой атлетике</em></li>\r\n</ul>\r\n\r\n<p><strong>Специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Сертифицированный инструктор ZUMBA FITNES, ZUMBA KIDS & ZUMBA KIDS JR.</li>\r\n\t<li>Раннее развитие детей, корригирующие программы</li>\r\n</ul>	2019-01-26 15:48:34	2019-01-29 09:32:40	f
36	3	2	Лавриненко Анастасия	lavrinenko-anastasia2.	/FTUploads/HSdcSJzJuAAqmJNCXbOjwV8u40ZPxwuWlMWQQ7FJ.jpeg		\N	\N	\N	\N	\N	<p><strong>Тренер детского клуба</strong>.</p>\r\n\r\n<p><br />\r\n<strong>Спортивные достижения:</strong></p>\r\n\r\n<ul>\r\n\t<li>Мастер спорта по спортивной гимнастике</li>\r\n\t<li>Участие в Российской студенческой весне</li>\r\n\t<li>Победитель международных танцевальных конкурсов</li>\r\n</ul>\r\n\r\n<p><strong>Специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>Акробатика</li>\r\n\t<li>Хореография </li>\r\n\t<li>Тренировки силовой направленности</li>\r\n</ul>\r\n\r\n<p><strong>Куратор<br />\r\nНаправление:</strong> Детский лагерь</p>	2019-01-26 15:57:13	2019-01-29 09:32:51	f
39	1	8	Логинова София	loginova-sofia.	/FTUploads/FVvyZiJuKvZUBIEHxCoKCZd4mWZtnOOIKRDZUEgl.jpeg	/FTUploads/G89CMslwiSipnMnqCXXbqk54s1WbdXkD3PPAQJ57.jpeg	9XNSwtShHD4	\N	\N	\N	\N	<p><strong>Персональный тренер групповых программ. Куратор направления COSMO BALANCE.</strong></p>\r\n\r\n<p><em>Образование: Преподаватель физической культуры и спорта.</em></p>\r\n\r\n<p><em>Спортивные достижения: Призёр танцевальных соревнований. </em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2015 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching, сosmo balance</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>тренировки с подростками и детьми</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:28:44	2019-01-29 09:33:04	f
45	2	8	Атамова Руфина	atamova-rufina.	/FTUploads/vcFscl8sqzI3zsoUIGgHJfOzJLl0VAvrmc6pnvoU.jpeg	/FTUploads/7BU5tQikNhF3OinFDO2fzoazAB6Cf6Wt2zLZzgX3.jpeg	cLMnKpov-p4	\N	\N	\N	\N	<p><strong>Мастер тренер групповых программ, мульти тренер. </strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>Супервайзер групповых программ</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>Супервайзер приходящих специалистов</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>Куратор программ OutDoor</strong></p>\r\n\t</li>\r\n</ul>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2015 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p><strong>функциональный тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>силовой тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>кардио-тренинг</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>stretching</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция композиции тела</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>набор мышечной массы</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>снижение веса</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>коррекция ОДА</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>тренировки с подростками и детьми</strong></p>\r\n\t</li>\r\n\t<li>\r\n\t<p><strong>консультирование по вопросам питания</strong></p>\r\n\t</li>\r\n</ul>	2019-01-26 16:39:08	2019-01-29 09:33:22	f
\.


--
-- Data for Name: training_years; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.training_years (id, training_id, year_id, created_at, updated_at) FROM stdin;
9	21	6	2018-09-11 06:31:28	2018-09-11 06:31:28
16	39	6	2019-01-25 21:35:58	2019-01-25 21:35:58
17	41	6	2019-01-25 21:49:00	2019-01-25 21:49:00
18	42	6	2019-01-25 21:50:07	2019-01-25 21:50:07
19	43	6	2019-01-25 21:50:35	2019-01-25 21:50:35
20	44	6	2019-01-25 22:00:02	2019-01-25 22:00:02
22	48	6	2019-01-25 22:03:32	2019-01-25 22:03:32
24	56	6	2019-01-25 22:39:16	2019-01-25 22:39:16
26	58	6	2019-01-25 22:40:45	2019-01-25 22:40:45
27	57	6	2019-01-25 22:41:46	2019-01-25 22:41:46
28	55	6	2019-01-25 22:41:55	2019-01-25 22:41:55
29	66	6	2019-01-25 22:49:07	2019-01-25 22:49:07
30	71	6	2019-01-25 22:53:41	2019-01-25 22:53:41
31	77	6	2019-01-25 22:57:18	2019-01-25 22:57:18
32	78	6	2019-01-25 22:57:51	2019-01-25 22:57:51
33	79	6	2019-01-25 22:59:27	2019-01-25 22:59:27
34	83	6	2019-01-25 23:01:20	2019-01-25 23:01:20
36	86	6	2019-01-25 23:03:44	2019-01-25 23:03:44
37	87	6	2019-01-25 23:04:16	2019-01-25 23:04:16
38	88	6	2019-01-25 23:04:38	2019-01-25 23:04:38
39	85	6	2019-01-25 23:05:13	2019-01-25 23:05:13
40	94	6	2019-01-25 23:12:28	2019-01-25 23:12:28
41	24	3	2019-01-25 23:30:22	2019-01-25 23:30:22
42	111	4	2019-01-25 23:33:35	2019-01-25 23:33:35
43	31	2	2019-01-25 23:34:05	2019-01-25 23:34:05
44	112	5	2019-01-25 23:37:01	2019-01-25 23:37:01
45	114	3	2019-01-25 23:38:41	2019-01-25 23:38:41
46	115	3	2019-01-25 23:39:10	2019-01-25 23:39:10
47	115	4	2019-01-25 23:39:10	2019-01-25 23:39:10
48	117	6	2019-01-25 23:40:50	2019-01-25 23:40:50
49	120	6	2019-01-25 23:42:06	2019-01-25 23:42:06
50	122	4	2019-01-25 23:43:59	2019-01-25 23:43:59
51	123	3	2019-01-25 23:44:31	2019-01-25 23:44:31
52	127	2	2019-01-25 23:45:48	2019-01-25 23:45:48
53	30	2	2019-01-25 23:49:52	2019-01-25 23:49:52
54	29	2	2019-01-25 23:50:11	2019-01-25 23:50:11
55	134	3	2019-01-25 23:51:05	2019-01-25 23:51:05
56	136	2	2019-01-25 23:52:26	2019-01-25 23:52:26
57	137	3	2019-01-25 23:53:07	2019-01-25 23:53:07
58	32	3	2019-01-25 23:53:23	2019-01-25 23:53:23
59	138	3	2019-01-25 23:53:59	2019-01-25 23:53:59
60	139	4	2019-01-25 23:55:44	2019-01-25 23:55:44
61	139	5	2019-01-25 23:55:44	2019-01-25 23:55:44
62	140	4	2019-01-25 23:56:18	2019-01-25 23:56:18
63	140	5	2019-01-25 23:56:18	2019-01-25 23:56:18
64	141	4	2019-01-25 23:57:28	2019-01-25 23:57:28
65	141	5	2019-01-25 23:57:28	2019-01-25 23:57:28
66	142	4	2019-01-25 23:58:07	2019-01-25 23:58:07
67	142	5	2019-01-25 23:58:07	2019-01-25 23:58:07
68	143	4	2019-01-26 00:00:15	2019-01-26 00:00:15
69	143	5	2019-01-26 00:00:15	2019-01-26 00:00:15
70	144	2	2019-01-26 00:00:48	2019-01-26 00:00:48
71	144	3	2019-01-26 00:00:48	2019-01-26 00:00:48
72	145	2	2019-01-26 00:01:37	2019-01-26 00:01:37
73	145	3	2019-01-26 00:01:37	2019-01-26 00:01:37
74	146	3	2019-01-26 00:02:10	2019-01-26 00:02:10
75	147	3	2019-01-26 00:02:52	2019-01-26 00:02:52
76	147	4	2019-01-26 00:02:52	2019-01-26 00:02:52
77	147	5	2019-01-26 00:02:52	2019-01-26 00:02:52
78	148	4	2019-01-26 00:03:30	2019-01-26 00:03:30
79	148	5	2019-01-26 00:03:30	2019-01-26 00:03:30
80	149	2	2019-01-26 00:04:17	2019-01-26 00:04:17
81	149	3	2019-01-26 00:04:17	2019-01-26 00:04:17
82	150	4	2019-01-26 00:04:57	2019-01-26 00:04:57
83	150	5	2019-01-26 00:04:57	2019-01-26 00:04:57
84	151	5	2019-01-26 00:07:16	2019-01-26 00:07:16
85	152	4	2019-01-26 00:08:24	2019-01-26 00:08:24
86	152	5	2019-01-26 00:08:24	2019-01-26 00:08:24
87	153	4	2019-01-26 00:09:03	2019-01-26 00:09:03
88	153	5	2019-01-26 00:09:03	2019-01-26 00:09:03
89	154	2	2019-01-26 00:09:33	2019-01-26 00:09:33
90	154	3	2019-01-26 00:09:33	2019-01-26 00:09:33
91	155	3	2019-01-26 00:10:03	2019-01-26 00:10:03
92	156	2	2019-01-26 00:10:40	2019-01-26 00:10:40
93	156	3	2019-01-26 00:10:40	2019-01-26 00:10:40
94	157	4	2019-01-26 00:11:20	2019-01-26 00:11:20
95	157	5	2019-01-26 00:11:20	2019-01-26 00:11:20
96	158	4	2019-01-26 00:11:54	2019-01-26 00:11:54
97	158	5	2019-01-26 00:11:54	2019-01-26 00:11:54
98	159	3	2019-01-26 00:12:42	2019-01-26 00:12:42
99	159	4	2019-01-26 00:12:42	2019-01-26 00:12:42
100	160	3	2019-01-26 00:13:13	2019-01-26 00:13:13
101	164	6	2019-01-26 00:17:28	2019-01-26 00:17:28
102	165	6	2019-01-26 00:17:55	2019-01-26 00:17:55
104	166	6	2019-01-26 00:18:31	2019-01-26 00:18:31
105	167	6	2019-01-26 00:18:59	2019-01-26 00:18:59
106	169	6	2019-01-26 00:20:05	2019-01-26 00:20:05
\.


--
-- Data for Name: trainings; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.trainings (id, category_id, type_training_id, sort, name, min_time, max_time, url, image, seo_h1, seo_title, seo_keywords, seo_description, preview, description, created_at, updated_at, active) FROM stdin;
5	3	1	520	Lean Legs	55	\N	lean-legs	/FTUploads/jzVjpqW9ylAZM2DBhQlBEff73am3CBONX2TCEgKJ.jpeg	\N	LEAN LEGS - силовая программа тренировки по выгодной цене в фитнес-клубе FITRON	\N	LEAN LEGS в фитнес -клубе FITRON. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Силовая тренировка  улучшающая  форму, силу и выносливость мышц ног и ягодиц, улучшает кардио выносливость, способствует снижению веса. Улучшает рельефность сильных ног и круглых ягодиц.</p>	2018-07-23 08:19:22	2018-07-31 11:15:09	t
6	3	1	540	Lean  Arms	55	\N	lean-arms	/FTUploads/Ayyse4sKDF72qE9DxvjrkGdIRyfXqom0LLel5c95.jpeg	\N	LEAN ARMS - силовая программа тренировки по выгодной цене в фитнес-клубе FITRON	\N	LEAN ARMS в фитнес -клубе FITRON. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от низкого до среднего.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Силовая тренировка укрепляет   мышцы верхнего плечевого пояса,  мышцы плеча, рук и спины, развивает мышцы груди.  А так же улучшает кардио выносливость и способствует снижению веса.</p>	2018-07-23 08:26:00	2018-07-31 11:18:00	t
8	3	4	580	Core	30	\N	core	/FTUploads/2TT8T0yesxjoNxIjXt05AmATUTtVvc45Wquw7eee.jpeg	\N	Программа Core - цена на силовую программу тренировки в фитнес-клубе FITRON	\N	CORE в фитнес -клубе FITRON. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong>  средняя</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Программа  предназначена для эффективного развития и укрепления мышц брюшного пресса, а так же снятия нагрузки с поясницы. Кроме того, ряд упражнений курса укрепляет мышцы спины, поскольку они являются мышечными антагонистами прессу, а значит, их развитие также способствует развитию прорабатываемой области живота.</p>	2018-07-23 08:39:38	2018-07-31 11:18:39	t
4	3	1	500	X-Press-Core	\N	45	x-press-core	/FTUploads/xVtmdsMHlPsWoOOoGfhlNsbp48uyaBTpbNG2VUzy.jpeg	\N	X-PRESS-CORE - силовая программа тренировки по выгодной цене в фитнес-клубе FITRON	\N	X-PRESS-CORE в фитнес -клубе FITRON. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от низкого до среднего.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Тренировка, способствует формированию мышечного корсета удерживающего позвоночник, укрепляет мышцы брюшного пресса, разгибателей позвоночника, косые и межреберные мышцы. Снижает усталость спины, способствует формированию осанки.</p>	2018-07-23 08:16:44	2018-07-23 10:24:48	t
11	7	1	540	Ft challenge	55	\N	ft-challenge	/FTUploads/7AmN4tifvHOcDvEBYjghVwmCLlFH8C37w7X7E835.jpeg	\N	Ft Challenge: функциоанльный тренинг с гирями по выгодной цене в фитнес – клубе FITRON	\N	FT CHALLENGE  в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT CHALLENGE  в фитнес – клубе FITRON.	<p>Высокоинтенсивная тренировка, направленная на проработку основных групп мышц и развитие силовой выносливости.Способствует снижению веса.</p>	<p><strong>Интенсивность: </strong>высокая</p>\r\n\r\n<p>Функциональная тренировка с использованием различного оборудования(гантели,гири,BOSU и т.д)</p>\r\n\r\n<p>Высокоинтенсивная  тренировка, направленная на проработку основных групп мышц ,увеличение мышечной силы и выносливости.Тренировка проводится с заданным темпом и интервалами отдыха.</p>	2018-07-31 11:26:16	2018-07-31 11:26:16	t
12	7	1	560	FT challenge friends	55	55	ft-challenge-friends	/FTUploads/er4v8c5FUhV7vO53AyngbzxEtte53bK9ilWr5JlW.jpeg	\N	FT CHALLENGE FRIENDS: тренировки по выгодной цене в фитнес – клубе FITRON	\N	FT CHALLENGE FRIENDS в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT CHALLENGE FRIENDS в фитнес – клубе FITRON.	\N	\N	2018-07-31 12:56:10	2019-01-25 21:18:35	t
10	7	1	520	FT INTERVAL	45	\N	ft-interval	/FTUploads/gUOv5UdanIIauMSHYsraqsTOi7NqQDQgiTvld0aS.jpeg	\N	Интервальная тренировка для сжигания жира: цены на interval training в фитнес-клубе Фитрон	\N	FT INTERVAL в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT INTERVAL в фитнес – клубе FITRON.	<p style="color:#3498db">Тренировка с  использованием дополнительного оборудования,работа с весом собственного тела,интенсивная тренировка,направленная на проработку основных мышечных групп мышц и развитие силовой выносливости.Способствует снижению веса.</p>	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Функциональная тренировка направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений с заданным количеством повторений и с фиксированным отдыхом между подходами. Позволяет достигать комплексного развития физических способностей и успешно содействует повышению общей работоспособности организма.</p>	2018-07-31 11:24:26	2018-10-04 16:50:27	t
13	7	1	580	FT INTERVAL Friends	45	45	ft-interval-friends		\N	\N	\N	\N	\N	<p>Функциональная тренировка направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений с заданным количеством повторений и с фиксированным отдыхом между подходами. Позволяет достигать комплексного развития физических способностей и успешно содействует повышению общей работоспособности организма. </p>	2018-07-31 13:00:41	2018-07-31 13:00:59	t
14	7	1	600	COSMO SCULPT	\N	\N	cosmo-sculpt		\N	\N	\N	\N	\N	\N	2018-07-31 13:01:45	2018-07-31 13:02:01	t
21	13	1	500	YOGA Iyengar	90	90	yoga-iyengar	/FTUploads/MXmo0cEZmWgaIJJ0GON07Xar4n0rzjv0oPZys1sR.jpeg	\N	YOGA IYENGAR: тренировки по выгодной цене в фитнес – клубе FITRON	\N	YOGA IYENGAR  в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на YOGA IYENGAR в фитнес – клубе FITRON.	\N	<p>Серия «асан», связанных между собой динамическими движениями, в ритме определенного дыхания, и концентрацией внимания на точках. Поступательное движение к гармонии тела и ума через равномерное неагрессивное вытяжение одних частей тела и расслабление других; управление дыханием.</p>	2018-09-11 06:31:28	2018-09-11 06:31:28	t
22	13	1	500	Йога	90	120	yoga	/FTUploads/HFXo6KnTiKhV3wL35iHElKaumquIvkJ2bJyVGgB8.jpeg	Йога	Йога для начинающих: цены на тренировки по йоге для похудения в Ростове, фитнес-клуб Фитрон	\N	Йога в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на Йога в фитнес – клубе FITRON.	\N	<p>Йога — комплекс упражнений, который помогает улучшить растяжку, снять мышечное напряжение, очистить разум от негативных эмоций и навязчивых мыслей. Она позволяет быстро успокоиться, обрести душевное равновесие и гармонию во всех областях жизни. Несмотря на убежденность многих, это фитнес-направление не вероисповедание или навязываемая религия, а своеобразная философия здорового образа жизни.</p>\r\n\r\n<p>Профессионально подобранная программа в спортивном центре «Фитрон» в Ростове-на-Дону обеспечивает эффективную физическую нагрузку в спокойном размеренном темпе, где особое внимание уделяется дыханию. Йога поможет Вам улучшить подвижность суставов, выпрямить осанку и устранить боли в спине, сделать фигуру стройной. А в качестве бонуса настроение будет радостным и умиротворенным.</p>\r\n\r\n<h2>Занятия йогой для начинающих</h2>\r\n\r\n<p>Инструктор — это опытный практик, который поможет новичку быстро и с легкостью, а главное правильно, освоить специальные упражнения по йоге, называющиеся асанами. Большое значение имеет точное повторение позиций, всех движений и спокойное, без задержек, дыхание. Чтобы занятие приносило максимальную пользу, начинать заниматься йогой нужно с самых основ и легких асан, и только достигнув в них совершенства, переходить к более сложным позициям.</p>\r\n\r\n<p>Профессиональный тренер клуба «Фитрон» поможет дисциплинировать себя, нацелиться на результат, постепенно освоить все тонкости этого фитнес-направления и подобрать индивидуальную программу для улучшения самочувствия и здоровья. Быстро заметить положительные изменения позволят ежедневные занятия. Но для начинающих достаточной нагрузкой будет и 2-3 раза в неделю. Тренер по йоге строит урок в определенной последовательности. Сначала идет разминка для разогрева мышц, потом комплекс упражнений, а завершается занятие обычно позой покоя — шавасаной, в которой все тело расслабляется на протяжении 10-15 минут, а мозг получает своеобразную перезагрузку.</p>\r\n\r\n<p>Асаны просты лишь на первый взгляд, выполняя их неправильно можно получить травму или не достичь желаемого результата. Профессионал поможет извлечь максимальную пользу от занятий. Чтобы записаться, Вы можете посмотреть расписание на сайте или получить консультацию у менеджера клуба по телефону или в режиме онлайн. Стоимость клубной карты выгоднее, чем выбор одного занятия, а регулярные тренировки — полезнее для здоровья. За доступную цену Вы получаете полный доступ на любые тренировки клуба в удобное для вас время.</p>\r\n\r\n<h2>Йога для похудения</h2>\r\n\r\n<p>Похудение с помощью йоги возможно благодаря нескольким факторам. Во-первых, занятия обеспечивают достаточную нагрузку на разные группы мышц, благодаря чему сжигаются лишние калории. Во-вторых, йога ускоряет обмен веществ, как следствие — уходят жировые отложения с боков и живота, мышцы обретают красивый и выраженный рельеф, ягодицы и ноги становятся подтянутыми, женщина ощущает себя более гибкой и пластичной. В-третьих, регулярные тренировки излечивают от пагубной тяги к вредной еде, позволяют наладить правильный рацион питания.</p>\r\n\r\n<p>Польза методики также выражается в стимуляции пищеварения и очищении почек, печени. Здоровое функционирование желудочно-кишечного тракта помогает успешно снизить вес, а также чувствовать себя бодрее и легче каждый день.</p>\r\n\r\n<h2>Преимущества и особенности тренировок</h2>\r\n\r\n<p>Йога — эффективная и проверенная столетиями практика, которая одновременно позитивно действует на физическое тело, мысли и эмоции человека. Она помогает обрести равновесие, выносливость, почувствовать прилив сил и радость. Преимущество занятий раскрывается во многих факторах:</p>\r\n\r\n<ul>\r\n\t<li>лечение болей в спине, отложений солей, искривлений позвоночника;</li>\r\n\t<li>замедление процессов старения;</li>\r\n\t<li>улучшение гибкости суставов и физических возможностей мышц всего тела;</li>\r\n\t<li>помощь в борьбе с астмой, бессонницей, болями, артритами и послеродовой депрессией;</li>\r\n\t<li>укрепление иммунитета и очищение кишечника;</li>\r\n\t<li>насыщение внутренних органов дополнительным кислородом, благодаря которому они работают более эффективно;</li>\r\n\t<li>нормализация давления;</li>\r\n\t<li>улучшение внешнего вида кожи.</li>\r\n</ul>	2018-09-11 06:35:44	2019-01-25 23:11:19	t
24	14	1	500	Спутники	40	0	sputniki	/FTUploads/gZe8DVK7n3ab6r56d9E7jsSYhfQ587ivvAhoRfbt.jpeg	\N	СПУТНИКИ - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	СПУТНИКИ - выгодные цены на индивидуальные и групповые программы в бассейне. Фитнес для похудения в клубе FITRON.	\N	<p><strong>Интенсивность: </strong>Средняя</p>\r\n\r\n<p><strong>Сложность:</strong> Для начального уровня подготовленности</p>\r\n\r\n<p><strong>Описание:</strong> Программа направлена на обучение плаванию,начальных навыков и совершенствование техники плавательных движений.В уроке используются эстафеты,игры ,задания в воде. Все это поможет вашему ребенку быть сильным, ловким и здоровым.</p>	2018-09-11 06:43:42	2019-01-25 23:30:22	t
9	7	1	500	FT TRX	55	\N	ft-trx	/FTUploads/OTFFnFuDXq9cX5IOlKSOVsoL7gqIN2mr3KfNSM23.jpeg	\N	TRX тренировка: групповые силовые и функциональные тренировки на петлях trx в фитнес-клубе Фитрон	\N	Групповая силовая тренировка на петлях TRX. Групповая тренировка для спортсменов любого уровня подготовки. Записаться на тренировку онлайн в фитнес-клуб Fitron.	\N	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> функциональная тренировка с использованием специального оборудования ремней TRX.</p>	2018-07-31 11:22:27	2019-01-30 16:50:59	t
34	13	1	500	OUTDOOR (COSMO BALANCE)	60	0	outdoor-cosmo-balance		\N	\N	\N	\N	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	2018-09-11 08:20:50	2018-09-11 08:20:50	t
31	14	1	500	КОМЕТЫ	30	30	komety		\N	КОМЕТЫ - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку КОМЕТЫ в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2018-09-11 08:02:58	2019-01-25 23:34:05	t
30	15	1	500	Луноходы	30	\N	lunohody	/FTUploads/34p3jE9hQ8MsVFhHRoF8VVnd8dbe9AW8VpRlBNWI.jpeg	\N	ЛУНОХОДЫ: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	ЛУНОХОДЫ - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> прфилактика плоскостопия.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Урок направлен  на укрепление мышц стопы и голени, включены упражнения для формирования свода стопы и голени.Профилактика обеспечит ребенку  здоровые стопы и уменьшит риск заболевания плоскостопия.</p>	2018-09-11 07:59:50	2019-01-25 23:49:52	t
29	15	1	500	Космическая зарядка	30	\N	kosmiceskaa-zaradka	/FTUploads/7Orjqu9cmQ41qxCtkb2miHQCp1uWM4k8Mj6H6jcN.jpeg	\N	КОСМИЧЕСКАЯ ЗАРЯДКА: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	КОСМИЧЕСКАЯ ЗАРЯДКА - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON	\N	<p><strong>Направленность:</strong> игровая, общеразвивающая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Развитие  основных видов двигательных качеств. На этом уроке ждет ребят:  сказочное путешествие, веселые игры, танцы и все самое интересное.</p>	2018-09-11 07:54:43	2019-01-25 23:50:11	t
32	15	1	500	Хоп-хоп	45	0	hop-hop	/FTUploads/nXtNq5SRlQdIOPwV7Rjgdsg7RyVx8KkaYYL8fYXm.jpeg	\N	ХИП-ХОП: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	ХИП-ХОП - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> игровая - силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Динамичный урок, с использованием специальных мячей большого размера, включающий элементы эстафет,подвижных игр, развивает координацию движения, быстроту и  выносливость  ребенка.</p>	2018-09-11 08:07:51	2019-01-25 23:53:23	t
36	15	4	500	Бокс для детей	55	0	boks-dla-detej	/FTUploads/wv5RqFcrLsCkoR6DNkF5yZZywj5CXcLqVRghK3b7.jpeg	\N	Бокс для детей - записать ребенка на детский бокс в Ростове-на-Дону, цены в FITRON	\N	Детская программа Бокс для детей в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	<p>Тренировки по боксу в первую очередь помогают развитию<br />\r\nкоординации движений, тренируют вестибулярный аппарат, учат владеть телом, вниманию, сосредоточенности. Кроме того — это хорошая физическая нагрузка на все группы мышц.</p>	<p>Бокс — одна из самых популярных и интересных для ребенка разновидностей борьбы, которая при регулярных занятиях помогает улучшить такие важные качества, как смелость, выносливость, скорость реакции и сила. Тренинг по боксу позволяет не только обучить детей приемам самообороны и развить их физическую форму, но и привить им правильные моральные и нравственные ценности, укрепить моральный дух, усовершенствовать логическое мышление. Его преимущество в том, что это система подготовки, сформированная на протяжении не одной сотни лет.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Тренировки по боксу для детей</h2>\r\n\r\n<p>Уроки борьбы в спортивном клубе «Фитрон» проходят в профессиональных спортивных залах с применением современного оборудования. Их ведут опытные инструкторы со специальной подготовкой и наивысшей тренерской квалификацией. Используются не только классические проверенные годами методики, но и современные оригинальные подходы. Так любой урок становится для детей не только полезным, но и интересным.</p>\r\n\r\n<p>Главной задачей в младшей возрастной группе является обучение работе в коллективе, дисциплине и точному выполнению установок инструктора. Тренировки для детей проводятся преимущественно в игровой форме, иногда с соревновательными элементами. Дети учат основные элементы бокса: перемещения, удары, стойки, защиту. Все движения отрабатываются перед зеркалом, на лапах или в паре.</p>\r\n\r\n<p>Ребята постарше уже допускаются к полноценному изучению школы бокса. С ними серьезно прорабатывается техника ведения боя, защитные навыки, постановка правильных ударов. Тренер ставит задания для пар и под бдительным контролем допускает подростков к спаррингам. Немаловажное значение придается развитию спортивной формы, выносливости, скорости, а также улучшению гибкости и координации.</p>\r\n\r\n<p> </p>\r\n\r\n<p><strong>Преимущества тренировок по боксу для детей</strong></p>\r\n\r\n<p>Все физические нагрузки строго дозированы и наращиваются постепенно. Инструктор обеспечивает детям любого возраста безопасную и поэтапную программу подготовки. Регулярные занятия обеспечивают ряд позитивных изменений:</p>\r\n\r\n<ul>\r\n\t<li>оттачивание координации;</li>\r\n\t<li>активная проработка выносливости и вестибулярного аппарата;</li>\r\n\t<li>улучшение работы психики;</li>\r\n\t<li>укрепление моральных качеств;</li>\r\n\t<li>приобретение умения оценивать опасность;</li>\r\n\t<li>развитие терпения, чувства ответственности и характера;</li>\r\n\t<li>хорошее развитие для всех групп мышц;</li>\r\n\t<li>обучение владению своим телом;</li>\r\n\t<li>улучшение тактического мышления;</li>\r\n\t<li>развитие способности по принятию быстрых решений в любых экстремальных ситуациях;</li>\r\n\t<li>устранение проблем при общении со сверстниками;</li>\r\n\t<li>формирование полноценной личности.</li>\r\n</ul>\r\n\r\n<p>Если тренировки начинаются с малых лет, то формируется правильное восприятие спорта, как искусства, а не простых боев.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Методические особенности детского бокса</h2>\r\n\r\n<p>Детский бокс аналогичен взрослому, но в нем есть определенные особенности. Помимо изучения техники боя, тренер пристальное внимание уделяет формированию красивой ровной осанки. Он учитывает возрастные особенности организма, чтобы не оказывать лишней нагрузки на позвоночник. Тренировки могут посещать не только мальчики, но и девочки. Однако бокс — преимущественно мужской вид спорта, поэтому девочкам, у которых нет выдающихся спортивных способностей, на уроках будет трудно.</p>\r\n\r\n<p>В боксе, в отличие от восточных единоборств, используется непосредственное силовое противостояние в спарринге. Поэтому немалую часть времени на тренировках занимает силовая подготовка и развитие физических качеств спортсмена. В боксерском поединке никто на сто процентов не застрахован от травм и ушибов. Перед началом занятий лучше посоветоваться с врачом ребенка, чтобы определить достаточно ли крепкое у него здоровье.</p>	2018-09-11 08:54:57	2019-01-25 23:59:35	t
38	7	1	500	Ft calisthenics	55	0	ft-calisthenics	/FTUploads/GG5Bvgx6WjTpedPt09Ne5LAchbDuRP6Xdp2aYqpN.jpeg	\N	FT CALISTHENICS: тренировки по выгодной цене в фитнес – клубе FITRON	\N	FT CALISTHENICS в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT CALISTHENICS в фитнес – клубе FITRON.	<p>Улучшение координации и баланса, укрепление суставов, легкость и простота выполнения, работа большенства мышечных групп, оздоровительный эффект.</p>	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> силовая работа ,без использования  оборудования, только с весом собственного тела.</p>	2019-01-25 21:25:20	2019-01-25 21:25:20	t
39	7	1	500	OUTDOOR (FT INTERVAL)	45	45	outdoor		\N	\N	\N	\N	<p>Функциональная тренировка, направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений, с заданным количеством повторений и с фиксированным временем отдыха между повторами. Тренировка на улице помогает насытить клетки кислородом, обеспечивает прилив энергии, гарантирующий более качественное выполнение упражнений и мощный эффект от тренировок.</p>	<p>Функциональная тренировка, направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений, с заданным количеством повторений и с фиксированным временем отдыха между повторами. Тренировка на улице помогает насытить клетки кислородом, обеспечивает прилив энергии, гарантирующий более качественное выполнение упражнений и мощный эффект от тренировок.</p>	2019-01-25 21:35:47	2019-01-25 21:35:58	\N
40	7	1	500	OUTDOOR (F BOX)	0	0	outdoor-f-box		\N	\N	\N	\N	\N	\N	2019-01-25 21:36:18	2019-01-25 21:36:29	\N
41	3	1	500	Antiage	45	45	antiage	/FTUploads/zmQv4DMf6I7IfVvzmA8AeO5345M2ms5fpI73xRoU.jpeg	\N	Круговая тренировка - записаться на круговую тренировку в тренажерном зале фитнес-клуба Фитрон	\N	Тренировка ANTIAGE в фитнес-клубе Фитрон. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p>Круговая тренировка на специальных тренажерах Life Fitness. </p>	2019-01-25 21:49:00	2019-01-25 21:49:00	t
28	3	2	600	COSMO PUMP FRIENDS	0	0	cosmo-pump-friends		\N	Групповая тренировка [H1] в фитнес-клубе Фитрон, Ростов-на-Дону	\N	Тренировка COSMO PUMP FRIENDS в фитнес-клубе Фитрон. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	\N	2018-09-11 07:42:59	2019-01-25 21:49:39	t
42	3	1	500	ГИРИ	55	55	giri		\N	Тренировки с гирями - силовые занятия в фитнес-клубе Фитрон	\N	Тренировка ГИРИ в фитнес-клубе Фитрон. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p>Гиревой спорт- циклический вид спорта, в основе которого лежит подъем максимально возможное число раз за отведенный промежуток времени в положении стоя.</p>\r\n\r\n<p>Работа с гирями не только помогает укрепить мышцы, но и развивает силу, выносливость и хорошую координацию движений.</p>	2019-01-25 21:50:07	2019-01-25 21:50:07	t
43	3	1	500	FIT BODY	55	55	fit-body		\N	FIT BODY - записаться на силовую тренировку на все мышечные группы в Ростове-на-Дону	\N	Тренировка FIT BODY в фитнес-клубе Фитрон. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	<p>Силовая тренировка на все мышечные группы с использованием тренажеров и свободного веса. Занятия в формате мини-группы позволят Вам находиться под постоянным контролем тренера, что гарантирует более качественное занятие и незамедлительный прогресс. Тренировки проводятся с учетом Вашего уровня подготовки и индивидуальных особенностей.</p>	2019-01-25 21:50:35	2019-01-25 21:50:35	t
82	11	1	500	Весенние танцы	0	0	vesennie-tancy		\N	Весенние танцы - танцевальная программа для начинающих в фитнес-клубе FITRON	\N	Танцевальная программа Весенние танцы в Ростове-на-Дону. Узнать подробнее про тренировку по танцам Весенние танцы в фитнес-клубе Fitron.	\N	\N	2019-01-25 23:00:49	2019-01-25 23:00:49	t
44	3	1	500	COSMO TRAINING	55	55	cosmo-training		\N	COSMO TRAINING - силовая программа тренировки по выгодной цене в фитнес-клубе FITRON	\N	Тренировка COSMO TRAINING в фитнес-клубе Фитрон. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	<p>Тренировка направлена на проработку всех мышечных групп с использованием тренажеров и свободного веса.</p>	<p>Тренировка направлена на проработку всех мышечных групп с использованием тренажеров и свободного веса.</p>	2019-01-25 22:00:02	2019-01-25 22:00:02	t
45	8	1	500	Cosmo Pump	60	0	cosmo-pump	/FTUploads/69VYS9w4TO08ctvSOXQCQ8WYSX2IJlgi2L3ciFLa.jpeg	\N	COSMO PUMP - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO PUMP в Ростове-на-Дону. Узнать расписание занятий COSMO PUMP и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность:</strong> силовая </p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская программа в которой используется штанга с регулируемым весом, направленная на развитие силовой выносливости и формирования рельефа основных мышечных групп.Главное отличае от традиционных силовых занятий-высокий темп и большое количество повторений.Самый короткий путь к хорошей физической форме.</p>	2019-01-25 22:01:22	2019-01-25 22:01:22	t
46	8	1	500	Cosmo Combo	60	\N	cosmo-combo	/FTUploads/C6tViMbBx1e71FeWnZjujNs3colZ8snXXIWohkjo.jpeg	\N	COSMO COMBO - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO COMBO в Ростове-на-Дону. Узнать расписание занятий COSMO COMBO и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность:</strong> кардио тренировка с элементами боевых искусств.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская интенсивная программа с элементами боевых искусств. Энергичная, взрывная, лучший антистресс в наше время! Улучшает координацию движений, силу и выносливость всех мышц, повышает уверенность в себе. Удар по избыточному весу и лишним калориям.</p>	2019-01-25 22:01:57	2019-01-25 22:01:57	t
47	8	1	500	Cosmo Balance	55	0	cosmo-balance	/FTUploads/hlbbBbWYSPKquM5n3YhKqUDAhKvLIS7Cb90YPmnp.jpeg	\N	COSMO BALANCE - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO BALANCE в Ростове-на-Дону. Узнать расписание занятий COSMO BALANCE и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность:</strong> Mind Body .</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>. Авторская программа с элементами Йоги, Тай-Чи, Пилатес и стретчинга, нацелена на сосредоточенную и сбалансированную работу всего тела.Развивает  гибкость и увеличивает подвижность в суставах, улучшает осанку, позволит почувствовать гармонию души и тела.</p>	2019-01-25 22:02:43	2019-01-25 22:02:43	t
48	8	1	500	Zumba	45	45	zumba	/FTUploads/Og5XBpPsWyj9yv9OdQiHbFco7tyIKcDQldccATfE.jpeg	\N	\N	\N	\N	\N	<p>Зумба — одна из самых зажигательных и веселых тренировок среди всех, что предлагает fitness-центр «Фитрон» в Ростове-на-Дону. Среди ее достоинств не только отличное настроение и невероятный заряд бодрости, но и отменная эффективность. Уроки помогают поддерживать хорошую спортивную форму, быстро избавиться от лишнего веса, а также научиться многим движениям из различных латиноамериканских танцев. Тренировка проходит непринужденно, не требует особых усилий и специальных навыков, поэтому подходит абсолютно для всех желающих, включая начинающих.</p>\r\n\r\n<p><strong>Танцевальная фитнес-программа Zumba</strong></p>\r\n\r\n<p>Zumba — это оригинальное сочетание аэробики, фитнес-упражнений и движений латиноамериканских танцев. Занятие относится к кардиотренировкам. В него могут быть включены элементы ча-ча-ча, кумбии, мамбо, самбы, сальсы, реггетона. Помимо популярных модных стилей колумбийского уличного танца, профессиональный тренер может разнообразить занятие движениями из джаз-фанка, индийского или арабского танцевальных направлений.</p>\r\n\r\n<p>Комбинация многих упражнений делает каждую тренировку по-новому захватывающей, а также позволяет проработать все мышечные группы с равномерным распределением нагрузки. Похудение обеспечивают такие энергозатратные движения как выпады, приседания, скручивания, не менее эффективно действует очень быстрый темп танца. Занятие включает несколько последовательных этапов: разминку, силовую нагрузку с разучиванием связок базовых движений и dance-импровизацию.</p>\r\n\r\n<p><strong>Зачем заниматься зумбой?</strong></p>\r\n\r\n<p>Зумба — это в первую очередь интенсивная кардиотренировка, поэтому она способствует усилению кровотока и активному сжиганию калорий. Польза от разнообразных движений заключается в равномерном распределении нагрузки: можно поддерживать активный темп и не надо останавливаться, чтобы дать мышцам отдохнуть. Ритм и возможность регулировать интенсивность делают занятие легким и непринужденным. За одну тренировку расходуется минимум 500 калорий, несмотря на то, что работа над формой проводится исключительно своим весом.</p>\r\n\r\n<p>Танец выполняется под зажигательную музыку, поэтому очень сложно устоять на месте, а время пролетает незаметно. Риск переутомления или повреждения мышц сводится к минимуму. При регулярных занятиях хорошо прорабатываются все группы мышц, особенно нижней части тела (ягодицы и бедра), живота.</p>\r\n\r\n<p><strong>Преимущества и особенности тренировок</strong></p>\r\n\r\n<p>Обучение танцевальным элементам проходит без напряжения и долгого разучивания: все движения предельно просты, но при этом красивы и пластичны. Регулярные занятия зумбой обеспечивают массу преимуществ:</p>\r\n\r\n<ul>\r\n\t<li>улучшение работы органов малого таза;</li>\r\n\t<li>нормализация метаболизма;</li>\r\n\t<li>избавления от стресса, мышечного и морального напряжения;</li>\r\n\t<li>тренировка сердечно-сосудистой системы;</li>\r\n\t<li>насыщение крови кислородом;</li>\r\n\t<li>улучшение координации и растяжки;</li>\r\n\t<li>избавление от лишних калорий, жировых отложений;</li>\r\n\t<li>приобретение подтянутой формы и пластичности движений;</li>\r\n\t<li>отличный вариант для начинающих и недавно родивших женщин.</li>\r\n</ul>\r\n\r\n<p>Цена на абонемент всегда выгоднее, чем на одно занятие, поэтому стоит задуматься о пользе для тела и кошелька. Записаться на тренировку можно у администратора клуба.</p>	2019-01-25 22:03:23	2019-01-25 22:03:32	\N
49	8	1	500	Cosmo Cycle	50	\N	cosmo-cycle	/FTUploads/aydbwnUwjYwNKNiDIkgNDqhsdETGtdCZFkNby12u.jpeg	\N	COSMO CYCLE - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO CYCLE в Ростове-на-Дону. Узнать расписание занятий COSMO CYCLE и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность:</strong> кардио </p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская программа на велотренажере под зажигательную музыку. Незабываемая велогонка способная сжечь колосальное количество  калорий и достич хорошей физической формы за короткий промежуток времени.Это проще чем езда на велосипеде!</p>	2019-01-25 22:04:03	2019-01-25 22:04:03	t
71	11	1	500	Зумба	45	0	zumba	/FTUploads/acsS1H8mY8rLURfBZd1KaM9ePf8R0oDzqd3r7JWF.jpeg	Зумба	Зумба фитнес - записаться на занятия по ZUMBA в фитнес-клубе Фитрон, Ростов-на-Дону	\N	Зумба для похудения в фитнес-клубе в Ростове. Расписание уроков Зумба Фитнес для начинающих, цены.	<p>Атмосфера фитнес вечеринки поможет вам раскрыться и почувствовать свое тело.</p>	<p><strong>Зумба</strong> — одна из самых зажигательных и веселых тренировок среди всех, что предлагает fitness-центр «Фитрон» в Ростове-на-Дону. Среди ее достоинств не только отличное настроение и невероятный заряд бодрости, но и отменная эффективность. Уроки помогают поддерживать хорошую спортивную форму, быстро избавиться от лишнего веса, а также научиться многим движениям из различных латиноамериканских танцев. Тренировка проходит непринужденно, не требует особых усилий и специальных навыков, поэтому подходит абсолютно для всех желающих, включая начинающих.</p>\r\n\r\n<h2>Танцевальная фитнес-программа Zumba</h2>\r\n\r\n<p><strong>Zumba</strong> — это оригинальное сочетание аэробики, фитнес-упражнений и движений латиноамериканских танцев. Занятие относится к кардиотренировкам. В него могут быть включены элементы ча-ча-ча, кумбии, мамбо, самбы, сальсы, реггетона. Помимо популярных модных стилей колумбийского уличного танца, профессиональный тренер может разнообразить занятие движениями из джаз-фанка, индийского или арабского танцевальных направлений.</p>\r\n\r\n<p>Комбинация многих упражнений делает каждую тренировку по-новому захватывающей, а также позволяет проработать все мышечные группы с равномерным распределением нагрузки. Похудение обеспечивают такие энергозатратные движения как выпады, приседания, скручивания, не менее эффективно действует очень быстрый темп танца. Занятие включает несколько последовательных этапов: разминку, силовую нагрузку с разучиванием связок базовых движений и dance-импровизацию.</p>\r\n\r\n<h2>Зачем заниматься зумбой?</h2>\r\n\r\n<p><strong>Зумба</strong> — это в первую очередь интенсивная кардиотренировка, поэтому она способствует усилению кровотока и активному сжиганию калорий. Польза от разнообразных движений заключается в равномерном распределении нагрузки: можно поддерживать активный темп и не надо останавливаться, чтобы дать мышцам отдохнуть. Ритм и возможность регулировать интенсивность делают занятие легким и непринужденным. За одну тренировку расходуется минимум 500 калорий, несмотря на то, что работа над формой проводится исключительно своим весом.</p>\r\n\r\n<p>Танец выполняется под зажигательную музыку, поэтому очень сложно устоять на месте, а время пролетает незаметно. Риск переутомления или повреждения мышц сводится к минимуму. При регулярных занятиях хорошо прорабатываются все группы мышц, особенно нижней части тела (ягодицы и бедра), живота.</p>\r\n\r\n<h2>Преимущества и особенности тренировок</h2>\r\n\r\n<p>Обучение танцевальным элементам проходит без напряжения и долгого разучивания: все движения предельно просты, но при этом красивы и пластичны. Регулярные занятия зумбой обеспечивают массу преимуществ:</p>\r\n\r\n<ul>\r\n\t<li>улучшение работы органов малого таза;</li>\r\n\t<li>нормализация метаболизма;</li>\r\n\t<li>избавления от стресса, мышечного и морального напряжения;</li>\r\n\t<li>тренировка сердечно-сосудистой системы;</li>\r\n\t<li>насыщение крови кислородом;</li>\r\n\t<li>улучшение координации и растяжки;</li>\r\n\t<li>избавление от лишних калорий, жировых отложений;</li>\r\n\t<li>приобретение подтянутой формы и пластичности движений;</li>\r\n\t<li>отличный вариант для начинающих и недавно родивших женщин.</li>\r\n</ul>\r\n\r\n<p>Цена на абонемент всегда выгоднее, чем на одно занятие, поэтому стоит задуматься о пользе для тела и кошелька. Записаться на тренировку можно у администратора клуба.</p>	2019-01-25 22:53:41	2019-01-25 22:53:41	t
50	8	1	500	Express Cycle	30	0	express-cycle	/FTUploads/TdYX9rj3sxPAgSELSfGWbIWhXwIy5y2dgoS2H4Da.jpeg	\N	EXPRESS CYCLE - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки EXPRESS CYCLE в Ростове-на-Дону. Узнать расписание занятий EXPRESS CYCLE и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность:</strong> кардио </p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Авторская программа на велотренажере под зажигательную музыку. Для клиента ограниченного временными рамками. Эти Экспресс тренировки будут отнимать гораздо меньше времени,но при этом давать желаемый эффект</p>	2019-01-25 22:04:44	2019-01-25 22:04:44	t
51	8	1	500	Express Pump	30	\N	express-pump	/FTUploads/mjdbMIOrBvbdnvdPd8YnN1IeEibqj0MXFMOzYTvK.jpeg	\N	EXPRESS PUMP - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки EXPRESS PUMP в Ростове-на-Дону. Узнать расписание занятий EXPRESS PUMP и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность: </strong>силовая </p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская программа в которой используется штанга с регулируемым весом.Для клиента ограниченного временными рамками. Эти Экспресс тренировки будут отнимать гораздо меньше времени,но при этом давать желаемый эффект.</p>	2019-01-25 22:32:16	2019-01-25 22:32:16	t
52	8	1	500	Express Combo	30	0	express-combo	/FTUploads/8X5lRkW8GJoT2kGn3RQjEle4BX0lDT214BPpIVPT.jpeg	\N	\N	\N	\N	\N	<p><strong>Направленность: </strong>кардио тренировка с элементами боевых искусств.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская интенсивная программа с элементами боевых искусств.Для клиента ограниченного временными рамками. Эти Экспресс тренировки будут отнимать гораздо меньше времени,но при этом давать желаемый эффект</p>	2019-01-25 22:35:03	2019-01-25 22:35:03	t
53	8	1	500	Cosmo Mama	45	0	cosmo-mama	/FTUploads/KE3UWGfJAXIS6b7kYgNQtEbqeLD8dZ6VtxIOUGf3.jpeg	\N	COSMO MAMA - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO MAMA в Ростове-на-Дону. Узнать расписание занятий COSMO MAMA и цены на абонемент в фитнес-клубе Фитрон.	\N	<p><strong>Направленность: </strong>специальная</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Будующие мамы, вам сюда! Тренировка для беременных,направленная на сохранение уровня подготовленности сердечно-сосудистой системы, силы, гибкости, уменьшения боли в области спины,улучшения самочувствия в целом.</p>	2019-01-25 22:35:40	2019-01-25 22:35:40	t
54	8	1	500	Cosmo-ft	45	0	cosmo-ft	/FTUploads/xyYjvTFlX1wxhV2Av7eHiQdmvtQyj2HuaosF7XvZ.jpeg	\N	COSMO FT - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки COSMO FT в Ростове-на-Дону. Узнать расписание занятий COSMO FT и цены на абонемент в фитнес-клубе Фитрон.	\N	<p>Тренировка, направленная на улучшение координации движения, увеличение мышечной силы и выносливости.</p>	2019-01-25 22:36:26	2019-01-25 22:36:26	t
64	9	1	500	Fit-Walking	30	0	fit-walking	/FTUploads/8Z4OblNeoluRisX2OSVc3uxTKbMxKOCI4L8YszQc.jpeg	\N	FIT WALKING -  занятие на беговой дорожке в фитнес-клубе FITRON в Ростове-на-Дону	\N	Подробнее о кардио-занятии FIT WALKING на официальном сайте фитнес-клуба Фитрон. Записаться на тренировку FIT WALKING. Занятия для похудения в Ростове-на-Дону.	\N	<p><strong>Тренировка на беговых дорожках.</strong></p>\r\n\r\n<p>Интервальная тренировка с чередованием нагрузки и отдыха.</p>\r\n\r\n<p>Параметры тренировки задаются за счёт изменения скорости и угла наклона дорожки.</p>	2019-01-25 22:45:15	2019-01-25 22:45:15	t
66	9	1	500	STEP TEAM	55	55	step-team	/FTUploads/gQO4l7NThPP7lBgbZPmFj4BWH0AcoKYR8jUAh9kW.jpeg	\N	STEP TEAM - занятие с использованием STEP платформы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Подробнее о кардио-занятии STEP TEAM на официальном сайте фитнес-клуба Фитрон. Записаться на тренировку STEP TEAM. Занятия для похудения в Ростове-на-Дону.	\N	<p>Танцевальная степ тренировка с использованием STEP платформы. Улучшает общую выносливость, тренирует мышцы ног, способствует снижению веса.</p>	2019-01-25 22:49:07	2019-01-25 22:49:07	t
69	10	1	500	FT CHALLENGE	45	45	ft-challenge-2		\N	FT CHALLENGE - тренировки на свежем воздухе от фитнес-клуба Фитрон	\N	Узнать подробнее о занятии FT CHALLENGE на свежем воздухе от фитнес-клуба в Ростове-на-Дону. Записаться на эффективные тренировки Outdoor на официальном сайте Fitron.	\N	<p>Интервальная тренировка с использованием различного оборудования. Направлена на улучшение координации движений, увеличение мышечной силы и выносливости.<br />\r\nМесто проведения: Парк Дружба.</p>	2019-01-25 22:52:02	2019-01-25 22:52:02	t
56	8	1	500	ORIENTATION CLASS COSMO PUMP	45	45	orientation-class-pump	/FTUploads/uPPh4LbB91UUdRdBMqhO47zpISeHVT9k6QYQVkHS.jpeg	\N	ORIENTATION CLASS COSMO PUMP  - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки ORIENTATION CLASS COSMO PUMP в Ростове-на-Дону. Узнать расписание занятий ORIENTATION CLASS COSMO PUMP и цены на абонемент в фитнес-клубе Фитрон.	<p>ORIENTATION CLASS COSMO PUMP - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Pump. Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	<p>ORIENTATION CLASS COSMO PUMP - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Pump. Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	2019-01-25 22:39:16	2019-01-25 22:39:16	t
58	8	1	500	ORIENTATION CLASS COSMO BALANCE	45	45	orientation-class-cosmo-balance	/FTUploads/aoQUb7hwBpbUF2VqoUvBVgDONZ3IdJ1xAvKaspjF.jpeg	ORIENTATION CLASS COSMO BALANCE	ORIENTATION CLASS COSMO BALANCE - тренировки по авторским программам в фитнес-клубе Fitron	\N	Авторская программа тренировки ORIENTATION CLASS COSMO BALANCE в Ростове-на-Дону. Узнать расписание занятий ORIENTATION CLASS COSMO BALANCE и цены на абонемент в фитнес-клубе Фитрон.	<p>Это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций, используемых в авторских программах СOSMO BALANCE. Вы научитесь грамотно выполнять упражнения, подбирать вариации упражнений исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	<p>Это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций, используемых в авторских программах СOSMO BALANCE. Вы научитесь грамотно выполнять упражнения, подбирать вариации упражнений исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	2019-01-25 22:40:45	2019-01-25 22:40:45	t
57	8	1	500	ORIENTATION CLASS COSMO PUMP	45	45	orientation-class-cosmo-pump		\N	\N	\N	\N	<p>- это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций, используемых в авторских программах Cosmo Pump.Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности.</p>	<p>- это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций, используемых в авторских программах Cosmo Pump.Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности.</p>	2019-01-25 22:39:56	2019-01-25 22:41:46	\N
65	9	1	500	Step time	55	0	step-time	/FTUploads/8fp4HkxJaNAcfTjc97R423dGjsa3p69asmSQkH9L.jpeg	\N	Степ аэробика для похудения - занятие с использованием STEP платформы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Подробнее о кардио-занятии STEP TIME на официальном сайте фитнес-клуба Фитрон. Записаться на тренировку STEP TIME. Занятия для похудения в Ростове-на-Дону.	\N	<p>Аэробная степ тренировка, среднего уровня сложности с использованием STEP платформы. Улучшает общую выносливость, тренирует мышцы ног, способствует снижению веса.</p>\r\n\r\n<p>Уровень подготовки: средний.</p>	2019-01-25 22:48:33	2019-01-25 22:48:33	t
68	10	1	500	FBOX	45	45	fbox		\N	FBOX outdoor - тренировки на свежем воздухе от фитнес-клуба Фитрон	\N	Узнать подробнее о занятии FBOX на свежем воздухе от фитнес-клуба в Ростове-на-Дону. Записаться на эффективные тренировки Outdoor на официальном сайте Fitron.	\N	<p>Интервальная тренировка с использованием различного оборудования. Направлена на улучшение координации движений, увеличение мышечной силы и выносливости.<br />\r\nМесто проведения: парк им. К. Чуковского (Ашхабадский парк).</p>	2019-01-25 22:51:40	2019-01-25 22:51:40	t
70	10	1	500	FT INTERVAL	45	45	ft-interval-2		\N	FT INTERVAL - тренировки на свежем воздухе от фитнес-клуба Фитрон	\N	Узнать подробнее о занятии FT INTERVAL на свежем воздухе от фитнес-клуба в Ростове-на-Дону. Записаться на эффективные тренировки Outdoor на официальном сайте Fitron.	\N	<p>Интервальная тренировка с использованием различного оборудования. Направлена на улучшение координации движений, увеличение мышечной силы и выносливости.</p>	2019-01-25 22:52:25	2019-01-25 22:52:25	t
83	11	1	500	DANCE PARTY	120	120	dance-party		\N	DANCE PARTY - уроки танца для начинающих в фитнес-клубе FITRON	\N	Танцевальная программа DANCE PARTY в Ростове-на-Дону. Узнать подробнее про тренировку по танцам DANCE PARTY в фитнес-клубе Fitron.	\N	\N	2019-01-25 23:01:20	2019-01-25 23:01:20	t
59	8	1	500	ORIENTATION CLASS  PUMP	45	0	orientation-class-pump-2	/FTUploads/1p5Jk0huZlmMcT6LXmDe4lQSNYCpDkqLJqwaBgpy.jpeg	ORIENTATION CLASS  PUMP	\N	\N	ORIENTATION CLASS COSMO PUMP - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Pump. Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности, что позволит	<p>ORIENTATION CLASS COSMO PUMP - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Pump. Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	<p>ORIENTATION CLASS COSMO PUMP - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Pump. Вы научитесь грамотно выполнять упражнения, подбирать рабочий вес исходя из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	2019-01-25 22:41:30	2019-01-25 22:41:40	\N
55	8	1	500	ORIENTATION CLASS COSMO BALANCE	45	45	orientation-class-balance		\N	\N	\N	\N	<p>ORIENTATION CLASS COSMO BALANCE - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Balance. Вы научитесь грамотно выполнять упражнения, подбирать вариации упражнений исходя  из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	<p>ORIENTATION CLASS COSMO BALANCE - это обучающий урок. Направлен на изучение правильной техники выполнения упражнений и комбинаций используемых в авторских программах Cosmo Balance. Вы научитесь грамотно выполнять упражнения, подбирать вариации упражнений исходя  из уровня физической подготовленности, что позволит выстроить тренировку максимально эффективно и безопасно.</p>	2019-01-25 22:37:08	2019-01-25 22:41:55	\N
60	9	1	500	Aero fit	55	0	aero-fit	/FTUploads/L9Ur9VZrA4pidvyj2IlfzCXJX8NUE1oYyLzBbhKy.jpeg	\N	\N	\N	\N	<p>Программа классической аэробики с элементами танцев.</p>\r\n\r\n<p>Развивает общую выносливость, координацию движений, способствует снижению веса.</p>	<p><strong>Направленность:</strong> аэробная программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> используются базовые элементы классической аэробики и усложнённые, а также танцевальные вариации движений. Также предусмотрена силовая работа с собственным весом.</p>	2019-01-25 22:42:40	2019-01-25 22:42:47	\N
61	9	1	500	Step Fit	55	0	step-fit	/FTUploads/3nQ85scUhb9GHeAOGAxDBgEmQQQRJImOekudPlCH.jpeg	\N	\N	\N	\N	\N	<p><strong>Направленность:</strong> степ тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Программа  предназначена для любителей степ- аэробики с элементами танцев, которая  идеально подходит для сохранения подтянутой и стройной фигуры. Улучшит кардиовыносливость и  заменит тренировки на беговой дорожке.</p>	2019-01-25 22:43:11	2019-01-25 22:43:18	\N
62	9	1	500	Running	30	0	running	/FTUploads/hOfSgbozoVkY409pfvy3fg2mibaCWNVbiyy5gUK4.jpeg	\N	Программы на беговой дорожке - занятие RUNNING (быстрая ходьба) в фитнес-клубе FITRON в Ростове-на-Дону	\N	Подробнее о кардио-занятии RUNNING на официальном сайте фитнес-клуба Фитрон. Записаться на тренировку RUNNING. Занятия для похудения в Ростове-на-Дону.	\N	<p>Беговая дорожка — отличный вариант для тех, кто ведет преимущественно сидячий образ жизни, а также не имеет возможности достаточно ходить или устраивать пробежки. Регулярные занятия способствуют росту силы и выносливости, укреплению иммунитета, помогают избавиться от лишнего веса и сделать спортивную фигуру красивой и подтянутой.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Программы тренировок на беговой дорожке</h2>\r\n\r\n<p>Интервальное кардио — поочередная смена интенсивной нагрузки и расслабления. Она отлично улучшает выносливость, укрепляет иммунную и сердечно-сосудистую системы, а также рекомендуется в качестве тренинга для похудения. Период нагрузки не должен длиться более 2 минут, интенсивность подбирается в соответствии с физическими способностями и самочувствием.</p>\r\n\r\n<p>Надо выбрать уровень нагрузки, при котором легко сохранять стабильный сердечный ритм на протяжении всей тренировки. Начинающим следует минимум 2-4 недели выделить на проработку выносливости, после чего можно приступать к более сложным интервальным тренингам. Считать уровень подготовки средним можно только после трех месяцев систематических занятий по 3 раза в неделю.</p>\r\n\r\n<p>Все занятия в тренажерном зале нужно обязательно начинать с разминки. Для программы Running — это 5 минут упражнений на кардиотренажерах или медленный бег по залу. Для сердца вредны резкие перепады в интенсивности работы, поэтому все надо начинать и заканчивать постепенно. Эффективная программа по кардионагрузке обычно продолжается полчаса и состоит из разминки, равномерной нагрузки, проработки ягодичных мышц и темповой части. Бег и ходьба — это отличная возможность улучшить состояние и работу сосудов и сердца, а также добиться быстрого избавления от подкожного жира. Однако сильно полным людям пробежки противопоказаны.</p>\r\n\r\n<p>Примером эффективной программы может послужить тренировка на развитие скорости. Начинается она с разминки. Потом выполняется полуминутный забег на максимальной скорости по дорожке без уклона. Затем требуется интервал расслабления мышц — быстрая ходьба или медленный бег 2 минуты. Последние два этапа чередуются 20-25 минут. После чего проводится заминка в течение 5 минут — ходьба в умеренном темпе.</p>\r\n\r\n<p>Для эффективного тренинга мышц увеличивается скорость движения полотна или изменение угла его наклона. Хороший результат дает режим «пересеченной местности», когда ходьба по горизонтальной поверхности чередуется с движением «на спуск».</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Польза беговой дорожки</h2>\r\n\r\n<p>Постоянные занятия в спортивном клубе гарантируют впечатляющий эффект. Они помогают:</p>\r\n\r\n<ul>\r\n\t<li>улучшить работу позвоночника и суставов;</li>\r\n\t<li>приучить организм к экономному расходованию кислорода и более рациональному использованию питательных веществ;</li>\r\n\t<li>скорректировать недостатки фигуры, избавившись от лишних жировых отложений и целлюлита в области талии, ягодиц и бедер, улучшить свою спортивную форму;</li>\r\n\t<li>получать заряд бодрости от каждого посещения клуба с выбором активности высокой интенсивности;</li>\r\n\t<li>обрести легкость во всем теле;</li>\r\n\t<li>освободиться от агрессии, стресса и негативных эмоций;</li>\r\n\t<li>обрести умиротворение и хорошее настроение благодаря дополнительному выбросу в кровь порции гормонов эндорфинов;</li>\r\n\t<li>повысить выносливость и работоспособность организма.</li>\r\n</ul>\r\n\r\n<p>Если часто заниматься на тренажере, заметно улучается внешний вид не только мышц ног (бедра и икры), но и плечевого пояса, за счет ритмичных движений рук. Помимо этого в процессе участвуют мышцы пресса и межреберные мышечные волокна. Это оказывает положительное влияние на работу дыхательной и сердечной систем. Благодаря тренингу укрепляются стенки кровеносных сосудов и сердца, а значит, повышается их выносливость.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Эффективность и результативность беговой дорожки для похудения</h2>\r\n\r\n<p>Для сжигания избыточных калорий за короткий период времени рекомендуется выбирать тренинг с низкой или средней напряженностью, но достаточно продолжительный. Больше подкожных накоплений убирается, если бегать длительное время, а не устраивать интенсивные короткие пробежки. Нагрузку следует увеличивать постепенно. Сначала надо стремиться к получасовому занятию, а потом по мере тренированности увеличивать его длительность.</p>\r\n\r\n<p>Правильная программа для похудения подразумевает не только спорт, но и рационально продуманную сбалансированную диету. Также надо постараться испытывать меньше стресса и давать организму полноценно восстанавливаться в перерывах между физическими упражнениями. Каждые две недели можно увеличивать время или интенсивность тренировки на 5%. Для хорошего результата и безопасности здоровья нужно постоянно контролировать пульс. Для ходьбы скорость движения полотна должна составлять 10 км/час, для бега необходимо 13-16 км/час. Угол уклона зависит от необходимой интенсивности пробежки.</p>	2019-01-25 22:43:57	2019-01-25 22:43:57	t
63	9	1	500	Running Interval	40	0	running-interval	/FTUploads/l045jdgLBaXqXw1Ke5onqwfkWRGuzvDuoJkfb4Z8.jpeg	\N	RUNNING INTERVAL - занятие на беговой дорожке в фитнес-клубе FITRON в Ростове-на-Дону	\N	Подробнее о кардио-занятии RUNNING INTERVAL на официальном сайте фитнес-клуба Фитрон. Записаться на тренировку RUNNING INTERVAL. Занятия для похудения в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> кардио</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Ranning Interval — программа, построенная на основе программы Ranning, но в отличие от нее имеющая более частые смены интервалов, то есть упражнений.<br />\r\nЗанятия по данной программе улучшают кардиовыносливость, помогают снизить вес, улучшают координацию, сжигают лишние калории, имеют меньшее время восстановления.</p>	2019-01-25 22:44:40	2019-01-25 22:44:40	t
67	9	1	500	STEP INTRO	\N	\N	step-intro		\N	\N	\N	\N	\N	\N	2019-01-25 22:49:48	2019-01-25 22:49:48	t
84	11	1	500	HIP-HOP	0	0	hip-hop		\N	\N	\N	\N	\N	<p>Современное танцевальное направление, улучшает координацию движения, общую выносливость, заряжает отличным настроением.</p>	2019-01-25 23:01:45	2019-01-25 23:01:45	t
72	11	1	500	Oriental	55	0	oriental	/FTUploads/3FKHaixMfpL0yShTOqksotGBnGiIAJC4HuyFjY0m.jpeg	\N	Уроки танца живота - записаться на обучение танцам живота в Ростове-на-Дону	\N	Танцевальная программа ORIENTAL в Ростове-на-Дону. Узнать подробнее про тренировку по танцам ORIENTAL в фитнес-клубе Fitron.	\N	<p><strong>Направленность:</strong> танцевальное направление</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Танец живота, объединяющий мощную жизнеутверждающую энергию телодвижений и магию ритма восточной музыки.</p>	2019-01-25 22:54:16	2019-01-25 22:54:16	t
73	11	1	500	Latina Mix	55	0	latina-mix	/FTUploads/B8RnGcPNAz8QjcCvKSWcJS2XVWB9LF3qanE1dJIP.jpeg	\N	Латина - обучение танцевальной латине в фитнес-клубе Фитрон	\N	Танцевальная программа LATINA MIX в Ростове-на-Дону. Узнать подробнее про тренировку по танцам LATINA MIX в фитнес-клубе Fitron.	\N	<p><strong>Направленность:танцевальное направление</strong></p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Latina mix – это сочетание нескольких направлений латиноамериканских танцев. Он вобрал в себя все лучшее, что присутствует в этих стилях, от классической латины до модных концепций современных клубных вечеринок.</p>	2019-01-25 22:54:57	2019-01-25 22:54:57	t
74	11	1	500	Dance-mix	55	0	dance-mix	/FTUploads/9Qvf98sGi1Xx3rtWoMhGAqvbC0dKNar9t9b8uodD.jpeg	\N	Dance MIX танец - уроки танца для начинающих в фитнес-клубе FITRON	\N	Танцевальная программа Dance MIX в Ростове-на-Дону. Узнать подробнее про тренировку по танцам Dance MIX в фитнес-клубе Fitron.	\N	<p>Танцевальная программа с хореографией в различных танцевальных стилях.</p>\r\n\r\n<p>Уровень подготовки: любой.</p>	2019-01-25 22:55:23	2019-01-25 22:55:23	t
75	11	1	500	Lady's style	55	0	ladys-style	/FTUploads/JCyQSZ2IwR8yLKDW07yz18XsggyyghmR1pOhFX6U.jpeg	\N	Спортиные танцы Латина - уроки Latina mix в Ростове-на-Дону	\N	Танцевальная программа LADYS STYLE в Ростове-на-Дону. Узнать подробнее про тренировку по танцам LADYS STYLE в фитнес-клубе Fitron.	\N	<p>Танцевальная тренировка для девушек. Помогает научиться красиво двигаться, развить пластику, грацию, гибкость и артистизм. На этой тренировке Вы сможете подчеркнуть свою женственность и раскрыть новые грани своих возможностей.</p>\r\n\r\n<p>Уровень подготовки: любой.</p>	2019-01-25 22:56:05	2019-01-25 22:56:05	t
76	11	1	500	House Dance	55	55	house-dance	/FTUploads/Rs4XlDmZzzcdAepa0u70rOqJulCcZ5XiOcrN6TeJ.jpeg	\N	HOUSE DANCE - уроки танца для начинающих в фитнес-клубе FITRON	\N	Танцевальная программа HOUSE DANCE в Ростове-на-Дону. Узнать подробнее про тренировку по танцам HOUSE DANCE в фитнес-клубе Fitron.	\N	<p>Энергичные движения ног в сочетании с грувом корпуса под клубную музыку. Под руководством опытных и креативных преподавателей вы будете чувствовать себя комфортно на любом танц-поле.</p>	2019-01-25 22:56:42	2019-01-25 22:56:42	t
77	11	1	500	Сaribbean Mix	55	55	caribbean-mix	/FTUploads/xiON2yOG47cAajjgB2AuBmfbu8ZcMAEKE0Xq9mG2.jpeg	\N	CARIBBEAN MIX - уроки танца для начинающих в фитнес-клубе FITRON	\N	Танцевальная программа СARIBBEAN MIX в Ростове-на-Дону. Узнать подробнее про тренировку по танцам СARIBBEAN MIX в фитнес-клубе Fitron.	\N	<p>Сaribbean Mix - это микс сальсы, бачаты, меренге и реггетон, которые не оставят Вас равнодушными, а будут притягивать в мир латиноамериканских танцев.</p>	2019-01-25 22:57:18	2019-01-25 22:57:18	t
78	11	1	500	Vogue	55	55	vogue	/FTUploads/TBYfPB255tnR5U55NUYAHWN2ETtoaLsCVAlJgXqx.jpeg	\N	VOGUE танец - обучение танцам в стиле Вогпо выгодным ценам в фитнес-клубе FITRON	\N	Танцевальная программа VOGUE в Ростове-на-Дону. Узнать подробнее про тренировку по танцам VOGUE в фитнес-клубе Fitron.	\N	<p>Стиль танца, базирующийся на модельных позах и подиумной походке. Отличительные особенности: быстрая техника движения рук, манерная походка, вращения. <br />\r\n </p>	2019-01-25 22:57:51	2019-01-25 22:57:51	t
79	11	1	500	CONTEMPORARY	55	55	contemporary	/FTUploads/SxCLTQmlde08Emk63AEfdutOZ24kNQXf3Qab7hKA.jpeg	\N	Контемпорари - современные уроки танца Contemporary в Ростове-на-Дону	\N	Танцевальная программа CONTEMPORARY в Ростове-на-Дону. Узнать подробнее про тренировку по танцам CONTEMPORARY в фитнес-клубе Fitron.	\N	<p>это современный сценический танец, объединяющий методики западного (классический танец, джаз-модерн) и восточного (цигун, тай цзи цюань, йога) искусства движения.  </p>	2019-01-25 22:59:27	2019-01-25 22:59:27	t
80	11	1	500	ZUMBA FRIENDS	0	0	zumba-friends		\N	ZUMBA FRIENDS: записаться на танцевальные программы Zumba Fitness Dance в фитнес-клуб FITRON	\N	ZUMBA FRIEND в фитнес -клубе FITRON. Эффективные групповые и индивидуальные занятия в Ростове-на-Дону. Выгодные цены на фитнес.	\N	\N	2019-01-25 22:59:49	2019-01-25 22:59:49	t
81	11	1	500	Dancehall/Reggaeton	0	0	dancehallreggaeton		\N	Реггетон-дэнсхолл: уроки танца для начинающих в Ростове-на-Дону	\N	Танцевальная программа Dancehall/Reggaeton в Ростове-на-Дону. Узнать подробнее про тренировку по танцам Dancehall/Reggaeton в фитнес-клубе Fitron.	\N	\N	2019-01-25 23:00:23	2019-01-25 23:00:23	t
35	12	1	500	Бокс	55	0	boxing	/FTUploads/63qKeaEzAyYOhrte7HQarGiwbhjndFqFnRr2EZQN.jpeg	Бокс	Тренировки по боксу: записаться на занятия боксом по выгодной цене в фитнес-клубе FITRON	\N	Бокс в Ростове-на-Дону – индивидуальные и групповые тренировки по боевому искусству. Цены на Бокс в фитнес – клубе FITRON.	<p>Бокс — один из видов боевых единоборств, который позволяет изучить основные приемы самозащиты от внезапных нападений, а также физически стать более сильным и выносливым. Целью обучения становится проведение контактных боев между противниками с выполнением ударов в голову и верхнюю часть тела. Благодаря освоению всех тонкостей этого боевого искусства спортсмен становится более собранным и организованным, обретает уверенность в себе, учится быстро реагировать и принимать решения.</p>	<p>Бокс — один из видов боевых единоборств, который позволяет изучить основные приемы самозащиты от внезапных нападений, а также физически стать более сильным и выносливым. Целью обучения становится проведение контактных боев между противниками с выполнением ударов в голову и верхнюю часть тела. Благодаря освоению всех тонкостей этого боевого искусства спортсмен становится более собранным и организованным, обретает уверенность в себе, учится быстро реагировать и принимать решения.</p>\r\n\r\n<p>Тренировки в спортивном клубе «Фитрон» проводят опытные специалисты. Для каждого клиента составляется персональная программа обучения с учетом имеющихся навыков и физической подготовки. Благодаря комплексному подходу каждый урок по боксу становится отличным высокоинтенсивным тренингом духа и тела. Хорошо прорабатываются все мышцы тела, развивается сила рук, улучшаются гибкость, выносливость, ловкость и координация. Занятия позволяют быстро избавиться от негатива и стресса.</p>\r\n\r\n<h2>Техническая подготовка к боксу</h2>\r\n\r\n<p>Начальным этапом обучения всегда становится изучение техники боя и правильного дыхания. Тренер показывает простейшие принципы перемещения рук, ног и корпуса, а также основные движения. Изучение азов позволяет быстро освоиться начинающим спортсменам, а также девушкам. После этого профессионал помогает научиться работать в различных стойках, защитной позиции, безукоризненно наносить удары и перемещаться, рационально расходовать свои силы.</p>\r\n\r\n<p>Когда будут изучены базовые движения, начинается оттачивание техники на различных боксерских снарядах: грушах, мешках, лапах. Оно помогает сформировать твердость ударных костей, увеличить скорость и точность ударов, обрести выразительность движений для экстремальных условий спортивной борьбы.</p>\r\n\r\n<h2>Специальные тренировки по боксу</h2>\r\n\r\n<p>Помимо технической стороны обучения боксера, особое значение имеет силовая, тактическая и психологическая подготовка. Среди основных специальных упражнений на силу: выбросы грифа перед собой, тренинг с набивными мячами, проработка пресса, шеи и ног динамическими движениями.</p>\r\n\r\n<p>Тактическая подготовка направлена на использование сильнейших качеств конкретного спортсмена. Учитываются физиологические особенности, сила удара, скорость передвижения, способности к быстрой реакции, стойкость, вес и т.д. Для оттачивания и улучшения тактики, наработки боевого опыта, а также устойчивости к стрессовым ситуациям, проводятся бои с соперниками.</p>\r\n\r\n<h2>Преимущества тренировок в фитнес-клубе «Фитрон»</h2>\r\n\r\n<p>Для начинающих спортсменов доступны эффективные занятия с персональным тренером, который будет контролировать правильность выполнения всех технических элементов, а также регулярно корректировать нагрузку на организм. Для более опытных клиентов рекомендуются групповые тренировки, на которых можно провести бои с различными противниками. Для женщин обеспечиваются максимально комфортные условия обучения. Среди основных плюсов посещения тренировок в фитнес-клубе «Фитрон» можно выделить:</p>\r\n\r\n<ul>\r\n\t<li>внимательное отношение и индивидуальный подход к каждому клиенту;</li>\r\n\t<li>лояльные цены на все виды услуг;</li>\r\n\t<li>применение самых эффективных и перспективных обучающих и тренировочных программ, популярных по всему миру, или авторских методик от тренеров клуба;</li>\r\n\t<li>просторные раздевалки и комфортабельные душевые комнаты;</li>\r\n\t<li>удобное расписание занятий для взрослых и детей;</li>\r\n\t<li>профессиональный тренерский штат, который обладает обширными теоретическими и практическими навыками.</li>\r\n</ul>\r\n\r\n<p>После занятия клиенты клуба «Фитрон» в Ростове-на-Дону могут дополнительно посетить сауну, бассейн или душ, сходить на массаж. Клубная карта гарантирует выгодную стоимость посещений, может включать дополнительные бесплатные услуги, скидки, возможность использования специально выделенными раздевалками и многое другое.</p>	2018-09-11 08:46:42	2019-01-25 23:02:38	t
86	12	1	500	ТАЙСКИЙ БОКС	55	55	tajskij-boks	/FTUploads/1aDYsMv2t8ckfEAUlLhc0HA41xFAkfCgPMzJnLij.jpeg	\N	Тайский бокс в Ростове-на-Дону: уроки по боксу для начинающих в фитнес-клубе Фитрон	\N	ТАЙСКИЙ БОКС - индивидуальные и групповые тренировки по боевому искусству в Ростове-на-Дону. Узнать расписание на занятия в фитнес-клубе FITRON.	\N	<p>Боевое искусство Таиланда, основу которого составляют удары ногами.</p>	2019-01-25 23:03:44	2019-01-25 23:03:44	t
87	12	1	500	REAL-KICKBOX	55	55	real-kickbox		REAL-KICKBOX	Кикбоксинг в Ростове-на-Дону: занятие в секции кикбоксинг в фитнес-клубе Фитрон	\N	Занятия кикбоксингом для женщин и мужчин в фитнес-клубе Фитрон. Узнать цены на групповые и индивидуальные занятия кикбоксингом в Ростове-на-Дону	<p>Кикбоксинг для женщин- способ коррекции фигуры, приобретения навыков самозащиты, развития психоэмоциональной устойчивости. Эта тренировка поможет Вам развивать скоростную и силовую выносливость,улучшить реакцию и баланс,укрепить мышечный корсет.</p>	<p>Понятие «кикбоксинг» происходит от двух английских слов «kick» — пинок ногой и «boxing» — бокс. Это разновидность современного боевого искусства, которая соединяет в себе принципы кулачной техники европейского бокса, а также разные виды ударов ногами. Работа ногами позаимствована в ряде восточных единоборств: тайском боксе, каратэ, тхэквондо, ушу и т.д.</p>\r\n\r\n<p>В фитнес-клубе «Фитрон» в Ростове-на-Дону занятия по кикбоксингу проводят опытные спортсмены, которые уделяют предельное внимание технике безопасности, последовательному увеличению нагрузки, правильности выполнения и эффективной отработке всех движений. Это делает обучение боевому искусству не только максимально полезным для спортивной формы, но и увлекательным процессом, который обеспечивает прилив сил, уверенности в себе и хорошего настроения.</p>\r\n\r\n<h2>Основные направления в кикбоксинге</h2>\r\n\r\n<p>В современном кикбоксинге выделяют семь популярных разновидностей:</p>\r\n\r\n<ul>\r\n\t<li>Light-contact — легкий контакт, при котором нельзя использовать сильные направленные удары ногами и руками. Такой подход увеличивает темп поединка по сравнению с полным контактом. Победа строится на правильном выполнении технической стороны боя и количестве ударов.</li>\r\n\t<li>Semi-contact — средний контакт, запрещающий использование сильных ударов, кроме неожиданных выпадов от соперника. В таком бое возможны нокдаун или нокаут, но очки за них не начисляются.</li>\r\n\t<li>Full-contact — полный контакт, который предусматривает спарринг в полную силу без ограничений.</li>\r\n\t<li>Бои с полным контактом и допустимым ударом law-kick. Наиболее агрессивная разновидность кикбоксинга, при которой можно выполнять «лоу-кик» — круговой замах голенью по внутренней или внешней стороне бедра.</li>\r\n\t<li>Тай-кикбоксинг.</li>\r\n\t<li>Сольные демонстрации — заранее заготовленные комбинации приемов, которые выполняются под музыку.</li>\r\n\t<li>Аэробика на базе кикбоксинга.</li>\r\n</ul>\r\n\r\n<h2>Что дадут Вам занятия кикбоксингом?</h2>\r\n\r\n<p>Регулярно посещая тренировки по кикбоксингу, можно очень быстро укрепить мышечный корсет, развить силу воли и стальную выдержку. Поскольку данная разновидность боевого искусства включает в себя движения из различных боевых техник и видов спорта, а также интенсивную аэробную нагрузку, польза от занятий сказывается на всем организме. В первую очередь улучшается работа сердечно-сосудистой и дыхательной систем, прорабатываются все мышцы тела, укрепляется весь опорно-двигательный аппарат. Дополнительно можно выделить следующие преимущества занятий:</p>\r\n\r\n<ul>\r\n\t<li>улучшение координации движений;</li>\r\n\t<li>развитие гибкости и подвижности;</li>\r\n\t<li>повышение выносливости;</li>\r\n\t<li>снижение лишнего веса;</li>\r\n\t<li>увеличение скорости реакции;</li>\r\n\t<li>выработка силы и устойчивости;</li>\r\n\t<li>укрепление иммунитета;</li>\r\n\t<li>фигура приобретает подтянутость и рельефные формы;</li>\r\n\t<li>интенсивные сбалансированные нагрузки на тело.</li>\r\n</ul>\r\n\r\n<h2>Как проходят тренировки по кикбоксингу?</h2>\r\n\r\n<p>Профессиональный тренер проводит поэтапное обучение технике выполнения и защиты от ударов, помогает выработать самоконтроль и развить все необходимые качества: силу, реакцию, выносливость, гибкость. Тренировки проходят с нуля, максимально доступно и просто, поэтому для начинающих не будет проблемой изучить все тонкости боевого искусства. Для безопасности и исключения травм обязательно используется различного рода защитное снаряжение. Записаться на тренировку могут даже девушки, которые научатся искусству самозащиты, а также улучшат свою спортивную форму за счет выполнения традиционных для фитнеса элементов: скручиваний, отжиманий, махов и приседаний.</p>\r\n\r\n<p>После освоения азов, тренинг проходит в виде спаррингов. На них можно отточить свои умения, применить на практике выученные движения, проработать технику боя и выработать собственную тактику. Бои с соперником также помогают не бояться близкого взаимодействия, спокойно и хладнокровно действовать в экстремальных ситуациях. Спортивный центр «Фитрон» предлагает выгодные цены на абонементы, благодаря которым на тренировки можно ходить регулярно и достичь максимального совершенства в изучении кикбоксинга.</p>	2019-01-25 23:04:16	2019-01-25 23:04:16	t
88	12	1	500	OUTOOR (BOXING)	60	60	outoor-boxing		\N	Тренировки по боксу на открытом воздухе от фитнес-клуба Fitron	\N	OUTOOR (BOXING) - индивидуальные и групповые тренировки по боевому искусству в Ростове-на-Дону. Узнать расписание на занятия в фитнес-клубе FITRON.	\N	\N	2019-01-25 23:04:38	2019-01-25 23:04:38	t
89	12	1	500	Женский Кикбоксинг	55	90	zenskij-kikboksing		\N	\N	\N	\N	\N	<p>Вид спортивного единоборства,обьединяющий бокс,тайский бокс,тэквандо и каратэ.Развивает координацию движений и умение принимать решения в нестандартных ситуациях . Оптимально нагружает и развивает все группы мышц.</p>	2019-01-25 23:05:02	2019-01-25 23:05:02	t
85	12	1	500	KOSHIKI-KARATE	55	55	koshiki-karate	/FTUploads/OnBOE4Y60hrVPKDogMEVh8VYmNuEcIVVsWTKtSx1.jpeg	\N	Косики каратэ - тренировка по боевым искусствам Koshiki Karate в Ростове-на-Дону	\N	KOSHIKI-KARATE - индивидуальные и групповые тренировки по боевому искусству в Ростове-на-Дону. Узнать расписание на занятия в фитнес-клубе FITRON.	\N	<p>Это вид японского боевого искусства. Представляет собой систему рукопашного боя. Отработка движений защиты и нападения. </p>	2019-01-25 23:03:06	2019-01-25 23:05:13	\N
90	13	1	500	Стретчинг	30	0	stretch	/FTUploads/GBvEohUh5Jhgg1gCDq1W7iJrxan58OYwSfgLrNrF.jpeg	Стретчинг	Стрейчинг для начинающих: занятия по растяжке по выгодной цене в фитнес – клубе FITRON	\N	Стрейчинг в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на Стрейчинг в фитнес – клубе FITRON.	\N	<p>Название тренировки «стретчинг» заимствовано от английского «stretching», что означает «растягивание». Значение вносит достаточную ясность — занятие этим видом фитнеса направлено на совершенствование эластичности и гибкости тела, растяжку его мышц и сухожилий, улучшение подвижности суставов. Стретчингом могут заниматься люди любого возраста и уровня подготовки. Начинающие смогут укрепить свой организм и почувствовать себя лучше, продвинутые спортсмены — усовершенствовать свою форму.</p>\r\n\r\n<p>Тренировка базируется на принципе чередования напряжения мышц и их расслабления. Чтобы добиться хороших результатов, нужно выполнять комплекс упражнений регулярно, но постепенно увеличивая нагрузку.</p>\r\n\r\n<h2>Виды стретчинга</h2>\r\n\r\n<p>Различают несколько основных разновидностей стретчинга:</p>\r\n\r\n<ul>\r\n\t<li>В статике. Это наиболее привычный и знакомый всем вид растяжки. Хорошо подходит для коррекции фигуры. Суть заключается в удерживании определенного положения на протяжении 30-60 секунд, во время которых мышцы мягко растягиваются и становятся эластичнее.</li>\r\n\t<li>Динамический. Пружинящие движения выполняются медленно и плавно, урок зачастую проходит под танцевальную музыку.</li>\r\n\t<li>Пассивный (парный). Аналогия стретчингу в статике, но растяжение происходит не за счет веса собственного тела, а при помощи партнера. Главный плюс: максимальное расслабление мышц.</li>\r\n\t<li>Активный. Эффективен для улучшения эластичности отдельных мышц. Усилить наклоны при такой растяжке помогает специальный инвентарь: ремни, блоков, утяжелителей и т.п. Проводится только после хорошего разогрева мышц.</li>\r\n</ul>\r\n\r\n<h2>Кому подойдут занятия стретчингом?</h2>\r\n\r\n<p>Стретчинг зачастую включается во всестороннюю подготовку спортсменов, а также выделяется как самостоятельное ответвление лечебной и оздоровительной физкультуры. Благодаря чередованию мышечных сокращений и расслаблений удается быстро снять напряжение по всему телу и восстановить силы после интенсивной тренировки или тяжелого дня.</p>\r\n\r\n<p>Заниматься стретчингом могут все. Особенно полезен он будет для тех, кто перенес долгую болезнь или тяжелую травму и хочет постепенно восстановить свое здоровье. Помогает стретчинг и тем, кто имеет проблемы или боли в спине. Для будущих мам хорошо подходит особый вид занятий — для беременных. Правильная проработка дыхания будет полезна людям с астмой или другими проблемами дыхательной системы. Отлично подходит этот вид фитнеса для начинающих спортсменов. Со стретчингом похудение и приобретение подтянутой формы возможно без изнуряющих тренировок усилий.</p>\r\n\r\n<h2>Чего ждать от растяжки?</h2>\r\n\r\n<p>Растяжка полезна как индивидуальная разновидность спорта, а также в дополнение к базовому направлению фитнеса, аэробики или работы в тренажерном зале. Систематические занятия не дают суставам и мышцам потерять подвижность, тем самым затормаживая процессы старения. Стретчинг в основном популярен среди тех, кто хочет сесть на шпагат, но его польза выражается и в других улучшениях: тренировке мышц всей верхней части тела, в особенности рук, спины и шеи, растяжении всех мышц и сухожилий ног, в частности ягодицы и бедра.</p>\r\n\r\n<p>Основное начальное положение — сидя или лежа на каремате. Все действия выполняются медленно, без резких движений, нагрузка на бедра, спину и пресс распределяется гармонично с дыханием. Особое внимание уделяется точности и плавности, концентрации и самоконтролю. При выполнении упражнений чувствуется мягкое растяжение, но не боль. Получить удовольствие от тренировки можно только расслабившись, понемногу увеличивая интенсивность.</p>\r\n\r\n<h2>Преимущества тренировок в фитнес-клубе «Фитрон»</h2>\r\n\r\n<p>Профессиональный тренер в спорт-клубе «Фитрон» в Ростове-на-Дону подбирает для каждого занимающегося индивидуальную программу в соответствии с состоянием здоровья и имеющейся подготовкой. Он проведет обучение основам правильного выполнения упражнений и будет постоянно следить за техникой.</p>\r\n\r\n<p>Заниматься стретчингом можно в любое время дня. Эффективной будет комбинация с кардио- и силовыми тренировками. Обучение проводятся в современных комфортабельных залах, которые обеспечены всем необходимым инвентарем. Расслабляющую обстановку обеспечивает свежий воздух и приятная музыка.</p>	2019-01-25 23:06:30	2019-01-25 23:06:30	t
91	13	1	500	Deep  Stretch	45	0	deep-stretch	/FTUploads/DGLkFCKb3WGwS9cQokwR2N8vbDWqXh5njzHwkIYv.jpeg	\N	DEEP STRETCH: тренировки по выгодной цене в фитнес – клубе FITRON	\N	Тренировка DEEP STRETCH в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	\N	<p><strong>Направленность:</strong> гибкость.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Программа для более глубокого расслабления и растяжения, снятия мышечного напряжения и улучшения гибкости суставов. Поможет справиться со стрессом.</p>	2019-01-25 23:07:06	2019-01-25 23:07:06	t
98	13	1	500	МФР	0	0	mfr		\N	МФР - тренировка направления Mind and Body в Ростове-на-Дону	\N	Тренировка МИОФАСЦИАЛЬНЫЙ РЕЛИЗ в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	\N	<p>МИОФАСЦИАЛЬНЫЙ РЕЛИЗ- комплекс специальных упражнений в сочетании с самомассажем и применением специального оборудования. В результате тренировок устраняется напряжение мышц, улучшается подвижность суставов и общее самочувствие. МФР воздействует одновременно на мышечную и фасциальную ткань с целью их расслабления и устранения болевых ощущений.</p>	2019-01-25 23:15:02	2019-01-25 23:15:02	t
92	13	1	500	Pilates Intro	55	0	pilates-intro	/FTUploads/0kvweCZ9JJBlwvcbFxJQDQcXkCdIW2MvcRlqAHVd.jpeg	\N	PILATES INTRO: тренировки по выгодной цене в фитнес – клубе FITRON	\N	Тренировка PILATES INTRO в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	\N	<p><strong>Направленность:</strong> тренировка по системе Джозефа Пилатеса.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от низкой до средней.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:  </strong>Это сбалансированная фитнес программа доступна каждому, не зависимо от возраста и уровня физической подготовки. Способствует повышению гибкости тела.Это уникальная возможность познать собственный организм. Пилатес борется со стрессом и помогает развить позитивное отношение к жизни.</p>	2019-01-25 23:07:35	2019-01-25 23:07:35	t
94	13	1	500	Deep Stretch Friends	45	45	deep-stretch-friends		\N	Deep Stretch Friends - тренировка направления Mind and Body в Ростове-на-Дону	\N	Тренировка DEEP STRETCH Friends в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	<p>Программа для более глубокого расслабления, снятия мышечного напряжения и улучшения гибкости суставов. Поможет справиться со стрессом.</p>	<p>Программа для более глубокого расслабления, снятия мышечного напряжения и улучшения гибкости суставов. Поможет справиться со стрессом.</p>	2019-01-25 23:12:28	2019-01-25 23:12:28	t
95	13	1	500	OUTDOOR (COSMO BALANCE)	60	0	outdoor-cosmo-balance		\N	OUTDOOR - тренировка на открытом воздухе по направлению Mind and Body в Ростове-на-Дону	\N	Тренировка OUTDOOR (COSMO BALANCE) в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	2019-01-25 23:13:01	2019-01-25 23:13:01	t
96	13	1	500	ФЕЙСБИЛДИНГ	0	0	fejsbiding		\N	Фейсбилдинг для лица - программа упражнений для лица с тренером в Ростове-на-Дону	\N	Тренировка ФЕЙСБИЛДИНГ Friends в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	\N	\N	2019-01-25 23:13:39	2019-01-25 23:13:39	t
97	13	1	500	Миофасциальный релиз	0	0	miofascialnyj-reliz		\N	Миофасциальный релиз - тренировка направления Mind and Body в Ростове-на-Дону	\N	Тренировка Миофасциальный релиз в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	\N	<p>МФР-комплекс специальных упражнений в сочетании с самомассажем и применением специального оборудования. В результате тренировок устраняется напряжение мышц,улучшается подвижность суставов и самочувствие.МФР воздействует одновременно на мышечную фасциальную ткань с целью их расслабления и устранения болевых ощущений.</p>	2019-01-25 23:14:34	2019-01-25 23:14:34	t
99	13	1	500	MIND&BODY	0	0	mindbody		\N	MIND&BODY - тренировка направления Mind and Body в Ростове-на-Дону	\N	Тренировка MIND&BODY в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	<p>MIND&BODY(Майнд боди)- обобщающее название таких направлений самосовершенствования как Йога, Пилатес, суставная гимнастика, STRETCH. MIND BODY дословно переводится как «разум и тело» или «Тело и разум»!Этот вид фитнеса направлен на достижение равновесия между нашим телом и чувствами, их синхронную работу во время тренировок.</p>	<p>MIND&BODY(Майнд боди)- обобщающее название таких направлений самосовершенствования как Йога, Пилатес, суставная гимнастика, STRETCH. MIND BODY дословно переводится как «разум и тело» или «Тело и разум»!Этот вид фитнеса направлен на достижение равновесия между нашим телом и чувствами, их синхронную работу во время тренировок.</p>	2019-01-25 23:16:49	2019-01-25 23:16:49	t
100	13	1	500	Школа шпагата	0	0	skola-spagata		\N	Школа шпагата - уроки шпагата для начинающих в фитнес-клубе Фитрон	\N	Тренировка Школа шпагата в Ростове-на-Дону. Узнать подробнее про индивидуальные и групповые занятия по программе Mind and Body фитнес-клуба Фитрон. Расписание тренировок на официальном сайте.	<p>Тренировка включает в себя различные подводящие упражнения, способствующие улучшению гибкости, а это прямой путь к красивой осанке и плавным движениям, укрепляя позвоночник и уменьшая боли в спине.</p>	<p>Тренировка включает в себя различные подводящие упражнения, способствующие улучшению гибкости, а это прямой путь к красивой осанке и плавным движениям, укрепляя позвоночник и уменьшая боли в спине.</p>	2019-01-25 23:17:20	2019-01-25 23:17:20	t
101	14	1	500	WATER Noodles	50	0	water-noodles	/FTUploads/NH4yAOuNoNhIQp62eoO4YPXNB1e1wWw5LccE1tIP.jpeg	\N	AQUA Noodles - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку AQUA NOODLES в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Тренировка направлена на развитие выносливости, гибкости и координации.Соединение классической аквааэробики и оборудования, которое помогает держаться на воде.Способствует снижению веса.</p>	2019-01-25 23:19:37	2019-01-25 23:19:37	t
102	14	1	500	Water Butts	50	0	water-butts	/FTUploads/PP6YqexVRGeYOaDz3HxgsJe2zVRDWpelMCmpQX1l.jpeg	\N	Water Butts - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER BUTTS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> И снова ноги, сильные, стройные,рельефные.Занятие направленное на развитие силовой выносливости с использованием специального оборудования, которое позволит привести в тонус мышцы ног и ягодиц. Способствует снижению веса.</p>	2019-01-25 23:21:30	2019-01-25 23:21:30	t
135	15	1	500	Зарядка	30	0	zaradka	/FTUploads/86xRUoK5Nri0bL1nXexB1wjnvg5eCUxcE01JcAVL.jpeg	\N	\N	\N	\N	<p>Развитие двигательных качеств, основных видов движений, сказочное путешествие, веселые игры, танцы и все самое интересное ждет ребят на этом уроке.</p>	<p><strong>Направленность:</strong> игровая, общеразвивающая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> ОРУ под музыку, комплекс упражнений с предметами (мячи,кольца,обручи,шарики), упражнения на развитие двигательных навыков, полоса препятствий, упражнения на укрепление мышц спины и пресса, подвижная игра.</p>	2019-01-25 23:51:36	2019-01-25 23:51:36	t
103	14	1	500	Water Body	50	0	water-body	/FTUploads/hMGXlBL2KAnMIIHtxClNOkcqw5G3mK8rbNhdVP3J.jpeg	\N	WATER BODY - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER BODY в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от низкого до среднего.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Универсальная тренировка по укреплению всех основных мышечных групп:ноги, ягодицы, руки, брюшной пресс, спина.Повышает общую силу и выносливость, способствует снижению веса.</p>	2019-01-25 23:22:03	2019-01-25 23:22:03	t
104	14	1	500	Water Intro	50	0	water-intro	/FTUploads/E9SX56rYyrQN1h2QzHm8TnZKr7tJUHKrI95bD3PL.jpeg	\N	WATER INTRO - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER INTRO в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Позволит подробно ознакомиться с работой бассейна и освоиться в  водной среде. В тренировку включены  основные движения, соединенные  в простые комбинации. Лучший вариан,  оценить свои реальные силы и возможности.</p>	2019-01-25 23:23:42	2019-01-25 23:23:42	t
105	14	1	500	Water Running	50	0	water-running	/FTUploads/JB6F5d0fuja8ntk1STLzxNmuo1KGZFtpi679O7DF.jpeg	\N	Бег в воде для похудения: беговые занятия в бассейне в фитнес-клубе Fitron	\N	Узнать подробнее про тренировку WATER RUNNING в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Тренировка включает в себя беговую и плавательную работу, используется максимально высокий темп, что позволяет развить общую выносливость организма. Задача, корректировка веса и развитие выносливости.</p>	2019-01-25 23:24:13	2019-01-25 23:24:13	t
106	14	1	500	Water Star	50	0	water-star	/FTUploads/BNno9HWBrYwBEM9BAc9C9Zud431SNuiWGbLJBxHe.jpeg	\N	Плавание для взрослых - уроки по обучению плаванию взрослых в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER STAR в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> функциональная тренировка на выносливость.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность: </strong>для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> В уроке  используется принцип круговой тренировки, чередование аэробной и силовой работы. Цель- повышение функциональности. Возможно применение специального оборудования.Способствует снижению веса.</p>	2019-01-25 23:26:02	2019-01-25 23:26:02	t
107	14	1	500	Water Fitness	50	0	water-fitness	/FTUploads/Q4hMsVavhbVagGpAczez0VSbBxjufrlNxzYZpLf0.jpeg	\N	WATER FITNESS - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER FITNESS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность: </strong>для продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Тренировка направлена на улучшение аэробной работоспособности мышц и развития силы с использованием дополнительного оборудования.Способствует снижению веса.</p>	2019-01-25 23:26:35	2019-01-25 23:26:35	t
108	14	1	500	Water Combat	50	0	water-combat	/FTUploads/DpJpMW2bB2z0vlu9W2HnHlD68IWntsY1EcVAmT4m.jpeg	\N	WATER COMBAT - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER COMBAT в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> высокая.</p>\r\n\r\n<p><strong>Сложность: </strong>для высокого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Тренировка направлена на кардио выносливость и на укрепление мышц верхнего плечевого пояса.Используется дополнительное оборудование.Способствует снижению веса.</p>	2019-01-25 23:27:10	2019-01-25 23:27:10	t
109	14	1	500	Water Mama	40	0	water-mama	/FTUploads/KE2jpBbkAE3aPK8Ua6zciHvggDsW8w0HmHRwpJ5a.jpeg	\N	Water Mama - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER MAMA в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность: </strong>после прохождения консультации врача.</p>\r\n\r\n<p><strong>Описание: </strong>Специальный урок для беременных.Тренировка в воде  поможет будущей маме укрепить мышцы и подготовить организм к родам, а так же снимет боли в спине, поможет справиться со стрессом и способствует расслаблению.При регулярных занятий, набор лишнего веса минимален , что гарантирует быстрое возвращение к прежним формам после рождения ребенка.</p>	2019-01-25 23:27:41	2019-01-25 23:27:41	t
110	14	1	500	Water Flat	50	0	water-flat	/FTUploads/O7tQBZffJMAjo4KKMdyP3WSIwvQQq5rngrcOTyEC.jpeg	\N	WATER FLAT - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER FLAT в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Тренировка с использование специального оборудования - AQUA FLAT. В основе методики тренировки, лежат упражнения на развитие координации, баланса, гибкости, силы и ловкости. Постоянная динамика и концентрация выводят тренировки на совершенно новый уровень.За счет своей конструкции плот отлично держится на плаву, что дает возможность безопасно работать на нем.</p>	2019-01-25 23:28:11	2019-01-25 23:28:11	t
111	14	1	500	Ракеты	40	0	rakety	/FTUploads/TQsBrdsymfs3yfDmFPhH61cl5kF93cGsa2WLn2tD.jpeg	\N	Детские занятия в бассейне - записаться на водные программы в фитнес-клубе FITRON, цены в Ростове	\N	РАКЕТЫ - выгодные цены на индивидуальные и групповые программы в бассейне. Фитнес для похудения в клубе FITRON.	<p>Программа для тех, кто хочет совершенствовать технику плавания в  различных стилях.Плавай больше и побеждай на соревнованиях!</p>	<p><strong>Интенсивность:</strong> Средняя</p>\r\n\r\n<p><strong>Сложность:</strong> Для среднего уровня подготовленности</p>\r\n\r\n<p><strong>Описание:</strong> На этих занятиях дети продолжают обучение элементам и спортивным способам плавания. Повышается интенсивность и сложность тренировок. Тренировки акцентированы на развитие физических качеств, тренировку сердечно-сосудистой системы и снижения лишнего веса. Для занятий в данной возрастной категории необходимы хотя бы минимальные навыки плавания и опыт занятия физической активности. Если ребенок не соответствует данным требованиям, то рекомендуем воспользоваться услугами персональных тренировок и последующим совмещением с занятиями в группе или полным переходом к групповым занятиям.</p>	2019-01-25 23:33:35	2019-01-25 23:33:35	t
112	14	1	500	Плавание + TEEN	45	0	plavanie-teen	/FTUploads/VcE8pEuAe5FEPibg7iDxlTK5cLMZSaAFqMyUub4p.jpeg	\N	ПЛАВАНИЕ + TEEN - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку ПЛАВАНИЕ + TEEN в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	<p><strong>Интенсивность:</strong> Средняя</p>\r\n\r\n<p><strong>Сложность:</strong> Для начального и среднего уровня подготовленности</p>\r\n\r\n<p><strong>Описание:</strong> Программа для подростков и тинейджеров. Специальные упражнения в воде с дополнительным оборудованием помогут  укрепить мышц спины.что важно в данном возрасте.Совершенствование  и постановка техники плавания.</p>\r\n\r\n<p> </p>	2019-01-25 23:37:01	2019-01-25 23:37:01	t
113	14	1	500	Water Press	45	0	water-press	/FTUploads/ZRlzUC6qETpx3Nt2gKnr1WBvxAmdUaxcWLIVPxPh.jpeg	\N	WATER PRESS - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку WATER PRESS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	<p>Cиловой класс для тренировки всех мышц брюшного пресса.</p>	<p><strong>Продолжительность:</strong> 45 мин</p>\r\n\r\n<p><strong>Направленность:</strong> силовая программа</p>\r\n\r\n<p><strong>Сложность:</strong> от низкого до среднего</p>\r\n\r\n<p><strong>Описание:</strong> Эффективный силовой класс для тренировки мышц брюшного пресса.</p>	2019-01-25 23:37:42	2019-01-25 23:37:42	t
134	15	1	500	Лунная походка	30	0	lunnaa-pohodka	/FTUploads/QprDuK4vSTaJc6UILz4TfCAjbUN8BjWbQpzZ2VsT.jpeg	\N	ЛУННАЯ ПОХОДКА: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа ЛУННАЯ ПОХОДКА в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> сюжетно-игровая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>Игровой урок, направленный на укрепление мышц голени и стопы с использованием специального оборудования для профилактики плоскостопия.</p>	2019-01-25 23:51:05	2019-01-25 23:51:05	t
114	14	1	500	Плавание для детей	50	50	plavanie	/FTUploads/8BDguD4ZSIbtaqIlXGT6fLXVDY4fmNcVsQgwaeSz.jpeg	Плавание для детей	Плавание для детей - цены на обучение ребенка плаванию в фитнес-клубе FITRON в Ростове-на-Дону	\N	Тренировки по плаванию для детей в Ростове-на-Дону. Записать ребенка в секцию плавания в фитнес-клуб Фитрон по выгодной цене.	<p>Отдать ребёнкана плавание с самого раннего возраста — отличная идея, чтобы подарить ему красивую осанку, закаленный иммунитет, здоровое и правильное физическое развитие. В спортивномклубе «Фитрон» работают профессиональные тренеры, которые быстро найдут подход к маленьким посетителям, обеспечат им безопасные и полезные занятия в воде. Тренировка в бассейнеприносит пользу не только здоровью, но и настроению — увлекательные и интересныеупражнения способствуют раскрепощению, развитию коммуникативных навыков, получению положительных эмоций и умиротворения.</p>	<p><strong>Интенсивность: </strong>Средняя</p>\r\n\r\n<p><strong>Сложность:</strong> Для начального уровня подготовленности</p>\r\n\r\n<p><strong>Описание:</strong> Отдать ребёнкана плавание с самого раннего возраста — отличная идея, чтобы подарить ему красивую осанку, закаленный иммунитет, здоровое и правильное физическое развитие. В спортивномклубе «Фитрон» работают профессиональные тренеры, которые быстро найдут подход к маленьким посетителям, обеспечат им безопасные и полезные занятия в воде. Тренировка в бассейнеприносит пользу не только здоровью, но и настроению — увлекательные и интересныеупражнения способствуют раскрепощению, развитию коммуникативных навыков, получению положительных эмоций и умиротворения.</p>\r\n\r\n<h2>Детские занятия в бассейне</h2>\r\n\r\n<p>Положительный эффект от плаваниястановится заметен уже после нескольких недель занятий. При регулярных тренировках 2-3 раза в неделю пользаперерастает в устойчивый результат:</p>\r\n\r\n<ul>\r\n\t<li>улучшается аппетит и общее самочувствие;</li>\r\n\t<li>существенно укрепляется иммунитет, организм закаливается, простудные и другие заболевания тревожат ребенка крайне редко;</li>\r\n\t<li>уменьшаются симптомы различных нарушений, если они есть (например, гипо- или гипертонус, синдром повышенной возбудимости, ДЦП);</li>\r\n\t<li>проводится постоянная профилактика развития плоскостопия и сколиоза;</li>\r\n\t<li>улучшается обмен веществ;</li>\r\n\t<li>обретаются хорошие навыки плавания, благодаря чему родители могут не беспокоиться за ребенка в воде;</li>\r\n\t<li>нормализуется сон;</li>\r\n\t<li>укрепляется опорно-двигательная, нервная и дыхательная системы, сердце и сосуды;</li>\r\n\t<li>развиваются физические способности, такие как выносливость, сила, координация, ловкость и гибкость;</li>\r\n\t<li>устраняются проблемы с неправильной осанкой.</li>\r\n</ul>\r\n\r\n<p>Занятияплаванием, особенно спортивным, приучают ребенка к дисциплине, которая отражается на поведении не только в зале, но и на улице, дома, во время учебы. Особенно хорошо водныеупражнения влияют на активных, слишком эмоциональных и неспокойных детей. Во время тренинга они обретают позитивный настрой, успокаиваются и избавляются от негативных эмоций.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Особый эффект, который обеспечивают тренировки— более быстрый рост ребенка. Благодаря тому, что вес тела в воде ощущается значительно меньше, с опорно-двигательной системы полностью снимается все компрессионное давление, а суставы и позвоночник во время плавания естественным образом вытягиваются. Здоровыйрост подкрепляется равномерным развитием и укреплением всех групп мышц.</p>\r\n\r\n<h2>Обучение плаванию в возрасте 5-8 лет</h2>\r\n\r\n<p>Начинать посещать секциюплавания лучше всего с 5 лет. В этом возрасте организм ребенка уже достаточно окреп для умеренных нагрузок и хорошо поддается разумному усовершенствованию. Обучениезадействует практически все группы мышц. Эффективно развиваются мышцы спины и пресса, плечевой пояс, ноги и руки. Профессиональный тренер внимательно и точно планирует интенсивность их работы и нагрузку, чтобы ребенок достаточно развивался, но не переутомлялся.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Один из основных навыков, которому инструктор будет учить— правильное глубокое дыхание. Человек с детства дышит неправильно, поэтому легкие не развиваются в полном объеме. От этого страдает и здоровье. Особая дыхательная гимнастика во время плавания прекрасно развивает грудную клетку и плечевой пояс, способствует раскрытию легких. Это становится хорошей профилактикой разных легочных болезней (например, астмы или бронхита), а также повышает детскуюэнергичность и выносливость.</p>\r\n\r\n<p> </p>\r\n\r\n<p>В 5-8 лет ребенок может просто заниматься плаванием или начать спортивную карьеру. Обучениеначинается с правильного поведения в воде и дыхания, а также освоения техники кроля на груди и спине. Дети, которые уже более уверенно чувствуют себя в воде, приступают к изучению работы ногами в технике дельфина и движений рук при плавании брассом.</p>\r\n\r\n<h2>Предостережения и рекомендации по занятиям плаванием для детей</h2>\r\n\r\n<p>Прежде чем записатьребёнка на занятия, нужно убедиться, что для них нет противопоказаний:</p>\r\n\r\n<ul>\r\n\t<li>стафилококковая инфекция;</li>\r\n\t<li>гнойные образования или аллергические высыпания на коже;</li>\r\n\t<li>острые воспалительные процессы;</li>\r\n\t<li>кожные, вирусные или кишечные инфекции;</li>\r\n\t<li>острая почечная или печеночная недостаточность;</li>\r\n\t<li>вывихи суставов;</li>\r\n\t<li>пневмония;</li>\r\n\t<li>повышенная температура тела;</li>\r\n\t<li>серьезные пороки сердца;</li>\r\n\t<li>лихорадочные состояния.</li>\r\n</ul>\r\n\r\n<p>Полезные рекомендации по водным тренировкамдля детей:</p>\r\n\r\n<ol>\r\n\t<li>После первых посещений бассейна могут активизироваться проблемы со здоровьем, чаще появляться простуды, насморк. Это естественный процесс адаптации организма, после которого иммунитет окрепнет и обеспечит хорошую защиту от бактерий и инфекций. Болезнь нужно пролечить, а потом снова возвращаться в привычный тренировочный режим.</li>\r\n\t<li>После занятий дети должны быть в тепле. Особенно внимательно за температурой их тела следует следить в холодное время года: волосы должны быть полностью высушены, а одежда хорошо согревать.</li>\r\n\t<li>Чтобы из-за постоянного попадания воды уши не воспалялись, после тренировки их нужно тщательно протирать ушными палочками.</li>\r\n</ol>\r\n\r\n<p>Фитнес-центр «Фитрон» в Ростове-на-Донуиспользует инновационные системы очистки воды и воздуха, благодаря чему можно не беспокоиться о безопасности и здоровье ребенка. Инструкторы высочайшего уровня проконтролируют состояние ребенка и будут четко соблюдать безвредный режим тренировок, следить, чтобы он не переохлаждался. Занятия проводятся в группах с детьми одинаковой возрастной категории. Для активных занимающихся есть выгодные абонементы по приятной цене. Уточнить расписание и записаться на конкретный день можно у менеджера клуба.</p>	2019-01-25 23:38:41	2019-01-25 23:38:41	t
115	14	1	500	СТАРТ-ПЛАВАНИЕ	40	40	start-plavanie		\N	СТАРТ-ПЛАВАНИЕ - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку СТАРТ-ПЛАВАНИЕ в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2019-01-25 23:39:10	2019-01-25 23:39:10	t
116	14	1	500	AQUA-JOGGER	0	0	aqua-jogger		\N	AQUA-JOGGER - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку AQUA-JOGGER в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2019-01-25 23:39:31	2019-01-25 23:39:31	t
117	14	1	500	AQUA-SHAPE	50	50	aqua-shape		\N	Аквааэробика для фигуры: занятия в бассейне для укрепления мышц в фитнес-клубе Фитрон	\N	Узнать подробнее про тренировку AQUA-SHAPE в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2019-01-25 23:40:50	2019-01-25 23:40:50	t
118	14	1	500	AQUA-BEGINNERS	50	50	aqua-beginners		\N	Аквааэробика для начинающих - групповые занятия в бассейне в фитнес-клубе Фитрон	\N	Узнать подробнее про тренировку AQUA-BEGINNERS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2019-01-25 23:41:10	2019-01-25 23:41:10	t
119	14	1	500	AQUA-FITNESS	50	50	aqua-fitness		\N	Аквааэробика в Ростове-на-Дону: занятия в бассейне фитнес-клуба Фитрон	\N	Узнать подробнее про тренировку AQUA-FITNESS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	\N	\N	2019-01-25 23:41:31	2019-01-25 23:41:31	t
120	14	1	500	WATER FLOWERS	50	50	aqua-flowers		\N	AQUA-FLOWERS - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку AQUA-FLOWERS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	<p>Силовая программа для тренировок основных мышечных групп с использованием оборудования "FLOWERS"</p>	<p>Силовая программа для тренировок основных мышечных групп с использованием оборудования "FLOWERS"</p>	2019-01-25 23:42:06	2019-01-25 23:42:06	t
121	14	1	500	AQUA-ABS	0	0	aqua-abs		\N	AQUA-ABS - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	Узнать подробнее про тренировку AQUA-ABS в фитнес-клубе Фитрон. Групповые водные программы для взрослых и детей в Ростове-на-Дону.	<p>Класс для тренировки всех мышц брюшного пресса,мышц спины и упражнения на растягивание.</p>	<p>Класс для тренировки всех мышц брюшного пресса,мышц спины и упражнения на растягивание.</p>	2019-01-25 23:42:30	2019-01-25 23:42:30	t
122	14	1	500	Акулы	0	0	akuly		\N	\N	\N	\N	\N	\N	2019-01-25 23:43:59	2019-01-25 23:43:59	t
123	14	1	500	Дельфины	0	0	delfiny		\N	\N	\N	\N	\N	\N	2019-01-25 23:44:31	2019-01-25 23:44:31	t
124	14	1	500	СБОРНАЯ КЛУБА (суша)	0	0	sbornaa-kluba-susa		\N	\N	\N	\N	\N	\N	2019-01-25 23:44:46	2019-01-25 23:44:46	t
125	14	1	500	СБОРНАЯ КЛУБА (вода)	0	0	sbornaa-kluba-voda		\N	\N	\N	\N	\N	\N	2019-01-25 23:45:02	2019-01-25 23:45:02	t
126	14	1	500	PRENATAL	0	0	prenatal		\N	\N	\N	\N	\N	\N	2019-01-25 23:45:20	2019-01-25 23:45:20	t
127	14	1	500	Весёлые рыбки	0	0	veselye-rybki		\N	\N	\N	\N	\N	\N	2019-01-25 23:45:48	2019-01-25 23:45:48	t
128	14	1	500	SWIMMING	0	0	swimming		\N	\N	\N	\N	\N	\N	2019-01-25 23:46:28	2019-01-25 23:46:28	t
129	14	1	500	Плавание	0	0	plavanie-2		\N	\N	\N	\N	\N	\N	2019-01-25 23:46:45	2019-01-25 23:46:45	t
130	14	1	500	Группа спортивной подготовки (Вода)	0	0	gruppa-sportivnoj-podgotovki-voda		\N	\N	\N	\N	\N	\N	2019-01-25 23:47:35	2019-01-25 23:47:35	t
131	14	1	500	Группа спортивной подготовки (Суша)	0	0	gruppa-sportivnoj-podgotovki-susa		\N	\N	\N	\N	\N	\N	2019-01-25 23:47:57	2019-01-25 23:47:57	t
132	14	1	500	Группа начальной спортивной подготовки (Вода)	0	0	gruppa-nacalnoj-sportivnoj-podgotovki-voda		\N	\N	\N	\N	\N	\N	2019-01-25 23:48:17	2019-01-25 23:48:17	t
133	14	1	500	Группа начальной спортивной подготовки (Суша)	0	0	gruppa-nacalnoj-sportivnoj-podgotovki-susa		\N	\N	\N	\N	\N	\N	2019-01-25 23:48:35	2019-01-25 23:48:35	t
136	15	1	500	Прыг - скок	30	0	pryg-skok	/FTUploads/PUx9QKrjVrPJp1h1GMwoLtfZLxDwz8otbFEvdSxf.jpeg	\N	ПРЫГ - СКОК: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа ПРЫГ - СКОК в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> игровая, общеразвивающая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Веселый и динамический урок с использованием фитбола,развивает координацию движений, оказывает положительное влияние на позвоночник.</p>	2019-01-25 23:52:26	2019-01-25 23:52:26	t
137	15	1	500	Космик	45	0	kosmik	/FTUploads/ykrVV4TNT34F3gyonHsMEUGu9eZ7SyyliSbknKb2.jpeg	\N	КОСМИК: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМИК в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> игровая - силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>Урок проходит в игровой форме, направленный на развитие физических качеств а так же на основные виды движений (бег, прыжки и тд), укрепляет  основные мышечные  группы.</p>	2019-01-25 23:53:07	2019-01-25 23:53:07	t
138	15	1	500	Выпрямляй-ка	30	0	vypryamlyai-ka	/FTUploads/TSobgnwx9RiK6eBF4pqDYVfgE2jCCVPTOmvTETpl.jpeg	\N	ВЫПРЯМЛЯЙ-КА: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа ВЫПРЯМЛЯЙ-КА в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> игровая - силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>  Урок направлен на  профилактику нарушений осанки включающие в себя упражнения и задания для укрепления мышц спины и пресса.</p>	2019-01-25 23:53:59	2019-01-25 23:53:59	t
139	15	1	500	Спина + пресс	45	0	spina-press	/FTUploads/Gx2FwIJFNPsaooLBJeehXkGyiHVVsktljJTYdiSp.jpeg	\N	СПИНА + ПРЕСС: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа СПИНА + ПРЕСС в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Урок силовой направленности для тренировки мышц  поддерживающих правильную осанку. В уроке используются  упражнения и силовые задания для укрепления мышц спины и пресса.</p>	2019-01-25 23:55:44	2019-01-25 23:55:44	t
140	15	1	500	Космо - ассорти	45	0	kosmo-assorti	/FTUploads/TOgGLW5skBzjppFtcXThafpkluCoxbMFl3BoqunO.jpeg	\N	КОСМО-АСОРТИ: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМО-АСОРТИ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробно-игровая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong> Динамический урок, включающий элементы эстафет и  подвижных игр.   Урок направлен на развитие координации , быстроты, выносливости у подростков. В уроке используется обучение элементам классической аэробики.</p>	2019-01-25 23:56:18	2019-01-25 23:56:18	t
141	15	1	500	Функциональная тренировка	45	0	funkcionalnaa-trenirovka	/FTUploads/U9BGtPgvaGSx3Zz7w1trthAei7Ic264ZYwPq4Cke.jpeg	\N	Детская функциональная тренировка - записать ребенка на спортивные детские программы в фитнес-клуб Фитрон	\N	Детская программа Функциональная тренировка в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Детские функциональные тренировки</strong> — занятия, с помощью которых в легкой игровой форме прорабатываются все мышцы тела, включая глубокие стабилизаторы. При систематическом посещении фитнес-клуба обеспечивается впечатляющий оздоровительный эффект, у детей развиваются такие важные качества, как сила, выносливость и скорость. Тренинг также укрепляет опорно-двигательный аппарат, предупреждает развитие плоскостопия и сколиоза, способствует улучшению ловкости и гибкости.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Силовая тренировка детей и подростков.</h2>\r\n\r\n<p>В спортивном клубе «Фитрон» занятия проводятся в двух различных группах: для детей 9-11 и 12-16 лет. Это позволяет инструкторам предложить адекватную возрасту и физической подготовленности нагрузку, учесть все физиологические особенности организма. Программа силовой подготовки для детей рассчитывается на долгий срок и должна реализовываться систематически (не реже 2 раз в неделю). Перед началом занятий стоит проконсультироваться с врачом на предмет возможных противопоказаний: повышенное артериальное давление, врожденные пороки сердца или другие серьезные заболевания.</p>\r\n\r\n<p>Первые тренинги проводятся с малым сопротивлением, чтобы дети могли в полной мере овладеть правильной техникой упражнений. После этого нагрузка постепенно увеличивается. Все движения выполняются с полной амплитудой, чтобы развить функции и подвижность суставов.</p>\r\n\r\n<p>Серьезные тренировки с такого молодого возраста помогают привить ребенку любовь к спорту, направить его энергию и непоседливость в правильное русло, развить дисциплинированность. Положительным результатом занятий также становится развитие глубокого дыхания и полноценное раскрытие легких: ребенку будет легко переносить любые нагрузки, сейчас и в будущем.</p>\r\n\r\n<p> </p>\r\n\r\n<h2>Суть детского функционального тренинга.</h2>\r\n\r\n<p>Функциональная тренировка подходит для любого уровня подготовленности. Силовые упражнения выполняются с собственным весом или строго подобранным тренером небольшим утяжелением. Среди часто используемых движений: махи руками и ногами, выпады, отжимания, подтягивания, прыжки и т.п. Неотъемлемой частью эффективных занятий являются кардионагрузки: ходьба, бег, применение велотренажера или беговой дорожки. Дополняют их предварительная разминка и легкие упражнения.</p>\r\n\r\n<p>Категория возраста от 9 до 16 лет связана с активным ростом и формированием детского организма. Внутренние системы и части тела не всегда развиваются пропорционально. Из-за этого большинство подростков находятся не в лучшей физической форме. Это порождает массу расстройств и комплексов по поводу своей нескладности или неуклюжести. Тренировки помогут избавиться от этих трудностей, наладить координацию движений, сделать мышцы подтянутыми и красивыми, а также справиться с основной проблемой современного поколения — малоподвижным образом жизни.</p>\r\n\r\n<p>Упражнения на силу позволяют уже в подростковом возрасте:</p>\r\n\r\n<ul>\r\n\t<li>натренировать сердечно-сосудистую систему;</li>\r\n\t<li>развивать физические возможности на 30% эффективнее;</li>\r\n\t<li>закалить иммунитет;</li>\r\n\t<li>предупредить травмы опорно-двигательного аппарата.</li>\r\n</ul>	2019-01-25 23:57:28	2019-01-25 23:57:28	t
142	15	1	500	Космо - Тур	30	0	kosmo-tur	/FTUploads/onO0HeCDyOe9BXteSTHyJrPnqvBMqzhQjZK9wcLQ.jpeg	\N	КОСМО-ТУР: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМО-ТУР в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкий уровень.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Захватывающая гонка на велотренажерах под зажигательную музыку для детей (рост которых не менее 140см)</p>	2019-01-25 23:58:07	2019-01-25 23:58:07	t
143	15	1	500	Modern	55	0	modern	/FTUploads/W4HN48ghkxAWybJAU77ew7U5Qyss7PPHhQ65zK4o.jpeg	\N	MODERN: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа MODERN в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	<p><strong>Направленность:</strong> аэробная.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Танцевальная программа научит ребенка чувствовать свое тело, координировать движения и связывать их с музыкой. Поможет раскрыть творческий потенциал через язык тела.</p>	\N	2019-01-26 00:00:15	2019-01-26 00:00:15	t
144	15	1	500	АКРОБАТИКА	55	0	akrobatika	/FTUploads/tjYqZ2uhWhgT1PUrlVVYON79BecefkKgTAUZdSC8.jpeg	\N	Акробатика для детей - записать ребенка на детскую акробатику в Ростове-на-Дону, цены в FITRON	\N	Детская программа Акробатика в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> спортивная</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>  Акробатика не только укрепляет тело ребенка и способствует гармоничному физическому развитию, но и помогает воспитать характер, трудолюбие, настойчивость, уверенность в себе и ответственность. Очень красивый вид физической активности. Легкость движения акробатов завораживает и приводит в восторг.</p>	2019-01-26 00:00:48	2019-01-26 00:00:48	t
145	15	1	500	Творческая мастерская	30	0	tvorceskaa-masterskaa	/FTUploads/YncR0qBING3CtKIlY59M4xDfE5zX4O2kssvW93Fd.jpeg	\N	Творческая мастерская для детей - записать ребенка на творческое занятие в Ростове-на-Дону	\N	Детская программа ТВОРЧЕСКАЯ МАСТЕРСКАЯ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> общеразвивающая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Программа направленная на раскрытие творческого потенциала ребенка. На занятии ребенок осваивает и развивает основные техники рисования, лепки, аппликации, конструирования.</p>	2019-01-26 00:01:37	2019-01-26 00:01:37	t
146	15	1	500	Ballet kids	45	0	ballet-kids	/FTUploads/cfpqds9u2yS4A2uOfpWgE87iguH70c7BIQg8bH8r.jpeg	\N	BALLET KIDS: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа BALLET KIDS в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	<p><strong>Направленность:</strong> танцевальная</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Танцевальный урок  развивающий  грацию и легкость движений, а также способствует формированию правильной  красивой осанки.</p>	\N	2019-01-26 00:02:10	2019-01-26 00:02:10	t
147	15	1	500	Кикбоксинг	45	0	kikboxing	/FTUploads/0Pq8xB0AAdu67hHNjwJjRY85FAHwntMfiB8MmqmX.jpeg	\N	Кикбоксинг для детей - записать ребенка на занятие детским кикбоксингом в Ростове-на-Дону	\N	Детская программа КИКБОКСИНГ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> единоборства.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Этот стиль боевых искусств  направленный на воспитание духа и волевого характера. Кикбоксинг для детей, причем не только мальчишек, дает умение профессионально постоять за себя и за других, а значит, вырабатывает уверенность в себе.</p>	2019-01-26 00:02:52	2019-01-26 00:02:52	t
148	15	1	500	Хореография + stretch	55	0	horeografiya-stretch	/FTUploads/3pApHO53ynXTDOBXsBZuaQWCduLgMyffoRl9g7lI.jpeg	\N	Хореография для детей - записать ребенка на занятие детской хореографией в Ростове-на-Дону	\N	ХОРЕОГРАФИЯ + STRETCH  - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> гибкость.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Хореография для детей – замечательный способ развития музыкального слуха, координации и  гибкости. Ребенок сможет сформировать хорошую осанку, стать боле уверенным в себе, веселым и открытым, а упражнения на растягивания позволят улучшить гибкость.</p>	2019-01-26 00:03:30	2019-01-26 00:03:30	t
149	15	1	500	Космические танцы	30	0	kosmiceskie-tancy	/FTUploads/dkDQjUOrRepUIyiTb27sA3wCS8moA5FL2NJykIAe.jpeg	\N	КОСМИЧЕСКИЕ ТАНЦЫ: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМИЧЕСКИЕ ТАНЦЫ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> танцевальная</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong>Это оригинальная современная фитнес-программа, разработанная специально для тренировок юных танцоров. В ней прекрасно сочетаются элементы из сальсы и хип-хопа, а так же  лучшие движения из модных танцевальных направлений. При этом легкие комбинации быстро разучиваются. Любой урок превращается в веселую фитнес-вечеринку, на которой царят яркие и зажигательные ритмы! Какой ребенок сможет устоять на месте?</p>	2019-01-26 00:04:17	2019-01-26 00:04:17	t
150	15	1	500	Космо - Трекинг	30	0	kosmo-treking	/FTUploads/2CCKdI29KetKT0puiq42xCQwqoYPVSFmmeowacVP.jpeg	\N	КОСМО - ТРЕКИНГ: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМО - ТРЕКИНГ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> аэробная</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Специальная программа на беговой дорожке с добавлениями интервалов ускорений и отдыха. Улучшает общую выносливость и способствует снижению веса.  Грамотный тренер всегда поможет соблюдать правильную технику.</p>	2019-01-26 00:04:57	2019-01-26 00:04:57	t
151	15	1	500	Космо - Класс	55	0	kosmo-klass	/FTUploads/nlHRAJ5xsfmJg176ObKBIeyU80U10SGwtW8gGuIN.jpeg	\N	КОСМО-КЛАСС: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа КОСМО-КЛАСС в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p><strong>Направленность:</strong> силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong> Занятие в тренажерном зале, направленное на укрепление основных мышечных групп с использованием тренажеров, свободных весов, собственного веса. Урок для детей от 12 лет.</p>	2019-01-26 00:07:16	2019-01-26 00:07:16	t
152	15	1	500	Stretch	30	0	stretch-2	/FTUploads/e5ybg9vKJBB11EecPPZ1TAVZeLrwErOsgVoNhSU1.jpeg	\N	STRETCH: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа STRETCH в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p>.<strong>Направленность: </strong>гибкость</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Тренировка предназначена для растяжения мышц,связок и сухожилий. Хорошая гибкость дает возможность эффективнее выполнять упражнения, сохранять красивую осанку и снижает риск болей в спине.</p>	2019-01-26 00:08:24	2019-01-26 00:08:24	t
153	15	1	500	STRETCH	30	0	STRETCH		\N	\N	\N	\N	\N	<p>в уроке используем упражнения статического, динамического и проприоцептивного видов растягивания, с удержанием каждого поожения до 60 сек. В занятие должны быть включены упражнение на растягивание основных крупных мышечных групп и развитие гибкости вокруг основных крупных суставов и подвижности позвоночника.</p>	2019-01-26 00:09:03	2019-01-26 00:09:03	t
154	15	1	500	Йога-космик	45	45	joga-kosmik		\N	ЙОГА-КОСМИК: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	Детская программа ЙОГА-КОСМИК в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	<p>Йога формирует у детей правильную осанку, развивает равновесие и гибкость. Успокоит даже самых непоседливых маленьких йогов.</p>	<p>Увлекательное путешествие в Индию на ковре-самолете для самых маленьких йогов.</p>\r\n\r\n<p>Занятие формирует у детей правильную осанку, развивает равновесие и гибкость. Асаны учат даже самых непоседливых концентрироваться на определенной задаче и вовремя успокаиваться.</p>\r\n\r\n<p>Дыхательная практика в начале и расслабление в конце тренировки позволят  детям лучше понимать свое тело и сознание.</p>	2019-01-26 00:09:33	2019-01-26 00:09:33	t
155	15	1	500	Акробатический рок-н-ролл	0	0	akrobaticeskij-rok-n-roll		\N	Акробатический Рок-н-ролл для детей - записать ребенка на детские танцевальные тренировки в Ростове-на-Дону	\N	Детская программа АКРОБАТИЧЕСКИЙ РОК-Н-РОЛЛ в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	<p>Cпортивный энергичный танец под зажигательные мелодии. Программа отличается сочетанием характерных движений ногами и исполнением акробатических и хореографических элементов.</p>	<p>Это, прежде всего, спортивный энергичный танец под зажигательные мелодии. Программа отличается сочетанием характерных движений ногами и исполнением акробатических и хореографических элементов. Очень красивое зрелище, полное эстетики и динамики, захватывающее дух как у самих исполнителей, так и у зрителей.</p>	2019-01-26 00:10:03	2019-01-26 00:10:03	t
156	15	1	500	Stretch kids	30	0	stretch-kids	/FTUploads/dpxJDVrxpdkzPMFzBd6G15VXgZrrG87obmb2Cios.jpeg	\N	Стрейчинг для детей - занятия детским игровым стрейчингом в фитнес-клубе Фитрон	\N	Детская программа STRETCH KIDS в фитнес-клубе Фитрон. Узнать больше про индивидуальные и групповые тренировки для детей в Ростове-на-Дону.	\N	<p>Система упражнений на растяжку мышц тела. Отличная профилактика нарушений осанки. Поддерживает подвижность и гибкость суставов.</p>	2019-01-26 00:10:40	2019-01-26 00:10:40	t
157	15	1	500	Пресс+stretch	45	45	pressstretch	/FTUploads/95yg1TmO9DObqrrf47Nk09CaZc2xGRvTdolbpyo0.jpeg	\N	\N	\N	\N	<p>Силовая работа на мышцы спины и развитие гибкости.</p>	<p>Тренировка, сочетающая в себе силовую работу на мышцы спины и развитие гибкости.</p>	2019-01-26 00:11:20	2019-01-26 00:11:20	t
158	15	1	500	Здоровая спина teen	45	45	pressstretch-2	/FTUploads/nIh1StSGoQu9xfXXJrLKNmxIvReiyqJUAgGIlwBy.jpeg	\N	\N	\N	\N	<p>Силовой  класс для тренировки мышц, поддерживающих правильную осанку (мышц спины и брюшного пресса).</p>	<p>Силовой  класс для тренировки мышц, поддерживающих правильную осанку (мышц спины и брюшного пресса).</p>	2019-01-26 00:11:54	2019-01-26 00:11:54	t
159	15	1	500	Веселые старты	45	45	veselye-starty	/FTUploads/vwzah2uzIOx8Dd92HDfpzYQ3WoxQ5IFEeMHy7o3w.jpeg	\N	\N	\N	\N	<p>Игровая эстафета, развивающая все физические качества.</p>	<p>Игровая эстафета, развивающая все физические качества.</p>	2019-01-26 00:12:42	2019-01-26 00:12:42	t
160	15	1	500	Functional kids	45	45	functional-kids	/FTUploads/raALIsh9q1BpZCiL0UQWVmnVYSk6YFh0OLZ8ow9h.jpeg	\N	\N	\N	\N	<p>Развитие основных видов движений и функциональных возможностей организма, укрепление основных мышечных групп. Урок проходит в игровой форме.</p>	<p>Развитие основных видов движений и функциональных возможностей организма, укрепление основных мышечных групп. Урок проходит в игровой форме.</p>	2019-01-26 00:13:13	2019-01-26 00:13:13	t
161	16	1	500	Individual	50	0	individual-program	/FTUploads/tJba47vyEB1oqCaLo2JpdhZ0H5zQSZo9aXfGenKQ.jpeg	\N	Индивидуальный тренер – записаться на индивидуальные тренировки в Ростове-на-Дону, цены в FITRON	\N	Персональные занятия в тренажерном зале в Ростове-на-Дону. Цены на индивидуальные тренировки в фитнес – клубе FITRON. Записаться онлайн.	<p>По результатам wellness-диагностики и fitness-консультации персональный тренер разработает индивидуальную программу и график тренировок.</p>	<p><strong>ПРЕИМУЩЕСТВА ЗАНЯТИЙ С ПЕРСОНАЛЬНЫМ ТРЕНЕРОМ </strong></p>\r\n\r\n<ul>\r\n\t<li><strong> Индивидуальный подход</strong></li>\r\n</ul>\r\n\r\n<p>Основным принципом персональных тренировок является составление индивидуальных программ с учетом физиологических особенностей организма и, конечно, ваших пожеланий. Инструктор составляет для вас особую программу тренировок и объясняет технику выполнения упражнений и их последовательность. Для каждого клиента – свой уровень нагрузки и набор тренажеров.</p>\r\n\r\n<ul>\r\n\t<li><strong>Максимум внимания</strong></li>\r\n</ul>\r\n\r\n<p>Во время проведения групповых занятий одному конкретному человеку уделяется меньше внимания, чем на персональной тренировке. И это не удивительно, ведь за 60 минут меняется большое количество упражнений, и тренер не всегда может подойти к каждому и поправить технику. Соответственно, эффективность на персональном тренинге будет намного выше – ведь он предполагает не только составление комплекса для одного конкретного человека, но и контроль со стороны инструктора за техникой выполнений.</p>\r\n\r\n<p>Это имеет особое значение, если перед занимающимся стоит несколько задач. Персональный тренер сможет скорректировать программу, если человек уже адаптируется к нагрузкам, или включит разнообразные упражнения, чтобы занятия не были монотонными и скучными.</p>\r\n\r\n<ul>\r\n\t<li><strong>Безопасный</strong></li>\r\n</ul>\r\n\r\n<p>Тренер не даст вам впасть в излишний оптимизм насчет своих возможностей, перегрузить мышцы или получить травму. Он покажет и проконтролирует правильный и безопасный для здоровья способ выполнения упражнения, не важно, делаете ли вы первые шаги в тренажерном зале, осваиваете свободные веса или пробуете новое в функциональном тренинге.</p>\r\n\r\n<p> </p>\r\n\r\n<ul>\r\n\t<li><strong>Эффективней.</strong></li>\r\n</ul>\r\n\r\n<p>Диапазон усилий, при котором физическая нагрузка действительно влияет на ваше тело, не такой уж большой, легко выйти и за верхнюю границу, рискуя здоровьем, и за нижнюю, где вы впустую теряете время. Тренер удержит вас в нужном коридоре, так что каждая минута на тренировке будет потрачена с пользой.</p>	2019-01-26 00:14:16	2019-01-26 00:14:16	t
163	18	1	500	Бассейн	0	0	basseyn		\N	\N	\N	\N	\N	\N	2019-01-26 00:15:56	2019-01-26 00:16:08	\N
162	17	1	500	Тренажёрный зал	0	0	trenazhernyy-zal	/FTUploads/eJGuzBy6ZfObohACGaF3nHJLhJ0Io8gCpnL3PIlF.jpeg	\N	\N	\N	\N	\N	<p>Многие люди мечтают о красивом, подтянутом и сильном теле. Благодаря спортивному клубу «FITRON», который находится в Ростове-на-Дону, мечты воплощаются в реальность! Занятия в тренажерном зале — это лучший способ достичь не только идеальной формы, но и обеспечить себе отличное настроение, самочувствие, красоту и долголетие. Они способствуют комплексному развитию мышечного корсета с возможностью полного контроля нагрузки и прицельной проработки «слабых мест» физической подготовки. Правильно спланированная тренировка в тренажерном зале существенно ускоряет метаболизм, помогает наращиванию мышечной массы или похудению, способствует росту выносливости и помогают выпустить «пар» и снять стресс.</p>\r\n\r\n<p>Занятия в тренажерном зале</p>\r\n\r\n<p>Тренировки проводятся по комплексной системе, поэтому позволяют одновременно достичь нескольких целей:</p>\r\n\r\n<ul>\r\n\t<li>укрепить здоровье;</li>\r\n\t<li>устранить лишний вес;</li>\r\n\t<li>усовершенствовать фигуру;</li>\r\n\t<li>увеличить силу и выносливость;</li>\r\n\t<li>улучшить координацию движений и гибкость;</li>\r\n\t<li>добиться точности выполнения всех упражнений и сделать более легкими привычные работы по дому или работе;</li>\r\n\t<li>простимулировать дыхательную и сердечно-сосудистую системы;</li>\r\n\t<li>избавиться от негативной или чрезмерной энергии.</li>\r\n</ul>\r\n\r\n<p>Тренажерный зал с одинаковым успехом могут посещать, как мужчины, так и девушки, которым не стоит бояться испортить фигуру — нагрузки сделают тело подтянутым и сильным, а естественную красоту только лучше и выразительнее. Программа тренировок включает множество различных упражнений, которые можно комбинировать, заменять, улучшать, добиваясь оптимального результата. Квалифицированный тренер спортивного клуба «FITRON» поможет подобрать индивидуальный спортивный комплекс в соответствии с вашими целями, весом, возможностями организма, здоровьем и возрастом. Профессиональная консультация сделает занятия безопасными и максимально эффективными.</p>\r\n\r\n<p>Почему стоит выбрать именно «FITRON»?</p>\r\n\r\n<p>Наш спортивный комплекс гордится самыми большими и хорошо оснащенными залами: площадь составляет около 1200 м<sup>2</sup>, тренажеры представлены последними моделями от мировых лидеров Techno Gym, Precor, Hoist и Foreman. Максимальный комфорт для посетителей обеспечивают удобные душевые, полное оснащение спортивным инвентарем, просторные и открытые фитнес зоны и зоны отдыха и раздевалки с эргономичными шкафчиками в полный рост и возможностью выбора их расположения. Воздух очищается с помощью инновационной технологии. Безопасность обеспечивается системой доступа по отпечаткам пальцев. Сервис соответствует высоким мировым стандартам.</p>\r\n\r\n<p>Надеемся, что наши клиенты по достоинству оценят не только услуги зала, но и его креативное ультрасовременное оформление: атмосфера космической станции создает мотивацию к достижению самых невероятных с первого взгляда целей! Чтобы упражнения дали заметный результат, а недорогие цены радовали своей величиной, рекомендуем приобрести абонемент сразу на несколько тренировок, ведь только так можно в полной мере прочувствовать всю прелесть занятий спортом.</p>\r\n\r\n<p>Эффективная тренировка в тренажерном зале</p>\r\n\r\n<p>В спортивном клубе «FITRON» поддерживается высочайшие уровень и технологии фитнеса. Занятия проводятся под руководством опытных квалифицированных тренеров, у которых всегда можно спросить совета. Продуманная зональная расстановка тренажеров позволяет сделать занятия максимально результативными и приятными. Она соответствует трехуровневой концепции тренировочного процесса, поэтому позволяет выбирать интенсивность и сложность нагрузки в соответствии с уровнем подготовки: от начального до профессионального уровня.</p>\r\n\r\n<p><a href="https://fitronrostov.com/fitnes-uslugi/personal-training/individual-program">Индивидуальные тренировки</a> помогут выработать правильную технику выполнения упражнений, улучшить мотивацию и контроль, сделать занятия эффективными, правильно рассчитать нагрузку. Особенно они важны для новичков, но не менее полезными окажутся и для опытных спортсменов — всегда есть чему учиться и куда развиваться. Персональный тренер делает достижение цели более быстрым, наглядным и в то же время безопасным, он также фиксирует прогресс и корректирует программу с учетом самочувствия, полученных результатов. Тренировки подходят посетителям любого возраста. Наши специалисты с радостью окажут помощь в выборе наилучшего варианта спортивной программы в соответствии с вашими целями и предпочтениями. Стоимость и расписание индивидуальных занятий можно уточнить у нашего менеджера.</p>	2019-01-26 00:15:14	2019-01-26 00:16:23	\N
164	19	1	500	COSMO CYCLE	55	0	cosmo-cycle-2		COSMO CYCLE	Cosmo Cycle - высокоинтенсивная тренировка в фитнес-клубе Fitron	\N	Узнать расписание на тренировку Cosmo Cycle в Ростове-на-Дону. Cycle-студия от фитнес-клуба Fitron.	<p>Высокоинтенсивная тренировка на максимально реалистичном велотренажёре IC6 с Q-фактором 155 мм , который принесет быстрый и ощутимый эффект, массу положительных эмоций и не надоест со временем! </p>	<p>Высокоинтенсивная тренировка на максимально реалистичном велотренажёре IC6 с Q-фактором 155 мм , который принесет быстрый и ощутимый эффект, массу положительных эмоций и не надоест со временем! <br />\r\nЭффективность программы COSMO CYCLE складывается из совокупности тренировки сердечно-сосудистой системы, мышечной силы и выносливости, ускорении метаболизма.         <br />\r\nВ новом формате студии добавлен эффект визуализации маршрута на экране: солнечные альпийские луга или морское побережье – куда ты отправишься сегодня?</p>	2019-01-26 00:17:28	2019-01-26 00:17:28	t
165	19	1	500	FIRE CYCLE	55	0	fire-cycle		\N	Fire Cycle - тренировка в Сайкл-Студии Ростова-на-Дону	\N	Узнать расписание на тренировку Fire Cycle в Ростове-на-Дону. Cycle-студия от фитнес-клуба Fitron.	<p>Это настоящая гонка на выживание, наградой в которой станет твой личный рекорд  и огненное кольцо во весь экран!</p>	<p>Это настоящая гонка на выживание, наградой в которой станет твой личный рекорд  и огненное кольцо во весь экран!<br />\r\nПолное погружение, световые эффекты, визуализируются с помощью системы ICG Connect на проекционном экране, и результат будет виден наглядно!<br />\r\nИндивидуально рассчитанные зоны мощности позволяют правильно и точно регулировать нагрузку, чтобы достичь высочайших успехов.</p>	2019-01-26 00:17:55	2019-01-26 00:17:55	t
166	19	1	500	FTP	45	0	ftp-functional-threshold-power		\N	\N	\N	\N	<p>FTP (Functional Threshold Power) Тренировка - тест на определение функциональной пороговой мощности,  Functional Threshold Power (FTP). FTP помогает рассчитать максимально эффективную нагрузку с учетом вашей физической формы и потребностей.</p>	<p>FTP (Functional Threshold Power) Тренировка - тест на определение функциональной пороговой мощности,  Functional Threshold Power (FTP). FTP помогает рассчитать максимально эффективную нагрузку с учетом вашей физической формы и потребностей. Вы научитесь работать в разных функциональных зонах (восстановление, выносливость, темп, взрывная сила).<br />\r\nМы рекомендуем включать функциональное тестирование в график тренировок, как минимум, раз в полтора месяца, а лучше проходить его после каждых 30 тренировок. Это позволит при необходимости скорректировать индивидуальный тренировочный план и достигнуть максимальных результатов в минимальные сроки.</p>	2019-01-26 00:18:23	2019-01-26 00:18:31	\N
167	19	1	500	FTP	45	0	ftp		\N	FTP - тест на определение функциональной пороговой мощности в Сайкл-Студии Ростова-на-Дону	\N	Узнать расписание на тренировку FTP в Ростове-на-Дону. Cycle-студия от фитнес-клуба Fitron.	<p>FTP (Functional Threshold Power) Тренировка - тест на определение функциональной пороговой мощности,  Functional Threshold Power (FTP). FTP помогает рассчитать максимально эффективную нагрузку с учетом вашей физической формы и потребностей. Вы научитесь работать в разных функциональных зонах (восстановление, выносливость, темп, взрывная сила).</p>	<p>FTP (Functional Threshold Power) Тренировка - тест на определение функциональной пороговой мощности,  Functional Threshold Power (FTP). FTP помогает рассчитать максимально эффективную нагрузку с учетом вашей физической формы и потребностей. Вы научитесь работать в разных функциональных зонах (восстановление, выносливость, темп, взрывная сила).<br />\r\nМы рекомендуем включать функциональное тестирование в график тренировок, как минимум, раз в полтора месяца, а лучше проходить его после каждых 30 тренировок. Это позволит при необходимости скорректировать индивидуальный тренировочный план и достигнуть максимальных результатов в минимальные сроки.</p>	2019-01-26 00:18:59	2019-01-26 00:18:59	t
168	19	1	500	CYCLE	0	0	cycle		\N	CYCLE занятие - узнать про тренировку в Сайкл-Студии Ростова-на-Дону	\N	Узнать расписание на тренировку Cycle в Ростове-на-Дону. Cycle-студия от фитнес-клуба Fitron.	\N	\N	2019-01-26 00:19:21	2019-01-26 00:19:21	t
169	19	1	500	WORLD TRIP	45	45	world-trip		\N	WORLD TRIP - тренировка в Сайкл-Студии Ростова-на-Дону	\N	Узнать расписание на тренировку WORLD TRIP в Ростове-на-Дону. Cycle-студия от фитнес-клуба Fitron.	<p>Интерактивное путешествие по всему миру.Интенсивность польностью зависит от видеоряда.Идеальное сочетание нагрузки и картинки на экране.</p>	<p>Интерактивное путешествие по всему миру.Интенсивность польностью зависит от видеоряда.Идеальное сочетание нагрузки и картинки на экране.</p>	2019-01-26 00:20:05	2019-01-26 00:20:05	t
7	3	2	560	Hard Core	30	\N	hard-core	/FTUploads/V2CYKlllA3MxJXj8g18VDs0fP1Py93HfNhSRG6mI.jpeg	\N	\N	\N	\N	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская программа  мышц стабилизаторов верхнего и нижнего кора.Незаменима для тех, кто хочет получить сильный пресс и тонкую талию. Развитые мышцы кора помогают вам во всем-это клей,который держит все наше тело!</p>	2018-07-23 08:35:21	2019-01-26 18:18:51	t
93	13	1	500	Pilates	55	0	pilates	/FTUploads/h4I6QPuvUq3Bpye7MhfXgak702BvpJ9gnGm0jykv.jpeg	\N	PILATES: тренировки по выгодной цене в фитнес – клубе FITRON	\N	PILATES в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на PILATES в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> тренировка по системе Джозефа Пилатеса.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание: </strong>Тренировка для тех, кто уже ориентируется в программе.Способствует повышению гибкости тела.Это уникальная возможность познать собственный организм. Пилатес борется со стрессом и помогает развить позитивное отношение к жизни.</p>	2019-01-25 23:08:21	2019-01-27 15:17:04	t
37	7	1	500	Ft calisthenics	0	55	ft-calisthenics		\N	FT CALISTHENICS: тренировки по выгодной цене в фитнес – клубе FITRON	\N	FT CALISTHENICS в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT CALISTHENICS в фитнес – клубе FITRON.	<p>Улучшение координации и баланса, укрепление суставов, легкость и простота выполнения, работа большенства мышечных групп, оздоровительный эффект.</p>	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> силовая работа ,без использования  оборудования, только с весом собственного тела.</p>	2019-01-24 18:22:58	2019-01-24 18:23:56	f
\.


--
-- Data for Name: type_cards; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.type_cards (id, name, price, sort, active, description, created_at, updated_at, code) FROM stdin;
8	Индивидуальные	\N	500	t	\N	\N	\N	card-individual
9	VIP	\N	500	t	\N	\N	\N	card-vip
10	COMFORT ( OFF PEAK )	\N	500	t	\N	\N	\N	card-comfort
11	TEEN	\N	500	t	\N	\N	\N	card-teen
12	KIDS	\N	500	t	\N	\N	\N	card-kids
13	Корпоративные	\N	500	t	\N	\N	\N	card-corporate
\.


--
-- Data for Name: type_trainers; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.type_trainers (id, name, code, seo_h1, seo_title, seo_keywords, seo_description, created_at, updated_at) FROM stdin;
1	Групповые и Водные программы	gruppovye-i-vodnye-programmy	\N	Тренеры групповых и водных программ в клубе Миллениум, Fitron	\N	Список тренеров групповых и водных программ клуба Fitron. Профессиональные тренеры в Миллениум.	\N	\N
2	Тренажерный зал	trenazernyj-zal	\N	Тренеры тренажерного зала в Фитроне, клуб Миллениум	\N	Персональные тренеры тренажерного зала фитнес-клуба Fitron. Профессиональные тренеры в Миллениум.	\N	\N
3	Детский клуб	detskij-klub	\N	Тренеры детского клуба в фитнес-клубе Миллениум, Fitron	\N	Список тренеров детского клуба Fitron. Детские тренеры в Миллениум.	\N	\N
\.


--
-- Data for Name: type_trainings; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.type_trainings (id, name, created_at, updated_at) FROM stdin;
4	Детские	\N	\N
1	Неопределен	\N	\N
3	Водные	\N	\N
2	Групповые	\N	\N
5	TEEN	\N	\N
\.


--
-- Data for Name: user; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev."user" (id, login, email, first_name, last_name) FROM stdin;
1	zvonlexa	zvon.lexa@yandex.ru	lexa	zvon
2	zvonarev	zvon@hotbox.ru	Алексей	Звонарев
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.users (id, login, email, phone, surname, name, lastname, password, remember_token, created_at, updated_at, active) FROM stdin;
3	snake	98999100@rambler.ru	79381109236	Савченко	Игорь	Леонидович	$2y$10$jKtELr4mrJFooGQvFArtXO/FiAlDmqdVMqlJ8C0dUUroysacEp1D2	cdVeVpfbFz0MOLK3ZneXnnfsrJQ0iTOem7NtX64mSohG4hahijUxehpk87T8	2018-10-01 14:48:11	2019-01-24 16:38:56	t
2	alexzvon	admin@example.com	71111111111	Звонарев	Алексей	Виктороыич	$2y$10$.Ytj73DTasV0HS/eLkAcme/S7Gd3cuQhi1HWpUa4JNQAaWsYDFyZ2	rJdW3SZNlLEKCFiJuNf3o5EuEqitkoffYMOq2y7OsleaB2aTynwY3QABiR6O	2018-10-01 11:19:49	2019-01-29 10:38:18	t
1	zvonlexa	zvon.lexa@yandex.ru	79525848858	Звонарев	Алексей	Викторович	$2y$10$0xPCLkrkA.Q2UKktnnfNY.bpaFfRApjK//vVDBS/Gor.1q02Um3Hu	fHKmXeY4o4e3ncqNkG6kixbuPLsSThLxlnI9orEYfnauPzYZpjb5JprUSTdJ	2018-07-06 10:54:22	2018-10-03 09:51:24	t
6	r_elena	digital@fitron.club	77952588099	Рягузова	Елена	-	$2y$10$72JvxuNuj6iIjskLTC82y.sgyJ8IRxvoMOoL811sjELK1W2pP9XsK	5y8IyX9YqQq9AqCbF1W56bBLjhfTd5U7H9heeMbm9dihQXI4X5FdG7Sqxz7p	2019-01-23 10:22:28	2019-01-28 13:07:10	t
\.


--
-- Data for Name: uslugis; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.uslugis (id, fitnes_id, code, preview, detail, name, duration, directivity, intensity, "сomplexity", description, created_at, updated_at) FROM stdin;
\.


--
-- Data for Name: years; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.years (id, name, created_at, updated_at, sort) FROM stdin;
2	3-4	\N	\N	500
6	17+	\N	\N	900
4	9-11	\N	\N	700
5	12-16	\N	\N	800
3	5-8	\N	\N	600
\.


--
-- Name: categories_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.categories_id_seq', 20, true);


--
-- Name: clubs_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.clubs_id_seq', 11, true);


--
-- Name: doings_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.doings_id_seq', 58, true);


--
-- Name: fitnes_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.fitnes_id_seq', 9, true);


--
-- Name: groups_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.groups_id_seq', 3, true);


--
-- Name: images_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.images_id_seq', 36, true);


--
-- Name: infrastructures_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.infrastructures_id_seq', 61, true);


--
-- Name: intensities_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.intensities_id_seq', 4, true);


--
-- Name: metas_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.metas_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.migrations_id_seq', 39, true);


--
-- Name: news_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.news_id_seq', 34, true);


--
-- Name: pages_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.pages_id_seq', 21, true);


--
-- Name: roles_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.roles_id_seq', 5, true);


--
-- Name: roles_users_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.roles_users_id_seq', 27, true);


--
-- Name: rooms_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.rooms_id_seq', 47, true);


--
-- Name: schedule_years_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.schedule_years_id_seq', 650, true);


--
-- Name: schedules_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.schedules_id_seq', 779, true);


--
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.sliders_id_seq', 14, true);


--
-- Name: special_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.special_id_seq', 23, true);


--
-- Name: trainers_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.trainers_id_seq', 104, true);


--
-- Name: training_years_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.training_years_id_seq', 106, true);


--
-- Name: trainings_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.trainings_id_seq', 169, true);


--
-- Name: type_cards_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.type_cards_id_seq', 13, true);


--
-- Name: type_trainers_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.type_trainers_id_seq', 3, true);


--
-- Name: type_trainings_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.type_trainings_id_seq', 5, true);


--
-- Name: user_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.user_id_seq', 2, true);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.users_id_seq', 7, true);


--
-- Name: uslugis_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.uslugis_id_seq', 1, false);


--
-- Name: years_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.years_id_seq', 6, true);


--
-- Name: categories categories_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.categories
    ADD CONSTRAINT categories_pkey PRIMARY KEY (id);


--
-- Name: clubs clubs_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.clubs
    ADD CONSTRAINT clubs_pkey PRIMARY KEY (id);


--
-- Name: doings doings_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.doings
    ADD CONSTRAINT doings_pkey PRIMARY KEY (id);


--
-- Name: fitnes fitnes_code_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.fitnes
    ADD CONSTRAINT fitnes_code_unique UNIQUE (code);


--
-- Name: fitnes fitnes_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.fitnes
    ADD CONSTRAINT fitnes_pkey PRIMARY KEY (id);


--
-- Name: groups groups_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.groups
    ADD CONSTRAINT groups_pkey PRIMARY KEY (id);


--
-- Name: images images_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.images
    ADD CONSTRAINT images_pkey PRIMARY KEY (id);


--
-- Name: infrastructures infrastructures_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.infrastructures
    ADD CONSTRAINT infrastructures_pkey PRIMARY KEY (id);


--
-- Name: intensities intensities_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.intensities
    ADD CONSTRAINT intensities_pkey PRIMARY KEY (id);


--
-- Name: metas metas_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.metas
    ADD CONSTRAINT metas_pkey PRIMARY KEY (id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: news news_code_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.news
    ADD CONSTRAINT news_code_unique UNIQUE (code);


--
-- Name: news news_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.news
    ADD CONSTRAINT news_pkey PRIMARY KEY (id);


--
-- Name: pages pages_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.pages
    ADD CONSTRAINT pages_pkey PRIMARY KEY (id);


--
-- Name: roles roles_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles
    ADD CONSTRAINT roles_pkey PRIMARY KEY (id);


--
-- Name: roles_users roles_users_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles_users
    ADD CONSTRAINT roles_users_pkey PRIMARY KEY (id);


--
-- Name: rooms rooms_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.rooms
    ADD CONSTRAINT rooms_pkey PRIMARY KEY (id);


--
-- Name: schedule_years schedule_years_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedule_years
    ADD CONSTRAINT schedule_years_pkey PRIMARY KEY (id);


--
-- Name: schedules schedules_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules
    ADD CONSTRAINT schedules_pkey PRIMARY KEY (id);


--
-- Name: sliders sliders_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.sliders
    ADD CONSTRAINT sliders_pkey PRIMARY KEY (id);


--
-- Name: special special_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.special
    ADD CONSTRAINT special_pkey PRIMARY KEY (id);


--
-- Name: trainers trainers_code_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainers
    ADD CONSTRAINT trainers_code_unique UNIQUE (code);


--
-- Name: trainers trainers_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainers
    ADD CONSTRAINT trainers_pkey PRIMARY KEY (id);


--
-- Name: training_years training_years_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.training_years
    ADD CONSTRAINT training_years_pkey PRIMARY KEY (id);


--
-- Name: trainings trainings_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainings
    ADD CONSTRAINT trainings_pkey PRIMARY KEY (id);


--
-- Name: type_cards type_cards_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_cards
    ADD CONSTRAINT type_cards_pkey PRIMARY KEY (id);


--
-- Name: type_trainers type_trainers_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_trainers
    ADD CONSTRAINT type_trainers_pkey PRIMARY KEY (id);


--
-- Name: type_trainings type_trainings_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.type_trainings
    ADD CONSTRAINT type_trainings_pkey PRIMARY KEY (id);


--
-- Name: user user_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev."user"
    ADD CONSTRAINT user_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_login_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.users
    ADD CONSTRAINT users_login_unique UNIQUE (login);


--
-- Name: users users_phone_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.users
    ADD CONSTRAINT users_phone_unique UNIQUE (phone);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: uslugis uslugis_code_unique; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.uslugis
    ADD CONSTRAINT uslugis_code_unique UNIQUE (code);


--
-- Name: uslugis uslugis_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.uslugis
    ADD CONSTRAINT uslugis_pkey PRIMARY KEY (id);


--
-- Name: years years_pkey; Type: CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.years
    ADD CONSTRAINT years_pkey PRIMARY KEY (id);


--
-- Name: categories_url_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX categories_url_uindex ON dev.categories USING btree (url);


--
-- Name: clubs_code_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX clubs_code_uindex ON dev.clubs USING btree (code);


--
-- Name: clubs_id_1c_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX clubs_id_1c_uindex ON dev.clubs USING btree (id_1c);


--
-- Name: password_resets_email_index; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE INDEX password_resets_email_index ON dev.password_resets USING btree (email);


--
-- Name: roles_title_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX roles_title_uindex ON dev.roles USING btree (title);


--
-- Name: rooms_id_1c_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX rooms_id_1c_uindex ON dev.rooms USING btree (id_1c);


--
-- Name: sliders_code_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX sliders_code_uindex ON dev.sliders USING btree (code);


--
-- Name: user_email_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX user_email_uindex ON dev."user" USING btree (email);


--
-- Name: user_login_uindex; Type: INDEX; Schema: dev; Owner: devfitron
--

CREATE UNIQUE INDEX user_login_uindex ON dev."user" USING btree (login);


--
-- Name: images images_slider_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.images
    ADD CONSTRAINT images_slider_id_foreign FOREIGN KEY (slider_id) REFERENCES dev.sliders(id);


--
-- Name: infrastructures infrastructures_club_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.infrastructures
    ADD CONSTRAINT infrastructures_club_id_foreign FOREIGN KEY (club_id) REFERENCES dev.clubs(id);


--
-- Name: metas metas_page_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.metas
    ADD CONSTRAINT metas_page_id_foreign FOREIGN KEY (page_id) REFERENCES dev.pages(id);


--
-- Name: roles_users roles_users_role_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles_users
    ADD CONSTRAINT roles_users_role_id_foreign FOREIGN KEY (role_id) REFERENCES dev.roles(id);


--
-- Name: roles_users roles_users_user_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.roles_users
    ADD CONSTRAINT roles_users_user_id_foreign FOREIGN KEY (user_id) REFERENCES dev.users(id);


--
-- Name: rooms rooms_clubs_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.rooms
    ADD CONSTRAINT rooms_clubs_id_foreign FOREIGN KEY (clubs_id) REFERENCES dev.clubs(id);


--
-- Name: schedule_years schedule_years_schedules_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedule_years
    ADD CONSTRAINT schedule_years_schedules_id_foreign FOREIGN KEY (schedules_id) REFERENCES dev.schedules(id);


--
-- Name: schedule_years schedule_years_years_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedule_years
    ADD CONSTRAINT schedule_years_years_id_foreign FOREIGN KEY (years_id) REFERENCES dev.years(id);


--
-- Name: schedules schedules_clubs_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules
    ADD CONSTRAINT schedules_clubs_id_foreign FOREIGN KEY (clubs_id) REFERENCES dev.clubs(id);


--
-- Name: schedules schedules_intensities_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules
    ADD CONSTRAINT schedules_intensities_id_foreign FOREIGN KEY (intensities_id) REFERENCES dev.intensities(id);


--
-- Name: schedules schedules_rooms_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules
    ADD CONSTRAINT schedules_rooms_id_foreign FOREIGN KEY (rooms_id) REFERENCES dev.rooms(id);


--
-- Name: schedules schedules_trainings_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.schedules
    ADD CONSTRAINT schedules_trainings_id_foreign FOREIGN KEY (trainings_id) REFERENCES dev.trainings(id);


--
-- Name: special special_type_cards_id_fk; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.special
    ADD CONSTRAINT special_type_cards_id_fk FOREIGN KEY (type_card_id) REFERENCES dev.type_cards(id);


--
-- Name: trainers trainers_clubs_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainers
    ADD CONSTRAINT trainers_clubs_id_foreign FOREIGN KEY (clubs_id) REFERENCES dev.clubs(id);


--
-- Name: trainers trainers_type_trainers_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainers
    ADD CONSTRAINT trainers_type_trainers_id_foreign FOREIGN KEY (type_trainers_id) REFERENCES dev.type_trainers(id);


--
-- Name: training_years training_years_training_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.training_years
    ADD CONSTRAINT training_years_training_id_foreign FOREIGN KEY (training_id) REFERENCES dev.trainings(id);


--
-- Name: training_years training_years_year_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.training_years
    ADD CONSTRAINT training_years_year_id_foreign FOREIGN KEY (year_id) REFERENCES dev.years(id);


--
-- Name: trainings trainings_category_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainings
    ADD CONSTRAINT trainings_category_id_foreign FOREIGN KEY (category_id) REFERENCES dev.categories(id);


--
-- Name: trainings trainings_type_training_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.trainings
    ADD CONSTRAINT trainings_type_training_id_foreign FOREIGN KEY (type_training_id) REFERENCES dev.type_trainings(id);


--
-- Name: uslugis uslugis_fitnes_id_foreign; Type: FK CONSTRAINT; Schema: dev; Owner: devfitron
--

ALTER TABLE ONLY dev.uslugis
    ADD CONSTRAINT uslugis_fitnes_id_foreign FOREIGN KEY (fitnes_id) REFERENCES dev.fitnes(id);


--
-- PostgreSQL database dump complete
--

