# 📊 HKI Dashboard – Pusat Hak Kekayaan Intelektual IT PLN

A web-based dashboard for managing and monitoring **Hak Kekayaan Intelektual (HKI)** data such as **Paten, Merek, Hak Cipta, Buku, and Prototipe**.  
Built with **Laravel 11**, this system helps administrators register, manage, and track intellectual property submissions in a structured and user-friendly way.

---

## 🚀 Features

### 🔑 Authentication
- User registration & login
- Role-based access (Admin / User)

### 📈 Dashboard
- Line chart: Growth of Paten, Merek, Hak Cipta per month
- Pie chart: Percentage distribution
- Cards: Total, Paten, Merek, Hak Cipta
- Activity log: Latest actions by users

### 📂 Data Management
- **Pendaftaran Data**
  - HKI (Paten, Merek, Hak Cipta)
  - Buku
  - Prototipe
- **List Data**
  - HKI
  - Buku
  - Prototipe

### 📑 Documents
- Upload and download documents (proposal, profil startup, etc.)
- Document viewer per entry

### 👤 User Management
- Manage team data (Ketua, Anggota, No HP)
- OTP verification (optional)
- Two-factor authentication (Laravel default support)

---

## 🛠️ Tech Stack

- **Backend:** [Laravel 11](https://laravel.com/) (PHP 8.3+)
- **Frontend:** Blade, Bootstrap 5, Chart.js
- **Database:** MySQL 8+
- **Auth:** Laravel Breeze / Fortify
- **Server:** Apache / Nginx (tested on Laragon)

---

## 📸 Screenshots

### Dashboard
![Dashboard Screenshot](f1bb9326-a4df-4262-ba96-cbd18cc60209.png)

### Sidebar
![Sidebar Screenshot](507f8b23-f5cc-4640-8413-7fc4c4077ad0.png)

---

## ⚙️ Installation

1. **Clone Repository**
   ```bash
   git clone https://github.com/username/hki-dashboard.git
   cd hki-dashboard
