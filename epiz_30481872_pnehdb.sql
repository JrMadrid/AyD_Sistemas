-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql304.epizy.com
-- Tiempo de generación: 15-12-2021 a las 20:34:33
-- Versión del servidor: 5.7.35-38
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_30481872_pnehdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contrato`
--

CREATE TABLE `contrato` (
  `ContratoID` varchar(6) NOT NULL,
  `VacanteID` varchar(7) NOT NULL,
  `NumeroIdentidad` varchar(15) NOT NULL,
  `TipoContrato` varchar(50) NOT NULL,
  `FechaInicio` date NOT NULL,
  `FechaVencimiento` date DEFAULT NULL,
  `Horario` varchar(50) NOT NULL,
  `Sueldo` double NOT NULL,
  `TipoPago` varchar(50) NOT NULL,
  `DiasLaborales` varchar(50) NOT NULL,
  `DiasVacaciones` varchar(50) NOT NULL,
  `Departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contrato`
--

INSERT INTO `contrato` (`ContratoID`, `VacanteID`, `NumeroIdentidad`, `TipoContrato`, `FechaInicio`, `FechaVencimiento`, `Horario`, `Sueldo`, `TipoPago`, `DiasLaborales`, `DiasVacaciones`, `Departamento`) VALUES
('A-0002', 'AP00012', '1234-1234-12345', 'Tiempo Limitado', '2021-08-01', '2022-05-31', '7:00am-13:00pm', 360000, 'Cheque', '4', '3', 'Ventas'),
('A-0150', 'AB54321', '0502-1998-02580', 'Temporal ', '2021-12-09', '2069-12-31', '08-00am-5:00pm', 41999, 'Cheque', '5', '2', 'contabilidad'),
('A-9999', 'QQ34560', '0501-1996-06631', 'publico', '2018-09-02', '2069-12-31', '08:00am-03:00pm', 10, 'Mensual', '5', '2', 'Recursos Humanos'),
('C-0001', 'AC00001', '0502-1998-03690', 'Permanente', '2021-11-22', NULL, '8:00 am - 5:00 pm', 12000, 'Quincenal', '5', '2', 'Recursos Humanos'),
('P-0005', 'AC00001', '0423-1974-00028', 'Permanente', '2021-12-01', '2069-12-31', '8:00 am - 5:00 pm', 25000, 'Mensual', '5', '2', 'Ventas'),
('P-1234', 'AB54321', '0502-1998-02580', 'Temporal ', '2021-12-15', '2069-12-31', '07-30am-12:00pm', 42000, 'Semanal', '4', '3', 'Sistemas'),
('T-9876', 'CT03247', '0503-3697-36987', 'Temporal ', '2022-01-16', '2069-12-31', '12:00pm-6:00pm', 24000, 'Cheque', '4', '3', 'Industrial '),
('T-9999', 'AB54321', '0502-1998-02580', 'PERMANENTE', '2021-12-18', '2069-12-31', '07-30am-12:00pm', 42000, 'Semanal', '4', '3', 'Sistemas'),
('V-0012', 'VV00025', '0501-2000-08661', 'Permanente ', '2021-12-01', '2069-12-31', '07:00am - 01:00pm', 36000, 'Mestral', '5', '2', 'Ventas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `demandatrabajo`
--

CREATE TABLE `demandatrabajo` (
  `Lugar` varchar(20) NOT NULL,
  `Demanda` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `demandatrabajo`
--

INSERT INTO `demandatrabajo` (`Lugar`, `Demanda`) VALUES
('San Pedro Sula', 75),
('Tegucigalpa', 58),
('El Progreso', 34),
('Comayagua', 23);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diseno`
--

CREATE TABLE `diseno` (
  `IDDISENO` int(6) NOT NULL,
  `Interfazintuitiva` varchar(100) DEFAULT 'Perfecto!',
  `Fluidez` varchar(100) DEFAULT 'Perfecto!',
  `Diseno` varchar(100) DEFAULT 'Perfecto!',
  `Colorimetria` varchar(100) DEFAULT 'Perfecto!',
  `Visualizacion` varchar(100) DEFAULT 'Perfecto!',
  `Descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `diseno`
--

INSERT INTO `diseno` (`IDDISENO`, `Interfazintuitiva`, `Fluidez`, `Diseno`, `Colorimetria`, `Visualizacion`, `Descripcion`) VALUES
(1, 'Me parece que la interfaz es muy intuitiva', 'No me carga muy fluido', 'Me parece todo muy bonito', 'Los colores me permiten leer muy bien el contenido', 'Todo Perfecto!', 'Me gustaria que la pagina web tuviera mas contenido grafico.\r\n\r\nUn apartado de Los valores de la empresa y mostrar casos de exito.\r\n\r\nPoder filtrar de mejor forma los datos.'),
(2, 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Siento que me gustaria mas elementos en el programa que contenga informacion de la empresa'),
(3, 'Todo Perfecto!', 'Por veces el diseÃ±o carga lento.', 'Todo Perfecto!', 'Todo Perfecto!', 'Los elementos no cargan rapido.', 'Por algunas ocasiones la interfaz carga, deberi­a de ser mas optima para visualizar la pagina de forma mas fluida y suave. '),
(4, 'La pagina no esta optimizada para cargar en moviles', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Cuando quise cargar la pagina via movil en mi smartphone, me lleve la sorpresa de que carga horrible. \r\nSe debe de mejorar ese apartado.'),
(5, 'Todo Perfecto!', 'Todo Perfecto!', 'Me parece que debe variar el diseno,', 'Todo Perfecto!', 'Todo Perfecto!', 'Me gastaria que el diseno variara mas con respecto a ciertas paginas. '),
(6, 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto! solo me gustaria ver mas imagenes.'),
(7, 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'puede mejorar', 'Logre encontrar unos cuantos errores ortograficos', 'En algunos reportes vi que habia vocales sin su respectiva tilde en palabras donde lo requieran.'),
(8, 'Me gustaria que tuviera mas mensajes de ayuda ', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'En algunos apartados de formulario no logro entender como ingresar los datos. \r\nMe gustaria ver algunos mensajes de ayuda que me hagan comprender de mejor forma.'),
(9, 'Todo Perfecto!', 'no cargan a tiempo las cosas', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'No cargan a tiempo las cosas'),
(10, 'Todo Perfecto!', 'Todo Perfecto!', 'Me parece que el inicio tiene un diseño un tanto feo', 'Todo Perfecto!', 'Todo Perfecto!', 'Mejorar el Inicio'),
(13, 'Todo Perfecto!', 'Todo Perfecto!', 'Las tablas no tienen un estilo muy bonito', 'Todo Perfecto!', 'Todo Perfecto!', 'Los diseÃ±os de las tablas deben ser mejorados.'),
(14, 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'Mas diversidad de color', 'Todo Perfecto!', 'agregar mas variedad de color al los diseÃ±os '),
(15, 'Todo Perfecto!', 'me parece que no estan fluido como yo quisiera ', 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'me gustaria que las paginas omo tal fueran mas livianas para que todo sea mas interactuvi \r\nmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmcomprobantes'),
(16, 'Todo Perfecto!', 'Todo Perfecto!', 'Todo Perfecto!', 'me gustaria ver mas colores', 'Todo Perfecto!', 'mas variedad de colores COMPROBACION');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `EmpresaID` varchar(12) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `RTN` varchar(15) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` int(15) NOT NULL,
  `CorreoElectronico` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`EmpresaID`, `Nombre`, `RTN`, `Direccion`, `Telefono`, `CorreoElectronico`) VALUES
('AM-2564-0026', 'Banco Atlantida S.A.', '12678978484896', 'Barrio Miraflores, entre 12 y 13 calle esquina opuesta a Hotel Posadas, Tegucigalpa, Honduras', 26948756, 'info@bancoatlantida.com'),
('AR-6358-4578', 'Argom', '32145696314578', 'SPS-CityMall', 75148935, 'argom.tech@gmail.com'),
('BE-2569-9636', 'Baleadas Express', '63257984253459', 'Plaza los Olivos', 36251489, 'Baleadas.sshn@hotmail.com'),
('BG-0065-5690', 'Zara', '04019002034889', 'Barrio Miraflores, media cuadra arriba del parque central, Tegucigalpa', 98736412, 'clientes@zara'),
('BG-0065-5697', 'Banco de Occidente S.A.', '040190020348894', 'Barrio Miraflores, media cuadra arriba del parque central, Tegucigalpa', 26782541, 'info@bancoocci.com'),
('BP-0024-0147', 'Banco del Pais S.A', '080199951404891', 'Mall Galerias segundo nivel, San Pedro Sula', 26547124, 'info@banpais.hn'),
('CG-2134-6984', 'Colgate', '14547566465463', 'Tegucigalpa', 69852545, 'colgate.hn@hotmail.com'),
('DL-8569-2354', 'Dell', '25853697456842', 'SPS', 96587415, 'dell.hn@hotmail.com'),
('SM-8956-2356', 'Samsung', '36567894251234', 'Valle de Sula', 36784512, 'samsung.hn@hotmail.com'),
('XX-9999-9999', 'TOYOTA', '33123213211235', 'SPS', 36984512, 'toyota@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresausuario`
--

CREATE TABLE `empresausuario` (
  `id` int(11) NOT NULL,
  `EmpresaID` varchar(12) CHARACTER SET utf8mb4 NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `empresausuario`
--

INSERT INTO `empresausuario` (`id`, `EmpresaID`, `usuario`, `password`) VALUES
(26, 'AM-2564-0026', 'Banco Atlantida S.A.', 'banca'),
(27, 'SM-8956-2356', 'Samsung', 'samu'),
(28, 'CG-2134-6984', 'Sandro', '123456'),
(29, 'BG-0065-5690', 'zara', '12345'),
(30, 'XX-9999-9999', 'TOYOTA', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fallas`
--

CREATE TABLE `fallas` (
  `IDFALLO` int(11) NOT NULL,
  `TipoProblema` varchar(20) NOT NULL DEFAULT 'Inicio',
  `Seccion` varchar(20) NOT NULL DEFAULT 'Programación',
  `Descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `fallas`
--

INSERT INTO `fallas` (`IDFALLO`, `TipoProblema`, `Seccion`, `Descripcion`) VALUES
(1, 'Programacion ', 'Inicio', 'Los datos que ingreso no se guardan, cuando escribo mis datos en el formulario de postulantes no los datos no se guardan.'),
(2, 'Programacion', 'Vacantes', 'No me aparecen las vacantes'),
(3, 'Validacion', 'Registro', 'El campo RTN es diferente al habitual'),
(4, 'Programacion', 'Inicio', 'Falta corregir fallas de ortografia'),
(5, 'Datos', 'Iniciar Sesion', 'No se especifica la seguridad de la contrasena'),
(6, 'Validacion', 'Iniciar Sesion', 'Escribia los datos y no se validaban');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulante`
--

CREATE TABLE `postulante` (
  `NumeroIdentidad` varchar(15) NOT NULL,
  `Nombres` varchar(60) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Genero` char(1) NOT NULL,
  `FechaNacimiento` date NOT NULL DEFAULT '0000-00-00',
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(15) NOT NULL,
  `CorreoElectronico` varchar(60) NOT NULL,
  `Estadop` varchar(30) NOT NULL,
  `UltimoAcceso` varchar(35) NOT NULL DEFAULT 'Hace un rato.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `postulante`
--

INSERT INTO `postulante` (`NumeroIdentidad`, `Nombres`, `Apellidos`, `Genero`, `FechaNacimiento`, `Direccion`, `Telefono`, `CorreoElectronico`, `Estadop`, `UltimoAcceso`) VALUES
('0202-2002-99999', 'juan Alberto', 'Molina Pineda ', 'M', '1999-12-05', 'SPS', '36984512', 'juan.mopi@hotmail.com', 'Desempleado', 'Hace un rato.'),
('0423-1974-00028', 'Carlos Roberto', 'Mejia Hernandez', 'M', '1995-07-13', 'La Lima', '95677955', 'carlosx1968@gmail.com', 'Desempleado', 'Hace un rato.'),
('0501-1997-08490', 'Roberto Jose', 'Girasoles Rodriguez', 'M', '1996-11-19', 'Tegucigalpa ', '96451287', 'rose.girasoles@hotmail.com', 'Desempleado', 'Hace un rato.'),
('0501-1999-01120', 'Genesis Samantha', 'Ortiz Alberto', 'F', '1998-05-10', 'Barrio Las Plamas, San Pedro Sula', '97038650', 'genesissam54@gmail.com', 'Desempleado', 'Hace un rato.'),
('0501-2000-08661', 'Islamar Daniela', 'Ortiz Alberto', 'F', '0000-00-00', 'Nagoya-chi, Japon ', '95677955', 'islamarortiz@gmail.com', 'Empleado', 'Hace un rato.'),
('0501-2020-69777', 'Carlos', 'Perez', 'N', '2000-11-15', 'Col. Los Santos', '89896767', 'carlos.perez@unah.hn', 'Desempleado', 'Hace un rato.'),
('0502-1996-12568', 'Ana Sofia', 'Portillo Molina', 'F', '1995-11-03', 'SPS', '36965814', 'anas_moli@hotmail.com', 'Empleado', 'Hace un rato.'),
('0502-1998-03690', 'Guillermo Enrique', 'Martinez Villeda', 'M', '1998-11-17', 'Tegucigalpa ', '32568974', 'henry.mv@hotmail.com', 'Empleado', 'Hace un rato.'),
('0503-1996-78452', 'Ana Sofia', 'Portillo Molina', 'F', '1995-06-30', 'SPS', '36965814', 'anas_moli@hotmail.com', 'Empleado', 'Hace un rato.'),
('0503-1998-04589', 'Maria Jose', 'Maldonado Cruz', 'F', '1999-06-04', 'Valle de Sula', '85259647', 'maria_cruz@hotmail.com', 'Desempleada', 'Hace un rato'),
('0503-1999-85640', 'Mario Alberto', 'Godoy Polanco', 'M', '1999-12-10', 'SPS', '33669841', 'mario.gopo@hotmail.com', 'Desempleado', 'Hace un rato.'),
('0503-3697-36987', 'Jesus Alberto', 'Molina Pineda ', 'M', '1976-12-09', 'SPS', '36984512', 'jesus.mopi@hotmail.com', 'Empleado', 'Hace un rato.'),
('0504-2000-03687', 'Alejandro Josue', 'Rivera Leon', 'M', '2000-06-06', 'Atlantida', '32124596', 'ajo.leo@gmail.com', 'Desempleado', 'Hace un rato.'),
('0506-1996-15935', 'Elizabeth Alejandra', 'Paz Barahona', 'F', '1995-11-10', 'SPS', '36251897', 'eliza.1995@hotmail.com', 'Empleado', 'Hace un rato.'),
('0801-1999-00058', 'Jesus Martin', 'Lopez Maldonado', 'M', '1999-08-12', 'Barrio Las Flores, Tegucigalpa', '86594125', 'jesumar15@gmail.com', 'Empleado', 'Hace un rato.'),
('0803-1977-00375', 'Pablo', 'RodrÃ­guez', 'M', '1977-12-13', 'Barrio medina', '97890036', 'prueba@gmail.com', 'Desempleado', 'Hace un rato.'),
('1234-1234-12345', 'Juan Ramon', 'Madrid Medina', 'M', '1999-12-05', 'SPS', '36987412', 'juan.dev@hotmail.com', 'Desempleado', '10 -Noviembre -2021  14:22:36 pm'),
('1620-1996-02746', 'Andrea Marisol', 'Sarmieto Ventura', 'F', '1996-06-14', 'Barrio Las Plamas, San Pedro Sula', '98736412', 'andreeemar@gmail.com', 'Desempleado', 'Hace un rato.'),
('4321-4321-98765', 'Oscar Alberto', 'Rodriguez Mendoza', 'M', '1979-11-10', 'Tegucigalpa', '36251489', 'oscar.rodriguez@hotmail.com', 'Desempleado', 'Hace un rato.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulanteusuario`
--

CREATE TABLE `postulanteusuario` (
  `id` int(11) NOT NULL,
  `NumeroIdentidad` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `usuario` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `postulanteusuario`
--

INSERT INTO `postulanteusuario` (`id`, `NumeroIdentidad`, `usuario`, `password`) VALUES
(1, '0501-2000-08661', 'isla', '1234'),
(2, '0202-2002-02420', 'Sandro', 'contra'),
(3, '0303-2003-03630', 'Sistemoso', 'inge'),
(4, '0404-2004-04840', 'Brenedin', 'brego'),
(5, '0202-2002-02420', 'ertt', 'juan'),
(7, '0803-1977-00375', 'prueba', 'prieba'),
(8, '0202-2002-99999', 'juansito', 'contra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `VacanteID` varchar(7) NOT NULL,
  `EmpresaID` varchar(12) NOT NULL,
  `FechaPublicacion` date NOT NULL,
  `Estado` varchar(30) NOT NULL,
  `Puesto` varchar(200) NOT NULL,
  `Jornada` varchar(20) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `Lugar` varchar(100) NOT NULL,
  `Genero` char(1) NOT NULL,
  `Edad` varchar(15) NOT NULL,
  `GradoAcademico` varchar(200) NOT NULL,
  `Experiencia` varchar(300) NOT NULL,
  `Conocimientos` varchar(500) NOT NULL,
  `Idiomas` varchar(100) NOT NULL,
  `Responsabilidades` varchar(500) NOT NULL,
  `DisponibilidadViajar` char(2) NOT NULL,
  `DocumentosRequeridos` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vacante`
--

INSERT INTO `vacante` (`VacanteID`, `EmpresaID`, `FechaPublicacion`, `Estado`, `Puesto`, `Jornada`, `Descripcion`, `Lugar`, `Genero`, `Edad`, `GradoAcademico`, `Experiencia`, `Conocimientos`, `Idiomas`, `Responsabilidades`, `DisponibilidadViajar`, `DocumentosRequeridos`) VALUES
('AA37362', 'AE-2564-0000', '2021-07-09', 'Empleado', 'Gerente  de RRHH', 'Matutina', 'Se necesita gente que contrate otra gente', 'Tegucigalpa,Honduras', 'M', '25 aÃ±os', 'Ingenieria Industrial', '2 aÃ±os', 'Manejo de Personal', 'EspaÃ±ol e Ingles', 'Supervisar', 'Si', ' Curriculum Vitae'),
('AA54321', 'BG-0065-5697', '2021-12-10', 'Empleado', 'Contador Bancario', 'Mixta', 'Analizar las entradas y salidas de dinero del banco', 'Barrio Miraflores, entre 12 y 13 calle esquina opuesta Hotel Posadas, Tegucigalpa, Honduras', 'M', '20 - 35 aÃ±os', 'Lic. Contaduria', 'min 5 aÃ±os', 'Contabilidad y Finanzas ', 'EspaÃ±ol e Ingles', 'Analizar de forma optima documentos bancarios.', 'So', 'Hoja de Vida, comprobante de experiencia.'),
('AC00001', 'AM-2564-0026', '2021-11-21', 'Disponibilidad Inmediata', 'Gerente de RRHH', 'Mixta', 'Se necesita gente que contrate otra gente', 'Tegucigalpa, Honduras', 'N', '25-35 años', 'Lic. en Psicologia', '2 añod', 'Manejo de personal', 'Español', 'Contratar gente', 'No', 'DNI\r\nCurriculum Vitae'),
('AC00005', 'SM-8956-2356', '2021-12-01', 'Desempleado', 'Programador Senior', 'Mixta', 'Se necesita contratar un especialista en Java, SQL Server y Jasper Reports', 'San Pedro Sula', 'M', '25 - 35 ', 'Ingeniero en sistemas o carrera a fin', '2 aÃ±os comprobable', 'Java, SQL Server 200', 'espanol, ingles (deseable)', 'Mantenimiento y elaboraciÃ³n de Software', 'So', 'Hoja de vida'),
('AC00006', 'SM-8956-2356', '2021-12-01', 'Empleado', 'Especialista en Marketing Digital', 'Nocturna', 'Se necesita contratar persona que se encargue de promocionar redes sociales', 'Tegucigalpa', 'U', '25 en adelante', 'Lic. En diseno grÃ¡fico o carrera a fin', 'No indispensable', 'Adobe Photoshop, Corel Draw, Redes sociales', 'EspaÃ±ol', 'Mantener activas las redes sociales', 'So', 'Hoja de Vida, antecedentes penales y policiales'),
('AC00112', 'BG-0065-5697', '2021-12-03', 'Empleado', 'Contador Bancario', 'Mixta', 'Analizar las entradas y salidas de dinero del banco', 'Barrio Miraflores, entre 12 y 13 calle esquina opuesta Hotel Posadas, Tegucigalpa, Honduras', 'F', '25 - 35 aÃ±os', 'Lic. Contaduria', 'min 5 aÃ±os', 'Contabilidad y Finanzas ', 'EspaÃ±ol e Ingles', 'Analizar de forma optima documentos bancarios.', 'So', 'Hoja de Vida, comprobante de experiencia.'),
('AP00012', 'AM-2564-0026', '2021-11-10', 'Disponible', 'Gerente de Ventas', 'Matutina', 'Oferta de Trabajo para Gerente de Ventas', 'Plaza los Olivos', 'M', '22', 'Titulo Profesional', 'minima de 1 año', 'En Ventas', 'Español', 'Puntual', 'No', 'Titulo Profesional'),
('CT03247', 'CG-2134-6984', '2021-12-04', 'Empleado', 'Tecnico', 'Verpertina', 'Asegurar la eficacia tecnica ', 'Tegucigalpa, Honduras', 'U', '25 - 35 aÃ±os', 'Bachillerato TÃ©cnico Profesional', 'min 5 aÃ±os', 'Maquinaria industrial', 'EspaÃ±ol ', 'Operar maquinas', 'So', 'Hoja de Vida, comprobante de experiencia.'),
('XX99999', 'AC-9999-9999', '2021-12-09', 'Desempleado', 'Abogado', 'Matutina', 'Resolver problemas, resolver casos', 'Copan', 'M', '40 aÃ±os', 'lic. Leyes', 'min 10 aÃ±os', 'Area Penales', 'EspaÃ±ol e Ingles', 'Contador', 'So', 'Curriculum');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`ContratoID`),
  ADD KEY `FKVacanteContrato` (`VacanteID`),
  ADD KEY `FKPostulanteContrato` (`NumeroIdentidad`);

--
-- Indices de la tabla `diseno`
--
ALTER TABLE `diseno`
  ADD PRIMARY KEY (`IDDISENO`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`EmpresaID`);

--
-- Indices de la tabla `empresausuario`
--
ALTER TABLE `empresausuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkEmpresaIDUsuario` (`EmpresaID`);

--
-- Indices de la tabla `fallas`
--
ALTER TABLE `fallas`
  ADD PRIMARY KEY (`IDFALLO`);

--
-- Indices de la tabla `postulante`
--
ALTER TABLE `postulante`
  ADD PRIMARY KEY (`NumeroIdentidad`);

--
-- Indices de la tabla `postulanteusuario`
--
ALTER TABLE `postulanteusuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkIdentidadUsuario` (`NumeroIdentidad`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`VacanteID`),
  ADD KEY `FKEmpresaVacante` (`EmpresaID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `diseno`
--
ALTER TABLE `diseno`
  MODIFY `IDDISENO` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `empresausuario`
--
ALTER TABLE `empresausuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `fallas`
--
ALTER TABLE `fallas`
  MODIFY `IDFALLO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `postulanteusuario`
--
ALTER TABLE `postulanteusuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
