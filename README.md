# Hanh_Project_Intern_Codeception

This is My Project Intern about test automation for website "book ticket online"


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
- View cart
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
- đổi tên remote:    $ git remote rename old_name new_name
- xóa tên remote:   $ git remote rm remote_name
- xóa branch: $ git branch -D branch_name
- xóa file trong commit: $ git rm <file>
- đổi tên branch: $ git branch -m branch_name_new (Nhớ là đứng tại branch muốn đổi tên)
- update submodule: $ git submodule init
- loại bỏ file ra khỏi stage (lỡ add): $ git reset HEAD file_name
- khi người khác tác động vào code của mình, mình phải fetch chính branch của mình rồi mới pull cái mới nhất được
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
- Có thể sử dụng gulp copy thay cho gulp release, change config trong file gulp-config.json ("wwwDir"        : "C:/xampp/htdocs/aesec-5166")(vd phải có sẵn aesec rồi mới copy PRs của aesec. Khi copy nó sẽ tự động copy toàn bộ PRs hiện tại qua site local của mình, nếu update site thì install sql và php riêng...)
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
  hoặc node_modules/.bin/gulp release
## Cách intall 1 site mới
- Giải nén file joomla.zip vào folder mình muốn tạo cho site mới.\
- Đổi dữ liệu trong file codeception.suite.yml : user, pass, url, name database, database host: "localhost"
- Chạy file tests\acceptance\install\1-InstallJoomlaTestCest.php
 
## Cách chuyển qua nhánh khác mà không cần commit code
- git stash save
- git checkout branch A // Checkout and làm việc trên nhánh khác
- git checkout branch B // checkout lại nhánh đang làm việc
- git stash pop stash@{0} // Mở lại những file đã save lại
- git stash clear // Xóa toàn bộ list đã save trong stash
- git stash list // xem toàn bộ

## Cách setup 1 site client dưới local để check (vd: 3ktools.dk)
- Clone code của project về htdocs folder
- Tạo data base 
- Opend Xampp/Shell terminal
- mysql -u root -p → Enter → input password (nhấn enter nếu không có password)
- use 3ktools (it mean 'use "name of database"')
- source C:/xampp/htdocs/3ktools.dk/redgit/sql/3ktools_structure.sql
- source C:/xampp/htdocs/3ktools.dk/redgit/sql/3ktools_data.sql
- Copy configuration.onl.phg to configuration.php
- Change the "user" and "password" of this file for matching with your setup local(user and pass của php).
- open the site with correct url . you will get the perfect site on local . (maybe the site will can't run on local because
public $force_ssl = '2'; and you need to change value to 0  on configuration.php) 

## Các bước setup 1 site mới để chạy codeception
- Install via composer: composer require "codeception/codeception" --dev
- Setup:
  vendor/bin/codecept bootstrap // This creates configuration file codeception.yml and tests directory and default test suites.
  vendor/bin/codecept build 
  vendor/bin/codecept generate:suite api

## Các bước pull code từ 1 unknow repository
- git fetch upstream refs/pull/6106/head:AESEC-5568
[trong đó: 6106 là pr_number, AESEC-5568 là tên branch muốn đặt]
- git checkout AESEC-5568
[checkout ra nhánh vừa đc tạo, sau đó thực hiện các thao tác bình thường: edit, commit,...]
- git push origin AESEC-5568
[push code lên server]

## CodeceptJS
0. start with empty project initialize npm first:
npm init -y

1. Install CodeceptJS with Puppeteer
npm install codeceptjs puppeteer --save-dev

2. Initialize CodeceptJS in current directory by running:
npx codeceptjs init
Answer questions. Agree on defaults, when asked to select helpers choose Puppeteer.

3. Generate step definitions with
To get autocompletion when working with CodeceptJS
npx codeceptjs def

4. Create First Test: npx codeceptjs gt
Create Page Objects: npx codeceptjs gpo
Create Steps Objects: npx codeceptjs go --type step

5. Run a test:
To see the step-by-step output of running tests, add the --steps flag:
npx codeceptjs run --steps

To see a more detailed output add the --debug flag:
npx codeceptjs run --debug

To see very detailed output informations use the --verbose flag:
npx codeceptjs run --verbose

A single test file can be executed if you provide a relative path to such a file:
npx codeceptjs run github_test.js
### or
npx codeceptjs run admin/login_test.js

To filter a test by name use the --grep parameter, which will execute all tests with names matching the regex pattern.

To run all tests with the slow word in it:
npx codeceptjs run --grep "slow"

6. Dependency Injection

All objects described here are injected with Dependency Injection. The similar way it happens in AngularJS framework. If you want an object to be injected in scenario by its name add it to configuration

Now this objects can be retrieved by the name specified in configuration.

Via global inject() call.

Required objects can be obtained via parameters in tests


