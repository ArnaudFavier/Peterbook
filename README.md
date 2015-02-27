# Peterbook
A little social network named Peterbook developed in PHP with CodeIgniter for the english course.

## Functionalities (future)
- Member area (subscription, sign in) -> just users and no admin
- Profile picture and humor message
- Each member have a wall, to write a post on it
- Each member can comment or like other post
- All post are public

- Idea of friends (add, delete) can be possible

##Installation
- PHP version >= 5.5.x (Apache >= 2.4.x, MySQL >= 5.6.x)
- Create a database named *peterbook*
- Execute the SQL in *peterbook.sql* file
- Modify index type in *post* table structure (foreign USERNAMEPOST -> INDEX (not UNIQUE))
- Activate Apache *rewrite_module* module
