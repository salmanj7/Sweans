
## 🚀 Features

- Responsive product grid using Tailwind CSS
- Product image rendering from external URLs (e.g., Unsplash)
- Database seeding for sample product data

---

## 🛠️ Setup Instructions

Follow the steps below to clone and run the project locally.

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/laravel-products.git
cd laravel-products

2. Install Dependencies
composer install
npm install && npm run dev

3. Configure Environment
cp .env.example .env
php artisan key:generate

4.Run Migrations & Seeders
php artisan migrate --seed

5.Start the Laravel Development Server
php artisan serve
