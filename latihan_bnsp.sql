/*
 Navicat Premium Data Transfer

 Source Server         : MySQL Local
 Source Server Type    : MySQL
 Source Server Version : 50733
 Source Host           : localhost:3306
 Source Schema         : latihan_bnsp

 Target Server Type    : MySQL
 Target Server Version : 50733
 File Encoding         : 65001

 Date: 28/05/2024 16:45:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for mhs
-- ----------------------------
DROP TABLE IF EXISTS `mhs`;
CREATE TABLE `mhs`  (
  `nim` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `kode_prodi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tempat_lahir` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tgl_lahir` date NULL DEFAULT NULL,
  PRIMARY KEY (`nim`) USING BTREE,
  INDEX `fk_kode_prodi`(`kode_prodi`) USING BTREE,
  CONSTRAINT `fk_kode_prodi` FOREIGN KEY (`kode_prodi`) REFERENCES `prodi` (`kode_prodi`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of mhs
-- ----------------------------
INSERT INTO `mhs` VALUES ('0101010101', 'Wahyu Zaenuddin Munajat', '0101', 'Bandung', '2001-02-20');
INSERT INTO `mhs` VALUES ('22423423', 'Resti Lestari', '0201', 'Jakarta', '2024-05-07');

-- ----------------------------
-- Table structure for prodi
-- ----------------------------
DROP TABLE IF EXISTS `prodi`;
CREATE TABLE `prodi`  (
  `kode_prodi` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_prodi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`kode_prodi`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of prodi
-- ----------------------------
INSERT INTO `prodi` VALUES ('0101', 'Ilmu Komputer');
INSERT INTO `prodi` VALUES ('0102', 'Teknik Informatika');
INSERT INTO `prodi` VALUES ('0103', 'Sistem Informasi');
INSERT INTO `prodi` VALUES ('0201', 'Akuntansi Digital');
INSERT INTO `prodi` VALUES ('0202', 'Ekonomi Pembangunan');

SET FOREIGN_KEY_CHECKS = 1;
