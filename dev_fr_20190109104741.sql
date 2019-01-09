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
    type_card_id integer
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
\.


--
-- Data for Name: clubs; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.clubs (id, name, address, phone, map_x, map_y, created_at, updated_at, code, iframe, market_image, id_1c) FROM stdin;
8	FITRON Газетный	ул. Красноармейская 170	+7 (863) 310-9571	47.226982999999997	39.7136530000000008	2018-07-25 13:24:22	2018-08-08 08:31:26	gazetnyi	\N	/FTUploads/PiNe6i9BGb7C543v8ZsshVJ7Wd9d8GZAx18dWF4J.png	\N
2	FITRON Милениум	пер. Соборный 94г	+7(863)310-95-71	47.2359030000000004	39.7051119999999997	\N	2018-08-08 08:31:54	millenium	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1354.5082713011345!2d39.7046103!3d47.2358223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xea4e11fe97821414!2zRklUUk9OINCc0LjQu9C70LXQvdC40YPQvA!5e0!3m2!1sru!2sru!4v1533651607176" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>	/FTUploads/R9mP4Nz9lb5n7qPoXEIOKDJi7BL3LmaQrO52dJSC.png	\N
10	Cycle-студия Cyclon	пер. Соборный 94г	+7 (863) 310-9570	47.2359030000000004	39.7051119999999997	2018-07-26 09:38:13	2018-08-08 08:32:15	cyclon	\N	/FTUploads/CwyfgdPbgrIxV2LgOq2arO9HPvOkrOjCVV390N5y.png	\N
5	FITRON Орбита	пр. Королёва 10/4	+7 (863) 310-9571	47.2942460000000011	39.7050399999999968	2018-07-12 14:40:29	2018-08-08 11:30:25	orbita	\N	/FTUploads/fK1Jh4CbDkZNiWr50vOdkhYkgynNWLKpgdRPIqab.png	\N
\.


--
-- Data for Name: doings; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.doings (id, sort, active, name, url, title, subtitle, image, start_date, end_date, created_at, updated_at, preview, description) FROM stdin;
5	400	t	Турнир по настольному теннису	turnir-po-nastolnomu-tennisu	FITRON Газетный	14 августа	/FTUploads/6nkNcBtgx4Kt1srVrike4ESYITJwzMVa13KmR33W.jpeg	\N	\N	2018-07-30 08:47:52	2018-07-30 14:53:48	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. </p>	<p>4 августа в 11:00 в FITRON Газетный состоится турнир по настольному теннису. Записаться на турнир можно у Божко Станислава: тел.: +7 (952)-575-37-93.</p>
7	500	t	В Fitron Орбита	v-fitron-orbita	Fitron Орбита	\N	/FTUploads/E0vKaqGxtcvYDMLk6V8AhELELIvac9QLJ58LlNuy.jpeg	\N	\N	2018-07-30 08:51:15	2018-07-30 10:49:11	<p>Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. </p>	<p>Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. Вода из бассейна вытесняется в специальные окна в бортиках, очищается в системе механической очистки и подогревается. Для дезинфекции мы используем обеззараживающие агенты и ультрафиолетовое излучение. Очистка воздуха осуществляется с помощью системы вентиляции Breezart Pool Pro. Она закачивает воздух с улицы, нагревает или охлаждает его, удаляет загрязнения и лишнюю влагу. А ещё мы построили хамам в зоне бассейна, чтобы вы могли расслабиться после тренировок.</p>
6	500	t	Открытие фитнес-бара Proton	otkrytie-fitnes-bara-proton	Открытие фитнес-бара Proton в Fitron Миллениум	\N	/FTUploads/YrNJKz9muJPQZzaWWk2Qszlftg2SxU8JN3jfNgZT.jpeg	\N	\N	2018-07-30 08:49:43	2018-07-30 10:49:34	<p>В Fitron Миллениум открылся бар спортивного питания Proton.</p>	<p>В Fitron Миллениум открылся бар спортивного питания Proton. В нем есть вкусный кофе, полезные фреши, качественное спортивное питание — всё что нужно, чтобы подкрепиться до или после тренировки.</p>
8	500	t	Поздравляем!	pozdravlaem	Поздравляем с победой!	\N	/FTUploads/u62swdYMsepkL512c0touP3RbvA5it7Zd6Q4g59N.jpeg	\N	\N	2018-07-30 08:52:49	2018-07-30 10:49:44	<p>Клиент Fitron Орбита Шифанов Андрей занял первое место в Чемпионате Европы по пауэрлифтингу и силовым видам спорта.</p>	<p>Клиент Fitron Орбита Шифанов Андрей занял первое место в Чемпионате Европы по пауэрлифтингу и силовым видам спорта. Состязание проходило в г. Сочи в рамках международного спортивного фестиваля "Олимпия - V". Теперь Андрей мастер спорта международного класса в категории жим лёжа.</p>
4	500	t	Лекция Елены Ярововой	lekcia-eleny-arovovoj	Лекция Елены Ярововой	12 июня	/FTUploads/RSe3tykyaqeXbwoVywJq7EObzG9hWhRpxmOGKk8e.jpeg	2018-09-17 00:00:00	2018-09-29 00:00:00	2018-07-30 08:44:44	2018-09-07 13:32:33	<p>1 июля в Fitron Миллениум состоялась лекция Елены Ярововой — лицензированного практикующего врача, эндокринолога, диетолога, кандидата медицинских наук. Тема лекции — "Здоровый ужин как способ похудеть!". </p>	<p>1 июля в Fitron Миллениум состоялась лекция Елены Ярововой — лицензированного практикующего врача, эндокринолога, диетолога, кандидата медицинских наук. Тема лекции — "Здоровый ужин как способ похудеть!". Основные вопросы, которые Елена обсудила с аудиторией:</p>\r\n\r\n<p>- каким должен быть правильный ужин</p>\r\n\r\n<p>- можно ли есть после 18.00</p>\r\n\r\n<p>- что нужно есть, чтобы снизить вес</p>\r\n\r\n<p>- каким должен быть правильный ужин.</p>
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
15	11	/FTUploads/bIdLSWIlqdKjBy5xOa4zOb9takv7FWhEyZz5qQXY.jpeg	ляля	жужужу	По секрету всему свету	2018-08-08 09:41:01	2018-11-23 06:55:30	t	500	2018-11-19 00:00:00	2018-11-30 00:00:00
8	11	/FTUploads/cMSy9b4FAhjN266tUkH4yvvaN44rrFwdV6147nXb.jpeg	ggdf	erere	fgbfgdf	2018-07-19 07:26:09	2018-11-23 06:56:11	t	100	2018-11-19 00:00:00	2018-11-30 00:00:00
9	11	/FTUploads/xiOW4aDaRbyKQvEHweIkLun7X2vlgFMmOBl8dbJm.jpeg	iuyuiuyiyu	kjhkhjk	test	2018-07-19 07:27:17	2018-12-19 16:42:17	t	200	\N	\N
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
16	2	500	t	/FTUploads/idySafAByqooGs8rXzCGulE3dThS8A18dOYVHlJ3.png		2018-08-02 11:01:24	2018-08-02 11:01:24
17	2	510	t	/FTUploads/xvNapHGKMaNRMTxGNv51RDn1XLFufAemwKE4fkI7.png		2018-08-02 11:01:44	2018-08-02 11:01:44
18	2	520	t	/FTUploads/1qNtLlX8mYI0J5mGouVE175Lc0tcjK5fT9RmKwwM.png		2018-08-02 11:02:03	2018-08-02 11:02:03
19	2	530	t	/FTUploads/IWu7lv9Ae53EZ9SOUxDw5EW1taBcbmPBMIinDA8W.png		2018-08-02 11:02:22	2018-08-02 11:02:22
20	2	540	t	/FTUploads/JmuzQjPyYx4wscz2oyErMf2fchdCKa7wdRZwZod4.png		2018-08-02 11:02:38	2018-08-02 11:02:38
21	2	550	t	/FTUploads/5xiQrIoKm15YzayY4a7xXTc0VyjyCASMRUGmHjmq.png		2018-08-02 11:03:08	2018-08-02 11:03:08
22	2	560	t	/FTUploads/BmM7CUW9cUERvDIZF0GkQ4dh6nqYyN4oMEo7hVAI.png		2018-08-02 11:03:23	2018-08-02 11:03:23
23	2	570	t	/FTUploads/7lilKTs0Bj4yNyPrHE3JI69V9OIz4HbdH4KIBTqc.png		2018-08-02 11:03:39	2018-08-02 11:03:39
24	10	500	t	/FTUploads/PzedbJvyX68vgzbSwH6C82YTW5dnUs1LBxoVUweE.jpeg		2018-08-02 12:26:02	2018-08-02 12:26:02
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
33	t	810	bassejn-fitron-orbita-otkryt	Бассейн Fitron Орбита открыт	2018-07-11 00:00:00	\N	\N	\N	\N	<p style="text-align:center"><span style="font-family:Arial,Helvetica,sans-serif">sdgfsdfsdfsdfs</span></p>	<p><img src="https://fitron.club/uploads/news/tvvkfbfitronpool-opening1076576-6f90c585c3.jpg" />Долгожданный бассейн Fitron Орбита открыт. Длина его чаши 20 м, глубина переменная от 1.2 до 1.8м. В бассейне 5 дорожек. Вода из бассейна вытесняется в специальные окна в бортиках, очищается в системе механической очистки и подогревается. Для дезинфекции мы используем обеззараживающие агенты и ультрафиолетовое излучение. Очистка воздуха осуществляется с помощью системы вентиляции Breezart Pool Pro. Она закачивает воздух с улицы, нагревает или охлаждает его, удаляет загрязнения и лишнюю влагу. А ещё мы построили хамам в зоне бассейна, чтобы вы могли расслабиться после тренировок.</p>	2018-08-07 08:38:55	2018-09-24 10:06:10
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
2	3	3
8	1	2
10	2	3
\.


--
-- Data for Name: rooms; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.rooms (id, clubs_id, active, name, created_at, updated_at, id_1c) FROM stdin;
7	10	t	Cycle-студия Cyclon	2018-08-16 09:34:26	2018-08-16 09:34:26	\N
8	2	t	Бассейн	2018-08-16 09:35:39	2018-08-16 09:35:39	\N
9	2	t	Cycle Zone	2018-08-16 09:35:50	2018-08-16 09:35:50	\N
10	2	t	Group Hall	2018-08-16 09:35:59	2018-08-16 09:35:59	\N
11	2	t	Group Zone	2018-08-16 09:36:09	2018-08-16 09:36:09	\N
12	2	t	Fight Zone	2018-08-16 09:36:26	2018-08-16 09:36:26	\N
13	2	t	Зона ТЗ	2018-08-16 09:36:35	2018-08-16 09:36:35	\N
14	2	t	Зона ДИ	2018-08-16 09:36:44	2018-08-16 09:36:44	\N
15	2	t	Kids club	2018-08-16 09:36:54	2018-08-16 09:36:54	\N
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

COPY dev.special (id, name, description, price_1, price_2, start_active, end_active, active, created_at, updated_at, rassrochka, type_card_id) FROM stdin;
18	12 Месяцев<br>активного фитнеса -	\N	6547	4567	2018-11-19 00:00:00	2018-12-31 00:00:00	t	2018-11-23 14:29:33	2018-12-20 09:41:43	f	8
20	Карта 1	Описание 1	4785	\N	2018-11-19 00:00:00	2018-12-31 00:00:00	t	2018-11-23 14:32:00	2018-12-20 09:42:29	t	8
21	Карта 2	Описание 32	9578	\N	2018-11-19 00:00:00	2018-12-31 00:00:00	t	2018-11-23 14:32:33	2018-12-20 09:42:38	t	8
19	Black Friday	Мгновенная распродажа!<br>Лови момент	1235	2547	2018-11-19 00:00:00	2018-12-31 00:00:00	t	2018-11-23 14:31:04	2018-12-20 09:42:46	f	8
\.


--
-- Data for Name: trainers; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.trainers (id, type_trainers_id, clubs_id, name, code, picture, image, youtube, seo_h1, seo_title, seo_keywords, seo_description, description, created_at, updated_at, active) FROM stdin;
8	1	2	Рузанова Юлия	YYtICDPcyvo	/FTUploads/kJcsHXuPTfdYa679ZdH7Oh1q4G8XnF7qTFNvX5Qv.jpeg	/FTUploads/y0av6X94YC6nqaTwj10EzWBChm7l7gWUzX8UOgcr.jpeg	\N	\N	Рузанова Юлия - фитнес инструктор групповых и водных программ клуба FITRON	\N	\N	\N	2018-08-14 13:34:10	2018-08-14 13:34:10	t
9	1	2	Софья Толстая	sofa-tolstaa	/FTUploads/cBLOUGz5vAFxoQXUrI7geEyW16zENC6t4rSNktFD.jpeg	/FTUploads/tMieglVoJ1JJGXSl9Qbqt3REnd00uzTneKSsvQOq.jpeg	Vf3mejJIax4	\N	\N	\N	\N	\N	2018-08-14 13:35:44	2018-08-14 13:35:44	t
10	2	2	Новик Евгений	novik-evgenij	/FTUploads/locSZ3duKMGGjMgscFtYLNQhB1v3mAlSLItzksxK.jpeg	/FTUploads/4c6dLvW612jpsik5zPlR7rCHZqO0XM4K0uAePM1i.jpeg	43l6MaPEiZc	\N	\N	\N	\N	\N	2018-08-14 13:37:40	2018-08-14 13:37:40	t
11	2	2	Цыганок Николай	cyganok-nikolaj	/FTUploads/gtpoEkpAVPzqhmqNCjnwqH7nnfzMIYrfZmYoomYH.jpeg	/FTUploads/I5MuQe4QpQVKHMlJjHu7HNk5d2ZLkyoUiHOdrD8D.jpeg	bIoQKIu1IKk	\N	\N	\N	\N	\N	2018-08-14 13:39:10	2018-08-14 13:39:10	t
13	3	2	Ерёмина Марина	eremina-marina	/FTUploads/9pUXcZYsPcrLU3cSDdciXVrOYhQ3TTjBaVfIhqNn.jpeg	/FTUploads/L4WvYpGUxnFguXQlwl1mCV3jnLNyhFhXU5pWTwcD.jpeg	dE3Dppl_GAk	\N	Ерёмина Марина - супервайзер детского клуба FITRON	\N	\N	\N	2018-08-14 13:42:37	2018-08-14 13:42:37	t
14	3	2	Михайлова Анастасия	mihajlova-anastasia	/FTUploads/6TILBrNDnBrmK7jPh50GHrpdSuADbB0DabY6ZYqc.jpeg	/FTUploads/96JWjzBaRIFUTLmRpUvPhUl9r0UDzdnsjv64J5cp.jpeg	lLw5mVyXs7I	\N	Михайлова Анастасия - тренер детского клуба FITRON	\N	\N	\N	2018-08-14 13:44:14	2018-08-14 13:44:14	t
15	3	2	Миронова Юлия	mironova-ulia	/FTUploads/XK41WchzVmKNBjFz4TcK4lDvDvxO6TxsoiLsdm9t.jpeg	/FTUploads/JRPYizgHn0PBzuwTiONeH9bbMDbrzgYbgE9jp7H4.jpeg	_F3pFaoJ7oI	\N	Миронова Юлия - тренер детского клуба FITRON	\N	\N	\N	2018-08-14 13:45:42	2018-08-14 13:45:42	t
12	2	2	Ханин Дмитрий	hanin-dmitrij	/FTUploads/WJftSMgcCupEv54HOwPIT6I6d56d5cfZX6hBCw91.jpeg	/FTUploads/e1bwYSTOe9Uiw7kVtKwj0U5RxFWeTD5P8T5wdZUz.jpeg	iSDE-yzz1PM	\N	\N	\N	\N	\N	2018-08-14 13:40:49	2018-08-15 08:50:20	t
6	1	2	Кличева Леся	klicheva-lesa	/FTUploads/6BTu5RxfErJF1uQJfzK40Le4duLWjtgT3y35IayO.jpeg	/FTUploads/Ut6UGpFSjjtf34T6esyQqO7A13N2iSPtDRDhWMPw.jpeg	AeGGBrMo-Sw	\N	Кличева Леся - супервайзер групповых и водных программ клуба FITRON	\N	\N	<p><strong>Фитнес-инструктор групповых программ. Мультитренер.</strong></p>\r\n\r\n<p><em>Высшее спортивное образование - ЮФУ АФКиС.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>направления  MIND BODY</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональный тренинг</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:29:26	2018-11-22 12:19:05	t
7	1	2	Кошелев Алексей	G_AO5DUVpAI	/FTUploads/l40Bsq0oYwWrtiriBiykTHxcjAeysws1Icsjkyj4.jpeg	/FTUploads/x8GVDeXSSPY56qa2SO2Yl2lXQyagGGB6sortzO0z.jpeg	G_AO5DUVpAI	\N	Берман Мария - фитнес инструктор групповых и водных программ клуба FITRON	\N	\N	<p><strong>Фитнес-инструктор групповых программ. Мультитренер.</strong></p>\r\n\r\n<p><em>Высшее спортивное образование - ЮФУ АФКиС.</em></p>\r\n\r\n<p><em>–</em></p>\r\n\r\n<p>Опыт работы в компании с 2017 года.</p>\r\n\r\n<p><strong>Фитнес специализация:</strong></p>\r\n\r\n<ul>\r\n\t<li>\r\n\t<p>водные программы</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>силовой тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>функциональный тренинг</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>направления  MIND BODY</p>\r\n\t</li>\r\n\t<li>\r\n\t<p>персональный тренинг</p>\r\n\t</li>\r\n</ul>	2018-08-14 13:32:32	2018-11-22 12:50:04	t
\.


--
-- Data for Name: training_years; Type: TABLE DATA; Schema: dev; Owner: devfitron
--

COPY dev.training_years (id, training_id, year_id, created_at, updated_at) FROM stdin;
9	21	6	2018-09-11 06:31:28	2018-09-11 06:31:28
10	24	3	2018-09-11 06:43:42	2018-09-11 06:43:42
11	29	2	2018-09-11 07:54:43	2018-09-11 07:54:43
12	30	2	2018-09-11 07:59:50	2018-09-11 07:59:50
13	31	2	2018-09-11 08:02:58	2018-09-11 08:02:58
14	32	3	2018-09-11 08:07:51	2018-09-11 08:07:51
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
12	7	1	560	FT challenge friends	55	55	ft-challenge-friends		\N	FT CHALLENGE FRIENDS: тренировки по выгодной цене в фитнес – клубе FITRON	\N	FT CHALLENGE FRIENDS в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT CHALLENGE FRIENDS в фитнес – клубе FITRON.	\N	\N	2018-07-31 12:56:10	2018-07-31 12:56:10	t
9	7	1	500	FT TRX	55	\N	ft-trx	/FTUploads/OTFFnFuDXq9cX5IOlKSOVsoL7gqIN2mr3KfNSM23.jpeg	\N	TRX тренировка: групповые силовые и функциональные тренировки на петлях trx в фитнес-клубе Фитрон	\N	Групповая силовая тренировка на петлях TRX. Групповая тренировка для спортсменов любого уровня подготовки. Записаться на тренировку онлайн в фитнес-клуб Fitron.	\N	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> функциональная тренировка с использованием специального оборудования ремней TRX.</p>	2018-07-31 11:22:27	2018-10-04 16:39:34	t
7	3	2	560	Hard Core	30	\N	hard-core	/FTUploads/V2CYKlllA3MxJXj8g18VDs0fP1Py93HfNhSRG6mI.jpeg	\N	\N	\N	\N	\N	<p><strong>Направленность:</strong> силовая программа.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Авторская программа  мышц стабилизаторов верхнего и нижнего кора.Незаменима для тех, кто хочет получить сильный пресс и тонкую талию. Развитые мышцы кора помогают вам во всем-это клей,который держит все наше тело!</p>	2018-07-23 08:35:21	2018-09-11 08:17:54	t
10	7	1	520	FT INTERVAL	45	\N	ft-interval	/FTUploads/gUOv5UdanIIauMSHYsraqsTOi7NqQDQgiTvld0aS.jpeg	\N	Интервальная тренировка для сжигания жира: цены на interval training в фитнес-клубе Фитрон	\N	FT INTERVAL в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на FT INTERVAL в фитнес – клубе FITRON.	<p style="color:#3498db">Тренировка с  использованием дополнительного оборудования,работа с весом собственного тела,интенсивная тренировка,направленная на проработку основных мышечных групп мышц и развитие силовой выносливости.Способствует снижению веса.</p>	<p><strong>Направленность:</strong> функциональная тренировка.</p>\r\n\r\n<p><strong>Интенсивность:</strong> от среднего до высокого.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Функциональная тренировка направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений с заданным количеством повторений и с фиксированным отдыхом между подходами. Позволяет достигать комплексного развития физических способностей и успешно содействует повышению общей работоспособности организма.</p>	2018-07-31 11:24:26	2018-10-04 16:50:27	t
13	7	1	580	FT INTERVAL Friends	45	45	ft-interval-friends		\N	\N	\N	\N	\N	<p>Функциональная тренировка направленная на развитие всех мышечных групп, путем последовательного выполнения упражнений с заданным количеством повторений и с фиксированным отдыхом между подходами. Позволяет достигать комплексного развития физических способностей и успешно содействует повышению общей работоспособности организма. </p>	2018-07-31 13:00:41	2018-07-31 13:00:59	t
14	7	1	600	COSMO SCULPT	\N	\N	cosmo-sculpt		\N	\N	\N	\N	\N	\N	2018-07-31 13:01:45	2018-07-31 13:02:01	t
21	13	1	500	YOGA Iyengar	90	90	yoga-iyengar	/FTUploads/MXmo0cEZmWgaIJJ0GON07Xar4n0rzjv0oPZys1sR.jpeg	\N	YOGA IYENGAR: тренировки по выгодной цене в фитнес – клубе FITRON	\N	YOGA IYENGAR  в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на YOGA IYENGAR в фитнес – клубе FITRON.	\N	<p>Серия «асан», связанных между собой динамическими движениями, в ритме определенного дыхания, и концентрацией внимания на точках. Поступательное движение к гармонии тела и ума через равномерное неагрессивное вытяжение одних частей тела и расслабление других; управление дыханием.</p>	2018-09-11 06:31:28	2018-09-11 06:31:28	t
22	13	1	500	Йога	90	120	yoga	/FTUploads/HFXo6KnTiKhV3wL35iHElKaumquIvkJ2bJyVGgB8.jpeg	Йога	Йога для начинающих: цены на тренировки по йоге для похудения в Ростове, фитнес-клуб Фитрон	\N	Йога в Ростове-на-Дону – индивидуальные и групповые тренировки по эффективным программам. Цены на Йога в фитнес – клубе FITRON.	\N	<p>Йога — комплекс упражнений, который помогает улучшить растяжку, снять мышечное напряжение, очистить разум от негативных эмоций и навязчивых мыслей. Она позволяет быстро успокоиться, обрести душевное равновесие и гармонию во всех областях жизни. Несмотря на убежденность многих, это фитнес-направление не вероисповедание или навязываемая религия, а своеобразная философия здорового образа жизни.</p>\r\n\r\n<p>Профессионально подобранная программа в спортивном центре «Фитрон» в Ростове-на-Дону обеспечивает эффективную физическую нагрузку в спокойном размеренном темпе, где особое внимание уделяется дыханию. Йога поможет Вам улучшить подвижность суставов, выпрямить осанку и устранить боли в спине, сделать фигуру стройной. А в качестве бонуса настроение будет радостным и умиротворенным.</p>\r\n\r\n<h2>Занятия йогой для начинающих</h2>\r\n\r\n<p>Инструктор — это опытный практик, который поможет новичку быстро и с легкостью, а главное правильно, освоить специальные упражнения по йоге, называющиеся асанами. Большое значение имеет точное повторение позиций, всех движений и спокойное, без задержек, дыхание. Чтобы занятие приносило максимальную пользу, начинать заниматься йогой нужно с самых основ и легких асан, и только достигнув в них совершенства, переходить к более сложным позициям.</p>\r\n\r\n<p>Профессиональный тренер клуба «Фитрон» поможет дисциплинировать себя, нацелиться на результат, постепенно освоить все тонкости этого фитнес-направления и подобрать индивидуальную программу для улучшения самочувствия и здоровья. Быстро заметить положительные изменения позволят ежедневные занятия. Но для начинающих достаточной нагрузкой будет и 2-3 раза в неделю. Тренер по йоге строит урок в определенной последовательности. Сначала идет разминка для разогрева мышц, потом комплекс упражнений, а завершается занятие обычно позой покоя — шавасаной, в которой все тело расслабляется на протяжении 10-15 минут, а мозг получает своеобразную перезагрузку.</p>\r\n\r\n<p>Асаны просты лишь на первый взгляд, выполняя их неправильно можно получить травму или не достичь желаемого результата. Профессионал поможет извлечь максимальную пользу от занятий. Чтобы записаться, Вы можете посмотреть расписание на сайте или получить консультацию у менеджера клуба по телефону или в режиме онлайн. Стоимость клубной карты выгоднее, чем выбор одного занятия, а регулярные тренировки — полезнее для здоровья. За доступную цену Вы получаете полный доступ на любые тренировки клуба в удобное для вас время.</p>\r\n\r\n<h2>Йога для похудения</h2>\r\n\r\n<p>Похудение с помощью йоги возможно благодаря нескольким факторам. Во-первых, занятия обеспечивают достаточную нагрузку на разные группы мышц, благодаря чему сжигаются лишние калории. Во-вторых, йога ускоряет обмен веществ, как следствие — уходят жировые отложения с боков и живота, мышцы обретают красивый и выраженный рельеф, ягодицы и ноги становятся подтянутыми, женщина ощущает себя более гибкой и пластичной. В-третьих, регулярные тренировки излечивают от пагубной тяги к вредной еде, позволяют наладить правильный рацион питания.</p>\r\n\r\n<p>Польза методики также выражается в стимуляции пищеварения и очищении почек, печени. Здоровое функционирование желудочно-кишечного тракта помогает успешно снизить вес, а также чувствовать себя бодрее и легче каждый день.</p>\r\n\r\n<h2>Преимущества и особенности тренировок</h2>\r\n\r\n<p>Йога — эффективная и проверенная столетиями практика, которая одновременно позитивно действует на физическое тело, мысли и эмоции человека. Она помогает обрести равновесие, выносливость, почувствовать прилив сил и радость. Преимущество занятий раскрывается во многих факторах:</p>\r\n\r\n<ul>\r\n\t<li>лечение болей в спине, отложений солей, искривлений позвоночника;</li>\r\n\t<li>замедление процессов старения;</li>\r\n\t<li>улучшение гибкости суставов и физических возможностей мышц всего тела;</li>\r\n\t<li>помощь в борьбе с астмой, бессонницей, болями, артритами и послеродовой депрессией;</li>\r\n\t<li>укрепление иммунитета и очищение кишечника;</li>\r\n\t<li>насыщение внутренних органов дополнительным кислородом, благодаря которому они работают более эффективно;</li>\r\n\t<li>нормализация давления;</li>\r\n\t<li>улучшение внешнего вида кожи.</li>\r\n</ul>	2018-09-11 06:35:44	2018-09-11 06:35:44	t
24	14	1	500	Спутники	40	0	sputniki	/FTUploads/gZe8DVK7n3ab6r56d9E7jsSYhfQ587ivvAhoRfbt.jpeg	\N	СПУТНИКИ - записаться на водные программы в фитнес-клубе FITRON в Ростове-на-Дону	\N	СПУТНИКИ - выгодные цены на индивидуальные и групповые программы в бассейне. Фитнес для похудения в клубе FITRON.	\N	<p><strong>Интенсивность: </strong>Средняя</p>\r\n\r\n<p><strong>Сложность:</strong> Для начального уровня подготовленности</p>\r\n\r\n<p><strong>Описание:</strong> Программа направлена на обучение плаванию,начальных навыков и совершенствование техники плавательных движений.В уроке используются эстафеты,игры ,задания в воде. Все это поможет вашему ребенку быть сильным, ловким и здоровым.</p>	2018-09-11 06:43:42	2018-09-11 06:43:42	t
28	3	1	600	COSMO PUMP FRIENDS	\N	\N	cosmo-pump-friends		\N	\N	\N	\N	\N	\N	2018-09-11 07:42:59	2018-09-11 07:47:04	t
29	15	1	500	Космическая зарядка	30	\N	kosmiceskaa-zaradka	/FTUploads/7Orjqu9cmQ41qxCtkb2miHQCp1uWM4k8Mj6H6jcN.jpeg	\N	КОСМИЧЕСКАЯ ЗАРЯДКА: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	КОСМИЧЕСКАЯ ЗАРЯДКА - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON	\N	<p><strong>Направленность:</strong> игровая, общеразвивающая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Развитие  основных видов двигательных качеств. На этом уроке ждет ребят:  сказочное путешествие, веселые игры, танцы и все самое интересное.</p>	2018-09-11 07:54:43	2018-09-11 07:54:43	t
30	15	1	500	Луноходы	30	\N	lunohody	/FTUploads/34p3jE9hQ8MsVFhHRoF8VVnd8dbe9AW8VpRlBNWI.jpeg	\N	ЛУНОХОДЫ: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	ЛУНОХОДЫ - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> прфилактика плоскостопия.</p>\r\n\r\n<p><strong>Интенсивность:</strong> низкая.</p>\r\n\r\n<p><strong>Сложность:</strong> для любого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Урок направлен  на укрепление мышц стопы и голени, включены упражнения для формирования свода стопы и голени.Профилактика обеспечит ребенку  здоровые стопы и уменьшит риск заболевания плоскостопия.</p>	2018-09-11 07:59:50	2018-09-11 07:59:50	t
31	14	1	500	КОМЕТЫ	30	30	komety		\N	\N	\N	\N	\N	\N	2018-09-11 08:02:58	2018-09-11 08:02:58	t
32	15	1	500	Хоп-хоп	45	0	hop-hop	/FTUploads/nXtNq5SRlQdIOPwV7Rjgdsg7RyVx8KkaYYL8fYXm.jpeg	\N	ХИП-ХОП: записать ребенка на спортивные детские тренировки в Ростове-на-Дону, цены в FITRON	\N	ХИП-ХОП - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	\N	<p><strong>Направленность:</strong> игровая - силовая.</p>\r\n\r\n<p><strong>Интенсивность:</strong> средняя.</p>\r\n\r\n<p><strong>Сложность:</strong> для среднего и продвинутого уровня подготовленности.</p>\r\n\r\n<p><strong>Описание:</strong> Динамичный урок, с использованием специальных мячей большого размера, включающий элементы эстафет,подвижных игр, развивает координацию движения, быстроту и  выносливость  ребенка.</p>	2018-09-11 08:07:51	2018-09-11 08:07:51	t
34	13	1	500	OUTDOOR (COSMO BALANCE)	60	0	outdoor-cosmo-balance		\N	\N	\N	\N	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	<p>Оздоровительная тренировка на свежем воздухе, укрепляющая имунную систему. Развивает гибкость и увеличивает подвижность в суставах, улучшает осанку позволяет почувствовать гармонию души и тела.</p>	2018-09-11 08:20:50	2018-09-11 08:20:50	t
35	12	1	500	Бокс	55	0	boxing	/FTUploads/63qKeaEzAyYOhrte7HQarGiwbhjndFqFnRr2EZQN.jpeg	Бокс	Тренировки по боксу: записаться на занятия боксом по выгодной цене в фитнес-клубе FITRON	\N	Бокс в Ростове-на-Дону – индивидуальные и групповые тренировки по боевому искусству. Цены на Бокс в фитнес – клубе FITRON.	<p>Бокс — один из видов боевых единоборств, который позволяет изучить основные приемы самозащиты от внезапных нападений, а также физически стать более сильным и выносливым. Целью обучения становится проведение контактных боев между противниками с выполнением ударов в голову и верхнюю часть тела. Благодаря освоению всех тонкостей этого боевого искусства спортсмен становится более собранным и организованным, обретает уверенность в себе, учится быстро реагировать и принимать решения.</p>	<p>Бокс — один из видов боевых единоборств, который позволяет изучить основные приемы самозащиты от внезапных нападений, а также физически стать более сильным и выносливым. Целью обучения становится проведение контактных боев между противниками с выполнением ударов в голову и верхнюю часть тела. Благодаря освоению всех тонкостей этого боевого искусства спортсмен становится более собранным и организованным, обретает уверенность в себе, учится быстро реагировать и принимать решения.</p>\r\n\r\n<p>Тренировки в спортивном клубе «Фитрон» проводят опытные специалисты. Для каждого клиента составляется персональная программа обучения с учетом имеющихся навыков и физической подготовки. Благодаря комплексному подходу каждый урок по боксу становится отличным высокоинтенсивным тренингом духа и тела. Хорошо прорабатываются все мышцы тела, развивается сила рук, улучшаются гибкость, выносливость, ловкость и координация. Занятия позволяют быстро избавиться от негатива и стресса.</p>\r\n\r\n<h2>Техническая подготовка к боксу</h2>\r\n\r\n<p>Начальным этапом обучения всегда становится изучение техники боя и правильного дыхания. Тренер показывает простейшие принципы перемещения рук, ног и корпуса, а также основные движения. Изучение азов позволяет быстро освоиться начинающим спортсменам, а также девушкам. После этого профессионал помогает научиться работать в различных стойках, защитной позиции, безукоризненно наносить удары и перемещаться, рационально расходовать свои силы.</p>\r\n\r\n<p>Когда будут изучены базовые движения, начинается оттачивание техники на различных боксерских снарядах: грушах, мешках, лапах. Оно помогает сформировать твердость ударных костей, увеличить скорость и точность ударов, обрести выразительность движений для экстремальных условий спортивной борьбы.</p>\r\n\r\n<h2>Специальные тренировки по боксу</h2>\r\n\r\n<p>Помимо технической стороны обучения боксера, особое значение имеет силовая, тактическая и психологическая подготовка. Среди основных специальных упражнений на силу: выбросы грифа перед собой, тренинг с набивными мячами, проработка пресса, шеи и ног динамическими движениями.</p>\r\n\r\n<p>Тактическая подготовка направлена на использование сильнейших качеств конкретного спортсмена. Учитываются физиологические особенности, сила удара, скорость передвижения, способности к быстрой реакции, стойкость, вес и т.д. Для оттачивания и улучшения тактики, наработки боевого опыта, а также устойчивости к стрессовым ситуациям, проводятся бои с соперниками.</p>\r\n\r\n<h2>Преимущества тренировок в фитнес-клубе «Фитрон»</h2>\r\n\r\n<p>Для начинающих спортсменов доступны эффективные занятия с персональным тренером, который будет контролировать правильность выполнения всех технических элементов, а также регулярно корректировать нагрузку на организм. Для более опытных клиентов рекомендуются групповые тренировки, на которых можно провести бои с различными противниками. Для женщин обеспечиваются максимально комфортные условия обучения. Среди основных плюсов посещения тренировок в фитнес-клубе «Фитрон» можно выделить:</p>\r\n\r\n<ul>\r\n\t<li>внимательное отношение и индивидуальный подход к каждому клиенту;</li>\r\n\t<li>лояльные цены на все виды услуг;</li>\r\n\t<li>применение самых эффективных и перспективных обучающих и тренировочных программ, популярных по всему миру, или авторских методик от тренеров клуба;</li>\r\n\t<li>просторные раздевалки и комфортабельные душевые комнаты;</li>\r\n\t<li>удобное расписание занятий для взрослых и детей;</li>\r\n\t<li>профессиональный тренерский штат, который обладает обширными теоретическими и практическими навыками.</li>\r\n</ul>\r\n\r\n<p>После занятия клиенты клуба «Фитрон» в Ростове-на-Дону могут дополнительно посетить сауну, бассейн или душ, сходить на массаж. Клубная карта гарантирует выгодную стоимость посещений, может включать дополнительные бесплатные услуги, скидки, возможность использования специально выделенными раздевалками и многое другое.</p>	2018-09-11 08:46:42	2018-09-11 08:46:42	t
36	15	1	500	БОКС	55	0	box	/FTUploads/wv5RqFcrLsCkoR6DNkF5yZZywj5CXcLqVRghK3b7.jpeg	\N	Бокс для детей - записать ребенка на детский бокс в Ростове-на-Дону, цены в FITRON	\N	БОКС  - детские программы в Ростове-на-Дону – индивидуальные и групповые тренировки. Цены на программы для ребенка в фитнес – клубе FITRON.	<p>Тренировки по боксу в первую очередь помогают развитию<br />\r\nкоординации движений, тренируют вестибулярный аппарат, учат владеть телом, вниманию, сосредоточенности. Кроме того — это хорошая физическая нагрузка на все группы мышц.</p>	<p>Тренировки по боксу в первую очередь помогают развитию<br />\r\nкоординации движений, тренируют вестибулярный аппарат, учат владеть телом, вниманию, сосредоточенности. Кроме того — это хорошая физическая нагрузка на все группы мышц.</p>	2018-09-11 08:54:57	2018-09-11 08:54:57	t
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
2	alexzvon	admin@example.com	79525848851	Звонарев	Алексей	Виктороыич	$2y$10$.WhowmrjdejBKBTcR8FlZOC35poddP0Pz3BEh2m7qv0kyP.QwGI5C	NPBZZg7urjKa0f1f5GSTNVbPEU4VcDJXLnokA1Mt9ZYiNyUlSEGD0dJKiq0d	2018-10-01 11:19:49	2018-10-03 09:52:42	t
3	snake	admin@site.com	79898989898	ewew	hgjghjhgghfhhj	erewrew	$2y$10$HVkGxR7zitstCiVI.81VAOi4Wz3FfBLPdbJqgvvOcf3q/ythhXXlO	kaG3wDViEvzjP3zp7DYynz47OSWkMWYpnslhAo0MWAL1RKt4WUmGtNAttZOi	2018-10-01 14:48:11	2018-10-03 09:05:19	f
1	zvonlexa	zvon.lexa@yandex.ru	79525848858	Звонарев	Алексей	Викторович	$2y$10$0xPCLkrkA.Q2UKktnnfNY.bpaFfRApjK//vVDBS/Gor.1q02Um3Hu	dRrQ3lfMlhi0W8BWRDxCiMQML3HGUXQm2bHKz1LRIESKIdFUxmh3zRKqIRe4	2018-07-06 10:54:22	2018-10-03 09:51:24	t
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

SELECT pg_catalog.setval('dev.categories_id_seq', 19, true);


--
-- Name: clubs_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.clubs_id_seq', 10, true);


--
-- Name: doings_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.doings_id_seq', 8, true);


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

SELECT pg_catalog.setval('dev.images_id_seq', 15, true);


--
-- Name: infrastructures_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.infrastructures_id_seq', 44, true);


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

SELECT pg_catalog.setval('dev.roles_users_id_seq', 10, true);


--
-- Name: rooms_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.rooms_id_seq', 40, true);


--
-- Name: schedule_years_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.schedule_years_id_seq', 94, true);


--
-- Name: schedules_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.schedules_id_seq', 95, true);


--
-- Name: sliders_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.sliders_id_seq', 14, true);


--
-- Name: special_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.special_id_seq', 21, true);


--
-- Name: trainers_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.trainers_id_seq', 15, true);


--
-- Name: training_years_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.training_years_id_seq', 14, true);


--
-- Name: trainings_id_seq; Type: SEQUENCE SET; Schema: dev; Owner: devfitron
--

SELECT pg_catalog.setval('dev.trainings_id_seq', 36, true);


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

SELECT pg_catalog.setval('dev.users_id_seq', 4, true);


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

