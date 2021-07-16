CREATE TABLE IF NOT EXISTS public.tb_posts
(
    id serial NOT NULL,
    usuario_id integer,
    titulo character varying(255),
    texto text,
    criado_em timestamp without time zone DEFAULT CURRENT_TIMESTAMP;
    PRIMARY KEY (id)
);

ALTER TABLE public.tb_posts
    OWNER to postgres;