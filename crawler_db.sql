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

 Date: 17/01/2024 21:59:53
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
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of dia_diem
-- ----------------------------
INSERT INTO `dia_diem` VALUES (1, 'Hà Nội', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (2, 'Nhật', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (3, 'Singapore', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `dia_diem` VALUES (4, 'Đài Loan', NULL, NULL, NULL, NULL, NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
  PRIMARY KEY (`hoi_nghi_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hoi_nghi
-- ----------------------------
INSERT INTO `hoi_nghi` VALUES (1, 'Giải thưởng Sao Khuê 2022', 'Hà Nội', 'http://giaithuongsaokhue.vn/', NULL, '2022-01-10 16:06:33', '2022-04-23 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (2, 'Các chương trình XTTM tại nước ngoài', 'Nhật, Mỹ, Châu Âu, Singapore, Đài Loan, Malaysia, Hàn Quốc', 'https://vinasa.org.vn/Default.aspx?sname=vinasa&sid=4&pageid=3126&eventtype=12&eventid=1091&evenname=Cac-chuong-trinh-XTTM-tai-nuoc-ngoai', NULL, '2022-02-01 16:06:33', '2022-12-30 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (3, 'Chuỗi Hội thảo với thị trường Nhật', 'Online', 'https://vinasa.org.vn/Default.aspx?sname=vinasa&sid=4&pageid=3126&eventtype=12&eventid=1088&evenname=Chuoi-Hoi-thao-voi-thi-truong-Nhat', NULL, '2022-02-01 16:06:33', '2022-12-31 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (4, 'TOP 10 Doanh nghiệp CNTT Việt Nam 2022', 'Hà Nội', 'http://top10ict.com/', NULL, '2022-04-01 16:06:33', '2022-07-01 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (5, 'Hội thảo Giao thương trực tuyến (VBM)', 'Online', 'https://vinasa.org.vnhttps://vbm.vinasa.org.vn/', NULL, '2022-04-18 16:06:33', '2022-11-25 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (6, 'Vietnam - ASIA DX SUMMIT 2022', 'Hà Nội', 'https://vinasa.org.vnhttps://dxsummit.vn/', NULL, '2022-05-24 16:06:33', '2022-05-25 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (7, 'Ngày CNTT Hàn Quốc 2022', 'Hà Nội, HCM, Đà Nẵng + trực tuyến', 'https://vinasa.org.vn/Default.aspx?sname=vinasa&sid=4&pageid=3126&eventtype=12&eventid=1089&evenname=Ngay-CNTT-Han-Quoc-2022', NULL, '2022-08-01 16:06:33', NULL, '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (8, 'Smart City Summit 2022 và ASIA Smart City Summit 2022', 'Bình Dương / Đà Nẵng', 'https://vinasa.org.vnhttps://smartcity.vinasa.org.vn/', NULL, '2022-10-18 16:06:33', '2022-10-19 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);
INSERT INTO `hoi_nghi` VALUES (9, 'Vietnam Blockchain Summit 2022', 'Hà Nội', 'https://vinasa.org.vnhttps://vietnamblockchainsummit.com/', NULL, '2022-10-19 16:06:33', '2022-10-20 16:06:33', '2024-01-11 15:59:19', '2024-01-11 16:06:33', NULL, NULL, NULL);

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of nguon_thong_tin
-- ----------------------------

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
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

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
