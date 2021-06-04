# Phone number list 
## this is basic implementation for listing phone numbers
### Features
- [x] fetch customrers from DB
- [x] Validate phone numbers with regex
- [x] Map phone to country and add state 
- [x] Filter phone by country and state
- [] Enhance the performance by adjust db and create country table and attach it to customers table it will save us from logic complexity
- [] Pagiantion 

**tests** 

* it test database connection
* it test it can fetch customers from db
* it test listing phones 
* it test filters work as desired 

#### Setup & installation
* git clone git@github.com:mohammedabdallah/jumiaTask.git
* cd jumiaTask
* composer install
* cd public
* php -S localhost:8000

###usage 
* open browser and hit http://localhost:8000/ 
