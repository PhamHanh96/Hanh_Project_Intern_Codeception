# Hanh_Project_Intern_Codeception

This is My Project Intern

My Project Intern

This is my project intern codeception.

## Workflow:
- Step1: Admin Login.
- Step2: Admin create new Bus.
- Step3: Admin create new Route.
- Step4: Admin create new Schedule.
- Step5: User Login or Register if do not have account, after Login in website.
- Step6: User search Schedule and book tickets.
- Step7: Users check their cart.
## Admin:
- Login, Edit information, Logout
- Create new Route, edit & delete Route
- Create new Bus, edit & delete Bus
- Create new Schedule, edit & delete Schedule. Before create new schedule, you must create new Route & new Bus
- Create new Employee, edit & delete Employee
## User:
- Register, Login & Logout
- Edit information $ View information
- Book ticket
- View car
## Video Walkthrough:
https://imgur.com/a/48Vab16
(Demo Codeception)

https://imgur.com/cPMXkRB
(Update User Logout)

## Cách pull và push code trên github của redSHOP:
- Copy đường dẫn: https://github.com/PhamHanh96/redSHOP.git
- git clone https://github.com/PhamHanh96/redSHOP.git
- cd redSHOP
- git remote -v (kiểm tra các nhánh)
- git remote add upstream https://github.com/redCOMPONENT-COM/redSHOP.git (đường dẫn github của công ty)
- git remote -v (kiểm tra lại cho chắc)
- git featch upstream
### Sau khi nhận task mới:
- git pull upstream develop (đồng bộ code của công ty)
- git merge upstream/develop (merge vào nhánh dev của công ty)
- git push origin develop
- git checkout -b REDSHOP-5161 upstream/develop (REDSHOP-5161 là đuôi của task được giao)
- git branch (kiểm tra lại nhánh đang đứng)
- git status (kiểm tra các file thay đổi)
- git add tenfile (hoặc nếu muốn add tất cả các file dùng: git add . )
- git commit -m ""
- git push origin REDSHOP-5161 (push lên nhánh nãy mới tạo có tên là đuôi của task được giao)
## Note:
- git reset -hard (xóa tất cả những gì mình đã thay đổi)
- Luôn luôn đứng ở nhánh dev để chạy composer install/update, sau đó checkout ra nhánh của task mới nhận rồi làm việc

