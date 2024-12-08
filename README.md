
# **Expense Tracker Application**

A simple Laravel-based application to track incomes and expenses, allowing users to categorize their expenses and view a summary of their financial activities. The project is a work-in-progress.

---

## **Features**

### ✅ Implemented Features:
- Add, edit, and delete incomes.
- Add, edit, and delete expenses.
- Assign categories to expenses.
- View a paginated list of incomes and expenses.
- See the total income, total expense, and remaining balance on the dashboard.

### 🔧 Planned Features:
- Manage categories (create, edit, delete).
- Export data to CSV or Excel.
- Visualize trends using charts (e.g., monthly spending trends, category-wise breakdown).
- Add user authentication for personalized data.
- Improve UI/UX design.

---

## **Installation Instructions**

### **1. Clone the Repository**
```bash
git clone https://github.com/your-username/expense-tracker.git
cd expense-tracker
```

### **2. Install Dependencies**
Make sure you have PHP, Composer, and Node.js installed on your system.

```bash
composer install
npm install
npm run dev
```

### **3. Configure the Environment**
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

Generate the application key:
```bash
php artisan key:generate
```

Set up your database credentials in the `.env` file:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=expense_tracker
DB_USERNAME=root
DB_PASSWORD=your_password
```

### **4. Run Migrations and Seeders**
Create the database tables and seed some initial data:
```bash
php artisan migrate
php artisan db:seed --class=CategorySeeder
```

### **5. Start the Development Server**
```bash
php artisan serve
```

Visit the application at [http://127.0.0.1:8000](http://127.0.0.1:8000).

---

## **Usage**

### **1. Dashboard**
- Navigate to `/dashboard` to view:
  - Total income
  - Total expense
  - Remaining balance

### **2. Manage Expenses**
- Add a new expense: `/expenses/create`.
- Edit an existing expense: `/expenses/{id}/edit`.
- View a list of all expenses: `/expenses`.

### **3. Manage Incomes**
- Add a new income: `/incomes/create`.
- Edit an existing income: `/incomes/{id}/edit`.
- View a list of all incomes: `/incomes`.

---

## **Project Structure**

- **Controllers**:
  - `IncomeController`: Handles CRUD operations for incomes.
  - `ExpenseController`: Handles CRUD operations for expenses.
  - `DashboardController`: Manages dashboard-related data.

- **Models**:
  - `Income`: Represents an income record.
  - `Expense`: Represents an expense record, associated with a category.
  - `Category`: Represents a category for expenses.

- **Views**:
  - `/resources/views/expenses`: Contains views for managing expenses.
  - `/resources/views/incomes`: Contains views for managing incomes.
  - `/resources/views/dashboard`: Contains the dashboard view.

---

## **Technologies Used**

- **Backend**: Laravel 10
- **Frontend**: Blade templating engine, Bootstrap 5
- **Database**: MySQL
- **Charts (Planned)**: Chart.js
- **Exporting (Planned)**: Laravel Excel

---

## **Contribution Guidelines**
This is currently a personal project, but contributions are welcome! If you’d like to contribute:
1. Fork the repository.
2. Create a feature branch: `git checkout -b feature-name`.
3. Commit your changes: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-name`.
5. Open a pull request.

---

## **License**
This project is open-source and available under the MIT License.

---

## **Contact**
If you have any questions or feedback, feel free to reach out:

- Name: Mahmoud
- Email: your-email@example.com
- GitHub: [Your GitHub Profile](https://github.com/your-username)

---

### **Next Steps**

1. Update the README as you implement new features.
2. If you’re planning to deploy, add deployment instructions (e.g., Laravel Forge, Docker).
3. Let me know if you’d like help with any of the planned features!

😊
