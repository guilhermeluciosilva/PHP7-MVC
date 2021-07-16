CREATE TABLE IF NOT EXISTS public.tb_usuarios
(
    id serial NOT NULL,
    name character varying(255),
    email character varying(255),
    senha character varying(255),
    criado_em time without time zone DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
);

ALTER TABLE public.usuarios
    OWNER to postgres;