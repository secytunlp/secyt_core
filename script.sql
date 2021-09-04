INSERT INTO base_secyt.secyt_cargo(oid, nombre, orden)
SELECT cd_cargo, ds_cargo, nu_orden
FROM viajes.cargo;

INSERT INTO base_secyt.secyt_carrerainv(oid, nombre)
SELECT cd_carrerainv, ds_carrerainv
FROM viajes.carrerainv;

INSERT INTO base_secyt.secyt_cat(oid, nombre)
SELECT cd_cat, ds_cat
FROM viajes.cat;

INSERT INTO base_secyt.secyt_categoria(oid, nombre)
SELECT cd_categoria, ds_categoria
FROM viajes.categoria;

INSERT INTO base_secyt.secyt_deddoc(oid, nombre)
SELECT cd_deddoc, ds_deddoc
FROM viajes.deddoc;

INSERT INTO base_secyt.secyt_facultad(oid, nombre, cat_oid, codigo)
SELECT cd_facultad, ds_facultad, cd_cat, nu_codigo
FROM viajes.facultad;

INSERT INTO base_secyt.secyt_organismo(oid, nombre, sigla)
SELECT cd_organismo, ds_organismo, ds_codigo
FROM viajes.organismo;

INSERT INTO base_secyt.secyt_provincia(oid, nombre)
SELECT cd_provincia, ds_provincia
FROM viajes.provincia;

INSERT INTO base_secyt.secyt_tipounidad(oid, nombre)
SELECT cd_tipounidad, ds_tipounidad
FROM viajes.tipounidad;

INSERT INTO base_secyt.secyt_universidad(oid, nombre, orden, jurisdiccion)
SELECT cd_universidad, ds_universidad, nu_orden, nu_jurisdiccion
FROM viajes.universidad;

INSERT INTO base_secyt.secyt_titulo(oid, nombre, universidad_oid, nivel)
SELECT cd_titulo, ds_titulo, cd_universidad, nu_nivel
FROM viajes.titulo;

SET FOREIGN_KEY_CHECKS=0;
INSERT INTO base_secyt.secyt_unidad(oid, nombre, tipounidad_oid, codigo, padre_oid, sigla, hijos, direccion, telefono, mail, facultad_oid)
SELECT cd_unidad, ds_unidad, CASE
    WHEN cd_tipounidad = 0 THEN NULL
    ELSE cd_tipounidad
END AS cd_tipounidad, ds_codigo, CASE
    WHEN cd_padre = 0 THEN NULL
    ELSE cd_padre
END AS cd_tipounidad, ds_sigla, bl_hijos, ds_direccion, ds_telefono, ds_mail, CASE
    WHEN cd_facultad = 0 THEN NULL
    ELSE cd_facultad
END AS cd_facultad
FROM viajes.unidad;
SET FOREIGN_KEY_CHECKS=1;

SET FOREIGN_KEY_CHECKS=0;
INSERT INTO base_secyt.secyt_docente(oid, nombre, provincia_oid, apellido, categoria_oid, carrerainv_oid, organismo_oid, facultad_oid, 
cargo_oid, deddoc_oid, universidad_oid, titulo_oid, titulopost_oid, unidad_oid, ident, precuil, documento, postcuil, nacimiento, 
sexo, calle, nro, piso, depto, localidad, cp, telefono, mail, dedinv, fechacargo, becario, tipobeca, orgbeca, fechabeca, estudiante, materias)
SELECT cd_docente, ds_nombre, CASE
    WHEN cd_provincia = 0 THEN NULL
    ELSE cd_provincia
END AS cd_provincia, ds_apellido, CASE
    WHEN cd_categoria = 0 THEN NULL
    ELSE cd_categoria
END AS cd_categoria, CASE
    WHEN cd_carrerainv = 0 THEN NULL
    ELSE cd_carrerainv
END AS cd_carrerainv, CASE
    WHEN cd_organismo = 0 THEN NULL
    ELSE cd_organismo
END AS cd_organismo, CASE
    WHEN cd_facultad = 0 THEN NULL
    ELSE cd_facultad
END AS cd_facultad, CASE
    WHEN cd_cargo = 0 THEN NULL
    ELSE cd_cargo
END AS cd_cargo, CASE
    WHEN cd_deddoc = 0 THEN NULL
    ELSE cd_deddoc
END AS cd_deddoc, CASE
    WHEN cd_universidad = 0 THEN NULL
    ELSE cd_universidad
END AS cd_universidad, CASE
    WHEN cd_titulo = 0 THEN NULL
    WHEN cd_titulo = 9999 THEN NULL
    ELSE cd_titulo
END AS cd_titulo, CASE
    WHEN cd_titulopost = 0 THEN NULL
    WHEN cd_titulopost = 9999 THEN NULL
    ELSE cd_titulopost
END AS cd_titulopost,CASE
    WHEN cd_unidad = 0 THEN NULL
    ELSE cd_unidad
END AS cd_unidad, nu_ident, nu_precuil, nu_documento, nu_postcuil, CASE
    WHEN dt_nacimiento = '0000-00-00' THEN NULL
    ELSE dt_nacimiento
END AS dt_nacimiento, ds_sexo, ds_calle, nu_nro, nu_piso, ds_depto, ds_localidad, 
nu_cp, nu_telefono, ds_mail, nu_dedinv, CASE
    WHEN dt_cargo = '0000-00-00' THEN NULL
    ELSE dt_cargo
END AS dt_cargo, bl_becario, ds_tipobeca, ds_orgbeca, CASE
    WHEN dt_beca = '0000-00-00' THEN NULL
    ELSE dt_beca
END AS dt_beca, bl_estudiante, nu_materias
FROM viajes.docente;
SET FOREIGN_KEY_CHECKS=1;

######################### problemas con las foraneas en doctrine #######################
UPDATE docente SET cd_provincia = NULL WHERE cd_provincia = 0;
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_categoria FROM categoria c WHERE d.cd_categoria=c.cd_categoria);
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_carrerainv FROM carrerainv c WHERE d.cd_carrerainv=c.cd_carrerainv);
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_organismo FROM organismo c WHERE d.cd_organismo=c.cd_organismo);
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_facultad FROM facultad c WHERE d.cd_facultad=c.cd_facultad);
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_cargo FROM cargo c WHERE d.cd_cargo=c.cd_cargo);
UPDATE docente SET cd_universidad = NULL WHERE cd_universidad = 0;
SELECT * FROM docente d WHERE NOT EXISTS (SELECT c.cd_titulo FROM titulo c WHERE d.cd_titulo=c.cd_titulo);
UPDATE docente d SET d.cd_titulo = NULL WHERE NOT EXISTS (SELECT c.cd_titulo FROM titulo c WHERE d.cd_titulo=c.cd_titulo);
UPDATE docente d SET d.cd_unidad = NULL WHERE NOT EXISTS (SELECT c.cd_unidad FROM unidad c WHERE d.cd_unidad=c.cd_unidad);


