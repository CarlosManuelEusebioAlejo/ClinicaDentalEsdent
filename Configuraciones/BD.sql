-- Sistema de Control de pacientes de la clinica dental esdent
-- Creación de la base de datos
DROP DATABASE IF EXISTS `ClinicaDentalEsdent`;
CREATE DATABASE IF NOT EXISTS `ClinicaDentalEsdent` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ClinicaDentalEsdent`;
SET default_storage_engine = INNODB;

-- Deshabilitar las comprobaciones de las llaves foráneas
SET FOREIGN_KEY_CHECKS = 0;

/**************************************
 ******TABLAS DE LA APLICACIÓN WEB*****
 **************************************/

--------------------------- INICIO DE LA TABLA DE PACIENTES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'pacientes',------------------------------- 

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`pacientes`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`pacientes` ( 
    `idPaciente`                                INT                         UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID del paciente',
    `Nombre_paciente`                           VARCHAR(100)                         NOT NULL                COMMENT 'Nombres del paciente',
    `Apellido_paciente`                         VARCHAR(100)                         NOT NULL                COMMENT 'Apellidos del paciente',
    `Fecha_nacimiento`                          VARCHAR(100)                         NOT NULL                COMMENT 'Fecha de nacimiento del paciente',
    `Edad`                                      TINYINT                     UNSIGNED NOT NULL                COMMENT 'Edad del paciente',
    `Direccion`                                 VARCHAR(255)                         NOT NULL                COMMENT 'Dirección del paciente',
    `Telefono`                                  INT(10)                     UNSIGNED NOT NULL                COMMENT 'Teléfono del paciente',
    `Correo`                                    VARCHAR(100)                         NOT NULL                COMMENT 'Correo electrónico del paciente',
    `Estado_civil`                              VARCHAR(50)                          NOT NULL                COMMENT 'Estado civil del paciente',
    `Ocupacion`                                 VARCHAR(100)                         NOT NULL                COMMENT 'Ocupación del paciente',
    `Recomendacion`                             VARCHAR(100)                         NOT NULL                COMMENT 'Quién recomendó al paciente',
    `Genero`                                    ENUM('Masculino',                        
                                                     'Femenino',                         
                                                     'Otro')                         NOT NULL                COMMENT 'Género del paciente',
    `Esta_embarazada`                           ENUM('Si','No')                      NOT NULL                COMMENT 'Si está embarazada',
    `Meses_de_gestacion`                        TINYINT                     UNSIGNED NOT NULL                COMMENT 'Meses de gestación (si está embarazada)',
    `Motivo_consulta`                           TEXT                                 NOT NULL                COMMENT 'Motivo de la consulta',
    `Ultima_visita_odontologo`                  VARCHAR(255)                         NOT NULL                COMMENT 'Última visita al odontólogo',
    `Cepillo_dientes_al_dia`                    TINYINT                     UNSIGNED NOT NULL                COMMENT 'Frecuencia con la que se cepilla los dientes al día',
    `Sangrado_encias`                           ENUM('Si','No','Aveces')             NOT NULL                COMMENT 'Si tiene sangrado de encías',
    `Aprieta_dientes`                           ENUM('Si','No')                      NOT NULL                COMMENT 'Si aprieta los dientes',
    `Durante_dia_o_noche`                       ENUM('día',                  
                                                     'noche',                    
                                                     'Ambos')                        NOT NULL                COMMENT 'Si aprieta los dientes en el día o en la noche',
    `Ha_realizado_cirugia_bucal`                ENUM('Si','No')                      NOT NULL                COMMENT 'Si se ha realizado alguna cirugía',
    `Que_operacion_bucal`                       VARCHAR(255)                         NOT NULL                COMMENT 'Medicamentos a los que es alérgico',
    `Dificultad_abrir_boca`                     ENUM('Si','No')                      NOT NULL                COMMENT 'Si tiene dificultad para abrir la boca',
    `Tiene_brackets`                            ENUM('Si','No')                      NOT NULL                COMMENT 'Si tiene brackets',
    `Toma_medicamentos`                         ENUM('Si','No')                      NOT NULL                COMMENT 'Toma medicamentos el paciente',
    `Que_medicamento`                           VARCHAR(255)                         NOT NULL                COMMENT 'Medicamentos que está tomando actualmente',
    `Alergico_a_medicamento`                    ENUM('Si','No')                      NOT NULL                COMMENT 'Es alergico a un medicamento',
    `Medicamento_que_es_alergico`               VARCHAR(255)                         NOT NULL                COMMENT 'Medicamentos a los que es alérgico',
    `Mala_experiencia_con_anestesicos`          ENUM('Si','No')                      NOT NULL                COMMENT 'Ha tenido mala experiencia con anestesicos',
    `Cual_anestesico`                           VARCHAR(255)                         NOT NULL                COMMENT 'Con cuales anestesicos',
    `Lo_han_operado`                            ENUM('Si','No')                      NOT NULL                COMMENT 'Lo han operado',  
    `Que_operacion_le_han_hecho`                VARCHAR(255)                         NOT NULL                COMMENT 'Que operación le han realizado',
    `Lo_han_operado_corazon`                    ENUM('Si','No')                      NOT NULL                COMMENT 'Lo han operado del corazón',
    `Tiene_marcapasos_corazon`                  VARCHAR(255)                         NOT NULL                COMMENT 'Tiene algún marcapasos en el corazón',
    `Toma_anticoagulante`                       ENUM('Si','No')                      NOT NULL                COMMENT 'Toma algún anticoagulante',
    `Cual_anticoagulante_toma`                  VARCHAR(255)                         NOT NULL                COMMENT 'Que anticoagulante toma',
    `Tiene_tratamiento_antidepresivo`           ENUM('Si','No')                      NOT NULL                COMMENT 'Está en tratamiento antidepresivo',
    `Que_Tratamiento_Antidepresivo`             VARCHAR(255)                         NOT NULL                COMMENT 'Qué tratamiento antidepresivo toma',
    `Artritis_reumatoide`                       ENUM('Si','No')                      NOT NULL                COMMENT 'Padece de artritis reumatoide',
    `Padece_osteoporosis`                       ENUM('Si','No')                      NOT NULL                COMMENT 'Padece de osteoporosis',
    `Tiene_diabetes`                            ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene diabetes',
    `Que_valores_diabetes_maneja`               VARCHAR(255)                         NOT NULL                COMMENT 'Qué valores maneja',
    `Es_hipertenso`                             ENUM('Si','No')                      NOT NULL                COMMENT 'Es hipertenso',
    `Valores_hipertenso_maneja`                 VARCHAR(255)                         NOT NULL                COMMENT 'Qué valores maneja',
    `Le_han_realizado_transfusion_sanguinea`    ENUM('Si','No')                      NOT NULL                COMMENT 'Le han realizado transfusiones sanguíneas',
    `Sangra_al_cortarse`                        ENUM('Si','No')                      NOT NULL                COMMENT 'Sangra mucho al cortarse',
    `Ha_tenido_infarto_corazon`                 ENUM('Si','No')                      NOT NULL                COMMENT 'Ha tenido infarto en el corazón',
    `Tiene_protesis_corazon`                    ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene prótesis en el corazón',
    `Toma_acido_zoledronico`                    ENUM('Si','No')                      NOT NULL                COMMENT 'Toma ácido zoledrónico',
    `Toma_fosamax_alendronato`                  ENUM('Si','No')                      NOT NULL                COMMENT 'Toma Fosamax (Alendronato)',
    `Toma_ibandronato_boniva`                   ENUM('Si','No')                      NOT NULL                COMMENT 'Toma Ibandronato (Boniva)',
    `Toma_actonel_risedronato`                  ENUM('Si','No')                      NOT NULL                COMMENT 'Toma Actonel (Risedronato)',
    `Enfermedades_corazon`                      ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene enfermedades del corazón',
    `Enfermedades_pulmonares`                   ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene enfermedades pulmonares',
    `Insuficiencia_renal`                       ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene insuficiencia renal',
    `Gastritis`                                 ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene gastritis',
    `Epilepsia`                                 ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene epilepsia',
    `Diabetes`                                  ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene diabetes',
    `Paralisis`                                 ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene parálisis',
    `vih_sida`                                  ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene VIH/SIDA',
    `Tuberculosis`                              ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene tuberculosis',
    `Hemofilia`                                 ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene hemofilia',
    `Hepatitis`                                 ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene hepatitis',
    `Anemia`                                    ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene anemia',
    `Presion_alta`                              ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene presión alta',
    `Presion_baja`                              ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene presión baja',
    `Asma`                                      ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene asma',
    `Artritis`                                  ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene artritis',
    `Tiroides`                                  ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene problemas de tiroides',
    `Cancer`                                    ENUM('Si','No')                      NOT NULL                COMMENT 'Tiene cáncer',
    `Familiar_padecido_enfermedades`            ENUM('Si','No')                      NOT NULL                COMMENT 'Algún familiar ha padecido de alguna de las enfermedades anteriores',
    `Enfermedades_padecidas`                    TEXT                                 NOT NULL                COMMENT 'Enfermedades que han padecido',
    `Quien_padecio`                             TEXT                                 NOT NULL                COMMENT 'Quiénes han padecido las enfermedades',
    `Fuma`                                      ENUM('Si','No')                      NOT NULL                COMMENT 'Fuma',
    `Cuantos_cigarros_al_dia_fuma`              TINYINT                     UNSIGNED NOT NULL                COMMENT 'Cuántos cigarros al día fuma',
    `Consume_drogas`                            ENUM('Si','No')                      NOT NULL                COMMENT 'Consume droga',
    `Drogas_consumiendo`                        TEXT                                 NOT NULL                COMMENT 'Drogas a las que consume',
    `Consume_alcohol`                           ENUM('Si','No')                      NOT NULL                COMMENT 'Consume alcohol',
    `Firma`                                     VARCHAR (255)                        NOT NULL                COMMENT 'Firma del paciente',
    `Foto_paciente`                             VARCHAR (500)                        NOT NULL                COMMENT 'Foto del paciente',
    `fecha_registro`                            DATETIME                             NOT NULL DEFAULT NOW()  COMMENT 'Fecha y hora en la que se registró el paciente',
    PRIMARY KEY (`idPaciente`)                                                           
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla que almacena toda la información relevante de los pacientes para la clínica dental.';

--------------------------- FIN DE LA TABLA DE PACIENTES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'pacientes',------------------------------- 


--------------------------- INICIO DE LA TABLA DE DOCTORES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'doctores',----------------------------- 

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`doctores`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`doctores` (
    `id_doctor`                 INT                 UNSIGNED NOT NULL           AUTO_INCREMENT  COMMENT 'Identificador único para cada doctor.',
    `Nombre_doctor`             VARCHAR(100)                     NOT NULL                           COMMENT 'Nombre completo del doctor.',
    `Correo`                    VARCHAR(100)                     NOT NULL                           COMMENT 'Correo electrónico del doctor, utilizado como identificador único.',
    `Contrasena`                VARCHAR(255)                     NOT NULL                           COMMENT 'Contraseña cifrada para el acceso al sistema.',
    `Especialidad`              VARCHAR(100)                         NULL                           COMMENT 'Especialidad del doctor (por ejemplo, ortodoncia, endodoncia).',
    `Numero_telefono`           VARCHAR(20)                          NULL                           COMMENT 'Número de teléfono de contacto del doctor.',
    `experiencia_anios`         TINYINT                 UNSIGNED     NULL                           COMMENT 'Años de experiencia laboral del doctor en su especialidad.',
    `Conocimientos_tecnicos`    VARCHAR(255)                         NULL                           COMMENT 'Conocimientos técnicos adicionales que posea el doctor.',
    `Rol`                       ENUM('Administrador',               
                                     'Doctor')                   NOT NULL                           COMMENT 'Rol del doctor.',
    `Certificado`               VARCHAR(255)                         NULL                           COMMENT 'Nombre del certificado o licencia profesional que el doctor posee.',
    `Firma`                     VARCHAR(255)                     NOT NULL                           COMMENT 'Firma del paciente',
    `fecha_registro`            DATETIME                         NOT NULL DEFAULT NOW()             COMMENT 'Fecha y hora en que se registró al doctor en el sistema.',
    PRIMARY KEY (`id_doctor`),                                                                      
        UNIQUE INDEX `_est_uiCorreo` (`Correo`)                                                
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla que almacena toda la información relevante de los doctores para la clínica dental.';

--------------------------- FIN DE LA TABLA DE DOCTORES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'doctores',-----------------------------


--------------------------- INICIO DE LA TABLA DE VIDEOS EXPLICATIVOS EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'videoExplicativo',------------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`videoExplicativo`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`videoExplicativo`(
    `id_video`              INT           NOT NULL         AUTO_INCREMENT  COMMENT 'ID del video explicativo',
    `Url`                   VARCHAR(500)  NOT NULL                         COMMENT 'Ruta o URL del video explicativo',
    `Descripcion`           TEXT          NOT NULL                         COMMENT 'Descripción del video explicativo',
    `fecha_registro`        DATETIME      NOT NULL DEFAULT NOW()           COMMENT 'Fecha y hora en que se registró el video explicativo',
    PRIMARY KEY (`id_video`),   
        UNIQUE INDEX `_est_uiUrl` (`Url`)                                        
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 
COMMENT='Tabla que almacena la información de los videos explicativos para los pacientes de la clinica dental.';

--------------------------- FIN DE LA TABLA DE VIDEOS EXPLICATIVOS EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'videoExplicativo',------------------

--------------------------- INICIO DE LA TABLA DE HISTORIAL CLINICO DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'historial_tratamiento',-------------------------
 
DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`historial_tratamiento`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`historial_tratamiento`(
    `id_tratamiento`    INT           UNSIGNED   NOT NULL AUTO_INCREMENT  COMMENT 'Identificador único del historial del paciente',
    `idPaciente`        INT           UNSIGNED   NOT NULL                 COMMENT 'Identificador del paciente para el historial',
    `id_doctor`         INT           UNSIGNED   NOT NULL                 COMMENT 'Identificador del doctor',
    `Nombre_doctor`     VARCHAR(100)             NOT NULL                 COMMENT 'Nombre completo del doctor.',
    `Fecha`             DATE                     NOT NULL                 COMMENT 'Fecha de registo del tratamiento',
    `Tratamiento`       VARCHAR(255)             NOT NULL                 COMMENT 'tratamiento realizado al paciente',
    `Observacion`       VARCHAR(255)             DEFAULT NULL             COMMENT 'Observaciones realizadas al paciente',
    `Costo`             INT(11)       UNSIGNED   NOT NULL                 COMMENT 'Costo del tratamiento realizado',
    `fecha_registro`    DATETIME                 NOT NULL DEFAULT NOW()   COMMENT 'Fecha y hora en que se registró el pago',
    PRIMARY KEY (`id_tratamiento`),
        CONSTRAINT `fk_historial_doctor` FOREIGN KEY (`id_doctor`) REFERENCES `doctores`(`id_doctor`) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT `fk_historial_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla para el registro del historial de tratamiento en la clínica dental';

--------------------------- FIN DE LA TABLA DE HISTORIAL CLINICO DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'historial_tratamiento'-----------------------------


--------------------------- INICIO DE LA TABLA DE RADIOGRAFIAS CLINICO DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'radiografias',-------------------------
 
DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`radiografias`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`radiografias`(
    `id_radiografias`   INT           UNSIGNED  NOT NULL AUTO_INCREMENT  COMMENT 'Identificador único de la radiografia del paciente',
    `idPaciente`        INT           UNSIGNED  NOT NULL                 COMMENT 'Identificador del paciente para la radiografia',
    `Fecha`             VARCHAR(100)            NOT NULL                 COMMENT 'Fecha de registo de la radiografia',
    `Tipo_radiografia`  ENUM('Panoramica',
                             'Periapical',
                             'Bitewing',
                             'Cefalometrica')                     
                                                NOT NULL                 COMMENT 'Tipo de imagen de la radiografia',   
    `Descripcion`       VARCHAR(255)            DEFAULT NULL             COMMENT 'Descripción de la imagen de la radiografia',          
    `Observacion`       VARCHAR(255)            DEFAULT NULL             COMMENT 'Observaciones realizadas a la radiografia del paciente',
    `Foto_paciente`     VARCHAR(500)            NOT NULL                 COMMENT 'Foto de la radiografia del paciente',
    `fecha_registro`    DATETIME                NOT NULL DEFAULT NOW()   COMMENT 'Fecha y hora en que se registró la radiografia',
    PRIMARY KEY (`id_radiografias`),
        CONSTRAINT `fk_radiografias` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla para el registro de las radiografias en la clínica dental';

--------------------------- FIN DE LA TABLA DE RADIOGRAFIAS CLINICO DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'radiografias'-----------------------------


--------------------------- INICIO DE LA TABLA DEL ODONTOGRAMA DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'odontograma',-------------------------
 
DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`odontograma`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`odontograma`(
    `id_odontograma`    INT           UNSIGNED   NOT NULL AUTO_INCREMENT  COMMENT 'Identificador único odontograma del paciente',
    `idPaciente`        INT           UNSIGNED   NOT NULL                 COMMENT 'Identificador del paciente para el historial',
    `OD`                INT           UNSIGNED   NOT NULL                 COMMENT 'órgano dental o diente del paciente',
    `Diagnostico`       VARCHAR(255)             NOT NULL                 COMMENT 'Diagnostico realizado al paciente',
    `Tratamiento`       VARCHAR(255)             NOT NULL                 COMMENT 'tratamiento realizado al paciente',
    `Observacion`       VARCHAR(255)             DEFAULT NULL             COMMENT 'Observaciones realizadas al paciente',
    `fecha_registro`    DATETIME                 NOT NULL DEFAULT NOW()   COMMENT 'Fecha y hora en que se registró el pago',
    PRIMARY KEY (`id_odontograma`),
        CONSTRAINT `fk_odontograma_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla para el registro del odontograma en la clínica dental';

--------------------------- FIN DE LA TABLA DE HISTORIAL CLINICO DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'odontograma'-------------------------


--------------------------- INICIO DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'limpieza_dental',-----------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`limpieza_dental`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`limpieza_dental` (
    `id_limpieza`       INT            UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador único de la limpieza dental realizada.',
    `idPaciente`        INT            UNSIGNED NOT NULL                COMMENT 'Identificador único del paciente que recibió la limpieza dental.',
    `Nombre_paciente`   VARCHAR(100)            NOT NULL                COMMENT 'Nombres del paciente',
    `Apellido_paciente` VARCHAR(100)            NOT NULL                COMMENT 'Apellidos del paciente',
    `telefono`          INT(10)        UNSIGNED NOT NULL                COMMENT 'Teléfono del paciente',
    `Ultima_visita`     DATE                    NOT NULL                COMMENT 'Fecha de la última visita para limpieza dental.',
    `Siguiente_visita`  VARCHAR(50)             NOT NULL                COMMENT 'Fecha programada para la siguiente limpieza dental.',
    `fecha_registro`    DATETIME NOT NULL DEFAULT NOW()                 COMMENT 'Fecha y hora en que se registró la limpieza dental',
    PRIMARY KEY (`id_limpieza`),
    CONSTRAINT `fk_limpieza_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 
  COMMENT='Tabla para el registro de limpiezas dentales realizadas a los pacientes de la clínica dental';


--------------------------- FIN DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'limpieza_dental',-----------------

 
--------------------------- INICIO DE LA TABLA DE CITAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'citas',-----------------------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`citas`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`citas`(
    `id_cita`           INT             UNSIGNED  NOT NULL AUTO_INCREMENT  COMMENT 'Identificador único para cada cita',
    `id_doctor`         INT             UNSIGNED  NOT NULL                 COMMENT 'Identificador del doctor asignado para la cita',
    `idPaciente`        INT             UNSIGNED  NOT NULL                 COMMENT 'Identificador del paciente asignado para la cita',
    `Nombre_paciente`   VARCHAR(100)              NOT NULL                 COMMENT 'Nombres del paciente',
    `Apellido_paciente` VARCHAR(100)              NOT NULL                 COMMENT 'Apellidos del paciente',
    `Motivo_consulta`   TEXT                      NOT NULL                 COMMENT 'Descripción del motivo de la consulta',
    `Fecha_cita`        DATE                      NOT NULL                 COMMENT 'Fecha programada para la cita',
    `Hora_inicio`       TIME                      NOT NULL                 COMMENT 'Hora inicio de cita programada',
    `Hora_fin`          TIME                      NOT NULL                 COMMENT 'Hora fin de cita programada',
    `Nombre_doctor`     VARCHAR(100)              NOT NULL                 COMMENT 'Nombre completo del doctor.',
    `Unidad`            ENUM('1',     
                             '2',     
                             '3')                  NOT NULL                COMMENT 'Identificador de la unidad médica o consultorio',
    `fecha_registro`    DATETIME              NOT NULL DEFAULT NOW()  COMMENT 'Fecha y hora en que se registró la cita',
    PRIMARY KEY (`id_cita`),
        CONSTRAINT `fk_citas_doctor` FOREIGN KEY (`id_doctor`) REFERENCES `doctores`(`id_doctor`) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT `fk_citas_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla para el registro de citas en la clínica dental';

--------------------------- FIN DE LA TABLA DE CITAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'citas'-----------------------------


--------------------------- INICIO DE LA TABLA DE PAGOS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'pagos',-----------------------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`pagos`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`pagos`(
    `id_pagos`          INT                   UNSIGNED   NOT NULL AUTO_INCREMENT  COMMENT 'Identificador único para cada pago',
    `id_doctor`         INT                   UNSIGNED   NOT NULL                 COMMENT 'Identificador del doctor asignado por el pago',
    `idPaciente`        INT                   UNSIGNED   NOT NULL                 COMMENT 'Identificador del paciente asignado para el pago',
    `Nombre_paciente`   VARCHAR(100)                     NOT NULL                 COMMENT 'Nombres del paciente',
    `Apellido_paciente` VARCHAR(100)                     NOT NULL                 COMMENT 'Apellidos del paciente',
    `Nombre_doctor`     VARCHAR(100)                     NOT NULL                 COMMENT 'Nombre completo del doctor.',
    `Tratamiento`       TEXT                             NOT NULL                 COMMENT 'Descripción del motivo de la consulta',
    `Costo`             INT(11)               UNSIGNED   NOT NULL                 COMMENT 'Costo del tratamiento realizado',
    `Abono`             INT(11)               UNSIGNED   NOT NULL                 COMMENT 'Abono del tratamiento realizado',
    `Adeudo`            INT(11)               UNSIGNED       NULL                 COMMENT 'Adeudo del tratamiento realizado',
    `Tipo_pago`         ENUM('Efectivo', 
                             'Tarjeta',
                             'Billpocket',
                             'Transferencia')            NOT NULL                 COMMENT 'Metodo de pago del paciente',
     `Factura`          ENUM('Si', 
                             'No')                       NOT NULL                 COMMENT 'Requiere factura el paciente',
    `fecha_registro`  DATETIME                           NOT NULL DEFAULT NOW()   COMMENT 'Fecha y hora en que se registró el pago',
    PRIMARY KEY (`id_pagos`),
        CONSTRAINT `fk_pagos_doctor` FOREIGN KEY (`id_doctor`) REFERENCES `doctores`(`id_doctor`) ON DELETE CASCADE ON UPDATE CASCADE,
        CONSTRAINT `fk_pagos_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) ON DELETE CASCADE ON UPDATE CASCADE
)ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1
COMMENT='Tabla para el registro de pagos en la clínica dental';

--------------------------- FIN DE LA TABLA DE PAGOS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'pagos'-----------------------------


--------------------------- INICIO DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'presupuestos',-----------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`presupuestos`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`presupuestos` (
    `id_presupuesto`    INT            UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador único del presupuesto dental realizado.',
    `idPaciente`        INT            UNSIGNED NOT NULL                COMMENT 'Identificador único del paciente que recibió el presupuesto.',
    `Nombre_paciente`   VARCHAR(100)            NOT NULL                COMMENT 'Nombres del paciente',
    `Apellido_paciente` VARCHAR(100)            NOT NULL                COMMENT 'Apellidos del paciente',
    `Tratamiento`       VARCHAR(100)            NOT NULL                COMMENT 'Tratamiento realizado al paciente',
    `Costo`             INT(11)      UNSIGNED   NOT NULL                COMMENT 'Costo del tratamiento realizado',
    `Observaciones`     VARCHAR(255)            NOT NULL                COMMENT 'Observaciones realizadas al presupuesto.',
    `Fecha`             DATE                    NOT NULL                COMMENT 'Fecha que se realizo el presupuesto.',
    `Valido_hasta`      DATE                    NOT NULL                COMMENT 'Fecha de validez del presupuesto.',
    `fecha_registro`    DATETIME NOT NULL DEFAULT NOW()                 COMMENT 'Fecha y hora en que se registró el presupuesto',
    PRIMARY KEY (`id_presupuesto`),
    CONSTRAINT `fk_presupuesto_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 
  COMMENT='Tabla para el registro de presupuestos dentales realizadas a los pacientes de la clínica dental';

--------------------------- FIN DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'presupuestos',-----------------


--------------------------- INICIO DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'Recetas',-----------------

DROP TABLE IF EXISTS `ClinicaDentalEsdent`.`Recetas`;
CREATE TABLE IF NOT EXISTS `ClinicaDentalEsdent`.`Recetas` (
    `id_receta`         INT            UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identificador único de la receta dental realizada.',
    `idPaciente`        INT            UNSIGNED NOT NULL                COMMENT 'Identificador único del paciente que recibió la receta.',
    `Nombre_paciente`   VARCHAR(100)            NOT NULL                COMMENT 'Nombres del paciente',
    `Apellido_paciente` VARCHAR(100)            NOT NULL                COMMENT 'Apellidos del paciente',
    `Edad`              TINYINT        UNSIGNED NOT NULL                COMMENT 'Edad del paciente',
    `Receta`            VARCHAR(100)            NOT NULL                COMMENT 'Receta realizada al paciente',
    `Fecha`             DATE                    NOT NULL                COMMENT 'Fecha que se realizo la receta',
    `fecha_registro`    DATETIME NOT NULL DEFAULT NOW()                 COMMENT 'Fecha y hora en que se registró la receta',
    PRIMARY KEY (`id_receta`),
    CONSTRAINT `fk_receta_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes`(`idPaciente`) 
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARACTER SET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=1 
  COMMENT='Tabla para el registro de recetas dentales realizadas a los pacientes de la clínica dental';

--------------------------- FIN DE LA TABLA DE LIMPIEZAS DENTALES EN LA BASE DE DATOS  'ClinicaDentalEsdent'.'Recetas',-----------------

-- Habilita las comprobaciones de las llaves foráneas
SET FOREIGN_KEY_CHECKS = 1;
