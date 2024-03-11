# Visit [mtrinidad.ronins.site](https://mtrinidad.ronins.site) to explore the Tech Journal app in action.


# Tech Journal App

Tech Journal is a Laravel web application designed for tech enthusiasts to journal their thoughts, ideas, and experiences. The app is styled using Tailwind CSS and incorporates the Toast UI Editor for Markdown. It also integrates the NewsData.io API to provide real-time access to the latest tech news.

## Features

- **Markdown Journaling:** Use the Toast UI Editor to write and format your tech journal entries with ease.

- **Real-time Tech News:** Stay up-to-date with the latest tech news through integration with the NewsData.io API.

- **Automated Tech News Fetching:**
  - Created an artisan command to fetch tech news every 2 days.
  - The command is executed with a bash script on a cron job, ensuring timely updates.

- **Backup and Cron Jobs:** Secure your data with shell scripts for MySQL and app backups. Configure server and local cron jobs for automatic execution and synchronization.

- **CI/CD with GitHub Actions:** Implement continuous integration and continuous deployment using GitHub Actions. Automate PHPUnit testing, PHPStan code linting, and deployment to shared hosting.
