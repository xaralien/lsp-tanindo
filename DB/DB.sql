CREATE TABLE `users` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(255) NOT NULL,
  `no_ktp` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `mobile_number` VARCHAR(100) DEFAULT NULL,
  `home_address` TEXT DEFAULT NULL,
  `village` VARCHAR(255) DEFAULT NULL,
  `sub_district` VARCHAR(255) DEFAULT NULL,
  `city` VARCHAR(255) DEFAULT NULL,
  `province` VARCHAR(255) DEFAULT NULL,
  `gender` VARCHAR(50) DEFAULT NULL,
  `nationality` VARCHAR(100) DEFAULT NULL,
  `place_of_birth` VARCHAR(255) DEFAULT NULL,
  `date_of_birth` DATE DEFAULT NULL,
  `kualifikasi_pendidikan` VARCHAR(255) DEFAULT NULL,
  `status` VARCHAR(50) DEFAULT '3',
  `verification_code` VARCHAR(255) DEFAULT NULL,
  `is_verified` TINYINT(1) DEFAULT 0,
  `register_num` VARCHAR(100) DEFAULT NULL,
  `user_number` VARCHAR(100) DEFAULT NULL,
  `years` VARCHAR(100) DEFAULT NULL,
  `bukti_bayar` VARCHAR(255) DEFAULT NULL,
  `institute` VARCHAR(255) DEFAULT NULL,
  `jabatan` VARCHAR(255) DEFAULT NULL,
  `alamat_kantor` TEXT DEFAULT NULL,
  `kode_pos_kantor` VARCHAR(50) DEFAULT NULL,
  `mobile_number_kantor` VARCHAR(100) DEFAULT NULL,
  `fax_kantor` VARCHAR(100) DEFAULT NULL,
  `email_kantor` VARCHAR(255) DEFAULT NULL,
  `kode_pos` VARCHAR(50) DEFAULT NULL,
  `home_mobile_number` VARCHAR(100) DEFAULT NULL,
  `login_attempts` INT DEFAULT 0,
  `last_login_attempt` DATETIME DEFAULT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `uk_users_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `courses` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_name` VARCHAR(255) NOT NULL,
  `course_description` TEXT DEFAULT NULL,
  `teacher_uid` INT UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `assesmen` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_uid` INT UNSIGNED NOT NULL,
  `assesment_metode` TINYINT UNSIGNED DEFAULT NULL,
  `tipe_assesmen` TINYINT UNSIGNED DEFAULT NULL,
  `kode_unit` VARCHAR(100) DEFAULT NULL,
  `judul_unit_kompetensi` VARCHAR(255) DEFAULT NULL,
  `rekomendasi` VARCHAR(255) DEFAULT NULL,
  `akses` TINYINT UNSIGNED DEFAULT NULL,
  `assignments` TEXT DEFAULT NULL,
  `file` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_assesmen_course_uid` (`course_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_courses` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_uid` INT UNSIGNED NOT NULL,
  `course_uid` INT UNSIGNED NOT NULL,
  `certificate_number` VARCHAR(255) DEFAULT NULL,
  `number` VARCHAR(50) DEFAULT NULL,
  `status` VARCHAR(50) DEFAULT NULL,
  `tujuan_asesmen` VARCHAR(255) DEFAULT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
  `ktp` VARCHAR(255) DEFAULT NULL,
  `ijasah` VARCHAR(255) DEFAULT NULL,
  `sertifikat` VARCHAR(255) DEFAULT NULL,
  `sk_pertanian` VARCHAR(255) DEFAULT NULL,
  `signature` VARCHAR(255) DEFAULT NULL,
  `accepted_time` DATETIME DEFAULT NULL,
  `alasan` TEXT DEFAULT NULL,
  `bukti_bayar` VARCHAR(255) DEFAULT NULL,
  `upload_time` DATETIME DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_user_courses_user_uid` (`user_uid`),
  KEY `idx_user_courses_course_uid` (`course_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `grades` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_uid` INT UNSIGNED NOT NULL,
  `assesment_uid` INT UNSIGNED NOT NULL,
  `status` VARCHAR(50) DEFAULT NULL,
  `correct` TEXT DEFAULT NULL,
  `answer` VARCHAR(255) DEFAULT NULL,
  `signature_asesi` VARCHAR(255) DEFAULT NULL,
  `asesi_upload_time` DATETIME DEFAULT NULL,
  `signature_admin` VARCHAR(255) DEFAULT NULL,
  `revisi_request` VARCHAR(255) DEFAULT NULL,
  `revisi_datetime` DATETIME DEFAULT NULL,
  `alasan` TEXT DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_grades_user_uid` (`user_uid`),
  KEY `idx_grades_assesment_uid` (`assesment_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `riwayat_asesment` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_uid` INT UNSIGNED NOT NULL,
  `user_courses_uid` INT UNSIGNED NOT NULL,
  `assesment_uid` INT UNSIGNED NOT NULL,
  `status` VARCHAR(50) DEFAULT NULL,
  `text` TEXT DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_riwayat_user_uid` (`user_uid`),
  KEY `idx_riwayat_user_courses_uid` (`user_courses_uid`),
  KEY `idx_riwayat_assesment_uid` (`assesment_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `apl02` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `grades_uid` INT UNSIGNED NOT NULL,
  `kode_unit` VARCHAR(100) DEFAULT NULL,
  `elemen` INT UNSIGNED DEFAULT NULL,
  `kompeten` VARCHAR(100) DEFAULT NULL,
  `ijazah` VARCHAR(255) DEFAULT NULL,
  `sertifikat` VARCHAR(255) DEFAULT NULL,
  `sk` VARCHAR(255) DEFAULT NULL,
  `dokumen_digital` TEXT DEFAULT NULL,
  `files` LONGTEXT DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_apl02_grades_uid` (`grades_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `ak01` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `grades_uid` INT UNSIGNED NOT NULL,
  `tuk` VARCHAR(255) DEFAULT NULL,
  `hasil1` VARCHAR(100) DEFAULT NULL,
  `hasil2` VARCHAR(100) DEFAULT NULL,
  `hasil3` VARCHAR(100) DEFAULT NULL,
  `hasil4` VARCHAR(100) DEFAULT NULL,
  `hasil5` VARCHAR(100) DEFAULT NULL,
  `hasil6` VARCHAR(100) DEFAULT NULL,
  `hasil7` VARCHAR(100) DEFAULT NULL,
  `hasil8` VARCHAR(100) DEFAULT NULL,
  `hasil9` VARCHAR(100) DEFAULT NULL,
  `hasil10` VARCHAR(255) DEFAULT NULL,
  `hari_tanggal` VARCHAR(100) DEFAULT NULL,
  `waktu` VARCHAR(100) DEFAULT NULL,
  `tuk_input` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_ak01_grades_uid` (`grades_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `detail_assesmen` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid_assesmen` INT UNSIGNED NOT NULL,
  `soal` TEXT DEFAULT NULL,
  `file_soal` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_detail_assesmen_uid_assesmen` (`uid_assesmen`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `user_ktna` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nik` VARCHAR(100) DEFAULT NULL,
  `username` VARCHAR(255) DEFAULT NULL,
  `email` VARCHAR(255) DEFAULT NULL,
  `nomor_urut` VARCHAR(100) DEFAULT NULL,
  `nomor` VARCHAR(100) DEFAULT NULL,
  `jabatan` VARCHAR(255) DEFAULT NULL,
  `tem_lahir` VARCHAR(255) DEFAULT NULL,
  `tanggal_lahir` DATE DEFAULT NULL,
  `alamat` TEXT DEFAULT NULL,
  `provinsi` VARCHAR(255) DEFAULT NULL,
  `nomor_hp` VARCHAR(100) DEFAULT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `documents` (
  `uid` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_uid` INT UNSIGNED NOT NULL,
  `image` VARCHAR(255) DEFAULT NULL,
  PRIMARY KEY (`uid`),
  KEY `idx_documents_user_uid` (`user_uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `chat_messages` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `guest_id` VARCHAR(255) NOT NULL,
  `message` LONGTEXT DEFAULT NULL,
  `created_at` DATETIME DEFAULT NULL,
  `status` VARCHAR(50) DEFAULT 'unread',
  `admin_typing` TINYINT(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `idx_chat_guest_id` (`guest_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `artikel` (
  `Id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `thumbnail` VARCHAR(255) DEFAULT NULL,
  `title` VARCHAR(255) DEFAULT NULL,
  `text` TEXT DEFAULT NULL,
  `tanggal` DATE DEFAULT NULL,
  `view_count` INT UNSIGNED DEFAULT 0,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;