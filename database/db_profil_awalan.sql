/*
 Navicat Premium Data Transfer

 Source Server         : my_db
 Source Server Type    : MySQL
 Source Server Version : 100413
 Source Host           : localhost:3306
 Source Schema         : db_profil

 Target Server Type    : MySQL
 Target Server Version : 100413
 File Encoding         : 65001

 Date: 22/02/2021 09:18:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_aktifitas
-- ----------------------------
DROP TABLE IF EXISTS `tb_aktifitas`;
CREATE TABLE `tb_aktifitas`  (
  `id_aktifitas` int(11) NOT NULL AUTO_INCREMENT,
  `alamat_ip` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `pesan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `created_at` datetime(0) NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id_aktifitas`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for tb_akun
-- ----------------------------
DROP TABLE IF EXISTS `tb_akun`;
CREATE TABLE `tb_akun`  (
  `id_akun` int(11) NOT NULL AUTO_INCREMENT,
  `akun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `sandi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `kadaluarsa` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_akun`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_akun
-- ----------------------------
INSERT INTO `tb_akun` VALUES (1, 'super', 'adminkes', NULL, NULL);
INSERT INTO `tb_akun` VALUES (2, 'dinkes', 'adminkes', NULL, NULL);
INSERT INTO `tb_akun` VALUES (3, 'kominfo', 'sehat', NULL, NULL);

-- ----------------------------
-- Table structure for tb_data
-- ----------------------------
DROP TABLE IF EXISTS `tb_data`;
CREATE TABLE `tb_data`  (
  `id_data` int(11) NOT NULL AUTO_INCREMENT,
  `nama_data` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `alias` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_data`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_data
-- ----------------------------
INSERT INTO `tb_data` VALUES (1, 'Angka Kematian Balita', 'angka_kematian_balita');
INSERT INTO `tb_data` VALUES (2, 'Angka Kematian Bayi', 'angka_kematian_bayi');
INSERT INTO `tb_data` VALUES (3, 'Jumlah Anak yang Mendapat Imunisasi Dasar Lengkap', 'jumlah_imunisasi_lengkap');
INSERT INTO `tb_data` VALUES (4, 'Jumlah Balita yang Mendapatkan ASI Eksklusif', 'jumlah_balita_asi_eksklusif');
INSERT INTO `tb_data` VALUES (5, 'Jumlah Bayi Lahir Hidup', 'jumlah_bayi_lahir_hidup');
INSERT INTO `tb_data` VALUES (6, 'Jumlah Kematian Balita', 'jumlah_kematian_balita');
INSERT INTO `tb_data` VALUES (7, 'Jumlah Kematian Bayi', 'jumlah_kematian_bayi');
INSERT INTO `tb_data` VALUES (8, 'Jumlah Penderita HIV AIDS', 'jumlah_hiv_aids');
INSERT INTO `tb_data` VALUES (9, 'Jumlah Penderita Malaria', 'jumlah_malaria');
INSERT INTO `tb_data` VALUES (10, 'Jumlah Penderita TB Paru', 'jumlah_tb_paru');

-- ----------------------------
-- Table structure for tb_kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `tb_kecamatan`;
CREATE TABLE `tb_kecamatan`  (
  `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kecamatan`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_kecamatan
-- ----------------------------
INSERT INTO `tb_kecamatan` VALUES (1, '332001', 'KEDUNG');
INSERT INTO `tb_kecamatan` VALUES (2, '332002', 'PECANGAAN');
INSERT INTO `tb_kecamatan` VALUES (3, '332003', 'WELAHAN');
INSERT INTO `tb_kecamatan` VALUES (4, '332004', 'MAYONG');
INSERT INTO `tb_kecamatan` VALUES (5, '332005', 'BATEALIT');
INSERT INTO `tb_kecamatan` VALUES (6, '332006', 'JEPARA');
INSERT INTO `tb_kecamatan` VALUES (7, '332007', 'MLONGGO');
INSERT INTO `tb_kecamatan` VALUES (8, '332008', 'BANGSRI');
INSERT INTO `tb_kecamatan` VALUES (9, '332009', 'KELING');
INSERT INTO `tb_kecamatan` VALUES (10, '332010', 'KARIMUNJAWA');
INSERT INTO `tb_kecamatan` VALUES (11, '332011', 'TAHUNAN');
INSERT INTO `tb_kecamatan` VALUES (12, '332012', 'NALUMSARI');
INSERT INTO `tb_kecamatan` VALUES (13, '332013', 'KALINYAMATAN');
INSERT INTO `tb_kecamatan` VALUES (14, '332014', 'KEMBANG');
INSERT INTO `tb_kecamatan` VALUES (15, '332015', 'PAKISAJI');
INSERT INTO `tb_kecamatan` VALUES (16, '332016', 'DONOROJO');

-- ----------------------------
-- Table structure for tb_riwayat_data
-- ----------------------------
DROP TABLE IF EXISTS `tb_riwayat_data`;
CREATE TABLE `tb_riwayat_data`  (
  `id_riwayat_data` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_data` int(11) NULL DEFAULT NULL,
  `tahun` int(5) NULL DEFAULT NULL,
  `nilai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_riwayat_data`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
