# 📚 School Library Management System

## Overview

School Library Management System adalah aplikasi berbasis **PHP Native** yang dikembangkan menggunakan arsitektur **MVC (Model-View-Controller)** dengan pendekatan **Object-Oriented Programming (OOP)**.

Sistem ini dirancang sebagai pondasi untuk membangun aplikasi perpustakaan sekolah yang aman, mudah dikembangkan, dan menerapkan **Role-Based Access Control (RBAC)** sebagai mekanisme otorisasi pengguna.

---

# Project Goals

* Membangun sistem dengan arsitektur yang rapi.
* Menerapkan konsep MVC tanpa framework.
* Mengimplementasikan autentikasi dan otorisasi menggunakan RBAC.
* Menghasilkan kode yang mudah dipelihara (Maintainable).
* Menjadi portofolio Full Stack Web Developer.

---

# Technology Stack

## Backend

* PHP Native (OOP)
* MySQLi Object Oriented
* MVC Architecture

## Database

* MySQL / MariaDB

## Frontend

* HTML5
* CSS3
* JavaScript

---

# Architecture

```
Client
   │
   ▼
Controller
   │
   ▼
Model
   │
   ▼
Database
```

View hanya bertugas menampilkan data.

Controller mengatur alur aplikasi.

Model bertugas berkomunikasi dengan database.

---

# Project Structure

```
school-library/

app/
│
├── config/
│      Database.php
│
├── controllers/
│      AuthController.php
│      DashboardController.php
│
├── helpers/
│      auth.php
│
├── middleware/
│      auth.php
│      permission.php
│
├── models/
│      BaseModel.php
│      User.php
│      Role.php
│      Permission.php
│      LibraryVisit.php
│
├── views/
│      auth/
│      dashboard/
│      library/
│
public/
│
├── login.php
├── logout.php
├── dashboard.php
│
assets/
database/
vendor/
```

---

# Development Flow

## Phase 1

Database Design

* Create Database
* Create Tables
* Foreign Keys
* Relationships

---

## Phase 2

Master Data

* Roles
* Permissions
* Role Permissions

---

## Phase 3

Authentication

* Login
* Logout
* Password Hashing
* Session

---

## Phase 4

Authorization

RBAC

```
Users
   │
User Roles
   │
Roles
   │
Role Permissions
   │
Permissions
```

---

## Phase 5

Dashboard

Dashboard akan ditampilkan sesuai permission pengguna.

---

## Phase 6

Library Visit Module

* Input Kunjungan
* Edit Kunjungan
* Hapus Kunjungan
* Lihat Riwayat
* Laporan

---

# Database Tables

## Security

* users
* roles
* permissions
* user_roles
* role_permissions

---

## Human Profile

* students
* teachers

---

## Academic

* classrooms
* academic_years
* student_academics

---

## Library

* library_visits

---

# RBAC Concept

Role menentukan sekumpulan hak akses.

Permission menentukan aksi yang boleh dilakukan.

Contoh:

```
Admin

users.create
users.update
users.delete

roles.create
roles.update

permissions.create

visits.create
visits.update
reports.export
```

Sedangkan:

```
Librarian

visits.create
visits.update
visits.delete

reports.view
reports.export
```

---

# Coding Standard

Semua query SQL berada di Model.

Controller tidak boleh menulis SQL.

View tidak boleh mengakses database.

Semua halaman harus melewati Middleware.

Semua autentikasi menggunakan Session.

Semua password menggunakan:

```
password_hash()

password_verify()
```

Semua hak akses menggunakan:

```
hasPermission()
```

bukan

```
$_SESSION['role']
```

---

# Development Roadmap

## Database

* [x] Database
* [x] Tables
* [x] Roles
* [x] Permissions
* [x] Role Permissions

---

## Authentication

* [ ] Database Class
* [ ] BaseModel
* [ ] User Model
* [ ] Login
* [ ] Logout
* [ ] Session

---

## Authorization

* [ ] Auth Helper
* [ ] Middleware
* [ ] Permission Helper

---

## Dashboard

* [ ] Dashboard UI
* [ ] Dynamic Menu
* [ ] Profile

---

## Library

* [ ] Digital Visit Form
* [ ] Visit History
* [ ] Search
* [ ] Reports
* [ ] Export

---

# Coding Principles

* Don't Repeat Yourself (DRY)
* Separation of Concerns (SoC)
* Single Responsibility Principle (SRP)
* MVC Pattern
* Object-Oriented Programming (OOP)
* Role-Based Access Control (RBAC)

---

# Future Development

* Book Management
* Borrowing System
* Returning System
* QR Code Check-In
* Visitor Statistics
* Notification System
* REST API
* Laravel Migration

---

# Learning Objectives

Melalui proyek ini diharapkan memahami:

* PHP Native
* OOP
* MVC
* MySQL
* Database Design
* Authentication
* Authorization
* Session
* RBAC
* Clean Code
* Software Architecture

---

# Final Goal

Membangun sistem perpustakaan sekolah yang aman, modular, mudah dikembangkan, dan dapat dijadikan portofolio profesional sebagai Full Stack Web Developer.
