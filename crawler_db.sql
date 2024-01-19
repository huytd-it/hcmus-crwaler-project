/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80031 (8.0.31)
 Source Host           : localhost:3306
 Source Schema         : crawler_db

 Target Server Type    : MySQL
 Target Server Version : 80031 (8.0.31)
 File Encoding         : 65001

 Date: 19/01/2024 23:40:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for chu_de
-- ----------------------------
DROP TABLE IF EXISTS `chu_de`;
CREATE TABLE `chu_de`  (
  `chu_de_id` int NOT NULL AUTO_INCREMENT,
  `ten_chu_de` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `create_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`chu_de_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of chu_de
-- ----------------------------
INSERT INTO `chu_de` VALUES (1, 'Trí tuệ nhân tạo', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `chu_de` VALUES (2, 'IOT', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for dia_diem
-- ----------------------------
DROP TABLE IF EXISTS `dia_diem`;
CREATE TABLE `dia_diem`  (
  `dia_diem_id` int NOT NULL AUTO_INCREMENT,
  `ten_dia_diem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `created_at` datetime NULL DEFAULT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  `deleted_at` datetime NULL DEFAULT NULL,
  `create_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `update_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`dia_diem_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dia_diem
-- ----------------------------
INSERT INTO `dia_diem` VALUES (1, 'Hà Nội', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (2, 'Nhật', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (3, 'Singapore', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (4, 'Đài Loan', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (5, 'New York', NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for dien_gia
-- ----------------------------
DROP TABLE IF EXISTS `dien_gia`;
CREATE TABLE `dien_gia`  (
  `dien_gia_id` int NOT NULL AUTO_INCREMENT,
  `ten_dien_gia` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ngay_tao` datetime NULL DEFAULT NULL,
  `ngay_sua_cuoi` datetime NULL DEFAULT NULL,
  `ngay_xoa` datetime NULL DEFAULT NULL,
  `nguoi_tao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nguoi_sua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`dien_gia_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dien_gia
-- ----------------------------
INSERT INTO `dien_gia` VALUES (1, 'Nguyễn Hữu Trí', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for dien_gia_cua_hoi_nghi
-- ----------------------------
DROP TABLE IF EXISTS `dien_gia_cua_hoi_nghi`;
CREATE TABLE `dien_gia_cua_hoi_nghi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `dien_gia_id` int NULL DEFAULT NULL,
  `hoi_nghi_id` int NULL DEFAULT NULL,
  `ngay_xoa` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `dien_gia_id`(`dien_gia_id` ASC) USING BTREE,
  INDEX `hoi_nghi_id`(`hoi_nghi_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dien_gia_cua_hoi_nghi
-- ----------------------------

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `failed_jobs_uuid_unique`(`uuid` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of failed_jobs
-- ----------------------------

-- ----------------------------
-- Table structure for hoi_nghi
-- ----------------------------
DROP TABLE IF EXISTS `hoi_nghi`;
CREATE TABLE `hoi_nghi`  (
  `hoi_nghi_id` int NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính',
  `ten_hoi_nghi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `dia_diem` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `lien_ket` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `anh_dai_dien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `thoi_gian_bat_dau` datetime NULL DEFAULT NULL,
  `thoi_gian_ket_thuc` datetime NULL DEFAULT NULL,
  `ngay_tao` datetime NULL DEFAULT NULL,
  `ngay_sua_cuoi` datetime NULL DEFAULT NULL,
  `nguoi_tao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nguoi_sua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ngay_xoa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nguon_id` int NULL DEFAULT NULL,
  `chu_de_id` int NULL DEFAULT NULL,
  PRIMARY KEY (`hoi_nghi_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 16 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hoi_nghi
-- ----------------------------
INSERT INTO `hoi_nghi` VALUES (1, 'The 2024 Digiday Publishing Summit Preview', 'New York, NY', 'https://digiday.com/events/the-2024-digiday-publishing-summit-preview/', NULL, '2024-02-28 00:00:00', '2024-02-28 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (2, 'Digiday Media Buying Summit', 'Nashville, TN', 'https://digiday.com/events/digiday-media-buying-summit-march-24/', NULL, '2024-03-04 00:00:00', '2024-03-06 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (3, 'Glossy Beauty Pop', 'Los Angeles, CA', 'https://digiday.com/events/glossy-beauty-pop/', NULL, '2024-03-13 00:00:00', '2024-03-13 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (4, 'Digiday Publishing Summit', 'Vail, CO', 'https://digiday.com/events/digiday-publishing-summit-march-2024/', NULL, '2024-03-25 00:00:00', '2024-03-27 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (5, 'Modern Retail Commerce Summit', 'New Orleans, LA', 'https://digiday.com/events/modern-retail-commerce-summit-april-2024/', NULL, '2024-04-15 00:00:00', '2024-04-17 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (6, 'Digiday Programmatic Marketing Summit', 'Palm Springs, CA', 'https://digiday.com/events/digiday-programmatic-marketing-summit-may-24/', NULL, '2024-05-15 00:00:00', '2024-05-17 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (7, 'Glossy E-Commerce Summit', 'Miami, FL', 'https://digiday.com/events/glossy-ecommerce-summit-june-2024/', NULL, '2024-06-10 00:00:00', '2024-06-12 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (8, 'Glossy Beauty Pop', 'Los Angeles, CA', 'https://digiday.com/events/glossy-beauty-pop-july-2024/', NULL, '2024-07-19 00:00:00', '2024-07-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (9, 'Digiday Publisher Golf Outing', 'Kenilworth, NJ', 'https://digiday.com/events/digiday-publisher-golf-outing-july-2024/', NULL, '2024-07-11 00:00:00', '2024-07-11 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (10, 'Modern Retail Summit', '', 'https://digiday.com/events/modern-retail-summit-aug-2024/', NULL, '2024-08-19 00:00:00', '2024-08-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (11, 'Digiday Publishing Summit', 'Miami, FL', 'https://digiday.com/events/digiday-publishing-summit-sep-24/', NULL, '2024-09-23 00:00:00', '2024-09-25 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (12, 'Digiday Media Buying Summit', '', 'https://digiday.com/events/digiday-media-buying-summit-oct-24/', NULL, '2024-10-19 00:00:00', '2024-10-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (13, 'Digiday Publishing Summit Europe', 'Barcelona, Spain', 'https://digiday.com/events/digiday-publishing-summit-europe-nov-2024/', NULL, '2024-11-19 00:00:00', '2024-11-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (14, 'Glossy Beauty x Wellness Summit', '', 'https://digiday.com/events/glossy-beauty-summit-nov-2024/', NULL, '2024-11-19 00:00:00', '2024-11-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);
INSERT INTO `hoi_nghi` VALUES (15, 'Digiday Programmatic Marketing Summit', '', 'https://digiday.com/events/digiday-programmatic-marketing-summit-dec-2024/', NULL, '2024-12-19 00:00:00', '2024-12-19 00:00:00', '2024-01-17 16:29:02', '2024-01-19 14:57:28', NULL, NULL, NULL, 2, 1);

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (2, '2014_10_12_100000_create_password_reset_tokens_table', 1);
INSERT INTO `migrations` VALUES (3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (4, '2019_12_14_000001_create_personal_access_tokens_table', 1);
INSERT INTO `migrations` VALUES (5, '2023_11_25_105847_create_flights_table', 1);
INSERT INTO `migrations` VALUES (6, '2023_11_25_110004_create_hoi_nghis_table', 1);

-- ----------------------------
-- Table structure for moc_thoi_gian
-- ----------------------------
DROP TABLE IF EXISTS `moc_thoi_gian`;
CREATE TABLE `moc_thoi_gian`  (
  `moc_thoi_gian_id` bigint NOT NULL AUTO_INCREMENT,
  `hoi_nghi_id` int NULL DEFAULT NULL,
  `thoi_gian` datetime NULL DEFAULT NULL,
  `ngay_tao` datetime NULL DEFAULT NULL,
  `ngay_xoa` datetime NULL DEFAULT NULL,
  `ngay_sua_cuoi` datetime NULL DEFAULT NULL,
  `nguoi_tao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nguoi_sua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`moc_thoi_gian_id`) USING BTREE,
  INDEX `hoi_nghi_id`(`hoi_nghi_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of moc_thoi_gian
-- ----------------------------

-- ----------------------------
-- Table structure for nguon_thong_tin
-- ----------------------------
DROP TABLE IF EXISTS `nguon_thong_tin`;
CREATE TABLE `nguon_thong_tin`  (
  `nguon_id` int NOT NULL AUTO_INCREMENT,
  `ten_nguon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `ngay_tao` datetime NULL DEFAULT NULL,
  `ngay_sua_cuoi` datetime NULL DEFAULT NULL,
  `ngay_xoa` datetime NULL DEFAULT NULL,
  `nguoi_tao` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `nguoi_sua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  PRIMARY KEY (`nguon_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nguon_thong_tin
-- ----------------------------
INSERT INTO `nguon_thong_tin` VALUES (1, 'https://vinasa.org.vn/vinasa/4/3074/4205/lich-su-kien/', NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `nguon_thong_tin` VALUES (2, 'https://digiday.com/events/', NULL, NULL, NULL, NULL, NULL, NULL);

-- ----------------------------
-- Table structure for password_reset_tokens
-- ----------------------------
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_reset_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for personal_access_tokens
-- ----------------------------
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `personal_access_tokens_token_unique`(`token` ASC) USING BTREE,
  INDEX `personal_access_tokens_tokenable_type_tokenable_id_index`(`tokenable_type` ASC, `tokenable_id` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of personal_access_tokens
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email` ASC) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
