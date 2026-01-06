# SISTEM PEMBAYARAN SPP MODERN — SPPR

## 🚀 Key Improvements (As of Jan 2026)
- **Modern UI/UX**: Completely redesigned with a premium light-mode theme using the **Inter font** and custom design systems.
- **PHP 8.4 Support**: Optimized codebase and dependencies for the latest PHP standards.
- **Unified Dashboard**: Streamlined user experience by unifying all role entry points into a single, smart dashboard.
- **Refined Security**: Enhanced authentication flow with redesigned login and profile management.

## 🛠 Technology Stack
- **Core**: Laravel 8.75+ (Stabilized for PHP 8.4)
- **UI Architecture**: AdminLTE 3.1.0 with Custom Modern Theme (CSS)
- **Database**: MySQL
- **Frontend Components**: Yajra DataTables, SweetAlert 2, Chart.js
- **Auth & Access**: Laravel Fortify, Spatie Role-Permission
- **Reporting**: Laravel DOMPDF

## 🔑 Login Credentials (Seed Data)

| Role | Username | Password |
| :--- | :--- | :--- |
| **Admin** | `admin123` | `password` |
| **Petugas** | `elaina123` | `password` |
| **Siswa 1** | `diva123` | `password` |
| **Siswa 2** | `yuu123` | `password` |

## 📦 Features

### 💻 Administrator & Petugas
- **Unified Dashboard**: Real-time stats with modern data visualization (Chart.js).
- **Core Management**: CRUD for Siswa, Kelas, Petugas, and SPP Nominal (Ajax-powered).
- **Payment Processing**: Streamlined payment entry and status tracking.
- **Reporting**: Export history and student reports to PDF.
- **User Control**: (Admin only) Comprehensive Role & Permission management.

### 🎓 Siswa (Student)
- **Payment Dashboard**: View current payment status and history.
- **Transaction History**: Detailed logs of all previous payments.
- **PDF Reports**: Personal report generation for payment records.

## 🛠 Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/IkidMasmu17/Pembayaran_SPP.git
   ```
2. **Setup Dependencies**:
   ```bash
   composer update
   npm install && npm run dev
   ```
3. **Configuration**:
   - Copy `.env.example` to `.env`.
   - Configure your database settings.
   - Run `php artisan key:generate`.
4. **Database Setup**:
   ```bash
   php artisan migrate --seed
   ```
5. **Serve**:
   ```bash
   php artisan serve
   ```

---
*Maintained by IkidMasmu17 | Modernized by Antigravity AI*
