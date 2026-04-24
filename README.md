# 🎓 PRISM — Curriculum Management System

PRISM is a web-based application designed to manage academic curriculum data across multiple study programs in a centralized, structured, and well-documented manner.

The system helps academic administrators create, update, and publish curriculum information, making it accessible for both internal stakeholders and the public.

---

## 🚀 Features

* 📚 Curriculum management by year/period
* 🏫 Study program management
* 📖 Course (subject) management with credit units (SKS)
* 🧩 Curriculum structure organization per semester
* 📝 Syllabus management
* 🕓 Curriculum change history tracking
* 🌐 Public curriculum access (no login required)

---

## 👥 User Roles

| Role                    | Description                           |
| ----------------------- | ------------------------------------- |
| Admin / Curriculum Team | Manage all curriculum-related data    |
| Public Users            | View published curriculum information |

---

## 🧱 Tech Stack

* **Backend:** Laravel
* **Frontend:** Blade, Tailwind CSS
* **Database:** MySQL
* **Tools:** Vite, Laragon, Visual Studio Code

---

## ⚙️ Installation

```bash id="1pnlm3"
git clone https://github.com/username/prism.git
cd prism
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm run dev
php artisan serve
```

---

## 📁 Project Structure (Simplified)

```id="q3u7k8"
app/              # Application logic (Controllers, Models)
resources/views   # Blade templates (UI)
public/           # Assets (images, compiled CSS/JS)
routes/web.php    # Web routes
```

---

## 📊 System Overview

PRISM enables:

* Centralized curriculum management across study programs
* Historical tracking of curriculum changes
* Public access to published curriculum data

The system is accessible via web browsers without requiring additional installation.

---

## 👨‍💻 Authors

* Firgi Wardanas
* Swandy Sianturi
* Alyana Maharani Gustav
* Bella Fadhilla Khairunnisyah Effendi

---

## 📄 License

This project is intended for educational and development purposes.
