/*
Navicat MySQL Data Transfer

Source Server         : LOCALHOST
Source Server Version : 50136
Source Host           : localhost:3306
Source Database       : visys

Target Server Type    : MYSQL
Target Server Version : 50136
File Encoding         : 65001

Date: 2016-09-22 09:06:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for catalogo
-- ----------------------------
DROP TABLE IF EXISTS `catalogo`;
CREATE TABLE `catalogo` (
  `IdCT` int(11) NOT NULL AUTO_INCREMENT,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  PRIMARY KEY (`IdCT`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of catalogo
-- ----------------------------
INSERT INTO `catalogo` VALUES ('1', 'Septiembre', '\0', '2016-09-13');
INSERT INTO `catalogo` VALUES ('3', 'Agosto', '', '2016-08-01');

-- ----------------------------
-- Table structure for detallect
-- ----------------------------
DROP TABLE IF EXISTS `detallect`;
CREATE TABLE `detallect` (
  `IdCT` int(11) DEFAULT NULL COMMENT 'Id de Imagén',
  `CodigoImg` varchar(15) DEFAULT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `Imagen` varchar(150) DEFAULT NULL COMMENT 'nombre de la imagén',
  `Puntos` int(20) DEFAULT NULL,
  `Estado` bit(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of detallect
-- ----------------------------
INSERT INTO `detallect` VALUES ('3', '1234', 'COMEDOR  B&D HC3000', '101100.jpg', '1500', '\0');
INSERT INTO `detallect` VALUES ('1', '1234', 'COMEDOR  B&D HC3000', '101100.jpg', '1500', '\0');
INSERT INTO `detallect` VALUES ('1', '12345', 'MINIPROCESADOR B&D HC3000', '101345.jpg', '1000', '\0');
INSERT INTO `detallect` VALUES ('1', '12345', 'MINIPROCESADOR BLANCO HC3000', '101349.jpg', '1200', '\0');
INSERT INTO `detallect` VALUES ('1', '1299', 'ARROCERA B&D HC3000', '101605.jpg', '1300', '\0');
INSERT INTO `detallect` VALUES ('1', '1236', 'HOLLA B&D HC3000', '101645.jpg', '1000', '\0');
INSERT INTO `detallect` VALUES ('1', '1237', 'LICUADORA B&D HC3000', '102586.jpg', '800', '\0');
INSERT INTO `detallect` VALUES ('1', '1238', 'ESPRIMIDOR B&D HC3000', '102596.jpg', '1800', '\0');
INSERT INTO `detallect` VALUES ('1', '1239', 'CAMA MATRIMONIAL B&D HC3000', '103409.jpg', '3200', '\0');
INSERT INTO `detallect` VALUES ('1', '1210', 'CAMA UNIPERSONAL B&D HC3000', '105348.jpg', '2000', '\0');
INSERT INTO `detallect` VALUES ('1', '1211', 'MICROONDAS B&D HC3000', '107192.jpg', '2100', '\0');
INSERT INTO `detallect` VALUES ('1', '1212', 'MUEBLES SALA B&D HC3000', '105975.jpg', '4800', '\0');
INSERT INTO `detallect` VALUES ('1', '1213', 'MESA DE 4 B&D HC3000', '116242.jpg', '2300', '\0');
INSERT INTO `detallect` VALUES ('1', '1214', 'ABANICO B&D HC3000', '119141.jpg', '1350', '\0');
INSERT INTO `detallect` VALUES ('1', '1216', 'MAQUINA DE CONCER B&D HC3000', '119527.jpg', '2385', '\0');
INSERT INTO `detallect` VALUES ('1', '1217', 'COCINA 4 QUEMADORES HC3000', '114529.jpg', '2850', '\0');
INSERT INTO `detallect` VALUES ('1', '1219', 'ROPERO B&D HC3000', '124686.jpg', '4880', '\0');
INSERT INTO `detallect` VALUES ('1', '1220', 'PLANCHA B&D HC3000', '125105.jpg', '1450', '\0');
INSERT INTO `detallect` VALUES ('1', '1221', 'JUEGO SALA B&D HC3000', '124353.jpg', '5150', '\0');
INSERT INTO `detallect` VALUES ('1', '1221', 'RESURADORA B&D HC3000', '125365.jpg', '1170', '\0');
INSERT INTO `detallect` VALUES ('1', '1222', 'ABANICO B&D HC3000', '121577.jpg', '1340', '\0');
INSERT INTO `detallect` VALUES ('1', '1223', 'MUEBLE COCINA C3000', '126921.jpg', '11800', '\0');
INSERT INTO `detallect` VALUES ('1', '1224', 'ASADOR B&D HC3000', '129209.jpg', '1500', '\0');
INSERT INTO `detallect` VALUES ('1', '1225', 'PLANCHADOR B&D HC3000', '129863.jpg', '1420', '\0');
INSERT INTO `detallect` VALUES ('1', '1226', 'REFRIGERADOR B&D HC3000', '123780.jpg', '2600', '\0');
INSERT INTO `detallect` VALUES ('1', '1227', 'MINI HORNO B&D HC3000', '126858.jpg', '3000', '\0');
INSERT INTO `detallect` VALUES ('1', '1228', 'PSP SLIM HC', '128314.jpg', '2180', '\0');
INSERT INTO `detallect` VALUES ('1', '1226', 'SALA DE ESTAR B&D HC3000', '130374.jpg', '7231', '\0');
INSERT INTO `detallect` VALUES ('1', '1228', 'TELEVISOR 24\"', '131380.jpg', '2456', '\0');
INSERT INTO `detallect` VALUES ('1', '1229', 'ROPERO DE NIñO Y NIñA B&D HC3000', '135218.jpg', '2487', '\0');
INSERT INTO `detallect` VALUES ('1', '1230', 'COMPUTADOR DE MESA', '134027.jpg', '4896', '\0');
INSERT INTO `detallect` VALUES ('1', '1231', 'MOTO MONTAÑERA 150CC', '130707.jpg', '15866', '\0');
INSERT INTO `detallect` VALUES ('1', '1232', 'MOTO MENSAJERA 125CC', '130712.jpg', '14845', '\0');
INSERT INTO `detallect` VALUES ('1', '1233', 'MOTO MONTAñERA 200CC', '130723.jpg', '16842', '\0');
INSERT INTO `detallect` VALUES ('1', '1234', 'SCOTER 150CC ROJA', '134388.jpg', '15678', '\0');
INSERT INTO `detallect` VALUES ('1', '1235', 'PSP 3 SONY', '136179.jpg', '6842', '\0');
INSERT INTO `detallect` VALUES ('1', '1236', 'COCINA 6 QUEMADORES ATLAS', '131588.jpg', '11258', '\0');
INSERT INTO `detallect` VALUES ('1', '1237', 'LAVADORA 50 LITROS', '134445.jpg', '9580', '\0');
INSERT INTO `detallect` VALUES ('1', '1285', 'SAMSUNG J1', '140576.jpg', '3582', '\0');
INSERT INTO `detallect` VALUES ('1', '1240', 'CONTENEDOR REFRIGERADORA ', '126405.jpg', '12385', '\0');
INSERT INTO `detallect` VALUES ('1', '1242', 'SISTEMA DE SONIDO ENVOLVENTE', '133553.jpg', '15785', '\0');
INSERT INTO `detallect` VALUES ('1', '1245', 'LAPTOP TOSHIBA 16\"', '146071.jpg', '12858', '\0');
INSERT INTO `detallect` VALUES ('1', '1249', 'PARRILLA ASADOR PARA PATIO', '145389.jpg', '25876', '\0');
INSERT INTO `detallect` VALUES ('1', '1250', 'GIFT CARD WALMART', 'PPUMK-0001.jpg', '500', '\0');
INSERT INTO `detallect` VALUES ('1', '1254', 'GIFT CARD WALMART 500', 'PPUMK-0002.jpg', '800', '\0');
INSERT INTO `detallect` VALUES ('1', '1246', 'IMPRESORA HP DESKJET1200', '148948.jpg', '4877', '\0');
INSERT INTO `detallect` VALUES ('2', '1255', 'CAMARA SONY 18MEGAPIXELES', '138566.jpg', '14588', '\0');
INSERT INTO `detallect` VALUES ('2', '12255', 'EQUIPO DE SONIDO SONY', '142920.jpg', '5444', '\0');
INSERT INTO `detallect` VALUES ('3', '12345', 'MINIPROCESADOR B&D HC3000', '101345.jpg', '1000', '\0');
INSERT INTO `detallect` VALUES ('3', '12345', 'MINIPROCESADOR BLANCO HC3000', '101349.jpg', '1200', '\0');
INSERT INTO `detallect` VALUES ('3', '1245', 'ARROCERA B&D HC3000', '101605.jpg', '1300', '\0');
INSERT INTO `detallect` VALUES ('3', '1236', 'HOLLA B&D HC3000', '101645.jpg', '1000', '\0');
INSERT INTO `detallect` VALUES ('3', '1237', 'LICUADORA B&D HC3000', '102586.jpg', '800', '\0');
INSERT INTO `detallect` VALUES ('3', '1238', 'ESPRIMIDOR B&D HC3000', '102596.jpg', '1800', '\0');
INSERT INTO `detallect` VALUES ('3', '1239', 'CAMA MATRIMONIAL B&D HC3000', '103409.jpg', '3200', '\0');
INSERT INTO `detallect` VALUES ('3', '1210', 'CAMA UNIPERSONAL B&D HC3000', '105348.jpg', '2500', '\0');
INSERT INTO `detallect` VALUES ('3', '1211', 'MICROONDAS B&D HC3000', '107192.jpg', '2100', '\0');
INSERT INTO `detallect` VALUES ('3', '1212', 'MUEBLES SALA B&D HC3000', '105975.jpg', '4800', '\0');
INSERT INTO `detallect` VALUES ('3', '1213', 'MESA DE 4 B&D HC3000', '116242.jpg', '2300', '\0');
INSERT INTO `detallect` VALUES ('3', '1214', 'ABANICO B&D HC3000', '119141.jpg', '1350', '\0');
INSERT INTO `detallect` VALUES ('3', '1216', 'MAQUINA DE CONCER B&D HC3000', '119527.jpg', '2385', '\0');
INSERT INTO `detallect` VALUES ('3', '1217', 'COCINA 4 QUEMADORES HC3000', '114529.jpg', '2850', '\0');
INSERT INTO `detallect` VALUES ('3', '1219', 'ROPERO B&D HC3000', '124686.jpg', '4880', '\0');
INSERT INTO `detallect` VALUES ('3', '1220', 'PLANCHA B&D HC3000', '125105.jpg', '1450', '\0');
INSERT INTO `detallect` VALUES ('3', '1221', 'JUEGO SALA B&D HC3000', '124353.jpg', '5150', '\0');
INSERT INTO `detallect` VALUES ('3', '1221', 'RESURADORA B&D HC3000', '125365.jpg', '1170', '\0');
INSERT INTO `detallect` VALUES ('3', '1222', 'ABANICO B&D HC3000', '121577.jpg', '1340', '\0');
INSERT INTO `detallect` VALUES ('3', '1223', 'MUEBLE COCINA C3000', '126921.jpg', '11800', '\0');
INSERT INTO `detallect` VALUES ('3', '1224', 'ASADOR B&D HC3000', '129209.jpg', '1500', '\0');
INSERT INTO `detallect` VALUES ('3', '1225', 'PLANCHADOR B&D HC3000', '129863.jpg', '1420', '\0');
INSERT INTO `detallect` VALUES ('3', '1226', 'REFRIGERADOR B&D HC3000', '123780.jpg', '2600', '\0');
INSERT INTO `detallect` VALUES ('3', '1227', 'MINI HORNO B&D HC3000', '126858.jpg', '3000', '\0');
INSERT INTO `detallect` VALUES ('3', '1228', 'PSP SLIM HC', '128314.jpg', '2180', '\0');
INSERT INTO `detallect` VALUES ('3', '1226', 'SALA DE ESTAR B&D HC3000', '130374.jpg', '7231', '\0');
INSERT INTO `detallect` VALUES ('3', '1228', 'TELEVISOR 24\"', '131380.jpg', '2456', '\0');
INSERT INTO `detallect` VALUES ('3', '1229', 'ROPERO DE NIñO Y NIñA B&D HC3000', '135218.jpg', '2487', '\0');
INSERT INTO `detallect` VALUES ('3', '1230', 'COMPUTADOR DE MESA', '134027.jpg', '4896', '\0');
INSERT INTO `detallect` VALUES ('3', '1231', 'MOTO MONTAñERA 150CC', '130707.jpg', '15866', '\0');
INSERT INTO `detallect` VALUES ('3', '1232', 'MOTO MENSAJERA 125CC', '130712.jpg', '14845', '\0');
INSERT INTO `detallect` VALUES ('3', '1233', 'MOTO MONTAñERA 200CC', '130723.jpg', '16842', '\0');
INSERT INTO `detallect` VALUES ('3', '1234', 'SCOTER 150CC ROJA', '134388.jpg', '15678', '\0');
INSERT INTO `detallect` VALUES ('3', '1235', 'PSP 3 SONY', '136179.jpg', '6842', '\0');
INSERT INTO `detallect` VALUES ('3', '1236', 'COCINA 6 QUEMADORES ATLAS', '131588.jpg', '11258', '\0');
INSERT INTO `detallect` VALUES ('3', '1237', 'LAVADORA 50 LITROS', '134445.jpg', '9580', '\0');
INSERT INTO `detallect` VALUES ('3', '1285', 'SAMSUNG J1', '140576.jpg', '3582', '\0');
INSERT INTO `detallect` VALUES ('3', '1240', 'CONTENEDOR REFRIGERADORA ', '126405.jpg', '12385', '\0');
INSERT INTO `detallect` VALUES ('3', '1242', 'SISTEMA DE SONIDO ENVOLVENTE', '133553.jpg', '15785', '\0');
INSERT INTO `detallect` VALUES ('3', '1245', 'LAPTOP TOSHIBA 16\"', '146071.jpg', '12858', '\0');
INSERT INTO `detallect` VALUES ('3', '1249', 'PARRILLA ASADOR PARA PATIO', '145389.jpg', '25876', '\0');
INSERT INTO `detallect` VALUES ('3', '1250', 'GIFT CARD WALMART', 'PPUMK-0001.jpg', '500', '\0');
INSERT INTO `detallect` VALUES ('3', '1254', 'GIFT CARD WALMART 500', 'PPUMK-0002.jpg', '800', '\0');
INSERT INTO `detallect` VALUES ('3', '1246', 'IMPRESORA HP DESKJET1200', '148948.jpg', '4877', '\0');
INSERT INTO `detallect` VALUES ('3', '1255', 'CAMARA SONY 18MEGAPIXELES', '138566.jpg', '14588', '\0');
INSERT INTO `detallect` VALUES ('3', '12255', 'EQUIPO DE SONIDO SONY', '142920.jpg', '5444', '\0');

-- ----------------------------
-- Table structure for logcatalogo
-- ----------------------------
DROP TABLE IF EXISTS `logcatalogo`;
CREATE TABLE `logcatalogo` (
  `IdCL` int(11) NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `CodigoImg` int(11) DEFAULT NULL,
  `IdUsuario` int(11) DEFAULT NULL,
  `Puntos` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of logcatalogo
-- ----------------------------

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `IdRol` int(10) NOT NULL COMMENT 'Id de Rol',
  `Descripcion` varchar(250) NOT NULL COMMENT 'Descripcion del Rol',
  PRIMARY KEY (`IdRol`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'SuperAdministrador');
INSERT INTO `roles` VALUES ('2', 'Administrador');
INSERT INTO `roles` VALUES ('3', 'Vendedor');
INSERT INTO `roles` VALUES ('4', 'SAC');
INSERT INTO `roles` VALUES ('5', 'CxC');
INSERT INTO `roles` VALUES ('6', 'Mercadeo');
INSERT INTO `roles` VALUES ('7', 'Cliente');
INSERT INTO `roles` VALUES ('8', 'Corp.');

-- ----------------------------
-- Table structure for tmp_catalogo
-- ----------------------------
DROP TABLE IF EXISTS `tmp_catalogo`;
CREATE TABLE `tmp_catalogo` (
  `v_IdCT1` int(11) DEFAULT NULL,
  `v_CodImg1` int(11) DEFAULT NULL,
  `v_Nombre1` varchar(255) DEFAULT NULL,
  `v_Imagen1` varchar(150) DEFAULT NULL,
  `v_Puntos1` int(11) DEFAULT NULL,
  `v_IdCT2` int(11) DEFAULT NULL,
  `v_CodImg2` int(11) DEFAULT NULL,
  `v_Nombre2` varchar(255) DEFAULT NULL,
  `v_Imagen2` varchar(150) DEFAULT NULL,
  `v_Puntos2` int(11) DEFAULT NULL,
  `v_IdCT3` int(11) DEFAULT NULL,
  `v_CodImg3` int(11) DEFAULT NULL,
  `v_Nombre3` varchar(255) DEFAULT NULL,
  `v_Imagen3` varchar(150) DEFAULT NULL,
  `v_Puntos3` int(11) DEFAULT NULL,
  `v_IdCT4` varchar(255) DEFAULT NULL,
  `v_CodImg4` int(11) DEFAULT NULL,
  `v_Nombre4` varchar(255) DEFAULT NULL,
  `v_Imagen4` varchar(150) DEFAULT NULL,
  `v_Puntos4` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tmp_catalogo
-- ----------------------------
INSERT INTO `tmp_catalogo` VALUES ('1', '1210', 'CAMA UNIPERSONAL B&D HC3000', '105348.jpg', '2500', '1', '1211', 'MICROONDAS B&D HC3000', '107192.jpg', '2100', '1', '1212', 'MUEBLES SALA B&D HC3000', '105975.jpg', '4800', '1', '1213', 'MESA DE 4 B&D HC3000', '116242.jpg', '2300');
INSERT INTO `tmp_catalogo` VALUES ('1', '1214', 'ABANICO B&D HC3000', '119141.jpg', '1350', '1', '1216', 'MAQUINA DE CONCER B&D HC3000', '119527.jpg', '2385', '1', '1217', 'COCINA 4 QUEMADORES HC3000', '114529.jpg', '2850', '1', '1219', 'ROPERO B&D HC3000', '124686.jpg', '4880');
INSERT INTO `tmp_catalogo` VALUES ('1', '1220', 'PLANCHA B&D HC3000', '125105.jpg', '1450', '1', '1221', 'JUEGO SALA B&D HC3000', '124353.jpg', '5150', '1', '1221', 'RESURADORA B&D HC3000', '125365.jpg', '1170', '1', '1222', 'ABANICO B&D HC3000', '121577.jpg', '1340');
INSERT INTO `tmp_catalogo` VALUES ('1', '1223', 'MUEBLE COCINA C3000', '126921.jpg', '11800', '1', '1224', 'ASADOR B&D HC3000', '129209.jpg', '1500', '1', '1225', 'PLANCHADOR B&D HC3000', '129863.jpg', '1420', '1', '1226', 'REFRIGERADOR B&D HC3000', '123780.jpg', '2600');
INSERT INTO `tmp_catalogo` VALUES ('1', '1226', 'SALA DE ESTAR B&D HC3000', '130374.jpg', '7231', '1', '1227', 'MINI HORNO B&D HC3000', '126858.jpg', '3000', '1', '1228', 'PSP SLIM HC', '128314.jpg', '2180', '1', '1228', 'TELEVISOR 24\"', '131380.jpg', '2456');
INSERT INTO `tmp_catalogo` VALUES ('1', '1229', 'ROPERO DE NIñO Y NIñA B&D HC3000', '135218.jpg', '2487', '1', '1230', 'COMPUTADOR DE MESA', '134027.jpg', '4896', '1', '1231', 'MOTO MONTAñERA 150CC', '130707.jpg', '15866', '1', '1232', 'MOTO MENSAJERA 125CC', '130712.jpg', '14845');
INSERT INTO `tmp_catalogo` VALUES ('1', '1233', 'MOTO MONTAñERA 200CC', '130723.jpg', '16842', '1', '1234', 'COMEDOR  B&D HC3000', '101100.jpg', '1500', '1', '1234', 'SCOTER 150CC ROJA', '134388.jpg', '15678', '1', '12345', 'MINIPROCESADOR B&D HC3000', '101345.jpg', '1000');
INSERT INTO `tmp_catalogo` VALUES ('1', '12345', 'MINIPROCESADOR BLANCO HC3000', '101349.jpg', '1200', '1', '1235', 'PSP 3 SONY', '136179.jpg', '6842', '1', '1236', 'HOLLA B&D HC3000', '101645.jpg', '1000', '1', '1236', 'COCINA 6 QUEMADORES ATLAS', '131588.jpg', '11258');
INSERT INTO `tmp_catalogo` VALUES ('1', '1237', 'LICUADORA B&D HC3000', '102586.jpg', '800', '1', '1237', 'LAVADORA 50 LITROS', '134445.jpg', '9580', '1', '1238', 'ESPRIMIDOR B&D HC3000', '102596.jpg', '1800', '1', '1239', 'CAMA MATRIMONIAL B&D HC3000', '103409.jpg', '3200');
INSERT INTO `tmp_catalogo` VALUES ('1', '1240', 'CONTENEDOR REFRIGERADORA ', '126405.jpg', '12385', '1', '1242', 'SISTEMA DE SONIDO ENVOLVENTE', '133553.jpg', '15785', '1', '1245', 'ARROCERA B&D HC3000', '101605.jpg', '1300', '1', '1245', 'LAPTOP TOSHIBA 16\"', '146071.jpg', '12858');
INSERT INTO `tmp_catalogo` VALUES ('1', '1246', 'IMPRESORA HP DESKJET1200', '148948.jpg', '4877', '1', '1249', 'PARRILLA ASADOR PARA PATIO', '145389.jpg', '25876', '1', '1250', 'GIFT CARD WALMART', 'PPUMK-0001.jpg', '500', '1', '1254', 'GIFT CARD WALMART 500', 'PPUMK-0002.jpg', '800');
INSERT INTO `tmp_catalogo` VALUES ('1', '1285', 'SAMSUNG J1', '140576.jpg', '3582', '0', '0', '', '', '0', '0', '0', '', '', '0', '', '0', '', '', '0');

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `IdUsuario` int(50) NOT NULL AUTO_INCREMENT COMMENT 'Id de usuario',
  `Usuario` varchar(100) NOT NULL COMMENT 'Usuario',
  `Nombre` varchar(150) DEFAULT NULL COMMENT 'Nombre del usuario',
  `Clave` varchar(100) NOT NULL COMMENT 'Contraseña de Usuario',
  `Rol` varchar(100) NOT NULL COMMENT 'Tipo de Usuario',
  `IdCL` varchar(10) NOT NULL COMMENT 'Id del Cliente',
  `Cliente` varchar(250) DEFAULT NULL COMMENT 'Nombre del Cliente',
  `Zona` varchar(250) DEFAULT NULL COMMENT 'Nombre de Vendedor o Ruta',
  `Estado` bit(1) DEFAULT NULL COMMENT '0 Activo, 1 Inactivo',
  `FechaCreacion` datetime NOT NULL COMMENT 'Fecha de Creación del Usuario',
  `FechaBaja` datetime DEFAULT NULL COMMENT 'Fecha de Baja del Usuario',
  PRIMARY KEY (`IdUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=220 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES ('1', 'admin', 'admin', '123', 'Administrador', '', null, '', '\0', '2016-06-27 00:00:00', '2016-08-09 15:32:21');
INSERT INTO `usuario` VALUES ('200', 'cliente1', 'FARMACIA PICHARDO - RUC 2910912590002X', '123', 'Cliente', '00019', 'FARMACIA PICHARDO - RUC 2910912590002X', 'F06', '\0', '2016-08-15 08:17:45', '2016-08-15 09:30:35');
INSERT INTO `usuario` VALUES ('201', 'FDavid', 'FARMACIA DAVID', '123456', 'Cliente', '00001', 'FARMACIA DAVID', 'F09', '\0', '2016-08-19 18:51:04', null);
INSERT INTO `usuario` VALUES ('202', 'FLaPrinicpal', 'FARMACIA LA PRINCIPAL', '123', 'Cliente', '00002', 'FARMACIA LA PRINCIPAL', 'F06', '\0', '2016-08-19 22:28:28', null);
INSERT INTO `usuario` VALUES ('203', 'FProvidencia', 'FARMACIA LA PROVIDENCIA', '123', 'Cliente', '00003', 'FARMACIA LA PROVIDENCIA', 'F06', '\0', '2016-08-19 22:32:16', null);
INSERT INTO `usuario` VALUES ('204', 'FUnion', 'FARMACIA LA UNION', '123', 'Cliente', '01292', 'FARMACIA LA UNIÓN', 'F19', '\0', '2016-08-19 22:34:49', null);
INSERT INTO `usuario` VALUES ('205', 'FMeg24', 'FARMACIA MEG 24', '123', 'Cliente', '00007', 'FARMACIA MEG 24', 'F06', '\0', '2016-08-19 22:35:41', null);
INSERT INTO `usuario` VALUES ('206', 'FNorma', 'FARMACIA NORMA', '123', 'Cliente', '03140', 'FARMACIA NORMA ', 'F14', '\0', '2016-08-19 23:33:12', null);
INSERT INTO `usuario` VALUES ('207', 'asaenz', 'asaenz', 'a9734', 'SuperAdministrador', '', null, null, '\0', '2016-09-21 16:56:31', null);
INSERT INTO `usuario` VALUES ('215', 'alder', 'alder', '123', 'SuperAdministrador', '', null, null, '\0', '2016-09-22 08:53:15', null);
INSERT INTO `usuario` VALUES ('216', 'alder', 'alder', '123', 'SuperAdministrador', '', null, null, '\0', '2016-09-22 08:53:51', null);
INSERT INTO `usuario` VALUES ('217', 'admin', 'admin', '123', 'Super%20Administrador', '', null, null, '\0', '2016-09-22 08:54:46', null);
INSERT INTO `usuario` VALUES ('218', 'admin', 'admin', '123', 'SuperAdministrador', '', null, null, '\0', '2016-09-22 08:55:10', null);
INSERT INTO `usuario` VALUES ('219', 'admin', 'admin', '123', 'SuperAdministrador', '', null, null, '\0', '2016-09-22 08:56:01', null);

-- ----------------------------
-- Table structure for vendedor
-- ----------------------------
DROP TABLE IF EXISTS `vendedor`;
CREATE TABLE `vendedor` (
  `IdVendedor` int(10) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Zona` varchar(20) NOT NULL,
  `Estado` bit(1) NOT NULL,
  PRIMARY KEY (`IdVendedor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of vendedor
-- ----------------------------
INSERT INTO `vendedor` VALUES ('1', 'F01', 'F01', '\0');
INSERT INTO `vendedor` VALUES ('2', 'F02', 'F02', '\0');
INSERT INTO `vendedor` VALUES ('3', 'F03', 'F03', '\0');
INSERT INTO `vendedor` VALUES ('4', 'F04', 'F04', '\0');
INSERT INTO `vendedor` VALUES ('5', 'F05', 'F05', '\0');
INSERT INTO `vendedor` VALUES ('6', 'F06', 'F06', '\0');
INSERT INTO `vendedor` VALUES ('7', 'F07', 'F07', '\0');
INSERT INTO `vendedor` VALUES ('8', 'F08', 'F08', '\0');
INSERT INTO `vendedor` VALUES ('9', 'F09', 'F09', '\0');
INSERT INTO `vendedor` VALUES ('10', 'F10', 'F010', '\0');
INSERT INTO `vendedor` VALUES ('11', 'F11', 'F011', '\0');
INSERT INTO `vendedor` VALUES ('12', 'F12', 'F012', '\0');
INSERT INTO `vendedor` VALUES ('13', 'F13', 'F013', '\0');
INSERT INTO `vendedor` VALUES ('14', 'F14', 'F014', '\0');
INSERT INTO `vendedor` VALUES ('15', 'F15', 'F015', '\0');
INSERT INTO `vendedor` VALUES ('16', 'F16', 'F016', '\0');
INSERT INTO `vendedor` VALUES ('17', 'F17', 'F017', '\0');
INSERT INTO `vendedor` VALUES ('18', 'F18', 'F018', '\0');
INSERT INTO `vendedor` VALUES ('19', 'F19', 'F019', '\0');
INSERT INTO `vendedor` VALUES ('20', 'F20', 'F020', '\0');
INSERT INTO `vendedor` VALUES ('21', 'F21', 'F021', '\0');

-- ----------------------------
-- View structure for view_catalogo_activo
-- ----------------------------
DROP VIEW IF EXISTS `view_catalogo_activo`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `view_catalogo_activo` AS SELECT
detallect.CodigoImg,
detallect.Nombre,
detallect.Imagen,
detallect.Puntos,
detallect.IdCT,
catalogo.Descripcion
FROM
detallect
INNER JOIN catalogo ON catalogo.IdCT = detallect.IdCT 
WHERE catalogo.Estado=0 AND detallect.Estado=0 ;

-- ----------------------------
-- View structure for vt_clientesuser
-- ----------------------------
DROP VIEW IF EXISTS `vt_clientesuser`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER  VIEW `vt_clientesuser` AS SELECT
	group_concat(
		concat('\'', `usuario`.`IdCL`, '\'') SEPARATOR ','
	) AS `CLIENTES`
FROM
	`usuario`
WHERE
	(`usuario`.`IdCL` <> '') ;

-- ----------------------------
-- Procedure structure for pc_Catalogo
-- ----------------------------
DROP PROCEDURE IF EXISTS `pc_Catalogo`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `pc_Catalogo`(IN `CATALOGO` INT)
BEGIN
		DECLARE v_CodImg 	INT;
		DECLARE v_Nombre 	VARCHAR(255);
		DECLARE v_Imagen 	VARCHAR(150);
		DECLARE v_Puntos 	INT;
		DECLARE v_IdCT 		INT;
		DECLARE cont INT DEFAULT 1;
		DECLARE conse INT DEFAULT 1;
		DECLARE CSQL VARCHAR(8000) DEFAULT "(";
		DECLARE RELLENO INT DEFAULT 0;
		DECLARE errores INT DEFAULT 0;
		
		DECLARE data_cursor CURSOR FOR 
			SELECT detallect.IdCT, detallect.CodigoImg, detallect.Nombre, detallect.Imagen, detallect.Puntos
			FROM detallect
			INNER JOIN catalogo ON catalogo.IdCT = detallect.IdCT 
			WHERE detallect.IdCT = CATALOGO
			ORDER BY detallect.CodigoImg;
		DECLARE CONTINUE HANDLER FOR NOT FOUND SET errores = 1;

		SELECT COUNT(IdCT) INTO RELLENO FROM detallect WHERE detallect.IdCT = CATALOGO;

		OPEN data_cursor;
  
		read_data: LOOP
				FETCH data_cursor INTO v_IdCT, v_CodImg, v_Nombre, v_Imagen, v_Puntos;
				
				IF errores = 1 THEN
					LEAVE read_data;
				END IF;

				SET CSQL = CONCAT(CSQL, v_IdCT, ",", v_CodImg, ",'", v_Nombre, "','", v_Imagen, "',", v_Puntos);
					
				IF cont = 4 THEN
					SET CSQL = CONCAT(CSQL, "),(");
					SET cont = 0;
				ELSEIF conse < RELLENO THEN
					SET CSQL = CONCAT(CSQL, ",");
				END IF;
				
				SET cont = cont + 1;
				SET conse = conse + 1;
		END LOOP read_data;
		
		CLOSE data_cursor;
		
		SET RELLENO = 4 - (((RELLENO/4) - FLOOR(RELLENO/4)) * 4);
		
		IF RELLENO <> 4 THEN
			SET CSQL = CONCAT(CSQL, ",");

			WHILE RELLENO <> 0 DO
				SET CSQL = CONCAT(CSQL, "'','','','',''");
				SET RELLENO = RELLENO - 1;

				IF RELLENO <> 0 THEN
					SET CSQL = CONCAT(CSQL, ",");
				END IF;
			END WHILE;

			SET CSQL = CONCAT(CSQL, ")");
		ELSE
			SET CSQL=SUBSTRING(CSQL,1,length(CSQL)-2);
		END IF;
		
		
		DELETE FROM tmp_Catalogo;

		SET @query = CONCAT("INSERT INTO tmp_Catalogo VALUES", CSQL);

		PREPARE IC FROM @query; 
		EXECUTE IC; 
		DEALLOCATE PREPARE IC;
END
;;
DELIMITER ;
