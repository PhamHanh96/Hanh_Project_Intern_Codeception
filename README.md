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
- git fetch upstream
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
- git reset --hard (xóa tất cả những gì mình đã thay đổi)
- Luôn luôn đứng ở nhánh dev để chạy composer install/update, sau đó checkout ra nhánh của task mới nhận rồi làm việc
## Các bước để check task của backend khi đc assign: ví dụ check task của Bảo https://github.com/redCOMPONENT-COM/redSHOP/pull/4384/files, luôn chuyển sang trạng thái `in QA` khi bắt đầu check task
- Mở task lên, copy REDSHOP-5144
- Mở https://redweb.atlassian.net/browse/REDSHOP-5144, paste REDSHOP-5144 vào đuôi
- Re-assigne
- Quay trở lại https://github.com/redCOMPONENT-COM/redSHOP/pull/4384/files, click vào insights/Forks/Bao
- Tìm kiếm theo tên của Bảo, lấy link github https://github.com/NguyenBao10/redSHOP.git
- git remote add bao https://github.com/NguyenBao10/redSHOP.git
- git remote -v
- git fetch bao
- git checkout -b REDSHOP-5144 bao/REDSHOP-5144
- git branch
- Check xem code mình lấy về đã có thay đổi như bên nhánh của Bảo chưa
- gulp release -> cài lại redSHOP với phiên bản vừa được tạo ra sau khi gulp nằm ở thử mục redSHOP\releases
- Tiến hành check
- Nếu pass -> Resolve Issue
- Nếu fail -> Reopend task
## Nếu check again 1 task: ví dụ check lại task REDSHOP-5144 của Bảo
- git checkout develop
- git fetch bao
- git checkout REDSHOP-5144
- git pull
- Check code xem đã lấy về đúng chưa
- gulp release -> cài lại redSHOP
- Tiến hành check lại
## Đối với Aeser-e-commerce: các bước tương tự như REDSHOP
- Trước khi gulp nhớ phải: cd build
- npm install --save-dev (Cho chắc)
- node_modules/.bin/gulp release --skip-version
